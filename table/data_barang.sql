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

 Date: 06/08/2022 15:17:06
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for data_barang
-- ----------------------------
DROP TABLE IF EXISTS `data_barang`;
CREATE TABLE `data_barang`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_satuan` int NULL DEFAULT NULL,
  `harga` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nama_barang_idx`(`nama_barang`) USING BTREE,
  INDEX `id_satuan_db_idx`(`id_satuan`) USING BTREE,
  INDEX `harga_db_idx`(`harga`) USING BTREE,
  INDEX `created_at_db_idx`(`created_at`) USING BTREE,
  INDEX `created_by_db_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_db_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_db_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
