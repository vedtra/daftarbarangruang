/*
SQLyog Professional v12.4.3 (64 bit)
MySQL - 10.1.33-MariaDB : Database - db_dbr
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_dbr` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_dbr`;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(49,'2014_10_12_000000_create_users_table',1),
(50,'2014_10_12_100000_create_password_resets_table',1),
(51,'2018_07_13_080634_create_ruang',2),
(52,'2018_07_13_075647_create_ruang_milik',3),
(53,'2018_07_13_132125_create_status',4),
(54,'2018_07_13_082741_create_dbr',5),
(55,'2018_07_13_083813_create_dbr_dtl',6),
(56,'2018_07_13_090620_create_brg',7),
(57,'2018_07_13_085905_create_brg_stok',8),
(58,'2018_07_13_091143_create_tr_brg_spek',9),
(59,'2018_07_13_125826_create_brg_dtl',10),
(60,'2018_07_13_130527_create_td_dbr_mohon',11),
(61,'2018_07_13_131531_create_dbr_mohon_dtl',12),
(62,'2018_07_13_124839_create_dbr_history',13);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `td_brg_dtl` */

DROP TABLE IF EXISTS `td_brg_dtl`;

CREATE TABLE `td_brg_dtl` (
  `id_bid` int(11) NOT NULL,
  `id_brg_dtl` int(11) NOT NULL,
  `id_brg_stok` int(11) NOT NULL,
  `id_gol` int(11) NOT NULL,
  `id_kel` int(11) NOT NULL,
  `id_ssubkel` int(11) NOT NULL,
  `id_subkel` int(11) NOT NULL,
  `kondisi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_ruang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nup` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `td_brg_dtl` */

/*Table structure for table `td_brg_stok` */

DROP TABLE IF EXISTS `td_brg_stok`;

CREATE TABLE `td_brg_stok` (
  `id_brg_stok` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `no_bast` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saldo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` int(11) NOT NULL,
  `tgl_bast` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `td_brg_stok` */

/*Table structure for table `td_dbr` */

DROP TABLE IF EXISTS `td_dbr`;

CREATE TABLE `td_dbr` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode_ruang_milik` int(10) unsigned NOT NULL,
  `jlh_brg` int(11) NOT NULL,
  `nip_dbr` int(11) NOT NULL,
  `no_bast` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_status` int(10) unsigned NOT NULL,
  `kode_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_akhir` date NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_bast` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `td_dbr_kode_ruang_milik_foreign` (`kode_ruang_milik`),
  KEY `td_dbr_id_status_foreign` (`id_status`),
  CONSTRAINT `td_dbr_id_status_foreign` FOREIGN KEY (`id_status`) REFERENCES `tr_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `td_dbr_kode_ruang_milik_foreign` FOREIGN KEY (`kode_ruang_milik`) REFERENCES `td_ruang_milik` (`id_ruang_milik`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `td_dbr` */

/*Table structure for table `td_dbr_dtl` */

DROP TABLE IF EXISTS `td_dbr_dtl`;

CREATE TABLE `td_dbr_dtl` (
  `kode_dbr` int(10) unsigned NOT NULL,
  `id_dbr_dtl` int(11) NOT NULL,
  `kondisi_str` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nup` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `td_dbr_dtl_kode_dbr_foreign` (`kode_dbr`),
  CONSTRAINT `td_dbr_dtl_kode_dbr_foreign` FOREIGN KEY (`kode_dbr`) REFERENCES `td_dbr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `td_dbr_dtl` */

/*Table structure for table `td_dbr_mohon` */

DROP TABLE IF EXISTS `td_dbr_mohon`;

CREATE TABLE `td_dbr_mohon` (
  `kode_dbr` int(10) unsigned NOT NULL,
  `id_dbr_mohon` int(11) NOT NULL,
  `jenis_mohon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip_mohon` int(11) NOT NULL,
  `no_mohon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_status` int(10) unsigned NOT NULL,
  `kode_status_mohon` int(11) NOT NULL,
  `tgl_mohon` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `td_dbr_mohon_kode_dbr_foreign` (`kode_dbr`),
  KEY `td_dbr_mohon_id_status_foreign` (`id_status`),
  CONSTRAINT `td_dbr_mohon_id_status_foreign` FOREIGN KEY (`id_status`) REFERENCES `tr_status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `td_dbr_mohon_kode_dbr_foreign` FOREIGN KEY (`kode_dbr`) REFERENCES `td_dbr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `td_dbr_mohon` */

/*Table structure for table `td_dbr_mohon_dtl` */

DROP TABLE IF EXISTS `td_dbr_mohon_dtl`;

CREATE TABLE `td_dbr_mohon_dtl` (
  `kode_barang` int(10) unsigned NOT NULL,
  `kode_dbr_mohon_dtl` int(10) unsigned NOT NULL,
  `id_kodefikasi` int(11) NOT NULL,
  `nm_brg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `td_dbr_mohon_dtl_kode_barang_foreign` (`kode_barang`),
  CONSTRAINT `td_dbr_mohon_dtl_kode_barang_foreign` FOREIGN KEY (`kode_barang`) REFERENCES `tr_brg` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `td_dbr_mohon_dtl` */

/*Table structure for table `td_ruang_milik` */

DROP TABLE IF EXISTS `td_ruang_milik`;

CREATE TABLE `td_ruang_milik` (
  `kode_ruang` int(10) unsigned NOT NULL,
  `id_ruang_milik` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kd_unit` int(11) NOT NULL,
  `nip_rekam` int(11) NOT NULL,
  `nip_tgjwb` int(11) NOT NULL,
  `nip_update` int(11) NOT NULL,
  `no_nd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_awal` date NOT NULL,
  `tgl_nd` date NOT NULL,
  `wk_rekam` date NOT NULL,
  `wk_update` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_ruang_milik`),
  KEY `td_ruang_milik_kode_ruang_foreign` (`kode_ruang`),
  CONSTRAINT `td_ruang_milik_kode_ruang_foreign` FOREIGN KEY (`kode_ruang`) REFERENCES `tr_ruang` (`id_ruang`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `td_ruang_milik` */

/*Table structure for table `tp_dbr_history` */

DROP TABLE IF EXISTS `tp_dbr_history`;

CREATE TABLE `tp_dbr_history` (
  `id_dbr` int(10) unsigned NOT NULL,
  `id_dbr_history` int(11) NOT NULL,
  `kode_nip_dbr` int(11) NOT NULL,
  `nip_tgjwb` int(11) NOT NULL,
  `nup` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_akhir` date NOT NULL,
  `tgl_awal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `tp_dbr_history_id_dbr_foreign` (`id_dbr`),
  CONSTRAINT `tp_dbr_history_id_dbr_foreign` FOREIGN KEY (`id_dbr`) REFERENCES `td_dbr` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tp_dbr_history` */

/*Table structure for table `tr_brg` */

DROP TABLE IF EXISTS `tr_brg`;

CREATE TABLE `tr_brg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nm_barang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tr_brg` */

/*Table structure for table `tr_brg_spek` */

DROP TABLE IF EXISTS `tr_brg_spek`;

CREATE TABLE `tr_brg_spek` (
  `kode_barang` int(10) unsigned NOT NULL,
  `id_brg_spek` int(11) NOT NULL,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `merk` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spek_lain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `tr_brg_spek_kode_barang_foreign` (`kode_barang`),
  CONSTRAINT `tr_brg_spek_kode_barang_foreign` FOREIGN KEY (`kode_barang`) REFERENCES `tr_brg` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tr_brg_spek` */

/*Table structure for table `tr_ruang` */

DROP TABLE IF EXISTS `tr_ruang`;

CREATE TABLE `tr_ruang` (
  `id_ruang` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_ruang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_ruang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tr_ruang` */

/*Table structure for table `tr_status` */

DROP TABLE IF EXISTS `tr_status`;

CREATE TABLE `tr_status` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_status` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tr_status` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
