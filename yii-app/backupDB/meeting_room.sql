-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: mariaDB
-- Generation Time: 12 เม.ย. 2020 เมื่อ 04:56 AM
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
-- Database: `meeting_room`
--

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `room_id` int(11) NOT NULL,
  `gadget` longtext DEFAULT NULL COMMENT 'อุปกรณ์',
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- dump ตาราง `events`
--

INSERT INTO `events` (`id`, `title`, `body`, `room_id`, `gadget`, `start`, `end`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(77, 'aaa', '', 1, '[\"1\",\"3\"]', '2020-03-30 06:30:00', '2020-03-30 09:00:00', '2020-04-11', '2020-04-11', 1, 1),
(78, 'ประชุมเชิงวิชาการเรื่องการใช้โปรแกรม', '<p>หหกหกดหกด</p>\r\n', 1, '[\"2\",\"3\"]', '2020-04-11 17:00:00', '2020-04-11 20:00:00', '2020-04-11', '2020-04-11', 1, 1),
(79, 'ประชุมอมรมเรื่องการ CPR เบื้อวต้น', '', 1, '[\"3\"]', '2020-04-12 07:00:00', '2020-04-12 11:30:00', '2020-04-11', '2020-04-11', 1, 1);

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `gadget`
--

CREATE TABLE `gadget` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='อุปกรณ์, เครื่องมื';

--
-- dump ตาราง `gadget`
--

INSERT INTO `gadget` (`id`, `name`) VALUES
(1, 'Computer'),
(2, 'NoteBook'),
(3, 'เครื่องเสียง');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL COMMENT 'รหัส',
  `name` varchar(255) NOT NULL COMMENT 'ชื่อห้องประชุม',
  `class` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='ห้องประชุม';

--
-- dump ตาราง `room`
--

INSERT INTO `room` (`id`, `name`, `class`, `color`) VALUES
(1, 'ห้องประชุมทรายแก้ว', 'primary', '#007bff'),
(2, 'ห้องประชุมทาริน', 'danger', '#dc3545'),
(8, 'ห้องประชุมโอ๋', 'success', '#28a745'),
(9, 'ทดสอบ88', 'warning', '#ffc107');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gadget`
--
ALTER TABLE `gadget`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `gadget`
--
ALTER TABLE `gadget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัส', AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
