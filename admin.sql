/*
Navicat MySQL Data Transfer

Source Server         : qiye
Source Server Version : 50547
Source Host           : localhost:3306
Source Database       : admin

Target Server Type    : MYSQL
Target Server Version : 50547
File Encoding         : 65001

Date: 2019-08-23 18:28:18
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` char(32) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `login_count` int(4) DEFAULT NULL,
  `last_time` int(11) DEFAULT NULL,
  `is_update` tinyint(4) DEFAULT NULL,
  `update_time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('00000000001', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'abc@qq.com', '15', '1566462786', '1', '0');

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `id` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `cate_name` varchar(200) DEFAULT NULL COMMENT '分类名称',
  `cate_order` int(11) DEFAULT NULL COMMENT '栏目顺序',
  `pid` int(11) DEFAULT NULL COMMENT '父id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES ('00000000001', '新闻', '1', '0');
INSERT INTO `category` VALUES ('00000000002', '产品', '2', '0');
INSERT INTO `category` VALUES ('00000000003', '公司新闻', '1', '1');
INSERT INTO `category` VALUES ('00000000004', '行业新闻', '2', '1');
INSERT INTO `category` VALUES ('00000000005', '家用系列', '1', '2');
INSERT INTO `category` VALUES ('00000000006', '商用系列', '2', '2');
INSERT INTO `category` VALUES ('00000000045', 'aaaa', '0', '4');
INSERT INTO `category` VALUES ('00000000046', 'asdf', '0', '0');
INSERT INTO `category` VALUES ('00000000047', 'dddd', '0', '0');
INSERT INTO `category` VALUES ('00000000048', 'asdf', '0', '0');
INSERT INTO `category` VALUES ('00000000049', 'ssss', '0', '0');
INSERT INTO `category` VALUES ('00000000050', 'aaa', '0', '0');

-- ----------------------------
-- Table structure for system
-- ----------------------------
DROP TABLE IF EXISTS `system`;
CREATE TABLE `system` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '网站标题',
  `keywords` varchar(255) DEFAULT NULL COMMENT '网站关键字',
  `desc` varchar(255) DEFAULT NULL,
  `is_close` tinyint(2) DEFAULT NULL COMMENT '是否关闭1:关0:开',
  `is_update` tinyint(2) DEFAULT NULL COMMENT '更新标志位',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=gbk;

-- ----------------------------
-- Records of system
-- ----------------------------
INSERT INTO `system` VALUES ('0000000001', 'PHP中文网', 'php,thinkphp5,php中文网', 'ThinkPHP5企业站点快速开发教程', '0', '1');
