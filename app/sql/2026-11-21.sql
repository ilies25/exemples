-- Adminer 4.8.4 MySQL 9.1.0 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `formation` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `formation`;

DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `statut` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `clients` (`id`, `nom`, `telephone`, `adresse`, `statut`) VALUES
(18,	'test',	'',	'',	-1),
(19,	'ilies mm',	'5435132132',	'adresse',	0),
(20,	'fatima',	'',	'',	-1),
(21,	'ilies 2',	'',	'',	-1),
(22,	'test',	'',	'',	0),
(23,	'ttt',	'',	'',	0),
(25,	'test refacto code',	'',	'',	0),
(26,	'ttt mmm',	'',	'',	-1);

DROP TABLE IF EXISTS `fournisseurs`;
CREATE TABLE `fournisseurs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `statut` tinyint NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `fournisseurs` (`id`, `nom`, `telephone`, `adresse`, `statut`) VALUES
(6,	'Fournisseur Alger',	'0563698574',	'Adresse de test fournisseur Alger',	0);

DROP TABLE IF EXISTS `voitures`;
CREATE TABLE `voitures` (
  `matricule` varchar(9) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marque` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modele` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `annee` int NOT NULL,
  PRIMARY KEY (`matricule`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `voitures` (`matricule`, `marque`, `modele`, `annee`) VALUES
('AA-123-AA',	'peugeot',	'208',	2021),
('BB-193-AG',	'renault',	'clio V',	2021),
('BC-189-DD',	'citroen',	'C3',	2019),
('GA-123-EZ',	'Ford',	'MFiesta',	2000),
('WW-663-AA',	'Toyota',	'Yaris Heybird',	2023),
('OP-999-AN',	'Dcia',	'Stepway',	2021),
('13456-215',	'Ford',	'CMax',	2015);

-- 2026-11-21 19:24:53