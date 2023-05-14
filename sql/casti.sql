-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: casti
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actividad`
--

DROP TABLE IF EXISTS `actividad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `actividad` (
  `id_actividad` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `fecha_hora_inicio` datetime NOT NULL,
  `fecha_hora_fin` datetime DEFAULT NULL,
  `id_importancia` int NOT NULL,
  `id_urgencia` int NOT NULL,
  PRIMARY KEY (`id_actividad`),
  KEY `fk_usuario_idx` (`usuario`),
  KEY `fk_importancia_idx` (`id_importancia`),
  KEY `fk_urgencia_idx` (`id_urgencia`),
  CONSTRAINT `fk_importancia` FOREIGN KEY (`id_importancia`) REFERENCES `importancia` (`id_importancia`),
  CONSTRAINT `fk_urgencia` FOREIGN KEY (`id_urgencia`) REFERENCES `urgencia` (`id_urgencia`) ON UPDATE CASCADE,
  CONSTRAINT `fk_usuario` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividad`
--

LOCK TABLES `actividad` WRITE;
/*!40000 ALTER TABLE `actividad` DISABLE KEYS */;
INSERT INTO `actividad` VALUES (10,'jjosegomez','PARCIAL','','2023-04-28 17:21:00','2023-04-29 18:21:00',1,1),(11,'jjosegomez','tenis','','2023-04-28 08:40:00','2023-04-28 10:40:00',1,1),(12,'jjosegomez','tenis','asereje','2023-04-28 16:45:00','2023-04-28 17:45:00',1,1),(13,'star','Matrimonio ','Diego y Santiago','2023-05-02 13:00:00','2023-05-03 01:00:00',1,1),(14,'jjosegomez','Cita medica','ojo rojo','2023-04-30 17:00:00','2023-04-30 19:00:00',1,1),(15,'lflee','Comida','Hamburguesota','2023-04-29 20:00:00','2023-04-29 20:30:00',1,1),(16,'jjosegomez','Almuerzo viernes','Salida con amigos','2023-05-12 07:45:00','2023-05-12 08:45:00',1,1),(17,'jjosegomez','Prueba','Esta es la prueba de mi actividad para la proxima semana','2023-05-10 07:00:00','2023-05-10 09:00:00',2,1),(18,'jjosegomez','Hacer mercado','mercado de la semana','2023-05-07 10:00:00','2023-05-07 11:30:00',1,1),(19,'flee','Desayunar','con huevo','2023-05-04 06:00:00','2023-05-04 06:30:00',1,1),(20,'juan_echeverry','Futbo','Futbol','2023-05-05 16:00:00','2023-05-05 18:00:00',1,1),(21,'jcaicedoro','Entrega 2','12121','2023-05-06 19:23:00','2023-05-06 19:29:00',1,1),(22,'jcaicedoro','holi','','2023-05-13 18:30:00','2023-05-13 19:29:00',1,1),(23,'jcaicedoro','Prueba no importante','hi','2023-05-07 19:32:00','2023-05-07 19:33:00',2,1),(24,'jjosegomez','perscadito2','rico','2023-05-26 16:08:00','2023-05-26 16:13:00',1,2),(25,'jjosegomez','Lolcito','Bienvenidos a la ........','2023-05-24 16:10:00','2023-05-24 16:11:00',2,2),(26,'jjosegomez','Fundamentos','ejecucion','2023-05-16 07:47:00','2023-05-16 08:00:00',1,1),(27,'jjosegomez','Fundamentos 2','prueba 2','2023-05-20 07:49:00','2023-05-20 08:00:00',2,2),(28,'hay un error aqui','a','a','2023-05-12 08:48:00','2023-05-13 08:48:00',1,1),(29,'hay un error aqui','aaaaa','aaaaaa','2023-05-18 08:29:00','2023-05-23 08:29:00',1,1),(30,'hay un error aqui','uno','a','2023-06-07 08:15:00','2023-06-08 08:15:00',1,2),(31,'hay un error aqui','uno','a','2023-06-14 08:15:00','2023-06-16 08:17:00',1,2),(32,'hay un error aqui','a','a','2023-05-12 08:44:00','2023-05-13 08:44:00',1,1),(33,'hay un error aqui','a','a','2023-05-12 08:44:00','2023-05-13 08:45:00',1,1),(34,'hay un error aqui','a','a','2023-05-12 08:45:00','2023-05-13 08:45:00',1,1),(35,'hay un error aqui','a','a','2023-05-12 08:45:00','2023-05-13 08:45:00',1,1);
/*!40000 ALTER TABLE `actividad` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dia_semana`
--

DROP TABLE IF EXISTS `dia_semana`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dia_semana` (
  `id_dia_semana` int NOT NULL AUTO_INCREMENT,
  `dia_semana` varchar(45) NOT NULL,
  PRIMARY KEY (`id_dia_semana`),
  UNIQUE KEY `dia_semana_UNIQUE` (`dia_semana`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dia_semana`
--

LOCK TABLES `dia_semana` WRITE;
/*!40000 ALTER TABLE `dia_semana` DISABLE KEYS */;
INSERT INTO `dia_semana` VALUES (7,'Domingo'),(4,'Jueves'),(1,'Lunes'),(2,'Martes'),(3,'Miercoles'),(6,'Sabado'),(5,'Viernes');
/*!40000 ALTER TABLE `dia_semana` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `evento_fijo`
--

DROP TABLE IF EXISTS `evento_fijo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `evento_fijo` (
  `id_evento_fijo` int NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL,
  `id_dia_semana` int NOT NULL,
  `hora_inicio` time NOT NULL,
  `hora_fin` time NOT NULL,
  PRIMARY KEY (`id_evento_fijo`),
  UNIQUE KEY `id_evento_fijo_UNIQUE` (`id_evento_fijo`),
  KEY `fk_usuario_idx` (`usuario`),
  KEY `fk_dia_semana_idx` (`id_dia_semana`),
  CONSTRAINT `fk_dia_semana` FOREIGN KEY (`id_dia_semana`) REFERENCES `dia_semana` (`id_dia_semana`),
  CONSTRAINT `fk_usuario1` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evento_fijo`
--

LOCK TABLES `evento_fijo` WRITE;
/*!40000 ALTER TABLE `evento_fijo` DISABLE KEYS */;
INSERT INTO `evento_fijo` VALUES (6,'jjosegomez','Daily','Bienvenidos a la ........',1,'19:00:00','19:00:00'),(7,'hay un error aqui','mario','aaaa',1,'01:08:00','01:03:00'),(8,'hay un error aqui',';delete * from table usuario','aaaa',1,'08:11:00','08:13:00'),(9,'hay un error aqui','sus','sus',1,'09:25:00','08:25:00'),(10,'hay un error aqui','mario','sus',1,'08:30:00','20:30:00'),(11,'hay un error aqui','assd','asdsda',1,'09:30:00','20:30:00'),(12,'hay un error aqui','mario','a',1,'09:48:00','22:49:00');
/*!40000 ALTER TABLE `evento_fijo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `importancia`
--

DROP TABLE IF EXISTS `importancia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `importancia` (
  `id_importancia` int NOT NULL AUTO_INCREMENT,
  `importancia` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_importancia`),
  UNIQUE KEY `importancia_UNIQUE` (`importancia`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `importancia`
--

LOCK TABLES `importancia` WRITE;
/*!40000 ALTER TABLE `importancia` DISABLE KEYS */;
INSERT INTO `importancia` VALUES (1,'Importante'),(2,'No Importante');
/*!40000 ALTER TABLE `importancia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `urgencia`
--

DROP TABLE IF EXISTS `urgencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `urgencia` (
  `id_urgencia` int NOT NULL AUTO_INCREMENT,
  `urgencia` varchar(45) NOT NULL,
  PRIMARY KEY (`id_urgencia`),
  UNIQUE KEY `urgencia_UNIQUE` (`urgencia`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `urgencia`
--

LOCK TABLES `urgencia` WRITE;
/*!40000 ALTER TABLE `urgencia` DISABLE KEYS */;
INSERT INTO `urgencia` VALUES (2,'No Urgente'),(1,'Urgente');
/*!40000 ALTER TABLE `urgencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `usuario` varchar(20) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `clave` varchar(45) NOT NULL,
  `hora_inicio` time NOT NULL DEFAULT '00:00:00',
  `hora_fin` time NOT NULL DEFAULT '23:59:59',
  PRIMARY KEY (`usuario`),
  UNIQUE KEY `usuario_UNIQUE` (`usuario`),
  UNIQUE KEY `correo_UNIQUE` (`correo`),
  CONSTRAINT `correo_valido` CHECK ((`correo` like _utf8mb4'%@%'))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('Diego','diego@gmail.com','qwerty','05:20:00','22:00:00'),('flee','fleegomez@gmail.com','Linux','04:00:00','16:00:00'),('hay un error aqui','error@error.com','error','04:55:00','02:55:00'),('jcaicedoro','jcaicedoro@gmail.com','123456','12:59:00','19:20:00'),('jjosegomez','jjgogomez@gmail.com','12345','08:00:00','20:00:00'),('juan_echeverry','juandiegoecheverryplazas@gmail.com','LeeVendioACastillo','05:20:00','22:00:00'),('lflee','luisferleerod@gmail.com','54321','05:00:00','20:00:00'),('mario#kart','mamahuevaso@mamahuevo','mamahuevo','00:54:00','09:54:00'),('rogarcia','Rodrigo@gmail.com','12345','08:00:00','09:30:00'),('star','aaa@gmail.com','123456','08:00:00','20:00:00');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-05-13 19:12:13
