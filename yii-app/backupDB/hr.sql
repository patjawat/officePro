-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: mariaDB
-- Generation Time: 11 เม.ย. 2020 เมื่อ 12:17 PM
-- เวอร์ชันของเซิร์ฟเวอร์: 10.4.10-MariaDB-1:10.4.10+maria~bionic
-- PHP Version: 7.2.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hr`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `hr_department`
--

CREATE TABLE `hr_department` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เก็บข้อมูลแผนกฝ่ายด';

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `hr_employee`
--

CREATE TABLE `hr_employee` (
  `id` varchar(255) NOT NULL COMMENT 'เลขบัตรประชาชน',
  `gender` varchar(11) NOT NULL COMMENT 'เพศ',
  `pname` varchar(255) NOT NULL COMMENT 'คำนำหน้า',
  `fname` varchar(255) NOT NULL COMMENT 'ชื่อ',
  `lname` varchar(255) NOT NULL COMMENT 'นามสกุล',
  `birthdate` date NOT NULL COMMENT 'วันเกิด',
  `department_id` int(11) NOT NULL COMMENT 'แผนก/ฝ่าย',
  `position_id` int(11) NOT NULL COMMENT 'ตำแหน่งงาน',
  `salary` double NOT NULL COMMENT 'แก้ไขโดย',
  `photo` varchar(255) DEFAULT NULL COMMENT 'รูปถ่าย',
  `phone` varchar(255) DEFAULT NULL COMMENT 'โทรศัพท์',
  `job_start` date NOT NULL COMMENT 'เริ่มทำงาน',
  `job_expire` date DEFAULT NULL COMMENT 'วันที่ลาออก',
  `created_at` datetime NOT NULL COMMENT 'สร้างเมื่อ',
  `updated_at` datetime NOT NULL COMMENT 'แก้ไขเมื่อ',
  `created_by` int(11) NOT NULL COMMENT 'สร้างโดย',
  `updated_by` int(11) NOT NULL COMMENT 'สร้างโดย'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ข้อมูลพนักงาน';

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `hr_job_position`
--

CREATE TABLE `hr_job_position` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `name` varchar(255) NOT NULL COMMENT 'ชื่อตำหน่ง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='เก็บตำแหน่งงาน';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hr_department`
--
ALTER TABLE `hr_department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr_employee`
--
ALTER TABLE `hr_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hr_job_position`
--
ALTER TABLE `hr_job_position`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hr_department`
--
ALTER TABLE `hr_department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr_job_position`
--
ALTER TABLE `hr_job_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส';
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
