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
-- Table structure for table `tbl_marca`
--

DROP TABLE IF EXISTS `tbl_marca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_marca` (
  `id_marca` int NOT NULL,
  `Marca` varchar(45) NOT NULL,
  `Descripcion` text NOT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_marca`
--

LOCK TABLES `tbl_marca` WRITE;
/*!40000 ALTER TABLE `tbl_marca` DISABLE KEYS */;
INSERT INTO `tbl_marca` VALUES (1,'Pringles','Papas fritas delgadas'),(2,'Maseca','Harina de maíz'),(3,'Colgate','Pasta Dental'),(4,'Pepsi','Bebida Gaseosa'),(5,'Coca Cola','Bebida Gaseosa'),(6,'Felix','Comida Gatos'),(7,'Mercado','Productos del Mercado'),(8,'Essensial','Productos de Cocina'),(9,'Tortillería','Tortillería estilo mexicano'),(10,'7 Up','Bebida gaseosa sabor limon'),(11,'Mirinda','Bebida Gaseosa'),(12,'Delicia','Productos de Carne'),(13,'Ahorro Max','Arroz'),(135,'Breadco','Panaderia'),(198,'Pollo Norteño','Carne de Pollo'),(242,'Gati','Comida para Gatos'),(296,'Dogui','Comida para Perro'),(440,'Kimby','Productos de Carne'),(472,'Mister Huevo','Huevo de gallina'),(487,'Leyde','Bebias Pasteurizadas'),(1164,'Diana','Churritos ricos'),(1173,'Barena ','Bebidas Alcohólicas '),(2320,'mazola','aceite vegetal'),(3993,'Heinz','Alimentos para bebé'),(4537,'Nido','Producto Lacteo Infantil');
/*!40000 ALTER TABLE `tbl_marca` ENABLE KEYS */;
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
