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
-- Table structure for table `tbl_empleado`
--

DROP TABLE IF EXISTS `tbl_empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_empleado` (
  `id_empleado` int NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Apellido` varchar(45) NOT NULL,
  `N_identidad` varchar(45) NOT NULL,
  `Sexo` char(1) NOT NULL,
  `Num_Telefono` varchar(20) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Direccion` varchar(45) NOT NULL,
  `Fecha_entrada` date NOT NULL,
  `Cargo_id` int NOT NULL,
  `Factura_id` int NOT NULL,
  `Rol_id` int NOT NULL,
  `JL_id` int NOT NULL,
  `Usuarioe_id` int NOT NULL,
  PRIMARY KEY (`id_empleado`,`Factura_id`,`Cargo_id`,`Rol_id`,`JL_id`,`Usuarioe_id`),
  KEY `fk_tbl_empleado_tbl_factura_idx` (`Factura_id`),
  KEY `fk_tbl_empleado_tbl_roles_idx` (`Rol_id`),
  KEY `fk_tbl_empleado_tbl_jornadalaboral_idx` (`JL_id`),
  KEY `fk_tbl_empleado_tbl_cargo_idx` (`Cargo_id`),
  KEY `fk_tbl_empleado_tbl_usuario_idx` (`Usuarioe_id`),
  CONSTRAINT `fk_tbl_empleado_tbl_cargo` FOREIGN KEY (`Cargo_id`) REFERENCES `tbl_cargo` (`id_cargo`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tbl_empleado_tbl_factura` FOREIGN KEY (`Factura_id`) REFERENCES `tbl_factura` (`id_factura`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tbl_empleado_tbl_jornadalaboral` FOREIGN KEY (`JL_id`) REFERENCES `tbl_jornadalaboral` (`id_JL`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tbl_empleado_tbl_roles` FOREIGN KEY (`Rol_id`) REFERENCES `tbl_roles` (`id_Rol`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tbl_empleado_tbl_usuario` FOREIGN KEY (`Usuarioe_id`) REFERENCES `tbl_usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_empleado`
--

LOCK TABLES `tbl_empleado` WRITE;
/*!40000 ALTER TABLE `tbl_empleado` DISABLE KEYS */;
INSERT INTO `tbl_empleado` VALUES (1,'Edgardo','Medina','0801199914142','M','99886655','EdgardoMedina99@gmail.com','Cerro Grande','2010-11-22',3,1,3,1,2),(2,'Christian','Portillo','0801199913165','M','99886611','portillochris7799@gmail.com','Col. Los Girasoles, Tegucigalpa','2023-01-22',1,1,1,1,1),(15,'Ana','Gómez','0801199010109','F','99110011','Anitagomez90@gmail.com','Col. Los Girasoles, Tegucigalpa','2023-01-22',3,1,3,2,3456),(1014,'Paola','Velasquez','0801200104052','F','88312359','PaolaVelasquez01@gmail.com','El sitio, Tegucigalpa','2023-03-23',3,1,3,2,2721),(1074,'Nando','Molina','0820198015152','M','99779988','Nandomo11@gmail.com','La lima, San Pedro Sula','2023-03-05',3,1,3,1,1695),(2342,'Ivan','Lopez','0801200219191','M','99886611','IvanLopez002@hotmail.com','La soza, Tegucigalpa','2023-03-13',3,1,3,1,1211),(2901,'Carla','Pavón','0801199311183','F','99554411','Carlapav93@gmail.com','El sitio, Tegucigalpa','2023-03-26',3,1,3,2,847),(3497,'Fernanda','Padilla','08011999310004','F','99774433','FernandaPadilla0193@gmail.com','Barrio Colon, Tocoa','2023-03-05',3,1,3,1,3550),(3936,'Javier','Medina','0801199708892','M','95959224','windark0122@gmail.com','Col. San Miguel, Tegucigalpa','2023-04-14',3,1,3,2,4348),(4045,'Osman','Mejia','0801198000993','M','88009977','osmanmejia80@gmail.com','Col. 21 de Octubre, Tegucigalpa','2023-04-21',3,1,3,1,1807);
/*!40000 ALTER TABLE `tbl_empleado` ENABLE KEYS */;
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
