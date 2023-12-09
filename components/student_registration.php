<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/student_registration.css">
    <title>Student Registration</title>
</head>

<body>

    <div class="row">
        <div class="column" style="background-color:#aaa;">
            <h2>Image header</h2>
            <p>This is for image</p>
        </div>
        <div class="column">
            <section class="container">
                <h1>REGISTRATION</h1>
                <br>
                <div class="checkbox">
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> Data Privacy Compliance</label><br>
                    <br>
                </div>
                <form action="student_registration_process.php" method="post" class="form">
                    <div class="error-message">
                        <?php
                        if (!empty($inputError)) {
                            echo "<p style='color: red;'>$inputError</p>";
                        } elseif (!empty($passwordError)) {
                            echo "<p style='color: red;'>$passwordError</p>";
                        }
                        ?>
                    </div>
                    <div class="input-box">
                        <label>Last Name *</label>
                        <br>
                        <input required type="text" name="last_name" placeholder="">
                    </div>
                    <div class="input-box">
                        <label>First Name *</label>
                        <br>
                        <input required type="text" name="first_name" placeholder="">
                    </div>
                    <div class="input-box">
                        <label>Middle Name *</label>
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
                            <label>Address *</label>
                            <br>
                            <input required type="text" name="address" placeholder="">
                        </div>
                        <div class="input-box">
                            <label>Citizenship *</label>
                            <br>
                            <input required type="text" name="citizenship" placeholder="">
                        </div>
                    </div>

                    <div class="fourthrow">
                        <div class="input-box-municipality">
                            <label>Municipality *</label>
                            <br>
                            <input required type="text" name="municipality" placeholder="">
                        </div>
                        <div class="input-box">
                            <label>City *</label>
                            <br>
                            <input required type="text" name="city" placeholder="">
                        </div>
                    </div>

                    <div class="fifthrow">
                        <div class="input-box-province">
                            <label>Province *</label>
                            <br>
                            <input required type="text" name="province" placeholder="">
                        </div>
                        <div class="input-box">
                            <label>Mobile Number *</label>
                            <br>
                            <input required type="text" name="mobile_number" placeholder="">
                        </div>
                    </div>
                    <div class="input-box">
                        <label>Course *</label>
                        <br>
                        <input required type="text" name="course" placeholder="">
                    </div>

                    <div class="input-box">
                        <label>Year Level *</label>
                        <br>
                        <input required type="text" name="year_level" placeholder="">
                    </div>

                    <div class="input-box">
                        <label>Student Number *</label>
                        <br>
                        <input required type="text" name="student_number" placeholder="">
                    </div>

                    <div class="sixthrow">
                        <div class="input-box">
                            <label>E-Mail *</label>
                            <br>
                            <input required type="text" name="email" placeholder="">
                        </div>
                    </div>

                    <!-- Add this inside the form tag -->
                    <div class="seventhrow">
                        <div class="input-box">
                            <label>Password *</label>
                            <br>
                            <input required type="password" name="password" id="password" placeholder=""
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[\W_]).{6,}"
                                title="Password must contain at least 6 characters, including at least one uppercase letter, one lowercase letter, one number, and one special character">
                        </div>
                    </div>
                    <div class="ninthrow">
                        <div class="input-box">
                            <label>Confirm Password *</label>
                            <br>
                            <input required type="password" name="confirm_password" id="confirm_password"
                                placeholder="">
                        </div>
                        <span style="color: red;">
                            <?php echo isset($passwordError) ? $passwordError : ''; ?>
                        </span>
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