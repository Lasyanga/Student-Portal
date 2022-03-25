-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 09:27 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qcu_student`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_role_tbl`
--

CREATE TABLE `account_role_tbl` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_role_tbl`
--

INSERT INTO `account_role_tbl` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'student'),
(3, 'prof');

-- --------------------------------------------------------

--
-- Table structure for table `addtable`
--

CREATE TABLE `addtable` (
  `id` int(11) NOT NULL,
  `faculty` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL,
  `start_time` varchar(250) NOT NULL,
  `end_time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addtable`
--

INSERT INTO `addtable` (`id`, `faculty`, `course`, `subject`, `room`, `start_time`, `end_time`) VALUES
(47, 'Information Technology', 'Computer Science', 'OOP C++', 'CP19', '7:30 am', '9:00 am'),
(48, 'Engineering', 'Computer Engineering ', 'Discrete Mathematics', 'NB15', '10:00 am', '12:00 pm'),
(50, 'Management Studies', 'Micro Economics', 'Economics', 'PK22', '1:00 pm', '2:00 pm'),
(51, 'Philosophy', 'The History of Ancient Philosophy', 'The Philosophy of Philosophy', 'SB11', '2:00 pm', '3:00 pm'),
(52, 'Natural Science', 'Biological Anthropology Course', 'Biology', 'CP09', '3:00 pm', '5:00 pm'),
(53, 'Commerce', 'Higher Program in Business Management', 'Business Studies', 'DM28', '8:00 am', '10:30 am');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admission_enroll`
--

CREATE TABLE `admission_enroll` (
  `control_id` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admission_enroll`
--

INSERT INTO `admission_enroll` (`control_id`, `fname`, `lname`, `email`, `location`) VALUES
('QCU1340760727450', 'Carl Vincent', 'Bacalso', 'Bacalsocarlvincent@gmail.com', '../adir/Admission/Bacalso, Carl Vincent/inbound7080342570111433987.jpg'),
('QCU7104911177711', 'Carl Vincent', 'Bacalso', 'Bacalsocarlvincent@gmail.com', '../adir/Admission/Bacalso, Carl Vincent/inbound7080342570111433987.jpg'),
('QCU5202503042061', 'Dorothy', 'Ogburn', 'asianpro597@gmail.com', '../adir/Admission/Ogburn, Dorothy/School Admission Form (2).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `admission_test`
--

CREATE TABLE `admission_test` (
  `student_id` varchar(20) NOT NULL,
  `authenticate` varchar(64) DEFAULT NULL,
  `enrolled` varchar(30) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admission_test`
--

INSERT INTO `admission_test` (`student_id`, `authenticate`, `enrolled`, `fname`, `lname`, `email`, `location`) VALUES
('1234562', 'PASSED', 'NO', 'Mikaela', 'Baldoz', '', ''),
('1234564', 'NOT PASSED', 'NO', 'John', 'Wick', '', ''),
('1234565', 'PASSED', 'YES', 'Shila', 'Karago', '', ''),
('QCU1970447723468', 'PASSED', 'NO', 'Vimy', 'Garcia', 'vimykim@gmail.com', '../adir/Admission/Garcia, Vimy/ac49cb34182058c7bfd181c508a66910.jpg'),
('QCU3154685630165', 'PASSED', 'NO', 'Bacalso', 'Carl Vincent', 'Bacalsocarlvincent@gmail.com', '../adir/Admission/Carl Vincent, Bacalso/inbound7080342570111433987.jpg'),
('QCU4676235182617', 'PASSED', 'NO', 'Mary Ann', 'Magleo', 'mary.ann.santiago.magleo@gmail.com', ''),
('QCU4722559715787', 'PASSED', 'NO', 'Crizel Anne ', 'Carig', 'crizelanne.carig@gmail.com', ''),
('QCU5727494616336', 'UNAVAILABLE', 'NO', 'Zoro', 'King', 'iinsomia504@gmail.com', ''),
('TEST', 'PASSED', 'NO', 'TESTA', 'TESTB', 'flarep6@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_tbl`
--

CREATE TABLE `announcement_tbl` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_posted` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_edited` varchar(100) NOT NULL,
  `purpose` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement_tbl`
--

INSERT INTO `announcement_tbl` (`post_id`, `user_id`, `title`, `content`, `date_posted`, `status`, `date_edited`, `purpose`) VALUES
(76, 443548, 'new announcement', 'ito ay announement para sa lahat', 'February 23, 2021, 9:23 pm', 'Posted', '', 'Announcement'),
(77, 10011, 'this announcement is my student only', 'here is our learning materiala', 'February 23, 2021, 9:25 pm', 'Posted', '', 'Announcement'),
(78, 10011, 'here upload materials', 'please download this', 'February 24, 2021, 3:40 am', 'Posted', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_code` varchar(259) NOT NULL,
  `course_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_code`, `course_name`) VALUES
(2, 'BSCS', 'Computer Science'),
(3, 'CS55', 'Computer Engineering '),
(6, 'CS02', 'Computer Security '),
(9, 'WD51', 'Web Development'),
(10, '5051', 'Hardware and Networking'),
(11, '6002', 'Advance Wordpress'),
(12, 'ME55', 'Micro Economics'),
(13, 'ST00', 'Stock Trading'),
(14, 'MA85', 'Macro Economics'),
(15, 'AP55', 'The History of Ancient Philosophy'),
(16, 'BC25', 'Biological Anthropology Course'),
(17, 'BE05', 'Higher Program in Business Management');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `faculty` varchar(250) NOT NULL,
  `course` varchar(250) NOT NULL,
  `subject` varchar(250) NOT NULL,
  `room` varchar(250) NOT NULL,
  `start_time` varchar(250) NOT NULL,
  `end_time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enrolled_students`
--

CREATE TABLE `enrolled_students` (
  `student_id` int(7) NOT NULL,
  `student_status` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `yrlvl` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `schoolyear` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `term` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `campus_area` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `student_course` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `mname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `sname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `gender` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `civil_status` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `citizenship` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `bdate` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `birthplace` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `religion` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `add_st_num` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `add_st_name` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `add_subd` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `add_brgy` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `add_city` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `add_province` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `add_zipcode` int(20) DEFAULT NULL,
  `checker` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `per_add_st_num` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `per_add_st_name` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `per_add_subd` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `per_add_brgy` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `per_add_city` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `per_add_province` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `per_add_zipcode` int(4) DEFAULT NULL,
  `telno` varchar(20) DEFAULT NULL,
  `mobno` varchar(20) DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lastsch_type` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lastsch_name` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lastsch_program` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lastsch_graddate` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lastsch_sy` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lastsch_yrlevel` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `lastsch_term` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fathersname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fatherslname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fathersmname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fatherssname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fatherscontact` varchar(20) DEFAULT NULL,
  `fathersemail` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `fathersoccupation` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `mothersname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `motherslname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `mothersmname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `motherssname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `motherscontact` varchar(20) DEFAULT NULL,
  `mothersemail` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `mothersoccupation` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `guardiansname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `guardianslname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `guardiansmname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `guardianssname` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `guardianscontact` varchar(20) DEFAULT NULL,
  `guardiansemail` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `guardiansoccupation` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `guardiansrelationship` varchar(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enrolled_students`
--

INSERT INTO `enrolled_students` (`student_id`, `student_status`, `yrlvl`, `schoolyear`, `term`, `campus_area`, `student_course`, `fname`, `mname`, `lname`, `sname`, `gender`, `civil_status`, `citizenship`, `bdate`, `birthplace`, `religion`, `add_st_num`, `add_st_name`, `add_subd`, `add_brgy`, `add_city`, `add_province`, `add_zipcode`, `checker`, `per_add_st_num`, `per_add_st_name`, `per_add_subd`, `per_add_brgy`, `per_add_city`, `per_add_province`, `per_add_zipcode`, `telno`, `mobno`, `email`, `lastsch_type`, `lastsch_name`, `lastsch_program`, `lastsch_graddate`, `lastsch_sy`, `lastsch_yrlevel`, `lastsch_term`, `fathersname`, `fatherslname`, `fathersmname`, `fatherssname`, `fatherscontact`, `fathersemail`, `fathersoccupation`, `mothersname`, `motherslname`, `mothersmname`, `motherssname`, `motherscontact`, `mothersemail`, `mothersoccupation`, `guardiansname`, `guardianslname`, `guardiansmname`, `guardianssname`, `guardianscontact`, `guardiansemail`, `guardiansoccupation`, `guardiansrelationship`, `location`) VALUES
(21001, 'New Student', '1st Year', '2020-2021', '1ST', 'San Bartolome', 'BSIT', 'John Paul', 'Malib', 'Org', '', 'Male', 'Single', 'Filipino', '02/23/1992', 'Sogo', 'Pope', '3', 'san marano', '', 'Sta Monica', 'Quezon City', 'Metro Manila', 1004, '', '3', 'san marano', '', 'Sta Monica', 'Quezon City', 'Metro Manila', 1004, '91685959', '2147483647', 'asianpro597@gmail.com', 'senior high school', 'Beks Link', 'STEM', '04/21/2019', '2018-2019', 'Grade 12', '2nd', 'Mikros', 'Kalara', 'M', '', '2147483647', 'mikroskalara@gmail.com', 'Holdaper', 'Mikaela', 'Baldoz', 'M', 'Ma.', '2147483647', 'mikaelabaldoz@gmail.com', 'Stripper', 'Mikaela', 'Baldoz', 'M', 'Ma.', '2147483647', 'mikaelabaldoz@gmail.com', '', '', 'qcurocks@@'),
(21002, 'Transferee', '1st Year', '2020-2021', '1ST', 'San Bartolome', 'BSIT', 'Mary Ann', 'Santiago', 'Magleo', 'N/A', 'Female', 'Single', 'Filipino', '05-21-2000', 'Quezon City', 'Catholic', '3bdk', 'Hxhsb', 'Nxks3', 'Bdksnc3', 'Bxisb3', 'Tarlac', 1116, '', '3bdk', 'Hxhsb', 'Nxks3', 'Bdksnc3', 'Bxisb3', 'Tarlac', 1116, '183632', '912222222', 'bdjxbxksb@gmail.com', 'senior high school', 'SFHS', 'TVL', 'APRIL', '2017-2018', 'Grade 12', '1st', 'Bdks3', 'Ndjcb4', 'Ndj', 'Ndb', '2147483647', 'bsvcj@gmail.com', 'None', 'Bdjdbr', 'Nfbck', 'Ndj', 'Bxb', '2147483647', 'bxbns@gmail.com', 'Bxbx', 'Ndkcb', 'Bdjdi', 'Nsj', 'Ndb', '2147483647', 'dbkdbdb@gmail.com', '', '', 'qcurocks@@'),
(21003, 'New Student', '1st Year', '2020-2021', '1ST', 'San Bartolome', 'BSIT', 'Vimy', 'BoÃ±ola', 'Garcia', '', 'Female', 'Single', 'Filipino-Japanese', '05-11-00', 'QUEZON CITY', 'N/A', '12', 'Acacia', '3B', 'Claro', 'QUEZON CITY', 'NCR', 1102, '', '12', 'Acacia', '3B', 'Claro', 'QUEZON CITY', 'NCR', 1102, '2147483647', '2147483647', 'vimykim@gmail.com', 'college', 'Asian College Science and Tech', 'ICT', '05-24-18', '2017-2018', 'Grade 12', '2nd', 'Ted', 'Garcia', 'D', '', '2147483647', 'vimykim@gmail.com', '', 'Lily', 'Garcia', 'T', '', '2147483647', 'vimykim@gmail.com', '', 'Ted', 'Garcia', 'D', '', '2147483647', '', '', '', 'qcurocks@@'),
(21004, 'New Student', '1st Year', '2021-2022', '1ST', 'San Bartolome', 'BSIT', 'Ako', 'Si', 'Batman', 'Jr', 'Male', 'Single', 'Filipino', '10/25/1998', 'Caloocan', 'Catholic', '1234', 'Di Mahanap St.', '', 'Dimakita', 'Gotham', 'NCR', 1262, '', '1234', 'Di Mahanap St.', '', 'Dimakita', 'Valenzuela', 'NCR', 1262, '2147483647', '2147483647', 'gilquiano@yahoo.com', 'senior high school', 'Ladinga', 'ict', '', '2019-2020', 'Grade 12', '', 'Ladinga', 'Sya', '', 'Sr', '2147483647', 'ladiko@yahoo.com', '', 'Ikaw ba', 'Inako', '', '', '2147483647', 'ladiko@yahoo.com', '', 'Hanapmo', 'Guarddyan', '', '', '0', 'Guarddyan@yahoo.com', '', '', 'qcurocks@@'),
(21005, 'New Student', '1st Year', '2021-2022', '1ST', 'San Bartolome', 'BSIE', 'Crizel Anne', 'Raya', 'Carig', '', 'Female', 'Single', 'Filipino', '09/16/2000', 'Manila', 'Catholic', '28', 'Geronimo', '', 'Sta. Monica', 'Quezon City ', 'Lupao, Nueva ecija', 1119, '', '28', 'Geronimo', '', 'Sta. Monica', 'Quezon City ', 'Lupao, Nueva ecija', 1119, '0', '2147483647', 'crizelanne.carig@gmail.com', 'senior high school', 'Our lady of Fatima University ', 'STEM', '03/25/2019', '2018-2019', 'Grade 12', '2nd', '', '', '', '', '0', '', '', '', '', '', '', '0', '', '', '', '', '', '', '0', '', '', '', 'qcurocks@@'),
(21006, 'New Student', '1st Year', '2021-2022', '1ST', 'San Bartolome', 'BSIE', 'Crizel Anne', 'Raya', 'Carig ', '', 'Female', 'Single', 'Filipino', '09/16/2000', 'Manila', 'Catholic', '28', 'Geronimo', '', 'Sta. Monica', 'Quezon City ', '', 1119, '', '28', 'Geronimo', '', 'Sta. Monica', 'Quezon City ', '', 1119, '0', '2147483647', 'crizelanne.carig@gmail.com', 'senior high school', 'Our Lady of Fatima University ', 'STEM', '03/28/2019', '2018-2019', 'Grade 12', '2nd', 'Crizaldo', 'Carig', 'V', '', '2147483647', 'crizaldocarig.12@gmail.com', 'Factory worker', '', '', '', '', '0', '', '', '', '', '', '', '0', '', '', '', 'qcurocks@@'),
(21007, 'New Student', '2nd Year', '2021-2022', '2ND', 'San Bartolome', 'ENTREP', 'Mikeala', 'Paul', 'Baldoz', 'Elm', 'Female', 'Married', 'cwqc', '12/12/1992', 'qcwcqw', 'qwe', '502 Broadway Street', '434', 'vwqqvwqw', 'cwqc', 'Elmira', 'Bermuda', 1490, '', '26517 Danti Court Ac', 'Valenzuela', 'vwqqvwqw', 'cwqc', 'Hayward', 'California', 9454, '6525534323', '09994810212', 'mivosymu@ivyandmarj.com', 'junior high school', 'Mikeala Baldoz', 'STEM', '12/12/1992', '2017-2018', 'Grade 1', '1st', 'Mikeala', 'Baldoz', 'P', 'cqw', '6508730750', 'mikcwoz@gmail.com', 'qwcqwc', 'vqwe', 'qwecqw', 'P', 'qcw', '6525534323', 'mikaelabaldoz@gmail.com', 'cqwqcw', 'Mikeala', 'Baldoz', 'P', 'cwq', '6525534323', 'evilu728@celinecityitalia.com', '', '', 'qcurocks@@'),
(21008, 'Transferee', '1st Year', '2020-2021', '1ST', 'San Fransisco', 'BSIE', 'Mikeala', 'Prozi', 'Baldoz', 'Elm', 'Female', 'Married', 'Filipino', '12/12/1992', 'qcwcqw', 'qwe', '502 BROADWAY ST', '434', 'vwqqvwqw', 'cwqc', 'ELMIRA', 'NY', 1490, '', '502 Broadway Street', 'Valenzuela', 'vwqqvwqw', 'cwqc', 'Elmira', 'NY', 1490, '6525534323', '6525534323', 'mikaelabaldoz@gmail.com', 'high school', 'Mikeala Paul Baldoz', 'cqwqwc', '12/12/1992', '2005-2006', '2nd Year College', '1st', 'Mikeala', 'Baldoz', 'P', 'cqw', '6025205252', 'evilu7cxq28@cqxcelinecityitali', 'qwcqwc', 'Mikeala', 'Baldoz', 'P', 'qcw', '6508730750', 'mivosymu@ivyandmarj.com', 'cqwqcw', 'Mikeala', 'Baldoz', 'P', 'cwq', '6525534323', 'shilomanaka@gmail.com', '', '', 'qcurocks@@'),
(21009, 'New Student', '1st Year', '2021-2022', '1ST', 'San Bartolome', 'BSIT', 'Shoma', 'Prozi', 'Baldo', 'vqw', 'Male', 'Single', 'cwqc', '12/12/1992', 'Elmira', 'Sango', '26517 Danti Court Ac', '434', 'hqwe', 'vqvw', 'Hayward', 'California', 9454, '', '26517 Danti Court Ac', '434', 'hqwe', 'vqvw', 'Hayward', 'California', 9454, '123123312', '3122345234', '234234234@gg.com', 'elementary', 'qcqwc qwe', 'qcwqwc', '12/12/1992', '2003-2004', '2nd Year College', '1st', 'qcwqcw', 'qcwqwc', 'cqw', 'cqc', '123123123123', 'wcqwcqc@gg.com', 'qwcqcq', 'qwcqwcqcw', 'qwcqcw', 'a', 'c', '123123123423', 'qcwcqw@gg.com', 'qwcqwc', 'cqwcq', 'qcwqcw', 'qwc', 'qwc', '2344234234', 'xcqc@gg.com', '', '', 'Qweqwe123@'),
(21025, 'New Student', '1st Year', '2021-2022', '1ST', 'San Bartolome', 'BSIT', 'La sya', 'Batman', 'Nga', 'jr', 'Male', 'Single', 'Filipino', '10/25/1998', 'Caloocan', 'Catholic', '1016', 'Dito St.', 'DoonSaMalapit', 'Malapit', 'Gotham', 'NCR', 1243, '', '1016', 'Dito St.', 'DoonSaMalapit', 'Malapit', 'Gotham', 'NCR', 1243, '', '09876543212', 'ladiko@yahoo.com', 'senior high school', 'Hanapmo Guarddyan', 'ICT', '01/07/2021', '2020-2021', 'Grade 12', '2nd', 'Hanapmo', 'Guarddyan', '', '', '09876543421', 'ladiko@yahoo.com', 'Gingineer', 'Hanapmo', 'Guarddyan', '', '', '09876543421', 'ladiko@yahoo.com', 'Security', 'Hanapmo', 'Guarddyan', '', '', '09876543421', 'ladiko@yahoo.com', '', '', 'Gil1234'),
(21026, 'New Student', '3rd Year', '2021-2022', '1ST', 'San Bartolome', 'BSIT', 'Viola', 'BoÃ±ola', 'Garcia', 'N/A', 'Female', 'Single', 'Filipino', '05-11-00', 'QUEZON CITY', 'N/A', '12', 'Acacia', '3B', 'Claro', 'QUEZON CITY', 'NCR', 1102, '', '12', 'Acacia', '3B', 'Claro', 'QUEZON CITY', 'NCR', 1102, '09472825323', '09472825323', 'vimykim@gmail.com', 'college', 'Viola BoÃ±ola Garcia', 'ICT', '05-24-18', '2017-2018', 'Grade 12', '1st', 'Ted', 'Garcia', 'D', 'N/A', '09472825323', 'vimykim@gmail.com', 'Wiwo', 'Beth', 'Garcia', 'B', 'N/A', '09472825323', 'vimykim@gmail.com', 'Wiwo', 'Ted', 'Garcia', 'D', 'N/A', '09472825323', 'vimykim@gmail.com', '', '', 'ravien'),
(21027, 'Transferee', '1st Year', '2021-2022', '2ND', 'Batasan', 'BSA', 'Mary Ann', '', 'Magleo', '', 'Female', 'Single', 'Filipino', '05555555', 'Qc', 'Catholic', 'F-3', 'Castro', '', '', 'Qc', '', 0, '', 'F-3', 'Castro', '', '', 'Qc', '', 0, '', '09345678911', 'mary.ann.santiago.magleo@gmail', 'elementary', 'Hzbxkdn', '', '', '2017-2018', 'Nursery', '', 'Secret', 'Secret', '', '', '092345678912', 'Secret@gmail.com', '', 'Secret', 'Secret', '', '', '09122278911', 'Secret@gmail.com', '', 'N/A', 'N/A', '', '', '09125678911', 'Secret@gmail.com', '', '', 'Secret'),
(21028, 'New Student', '1st Year', '2020-2021', '1ST', 'San Bartolome', 'BSIT', 'Mikaela', 'Prozi', 'Baldoz', 'vqw', 'Female', 'Single', 'Filipino', '12/12/1992', 'San Morota', 'Sango', '502 BROADWAY ST, Sah', 'Sahwe', 'vwqqvwqw', 'vvwqvqw', 'Elmira', 'NY', 1490, '', '502 BROADWAY ST, Sah', 'Sahwe', 'vwqqvwqw', 'vvwqvqw', 'Elmira', 'NY', 1490, '6508730750', '6525534323', '', 'high school', 'Shoma Baldo', 'STEM', '04/21/2019', '2004-2005', '4th Year HS', '2nd', 'Shoma', 'Baldo', 'P', 'cqw', '6508730750', 'gujuwaxy@celinecityitalia.com', '502 Broadway St', 'Mikeala', 'Baldoz', 'v', 'qwc', '6525565423', 'shilomanaka@gmail.com', 'cqwqcw', 'Mikeala', 'Baldoz', 'cqw', 'cqw', '6025205252', 'shimonokarugtong23@gmail.com', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_data`
--

CREATE TABLE `enrollment_data` (
  `student_id` int(11) NOT NULL,
  `email` varchar(64) DEFAULT NULL,
  `first_name` varchar(64) DEFAULT NULL,
  `last_name` varchar(64) DEFAULT NULL,
  `middle_name` varchar(64) DEFAULT NULL,
  `suffix` varchar(64) DEFAULT NULL,
  `course` varchar(10) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(64) DEFAULT NULL,
  `barangay` varchar(64) DEFAULT NULL,
  `sylevel` varchar(64) DEFAULT NULL,
  `prev_campus` varchar(64) DEFAULT NULL,
  `prev_section` varchar(64) DEFAULT NULL,
  `yearlevel` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enrollment_data`
--

INSERT INTO `enrollment_data` (`student_id`, `email`, `first_name`, `last_name`, `middle_name`, `suffix`, `course`, `birthday`, `address`, `barangay`, `sylevel`, `prev_campus`, `prev_section`, `yearlevel`) VALUES
(210000, 'johnsmoun@rex.edu.com', 'John Shimon', 'Kalara', 'Minopa', 'Mr', 'BSIE', '1994-12-12', '42 San Moratala', 'Bagumbuhay', '2nd Year', 'Batasan', '3F', '2nd Year'),
(210001, 'poech@gg.com', 'San Mirato', 'Porl', 'Poek', 'San', 'BSEcE', '1993-12-11', '205 San Simato', 'BagongPag-asa', '3rd Year', 'San Francisco', 'San Kirato', '2nd Year'),
(210002, 'shimonokarugtong23@gmail.com', 'Shoma', 'Baldo', 'Hawx', 'Ms', 'BSIE', '1994-06-04', '26517 Danti Court Account No. 83-593828', 'BagongSilangan', '1st Year', 'San Francisco', '3G', '2nd Year'),
(210003, 'evilu728@celinecityitalia.com', 'Mikeala', 'Baldoz', 'Prozi', 'MRS', 'BSIE', '1991-12-12', '502 BROADWAY ST, 434', 'Alicia', '3rd Year', 'Batasan', '3F', '2nd Year'),
(210004, 'evilu728@celinecityitalia.com', 'Mikeala', 'Baldoz', 'Prozi', 'MRS', 'BSIT', '1991-12-12', '502 BROADWAY ST, 434', 'Bagbag', '1st Year', 'San Bartolome', '3F', '2nd Year'),
(210005, 'evilu728@celinecityitalia.com', 'Mikeala', 'Baldoz', 'Prozi', 'MRS', 'BSIE', '1994-12-12', '502 BROADWAY ST', 'Alicia', '3rd Year', 'San Francisco', '3F', '2nd Year');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_name` varchar(250) NOT NULL,
  `designation` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `designation`) VALUES
(14, 'Engineering', 'CS-OJT Coordinator'),
(16, 'Information Technology', 'Computer Security'),
(17, 'Management Studies', 'Elective 3'),
(19, 'Philosophy', 'Demo2'),
(20, 'Natural Science', 'Demo3'),
(21, 'Commerce', 'Demo4');

-- --------------------------------------------------------

--
-- Table structure for table `fileup`
--

CREATE TABLE `fileup` (
  `title` varchar(64) NOT NULL,
  `image` varchar(64) NOT NULL,
  `location` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fileup`
--

INSERT INTO `fileup` (`title`, `image`, `location`) VALUES
('Org, John Paul', '1903-ID.pdf', ''),
('Org, John Paul', '2139-ID.pdf', ''),
('Magleo, Mary Ann', '9178-inbound5732967404908696603.png', ''),
('Garcia, Vimy', '5452-FB_IMG_1610342589459.jpg', ''),
('Batman, Ako', '1213-qcu_student (1).sql', ''),
('Carig, Crizel Anne', '2799-received_725643478143847.jpeg', ''),
('Carig , Crizel Anne', '3610-inbound8991078947316489667.docx', ''),
('Nga, La sya', '4164-JensProportionalDivider.pdf', 'www.asianprozibot.xyz/enroll/adir/New Student/San Bartolome/Nga, La sya - BSIT/4164-JensProportionalDivider.pdf'),
('Garcia, Viola', '8370-VIOLA GARCIA_QRPasig.jpg', 'www.asianprozibot.xyz/enroll/adir/New Student/San Bartolome/Garcia, Viola - BSIT/8370-VIOLA GARCIA_QRPasig.jpg'),
('Magleo, Mary Ann', '7092-inbound2083586228735086909.pdf', 'www.asianprozibot.xyz/enroll/adir/Transferee/Batasan/Magleo, Mary Ann - BSA/7092-inbound2083586228735086909.pdf'),
('Baldoz, Mikaela', 'test document.pdf', '../adir/New Student/San Bartolome/Baldoz, Mikaela - BSIT/test document.pdf'),
('Baldoz, Mikaela', 'test document.pdf', '../adir/New Student/San Bartolome/Baldoz, Mikaela - BSIT/test document.pdf'),
('Baldoz, Mikaela', 'test document.pdf', '../adir/New Student/San Bartolome/Baldoz, Mikaela - BSIT/test document.pdf'),
('Baldoz, Mikaela', 'test document.pdf', '../adir/New Student/San Bartolome/Baldoz, Mikaela - BSIT/test document.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `grade_table`
--

CREATE TABLE `grade_table` (
  `grade_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_code` varchar(250) NOT NULL,
  `grade` decimal(5,2) NOT NULL,
  `semister` int(11) NOT NULL,
  `year_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade_table`
--

INSERT INTO `grade_table` (`grade_id`, `student_id`, `subject_code`, `grade`, `semister`, `year_level`) VALUES
(1, 21001, 'CS19', '75.00', 1, 1),
(2, 21001, 'CP02', '75.00', 1, 1),
(3, 21001, 'DM15', '75.00', 1, 1),
(4, 21001, 'WP01', '80.00', 1, 1),
(5, 21001, 'SM85', '87.00', 1, 1),
(6, 21001, 'OP55', '94.00', 1, 1),
(7, 21002, 'CS19', '87.00', 1, 1),
(8, 21002, 'DM15', '67.00', 1, 1),
(9, 21002, 'CP02', '76.00', 1, 1),
(10, 21002, 'WP01', '80.00', 1, 1),
(11, 21002, 'SM85', '81.00', 1, 1),
(12, 21002, 'OP55', '80.00', 1, 1),
(13, 21003, 'CS19', '82.00', 1, 1),
(14, 21003, 'CP02', '74.00', 1, 1),
(15, 21003, 'DM15', '84.00', 1, 1),
(16, 21003, 'WP01', '78.00', 1, 1),
(17, 21003, 'SM85', '75.00', 1, 1),
(18, 21003, 'OP55', '78.00', 1, 1),
(19, 21004, 'CS19', '89.00', 1, 1),
(20, 21004, 'CP02', '80.00', 1, 1),
(21, 21004, 'DM15', '85.00', 1, 1),
(22, 21004, 'WP01', '94.00', 1, 1),
(23, 21004, 'SM85', '93.00', 1, 1),
(24, 21004, 'OP55', '75.00', 1, 1),
(25, 21009, 'CS19', '67.00', 1, 1),
(26, 21009, 'CP02', '94.00', 0, 0),
(27, 21009, 'DM15', '80.00', 0, 0),
(28, 21009, 'WP01', '77.00', 0, 0),
(29, 21009, 'SM85', '80.00', 0, 0),
(30, 21009, 'OP55', '80.00', 0, 0),
(31, 21025, 'CS19', '70.00', 0, 0),
(32, 21025, 'CP02', '76.00', 0, 0),
(33, 21009, 'OP55', '85.00', 0, 0),
(34, 21009, 'OP55', '85.00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `permanent_students`
--

CREATE TABLE `permanent_students` (
  `student_id` int(10) NOT NULL,
  `yrlvl` varchar(30) DEFAULT NULL,
  `schoolyear` varchar(30) DEFAULT NULL,
  `term` varchar(30) DEFAULT NULL,
  `campus_area` varchar(30) DEFAULT NULL,
  `student_course` varchar(30) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `mname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `sname` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `civil_status` varchar(30) DEFAULT NULL,
  `citizenship` varchar(30) DEFAULT NULL,
  `bdate` varchar(30) DEFAULT NULL,
  `birthplace` varchar(30) DEFAULT NULL,
  `religion` varchar(30) DEFAULT NULL,
  `add_st_num` varchar(30) DEFAULT NULL,
  `add_st_name` varchar(30) DEFAULT NULL,
  `add_subd` varchar(30) DEFAULT NULL,
  `add_brgy` varchar(30) DEFAULT NULL,
  `add_city` varchar(30) DEFAULT NULL,
  `add_province` varchar(30) DEFAULT NULL,
  `add_zipcode` int(20) DEFAULT NULL,
  `checker` varchar(30) DEFAULT NULL,
  `per_add_st_num` varchar(30) DEFAULT NULL,
  `per_add_st_name` varchar(30) DEFAULT NULL,
  `per_add_subd` varchar(30) DEFAULT NULL,
  `per_add_brgy` varchar(30) DEFAULT NULL,
  `per_add_city` varchar(30) DEFAULT NULL,
  `per_add_province` varchar(30) DEFAULT NULL,
  `per_add_zipcode` int(4) DEFAULT NULL,
  `telno` varchar(20) DEFAULT NULL,
  `mobno` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `lastsch_type` varchar(30) DEFAULT NULL,
  `lastsch_name` varchar(30) DEFAULT NULL,
  `lastsch_program` varchar(30) DEFAULT NULL,
  `lastsch_graddate` varchar(30) DEFAULT NULL,
  `lastsch_sy` varchar(30) DEFAULT NULL,
  `lastsch_yrlevel` varchar(30) DEFAULT NULL,
  `lastsch_term` varchar(30) DEFAULT NULL,
  `fathersname` varchar(30) DEFAULT NULL,
  `fatherslname` varchar(30) DEFAULT NULL,
  `fathersmname` varchar(30) DEFAULT NULL,
  `fatherssname` varchar(30) DEFAULT NULL,
  `fatherscontact` varchar(20) DEFAULT NULL,
  `fathersemail` varchar(30) DEFAULT NULL,
  `fathersoccupation` varchar(30) DEFAULT NULL,
  `mothersname` varchar(30) DEFAULT NULL,
  `motherslname` varchar(30) DEFAULT NULL,
  `mothersmname` varchar(30) DEFAULT NULL,
  `motherssname` varchar(30) DEFAULT NULL,
  `motherscontact` varchar(20) DEFAULT NULL,
  `mothersemail` varchar(30) DEFAULT NULL,
  `mothersoccupation` varchar(30) DEFAULT NULL,
  `guardiansname` varchar(30) DEFAULT NULL,
  `guardianslname` varchar(30) DEFAULT NULL,
  `guardiansmname` varchar(30) DEFAULT NULL,
  `guardianssname` varchar(30) DEFAULT NULL,
  `guardianscontact` varchar(20) DEFAULT NULL,
  `guardiansemail` varchar(30) DEFAULT NULL,
  `guardiansoccupation` varchar(30) DEFAULT NULL,
  `guardiansrelationship` varchar(30) DEFAULT NULL,
  `location` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permanent_students`
--

INSERT INTO `permanent_students` (`student_id`, `yrlvl`, `schoolyear`, `term`, `campus_area`, `student_course`, `fname`, `mname`, `lname`, `sname`, `gender`, `civil_status`, `citizenship`, `bdate`, `birthplace`, `religion`, `add_st_num`, `add_st_name`, `add_subd`, `add_brgy`, `add_city`, `add_province`, `add_zipcode`, `checker`, `per_add_st_num`, `per_add_st_name`, `per_add_subd`, `per_add_brgy`, `per_add_city`, `per_add_province`, `per_add_zipcode`, `telno`, `mobno`, `email`, `lastsch_type`, `lastsch_name`, `lastsch_program`, `lastsch_graddate`, `lastsch_sy`, `lastsch_yrlevel`, `lastsch_term`, `fathersname`, `fatherslname`, `fathersmname`, `fatherssname`, `fatherscontact`, `fathersemail`, `fathersoccupation`, `mothersname`, `motherslname`, `mothersmname`, `motherssname`, `motherscontact`, `mothersemail`, `mothersoccupation`, `guardiansname`, `guardianslname`, `guardiansmname`, `guardianssname`, `guardianscontact`, `guardiansemail`, `guardiansoccupation`, `guardiansrelationship`, `location`) VALUES
(2100001, '1st Year', '2020-2021', '1st Sem', 'San Bartolome', 'BSIT', 'John Paul', 'Malib', 'Org', '', 'Male', 'Single', 'Filipino', '02/23/1992', 'Sogo', 'Pope', '3', 'san marano', '', 'Sta Monica', 'Quezon City', 'Metro Manila', 1004, '', '3', 'san marano', '', 'Sta Monica', 'Quezon City', 'Metro Manila', 1004, '91685959', '2147483647', 'asianpro597@gmail.com', 'senior high school', 'Beks Link', 'STEM', '04/21/2019', '2018-2019', 'Grade 12', '2nd', 'Mikros', 'Kalara', 'M', '', '2147483647', 'mikroskalara@gmail.com', 'Holdaper', 'Mikaela', 'Baldoz', 'M', 'Ma.', '2147483647', 'mikaelabaldoz@gmail.com', 'Stripper', 'Mikaela', 'Baldoz', 'M', 'Ma.', '2147483647', 'mikaelabaldoz@gmail.com', '', '', 'qcurocks@@'),
(2100002, '1st Year', '2020-2021', '1st Sem', 'San Bartolome', 'BSA', 'Mary Ann', '', 'Magleo', '', 'Male', 'Single', 'Filipino', 'May 00 200', 'Qc', 'Catholic', 'F3', 'M.castro', '', '', 'Qc', '', 0, '', 'F3', 'M.castro', '', '', 'Qc', '', 0, '', '09444444444', 'mary.ann.santiago.magleo@gmail', 'senior high school', 'Bxkan', '', '', '2020-2021', '3rd Year College', '', 'Vdisbx', 'Nsncjc', '', '', '09111111111', 'nxks@gmail.com', '', 'Bxownx', 'Jxbxnd', '', '', '09222222222', 'grab@gmail.com', '', 'Knobkgxco', 'Nxbiohxbx', '', '', '09333333333', 'Odin@gmail.com', '', '', '../adir/New Student/San Bartolome/Magleo, Mary Ann - BSA/inbound5895550218959798050.pdf'),
(2100003, '1st Year', '2020-2021', '1st Sem', 'San Bartolome', 'BSA', 'Mary Ann', '', 'Magleo', '', 'Male', 'Single', 'Filipino', 'May 00 200', 'Qc', 'Catholic', 'F3', 'M.castro', '', '', 'Qc', '', 0, '', 'F3', 'M.castro', '', '', 'Qc', '', 0, '', '09444444444', 'mary.ann.santiago.magleo@gmail.com', 'senior high school', 'Bxkan', '', '', '2020-2021', '3rd Year College', '', 'Vdisbx', 'Nsncjc', '', '', '09111111111', 'nxks@gmail.com', '', 'Bxownx', 'Jxbxnd', '', '', '09222222222', 'grab@gmail.com', '', 'Knobkgxco', 'Nxbiohxbx', '', '', '09333333333', 'Odin@gmail.com', '', '', '../adir/New Student/San Bartolome/Magleo, Mary Ann - BSA/inbound5895550218959798050.pdf'),
(2100004, '1st Year', '2021-2022', '1st Sem', 'San Bartolome', 'BSIE', 'Crizel Anne', 'Raya', 'Carig', '', 'Female', 'Single', 'Filipino', '09/16/2000', 'Manila', 'Catholic', '28', 'Geronimo', '', 'Sta. Monica', 'Quezon City ', 'Lupao, Nueva ecija', 1119, '', '28', 'Geronimo', '', 'Sta. Monica', 'Quezon City ', 'Lupao, Nueva ecija', 1119, '0', '2147483647', 'crizelanne.carig@gmail.com', 'senior high school', 'Our lady of Fatima University ', 'STEM', '03/25/2019', '2018-2019', 'Grade 12', '2nd', '', '', '', '', '0', '', '', '', '', '', '', '0', '', '', '', '', '', '', '0', '', '', '', 'qcurocks@@'),
(2100005, '1st Year', '2020-2021', '1ST', 'San Fransisco', 'BSIE', 'Mikeala', 'Prozi', 'Baldoz', 'Elm', 'Female', 'Married', 'Filipino', '12/12/1992', 'qcwcqw', 'qwe', '502 BROADWAY ST', '434', 'vwqqvwqw', 'cwqc', 'ELMIRA', 'NY', 1490, '', '502 Broadway Street', 'Valenzuela', 'vwqqvwqw', 'cwqc', 'Elmira', 'NY', 1490, '6525534323', '6525534323', 'mikaelabaldoz@gmail.com', 'high school', 'Mikeala Paul Baldoz', 'cqwqwc', '12/12/1992', '2005-2006', '2nd Year College', '1st', 'Mikeala', 'Baldoz', 'P', 'cqw', '6025205252', 'evilu7cxq28@cqxcelinecityitali', 'qwcqwc', 'Mikeala', 'Baldoz', 'P', 'qcw', '6508730750', 'mivosymu@ivyandmarj.com', 'cqwqcw', 'Mikeala', 'Baldoz', 'P', 'cwq', '6525534323', 'shilomanaka@gmail.com', '', '', 'qcurocks@@'),
(2100006, '1st Year', '2020-2021', '1st Sem', 'San Bartolome', 'BSA', 'Josh', 'Prozi', 'Ligaya', '', 'Male', 'Single', 'Filipino', '12/12/1992', 'San Morota', 'Romantic Catholic', '502 ', 'Broadway', '', 'San Nikolas', 'Quezon City', 'Metro Manila', 1115, '', '502 ', 'Broadway', '', 'San Nikolas', 'Quezon City', 'Metro Manila', 1115, '', '09994810131', 'isabellaqwe123@gmail.com', 'senior high school', 'STI Kubeta', 'STEM', '04/21/2019', '2018-2019', 'Grade 12', '2nd', 'Marlou', 'Arizala', 'L', '', '096664988522', 'marlouarizala@gmails.com', 'Trabahador', 'Mikaela', 'Baldoz', 'L', '', '096665865465', 'mikaelabaldoz@gmail.com', 'Cam Girl', 'Mikaela', 'Baldoz', 'L', '', '096665865465', 'mikaelabaldoz@gmail.com', 'Cam Girl', 'Mother Father', '../adir/New Student/San Bartolome/Ligaya, Josh - BSA/test document.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `professor_portal_tbl`
--

CREATE TABLE `professor_portal_tbl` (
  `prof_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `section_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professor_portal_tbl`
--

INSERT INTO `professor_portal_tbl` (`prof_id`, `firstname`, `lastname`, `faculty_id`, `subject_code`, `section_code`) VALUES
(10011, 'Gil', 'Quiano', 16, 'PO69', 'BSIT-1A'),
(10012, 'James', 'Bond', 16, 'CS19', 'BSIT-1A'),
(10013, 'Mary', 'Magleo', 16, 'CP02', 'BSIT-1A'),
(10014, 'Herminigildo Jr', 'Quiano', 16, 'SM85', 'BSIT-1A');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `room` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room`) VALUES
(3, 'SB14'),
(8, 'CP09'),
(9, 'SB11'),
(10, 'CP19'),
(11, 'DM28'),
(12, 'NB15'),
(13, 'SS36'),
(14, 'PK22'),
(15, '1424'),
(16, '1424');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_tbl`
--

CREATE TABLE `schedule_tbl` (
  `id` int(11) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `timer` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_tbl`
--

INSERT INTO `schedule_tbl` (`id`, `subject_code`, `timer`, `day`) VALUES
(1, 'CS19', '5:30 pm - 7:30 pm', 'Monday'),
(2, 'CP02', '1:00 pm - 5:30 pm', 'Tuesday'),
(3, 'DM15', '10:00 am - 12:00 pm', 'Wednesday'),
(4, 'WP01', '6:00 pm - 7:00 pm', 'Thursday'),
(5, 'NA08', '7:30 am - 10:30 am', 'Friday'),
(6, 'SM85', '9:20 am - 1:40 pm', 'Saturday'),
(7, 'OP55', '6:30 am - 9:00 am', 'Wednesday'),
(8, 'AS86', '8:00 am - 10:30 am', 'Friday'),
(9, 'MM80', '10:30 am - 2:00 pm', 'Monday'),
(10, 'NM65', '2:00 am - 5:00 pm', 'Tuesday'),
(11, 'PH88', '7:00 am - 10:00 am', 'Monday');

-- --------------------------------------------------------

--
-- Table structure for table `section_tbl`
--

CREATE TABLE `section_tbl` (
  `sec_id` int(11) NOT NULL,
  `section_code` varchar(50) NOT NULL,
  `year_level` int(11) NOT NULL,
  `semister` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section_tbl`
--

INSERT INTO `section_tbl` (`sec_id`, `section_code`, `year_level`, `semister`) VALUES
(1, 'BSIT-1A', 1, 1),
(2, 'BSIT-1B', 1, 1),
(3, 'BSENTREP-1A', 1, 1),
(4, 'BSENTREP-1B', 1, 1),
(5, 'BSIE-1A', 1, 1),
(6, 'BSIE-1B', 1, 1),
(7, 'BSA-1A', 1, 1),
(8, 'BSA-1B', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student_grade`
--

CREATE TABLE `student_grade` (
  `grade_id` int(11) NOT NULL,
  `student_id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `year_lvl` varchar(255) NOT NULL,
  `subject1` varchar(255) NOT NULL,
  `subject1_midterm_grade` float NOT NULL,
  `subject1_finals_grade` float NOT NULL,
  `subject1_total_grade` float NOT NULL,
  `subject1_remarks` varchar(255) NOT NULL,
  `subject2` varchar(255) NOT NULL,
  `subject2_midterm_grade` float NOT NULL,
  `subject2_finals_grade` float NOT NULL,
  `subject2_total_grades` float NOT NULL,
  `subject2_remarks` varchar(255) NOT NULL,
  `subject3` varchar(255) NOT NULL,
  `subject3_midterm_grade` float NOT NULL,
  `subject3_finals_grade` float NOT NULL,
  `subject3_total_grade` float NOT NULL,
  `subject3_remarks` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_grade`
--

INSERT INTO `student_grade` (`grade_id`, `student_id`, `fname`, `mname`, `lname`, `course`, `year_lvl`, `subject1`, `subject1_midterm_grade`, `subject1_finals_grade`, `subject1_total_grade`, `subject1_remarks`, `subject2`, `subject2_midterm_grade`, `subject2_finals_grade`, `subject2_total_grades`, `subject2_remarks`, `subject3`, `subject3_midterm_grade`, `subject3_finals_grade`, `subject3_total_grade`, `subject3_remarks`) VALUES
(134, 2100005, 'Mikeala   ', 'Prozi', 'Baldoz', 'BSIE', '1st Year', 'Economics', 70, 70, 70, 'Failed', 'Marketing Management', 70, 70, 70, 'Failed', 'Computer Programming 1', 70, 70, 70, 'Failed'),
(135, 2100001, 'John Paul        ', 'Malib', 'Org', 'BSIT', '1st Year', 'Microprocessor and Assembly Language', 75, 75, 75, 'Passed', 'Microprocessor and Assembly Language', 75, 75, 75, 'Passed', 'Economics', 75, 75, 75, 'Passed'),
(136, 2100002, 'Mary Ann  ', '', 'Magleo', 'BSA', '1st Year', 'Network Analyst', 70, 70, 70, 'Failed', 'Databases', 70, 70, 70, 'Failed', 'The Philosophy of Philosophy', 70, 70, 70, 'Failed'),
(137, 2100004, 'Crizel Anne ', 'Raya', 'Carig', 'BSIE', '1st Year', 'Microprocessor and Assembly Language', 80, 83, 81.5, 'Passed', 'The Philosophy of Philosophy', 78, 86, 82, 'Passed', 'Discrete Mathematics', 90, 88, 89, 'Passed'),
(138, 2100006, 'Josh  ', 'Prozi', 'Ligaya', 'BSA', '1st Year', 'Computer Programming 1', 80, 80, 80, 'Passed', 'Computer Simulation', 80, 80, 80, 'Passed', 'Digital Design', 80, 80, 80, 'Passed'),
(139, 2100008, 'Judilyn ', 'Arroyo', 'Marques', 'BSIT', '1st Year', 'Computer Programming 1', 80, 75, 77.5, 'Passed', 'Computer Simulation', 84, 83, 83.5, 'Passed', 'Digital Design', 99, 80, 89.5, 'Passed'),
(140, 2100007, 'Shiro ', 'Salamaca', 'Garcia', 'BSIT', '1st Year', 'Computer Programming 1', 88, 97, 92.5, 'Passed', 'Computer Simulation', 97, 88, 92.5, 'Passed', 'Digital Design', 87, 97, 92, 'Passed'),
(141, 0, '', '', '', '', '', 'Computer Programming 1', 86, 99, 92.5, 'Passed', 'Computer Simulation', 87, 97, 92, 'Passed', 'Digital Design', 77, 77, 77, 'Passed');

-- --------------------------------------------------------

--
-- Table structure for table `stud_portal_account_tbl`
--

CREATE TABLE `stud_portal_account_tbl` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_portal_account_tbl`
--

INSERT INTO `stud_portal_account_tbl` (`id`, `user_id`, `username`, `password`, `role`) VALUES
(28, 21008, 'lig', '2bceb39e5256d1799fc7516313bf4f5f', 2),
(30, 443548, 'Admin', '3c0f885ba92a2e10dca5b5da3e9077d4', 1),
(33, 10011, 'Falcon', '482a6d0509d649860ea8fc2ae4b593d9', 3),
(34, 21001, 'Student', '15ab15275aedb5f1a3f6662333e3b236', 2),
(35, 21005, 'Student2', '777c39276c0b7ef5bc9d2a0e778916f5', 2);

-- --------------------------------------------------------

--
-- Table structure for table `stud_section_tbl`
--

CREATE TABLE `stud_section_tbl` (
  `stud_sec_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `section_code` varchar(20) NOT NULL,
  `year_level` int(11) NOT NULL,
  `semister` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stud_section_tbl`
--

INSERT INTO `stud_section_tbl` (`stud_sec_id`, `student_id`, `section_code`, `year_level`, `semister`) VALUES
(1, 21001, 'BSIT-1A', 1, 1),
(2, 21002, 'BSIT-1A', 1, 1),
(3, 21003, 'BSIT-1A', 1, 1),
(4, 21004, 'BSIT-1A', 1, 1),
(5, 21009, 'BSIT-1B', 1, 1),
(6, 21025, 'BSIT-1B', 1, 1),
(7, 21026, 'BSIT-1B', 1, 1),
(8, 21028, 'BSIT-1B', 1, 1),
(9, 21005, 'BSIE-1A', 1, 1),
(10, 21006, 'BSIE-1A', 1, 1),
(11, 21008, 'BSIE-1A', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_code` varchar(250) NOT NULL,
  `subject_description` varchar(250) NOT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_code`, `subject_description`, `faculty_id`) VALUES
(2, 'CS19', 'Computer Programming 1', 16),
(3, 'CP02', 'Computer Simulation', 16),
(5, 'DM15', 'Digital Design', 16),
(6, 'WP01', 'Web Programming 1', 16),
(8, 'NA08', 'Network Analyst', 16),
(9, 'SM85', 'Databases', 16),
(10, 'OP55', 'OOP C++', 16),
(11, 'AS86', 'Microprocessor and Assembly Language', 16),
(12, 'MM80', 'Discrete Mathematics', 16),
(13, 'NM65', ' 	Marketing Management', 21),
(14, 'SD01', 'System Analysis and Design', 16),
(15, 'EE54', 'Economics', 21),
(16, 'PO69', ' Freedom and Equality Across Borders ', 19),
(17, 'PH88', ' The Philosophy of Philosophy ', 19),
(18, 'BI09', 'Biology', 20),
(19, 'BU56', 'Business Studies', 17);

-- --------------------------------------------------------

--
-- Table structure for table `subject_enrolled`
--

CREATE TABLE `subject_enrolled` (
  `enrolled_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `subject_code` varchar(50) NOT NULL,
  `year_level` varchar(50) NOT NULL,
  `semister` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_enrolled`
--

INSERT INTO `subject_enrolled` (`enrolled_id`, `student_id`, `subject_code`, `year_level`, `semister`) VALUES
(13, 21001, 'CS19', '1', 1),
(14, 21001, 'CP02', '1', 1),
(15, 21001, 'DM15', '1', 1),
(16, 21001, 'WP01', '1', 1),
(17, 21001, 'SM85', '1', 1),
(18, 21001, 'OP55', '1', 1),
(20, 21002, 'CS19', '1', 1),
(21, 21002, 'CP02', '1', 1),
(22, 21002, 'DM15', '1', 1),
(23, 21002, 'WP01', '1', 1),
(24, 21002, 'SM85', '1', 1),
(25, 21002, 'OP55', '1', 1),
(26, 21003, 'CS19', '1', 1),
(27, 21003, 'CP02', '1', 1),
(28, 21003, 'DM15', '1', 1),
(29, 21003, 'WP01', '1', 1),
(30, 21003, 'SM85', '1', 1),
(31, 21003, 'OP55', '1', 1),
(32, 21004, 'CS19', '1', 1),
(33, 21004, 'CP02', '1', 1),
(34, 21004, 'DM15', '1', 1),
(35, 21004, 'WP01', '1', 1),
(36, 21004, 'SM85', '1', 1),
(37, 21004, 'OP55', '1', 1),
(38, 21009, 'CS19', '1', 1),
(39, 21009, 'CP02', '1', 1),
(40, 21009, 'DM15', '1', 1),
(41, 21009, 'WP01', '1', 1),
(42, 21009, 'SM85', '1', 1),
(43, 21009, 'OP55', '1', 1),
(44, 21025, 'CS19', '1', 1),
(45, 21025, 'CP02', '1', 1),
(46, 21025, 'DM15', '1', 1),
(47, 21025, 'WP01', '1', 1),
(48, 21025, 'SM85', '1', 1),
(49, 21025, 'OP55', '1', 1),
(50, 21026, 'CS19', '1', 1),
(51, 21026, 'DM15', '1', 1),
(52, 21026, 'DM15', '1', 1),
(53, 21026, 'WP01', '1', 1),
(54, 21026, 'SM85', '1', 1),
(55, 21026, 'OP55', '1', 1),
(56, 21028, 'CS19', '1', 1),
(57, 21028, 'CP02', '1', 1),
(58, 21028, 'DM15', '1', 1),
(59, 21028, 'WP01', '1', 1),
(60, 21028, 'SM85', '1', 1),
(61, 21028, 'OP55', '1', 1),
(62, 21006, 'MM80', '1', 1),
(63, 21006, 'PH88', '1', 1),
(64, 21006, 'PO69', '1', 1),
(65, 21005, 'MM80', '1', 1),
(66, 21005, 'PH88', '1', 1),
(67, 21005, 'P069', '1', 1),
(68, 21008, 'MM80', '1', 1),
(69, 21008, 'PH88', '1', 1),
(70, 21008, 'PO69', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `timer`
--

CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `start_time` varchar(250) NOT NULL,
  `end_time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timer`
--

INSERT INTO `timer` (`id`, `start_time`, `end_time`) VALUES
(3, '5:30 pm', '7:30 pm'),
(4, '1:00 pm', '5:30 pm'),
(6, '10:00 am', '12:00 pm'),
(7, '6:00 pm', '7:00 pm'),
(8, '7:30 am', '10:30 am'),
(9, '9:20 am', '1:40 pm'),
(10, '6:30 am', '9:00 am'),
(11, '8:00 am', '2:00 pm'),
(12, '10:30 am', '3:00 pm'),
(13, '2:00 pm', '5:00 pm'),
(14, '3:00 pm', '6:00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `upload_tbl`
--

CREATE TABLE `upload_tbl` (
  `up_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `file_name` varchar(300) NOT NULL,
  `purpose` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_tbl`
--

INSERT INTO `upload_tbl` (`up_id`, `post_id`, `user_id`, `file_name`, `purpose`) VALUES
(7, 75, 443548, '12.JPG', 'Announcement'),
(8, 78, 10011, '1.png', 'Learning Material'),
(9, 78, 10011, '9.JPG', 'Learning Material');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_role_tbl`
--
ALTER TABLE `account_role_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addtable`
--
ALTER TABLE `addtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_test`
--
ALTER TABLE `admission_test`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enrolled_students`
--
ALTER TABLE `enrolled_students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `enrollment_data`
--
ALTER TABLE `enrollment_data`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `grade_table`
--
ALTER TABLE `grade_table`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `permanent_students`
--
ALTER TABLE `permanent_students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `professor_portal_tbl`
--
ALTER TABLE `professor_portal_tbl`
  ADD PRIMARY KEY (`prof_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedule_tbl`
--
ALTER TABLE `schedule_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section_tbl`
--
ALTER TABLE `section_tbl`
  ADD PRIMARY KEY (`sec_id`);

--
-- Indexes for table `student_grade`
--
ALTER TABLE `student_grade`
  ADD PRIMARY KEY (`grade_id`);

--
-- Indexes for table `stud_portal_account_tbl`
--
ALTER TABLE `stud_portal_account_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`),
  ADD KEY `student_id` (`user_id`);

--
-- Indexes for table `stud_section_tbl`
--
ALTER TABLE `stud_section_tbl`
  ADD PRIMARY KEY (`stud_sec_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `subject_enrolled`
--
ALTER TABLE `subject_enrolled`
  ADD PRIMARY KEY (`enrolled_id`);

--
-- Indexes for table `timer`
--
ALTER TABLE `timer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload_tbl`
--
ALTER TABLE `upload_tbl`
  ADD PRIMARY KEY (`up_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user`),
  ADD KEY `role` (`role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_role_tbl`
--
ALTER TABLE `account_role_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `addtable`
--
ALTER TABLE `addtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enrolled_students`
--
ALTER TABLE `enrolled_students`
  MODIFY `student_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21029;

--
-- AUTO_INCREMENT for table `enrollment_data`
--
ALTER TABLE `enrollment_data`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210006;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `grade_table`
--
ALTER TABLE `grade_table`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `permanent_students`
--
ALTER TABLE `permanent_students`
  MODIFY `student_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2100007;

--
-- AUTO_INCREMENT for table `professor_portal_tbl`
--
ALTER TABLE `professor_portal_tbl`
  MODIFY `prof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10015;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `schedule_tbl`
--
ALTER TABLE `schedule_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `section_tbl`
--
ALTER TABLE `section_tbl`
  MODIFY `sec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_grade`
--
ALTER TABLE `student_grade`
  MODIFY `grade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `stud_portal_account_tbl`
--
ALTER TABLE `stud_portal_account_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `stud_section_tbl`
--
ALTER TABLE `stud_section_tbl`
  MODIFY `stud_sec_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `subject_enrolled`
--
ALTER TABLE `subject_enrolled`
  MODIFY `enrolled_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `timer`
--
ALTER TABLE `timer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `upload_tbl`
--
ALTER TABLE `upload_tbl`
  MODIFY `up_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stud_portal_account_tbl`
--
ALTER TABLE `stud_portal_account_tbl`
  ADD CONSTRAINT `stud_portal_account_tbl_ibfk_2` FOREIGN KEY (`role`) REFERENCES `account_role_tbl` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
