-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Lug 01, 2016 alle 12:16
-- Versione del server: 5.5.44
-- Versione PHP: 5.3.10-1ubuntu3.19

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `theater_show`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazioni`
--

CREATE TABLE IF NOT EXISTS `prenotazioni` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `utente` varchar(255) NOT NULL,
  `posto` int(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posto` (`posto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=186 ;

--
-- Dump dei dati per la tabella `prenotazioni`
--

INSERT INTO `prenotazioni` (`id`, `utente`, `posto`) VALUES
(1, 'u1@p.it', 11),
(2, 'u1@p.it', 16),
(3, 'u1@p.it', 22),
(4, 'u1@p.it', 26),
(5, 'u1@p.it', 31),
(6, 'u1@p.it', 37),
(7, 'u2@p.it', 5),
(8, 'u2@p.it', 9),
(9, 'u2@p.it', 15),
(10, 'u2@p.it', 19),
(11, 'u2@p.it', 25),
(12, 'u2@p.it', 30),
(13, 'u1@p.it', 7),
(14, 'u1@p.it', 1),
(15, 'u1@p.it', 42);

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'u2@p.it', '1d665b9b1467944c128a5575119d1cfd'),
(2, 'u1@p.it', 'ec6ef230f1828039ee794566b9c58adc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
