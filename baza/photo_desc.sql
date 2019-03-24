-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Mar 2019, 10:42
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `photo`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `photo_desc`
--

CREATE TABLE `photo_desc` (
  `id` int(11) NOT NULL,
  `src` text COLLATE utf8mb4_polish_ci NOT NULL,
  `visibility` int(2) NOT NULL,
  `sequence` int(100) NOT NULL,
  `category` text COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `photo_desc`
--

INSERT INTO `photo_desc` (`id`, `src`, `visibility`, `sequence`, `category`) VALUES
(8, 'chair.jpg', 1, 1, 'chair'),
(9, 'chair2.jpg', 1, 2, 'chair'),
(10, 'table.JPG', 1, 3, 'table'),
(11, 'table2.jpg', 1, 4, 'table');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `photo_desc`
--
ALTER TABLE `photo_desc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `photo_desc`
--
ALTER TABLE `photo_desc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
