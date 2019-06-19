-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 19 jun 2019 om 17:04
-- Serverversie: 5.7.21
-- PHP-versie: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klanten`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bedrijven`
--

DROP TABLE IF EXISTS `bedrijven`;
CREATE TABLE IF NOT EXISTS `bedrijven` (
  `bedrijf_id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(255) NOT NULL,
  PRIMARY KEY (`bedrijf_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `bedrijven`
--

INSERT INTO `bedrijven` (`bedrijf_id`, `naam`) VALUES
(1, 'FIZAgaaaaaaaaaaaaaaaaaaaaaaa'),
(2, 'FIWIA'),
(3, 'FISMEU'),
(4, 'FIGOE'),
(5, 'FIBIJL');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contacten`
--

DROP TABLE IF EXISTS `contacten`;
CREATE TABLE IF NOT EXISTS `contacten` (
  `contact_id` int(6) NOT NULL AUTO_INCREMENT,
  `achternaam` varchar(255) NOT NULL,
  `voornaam` varchar(255) NOT NULL,
  `telnr` int(15) NOT NULL,
  `gsmnr` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bedrijf_id` int(6) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `contacten`
--

INSERT INTO `contacten` (`contact_id`, `achternaam`, `voornaam`, `telnr`, `gsmnr`, `email`, `bedrijf_id`) VALUES
(2, 'Wiame', 'Frederik', 11569847, 468521496, 'wiame.frederik@email.be', 2),
(3, 'Smeulders', 'Luc', 11846952, 475963281, 'smeulders.luc@email.be', 3),
(4, 'Degoede', 'Dimphy', 11963247, 468523217, 'degoede.dimphy@email.be', 4),
(5, 'Bijlhout', 'Laurens', 11489632, 475962853, 'bijlhout.laurens@email.be', 5);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

DROP TABLE IF EXISTS `gebruikers`;
CREATE TABLE IF NOT EXISTS `gebruikers` (
  `gebruiker_id` int(11) NOT NULL AUTO_INCREMENT,
  `gebruikersnaam` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `loginstatus` tinyint(1) NOT NULL,
  PRIMARY KEY (`gebruiker_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`gebruiker_id`, `gebruikersnaam`, `wachtwoord`, `loginstatus`) VALUES
(1, 'admin', 'admin', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
