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
-- Table structure for table `tbl_pago`
--

DROP TABLE IF EXISTS `tbl_pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `tbl_pago` (
  `id_pago` int NOT NULL AUTO_INCREMENT,
  `Pago` text,
  `Total` float NOT NULL,
  `Estado` varchar(45) NOT NULL,
  `Fecha` date NOT NULL,
  `comprobante` text NOT NULL,
  `metodo_id` int NOT NULL,
  `usuario_id` int NOT NULL,
  PRIMARY KEY (`id_pago`,`metodo_id`,`usuario_id`),
  KEY `fk_tbl_pago_tbl_formapago_idx` (`metodo_id`),
  KEY `fk_tbl_pago_tbl_usuario_idx` (`usuario_id`),
  CONSTRAINT `fk_tbl_pago_tbl_formapago` FOREIGN KEY (`metodo_id`) REFERENCES `tbl_formapago` (`id_fp`),
  CONSTRAINT `fk_tbl_pago_tbl_usuario` FOREIGN KEY (`usuario_id`) REFERENCES `tbl_usuario` (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_pago`
--

LOCK TABLES `tbl_pago` WRITE;
/*!40000 ALTER TABLE `tbl_pago` DISABLE KEYS */;
INSERT INTO `tbl_pago` VALUES (1,'Pago Carrito',260,'Online','2023-03-24','12344152',1,261),(2,'Pago Carrito',10,'Online','2023-03-23','9896797',2,3114),(3,'Pago Carrito',23,'Online','2023-03-20','89769858',1,261),(4,'Pago Carrito',105,'Online','2023-03-19','45677824',1,261),(5,'Pago Carrito',52,'Online','2023-03-18','12345661',2,3114),(6,'Pago Carrito',52,'Tienda','2023-03-26','12356123',1,261),(7,'Pago Carrito',15,'Tienda','2023-03-26','1231231',2,3114),(8,'Pago Carrito',124,'Tienda','2023-03-26','41251235',2,3366),(9,'Pago Carrito',55,'Tienda','2023-03-26','12312351',1,4583),(10,'Pago Carrito',27,'Tienda','2023-03-26','1231235123',1,3366),(11,'123145151235123',57,'Online','2023-03-24','Ga4TmSr6IZ',1,261),(12,'123145151235123',10,'Online','2023-03-27','awnuFZ0MhK',1,261),(13,'987654321',55,'Online','2023-03-27','gcT3YBun4V',1,4583),(14,'987654321',10,'Online','2023-03-28','8otu92L4O7',1,261),(15,'',105,'Tienda','2023-03-30','eSAOmKJ4dM',2,261),(16,'',105,'Tienda','2023-03-30','5nez1SDciv',2,261),(17,'987654321',23,'Tienda','2023-03-31','Lxt9iPNnTZ',2,261),(18,'',52,'Tienda','2023-03-31','46vTjD8FY0',2,261),(19,'asdasd',207,'Tienda','2023-03-31','IxKq4J07is',1,261),(20,'asdasd',52,'Tienda','2023-03-31','e9FoP3CYn5',1,261),(21,'asdasdasd',52,'Tienda','2023-03-31','jLcOIgvASd',1,261),(22,'asdasdasd',52,'Tienda','2023-03-31','6IBfwQ9Yas',1,261),(23,'asd132',438,'Tienda','2023-03-31','UY3oRh9bOB',1,261),(30,'asdasd',438,'Tienda','2023-04-01','jwJoRsFzdG',1,261),(31,'asdasd',827.68,'Tienda','2023-04-01','k7eaAjKwi3',1,261),(32,'',637.28,'Tienda','2023-04-02','D9eHxuZi1O',2,261),(33,'12341231241233',61.6,'Online','2023-04-14','FjA1gKIPL9',1,261),(34,'422222224123',375.2,'Online','2023-04-15','h8DxaMNqyU',1,261),(35,'123145151235123',58.24,'Online','2023-04-19','FgyMLvW2Gw',1,261),(36,'',25.76,'Tienda','2023-04-20','5JQyzT1srY',2,261),(37,'4222225000314',355.04,'Online','2023-04-20','zQcXmZrNE1',1,4583),(38,'55131251812',1066.24,'Online','2023-04-21','DtquZL78hB',1,261),(39,'',30.24,'Tienda','2023-08-11','xk1ctnf4Cl',2,261);
/*!40000 ALTER TABLE `tbl_pago` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-31 15:42:24
