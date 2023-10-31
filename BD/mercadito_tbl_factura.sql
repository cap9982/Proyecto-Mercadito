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
-- Table structure for table `tbl_factura`
--

DROP TABLE IF EXISTS `tbl_factura`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_factura` (
  `id_factura` int NOT NULL,
  `Fecha_factura` date NOT NULL,
  `Codigo` varchar(25) NOT NULL,
  `Descripcion` varchar(45) NOT NULL,
  `Total` float NOT NULL,
  `FP_id` int NOT NULL,
  PRIMARY KEY (`id_factura`),
  KEY `fk_tbl_factura_tbl_formapago_idx` (`FP_id`),
  CONSTRAINT `fk_tbl_factura_tbl_formapago` FOREIGN KEY (`FP_id`) REFERENCES `tbl_formapago` (`id_fp`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_factura`
--

LOCK TABLES `tbl_factura` WRITE;
/*!40000 ALTER TABLE `tbl_factura` DISABLE KEYS */;
INSERT INTO `tbl_factura` VALUES (1,'2023-01-22','Compra','Compra corta',125,1),(203,'2023-04-20','Compra','Pago de compra',25.76,2),(231,'2023-03-31','Compra','Pago de compra',10512,1),(466,'2023-04-19','Compra','Pago de compra',58.24,1),(1032,'2023-04-02','Compra','Pago de compra',637.28,2),(1095,'2023-03-31','Compra','Pago de compra',5256,1),(1316,'2023-03-31','Compra','Pago de compra',334,1),(1651,'2023-08-11','Compra','Pago de compra',30.24,2),(1810,'2023-03-31','Compra','Pago de compra',2628,1),(1891,'2023-04-15','Compra','Pago de compra',375.2,1),(1956,'2023-04-14','Compra','Pago de compra',61.6,1),(2419,'2023-04-20','Compra','Pago de compra',355.04,1),(2490,'2023-03-31','Compra','Pago de compra',21024,1),(2671,'2023-04-21','Compra','Pago de compra',1066.24,1),(3399,'2023-04-01','Compra','Pago de compra',827.68,1),(3676,'2023-03-31','Compra','Pago de compra',1314,1),(3888,'2023-03-31','Compra','Pago de compra',438,1),(4014,'2023-04-01','Compra','Pago de compra',438,1);
/*!40000 ALTER TABLE `tbl_factura` ENABLE KEYS */;
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
