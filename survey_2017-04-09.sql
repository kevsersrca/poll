# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.19-MariaDB)
# Database: survey
# Generation Time: 2017-04-09 12:32:10 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table answer
# ------------------------------------------------------------

DROP TABLE IF EXISTS `answer`;

CREATE TABLE `answer` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table option
# ------------------------------------------------------------

DROP TABLE IF EXISTS `option`;

CREATE TABLE `option` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `question_id` int(11) DEFAULT NULL,
  `option` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `option` WRITE;
/*!40000 ALTER TABLE `option` DISABLE KEYS */;

INSERT INTO `option` (`id`, `question_id`, `option`)
VALUES
	(1,2,'tamam'),
	(2,3,''),
	(3,3,''),
	(4,3,''),
	(5,4,'yes'),
	(6,4,'no'),
	(7,5,'cevap 1 '),
	(8,5,'2 '),
	(9,5,'3'),
	(10,5,'4'),
	(11,5,'5'),
	(12,5,'6'),
	(13,6,'123'),
	(14,6,'123'),
	(15,7,'as'),
	(16,7,'as2'),
	(17,9,'evet'),
	(18,9,'hay?r'),
	(19,NULL,'evet'),
	(20,NULL,'hay?r'),
	(21,NULL,'evet'),
	(22,NULL,'hay?r'),
	(23,12,'1'),
	(24,12,'2'),
	(25,13,'as'),
	(26,13,'as');

/*!40000 ALTER TABLE `option` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table question
# ------------------------------------------------------------

DROP TABLE IF EXISTS `question`;

CREATE TABLE `question` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `servey_id` int(11) DEFAULT NULL,
  `question` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `question` WRITE;
/*!40000 ALTER TABLE `question` DISABLE KEYS */;

INSERT INTO `question` (`id`, `servey_id`, `question`, `type`)
VALUES
	(2,2,'ok',1),
	(4,2,'marry me?',1),
	(5,5,'soru falan',1),
	(6,4,'Selam',1),
	(7,5,'sa',2),
	(8,26,'asfdg',3),
	(9,5,'Evlimisin?',1),
	(10,4,'antivirus kullan?yor musunz?',2),
	(11,4,'antivirus kullan?yor musunz?',2),
	(12,26,'sec',1),
	(13,5,'asd',2);

/*!40000 ALTER TABLE `question` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table servey
# ------------------------------------------------------------

DROP TABLE IF EXISTS `servey`;

CREATE TABLE `servey` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `servey` WRITE;
/*!40000 ALTER TABLE `servey` DISABLE KEYS */;

INSERT INTO `servey` (`id`, `name`)
VALUES
	(4,'Anket3'),
	(5,'Anket 4'),
	(26,'Anket 6'),
	(27,'Anketttttt'),
	(28,'ankettoo');

/*!40000 ALTER TABLE `servey` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
