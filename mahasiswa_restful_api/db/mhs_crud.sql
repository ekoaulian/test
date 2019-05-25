-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2019 at 03:38 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mhs_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_api_nilai`
--

CREATE TABLE `mahasiswa_api_nilai` (
  `mahasiswa_id` int(10) NOT NULL,
  `mahasiswa_name` varchar(255) NOT NULL,
  `mahasiswa_nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa_api_nilai`
--

INSERT INTO `mahasiswa_api_nilai` (`mahasiswa_id`, `mahasiswa_name`, `mahasiswa_nilai`) VALUES
(1, 'eko as', 60),
(2, 'atoh', 70),
(3, 'serli', 75),
(4, 'budi', 87),
(5, 'ai', 92);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa_api_nilai`
--
ALTER TABLE `mahasiswa_api_nilai`
  ADD PRIMARY KEY (`mahasiswa_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa_api_nilai`
--
ALTER TABLE `mahasiswa_api_nilai`
  MODIFY `mahasiswa_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
