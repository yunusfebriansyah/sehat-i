/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.19-MariaDB : Database - sehat_i
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sehat_i` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `sehat_i`;

/*Table structure for table `ambulances` */

DROP TABLE IF EXISTS `ambulances`;

CREATE TABLE `ambulances` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `ambulances` */

insert  into `ambulances`(`id`,`nama`,`jumlah`,`alamat`,`hp`,`created_at`,`updated_at`) values 
(1,'Rumah Sakit Urip Sumoharjo Bandar Lampung',5,'Jl. Urip Sumoharjo No.200, Gn. Sulah, Way Halim, Kota Bandar Lampung, Lampung 35132','+62721771322','2021-12-23 05:15:25','2021-12-23 05:15:25'),
(2,'Rumah Sakit Tk IV Bandar Lampung',3,'Jl. Dr. Rivai No.7, Penengahan, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35121','+62721703574','2021-12-23 05:15:25','2021-12-23 05:15:25'),
(3,'RSIA Belleza Kedaton',4,'\r\nJl. Sultan H., Labuhan Ratu, Kec. Kedaton, Kota Bandar Lampung, Lampung 35132','+62721773333','2021-12-23 05:15:25','2021-12-23 05:15:25'),
(4,'RS Pertamina Bintang Amin',3,'Jl. Pramuka No.27, Kemiling Permai, Kec. Kemiling, Kota Bandar Lampung, Lampung 35151','+62721273601','2021-12-23 05:15:25','2021-12-23 05:15:25'),
(5,'RSUD Dr. H. Abdul Moeloek',3,'Jl. Dr. Rivai No.6, Penengahan, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35112','+62721703312','2021-12-23 05:15:25','2021-12-23 05:15:25'),
(6,'Rumah Sakit Imanuel Way Halim',4,'Jl. Soekarno Hatta No.1, Way Dadi, Kec. Sukarame, Kota Bandar Lampung, Lampung 35133','+62721704900','2021-12-23 05:15:25','2021-12-23 05:15:25'),
(7,'RSBW',2,'H7G2+2FR, Pengajaran, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35214','+62721703312','2021-12-23 05:15:25','2021-12-23 05:15:25'),
(8,'RSU Muhammadiyah Metro',3,'Jl. Soekarno Hatta No.42, Mulyojati, Kec. Metro Bar., Kota Metro, Lampung 34125','+6272549490','2021-12-23 05:15:25','2021-12-23 05:15:25'),
(9,'RS Mardi Waluyo, Metro',4,'Jl. Jendral Sudirman No.156, Metro, Kec. Metro Pusat, Kota Metro, Lampung 34125','+6272542512','2021-12-23 05:15:25','2021-12-23 05:15:25'),
(10,'RSUD Jend Ahmad Yani Metro',5,'Jl. Jend. A. Yani No.13, Imopuro, Kec. Metro Pusat, Kota Metro, Lampung 34124','+6272541820','2021-12-23 05:15:25','2021-12-23 05:15:25'),
(11,'Rumah Sakit Islam Metro',3,'Jl. Jend, Jl. AH Nasution No.250, Yosodadi, Kec. Metro Tim., Kota Metro, Lampung 34111','+6272541883','2021-12-23 05:15:25','2021-12-23 05:15:25');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `isolasis` */

DROP TABLE IF EXISTS `isolasis`;

CREATE TABLE `isolasis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `isolasis` */

insert  into `isolasis`(`id`,`nama`,`alamat`,`hp`,`created_at`,`updated_at`) values 
(1,'Asrama Haji Lampung','Jl. Soekarno - Hatta No.36, Rajabasa Raya, Rajabasa, Rajabasa Raya, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35142','+62721417005','2021-12-23 05:26:39','2021-12-23 05:26:39'),
(2,'Sekertariat Medinas Lampung (Kabupaten Pringsewu)','Jl. Jenderal Sudirman No.188, Pringsewu Bar., Kec. Pringsewu, Kabupaten Pringsewu, Lampung 35373','+6282278028010','2021-12-23 05:26:39','2021-12-23 05:26:39'),
(3,'RSPTN UNILA','J6HQ+CQW, Rajabasa, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35141','+6281367071715','2021-12-23 05:26:39','2021-12-23 05:26:39'),
(4,'Kantor Pelita Ekspres','Jl. Merapi Raya, Perumnas Way Halim, Way Halim, Kota Bandar Lampung, Lampung 35132','+627215619642','2021-12-23 05:26:39','2021-12-23 05:26:39'),
(5,'IDI Cabang Bandar Lampung','Gg. Sederhana, Jagabaya III, Kec. Sukabumi, Kota Bandar Lampung, Lampung 35122','+627215605060','2021-12-23 05:26:39','2021-12-23 05:26:39'),
(6,'PT. Jejamo Media Mandiri Tbk','Jalan Adi Sucipto No.65/87, Kebon Jeruk, Tanjung Karang Timur, Kb. Jeruk, Kec. Tj. Karang Tim., Kota Bandar Lampung, Lampung 35128','+6281369591133','2021-12-23 05:26:39','2021-12-23 05:26:39'),
(7,'Kantor Redaksi Lampungnews.com','Jl. Raden Intan No.107, Enggal, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35213','+6281272434300','2021-12-23 05:26:39','2021-12-23 05:26:39');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1),
(5,'2021_12_22_210106_create_oxygens_table',1),
(6,'2021_12_22_210335_create_ambulances_table',1),
(7,'2021_12_22_210523_create_plasmas_table',1),
(8,'2021_12_22_210550_create_puskes_table',1),
(9,'2021_12_22_210610_create_swaps_table',1),
(10,'2021_12_22_210624_create_vaksins_table',1),
(11,'2021_12_22_210647_create_isolasis_table',1);

/*Table structure for table `oxygens` */

DROP TABLE IF EXISTS `oxygens`;

CREATE TABLE `oxygens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `oxygens` */

insert  into `oxygens`(`id`,`nama`,`alamat`,`hp`,`created_at`,`updated_at`) values 
(1,'APOTEK PRIMA','Jalan Sam Ratulangin Bandarlampung','082282546286','2021-12-23 04:42:10','2021-12-23 04:42:10'),
(2,'LINTANG MEDIKA','Jl. Jenderal Urip Uumoharjo no. 4 Depan Kosasih Urip','0721 770898','2021-12-23 04:42:10','2021-12-23 04:42:10'),
(3,'APOTEK HARAPAN','Jl. Sam ratulangi No. 97 Bandarlampung','085100904262','2021-12-23 04:42:10','2021-12-23 04:42:10'),
(4,'APOTEK KIMIA FARMA','Jl.Teuku Umar Bandarlampung','08154073378','2021-12-23 04:42:10','2021-12-23 04:42:10'),
(5,'SLARA MEDIKA','Jl. Teuku Umar No. 7 E Bandarlampung','082179927488','2021-12-23 04:42:10','2021-12-23 04:42:10'),
(6,'Oksigen Pak Onik','Jl. Wr. Supratman No.45 22a Hadimulyo Timur, Metro Pusat','0808080808','2021-12-23 04:42:10','2021-12-23 04:42:10'),
(7,'PT. Aneka Gas Industri','Jl. Raya KM. 22,5, Candi Mas, Natar, Candi Mas, Kec. Natar, Lampung Selatan','072192363','2021-12-23 04:42:10','2021-12-23 04:42:10'),
(8,'Isi ulang Oksigen Pak Tua','Jl. Urip Sumoharjo','081299096606','2021-12-23 04:42:10','2021-12-23 04:42:10'),
(9,'Toko Sianipar','Jl. Kepayang No.14, Rajabasa','082281409130','2021-12-23 04:42:10','2021-12-23 04:42:10'),
(10,'Isi ulang Oksigen','JL. Tamin gg. Merpati no. 7 Bandarlampung','085268353860','2021-12-23 04:42:10','2021-12-23 04:42:10'),
(11,'Isi Ulang Oksigen Hendrik Purnomo /CV.Teknik Kerja','Jl. P. Antasari Gg. Manunggal no. 82 Bandarlampung','085366135518','2021-12-23 04:42:10','2021-12-23 04:42:10'),
(12,'PT. Aneka Gas Industri Lampung','Campang Raja, Tanjung Karang Timur, Kota Bandar Lampung','07215605269','2021-12-23 04:42:10','2021-12-23 04:42:10'),
(13,'Apotek K24 Teuku Umar','Jl. Teuku Umar No 3C-D, Sidodadi, Kec. Kedaton, Kota Bandar Lampung','07215618331','2021-12-23 04:42:10','2021-12-23 04:42:10');

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `plasmas` */

DROP TABLE IF EXISTS `plasmas`;

CREATE TABLE `plasmas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `plasmas` */

insert  into `plasmas`(`id`,`nama`,`alamat`,`hp`,`created_at`,`updated_at`) values 
(1,'UTD PMI LAMPUNG','Jl. Sam Ratulangi No.105, Penengahan, Kec. Tj. Karang Bar., Kota Bandar Lampung, Lampung 35118','+62721703020','2021-12-23 05:15:42','2021-12-23 05:15:42'),
(2,'Gerai Donor Darah Candra','Jl. Hayam Wuruk No.76, Sawah Lama, Kec. Tj. Karang Tim., Kota Bandar Lampung, Lampung 35213','+62721703574','2021-12-23 05:15:42','2021-12-23 05:15:42'),
(3,'Palang Merah Indonesia','Ktr. Kec. Jl. Bung Tomo No.4, Gedong Air, Kec. Tj. Karang Bar., Kalimantan Selatan, Lampung 35118','+6281273944462','2021-12-23 05:15:42','2021-12-23 05:15:42'),
(4,'Sekretariat Pusat DDS - Donor Darah Sukarela (Rumah Pak Teguh Setiawan)','JL KH. Dewantoro No.1097, RT.09/RW.03, Pringsewu Selatan, Kec. Pringsewu, Kabupaten Pringsewu, Lampung 35373','+62721273601','2021-12-23 05:15:42','2021-12-23 05:15:42'),
(5,'Kantor Cabang PMI Lampung','JL. Merpati No. 468, Pinang Jaya, Kemiling, Pinang Jaya, Kec. Kemiling, Kota Bandar Lampung, Lampung 35153','+6272425238','2021-12-23 05:15:42','2021-12-23 05:15:42'),
(6,'Kantor Cabang PMI Lampung','Jl. Mawar No. 4, Way Mengaku, Balik bukit, Tj. Karang, Engal, Kota Bandar Lampung, Lampung 35213','+6272821118','2021-12-23 05:15:42','2021-12-23 05:15:42'),
(7,'Palang Merah Indonesia','Jl. Cut Nyak Dien No.80, Palapa, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35116','+62721255418','2021-12-23 05:15:42','2021-12-23 05:15:42'),
(8,'Palang Merah Indonesia Ahmad Yani Metro','Jl. Ahmad Yani No.17, Metro, Kec. Metro Pusat, Kota Metro, Lampung 34111','+6272547943','2021-12-23 05:15:42','2021-12-23 05:15:42'),
(9,'RS Mardi Waluyo, Metro','Jl. Jendral Sudirman No.156, Metro, Kec. Metro Pusat, Kota Metro, Lampung 34125','+6272542512','2021-12-23 05:15:42','2021-12-23 05:15:42'),
(10,'RSUD Jend Ahmad Yani Metro','Jl. Jend. A. Yani No.13, Imopuro, Kec. Metro Pusat, Kota Metro, Lampung 34124','+6272541820','2021-12-23 05:15:42','2021-12-23 05:15:42');

/*Table structure for table `puskes` */

DROP TABLE IF EXISTS `puskes`;

CREATE TABLE `puskes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `puskes` */

insert  into `puskes`(`id`,`nama`,`alamat`,`hp`,`created_at`,`updated_at`) values 
(1,'Puskesmas Metro','Jl. Mayjen Riyachudu, Metro, Kec. Metro Pusat, Kota Metro, Lampung 34125','+6272547943','2021-12-23 04:38:21','2021-12-23 04:38:21'),
(2,'Puskesmas Iring Mulyo Kota Metro','Jl. Ki Hajar Dewantara No.85, Iringmulyo, Kec. Metro Tim., Kota Metro, Lampung 34124','+6272545313','2021-12-23 04:38:21','2021-12-23 04:38:21'),
(3,'Puskesmas Yosomulyo','Jl. Basuki Rachmat, Yosomulyo, Kec. Metro Pusat, Kota Metro, Lampung 34381','+6272541820','2021-12-23 04:38:21','2021-12-23 04:38:21'),
(4,'Poskeskel Rajabasa','Jl. Kapten Abdul Haq, Rajabasa, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35142','+62721703020','2021-12-23 04:38:21','2021-12-23 04:38:21'),
(5,'Pusat Kesehatan Masyarakat','Jl. Sisingamangaraja No.4, Gedong Air, Kec. Tj. Karang Bar., Kota Bandar Lampung, Lampung 35118','+627217478062','2021-12-23 04:38:21','2021-12-23 04:38:21'),
(6,'Puskesmas Rajabasa Indah RBI','J6GG+QR4, Rajabasa, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35152','+627218011767','2021-12-23 04:38:21','2021-12-23 04:38:21'),
(7,'Pusat Kesehatan Masyarakat','Gg. Mawar 5 No.13, Gedong Air, Kec. Tj. Karang Bar., Kota Bandar Lampung, Lampung 35125','+627217628094','2021-12-23 04:38:21','2021-12-23 04:38:21'),
(8,'Puskesmas Hajimena','Jl. Sakura Bataranila, Hajimena, Kec. Natar, Kabupaten Lampung Selatan, Lampung 35143','+62721789380','2021-12-23 04:38:21','2021-12-23 04:38:21'),
(9,'Puskesmas Pembantu','Jl. ZA. Pagar Alam, Rajabasa, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35144','+6272821118','2021-12-23 04:38:21','2021-12-23 04:38:21'),
(11,'Puskesmas Pembantu Tangkil','Jalan Nunyai Indah, Tangkil, Rajabasa, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35141','+62721255418','2021-12-23 04:38:21','2021-12-23 04:38:21');

/*Table structure for table `swaps` */

DROP TABLE IF EXISTS `swaps`;

CREATE TABLE `swaps` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `swaps` */

insert  into `swaps`(`id`,`nama`,`alamat`,`hp`,`created_at`,`updated_at`) values 
(1,'Kimia Farma Laboratorium Klinik Bandar lampung','Jl. Gajah Mada No.60/41, Kota Baru, Kec. Tj. Karang Tim., Kota Bandar Lampung, Lampung 35128','+62721269901','2021-12-23 05:15:59','2021-12-23 05:15:59'),
(2,'Intibios Lab Lampung','Jl. Yos Sudarso No.83, Bumi Waras, Kota Bandar Lampung, Lampung 35226','+6281373827179','2021-12-23 05:15:59','2021-12-23 05:15:59'),
(3,'Lab. Klinik Prodia','Jl. Jend. Sudirman No.120, Rw. Laut, Engal, Kota Bandar Lampung, Lampung 35127','+627218017700','2021-12-23 05:15:59','2021-12-23 05:15:59'),
(4,'Laboratorium Klinik Prodia','Jl. Ikan Hiu No.63, Pesawahan, Kec. Telukbetung Selatan, Kota Bandar Lampung, Lampung 35223','+621500830','2021-12-23 05:15:59','2021-12-23 05:15:59'),
(5,'Telkomedika Health Center','Jl. Sultan Agung No.1, Sepang Jaya, Kec. Kedaton, Kota Bandar Lampung, Lampung 35128','+62721704999','2021-12-23 05:15:59','2021-12-23 05:15:59'),
(6,'.KLINIK PRATAMA SAIBUMI','Jl. P. Tirtayasa No.12, Sukabumi Indah, Kec. Sukabumi, Kota Bandar Lampung, Lampung 35122','+627215642445','2021-12-23 05:15:59','2021-12-23 05:15:59'),
(7,'Dinas Kesehatan Kota Bandar Lampung','Jl. Way Pengubuan No.4, Pahoman, Kec. Tlk. Betung Utara, Kota Bandar Lampung, Lampung 35228','+62721255418','2021-12-23 05:15:59','2021-12-23 05:15:59'),
(8,'Laboratorium Kimia Farma','Jl. Gajah Mada No.76E, Tj. Agung Raya, Kec. Tj. Karang Tim., Kota Bandar Lampung, Lampung 35128','+6262721269901','2021-12-23 05:15:59','2021-12-23 05:15:59'),
(9,'Klinik dan Apotek Teluk Sehat Medika','Jl. Laksamana R.E.Martadinata, RT.002/RW.Lk 01, Keteguhan, Tlk. Betung Tim., Kota Bandar Lampung, Lampung 35235','+6281291020388','2021-12-23 05:15:59','2021-12-23 05:15:59'),
(10,'Laboratorium Prodia Metro','Jl. Jendral Sudirman, Ganjaragung, Kec. Metro Bar., Kota Metro, Lampung 34125','+627257855205','2021-12-23 05:15:59','2021-12-23 05:15:59');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*Table structure for table `vaksins` */

DROP TABLE IF EXISTS `vaksins`;

CREATE TABLE `vaksins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `vaksins` */

insert  into `vaksins`(`id`,`nama`,`alamat`,`hp`,`created_at`,`updated_at`) values 
(1,'Puskesmas Simpur','Jl. Tamin No.121, Klp. Tiga, Kec. Tj. Karang Pusat, Kota Bandar Lampung, Lampung 35151','+62721255872','2021-12-23 05:26:23','2021-12-23 05:26:23'),
(2,'Pusat Kesehatan Masyarakat Kampung Sawah','Jl. Arjuna No.14, Sawah Brebes, Kec. Tj. Karang Tim., Kota Bandar Lampung, Lampung 35121','+62721250163','2021-12-23 05:26:23','2021-12-23 05:26:23'),
(3,'Igd','Jl. Hos Cokroaminoto No.96, RW.2, Rw. Laut, Engal, Kota Bandar Lampung, Lampung 35213','+627218017700','2021-12-23 05:26:23','2021-12-23 05:26:23'),
(4,'Puskesmas Bakung','Jl. Kamboja AA No.07, Bakung, Tlk. Betung Bar., Kota Bandar Lampung, Lampung 35238','+628127901508','2021-12-23 05:26:23','2021-12-23 05:26:23'),
(5,'Puskesmas Sukaraja','Jl. Yos Sudarso No.242, Sukaraja, Bumi Waras, Kota Bandar Lampung, Lampung 35226','+62721472565','2021-12-23 05:26:23','2021-12-23 05:26:23'),
(6,'Lokasi vaksin COVID-19 - Graha Wangsa Bistro','H73R+PHC, Sukaraja, Bumi Waras, Kota Bandar Lampung, Lampung','+627215642445','2021-12-23 05:26:23','2021-12-23 05:26:23'),
(7,'Puskesmas Sukamaju','G6HV+XWM, Sukamaju, Tlk. Betung Tim., Kota Bandar Lampung, Lampung 35231','+62721485070','2021-12-23 05:26:23','2021-12-23 05:26:23'),
(8,'Puskesmas Susunan Baru','Jl. Sultan Badarudin No.110, Susunan Baru, Kec. Tj. Karang Bar., Kota Bandar Lampung, Lampung 35115','+62721257656','2021-12-23 05:26:23','2021-12-23 05:26:23'),
(9,'Puskesmas Rawat Inap Sukabumi','Jl. Pulau Bangka No.3, Sukabumi, Kec. Sukabumi, Kota Bandar Lampung, Lampung 35122','+6281291020388','2021-12-23 05:26:23','2021-12-23 05:26:23'),
(10,'Lokasi vaksin COVID-19 - Balai Pekon Margosari','R943+PGF, Margo Sari, Metro Kibang, Kabupaten Lampung Timur, Lampung 34335','+627257855205','2021-12-23 05:26:23','2021-12-23 05:26:23');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
