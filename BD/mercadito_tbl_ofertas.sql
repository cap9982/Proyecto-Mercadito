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
-- Table structure for table `tbl_ofertas`
--

DROP TABLE IF EXISTS `tbl_ofertas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_ofertas` (
  `id_oferta` int NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `id_empleado` int NOT NULL,
  `Tipo_promo` varchar(25) NOT NULL,
  `producto_id` int NOT NULL,
  PRIMARY KEY (`id_oferta`,`id_empleado`),
  KEY `fk_tbl_ofertas_tbl_empleado_idx` (`id_empleado`),
  CONSTRAINT `fk_tbl_ofertas_tbl_empleado` FOREIGN KEY (`id_empleado`) REFERENCES `tbl_empleado` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_ofertas`
--

LOCK TABLES `tbl_ofertas` WRITE;
/*!40000 ALTER TABLE `tbl_ofertas` DISABLE KEYS */;
INSERT INTO `tbl_ofertas` VALUES (1,'Sin oferta','2012-12-22','2013-12-22',1,'Ninguna',0),(2,'Papas Pringles al 3x1','2023-04-01','2023-04-15',1,'Obsequio',744),(577,'demostración de nueva Coca light','2023-03-28','2023-03-31',1014,'Demostraciones',630),(672,'2x1 Felix para Gato','2023-03-05','2023-03-23',1,'Obsequio',3556),(893,'Pasta dental 2x1','2023-03-28','2023-04-07',1014,'Obsequio',855),(1214,'2x1 Enjuague bocal colgate','2023-03-24','2023-03-31',1,'Obsequio',118),(1622,'2x1 Aceite Mazola','2023-03-13','2023-03-28',1,'Demostraciones',4628),(2644,'Muestras de papas','2023-04-14','2023-04-18',2,'Demostraciones',887),(3957,'Harina cupón','2023-04-19','2023-04-20',2,'Cupones',920);
/*!40000 ALTER TABLE `tbl_ofertas` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-31 15:42:25
