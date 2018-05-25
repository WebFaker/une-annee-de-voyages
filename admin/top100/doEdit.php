<?php
require_once '../connection.php';
$picture=$_FILES['image']['name'];
$folder='../img/';
var_dump($_FILES);
var_dump($_POST);
move_uploaded_file($_FILES['image']['tmp_name'], "$folder".$picture);

$update = "UPDATE
`top100`
SET
`categorie` = :categorie,
`nom` = :nom,
`description` = :description,
`lien` = :lien,
`note` = :note,
`image` = :image
WHERE
`id` = :id
;";
$stmt = $pdo->prepare($update);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':categorie', $_POST['categorie']);
$stmt->bindValue(':nom', $_POST['nom']);
$stmt->bindValue(':description', $_POST['description']);
$stmt->bindValue(':lien', $_POST['lien']);
$stmt->bindValue(':note', $_POST['note']);
$stmt->bindValue(':image', "$folder".$picture);
$stmt->execute();
header('Location: ../show.php');
