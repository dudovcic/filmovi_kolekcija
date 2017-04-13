-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for kolekcija
CREATE DATABASE IF NOT EXISTS `kolekcija` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_croatian_ci */;
USE `kolekcija`;

-- Dumping structure for table kolekcija.filmovi
CREATE TABLE IF NOT EXISTS `filmovi` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `naslov` varchar(200) COLLATE utf8_croatian_ci NOT NULL,
  `id_zanr` int(10) NOT NULL,
  `godina` year(4) NOT NULL,
  `trajanje` int(5) NOT NULL,
  `slika` varchar(50) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- Dumping data for table kolekcija.filmovi: ~11 rows (approximately)
/*!40000 ALTER TABLE `filmovi` DISABLE KEYS */;
INSERT INTO `filmovi` (`id`, `naslov`, `id_zanr`, `godina`, `trajanje`, `slika`) VALUES
	(1, 'Firewall', 1, '2006', 105, 'img/firewall_2006.jpg'),
	(2, 'Antitrust', 2, '2001', 103, 'img/antitrust_2001.jpg'),
	(3, 'Hackers', 1, '1995', 99, 'img/hackers_1995.jpg'),
	(4, 'War games', 4, '1983', 96, 'img/war_games_1983.jpg'),
	(5, 'Operation sword', 5, '2001', 90, 'img/operation_swordfish_2001.jpg'),
	(6, 'Tron Legacy', 3, '2010', 113, 'img/tron_legacy_2010.jpg'),
	(7, 'Operation Taledo', 1, '2000', 101, 'img/operation_takedown_2000.jpg'),
	(8, 'Pirates of Silicon Valey', 2, '1999', 85, 'img/pirates_of_silicone_valley_1999.jpg'),
	(9, 'The social network', 3, '2010', 106, 'img/the_social_network_2010.jpg'),
	(10, 'Tron', 1, '1982', 111, 'img/tron_1982.jpg');
/*!40000 ALTER TABLE `filmovi` ENABLE KEYS */;

-- Dumping structure for table kolekcija.zanr
CREATE TABLE IF NOT EXISTS `zanr` (
  `id` int(5) NOT NULL,
  `naziv` varchar(55) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- Dumping data for table kolekcija.zanr: ~3 rows (approximately)
/*!40000 ALTER TABLE `zanr` DISABLE KEYS */;
INSERT INTO `zanr` (`id`, `naziv`) VALUES
	(1, 'Akcija'),
	(2, 'Fantazija'),
	(3, 'Drama');
/*!40000 ALTER TABLE `zanr` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
