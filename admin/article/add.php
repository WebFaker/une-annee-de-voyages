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
        <p class="text">Title</p>
        <input class="input" type="text" name="title" placeholder="title">
      </div>
        <div class="containInputArticle">
          <p class="text">Catégorie</p>
          <SELECT  class="input"name="categorie" size="1" placeholder="date">
              <OPTION>journaliste
              <OPTION>annonceur
              <OPTION>partenaire
              <OPTION>lecteur
              <OPTION>office de tourisme
          </SELECT>
        </div>
        <div class="containInputArticle">
          <p class="text">Sous-Catégorie</p>
          <SELECT class="input" name="SousCategorie" size="1">
              <OPTION>bars
              <OPTION>restaurants
              <OPTION>hotels
          </SELECT>
        </div>
        <div class="containInputArticle">
          <p class="text">Description</p>
          <textarea class="input textarea"name="description" placeholder="Description" rows="8" cols="60" ></textarea>
        </div>
        <div class="containInputArticle">
          <p class="text">Date</p>
          <input class="input" type="date" name="date" size="12" placeholder="date">
        </div>
        <div class="containInputArticle">
          <p class="text">Nom de l'image</p>
          <input class="input" type="text" name="imgAlt" size="12" placeholder="img-alt">
        </div>
        <div class="containInputArticle">
          <p class="text">Lieux</p>
          <input class="input" type="text" name="Lieux" size="12" placeholder="Lieux">
        </div>
        <div class="containInputArticle">
          <p class="text">Auteur</p>
          <input class="input" type="text" name="auteur" size="12" placeholder="Auteur">
        </div>
        <div class="containInputArticle">
          <p class="text">image</p>
          <input class="input" type="file" name="image" size="12" placeholder="img-src">
        </div>
        </div>
      </div>
        <input class="valide" type="submit" name="submit" value="Envoyer" class="envoie">
    </form>
</div>
