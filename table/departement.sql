/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : payroll_comperindo

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 06/08/2022 15:29:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for departement
-- ----------------------------
DROP TABLE IF EXISTS `departement`;
CREATE TABLE `departement`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `departement_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `departement_name_dt_idx`(`departement_name`) USING BTREE,
  INDEX `created_at_dt_idx`(`created_at`) USING BTREE,
  INDEX `created_by_dt_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_dt_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_dt_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
