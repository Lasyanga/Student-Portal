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


CREATE TABLE `admission_test` (
  `student_id` varchar(20) NOT NULL,
  `authenticate` varchar(64) DEFAULT NULL,
  `enrolled` varchar(30) DEFAULT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

--------------------------------------------------------

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


CREATE TABLE `timer` (
  `id` int(11) NOT NULL,
  `start_time` varchar(250) NOT NULL,
  `end_time` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


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
