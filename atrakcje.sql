-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sty 08, 2025 at 09:20 AM
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
-- Database: `miasta`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `atrakcje`
--

CREATE TABLE `atrakcje` (
  `id_miasta` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `cena` text NOT NULL,
  `lokalizacja` text NOT NULL,
  `godz` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atrakcje`
--

INSERT INTO `atrakcje` (`id_miasta`, `nazwa`, `cena`, `lokalizacja`, `godz`) VALUES
(44, 'cwel', 'cwel', 'cwel', 'cwel');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `atrakcje`
--
ALTER TABLE `atrakcje`
  ADD PRIMARY KEY (`id_miasta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atrakcje`
--
ALTER TABLE `atrakcje`
  MODIFY `id_miasta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
