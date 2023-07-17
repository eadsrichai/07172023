-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 10:41 AM
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
('08', 'คอมพิวเตอร์ธุรกิจ'),
('09', 'เทคโนโลยีสารสนเทศ');

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
('65209010001', 'นางสาว', 'กีรดา', 'สัจจารักษ์', '123456789', 'abc@gmail.com', '01', '001'),
('65209010002', 'นาย', 'ณนธพร', 'สุขวิชัย', '987654321', 'xyz@hotmail.com', '02', '002'),
('65209010003', 'นาย', 'ธรณ์เทพ', 'สโมสร', '123789654', 'alo@gmail.com', '08', '001'),
('65209010006', 'นางสาว', 'ธาราทิพย์', 'บัวจันทร์', '9999999', 'wutkmutt@hotmail.com', '09', '002');

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
('002', 'ลักษมี', 'เขาทอง');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dep`
--
ALTER TABLE `dep`
  ADD PRIMARY KEY (`id_dep`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_stu`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_teach`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
