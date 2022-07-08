-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- المزود: localhost
-- أنشئ في: 29 يونيو 2021 الساعة 16:59
-- إصدارة المزود: 5.5.24-log
-- PHP إصدارة: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- قاعدة البيانات: `libraryproject`
--
CREATE DATABASE `libraryproject` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `libraryproject`;

-- --------------------------------------------------------

--
-- بنية الجدول `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `ISBN` varchar(10) NOT NULL,
  `BOOKNAME` varchar(10) NOT NULL,
  `PICSNAME` varchar(10) NOT NULL,
  PRIMARY KEY (`ISBN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `books`
--

INSERT INTO `books` (`ISBN`, `BOOKNAME`, `PICSNAME`) VALUES
('1', 'THE AAUP', '1'),
('test2', 'test2', '1'),
('test3', 'test2', '1');

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `usertype` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`email`, `password`, `usertype`) VALUES
('Admin@admin.com', 'Admin', 'admin'),
('user@gmail.com', 'user', 'student');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
