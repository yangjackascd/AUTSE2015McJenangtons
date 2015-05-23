-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-05-23 10:27:14
-- 服务器版本： 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aut_serl`
--

-- --------------------------------------------------------

--
-- 表的结构 `paper_table`
--

CREATE TABLE IF NOT EXISTS `paper_table` (
  `paper_id` int(10) NOT NULL,
  `paper_name` varchar(100) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `paper_title` varchar(20) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `class_experience_level` varchar(20) DEFAULT NULL,
  `paper_upload_date` datetime(1) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `paper_table`
--

INSERT INTO `paper_table` (`paper_id`, `paper_name`, `author`, `paper_title`, `year`, `class_experience_level`, `paper_upload_date`, `username`) VALUES
(1, 'The Need for Speed: Automating Acceptance Testing in an eXtreme Programming Environment', ' Lisa Crispin, Tip House, Carol Wade', 'ATDD', '2001', 'Professional', '2009-02-23 19:49:00.0', 'rwampler'),
(2, 'hospitality', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'software development ', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'software interestment ', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `user_account` varchar(20) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_type` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `user_table`
--

INSERT INTO `user_table` (`user_account`, `user_password`, `user_type`, `username`) VALUES
('jackascd', 'jackascd1', 'admin', 'Jake'),
('useraccount1', '1', 'register', 'Tim');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paper_table`
--
ALTER TABLE `paper_table`
 ADD PRIMARY KEY (`paper_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
 ADD PRIMARY KEY (`user_account`), ADD UNIQUE KEY `user_account` (`user_account`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
