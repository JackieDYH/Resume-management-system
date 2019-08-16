/*
Navicat MySQL Data Transfer

Source Server         : admin
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : phplyb

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-06-17 16:12:14
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', 'admin', 'admin');

-- ----------------------------
-- Table structure for resume
-- ----------------------------
DROP TABLE IF EXISTS `resume`;
CREATE TABLE `resume` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `nation` varchar(255) DEFAULT NULL,
  `birthplace` varchar(255) DEFAULT NULL,
  `political` varchar(255) DEFAULT NULL,
  `birthday` varchar(255) DEFAULT NULL,
  `englishlevel` varchar(255) DEFAULT NULL,
  `computerlevel` varchar(255) DEFAULT NULL,
  `idcard` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `diploma` varchar(255) DEFAULT NULL,
  `discipline` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of resume
-- ----------------------------
INSERT INTO `resume` VALUES ('14', '1111', '1', '1231', '11', '1', '1', '1', '1', '123', '1', '1', '1', 'photo/369154201070717.jpg', '1', '1', '1');
INSERT INTO `resume` VALUES ('16', '2', '2', '2', '22', '2', '2', '222', '2', '2', '2', '2', '2', 'photo/369154201070717.jpg', '2', '2', '2');
INSERT INTO `resume` VALUES ('17', '3', '3', '3', '333', '3', '3', '31', '3', '3', '3', '3', '3', 'photo/369154201070717.jpg', '3', '3', '3');
INSERT INTO `resume` VALUES ('18', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', '4', 'photo/369154201070717.jpg', '4', '4', '4');
INSERT INTO `resume` VALUES ('19', '111', '111', '111', '1111', '11', '1', '1', '1', '1', '1', '1', '1', 'photo/369154201070717.jpg', '1', '1', '1');
INSERT INTO `resume` VALUES ('20', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', 'photo/369154201070717.jpg', '6', '6', '6');
INSERT INTO `resume` VALUES ('21', '123', '1', '12311', '1', '1', '11', '123123', '1', '1', '1', '1', '1', 'photo/369154201070717.jpg', '1', '1', '1');
INSERT INTO `resume` VALUES ('22', '1', '1', '1', '111', '1', '1', '1', '1', '1', '1', '1', '1', 'photo/369154201070717.jpg', '11', '1', '1');
INSERT INTO `resume` VALUES ('23', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 'photo/369154201070717.jpg', '2', '2', '2');
INSERT INTO `resume` VALUES ('24', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'photo/369154201070717.jpg', '1', '1', '1');
INSERT INTO `resume` VALUES ('25', '1', '1', '1231', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'photo/369154201070717.jpg', '1', '1', '1');
INSERT INTO `resume` VALUES ('26', '77', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', 'photo/369154201070717.jpg', '7', '7', '7');
INSERT INTO `resume` VALUES ('27', '1', '1', '123', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'photo/369154201070717.jpg', '1', '1', '1');
INSERT INTO `resume` VALUES ('28', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'photo/369154201070717.jpg', '1', '1', '1');
INSERT INTO `resume` VALUES ('29', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'photo/QQ截图20160617155843.jpg', '1', '1', '1');

-- ----------------------------
-- Table structure for system
-- ----------------------------
DROP TABLE IF EXISTS `system`;
CREATE TABLE `system` (
  `name` varchar(225) DEFAULT NULL COMMENT '网站名称',
  `title` varchar(225) DEFAULT NULL COMMENT '标题',
  `keywords` varchar(225) DEFAULT NULL COMMENT '关键字',
  `smalltext` varchar(225) DEFAULT NULL COMMENT 'smalltext',
  `url` varchar(80) DEFAULT NULL COMMENT '网站地址',
  `page` int(11) DEFAULT '5',
  `is_audit` int(11) DEFAULT '0',
  `is_html` int(11) DEFAULT '0',
  `copyright` text COMMENT '版权信息'
) ENGINE=InnoDB DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of system
-- ----------------------------
INSERT INTO `system` VALUES ('test', 'test', 'test', 'test', '', '5', '0', '0', '版权所有：您的网站名称 Copyright@2013-2016 ALL Rights Reserved');
