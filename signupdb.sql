-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21 نوفمبر 2021 الساعة 07:54
-- إصدار الخادم: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signupdb`
--

-- --------------------------------------------------------

--
-- بنية الجدول `password_resets`
--

CREATE TABLE `password_resets` (
  `Id` int(100) NOT NULL,
  `Email` text NOT NULL,
  `Token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- بنية الجدول `user`
--

CREATE TABLE `user` (
  `Firstname` varchar(100) NOT NULL,
  `Lastname` varchar(100) NOT NULL,
  `Id` int(100) NOT NULL,
  `Address` text NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Phonenumber` int(30) NOT NULL,
  `Email` text NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- إرجاع أو استيراد بيانات الجدول `user`
--

INSERT INTO `user` (`Firstname`, `Lastname`, `Id`, `Address`, `Gender`, `Phonenumber`, `Email`, `Username`, `Password`) VALUES
('', '', 0, '', '', 0, '', '', ''),
('mahmoud', 'mohammed', 1, 'dvfdfd', 'Male', 24436, 'bdfdffd@cdvsd.dsgd', 'mah123', '123'),
('fdfgrfhf', 'ffgdfhdf', 3, 'gfh', 'Female', 547756, 'dfdd@sfsd.dsgs', 'fdgdf', '12'),
('fffffhhhhhhhhhhhhhh', 'jhhhhhhhhhhhhhhhh', 66, 'sdvdvd', 'Male', 5657644, 'fgngff@fbff.ytyjyj', 'xxx', '56');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
