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
           `title`,
           `image`,
           `categorie`,
           `SousCategorie`,
           `Lieux`,
           `description`,
           `auteur`,
           `date`,
           `imgAlt`
           FROM
            `article`
            WHERE
            `id`= :id
            ;"; /* on  recupere les donnée id competence intitulé resume dateStart et datefinish de tableau Mysql 'anonce'*/
$stmt = $pdo->prepare($edit);
  $stmt->bindValue(':id', $_GET['id']);
$stmt->execute();
?>
<a href="show.php">rRetourner vers l'accueil</a>
<?php if (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
  <h2 class="title">Modifier les articles :</h2>
<form  action="doEdit.php" method="post">
  <div class="containerInputArticle">
    <div class="contour">
    <div class="containInputArticle">
      <p class="text">Title</p>
      <input class="input" value="<?=$row["title"]?>" type="text" name="title" >
    </div>
    <div class="containInputArticle">
      <p class="text">Catégorie</p>
    <SELECT class="input" name="categorie" size="1">
        <OPTION>Journaliste
        <OPTION>Annonceur
        <OPTION>Partenaire
        <OPTION>Lecteur
        <OPTION>Office de tourisme
    </SELECT>
  </div>
  <div class="containInputArticle">
    <p class="text">Sous-Catégorie</p>
    <SELECT class="input"name="SousCategorie" size="1">
        <OPTION>Bars
        <OPTION>Restaurants
        <OPTION>Hôtels
    </SELECT>
  </div>
  <div class="containInputArticle">
    <p class="text">Description</p>
    <input class="input" type="text" value="<?=$row["description"]?>" name="description" >
  </div>
  <div class="containInputArticle">
    <p class="text">Date</p>
    <input class="input" type="text" value="<?=$row["date"]?>" name="date" size="12" >
  </div>
  <div class="containInputArticle">
    <p class="text">Nom de l'image</p>
    <input class="input" type="text" value="<?=$row["imgAlt"]?>" name="imgAlt" size="12" >
  </div>
  <div class="containInputArticle">
    <p class="text">Lieux</p>
    <input class="input" type="text" value="<?=$row["Lieux"]?>" name="Lieux" >
  </div>
  <div class="containInputArticle">
    <p class="text">Auteur</p>
    <input class="input" type="text" value="<?=$row["auteur"]?>" name="auteur" size="12" >
  </div>
  <div class="containInputArticle">
    <p class="text">image</p>
    <input class="input" type="text" value="<?=$row["image"]?>" name="image" >
  </div>
    </div>
</div>
    <input  id="prodId" name="id" type="hidden" value="<?=$row["id"]?>">
    <input  class="valide"value="submit"type="submit" name="submit"  class="envoie">
</form>
<?php endif;?>
</body>
</html>
