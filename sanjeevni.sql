-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2020 at 07:31 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanjeevni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('v@gmail.com', 'vis122vis122');

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE `app` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pateint_name` varchar(200) NOT NULL,
  `disease` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `time1` varchar(200) NOT NULL,
  `time2` varchar(200) NOT NULL,
  `time3` varchar(200) NOT NULL,
  `req_time` varchar(100) NOT NULL,
  `remark` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `app`
--

INSERT INTO `app` (`post_id`, `user_id`, `doctor_name`, `email`, `pateint_name`, `disease`, `date`, `time1`, `time2`, `time3`, `req_time`, `remark`) VALUES
(17, 8, '', '', 'ankur', '', '', '', '', '', '2020-10-27 20:50:30', ''),
(18, 8, '', '', 'anil', '', '', '', '', '', '2020-10-27 22:32:46', ''),
(20, 9, '', '', 'pooja jain', '', '', '', '', '', '2020-10-28 00:31:33', ''),
(21, 9, '', '', 'anil jain', '', '', '', '', '', '2020-10-28 00:31:42', ''),
(28, 13, '', '', 'azazaza', '', '', '', '', '', '2020-11-02 22:47:54', ''),
(29, 13, '', '', 'asasas', '', '', '', '', '', '2020-11-02 22:47:59', '');

-- --------------------------------------------------------

--
-- Table structure for table `blood_bank`
--

CREATE TABLE `blood_bank` (
  `id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_no` varchar(100) NOT NULL,
  `country` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(30) NOT NULL,
  `a_positive` varchar(20) NOT NULL,
  `a_negative` varchar(20) NOT NULL,
  `b_positiveb` varchar(20) NOT NULL,
  `b_negative` varchar(20) NOT NULL,
  `ab_positive` varchar(20) NOT NULL,
  `ab_negative` varchar(20) NOT NULL,
  `o_positive` varchar(20) NOT NULL,
  `o_negative` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `reg_date` text NOT NULL,
  `ver_code` int(50) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_bank`
--

INSERT INTO `blood_bank` (`id`, `email`, `pass`, `name`, `address`, `phone_no`, `country`, `state`, `district`, `a_positive`, `a_negative`, `b_positiveb`, `b_negative`, `ab_positive`, `ab_negative`, `o_positive`, `o_negative`, `image`, `reg_date`, `ver_code`, `status`) VALUES
(3, 'poojajain20135@gmail.com', 'poo122poo122', 'pooja blood bank', 'kotla chungi', '8433413306', 'India', 'Uttar Pradesh', 'Firozabad', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Maa-saraswati-hd-wallpaper.jpg', '2020-10-21 22:23:22', 1021244940, 'verified'),
(4, 'v@gmail.com', 'abcd1234', 'blood bank', 'bodh ashram', '8433413306', 'India', 'Uttar Pradesh', 'Firozabad', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'wp2700080.jpg', '2020-11-04 20:09:41', 1820374415, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE `blood_donor` (
  `id` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(100) NOT NULL,
  `blood_grp` varchar(100) NOT NULL,
  `phone_no` varchar(20) NOT NULL,
  `country` varchar(10) NOT NULL,
  `state` varchar(20) NOT NULL,
  `district` varchar(20) NOT NULL,
  `any_desease` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `reg_date` text NOT NULL,
  `ver_code` int(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_donor`
--

INSERT INTO `blood_donor` (`id`, `email`, `pass`, `name`, `age`, `address`, `blood_grp`, `phone_no`, `country`, `state`, `district`, `any_desease`, `image`, `reg_date`, `ver_code`, `status`) VALUES
(1, 'vishaljain20135@gmail.com', 'vis122vis122', 'vishal jain', 21, 'kailash nagar', 'B+', '5454545454545', 'India', 'Uttar Pradesh', 'Firozabad', '', 'IMG-20190521-WA0010.jpg', 'NOW()', 555688235, 'verified'),
(3, 'v@gmail.com', 'abcd1234', 'anil jain', 40, 'kailash nagar', 'B+', '8433413307', 'India', 'Uttar Pradesh', 'Firozabad', '', 'wp2700080.jpg', '2020-11-04 20:11:41', 20134983, 'verified'),
(4, 'p@gmail.com', 'abcd1234', 'pooja jain', 40, 'firozabad', 'B+', '8433413306', 'India', 'Uttar Pradesh', 'Firozabad', 'no', 'wp2700080.jpg', '2020-11-04 20:45:01', 1847004101, 'verified');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_list`
--

CREATE TABLE `doctor_list` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `doctor_name` varchar(200) NOT NULL,
  `specialization` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_list`
--

INSERT INTO `doctor_list` (`post_id`, `user_id`, `doctor_name`, `specialization`, `time`) VALUES
(7, 9, 'vishal jain', 'vishal jain', 'vishal jain'),
(8, 9, 'vishal jain', 'vishal jain', 'vishal jain'),
(9, 9, 'vishal jain', 'vishal jain', 'vishal jain'),
(10, 9, 'vishal jain', 'vishal jain', 'vishal jain'),
(11, 8, 'vishal jain', 'vishal jain', 'vishal'),
(12, 8, 'adarsh', 'child doctor', '5 se 7'),
(13, 13, 'vishal jain', 'vishal jain', 'vishal jain');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `type_of_hospital` varchar(100) NOT NULL,
  `hospital_address` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `h_phone_no` varchar(20) NOT NULL,
  `emergency` varchar(100) NOT NULL,
  `bed` varchar(10) NOT NULL,
  `icu` varchar(10) NOT NULL,
  `ventilator` varchar(10) NOT NULL,
  `oxygen` varchar(100) NOT NULL,
  `ambulance_availability` varchar(100) NOT NULL,
  `amubulance_phone_no` varchar(20) NOT NULL,
  `male_doctor` varchar(100) NOT NULL,
  `female_doctor` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `reg_date` text NOT NULL,
  `ver_code` int(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `email`, `pass`, `hospital_name`, `type_of_hospital`, `hospital_address`, `country`, `state`, `district`, `h_phone_no`, `emergency`, `bed`, `icu`, `ventilator`, `oxygen`, `ambulance_availability`, `amubulance_phone_no`, `male_doctor`, `female_doctor`, `image`, `reg_date`, `ver_code`, `status`) VALUES
(9, 'abcd1234@gmail.com', 'abcd1234', 'xyz', 'Private Hospital', 'jain mandir', 'India', 'Uttar Pradesh', 'Firozabad', '8433413306', 'Open', '65', '51', '21', 'No', 'No', '', 'Yes', 'No', 'IMG-20190521-WA0010.jpg', '2020-10-18 18:39:09', 975490730, 'verified'),
(10, 'vishaljain20135@gmail.com', 'vis122vis122', 'abcd', 'Private Hospital', 'sdnsjd', 'India', 'Uttar Pradesh', 'Firozabad', '84334336415', 'Open', '545', '545', '5154', 'Yes', 'Yes', '55', 'Yes', 'No', 'default.jpg', '2020-10-21 22:06:37', 424230247, 'verified'),
(13, 'v@gmail.com', 'abcd1234', 'trauma center', 'Charitable Hospital', 'jain mandir', 'India', 'Uttar Pradesh', 'Firozabad', '8433413307', 'Open', '111', '11', '1', 'Yes', 'Yes', '8433413306', 'Yes', 'No', 'wp2700080.jpg', '2020-11-04 19:54:54', 1781612551, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `app`
--
ALTER TABLE `app`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `blood_bank`
--
ALTER TABLE `blood_bank`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blood_donor`
--
ALTER TABLE `blood_donor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_list`
--
ALTER TABLE `doctor_list`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app`
--
ALTER TABLE `app`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `blood_bank`
--
ALTER TABLE `blood_bank`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blood_donor`
--
ALTER TABLE `blood_donor`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_list`
--
ALTER TABLE `doctor_list`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
