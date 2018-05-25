<?php
require_once '../connection.php';

$picture=$_FILES['image']['name'];
$folder='../../img/';
move_uploaded_file($_FILES['image']['tmp_name'], "$folder".$picture);
if (!empty($_POST['submit'])) {
    $addform = "INSERT INTO `top100`
      (
      `categorie`,
      `nom`,
      `description`,
      `lien`,
      `note`,
      `image`)
     VALUES
      (
      :categorie,
      :nom,
      :description,
      :lien,
      :note,
      :image);";

    $stmt = $pdo->prepare($addform);
    $stmt->bindValue(':categorie', $_POST['categorie']);
    $stmt->bindValue(':nom', $_POST['nom']);
    $stmt->bindValue(':description', $_POST['description']);
    $stmt->bindValue(':lien', $_POST['lien']);
    $stmt->bindValue(':note', $_POST['note']);
    $stmt->bindValue(':image', "$folder".$picture);
    $stmt->execute();
}
header('Location: ../show.php');
