<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <header>
        <?php include "menu.php"; ?>
        <h1>Fly with Rocket Corp</h1>
    </header>
    <main>
        <h2>
            Do you like ROCKETS? Know how to fly them? If you answered yes, fill out our pilot application form.
        </h2>
        
        <!--Form Section for handling input from the user-->
        <form method="post" id="frmApp" name="frmApp" action="app.php">
            
            <!--First name input area-->
            <label for="txtFirstName">First Name:</label>
            <input type="text" id="txtFirstName" name="txtFirstName" placeholder="First Name" required>
            
            <!--Last name input area-->
            <label for="txtLastName">Last Name:</label>
            <input type="text" id="txtFirstName" name="txtFirstName" placeholder="Last Name" required>

            <!--Submit Button for Form-->
            <input type="submit" value="Submit Application">

        </form>
    </main>
    
</body>
</html>