<?php
require_once '../connection.php';
$picture=$_FILES['image']['name'];
$folder='../img/';
var_dump($_FILES);
var_dump($_POST);
move_uploaded_file($_FILES['image']['tmp_name'], "$folder".$picture);

$update = "UPDATE
`partenaire`
SET
`image` = :image,
`imgAlt` = :imgAlt,
`lien` = :lien
WHERE
`id` = :id
;";
$stmt = $pdo->prepare($update);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':image', "$folder".$picture);
$stmt->bindValue(':imgAlt', $_POST['imgAlt']);
$stmt->bindValue(':lien', $_POST['lien']);
$stmt->execute();
header('Location: ../show.php');
