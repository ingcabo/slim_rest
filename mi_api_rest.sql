/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.36 : Database - mi_api_rest
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mi_api_rest` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `mi_api_rest`;

/*Table structure for table `conf` */

DROP TABLE IF EXISTS `conf`;

CREATE TABLE `conf` (
  `token` varchar(150) NOT NULL,
  `app_id` varchar(150) NOT NULL,
  `app_secret` varchar(150) NOT NULL,
  `default_graph_version` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `conf` */

insert  into `conf`(`token`,`app_id`,`app_secret`,`default_graph_version`) values ('1882367731982253|doeaHgQkhBTNIeXFhHtnijxXYsA','1882367731982253','d0dbfb3031ba35ed4cd265890fbcfe5c','v2.8');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
