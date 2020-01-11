-- MySQL dump 10.16  Distrib 10.1.28-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: cathering
-- ------------------------------------------------------
-- Server version	10.1.28-MariaDB

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
-- Table structure for table `form_acara`
--

DROP TABLE IF EXISTS `form_acara`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form_acara` (
  `id_acara` int(10) NOT NULL AUTO_INCREMENT,
  `nama_acara` varchar(20) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `alamat_acara` varchar(30) NOT NULL,
  PRIMARY KEY (`id_acara`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_acara`
--

LOCK TABLES `form_acara` WRITE;
/*!40000 ALTER TABLE `form_acara` DISABLE KEYS */;
/*!40000 ALTER TABLE `form_acara` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jns_makanan`
--

DROP TABLE IF EXISTS `jns_makanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jns_makanan` (
  `id_jnsmkn` int(7) NOT NULL AUTO_INCREMENT,
  `namajns_mkn` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jnsmkn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jns_makanan`
--

LOCK TABLES `jns_makanan` WRITE;
/*!40000 ALTER TABLE `jns_makanan` DISABLE KEYS */;
/*!40000 ALTER TABLE `jns_makanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jns_minuman`
--

DROP TABLE IF EXISTS `jns_minuman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jns_minuman` (
  `id_jnsmnmn` int(7) NOT NULL AUTO_INCREMENT,
  `namajns_mnmn` varchar(30) NOT NULL,
  PRIMARY KEY (`id_jnsmnmn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jns_minuman`
--

LOCK TABLES `jns_minuman` WRITE;
/*!40000 ALTER TABLE `jns_minuman` DISABLE KEYS */;
/*!40000 ALTER TABLE `jns_minuman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mn_makanan`
--

DROP TABLE IF EXISTS `mn_makanan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mn_makanan` (
  `id_makanan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_makanan` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `jns_makanan` int(7) NOT NULL,
  PRIMARY KEY (`id_makanan`),
  KEY `jns_makanan` (`jns_makanan`),
  CONSTRAINT `mn_makanan_ibfk_1` FOREIGN KEY (`jns_makanan`) REFERENCES `jns_makanan` (`id_jnsmkn`),
  CONSTRAINT `mn_makanan_ibfk_2` FOREIGN KEY (`jns_makanan`) REFERENCES `jns_makanan` (`id_jnsmkn`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mn_makanan`
--

LOCK TABLES `mn_makanan` WRITE;
/*!40000 ALTER TABLE `mn_makanan` DISABLE KEYS */;
/*!40000 ALTER TABLE `mn_makanan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mn_minuman`
--

DROP TABLE IF EXISTS `mn_minuman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mn_minuman` (
  `id_minuman` int(10) NOT NULL AUTO_INCREMENT,
  `nama_minuman` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `jns_minuman` int(7) NOT NULL,
  PRIMARY KEY (`id_minuman`),
  KEY `jns_minuman` (`jns_minuman`),
  CONSTRAINT `mn_minuman_ibfk_1` FOREIGN KEY (`jns_minuman`) REFERENCES `jns_minuman` (`id_jnsmnmn`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mn_minuman`
--

LOCK TABLES `mn_minuman` WRITE;
/*!40000 ALTER TABLE `mn_minuman` DISABLE KEYS */;
/*!40000 ALTER TABLE `mn_minuman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pembayaran`
--

DROP TABLE IF EXISTS `pembayaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pembayaran` (
  `id_pemb` int(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) NOT NULL,
  `norek_tujuan` int(20) NOT NULL,
  `norek_awal` int(20) NOT NULL,
  PRIMARY KEY (`id_pemb`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pembayaran`
--

LOCK TABLES `pembayaran` WRITE;
/*!40000 ALTER TABLE `pembayaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `pembayaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id_user` int(5) NOT NULL AUTO_INCREMENT,
  `nama_user` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `jenis_kelamin` char(1) NOT NULL,
  `username` char(20) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-04  1:14:07
