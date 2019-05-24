-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 07:23 PM
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
(1, 'eko aulian', '2019-05-24 18:10:50', '2019-05-24 18:10:50', 1, 'Sistem Informasi', 'Laki - laki'),
(2, 'agus cahyadi s.kom', '2019-05-24 18:11:03', '2019-05-24 18:11:55', 1, 'Sistem Informasi', 'Laki - laki'),
(3, 'hapus', '2019-05-24 18:12:07', '2019-05-24 19:10:20', 0, 'Sistem Informasi', 'Laki - laki');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa_persetujuan`
--

CREATE TABLE `mahasiswa_persetujuan` (
  `mahasiswa_id` int(8) NOT NULL,
  `mahasiswa_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa_persetujuan`
--

INSERT INTO `mahasiswa_persetujuan` (`mahasiswa_id`, `mahasiswa_name`, `created_at`, `updated_at`, `is_active`) VALUES
(1, 'eko aulian', '0000-00-00 00:00:00', '2019-05-24 19:20:50', 2),
(4, 'agus cahyadi s.kom', '2019-05-24 19:11:14', '2019-05-24 19:22:02', 0),
(5, 'atoh', '2019-05-24 19:20:47', '2019-05-24 19:22:17', 2),
(6, 'wik', '2019-05-24 19:21:00', '2019-05-24 19:21:05', 0),
(7, 'ping', '2019-05-24 19:22:12', '2019-05-24 19:22:12', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`mahasiswa_id`);

--
-- Indexes for table `mahasiswa_persetujuan`
--
ALTER TABLE `mahasiswa_persetujuan`
  ADD PRIMARY KEY (`mahasiswa_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
