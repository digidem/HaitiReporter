-- MySQL dump 10.13  Distrib 5.5.8, for osx10.6 (i386)
--
-- Host: localhost    Database: HaitiReporter
-- ------------------------------------------------------
-- Server version	5.5.8

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
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `people` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(28) CHARACTER SET latin1 DEFAULT NULL,
  `month` char(2) CHARACTER SET latin1 DEFAULT NULL,
  `day` tinyint(3) unsigned DEFAULT NULL,
  `year` char(4) CHARACTER SET latin1 DEFAULT NULL,
  `interview` varchar(255) DEFAULT NULL,
  `plan` varchar(255) DEFAULT NULL,
  `organization1` varchar(255) DEFAULT NULL,
  `organizationother` varchar(255) DEFAULT NULL,
  `familyname` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lieudenaissance` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `numerodetelephone` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `organization2` varchar(255) DEFAULT NULL,
  `statut` varchar(255) DEFAULT NULL,
  `lieuduviol` varchar(255) DEFAULT NULL,
  `lieudeviolautres` varchar(255) DEFAULT NULL,
  `indiquerzone` varchar(255) DEFAULT NULL,
  `lieu` varchar(255) DEFAULT NULL,
  `lapersonne` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `sexe` varchar(255) DEFAULT NULL,
  `nombrequiaparticipe` varchar(255) DEFAULT NULL,
  `adressadres` varchar(255) DEFAULT NULL,
  `lienrelasyon` varchar(255) DEFAULT NULL,
  `lieninfogang` tinyint(1) DEFAULT NULL,
  `lieninfopolice` tinyint(1) DEFAULT NULL,
  `lieninfopreciser` tinyint(1) DEFAULT NULL,
  `apreciserpresize` varchar(255) DEFAULT NULL,
  `typedagressionmeutre` tinyint(1) DEFAULT NULL,
  `typedagressiondisparition` tinyint(1) DEFAULT NULL,
  `typedagressiondestruction` tinyint(1) DEFAULT NULL,
  `typedagressionarrestation` tinyint(1) DEFAULT NULL,
  `typedagressionkidnapping` tinyint(1) DEFAULT NULL,
  `typedagressionmenace` tinyint(1) DEFAULT NULL,
  `typedagressionviol` tinyint(1) DEFAULT NULL,
  `typedagressionassaut` tinyint(1) DEFAULT NULL,
  `comment` text CHARACTER SET latin1,
  `ouestcequil` text CHARACTER SET latin1,
  `queluniforme` text CHARACTER SET latin1,
  `portaitdesmasques` varchar(255) DEFAULT NULL,
  `desarmes` varchar(255) DEFAULT NULL,
  `plan2` varchar(255) DEFAULT NULL,
  `sexe2` varchar(255) DEFAULT NULL,
  `sexe3` varchar(255) DEFAULT NULL,
  `siouinom` text CHARACTER SET latin1,
  `laraison` text CHARACTER SET latin1,
  `temoins` varchar(255) DEFAULT NULL,
  `temoins2` varchar(255) DEFAULT NULL,
  `contactes` varchar(255) DEFAULT NULL,
  `courant` varchar(255) DEFAULT NULL,
  `autorites` varchar(255) DEFAULT NULL,
  `typedautoritepolice` tinyint(1) DEFAULT NULL,
  `typedautoriteCASEC` tinyint(1) DEFAULT NULL,
  `typedautoriteJuge` tinyint(1) DEFAULT NULL,
  `typedautoriteMagistrat` tinyint(1) DEFAULT NULL,
  `typedautoriteAutre` tinyint(1) DEFAULT NULL,
  `typedautoritedautre2` varchar(255) DEFAULT NULL,
  `medicale` varchar(255) DEFAULT NULL,
  `besoins` text CHARACTER SET latin1,
  `dommage` text CHARACTER SET latin1,
  `maison` varchar(255) DEFAULT NULL,
  `organization3` varchar(255) DEFAULT NULL,
  `dommage2` text CHARACTER SET latin1,
  `dommage3` text CHARACTER SET latin1,
  `province` varchar(255) DEFAULT NULL,
  `lieuautres` varchar(255) DEFAULT NULL,
  `lieninfoinconnu` tinyint(1) DEFAULT NULL,
  `oukikote` varchar(255) DEFAULT NULL,
  `birthmonth` char(2) CHARACTER SET latin1 DEFAULT NULL,
  `birthday` tinyint(3) unsigned DEFAULT NULL,
  `birthyear` char(4) CHARACTER SET latin1 DEFAULT NULL,
  `enfant` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `violyear` char(4) CHARACTER SET latin1 DEFAULT NULL,
  `violday` tinyint(3) DEFAULT NULL,
  `KOFAVIVcentre` varchar(255) DEFAULT NULL,
  `KOFAVIVsant` varchar(255) DEFAULT NULL,
  `KOFAVIVagent` varchar(255) DEFAULT NULL,
  `KOFAVIVminustah` varchar(255) DEFAULT NULL,
  `KOFAVIVhopital` varchar(255) DEFAULT NULL,
  `KOFAVIVcommissariat` varchar(255) DEFAULT NULL,
  `KOFAVIVautre` varchar(255) DEFAULT NULL,
  `KOFAVIVautre2` varchar(255) DEFAULT NULL,
  `matrimoniale` varchar(255) DEFAULT NULL,
  `heureduviol` varchar(255) DEFAULT NULL,
  `violmonth` char(2) CHARACTER SET latin1 DEFAULT NULL,
  `typedautoritedautre` varchar(255) DEFAULT NULL,
  `heureduviolampm` char(2) DEFAULT NULL,
  `heureduviolminute` char(2) DEFAULT NULL,
  `heureduviolhour` char(2) DEFAULT NULL,
  `creator` varchar(32) DEFAULT NULL,
  `dansuncamp` varchar(28) DEFAULT NULL,
  `kikotemoun` varchar(255) DEFAULT NULL,
  `preciserlieu1` varchar(255) DEFAULT NULL,
  `kikotekadejak` varchar(255) DEFAULT NULL,
  `preciserlieu2` varchar(255) DEFAULT NULL,
  `type2` varchar(30) DEFAULT NULL,
  `filename` varchar(30) DEFAULT NULL,
  `filename2` varchar(30) DEFAULT NULL,
  `commune` varchar(255) DEFAULT NULL,
  `quartier` varchar(255) DEFAULT NULL,
  `camp` varchar(255) DEFAULT NULL,
  `partiii1` varchar(255) DEFAULT NULL,
  `tip1` varchar(10) DEFAULT NULL,
  `tip2` varchar(10) DEFAULT NULL,
  `tip3` varchar(10) DEFAULT NULL,
  `tip4` varchar(10) DEFAULT NULL,
  `tip5` varchar(10) DEFAULT NULL,
  `newkikote1` varchar(255) DEFAULT NULL,
  `newkikote2` varchar(255) DEFAULT NULL,
  `newkikote3` varchar(255) DEFAULT NULL,
  `newkikote4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=374 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `upload`
--

DROP TABLE IF EXISTS `upload`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `content` mediumblob NOT NULL,
  `name2` varchar(30) DEFAULT NULL,
  `type2` varchar(30) DEFAULT NULL,
  `size2` int(11) DEFAULT NULL,
  `content2` mediumblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `username` varchar(32) NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `viewnames` binary(1) DEFAULT NULL,
  `deletepeople` binary(1) DEFAULT NULL,
  `deleteusers` binary(1) DEFAULT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-07-12 10:46:52
-- MySQL dump 10.13  Distrib 5.5.8, for osx10.6 (i386)
--
-- Host: localhost    Database: HaitiReporter
-- ------------------------------------------------------
-- Server version	5.5.8

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
-- Table structure for table `people`
--

DROP TABLE IF EXISTS `people`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `people` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(28) CHARACTER SET latin1 DEFAULT NULL,
  `month` char(2) CHARACTER SET latin1 DEFAULT NULL,
  `day` tinyint(3) unsigned DEFAULT NULL,
  `year` char(4) CHARACTER SET latin1 DEFAULT NULL,
  `interview` varchar(255) DEFAULT NULL,
  `plan` varchar(255) DEFAULT NULL,
  `organization1` varchar(255) DEFAULT NULL,
  `organizationother` varchar(255) DEFAULT NULL,
  `familyname` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `lieudenaissance` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `numerodetelephone` varchar(255) DEFAULT NULL,
  `profession` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `organization2` varchar(255) DEFAULT NULL,
  `statut` varchar(255) DEFAULT NULL,
  `lieuduviol` varchar(255) DEFAULT NULL,
  `lieudeviolautres` varchar(255) DEFAULT NULL,
  `indiquerzone` varchar(255) DEFAULT NULL,
  `lieu` varchar(255) DEFAULT NULL,
  `lapersonne` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `sexe` varchar(255) DEFAULT NULL,
  `nombrequiaparticipe` varchar(255) DEFAULT NULL,
  `adressadres` varchar(255) DEFAULT NULL,
  `lienrelasyon` varchar(255) DEFAULT NULL,
  `lieninfogang` tinyint(1) DEFAULT NULL,
  `lieninfopolice` tinyint(1) DEFAULT NULL,
  `lieninfopreciser` tinyint(1) DEFAULT NULL,
  `apreciserpresize` varchar(255) DEFAULT NULL,
  `typedagressionmeutre` tinyint(1) DEFAULT NULL,
  `typedagressiondisparition` tinyint(1) DEFAULT NULL,
  `typedagressiondestruction` tinyint(1) DEFAULT NULL,
  `typedagressionarrestation` tinyint(1) DEFAULT NULL,
  `typedagressionkidnapping` tinyint(1) DEFAULT NULL,
  `typedagressionmenace` tinyint(1) DEFAULT NULL,
  `typedagressionviol` tinyint(1) DEFAULT NULL,
  `typedagressionassaut` tinyint(1) DEFAULT NULL,
  `comment` text CHARACTER SET latin1,
  `ouestcequil` text CHARACTER SET latin1,
  `queluniforme` text CHARACTER SET latin1,
  `portaitdesmasques` varchar(255) DEFAULT NULL,
  `desarmes` varchar(255) DEFAULT NULL,
  `plan2` varchar(255) DEFAULT NULL,
  `sexe2` varchar(255) DEFAULT NULL,
  `sexe3` varchar(255) DEFAULT NULL,
  `siouinom` text CHARACTER SET latin1,
  `laraison` text CHARACTER SET latin1,
  `temoins` varchar(255) DEFAULT NULL,
  `temoins2` varchar(255) DEFAULT NULL,
  `contactes` varchar(255) DEFAULT NULL,
  `courant` varchar(255) DEFAULT NULL,
  `autorites` varchar(255) DEFAULT NULL,
  `typedautoritepolice` tinyint(1) DEFAULT NULL,
  `typedautoriteCASEC` tinyint(1) DEFAULT NULL,
  `typedautoriteJuge` tinyint(1) DEFAULT NULL,
  `typedautoriteMagistrat` tinyint(1) DEFAULT NULL,
  `typedautoriteAutre` tinyint(1) DEFAULT NULL,
  `typedautoritedautre2` varchar(255) DEFAULT NULL,
  `medicale` varchar(255) DEFAULT NULL,
  `besoins` text CHARACTER SET latin1,
  `dommage` text CHARACTER SET latin1,
  `maison` varchar(255) DEFAULT NULL,
  `organization3` varchar(255) DEFAULT NULL,
  `dommage2` text CHARACTER SET latin1,
  `dommage3` text CHARACTER SET latin1,
  `province` varchar(255) DEFAULT NULL,
  `lieuautres` varchar(255) DEFAULT NULL,
  `lieninfoinconnu` tinyint(1) DEFAULT NULL,
  `oukikote` varchar(255) DEFAULT NULL,
  `birthmonth` char(2) CHARACTER SET latin1 DEFAULT NULL,
  `birthday` tinyint(3) unsigned DEFAULT NULL,
  `birthyear` char(4) CHARACTER SET latin1 DEFAULT NULL,
  `enfant` varchar(255) DEFAULT NULL,
  `organization` varchar(255) DEFAULT NULL,
  `violyear` char(4) CHARACTER SET latin1 DEFAULT NULL,
  `violday` tinyint(3) DEFAULT NULL,
  `KOFAVIVcentre` varchar(255) DEFAULT NULL,
  `KOFAVIVsant` varchar(255) DEFAULT NULL,
  `KOFAVIVagent` varchar(255) DEFAULT NULL,
  `KOFAVIVminustah` varchar(255) DEFAULT NULL,
  `KOFAVIVhopital` varchar(255) DEFAULT NULL,
  `KOFAVIVcommissariat` varchar(255) DEFAULT NULL,
  `KOFAVIVautre` varchar(255) DEFAULT NULL,
  `KOFAVIVautre2` varchar(255) DEFAULT NULL,
  `matrimoniale` varchar(255) DEFAULT NULL,
  `heureduviol` varchar(255) DEFAULT NULL,
  `violmonth` char(2) CHARACTER SET latin1 DEFAULT NULL,
  `typedautoritedautre` varchar(255) DEFAULT NULL,
  `heureduviolampm` char(2) DEFAULT NULL,
  `heureduviolminute` char(2) DEFAULT NULL,
  `heureduviolhour` char(2) DEFAULT NULL,
  `creator` varchar(32) DEFAULT NULL,
  `dansuncamp` varchar(28) DEFAULT NULL,
  `kikotemoun` varchar(255) DEFAULT NULL,
  `preciserlieu1` varchar(255) DEFAULT NULL,
  `kikotekadejak` varchar(255) DEFAULT NULL,
  `preciserlieu2` varchar(255) DEFAULT NULL,
  `type2` varchar(30) DEFAULT NULL,
  `filename` varchar(30) DEFAULT NULL,
  `filename2` varchar(30) DEFAULT NULL,
  `commune` varchar(255) DEFAULT NULL,
  `quartier` varchar(255) DEFAULT NULL,
  `camp` varchar(255) DEFAULT NULL,
  `partiii1` varchar(255) DEFAULT NULL,
  `tip1` varchar(10) DEFAULT NULL,
  `tip2` varchar(10) DEFAULT NULL,
  `tip3` varchar(10) DEFAULT NULL,
  `tip4` varchar(10) DEFAULT NULL,
  `tip5` varchar(10) DEFAULT NULL,
  `newkikote1` varchar(255) DEFAULT NULL,
  `newkikote2` varchar(255) DEFAULT NULL,
  `newkikote3` varchar(255) DEFAULT NULL,
  `newkikote4` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=374 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `upload`
--

DROP TABLE IF EXISTS `upload`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `size` int(11) NOT NULL,
  `content` mediumblob NOT NULL,
  `name2` varchar(30) DEFAULT NULL,
  `type2` varchar(30) DEFAULT NULL,
  `size2` int(11) DEFAULT NULL,
  `content2` mediumblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `username` varchar(32) NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `viewnames` binary(1) DEFAULT NULL,
  `deletepeople` binary(1) DEFAULT NULL,
  `deleteusers` binary(1) DEFAULT NULL,
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-07-12 13:58:55
