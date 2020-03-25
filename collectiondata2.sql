# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: collection
# Generation Time: 2020-03-23 14:51:07 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table characterinfo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `characterinfo`;

CREATE TABLE `characterinfo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `blood-type` varchar(255) DEFAULT NULL,
  `house` int(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `characterinfo` WRITE;
/*!40000 ALTER TABLE `characterinfo` DISABLE KEYS */;

INSERT INTO `characterinfo` (`id`, `name`, `blood-type`, `house`)
VALUES
	(1,'Harry Potter','Pure-Blood',1),
	(2,'Hermione Granger','Muggle-Born',1),
	(3,'Draco Malfoy','Pure-Blood',2);

/*!40000 ALTER TABLE `characterinfo` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table houses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `houses`;

CREATE TABLE `houses` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `house` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `houses` WRITE;
/*!40000 ALTER TABLE `houses` DISABLE KEYS */;

INSERT INTO `houses` (`id`, `house`)
VALUES
	(1,'Gryffindor'),
	(2,'Slytherin'),
	(3,'Hufflepuff'),
	(4,'Ravenclaw');

/*!40000 ALTER TABLE `houses` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
