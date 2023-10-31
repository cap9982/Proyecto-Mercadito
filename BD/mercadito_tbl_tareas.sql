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
-- Table structure for table `tbl_tareas`
--

DROP TABLE IF EXISTS `tbl_tareas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_tareas` (
  `id_tarea` int NOT NULL AUTO_INCREMENT,
  `Tarea` text NOT NULL,
  `Descripcion` text NOT NULL,
  `Fecha_inicio` date NOT NULL,
  `Fecha_fin` date NOT NULL,
  `Estado` int NOT NULL,
  `empleado_id` int NOT NULL,
  PRIMARY KEY (`id_tarea`,`empleado_id`),
  KEY `fk_tbl_tareas_tbl_empleado_idx` (`empleado_id`),
  CONSTRAINT `fk_tbl_tareas_tbl_empleado` FOREIGN KEY (`empleado_id`) REFERENCES `tbl_empleado` (`id_empleado`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_tareas`
--

LOCK TABLES `tbl_tareas` WRITE;
/*!40000 ALTER TABLE `tbl_tareas` DISABLE KEYS */;
INSERT INTO `tbl_tareas` VALUES (1,'Contactar a los Proveedores','Contactar a los proveedores para realizar pedidos','2023-03-24','2023-03-24',20,1),(2,'Verificar Pedidos Previos','Verificar los pedidos realizados','2023-03-24','2023-03-24',40,1014),(3,'Reunion con el equipo','Realizar reunión diaria con equipo','2023-03-24','2023-03-24',60,2),(4,'Verificacion de inventario','Realizar verificación de inventario para ver que falta','2023-03-24','2023-03-24',80,1074),(9,'Atender Proveedores','Atender a los vendedores ','2023-04-21','2023-04-24',20,2342);
/*!40000 ALTER TABLE `tbl_tareas` ENABLE KEYS */;
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
