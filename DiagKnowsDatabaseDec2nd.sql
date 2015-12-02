-- MySQL dump 10.13  Distrib 5.5.38, for osx10.6 (i386)
--
-- Host: localhost    Database: illness
-- ------------------------------------------------------
-- Server version	5.5.38

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
-- Table structure for table `drug`
--

DROP TABLE IF EXISTS `drug`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drug` (
  `DRUG` int(11) NOT NULL AUTO_INCREMENT,
  `drug_name` varchar(20) DEFAULT NULL,
  `drug_cures` varchar(75) DEFAULT NULL,
  `drug_description` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`DRUG`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drug`
--

LOCK TABLES `drug` WRITE;
/*!40000 ALTER TABLE `drug` DISABLE KEYS */;
INSERT INTO `drug` VALUES (1,'Aspirin','headaches, fever, pain','Aspirin should not be used during pregnancy'),(2,'Acetaminophen','headaches, fever, muscle aches, menstrual cramps','Should not be used during pregnancy'),(3,'Ibuprofen','headaches, fever, muscle aches, anti-inflammatory','Stronger and lasts longer');
/*!40000 ALTER TABLE `drug` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `illness`
--

DROP TABLE IF EXISTS `illness`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `illness` (
  `ILL` int(11) NOT NULL AUTO_INCREMENT,
  `ill_name` varchar(25) DEFAULT NULL,
  `ill_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ILL`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `illness`
--

LOCK TABLES `illness` WRITE;
/*!40000 ALTER TABLE `illness` DISABLE KEYS */;
INSERT INTO `illness` VALUES (1,'Cold','head pain, muscle aches, runny nose, coughing, sore throat'),(2,'Food Poisoning','vomitting, fever, ahces, shaky, nausea, stomach pain'),(3,'Flu','head pain, fever, muscle aches, shaky, weak, nausea');
/*!40000 ALTER TABLE `illness` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `illness_symptom`
--

DROP TABLE IF EXISTS `illness_symptom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `illness_symptom` (
  `ILL_ID` int(11) NOT NULL,
  `SYM_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `illness_symptom`
--

LOCK TABLES `illness_symptom` WRITE;
/*!40000 ALTER TABLE `illness_symptom` DISABLE KEYS */;
INSERT INTO `illness_symptom` VALUES (1,1),(1,2),(1,3),(1,7),(1,9),(2,1),(2,3),(2,4),(2,5),(2,6),(2,8),(3,1),(3,3),(3,4),(3,5),(3,6);
/*!40000 ALTER TABLE `illness_symptom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicine`
--

DROP TABLE IF EXISTS `medicine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medicine` (
  `MEDI` int(11) NOT NULL AUTO_INCREMENT,
  `medi_name` varchar(25) DEFAULT NULL,
  `medi_description` varchar(75) DEFAULT NULL,
  PRIMARY KEY (`MEDI`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicine`
--

LOCK TABLES `medicine` WRITE;
/*!40000 ALTER TABLE `medicine` DISABLE KEYS */;
INSERT INTO `medicine` VALUES (1,'Tylonol','Other names include Paracetamol, Panadol, Mapap'),(2,'Advil','Other names include Motrin and IBU'),(3,'Bayer','Other names include Ecotrin');
/*!40000 ALTER TABLE `medicine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `symptom`
--

DROP TABLE IF EXISTS `symptom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `symptom` (
  `SYMP` int(11) NOT NULL AUTO_INCREMENT,
  `symptom_name` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`SYMP`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `symptom`
--

LOCK TABLES `symptom` WRITE;
/*!40000 ALTER TABLE `symptom` DISABLE KEYS */;
INSERT INTO `symptom` VALUES (1,'Headache'),(2,'Runny Nose'),(3,'Fever'),(4,'Vomiting'),(5,'Nausea'),(6,'Weakness'),(7,'Cough'),(8,'Cramps'),(9,'Sore Throat');
/*!40000 ALTER TABLE `symptom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `username`
--

DROP TABLE IF EXISTS `username`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `username` (
  `UserNameID` int(9) NOT NULL AUTO_INCREMENT,
  `email` text,
  `pass` varchar(40) NOT NULL,
  `uName` varchar(30) DEFAULT NULL,
  `lname` text,
  `fbID` varchar(20) DEFAULT NULL,
  `img` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`UserNameID`)
) ENGINE=InnoDB AUTO_INCREMENT=215 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `username`
--

LOCK TABLES `username` WRITE;
/*!40000 ALTER TABLE `username` DISABLE KEYS */;
INSERT INTO `username` VALUES (1,'mcisla@hotmail.com','123','Isla',NULL,NULL,'6'),(2,'v-gini@hotmail.com','tequila','Virginia',NULL,NULL,'7'),(3,'bob@gmail.com','hello','bob',NULL,NULL,'3'),(4,'sally@sally.com','hey','Sally',NULL,NULL,'1'),(5,'someone@something.com','something','someone',NULL,NULL,'2'),(6,'someone@something.com','something','someone',NULL,NULL,'7'),(7,'person@person.com','pickle','person',NULL,NULL,'6'),(120,'mcisla@hotmail.com','111','Isla','McCullough',NULL,'4'),(121,'mcisla@hotmail.com','111','Isla','McCullough',NULL,'2'),(122,'mcisla@hotmail.com','111','Isla','McCullough',NULL,'4'),(123,'mcisla@hotmail.com','111','Isla','McCullough',NULL,'4'),(124,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'2'),(125,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'3'),(126,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'3'),(127,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'7'),(128,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'2'),(129,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'3'),(130,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'4'),(131,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'1'),(132,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'7'),(133,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'5'),(134,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'2'),(135,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'1'),(136,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'7'),(137,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'2'),(138,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'3'),(139,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'3'),(140,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'5'),(141,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'7'),(142,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'7'),(143,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'5'),(144,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'2'),(145,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'4'),(146,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'5'),(147,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'1'),(148,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'1'),(149,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'2'),(150,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'7'),(151,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'1'),(152,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'6'),(153,'c.roscoe@hotmail.com','1234','Carson','Roscoe',NULL,'2'),(154,'bob@bob.ca','bob','Bob','Smith',NULL,'7'),(155,'bob@bob.ca','bob','Bob','Smith',NULL,'2'),(156,'sally@sally.com','1234','Sally','Smith',NULL,'1'),(157,'sally@sally.com','1234','Sally','Smith',NULL,'5'),(158,'bob@gmail.com','1234','Bobby','Smith',NULL,'2'),(159,'bob@gmail.com','1234','Bobby','Smith',NULL,'1'),(160,'goog@fewfw.com','123','Bob','fefw',NULL,'4'),(161,'goog@fewfw.com','123','Bob','fefw',NULL,'5'),(162,'fslk@sgs.com','123','Bob','Smith',NULL,'5'),(163,'fslk@sgs.com','123','Bob','Smith',NULL,'7'),(164,'fslk@sgs.com','123','Bob','Smith',NULL,'2'),(165,'fslk@sgs.com','123','Bob','Smith',NULL,'7'),(166,'ef@fs.com','123','Sally','Smith',NULL,'1'),(167,'ef@fs.com','123','Sally','Smith',NULL,'4'),(168,'ef@fs.com','123','Sally','Smith',NULL,'1'),(169,'ef@fs.com','123','Sally','Smith',NULL,'3'),(170,'mcmc@gf.com','123','Bob','ddqwfw',NULL,'3'),(171,'mcmc@gf.com','123','Bob','ddqwfw',NULL,'5'),(172,'123@1.com','23','Paige','Smith',NULL,'1'),(173,'123@1.com','23','Paige','Smith',NULL,'2'),(174,'thisbetterwork@ugh.com','why','New','Person',NULL,NULL),(175,'thisbetterwork@ugh.com','why','New','Person',NULL,NULL),(176,'fkopf@f.com','111','New','thing',NULL,NULL),(177,'fkopf@f.com','111','New','thing',NULL,NULL),(178,'q@q.com','111','q','q',NULL,'1'),(179,'q@q.com','111','q','q',NULL,'5'),(180,'ji@d.com','123','hi','ji',NULL,'3'),(181,'ji@d.com','123','hi','ji',NULL,'6'),(182,'c@d.efg','hij','a','b',NULL,'1'),(183,'c@d.efg','hij','a','b',NULL,'1'),(184,'111@1.com','123','Sallyy','Herman',NULL,'6'),(185,'111@1.com','123','Sallyy','Herman',NULL,'4'),(186,'hi@hi.com','123','Tom','Sawyer',NULL,'3'),(187,'hi@hi.com','123','Tom','Sawyer',NULL,'3'),(188,'hi@hi.com','123','Tom','Sawyer',NULL,'5'),(189,'hi@hi.com','123','Tom','Sawyer',NULL,'7'),(190,'paul@gmail.com','123','Paul','Wambam',NULL,'7'),(191,'paul@gmail.com','123','Paul','Wambam',NULL,'2'),(192,'fes@gdgrd.com','1234','Tielee','McConnery',NULL,'4'),(193,'fes@gdgrd.com','1234','Tielee','McConnery',NULL,'1'),(194,'fjfjfjf@kfkf.com','12345','something','someone',NULL,'6'),(195,':email',':password',':firstname',':lastname',NULL,NULL),(196,':email',':password',':firstname',':lastname',NULL,NULL),(197,':email',':password',':firstname',':lastname',NULL,NULL),(198,':email',':password',':firstname',':lastname',NULL,NULL),(199,':email',':password',':firstname',':lastname',NULL,NULL),(200,':email',':password',':firstname',':lastname',NULL,NULL),(201,':email',':password',':firstname',':lastname',NULL,NULL),(202,'asdf@gmail.com','hihi5',NULL,'walsh5',NULL,NULL),(203,'asd@gmail.com','asdf','siobhan6','walsh6',NULL,NULL),(204,'asdf@gmail.com','hihi9','siobhan9','walsh9',NULL,'5'),(205,'asdf@gmail.com','hihi10','siobhan10','walsh10',NULL,'6'),(206,'asdf@gmail.com','hihi11','siobhan11','walsh11',NULL,'1'),(207,'asdf@gmail.com','hihi16','siobhan16','walsh16',NULL,'2'),(208,'asdf@gmail.com','hihi18','siobhan18','walsh18',NULL,'1'),(209,'asdf@mail.com','hihi19','siobhan19','walsh19',NULL,'1'),(210,'asdf@gmail.com','hihi20','siobhan20','walsh20',NULL,'6'),(211,'asdf@gmail.com','hihi23','siobhan23','walsh23',NULL,'5'),(212,'asdf@gmail.com','asdf24','siobhan24','walsh24',NULL,'4'),(213,'asdf@gmail.com','','siobhan24','walsh24',NULL,'4'),(214,'asdf@gmail.com','hihi25','siobhan25','walsh35',NULL,'3');
/*!40000 ALTER TABLE `username` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-02 13:46:23
