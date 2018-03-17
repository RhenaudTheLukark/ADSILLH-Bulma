-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2018 at 10:46 AM
-- Server version: 10.2.8-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adsillh-bulma`
--
CREATE DATABASE IF NOT EXISTS `adsillh-bulma` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `adsillh-bulma`;

-- --------------------------------------------------------

--
-- Table structure for table `ingredient`
--

DROP TABLE IF EXISTS `ingredient`;
CREATE TABLE IF NOT EXISTS `ingredient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Ingredient_Name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredient`
--

INSERT INTO `ingredient` (`id`, `name`) VALUES
(1, 'farine'),
(2, 'sel'),
(3, 'eau'),
(4, 'lait'),
(5, 'oeuf'),
(6, 'pates'),
(7, 'creme'),
(8, 'emmental'),
(9, 'sucre'),
(10, 'test'),
(11, 'saumon'),
(12, 'huile');

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

DROP TABLE IF EXISTS `recipe`;
CREATE TABLE IF NOT EXISTS `recipe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `time` int(11) NOT NULL,
  `difficulty` decimal(10,0) NOT NULL,
  `note` int(11) NOT NULL,
  `peopleNb` int(11) NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Recipe_Name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `time`, `difficulty`, `note`, `peopleNb`, `text`) VALUES
(1, 'pates a la carbo', 15, '0', 5, 4, 'Maim !');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_ingredients`
--

DROP TABLE IF EXISTS `recipe_ingredients`;
CREATE TABLE IF NOT EXISTS `recipe_ingredients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recipeName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `ingredient` varchar(255) CHARACTER SET utf8 NOT NULL,
  `quantity` decimal(10,0) NOT NULL,
  `quantity_unit` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe_ingredients`
--

INSERT INTO `recipe_ingredients` (`id`, `recipeName`, `ingredient`, `quantity`, `quantity_unit`) VALUES
(1, 'pates a la carbo', 'pates', '400', 'g'),
(2, 'pates a la carbo', 'oeuf', '2', ''),
(3, 'pates a la carbo', 'creme', '10', 'cl'),
(4, 'pates a la carbo', 'emental', '20', 'g');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
