<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planned Trips</title>
    <!-- Link to Global CSS file -->
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <header>
        <!--Nav Bar Include-->
        <?php include "menu.php"; ?>
        <h1>Planned Flights</h1>
    </header>
    <main>

        <!--Div that contains the countdown timer-->
        <div id="divCount"></div>

    </main>

    <?php
        // php variable that holds the time of the next launch
        $launchDateTime = strtotime(datetime: "November 25, 2025 12:00:00");

        //Variable formatted in a more JS friendly way
        $jsDateTime = date(format: "F d, Y H:i:s", timestamp: $launchDateTime);
    ?>

    <script>
        let countdownTimer = new Date("<?php echo "$jsDateTime"; ?>").getTime();
        let intervalId = setInterval(function(){
            // This variable will grab the current time
            let currentTime = new Date().getTime();

            consol.log("Timer Values")
            console.log(countdownTimer)
            console.log(currentTime)

            // Variables that hold the time calculations
            const MS_IN_A_SECOND = 1000;
            const MS_IN_A_MINUTE = MS_IN_A_SECOND * 60;
            const MS_IN_AN_HOUR = MS_IN_A_MINUTE * 60;
            const MS_IN_A_DAY = MS_IN_AN_HOUR * 24;

            let timeDiff = countdownTimer - currentTime;

            // Countdown calculations
            let days = Math.floor(timeDiff / MS_IN_A_DAY);
            let hours = Math.floor((timeDiff % MS_IN_A_DAY) / MS_IN_AN_HOUR);
            let minutes = Math.floor((timeDiff % MS_IN_AN_HOUR) / MS_IN_A_MINUTE);
            let seconds = Math.floor((timeDiff % MS_IN_A_MINUTE) / MS_IN_A_SECOND);

            // Console Logs
            console.log(days)
            console.log(hours)
            console.log(minutes)
            console.log(seconds)



        }, 1000);
    </script>
    
</body>
</html>