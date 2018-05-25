
<?php

if (!isset($_POST['id'])) {
    header("Location: index.php?error=noidtodelete");
    exit;
}
require_once "../connection.php";
$delete = "DELETE FROM 
  `partenaire` 
WHERE 
  `id` = :id
;";
$stmt = $pdo->prepare($delete);
$stmt->bindValue(':id', $_POST['id']);
$stmt->execute();
header('Location: ../show.php');
errorHandler($stmt);
header("Location: ../show.php");