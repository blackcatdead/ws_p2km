-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL version:             7.0.0.4053
-- Date/time:                    2015-11-04 16:12:18
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;

-- Dumping database structure for p2km
CREATE DATABASE IF NOT EXISTS `p2km` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `p2km`;


-- Dumping structure for table p2km.dokumentasi
CREATE TABLE IF NOT EXISTS `dokumentasi` (
  `id_dokumentasi` int(10) NOT NULL AUTO_INCREMENT,
  `path` text,
  `status` int(10) DEFAULT NULL,
  `id_kegiatan_fk` int(10) DEFAULT NULL,
  `dokumentasi` text,
  PRIMARY KEY (`id_dokumentasi`),
  KEY `id_kegiatan_fk` (`id_kegiatan_fk`),
  CONSTRAINT `FK_dokumentasi_kegiatan` FOREIGN KEY (`id_kegiatan_fk`) REFERENCES `kegiatan` (`id_kegiatan`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table p2km.dokumentasi: ~15 rows (approximately)
/*!40000 ALTER TABLE `dokumentasi` DISABLE KEYS */;
INSERT INTO `dokumentasi` (`id_dokumentasi`, `path`, `status`, `id_kegiatan_fk`, `dokumentasi`) VALUES
	(1, NULL, 1, 1, NULL),
	(2, NULL, 1, 1, NULL),
	(3, NULL, 1, 1, NULL),
	(4, NULL, 1, 1, NULL),
	(5, NULL, 1, 1, NULL),
	(6, NULL, 1, 1, NULL),
	(7, NULL, 1, 1, NULL),
	(8, NULL, 1, 1, NULL),
	(9, NULL, 1, 1, NULL),
	(10, NULL, 1, 1, NULL),
	(11, NULL, 1, 1, NULL),
	(12, NULL, 1, 1, NULL),
	(13, NULL, 1, 1, NULL),
	(14, NULL, 1, 1, NULL),
	(15, NULL, 1, 1, NULL);
/*!40000 ALTER TABLE `dokumentasi` ENABLE KEYS */;


-- Dumping structure for table p2km.kegiatan
CREATE TABLE IF NOT EXISTS `kegiatan` (
  `id_kegiatan` int(10) NOT NULL AUTO_INCREMENT,
  `id_usaha_fk` int(10) DEFAULT NULL,
  `kegiatan` text,
  `deskripsi` text,
  `status` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_kegiatan`),
  KEY `id_usaha_fk` (`id_usaha_fk`),
  CONSTRAINT `FK_kegiatan_usaha` FOREIGN KEY (`id_usaha_fk`) REFERENCES `usaha` (`id_usaha`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table p2km.kegiatan: ~9 rows (approximately)
/*!40000 ALTER TABLE `kegiatan` DISABLE KEYS */;
INSERT INTO `kegiatan` (`id_kegiatan`, `id_usaha_fk`, `kegiatan`, `deskripsi`, `status`) VALUES
	(1, 1, 'kegiatan 1', 'sdasdasf', 1),
	(2, 1, 'kegiatan 2', 'ghfgh', 1),
	(3, 1, 'hc', 'ggch', NULL),
	(4, 1, '/xbC', 'hhgj', NULL),
	(5, 1, 'y:v kH', 'hxjvajg', NULL),
	(6, NULL, 'jchzdg', '', NULL),
	(7, 1, '7"B,gk', '7cihs', NULL),
	(8, 1, 'hshd', 'hdhd', NULL),
	(9, 3, '', '', NULL),
	(10, 3, 'hd', 'vxbx', NULL),
	(11, 3, 'igg', 'uf', NULL);
/*!40000 ALTER TABLE `kegiatan` ENABLE KEYS */;


-- Dumping structure for table p2km.usaha
CREATE TABLE IF NOT EXISTS `usaha` (
  `id_usaha` int(10) NOT NULL AUTO_INCREMENT,
  `logo` text,
  `usaha` text,
  `deskripsi` text,
  `status` text,
  `datetime_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_usaha`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table p2km.usaha: ~7 rows (approximately)
/*!40000 ALTER TABLE `usaha` DISABLE KEYS */;
INSERT INTO `usaha` (`id_usaha`, `logo`, `usaha`, `deskripsi`, `status`, `datetime_created`) VALUES
	(1, NULL, 'usaha', 'dffgfdgfghfgjghj', '1', '2015-10-19 07:34:25'),
	(2, NULL, 'usaha', NULL, NULL, '2015-10-19 07:35:34'),
	(3, NULL, 'hshzb', 'gsgs', NULL, '2015-10-19 07:35:39'),
	(4, NULL, 'hshsb', NULL, NULL, '2015-10-19 07:35:47'),
	(5, NULL, 'hsbz dhdhx', 'dhhd hdjxn djdj', NULL, '2015-10-19 07:36:30'),
	(6, NULL, 'hdjd', 'hdbd', NULL, '2015-11-04 07:53:07'),
	(7, NULL, 'sghdj', '', NULL, '2015-11-04 07:53:12');
/*!40000 ALTER TABLE `usaha` ENABLE KEYS */;


-- Dumping structure for table p2km.user
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(10) NOT NULL DEFAULT '0',
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table p2km.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`id_user`, `username`, `password`, `status`, `nama`) VALUES
	(1, 'admin', 'admin', 1, 'asdasdsad');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40014 SET FOREIGN_KEY_CHECKS=1 */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
