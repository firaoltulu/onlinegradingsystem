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
-- Database: `coscdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `1`
--

CREATE TABLE `1` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `FIRST_MIDEXAM` int(11) NOT NULL,
  `SECOND_MIDEXAM(ASS)` int(11) NOT NULL,
  `ASSIGNMENT` int(11) NOT NULL,
  `FINAL` int(11) NOT NULL,
  `CLASS_ATENDANCE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `GRADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `61`
--

CREATE TABLE `61` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `FIRST_MIDEXAM` int(11) NOT NULL,
  `SECOND_MIDEXAM(ASS)` int(11) NOT NULL,
  `ASSIGNMENT` int(11) NOT NULL,
  `FINAL` int(11) NOT NULL,
  `CLASS_ATENDANCE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `GRADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `61`
--

INSERT INTO `61` (`id`, `student_id`, `student_name`, `FIRST_MIDEXAM`, `SECOND_MIDEXAM(ASS)`, `ASSIGNMENT`, `FINAL`, `CLASS_ATENDANCE`, `TOTAL`, `GRADE`) VALUES
(1, 2, 'firaol', 20, 10, 10, 50, 10, 100, 0);

-- --------------------------------------------------------

--
-- Table structure for table `62`
--

CREATE TABLE `62` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `FIRST_MIDEXAM` int(11) NOT NULL,
  `SECOND_MIDEXAM(ASS)` int(11) NOT NULL,
  `ASSIGNMENT` int(11) NOT NULL,
  `FINAL` int(11) NOT NULL,
  `CLASS_ATENDANCE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `GRADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `63`
--

CREATE TABLE `63` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `FIRST_MIDEXAM` int(11) NOT NULL,
  `SECOND_MIDEXAM(ASS)` int(11) NOT NULL,
  `ASSIGNMENT` int(11) NOT NULL,
  `FINAL` int(11) NOT NULL,
  `CLASS_ATENDANCE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `GRADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `64`
--

CREATE TABLE `64` (
  `id` int(11) NOT NULL,
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

--
-- Dumping data for table `64`
--

INSERT INTO `64` (`id`, `student_id`, `student_name`, `FIRST_MIDEXAM`, `SECOND_MIDEXAM`, `ASSIGNMENT`, `FINAL`, `CLASS_ATENDANCE`, `TOTAL`, `GRADE`) VALUES
(1, 2, 'firaol', 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `65`
--

CREATE TABLE `65` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `FIRST_MIDEXAM` int(11) NOT NULL,
  `SECOND_MIDEXAM(ASS)` int(11) NOT NULL,
  `ASSIGNMENT` int(11) NOT NULL,
  `FINAL` int(11) NOT NULL,
  `CLASS_ATENDANCE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `GRADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `66`
--

CREATE TABLE `66` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `FIRST_MIDEXAM` int(11) NOT NULL,
  `SECOND_MIDEXAM(ASS)` int(11) NOT NULL,
  `ASSIGNMENT` int(11) NOT NULL,
  `FINAL` int(11) NOT NULL,
  `CLASS_ATENDANCE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `GRADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `67`
--

CREATE TABLE `67` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `FIRST_MIDEXAM` int(11) NOT NULL,
  `SECOND_MIDEXAM(ASS)` int(11) NOT NULL,
  `ASSIGNMENT` int(11) NOT NULL,
  `FINAL` int(11) NOT NULL,
  `CLASS_ATENDANCE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `GRADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `68`
--

CREATE TABLE `68` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `FIRST_MIDEXAM` int(11) NOT NULL,
  `SECOND_MIDEXAM(ASS)` int(11) NOT NULL,
  `ASSIGNMENT` int(11) NOT NULL,
  `FINAL` int(11) NOT NULL,
  `CLASS_ATENDANCE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `GRADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `69`
--

CREATE TABLE `69` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `FIRST_MIDEXAM` int(11) NOT NULL,
  `SECOND_MIDEXAM(ASS)` int(11) NOT NULL,
  `ASSIGNMENT` int(11) NOT NULL,
  `FINAL` int(11) NOT NULL,
  `CLASS_ATENDANCE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `GRADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `70`
--

CREATE TABLE `70` (
  `id` int(11) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `FIRST_MIDEXAM` int(11) NOT NULL,
  `SECOND_MIDEXAM(ASS)` int(11) NOT NULL,
  `ASSIGNMENT` int(11) NOT NULL,
  `FINAL` int(11) NOT NULL,
  `CLASS_ATENDANCE` int(11) NOT NULL,
  `TOTAL` int(11) NOT NULL,
  `GRADE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `71`
--

CREATE TABLE `71` (
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

--
-- Dumping data for table `71`
--

INSERT INTO `71` (`id`, `student_id`, `student_name`, `FIRST_MIDEXAM`, `SECOND_MIDEXAM`, `ASSIGNMENT`, `FINAL`, `CLASS_ATENDANCE`, `TOTAL`, `GRADE`) VALUES
(1, 12, 'firaol', 0, 4, 10, 0, 0, 14, 0),
(2, 2, 'amanuel', 4, 7, 0, 0, 0, 11, 0);

-- --------------------------------------------------------

--
-- Table structure for table `73`
--

CREATE TABLE `73` (
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
-- Table structure for table `88`
--

CREATE TABLE `88` (
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
-- Table structure for table `89`
--

CREATE TABLE `89` (
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
-- Table structure for table `90`
--

CREATE TABLE `90` (
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

--
-- Dumping data for table `90`
--

INSERT INTO `90` (`id`, `student_id`, `student_name`, `FIRST_MIDEXAM`, `SECOND_MIDEXAM`, `ASSIGNMENT`, `FINAL`, `CLASS_ATENDANCE`, `TOTAL`, `GRADE`) VALUES
(1, 34, 'amanuel', 20, 20, 10, 10, 0, 60, 0),
(2, 31, 'kidus', 2, 32, 20, 0, 0, 54, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cosc0009`
--

CREATE TABLE `cosc0009` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cosc006`
--

CREATE TABLE `cosc006` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cosc007`
--

CREATE TABLE `cosc007` (
  `id` int(11) UNSIGNED NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cosc007`
--

INSERT INTO `cosc007` (`id`, `course_id`, `date`, `teacher_name`, `teacher_id`, `type`, `semester`) VALUES
(1, 88, '2021/10/11', 'meka  fira  beki', 5, 'Regular', 1),
(2, 89, '2021/10/11', 'meka  fira  beki', 5, 'Regular', 1),
(3, 90, '2021/10/11', 'tomase  yonasaaaddd  aman', 2, 'Regular', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cosc008`
--

CREATE TABLE `cosc008` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cosc1`
--

CREATE TABLE `cosc1` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `firaoltululemma`
--

CREATE TABLE `firaoltululemma` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1`
--
ALTER TABLE `1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `61`
--
ALTER TABLE `61`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `62`
--
ALTER TABLE `62`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `63`
--
ALTER TABLE `63`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `64`
--
ALTER TABLE `64`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `65`
--
ALTER TABLE `65`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `66`
--
ALTER TABLE `66`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `67`
--
ALTER TABLE `67`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `68`
--
ALTER TABLE `68`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `69`
--
ALTER TABLE `69`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `70`
--
ALTER TABLE `70`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `71`
--
ALTER TABLE `71`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `73`
--
ALTER TABLE `73`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `88`
--
ALTER TABLE `88`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `89`
--
ALTER TABLE `89`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `90`
--
ALTER TABLE `90`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cosc007`
--
ALTER TABLE `cosc007`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1`
--
ALTER TABLE `1`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `61`
--
ALTER TABLE `61`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `62`
--
ALTER TABLE `62`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `63`
--
ALTER TABLE `63`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `64`
--
ALTER TABLE `64`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `65`
--
ALTER TABLE `65`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `66`
--
ALTER TABLE `66`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `67`
--
ALTER TABLE `67`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `68`
--
ALTER TABLE `68`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `69`
--
ALTER TABLE `69`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `70`
--
ALTER TABLE `70`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `71`
--
ALTER TABLE `71`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `73`
--
ALTER TABLE `73`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `88`
--
ALTER TABLE `88`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `89`
--
ALTER TABLE `89`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `90`
--
ALTER TABLE `90`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cosc007`
--
ALTER TABLE `cosc007`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
