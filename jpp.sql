/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.1.13-MariaDB : Database - jpp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`jpp` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `jpp`;

/*Table structure for table `account` */

DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `acc_id` int(11) NOT NULL,
  `acc_type` int(11) NOT NULL,
  `club_ref` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `account` */

/*Table structure for table `account_info` */

DROP TABLE IF EXISTS `account_info`;

CREATE TABLE `account_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `club_ref` int(11) NOT NULL,
  `saving_type` int(11) DEFAULT NULL COMMENT '1= Current, 2= Saving',
  `bank_name` varchar(255) NOT NULL,
  `bank_district` varchar(20) DEFAULT NULL,
  `bank_state` varchar(20) DEFAULT NULL,
  `last_amount` varchar(255) NOT NULL,
  `last_amount_dt` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `account_info` */

/*Table structure for table `applicant` */

DROP TABLE IF EXISTS `applicant`;

CREATE TABLE `applicant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_no` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `club_name` varchar(255) NOT NULL,
  `add_reg_1` varchar(255) NOT NULL,
  `add_reg_2` varchar(255) NOT NULL,
  `postcode_reg` varchar(5) NOT NULL,
  `district_reg` varchar(20) DEFAULT NULL,
  `state_reg` varchar(20) DEFAULT NULL,
  `add_letter_1` varchar(255) DEFAULT NULL,
  `add_letter_2` varchar(255) DEFAULT NULL,
  `postcode_letter` varchar(5) DEFAULT NULL,
  `district_letter` varchar(20) DEFAULT NULL,
  `state_letter` varchar(20) DEFAULT NULL,
  `leader_name` varchar(255) NOT NULL,
  `secretary_name` varchar(255) NOT NULL,
  `treasury_name` varchar(255) NOT NULL,
  `club_type` int(11) DEFAULT NULL,
  `docs_completed` varchar(255) NOT NULL,
  `total_member` varchar(255) NOT NULL,
  `entrance_fee` varchar(255) NOT NULL,
  `member_fee` varchar(255) NOT NULL,
  `founded_dt` varchar(20) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `applicant` */

/*Table structure for table `audit_trail` */

DROP TABLE IF EXISTS `audit_trail`;

CREATE TABLE `audit_trail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `action_dt` datetime DEFAULT NULL,
  `action_type` varchar(255) NOT NULL,
  `data_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `audit_trail` */

/*Table structure for table `club_meeting` */

DROP TABLE IF EXISTS `club_meeting`;

CREATE TABLE `club_meeting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `meeting_id` int(11) NOT NULL,
  `club_ref` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `club_meeting` */

/*Table structure for table `club_meeting_info` */

DROP TABLE IF EXISTS `club_meeting_info`;

CREATE TABLE `club_meeting_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `club_ref` int(11) NOT NULL,
  `meeting_type` varchar(255) DEFAULT NULL,
  `notice_dt` varchar(255) DEFAULT NULL,
  `event_dt` varchar(255) DEFAULT NULL,
  `total_member` int(11) NOT NULL,
  `notice_days` varchar(255) DEFAULT NULL,
  `corum` varchar(255) DEFAULT NULL,
  `agenda` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `club_meeting_info` */

/*Table structure for table `club_property` */

DROP TABLE IF EXISTS `club_property`;

CREATE TABLE `club_property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `club_ref` int(11) DEFAULT NULL,
  `property_name` varchar(255) NOT NULL,
  `holder_id` int(11) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `club_property` */

/*Table structure for table `club_property_holder` */

DROP TABLE IF EXISTS `club_property_holder`;

CREATE TABLE `club_property_holder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `holder_name` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `club_property_holder` */

/*Table structure for table `coh_club_info` */

DROP TABLE IF EXISTS `coh_club_info`;

CREATE TABLE `coh_club_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `club_ref` int(11) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `coh_club_info` */

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title_my` varchar(255) NOT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `type` varchar(10) NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `display_status` int(11) NOT NULL DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `menu` */

/*Table structure for table `menu_access` */

DROP TABLE IF EXISTS `menu_access`;

CREATE TABLE `menu_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `role_i` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `menu_access` */

/*Table structure for table `notes_visiting` */

DROP TABLE IF EXISTS `notes_visiting`;

CREATE TABLE `notes_visiting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visiting_id` int(11) NOT NULL,
  `club_ref` int(11) NOT NULL,
  `action_type` varchar(255) NOT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `notes_visiting` */

/*Table structure for table `profile` */

DROP TABLE IF EXISTS `profile`;

CREATE TABLE `profile` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `div_id` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `site_lang` varchar(5) DEFAULT NULL,
  `register_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `profile` */

insert  into `profile`(`id`,`user_id`,`fullname`,`div_id`,`email`,`phone`,`site_lang`,`register_date`,`update_date`) values (1,1,'Programmer',NULL,NULL,NULL,'en','2016-04-06 00:00:00','2016-04-06 00:00:00');

/*Table structure for table `ref_cat` */

DROP TABLE IF EXISTS `ref_cat`;

CREATE TABLE `ref_cat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cat` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ref_cat` */

/*Table structure for table `ref_list` */

DROP TABLE IF EXISTS `ref_list`;

CREATE TABLE `ref_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(10) NOT NULL,
  `label_my` varchar(255) NOT NULL,
  `label_en` varchar(255) DEFAULT NULL,
  `cat` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `nilai` varchar(255) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `ref_list` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `definition` text,
  `groupname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`definition`,`groupname`) values (1,'root','Super Admin','superadmin');

/*Table structure for table `roles_assigned` */

DROP TABLE IF EXISTS `roles_assigned`;

CREATE TABLE `roles_assigned` (
  `user_id` int(11) unsigned NOT NULL DEFAULT '0',
  `role_id` int(11) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `roles_assigned` */

insert  into `roles_assigned`(`user_id`,`role_id`) values (1,1);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` int(10) unsigned NOT NULL,
  `last_login_attempts` int(10) unsigned NOT NULL,
  `login_attempts` int(10) unsigned NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `password_reset_token` (`password_reset_token`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`auth_key`,`password_hash`,`password_reset_token`,`email`,`last_login`,`last_login_attempts`,`login_attempts`,`status`,`is_admin`,`created_at`,`updated_at`) values (1,'programmer','355ee5a31d9535a18ec48a730791650f','$2y$10$TGeMkvqyM8Wx4ajOrrCyheiOj168usIuuTzVCDoprwfSj8xrb6miq','','zatilimaniahwan@gmail.com',1478654551,0,0,10,1,1458714670,1478654551);

/*Table structure for table `visiting` */

DROP TABLE IF EXISTS `visiting`;

CREATE TABLE `visiting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `club_ref` int(11) NOT NULL,
  `visiting_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `visiting` */

/*Table structure for table `visiting_info` */

DROP TABLE IF EXISTS `visiting_info`;

CREATE TABLE `visiting_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `club_ref` int(11) NOT NULL,
  `pdk1_name` varchar(255) NOT NULL,
  `pdk2_name` varchar(255) NOT NULL,
  `visit_dt` varchar(255) DEFAULT NULL,
  `type_visit` int(11) DEFAULT NULL,
  `reason_visit` int(11) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `created_dt` datetime DEFAULT NULL,
  `updated_by` varchar(255) DEFAULT NULL,
  `updated_dt` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `visiting_info` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
