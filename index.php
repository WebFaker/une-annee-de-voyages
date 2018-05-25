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
  <link rel="stylesheet" href="./src/css/index.css">
  <link rel="stylesheet" href="./src/css/flickity.css">
  <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="css/style.min.css">
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

    <header class="header">
      <video autoplay muted loop id="video">
    <source src="./src/video/header-video.mp4" type="video/mp4">
  </video>
      <div class="header_title_container">
        <p class="header_title">
          Une Année De Voyages
        </p>
        <p class="header_description">
          Des voyages testés. Des idées pour partir toute l'année.
        </p>
      </div>
  </div>
  </header>

  <section class="information">
    <div class="information_title_container">
      <p class="section_title">
        Dernier magazine :
      </p>
      <div class="bluebar"></div>
      <p class="information_title_description">
        . Un mook collector . Des fiches pratiques . Une application . Un site .
      </p>
    </div>
    <div class="information_paragraph">
      <div class="information_paragraph_img_container">
        <img class="information_paragraph_img" src="./src/img/mook.png" alt="Mook">
      </div>
    </div>
    <div class="learnmore_button">
      <a href="magazines.html" class="information_title_description button">
        En savoir plus.
      </a>
    </div>
  </section>

  <section class="twitter">
    <div class="twitter_api_container">
      <a class="twitter-timeline" href="https://twitter.com/search?q=from%3AAirFranceFR%20OR%20from%3AMAS%20OR%20from%3AtransaviaFR%20OR%20from%3AAmericanAir" data-widget-id="999340221144748032">Tweets sur from:AirFranceFR OR from:MAS OR from:transaviaFR OR from:AmericanAir</a>
      <script>
        ! function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0],
            p = /^http:/.test(d.location) ? 'http' : 'https';
          if (!d.getElementById(id)) {
            js = d.createElement(s);
            js.id = id;
            js.src = p + "://platform.twitter.com/widgets.js";
            fjs.parentNode.insertBefore(js, fjs);
          }
        }(document, "script", "twitter-wjs");
      </script>
    </div>
  </section>
  <?php
  $total =" SELECT
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
            ORDER BY
            `id`
            DESC
            LIMIT
            6
            ;";
  $stmt = $pdo->prepare($total);
  $stmt->execute();
  ?>
  <h2 class="section_title">
      Les 6 dernier articles.
  </h2>
  <section class="Articles">
      <h1 class="Articles-header">Articles</h1>
      <div class="Articles-itemContainer">
          <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
              <a href="uneAnnéeDevoayege/article ?id=<?=$row["id"]?>"class="Articles-item">
                  <img src="<?= "admin/" . substr($row["image"], (strlen($row["image"])-3)*-1)?>" alt="<?=$row["imgAlt"]?>" class="Articles-itemImg">
                  <h2 class="Articles-itemTitle"><?=$row["title"]?></h2>
                  <h3 class="Articles-itemCategory"><?=$row["categorie"]?></h3>
                  <h3 class="Articles-itemSubCategory"><?=$row["SousCategorie"]?></h3>
                  <h4 class="Articles-itemDate"><?=$row["date"]?></h4>
              </a>
              <?php


        endwhile;?>
      </div>
  </section>
  <?php
  $total =" SELECT
             `id`,
              `imgSrc`,
              `imgAlt`,
              `description`
             FROM
              `boiteimage`
              ;";
  $stmt = $pdo->prepare($total);
  $stmt->execute();
  ?>
  <section class="images">
    <div class="images_container">
      <div class="information_title_container">
        <h2 class="section_title">
        La Boîte à Images.
      </h2>
        <div class="bluebar"></div>
      </div>
      <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true }'>
          <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
          <div class="carousel-cell"><img class="img_img" src="<?= "admin/" . substr($row["imgSrc"], (strlen($row["imgSrc"])-3)*-1)?>" alt=""><?=$row["imgAlt"]?></div>
          <?php endwhile;?>
      </div>
    </div>
  </section>
  <?php
  $partenaire =" SELECT
           `id`,
            `image`,
            `imgAlt`,
            `lien`
           FROM
            `partenaire`

            ;";
  $stmt = $pdo->prepare($partenaire);
  $stmt->execute();
  ?>
  <footer class="footer">
    <h2 class="footer-title">Partenaires</h2>
    <div class="bluebar"></div>
    <div class="footer-imgContainer">
        <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
            <a href="<?=$row["lien"]?>"><img src="<?= "admin/" . substr($row["image"], (strlen($row["image"])-3)*-1)?>" alt="<?=$row["imgAlt"]?>" class="footer-img"></a>
        <?php endwhile;?>
    </div>
    <div class="footer-pages">
      <a href="" class="footer-pageLink">
        <p class="footer-page">À propos</p>
      </a>
      <a href="" class="footer-pageLink">
        <p class="footer-page">Contactez-nous</p>
      </a>
      <a href="" class="footer-pageLink">
        <p class="footer-page">Tous droits réservés Une Année De Voyages ©2018-2022

        </p>
      </a>

    </div>

  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="./src/js/main.js"></script>
  <script type="text/javascript" src="./src/js/flickity.js"></script>
</body>

</html>
