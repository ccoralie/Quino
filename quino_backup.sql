-- MySQL dump 10.13  Distrib 5.6.38, for osx10.9 (x86_64)
--
-- Host: localhost    Database: quino
-- ------------------------------------------------------
-- Server version	5.6.38

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
-- Table structure for table `arcticles_u_e`
--

DROP TABLE IF EXISTS `arcticles_u_e`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `arcticles_u_e` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `arcticles_u_e`
--

LOCK TABLES `arcticles_u_e` WRITE;
/*!40000 ALTER TABLE `arcticles_u_e` DISABLE KEYS */;
/*!40000 ALTER TABLE `arcticles_u_e` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles_u_e`
--

DROP TABLE IF EXISTS `articles_u_e`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles_u_e` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `langue_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5498FB1B2AADBACD` (`langue_id`),
  CONSTRAINT `FK_5498FB1B2AADBACD` FOREIGN KEY (`langue_id`) REFERENCES `langue` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles_u_e`
--

LOCK TABLES `articles_u_e` WRITE;
/*!40000 ALTER TABLE `articles_u_e` DISABLE KEYS */;
INSERT INTO `articles_u_e` VALUES (1,1,'ola chikito','un cerveza por favor'),(2,2,'Hi Customer','I would like a beer plz');
/*!40000 ALTER TABLE `articles_u_e` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carte`
--

DROP TABLE IF EXISTS `carte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `origine` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_BAD4FFFDBCF5E72D` (`categorie_id`),
  CONSTRAINT `FK_BAD4FFFDBCF5E72D` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carte`
--

LOCK TABLES `carte` WRITE;
/*!40000 ALTER TABLE `carte` DISABLE KEYS */;
INSERT INTO `carte` VALUES (1,'Guacamole de la casa','Mexico','3,50','Purée d’avocat, d’ail, et de tomates servis avec ses nachos',1),(2,'Causa rellena','Perù','4,00','Purée citronnée et légèrement pimentée, thon, tomate et avocat',1),(3,'Ensalada de frijoles rojos','Mexico','3,50','Salade de haricots rouges, mais , poivrons rouges, oignons, coriandre',1),(4,'El Ceviche','Perù','7,00','Tartare de poisson mariné dans le citron vert, oignons rouges et aji amarillo.',1),(5,'Choros a la chalaca','Perù','5,50','Moules citronnés accompagnées de dés de tomates, piments et oignons',1),(6,'Las empanadas de pino','Chile','5,50','Duo de chaussons fourrés à la viande de bœuf et aux épices servi avec une sauce pebre.',2),(7,'Las empanadas de queso','Chile','5,50','Duo de chaussons frits fourrés au fromage, servi avec une sauce pebre.',2),(8,'Lomo saltado','Perù','5,00','Bœuf mariné, puis sauté avec oignons rouges, ail et tomates et flambé au pisco.',2),(9,'Quesadilla de queso','Mexico','5,00','Tortilla fourrée au fromage.',2),(10,'Aji de gallina','Perù','4,00','Poulet émincé , nappé d’une sauce crémeuse et légèrement pimentée.',2),(11,'El completo','Chile','5,00','Hot dog composé d’une saucisse de volaille, choucroute,  purée d’avocat, dés de tomates, ketchup et moutarde',2),(12,'El Patacon','Colombie','5,00','Galette de bananes plantains frites',2),(13,'Flan casero','Argentina','4,00','Flan aux œufs et au caramel servi avec du dulce de leche',3),(14,'Arroz con leche','Perù','4,00','Riz au lait',3),(15,'Alfajor','Argentina','4,00','Grand sablé fourré au dulce de leche',3),(16,'La torta de tia Gisele','Perù','5,00','Tarte aux noix de pécan',3),(17,'Pastel de chocolate con chile','Chile','4,00','Gâteau au chocolat',3);
/*!40000 ALTER TABLE `carte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categorie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categorie`
--

LOCK TABLES `categorie` WRITE;
/*!40000 ALTER TABLE `categorie` DISABLE KEYS */;
INSERT INTO `categorie` VALUES (1,'LAS TAPAS FRIAS'),(2,'LAS TAPAS CALIENTES'),(3,'LOS POSTRES');
/*!40000 ALTER TABLE `categorie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conges`
--

DROP TABLE IF EXISTS `conges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conges` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texte` longtext COLLATE utf8_unicode_ci,
  `actif` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conges`
--

LOCK TABLES `conges` WRITE;
/*!40000 ALTER TABLE `conges` DISABLE KEYS */;
INSERT INTO `conges` VALUES (1,'ouvert du mardi au dimanche de 11h à 1h',1);
/*!40000 ALTER TABLE `conges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diapo__accueil`
--

DROP TABLE IF EXISTS `diapo__accueil`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diapo__accueil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diapo__accueil`
--

LOCK TABLES `diapo__accueil` WRITE;
/*!40000 ALTER TABLE `diapo__accueil` DISABLE KEYS */;
/*!40000 ALTER TABLE `diapo__accueil` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diapo_carte`
--

DROP TABLE IF EXISTS `diapo_carte`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diapo_carte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diapo_carte`
--

LOCK TABLES `diapo_carte` WRITE;
/*!40000 ALTER TABLE `diapo_carte` DISABLE KEYS */;
/*!40000 ALTER TABLE `diapo_carte` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `langue`
--

DROP TABLE IF EXISTS `langue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `langue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Langue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `drapeaux_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abreviation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_9357758E94FB70B8` (`Langue`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `langue`
--

LOCK TABLES `langue` WRITE;
/*!40000 ALTER TABLE `langue` DISABLE KEYS */;
INSERT INTO `langue` VALUES (1,'Espagnol','test','ESP'),(2,'Anglais','test2','EN');
/*!40000 ALTER TABLE `langue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_8D93D64992FC23A8` (`username_canonical`),
  UNIQUE KEY `UNIQ_8D93D649A0D96FBF` (`email_canonical`),
  UNIQUE KEY `UNIQ_8D93D649C05FB297` (`confirmation_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'helene','helene','helene@helene.prout','helene@helene.prout',1,NULL,'$2y$13$1NbMJUvC5IKtstDAh6DwYOXMK15sgLRms6N3HQ42haYXVb68K/ZxC','2018-07-24 16:29:39',NULL,NULL,'a:0:{}');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-04 14:39:34
