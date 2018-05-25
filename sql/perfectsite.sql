-- MySQL dump 10.13  Distrib 5.7.21, for Win64 (x86_64)
--
-- Host: localhost    Database: perfectsite
-- ------------------------------------------------------
-- Server version	5.7.21-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article`
--

DROP TABLE IF EXISTS `article`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `image` varchar(150) NOT NULL,
  `categorie` varchar(50) NOT NULL,
  `SousCategorie` varchar(50) NOT NULL,
  `Lieux` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `auteur` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `imgAlt` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article`
--

LOCK TABLES `article` WRITE;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` VALUES (26,'carola','../img/Capture d’écran 2017-11-15 à 12.01.58 copie.jpg','journaliste','bars','lieux','zerzer','azeaze','1998-08-08','alt'),(27,'carola','../img/Capture d’écran 2017-11-15 à 12.01.58 copie.jpg','journaliste','bars','lieux','zerzer','azeaze','1998-08-08','alt'),(28,'carola','../img/Capture d’écran 2017-11-15 à 12.01.58 copie.jpg','journaliste','bars','lieux','zerzer','azeaze','1998-08-08','alt'),(29,'carola','../img/Capture d’écran 2017-11-15 à 12.01.58 copie.jpg','journaliste','bars','lieux','zerzer','azeaze','1998-08-08','alt'),(30,'carola','../img/Capture d’écran 2017-11-15 à 12.01.58 copie.jpg','journaliste','bars','lieux','zerzer','azeaze','1998-08-08','alt'),(31,'carola','../img/Capture d’écran 2017-11-15 à 12.01.58 copie.jpg','journaliste','bars','lieux','zerzer','azeaze','1998-08-08','alt'),(32,'carola','../img/article_4.jpg','journaliste','bars','lieux','zerzer','azeaze','1998-08-08','alt'),(33,'carola','../img/8d2651fff3a76ced3fcf0ca98c4f8ef11 copie.jpg','journaliste','bars','lieux','zerzer','azeaze','1998-08-08','alt'),(34,'','../img/','journaliste','bars','','','','',''),(35,'file','../img/8d2651fff3a76ced3fcf0ca98c4f8ef11 copie.jpg','partenaire','restaurants','paris','yolo','vincent','1998-12-08','yolo'),(36,'aze','../img/fuji.png','annonceur','hotels','aze','azdaze','aze','1998-08-08','azeaz'),(37,'eaze','../img/fuji.png','journaliste','bars','zad','azdazd','z','1998-08-08','fazef'),(38,'az','../img/bar.jpg','journaliste','bars','aze','azeaze','aze','1998-08-19','aze'),(39,'aze','../img/bar.jpg','journaliste','bars','','zae','azeaze','1998-08-08','');
/*!40000 ALTER TABLE `article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `boiteimage`
--

DROP TABLE IF EXISTS `boiteimage`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `boiteimage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `imgAlt` varchar(50) NOT NULL,
  `imgSrc` varchar(50) NOT NULL,
  `description` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boiteimage`
--

LOCK TABLES `boiteimage` WRITE;
/*!40000 ALTER TABLE `boiteimage` DISABLE KEYS */;
INSERT INTO `boiteimage` VALUES (5,'lolllll','zefzefznj','zregnfzekf'),(6,'att','zefazeazfazf','dazfdazfaze'),(11,'azdaz','../img/','azdaz'),(12,'zadazd','../img/','azdazd'),(13,'zadazd','../img/','azdazd'),(14,'zadazd','../img/','azdazd'),(16,'azeaze','../img/','zaeaze'),(17,'eazeaze','../img/','azeaze'),(18,'zaeaz','../img/','aeaze'),(20,'azeaze','../img/section2-image2.jpg','azeaze'),(21,'z','../img/section2-image4.jpg','zdad'),(22,'azeaz','../img/fuji.png','azdaz'),(23,'zadaze','../img/fuji.png','aze'),(24,'azeaz','../img/fuji.png','zaeaz');
/*!40000 ALTER TABLE `boiteimage` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `partenaire`
--

DROP TABLE IF EXISTS `partenaire`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `partenaire` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(50) NOT NULL,
  `imgAlt` varchar(50) NOT NULL,
  `lien` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `partenaire`
--

LOCK TABLES `partenaire` WRITE;
/*!40000 ALTER TABLE `partenaire` DISABLE KEYS */;
INSERT INTO `partenaire` VALUES (2,'../img/','eeeeeeeeeee','alllahhhhhhha.com'),(3,'../img/nikon.png','nikon','nikon'),(4,'../img/nikon.png','pour','www.winx.com'),(6,'../img/fuji.png','fuji','www.fugi.com'),(9,'../img/article_4.jpg','azeaze','aze'),(10,'../img/article_3.jpg','azd','azeaz');
/*!40000 ALTER TABLE `partenaire` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `top100`
--

DROP TABLE IF EXISTS `top100`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `top100` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categorie` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `lien` varchar(50) NOT NULL,
  `note` int(10) NOT NULL,
  `image` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `top100`
--

LOCK TABLES `top100` WRITE;
/*!40000 ALTER TABLE `top100` DISABLE KEYS */;
INSERT INTO `top100` VALUES (1,'hotel','a','aa','a',1,'../img/'),(2,'bar','yoloezfse','zadfaz','ezfzegz',4,'../img/background_opa.jpg');
/*!40000 ALTER TABLE `top100` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-05-24 21:42:10
