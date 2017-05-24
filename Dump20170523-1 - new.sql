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
-- Table structure for table "aspiration"
--

DROP TABLE IF EXISTS "aspiration";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "aspiration" (
 "idAspiration" BIGSERIAL PRIMARY KEY NOT NULL,
  "StudenID" int NOT NULL,
  "fullname" char(45) NOT NULL,
  "class" char(45) NOT NULL,
  "gender" char(45) NOT NULL,
  "laptop" int NOT NULL,
  "studnumber" int NOT NULL,
  "address" char(60) NOT NULL,
  "phone" int NOT NULL,
  "email" char(45) NOT NULL,
  "language_certification" char(45) NOT NULL,
  "language_point" real NOT NULL,
  "stud_own_skill" char(250) NOT NULL,
  "stud_learn_skill" char(250) NOT NULL,
  "speciality1" char(45) NOT NULL,
  "speciality2" char(45) NOT NULL,
  "speciality3" char(45) NOT NULL,
  "compHave" int NOT NULL DEFAULT '0',
  "compName" char(45) DEFAULT NULL,
  "compAdderss" char(45) DEFAULT NULL,
  "compInstructor" char(45) DEFAULT NULL,
  "compPhone" char(45) DEFAULT NULL,
  "compEmail" char(45) DEFAULT NULL
);

--
-- Dumping data for table "aspiration"
--


INSERT INTO "aspiration" VALUES (9,2,'a','a','female',1,0,'a',0,'a@gmail.com','a',0,'a','a','4','Java','3',1,'a','a','a','b','bb@gmali.com'),(10,7,'Duc','LTU','male',1,123,'HN',1234,'abc@gmail.com','e',5,'c','f','Java','PHP','Android',0,NULL,NULL,NULL,NULL,NULL),(11,8,'Phuong','LTU','male',1,234,'HN',1234,'gggg@gmail.com','e',5,'c','f','PHP','Java','Android',0,NULL,NULL,NULL,NULL,NULL),(12,9,'Trung','LTU','male',1,345,'HN',1525,'eeeeee@gmail.com','e',6,'c','g','Java','C#','Android',0,NULL,NULL,NULL,NULL,NULL),(13,10,'Nam','LTU','male',0,456,'HN',2525,'hhhhhh@gmail.com','e',6,'c','g','C#','Android','Java',0,NULL,NULL,NULL,NULL,NULL);

--
-- Table structure for table "collegeinstructor"
--

DROP TABLE IF EXISTS "collegeinstructor";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "collegeinstructor" (
 "id" BIGSERIAL PRIMARY KEY NOT NULL,
  "CI_ID" int NOT NULL,
  "name" char(45) NOT NULL,
  "birthday" date NOT NULL,
  "phone" int NOT NULL,
  "address" char(60) NOT NULL,
  "description" char(250) NOT NULL,
  "email" char(45) NOT NULL,
  "position" char(45) NOT NULL,
  "gender" char(45) NOT NULL
);

--
-- Dumping data for table "collegeinstructor"
--


/*!40000 ALTER TABLE "collegeinstructor" DISABLE KEYS */;
INSERT INTO "collegeinstructor" VALUES (1,3,'a','2017-04-21',32479832,'a','a','a@gmail.com','a','male');
/*!40000 ALTER TABLE "collegeinstructor" ENABLE KEYS */;

--
-- Table structure for table "collegeintershipmanager"
--

DROP TABLE IF EXISTS "collegeintershipmanager";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "collegeintershipmanager" (
 "id" BIGSERIAL PRIMARY KEY NOT NULL,
  "CIM_ID" int NOT NULL,
  "name" char(45) NOT NULL,
  "birthday" date NOT NULL,
  "phone" int NOT NULL,
  "address" char(60) NOT NULL,
  "description" char(250) NOT NULL,
  "email" char(45) NOT NULL,
  "position" char(45) NOT NULL,
  "gender" char(45) NOT NULL
);

--
-- Dumping data for table "collegeintershipmanager"
--

/*!40000 ALTER TABLE "collegeintershipmanager" DISABLE KEYS */;
INSERT INTO "collegeintershipmanager" VALUES (1,4,'a','2017-04-21',23432442,'a','a','a@gmail.com','a','female');
/*!40000 ALTER TABLE "collegeintershipmanager" ENABLE KEYS */;

--
-- Table structure for table "comment"
--

DROP TABLE IF EXISTS "comment";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "comment" (
 "idComment" BIGSERIAL PRIMARY KEY NOT NULL,
  "StudentID" int NOT NULL,
  "Type" char(45) NOT NULL,
  "Content" char(45) NOT NULL
);

--
-- Dumping data for table "comment"
--


/*!40000 ALTER TABLE "comment" DISABLE KEYS */;
INSERT INTO "comment" VALUES (2,2,'tại sao lại thế? ','huhu');
/*!40000 ALTER TABLE "comment" ENABLE KEYS */;


--
-- Table structure for table "company"
--

DROP TABLE IF EXISTS "company";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "company" (
 "idCompany" BIGSERIAL PRIMARY KEY NOT NULL,
  "Name" char(45) NOT NULL,
  "Address" char(45) NOT NULL,
  "PhoneNumber" char(45) NOT NULL
);

--
-- Dumping data for table "company"
--


/*!40000 ALTER TABLE "company" DISABLE KEYS */;
INSERT INTO "company" VALUES (1,'nhat','HN','965616516'),(2,'FPT','HN','134343434'),(3,'Viettel','HN','1234'),(4,'CMD','HN','12335'),(5,'Framgia','HN','1241241'),(6,'BKNIC','HN','12345');
/*!40000 ALTER TABLE "company" ENABLE KEYS */;


--
-- Table structure for table "companyinstructor"
--

DROP TABLE IF EXISTS "companyinstructor";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "companyinstructor" (
 "id" BIGSERIAL PRIMARY KEY NOT NULL,
  "CI_ID" int NOT NULL,
  "CompanyID" int NOT NULL,
  "name" char(45) NOT NULL,
  "birthday" date NOT NULL,
  "position" char(45) NOT NULL,
  "phone" int NOT NULL,
  "address" char(60) NOT NULL,
  "description" char(250) NOT NULL,
  "email" char(45) NOT NULL,
  "gender" char(45) NOT NULL
);

--
-- Dumping data for table "companyinstructor"
--


/*!40000 ALTER TABLE "companyinstructor" DISABLE KEYS */;
INSERT INTO "companyinstructor" VALUES (1,6,1,'a','2017-04-21','a',234245,'aa','a','adsafasdf@gmail.com','female');
/*!40000 ALTER TABLE "companyinstructor" ENABLE KEYS */;


--
-- Table structure for table "companyrepresentative"
--

DROP TABLE IF EXISTS "companyrepresentative";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "companyrepresentative" (
 "id" BIGSERIAL PRIMARY KEY NOT NULL,
  "CR_ID" int NOT NULL,
  "CompanyID" int NOT NULL,
  "name" char(45) NOT NULL,
  "birthday" date NOT NULL,
  "position" char(45) NOT NULL,
  "phone" int NOT NULL,
  "address" char(60) NOT NULL,
  "description" char(250) NOT NULL,
  "email" char(45) NOT NULL,
  "gender" char(45) NOT NULL
);

--
-- Dumping data for table "companyrepresentative"
--

/*!40000 ALTER TABLE "companyrepresentative" DISABLE KEYS */;
INSERT INTO "companyrepresentative" VALUES (2,5,1,'a','2017-04-12','bbb',1,'a','a','a@gmail.com','female'),(3,11,2,'abab','2017-01-01','aaaa',21242,'HN','aaaa','abc@gmail.com','female'),(4,12,3,'aa','2017-01-01','aaaa',1414,'HN','aa','vv@gmail.com','male'),(5,13,4,'Nam','2017-01-01','fffff',1242,'HN','vvvv','gggg@gmail.com','male'),(6,14,5,'Thắng','2017-01-01','ggggg',11212,'HN','ssss','zzzzz@gmail.com','male');
/*!40000 ALTER TABLE "companyrepresentative" ENABLE KEYS */;

--
-- Table structure for table "cv"
--

DROP TABLE IF EXISTS "cv";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "cv" (
 "idCV" BIGSERIAL PRIMARY KEY NOT NULL,
  "idStudent" int NOT NULL,
  "fullname" char(45) NOT NULL,
  "class" char(45) NOT NULL,
  "gender" char(45) NOT NULL,
  "stdid" int NOT NULL,
  "email" char(45) NOT NULL,
  "foreignLanguage" char(45) NOT NULL,
  "skills" char(45) NOT NULL,
  "experience" char(45) NOT NULL,
  "address" char(45) NOT NULL,
  "phone" char(45) NOT NULL
);

--
-- Dumping data for table "cv"
--


/*!40000 ALTER TABLE "cv" DISABLE KEYS */;
INSERT INTO "cv" VALUES (2,2,'a','a','female',0,'a@gmail.com','a','a','b','a','a');
/*!40000 ALTER TABLE "cv" ENABLE KEYS */;


--
-- Table structure for table "deadline"
--

DROP TABLE IF EXISTS "deadline";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "deadline" (
 "id" BIGSERIAL PRIMARY KEY NOT NULL,
  "type" int NOT NULL,
  "time" date NOT NULL,
  "name" char(45) NOT NULL
);

--
-- Dumping data for table "deadline"
--


/*!40000 ALTER TABLE "deadline" DISABLE KEYS */;
INSERT INTO "deadline" VALUES (1,2,'2017-05-30 00:00:00','Student Report Final-term'),(2,1,'2017-05-30 00:00:00','Student Registration'),(3,3,'2017-05-30 00:00:00','Student Report Final-term');
/*!40000 ALTER TABLE "deadline" ENABLE KEYS */;


--
-- Table structure for table "mark"
--

DROP TABLE IF EXISTS "mark";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "mark" (
 "idMark" BIGSERIAL PRIMARY KEY NOT NULL,
  "StudentID" int NOT NULL,
  "mid_term_mark" int NOT NULL,
  "final_term_mark" int NOT NULL
);

--
-- Dumping data for table "mark"
--


/*!40000 ALTER TABLE "mark" DISABLE KEYS */;
INSERT INTO "mark" VALUES (1,2,7,8);
/*!40000 ALTER TABLE "mark" ENABLE KEYS */;


--
-- Table structure for table "match_info"
--

DROP TABLE IF EXISTS "match_info";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "match_info" (
 "idMatch" BIGSERIAL PRIMARY KEY NOT NULL,
  "CompanyID" int NOT NULL,
  "StudentID" int NOT NULL,
  "topic" char(45) NOT NULL,
  "SpecialityID" int NOT NULL
);

--
-- Dumping data for table "match_info"
--


/*!40000 ALTER TABLE "match_info" DISABLE KEYS */;
INSERT INTO "match_info" VALUES (21,2,7,'aaaaaa',1),(22,2,9,'aaaaaa',1),(23,2,10,'ddfgdfg',2),(24,1,2,'aa',4),(25,1,8,'aa',4);
/*!40000 ALTER TABLE "match_info" ENABLE KEYS */;

--
-- Table structure for table "outline"
--

DROP TABLE IF EXISTS "outline";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "outline" (
 "idOutline" BIGSERIAL PRIMARY KEY NOT NULL,
  "CompanyID" int NOT NULL,
  "content" char(250) NOT NULL
);

--
-- Dumping data for table "outline"
--


-- Table structure for table "rate"
--

DROP TABLE IF EXISTS "rate";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "rate" (
 "idRate" BIGSERIAL PRIMARY KEY NOT NULL,
  "CompanyID" int NOT NULL,
  "StudentID" int NOT NULL,
  "content" char(250) NOT NULL
);

--
-- Dumping data for table "rate"
--


--
-- Table structure for table "registration"
--

DROP TABLE IF EXISTS "registration";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "registration" (
 "idRegistration" BIGSERIAL PRIMARY KEY NOT NULL,
  "CR_ID" int NOT NULL,
  "companyname" char(45) NOT NULL,
  "address" char(60) DEFAULT NULL,
  "comp_instructor_name" char(45) DEFAULT NULL,
  "email" char(45) DEFAULT NULL,
  "phone" char(45) DEFAULT NULL,
  "quantitysutd" int DEFAULT NULL,
  "speciality" char(45) DEFAULT NULL,
  "requirement" char(250) DEFAULT NULL
);

--
-- Dumping data for table "registration"
--

/*!40000 ALTER TABLE "registration" DISABLE KEYS */;
INSERT INTO "registration" VALUES (2,5,'Nhat','Ha Noi','Nhat ','Nhat@gmail.com','12123',12,'NO','no'),(23,11,'FPT','HN','a','a@gmail.com','1234',12,'a','a'),(24,12,'Viettel','HN','b','b@gmail.com','124',23,'f','f'),(25,13,'CMD','HN','c','c@gmail.com','1225',21,'v','f'),(26,14,'Framgia','HN','d','d@gmail.com','12345',11,'g','f');
/*!40000 ALTER TABLE "registration" ENABLE KEYS */;

--
-- Table structure for table "report"
--

DROP TABLE IF EXISTS "report";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "report" (
 "idReport" BIGSERIAL PRIMARY KEY NOT NULL,
  "StudentID" int NOT NULL,
  "Type" int NOT NULL,
  "Content" char(45) NOT NULL,
  "file" char(45) NOT NULL
);

--
-- Dumping data for table "report"
--

--
-- Table structure for table "reportcompanyinstrutor"
--

DROP TABLE IF EXISTS "reportcompanyinstrutor";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "reportcompanyinstrutor" (
 "id" BIGSERIAL PRIMARY KEY NOT NULL,
  "StudentID" int NOT NULL,
  "company_name" char(45) NOT NULL,
  "company_instructor_name" char(45) NOT NULL,
  "company_instructor_phone" char(45) NOT NULL,
  "company_instructor_email" char(45) NOT NULL,
  "student_id" char(45) NOT NULL,
  "student_class" char(45) NOT NULL,
  "conent_report" int NOT NULL
);

--
-- Dumping data for table "reportcompanyinstrutor"
--


--
-- Table structure for table "reportdetail"
--

DROP TABLE IF EXISTS "reportdetail";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "reportdetail" (
 "idreportdetail" BIGSERIAL PRIMARY KEY NOT NULL,
  "point_TTL_1" int NOT NULL,
  "cmt_TTL_1" char(45) NOT NULL,
  "point_TTL_2" int NOT NULL,
  "cmt_TTL_2" char(45) NOT NULL,
  "point_TTL_3" int NOT NULL,
  "cmt_TTL_3" char(45) NOT NULL,
  "point_TTL_4" int NOT NULL,
  "cmt_TTL_4" char(45) NOT NULL,
  "point_TTL_5" int NOT NULL,
  "cmt_TTL_5" char(45) NOT NULL,
  "point_TTL_6" int NOT NULL,
  "point_TTL_7" int NOT NULL,
  "cmt_TTL_6" char(45) NOT NULL,
  "cmt_TTL_7" char(45) NOT NULL,
  "point_WHBF_1" int NOT NULL,
  "point_WHBF_2" int NOT NULL,
  "point_WHBF_3" int NOT NULL,
  "point_WHBF_4" int NOT NULL,
  "point_WHBF_5" int NOT NULL,
  "point_WHBF_6" int NOT NULL,
  "cmt_WHBF_1" char(45) NOT NULL,
  "cmt_WHBF_2" char(45) NOT NULL,
  "cmt_WHBF_3" char(45) NOT NULL,
  "cmt_WHBF_4" char(45) NOT NULL,
  "cmt_WHBF_5" char(45) NOT NULL,
  "cmt_WHBF_6" char(45) NOT NULL,
  "point_A_1" int NOT NULL,
  "point_A_2" int NOT NULL,
  "point_A_3" int NOT NULL,
  "point_A_4" int NOT NULL,
  "point_A_5" int NOT NULL,
  "cmt_A_1" char(45) NOT NULL,
  "cmt_A_2" char(45) NOT NULL,
  "cmt_A_3" char(45) NOT NULL,
  "cmt_A_4" char(45) NOT NULL,
  "cmt_A_5" char(45) NOT NULL,
  "point_I_1" int NOT NULL,
  "point_I_2" int NOT NULL,
  "point_I_3" int NOT NULL,
  "cmt_I_1" char(45) NOT NULL,
  "cmt_I_2" char(45) NOT NULL,
  "cmt_I_3" char(45) NOT NULL,
  "general_assessment" char(45) NOT NULL,
  "StudentID" int DEFAULT NULL
);

--
-- Dumping data for table "reportdetail"
--


/*!40000 ALTER TABLE "reportdetail" DISABLE KEYS */;
INSERT INTO "reportdetail" VALUES (1,2,'aaaaaa',3,'rer',3,'erefff',4,'ereff',4,'erefd',4,3,'rere','rerefff',0,0,0,3,2,2,'','','','','sdfsdf','dfdfff',0,0,0,0,0,'','','','','',0,0,0,'','','','',2);
/*!40000 ALTER TABLE "reportdetail" ENABLE KEYS */;


--
-- Table structure for table "schedule"
--

DROP TABLE IF EXISTS "schedule";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "schedule" (
 "idSchedule" BIGSERIAL PRIMARY KEY NOT NULL,
  "StudentID" int NOT NULL,
  "CollegeIntershipManagerID" int NOT NULL,
  "CollegeInstructorID" int NOT NULL,
  "CompanyInstructorID" int NOT NULL
);

--
-- Dumping data for table "schedule"
--



--
-- Table structure for table "speciality"
--

DROP TABLE IF EXISTS "speciality";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "speciality" (
 "idSpeciality" BIGSERIAL PRIMARY KEY NOT NULL,
  "name" char(50) NOT NULL
);

--
-- Dumping data for table "speciality"
--


INSERT INTO "speciality" VALUES (3,'Android'),(2,'C#'),(1,'Java'),(4,'PHP'),(5,'QA');


--
-- Table structure for table "student"
--

DROP TABLE IF EXISTS "student";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "student" (
 "id" BIGSERIAL PRIMARY KEY NOT NULL,
  "Student_ID" int NOT NULL,
  "name" char(45) DEFAULT NULL,
  "birthday" date DEFAULT NULL,
  "studid" int DEFAULT NULL,
  "class" char(45) DEFAULT NULL,
  "phone" int DEFAULT NULL,
  "address" char(60) DEFAULT NULL,
  "description" char(250) DEFAULT NULL,
  "email" char(45) DEFAULT NULL,
  "gender" char(45) DEFAULT NULL
);

--
-- Dumping data for table "student"
--


/*!40000 ALTER TABLE "student" DISABLE KEYS */;
INSERT INTO "student" VALUES (1,2,'Tata','2017-04-13',3748257,'CNTT 2.02',732497,'Ha Noi','Khong co gi','nhat@gmail.com','female'),(2,7,'Duc','2017-01-01',123,'LTU',1234,'HN','aaafaf','abc@gmail.com','male'),(3,8,'Phuong','2017-01-01',234,'LTU',1234,'HN','vvvv','gggg@gmail.com','male'),(4,9,'Trung','2017-01-01',345,'LTU',1525,'HN','eea','eeeeee@gmail.com','male'),(5,10,'Nam','2017-01-01',456,'LTU',2525,'HN','ee','hhhhhh@gmail.com','male');
/*!40000 ALTER TABLE "student" ENABLE KEYS */;

--
-- Table structure for table "timesheet"
--

DROP TABLE IF EXISTS "timesheet";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "timesheet" (
 "idtimeSheet" BIGSERIAL PRIMARY KEY NOT NULL,
  "ci_id" int NOT NULL,
  "student_id" int NOT NULL,
  "file" char(45) NOT NULL
);

--
-- Dumping data for table "timesheet"
--

--
-- Table structure for table "topic"
--

DROP TABLE IF EXISTS "topic";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "topic" (
 "idTopic" BIGSERIAL PRIMARY KEY NOT NULL,
  "SpecialityID" int NOT NULL,
  "CompanyID" int NOT NULL,
  "content" char(250) NOT NULL,
  "quantity" int NOT NULL,
  "quantityLeft" int NOT NULL
);

--
-- Dumping data for table "topic"
--


/*!40000 ALTER TABLE "topic" DISABLE KEYS */;
INSERT INTO "topic" VALUES (9,1,2,'aaaaaa',3,0),(10,3,2,'ggggg',4,0),(12,2,2,'ddfgdfg',13,0),(13,2,2,'bxbxbxb',5,0),(14,1,1,'sgsgsgsgsgsgsgsgs',3,0),(15,1,1,'',0,0),(16,1,1,'',0,0),(17,1,1,'',0,0),(18,1,1,'',0,0);
/*!40000 ALTER TABLE "topic" ENABLE KEYS */;

--
-- Table structure for table "user"
--

DROP TABLE IF EXISTS "user";
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE "user" (
 "iduser" BIGSERIAL PRIMARY KEY NOT NULL,
  "email" char(45) NOT NULL,
  "password" char(45) NOT NULL,
  "role" int NOT NULL,
  "avatar" char(45) NOT NULL
);

--
-- Dumping data for table "user"
--

/*!40000 ALTER TABLE "user" DISABLE KEYS */;
INSERT INTO "user" VALUES (1,'admin@gmail.com','123456',1,''),(2,'student@gmail.com','123456',2,''),(3,'collegeinstructor@gmail.com','123456',3,''),(4,'collegeintershipmanager@gmail.com','123456',4,''),(5,'companyrepresentative@gmail.com','123456',5,''),(6,'companyinstructor@gmail.com','123456',6,''),(7,'student1@gmail.com','123456',2,''),(8,'student2@gmail.com','123456',2,''),(9,'student3@gmail.com','123456',2,''),(10,'student4@gmail.com','123456',2,''),(11,'comprepresent1@gmail.com','123456',5,''),(12,'comprepresent2@gmail.com','123456',5,''),(13,'comprepresent3@gmail.com','123456',5,''),(14,'comprepresent4@gmail.com','123456',5,'');
/*!40000 ALTER TABLE "user" ENABLE KEYS */;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-05-23 22:32:33
