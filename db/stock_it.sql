/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : stock_it

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 16/06/2022 11:41:03
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for pname
-- ----------------------------
DROP TABLE IF EXISTS `pname`;
CREATE TABLE `pname`  (
  `pname_id` int NOT NULL,
  `pname_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`pname_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pname
-- ----------------------------

-- ----------------------------
-- Table structure for tool
-- ----------------------------
DROP TABLE IF EXISTS `tool`;
CREATE TABLE `tool`  (
  `tool_id` int NOT NULL,
  `tool_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tool_price` float NOT NULL,
  `tool_type` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tool_qty` int NOT NULL,
  `tool_date_import` date NOT NULL,
  `tool_time_import` time NOT NULL,
  PRIMARY KEY (`tool_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tool
-- ----------------------------

-- ----------------------------
-- Table structure for tool_type
-- ----------------------------
DROP TABLE IF EXISTS `tool_type`;
CREATE TABLE `tool_type`  (
  `tool_type_id` int NOT NULL,
  `tool_type_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`tool_type_id`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tool_type
-- ----------------------------

-- ----------------------------
-- Table structure for type_stock
-- ----------------------------
DROP TABLE IF EXISTS `type_stock`;
CREATE TABLE `type_stock`  (
  `s_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `s_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`s_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of type_stock
-- ----------------------------
INSERT INTO `type_stock` VALUES (000001, 'อุปกรณ์คอมพิวเตอร์');
INSERT INTO `type_stock` VALUES (000002, 'อุปกรณ์ปริ้นเตอร์');
INSERT INTO `type_stock` VALUES (000003, 'อุปกรณ์อินเตอร์เน็ต');
INSERT INTO `type_stock` VALUES (000004, 'อุปกรณ์อื่นๆ');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `fname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `lname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cid` varchar(13) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tel` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ulevel` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `txtoffice` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `position` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`user_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'นาย', 'testfname', 'testlname', '1234567891234', '0912345678', 'admin', 'ไอที', 'นวก.คอม');
INSERT INTO `users` VALUES (2, 'user', 'e10adc3949ba59abbe56e057f20f883e', 'นาย', 'fnameuser', 'lnameuser', '1234567891234', '0912345678', 'member', 'it', 'computer');
INSERT INTO `users` VALUES (3, 'user2', 'e10adc3949ba59abbe56e057f20f883e', 'นาย', 'fnameuser', 'lnameuser', '1234567891234', '0912345678', 'member', 'it', 'computer');

SET FOREIGN_KEY_CHECKS = 1;
