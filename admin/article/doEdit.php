<?php
require_once '../connection.php';
$update = "UPDATE
`article`
SET
`title` = :title,
`image` = :image,
`categorie` = :categorie,
`SousCategorie` = :SousCategorie,
`Lieux` = :Lieux,
`description` = :description,
`auteur` = :auteur,
`date` = :date,
`imgAlt` = :imgAlt
WHERE
`id` = :id
;";
$stmt = $pdo->prepare($update);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':title', $_POST['title']);
$stmt->bindValue(':image', $_POST['image']);
$stmt->bindValue(':categorie', $_POST['categorie']);
$stmt->bindValue(':SousCategorie', $_POST['SousCategorie']);
$stmt->bindValue(':Lieux', $_POST['Lieux']);
$stmt->bindValue(':description', $_POST['description']);
$stmt->bindValue(':auteur', $_POST['auteur']);
$stmt->bindValue(':date', $_POST['date']);
$stmt->bindValue(':imgAlt', $_POST['imgAlt']);
$stmt->execute();
header('Location: ../show.php');
