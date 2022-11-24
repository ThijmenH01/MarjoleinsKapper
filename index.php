<!DOCTYPE html>

<?php
include("login/db.php");
// include("add.php");


?>

<head>
    <html>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
</head>


<body>

    <!-- START TOP NAV -->
    <div class="topnav">
        <a class="active" href="#dashboard">Dashboard</a>
        <a href="#booking">Booking</a>
    </div>
    <!-- END TOP NAV -->


    <!-- START FORM -->
    <form action="add.php" method="post">
        <label for="naam">Voor en achternaam:</label><br>
        <input type="text" id="naam" value="naam" name="naam"><br><br>

        <label for="email">Email:</label><br>
        <input type="text" id="email" value="email" name="email"><br><br>

        <label for="telefoon">Telefoon:</label><br>
        <input type="number" id="telefoon" value="0612345678" name="telefoon"><br><br>

        <label for="date">Afspraak Datum:</label>
        <input type="date" id="afspraak" name="afspraak"><br><br>

        <label for="geslacht">Geslacht:
            <input type="radio" name="geslacht" value="M"> Male
            <input type="radio" name="geslacht" value="F"> Female
        </label><br><br>

        <label for="notities">Notities:</label>
        <input type="text" id="notities" value="notities" name="notities"><br><br>


        <label for="praat">Stil:
            <input type="radio" name="praat" value="1"> bek dicht
            <input type="radio" name="praat" value="0"> bek niet dicht
        </label><br><br>

        <input type="submit" value="Submit">
    </form>
    <!-- END FORM -->


    <div class="w3-margin-top w3-center">
        <button class="button">Voeg Afspraak toe</button>
    </div>



</body>

</html>