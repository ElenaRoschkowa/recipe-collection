-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 21. Mrz 2020 um 12:44
-- Server-Version: 10.4.11-MariaDB
-- PHP-Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `existing_recipes`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `existing_recipes`
--

CREATE TABLE `existing_recipes` (
  `name_rezept` varchar(100) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `existing_recipes`
--

INSERT INTO `existing_recipes` (`name_rezept`, `description`, `image`) VALUES
('Schweinchen im Matschkübel-Torte', 'Den Boden einer runden Springform mit Backpapier auslegen, das Backpapier zwischen Ring und Boden einklemmen. Am Rand die Schokoriegel immer paarweise hochkannt aufstellen. Die Schokolade in der Mikro', NULL),
('Schoko-Bons-Torte', 'Für den Biskuitboden, schlagt ihr die Eier mit dem Zucker in einer Küchenmaschine ca. 10 - 15 Minuten weißschaumig auf. Währenddessen die gemahlene Haselnüsse ohne Öl in einer Pfanne kurz anrösten und abkühlen lassen. Eine 24 cm Springform mit Backpapier auskleiden jedoch nicht einfetten. Alternativ einen Tortenring nur mit Backpapier einschlagen.\r\nNach dem Aufschlagen der Eier-Zuckermasse siebt ihr das Mehl, die Speisestärke und das Backpulver darüber und hebt es vorsichtig unter, bis keine Mehlnester mehr vorhanden sind. Anschließend die Butter und die gesiebten Haselnüsse hinzugegeben und vorsichtig unterheben.\r\n', NULL),
('Torte mit Kinder Bueno', 'Für den Biskuitboden die Eier mit dem Zucker in einer Küchenmaschine ca. 10 bis 15 Minuten weißschaumig aufschlagen.\r\n\r\nWährenddessen die gemahlenen Haselnüsse ohne Öl in einer Pfanne kurz anrösten und abkühlen lassen. Eine 24 cm Springform mit Backpapier auskleiden oder einen Tortenring mit Backpapier einschlagen.\r\n\r\nNach dem Aufschlagen der Eier-Zuckermasse das Mehl, die Speisestärke, den Kakao und das Backpulver vorsichtig unterheben, bis keine Mehlklumpen mehr vorhanden sind. Anschließend werden noch die Butter und die gesiebten Haselnüsse dazugegeben und untergehoben.', NULL),
('Topfen-Mohn-Torte', 'Für den Teig den Backofen auf 180 °C Ober-/Unterhitze vorheizen. Den Boden einer Springform von ca. 24 cm Durchmesser mit Backpapier auslegen. Den Formenrand mit weicher Butter einfetten. Die Eier trennen. Das Eiweiss zusammen mit dem Zucker und einer Prise Salz steif schlagen. Die weiche Butter mit dem Eigelb und dem Puderzuckerersatz schaumig rühren. Den geriebenen Mohn und die Nüsse mischen und zusammen mit dem Eischnee unter die Eigelbmasse heben. Den Teig in die vorbereitete Springform füllen. Im vorgeheizten Backofen auf der mittleren Schiene für ca. 40 Minuten backen. Herausnehmen und auf einem Abkühlgitter auskühlen lassen.', NULL),
('Linzer Torte', 'Für den Mürbeteig Mehl, Haselnüsse, Zucker und Gewürze in eine Rührschüssel geben. Butter in Flöckchen sowie ein Ei dazugeben. Anschließend alle Zutaten kurz mit dem Knethaken des Mixers zu groben Streuseln verarbeiten und dann mit den Händen zügig zu einem glatten Teig kneten.\r\n\r\nZwei Drittel bis zu drei Viertel des Teiges etwas größer als die Form ausrollen und die Form so damit einkleiden, dass ein Rand entsteht. Wer es eilig hat, kann den Teig auch mit den Händen gleichmäßig in die Form drücken. Den Teigboden am besten mit einer Gabel einstechen, damit sich keine Luftblasen bilden. Den übrigen Teig 5 mm dünn ausrollen und in lange Streifen schneiden oder den Teig in einen Spritzbeutel füllen und später direkt in Streifen auf die Füllung spritzen.', NULL),
('Französische Crepes', 'Die Crêpe ist die schlanke Schwester des deutschen Pfannkuchens. Es braucht ein wenig Fingerspitzengefühl, um die hauchdünnen französischen Eierkuchen unversehrt auf den Teller zu bringen. Doch ist das Kunststück einmal gelungen, kennt das Schlemmen keine Grenzen: Herzhaft belegt, süß gefüllt oder pur – du hast die Qual der Wahl! Alles, was du brauchst ist ein gutes Crêpes Rezept.', ''),
('Crepes', 'Mehl, Milch, Salz, Vanillezucker und Eier verrühren, den Cognac und die zerlassene Butter dazugeben, abermals verrühren. In eine Pfanne geben, gerade soviel, bis der Boden bedeckt ist und ca. 2-3 Min. bei mittlerer Hitze auf jeder Seite \"braten\".\r\n\r\nJe nach Wunsch können die Crêpes mit Marmelade, Zucker, Zimt, Käse, Schinken, belegt werden. Nach dem Belegen den Crêpe etwas einrollen und genießen. ', NULL),
('Eiscreme', 'Milch und Sahne erhitzen, kurz aufkochen und etwas abkühlen lassen. In einem zweiten Topf ein heißes Wasserbad vorbereiten.', NULL);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ingredients`
--

CREATE TABLE `ingredients` (
  `name` varchar(60) NOT NULL,
  `text` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `ingredients`
--

INSERT INTO `ingredients` (`name`, `text`) VALUES
('Schweinchen im Matschkübel-Torte', '1 Dose Mandarine(n)'),
('Schweinchen im Matschkübel-Torte', '300 g Erdbeeren'),
('Schweinchen im Matschkübel-Torte', '1 Pck. Götterspeise'),
('Schweinchen im Matschkübel-Torte', '4 EL Zucker'),
('Schweinchen im Matschkübel-Torte', '4 EL Nutella'),
('Schweinchen im Matschkübel-Torte', '150 g Fondant, Lebensmittelfarbe '),
('Schoko-Bons-Torte', '6 Ei(er)'),
('Schoko-Bons-Torte', '150 g Zucker'),
('Schoko-Bons-Torte', '100 g Mehl'),
('Schoko-Bons-Torte', '75 g Speisestärke'),
('Schoko-Bons-Torte', '1 TL Backpulver '),
('Torte mit Kinder Bueno', '6 Ei(er)'),
('Torte mit Kinder Bueno', '150 g Zucker'),
('Torte mit Kinder Bueno', '75 g Haselnüsse'),
('Torte mit Kinder Bueno', '100 g Mehl'),
('Torte mit Kinder Bueno', '75 g Speisestärke'),
('Torte mit Kinder Bueno', '30 g Kakao'),
('Torte mit Kinder Bueno', '1 TL Backpulver '),
('Topfen-Mohn-Torte', '100 g Butter'),
('Topfen-Mohn-Torte', '30 g Puderzucker '),
('Topfen-Mohn-Torte', '4 große Ei(er)'),
('Topfen-Mohn-Torte', '90 g Zucker, lowcarb: Xylit'),
('Topfen-Mohn-Torte', '150 g Mohn, gemahlen'),
('Topfen-Mohn-Torte', '70 g 	Mandel(n)'),
('Topfen-Mohn-Torte', 'n. B. 	Salz '),
('Linzer Torte', '200 g Mehl'),
('Linzer Torte', '200 g Haselnüsse'),
('Linzer Torte', '100 g Zucker'),
('Linzer Torte', '1 TL Zimtpulver'),
('Linzer Torte', '½ TL Nelkenpulver'),
('Linzer Torte', '200 g Butter, kalt'),
('Linzer Torte', '1 Ei(er) '),
('q', 'qq'),
('q', 'qq'),
('q', 'qq'),
('q', 'qq'),
('q', 'qq'),
('Französische Crepes', 'Butter '),
('Französische Crepes', 'Milch '),
('Französische Crepes', 'Mehl'),
('Französische Crepes', 'Ei'),
('Französische Crepes', 'zucker'),
('Französische Crepes', 'salz'),
('Crepes', '250 g Mehl'),
('Crepes', '500 ml 	Milch'),
('Crepes', '1 Prise(n) Salz'),
('Crepes', '1 EL Vanillezucker'),
('Crepes', '4 Ei(er)'),
('Crepes', '1 EL Cognac'),
('Crepes', '50 g Butter '),
('Eiscreme', '250 ml Milch'),
('ABC', 'ABC'),
('abc', 'cc'),
('abc', 'a');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
