<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=PerfectSite;', 'root','root');
} catch (PDOException $exception) {
    die($exception->getMessage());
}
$pdo->exec('SET NAMES UTF8');
