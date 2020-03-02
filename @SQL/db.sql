/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.38-MariaDB : Database - zim
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `company` */

CREATE TABLE `company` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_name` varchar(200) DEFAULT NULL,
  `org_phone` varchar(200) DEFAULT NULL,
  `org_email` varchar(50) DEFAULT NULL,
  `date_time` int(20) DEFAULT NULL,
  `hash` varchar(64) DEFAULT NULL,
  `org_address` varchar(100) DEFAULT NULL,
  `org_description` varchar(200) DEFAULT NULL,
  `active` varchar(5) DEFAULT 'true',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `company` */

insert  into `company`(`id`,`org_name`,`org_phone`,`org_email`,`date_time`,`hash`,`org_address`,`org_description`,`active`) values (1,'',NULL,NULL,1571409844,'74a38e02666b8491df7ff719386a7d3d',NULL,NULL,'true'),(2,'Azam Education','03323137489','ghulamabbass.1995@gmail.com',1571411809,'d7539f0ab4685a0caa367b930037b4df','House N-31/32, Block 15, Gulistan-e-Johar, Karachi','dfsdf sdf sdf sdf sdf sdfsd fsdf sdfsdfsd ','true');

/*Table structure for table `hotels` */

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `org_id` int(11) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `small_desc` varchar(100) DEFAULT NULL,
  `long_desc` longtext,
  `rating` varchar(10) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `active` varchar(5) DEFAULT 'true',
  `created_at` int(20) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `hotels` */

insert  into `hotels`(`id`,`org_id`,`name`,`picture`,`small_desc`,`long_desc`,`rating`,`price`,`active`,`created_at`,`created_by`) values (1,2,'705 Hotel','zinger.png','Luxury Hotel','Blah Blah blah','5',150,'false',1571327846,10),(2,2,'Hotel 365','zinger.png','Tag Line','Some description','2.3',250,'true',1571327882,10);

/*Table structure for table `login` */

CREATE TABLE `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) DEFAULT NULL,
  `org_id` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `email_verified` varchar(5) DEFAULT 'false',
  `phone` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `date_time` varchar(100) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `active` varchar(5) DEFAULT 'false',
  `hash` varchar(64) DEFAULT NULL,
  `last_login` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `login` */

insert  into `login`(`id`,`user_name`,`org_id`,`email`,`email_verified`,`phone`,`password`,`date_time`,`type`,`active`,`hash`,`last_login`) values (1,'Administrator',0,'admin@gmail.com','false','92','f136957a54e3098abe6db930ea678186','1571310953','super','true','32c40ae29f7c4c85b54565e16609690e','1571414319'),(12,'Ghulam Abbass',1,'ghulamabbass.1995@gmail.com','false',NULL,'f136957a54e3098abe6db930ea678186','1571409844','admin','true','ea39d1d45fb95b9e66dd54b979671c3b','1571409855'),(13,'Azam',2,'azam@gmail.com','false','','f136957a54e3098abe6db930ea678186','1571411809','admin','true','2f634d2a12450d148e930c16349932f6','1571411882'),(14,'user 1',2,'userr1@gmail.com','false','','f136957a54e3098abe6db930ea678186','1571411992','user','true','71b8928cb8d3123cb169be58d1b55e60',NULL),(15,'userr',2,'userr2@gmail.com','false',NULL,'f136957a54e3098abe6db930ea678186','1571412005','admin','false','2ec7f417507b46bfef517b3d13da1335',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
