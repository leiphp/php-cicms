
CREATE TABLE IF NOT EXISTS `<$model_tablename>` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8  AUTO_INCREMENT=1 ;
