<?php
session_start();
// the user must be logged in to access this page
if($_SESSION['username'] ==""){
    // Redirect to the intranet page
    header("Location: intra.php");


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
    
</body>
</html>