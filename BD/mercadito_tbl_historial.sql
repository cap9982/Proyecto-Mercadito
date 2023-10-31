-- MySQL dump 10.13  Distrib 8.0.32, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: mercadito
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `tbl_historial`
--

DROP TABLE IF EXISTS `tbl_historial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_historial` (
  `id_historial` int NOT NULL AUTO_INCREMENT,
  `cantidad` int NOT NULL,
  `producto_id` int NOT NULL,
  `cliente_id` int NOT NULL,
  PRIMARY KEY (`id_historial`,`producto_id`,`cliente_id`),
  KEY `fk_tbl_historial_tbl_productos_idx` (`producto_id`),
  KEY `fk_tbl_historial_tbl_cliente_idx` (`cliente_id`),
  CONSTRAINT `fk_tbl_historial_tbl_cliente` FOREIGN KEY (`cliente_id`) REFERENCES `tbl_cliente` (`id_cliente`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tbl_historial_tbl_productos` FOREIGN KEY (`producto_id`) REFERENCES `tbl_productos` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_historial`
--

LOCK TABLES `tbl_historial` WRITE;
/*!40000 ALTER TABLE `tbl_historial` DISABLE KEYS */;
INSERT INTO `tbl_historial` VALUES (1,1,118,111),(2,1,143,111),(3,1,1021,7),(4,1,143,111),(5,2,744,111),(6,1,744,111),(7,1,630,111),(8,1,1707,111),(9,75,1380,111),(10,282,1707,111),(11,334,855,111),(12,334,855,111),(13,2,3556,111),(14,1,920,111),(15,2,118,111),(16,1,744,111),(17,1,118,111),(18,1,630,111),(19,3,887,111),(20,1,887,111),(21,2,744,111),(22,1,1021,111),(23,1,143,111),(24,1,1820,111),(25,1,630,111),(26,1,118,111),(27,1,1707,111),(28,1,3440,111),(29,1,1707,111),(30,1,3440,111),(31,1,3440,111),(32,1,3440,111),(33,1,744,111),(34,1,744,111),(35,1,744,111),(36,1,143,111),(37,1,118,111),(38,1,855,111),(39,1,630,111),(40,1,118,7),(41,1,855,7),(42,3,118,111),(43,1,855,111),(44,1,887,111),(45,-1,744,111),(46,1,920,111),(47,1,887,111);
/*!40000 ALTER TABLE `tbl_historial` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-31 15:42:21
