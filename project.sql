-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 10:10 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `milage` varchar(20) NOT NULL,
  `transmission` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `model`, `milage`, `transmission`, `image`, `price`) VALUES
(1, 'Mercedes Benz R3', '2015', '25K', 'auto', 'car-rent-1.png', '35000'),
(3, 'BMW X5', '2019', '57K', 'manual', 'car-rent-2.png', '40000'),
(4, 'Audi R8', '2020', '54K', 'Semi-Auto', 'car-rent-3.png', '22000'),
(5, 'Audi Q5', '2019', '85K', 'auto', 'car-rent-4.png', '90000'),
(6, 'Mercedes S-class', '2019', '40K', 'auto', 'car-rent-5.png', '10000'),
(7, 'Audi R8', '2021', '15K', 'auto', 'car-rent-6.png', '200'),
(17, 'mercedes', '2020', '25', 'Auto', 'mercedes.png', '5000'),
(20, 'CORAEL', '2025', '0', 'Manual', 'mercedes.png', '150000'),
(21, 'marceds', '2055', '25', 'Auto', 'mercedes.png', '25000'),
(22, 'elentra', '2020', '45', 'Manual', 'elentra.png', '2550');

-- --------------------------------------------------------

--
-- Table structure for table `car_booking`
--

CREATE TABLE `car_booking` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `pickup_location` varchar(50) NOT NULL,
  `pickup_date` varchar(50) NOT NULL,
  `adult` int(50) NOT NULL,
  `special_request` varchar(50) NOT NULL,
  `drop_location` varchar(50) NOT NULL,
  `pickup_time` varchar(50) NOT NULL,
  `child` int(50) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car_booking`
--

INSERT INTO `car_booking` (`id`, `first_name`, `last_name`, `email`, `mobile`, `pickup_location`, `pickup_date`, `adult`, `special_request`, `drop_location`, `pickup_time`, `child`, `payment`) VALUES
(51, 'aa', 'as', 'aassac@gmail.com', '75632', 'taiz', '12/01/2022', 1, 'safafa', 'ibb', '6:07 PM', 2, 'DirectCheck'),
(52, 'ali', 'lia', 'ali@gmail.com', '789456', 'taiz', '12/24/2022', 1, 'sacnaosc', 'taiz', '12:21 PM', 1, 'Bank'),
(53, 'laksnc', 'lnlckans', 'salc@gmail.com', '414814147', 'taiz', '12/24/2022', 3, 'lskn osdn', 'ibb', '12:21 PM', 3, 'DirectCheck'),
(54, 'aa', 'aa', 'aa@gmail.com', '77', 'dhamar', '12/07/2022', 1, 'xlk laka', 'taiz', '12:29 PM', 1, 'Paypal'),
(55, 'aa', 'aa', 'aa@gmail.com', '77', 'dhamar', '12/07/2022', 1, 'xlk laka', 'taiz', '12:29 PM', 1, 'Paypal'),
(56, 'www', 'www', 'www@gmail.com', '777', 'taiz', '12/07/2022', 1, 'kwqdnsa', 'taiz', '12:43 PM', 1, 'DirectCheck'),
(57, 'ee', 'ee', 'ee@gmail.com', '77', 'taiz', '12/07/2022', 2, 'm calca', 'ibb', '12:48 PM', 1, 'Bank'),
(58, 'alwaleed', 'alwaleed', 'alwaleed@gmail.com', '77777778', 'sanaa', '12/24/2022', 2, 'llmcaicja.ncsaoic,saoca', 'ibb', '4:23 PM', 3, 'Paypal'),
(59, 'lkjfoierut[9q', 'fjgoiurfijrf', 'a@gmail.com', '777777777777', 'ibb', '12/21/2022', 0, 'mcxnvlkfdj;voijvoSIJ', 'ibb', '8:31 AM', 0, 'Paypal'),
(60, 'alwaleed', 'dfdf', 'a@gmail.com', '565656555', 'sanaa', '12/10/2022', 1, 'dfdf', 'ibb', '8:42 AM', 2, 'Paypal'),
(61, 'Mohammed', 'alarifi', 'm@gmail.com', '7710', 'ibb', '12/10/2022', 3, 'from Mohammed', 'taiz', '8:51 AM', 2, 'DirectCheck'),
(62, 'alwalled', 'waleed', 'alwaleed@gmail.com', '7878787878', 'ibb', '12/10/2022', 4, 'roof', 'dhamar', '9:25 AM', 2, 'Paypal');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(50) NOT NULL,
  `id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `subject`, `message`, `id`) VALUES
('ali', 'ali@gmail.com', 'mimo', 'hello world', 3),
('mohammed ', 'mohammed@gmail.com', 'mohammed love you', 'i love mohammed', 4),
('alwaleedaa', 'a@gmail.com', 'Buy', 'Hello Doctor alwaleed', 6),
('hana', 'hana@gmail.com', 'hello world', 'jnsalcksanclaksnclka', 7);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(150) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `isadmin` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `image`, `designation`, `password`, `isadmin`) VALUES
(23, 'Ali Al-sanabani', 'ali.jpg', 'Designer', 123, 1),
(25, 'Mohammed Alerifi', 'alarifi.jpg', 'CS', 123, 1),
(27, 'Fahed Al-QADI', '2.jpeg', 'IT', 123, 1),
(28, 'Amr Al-Eyani', 'eyani.jpg', 'CS', 123, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`) VALUES
(18, 'ali@gmail.com', 'ali', '123'),
(19, 'alwaleed@gmail.com', 'alwaleed', '123'),
(20, 'pro@gmail.com', 'pro', '123'),
(22, 'alwaleed@gmail.com', 'alwaleed', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_booking`
--
ALTER TABLE `car_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `car_booking`
--
ALTER TABLE `car_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
