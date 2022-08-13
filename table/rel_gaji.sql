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

 Date: 06/08/2022 16:24:04
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for rel_gaji
-- ----------------------------
DROP TABLE IF EXISTS `rel_gaji`;
CREATE TABLE `rel_gaji`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_data_karyawan` int(10),
	`id_m_assy` int(10),
	`id_m_lembur` int(10),
	`id_m_harian` int(10),
	`id_m_makan` int(10),
  `id_status` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
	INDEX `id_data_karyawan_rg_idx`(`id_data_karyawan`) USING BTREE,
	INDEX `id_m_assy_rg_idx`(`id_m_assy`) USING BTREE,
	INDEX `id_m_lembur_rg_idx`(`id_m_lembur`) USING BTREE,
	INDEX `id_m_harian_rg_idx`(`id_m_harian`) USING BTREE,
	INDEX `id_m_makan_rg_idx`(`id_m_makan`) USING BTREE,
	
  INDEX `id_status_rg_idx`(`id_status`) USING BTREE,
  INDEX `created_at_rg_idx`(`created_at`) USING BTREE,
  INDEX `created_by_rg_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_rg_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_rg_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
