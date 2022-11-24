<!DOCTYPE html>

<?php
session_start();
include("db.php");
include("function.php");

if (isset($_SESSION['admin_id'])) {
    $admin_id = $_SESSION['admin_id'];
    $select = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
    $select->execute([$admin_id]);
    $row = $select->fetch(PDO::FETCH_ASSOC);
    $naam = $row['naam'];
}
$date = date("Y-m-d");
?>


<head>
    <html>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>


<body>

    <!-- START TOP NAV -->
    <div class="topnav">
        <a class="active" href="dashboard.php">Dashboard</a>
        <a href="booking.php">Booking</a>
        <a href="logout.php">LogOut</a>

    </div>
    <!-- END TOP NAV -->
    <table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>Tijd</th>
            <th>Naam</th>
            <th>Email</th>
            <th>Telefoon</th>
            <th>Geslacht</th>
            <th>Notities</th>
            <th>wel of niet praten</th>
            <th>Bewerken</th>
            <th>Annuleren</th>
        </tr>
    </thead>
    <tbody>
    <?php
    // pdo query select all from klanten
    $stmt = $conn->prepare("SELECT * FROM `klanten`WHERE afspraak = '$date' ORDER BY tijd");
    $stmt->execute();
    $result = $stmt->fetchAll();
    foreach ($result as $row) {
        echo "</tr>". "<br>";
        echo "<td>" . $row['tijd'] . "</td>";
        echo "<td>" . $row['naam'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['telefoon'] . "</td>";
        echo "<td>" . $row['geslacht'] . "</td>";
        echo "<td>" . $row['notities'] . "</td>";
        echo "<td>" . $row['praat'] . "</td>";
        echo "</tr>". "<br>";
    }

    ?>
    </table>
</body>

</html>