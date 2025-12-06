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
        <form name="frmLogin" id="frmLogin" method="post" action="login.php">
            <div>
                <label for="txtUserName">Username:</label>
                <input type="text" id="txtUserName" name="txtUserName">

            </div>
        </form>
    </main> 
    
</body>
</html>