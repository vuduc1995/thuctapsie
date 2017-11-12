CREATE DATABASE  IF NOT EXISTS `sie` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `sie`;
-- MySQL dump 10.13  Distrib 5.7.9, for Win64 (x86_64)
--
-- Host: localhost    Database: sie
-- ------------------------------------------------------
-- Server version	5.7.11-log

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aspiration`
--

LOCK TABLES `aspiration` WRITE;
/*!40000 ALTER TABLE `aspiration` DISABLE KEYS */;
INSERT INTO `aspiration` VALUES (9,2,'a','a','female',1,0,'a',0,'a@gmail.com','a',0,'a','a','4','2','3',1,'a','a','a','b','bb@gmali.com');
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
INSERT INTO `collegeinstructor` VALUES (1,3,'a','2017-04-21',32479832,'b','a','a@gmail.com','a','male');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company`
--

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;
INSERT INTO `company` VALUES (1,'nhat','HN','965616516');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companyrepresentative`
--

LOCK TABLES `companyrepresentative` WRITE;
/*!40000 ALTER TABLE `companyrepresentative` DISABLE KEYS */;
INSERT INTO `companyrepresentative` VALUES (2,5,1,'a','2017-04-12','bbb',1,'a','a','a@gmail.com','female');
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `deadline`
--

LOCK TABLES `deadline` WRITE;
/*!40000 ALTER TABLE `deadline` DISABLE KEYS */;
INSERT INTO `deadline` VALUES (1,2,'2017-05-30 00:00:00','Student Report Mid-term'),(2,1,'2017-05-30 00:00:00','Student Registration'),(3,3,'2017-05-30 00:00:00','Student Report Final-term'),(4,4,'2017-05-30 00:00:00','APPLICATION FOR INTERNSHIP'),(5,5,'2017-05-30 00:00:00','TOPIC LIST'),(6,6,'2017-05-30 00:00:00','OUTLINE');
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
INSERT INTO `mark` VALUES (1,2,10,8);
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
INSERT INTO `match_info` VALUES (6,1,2,'Magento',4);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `outline`
--

LOCK TABLES `outline` WRITE;
/*!40000 ALTER TABLE `outline` DISABLE KEYS */;
INSERT INTO `outline` VALUES (1,1,'document/outline/1/2-Bang-diem-ren-luyen.doc');
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
  `point` varchar(45) NOT NULL,
  PRIMARY KEY (`idRate`),
  KEY `idRate` (`idRate`,`CompanyID`,`StudentID`,`content`),
  KEY `CompanyID` (`CompanyID`),
  KEY `StudentID` (`StudentID`),
  CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`idCompany`),
  CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rate`
--

LOCK TABLES `rate` WRITE;
/*!40000 ALTER TABLE `rate` DISABLE KEYS */;
INSERT INTO `rate` VALUES (1,1,2,'Bad boy','7');
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
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
  `Content` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  PRIMARY KEY (`idReport`),
  KEY `Student_idx` (`StudentID`),
  CONSTRAINT `Student4` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `report`
--

LOCK TABLES `report` WRITE;
/*!40000 ALTER TABLE `report` DISABLE KEYS */;
INSERT INTO `report` VALUES (1,2,1,'2','document/midterm/2/2-Bang-diem-ren-luyen.doc'),(2,2,2,'Final','document/finalterm/2/Chương 1_Kỳ nghỉ.docx');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reportcompanyinstrutor`
--

LOCK TABLES `reportcompanyinstrutor` WRITE;
/*!40000 ALTER TABLE `reportcompanyinstrutor` DISABLE KEYS */;
INSERT INTO `reportcompanyinstrutor` VALUES (3,2,'','','','','','',4);
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
  `point1` varchar(45) NOT NULL,
  `comment1` varchar(45) NOT NULL,
  `point2` varchar(45) NOT NULL,
  `comment2` varchar(45) NOT NULL,
  `point3` varchar(45) NOT NULL,
  `comment3` varchar(45) NOT NULL,
  `point4` varchar(45) NOT NULL,
  `comment4` varchar(45) NOT NULL,
  `point5` varchar(45) NOT NULL,
  `comment5` varchar(45) NOT NULL,
  `point6` varchar(45) NOT NULL,
  `comment6` varchar(45) NOT NULL,
  `point7` varchar(45) NOT NULL,
  `comment7` varchar(45) NOT NULL,
  `point8` varchar(45) NOT NULL,
  `point9` varchar(45) NOT NULL,
  `point10` varchar(45) NOT NULL,
  `point11` varchar(45) NOT NULL,
  `point12` varchar(45) NOT NULL,
  `point13` varchar(45) NOT NULL,
  `comment8` varchar(45) NOT NULL,
  `comment9` varchar(45) NOT NULL,
  `comment10` varchar(45) NOT NULL,
  `comment11` varchar(45) NOT NULL,
  `comment12` varchar(45) NOT NULL,
  `comment13` varchar(45) NOT NULL,
  `point14` varchar(45) NOT NULL,
  `point15` varchar(45) NOT NULL,
  `point16` varchar(45) NOT NULL,
  `point17` varchar(45) NOT NULL,
  `point18` varchar(45) NOT NULL,
  `comment14` varchar(45) NOT NULL,
  `comment15` varchar(45) NOT NULL,
  `comment16` varchar(45) NOT NULL,
  `comment17` varchar(45) NOT NULL,
  `comment18` varchar(45) NOT NULL,
  `point19` varchar(45) NOT NULL,
  `point20` varchar(45) NOT NULL,
  `point21` varchar(45) NOT NULL,
  `comment19` varchar(45) NOT NULL,
  `comment20` varchar(45) NOT NULL,
  `comment21` varchar(45) NOT NULL,
  `general_assessment` varchar(45) NOT NULL,
  PRIMARY KEY (`idreportdetail`),
  KEY `idx111` (`idreportdetail`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reportdetail`
--

LOCK TABLES `reportdetail` WRITE;
/*!40000 ALTER TABLE `reportdetail` DISABLE KEYS */;
INSERT INTO `reportdetail` VALUES (4,'B','12322222','A','12','B','311','C','121','C','3','A','12','A','12','B','B','C','C','A','C','12','12','3','2','12','12','C','B','B','F','B','12','12','23','12','12','B','B','B','321','12','12','test');
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
  `time` int(11) NOT NULL,
  PRIMARY KEY (`idSchedule`),
  KEY `student_idx` (`StudentID`),
  KEY `key3` (`CollegeIntershipManagerID`),
  CONSTRAINT `key3` FOREIGN KEY (`CollegeIntershipManagerID`) REFERENCES `collegeintershipmanager` (`CIM_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `student5` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `schedule`
--

LOCK TABLES `schedule` WRITE;
/*!40000 ALTER TABLE `schedule` DISABLE KEYS */;
INSERT INTO `schedule` VALUES (2,2,4,2);
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,2,'Tata','2017-04-13',3748257,'CNTT 2.02',732497,'Ha Noi','Khong co gi','nhat@gmail.com','female');
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
  `file` varchar(200) NOT NULL,
  PRIMARY KEY (`idtimeSheet`),
  KEY `fk12_idx` (`student_id`),
  KEY `fk13_idx` (`ci_id`),
  CONSTRAINT `fk12` FOREIGN KEY (`student_id`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk13` FOREIGN KEY (`ci_id`) REFERENCES `companyinstructor` (`CI_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `timesheet`
--

LOCK TABLES `timesheet` WRITE;
/*!40000 ALTER TABLE `timesheet` DISABLE KEYS */;
INSERT INTO `timesheet` VALUES (1,6,2,'document/timesheet/6/DS goi y de tai CN Web tien tien 2016 - 2017.doc');
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
  `status` int(11) NOT NULL,
  PRIMARY KEY (`idTopic`),
  KEY `idTopic` (`idTopic`,`SpecialityID`,`CompanyID`,`content`,`quantity`),
  KEY `SpecialityID` (`SpecialityID`),
  KEY `CompanyID` (`CompanyID`),
  CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`SpecialityID`) REFERENCES `speciality` (`idSpeciality`),
  CONSTRAINT `topic_ibfk_2` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`idCompany`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `topic`
--

LOCK TABLES `topic` WRITE;
/*!40000 ALTER TABLE `topic` DISABLE KEYS */;
INSERT INTO `topic` VALUES (2,4,1,'Laravel',324,324,1),(3,4,1,'Magento',2,2,2),(4,4,1,'bb',2,2,1),(5,3,1,'c',3,3,1),(6,3,1,'ddd',4,4,0);
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin@gmail.com','123456',1,''),(2,'student@gmail.com','1234567',2,''),(3,'collegeinstructor@gmail.com','1234565',3,''),(4,'collegeintershipmanager@gmail.com','123456',4,''),(5,'companyrepresentative@gmail.com','123456',5,''),(6,'companyinstructor@gmail.com','123456',6,''),(7,'nhat@gmail.com','123456',5,''),(8,'nha1t@gmail.com','123456',5,''),(9,'nhat2@gmail.com','123456',3,'');
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

-- Dump completed on 2017-05-24 21:01:41
