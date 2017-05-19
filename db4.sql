-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 18, 2017 lúc 01:05 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_sie`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `aspiration`
--

CREATE TABLE `aspiration` (
  `idAspiration` int(11) NOT NULL,
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
  `compEmail` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `aspiration`
--

INSERT INTO `aspiration` (`idAspiration`, `StudenID`, `fullname`, `class`, `gender`, `laptop`, `studnumber`, `address`, `phone`, `email`, `language_certification`, `language_point`, `stud_own_skill`, `stud_learn_skill`, `speciality1`, `speciality2`, `speciality3`, `compHave`, `compName`, `compAdderss`, `compInstructor`, `compPhone`, `compEmail`) VALUES
(9, 2, 'a', 'a', 'female', 1, 0, 'a', 0, 'a@gmail.com', 'a', 0, 'a', 'a', 'b', 'a', 'a', 1, 'a', 'a', 'a', 'b', 'bb@gmali.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collegeinstructor`
--

CREATE TABLE `collegeinstructor` (
  `id` int(11) NOT NULL,
  `CI_ID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `description` varchar(250) NOT NULL,
  `email` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `collegeinstructor`
--

INSERT INTO `collegeinstructor` (`id`, `CI_ID`, `name`, `birthday`, `phone`, `address`, `description`, `email`, `position`, `gender`) VALUES
(1, 3, 'a', '2017-04-21', 32479832, 'a', 'a', 'a@gmail.com', 'a', 'male');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collegeintershipmanager`
--

CREATE TABLE `collegeintershipmanager` (
  `id` int(11) NOT NULL,
  `CIM_ID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `description` varchar(250) NOT NULL,
  `email` varchar(45) NOT NULL,
  `position` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `collegeintershipmanager`
--

INSERT INTO `collegeintershipmanager` (`id`, `CIM_ID`, `name`, `birthday`, `phone`, `address`, `description`, `email`, `position`, `gender`) VALUES
(1, 4, 'a', '2017-04-21', 23432442, 'a', 'a', 'a@gmail.com', 'a', 'female');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `idComment` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `Type` varchar(45) NOT NULL,
  `Content` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`idComment`, `StudentID`, `Type`, `Content`) VALUES
(2, 2, 'aa', 'aa');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

CREATE TABLE `company` (
  `idCompany` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Address` varchar(45) NOT NULL,
  `PhoneNumber` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`idCompany`, `Name`, `Address`, `PhoneNumber`) VALUES
(1, 'nhat', 'HN', '965616516');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `companyinstructor`
--

CREATE TABLE `companyinstructor` (
  `id` int(11) NOT NULL,
  `CI_ID` int(11) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `position` varchar(45) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `description` varchar(250) NOT NULL,
  `email` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `companyinstructor`
--

INSERT INTO `companyinstructor` (`id`, `CI_ID`, `CompanyID`, `name`, `birthday`, `position`, `phone`, `address`, `description`, `email`, `gender`) VALUES
(1, 6, 1, 'a', '2017-04-21', 'a', 234245, 'aa', 'a', 'adsafasdf@gmail.com', 'female');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `companyrepresentative`
--

CREATE TABLE `companyrepresentative` (
  `id` int(11) NOT NULL,
  `CR_ID` int(11) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `birthday` date NOT NULL,
  `position` varchar(45) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(60) NOT NULL,
  `description` varchar(250) NOT NULL,
  `email` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `companyrepresentative`
--

INSERT INTO `companyrepresentative` (`id`, `CR_ID`, `CompanyID`, `name`, `birthday`, `position`, `phone`, `address`, `description`, `email`, `gender`) VALUES
(2, 5, 1, 'a', '2017-04-12', 'bbb', 1, 'a', 'a', 'a@gmail.com', 'female');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cv`
--

CREATE TABLE `cv` (
  `idCV` int(11) NOT NULL,
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
  `phone` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `cv`
--

INSERT INTO `cv` (`idCV`, `idStudent`, `fullname`, `class`, `gender`, `stdid`, `email`, `foreignLanguage`, `skills`, `experience`, `address`, `phone`) VALUES
(2, 2, 'a', 'a', 'female', 0, 'a@gmail.com', 'a', 'a', 'b', 'a', 'a');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `mark`
--

CREATE TABLE `mark` (
  `idMark` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Value` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `match_info`
--

CREATE TABLE `match_info` (
  `idMatch` int(11) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `outline`
--

CREATE TABLE `outline` (
  `idOutline` int(11) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `content` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `rate`
--

CREATE TABLE `rate` (
  `idRate` int(11) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `content` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `registration`
--

CREATE TABLE `registration` (
  `idRegistration` int(11) NOT NULL,
  `CR_ID` int(11) NOT NULL,
  `companyname` varchar(45) NOT NULL,
  `address` varchar(60) DEFAULT NULL,
  `comp_instructor_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `quantitysutd` int(11) DEFAULT NULL,
  `speciality` varchar(45) DEFAULT NULL,
  `requirement` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `registration`
--

INSERT INTO `registration` (`idRegistration`, `CR_ID`, `companyname`, `address`, `comp_instructor_name`, `email`, `phone`, `quantitysutd`, `speciality`, `requirement`) VALUES
(2, 5, 'Tren troi', 'Tren troi', 'Nhat', 'nhat@gmail.com', '123456789', 500, 'No', 'No');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `report`
--

CREATE TABLE `report` (
  `idReport` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Content` varchar(45) NOT NULL,
  `file` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reportcompanyinstrutor`
--

CREATE TABLE `reportcompanyinstrutor` (
  `id` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `company_name` varchar(45) NOT NULL,
  `company_instructor_name` varchar(45) NOT NULL,
  `company_instructor_phone` varchar(45) NOT NULL,
  `company_instructor_email` varchar(45) NOT NULL,
  `student_id` varchar(45) NOT NULL,
  `student_class` varchar(45) NOT NULL,
  `conent_report` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reportdetail`
--

CREATE TABLE `reportdetail` (
  `idreportdetail` int(11) NOT NULL,
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
  `general_assessment` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `schedule`
--

CREATE TABLE `schedule` (
  `idSchedule` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `CollegeIntershipManagerID` int(11) NOT NULL,
  `CollegeInstructorID` int(11) NOT NULL,
  `CompanyInstructorID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `speciality`
--

CREATE TABLE `speciality` (
  `idSpeciality` int(11) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `Student_ID` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `studid` int(8) DEFAULT NULL,
  `class` varchar(45) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `student`
--

INSERT INTO `student` (`id`, `Student_ID`, `name`, `birthday`, `studid`, `class`, `phone`, `address`, `description`, `email`, `gender`) VALUES
(1, 2, 'Tata', '2017-04-13', 3748257, 'CNTT 2.02', 732497, 'Ha Noi', 'Khong co gi', 'nhat@gmail.com', 'female');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `timesheet`
--

CREATE TABLE `timesheet` (
  `idtimeSheet` int(11) NOT NULL,
  `ci_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `file` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `topic`
--

CREATE TABLE `topic` (
  `idTopic` int(11) NOT NULL,
  `SpecialityID` int(11) NOT NULL,
  `CompanyID` int(11) NOT NULL,
  `content` varchar(250) CHARACTER SET utf8 NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `role` int(11) NOT NULL,
  `avatar` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`iduser`, `email`, `password`, `role`, `avatar`) VALUES
(1, 'admin@gmail.com', '123456', 1, ''),
(2, 'student@gmail.com', '123456', 2, ''),
(3, 'collegeinstructor@gmail.com', '123456', 3, ''),
(4, 'collegeintershipmanager@gmail.com', '123456', 4, ''),
(5, 'companyrepresentative@gmail.com', '123456', 5, ''),
(6, 'companyinstructor@gmail.com', '123456', 6, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `aspiration`
--
ALTER TABLE `aspiration`
  ADD PRIMARY KEY (`idAspiration`),
  ADD KEY `student_idx` (`StudenID`);

--
-- Chỉ mục cho bảng `collegeinstructor`
--
ALTER TABLE `collegeinstructor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CollegeInstructor_idx` (`CI_ID`);

--
-- Chỉ mục cho bảng `collegeintershipmanager`
--
ALTER TABLE `collegeintershipmanager`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CollegeIntershipManager_idx` (`CIM_ID`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`idComment`),
  ADD KEY `student_idx` (`StudentID`);

--
-- Chỉ mục cho bảng `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`idCompany`),
  ADD KEY `company` (`idCompany`);

--
-- Chỉ mục cho bảng `companyinstructor`
--
ALTER TABLE `companyinstructor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CompanyInstructor_idx` (`CI_ID`),
  ADD KEY `Company1_idx` (`CompanyID`);

--
-- Chỉ mục cho bảng `companyrepresentative`
--
ALTER TABLE `companyrepresentative`
  ADD PRIMARY KEY (`id`),
  ADD KEY `CompanyRepresentatives_idx` (`CR_ID`),
  ADD KEY `Company_idx` (`CompanyID`);

--
-- Chỉ mục cho bảng `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`idCV`),
  ADD KEY `fk11_idx` (`idStudent`);

--
-- Chỉ mục cho bảng `mark`
--
ALTER TABLE `mark`
  ADD PRIMARY KEY (`idMark`),
  ADD KEY `Student_idx` (`StudentID`);

--
-- Chỉ mục cho bảng `match_info`
--
ALTER TABLE `match_info`
  ADD PRIMARY KEY (`idMatch`),
  ADD KEY `idMatch` (`idMatch`,`CompanyID`,`StudentID`),
  ADD KEY `CompanyID` (`CompanyID`),
  ADD KEY `StudentID` (`StudentID`);

--
-- Chỉ mục cho bảng `outline`
--
ALTER TABLE `outline`
  ADD PRIMARY KEY (`idOutline`),
  ADD KEY `content` (`content`),
  ADD KEY `idOutline` (`idOutline`,`CompanyID`,`content`),
  ADD KEY `CompanyID` (`CompanyID`);

--
-- Chỉ mục cho bảng `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`idRate`),
  ADD KEY `idRate` (`idRate`,`CompanyID`,`StudentID`,`content`),
  ADD KEY `CompanyID` (`CompanyID`),
  ADD KEY `StudentID` (`StudentID`);

--
-- Chỉ mục cho bảng `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`idRegistration`),
  ADD KEY `CollegeIntershipManager_idx` (`CR_ID`);

--
-- Chỉ mục cho bảng `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`idReport`),
  ADD KEY `Student_idx` (`StudentID`);

--
-- Chỉ mục cho bảng `reportcompanyinstrutor`
--
ALTER TABLE `reportcompanyinstrutor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `studentkey_idx` (`StudentID`),
  ADD KEY `fk111_idx` (`conent_report`);

--
-- Chỉ mục cho bảng `reportdetail`
--
ALTER TABLE `reportdetail`
  ADD PRIMARY KEY (`idreportdetail`),
  ADD KEY `idx111` (`idreportdetail`);

--
-- Chỉ mục cho bảng `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`idSchedule`),
  ADD KEY `student_idx` (`StudentID`),
  ADD KEY `key1_idx` (`CompanyInstructorID`),
  ADD KEY `key2_idx` (`CollegeInstructorID`),
  ADD KEY `key3` (`CollegeIntershipManagerID`);

--
-- Chỉ mục cho bảng `speciality`
--
ALTER TABLE `speciality`
  ADD PRIMARY KEY (`idSpeciality`),
  ADD KEY `idSpeciality` (`idSpeciality`),
  ADD KEY `name` (`name`),
  ADD KEY `idSpeciality_2` (`idSpeciality`,`name`),
  ADD KEY `idSpeciality_3` (`idSpeciality`,`CompanyID`,`name`),
  ADD KEY `CompanyID` (`CompanyID`);

--
-- Chỉ mục cho bảng `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student` (`Student_ID`);

--
-- Chỉ mục cho bảng `timesheet`
--
ALTER TABLE `timesheet`
  ADD PRIMARY KEY (`idtimeSheet`),
  ADD KEY `fk12_idx` (`student_id`),
  ADD KEY `fk13_idx` (`ci_id`);

--
-- Chỉ mục cho bảng `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`idTopic`),
  ADD KEY `idTopic` (`idTopic`,`SpecialityID`,`CompanyID`,`content`,`quantity`),
  ADD KEY `SpecialityID` (`SpecialityID`),
  ADD KEY `CompanyID` (`CompanyID`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `aspiration`
--
ALTER TABLE `aspiration`
  MODIFY `idAspiration` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT cho bảng `collegeinstructor`
--
ALTER TABLE `collegeinstructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `collegeintershipmanager`
--
ALTER TABLE `collegeintershipmanager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `idComment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `company`
--
ALTER TABLE `company`
  MODIFY `idCompany` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `companyinstructor`
--
ALTER TABLE `companyinstructor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `companyrepresentative`
--
ALTER TABLE `companyrepresentative`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `cv`
--
ALTER TABLE `cv`
  MODIFY `idCV` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `mark`
--
ALTER TABLE `mark`
  MODIFY `idMark` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `match_info`
--
ALTER TABLE `match_info`
  MODIFY `idMatch` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `outline`
--
ALTER TABLE `outline`
  MODIFY `idOutline` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `rate`
--
ALTER TABLE `rate`
  MODIFY `idRate` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `registration`
--
ALTER TABLE `registration`
  MODIFY `idRegistration` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT cho bảng `report`
--
ALTER TABLE `report`
  MODIFY `idReport` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `reportcompanyinstrutor`
--
ALTER TABLE `reportcompanyinstrutor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `reportdetail`
--
ALTER TABLE `reportdetail`
  MODIFY `idreportdetail` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `schedule`
--
ALTER TABLE `schedule`
  MODIFY `idSchedule` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `speciality`
--
ALTER TABLE `speciality`
  MODIFY `idSpeciality` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `timesheet`
--
ALTER TABLE `timesheet`
  MODIFY `idtimeSheet` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `topic`
--
ALTER TABLE `topic`
  MODIFY `idTopic` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `aspiration`
--
ALTER TABLE `aspiration`
  ADD CONSTRAINT `student1` FOREIGN KEY (`StudenID`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `collegeinstructor`
--
ALTER TABLE `collegeinstructor`
  ADD CONSTRAINT `CollegeInstructor` FOREIGN KEY (`CI_ID`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `collegeintershipmanager`
--
ALTER TABLE `collegeintershipmanager`
  ADD CONSTRAINT `CollegeIntershipManager` FOREIGN KEY (`CIM_ID`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `student2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `companyinstructor`
--
ALTER TABLE `companyinstructor`
  ADD CONSTRAINT `Company1` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`idCompany`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `CompanyInstructor` FOREIGN KEY (`CI_ID`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `companyrepresentative`
--
ALTER TABLE `companyrepresentative`
  ADD CONSTRAINT `Company` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`idCompany`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `CompanyRepresentatives` FOREIGN KEY (`CR_ID`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `fk11` FOREIGN KEY (`idStudent`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `mark`
--
ALTER TABLE `mark`
  ADD CONSTRAINT `Student3` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `match_info`
--
ALTER TABLE `match_info`
  ADD CONSTRAINT `match_info_ibfk_1` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`idCompany`),
  ADD CONSTRAINT `match_info_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`);

--
-- Các ràng buộc cho bảng `outline`
--
ALTER TABLE `outline`
  ADD CONSTRAINT `outline_ibfk_1` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`idCompany`);

--
-- Các ràng buộc cho bảng `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`idCompany`),
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`);

--
-- Các ràng buộc cho bảng `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `CollegeIntershipManager1` FOREIGN KEY (`CR_ID`) REFERENCES `companyrepresentative` (`CR_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `Student4` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `reportcompanyinstrutor`
--
ALTER TABLE `reportcompanyinstrutor`
  ADD CONSTRAINT `fk111` FOREIGN KEY (`conent_report`) REFERENCES `reportdetail` (`idreportdetail`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `studentkey` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `key1` FOREIGN KEY (`CompanyInstructorID`) REFERENCES `companyinstructor` (`CI_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `key2` FOREIGN KEY (`CollegeInstructorID`) REFERENCES `collegeinstructor` (`CI_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `key3` FOREIGN KEY (`CollegeIntershipManagerID`) REFERENCES `collegeintershipmanager` (`CIM_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `student5` FOREIGN KEY (`StudentID`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `speciality`
--
ALTER TABLE `speciality`
  ADD CONSTRAINT `speciality_ibfk_1` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`idCompany`);

--
-- Các ràng buộc cho bảng `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `Student_User` FOREIGN KEY (`Student_ID`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `timesheet`
--
ALTER TABLE `timesheet`
  ADD CONSTRAINT `fk12` FOREIGN KEY (`student_id`) REFERENCES `student` (`Student_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk13` FOREIGN KEY (`ci_id`) REFERENCES `companyinstructor` (`CI_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Các ràng buộc cho bảng `topic`
--
ALTER TABLE `topic`
  ADD CONSTRAINT `topic_ibfk_1` FOREIGN KEY (`SpecialityID`) REFERENCES `speciality` (`idSpeciality`),
  ADD CONSTRAINT `topic_ibfk_2` FOREIGN KEY (`CompanyID`) REFERENCES `company` (`idCompany`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
