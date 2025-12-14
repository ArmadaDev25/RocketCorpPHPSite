<?php
session_start();

$message = "";

// check to see if the form was submitted
if ($_SERVER['REQUEST_METHOD']  == 'POST'){

    // Include the database connection file here
    require_once 'servercon.php';

    // variable to hold the user name
    $username = $_POST['txtUserName'];
    // variable to hold the password
    $password = $_POST['txtPassword'];

    // Query the database for a match for the username and password
    $sql = "SELECT empName, accountID FROM empaccounts WHERE username = '$username' AND password = '$password'";

    // Print out the sql query
    echo "sql = " . $sql . "<BR>";

    // run the query
    $result = mysqli_query($db_conn, $sql);

    // convert the query result into an array
    $arrUser = mysqli_fetch_array($result);

    // check to see if the user logged in correctly
    if (isset($arrUser)){
        $message = "Login Sucess";

        // set up a session variable to inicate that the user has logged in
        $_SESSION['username'] = $username;


        // Redirect to the intranet page
        header("Location: intra.php");

    }else{
        $message = "Login Failed";
        $_SESSION['username'] = "";

    }





}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Link to Global CSS file -->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <?php include "menu.php"; ?>
        <h1>Login</h1>
    </header>
    <main>
        <p> <?php echo $message;?></p>
        <form name="frmLogin" id="frmLogin" method="post" action="login.php">
            <!-- username input-->
            <div>
                <label for="txtUserName">Username:</label>
                <input type="text" id="txtUserName" name="txtUserName">
            </div>
            <!-- password input-->
            <div>
                <label for="txtPassword">Password:</label>
                <input type="password" id="txtPassword" name="txtPassword">
            </div>
            <!-- password input-->
            <button type="submit">Submit</button>
            

        </form>
    </main> 
    
</body>
</html>