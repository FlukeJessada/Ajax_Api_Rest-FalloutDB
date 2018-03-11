-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

CREATE DATABASE `falloutdb` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `falloutdb`;

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(3) unsigned zerofill NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` char(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `member` (`id`, `user`, `pass`) VALUES
(000,	'admin',	'admin'),
(001,	'fallout',	'fallout');

DROP TABLE IF EXISTS `weapon`;
CREATE TABLE `weapon` (
  `id` int(3) unsigned zerofill NOT NULL,
  `name` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL,
  `dps` varchar(5) NOT NULL,
  `rof` varchar(5) NOT NULL,
  `ammo` varchar(20) NOT NULL,
  `baseid` varchar(8) NOT NULL,
  `pic` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `weapon` (`id`, `name`, `role`, `dps`, `rof`, `ammo`, `baseid`, `pic`) VALUES
(001,	'10mm Pistol',	'Pistol',	'82.4',	'40',	'10mm',	'00004822',	'10mm Pistol'),
(002,	'.44 Pistol',	'Pistol',	'28.8',	'6',	'.44 round',	'000ce97d',	'.44 Pistol'),
(003,	'Western Revolver',	'Pistol',	'36',	'6',	'.44 round',	'xx0415b3',	'Western Revolver'),
(004,	'Flare Gun',	'Pistol',	'none',	'3',	'Flare',	'001025ac',	'Flare Gun');

-- 2018-03-11 07:09:40
