-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2021 at 02:26 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tprm`
--

-- --------------------------------------------------------

--
-- Table structure for table `consulting_logo`
--

CREATE TABLE `consulting_logo` (
  `id` int(11) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consulting_logo`
--

INSERT INTO `consulting_logo` (`id`, `image`) VALUES
(2, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/Keane.png'),
(3, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/Neohapsis.png'),
(4, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/Syntel.jfif'),
(5, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/cylance.png'),
(6, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/ebay.png'),
(7, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/experian.png'),
(8, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/intuit.png'),
(9, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/pimcco.png'),
(10, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/qualcomn.png'),
(11, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/saban%20brand.png'),
(12, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/sony%20pictures.png'),
(13, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/state%20street.png'),
(14, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/tizor.png'),
(15, 'http://tprmtest.000webhostapp.com/images/companies/Logo/Logo/wipro.png'),
(16, 'https://tprmtest.000webhostapp.com/images/infosys.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consulting_logo`
--
ALTER TABLE `consulting_logo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consulting_logo`
--
ALTER TABLE `consulting_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
