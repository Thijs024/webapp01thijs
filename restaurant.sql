-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 apr 2024 om 22:59
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `drinks`
--

CREATE TABLE `drinks` (
  `drink_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(100) DEFAULT NULL,
  `price` decimal(5,2) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `drinks`
--

INSERT INTO `drinks` (`drink_id`, `name`, `type`, `price`, `img`) VALUES
(1, 'cola', 'Frisdrank', 1.50, 'img\\cola.webp'),
(2, 'Koffie', 'Warm drankje', 2.00, 'img\\koffie.png'),
(3, 'Thee', 'Warm drankje', 1.75, 'img\\thee.jpg'),
(4, 'Sinaasappelsap', 'Sap', 2.25, 'img\\Sinaasappelsap.jpg'),
(5, 'Water', 'Frisdrank', 1.00, 'img\\water.jpg'),
(6, 'Cappuccino', 'Koffie', 2.50, 'img\\Cappuccino.jpg'),
(7, 'Espresso', 'Koffie', 2.00, 'img\\Espresso.jpg'),
(8, 'Latte', 'Koffie', 3.00, 'img\\Latte.jpg'),
(9, 'Groene thee', 'Thee', 1.80, 'img\\Groene-thee.jpg'),
(10, 'Iced tea', 'Thee', 2.50, 'img\\Iced-tea.jpg'),
(11, 'Chocolademelk', 'Warm drankje', 2.25, 'img\\Chocolademelk.jpg'),
(12, 'Appelsap', 'Sap', 2.00, 'img\\Appelsap.webp'),
(13, 'Mango smoothie', 'Smoothie', 3.50, 'img\\Mango-smoothie.jpg'),
(14, 'Iced latte', 'Koffie', 3.25, 'img\\Iced-latte.jpg'),
(15, 'Milkshake', 'Frisdrank', 3.75, 'img\\Milkshake.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE `gebruikers` (
  `gebruikersnaam` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`gebruikersnaam`, `email`, `password`, `admin`) VALUES
('admin', 'admin@gmail.com', 'admin', '1'),
('nee', 'nee@gmail.com', 'nee', ''),
('thijs', 'thijs@gmail.com', 'thijs', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pizza`
--

CREATE TABLE `pizza` (
  `pizza_id` int(11) NOT NULL,
  `naam` varchar(50) NOT NULL,
  `omschrijving` text DEFAULT NULL,
  `prijs` decimal(5,2) DEFAULT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `pizza`
--

INSERT INTO `pizza` (`pizza_id`, `naam`, `omschrijving`, `prijs`, `img`) VALUES
(1, 'Margherita', 'Tomatensaus, mozzarella, basilicum\r\n', 8.99, 'img/Margherita.jpg'),
(2, 'Pepperoni', 'Tomatensaus, mozzarella, pepperoni', 9.99, 'img\\Pepperoni-pizza.jpg'),
(3, 'Hawaiian', 'Tomatensaus, mozzarella, ham, ananas', 10.99, 'img\\hawaiian.jpg'),
(4, 'Vegetariana', 'Tomatensaus, mozzarella, champignons, paprika, olijven, ui', 11.99, 'img\\vegetariana.jpg'),
(5, 'Quattro Stagioni', 'Tomatensaus, mozzarella, ham, champignons, artisjokken, olijven', 12.99, 'img\\quattro_stagioni.jpg'),
(6, 'Capricciosa', 'Tomatensaus, mozzarella, ham, champignons', 11.99, 'img\\capricciosa.jpg'),
(7, 'Quattro Formaggi', 'Tomatensaus, mozzarella, gorgonzola, parmezaanse kaas, mozzarella', 12.99, 'img\\quattro_formaggi.jpg'),
(8, 'Diavola', 'Tomatensaus, mozzarella, pepperoni, rode pepers', 10.99, 'img\\diavola.jpg'),
(9, 'Marinara', 'Tomatensaus, knoflook, oregano', 8.99, 'img\\marinara.jpg'),
(10, 'Tonno e Cipolla', 'Tomatensaus, mozzarella, tonijn, ui', 11.99, 'img\\tonno_e_cipolla.jpg'),
(11, 'BBQ Pizza', 'Tomatensaus, mozzarella, BBQ-kip, rode ui, koriander', 12.99, 'img\\bbq_pizza.jpg'),
(12, 'Turkish Pizza', 'Gehakt, tomatensaus, ui, paprika, knoflooksaus', 13.99, 'img\\turkish_pizza.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `winkelmantje`
--

CREATE TABLE `winkelmantje` (
  `mantje` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`drink_id`);

--
-- Indexen voor tabel `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`pizza_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `drinks`
--
ALTER TABLE `drinks`
  MODIFY `drink_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT voor een tabel `pizza`
--
ALTER TABLE `pizza`
  MODIFY `pizza_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
