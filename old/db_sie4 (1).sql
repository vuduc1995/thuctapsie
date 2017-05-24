-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: db_sie4
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

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
-- Table structure for table `aspiration`
--

DROP TABLE IF EXISTS `aspiration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aspiration` (
  `idAspiration` int(11) NOT NULL AUTO_INCREMENT,
  `StudenID` int(11) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `class` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `laptop` int(11) NOT NULL,
  `studnumber` int(8) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `language_certification` varchar(45) NOT NULL,
  `language_point` double NOT NULL,
  `stud_own_skill` varchar(250) NOT NULL,
  `stud_learn_skill` varchar(250) NOT NULL,
  `speciality1` varchar(45) NOT NULL,
  `speciality2` varchar(45) NOT NULL,
  `speciality3` varchar(45) NOT NULL,
  `compHave` int(11) NOT NULL DEFAULT '0',
  `compName` varchar(45) DEFAULT NULL,
  `compAdderss` varchar(45) DEFAULT NULL,
  `compInstructor` varchar(45) DEFAULT NULL,
  `compPhone` varchar(45) DEFAULT NULL,
  `compEmail` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idAspiration`),
  KEY `student_idx` (`StudenID`),
  CONSTRAINT `student1` FOREIGN KEY (`StudenID`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aspiration`
--

LOCK TABLES `aspiration` WRITE;
/*!40000 ALTER TABLE `aspiration` DISABLE KEYS */;
INSERT INTO `aspiration` VALUES (9,2,'a','a','female',1,0,'a',0,'a@gmail.com','a',0,'a','a','4','Java','3',1,'a','a','a','b','bb@gmali.com'),(10,7,'Duc','LTU','male',1,123,'HN',1234,'abc@gmail.com','e',5,'c','f','Java','PHP','Android',0,NULL,NULL,NULL,NULL,NULL),(11,8,'Phuong','LTU','male',1,234,'HN',1234,'gggg@gmail.com','e',5,'c','f','PHP','Java','Android',0,NULL,NULL,NULL,NULL,NULL),(12,9,'Trung','LTU','male',1,345,'HN',1525,'eeeeee@gmail.com','e',6,'c','g','Java','C#','Android',0,NULL,NULL,NULL,NULL,NULL),(13,10,'Nam','LTU','male',0,456,'HN',2525,'hhhhhh@gmail.com','e',6,'c','g','C#','Android','Java',0,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `aspiration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collegeinstructor`
--

DROP TABLE IF EXISTS `collegeinstructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `collegeinstructor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CI_ID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `description` varchar(250) NOT NULL,
  `email` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `CollegeInstructor_idx` (`CI_ID`),
  CONSTRAINT `CollegeInstructor` FOREIGN KEY (`CI_ID`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collegeinstructor`
--

LOCK TABLES `collegeinstructor` WRITE;
/*!40000 ALTER TABLE `collegeinstructor` DISABLE KEYS */;
INSERT INTO `collegeinstructor` VALUES (1,3,'a','2017-04-21',32479832,'a','a','a@gmail.com','a','male');
/*!40000 ALTER TABLE `collegeinstructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `collegeintershipmanager`
--

DROP TABLE IF EXISTS `collegeintershipmanager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `collegeintershipmanager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CIM_ID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `description` varchar(250) NOT NULL,
  `email` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `CollegeIntershipManager_idx` (`CIM_ID`),
  CONSTRAINT `CollegeIntershipManager` FOREIGN KEY (`CIM_ID`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `collegeintershipmanager`
--

LOCK TABLES `collegeintershipmanager` WRITE;
/*!40000 ALTER TABLE `collegeintershipmanager` DISABLE KEYS */;
INSERT INTO `collegeintershipmanager` VALUES (1,4,'a','2017-04-21',23432442,'a','a','a@gmail.com','a','female');
/*!40000 ALTER TABLE `collegeintershipmanager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comment` (
  `idComment` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` int(11) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `Content` varchar(45) NOT NULL,
  PRIMARY KEY (`idComment`),
  KEY `student_idx` (`StudentID`),
  CONSTRAINT `student2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comment`
--

LOCK TABLES `comment` WRITE;
/*!40000 ALTER TABLE `comment` DISABLE KEYS */;
INSERT INTO `comment` VALUES (2,2,'tại sao lại thế? ','huhu');
/*!40000 ALTER TABLE `comment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company`
--

DROP TABLE IF EXISTS `company`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company` (
  `idCompany` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `PhoneNumber` varchar(45) NOT NULL,
  PRIMARY KEY (`idCompany`),
  KEY `company` (`idCompany`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'nhat','HN','965616516'),(2,'FPT','HN','134343434'),(3,'Viettel','HN','1234'),(4,'CMD','HN','12335'),(5,'Framgia','HN','1241241'),(6,'BKNIC','HN','12345');
/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companyinstructor`
--

DROP TABLE IF EXISTS `companyinstructor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companyinstructor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CI_ID` int(11) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `position` varchar(45) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `description` varchar(250) NOT NULL,
  `email` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `CompanyInstructor_idx` (`CI_ID`),
  KEY `Company1_idx` (`CompanyID`),
  CONSTRAINT `Company1` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`idCompany`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `CompanyInstructor` FOREIGN KEY (`CI_ID`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companyinstructor`
--

LOCK TABLES `companyinstructor` WRITE;
/*!40000 ALTER TABLE `companyinstructor` DISABLE KEYS */;
INSERT INTO `companyinstructor` VALUES (1,6,1,'a','2017-04-21','a',234245,'aa','a','adsafasdf@gmail.com','female');
/*!40000 ALTER TABLE `companyinstructor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companyrepresentative`
--

DROP TABLE IF EXISTS `companyrepresentative`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companyrepresentative` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CR_ID` int(11) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `position` varchar(45) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `description` varchar(250) NOT NULL,
  `email` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `CompanyRepresentatives_idx` (`CR_ID`),
  KEY `Company_idx` (`CompanyID`),
  CONSTRAINT `Company` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`idCompany`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `CompanyRepresentatives` FOREIGN KEY (`CR_ID`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companyrepresentative`
--

LOCK TABLES `companyrepresentative` WRITE;
/*!40000 ALTER TABLE `companyrepresentative` DISABLE KEYS */;
INSERT INTO `companyrepresentative` VALUES (2,5,1,'a','2017-04-12','bbb',1,'a','a','a@gmail.com','female'),(3,11,2,'abab','2017-01-01','aaaa',21242,'HN','aaaa','abc@gmail.com','female'),(4,12,3,'aa','2017-01-01','aaaa',1414,'HN','aa','vv@gmail.com','male'),(5,13,4,'Nam','2017-01-01','fffff',1242,'HN','vvvv','gggg@gmail.com','male'),(6,14,5,'Thắng','2017-01-01','ggggg',11212,'HN','ssss','zzzzz@gmail.com','male');
/*!40000 ALTER TABLE `companyrepresentative` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cv`
--

DROP TABLE IF EXISTS `cv`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cv` (
  `idCV` int(11) NOT NULL AUTO_INCREMENT,
  `idStudent` int(11) NOT NULL,
  `fullname` varchar(45) NOT NULL,
  `class` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `stdid` int(8) NOT NULL,
  `email` varchar(45) NOT NULL,
  `foreignLanguage` varchar(45) NOT NULL,
  `skills` varchar(45) NOT NULL,
  `experience` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  PRIMARY KEY (`idCV`),
  KEY `fk11_idx` (`idStudent`),
  CONSTRAINT `fk11` FOREIGN KEY (`idStudent`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cv`
--

LOCK TABLES `cv` WRITE;
/*!40000 ALTER TABLE `cv` DISABLE KEYS */;
INSERT INTO `cv` VALUES (2,2,'a','a','female',0,'a@gmail.com','a','a','b','a','a');
/*!40000 ALTER TABLE `cv` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `deadline`
--

DROP TABLE IF EXISTS `deadline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `deadline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` int(11) NOT NULL,
  `time` datetime NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deadline`
--

LOCK TABLES `deadline` WRITE;
/*!40000 ALTER TABLE `deadline` DISABLE KEYS */;
INSERT INTO `deadline` VALUES (1,2,'2017-05-30 00:00:00','Student Report Final-term'),(2,1,'2017-05-30 00:00:00','Student Registration'),(3,3,'2017-05-30 00:00:00','Student Report Final-term');
/*!40000 ALTER TABLE `deadline` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mark`
--

DROP TABLE IF EXISTS `mark`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mark` (
  `idMark` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` int(11) NOT NULL,
  `mid_term_mark` int(11) NOT NULL,
  `final_term_mark` int(11) NOT NULL,
  PRIMARY KEY (`idMark`),
  KEY `Student_idx` (`StudentID`),
  CONSTRAINT `Student3` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mark`
--

LOCK TABLES `mark` WRITE;
/*!40000 ALTER TABLE `mark` DISABLE KEYS */;
INSERT INTO `mark` VALUES (1,2,7,8);
/*!40000 ALTER TABLE `mark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `match_info`
--

DROP TABLE IF EXISTS `match_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `match_info` (
  `idMatch` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `topic` varchar(45) NOT NULL,
  `SpecialityID` int(11) NOT NULL,
  PRIMARY KEY (`idMatch`),
  KEY `idMatch` (`idMatch`,`CompanyID`,`StudentID`),
  KEY `CompanyID` (`CompanyID`),
  KEY `StudentID` (`StudentID`),
  CONSTRAINT `match_info_ibfk_1` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`idCompany`),
  CONSTRAINT `match_info_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `match_info`
--

LOCK TABLES `match_info` WRITE;
/*!40000 ALTER TABLE `match_info` DISABLE KEYS */;
INSERT INTO `match_info` VALUES (6,1,2,'',4);
/*!40000 ALTER TABLE `match_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `outline`
--

DROP TABLE IF EXISTS `outline`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `outline` (
  `idOutline` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyID` int(11) NOT NULL,
  `content` varchar(250) NOT NULL,
  PRIMARY KEY (`idOutline`),
  KEY `content` (`content`),
  KEY `idOutline` (`idOutline`,`CompanyID`,`content`),
  KEY `CompanyID` (`CompanyID`),
  CONSTRAINT `outline_ibfk_1` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`idCompany`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outline`
--

LOCK TABLES `outline` WRITE;
/*!40000 ALTER TABLE `outline` DISABLE KEYS */;
/*!40000 ALTER TABLE `outline` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rate`
--

DROP TABLE IF EXISTS `rate`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rate` (
  `idRate` int(11) NOT NULL AUTO_INCREMENT,
  `CompanyID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `content` varchar(250) NOT NULL,
  PRIMARY KEY (`idRate`),
  KEY `idRate` (`idRate`,`CompanyID`,`StudentID`,`content`),
  KEY `CompanyID` (`CompanyID`),
  KEY `StudentID` (`StudentID`),
  CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`idCompany`),
  CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rate`
--

LOCK TABLES `rate` WRITE;
/*!40000 ALTER TABLE `rate` DISABLE KEYS */;
/*!40000 ALTER TABLE `rate` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registration` (
  `idRegistration` int(11) NOT NULL AUTO_INCREMENT,
  `CR_ID` int(11) NOT NULL,
  `companyname` varchar(45) NOT NULL,
  `address` varchar(60) DEFAULT NULL,
  `comp_instructor_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `quantitysutd` int(11) DEFAULT NULL,
  `speciality` varchar(45) DEFAULT NULL,
  `requirement` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`idRegistration`),
  KEY `CollegeIntershipManager_idx` (`CR_ID`),
  CONSTRAINT `CollegeIntershipManager1` FOREIGN KEY (`CR_ID`) REFERENCES `companyrepresentative` (`CR_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registration`
--

LOCK TABLES `registration` WRITE;
/*!40000 ALTER TABLE `registration` DISABLE KEYS */;
INSERT INTO `registration` VALUES (2,5,'Nhat','Ha Noi','Nhat ','Nhat@gmail.com','12123',12,'NO','no');
/*!40000 ALTER TABLE `registration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `report` (
  `idReport` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Content` varchar(45) NOT NULL,
  `file` varchar(45) NOT NULL,
  PRIMARY KEY (`idReport`),
  KEY `Student_idx` (`StudentID`),
  CONSTRAINT `Student4` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `report`
--

LOCK TABLES `report` WRITE;
/*!40000 ALTER TABLE `report` DISABLE KEYS */;
/*!40000 ALTER TABLE `report` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reportcompanyinstrutor`
--

DROP TABLE IF EXISTS `reportcompanyinstrutor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reportcompanyinstrutor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` int(11) NOT NULL,
  `company_name` varchar(45) NOT NULL,
  `company_instructor_name` varchar(45) NOT NULL,
  `company_instructor_phone` varchar(45) NOT NULL,
  `company_instructor_email` varchar(45) NOT NULL,
  `student_id` varchar(45) NOT NULL,
  `student_class` varchar(45) NOT NULL,
  `conent_report` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `studentkey_idx` (`StudentID`),
  KEY `fk111_idx` (`conent_report`),
  CONSTRAINT `fk111` FOREIGN KEY (`conent_report`) REFERENCES `reportdetail` (`idreportdetail`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `studentkey` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reportcompanyinstrutor`
--

LOCK TABLES `reportcompanyinstrutor` WRITE;
/*!40000 ALTER TABLE `reportcompanyinstrutor` DISABLE KEYS */;
/*!40000 ALTER TABLE `reportcompanyinstrutor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reportdetail`
--

DROP TABLE IF EXISTS `reportdetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reportdetail` (
  `idreportdetail` int(11) NOT NULL AUTO_INCREMENT,
  `point_TTL_1` int(11) NOT NULL,
  `cmt_TTL_1` varchar(45) NOT NULL,
  `point_TTL_2` int(11) NOT NULL,
  `cmt_TTL_2` varchar(45) NOT NULL,
  `point_TTL_3` int(11) NOT NULL,
  `cmt_TTL_3` varchar(45) NOT NULL,
  `point_TTL_4` int(11) NOT NULL,
  `cmt_TTL_4` varchar(45) NOT NULL,
  `point_TTL_5` int(11) NOT NULL,
  `cmt_TTL_5` varchar(45) NOT NULL,
  `point_TTL_6` int(11) NOT NULL,
  `point_TTL_7` int(11) NOT NULL,
  `cmt_TTL_6` varchar(45) NOT NULL,
  `cmt_TTL_7` varchar(45) NOT NULL,
  `point_WHBF_1` int(11) NOT NULL,
  `point_WHBF_2` int(11) NOT NULL,
  `point_WHBF_3` int(11) NOT NULL,
  `point_WHBF_4` int(11) NOT NULL,
  `point_WHBF_5` int(11) NOT NULL,
  `point_WHBF_6` int(11) NOT NULL,
  `cmt_WHBF_1` varchar(45) NOT NULL,
  `cmt_WHBF_2` varchar(45) NOT NULL,
  `cmt_WHBF_3` varchar(45) NOT NULL,
  `cmt_WHBF_4` varchar(45) NOT NULL,
  `cmt_WHBF_5` varchar(45) NOT NULL,
  `cmt_WHBF_6` varchar(45) NOT NULL,
  `point_A_1` int(11) NOT NULL,
  `point_A_2` int(11) NOT NULL,
  `point_A_3` int(11) NOT NULL,
  `point_A_4` int(11) NOT NULL,
  `point_A_5` int(11) NOT NULL,
  `cmt_A_1` varchar(45) NOT NULL,
  `cmt_A_2` varchar(45) NOT NULL,
  `cmt_A_3` varchar(45) NOT NULL,
  `cmt_A_4` varchar(45) NOT NULL,
  `cmt_A_5` varchar(45) NOT NULL,
  `point_I_1` int(11) NOT NULL,
  `point_I_2` int(11) NOT NULL,
  `point_I_3` int(11) NOT NULL,
  `cmt_I_1` varchar(45) NOT NULL,
  `cmt_I_2` varchar(45) NOT NULL,
  `cmt_I_3` varchar(45) NOT NULL,
  `general_assessment` varchar(45) NOT NULL,
  PRIMARY KEY (`idreportdetail`),
  KEY `idx111` (`idreportdetail`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reportdetail`
--

LOCK TABLES `reportdetail` WRITE;
/*!40000 ALTER TABLE `reportdetail` DISABLE KEYS */;
/*!40000 ALTER TABLE `reportdetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `schedule`
--

DROP TABLE IF EXISTS `schedule`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `schedule` (
  `idSchedule` int(11) NOT NULL AUTO_INCREMENT,
  `StudentID` int(11) NOT NULL,
  `CollegeIntershipManagerID` int(11) NOT NULL,
  `CollegeInstructorID` int(11) NOT NULL,
  `CompanyInstructorID` int(11) NOT NULL,
  PRIMARY KEY (`idSchedule`),
  KEY `student_idx` (`StudentID`),
  KEY `key1_idx` (`CompanyInstructorID`),
  KEY `key2_idx` (`CollegeInstructorID`),
  KEY `key3` (`CollegeIntershipManagerID`),
  CONSTRAINT `key1` FOREIGN KEY (`CompanyInstructorID`) REFERENCES `companyinstructor` (`CI_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `key2` FOREIGN KEY (`CollegeInstructorID`) REFERENCES `collegeinstructor` (`CI_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `key3` FOREIGN KEY (`CollegeIntershipManagerID`) REFERENCES `collegeintershipmanager` (`CIM_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `student5` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule`
--

LOCK TABLES `schedule` WRITE;
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
/*!40000 ALTER TABLE `schedule` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `speciality`
--

DROP TABLE IF EXISTS `speciality`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `speciality` (
  `idSpeciality` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`idSpeciality`),
  KEY `idSpeciality` (`idSpeciality`),
  KEY `name` (`name`),
  KEY `idSpeciality_2` (`idSpeciality`,`name`),
  KEY `idSpeciality_3` (`idSpeciality`,`name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `speciality`
--

LOCK TABLES `speciality` WRITE;
/*!40000 ALTER TABLE `speciality` DISABLE KEYS */;
INSERT INTO `speciality` VALUES (3,'Android'),(2,'C#'),(1,'Java'),(4,'PHP'),(5,'QA');
/*!40000 ALTER TABLE `speciality` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Student_ID` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `studid` int(8) DEFAULT NULL,
  `class` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `student` (`Student_ID`),
  CONSTRAINT `Student_User` FOREIGN KEY (`Student_ID`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,2,'Tata','2017-04-13',3748257,'CNTT 2.02',732497,'Ha Noi','Khong co gi','nhat@gmail.com','female'),(2,7,'Duc','2017-01-01',123,'LTU',1234,'HN','aaafaf','abc@gmail.com','male'),(3,8,'Phuong','2017-01-01',234,'LTU',1234,'HN','vvvv','gggg@gmail.com','male'),(4,9,'Trung','2017-01-01',345,'LTU',1525,'HN','eea','eeeeee@gmail.com','male'),(5,10,'Nam','2017-01-01',456,'LTU',2525,'HN','ee','hhhhhh@gmail.com','male');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `timesheet`
--

DROP TABLE IF EXISTS `timesheet`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `timesheet` (
  `idtimeSheet` int(11) NOT NULL AUTO_INCREMENT,
  `ci_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `file` varchar(45) NOT NULL,
  PRIMARY KEY (`idtimeSheet`),
  KEY `fk12_idx` (`student_id`),
  KEY `fk13_idx` (`ci_id`),
  CONSTRAINT `fk12` FOREIGN KEY (`student_id`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk13` FOREIGN KEY (`ci_id`) REFERENCES `companyinstructor` (`CI_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timesheet`
--

LOCK TABLES `timesheet` WRITE;
/*!40000 ALTER TABLE `timesheet` DISABLE KEYS */;
/*!40000 ALTER TABLE `timesheet` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `topic`
--

DROP TABLE IF EXISTS `topic`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `topic` (
  `idTopic` int(11) NOT NULL AUTO_INCREMENT,
  `SpecialityID` int(11) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `content` varchar(250) CHARACTER SET utf8 NOT NULL,
  `quantity` int(11) NOT NULL,
  `quantityLeft` int(11) NOT NULL,
  PRIMARY KEY (`idTopic`),
  KEY `idTopic` (`idTopic`,`SpecialityID`,`CompanyID`,`content`,`quantity`),
  KEY `SpecialityID` (`SpecialityID`),
  KEY `CompanyID` (`CompanyID`),
  CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`SpecialityID`) REFERENCES `speciality` (`idSpeciality`),
  CONSTRAINT `topic_ibfk_2` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`idCompany`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topic`
--

LOCK TABLES `topic` WRITE;
/*!40000 ALTER TABLE `topic` DISABLE KEYS */;
INSERT INTO `topic` VALUES (2,4,1,'aa',324,324),(4,4,1,'bb',2,1),(5,3,1,'c',3,3),(6,3,1,'ddd',4,4),(9,1,2,'aaaaaa',3,0),(10,3,2,'ggggg',4,0),(11,3,2,'agagag',5,0),(12,2,2,'ddfgdfg',13,0),(13,2,2,'bxbxbxb',5,0);
/*!40000 ALTER TABLE `topic` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` int(11) NOT NULL,
  `avatar` varchar(45) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin@gmail.com','123456',1,''),(2,'student@gmail.com','123456',2,''),(3,'collegeinstructor@gmail.com','123456',3,''),(4,'collegeintershipmanager@gmail.com','123456',4,''),(5,'companyrepresentative@gmail.com','123456',5,''),(6,'companyinstructor@gmail.com','123456',6,''),(7,'student1@gmail.com','123456',2,''),(8,'student2@gmail.com','123456',2,''),(9,'student3@gmail.com','123456',2,''),(10,'student4@gmail.com','123456',2,''),(11,'comprepresent1@gmail.com','123456',5,''),(12,'comprepresent2@gmail.com','123456',5,''),(13,'comprepresent3@gmail.com','123456',5,''),(14,'comprepresent4@gmail.com','123456',5,'');
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

-- Dump completed on 2017-05-22 15:03:43
