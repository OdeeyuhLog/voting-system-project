<?php
// Include the database configuration
include('db_config.php');

// Start the session (if not already started)
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

// Retrieve user information from the database
$person_id = $_SESSION['user_id'];
$sql = "SELECT * FROM voter WHERE person_id = '$person_id'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the user data
    $row = $result->fetch_assoc();
    $first_name = $row['first_name'];
} else {
    // Handle the case where user data is not found
    $first_name = 'Guest';
}

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="elections.css">
    <title>Voting System</title>
</head>

<body>
    <div class="header">
        <div class="logo">VOTING SYSTEM</div>
        <div class="profile-section">
            <div class="welcome-text">Welcome,
                <?php echo $first_name; ?>!
            </div>
            <div class="profile-picture"></div>
            <a href="logout_process.php" class="sign-out-btn">SIGN OUT</a>
        </div>
    </div>
    <div class="election-text">
        <p>ELECTIONS</p>
    </div>
    <div class="footer"></div>
</body>

</html>