CREATE DATABASE  IF NOT EXISTS `groupproject` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `groupproject`;
-- MySQL dump 10.13  Distrib 5.6.17, for Win64 (x86_64)
--
-- Host: localhost    Database: groupproject
-- ------------------------------------------------------
-- Server version	5.6.21-log

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
-- Table structure for table `individualratings`
--

DROP TABLE IF EXISTS `individualratings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `individualratings` (
  `idindividualRatings` int(11) NOT NULL AUTO_INCREMENT,
  `ratingIdUser` int(11) DEFAULT NULL,
  `ratingIdRestaurant` int(11) DEFAULT NULL,
  `rating` tinyint(10) DEFAULT NULL,
  PRIMARY KEY (`idindividualRatings`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `individualratings`
--

LOCK TABLES `individualratings` WRITE;
/*!40000 ALTER TABLE `individualratings` DISABLE KEYS */;
INSERT INTO `individualratings` VALUES (1,1,1,2),(2,1,1,2),(3,1,1,2),(4,1,1,2);
/*!40000 ALTER TABLE `individualratings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `restaurants`
--

DROP TABLE IF EXISTS `restaurants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `restaurants` (
  `idrestaurants` int(11) NOT NULL AUTO_INCREMENT,
  `restaurantName` varchar(45) DEFAULT NULL,
  `restaurantGPSX` float DEFAULT NULL,
  `restaurantGPSY` float DEFAULT NULL,
  `restaurantTotalRating` int(11) DEFAULT '0',
  `RestaurantNumberRatings` int(11) DEFAULT '0',
  `restaurantRating` int(11) DEFAULT '0',
  PRIMARY KEY (`idrestaurants`),
  UNIQUE KEY `idrestaurants_UNIQUE` (`idrestaurants`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `restaurants`
--

LOCK TABLES `restaurants` WRITE;
/*!40000 ALTER TABLE `restaurants` DISABLE KEYS */;
INSERT INTO `restaurants` VALUES (1,'Test',51.8996,-8.46584,2,1,2),(2,'Test 2',-583,523.527,0,0,0),(3,'dfgdfgfd',45454,545455000,0,0,0);
/*!40000 ALTER TABLE `restaurants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `userPassword` varchar(45) DEFAULT NULL,
  `userName` varchar(45) DEFAULT NULL,
  `useremail` varchar(45) DEFAULT NULL,
  `userIsAdmin` bit(1) DEFAULT b'0',
  PRIMARY KEY (`iduser`),
  UNIQUE KEY `iduser_UNIQUE` (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','admin','admin@admin.com',''),(2,'Bob','Bob','Bob','\0'),(3,'Bob','Bob','bob@bob.com','\0'),(4,'Bobby','Bobby','bob@bob.com','\0'),(5,'','','','\0'),(6,'Lel','Lel','nanana@gmail.com','\0'),(7,'Abb','Abb','nanana@gmail.com','\0'),(8,'nan','nan','lol@lol.com','\0'),(9,'nan','nan','nanana@gmail.com','\0');
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

-- Dump completed on 2014-10-30 12:57:52
