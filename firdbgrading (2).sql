-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2021 at 11:52 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firdbgrading`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounting_all_courses`
--

CREATE TABLE `accounting_all_courses` (
  `id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `credit_hour` int(11) NOT NULL,
  `contact_hour` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `pre_course_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounting_all_courses`
--

INSERT INTO `accounting_all_courses` (`id`, `course_id`, `course_name`, `credit_hour`, `contact_hour`, `semester`, `pre_course_id`, `type`) VALUES
(1, 'accounting22', 'object oriented programming 2', 4, 4, 1, 0, 'Regular'),
(2, 'accounting33', 'ghghgh', 4, 4, 1, 0, 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `accounting_avaliable_courses`
--

CREATE TABLE `accounting_avaliable_courses` (
  `id` int(11) NOT NULL,
  `cour_id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `credit_hour` int(11) NOT NULL,
  `contact_hour` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `lab` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `first_class_date` varchar(255) NOT NULL,
  `first_class_time` varchar(255) NOT NULL,
  `second_class_date` varchar(255) NOT NULL,
  `second_class_time` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `scheduled` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bussiness_and_admin_all_courses`
--

CREATE TABLE `bussiness_and_admin_all_courses` (
  `id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `credit_hour` int(11) NOT NULL,
  `contact_hour` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `pre_course_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bussiness_and_admin_all_courses`
--

INSERT INTO `bussiness_and_admin_all_courses` (`id`, `course_id`, `course_name`, `credit_hour`, `contact_hour`, `semester`, `pre_course_id`, `type`) VALUES
(2, 'bussiness22', 'system analysis and design', 4, 4, 1, 0, 'Regular'),
(3, 'bussiness33', 'system analysis and design', 4, 4, 1, 0, 'Regular'),
(4, 'bussiness234', 'enter ', 4, 4, 2, 0, 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `bussiness_avaliable_courses`
--

CREATE TABLE `bussiness_avaliable_courses` (
  `id` int(11) NOT NULL,
  `cour_id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `credit_hour` int(11) NOT NULL,
  `contact_hour` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `lab` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `first_class_date` varchar(255) NOT NULL,
  `first_class_time` varchar(255) NOT NULL,
  `second_class_date` varchar(255) NOT NULL,
  `second_class_time` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `scheduled` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `class_time_table`
--

CREATE TABLE `class_time_table` (
  `id` int(11) NOT NULL,
  `morning_1` varchar(255) NOT NULL,
  `morning_2` varchar(255) NOT NULL,
  `afternoon_1` varchar(255) NOT NULL,
  `afternoon_2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_time_table`
--

INSERT INTO `class_time_table` (`id`, `morning_1`, `morning_2`, `afternoon_1`, `afternoon_2`) VALUES
(1, 'true', 'true', 'true', 'true'),
(2, 'true', 'true', 'true', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `cosc_all_courses`
--

CREATE TABLE `cosc_all_courses` (
  `id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `credit_hour` int(11) NOT NULL,
  `contact_hour` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `pre_course_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cosc_all_courses`
--

INSERT INTO `cosc_all_courses` (`id`, `course_id`, `course_name`, `credit_hour`, `contact_hour`, `semester`, `pre_course_id`, `type`) VALUES
(94, 'cosc007', 'object oriented programming', 4, 4, 1, 0, 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `cosc_avaliable_courses`
--

CREATE TABLE `cosc_avaliable_courses` (
  `id` int(11) NOT NULL,
  `cour_id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `credit_hour` int(11) NOT NULL,
  `contact_hour` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `lab` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `first_class_date` varchar(255) NOT NULL,
  `first_class_time` varchar(255) NOT NULL,
  `second_class_date` varchar(255) NOT NULL,
  `second_class_time` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `scheduled` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cosc_avaliable_courses`
--

INSERT INTO `cosc_avaliable_courses` (`id`, `cour_id`, `course_id`, `course_name`, `credit_hour`, `contact_hour`, `teacher_id`, `teacher_name`, `semester`, `lab`, `department_id`, `first_class_date`, `first_class_time`, `second_class_date`, `second_class_time`, `room`, `scheduled`, `type`, `batch`) VALUES
(1, 94, 'cosc007', 'object oriented programming', 4, 4, 12, 'amir  jamal  hussen', 1, 'false', 1, '', '', '', '', 'room2', 0, 'Regular', '');

-- --------------------------------------------------------

--
-- Table structure for table `cosc_students`
--

CREATE TABLE `cosc_students` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `mother_name` varchar(255) NOT NULL,
  `mother_last_name` varchar(255) NOT NULL,
  `contact_info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cosc_students`
--

INSERT INTO `cosc_students` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `age`, `mother_name`, `mother_last_name`, `contact_info`) VALUES
(1, 'firaol', 'tulu', 'lemma', 'male', 22, 'konjit', 'assafa', '091782233');

-- --------------------------------------------------------

--
-- Table structure for table `marketing_all_courses`
--

CREATE TABLE `marketing_all_courses` (
  `id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `credit_hour` int(11) NOT NULL,
  `contact_hour` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `pre_course_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marketing_all_courses`
--

INSERT INTO `marketing_all_courses` (`id`, `course_id`, `course_name`, `credit_hour`, `contact_hour`, `semester`, `pre_course_id`, `type`) VALUES
(1, 'cosc008', 'ghghgh', 4, 4, 1, 0, ''),
(5, 'market12', 'fira', 4, 4, 1, 0, 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `marketing_avaliable_courses`
--

CREATE TABLE `marketing_avaliable_courses` (
  `id` int(11) NOT NULL,
  `cour_id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `credit_hour` int(11) NOT NULL,
  `contact_hour` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `lab` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `first_class_date` varchar(255) NOT NULL,
  `first_class_time` varchar(255) NOT NULL,
  `second_class_date` varchar(255) NOT NULL,
  `second_class_time` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `scheduled` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member_accounts`
--

CREATE TABLE `member_accounts` (
  `id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member_accounts`
--

INSERT INTO `member_accounts` (`id`, `member_id`, `email`, `password`) VALUES
(1, 1, 'niguse@gmail.com', 'niguse12'),
(3, 2, 'tomas@gmail.com', 'tomas12'),
(4, 3, 'getahun@gmail.com', 'dad'),
(6, 4, 'getu@gmail.com', 'getu12'),
(7, 6, 'firaol@gmail.com', 'firaol12'),
(8, 9, 'kalkidan@gmail.com', 'kalkidan12'),
(9, 13, 'malaku@gmail.com', 'malaku12'),
(10, 10, 'amanuel@gmail.com', 'amanuel12');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `SEM_ID` int(11) NOT NULL,
  `SEM` varchar(15) NOT NULL DEFAULT 'First'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`SEM_ID`, `SEM`) VALUES
(1, 'First'),
(2, 'Second'),
(3, 'Summer');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `field_of_study` varchar(255) NOT NULL,
  `level_of_study` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `field_of_study`, `level_of_study`, `age`, `department`, `position`) VALUES
(1, 'niguse', 'tadeseee', 'girmay', 'male', 'it', 'msc', 50, 'cosc', 'teacher'),
(2, 'tomase', 'yonasaaaddd', 'aman', 'male', 'computer science', 'digree', 26, 'cosc', 'head'),
(3, 'getahun', 'tewdros', 'dastaasss', 'male', 'comuter science', 'msc', 34, 'cosc', 'teacher'),
(4, 'getahun kALK', 'tewdros', 'dasta', 'male', 'comuter science', 'msc', 54, 'marketing', 'teacher'),
(5, 'meka', 'fira', 'beki', 'male', 'comuter science', 'msc', 27, 'cosc', 'Supervisor'),
(6, 'firaoll', 'tulu', 'lemma', 'male', 'cosc', 'msc', 30, 'admin', 'admin'),
(9, 'kalkidan', 'firaol', 'lemma', 'teacher', 'marketing', 'ma', 27, 'marketing', 'head'),
(10, 'alazar', 'amanuel', 'mamo', 'teacher', 'accounting', 'mba', 30, 'accounting and finance', 'head'),
(11, 'tision', 'sisay', 'alemu', 'teacher', 'comuter science', 'ma', 33, 'cosc', 'teacher'),
(12, 'amir', 'jamal', 'hussen', 'teacher', 'comuter science', 'msc', 44, 'cosc', 'teacher'),
(13, 'malakuuu', 'lemma', 'tadesa', 'teacher', 'bussiness', 'msc', 44, 'bussiness and managment', 'head'),
(14, 'ababa', 'tadasa', 'gebrel', 'male', 'bussiness', 'ma', 54, 'bussiness and managment', 'teacher');

-- --------------------------------------------------------

--
-- Table structure for table `unity_avaliable_courses`
--

CREATE TABLE `unity_avaliable_courses` (
  `id` int(11) NOT NULL,
  `cour_id` int(11) NOT NULL,
  `course_id` varchar(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `credit_hour` int(11) NOT NULL,
  `contact_hour` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL,
  `lab` varchar(255) NOT NULL,
  `department_id` int(11) NOT NULL,
  `first_class_date` varchar(255) NOT NULL,
  `first_class_time` varchar(255) NOT NULL,
  `second_class_date` varchar(255) NOT NULL,
  `second_class_time` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `scheduled` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unity_avaliable_courses`
--

INSERT INTO `unity_avaliable_courses` (`id`, `cour_id`, `course_id`, `course_name`, `credit_hour`, `contact_hour`, `teacher_id`, `teacher_name`, `semester`, `lab`, `department_id`, `first_class_date`, `first_class_time`, `second_class_date`, `second_class_time`, `room`, `scheduled`, `type`, `batch`) VALUES
(72, 0, 'cosc008', 'ghghgh', 4, 4, 9, 'kalkidan  firaol  lemma', 1, 'false', 4, '', '', '', '', 'room2', 0, 'regular', ''),
(81, 1, 'accounting22', 'object oriented programming 2', 4, 4, 5, 'meka  fira  beki', 1, 'false', 3, '', '', '', '', 'room2', 0, 'Regular', ''),
(83, 2, 'bussiness22', 'system analysis and design', 4, 4, 13, 'malakuuu  lemma  tadesa', 1, 'false', 2, 'wednesday', '4:30 local', 'thursday', '4:30 local', 'room2', 0, 'Regular', ''),
(84, 3, 'bussiness33', 'system analysis and design', 4, 4, 13, 'malakuuu  lemma  tadesa', 1, 'true', 2, 'tusday', '2:30 local', 'tusday', '4:30 local', 'lab2', 0, 'Regular', ''),
(87, 4, 'bussiness234', 'enter ', 4, 4, 3, 'getahun  tewdros  dastaasss', 2, 'true', 2, 'wednesday', '2:30 local', 'tusday', '4:30 local', 'lab1', 0, 'Regular', ''),
(88, 94, 'cosc007', 'object oriented programming', 4, 4, 5, 'meka  fira  beki', 1, 'true', 1, 'monday', '4:30 local', 'monday', '7:30 local', 'lab2', 0, 'Regular', ''),
(89, 94, 'cosc007', 'object oriented programming', 4, 4, 5, 'meka  fira  beki', 1, 'false', 1, 'wednesday', '7:30 local', 'thursday', '7:30 local', 'room2', 0, 'Regular', ''),
(90, 94, 'cosc007', 'object oriented programming', 4, 4, 2, 'tomase  yonasaaaddd  aman', 1, 'false', 1, 'wednesday', '2:30 local', 'wednesday', '4:30 local', 'room3', 0, 'Regular', ''),
(91, 94, 'cosc007', 'object oriented programming', 4, 4, 1, 'niguse  tadeseee  girmay', 1, 'false', 1, '', '', '', '', 'room2', 0, 'Regular', '1st'),
(92, 94, 'cosc007', 'object oriented programming', 4, 4, 2, 'tomase  yonasaaaddd  aman', 1, 'false', 1, '', '', '', '', 'room1', 0, 'Regular', '2st');

-- --------------------------------------------------------

--
-- Table structure for table `unity_departments`
--

CREATE TABLE `unity_departments` (
  `id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `table_name` varchar(255) NOT NULL,
  `students_table` varchar(255) NOT NULL,
  `database_name` varchar(255) NOT NULL,
  `avaliable_corses_table` varchar(255) NOT NULL,
  `head_id` int(11) NOT NULL,
  `study_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unity_departments`
--

INSERT INTO `unity_departments` (`id`, `department_name`, `table_name`, `students_table`, `database_name`, `avaliable_corses_table`, `head_id`, `study_year`) VALUES
(1, 'cosc', 'cosc_all_courses', 'cosc_students', 'coscdb', 'cosc_avaliable_courses', 2, 4),
(2, 'bussiness and managment', 'bussiness_and_admin_all_courses', 'bussiness_students', 'bussinessdb', 'bussiness_avaliable_courses', 13, 4),
(3, 'accounting and finance', 'accounting_all_courses', 'accouting_students', 'accountingdb', 'accounting_avaliable_courses', 10, 4),
(4, 'marketing', 'marketing_all_courses', 'marketing_students', 'marketingdb', 'marketing_avaliable_courses', 9, 4);

-- --------------------------------------------------------

--
-- Table structure for table `unity_rooms`
--

CREATE TABLE `unity_rooms` (
  `id` int(11) NOT NULL,
  `special` int(11) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `morning_1` int(11) NOT NULL,
  `morning_2` int(11) NOT NULL,
  `morning_3` int(11) NOT NULL,
  `morning_4` int(11) NOT NULL,
  `morning_5` int(11) NOT NULL,
  `morning_6` int(11) NOT NULL,
  `morning_7` int(11) NOT NULL,
  `morning_8` int(11) NOT NULL,
  `morning_9` int(11) NOT NULL,
  `morning_10` int(11) NOT NULL,
  `morning_11` int(11) NOT NULL,
  `morning_12` int(11) NOT NULL,
  `afternoon_1` int(11) NOT NULL,
  `afternoon_2` int(11) NOT NULL,
  `afternoon_3` int(11) NOT NULL,
  `afternoon_4` int(11) NOT NULL,
  `afternoon_5` int(11) NOT NULL,
  `afternoon_6` int(11) NOT NULL,
  `afternoon_7` int(11) NOT NULL,
  `afternoon_8` int(11) NOT NULL,
  `afternoon_9` int(11) NOT NULL,
  `afternoon_10` int(11) NOT NULL,
  `afternoon_11` int(11) NOT NULL,
  `afternoon_12` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unity_rooms`
--

INSERT INTO `unity_rooms` (`id`, `special`, `room_name`, `morning_1`, `morning_2`, `morning_3`, `morning_4`, `morning_5`, `morning_6`, `morning_7`, `morning_8`, `morning_9`, `morning_10`, `morning_11`, `morning_12`, `afternoon_1`, `afternoon_2`, `afternoon_3`, `afternoon_4`, `afternoon_5`, `afternoon_6`, `afternoon_7`, `afternoon_8`, `afternoon_9`, `afternoon_10`, `afternoon_11`, `afternoon_12`) VALUES
(1, 0, 'room1', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 'room2', 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 1),
(3, 0, 'room3', 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 1, 'lab1', 1, 0, 1, 1, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 'room4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 1, 'lab2', 0, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 'room5', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 1, 'lab3', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 1, 'lab4', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `unity_schedule`
--

CREATE TABLE `unity_schedule` (
  `id` int(11) NOT NULL,
  `registration_begin_day` varchar(255) NOT NULL,
  `registration_end_day` varchar(255) NOT NULL,
  `class_start_day` varchar(255) NOT NULL,
  `final_start_day` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unity_schedule`
--

INSERT INTO `unity_schedule` (`id`, `registration_begin_day`, `registration_end_day`, `class_start_day`, `final_start_day`) VALUES
(1, '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounting_all_courses`
--
ALTER TABLE `accounting_all_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pre_course_id` (`pre_course_id`);

--
-- Indexes for table `bussiness_and_admin_all_courses`
--
ALTER TABLE `bussiness_and_admin_all_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pre_course_id` (`pre_course_id`);

--
-- Indexes for table `class_time_table`
--
ALTER TABLE `class_time_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cosc_all_courses`
--
ALTER TABLE `cosc_all_courses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course_id` (`course_id`),
  ADD KEY `pre_course_id` (`pre_course_id`),
  ADD KEY `pre_course_id_2` (`pre_course_id`);

--
-- Indexes for table `cosc_avaliable_courses`
--
ALTER TABLE `cosc_avaliable_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cosc_students`
--
ALTER TABLE `cosc_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing_all_courses`
--
ALTER TABLE `marketing_all_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pre_course_id` (`pre_course_id`),
  ADD KEY `pre_course_id_2` (`pre_course_id`);

--
-- Indexes for table `member_accounts`
--
ALTER TABLE `member_accounts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `member_id` (`member_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`SEM_ID`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unity_avaliable_courses`
--
ALTER TABLE `unity_avaliable_courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cour_id` (`cour_id`),
  ADD KEY `department_id` (`department_id`),
  ADD KEY `cour_id_2` (`cour_id`);

--
-- Indexes for table `unity_departments`
--
ALTER TABLE `unity_departments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `head_id` (`head_id`);

--
-- Indexes for table `unity_rooms`
--
ALTER TABLE `unity_rooms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `room_name` (`room_name`);

--
-- Indexes for table `unity_schedule`
--
ALTER TABLE `unity_schedule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounting_all_courses`
--
ALTER TABLE `accounting_all_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bussiness_and_admin_all_courses`
--
ALTER TABLE `bussiness_and_admin_all_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `class_time_table`
--
ALTER TABLE `class_time_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cosc_all_courses`
--
ALTER TABLE `cosc_all_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `cosc_avaliable_courses`
--
ALTER TABLE `cosc_avaliable_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `marketing_all_courses`
--
ALTER TABLE `marketing_all_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `member_accounts`
--
ALTER TABLE `member_accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `SEM_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `unity_avaliable_courses`
--
ALTER TABLE `unity_avaliable_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
--
-- AUTO_INCREMENT for table `unity_departments`
--
ALTER TABLE `unity_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `unity_rooms`
--
ALTER TABLE `unity_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `unity_schedule`
--
ALTER TABLE `unity_schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `member_accounts`
--
ALTER TABLE `member_accounts`
  ADD CONSTRAINT `member_accounts_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `unity_avaliable_courses`
--
ALTER TABLE `unity_avaliable_courses`
  ADD CONSTRAINT `unity_avaliable_courses_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `unity_departments` (`id`);

--
-- Constraints for table `unity_departments`
--
ALTER TABLE `unity_departments`
  ADD CONSTRAINT `unity_departments_ibfk_1` FOREIGN KEY (`head_id`) REFERENCES `teachers` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
