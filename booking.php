<!DOCTYPE html>

<?php
session_start();
include("db.php");
include("function.php");
?>

<head>
    <html>
    <title>Booking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body>
    <!-- START TOP NAV -->
    <div class="topnav">
        <a href="dashboard.php">Dashboard</a>
        <a class="active" href="booking.php">Afspraak Maken</a>
        <a href="kalender.php">Kalender</a>
        <a href="logout.php">Log uit</a>
    </div>
    <!-- END TOP NAV -->


    <div class="w3-center w3-margin-top">
        <!-- START FORM -->
        <form action=" add.php" method="post">
            <strong><label for="naam">Voor en achternaam:</label></strong><br>
            <input type="text" id="naam" placeholder="Naam" name=" naam" required><br><br>

            <strong><label for="email">Email:</label></strong><br>
            <input type="email" id="email" placeholder="Email" name="email" required><br><br>

            <strong><label for="telefoon">Telefoon:</label></strong><br>
            <input type="text" id="telefoon" value="+31" name="telefoon" required><br><br>

            <strong><label for="date">Afspraak Datum:</label></strong>
            <input type="date" id="afspraak" name="afspraak" required><br><br>

            <strong><label for="time">Afspraak Tijd:</label></strong>
            <input type="time" id="tijd" name="tijd" min="09:00" max="18:00" required><br><br>

            <strong><label for="geslacht">Geslacht:</label></strong><br>
            <input type="radio" name="geslacht" value="Man" required> Man
            <input type="radio" name="geslacht" value="Vrouw" required> Vrouw
            <br><br>

            <strong><label for="notities">Notities:</label></strong><br>
            <input type="text" id="notities" placeholder="Spatie om leeg te houden" name="notities" required><br><br>

            <strong><label for="praat">Wilt u met de kapper gesprekken voeren?: </label></strong><br>
            <input type="radio" name="praat" value="Niet stil zijn" required> Ja
            <input type="radio" name="praat" value="Stil zijn" required> Nee
            <input type="radio" name="praat" value="Maakt niet uit" required> Maakt mij niks uit
            <br><br>

            <input class="button" type="submit" value="Opslaan">
        </form>
    </div>
    <!-- END FORM -->
</body>

</html>