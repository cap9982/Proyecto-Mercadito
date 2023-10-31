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
-- Table structure for table `tbl_proveedor`
--

DROP TABLE IF EXISTS `tbl_proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_proveedor` (
  `id_proveedor` int NOT NULL,
  `Nombre_proveedor` varchar(45) NOT NULL,
  `Tipodeproductos` varchar(45) NOT NULL,
  `Fecha_iniciocontrato` date NOT NULL,
  `Fecha_fincontrato` date NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Telefono` varchar(35) NOT NULL,
  `Encargado` varchar(65) NOT NULL,
  `Direccion` varchar(75) NOT NULL,
  `Factura_id` int NOT NULL,
  PRIMARY KEY (`id_proveedor`,`Factura_id`),
  KEY `fk_tbl_proveedor_tbl_facturacompra_idx` (`Factura_id`),
  CONSTRAINT `fk_tbl_proveedor_tbl_facturacompra` FOREIGN KEY (`Factura_id`) REFERENCES `tbl_facturacompra` (`Id_factura`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_proveedor`
--

LOCK TABLES `tbl_proveedor` WRITE;
/*!40000 ALTER TABLE `tbl_proveedor` DISABLE KEYS */;
INSERT INTO `tbl_proveedor` VALUES (1,'Istmania','Bebidas alcohólicas','2012-12-18','2012-12-24','itsistmania@deutchland.com','22433547','Alberta Baquedano','Premier Business Park, Aldea la Cañada Anillo periférico.',1),(2,'Essential Everyday','Alimentos','2015-10-21','2015-10-25','EEhelp@essentialeveryday.com','8554232630','Charles Parker','portland oregon EEUU',1),(301,'Pepsico','Bebidas Gaseosas','2023-03-05','2024-06-04','pepsicola@pepsi.com','33443322','Juana Lainez','1 cuadra despues de inverfab, Tegucigalpa',1),(489,'Delicia','Embutidos','2023-01-01','2025-11-11','DeliciaHN@helpdelicias.com','22999911','Samuel Avila','La lima, San Pedro Sula',1),(1706,'Fabrica de Juguitos Gabella','Bebidas Pasteurizadas','2023-04-14','2015-02-10','invarpi@yahoo.com','26620166','José Pineda','Edificio Copán Dry, 4 Ave. 3 Calle,S.E., Bo. Santa Teresa Santa Rosa de Cop',1),(2109,'Gati','Mascotas','2023-01-17','2024-11-13','Gatihonduras@gati.com','22222299','Pedro Ramirez','Col. Brasilia, Tegucigalpa',1),(2312,'Cerveceria hondureña','Bebidas alcohólicas','2023-03-26','2024-01-31','HNESservicioalcliente@ab-inbev.com  ','25451111','Juana Perez','Barrio La Granja, Tegucigalpa',1),(3335,'Breadco','Panaderia','2023-01-12','2025-01-12','ventas@breadco.com','22216699','Juan Padilla','A la par de Data Center Tigo, Tegucigalpa',1),(4028,'Fritolay','Alimentos','2023-01-20','2026-07-23','helpfritolayshn@fritolay.com','33565523','Carlos alvarez','Anillo periferico poco antes de UNAH, Tegucigalpa',1),(4805,'pringles','Alimentos','2022-12-09','2024-02-14','helppringleshn@pringles.com','33224411','Fernando Manzanares','La lima, San Pedro Sula',1),(4819,'Leyde','Bebidas Pasteurizadas','2023-01-08','2024-01-08','helpLeydeHN@leyde.com','24800070','Carmen Montoya','Barrio La Granja, boulevard La Comunidad Económica Europea, frente a La Arm',1),(4948,'Dogui','Mascotas','2023-03-06','2024-03-14','Dogui','22663311','Santiago Márquez','Col. Brasilia, Tegucigalpa',1);
/*!40000 ALTER TABLE `tbl_proveedor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-31 15:42:23
