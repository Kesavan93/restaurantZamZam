-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.1.72-community - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for restoran
CREATE DATABASE IF NOT EXISTS `restoran` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `restoran`;

-- Dumping structure for table restoran.addon
CREATE TABLE IF NOT EXISTS `addon` (
  `addon_id` int(3) NOT NULL AUTO_INCREMENT,
  `addon_name` varchar(100) NOT NULL,
  `addon_price` varchar(100) NOT NULL,
  PRIMARY KEY (`addon_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table restoran.addon: 0 rows
/*!40000 ALTER TABLE `addon` DISABLE KEYS */;
/*!40000 ALTER TABLE `addon` ENABLE KEYS */;

-- Dumping structure for table restoran.calc
CREATE TABLE IF NOT EXISTS `calc` (
  `calc_id` int(8) NOT NULL AUTO_INCREMENT,
  `calc_cat_id` varchar(50) NOT NULL,
  `calc_name` varchar(100) NOT NULL,
  `calc_price` varchar(100) NOT NULL,
  `calc_qty` varchar(100) NOT NULL,
  `calc_total` varchar(100) NOT NULL,
  PRIMARY KEY (`calc_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table restoran.calc: 0 rows
/*!40000 ALTER TABLE `calc` DISABLE KEYS */;
/*!40000 ALTER TABLE `calc` ENABLE KEYS */;

-- Dumping structure for table restoran.category
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(4) NOT NULL AUTO_INCREMENT,
  `cat_menu_id` varchar(50) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_price` varchar(100) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=115 DEFAULT CHARSET=latin1;

-- Dumping data for table restoran.category: 114 rows
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`cat_id`, `cat_menu_id`, `cat_name`, `cat_price`) VALUES
	(1, '1', 'Nasi Goreng Biasa', '7.00'),
	(2, '1', 'Nasi Goreng Ikan Masin', '7.50'),
	(3, '1', 'Nasi Goreng Cina', '7.50'),
	(4, '1', 'Nasi Goreng Cendawan', '7.50'),
	(5, '1', 'Nasi Goreng Kampung', '7.50'),
	(6, '1', 'Nasi Goreng Kerabu', '7.50'),
	(7, '1', 'Nasi Goreng Sotong', '9.50'),
	(8, '1', 'Nasi Goreng Udang', '9.50'),
	(9, '1', 'Nasi Goreng Pataya', '8.00'),
	(10, '1', 'Nasi Goreng Hailam', '8.50'),
	(11, '1', 'Nasi Goreng Ayam', '9.50'),
	(12, '1', 'Nasi Goreng Paprik', '9.50'),
	(13, '1', 'Nasi Goreng U.S.A', '10.50'),
	(14, '1', 'Nasi Goreng Tomyam', '8.50'),
	(15, '1', 'Nasi Goreng Daging', '9.00'),
	(16, '1', 'Nasi Goreng Seafood', '9.50'),
	(17, '1', 'Nasi Goreng Nenas', '7.50'),
	(18, '2', 'Tomyam Sayur', '8.50'),
	(19, '2', 'Tomyam Daging', '8.00'),
	(20, '2', 'Tomyam Ayam', '8.00'),
	(21, '2', 'Tomyam Campur', '9.00'),
	(22, '2', 'Tomyam Sotong', '9.00'),
	(23, '2', 'Tomyam Udang', '9.00'),
	(24, '2', 'Tomyam Seafood', '9.00'),
	(25, '3', 'Sup Ayam', '7.50'),
	(26, '3', 'Sup Daging', '7.50'),
	(27, '3', 'Sup Campur', '8.50'),
	(28, '3', 'Sup Sayur', '7.50'),
	(29, '3', 'Sup Cendawan', '7.50'),
	(30, '3', 'Sup Tulang', '10.50'),
	(31, '4', 'Telur Mata', '2.00'),
	(32, '4', 'Telur Dadar', '2.80'),
	(33, '4', 'Telur Bistik', '7.50'),
	(34, '5', 'Sayur Kailan Biasa', '7.00'),
	(35, '5', 'Sayur Kailan Ikan Masin', '7.00'),
	(36, '5', 'Sayur Campur', '7.00'),
	(37, '5', 'Sayur Kacang Panjang', '7.00'),
	(38, '6', 'Udang Paprik', '9.00'),
	(39, '6', 'Udang Merah', '9.00'),
	(40, '6', 'Udang Pedas', '9.00'),
	(41, '6', 'Udang Halia', '9.00'),
	(42, '6', 'Udang Goreng', '9.00'),
	(43, '6', 'Udang Petai', '9.00'),
	(44, '6', 'Udang Kerabu', '9.00'),
	(45, '6', 'Udang Kunyit', '9.00'),
	(46, '6', 'Udang Masam Manis', '9.00'),
	(47, '7', 'Sotong Paprik', '9.00'),
	(48, '7', 'Sotong Merah', '9.00'),
	(49, '7', 'Sotong Pedas', '9.00'),
	(50, '7', 'Sotong Halia', '9.00'),
	(51, '7', 'Sotong Goreng', '9.00'),
	(52, '7', 'Sotong Petai', '9.00'),
	(53, '7', 'Sotong Kerabu', '9.00'),
	(54, '7', 'Sotong Kunyit', '9.00'),
	(55, '7', 'Sotong Masam Manis', '9.00'),
	(56, '8', 'Mee Goreng', '7.00'),
	(57, '8', 'Mee Sup', '8.50'),
	(58, '8', 'Mee Hailam', '8.50'),
	(59, '8', 'Mee Tomyam', '9.00'),
	(60, '8', 'Mee Seafood', '9.50'),
	(61, '9', 'Bihun Goreng', '7.00'),
	(62, '9', 'Bihun Tomyam', '8.50'),
	(63, '9', 'Bihun Cantonese', '8.50'),
	(64, '10', 'Kuew Teow Goreng', '8.00'),
	(65, '10', 'Kuew Teow Kung Foo', '8.50'),
	(66, '11', 'Ayam Paprik', '7.50'),
	(67, '11', 'Ayam Paprik Campur', '8.50'),
	(68, '11', 'Ayam Merah', '7.50'),
	(69, '11', 'Ayam Goreng', '7.50'),
	(70, '11', 'Ayam Kunyit', '7.50'),
	(71, '11', 'Ayam Masam Manis', '7.50'),
	(72, '12', 'Daging Paprik', '7.50'),
	(73, '12', 'Daging Paprik Campur', '8.50'),
	(74, '12', 'Daging Merah', '7.50'),
	(75, '12', 'Daging Goreng', '7.50'),
	(76, '12', 'Daging Kunyit', '7.50'),
	(77, '12', 'Daging Masam Manis', '7.50'),
	(78, '13', 'Chicken Chop', '15.90'),
	(79, '13', 'Lamp Chop', '17.90'),
	(80, '13', 'Fish n Chips', '14.90'),
	(81, '13', 'Beef Steak', '18.90'),
	(82, '13', 'Cheesy Wedges', '8.90'),
	(83, '13', 'French Fries', '6.90'),
	(84, '13', 'Burger Ayam', '5.50'),
	(85, '13', 'Burger Ayam Double', '6.50'),
	(86, '13', 'Burger Ayam Cheese', '6.50'),
	(87, '13', 'Burger Ayam Telur', '6.50'),
	(88, '13', 'Burger Daging', '5.50'),
	(89, '13', 'Burger Daging Double', '6.50'),
	(90, '13', 'Burger Daging Cheese', '6.50'),
	(91, '13', 'Burger Daging Telur', '6.50'),
	(92, '14', 'Roti Biasa', '2.00'),
	(93, '14', 'Roti Telur', '2.80'),
	(94, '14', 'Roti Pisang', '2.80'),
	(95, '14', 'Roti Tisu', '3.00'),
	(96, '14', 'Roti Naan', '4.50'),
	(97, '14', 'Roti Naan Garlic', '5.50'),
	(98, '14', 'Roti Naan Butter', '5.50'),
	(99, '14', 'Roti Naan Cheese', '6.00'),
	(100, '14', 'Roti Naan Cheese Double', '7.50'),
	(101, '14', 'Roti Naan Cheese Butter', '7.00'),
	(102, '14', 'Roti Naan Garlic Butter', '6.50'),
	(103, '14', 'Capati', '2.00'),
	(104, '14', 'Capati Ghee', '3.80'),
	(105, '15', 'Thosai Biasa', '2.50'),
	(106, '15', 'Thosai Telur', '3.00'),
	(107, '15', 'Thosai Telur Bawang', '3.50'),
	(108, '15', 'Thosai Rawa', '3.50'),
	(109, '15', 'Thosai Masala', '4.00'),
	(110, '15', 'Thosai Ghee', '3.50'),
	(111, '16', 'Nasi Lemak Biasa', '4.00'),
	(112, '16', 'Nasi Lemak Ayam', '8.50'),
	(113, '16', 'Nasi Lemak Daging', '8.50'),
	(114, '16', 'Nasi Lemak Sotong', '8.00');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Dumping structure for table restoran.menu
CREATE TABLE IF NOT EXISTS `menu` (
  `menu_id` int(3) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`menu_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumping data for table restoran.menu: 16 rows
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` (`menu_id`, `menu_name`) VALUES
	(1, 'Nasi Goreng'),
	(2, 'Tom Yam'),
	(3, 'Sup'),
	(4, 'Telur'),
	(5, 'Sayur'),
	(6, 'Udang'),
	(7, 'Sotong'),
	(8, 'Mee'),
	(9, 'Bihun'),
	(10, 'Kuew Teow'),
	(11, 'Ayam'),
	(12, 'Daging'),
	(13, 'Western'),
	(14, 'Roti'),
	(15, 'Thosai'),
	(16, 'Nasi Lemak');
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;

-- Dumping structure for table restoran.modifier
CREATE TABLE IF NOT EXISTS `modifier` (
  `modi_id` int(3) NOT NULL AUTO_INCREMENT,
  `modi_name` varchar(50) NOT NULL,
  `modi_price` varchar(50) NOT NULL,
  PRIMARY KEY (`modi_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table restoran.modifier: 0 rows
/*!40000 ALTER TABLE `modifier` DISABLE KEYS */;
/*!40000 ALTER TABLE `modifier` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
