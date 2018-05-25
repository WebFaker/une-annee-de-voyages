<?php
require_once '../connection.php';
$update = "UPDATE
`boiteimage`
SET
`imgAlt` = :imgAlt,
`imgSrc` = :imgSrc,
`description` = :description
WHERE
`id` = :id
;";
$stmt = $pdo->prepare($update);
$stmt->bindValue(':id', $_POST['id']);
$stmt->bindValue(':imgAlt', $_POST['imgAlt']);
$stmt->bindValue(':imgSrc', $_POST['imgSrc']);
$stmt->bindValue(':description', $_POST['description']);
$stmt->execute();
header('Location: ../show.php');
