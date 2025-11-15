-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql105.infinityfree.com
-- Generation Time: Nov 15, 2025 at 01:47 PM
-- Server version: 11.4.7-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_31564581_register`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `age` int(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `registraion` int(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `roll` int(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `blood_group` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `additional_message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`ID`, `firstname`, `lastname`, `email`, `telephone`, `age`, `gender`, `registraion`, `section`, `roll`, `semester`, `session`, `department`, `blood_group`, `password`, `additional_message`) VALUES
(1, 'Ahmod', 'Abdullah', 'nabilahmodabdullah@gmail.com', '+8801996529076', 21, 'Male', 1502050149, 'B2', 424036, '4th Semester', '19-20', 'Computer', 'O Positive(+)', '123123123123', '123123123'),
(2, 'Jakaria', 'Jahangir', 'jakariajahangir@yahoo.com', '+8801996525482', 20, 'Male', 1502051579, 'B2', 424014, '4th Semester', '19-20', 'Computer', 'B Positive(+)', '213123123123', 'Hi There'),
(3, 'Parvez', 'Islam', 'parvesislam30472@gmail.com', '01635766255', 21, 'Male', 1502054781, 'B2', 432825, '4th Semester', '19-20', 'Computer', 'AB Positive(+)', 'yuagsduygasuydgas', 'How are you?'),
(4, 'Mojabbir', 'Hossain', 'mojabbirhossain@hotmail.com', '+880199652948847', 21, 'Male', 2147483647, 'B2', 1231243, '4th Semester', '19-20', 'Electrical', 'O Positive(+)', '8872630', 'Hellow'),
(6, 'Ghbcf', 'Hhhhj', 'mominhosanemon@gmail.com', 'Ggjkn', 25, 'Male', 0, 'Vbjbj', 8558, '7th Semester', 'Ghbb', 'Power', 'AB Positive(+)', 'thbfgh', 'Dhdjdbfbf'),
(7, 'Ahmod', 'Abdullah', 'nabilahmodabdullah@gmail.com', '+8801996529076', 123, 'Male', 1231231, 'A2', 123123, '2nd Semester', '1231231', 'Electrical', 'B Negative(-)', 'giiurcbkoi', 'hdfjkm'),
(8, 'Emilio', 'Cueto', 'ahmodabdullah987@yahoo.com', '+8801996529076', 123, 'Male', 1231412, 'A2', 1231243, '1st Semester', '19-20', 'Computer', '', 'uyguytdcytv489489', '23rd '),
(11, 'Taha', 'Ahmed', 'asdasda@gmail.com', '1516518502', 12, 'Female', 123123, 'wqe1', 123, '1st Semester', '123', 'Computer', 'A Positive(+)', '123123', 'kutta\r\n'),
(12, 'Raihan', 'Mia', 'hagsh@gmwil.com', '187763805155776', 23, 'Male', 9364, 'Hsgsv', 96549, '2nd Semester', 'Usgsiwow', 'Computer', 'B Negative(-)', 'dhhsjwiowgsowkwn', 'Hwhegegehek');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
