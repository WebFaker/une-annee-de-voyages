<?php
require_once '../connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Poster un message</title>
</head>
<body>
<?php
$edit =" SELECT
           `id`,
           `image`,
           `imgAlt`,
           `lien`
           FROM
            `partenaire`
            WHERE
            `id`= :id

            ;";
$stmt = $pdo->prepare($edit);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
?>
<a href="index.php">Retourner vers la page admin</a>
<a href="../show.php">Retourner vers la page show</a>
<?php if (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
    Supprimer la page de <?=$row["image"]?>
<form  action="doDelete.php" method="post">
    <input  id="prodId" name="id" type="hidden" value="<?=$row["id"]?>">
    <input type="submit" name="submit" value="Oui" class="envoie">
</form>
    <a href="../show.php">Non</a>
<?php endif;?>
</body>
</html>
