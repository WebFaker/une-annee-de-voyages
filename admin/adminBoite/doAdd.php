<?php
require_once '../connection.php';

$picture=$_FILES['imgSrc']['name'];
$folder='../img/';

move_uploaded_file($_FILES['imgSrc']['tmp_name'], "$folder".$picture);
if (!empty($_POST['submit'])) {
    $addform = "INSERT INTO `boiteimage` 
      ( 
      `imgAlt`, 
      `imgSrc`, 
      `description`) 
     VALUES 
      (
      :imgAlt, 
      :imgSrc, 
      :description);";

    $stmt = $pdo->prepare($addform);
    $stmt->bindValue(':imgAlt', $_POST['imgAlt']);
    $stmt->bindValue(':imgSrc', "$folder".$picture);
    $stmt->bindValue(':description', $_POST['description']);
    $stmt->execute();
}
var_dump($_FILES);
header('Location: ../show.php');