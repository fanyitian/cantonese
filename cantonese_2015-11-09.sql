# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.6.11)
# Database: cantonese
# Generation Time: 2015-11-09 04:05:28 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table activity
# ------------------------------------------------------------

DROP TABLE IF EXISTS `activity`;

CREATE TABLE `activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `title` varchar(128) NOT NULL DEFAULT '' COMMENT '标题',
  `contents` text COMMENT '内容',
  `html` text COMMENT 'html内容',
  `u_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '更新时间',
  `c_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='活动';

LOCK TABLES `activity` WRITE;
/*!40000 ALTER TABLE `activity` DISABLE KEYS */;

INSERT INTO `activity` (`id`, `title`, `contents`, `html`, `u_time`, `c_time`)
VALUES
	(3,'11-08','我知道asdf asdf\n1. * asdf','<p>我知道asdf asdf</p>\n<ol>\n<li><ul>\n<li>asdf</li>\n</ul>\n</li>\n</ol>\n','2015-11-09 10:55:25','2015-11-08 22:37:07'),
	(6,'11-09','\n**粤语社**\n![图片](http://cantonese/public/1109/icon.jpg)\n\nCantonese.pdf\n[Cantonese.pdf](http://cantonese/public/1109/cantonese.pdf)\n\n','<p><strong>粤语社</strong>\n<img src=\"http://cantonese/public/1109/icon.jpg\" alt=\"图片\"></p>\n<p>Cantonese.pdf\n<a href=\"http://cantonese/public/1109/cantonese.pdf\">Cantonese.pdf</a></p>\n','2015-11-09 10:56:46','2015-11-09 00:27:15');

/*!40000 ALTER TABLE `activity` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table download
# ------------------------------------------------------------

DROP TABLE IF EXISTS `download`;

CREATE TABLE `download` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `name` varchar(128) NOT NULL DEFAULT '' COMMENT '名称',
  `address` varchar(128) DEFAULT '' COMMENT '下载地址',
  `c_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='下载';

LOCK TABLES `download` WRITE;
/*!40000 ALTER TABLE `download` DISABLE KEYS */;

INSERT INTO `download` (`id`, `name`, `address`, `c_time`)
VALUES
	(1,'微电影书条女孩台詞','http://pan.baidu.com/s/1nt9yDol','2015-11-09 00:05:33'),
	(2,'微电影书条女孩视频','http://pan.baidu.com/s/1eQBEQhc','2015-11-09 00:06:38'),
	(3,'测试pdf','/Public/Download/Cantonese.pdf','2015-11-09 00:15:41'),
	(4,'书条女孩字幕','http://pan.baidu.com/s/1nt9yDol','2015-11-09 00:18:04'),
	(5,'书条女孩视频 密码: 5phr','http://pan.baidu.com/s/1eQBEQhc','2015-11-09 00:18:20'),
	(6,'香港话教程 密码:abup','http://pan.baidu.com/s/1jGyER4q','2015-11-09 00:18:44'),
	(7,'花樣年華片斷  密码: ams4','http://pan.baidu.com/s/1c0r0cbm','2015-11-09 00:19:00');

/*!40000 ALTER TABLE `download` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table notice
# ------------------------------------------------------------

DROP TABLE IF EXISTS `notice`;

CREATE TABLE `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `name` varchar(128) NOT NULL DEFAULT '' COMMENT '名称',
  `contents` text COMMENT '内容',
  `c_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='通知';

LOCK TABLES `notice` WRITE;
/*!40000 ALTER TABLE `notice` DISABLE KEYS */;

INSERT INTO `notice` (`id`, `name`, `contents`, `c_time`)
VALUES
	(5,'升级','建立大本营','2015-11-09 11:54:40'),
	(6,'上课','2015-11-13 周五 19:00-21:00<br>\n地点：百度大厦-F7-山桃红 CW区11/12号电梯 ','2015-11-09 11:49:30');

/*!40000 ALTER TABLE `notice` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
