-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 20 Aug 2013 om 21:45
-- Serverversie: 5.5.9
-- PHP-Versie: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `Mobiele_platformen`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `absences`
--

CREATE TABLE `absences` (
  `absences_id` int(11) NOT NULL,
  `teacher` varchar(20) NOT NULL,
  `announcement` varchar(30) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  PRIMARY KEY (`absences_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `absences`
--

INSERT INTO `absences` VALUES(1, 'Kathleen Rutten', 'Afwezig op donderdag 14/09', 0);
INSERT INTO `absences` VALUES(2, 'Robby Van Elderen', 'Afwezig op vrijdag 20/10', 0);
INSERT INTO `absences` VALUES(3, 'Karina Aerts', 'Afwezig van 12/11-15/11', 0);
INSERT INTO `absences` VALUES(4, 'Nathalie Moonen', 'Afwezig op donderdag 14/01  ', 0);
INSERT INTO `absences` VALUES(5, 'Rita Vliegen', 'Afwezig op 14/02', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `classes`
--

CREATE TABLE `classes` (
  `classes_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`classes_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `classes`
--

INSERT INTO `classes` VALUES(1, '1IMDA');
INSERT INTO `classes` VALUES(4, '2IMDA');
INSERT INTO `classes` VALUES(7, '3IMDA');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lessons`
--

CREATE TABLE `lessons` (
  `lessons_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `teacher` varchar(30) NOT NULL,
  `classes_id` int(11) NOT NULL,
  PRIMARY KEY (`lessons_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `lessons`
--

INSERT INTO `lessons` VALUES(1, 'Bedrijfskunde', 'Els Van Orlé', 1);
INSERT INTO `lessons` VALUES(2, 'Computervaardigheden', 'Els Van Orlé', 1);
INSERT INTO `lessons` VALUES(3, 'Databanken', 'Christian Selleslag', 1);
INSERT INTO `lessons` VALUES(4, 'Engels', 'Gyselen', 1);
INSERT INTO `lessons` VALUES(5, 'Frans', 'Kathleen Rutten', 1);
INSERT INTO `lessons` VALUES(6, 'Kunstgeschiendenis', 'Kathleen Rutten', 1);
INSERT INTO `lessons` VALUES(7, 'Webtechnologie 1', 'David Heerinckx', 1);
INSERT INTO `lessons` VALUES(8, 'Photoshop 1', 'Barbara Lettany', 1);
INSERT INTO `lessons` VALUES(9, 'Vector Design', 'Anneliese Messens', 1);
INSERT INTO `lessons` VALUES(10, 'Visualiseren 1', 'Kathleen Rutten', 1);
INSERT INTO `lessons` VALUES(11, 'CMS', 'Barbara Lettany', 4);
INSERT INTO `lessons` VALUES(12, 'Engels 2', 'Gyselen', 4);
INSERT INTO `lessons` VALUES(13, 'E-business', 'Barbara Lettany', 4);
INSERT INTO `lessons` VALUES(14, 'Frans 2', 'Nathalie Moonen', 4);
INSERT INTO `lessons` VALUES(15, 'Groepsdynamica', 'Vicky Franssen', 4);
INSERT INTO `lessons` VALUES(16, 'Illustrator ', 'Kathleen Rutten', 4);
INSERT INTO `lessons` VALUES(17, 'IRMA', 'Karina Aerts', 4);
INSERT INTO `lessons` VALUES(18, 'Kwantitatieve methoden', 'Vicky Franssen', 4);
INSERT INTO `lessons` VALUES(19, 'Photoshop 2', 'Robby Van Elderen', 4);
INSERT INTO `lessons` VALUES(20, 'Project 2', 'Robby Van Elderen', 4);
INSERT INTO `lessons` VALUES(21, 'Website automatisatie', 'Joris Hens', 4);
INSERT INTO `lessons` VALUES(22, 'Projectmanagement', 'Karina Aerts', 4);
INSERT INTO `lessons` VALUES(23, 'Usability', 'Robby Van Elderen', 4);
INSERT INTO `lessons` VALUES(24, 'Visualiseren 2', 'Kathleen Rutten', 4);
INSERT INTO `lessons` VALUES(25, 'Actualia', 'Robby Van Elderen ', 7);
INSERT INTO `lessons` VALUES(26, 'Communicatieve Vaardigheden ', 'Nadine Vanesch', 7);
INSERT INTO `lessons` VALUES(27, 'Frans - Engels', 'Rita Vliegen', 7);
INSERT INTO `lessons` VALUES(28, 'Indesign ', 'Barbara Lettany', 7);
INSERT INTO `lessons` VALUES(29, 'Interactive Marketing', 'Peter Van Egdom', 7);
INSERT INTO `lessons` VALUES(30, 'Visualiseren 3', 'Kathleen Rutten', 7);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `members`
--

CREATE TABLE `members` (
  `members_id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(65) NOT NULL DEFAULT '',
  `password` varchar(65) NOT NULL DEFAULT '',
  PRIMARY KEY (`members_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `members`
--

INSERT INTO `members` VALUES(1, 'r0331017', 'Icnelygmb7');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `teachers`
--

CREATE TABLE `teachers` (
  `teacher_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  PRIMARY KEY (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `teachers`
--

INSERT INTO `teachers` VALUES(1, 'Karina Aerts');
INSERT INTO `teachers` VALUES(2, 'Robby Van Elderen');
INSERT INTO `teachers` VALUES(3, 'Kathleen Rutten');
INSERT INTO `teachers` VALUES(4, 'Nathalie Moonen');
INSERT INTO `teachers` VALUES(5, 'Rita Vliegen ');

--
-- Beperkingen voor gedumpte tabellen
--

--
-- Beperkingen voor tabel `absences`
--
ALTER TABLE `absences`
  ADD CONSTRAINT `absences_ibfk_1` FOREIGN KEY (`absences_id`) REFERENCES `teachers` (`teacher_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Beperkingen voor tabel `classes`
--
ALTER TABLE `classes`
  ADD CONSTRAINT `classes_ibfk_1` FOREIGN KEY (`classes_id`) REFERENCES `lessons` (`lessons_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
