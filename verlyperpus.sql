-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 03:39 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `verlyperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `kd_buku` varchar(10) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` int(5) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `kt_buku` varchar(50) NOT NULL,
  `jn_buku` varchar(50) NOT NULL,
  `denda` double NOT NULL,
  `jml` int(4) NOT NULL,
  `lks` varchar(5) NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kd_buku`, `judul`, `pengarang`, `penerbit`, `tahun_terbit`, `isbn`, `kt_buku`, `jn_buku`, `denda`, `jml`, `lks`, `picture`) VALUES
('BK001', 'Cara Membuat WEB', 'Andi', 'Gramedia', 2014, '08988989898', 'Teknologi', '-- Silahkan Pilih --', 5000, 4, 'A006', ''),
('BK002', 'filsafat', 'Mudjisantosa', 'Andi Publisher', 2014, '9786026019011', 'Literatur dan Sastra', 'Literatur dan Sastra', 500, 4, 'A010', '56413_f.jpg'),
('BK003', 'Kesalahan Pengadaan (Perspektif Hukum)', 'Mudjisantosa', 'Diandra Primamitra', 2014, '67897089789', 'Filsafat dan Psikologi', 'Filsafat dan Psikologi', 500, 4, 'A008', 'di.jpg'),
('BK004', 'Buat Sendiri Aplikasi Petamu Menggunakan Codelgnit', 'Bernadus Herdi Sirenden & Ester Laekha Dachi', 'Diandra Primamitra', 2015, '9786026019011', 'Literatur dan Sastra', 'Seni dan Kreasi', 500, 4, 'A001', 'ava.png');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE IF NOT EXISTS `peminjaman` (
`id_pinjam` int(4) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `progdi` varchar(20) NOT NULL,
  `pinjam` date NOT NULL,
  `kembali` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `denda` double NOT NULL,
  `akhir` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `judul`, `nama`, `progdi`, `pinjam`, `kembali`, `status`, `denda`, `akhir`) VALUES
(4, 'Cara Membuat Website', 'Maulana Rizqi', 'Teknik Informatika', '2017-05-15', '2017-05-29', 'pinjam', 24000, 'ya'),
(5, 'ILY from 38000 ft', 'Sukron Rohmatul Akbar', 'Teknik Informatika', '2017-05-29', '2017-06-05', 'pinjam', 15000, 'ya'),
(6, 'ILY from 38000 ft', 'Wakidi', 'Sistem Informasi', '2017-06-01', '2017-06-08', 'kembali', 8000, 'tidak'),
(7, 'Cara belajar gramar', 'Fatkhu rohman', 'Teknik Informatika', '2017-05-01', '2017-06-07', 'pinjam', 5000, 'tidak'),
(8, 'cara memahami sesorang', 'M. Adyana Agustian', 'Sistem Informasi', '2017-05-24', '2017-05-30', 'kembali', 22000, 'ya');

-- --------------------------------------------------------

--
-- Table structure for table `tb_anggota`
--

CREATE TABLE IF NOT EXISTS `tb_anggota` (
  `kd_anggota` varchar(10) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `progdi` varchar(50) NOT NULL,
  `jekel` varchar(10) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_buku`
--

CREATE TABLE IF NOT EXISTS `tb_buku` (
`id_buku` int(10) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `id_penerbit` int(20) NOT NULL,
  `id_pengarang` int(20) NOT NULL,
  `stock` int(40) NOT NULL,
  `isi` text NOT NULL,
  `id_jenis` int(20) NOT NULL,
  `lihat` int(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  `picture` varchar(40) NOT NULL,
  `nama_peminjam` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul`, `id_penerbit`, `id_pengarang`, `stock`, `isi`, `id_jenis`, `lihat`, `status`, `pengirim`, `picture`, `nama_peminjam`, `date`) VALUES
(1, 'www', 1, 2, 0, 'e', 1, 0, 'P', 'dwda', 'verly.jpg', 'tftftft', '2014-12-10'),
(2, 'Veer', 1, 1, 0, 'veererere', 0, 0, 'P', 'Verly', 'atau3.png', '', '2014-12-22'),
(3, 'Sahal', 2, 1, 0, 'sahal ganteng', 0, 0, 'P', 'super deal', 'dora.jpg', '', '2017-03-26'),
(4, 'ILY from 38000 ft', 2, 1, 6, 'jajkfdh', 0, 0, 'T', 'alkjd', 'header.png', '', '2017-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login`
--

CREATE TABLE IF NOT EXISTS `tb_login` (
`id_login` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  `level` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `nidn` varchar(15) NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `ttl` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_login`
--

INSERT INTO `tb_login` (`id_login`, `username`, `password`, `avatar`, `level`, `nama`, `alamat`, `nohp`, `nidn`, `jekel`, `ttl`) VALUES
(3, 'Efi Mufidah', '201451171', 'di.jpg', 'user', 'Efi Mufidah', 'Parang, Jepara', '089765234567', '2209200897', 'Laki-Laki', 'Jepara, 28 Januari '),
(4, 'Efi', '201451171', 'efi.jpg', 'admin', 'Efi Mufidah', 'jepara', '087654321987', '6776789798', 'Perempuan', 'Jepara, 28 Januari 1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peminjam`
--

CREATE TABLE IF NOT EXISTS `tb_peminjam` (
`id_peminjam` int(20) NOT NULL,
  `id_login` int(20) NOT NULL,
  `id_buku` int(20) NOT NULL,
  `nama_peminjam` varchar(30) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `pengarang` varchar(20) NOT NULL,
  `isi` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  `picture` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_peminjam`
--

INSERT INTO `tb_peminjam` (`id_peminjam`, `id_login`, `id_buku`, `nama_peminjam`, `judul`, `penerbit`, `pengarang`, `isi`, `status`, `pengirim`, `picture`, `date`) VALUES
(46, 2, 29, 'verlyuser', 'Belajar Sendiri 2', 'PT.Verli', 'Kenji ', 'BelajarBelajarBelaja', 'K', '', 'ava.png', '2014-11-28'),
(47, 2, 28, 'verlyuser', 'Belajar Sendiri', 'PT.Verli', 'Masashi Kishimoto', 'BelajarBelajarrrrrSe', 'K', '', 'verlybookverpus.png', '2014-11-28'),
(48, 3, 29, 'verlyuser2', 'Belajar Sendiri 2', 'PT.Verli', 'Kenji ', 'BelajarBelajarBelaja', 'K', '', 'ava.png', '2014-11-28'),
(49, 3, 28, 'verlyuser2', 'Belajar Sendiri', 'PT.Verli', 'Masashi Kishimoto', 'BelajarBelajarrrrrSe', 'K', '', 'verlybookverpus.png', '2014-11-28'),
(50, 3, 29, 'verlyuser2', 'Belajar Sendiri 2', 'PT.Verli', 'Kenji ', 'BelajarBelajarBelaja', 'K', '', 'ava.png', '2014-11-28'),
(51, 2, 29, 'verlyuser', 'Belajar Sendiri 2', 'PT.Verli', 'Kenji ', 'BelajarBelajarBelaja', 'K', '', 'ava.png', '2014-11-29'),
(52, 2, 1, 'verlyuser', 'www', 'PT.Verli', 'Kenji ', 'e', 'K', '', 'verly.jpg', '2014-12-11'),
(53, 2, 2, 'verlyuser', 'Veer', 'PT.Verli', 'Masashi Kishimoto', 'veererere', 'K', '', 'atau3.png', '2017-03-26'),
(54, 2, 3, 'verlyuser', 'Sahal', 'PT.Gramedia', 'Masashi Kishimoto', 'sahal ganteng', 'P', '', 'dora.jpg', '2017-03-26'),
(55, 3, 4, '201451178', 'ILY from 38000 ft', 'PT.Gramedia', 'Masashi Kishimoto', 'jajkfdh', 'P', '', 'header.png', '2017-05-07'),
(56, 1, 4, 'Efi Mufidah', 'ILY from 38000 ft', 'PT.Gramedia', 'Masashi Kishimoto', 'jajkfdh', 'P', '', 'header.png', '2017-05-07'),
(57, 3, 1, '201451178', 'www', 'PT.Verli', 'Kenji ', 'e', 'P', '', 'verly.jpg', '2017-05-08'),
(58, 3, 4, '201451178', 'ILY from 38000 ft', 'PT.Gramedia', 'Masashi Kishimoto', 'jajkfdh', 'P', '', 'header.png', '2017-05-08'),
(59, 3, 3, '201451178', 'Sahal', 'PT.Gramedia', 'Masashi Kishimoto', 'sahal ganteng', 'P', '', 'dora.jpg', '2017-05-08'),
(60, 3, 2, 'User', 'Veer', 'PT.Verli', 'Masashi Kishimoto', 'veererere', 'P', '', 'atau3.png', '2017-06-04'),
(61, 3, 3, 'User', 'Sahal', 'PT.Gramedia', 'Masashi Kishimoto', 'sahal ganteng', 'P', '', 'dora.jpg', '2017-06-04'),
(62, 3, 3, 'User', 'Sahal', 'PT.Gramedia', 'Masashi Kishimoto', 'sahal ganteng', 'P', '', 'dora.jpg', '2017-06-04'),
(63, 3, 3, 'User', 'Sahal', 'PT.Gramedia', 'Masashi Kishimoto', 'sahal ganteng', 'P', '', 'dora.jpg', '2017-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerbit`
--

CREATE TABLE IF NOT EXISTS `tb_penerbit` (
`id_penerbit` int(20) NOT NULL,
  `penerbit` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`id_penerbit`, `penerbit`) VALUES
(1, 'PT.Verli'),
(2, 'PT.Gramedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengarang`
--

CREATE TABLE IF NOT EXISTS `tb_pengarang` (
`id_pengarang` int(20) NOT NULL,
  `pengarang` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengarang`
--

INSERT INTO `tb_pengarang` (`id_pengarang`, `pengarang`) VALUES
(1, 'Masashi Kishimoto'),
(2, 'Kenji ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
 ADD PRIMARY KEY (`kd_buku`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
 ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `tb_anggota`
--
ALTER TABLE `tb_anggota`
 ADD PRIMARY KEY (`kd_anggota`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
 ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_login`
--
ALTER TABLE `tb_login`
 ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
 ADD PRIMARY KEY (`id_peminjam`);

--
-- Indexes for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
 ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `tb_pengarang`
--
ALTER TABLE `tb_pengarang`
 ADD PRIMARY KEY (`id_pengarang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
MODIFY `id_pinjam` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
MODIFY `id_buku` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_login`
--
ALTER TABLE `tb_login`
MODIFY `id_login` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_peminjam`
--
ALTER TABLE `tb_peminjam`
MODIFY `id_peminjam` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
MODIFY `id_penerbit` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_pengarang`
--
ALTER TABLE `tb_pengarang`
MODIFY `id_pengarang` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
