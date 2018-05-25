<?php
require_once 'admin/connection.php';
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Une Année De Voyages</title>
  <link rel="stylesheet" href="./src/css/reset.css">
  <link rel="stylesheet" href="./src/css/fiches.css">
</head>

<body>

  <section id="menu-section" class="menu_section">
    <div class="menu_section_container">
      <ul class="menu_section_list_container">
        <li class="menu_section_list_item_container"><a class="menu_section_list_item" href="index.php">Accueil</a></li>
        <li class="menu_section_list_item_container"><a class="menu_section_list_item" href="magazines.html">Magazines</a></li>
        <li class="menu_section_list_item_container"><a class="menu_section_list_item" href="top.html">TOP 100</a></li>
        <li class="menu_section_list_item_container"><a class="menu_section_list_item" href="fiches.php">Fiches Pratiques</a></li>
        <li class="menu_section_list_item_container"><a class="menu_section_list_item" href="contact.html">Contactez-nous</a></li>
      </ul>
      <div>
        <a href="index.php">
        <img src="./src/img/logo.png" alt="Logo" id="menu-logo-img">
        </a>
      </div>
    </div>
  </section>

  <div class="scroll_container">
    <div class="logo_container">
      <a href="index.php">
      <img src="./src/img/logo.png" alt="Logo">
      </a>
    </div>
    <div id="menu-button" class="menu_container">
      <img id="menu-button-img" class="menu_img_button" src="./src/img/menu.png" alt="Menu">
    </div>
    <div id="menu-button-open" class="menu_container">
      <img id="menu-button-open-img" class="menu_img_button" src="./src/img/menu-open.png" alt="Menu">
    </div>

    <section class="Factsheet">
      <div class="header_title_container">
        <div class="about_maintitle_container">
          <h2 class="about_maintitle">Fiches pratiques.</h2>
        </div>
      </div>
  </div>
  <?php
  $bar ="
           SELECT `id`,
            `categorie`,
            `nom`,
            `description`,
            `lien`,
            `note`,
            `image`
             FROM `top100` WHERE `categorie` = 'bar';
            ;";
  $stmt = $pdo->prepare($bar);
  $stmt->execute();
  ?>
  <h2 class="Factsheet-itemContainerHeader">Bars</h2>
  <div class="Factsheet-itemContainer Hotels">
      <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
          <div class="Factsheet-item">
              <img src="<?= "admin/" . substr($row["image"], (strlen($row["image"])-3)*-1)?>" alt="" class="Factsheet-itemImg">
              <h2 class="Factsheet-itemTitle"><?=$row["nom"]?></h2>
              <a href="dofiche.php?id=<?=$row["id"]?>">Modifier</a>
          </div>
      <?php endwhile;?>
  </div>
  <?php
  $resto ="
           SELECT `id`,
            `categorie`,
            `nom`,
            `description`,
            `lien`,
            `note`,
            `image`
             FROM `top100` WHERE `categorie` = 'restaurants';
            ;";
  $stmt = $pdo->prepare($resto);
  $stmt->execute();
  ?>
  <h2 class="Factsheet-itemContainerHeader">Restaurants</h2>
  <div class="Factsheet-itemContainer Hotels">
      <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
          <div class="Factsheet-item">
              <img src="<?= "admin/" . substr($row["image"], (strlen($row["image"])-3)*-1)?>" alt="" class="Factsheet-itemImg">
              <h2 class="Factsheet-itemTitle"><?=$row["nom"]?></h2>
              <a href="dofiche.php?id=<?=$row["id"]?>">Modifier</a>
          </div>
      <?php endwhile;?>
  </div>
  <?php
  $hotel ="
           SELECT `id`,
            `categorie`,
            `nom`,
            `description`,
            `lien`,
            `note`,
            `image`
             FROM `top100` WHERE `categorie` = 'hotel';
            ;";
  $stmt = $pdo->prepare($hotel);
  $stmt->execute();
  ?>
  <h2 class="Factsheet-itemContainerHeader">Hôtels</h2>
  <div class="Factsheet-itemContainer Hotels">
      <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
          <div class="Factsheet-item">
              <img src="<?= "admin/" . substr($row["image"], (strlen($row["image"])-3)*-1)?>" alt="" class="Factsheet-itemImg">
              <h2 class="Factsheet-itemTitle"><?=$row["nom"]?></h2>
              <a href="dofiche.php?id=<?=$row["id"]?>">Modifier</a>
          </div>
      <?php endwhile;?>
  </div>
  <?php
  $spa ="
           SELECT `id`,
            `categorie`,
            `nom`,
            `description`,
            `lien`,
            `note`,
            `image`
             FROM `top100` WHERE `categorie` = 'spa';
            ;";
  $stmt = $pdo->prepare($spa);
  $stmt->execute();
  ?>
      <h2 class="Factsheet-itemContainerHeader">Spas</h2>
      <div class="Factsheet-itemContainer Hotels">
          <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
          <div class="Factsheet-item">
              <img src="<?= "admin/" . substr($row["image"], (strlen($row["image"])-3)*-1)?>" alt="" class="Factsheet-itemImg">
              <h2 class="Factsheet-itemTitle"><?=$row["nom"]?></h2>
              <a href="top100/dofiches.php?id=<?=$row["id"]?>">Modifier</a>
          </div>
          <?php endwhile;?>
  </div>

  <footer class="footer">
    <h2 class="footer-title">Partenaires</h2>
    <div class="bluebar"></div>
    <div class="footer-imgContainer">
      <img src="./src/img/af.png" alt="Aéroport" class="footer-img">
      <img src="./src/img/fuji.png" alt="Fujifilm" class="footer-img">
      <img src="./src/img/nikon.png" alt="Nikon" class="footer-img">
    </div>
    <div class="footer-pages">
      <a href="about.html" class="footer-pageLink">
        <p class="footer-page">À propos</p>
      </a>
      <a href="contact.html" class="footer-pageLink">
        <p class="footer-page">Contactez-nous</p>
      </a>
      <a href="" class="footer-pageLink">
        <p class="footer-page">Tous droits réservés Une Année De Voyages ©2018-2022

        </p>
      </a>

    </div>

  </footer>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./src/js/main.js"></script>
  <script type="text/javascript" src="./src/js/flickity.js"></script>

</body>

</html>
