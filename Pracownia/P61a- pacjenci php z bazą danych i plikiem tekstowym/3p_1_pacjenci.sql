-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Paź 09, 2025 at 12:28 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3p_1_pacjenci`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `tabela_1`
--

CREATE TABLE `tabela_1` (
  `identyfikator` int(50) NOT NULL,
  `imie` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nazwisko` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tabela_1`
--

INSERT INTO `tabela_1` (`identyfikator`, `imie`, `nazwisko`, `email`) VALUES
(1, 'Frankowski', 'Leon', 'leon1@gmail.com\r\n'),
(2, 'Pietrzak', 'Robert', 'robert2@wp.pl\r\n'),
(3, 'Adamiak', 'Tomasz', 'tomasz3@tlen.pl');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `tabela_1`
--
ALTER TABLE `tabela_1`
  ADD PRIMARY KEY (`identyfikator`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
