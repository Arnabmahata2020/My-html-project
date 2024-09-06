-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: oops
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

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
-- Table structure for table `marks_student`
--

DROP TABLE IF EXISTS `marks_student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marks_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `marks` int(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marks_student`
--

LOCK TABLES `marks_student` WRITE;
/*!40000 ALTER TABLE `marks_student` DISABLE KEYS */;
INSERT INTO `marks_student` VALUES (1,'Ar Sharma',676),(6,'Rohit Sharma',50),(7,'Rohit Sharma',60),(8,'Virat Koholi',18),(9,'Sowgata Debsingha',676),(10,'Supriya Ghosh',520);
/*!40000 ALTER TABLE `marks_student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registation`
--

DROP TABLE IF EXISTS `registation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `email` text NOT NULL,
  `gender` varchar(30) NOT NULL,
  `address` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registation`
--

LOCK TABLES `registation` WRITE;
/*!40000 ALTER TABLE `registation` DISABLE KEYS */;
INSERT INTO `registation` VALUES (5,'Anima Mahata','arnabmahata2020@gmail.com','female','Pingboni'),(6,'Arnab Mahata','arnabmahata2020@gmail.com','male','Bidhan Nagar, J-24'),(8,'Supriya Ghosh','ram2020@gmail.com','female','Andharia'),(9,'subha','s@gmail.com','male','JGM'),(14,'Arnab Mahata','a2020@gmail.com','male','Bidhan Nagar, J-24'),(15,'dcsd','a2020@gmail.com','male','Bidhan Nagar, J-24');
/*!40000 ALTER TABLE `registation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student_marks`
--

DROP TABLE IF EXISTS `student_marks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student_marks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `marks` int(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student_marks`
--

LOCK TABLES `student_marks` WRITE;
/*!40000 ALTER TABLE `student_marks` DISABLE KEYS */;
INSERT INTO `student_marks` VALUES (3,'Ram Sharma',623),(4,'Ram Sharma',623),(5,'Ram Sharma',623),(6,'Chandan Ghosh',432),(7,'Bibek Mahata',450),(8,'Raju Mahata',420),(9,'Sourav Dey',565),(10,'Chandan Ghosh',445),(13,'Ram Sharma',676),(14,'Ram Sharma',676),(15,'Ram Sharma',676),(16,'Ram Sharma',676),(17,'Ram Sharma',676),(18,'Ar Sharma',676);
/*!40000 ALTER TABLE `student_marks` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-09-06 22:34:28
