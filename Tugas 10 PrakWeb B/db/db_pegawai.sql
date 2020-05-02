-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2020 at 04:23 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pegawai`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pegawai`
--

CREATE TABLE `tb_pegawai` (
  `nik` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jkelamin` char(1) NOT NULL,
  `telp` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`nik`, `nama`, `jkelamin`, `telp`, `email`, `alamat`) VALUES
('0000000001', 'cek_admin', 'L', '081XXXXXXXXX', 'rs.unud@gmail.com', 'Jl. rodhes babel sarkaz'),
('0000000002', 'cek_input', 'L', '082XXXXXXXXX', 'raldquil@gmail.com', 'Jl. LappFace'),
('0000000003', 'cek_edit', 'P', '083XXXXXXXXX', 'rashito7659@gmail.com', 'Jl. Apple Pie'),
('0000000004', 'cek_hapus', 'P', '084XXXXXXXXX', 'rieru18@gmail.com', 'Jl. Sring Sring Gaming'),
('0000000005', 'W', 'P', '085XXXXXXXXX', 'w.sarkaz@gmail.com', 'Babel'),
('0000000006', 'Gravel', 'P', '086XXXXXXXXX', 'seromy@gmail.com', 'Khazamirez'),
('0000000007', 'Zima', 'P', '087XXXXXXXXX', 'zima.ursus@gmail.com', 'Ursus Empire'),
('0000000008', 'Chen', 'P', '088XXXXXXXXX', 'chen.lgd@gmail.com', 'The Great Longmen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pegawai`
--
ALTER TABLE `tb_pegawai`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
