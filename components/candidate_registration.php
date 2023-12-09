<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/candidate_registration.css">
    <title>Candidate Registration</title>
</head>

<body>

    <section class="container">
        <h1>CANDIDATE REGISTRATION</h1>
        <div class="checkbox">
            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            <label for="vehicle1"> Data Privacy Compliance</label><br>
            <br>
        </div>
        <form action="candidate_registration_process.php" method="post" class="form">
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

                <div class="position">
                    <div class="input-box">
                        <label>Position to run for *</label>
                        <br>
                        <select required name="position">
                            <option value="" disabled selected>Select Position</option>
                            <option value="ASUG Rep">AUSG Rep</option>
                            <option value="President">President</option>
                            <option value="Vice Internal Affairs">Vice Internal Affairs</option>
                            <option value="Vice External Affairs">Vice External Affairs</option>
                            <option value="Secretary">Secretary</option>
                            <option value="Treasurer">Treasurer</option>
                            <option value="Auditor">Auditor</option>
                            <option value="P.R.O.">P.R.O.</option>
                        </select>
                    </div>
                </div>

                <div class="political">
                    <div class="input-box">
                        <label>Political Party Affiliated with *</label>
                        <br>
                        <input required type="text" name="political_party" placeholder="">
                    </div>
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

            <div class="seventhrow">
                <div class="input-box">
                    <label>Password *</label>
                    <br>
                    <input required type="password" name="password" placeholder="">
                </div>
                <div class="input-box">
                    <label>Confirm Password *</label>
                    <br>
                    <input required type="password" name="confirm_password" placeholder="">
                </div>
            </div>

            <div class="btn-register">
                <button type="submit">REGISTER</button>
            </div>
        </form>
    </section>

</body>

</html>