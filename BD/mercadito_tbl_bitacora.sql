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
-- Table structure for table `tbl_bitacora`
--

DROP TABLE IF EXISTS `tbl_bitacora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_bitacora` (
  `id_bitacora` int NOT NULL AUTO_INCREMENT,
  `Accion` varchar(45) NOT NULL,
  `Fecha_realizado` date NOT NULL,
  `Empleado_id` int NOT NULL,
  PRIMARY KEY (`id_bitacora`,`Empleado_id`),
  KEY `fk_tbl_bitacora_tbl_empleado_idx` (`Empleado_id`),
  CONSTRAINT `fk_tbl_bitacora_tbl_empleado` FOREIGN KEY (`Empleado_id`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_bitacora`
--

LOCK TABLES `tbl_bitacora` WRITE;
/*!40000 ALTER TABLE `tbl_bitacora` DISABLE KEYS */;
INSERT INTO `tbl_bitacora` VALUES (1,'Creacion de promocion','2023-01-17',1),(5,'Agregó Inventario','2023-03-26',1),(6,'Agregó Inventario','2023-03-26',1),(7,'Eliminó producto de Inventario','2023-03-26',1),(8,'Modificó un producto de Inventario','2023-03-26',1),(9,'Agrego Marca de productos al sistema','2023-03-26',2),(10,'Modificó una marca de productos','2023-03-26',2),(11,'Eliminó una marca de productos','2023-03-26',2),(12,'Modificó Proveedor de productos','2023-03-26',2),(13,'Agregó proveedor de productos','2023-03-26',2),(14,'Agregó proveedor de productos','2023-03-26',2),(15,'Eliminó Proveedor de productos','2023-03-26',2),(16,'Registró Nueva Oferta','2023-03-26',2),(17,'Modificó Nueva Oferta','2023-03-26',2),(18,'Eliminó Nueva Oferta','2023-03-26',2),(19,'Registró Nuevo Empleado','2023-03-26',2),(20,'Modificó Empleado','2023-03-26',2),(21,'Eliminó Empleado','2023-03-26',2),(22,'Registró Nuevo Empleado','2023-03-26',2),(23,'Modificó una marca de productos','2023-03-27',2),(25,'Modificó Proveedor de productos','2023-03-27',2),(26,'Modificó Proveedor de productos','2023-03-27',2),(27,'Agrego Marca de productos al sistema','2023-03-28',2),(28,'Agrego Marca de productos al sistema','2023-03-28',2),(29,'Agrego Marca de productos al sistema','2023-03-28',2),(30,'Agrego Marca de productos al sistema','2023-03-28',2),(31,'Agrego Marca de productos al sistema','2023-03-28',2),(32,'Agrego Marca de productos al sistema','2023-03-28',2),(33,'Agregó proveedor de productos','2023-03-28',2),(34,'Agregó proveedor de productos','2023-03-28',2),(35,'Agregó proveedor de productos','2023-03-28',2),(36,'Agregó proveedor de productos','2023-03-28',2),(37,'Agregó proveedor de productos','2023-03-28',1014),(38,'Agregó proveedor de productos','2023-03-28',1014),(39,'Registró Nueva Oferta','2023-03-28',1014),(40,'Registró Nueva Oferta','2023-03-28',1014),(41,'Modificó Nueva Oferta','2023-03-28',1014),(42,'Modificó una marca de productos','2023-03-28',1),(43,'Agrego Marca de productos al sistema','2023-03-28',1),(44,'Eliminó una marca de productos','2023-03-28',1),(45,'Modificó un producto de Inventario','2023-03-28',2),(46,'Modificó un producto de Inventario','2023-03-28',2),(47,'Modificó un producto de Inventario','2023-03-28',2),(48,'Modificó un producto de Inventario','2023-03-28',2),(49,'Modificó un producto de Inventario','2023-03-28',2),(50,'Registró Nueva Oferta','2023-03-31',2),(51,'Eliminó Nueva Oferta','2023-03-31',2),(52,'Registró Nueva Oferta','2023-03-31',2),(53,'Modificó un producto de Inventario','2023-04-01',2),(54,'Registró Nuevo Empleado','2023-04-13',2),(55,'Agrego Marca de productos al sistema','2023-04-14',2),(56,'Agrego Marca de productos al sistema','2023-04-14',2),(57,'Eliminó una marca de productos','2023-04-14',2),(58,'Agrego Marca de productos al sistema','2023-04-14',2),(59,'Agregó proveedor de productos','2023-04-14',2),(60,'Agregó Inventario','2023-04-14',2),(61,'Registró Nueva Oferta','2023-04-14',2),(62,'Registró Nuevo Empleado','2023-04-14',2),(63,'Eliminó una marca de productos','2023-04-15',2),(64,'Modificó una marca de productos','2023-04-15',2),(65,'Modificó Proveedor de productos','2023-04-15',2),(66,'Eliminó Proveedor de productos','2023-04-15',2),(67,'Modificó un producto de Inventario','2023-04-15',2),(68,'Eliminó producto de Inventario','2023-04-15',2),(69,'Modificó Nueva Oferta','2023-04-15',2),(70,'Modificó Empleado','2023-04-15',2),(71,'Modificó Empleado','2023-04-15',2),(72,'Modificó Empleado','2023-04-15',2),(73,'Eliminó Empleado','2023-04-15',2),(74,'Modificó Empleado','2023-04-15',2),(75,'Modificó un producto de Inventario','2023-04-15',2),(76,'Modificó un producto de Inventario','2023-04-19',2),(77,'Eliminó Nueva Oferta','2023-04-19',2),(78,'Modificó Empleado','2023-04-19',2),(79,'Modificó Empleado','2023-04-19',2),(80,'Modificó Empleado','2023-04-19',2),(81,'Modificó Proveedor de productos','2023-04-19',2),(82,'Modificó un producto de Inventario','2023-04-19',2),(83,'Registró Nueva Oferta','2023-04-19',2),(84,'Modificó Nueva Oferta','2023-04-19',2),(85,'Agrego Marca de productos al sistema','2023-04-20',2),(86,'Agregó Inventario','2023-04-20',2),(87,'Agrego Marca de productos al sistema','2023-04-20',2),(88,'Modificó un producto de Inventario','2023-04-21',2),(89,'Agregó Inventario','2023-04-21',2),(90,'Registró Nuevo Empleado','2023-04-21',2),(91,'Modificó un producto de Inventario','2023-04-21',2),(92,'Agrego Marca de productos al sistema','2023-04-21',2),(93,'Agregó Inventario','2023-04-21',2),(94,'Modificó Proveedor de productos','2023-04-21',2),(95,'Agrego Marca de productos al sistema','2023-08-11',2),(96,'Modificó una marca de productos','2023-08-11',2);
/*!40000 ALTER TABLE `tbl_bitacora` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-31 15:42:22
