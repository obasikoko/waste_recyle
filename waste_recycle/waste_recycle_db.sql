-- MariaDB dump 10.19  Distrib 10.4.19-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: waste_recycle
-- ------------------------------------------------------
-- Server version	10.4.19-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `timing` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `post_type` varchar(100) DEFAULT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `total` varchar(100) DEFAULT NULL,
  `post_status` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (44,'Plastic and Bottle Trash','Plastic and Bottle Trash Waste Management and Recyling','1636881169','Henry Obasi','good1636881154.png','6','plastic','3','18',NULL),(45,'Plastic and Bottle Trash','Plastic and Bottle Trash Waste Management and Recyling','1636881606','Henry Obasi','good1636881154.png','6','plastic','4','18',NULL),(46,'Meals Donations','Meals Donated by Donors','1636881695','Henry Obasi','good1636881154.png','6','donation','7','9','meal'),(47,'Money Donations','Money Donated by Donors','1636881702','Henry Obasi','good1636881154.png','6','donation','400','600','money'),(48,'Plastic and Bottle Trash','Plastic and Bottle Trash Waste Management and Recyling','1645951274','Henry Obasi','good1645950456.png','7','plastic','3','18',NULL),(49,'Plastic and Bottle Trash','Plastic and Bottle Trash Waste Management and Recyling','1645951473','Henry Obasi','good1645950456.png','7','plastic','3','18',NULL),(50,'Plastic and Bottle Trash','Plastic and Bottle Trash Waste Management and Recyling','1645951536','Henry Obasi','good1645950456.png','7','plastic','4','18',NULL),(51,'Meals Donations','Meals Donated by Donors','1645951561','Henry Obasi','good1645950456.png','7','donation','2','9','meal'),(52,'Money Donations','Money Donated by Donors','1645951577','Henry Obasi','good1645950456.png','7','donation','200','600','money'),(53,'Plastic and Bottle Trash','Plastic and Bottle Trash Waste Management and Recyling','1645951614','Henry Obasi','good1645950456.png','7','plastic','1','18',NULL);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `user_rank` varchar(100) DEFAULT NULL,
  `created_time` varchar(100) DEFAULT NULL,
  `timer1` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (6,'$2y$04$0VcSNvk.zcfQOPr.RdChP.a7PG.g4uvemwrhre.iVkX6iLUlLv.36','Henry Oba','henry@gmail.com','good1636881154.png','Volunteers','Sunday, November 14, 2021, 5:12 am','1636881154'),(7,'$2y$04$xV5/yvcp58gik/7zhloGleDGv/e2C1a9/XIbAE3YgExnODje9icdS','Henry Obasi','test@gmail.com','good1645950456.png','Donors','Sunday, February 27, 2022, 4:27 am','1645950456');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'waste_recycle'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-27 11:58:47
