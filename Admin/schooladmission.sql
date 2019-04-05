-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2019 at 11:20 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schooladmission`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `ApplicationId` int(10) NOT NULL,
  `UserId` int(10) NOT NULL,
  `SchoolId` int(10) NOT NULL,
  `IsSubmitted` bit(10) DEFAULT NULL,
  `IsDeleted` bit(10) DEFAULT NULL,
  `ApplicationDate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `IsSaved` bit(10) DEFAULT NULL,
  `ApplicationStatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`ApplicationId`, `UserId`, `SchoolId`, `IsSubmitted`, `IsDeleted`, `ApplicationDate`, `IsSaved`, `ApplicationStatus`) VALUES
(52, 20, 2, b'0000000001', NULL, '2019-03-18 18:04:27.077995', NULL, 1),
(53, 20, 2, b'0000000001', NULL, '2019-03-18 18:04:31.277181', NULL, 0),
(54, 20, 2, b'0000000001', NULL, '2019-03-19 15:31:16.203130', NULL, 0),
(55, 19, 2, b'0000000001', NULL, '2019-03-27 05:28:55.587449', NULL, 0),
(56, 21, 2, b'0000000001', NULL, '2019-04-05 06:53:54.120699', NULL, 0),
(57, 21, 4, b'0000000001', NULL, '2019-04-05 08:57:53.555637', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `CityId` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CityId`, `Name`) VALUES
(1, 'Toronto');

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `DivisionId` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`DivisionId`, `Description`) VALUES
(1, 'Division1'),
(2, 'Division2'),
(3, 'Division3'),
(4, 'Division4'),
(5, 'Division5');

-- --------------------------------------------------------

--
-- Stand-in structure for view `report`
-- (See below for the actual view)
--
CREATE TABLE `report` (
`ApplicationId` int(10)
,`FirstName` text
,`LastName` text
,`Name` text
,`ApplicationStatus` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `ResponseId` int(11) NOT NULL,
  `ApplicationId` int(11) NOT NULL,
  `QuestionId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `ResponseDate` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `Response` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`ResponseId`, `ApplicationId`, `QuestionId`, `UserId`, `ResponseDate`, `Response`) VALUES
(15, 54, 1, 20, '2019-03-19 15:31:16.346055', '10'),
(16, 54, 2, 20, '2019-03-19 15:31:16.346055', '10'),
(17, 55, 1, 19, '2019-03-27 05:28:55.628474', ''),
(18, 55, 2, 19, '2019-03-27 05:28:55.628474', ''),
(19, 56, 1, 21, '2019-04-05 06:53:54.168697', '4'),
(20, 56, 2, 21, '2019-04-05 06:53:54.168697', '56'),
(21, 57, 3, 21, '2019-04-05 08:57:53.559634', 'Test'),
(22, 57, 4, 21, '2019-04-05 08:57:53.559634', 'Answer');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `SchoolId` int(11) NOT NULL,
  `Name` text NOT NULL,
  `DivisionId` int(11) NOT NULL,
  `SchoolTypeId` int(11) NOT NULL,
  `SchoolSpecializationId` int(11) NOT NULL,
  `CityId` int(11) NOT NULL,
  `Address` text,
  `Phone` int(11) DEFAULT NULL,
  `Fax` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`SchoolId`, `Name`, `DivisionId`, `SchoolTypeId`, `SchoolSpecializationId`, `CityId`, `Address`, `Phone`, `Fax`) VALUES
(1, 'Northern Secondary School\r\n', 1, 3, 3, 1, '851 Mt Pleasant Rd, Toronto, ON M4P 2L5, Canada', 63930270, NULL),
(2, 'Jarvis Collegiate Institute', 2, 1, 1, 1, '495 Jarvis St, Toronto, ON M4Y 2G8, Canada', 163930140, NULL),
(4, 'Georges Vanier Secondary School', 3, 2, 2, 1, '3000 Don Mills Rd E, North York, ON M2J 3B6, Canada', 163953250, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schoolapplicationquestion`
--

CREATE TABLE `schoolapplicationquestion` (
  `SchoolApplicationQuestionId` int(11) NOT NULL,
  `SchoolId` int(11) NOT NULL,
  `Question` text NOT NULL,
  `QuestionInstruction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolapplicationquestion`
--

INSERT INTO `schoolapplicationquestion` (`SchoolApplicationQuestionId`, `SchoolId`, `Question`, `QuestionInstruction`) VALUES
(1, 2, 'Enter Your 10th Graded ', ''),
(2, 2, 'Enter Your 9th Grade', ''),
(3, 4, 'Test', ''),
(4, 4, 'Question 2', ''),
(5, 2, 'ccc', '');

-- --------------------------------------------------------

--
-- Table structure for table `schoolspecialization`
--

CREATE TABLE `schoolspecialization` (
  `SchoolSpecializationId` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolspecialization`
--

INSERT INTO `schoolspecialization` (`SchoolSpecializationId`, `Description`) VALUES
(1, 'Music'),
(2, 'Sports'),
(3, 'Education');

-- --------------------------------------------------------

--
-- Table structure for table `schooltype`
--

CREATE TABLE `schooltype` (
  `SchoolTypeId` int(11) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schooltype`
--

INSERT INTO `schooltype` (`SchoolTypeId`, `Description`) VALUES
(1, 'Boys'),
(2, 'Girls'),
(3, 'Mixed'),
(4, 'Special');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserId` int(11) NOT NULL,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` text NOT NULL,
  `MobileNumber` int(10) NOT NULL,
  `Password` text NOT NULL,
  `UserType` int(11) NOT NULL,
  `IsActive` int(11) NOT NULL,
  `Address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserId`, `FirstName`, `LastName`, `Email`, `MobileNumber`, `Password`, `UserType`, `IsActive`, `Address`) VALUES
(19, 'Joseph', 'Pandya', 'admin@gmail.com', 2147483647, '202cb962ac59075b964b07152d234b70', 1, 0, ''),
(20, 'Mark', 'Baj', 'mark@gmail.com', 2147483647, '0b3bc9ce555f07d127c6da44337e364f', 2, 1, ''),
(21, 'Mayuri', 'Vaghela', 'mayuri@gmail.com', 2147483647, '202cb962ac59075b964b07152d234b70', 2, 1, 'Mayri Vaghea ,Hourse 51 ,ontario road'),
(22, 'Clerk', 'School', 'clerk@gmail.com', 2147483647, '202cb962ac59075b964b07152d234b70', 3, 1, 'clerks  address');

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `UserTypeId` int(11) NOT NULL,
  `Description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`UserTypeId`, `Description`) VALUES
(1, 'Admin'),
(2, 'Student'),
(3, 'School Clerk');

-- --------------------------------------------------------

--
-- Structure for view `report`
--
DROP TABLE IF EXISTS `report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `report`  AS  select `application`.`ApplicationId` AS `ApplicationId`,`user`.`FirstName` AS `FirstName`,`user`.`LastName` AS `LastName`,`school`.`Name` AS `Name`,`application`.`ApplicationStatus` AS `ApplicationStatus` from ((`application` join `user` on((`application`.`UserId` = `user`.`UserId`))) join `school` on((`application`.`SchoolId` = `school`.`SchoolId`))) order by `application`.`ApplicationId` desc ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`ApplicationId`),
  ADD KEY `UserId` (`UserId`,`SchoolId`),
  ADD KEY `SchoolId` (`SchoolId`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`CityId`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`DivisionId`),
  ADD KEY `DivisionId` (`DivisionId`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`ResponseId`),
  ADD KEY `ApplicationId` (`ApplicationId`,`QuestionId`,`UserId`),
  ADD KEY `QuestionId` (`QuestionId`),
  ADD KEY `UserId` (`UserId`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`SchoolId`),
  ADD KEY `DivisionId` (`DivisionId`),
  ADD KEY `SchoolTypeId` (`SchoolTypeId`),
  ADD KEY `DivisionId_2` (`DivisionId`,`SchoolTypeId`),
  ADD KEY `SchoolSpecializationId` (`SchoolSpecializationId`),
  ADD KEY `CityId` (`CityId`);

--
-- Indexes for table `schoolapplicationquestion`
--
ALTER TABLE `schoolapplicationquestion`
  ADD PRIMARY KEY (`SchoolApplicationQuestionId`),
  ADD KEY `SchoolId` (`SchoolId`);

--
-- Indexes for table `schoolspecialization`
--
ALTER TABLE `schoolspecialization`
  ADD PRIMARY KEY (`SchoolSpecializationId`);

--
-- Indexes for table `schooltype`
--
ALTER TABLE `schooltype`
  ADD PRIMARY KEY (`SchoolTypeId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserId`),
  ADD KEY `UserType` (`UserType`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`UserTypeId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `ApplicationId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `CityId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `DivisionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `ResponseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `SchoolId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schoolapplicationquestion`
--
ALTER TABLE `schoolapplicationquestion`
  MODIFY `SchoolApplicationQuestionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `schoolspecialization`
--
ALTER TABLE `schoolspecialization`
  MODIFY `SchoolSpecializationId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `schooltype`
--
ALTER TABLE `schooltype`
  MODIFY `SchoolTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `UserTypeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application`
--
ALTER TABLE `application`
  ADD CONSTRAINT `application_ibfk_1` FOREIGN KEY (`UserId`) REFERENCES `user` (`UserId`),
  ADD CONSTRAINT `application_ibfk_2` FOREIGN KEY (`SchoolId`) REFERENCES `school` (`SchoolId`);

--
-- Constraints for table `response`
--
ALTER TABLE `response`
  ADD CONSTRAINT `response_ibfk_1` FOREIGN KEY (`ApplicationId`) REFERENCES `application` (`ApplicationId`),
  ADD CONSTRAINT `response_ibfk_2` FOREIGN KEY (`QuestionId`) REFERENCES `schoolapplicationquestion` (`SchoolApplicationQuestionId`),
  ADD CONSTRAINT `response_ibfk_3` FOREIGN KEY (`UserId`) REFERENCES `user` (`UserId`);

--
-- Constraints for table `school`
--
ALTER TABLE `school`
  ADD CONSTRAINT `school_ibfk_1` FOREIGN KEY (`DivisionId`) REFERENCES `division` (`DivisionId`),
  ADD CONSTRAINT `school_ibfk_2` FOREIGN KEY (`SchoolTypeId`) REFERENCES `schooltype` (`SchoolTypeId`),
  ADD CONSTRAINT `school_ibfk_3` FOREIGN KEY (`SchoolSpecializationId`) REFERENCES `schoolspecialization` (`SchoolSpecializationId`),
  ADD CONSTRAINT `school_ibfk_4` FOREIGN KEY (`CityId`) REFERENCES `city` (`CityId`);

--
-- Constraints for table `schoolapplicationquestion`
--
ALTER TABLE `schoolapplicationquestion`
  ADD CONSTRAINT `schoolapplicationquestion_ibfk_1` FOREIGN KEY (`SchoolId`) REFERENCES `school` (`SchoolId`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`UserType`) REFERENCES `usertype` (`UserTypeId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
