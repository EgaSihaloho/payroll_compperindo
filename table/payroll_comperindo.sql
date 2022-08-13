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

 Date: 08/08/2022 23:40:15
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

-- ----------------------------
-- Records of data_barang
-- ----------------------------

-- ----------------------------
-- Table structure for data_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `data_karyawan`;
CREATE TABLE `data_karyawan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `npwp` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_status_perkawinan` int NULL DEFAULT NULL,
  `id_departement` int NULL DEFAULT NULL,
  `id_rel_gaji` int NULL DEFAULT NULL,
  `id_gapok` int NULL DEFAULT NULL,
  `id_status` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nama_dk_idx`(`nama`) USING BTREE,
  INDEX `npwp_dk_idx`(`npwp`) USING BTREE,
  INDEX `id_gapok_dk_idx`(`id_gapok`) USING BTREE,
  INDEX `id_status_perkawinan_dk_idx`(`id_status_perkawinan`) USING BTREE,
  INDEX `id_departement_dk_idx`(`id_departement`) USING BTREE,
  INDEX `id_rel_gaji_dk_idx`(`id_rel_gaji`) USING BTREE,
  INDEX `id_status_dk_idx`(`id_status`) USING BTREE,
  INDEX `created_at_dk_idx`(`created_at`) USING BTREE,
  INDEX `created_by_dk_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_dk_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_dk_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of data_karyawan
-- ----------------------------
INSERT INTO `data_karyawan` VALUES (1, 'ABDUL MUIN\r\nABDUL MUIN\r\nABDUL MUIN', '67.281.762.4-409.000', 6, 1, 2, NULL, 1, '2022-08-08 18:45:52', 99, '2022-08-08 18:48:52', 99);
INSERT INTO `data_karyawan` VALUES (2, 'ABDUL MUNIR (QC)', '81.619.822.0-408.000', 1, 1, 3, 1, 1, '2022-08-08 18:50:50', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `data_karyawan` VALUES (3, 'ADE DAHLAN', '\'63.946.007.0-408.000', 5, 1, 2, NULL, 1, '2022-08-08 18:52:11', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `data_karyawan` VALUES (4, 'ADITYA APRILIAN', '\'42.664.316.9-409.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:27', NULL, '2022-08-08 19:03:45', NULL);
INSERT INTO `data_karyawan` VALUES (5, 'AGUNG GUNAWAN PRASETYO', '82.073.886.2-409.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:30', NULL, '2022-08-08 19:03:45', NULL);
INSERT INTO `data_karyawan` VALUES (6, 'AHMAD ROFIE (QC)', '58.562.395.2-008.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:33', NULL, '2022-08-08 19:04:03', NULL);
INSERT INTO `data_karyawan` VALUES (7, 'AHMAD DANY RAMADHAN', '65.440.818.6-409.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:35', NULL, '2022-08-08 19:04:03', NULL);
INSERT INTO `data_karyawan` VALUES (8, 'ASEP NURHIDAYAT', '65.389.459.2-325.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:39', NULL, '2022-08-08 19:04:07', NULL);
INSERT INTO `data_karyawan` VALUES (9, 'BAMBANG ARI SUSILO', '41.540.548.9-427.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:41', NULL, '2022-08-08 19:04:04', NULL);
INSERT INTO `data_karyawan` VALUES (10, 'BAYU ADITYA NUGRAHA', '43.834.468.1-413.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:42', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (11, 'BONGKAR (ASEP)', NULL, NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:44', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (12, 'DIDIN', '91.027.752.4-439.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:46', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (13, 'DUDI RIYANDI', '66.050.288.1-439.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:48', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (14, 'FEBRI SETIAWAN', NULL, NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:49', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (15, 'HANDINI DEANA PUTRI', '\'63.763.966.7-409.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:51', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (16, 'HENDRIK', '65.365.265.1-408.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:53', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (17, 'IRAWATI IRAWAN', NULL, NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:54', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (18, 'IRVAN GUNAWAN', NULL, NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:56', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (19, 'MERY MEDIA', '63.855.022.8-409.000\r\n63.855.022.8-409.000\r\n\'63.855.022.8-409.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:52:58', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (20, 'RAHMAT SYAEFULLOH', NULL, NULL, 1, NULL, NULL, NULL, '2022-08-08 18:53:00', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (21, 'RIFKY ADITYA PRATAMA', '65.391.218.8-409.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:53:02', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (22, 'ROBI MULYADI', '65.184.348.4-439.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:53:03', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (23, 'SAEPUL ARIPIN (QC)', '76.224.205.5-408.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:53:05', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (24, 'SARING BUHARI', NULL, NULL, 1, NULL, NULL, NULL, '2022-08-08 18:53:06', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (25, 'SUHARYATI', '88.397.885.0-435.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:53:08', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (26, 'WAGIMIN', NULL, NULL, 1, NULL, NULL, NULL, '2022-08-08 18:53:10', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (27, 'WAHYONO', NULL, NULL, 1, NULL, NULL, NULL, '2022-08-08 18:53:12', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (28, 'WAHYUDIN', '65.735.305.8-409.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:53:14', NULL, '2022-08-08 19:04:22', NULL);
INSERT INTO `data_karyawan` VALUES (29, 'WULAN MAULANI', '85.650.324.8-409.000', NULL, 1, NULL, NULL, NULL, '2022-08-08 18:53:17', NULL, '2022-08-08 19:04:22', NULL);

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
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of departement
-- ----------------------------
INSERT INTO `departement` VALUES (1, 'Connector', '2022-08-08 18:26:44', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `departement` VALUES (2, 'Assy', '2022-08-08 18:26:58', 99, '0000-00-00 00:00:00', 99);

-- ----------------------------
-- Table structure for his_rel_gaji_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `his_rel_gaji_karyawan`;
CREATE TABLE `his_rel_gaji_karyawan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_data_karyawan` int NOT NULL,
  `id_rel_gaji` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_data_karyawan_hgk_idx`(`id_data_karyawan`) USING BTREE,
  INDEX `id_rel_gaji_hgk_idx`(`id_rel_gaji`) USING BTREE,
  INDEX `created_at_hgk_idx`(`created_at`) USING BTREE,
  INDEX `created_by_hgk_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_hgk_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_hgk_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of his_rel_gaji_karyawan
-- ----------------------------

-- ----------------------------
-- Table structure for input_gaji
-- ----------------------------
DROP TABLE IF EXISTS `input_gaji`;
CREATE TABLE `input_gaji`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_data_karyawan` int NULL DEFAULT NULL,
  `total_assy` int NULL DEFAULT NULL,
  `harian` int NULL DEFAULT NULL,
  `makan` int NULL DEFAULT NULL,
  `lembur` int NULL DEFAULT NULL,
  `total` int NULL DEFAULT NULL,
  `id_head_assy` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_data_karyawan_ig_idx`(`id_data_karyawan`) USING BTREE,
  INDEX `created_at_ig_idx`(`created_at`) USING BTREE,
  INDEX `created_by_ig_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_ig_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_ig_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of input_gaji
-- ----------------------------

-- ----------------------------
-- Table structure for m_gaji_pokok
-- ----------------------------
DROP TABLE IF EXISTS `m_gaji_pokok`;
CREATE TABLE `m_gaji_pokok`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nominal` int NULL DEFAULT NULL,
  `id_status` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nominal_gp_idx`(`nominal`) USING BTREE,
  INDEX `id_status_gp_idx`(`id_status`) USING BTREE,
  INDEX `created_at_gp_idx`(`created_at`) USING BTREE,
  INDEX `created_by_gp_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_gp_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_gp_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_gaji_pokok
-- ----------------------------
INSERT INTO `m_gaji_pokok` VALUES (1, 3000000, 1, '2022-08-08 18:29:41', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (2, 6000000, 1, '2022-08-08 18:30:03', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (3, 2000000, 1, '2022-08-08 18:30:23', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (4, 5000000, 1, '2022-08-08 18:30:40', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (5, 4000000, 1, '2022-08-08 18:31:03', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (6, 3400000, 1, '2022-08-08 18:31:34', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (7, 3500000, 1, '2022-08-08 18:31:46', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (8, 4500000, 1, '2022-08-08 18:32:47', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (9, 4875000, 1, '2022-08-08 18:33:05', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (10, 5250000, 1, '2022-08-08 18:33:30', 99, '0000-00-00 00:00:00', 99);

-- ----------------------------
-- Table structure for m_harian
-- ----------------------------
DROP TABLE IF EXISTS `m_harian`;
CREATE TABLE `m_harian`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nominal` int NULL DEFAULT NULL,
  `id_status` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nominal_mh_idx`(`nominal`) USING BTREE,
  INDEX `id_status_mh_idx`(`id_status`) USING BTREE,
  INDEX `created_at_mh_idx`(`created_at`) USING BTREE,
  INDEX `created_by_mh_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_mh_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_mh_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_harian
-- ----------------------------
INSERT INTO `m_harian` VALUES (1, 110000, 1, '2022-08-08 18:36:03', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_harian` VALUES (2, 115000, 1, '2022-08-08 18:36:25', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_harian` VALUES (3, 120000, 1, '2022-08-08 18:36:42', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_harian` VALUES (4, 125000, 1, '2022-08-08 18:37:07', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_harian` VALUES (5, 130000, 1, '2022-08-08 18:37:24', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_harian` VALUES (6, 140000, 1, '2022-08-08 18:37:53', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_harian` VALUES (7, 160000, 1, '2022-08-08 18:38:27', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_harian` VALUES (8, 165000, 1, '2022-08-08 18:38:39', 99, '0000-00-00 00:00:00', 99);

-- ----------------------------
-- Table structure for m_lembur
-- ----------------------------
DROP TABLE IF EXISTS `m_lembur`;
CREATE TABLE `m_lembur`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nominal` int NULL DEFAULT NULL,
  `id_status` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nominal_ml_idx`(`nominal`) USING BTREE,
  INDEX `id_status_ml_idx`(`id_status`) USING BTREE,
  INDEX `created_at_ml_idx`(`created_at`) USING BTREE,
  INDEX `created_by_ml_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_ml_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_ml_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_lembur
-- ----------------------------
INSERT INTO `m_lembur` VALUES (1, 25000, 1, '2022-08-08 18:39:34', 99, '0000-00-00 00:00:00', 99);

-- ----------------------------
-- Table structure for m_makan
-- ----------------------------
DROP TABLE IF EXISTS `m_makan`;
CREATE TABLE `m_makan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nominal` int NULL DEFAULT NULL,
  `id_status` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nominal_mm_idx`(`nominal`) USING BTREE,
  INDEX `id_status_mm_idx`(`id_status`) USING BTREE,
  INDEX `created_at_mm_idx`(`created_at`) USING BTREE,
  INDEX `created_by_mm_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_mm_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_mm_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of m_makan
-- ----------------------------
INSERT INTO `m_makan` VALUES (1, 15000, 1, '2022-08-08 18:39:59', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `m_makan` VALUES (2, 12000, 1, '2022-08-08 18:40:10', 99, '0000-00-00 00:00:00', 99);

-- ----------------------------
-- Table structure for rel_gaji
-- ----------------------------
DROP TABLE IF EXISTS `rel_gaji`;
CREATE TABLE `rel_gaji`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_data_karyawan` int NULL DEFAULT NULL,
  `id_m_assy` int NULL DEFAULT NULL,
  `id_m_lembur` int NULL DEFAULT NULL,
  `id_m_harian` int NULL DEFAULT NULL,
  `id_m_makan` int NULL DEFAULT NULL,
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
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of rel_gaji
-- ----------------------------

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `status_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `status_name_s_idx`(`status_name`) USING BTREE,
  INDEX `created_at_s_idx`(`created_at`) USING BTREE,
  INDEX `created_by_s_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_s_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_s_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of status
-- ----------------------------

-- ----------------------------
-- Table structure for status_perkawinan
-- ----------------------------
DROP TABLE IF EXISTS `status_perkawinan`;
CREATE TABLE `status_perkawinan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `status_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `status_name_sk_idx`(`status_name`) USING BTREE,
  INDEX `created_at_sk_idx`(`created_at`) USING BTREE,
  INDEX `created_by_sk_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_sk_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_sk_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of status_perkawinan
-- ----------------------------
INSERT INTO `status_perkawinan` VALUES (1, 'TK/0', '2022-08-08 18:21:05', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `status_perkawinan` VALUES (2, 'TK/1', '2022-08-08 18:22:20', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `status_perkawinan` VALUES (3, 'TK/1', '2022-08-08 18:23:02', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `status_perkawinan` VALUES (4, 'K/0', '2022-08-08 18:24:13', 99, '2022-08-08 18:24:44', 99);
INSERT INTO `status_perkawinan` VALUES (5, 'K/1', '2022-08-08 18:24:27', 99, '2022-08-08 18:24:48', 99);
INSERT INTO `status_perkawinan` VALUES (6, 'K/2', '2022-08-08 18:25:03', 99, '0000-00-00 00:00:00', 99);
INSERT INTO `status_perkawinan` VALUES (7, 'K/3', '2022-08-08 18:25:47', 99, '0000-00-00 00:00:00', 99);

SET FOREIGN_KEY_CHECKS = 1;
