/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.1.36-community : Database - testing
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`testing` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `testing`;

/*Table structure for table `employe_csv_file_data` */

DROP TABLE IF EXISTS `employe_csv_file_data`;

CREATE TABLE `employe_csv_file_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `employe_name` varchar(255) DEFAULT NULL,
  `employe_code` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `joindate` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `employe_csv_file_data` */

insert  into `employe_csv_file_data`(`id`,`employe_name`,`employe_code`,`department`,`dob`,`joindate`) values 
(1,'Saritha','123','softaware','21-1-1995','1/2/2020'),
(2,'vinu','167','software','19-2-1997','1/2/2020'),
(3,'majo','122','hardware','11/1/1995','1/2/2010');

/*Table structure for table `employee_info` */

DROP TABLE IF EXISTS `employee_info`;

CREATE TABLE `employee_info` (
  `empid` int(11) NOT NULL AUTO_INCREMENT,
  `empcode` varchar(20) DEFAULT NULL,
  `empname` varchar(50) DEFAULT NULL,
  `department` varbinary(50) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `experience` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `employee_info` */

insert  into `employee_info`(`empid`,`empcode`,`empname`,`department`,`age`,`experience`) values 
(1,'100','sty','it',12,'4'),
(2,'100','sty','it',12,'4'),
(3,'100','sty','it',12,'4'),
(4,'100','sty','it',12,'4'),
(5,'100','sd','ad',12,'asd'),
(6,'d','sty','sad',2,'2');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
