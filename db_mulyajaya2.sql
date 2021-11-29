-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 19 Jun 2019 pada 22.27
-- Versi Server: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.0.33-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mulyajaya2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataktp`
--

CREATE TABLE `dataktp` (
  `nik` varchar(20) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `tgl_pengesahan` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapenduduk`
--

CREATE TABLE `datapenduduk` (
  `nik` varchar(20) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` varchar(100) NOT NULL,
  `kabupaten` varchar(100) NOT NULL,
  `kecamatan` varchar(100) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `kelurahan` varchar(200) NOT NULL,
  `rt` int(4) NOT NULL,
  `rw` int(4) NOT NULL,
  `jk` text NOT NULL,
  `tmplahir` text NOT NULL,
  `tgllahir` date NOT NULL,
  `golongan_darah` char(3) NOT NULL,
  `agama` text NOT NULL,
  `pendidikan` varchar(6) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `statuskawin` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(40) NOT NULL,
  `stspenduduk` varchar(20) NOT NULL,
  `namaayah` varchar(50) NOT NULL,
  `namaibu` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `datapenduduk`
--

INSERT INTO `datapenduduk` (`nik`, `no_kk`, `nama`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `kode_pos`, `kelurahan`, `rt`, `rw`, `jk`, `tmplahir`, `tgllahir`, `golongan_darah`, `agama`, `pendidikan`, `pekerjaan`, `statuskawin`, `kewarganegaraan`, `stspenduduk`, `namaayah`, `namaibu`, `status`) VALUES
('3215070112900000', '3215072609120000', 'Muhidin', 'Dusun cibanteng III', 'Jawa Barat', 'Karawang', 'Kutawaluya', '41358', 'Mulyajaya', 8, 3, 'Laki-laki', 'Mulyajaya', '1990-12-01', 'O', 'Islam', 'SD', 'Buruh', 'Kawin', 'WNI', 'Kepela keluarga', '-', '-', 'Petugas'),
('3215071110010000', '-', 'Rizki', 'Dusun cibanteng III', 'Jawa Barat', 'Karawang', 'Kutawaluya', '41358', 'Mulyajaya', 8, 3, 'Laki-laki', 'Mulyajaya', '2001-10-11', 'O', 'Islam', 'SD', 'Belum Kerja', 'Belum Kawin', 'WNI', 'Daftar', '-', '-', 'Hidup'),
('3215072507960000', '-', 'Suantaria', 'Dusun cibanteng III', 'Jawa Barat', 'Karawang', 'Kutawaluya', '41358', 'Mulyajaya', 8, 3, 'Laki-laki', 'Mulyajaya', '1996-07-25', 'O', 'Islam', 'SMA', 'Buruh', 'Belum Kawin', 'WNI', 'Daftar', '-', '-', 'Hidup'),
('321507508670001', '3215070309070010', 'Eras', 'Dusun cibanteng III', 'Jawa Barat', 'Karawang', 'Kutawaluya', '41358', 'Mulyajaya', 8, 3, 'Perempuan', 'Mulyajaya', '1965-08-13', 'O', 'Islam', 'SD', 'IRT', 'Kawin', 'WNI', 'Daftar', '-', '-', 'Meninggal'),
('3215120107970086', '-', 'Dadang', 'Karawang', 'Jawa Barat', 'Karawang', 'Kutawaluya', '41358', 'Mulyajaya', 8, 3, 'Laki-Laki', 'Mulyajaya', '1973-06-02', 'O', 'Islam', 'SD', 'Buruh', 'Kawin', 'WNI', 'Kepala keluarga', '-', '-', 'Petugas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran`
--

CREATE TABLE `kelahiran` (
  `nik` varchar(20) NOT NULL,
  `nama_anak` text NOT NULL,
  `nama_ibu` text NOT NULL,
  `berlaku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian1`
--

CREATE TABLE `kematian1` (
  `nik` varchar(20) NOT NULL,
  `Hari` varchar(10) NOT NULL,
  `Tanggal` date NOT NULL,
  `Waktu` time NOT NULL,
  `Penyebab` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kematian1`
--

INSERT INTO `kematian1` (`nik`, `Hari`, `Tanggal`, `Waktu`, `Penyebab`) VALUES
('321507508670001', 'Senin', '2019-06-25', '01:02:00', 'sakit');

-- --------------------------------------------------------

--
-- Struktur dari tabel `spindah`
--

CREATE TABLE `spindah` (
  `nospdh` varchar(25) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alsnpdh` varchar(25) NOT NULL,
  `srt` int(4) NOT NULL,
  `srw` int(4) NOT NULL,
  `sdesa` text NOT NULL,
  `skcmtn` text NOT NULL,
  `skota` text NOT NULL,
  `sprovinsi` text NOT NULL,
  `rncnpdh` date NOT NULL,
  `salamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataktp`
--
ALTER TABLE `dataktp`
  ADD KEY `fk_nik` (`nik`);

--
-- Indexes for table `datapenduduk`
--
ALTER TABLE `datapenduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD KEY `fk_nik2` (`nik`);

--
-- Indexes for table `kematian1`
--
ALTER TABLE `kematian1`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `spindah`
--
ALTER TABLE `spindah`
  ADD PRIMARY KEY (`nospdh`),
  ADD KEY `fk_nik4` (`nik`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `dataktp`
--
ALTER TABLE `dataktp`
  ADD CONSTRAINT `fk_nik` FOREIGN KEY (`nik`) REFERENCES `datapenduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kelahiran`
--
ALTER TABLE `kelahiran`
  ADD CONSTRAINT `fk_nik2` FOREIGN KEY (`nik`) REFERENCES `datapenduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kematian1`
--
ALTER TABLE `kematian1`
  ADD CONSTRAINT `fk_nik3` FOREIGN KEY (`nik`) REFERENCES `datapenduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `spindah`
--
ALTER TABLE `spindah`
  ADD CONSTRAINT `fk_nik4` FOREIGN KEY (`nik`) REFERENCES `datapenduduk` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
