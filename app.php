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
            <input type="text" id="txtFirstName" name="txtFirstName" placeholder="First Name">
            
            <!--Last name input area-->
            <label for="txtLastName">Last Name:</label>
            <input type="text" id="txtLastName" name="txtLastName" placeholder="Last Name">

            <!--Number of years flying input area-->
            <label for="txtExpYears">How Many Years Have You Been Flying?</label>
            <input type="text" id="txtExpYears" name="txtExpYears" placeholder="Years Flying">

            <!-- Complete recent training checkbox-->
            <label for="trainingCheck">Competed Recent Training?</label>
            <input type="checkbox" id="trainingCheck" name="trainingCheck" value="isTrained">

            <!-- Complete recent training checkbox-->
            <label for="validCheck">Is Everything Entered Correct To The Best Of Your Knowledge?</label>
            <input type="checkbox" id="validCheck" name="validCheck" value="True">
            

            <!--Submit Button for Form-->
            <input type="submit" value="Submit Application">

        </form>
    </main>
    
</body>
</html>