-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2018 at 07:27 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infogunu_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id_file` int(5) NOT NULL,
  `nama_file` longtext NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `kunci_login` longtext NOT NULL,
  `tgl_login` date NOT NULL,
  `waktu_login` time NOT NULL,
  `tgl_logout` date NOT NULL,
  `waktu_logout` time NOT NULL,
  `total_waktu` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `sub_kategori` varchar(100) NOT NULL,
  `fitur` enum('publishing','branding','network','file','pembelian','penjualan','interaktif','user','HRD','Accounting','Marketing','Management','Report') NOT NULL,
  `id_user` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `id_page` int(5) NOT NULL,
  `judul_page` longtext,
  `id_user` int(5) DEFAULT NULL,
  `untuk` int(5) DEFAULT NULL,
  `status_tugas` varchar(20) DEFAULT NULL,
  `rule` longtext,
  `isi_page` longtext,
  `keterangan` longtext,
  `date_time` date DEFAULT NULL,
  `id_text` int(5) DEFAULT NULL,
  `id_pesan` int(5) DEFAULT NULL,
  `id_kategori` int(5) DEFAULT NULL,
  `sub_id_kategori` int(50) DEFAULT NULL,
  `sub_id_kategori_2` int(5) DEFAULT NULL,
  `id_file` int(5) DEFAULT NULL,
  `nama_toko` varchar(30) DEFAULT NULL,
  `stok` varchar(10) DEFAULT NULL,
  `harga_jual` varchar(20) DEFAULT NULL,
  `harga_pokok` varchar(20) DEFAULT NULL,
  `sub_total` varchar(35) DEFAULT NULL,
  `pph` varchar(35) DEFAULT NULL,
  `total` varchar(35) DEFAULT NULL,
  `nip` varchar(25) DEFAULT NULL,
  `nama_karyawan` varchar(50) DEFAULT NULL,
  `tmp_lahir` varchar(15) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `pend_terakhir` varchar(10) DEFAULT NULL,
  `alamat` varchar(70) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `status_pekerjaan` varchar(15) DEFAULT NULL,
  `jenis_barang` varchar(30) DEFAULT NULL,
  `status_hapus` varchar(10) DEFAULT NULL,
  `total_baca` int(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` int(5) NOT NULL,
  `isi_pesan` longtext,
  `dari` int(7) NOT NULL,
  `ke` int(7) NOT NULL,
  `tanggal_kirim` datetime NOT NULL,
  `kelompok` int(10) NOT NULL,
  `id_text` int(5) DEFAULT NULL,
  `id_user` int(5) DEFAULT NULL,
  `id_user2` int(5) NOT NULL,
  `chat_group` mediumtext NOT NULL,
  `id_kategori` int(5) DEFAULT NULL,
  `id_file` int(5) DEFAULT NULL,
  `kode_pemesanan` varchar(20) DEFAULT NULL,
  `nama_pemesan` varchar(30) DEFAULT NULL,
  `no_rekening` varchar(20) DEFAULT NULL,
  `bank` varchar(15) DEFAULT NULL,
  `telp_pemesan` varchar(15) DEFAULT NULL,
  `email_pemesan` varchar(25) DEFAULT NULL,
  `tgl_pemesanan` date DEFAULT NULL,
  `no_resi` varchar(20) DEFAULT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pesan` longtext,
  `no_hp` varchar(15) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam` time DEFAULT NULL,
  `aktif` enum('Y','N') DEFAULT NULL,
  `isi_komen` longtext,
  `waktu_pesan` varchar(20) DEFAULT NULL,
  `ip_address` varchar(20) DEFAULT NULL,
  `date_time` date NOT NULL,
  `hits` int(50) NOT NULL,
  `online` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `id_text` int(5) NOT NULL,
  `isi_text` longtext NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `id_page` int(5) NOT NULL,
  `status` varchar(5) NOT NULL,
  `nomor` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(5) NOT NULL,
  `nama_user` varchar(80) NOT NULL,
  `username_user` varchar(20) NOT NULL,
  `password_user` varchar(100) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `reff` varchar(50) NOT NULL,
  `id_file` int(5) NOT NULL,
  `tempat_lahir` varchar(60) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `pend_terakhir` varchar(15) NOT NULL,
  `agama_user` varchar(15) NOT NULL,
  `alamat` longtext NOT NULL,
  `jabatan_user` varchar(100) NOT NULL,
  `gaji_pokok` int(50) NOT NULL,
  `bonus` int(50) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `status_peker` varchar(15) NOT NULL,
  `foto` longtext NOT NULL,
  `online` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id_page`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id_text`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id_file` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5449;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `id_page` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2480;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45443;

--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id_text` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2771;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
