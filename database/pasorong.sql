-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 05:18 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasorong`
--

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_user` tinyint(5) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gol` varchar(5) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(20) NOT NULL,
  `role` enum('s-admin','admin','mgr','spv','staff') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_user`, `nip`, `nama`, `gol`, `divisi`, `username`, `password`, `level`, `role`) VALUES
(5, '197207292001122001', 'BAIDA MAKASAR, S. Ag.', 'III/d', 'Panitera', '197207292001122001', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '3', 'spv'),
(6, '198311062006041002', 'SYAMSUL BAHRI, S.H.I.', 'III/c', 'Sekertaris', '198311062006041002', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '4', 'spv'),
(8, '197908132000121003', 'AKRAM, S.H., M.H.', 'III/c', 'Kepaniteraan', '197908132000121003', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '3', 'staff'),
(9, '196405041989122001', 'HALIJAH SULAIMAN', 'III/c', 'Kesekretariatan', '196405041989122001', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '4', 'staff'),
(23, '197611241998031004', 'H. MOHAMMAD AGHFAR MUSYADDAD, S.H.', 'IV/a', 'Ketua', '197611241998031004', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '1', 'mgr'),
(24, '198209022007041001', 'MUKHLISH LATUKAU, S.H.I.', 'III/d', 'Wakil Ketua', '198209022007041001', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '2', 'spv'),
(25, '199205162017121006', 'KAHARUDDIN, S.H.', 'III/a', 'Hakim', '199205162017121006', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '2', 'staff'),
(26, '199112162017121003', 'MACHFUDZ ASYARI, S.H.I.', 'III/a', 'Hakim', '199112162017121003', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '2', 'staff'),
(27, '196504131990122001', 'ZUBAIDAH HI HAMZAH, S.H.', 'III/d', 'Kepaniteraan', '196504131990122001', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '3', 'staff'),
(29, '196310151986032002', 'HANIFA ABD. KARIM', 'III/c', 'Kesekretariatan', '196310151986032002', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '4', 'staff'),
(30, '198405192012121002', 'DODDY ARMANDO ASKA ASSEGAFF, S.H.', 'III/b', 'Kesekretariatan', '198405192012121002', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '4', 'staff'),
(31, '197311081994011001', 'IZHAM GANI, S.Sos.', 'III/d', 'Kepaniteraan', '197311081994011001', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '3', 'staff'),
(32, '197104271993032002', 'MARDIANA MARSAOLY, S.H.', 'III/d', 'Kepaniteraan', '197104271993032002', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '3', 'staff'),
(33, '199707092020121004', 'GALIH ADHI WISESA, S.H.', 'III/a', 'Kepaniteraan', '199707092020121004', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '3', 'staff'),
(34, '199103172020121005', 'AGUSTINUS SEBASTIAN IRIANTO BURDAM, S.Kom.', 'III/a', 'Kesekretariatan', '199103172020121005', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '4', 'staff'),
(35, '198805182009122002', 'FITRIAH', 'II/c', 'Kesekretariatan', '198805182009122002', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '4', 'staff'),
(36, '198107052014082003', 'SUSWANDI YULIATI', 'II/b', 'Kepaniteraan', '198107052014082003', '$2y$10$GefPkduhR373srEJktiuZes221B1L3MnKxjSlby.fcB/9cvryuH4e', '3', 'staff'),
(37, '000000000000000000', 'Admin', 'Admin', 'Admin', 'admin', '$2y$10$rBDpF2ZnKjGDdXWP24ZUM.UW6Ouqh6dNJSPc7jM5fd9eFCjplO0NW', '0', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(5) NOT NULL,
  `id_user` int(5) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jam_berangkat` datetime(6) NOT NULL,
  `jam_kembali` datetime(6) DEFAULT NULL,
  `kegiatan` text NOT NULL,
  `pejabat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `id_user`, `nip`, `nama`, `jam_berangkat`, `jam_kembali`, `kegiatan`, `pejabat`) VALUES
(23, 35, '198805182009122002', 'FITRIAH', '2021-02-20 22:56:42.000000', NULL, 'Izin keluar urusan Kesekretariatan', 'SYAMSUL BAHRI, S.H.I.'),
(24, 34, '199103172020121005', 'AGUSTINUS SEBASTIAN IRIANTO BURDAM, S.Kom.', '2021-02-21 03:23:25.000000', NULL, 'Izin keluar urusan Kesekretariatan', 'SYAMSUL BAHRI, S.H.I.'),
(25, 30, '198405192012121002', 'DODDY ARMANDO ASKA ASSEGAFF, S.H.', '2021-02-21 03:25:02.000000', NULL, 'Izin keluar urusan Kesekretariatan', 'SYAMSUL BAHRI, S.H.I.'),
(26, 29, '196310151986032002', 'HANIFA ABD. KARIM', '2021-02-21 03:26:32.000000', NULL, 'Izin keluar urusan Kesekretariatan', 'SYAMSUL BAHRI, S.H.I.'),
(27, 9, '196405041989122001', 'HALIJAH SULAIMAN', '2021-02-21 03:28:23.000000', NULL, 'Izin keluar urusan Kesekretariatan', 'SYAMSUL BAHRI, S.H.I.'),
(28, 6, '198311062006041002', 'SYAMSUL BAHRI, S.H.I.', '2021-02-21 03:28:54.000000', NULL, 'Izin keluar urusan Kesekretariatan', 'H. MOHAMMAD AGHFAR MUSYADDAD, S.H.'),
(29, 36, '198107052014082003', 'SUSWANDI YULIATI', '2021-02-21 03:29:50.000000', NULL, 'Izin keluar urusan Kepaniteraan', 'BAIDA MAKASAR, S. Ag.'),
(30, 33, '199707092020121004', 'GALIH ADHI WISESA, S.H.', '2021-02-21 03:30:24.000000', NULL, 'Izin keluar urusan Kepaniteraan', 'BAIDA MAKASAR, S. Ag.'),
(31, 32, '197104271993032002', 'MARDIANA MARSAOLY, S.H.', '2021-02-21 03:30:55.000000', NULL, 'Izin keluar urusan Kepaniteraan', 'BAIDA MAKASAR, S. Ag.'),
(32, 31, '197311081994011001', 'IZHAM GANI, S.Sos.', '2021-02-21 03:31:45.000000', NULL, 'Izin keluar urusan Kepaniteraan', 'BAIDA MAKASAR, S. Ag.'),
(33, 27, '196504131990122001', 'ZUBAIDAH HI HAMZAH, S.H.', '2021-02-21 03:32:58.000000', NULL, 'Izin keluar urusan Kepaniteraan', 'BAIDA MAKASAR, S. Ag.'),
(34, 8, '197908132000121003', 'AKRAM, S.H., M.H.', '2021-02-21 03:33:32.000000', NULL, 'Izin keluar urusan Kepaniteraan', 'BAIDA MAKASAR, S. Ag.'),
(35, 5, '197207292001122001', 'BAIDA MAKASAR, S. Ag.', '2021-02-21 03:34:13.000000', NULL, 'Izin keluar urusan Kepaniteraan', 'H. MOHAMMAD AGHFAR MUSYADDAD, S.H.'),
(36, 26, '199112162017121003', 'MACHFUDZ ASYARI, S.H.I.', '2021-02-21 03:34:44.000000', NULL, 'Izin keluar urusan Hakim', 'MUKHLISH LATUKAU, S.H.I.'),
(37, 25, '199205162017121006', 'KAHARUDDIN, S.H.', '2021-02-21 03:35:12.000000', NULL, 'Izin keluar urusan Hakim', 'MUKHLISH LATUKAU, S.H.I.'),
(38, 24, '198209022007041001', 'MUKHLISH LATUKAU, S.H.I.', '2021-02-21 03:35:30.000000', NULL, 'Izin keluar urusan Hakim', 'H. MOHAMMAD AGHFAR MUSYADDAD, S.H.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` tinyint(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `gol` varchar(20) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `level` enum('Admin','Pegawai') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_user` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` tinyint(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
