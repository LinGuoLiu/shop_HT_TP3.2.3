-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2018-05-19 12:40:29
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_news`
--

-- --------------------------------------------------------

--
-- 表的结构 `tb_category`
--

CREATE TABLE IF NOT EXISTS `tb_category` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `categoryId` varchar(2) NOT NULL,
  `categoryName` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tb_dingdan`
--

CREATE TABLE IF NOT EXISTS `tb_dingdan` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `order_mens` varchar(16) NOT NULL,
  `address` varchar(100) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `time` varchar(16) NOT NULL,
  `price` varchar(16) NOT NULL,
  `way` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tb_dingdan`
--

INSERT INTO `tb_dingdan` (`id`, `order_mens`, `address`, `tel`, `time`, `price`, `way`) VALUES
(1, '艾迪', '湖北省 武汉市 雄楚大道666号', '15871145629', '2018-5-1', '78.00', '顺丰快递'),
(2, '阿斯蒂芬', '广东省 茂名市 茂南区区 官渡13号大院', '13771455627', '2018/05/12', '39.90', '圆通快递'),
(3, ' 渣渣辉', '香港九龙', '13562654654', '2018-5-2', '139.00', '天天快递'),
(4, '胡巴', '妖怪镇小妖村萌妖大道17号', '13134568523', '2018-5-2', '365.90', '韵达快递'),
(5, '科比', '美国加利福尼亚州洛杉矶长滩137号', '13265695487', '2018-5-2', '398.90', '顺丰快递'),
(6, '史蒂芬', ' 广州市海珠区南北广场3楼', '15425636697', '2018-5-2', '127.00', '申通快递'),
(7, '李大胆', '湖北省襄阳市南漳县下塘村二组15号', '13562456985', '2018-5-2', '35.50', '邮政'),
(8, '江枫', '北京市朝阳区朝阳北路101号', '13547856758', '2018-5-2', '16.00', '天天快递'),
(9, '邓飞龙', '北京市丰台区莲花池东路118号', '13686755458', '2018-5-2', '45.90', '顺丰快递'),
(10, '陈少峰', '四川省成都市武侯区萃华路89号', '13625948856', '2018-5-2', '71.00', '邮政');

-- --------------------------------------------------------

--
-- 表的结构 `tb_news`
--

CREATE TABLE IF NOT EXISTS `tb_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `categoryId` varchar(2) NOT NULL,
  `title` varchar(100) NOT NULL,
  `keywords` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `publishTime` int(11) NOT NULL,
  `clicked` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `tb_shopping`
--

CREATE TABLE IF NOT EXISTS `tb_shopping` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `sname` varchar(16) NOT NULL,
  `sjiage` varchar(16) NOT NULL,
  `ssj` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tb_shopping`
--

INSERT INTO `tb_shopping` (`id`, `sname`, `sjiage`, `ssj`) VALUES
(1, '水蜜桃味 脉动 功能性饮料', '39.90', '2018-5-11'),
(3, '良品铺子手剥瓜子', '4.50', '2018-5-1'),
(4, '农家汇  山东大樱桃', '29.90', '2018-5-1'),
(5, '香港老友记 金凌万现酥', '9.90', '2018-5-1'),
(6, '方家铺子 桂圆肉458g ', '14.90', '2018-5-1'),
(7, '韩国 炸酱面', '3.90', '2018-5-1'),
(8, '青岛 蓝莓干', '8.90', '2018-5-1'),
(9, '上珍果   山楂卷', '4.90', '2018-4-28'),
(10, '康师傅 牛奶夹心饼干', '7.9', '2018-5-28');

-- --------------------------------------------------------

--
-- 表的结构 `tb_users`
--

CREATE TABLE IF NOT EXISTS `tb_users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` char(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `password`) VALUES
(1, '艾迪', '698d51a19d8a121ce581499d7b701668'),
(2, '阿斯蒂芬', '111'),
(3, '史蒂夫', '111'),
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(5, '刘比利', '111'),
(6, '保罗', '111'),
(7, '詹姆斯', '111'),
(8, '胡巴', '111'),
(9, '如花', '111'),
(10, '至尊宝', '111');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
