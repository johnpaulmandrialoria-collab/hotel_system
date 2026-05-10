-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2026 at 03:25 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_cred`
--

CREATE TABLE `admin_cred` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(150) NOT NULL,
  `admin_pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_cred`
--

INSERT INTO `admin_cred` (`id`, `admin_name`, `admin_pass`) VALUES
(0, 'fchotel', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `carousel`
--

CREATE TABLE `carousel` (
  `sr_no` int(11) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carousel`
--

INSERT INTO `carousel` (`sr_no`, `image`) VALUES
(7, 'IMG_54760.jpg'),
(8, 'IMG_76999.jpg'),
(9, 'IMG_43050.jpg'),
(10, 'IMG_96458.jpg'),
(11, 'IMG_64227.jpg'),
(12, 'IMG_30496.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `sr_no` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gmap` varchar(100) NOT NULL,
  `pn1` bigint(20) NOT NULL,
  `pn2` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `iframe` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`sr_no`, `address`, `gmap`, `pn1`, `pn2`, `email`, `fb`, `insta`, `twitter`, `iframe`) VALUES
(1, 'Forbes St, Legazpi Port District, Legazpi City, AI', 'https://maps.app.goo.gl/ngQoC23CQd8G8RuJA', 9672063219, 9649250937, 'faircatch_hotel@gmail.com', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d248683.26868354832!2d123.77293105!3d13.1196956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a101687e9bf8a7:0x305252e78d14537a!2sLegazpi City, Albay!5e0!3m2!1sen!2sph!4v1777800439687!5m2!1sen!2sph');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `sr_no` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `site_about` varchar(250) NOT NULL,
  `shutdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`sr_no`, `site_title`, `site_about`, `shutdown`) VALUES
(1, 'FC Hotel', 'FC hotel at your service,we are here to serve you the best experience in your staycation. In this hotel, we are very approachable and very accommodating, we will make sure that you will have a good stay in our hotel.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `team_details`
--

CREATE TABLE `team_details` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `picture` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team_details`
--

INSERT INTO `team_details` (`sr_no`, `name`, `picture`) VALUES
(19, 'John Dee', 'IMG_23396.jpg'),
(21, 'Bob Johnson', 'IMG_52575.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_queries`
--

CREATE TABLE `user_queries` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `seen` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_queries`
--

INSERT INTO `user_queries` (`sr_no`, `name`, `email`, `subject`, `message`, `date`, `seen`) VALUES
(14, 'paul', 'johnpaulmandrialoria@gmail.com', 'abcd', '32erwer\r\ner\r\ner\r\neaw\r\nr\r\nawr\r\nae\r\nwrt\r\nwretar\r\naet\r\narewt\r\nery\r\nrty\r\nrt', '2026-05-09', 0),
(15, 'jonna', 'jonna@gmail.com', 'wqrwrewqrwwerwqer', 'erwerwaererw\r\nerw\r\netrwe\r\nraw\r\ne\r\n\r\nw\r\nt\r\nwetwert\r\ner\r\nt\r\nerr\r\n\r\ntertereryt', '2026-05-09', 0),
(16, 'paul', 'johnpaulmandrialoria@gmail.com', 'abcd', '32erwer\r\ner\r\ner\r\neaw\r\nr\r\nawr\r\nae\r\nwrt\r\nwretar\r\naet\r\narewt\r\nery\r\nrty\r\nrt', '2026-05-09', 0),
(17, 'paul', 'johnpaulmandrialoria@gmail.com', 'abcd', '32erwer\r\ner\r\ner\r\neaw\r\nr\r\nawr\r\nae\r\nwrt\r\nwretar\r\naet\r\narewt\r\nery\r\nrty\r\nrt', '2026-05-09', 0),
(18, 'paul', 'johnpaulmandrialoria@gmail.com', 'abcd', '32erwer\r\ner\r\ner\r\neaw\r\nr\r\nawr\r\nae\r\nwrt\r\nwretar\r\naet\r\narewt\r\nery\r\nrty\r\nrt', '2026-05-09', 0),
(19, 'paul', 'johnpaulmandrialoria@gmail.com', 'abcd', '32erwer\r\ner\r\ner\r\neaw\r\nr\r\nawr\r\nae\r\nwrt\r\nwretar\r\naet\r\narewt\r\nery\r\nrty\r\nrt', '2026-05-09', 0),
(20, 'paul', 'johnpaulmandrialoria@gmail.com', 'abcd', '32erwer\r\ner\r\ner\r\neaw\r\nr\r\nawr\r\nae\r\nwrt\r\nwretar\r\naet\r\narewt\r\nery\r\nrty\r\nrt', '2026-05-09', 0),
(21, 'paul', 'johnpaulmandrialoria@gmail.com', 'abcd', '32erwer\r\ner\r\ner\r\neaw\r\nr\r\nawr\r\nae\r\nwrt\r\nwretar\r\naet\r\narewt\r\nery\r\nrty\r\nrt', '2026-05-09', 0),
(22, 'paul', 'johnpaulmandrialoria@gmail.com', 'abcd', '32erwer\r\ner\r\ner\r\neaw\r\nr\r\nawr\r\nae\r\nwrt\r\nwretar\r\naet\r\narewt\r\nery\r\nrty\r\nrt', '2026-05-09', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_cred`
--
ALTER TABLE `admin_cred`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `team_details`
--
ALTER TABLE `team_details`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carousel`
--
ALTER TABLE `carousel`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_details`
--
ALTER TABLE `team_details`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
