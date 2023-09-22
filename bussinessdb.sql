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
-- Database: `bussinessdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `83`
--

CREATE TABLE `83` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `FIRST_MIDEXAM` int(11) NOT NULL,
  `SECOND_MIDEXAM` int(11) NOT NULL,
  `ASSIGNMENT` int(11) NOT NULL,
  `FINAL` int(11) NOT NULL,
  `CLASS_ATENDANCE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `GRADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `84`
--

CREATE TABLE `84` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `FIRST_MIDEXAM` int(11) NOT NULL,
  `SECOND_MIDEXAM` int(11) NOT NULL,
  `ASSIGNMENT` int(11) NOT NULL,
  `FINAL` int(11) NOT NULL,
  `CLASS_ATENDANCE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `GRADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `87`
--

CREATE TABLE `87` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `FIRST_MIDEXAM` int(11) NOT NULL,
  `SECOND_MIDEXAM` int(11) NOT NULL,
  `ASSIGNMENT` int(11) NOT NULL,
  `FINAL` int(11) NOT NULL,
  `CLASS_ATENDANCE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `GRADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bussiness11`
--

CREATE TABLE `bussiness11` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bussiness22`
--

CREATE TABLE `bussiness22` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bussiness33`
--

CREATE TABLE `bussiness33` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bussiness234`
--

CREATE TABLE `bussiness234` (
  `id` int(11) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bussiness234`
--

INSERT INTO `bussiness234` (`id`, `course_id`, `date`, `teacher_name`, `teacher_id`, `type`, `semester`) VALUES
(2, 87, '2021/10/11', 'getahun  tewdros  dastaasss', 3, 'Regular', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `83`
--
ALTER TABLE `83`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `84`
--
ALTER TABLE `84`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `87`
--
ALTER TABLE `87`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bussiness11`
--
ALTER TABLE `bussiness11`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bussiness22`
--
ALTER TABLE `bussiness22`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bussiness33`
--
ALTER TABLE `bussiness33`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bussiness234`
--
ALTER TABLE `bussiness234`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `83`
--
ALTER TABLE `83`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `84`
--
ALTER TABLE `84`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `87`
--
ALTER TABLE `87`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bussiness11`
--
ALTER TABLE `bussiness11`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bussiness22`
--
ALTER TABLE `bussiness22`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bussiness33`
--
ALTER TABLE `bussiness33`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bussiness234`
--
ALTER TABLE `bussiness234`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
