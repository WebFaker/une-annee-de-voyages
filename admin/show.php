<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administration - Accueil</title>
</head>
<body>
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

            ;"; /* on  recupere les donnée id competence intitulé resume dateStart et datefinish de tableau Mysql 'anonce'*/
$stmt = $pdo->prepare($total);
$stmt->execute();
?>
<h1 class="annonce-title">Liste des Posts</h1>
<a href="index.php">retourner vers la page admin</a>
<h2>Articles</h2>
<section class="container-annonce">
    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <div>
            <p>Titre : <?=$row["title"]?></p>
            <p>Image :<?=$row["image"]?></p>
            <p><?=$row["categorie"]?></p>
            <p><?=$row["SousCategorie"]?></p>
            <p><?=$row["Lieux"]?></p>
            <p><?=$row["description"]?></p>
            <p><?=$row["auteur"]?></p>
            <p><?=$row["date"]?></p>
            <p><?=$row["imgAlt"]?></p>
        </div>
        <a href="article/edit.php?id=<?=$row["id"]?>">Modifier</a>
        <a href="article/delete.php?id=<?=$row["id"]?>">Supprimer</a>
    <?php endwhile;?> <!- on ferme la balise php et on fini la condition tant que ->
  </p><a href="article/add.php">Ajouter un article</a>
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
<h2 class="annonce-title">Boite à Image</h2>
<section class="container-annonce">
    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <div>
            <p><?=$row["imgAlt"]?></p>
            <p><?=$row["imgSrc"]?></p>
            <p><?=$row["description"]?></p>
        </div>
        <a href="adminBoite/edit.php?id=<?=$row["id"]?>">Modifier</a>
        <a href="adminBoite/delete.php?id=<?=$row["id"]?>">Supprimer</a>
    <?php endwhile;?> <!- on ferme la balise php et on fini la condition tant que ->
  </p><a href="adminBoite/add.php">Ajouter une image</a>
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
<h2 class="annonce-title">Partenaires</h2>
<section class="container-annonce">
    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <div>
            <p><?=$row["imgAlt"]?></p>
            <p><?=$row["image"]?></p>
            <p><?=$row["lien"]?></p>
        </div>
        <a href="partenaire/edit.php?id=<?=$row["id"]?>">Modifier</a>
        <a href="partenaire/delete.php?id=<?=$row["id"]?>">Supprimer</a>
    <?php endwhile;?>
  </p><a href="partenaire/add.php">Ajouter un Partenaire</a>
</section>


<?php
$top =" SELECT
            `id`,
            `categorie`,
            `nom`,
            `description`,
            `lien`,
            `note`,
            `image`
           FROM
            `top100`
            ;";
$stmt = $pdo->prepare($top);
$stmt->execute();
?>
<h2 class="annonce-title">TOP 100</h2>
<section class="container-annonce">
    <?php while (false !== $row = $stmt->fetch(PDO::FETCH_ASSOC)) :?>
        <div>
            <p><?=$row["categorie"]?></p>
            <p><?=$row["nom"]?></p>
            <p><?=$row["description"]?></p>
            <p><?=$row["lien"]?></p>
            <p><?=$row["note"]?></p>
            <p><?=$row["image"]?></p>
        </div>
        <a href="top100/edit.php?id=<?=$row["id"]?>">Modifier</a>
        <a href="top100/delete.php?id=<?=$row["id"]?>">Supprimer</a>
    <?php endwhile;?>
  </p><a href="top100/add.php">Ajouter au TOP 100</a>
</section>
</body>
