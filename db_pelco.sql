# SQL Manager 2010 Lite for MySQL 4.6.0.5
# ---------------------------------------
# Host     : localhost
# Port     : 3306
# Database : db_pelco


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES latin1 */;

SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE `db_pelco`
    CHARACTER SET 'latin1'
    COLLATE 'latin1_swedish_ci';

USE `db_pelco`;

#
# Structure for the `bill_account_info` table : 
#

CREATE TABLE `bill_account_info` (
  `bill_account_id` int(11) NOT NULL AUTO_INCREMENT,
  `reference_no` varchar(50) DEFAULT NULL,
  `consumer_id` int(11) DEFAULT NULL,
  `narration` varchar(100) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL COMMENT 'user who created the transaction',
  `total_back_bill_amount` decimal(15,2) DEFAULT '0.00',
  `date_created` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime DEFAULT NULL,
  `is_active` bit(1) DEFAULT b'1',
  PRIMARY KEY (`bill_account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Structure for the `bill_payment_schedule` table : 
#

CREATE TABLE `bill_payment_schedule` (
  `bill_item_account_id` varchar(20) DEFAULT NULL COMMENT 'CONCAT bill account id and position id',
  `bill_account_id` int(11) DEFAULT NULL,
  `item_id` varchar(5) DEFAULT NULL,
  `sched_payment_date` date DEFAULT NULL,
  `bill_description` varchar(155) DEFAULT NULL,
  `due_amount` decimal(11,2) DEFAULT '0.00',
  `is_paid` bit(1) DEFAULT b'0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Structure for the `bill_unit_list` table : 
#

CREATE TABLE `bill_unit_list` (
  `bill_unit_list_id` int(11) NOT NULL AUTO_INCREMENT,
  `bill_account_id` int(11) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `unit_qty` int(11) DEFAULT NULL,
  `total_unit_consumption` decimal(11,2) DEFAULT '0.00',
  PRIMARY KEY (`bill_unit_list_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Structure for the `customer_info` table : 
#

CREATE TABLE `customer_info` (
  `consumer_id` int(11) NOT NULL AUTO_INCREMENT,
  `consumer_name` varchar(100) DEFAULT NULL,
  `house_no` varchar(20) DEFAULT NULL,
  `street_no` varchar(30) DEFAULT NULL,
  `barangay` varchar(100) NOT NULL,
  `municipality` varchar(100) DEFAULT NULL,
  `zip_code` varchar(10) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `contact_no` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `second_address` varchar(155) DEFAULT NULL,
  `meter_no` varchar(55) DEFAULT NULL,
  `is_deleted` bit(1) DEFAULT b'0',
  `date_created` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime DEFAULT NULL,
  PRIMARY KEY (`consumer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Structure for the `payment_info` table : 
#

CREATE TABLE `payment_info` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `receipt_no` varchar(30) DEFAULT NULL,
  `bill_account_id` int(11) DEFAULT NULL,
  `consumer_id` int(11) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_amount` decimal(15,2) DEFAULT '0.00',
  `date_created` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `is_active` bit(1) DEFAULT b'1',
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Structure for the `payment_item_list` table : 
#

CREATE TABLE `payment_item_list` (
  `payment_list_id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_id` int(11) DEFAULT NULL,
  `item_id` varchar(5) DEFAULT NULL,
  `payment_amount` decimal(11,2) DEFAULT NULL,
  PRIMARY KEY (`payment_list_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Structure for the `unit_info` table : 
#

CREATE TABLE `unit_info` (
  `unit_id` int(11) NOT NULL AUTO_INCREMENT,
  `unit_description` varchar(100) DEFAULT NULL,
  `brand_name` varchar(100) DEFAULT NULL,
  `model_name` varchar(75) DEFAULT NULL,
  `estimated_kwh` int(11) DEFAULT NULL,
  `amount_consumption` decimal(11,2) DEFAULT '0.00',
  `date_created` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `date_modified` datetime DEFAULT NULL,
  `is_deleted` bit(1) DEFAULT b'0',
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for the `bill_payment_schedule` table  (LIMIT 0,500)
#

INSERT INTO `bill_payment_schedule` (`bill_item_account_id`, `bill_account_id`, `item_id`, `sched_payment_date`, `bill_description`, `due_amount`, `is_paid`) VALUES 
  ('10',1,'0','2015-11-01','Back Bill for January 2014',2500.00,0);
COMMIT;

#
# Data for the `payment_info` table  (LIMIT 0,500)
#

INSERT INTO `payment_info` (`payment_id`, `receipt_no`, `bill_account_id`, `consumer_id`, `payment_date`, `payment_amount`, `date_created`, `is_active`) VALUES 
  (1,'100001',1,1,'2015-11-20',0.00,'0000-00-00 00:00:00',0);
COMMIT;

#
# Data for the `payment_item_list` table  (LIMIT 0,500)
#

INSERT INTO `payment_item_list` (`payment_list_id`, `payment_id`, `item_id`, `payment_amount`) VALUES 
  (1,1,'0',2000.00);
COMMIT;



/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;