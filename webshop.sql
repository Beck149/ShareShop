-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.24-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for webshop
CREATE DATABASE IF NOT EXISTS `webshop` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `webshop`;

-- Dumping structure for table webshop.config_web
CREATE TABLE IF NOT EXISTS `config_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `logo` text NOT NULL,
  `number_phone` text NOT NULL,
  `email` text NOT NULL,
  `line` text NOT NULL,
  `page_facebook` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Dumping data for table webshop.config_web: ~0 rows (approximately)
INSERT INTO `config_web` (`id`, `name`, `logo`, `number_phone`, `email`, `line`, `page_facebook`, `date`) VALUES
	(1, 'SHERESHOP', '/assete/img/2.png', '0912345678', 'SHERESHOP@gmail.com', '@SHERESHOP', '', '2022-05-15 16:38:04');

-- Dumping structure for table webshop.counter
CREATE TABLE IF NOT EXISTS `counter` (
  `DATE` date NOT NULL,
  `IP` varchar(30) NOT NULL,
  PRIMARY KEY (`DATE`,`IP`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table webshop.counter: 1 rows
/*!40000 ALTER TABLE `counter` DISABLE KEYS */;
INSERT INTO `counter` (`DATE`, `IP`) VALUES
	('2022-05-15', '127.0.0.1');
/*!40000 ALTER TABLE `counter` ENABLE KEYS */;

-- Dumping structure for table webshop.daily
CREATE TABLE IF NOT EXISTS `daily` (
  `DATE` date NOT NULL,
  `NUM` varchar(3) NOT NULL,
  PRIMARY KEY (`DATE`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- Dumping data for table webshop.daily: 1 rows
/*!40000 ALTER TABLE `daily` DISABLE KEYS */;
INSERT INTO `daily` (`DATE`, `NUM`) VALUES
	('2022-05-14', '0');
/*!40000 ALTER TABLE `daily` ENABLE KEYS */;

-- Dumping structure for table webshop.history_topup
CREATE TABLE IF NOT EXISTS `history_topup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_topup` text NOT NULL,
  `name_topup` text NOT NULL,
  `amount_topup` text NOT NULL,
  `date_set` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table webshop.history_topup: ~0 rows (approximately)

-- Dumping structure for table webshop.product
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `detail` text NOT NULL,
  `price` text NOT NULL,
  `pattern` enum('normaltext','code','eml:psw','usr:psw','usr:eml:psw','eml:psw:prf:pin') NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Dumping data for table webshop.product: ~1 rows (approximately)
INSERT INTO `product` (`id`, `name`, `image`, `detail`, `price`, `pattern`, `date`) VALUES
	(1, 'Netflix', 'https://media.discordapp.net/attachments/886157354238873670/975330532860764180/Netflix1.png', 'ไอดี Netflix 4K ดูได้ 1 คน', '100', 'eml:psw:prf:pin', '2022-05-15 16:35:51');

-- Dumping structure for table webshop.stock
CREATE TABLE IF NOT EXISTS `stock` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `type` int(255) NOT NULL,
  `contents` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table webshop.stock: ~4 rows (approximately)
INSERT INTO `stock` (`id`, `type`, `contents`, `owner`, `date`) VALUES
	(2, 1, 'id : bbbbbbbb1@gmail.com\npass : bbbbbbbb1', '', NULL),
	(4, 1, 'id : bbbbbbbb2@gmail.com\npass : bbbbbbbb2', 'NEK5008', '2022-05-15 20:58:20'),
	(5, 1, 'id : bbbbbbbb3@gmail.com\npass : bbbbbbbb3', 'beck', '2022-05-15 18:45:51'),
	(6, 3, 'id : bbsdvbj@gmail.com,\npass : 11111112vv', 'Beck', '2022-05-15 21:05:11');

-- Dumping structure for table webshop.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `profire` set('clone1018','LukeHandle','connor4312','lukegb','citricsquid','KamaIN','Notch','Banxsi','externo6','drupal','ez','clone','Steve','pig') NOT NULL DEFAULT 'clone1018',
  `status` set('admin','gnr') NOT NULL DEFAULT 'gnr',
  `point` double(11,2) NOT NULL DEFAULT 0.00,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table webshop.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `username`, `email`, `password`, `profire`, `status`, `point`, `date`) VALUES
	(3, 'Beck111', 'beckbeck@gmail.com', '$2y$10$rW26Fb6F0exL6hYI.hP8lOYrrHjAD/.m9ozSkqgQnNmOUkmYD.qMy', 'KamaIN', 'admin', 89840.00, '2022-05-15 18:34:00'),
	(5, 'NEK5008', 'ASDSA5448@gmail.com', '$2y$10$ucLE6GikwIlBtXgNmCTGFuq2KWUDWeciEj8wDEyYbHpUmzJ3GqtLe', 'clone', 'gnr', 500.00, '2022-05-15 20:54:28');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
