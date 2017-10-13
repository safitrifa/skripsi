-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 03:57 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new1`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE IF NOT EXISTS `kriteria` (
  `kriteriaid` int(4) NOT NULL AUTO_INCREMENT,
  `namakriteria` varchar(50) NOT NULL,
  `nilaikriteria` double NOT NULL,
  `bobotkriteria` double NOT NULL,
  `normalisasi` double NOT NULL,
  `userid` int(3) NOT NULL,
  PRIMARY KEY (`kriteriaid`),
  KEY `userid` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`kriteriaid`, `namakriteria`, `nilaikriteria`, `bobotkriteria`, `normalisasi`, `userid`) VALUES
(5, 'Kecukupan dana', 100, 19.342359767892, 0.19342359767892, 5),
(6, 'Lingkup acara', 95, 18.375241779497, 0.18375241779497, 5),
(7, 'Sasaran peserta', 75, 14.506769825919, 0.14506769825919, 5),
(8, 'Ketepatan Sasaran', 80, 15.473887814313, 0.15473887814313, 5),
(9, 'Pencapaian peserta', 87, 16.827852998066, 0.16827852998066, 5),
(10, 'Respon mayoritas peserta', 80, 15.473887814313, 0.15473887814313, 5),
(11, 'Pencapaian peserta', 80, 23.529411764706, 0.23529411764706, 11),
(12, 'Kecukupan dana', 90, 26.470588235294, 0.26470588235294, 11),
(13, 'Lingkup acara', 70, 20.588235294118, 0.20588235294118, 11),
(14, 'Ketuntasan Acara', 100, 29.411764705882, 0.29411764705882, 11),
(15, 'Menunjang Visi dan Misi', 100, 19.417475728155, 0.19417475728155, 18),
(16, 'Planning', 90, 17.47572815534, 0.1747572815534, 18),
(17, 'Eksekusi', 80, 15.533980582524, 0.15533980582524, 18),
(18, 'Keadaan anggota', 75, 14.563106796117, 0.14563106796117, 18),
(19, 'Keadaan pengurus', 60, 11.650485436893, 0.11650485436893, 18),
(20, 'Lingkungan kerja', 40, 7.7669902912621, 0.077669902912621, 18),
(21, 'Birokrasi', 30, 5.8252427184466, 0.058252427184466, 18),
(22, 'Potensi anggota', 20, 3.8834951456311, 0.038834951456311, 18),
(23, 'Potensi pengurus', 20, 3.8834951456311, 0.038834951456311, 18),
(24, 'Eksistensi', 20, 18.181818181818, 0.18181818181818, 16),
(25, 'Kaderisasi', 30, 27.272727272727, 0.27272727272727, 16),
(26, 'Sasaran', 10, 9.0909090909091, 0.090909090909091, 16),
(27, 'Sifat Kegiatan', 10, 9.0909090909091, 0.090909090909091, 16),
(28, 'Frekuensi Kegiatan', 20, 18.181818181818, 0.18181818181818, 16),
(29, 'Presentase Dana', 20, 18.181818181818, 0.18181818181818, 16),
(30, 'Tujuan', 100, 38.461538461538, 0.38461538461538, 19),
(31, 'Menghibahkan sesuatu', 80, 30.769230769231, 0.30769230769231, 19),
(32, 'Manfaat untuk sekitar', 80, 30.769230769231, 0.30769230769231, 19);

-- --------------------------------------------------------

--
-- Table structure for table `ormawa`
--

CREATE TABLE IF NOT EXISTS `ormawa` (
  `ormawaid` int(2) NOT NULL AUTO_INCREMENT,
  `namaOrmawa` varchar(50) NOT NULL,
  `ormawalevel` int(1) NOT NULL,
  PRIMARY KEY (`ormawaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ormawa`
--

INSERT INTO `ormawa` (`ormawaid`, `namaOrmawa`, `ormawalevel`) VALUES
(1, 'BEM PSSI', 2),
(2, 'HIMASIF', 3),
(3, 'UKM-O MACO', 3),
(4, 'BALWANA', 3),
(5, 'UKMK ETALASE', 3),
(6, 'BPM', 1),
(7, 'UKMP BINARY', 3);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE IF NOT EXISTS `penilaian` (
  `prokerid` int(11) NOT NULL,
  `kriteriaid` int(4) NOT NULL,
  `utility` double NOT NULL,
  `ntemp` double NOT NULL,
  KEY `prokerid` (`prokerid`),
  KEY `kriteriaid` (`kriteriaid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`prokerid`, `kriteriaid`, `utility`, `ntemp`) VALUES
(7, 5, 80, 15.473887814314),
(7, 6, 88, 16.170212765957),
(7, 7, 85, 12.330754352031),
(7, 8, 90, 13.926499032882),
(7, 9, 85, 14.303675048356),
(7, 10, 86, 13.307543520309),
(8, 5, 80, 15.473887814314),
(8, 6, 88, 16.170212765957),
(8, 7, 85, 12.330754352031),
(8, 8, 90, 13.926499032882),
(8, 9, 80, 13.462282398453),
(8, 10, 86, 13.307543520309),
(9, 5, 80, 15.473887814314),
(9, 6, 89, 16.353965183752),
(9, 7, 85, 12.330754352031),
(9, 8, 90, 13.926499032882),
(9, 9, 85, 14.303675048356),
(9, 10, 86, 13.307543520309),
(20, 5, 75, 14.506769825919),
(20, 6, 87, 15.986460348162),
(20, 7, 85, 12.330754352031),
(20, 8, 90, 13.926499032882),
(20, 9, 85, 14.303675048356),
(20, 10, 90, 13.926499032882),
(22, 11, 90, 21.176470588235),
(22, 12, 90, 23.823529411765),
(22, 13, 90, 18.529411764706),
(22, 14, 100, 29.411764705882),
(23, 11, 90, 21.176470588235),
(23, 12, 90, 23.823529411765),
(23, 13, 75, 15.441176470589),
(23, 14, 100, 29.411764705882),
(24, 15, 100, 19.417475728155),
(24, 16, 80, 13.980582524272),
(24, 17, 100, 15.533980582524),
(24, 18, 100, 14.563106796117),
(24, 19, 100, 11.650485436893),
(24, 20, 75, 5.8252427184466),
(24, 21, 90, 5.2427184466019),
(24, 22, 100, 3.8834951456311),
(24, 23, 100, 3.8834951456311),
(25, 15, 100, 19.417475728155),
(25, 16, 80, 13.980582524272),
(25, 17, 100, 15.533980582524),
(25, 18, 100, 14.563106796117),
(25, 19, 100, 11.650485436893),
(25, 20, 100, 7.7669902912621),
(25, 21, 100, 5.8252427184466),
(25, 22, 100, 3.8834951456311),
(25, 23, 100, 3.8834951456311),
(26, 15, 100, 19.417475728155),
(26, 16, 100, 17.47572815534),
(26, 17, 100, 15.533980582524),
(26, 18, 100, 14.563106796117),
(26, 19, 100, 11.650485436893),
(26, 20, 100, 7.7669902912621),
(26, 21, 90, 5.2427184466019),
(26, 22, 100, 3.8834951456311),
(26, 23, 100, 3.8834951456311),
(27, 15, 100, 19.417475728155),
(27, 16, 100, 17.47572815534),
(27, 17, 70, 10.873786407767),
(27, 18, 100, 14.563106796117),
(27, 19, 100, 11.650485436893),
(27, 20, 100, 7.7669902912621),
(27, 21, 90, 5.2427184466019),
(27, 22, 100, 3.8834951456311),
(27, 23, 100, 3.8834951456311),
(28, 15, 100, 19.417475728155),
(28, 16, 100, 17.47572815534),
(28, 17, 70, 10.873786407767),
(28, 18, 100, 14.563106796117),
(28, 19, 100, 11.650485436893),
(28, 20, 75, 5.8252427184466),
(28, 21, 90, 5.2427184466019),
(28, 22, 100, 3.8834951456311),
(28, 23, 100, 3.8834951456311),
(29, 24, 100, 18.181818181818),
(29, 25, 50, 13.636363636363),
(29, 26, 40, 3.6363636363636),
(29, 27, 40, 3.6363636363636),
(29, 28, 50, 9.090909090909),
(29, 29, 50, 9.090909090909),
(30, 24, 100, 18.181818181818),
(30, 25, 50, 13.636363636363),
(30, 26, 60, 5.4545454545455),
(30, 27, 60, 5.4545454545455),
(30, 28, 30, 5.4545454545454),
(30, 29, 25, 4.5454545454545),
(31, 24, 100, 18.181818181818),
(31, 25, 50, 13.636363636363),
(31, 26, 60, 5.4545454545455),
(31, 27, 60, 5.4545454545455),
(31, 28, 30, 5.4545454545454),
(31, 29, 25, 4.5454545454545),
(32, 24, 100, 18.181818181818),
(32, 25, 50, 13.636363636363),
(32, 26, 60, 5.4545454545455),
(32, 27, 60, 5.4545454545455),
(32, 28, 30, 5.4545454545454),
(32, 29, 25, 4.5454545454545),
(33, 24, 100, 18.181818181818),
(33, 25, 50, 13.636363636363),
(33, 26, 40, 3.6363636363636),
(33, 27, 40, 3.6363636363636),
(33, 28, 30, 5.4545454545454),
(33, 29, 25, 4.5454545454545),
(34, 30, 80, 30.76923076923),
(34, 31, 80, 24.615384615385),
(34, 32, 80, 24.615384615385),
(35, 30, 80, 30.76923076923),
(35, 31, 20, 6.1538461538462),
(35, 32, 80, 24.615384615385),
(6, 5, 80, 15.473887814314),
(6, 6, 85, 15.618955512572),
(6, 7, 80, 11.605415860735),
(6, 8, 90, 13.926499032882),
(6, 9, 85, 14.303675048356),
(6, 10, 86, 13.307543520309);

-- --------------------------------------------------------

--
-- Table structure for table `penilainbpm`
--

CREATE TABLE IF NOT EXISTS `penilainbpm` (
  `prokerid` int(11) NOT NULL,
  `kriteriaid` int(4) NOT NULL,
  `utility` double NOT NULL,
  `ntemp` double NOT NULL,
  KEY `prokerid` (`prokerid`,`kriteriaid`),
  KEY `kriteriaid` (`kriteriaid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilainbpm`
--

INSERT INTO `penilainbpm` (`prokerid`, `kriteriaid`, `utility`, `ntemp`) VALUES
(7, 5, 80, 15.473887814314),
(7, 6, 88, 16.170212765957),
(7, 7, 85, 12.330754352031),
(7, 8, 90, 13.926499032882),
(7, 9, 80, 13.462282398453),
(7, 10, 80, 12.37911025145),
(23, 11, 90, 21.176470588235),
(23, 12, 90, 23.823529411765),
(23, 13, 75, 15.441176470589),
(23, 14, 100, 29.411764705882),
(24, 15, 100, 19.417475728155),
(24, 16, 80, 13.980582524272),
(24, 17, 100, 15.533980582524),
(24, 18, 100, 14.563106796117),
(24, 19, 100, 11.650485436893),
(24, 20, 90, 6.9902912621359),
(24, 21, 90, 5.2427184466019),
(24, 22, 100, 3.8834951456311),
(24, 23, 100, 3.8834951456311),
(6, 5, 75, 14.506769825919),
(6, 6, 85, 15.618955512572),
(6, 7, 80, 11.605415860735),
(6, 8, 75, 11.605415860735),
(6, 9, 85, 14.303675048356),
(6, 10, 83, 12.84332688588);

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE IF NOT EXISTS `periode` (
  `periodeid` int(3) NOT NULL AUTO_INCREMENT,
  `periode` varchar(9) NOT NULL,
  PRIMARY KEY (`periodeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`periodeid`, `periode`) VALUES
(1, '2015/2016'),
(2, '2016/2017');

-- --------------------------------------------------------

--
-- Table structure for table `proker`
--

CREATE TABLE IF NOT EXISTS `proker` (
  `prokerid` int(11) NOT NULL AUTO_INCREMENT,
  `namaproker` varchar(200) NOT NULL,
  `jenisproker` varchar(7) NOT NULL,
  `detailjenis` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `tanggalmulai` date NOT NULL,
  `tanggalselesai` date NOT NULL,
  `lingkup` varchar(25) NOT NULL,
  `tujuan` varchar(500) NOT NULL,
  `ormawaid` int(2) NOT NULL,
  `periode` varchar(9) NOT NULL,
  `penilaian` double NOT NULL,
  `penilaianbpm` double NOT NULL,
  `latarbelakang` varchar(1500) DEFAULT NULL,
  `rasional` varchar(1500) DEFAULT NULL,
  `tujuanlpj` varchar(1000) DEFAULT NULL,
  `tempat` varchar(100) DEFAULT NULL,
  `peserta` varchar(300) DEFAULT NULL,
  `sesuai` varchar(5) DEFAULT NULL,
  `kendala` varchar(1000) DEFAULT NULL,
  `solusi` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`prokerid`),
  KEY `ormawaid` (`ormawaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `proker`
--

INSERT INTO `proker` (`prokerid`, `namaproker`, `jenisproker`, `detailjenis`, `deskripsi`, `tanggalmulai`, `tanggalselesai`, `lingkup`, `tujuan`, `ormawaid`, `periode`, `penilaian`, `penilaianbpm`, `latarbelakang`, `rasional`, `tujuanlpj`, `tempat`, `peserta`, `sesuai`, `kendala`, `solusi`) VALUES
(6, 'Maulid Nabi Muhamad 2016', 'ekstern', 'dies natalis', 'merupakan acara tahunan untuk merayakan hari jadi PSSI.', '2016-03-17', '2016-03-17', 'PSSI', 'untuk mempererat silaturahmi warga PSSI sendiri. baik dosen, staf, maupun mahasiswa.', 1, '2015/2016', 84.235976789168, 80.483558994197, 'kurangnya acara untuk mempererat silaturahmi antar warga pssi', 'untuk mempererat tali silaturahmi warga pssii', 'untuk mempererat tali silaturahmi warga pssii', 'Halaman PSSI', 'seluruh warga pssi: \r\nmahasiswa\r\ndosen\r\nstaf kependidikan', 'Ya', '- kurangnya persiapan karena waktu ynag begitu mepet\r\n- kurang koordinasi dari paniia enyelenggara\r\n- tidak memiliki plan untuk sesuatu yang tak terduga', '- dalam eprsiapan segala kemungkinan harus dipersiapkan dengan matang\r\n- dalam pelaksanaan kegiatan penitia harus menjaga komunikasi satu sama lain. '),
(7, 'Olimpiade TI 2016', 'ekstern', 'Lomba', '-', '2016-09-21', '2016-09-30', 'Jatim', '-', 1, '2015/2016', 85.512572533849, 83.742746615087, 'a', 'a', 'a', 'Gedung soerachman', 'siswa', 'Ya', 'lalala', 'lalala'),
(8, 'Discovery 3', 'ekstern', 'Lomba', 'Lomba ide Siswa Jatim', '0000-00-00', '0000-00-00', 'Jatim', '-', 1, '2015/2016', 84.671179883946, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Seminar Nasional', 'ekstern', 'Seminar', '-', '0000-00-00', '0000-00-00', 'Nasional', '-', 1, '2015/2016', 85.696324951644, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'FORTRAN', 'intern', 'Orientasi', 'Orientasi Mahasiswa Baru pssi & psti 2016', '0000-00-00', '0000-00-00', 'Ilmu Komputer', '-', 1, '2015/2016', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Idul Qurban', 'intern', '-', '-', '0000-00-00', '0000-00-00', '-', '-', 1, '2015/2016', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'LDK', 'intern', '-', '-', '0000-00-00', '0000-00-00', '-', '-', 1, '2015/2016', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Bakti Sosial', 'ekstern', 'Bakti Sosial', '-', '2017-04-19', '2017-04-19', '-', '-', 1, '2015/2016', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Diklat Al-Azhar', 'intern', '-', '-', '0000-00-00', '0000-00-00', '-', '-', 1, '2015/2016', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Seminar Internet Marketing', 'ekstern', 'Seminar', '-', '0000-00-00', '0000-00-00', 'Jember', '-', 1, '2015/2016', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'ISET 2016', 'ekstern', 'Lomba', 'Lomba E-sport Dota2', '0000-00-00', '0000-00-00', 'Jatim', '-', 1, '2015/2016', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Friendship 2016', 'ekstern', 'Lomba', 'Lomba antar angkatan PSSI', '0000-00-00', '0000-00-00', 'PSSI', '-', 1, '2015/2016', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'SE 2016', 'ekstern', '-', '-', '0000-00-00', '0000-00-00', '-', '-', 1, '2015/2016', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'PSSI Mengajar', 'ekstern', 'pengabdian', '-', '0000-00-00', '0000-00-00', 'PSSI', '-', 1, '2015/2016', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Public Speaking ', 'ekstern', 'Seminar/Workshop', '-', '0000-00-00', '0000-00-00', '-', '-', 1, '2015/2016', 84.980657640232, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'Pelatihan KWU Kopma', 'ekstern', 'Pelatihan', '-', '2017-04-13', '2017-04-12', '-', '-', 1, '2015/2016', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'SISFO CUP 2016', 'ekstern', 'lomba', '-', '0000-00-00', '0000-00-00', 'Besuki', '-', 3, '2015/2016', 92.941176470588, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'LIGA SISFO', 'ekstern', 'lomba sepak bola', '-', '0000-00-00', '0000-00-00', 'PSSI', '-', 3, '2015/2016', 89.85294117647, 89.85294117647, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Himasif Training Center', 'ekstern', 'Pelatihan', '-', '0000-00-00', '0000-00-00', 'PSSI', '-', 2, '2015/2016', 93.980582524272, 95.145631067961, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Sarasehan', 'ekstern', '-', '-', '0000-00-00', '0000-00-00', '-', '-', 2, '2015/2016', 96.504854368932, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Workshop Multimedia', 'ekstern', '-', '-', '0000-00-00', '0000-00-00', '-', '-', 2, '2015/2016', 99.417475728155, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'EXPO IT', 'ekstern', '-', '-', '0000-00-00', '0000-00-00', '-', '-', 2, '2015/2016', 94.757281553398, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'FORTRAN 2016', 'ekstern', '-', '-', '0000-00-00', '0000-00-00', '-', '-', 2, '2015/2016', 92.815533980583, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Latihan Perdivisi', 'ekstern', '-', '-', '0000-00-00', '0000-00-00', '-', '-', 4, '2015/2016', 57.272727272727, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'DIKLATSAR', 'ekstern', '-', '-', '0000-00-00', '0000-00-00', '-', '-', 4, '2015/2016', 52.727272727272, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'DIKJUT', 'ekstern', '-', '-', '0000-00-00', '0000-00-00', '-', '-', 4, '2015/2016', 52.727272727272, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'RTA', 'ekstern', '-', '-', '0000-00-00', '0000-00-00', '-', '-', 4, '2015/2016', 52.727272727272, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Earth Day', 'ekstern', '-', '-', '0000-00-00', '0000-00-00', '-', '-', 4, '2015/2016', 49.090909090909, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Eksen', 'ekstern', '-', '-', '0000-00-00', '0000-00-00', '-', '-', 5, '2015/2016', 80, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Tindak Nyata Sosial', 'ekstern', '-', '-', '0000-00-00', '0000-00-00', '-', '-', 5, '2015/2016', 61.538461538461, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'Pelatihan KWU', 'ekstern', 'pelatihan', '-', '2017-04-29', '2017-04-29', 'a', 'a', 1, '2016/2017', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rangehasil`
--

CREATE TABLE IF NOT EXISTS `rangehasil` (
  `maxlayak` double NOT NULL,
  `nilaipembatas` double NOT NULL,
  `mintlayak` double NOT NULL,
  `ormawaid` int(2) NOT NULL,
  `periode` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rangehasil`
--

INSERT INTO `rangehasil` (`maxlayak`, `nilaipembatas`, `mintlayak`, `ormawaid`, `periode`) VALUES
(92.941176470588, 85, 63.382352941177, 3, '2015/2016'),
(100, 86, 52.330097087379, 2, '2015/2016'),
(86.315280464217, 83, 79.177949709865, 1, '2015/2016');

-- --------------------------------------------------------

--
-- Table structure for table `subkriteria`
--

CREATE TABLE IF NOT EXISTS `subkriteria` (
  `subid` int(5) NOT NULL AUTO_INCREMENT,
  `namasub` varchar(50) NOT NULL,
  `utility` double NOT NULL,
  `kriteriaid` int(4) NOT NULL,
  PRIMARY KEY (`subid`),
  KEY `kriteriaid` (`kriteriaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `subkriteria`
--

INSERT INTO `subkriteria` (`subid`, `namasub`, `utility`, `kriteriaid`) VALUES
(7, 'Tidak mecukupi', 80, 5),
(8, 'Jember (lokal)', 85, 6),
(9, 'Besuki', 87, 6),
(10, 'Jatim', 88, 6),
(11, 'Nasional', 89, 6),
(12, 'Siswa', 85, 7),
(13, 'Mahasiswa', 80, 7),
(14, 'Siswa & Mahasiswa', 82, 7),
(15, 'Umum', 85, 7),
(16, 'Ya', 90, 8),
(17, 'Tidak', 75, 8),
(18, 'Tercapai', 85, 9),
(19, 'Tidak tercapai', 80, 9),
(20, 'Kurang baik', 80, 10),
(21, 'Cukup', 83, 10),
(22, 'Baik', 86, 10),
(23, 'Sangat baik', 90, 10),
(24, 'Mencukupi', 75, 5),
(25, 'Ya', 90, 11),
(26, 'Tidak', 75, 11),
(27, '+', 90, 12),
(28, '-', 70, 12),
(29, 'Jember (lokal)', 75, 13),
(30, 'Besuki', 90, 13),
(31, 'Ya', 100, 14),
(32, 'Tidak', 40, 14),
(33, 'Sangat sesuai', 100, 15),
(34, 'Sesuai', 80, 15),
(35, 'Cukup sesuai', 70, 15),
(36, 'Kurang sesuai', 60, 15),
(37, 'Tidak sesuai', 50, 15),
(38, 'Sangat baik', 100, 16),
(39, 'Baik', 80, 16),
(40, 'Cukup Baik', 70, 16),
(41, 'Kurang baik', 60, 16),
(42, 'Tidak baik', 50, 16),
(43, 'Sangat efektif dan efisien', 100, 17),
(44, 'Kurang efektif dan efisien', 70, 17),
(45, 'Antusias', 100, 18),
(46, 'Biasa saja', 70, 18),
(47, 'Malas-malasan', 50, 18),
(48, 'Antusias', 100, 19),
(49, 'Biasa saja', 70, 19),
(50, 'Malas-malasan', 50, 19),
(51, 'Sangat nyaman', 100, 20),
(52, 'Nyaman', 90, 20),
(53, 'Kurang nyaman', 75, 20),
(54, 'Tidak nyaman', 60, 20),
(55, 'Sangat efektif dan efisien', 100, 21),
(56, 'Biasa saja', 90, 21),
(57, 'Kurang efektif dan efisien', 70, 21),
(58, 'Tidak efektif dan efisien', 50, 21),
(59, 'Meningkat', 100, 22),
(60, 'Tetap', 80, 22),
(61, 'Menurun', 30, 22),
(62, 'Meningkat', 100, 23),
(63, 'Tetap', 70, 23),
(64, 'Menurun', 30, 23),
(65, 'Tahunan', 100, 24),
(66, 'Bulanan', 50, 25),
(67, 'Tahunan', 50, 25),
(68, 'Hanya Angota', 60, 26),
(69, 'Seluruh Balwana', 40, 26),
(70, 'Terbuka', 40, 27),
(71, 'Tertutup', 60, 27),
(72, 'Sering', 20, 28),
(73, 'Rutin', 30, 28),
(74, 'Sesuai Kebutuhan', 50, 28),
(75, 'tinggi', 25, 29),
(76, 'Sedang', 50, 29),
(77, 'Rendah', 25, 29),
(78, 'Tercapai', 80, 30),
(79, 'Tidak tercapai', 20, 30),
(80, 'Ya', 80, 31),
(81, 'Tidak', 20, 31),
(82, 'Ya', 80, 32),
(83, 'Tidak', 20, 32);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(3) NOT NULL AUTO_INCREMENT,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `ormawaid` int(2) NOT NULL,
  `level` int(1) NOT NULL,
  `periodeid` int(3) NOT NULL,
  `idstatus` int(1) NOT NULL,
  PRIMARY KEY (`userid`),
  KEY `ormawaid` (`ormawaid`),
  KEY `periodeid` (`periodeid`),
  KEY `periodeid_2` (`periodeid`),
  KEY `idstatus` (`idstatus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `ormawaid`, `level`, `periodeid`, `idstatus`) VALUES
(5, 'presbem13', 'omdias', 1, 1, 1, 1),
(6, 'abbiketum', 'abbi', 2, 1, 2, 1),
(7, 'kadivbem', 'asd', 1, 2, 1, 1),
(10, 'admin', 'asd', 6, 3, 1, 1),
(11, 'bagusmaco', 'asd', 3, 1, 1, 1),
(13, 'edwinbem', 'asd', 1, 1, 2, 1),
(16, 'dikiblwn', 'asd', 4, 1, 1, 1),
(18, 'andryderr', 'asd', 2, 1, 1, 1),
(19, 'akbaretalase', 'asd', 5, 1, 1, 1),
(20, 'safitri', '12345', 1, 2, 1, 1),
(21, 'elokbinary', '12345', 7, 1, 1, 2),
(22, 'lala', '12345', 1, 2, 1, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD CONSTRAINT `kriteria_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD CONSTRAINT `penilaian_ibfk_1` FOREIGN KEY (`prokerid`) REFERENCES `proker` (`prokerid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilaian_ibfk_2` FOREIGN KEY (`kriteriaid`) REFERENCES `kriteria` (`kriteriaid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penilainbpm`
--
ALTER TABLE `penilainbpm`
  ADD CONSTRAINT `penilainbpm_ibfk_1` FOREIGN KEY (`prokerid`) REFERENCES `proker` (`prokerid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penilainbpm_ibfk_2` FOREIGN KEY (`kriteriaid`) REFERENCES `kriteria` (`kriteriaid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `proker`
--
ALTER TABLE `proker`
  ADD CONSTRAINT `proker_ibfk_1` FOREIGN KEY (`ormawaid`) REFERENCES `ormawa` (`ormawaid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subkriteria`
--
ALTER TABLE `subkriteria`
  ADD CONSTRAINT `subkriteria_ibfk_1` FOREIGN KEY (`kriteriaid`) REFERENCES `kriteria` (`kriteriaid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`ormawaid`) REFERENCES `ormawa` (`ormawaid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`periodeid`) REFERENCES `periode` (`periodeid`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
