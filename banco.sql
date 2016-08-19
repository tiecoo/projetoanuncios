/*
SQLyog Ultimate v9.51 
MySQL - 5.5.42-37.1-log : Database - anuncios
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`anuncios` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `anuncios`;

/*Table structure for table `anuncios` */

DROP TABLE IF EXISTS `anuncios`;

CREATE TABLE `anuncios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `idProd` decimal(11,0) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `enviado` tinyint(1) NOT NULL,
  `criador` varchar(60) DEFAULT NULL,
  `dataCriacao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Considerar datas acima de 11/08/2016',
  PRIMARY KEY (`id`),
  KEY `idx-data` (`data`)
) ENGINE=InnoDB AUTO_INCREMENT=2234 DEFAULT CHARSET=latin1;

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
