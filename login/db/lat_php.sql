-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2019 at 06:56 PM
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
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `mahasiswa_id` int(11) NOT NULL,
  `mahasiswa_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `mahasiswa_jurusan` varchar(40) NOT NULL,
  `mahasiswa_jk` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`mahasiswa_id`, `mahasiswa_name`, `created_at`, `updated_at`, `is_active`, `mahasiswa_jurusan`, `mahasiswa_jk`) VALUES
(1, 'test jk', '2019-04-03 19:21:16', '2019-04-03 19:33:28', 0, 'Sistem Informasi Akuntansi', 'Perempuan'),
(2, 'eko asap', '2019-04-03 19:33:02', '2019-04-03 19:33:25', 0, 'Sistem Informasi Akuntansi', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_by` int(30) NOT NULL,
  `updated_by` int(30) NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `nama`, `username`, `password`, `level`, `created_at`, `updated_at`, `created_by`, `updated_by`, `is_active`) VALUES
(2, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'ADMIN', '2019-04-06 00:00:00', '2019-04-06 00:00:00', 1, 1, 2),
(3, 'ariyan si a', 'sisfoa', 'e66a8d375ad76ace46977593da707351', 'sisfoa', '2019-04-07 00:00:00', '2019-04-07 00:00:00', 1, 1, 1),
(4, 'serlina', 'sisfob', 'b4ef6dcf17ea3cc6533f5c7abee80760', 'sisfob', '2019-04-07 00:00:00', '2019-04-07 00:00:00', 1, 1, 1),
(5, 'sisfoc', 'sisfoc', '2c2033ef597b837d7ef22d5d2c503930', 'sisfoc', '2019-04-07 00:00:00', '2019-04-07 00:00:00', 1, 1, 1),
(6, 'sisfod', 'sisfod', '223d1db3e714a3d5207513b49feac5dc', 'sisfod', '2019-04-07 00:00:00', '2019-04-07 00:00:00', 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mahasiswa_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
