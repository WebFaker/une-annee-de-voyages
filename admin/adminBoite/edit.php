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
           `imgAlt`,
           `imgSrc`,
           `description`
           FROM
            `boiteimage`
            WHERE
            `id`= :id
            ;";
$stmt = $pdo->prepare($edit);
  $stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
?>
<a href="show.php">Retourner vers l'accueil'</a>
<?php if (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
  <h2 class="title"></h2>
  <form  action="doEdit.php" method="post" enctype="multipart/form-data">
    <div class="containerInputArticle">
      <div class="contour">
        <div class="containInputArticle">
          <p class="text">titre image</p>
          <input value="<?=$row["imgAlt"]?>" type="text" name="imgAlt" >
        </div>
        <div class="containInputArticle">
          <p class="text">titre image</p>
          <input type="text" value="<?=$row["imgSrc"]?>" name="imgSrc" >
        </div>
        <div class="containInputArticle">
          <p class="text">titre image</p>
          <input type="text" value="<?=$row["description"]?>" name="description" >
        </div>
      </div>
    </div>
    <input  id="prodId" name="id" type="hidden" value="<?=$row["id"]?>">
    <input  value="submit"type="submit" name="submit"  class="envoie">
</form>
<?php endif;?>
</body>
</html>
