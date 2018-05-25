<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=PerfectSite;', 'root','coucou');
} catch (PDOException $exception) {
    die($exception->getMessage());
}
$pdo->exec('SET NAMES UTF8');
