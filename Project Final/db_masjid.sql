-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.7.33 - MySQL Community Server (GPL)
-- OS Server:                    Win64
-- HeidiSQL Versi:               11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Membuang struktur basisdata untuk db_masjid
CREATE DATABASE IF NOT EXISTS `db_masjid` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_masjid`;

-- membuang struktur untuk table db_masjid.tb_galeri
CREATE TABLE IF NOT EXISTS `tb_galeri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(200) DEFAULT NULL,
  `judul_foto` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table db_masjid.tb_kegiatan
CREATE TABLE IF NOT EXISTS `tb_kegiatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(200) DEFAULT NULL,
  `nama_kegiatan` varchar(200) DEFAULT NULL,
  `narasumber` varchar(200) DEFAULT NULL,
  `waktu` timestamp NULL DEFAULT NULL,
  `keterangan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table db_masjid.tb_keluar
CREATE TABLE IF NOT EXISTS `tb_keluar` (
  `id_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(200) DEFAULT NULL,
  `uang_keluar` int(11) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_keluar`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table db_masjid.tb_list_rekap
CREATE TABLE IF NOT EXISTS `tb_list_rekap` (
  `id_list_rekap` int(11) NOT NULL AUTO_INCREMENT,
  `masuk` int(11) DEFAULT NULL,
  `keluar` int(11) DEFAULT NULL,
  `rekap` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_list_rekap`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table db_masjid.tb_masuk
CREATE TABLE IF NOT EXISTS `tb_masuk` (
  `id_masuk` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kegiatan` varchar(200) DEFAULT NULL,
  `uang_masuk` int(11) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_masuk`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table db_masjid.tb_pengurus
CREATE TABLE IF NOT EXISTS `tb_pengurus` (
  `id_pengurus` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(200) DEFAULT NULL,
  `nama` varchar(200) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_pengurus`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table db_masjid.tb_rekapitulasi
CREATE TABLE IF NOT EXISTS `tb_rekapitulasi` (
  `id_rekap` int(11) NOT NULL AUTO_INCREMENT,
  `uang_masuk` int(11) NOT NULL DEFAULT '0',
  `uang_keluar` int(11) NOT NULL DEFAULT '0',
  `hasil_rekap` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_rekap`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.

-- membuang struktur untuk table db_masjid.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) DEFAULT NULL,
  `username` varchar(200) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `nohp` varchar(15) DEFAULT NULL,
  `alamat` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Pengeluaran data tidak dipilih.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
