<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the database configuration
include('db_config.php');

// Start session
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $email = $_POST['email'];
    $password = $_POST['password']; // Assuming your password field has the name "password"

    // Fetch user data from the database based on the entered email
    $sql = "SELECT * FROM voter WHERE email = '$email'";

    try {
        $result = $conn->query($sql);
        if ($result === false) {
            throw new Exception("Query failed: " . $conn->error);
        }

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashed_password = $row['password'];

            // Verify the entered password against the hashed password in the database
            if (password_verify($password, $hashed_password)) {
                // Password is correct, store user information in the session
                $_SESSION['user_id'] = $row['person_id']; // Assuming 'person_id' is the correct column
                $_SESSION['first_name'] = $row['first_name'];

                // Redirect to elections.php
                header("Location: elections.php");
                exit(); // Ensure that no further code is executed after the redirect
            } else {
                echo "Invalid password!";
            }
        } else {
            echo "User not found!";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        // Close the database connection
        $conn->close();
    }
} else {
    echo "Form not submitted"; // Debugging statement
}

?>