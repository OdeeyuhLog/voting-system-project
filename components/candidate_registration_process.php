<?php
// Include the database configuration
include('db_config.php');

// Initialize the error message variables
$passwordError = '';
$inputError = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST)) {
    // Get form data

    // Fields array with unique keys
    $fields = ['last_name', 'first_name', 'middle_name', 'suffix', 'date_of_birth', 'sex', 'position', 'political_party', 'address', 'citizenship', 'municipality', 'city', 'province', 'mobile_number', 'course', 'year_level', 'student_number', 'email', 'password', 'confirm_password'];

    // Initialize variables
    $inputValues = [];
    foreach ($fields as $field) {
        $inputValues[$field] = isset($_POST[$field]) ? $_POST[$field] : '';
    }

    // Check if required fields are not empty
    if (in_array('', array_intersect_key($inputValues, array_flip(['last_name', 'first_name', 'email', 'password', 'confirm_password'])))) {
        $inputError = "Error: All required fields must be filled.";
    } else {
        foreach (['last_name', 'first_name', 'middle_name', 'position', 'political_party', 'citizenship', 'municipality', 'city', 'province'] as $field) {
            if (!is_string($inputValues[$field])) {
                $inputError = "Error: $field must be a text.";
                break;
            }
        }

        // Data type checks using a switch statement
        foreach (['last_name', 'first_name', 'middle_name', 'suffix', 'position', 'political_party', 'citizenship', 'municipality', 'city', 'province'] as $field) {
            if (!is_string($inputValues[$field])) {
                $inputError = "Error: $field must be a text.";
                break;
            }
        }

        // Check if email ends with '@adamson.edu.ph'
        $adamsonEmailSuffix = '@adamson.edu.ph';
        if (substr($inputValues['email'], -strlen($adamsonEmailSuffix)) !== $adamsonEmailSuffix) {
            $inputError = "Error: Email must end with '@adamson.edu.ph'.";
        } elseif (!filter_var($inputValues['email'], FILTER_VALIDATE_EMAIL)) {
            $inputError = "Error: Invalid email format.";
        }

        if (!is_numeric($inputValues['mobile_number'])) {
            $inputError = "Error: Mobile number must be a numeric value.";
        }

        // Check if email is valid
        if (!filter_var($inputValues['email'], FILTER_VALIDATE_EMAIL)) {
            $inputError = "Error: Invalid email format.";
        }

        // Check if password and confirm password match
        if ($inputValues['password'] !== $inputValues['confirm_password']) {
            $passwordError = "Error: Passwords do not match.";
        }

        // If no errors, proceed with database operations
        if (empty($inputError) && empty($passwordError)) {
            // Hash the password
            $hashed_password = password_hash($inputValues['password'], PASSWORD_DEFAULT);

            // Insert data into the database
            $sql = "INSERT INTO candidate (last_name, first_name, middle_name, suffix, date_of_birth, sex, position, political_party, address, citizenship, municipality, city, province, mobile_number, course, year_level, student_number, email, password) 
            VALUES ('$inputValues[last_name]', '$inputValues[first_name]', '$inputValues[middle_name]', '$inputValues[suffix]', '$inputValues[date_of_birth]', '$inputValues[sex]', '$inputValues[position]', '$inputValues[political_party]', '$inputValues[address]', '$inputValues[citizenship]', '$inputValues[municipality]', '$inputValues[city]', '$inputValues[province]', '$inputValues[mobile_number]', '$inputValues[course]', '$inputValues[year_level]', '$inputValues[student_number]', '$inputValues[email]', '$hashed_password')";

            if ($conn->query($sql) === TRUE) {
                // Redirect to login page
                header("Location: login.php");
                exit(); // Ensure no further code is executed after the redirect
            } else {
                // Display error message without redirecting
                $inputError = "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}
// Close the database connection
$conn->close();
?>