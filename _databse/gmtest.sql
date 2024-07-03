/*
Navicat MySQL Data Transfer

Source Server         : uuWee3
Source Server Version : 50505
Source Host           : 127.0.0.1:3306
Source Database       : gmtest

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2024-07-03 17:07:17
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer` (
  `Customer_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Birthday` date DEFAULT NULL,
  `Percent_1` decimal(10,2) DEFAULT 0.00,
  `Percent_2` decimal(10,2) DEFAULT 0.00,
  PRIMARY KEY (`Customer_Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES ('1', '1905-05-01', '30.00', '25.00');
INSERT INTO `customer` VALUES ('2', '1909-11-20', '50.00', '10.00');
INSERT INTO `customer` VALUES ('3', '1915-01-20', '20.00', '5.00');
