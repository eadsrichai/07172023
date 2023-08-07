-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2023 at 11:09 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `acc_id` int(11) NOT NULL,
  `acc_username` varchar(50) NOT NULL,
  `acc_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_id`, `acc_username`, `acc_password`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `dep`
--

CREATE TABLE `dep` (
  `id_dep` varchar(5) NOT NULL,
  `name_dep` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dep`
--

INSERT INTO `dep` (`id_dep`, `name_dep`) VALUES
('01', 'ช่างยนต์'),
('02', 'ช่างกลโรงงาน'),
('03', 'ช่างไฟฟ้า'),
('04', 'อิเลคทรอนิกส์'),
('08', 'คอมพิวเตอร์ธุรกิจ');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id_stu` varchar(13) NOT NULL,
  `gender_stu` varchar(10) NOT NULL,
  `fname_stu` varchar(50) NOT NULL,
  `lname_stu` varchar(50) NOT NULL,
  `tel_stu` varchar(10) NOT NULL,
  `email_stu` varchar(50) NOT NULL,
  `id_dep` varchar(5) NOT NULL,
  `id_teach` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id_stu`, `gender_stu`, `fname_stu`, `lname_stu`, `tel_stu`, `email_stu`, `id_dep`, `id_teach`) VALUES
('65209010001', 'นาย', 'กีรดา', 'สัจจารักษ์', '987654321', 'aaa@gmail.com', '08', '001'),
('65209010002', 'นาย', 'ธรณ์เทพ', 'สัจจารักษ์', '987654321', 'aaa@gmail.com', '01', '002');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `id_teach` varchar(5) NOT NULL,
  `fname_teach` varchar(50) NOT NULL,
  `lname_teach` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id_teach`, `fname_teach`, `lname_teach`) VALUES
('001', 'วุฒิวงศ์', 'เอียดศรีชาย'),
('002', 'ลักษมี', 'เขาทอง'),
('003', 'สมพร', 'โมกษะรัตน์');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `dep`
--
ALTER TABLE `dep`
  ADD PRIMARY KEY (`id_dep`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_stu`),
  ADD KEY `id_dep` (`id_dep`),
  ADD KEY `student_ibfk_2` (`id_teach`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_teach`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id_dep`) REFERENCES `dep` (`id_dep`),
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`id_teach`) REFERENCES `teacher` (`id_teach`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
