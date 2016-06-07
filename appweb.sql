-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.9 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.3.0.5075
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para appweb
DROP DATABASE IF EXISTS `appweb`;
CREATE DATABASE IF NOT EXISTS `appweb` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `appweb`;

-- Volcando estructura para tabla appweb.conductor
DROP TABLE IF EXISTS `conductor`;
CREATE TABLE IF NOT EXISTS `conductor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(500) DEFAULT '0',
  `EsAdmin` tinyint(4) DEFAULT '0',
  `username` varchar(500) DEFAULT '0',
  `correo` varchar(500) DEFAULT '0',
  `mobile` varchar(50) DEFAULT '0',
  `password` varchar(50) DEFAULT '0',
  `matricula` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=224 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla appweb.conductor: ~28 rows (aproximadamente)
DELETE FROM `conductor`;
/*!40000 ALTER TABLE `conductor` DISABLE KEYS */;
INSERT INTO `conductor` (`id`, `fullname`, `EsAdmin`, `username`, `correo`, `mobile`, `password`, `matricula`) VALUES
	(5, 'Francis Martin', 0, 'Castor', 'a@consequat.ca', '1', 'd41d8cd98f00b204e9800998ecf8427e', 0),
	(104, 'Prueba', 1, 'PRUEBA', 'prueba@prueba.com', '620676307', 'e10adc3949ba59abbe56e057f20f883e', 0),
	(107, 'George Mendez', 0, 'Ryan', 'non@consequatlectus.co.uk', '0', '0', 0),
	(108, 'Graham Brock', 0, 'Thor', 'odio.vel.est@placeratCras.co.uk', '0', '0', 0),
	(165, 'Gavin Elliott', 0, 'Sebastian', 'nec.tempus@neque.net', '0', '0', 0),
	(168, 'Jacob Hester', 0, 'Plato', 'sociis.natoque@velconvallis.edu', '0', 'd41d8cd98f00b204e9800998ecf8427e', 0),
	(170, 'Hedley Shaffer', 0, 'Jerry', 'Etiam.bibendum@pedeultrices.org', '0', '0', 0),
	(175, 'Eagan David', 0, 'Sylvester', 'nec@purus.ca', '0', '0', 0),
	(184, 'Giacomo Lane', 0, 'Chase', 'velit.egestas@Etiam.co.uk', '0', '0', 0),
	(186, 'Jakeem Key', 0, 'Gabriel', 'orci.sem@dictum.net', '0', '0', 0),
	(187, 'Devin Estes', 0, 'Orson', 'Sed.nec.metus@Donecegestas.co.uk', '0', '0', 0),
	(192, 'Kevin Cline', 1, 'Charles', 'condimentum@PhasellusnullaInteger.org', '0', 'd41d8cd98f00b204e9800998ecf8427e', 0),
	(194, 'Evan Dean', 0, 'Kieran', 'scelerisque@erateget.edu', '0', '0', 0),
	(196, 'Conan Butler', 0, 'Philip', 'risus.varius.orci@arcu.org', '0', '0', 0),
	(200, 'Hayes Andrews', 0, 'Leroy', 'penatibus.et.magnis@fermentum.org', '0', '0', 0),
	(202, 'Davis Horn', 1, 'Colt', 'nibh.Phasellus.nulla@dolor.com', '0', 'e10adc3949ba59abbe56e057f20f883e', 0),
	(209, 'jajaja', 0, 'jaja', 'jaja@gmail.com', '620676325', 'e10adc3949ba59abbe56e057f20f883e', 0),
	(212, 'asdff', 0, '0232', 'aaleiva93@gmail.com', '123', 'd41d8cd98f00b204e9800998ecf8427e', 0),
	(214, 'jodersi', 0, '0', 'jodersi@jodersi.com', '0', 'e10adc3949ba59abbe56e057f20f883e', 0),
	(215, 'jodersiSIIIIIIIIIIIIIII', 0, '0', 'jodersi@jodersi.com', '0', 'd41d8cd98f00b204e9800998ecf8427e', 0),
	(216, 'dfg', 1, 'eger', 'ergre@sfssf', '123', 'd41d8cd98f00b204e9800998ecf8427e', 0),
	(218, '123456', 0, '123456', '11111111111111111@correo.com', '0', 'e10adc3949ba59abbe56e057f20f883e', 0),
	(219, 'eeeeeeeeeeeeeeeeee', 0, 'eeeeeeeeeeeeeeeeeeeee', 'eeeeeeeeee@gmail.com', '123456', 'e10adc3949ba59abbe56e057f20f883e', 0),
	(220, 'eeeeeeeeeeeeeeeeee', 0, 'eeeeeeeeeeeeeeeeeeeee', 'eeeeeeeeee@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', 0),
	(221, 'eeeeeeeeeeeeeeeeee', 0, 'eeeeeeeeeeeeeeeeeeeee', 'eeeeeeeeee@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', 0),
	(222, 'Aaaaaaaaaaaaaaaaaa', 0, 'aaaaaaaaaaaaaaaaaa', 'aaaaaaaa@aaaaaaaaa.com', '', 'e10adc3949ba59abbe56e057f20f883e', 0),
	(223, 'Alejanddsfsdf', 1, 'qwerty', 'qwerty@gmail.com', '620456897', 'e10adc3949ba59abbe56e057f20f883e', 0);
/*!40000 ALTER TABLE `conductor` ENABLE KEYS */;

-- Volcando estructura para tabla appweb.incidencia
DROP TABLE IF EXISTS `incidencia`;
CREATE TABLE IF NOT EXISTS `incidencia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nincidencia` varchar(500) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla appweb.incidencia: ~101 rows (aproximadamente)
DELETE FROM `incidencia`;
/*!40000 ALTER TABLE `incidencia` DISABLE KEYS */;
INSERT INTO `incidencia` (`id`, `nincidencia`, `descripcion`, `fecha`) VALUES
	(1, NULL, 'pale roto\r\n', '2016-05-18'),
	(2, NULL, 'Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien', '2020-03-17'),
	(3, NULL, 'pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac,', '2019-06-15'),
	(4, NULL, 'consequat enim diam vel arcu. Curabitur ut odio vel est', '2011-09-16'),
	(5, NULL, 'aliquam iaculis, lacus pede sagittis augue, eu tempor erat neque', '2003-08-16'),
	(6, NULL, 'ipsum cursus vestibulum. Mauris magna. Duis dignissim tempor arcu. Vestibulum', '2007-05-16'),
	(7, NULL, 'magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla', '2015-09-16'),
	(8, NULL, 'Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit,', '2024-12-16'),
	(9, NULL, 'ut, molestie in, tempus eu, ligula. Aenean euismod mauris eu', '2031-10-15'),
	(10, NULL, 'Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate,', '2025-07-16'),
	(11, NULL, 'sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices', '2008-05-17'),
	(12, NULL, 'est, mollis non, cursus non, egestas a, dui. Cras pellentesque.', '2028-03-17'),
	(13, NULL, 'Suspendisse non leo. Vivamus nibh dolor, nonummy ac, feugiat non,', '2017-07-15'),
	(14, NULL, 'diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer', '2009-05-17'),
	(15, NULL, 'auctor vitae, aliquet nec, imperdiet nec, leo. Morbi neque tellus,', '2008-02-16'),
	(16, NULL, 'cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut,', '2011-09-15'),
	(17, NULL, 'consectetuer euismod est arcu ac orci. Ut semper pretium neque.', '2015-09-15'),
	(18, NULL, 'id, blandit at, nisi. Cum sociis natoque penatibus et magnis', '2029-04-17'),
	(19, NULL, 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames', '2003-01-16'),
	(20, NULL, 'vel arcu eu odio tristique pharetra. Quisque ac libero nec', '2022-11-15'),
	(21, NULL, 'massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices', '2016-11-16'),
	(22, NULL, 'tempor lorem, eget mollis lectus pede et risus. Quisque libero', '2024-02-16'),
	(23, NULL, 'nisi nibh lacinia orci, consectetuer euismod est arcu ac orci.', '2023-01-16'),
	(24, NULL, 'Aenean euismod mauris eu elit. Nulla facilisi. Sed neque. Sed', '2009-08-15'),
	(25, NULL, 'tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec', '2029-10-15'),
	(26, NULL, 'viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum', '2022-11-16'),
	(27, NULL, 'varius ultrices, mauris ipsum porta elit, a feugiat tellus lorem', '2021-03-17'),
	(28, NULL, 'sit amet, risus. Donec nibh enim, gravida sit amet, dapibus', '2015-09-16'),
	(29, NULL, 'mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In', '2027-07-16'),
	(30, NULL, 'Donec vitae erat vel pede blandit congue. In scelerisque scelerisque', '2012-11-16'),
	(31, NULL, 'quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis.', '2025-07-16'),
	(32, NULL, 'amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede,', '2015-06-15'),
	(33, NULL, 'Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit', '2011-08-16'),
	(34, NULL, 'commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies', '2024-07-15'),
	(35, NULL, 'mus. Donec dignissim magna a tortor. Nunc commodo auctor velit.', '2012-09-16'),
	(36, NULL, 'eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum', '2024-03-16'),
	(37, NULL, 'Nunc mauris. Morbi non sapien molestie orci tincidunt adipiscing. Mauris', '2007-09-15'),
	(38, NULL, 'Nunc ut erat. Sed nunc est, mollis non, cursus non,', '2002-02-17'),
	(39, NULL, 'Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non', '2004-09-16'),
	(40, NULL, 'enim commodo hendrerit. Donec porttitor tellus non magna. Nam ligula', '2012-06-16'),
	(41, NULL, 'et magnis dis parturient montes, nascetur ridiculus mus. Proin vel', '2024-07-15'),
	(42, NULL, 'egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est,', '2023-10-16'),
	(43, NULL, 'Curabitur ut odio vel est tempor bibendum. Donec felis orci,', '2010-07-16'),
	(44, NULL, 'In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede', '2006-12-15'),
	(45, NULL, 'Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est.', '2003-02-16'),
	(46, NULL, 'nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in', '2012-06-15'),
	(47, NULL, 'Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum', '2006-09-15'),
	(48, NULL, 'tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget', '2010-12-16'),
	(49, NULL, 'arcu. Curabitur ut odio vel est tempor bibendum. Donec felis', '2023-05-16'),
	(50, NULL, 'gravida sit amet, dapibus id, blandit at, nisi. Cum sociis', '2011-11-16'),
	(51, NULL, 'massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit', '2001-04-17'),
	(52, NULL, 'sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing', '2023-03-16'),
	(53, NULL, 'lacus. Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod', '2001-12-16'),
	(54, NULL, 'volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean', '2021-11-16'),
	(55, NULL, 'lorem ac risus. Morbi metus. Vivamus euismod urna. Nullam lobortis', '2019-11-15'),
	(56, NULL, 'auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis', '2018-05-17'),
	(57, NULL, 'vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue', '2018-01-17'),
	(58, NULL, 'felis eget varius ultrices, mauris ipsum porta elit, a feugiat', '2005-03-17'),
	(59, NULL, 'eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula.', '2025-08-16'),
	(60, NULL, 'varius et, euismod et, commodo at, libero. Morbi accumsan laoreet', '2016-05-16'),
	(61, NULL, 'nunc nulla vulputate dui, nec tempus mauris erat eget ipsum.', '2011-08-16'),
	(62, NULL, 'tortor. Integer aliquam adipiscing lacus. Ut nec urna et arcu', '2013-06-15'),
	(63, NULL, 'ornare, lectus ante dictum mi, ac mattis velit justo nec', '2011-09-15'),
	(64, NULL, 'magna, malesuada vel, convallis in, cursus et, eros. Proin ultrices.', '2002-04-16'),
	(65, NULL, 'feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam', '2024-08-15'),
	(66, NULL, 'dignissim tempor arcu. Vestibulum ut eros non enim commodo hendrerit.', '2018-07-16'),
	(67, NULL, 'eros nec tellus. Nunc lectus pede, ultrices a, auctor non,', '2030-01-16'),
	(68, NULL, 'iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac,', '2020-02-16'),
	(69, NULL, 'laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend,', '2010-05-16'),
	(70, NULL, 'eu tempor erat neque non quam. Pellentesque habitant morbi tristique', '2014-03-16'),
	(71, NULL, 'Donec consectetuer mauris id sapien. Cras dolor dolor, tempus non,', '2018-03-17'),
	(72, NULL, 'Vestibulum ut eros non enim commodo hendrerit. Donec porttitor tellus', '2008-04-16'),
	(73, NULL, 'tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem', '2008-02-17'),
	(74, NULL, 'non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum.', '2018-01-17'),
	(75, NULL, 'posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo ipsum. Suspendisse', '2005-07-16'),
	(76, NULL, 'sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus', '2031-01-17'),
	(77, NULL, 'tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec', '2009-01-17'),
	(78, NULL, 'non lorem vitae odio sagittis semper. Nam tempor diam dictum', '2014-03-16'),
	(79, NULL, 'Cras eu tellus eu augue porttitor interdum. Sed auctor odio', '2030-07-15'),
	(80, NULL, 'auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis', '2007-09-15'),
	(81, NULL, 'sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh. Aliquam', '2007-02-16'),
	(82, NULL, 'dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing', '2022-04-16'),
	(83, NULL, 'sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id', '2015-01-17'),
	(84, NULL, 'orci luctus et ultrices posuere cubilia Curae; Phasellus ornare. Fusce', '2029-08-15'),
	(85, NULL, 'sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor', '2016-01-17'),
	(86, NULL, 'risus. In mi pede, nonummy ut, molestie in, tempus eu,', '2025-12-16'),
	(87, NULL, 'pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus', '2012-03-16'),
	(88, NULL, 'tellus faucibus leo, in lobortis tellus justo sit amet nulla.', '2003-01-16'),
	(89, NULL, 'bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum,', '2019-04-17'),
	(90, NULL, 'lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet', '2001-01-16'),
	(91, NULL, 'ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor', '2012-01-17'),
	(92, NULL, 'elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis', '2026-12-16'),
	(93, NULL, 'eu enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis', '2021-07-16'),
	(94, NULL, 'ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam', '2011-07-15'),
	(95, NULL, 'nunc ac mattis ornare, lectus ante dictum mi, ac mattis', '2011-01-17'),
	(96, NULL, 'aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu', '2007-06-15'),
	(97, NULL, 'Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc', '2002-01-17'),
	(98, NULL, 'facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa.', '2022-05-15'),
	(99, NULL, 'placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl.', '2029-05-16'),
	(100, NULL, 'Quisque libero lacus, varius et, euismod et, commodo at, libero.', '2014-05-17'),
	(101, NULL, 'aliquam adipiscing lacus. Ut nec urna et arcu imperdiet ullamcorper.', '2027-08-16');
/*!40000 ALTER TABLE `incidencia` ENABLE KEYS */;

-- Volcando estructura para tabla appweb.pedidos
DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `num_pedido` varchar(500) DEFAULT NULL,
  `descripcion` varchar(500) DEFAULT NULL,
  `estado_id` tinyint(4) DEFAULT '0',
  `fechad` date DEFAULT NULL,
  `fechac` date DEFAULT NULL,
  `id_foto` int(11) DEFAULT NULL,
  `id_conductor` int(11) DEFAULT NULL,
  `id_incidencia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_pedidos_conductor` (`id_conductor`),
  KEY `FK_pedidos_incidencia` (`id_incidencia`),
  CONSTRAINT `FK_pedidos_conductor` FOREIGN KEY (`id_conductor`) REFERENCES `conductor` (`id`),
  CONSTRAINT `FK_pedidos_incidencia` FOREIGN KEY (`id_incidencia`) REFERENCES `incidencia` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla appweb.pedidos: ~9 rows (aproximadamente)
DELETE FROM `pedidos`;
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
INSERT INTO `pedidos` (`id`, `num_pedido`, `descripcion`, `estado_id`, `fechad`, `fechac`, `id_foto`, `id_conductor`, `id_incidencia`) VALUES
	(4, '11', 'chocolate', 0, NULL, NULL, NULL, 104, 1),
	(5, '34', 'redbull', 0, NULL, NULL, NULL, 104, NULL),
	(6, '186', 'aceitunas', 1, '2025-11-16', '2016-10-16', NULL, 104, NULL),
	(7, '432', 'feugiat tellus lorem eu metus. In lorem. Donec elementum, lorem', 1, '2018-10-16', '2006-06-15', NULL, 175, NULL),
	(8, '377', 'Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit,', 1, '2028-06-16', '2020-07-16', NULL, 196, NULL),
	(9, '14', 'lavaropa', 2, '2011-01-16', '2002-02-16', NULL, 104, NULL),
	(95, '70', 'sodales elit erat vitae risus. Duis a mi fringilla mi', 1, '2027-03-17', '2024-08-16', NULL, 196, NULL),
	(96, '204', 'montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique', 0, '2004-03-17', '2005-07-16', NULL, 202, NULL),
	(97, '357', 'eu erat semper rutrum. Fusce dolor quam, elementum at, egestas', 1, '2009-10-16', '2011-07-16', NULL, 202, NULL);
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;

-- Volcando estructura para tabla appweb.tabla_de_tablas
DROP TABLE IF EXISTS `tabla_de_tablas`;
CREATE TABLE IF NOT EXISTS `tabla_de_tablas` (
  `Relacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id` int(11) NOT NULL,
  `Valor` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `Orden` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla appweb.tabla_de_tablas: ~3 rows (aproximadamente)
DELETE FROM `tabla_de_tablas`;
/*!40000 ALTER TABLE `tabla_de_tablas` DISABLE KEYS */;
INSERT INTO `tabla_de_tablas` (`Relacion`, `id`, `Valor`, `Orden`) VALUES
	('pedido_estado', 0, 'Pendiente', 1),
	('pedido_estado', 1, 'Entregado', 2),
	('pedido_estado', 2, 'Anulado', 3);
/*!40000 ALTER TABLE `tabla_de_tablas` ENABLE KEYS */;

-- Volcando estructura para vista appweb.v_pedidos
DROP VIEW IF EXISTS `v_pedidos`;
-- Creando tabla temporal para superar errores de dependencia de VIEW
CREATE TABLE `v_pedidos` (
	`id` INT(11) NOT NULL,
	`num_pedido` VARCHAR(500) NULL COLLATE 'latin1_swedish_ci',
	`descripcion` VARCHAR(500) NULL COLLATE 'latin1_swedish_ci',
	`estado_id` TINYINT(4) NULL,
	`fechad` DATE NULL,
	`fechac` DATE NULL,
	`id_foto` INT(11) NULL,
	`id_conductor` INT(11) NULL,
	`id_incidencia` INT(11) NULL,
	`fullname` VARCHAR(500) NULL COLLATE 'latin1_swedish_ci',
	`estado` VARCHAR(50) NOT NULL COLLATE 'utf8_spanish_ci'
) ENGINE=MyISAM;

-- Volcando estructura para vista appweb.v_pedidos
DROP VIEW IF EXISTS `v_pedidos`;
-- Eliminando tabla temporal y crear estructura final de VIEW
DROP TABLE IF EXISTS `v_pedidos`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_pedidos` AS select `pedidos`.`id` AS `id`,`pedidos`.`num_pedido` AS `num_pedido`,`pedidos`.`descripcion` AS `descripcion`,`pedidos`.`estado_id` AS `estado_id`,`pedidos`.`fechad` AS `fechad`,`pedidos`.`fechac` AS `fechac`,`pedidos`.`id_foto` AS `id_foto`,`pedidos`.`id_conductor` AS `id_conductor`,`pedidos`.`id_incidencia` AS `id_incidencia`,`conductor`.`fullname` AS `fullname`,`tabla_de_tablas`.`Valor` AS `estado` from ((`pedidos` join `conductor` on((`pedidos`.`id_conductor` = `conductor`.`id`))) join `tabla_de_tablas` on((`pedidos`.`estado_id` = `tabla_de_tablas`.`id`)));

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
