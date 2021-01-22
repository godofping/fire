/*
SQLyog Ultimate v8.53 
MySQL - 5.5.5-10.1.37-MariaDB : Database - fire_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fire_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `fire_db`;

/*Table structure for table `departments` */

DROP TABLE IF EXISTS `departments`;

CREATE TABLE `departments` (
  `departmentid` int(6) NOT NULL AUTO_INCREMENT,
  `department` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`departmentid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `departments` */

insert  into `departments`(`departmentid`,`department`) values (1,'Outpatient Department'),(2,'IT Department');

/*Table structure for table `employees` */

DROP TABLE IF EXISTS `employees`;

CREATE TABLE `employees` (
  `employeeid` int(6) NOT NULL AUTO_INCREMENT,
  `positionid` int(6) DEFAULT NULL,
  `departmentid` int(6) DEFAULT NULL,
  `fullname` varchar(60) DEFAULT NULL,
  `contactnumber` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`employeeid`),
  KEY `FK_employees` (`positionid`),
  KEY `FK_employees1` (`departmentid`),
  CONSTRAINT `FK_employees` FOREIGN KEY (`positionid`) REFERENCES `positions` (`positionid`),
  CONSTRAINT `FK_employees1` FOREIGN KEY (`departmentid`) REFERENCES `departments` (`departmentid`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `employees` */

insert  into `employees`(`employeeid`,`positionid`,`departmentid`,`fullname`,`contactnumber`) values (6,4,1,'Rey Yes','09754363454'),(7,6,2,'Albert Yale','09754362522'),(8,5,2,'te1','s1'),(9,5,2,'test','test');

/*Table structure for table `floors` */

DROP TABLE IF EXISTS `floors`;

CREATE TABLE `floors` (
  `floorid` int(6) NOT NULL AUTO_INCREMENT,
  `floor` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`floorid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `floors` */

insert  into `floors`(`floorid`,`floor`) values (1,'First Floor'),(2,'Second Floor');

/*Table structure for table `monitorings` */

DROP TABLE IF EXISTS `monitorings`;

CREATE TABLE `monitorings` (
  `monitoringid` int(6) NOT NULL AUTO_INCREMENT,
  `roomid` int(6) DEFAULT NULL,
  `temperature` float DEFAULT NULL,
  `fire` float DEFAULT NULL,
  `gas` float DEFAULT NULL,
  `humidity` float DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`monitoringid`),
  KEY `FK_monitorings1` (`roomid`),
  CONSTRAINT `FK_monitorings1` FOREIGN KEY (`roomid`) REFERENCES `rooms` (`roomid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `monitorings` */

/*Table structure for table `positions` */

DROP TABLE IF EXISTS `positions`;

CREATE TABLE `positions` (
  `positionid` int(6) NOT NULL AUTO_INCREMENT,
  `position` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`positionid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `positions` */

insert  into `positions`(`positionid`,`position`) values (4,'Clerk'),(5,'Janitor'),(6,'Nurse');

/*Table structure for table `rooms` */

DROP TABLE IF EXISTS `rooms`;

CREATE TABLE `rooms` (
  `roomid` int(6) NOT NULL AUTO_INCREMENT,
  `floorid` int(6) DEFAULT NULL,
  `room` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`roomid`),
  KEY `FK_rooms` (`floorid`),
  CONSTRAINT `FK_rooms` FOREIGN KEY (`floorid`) REFERENCES `floors` (`floorid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `rooms` */

insert  into `rooms`(`roomid`,`floorid`,`room`) values (1,2,'test sf'),(2,1,'tae ff');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `userid` int(6) NOT NULL AUTO_INCREMENT,
  `employeeid` int(6) DEFAULT NULL,
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(60) DEFAULT NULL,
  `userlevel` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`userid`),
  KEY `FK_users` (`employeeid`),
  CONSTRAINT `FK_users` FOREIGN KEY (`employeeid`) REFERENCES `employees` (`employeeid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
