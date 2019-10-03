-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 5.6.21 - MySQL Community Server (GPL)
-- OS Server:                    Win32
-- HeidiSQL Versi:               9.5.0.5280
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Membuang struktur basisdata untuk pendaftaran_online
DROP DATABASE IF EXISTS `pendaftaran_online`;
CREATE DATABASE IF NOT EXISTS `pendaftaran_online` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `pendaftaran_online`;

-- membuang struktur untuk table pendaftaran_online.tb_operator
DROP TABLE IF EXISTS `tb_operator`;
CREATE TABLE IF NOT EXISTS `tb_operator` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(15) DEFAULT '0',
  `nama` varchar(50) DEFAULT '0',
  `username` varchar(50) DEFAULT '0',
  `password` varchar(50) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel pendaftaran_online.tb_operator: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `tb_operator` DISABLE KEYS */;
REPLACE INTO `tb_operator` (`id`, `nik`, `nama`, `username`, `password`) VALUES
	(1, '124678456', 'SAIFUL', 'saiful', '123');
/*!40000 ALTER TABLE `tb_operator` ENABLE KEYS */;

-- membuang struktur untuk table pendaftaran_online.tb_pendaftaran
DROP TABLE IF EXISTS `tb_pendaftaran`;
CREATE TABLE IF NOT EXISTS `tb_pendaftaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no` varchar(50) NOT NULL DEFAULT '0',
  `tgl` date DEFAULT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `kota_wali` varchar(50) NOT NULL,
  `alamat_wali` varchar(100) NOT NULL,
  `telp_wali` varchar(15) NOT NULL,
  `pekerjaan_wali` varchar(30) NOT NULL,
  `asal_sekolah` varchar(30) NOT NULL,
  `alamat_sekolah` varchar(100) NOT NULL,
  `nilai_akhir` varchar(100) NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel pendaftaran_online.tb_pendaftaran: ~0 rows (lebih kurang)
/*!40000 ALTER TABLE `tb_pendaftaran` DISABLE KEYS */;
REPLACE INTO `tb_pendaftaran` (`id`, `no`, `tgl`, `nama_lengkap`, `kota`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `no_hp`, `nama_wali`, `kota_wali`, `alamat_wali`, `telp_wali`, `pekerjaan_wali`, `asal_sekolah`, `alamat_sekolah`, `nilai_akhir`, `status`) VALUES
	(6, 'NP20191002092917', '2019-10-02', 'Zelva Yuvi Diandra', 'madiun', 'madiun', 'madiun', '2221-02-07', 'Laki-Laki', 'Islam', '15554655', 'Joko Widodo', 'madiun', 'madiun', '2145361634654', 'madiun', 'madiun', 'madiun', '12', 1);
/*!40000 ALTER TABLE `tb_pendaftaran` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
