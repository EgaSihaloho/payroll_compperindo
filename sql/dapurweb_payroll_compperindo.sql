/*
 Navicat Premium Data Transfer

 Source Server         : dapurweb.xyz
 Source Server Type    : MySQL
 Source Server Version : 100335
 Source Host           : 103.129.222.7:3306
 Source Schema         : dapurweb_payroll_compperindo

 Target Server Type    : MySQL
 Target Server Version : 100335
 File Encoding         : 65001

 Date: 06/09/2022 20:34:15
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for activity_log
-- ----------------------------
DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE `activity_log`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user_access` int NULL DEFAULT NULL,
  `user_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `activity` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `note` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_user_al_idx`(`id_user_access`) USING BTREE,
  INDEX `user_name_al_idx`(`user_name`) USING BTREE,
  INDEX `activity_al_idx`(`activity`) USING BTREE,
  INDEX `created_at_al_idx`(`created_at`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 82 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of activity_log
-- ----------------------------
INSERT INTO `activity_log` VALUES (1, 0, '0', 'register', 'Someone Try To Register, data : {\"first_name\":\"ega\",\"last_name\":\"haloho\",\"user_name\":\"ega_haloho1\",\"email\":\"egahaloho@gmail.com\",\"phone_number\":\"081211709894\",\"passwords\":\"welcome\"}', '2022-08-13 13:46:14');
INSERT INTO `activity_log` VALUES (2, 0, '', 'register', 'Someone Try To Register, data : {\"first_name\":\"ega\",\"last_name\":\"haloho\",\"user_name\":\"ega_haloho1\",\"email\":\"egahaloho@gmail.com\",\"phone_number\":\"081211709894\",\"passwords\":\"welcome\"}', '2022-08-13 13:47:08');
INSERT INTO `activity_log` VALUES (3, 0, '', 'register', 'Someone Try To Register, data : {\"last_name\":\"oktav\",\"email\":\"alfonsus59@gmail.com\",\"password\":\"samosir59\"}', '2022-08-13 19:04:40');
INSERT INTO `activity_log` VALUES (4, 0, '', 'register', 'Someone Try To Register, data : {\"last_name\":\"oktav\",\"email\":\"alfonsus59@gmail.com\",\"password\":\"samosir59\"}', '2022-08-13 19:20:31');
INSERT INTO `activity_log` VALUES (5, 0, '', 'register', 'Someone Try To Register, data : {\"last_name\":\"oktav\",\"email\":\"alfonsus59@gmail.com\",\"password\":\"samosir59\"}', '2022-08-13 19:27:27');
INSERT INTO `activity_log` VALUES (6, 0, '', 'register', 'Someone Try To Register, data : {\"last_name\":\"oktav\",\"email\":\"alfonsus59@gmail.com\",\"password\":\"samosir59\",\"first_name\":\"alfonsus\",\"user_name\":\"alfonsvian\",\"phone_number\":\"0895338497655\"}', '2022-08-13 19:29:41');
INSERT INTO `activity_log` VALUES (7, 0, '', 'register', 'Someone Try To Register, data : {\"last_name\":\"oktav\",\"email\":\"alfonsus59@gmail.com\",\"passwords\":\"samosir59\",\"first_name\":\"alfonsus\",\"user_name\":\"alfonsvian\",\"phone_number\":\"0895338497655\"}', '2022-08-13 19:29:59');
INSERT INTO `activity_log` VALUES (8, 0, '', 'register', 'Someone Try To Register, data : {\"first_name\":\"ega\",\"last_name\":\"haloho\",\"user_name\":\"ega_haloho1234\",\"email\":\"egahaloho@gmail.com\",\"phone_number\":\"081211709894\",\"passwords\":\"welcome\"}', '2022-08-13 20:23:59');
INSERT INTO `activity_log` VALUES (9, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-14 15:09:57');
INSERT INTO `activity_log` VALUES (10, 2, 'alfonsvian', 'login', 'Someone Try To Login, data : {\"user_name\":\"alfonsvian\",\"passwords\":\"samosir59\"}', '2022-08-14 18:01:18');
INSERT INTO `activity_log` VALUES (11, 0, '', 'register', 'Someone Try To Register, data : {\"first_name\":\"ega\",\"last_name\":\"haloho\",\"user_name\":\"ega_haloho12345\",\"email\":\"egahaloho@gmail.com\",\"phone_number\":\"081211709894\",\"passwords\":\"welcome\"}', '2022-08-14 19:08:13');
INSERT INTO `activity_log` VALUES (12, 2, 'alphonsvian', 'login', 'Someone Try To Login, data : {\"user_name\":\"alphonsvian\",\"passwords\":\"samosir59\"}', '2022-08-16 20:39:17');
INSERT INTO `activity_log` VALUES (13, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 19:06:26');
INSERT INTO `activity_log` VALUES (14, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 19:16:19');
INSERT INTO `activity_log` VALUES (15, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 19:18:56');
INSERT INTO `activity_log` VALUES (16, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 19:19:32');
INSERT INTO `activity_log` VALUES (17, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 19:19:55');
INSERT INTO `activity_log` VALUES (18, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 19:21:22');
INSERT INTO `activity_log` VALUES (19, 2, 'alphonsvian', 'login', 'Someone Try To Login, data : {\"_token\":\"AH08oBsbeptFakrEVniGpgVN6W2279VFQcrWlNYS\",\"user_name\":\"alphonsvian\",\"passwords\":\"samosir59\"}', '2022-08-20 19:28:30');
INSERT INTO `activity_log` VALUES (20, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 19:34:45');
INSERT INTO `activity_log` VALUES (21, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 19:35:47');
INSERT INTO `activity_log` VALUES (22, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 19:36:04');
INSERT INTO `activity_log` VALUES (23, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 19:39:06');
INSERT INTO `activity_log` VALUES (24, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 19:39:52');
INSERT INTO `activity_log` VALUES (25, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 19:40:17');
INSERT INTO `activity_log` VALUES (26, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 19:48:23');
INSERT INTO `activity_log` VALUES (27, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 20:08:27');
INSERT INTO `activity_log` VALUES (28, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 22:32:10');
INSERT INTO `activity_log` VALUES (29, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 22:32:59');
INSERT INTO `activity_log` VALUES (30, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 22:35:10');
INSERT INTO `activity_log` VALUES (31, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 22:36:23');
INSERT INTO `activity_log` VALUES (32, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 22:36:52');
INSERT INTO `activity_log` VALUES (33, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 22:37:12');
INSERT INTO `activity_log` VALUES (34, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 22:38:34');
INSERT INTO `activity_log` VALUES (35, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 22:41:26');
INSERT INTO `activity_log` VALUES (36, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcom\"}', '2022-08-20 22:42:32');
INSERT INTO `activity_log` VALUES (37, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 22:43:23');
INSERT INTO `activity_log` VALUES (38, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UBPlsPmAA4phBVKfoEU0TTcaj7Csvt4LklfFmCSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-20 23:27:43');
INSERT INTO `activity_log` VALUES (39, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"8TVoVrkTxPTZ8vRZYmqVeLMz1ak4FELG8Xieeq31\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-21 21:25:00');
INSERT INTO `activity_log` VALUES (40, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"JUYwFFi2SbLDRJmqFtpehDhCjRpiqoZu6kARKkEu\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-23 13:37:14');
INSERT INTO `activity_log` VALUES (41, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"3mAvCzzs2qukKrtFbMHgGYGB6XowuUHQ51SsMU8p\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-23 13:38:07');
INSERT INTO `activity_log` VALUES (42, 5, 'ega_haloho1234', 'logout', 'ega halohoHas Logout', '2022-08-23 17:43:29');
INSERT INTO `activity_log` VALUES (43, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"HqogWQvr1Q51QWeQbB3A4OjoyOACNeffzY4KFhSR\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-23 17:44:55');
INSERT INTO `activity_log` VALUES (44, 5, 'ega_haloho1234', 'logout', 'ega haloho Has Logout', '2022-08-23 17:45:20');
INSERT INTO `activity_log` VALUES (45, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"qLFg5EBviJsXWcNAiBeBHnOlED0wsZ6IIlcVR3Yz\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-23 17:45:24');
INSERT INTO `activity_log` VALUES (46, 5, 'ega_haloho1234', 'logout', 'ega haloho Has Logout', '2022-08-23 17:46:28');
INSERT INTO `activity_log` VALUES (47, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"iS8yFBsjO31SzHk9F98bY9xekfQ1bHQCIGiUDdib\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-23 17:46:32');
INSERT INTO `activity_log` VALUES (48, 5, 'ega_haloho1234', 'logout', 'ega haloho Has Logout', '2022-08-23 17:52:55');
INSERT INTO `activity_log` VALUES (49, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"vaJvQofbr8kus6gLjqm6CVU5j61zAcUY9pnRzfvz\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-23 17:52:58');
INSERT INTO `activity_log` VALUES (50, 5, 'ega_haloho1234', 'logout', 'ega haloho Has Logout', '2022-08-23 17:53:10');
INSERT INTO `activity_log` VALUES (51, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UdX1wHVNEL0NH6bWuyox7NT5yvHl1BRUHp3Fjgcx\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-23 17:53:15');
INSERT INTO `activity_log` VALUES (52, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"EvpTjGuH4ilIuvctIZPsOnAJYeTQCyKSN5m0B4ho\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-27 09:30:13');
INSERT INTO `activity_log` VALUES (53, 5, 'ega_haloho1234', 'logout', 'ega haloho Has Logout', '2022-08-27 09:31:06');
INSERT INTO `activity_log` VALUES (54, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"Wxdef4MeCgG1i1GgvtgrnmTvU9b48uSPKxEYl1W5\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-27 09:31:18');
INSERT INTO `activity_log` VALUES (55, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"w2sIFl0SgMBkdsFkxtHnA6atCZvKrQV0SJCY45Zd\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-28 12:09:18');
INSERT INTO `activity_log` VALUES (56, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UiJOWCClbndzvwsMghcTexXSCmsYDkSxxVLo6M5A\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-28 19:32:00');
INSERT INTO `activity_log` VALUES (57, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"UiJOWCClbndzvwsMghcTexXSCmsYDkSxxVLo6M5A\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-28 19:32:21');
INSERT INTO `activity_log` VALUES (58, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"4kkqMPRm3A8WH3XRnh4LRNAcyyKbSQE8p4sLR0d0\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-28 23:36:44');
INSERT INTO `activity_log` VALUES (59, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"e4lEtxjHuYJC7J7nvIo7gX8wcagrynvd1Gzb73gq\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-29 14:21:50');
INSERT INTO `activity_log` VALUES (60, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"C5PzAJ5ayUR0MKzUiWVLWvbhsF3dkb7gJpTKtLqo\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-30 11:40:34');
INSERT INTO `activity_log` VALUES (61, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"Qqd0znGdyj3cp2xLpc8IgBtP1nhXBkBUZEuxglOH\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-30 15:00:31');
INSERT INTO `activity_log` VALUES (62, 5, 'ega_haloho1234', 'logout', 'ega haloho Has Logout', '2022-08-30 16:30:17');
INSERT INTO `activity_log` VALUES (63, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"xxNmYpmLUE044s1GgkHXEGXJMt08hKxZOioGC2b3\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-30 16:31:48');
INSERT INTO `activity_log` VALUES (64, 5, 'ega_haloho1234', 'logout', 'ega haloho Has Logout', '2022-08-30 16:32:02');
INSERT INTO `activity_log` VALUES (65, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"kcCXFIRocL6QlywFknuIi0e9r55VsHUJzCmjP8rX\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-30 16:33:47');
INSERT INTO `activity_log` VALUES (66, 5, 'ega_haloho1234', 'logout', 'ega haloho Has Logout', '2022-08-30 16:38:28');
INSERT INTO `activity_log` VALUES (67, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"zDTY4Iy4TfAcGp1faj3ZDG5hDMaOAbFVgzCX2MVD\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-30 16:38:49');
INSERT INTO `activity_log` VALUES (68, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"HxS2xGVbwUwJqiDWRae8R7aYjfR9B1T3Kjpud1QZ\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-08-31 09:13:39');
INSERT INTO `activity_log` VALUES (69, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"VaJe4GnH6PXP1HVUCu6s2qCA9btvTOjvanrzixIs\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-09-01 11:48:04');
INSERT INTO `activity_log` VALUES (70, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"dhJ9Cnp30Nk2JrYifmMtNK6qxCXyKmBggSL6PjXq\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-09-01 21:24:00');
INSERT INTO `activity_log` VALUES (71, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"RFMZtbg7ipihk7xfX4Zae3iuhevN7bK5phRbQ8HS\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-09-06 14:27:09');
INSERT INTO `activity_log` VALUES (72, 5, 'ega_haloho1234', 'logout', 'ega haloho Has Logout', '2022-09-06 14:27:55');
INSERT INTO `activity_log` VALUES (73, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"llfXKpr94IiyFz1JhapjxhV0XjerOJIGrzXiUGvC\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-09-06 14:28:09');
INSERT INTO `activity_log` VALUES (74, 5, 'ega_haloho1234', 'logout', 'ega haloho Has Logout', '2022-09-06 14:30:37');
INSERT INTO `activity_log` VALUES (75, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"wO8pImtxlI4tvJR1OZh7AcptCB2zIuINefdFneUw\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-09-06 14:30:53');
INSERT INTO `activity_log` VALUES (76, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"VI4hzjZFdCaPpU3kZQTnjPbbKa9kiSxijbdt2OYg\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-09-06 14:42:43');
INSERT INTO `activity_log` VALUES (77, 5, 'ega_haloho1234', 'logout', 'ega haloho Has Logout', '2022-09-06 14:49:37');
INSERT INTO `activity_log` VALUES (78, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"OwdP6oAcTmePhjb3qLj6chGC6BzFeGArlWAYosAC\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-09-06 14:49:45');
INSERT INTO `activity_log` VALUES (79, 5, 'ega_haloho1234', 'logout', 'ega haloho Has Logout', '2022-09-06 14:52:39');
INSERT INTO `activity_log` VALUES (80, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"h1Wgct1BbCNZxS4HFXO8kqj6aoHAQVNPjMZRRaZK\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-09-06 14:52:57');
INSERT INTO `activity_log` VALUES (81, 5, 'ega_haloho1234', 'login', 'Someone Try To Login, data : {\"_token\":\"1C0PkfppSJiY17iw1WlxNcC0STovAuXJGuKy5XVu\",\"user_name\":\"ega_haloho1234\",\"passwords\":\"welcome\"}', '2022-09-06 20:22:34');

-- ----------------------------
-- Table structure for d_input_assy
-- ----------------------------
DROP TABLE IF EXISTS `d_input_assy`;
CREATE TABLE `d_input_assy`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_h_input_assy` int NULL DEFAULT NULL,
  `id_data_karyawan` int NULL DEFAULT NULL,
  `id_data_barang` int NULL DEFAULT NULL,
  `nama_barang` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `qty` int NULL DEFAULT NULL,
  `satuan_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_satuan` int NULL DEFAULT NULL,
  `price` int NULL DEFAULT NULL,
  `total_price` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_bu` int NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idhassy_dassy_idx`(`id_h_input_assy`) USING BTREE,
  INDEX `idkaryawan_dassy_idx`(`id_data_karyawan`) USING BTREE,
  INDEX `idbarang_dassy_idx`(`id_data_barang`) USING BTREE,
  INDEX `nama_barang_dassy_idx`(`nama_barang`) USING BTREE,
  INDEX `qty_dassy_idx`(`qty`) USING BTREE,
  INDEX `satuan_name_dassy_idx`(`satuan_name`) USING BTREE,
  INDEX `idsatuan_dassy_idx`(`id_satuan`) USING BTREE,
  INDEX `price_dassy_idx`(`price`) USING BTREE,
  INDEX `total_price_dassy_idx`(`total_price`) USING BTREE,
  INDEX `created_at_dassy_idx`(`created_at`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of d_input_assy
-- ----------------------------

-- ----------------------------
-- Table structure for data_barang
-- ----------------------------
DROP TABLE IF EXISTS `data_barang`;
CREATE TABLE `data_barang`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `id_satuan` int NULL DEFAULT NULL,
  `harga` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nama_barang_idx`(`nama_barang`) USING BTREE,
  INDEX `id_satuan_db_idx`(`id_satuan`) USING BTREE,
  INDEX `harga_db_idx`(`harga`) USING BTREE,
  INDEX `created_at_db_idx`(`created_at`) USING BTREE,
  INDEX `created_by_db_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_db_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_db_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 24 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of data_barang
-- ----------------------------
INSERT INTO `data_barang` VALUES (1, 'PMOT-A001', 1, 650, '2022-08-08 18:29:34', 99, '2022-08-08 18:49:46', 99);
INSERT INTO `data_barang` VALUES (3, 'PBOX-A055/A057', 1, 500, '2022-08-08 18:29:38', 99, '2022-08-08 18:49:49', 99);
INSERT INTO `data_barang` VALUES (4, 'MLOV-A006', 1, 850, '2022-08-08 18:29:40', 99, '2022-08-08 18:49:51', 99);
INSERT INTO `data_barang` VALUES (5, 'MLOV-A007', 1, 1050, '2022-08-08 18:29:42', 99, '2022-08-08 18:49:52', 99);
INSERT INTO `data_barang` VALUES (6, 'MLOV-A008', 1, 850, '2022-08-08 18:29:43', 99, '2022-08-08 18:49:54', 99);
INSERT INTO `data_barang` VALUES (7, 'MLOV-A009', 1, 1000, '2022-08-08 18:29:45', 99, '2022-08-08 18:49:55', 99);
INSERT INTO `data_barang` VALUES (8, 'MLOV-A010', 1, 500, '2022-08-08 18:29:47', 99, '2022-08-08 18:49:57', 99);
INSERT INTO `data_barang` VALUES (9, 'FBOX-A027', 1, 1350, '2022-08-08 18:29:49', 99, '2022-08-08 18:49:58', 99);
INSERT INTO `data_barang` VALUES (10, 'PBOX-A044', 1, 1350, '2022-08-08 18:29:51', 99, '2022-08-08 18:49:59', 99);
INSERT INTO `data_barang` VALUES (11, 'PBOX-A046', 1, 1350, '2022-08-08 18:29:54', 99, '2022-08-08 18:50:01', 99);
INSERT INTO `data_barang` VALUES (12, 'PBOX-A047', 1, 400, '2022-08-08 18:30:02', 99, '2022-08-08 18:50:03', 99);
INSERT INTO `data_barang` VALUES (13, 'PBOX-A048', 1, 300, '2022-08-08 18:30:05', 99, '2022-08-08 18:50:04', 99);
INSERT INTO `data_barang` VALUES (14, 'MHNG-A005', 1, 300, '2022-08-08 18:30:06', 99, '2022-08-08 18:50:06', 99);
INSERT INTO `data_barang` VALUES (15, 'THERMO GWAK&PBOX', 1, 130, '2022-08-08 18:30:08', 99, '2022-08-08 18:50:07', 99);
INSERT INTO `data_barang` VALUES (16, 'MOTORAN 006&007', 1, 500, '2022-08-08 18:30:10', 99, '2022-08-08 18:50:09', 99);
INSERT INTO `data_barang` VALUES (17, 'MOTORAN GLUE', 1, 120, '2022-08-08 18:30:12', 99, '2022-08-08 18:50:10', 99);
INSERT INTO `data_barang` VALUES (18, 'LHLDDA009', 1, 1200, '2022-08-08 18:30:14', 99, '2022-08-08 18:50:12', 99);
INSERT INTO `data_barang` VALUES (23, 'EVAP MASK/GWAK', 1, 270, '2022-08-14 18:52:46', 99, NULL, 99);

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
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
) ENGINE = InnoDB AUTO_INCREMENT = 63 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of data_karyawan
-- ----------------------------
INSERT INTO `data_karyawan` VALUES (1, 'ABDUL MUIN', '67.281.762.4-409.000', 6, 1, 2, NULL, 1, '2022-08-08 18:45:52', 99, '2022-08-08 17:48:41', 99);
INSERT INTO `data_karyawan` VALUES (2, 'ABDUL MUNIR (QC)', '81.619.822.0-408.000', 1, 1, 11, 1, 1, '2022-08-08 18:50:50', 99, '2022-08-08 20:30:14', 99);
INSERT INTO `data_karyawan` VALUES (3, 'ADE DAHLAN', '\'63.946.007.0-408.000', 5, 1, 7, NULL, 1, '2022-08-08 18:52:11', 99, '2022-08-08 19:55:32', 99);
INSERT INTO `data_karyawan` VALUES (4, 'ADITYA APRILIAN', '\'42.664.316.9-409.000', 1, 1, 11, 1, 1, '2022-08-08 18:52:27', 99, '2022-08-08 20:30:14', 99);
INSERT INTO `data_karyawan` VALUES (5, 'AGUNG GUNAWAN PRASETYO', '82.073.886.2-409.000', 3, 1, 10, 2, 1, '2022-08-08 18:52:30', 99, '2022-08-08 20:27:27', 99);
INSERT INTO `data_karyawan` VALUES (6, 'AHMAD ROFIE (QC)', '58.562.395.2-008.000', 1, 1, 11, 1, 1, '2022-08-08 18:52:33', 99, '2022-08-08 20:30:14', 99);
INSERT INTO `data_karyawan` VALUES (7, 'AHMAD DANY RAMADHAN', '65.440.818.6-409.000', 1, 1, 11, 3, 1, '2022-08-08 18:52:35', 99, '2022-08-08 20:30:14', 99);
INSERT INTO `data_karyawan` VALUES (8, 'ASEP NURHIDAYAT', '65.389.459.2-325.000', 5, 1, 8, NULL, 1, '2022-08-08 18:52:39', 99, '2022-08-08 19:57:32', 99);
INSERT INTO `data_karyawan` VALUES (9, 'BAMBANG ARI SUSILO', '41.540.548.9-427.000', 5, 1, 10, 4, 1, '2022-08-08 18:52:41', 99, '2022-08-08 20:27:27', 99);
INSERT INTO `data_karyawan` VALUES (10, 'BAYU ADITYA NUGRAHA', '43.834.468.1-413.000', 3, 1, 10, 4, 1, '2022-08-08 18:52:42', 99, '2022-08-08 20:27:27', 99);
INSERT INTO `data_karyawan` VALUES (11, 'BONGKAR (ASEP)', NULL, 1, 1, 11, 3, 1, '2022-08-08 18:52:44', 99, '2022-08-08 20:30:14', 99);
INSERT INTO `data_karyawan` VALUES (12, 'DIDIN', '91.027.752.4-439.000', 4, 1, 9, NULL, 1, '2022-08-08 18:52:46', 99, '2022-08-08 19:58:44', 99);
INSERT INTO `data_karyawan` VALUES (13, 'DUDI RIYANDI', '66.050.288.1-439.000', 5, 1, 6, NULL, 1, '2022-08-08 18:52:48', 99, '2022-08-08 19:52:47', 99);
INSERT INTO `data_karyawan` VALUES (14, 'FEBRI SETIAWAN', NULL, 2, 1, 11, 5, 1, '2022-08-08 18:52:49', 99, '2022-08-08 20:30:14', 99);
INSERT INTO `data_karyawan` VALUES (15, 'HANDINI DEANA PUTRI', '\'63.763.966.7-409.000', 1, 1, 4, NULL, 1, '2022-08-08 18:52:51', 99, '2022-08-08 19:43:14', 99);
INSERT INTO `data_karyawan` VALUES (16, 'HENDRIK', '65.365.265.1-408.000', 5, 1, 8, NULL, 1, '2022-08-08 18:52:53', 99, '2022-08-08 19:57:01', 99);
INSERT INTO `data_karyawan` VALUES (17, 'IRAWATI IRAWAN', NULL, 5, 1, 3, NULL, 1, '2022-08-08 18:52:54', 99, '2022-08-08 19:11:06', 99);
INSERT INTO `data_karyawan` VALUES (18, 'IRVAN GUNAWAN', NULL, 1, 1, 11, 1, 1, '2022-08-08 18:52:56', 99, '2022-08-08 20:30:14', 99);
INSERT INTO `data_karyawan` VALUES (19, 'MERY MEDIA', '63.855.022.8-409.000\r\n63.855.022.8-409.000\r\n\'63.855.022.8-409.000', 3, 1, 10, 4, 1, '2022-08-08 18:52:58', 99, '2022-08-08 20:27:27', 99);
INSERT INTO `data_karyawan` VALUES (20, 'RAHMAT SYAEFULLOH', NULL, 5, 1, 2, NULL, 1, '2022-08-08 18:53:00', 99, '2022-08-08 17:46:22', 99);
INSERT INTO `data_karyawan` VALUES (21, 'RIFKY ADITYA PRATAMA', '65.391.218.8-409.000', 1, 1, 11, 6, 1, '2022-08-08 18:53:02', 99, '2022-08-08 20:30:14', 99);
INSERT INTO `data_karyawan` VALUES (22, 'ROBI MULYADI', '65.184.348.4-439.000', 1, 1, 5, NULL, 1, '2022-08-08 18:53:03', 99, '2022-08-08 19:49:23', 99);
INSERT INTO `data_karyawan` VALUES (23, 'SAEPUL ARIPIN (QC)', '76.224.205.5-408.000', 4, 1, 11, 7, 1, '2022-08-08 18:53:05', 99, '2022-08-08 20:30:14', 99);
INSERT INTO `data_karyawan` VALUES (24, 'SARING BUHARI', NULL, 6, 1, 11, 4, 1, '2022-08-08 18:53:06', 99, '2022-08-08 20:30:14', 99);
INSERT INTO `data_karyawan` VALUES (25, 'SUHARYATI', '88.397.885.0-435.000', 1, 1, 11, 1, 1, '2022-08-08 18:53:08', 99, '2022-08-08 20:30:14', 99);
INSERT INTO `data_karyawan` VALUES (26, 'WAGIMIN', NULL, 5, 1, 11, 1, 1, '2022-08-08 18:53:10', 99, '2022-08-08 20:30:14', 99);
INSERT INTO `data_karyawan` VALUES (27, 'WAHYONO', NULL, 1, 1, 6, NULL, 1, '2022-08-08 18:53:12', 99, '2022-08-08 19:52:47', 99);
INSERT INTO `data_karyawan` VALUES (28, 'WAHYUDIN', '65.735.305.8-409.000', 4, 1, 2, NULL, 1, '2022-08-08 18:53:14', 99, '2022-08-08 17:46:58', 99);
INSERT INTO `data_karyawan` VALUES (29, 'WULAN MAULANI', '85.650.324.8-409.000', 1, 1, 5, NULL, 1, '2022-08-08 18:53:17', 99, '2022-08-08 19:49:23', 99);
INSERT INTO `data_karyawan` VALUES (30, 'AAB MAULANA ', '85.216.161.1-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:56:47', 99, '2022-08-08 18:24:56', 99);
INSERT INTO `data_karyawan` VALUES (31, 'ACHMAD YUSUP ', '82.346.037.3-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:57:05', 99, '2022-08-08 18:25:03', 99);
INSERT INTO `data_karyawan` VALUES (32, 'AHMAD FAUZI', '90.335.168.2.409.000', 3, 2, 1, 9, 1, '2022-08-08 17:57:10', 99, '2022-08-08 18:25:09', 99);
INSERT INTO `data_karyawan` VALUES (33, 'ALVIAN NURFADILAH', '63.828.280.6-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:57:42', 99, '2022-08-08 18:25:11', 99);
INSERT INTO `data_karyawan` VALUES (34, 'ARDIANSYAH', '76.469.732.2-409.000', 4, 2, 1, 10, 1, '2022-08-08 17:57:44', 99, '2022-08-08 18:25:45', 99);
INSERT INTO `data_karyawan` VALUES (35, 'BAYU RIZKI', '53.204.664.6-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:57:46', 99, '2022-08-08 18:25:47', 99);
INSERT INTO `data_karyawan` VALUES (36, 'CHAIRUL ANWAR AMALUDIN', '68.751.244.2-409.000', 4, 2, 1, 10, 1, '2022-08-08 17:57:47', 99, '2022-08-08 18:25:49', 99);
INSERT INTO `data_karyawan` VALUES (37, 'DENDI ADE PERMANA', '96.941.939.9-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:57:49', 99, '2022-08-08 18:26:11', 99);
INSERT INTO `data_karyawan` VALUES (38, 'EGI NURDIANSYAH', '63.806.893.2-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:57:51', 99, '2022-08-08 18:26:12', 99);
INSERT INTO `data_karyawan` VALUES (39, 'ELAN MAULANA', '41.020.137.0-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:57:52', 99, '2022-08-08 18:26:14', 99);
INSERT INTO `data_karyawan` VALUES (40, 'FINKA INDAH NOVELANI', '80.308.380.7-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:57:54', 99, '2022-08-08 18:26:16', 99);
INSERT INTO `data_karyawan` VALUES (41, 'HENDRI', '93.195.103.2-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:57:56', 99, '2022-08-08 18:26:17', 99);
INSERT INTO `data_karyawan` VALUES (42, 'HERIYANTO', '63.848.576.3-532.000', 4, 2, 1, 10, 1, '2022-08-08 17:57:58', 99, '2022-08-08 18:26:34', 99);
INSERT INTO `data_karyawan` VALUES (43, 'IRGI AHMAD FAUZI', '63.928.475.1-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:58:00', 99, '2022-08-08 18:26:37', 99);
INSERT INTO `data_karyawan` VALUES (44, 'IRVAN YOGI SAPUTRA', '63.822.140.8-532.000', 4, 2, 1, 10, 1, '2022-08-08 17:58:02', 99, '2022-08-08 18:26:39', 99);
INSERT INTO `data_karyawan` VALUES (45, 'IQBAL NUR RASYID', '42.838.677.5-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:58:04', 99, '2022-08-08 18:26:50', 99);
INSERT INTO `data_karyawan` VALUES (46, 'JIHAN YUNIZAR SALSABILLA', NULL, 1, 2, 1, 8, 1, '2022-08-08 17:58:06', 99, '2022-08-08 18:26:51', 99);
INSERT INTO `data_karyawan` VALUES (47, 'JERRY ROSDIKA RACHMAN', '85.371.137.2-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:58:07', 99, '2022-08-08 18:26:53', 99);
INSERT INTO `data_karyawan` VALUES (48, 'MARDIANSYAH', '98.198.202.8-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:58:09', 99, '2022-08-08 18:26:55', 99);
INSERT INTO `data_karyawan` VALUES (49, 'MARWAN', '82.922.442.7-409.000', 3, 2, 1, 9, 1, '2022-08-08 17:58:11', 99, '2022-08-08 18:27:31', 99);
INSERT INTO `data_karyawan` VALUES (50, 'MUHAMAD ASROR', '84.724.538.8-501.000', 4, 2, 1, 10, 1, '2022-08-08 17:58:12', 99, '2022-08-08 18:27:34', 99);
INSERT INTO `data_karyawan` VALUES (51, 'NURHIDAYAT', '65.553.158.0-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:58:14', 99, '2022-08-08 18:27:35', 99);
INSERT INTO `data_karyawan` VALUES (52, 'RANGGA NUGRAHA', '63.839.800.8-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:58:16', 99, '2022-08-08 18:27:37', 99);
INSERT INTO `data_karyawan` VALUES (53, 'RISMA APRIYANTI', '63.674.593.7-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:58:18', 99, '2022-08-08 18:27:39', 99);
INSERT INTO `data_karyawan` VALUES (54, 'ROBI KUSMANANDA', '63.832.799.9-409.000', 4, 2, 1, 10, 1, '2022-08-08 17:58:20', 99, '2022-08-08 18:28:03', 99);
INSERT INTO `data_karyawan` VALUES (55, 'RUDIANA YUSUP JAYA GINANJAR', '98.140.259.7-409.000', 4, 2, 1, 10, 1, '2022-08-08 17:58:21', 99, '2022-08-08 18:28:06', 99);
INSERT INTO `data_karyawan` VALUES (56, 'SAEFUDIN ', '95.881.805.6-409.000', 4, 2, 1, 10, 1, '2022-08-08 17:58:23', 99, '2022-08-08 18:28:08', 99);
INSERT INTO `data_karyawan` VALUES (57, 'SELLA SAHAYA LUTFHITA', '91.094.165.7-409.000', 4, 2, 1, 10, 1, '2022-08-08 17:58:25', 99, '2022-08-08 18:28:10', 99);
INSERT INTO `data_karyawan` VALUES (58, 'SHENIA WIDAYANI', '92.929.181.3-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:58:27', 99, '2022-08-08 18:28:12', 99);
INSERT INTO `data_karyawan` VALUES (59, 'TAUFIK BAHAUDIN', '92.477.011.8-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:58:28', 99, '2022-08-08 18:28:14', 99);
INSERT INTO `data_karyawan` VALUES (60, 'TIA SETIAWATI', '63.764.553.2-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:58:30', 99, '2022-08-08 18:28:16', 99);
INSERT INTO `data_karyawan` VALUES (61, 'YOLIHANA ISWANTI PERMATASARI', '63.794.527.0-409.000', 1, 2, 1, 8, 1, '2022-08-08 17:58:32', 99, '2022-08-08 18:28:18', 99);

-- ----------------------------
-- Table structure for departement
-- ----------------------------
DROP TABLE IF EXISTS `departement`;
CREATE TABLE `departement`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `departement_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `departement_name_dt_idx`(`departement_name`) USING BTREE,
  INDEX `created_at_dt_idx`(`created_at`) USING BTREE,
  INDEX `created_by_dt_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_dt_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_dt_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of departement
-- ----------------------------
INSERT INTO `departement` VALUES (1, 'Connector', '2022-08-08 18:26:44', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `departement` VALUES (2, 'Assy', '2022-08-08 18:26:58', 99, '2022-01-01 00:00:00', 99);

-- ----------------------------
-- Table structure for group_view
-- ----------------------------
DROP TABLE IF EXISTS `group_view`;
CREATE TABLE `group_view`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `group_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of group_view
-- ----------------------------
INSERT INTO `group_view` VALUES (1, 'Main', '2022-08-20 18:24:49', '2022-08-20 18:25:25');
INSERT INTO `group_view` VALUES (2, 'Barang', '2022-08-20 18:26:03', '2022-08-20 18:30:53');
INSERT INTO `group_view` VALUES (3, 'Karyawan', '2022-08-20 18:26:11', '2022-08-20 18:30:54');
INSERT INTO `group_view` VALUES (4, 'Setting', '2022-08-20 18:27:08', '2022-08-20 18:30:56');
INSERT INTO `group_view` VALUES (5, 'Gaji', '2022-08-20 18:27:15', '2022-08-20 18:31:01');
INSERT INTO `group_view` VALUES (6, 'Template', '2022-08-20 18:27:23', '2022-08-20 18:31:02');
INSERT INTO `group_view` VALUES (7, 'Report', '2022-08-20 18:29:48', '2022-08-20 18:31:03');

-- ----------------------------
-- Table structure for h_input_assy
-- ----------------------------
DROP TABLE IF EXISTS `h_input_assy`;
CREATE TABLE `h_input_assy`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_data_karyawan` int NULL DEFAULT NULL,
  `notes` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `total_item` int NULL DEFAULT NULL,
  `total_price` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `idkaryawan_hinput_idx`(`id_data_karyawan`) USING BTREE,
  INDEX `created_at_hinput_idx`(`created_at`) USING BTREE,
  INDEX `updated_at_hinput_idx`(`updated_at`) USING BTREE,
  INDEX `created_by_hinput_idx`(`created_by`) USING BTREE,
  INDEX `updated_by_hinput_idx`(`updated_by`) USING BTREE,
  INDEX `total_item_hinput_idx`(`total_item`) USING BTREE,
  INDEX `total_price_hinput_idx`(`total_price`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of h_input_assy
-- ----------------------------

-- ----------------------------
-- Table structure for his_rel_gaji_karyawan
-- ----------------------------
DROP TABLE IF EXISTS `his_rel_gaji_karyawan`;
CREATE TABLE `his_rel_gaji_karyawan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_data_karyawan` int NOT NULL,
  `id_rel_gaji` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_data_karyawan_hgk_idx`(`id_data_karyawan`) USING BTREE,
  INDEX `id_rel_gaji_hgk_idx`(`id_rel_gaji`) USING BTREE,
  INDEX `created_at_hgk_idx`(`created_at`) USING BTREE,
  INDEX `created_by_hgk_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_hgk_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_hgk_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_data_karyawan_ig_idx`(`id_data_karyawan`) USING BTREE,
  INDEX `created_at_ig_idx`(`created_at`) USING BTREE,
  INDEX `created_by_ig_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_ig_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_ig_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

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
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nominal_gp_idx`(`nominal`) USING BTREE,
  INDEX `id_status_gp_idx`(`id_status`) USING BTREE,
  INDEX `created_at_gp_idx`(`created_at`) USING BTREE,
  INDEX `created_by_gp_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_gp_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_gp_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of m_gaji_pokok
-- ----------------------------
INSERT INTO `m_gaji_pokok` VALUES (1, 3000000, 1, '2022-08-08 18:29:41', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (2, 6000000, 1, '2022-08-08 18:30:03', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (3, 2000000, 1, '2022-08-08 18:30:23', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (4, 5000000, 1, '2022-08-08 18:30:40', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (5, 4000000, 1, '2022-08-08 18:31:03', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (6, 3400000, 1, '2022-08-08 18:31:34', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (7, 3500000, 1, '2022-08-08 18:31:46', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (8, 4500000, 1, '2022-08-08 18:32:47', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (9, 4875000, 1, '2022-08-08 18:33:05', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_gaji_pokok` VALUES (10, 5250000, 1, '2022-08-08 18:33:30', 99, '2022-01-01 00:00:00', 99);

-- ----------------------------
-- Table structure for m_harian
-- ----------------------------
DROP TABLE IF EXISTS `m_harian`;
CREATE TABLE `m_harian`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nominal` int NULL DEFAULT NULL,
  `id_status` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nominal_mh_idx`(`nominal`) USING BTREE,
  INDEX `id_status_mh_idx`(`id_status`) USING BTREE,
  INDEX `created_at_mh_idx`(`created_at`) USING BTREE,
  INDEX `created_by_mh_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_mh_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_mh_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1000 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of m_harian
-- ----------------------------
INSERT INTO `m_harian` VALUES (1, 110000, 1, '2022-08-08 18:36:03', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_harian` VALUES (2, 115000, 1, '2022-08-08 18:36:25', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_harian` VALUES (3, 120000, 1, '2022-08-08 18:36:42', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_harian` VALUES (4, 125000, 1, '2022-08-08 18:37:07', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_harian` VALUES (5, 130000, 1, '2022-08-08 18:37:24', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_harian` VALUES (6, 140000, 1, '2022-08-08 18:37:53', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_harian` VALUES (7, 160000, 1, '2022-08-08 18:38:27', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_harian` VALUES (8, 165000, 1, '2022-08-08 18:38:39', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_harian` VALUES (999, 0, 1, '2022-08-08 20:33:06', 99, '2022-08-09 03:33:01', 99);

-- ----------------------------
-- Table structure for m_lembur
-- ----------------------------
DROP TABLE IF EXISTS `m_lembur`;
CREATE TABLE `m_lembur`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nominal` int NULL DEFAULT NULL,
  `id_status` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nominal_ml_idx`(`nominal`) USING BTREE,
  INDEX `id_status_ml_idx`(`id_status`) USING BTREE,
  INDEX `created_at_ml_idx`(`created_at`) USING BTREE,
  INDEX `created_by_ml_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_ml_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_ml_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1000 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of m_lembur
-- ----------------------------
INSERT INTO `m_lembur` VALUES (1, 25000, 1, '2022-08-08 18:39:34', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_lembur` VALUES (999, 0, 1, '2022-08-08 20:33:27', 99, '2022-08-09 03:33:21', 99);

-- ----------------------------
-- Table structure for m_makan
-- ----------------------------
DROP TABLE IF EXISTS `m_makan`;
CREATE TABLE `m_makan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nominal` int NULL DEFAULT NULL,
  `id_status` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `nominal_mm_idx`(`nominal`) USING BTREE,
  INDEX `id_status_mm_idx`(`id_status`) USING BTREE,
  INDEX `created_at_mm_idx`(`created_at`) USING BTREE,
  INDEX `created_by_mm_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_mm_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_mm_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1000 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of m_makan
-- ----------------------------
INSERT INTO `m_makan` VALUES (1, 15000, 1, '2022-08-08 18:39:59', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_makan` VALUES (2, 12000, 1, '2022-08-08 18:40:10', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `m_makan` VALUES (999, 0, 1, '2022-08-08 20:33:51', 99, '2022-08-09 03:33:46', 99);

-- ----------------------------
-- Table structure for m_satuan
-- ----------------------------
DROP TABLE IF EXISTS `m_satuan`;
CREATE TABLE `m_satuan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `satuan_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `id_status` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `satuan_name_ms_idx`(`satuan_name`) USING BTREE,
  INDEX `id_status_ms_idx`(`id_status`) USING BTREE,
  INDEX `created_at_ms_idx`(`created_at`) USING BTREE,
  INDEX `updated_by_ms_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of m_satuan
-- ----------------------------
INSERT INTO `m_satuan` VALUES (1, 'pcs', 1, '2022-08-08 18:45:54', 99, '2022-08-09 01:49:18', 99);

-- ----------------------------
-- Table structure for manage_view
-- ----------------------------
DROP TABLE IF EXISTS `manage_view`;
CREATE TABLE `manage_view`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `url` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `icon` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `group_view` int NULL DEFAULT NULL,
  `id_role` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of manage_view
-- ----------------------------
INSERT INTO `manage_view` VALUES (1, 'Dashboard', '/dashboard', 'real-estate-1', 1, 2, '2022-08-20 18:32:10', '2022-08-21 22:48:45');
INSERT INTO `manage_view` VALUES (2, 'Data Barang', '/barang', 'literature-1', 2, 2, '2022-08-20 18:33:26', '2022-08-21 22:49:20');
INSERT INTO `manage_view` VALUES (3, 'Setting', '/setting_barang', 'settings-1', 2, 1, '2022-08-20 18:34:08', '2022-08-21 22:49:53');
INSERT INTO `manage_view` VALUES (4, 'Data Karyawan', '/karyawan', 'user-1', 3, 2, '2022-08-20 18:34:45', '2022-08-21 22:50:13');
INSERT INTO `manage_view` VALUES (5, 'Setting', '/setting_karyawan', 'settings-1', 3, 1, '2022-08-20 18:34:57', '2022-08-21 22:49:55');
INSERT INTO `manage_view` VALUES (6, 'Data Gaji', '/gaji', 'survey-1', 5, 2, '2022-08-20 18:35:15', '2022-08-21 22:50:55');
INSERT INTO `manage_view` VALUES (7, 'Setting', '/setting_karyawan', 'settings-1', 5, 1, '2022-08-20 18:35:27', '2022-08-21 22:49:57');
INSERT INTO `manage_view` VALUES (8, 'Template Gaji', '/temp_gaji', 'survey-1', 6, 2, '2022-08-20 18:40:06', '2022-08-21 22:51:20');
INSERT INTO `manage_view` VALUES (9, 'Setting', '/setting_temp_gaji', 'settings-1', 6, 1, '2022-08-20 18:40:27', '2022-08-21 22:50:09');
INSERT INTO `manage_view` VALUES (10, 'Report Gaji', '/report', 'paper-stack-1', 7, 1, '2022-08-20 18:42:02', '2022-08-21 22:51:27');

-- ----------------------------
-- Table structure for rel_gaji
-- ----------------------------
DROP TABLE IF EXISTS `rel_gaji`;
CREATE TABLE `rel_gaji`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_m_assy` int NULL DEFAULT NULL,
  `id_m_lembur` int NULL DEFAULT NULL,
  `id_m_harian` int NULL DEFAULT NULL,
  `id_m_makan` int NULL DEFAULT NULL,
  `id_status` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `id_m_assy_rg_idx`(`id_m_assy`) USING BTREE,
  INDEX `id_m_lembur_rg_idx`(`id_m_lembur`) USING BTREE,
  INDEX `id_m_harian_rg_idx`(`id_m_harian`) USING BTREE,
  INDEX `id_m_makan_rg_idx`(`id_m_makan`) USING BTREE,
  INDEX `id_status_rg_idx`(`id_status`) USING BTREE,
  INDEX `created_at_rg_idx`(`created_at`) USING BTREE,
  INDEX `created_by_rg_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_rg_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_rg_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 12 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of rel_gaji
-- ----------------------------
INSERT INTO `rel_gaji` VALUES (1, 1000, 999, 999, 999, 1, '2022-08-08 18:52:43', NULL, '2022-08-08 20:25:15', 99);
INSERT INTO `rel_gaji` VALUES (2, 999, 1, 6, 1, 1, '2022-08-08 18:52:46', NULL, '2022-08-08 20:25:18', 99);
INSERT INTO `rel_gaji` VALUES (3, 999, 1, 1, 1, 1, '2022-08-08 18:52:52', NULL, '2022-08-08 20:25:23', 99);
INSERT INTO `rel_gaji` VALUES (4, 999, 1, 2, 1, 1, '2022-08-08 19:30:24', 99, '2022-08-08 20:02:06', 99);
INSERT INTO `rel_gaji` VALUES (5, 999, 1, 3, 2, 1, '2022-08-08 19:48:49', 99, '2022-08-08 20:02:06', 99);
INSERT INTO `rel_gaji` VALUES (6, 999, 1, 4, 1, 1, '2022-08-08 19:52:16', 99, '2022-08-08 20:02:06', 99);
INSERT INTO `rel_gaji` VALUES (7, 999, 1, 5, 1, 1, '2022-08-08 19:54:39', 99, '2022-08-08 20:02:06', 99);
INSERT INTO `rel_gaji` VALUES (8, 999, 1, 7, 1, 1, '2022-08-08 19:56:38', 99, '2022-08-08 20:02:06', 99);
INSERT INTO `rel_gaji` VALUES (9, 999, 1, 8, 1, 1, '2022-08-08 19:58:20', 99, '2022-08-08 20:02:06', 99);
INSERT INTO `rel_gaji` VALUES (10, 999, 1, 999, 1, 1, '2022-08-08 20:24:28', 99, '2022-08-09 03:24:21', 99);
INSERT INTO `rel_gaji` VALUES (11, 999, 999, 999, 999, 1, '2022-08-08 20:25:00', 99, '2022-08-09 03:25:06', 99);

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `role_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `role_name_role_idx`(`role_name`) USING BTREE,
  INDEX `created_at_role_idx`(`created_at`) USING BTREE,
  INDEX `updated_by_role_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of role
-- ----------------------------
INSERT INTO `role` VALUES (1, 'admin', '2022-08-13 08:57:37', 1, '0000-00-00 00:00:00', NULL);
INSERT INTO `role` VALUES (2, 'user', '2022-08-13 09:09:18', 1, '0000-00-00 00:00:00', NULL);

-- ----------------------------
-- Table structure for status
-- ----------------------------
DROP TABLE IF EXISTS `status`;
CREATE TABLE `status`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `status_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `status_name_s_idx`(`status_name`) USING BTREE,
  INDEX `created_at_s_idx`(`created_at`) USING BTREE,
  INDEX `created_by_s_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_s_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_s_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of status
-- ----------------------------
INSERT INTO `status` VALUES (1, 'Active', '2022-08-08 18:52:10', 99, '2022-08-09 01:52:15', 99);

-- ----------------------------
-- Table structure for status_perkawinan
-- ----------------------------
DROP TABLE IF EXISTS `status_perkawinan`;
CREATE TABLE `status_perkawinan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `status_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  `created_by` int NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_by` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `status_name_sk_idx`(`status_name`) USING BTREE,
  INDEX `created_at_sk_idx`(`created_at`) USING BTREE,
  INDEX `created_by_sk_idx`(`created_by`) USING BTREE,
  INDEX `updated_at_sk_idx`(`updated_at`) USING BTREE,
  INDEX `updated_by_sk_idx`(`updated_by`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = COMPACT;

-- ----------------------------
-- Records of status_perkawinan
-- ----------------------------
INSERT INTO `status_perkawinan` VALUES (1, 'TK/0', '2022-08-08 18:21:05', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `status_perkawinan` VALUES (2, 'TK/1', '2022-08-08 18:22:20', 99, '2022-01-01 00:00:00', 99);
INSERT INTO `status_perkawinan` VALUES (3, 'K/0', '2022-08-08 18:24:13', 99, '2022-08-08 17:32:49', 99);
INSERT INTO `status_perkawinan` VALUES (4, 'K/1', '2022-08-08 18:24:27', 99, '2022-08-08 17:32:53', 99);
INSERT INTO `status_perkawinan` VALUES (5, 'K/2', '2022-08-08 18:25:03', 99, '2022-08-08 17:32:55', 99);
INSERT INTO `status_perkawinan` VALUES (6, 'K/3', '2022-08-08 18:25:47', 99, '2022-08-08 17:32:57', 99);

-- ----------------------------
-- Table structure for user_access
-- ----------------------------
DROP TABLE IF EXISTS `user_access`;
CREATE TABLE `user_access`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `last_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `user_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `phone_number` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `passwords` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `role` int NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `first_name_ua_idx`(`first_name`) USING BTREE,
  INDEX `last_name_ua_idx`(`last_name`) USING BTREE,
  INDEX `user_name_ua_idx`(`user_name`) USING BTREE,
  INDEX `email_ua_idx`(`email`) USING BTREE,
  INDEX `phone_number_ua_idx`(`phone_number`) USING BTREE,
  INDEX `role_ua_idx`(`role`) USING BTREE,
  INDEX `created_at_ua_idx`(`created_at`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user_access
-- ----------------------------
INSERT INTO `user_access` VALUES (1, 'ega', 'haloho', 'ega_haloho1', 'egahaloho@gmail.com', '081211709894', '$2y$10$Cy4UPfVIv75w/Aiu3Klzve6C70tgqhBEpi1H5935YDWurYiRAD9Ni', 2, '2022-08-13 13:47:08');
INSERT INTO `user_access` VALUES (2, 'alphonsus', 'oktav', 'alphonsvian', 'alfonsus59@gmail.com', '0895338497655', '$2y$10$CdmOpYo4d9NwmhZOv0Ph3eCcbwD9rx60124i6U5/zfg61u9l7ulOq', 2, '2022-08-13 19:29:59');
INSERT INTO `user_access` VALUES (3, 'ega', 'haloho', 'ega_haloho12', 'egahaloho@gmail.com', '081211709894', '$2y$10$49FMu4D5p8IJ2AQJMMTdB.fu8q/tc2ybFWBy/gRIvQ1wdURCc0kzm', 2, '2022-08-13 19:55:54');
INSERT INTO `user_access` VALUES (4, 'johanes', 'julius', 'johanjulius', 'amlisamosir@gmail.com', '081282653281', '$2y$10$sMDCoZcd2AlwHfvAwGDUle4Btm/j2fliYXfT9cY3hl79dX8KTV8BG', 2, '2022-08-13 20:08:26');
INSERT INTO `user_access` VALUES (5, 'ega', 'haloho', 'ega_haloho1234', 'egahaloho@gmail.com', '081211709894', '$2y$10$CC1fKpA/fEBFtUGB9W.TLOJvWWydc6iFxAH.H7JmCuHwGj3mujmQG', 2, '2022-08-13 20:24:00');
INSERT INTO `user_access` VALUES (6, 'ega', 'haloho', 'ega_haloho12345', 'egahaloho@gmail.com', '081211709894', '$2y$10$S7cWmRpwlHSJNGRH2X2LoOuFhq6FI.vVbXEEJceEcRI1yWD4qFPIy', 2, '2022-08-14 19:08:13');
INSERT INTO `user_access` VALUES (7, 'ega', 'haloho', 'ega_haloho123485', 'egahaloho@gmail.com', '081211709894', '$2y$10$FYmRxzVPtv5Y10zr37F85usoyxfaah1nd3ZQojluhcH2GRfuGQt7G', NULL, '2022-08-14 19:10:14');

-- ----------------------------
-- Table structure for validation_method
-- ----------------------------
DROP TABLE IF EXISTS `validation_method`;
CREATE TABLE `validation_method`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `method` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `table_name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `mehtod_vm_idx`(`method`) USING BTREE,
  INDEX `table_name_vm_idx`(`table_name`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of validation_method
-- ----------------------------
INSERT INTO `validation_method` VALUES (1, 'login', 'user_access', '2022-08-13 11:29:15');
INSERT INTO `validation_method` VALUES (2, 'register', 'user_access', '2022-08-13 11:29:15');
INSERT INTO `validation_method` VALUES (3, 'insertlog', 'activity_log', '2022-08-13 13:29:16');

SET FOREIGN_KEY_CHECKS = 1;
