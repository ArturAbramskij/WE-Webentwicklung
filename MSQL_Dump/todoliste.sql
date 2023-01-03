-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 03. Jan 2023 um 13:09
-- Server-Version: 10.4.25-MariaDB
-- PHP-Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `todoliste`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `aufgaben`
--

CREATE TABLE `aufgaben` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `beschreibung` varchar(200) NOT NULL,
  `erstelldat` datetime NOT NULL,
  `faelldat` datetime NOT NULL,
  `erstelltvon` tinyint(4) NOT NULL,
  `zureiter` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `aufgaben`
--

INSERT INTO `aufgaben` (`id`, `name`, `beschreibung`, `erstelldat`, `faelldat`, `erstelltvon`, `zureiter`) VALUES
(3, 'HTML Datei erstellen', 'HTML Datei erstellen', '2022-12-11 16:09:23', '2022-12-11 16:09:23', 3, 1),
(4, 'CSS Datei erstellen', 'CSS Datei erstellen', '2022-12-11 16:10:46', '2022-12-11 16:10:46', 3, 1),
(5, 'PC eingeschaltet', 'PC eingeschaltet', '2022-12-11 16:10:46', '2022-12-11 16:10:46', 3, 2),
(6, 'Kaffee trinken', 'Kaffee trinken', '2022-12-11 16:10:46', '2022-12-11 16:10:46', 2, 2),
(7, 'Für die Uni lernen', 'Für die Uni lernen', '2022-12-11 16:11:38', '2022-12-11 16:11:38', 3, 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `mitglieder`
--

CREATE TABLE `mitglieder` (
  `id` tinyint(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `mitglieder`
--

INSERT INTO `mitglieder` (`id`, `username`, `email`, `password`) VALUES
(2, 'Petra Müller', 'petra@mueller.de', '123'),
(3, 'Max Mustermann', 'mustermann@muster.de', '123');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `projekte`
--

CREATE TABLE `projekte` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(10) NOT NULL,
  `beschreibung` varchar(200) NOT NULL,
  `erstelltvon` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `projekte_aufgaben`
--

CREATE TABLE `projekte_aufgaben` (
  `id_projekte` tinyint(4) NOT NULL,
  `id_aufgaben` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `projekte_mitglieder`
--

CREATE TABLE `projekte_mitglieder` (
  `id_projekte` tinyint(4) NOT NULL,
  `id_mitglieder` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `reiter`
--

CREATE TABLE `reiter` (
  `id` tinyint(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `beschreibung` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `reiter`
--

INSERT INTO `reiter` (`id`, `name`, `beschreibung`) VALUES
(1, 'ToDo', 'Dinge die erledigt werden müssen.'),
(2, 'Erledigt', 'Dinge die erledigt sind.'),
(3, 'Verschoben', 'Dinge die später erledigt werden.');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `aufgaben`
--
ALTER TABLE `aufgaben`
  ADD PRIMARY KEY (`id`),
  ADD KEY `erstelltvon` (`erstelltvon`),
  ADD KEY `zureiter` (`zureiter`);

--
-- Indizes für die Tabelle `mitglieder`
--
ALTER TABLE `mitglieder`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `projekte`
--
ALTER TABLE `projekte`
  ADD PRIMARY KEY (`id`),
  ADD KEY `erstelltvon` (`erstelltvon`);

--
-- Indizes für die Tabelle `projekte_aufgaben`
--
ALTER TABLE `projekte_aufgaben`
  ADD PRIMARY KEY (`id_projekte`,`id_aufgaben`);

--
-- Indizes für die Tabelle `projekte_mitglieder`
--
ALTER TABLE `projekte_mitglieder`
  ADD PRIMARY KEY (`id_projekte`,`id_mitglieder`);

--
-- Indizes für die Tabelle `reiter`
--
ALTER TABLE `reiter`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `aufgaben`
--
ALTER TABLE `aufgaben`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `mitglieder`
--
ALTER TABLE `mitglieder`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `projekte`
--
ALTER TABLE `projekte`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `reiter`
--
ALTER TABLE `reiter`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `aufgaben`
--
ALTER TABLE `aufgaben`
  ADD CONSTRAINT `aufgaben_ibfk_1` FOREIGN KEY (`erstelltvon`) REFERENCES `mitglieder` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `aufgaben_ibfk_2` FOREIGN KEY (`zureiter`) REFERENCES `reiter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints der Tabelle `projekte`
--
ALTER TABLE `projekte`
  ADD CONSTRAINT `projekte_ibfk_1` FOREIGN KEY (`erstelltvon`) REFERENCES `mitglieder` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
