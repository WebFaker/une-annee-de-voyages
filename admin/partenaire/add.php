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
    <h1 class="title">ajouter une image dans la boite a image</h1>
    <form  action="doAdd.php" method="post" enctype="multipart/form-data">
      <div class="containerInputArticle">
        <div class="contour">
        <div class="containInputArticle">
          <p class="text">titre image</p>
          <input class="input" type="text" name="imgAlt" placeholder="imgAlt">
        </div>
        <div class="containInputArticle">
          <p class="text">image</p>
        <input class="input" type="file" name="image" size="12" placeholder="img src">
      </div>
      <div class="containInputArticle">
        <p class="text">Title</p>
        <input class="input" type="text" name="lien" size="12" placeholder="lien du site">
      </div>
        <input class="valide" type="submit" name="submit" value="Envoyer" class="envoie">
    </div>
  </div>
    </form>
</div>
