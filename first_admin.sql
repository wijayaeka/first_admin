/*
Navicat MySQL Data Transfer

Source Server         : Local
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : first_admin

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-09-08 01:43:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for access_menu
-- ----------------------------
DROP TABLE IF EXISTS `access_menu`;
CREATE TABLE `access_menu` (
  `id_access` int(11) NOT NULL AUTO_INCREMENT,
  `id_privilege` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `active` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_access`),
  KEY `id_user` (`id_privilege`,`id_menu`),
  KEY `id_menu` (`id_menu`)
) ENGINE=MyISAM AUTO_INCREMENT=184 DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

-- ----------------------------
-- Records of access_menu
-- ----------------------------
INSERT INTO `access_menu` VALUES ('42', '1', '13', null);
INSERT INTO `access_menu` VALUES ('64', '3', '30', 'Y');
INSERT INTO `access_menu` VALUES ('45', '3', '46', null);
INSERT INTO `access_menu` VALUES ('68', '3', '33', 'Y');
INSERT INTO `access_menu` VALUES ('23', '2', '25', null);
INSERT INTO `access_menu` VALUES ('67', '3', '32', 'Y');
INSERT INTO `access_menu` VALUES ('24', '2', '26', null);
INSERT INTO `access_menu` VALUES ('8', '2', '21', null);
INSERT INTO `access_menu` VALUES ('66', '3', '31', 'Y');
INSERT INTO `access_menu` VALUES ('63', '3', '48', null);
INSERT INTO `access_menu` VALUES ('26', '3', '42', null);
INSERT INTO `access_menu` VALUES ('44', '3', '45', null);
INSERT INTO `access_menu` VALUES ('62', '3', '47', null);
INSERT INTO `access_menu` VALUES ('43', '3', '44', null);
INSERT INTO `access_menu` VALUES ('65', '3', '53', 'N');
INSERT INTO `access_menu` VALUES ('69', '3', '34', 'Y');
INSERT INTO `access_menu` VALUES ('16', '2', '24', null);
INSERT INTO `access_menu` VALUES ('37', '3', '43', null);
INSERT INTO `access_menu` VALUES ('14', '2', '23', null);
INSERT INTO `access_menu` VALUES ('70', '3', '35', 'Y');
INSERT INTO `access_menu` VALUES ('2', '2', '20', null);
INSERT INTO `access_menu` VALUES ('71', '3', '36', 'Y');
INSERT INTO `access_menu` VALUES ('72', '3', '37', 'Y');
INSERT INTO `access_menu` VALUES ('73', '3', '38', 'Y');
INSERT INTO `access_menu` VALUES ('74', '3', '39', 'Y');
INSERT INTO `access_menu` VALUES ('75', '3', '40', 'Y');
INSERT INTO `access_menu` VALUES ('76', '3', '41', 'Y');
INSERT INTO `access_menu` VALUES ('77', '1', '14', 'Y');
INSERT INTO `access_menu` VALUES ('78', '1', '15', 'Y');
INSERT INTO `access_menu` VALUES ('79', '1', '55', 'Y');
INSERT INTO `access_menu` VALUES ('80', '3', '58', 'Y');
INSERT INTO `access_menu` VALUES ('81', '1', '54', 'Y');
INSERT INTO `access_menu` VALUES ('82', '1', '61', 'Y');
INSERT INTO `access_menu` VALUES ('83', '1', '60', 'Y');
INSERT INTO `access_menu` VALUES ('84', '1', '62', 'Y');
INSERT INTO `access_menu` VALUES ('85', '3', '62', 'Y');
INSERT INTO `access_menu` VALUES ('86', '3', '60', 'Y');
INSERT INTO `access_menu` VALUES ('87', '1', '63', 'Y');
INSERT INTO `access_menu` VALUES ('88', '1', '64', 'Y');
INSERT INTO `access_menu` VALUES ('89', '1', '65', 'Y');
INSERT INTO `access_menu` VALUES ('90', '1', '66', 'Y');
INSERT INTO `access_menu` VALUES ('91', '1', '67', 'Y');
INSERT INTO `access_menu` VALUES ('92', '3', '68', 'Y');
INSERT INTO `access_menu` VALUES ('93', '3', '69', 'Y');
INSERT INTO `access_menu` VALUES ('95', '3', '73', 'Y');
INSERT INTO `access_menu` VALUES ('96', '3', '74', 'Y');
INSERT INTO `access_menu` VALUES ('97', '3', '75', 'N');
INSERT INTO `access_menu` VALUES ('98', '3', '76', 'Y');
INSERT INTO `access_menu` VALUES ('99', '3', '77', 'Y');
INSERT INTO `access_menu` VALUES ('100', '3', '78', 'Y');
INSERT INTO `access_menu` VALUES ('101', '1', '79', 'Y');
INSERT INTO `access_menu` VALUES ('102', '3', '80', 'Y');
INSERT INTO `access_menu` VALUES ('103', '1', '81', 'N');
INSERT INTO `access_menu` VALUES ('104', '1', '82', 'Y');
INSERT INTO `access_menu` VALUES ('105', '1', '83', 'Y');
INSERT INTO `access_menu` VALUES ('106', '3', '84', 'N');
INSERT INTO `access_menu` VALUES ('107', '1', '30', 'Y');
INSERT INTO `access_menu` VALUES ('108', '1', '68', 'Y');
INSERT INTO `access_menu` VALUES ('109', '1', '31', 'Y');
INSERT INTO `access_menu` VALUES ('110', '3', '85', 'Y');
INSERT INTO `access_menu` VALUES ('111', '1', '86', 'Y');
INSERT INTO `access_menu` VALUES ('112', '3', '86', 'Y');
INSERT INTO `access_menu` VALUES ('113', '1', '87', 'Y');
INSERT INTO `access_menu` VALUES ('114', '3', '87', 'Y');
INSERT INTO `access_menu` VALUES ('115', '1', '88', 'Y');
INSERT INTO `access_menu` VALUES ('116', '3', '88', 'Y');
INSERT INTO `access_menu` VALUES ('117', '3', '89', 'Y');
INSERT INTO `access_menu` VALUES ('118', '1', '90', 'Y');
INSERT INTO `access_menu` VALUES ('119', '1', '91', 'Y');
INSERT INTO `access_menu` VALUES ('120', '1', '92', 'Y');
INSERT INTO `access_menu` VALUES ('121', '1', '93', 'Y');
INSERT INTO `access_menu` VALUES ('173', '1', '94', 'Y');
INSERT INTO `access_menu` VALUES ('123', '1', '95', 'Y');
INSERT INTO `access_menu` VALUES ('124', '5', '96', 'Y');
INSERT INTO `access_menu` VALUES ('125', '5', '97', 'Y');
INSERT INTO `access_menu` VALUES ('126', '5', '30', 'Y');
INSERT INTO `access_menu` VALUES ('127', '3', '98', 'Y');
INSERT INTO `access_menu` VALUES ('128', '5', '60', 'Y');
INSERT INTO `access_menu` VALUES ('129', '5', '62', 'Y');
INSERT INTO `access_menu` VALUES ('130', '5', '87', 'Y');
INSERT INTO `access_menu` VALUES ('131', '5', '86', 'Y');
INSERT INTO `access_menu` VALUES ('132', '5', '88', 'Y');
INSERT INTO `access_menu` VALUES ('133', '5', '98', 'Y');
INSERT INTO `access_menu` VALUES ('134', '6', '60', 'Y');
INSERT INTO `access_menu` VALUES ('135', '6', '87', 'Y');
INSERT INTO `access_menu` VALUES ('136', '6', '62', 'Y');
INSERT INTO `access_menu` VALUES ('137', '6', '99', 'Y');
INSERT INTO `access_menu` VALUES ('138', '6', '86', 'Y');
INSERT INTO `access_menu` VALUES ('139', '6', '98', 'Y');
INSERT INTO `access_menu` VALUES ('140', '6', '88', 'Y');
INSERT INTO `access_menu` VALUES ('141', '3', '100', 'Y');
INSERT INTO `access_menu` VALUES ('142', '5', '101', 'N');
INSERT INTO `access_menu` VALUES ('143', '3', '102', 'Y');
INSERT INTO `access_menu` VALUES ('144', '3', '103', 'Y');
INSERT INTO `access_menu` VALUES ('145', '3', '104', 'Y');
INSERT INTO `access_menu` VALUES ('146', '3', '105', 'N');
INSERT INTO `access_menu` VALUES ('147', '3', '101', 'Y');
INSERT INTO `access_menu` VALUES ('148', '3', '106', 'Y');
INSERT INTO `access_menu` VALUES ('149', '6', '106', 'Y');
INSERT INTO `access_menu` VALUES ('150', '3', '107', 'Y');
INSERT INTO `access_menu` VALUES ('151', '6', '107', 'Y');
INSERT INTO `access_menu` VALUES ('152', '6', '30', 'Y');
INSERT INTO `access_menu` VALUES ('153', '1', '32', 'Y');
INSERT INTO `access_menu` VALUES ('154', '1', '33', 'Y');
INSERT INTO `access_menu` VALUES ('155', '1', '34', 'Y');
INSERT INTO `access_menu` VALUES ('156', '1', '35', 'Y');
INSERT INTO `access_menu` VALUES ('157', '1', '36', 'Y');
INSERT INTO `access_menu` VALUES ('158', '1', '37', 'Y');
INSERT INTO `access_menu` VALUES ('159', '1', '39', 'Y');
INSERT INTO `access_menu` VALUES ('160', '1', '40', 'Y');
INSERT INTO `access_menu` VALUES ('161', '1', '41', 'Y');
INSERT INTO `access_menu` VALUES ('162', '1', '58', 'Y');
INSERT INTO `access_menu` VALUES ('163', '1', '74', 'Y');
INSERT INTO `access_menu` VALUES ('164', '1', '85', 'Y');
INSERT INTO `access_menu` VALUES ('165', '3', '108', 'Y');
INSERT INTO `access_menu` VALUES ('166', '3', '109', 'Y');
INSERT INTO `access_menu` VALUES ('167', '3', '110', 'Y');
INSERT INTO `access_menu` VALUES ('168', '3', '111', 'Y');
INSERT INTO `access_menu` VALUES ('169', '3', '112', 'Y');
INSERT INTO `access_menu` VALUES ('170', '6', '112', 'Y');
INSERT INTO `access_menu` VALUES ('171', '2', '54', 'N');
INSERT INTO `access_menu` VALUES ('172', '2', '64', 'N');
INSERT INTO `access_menu` VALUES ('174', '2', '95', 'Y');
INSERT INTO `access_menu` VALUES ('175', '1', '96', 'Y');
INSERT INTO `access_menu` VALUES ('176', '1', '97', 'Y');
INSERT INTO `access_menu` VALUES ('177', '1', '98', 'Y');
INSERT INTO `access_menu` VALUES ('178', '1', '99', 'Y');
INSERT INTO `access_menu` VALUES ('179', '1', '100', 'Y');
INSERT INTO `access_menu` VALUES ('180', '1', '101', 'Y');
INSERT INTO `access_menu` VALUES ('181', '1', '102', 'Y');
INSERT INTO `access_menu` VALUES ('182', '1', '103', 'Y');
INSERT INTO `access_menu` VALUES ('183', '1', '104', 'Y');

-- ----------------------------
-- Table structure for access_modul
-- ----------------------------
DROP TABLE IF EXISTS `access_modul`;
CREATE TABLE `access_modul` (
  `id_access` int(11) NOT NULL AUTO_INCREMENT,
  `id_privilege_modul` int(11) NOT NULL,
  `id_modul` int(11) NOT NULL,
  `active` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_access`),
  KEY `id_user` (`id_privilege_modul`,`id_modul`),
  KEY `id_menu` (`id_modul`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

-- ----------------------------
-- Records of access_modul
-- ----------------------------
INSERT INTO `access_modul` VALUES ('1', '6', '7', 'Y');
INSERT INTO `access_modul` VALUES ('2', '35', '7', 'Y');
INSERT INTO `access_modul` VALUES ('3', '37', '7', 'Y');
INSERT INTO `access_modul` VALUES ('4', '6', '5', 'N');
INSERT INTO `access_modul` VALUES ('5', '35', '5', 'N');
INSERT INTO `access_modul` VALUES ('6', '37', '5', 'N');

-- ----------------------------
-- Table structure for access_page
-- ----------------------------
DROP TABLE IF EXISTS `access_page`;
CREATE TABLE `access_page` (
  `id_access` int(11) NOT NULL AUTO_INCREMENT,
  `id_privilege_page` int(11) NOT NULL,
  `id_page` int(11) NOT NULL,
  `active` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_access`),
  KEY `id_user` (`id_privilege_page`,`id_page`),
  KEY `id_menu` (`id_page`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

-- ----------------------------
-- Records of access_page
-- ----------------------------
INSERT INTO `access_page` VALUES ('1', '35', '54', 'Y');
INSERT INTO `access_page` VALUES ('2', '6', '54', 'Y');
INSERT INTO `access_page` VALUES ('3', '37', '54', 'Y');
INSERT INTO `access_page` VALUES ('4', '6', '53', 'Y');
INSERT INTO `access_page` VALUES ('5', '35', '53', 'Y');
INSERT INTO `access_page` VALUES ('6', '37', '53', 'N');
INSERT INTO `access_page` VALUES ('7', '6', '18', 'Y');
INSERT INTO `access_page` VALUES ('8', '35', '18', 'Y');
INSERT INTO `access_page` VALUES ('9', '37', '18', 'Y');
INSERT INTO `access_page` VALUES ('10', '6', '22', 'N');
INSERT INTO `access_page` VALUES ('11', '35', '22', 'Y');
INSERT INTO `access_page` VALUES ('12', '37', '22', 'N');
INSERT INTO `access_page` VALUES ('13', '6', '30', 'Y');
INSERT INTO `access_page` VALUES ('14', '35', '30', 'Y');
INSERT INTO `access_page` VALUES ('15', '37', '30', 'Y');

-- ----------------------------
-- Table structure for access_subpage
-- ----------------------------
DROP TABLE IF EXISTS `access_subpage`;
CREATE TABLE `access_subpage` (
  `id_access` int(11) NOT NULL AUTO_INCREMENT,
  `id_privilege_subpage` int(11) NOT NULL,
  `id_subpage` int(11) NOT NULL,
  `active` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id_access`),
  KEY `id_user` (`id_privilege_subpage`,`id_subpage`),
  KEY `id_menu` (`id_subpage`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

-- ----------------------------
-- Records of access_subpage
-- ----------------------------
INSERT INTO `access_subpage` VALUES ('1', '6', '59', 'Y');
INSERT INTO `access_subpage` VALUES ('2', '35', '59', 'Y');
INSERT INTO `access_subpage` VALUES ('3', '37', '59', 'Y');
INSERT INTO `access_subpage` VALUES ('4', '37', '58', 'Y');
INSERT INTO `access_subpage` VALUES ('5', '6', '58', 'Y');
INSERT INTO `access_subpage` VALUES ('6', '35', '58', 'Y');
INSERT INTO `access_subpage` VALUES ('7', '35', '72', 'Y');
INSERT INTO `access_subpage` VALUES ('8', '35', '3', 'Y');
INSERT INTO `access_subpage` VALUES ('9', '35', '73', 'Y');
INSERT INTO `access_subpage` VALUES ('10', '35', '74', 'Y');
INSERT INTO `access_subpage` VALUES ('11', '6', '62', 'Y');
INSERT INTO `access_subpage` VALUES ('12', '35', '62', 'Y');
INSERT INTO `access_subpage` VALUES ('13', '6', '56', 'Y');
INSERT INTO `access_subpage` VALUES ('14', '35', '56', 'Y');
INSERT INTO `access_subpage` VALUES ('15', '6', '75', 'Y');
INSERT INTO `access_subpage` VALUES ('16', '35', '75', 'Y');
INSERT INTO `access_subpage` VALUES ('17', '37', '75', 'Y');
INSERT INTO `access_subpage` VALUES ('18', '6', '76', 'Y');
INSERT INTO `access_subpage` VALUES ('19', '35', '76', 'Y');
INSERT INTO `access_subpage` VALUES ('20', '37', '76', 'Y');

-- ----------------------------
-- Table structure for adm_jabatan
-- ----------------------------
DROP TABLE IF EXISTS `adm_jabatan`;
CREATE TABLE `adm_jabatan` (
  `idx` int(11) NOT NULL AUTO_INCREMENT,
  `jbt_id` varchar(20) DEFAULT NULL,
  `jbt_nama` varchar(25) DEFAULT NULL,
  `jbt_penilaian` enum('PENILAIAN','TIDAK') DEFAULT 'PENILAIAN',
  `jbt_status` enum('A','T') DEFAULT 'A',
  `jbt_upd` varchar(10) DEFAULT NULL,
  `jbt_lup` datetime DEFAULT NULL,
  PRIMARY KEY (`idx`),
  KEY `idx_jbt` (`jbt_id`),
  KEY `idx_` (`jbt_penilaian`),
  KEY `idx_jbtstatus` (`jbt_status`)
) ENGINE=MyISAM AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of adm_jabatan
-- ----------------------------
INSERT INTO `adm_jabatan` VALUES ('37', 'WEB', 'WEB ADMIN', 'PENILAIAN', '', null, '2016-01-13 11:19:36');
INSERT INTO `adm_jabatan` VALUES ('6', 'ADM', 'ADMINISTRATOR', 'TIDAK', 'A', 'admin', '2013-01-02 17:14:39');
INSERT INTO `adm_jabatan` VALUES ('35', 'SPR', 'SUPER ADMIN', 'PENILAIAN', '', null, '2016-01-06 05:23:37');

-- ----------------------------
-- Table structure for adm_kategori_page
-- ----------------------------
DROP TABLE IF EXISTS `adm_kategori_page`;
CREATE TABLE `adm_kategori_page` (
  `id_kategori_page` int(10) NOT NULL AUTO_INCREMENT,
  `jenis_page` varchar(100) NOT NULL,
  `inisial` varchar(200) NOT NULL,
  PRIMARY KEY (`id_kategori_page`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of adm_kategori_page
-- ----------------------------
INSERT INTO `adm_kategori_page` VALUES ('1', 'Admin Menu', 'admin-menu');
INSERT INTO `adm_kategori_page` VALUES ('2', 'Website Menu', 'website-menu');

-- ----------------------------
-- Table structure for adm_login
-- ----------------------------
DROP TABLE IF EXISTS `adm_login`;
CREATE TABLE `adm_login` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `userid` varchar(255) DEFAULT '',
  `password` text,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `img` blob,
  `userlevel` varchar(255) DEFAULT NULL,
  `status` double DEFAULT NULL,
  `nama_lengkap` text,
  `alamat` text,
  `no_tlp` varchar(20) DEFAULT NULL,
  `lup` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of adm_login
-- ----------------------------
INSERT INTO `adm_login` VALUES ('1', 'dodo', '721c6ff80a6d3e4ad4ffa52a04c60085', 'dodo', 'dodowijaya2014@gmail.com', 0x646F646F2D312E6A7067, '35', '0', 'Dodo Wijaya', 'depok', '0897123439', '2017-07-13 13:14:21');
INSERT INTO `adm_login` VALUES ('2', 'ayu', '29c65f781a1068a41f735e1b092546de', 'ayu', 'ayu@gmail.com', 0x6179752D32393830302E6A7067, '37', '0', 'Auliya Wahyuni', 'Fatmawati', '088782329', '2017-09-07 23:28:44');

-- ----------------------------
-- Table structure for adm_modul
-- ----------------------------
DROP TABLE IF EXISTS `adm_modul`;
CREATE TABLE `adm_modul` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori_page` int(11) DEFAULT NULL,
  `parent` int(3) DEFAULT NULL,
  `module_name` varchar(130) DEFAULT NULL,
  `icon_module` varchar(100) DEFAULT NULL,
  `status_module` varchar(5) DEFAULT NULL,
  `urutan_module` int(20) DEFAULT NULL,
  `lup` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of adm_modul
-- ----------------------------
INSERT INTO `adm_modul` VALUES ('5', '1', '0', 'Dashboard', 'access_alarms e191', 'Y', '1', null);
INSERT INTO `adm_modul` VALUES ('7', '1', '0', 'Setting', 'access_alarms e191', 'Y', '2', null);

-- ----------------------------
-- Table structure for adm_page
-- ----------------------------
DROP TABLE IF EXISTS `adm_page`;
CREATE TABLE `adm_page` (
  `id_page` int(10) NOT NULL AUTO_INCREMENT,
  `id_kategori_page` int(10) NOT NULL,
  `id_modul` int(10) DEFAULT NULL,
  `nama_page` varchar(50) NOT NULL,
  `link` varchar(200) NOT NULL,
  `urutan` int(11) NOT NULL,
  `status_page` enum('Y','N') NOT NULL DEFAULT 'Y',
  `icon` text,
  PRIMARY KEY (`id_page`)
) ENGINE=MyISAM AUTO_INCREMENT=72 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of adm_page
-- ----------------------------
INSERT INTO `adm_page` VALUES ('53', '1', '7', 'User', 'users', '2', 'Y', 'battery_charging_full e1a3');
INSERT INTO `adm_page` VALUES ('22', '1', '7', 'Settings', '', '3', 'Y', 'brightness_high e1ac');
INSERT INTO `adm_page` VALUES ('18', '1', '7', 'Home', 'home', '1', 'Y', 'home e88a');
INSERT INTO `adm_page` VALUES ('30', '1', '7', 'Logout', 'login/logout', '200', 'Y', 'power e63c');
INSERT INTO `adm_page` VALUES ('54', '1', '7', 'Content', '', '10', 'Y', 'info_outline e88f');

-- ----------------------------
-- Table structure for adm_privilage_page
-- ----------------------------
DROP TABLE IF EXISTS `adm_privilage_page`;
CREATE TABLE `adm_privilage_page` (
  `id_privilage_page` int(11) NOT NULL AUTO_INCREMENT,
  `id_page` varchar(100) DEFAULT NULL,
  `id_level` varchar(100) DEFAULT NULL,
  `aktif` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_privilage_page`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of adm_privilage_page
-- ----------------------------

-- ----------------------------
-- Table structure for adm_privilage_subpage
-- ----------------------------
DROP TABLE IF EXISTS `adm_privilage_subpage`;
CREATE TABLE `adm_privilage_subpage` (
  `id_privilage_subpage` int(11) NOT NULL AUTO_INCREMENT,
  `id_subpage` varchar(100) DEFAULT NULL,
  `id_level` varchar(100) DEFAULT NULL,
  `aktif` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_privilage_subpage`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of adm_privilage_subpage
-- ----------------------------

-- ----------------------------
-- Table structure for adm_sub_page
-- ----------------------------
DROP TABLE IF EXISTS `adm_sub_page`;
CREATE TABLE `adm_sub_page` (
  `id_subpage` int(10) NOT NULL AUTO_INCREMENT,
  `id_page` int(10) NOT NULL,
  `nama_subpage` varchar(100) NOT NULL,
  `link_subpage` varchar(100) NOT NULL,
  `urutan_subpage` int(11) NOT NULL,
  `status_subpage` enum('Y','N') NOT NULL DEFAULT 'Y',
  `subpage_icon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_subpage`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of adm_sub_page
-- ----------------------------
INSERT INTO `adm_sub_page` VALUES ('3', '22', 'Page', 'page', '3', 'Y', 'center_focus_strong e3b4');
INSERT INTO `adm_sub_page` VALUES ('59', '54', 'Menu', 'pagetree_menu', '2', 'Y', 'first_page e5dc');
INSERT INTO `adm_sub_page` VALUES ('56', '53', 'Users', 'users', '2', 'Y', 'color_lens e3b7');
INSERT INTO `adm_sub_page` VALUES ('74', '22', 'Privilege', 'privilege', '5', 'Y', 'add_location e567');
INSERT INTO `adm_sub_page` VALUES ('73', '22', 'Module', 'modul', '2', 'Y', 'desktop_windows e30c');
INSERT INTO `adm_sub_page` VALUES ('62', '53', 'Level', 'level', '1', 'Y', 'bookmark_border e867');
INSERT INTO `adm_sub_page` VALUES ('75', '54', 'Article', 'content_article', '3', 'Y', 'code e86f');
INSERT INTO `adm_sub_page` VALUES ('72', '22', 'Sub Page', 'subpage', '4', 'Y', 'cloud_done e2bf');
INSERT INTO `adm_sub_page` VALUES ('76', '54', 'Article Category', 'article_category', '2', 'Y', 'beach_access eb3e');

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id_article` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `article_category` int(255) DEFAULT NULL,
  `kategori` text NOT NULL,
  `url_article` varchar(100) NOT NULL,
  `headline` varchar(5) NOT NULL DEFAULT 'N',
  `running_news` varchar(5) NOT NULL DEFAULT 'N',
  `isi_article` longtext NOT NULL,
  `isi_article_eng` longtext NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `video` varchar(100) NOT NULL,
  `poster_video` varchar(100) NOT NULL,
  `embbed_video` varchar(500) NOT NULL,
  `video_active` varchar(5) NOT NULL DEFAULT 'D',
  `gen_code_article` varchar(200) NOT NULL,
  `gen_code_photo` varchar(200) NOT NULL,
  `gen_code_video` varchar(200) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT 'Y',
  `dibaca` int(5) NOT NULL,
  `id_menu` int(100) NOT NULL,
  `id_sidemenu` int(11) NOT NULL,
  `menu_stats` varchar(100) NOT NULL,
  `sidemenu_stats` varchar(50) NOT NULL,
  `document` varchar(500) NOT NULL,
  `komentar_status` varchar(5) NOT NULL DEFAULT 'N',
  PRIMARY KEY (`id_article`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('1', '1', 'Colosseum Hotel', '2', '1', 'colosseum-hotel', '', '', ' Lorem isum dolor sit amet, consectetuer adiiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam urus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla retium mi et risus. Fusce mi ede, temor id, cursus ac, ullamcorer nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec ellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros ede bibendum sem, in temus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut lacerat elementum, lectus nisl aliquam velit, temor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turis. Ut ultrices, isum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turis mauris non enim. Nam turis. Susendisse lacinia. Curabitur ac tortor ut isum egestas elementum. Nunc imerdiet gravida mauris', ' Lorem isum dolor sit amet, consectetuer adiiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam urus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla retium mi et risus. Fusce mi ede, temor id, cursus ac, ullamcorer nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec ellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros ede bibendum sem, in temus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut lacerat elementum, lectus nisl aliquam velit, temor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turis. Ut ultrices, isum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turis mauris non enim. Nam turis. Susendisse lacinia. Curabitur ac tortor ut isum egestas elementum. Nunc imerdiet gravida mauris          ', 'Kamis', '2017-09-07', '05:54:53', '4F54FEFE', '', '', '', '', '', '', '', 'on', '0', '0', '0', '', '', '', '');
INSERT INTO `article` VALUES ('2', '1', 'Video Tour', '2', '1', 'video-tour', '', '', ' \r\n\r\n\r\nLorem isum dolor sit amet, consectetuer adiiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam urus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla retium mi et risus. Fusce mi ede, temor id, cursus ac, ullamcorer nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec ellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros ede bibendum sem, in temus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut lacerat elementum, lectus nisl aliquam velit, temor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turis. Ut ultrices, isum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turis mauris non enim. Nam turis. Susendisse lacinia. Curabitur ac tortor ut isum egestas elementum. Nunc imerdiet gravida mauris\r\n\r\n\r\n', ' \r\n\r\n\r\nLorem isum dolor sit amet, consectetuer adiiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam urus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla retium mi et risus. Fusce mi ede, temor id, cursus ac, ullamcorer nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec ellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros ede bibendum sem, in temus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut lacerat elementum, lectus nisl aliquam velit, temor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turis. Ut ultrices, isum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turis mauris non enim. Nam turis. Susendisse lacinia. Curabitur ac tortor ut isum egestas elementum. Nunc imerdiet gravida mauris\r\n\r\n\r\n    ', 'Kamis', '2017-09-06', '11:32:28', 'BD4A9DBE.png', '', '', '', '', '', '', '', 'on', '0', '0', '0', '', '', '', '');
INSERT INTO `article` VALUES ('5', '1', 'Our History', '2', '1', 'our-history', '', '', 'Lorem isum dolor sit amet, consectetur adiisicing elit. At cum eius eos fugiat illo illum rovident, quas qui quisquam quod sint velit volutate volutatum. Ad aeriam asernatur atque aut consequatur distinctio earum ex fuga fugit hic imedit iure libero minima molestiae nihil obcaecati officia erferendis ersiciatis ossimus, quam qui quibusdam quidem reiciendis rem reellendus, sint temora veniam vero volutas volutatum.\r\n', 'Lorem isum dolor sit amet, consectetur adiisicing elit. At cum eius eos fugiat illo illum rovident, quas qui quisquam quod sint velit volutate volutatum. Ad aeriam asernatur atque aut consequatur distinctio earum ex fuga fugit hic imedit iure libero minima molestiae nihil obcaecati officia erferendis ersiciatis ossimus, quam qui quibusdam quidem reiciendis rem reellendus, sint temora veniam vero volutas volutatum.\r\n ', 'Kamis', '2017-09-06', '08:08:24', '7AB8A0C3', '', '', '', '', '', '', '', 'on', '0', '0', '0', '', '', '', '');
INSERT INTO `article` VALUES ('6', '1', 'Colosseum Hotel', '3', '1', 'colosseum-hotel', '', '', '\\\'<p><img><>>>\\\'', '\\\'<p><img></><><>> >\\\' ', 'Kamis', '2017-09-07', '05:54:28', 'C1E014C5', '', '', '', '', '', '', '', 'on', '0', '0', '0', '', '', '', '');
INSERT INTO `article` VALUES ('7', '1', 'International Restaurant', '3', '1', 'international-restaurant', '', '', '\'\'', '\'\' ', 'Kamis', '2017-09-06', '08:07:57', '99C94523', '', '', '', '', '', '', '', 'on', '0', '0', '0', '', '', '', '');
INSERT INTO `article` VALUES ('8', '1', 'Meeting Hall', '3', '1', 'meeting-hall', '', '', '\'\'', '\'\'', 'Kamis', '2017-09-06', '06:29:41', 'D549D30C.jpg', '', '', '', '', '', '', '', 'on', '0', '0', '0', '', '', '', '');
INSERT INTO `article` VALUES ('9', '1', 'Luxury Bars', '3', '1', 'luxury-bars', '', '', '\'\'', '\'\' ', 'Kamis', '2017-09-06', '06:38:13', 'D11DF48F', '', '', '', '', '', '', '', 'on', '0', '0', '0', '', '', '', '');
INSERT INTO `article` VALUES ('10', '1', 'Our Luxury Rooms', '4', '1', 'our-luxury-rooms', '', '', '\'\'', '\'\'', 'Kamis', '2017-09-06', '06:33:36', '39CFA067', '', '', '', '', '', '', '', 'on', '0', '0', '0', '', '', '', '');
INSERT INTO `article` VALUES ('11', '1', 'Single Room', '4', '1', 'single-room', '', '', '\'\'', '\'\' ', 'Kamis', '2017-09-06', '06:39:01', '5D2760E7', '', '', '', '', '', '', '', 'on', '0', '0', '0', '', '', '', '');
INSERT INTO `article` VALUES ('12', '1', 'One-bedroom Suite', '4', '1', 'one-bedroom-suite', '', '', '\'<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\'', '\'<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas elementum. Nunc imperdiet gravida mauris.</p>\'', 'Kamis', '2017-09-07', '04:35:01', '3745C20C', '', '', '', '', '', '', '', 'on', '0', '0', '0', '', '', '', '');
INSERT INTO `article` VALUES ('13', '1', 'Two-bedroom Suite', '4', '1', 'two-bedroom-suite', '', '', '&lt;html&gt;&lt;head&gt; &lt;title&gt;&lt;/title&gt;&lt;/head&gt;&lt;body&gt;<h1>Two-bedroom Suite<br>Starting from :<br> <br>$480</h1><ul> <li>Breakfast :<br>  <br> Included</li> <li>Room Size :<br>  <br> 60 sqm</li> <li>Max People :<br>  <br> 3</li> <li>View :<br>  <br> Sea</li> <li>Facilities :<br>  <br> Free Wifi, Free Mini Bar, Room Security</li></ul><p><br>More Info<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cum eius eos fugiat illo illum provident, quas qui quisquam quod sint velit voluptate voluptatum. Ad aperiam aspernatur atque aut consequatur distinctio earum ex fuga fugit hic impedit iure libero minima molestiae nihil obcaecati officia perferendis perspiciatis possimus, quam qui quibusdam quidem reiciendis rem repellendus, sint tempora veniam vero voluptas voluptatum.</p>&lt;/body&gt;&lt;/html&gt;', '&lt;html&gt;&lt;head&gt; &lt;title&gt;&lt;/title&gt;&lt;/head&gt;&lt;body&gt;<h1>Two-bedroom Suite<br>Starting from :<br> </h1><table align=\\\"\\\\\\\\\\\" border=\\\"\\\\\\\\\\\" cellpadding=\\\"\\\\\\\\\\\" cellspacing=\\\"\\\\\\\\\\\"> <thead>  <tr>   <th scope=\\\"\\\\\\\\\\\">A</th>   <th scope=\\\"\\\\\\\\\\\">B</th>  </tr> </thead> <tbody>  <tr>   <td>C</td>   <td>D</td>  </tr>  <tr>   <td>E</td>   <td>   <table border=\\\"1\\\" cellpadding=\\\"1\\\" cellspacing=\\\"1\\\" xss=removed>    <tbody>     <tr>      <td> </td>      <td> </td>     </tr>     <tr>      <td> </td>      <td> </td>     </tr>     <tr>      <td> </td>      <td> </td>     </tr>    </tbody>   </table>   <table border=\\\"\\\\\\\\\\\" cellpadding=\\\"\\\\\\\\\\\" cellspacing=\\\"\\\\\\\\\\\">    <tbody>     <tr>      <td> </td>      <td> </td>     </tr>     <tr>      <td> </td>      <td> </td>     </tr>     <tr>      <td> </td>      <td> </td>     </tr>    </tbody>   </table>   </td>  </tr> </tbody></table><h1><br>$480</h1><ul> <li>Breakfast :<br>  <br> Included</li> <li>Room Size :<br>  <br> 60 sqm</li> <li>Max People :<br>  <br> 3</li> <li>View :<br>  <br> Sea</li> <li>Facilities :<br>  <br> Free Wifi, Free Mini Bar, Room Security</li></ul><p><br>More Info<br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At cum eius eos fugiat illo illum provident, quas qui quisquam quod sint velit voluptate voluptatum. Ad aperiam aspernatur atque aut consequatur distinctio earum ex fuga fugit hic impedit iure libero minima molestiae nihil obcaecati officia perferendis perspiciatis possimus, quam qui quibusdam quidem reiciendis rem repellendus, sint tempora veniam vero voluptas voluptatum.</p>&lt;/body&gt;&lt;/html&gt;', 'Kamis', '2017-09-07', '06:07:39', '6168343B', '', '', '', '', '', '', '', 'on', '0', '0', '0', '', '', '', '');

-- ----------------------------
-- Table structure for article_category
-- ----------------------------
DROP TABLE IF EXISTS `article_category`;
CREATE TABLE `article_category` (
  `id_category_article` int(20) NOT NULL AUTO_INCREMENT,
  `article_category_name` text,
  `status` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id_category_article`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of article_category
-- ----------------------------
INSERT INTO `article_category` VALUES ('1', 'Event', 'on');
INSERT INTO `article_category` VALUES ('2', 'About', 'on');
INSERT INTO `article_category` VALUES ('3', 'Our Services', 'on');
INSERT INTO `article_category` VALUES ('4', 'Rooms', 'on');

-- ----------------------------
-- Table structure for company
-- ----------------------------
DROP TABLE IF EXISTS `company`;
CREATE TABLE `company` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT 'Nama',
  `logo` varchar(54) DEFAULT NULL,
  `address` varchar(255) NOT NULL DEFAULT '' COMMENT 'Alamat',
  `province_id` int(11) NOT NULL COMMENT 'Provinsi',
  `city_id` int(11) NOT NULL COMMENT 'Kota',
  `district_id` int(11) NOT NULL COMMENT 'Kecamatan',
  `subdistrict_id` int(11) NOT NULL COMMENT 'Keluarahan',
  `postal_code` varchar(5) NOT NULL DEFAULT '',
  `tos` text,
  `about_us` text,
  `registration_email` text,
  `forget_password_email` text,
  `order_email` text,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `upd` int(10) DEFAULT NULL,
  `lup` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of company
-- ----------------------------
INSERT INTO `company` VALUES ('7', 'Wifi Lab', 'logo-garam.jpg', 'Jakarta', '0', '0', '0', '0', '', '', 'Enterprise Resource Planning', null, null, '', '0', '4', '2015-08-05 19:44:35');

-- ----------------------------
-- Table structure for content_category
-- ----------------------------
DROP TABLE IF EXISTS `content_category`;
CREATE TABLE `content_category` (
  `id_category` int(20) NOT NULL AUTO_INCREMENT,
  `category_name` text,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of content_category
-- ----------------------------
INSERT INTO `content_category` VALUES ('1', 'Website Content');
INSERT INTO `content_category` VALUES ('2', 'Static Content');

-- ----------------------------
-- Table structure for icon
-- ----------------------------
DROP TABLE IF EXISTS `icon`;
CREATE TABLE `icon` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `icon` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=933 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of icon
-- ----------------------------
INSERT INTO `icon` VALUES ('1', '3d_rotation e84d');
INSERT INTO `icon` VALUES ('2', 'ac_unit eb3b');
INSERT INTO `icon` VALUES ('3', 'access_alarm e190');
INSERT INTO `icon` VALUES ('4', 'access_alarms e191');
INSERT INTO `icon` VALUES ('5', 'access_time e192');
INSERT INTO `icon` VALUES ('6', 'accessibility e84e');
INSERT INTO `icon` VALUES ('7', 'accessible e914');
INSERT INTO `icon` VALUES ('8', 'account_balance e84f');
INSERT INTO `icon` VALUES ('9', 'account_balance_wallet e850');
INSERT INTO `icon` VALUES ('10', 'account_box e851');
INSERT INTO `icon` VALUES ('11', 'account_circle e853');
INSERT INTO `icon` VALUES ('12', 'adb e60e');
INSERT INTO `icon` VALUES ('13', 'add e145');
INSERT INTO `icon` VALUES ('14', 'add_a_photo e439');
INSERT INTO `icon` VALUES ('15', 'add_alarm e193');
INSERT INTO `icon` VALUES ('16', 'add_alert e003');
INSERT INTO `icon` VALUES ('17', 'add_box e146');
INSERT INTO `icon` VALUES ('18', 'add_circle e147');
INSERT INTO `icon` VALUES ('19', 'add_circle_outline e148');
INSERT INTO `icon` VALUES ('20', 'add_location e567');
INSERT INTO `icon` VALUES ('21', 'add_shopping_cart e854');
INSERT INTO `icon` VALUES ('22', 'add_to_photos e39d');
INSERT INTO `icon` VALUES ('23', 'add_to_queue e05c');
INSERT INTO `icon` VALUES ('24', 'adjust e39e');
INSERT INTO `icon` VALUES ('25', 'airline_seat_flat e630');
INSERT INTO `icon` VALUES ('26', 'airline_seat_flat_angled e631');
INSERT INTO `icon` VALUES ('27', 'airline_seat_individual_suite e632');
INSERT INTO `icon` VALUES ('28', 'airline_seat_legroom_extra e633');
INSERT INTO `icon` VALUES ('29', 'airline_seat_legroom_normal e634');
INSERT INTO `icon` VALUES ('30', 'airline_seat_legroom_reduced e635');
INSERT INTO `icon` VALUES ('31', 'airline_seat_recline_extra e636');
INSERT INTO `icon` VALUES ('32', 'airline_seat_recline_normal e637');
INSERT INTO `icon` VALUES ('33', 'airplanemode_active e195');
INSERT INTO `icon` VALUES ('34', 'airplanemode_inactive e194');
INSERT INTO `icon` VALUES ('35', 'airplay e055');
INSERT INTO `icon` VALUES ('36', 'airport_shuttle eb3c');
INSERT INTO `icon` VALUES ('37', 'alarm e855');
INSERT INTO `icon` VALUES ('38', 'alarm_add e856');
INSERT INTO `icon` VALUES ('39', 'alarm_off e857');
INSERT INTO `icon` VALUES ('40', 'alarm_on e858');
INSERT INTO `icon` VALUES ('41', 'album e019');
INSERT INTO `icon` VALUES ('42', 'all_inclusive eb3d');
INSERT INTO `icon` VALUES ('43', 'all_out e90b');
INSERT INTO `icon` VALUES ('44', 'android e859');
INSERT INTO `icon` VALUES ('45', 'announcement e85a');
INSERT INTO `icon` VALUES ('46', 'apps e5c3');
INSERT INTO `icon` VALUES ('47', 'archive e149');
INSERT INTO `icon` VALUES ('48', 'arrow_back e5c4');
INSERT INTO `icon` VALUES ('49', 'arrow_downward e5db');
INSERT INTO `icon` VALUES ('50', 'arrow_drop_down e5c5');
INSERT INTO `icon` VALUES ('51', 'arrow_drop_down_circle e5c6');
INSERT INTO `icon` VALUES ('52', 'arrow_drop_up e5c7');
INSERT INTO `icon` VALUES ('53', 'arrow_forward e5c8');
INSERT INTO `icon` VALUES ('54', 'arrow_upward e5d8');
INSERT INTO `icon` VALUES ('55', 'art_track e060');
INSERT INTO `icon` VALUES ('56', 'aspect_ratio e85b');
INSERT INTO `icon` VALUES ('57', 'assessment e85c');
INSERT INTO `icon` VALUES ('58', 'assignment e85d');
INSERT INTO `icon` VALUES ('59', 'assignment_ind e85e');
INSERT INTO `icon` VALUES ('60', 'assignment_late e85f');
INSERT INTO `icon` VALUES ('61', 'assignment_return e860');
INSERT INTO `icon` VALUES ('62', 'assignment_returned e861');
INSERT INTO `icon` VALUES ('63', 'assignment_turned_in e862');
INSERT INTO `icon` VALUES ('64', 'assistant e39f');
INSERT INTO `icon` VALUES ('65', 'assistant_photo e3a0');
INSERT INTO `icon` VALUES ('66', 'attach_file e226');
INSERT INTO `icon` VALUES ('67', 'attach_money e227');
INSERT INTO `icon` VALUES ('68', 'attachment e2bc');
INSERT INTO `icon` VALUES ('69', 'audiotrack e3a1');
INSERT INTO `icon` VALUES ('70', 'autorenew e863');
INSERT INTO `icon` VALUES ('71', 'av_timer e01b');
INSERT INTO `icon` VALUES ('72', 'backspace e14a');
INSERT INTO `icon` VALUES ('73', 'backup e864');
INSERT INTO `icon` VALUES ('74', 'battery_alert e19c');
INSERT INTO `icon` VALUES ('75', 'battery_charging_full e1a3');
INSERT INTO `icon` VALUES ('76', 'battery_full e1a4');
INSERT INTO `icon` VALUES ('77', 'battery_std e1a5');
INSERT INTO `icon` VALUES ('78', 'battery_unknown e1a6');
INSERT INTO `icon` VALUES ('79', 'beach_access eb3e');
INSERT INTO `icon` VALUES ('80', 'beenhere e52d');
INSERT INTO `icon` VALUES ('81', 'block e14b');
INSERT INTO `icon` VALUES ('82', 'bluetooth e1a7');
INSERT INTO `icon` VALUES ('83', 'bluetooth_audio e60f');
INSERT INTO `icon` VALUES ('84', 'bluetooth_connected e1a8');
INSERT INTO `icon` VALUES ('85', 'bluetooth_disabled e1a9');
INSERT INTO `icon` VALUES ('86', 'bluetooth_searching e1aa');
INSERT INTO `icon` VALUES ('87', 'blur_circular e3a2');
INSERT INTO `icon` VALUES ('88', 'blur_linear e3a3');
INSERT INTO `icon` VALUES ('89', 'blur_off e3a4');
INSERT INTO `icon` VALUES ('90', 'blur_on e3a5');
INSERT INTO `icon` VALUES ('91', 'book e865');
INSERT INTO `icon` VALUES ('92', 'bookmark e866');
INSERT INTO `icon` VALUES ('93', 'bookmark_border e867');
INSERT INTO `icon` VALUES ('94', 'border_all e228');
INSERT INTO `icon` VALUES ('95', 'border_bottom e229');
INSERT INTO `icon` VALUES ('96', 'border_clear e22a');
INSERT INTO `icon` VALUES ('97', 'border_color e22b');
INSERT INTO `icon` VALUES ('98', 'border_horizontal e22c');
INSERT INTO `icon` VALUES ('99', 'border_inner e22d');
INSERT INTO `icon` VALUES ('100', 'border_left e22e');
INSERT INTO `icon` VALUES ('101', 'border_outer e22f');
INSERT INTO `icon` VALUES ('102', 'border_right e230');
INSERT INTO `icon` VALUES ('103', 'border_style e231');
INSERT INTO `icon` VALUES ('104', 'border_top e232');
INSERT INTO `icon` VALUES ('105', 'border_vertical e233');
INSERT INTO `icon` VALUES ('106', 'branding_watermark e06b');
INSERT INTO `icon` VALUES ('107', 'brightness_1 e3a6');
INSERT INTO `icon` VALUES ('108', 'brightness_2 e3a7');
INSERT INTO `icon` VALUES ('109', 'brightness_3 e3a8');
INSERT INTO `icon` VALUES ('110', 'brightness_4 e3a9');
INSERT INTO `icon` VALUES ('111', 'brightness_5 e3aa');
INSERT INTO `icon` VALUES ('112', 'brightness_6 e3ab');
INSERT INTO `icon` VALUES ('113', 'brightness_7 e3ac');
INSERT INTO `icon` VALUES ('114', 'brightness_auto e1ab');
INSERT INTO `icon` VALUES ('115', 'brightness_high e1ac');
INSERT INTO `icon` VALUES ('116', 'brightness_low e1ad');
INSERT INTO `icon` VALUES ('117', 'brightness_medium e1ae');
INSERT INTO `icon` VALUES ('118', 'broken_image e3ad');
INSERT INTO `icon` VALUES ('119', 'brush e3ae');
INSERT INTO `icon` VALUES ('120', 'bubble_chart e6dd');
INSERT INTO `icon` VALUES ('121', 'bug_report e868');
INSERT INTO `icon` VALUES ('122', 'build e869');
INSERT INTO `icon` VALUES ('123', 'burst_mode e43c');
INSERT INTO `icon` VALUES ('124', 'business e0af');
INSERT INTO `icon` VALUES ('125', 'business_center eb3f');
INSERT INTO `icon` VALUES ('126', 'cached e86a');
INSERT INTO `icon` VALUES ('127', 'cake e7e9');
INSERT INTO `icon` VALUES ('128', 'call e0b0');
INSERT INTO `icon` VALUES ('129', 'call_end e0b1');
INSERT INTO `icon` VALUES ('130', 'call_made e0b2');
INSERT INTO `icon` VALUES ('131', 'call_merge e0b3');
INSERT INTO `icon` VALUES ('132', 'call_missed e0b4');
INSERT INTO `icon` VALUES ('133', 'call_missed_outgoing e0e4');
INSERT INTO `icon` VALUES ('134', 'call_received e0b5');
INSERT INTO `icon` VALUES ('135', 'call_split e0b6');
INSERT INTO `icon` VALUES ('136', 'call_to_action e06c');
INSERT INTO `icon` VALUES ('137', 'camera e3af');
INSERT INTO `icon` VALUES ('138', 'camera_alt e3b0');
INSERT INTO `icon` VALUES ('139', 'camera_enhance e8fc');
INSERT INTO `icon` VALUES ('140', 'camera_front e3b1');
INSERT INTO `icon` VALUES ('141', 'camera_rear e3b2');
INSERT INTO `icon` VALUES ('142', 'camera_roll e3b3');
INSERT INTO `icon` VALUES ('143', 'cancel e5c9');
INSERT INTO `icon` VALUES ('144', 'card_giftcard e8f6');
INSERT INTO `icon` VALUES ('145', 'card_membership e8f7');
INSERT INTO `icon` VALUES ('146', 'card_travel e8f8');
INSERT INTO `icon` VALUES ('147', 'casino eb40');
INSERT INTO `icon` VALUES ('148', 'cast e307');
INSERT INTO `icon` VALUES ('149', 'cast_connected e308');
INSERT INTO `icon` VALUES ('150', 'center_focus_strong e3b4');
INSERT INTO `icon` VALUES ('151', 'center_focus_weak e3b5');
INSERT INTO `icon` VALUES ('152', 'change_history e86b');
INSERT INTO `icon` VALUES ('153', 'chat e0b7');
INSERT INTO `icon` VALUES ('154', 'chat_bubble e0ca');
INSERT INTO `icon` VALUES ('155', 'chat_bubble_outline e0cb');
INSERT INTO `icon` VALUES ('156', 'check e5ca');
INSERT INTO `icon` VALUES ('157', 'check_box e834');
INSERT INTO `icon` VALUES ('158', 'check_box_outline_blank e835');
INSERT INTO `icon` VALUES ('159', 'check_circle e86c');
INSERT INTO `icon` VALUES ('160', 'chevron_left e5cb');
INSERT INTO `icon` VALUES ('161', 'chevron_right e5cc');
INSERT INTO `icon` VALUES ('162', 'child_care eb41');
INSERT INTO `icon` VALUES ('163', 'child_friendly eb42');
INSERT INTO `icon` VALUES ('164', 'chrome_reader_mode e86d');
INSERT INTO `icon` VALUES ('165', 'class e86e');
INSERT INTO `icon` VALUES ('166', 'clear e14c');
INSERT INTO `icon` VALUES ('167', 'clear_all e0b8');
INSERT INTO `icon` VALUES ('168', 'close e5cd');
INSERT INTO `icon` VALUES ('169', 'closed_caption e01c');
INSERT INTO `icon` VALUES ('170', 'cloud e2bd');
INSERT INTO `icon` VALUES ('171', 'cloud_circle e2be');
INSERT INTO `icon` VALUES ('172', 'cloud_done e2bf');
INSERT INTO `icon` VALUES ('173', 'cloud_download e2c0');
INSERT INTO `icon` VALUES ('174', 'cloud_off e2c1');
INSERT INTO `icon` VALUES ('175', 'cloud_queue e2c2');
INSERT INTO `icon` VALUES ('176', 'cloud_upload e2c3');
INSERT INTO `icon` VALUES ('177', 'code e86f');
INSERT INTO `icon` VALUES ('178', 'collections e3b6');
INSERT INTO `icon` VALUES ('179', 'collections_bookmark e431');
INSERT INTO `icon` VALUES ('180', 'color_lens e3b7');
INSERT INTO `icon` VALUES ('181', 'colorize e3b8');
INSERT INTO `icon` VALUES ('182', 'comment e0b9');
INSERT INTO `icon` VALUES ('183', 'compare e3b9');
INSERT INTO `icon` VALUES ('184', 'compare_arrows e915');
INSERT INTO `icon` VALUES ('185', 'computer e30a');
INSERT INTO `icon` VALUES ('186', 'confirmation_number e638');
INSERT INTO `icon` VALUES ('187', 'contact_mail e0d0');
INSERT INTO `icon` VALUES ('188', 'contact_phone e0cf');
INSERT INTO `icon` VALUES ('189', 'contacts e0ba');
INSERT INTO `icon` VALUES ('190', 'content_copy e14d');
INSERT INTO `icon` VALUES ('191', 'content_cut e14e');
INSERT INTO `icon` VALUES ('192', 'content_paste e14f');
INSERT INTO `icon` VALUES ('193', 'control_point e3ba');
INSERT INTO `icon` VALUES ('194', 'control_point_duplicate e3bb');
INSERT INTO `icon` VALUES ('195', 'copyright e90c');
INSERT INTO `icon` VALUES ('196', 'create e150');
INSERT INTO `icon` VALUES ('197', 'create_new_folder e2cc');
INSERT INTO `icon` VALUES ('198', 'credit_card e870');
INSERT INTO `icon` VALUES ('199', 'crop e3be');
INSERT INTO `icon` VALUES ('200', 'crop_16_9 e3bc');
INSERT INTO `icon` VALUES ('201', 'crop_3_2 e3bd');
INSERT INTO `icon` VALUES ('202', 'crop_5_4 e3bf');
INSERT INTO `icon` VALUES ('203', 'crop_7_5 e3c0');
INSERT INTO `icon` VALUES ('204', 'crop_din e3c1');
INSERT INTO `icon` VALUES ('205', 'crop_free e3c2');
INSERT INTO `icon` VALUES ('206', 'crop_landscape e3c3');
INSERT INTO `icon` VALUES ('207', 'crop_original e3c4');
INSERT INTO `icon` VALUES ('208', 'crop_portrait e3c5');
INSERT INTO `icon` VALUES ('209', 'crop_rotate e437');
INSERT INTO `icon` VALUES ('210', 'crop_square e3c6');
INSERT INTO `icon` VALUES ('211', 'dashboard e871');
INSERT INTO `icon` VALUES ('212', 'data_usage e1af');
INSERT INTO `icon` VALUES ('213', 'date_range e916');
INSERT INTO `icon` VALUES ('214', 'dehaze e3c7');
INSERT INTO `icon` VALUES ('215', 'delete e872');
INSERT INTO `icon` VALUES ('216', 'delete_forever e92b');
INSERT INTO `icon` VALUES ('217', 'delete_sweep e16c');
INSERT INTO `icon` VALUES ('218', 'description e873');
INSERT INTO `icon` VALUES ('219', 'desktop_mac e30b');
INSERT INTO `icon` VALUES ('220', 'desktop_windows e30c');
INSERT INTO `icon` VALUES ('221', 'details e3c8');
INSERT INTO `icon` VALUES ('222', 'developer_board e30d');
INSERT INTO `icon` VALUES ('223', 'developer_mode e1b0');
INSERT INTO `icon` VALUES ('224', 'device_hub e335');
INSERT INTO `icon` VALUES ('225', 'devices e1b1');
INSERT INTO `icon` VALUES ('226', 'devices_other e337');
INSERT INTO `icon` VALUES ('227', 'dialer_sip e0bb');
INSERT INTO `icon` VALUES ('228', 'dialpad e0bc');
INSERT INTO `icon` VALUES ('229', 'directions e52e');
INSERT INTO `icon` VALUES ('230', 'directions_bike e52f');
INSERT INTO `icon` VALUES ('231', 'directions_boat e532');
INSERT INTO `icon` VALUES ('232', 'directions_bus e530');
INSERT INTO `icon` VALUES ('233', 'directions_car e531');
INSERT INTO `icon` VALUES ('234', 'directions_railway e534');
INSERT INTO `icon` VALUES ('235', 'directions_run e566');
INSERT INTO `icon` VALUES ('236', 'directions_subway e533');
INSERT INTO `icon` VALUES ('237', 'directions_transit e535');
INSERT INTO `icon` VALUES ('238', 'directions_walk e536');
INSERT INTO `icon` VALUES ('239', 'disc_full e610');
INSERT INTO `icon` VALUES ('240', 'dns e875');
INSERT INTO `icon` VALUES ('241', 'do_not_disturb e612');
INSERT INTO `icon` VALUES ('242', 'do_not_disturb_alt e611');
INSERT INTO `icon` VALUES ('243', 'do_not_disturb_off e643');
INSERT INTO `icon` VALUES ('244', 'do_not_disturb_on e644');
INSERT INTO `icon` VALUES ('245', 'dock e30e');
INSERT INTO `icon` VALUES ('246', 'domain e7ee');
INSERT INTO `icon` VALUES ('247', 'done e876');
INSERT INTO `icon` VALUES ('248', 'done_all e877');
INSERT INTO `icon` VALUES ('249', 'donut_large e917');
INSERT INTO `icon` VALUES ('250', 'donut_small e918');
INSERT INTO `icon` VALUES ('251', 'drafts e151');
INSERT INTO `icon` VALUES ('252', 'drag_handle e25d');
INSERT INTO `icon` VALUES ('253', 'drive_eta e613');
INSERT INTO `icon` VALUES ('254', 'dvr e1b2');
INSERT INTO `icon` VALUES ('255', 'edit e3c9');
INSERT INTO `icon` VALUES ('256', 'edit_location e568');
INSERT INTO `icon` VALUES ('257', 'eject e8fb');
INSERT INTO `icon` VALUES ('258', 'email e0be');
INSERT INTO `icon` VALUES ('259', 'enhanced_encryption e63f');
INSERT INTO `icon` VALUES ('260', 'equalizer e01d');
INSERT INTO `icon` VALUES ('261', 'error e000');
INSERT INTO `icon` VALUES ('262', 'error_outline e001');
INSERT INTO `icon` VALUES ('263', 'euro_symbol e926');
INSERT INTO `icon` VALUES ('264', 'ev_station e56d');
INSERT INTO `icon` VALUES ('265', 'event e878');
INSERT INTO `icon` VALUES ('266', 'event_available e614');
INSERT INTO `icon` VALUES ('267', 'event_busy e615');
INSERT INTO `icon` VALUES ('268', 'event_note e616');
INSERT INTO `icon` VALUES ('269', 'event_seat e903');
INSERT INTO `icon` VALUES ('270', 'exit_to_app e879');
INSERT INTO `icon` VALUES ('271', 'expand_less e5ce');
INSERT INTO `icon` VALUES ('272', 'expand_more e5cf');
INSERT INTO `icon` VALUES ('273', 'explicit e01e');
INSERT INTO `icon` VALUES ('274', 'explore e87a');
INSERT INTO `icon` VALUES ('275', 'exposure e3ca');
INSERT INTO `icon` VALUES ('276', 'exposure_neg_1 e3cb');
INSERT INTO `icon` VALUES ('277', 'exposure_neg_2 e3cc');
INSERT INTO `icon` VALUES ('278', 'exposure_plus_1 e3cd');
INSERT INTO `icon` VALUES ('279', 'exposure_plus_2 e3ce');
INSERT INTO `icon` VALUES ('280', 'exposure_zero e3cf');
INSERT INTO `icon` VALUES ('281', 'extension e87b');
INSERT INTO `icon` VALUES ('282', 'face e87c');
INSERT INTO `icon` VALUES ('283', 'fast_forward e01f');
INSERT INTO `icon` VALUES ('284', 'fast_rewind e020');
INSERT INTO `icon` VALUES ('285', 'favorite e87d');
INSERT INTO `icon` VALUES ('286', 'favorite_border e87e');
INSERT INTO `icon` VALUES ('287', 'featured_play_list e06d');
INSERT INTO `icon` VALUES ('288', 'featured_video e06e');
INSERT INTO `icon` VALUES ('289', 'feedback e87f');
INSERT INTO `icon` VALUES ('290', 'fiber_dvr e05d');
INSERT INTO `icon` VALUES ('291', 'fiber_manual_record e061');
INSERT INTO `icon` VALUES ('292', 'fiber_new e05e');
INSERT INTO `icon` VALUES ('293', 'fiber_pin e06a');
INSERT INTO `icon` VALUES ('294', 'fiber_smart_record e062');
INSERT INTO `icon` VALUES ('295', 'file_download e2c4');
INSERT INTO `icon` VALUES ('296', 'file_upload e2c6');
INSERT INTO `icon` VALUES ('297', 'filter e3d3');
INSERT INTO `icon` VALUES ('298', 'filter_1 e3d0');
INSERT INTO `icon` VALUES ('299', 'filter_2 e3d1');
INSERT INTO `icon` VALUES ('300', 'filter_3 e3d2');
INSERT INTO `icon` VALUES ('301', 'filter_4 e3d4');
INSERT INTO `icon` VALUES ('302', 'filter_5 e3d5');
INSERT INTO `icon` VALUES ('303', 'filter_6 e3d6');
INSERT INTO `icon` VALUES ('304', 'filter_7 e3d7');
INSERT INTO `icon` VALUES ('305', 'filter_8 e3d8');
INSERT INTO `icon` VALUES ('306', 'filter_9 e3d9');
INSERT INTO `icon` VALUES ('307', 'filter_9_plus e3da');
INSERT INTO `icon` VALUES ('308', 'filter_b_and_w e3db');
INSERT INTO `icon` VALUES ('309', 'filter_center_focus e3dc');
INSERT INTO `icon` VALUES ('310', 'filter_drama e3dd');
INSERT INTO `icon` VALUES ('311', 'filter_frames e3de');
INSERT INTO `icon` VALUES ('312', 'filter_hdr e3df');
INSERT INTO `icon` VALUES ('313', 'filter_list e152');
INSERT INTO `icon` VALUES ('314', 'filter_none e3e0');
INSERT INTO `icon` VALUES ('315', 'filter_tilt_shift e3e2');
INSERT INTO `icon` VALUES ('316', 'filter_vintage e3e3');
INSERT INTO `icon` VALUES ('317', 'find_in_page e880');
INSERT INTO `icon` VALUES ('318', 'find_replace e881');
INSERT INTO `icon` VALUES ('319', 'fingerprint e90d');
INSERT INTO `icon` VALUES ('320', 'first_page e5dc');
INSERT INTO `icon` VALUES ('321', 'fitness_center eb43');
INSERT INTO `icon` VALUES ('322', 'flag e153');
INSERT INTO `icon` VALUES ('323', 'flare e3e4');
INSERT INTO `icon` VALUES ('324', 'flash_auto e3e5');
INSERT INTO `icon` VALUES ('325', 'flash_off e3e6');
INSERT INTO `icon` VALUES ('326', 'flash_on e3e7');
INSERT INTO `icon` VALUES ('327', 'flight e539');
INSERT INTO `icon` VALUES ('328', 'flight_land e904');
INSERT INTO `icon` VALUES ('329', 'flight_takeoff e905');
INSERT INTO `icon` VALUES ('330', 'flip e3e8');
INSERT INTO `icon` VALUES ('331', 'flip_to_back e882');
INSERT INTO `icon` VALUES ('332', 'flip_to_front e883');
INSERT INTO `icon` VALUES ('333', 'folder e2c7');
INSERT INTO `icon` VALUES ('334', 'folder_open e2c8');
INSERT INTO `icon` VALUES ('335', 'folder_shared e2c9');
INSERT INTO `icon` VALUES ('336', 'folder_special e617');
INSERT INTO `icon` VALUES ('337', 'font_download e167');
INSERT INTO `icon` VALUES ('338', 'format_align_center e234');
INSERT INTO `icon` VALUES ('339', 'format_align_justify e235');
INSERT INTO `icon` VALUES ('340', 'format_align_left e236');
INSERT INTO `icon` VALUES ('341', 'format_align_right e237');
INSERT INTO `icon` VALUES ('342', 'format_bold e238');
INSERT INTO `icon` VALUES ('343', 'format_clear e239');
INSERT INTO `icon` VALUES ('344', 'format_color_fill e23a');
INSERT INTO `icon` VALUES ('345', 'format_color_reset e23b');
INSERT INTO `icon` VALUES ('346', 'format_color_text e23c');
INSERT INTO `icon` VALUES ('347', 'format_indent_decrease e23d');
INSERT INTO `icon` VALUES ('348', 'format_indent_increase e23e');
INSERT INTO `icon` VALUES ('349', 'format_italic e23f');
INSERT INTO `icon` VALUES ('350', 'format_line_spacing e240');
INSERT INTO `icon` VALUES ('351', 'format_list_bulleted e241');
INSERT INTO `icon` VALUES ('352', 'format_list_numbered e242');
INSERT INTO `icon` VALUES ('353', 'format_paint e243');
INSERT INTO `icon` VALUES ('354', 'format_quote e244');
INSERT INTO `icon` VALUES ('355', 'format_shapes e25e');
INSERT INTO `icon` VALUES ('356', 'format_size e245');
INSERT INTO `icon` VALUES ('357', 'format_strikethrough e246');
INSERT INTO `icon` VALUES ('358', 'format_textdirection_l_to_r e247');
INSERT INTO `icon` VALUES ('359', 'format_textdirection_r_to_l e248');
INSERT INTO `icon` VALUES ('360', 'format_underlined e249');
INSERT INTO `icon` VALUES ('361', 'forum e0bf');
INSERT INTO `icon` VALUES ('362', 'forward e154');
INSERT INTO `icon` VALUES ('363', 'forward_10 e056');
INSERT INTO `icon` VALUES ('364', 'forward_30 e057');
INSERT INTO `icon` VALUES ('365', 'forward_5 e058');
INSERT INTO `icon` VALUES ('366', 'free_breakfast eb44');
INSERT INTO `icon` VALUES ('367', 'fullscreen e5d0');
INSERT INTO `icon` VALUES ('368', 'fullscreen_exit e5d1');
INSERT INTO `icon` VALUES ('369', 'functions e24a');
INSERT INTO `icon` VALUES ('370', 'g_translate e927');
INSERT INTO `icon` VALUES ('371', 'gamepad e30f');
INSERT INTO `icon` VALUES ('372', 'games e021');
INSERT INTO `icon` VALUES ('373', 'gavel e90e');
INSERT INTO `icon` VALUES ('374', 'gesture e155');
INSERT INTO `icon` VALUES ('375', 'get_app e884');
INSERT INTO `icon` VALUES ('376', 'gif e908');
INSERT INTO `icon` VALUES ('377', 'golf_course eb45');
INSERT INTO `icon` VALUES ('378', 'gps_fixed e1b3');
INSERT INTO `icon` VALUES ('379', 'gps_not_fixed e1b4');
INSERT INTO `icon` VALUES ('380', 'gps_off e1b5');
INSERT INTO `icon` VALUES ('381', 'grade e885');
INSERT INTO `icon` VALUES ('382', 'gradient e3e9');
INSERT INTO `icon` VALUES ('383', 'grain e3ea');
INSERT INTO `icon` VALUES ('384', 'graphic_eq e1b8');
INSERT INTO `icon` VALUES ('385', 'grid_off e3eb');
INSERT INTO `icon` VALUES ('386', 'grid_on e3ec');
INSERT INTO `icon` VALUES ('387', 'group e7ef');
INSERT INTO `icon` VALUES ('388', 'group_add e7f0');
INSERT INTO `icon` VALUES ('389', 'group_work e886');
INSERT INTO `icon` VALUES ('390', 'hd e052');
INSERT INTO `icon` VALUES ('391', 'hdr_off e3ed');
INSERT INTO `icon` VALUES ('392', 'hdr_on e3ee');
INSERT INTO `icon` VALUES ('393', 'hdr_strong e3f1');
INSERT INTO `icon` VALUES ('394', 'hdr_weak e3f2');
INSERT INTO `icon` VALUES ('395', 'headset e310');
INSERT INTO `icon` VALUES ('396', 'headset_mic e311');
INSERT INTO `icon` VALUES ('397', 'healing e3f3');
INSERT INTO `icon` VALUES ('398', 'hearing e023');
INSERT INTO `icon` VALUES ('399', 'help e887');
INSERT INTO `icon` VALUES ('400', 'help_outline e8fd');
INSERT INTO `icon` VALUES ('401', 'high_quality e024');
INSERT INTO `icon` VALUES ('402', 'highlight e25f');
INSERT INTO `icon` VALUES ('403', 'highlight_off e888');
INSERT INTO `icon` VALUES ('404', 'history e889');
INSERT INTO `icon` VALUES ('405', 'home e88a');
INSERT INTO `icon` VALUES ('406', 'hot_tub eb46');
INSERT INTO `icon` VALUES ('407', 'hotel e53a');
INSERT INTO `icon` VALUES ('408', 'hourglass_empty e88b');
INSERT INTO `icon` VALUES ('409', 'hourglass_full e88c');
INSERT INTO `icon` VALUES ('410', 'http e902');
INSERT INTO `icon` VALUES ('411', 'https e88d');
INSERT INTO `icon` VALUES ('412', 'image e3f4');
INSERT INTO `icon` VALUES ('413', 'image_aspect_ratio e3f5');
INSERT INTO `icon` VALUES ('414', 'import_contacts e0e0');
INSERT INTO `icon` VALUES ('415', 'import_export e0c3');
INSERT INTO `icon` VALUES ('416', 'important_devices e912');
INSERT INTO `icon` VALUES ('417', 'inbox e156');
INSERT INTO `icon` VALUES ('418', 'indeterminate_check_box e909');
INSERT INTO `icon` VALUES ('419', 'info e88e');
INSERT INTO `icon` VALUES ('420', 'info_outline e88f');
INSERT INTO `icon` VALUES ('421', 'input e890');
INSERT INTO `icon` VALUES ('422', 'insert_chart e24b');
INSERT INTO `icon` VALUES ('423', 'insert_comment e24c');
INSERT INTO `icon` VALUES ('424', 'insert_drive_file e24d');
INSERT INTO `icon` VALUES ('425', 'insert_emoticon e24e');
INSERT INTO `icon` VALUES ('426', 'insert_invitation e24f');
INSERT INTO `icon` VALUES ('427', 'insert_link e250');
INSERT INTO `icon` VALUES ('428', 'insert_photo e251');
INSERT INTO `icon` VALUES ('429', 'invert_colors e891');
INSERT INTO `icon` VALUES ('430', 'invert_colors_off e0c4');
INSERT INTO `icon` VALUES ('431', 'iso e3f6');
INSERT INTO `icon` VALUES ('432', 'keyboard e312');
INSERT INTO `icon` VALUES ('433', 'keyboard_arrow_down e313');
INSERT INTO `icon` VALUES ('434', 'keyboard_arrow_left e314');
INSERT INTO `icon` VALUES ('435', 'keyboard_arrow_right e315');
INSERT INTO `icon` VALUES ('436', 'keyboard_arrow_up e316');
INSERT INTO `icon` VALUES ('437', 'keyboard_backspace e317');
INSERT INTO `icon` VALUES ('438', 'keyboard_capslock e318');
INSERT INTO `icon` VALUES ('439', 'keyboard_hide e31a');
INSERT INTO `icon` VALUES ('440', 'keyboard_return e31b');
INSERT INTO `icon` VALUES ('441', 'keyboard_tab e31c');
INSERT INTO `icon` VALUES ('442', 'keyboard_voice e31d');
INSERT INTO `icon` VALUES ('443', 'kitchen eb47');
INSERT INTO `icon` VALUES ('444', 'label e892');
INSERT INTO `icon` VALUES ('445', 'label_outline e893');
INSERT INTO `icon` VALUES ('446', 'landscape e3f7');
INSERT INTO `icon` VALUES ('447', 'language e894');
INSERT INTO `icon` VALUES ('448', 'laptop e31e');
INSERT INTO `icon` VALUES ('449', 'laptop_chromebook e31f');
INSERT INTO `icon` VALUES ('450', 'laptop_mac e320');
INSERT INTO `icon` VALUES ('451', 'laptop_windows e321');
INSERT INTO `icon` VALUES ('452', 'last_page e5dd');
INSERT INTO `icon` VALUES ('453', 'launch e895');
INSERT INTO `icon` VALUES ('454', 'layers e53b');
INSERT INTO `icon` VALUES ('455', 'layers_clear e53c');
INSERT INTO `icon` VALUES ('456', 'leak_add e3f8');
INSERT INTO `icon` VALUES ('457', 'leak_remove e3f9');
INSERT INTO `icon` VALUES ('458', 'lens e3fa');
INSERT INTO `icon` VALUES ('459', 'library_add e02e');
INSERT INTO `icon` VALUES ('460', 'library_books e02f');
INSERT INTO `icon` VALUES ('461', 'library_music e030');
INSERT INTO `icon` VALUES ('462', 'lightbulb_outline e90f');
INSERT INTO `icon` VALUES ('463', 'line_style e919');
INSERT INTO `icon` VALUES ('464', 'line_weight e91a');
INSERT INTO `icon` VALUES ('465', 'linear_scale e260');
INSERT INTO `icon` VALUES ('466', 'link e157');
INSERT INTO `icon` VALUES ('467', 'linked_camera e438');
INSERT INTO `icon` VALUES ('468', 'list e896');
INSERT INTO `icon` VALUES ('469', 'live_help e0c6');
INSERT INTO `icon` VALUES ('470', 'live_tv e639');
INSERT INTO `icon` VALUES ('471', 'local_activity e53f');
INSERT INTO `icon` VALUES ('472', 'local_airport e53d');
INSERT INTO `icon` VALUES ('473', 'local_atm e53e');
INSERT INTO `icon` VALUES ('474', 'local_bar e540');
INSERT INTO `icon` VALUES ('475', 'local_cafe e541');
INSERT INTO `icon` VALUES ('476', 'local_car_wash e542');
INSERT INTO `icon` VALUES ('477', 'local_convenience_store e543');
INSERT INTO `icon` VALUES ('478', 'local_dining e556');
INSERT INTO `icon` VALUES ('479', 'local_drink e544');
INSERT INTO `icon` VALUES ('480', 'local_florist e545');
INSERT INTO `icon` VALUES ('481', 'local_gas_station e546');
INSERT INTO `icon` VALUES ('482', 'local_grocery_store e547');
INSERT INTO `icon` VALUES ('483', 'local_hospital e548');
INSERT INTO `icon` VALUES ('484', 'local_hotel e549');
INSERT INTO `icon` VALUES ('485', 'local_laundry_service e54a');
INSERT INTO `icon` VALUES ('486', 'local_library e54b');
INSERT INTO `icon` VALUES ('487', 'local_mall e54c');
INSERT INTO `icon` VALUES ('488', 'local_movies e54d');
INSERT INTO `icon` VALUES ('489', 'local_offer e54e');
INSERT INTO `icon` VALUES ('490', 'local_parking e54f');
INSERT INTO `icon` VALUES ('491', 'local_pharmacy e550');
INSERT INTO `icon` VALUES ('492', 'local_phone e551');
INSERT INTO `icon` VALUES ('493', 'local_pizza e552');
INSERT INTO `icon` VALUES ('494', 'local_play e553');
INSERT INTO `icon` VALUES ('495', 'local_post_office e554');
INSERT INTO `icon` VALUES ('496', 'local_printshop e555');
INSERT INTO `icon` VALUES ('497', 'local_see e557');
INSERT INTO `icon` VALUES ('498', 'local_shipping e558');
INSERT INTO `icon` VALUES ('499', 'local_taxi e559');
INSERT INTO `icon` VALUES ('500', 'location_city e7f1');
INSERT INTO `icon` VALUES ('501', 'location_disabled e1b6');
INSERT INTO `icon` VALUES ('502', 'location_off e0c7');
INSERT INTO `icon` VALUES ('503', 'location_on e0c8');
INSERT INTO `icon` VALUES ('504', 'location_searching e1b7');
INSERT INTO `icon` VALUES ('505', 'lock e897');
INSERT INTO `icon` VALUES ('506', 'lock_open e898');
INSERT INTO `icon` VALUES ('507', 'lock_outline e899');
INSERT INTO `icon` VALUES ('508', 'looks e3fc');
INSERT INTO `icon` VALUES ('509', 'looks_3 e3fb');
INSERT INTO `icon` VALUES ('510', 'looks_4 e3fd');
INSERT INTO `icon` VALUES ('511', 'looks_5 e3fe');
INSERT INTO `icon` VALUES ('512', 'looks_6 e3ff');
INSERT INTO `icon` VALUES ('513', 'looks_one e400');
INSERT INTO `icon` VALUES ('514', 'looks_two e401');
INSERT INTO `icon` VALUES ('515', 'loop e028');
INSERT INTO `icon` VALUES ('516', 'loupe e402');
INSERT INTO `icon` VALUES ('517', 'low_priority e16d');
INSERT INTO `icon` VALUES ('518', 'loyalty e89a');
INSERT INTO `icon` VALUES ('519', 'mail e158');
INSERT INTO `icon` VALUES ('520', 'mail_outline e0e1');
INSERT INTO `icon` VALUES ('521', 'map e55b');
INSERT INTO `icon` VALUES ('522', 'markunread e159');
INSERT INTO `icon` VALUES ('523', 'markunread_mailbox e89b');
INSERT INTO `icon` VALUES ('524', 'memory e322');
INSERT INTO `icon` VALUES ('525', 'menu e5d2');
INSERT INTO `icon` VALUES ('526', 'merge_type e252');
INSERT INTO `icon` VALUES ('527', 'message e0c9');
INSERT INTO `icon` VALUES ('528', 'mic e029');
INSERT INTO `icon` VALUES ('529', 'mic_none e02a');
INSERT INTO `icon` VALUES ('530', 'mic_off e02b');
INSERT INTO `icon` VALUES ('531', 'mms e618');
INSERT INTO `icon` VALUES ('532', 'mode_comment e253');
INSERT INTO `icon` VALUES ('533', 'mode_edit e254');
INSERT INTO `icon` VALUES ('534', 'monetization_on e263');
INSERT INTO `icon` VALUES ('535', 'money_off e25c');
INSERT INTO `icon` VALUES ('536', 'monochrome_photos e403');
INSERT INTO `icon` VALUES ('537', 'mood e7f2');
INSERT INTO `icon` VALUES ('538', 'mood_bad e7f3');
INSERT INTO `icon` VALUES ('539', 'more e619');
INSERT INTO `icon` VALUES ('540', 'more_horiz e5d3');
INSERT INTO `icon` VALUES ('541', 'more_vert e5d4');
INSERT INTO `icon` VALUES ('542', 'motorcycle e91b');
INSERT INTO `icon` VALUES ('543', 'mouse e323');
INSERT INTO `icon` VALUES ('544', 'move_to_inbox e168');
INSERT INTO `icon` VALUES ('545', 'movie e02c');
INSERT INTO `icon` VALUES ('546', 'movie_creation e404');
INSERT INTO `icon` VALUES ('547', 'movie_filter e43a');
INSERT INTO `icon` VALUES ('548', 'multiline_chart e6df');
INSERT INTO `icon` VALUES ('549', 'music_note e405');
INSERT INTO `icon` VALUES ('550', 'music_video e063');
INSERT INTO `icon` VALUES ('551', 'my_location e55c');
INSERT INTO `icon` VALUES ('552', 'nature e406');
INSERT INTO `icon` VALUES ('553', 'nature_people e407');
INSERT INTO `icon` VALUES ('554', 'navigate_before e408');
INSERT INTO `icon` VALUES ('555', 'navigate_next e409');
INSERT INTO `icon` VALUES ('556', 'navigation e55d');
INSERT INTO `icon` VALUES ('557', 'near_me e569');
INSERT INTO `icon` VALUES ('558', 'network_cell e1b9');
INSERT INTO `icon` VALUES ('559', 'network_check e640');
INSERT INTO `icon` VALUES ('560', 'network_locked e61a');
INSERT INTO `icon` VALUES ('561', 'network_wifi e1ba');
INSERT INTO `icon` VALUES ('562', 'new_releases e031');
INSERT INTO `icon` VALUES ('563', 'next_week e16a');
INSERT INTO `icon` VALUES ('564', 'nfc e1bb');
INSERT INTO `icon` VALUES ('565', 'no_encryption e641');
INSERT INTO `icon` VALUES ('566', 'no_sim e0cc');
INSERT INTO `icon` VALUES ('567', 'not_interested e033');
INSERT INTO `icon` VALUES ('568', 'note e06f');
INSERT INTO `icon` VALUES ('569', 'note_add e89c');
INSERT INTO `icon` VALUES ('570', 'notifications e7f4');
INSERT INTO `icon` VALUES ('571', 'notifications_active e7f7');
INSERT INTO `icon` VALUES ('572', 'notifications_none e7f5');
INSERT INTO `icon` VALUES ('573', 'notifications_off e7f6');
INSERT INTO `icon` VALUES ('574', 'notifications_paused e7f8');
INSERT INTO `icon` VALUES ('575', 'offline_pin e90a');
INSERT INTO `icon` VALUES ('576', 'ondemand_video e63a');
INSERT INTO `icon` VALUES ('577', 'opacity e91c');
INSERT INTO `icon` VALUES ('578', 'open_in_browser e89d');
INSERT INTO `icon` VALUES ('579', 'open_in_new e89e');
INSERT INTO `icon` VALUES ('580', 'open_with e89f');
INSERT INTO `icon` VALUES ('581', 'pages e7f9');
INSERT INTO `icon` VALUES ('582', 'pageview e8a0');
INSERT INTO `icon` VALUES ('583', 'palette e40a');
INSERT INTO `icon` VALUES ('584', 'pan_tool e925');
INSERT INTO `icon` VALUES ('585', 'panorama e40b');
INSERT INTO `icon` VALUES ('586', 'panorama_fish_eye e40c');
INSERT INTO `icon` VALUES ('587', 'panorama_horizontal e40d');
INSERT INTO `icon` VALUES ('588', 'panorama_vertical e40e');
INSERT INTO `icon` VALUES ('589', 'panorama_wide_angle e40f');
INSERT INTO `icon` VALUES ('590', 'party_mode e7fa');
INSERT INTO `icon` VALUES ('591', 'pause e034');
INSERT INTO `icon` VALUES ('592', 'pause_circle_filled e035');
INSERT INTO `icon` VALUES ('593', 'pause_circle_outline e036');
INSERT INTO `icon` VALUES ('594', 'payment e8a1');
INSERT INTO `icon` VALUES ('595', 'people e7fb');
INSERT INTO `icon` VALUES ('596', 'people_outline e7fc');
INSERT INTO `icon` VALUES ('597', 'perm_camera_mic e8a2');
INSERT INTO `icon` VALUES ('598', 'perm_contact_calendar e8a3');
INSERT INTO `icon` VALUES ('599', 'perm_data_setting e8a4');
INSERT INTO `icon` VALUES ('600', 'perm_device_information e8a5');
INSERT INTO `icon` VALUES ('601', 'perm_identity e8a6');
INSERT INTO `icon` VALUES ('602', 'perm_media e8a7');
INSERT INTO `icon` VALUES ('603', 'perm_phone_msg e8a8');
INSERT INTO `icon` VALUES ('604', 'perm_scan_wifi e8a9');
INSERT INTO `icon` VALUES ('605', 'person e7fd');
INSERT INTO `icon` VALUES ('606', 'person_add e7fe');
INSERT INTO `icon` VALUES ('607', 'person_outline e7ff');
INSERT INTO `icon` VALUES ('608', 'person_pin e55a');
INSERT INTO `icon` VALUES ('609', 'person_pin_circle e56a');
INSERT INTO `icon` VALUES ('610', 'personal_video e63b');
INSERT INTO `icon` VALUES ('611', 'pets e91d');
INSERT INTO `icon` VALUES ('612', 'phone e0cd');
INSERT INTO `icon` VALUES ('613', 'phone_android e324');
INSERT INTO `icon` VALUES ('614', 'phone_bluetooth_speaker e61b');
INSERT INTO `icon` VALUES ('615', 'phone_forwarded e61c');
INSERT INTO `icon` VALUES ('616', 'phone_in_talk e61d');
INSERT INTO `icon` VALUES ('617', 'phone_iphone e325');
INSERT INTO `icon` VALUES ('618', 'phone_locked e61e');
INSERT INTO `icon` VALUES ('619', 'phone_missed e61f');
INSERT INTO `icon` VALUES ('620', 'phone_paused e620');
INSERT INTO `icon` VALUES ('621', 'phonelink e326');
INSERT INTO `icon` VALUES ('622', 'phonelink_erase e0db');
INSERT INTO `icon` VALUES ('623', 'phonelink_lock e0dc');
INSERT INTO `icon` VALUES ('624', 'phonelink_off e327');
INSERT INTO `icon` VALUES ('625', 'phonelink_ring e0dd');
INSERT INTO `icon` VALUES ('626', 'phonelink_setup e0de');
INSERT INTO `icon` VALUES ('627', 'photo e410');
INSERT INTO `icon` VALUES ('628', 'photo_album e411');
INSERT INTO `icon` VALUES ('629', 'photo_camera e412');
INSERT INTO `icon` VALUES ('630', 'photo_filter e43b');
INSERT INTO `icon` VALUES ('631', 'photo_library e413');
INSERT INTO `icon` VALUES ('632', 'photo_size_select_actual e432');
INSERT INTO `icon` VALUES ('633', 'photo_size_select_large e433');
INSERT INTO `icon` VALUES ('634', 'photo_size_select_small e434');
INSERT INTO `icon` VALUES ('635', 'picture_as_pdf e415');
INSERT INTO `icon` VALUES ('636', 'picture_in_picture e8aa');
INSERT INTO `icon` VALUES ('637', 'picture_in_picture_alt e911');
INSERT INTO `icon` VALUES ('638', 'pie_chart e6c4');
INSERT INTO `icon` VALUES ('639', 'pie_chart_outlined e6c5');
INSERT INTO `icon` VALUES ('640', 'pin_drop e55e');
INSERT INTO `icon` VALUES ('641', 'place e55f');
INSERT INTO `icon` VALUES ('642', 'play_arrow e037');
INSERT INTO `icon` VALUES ('643', 'play_circle_filled e038');
INSERT INTO `icon` VALUES ('644', 'play_circle_outline e039');
INSERT INTO `icon` VALUES ('645', 'play_for_work e906');
INSERT INTO `icon` VALUES ('646', 'playlist_add e03b');
INSERT INTO `icon` VALUES ('647', 'playlist_add_check e065');
INSERT INTO `icon` VALUES ('648', 'playlist_play e05f');
INSERT INTO `icon` VALUES ('649', 'plus_one e800');
INSERT INTO `icon` VALUES ('650', 'poll e801');
INSERT INTO `icon` VALUES ('651', 'polymer e8ab');
INSERT INTO `icon` VALUES ('652', 'pool eb48');
INSERT INTO `icon` VALUES ('653', 'portable_wifi_off e0ce');
INSERT INTO `icon` VALUES ('654', 'portrait e416');
INSERT INTO `icon` VALUES ('655', 'power e63c');
INSERT INTO `icon` VALUES ('656', 'power_input e336');
INSERT INTO `icon` VALUES ('657', 'power_settings_new e8ac');
INSERT INTO `icon` VALUES ('658', 'pregnant_woman e91e');
INSERT INTO `icon` VALUES ('659', 'present_to_all e0df');
INSERT INTO `icon` VALUES ('660', 'print e8ad');
INSERT INTO `icon` VALUES ('661', 'priority_high e645');
INSERT INTO `icon` VALUES ('662', 'public e80b');
INSERT INTO `icon` VALUES ('663', 'publish e255');
INSERT INTO `icon` VALUES ('664', 'query_builder e8ae');
INSERT INTO `icon` VALUES ('665', 'question_answer e8af');
INSERT INTO `icon` VALUES ('666', 'queue e03c');
INSERT INTO `icon` VALUES ('667', 'queue_music e03d');
INSERT INTO `icon` VALUES ('668', 'queue_play_next e066');
INSERT INTO `icon` VALUES ('669', 'radio e03e');
INSERT INTO `icon` VALUES ('670', 'radio_button_checked e837');
INSERT INTO `icon` VALUES ('671', 'radio_button_unchecked e836');
INSERT INTO `icon` VALUES ('672', 'rate_review e560');
INSERT INTO `icon` VALUES ('673', 'receipt e8b0');
INSERT INTO `icon` VALUES ('674', 'recent_actors e03f');
INSERT INTO `icon` VALUES ('675', 'record_voice_over e91f');
INSERT INTO `icon` VALUES ('676', 'redeem e8b1');
INSERT INTO `icon` VALUES ('677', 'redo e15a');
INSERT INTO `icon` VALUES ('678', 'refresh e5d5');
INSERT INTO `icon` VALUES ('679', 'remove e15b');
INSERT INTO `icon` VALUES ('680', 'remove_circle e15c');
INSERT INTO `icon` VALUES ('681', 'remove_circle_outline e15d');
INSERT INTO `icon` VALUES ('682', 'remove_from_queue e067');
INSERT INTO `icon` VALUES ('683', 'remove_red_eye e417');
INSERT INTO `icon` VALUES ('684', 'remove_shopping_cart e928');
INSERT INTO `icon` VALUES ('685', 'reorder e8fe');
INSERT INTO `icon` VALUES ('686', 'repeat e040');
INSERT INTO `icon` VALUES ('687', 'repeat_one e041');
INSERT INTO `icon` VALUES ('688', 'replay e042');
INSERT INTO `icon` VALUES ('689', 'replay_10 e059');
INSERT INTO `icon` VALUES ('690', 'replay_30 e05a');
INSERT INTO `icon` VALUES ('691', 'replay_5 e05b');
INSERT INTO `icon` VALUES ('692', 'reply e15e');
INSERT INTO `icon` VALUES ('693', 'reply_all e15f');
INSERT INTO `icon` VALUES ('694', 'report e160');
INSERT INTO `icon` VALUES ('695', 'report_problem e8b2');
INSERT INTO `icon` VALUES ('696', 'restaurant e56c');
INSERT INTO `icon` VALUES ('697', 'restaurant_menu e561');
INSERT INTO `icon` VALUES ('698', 'restore e8b3');
INSERT INTO `icon` VALUES ('699', 'restore_page e929');
INSERT INTO `icon` VALUES ('700', 'ring_volume e0d1');
INSERT INTO `icon` VALUES ('701', 'room e8b4');
INSERT INTO `icon` VALUES ('702', 'room_service eb49');
INSERT INTO `icon` VALUES ('703', 'rotate_90_degrees_ccw e418');
INSERT INTO `icon` VALUES ('704', 'rotate_left e419');
INSERT INTO `icon` VALUES ('705', 'rotate_right e41a');
INSERT INTO `icon` VALUES ('706', 'rounded_corner e920');
INSERT INTO `icon` VALUES ('707', 'router e328');
INSERT INTO `icon` VALUES ('708', 'rowing e921');
INSERT INTO `icon` VALUES ('709', 'rss_feed e0e5');
INSERT INTO `icon` VALUES ('710', 'rv_hookup e642');
INSERT INTO `icon` VALUES ('711', 'satellite e562');
INSERT INTO `icon` VALUES ('712', 'save e161');
INSERT INTO `icon` VALUES ('713', 'scanner e329');
INSERT INTO `icon` VALUES ('714', 'schedule e8b5');
INSERT INTO `icon` VALUES ('715', 'school e80c');
INSERT INTO `icon` VALUES ('716', 'screen_lock_landscape e1be');
INSERT INTO `icon` VALUES ('717', 'screen_lock_portrait e1bf');
INSERT INTO `icon` VALUES ('718', 'screen_lock_rotation e1c0');
INSERT INTO `icon` VALUES ('719', 'screen_rotation e1c1');
INSERT INTO `icon` VALUES ('720', 'screen_share e0e2');
INSERT INTO `icon` VALUES ('721', 'sd_card e623');
INSERT INTO `icon` VALUES ('722', 'sd_storage e1c2');
INSERT INTO `icon` VALUES ('723', 'search e8b6');
INSERT INTO `icon` VALUES ('724', 'security e32a');
INSERT INTO `icon` VALUES ('725', 'select_all e162');
INSERT INTO `icon` VALUES ('726', 'send e163');
INSERT INTO `icon` VALUES ('727', 'sentiment_dissatisfied e811');
INSERT INTO `icon` VALUES ('728', 'sentiment_neutral e812');
INSERT INTO `icon` VALUES ('729', 'sentiment_satisfied e813');
INSERT INTO `icon` VALUES ('730', 'sentiment_very_dissatisfied e814');
INSERT INTO `icon` VALUES ('731', 'sentiment_very_satisfied e815');
INSERT INTO `icon` VALUES ('732', 'settings e8b8');
INSERT INTO `icon` VALUES ('733', 'settings_applications e8b9');
INSERT INTO `icon` VALUES ('734', 'settings_backup_restore e8ba');
INSERT INTO `icon` VALUES ('735', 'settings_bluetooth e8bb');
INSERT INTO `icon` VALUES ('736', 'settings_brightness e8bd');
INSERT INTO `icon` VALUES ('737', 'settings_cell e8bc');
INSERT INTO `icon` VALUES ('738', 'settings_ethernet e8be');
INSERT INTO `icon` VALUES ('739', 'settings_input_antenna e8bf');
INSERT INTO `icon` VALUES ('740', 'settings_input_component e8c0');
INSERT INTO `icon` VALUES ('741', 'settings_input_composite e8c1');
INSERT INTO `icon` VALUES ('742', 'settings_input_hdmi e8c2');
INSERT INTO `icon` VALUES ('743', 'settings_input_svideo e8c3');
INSERT INTO `icon` VALUES ('744', 'settings_overscan e8c4');
INSERT INTO `icon` VALUES ('745', 'settings_phone e8c5');
INSERT INTO `icon` VALUES ('746', 'settings_power e8c6');
INSERT INTO `icon` VALUES ('747', 'settings_remote e8c7');
INSERT INTO `icon` VALUES ('748', 'settings_system_daydream e1c3');
INSERT INTO `icon` VALUES ('749', 'settings_voice e8c8');
INSERT INTO `icon` VALUES ('750', 'share e80d');
INSERT INTO `icon` VALUES ('751', 'shop e8c9');
INSERT INTO `icon` VALUES ('752', 'shop_two e8ca');
INSERT INTO `icon` VALUES ('753', 'shopping_basket e8cb');
INSERT INTO `icon` VALUES ('754', 'shopping_cart e8cc');
INSERT INTO `icon` VALUES ('755', 'short_text e261');
INSERT INTO `icon` VALUES ('756', 'show_chart e6e1');
INSERT INTO `icon` VALUES ('757', 'shuffle e043');
INSERT INTO `icon` VALUES ('758', 'signal_cellular_4_bar e1c8');
INSERT INTO `icon` VALUES ('759', 'signal_cellular_connected_no_internet_4_bar e1cd');
INSERT INTO `icon` VALUES ('760', 'signal_cellular_no_sim e1ce');
INSERT INTO `icon` VALUES ('761', 'signal_cellular_null e1cf');
INSERT INTO `icon` VALUES ('762', 'signal_cellular_off e1d0');
INSERT INTO `icon` VALUES ('763', 'signal_wifi_4_bar e1d8');
INSERT INTO `icon` VALUES ('764', 'signal_wifi_4_bar_lock e1d9');
INSERT INTO `icon` VALUES ('765', 'signal_wifi_off e1da');
INSERT INTO `icon` VALUES ('766', 'sim_card e32b');
INSERT INTO `icon` VALUES ('767', 'sim_card_alert e624');
INSERT INTO `icon` VALUES ('768', 'skip_next e044');
INSERT INTO `icon` VALUES ('769', 'skip_previous e045');
INSERT INTO `icon` VALUES ('770', 'slideshow e41b');
INSERT INTO `icon` VALUES ('771', 'slow_motion_video e068');
INSERT INTO `icon` VALUES ('772', 'smartphone e32c');
INSERT INTO `icon` VALUES ('773', 'smoke_free eb4a');
INSERT INTO `icon` VALUES ('774', 'smoking_rooms eb4b');
INSERT INTO `icon` VALUES ('775', 'sms e625');
INSERT INTO `icon` VALUES ('776', 'sms_failed e626');
INSERT INTO `icon` VALUES ('777', 'snooze e046');
INSERT INTO `icon` VALUES ('778', 'sort e164');
INSERT INTO `icon` VALUES ('779', 'sort_by_alpha e053');
INSERT INTO `icon` VALUES ('780', 'spa eb4c');
INSERT INTO `icon` VALUES ('781', 'space_bar e256');
INSERT INTO `icon` VALUES ('782', 'speaker e32d');
INSERT INTO `icon` VALUES ('783', 'speaker_group e32e');
INSERT INTO `icon` VALUES ('784', 'speaker_notes e8cd');
INSERT INTO `icon` VALUES ('785', 'speaker_notes_off e92a');
INSERT INTO `icon` VALUES ('786', 'speaker_phone e0d2');
INSERT INTO `icon` VALUES ('787', 'spellcheck e8ce');
INSERT INTO `icon` VALUES ('788', 'star e838');
INSERT INTO `icon` VALUES ('789', 'star_border e83a');
INSERT INTO `icon` VALUES ('790', 'star_half e839');
INSERT INTO `icon` VALUES ('791', 'stars e8d0');
INSERT INTO `icon` VALUES ('792', 'stay_current_landscape e0d3');
INSERT INTO `icon` VALUES ('793', 'stay_current_portrait e0d4');
INSERT INTO `icon` VALUES ('794', 'stay_primary_landscape e0d5');
INSERT INTO `icon` VALUES ('795', 'stay_primary_portrait e0d6');
INSERT INTO `icon` VALUES ('796', 'stop e047');
INSERT INTO `icon` VALUES ('797', 'stop_screen_share e0e3');
INSERT INTO `icon` VALUES ('798', 'storage e1db');
INSERT INTO `icon` VALUES ('799', 'store e8d1');
INSERT INTO `icon` VALUES ('800', 'store_mall_directory e563');
INSERT INTO `icon` VALUES ('801', 'straighten e41c');
INSERT INTO `icon` VALUES ('802', 'streetview e56e');
INSERT INTO `icon` VALUES ('803', 'strikethrough_s e257');
INSERT INTO `icon` VALUES ('804', 'style e41d');
INSERT INTO `icon` VALUES ('805', 'subdirectory_arrow_left e5d9');
INSERT INTO `icon` VALUES ('806', 'subdirectory_arrow_right e5da');
INSERT INTO `icon` VALUES ('807', 'subject e8d2');
INSERT INTO `icon` VALUES ('808', 'subscriptions e064');
INSERT INTO `icon` VALUES ('809', 'subtitles e048');
INSERT INTO `icon` VALUES ('810', 'subway e56f');
INSERT INTO `icon` VALUES ('811', 'supervisor_account e8d3');
INSERT INTO `icon` VALUES ('812', 'surround_sound e049');
INSERT INTO `icon` VALUES ('813', 'swap_calls e0d7');
INSERT INTO `icon` VALUES ('814', 'swap_horiz e8d4');
INSERT INTO `icon` VALUES ('815', 'swap_vert e8d5');
INSERT INTO `icon` VALUES ('816', 'swap_vertical_circle e8d6');
INSERT INTO `icon` VALUES ('817', 'switch_camera e41e');
INSERT INTO `icon` VALUES ('818', 'switch_video e41f');
INSERT INTO `icon` VALUES ('819', 'sync e627');
INSERT INTO `icon` VALUES ('820', 'sync_disabled e628');
INSERT INTO `icon` VALUES ('821', 'sync_problem e629');
INSERT INTO `icon` VALUES ('822', 'system_update e62a');
INSERT INTO `icon` VALUES ('823', 'system_update_alt e8d7');
INSERT INTO `icon` VALUES ('824', 'tab e8d8');
INSERT INTO `icon` VALUES ('825', 'tab_unselected e8d9');
INSERT INTO `icon` VALUES ('826', 'tablet e32f');
INSERT INTO `icon` VALUES ('827', 'tablet_android e330');
INSERT INTO `icon` VALUES ('828', 'tablet_mac e331');
INSERT INTO `icon` VALUES ('829', 'tag_faces e420');
INSERT INTO `icon` VALUES ('830', 'tap_and_play e62b');
INSERT INTO `icon` VALUES ('831', 'terrain e564');
INSERT INTO `icon` VALUES ('832', 'text_fields e262');
INSERT INTO `icon` VALUES ('833', 'text_format e165');
INSERT INTO `icon` VALUES ('834', 'textsms e0d8');
INSERT INTO `icon` VALUES ('835', 'texture e421');
INSERT INTO `icon` VALUES ('836', 'theaters e8da');
INSERT INTO `icon` VALUES ('837', 'thumb_down e8db');
INSERT INTO `icon` VALUES ('838', 'thumb_up e8dc');
INSERT INTO `icon` VALUES ('839', 'thumbs_up_down e8dd');
INSERT INTO `icon` VALUES ('840', 'time_to_leave e62c');
INSERT INTO `icon` VALUES ('841', 'timelapse e422');
INSERT INTO `icon` VALUES ('842', 'timeline e922');
INSERT INTO `icon` VALUES ('843', 'timer e425');
INSERT INTO `icon` VALUES ('844', 'timer_10 e423');
INSERT INTO `icon` VALUES ('845', 'timer_3 e424');
INSERT INTO `icon` VALUES ('846', 'timer_off e426');
INSERT INTO `icon` VALUES ('847', 'title e264');
INSERT INTO `icon` VALUES ('848', 'toc e8de');
INSERT INTO `icon` VALUES ('849', 'today e8df');
INSERT INTO `icon` VALUES ('850', 'toll e8e0');
INSERT INTO `icon` VALUES ('851', 'tonality e427');
INSERT INTO `icon` VALUES ('852', 'touch_app e913');
INSERT INTO `icon` VALUES ('853', 'toys e332');
INSERT INTO `icon` VALUES ('854', 'track_changes e8e1');
INSERT INTO `icon` VALUES ('855', 'traffic e565');
INSERT INTO `icon` VALUES ('856', 'train e570');
INSERT INTO `icon` VALUES ('857', 'tram e571');
INSERT INTO `icon` VALUES ('858', 'transfer_within_a_station e572');
INSERT INTO `icon` VALUES ('859', 'transform e428');
INSERT INTO `icon` VALUES ('860', 'translate e8e2');
INSERT INTO `icon` VALUES ('861', 'trending_down e8e3');
INSERT INTO `icon` VALUES ('862', 'trending_flat e8e4');
INSERT INTO `icon` VALUES ('863', 'trending_up e8e5');
INSERT INTO `icon` VALUES ('864', 'tune e429');
INSERT INTO `icon` VALUES ('865', 'turned_in e8e6');
INSERT INTO `icon` VALUES ('866', 'turned_in_not e8e7');
INSERT INTO `icon` VALUES ('867', 'tv e333');
INSERT INTO `icon` VALUES ('868', 'unarchive e169');
INSERT INTO `icon` VALUES ('869', 'undo e166');
INSERT INTO `icon` VALUES ('870', 'unfold_less e5d6');
INSERT INTO `icon` VALUES ('871', 'unfold_more e5d7');
INSERT INTO `icon` VALUES ('872', 'update e923');
INSERT INTO `icon` VALUES ('873', 'usb e1e0');
INSERT INTO `icon` VALUES ('874', 'verified_user e8e8');
INSERT INTO `icon` VALUES ('875', 'vertical_align_bottom e258');
INSERT INTO `icon` VALUES ('876', 'vertical_align_center e259');
INSERT INTO `icon` VALUES ('877', 'vertical_align_top e25a');
INSERT INTO `icon` VALUES ('878', 'vibration e62d');
INSERT INTO `icon` VALUES ('879', 'video_call e070');
INSERT INTO `icon` VALUES ('880', 'video_label e071');
INSERT INTO `icon` VALUES ('881', 'video_library e04a');
INSERT INTO `icon` VALUES ('882', 'videocam e04b');
INSERT INTO `icon` VALUES ('883', 'videocam_off e04c');
INSERT INTO `icon` VALUES ('884', 'videogame_asset e338');
INSERT INTO `icon` VALUES ('885', 'view_agenda e8e9');
INSERT INTO `icon` VALUES ('886', 'view_array e8ea');
INSERT INTO `icon` VALUES ('887', 'view_carousel e8eb');
INSERT INTO `icon` VALUES ('888', 'view_column e8ec');
INSERT INTO `icon` VALUES ('889', 'view_comfy e42a');
INSERT INTO `icon` VALUES ('890', 'view_compact e42b');
INSERT INTO `icon` VALUES ('891', 'view_day e8ed');
INSERT INTO `icon` VALUES ('892', 'view_headline e8ee');
INSERT INTO `icon` VALUES ('893', 'view_list e8ef');
INSERT INTO `icon` VALUES ('894', 'view_module e8f0');
INSERT INTO `icon` VALUES ('895', 'view_quilt e8f1');
INSERT INTO `icon` VALUES ('896', 'view_stream e8f2');
INSERT INTO `icon` VALUES ('897', 'view_week e8f3');
INSERT INTO `icon` VALUES ('898', 'vignette e435');
INSERT INTO `icon` VALUES ('899', 'visibility e8f4');
INSERT INTO `icon` VALUES ('900', 'visibility_off e8f5');
INSERT INTO `icon` VALUES ('901', 'voice_chat e62e');
INSERT INTO `icon` VALUES ('902', 'voicemail e0d9');
INSERT INTO `icon` VALUES ('903', 'volume_down e04d');
INSERT INTO `icon` VALUES ('904', 'volume_mute e04e');
INSERT INTO `icon` VALUES ('905', 'volume_off e04f');
INSERT INTO `icon` VALUES ('906', 'volume_up e050');
INSERT INTO `icon` VALUES ('907', 'vpn_key e0da');
INSERT INTO `icon` VALUES ('908', 'vpn_lock e62f');
INSERT INTO `icon` VALUES ('909', 'wallpaper e1bc');
INSERT INTO `icon` VALUES ('910', 'warning e002');
INSERT INTO `icon` VALUES ('911', 'watch e334');
INSERT INTO `icon` VALUES ('912', 'watch_later e924');
INSERT INTO `icon` VALUES ('913', 'wb_auto e42c');
INSERT INTO `icon` VALUES ('914', 'wb_cloudy e42d');
INSERT INTO `icon` VALUES ('915', 'wb_incandescent e42e');
INSERT INTO `icon` VALUES ('916', 'wb_iridescent e436');
INSERT INTO `icon` VALUES ('917', 'wb_sunny e430');
INSERT INTO `icon` VALUES ('918', 'wc e63d');
INSERT INTO `icon` VALUES ('919', 'web e051');
INSERT INTO `icon` VALUES ('920', 'web_asset e069');
INSERT INTO `icon` VALUES ('921', 'weekend e16b');
INSERT INTO `icon` VALUES ('922', 'whatshot e80e');
INSERT INTO `icon` VALUES ('923', 'widgets e1bd');
INSERT INTO `icon` VALUES ('924', 'wifi e63e');
INSERT INTO `icon` VALUES ('925', 'wifi_lock e1e1');
INSERT INTO `icon` VALUES ('926', 'wifi_tethering e1e2');
INSERT INTO `icon` VALUES ('927', 'work e8f9');
INSERT INTO `icon` VALUES ('928', 'wrap_text e25b');
INSERT INTO `icon` VALUES ('929', 'youtube_searched_for e8fa');
INSERT INTO `icon` VALUES ('930', 'zoom_in e8ff');
INSERT INTO `icon` VALUES ('931', 'zoom_out e900');
INSERT INTO `icon` VALUES ('932', 'zoom_out_map e56b');

-- ----------------------------
-- Table structure for kategori_page
-- ----------------------------
DROP TABLE IF EXISTS `kategori_page`;
CREATE TABLE `kategori_page` (
  `id_kategori_page` int(10) NOT NULL AUTO_INCREMENT,
  `jenis_page` varchar(100) NOT NULL,
  `inisial` varchar(200) NOT NULL,
  PRIMARY KEY (`id_kategori_page`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of kategori_page
-- ----------------------------
INSERT INTO `kategori_page` VALUES ('1', 'Admin Menu', 'admin-menu');
INSERT INTO `kategori_page` VALUES ('2', 'Website Menu', 'website-menu');

-- ----------------------------
-- Table structure for menu
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) NOT NULL,
  `menu_name` varchar(128) NOT NULL,
  `description` varchar(150) NOT NULL,
  `icon` varchar(150) NOT NULL,
  `menu_link` varchar(150) NOT NULL,
  `menu_sort` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `is_default` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_link_2` (`menu_link`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('14', '64', 'Module Configuration', '', 'developer_board e30d', 'list_modul', '2', '7', null);
INSERT INTO `menu` VALUES ('15', '64', 'Menu Configuration', '', 'menu e5d2', 'list_menu', '1', '7', null);
INSERT INTO `menu` VALUES ('54', '0', 'Administrator', '', 'settings e8b8', 'integrated_privilege2', '1', '7', '1');
INSERT INTO `menu` VALUES ('55', '64', 'Privilege Configuration', '', 'lock e897', 'integrated_privilege2', '4', '7', '0');
INSERT INTO `menu` VALUES ('61', '64', 'Sub Module Configuration', '', 'menu e5d2', 'sub_modul', '3', '7', '0');
INSERT INTO `menu` VALUES ('64', '54', 'Tools', '', 'build e869', '', '1', '7', '0');
INSERT INTO `menu` VALUES ('65', '54', 'Management User', '', 'people e7fb', '', '2', '7', '0');
INSERT INTO `menu` VALUES ('66', '65', 'Users', '', 'people e7fb', 'karyawan', '1', '7', '0');
INSERT INTO `menu` VALUES ('79', '65', 'Level User', '', 'layers e53b', 'list_level', '3', '7', '0');
INSERT INTO `menu` VALUES ('94', '54', 'Dashboard', '', 'grade e885', 'superadmin_dashboard', '0', '7', '0');
INSERT INTO `menu` VALUES ('95', '0', 'Dashboard', '', 'account_circle e853', 'superadmin_dashboard', '2', '5', '1');
INSERT INTO `menu` VALUES ('96', '54', 'Engine Configuration', '', 'settings e8b8', '', '4', '7', '0');
INSERT INTO `menu` VALUES ('97', '96', 'Socmed Account', '', 'verified_user e8e8', 'socmed_account', '1', '7', '0');
INSERT INTO `menu` VALUES ('98', '54', 'Client Configuration', '', 'adjust e39e', '', '5', '7', '0');
INSERT INTO `menu` VALUES ('99', '98', 'Registration', '', 'receipt e8b0', 'registration_client', '1', '7', '0');
INSERT INTO `menu` VALUES ('100', '98', 'List Client', '', 'list e896', 'list_client', '3', '7', '0');
INSERT INTO `menu` VALUES ('101', '98', 'User Client', '', 'whatshot e80e', 'user_client', '4', '7', '0');
INSERT INTO `menu` VALUES ('102', '54', 'Service', '', 'rv_hookup e642', '', '5', '7', '0');
INSERT INTO `menu` VALUES ('103', '102', 'Template Login', '', 'terrain e564', 'template_login', '1', '7', '0');
INSERT INTO `menu` VALUES ('104', '102', 'Content Management System', '', 'contacts e0ba', 'content_management', '6', '7', '0');

-- ----------------------------
-- Table structure for m_icon
-- ----------------------------
DROP TABLE IF EXISTS `m_icon`;
CREATE TABLE `m_icon` (
  `id` varchar(255) NOT NULL,
  `name_icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- ----------------------------
-- Records of m_icon
-- ----------------------------
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                            2', 'fa-anchor');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                            3', 'fa-archive');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                            4', 'fa-arrows');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                            5', 'fa-arrows-h');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                            6', 'fa-arrows-v');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                            7', 'fa-asterisk');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                            8', 'fa-ban');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                            9', 'fa-bar-chart-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           10', 'fa-barcode');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           11', 'fa-bars');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           12', 'fa-beer');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           13', 'fa-bell');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           14', 'fa-bell-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           15', 'fa-bolt');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           16', 'fa-book');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           17', 'fa-bookmark');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           18', 'fa-bookmark-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           19', 'fa-briefcase');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           20', 'fa-bug');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           21', 'fa-building-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           22', 'fa-bullhorn');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           23', 'fa-bullseye');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           24', 'fa-calendar');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           25', 'fa-calendar-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           26', 'fa-camera');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           27', 'fa-camera-retro');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           28', 'fa-caret-square-o-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           29', 'fa-caret-square-o-left');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           30', 'fa-caret-square-o-right');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           31', 'fa-caret-square-o-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           32', 'fa-certificate');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           33', 'fa-check');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           34', 'fa-check-circle');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           35', 'fa-check-circle-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           36', 'fa-check-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           37', 'fa-check-square-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           38', 'fa-circle');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           39', 'fa-circle-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           40', 'fa-clock-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           41', 'fa-cloud');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           42', 'fa-cloud-download');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           43', 'fa-cloud-upload');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           44', 'fa-code');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           45', 'fa-code-fork');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           46', 'fa-coffee');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           47', 'fa-cog');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           48', 'fa-cogs');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           49', 'fa-comment');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           50', 'fa-comment-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           51', 'fa-comments');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           52', 'fa-comments-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           53', 'fa-compass');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           54', 'fa-credit-card');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           55', 'fa-crop');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           56', 'fa-crosshairs');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           57', 'fa-cutlery');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           58', 'fa-dashboard(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           59', 'fa-desktop');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           60', 'fa-dot-circle-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           61', 'fa-download');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           62', 'fa-edit(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           63', 'fa-ellipsis-h');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           64', 'fa-ellipsis-v');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           65', 'fa-envelope');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           66', 'fa-envelope-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           67', 'fa-eraser');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           68', 'fa-exchange');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           69', 'fa-exclamation');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           70', 'fa-exclamation-circle');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           71', 'fa-exclamation-triangle');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           72', 'fa-external-link');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           73', 'fa-external-link-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           74', 'fa-eye');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           75', 'fa-eye-slash');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           76', 'fa-female');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           77', 'fa-fighter-jet');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           78', 'fa-film');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           79', 'fa-filter');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           80', 'fa-fire');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           81', 'fa-fire-extinguisher');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           82', 'fa-flag');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           83', 'fa-flag-checkered');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           84', 'fa-flag-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           85', 'fa-flash(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           86', 'fa-flask');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           87', 'fa-folder');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           88', 'fa-folder-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           89', 'fa-folder-open');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           90', 'fa-folder-open-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           91', 'fa-frown-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           92', 'fa-gamepad');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           93', 'fa-gavel');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           94', 'fa-gear(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           95', 'fa-gears(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           96', 'fa-gift');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           97', 'fa-glass');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           98', 'fa-globe');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                           99', 'fa-group(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          100', 'fa-hdd-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          101', 'fa-headphones');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          102', 'fa-heart');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          103', 'fa-heart-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          104', 'fa-home');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          105', 'fa-inbox');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          106', 'fa-info');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          107', 'fa-info-circle');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          108', 'fa-key');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          109', 'fa-keyboard-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          110', 'fa-laptop');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          111', 'fa-leaf');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          112', 'fa-legal(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          113', 'fa-lemon-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          114', 'fa-level-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          115', 'fa-level-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          116', 'fa-lightbulb-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          117', 'fa-location-arrow');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          118', 'fa-lock');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          119', 'fa-magic');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          120', 'fa-magnet');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          121', 'fa-mail-forward(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          122', 'fa-mail-reply(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          123', 'fa-mail-reply-all');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          124', 'fa-male');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          125', 'fa-map-marker');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          126', 'fa-meh-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          127', 'fa-microphone');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          128', 'fa-microphone-slash');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          129', 'fa-minus');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          130', 'fa-minus-circle');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          131', 'fa-minus-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          132', 'fa-minus-square-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          133', 'fa-mobile');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          134', 'fa-mobile-phone(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          135', 'fa-money');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          136', 'fa-moon-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          137', 'fa-music');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          138', 'fa-pencil');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          139', 'fa-pencil-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          140', 'fa-pencil-square-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          141', 'fa-phone');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          142', 'fa-phone-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          143', 'fa-picture-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          144', 'fa-plane');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          145', 'fa-plus');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          146', 'fa-plus-circle');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          147', 'fa-plus-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          148', 'fa-plus-square-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          149', 'fa-power-off');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          150', 'fa-print');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          151', 'fa-puzzle-piece');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          152', 'fa-qrcode');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          153', 'fa-question');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          154', 'fa-question-circle');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          155', 'fa-quote-left');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          156', 'fa-quote-right');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          157', 'fa-random');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          158', 'fa-refresh');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          159', 'fa-reply');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          160', 'fa-reply-all');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          161', 'fa-retweet');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          162', 'fa-road');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          163', 'fa-rocket');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          164', 'fa-rss');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          165', 'fa-rss-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          166', 'fa-search');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          167', 'fa-search-minus');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          168', 'fa-search-plus');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          169', 'fa-share');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          170', 'fa-share-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          171', 'fa-share-square-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          172', 'fa-shield');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          173', 'fa-shopping-cart');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          174', 'fa-sign-in');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          175', 'fa-sign-out');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          176', 'fa-signal');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          177', 'fa-sitemap');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          178', 'fa-smile-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          179', 'fa-sort');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          180', 'fa-sort-alpha-asc');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          181', 'fa-sort-alpha-desc');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          182', 'fa-sort-amount-asc');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          183', 'fa-sort-amount-desc');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          184', 'fa-sort-asc');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          185', 'fa-sort-desc');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          186', 'fa-sort-down(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          187', 'fa-sort-numeric-asc');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          188', 'fa-sort-numeric-desc');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          189', 'fa-sort-up(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          190', 'fa-spinner');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          191', 'fa-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          192', 'fa-square-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          193', 'fa-star');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          194', 'fa-star-half');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          195', 'fa-star-half-empty(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          196', 'fa-star-half-full(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          197', 'fa-star-half-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          198', 'fa-star-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          199', 'fa-subscript');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          200', 'fa-suitcase');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          201', 'fa-sun-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          202', 'fa-superscript');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          203', 'fa-tablet');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          204', 'fa-tachometer');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          205', 'fa-tag');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          206', 'fa-tags');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          207', 'fa-tasks');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          208', 'fa-terminal');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          209', 'fa-thumb-tack');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          210', 'fa-thumbs-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          211', 'fa-thumbs-o-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          212', 'fa-thumbs-o-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          213', 'fa-thumbs-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          214', 'fa-ticket');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          215', 'fa-times');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          216', 'fa-times-circle');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          217', 'fa-times-circle-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          218', 'fa-tint');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          219', 'fa-toggle-down(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          220', 'fa-toggle-left(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          221', 'fa-toggle-right(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          222', 'fa-toggle-up(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          223', 'fa-trash-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          224', 'fa-trophy');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          225', 'fa-truck');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          226', 'fa-umbrella');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          227', 'fa-unlock');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          228', 'fa-unlock-alt');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          229', 'fa-unsorted(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          230', 'fa-upload');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          231', 'fa-user');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          232', 'fa-users');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          233', 'fa-video-camera');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          234', 'fa-volume-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          235', 'fa-volume-off');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          236', 'fa-volume-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          237', 'fa-warning(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          238', 'fa-wheelchair');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          239', 'fa-wrench');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          240', 'fa-check-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          241', 'fa-check-square-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          242', 'fa-circle');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          243', 'fa-circle-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          244', 'fa-dot-circle-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          245', 'fa-minus-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          246', 'fa-minus-square-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          247', 'fa-plus-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          248', 'fa-bitcoin(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          249', 'fa-btc');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          250', 'fa-cny(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          251', 'fa-dollar(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          252', 'fa-eur');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          253', 'fa-euro(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          254', 'fa-gbp');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          255', 'fa-inr');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          256', 'fa-jpy');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          257', 'fa-krw');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          258', 'fa-money');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          259', 'fa-rmb(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          260', 'fa-rouble(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          261', 'fa-rub');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          262', 'fa-ruble(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          263', 'fa-rupee(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          264', 'fa-try');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          265', 'fa-turkish-lira(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          266', 'fa-usd');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          267', 'fa-won(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          268', 'fa-align-center');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          269', 'fa-align-justify');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          270', 'fa-align-left');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          271', 'fa-align-right');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          272', 'fa-bold');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          273', 'fa-chain(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          274', 'fa-chain-broken');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          275', 'fa-clipboard');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          276', 'fa-columns');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          277', 'fa-copy(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          278', 'fa-cut(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          279', 'fa-dedent(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          280', 'fa-eraser');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          281', 'fa-file');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          282', 'fa-file-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          283', 'fa-file-text');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          284', 'fa-file-text-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          285', 'fa-files-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          286', 'fa-floppy-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          287', 'fa-font');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          288', 'fa-indent');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          289', 'fa-italic');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          290', 'fa-link');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          291', 'fa-list');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          292', 'fa-list-alt');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          293', 'fa-list-ol');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          294', 'fa-list-ul');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          295', 'fa-outdent');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          296', 'fa-paperclip');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          297', 'fa-paste(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          298', 'fa-repeat');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          299', 'fa-rotate-left(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          300', 'fa-rotate-right(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          301', 'fa-save(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          302', 'fa-scissors');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          303', 'fa-strikethrough');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          304', 'fa-table');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          305', 'fa-text-height');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          306', 'fa-text-width');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          307', 'fa-th');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          308', 'fa-th-large');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          309', 'fa-th-list');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          310', 'fa-underline');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          311', 'fa-undo');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          312', 'fa-angle-double-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          313', 'fa-angle-double-left');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          314', 'fa-angle-double-right');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          315', 'fa-angle-double-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          316', 'fa-angle-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          317', 'fa-angle-left');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          318', 'fa-angle-right');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          319', 'fa-angle-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          320', 'fa-arrow-circle-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          321', 'fa-arrow-circle-left');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          322', 'fa-arrow-circle-o-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          323', 'fa-arrow-circle-o-left');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          324', 'fa-arrow-circle-o-right');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          325', 'fa-arrow-circle-o-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          326', 'fa-arrow-circle-right');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          327', 'fa-arrow-circle-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          328', 'fa-arrow-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          329', 'fa-arrow-left');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          330', 'fa-arrow-right');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          331', 'fa-arrow-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          332', 'fa-arrows');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          333', 'fa-arrows-alt');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          334', 'fa-arrows-h');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          335', 'fa-arrows-v');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          336', 'fa-caret-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          337', 'fa-caret-left');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          338', 'fa-caret-right');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          339', 'fa-caret-square-o-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          340', 'fa-caret-square-o-left');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          341', 'fa-caret-square-o-right');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          342', 'fa-caret-square-o-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          343', 'fa-caret-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          344', 'fa-chevron-circle-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          345', 'fa-chevron-circle-left');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          346', 'fa-chevron-circle-right');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          347', 'fa-chevron-circle-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          348', 'fa-chevron-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          349', 'fa-chevron-left');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          350', 'fa-chevron-right');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          351', 'fa-chevron-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          352', 'fa-hand-o-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          353', 'fa-hand-o-left');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          354', 'fa-hand-o-right');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          355', 'fa-hand-o-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          356', 'fa-long-arrow-down');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          357', 'fa-long-arrow-left');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          358', 'fa-long-arrow-right');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          359', 'fa-long-arrow-up');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          360', 'fa-toggle-down(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          361', 'fa-toggle-left(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          362', 'fa-toggle-right(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          363', 'fa-toggle-up(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          364', 'fa-arrows-alt');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          365', 'fa-backward');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          366', 'fa-compress');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          367', 'fa-eject');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          368', 'fa-expand');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          369', 'fa-fast-backward');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          370', 'fa-fast-forward');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          371', 'fa-forward');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          372', 'fa-pause');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          373', 'fa-play');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          374', 'fa-play-circle');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          375', 'fa-play-circle-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          376', 'fa-step-backward');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          377', 'fa-step-forward');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          378', 'fa-stop');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          379', 'fa-youtube-play');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          380', 'fa-adn');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          381', 'fa-android');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          382', 'fa-apple');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          383', 'fa-bitbucket');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          384', 'fa-bitbucket-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          385', 'fa-bitcoin(alias)');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          386', 'fa-btc');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          387', 'fa-css3');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          388', 'fa-dribbble');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          389', 'fa-dropbox');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          390', 'fa-facebook');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          391', 'fa-facebook-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          392', 'fa-flickr');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          393', 'fa-foursquare');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          394', 'fa-github');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          395', 'fa-github-alt');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          396', 'fa-github-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          397', 'fa-gittip');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          398', 'fa-google-plus');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          399', 'fa-google-plus-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          400', 'fa-html5');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          401', 'fa-instagram');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          402', 'fa-linkedin');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          403', 'fa-linkedin-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          404', 'fa-linux');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          405', 'fa-maxcdn');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          406', 'fa-pagelines');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          407', 'fa-pinterest');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          408', 'fa-pinterest-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          409', 'fa-renren');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          410', 'fa-skype');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          411', 'fa-stack-exchange');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          412', 'fa-stack-overflow');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          413', 'fa-trello');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          414', 'fa-tumblr');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          415', 'fa-tumblr-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          416', 'fa-twitter');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          417', 'fa-twitter-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          418', 'fa-vimeo-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          419', 'fa-vk');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          420', 'fa-weibo');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          421', 'fa-windows');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          422', 'fa-xing');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          423', 'fa-xing-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          424', 'fa-ambulance');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          425', 'fa-h-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          426', 'fa-hospital-o');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          427', 'fa-medkit');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          428', 'fa-plus-square');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          429', 'fa-stethoscope');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          430', 'fa-user-md');
INSERT INTO `m_icon` VALUES ('                                                                                                                                                                                                                                                          431', 'fa-wheelchair');
