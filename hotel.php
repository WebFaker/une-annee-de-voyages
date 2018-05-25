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
    <link rel="stylesheet" href="./src/css/classement.css">
    <link rel="stylesheet" href="./src/css/flickity.css">
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
    <?php
          $top ="
           SELECT id,
            categorie,
            nom,
            description,
            lien,
            note,
            image
             FROM top100 WHERE categorie = 'hotel' AND note BETWEEN 1 AND 7;
            ;";
          $stmt = $pdo->prepare($top);
          $stmt->execute();
        ?>
      <section class="classement">
        <div class="classement_container">
          <div class="about_maintitle_container">
            <h2 class="about_maintitle">TOP 100 : hotel</h2>
          </div>
          <div class="bluebar"></div>
        <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <div class="container">
          <div class="ligne">
            <p class="paragraph_text">
              nom: <?=$row["nom"]?>
            </p>
          </div>
          <div class="ligne">
            <p class="paragraph_text">
              description: <?=$row["description"]?>
            </p>
          </div>
          <div class="ligne">
            <p class="paragraph_text">
              lien: <?=$row["lien"]?>
            </p>
          </div>
          <div class="ligne"><img src="<?= " admin/ " . substr($row["imgSrc "], (strlen($row["imgSrc "])-3)*-1)?>" alt=""></div>
          <div class="ligne">
            <p class="paragraph_text">
              note: <?=$row["note"]?>
            </p>
          </div>
        </div>
        <?php endwhile;?>
        </div>
      </section>
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

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="./src/js/main.js"></script>
    </body>
    </html>
