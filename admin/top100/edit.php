<?php
var_dump($_POST);
require_once '../connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Poster un message</title>
</head>
<body>
<?php
$edit =" SELECT
           `id`,
           `categorie`,
           `nom`,
           `description`,
           `lien`,
           `note`,
           `image`
           FROM
            `top100`
            WHERE
            `id`= :id
            ;";
$stmt = $pdo->prepare($edit);
$stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
?>
<a href="../show.php">retourner vers la page show</a>
<?php if (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
    <form  action="doEdit.php" method="post" enctype="multipart/form-data">
      <div class="containerInputArticle">
        <div class="contour">
          <div class="containInputArticle">
            <p class="text">Categorie</p>
            <SELECT class="input"name="categorie" size="1">
                <OPTION>bar
                <OPTION>hotel
                <OPTION>re
            </SELECT>
          </div>
          <div class="containInputArticle">
            <p class="text">nom</p>
            <input class="input" type="text" value="<?=$row["nom"]?>" name="nom" size="12" >
          </div>
          <div class="containInputArticle">
            <p class="text">description</p>
            <input class="input" type="text" value="<?=$row["description"]?>" name="description" size="12" >
          </div>
          <div class="containInputArticle">
            <p class="text">lien</p>
            <input class="input" type="text" value="<?=$row["lien"]?>" name="lien" size="12" >
          </div>
          <div class="containInputArticle">
            <p class="text">note</p>
            <input class="input" type="text" value="<?=$row["note"]?>" name="note" size="12" >
          </div>
          <div class="containInputArticle">
            <p class="text">image</p>
            <input class="input" type="file" name="image" size="12" placeholder="img src">
          </div>
        </div>
      </div>
        <input  id="prodId" name="id" type="hidden" value="<?=$row["id"]?>">
        <input  value="submit"type="submit" name="submit"  class="envoie">
    </form>
<?php endif;?>
</body>
</html>
