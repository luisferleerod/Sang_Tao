-- MySQL dump 10.13  Distrib 8.0.32, for Linux (x86_64)
--
-- Host: localhost    Database: casti
-- ------------------------------------------------------
-- Server version	8.0.32-0ubuntu0.22.04.2

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actividad`
--

LOCK TABLES `actividad` WRITE;
/*!40000 ALTER TABLE `actividad` DISABLE KEYS */;
INSERT INTO `actividad` VALUES (1,'jjosegomez','PARCIAL','Parcial de calculo','2023-03-14 20:26:00','2023-03-15 20:27:00',1,1),(2,'ksty','QUIZ','quiz de proba','2023-03-14 11:00:00','2023-03-14 01:00:00',1,1);
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
INSERT INTO `dia_semana` VALUES (7,'domingo'),(4,'jueves'),(1,'lunes'),(2,'martes'),(3,'miercoles'),(6,'sabado'),(5,'viernes');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `evento_fijo`
--

LOCK TABLES `evento_fijo` WRITE;
/*!40000 ALTER TABLE `evento_fijo` DISABLE KEYS */;
INSERT INTO `evento_fijo` VALUES (1,'jjosegomez','tenis','',1,'20:45:00','21:45:00'),(2,'ksty','tenis','tenis compensar',6,'10:15:00','11:15:00');
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
INSERT INTO `importancia` VALUES (1,'importante'),(2,'no importante');
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
INSERT INTO `urgencia` VALUES (2,'no urgente'),(1,'urgente');
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
  PRIMARY KEY (`usuario`),
  UNIQUE KEY `usuario_UNIQUE` (`usuario`),
  UNIQUE KEY `correo_UNIQUE` (`correo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES ('jjosegomez','jjosegomez@gmail.com','luchopelucho'),('ksty','juancasl2015@gmail.com','1234');
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

-- Dump completed on 2023-03-13 22:42:10
