<!DOCTYPE html>

<?php
include("db.php");

 
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
        <a class="active" href="dashboard.php">Dashboard</a>
        <a href="booking.php">Booking</a>
        <form action="index.php" method="post">
        <button type="submit" id="logout">logout</button>
        </form>
        

    </div>
    <!-- END TOP NAV -->


</body>

</html>