-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: valuo
-- ------------------------------------------------------
-- Server version	5.5.49-0+deb8u1

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
-- Table structure for table `detalle_parametro`
--

DROP TABLE IF EXISTS `detalle_parametro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `detalle_parametro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_parametro` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  `detalle` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalle_parametro`
--

LOCK TABLES `detalle_parametro` WRITE;
/*!40000 ALTER TABLE `detalle_parametro` DISABLE KEYS */;
INSERT INTO `detalle_parametro` VALUES (1,'1','ACOMI'),(2,'2','Industrial'),(3,'3','100%'),(4,'4','Venta'),(6,'6','San Miguel'),(7,'7','Acera granulada con piscas de oro blanco y esmeraldas incrustadas'),(8,'8','Barra solida de aluminio que necesito para una tarea y que no encuentro'),(11,'4','Hipoteca'),(12,'6','Corinto'),(13,'2','individual'),(15,'10','El recubrimiento que presenta la via de acceso es Rodaje recubierto por Carpeta Asfaltica en caliente.'),(16,'10','El recubrimiento que presenta la via de acceso es Rodaje de Concreto en buen estado de mantenimiento.'),(17,'11','El inmueble valuado no presenta delimitaciÃ³n de rodaje por medio de infraestructura.'),(18,'11','El inmueble presenta rodaje delimitado por CordÃ³n Cuneta de Mamposteria de Piedra  o similar.'),(19,'11','Canaleta de Mamposteria de Piedra en mal  estado. '),(20,'12','Acera de concreto en mal estado.'),(21,'12',' el derecho de via existe el espacio para la acera Peatonal, pero no tiene recubrimiento.'),(22,'12','En el derecho de via Frente al inmueble valuado Existe Acera Peatonal.'),(23,'13','El terreno Posee Servicio de Agua Potable Domiciliar.'),(24,'13','Presenta Sistema de Agua Potable Individual.'),(25,'13','Presenta factibilidad de Servicio Agua Potable. '),(26,'14','Posee ConexiÃ³n a Servicio de Energia Electrica 110V.'),(27,'14','Posee ConexiÃ³n a Servicio de Energia Electrica 220V'),(28,'9','Posee Servicio de Alcantarillado Sanitario.'),(29,'9','Presenta Factibilidad de Drenaje.'),(30,'15','Existe Sistema de Telefonia Fija.'),(31,'15','No existe sistema de Telefonia Fija.'),(32,'16','La TopografÃ­a del Sector es Plana Pend.>1%.'),(33,'16','La TopografÃ­a del Sector es Semi Plana Pend. 1% al 2%'),(34,'16','La TopografÃ­a del Sector tiene Pendientes mayores al 2%'),(35,'17','La Topografia del Terreno es Plana Pendientes >1%.'),(36,'17','La Topografia del Terreno es Semi Plana Pend. 1% al 2%.'),(37,'18','El Tipo de Via de Acceso es Via Principal/Comercial.'),(38,'18','El Tipo de Via de Acceso es Via Potencial/Comercial.'),(39,'18','El Tipo de Via de Acceso es Via de TransiciÃ³n.'),(40,'19','UbicaciÃ³n a escala regional se califica: Inmueble Urbano.'),(41,'19','UbicaciÃ³n a escala regional se califica como:  Semi-Urbano.'),(42,'20',' Los  riesgos  Naturales  al  entorno del  inmueble  valuado no se observaron durante la visita al inmueble.'),(43,'20','La VocaciÃ³n del Terreno es Habitacional, Vivienda.'),(44,'20','La VocaciÃ³n del Terreno es Industrial.'),(45,'21','La Morfologia del Inmueble es Regular Cuadrado.'),(46,'21','La Morfologia del Inmueble es Regular Rectangular.'),(47,'21','La Morfologia del Inmueble es Triangular.'),(48,'22','El Uso Actual del Inmueble es Comercio.'),(49,'22','El Uso Actual del Inmueble es Habitacional.'),(50,'23','La  seguridad del entorno es Privada/Optima.'),(51,'23','La  seguridad del entorno es Buena.'),(52,'24','Suelo calizo con textura Ã¡rido y seco; Buena resistencia para construcciÃ³n.'),(53,'24','Suelo humÃ­fero (tierra negra); es necesario restituir en fundaciones y piso para construir.'),(54,'24','Suelo arcilloso de Grano fino; Necesaria la restiruciÃ³n o mejora para construcciÃ³n.'),(55,'5','San Miguel'),(56,'5','San Salvador'),(57,'5','San Vicente'),(58,'25','El inmueble presenta una construcciÃ³n en proceso.'),(59,'26','Se observa que aun se construyen acabados en el inmueble'),(60,'27','Se observa mantenimiento Optimo aplicado a la infraestructura pÃºblica'),(61,'28','Tipo de MamposterÃ­a A; Buena calidad de ejecuciÃ³n, mortero y diseÃ±o; reforzada y confinada empleando varillas de acero; diseÃ±ada para resistir cargas laterales de sismo.'),(62,'29','Delimitacion de lindero con mojÃ³n esquinero.'),(63,'30','Cielo Falso de Plywood.'),(64,'31','Puertas tipo Madera natural. '),(65,'32','Ventana tipo Francesa Marco de Aluminio.'),(66,'33','Pisos de Ceramica/Res. Trafico/Ligero A'),(67,'34','Defensas sobre tapiales de Razor.'),(68,'35','Ãreas recubiertas de ImpermeabilizaciÃ³n/compactaciÃ³n.'),(69,'36','Pantri en cocina de Acero Inoxidable.'),(70,'37','Sistema HidrÃ¡ulico de AP Cisterna Sub-terranea.'),(71,'38','Porton Electrico'),(72,'39','Pozo perforado tipo Artezanal.'),(73,'40','Muros de contenciÃ³n MamposterÃ­a de Piedra.'),(74,'41',' El Entorno Ecologico observado es Uso Habitacional, vivienda.'),(78,'45','Oficinas de profesionales'),(79,'46','No se observan durante la visita riesgo de inundaciÃ³n por caudal normal de cuenca cercana.'),(80,'42','Los riesgos Naturales al entorno del inmueble valuado no se observaron durante la visita al inmueble.'),(81,'43','La ContaminaciÃ³n ambiental que se observa se acerca a la contaminaciÃ³n del promedio nacional.'),(82,'44','Tipo de UbicaciÃ³n: Toda la Manzana.');
/*!40000 ALTER TABLE `detalle_parametro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parametro`
--

DROP TABLE IF EXISTS `parametro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `parametro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(300) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parametro`
--

LOCK TABLES `parametro` WRITE;
/*!40000 ALTER TABLE `parametro` DISABLE KEYS */;
INSERT INTO `parametro` VALUES (1,'Financieras'),(2,'Tipos de Propiedades'),(3,'Derechos'),(4,'Finalidades del Valuo'),(5,'Departamentos'),(6,'Municipios'),(7,'Tipos de Recubrimientos'),(8,'Delimitaciones de los Recubrimientos'),(9,'Aguas Negras'),(10,'Recubrimiento que presenta la via de acceso'),(11,'Delimitacion de la via de acceso'),(12,'Acera peatonal'),(13,'Agua potable'),(14,'Energia electrica'),(15,'Telefonia'),(16,'Topografia del sector'),(17,'Topografia del Terreno'),(18,'Tipo de via de acceso'),(19,'Ubicacion a escala regional'),(20,'Vocacion del Terreno'),(21,'Morfologia del Inmueble'),(22,'Uso actual del inmueble'),(23,'Seguridad del entorno'),(24,'Tipo de Suelo'),(25,'Estado Actual de la Construccion'),(26,'Estado de Acabados'),(27,'Mantenimiento del Entorno'),(28,'Clasificacion de la Infraestructura'),(29,'Delimitacion de lindero'),(30,'Cielo Falso'),(31,'Puertas'),(32,'Ventana'),(33,'Pisos'),(34,'Defensas'),(35,'Areas recubiertas'),(36,'Pantri'),(37,'Sistema Hidraulico de AP'),(38,'Sistema Electrico'),(39,'Pozo'),(40,'Muros de contensiÃ³n'),(41,'Entorno Ecologico'),(42,'Riesgos  Naturales  al  entorno del  inmueble  valuado'),(43,' ContaminaciÃ³n ambiental observada'),(44,'Tipo de UbicaciÃ³n'),(45,'Equipamiento'),(46,'Riesgos fundamentados');
/*!40000 ALTER TABLE `parametro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propietario`
--

DROP TABLE IF EXISTS `propietario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propietario` (
  `id_propietario` int(10) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `n_doc` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `derecho` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo_prop` text COLLATE utf8_spanish_ci NOT NULL,
  `finalidad_valuo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propietario`
--

LOCK TABLES `propietario` WRITE;
/*!40000 ALTER TABLE `propietario` DISABLE KEYS */;
/*!40000 ALTER TABLE `propietario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `terreno`
--

DROP TABLE IF EXISTS `terreno`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `terreno` (
  `id_terreno` int(10) NOT NULL,
  `direccion` varchar(250) CHARACTER SET utf16 COLLATE utf16_spanish_ci NOT NULL,
  `con_via_acceso` text COLLATE utf8_spanish_ci NOT NULL,
  `serv_basicos` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `ubic_contex` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `voca_terren` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_suelo` text COLLATE utf8_spanish_ci NOT NULL,
  `desc_veg_y_servi` text COLLATE utf8_spanish_ci NOT NULL,
  `at_segun_doc` varchar(2000) COLLATE utf8_spanish_ci NOT NULL,
  `at_segun_inpec` varchar(2000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `terreno`
--

LOCK TABLES `terreno` WRITE;
/*!40000 ALTER TABLE `terreno` DISABLE KEYS */;
/*!40000 ALTER TABLE `terreno` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Nelson Orlando Benavides','benavides','pass'),(2,'Norma Alicia Martinez','martinez','pass'),(3,'Jessica Elizabeth Gamez','gamez','pass'),(4,'Kevin Eduardo Claros','claros','pass');
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

-- Dump completed on 2016-06-17 21:15:40
