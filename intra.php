<?php
session_start();
// the user must be logged in to access this page
if($_SESSION['username'] ==""){
    // Redirect to the intranet page
    header("Location: login.php");


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to Global CSS file -->
    <link rel="stylesheet" href="main.css">
    <title>Intranet</title>
</head>
<body>
    <header>
        <?php include "menu.php"; ?>
        <h1>Welcome to the Employee Intranet</h1>
    </header>
    
</body>
    <h2>Your Tasks</h2>
</html>