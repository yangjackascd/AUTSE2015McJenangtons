-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2015-05-27 05:07:22
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
  `paper_name` varchar(100) NOT NULL,
`paper_id` int(11) NOT NULL,
  `author` varchar(100) DEFAULT NULL,
  `paper_title` varchar(20) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `class_experience_level` varchar(20) DEFAULT NULL,
  `paper_upload_date` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL COMMENT '0 mean reject,1 mean accept  2 mean hold'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `paper_table`
--

INSERT INTO `paper_table` (`paper_name`, `paper_id`, `author`, `paper_title`, `year`, `class_experience_level`, `paper_upload_date`, `username`, `status`) VALUES
('The Need for Speed: Automating Acceptance Testing in an eXtreme Programming Environment', 1, ' Lisa Crispin, Tip House, Carol Wade', 'ATDD', '2001', 'Professional', '2009-02-23 19:49:00.', 'rwampler', '1'),
('hospitality', 2, 'Jake', 'HY', '2014', 'Professional', '2015-05-01 00:00:00.', 'jackascd', '1'),
('software development ', 3, 'Jake', 'SD', '2014', 'Professional', '2015-05-13 00:00:00.', 'jackascd', '1'),
('software interestment ', 4, 'Jake', 'SI', '2014', 'Professional', '2015-05-02 00:00:00.', 'jackascd', '1'),
('Here', 5, 'jake', 'Software', '2014', NULL, '05/27/2015 01:32:38 ', 'jackascd', '2'),
('womabi', 6, 'ninini', 'nimabi', '12345', NULL, '05/27/2015 02:52:25 ', 'jackascd', '2');

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

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paper_table`
--
ALTER TABLE `paper_table`
MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
