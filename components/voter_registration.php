<?php
// Include the database configuration
include('db_config.php');

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $last_name = isset($_POST['last_name']) ? $_POST['last_name'] : '';
    $first_name = isset($_POST['first_name']) ? $_POST['first_name'] : '';
    $middle_name = isset($_POST['middle_name']) ? $_POST['middle_name'] : '';
    $suffix = isset($_POST['suffix']) ? $_POST['suffix'] : '';
    $date_of_birth = isset($_POST['date_of_birth']) ? $_POST['date_of_birth'] : '';
    $sex = isset($_POST['sex']) ? $_POST['sex'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $citizenship = isset($_POST['citizenship']) ? $_POST['citizenship'] : '';
    $municipality = isset($_POST['municipality']) ? $_POST['municipality'] : '';
    $city = isset($_POST['city']) ? $_POST['city'] : '';
    $province = isset($_POST['province']) ? $_POST['province'] : '';
    $mobile_number = isset($_POST['mobile_number']) ? $_POST['mobile_number'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    // Check if required fields are not empty
    if (empty($last_name) || empty($first_name) || empty($email) || empty($password)) {
        echo "Error: All required fields must be filled.";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert data into the database
        $sql = "INSERT INTO voter (last_name, first_name, middle_name, suffix, date_of_birth, sex, address, citizenship, municipality, city, province, mobile_number, email, password) 
                VALUES ('$last_name', '$first_name', '$middle_name', '$suffix', '$date_of_birth', '$sex', '$address', '$citizenship', '$municipality', '$city', '$province', '$mobile_number', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            // Redirect to index.php after successful registration
            header("Location: index.php");
            exit(); // Ensure that no further code is executed after the redirection
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="voter_registration.css">
    <title>Voter Registration</title>
</head>

<body>

    <div class="row">
        <div class="column" style="background-color:#aaa;">
            <h2>Image header</h2>
            <p>This is for image</p>
        </div>
        <div class="column">
            <section class="container">
                <h1> REGISTRATION</h1>
                <br>
                <div class="checkbox">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Data Privacy Compliance</label><br>
                    <br>
                </div>
                <form action="#" class="form" method="post">
                    <div class="input-box">
                        <label>Last Name</label>
                        <br>
                        <input required type="text" name="last_name" placeholder="">
                    </div>
                    <div class="input-box">
                        <label>First Name</label>
                        <br>
                        <input required type="text" name="first_name" placeholder="">
                    </div>
                    <div class="input-box">
                        <label>Middle Name</label>
                        <br>
                        <input required type="text" name="middle_name" placeholder="">
                    </div>

                    <div class="secondrow">
                        <div class="input-box-suffix">
                            <label>Suffix</label>
                            <br>
                            <input type="text" name="suffix" placeholder="">
                        </div>
                        <div class="input-box-dateOB">
                            <label>Date of Birth</label>
                            <br>
                            <input type="text" name="date_of_birth" placeholder="">
                        </div>
                        <div class="input-box-sex">
                            <label>Sex</label>
                            <br>
                            <input type="text" name="sex" placeholder="">
                        </div>
                    </div>

                    <div class="thridrow">
                        <div class="input-box">
                            <label>Address</label>
                            <br>
                            <input required type="text" name="address" placeholder="">
                        </div>
                        <div class="input-box">
                            <label>Citizenship</label>
                            <br>
                            <input required type="text" name="citizenship" placeholder="">
                        </div>
                    </div>

                    <div class="fourthrow">
                        <div class="input-box-municipality">
                            <label>Municipality</label>
                            <br>
                            <input required type="text" name="municipality" placeholder="">
                        </div>
                        <div class="input-box">
                            <label>City</label>
                            <br>
                            <input required type="text" name="city" placeholder="">
                        </div>
                    </div>

                    <div class="fifthrow">
                        <div class="input-box-province">
                            <label>Province</label>
                            <br>
                            <input required type="text" name="province" placeholder="">
                        </div>
                        <div class="input-box">
                            <label>Mobile Number</label>
                            <br>
                            <input required type="text" name="mobile_number" placeholder="">
                        </div>
                    </div>

                    <div class="sixthrow">
                        <div class="input-box">
                            <label>E-Mail</label>
                            <br>
                            <input required type="text" name="email" placeholder="">
                        </div>
                    </div>

                    <div class="seventhrow">
                        <div class="input-box">
                            <label>Password</label>
                            <br>
                            <input required type="password" name="password" placeholder="">
                        </div>
                    </div>

                    <div class="eigthrow">
                        <div class="btn-register">
                            <button type="submit">REGISTER</button>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>

</body>

</html>