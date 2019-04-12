-- MySQL dump 10.13  Distrib 5.7.25, for Linux (x86_64)
--
-- Host: localhost    Database: mprod_cazapesca
-- ------------------------------------------------------
-- Server version	5.7.25-0ubuntu0.18.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `comprobante`
--

DROP TABLE IF EXISTS `comprobante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comprobante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `monto` double NOT NULL,
  `recargo_segundo_vencimiento` double DEFAULT NULL,
  `cliente_sap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `letra_servicio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rendicion_numero` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha_pago` datetime DEFAULT NULL,
  `primer_vencimiento` datetime DEFAULT NULL,
  `segundo_vencimiento` datetime DEFAULT NULL,
  `numero_codigo_barra` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `recargo_primer_vencimiento` double DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=78 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `licencia`
--

DROP TABLE IF EXISTS `licencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `licencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_licencia_id` int(11) DEFAULT NULL,
  `persona_id` int(11) DEFAULT NULL,
  `fecha_emitida` datetime NOT NULL,
  `fecha_desde` datetime NOT NULL,
  `fecha_vencimiento` datetime NOT NULL,
  `comprobante_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_3C18920B25662B3A` (`comprobante_id`),
  KEY `IDX_3C18920BF2B74DB` (`tipo_licencia_id`),
  KEY `IDX_3C18920BF5F88DB9` (`persona_id`),
  CONSTRAINT `FK_3C18920B25662B3A` FOREIGN KEY (`comprobante_id`) REFERENCES `comprobante` (`id`),
  CONSTRAINT `FK_3C18920BF2B74DB` FOREIGN KEY (`tipo_licencia_id`) REFERENCES `tipo_licencia` (`id`),
  CONSTRAINT `FK_3C18920BF5F88DB9` FOREIGN KEY (`persona_id`) REFERENCES `persona` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=87 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `localidad`
--

DROP TABLE IF EXISTS `localidad`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `localidad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `l_distrito` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `l_nom_dis` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `l_departamento` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `l_nom_dpto` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `nodo` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2542 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `persona`
--

DROP TABLE IF EXISTS `persona`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `localidad_id` int(11) DEFAULT NULL,
  `tipo_documento_id` int(11) DEFAULT NULL,
  `provincia_id` int(11) DEFAULT NULL,
  `nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `localidad_otra_provincia` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `numero_documento` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `sexo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `jubilado` tinyint(1) NOT NULL,
  `telefono` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL COMMENT 'Tabla persona',
  `domicilio_calle` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `domicilio_numero` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_51E5B69B67707C89` (`localidad_id`),
  KEY `IDX_51E5B69BF6939175` (`tipo_documento_id`),
  KEY `IDX_51E5B69B4E7121AF` (`provincia_id`),
  CONSTRAINT `FK_51E5B69B4E7121AF` FOREIGN KEY (`provincia_id`) REFERENCES `provincia` (`id`),
  CONSTRAINT `FK_51E5B69B67707C89` FOREIGN KEY (`localidad_id`) REFERENCES `localidad` (`id`),
  CONSTRAINT `FK_51E5B69BF6939175` FOREIGN KEY (`tipo_documento_id`) REFERENCES `tipo_documento` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `provincia`
--

DROP TABLE IF EXISTS `provincia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `provincia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=139 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tipo_documento`
--

DROP TABLE IF EXISTS `tipo_documento`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_documento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tipo_licencia`
--

DROP TABLE IF EXISTS `tipo_licencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_licencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `arancel` double DEFAULT NULL,
  `dias_vigencia` int(11) DEFAULT NULL,
  `fecha_tope` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `cliente_sap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `letra_servicio` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `porcentaje_recargo_primer_vencimiento` double DEFAULT NULL,
  `dias_primer_vencimiento` int(11) DEFAULT NULL,
  `dias_segundo_vencimiento` int(11) DEFAULT NULL,
  `porcentaje_recargo_segundo_vencimiento` double DEFAULT NULL,
  `genero_jubilado` varchar(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` enum('ROLE_ADMIN','ROLE_TECNICO','ROLE_SUPER_ADMIN') COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `discr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `especialidad` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cargo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQ_2265B05D7F8F253B` (`dni`),
  UNIQUE KEY `UNIQ_2265B05DE7927C74` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-04-12 13:50:51
