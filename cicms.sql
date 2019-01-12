/*
Navicat MySQL Data Transfer

Source Server         : 本地
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : cicms

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2019-01-12 10:36:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for wl_admin
-- ----------------------------
DROP TABLE IF EXISTS `wl_admin`;
CREATE TABLE `wl_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `userpwd` char(32) NOT NULL DEFAULT '',
  `email` varchar(50) DEFAULT NULL,
  `regtime` int(11) DEFAULT NULL,
  `regip` varchar(15) DEFAULT NULL,
  `logintime` int(10) DEFAULT NULL,
  `loginip` varchar(15) DEFAULT NULL,
  `hits` int(10) NOT NULL DEFAULT '0',
  `listorder` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `type` int(2) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid` (`name`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wl_admin
-- ----------------------------
INSERT INTO `wl_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@localhost', '0', '127.0.0.1', '1547260115', '127.0.0.1', '4', '0', '1');

-- ----------------------------
-- Table structure for wl_anli
-- ----------------------------
DROP TABLE IF EXISTS `wl_anli`;
CREATE TABLE `wl_anli` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `catid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '栏目id',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `des` varchar(800) DEFAULT NULL COMMENT '摘要',
  `content` text NOT NULL COMMENT '内容',
  `image` varchar(100) DEFAULT NULL COMMENT '图片',
  `hits` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击次数',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `position` varchar(50) DEFAULT '0' COMMENT '推荐位',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `username` char(50) NOT NULL DEFAULT '' COMMENT '发布人',
  `keyword` varchar(100) DEFAULT NULL COMMENT '关键字',
  `duo_img` varchar(1000) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `tid` (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wl_anli
-- ----------------------------
INSERT INTO `wl_anli` VALUES ('6', '77', '湖南邵阳 中驰公馆', '中驰公馆是湖南邵阳标杆豪宅物业，也是区域内首个科技住宅。整个社区1700多户，全部采用欧瑞博的智能家居系统，打造全屋智能的科技家居生活和“互联网+”智慧社区，成为湖南省的智慧地产项目典范。', '<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<strong style=\"padding:0px;margin:0px;background:transparent;border:0px;outline:0px;vertical-align:baseline;\"></strong><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">中驰公馆是湖南邵阳标杆豪宅物业，也是区域内首个科技住宅。整个社区1700多户，全部采用欧瑞博的智能家居系统，打造全屋智能的科技家居生活和“互联网+”智慧社区，成为湖南省的智慧地产项目典范。</span> \r\n</p>\r\n<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">中驰公馆是湖南邵阳标杆豪宅物业，也是区域内首个科技住宅。整个社区1700多户，全部采用欧瑞博的智能家居系统，打造全屋智能的科技家居生活和“互联网+”智慧社区，成为湖南省的智慧地产项目典范。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">中驰公馆是湖南邵阳标杆豪宅物业，也是区域内首个科技住宅。整个社区1700多户，全部采用欧瑞博的智能家居系统，打造全屋智能的科技家居生活和“互联网+”智慧社区，成为湖南省的智慧地产项目典范。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">中驰公馆是湖南邵阳标杆豪宅物业，也是区域内首个科技住宅。整个社区1700多户，全部采用欧瑞博的智能家居系统，打造全屋智能的科技家居生活和“互联网+”智慧社区，成为湖南省的智慧地产项目典范。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">中驰公馆是湖南邵阳标杆豪宅物业，也是区域内首个科技住宅。整个社区1700多户，全部采用欧瑞博的智能家居系统，打造全屋智能的科技家居生活和“互联网+”智慧社区，成为湖南省的智慧地产项目典范。</span> \r\n</p>\r\n<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<img src=\"/upload/editor/image/20180118/20180118102530_38762.jpg\" title=\"湖南邵阳 中驰公馆\" alt=\"湖南邵阳 中驰公馆\" /> \r\n</p>', 'upload/images/2018/01/18/201801185a600581a19c6.jpg', '2', '1513685857', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a603c8237fda.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a603c8c537a3.jpg\',\n)');
INSERT INTO `wl_anli` VALUES ('7', '77', '深圳 东方明珠城', '东方明珠城是位于深圳的高端住宅项目。为了满足高端人士的居家需求，项目采用欧瑞博的智能照明、智能安防、智能窗帘、智能影音系统，实现个性化的智能控制。让业主享受到智能家居生活的安全、便捷、舒适。', '<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<strong style=\"padding:0px;margin:0px;background:transparent;border:0px;outline:0px;vertical-align:baseline;\"><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">东方明珠城是位于深圳的高端住宅项目。为了满足高端人士的居家需求，项目采用欧瑞博的智能照明、智能安防、智能窗帘、智能影音系统，实现个性化的智能控制。让业主享受到智能家居生活的安全、便捷、舒适。</span><br />\r\n</strong> \r\n</p>\r\n<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">东方明珠城是位于深圳的高端住宅项目。为了满足高端人士的居家需求，项目采用欧瑞博的智能照明、智能安防、智能窗帘、智能影音系统，实现个性化的智能控制。让业主享受到智能家居生活的安全、便捷、舒适。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">东方明珠城是位于深圳的高端住宅项目。为了满足高端人士的居家需求，项目采用欧瑞博的智能照明、智能安防、智能窗帘、智能影音系统，实现个性化的智能控制。让业主享受到智能家居生活的安全、便捷、舒适。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">东方明珠城是位于深圳的高端住宅项目。为了满足高端人士的居家需求，项目采用欧瑞博的智能照明、智能安防、智能窗帘、智能影音系统，实现个性化的智能控制。让业主享受到智能家居生活的安全、便捷、舒适。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">东方明珠城是位于深圳的高端住宅项目。为了满足高端人士的居家需求，项目采用欧瑞博的智能照明、智能安防、智能窗帘、智能影音系统，实现个性化的智能控制。让业主享受到智能家居生活的安全、便捷、舒适。</span> \r\n</p>\r\n<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<img src=\"/upload/editor/image/20180118/20180118102232_61808.jpg\" title=\"深圳 东方明珠城\" alt=\"深圳 东方明珠城\" /><br />\r\n<strong style=\"padding:0px;margin:0px;background:transparent;border:0px;outline:0px;vertical-align:baseline;\"></strong> \r\n</p>\r\n<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<br />\r\n</p>', 'upload/images/2018/01/18/201801185a6004cfb163a.jpg', '3', '1513685954', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a603c686e110.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a603c7279d33.jpg\',\n)');
INSERT INTO `wl_anli` VALUES ('8', '77', '广州 碧桂园凤凰城', '碧桂园凤凰城是集别墅、花园洋房等多形态物业于一体，占地1330万的大城项目。爱搜客联手碧桂园，打造全屋智能化的精装住宅，为上千户业主提供科技、时尚的全新居住体验，助力凤凰城实现2015年销量第一。', '<p>\r\n	<span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">碧桂园凤凰城是集别墅、花园洋房等多形态物业于一体，占地1330万的大城项目。欧瑞博联手碧桂园，打造全屋智能化的精装住宅，为上千户业主提供科技、时尚的全新居住体验，助力凤凰城实现2015年销量第一。<br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">碧桂园凤凰城是集别墅、花园洋房等多形态物业于一体，占地1330万的大城项目。欧瑞博联手碧桂园，打造全屋智能化的精装住宅，为上千户业主提供科技、时尚的全新居住体验，助力凤凰城实现2015年销量第一。</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">碧桂园凤凰城是集别墅、花园洋房等多形态物业于一体，占地1330万的大城项目。欧瑞博联手碧桂园，打造全屋智能化的精装住宅，为上千户业主提供科技、时尚的全新居住体验，助力凤凰城实现2015年销量第一。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">碧桂园凤凰城是集别墅、花园洋房等多形态物业于一体，占地1330万的大城项目。欧瑞博联手碧桂园，打造全屋智能化的精装住宅，为上千户业主提供科技、时尚的全新居住体验，助力凤凰城实现2015年销量第一。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">碧桂园凤凰城是集别墅、花园洋房等多形态物业于一体，占地1330万的大城项目。欧瑞博联手碧桂园，打造全屋智能化的精装住宅，为上千户业主提供科技、时尚的全新居住体验，助力凤凰城实现2015年销量第一。</span> \r\n</p>\r\n<p>\r\n	<img src=\"/upload/editor/image/20180118/20180118101917_75780.jpg\" title=\"广州 碧桂园凤凰城\" alt=\"广州 碧桂园凤凰城\" /><br />\r\n<span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\"></span> \r\n</p>', 'upload/images/2018/01/18/201801185a60040e05c8a.jpg', '5', '1513686060', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a603c4743d69.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a603c5bb18e0.jpg\',\n)');
INSERT INTO `wl_anli` VALUES ('9', '76', '深圳 新国都工业园', '新国都响应国家十二五规划中节能环保的号召，与欧瑞博达成战略合作，在定制安防、照明、空调、门窗、门锁等智能系统互联互动。高效节能的同时，也大大提高了企业智能化管理和服务。', '<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<strong style=\"padding:0px;margin:0px;background:transparent;border:0px;outline:0px;vertical-align:baseline;\"></strong><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">新国都响应国家十二五规划中节能环保的号召，与欧瑞博达成战略合作，在定制安防、照明、空调、门窗、门锁等智能系统互联互动。高效节能的同时，也大大提高了企业智能化管理和服务。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">新国都响应国家十二五规划中节能环保的号召，与欧瑞博达成战略合作，在定制安防、照明、空调、门窗、门锁等智能系统互联互动。高效节能的同时，也大大提高了企业智能化管理和服务。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">新国都响应国家十二五规划中节能环保的号召，与欧瑞博达成战略合作，在定制安防、照明、空调、门窗、门锁等智能系统互联互动。高效节能的同时，也大大提高了企业智能化管理和服务。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">新国都响应国家十二五规划中节能环保的号召，与欧瑞博达成战略合作，在定制安防、照明、空调、门窗、门锁等智能系统互联互动。高效节能的同时，也大大提高了企业智能化管理和服务。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">新国都响应国家十二五规划中节能环保的号召，与欧瑞博达成战略合作，在定制安防、照明、空调、门窗、门锁等智能系统互联互动。高效节能的同时，也大大提高了企业智能化管理和服务。</span> \r\n</p>\r\n<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<img src=\"/upload/editor/image/20180118/20180118101800_56436.jpg\" title=\"深圳 新国都工业园\" alt=\"深圳 新国都工业园\" /> \r\n</p>\r\n<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<br />\r\n</p>', 'upload/images/2018/01/18/201801185a6003c0b2827.jpg', '6', '1513686143', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a603c28b65a8.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a603c2f7756c.jpg\',\n)');
INSERT INTO `wl_anli` VALUES ('10', '76', '佛山 创智谷', '佛山创智谷是在政府支持下创立的智慧化科技园，是集合产业、办公、商业、服务等多业态、多功能的智慧园区。欧瑞博与创智谷达成战略合作，为园区提供一整套智慧办公解决方案，率先实现企业智能办公。', '<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">佛山创智谷是在政府支持下创立的智慧化科技园，是集合产业、办公、商业、服务等多业态、多功能的智慧园区。欧瑞博与创智谷达成战略合作，为园区提供一整套智慧办公解决方案，率先实现企业智能办公。</span> \r\n</p>\r\n<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">佛山创智谷是在政府支持下创立的智慧化科技园，是集合产业、办公、商业、服务等多业态、多功能的智慧园区。欧瑞博与创智谷达成战略合作，为园区提供一整套智慧办公解决方案，率先实现企业智能办公。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">佛山创智谷是在政府支持下创立的智慧化科技园，是集合产业、办公、商业、服务等多业态、多功能的智慧园区。欧瑞博与创智谷达成战略合作，为园区提供一整套智慧办公解决方案，率先实现企业智能办公。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">佛山创智谷是在政府支持下创立的智慧化科技园，是集合产业、办公、商业、服务等多业态、多功能的智慧园区。欧瑞博与创智谷达成战略合作，为园区提供一整套智慧办公解决方案，率先实现企业智能办公。</span> \r\n</p>\r\n<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<img src=\"/upload/editor/image/20180118/20180118101638_64739.jpg\" title=\"佛山 创智谷\" alt=\"佛山 创智谷\" /> \r\n</p>\r\n<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<br />\r\n</p>\r\n<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<br />\r\n</p>', 'upload/images/2018/01/18/201801185a6003705b0a2.jpg', '13', '1513686217', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a603c13bd9ad.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a603c19dcd24.jpg\',\n)');
INSERT INTO `wl_anli` VALUES ('11', '75', '北京 五道口店 • XY酒店公寓', '欧瑞博帮助XY酒店公寓创新化酒店客户下单、入住、酒店设备智能化交互、酒店客房服务等步骤，大大降低酒店管理运营成本，提高酒店服务质量，帮助酒店管理提高管理效率，给客户带来更舒适、时尚，便捷和科技感的入住体验。', '<p>\r\n	<span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\"><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">欧瑞博帮助XY酒店公寓创新化酒店客户下单、入住、酒店设备智能化交互、酒店客房服务等步骤，大大降低酒店管理运营成本，提高酒店服务质量，帮助酒店管理提高管理效率，给客户带来更舒适、时尚，便捷和科技感的入住体验。</span></span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\"><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\"><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">欧瑞博帮助XY酒店公寓创新化酒店客户下单、入住、酒店设备智能化交互、酒店客房服务等步骤，大大降低酒店管理运营成本，提高酒店服务质量，帮助酒店管理提高管理效率，给客户带来更舒适、时尚，便捷和科技感的入住体验。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">欧瑞博帮助XY酒店公寓创新化酒店客户下单、入住、酒店设备智能化交互、酒店客房服务等步骤，大大降低酒店管理运营成本，提高酒店服务质量，帮助酒店管理提高管理效率，给客户带来更舒适、时尚，便捷和科技感的入住体验。</span><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">欧瑞博帮助XY酒店公寓创新化酒店客户下单、入住、酒店设备智能化交互、酒店客房服务等步骤，大大降低酒店管理运营成本，提高酒店服务质量，帮助酒店管理提高管理效率，给客户带来更舒适、时尚，便捷和科技感的入住体验。</span><br />\r\n</span></span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\"><span style=\"color:#888888;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\"><img src=\"/upload/editor/image/20180118/20180118101524_79013.jpg\" title=\"北京 五道口店 • XY酒店公寓\" alt=\"北京 五道口店 • XY酒店公寓\" /><br />\r\n</span></span> \r\n</p>', 'upload/images/2018/01/18/201801185a60030de2945.jpg', '7', '1513686302', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a603bf909e9e.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a603c035ddf9.jpg\',\n)');
INSERT INTO `wl_anli` VALUES ('12', '75', '杭州 领军东方君悦店 •XY酒店公寓', '欧瑞博帮助XY酒店公寓实现基于微信平台开发的创新型智慧酒店综合服务管理平台，优化酒店客户下单、入住、酒店设备智能化交互、酒店客房服务等步骤，大大降低酒店管理运营成本，提高酒店服务质量，帮助酒店管理提高管理效率，给客户带来更舒适、时尚，便捷和科技感的入住体验。', '<p>\r\n	欧瑞博帮助XY酒店公寓实现基于微信平台开发的创新型智慧酒店综合服务管理平台，优化酒店客户下单、入住、酒店设备智能化交互、酒店客房服务等步骤，大大降低酒店管理运营成本，提高酒店服务质量，帮助酒店管理提高管理效率，给客户带来更舒适、时尚，便捷和科技感的入住体验。\r\n</p>\r\n<p>\r\n	欧瑞博帮助XY酒店公寓实现基于微信平台开发的创新型智慧酒店综合服务管理平台，优化酒店客户下单、入住、酒店设备智能化交互、酒店客房服务等步骤，大大降低酒店管理运营成本，提高酒店服务质量，帮助酒店管理提高管理效率，给客户带来更舒适、时尚，便捷和科技感的入住体验。欧瑞博帮助XY酒店公寓实现基于微信平台开发的创新型智慧酒店综合服务管理平台，优化酒店客户下单、入住、酒店设备智能化交互、酒店客房服务等步骤，大大降低酒店管理运营成本，提高酒店服务质量，帮助酒店管理提高管理效率，给客户带来更舒适、时尚，便捷和科技感的入住体验\r\n</p>\r\n<p>\r\n	。欧瑞博帮助XY酒店公寓实现基于微信平台开发的创新型智慧酒店综合服务管理平台，优化酒店客户下单、入住、酒店设备智能化交互、酒店客房服务等步骤，大大降低酒店管理运营成本，提高酒店服务质量，帮助酒店管理提高管理效率，给客户带来更舒适、时尚，便捷和科技感的入住体验。\r\n</p>\r\n<p>\r\n	<img src=\"/upload/editor/image/20180118/20180118101344_41569.jpg\" title=\"杭州 领军东方君悦店 •XY酒店公寓\" alt=\"杭州 领军东方君悦店 •XY酒店公寓\" /> \r\n</p>\r\n<p style=\"padding:0px;margin:0px;background:#FFFFFF;border:0px;outline:0px;vertical-align:baseline;color:#000000;line-height:26px;font-size:14px;font-family:Arial, 微软雅黑;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\">\r\n	<br />\r\n</p>', 'upload/images/2018/01/18/201801185a6002b848312.jpg', '12', '1513686407', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a603bc90ea8e.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a603bd86e37d.jpg\',\n  3 => \'upload/images/2018/01/18/201801185a603be3c61ae.jpg\',\n)');
INSERT INTO `wl_anli` VALUES ('13', '76', '北京 万科蓝山', '万科蓝山地处北京东三环商务核心区，为CBD国际精英人群打造宜居、便捷的中心生活。欧瑞博为项目所有户型配置了七大智能家居系统，实现智能安防、智能灯光控制、智能影音控制等，全面解决城市精英人群的家居生活需求。', '<p>\r\n	万科蓝山地处北京东三环商务核心区，为CBD国际精英人群打造宜居、便捷的中心生活。欧瑞博为项目所有户型配置了七大智能家居系统，实现智能安防、智能灯光控制、智能影音控制等，全面解决城市精英人群的家居生活需求。\r\n</p>\r\n<p>\r\n	万科蓝山地处北京东三环商务核心区，为CBD国际精英人群打造宜居、便捷的中心生活。欧瑞博为项目所有户型配置了七大智能家居系统，实现智能安防、智能灯光控制、智能影音控制等，全面解决城市精英人群的家居生活需求。万科蓝山地处北京东三环商务核心区，为CBD国际精英人群打造宜居、便捷的中心生活。欧瑞博为项目所有户型配置了七大智能家居系统，实现智能安防、智能灯光控制、智能影音控制等，全面解决城市精英人群的家居生活需求。万科蓝山地处北京东三环商务核心区，为CBD国际精英人群打造宜居、便捷的中心生活。欧瑞博为项目所有户型配置了七大智能家居系统，实现智能安防、智能灯光控制、智能影音控制等，全面解决城市精英人群的家居生活需求。万科蓝山地处北京东三环商务核心区，为CBD国际精英人群打造宜居、便捷的中心生活。欧瑞博为项目所有户型配置了七大智能家居系统，实现智能安防、智能灯光控制、智能影音控制等，全面解决城市精英人群的家居生活需求。\r\n</p>\r\n<p>\r\n	<img src=\"/upload/editor/image/20180118/20180118101203_49179.jpg\" title=\"北京 万科蓝山\" alt=\"北京 万科蓝山\" /> \r\n</p>', 'upload/images/2018/01/18/201801185a600258e380f.jpg', '10', '1513686488', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a603b93a6165.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a603b9ac8aaa.jpg\',\n  3 => \'upload/images/2018/01/18/201801185a603ba67b760.jpg\',\n)');
INSERT INTO `wl_anli` VALUES ('14', '75', '上海 花样年·趣园', '花样年·趣园是花样年在上海打造的智慧公寓项目，整个项目使用欧瑞博的全套智能家居系统和产品，为国际商务人士提供安全、舒适、便捷的家居生活。同时也打造了国内首个欧瑞博智慧公寓体验中心。', '<p align=\"center\">\r\n	<img src=\"/upload/editor/image/20180118/20180118101040_66370.jpg\" title=\"上海 花样年·趣园\" alt=\"上海 花样年·趣园\" /> \r\n</p>\r\n<p>\r\n	花样年·趣园是花样年在上海打造的智慧公寓项目，整个项目使用欧瑞博的全套智能家居系统和产品，为国际商务人士提供安全、舒适、便捷的家居生活。同时也打造了国内首个欧瑞博智慧公寓体验中心\r\n</p>\r\n<p>\r\n	花样年·趣园是花样年在上海打造的智慧公寓项目，整个项目使用欧瑞博的全套智能家居系统和产品，为国际商务人士提供安全、舒适、便捷的家居生活。同时也打造了国内首个欧瑞博智慧公寓体验中心花样年·趣园是花样年在上海打造的智慧公寓项目，整个项目使用欧瑞博的全套智能家居系统和产品，为国际商务人士提供安全、舒适、便捷的家居生活。同时也打造了国内首个欧瑞博智慧公寓体验中心花样年·趣园是花样年在上海打造的智慧公寓项目，整个项目使用欧瑞博的全套智能家居系统和产品，为国际商务人士提供安全、舒适、便捷的家居生活。同时也打造了国内首个欧瑞博智慧公寓体验中心\r\n</p>', 'upload/images/2018/01/18/201801185a6001d9a2349.jpg', '49', '1513686576', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a603b67b3f26.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a603b6dbebc3.png\',\n  3 => \'upload/images/2018/01/18/201801185a603b7813186.jpg\',\n  4 => \'upload/images/2018/01/18/201801185a603b8415a7c.jpg\',\n  5 => \'upload/images/2018/01/18/201801185a603bb409118.jpg\',\n)');

-- ----------------------------
-- Table structure for wl_brand
-- ----------------------------
DROP TABLE IF EXISTS `wl_brand`;
CREATE TABLE `wl_brand` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '品牌名称',
  `url` varchar(100) NOT NULL DEFAULT '' COMMENT '品牌URL',
  `image` varchar(100) DEFAULT NULL COMMENT '图片',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `status` int(1) DEFAULT '0' COMMENT '0:不通过 1:通过',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `type` int(3) NOT NULL DEFAULT '0' COMMENT '分类ID',
  `content` text COMMENT '品牌描述',
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='网站设置表';

-- ----------------------------
-- Records of wl_brand
-- ----------------------------

-- ----------------------------
-- Table structure for wl_category
-- ----------------------------
DROP TABLE IF EXISTS `wl_category`;
CREATE TABLE `wl_category` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `modelid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `path` varchar(255) NOT NULL DEFAULT '0,',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `catname` varchar(30) NOT NULL,
  `seodescription` text COMMENT 'SEO描述',
  `seokeyword` varchar(255) DEFAULT '' COMMENT 'SEO关键字',
  `content` text NOT NULL COMMENT '栏目描述',
  `seotitle` varchar(255) DEFAULT '' COMMENT 'SEO标题',
  `catdir` varchar(30) NOT NULL DEFAULT '' COMMENT '目录名称',
  `image` varchar(255) DEFAULT NULL COMMENT '栏目图片',
  `url` varchar(100) NOT NULL DEFAULT '' COMMENT '外部链接URL',
  `ismenu` tinyint(2) unsigned NOT NULL DEFAULT '1' COMMENT '是否导航显示:1显示 0，关闭',
  PRIMARY KEY (`id`),
  KEY `siteid` (`type`),
  KEY `module` (`pid`,`listorder`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of wl_category
-- ----------------------------
INSERT INTO `wl_category` VALUES ('70', '0', '53', '0', '0,', '2', '新闻中心', '', '', '', '', '', 'category/2018015a5f1603693d2.jpg', '', '1');
INSERT INTO `wl_category` VALUES ('71', '0', '2', '0', '0,', '1', '关于我们', '', '', '     ', '', '', 'category/2018015a5f37d60930c.jpg', '', '1');
INSERT INTO `wl_category` VALUES ('73', '0', '54', '0', '0,', '4', '成功案例', '', '', '', '', '', 'category/2018015a5ef495321a5.jpg', '', '1');
INSERT INTO `wl_category` VALUES ('75', '0', '54', '73', '0,73,', '0', '智慧酒店', '', '', '', '', '', null, '', '1');
INSERT INTO `wl_category` VALUES ('76', '0', '54', '73', '0,73,', '0', '智慧办公', '', '', '', '', '', null, '', '1');
INSERT INTO `wl_category` VALUES ('77', '0', '54', '73', '0,73,', '0', '智慧家庭', '', '', '', '', '', null, '', '1');
INSERT INTO `wl_category` VALUES ('78', '0', '53', '70', '0,70,', '1', '企业动态', '', '', '', '', '', null, '', '1');
INSERT INTO `wl_category` VALUES ('79', '0', '53', '70', '0,70,', '0', '行业看点', '', '', '', '', '', null, '', '1');
INSERT INTO `wl_category` VALUES ('80', '0', '2', '71', '0,71,', '0', '联系方式', '', '', '', '', '', null, '', '1');
INSERT INTO `wl_category` VALUES ('81', '0', '2', '71', '0,71,', '0', '企业资质', '', '', '', '', '', null, '', '1');
INSERT INTO `wl_category` VALUES ('82', '0', '2', '71', '0,71,', '0', '企业简介', '', '', '爱搜客智能家居通过物联⽹、⼈⼯智能、云计算等技术，连接基础电器，使设备互联互通，构建包括 智能控制中心、智能照明系统、暖通环境系统、智能安防系统、能源管理系统、智能影音系统、门窗遮阳系统等七大系统。 团队坚持研发投⼊与设计创新，实现对家居、办公、酒店等场景的智能化，给用户创造更安全、更节能、更高效、可持续发展的居住环境。\r\n\r\n应用场景\r\n爱搜客智能家居提出“场景即智能”的理念，推出三大场景应用方案：智慧家庭，智慧办公，智慧酒店，并在全球范围内实现项目成功落地。', '', '', 'category/2018015a5f387813319.jpg', '', '1');
INSERT INTO `wl_category` VALUES ('83', '0', '55', '0', '0,', '3', '解决方案', '', '', '', '', '', 'category/2018015a5f04ef48b6c.jpg', '', '1');
INSERT INTO `wl_category` VALUES ('84', '0', '55', '83', '0,83,', '0', '行业方案', '', '', '', '', '', null, '', '1');
INSERT INTO `wl_category` VALUES ('85', '0', '55', '83', '0,83,', '0', '智能家居', '', '', '', '', '', null, '', '1');
INSERT INTO `wl_category` VALUES ('86', '0', '55', '83', '0,83,', '0', '技术特色', '', '', '', '', '', null, '', '1');
INSERT INTO `wl_category` VALUES ('87', '0', '56', '0', '0,', '5', '产品中心', '', '', '', '', '', 'category/2018015a5ed8429e093.jpg', '', '1');
INSERT INTO `wl_category` VALUES ('88', '0', '56', '87', '0,87,', '0', '智能控制中心', '', '', '', '', '', null, '', '1');
INSERT INTO `wl_category` VALUES ('89', '0', '56', '87', '0,87,', '0', '智能影音系统', '', '', '', '', '', null, '', '1');
INSERT INTO `wl_category` VALUES ('90', '0', '56', '87', '0,87,', '0', '暖通环境系统', '', '', '', '', '', null, '', '1');
INSERT INTO `wl_category` VALUES ('91', '0', '56', '87', '0,87,', '0', '门窗遮阳系统', '', '', '', '', '', null, '', '1');
INSERT INTO `wl_category` VALUES ('92', '0', '56', '87', '0,87,', '0', '智能安防系统', '', '', '', '', '', null, '', '1');
INSERT INTO `wl_category` VALUES ('93', '0', '56', '87', '0,87,', '0', '智能照明系统', '', '', '', '', '', null, '', '1');

-- ----------------------------
-- Table structure for wl_city
-- ----------------------------
DROP TABLE IF EXISTS `wl_city`;
CREATE TABLE `wl_city` (
  `id` mediumint(9) NOT NULL DEFAULT '0',
  `parentid` int(12) NOT NULL,
  `name` varchar(180) NOT NULL DEFAULT '',
  `level` smallint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of wl_city
-- ----------------------------
INSERT INTO `wl_city` VALUES ('110000', '100000', '北京市', '1');
INSERT INTO `wl_city` VALUES ('110100', '110000', '北京市', '2');
INSERT INTO `wl_city` VALUES ('110101', '110100', '东城区', '3');
INSERT INTO `wl_city` VALUES ('110102', '110100', '西城区', '3');
INSERT INTO `wl_city` VALUES ('110105', '110100', '朝阳区', '3');
INSERT INTO `wl_city` VALUES ('110106', '110100', '丰台区', '3');
INSERT INTO `wl_city` VALUES ('110107', '110100', '石景山区', '3');
INSERT INTO `wl_city` VALUES ('110108', '110100', '海淀区', '3');
INSERT INTO `wl_city` VALUES ('110109', '110100', '门头沟区', '3');
INSERT INTO `wl_city` VALUES ('110111', '110100', '房山区', '3');
INSERT INTO `wl_city` VALUES ('110112', '110100', '通州区', '3');
INSERT INTO `wl_city` VALUES ('110113', '110100', '顺义区', '3');
INSERT INTO `wl_city` VALUES ('110114', '110100', '昌平区', '3');
INSERT INTO `wl_city` VALUES ('110115', '110100', '大兴区', '3');
INSERT INTO `wl_city` VALUES ('110116', '110100', '怀柔区', '3');
INSERT INTO `wl_city` VALUES ('110117', '110100', '平谷区', '3');
INSERT INTO `wl_city` VALUES ('110228', '110100', '密云县', '3');
INSERT INTO `wl_city` VALUES ('110229', '110100', '延庆县', '3');
INSERT INTO `wl_city` VALUES ('120000', '100000', '天津', '1');
INSERT INTO `wl_city` VALUES ('120100', '120000', '天津市', '2');
INSERT INTO `wl_city` VALUES ('120101', '120100', '和平区', '3');
INSERT INTO `wl_city` VALUES ('120102', '120100', '河东区', '3');
INSERT INTO `wl_city` VALUES ('120103', '120100', '河西区', '3');
INSERT INTO `wl_city` VALUES ('120104', '120100', '南开区', '3');
INSERT INTO `wl_city` VALUES ('120105', '120100', '河北区', '3');
INSERT INTO `wl_city` VALUES ('120106', '120100', '红桥区', '3');
INSERT INTO `wl_city` VALUES ('120110', '120100', '东丽区', '3');
INSERT INTO `wl_city` VALUES ('120111', '120100', '西青区', '3');
INSERT INTO `wl_city` VALUES ('120112', '120100', '津南区', '3');
INSERT INTO `wl_city` VALUES ('120113', '120100', '北辰区', '3');
INSERT INTO `wl_city` VALUES ('120114', '120100', '武清区', '3');
INSERT INTO `wl_city` VALUES ('120115', '120100', '宝坻区', '3');
INSERT INTO `wl_city` VALUES ('120116', '120100', '滨海新区', '3');
INSERT INTO `wl_city` VALUES ('120221', '120100', '宁河县', '3');
INSERT INTO `wl_city` VALUES ('120223', '120100', '静海县', '3');
INSERT INTO `wl_city` VALUES ('120225', '120100', '蓟县', '3');
INSERT INTO `wl_city` VALUES ('130000', '100000', '河北省', '1');
INSERT INTO `wl_city` VALUES ('130100', '130000', '石家庄市', '2');
INSERT INTO `wl_city` VALUES ('130102', '130100', '长安区', '3');
INSERT INTO `wl_city` VALUES ('130104', '130100', '桥西区', '3');
INSERT INTO `wl_city` VALUES ('130105', '130100', '新华区', '3');
INSERT INTO `wl_city` VALUES ('130107', '130100', '井陉矿区', '3');
INSERT INTO `wl_city` VALUES ('130108', '130100', '裕华区', '3');
INSERT INTO `wl_city` VALUES ('130109', '130100', '藁城区', '3');
INSERT INTO `wl_city` VALUES ('130110', '130100', '鹿泉区', '3');
INSERT INTO `wl_city` VALUES ('130111', '130100', '栾城区', '3');
INSERT INTO `wl_city` VALUES ('130121', '130100', '井陉县', '3');
INSERT INTO `wl_city` VALUES ('130123', '130100', '正定县', '3');
INSERT INTO `wl_city` VALUES ('130125', '130100', '行唐县', '3');
INSERT INTO `wl_city` VALUES ('130126', '130100', '灵寿县', '3');
INSERT INTO `wl_city` VALUES ('130127', '130100', '高邑县', '3');
INSERT INTO `wl_city` VALUES ('130128', '130100', '深泽县', '3');
INSERT INTO `wl_city` VALUES ('130129', '130100', '赞皇县', '3');
INSERT INTO `wl_city` VALUES ('130130', '130100', '无极县', '3');
INSERT INTO `wl_city` VALUES ('130131', '130100', '平山县', '3');
INSERT INTO `wl_city` VALUES ('130132', '130100', '元氏县', '3');
INSERT INTO `wl_city` VALUES ('130133', '130100', '赵县', '3');
INSERT INTO `wl_city` VALUES ('130181', '130100', '辛集市', '3');
INSERT INTO `wl_city` VALUES ('130183', '130100', '晋州市', '3');
INSERT INTO `wl_city` VALUES ('130184', '130100', '新乐市', '3');
INSERT INTO `wl_city` VALUES ('130200', '130000', '唐山市', '2');
INSERT INTO `wl_city` VALUES ('130202', '130200', '路南区', '3');
INSERT INTO `wl_city` VALUES ('130203', '130200', '路北区', '3');
INSERT INTO `wl_city` VALUES ('130204', '130200', '古冶区', '3');
INSERT INTO `wl_city` VALUES ('130205', '130200', '开平区', '3');
INSERT INTO `wl_city` VALUES ('130207', '130200', '丰南区', '3');
INSERT INTO `wl_city` VALUES ('130208', '130200', '丰润区', '3');
INSERT INTO `wl_city` VALUES ('130209', '130200', '曹妃甸区', '3');
INSERT INTO `wl_city` VALUES ('130223', '130200', '滦县', '3');
INSERT INTO `wl_city` VALUES ('130224', '130200', '滦南县', '3');
INSERT INTO `wl_city` VALUES ('130225', '130200', '乐亭县', '3');
INSERT INTO `wl_city` VALUES ('130227', '130200', '迁西县', '3');
INSERT INTO `wl_city` VALUES ('130229', '130200', '玉田县', '3');
INSERT INTO `wl_city` VALUES ('130281', '130200', '遵化市', '3');
INSERT INTO `wl_city` VALUES ('130283', '130200', '迁安市', '3');
INSERT INTO `wl_city` VALUES ('130300', '130000', '秦皇岛市', '2');
INSERT INTO `wl_city` VALUES ('130302', '130300', '海港区', '3');
INSERT INTO `wl_city` VALUES ('130303', '130300', '山海关区', '3');
INSERT INTO `wl_city` VALUES ('130304', '130300', '北戴河区', '3');
INSERT INTO `wl_city` VALUES ('130321', '130300', '青龙满族自治县', '3');
INSERT INTO `wl_city` VALUES ('130322', '130300', '昌黎县', '3');
INSERT INTO `wl_city` VALUES ('130323', '130300', '抚宁县', '3');
INSERT INTO `wl_city` VALUES ('130324', '130300', '卢龙县', '3');
INSERT INTO `wl_city` VALUES ('130400', '130000', '邯郸市', '2');
INSERT INTO `wl_city` VALUES ('130402', '130400', '邯山区', '3');
INSERT INTO `wl_city` VALUES ('130403', '130400', '丛台区', '3');
INSERT INTO `wl_city` VALUES ('130404', '130400', '复兴区', '3');
INSERT INTO `wl_city` VALUES ('130406', '130400', '峰峰矿区', '3');
INSERT INTO `wl_city` VALUES ('130421', '130400', '邯郸县', '3');
INSERT INTO `wl_city` VALUES ('130423', '130400', '临漳县', '3');
INSERT INTO `wl_city` VALUES ('130424', '130400', '成安县', '3');
INSERT INTO `wl_city` VALUES ('130425', '130400', '大名县', '3');
INSERT INTO `wl_city` VALUES ('130426', '130400', '涉县', '3');
INSERT INTO `wl_city` VALUES ('130427', '130400', '磁县', '3');
INSERT INTO `wl_city` VALUES ('130428', '130400', '肥乡县', '3');
INSERT INTO `wl_city` VALUES ('130429', '130400', '永年县', '3');
INSERT INTO `wl_city` VALUES ('130430', '130400', '邱县', '3');
INSERT INTO `wl_city` VALUES ('130431', '130400', '鸡泽县', '3');
INSERT INTO `wl_city` VALUES ('130432', '130400', '广平县', '3');
INSERT INTO `wl_city` VALUES ('130433', '130400', '馆陶县', '3');
INSERT INTO `wl_city` VALUES ('130434', '130400', '魏县', '3');
INSERT INTO `wl_city` VALUES ('130435', '130400', '曲周县', '3');
INSERT INTO `wl_city` VALUES ('130481', '130400', '武安市', '3');
INSERT INTO `wl_city` VALUES ('130500', '130000', '邢台市', '2');
INSERT INTO `wl_city` VALUES ('130502', '130500', '桥东区', '3');
INSERT INTO `wl_city` VALUES ('130503', '130500', '桥西区', '3');
INSERT INTO `wl_city` VALUES ('130521', '130500', '邢台县', '3');
INSERT INTO `wl_city` VALUES ('130522', '130500', '临城县', '3');
INSERT INTO `wl_city` VALUES ('130523', '130500', '内丘县', '3');
INSERT INTO `wl_city` VALUES ('130524', '130500', '柏乡县', '3');
INSERT INTO `wl_city` VALUES ('130525', '130500', '隆尧县', '3');
INSERT INTO `wl_city` VALUES ('130526', '130500', '任县', '3');
INSERT INTO `wl_city` VALUES ('130527', '130500', '南和县', '3');
INSERT INTO `wl_city` VALUES ('130528', '130500', '宁晋县', '3');
INSERT INTO `wl_city` VALUES ('130529', '130500', '巨鹿县', '3');
INSERT INTO `wl_city` VALUES ('130530', '130500', '新河县', '3');
INSERT INTO `wl_city` VALUES ('130531', '130500', '广宗县', '3');
INSERT INTO `wl_city` VALUES ('130532', '130500', '平乡县', '3');
INSERT INTO `wl_city` VALUES ('130533', '130500', '威县', '3');
INSERT INTO `wl_city` VALUES ('130534', '130500', '清河县', '3');
INSERT INTO `wl_city` VALUES ('130535', '130500', '临西县', '3');
INSERT INTO `wl_city` VALUES ('130581', '130500', '南宫市', '3');
INSERT INTO `wl_city` VALUES ('130582', '130500', '沙河市', '3');
INSERT INTO `wl_city` VALUES ('130600', '130000', '保定市', '2');
INSERT INTO `wl_city` VALUES ('130602', '130600', '新市区', '3');
INSERT INTO `wl_city` VALUES ('130603', '130600', '北市区', '3');
INSERT INTO `wl_city` VALUES ('130604', '130600', '南市区', '3');
INSERT INTO `wl_city` VALUES ('130621', '130600', '满城县', '3');
INSERT INTO `wl_city` VALUES ('130622', '130600', '清苑县', '3');
INSERT INTO `wl_city` VALUES ('130623', '130600', '涞水县', '3');
INSERT INTO `wl_city` VALUES ('130624', '130600', '阜平县', '3');
INSERT INTO `wl_city` VALUES ('130625', '130600', '徐水县', '3');
INSERT INTO `wl_city` VALUES ('130626', '130600', '定兴县', '3');
INSERT INTO `wl_city` VALUES ('130627', '130600', '唐县', '3');
INSERT INTO `wl_city` VALUES ('130628', '130600', '高阳县', '3');
INSERT INTO `wl_city` VALUES ('130629', '130600', '容城县', '3');
INSERT INTO `wl_city` VALUES ('130630', '130600', '涞源县', '3');
INSERT INTO `wl_city` VALUES ('130631', '130600', '望都县', '3');
INSERT INTO `wl_city` VALUES ('130632', '130600', '安新县', '3');
INSERT INTO `wl_city` VALUES ('130633', '130600', '易县', '3');
INSERT INTO `wl_city` VALUES ('130634', '130600', '曲阳县', '3');
INSERT INTO `wl_city` VALUES ('130635', '130600', '蠡县', '3');
INSERT INTO `wl_city` VALUES ('130636', '130600', '顺平县', '3');
INSERT INTO `wl_city` VALUES ('130637', '130600', '博野县', '3');
INSERT INTO `wl_city` VALUES ('130638', '130600', '雄县', '3');
INSERT INTO `wl_city` VALUES ('130681', '130600', '涿州市', '3');
INSERT INTO `wl_city` VALUES ('130682', '130600', '定州市', '3');
INSERT INTO `wl_city` VALUES ('130683', '130600', '安国市', '3');
INSERT INTO `wl_city` VALUES ('130684', '130600', '高碑店市', '3');
INSERT INTO `wl_city` VALUES ('130700', '130000', '张家口市', '2');
INSERT INTO `wl_city` VALUES ('130702', '130700', '桥东区', '3');
INSERT INTO `wl_city` VALUES ('130703', '130700', '桥西区', '3');
INSERT INTO `wl_city` VALUES ('130705', '130700', '宣化区', '3');
INSERT INTO `wl_city` VALUES ('130706', '130700', '下花园区', '3');
INSERT INTO `wl_city` VALUES ('130721', '130700', '宣化县', '3');
INSERT INTO `wl_city` VALUES ('130722', '130700', '张北县', '3');
INSERT INTO `wl_city` VALUES ('130723', '130700', '康保县', '3');
INSERT INTO `wl_city` VALUES ('130724', '130700', '沽源县', '3');
INSERT INTO `wl_city` VALUES ('130725', '130700', '尚义县', '3');
INSERT INTO `wl_city` VALUES ('130726', '130700', '蔚县', '3');
INSERT INTO `wl_city` VALUES ('130727', '130700', '阳原县', '3');
INSERT INTO `wl_city` VALUES ('130728', '130700', '怀安县', '3');
INSERT INTO `wl_city` VALUES ('130729', '130700', '万全县', '3');
INSERT INTO `wl_city` VALUES ('130730', '130700', '怀来县', '3');
INSERT INTO `wl_city` VALUES ('130731', '130700', '涿鹿县', '3');
INSERT INTO `wl_city` VALUES ('130732', '130700', '赤城县', '3');
INSERT INTO `wl_city` VALUES ('130733', '130700', '崇礼县', '3');
INSERT INTO `wl_city` VALUES ('130800', '130000', '承德市', '2');
INSERT INTO `wl_city` VALUES ('130802', '130800', '双桥区', '3');
INSERT INTO `wl_city` VALUES ('130803', '130800', '双滦区', '3');
INSERT INTO `wl_city` VALUES ('130804', '130800', '鹰手营子矿区', '3');
INSERT INTO `wl_city` VALUES ('130821', '130800', '承德县', '3');
INSERT INTO `wl_city` VALUES ('130822', '130800', '兴隆县', '3');
INSERT INTO `wl_city` VALUES ('130823', '130800', '平泉县', '3');
INSERT INTO `wl_city` VALUES ('130824', '130800', '滦平县', '3');
INSERT INTO `wl_city` VALUES ('130825', '130800', '隆化县', '3');
INSERT INTO `wl_city` VALUES ('130826', '130800', '丰宁满族自治县', '3');
INSERT INTO `wl_city` VALUES ('130827', '130800', '宽城满族自治县', '3');
INSERT INTO `wl_city` VALUES ('130828', '130800', '围场满族蒙古族自治县', '3');
INSERT INTO `wl_city` VALUES ('130900', '130000', '沧州市', '2');
INSERT INTO `wl_city` VALUES ('130902', '130900', '新华区', '3');
INSERT INTO `wl_city` VALUES ('130903', '130900', '运河区', '3');
INSERT INTO `wl_city` VALUES ('130921', '130900', '沧县', '3');
INSERT INTO `wl_city` VALUES ('130922', '130900', '青县', '3');
INSERT INTO `wl_city` VALUES ('130923', '130900', '东光县', '3');
INSERT INTO `wl_city` VALUES ('130924', '130900', '海兴县', '3');
INSERT INTO `wl_city` VALUES ('130925', '130900', '盐山县', '3');
INSERT INTO `wl_city` VALUES ('130926', '130900', '肃宁县', '3');
INSERT INTO `wl_city` VALUES ('130927', '130900', '南皮县', '3');
INSERT INTO `wl_city` VALUES ('130928', '130900', '吴桥县', '3');
INSERT INTO `wl_city` VALUES ('130929', '130900', '献县', '3');
INSERT INTO `wl_city` VALUES ('130930', '130900', '孟村回族自治县', '3');
INSERT INTO `wl_city` VALUES ('130981', '130900', '泊头市', '3');
INSERT INTO `wl_city` VALUES ('130982', '130900', '任丘市', '3');
INSERT INTO `wl_city` VALUES ('130983', '130900', '黄骅市', '3');
INSERT INTO `wl_city` VALUES ('130984', '130900', '河间市', '3');
INSERT INTO `wl_city` VALUES ('131000', '130000', '廊坊市', '2');
INSERT INTO `wl_city` VALUES ('131002', '131000', '安次区', '3');
INSERT INTO `wl_city` VALUES ('131003', '131000', '广阳区', '3');
INSERT INTO `wl_city` VALUES ('131022', '131000', '固安县', '3');
INSERT INTO `wl_city` VALUES ('131023', '131000', '永清县', '3');
INSERT INTO `wl_city` VALUES ('131024', '131000', '香河县', '3');
INSERT INTO `wl_city` VALUES ('131025', '131000', '大城县', '3');
INSERT INTO `wl_city` VALUES ('131026', '131000', '文安县', '3');
INSERT INTO `wl_city` VALUES ('131028', '131000', '大厂回族自治县', '3');
INSERT INTO `wl_city` VALUES ('131081', '131000', '霸州市', '3');
INSERT INTO `wl_city` VALUES ('131082', '131000', '三河市', '3');
INSERT INTO `wl_city` VALUES ('131100', '130000', '衡水市', '2');
INSERT INTO `wl_city` VALUES ('131102', '131100', '桃城区', '3');
INSERT INTO `wl_city` VALUES ('131121', '131100', '枣强县', '3');
INSERT INTO `wl_city` VALUES ('131122', '131100', '武邑县', '3');
INSERT INTO `wl_city` VALUES ('131123', '131100', '武强县', '3');
INSERT INTO `wl_city` VALUES ('131124', '131100', '饶阳县', '3');
INSERT INTO `wl_city` VALUES ('131125', '131100', '安平县', '3');
INSERT INTO `wl_city` VALUES ('131126', '131100', '故城县', '3');
INSERT INTO `wl_city` VALUES ('131127', '131100', '景县', '3');
INSERT INTO `wl_city` VALUES ('131128', '131100', '阜城县', '3');
INSERT INTO `wl_city` VALUES ('131181', '131100', '冀州市', '3');
INSERT INTO `wl_city` VALUES ('131182', '131100', '深州市', '3');
INSERT INTO `wl_city` VALUES ('140000', '100000', '山西省', '1');
INSERT INTO `wl_city` VALUES ('140100', '140000', '太原市', '2');
INSERT INTO `wl_city` VALUES ('140105', '140100', '小店区', '3');
INSERT INTO `wl_city` VALUES ('140106', '140100', '迎泽区', '3');
INSERT INTO `wl_city` VALUES ('140107', '140100', '杏花岭区', '3');
INSERT INTO `wl_city` VALUES ('140108', '140100', '尖草坪区', '3');
INSERT INTO `wl_city` VALUES ('140109', '140100', '万柏林区', '3');
INSERT INTO `wl_city` VALUES ('140110', '140100', '晋源区', '3');
INSERT INTO `wl_city` VALUES ('140121', '140100', '清徐县', '3');
INSERT INTO `wl_city` VALUES ('140122', '140100', '阳曲县', '3');
INSERT INTO `wl_city` VALUES ('140123', '140100', '娄烦县', '3');
INSERT INTO `wl_city` VALUES ('140181', '140100', '古交市', '3');
INSERT INTO `wl_city` VALUES ('140200', '140000', '大同市', '2');
INSERT INTO `wl_city` VALUES ('140202', '140200', '城区', '3');
INSERT INTO `wl_city` VALUES ('140203', '140200', '矿区', '3');
INSERT INTO `wl_city` VALUES ('140211', '140200', '南郊区', '3');
INSERT INTO `wl_city` VALUES ('140212', '140200', '新荣区', '3');
INSERT INTO `wl_city` VALUES ('140221', '140200', '阳高县', '3');
INSERT INTO `wl_city` VALUES ('140222', '140200', '天镇县', '3');
INSERT INTO `wl_city` VALUES ('140223', '140200', '广灵县', '3');
INSERT INTO `wl_city` VALUES ('140224', '140200', '灵丘县', '3');
INSERT INTO `wl_city` VALUES ('140225', '140200', '浑源县', '3');
INSERT INTO `wl_city` VALUES ('140226', '140200', '左云县', '3');
INSERT INTO `wl_city` VALUES ('140227', '140200', '大同县', '3');
INSERT INTO `wl_city` VALUES ('140300', '140000', '阳泉市', '2');
INSERT INTO `wl_city` VALUES ('140302', '140300', '城区', '3');
INSERT INTO `wl_city` VALUES ('140303', '140300', '矿区', '3');
INSERT INTO `wl_city` VALUES ('140311', '140300', '郊区', '3');
INSERT INTO `wl_city` VALUES ('140321', '140300', '平定县', '3');
INSERT INTO `wl_city` VALUES ('140322', '140300', '盂县', '3');
INSERT INTO `wl_city` VALUES ('140400', '140000', '长治市', '2');
INSERT INTO `wl_city` VALUES ('140402', '140400', '城区', '3');
INSERT INTO `wl_city` VALUES ('140411', '140400', '郊区', '3');
INSERT INTO `wl_city` VALUES ('140421', '140400', '长治县', '3');
INSERT INTO `wl_city` VALUES ('140423', '140400', '襄垣县', '3');
INSERT INTO `wl_city` VALUES ('140424', '140400', '屯留县', '3');
INSERT INTO `wl_city` VALUES ('140425', '140400', '平顺县', '3');
INSERT INTO `wl_city` VALUES ('140426', '140400', '黎城县', '3');
INSERT INTO `wl_city` VALUES ('140427', '140400', '壶关县', '3');
INSERT INTO `wl_city` VALUES ('140428', '140400', '长子县', '3');
INSERT INTO `wl_city` VALUES ('140429', '140400', '武乡县', '3');
INSERT INTO `wl_city` VALUES ('140430', '140400', '沁县', '3');
INSERT INTO `wl_city` VALUES ('140431', '140400', '沁源县', '3');
INSERT INTO `wl_city` VALUES ('140481', '140400', '潞城市', '3');
INSERT INTO `wl_city` VALUES ('140500', '140000', '晋城市', '2');
INSERT INTO `wl_city` VALUES ('140502', '140500', '城区', '3');
INSERT INTO `wl_city` VALUES ('140521', '140500', '沁水县', '3');
INSERT INTO `wl_city` VALUES ('140522', '140500', '阳城县', '3');
INSERT INTO `wl_city` VALUES ('140524', '140500', '陵川县', '3');
INSERT INTO `wl_city` VALUES ('140525', '140500', '泽州县', '3');
INSERT INTO `wl_city` VALUES ('140581', '140500', '高平市', '3');
INSERT INTO `wl_city` VALUES ('140600', '140000', '朔州市', '2');
INSERT INTO `wl_city` VALUES ('140602', '140600', '朔城区', '3');
INSERT INTO `wl_city` VALUES ('140603', '140600', '平鲁区', '3');
INSERT INTO `wl_city` VALUES ('140621', '140600', '山阴县', '3');
INSERT INTO `wl_city` VALUES ('140622', '140600', '应县', '3');
INSERT INTO `wl_city` VALUES ('140623', '140600', '右玉县', '3');
INSERT INTO `wl_city` VALUES ('140624', '140600', '怀仁县', '3');
INSERT INTO `wl_city` VALUES ('140700', '140000', '晋中市', '2');
INSERT INTO `wl_city` VALUES ('140702', '140700', '榆次区', '3');
INSERT INTO `wl_city` VALUES ('140721', '140700', '榆社县', '3');
INSERT INTO `wl_city` VALUES ('140722', '140700', '左权县', '3');
INSERT INTO `wl_city` VALUES ('140723', '140700', '和顺县', '3');
INSERT INTO `wl_city` VALUES ('140724', '140700', '昔阳县', '3');
INSERT INTO `wl_city` VALUES ('140725', '140700', '寿阳县', '3');
INSERT INTO `wl_city` VALUES ('140726', '140700', '太谷县', '3');
INSERT INTO `wl_city` VALUES ('140727', '140700', '祁县', '3');
INSERT INTO `wl_city` VALUES ('140728', '140700', '平遥县', '3');
INSERT INTO `wl_city` VALUES ('140729', '140700', '灵石县', '3');
INSERT INTO `wl_city` VALUES ('140781', '140700', '介休市', '3');
INSERT INTO `wl_city` VALUES ('140800', '140000', '运城市', '2');
INSERT INTO `wl_city` VALUES ('140802', '140800', '盐湖区', '3');
INSERT INTO `wl_city` VALUES ('140821', '140800', '临猗县', '3');
INSERT INTO `wl_city` VALUES ('140822', '140800', '万荣县', '3');
INSERT INTO `wl_city` VALUES ('140823', '140800', '闻喜县', '3');
INSERT INTO `wl_city` VALUES ('140824', '140800', '稷山县', '3');
INSERT INTO `wl_city` VALUES ('140825', '140800', '新绛县', '3');
INSERT INTO `wl_city` VALUES ('140826', '140800', '绛县', '3');
INSERT INTO `wl_city` VALUES ('140827', '140800', '垣曲县', '3');
INSERT INTO `wl_city` VALUES ('140828', '140800', '夏县', '3');
INSERT INTO `wl_city` VALUES ('140829', '140800', '平陆县', '3');
INSERT INTO `wl_city` VALUES ('140830', '140800', '芮城县', '3');
INSERT INTO `wl_city` VALUES ('140881', '140800', '永济市', '3');
INSERT INTO `wl_city` VALUES ('140882', '140800', '河津市', '3');
INSERT INTO `wl_city` VALUES ('140900', '140000', '忻州市', '2');
INSERT INTO `wl_city` VALUES ('140902', '140900', '忻府区', '3');
INSERT INTO `wl_city` VALUES ('140921', '140900', '定襄县', '3');
INSERT INTO `wl_city` VALUES ('140922', '140900', '五台县', '3');
INSERT INTO `wl_city` VALUES ('140923', '140900', '代县', '3');
INSERT INTO `wl_city` VALUES ('140924', '140900', '繁峙县', '3');
INSERT INTO `wl_city` VALUES ('140925', '140900', '宁武县', '3');
INSERT INTO `wl_city` VALUES ('140926', '140900', '静乐县', '3');
INSERT INTO `wl_city` VALUES ('140927', '140900', '神池县', '3');
INSERT INTO `wl_city` VALUES ('140928', '140900', '五寨县', '3');
INSERT INTO `wl_city` VALUES ('140929', '140900', '岢岚县', '3');
INSERT INTO `wl_city` VALUES ('140930', '140900', '河曲县', '3');
INSERT INTO `wl_city` VALUES ('140931', '140900', '保德县', '3');
INSERT INTO `wl_city` VALUES ('140932', '140900', '偏关县', '3');
INSERT INTO `wl_city` VALUES ('140981', '140900', '原平市', '3');
INSERT INTO `wl_city` VALUES ('141000', '140000', '临汾市', '2');
INSERT INTO `wl_city` VALUES ('141002', '141000', '尧都区', '3');
INSERT INTO `wl_city` VALUES ('141021', '141000', '曲沃县', '3');
INSERT INTO `wl_city` VALUES ('141022', '141000', '翼城县', '3');
INSERT INTO `wl_city` VALUES ('141023', '141000', '襄汾县', '3');
INSERT INTO `wl_city` VALUES ('141024', '141000', '洪洞县', '3');
INSERT INTO `wl_city` VALUES ('141025', '141000', '古县', '3');
INSERT INTO `wl_city` VALUES ('141026', '141000', '安泽县', '3');
INSERT INTO `wl_city` VALUES ('141027', '141000', '浮山县', '3');
INSERT INTO `wl_city` VALUES ('141028', '141000', '吉县', '3');
INSERT INTO `wl_city` VALUES ('141029', '141000', '乡宁县', '3');
INSERT INTO `wl_city` VALUES ('141030', '141000', '大宁县', '3');
INSERT INTO `wl_city` VALUES ('141031', '141000', '隰县', '3');
INSERT INTO `wl_city` VALUES ('141032', '141000', '永和县', '3');
INSERT INTO `wl_city` VALUES ('141033', '141000', '蒲县', '3');
INSERT INTO `wl_city` VALUES ('141034', '141000', '汾西县', '3');
INSERT INTO `wl_city` VALUES ('141081', '141000', '侯马市', '3');
INSERT INTO `wl_city` VALUES ('141082', '141000', '霍州市', '3');
INSERT INTO `wl_city` VALUES ('141100', '140000', '吕梁市', '2');
INSERT INTO `wl_city` VALUES ('141102', '141100', '离石区', '3');
INSERT INTO `wl_city` VALUES ('141121', '141100', '文水县', '3');
INSERT INTO `wl_city` VALUES ('141122', '141100', '交城县', '3');
INSERT INTO `wl_city` VALUES ('141123', '141100', '兴县', '3');
INSERT INTO `wl_city` VALUES ('141124', '141100', '临县', '3');
INSERT INTO `wl_city` VALUES ('141125', '141100', '柳林县', '3');
INSERT INTO `wl_city` VALUES ('141126', '141100', '石楼县', '3');
INSERT INTO `wl_city` VALUES ('141127', '141100', '岚县', '3');
INSERT INTO `wl_city` VALUES ('141128', '141100', '方山县', '3');
INSERT INTO `wl_city` VALUES ('141129', '141100', '中阳县', '3');
INSERT INTO `wl_city` VALUES ('141130', '141100', '交口县', '3');
INSERT INTO `wl_city` VALUES ('141181', '141100', '孝义市', '3');
INSERT INTO `wl_city` VALUES ('141182', '141100', '汾阳市', '3');
INSERT INTO `wl_city` VALUES ('150000', '100000', '内蒙古自治区', '1');
INSERT INTO `wl_city` VALUES ('150100', '150000', '呼和浩特市', '2');
INSERT INTO `wl_city` VALUES ('150102', '150100', '新城区', '3');
INSERT INTO `wl_city` VALUES ('150103', '150100', '回民区', '3');
INSERT INTO `wl_city` VALUES ('150104', '150100', '玉泉区', '3');
INSERT INTO `wl_city` VALUES ('150105', '150100', '赛罕区', '3');
INSERT INTO `wl_city` VALUES ('150121', '150100', '土默特左旗', '3');
INSERT INTO `wl_city` VALUES ('150122', '150100', '托克托县', '3');
INSERT INTO `wl_city` VALUES ('150123', '150100', '和林格尔县', '3');
INSERT INTO `wl_city` VALUES ('150124', '150100', '清水河县', '3');
INSERT INTO `wl_city` VALUES ('150125', '150100', '武川县', '3');
INSERT INTO `wl_city` VALUES ('150200', '150000', '包头市', '2');
INSERT INTO `wl_city` VALUES ('150202', '150200', '东河区', '3');
INSERT INTO `wl_city` VALUES ('150203', '150200', '昆都仑区', '3');
INSERT INTO `wl_city` VALUES ('150204', '150200', '青山区', '3');
INSERT INTO `wl_city` VALUES ('150205', '150200', '石拐区', '3');
INSERT INTO `wl_city` VALUES ('150206', '150200', '白云鄂博矿区', '3');
INSERT INTO `wl_city` VALUES ('150207', '150200', '九原区', '3');
INSERT INTO `wl_city` VALUES ('150221', '150200', '土默特右旗', '3');
INSERT INTO `wl_city` VALUES ('150222', '150200', '固阳县', '3');
INSERT INTO `wl_city` VALUES ('150223', '150200', '达尔罕茂明安联合旗', '3');
INSERT INTO `wl_city` VALUES ('150300', '150000', '乌海市', '2');
INSERT INTO `wl_city` VALUES ('150302', '150300', '海勃湾区', '3');
INSERT INTO `wl_city` VALUES ('150303', '150300', '海南区', '3');
INSERT INTO `wl_city` VALUES ('150304', '150300', '乌达区', '3');
INSERT INTO `wl_city` VALUES ('150400', '150000', '赤峰市', '2');
INSERT INTO `wl_city` VALUES ('150402', '150400', '红山区', '3');
INSERT INTO `wl_city` VALUES ('150403', '150400', '元宝山区', '3');
INSERT INTO `wl_city` VALUES ('150404', '150400', '松山区', '3');
INSERT INTO `wl_city` VALUES ('150421', '150400', '阿鲁科尔沁旗', '3');
INSERT INTO `wl_city` VALUES ('150422', '150400', '巴林左旗', '3');
INSERT INTO `wl_city` VALUES ('150423', '150400', '巴林右旗', '3');
INSERT INTO `wl_city` VALUES ('150424', '150400', '林西县', '3');
INSERT INTO `wl_city` VALUES ('150425', '150400', '克什克腾旗', '3');
INSERT INTO `wl_city` VALUES ('150426', '150400', '翁牛特旗', '3');
INSERT INTO `wl_city` VALUES ('150428', '150400', '喀喇沁旗', '3');
INSERT INTO `wl_city` VALUES ('150429', '150400', '宁城县', '3');
INSERT INTO `wl_city` VALUES ('150430', '150400', '敖汉旗', '3');
INSERT INTO `wl_city` VALUES ('150500', '150000', '通辽市', '2');
INSERT INTO `wl_city` VALUES ('150502', '150500', '科尔沁区', '3');
INSERT INTO `wl_city` VALUES ('150521', '150500', '科尔沁左翼中旗', '3');
INSERT INTO `wl_city` VALUES ('150522', '150500', '科尔沁左翼后旗', '3');
INSERT INTO `wl_city` VALUES ('150523', '150500', '开鲁县', '3');
INSERT INTO `wl_city` VALUES ('150524', '150500', '库伦旗', '3');
INSERT INTO `wl_city` VALUES ('150525', '150500', '奈曼旗', '3');
INSERT INTO `wl_city` VALUES ('150526', '150500', '扎鲁特旗', '3');
INSERT INTO `wl_city` VALUES ('150581', '150500', '霍林郭勒市', '3');
INSERT INTO `wl_city` VALUES ('150600', '150000', '鄂尔多斯市', '2');
INSERT INTO `wl_city` VALUES ('150602', '150600', '东胜区', '3');
INSERT INTO `wl_city` VALUES ('150621', '150600', '达拉特旗', '3');
INSERT INTO `wl_city` VALUES ('150622', '150600', '准格尔旗', '3');
INSERT INTO `wl_city` VALUES ('150623', '150600', '鄂托克前旗', '3');
INSERT INTO `wl_city` VALUES ('150624', '150600', '鄂托克旗', '3');
INSERT INTO `wl_city` VALUES ('150625', '150600', '杭锦旗', '3');
INSERT INTO `wl_city` VALUES ('150626', '150600', '乌审旗', '3');
INSERT INTO `wl_city` VALUES ('150627', '150600', '伊金霍洛旗', '3');
INSERT INTO `wl_city` VALUES ('150700', '150000', '呼伦贝尔市', '2');
INSERT INTO `wl_city` VALUES ('150702', '150700', '海拉尔区', '3');
INSERT INTO `wl_city` VALUES ('150703', '150700', '扎赉诺尔区', '3');
INSERT INTO `wl_city` VALUES ('150721', '150700', '阿荣旗', '3');
INSERT INTO `wl_city` VALUES ('150722', '150700', '莫力达瓦达斡尔族自治旗', '3');
INSERT INTO `wl_city` VALUES ('150723', '150700', '鄂伦春自治旗', '3');
INSERT INTO `wl_city` VALUES ('150724', '150700', '鄂温克族自治旗', '3');
INSERT INTO `wl_city` VALUES ('150725', '150700', '陈巴尔虎旗', '3');
INSERT INTO `wl_city` VALUES ('150726', '150700', '新巴尔虎左旗', '3');
INSERT INTO `wl_city` VALUES ('150727', '150700', '新巴尔虎右旗', '3');
INSERT INTO `wl_city` VALUES ('150781', '150700', '满洲里市', '3');
INSERT INTO `wl_city` VALUES ('150782', '150700', '牙克石市', '3');
INSERT INTO `wl_city` VALUES ('150783', '150700', '扎兰屯市', '3');
INSERT INTO `wl_city` VALUES ('150784', '150700', '额尔古纳市', '3');
INSERT INTO `wl_city` VALUES ('150785', '150700', '根河市', '3');
INSERT INTO `wl_city` VALUES ('150800', '150000', '巴彦淖尔市', '2');
INSERT INTO `wl_city` VALUES ('150802', '150800', '临河区', '3');
INSERT INTO `wl_city` VALUES ('150821', '150800', '五原县', '3');
INSERT INTO `wl_city` VALUES ('150822', '150800', '磴口县', '3');
INSERT INTO `wl_city` VALUES ('150823', '150800', '乌拉特前旗', '3');
INSERT INTO `wl_city` VALUES ('150824', '150800', '乌拉特中旗', '3');
INSERT INTO `wl_city` VALUES ('150825', '150800', '乌拉特后旗', '3');
INSERT INTO `wl_city` VALUES ('150826', '150800', '杭锦后旗', '3');
INSERT INTO `wl_city` VALUES ('150900', '150000', '乌兰察布市', '2');
INSERT INTO `wl_city` VALUES ('150902', '150900', '集宁区', '3');
INSERT INTO `wl_city` VALUES ('150921', '150900', '卓资县', '3');
INSERT INTO `wl_city` VALUES ('150922', '150900', '化德县', '3');
INSERT INTO `wl_city` VALUES ('150923', '150900', '商都县', '3');
INSERT INTO `wl_city` VALUES ('150924', '150900', '兴和县', '3');
INSERT INTO `wl_city` VALUES ('150925', '150900', '凉城县', '3');
INSERT INTO `wl_city` VALUES ('150926', '150900', '察哈尔右翼前旗', '3');
INSERT INTO `wl_city` VALUES ('150927', '150900', '察哈尔右翼中旗', '3');
INSERT INTO `wl_city` VALUES ('150928', '150900', '察哈尔右翼后旗', '3');
INSERT INTO `wl_city` VALUES ('150929', '150900', '四子王旗', '3');
INSERT INTO `wl_city` VALUES ('150981', '150900', '丰镇市', '3');
INSERT INTO `wl_city` VALUES ('152200', '150000', '兴安盟', '2');
INSERT INTO `wl_city` VALUES ('152201', '152200', '乌兰浩特市', '3');
INSERT INTO `wl_city` VALUES ('152202', '152200', '阿尔山市', '3');
INSERT INTO `wl_city` VALUES ('152221', '152200', '科尔沁右翼前旗', '3');
INSERT INTO `wl_city` VALUES ('152222', '152200', '科尔沁右翼中旗', '3');
INSERT INTO `wl_city` VALUES ('152223', '152200', '扎赉特旗', '3');
INSERT INTO `wl_city` VALUES ('152224', '152200', '突泉县', '3');
INSERT INTO `wl_city` VALUES ('152500', '150000', '锡林郭勒盟', '2');
INSERT INTO `wl_city` VALUES ('152501', '152500', '二连浩特市', '3');
INSERT INTO `wl_city` VALUES ('152502', '152500', '锡林浩特市', '3');
INSERT INTO `wl_city` VALUES ('152522', '152500', '阿巴嘎旗', '3');
INSERT INTO `wl_city` VALUES ('152523', '152500', '苏尼特左旗', '3');
INSERT INTO `wl_city` VALUES ('152524', '152500', '苏尼特右旗', '3');
INSERT INTO `wl_city` VALUES ('152525', '152500', '东乌珠穆沁旗', '3');
INSERT INTO `wl_city` VALUES ('152526', '152500', '西乌珠穆沁旗', '3');
INSERT INTO `wl_city` VALUES ('152527', '152500', '太仆寺旗', '3');
INSERT INTO `wl_city` VALUES ('152528', '152500', '镶黄旗', '3');
INSERT INTO `wl_city` VALUES ('152529', '152500', '正镶白旗', '3');
INSERT INTO `wl_city` VALUES ('152530', '152500', '正蓝旗', '3');
INSERT INTO `wl_city` VALUES ('152531', '152500', '多伦县', '3');
INSERT INTO `wl_city` VALUES ('152900', '150000', '阿拉善盟', '2');
INSERT INTO `wl_city` VALUES ('152921', '152900', '阿拉善左旗', '3');
INSERT INTO `wl_city` VALUES ('152922', '152900', '阿拉善右旗', '3');
INSERT INTO `wl_city` VALUES ('152923', '152900', '额济纳旗', '3');
INSERT INTO `wl_city` VALUES ('210000', '100000', '辽宁省', '1');
INSERT INTO `wl_city` VALUES ('210100', '210000', '沈阳市', '2');
INSERT INTO `wl_city` VALUES ('210102', '210100', '和平区', '3');
INSERT INTO `wl_city` VALUES ('210103', '210100', '沈河区', '3');
INSERT INTO `wl_city` VALUES ('210104', '210100', '大东区', '3');
INSERT INTO `wl_city` VALUES ('210105', '210100', '皇姑区', '3');
INSERT INTO `wl_city` VALUES ('210106', '210100', '铁西区', '3');
INSERT INTO `wl_city` VALUES ('210111', '210100', '苏家屯区', '3');
INSERT INTO `wl_city` VALUES ('210112', '210100', '浑南区', '3');
INSERT INTO `wl_city` VALUES ('210113', '210100', '沈北新区', '3');
INSERT INTO `wl_city` VALUES ('210114', '210100', '于洪区', '3');
INSERT INTO `wl_city` VALUES ('210122', '210100', '辽中县', '3');
INSERT INTO `wl_city` VALUES ('210123', '210100', '康平县', '3');
INSERT INTO `wl_city` VALUES ('210124', '210100', '法库县', '3');
INSERT INTO `wl_city` VALUES ('210181', '210100', '新民市', '3');
INSERT INTO `wl_city` VALUES ('210200', '210000', '大连市', '2');
INSERT INTO `wl_city` VALUES ('210202', '210200', '中山区', '3');
INSERT INTO `wl_city` VALUES ('210203', '210200', '西岗区', '3');
INSERT INTO `wl_city` VALUES ('210204', '210200', '沙河口区', '3');
INSERT INTO `wl_city` VALUES ('210211', '210200', '甘井子区', '3');
INSERT INTO `wl_city` VALUES ('210212', '210200', '旅顺口区', '3');
INSERT INTO `wl_city` VALUES ('210213', '210200', '金州区', '3');
INSERT INTO `wl_city` VALUES ('210224', '210200', '长海县', '3');
INSERT INTO `wl_city` VALUES ('210281', '210200', '瓦房店市', '3');
INSERT INTO `wl_city` VALUES ('210282', '210200', '普兰店市', '3');
INSERT INTO `wl_city` VALUES ('210283', '210200', '庄河市', '3');
INSERT INTO `wl_city` VALUES ('210300', '210000', '鞍山市', '2');
INSERT INTO `wl_city` VALUES ('210302', '210300', '铁东区', '3');
INSERT INTO `wl_city` VALUES ('210303', '210300', '铁西区', '3');
INSERT INTO `wl_city` VALUES ('210304', '210300', '立山区', '3');
INSERT INTO `wl_city` VALUES ('210311', '210300', '千山区', '3');
INSERT INTO `wl_city` VALUES ('210321', '210300', '台安县', '3');
INSERT INTO `wl_city` VALUES ('210323', '210300', '岫岩满族自治县', '3');
INSERT INTO `wl_city` VALUES ('210381', '210300', '海城市', '3');
INSERT INTO `wl_city` VALUES ('210400', '210000', '抚顺市', '2');
INSERT INTO `wl_city` VALUES ('210402', '210400', '新抚区', '3');
INSERT INTO `wl_city` VALUES ('210403', '210400', '东洲区', '3');
INSERT INTO `wl_city` VALUES ('210404', '210400', '望花区', '3');
INSERT INTO `wl_city` VALUES ('210411', '210400', '顺城区', '3');
INSERT INTO `wl_city` VALUES ('210421', '210400', '抚顺县', '3');
INSERT INTO `wl_city` VALUES ('210422', '210400', '新宾满族自治县', '3');
INSERT INTO `wl_city` VALUES ('210423', '210400', '清原满族自治县', '3');
INSERT INTO `wl_city` VALUES ('210500', '210000', '本溪市', '2');
INSERT INTO `wl_city` VALUES ('210502', '210500', '平山区', '3');
INSERT INTO `wl_city` VALUES ('210503', '210500', '溪湖区', '3');
INSERT INTO `wl_city` VALUES ('210504', '210500', '明山区', '3');
INSERT INTO `wl_city` VALUES ('210505', '210500', '南芬区', '3');
INSERT INTO `wl_city` VALUES ('210521', '210500', '本溪满族自治县', '3');
INSERT INTO `wl_city` VALUES ('210522', '210500', '桓仁满族自治县', '3');
INSERT INTO `wl_city` VALUES ('210600', '210000', '丹东市', '2');
INSERT INTO `wl_city` VALUES ('210602', '210600', '元宝区', '3');
INSERT INTO `wl_city` VALUES ('210603', '210600', '振兴区', '3');
INSERT INTO `wl_city` VALUES ('210604', '210600', '振安区', '3');
INSERT INTO `wl_city` VALUES ('210624', '210600', '宽甸满族自治县', '3');
INSERT INTO `wl_city` VALUES ('210681', '210600', '东港市', '3');
INSERT INTO `wl_city` VALUES ('210682', '210600', '凤城市', '3');
INSERT INTO `wl_city` VALUES ('210700', '210000', '锦州市', '2');
INSERT INTO `wl_city` VALUES ('210702', '210700', '古塔区', '3');
INSERT INTO `wl_city` VALUES ('210703', '210700', '凌河区', '3');
INSERT INTO `wl_city` VALUES ('210711', '210700', '太和区', '3');
INSERT INTO `wl_city` VALUES ('210726', '210700', '黑山县', '3');
INSERT INTO `wl_city` VALUES ('210727', '210700', '义县', '3');
INSERT INTO `wl_city` VALUES ('210781', '210700', '凌海市', '3');
INSERT INTO `wl_city` VALUES ('210782', '210700', '北镇市', '3');
INSERT INTO `wl_city` VALUES ('210800', '210000', '营口市', '2');
INSERT INTO `wl_city` VALUES ('210802', '210800', '站前区', '3');
INSERT INTO `wl_city` VALUES ('210803', '210800', '西市区', '3');
INSERT INTO `wl_city` VALUES ('210804', '210800', '鲅鱼圈区', '3');
INSERT INTO `wl_city` VALUES ('210811', '210800', '老边区', '3');
INSERT INTO `wl_city` VALUES ('210881', '210800', '盖州市', '3');
INSERT INTO `wl_city` VALUES ('210882', '210800', '大石桥市', '3');
INSERT INTO `wl_city` VALUES ('210900', '210000', '阜新市', '2');
INSERT INTO `wl_city` VALUES ('210902', '210900', '海州区', '3');
INSERT INTO `wl_city` VALUES ('210903', '210900', '新邱区', '3');
INSERT INTO `wl_city` VALUES ('210904', '210900', '太平区', '3');
INSERT INTO `wl_city` VALUES ('210905', '210900', '清河门区', '3');
INSERT INTO `wl_city` VALUES ('210911', '210900', '细河区', '3');
INSERT INTO `wl_city` VALUES ('210921', '210900', '阜新蒙古族自治县', '3');
INSERT INTO `wl_city` VALUES ('210922', '210900', '彰武县', '3');
INSERT INTO `wl_city` VALUES ('211000', '210000', '辽阳市', '2');
INSERT INTO `wl_city` VALUES ('211002', '211000', '白塔区', '3');
INSERT INTO `wl_city` VALUES ('211003', '211000', '文圣区', '3');
INSERT INTO `wl_city` VALUES ('211004', '211000', '宏伟区', '3');
INSERT INTO `wl_city` VALUES ('211005', '211000', '弓长岭区', '3');
INSERT INTO `wl_city` VALUES ('211011', '211000', '太子河区', '3');
INSERT INTO `wl_city` VALUES ('211021', '211000', '辽阳县', '3');
INSERT INTO `wl_city` VALUES ('211081', '211000', '灯塔市', '3');
INSERT INTO `wl_city` VALUES ('211100', '210000', '盘锦市', '2');
INSERT INTO `wl_city` VALUES ('211102', '211100', '双台子区', '3');
INSERT INTO `wl_city` VALUES ('211103', '211100', '兴隆台区', '3');
INSERT INTO `wl_city` VALUES ('211121', '211100', '大洼县', '3');
INSERT INTO `wl_city` VALUES ('211122', '211100', '盘山县', '3');
INSERT INTO `wl_city` VALUES ('211200', '210000', '铁岭市', '2');
INSERT INTO `wl_city` VALUES ('211202', '211200', '银州区', '3');
INSERT INTO `wl_city` VALUES ('211204', '211200', '清河区', '3');
INSERT INTO `wl_city` VALUES ('211221', '211200', '铁岭县', '3');
INSERT INTO `wl_city` VALUES ('211223', '211200', '西丰县', '3');
INSERT INTO `wl_city` VALUES ('211224', '211200', '昌图县', '3');
INSERT INTO `wl_city` VALUES ('211281', '211200', '调兵山市', '3');
INSERT INTO `wl_city` VALUES ('211282', '211200', '开原市', '3');
INSERT INTO `wl_city` VALUES ('211300', '210000', '朝阳市', '2');
INSERT INTO `wl_city` VALUES ('211302', '211300', '双塔区', '3');
INSERT INTO `wl_city` VALUES ('211303', '211300', '龙城区', '3');
INSERT INTO `wl_city` VALUES ('211321', '211300', '朝阳县', '3');
INSERT INTO `wl_city` VALUES ('211322', '211300', '建平县', '3');
INSERT INTO `wl_city` VALUES ('211324', '211300', '喀喇沁左翼蒙古族自治县', '3');
INSERT INTO `wl_city` VALUES ('211381', '211300', '北票市', '3');
INSERT INTO `wl_city` VALUES ('211382', '211300', '凌源市', '3');
INSERT INTO `wl_city` VALUES ('211400', '210000', '葫芦岛市', '2');
INSERT INTO `wl_city` VALUES ('211402', '211400', '连山区', '3');
INSERT INTO `wl_city` VALUES ('211403', '211400', '龙港区', '3');
INSERT INTO `wl_city` VALUES ('211404', '211400', '南票区', '3');
INSERT INTO `wl_city` VALUES ('211421', '211400', '绥中县', '3');
INSERT INTO `wl_city` VALUES ('211422', '211400', '建昌县', '3');
INSERT INTO `wl_city` VALUES ('211481', '211400', '兴城市', '3');
INSERT INTO `wl_city` VALUES ('211500', '210000', '金普新区', '2');
INSERT INTO `wl_city` VALUES ('211501', '211500', '金州新区', '3');
INSERT INTO `wl_city` VALUES ('211502', '211500', '普湾新区', '3');
INSERT INTO `wl_city` VALUES ('211503', '211500', '保税区', '3');
INSERT INTO `wl_city` VALUES ('220000', '100000', '吉林省', '1');
INSERT INTO `wl_city` VALUES ('220100', '220000', '长春市', '2');
INSERT INTO `wl_city` VALUES ('220102', '220100', '南关区', '3');
INSERT INTO `wl_city` VALUES ('220103', '220100', '宽城区', '3');
INSERT INTO `wl_city` VALUES ('220104', '220100', '朝阳区', '3');
INSERT INTO `wl_city` VALUES ('220105', '220100', '二道区', '3');
INSERT INTO `wl_city` VALUES ('220106', '220100', '绿园区', '3');
INSERT INTO `wl_city` VALUES ('220112', '220100', '双阳区', '3');
INSERT INTO `wl_city` VALUES ('220113', '220100', '九台区', '3');
INSERT INTO `wl_city` VALUES ('220122', '220100', '农安县', '3');
INSERT INTO `wl_city` VALUES ('220182', '220100', '榆树市', '3');
INSERT INTO `wl_city` VALUES ('220183', '220100', '德惠市', '3');
INSERT INTO `wl_city` VALUES ('220200', '220000', '吉林市', '2');
INSERT INTO `wl_city` VALUES ('220202', '220200', '昌邑区', '3');
INSERT INTO `wl_city` VALUES ('220203', '220200', '龙潭区', '3');
INSERT INTO `wl_city` VALUES ('220204', '220200', '船营区', '3');
INSERT INTO `wl_city` VALUES ('220211', '220200', '丰满区', '3');
INSERT INTO `wl_city` VALUES ('220221', '220200', '永吉县', '3');
INSERT INTO `wl_city` VALUES ('220281', '220200', '蛟河市', '3');
INSERT INTO `wl_city` VALUES ('220282', '220200', '桦甸市', '3');
INSERT INTO `wl_city` VALUES ('220283', '220200', '舒兰市', '3');
INSERT INTO `wl_city` VALUES ('220284', '220200', '磐石市', '3');
INSERT INTO `wl_city` VALUES ('220300', '220000', '四平市', '2');
INSERT INTO `wl_city` VALUES ('220302', '220300', '铁西区', '3');
INSERT INTO `wl_city` VALUES ('220303', '220300', '铁东区', '3');
INSERT INTO `wl_city` VALUES ('220322', '220300', '梨树县', '3');
INSERT INTO `wl_city` VALUES ('220323', '220300', '伊通满族自治县', '3');
INSERT INTO `wl_city` VALUES ('220381', '220300', '公主岭市', '3');
INSERT INTO `wl_city` VALUES ('220382', '220300', '双辽市', '3');
INSERT INTO `wl_city` VALUES ('220400', '220000', '辽源市', '2');
INSERT INTO `wl_city` VALUES ('220402', '220400', '龙山区', '3');
INSERT INTO `wl_city` VALUES ('220403', '220400', '西安区', '3');
INSERT INTO `wl_city` VALUES ('220421', '220400', '东丰县', '3');
INSERT INTO `wl_city` VALUES ('220422', '220400', '东辽县', '3');
INSERT INTO `wl_city` VALUES ('220500', '220000', '通化市', '2');
INSERT INTO `wl_city` VALUES ('220502', '220500', '东昌区', '3');
INSERT INTO `wl_city` VALUES ('220503', '220500', '二道江区', '3');
INSERT INTO `wl_city` VALUES ('220521', '220500', '通化县', '3');
INSERT INTO `wl_city` VALUES ('220523', '220500', '辉南县', '3');
INSERT INTO `wl_city` VALUES ('220524', '220500', '柳河县', '3');
INSERT INTO `wl_city` VALUES ('220581', '220500', '梅河口市', '3');
INSERT INTO `wl_city` VALUES ('220582', '220500', '集安市', '3');
INSERT INTO `wl_city` VALUES ('220600', '220000', '白山市', '2');
INSERT INTO `wl_city` VALUES ('220602', '220600', '浑江区', '3');
INSERT INTO `wl_city` VALUES ('220605', '220600', '江源区', '3');
INSERT INTO `wl_city` VALUES ('220621', '220600', '抚松县', '3');
INSERT INTO `wl_city` VALUES ('220622', '220600', '靖宇县', '3');
INSERT INTO `wl_city` VALUES ('220623', '220600', '长白朝鲜族自治县', '3');
INSERT INTO `wl_city` VALUES ('220681', '220600', '临江市', '3');
INSERT INTO `wl_city` VALUES ('220700', '220000', '松原市', '2');
INSERT INTO `wl_city` VALUES ('220702', '220700', '宁江区', '3');
INSERT INTO `wl_city` VALUES ('220721', '220700', '前郭尔罗斯蒙古族自治县', '3');
INSERT INTO `wl_city` VALUES ('220722', '220700', '长岭县', '3');
INSERT INTO `wl_city` VALUES ('220723', '220700', '乾安县', '3');
INSERT INTO `wl_city` VALUES ('220781', '220700', '扶余市', '3');
INSERT INTO `wl_city` VALUES ('220800', '220000', '白城市', '2');
INSERT INTO `wl_city` VALUES ('220802', '220800', '洮北区', '3');
INSERT INTO `wl_city` VALUES ('220821', '220800', '镇赉县', '3');
INSERT INTO `wl_city` VALUES ('220822', '220800', '通榆县', '3');
INSERT INTO `wl_city` VALUES ('220881', '220800', '洮南市', '3');
INSERT INTO `wl_city` VALUES ('220882', '220800', '大安市', '3');
INSERT INTO `wl_city` VALUES ('222400', '220000', '延边朝鲜族自治州', '2');
INSERT INTO `wl_city` VALUES ('222401', '222400', '延吉市', '3');
INSERT INTO `wl_city` VALUES ('222402', '222400', '图们市', '3');
INSERT INTO `wl_city` VALUES ('222403', '222400', '敦化市', '3');
INSERT INTO `wl_city` VALUES ('222404', '222400', '珲春市', '3');
INSERT INTO `wl_city` VALUES ('222405', '222400', '龙井市', '3');
INSERT INTO `wl_city` VALUES ('222406', '222400', '和龙市', '3');
INSERT INTO `wl_city` VALUES ('222424', '222400', '汪清县', '3');
INSERT INTO `wl_city` VALUES ('222426', '222400', '安图县', '3');
INSERT INTO `wl_city` VALUES ('230000', '100000', '黑龙江省', '1');
INSERT INTO `wl_city` VALUES ('230100', '230000', '哈尔滨市', '2');
INSERT INTO `wl_city` VALUES ('230102', '230100', '道里区', '3');
INSERT INTO `wl_city` VALUES ('230103', '230100', '南岗区', '3');
INSERT INTO `wl_city` VALUES ('230104', '230100', '道外区', '3');
INSERT INTO `wl_city` VALUES ('230108', '230100', '平房区', '3');
INSERT INTO `wl_city` VALUES ('230109', '230100', '松北区', '3');
INSERT INTO `wl_city` VALUES ('230110', '230100', '香坊区', '3');
INSERT INTO `wl_city` VALUES ('230111', '230100', '呼兰区', '3');
INSERT INTO `wl_city` VALUES ('230112', '230100', '阿城区', '3');
INSERT INTO `wl_city` VALUES ('230113', '230100', '双城区', '3');
INSERT INTO `wl_city` VALUES ('230123', '230100', '依兰县', '3');
INSERT INTO `wl_city` VALUES ('230124', '230100', '方正县', '3');
INSERT INTO `wl_city` VALUES ('230125', '230100', '宾县', '3');
INSERT INTO `wl_city` VALUES ('230126', '230100', '巴彦县', '3');
INSERT INTO `wl_city` VALUES ('230127', '230100', '木兰县', '3');
INSERT INTO `wl_city` VALUES ('230128', '230100', '通河县', '3');
INSERT INTO `wl_city` VALUES ('230129', '230100', '延寿县', '3');
INSERT INTO `wl_city` VALUES ('230183', '230100', '尚志市', '3');
INSERT INTO `wl_city` VALUES ('230184', '230100', '五常市', '3');
INSERT INTO `wl_city` VALUES ('230200', '230000', '齐齐哈尔市', '2');
INSERT INTO `wl_city` VALUES ('230202', '230200', '龙沙区', '3');
INSERT INTO `wl_city` VALUES ('230203', '230200', '建华区', '3');
INSERT INTO `wl_city` VALUES ('230204', '230200', '铁锋区', '3');
INSERT INTO `wl_city` VALUES ('230205', '230200', '昂昂溪区', '3');
INSERT INTO `wl_city` VALUES ('230206', '230200', '富拉尔基区', '3');
INSERT INTO `wl_city` VALUES ('230207', '230200', '碾子山区', '3');
INSERT INTO `wl_city` VALUES ('230208', '230200', '梅里斯达斡尔族区', '3');
INSERT INTO `wl_city` VALUES ('230221', '230200', '龙江县', '3');
INSERT INTO `wl_city` VALUES ('230223', '230200', '依安县', '3');
INSERT INTO `wl_city` VALUES ('230224', '230200', '泰来县', '3');
INSERT INTO `wl_city` VALUES ('230225', '230200', '甘南县', '3');
INSERT INTO `wl_city` VALUES ('230227', '230200', '富裕县', '3');
INSERT INTO `wl_city` VALUES ('230229', '230200', '克山县', '3');
INSERT INTO `wl_city` VALUES ('230230', '230200', '克东县', '3');
INSERT INTO `wl_city` VALUES ('230231', '230200', '拜泉县', '3');
INSERT INTO `wl_city` VALUES ('230281', '230200', '讷河市', '3');
INSERT INTO `wl_city` VALUES ('230300', '230000', '鸡西市', '2');
INSERT INTO `wl_city` VALUES ('230302', '230300', '鸡冠区', '3');
INSERT INTO `wl_city` VALUES ('230303', '230300', '恒山区', '3');
INSERT INTO `wl_city` VALUES ('230304', '230300', '滴道区', '3');
INSERT INTO `wl_city` VALUES ('230305', '230300', '梨树区', '3');
INSERT INTO `wl_city` VALUES ('230306', '230300', '城子河区', '3');
INSERT INTO `wl_city` VALUES ('230307', '230300', '麻山区', '3');
INSERT INTO `wl_city` VALUES ('230321', '230300', '鸡东县', '3');
INSERT INTO `wl_city` VALUES ('230381', '230300', '虎林市', '3');
INSERT INTO `wl_city` VALUES ('230382', '230300', '密山市', '3');
INSERT INTO `wl_city` VALUES ('230400', '230000', '鹤岗市', '2');
INSERT INTO `wl_city` VALUES ('230402', '230400', '向阳区', '3');
INSERT INTO `wl_city` VALUES ('230403', '230400', '工农区', '3');
INSERT INTO `wl_city` VALUES ('230404', '230400', '南山区', '3');
INSERT INTO `wl_city` VALUES ('230405', '230400', '兴安区', '3');
INSERT INTO `wl_city` VALUES ('230406', '230400', '东山区', '3');
INSERT INTO `wl_city` VALUES ('230407', '230400', '兴山区', '3');
INSERT INTO `wl_city` VALUES ('230421', '230400', '萝北县', '3');
INSERT INTO `wl_city` VALUES ('230422', '230400', '绥滨县', '3');
INSERT INTO `wl_city` VALUES ('230500', '230000', '双鸭山市', '2');
INSERT INTO `wl_city` VALUES ('230502', '230500', '尖山区', '3');
INSERT INTO `wl_city` VALUES ('230503', '230500', '岭东区', '3');
INSERT INTO `wl_city` VALUES ('230505', '230500', '四方台区', '3');
INSERT INTO `wl_city` VALUES ('230506', '230500', '宝山区', '3');
INSERT INTO `wl_city` VALUES ('230521', '230500', '集贤县', '3');
INSERT INTO `wl_city` VALUES ('230522', '230500', '友谊县', '3');
INSERT INTO `wl_city` VALUES ('230523', '230500', '宝清县', '3');
INSERT INTO `wl_city` VALUES ('230524', '230500', '饶河县', '3');
INSERT INTO `wl_city` VALUES ('230600', '230000', '大庆市', '2');
INSERT INTO `wl_city` VALUES ('230602', '230600', '萨尔图区', '3');
INSERT INTO `wl_city` VALUES ('230603', '230600', '龙凤区', '3');
INSERT INTO `wl_city` VALUES ('230604', '230600', '让胡路区', '3');
INSERT INTO `wl_city` VALUES ('230605', '230600', '红岗区', '3');
INSERT INTO `wl_city` VALUES ('230606', '230600', '大同区', '3');
INSERT INTO `wl_city` VALUES ('230621', '230600', '肇州县', '3');
INSERT INTO `wl_city` VALUES ('230622', '230600', '肇源县', '3');
INSERT INTO `wl_city` VALUES ('230623', '230600', '林甸县', '3');
INSERT INTO `wl_city` VALUES ('230624', '230600', '杜尔伯特蒙古族自治县', '3');
INSERT INTO `wl_city` VALUES ('230700', '230000', '伊春市', '2');
INSERT INTO `wl_city` VALUES ('230702', '230700', '伊春区', '3');
INSERT INTO `wl_city` VALUES ('230703', '230700', '南岔区', '3');
INSERT INTO `wl_city` VALUES ('230704', '230700', '友好区', '3');
INSERT INTO `wl_city` VALUES ('230705', '230700', '西林区', '3');
INSERT INTO `wl_city` VALUES ('230706', '230700', '翠峦区', '3');
INSERT INTO `wl_city` VALUES ('230707', '230700', '新青区', '3');
INSERT INTO `wl_city` VALUES ('230708', '230700', '美溪区', '3');
INSERT INTO `wl_city` VALUES ('230709', '230700', '金山屯区', '3');
INSERT INTO `wl_city` VALUES ('230710', '230700', '五营区', '3');
INSERT INTO `wl_city` VALUES ('230711', '230700', '乌马河区', '3');
INSERT INTO `wl_city` VALUES ('230712', '230700', '汤旺河区', '3');
INSERT INTO `wl_city` VALUES ('230713', '230700', '带岭区', '3');
INSERT INTO `wl_city` VALUES ('230714', '230700', '乌伊岭区', '3');
INSERT INTO `wl_city` VALUES ('230715', '230700', '红星区', '3');
INSERT INTO `wl_city` VALUES ('230716', '230700', '上甘岭区', '3');
INSERT INTO `wl_city` VALUES ('230722', '230700', '嘉荫县', '3');
INSERT INTO `wl_city` VALUES ('230781', '230700', '铁力市', '3');
INSERT INTO `wl_city` VALUES ('230800', '230000', '佳木斯市', '2');
INSERT INTO `wl_city` VALUES ('230803', '230800', '向阳区', '3');
INSERT INTO `wl_city` VALUES ('230804', '230800', '前进区', '3');
INSERT INTO `wl_city` VALUES ('230805', '230800', '东风区', '3');
INSERT INTO `wl_city` VALUES ('230811', '230800', '郊区', '3');
INSERT INTO `wl_city` VALUES ('230822', '230800', '桦南县', '3');
INSERT INTO `wl_city` VALUES ('230826', '230800', '桦川县', '3');
INSERT INTO `wl_city` VALUES ('230828', '230800', '汤原县', '3');
INSERT INTO `wl_city` VALUES ('230833', '230800', '抚远县', '3');
INSERT INTO `wl_city` VALUES ('230881', '230800', '同江市', '3');
INSERT INTO `wl_city` VALUES ('230882', '230800', '富锦市', '3');
INSERT INTO `wl_city` VALUES ('230900', '230000', '七台河市', '2');
INSERT INTO `wl_city` VALUES ('230902', '230900', '新兴区', '3');
INSERT INTO `wl_city` VALUES ('230903', '230900', '桃山区', '3');
INSERT INTO `wl_city` VALUES ('230904', '230900', '茄子河区', '3');
INSERT INTO `wl_city` VALUES ('230921', '230900', '勃利县', '3');
INSERT INTO `wl_city` VALUES ('231000', '230000', '牡丹江市', '2');
INSERT INTO `wl_city` VALUES ('231002', '231000', '东安区', '3');
INSERT INTO `wl_city` VALUES ('231003', '231000', '阳明区', '3');
INSERT INTO `wl_city` VALUES ('231004', '231000', '爱民区', '3');
INSERT INTO `wl_city` VALUES ('231005', '231000', '西安区', '3');
INSERT INTO `wl_city` VALUES ('231024', '231000', '东宁县', '3');
INSERT INTO `wl_city` VALUES ('231025', '231000', '林口县', '3');
INSERT INTO `wl_city` VALUES ('231081', '231000', '绥芬河市', '3');
INSERT INTO `wl_city` VALUES ('231083', '231000', '海林市', '3');
INSERT INTO `wl_city` VALUES ('231084', '231000', '宁安市', '3');
INSERT INTO `wl_city` VALUES ('231085', '231000', '穆棱市', '3');
INSERT INTO `wl_city` VALUES ('231100', '230000', '黑河市', '2');
INSERT INTO `wl_city` VALUES ('231102', '231100', '爱辉区', '3');
INSERT INTO `wl_city` VALUES ('231121', '231100', '嫩江县', '3');
INSERT INTO `wl_city` VALUES ('231123', '231100', '逊克县', '3');
INSERT INTO `wl_city` VALUES ('231124', '231100', '孙吴县', '3');
INSERT INTO `wl_city` VALUES ('231181', '231100', '北安市', '3');
INSERT INTO `wl_city` VALUES ('231182', '231100', '五大连池市', '3');
INSERT INTO `wl_city` VALUES ('231200', '230000', '绥化市', '2');
INSERT INTO `wl_city` VALUES ('231202', '231200', '北林区', '3');
INSERT INTO `wl_city` VALUES ('231221', '231200', '望奎县', '3');
INSERT INTO `wl_city` VALUES ('231222', '231200', '兰西县', '3');
INSERT INTO `wl_city` VALUES ('231223', '231200', '青冈县', '3');
INSERT INTO `wl_city` VALUES ('231224', '231200', '庆安县', '3');
INSERT INTO `wl_city` VALUES ('231225', '231200', '明水县', '3');
INSERT INTO `wl_city` VALUES ('231226', '231200', '绥棱县', '3');
INSERT INTO `wl_city` VALUES ('231281', '231200', '安达市', '3');
INSERT INTO `wl_city` VALUES ('231282', '231200', '肇东市', '3');
INSERT INTO `wl_city` VALUES ('231283', '231200', '海伦市', '3');
INSERT INTO `wl_city` VALUES ('232700', '230000', '大兴安岭地区', '2');
INSERT INTO `wl_city` VALUES ('232701', '232700', '加格达奇区', '3');
INSERT INTO `wl_city` VALUES ('232702', '232700', '新林区', '3');
INSERT INTO `wl_city` VALUES ('232703', '232700', '松岭区', '3');
INSERT INTO `wl_city` VALUES ('232704', '232700', '呼中区', '3');
INSERT INTO `wl_city` VALUES ('232721', '232700', '呼玛县', '3');
INSERT INTO `wl_city` VALUES ('232722', '232700', '塔河县', '3');
INSERT INTO `wl_city` VALUES ('232723', '232700', '漠河县', '3');
INSERT INTO `wl_city` VALUES ('310000', '100000', '上海', '1');
INSERT INTO `wl_city` VALUES ('310100', '310000', '上海市', '2');
INSERT INTO `wl_city` VALUES ('310101', '310100', '黄浦区', '3');
INSERT INTO `wl_city` VALUES ('310104', '310100', '徐汇区', '3');
INSERT INTO `wl_city` VALUES ('310105', '310100', '长宁区', '3');
INSERT INTO `wl_city` VALUES ('310106', '310100', '静安区', '3');
INSERT INTO `wl_city` VALUES ('310107', '310100', '普陀区', '3');
INSERT INTO `wl_city` VALUES ('310108', '310100', '闸北区', '3');
INSERT INTO `wl_city` VALUES ('310109', '310100', '虹口区', '3');
INSERT INTO `wl_city` VALUES ('310110', '310100', '杨浦区', '3');
INSERT INTO `wl_city` VALUES ('310112', '310100', '闵行区', '3');
INSERT INTO `wl_city` VALUES ('310113', '310100', '宝山区', '3');
INSERT INTO `wl_city` VALUES ('310114', '310100', '嘉定区', '3');
INSERT INTO `wl_city` VALUES ('310115', '310100', '浦东新区', '3');
INSERT INTO `wl_city` VALUES ('310116', '310100', '金山区', '3');
INSERT INTO `wl_city` VALUES ('310117', '310100', '松江区', '3');
INSERT INTO `wl_city` VALUES ('310118', '310100', '青浦区', '3');
INSERT INTO `wl_city` VALUES ('310120', '310100', '奉贤区', '3');
INSERT INTO `wl_city` VALUES ('310230', '310100', '崇明县', '3');
INSERT INTO `wl_city` VALUES ('320000', '100000', '江苏省', '1');
INSERT INTO `wl_city` VALUES ('320100', '320000', '南京市', '2');
INSERT INTO `wl_city` VALUES ('320102', '320100', '玄武区', '3');
INSERT INTO `wl_city` VALUES ('320104', '320100', '秦淮区', '3');
INSERT INTO `wl_city` VALUES ('320105', '320100', '建邺区', '3');
INSERT INTO `wl_city` VALUES ('320106', '320100', '鼓楼区', '3');
INSERT INTO `wl_city` VALUES ('320111', '320100', '浦口区', '3');
INSERT INTO `wl_city` VALUES ('320113', '320100', '栖霞区', '3');
INSERT INTO `wl_city` VALUES ('320114', '320100', '雨花台区', '3');
INSERT INTO `wl_city` VALUES ('320115', '320100', '江宁区', '3');
INSERT INTO `wl_city` VALUES ('320116', '320100', '六合区', '3');
INSERT INTO `wl_city` VALUES ('320117', '320100', '溧水区', '3');
INSERT INTO `wl_city` VALUES ('320118', '320100', '高淳区', '3');
INSERT INTO `wl_city` VALUES ('320200', '320000', '无锡市', '2');
INSERT INTO `wl_city` VALUES ('320202', '320200', '崇安区', '3');
INSERT INTO `wl_city` VALUES ('320203', '320200', '南长区', '3');
INSERT INTO `wl_city` VALUES ('320204', '320200', '北塘区', '3');
INSERT INTO `wl_city` VALUES ('320205', '320200', '锡山区', '3');
INSERT INTO `wl_city` VALUES ('320206', '320200', '惠山区', '3');
INSERT INTO `wl_city` VALUES ('320211', '320200', '滨湖区', '3');
INSERT INTO `wl_city` VALUES ('320281', '320200', '江阴市', '3');
INSERT INTO `wl_city` VALUES ('320282', '320200', '宜兴市', '3');
INSERT INTO `wl_city` VALUES ('320300', '320000', '徐州市', '2');
INSERT INTO `wl_city` VALUES ('320302', '320300', '鼓楼区', '3');
INSERT INTO `wl_city` VALUES ('320303', '320300', '云龙区', '3');
INSERT INTO `wl_city` VALUES ('320305', '320300', '贾汪区', '3');
INSERT INTO `wl_city` VALUES ('320311', '320300', '泉山区', '3');
INSERT INTO `wl_city` VALUES ('320312', '320300', '铜山区', '3');
INSERT INTO `wl_city` VALUES ('320321', '320300', '丰县', '3');
INSERT INTO `wl_city` VALUES ('320322', '320300', '沛县', '3');
INSERT INTO `wl_city` VALUES ('320324', '320300', '睢宁县', '3');
INSERT INTO `wl_city` VALUES ('320381', '320300', '新沂市', '3');
INSERT INTO `wl_city` VALUES ('320382', '320300', '邳州市', '3');
INSERT INTO `wl_city` VALUES ('320400', '320000', '常州市', '2');
INSERT INTO `wl_city` VALUES ('320402', '320400', '天宁区', '3');
INSERT INTO `wl_city` VALUES ('320404', '320400', '钟楼区', '3');
INSERT INTO `wl_city` VALUES ('320405', '320400', '戚墅堰区', '3');
INSERT INTO `wl_city` VALUES ('320411', '320400', '新北区', '3');
INSERT INTO `wl_city` VALUES ('320412', '320400', '武进区', '3');
INSERT INTO `wl_city` VALUES ('320481', '320400', '溧阳市', '3');
INSERT INTO `wl_city` VALUES ('320482', '320400', '金坛市', '3');
INSERT INTO `wl_city` VALUES ('320500', '320000', '苏州市', '2');
INSERT INTO `wl_city` VALUES ('320505', '320500', '虎丘区', '3');
INSERT INTO `wl_city` VALUES ('320506', '320500', '吴中区', '3');
INSERT INTO `wl_city` VALUES ('320507', '320500', '相城区', '3');
INSERT INTO `wl_city` VALUES ('320508', '320500', '姑苏区', '3');
INSERT INTO `wl_city` VALUES ('320509', '320500', '吴江区', '3');
INSERT INTO `wl_city` VALUES ('320581', '320500', '常熟市', '3');
INSERT INTO `wl_city` VALUES ('320582', '320500', '张家港市', '3');
INSERT INTO `wl_city` VALUES ('320583', '320500', '昆山市', '3');
INSERT INTO `wl_city` VALUES ('320585', '320500', '太仓市', '3');
INSERT INTO `wl_city` VALUES ('320600', '320000', '南通市', '2');
INSERT INTO `wl_city` VALUES ('320602', '320600', '崇川区', '3');
INSERT INTO `wl_city` VALUES ('320611', '320600', '港闸区', '3');
INSERT INTO `wl_city` VALUES ('320612', '320600', '通州区', '3');
INSERT INTO `wl_city` VALUES ('320621', '320600', '海安县', '3');
INSERT INTO `wl_city` VALUES ('320623', '320600', '如东县', '3');
INSERT INTO `wl_city` VALUES ('320681', '320600', '启东市', '3');
INSERT INTO `wl_city` VALUES ('320682', '320600', '如皋市', '3');
INSERT INTO `wl_city` VALUES ('320684', '320600', '海门市', '3');
INSERT INTO `wl_city` VALUES ('320700', '320000', '连云港市', '2');
INSERT INTO `wl_city` VALUES ('320703', '320700', '连云区', '3');
INSERT INTO `wl_city` VALUES ('320706', '320700', '海州区', '3');
INSERT INTO `wl_city` VALUES ('320707', '320700', '赣榆区', '3');
INSERT INTO `wl_city` VALUES ('320722', '320700', '东海县', '3');
INSERT INTO `wl_city` VALUES ('320723', '320700', '灌云县', '3');
INSERT INTO `wl_city` VALUES ('320724', '320700', '灌南县', '3');
INSERT INTO `wl_city` VALUES ('320800', '320000', '淮安市', '2');
INSERT INTO `wl_city` VALUES ('320802', '320800', '清河区', '3');
INSERT INTO `wl_city` VALUES ('320803', '320800', '淮安区', '3');
INSERT INTO `wl_city` VALUES ('320804', '320800', '淮阴区', '3');
INSERT INTO `wl_city` VALUES ('320811', '320800', '清浦区', '3');
INSERT INTO `wl_city` VALUES ('320826', '320800', '涟水县', '3');
INSERT INTO `wl_city` VALUES ('320829', '320800', '洪泽县', '3');
INSERT INTO `wl_city` VALUES ('320830', '320800', '盱眙县', '3');
INSERT INTO `wl_city` VALUES ('320831', '320800', '金湖县', '3');
INSERT INTO `wl_city` VALUES ('320900', '320000', '盐城市', '2');
INSERT INTO `wl_city` VALUES ('320902', '320900', '亭湖区', '3');
INSERT INTO `wl_city` VALUES ('320903', '320900', '盐都区', '3');
INSERT INTO `wl_city` VALUES ('320921', '320900', '响水县', '3');
INSERT INTO `wl_city` VALUES ('320922', '320900', '滨海县', '3');
INSERT INTO `wl_city` VALUES ('320923', '320900', '阜宁县', '3');
INSERT INTO `wl_city` VALUES ('320924', '320900', '射阳县', '3');
INSERT INTO `wl_city` VALUES ('320925', '320900', '建湖县', '3');
INSERT INTO `wl_city` VALUES ('320981', '320900', '东台市', '3');
INSERT INTO `wl_city` VALUES ('320982', '320900', '大丰市', '3');
INSERT INTO `wl_city` VALUES ('321000', '320000', '扬州市', '2');
INSERT INTO `wl_city` VALUES ('321002', '321000', '广陵区', '3');
INSERT INTO `wl_city` VALUES ('321003', '321000', '邗江区', '3');
INSERT INTO `wl_city` VALUES ('321012', '321000', '江都区', '3');
INSERT INTO `wl_city` VALUES ('321023', '321000', '宝应县', '3');
INSERT INTO `wl_city` VALUES ('321081', '321000', '仪征市', '3');
INSERT INTO `wl_city` VALUES ('321084', '321000', '高邮市', '3');
INSERT INTO `wl_city` VALUES ('321100', '320000', '镇江市', '2');
INSERT INTO `wl_city` VALUES ('321102', '321100', '京口区', '3');
INSERT INTO `wl_city` VALUES ('321111', '321100', '润州区', '3');
INSERT INTO `wl_city` VALUES ('321112', '321100', '丹徒区', '3');
INSERT INTO `wl_city` VALUES ('321181', '321100', '丹阳市', '3');
INSERT INTO `wl_city` VALUES ('321182', '321100', '扬中市', '3');
INSERT INTO `wl_city` VALUES ('321183', '321100', '句容市', '3');
INSERT INTO `wl_city` VALUES ('321200', '320000', '泰州市', '2');
INSERT INTO `wl_city` VALUES ('321202', '321200', '海陵区', '3');
INSERT INTO `wl_city` VALUES ('321203', '321200', '高港区', '3');
INSERT INTO `wl_city` VALUES ('321204', '321200', '姜堰区', '3');
INSERT INTO `wl_city` VALUES ('321281', '321200', '兴化市', '3');
INSERT INTO `wl_city` VALUES ('321282', '321200', '靖江市', '3');
INSERT INTO `wl_city` VALUES ('321283', '321200', '泰兴市', '3');
INSERT INTO `wl_city` VALUES ('321300', '320000', '宿迁市', '2');
INSERT INTO `wl_city` VALUES ('321302', '321300', '宿城区', '3');
INSERT INTO `wl_city` VALUES ('321311', '321300', '宿豫区', '3');
INSERT INTO `wl_city` VALUES ('321322', '321300', '沭阳县', '3');
INSERT INTO `wl_city` VALUES ('321323', '321300', '泗阳县', '3');
INSERT INTO `wl_city` VALUES ('321324', '321300', '泗洪县', '3');
INSERT INTO `wl_city` VALUES ('330000', '100000', '浙江省', '1');
INSERT INTO `wl_city` VALUES ('330100', '330000', '杭州市', '2');
INSERT INTO `wl_city` VALUES ('330102', '330100', '上城区', '3');
INSERT INTO `wl_city` VALUES ('330103', '330100', '下城区', '3');
INSERT INTO `wl_city` VALUES ('330104', '330100', '江干区', '3');
INSERT INTO `wl_city` VALUES ('330105', '330100', '拱墅区', '3');
INSERT INTO `wl_city` VALUES ('330106', '330100', '西湖区', '3');
INSERT INTO `wl_city` VALUES ('330108', '330100', '滨江区', '3');
INSERT INTO `wl_city` VALUES ('330109', '330100', '萧山区', '3');
INSERT INTO `wl_city` VALUES ('330110', '330100', '余杭区', '3');
INSERT INTO `wl_city` VALUES ('330122', '330100', '桐庐县', '3');
INSERT INTO `wl_city` VALUES ('330127', '330100', '淳安县', '3');
INSERT INTO `wl_city` VALUES ('330182', '330100', '建德市', '3');
INSERT INTO `wl_city` VALUES ('330183', '330100', '富阳区', '3');
INSERT INTO `wl_city` VALUES ('330185', '330100', '临安市', '3');
INSERT INTO `wl_city` VALUES ('330200', '330000', '宁波市', '2');
INSERT INTO `wl_city` VALUES ('330203', '330200', '海曙区', '3');
INSERT INTO `wl_city` VALUES ('330204', '330200', '江东区', '3');
INSERT INTO `wl_city` VALUES ('330205', '330200', '江北区', '3');
INSERT INTO `wl_city` VALUES ('330206', '330200', '北仑区', '3');
INSERT INTO `wl_city` VALUES ('330211', '330200', '镇海区', '3');
INSERT INTO `wl_city` VALUES ('330212', '330200', '鄞州区', '3');
INSERT INTO `wl_city` VALUES ('330225', '330200', '象山县', '3');
INSERT INTO `wl_city` VALUES ('330226', '330200', '宁海县', '3');
INSERT INTO `wl_city` VALUES ('330281', '330200', '余姚市', '3');
INSERT INTO `wl_city` VALUES ('330282', '330200', '慈溪市', '3');
INSERT INTO `wl_city` VALUES ('330283', '330200', '奉化市', '3');
INSERT INTO `wl_city` VALUES ('330300', '330000', '温州市', '2');
INSERT INTO `wl_city` VALUES ('330302', '330300', '鹿城区', '3');
INSERT INTO `wl_city` VALUES ('330303', '330300', '龙湾区', '3');
INSERT INTO `wl_city` VALUES ('330304', '330300', '瓯海区', '3');
INSERT INTO `wl_city` VALUES ('330322', '330300', '洞头县', '3');
INSERT INTO `wl_city` VALUES ('330324', '330300', '永嘉县', '3');
INSERT INTO `wl_city` VALUES ('330326', '330300', '平阳县', '3');
INSERT INTO `wl_city` VALUES ('330327', '330300', '苍南县', '3');
INSERT INTO `wl_city` VALUES ('330328', '330300', '文成县', '3');
INSERT INTO `wl_city` VALUES ('330329', '330300', '泰顺县', '3');
INSERT INTO `wl_city` VALUES ('330381', '330300', '瑞安市', '3');
INSERT INTO `wl_city` VALUES ('330382', '330300', '乐清市', '3');
INSERT INTO `wl_city` VALUES ('330400', '330000', '嘉兴市', '2');
INSERT INTO `wl_city` VALUES ('330402', '330400', '南湖区', '3');
INSERT INTO `wl_city` VALUES ('330411', '330400', '秀洲区', '3');
INSERT INTO `wl_city` VALUES ('330421', '330400', '嘉善县', '3');
INSERT INTO `wl_city` VALUES ('330424', '330400', '海盐县', '3');
INSERT INTO `wl_city` VALUES ('330481', '330400', '海宁市', '3');
INSERT INTO `wl_city` VALUES ('330482', '330400', '平湖市', '3');
INSERT INTO `wl_city` VALUES ('330483', '330400', '桐乡市', '3');
INSERT INTO `wl_city` VALUES ('330500', '330000', '湖州市', '2');
INSERT INTO `wl_city` VALUES ('330502', '330500', '吴兴区', '3');
INSERT INTO `wl_city` VALUES ('330503', '330500', '南浔区', '3');
INSERT INTO `wl_city` VALUES ('330521', '330500', '德清县', '3');
INSERT INTO `wl_city` VALUES ('330522', '330500', '长兴县', '3');
INSERT INTO `wl_city` VALUES ('330523', '330500', '安吉县', '3');
INSERT INTO `wl_city` VALUES ('330600', '330000', '绍兴市', '2');
INSERT INTO `wl_city` VALUES ('330602', '330600', '越城区', '3');
INSERT INTO `wl_city` VALUES ('330603', '330600', '柯桥区', '3');
INSERT INTO `wl_city` VALUES ('330604', '330600', '上虞区', '3');
INSERT INTO `wl_city` VALUES ('330624', '330600', '新昌县', '3');
INSERT INTO `wl_city` VALUES ('330681', '330600', '诸暨市', '3');
INSERT INTO `wl_city` VALUES ('330683', '330600', '嵊州市', '3');
INSERT INTO `wl_city` VALUES ('330700', '330000', '金华市', '2');
INSERT INTO `wl_city` VALUES ('330702', '330700', '婺城区', '3');
INSERT INTO `wl_city` VALUES ('330703', '330700', '金东区', '3');
INSERT INTO `wl_city` VALUES ('330723', '330700', '武义县', '3');
INSERT INTO `wl_city` VALUES ('330726', '330700', '浦江县', '3');
INSERT INTO `wl_city` VALUES ('330727', '330700', '磐安县', '3');
INSERT INTO `wl_city` VALUES ('330781', '330700', '兰溪市', '3');
INSERT INTO `wl_city` VALUES ('330782', '330700', '义乌市', '3');
INSERT INTO `wl_city` VALUES ('330783', '330700', '东阳市', '3');
INSERT INTO `wl_city` VALUES ('330784', '330700', '永康市', '3');
INSERT INTO `wl_city` VALUES ('330800', '330000', '衢州市', '2');
INSERT INTO `wl_city` VALUES ('330802', '330800', '柯城区', '3');
INSERT INTO `wl_city` VALUES ('330803', '330800', '衢江区', '3');
INSERT INTO `wl_city` VALUES ('330822', '330800', '常山县', '3');
INSERT INTO `wl_city` VALUES ('330824', '330800', '开化县', '3');
INSERT INTO `wl_city` VALUES ('330825', '330800', '龙游县', '3');
INSERT INTO `wl_city` VALUES ('330881', '330800', '江山市', '3');
INSERT INTO `wl_city` VALUES ('330900', '330000', '舟山市', '2');
INSERT INTO `wl_city` VALUES ('330902', '330900', '定海区', '3');
INSERT INTO `wl_city` VALUES ('330903', '330900', '普陀区', '3');
INSERT INTO `wl_city` VALUES ('330921', '330900', '岱山县', '3');
INSERT INTO `wl_city` VALUES ('330922', '330900', '嵊泗县', '3');
INSERT INTO `wl_city` VALUES ('331000', '330000', '台州市', '2');
INSERT INTO `wl_city` VALUES ('331002', '331000', '椒江区', '3');
INSERT INTO `wl_city` VALUES ('331003', '331000', '黄岩区', '3');
INSERT INTO `wl_city` VALUES ('331004', '331000', '路桥区', '3');
INSERT INTO `wl_city` VALUES ('331021', '331000', '玉环县', '3');
INSERT INTO `wl_city` VALUES ('331022', '331000', '三门县', '3');
INSERT INTO `wl_city` VALUES ('331023', '331000', '天台县', '3');
INSERT INTO `wl_city` VALUES ('331024', '331000', '仙居县', '3');
INSERT INTO `wl_city` VALUES ('331081', '331000', '温岭市', '3');
INSERT INTO `wl_city` VALUES ('331082', '331000', '临海市', '3');
INSERT INTO `wl_city` VALUES ('331100', '330000', '丽水市', '2');
INSERT INTO `wl_city` VALUES ('331102', '331100', '莲都区', '3');
INSERT INTO `wl_city` VALUES ('331121', '331100', '青田县', '3');
INSERT INTO `wl_city` VALUES ('331122', '331100', '缙云县', '3');
INSERT INTO `wl_city` VALUES ('331123', '331100', '遂昌县', '3');
INSERT INTO `wl_city` VALUES ('331124', '331100', '松阳县', '3');
INSERT INTO `wl_city` VALUES ('331125', '331100', '云和县', '3');
INSERT INTO `wl_city` VALUES ('331126', '331100', '庆元县', '3');
INSERT INTO `wl_city` VALUES ('331127', '331100', '景宁畲族自治县', '3');
INSERT INTO `wl_city` VALUES ('331181', '331100', '龙泉市', '3');
INSERT INTO `wl_city` VALUES ('331200', '330000', '舟山群岛新区', '2');
INSERT INTO `wl_city` VALUES ('331201', '331200', '金塘岛', '3');
INSERT INTO `wl_city` VALUES ('331202', '331200', '六横岛', '3');
INSERT INTO `wl_city` VALUES ('331203', '331200', '衢山岛', '3');
INSERT INTO `wl_city` VALUES ('331204', '331200', '舟山本岛西北部', '3');
INSERT INTO `wl_city` VALUES ('331205', '331200', '岱山岛西南部', '3');
INSERT INTO `wl_city` VALUES ('331206', '331200', '泗礁岛', '3');
INSERT INTO `wl_city` VALUES ('331207', '331200', '朱家尖岛', '3');
INSERT INTO `wl_city` VALUES ('331208', '331200', '洋山岛', '3');
INSERT INTO `wl_city` VALUES ('331209', '331200', '长涂岛', '3');
INSERT INTO `wl_city` VALUES ('331210', '331200', '虾峙岛', '3');
INSERT INTO `wl_city` VALUES ('340000', '100000', '安徽省', '1');
INSERT INTO `wl_city` VALUES ('340100', '340000', '合肥市', '2');
INSERT INTO `wl_city` VALUES ('340102', '340100', '瑶海区', '3');
INSERT INTO `wl_city` VALUES ('340103', '340100', '庐阳区', '3');
INSERT INTO `wl_city` VALUES ('340104', '340100', '蜀山区', '3');
INSERT INTO `wl_city` VALUES ('340111', '340100', '包河区', '3');
INSERT INTO `wl_city` VALUES ('340121', '340100', '长丰县', '3');
INSERT INTO `wl_city` VALUES ('340122', '340100', '肥东县', '3');
INSERT INTO `wl_city` VALUES ('340123', '340100', '肥西县', '3');
INSERT INTO `wl_city` VALUES ('340124', '340100', '庐江县', '3');
INSERT INTO `wl_city` VALUES ('340181', '340100', '巢湖市', '3');
INSERT INTO `wl_city` VALUES ('340200', '340000', '芜湖市', '2');
INSERT INTO `wl_city` VALUES ('340202', '340200', '镜湖区', '3');
INSERT INTO `wl_city` VALUES ('340203', '340200', '弋江区', '3');
INSERT INTO `wl_city` VALUES ('340207', '340200', '鸠江区', '3');
INSERT INTO `wl_city` VALUES ('340208', '340200', '三山区', '3');
INSERT INTO `wl_city` VALUES ('340221', '340200', '芜湖县', '3');
INSERT INTO `wl_city` VALUES ('340222', '340200', '繁昌县', '3');
INSERT INTO `wl_city` VALUES ('340223', '340200', '南陵县', '3');
INSERT INTO `wl_city` VALUES ('340225', '340200', '无为县', '3');
INSERT INTO `wl_city` VALUES ('340300', '340000', '蚌埠市', '2');
INSERT INTO `wl_city` VALUES ('340302', '340300', '龙子湖区', '3');
INSERT INTO `wl_city` VALUES ('340303', '340300', '蚌山区', '3');
INSERT INTO `wl_city` VALUES ('340304', '340300', '禹会区', '3');
INSERT INTO `wl_city` VALUES ('340311', '340300', '淮上区', '3');
INSERT INTO `wl_city` VALUES ('340321', '340300', '怀远县', '3');
INSERT INTO `wl_city` VALUES ('340322', '340300', '五河县', '3');
INSERT INTO `wl_city` VALUES ('340323', '340300', '固镇县', '3');
INSERT INTO `wl_city` VALUES ('340400', '340000', '淮南市', '2');
INSERT INTO `wl_city` VALUES ('340402', '340400', '大通区', '3');
INSERT INTO `wl_city` VALUES ('340403', '340400', '田家庵区', '3');
INSERT INTO `wl_city` VALUES ('340404', '340400', '谢家集区', '3');
INSERT INTO `wl_city` VALUES ('340405', '340400', '八公山区', '3');
INSERT INTO `wl_city` VALUES ('340406', '340400', '潘集区', '3');
INSERT INTO `wl_city` VALUES ('340421', '340400', '凤台县', '3');
INSERT INTO `wl_city` VALUES ('340500', '340000', '马鞍山市', '2');
INSERT INTO `wl_city` VALUES ('340503', '340500', '花山区', '3');
INSERT INTO `wl_city` VALUES ('340504', '340500', '雨山区', '3');
INSERT INTO `wl_city` VALUES ('340506', '340500', '博望区', '3');
INSERT INTO `wl_city` VALUES ('340521', '340500', '当涂县', '3');
INSERT INTO `wl_city` VALUES ('340522', '340500', '含山县', '3');
INSERT INTO `wl_city` VALUES ('340523', '340500', '和县', '3');
INSERT INTO `wl_city` VALUES ('340600', '340000', '淮北市', '2');
INSERT INTO `wl_city` VALUES ('340602', '340600', '杜集区', '3');
INSERT INTO `wl_city` VALUES ('340603', '340600', '相山区', '3');
INSERT INTO `wl_city` VALUES ('340604', '340600', '烈山区', '3');
INSERT INTO `wl_city` VALUES ('340621', '340600', '濉溪县', '3');
INSERT INTO `wl_city` VALUES ('340700', '340000', '铜陵市', '2');
INSERT INTO `wl_city` VALUES ('340702', '340700', '铜官山区', '3');
INSERT INTO `wl_city` VALUES ('340703', '340700', '狮子山区', '3');
INSERT INTO `wl_city` VALUES ('340711', '340700', '郊区', '3');
INSERT INTO `wl_city` VALUES ('340721', '340700', '铜陵县', '3');
INSERT INTO `wl_city` VALUES ('340800', '340000', '安庆市', '2');
INSERT INTO `wl_city` VALUES ('340802', '340800', '迎江区', '3');
INSERT INTO `wl_city` VALUES ('340803', '340800', '大观区', '3');
INSERT INTO `wl_city` VALUES ('340811', '340800', '宜秀区', '3');
INSERT INTO `wl_city` VALUES ('340822', '340800', '怀宁县', '3');
INSERT INTO `wl_city` VALUES ('340823', '340800', '枞阳县', '3');
INSERT INTO `wl_city` VALUES ('340824', '340800', '潜山县', '3');
INSERT INTO `wl_city` VALUES ('340825', '340800', '太湖县', '3');
INSERT INTO `wl_city` VALUES ('340826', '340800', '宿松县', '3');
INSERT INTO `wl_city` VALUES ('340827', '340800', '望江县', '3');
INSERT INTO `wl_city` VALUES ('340828', '340800', '岳西县', '3');
INSERT INTO `wl_city` VALUES ('340881', '340800', '桐城市', '3');
INSERT INTO `wl_city` VALUES ('341000', '340000', '黄山市', '2');
INSERT INTO `wl_city` VALUES ('341002', '341000', '屯溪区', '3');
INSERT INTO `wl_city` VALUES ('341003', '341000', '黄山区', '3');
INSERT INTO `wl_city` VALUES ('341004', '341000', '徽州区', '3');
INSERT INTO `wl_city` VALUES ('341021', '341000', '歙县', '3');
INSERT INTO `wl_city` VALUES ('341022', '341000', '休宁县', '3');
INSERT INTO `wl_city` VALUES ('341023', '341000', '黟县', '3');
INSERT INTO `wl_city` VALUES ('341024', '341000', '祁门县', '3');
INSERT INTO `wl_city` VALUES ('341100', '340000', '滁州市', '2');
INSERT INTO `wl_city` VALUES ('341102', '341100', '琅琊区', '3');
INSERT INTO `wl_city` VALUES ('341103', '341100', '南谯区', '3');
INSERT INTO `wl_city` VALUES ('341122', '341100', '来安县', '3');
INSERT INTO `wl_city` VALUES ('341124', '341100', '全椒县', '3');
INSERT INTO `wl_city` VALUES ('341125', '341100', '定远县', '3');
INSERT INTO `wl_city` VALUES ('341126', '341100', '凤阳县', '3');
INSERT INTO `wl_city` VALUES ('341181', '341100', '天长市', '3');
INSERT INTO `wl_city` VALUES ('341182', '341100', '明光市', '3');
INSERT INTO `wl_city` VALUES ('341200', '340000', '阜阳市', '2');
INSERT INTO `wl_city` VALUES ('341202', '341200', '颍州区', '3');
INSERT INTO `wl_city` VALUES ('341203', '341200', '颍东区', '3');
INSERT INTO `wl_city` VALUES ('341204', '341200', '颍泉区', '3');
INSERT INTO `wl_city` VALUES ('341221', '341200', '临泉县', '3');
INSERT INTO `wl_city` VALUES ('341222', '341200', '太和县', '3');
INSERT INTO `wl_city` VALUES ('341225', '341200', '阜南县', '3');
INSERT INTO `wl_city` VALUES ('341226', '341200', '颍上县', '3');
INSERT INTO `wl_city` VALUES ('341282', '341200', '界首市', '3');
INSERT INTO `wl_city` VALUES ('341300', '340000', '宿州市', '2');
INSERT INTO `wl_city` VALUES ('341302', '341300', '埇桥区', '3');
INSERT INTO `wl_city` VALUES ('341321', '341300', '砀山县', '3');
INSERT INTO `wl_city` VALUES ('341322', '341300', '萧县', '3');
INSERT INTO `wl_city` VALUES ('341323', '341300', '灵璧县', '3');
INSERT INTO `wl_city` VALUES ('341324', '341300', '泗县', '3');
INSERT INTO `wl_city` VALUES ('341500', '340000', '六安市', '2');
INSERT INTO `wl_city` VALUES ('341502', '341500', '金安区', '3');
INSERT INTO `wl_city` VALUES ('341503', '341500', '裕安区', '3');
INSERT INTO `wl_city` VALUES ('341521', '341500', '寿县', '3');
INSERT INTO `wl_city` VALUES ('341522', '341500', '霍邱县', '3');
INSERT INTO `wl_city` VALUES ('341523', '341500', '舒城县', '3');
INSERT INTO `wl_city` VALUES ('341524', '341500', '金寨县', '3');
INSERT INTO `wl_city` VALUES ('341525', '341500', '霍山县', '3');
INSERT INTO `wl_city` VALUES ('341600', '340000', '亳州市', '2');
INSERT INTO `wl_city` VALUES ('341602', '341600', '谯城区', '3');
INSERT INTO `wl_city` VALUES ('341621', '341600', '涡阳县', '3');
INSERT INTO `wl_city` VALUES ('341622', '341600', '蒙城县', '3');
INSERT INTO `wl_city` VALUES ('341623', '341600', '利辛县', '3');
INSERT INTO `wl_city` VALUES ('341700', '340000', '池州市', '2');
INSERT INTO `wl_city` VALUES ('341702', '341700', '贵池区', '3');
INSERT INTO `wl_city` VALUES ('341721', '341700', '东至县', '3');
INSERT INTO `wl_city` VALUES ('341722', '341700', '石台县', '3');
INSERT INTO `wl_city` VALUES ('341723', '341700', '青阳县', '3');
INSERT INTO `wl_city` VALUES ('341800', '340000', '宣城市', '2');
INSERT INTO `wl_city` VALUES ('341802', '341800', '宣州区', '3');
INSERT INTO `wl_city` VALUES ('341821', '341800', '郎溪县', '3');
INSERT INTO `wl_city` VALUES ('341822', '341800', '广德县', '3');
INSERT INTO `wl_city` VALUES ('341823', '341800', '泾县', '3');
INSERT INTO `wl_city` VALUES ('341824', '341800', '绩溪县', '3');
INSERT INTO `wl_city` VALUES ('341825', '341800', '旌德县', '3');
INSERT INTO `wl_city` VALUES ('341881', '341800', '宁国市', '3');
INSERT INTO `wl_city` VALUES ('350000', '100000', '福建省', '1');
INSERT INTO `wl_city` VALUES ('350100', '350000', '福州市', '2');
INSERT INTO `wl_city` VALUES ('350102', '350100', '鼓楼区', '3');
INSERT INTO `wl_city` VALUES ('350103', '350100', '台江区', '3');
INSERT INTO `wl_city` VALUES ('350104', '350100', '仓山区', '3');
INSERT INTO `wl_city` VALUES ('350105', '350100', '马尾区', '3');
INSERT INTO `wl_city` VALUES ('350111', '350100', '晋安区', '3');
INSERT INTO `wl_city` VALUES ('350121', '350100', '闽侯县', '3');
INSERT INTO `wl_city` VALUES ('350122', '350100', '连江县', '3');
INSERT INTO `wl_city` VALUES ('350123', '350100', '罗源县', '3');
INSERT INTO `wl_city` VALUES ('350124', '350100', '闽清县', '3');
INSERT INTO `wl_city` VALUES ('350125', '350100', '永泰县', '3');
INSERT INTO `wl_city` VALUES ('350128', '350100', '平潭县', '3');
INSERT INTO `wl_city` VALUES ('350181', '350100', '福清市', '3');
INSERT INTO `wl_city` VALUES ('350182', '350100', '长乐市', '3');
INSERT INTO `wl_city` VALUES ('350200', '350000', '厦门市', '2');
INSERT INTO `wl_city` VALUES ('350203', '350200', '思明区', '3');
INSERT INTO `wl_city` VALUES ('350205', '350200', '海沧区', '3');
INSERT INTO `wl_city` VALUES ('350206', '350200', '湖里区', '3');
INSERT INTO `wl_city` VALUES ('350211', '350200', '集美区', '3');
INSERT INTO `wl_city` VALUES ('350212', '350200', '同安区', '3');
INSERT INTO `wl_city` VALUES ('350213', '350200', '翔安区', '3');
INSERT INTO `wl_city` VALUES ('350300', '350000', '莆田市', '2');
INSERT INTO `wl_city` VALUES ('350302', '350300', '城厢区', '3');
INSERT INTO `wl_city` VALUES ('350303', '350300', '涵江区', '3');
INSERT INTO `wl_city` VALUES ('350304', '350300', '荔城区', '3');
INSERT INTO `wl_city` VALUES ('350305', '350300', '秀屿区', '3');
INSERT INTO `wl_city` VALUES ('350322', '350300', '仙游县', '3');
INSERT INTO `wl_city` VALUES ('350400', '350000', '三明市', '2');
INSERT INTO `wl_city` VALUES ('350402', '350400', '梅列区', '3');
INSERT INTO `wl_city` VALUES ('350403', '350400', '三元区', '3');
INSERT INTO `wl_city` VALUES ('350421', '350400', '明溪县', '3');
INSERT INTO `wl_city` VALUES ('350423', '350400', '清流县', '3');
INSERT INTO `wl_city` VALUES ('350424', '350400', '宁化县', '3');
INSERT INTO `wl_city` VALUES ('350425', '350400', '大田县', '3');
INSERT INTO `wl_city` VALUES ('350426', '350400', '尤溪县', '3');
INSERT INTO `wl_city` VALUES ('350427', '350400', '沙县', '3');
INSERT INTO `wl_city` VALUES ('350428', '350400', '将乐县', '3');
INSERT INTO `wl_city` VALUES ('350429', '350400', '泰宁县', '3');
INSERT INTO `wl_city` VALUES ('350430', '350400', '建宁县', '3');
INSERT INTO `wl_city` VALUES ('350481', '350400', '永安市', '3');
INSERT INTO `wl_city` VALUES ('350500', '350000', '泉州市', '2');
INSERT INTO `wl_city` VALUES ('350502', '350500', '鲤城区', '3');
INSERT INTO `wl_city` VALUES ('350503', '350500', '丰泽区', '3');
INSERT INTO `wl_city` VALUES ('350504', '350500', '洛江区', '3');
INSERT INTO `wl_city` VALUES ('350505', '350500', '泉港区', '3');
INSERT INTO `wl_city` VALUES ('350521', '350500', '惠安县', '3');
INSERT INTO `wl_city` VALUES ('350524', '350500', '安溪县', '3');
INSERT INTO `wl_city` VALUES ('350525', '350500', '永春县', '3');
INSERT INTO `wl_city` VALUES ('350526', '350500', '德化县', '3');
INSERT INTO `wl_city` VALUES ('350527', '350500', '金门县', '3');
INSERT INTO `wl_city` VALUES ('350581', '350500', '石狮市', '3');
INSERT INTO `wl_city` VALUES ('350582', '350500', '晋江市', '3');
INSERT INTO `wl_city` VALUES ('350583', '350500', '南安市', '3');
INSERT INTO `wl_city` VALUES ('350600', '350000', '漳州市', '2');
INSERT INTO `wl_city` VALUES ('350602', '350600', '芗城区', '3');
INSERT INTO `wl_city` VALUES ('350603', '350600', '龙文区', '3');
INSERT INTO `wl_city` VALUES ('350622', '350600', '云霄县', '3');
INSERT INTO `wl_city` VALUES ('350623', '350600', '漳浦县', '3');
INSERT INTO `wl_city` VALUES ('350624', '350600', '诏安县', '3');
INSERT INTO `wl_city` VALUES ('350625', '350600', '长泰县', '3');
INSERT INTO `wl_city` VALUES ('350626', '350600', '东山县', '3');
INSERT INTO `wl_city` VALUES ('350627', '350600', '南靖县', '3');
INSERT INTO `wl_city` VALUES ('350628', '350600', '平和县', '3');
INSERT INTO `wl_city` VALUES ('350629', '350600', '华安县', '3');
INSERT INTO `wl_city` VALUES ('350681', '350600', '龙海市', '3');
INSERT INTO `wl_city` VALUES ('350700', '350000', '南平市', '2');
INSERT INTO `wl_city` VALUES ('350702', '350700', '延平区', '3');
INSERT INTO `wl_city` VALUES ('350703', '350700', '建阳区', '3');
INSERT INTO `wl_city` VALUES ('350721', '350700', '顺昌县', '3');
INSERT INTO `wl_city` VALUES ('350722', '350700', '浦城县', '3');
INSERT INTO `wl_city` VALUES ('350723', '350700', '光泽县', '3');
INSERT INTO `wl_city` VALUES ('350724', '350700', '松溪县', '3');
INSERT INTO `wl_city` VALUES ('350725', '350700', '政和县', '3');
INSERT INTO `wl_city` VALUES ('350781', '350700', '邵武市', '3');
INSERT INTO `wl_city` VALUES ('350782', '350700', '武夷山市', '3');
INSERT INTO `wl_city` VALUES ('350783', '350700', '建瓯市', '3');
INSERT INTO `wl_city` VALUES ('350800', '350000', '龙岩市', '2');
INSERT INTO `wl_city` VALUES ('350802', '350800', '新罗区', '3');
INSERT INTO `wl_city` VALUES ('350821', '350800', '长汀县', '3');
INSERT INTO `wl_city` VALUES ('350822', '350800', '永定区', '3');
INSERT INTO `wl_city` VALUES ('350823', '350800', '上杭县', '3');
INSERT INTO `wl_city` VALUES ('350824', '350800', '武平县', '3');
INSERT INTO `wl_city` VALUES ('350825', '350800', '连城县', '3');
INSERT INTO `wl_city` VALUES ('350881', '350800', '漳平市', '3');
INSERT INTO `wl_city` VALUES ('350900', '350000', '宁德市', '2');
INSERT INTO `wl_city` VALUES ('350902', '350900', '蕉城区', '3');
INSERT INTO `wl_city` VALUES ('350921', '350900', '霞浦县', '3');
INSERT INTO `wl_city` VALUES ('350922', '350900', '古田县', '3');
INSERT INTO `wl_city` VALUES ('350923', '350900', '屏南县', '3');
INSERT INTO `wl_city` VALUES ('350924', '350900', '寿宁县', '3');
INSERT INTO `wl_city` VALUES ('350925', '350900', '周宁县', '3');
INSERT INTO `wl_city` VALUES ('350926', '350900', '柘荣县', '3');
INSERT INTO `wl_city` VALUES ('350981', '350900', '福安市', '3');
INSERT INTO `wl_city` VALUES ('350982', '350900', '福鼎市', '3');
INSERT INTO `wl_city` VALUES ('360000', '100000', '江西省', '1');
INSERT INTO `wl_city` VALUES ('360100', '360000', '南昌市', '2');
INSERT INTO `wl_city` VALUES ('360102', '360100', '东湖区', '3');
INSERT INTO `wl_city` VALUES ('360103', '360100', '西湖区', '3');
INSERT INTO `wl_city` VALUES ('360104', '360100', '青云谱区', '3');
INSERT INTO `wl_city` VALUES ('360105', '360100', '湾里区', '3');
INSERT INTO `wl_city` VALUES ('360111', '360100', '青山湖区', '3');
INSERT INTO `wl_city` VALUES ('360121', '360100', '南昌县', '3');
INSERT INTO `wl_city` VALUES ('360122', '360100', '新建县', '3');
INSERT INTO `wl_city` VALUES ('360123', '360100', '安义县', '3');
INSERT INTO `wl_city` VALUES ('360124', '360100', '进贤县', '3');
INSERT INTO `wl_city` VALUES ('360200', '360000', '景德镇市', '2');
INSERT INTO `wl_city` VALUES ('360202', '360200', '昌江区', '3');
INSERT INTO `wl_city` VALUES ('360203', '360200', '珠山区', '3');
INSERT INTO `wl_city` VALUES ('360222', '360200', '浮梁县', '3');
INSERT INTO `wl_city` VALUES ('360281', '360200', '乐平市', '3');
INSERT INTO `wl_city` VALUES ('360300', '360000', '萍乡市', '2');
INSERT INTO `wl_city` VALUES ('360302', '360300', '安源区', '3');
INSERT INTO `wl_city` VALUES ('360313', '360300', '湘东区', '3');
INSERT INTO `wl_city` VALUES ('360321', '360300', '莲花县', '3');
INSERT INTO `wl_city` VALUES ('360322', '360300', '上栗县', '3');
INSERT INTO `wl_city` VALUES ('360323', '360300', '芦溪县', '3');
INSERT INTO `wl_city` VALUES ('360400', '360000', '九江市', '2');
INSERT INTO `wl_city` VALUES ('360402', '360400', '庐山区', '3');
INSERT INTO `wl_city` VALUES ('360403', '360400', '浔阳区', '3');
INSERT INTO `wl_city` VALUES ('360421', '360400', '九江县', '3');
INSERT INTO `wl_city` VALUES ('360423', '360400', '武宁县', '3');
INSERT INTO `wl_city` VALUES ('360424', '360400', '修水县', '3');
INSERT INTO `wl_city` VALUES ('360425', '360400', '永修县', '3');
INSERT INTO `wl_city` VALUES ('360426', '360400', '德安县', '3');
INSERT INTO `wl_city` VALUES ('360427', '360400', '星子县', '3');
INSERT INTO `wl_city` VALUES ('360428', '360400', '都昌县', '3');
INSERT INTO `wl_city` VALUES ('360429', '360400', '湖口县', '3');
INSERT INTO `wl_city` VALUES ('360430', '360400', '彭泽县', '3');
INSERT INTO `wl_city` VALUES ('360481', '360400', '瑞昌市', '3');
INSERT INTO `wl_city` VALUES ('360482', '360400', '共青城市', '3');
INSERT INTO `wl_city` VALUES ('360500', '360000', '新余市', '2');
INSERT INTO `wl_city` VALUES ('360502', '360500', '渝水区', '3');
INSERT INTO `wl_city` VALUES ('360521', '360500', '分宜县', '3');
INSERT INTO `wl_city` VALUES ('360600', '360000', '鹰潭市', '2');
INSERT INTO `wl_city` VALUES ('360602', '360600', '月湖区', '3');
INSERT INTO `wl_city` VALUES ('360622', '360600', '余江县', '3');
INSERT INTO `wl_city` VALUES ('360681', '360600', '贵溪市', '3');
INSERT INTO `wl_city` VALUES ('360700', '360000', '赣州市', '2');
INSERT INTO `wl_city` VALUES ('360702', '360700', '章贡区', '3');
INSERT INTO `wl_city` VALUES ('360703', '360700', '南康区', '3');
INSERT INTO `wl_city` VALUES ('360721', '360700', '赣县', '3');
INSERT INTO `wl_city` VALUES ('360722', '360700', '信丰县', '3');
INSERT INTO `wl_city` VALUES ('360723', '360700', '大余县', '3');
INSERT INTO `wl_city` VALUES ('360724', '360700', '上犹县', '3');
INSERT INTO `wl_city` VALUES ('360725', '360700', '崇义县', '3');
INSERT INTO `wl_city` VALUES ('360726', '360700', '安远县', '3');
INSERT INTO `wl_city` VALUES ('360727', '360700', '龙南县', '3');
INSERT INTO `wl_city` VALUES ('360728', '360700', '定南县', '3');
INSERT INTO `wl_city` VALUES ('360729', '360700', '全南县', '3');
INSERT INTO `wl_city` VALUES ('360730', '360700', '宁都县', '3');
INSERT INTO `wl_city` VALUES ('360731', '360700', '于都县', '3');
INSERT INTO `wl_city` VALUES ('360732', '360700', '兴国县', '3');
INSERT INTO `wl_city` VALUES ('360733', '360700', '会昌县', '3');
INSERT INTO `wl_city` VALUES ('360734', '360700', '寻乌县', '3');
INSERT INTO `wl_city` VALUES ('360735', '360700', '石城县', '3');
INSERT INTO `wl_city` VALUES ('360781', '360700', '瑞金市', '3');
INSERT INTO `wl_city` VALUES ('360800', '360000', '吉安市', '2');
INSERT INTO `wl_city` VALUES ('360802', '360800', '吉州区', '3');
INSERT INTO `wl_city` VALUES ('360803', '360800', '青原区', '3');
INSERT INTO `wl_city` VALUES ('360821', '360800', '吉安县', '3');
INSERT INTO `wl_city` VALUES ('360822', '360800', '吉水县', '3');
INSERT INTO `wl_city` VALUES ('360823', '360800', '峡江县', '3');
INSERT INTO `wl_city` VALUES ('360824', '360800', '新干县', '3');
INSERT INTO `wl_city` VALUES ('360825', '360800', '永丰县', '3');
INSERT INTO `wl_city` VALUES ('360826', '360800', '泰和县', '3');
INSERT INTO `wl_city` VALUES ('360827', '360800', '遂川县', '3');
INSERT INTO `wl_city` VALUES ('360828', '360800', '万安县', '3');
INSERT INTO `wl_city` VALUES ('360829', '360800', '安福县', '3');
INSERT INTO `wl_city` VALUES ('360830', '360800', '永新县', '3');
INSERT INTO `wl_city` VALUES ('360881', '360800', '井冈山市', '3');
INSERT INTO `wl_city` VALUES ('360900', '360000', '宜春市', '2');
INSERT INTO `wl_city` VALUES ('360902', '360900', '袁州区', '3');
INSERT INTO `wl_city` VALUES ('360921', '360900', '奉新县', '3');
INSERT INTO `wl_city` VALUES ('360922', '360900', '万载县', '3');
INSERT INTO `wl_city` VALUES ('360923', '360900', '上高县', '3');
INSERT INTO `wl_city` VALUES ('360924', '360900', '宜丰县', '3');
INSERT INTO `wl_city` VALUES ('360925', '360900', '靖安县', '3');
INSERT INTO `wl_city` VALUES ('360926', '360900', '铜鼓县', '3');
INSERT INTO `wl_city` VALUES ('360981', '360900', '丰城市', '3');
INSERT INTO `wl_city` VALUES ('360982', '360900', '樟树市', '3');
INSERT INTO `wl_city` VALUES ('360983', '360900', '高安市', '3');
INSERT INTO `wl_city` VALUES ('361000', '360000', '抚州市', '2');
INSERT INTO `wl_city` VALUES ('361002', '361000', '临川区', '3');
INSERT INTO `wl_city` VALUES ('361021', '361000', '南城县', '3');
INSERT INTO `wl_city` VALUES ('361022', '361000', '黎川县', '3');
INSERT INTO `wl_city` VALUES ('361023', '361000', '南丰县', '3');
INSERT INTO `wl_city` VALUES ('361024', '361000', '崇仁县', '3');
INSERT INTO `wl_city` VALUES ('361025', '361000', '乐安县', '3');
INSERT INTO `wl_city` VALUES ('361026', '361000', '宜黄县', '3');
INSERT INTO `wl_city` VALUES ('361027', '361000', '金溪县', '3');
INSERT INTO `wl_city` VALUES ('361028', '361000', '资溪县', '3');
INSERT INTO `wl_city` VALUES ('361029', '361000', '东乡县', '3');
INSERT INTO `wl_city` VALUES ('361030', '361000', '广昌县', '3');
INSERT INTO `wl_city` VALUES ('361100', '360000', '上饶市', '2');
INSERT INTO `wl_city` VALUES ('361102', '361100', '信州区', '3');
INSERT INTO `wl_city` VALUES ('361121', '361100', '上饶县', '3');
INSERT INTO `wl_city` VALUES ('361122', '361100', '广丰县', '3');
INSERT INTO `wl_city` VALUES ('361123', '361100', '玉山县', '3');
INSERT INTO `wl_city` VALUES ('361124', '361100', '铅山县', '3');
INSERT INTO `wl_city` VALUES ('361125', '361100', '横峰县', '3');
INSERT INTO `wl_city` VALUES ('361126', '361100', '弋阳县', '3');
INSERT INTO `wl_city` VALUES ('361127', '361100', '余干县', '3');
INSERT INTO `wl_city` VALUES ('361128', '361100', '鄱阳县', '3');
INSERT INTO `wl_city` VALUES ('361129', '361100', '万年县', '3');
INSERT INTO `wl_city` VALUES ('361130', '361100', '婺源县', '3');
INSERT INTO `wl_city` VALUES ('361181', '361100', '德兴市', '3');
INSERT INTO `wl_city` VALUES ('370000', '100000', '山东省', '1');
INSERT INTO `wl_city` VALUES ('370100', '370000', '济南市', '2');
INSERT INTO `wl_city` VALUES ('370102', '370100', '历下区', '3');
INSERT INTO `wl_city` VALUES ('370103', '370100', '市中区', '3');
INSERT INTO `wl_city` VALUES ('370104', '370100', '槐荫区', '3');
INSERT INTO `wl_city` VALUES ('370105', '370100', '天桥区', '3');
INSERT INTO `wl_city` VALUES ('370112', '370100', '历城区', '3');
INSERT INTO `wl_city` VALUES ('370113', '370100', '长清区', '3');
INSERT INTO `wl_city` VALUES ('370124', '370100', '平阴县', '3');
INSERT INTO `wl_city` VALUES ('370125', '370100', '济阳县', '3');
INSERT INTO `wl_city` VALUES ('370126', '370100', '商河县', '3');
INSERT INTO `wl_city` VALUES ('370181', '370100', '章丘市', '3');
INSERT INTO `wl_city` VALUES ('370200', '370000', '青岛市', '2');
INSERT INTO `wl_city` VALUES ('370202', '370200', '市南区', '3');
INSERT INTO `wl_city` VALUES ('370203', '370200', '市北区', '3');
INSERT INTO `wl_city` VALUES ('370211', '370200', '黄岛区', '3');
INSERT INTO `wl_city` VALUES ('370212', '370200', '崂山区', '3');
INSERT INTO `wl_city` VALUES ('370213', '370200', '李沧区', '3');
INSERT INTO `wl_city` VALUES ('370214', '370200', '城阳区', '3');
INSERT INTO `wl_city` VALUES ('370281', '370200', '胶州市', '3');
INSERT INTO `wl_city` VALUES ('370282', '370200', '即墨市', '3');
INSERT INTO `wl_city` VALUES ('370283', '370200', '平度市', '3');
INSERT INTO `wl_city` VALUES ('370285', '370200', '莱西市', '3');
INSERT INTO `wl_city` VALUES ('370286', '370200', '西海岸新区', '3');
INSERT INTO `wl_city` VALUES ('370300', '370000', '淄博市', '2');
INSERT INTO `wl_city` VALUES ('370302', '370300', '淄川区', '3');
INSERT INTO `wl_city` VALUES ('370303', '370300', '张店区', '3');
INSERT INTO `wl_city` VALUES ('370304', '370300', '博山区', '3');
INSERT INTO `wl_city` VALUES ('370305', '370300', '临淄区', '3');
INSERT INTO `wl_city` VALUES ('370306', '370300', '周村区', '3');
INSERT INTO `wl_city` VALUES ('370321', '370300', '桓台县', '3');
INSERT INTO `wl_city` VALUES ('370322', '370300', '高青县', '3');
INSERT INTO `wl_city` VALUES ('370323', '370300', '沂源县', '3');
INSERT INTO `wl_city` VALUES ('370400', '370000', '枣庄市', '2');
INSERT INTO `wl_city` VALUES ('370402', '370400', '市中区', '3');
INSERT INTO `wl_city` VALUES ('370403', '370400', '薛城区', '3');
INSERT INTO `wl_city` VALUES ('370404', '370400', '峄城区', '3');
INSERT INTO `wl_city` VALUES ('370405', '370400', '台儿庄区', '3');
INSERT INTO `wl_city` VALUES ('370406', '370400', '山亭区', '3');
INSERT INTO `wl_city` VALUES ('370481', '370400', '滕州市', '3');
INSERT INTO `wl_city` VALUES ('370500', '370000', '东营市', '2');
INSERT INTO `wl_city` VALUES ('370502', '370500', '东营区', '3');
INSERT INTO `wl_city` VALUES ('370503', '370500', '河口区', '3');
INSERT INTO `wl_city` VALUES ('370521', '370500', '垦利县', '3');
INSERT INTO `wl_city` VALUES ('370522', '370500', '利津县', '3');
INSERT INTO `wl_city` VALUES ('370523', '370500', '广饶县', '3');
INSERT INTO `wl_city` VALUES ('370600', '370000', '烟台市', '2');
INSERT INTO `wl_city` VALUES ('370602', '370600', '芝罘区', '3');
INSERT INTO `wl_city` VALUES ('370611', '370600', '福山区', '3');
INSERT INTO `wl_city` VALUES ('370612', '370600', '牟平区', '3');
INSERT INTO `wl_city` VALUES ('370613', '370600', '莱山区', '3');
INSERT INTO `wl_city` VALUES ('370634', '370600', '长岛县', '3');
INSERT INTO `wl_city` VALUES ('370681', '370600', '龙口市', '3');
INSERT INTO `wl_city` VALUES ('370682', '370600', '莱阳市', '3');
INSERT INTO `wl_city` VALUES ('370683', '370600', '莱州市', '3');
INSERT INTO `wl_city` VALUES ('370684', '370600', '蓬莱市', '3');
INSERT INTO `wl_city` VALUES ('370685', '370600', '招远市', '3');
INSERT INTO `wl_city` VALUES ('370686', '370600', '栖霞市', '3');
INSERT INTO `wl_city` VALUES ('370687', '370600', '海阳市', '3');
INSERT INTO `wl_city` VALUES ('370700', '370000', '潍坊市', '2');
INSERT INTO `wl_city` VALUES ('370702', '370700', '潍城区', '3');
INSERT INTO `wl_city` VALUES ('370703', '370700', '寒亭区', '3');
INSERT INTO `wl_city` VALUES ('370704', '370700', '坊子区', '3');
INSERT INTO `wl_city` VALUES ('370705', '370700', '奎文区', '3');
INSERT INTO `wl_city` VALUES ('370724', '370700', '临朐县', '3');
INSERT INTO `wl_city` VALUES ('370725', '370700', '昌乐县', '3');
INSERT INTO `wl_city` VALUES ('370781', '370700', '青州市', '3');
INSERT INTO `wl_city` VALUES ('370782', '370700', '诸城市', '3');
INSERT INTO `wl_city` VALUES ('370783', '370700', '寿光市', '3');
INSERT INTO `wl_city` VALUES ('370784', '370700', '安丘市', '3');
INSERT INTO `wl_city` VALUES ('370785', '370700', '高密市', '3');
INSERT INTO `wl_city` VALUES ('370786', '370700', '昌邑市', '3');
INSERT INTO `wl_city` VALUES ('370800', '370000', '济宁市', '2');
INSERT INTO `wl_city` VALUES ('370811', '370800', '任城区', '3');
INSERT INTO `wl_city` VALUES ('370812', '370800', '兖州区', '3');
INSERT INTO `wl_city` VALUES ('370826', '370800', '微山县', '3');
INSERT INTO `wl_city` VALUES ('370827', '370800', '鱼台县', '3');
INSERT INTO `wl_city` VALUES ('370828', '370800', '金乡县', '3');
INSERT INTO `wl_city` VALUES ('370829', '370800', '嘉祥县', '3');
INSERT INTO `wl_city` VALUES ('370830', '370800', '汶上县', '3');
INSERT INTO `wl_city` VALUES ('370831', '370800', '泗水县', '3');
INSERT INTO `wl_city` VALUES ('370832', '370800', '梁山县', '3');
INSERT INTO `wl_city` VALUES ('370881', '370800', '曲阜市', '3');
INSERT INTO `wl_city` VALUES ('370883', '370800', '邹城市', '3');
INSERT INTO `wl_city` VALUES ('370900', '370000', '泰安市', '2');
INSERT INTO `wl_city` VALUES ('370902', '370900', '泰山区', '3');
INSERT INTO `wl_city` VALUES ('370911', '370900', '岱岳区', '3');
INSERT INTO `wl_city` VALUES ('370921', '370900', '宁阳县', '3');
INSERT INTO `wl_city` VALUES ('370923', '370900', '东平县', '3');
INSERT INTO `wl_city` VALUES ('370982', '370900', '新泰市', '3');
INSERT INTO `wl_city` VALUES ('370983', '370900', '肥城市', '3');
INSERT INTO `wl_city` VALUES ('371000', '370000', '威海市', '2');
INSERT INTO `wl_city` VALUES ('371002', '371000', '环翠区', '3');
INSERT INTO `wl_city` VALUES ('371003', '371000', '文登区', '3');
INSERT INTO `wl_city` VALUES ('371082', '371000', '荣成市', '3');
INSERT INTO `wl_city` VALUES ('371083', '371000', '乳山市', '3');
INSERT INTO `wl_city` VALUES ('371100', '370000', '日照市', '2');
INSERT INTO `wl_city` VALUES ('371102', '371100', '东港区', '3');
INSERT INTO `wl_city` VALUES ('371103', '371100', '岚山区', '3');
INSERT INTO `wl_city` VALUES ('371121', '371100', '五莲县', '3');
INSERT INTO `wl_city` VALUES ('371122', '371100', '莒县', '3');
INSERT INTO `wl_city` VALUES ('371200', '370000', '莱芜市', '2');
INSERT INTO `wl_city` VALUES ('371202', '371200', '莱城区', '3');
INSERT INTO `wl_city` VALUES ('371203', '371200', '钢城区', '3');
INSERT INTO `wl_city` VALUES ('371300', '370000', '临沂市', '2');
INSERT INTO `wl_city` VALUES ('371302', '371300', '兰山区', '3');
INSERT INTO `wl_city` VALUES ('371311', '371300', '罗庄区', '3');
INSERT INTO `wl_city` VALUES ('371312', '371300', '河东区', '3');
INSERT INTO `wl_city` VALUES ('371321', '371300', '沂南县', '3');
INSERT INTO `wl_city` VALUES ('371322', '371300', '郯城县', '3');
INSERT INTO `wl_city` VALUES ('371323', '371300', '沂水县', '3');
INSERT INTO `wl_city` VALUES ('371324', '371300', '兰陵县', '3');
INSERT INTO `wl_city` VALUES ('371325', '371300', '费县', '3');
INSERT INTO `wl_city` VALUES ('371326', '371300', '平邑县', '3');
INSERT INTO `wl_city` VALUES ('371327', '371300', '莒南县', '3');
INSERT INTO `wl_city` VALUES ('371328', '371300', '蒙阴县', '3');
INSERT INTO `wl_city` VALUES ('371329', '371300', '临沭县', '3');
INSERT INTO `wl_city` VALUES ('371400', '370000', '德州市', '2');
INSERT INTO `wl_city` VALUES ('371402', '371400', '德城区', '3');
INSERT INTO `wl_city` VALUES ('371403', '371400', '陵城区', '3');
INSERT INTO `wl_city` VALUES ('371422', '371400', '宁津县', '3');
INSERT INTO `wl_city` VALUES ('371423', '371400', '庆云县', '3');
INSERT INTO `wl_city` VALUES ('371424', '371400', '临邑县', '3');
INSERT INTO `wl_city` VALUES ('371425', '371400', '齐河县', '3');
INSERT INTO `wl_city` VALUES ('371426', '371400', '平原县', '3');
INSERT INTO `wl_city` VALUES ('371427', '371400', '夏津县', '3');
INSERT INTO `wl_city` VALUES ('371428', '371400', '武城县', '3');
INSERT INTO `wl_city` VALUES ('371481', '371400', '乐陵市', '3');
INSERT INTO `wl_city` VALUES ('371482', '371400', '禹城市', '3');
INSERT INTO `wl_city` VALUES ('371500', '370000', '聊城市', '2');
INSERT INTO `wl_city` VALUES ('371502', '371500', '东昌府区', '3');
INSERT INTO `wl_city` VALUES ('371521', '371500', '阳谷县', '3');
INSERT INTO `wl_city` VALUES ('371522', '371500', '莘县', '3');
INSERT INTO `wl_city` VALUES ('371523', '371500', '茌平县', '3');
INSERT INTO `wl_city` VALUES ('371524', '371500', '东阿县', '3');
INSERT INTO `wl_city` VALUES ('371525', '371500', '冠县', '3');
INSERT INTO `wl_city` VALUES ('371526', '371500', '高唐县', '3');
INSERT INTO `wl_city` VALUES ('371581', '371500', '临清市', '3');
INSERT INTO `wl_city` VALUES ('371600', '370000', '滨州市', '2');
INSERT INTO `wl_city` VALUES ('371602', '371600', '滨城区', '3');
INSERT INTO `wl_city` VALUES ('371603', '371600', '沾化区', '3');
INSERT INTO `wl_city` VALUES ('371621', '371600', '惠民县', '3');
INSERT INTO `wl_city` VALUES ('371622', '371600', '阳信县', '3');
INSERT INTO `wl_city` VALUES ('371623', '371600', '无棣县', '3');
INSERT INTO `wl_city` VALUES ('371625', '371600', '博兴县', '3');
INSERT INTO `wl_city` VALUES ('371626', '371600', '邹平县', '3');
INSERT INTO `wl_city` VALUES ('371627', '371600', '北海新区', '3');
INSERT INTO `wl_city` VALUES ('371700', '370000', '菏泽市', '2');
INSERT INTO `wl_city` VALUES ('371702', '371700', '牡丹区', '3');
INSERT INTO `wl_city` VALUES ('371721', '371700', '曹县', '3');
INSERT INTO `wl_city` VALUES ('371722', '371700', '单县', '3');
INSERT INTO `wl_city` VALUES ('371723', '371700', '成武县', '3');
INSERT INTO `wl_city` VALUES ('371724', '371700', '巨野县', '3');
INSERT INTO `wl_city` VALUES ('371725', '371700', '郓城县', '3');
INSERT INTO `wl_city` VALUES ('371726', '371700', '鄄城县', '3');
INSERT INTO `wl_city` VALUES ('371727', '371700', '定陶县', '3');
INSERT INTO `wl_city` VALUES ('371728', '371700', '东明县', '3');
INSERT INTO `wl_city` VALUES ('410000', '100000', '河南省', '1');
INSERT INTO `wl_city` VALUES ('410100', '410000', '郑州市', '2');
INSERT INTO `wl_city` VALUES ('410102', '410100', '中原区', '3');
INSERT INTO `wl_city` VALUES ('410103', '410100', '二七区', '3');
INSERT INTO `wl_city` VALUES ('410104', '410100', '管城回族区', '3');
INSERT INTO `wl_city` VALUES ('410105', '410100', '金水区', '3');
INSERT INTO `wl_city` VALUES ('410106', '410100', '上街区', '3');
INSERT INTO `wl_city` VALUES ('410108', '410100', '惠济区', '3');
INSERT INTO `wl_city` VALUES ('410122', '410100', '中牟县', '3');
INSERT INTO `wl_city` VALUES ('410181', '410100', '巩义市', '3');
INSERT INTO `wl_city` VALUES ('410182', '410100', '荥阳市', '3');
INSERT INTO `wl_city` VALUES ('410183', '410100', '新密市', '3');
INSERT INTO `wl_city` VALUES ('410184', '410100', '新郑市', '3');
INSERT INTO `wl_city` VALUES ('410185', '410100', '登封市', '3');
INSERT INTO `wl_city` VALUES ('410200', '410000', '开封市', '2');
INSERT INTO `wl_city` VALUES ('410202', '410200', '龙亭区', '3');
INSERT INTO `wl_city` VALUES ('410203', '410200', '顺河回族区', '3');
INSERT INTO `wl_city` VALUES ('410204', '410200', '鼓楼区', '3');
INSERT INTO `wl_city` VALUES ('410205', '410200', '禹王台区', '3');
INSERT INTO `wl_city` VALUES ('410212', '410200', '祥符区', '3');
INSERT INTO `wl_city` VALUES ('410221', '410200', '杞县', '3');
INSERT INTO `wl_city` VALUES ('410222', '410200', '通许县', '3');
INSERT INTO `wl_city` VALUES ('410223', '410200', '尉氏县', '3');
INSERT INTO `wl_city` VALUES ('410225', '410200', '兰考县', '3');
INSERT INTO `wl_city` VALUES ('410300', '410000', '洛阳市', '2');
INSERT INTO `wl_city` VALUES ('410302', '410300', '老城区', '3');
INSERT INTO `wl_city` VALUES ('410303', '410300', '西工区', '3');
INSERT INTO `wl_city` VALUES ('410304', '410300', '瀍河回族区', '3');
INSERT INTO `wl_city` VALUES ('410305', '410300', '涧西区', '3');
INSERT INTO `wl_city` VALUES ('410306', '410300', '吉利区', '3');
INSERT INTO `wl_city` VALUES ('410311', '410300', '洛龙区', '3');
INSERT INTO `wl_city` VALUES ('410322', '410300', '孟津县', '3');
INSERT INTO `wl_city` VALUES ('410323', '410300', '新安县', '3');
INSERT INTO `wl_city` VALUES ('410324', '410300', '栾川县', '3');
INSERT INTO `wl_city` VALUES ('410325', '410300', '嵩县', '3');
INSERT INTO `wl_city` VALUES ('410326', '410300', '汝阳县', '3');
INSERT INTO `wl_city` VALUES ('410327', '410300', '宜阳县', '3');
INSERT INTO `wl_city` VALUES ('410328', '410300', '洛宁县', '3');
INSERT INTO `wl_city` VALUES ('410329', '410300', '伊川县', '3');
INSERT INTO `wl_city` VALUES ('410381', '410300', '偃师市', '3');
INSERT INTO `wl_city` VALUES ('410400', '410000', '平顶山市', '2');
INSERT INTO `wl_city` VALUES ('410402', '410400', '新华区', '3');
INSERT INTO `wl_city` VALUES ('410403', '410400', '卫东区', '3');
INSERT INTO `wl_city` VALUES ('410404', '410400', '石龙区', '3');
INSERT INTO `wl_city` VALUES ('410411', '410400', '湛河区', '3');
INSERT INTO `wl_city` VALUES ('410421', '410400', '宝丰县', '3');
INSERT INTO `wl_city` VALUES ('410422', '410400', '叶县', '3');
INSERT INTO `wl_city` VALUES ('410423', '410400', '鲁山县', '3');
INSERT INTO `wl_city` VALUES ('410425', '410400', '郏县', '3');
INSERT INTO `wl_city` VALUES ('410481', '410400', '舞钢市', '3');
INSERT INTO `wl_city` VALUES ('410482', '410400', '汝州市', '3');
INSERT INTO `wl_city` VALUES ('410500', '410000', '安阳市', '2');
INSERT INTO `wl_city` VALUES ('410502', '410500', '文峰区', '3');
INSERT INTO `wl_city` VALUES ('410503', '410500', '北关区', '3');
INSERT INTO `wl_city` VALUES ('410505', '410500', '殷都区', '3');
INSERT INTO `wl_city` VALUES ('410506', '410500', '龙安区', '3');
INSERT INTO `wl_city` VALUES ('410522', '410500', '安阳县', '3');
INSERT INTO `wl_city` VALUES ('410523', '410500', '汤阴县', '3');
INSERT INTO `wl_city` VALUES ('410526', '410500', '滑县', '3');
INSERT INTO `wl_city` VALUES ('410527', '410500', '内黄县', '3');
INSERT INTO `wl_city` VALUES ('410581', '410500', '林州市', '3');
INSERT INTO `wl_city` VALUES ('410600', '410000', '鹤壁市', '2');
INSERT INTO `wl_city` VALUES ('410602', '410600', '鹤山区', '3');
INSERT INTO `wl_city` VALUES ('410603', '410600', '山城区', '3');
INSERT INTO `wl_city` VALUES ('410611', '410600', '淇滨区', '3');
INSERT INTO `wl_city` VALUES ('410621', '410600', '浚县', '3');
INSERT INTO `wl_city` VALUES ('410622', '410600', '淇县', '3');
INSERT INTO `wl_city` VALUES ('410700', '410000', '新乡市', '2');
INSERT INTO `wl_city` VALUES ('410702', '410700', '红旗区', '3');
INSERT INTO `wl_city` VALUES ('410703', '410700', '卫滨区', '3');
INSERT INTO `wl_city` VALUES ('410704', '410700', '凤泉区', '3');
INSERT INTO `wl_city` VALUES ('410711', '410700', '牧野区', '3');
INSERT INTO `wl_city` VALUES ('410721', '410700', '新乡县', '3');
INSERT INTO `wl_city` VALUES ('410724', '410700', '获嘉县', '3');
INSERT INTO `wl_city` VALUES ('410725', '410700', '原阳县', '3');
INSERT INTO `wl_city` VALUES ('410726', '410700', '延津县', '3');
INSERT INTO `wl_city` VALUES ('410727', '410700', '封丘县', '3');
INSERT INTO `wl_city` VALUES ('410728', '410700', '长垣县', '3');
INSERT INTO `wl_city` VALUES ('410781', '410700', '卫辉市', '3');
INSERT INTO `wl_city` VALUES ('410782', '410700', '辉县市', '3');
INSERT INTO `wl_city` VALUES ('410800', '410000', '焦作市', '2');
INSERT INTO `wl_city` VALUES ('410802', '410800', '解放区', '3');
INSERT INTO `wl_city` VALUES ('410803', '410800', '中站区', '3');
INSERT INTO `wl_city` VALUES ('410804', '410800', '马村区', '3');
INSERT INTO `wl_city` VALUES ('410811', '410800', '山阳区', '3');
INSERT INTO `wl_city` VALUES ('410821', '410800', '修武县', '3');
INSERT INTO `wl_city` VALUES ('410822', '410800', '博爱县', '3');
INSERT INTO `wl_city` VALUES ('410823', '410800', '武陟县', '3');
INSERT INTO `wl_city` VALUES ('410825', '410800', '温县', '3');
INSERT INTO `wl_city` VALUES ('410882', '410800', '沁阳市', '3');
INSERT INTO `wl_city` VALUES ('410883', '410800', '孟州市', '3');
INSERT INTO `wl_city` VALUES ('410900', '410000', '濮阳市', '2');
INSERT INTO `wl_city` VALUES ('410902', '410900', '华龙区', '3');
INSERT INTO `wl_city` VALUES ('410922', '410900', '清丰县', '3');
INSERT INTO `wl_city` VALUES ('410923', '410900', '南乐县', '3');
INSERT INTO `wl_city` VALUES ('410926', '410900', '范县', '3');
INSERT INTO `wl_city` VALUES ('410927', '410900', '台前县', '3');
INSERT INTO `wl_city` VALUES ('410928', '410900', '濮阳县', '3');
INSERT INTO `wl_city` VALUES ('411000', '410000', '许昌市', '2');
INSERT INTO `wl_city` VALUES ('411002', '411000', '魏都区', '3');
INSERT INTO `wl_city` VALUES ('411023', '411000', '许昌县', '3');
INSERT INTO `wl_city` VALUES ('411024', '411000', '鄢陵县', '3');
INSERT INTO `wl_city` VALUES ('411025', '411000', '襄城县', '3');
INSERT INTO `wl_city` VALUES ('411081', '411000', '禹州市', '3');
INSERT INTO `wl_city` VALUES ('411082', '411000', '长葛市', '3');
INSERT INTO `wl_city` VALUES ('411100', '410000', '漯河市', '2');
INSERT INTO `wl_city` VALUES ('411102', '411100', '源汇区', '3');
INSERT INTO `wl_city` VALUES ('411103', '411100', '郾城区', '3');
INSERT INTO `wl_city` VALUES ('411104', '411100', '召陵区', '3');
INSERT INTO `wl_city` VALUES ('411121', '411100', '舞阳县', '3');
INSERT INTO `wl_city` VALUES ('411122', '411100', '临颍县', '3');
INSERT INTO `wl_city` VALUES ('411200', '410000', '三门峡市', '2');
INSERT INTO `wl_city` VALUES ('411202', '411200', '湖滨区', '3');
INSERT INTO `wl_city` VALUES ('411221', '411200', '渑池县', '3');
INSERT INTO `wl_city` VALUES ('411222', '411200', '陕县', '3');
INSERT INTO `wl_city` VALUES ('411224', '411200', '卢氏县', '3');
INSERT INTO `wl_city` VALUES ('411281', '411200', '义马市', '3');
INSERT INTO `wl_city` VALUES ('411282', '411200', '灵宝市', '3');
INSERT INTO `wl_city` VALUES ('411300', '410000', '南阳市', '2');
INSERT INTO `wl_city` VALUES ('411302', '411300', '宛城区', '3');
INSERT INTO `wl_city` VALUES ('411303', '411300', '卧龙区', '3');
INSERT INTO `wl_city` VALUES ('411321', '411300', '南召县', '3');
INSERT INTO `wl_city` VALUES ('411322', '411300', '方城县', '3');
INSERT INTO `wl_city` VALUES ('411323', '411300', '西峡县', '3');
INSERT INTO `wl_city` VALUES ('411324', '411300', '镇平县', '3');
INSERT INTO `wl_city` VALUES ('411325', '411300', '内乡县', '3');
INSERT INTO `wl_city` VALUES ('411326', '411300', '淅川县', '3');
INSERT INTO `wl_city` VALUES ('411327', '411300', '社旗县', '3');
INSERT INTO `wl_city` VALUES ('411328', '411300', '唐河县', '3');
INSERT INTO `wl_city` VALUES ('411329', '411300', '新野县', '3');
INSERT INTO `wl_city` VALUES ('411330', '411300', '桐柏县', '3');
INSERT INTO `wl_city` VALUES ('411381', '411300', '邓州市', '3');
INSERT INTO `wl_city` VALUES ('411400', '410000', '商丘市', '2');
INSERT INTO `wl_city` VALUES ('411402', '411400', '梁园区', '3');
INSERT INTO `wl_city` VALUES ('411403', '411400', '睢阳区', '3');
INSERT INTO `wl_city` VALUES ('411421', '411400', '民权县', '3');
INSERT INTO `wl_city` VALUES ('411422', '411400', '睢县', '3');
INSERT INTO `wl_city` VALUES ('411423', '411400', '宁陵县', '3');
INSERT INTO `wl_city` VALUES ('411424', '411400', '柘城县', '3');
INSERT INTO `wl_city` VALUES ('411425', '411400', '虞城县', '3');
INSERT INTO `wl_city` VALUES ('411426', '411400', '夏邑县', '3');
INSERT INTO `wl_city` VALUES ('411481', '411400', '永城市', '3');
INSERT INTO `wl_city` VALUES ('411500', '410000', '信阳市', '2');
INSERT INTO `wl_city` VALUES ('411502', '411500', '浉河区', '3');
INSERT INTO `wl_city` VALUES ('411503', '411500', '平桥区', '3');
INSERT INTO `wl_city` VALUES ('411521', '411500', '罗山县', '3');
INSERT INTO `wl_city` VALUES ('411522', '411500', '光山县', '3');
INSERT INTO `wl_city` VALUES ('411523', '411500', '新县', '3');
INSERT INTO `wl_city` VALUES ('411524', '411500', '商城县', '3');
INSERT INTO `wl_city` VALUES ('411525', '411500', '固始县', '3');
INSERT INTO `wl_city` VALUES ('411526', '411500', '潢川县', '3');
INSERT INTO `wl_city` VALUES ('411527', '411500', '淮滨县', '3');
INSERT INTO `wl_city` VALUES ('411528', '411500', '息县', '3');
INSERT INTO `wl_city` VALUES ('411600', '410000', '周口市', '2');
INSERT INTO `wl_city` VALUES ('411602', '411600', '川汇区', '3');
INSERT INTO `wl_city` VALUES ('411621', '411600', '扶沟县', '3');
INSERT INTO `wl_city` VALUES ('411622', '411600', '西华县', '3');
INSERT INTO `wl_city` VALUES ('411623', '411600', '商水县', '3');
INSERT INTO `wl_city` VALUES ('411624', '411600', '沈丘县', '3');
INSERT INTO `wl_city` VALUES ('411625', '411600', '郸城县', '3');
INSERT INTO `wl_city` VALUES ('411626', '411600', '淮阳县', '3');
INSERT INTO `wl_city` VALUES ('411627', '411600', '太康县', '3');
INSERT INTO `wl_city` VALUES ('411628', '411600', '鹿邑县', '3');
INSERT INTO `wl_city` VALUES ('411681', '411600', '项城市', '3');
INSERT INTO `wl_city` VALUES ('411700', '410000', '驻马店市', '2');
INSERT INTO `wl_city` VALUES ('411702', '411700', '驿城区', '3');
INSERT INTO `wl_city` VALUES ('411721', '411700', '西平县', '3');
INSERT INTO `wl_city` VALUES ('411722', '411700', '上蔡县', '3');
INSERT INTO `wl_city` VALUES ('411723', '411700', '平舆县', '3');
INSERT INTO `wl_city` VALUES ('411724', '411700', '正阳县', '3');
INSERT INTO `wl_city` VALUES ('411725', '411700', '确山县', '3');
INSERT INTO `wl_city` VALUES ('411726', '411700', '泌阳县', '3');
INSERT INTO `wl_city` VALUES ('411727', '411700', '汝南县', '3');
INSERT INTO `wl_city` VALUES ('411728', '411700', '遂平县', '3');
INSERT INTO `wl_city` VALUES ('411729', '411700', '新蔡县', '3');
INSERT INTO `wl_city` VALUES ('419000', '410000', '直辖县级', '2');
INSERT INTO `wl_city` VALUES ('419001', '419000', '济源市', '3');
INSERT INTO `wl_city` VALUES ('420000', '100000', '湖北省', '1');
INSERT INTO `wl_city` VALUES ('420100', '420000', '武汉市', '2');
INSERT INTO `wl_city` VALUES ('420102', '420100', '江岸区', '3');
INSERT INTO `wl_city` VALUES ('420103', '420100', '江汉区', '3');
INSERT INTO `wl_city` VALUES ('420104', '420100', '硚口区', '3');
INSERT INTO `wl_city` VALUES ('420105', '420100', '汉阳区', '3');
INSERT INTO `wl_city` VALUES ('420106', '420100', '武昌区', '3');
INSERT INTO `wl_city` VALUES ('420107', '420100', '青山区', '3');
INSERT INTO `wl_city` VALUES ('420111', '420100', '洪山区', '3');
INSERT INTO `wl_city` VALUES ('420112', '420100', '东西湖区', '3');
INSERT INTO `wl_city` VALUES ('420113', '420100', '汉南区', '3');
INSERT INTO `wl_city` VALUES ('420114', '420100', '蔡甸区', '3');
INSERT INTO `wl_city` VALUES ('420115', '420100', '江夏区', '3');
INSERT INTO `wl_city` VALUES ('420116', '420100', '黄陂区', '3');
INSERT INTO `wl_city` VALUES ('420117', '420100', '新洲区', '3');
INSERT INTO `wl_city` VALUES ('420200', '420000', '黄石市', '2');
INSERT INTO `wl_city` VALUES ('420202', '420200', '黄石港区', '3');
INSERT INTO `wl_city` VALUES ('420203', '420200', '西塞山区', '3');
INSERT INTO `wl_city` VALUES ('420204', '420200', '下陆区', '3');
INSERT INTO `wl_city` VALUES ('420205', '420200', '铁山区', '3');
INSERT INTO `wl_city` VALUES ('420222', '420200', '阳新县', '3');
INSERT INTO `wl_city` VALUES ('420281', '420200', '大冶市', '3');
INSERT INTO `wl_city` VALUES ('420300', '420000', '十堰市', '2');
INSERT INTO `wl_city` VALUES ('420302', '420300', '茅箭区', '3');
INSERT INTO `wl_city` VALUES ('420303', '420300', '张湾区', '3');
INSERT INTO `wl_city` VALUES ('420304', '420300', '郧阳区', '3');
INSERT INTO `wl_city` VALUES ('420322', '420300', '郧西县', '3');
INSERT INTO `wl_city` VALUES ('420323', '420300', '竹山县', '3');
INSERT INTO `wl_city` VALUES ('420324', '420300', '竹溪县', '3');
INSERT INTO `wl_city` VALUES ('420325', '420300', '房县', '3');
INSERT INTO `wl_city` VALUES ('420381', '420300', '丹江口市', '3');
INSERT INTO `wl_city` VALUES ('420500', '420000', '宜昌市', '2');
INSERT INTO `wl_city` VALUES ('420502', '420500', '西陵区', '3');
INSERT INTO `wl_city` VALUES ('420503', '420500', '伍家岗区', '3');
INSERT INTO `wl_city` VALUES ('420504', '420500', '点军区', '3');
INSERT INTO `wl_city` VALUES ('420505', '420500', '猇亭区', '3');
INSERT INTO `wl_city` VALUES ('420506', '420500', '夷陵区', '3');
INSERT INTO `wl_city` VALUES ('420525', '420500', '远安县', '3');
INSERT INTO `wl_city` VALUES ('420526', '420500', '兴山县', '3');
INSERT INTO `wl_city` VALUES ('420527', '420500', '秭归县', '3');
INSERT INTO `wl_city` VALUES ('420528', '420500', '长阳土家族自治县', '3');
INSERT INTO `wl_city` VALUES ('420529', '420500', '五峰土家族自治县', '3');
INSERT INTO `wl_city` VALUES ('420581', '420500', '宜都市', '3');
INSERT INTO `wl_city` VALUES ('420582', '420500', '当阳市', '3');
INSERT INTO `wl_city` VALUES ('420583', '420500', '枝江市', '3');
INSERT INTO `wl_city` VALUES ('420600', '420000', '襄阳市', '2');
INSERT INTO `wl_city` VALUES ('420602', '420600', '襄城区', '3');
INSERT INTO `wl_city` VALUES ('420606', '420600', '樊城区', '3');
INSERT INTO `wl_city` VALUES ('420607', '420600', '襄州区', '3');
INSERT INTO `wl_city` VALUES ('420624', '420600', '南漳县', '3');
INSERT INTO `wl_city` VALUES ('420625', '420600', '谷城县', '3');
INSERT INTO `wl_city` VALUES ('420626', '420600', '保康县', '3');
INSERT INTO `wl_city` VALUES ('420682', '420600', '老河口市', '3');
INSERT INTO `wl_city` VALUES ('420683', '420600', '枣阳市', '3');
INSERT INTO `wl_city` VALUES ('420684', '420600', '宜城市', '3');
INSERT INTO `wl_city` VALUES ('420700', '420000', '鄂州市', '2');
INSERT INTO `wl_city` VALUES ('420702', '420700', '梁子湖区', '3');
INSERT INTO `wl_city` VALUES ('420703', '420700', '华容区', '3');
INSERT INTO `wl_city` VALUES ('420704', '420700', '鄂城区', '3');
INSERT INTO `wl_city` VALUES ('420800', '420000', '荆门市', '2');
INSERT INTO `wl_city` VALUES ('420802', '420800', '东宝区', '3');
INSERT INTO `wl_city` VALUES ('420804', '420800', '掇刀区', '3');
INSERT INTO `wl_city` VALUES ('420821', '420800', '京山县', '3');
INSERT INTO `wl_city` VALUES ('420822', '420800', '沙洋县', '3');
INSERT INTO `wl_city` VALUES ('420881', '420800', '钟祥市', '3');
INSERT INTO `wl_city` VALUES ('420900', '420000', '孝感市', '2');
INSERT INTO `wl_city` VALUES ('420902', '420900', '孝南区', '3');
INSERT INTO `wl_city` VALUES ('420921', '420900', '孝昌县', '3');
INSERT INTO `wl_city` VALUES ('420922', '420900', '大悟县', '3');
INSERT INTO `wl_city` VALUES ('420923', '420900', '云梦县', '3');
INSERT INTO `wl_city` VALUES ('420981', '420900', '应城市', '3');
INSERT INTO `wl_city` VALUES ('420982', '420900', '安陆市', '3');
INSERT INTO `wl_city` VALUES ('420984', '420900', '汉川市', '3');
INSERT INTO `wl_city` VALUES ('421000', '420000', '荆州市', '2');
INSERT INTO `wl_city` VALUES ('421002', '421000', '沙市区', '3');
INSERT INTO `wl_city` VALUES ('421003', '421000', '荆州区', '3');
INSERT INTO `wl_city` VALUES ('421022', '421000', '公安县', '3');
INSERT INTO `wl_city` VALUES ('421023', '421000', '监利县', '3');
INSERT INTO `wl_city` VALUES ('421024', '421000', '江陵县', '3');
INSERT INTO `wl_city` VALUES ('421081', '421000', '石首市', '3');
INSERT INTO `wl_city` VALUES ('421083', '421000', '洪湖市', '3');
INSERT INTO `wl_city` VALUES ('421087', '421000', '松滋市', '3');
INSERT INTO `wl_city` VALUES ('421100', '420000', '黄冈市', '2');
INSERT INTO `wl_city` VALUES ('421102', '421100', '黄州区', '3');
INSERT INTO `wl_city` VALUES ('421121', '421100', '团风县', '3');
INSERT INTO `wl_city` VALUES ('421122', '421100', '红安县', '3');
INSERT INTO `wl_city` VALUES ('421123', '421100', '罗田县', '3');
INSERT INTO `wl_city` VALUES ('421124', '421100', '英山县', '3');
INSERT INTO `wl_city` VALUES ('421125', '421100', '浠水县', '3');
INSERT INTO `wl_city` VALUES ('421126', '421100', '蕲春县', '3');
INSERT INTO `wl_city` VALUES ('421127', '421100', '黄梅县', '3');
INSERT INTO `wl_city` VALUES ('421181', '421100', '麻城市', '3');
INSERT INTO `wl_city` VALUES ('421182', '421100', '武穴市', '3');
INSERT INTO `wl_city` VALUES ('421200', '420000', '咸宁市', '2');
INSERT INTO `wl_city` VALUES ('421202', '421200', '咸安区', '3');
INSERT INTO `wl_city` VALUES ('421221', '421200', '嘉鱼县', '3');
INSERT INTO `wl_city` VALUES ('421222', '421200', '通城县', '3');
INSERT INTO `wl_city` VALUES ('421223', '421200', '崇阳县', '3');
INSERT INTO `wl_city` VALUES ('421224', '421200', '通山县', '3');
INSERT INTO `wl_city` VALUES ('421281', '421200', '赤壁市', '3');
INSERT INTO `wl_city` VALUES ('421300', '420000', '随州市', '2');
INSERT INTO `wl_city` VALUES ('421303', '421300', '曾都区', '3');
INSERT INTO `wl_city` VALUES ('421321', '421300', '随县', '3');
INSERT INTO `wl_city` VALUES ('421381', '421300', '广水市', '3');
INSERT INTO `wl_city` VALUES ('422800', '420000', '恩施土家族苗族自治州', '2');
INSERT INTO `wl_city` VALUES ('422801', '422800', '恩施市', '3');
INSERT INTO `wl_city` VALUES ('422802', '422800', '利川市', '3');
INSERT INTO `wl_city` VALUES ('422822', '422800', '建始县', '3');
INSERT INTO `wl_city` VALUES ('422823', '422800', '巴东县', '3');
INSERT INTO `wl_city` VALUES ('422825', '422800', '宣恩县', '3');
INSERT INTO `wl_city` VALUES ('422826', '422800', '咸丰县', '3');
INSERT INTO `wl_city` VALUES ('422827', '422800', '来凤县', '3');
INSERT INTO `wl_city` VALUES ('422828', '422800', '鹤峰县', '3');
INSERT INTO `wl_city` VALUES ('429000', '420000', '直辖县级', '2');
INSERT INTO `wl_city` VALUES ('429004', '429000', '仙桃市', '3');
INSERT INTO `wl_city` VALUES ('429005', '429000', '潜江市', '3');
INSERT INTO `wl_city` VALUES ('429006', '429000', '天门市', '3');
INSERT INTO `wl_city` VALUES ('429021', '429000', '神农架林区', '3');
INSERT INTO `wl_city` VALUES ('430000', '100000', '湖南省', '1');
INSERT INTO `wl_city` VALUES ('430100', '430000', '长沙市', '2');
INSERT INTO `wl_city` VALUES ('430102', '430100', '芙蓉区', '3');
INSERT INTO `wl_city` VALUES ('430103', '430100', '天心区', '3');
INSERT INTO `wl_city` VALUES ('430104', '430100', '岳麓区', '3');
INSERT INTO `wl_city` VALUES ('430105', '430100', '开福区', '3');
INSERT INTO `wl_city` VALUES ('430111', '430100', '雨花区', '3');
INSERT INTO `wl_city` VALUES ('430112', '430100', '望城区', '3');
INSERT INTO `wl_city` VALUES ('430121', '430100', '长沙县', '3');
INSERT INTO `wl_city` VALUES ('430124', '430100', '宁乡县', '3');
INSERT INTO `wl_city` VALUES ('430181', '430100', '浏阳市', '3');
INSERT INTO `wl_city` VALUES ('430200', '430000', '株洲市', '2');
INSERT INTO `wl_city` VALUES ('430202', '430200', '荷塘区', '3');
INSERT INTO `wl_city` VALUES ('430203', '430200', '芦淞区', '3');
INSERT INTO `wl_city` VALUES ('430204', '430200', '石峰区', '3');
INSERT INTO `wl_city` VALUES ('430211', '430200', '天元区', '3');
INSERT INTO `wl_city` VALUES ('430221', '430200', '株洲县', '3');
INSERT INTO `wl_city` VALUES ('430223', '430200', '攸县', '3');
INSERT INTO `wl_city` VALUES ('430224', '430200', '茶陵县', '3');
INSERT INTO `wl_city` VALUES ('430225', '430200', '炎陵县', '3');
INSERT INTO `wl_city` VALUES ('430281', '430200', '醴陵市', '3');
INSERT INTO `wl_city` VALUES ('430300', '430000', '湘潭市', '2');
INSERT INTO `wl_city` VALUES ('430302', '430300', '雨湖区', '3');
INSERT INTO `wl_city` VALUES ('430304', '430300', '岳塘区', '3');
INSERT INTO `wl_city` VALUES ('430321', '430300', '湘潭县', '3');
INSERT INTO `wl_city` VALUES ('430381', '430300', '湘乡市', '3');
INSERT INTO `wl_city` VALUES ('430382', '430300', '韶山市', '3');
INSERT INTO `wl_city` VALUES ('430400', '430000', '衡阳市', '2');
INSERT INTO `wl_city` VALUES ('430405', '430400', '珠晖区', '3');
INSERT INTO `wl_city` VALUES ('430406', '430400', '雁峰区', '3');
INSERT INTO `wl_city` VALUES ('430407', '430400', '石鼓区', '3');
INSERT INTO `wl_city` VALUES ('430408', '430400', '蒸湘区', '3');
INSERT INTO `wl_city` VALUES ('430412', '430400', '南岳区', '3');
INSERT INTO `wl_city` VALUES ('430421', '430400', '衡阳县', '3');
INSERT INTO `wl_city` VALUES ('430422', '430400', '衡南县', '3');
INSERT INTO `wl_city` VALUES ('430423', '430400', '衡山县', '3');
INSERT INTO `wl_city` VALUES ('430424', '430400', '衡东县', '3');
INSERT INTO `wl_city` VALUES ('430426', '430400', '祁东县', '3');
INSERT INTO `wl_city` VALUES ('430481', '430400', '耒阳市', '3');
INSERT INTO `wl_city` VALUES ('430482', '430400', '常宁市', '3');
INSERT INTO `wl_city` VALUES ('430500', '430000', '邵阳市', '2');
INSERT INTO `wl_city` VALUES ('430502', '430500', '双清区', '3');
INSERT INTO `wl_city` VALUES ('430503', '430500', '大祥区', '3');
INSERT INTO `wl_city` VALUES ('430511', '430500', '北塔区', '3');
INSERT INTO `wl_city` VALUES ('430521', '430500', '邵东县', '3');
INSERT INTO `wl_city` VALUES ('430522', '430500', '新邵县', '3');
INSERT INTO `wl_city` VALUES ('430523', '430500', '邵阳县', '3');
INSERT INTO `wl_city` VALUES ('430524', '430500', '隆回县', '3');
INSERT INTO `wl_city` VALUES ('430525', '430500', '洞口县', '3');
INSERT INTO `wl_city` VALUES ('430527', '430500', '绥宁县', '3');
INSERT INTO `wl_city` VALUES ('430528', '430500', '新宁县', '3');
INSERT INTO `wl_city` VALUES ('430529', '430500', '城步苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('430581', '430500', '武冈市', '3');
INSERT INTO `wl_city` VALUES ('430600', '430000', '岳阳市', '2');
INSERT INTO `wl_city` VALUES ('430602', '430600', '岳阳楼区', '3');
INSERT INTO `wl_city` VALUES ('430603', '430600', '云溪区', '3');
INSERT INTO `wl_city` VALUES ('430611', '430600', '君山区', '3');
INSERT INTO `wl_city` VALUES ('430621', '430600', '岳阳县', '3');
INSERT INTO `wl_city` VALUES ('430623', '430600', '华容县', '3');
INSERT INTO `wl_city` VALUES ('430624', '430600', '湘阴县', '3');
INSERT INTO `wl_city` VALUES ('430626', '430600', '平江县', '3');
INSERT INTO `wl_city` VALUES ('430681', '430600', '汨罗市', '3');
INSERT INTO `wl_city` VALUES ('430682', '430600', '临湘市', '3');
INSERT INTO `wl_city` VALUES ('430700', '430000', '常德市', '2');
INSERT INTO `wl_city` VALUES ('430702', '430700', '武陵区', '3');
INSERT INTO `wl_city` VALUES ('430703', '430700', '鼎城区', '3');
INSERT INTO `wl_city` VALUES ('430721', '430700', '安乡县', '3');
INSERT INTO `wl_city` VALUES ('430722', '430700', '汉寿县', '3');
INSERT INTO `wl_city` VALUES ('430723', '430700', '澧县', '3');
INSERT INTO `wl_city` VALUES ('430724', '430700', '临澧县', '3');
INSERT INTO `wl_city` VALUES ('430725', '430700', '桃源县', '3');
INSERT INTO `wl_city` VALUES ('430726', '430700', '石门县', '3');
INSERT INTO `wl_city` VALUES ('430781', '430700', '津市市', '3');
INSERT INTO `wl_city` VALUES ('430800', '430000', '张家界市', '2');
INSERT INTO `wl_city` VALUES ('430802', '430800', '永定区', '3');
INSERT INTO `wl_city` VALUES ('430811', '430800', '武陵源区', '3');
INSERT INTO `wl_city` VALUES ('430821', '430800', '慈利县', '3');
INSERT INTO `wl_city` VALUES ('430822', '430800', '桑植县', '3');
INSERT INTO `wl_city` VALUES ('430900', '430000', '益阳市', '2');
INSERT INTO `wl_city` VALUES ('430902', '430900', '资阳区', '3');
INSERT INTO `wl_city` VALUES ('430903', '430900', '赫山区', '3');
INSERT INTO `wl_city` VALUES ('430921', '430900', '南县', '3');
INSERT INTO `wl_city` VALUES ('430922', '430900', '桃江县', '3');
INSERT INTO `wl_city` VALUES ('430923', '430900', '安化县', '3');
INSERT INTO `wl_city` VALUES ('430981', '430900', '沅江市', '3');
INSERT INTO `wl_city` VALUES ('431000', '430000', '郴州市', '2');
INSERT INTO `wl_city` VALUES ('431002', '431000', '北湖区', '3');
INSERT INTO `wl_city` VALUES ('431003', '431000', '苏仙区', '3');
INSERT INTO `wl_city` VALUES ('431021', '431000', '桂阳县', '3');
INSERT INTO `wl_city` VALUES ('431022', '431000', '宜章县', '3');
INSERT INTO `wl_city` VALUES ('431023', '431000', '永兴县', '3');
INSERT INTO `wl_city` VALUES ('431024', '431000', '嘉禾县', '3');
INSERT INTO `wl_city` VALUES ('431025', '431000', '临武县', '3');
INSERT INTO `wl_city` VALUES ('431026', '431000', '汝城县', '3');
INSERT INTO `wl_city` VALUES ('431027', '431000', '桂东县', '3');
INSERT INTO `wl_city` VALUES ('431028', '431000', '安仁县', '3');
INSERT INTO `wl_city` VALUES ('431081', '431000', '资兴市', '3');
INSERT INTO `wl_city` VALUES ('431100', '430000', '永州市', '2');
INSERT INTO `wl_city` VALUES ('431102', '431100', '零陵区', '3');
INSERT INTO `wl_city` VALUES ('431103', '431100', '冷水滩区', '3');
INSERT INTO `wl_city` VALUES ('431121', '431100', '祁阳县', '3');
INSERT INTO `wl_city` VALUES ('431122', '431100', '东安县', '3');
INSERT INTO `wl_city` VALUES ('431123', '431100', '双牌县', '3');
INSERT INTO `wl_city` VALUES ('431124', '431100', '道县', '3');
INSERT INTO `wl_city` VALUES ('431125', '431100', '江永县', '3');
INSERT INTO `wl_city` VALUES ('431126', '431100', '宁远县', '3');
INSERT INTO `wl_city` VALUES ('431127', '431100', '蓝山县', '3');
INSERT INTO `wl_city` VALUES ('431128', '431100', '新田县', '3');
INSERT INTO `wl_city` VALUES ('431129', '431100', '江华瑶族自治县', '3');
INSERT INTO `wl_city` VALUES ('431200', '430000', '怀化市', '2');
INSERT INTO `wl_city` VALUES ('431202', '431200', '鹤城区', '3');
INSERT INTO `wl_city` VALUES ('431221', '431200', '中方县', '3');
INSERT INTO `wl_city` VALUES ('431222', '431200', '沅陵县', '3');
INSERT INTO `wl_city` VALUES ('431223', '431200', '辰溪县', '3');
INSERT INTO `wl_city` VALUES ('431224', '431200', '溆浦县', '3');
INSERT INTO `wl_city` VALUES ('431225', '431200', '会同县', '3');
INSERT INTO `wl_city` VALUES ('431226', '431200', '麻阳苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('431227', '431200', '新晃侗族自治县', '3');
INSERT INTO `wl_city` VALUES ('431228', '431200', '芷江侗族自治县', '3');
INSERT INTO `wl_city` VALUES ('431229', '431200', '靖州苗族侗族自治县', '3');
INSERT INTO `wl_city` VALUES ('431230', '431200', '通道侗族自治县', '3');
INSERT INTO `wl_city` VALUES ('431281', '431200', '洪江市', '3');
INSERT INTO `wl_city` VALUES ('431300', '430000', '娄底市', '2');
INSERT INTO `wl_city` VALUES ('431302', '431300', '娄星区', '3');
INSERT INTO `wl_city` VALUES ('431321', '431300', '双峰县', '3');
INSERT INTO `wl_city` VALUES ('431322', '431300', '新化县', '3');
INSERT INTO `wl_city` VALUES ('431381', '431300', '冷水江市', '3');
INSERT INTO `wl_city` VALUES ('431382', '431300', '涟源市', '3');
INSERT INTO `wl_city` VALUES ('433100', '430000', '湘西土家族苗族自治州', '2');
INSERT INTO `wl_city` VALUES ('433101', '433100', '吉首市', '3');
INSERT INTO `wl_city` VALUES ('433122', '433100', '泸溪县', '3');
INSERT INTO `wl_city` VALUES ('433123', '433100', '凤凰县', '3');
INSERT INTO `wl_city` VALUES ('433124', '433100', '花垣县', '3');
INSERT INTO `wl_city` VALUES ('433125', '433100', '保靖县', '3');
INSERT INTO `wl_city` VALUES ('433126', '433100', '古丈县', '3');
INSERT INTO `wl_city` VALUES ('433127', '433100', '永顺县', '3');
INSERT INTO `wl_city` VALUES ('433130', '433100', '龙山县', '3');
INSERT INTO `wl_city` VALUES ('440000', '100000', '广东省', '1');
INSERT INTO `wl_city` VALUES ('440100', '440000', '广州市', '2');
INSERT INTO `wl_city` VALUES ('440103', '440100', '荔湾区', '3');
INSERT INTO `wl_city` VALUES ('440104', '440100', '越秀区', '3');
INSERT INTO `wl_city` VALUES ('440105', '440100', '海珠区', '3');
INSERT INTO `wl_city` VALUES ('440106', '440100', '天河区', '3');
INSERT INTO `wl_city` VALUES ('440111', '440100', '白云区', '3');
INSERT INTO `wl_city` VALUES ('440112', '440100', '黄埔区', '3');
INSERT INTO `wl_city` VALUES ('440113', '440100', '番禺区', '3');
INSERT INTO `wl_city` VALUES ('440114', '440100', '花都区', '3');
INSERT INTO `wl_city` VALUES ('440115', '440100', '南沙区', '3');
INSERT INTO `wl_city` VALUES ('440117', '440100', '从化区', '3');
INSERT INTO `wl_city` VALUES ('440118', '440100', '增城区', '3');
INSERT INTO `wl_city` VALUES ('440200', '440000', '韶关市', '2');
INSERT INTO `wl_city` VALUES ('440203', '440200', '武江区', '3');
INSERT INTO `wl_city` VALUES ('440204', '440200', '浈江区', '3');
INSERT INTO `wl_city` VALUES ('440205', '440200', '曲江区', '3');
INSERT INTO `wl_city` VALUES ('440222', '440200', '始兴县', '3');
INSERT INTO `wl_city` VALUES ('440224', '440200', '仁化县', '3');
INSERT INTO `wl_city` VALUES ('440229', '440200', '翁源县', '3');
INSERT INTO `wl_city` VALUES ('440232', '440200', '乳源瑶族自治县', '3');
INSERT INTO `wl_city` VALUES ('440233', '440200', '新丰县', '3');
INSERT INTO `wl_city` VALUES ('440281', '440200', '乐昌市', '3');
INSERT INTO `wl_city` VALUES ('440282', '440200', '南雄市', '3');
INSERT INTO `wl_city` VALUES ('440300', '440000', '深圳市', '2');
INSERT INTO `wl_city` VALUES ('440303', '440300', '罗湖区', '3');
INSERT INTO `wl_city` VALUES ('440304', '440300', '福田区', '3');
INSERT INTO `wl_city` VALUES ('440305', '440300', '南山区', '3');
INSERT INTO `wl_city` VALUES ('440306', '440300', '宝安区', '3');
INSERT INTO `wl_city` VALUES ('440307', '440300', '龙岗区', '3');
INSERT INTO `wl_city` VALUES ('440308', '440300', '盐田区', '3');
INSERT INTO `wl_city` VALUES ('440309', '440300', '光明新区', '3');
INSERT INTO `wl_city` VALUES ('440310', '440300', '坪山新区', '3');
INSERT INTO `wl_city` VALUES ('440311', '440300', '大鹏新区', '3');
INSERT INTO `wl_city` VALUES ('440312', '440300', '龙华新区', '3');
INSERT INTO `wl_city` VALUES ('440400', '440000', '珠海市', '2');
INSERT INTO `wl_city` VALUES ('440402', '440400', '香洲区', '3');
INSERT INTO `wl_city` VALUES ('440403', '440400', '斗门区', '3');
INSERT INTO `wl_city` VALUES ('440404', '440400', '金湾区', '3');
INSERT INTO `wl_city` VALUES ('440500', '440000', '汕头市', '2');
INSERT INTO `wl_city` VALUES ('440507', '440500', '龙湖区', '3');
INSERT INTO `wl_city` VALUES ('440511', '440500', '金平区', '3');
INSERT INTO `wl_city` VALUES ('440512', '440500', '濠江区', '3');
INSERT INTO `wl_city` VALUES ('440513', '440500', '潮阳区', '3');
INSERT INTO `wl_city` VALUES ('440514', '440500', '潮南区', '3');
INSERT INTO `wl_city` VALUES ('440515', '440500', '澄海区', '3');
INSERT INTO `wl_city` VALUES ('440523', '440500', '南澳县', '3');
INSERT INTO `wl_city` VALUES ('440600', '440000', '佛山市', '2');
INSERT INTO `wl_city` VALUES ('440604', '440600', '禅城区', '3');
INSERT INTO `wl_city` VALUES ('440605', '440600', '南海区', '3');
INSERT INTO `wl_city` VALUES ('440606', '440600', '顺德区', '3');
INSERT INTO `wl_city` VALUES ('440607', '440600', '三水区', '3');
INSERT INTO `wl_city` VALUES ('440608', '440600', '高明区', '3');
INSERT INTO `wl_city` VALUES ('440700', '440000', '江门市', '2');
INSERT INTO `wl_city` VALUES ('440703', '440700', '蓬江区', '3');
INSERT INTO `wl_city` VALUES ('440704', '440700', '江海区', '3');
INSERT INTO `wl_city` VALUES ('440705', '440700', '新会区', '3');
INSERT INTO `wl_city` VALUES ('440781', '440700', '台山市', '3');
INSERT INTO `wl_city` VALUES ('440783', '440700', '开平市', '3');
INSERT INTO `wl_city` VALUES ('440784', '440700', '鹤山市', '3');
INSERT INTO `wl_city` VALUES ('440785', '440700', '恩平市', '3');
INSERT INTO `wl_city` VALUES ('440800', '440000', '湛江市', '2');
INSERT INTO `wl_city` VALUES ('440802', '440800', '赤坎区', '3');
INSERT INTO `wl_city` VALUES ('440803', '440800', '霞山区', '3');
INSERT INTO `wl_city` VALUES ('440804', '440800', '坡头区', '3');
INSERT INTO `wl_city` VALUES ('440811', '440800', '麻章区', '3');
INSERT INTO `wl_city` VALUES ('440823', '440800', '遂溪县', '3');
INSERT INTO `wl_city` VALUES ('440825', '440800', '徐闻县', '3');
INSERT INTO `wl_city` VALUES ('440881', '440800', '廉江市', '3');
INSERT INTO `wl_city` VALUES ('440882', '440800', '雷州市', '3');
INSERT INTO `wl_city` VALUES ('440883', '440800', '吴川市', '3');
INSERT INTO `wl_city` VALUES ('440900', '440000', '茂名市', '2');
INSERT INTO `wl_city` VALUES ('440902', '440900', '茂南区', '3');
INSERT INTO `wl_city` VALUES ('440904', '440900', '电白区', '3');
INSERT INTO `wl_city` VALUES ('440981', '440900', '高州市', '3');
INSERT INTO `wl_city` VALUES ('440982', '440900', '化州市', '3');
INSERT INTO `wl_city` VALUES ('440983', '440900', '信宜市', '3');
INSERT INTO `wl_city` VALUES ('441200', '440000', '肇庆市', '2');
INSERT INTO `wl_city` VALUES ('441202', '441200', '端州区', '3');
INSERT INTO `wl_city` VALUES ('441203', '441200', '鼎湖区', '3');
INSERT INTO `wl_city` VALUES ('441223', '441200', '广宁县', '3');
INSERT INTO `wl_city` VALUES ('441224', '441200', '怀集县', '3');
INSERT INTO `wl_city` VALUES ('441225', '441200', '封开县', '3');
INSERT INTO `wl_city` VALUES ('441226', '441200', '德庆县', '3');
INSERT INTO `wl_city` VALUES ('441283', '441200', '高要市', '3');
INSERT INTO `wl_city` VALUES ('441284', '441200', '四会市', '3');
INSERT INTO `wl_city` VALUES ('441300', '440000', '惠州市', '2');
INSERT INTO `wl_city` VALUES ('441302', '441300', '惠城区', '3');
INSERT INTO `wl_city` VALUES ('441303', '441300', '惠阳区', '3');
INSERT INTO `wl_city` VALUES ('441322', '441300', '博罗县', '3');
INSERT INTO `wl_city` VALUES ('441323', '441300', '惠东县', '3');
INSERT INTO `wl_city` VALUES ('441324', '441300', '龙门县', '3');
INSERT INTO `wl_city` VALUES ('441400', '440000', '梅州市', '2');
INSERT INTO `wl_city` VALUES ('441402', '441400', '梅江区', '3');
INSERT INTO `wl_city` VALUES ('441403', '441400', '梅县区', '3');
INSERT INTO `wl_city` VALUES ('441422', '441400', '大埔县', '3');
INSERT INTO `wl_city` VALUES ('441423', '441400', '丰顺县', '3');
INSERT INTO `wl_city` VALUES ('441424', '441400', '五华县', '3');
INSERT INTO `wl_city` VALUES ('441426', '441400', '平远县', '3');
INSERT INTO `wl_city` VALUES ('441427', '441400', '蕉岭县', '3');
INSERT INTO `wl_city` VALUES ('441481', '441400', '兴宁市', '3');
INSERT INTO `wl_city` VALUES ('441500', '440000', '汕尾市', '2');
INSERT INTO `wl_city` VALUES ('441502', '441500', '城区', '3');
INSERT INTO `wl_city` VALUES ('441521', '441500', '海丰县', '3');
INSERT INTO `wl_city` VALUES ('441523', '441500', '陆河县', '3');
INSERT INTO `wl_city` VALUES ('441581', '441500', '陆丰市', '3');
INSERT INTO `wl_city` VALUES ('441600', '440000', '河源市', '2');
INSERT INTO `wl_city` VALUES ('441602', '441600', '源城区', '3');
INSERT INTO `wl_city` VALUES ('441621', '441600', '紫金县', '3');
INSERT INTO `wl_city` VALUES ('441622', '441600', '龙川县', '3');
INSERT INTO `wl_city` VALUES ('441623', '441600', '连平县', '3');
INSERT INTO `wl_city` VALUES ('441624', '441600', '和平县', '3');
INSERT INTO `wl_city` VALUES ('441625', '441600', '东源县', '3');
INSERT INTO `wl_city` VALUES ('441700', '440000', '阳江市', '2');
INSERT INTO `wl_city` VALUES ('441702', '441700', '江城区', '3');
INSERT INTO `wl_city` VALUES ('441704', '441700', '阳东区', '3');
INSERT INTO `wl_city` VALUES ('441721', '441700', '阳西县', '3');
INSERT INTO `wl_city` VALUES ('441781', '441700', '阳春市', '3');
INSERT INTO `wl_city` VALUES ('441800', '440000', '清远市', '2');
INSERT INTO `wl_city` VALUES ('441802', '441800', '清城区', '3');
INSERT INTO `wl_city` VALUES ('441803', '441800', '清新区', '3');
INSERT INTO `wl_city` VALUES ('441821', '441800', '佛冈县', '3');
INSERT INTO `wl_city` VALUES ('441823', '441800', '阳山县', '3');
INSERT INTO `wl_city` VALUES ('441825', '441800', '连山壮族瑶族自治县', '3');
INSERT INTO `wl_city` VALUES ('441826', '441800', '连南瑶族自治县', '3');
INSERT INTO `wl_city` VALUES ('441881', '441800', '英德市', '3');
INSERT INTO `wl_city` VALUES ('441882', '441800', '连州市', '3');
INSERT INTO `wl_city` VALUES ('441900', '440000', '东莞市', '2');
INSERT INTO `wl_city` VALUES ('441901', '441900', '莞城区', '3');
INSERT INTO `wl_city` VALUES ('441902', '441900', '南城区', '3');
INSERT INTO `wl_city` VALUES ('441904', '441900', '万江区', '3');
INSERT INTO `wl_city` VALUES ('441905', '441900', '石碣镇', '3');
INSERT INTO `wl_city` VALUES ('441906', '441900', '石龙镇', '3');
INSERT INTO `wl_city` VALUES ('441907', '441900', '茶山镇', '3');
INSERT INTO `wl_city` VALUES ('441908', '441900', '石排镇', '3');
INSERT INTO `wl_city` VALUES ('441909', '441900', '企石镇', '3');
INSERT INTO `wl_city` VALUES ('441910', '441900', '横沥镇', '3');
INSERT INTO `wl_city` VALUES ('441911', '441900', '桥头镇', '3');
INSERT INTO `wl_city` VALUES ('441912', '441900', '谢岗镇', '3');
INSERT INTO `wl_city` VALUES ('441913', '441900', '东坑镇', '3');
INSERT INTO `wl_city` VALUES ('441914', '441900', '常平镇', '3');
INSERT INTO `wl_city` VALUES ('441915', '441900', '寮步镇', '3');
INSERT INTO `wl_city` VALUES ('441916', '441900', '大朗镇', '3');
INSERT INTO `wl_city` VALUES ('441917', '441900', '麻涌镇', '3');
INSERT INTO `wl_city` VALUES ('441918', '441900', '中堂镇', '3');
INSERT INTO `wl_city` VALUES ('441919', '441900', '高埗镇', '3');
INSERT INTO `wl_city` VALUES ('441920', '441900', '樟木头镇', '3');
INSERT INTO `wl_city` VALUES ('441921', '441900', '大岭山镇', '3');
INSERT INTO `wl_city` VALUES ('441922', '441900', '望牛墩镇', '3');
INSERT INTO `wl_city` VALUES ('441923', '441900', '黄江镇', '3');
INSERT INTO `wl_city` VALUES ('441924', '441900', '洪梅镇', '3');
INSERT INTO `wl_city` VALUES ('441925', '441900', '清溪镇', '3');
INSERT INTO `wl_city` VALUES ('441926', '441900', '沙田镇', '3');
INSERT INTO `wl_city` VALUES ('441927', '441900', '道滘镇', '3');
INSERT INTO `wl_city` VALUES ('441928', '441900', '塘厦镇', '3');
INSERT INTO `wl_city` VALUES ('441929', '441900', '虎门镇', '3');
INSERT INTO `wl_city` VALUES ('441930', '441900', '厚街镇', '3');
INSERT INTO `wl_city` VALUES ('441931', '441900', '凤岗镇', '3');
INSERT INTO `wl_city` VALUES ('441932', '441900', '长安镇', '3');
INSERT INTO `wl_city` VALUES ('442000', '440000', '中山市', '2');
INSERT INTO `wl_city` VALUES ('442001', '442000', '石岐区', '3');
INSERT INTO `wl_city` VALUES ('442004', '442000', '南区', '3');
INSERT INTO `wl_city` VALUES ('442005', '442000', '五桂山区', '3');
INSERT INTO `wl_city` VALUES ('442006', '442000', '火炬开发区', '3');
INSERT INTO `wl_city` VALUES ('442007', '442000', '黄圃镇', '3');
INSERT INTO `wl_city` VALUES ('442008', '442000', '南头镇', '3');
INSERT INTO `wl_city` VALUES ('442009', '442000', '东凤镇', '3');
INSERT INTO `wl_city` VALUES ('442010', '442000', '阜沙镇', '3');
INSERT INTO `wl_city` VALUES ('442011', '442000', '小榄镇', '3');
INSERT INTO `wl_city` VALUES ('442012', '442000', '东升镇', '3');
INSERT INTO `wl_city` VALUES ('442013', '442000', '古镇镇', '3');
INSERT INTO `wl_city` VALUES ('442014', '442000', '横栏镇', '3');
INSERT INTO `wl_city` VALUES ('442015', '442000', '三角镇', '3');
INSERT INTO `wl_city` VALUES ('442016', '442000', '民众镇', '3');
INSERT INTO `wl_city` VALUES ('442017', '442000', '南朗镇', '3');
INSERT INTO `wl_city` VALUES ('442018', '442000', '港口镇', '3');
INSERT INTO `wl_city` VALUES ('442019', '442000', '大涌镇', '3');
INSERT INTO `wl_city` VALUES ('442020', '442000', '沙溪镇', '3');
INSERT INTO `wl_city` VALUES ('442021', '442000', '三乡镇', '3');
INSERT INTO `wl_city` VALUES ('442022', '442000', '板芙镇', '3');
INSERT INTO `wl_city` VALUES ('442023', '442000', '神湾镇', '3');
INSERT INTO `wl_city` VALUES ('442024', '442000', '坦洲镇', '3');
INSERT INTO `wl_city` VALUES ('445100', '440000', '潮州市', '2');
INSERT INTO `wl_city` VALUES ('445102', '445100', '湘桥区', '3');
INSERT INTO `wl_city` VALUES ('445103', '445100', '潮安区', '3');
INSERT INTO `wl_city` VALUES ('445122', '445100', '饶平县', '3');
INSERT INTO `wl_city` VALUES ('445200', '440000', '揭阳市', '2');
INSERT INTO `wl_city` VALUES ('445202', '445200', '榕城区', '3');
INSERT INTO `wl_city` VALUES ('445203', '445200', '揭东区', '3');
INSERT INTO `wl_city` VALUES ('445222', '445200', '揭西县', '3');
INSERT INTO `wl_city` VALUES ('445224', '445200', '惠来县', '3');
INSERT INTO `wl_city` VALUES ('445281', '445200', '普宁市', '3');
INSERT INTO `wl_city` VALUES ('445300', '440000', '云浮市', '2');
INSERT INTO `wl_city` VALUES ('445302', '445300', '云城区', '3');
INSERT INTO `wl_city` VALUES ('445303', '445300', '云安区', '3');
INSERT INTO `wl_city` VALUES ('445321', '445300', '新兴县', '3');
INSERT INTO `wl_city` VALUES ('445322', '445300', '郁南县', '3');
INSERT INTO `wl_city` VALUES ('445381', '445300', '罗定市', '3');
INSERT INTO `wl_city` VALUES ('450000', '100000', '广西壮族自治区', '1');
INSERT INTO `wl_city` VALUES ('450100', '450000', '南宁市', '2');
INSERT INTO `wl_city` VALUES ('450102', '450100', '兴宁区', '3');
INSERT INTO `wl_city` VALUES ('450103', '450100', '青秀区', '3');
INSERT INTO `wl_city` VALUES ('450105', '450100', '江南区', '3');
INSERT INTO `wl_city` VALUES ('450107', '450100', '西乡塘区', '3');
INSERT INTO `wl_city` VALUES ('450108', '450100', '良庆区', '3');
INSERT INTO `wl_city` VALUES ('450109', '450100', '邕宁区', '3');
INSERT INTO `wl_city` VALUES ('450122', '450100', '武鸣县', '3');
INSERT INTO `wl_city` VALUES ('450123', '450100', '隆安县', '3');
INSERT INTO `wl_city` VALUES ('450124', '450100', '马山县', '3');
INSERT INTO `wl_city` VALUES ('450125', '450100', '上林县', '3');
INSERT INTO `wl_city` VALUES ('450126', '450100', '宾阳县', '3');
INSERT INTO `wl_city` VALUES ('450127', '450100', '横县', '3');
INSERT INTO `wl_city` VALUES ('450128', '450100', '埌东新区', '3');
INSERT INTO `wl_city` VALUES ('450200', '450000', '柳州市', '2');
INSERT INTO `wl_city` VALUES ('450202', '450200', '城中区', '3');
INSERT INTO `wl_city` VALUES ('450203', '450200', '鱼峰区', '3');
INSERT INTO `wl_city` VALUES ('450204', '450200', '柳南区', '3');
INSERT INTO `wl_city` VALUES ('450205', '450200', '柳北区', '3');
INSERT INTO `wl_city` VALUES ('450221', '450200', '柳江县', '3');
INSERT INTO `wl_city` VALUES ('450222', '450200', '柳城县', '3');
INSERT INTO `wl_city` VALUES ('450223', '450200', '鹿寨县', '3');
INSERT INTO `wl_city` VALUES ('450224', '450200', '融安县', '3');
INSERT INTO `wl_city` VALUES ('450225', '450200', '融水苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('450226', '450200', '三江侗族自治县', '3');
INSERT INTO `wl_city` VALUES ('450227', '450200', '柳东新区', '3');
INSERT INTO `wl_city` VALUES ('450300', '450000', '桂林市', '2');
INSERT INTO `wl_city` VALUES ('450302', '450300', '秀峰区', '3');
INSERT INTO `wl_city` VALUES ('450303', '450300', '叠彩区', '3');
INSERT INTO `wl_city` VALUES ('450304', '450300', '象山区', '3');
INSERT INTO `wl_city` VALUES ('450305', '450300', '七星区', '3');
INSERT INTO `wl_city` VALUES ('450311', '450300', '雁山区', '3');
INSERT INTO `wl_city` VALUES ('450312', '450300', '临桂区', '3');
INSERT INTO `wl_city` VALUES ('450321', '450300', '阳朔县', '3');
INSERT INTO `wl_city` VALUES ('450323', '450300', '灵川县', '3');
INSERT INTO `wl_city` VALUES ('450324', '450300', '全州县', '3');
INSERT INTO `wl_city` VALUES ('450325', '450300', '兴安县', '3');
INSERT INTO `wl_city` VALUES ('450326', '450300', '永福县', '3');
INSERT INTO `wl_city` VALUES ('450327', '450300', '灌阳县', '3');
INSERT INTO `wl_city` VALUES ('450328', '450300', '龙胜各族自治县', '3');
INSERT INTO `wl_city` VALUES ('450329', '450300', '资源县', '3');
INSERT INTO `wl_city` VALUES ('450330', '450300', '平乐县', '3');
INSERT INTO `wl_city` VALUES ('450331', '450300', '荔浦县', '3');
INSERT INTO `wl_city` VALUES ('450332', '450300', '恭城瑶族自治县', '3');
INSERT INTO `wl_city` VALUES ('450400', '450000', '梧州市', '2');
INSERT INTO `wl_city` VALUES ('450403', '450400', '万秀区', '3');
INSERT INTO `wl_city` VALUES ('450405', '450400', '长洲区', '3');
INSERT INTO `wl_city` VALUES ('450406', '450400', '龙圩区', '3');
INSERT INTO `wl_city` VALUES ('450421', '450400', '苍梧县', '3');
INSERT INTO `wl_city` VALUES ('450422', '450400', '藤县', '3');
INSERT INTO `wl_city` VALUES ('450423', '450400', '蒙山县', '3');
INSERT INTO `wl_city` VALUES ('450481', '450400', '岑溪市', '3');
INSERT INTO `wl_city` VALUES ('450500', '450000', '北海市', '2');
INSERT INTO `wl_city` VALUES ('450502', '450500', '海城区', '3');
INSERT INTO `wl_city` VALUES ('450503', '450500', '银海区', '3');
INSERT INTO `wl_city` VALUES ('450512', '450500', '铁山港区', '3');
INSERT INTO `wl_city` VALUES ('450521', '450500', '合浦县', '3');
INSERT INTO `wl_city` VALUES ('450600', '450000', '防城港市', '2');
INSERT INTO `wl_city` VALUES ('450602', '450600', '港口区', '3');
INSERT INTO `wl_city` VALUES ('450603', '450600', '防城区', '3');
INSERT INTO `wl_city` VALUES ('450621', '450600', '上思县', '3');
INSERT INTO `wl_city` VALUES ('450681', '450600', '东兴市', '3');
INSERT INTO `wl_city` VALUES ('450700', '450000', '钦州市', '2');
INSERT INTO `wl_city` VALUES ('450702', '450700', '钦南区', '3');
INSERT INTO `wl_city` VALUES ('450703', '450700', '钦北区', '3');
INSERT INTO `wl_city` VALUES ('450721', '450700', '灵山县', '3');
INSERT INTO `wl_city` VALUES ('450722', '450700', '浦北县', '3');
INSERT INTO `wl_city` VALUES ('450800', '450000', '贵港市', '2');
INSERT INTO `wl_city` VALUES ('450802', '450800', '港北区', '3');
INSERT INTO `wl_city` VALUES ('450803', '450800', '港南区', '3');
INSERT INTO `wl_city` VALUES ('450804', '450800', '覃塘区', '3');
INSERT INTO `wl_city` VALUES ('450821', '450800', '平南县', '3');
INSERT INTO `wl_city` VALUES ('450881', '450800', '桂平市', '3');
INSERT INTO `wl_city` VALUES ('450900', '450000', '玉林市', '2');
INSERT INTO `wl_city` VALUES ('450902', '450900', '玉州区', '3');
INSERT INTO `wl_city` VALUES ('450903', '450900', '福绵区', '3');
INSERT INTO `wl_city` VALUES ('450904', '450900', '玉东新区', '3');
INSERT INTO `wl_city` VALUES ('450921', '450900', '容县', '3');
INSERT INTO `wl_city` VALUES ('450922', '450900', '陆川县', '3');
INSERT INTO `wl_city` VALUES ('450923', '450900', '博白县', '3');
INSERT INTO `wl_city` VALUES ('450924', '450900', '兴业县', '3');
INSERT INTO `wl_city` VALUES ('450981', '450900', '北流市', '3');
INSERT INTO `wl_city` VALUES ('451000', '450000', '百色市', '2');
INSERT INTO `wl_city` VALUES ('451002', '451000', '右江区', '3');
INSERT INTO `wl_city` VALUES ('451021', '451000', '田阳县', '3');
INSERT INTO `wl_city` VALUES ('451022', '451000', '田东县', '3');
INSERT INTO `wl_city` VALUES ('451023', '451000', '平果县', '3');
INSERT INTO `wl_city` VALUES ('451024', '451000', '德保县', '3');
INSERT INTO `wl_city` VALUES ('451025', '451000', '靖西县', '3');
INSERT INTO `wl_city` VALUES ('451026', '451000', '那坡县', '3');
INSERT INTO `wl_city` VALUES ('451027', '451000', '凌云县', '3');
INSERT INTO `wl_city` VALUES ('451028', '451000', '乐业县', '3');
INSERT INTO `wl_city` VALUES ('451029', '451000', '田林县', '3');
INSERT INTO `wl_city` VALUES ('451030', '451000', '西林县', '3');
INSERT INTO `wl_city` VALUES ('451031', '451000', '隆林各族自治县', '3');
INSERT INTO `wl_city` VALUES ('451100', '450000', '贺州市', '2');
INSERT INTO `wl_city` VALUES ('451102', '451100', '八步区', '3');
INSERT INTO `wl_city` VALUES ('451121', '451100', '昭平县', '3');
INSERT INTO `wl_city` VALUES ('451122', '451100', '钟山县', '3');
INSERT INTO `wl_city` VALUES ('451123', '451100', '富川瑶族自治县', '3');
INSERT INTO `wl_city` VALUES ('451124', '451100', '平桂管理区', '3');
INSERT INTO `wl_city` VALUES ('451200', '450000', '河池市', '2');
INSERT INTO `wl_city` VALUES ('451202', '451200', '金城江区', '3');
INSERT INTO `wl_city` VALUES ('451221', '451200', '南丹县', '3');
INSERT INTO `wl_city` VALUES ('451222', '451200', '天峨县', '3');
INSERT INTO `wl_city` VALUES ('451223', '451200', '凤山县', '3');
INSERT INTO `wl_city` VALUES ('451224', '451200', '东兰县', '3');
INSERT INTO `wl_city` VALUES ('451225', '451200', '罗城仫佬族自治县', '3');
INSERT INTO `wl_city` VALUES ('451226', '451200', '环江毛南族自治县', '3');
INSERT INTO `wl_city` VALUES ('451227', '451200', '巴马瑶族自治县', '3');
INSERT INTO `wl_city` VALUES ('451228', '451200', '都安瑶族自治县', '3');
INSERT INTO `wl_city` VALUES ('451229', '451200', '大化瑶族自治县', '3');
INSERT INTO `wl_city` VALUES ('451281', '451200', '宜州市', '3');
INSERT INTO `wl_city` VALUES ('451300', '450000', '来宾市', '2');
INSERT INTO `wl_city` VALUES ('451302', '451300', '兴宾区', '3');
INSERT INTO `wl_city` VALUES ('451321', '451300', '忻城县', '3');
INSERT INTO `wl_city` VALUES ('451322', '451300', '象州县', '3');
INSERT INTO `wl_city` VALUES ('451323', '451300', '武宣县', '3');
INSERT INTO `wl_city` VALUES ('451324', '451300', '金秀瑶族自治县', '3');
INSERT INTO `wl_city` VALUES ('451381', '451300', '合山市', '3');
INSERT INTO `wl_city` VALUES ('451400', '450000', '崇左市', '2');
INSERT INTO `wl_city` VALUES ('451402', '451400', '江州区', '3');
INSERT INTO `wl_city` VALUES ('451421', '451400', '扶绥县', '3');
INSERT INTO `wl_city` VALUES ('451422', '451400', '宁明县', '3');
INSERT INTO `wl_city` VALUES ('451423', '451400', '龙州县', '3');
INSERT INTO `wl_city` VALUES ('451424', '451400', '大新县', '3');
INSERT INTO `wl_city` VALUES ('451425', '451400', '天等县', '3');
INSERT INTO `wl_city` VALUES ('451481', '451400', '凭祥市', '3');
INSERT INTO `wl_city` VALUES ('460000', '100000', '海南省', '1');
INSERT INTO `wl_city` VALUES ('460100', '460000', '海口市', '2');
INSERT INTO `wl_city` VALUES ('460105', '460100', '秀英区', '3');
INSERT INTO `wl_city` VALUES ('460106', '460100', '龙华区', '3');
INSERT INTO `wl_city` VALUES ('460107', '460100', '琼山区', '3');
INSERT INTO `wl_city` VALUES ('460108', '460100', '美兰区', '3');
INSERT INTO `wl_city` VALUES ('460200', '460000', '三亚市', '2');
INSERT INTO `wl_city` VALUES ('460202', '460200', '海棠区', '3');
INSERT INTO `wl_city` VALUES ('460203', '460200', '吉阳区', '3');
INSERT INTO `wl_city` VALUES ('460204', '460200', '天涯区', '3');
INSERT INTO `wl_city` VALUES ('460205', '460200', '崖州区', '3');
INSERT INTO `wl_city` VALUES ('460300', '460000', '三沙市', '2');
INSERT INTO `wl_city` VALUES ('460321', '460300', '西沙群岛', '3');
INSERT INTO `wl_city` VALUES ('460322', '460300', '南沙群岛', '3');
INSERT INTO `wl_city` VALUES ('460323', '460300', '中沙群岛', '3');
INSERT INTO `wl_city` VALUES ('469000', '460000', '直辖县级', '2');
INSERT INTO `wl_city` VALUES ('469001', '469000', '五指山市', '3');
INSERT INTO `wl_city` VALUES ('469002', '469000', '琼海市', '3');
INSERT INTO `wl_city` VALUES ('469003', '469000', '儋州市', '3');
INSERT INTO `wl_city` VALUES ('469005', '469000', '文昌市', '3');
INSERT INTO `wl_city` VALUES ('469006', '469000', '万宁市', '3');
INSERT INTO `wl_city` VALUES ('469007', '469000', '东方市', '3');
INSERT INTO `wl_city` VALUES ('469021', '469000', '定安县', '3');
INSERT INTO `wl_city` VALUES ('469022', '469000', '屯昌县', '3');
INSERT INTO `wl_city` VALUES ('469023', '469000', '澄迈县', '3');
INSERT INTO `wl_city` VALUES ('469024', '469000', '临高县', '3');
INSERT INTO `wl_city` VALUES ('469025', '469000', '白沙黎族自治县', '3');
INSERT INTO `wl_city` VALUES ('469026', '469000', '昌江黎族自治县', '3');
INSERT INTO `wl_city` VALUES ('469027', '469000', '乐东黎族自治县', '3');
INSERT INTO `wl_city` VALUES ('469028', '469000', '陵水黎族自治县', '3');
INSERT INTO `wl_city` VALUES ('469029', '469000', '保亭黎族苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('469030', '469000', '琼中黎族苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('500000', '100000', '重庆', '1');
INSERT INTO `wl_city` VALUES ('500100', '500000', '重庆市', '2');
INSERT INTO `wl_city` VALUES ('500101', '500100', '万州区', '3');
INSERT INTO `wl_city` VALUES ('500102', '500100', '涪陵区', '3');
INSERT INTO `wl_city` VALUES ('500103', '500100', '渝中区', '3');
INSERT INTO `wl_city` VALUES ('500104', '500100', '大渡口区', '3');
INSERT INTO `wl_city` VALUES ('500105', '500100', '江北区', '3');
INSERT INTO `wl_city` VALUES ('500106', '500100', '沙坪坝区', '3');
INSERT INTO `wl_city` VALUES ('500107', '500100', '九龙坡区', '3');
INSERT INTO `wl_city` VALUES ('500108', '500100', '南岸区', '3');
INSERT INTO `wl_city` VALUES ('500109', '500100', '北碚区', '3');
INSERT INTO `wl_city` VALUES ('500110', '500100', '綦江区', '3');
INSERT INTO `wl_city` VALUES ('500111', '500100', '大足区', '3');
INSERT INTO `wl_city` VALUES ('500112', '500100', '渝北区', '3');
INSERT INTO `wl_city` VALUES ('500113', '500100', '巴南区', '3');
INSERT INTO `wl_city` VALUES ('500114', '500100', '黔江区', '3');
INSERT INTO `wl_city` VALUES ('500115', '500100', '长寿区', '3');
INSERT INTO `wl_city` VALUES ('500116', '500100', '江津区', '3');
INSERT INTO `wl_city` VALUES ('500117', '500100', '合川区', '3');
INSERT INTO `wl_city` VALUES ('500118', '500100', '永川区', '3');
INSERT INTO `wl_city` VALUES ('500119', '500100', '南川区', '3');
INSERT INTO `wl_city` VALUES ('500120', '500100', '璧山区', '3');
INSERT INTO `wl_city` VALUES ('500151', '500100', '铜梁区', '3');
INSERT INTO `wl_city` VALUES ('500223', '500100', '潼南县', '3');
INSERT INTO `wl_city` VALUES ('500226', '500100', '荣昌县', '3');
INSERT INTO `wl_city` VALUES ('500228', '500100', '梁平县', '3');
INSERT INTO `wl_city` VALUES ('500229', '500100', '城口县', '3');
INSERT INTO `wl_city` VALUES ('500230', '500100', '丰都县', '3');
INSERT INTO `wl_city` VALUES ('500231', '500100', '垫江县', '3');
INSERT INTO `wl_city` VALUES ('500232', '500100', '武隆县', '3');
INSERT INTO `wl_city` VALUES ('500233', '500100', '忠县', '3');
INSERT INTO `wl_city` VALUES ('500234', '500100', '开县', '3');
INSERT INTO `wl_city` VALUES ('500235', '500100', '云阳县', '3');
INSERT INTO `wl_city` VALUES ('500236', '500100', '奉节县', '3');
INSERT INTO `wl_city` VALUES ('500237', '500100', '巫山县', '3');
INSERT INTO `wl_city` VALUES ('500238', '500100', '巫溪县', '3');
INSERT INTO `wl_city` VALUES ('500240', '500100', '石柱土家族自治县', '3');
INSERT INTO `wl_city` VALUES ('500241', '500100', '秀山土家族苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('500242', '500100', '酉阳土家族苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('500243', '500100', '彭水苗族土家族自治县', '3');
INSERT INTO `wl_city` VALUES ('500300', '500000', '两江新区', '2');
INSERT INTO `wl_city` VALUES ('500301', '500300', '北部新区', '3');
INSERT INTO `wl_city` VALUES ('500302', '500300', '保税港区', '3');
INSERT INTO `wl_city` VALUES ('500303', '500300', '工业园区', '3');
INSERT INTO `wl_city` VALUES ('510000', '100000', '四川省', '1');
INSERT INTO `wl_city` VALUES ('510100', '510000', '成都市', '2');
INSERT INTO `wl_city` VALUES ('510104', '510100', '锦江区', '3');
INSERT INTO `wl_city` VALUES ('510105', '510100', '青羊区', '3');
INSERT INTO `wl_city` VALUES ('510106', '510100', '金牛区', '3');
INSERT INTO `wl_city` VALUES ('510107', '510100', '武侯区', '3');
INSERT INTO `wl_city` VALUES ('510108', '510100', '成华区', '3');
INSERT INTO `wl_city` VALUES ('510112', '510100', '龙泉驿区', '3');
INSERT INTO `wl_city` VALUES ('510113', '510100', '青白江区', '3');
INSERT INTO `wl_city` VALUES ('510114', '510100', '新都区', '3');
INSERT INTO `wl_city` VALUES ('510115', '510100', '温江区', '3');
INSERT INTO `wl_city` VALUES ('510121', '510100', '金堂县', '3');
INSERT INTO `wl_city` VALUES ('510122', '510100', '双流县', '3');
INSERT INTO `wl_city` VALUES ('510124', '510100', '郫县', '3');
INSERT INTO `wl_city` VALUES ('510129', '510100', '大邑县', '3');
INSERT INTO `wl_city` VALUES ('510131', '510100', '蒲江县', '3');
INSERT INTO `wl_city` VALUES ('510132', '510100', '新津县', '3');
INSERT INTO `wl_city` VALUES ('510181', '510100', '都江堰市', '3');
INSERT INTO `wl_city` VALUES ('510182', '510100', '彭州市', '3');
INSERT INTO `wl_city` VALUES ('510183', '510100', '邛崃市', '3');
INSERT INTO `wl_city` VALUES ('510184', '510100', '崇州市', '3');
INSERT INTO `wl_city` VALUES ('510300', '510000', '自贡市', '2');
INSERT INTO `wl_city` VALUES ('510302', '510300', '自流井区', '3');
INSERT INTO `wl_city` VALUES ('510303', '510300', '贡井区', '3');
INSERT INTO `wl_city` VALUES ('510304', '510300', '大安区', '3');
INSERT INTO `wl_city` VALUES ('510311', '510300', '沿滩区', '3');
INSERT INTO `wl_city` VALUES ('510321', '510300', '荣县', '3');
INSERT INTO `wl_city` VALUES ('510322', '510300', '富顺县', '3');
INSERT INTO `wl_city` VALUES ('510400', '510000', '攀枝花市', '2');
INSERT INTO `wl_city` VALUES ('510402', '510400', '东区', '3');
INSERT INTO `wl_city` VALUES ('510403', '510400', '西区', '3');
INSERT INTO `wl_city` VALUES ('510411', '510400', '仁和区', '3');
INSERT INTO `wl_city` VALUES ('510421', '510400', '米易县', '3');
INSERT INTO `wl_city` VALUES ('510422', '510400', '盐边县', '3');
INSERT INTO `wl_city` VALUES ('510500', '510000', '泸州市', '2');
INSERT INTO `wl_city` VALUES ('510502', '510500', '江阳区', '3');
INSERT INTO `wl_city` VALUES ('510503', '510500', '纳溪区', '3');
INSERT INTO `wl_city` VALUES ('510504', '510500', '龙马潭区', '3');
INSERT INTO `wl_city` VALUES ('510521', '510500', '泸县', '3');
INSERT INTO `wl_city` VALUES ('510522', '510500', '合江县', '3');
INSERT INTO `wl_city` VALUES ('510524', '510500', '叙永县', '3');
INSERT INTO `wl_city` VALUES ('510525', '510500', '古蔺县', '3');
INSERT INTO `wl_city` VALUES ('510600', '510000', '德阳市', '2');
INSERT INTO `wl_city` VALUES ('510603', '510600', '旌阳区', '3');
INSERT INTO `wl_city` VALUES ('510623', '510600', '中江县', '3');
INSERT INTO `wl_city` VALUES ('510626', '510600', '罗江县', '3');
INSERT INTO `wl_city` VALUES ('510681', '510600', '广汉市', '3');
INSERT INTO `wl_city` VALUES ('510682', '510600', '什邡市', '3');
INSERT INTO `wl_city` VALUES ('510683', '510600', '绵竹市', '3');
INSERT INTO `wl_city` VALUES ('510700', '510000', '绵阳市', '2');
INSERT INTO `wl_city` VALUES ('510703', '510700', '涪城区', '3');
INSERT INTO `wl_city` VALUES ('510704', '510700', '游仙区', '3');
INSERT INTO `wl_city` VALUES ('510722', '510700', '三台县', '3');
INSERT INTO `wl_city` VALUES ('510723', '510700', '盐亭县', '3');
INSERT INTO `wl_city` VALUES ('510724', '510700', '安县', '3');
INSERT INTO `wl_city` VALUES ('510725', '510700', '梓潼县', '3');
INSERT INTO `wl_city` VALUES ('510726', '510700', '北川羌族自治县', '3');
INSERT INTO `wl_city` VALUES ('510727', '510700', '平武县', '3');
INSERT INTO `wl_city` VALUES ('510781', '510700', '江油市', '3');
INSERT INTO `wl_city` VALUES ('510800', '510000', '广元市', '2');
INSERT INTO `wl_city` VALUES ('510802', '510800', '利州区', '3');
INSERT INTO `wl_city` VALUES ('510811', '510800', '昭化区', '3');
INSERT INTO `wl_city` VALUES ('510812', '510800', '朝天区', '3');
INSERT INTO `wl_city` VALUES ('510821', '510800', '旺苍县', '3');
INSERT INTO `wl_city` VALUES ('510822', '510800', '青川县', '3');
INSERT INTO `wl_city` VALUES ('510823', '510800', '剑阁县', '3');
INSERT INTO `wl_city` VALUES ('510824', '510800', '苍溪县', '3');
INSERT INTO `wl_city` VALUES ('510900', '510000', '遂宁市', '2');
INSERT INTO `wl_city` VALUES ('510903', '510900', '船山区', '3');
INSERT INTO `wl_city` VALUES ('510904', '510900', '安居区', '3');
INSERT INTO `wl_city` VALUES ('510921', '510900', '蓬溪县', '3');
INSERT INTO `wl_city` VALUES ('510922', '510900', '射洪县', '3');
INSERT INTO `wl_city` VALUES ('510923', '510900', '大英县', '3');
INSERT INTO `wl_city` VALUES ('511000', '510000', '内江市', '2');
INSERT INTO `wl_city` VALUES ('511002', '511000', '市中区', '3');
INSERT INTO `wl_city` VALUES ('511011', '511000', '东兴区', '3');
INSERT INTO `wl_city` VALUES ('511024', '511000', '威远县', '3');
INSERT INTO `wl_city` VALUES ('511025', '511000', '资中县', '3');
INSERT INTO `wl_city` VALUES ('511028', '511000', '隆昌县', '3');
INSERT INTO `wl_city` VALUES ('511100', '510000', '乐山市', '2');
INSERT INTO `wl_city` VALUES ('511102', '511100', '市中区', '3');
INSERT INTO `wl_city` VALUES ('511111', '511100', '沙湾区', '3');
INSERT INTO `wl_city` VALUES ('511112', '511100', '五通桥区', '3');
INSERT INTO `wl_city` VALUES ('511113', '511100', '金口河区', '3');
INSERT INTO `wl_city` VALUES ('511123', '511100', '犍为县', '3');
INSERT INTO `wl_city` VALUES ('511124', '511100', '井研县', '3');
INSERT INTO `wl_city` VALUES ('511126', '511100', '夹江县', '3');
INSERT INTO `wl_city` VALUES ('511129', '511100', '沐川县', '3');
INSERT INTO `wl_city` VALUES ('511132', '511100', '峨边彝族自治县', '3');
INSERT INTO `wl_city` VALUES ('511133', '511100', '马边彝族自治县', '3');
INSERT INTO `wl_city` VALUES ('511181', '511100', '峨眉山市', '3');
INSERT INTO `wl_city` VALUES ('511300', '510000', '南充市', '2');
INSERT INTO `wl_city` VALUES ('511302', '511300', '顺庆区', '3');
INSERT INTO `wl_city` VALUES ('511303', '511300', '高坪区', '3');
INSERT INTO `wl_city` VALUES ('511304', '511300', '嘉陵区', '3');
INSERT INTO `wl_city` VALUES ('511321', '511300', '南部县', '3');
INSERT INTO `wl_city` VALUES ('511322', '511300', '营山县', '3');
INSERT INTO `wl_city` VALUES ('511323', '511300', '蓬安县', '3');
INSERT INTO `wl_city` VALUES ('511324', '511300', '仪陇县', '3');
INSERT INTO `wl_city` VALUES ('511325', '511300', '西充县', '3');
INSERT INTO `wl_city` VALUES ('511381', '511300', '阆中市', '3');
INSERT INTO `wl_city` VALUES ('511400', '510000', '眉山市', '2');
INSERT INTO `wl_city` VALUES ('511402', '511400', '东坡区', '3');
INSERT INTO `wl_city` VALUES ('511403', '511400', '彭山区', '3');
INSERT INTO `wl_city` VALUES ('511421', '511400', '仁寿县', '3');
INSERT INTO `wl_city` VALUES ('511423', '511400', '洪雅县', '3');
INSERT INTO `wl_city` VALUES ('511424', '511400', '丹棱县', '3');
INSERT INTO `wl_city` VALUES ('511425', '511400', '青神县', '3');
INSERT INTO `wl_city` VALUES ('511500', '510000', '宜宾市', '2');
INSERT INTO `wl_city` VALUES ('511502', '511500', '翠屏区', '3');
INSERT INTO `wl_city` VALUES ('511503', '511500', '南溪区', '3');
INSERT INTO `wl_city` VALUES ('511521', '511500', '宜宾县', '3');
INSERT INTO `wl_city` VALUES ('511523', '511500', '江安县', '3');
INSERT INTO `wl_city` VALUES ('511524', '511500', '长宁县', '3');
INSERT INTO `wl_city` VALUES ('511525', '511500', '高县', '3');
INSERT INTO `wl_city` VALUES ('511526', '511500', '珙县', '3');
INSERT INTO `wl_city` VALUES ('511527', '511500', '筠连县', '3');
INSERT INTO `wl_city` VALUES ('511528', '511500', '兴文县', '3');
INSERT INTO `wl_city` VALUES ('511529', '511500', '屏山县', '3');
INSERT INTO `wl_city` VALUES ('511600', '510000', '广安市', '2');
INSERT INTO `wl_city` VALUES ('511602', '511600', '广安区', '3');
INSERT INTO `wl_city` VALUES ('511603', '511600', '前锋区', '3');
INSERT INTO `wl_city` VALUES ('511621', '511600', '岳池县', '3');
INSERT INTO `wl_city` VALUES ('511622', '511600', '武胜县', '3');
INSERT INTO `wl_city` VALUES ('511623', '511600', '邻水县', '3');
INSERT INTO `wl_city` VALUES ('511681', '511600', '华蓥市', '3');
INSERT INTO `wl_city` VALUES ('511700', '510000', '达州市', '2');
INSERT INTO `wl_city` VALUES ('511702', '511700', '通川区', '3');
INSERT INTO `wl_city` VALUES ('511703', '511700', '达川区', '3');
INSERT INTO `wl_city` VALUES ('511722', '511700', '宣汉县', '3');
INSERT INTO `wl_city` VALUES ('511723', '511700', '开江县', '3');
INSERT INTO `wl_city` VALUES ('511724', '511700', '大竹县', '3');
INSERT INTO `wl_city` VALUES ('511725', '511700', '渠县', '3');
INSERT INTO `wl_city` VALUES ('511781', '511700', '万源市', '3');
INSERT INTO `wl_city` VALUES ('511800', '510000', '雅安市', '2');
INSERT INTO `wl_city` VALUES ('511802', '511800', '雨城区', '3');
INSERT INTO `wl_city` VALUES ('511803', '511800', '名山区', '3');
INSERT INTO `wl_city` VALUES ('511822', '511800', '荥经县', '3');
INSERT INTO `wl_city` VALUES ('511823', '511800', '汉源县', '3');
INSERT INTO `wl_city` VALUES ('511824', '511800', '石棉县', '3');
INSERT INTO `wl_city` VALUES ('511825', '511800', '天全县', '3');
INSERT INTO `wl_city` VALUES ('511826', '511800', '芦山县', '3');
INSERT INTO `wl_city` VALUES ('511827', '511800', '宝兴县', '3');
INSERT INTO `wl_city` VALUES ('511900', '510000', '巴中市', '2');
INSERT INTO `wl_city` VALUES ('511902', '511900', '巴州区', '3');
INSERT INTO `wl_city` VALUES ('511903', '511900', '恩阳区', '3');
INSERT INTO `wl_city` VALUES ('511921', '511900', '通江县', '3');
INSERT INTO `wl_city` VALUES ('511922', '511900', '南江县', '3');
INSERT INTO `wl_city` VALUES ('511923', '511900', '平昌县', '3');
INSERT INTO `wl_city` VALUES ('512000', '510000', '资阳市', '2');
INSERT INTO `wl_city` VALUES ('512002', '512000', '雁江区', '3');
INSERT INTO `wl_city` VALUES ('512021', '512000', '安岳县', '3');
INSERT INTO `wl_city` VALUES ('512022', '512000', '乐至县', '3');
INSERT INTO `wl_city` VALUES ('512081', '512000', '简阳市', '3');
INSERT INTO `wl_city` VALUES ('513200', '510000', '阿坝藏族羌族自治州', '2');
INSERT INTO `wl_city` VALUES ('513221', '513200', '汶川县', '3');
INSERT INTO `wl_city` VALUES ('513222', '513200', '理县', '3');
INSERT INTO `wl_city` VALUES ('513223', '513200', '茂县', '3');
INSERT INTO `wl_city` VALUES ('513224', '513200', '松潘县', '3');
INSERT INTO `wl_city` VALUES ('513225', '513200', '九寨沟县', '3');
INSERT INTO `wl_city` VALUES ('513226', '513200', '金川县', '3');
INSERT INTO `wl_city` VALUES ('513227', '513200', '小金县', '3');
INSERT INTO `wl_city` VALUES ('513228', '513200', '黑水县', '3');
INSERT INTO `wl_city` VALUES ('513229', '513200', '马尔康县', '3');
INSERT INTO `wl_city` VALUES ('513230', '513200', '壤塘县', '3');
INSERT INTO `wl_city` VALUES ('513231', '513200', '阿坝县', '3');
INSERT INTO `wl_city` VALUES ('513232', '513200', '若尔盖县', '3');
INSERT INTO `wl_city` VALUES ('513233', '513200', '红原县', '3');
INSERT INTO `wl_city` VALUES ('513300', '510000', '甘孜藏族自治州', '2');
INSERT INTO `wl_city` VALUES ('513321', '513300', '康定县', '3');
INSERT INTO `wl_city` VALUES ('513322', '513300', '泸定县', '3');
INSERT INTO `wl_city` VALUES ('513323', '513300', '丹巴县', '3');
INSERT INTO `wl_city` VALUES ('513324', '513300', '九龙县', '3');
INSERT INTO `wl_city` VALUES ('513325', '513300', '雅江县', '3');
INSERT INTO `wl_city` VALUES ('513326', '513300', '道孚县', '3');
INSERT INTO `wl_city` VALUES ('513327', '513300', '炉霍县', '3');
INSERT INTO `wl_city` VALUES ('513328', '513300', '甘孜县', '3');
INSERT INTO `wl_city` VALUES ('513329', '513300', '新龙县', '3');
INSERT INTO `wl_city` VALUES ('513330', '513300', '德格县', '3');
INSERT INTO `wl_city` VALUES ('513331', '513300', '白玉县', '3');
INSERT INTO `wl_city` VALUES ('513332', '513300', '石渠县', '3');
INSERT INTO `wl_city` VALUES ('513333', '513300', '色达县', '3');
INSERT INTO `wl_city` VALUES ('513334', '513300', '理塘县', '3');
INSERT INTO `wl_city` VALUES ('513335', '513300', '巴塘县', '3');
INSERT INTO `wl_city` VALUES ('513336', '513300', '乡城县', '3');
INSERT INTO `wl_city` VALUES ('513337', '513300', '稻城县', '3');
INSERT INTO `wl_city` VALUES ('513338', '513300', '得荣县', '3');
INSERT INTO `wl_city` VALUES ('513400', '510000', '凉山彝族自治州', '2');
INSERT INTO `wl_city` VALUES ('513401', '513400', '西昌市', '3');
INSERT INTO `wl_city` VALUES ('513422', '513400', '木里藏族自治县', '3');
INSERT INTO `wl_city` VALUES ('513423', '513400', '盐源县', '3');
INSERT INTO `wl_city` VALUES ('513424', '513400', '德昌县', '3');
INSERT INTO `wl_city` VALUES ('513425', '513400', '会理县', '3');
INSERT INTO `wl_city` VALUES ('513426', '513400', '会东县', '3');
INSERT INTO `wl_city` VALUES ('513427', '513400', '宁南县', '3');
INSERT INTO `wl_city` VALUES ('513428', '513400', '普格县', '3');
INSERT INTO `wl_city` VALUES ('513429', '513400', '布拖县', '3');
INSERT INTO `wl_city` VALUES ('513430', '513400', '金阳县', '3');
INSERT INTO `wl_city` VALUES ('513431', '513400', '昭觉县', '3');
INSERT INTO `wl_city` VALUES ('513432', '513400', '喜德县', '3');
INSERT INTO `wl_city` VALUES ('513433', '513400', '冕宁县', '3');
INSERT INTO `wl_city` VALUES ('513434', '513400', '越西县', '3');
INSERT INTO `wl_city` VALUES ('513435', '513400', '甘洛县', '3');
INSERT INTO `wl_city` VALUES ('513436', '513400', '美姑县', '3');
INSERT INTO `wl_city` VALUES ('513437', '513400', '雷波县', '3');
INSERT INTO `wl_city` VALUES ('520000', '100000', '贵州省', '1');
INSERT INTO `wl_city` VALUES ('520100', '520000', '贵阳市', '2');
INSERT INTO `wl_city` VALUES ('520102', '520100', '南明区', '3');
INSERT INTO `wl_city` VALUES ('520103', '520100', '云岩区', '3');
INSERT INTO `wl_city` VALUES ('520111', '520100', '花溪区', '3');
INSERT INTO `wl_city` VALUES ('520112', '520100', '乌当区', '3');
INSERT INTO `wl_city` VALUES ('520113', '520100', '白云区', '3');
INSERT INTO `wl_city` VALUES ('520115', '520100', '观山湖区', '3');
INSERT INTO `wl_city` VALUES ('520121', '520100', '开阳县', '3');
INSERT INTO `wl_city` VALUES ('520122', '520100', '息烽县', '3');
INSERT INTO `wl_city` VALUES ('520123', '520100', '修文县', '3');
INSERT INTO `wl_city` VALUES ('520181', '520100', '清镇市', '3');
INSERT INTO `wl_city` VALUES ('520200', '520000', '六盘水市', '2');
INSERT INTO `wl_city` VALUES ('520201', '520200', '钟山区', '3');
INSERT INTO `wl_city` VALUES ('520203', '520200', '六枝特区', '3');
INSERT INTO `wl_city` VALUES ('520221', '520200', '水城县', '3');
INSERT INTO `wl_city` VALUES ('520222', '520200', '盘县', '3');
INSERT INTO `wl_city` VALUES ('520300', '520000', '遵义市', '2');
INSERT INTO `wl_city` VALUES ('520302', '520300', '红花岗区', '3');
INSERT INTO `wl_city` VALUES ('520303', '520300', '汇川区', '3');
INSERT INTO `wl_city` VALUES ('520321', '520300', '遵义县', '3');
INSERT INTO `wl_city` VALUES ('520322', '520300', '桐梓县', '3');
INSERT INTO `wl_city` VALUES ('520323', '520300', '绥阳县', '3');
INSERT INTO `wl_city` VALUES ('520324', '520300', '正安县', '3');
INSERT INTO `wl_city` VALUES ('520325', '520300', '道真仡佬族苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('520326', '520300', '务川仡佬族苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('520327', '520300', '凤冈县', '3');
INSERT INTO `wl_city` VALUES ('520328', '520300', '湄潭县', '3');
INSERT INTO `wl_city` VALUES ('520329', '520300', '余庆县', '3');
INSERT INTO `wl_city` VALUES ('520330', '520300', '习水县', '3');
INSERT INTO `wl_city` VALUES ('520381', '520300', '赤水市', '3');
INSERT INTO `wl_city` VALUES ('520382', '520300', '仁怀市', '3');
INSERT INTO `wl_city` VALUES ('520400', '520000', '安顺市', '2');
INSERT INTO `wl_city` VALUES ('520402', '520400', '西秀区', '3');
INSERT INTO `wl_city` VALUES ('520421', '520400', '平坝区', '3');
INSERT INTO `wl_city` VALUES ('520422', '520400', '普定县', '3');
INSERT INTO `wl_city` VALUES ('520423', '520400', '镇宁布依族苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('520424', '520400', '关岭布依族苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('520425', '520400', '紫云苗族布依族自治县', '3');
INSERT INTO `wl_city` VALUES ('520500', '520000', '毕节市', '2');
INSERT INTO `wl_city` VALUES ('520502', '520500', '七星关区', '3');
INSERT INTO `wl_city` VALUES ('520521', '520500', '大方县', '3');
INSERT INTO `wl_city` VALUES ('520522', '520500', '黔西县', '3');
INSERT INTO `wl_city` VALUES ('520523', '520500', '金沙县', '3');
INSERT INTO `wl_city` VALUES ('520524', '520500', '织金县', '3');
INSERT INTO `wl_city` VALUES ('520525', '520500', '纳雍县', '3');
INSERT INTO `wl_city` VALUES ('520526', '520500', '威宁彝族回族苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('520527', '520500', '赫章县', '3');
INSERT INTO `wl_city` VALUES ('520600', '520000', '铜仁市', '2');
INSERT INTO `wl_city` VALUES ('520602', '520600', '碧江区', '3');
INSERT INTO `wl_city` VALUES ('520603', '520600', '万山区', '3');
INSERT INTO `wl_city` VALUES ('520621', '520600', '江口县', '3');
INSERT INTO `wl_city` VALUES ('520622', '520600', '玉屏侗族自治县', '3');
INSERT INTO `wl_city` VALUES ('520623', '520600', '石阡县', '3');
INSERT INTO `wl_city` VALUES ('520624', '520600', '思南县', '3');
INSERT INTO `wl_city` VALUES ('520625', '520600', '印江土家族苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('520626', '520600', '德江县', '3');
INSERT INTO `wl_city` VALUES ('520627', '520600', '沿河土家族自治县', '3');
INSERT INTO `wl_city` VALUES ('520628', '520600', '松桃苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('522300', '520000', '黔西南布依族苗族自治州', '2');
INSERT INTO `wl_city` VALUES ('522301', '522300', '兴义市 ', '3');
INSERT INTO `wl_city` VALUES ('522322', '522300', '兴仁县', '3');
INSERT INTO `wl_city` VALUES ('522323', '522300', '普安县', '3');
INSERT INTO `wl_city` VALUES ('522324', '522300', '晴隆县', '3');
INSERT INTO `wl_city` VALUES ('522325', '522300', '贞丰县', '3');
INSERT INTO `wl_city` VALUES ('522326', '522300', '望谟县', '3');
INSERT INTO `wl_city` VALUES ('522327', '522300', '册亨县', '3');
INSERT INTO `wl_city` VALUES ('522328', '522300', '安龙县', '3');
INSERT INTO `wl_city` VALUES ('522600', '520000', '黔东南苗族侗族自治州', '2');
INSERT INTO `wl_city` VALUES ('522601', '522600', '凯里市', '3');
INSERT INTO `wl_city` VALUES ('522622', '522600', '黄平县', '3');
INSERT INTO `wl_city` VALUES ('522623', '522600', '施秉县', '3');
INSERT INTO `wl_city` VALUES ('522624', '522600', '三穗县', '3');
INSERT INTO `wl_city` VALUES ('522625', '522600', '镇远县', '3');
INSERT INTO `wl_city` VALUES ('522626', '522600', '岑巩县', '3');
INSERT INTO `wl_city` VALUES ('522627', '522600', '天柱县', '3');
INSERT INTO `wl_city` VALUES ('522628', '522600', '锦屏县', '3');
INSERT INTO `wl_city` VALUES ('522629', '522600', '剑河县', '3');
INSERT INTO `wl_city` VALUES ('522630', '522600', '台江县', '3');
INSERT INTO `wl_city` VALUES ('522631', '522600', '黎平县', '3');
INSERT INTO `wl_city` VALUES ('522632', '522600', '榕江县', '3');
INSERT INTO `wl_city` VALUES ('522633', '522600', '从江县', '3');
INSERT INTO `wl_city` VALUES ('522634', '522600', '雷山县', '3');
INSERT INTO `wl_city` VALUES ('522635', '522600', '麻江县', '3');
INSERT INTO `wl_city` VALUES ('522636', '522600', '丹寨县', '3');
INSERT INTO `wl_city` VALUES ('522700', '520000', '黔南布依族苗族自治州', '2');
INSERT INTO `wl_city` VALUES ('522701', '522700', '都匀市', '3');
INSERT INTO `wl_city` VALUES ('522702', '522700', '福泉市', '3');
INSERT INTO `wl_city` VALUES ('522722', '522700', '荔波县', '3');
INSERT INTO `wl_city` VALUES ('522723', '522700', '贵定县', '3');
INSERT INTO `wl_city` VALUES ('522725', '522700', '瓮安县', '3');
INSERT INTO `wl_city` VALUES ('522726', '522700', '独山县', '3');
INSERT INTO `wl_city` VALUES ('522727', '522700', '平塘县', '3');
INSERT INTO `wl_city` VALUES ('522728', '522700', '罗甸县', '3');
INSERT INTO `wl_city` VALUES ('522729', '522700', '长顺县', '3');
INSERT INTO `wl_city` VALUES ('522730', '522700', '龙里县', '3');
INSERT INTO `wl_city` VALUES ('522731', '522700', '惠水县', '3');
INSERT INTO `wl_city` VALUES ('522732', '522700', '三都水族自治县', '3');
INSERT INTO `wl_city` VALUES ('530000', '100000', '云南省', '1');
INSERT INTO `wl_city` VALUES ('530100', '530000', '昆明市', '2');
INSERT INTO `wl_city` VALUES ('530102', '530100', '五华区', '3');
INSERT INTO `wl_city` VALUES ('530103', '530100', '盘龙区', '3');
INSERT INTO `wl_city` VALUES ('530111', '530100', '官渡区', '3');
INSERT INTO `wl_city` VALUES ('530112', '530100', '西山区', '3');
INSERT INTO `wl_city` VALUES ('530113', '530100', '东川区', '3');
INSERT INTO `wl_city` VALUES ('530114', '530100', '呈贡区', '3');
INSERT INTO `wl_city` VALUES ('530122', '530100', '晋宁县', '3');
INSERT INTO `wl_city` VALUES ('530124', '530100', '富民县', '3');
INSERT INTO `wl_city` VALUES ('530125', '530100', '宜良县', '3');
INSERT INTO `wl_city` VALUES ('530126', '530100', '石林彝族自治县', '3');
INSERT INTO `wl_city` VALUES ('530127', '530100', '嵩明县', '3');
INSERT INTO `wl_city` VALUES ('530128', '530100', '禄劝彝族苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('530129', '530100', '寻甸回族彝族自治县 ', '3');
INSERT INTO `wl_city` VALUES ('530181', '530100', '安宁市', '3');
INSERT INTO `wl_city` VALUES ('530300', '530000', '曲靖市', '2');
INSERT INTO `wl_city` VALUES ('530302', '530300', '麒麟区', '3');
INSERT INTO `wl_city` VALUES ('530321', '530300', '马龙县', '3');
INSERT INTO `wl_city` VALUES ('530322', '530300', '陆良县', '3');
INSERT INTO `wl_city` VALUES ('530323', '530300', '师宗县', '3');
INSERT INTO `wl_city` VALUES ('530324', '530300', '罗平县', '3');
INSERT INTO `wl_city` VALUES ('530325', '530300', '富源县', '3');
INSERT INTO `wl_city` VALUES ('530326', '530300', '会泽县', '3');
INSERT INTO `wl_city` VALUES ('530328', '530300', '沾益县', '3');
INSERT INTO `wl_city` VALUES ('530381', '530300', '宣威市', '3');
INSERT INTO `wl_city` VALUES ('530400', '530000', '玉溪市', '2');
INSERT INTO `wl_city` VALUES ('530402', '530400', '红塔区', '3');
INSERT INTO `wl_city` VALUES ('530421', '530400', '江川县', '3');
INSERT INTO `wl_city` VALUES ('530422', '530400', '澄江县', '3');
INSERT INTO `wl_city` VALUES ('530423', '530400', '通海县', '3');
INSERT INTO `wl_city` VALUES ('530424', '530400', '华宁县', '3');
INSERT INTO `wl_city` VALUES ('530425', '530400', '易门县', '3');
INSERT INTO `wl_city` VALUES ('530426', '530400', '峨山彝族自治县', '3');
INSERT INTO `wl_city` VALUES ('530427', '530400', '新平彝族傣族自治县', '3');
INSERT INTO `wl_city` VALUES ('530428', '530400', '元江哈尼族彝族傣族自治县', '3');
INSERT INTO `wl_city` VALUES ('530500', '530000', '保山市', '2');
INSERT INTO `wl_city` VALUES ('530502', '530500', '隆阳区', '3');
INSERT INTO `wl_city` VALUES ('530521', '530500', '施甸县', '3');
INSERT INTO `wl_city` VALUES ('530522', '530500', '腾冲县', '3');
INSERT INTO `wl_city` VALUES ('530523', '530500', '龙陵县', '3');
INSERT INTO `wl_city` VALUES ('530524', '530500', '昌宁县', '3');
INSERT INTO `wl_city` VALUES ('530600', '530000', '昭通市', '2');
INSERT INTO `wl_city` VALUES ('530602', '530600', '昭阳区', '3');
INSERT INTO `wl_city` VALUES ('530621', '530600', '鲁甸县', '3');
INSERT INTO `wl_city` VALUES ('530622', '530600', '巧家县', '3');
INSERT INTO `wl_city` VALUES ('530623', '530600', '盐津县', '3');
INSERT INTO `wl_city` VALUES ('530624', '530600', '大关县', '3');
INSERT INTO `wl_city` VALUES ('530625', '530600', '永善县', '3');
INSERT INTO `wl_city` VALUES ('530626', '530600', '绥江县', '3');
INSERT INTO `wl_city` VALUES ('530627', '530600', '镇雄县', '3');
INSERT INTO `wl_city` VALUES ('530628', '530600', '彝良县', '3');
INSERT INTO `wl_city` VALUES ('530629', '530600', '威信县', '3');
INSERT INTO `wl_city` VALUES ('530630', '530600', '水富县', '3');
INSERT INTO `wl_city` VALUES ('530700', '530000', '丽江市', '2');
INSERT INTO `wl_city` VALUES ('530702', '530700', '古城区', '3');
INSERT INTO `wl_city` VALUES ('530721', '530700', '玉龙纳西族自治县', '3');
INSERT INTO `wl_city` VALUES ('530722', '530700', '永胜县', '3');
INSERT INTO `wl_city` VALUES ('530723', '530700', '华坪县', '3');
INSERT INTO `wl_city` VALUES ('530724', '530700', '宁蒗彝族自治县', '3');
INSERT INTO `wl_city` VALUES ('530800', '530000', '普洱市', '2');
INSERT INTO `wl_city` VALUES ('530802', '530800', '思茅区', '3');
INSERT INTO `wl_city` VALUES ('530821', '530800', '宁洱哈尼族彝族自治县', '3');
INSERT INTO `wl_city` VALUES ('530822', '530800', '墨江哈尼族自治县', '3');
INSERT INTO `wl_city` VALUES ('530823', '530800', '景东彝族自治县', '3');
INSERT INTO `wl_city` VALUES ('530824', '530800', '景谷傣族彝族自治县', '3');
INSERT INTO `wl_city` VALUES ('530825', '530800', '镇沅彝族哈尼族拉祜族自治县', '3');
INSERT INTO `wl_city` VALUES ('530826', '530800', '江城哈尼族彝族自治县', '3');
INSERT INTO `wl_city` VALUES ('530827', '530800', '孟连傣族拉祜族佤族自治县', '3');
INSERT INTO `wl_city` VALUES ('530828', '530800', '澜沧拉祜族自治县', '3');
INSERT INTO `wl_city` VALUES ('530829', '530800', '西盟佤族自治县', '3');
INSERT INTO `wl_city` VALUES ('530900', '530000', '临沧市', '2');
INSERT INTO `wl_city` VALUES ('530902', '530900', '临翔区', '3');
INSERT INTO `wl_city` VALUES ('530921', '530900', '凤庆县', '3');
INSERT INTO `wl_city` VALUES ('530922', '530900', '云县', '3');
INSERT INTO `wl_city` VALUES ('530923', '530900', '永德县', '3');
INSERT INTO `wl_city` VALUES ('530924', '530900', '镇康县', '3');
INSERT INTO `wl_city` VALUES ('530925', '530900', '双江拉祜族佤族布朗族傣族自治县', '3');
INSERT INTO `wl_city` VALUES ('530926', '530900', '耿马傣族佤族自治县', '3');
INSERT INTO `wl_city` VALUES ('530927', '530900', '沧源佤族自治县', '3');
INSERT INTO `wl_city` VALUES ('532300', '530000', '楚雄彝族自治州', '2');
INSERT INTO `wl_city` VALUES ('532301', '532300', '楚雄市', '3');
INSERT INTO `wl_city` VALUES ('532322', '532300', '双柏县', '3');
INSERT INTO `wl_city` VALUES ('532323', '532300', '牟定县', '3');
INSERT INTO `wl_city` VALUES ('532324', '532300', '南华县', '3');
INSERT INTO `wl_city` VALUES ('532325', '532300', '姚安县', '3');
INSERT INTO `wl_city` VALUES ('532326', '532300', '大姚县', '3');
INSERT INTO `wl_city` VALUES ('532327', '532300', '永仁县', '3');
INSERT INTO `wl_city` VALUES ('532328', '532300', '元谋县', '3');
INSERT INTO `wl_city` VALUES ('532329', '532300', '武定县', '3');
INSERT INTO `wl_city` VALUES ('532331', '532300', '禄丰县', '3');
INSERT INTO `wl_city` VALUES ('532500', '530000', '红河哈尼族彝族自治州', '2');
INSERT INTO `wl_city` VALUES ('532501', '532500', '个旧市', '3');
INSERT INTO `wl_city` VALUES ('532502', '532500', '开远市', '3');
INSERT INTO `wl_city` VALUES ('532503', '532500', '蒙自市', '3');
INSERT INTO `wl_city` VALUES ('532504', '532500', '弥勒市', '3');
INSERT INTO `wl_city` VALUES ('532523', '532500', '屏边苗族自治县', '3');
INSERT INTO `wl_city` VALUES ('532524', '532500', '建水县', '3');
INSERT INTO `wl_city` VALUES ('532525', '532500', '石屏县', '3');
INSERT INTO `wl_city` VALUES ('532527', '532500', '泸西县', '3');
INSERT INTO `wl_city` VALUES ('532528', '532500', '元阳县', '3');
INSERT INTO `wl_city` VALUES ('532529', '532500', '红河县', '3');
INSERT INTO `wl_city` VALUES ('532530', '532500', '金平苗族瑶族傣族自治县', '3');
INSERT INTO `wl_city` VALUES ('532531', '532500', '绿春县', '3');
INSERT INTO `wl_city` VALUES ('532532', '532500', '河口瑶族自治县', '3');
INSERT INTO `wl_city` VALUES ('532600', '530000', '文山壮族苗族自治州', '2');
INSERT INTO `wl_city` VALUES ('532601', '532600', '文山市', '3');
INSERT INTO `wl_city` VALUES ('532622', '532600', '砚山县', '3');
INSERT INTO `wl_city` VALUES ('532623', '532600', '西畴县', '3');
INSERT INTO `wl_city` VALUES ('532624', '532600', '麻栗坡县', '3');
INSERT INTO `wl_city` VALUES ('532625', '532600', '马关县', '3');
INSERT INTO `wl_city` VALUES ('532626', '532600', '丘北县', '3');
INSERT INTO `wl_city` VALUES ('532627', '532600', '广南县', '3');
INSERT INTO `wl_city` VALUES ('532628', '532600', '富宁县', '3');
INSERT INTO `wl_city` VALUES ('532800', '530000', '西双版纳傣族自治州', '2');
INSERT INTO `wl_city` VALUES ('532801', '532800', '景洪市', '3');
INSERT INTO `wl_city` VALUES ('532822', '532800', '勐海县', '3');
INSERT INTO `wl_city` VALUES ('532823', '532800', '勐腊县', '3');
INSERT INTO `wl_city` VALUES ('532900', '530000', '大理白族自治州', '2');
INSERT INTO `wl_city` VALUES ('532901', '532900', '大理市', '3');
INSERT INTO `wl_city` VALUES ('532922', '532900', '漾濞彝族自治县', '3');
INSERT INTO `wl_city` VALUES ('532923', '532900', '祥云县', '3');
INSERT INTO `wl_city` VALUES ('532924', '532900', '宾川县', '3');
INSERT INTO `wl_city` VALUES ('532925', '532900', '弥渡县', '3');
INSERT INTO `wl_city` VALUES ('532926', '532900', '南涧彝族自治县', '3');
INSERT INTO `wl_city` VALUES ('532927', '532900', '巍山彝族回族自治县', '3');
INSERT INTO `wl_city` VALUES ('532928', '532900', '永平县', '3');
INSERT INTO `wl_city` VALUES ('532929', '532900', '云龙县', '3');
INSERT INTO `wl_city` VALUES ('532930', '532900', '洱源县', '3');
INSERT INTO `wl_city` VALUES ('532931', '532900', '剑川县', '3');
INSERT INTO `wl_city` VALUES ('532932', '532900', '鹤庆县', '3');
INSERT INTO `wl_city` VALUES ('533100', '530000', '德宏傣族景颇族自治州', '2');
INSERT INTO `wl_city` VALUES ('533102', '533100', '瑞丽市', '3');
INSERT INTO `wl_city` VALUES ('533103', '533100', '芒市', '3');
INSERT INTO `wl_city` VALUES ('533122', '533100', '梁河县', '3');
INSERT INTO `wl_city` VALUES ('533123', '533100', '盈江县', '3');
INSERT INTO `wl_city` VALUES ('533124', '533100', '陇川县', '3');
INSERT INTO `wl_city` VALUES ('533300', '530000', '怒江傈僳族自治州', '2');
INSERT INTO `wl_city` VALUES ('533321', '533300', '泸水县', '3');
INSERT INTO `wl_city` VALUES ('533323', '533300', '福贡县', '3');
INSERT INTO `wl_city` VALUES ('533324', '533300', '贡山独龙族怒族自治县', '3');
INSERT INTO `wl_city` VALUES ('533325', '533300', '兰坪白族普米族自治县', '3');
INSERT INTO `wl_city` VALUES ('533400', '530000', '迪庆藏族自治州', '2');
INSERT INTO `wl_city` VALUES ('533421', '533400', '香格里拉市', '3');
INSERT INTO `wl_city` VALUES ('533422', '533400', '德钦县', '3');
INSERT INTO `wl_city` VALUES ('533423', '533400', '维西傈僳族自治县', '3');
INSERT INTO `wl_city` VALUES ('540000', '100000', '西藏自治区', '1');
INSERT INTO `wl_city` VALUES ('540100', '540000', '拉萨市', '2');
INSERT INTO `wl_city` VALUES ('540102', '540100', '城关区', '3');
INSERT INTO `wl_city` VALUES ('540121', '540100', '林周县', '3');
INSERT INTO `wl_city` VALUES ('540122', '540100', '当雄县', '3');
INSERT INTO `wl_city` VALUES ('540123', '540100', '尼木县', '3');
INSERT INTO `wl_city` VALUES ('540124', '540100', '曲水县', '3');
INSERT INTO `wl_city` VALUES ('540125', '540100', '堆龙德庆县', '3');
INSERT INTO `wl_city` VALUES ('540126', '540100', '达孜县', '3');
INSERT INTO `wl_city` VALUES ('540127', '540100', '墨竹工卡县', '3');
INSERT INTO `wl_city` VALUES ('540200', '540000', '日喀则市', '2');
INSERT INTO `wl_city` VALUES ('540202', '540200', '桑珠孜区', '3');
INSERT INTO `wl_city` VALUES ('540221', '540200', '南木林县', '3');
INSERT INTO `wl_city` VALUES ('540222', '540200', '江孜县', '3');
INSERT INTO `wl_city` VALUES ('540223', '540200', '定日县', '3');
INSERT INTO `wl_city` VALUES ('540224', '540200', '萨迦县', '3');
INSERT INTO `wl_city` VALUES ('540225', '540200', '拉孜县', '3');
INSERT INTO `wl_city` VALUES ('540226', '540200', '昂仁县', '3');
INSERT INTO `wl_city` VALUES ('540227', '540200', '谢通门县', '3');
INSERT INTO `wl_city` VALUES ('540228', '540200', '白朗县', '3');
INSERT INTO `wl_city` VALUES ('540229', '540200', '仁布县', '3');
INSERT INTO `wl_city` VALUES ('540230', '540200', '康马县', '3');
INSERT INTO `wl_city` VALUES ('540231', '540200', '定结县', '3');
INSERT INTO `wl_city` VALUES ('540232', '540200', '仲巴县', '3');
INSERT INTO `wl_city` VALUES ('540233', '540200', '亚东县', '3');
INSERT INTO `wl_city` VALUES ('540234', '540200', '吉隆县', '3');
INSERT INTO `wl_city` VALUES ('540235', '540200', '聂拉木县', '3');
INSERT INTO `wl_city` VALUES ('540236', '540200', '萨嘎县', '3');
INSERT INTO `wl_city` VALUES ('540237', '540200', '岗巴县', '3');
INSERT INTO `wl_city` VALUES ('540300', '540000', '昌都市', '2');
INSERT INTO `wl_city` VALUES ('540302', '540300', '卡若区', '3');
INSERT INTO `wl_city` VALUES ('540321', '540300', '江达县', '3');
INSERT INTO `wl_city` VALUES ('540322', '540300', '贡觉县', '3');
INSERT INTO `wl_city` VALUES ('540323', '540300', '类乌齐县', '3');
INSERT INTO `wl_city` VALUES ('540324', '540300', '丁青县', '3');
INSERT INTO `wl_city` VALUES ('540325', '540300', '察雅县', '3');
INSERT INTO `wl_city` VALUES ('540326', '540300', '八宿县', '3');
INSERT INTO `wl_city` VALUES ('540327', '540300', '左贡县', '3');
INSERT INTO `wl_city` VALUES ('540328', '540300', '芒康县', '3');
INSERT INTO `wl_city` VALUES ('540329', '540300', '洛隆县', '3');
INSERT INTO `wl_city` VALUES ('540330', '540300', '边坝县', '3');
INSERT INTO `wl_city` VALUES ('542200', '540000', '山南地区', '2');
INSERT INTO `wl_city` VALUES ('542221', '542200', '乃东县', '3');
INSERT INTO `wl_city` VALUES ('542222', '542200', '扎囊县', '3');
INSERT INTO `wl_city` VALUES ('542223', '542200', '贡嘎县', '3');
INSERT INTO `wl_city` VALUES ('542224', '542200', '桑日县', '3');
INSERT INTO `wl_city` VALUES ('542225', '542200', '琼结县', '3');
INSERT INTO `wl_city` VALUES ('542226', '542200', '曲松县', '3');
INSERT INTO `wl_city` VALUES ('542227', '542200', '措美县', '3');
INSERT INTO `wl_city` VALUES ('542228', '542200', '洛扎县', '3');
INSERT INTO `wl_city` VALUES ('542229', '542200', '加查县', '3');
INSERT INTO `wl_city` VALUES ('542231', '542200', '隆子县', '3');
INSERT INTO `wl_city` VALUES ('542232', '542200', '错那县', '3');
INSERT INTO `wl_city` VALUES ('542233', '542200', '浪卡子县', '3');
INSERT INTO `wl_city` VALUES ('542400', '540000', '那曲地区', '2');
INSERT INTO `wl_city` VALUES ('542421', '542400', '那曲县', '3');
INSERT INTO `wl_city` VALUES ('542422', '542400', '嘉黎县', '3');
INSERT INTO `wl_city` VALUES ('542423', '542400', '比如县', '3');
INSERT INTO `wl_city` VALUES ('542424', '542400', '聂荣县', '3');
INSERT INTO `wl_city` VALUES ('542425', '542400', '安多县', '3');
INSERT INTO `wl_city` VALUES ('542426', '542400', '申扎县', '3');
INSERT INTO `wl_city` VALUES ('542427', '542400', '索县', '3');
INSERT INTO `wl_city` VALUES ('542428', '542400', '班戈县', '3');
INSERT INTO `wl_city` VALUES ('542429', '542400', '巴青县', '3');
INSERT INTO `wl_city` VALUES ('542430', '542400', '尼玛县', '3');
INSERT INTO `wl_city` VALUES ('542431', '542400', '双湖县', '3');
INSERT INTO `wl_city` VALUES ('542500', '540000', '阿里地区', '2');
INSERT INTO `wl_city` VALUES ('542521', '542500', '普兰县', '3');
INSERT INTO `wl_city` VALUES ('542522', '542500', '札达县', '3');
INSERT INTO `wl_city` VALUES ('542523', '542500', '噶尔县', '3');
INSERT INTO `wl_city` VALUES ('542524', '542500', '日土县', '3');
INSERT INTO `wl_city` VALUES ('542525', '542500', '革吉县', '3');
INSERT INTO `wl_city` VALUES ('542526', '542500', '改则县', '3');
INSERT INTO `wl_city` VALUES ('542527', '542500', '措勤县', '3');
INSERT INTO `wl_city` VALUES ('542600', '540000', '林芝地区', '2');
INSERT INTO `wl_city` VALUES ('542621', '542600', '林芝县', '3');
INSERT INTO `wl_city` VALUES ('542622', '542600', '工布江达县', '3');
INSERT INTO `wl_city` VALUES ('542623', '542600', '米林县', '3');
INSERT INTO `wl_city` VALUES ('542624', '542600', '墨脱县', '3');
INSERT INTO `wl_city` VALUES ('542625', '542600', '波密县', '3');
INSERT INTO `wl_city` VALUES ('542626', '542600', '察隅县', '3');
INSERT INTO `wl_city` VALUES ('542627', '542600', '朗县', '3');
INSERT INTO `wl_city` VALUES ('610000', '100000', '陕西省', '1');
INSERT INTO `wl_city` VALUES ('610100', '610000', '西安市', '2');
INSERT INTO `wl_city` VALUES ('610102', '610100', '新城区', '3');
INSERT INTO `wl_city` VALUES ('610103', '610100', '碑林区', '3');
INSERT INTO `wl_city` VALUES ('610104', '610100', '莲湖区', '3');
INSERT INTO `wl_city` VALUES ('610111', '610100', '灞桥区', '3');
INSERT INTO `wl_city` VALUES ('610112', '610100', '未央区', '3');
INSERT INTO `wl_city` VALUES ('610113', '610100', '雁塔区', '3');
INSERT INTO `wl_city` VALUES ('610114', '610100', '阎良区', '3');
INSERT INTO `wl_city` VALUES ('610115', '610100', '临潼区', '3');
INSERT INTO `wl_city` VALUES ('610116', '610100', '长安区', '3');
INSERT INTO `wl_city` VALUES ('610122', '610100', '蓝田县', '3');
INSERT INTO `wl_city` VALUES ('610124', '610100', '周至县', '3');
INSERT INTO `wl_city` VALUES ('610125', '610100', '户县', '3');
INSERT INTO `wl_city` VALUES ('610126', '610100', '高陵区', '3');
INSERT INTO `wl_city` VALUES ('610200', '610000', '铜川市', '2');
INSERT INTO `wl_city` VALUES ('610202', '610200', '王益区', '3');
INSERT INTO `wl_city` VALUES ('610203', '610200', '印台区', '3');
INSERT INTO `wl_city` VALUES ('610204', '610200', '耀州区', '3');
INSERT INTO `wl_city` VALUES ('610222', '610200', '宜君县', '3');
INSERT INTO `wl_city` VALUES ('610300', '610000', '宝鸡市', '2');
INSERT INTO `wl_city` VALUES ('610302', '610300', '渭滨区', '3');
INSERT INTO `wl_city` VALUES ('610303', '610300', '金台区', '3');
INSERT INTO `wl_city` VALUES ('610304', '610300', '陈仓区', '3');
INSERT INTO `wl_city` VALUES ('610322', '610300', '凤翔县', '3');
INSERT INTO `wl_city` VALUES ('610323', '610300', '岐山县', '3');
INSERT INTO `wl_city` VALUES ('610324', '610300', '扶风县', '3');
INSERT INTO `wl_city` VALUES ('610326', '610300', '眉县', '3');
INSERT INTO `wl_city` VALUES ('610327', '610300', '陇县', '3');
INSERT INTO `wl_city` VALUES ('610328', '610300', '千阳县', '3');
INSERT INTO `wl_city` VALUES ('610329', '610300', '麟游县', '3');
INSERT INTO `wl_city` VALUES ('610330', '610300', '凤县', '3');
INSERT INTO `wl_city` VALUES ('610331', '610300', '太白县', '3');
INSERT INTO `wl_city` VALUES ('610400', '610000', '咸阳市', '2');
INSERT INTO `wl_city` VALUES ('610402', '610400', '秦都区', '3');
INSERT INTO `wl_city` VALUES ('610403', '610400', '杨陵区', '3');
INSERT INTO `wl_city` VALUES ('610404', '610400', '渭城区', '3');
INSERT INTO `wl_city` VALUES ('610422', '610400', '三原县', '3');
INSERT INTO `wl_city` VALUES ('610423', '610400', '泾阳县', '3');
INSERT INTO `wl_city` VALUES ('610424', '610400', '乾县', '3');
INSERT INTO `wl_city` VALUES ('610425', '610400', '礼泉县', '3');
INSERT INTO `wl_city` VALUES ('610426', '610400', '永寿县', '3');
INSERT INTO `wl_city` VALUES ('610427', '610400', '彬县', '3');
INSERT INTO `wl_city` VALUES ('610428', '610400', '长武县', '3');
INSERT INTO `wl_city` VALUES ('610429', '610400', '旬邑县', '3');
INSERT INTO `wl_city` VALUES ('610430', '610400', '淳化县', '3');
INSERT INTO `wl_city` VALUES ('610431', '610400', '武功县', '3');
INSERT INTO `wl_city` VALUES ('610481', '610400', '兴平市', '3');
INSERT INTO `wl_city` VALUES ('610500', '610000', '渭南市', '2');
INSERT INTO `wl_city` VALUES ('610502', '610500', '临渭区', '3');
INSERT INTO `wl_city` VALUES ('610521', '610500', '华县', '3');
INSERT INTO `wl_city` VALUES ('610522', '610500', '潼关县', '3');
INSERT INTO `wl_city` VALUES ('610523', '610500', '大荔县', '3');
INSERT INTO `wl_city` VALUES ('610524', '610500', '合阳县', '3');
INSERT INTO `wl_city` VALUES ('610525', '610500', '澄城县', '3');
INSERT INTO `wl_city` VALUES ('610526', '610500', '蒲城县', '3');
INSERT INTO `wl_city` VALUES ('610527', '610500', '白水县', '3');
INSERT INTO `wl_city` VALUES ('610528', '610500', '富平县', '3');
INSERT INTO `wl_city` VALUES ('610581', '610500', '韩城市', '3');
INSERT INTO `wl_city` VALUES ('610582', '610500', '华阴市', '3');
INSERT INTO `wl_city` VALUES ('610600', '610000', '延安市', '2');
INSERT INTO `wl_city` VALUES ('610602', '610600', '宝塔区', '3');
INSERT INTO `wl_city` VALUES ('610621', '610600', '延长县', '3');
INSERT INTO `wl_city` VALUES ('610622', '610600', '延川县', '3');
INSERT INTO `wl_city` VALUES ('610623', '610600', '子长县', '3');
INSERT INTO `wl_city` VALUES ('610624', '610600', '安塞县', '3');
INSERT INTO `wl_city` VALUES ('610625', '610600', '志丹县', '3');
INSERT INTO `wl_city` VALUES ('610626', '610600', '吴起县', '3');
INSERT INTO `wl_city` VALUES ('610627', '610600', '甘泉县', '3');
INSERT INTO `wl_city` VALUES ('610628', '610600', '富县', '3');
INSERT INTO `wl_city` VALUES ('610629', '610600', '洛川县', '3');
INSERT INTO `wl_city` VALUES ('610630', '610600', '宜川县', '3');
INSERT INTO `wl_city` VALUES ('610631', '610600', '黄龙县', '3');
INSERT INTO `wl_city` VALUES ('610632', '610600', '黄陵县', '3');
INSERT INTO `wl_city` VALUES ('610700', '610000', '汉中市', '2');
INSERT INTO `wl_city` VALUES ('610702', '610700', '汉台区', '3');
INSERT INTO `wl_city` VALUES ('610721', '610700', '南郑县', '3');
INSERT INTO `wl_city` VALUES ('610722', '610700', '城固县', '3');
INSERT INTO `wl_city` VALUES ('610723', '610700', '洋县', '3');
INSERT INTO `wl_city` VALUES ('610724', '610700', '西乡县', '3');
INSERT INTO `wl_city` VALUES ('610725', '610700', '勉县', '3');
INSERT INTO `wl_city` VALUES ('610726', '610700', '宁强县', '3');
INSERT INTO `wl_city` VALUES ('610727', '610700', '略阳县', '3');
INSERT INTO `wl_city` VALUES ('610728', '610700', '镇巴县', '3');
INSERT INTO `wl_city` VALUES ('610729', '610700', '留坝县', '3');
INSERT INTO `wl_city` VALUES ('610730', '610700', '佛坪县', '3');
INSERT INTO `wl_city` VALUES ('610800', '610000', '榆林市', '2');
INSERT INTO `wl_city` VALUES ('610802', '610800', '榆阳区', '3');
INSERT INTO `wl_city` VALUES ('610821', '610800', '神木县', '3');
INSERT INTO `wl_city` VALUES ('610822', '610800', '府谷县', '3');
INSERT INTO `wl_city` VALUES ('610823', '610800', '横山县', '3');
INSERT INTO `wl_city` VALUES ('610824', '610800', '靖边县', '3');
INSERT INTO `wl_city` VALUES ('610825', '610800', '定边县', '3');
INSERT INTO `wl_city` VALUES ('610826', '610800', '绥德县', '3');
INSERT INTO `wl_city` VALUES ('610827', '610800', '米脂县', '3');
INSERT INTO `wl_city` VALUES ('610828', '610800', '佳县', '3');
INSERT INTO `wl_city` VALUES ('610829', '610800', '吴堡县', '3');
INSERT INTO `wl_city` VALUES ('610830', '610800', '清涧县', '3');
INSERT INTO `wl_city` VALUES ('610831', '610800', '子洲县', '3');
INSERT INTO `wl_city` VALUES ('610900', '610000', '安康市', '2');
INSERT INTO `wl_city` VALUES ('610902', '610900', '汉滨区', '3');
INSERT INTO `wl_city` VALUES ('610921', '610900', '汉阴县', '3');
INSERT INTO `wl_city` VALUES ('610922', '610900', '石泉县', '3');
INSERT INTO `wl_city` VALUES ('610923', '610900', '宁陕县', '3');
INSERT INTO `wl_city` VALUES ('610924', '610900', '紫阳县', '3');
INSERT INTO `wl_city` VALUES ('610925', '610900', '岚皋县', '3');
INSERT INTO `wl_city` VALUES ('610926', '610900', '平利县', '3');
INSERT INTO `wl_city` VALUES ('610927', '610900', '镇坪县', '3');
INSERT INTO `wl_city` VALUES ('610928', '610900', '旬阳县', '3');
INSERT INTO `wl_city` VALUES ('610929', '610900', '白河县', '3');
INSERT INTO `wl_city` VALUES ('611000', '610000', '商洛市', '2');
INSERT INTO `wl_city` VALUES ('611002', '611000', '商州区', '3');
INSERT INTO `wl_city` VALUES ('611021', '611000', '洛南县', '3');
INSERT INTO `wl_city` VALUES ('611022', '611000', '丹凤县', '3');
INSERT INTO `wl_city` VALUES ('611023', '611000', '商南县', '3');
INSERT INTO `wl_city` VALUES ('611024', '611000', '山阳县', '3');
INSERT INTO `wl_city` VALUES ('611025', '611000', '镇安县', '3');
INSERT INTO `wl_city` VALUES ('611026', '611000', '柞水县', '3');
INSERT INTO `wl_city` VALUES ('611100', '610000', '西咸新区', '2');
INSERT INTO `wl_city` VALUES ('611101', '611100', '空港新城', '3');
INSERT INTO `wl_city` VALUES ('611102', '611100', '沣东新城', '3');
INSERT INTO `wl_city` VALUES ('611103', '611100', '秦汉新城', '3');
INSERT INTO `wl_city` VALUES ('611104', '611100', '沣西新城', '3');
INSERT INTO `wl_city` VALUES ('611105', '611100', '泾河新城', '3');
INSERT INTO `wl_city` VALUES ('620000', '100000', '甘肃省', '1');
INSERT INTO `wl_city` VALUES ('620100', '620000', '兰州市', '2');
INSERT INTO `wl_city` VALUES ('620102', '620100', '城关区', '3');
INSERT INTO `wl_city` VALUES ('620103', '620100', '七里河区', '3');
INSERT INTO `wl_city` VALUES ('620104', '620100', '西固区', '3');
INSERT INTO `wl_city` VALUES ('620105', '620100', '安宁区', '3');
INSERT INTO `wl_city` VALUES ('620111', '620100', '红古区', '3');
INSERT INTO `wl_city` VALUES ('620121', '620100', '永登县', '3');
INSERT INTO `wl_city` VALUES ('620122', '620100', '皋兰县', '3');
INSERT INTO `wl_city` VALUES ('620123', '620100', '榆中县', '3');
INSERT INTO `wl_city` VALUES ('620200', '620000', '嘉峪关市', '2');
INSERT INTO `wl_city` VALUES ('620201', '620200', '雄关区', '3');
INSERT INTO `wl_city` VALUES ('620202', '620200', '长城区', '3');
INSERT INTO `wl_city` VALUES ('620203', '620200', '镜铁区', '3');
INSERT INTO `wl_city` VALUES ('620300', '620000', '金昌市', '2');
INSERT INTO `wl_city` VALUES ('620302', '620300', '金川区', '3');
INSERT INTO `wl_city` VALUES ('620321', '620300', '永昌县', '3');
INSERT INTO `wl_city` VALUES ('620400', '620000', '白银市', '2');
INSERT INTO `wl_city` VALUES ('620402', '620400', '白银区', '3');
INSERT INTO `wl_city` VALUES ('620403', '620400', '平川区', '3');
INSERT INTO `wl_city` VALUES ('620421', '620400', '靖远县', '3');
INSERT INTO `wl_city` VALUES ('620422', '620400', '会宁县', '3');
INSERT INTO `wl_city` VALUES ('620423', '620400', '景泰县', '3');
INSERT INTO `wl_city` VALUES ('620500', '620000', '天水市', '2');
INSERT INTO `wl_city` VALUES ('620502', '620500', '秦州区', '3');
INSERT INTO `wl_city` VALUES ('620503', '620500', '麦积区', '3');
INSERT INTO `wl_city` VALUES ('620521', '620500', '清水县', '3');
INSERT INTO `wl_city` VALUES ('620522', '620500', '秦安县', '3');
INSERT INTO `wl_city` VALUES ('620523', '620500', '甘谷县', '3');
INSERT INTO `wl_city` VALUES ('620524', '620500', '武山县', '3');
INSERT INTO `wl_city` VALUES ('620525', '620500', '张家川回族自治县', '3');
INSERT INTO `wl_city` VALUES ('620600', '620000', '武威市', '2');
INSERT INTO `wl_city` VALUES ('620602', '620600', '凉州区', '3');
INSERT INTO `wl_city` VALUES ('620621', '620600', '民勤县', '3');
INSERT INTO `wl_city` VALUES ('620622', '620600', '古浪县', '3');
INSERT INTO `wl_city` VALUES ('620623', '620600', '天祝藏族自治县', '3');
INSERT INTO `wl_city` VALUES ('620700', '620000', '张掖市', '2');
INSERT INTO `wl_city` VALUES ('620702', '620700', '甘州区', '3');
INSERT INTO `wl_city` VALUES ('620721', '620700', '肃南裕固族自治县', '3');
INSERT INTO `wl_city` VALUES ('620722', '620700', '民乐县', '3');
INSERT INTO `wl_city` VALUES ('620723', '620700', '临泽县', '3');
INSERT INTO `wl_city` VALUES ('620724', '620700', '高台县', '3');
INSERT INTO `wl_city` VALUES ('620725', '620700', '山丹县', '3');
INSERT INTO `wl_city` VALUES ('620800', '620000', '平凉市', '2');
INSERT INTO `wl_city` VALUES ('620802', '620800', '崆峒区', '3');
INSERT INTO `wl_city` VALUES ('620821', '620800', '泾川县', '3');
INSERT INTO `wl_city` VALUES ('620822', '620800', '灵台县', '3');
INSERT INTO `wl_city` VALUES ('620823', '620800', '崇信县', '3');
INSERT INTO `wl_city` VALUES ('620824', '620800', '华亭县', '3');
INSERT INTO `wl_city` VALUES ('620825', '620800', '庄浪县', '3');
INSERT INTO `wl_city` VALUES ('620826', '620800', '静宁县', '3');
INSERT INTO `wl_city` VALUES ('620900', '620000', '酒泉市', '2');
INSERT INTO `wl_city` VALUES ('620902', '620900', '肃州区', '3');
INSERT INTO `wl_city` VALUES ('620921', '620900', '金塔县', '3');
INSERT INTO `wl_city` VALUES ('620922', '620900', '瓜州县', '3');
INSERT INTO `wl_city` VALUES ('620923', '620900', '肃北蒙古族自治县', '3');
INSERT INTO `wl_city` VALUES ('620924', '620900', '阿克塞哈萨克族自治县', '3');
INSERT INTO `wl_city` VALUES ('620981', '620900', '玉门市', '3');
INSERT INTO `wl_city` VALUES ('620982', '620900', '敦煌市', '3');
INSERT INTO `wl_city` VALUES ('621000', '620000', '庆阳市', '2');
INSERT INTO `wl_city` VALUES ('621002', '621000', '西峰区', '3');
INSERT INTO `wl_city` VALUES ('621021', '621000', '庆城县', '3');
INSERT INTO `wl_city` VALUES ('621022', '621000', '环县', '3');
INSERT INTO `wl_city` VALUES ('621023', '621000', '华池县', '3');
INSERT INTO `wl_city` VALUES ('621024', '621000', '合水县', '3');
INSERT INTO `wl_city` VALUES ('621025', '621000', '正宁县', '3');
INSERT INTO `wl_city` VALUES ('621026', '621000', '宁县', '3');
INSERT INTO `wl_city` VALUES ('621027', '621000', '镇原县', '3');
INSERT INTO `wl_city` VALUES ('621100', '620000', '定西市', '2');
INSERT INTO `wl_city` VALUES ('621102', '621100', '安定区', '3');
INSERT INTO `wl_city` VALUES ('621121', '621100', '通渭县', '3');
INSERT INTO `wl_city` VALUES ('621122', '621100', '陇西县', '3');
INSERT INTO `wl_city` VALUES ('621123', '621100', '渭源县', '3');
INSERT INTO `wl_city` VALUES ('621124', '621100', '临洮县', '3');
INSERT INTO `wl_city` VALUES ('621125', '621100', '漳县', '3');
INSERT INTO `wl_city` VALUES ('621126', '621100', '岷县', '3');
INSERT INTO `wl_city` VALUES ('621200', '620000', '陇南市', '2');
INSERT INTO `wl_city` VALUES ('621202', '621200', '武都区', '3');
INSERT INTO `wl_city` VALUES ('621221', '621200', '成县', '3');
INSERT INTO `wl_city` VALUES ('621222', '621200', '文县', '3');
INSERT INTO `wl_city` VALUES ('621223', '621200', '宕昌县', '3');
INSERT INTO `wl_city` VALUES ('621224', '621200', '康县', '3');
INSERT INTO `wl_city` VALUES ('621225', '621200', '西和县', '3');
INSERT INTO `wl_city` VALUES ('621226', '621200', '礼县', '3');
INSERT INTO `wl_city` VALUES ('621227', '621200', '徽县', '3');
INSERT INTO `wl_city` VALUES ('621228', '621200', '两当县', '3');
INSERT INTO `wl_city` VALUES ('622900', '620000', '临夏回族自治州', '2');
INSERT INTO `wl_city` VALUES ('622901', '622900', '临夏市', '3');
INSERT INTO `wl_city` VALUES ('622921', '622900', '临夏县', '3');
INSERT INTO `wl_city` VALUES ('622922', '622900', '康乐县', '3');
INSERT INTO `wl_city` VALUES ('622923', '622900', '永靖县', '3');
INSERT INTO `wl_city` VALUES ('622924', '622900', '广河县', '3');
INSERT INTO `wl_city` VALUES ('622925', '622900', '和政县', '3');
INSERT INTO `wl_city` VALUES ('622926', '622900', '东乡族自治县', '3');
INSERT INTO `wl_city` VALUES ('622927', '622900', '积石山保安族东乡族撒拉族自治县', '3');
INSERT INTO `wl_city` VALUES ('623000', '620000', '甘南藏族自治州', '2');
INSERT INTO `wl_city` VALUES ('623001', '623000', '合作市', '3');
INSERT INTO `wl_city` VALUES ('623021', '623000', '临潭县', '3');
INSERT INTO `wl_city` VALUES ('623022', '623000', '卓尼县', '3');
INSERT INTO `wl_city` VALUES ('623023', '623000', '舟曲县', '3');
INSERT INTO `wl_city` VALUES ('623024', '623000', '迭部县', '3');
INSERT INTO `wl_city` VALUES ('623025', '623000', '玛曲县', '3');
INSERT INTO `wl_city` VALUES ('623026', '623000', '碌曲县', '3');
INSERT INTO `wl_city` VALUES ('623027', '623000', '夏河县', '3');
INSERT INTO `wl_city` VALUES ('630000', '100000', '青海省', '1');
INSERT INTO `wl_city` VALUES ('630100', '630000', '西宁市', '2');
INSERT INTO `wl_city` VALUES ('630102', '630100', '城东区', '3');
INSERT INTO `wl_city` VALUES ('630103', '630100', '城中区', '3');
INSERT INTO `wl_city` VALUES ('630104', '630100', '城西区', '3');
INSERT INTO `wl_city` VALUES ('630105', '630100', '城北区', '3');
INSERT INTO `wl_city` VALUES ('630121', '630100', '大通回族土族自治县', '3');
INSERT INTO `wl_city` VALUES ('630122', '630100', '湟中县', '3');
INSERT INTO `wl_city` VALUES ('630123', '630100', '湟源县', '3');
INSERT INTO `wl_city` VALUES ('630200', '630000', '海东市', '2');
INSERT INTO `wl_city` VALUES ('630202', '630200', '乐都区', '3');
INSERT INTO `wl_city` VALUES ('630221', '630200', '平安县', '3');
INSERT INTO `wl_city` VALUES ('630222', '630200', '民和回族土族自治县', '3');
INSERT INTO `wl_city` VALUES ('630223', '630200', '互助土族自治县', '3');
INSERT INTO `wl_city` VALUES ('630224', '630200', '化隆回族自治县', '3');
INSERT INTO `wl_city` VALUES ('630225', '630200', '循化撒拉族自治县', '3');
INSERT INTO `wl_city` VALUES ('632200', '630000', '海北藏族自治州', '2');
INSERT INTO `wl_city` VALUES ('632221', '632200', '门源回族自治县', '3');
INSERT INTO `wl_city` VALUES ('632222', '632200', '祁连县', '3');
INSERT INTO `wl_city` VALUES ('632223', '632200', '海晏县', '3');
INSERT INTO `wl_city` VALUES ('632224', '632200', '刚察县', '3');
INSERT INTO `wl_city` VALUES ('632300', '630000', '黄南藏族自治州', '2');
INSERT INTO `wl_city` VALUES ('632321', '632300', '同仁县', '3');
INSERT INTO `wl_city` VALUES ('632322', '632300', '尖扎县', '3');
INSERT INTO `wl_city` VALUES ('632323', '632300', '泽库县', '3');
INSERT INTO `wl_city` VALUES ('632324', '632300', '河南蒙古族自治县', '3');
INSERT INTO `wl_city` VALUES ('632500', '630000', '海南藏族自治州', '2');
INSERT INTO `wl_city` VALUES ('632521', '632500', '共和县', '3');
INSERT INTO `wl_city` VALUES ('632522', '632500', '同德县', '3');
INSERT INTO `wl_city` VALUES ('632523', '632500', '贵德县', '3');
INSERT INTO `wl_city` VALUES ('632524', '632500', '兴海县', '3');
INSERT INTO `wl_city` VALUES ('632525', '632500', '贵南县', '3');
INSERT INTO `wl_city` VALUES ('632600', '630000', '果洛藏族自治州', '2');
INSERT INTO `wl_city` VALUES ('632621', '632600', '玛沁县', '3');
INSERT INTO `wl_city` VALUES ('632622', '632600', '班玛县', '3');
INSERT INTO `wl_city` VALUES ('632623', '632600', '甘德县', '3');
INSERT INTO `wl_city` VALUES ('632624', '632600', '达日县', '3');
INSERT INTO `wl_city` VALUES ('632625', '632600', '久治县', '3');
INSERT INTO `wl_city` VALUES ('632626', '632600', '玛多县', '3');
INSERT INTO `wl_city` VALUES ('632700', '630000', '玉树藏族自治州', '2');
INSERT INTO `wl_city` VALUES ('632701', '632700', '玉树市', '3');
INSERT INTO `wl_city` VALUES ('632722', '632700', '杂多县', '3');
INSERT INTO `wl_city` VALUES ('632723', '632700', '称多县', '3');
INSERT INTO `wl_city` VALUES ('632724', '632700', '治多县', '3');
INSERT INTO `wl_city` VALUES ('632725', '632700', '囊谦县', '3');
INSERT INTO `wl_city` VALUES ('632726', '632700', '曲麻莱县', '3');
INSERT INTO `wl_city` VALUES ('632800', '630000', '海西蒙古族藏族自治州', '2');
INSERT INTO `wl_city` VALUES ('632801', '632800', '格尔木市', '3');
INSERT INTO `wl_city` VALUES ('632802', '632800', '德令哈市', '3');
INSERT INTO `wl_city` VALUES ('632821', '632800', '乌兰县', '3');
INSERT INTO `wl_city` VALUES ('632822', '632800', '都兰县', '3');
INSERT INTO `wl_city` VALUES ('632823', '632800', '天峻县', '3');
INSERT INTO `wl_city` VALUES ('640000', '100000', '宁夏回族自治区', '1');
INSERT INTO `wl_city` VALUES ('640100', '640000', '银川市', '2');
INSERT INTO `wl_city` VALUES ('640104', '640100', '兴庆区', '3');
INSERT INTO `wl_city` VALUES ('640105', '640100', '西夏区', '3');
INSERT INTO `wl_city` VALUES ('640106', '640100', '金凤区', '3');
INSERT INTO `wl_city` VALUES ('640121', '640100', '永宁县', '3');
INSERT INTO `wl_city` VALUES ('640122', '640100', '贺兰县', '3');
INSERT INTO `wl_city` VALUES ('640181', '640100', '灵武市', '3');
INSERT INTO `wl_city` VALUES ('640200', '640000', '石嘴山市', '2');
INSERT INTO `wl_city` VALUES ('640202', '640200', '大武口区', '3');
INSERT INTO `wl_city` VALUES ('640205', '640200', '惠农区', '3');
INSERT INTO `wl_city` VALUES ('640221', '640200', '平罗县', '3');
INSERT INTO `wl_city` VALUES ('640300', '640000', '吴忠市', '2');
INSERT INTO `wl_city` VALUES ('640302', '640300', '利通区', '3');
INSERT INTO `wl_city` VALUES ('640303', '640300', '红寺堡区', '3');
INSERT INTO `wl_city` VALUES ('640323', '640300', '盐池县', '3');
INSERT INTO `wl_city` VALUES ('640324', '640300', '同心县', '3');
INSERT INTO `wl_city` VALUES ('640381', '640300', '青铜峡市', '3');
INSERT INTO `wl_city` VALUES ('640400', '640000', '固原市', '2');
INSERT INTO `wl_city` VALUES ('640402', '640400', '原州区', '3');
INSERT INTO `wl_city` VALUES ('640422', '640400', '西吉县', '3');
INSERT INTO `wl_city` VALUES ('640423', '640400', '隆德县', '3');
INSERT INTO `wl_city` VALUES ('640424', '640400', '泾源县', '3');
INSERT INTO `wl_city` VALUES ('640425', '640400', '彭阳县', '3');
INSERT INTO `wl_city` VALUES ('640500', '640000', '中卫市', '2');
INSERT INTO `wl_city` VALUES ('640502', '640500', '沙坡头区', '3');
INSERT INTO `wl_city` VALUES ('640521', '640500', '中宁县', '3');
INSERT INTO `wl_city` VALUES ('640522', '640500', '海原县', '3');
INSERT INTO `wl_city` VALUES ('650000', '100000', '新疆维吾尔自治区', '1');
INSERT INTO `wl_city` VALUES ('650100', '650000', '乌鲁木齐市', '2');
INSERT INTO `wl_city` VALUES ('650102', '650100', '天山区', '3');
INSERT INTO `wl_city` VALUES ('650103', '650100', '沙依巴克区', '3');
INSERT INTO `wl_city` VALUES ('650104', '650100', '新市区', '3');
INSERT INTO `wl_city` VALUES ('650105', '650100', '水磨沟区', '3');
INSERT INTO `wl_city` VALUES ('650106', '650100', '头屯河区', '3');
INSERT INTO `wl_city` VALUES ('650107', '650100', '达坂城区', '3');
INSERT INTO `wl_city` VALUES ('650109', '650100', '米东区', '3');
INSERT INTO `wl_city` VALUES ('650121', '650100', '乌鲁木齐县', '3');
INSERT INTO `wl_city` VALUES ('650200', '650000', '克拉玛依市', '2');
INSERT INTO `wl_city` VALUES ('650202', '650200', '独山子区', '3');
INSERT INTO `wl_city` VALUES ('650203', '650200', '克拉玛依区', '3');
INSERT INTO `wl_city` VALUES ('650204', '650200', '白碱滩区', '3');
INSERT INTO `wl_city` VALUES ('650205', '650200', '乌尔禾区', '3');
INSERT INTO `wl_city` VALUES ('652100', '650000', '吐鲁番地区', '2');
INSERT INTO `wl_city` VALUES ('652101', '652100', '吐鲁番市', '3');
INSERT INTO `wl_city` VALUES ('652122', '652100', '鄯善县', '3');
INSERT INTO `wl_city` VALUES ('652123', '652100', '托克逊县', '3');
INSERT INTO `wl_city` VALUES ('652200', '650000', '哈密地区', '2');
INSERT INTO `wl_city` VALUES ('652201', '652200', '哈密市', '3');
INSERT INTO `wl_city` VALUES ('652222', '652200', '巴里坤哈萨克自治县', '3');
INSERT INTO `wl_city` VALUES ('652223', '652200', '伊吾县', '3');
INSERT INTO `wl_city` VALUES ('652300', '650000', '昌吉回族自治州', '2');
INSERT INTO `wl_city` VALUES ('652301', '652300', '昌吉市', '3');
INSERT INTO `wl_city` VALUES ('652302', '652300', '阜康市', '3');
INSERT INTO `wl_city` VALUES ('652323', '652300', '呼图壁县', '3');
INSERT INTO `wl_city` VALUES ('652324', '652300', '玛纳斯县', '3');
INSERT INTO `wl_city` VALUES ('652325', '652300', '奇台县', '3');
INSERT INTO `wl_city` VALUES ('652327', '652300', '吉木萨尔县', '3');
INSERT INTO `wl_city` VALUES ('652328', '652300', '木垒哈萨克自治县', '3');
INSERT INTO `wl_city` VALUES ('652700', '650000', '博尔塔拉蒙古自治州', '2');
INSERT INTO `wl_city` VALUES ('652701', '652700', '博乐市', '3');
INSERT INTO `wl_city` VALUES ('652702', '652700', '阿拉山口市', '3');
INSERT INTO `wl_city` VALUES ('652722', '652700', '精河县', '3');
INSERT INTO `wl_city` VALUES ('652723', '652700', '温泉县', '3');
INSERT INTO `wl_city` VALUES ('652800', '650000', '巴音郭楞蒙古自治州', '2');
INSERT INTO `wl_city` VALUES ('652801', '652800', '库尔勒市', '3');
INSERT INTO `wl_city` VALUES ('652822', '652800', '轮台县', '3');
INSERT INTO `wl_city` VALUES ('652823', '652800', '尉犁县', '3');
INSERT INTO `wl_city` VALUES ('652824', '652800', '若羌县', '3');
INSERT INTO `wl_city` VALUES ('652825', '652800', '且末县', '3');
INSERT INTO `wl_city` VALUES ('652826', '652800', '焉耆回族自治县', '3');
INSERT INTO `wl_city` VALUES ('652827', '652800', '和静县', '3');
INSERT INTO `wl_city` VALUES ('652828', '652800', '和硕县', '3');
INSERT INTO `wl_city` VALUES ('652829', '652800', '博湖县', '3');
INSERT INTO `wl_city` VALUES ('652900', '650000', '阿克苏地区', '2');
INSERT INTO `wl_city` VALUES ('652901', '652900', '阿克苏市', '3');
INSERT INTO `wl_city` VALUES ('652922', '652900', '温宿县', '3');
INSERT INTO `wl_city` VALUES ('652923', '652900', '库车县', '3');
INSERT INTO `wl_city` VALUES ('652924', '652900', '沙雅县', '3');
INSERT INTO `wl_city` VALUES ('652925', '652900', '新和县', '3');
INSERT INTO `wl_city` VALUES ('652926', '652900', '拜城县', '3');
INSERT INTO `wl_city` VALUES ('652927', '652900', '乌什县', '3');
INSERT INTO `wl_city` VALUES ('652928', '652900', '阿瓦提县', '3');
INSERT INTO `wl_city` VALUES ('652929', '652900', '柯坪县', '3');
INSERT INTO `wl_city` VALUES ('653000', '650000', '克孜勒苏柯尔克孜自治州', '2');
INSERT INTO `wl_city` VALUES ('653001', '653000', '阿图什市', '3');
INSERT INTO `wl_city` VALUES ('653022', '653000', '阿克陶县', '3');
INSERT INTO `wl_city` VALUES ('653023', '653000', '阿合奇县', '3');
INSERT INTO `wl_city` VALUES ('653024', '653000', '乌恰县', '3');
INSERT INTO `wl_city` VALUES ('653100', '650000', '喀什地区', '2');
INSERT INTO `wl_city` VALUES ('653101', '653100', '喀什市', '3');
INSERT INTO `wl_city` VALUES ('653121', '653100', '疏附县', '3');
INSERT INTO `wl_city` VALUES ('653122', '653100', '疏勒县', '3');
INSERT INTO `wl_city` VALUES ('653123', '653100', '英吉沙县', '3');
INSERT INTO `wl_city` VALUES ('653124', '653100', '泽普县', '3');
INSERT INTO `wl_city` VALUES ('653125', '653100', '莎车县', '3');
INSERT INTO `wl_city` VALUES ('653126', '653100', '叶城县', '3');
INSERT INTO `wl_city` VALUES ('653127', '653100', '麦盖提县', '3');
INSERT INTO `wl_city` VALUES ('653128', '653100', '岳普湖县', '3');
INSERT INTO `wl_city` VALUES ('653129', '653100', '伽师县', '3');
INSERT INTO `wl_city` VALUES ('653130', '653100', '巴楚县', '3');
INSERT INTO `wl_city` VALUES ('653131', '653100', '塔什库尔干塔吉克自治县', '3');
INSERT INTO `wl_city` VALUES ('653200', '650000', '和田地区', '2');
INSERT INTO `wl_city` VALUES ('653201', '653200', '和田市', '3');
INSERT INTO `wl_city` VALUES ('653221', '653200', '和田县', '3');
INSERT INTO `wl_city` VALUES ('653222', '653200', '墨玉县', '3');
INSERT INTO `wl_city` VALUES ('653223', '653200', '皮山县', '3');
INSERT INTO `wl_city` VALUES ('653224', '653200', '洛浦县', '3');
INSERT INTO `wl_city` VALUES ('653225', '653200', '策勒县', '3');
INSERT INTO `wl_city` VALUES ('653226', '653200', '于田县', '3');
INSERT INTO `wl_city` VALUES ('653227', '653200', '民丰县', '3');
INSERT INTO `wl_city` VALUES ('654000', '650000', '伊犁哈萨克自治州', '2');
INSERT INTO `wl_city` VALUES ('654002', '654000', '伊宁市', '3');
INSERT INTO `wl_city` VALUES ('654003', '654000', '奎屯市', '3');
INSERT INTO `wl_city` VALUES ('654004', '654000', '霍尔果斯市', '3');
INSERT INTO `wl_city` VALUES ('654021', '654000', '伊宁县', '3');
INSERT INTO `wl_city` VALUES ('654022', '654000', '察布查尔锡伯自治县', '3');
INSERT INTO `wl_city` VALUES ('654023', '654000', '霍城县', '3');
INSERT INTO `wl_city` VALUES ('654024', '654000', '巩留县', '3');
INSERT INTO `wl_city` VALUES ('654025', '654000', '新源县', '3');
INSERT INTO `wl_city` VALUES ('654026', '654000', '昭苏县', '3');
INSERT INTO `wl_city` VALUES ('654027', '654000', '特克斯县', '3');
INSERT INTO `wl_city` VALUES ('654028', '654000', '尼勒克县', '3');
INSERT INTO `wl_city` VALUES ('654200', '650000', '塔城地区', '2');
INSERT INTO `wl_city` VALUES ('654201', '654200', '塔城市', '3');
INSERT INTO `wl_city` VALUES ('654202', '654200', '乌苏市', '3');
INSERT INTO `wl_city` VALUES ('654221', '654200', '额敏县', '3');
INSERT INTO `wl_city` VALUES ('654223', '654200', '沙湾县', '3');
INSERT INTO `wl_city` VALUES ('654224', '654200', '托里县', '3');
INSERT INTO `wl_city` VALUES ('654225', '654200', '裕民县', '3');
INSERT INTO `wl_city` VALUES ('654226', '654200', '和布克赛尔蒙古自治县', '3');
INSERT INTO `wl_city` VALUES ('654300', '650000', '阿勒泰地区', '2');
INSERT INTO `wl_city` VALUES ('654301', '654300', '阿勒泰市', '3');
INSERT INTO `wl_city` VALUES ('654321', '654300', '布尔津县', '3');
INSERT INTO `wl_city` VALUES ('654322', '654300', '富蕴县', '3');
INSERT INTO `wl_city` VALUES ('654323', '654300', '福海县', '3');
INSERT INTO `wl_city` VALUES ('654324', '654300', '哈巴河县', '3');
INSERT INTO `wl_city` VALUES ('654325', '654300', '青河县', '3');
INSERT INTO `wl_city` VALUES ('654326', '654300', '吉木乃县', '3');
INSERT INTO `wl_city` VALUES ('659000', '650000', '直辖县级', '2');
INSERT INTO `wl_city` VALUES ('659001', '659000', '石河子市', '3');
INSERT INTO `wl_city` VALUES ('659002', '659000', '阿拉尔市', '3');
INSERT INTO `wl_city` VALUES ('659003', '659000', '图木舒克市', '3');
INSERT INTO `wl_city` VALUES ('659004', '659000', '五家渠市', '3');
INSERT INTO `wl_city` VALUES ('659005', '659000', '北屯市', '3');
INSERT INTO `wl_city` VALUES ('659006', '659000', '铁门关市', '3');
INSERT INTO `wl_city` VALUES ('659007', '659000', '双河市', '3');
INSERT INTO `wl_city` VALUES ('710000', '100000', '台湾省', '1');
INSERT INTO `wl_city` VALUES ('710100', '710000', '台湾', '2');
INSERT INTO `wl_city` VALUES ('810000', '100000', '香港', '1');
INSERT INTO `wl_city` VALUES ('810100', '810000', '香港', '2');
INSERT INTO `wl_city` VALUES ('820000', '100000', '澳门', '1');
INSERT INTO `wl_city` VALUES ('820100', '820000', '澳门', '2');

-- ----------------------------
-- Table structure for wl_links
-- ----------------------------
DROP TABLE IF EXISTS `wl_links`;
CREATE TABLE `wl_links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '链接名称',
  `url` varchar(100) NOT NULL DEFAULT '' COMMENT '链接URL',
  `image` varchar(100) DEFAULT NULL COMMENT '图片',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `status` int(1) DEFAULT '0' COMMENT '0:不通过 1:通过',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `type` int(3) NOT NULL DEFAULT '0' COMMENT '分类ID',
  `beizhu` varchar(255) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='网站设置表';

-- ----------------------------
-- Records of wl_links
-- ----------------------------
INSERT INTO `wl_links` VALUES ('16', '竞价开户', 'http://www.aisoker.com/', null, '0', '1', '1436070371', '1', '');
INSERT INTO `wl_links` VALUES ('22', '网站建设', 'http://www.aisoker.com/', null, '0', '1', '1436079685', '1', '');
INSERT INTO `wl_links` VALUES ('24', '爱搜客', 'http://www.aisoker.com/', null, '0', '1', '1464080689', '2', '');
INSERT INTO `wl_links` VALUES ('28', '逛优惠', 'http://www.ccnno.com', null, '0', '1', '0', '1', null);

-- ----------------------------
-- Table structure for wl_member
-- ----------------------------
DROP TABLE IF EXISTS `wl_member`;
CREATE TABLE `wl_member` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` char(20) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `nickname` char(50) NOT NULL DEFAULT '',
  `regadds` char(100) NOT NULL DEFAULT '' COMMENT '注册地址',
  `regdate` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '注册时间',
  `lastdate` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '最后登录时间',
  `regip` char(15) NOT NULL DEFAULT '' COMMENT '注册IP',
  `lastip` char(15) NOT NULL DEFAULT '' COMMENT '最后登录IP',
  `loginnum` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '登录次数',
  `email` char(32) NOT NULL DEFAULT '' COMMENT '邮箱',
  `groupid` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '会员组ID',
  `overdate` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '过期时间',
  `qq` char(32) NOT NULL DEFAULT '' COMMENT 'qq',
  `get_password_code` char(100) NOT NULL DEFAULT '' COMMENT '找回密码code',
  `get_password_info` char(100) NOT NULL DEFAULT '' COMMENT '找回密码信息（记录生成code时间，IP，次数等信息）',
  `tel` char(32) DEFAULT NULL COMMENT '电话',
  `name` char(32) DEFAULT NULL COMMENT '真实姓名',
  `connectid` char(40) DEFAULT NULL COMMENT '腾讯的openid',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`(20))
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wl_member
-- ----------------------------
INSERT INTO `wl_member` VALUES ('7', 'vips', '4297f44b13955235245b2497399d7a93', 'sdfddf1', '本机地址', '1440989561', '1440989561', '127.0.0.1', '', '1', 'sdf51@qq.com', '2', '1439866320', '', '', '', '', 'te', '');
INSERT INTO `wl_member` VALUES ('8', 'dfsdf', '96e79218965eb72c92a549dd5a330112', '112', '本机地址', '1441070467', '1443087701', '127.0.0.1', '127.0.0.1', '5', '123@qq.com', '1', '0', '', '036ab3330a923444e09a8b8ff708fdbc', 'array (\n  \'code_time\' => \'1443087728\',\n)', '', 'te', '');
INSERT INTO `wl_member` VALUES ('10', '1111', '96e79218965eb72c92a549dd5a330112', '4444', '本机地址', '1441075105', '1441075105', '127.0.0.1', '', '0', '1212@qq.com', '1', '1441852680', '', '', '', '', 'te', '');
INSERT INTO `wl_member` VALUES ('14', 'test', 'e10adc3949ba59abbe56e057f20f883e', 'ddsdfsdf', '本机地址', '1441156435', '1512387381', '127.0.0.1', '127.0.0.1', '78', '329255343@qq.com', '1', '0', '329255343', '4d8c58e78f478031ee97d237a74408d5', 'array (\n  \'code_time\' => \'1490240331\',\n)', '132565656', '张三', '904AAD5FD05720A770D5996CDEC8CF3A');
INSERT INTO `wl_member` VALUES ('16', 'test2', '4297f44b13955235245b2497399d7a93', '哈哈', '本机地址', '1441138018', '1441138044', '127.0.0.1', '127.0.0.1', '2', 'sdfsd7767@qq.com', '2', '1446249600', '', '', '', '', 'te', '');
INSERT INTO `wl_member` VALUES ('19', 'test3', 'e10adc3949ba59abbe56e057f20f883e', 'sdfsdfsdfdsf', '本机地址', '1444437267', '1446321074', '127.0.0.1', '127.0.0.1', '3', '35262652@qq.com', '2', '1446249600', '', '', '', '', 'te', '');

-- ----------------------------
-- Table structure for wl_member_baoming
-- ----------------------------
DROP TABLE IF EXISTS `wl_member_baoming`;
CREATE TABLE `wl_member_baoming` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `model` varchar(50) DEFAULT NULL COMMENT '文章模块',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `username` char(50) DEFAULT NULL COMMENT '用户名',
  `userid` int(10) unsigned DEFAULT NULL COMMENT '用户ID',
  `articleid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '文章id',
  `name` varchar(100) DEFAULT NULL COMMENT '姓名',
  `tel` varchar(100) DEFAULT NULL COMMENT '手机',
  `qq` varchar(100) DEFAULT NULL COMMENT 'qq',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of wl_member_baoming
-- ----------------------------
INSERT INTO `wl_member_baoming` VALUES ('3', '是的发送到', 'news', '1447751214', 'test', '14', '120', 'sdfsdf', 'sdfsdf', '');
INSERT INTO `wl_member_baoming` VALUES ('4', '士大夫2', 'news', '1447757116', null, null, '112', 'sdfsdfdsf', 'sdf', 'sdfsdfsdf');
INSERT INTO `wl_member_baoming` VALUES ('5', '士大夫2', 'news', '1447757173', 'test', '14', '112', 'sdfsdfdsfs', 'sdfsdf', 'sdfsdf');
INSERT INTO `wl_member_baoming` VALUES ('7', '士大夫2', 'news', '1447757572', 'test', '14', '113', 'sdfsdfdsfsdf', 'sdfsdf', 'sdf');
INSERT INTO `wl_member_baoming` VALUES ('9', '士大夫2', 'news', '1447757686', 'test', '14', '113', 'sdfsdf', 'sdf', 'sdfsdf');
INSERT INTO `wl_member_baoming` VALUES ('10', '士大夫2', 'news', '1447757721', 'test', '14', '113', 'sdf', 'sdf', 'sdfsdf');
INSERT INTO `wl_member_baoming` VALUES ('11', '士大夫2', 'news', '1447757790', 'test', '14', '113', 'sdf', 'sdf', 'sdfsdf');
INSERT INTO `wl_member_baoming` VALUES ('12', '士大夫2', 'news', '1447757816', 'test', '14', '113', 'sdf', 'sdf', 'sdf');
INSERT INTO `wl_member_baoming` VALUES ('14', '士大夫2', 'news', '1447757871', 'test', '14', '113', 'sdf', 'sdf', 'sdf');
INSERT INTO `wl_member_baoming` VALUES ('15', '士大夫2', 'news', '1447757890', 'test', '14', '113', 'sdf', 'sdf', 'sdfsdf');
INSERT INTO `wl_member_baoming` VALUES ('16', '士大夫2', 'news', '1447757931', 'test', '14', '113', 'sdfsdf', 'sdfsdf', 'sdfdsf');
INSERT INTO `wl_member_baoming` VALUES ('17', '士大夫2', 'news', '1447757959', 'test', '14', '113', 'sdfsdf', 'sdfdsf', 'sdfsdf');
INSERT INTO `wl_member_baoming` VALUES ('18', '士大夫2', 'news', '1447757975', 'test', '14', '113', 'sdfsdf', 'sdfsdf', 'sdfsdf');

-- ----------------------------
-- Table structure for wl_member_group
-- ----------------------------
DROP TABLE IF EXISTS `wl_member_group`;
CREATE TABLE `wl_member_group` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(15) NOT NULL,
  `issystem` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wl_member_group
-- ----------------------------
INSERT INTO `wl_member_group` VALUES ('1', '普通会员', '1', '0');
INSERT INTO `wl_member_group` VALUES ('2', 'VIP会员', '1', '0');
INSERT INTO `wl_member_group` VALUES ('3', '新手上路22', '0', '0');
INSERT INTO `wl_member_group` VALUES ('8', '新手上路3', '0', '0');

-- ----------------------------
-- Table structure for wl_member_mibao
-- ----------------------------
DROP TABLE IF EXISTS `wl_member_mibao`;
CREATE TABLE `wl_member_mibao` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0',
  `username` char(20) NOT NULL DEFAULT '',
  `mibao_ques` text COMMENT '密保问题',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- ----------------------------
-- Records of wl_member_mibao
-- ----------------------------
INSERT INTO `wl_member_mibao` VALUES ('4', '14', 'test', 'array (\n  \'ques1\' => \'我父亲的姓名是？\',\n  \'ans1\' => \'123\',\n  \'ques2\' => \'我小学的名字?\',\n  \'ans2\' => \'123\',\n)');
INSERT INTO `wl_member_mibao` VALUES ('5', '18', 'test1', 'array (\n  \'ques1\' => \'我最喜欢的人?\',\n  \'ans1\' => \'111\',\n  \'ques2\' => \'我父亲的姓名是？\',\n  \'ans2\' => \'222\',\n)');

-- ----------------------------
-- Table structure for wl_member_shoucang
-- ----------------------------
DROP TABLE IF EXISTS `wl_member_shoucang`;
CREATE TABLE `wl_member_shoucang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `model` varchar(50) DEFAULT NULL COMMENT '文章模块',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `username` char(50) DEFAULT NULL COMMENT '用户名',
  `userid` int(10) unsigned DEFAULT NULL COMMENT '用户ID',
  `articleid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '文章id',
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of wl_member_shoucang
-- ----------------------------
INSERT INTO `wl_member_shoucang` VALUES ('13', '抢不到iPhone 6s的订单 三星要为华为提供屏幕', 'news', '1447744163', 'test', '14', '84');
INSERT INTO `wl_member_shoucang` VALUES ('14', '的发生地方', 'news', '1447744541', 'test', '14', '117');
INSERT INTO `wl_member_shoucang` VALUES ('15', '是的发送到', 'news', '1447746838', 'test', '14', '120');
INSERT INTO `wl_member_shoucang` VALUES ('16', '士大夫2', 'news', '1447748160', 'test', '14', '112');
INSERT INTO `wl_member_shoucang` VALUES ('17', '士大夫2', 'news', '1447761442', 'test', '14', '113');
INSERT INTO `wl_member_shoucang` VALUES ('18', '中美就5G和卫星频率等议题展开沟通', 'news', '1462952314', 'test', '14', '82');

-- ----------------------------
-- Table structure for wl_message
-- ----------------------------
DROP TABLE IF EXISTS `wl_message`;
CREATE TABLE `wl_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '留言主题',
  `status` int(1) DEFAULT '0' COMMENT '0:不通过 1:通过',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '留言时间',
  `address` varchar(255) DEFAULT NULL COMMENT '地址',
  `name` varchar(50) DEFAULT NULL COMMENT '联系人',
  `tel` varchar(30) DEFAULT NULL COMMENT '电话',
  `email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `content` text NOT NULL COMMENT '留言内容',
  `ask` text COMMENT '回复留言',
  `asktime` int(10) NOT NULL DEFAULT '0' COMMENT '回复时间',
  `ip` varchar(15) DEFAULT NULL COMMENT '留言IP',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='留言表';

-- ----------------------------
-- Records of wl_message
-- ----------------------------
INSERT INTO `wl_message` VALUES ('34', '', '0', '1516259547', '本机地址', '55', '55', null, '我对此项目很感兴趣，请联系我。', null, '0', '127.0.0.1');

-- ----------------------------
-- Table structure for wl_model
-- ----------------------------
DROP TABLE IF EXISTS `wl_model`;
CREATE TABLE `wl_model` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL,
  `tablename` char(20) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '0',
  `des` varchar(800) DEFAULT NULL COMMENT '描述',
  `listorder` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of wl_model
-- ----------------------------
INSERT INTO `wl_model` VALUES ('2', '单页面', 'page', '1', '单页面模型', '0');
INSERT INTO `wl_model` VALUES ('5', '外部链接', 'url', '1', null, '0');
INSERT INTO `wl_model` VALUES ('53', '新闻模型', 'news', '0', '', '0');
INSERT INTO `wl_model` VALUES ('54', '成功案例', 'anli', '0', '', '0');
INSERT INTO `wl_model` VALUES ('55', '解决方案', 'solution', '0', '', '0');
INSERT INTO `wl_model` VALUES ('56', '产品模型', 'product', '0', '', '0');

-- ----------------------------
-- Table structure for wl_model_field
-- ----------------------------
DROP TABLE IF EXISTS `wl_model_field`;
CREATE TABLE `wl_model_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `modelid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `field` varchar(20) NOT NULL DEFAULT '' COMMENT '字段',
  `name` varchar(30) NOT NULL DEFAULT '' COMMENT '字段名称',
  `minlength` int(10) unsigned NOT NULL DEFAULT '0',
  `maxlength` int(10) unsigned NOT NULL DEFAULT '0',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '状态:0启用 1禁用',
  `listorder` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `setting` mediumtext NOT NULL COMMENT '参数设置',
  `formtype` varchar(20) NOT NULL DEFAULT '' COMMENT '字段类型',
  `tips` text NOT NULL COMMENT '提示文字',
  `issystem` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否系统字段。1是 0 否',
  `isunique` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '必填字段：1必填 0 选填',
  `errortips` varchar(255) NOT NULL DEFAULT '' COMMENT '数据未通过提醒',
  `pattern` varchar(255) NOT NULL DEFAULT '' COMMENT '正则验证规则',
  `isadd` tinyint(1) unsigned DEFAULT '1' COMMENT '前端投稿是否显示。1是 0 否',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=504 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wl_model_field
-- ----------------------------
INSERT INTO `wl_model_field` VALUES ('461', '53', 'catid', '栏目', '0', '0', '0', '10', 'array (\n  \'width\' => \'700\',\n  \'height\' => \'300\',\n  \'defaultvalue\' => \'\',\n)', 'catid', '', '1', '1', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('462', '53', 'title', '标题', '3', '100', '0', '9', 'array (\n  \'size\' => \'60\',\n  \'defaultvalue\' => \'\',\n)', 'text', '', '1', '1', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('463', '53', 'des', '描述', '0', '0', '0', '7', 'array (\n  \'width\' => \'700\',\n  \'height\' => \'46\',\n  \'defaultvalue\' => \'\',\n)', 'textarea', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('464', '53', 'image', '封面图片', '0', '0', '0', '6', 'array (\n  \'upload_allowext\' => \'gif|jpg|png|jpeg|bmp\',\n)', 'image', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('465', '53', 'position', '推荐位', '0', '0', '0', '5', '', 'position', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('466', '53', 'content', '内容', '0', '0', '0', '4', 'array (\n  \'defaultvalue\' => \'\',\n  \'height\' => \'300\',\n  \'width\' => \'700\',\n)', 'editor', '<div class=\"content_attr\"><label><input name=\"info[add_introduce]\" type=\"checkbox\"  value=\"1\" checked>是否截取内容</label><input type=\"text\" name=\"info[introcude_length]\" value=\"255\" size=\"3\">字符至描述\r\n<label><input type=\'checkbox\' name=\'info[auto_thumb]\' value=\"1\" checked>是否获取内容第1张图片作为标题图片\r\n</div>', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('467', '53', 'status', '通过审核', '0', '0', '0', '3', '', 'status', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('468', '53', 'uptime', '发布时间', '0', '0', '0', '3', '', 'datetime', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('469', '53', 'hits', '点击次数', '0', '0', '0', '2', 'array (\n  \'size\' => \'20\',\n  \'defaultvalue\' => \'0\',\n)', 'text', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('470', '53', 'keyword', '关键字', '0', '0', '0', '8', 'array (\n  \'size\' => \'40\',\n  \'defaultvalue\' => \'\',\n)', 'text', '多关键词之间用空格或者“,”隔开', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('471', '54', 'catid', '栏目', '0', '0', '0', '10', 'array (\n  \'width\' => \'700\',\n  \'height\' => \'300\',\n  \'defaultvalue\' => \'\',\n)', 'catid', '', '1', '1', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('472', '54', 'title', '标题', '3', '100', '0', '9', 'array (\n  \'size\' => \'60\',\n  \'defaultvalue\' => \'\',\n)', 'text', '', '1', '1', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('473', '54', 'des', '描述', '0', '0', '0', '7', 'array (\n  \'width\' => \'700\',\n  \'height\' => \'46\',\n  \'defaultvalue\' => \'\',\n)', 'textarea', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('474', '54', 'image', '封面图片', '0', '0', '0', '6', 'array (\n  \'upload_allowext\' => \'gif|jpg|png|jpeg|bmp\',\n)', 'image', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('475', '54', 'position', '推荐位', '0', '0', '1', '4', '', 'position', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('476', '54', 'content', '内容', '0', '0', '0', '3', 'array (\n  \'defaultvalue\' => \'\',\n  \'height\' => \'300\',\n  \'width\' => \'700\',\n)', 'editor', '<div class=\"content_attr\"><label><input name=\"info[add_introduce]\" type=\"checkbox\"  value=\"1\" checked>是否截取内容</label><input type=\"text\" name=\"info[introcude_length]\" value=\"255\" size=\"3\">字符至描述\r\n<label><input type=\'checkbox\' name=\'info[auto_thumb]\' value=\"1\" checked>是否获取内容第1张图片作为标题图片\r\n</div>', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('477', '54', 'status', '通过审核', '0', '0', '0', '0', '', 'status', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('478', '54', 'uptime', '发布时间', '0', '0', '0', '1', '', 'datetime', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('479', '54', 'hits', '点击次数', '0', '0', '0', '2', 'array (\n  \'size\' => \'20\',\n  \'defaultvalue\' => \'0\',\n)', 'text', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('480', '54', 'keyword', '关键字', '0', '0', '0', '8', 'array (\n  \'size\' => \'40\',\n  \'defaultvalue\' => \'\',\n)', 'text', '多关键词之间用空格或者“,”隔开', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('481', '54', 'duo_img', '多图展示', '0', '0', '0', '5', 'array (\n  \'upload_allowext\' => \'gif|jpg|jpeg|png|bmp\',\n  \'upload_st\' => \'4\',\n)', 'duo_img', '', '0', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('482', '55', 'catid', '栏目', '0', '0', '0', '10', 'array (\n  \'width\' => \'700\',\n  \'height\' => \'300\',\n  \'defaultvalue\' => \'\',\n)', 'catid', '', '1', '1', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('483', '55', 'title', '标题', '3', '100', '0', '9', 'array (\n  \'size\' => \'60\',\n  \'defaultvalue\' => \'\',\n)', 'text', '', '1', '1', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('484', '55', 'des', '描述', '0', '0', '0', '7', 'array (\n  \'width\' => \'700\',\n  \'height\' => \'46\',\n  \'defaultvalue\' => \'\',\n)', 'textarea', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('485', '55', 'image', '封面图片', '0', '0', '0', '6', 'array (\n  \'upload_allowext\' => \'gif|jpg|png|jpeg|bmp\',\n)', 'image', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('486', '55', 'position', '推荐位', '0', '0', '0', '4', '', 'position', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('487', '55', 'content', '内容', '0', '0', '0', '4', 'array (\n  \'defaultvalue\' => \'\',\n  \'height\' => \'300\',\n  \'width\' => \'700\',\n)', 'editor', '<div class=\"content_attr\"><label><input name=\"info[add_introduce]\" type=\"checkbox\"  value=\"1\" checked>是否截取内容</label><input type=\"text\" name=\"info[introcude_length]\" value=\"255\" size=\"3\">字符至描述\r\n<label><input type=\'checkbox\' name=\'info[auto_thumb]\' value=\"1\" checked>是否获取内容第1张图片作为标题图片\r\n</div>', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('488', '55', 'status', '通过审核', '0', '0', '0', '3', '', 'status', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('489', '55', 'uptime', '发布时间', '0', '0', '0', '3', '', 'datetime', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('490', '55', 'hits', '点击次数', '0', '0', '0', '2', 'array (\n  \'size\' => \'20\',\n  \'defaultvalue\' => \'0\',\n)', 'text', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('491', '55', 'keyword', '关键字', '0', '0', '0', '8', 'array (\n  \'size\' => \'40\',\n  \'defaultvalue\' => \'\',\n)', 'text', '多关键词之间用空格或者“,”隔开', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('492', '56', 'catid', '栏目', '0', '0', '0', '10', 'array (\n  \'width\' => \'700\',\n  \'height\' => \'300\',\n  \'defaultvalue\' => \'\',\n)', 'catid', '', '1', '1', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('493', '56', 'title', '标题', '3', '100', '0', '9', 'array (\n  \'size\' => \'60\',\n  \'defaultvalue\' => \'\',\n)', 'text', '', '1', '1', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('494', '56', 'des', '描述', '0', '0', '0', '7', 'array (\n  \'width\' => \'700\',\n  \'height\' => \'46\',\n  \'defaultvalue\' => \'\',\n)', 'textarea', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('495', '56', 'image', '封面图片', '0', '0', '0', '6', 'array (\n  \'upload_allowext\' => \'gif|jpg|png|jpeg|bmp\',\n)', 'image', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('496', '56', 'position', '推荐位', '0', '0', '1', '3', '', 'position', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('497', '56', 'content', '内容', '0', '0', '0', '4', 'array (\n  \'defaultvalue\' => \'\',\n  \'height\' => \'300\',\n  \'width\' => \'700\',\n)', 'editor', '<div class=\"content_attr\"><label><input name=\"info[add_introduce]\" type=\"checkbox\"  value=\"1\" checked>是否截取内容</label><input type=\"text\" name=\"info[introcude_length]\" value=\"255\" size=\"3\">字符至描述\r\n<label><input type=\'checkbox\' name=\'info[auto_thumb]\' value=\"1\" checked>是否获取内容第1张图片作为标题图片\r\n</div>', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('498', '56', 'status', '通过审核', '0', '0', '0', '0', '', 'status', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('499', '56', 'uptime', '发布时间', '0', '0', '0', '0', '', 'datetime', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('500', '56', 'hits', '点击次数', '0', '0', '0', '0', 'array (\n  \'size\' => \'20\',\n  \'defaultvalue\' => \'0\',\n)', 'text', '', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('501', '56', 'keyword', '关键字', '0', '0', '0', '8', 'array (\n  \'size\' => \'40\',\n  \'defaultvalue\' => \'\',\n)', 'text', '多关键词之间用空格或者“,”隔开', '1', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('502', '56', 'duo_img', '多图展示', '0', '0', '0', '5', 'array (\n  \'upload_allowext\' => \'gif|jpg|jpeg|png|bmp\',\n  \'upload_st\' => \'4\',\n)', 'duo_img', '', '0', '0', '', '', '1');
INSERT INTO `wl_model_field` VALUES ('503', '55', 'duo_img', '多图展示', '0', '0', '0', '5', 'array (\n  \'upload_allowext\' => \'gif|jpg|jpeg|png|bmp\',\n  \'upload_st\' => \'4\',\n)', 'duo_img', '', '0', '0', '', '', '1');

-- ----------------------------
-- Table structure for wl_news
-- ----------------------------
DROP TABLE IF EXISTS `wl_news`;
CREATE TABLE `wl_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `catid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '栏目id',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `des` varchar(800) DEFAULT NULL COMMENT '摘要',
  `content` text NOT NULL COMMENT '内容',
  `image` varchar(100) DEFAULT NULL COMMENT '图片',
  `hits` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击次数',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `position` varchar(50) DEFAULT '0' COMMENT '推荐位',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `username` char(50) NOT NULL DEFAULT '' COMMENT '发布人',
  `keyword` varchar(100) DEFAULT NULL COMMENT '关键字',
  PRIMARY KEY (`id`),
  KEY `tid` (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wl_news
-- ----------------------------
INSERT INTO `wl_news` VALUES ('3', '79', '大佬告诉你，智能办公的趋势已来临！', '办公室是工作的地方，我们在这里谈商业模式、谈融资、谈梦想与未来。但办公室也是一个烧钱场所，除了必要支出，一些隐形支出如办公室能源浪费，器材损耗，都在悄悄把钱吸走。每个月浪费上万块，一年下来上百万。', '<p style=\"word-wrap:break-word;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-family:&quot;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;\">\r\n	<strong style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\"><span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">应用规模：</span></strong>\r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-family:&quot;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;\">\r\n	<span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">23层楼，占地30485平方米。厦门广播电视广告有限公司、厦门广播电视产业发展有限公司、厦门文广影音有限公司、厦门文广投资管理公司等多家旗下企业在此大楼办公。</span>\r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-family:&quot;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;\">\r\n	<strong style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\"><span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">面临的问题：</span></strong>\r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-family:&quot;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;\">\r\n	<span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">晚上值班的管理人员需要2小时巡检一次，通常巡检一次需要1个小时左右，很多时候管理人员刚关闭照明，又有刚下班的人经过开启照明，电量浪费严重。</span>\r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-family:&quot;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;\">\r\n	<span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;color:#50C4B4;box-sizing:border-box !important;\"><strong style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\"><span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">问题解决：</span></strong></span>\r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-family:&quot;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;\">\r\n	<span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">通过GreenOffice系统，按物业管理作息时间，对大楼内空调、照明进行统一控制，定时关闭。系统替代管理人员巡逻，减少人力投入。</span>\r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-family:&quot;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;\">\r\n	<span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\"><strong style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\">只需六个月，便可省回设备费用</strong></span>\r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-family:&quot;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;\">\r\n	<span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\"><strong style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\">节能提升30%，智能学习让节能效率UP</strong></span>\r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-family:&quot;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;\">\r\n	<span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\"><strong style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\">仅需20天，无需布线操作方便</strong></span>\r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-family:&quot;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;\">\r\n	<span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\"><strong style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\">0隐患，用电和火灾早预警</strong></span>\r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-family:&quot;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;\">\r\n	<span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\"><strong style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\"><br style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\" />\r\n</strong></span>\r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-family:&quot;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;\">\r\n	<span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:12px;box-sizing:border-box !important;\">GreenOffice系统：包括照明智能化、空调和环境系统智能化、门窗&amp;遮阳智能化、基于智能空开的极低成本的能源监控以及其他办公设备智能化等五大智能化系统，帮助办公室智能化节能。</span>\r\n</p>\r\n<br />', 'upload/images/2018/01/18/201801185a600d290bb24.jpg', '7', '1513588753', '[11]', '1', '0', 'admin', '');
INSERT INTO `wl_news` VALUES ('4', '78', '丽江摆渡居客栈的民宿花样：时光不老，智能正好', '欠自己的旅行，终有一天，要还给自己。\r\n2017年的初冬，我的丽江之行终于启程——缘于Mr wang的一次际缘相邀，不为了却一段聊胜于无的青梅往事。', '<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">Mr wang是摆渡居精品客栈的创始人，一个在北京做了9年地产并发誓与地产划清界线的新民宿主义者，在丽江创办了一家花样的智能民宿——那个用ORVIBO欧瑞博Wehotel智慧酒店系统、日本MUJI无印良品、法国依云矿泉水、韩国面膜武装起来的摆渡居精品客栈。</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\"><br style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\" />\r\n</span> \r\n</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">从此，在这个客栈里，来来往往的人以丽江的尺度重新仗量生活边界，尽情还原被快时代洪流裹挟冲淡的生活底色。</span> \r\n	</p>\r\n	<p>\r\n		<img src=\"/upload/editor/image/20180118/20180118105505_45592.png\" title=\"丽江摆渡居客栈的民宿花样：时光不老，智能正好\" alt=\"丽江摆渡居客栈的民宿花样：时光不老，智能正好\" /> \r\n	</p>\r\n	<p>\r\n		<br />\r\n	</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">丽江是带着使命来到人间的，中国西南的某个角落总会将它安顿。于是，就有了束河的石板、大研的青藤、四方街的斜阳、拉市海的晚霞、玉龙的雪山……丽江在这里不惊不扰地过了一世，但从未苍老，一直青春。</span> \r\n</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\"><br style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\" />\r\n</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">有一天，在北京地产圈混腻的Mr wang去了下一个需要他的地方，丽江正好是他的缘浅情深。喝了几杯小粒咖啡之后，Mr wang的目标即是“当奋斗之后拥有一个客栈”。</span> \r\n</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">巧合的是，在Mr wang筹备他的“摆渡居精品客栈”时，偶然碰上云南猫舍整装设计有限公司一拨人。这是一个眼光独到、经验老道的智能整装团队，它的智能整装来自一家叫做ORVIBO欧瑞博的物联网（IOT）公司。</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\"><br style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\" />\r\n</span> \r\n</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">Mr wang、猫舍MORE+、ORVIBO，他们都是有酒也有故事的主角，北京的二锅头、丽江的星空、智能的设计感、地产界的陈年旧事和IOT界的青漾桥段，他们在丽江的一场久别重逢，就有了“摆渡居精品客栈”。</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\"><br style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\" />\r\n</span> \r\n</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">11月29日的日落时分，我抵达丽江，开启了以摆渡居精品客栈为圆心、以10公里为半径的一次随机围观。</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\"><br style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\" />\r\n</span> \r\n</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">按照例行安排，束河古镇的四方听音广场每晚都会上演一场纳西族的篝火舞蹈晚会。我略过这个程序，从四方听音广场的一角沿鼎业街北行大约70米，摆渡居精品客栈就晃在了眼前。初一打量，客栈里走廊、庭院、小桥、露台、阳台的空间互为呼应，明月清风般的慢时光设计感一齐袭来。这与Mr wang的初心、猫舍MORE+的精致、ORVIBO的科技甚至是无逢。</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">&nbsp;</span> \r\n</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\"></span> \r\n	</p>\r\n<section style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;max-width:100%;box-sizing:border-box;color:#3E3E3E;font-family:\" background-color:#ffffff;\"=\"\"><section class=\"\" style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box;\"><section class=\"\" style=\"word-wrap:break-word !important;margin:10px 0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box;text-align:center;\"><section class=\"\" style=\"word-wrap:break-word !important;margin:0px;padding:3px;text-decoration:none;font-style:normal;display:inline-block;max-width:100%;box-sizing:border-box;border-top:1px solid #A0A0A0;\">\r\n	<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;max-width:100%;box-sizing:border-box;clear:both;min-height:1em;\">\r\n		<span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\"><strong style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\">智能唤醒我的一刻，阳光刚好把我打在美剧里</strong></span> \r\n	</p>\r\n</section></section></section></section>\r\n	<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <br style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\" />\r\n<span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\"></span> \r\n</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;max-width:100%;clear:both;min-height:1em;color:#3E3E3E;font-family:\" box-sizing:border-box=\"\" !important;\"=\"\"> <span style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;font-size:14px;box-sizing:border-box !important;\">在客栈、民宿多如牛毛的丽江，Mr wang心中的摆渡居精品客栈是一个以人工智能的方式遥望雪山星空的主题民宿。所以，客栈除了4间大床和标间外，其余客房都是loft或者复式套房设计，每间客房都有一个无遮挡全景天窗——或者在大床的上方，或者在淋浴的上方，或者在浴缸的上方。</span> \r\n	</p>\r\n	<p>\r\n		<br />\r\n	</p>', 'upload/images/2018/01/18/201801185a600c7086a11.png', '72', '1513589018', '[11]', '1', '0', 'admin', '');
INSERT INTO `wl_news` VALUES ('5', '79', '每一次迭代 ，只为你打造更聪明的居住空间', '隐藏文本是SEO网络推广手册中最古老的技巧之一。如果希望隐藏文字多多少少提升搜索引擎优化，你很快会发现这种过时的策略\r\n', '<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;max-width:100%;clear:both;min-height:1em;font-family:\" letter-spacing:2px;color:#505050;background-color:#ffffff;box-sizing:border-box=\"\" !important;\"=\"\">\r\n	智家 365 智能家居系统再次更新版本，这一次我们带来了：\r\n	</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;max-width:100%;clear:both;min-height:1em;font-family:\" letter-spacing:2px;color:#505050;background-color:#ffffff;box-sizing:border-box=\"\" !important;\"=\"\"><br />\r\n</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;max-width:100%;clear:both;min-height:1em;font-family:\" letter-spacing:2px;color:#505050;background-color:#ffffff;box-sizing:border-box=\"\" !important;\"=\"\">\r\n	第一，围绕基础电器的智能化，新增暖通设备互联，覆盖更多暖通舒适场景；\r\n	</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;max-width:100%;clear:both;min-height:1em;font-family:\" letter-spacing:2px;color:#505050;background-color:#ffffff;box-sizing:border-box=\"\" !important;\"=\"\"><br />\r\n</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;max-width:100%;clear:both;min-height:1em;font-family:\" letter-spacing:2px;color:#505050;background-color:#ffffff;box-sizing:border-box=\"\" !important;\"=\"\">\r\n	第二，升级云端数据处理和运算能力，让家庭设备 “ 自动化 ” 真正基于数据，基于用户习惯。\r\n	</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;max-width:100%;clear:both;min-height:1em;font-family:\" letter-spacing:2px;color:#505050;background-color:#ffffff;box-sizing:border-box=\"\" !important;\"=\"\"><br />\r\n</p>\r\n<section style=\"word-wrap:break-word !important;margin:0px;padding:0px 1em;text-decoration:none;font-style:normal;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;max-width:100%;box-sizing:border-box;color:#3E3E3E;font-family:\" letter-spacing:2px;text-align:justify;background-color:#ffffff;\"=\"\"><section class=\"\" style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box;\"><section class=\"\" style=\"word-wrap:break-word !important;margin:10px 0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box;text-align:center;\"><section class=\"\" style=\"word-wrap:break-word !important;margin:0px;padding:3px;text-decoration:none;font-style:normal;display:inline-block;max-width:100%;box-sizing:border-box;border-bottom:1px solid #A0A0A0;font-size:14px;\">\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;max-width:100%;box-sizing:border-box;clear:both;min-height:1em;\">\r\n	<br />\r\n</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;max-width:100%;box-sizing:border-box;clear:both;min-height:1em;\">\r\n	<strong style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\">智慧空间再升级</strong> \r\n</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;max-width:100%;box-sizing:border-box;clear:both;min-height:1em;\">\r\n	<strong style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;max-width:100%;box-sizing:border-box !important;\">覆盖更多暖通舒适场景</strong> \r\n</p>\r\n</section></section></section></section>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;max-width:100%;box-sizing:border-box;clear:both;min-height:1em;font-family:\" letter-spacing:2px;color:#505050;background-color:#ffffff;\"=\"\"><br />\r\n	</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;max-width:100%;clear:both;min-height:1em;font-family:\" letter-spacing:2px;color:#505050;background-color:#ffffff;box-sizing:border-box=\"\" !important;\"=\"\">\r\n	ORVIBO 的智家 365 智能家居系统新接入新风控制盒、地暖面板两大设备，将传统新风、地暖系统快速接入欧瑞博智能家居体系，实现传统暖通环境系统的一键智能化。\r\n</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;max-width:100%;clear:both;min-height:1em;font-family:\" letter-spacing:2px;color:#505050;background-color:#ffffff;box-sizing:border-box=\"\" !important;\"=\"\"><br />\r\n	</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;max-width:100%;clear:both;min-height:1em;font-family:\" letter-spacing:2px;color:#505050;background-color:#ffffff;box-sizing:border-box=\"\" !important;\"=\"\">\r\n	其中，地暖面板具备即买即装即用的特点，只需更换家里的地暖面板，即可开始智能化操作。目前全面支持中央水暖地暖所有品牌与设备的快速接入应用。\r\n</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;max-width:100%;clear:both;min-height:1em;font-family:\" letter-spacing:2px;color:#505050;background-color:#ffffff;box-sizing:border-box=\"\" !important;\"=\"\"><br />\r\n	</p>\r\n<p style=\"word-wrap:break-word !important;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;max-width:100%;clear:both;min-height:1em;font-family:\" letter-spacing:2px;color:#505050;background-color:#ffffff;box-sizing:border-box=\"\" !important;\"=\"\">\r\n	面对用户日益增长的空间智能化需求，而传统新风系统无法满足的形势，新风控制盒应运而生，可实现远程、定时操作，营造更舒适的居住体验。\r\n</p>\r\n<br class=\"Apple-interchange-newline\" />\r\n<img src=\"/upload/editor/image/20180118/20180118105338_77258.jpg\" title=\"每一次迭代 ，只为你打造更聪明的居住空间\" alt=\"每一次迭代 ，只为你打造更聪明的居住空间\" /><br />', 'upload/images/2018/01/18/201801185a600bfd5951a.jpg', '6', '1513686956', '0', '1', '0', 'admin', '');
INSERT INTO `wl_news` VALUES ('6', '79', '京东智能与南京物联达成战略合作　加快释放智能家居价值', '近日，京东智能与国内领先的物联网设备和解决方案提供商南京物联传感技术有限公司(Wulian)签署战略合作协议，围绕物联网智能家居正式达成紧密合作。双方此次携手，旨在依托各自优势，共同推动产业升级，促进智能家居大规模落地。', '<span style=\"color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;display:inline !important;float:none;\">近日，京东智能与国内领先的物联网设备和解决方案提供商南京物联传感技术有限公司(Wulian)签署战略合作协议，围绕物联网智能家居正式达成紧密合作。双方此次携手，旨在依托各自优势，共同推动产业升级，促进智能家居大规模落地。</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;\" />\r\n<br style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;\" />\r\n<p>\r\n	<span style=\"color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;display:inline !important;float:none;\">根据协议，京东智能与Wulian将在物联网智能家居产品、技术、渠道、服务等方面展开全方位深度合作。双方将通过合力增强智能硬件的互操作性，以及平台接入服务能力，面向企业客户提供更完善的解决方案，并为终端消费者打造更合理的应用场景，最终全面提升大众生活品质<br />\r\n</span>\r\n</p>\r\n<p>\r\n	<img src=\"/upload/editor/image/20180118/20180118105026_75269.jpg\" title=\"京东智能与南京物联达成战略合作 加快释放智能家居价值\" alt=\"京东智能与南京物联达成战略合作 加快释放智能家居价值\" /><br />\r\n<span style=\"color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;display:inline !important;float:none;\"></span>\r\n</p>', 'upload/images/2018/01/18/201801185a600b5f98092.jpg', '3', '1513687080', '0', '1', '0', 'admin', '');
INSERT INTO `wl_news` VALUES ('7', '78', '智能家居风向标 CES展Wulian推出众多新品', '万众瞩目的2017年CES展拉开序幕。CES已经走过将近50年历程，成为全球规模最大的消费科技产品交易会之一，历来都是每年科技界新产品和新技术的风向标，见证着全球电子科技的发展足迹。', '<p>\r\n	<span style=\"color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;display:inline !important;float:none;\">万众瞩目的2017年CES展拉开序幕。CES已经走过将近50年历程，成为全球规模最大的消费科技产品交易会之一，历来都是每年科技界新产品和新技术的风向标，见证着全球电子科技的发展足迹。智能家居一直都是CES的重头戏，今年也不例外。今年的CES参展商大约有4000多家，涵盖150多个国家和地区，展示当前最新的消费技术产品和服务，其中很多都与智能家居有关，例如芯片级解决方案、智慧家电以及其它家用智能硬件等等<br />\r\n</span>\r\n</p>\r\n<p>\r\n	<img src=\"/upload/editor/image/20180118/20180118104836_58235.png\" title=\"智能家居风向标 CES展Wulian推出众多新品\" alt=\"智能家居风向标 CES展Wulian推出众多新品\" />\r\n</p>\r\n<p>\r\n	<br class=\"Apple-interchange-newline\" />\r\n<span style=\"color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;display:inline !important;float:none;\">Wulian凭借物联网智能家居创新产品和应用，在全面展示基于ZigBee技术、涵盖数十款设备的智能家居系统的同时，展示了多款采取全新工艺设计的智能家居时尚新品，吸引大量与会者驻足围观，竖型网关、烟雾火警探测器、小物环境监测摄像机、可视云联锁、Mini网关、智能猫眼等大量精品不仅在国内智能家居市场独占鳌头，也受了国外观众的广泛称赞。</span>\r\n</p>\r\n<p>\r\n	<span style=\"color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;display:inline !important;float:none;\">当艺术遇到智能会碰撞出怎样的火花？看看这台Wulian智能花瓶就知道了，业内首款将智能硬件与传统工艺品相结合的智能家居产品。瓶身基于PC材质，双色注塑工艺打造，整体晶莹剔透。多功能一体化设计，以花瓶整合智能网关、双频路由、环境监测、炫彩灯，是智能家居系统的中心。支持城市定位、定时播报天气、变换灯光色彩、手势切换以及移动端软件管理，可将相关数据通过语音播报、点阵屏显示和手机App加以反映，让您随时了解家中环境状态。</span><br />\r\n<span style=\"color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;display:inline !important;float:none;\"></span>\r\n</p>', 'upload/images/2018/01/18/201801185a600af0e9ca5.png', '18', '1513687154', '0', '1', '0', 'admin', '');
INSERT INTO `wl_news` VALUES ('8', '79', '六问智能家居|朱俊岗：技术可以很复杂，操作要很简单', '2018年1月18日，新浪家居联合华为、靓家居举办“智联未来 2018智慧家庭产业创新峰会暨中国智慧家装应用白皮书发布会”，为同行打造一个交流平台，共同探讨产业发展方向。', '<span style=\"margin:0px;padding:0px;list-style:none;border:0px;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;color:#666666;\">2018年1月18日，新浪家居联合华为、靓家居举办“智联未来 2018智慧家庭产业创新峰会暨中国智慧家装应用白皮书发布会”，为同行打造一个交流平台，共同探讨产业发展方向。</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;box-sizing:border-box;color:#666666;\" />\r\n<p>\r\n	<span style=\"margin:0px;padding:0px;list-style:none;border:0px;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;color:#666666;\">在峰会前期，新浪家居特别策划“六问智能家居”系列采访，从消费者最关心的疑问和痛点出发，用最犀利的提问，对话智能家居行业代表企业/人物，探寻智能家居的痛点及解决方案。本期嘉宾，南京物联创始人兼总裁朱俊岗，从十年智能家居从业经验，分享消费者痛点以及其背后的原因，探讨相应的解决方案。<br />\r\n</span>\r\n</p>\r\n<p>\r\n	<img src=\"/upload/editor/image/20180118/20180118104643_29541.jpg\" title=\"六问智能家居|朱俊岗：技术可以很复杂，操作要很简单\" alt=\"六问智能家居|朱俊岗：技术可以很复杂，操作要很简单\" />\r\n</p>\r\n<p>\r\n	<p style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;\">\r\n		<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">新浪家居：明明可以一键开关，非得打开手机APP，似乎这样就是智能家居了。在您看来，智能家居的核心是什么？</span>\r\n	</p>\r\n	<p style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;\">\r\n		<br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">朱俊岗：我也有这样很糟糕的体验。我曾买了很多类似的智能家居设备，但一般使用了两三个星期就不再用了，因为它们是“伪智能”，只是看起来炫酷，但并不是消费者真正需要的东西。</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">进一步来看，智能家居单品也是伪智能，因为它不能发挥万物互联的能力，形成智能生活场景的能力有限。链接上没有足够的广度和深度也是伪智能，就像人类社会一样，全球一体化才能进化得更深，分裂式的链接、碎片化的整合，难以形成系统的能力。我认为，今天在物联网的背景下，智能家居更多强调系统运营的能力、生态链的能力，这才能形成真正的智能。简单来说，你只有硬件是不够的，要具备通讯链接生态链、应用生态链和人工智能生态链。</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">至于为什么智能家居厂家都喜欢用手机APP呢，它与其说是一个控制方式，更多是为了定位、大数据等。譬如通过手机定位判断你是否在家里，当有小偷时智能家居系统通过手机向你提示报警。这是手机APP在智能家居产品中不可或缺的原因，不过从控制方式来看，有着语音、头像识别、智能传感网络等多种方式选择。</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\"><br style=\"margin:0px;padding:0px;list-style:none;border:0px;\" />\r\n</span>\r\n	</p>\r\n	<p style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;\">\r\n		<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">新浪家居：从智能门锁、智能窗帘到智能摄像机、智能净化器等，几乎每个厂家都有自己的APP。为什么要装那么多APP去控制一个家的智能家居？</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\"><br style=\"margin:0px;padding:0px;list-style:none;border:0px;\" />\r\n</span>\r\n	</p>\r\n	<p style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;\">\r\n		<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">朱俊岗：这是任何行业发展初期都存在的问题——标准不统一、群雄并起，所以这个问题并不是哪一个厂家能解决的。不同标准之间的较量没有人会主动退出，它需要时间去沉淀，三到五年甚至五到八年都有可能。因为这个行业很复杂，小鱼小虾，大鱼大鳄，都在其中竞争。其实智能家居门槛非常高，但给行业印象是阿猫阿狗都能参加，导致这个行业处于非常复杂的混战阶段。</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\"><br style=\"margin:0px;padding:0px;list-style:none;border:0px;\" />\r\n</span>\r\n	</p>\r\n	<p style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;\">\r\n		<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">新浪家居：如果停电了或断网了，智能家居怎么办？</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\"><br style=\"margin:0px;padding:0px;list-style:none;border:0px;\" />\r\n</span>\r\n	</p>\r\n	<p style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;\">\r\n		<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">朱俊岗：我们南京物联在进行产品设计的时候有备用电池，并内置了3G、4G的卡，以备应急启用。但同行基本没有考虑到这些事情。实际上，备用电池和内置4G卡成本并不高，只是其它外行的玩家进来不明白为什么要做这一步，但我们从用户角度出发考虑到了一些特殊的情况。</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\"><br style=\"margin:0px;padding:0px;list-style:none;border:0px;\" />\r\n</span>\r\n	</p>\r\n	<p style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;\">\r\n		<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">新浪家居：智能家居监控下，用户的隐私安全有没有保障？</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\"><br style=\"margin:0px;padding:0px;list-style:none;border:0px;\" />\r\n</span>\r\n	</p>\r\n	<p style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;\">\r\n		<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">朱俊岗：我觉得中国百分之九十几的智能家居是极度不安全的。同行很多厂家采用了第三方的云视频服务器，很多小公司的云服务我们也扫描过，是非常不安全的，风险非常大，甚至很可能导致被直播。目前智能家居还没有大规模使用，所以这些安全问题还没暴露出来。</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">对南京物联来说，我们做智能家居行业十年了，一路摸索在信息安全方面做了很多措施。我们采用了点对点的通信，point to point，不存在经过中间服务器，也就是摄像头直接到你手机。同时我们还会限制数量，比如最多只能5个人看；还根据手机习惯、位置信息进行限制，比如你在南京可以看，不在南京要看就得经过授权。这些是很多同行没有考虑到的，他们做这行实际只有两三年，很多坑还没踩到。</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\"><br style=\"margin:0px;padding:0px;list-style:none;border:0px;\" />\r\n</span>\r\n	</p>\r\n	<p style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;\">\r\n		<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">新浪家居：一套智能家居万元起步，普通单品只要冠上智能家居名头价格就高了一个档次。为什么那么贵？</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\"><br style=\"margin:0px;padding:0px;list-style:none;border:0px;\" />\r\n</span>\r\n	</p>\r\n	<p style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;\">\r\n		<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">朱俊岗：靠智能家居概念卖高价的情况在行业内很普遍。一般来说，品质越高，成本越高，价格相应越贵。但现在情况是很多产品品质很差，但价格很高，浑水摸鱼的情况很多，导致消费者体验不好，对智能家居印象也不好。这种情况是因为行业还处于混乱期，消费者乃至地产商都没有判断力。他们不是这个行业专业人士，没有专门的实验室、检测仪器、技术人员来评判一个产品品质的好坏。</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">那怎么判断一个产品是否值它的价格呢？因为智能家居是一个跨界的产品，比如开关，罗格朗很专业；但智能开关涉及通讯，罗格朗不专业，但华为专业。这意味着一个智能家居产品涉及多个领域，需要多个专家参与其中把点判断出来。所以要看它是否有多个领域专家认可，再看这个企业合作的单位是否是该领域顶级的公司。</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\"><br style=\"margin:0px;padding:0px;list-style:none;border:0px;\" />\r\n</span>\r\n	</p>\r\n	<p style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;\">\r\n		<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">新浪家居：智能家居作为高科技产品，让老人以及低文化程度的人“望而生畏”，不会操作，不敢操作。怎么办？</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\"><br style=\"margin:0px;padding:0px;list-style:none;border:0px;\" />\r\n</span>\r\n	</p>\r\n	<p style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#000000;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;\">\r\n		<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">朱俊岗：这应该是一个误区，我觉得越是高科技的产品越是操作简单。技术可以很复杂，但展现给人的是很简单。比如苹果手机，你拿到不需要看说明书就会用了，因为它是人性化设计，它的引导就如同说明书。越是技术不过关的产品，操作越复杂。也就是说，真正的高科技产品一定是以人为中心，做减法而不是做加法。如果一款智能家居产品整天让人研究怎么用，它就不是真正的智能产品。</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;box-sizing:border-box;color:#666666;\" />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;\">但是，智能家居行业真正做到以人为本的产品很少，包括我们在内的部分公司一直在朝着这个方向努力。目前苹果已经入局做智能家居产品了，它会从人的角度考虑，进而对推动行业发展。这两年得益于多方力量共同教育这个市场，唤起消费者需求，行业发展速度非常快。</span>\r\n	</p>\r\n<br />\r\n<span style=\"margin:0px;padding:0px;list-style:none;border:0px;font-family:&quot;font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#FFFFFF;text-decoration-style:initial;text-decoration-color:initial;color:#666666;\"></span>\r\n</p>', 'upload/images/2018/01/18/201801185a600a525efbb.jpg', '21', '1513687223', '0', '1', '0', 'admin', '');
INSERT INTO `wl_news` VALUES ('9', '70', '收藏 IoT通用语言开飙，ZigBee稳拿物联网产业生态“船票”', '这个原本注册于美国的ZigBee联盟，因其优先发力中国的战略布局使得ZigBee已从协议纷乱、边界林立的物联网生态体系中率先突围，形成了面向物联网时代的ZigBee产业生态，毫无悬念地收获了通往物联网时代产业生态的第一张“船票”。', '<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">据ZigBee联盟中国成员组官方消息，当天主题为“一个技术，无尽选择”的展台展示了近百种按照ZigBee联盟领先的可互操作标准制造的产品，包括基于Thread网络但同时又使用ZigBee联盟IoT通用语言的最早一批产品。</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\"><br style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;\" />\r\n</span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">ZigBee联盟官方渲染图显示，ZigBee联盟在包括展台现场等物料上变更了自己的商标，新的应用层协议以dotdot正式命名。</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\"><br style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;\" />\r\n</span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">虽然业界尚不清楚zigbee联盟发布的推进物联网(IoT)统一的路线图的具体内容，不过，可以肯定的是，ZigBee联盟此间发布了可跨网协作IoT通用语言——dotdot。</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\"><br style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;\" />\r\n</span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">这意味着，基于ZigBee技术标准而推出了新的应用层协议</span><span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;line-height:1.6;\">dotdot。这一应用层协议栈在物联网产业生态连接性、开放性实现了新的突破，具有里程碑意义。</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;line-height:1.6;\"><br style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;\" />\r\n</span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">事实上，早在2016年5月，ZigBee联盟发布ZigBee3.0，宣布基于ZigBee应用层协议的智能产品之间实现互联互通。同期，ZigBee联盟与Thread联盟发布联合声明，宣布将在Thread网路架构上实现ZigBee3.0应用层协议。</span> \r\n	</p>\r\n	<p>\r\n		<br />\r\n	</p>\r\n	<p>\r\n		<img src=\"/upload/editor/image/20180118/20180118110113_51454.jpg\" title=\"收藏 IoT通用语言开飙，ZigBee稳拿物联网产业生态“船票”\" alt=\"收藏 IoT通用语言开飙，ZigBee稳拿物联网产业生态“船票”\" /> \r\n	</p>\r\n	<p>\r\n		<br />\r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">早在2001年，ZigBee 联盟成立，3年之后，ZigBee被带入中国。从2013年开始，ZigBee被中国厂商及其应用开发者用于智能家居领域。</span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\"><br style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;\" />\r\n</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">大体上说，以2016年ZigBee3.0应用层协议和2017年跨网协作IoT通用语言dotdot的先后发布为标志，ZigBee产业生态已成。</span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\"><br style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;\" />\r\n</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">原因在于，ZigBee联盟注册地虽是美国，不过，ZigBee联盟却将中国产业链作为战略优先发力之选，其标志性动作是，ZigBee联盟发布ZigBee3.0应用层协议时，其初始范围指向“中国成员组”。因此，当ZigBee在落地中国的过程中，若干个具有产业链样本意义的中国标杆公司为ZigBee产业生态提供了鼎力支撑：</span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\"><br style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;\" />\r\n</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">从智能家居终端设备及其解决方案厂商这个层级看，欧瑞博以理事身份加入ZigBee联盟中国组，以其智家365系统（应该是一个跨平台协议兼一种交互App）实现对ZigBee协议的兼容、智能家居产品（设备）和其在地产、办公、别墅等智能场景方案的大规模落地对ZigBee协议的支撑。</span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\"><br style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;\" />\r\n</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">从物联网操作系统和芯片元器件厂商这个层级看，阿里云以普通成员身份加入ZigBee联盟中国组，以其操作系统Yun os或者云上芯片YOC实现对ZigBee协议的兼容；恩智浦中国公司以普通成员加入ZigBee联盟中国组，以其芯片实现对ZigBee3.0的支持。</span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\"><br style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;\" />\r\n</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">从物联网云-管-端“全连接”这个层级看，华为以董事身分加入ZigBee联盟中国组，至少以其跨平台协议hilink实现对ZigBee的兼容。</span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">&nbsp;</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;color:#0052FF;\"><strong style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;\"><span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">ZigBee应用的大体量</span></strong></span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\"><br style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;\" />\r\n</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">ZigBee产业生态的成型，除了中国标杆公司的鼎力支撑之外，也来源于中国产业链上各类应用开发者（厂商）自发性的参与贡献。</span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">&nbsp;仅就规模而言，中国应用开发者（厂商）数量在全球产业链上无出其右，无与伦比。</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\"><br style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;\" />\r\n</span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">据不完全统计，虽然ZigBee联盟全球成员只有400+家，不过光是中国产业链上非注册的企业级开发者或者说非正式合作伙伴至少超过1000家。</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\"><br style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;\" />\r\n</span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">而在此之前，ZigBee和Thread、Weave、WiFi、Z-Wave、Bultooth、Mesh、NFC、UWB等多种短距离无线通信协议在诸多产业领域中经历了多轮搏弈，各个协议的各自优劣势及其应用领域已在反复验证中走向各自的命运归途。</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\"><br style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;\" />\r\n</span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">基本上说，Bultooth、Mesh、NFC、UWB等协议早已被边缘化，除非在特定的应用领域及其应用场景；WiFi、Z-Wave虽然仍将作为补充协议而存在，但其局限性不可能晋级为主流的物联网短距协议；Weave虽然背景强大，但落地形成产业生态的时间窗口所剩无几；Thread与ZigBee已宣布合作，Thread和ZigBee事实上已经互联互通。</span> \r\n	</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\"><br style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;\" />\r\n</span> \r\n</p>\r\n<p style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;border:0px;color:#444444;font-size:16px;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;clear:both;font-family:\" letter-spacing:2px;line-height:22.4px;box-sizing:border-box;background-color:#ffffff;\"=\"\"> <span style=\"word-wrap:break-word;margin:0px;padding:0px;text-decoration:none;font-style:normal;font-size:16px;\">这也意味着，ZigBee已从短距离物联网协议的长期混乱中业已胜出。对此，业界趋于一致的判断是，在全球物联网的中国版图上，ZigBee已成最强协议，没有之一。</span> \r\n	</p>\r\n	<p>\r\n		<br />\r\n	</p>', 'upload/images/2018/01/18/201801185a600de7aaaeb.jpg', '16', '1516244363', '0', '1', '0', 'admin', '');

-- ----------------------------
-- Table structure for wl_page
-- ----------------------------
DROP TABLE IF EXISTS `wl_page`;
CREATE TABLE `wl_page` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `catid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '栏目id',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text COMMENT '内容',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `keyword` varchar(100) DEFAULT NULL COMMENT '关键字',
  `hits` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击次数',
  PRIMARY KEY (`id`),
  KEY `tid` (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='新闻表';

-- ----------------------------
-- Records of wl_page
-- ----------------------------
INSERT INTO `wl_page` VALUES ('16', '0', 'sdfsdfsdf', '', '1446639715', null, '0');
INSERT INTO `wl_page` VALUES ('20', '71', '           ', '<section class=\"about-us-intro page_box\" style=\"padding:0;\">\r\n<div class=\"container-fluid\">\r\n	<div class=\"row\">\r\n		<div class=\"col-md-6 ov_h\">\r\n			<img alt=\"\" src=\"/upload/category/2017125a3878759d244.jpg\" \"=\"\" /> \r\n		</div>\r\n<!-- end col -->\r\n		<div class=\"col-md-6 about_r\">\r\n			<div class=\"about-intro\">\r\n				<p class=\"subheading mt20\"></p>\r\n				<h2>	广州爱搜客网络科技有限公司</h2>\r\n				<p class=\"subheading mt20\">\r\n					www.aisoker.com\r\n				</p>\r\n				<p class=\"mt20 text_16 color_666\">\r\n					爱搜客专注于国内互联网营销的专业机构。我们通过提供SEM代理运营、移动互联网应用、营销型网络建设、全网整合营销、一站式外包等服务，助传统企业在互联网飞起来。<br />\r\n花更少的钱，建立一个属于自己的网站并实现盈利。\r\n				</p>\r\n			</div>\r\n		</div>\r\n<!-- end col -->\r\n	</div>\r\n<!-- end row -->\r\n</div>\r\n<!-- end container -->\r\n    </section>', '1513302650', '', '0');
INSERT INTO `wl_page` VALUES ('22', '80', '联系方式', '<div align=\"center\">\r\n	<img style=\"margin-bottom:15px;\" src=\"/skin/images/4.jpg\" />\r\n</div>\r\n<p align=\"center\">\r\n	地址：\r\n	广州市白云区西槎路骏富国际C座C622室<br />\r\n业务咨询：\r\n	13570421656（微信同号）<br />\r\n电话：\r\n	020-29801628<br />\r\n邮箱：\r\n	admin@aisoker.com\r\n</p>', '1516154085', '', '0');
INSERT INTO `wl_page` VALUES ('23', '81', '企业资质', '<div align=\"center\">\r\n	<img src=\"/upload/editor/image/20180118/20180118111453_50833.png\" title=\"企业资质\" alt=\"企业资质\" />\r\n</div>', '1516154134', '', '0');
INSERT INTO `wl_page` VALUES ('24', '82', '企业简介', '<p style=\"text-align:center;\">\r\n	<br />\r\n</p>\r\n<p style=\"text-align:center;\">\r\n	爱搜客智能家居系统通过物联网、⼈⼯智能、云计算等技术，连接基础电器，使设备互联互通，构建包括智能控制中心、智能照明系统、暖通环境系统、智能安防系统、能源管理系统、智能影音系统、门窗遮阳系统等七大系统。\r\n</p>\r\n<p>\r\n	<div style=\"text-align:center;\">\r\n		<br />\r\n	</div>\r\n	<div style=\"text-align:center;\">\r\n		团队坚持研发投⼊与设计创新，实现对家居、办公、酒店等场景的智能化，给用户创造更安全、更节能、更高效、可持续发展的居住环境。\r\n	</div>\r\n</p>\r\n<p style=\"text-align:center;\">\r\n	<img src=\"/upload/editor/image/20180208/20180208173130_51720.jpg\" title=\"企业简介\" alt=\"企业简介\" /> \r\n</p>\r\n<p style=\"text-align:center;\">\r\n	<br />\r\n</p>\r\n<p style=\"text-align:center;\">\r\n	<br />\r\n</p>\r\n<div style=\"text-align:center;\">\r\n	<strong>应用场景</strong> \r\n</div>\r\n<div style=\"text-align:center;\">\r\n	<br />\r\n</div>\r\n<div style=\"text-align:center;\">\r\n	爱搜客智能家居系统提出“场景即智能”的理念，推出三大场景应用方案：<strong>智慧家庭，智慧办公，智慧酒店</strong>，\r\n</div>\r\n<div style=\"text-align:center;\">\r\n	并在全球范围内实现项目成功落地。\r\n</div>\r\n<p style=\"text-align:center;\">\r\n	<br />\r\n</p>\r\n<p style=\"text-align:center;\">\r\n	<img src=\"/upload/editor/image/20180208/20180208173509_38012.jpg\" title=\"企业简介\" alt=\"企业简介\" /> \r\n</p>\r\n<p style=\"text-align:center;\">\r\n	<br />\r\n</p>', '1516154152', '', '0');

-- ----------------------------
-- Table structure for wl_position
-- ----------------------------
DROP TABLE IF EXISTS `wl_position`;
CREATE TABLE `wl_position` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `modelid` smallint(6) DEFAULT NULL COMMENT '模块名',
  `name` char(50) NOT NULL DEFAULT '' COMMENT '推荐位名称',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of wl_position
-- ----------------------------
INSERT INTO `wl_position` VALUES ('10', '55', '首页解决方案推荐', '0');
INSERT INTO `wl_position` VALUES ('11', '53', '首页新闻推荐', '0');

-- ----------------------------
-- Table structure for wl_poster
-- ----------------------------
DROP TABLE IF EXISTS `wl_poster`;
CREATE TABLE `wl_poster` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `name` varchar(100) NOT NULL DEFAULT '' COMMENT '广告名称',
  `url` varchar(100) NOT NULL DEFAULT '' COMMENT '广告url',
  `image` varchar(100) DEFAULT NULL COMMENT '图片',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `status` int(1) DEFAULT '0' COMMENT '0:不通过 1:通过',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `type` int(3) NOT NULL DEFAULT '0' COMMENT '分类id',
  `beizhu` text COMMENT '备注',
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='网站设置表';

-- ----------------------------
-- Records of wl_poster
-- ----------------------------
INSERT INTO `wl_poster` VALUES ('37', '  ', 'javascript:void(0)', 'upload/images/2017/12/09/201712095a2b56c8770d0.jpg', '4', '1', '1512789709', '18', '');
INSERT INTO `wl_poster` VALUES ('38', '  ', 'javascript:void(0)', 'upload/images/2017/12/09/201712095a2b596c0a285.jpg', '3', '1', '1512790401', '18', '');
INSERT INTO `wl_poster` VALUES ('41', ' ', 'javascript:void(0)', 'upload/images/2017/12/11/201712115a2e241c5cd72.jpg', '2', '1', '1512973344', '18', '');
INSERT INTO `wl_poster` VALUES ('42', ' ', 'javascript:void(0)', 'upload/images/2017/12/11/201712115a2e24588eea8.jpg', '1', '1', '1512973403', '18', '');
INSERT INTO `wl_poster` VALUES ('46', ' 3', 'javascript:void(0)', 'upload/images/2018/02/08/201802085a7c1634db42c.jpg', '0', '1', '1513305837', '29', '');
INSERT INTO `wl_poster` VALUES ('50', ' 3', 'javascript:void(0)', 'upload/images/2018/02/08/201802085a7c1cb339a23.jpg', '0', '1', '1513324783', '30', '');
INSERT INTO `wl_poster` VALUES ('51', ' 2', 'javascript:void(0)', 'upload/images/2018/02/08/201802085a7c1cd7a8775.jpg', '0', '1', '1513324802', '30', '');
INSERT INTO `wl_poster` VALUES ('52', ' 1', 'javascript:void(0)', 'upload/images/2018/02/08/201802085a7c1c7d64139.jpg', '0', '1', '1513324821', '30', '');
INSERT INTO `wl_poster` VALUES ('68', ' ', 'javascript:void(0)', 'upload/images/2018/01/18/201801185a604c7500b26.jpg', '0', '1', '1513650910', '34', '');
INSERT INTO `wl_poster` VALUES ('69', ' ', 'javascript:void(0)', 'upload/images/2018/01/18/201801185a604c8139f74.jpg', '0', '1', '1513651035', '34', '');
INSERT INTO `wl_poster` VALUES ('70', ' ', 'javascript:void(0)', 'upload/images/2018/01/18/201801185a604c8b43d06.jpg', '0', '1', '1513651052', '34', '');
INSERT INTO `wl_poster` VALUES ('71', ' ', 'javascript:void(0)', 'upload/images/2018/01/17/201801175a5f2eb75f170.jpg', '0', '1', '1513651068', '34', '');
INSERT INTO `wl_poster` VALUES ('72', ' ', 'javascript:void(0)', 'upload/images/2018/01/17/201801175a5f2eb02d5b0.jpg', '0', '1', '1513651084', '34', '');
INSERT INTO `wl_poster` VALUES ('73', ' ', 'javascript:void(0)', 'upload/images/2018/01/17/201801175a5f2ea779c6d.jpg', '0', '1', '1513651097', '34', '');
INSERT INTO `wl_poster` VALUES ('74', ' 2', 'javascript:void(0)', 'upload/images/2018/02/08/201802085a7c15ffd648e.jpg', '0', '1', '1513652920', '29', '');
INSERT INTO `wl_poster` VALUES ('75', ' 1', 'javascript:void(0)', 'upload/images/2018/02/08/201802085a7c15f6edeab.jpg', '0', '1', '1513653070', '29', '');

-- ----------------------------
-- Table structure for wl_product
-- ----------------------------
DROP TABLE IF EXISTS `wl_product`;
CREATE TABLE `wl_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `catid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '栏目id',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `des` varchar(800) DEFAULT NULL COMMENT '摘要',
  `content` text NOT NULL COMMENT '内容',
  `image` varchar(100) DEFAULT NULL COMMENT '图片',
  `hits` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击次数',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `position` varchar(50) DEFAULT '0' COMMENT '推荐位',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `username` char(50) NOT NULL DEFAULT '' COMMENT '发布人',
  `keyword` varchar(100) DEFAULT NULL COMMENT '关键字',
  `duo_img` varchar(1000) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `tid` (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wl_product
-- ----------------------------
INSERT INTO `wl_product` VALUES ('1', '93', '极锐系列智能开关', '这是一款拥有传统身材，却有不传统设计的开关。 结构上采用全新的分离式可拆卸结构设计，兼容传统开关的安装和接线方式；高灵敏电容式触摸设计，白色的钢琴烤漆加上幽蓝背光，极具科技感和时尚感。 支持本地触摸控制和手机远程控制，开关状态实时反馈；高阻燃PC底座，防浪涌设计。让您安装贴心，使用放心。', '<p>\r\n	这是一款拥有传统身材，却有不传统设计的开关。 结构上采用全新的分离式可拆卸结构设计，兼容传统开关的安装和接线方式；高灵敏电容式触摸设计，白色的钢琴烤漆加上幽蓝背光，极具科技感和时尚感。 支持本地触摸控制和手机远程控制，开关状态实时反馈；高阻燃PC底座，防浪涌设计。让您安装贴心，使用放心\r\n</p>\r\n<p>\r\n	这是一款拥有传统身材，却有不传统设计的开关。 \r\n结构上采用全新的分离式可拆卸结构设计，兼容传统开关的安装和接线方式；高灵敏电容式触摸设计，白色的钢琴烤漆加上幽蓝背光，极具科技感和时尚感。 \r\n支持本地触摸控制和手机远程控制，开关状态实时反馈；高阻燃PC底座，防浪涌设计。让您安装贴心，使用放心。\r\n</p>\r\n<p align=\"center\">\r\n	<img src=\"/upload/editor/image/20180118/20180118100757_26103.jpg\" title=\"极锐系列智能开关\" alt=\"极锐系列智能开关\" />\r\n</p>', 'upload/images/2018/01/17/201801175a5ee612dfc36.jpg', '20', '1516168503', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a5ff92f95a2e.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a5ff93832e89.png\',\n  3 => \'upload/images/2018/01/18/201801185a5ff952c445f.png\',\n  4 => \'upload/images/2018/01/18/201801185a5ff95d7cd0c.png\',\n)');
INSERT INTO `wl_product` VALUES ('2', '92', '小欧智能摄像机 ', '能听能说能看，手机远程观看', '<div class=\"fr_title\" style=\"color:#666666;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\" align=\"center\">\r\n<p style=\"padding:0px;margin:28px 0px 0px;color:#333333;font-size:30px;line-height:42px;\">\r\n	<img src=\"/upload/editor/image/20180117/20180117140909_87395.jpg\" title=\"小欧智能摄像机 \" alt=\"小欧智能摄像机 \" /> \r\n</p>\r\n<p style=\"padding:0px;margin:28px 0px 0px;color:#333333;font-size:30px;line-height:42px;\">\r\n	超强夜视，零光污染<br style=\"display:block;opacity:0;\" />\r\n夜间拍摄画面效果，与白天同样出色\r\n</p>\r\n	</div>\r\n<div class=\"fr_content\" style=\"margin-top:50px;color:#666666;font-family:pingfang, \" font-size:14px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\" align=\"center\">\r\n	<div class=\"fr_item one\" style=\"margin-top:30px;\">\r\n		<div>\r\n			10颗红外补光灯\r\n		</div>\r\n		<p style=\"padding:0px;margin:16px 0px 0px;font-size:16px;color:#888888;line-height:26px;\">\r\n			内置10颗红外补光灯，夜视效果居业内榜首，震慑盗贼潜行让他落荒而逃。\r\n		</p>\r\n	</div>\r\n	<div class=\"fr_item two\" style=\"margin-top:30px;\">\r\n		<div>\r\n			夜间拍摄距离高达6m\r\n		</div>\r\n		<p style=\"padding:0px;margin:16px 0px 0px;font-size:16px;color:#888888;line-height:26px;\">\r\n			夜间拍摄范围高达6米，搭配智能红外技术和WDR影像技术，让夜间画面效果与白天同样出色。\r\n		</p>\r\n	</div>\r\n	<div class=\"fr_item three\" style=\"margin-top:30px;\">\r\n		<div>\r\n			零光污染\r\n		</div>\r\n		<p style=\"padding:0px;margin:16px 0px 0px;font-size:16px;color:#888888;line-height:26px;\">\r\n			为了更好地呵护您的家人，我们使用零光污染的红外补光灯\r\n		</p>\r\n	</div>\r\n</div>\r\n<div align=\"center\">\r\n	<br />\r\n</div>', 'upload/images/2018/01/17/201801175a5ee7cf9c6d4.jpg', '79', '1516169138', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/17/201801175a5eee6c3285c.jpg\',\n  2 => \'upload/images/2018/01/17/201801175a5eefab533fb.jpg\',\n  3 => \'upload/images/2018/01/17/201801175a5f0a1047447.jpg\',\n  4 => \'upload/images/2018/01/17/201801175a5f0a17d931f.jpg\',\n  5 => \'upload/images/2018/01/17/201801175a5f0a1e62aa0.jpg\',\n)');
INSERT INTO `wl_product` VALUES ('3', '88', 'Allone Pro多功能智能主机', 'ORVIBO欧瑞博的【智家365】通过设备的个性化设置，满足不同的生活场景体验，同时，也为设备厂商提供智能、美观、易操作的标准APP，亦可根据设备厂商的需求及产品应用的特点， 为设备厂商提供APP定制化服务。此外，开放API接口，方便设备厂商或第三方接入自身APP。', '<div align=\"center\">\r\n	<img src=\"/upload/editor/image/20180118/20180118091644_47922.jpg\" title=\"Allone Pro多功能智能主机\" alt=\"Allone Pro多功能智能主机\" />\r\n</div>\r\n<p class=\"title\" style=\"padding:0px;margin:0px 0px 25px;font-size:24px;color:#555656;font-family:pingfang, \" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	从设备孤岛到互联互通的升级体验\r\n	</p>\r\n<p style=\"padding:0px;margin:0px;font-size:14px;color:#B0B0B0;font-family:pingfang, \" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	新Allone打破不同品牌、不同产品的技术壁垒，与丰富的第三方射频产品互联互通，可为用户提供更具竞争力的智能生活解决方案。真正“0”成本投入的智能化升级。\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>\r\n<p class=\"title\" style=\"padding:0px;margin:0px 0px 25px;font-size:24px;color:#555656;font-family:pingfang, \" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n		完全实现射频协议云端实时升级的智能遥控中心\r\n	</p>\r\n<p style=\"padding:0px;margin:0px;font-size:14px;color:#B0B0B0;font-family:pingfang, \" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n		新Allone支持市面上90%以上的射频设备的近场遥控、远程控制和场景联动，并在射频遥控覆盖距离上历史性地突破了300米。此外，新增射频加密功能，极大提升了设备控制的安全性。\r\n</p>\r\n<p style=\"padding:0px;margin:0px;font-size:14px;color:#B0B0B0;font-family:pingfang, \" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\"><br />\r\n	</p>\r\n<p class=\"title\" style=\"padding:0px;margin:0px 0px 25px;font-size:24px;color:#555656;font-family:pingfang, \" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n		支持市面上95%以上的红外家电设备控制\r\n</p>\r\n<p style=\"padding:0px;margin:0px;font-size:14px;color:#B0B0B0;font-family:pingfang, \" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:left;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n		新Allone集成遥控红外功能，支持对市面上95%以上的红外家电（空调、电视、投影仪、风扇等）的智能化控制和场景联动。同时，云端红外码库支持8000+红外设备型号，超过同类智能控制中心2-3倍。\r\n	</p>\r\n	<p>\r\n		<br />\r\n	</p>', 'upload/images/2018/01/18/201801185a5ff4a898b89.jpg', '3', '1516237876', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a5ff5ab02f51.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a5ff5b1b81b3.jpg\',\n  3 => \'upload/images/2018/01/18/201801185a5ff5b801c48.jpg\',\n  4 => \'upload/images/2018/01/18/201801185a5ff5bd40ea6.jpg\',\n  5 => \'upload/images/2018/01/18/201801185a5ff5ef73199.jpg\',\n)');
INSERT INTO `wl_product` VALUES ('4', '93', '零火线两路绑定开关04型', '支持IEEE 802.15.4无线通信技术, 可与其他设备绑定，实现单路/二路/三路开关控制多个设备或多个开关控制一个设备；采用国家标准尺寸设计，方便替换普通墙面开关；操作简单、快捷；', '支持IEEE 802.15.4无线通信技术, 可与其他设备绑定，实现单路/二路/三路开关控制多个设备或多个开关控制一个设备；采用国家标准尺寸设计，方便替换普通墙面开关；操作简单、快捷；<img src=\"/upload/editor/image/20180118/20180118092832_52643.png\" title=\"零火线两路绑定开关04型\" alt=\"零火线两路绑定开关04型\" />', 'upload/images/2018/01/18/201801185a5ff77e0eb61.png', '4', '1516238608', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a5ff851f3ad9.png\',\n  2 => \'upload/images/2018/01/18/201801185a5ff85871f6e.png\',\n  3 => \'upload/images/2018/01/18/201801185a5ff86030c7c.png\',\n  4 => \'upload/images/2018/01/18/201801185a5ff8683cfda.png\',\n)');
INSERT INTO `wl_product` VALUES ('5', '87', '网络智能锁系列（可视）', '我们具有行业领先技术，创新能力和高效的研发团队，可以为传统行业走向智能化道路提供不同的合作模式和解决方案', '<img src=\"/upload/editor/image/20180118/20180118094106_84204.png\" title=\"网络智能锁系列（可视）\" alt=\"网络智能锁系列（可视）\" /><img src=\"/upload/editor/image/20180118/20180118094116_19121.png\" title=\"网络智能锁系列（可视）\" alt=\"网络智能锁系列（可视）\" /><br />', 'upload/images/2018/01/18/201801185a5ffa8f5a1f6.png', '3', '1516239266', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a5ffa94a6605.png\',\n  2 => \'upload/images/2018/01/18/201801185a5ffa9b12650.png\',\n  3 => \'upload/images/2018/01/18/201801185a5ffa9f64e73.png\',\n  4 => \'upload/images/2018/01/18/201801185a5ffaa3a7728.png\',\n)');
INSERT INTO `wl_product` VALUES ('6', '88', '全角度红外转发器', '我们具有行业领先技术，创新能力和高效的研发团队，可以为传统行业走向智能化道路提供不同的合作模式和解决方案。', '<div align=\"center\">\r\n	<img src=\"/upload/editor/image/20180118/20180118100021_92617.jpg\" title=\"全角度红外转发器\" alt=\"全角度红外转发器\" />\r\n</div>', 'upload/images/2018/01/18/201801185a5fff5c9df37.jpg', '17', '1516240675', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a5fff62e2220.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a5fff693e0ed.jpg\',\n  3 => \'upload/images/2018/01/18/201801185a5fff6fea8d1.jpg\',\n  4 => \'upload/images/2018/01/18/201801185a5fff75ded88.jpg\',\n)');
INSERT INTO `wl_product` VALUES ('7', '87', '温度控制器', '支持IEEE 802.15.4（ZigBee/SmartRoom）无线通信方式；\r\n金属色边框，2.5D钢化玻璃，E2C镀膜，黑色半透点阵显示；\r\n手机远程控制，APP智能7*24小时编程；\r\n满足美国HVAC温控系统要求，可通过移动智能终端，远程监测选中区域内的温度变化，并进行智能控制，保持室内舒适环境；\r\n具有近场唤醒功能；\r\n具有多种工作模式，应用广泛，满足不同用户的需求；\r\n外观设计时尚，操作界面简洁美观、易操作；', '<p align=\"center\">\r\n	<img src=\"/upload/editor/image/20180118/20180118100633_93391.png\" title=\"温度控制器\" alt=\"温度控制器\" />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 'upload/images/2018/01/18/201801185a60007ec67a8.jpg', '13', '1516241002', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a60009039523.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a600094c1281.jpg\',\n  3 => \'upload/images/2018/01/18/201801185a60009bc72b6.jpg\',\n  4 => \'upload/images/2018/01/18/201801185a6000a4644f6.jpg\',\n)');

-- ----------------------------
-- Table structure for wl_safe_ip
-- ----------------------------
DROP TABLE IF EXISTS `wl_safe_ip`;
CREATE TABLE `wl_safe_ip` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(30) NOT NULL DEFAULT '',
  `gqtime` int(11) DEFAULT NULL COMMENT '过期时间',
  PRIMARY KEY (`id`),
  KEY `ip` (`ip`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='后台管理员IP过滤';

-- ----------------------------
-- Records of wl_safe_ip
-- ----------------------------
INSERT INTO `wl_safe_ip` VALUES ('7', '127.0.0.1', '1512080744');

-- ----------------------------
-- Table structure for wl_search
-- ----------------------------
DROP TABLE IF EXISTS `wl_search`;
CREATE TABLE `wl_search` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '搜索词',
  `hits` int(10) unsigned NOT NULL DEFAULT '1' COMMENT '搜索次数',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '初始点击时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=191 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='新闻表';

-- ----------------------------
-- Records of wl_search
-- ----------------------------

-- ----------------------------
-- Table structure for wl_setting
-- ----------------------------
DROP TABLE IF EXISTS `wl_setting`;
CREATE TABLE `wl_setting` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键ID',
  `key` varchar(100) NOT NULL DEFAULT '' COMMENT 'key',
  `value` text COMMENT 'value',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `size` int(5) NOT NULL DEFAULT '1' COMMENT '长度',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0' COMMENT '1:系统字段，不允许删除。0:用户自定义字段',
  `style` varchar(100) NOT NULL DEFAULT 'text' COMMENT '字段风格，一般为text和images',
  `beizhu` varchar(255) DEFAULT NULL COMMENT '备注',
  PRIMARY KEY (`id`),
  UNIQUE KEY `key_type` (`key`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC COMMENT='网站设置表';

-- ----------------------------
-- Records of wl_setting
-- ----------------------------
INSERT INTO `wl_setting` VALUES ('1', 'title', '通用行业企业官网', '网站标题', '30', '23', '1', 'text', '');
INSERT INTO `wl_setting` VALUES ('2', 'keywords', '广州网站优化,广州SEO,品牌推广,全网营销推广,竞价托管,建设网站公司,营销推广,公司网站建设', '网站关键字', '50', '22', '1', 'text', '多关键词之间用空格或者“,”隔开');
INSERT INTO `wl_setting` VALUES ('3', 'description', '广州爱搜客网络营销公司,提供互联网营销、企业建站、网站seo、sem推广、seo排名优化、网站营销、竞价托管外包的广州seo公司,全网营销公司。联系电话:020-29801628', '网站描述', '40', '21', '1', 'textarea', '');
INSERT INTO `wl_setting` VALUES ('4', 'logo', 'setting/2018015a5eb5a05011a.png', '网站logo', '1', '1', '0', 'image', null);
INSERT INTO `wl_setting` VALUES ('13', 'copy', '版权所有：广州爱搜客网络科技有限公司 <a class=\"mr10\" href=\"http://www.miibeian.gov.cn/\" target=\"_blank\"> 粤ICP备16038268号-1</a>粤公网安备 44011102000553号  ', '底部版权信息', '40', '0', '0', 'textarea', '');
INSERT INTO `wl_setting` VALUES ('26', 'm_logo', 'setting/2017125a38aa04b976f.png', '手机端网站logo', '50', '0', '0', 'image', '');
INSERT INTO `wl_setting` VALUES ('30', 'tel', '020-29801628', '首页电话', '50', '0', '0', 'text', '');
INSERT INTO `wl_setting` VALUES ('31', 'email', 'admin@aisoker.com', '邮箱地址', '50', '0', '0', 'text', '');
INSERT INTO `wl_setting` VALUES ('32', 'addr', '广州市白云区西槎路骏富国际C座6层', '公司地址', '50', '0', '0', 'text', '');
INSERT INTO `wl_setting` VALUES ('33', 'wap_foot', '<span>\r\n      <br>广州爱搜客网络科技有限公司 <br>\r\n      粤ICP备16038268号-1<br>\r\n       地址：广州市白云区西槎路骏富国际C座C622室 电话：020-29801628\r\n\r\n     </span>', 'wap底部公司信息', '50', '0', '0', 'textarea', '');
INSERT INTO `wl_setting` VALUES ('34', 'erweima', 'setting/2018015a67fdbd258e8.jpg', 'pc底部公众号二维码', '50', '0', '0', 'image', '');
INSERT INTO `wl_setting` VALUES ('35', 'pc_phone', 'setting/2018015a5ebf75e9b8b.jpg', 'pc底部移动端网站二维码', '50', '0', '0', 'image', '');
INSERT INTO `wl_setting` VALUES ('36', 'pc_mobile', '13570421656（微信同号）', 'pc底部手机号', '50', '0', '0', 'text', '');

-- ----------------------------
-- Table structure for wl_solution
-- ----------------------------
DROP TABLE IF EXISTS `wl_solution`;
CREATE TABLE `wl_solution` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `catid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '栏目id',
  `title` varchar(100) NOT NULL DEFAULT '' COMMENT '标题',
  `des` varchar(800) DEFAULT NULL COMMENT '摘要',
  `content` text NOT NULL COMMENT '内容',
  `image` varchar(100) DEFAULT NULL COMMENT '图片',
  `hits` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '点击次数',
  `uptime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `position` varchar(50) DEFAULT '0' COMMENT '推荐位',
  `status` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '状态',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  `username` char(50) NOT NULL DEFAULT '' COMMENT '发布人',
  `keyword` varchar(100) DEFAULT NULL COMMENT '关键字',
  `duo_img` varchar(1500) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `tid` (`catid`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wl_solution
-- ----------------------------
INSERT INTO `wl_solution` VALUES ('1', '86', '家居装饰小贴士与产品配置推荐', '24小时的贴身服务 无微不至的关爱', '<div class=\"tit\" style=\"margin:0px;padding:0px;list-style:none;border:0px;font-size:16px;line-height:30px;color:#999999;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	通常同一房间内开关设计在同一水平线上，一般距地面1.3m或1.4m，如果两个开关并列安装，它们之间误差应不超过5mm。\r\n	</div>\r\n<div class=\"tit\" style=\"margin:0px;padding:0px;list-style:none;border:0px;font-size:16px;line-height:30px;color:#999999;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	除按装高度外，还要尽量安装在通风干燥的位置。\r\n</div>\r\n<div class=\"tit\" style=\"margin:0px;padding:0px;list-style:none;border:0px;font-size:16px;line-height:30px;color:#999999;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	室内主要灯具开关的位置，要配合房门开门的朝向，不要被门或家具挡住即可。\r\n	</div>\r\n<div class=\"tit\" style=\"margin:0px;padding:0px;list-style:none;border:0px;font-size:16px;line-height:30px;color:#999999;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	短时间照明的开关应该装在房间外（例如洗手间、厨房、阳台）这样就不用摸黑开灯。厨房、卫生间、露台，开关尽可能安装在不靠近用水的区域。如靠近，当加配开关防溅盒。\r\n</div>\r\n<img src=\"/upload/editor/image/20180117/20180117162519_47295.png\" title=\"家居装饰小贴士与产品配置推荐\" alt=\"家居装饰小贴士与产品配置推荐\" />', 'upload/images/2018/01/17/201801175a5f083ef2c35.jpg', '3', '1516177413', '[10]', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a6041bb383e4.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a6041c477006.jpg\',\n)');
INSERT INTO `wl_solution` VALUES ('2', '86', '家居区域解决方案', '私人订制 个性化智能生活', '<div class=\"tit\" style=\"margin:0px;padding:0px;list-style:none;border:0px;font-size:18px;line-height:24px;color:#444444;font-weight:bold;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#f5f5f5;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n<p align=\"center\">\r\n	<img src=\"/upload/editor/image/20180117/20180117163654_32434.png\" title=\"家居区域解决方案\" alt=\"家居区域解决方案\" /> \r\n</p>\r\n<p>\r\n	便利开锁\r\n</p>\r\n	</div>\r\n<div class=\"tit1\" style=\"margin:6px 0px 39px;padding:0px;list-style:none;border:0px;font-size:16px;line-height:24px;color:#666666;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#f5f5f5;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	当家居遇上智能之后，从进门的那一刻起，智能生活的大门便已打开。智能家居提供各种开锁方式，赋予门锁以活力，为家庭生活增添乐趣，带来便利。从此，出门忘记带钥匙，客人来访无人等意外情况将不再烦恼。\r\n</div>\r\n<div class=\"tit\" style=\"margin:0px;padding:0px;list-style:none;border:0px;font-size:18px;line-height:24px;color:#444444;font-weight:bold;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#f5f5f5;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	提升安全\r\n	</div>\r\n<div class=\"tit1\" style=\"margin:6px 0px 39px;padding:0px;list-style:none;border:0px;font-size:16px;line-height:24px;color:#666666;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#f5f5f5;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	智能的生活，安全的生活。还在为家中无人时家里的安全感到担忧？人不在，有智能家居在，家庭安全亦无需困扰。一旦家中出现异常情况，智能手机等移动终端便会第一时间收到报警信息，以便我们采取应对措施，及时进行处理。\r\n</div>\r\n<div class=\"tit\" style=\"margin:0px;padding:0px;list-style:none;border:0px;font-size:18px;line-height:24px;color:#444444;font-weight:bold;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#f5f5f5;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	一键场景\r\n	</div>\r\n<div class=\"tit1\" style=\"margin:6px 0px 39px;padding:0px;list-style:none;border:0px;font-size:16px;line-height:24px;color:#666666;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#f5f5f5;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	灯光、窗帘、电视、空调……家中的设备很多，又常会需要同时工作或关闭，如果一个一个开关，效率很低，甚至麻烦。而一键场景可完美解决你的烦恼，只需轻点手机APP，或者手指触摸一下智能开关，即可同时操控诸多电器，高效又快捷。\r\n</div>', 'upload/images/2018/01/17/201801175a5f0b056781f.jpg', '3', '1516178031', '[10]', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a6041822a620.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a60418a264dc.jpg\',\n  3 => \'upload/images/2018/01/18/201801185a604195f2997.jpg\',\n)');
INSERT INTO `wl_solution` VALUES ('3', '85', '家庭安全问题', '伴随经济的飞速发展和城市人口的急剧增加，盗窃、入室抢劫等事件的增多给人们的安定生活带来了很大的影响，同时现代生活节奏越来越快，除了繁忙的工作之外，比如照看老人、小孩、宠物等工作让很多年轻人无暇顾及......', '<p>\r\n	<span style=\"color:#666666;font-family:\" font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:center;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#f8f8f8;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\"><img src=\"/upload/editor/image/20180117/20180117163854_92971.jpg\" title=\"家庭安全问题\" alt=\"家庭安全问题\" /><img src=\"/upload/editor/image/20180117/20180117163903_99475.jpg\" title=\"家庭安全问题\" alt=\"家庭安全问题\" /><br />\r\n</span> \r\n</p>\r\n<p>\r\n	<span style=\"color:#666666;font-family:\" font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:center;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#f8f8f8;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">一旦打开智能门锁，报警信号立马发送给主人，您可以在手机远程实时查看玄关、客厅视频情况;</span> \r\n</p>\r\n<span style=\"color:#666666;font-family:\" font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:center;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#f8f8f8;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">有人靠近客厅阳台，红外入侵探测器感知，您可以通过手机获得报警信号，并手机远程实时查看客厅视频；</span><br style=\"margin:0px;padding:0px;list-style:none;border:0px;color:#666666;font-family:\" font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:center;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#f8f8f8;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n<span style=\"color:#666666;font-family:\" font-size:16px;font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:center;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;background-color:#f8f8f8;text-decoration-style:initial;text-decoration-color:initial;display:inline=\"\" !important;float:none;\"=\"\">同时声光报警器鸣叫，威吓闯入者并引起外部人员注意。</span>', 'upload/images/2018/01/17/201801175a5f0b6322950.jpg', '6', '1516178223', '[10]', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a6041443e5af.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a60414d5ab13.jpg\',\n)');
INSERT INTO `wl_solution` VALUES ('4', '84', '物联传感智能会议室方案', '高效的会议室管理，推进高效的会议', '<h4 style=\"margin:0px 0px 40px;padding:0px;list-style:none;border:0px;font-size:24px;font-weight:normal;color:#666666;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;letter-spacing:normal;orphans:2;text-align:center;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	智能会议室——推进高效企业运作\r\n	</h4>\r\n<p style=\"margin:0px;padding:0px;list-style:none;border:0px;font-size:22px;line-height:48px;color:#16AFBF;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:center;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	企业有很多会议室，却不够用？\r\n		</p>\r\n<p style=\"margin:0px;padding:0px;list-style:none;border:0px;font-size:22px;line-height:48px;color:#16AFBF;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:center;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	会议室申请了，却没有使用？\r\n	</p>\r\n<p style=\"margin:0px;padding:0px;list-style:none;border:0px;font-size:22px;line-height:48px;color:#16AFBF;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:center;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	会议没有按照时间表及时进行或者拖延而影响后续安排？\r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>\r\n		<p>\r\n			<br />\r\n		</p>', 'upload/images/2018/01/17/201801175a5f0c01b7103.jpg', '12', '1516178352', '[10]', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a60412aed82e.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a6041317cab5.jpg\',\n)');
INSERT INTO `wl_solution` VALUES ('5', '83', '什么是智能家居？', '家庭生活自动化 全新的智能生活体验', '<div align=\"center\">\r\n	<img src=\"/upload/editor/image/20180118/20180118103345_78719.jpg\" title=\"什么是智能家居？\" alt=\"什么是智能家居？\" /><img src=\"/upload/editor/image/20180118/20180118103412_24955.jpg\" title=\"什么是智能家居？\" alt=\"什么是智能家居？\" /> \r\n</div>', 'upload/images/2018/01/18/201801185a60072c75fd5.jpg', '4', '1516242709', '[10]', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a6040f8004a1.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a6040ff546de.jpg\',\n  3 => \'upload/images/2018/01/18/201801185a60410549ad7.jpg\',\n  4 => \'upload/images/2018/01/18/201801185a60410c0e201.jpg\',\n  5 => \'upload/images/2018/01/18/201801185a6041175065b.jpg\',\n)');
INSERT INTO `wl_solution` VALUES ('6', '83', '智能养老', '有时，父母会对我们说谎，说他们一切都好，真的好吗？比起隔着电话的问候，我们为孝顺的你准备了一系列智慧养老设备——父母不用再面对电气繁琐的操作，而你也将实时了解他们的健康状况，解决所有烦恼。', '<div class=\"tit\" style=\"margin:0px;padding:0px 0px 0px 20px;list-style:none;border:0px;font-size:18px;font-weight:bold;color:#444444;height:18px;line-height:18px;background:url(\" upload=\"\" images=\"\" 2018=\"\" 01=\"\" 18=\"\" 201801185a6008cc5790a.png\"font-family:\"font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	老年人口基数达2亿，比重攀升\r\n	</div>\r\n<div class=\"tit1\" style=\"margin:16px 0px 30px 20px;padding:0px;list-style:none;border:0px;font-size:16px;line-height:30px;color:#666666;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	根据民政部发布的《2013年社会发展服务统计公报》，截止2013年底，全国60岁及以上老人达2亿，占人口比重14.9%，该数字仍在攀升。\r\n</div>\r\n<div class=\"tit\" style=\"margin:0px;padding:0px 0px 0px 20px;list-style:none;border:0px;font-size:18px;font-weight:bold;color:#444444;height:18px;line-height:18px;background:url(\" upload=\"\" images=\"\" 2018=\"\" 01=\"\" 18=\"\" 201801185a6008cc5790a.png\"font-family:\"font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	老年人赡养问题\r\n	</div>\r\n<div class=\"tit1\" style=\"margin:16px 0px 30px 20px;padding:0px;list-style:none;border:0px;font-size:16px;line-height:30px;color:#666666;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	两代独生子女政策，赡养老人的问题压力重重。421家庭（父母4人、夫妻2人以及孩子1人）的存在让养老院成为了无奈之下的选择。无论在城市还是农村，“倒金字塔式”的家庭结构和“空巢”家庭数量不断增多，社会化养老成为大势所趋。\r\n</div>\r\n<div class=\"tit\" style=\"margin:0px;padding:0px 0px 0px 20px;list-style:none;border:0px;font-size:18px;font-weight:bold;color:#444444;height:18px;line-height:18px;background:url(\" upload=\"\" images=\"\" 2018=\"\" 01=\"\" 18=\"\" 201801185a6008cc5790a.png\"font-family:\"font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	养老院发展与安全问题\r\n	</div>\r\n<div class=\"tit1\" style=\"margin:16px 0px 30px 20px;padding:0px;list-style:none;border:0px;font-size:16px;line-height:30px;color:#666666;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n	目前，全国各类养老服务机构总计4.2万余个，拥有床位493.7万张。<br style=\"margin:0px;padding:0px;list-style:none;border:0px;\" />\r\n随着中国老龄化的趋势，养老服务机构数目还将大幅增多。<br style=\"margin:0px;padding:0px;list-style:none;border:0px;\" />\r\n目前大部分养老机构的设施非常简陋。\r\n</div>\r\n<p>\r\n	<br />\r\n</p>\r\n<div class=\"tit1\" style=\"margin:27px 0px 0px;padding:0px;list-style:none;border:0px;font-size:18px;line-height:24px;color:#444444;font-weight:bold;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n		紧急求救系统\r\n	</div>\r\n<div class=\"tit2\" style=\"margin:20px 0px 0px;padding:0px;list-style:none;border:0px;font-size:16px;line-height:30px;color:#666666;font-family:\" font-style:normal;font-variant-ligatures:normal;font-variant-caps:normal;font-weight:400;letter-spacing:normal;orphans:2;text-align:start;text-indent:0px;text-transform:none;white-space:normal;widows:2;word-spacing:0px;-webkit-text-stroke-width:0px;text-decoration-style:initial;text-decoration-color:initial;\"=\"\">\r\n		每个床位边安置紧急按钮，大部分老人由于身体机能衰退，容易有心脏病、脑溢血等突发病，紧急按钮给予老人最为快捷的求助途径；<br style=\"margin:0px;padding:0px;list-style:none;border:0px;\" />\r\n当房间发生任何火灾等情况，卧床不能行动的老人，能及时按下紧急按钮，向外界求助，避免悲剧发生；<br style=\"margin:0px;padding:0px;list-style:none;border:0px;\" />\r\n	<p>\r\n		浴室、走廊、楼梯、活动场所等，老人经常活动，且容易发生滑倒、摔跤等意外的区域配置合适数量紧急按钮。\r\n	</p>\r\n	<p>\r\n		<img src=\"/upload/editor/image/20180118/20180118103906_62737.jpg\" title=\"智能养老\" alt=\"智能养老\" /> \r\n	</p>\r\n</div>\r\n<p>\r\n	<br />\r\n</p>\r\n<p>\r\n	<br />\r\n</p>', 'upload/images/2018/01/18/201801185a60087fd6c7e.jpg', '8', '1516243047', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a6040d678d5d.png\',\n  2 => \'upload/images/2018/01/18/201801185a6040e36c91e.jpg\',\n)');
INSERT INTO `wl_solution` VALUES ('7', '83', '智慧酒店解决方案', '我们具有行业领先技术，创新能力和高效的研发团队，可以为传统行业走向智能化道路提供不同的合作模式和解决方案。', '<div align=\"center\">\r\n	<img src=\"/upload/editor/image/20180118/20180118104309_87096.jpg\" title=\"智慧酒店解决方案\" alt=\"智慧酒店解决方案\" /> \r\n</div>', 'upload/images/2018/01/18/201801185a600990af42e.png', '9', '1516243188', '0', '1', '0', 'admin', '', 'array (\n  1 => \'upload/images/2018/01/18/201801185a6040bdcb065.jpg\',\n  2 => \'upload/images/2018/01/18/201801185a6040c6eee1e.jpg\',\n)');

-- ----------------------------
-- Table structure for wl_type
-- ----------------------------
DROP TABLE IF EXISTS `wl_type`;
CREATE TABLE `wl_type` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(30) NOT NULL DEFAULT '' COMMENT '分类名称',
  `model` char(20) NOT NULL DEFAULT '' COMMENT '分类模型(和对应的数据库表一直)',
  `des` text COMMENT '分类描述',
  `listorder` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- ----------------------------
-- Records of wl_type
-- ----------------------------
INSERT INTO `wl_type` VALUES ('1', '文字链接', 'links', '是的发送到2', '0');
INSERT INTO `wl_type` VALUES ('2', '图片链接', 'links', null, '0');
INSERT INTO `wl_type` VALUES ('5', '电子工具类', 'brand', '', '0');
INSERT INTO `wl_type` VALUES ('27', '切割工具', 'brand', '', '0');
INSERT INTO `wl_type` VALUES ('29', 'pc站banner', 'poster', '', '0');
INSERT INTO `wl_type` VALUES ('30', '手机站首页banner', 'poster', '', '0');
INSERT INTO `wl_type` VALUES ('34', '资质荣誉', 'poster', '', '0');
