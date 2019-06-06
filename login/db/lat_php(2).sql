-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2019 at 07:50 PM
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
-- Database: `lat_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(30) NOT NULL,
  `updated_by` int(30) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `kode_verifikasi` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama`, `email`, `username`, `password`, `level`, `created_at`, `updated_at`, `created_by`, `updated_by`, `is_active`, `kode_verifikasi`) VALUES
(0, 'anis', 'anis_steven@yahoo.co.id', 'anis', 'bb7a08b933ef45e336611dbc921cfea4', 'sisfoc', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0, NULL),
(2, 'admin', 'ekoaulian88@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', '2019-04-06 00:00:00', '2019-04-06 00:00:00', 1, 1, 2, 0),
(3, 'rika yana', 'rikayana308@gmail.com', 'sisfoa', 'e66a8d375ad76ace46977593da707351', 'sisfoa', '2019-04-07 00:00:00', '2019-04-07 00:00:00', 1, 1, 1, 0),
(4, 'yuni', 'verlinyuni@gmail.com', 'sisfob', 'b4ef6dcf17ea3cc6533f5c7abee80760', 'sisfob', '2019-04-07 00:00:00', '2019-04-07 00:00:00', 1, 1, 1, 0),
(5, 'agus tohir', 'agustohir11@yahoo.com', 'sisfoc', '2c2033ef597b837d7ef22d5d2c503930', 'sisfoc', '2019-04-07 00:00:00', '2019-04-07 00:00:00', 1, 1, 1, 0),
(6, 'agus tohir', 'agus.cdev02@gmail.com', 'sisfod', '223d1db3e714a3d5207513b49feac5dc', 'sisfod', '2019-04-07 00:00:00', '2019-04-07 00:00:00', 1, 1, 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
