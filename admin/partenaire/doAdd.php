<?php
require_once '../connection.php';

$picture=$_FILES['image']['name'];
$folder='../img/';

move_uploaded_file($_FILES['image']['tmp_name'], "$folder".$picture);
if (!empty($_POST['submit'])) {
    $addform = "INSERT INTO `partenaire` 
      ( 
      `image`,
      `imgAlt`, 
      `lien`) 
     VALUES 
      (
      :image, 
      :imgAlt, 
      :lien);";

    $stmt = $pdo->prepare($addform);
    $stmt->bindValue(':image', "$folder".$picture);
    $stmt->bindValue(':imgAlt', $_POST['imgAlt']);
    $stmt->bindValue(':lien', $_POST['lien']);
    $stmt->execute();
}
header('Location: ../show.php');