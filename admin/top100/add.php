<?php
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
<a href="index.php">retourner vers la page a</a>
    <h2 class="title">ajouter un article :</h2>
    <form  action="doAdd.php" method="post" enctype="multipart/form-data">
      <div class="containerInputArticle">
        <div class="contour">
          <div class="containInputArticle">
            <p class="text">categorie</p>
            <SELECT class="input"name="categorie" size="1">
              <OPTION>bar
                <OPTION>hotel
                  <OPTION>restaurants
                <OPTION>spa
            </SELECT>
          </div>
          <div class="containInputArticle">
            <p class="text">nom</p>
            <input class="input" type="text" name="nom" size="12" placeholder="nom">
          </div>
          <div class="containInputArticle">
              <p class="text">Description</p>
              <input class="input" type="text" name="description" size="12" placeholder="description">
          </div>
          <div class="containInputArticle">
              <p class="text">lien</p>
              <input class="input" type="text" name="lien" size="12" placeholder="Lieux">
          </div>
          <div class="containInputArticle">
              <p class="text">note</p>
              <input class="input" type="text" name="note" size="12" placeholder="note">
          </div>
          <div class="containInputArticle">
              <p class="text">image</p>
              <input class="input" type="file" name="image" size="12" placeholder="img-src">
          </div>
        <input class="valide" type="submit" name="submit" value="Envoyer" class="envoie">
    </form>
</div>
