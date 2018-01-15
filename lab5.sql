-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- เวอร์ชั่นของเซิร์ฟเวอร์: 5.6.12-log
-- รุ่นของ PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- ฐานข้อมูล: `lab5`
--
CREATE DATABASE IF NOT EXISTS `lab5` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lab5`;

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `idnum` int(11) NOT NULL,
  `titlename` varchar(10) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `id_fac` int(11) DEFAULT NULL,
  `name_fac` varchar(30) DEFAULT NULL,
  `id_department` int(11) DEFAULT NULL,
  `name_department` varchar(30) DEFAULT NULL,
  `name_group` varchar(30) DEFAULT NULL,
  `name_project` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idnum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- dump ตาราง `student`
--

INSERT INTO `student` (`idnum`, `titlename`, `firstname`, `lastname`, `id_fac`, `name_fac`, `id_department`, `name_department`, `name_group`, `name_project`, `age`, `sex`) VALUES
(0, 'a', 's', 'd', 0, 'sci', 0, 'comp', 'vvvvvv', 'asd', 33, 'M'),
(1, '2', '3', '4', 5, '6', 7, '8', '9', '10', 11, 'M'),
(9, '3', '3', '111', 0, '2', 0, '3', '111', '666', 111, 'F');

-- --------------------------------------------------------

--
-- โครงสร้างตาราง `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- dump ตาราง `user`
--

INSERT INTO `user` (`username`, `password`, `level`) VALUES
('root', '123', 'admin'),
('benznest', NULL, 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
