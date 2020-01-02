-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2020 at 12:59 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `nama_dosen` varchar(40) NOT NULL,
  `bd_studi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_skripsi` varchar(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `approve_prodi` varchar(12) NOT NULL,
  `status` varchar(20) NOT NULL,
  `nama_siswa` varchar(60) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `angkatan` varchar(10) NOT NULL,
  `tahun_pengajuan` varchar(10) NOT NULL,
  `keterangan` text NOT NULL,
  `id_skripsi` int(10) NOT NULL,
  `id_nim` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_skripsi`, `judul`, `approve_prodi`, `status`, `nama_siswa`, `jurusan`, `angkatan`, `tahun_pengajuan`, `keterangan`, `id_skripsi`, `id_nim`) VALUES
('Kuanti Penerapan', 'sistem titiy okkenjokpp', 'Waiting', 'acc', 'YULIANTI', 'Teknik Informatika', '2018', '2015Genap', 'ihjcoiinlknknknk', 1, '5203051603120035'),
('Kuanti Analis', 'sistem oke oke', 'Waiting', 'acc', 'RUDIANDI', 'Teknik Informatika', '2018', '2019Ganjil', 'aoke ebro', 2, '5203051204120025'),
('Kuanti Penerapan', 'adu', 'Waiting', '', 'YULIANTI', 'Teknik Informatika', '2019', '2014Ganjil', 'wee', 3, '5203051603120035');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nim_asuser` varchar(50) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nim_asuser`, `nama`, `password`, `level`, `status`) VALUES
(1, 'admin', 'admin', 'admin', 'Prodi', ''),
(2, '5203051603120035', 'YULIANTI', 'mahasiswa', 'Mahasiswa', 'Aktif'),
(3, '5203051204120025', 'RUDIANDI', 'mahasiswa', 'Mahasiswa', 'Aktif'),
(4, '5203052606120019', 'MUSHAUWIR HIKAM', 'mahasiswa', 'Mahasiswa', 'Tidak Aktif'),
(5, '5203051505120034', 'ABDI GUNAWAN', 'mahasiswa', 'Mahasiswa', 'Tidak Aktif'),
(6, '5203052603120042', 'PENDI PRANATA', 'mahasiswa', 'Mahasiswa', 'Tidak Aktif'),
(7, '5203051903120055', 'ISROK', 'mahasiswa', 'Mahasiswa', 'Tidak Aktif'),
(8, '5203052603120012', 'ABDUL MAJID', 'mahasiswa', 'Mahasiswa', 'Tidak Aktif'),
(9, '5203052006120028', 'JAENUDIN', 'mahasiswa', 'Mahasiswa', 'Tidak Aktif'),
(10, '5203051304120028', 'JUNIAWAN', 'mahasiswa', 'Mahasiswa', 'Tidak Aktif'),
(11, '5203052905120043', 'RINA HARTINI', 'mahasiswa', 'Mahasiswa', 'Tidak Aktif'),
(12, '5203051511170001', 'ELIANA', 'mahasiswa', 'Mahasiswa', 'Tidak Aktif'),
(13, '5203052305120006', 'TAUFIKURRAHMAN', 'mahasiswa', 'Mahasiswa', 'Tidak Aktif'),
(14, '5203051010071409', 'THOLIBAH', 'mahasiswa', 'Mahasiswa', 'Tidak Aktif'),
(15, '5203051005120010', 'LIA APRIANI', 'mahasiswa', 'Mahasiswa', 'Tidak Aktif'),
(16, '5203052604120021', 'M. AS\'ARI', 'mahasiswa', 'Mahasiswa', 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nim` varchar(30) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `id` int(15) NOT NULL,
  `status_akun` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nim`, `nama_siswa`, `jurusan`, `id`, `status_akun`) VALUES
('5203051603120035', 'YULIANTI', 'Teknik Informatika', 1, 'Aktif'),
('5203051204120025', 'RUDIANDI', 'Teknik Informatika', 2, 'Aktif'),
('5203052606120019', 'MUSHAUWIR HIKAM', 'Teknik Informatika', 3, 'Tidak Aktif'),
('5203051505120034', 'ABDI GUNAWAN', 'Teknik Informatika', 4, 'Tidak Aktif'),
('5203052603120042', 'PENDI PRANATA', 'Teknik Informatika', 5, 'Tidak Aktif'),
('5203051903120055', 'ISROK', 'Sistem Informasi ', 6, 'Tidak Aktif'),
('5203052603120012', 'ABDUL MAJID', 'Sistem Informasi ', 7, 'Tidak Aktif'),
('5203052006120028', 'JAENUDIN', 'Sistem Informasi ', 8, 'Tidak Aktif'),
('5203051304120028', 'JUNIAWAN', 'Sistem Informasi ', 9, 'Tidak Aktif'),
('5203052905120043', 'RINA HARTINI', 'Sistem Informasi ', 10, 'Tidak Aktif'),
('5203051511170001', 'ELIANA', 'Pendidikan Informasi', 11, 'Tidak Aktif'),
('5203052305120006', 'TAUFIKURRAHMAN', 'Pendidikan Informasi', 12, 'Tidak Aktif'),
('5203051010071409', 'THOLIBAH', 'Pendidikan Informasi', 13, 'Tidak Aktif'),
('5203051005120010', 'LIA APRIANI', 'Pendidikan Informasi', 14, 'Tidak Aktif'),
('5203052604120021', 'M. AS\'ARI', 'Pendidikan Informasi', 15, 'Tidak Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `skripsi`
--

CREATE TABLE `skripsi` (
  `id_skripsi` int(10) NOT NULL,
  `id_nim` varchar(30) NOT NULL,
  `nama_siswa` varchar(40) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `kategori_skripsi` varchar(20) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `approve_prodi` varchar(12) NOT NULL,
  `approve_dosen` varchar(20) NOT NULL,
  `approve_dosen2` varchar(20) NOT NULL,
  `id_dosen` varchar(30) NOT NULL,
  `id_dosen2` varchar(30) NOT NULL,
  `cat_dosen` varchar(160) NOT NULL,
  `cat_dosen2` varchar(160) NOT NULL,
  `cat_prodi` varchar(200) NOT NULL,
  `keterangan` text NOT NULL,
  `nama_dosen1` varchar(40) NOT NULL,
  `nama_dosen2` varchar(40) NOT NULL,
  `status_kirim` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skripsi`
--

INSERT INTO `skripsi` (`id_skripsi`, `id_nim`, `nama_siswa`, `jurusan`, `kategori_skripsi`, `judul`, `approve_prodi`, `approve_dosen`, `approve_dosen2`, `id_dosen`, `id_dosen2`, `cat_dosen`, `cat_dosen2`, `cat_prodi`, `keterangan`, `nama_dosen1`, `nama_dosen2`, `status_kirim`) VALUES
(1, '5203051204120025', 'RUDIANDI', 'Teknik Informatika', 'Kuanti Analis', 'sistem oke oke', 'Waiting', '', '', '', '', '', '', '', 'aoke ebro', '', '', ''),
(2, '5203051603120035', 'YULIANTI', 'Teknik Informatika', 'Kuanti Penerapan', 'adu', 'Waiting', '', '', '', '', '', '', '', 'wee', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_skripsi`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skripsi`
--
ALTER TABLE `skripsi`
  ADD PRIMARY KEY (`id_skripsi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_skripsi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `skripsi`
--
ALTER TABLE `skripsi`
  MODIFY `id_skripsi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
