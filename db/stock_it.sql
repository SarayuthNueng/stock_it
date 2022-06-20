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

 Date: 20/06/2022 10:41:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for koffice
-- ----------------------------
DROP TABLE IF EXISTS `koffice`;
CREATE TABLE `koffice`  (
  `k_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `k_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`k_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 46 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of koffice
-- ----------------------------
INSERT INTO `koffice` VALUES (001, 'IT');
INSERT INTO `koffice` VALUES (002, 'ห้องฟัน');
INSERT INTO `koffice` VALUES (003, 'NCD');
INSERT INTO `koffice` VALUES (004, 'ARI');
INSERT INTO `koffice` VALUES (005, 'ห้องยา');
INSERT INTO `koffice` VALUES (006, 'ห้องบัตร');
INSERT INTO `koffice` VALUES (007, 'ER');
INSERT INTO `koffice` VALUES (008, 'TB');
INSERT INTO `koffice` VALUES (010, 'ddd');
INSERT INTO `koffice` VALUES (012, 'aaa');
INSERT INTO `koffice` VALUES (013, 'ss');
INSERT INTO `koffice` VALUES (014, 'ee');
INSERT INTO `koffice` VALUES (015, 'tt');
INSERT INTO `koffice` VALUES (016, '66');
INSERT INTO `koffice` VALUES (017, 'asdasd');
INSERT INTO `koffice` VALUES (018, 'IT');
INSERT INTO `koffice` VALUES (019, 'asasasa');
INSERT INTO `koffice` VALUES (020, 'qqq');
INSERT INTO `koffice` VALUES (021, 'zzz');
INSERT INTO `koffice` VALUES (022, 'zzz2');
INSERT INTO `koffice` VALUES (023, 'd2');
INSERT INTO `koffice` VALUES (024, 'it2');
INSERT INTO `koffice` VALUES (025, '1');
INSERT INTO `koffice` VALUES (026, '2');
INSERT INTO `koffice` VALUES (027, '3');
INSERT INTO `koffice` VALUES (028, '4');
INSERT INTO `koffice` VALUES (029, '5');
INSERT INTO `koffice` VALUES (030, '6');
INSERT INTO `koffice` VALUES (031, '7');
INSERT INTO `koffice` VALUES (032, '8');
INSERT INTO `koffice` VALUES (033, '9');
INSERT INTO `koffice` VALUES (034, '10');
INSERT INTO `koffice` VALUES (035, '12');
INSERT INTO `koffice` VALUES (036, '13');
INSERT INTO `koffice` VALUES (037, '14');
INSERT INTO `koffice` VALUES (038, '15');
INSERT INTO `koffice` VALUES (039, '16');
INSERT INTO `koffice` VALUES (040, '17');
INSERT INTO `koffice` VALUES (041, '18');
INSERT INTO `koffice` VALUES (042, '19');
INSERT INTO `koffice` VALUES (043, '21');
INSERT INTO `koffice` VALUES (044, '20');
INSERT INTO `koffice` VALUES (045, 'qq1');

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
