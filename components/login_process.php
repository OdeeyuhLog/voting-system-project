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

    // Fetch user data from the student table based on the entered email
    $studentSql = "SELECT * FROM student WHERE email = '$email'";

    try {
        $result = $conn->query($studentSql);
        if ($result === false) {
            throw new Exception("Query failed: " . $conn->error);
        }

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $hashed_password = $row['password'];

            // Verify the entered password against the hashed password in the database
            if (password_verify($password, $hashed_password)) {
                // Password is correct, store student information in the session
                $_SESSION['user_id'] = $row['person_id']; // Assuming 'person_id' is the correct column
                $_SESSION['first_name'] = $row['first_name'];

                // Redirect to elections.php
                header("Location: elections.php");
                exit(); // Ensure that no further code is executed after the redirect
            } else {
                echo "Invalid password!";
            }
        } else {
            // If the user is not found in the student table, try fetching from the candidate table
            $candidateSql = "SELECT * FROM candidate WHERE email = '$email'";
            $candidateResult = $conn->query($candidateSql);

            if ($candidateResult === false) {
                throw new Exception("Query failed: " . $conn->error);
            }

            if ($candidateResult->num_rows > 0) {
                $candidateRow = $candidateResult->fetch_assoc();
                $candidateHashedPassword = $candidateRow['password'];

                // Verify the entered password against the hashed password in the database
                if (password_verify($password, $candidateHashedPassword)) {
                    // Password is correct, store candidate information in the session
                    $_SESSION['user_id'] = $candidateRow['id']; // Assuming 'id' is the correct column
                    $_SESSION['first_name'] = $candidateRow['first_name'];

                    // Redirect to elections.php
                    header("Location: elections.php");
                    exit(); // Ensure that no further code is executed after the redirect
                } else {
                    echo "Invalid password!";
                }
            } else {
                echo "User not found!";
            }
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