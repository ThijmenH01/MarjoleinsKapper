<?php
session_start();
include 'db.php';
include 'function.php';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Edit Accounts</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Bewerk & Update Gebruikers.
                            <a href="dashboard.php" class="btn btn-danger float-end">BACK</a>
                        </h3>
                    </div>
                    <div class="card-body">



                        <form action="afspraakeditcode.php" method="POST">
                            <?php
                            // pdo query select all from klanten
                            $stmt = $conn->prepare("SELECT * FROM `afspraken` 
                            INNER JOIN `klanten` ON afspraken.klanten_id = klanten.id 
                            INNER JOIN `userkt` ON userkt.afspraak_id = afspraken.afspraak_id
                            INNER JOIN `services` ON services.id = userkt.service_id");
                            $stmt->execute();
                            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                            foreach ($result as $row) {
                            }
                            ?>


                            <div class="mb-3">
                                <label>datum</label>
                                <input type="hidden" name="id" value="<?= $row->afspraak_id ?>" />
                                <input type="datetime-local" name="datum" value="<?= $row->datum ?>"
                                    class="form-control" />
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="updateafspraak" class="btn btn-primary">Update Student</button>
                            </div>

 
                            <?php 
                            //     if (isset($_GET['id'])) {
                            //     $id = $_GET['id'];
                            //     $datum = $_POST['datum'];
                            //     $update = $conn->prepare("UPDATE `afspraken` SET `datum` = $datum WHERE `afspraken`.`afspraak_id` = $id");
                            //     $update->bindParam('s', $datum);
                            //     $update->execute();
                            //     // header("location:dashboard.php");
                            //     print_r($_GET);
                            // } 

                            //if isset $_get id then update date in datum in database
                            // if (isset($_GET['id'])) {
                            //     $afspraak_id = $_GET['id'];
                            //     $datum = $_POST['datum'];
                        
                                
                            //     $update = $conn->prepare("UPDATE `afspraken` SET `datum` = $datum WHERE `afspraak_id` = $afspraak_id");
                            //     $update->bindParam('s', $datum);
                            //     $update->execute();
                            //     header("location:dashboard.php");
                            //     print_r($_GET);
                            // }
                            ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>