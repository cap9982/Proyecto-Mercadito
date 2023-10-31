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
-- Table structure for table `tbl_productos`
--

DROP TABLE IF EXISTS `tbl_productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_productos` (
  `id_producto` int NOT NULL,
  `Codigo` varchar(45) NOT NULL,
  `Nombre_producto` varchar(45) NOT NULL,
  `Precio` int NOT NULL,
  `Descripcion` text NOT NULL,
  `Fecha_elab` date NOT NULL,
  `Fecha_vence` date NOT NULL,
  `Cantidad` int NOT NULL,
  `Marca_id` int NOT NULL,
  `Tipo_id` int NOT NULL,
  `Foto` text,
  `oferta_id` int NOT NULL,
  PRIMARY KEY (`id_producto`,`oferta_id`,`Tipo_id`,`Marca_id`),
  KEY `fk_tbl_productos_tbl_ofertas_idx` (`oferta_id`),
  KEY `fk_tbl_productos_tbl_tipoproducto_idx` (`Tipo_id`),
  KEY `fk_tbl_productos_tbl_marca_idx` (`Marca_id`),
  CONSTRAINT `fk_tbl_productos_tbl_marca` FOREIGN KEY (`Marca_id`) REFERENCES `tbl_marca` (`id_marca`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tbl_productos_tbl_ofertas` FOREIGN KEY (`oferta_id`) REFERENCES `tbl_ofertas` (`id_oferta`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tbl_productos_tbl_tipoproducto` FOREIGN KEY (`Tipo_id`) REFERENCES `tbl_tipoproducto` (`id_tipo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_productos`
--

LOCK TABLES `tbl_productos` WRITE;
/*!40000 ALTER TABLE `tbl_productos` DISABLE KEYS */;
INSERT INTO `tbl_productos` VALUES (118,'Salud','Enjuague Bucal Colgate',265,'Enjuague Bucal Colgate Total 12 Anti Sarro 500ml','2022-12-20','2023-10-26',15,3,2,'../img/Enjuague.png',1),(143,'Abarrotes','Tortillas de maiz',10,'Tortillas de maiz Paquete 10 ','2023-03-23','2023-03-27',12,9,1,'../img/Tortillas.png',1),(630,'Bebida gaseosa','Coca Cola light ',23,'Refresco Coca Cola Sin Azúcar 1.5 Lt','2022-06-29','2023-06-20',20,5,1,'../img/196069-1600-1600.jpg',1),(744,'Abarrotes','Papas Pringles Original',105,'Papas Pringles Original 124 Gr','2023-01-15','2023-12-15',18,1,1,'../img/Abarrotes-Snacks-Churros-de-Papa-y-Yuca_038000184932_1.jpg',1),(855,'Salud','Pasta Colgate',52,'Pasta dental Strong Teeth','2023-01-11','2023-12-14',21,3,2,'../img/ColgatePaste.png',2),(887,'Abarrotes','Papas Pringles Queso 124 Gr',105,'Papas Pringles Queso 124 Gr','2023-01-15','2023-12-15',13,1,1,'../img/219136-1600-1600.jgp',2644),(896,'Alimentos','Leche en Polvo Nido 1+ ',587,'Leche en Polvo Nido 1+ Instantánea 2000 Gr','2023-04-21','2024-05-05',18,4537,1,'../img/241069-1600-1600.jpg',1),(920,'Abarrotes','harina Maseca',27,'Bolsa de harina','2023-03-20','2023-11-22',16,2,1,'../img/Harina-Maseca-De-Maiz-Bolsa-1814-4Gr-1-3317.jpg',3957),(1021,'Bebida gaseosa','Coca Cola',55,'Coca Cola 3 litros','2022-06-29','2023-11-22',14,5,1,'../img/Coca3.jpg',1),(1302,'Alimentos','Colado Heinz Pack 6Un ',62,'Colado Heinz Pack 6Un X 113 Gr C/U','2023-04-21','2023-11-08',15,3993,1,'../img/224254-1600-1600.jpg',1),(1380,'Salud','Pasta Dental Colgate Sensitive Pro-Alivio',207,'Pasta Dental Colgate Sensitive Pro-Alivio Original 75 ml','2022-12-22','2023-07-12',14,3,2,'../img/241357-1600-1600.jpg',1),(1707,'Bebida gaseosa','Refresco 7Up ',52,'Refresco 7Up En Botella 3 Lt','2022-11-24','2023-05-16',14,10,1,'../img/184716-1600-1600.jpg',1),(1820,'Abarrotes','Tajadas de Platano frito ',15,'Platano frito en rodajas','2023-03-23','2023-07-13',8,7,1,'../img/Tajadas.png',1),(2158,'Abarrotes','Aceite Essential Everyday Vegetal',124,'Aceite Essential Everyday Vegetal 32 Oz','2022-12-11','2023-11-11',15,8,1,'../img/179392-1600-1600.jpg',1),(3167,'Abarrotes','Arroz Blanco Ahorro Max',46,'Arroz Blanco Ahorro Max 1750 Gr','2023-03-26','2023-11-30',23,13,1,'../img/221311-1600-1600.jpg',1),(3440,'Bebida gaseosa','Refresco Mirinda Naranja ',40,'Refresco Mirinda Naranja En Botella 2 Lt','2023-01-25','2023-11-30',14,11,1,'../img/191439-1600-1600.jpg',1),(3556,'Mascotas','Purina Felix gato Adulto ',30,'Purina Felix gato Adulto Pescado Blanco 85gr (3oz)','2023-03-23','2023-11-30',45,6,7,'../img/217964-1600-1600.jpg',1),(3935,'Alimentos','Aguacate',22,'Fruta Mexicana Aguacate','2023-03-23','2023-03-26',19,7,1,'../img/aguacate-fresco-rebanadas-fruta-aguacate-aislado-blanco_34435-2300.jpg',1),(4105,'Embutidos','Jamón Bavaria Delicia ',64,'Jamón Bavaria Delicia 247 Gr','2023-01-27','2023-05-25',22,12,8,'../img/224002-1600-1600.jpg',1),(4509,'Salud','Cepillo Dental Colgate Luminous White',217,'Cepillo Dental Colgate Luminous White Lovers 3 Unidades','2022-12-15','2023-07-20',14,3,2,'../img/Cepillo.png',1),(4590,'Abarrotes','Fritura Pringles Con Crema De Cebolla',37,'Fritura Pringles Con Crema De Cebolla 1.4 Oz','2023-01-22','2023-12-22',15,1,1,'../img/161243-1600-1600.jpg',1),(4628,'Abarrotes','Aceite Mazola Canola',67,'Aceite Mazola Canola 750 Ml','2022-11-25','2023-07-19',20,2320,1,'../img/179148-1600-1600.jpg',1),(4673,'Bebida Alcohólica','Cerveza Barena lata',24,'Cerveza Barena lata 12 oz','2023-04-20','2023-11-22',25,1173,3,'../img/162600-1600-1600.jpg',1);
/*!40000 ALTER TABLE `tbl_productos` ENABLE KEYS */;
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
