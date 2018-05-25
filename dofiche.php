<?php
var_dump($_POST);
require_once 'admin/connection.php';
?>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="styles/reset.css">
  <link rel="stylesheet" href="styles/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
    <link rel="stylesheet" href="./src/css/reset.css">
    <link rel="stylesheet" href="./src/css/classement.css">
    <link rel="stylesheet" href="./src/css/flickity.css">
    <link rel="stylesheet" href="./src/css/dofiche.css">
  <title>Une Année De Voyages - Top 100</title>
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
        <img src="./img/logo.png" alt="Logo" id="menu-logo-img">
      </div>
    </div>
  </section>
  <div class="scroll_container">
    <div class="logo_container">
      <img src="./img/logo.png" alt="Logo">
    </div>
    <div id="menu-button" class="menu_container">
      <img id="menu-button-img" class="menu_img_button" src="./src/img/menu.png" alt="Menu">
    </div>
    <div id="menu-button-open" class="menu_container">
      <img id="menu-button-open-img" class="menu_img_button" src="./src/img/menu-open.png" alt="Menu">
    </div>
      <?php
      $edit =" SELECT
            id,
            categorie,
            nom,
            description,
            lien,
            note,
            image
           FROM
            `top100`
            WHERE
            `id`= :id
            ;";
      $stmt = $pdo->prepare($edit);
      $stmt->bindValue(':id', $_GET['id']);
      $stmt->execute();
      ?>
    <!-- poke FICHH-->
      <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
    <section class="fiche-container">
      <div class="fiche-imgContainer">
        <img src="<?= "admin/" . substr($row["imgSrc"], (strlen($row["imgSrc"])-3)*-1)?>" alt="" class="fiche-img">
      </div>
      <div class="fiche-content">
        <p class="fiche-descr"><?=$row["description"]?></p>
        <p class="fiche-descr"><?=$row["nom"]?></p>
        <a href="" class="fiche-link"><?=$row["lein"]?></a>
      </div>
      ></section>
      <?php endwhile;?>
    <!-- FOOOOOOTERRR -->

    <footer class="footer">
      <h2 class="footer-title">Partenaires</h2>
      <div class="bluebar"></div>
      <div class="footer-imgContainer">
        <img src="img/af.png" alt="" class="footer-img">
        <img src="img/fuji.png" alt="" class="footer-img">
        <img src="img/nikon.png" alt="" class="footer-img">
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



    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>
</body>

</html>
