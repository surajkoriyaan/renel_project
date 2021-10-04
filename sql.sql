-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2021 at 04:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `renal_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `adhar` varchar(150) NOT NULL,
  `dob` varchar(150) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `img` varchar(150) NOT NULL,
  `created_at` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `adhar`, `dob`, `gender`, `address`, `mobile`, `email`, `password`, `img`, `created_at`) VALUES
(5, 'arun dash', '0987654321', '2020-03-02', 'female', 'telo bokaro     ', '0987654321', 'arun@gmail.com', '12345', 'zomato.jpg', '04/08/2021');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `state` varchar(150) NOT NULL,
  `city` varchar(150) NOT NULL,
  `block` varchar(150) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `staf` varchar(200) NOT NULL,
  `created_at` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `name`, `state`, `city`, `block`, `amount`, `staf`, `created_at`) VALUES
(3, 'sec8', 'bihar', 'patna', 'patna', '100', '10', '06/08/2021');

-- --------------------------------------------------------

--
-- Table structure for table `chart`
--

CREATE TABLE `chart` (
  `id` int(11) NOT NULL,
  `days` varchar(200) NOT NULL,
  `patient` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chart`
--

INSERT INTO `chart` (`id`, `days`, `patient`) VALUES
(18, '06/08/2021', '2');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `adhar` varchar(150) NOT NULL,
  `dob` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(200) NOT NULL,
  `img` varchar(150) NOT NULL,
  `created_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`id`, `name`, `adhar`, `dob`, `gender`, `address`, `mobile`, `email`, `password`, `img`, `created_at`) VALUES
(2, 'reshma kumari', '78687666887578757', '2021-08-12', 'female', 'wqsqw edwedfwe ', '8809081148', 'reshma@gmail.com', '1234', 'images.png', '05/08/2021');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `adhar` varchar(200) NOT NULL,
  `dob` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `branch` varchar(150) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `img` varchar(150) NOT NULL,
  `created_at` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `adhar`, `dob`, `gender`, `address`, `mobile`, `branch`, `amount`, `img`, `created_at`) VALUES
(3, 'mithon kumar', '234353465656', '2021-08-19', 'male', 'patna', '1234567890', 'sec8', '100', 'shutterstock_400002673.jpg', '06/08/2021'),
(4, 'arun dash', '5435644747', '2021-08-28', 'male', 'ytryt yuuy', '3456645677', 'sec8', '100', 'ai-healthcare-111418-nz2ufjaatbq2uid78g882nupxy20yp7uzsnero90ic.jpeg', '06/08/2021');

-- --------------------------------------------------------

--
-- Table structure for table `staf`
--

CREATE TABLE `staf` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `adhar` varchar(200) NOT NULL,
  `dob` varchar(150) NOT NULL,
  `gender` varchar(150) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `branch` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(150) NOT NULL,
  `img` varchar(150) NOT NULL,
  `created_at` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staf`
--

INSERT INTO `staf` (`id`, `name`, `adhar`, `dob`, `gender`, `address`, `mobile`, `branch`, `email`, `password`, `img`, `created_at`) VALUES
(3, 'suraj kumar', '23436778768897', '2021-08-28', 'male', 'patna ', '6477767727', 'sec8', 'staf@gmail.com', '1234', 'images.png', '06/08/2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staf`
--
ALTER TABLE `staf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chart`
--
ALTER TABLE `chart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staf`
--
ALTER TABLE `staf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
