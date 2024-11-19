-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Lis 2024, 11:55
-- Wersja serwera: 10.4.20-MariaDB
-- Wersja PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `miasta`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `miasta`
--

CREATE TABLE `miasta` (
  `id` int(11) NOT NULL,
  `miasto` varchar(35) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `miasta`
--

INSERT INTO `miasta` (`id`, `miasto`) VALUES
(13, 'Bytom'),
(14, 'Zabrze'),
(15, 'Ruda Śląska'),
(16, 'Chorzów'),
(17, 'Tychy'),
(18, 'Dąbrowa Górnicza'),
(19, 'Sosnowiec'),
(20, 'Jaworzno'),
(21, 'Świętochłowice'),
(22, 'Mysłowice'),
(23, 'Siemianowice Śląskie'),
(24, 'Piekary Śląskie'),
(25, 'Wodzisław Śląski'),
(26, 'Żory'),
(27, 'Knurów'),
(28, 'Czeladź'),
(29, 'Lubliniec'),
(30, 'Strzelce Opolskie'),
(31, 'Opole'),
(32, 'Kędzierzyn-Koźle'),
(33, 'Zawiercie'),
(34, 'Pszczyna'),
(35, 'Tarnowskie Góry'),
(36, 'Będzin'),
(37, 'Radlin'),
(38, 'Myszków'),
(39, 'Kłobuck'),
(40, 'Sławków'),
(41, 'Ustroń'),
(42, 'Wisła');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `miejscowosci`
--

CREATE TABLE `miejscowosci` (
  `id` int(11) NOT NULL,
  `miejscowosc` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `miejscowosci`
--

INSERT INTO `miejscowosci` (`id`, `miejscowosc`) VALUES
(1, 'Łaziska Górne'),
(2, 'Mikołów'),
(3, 'Bojszowy'),
(4, 'Wielowieś'),
(5, 'Kosztowy'),
(6, 'Mizerów'),
(7, 'Orzesze'),
(8, 'Pyskowice'),
(9, 'Radzionków'),
(10, 'Bieruń'),
(11, 'Chudów'),
(12, 'Czerwionka-Leszczyny'),
(13, 'Pawłowice'),
(14, 'Gierałtowice'),
(15, 'Zbrosławice'),
(16, 'Gorzyce'),
(17, 'Wielka Wieś'),
(18, 'Dąbrówka Wielka'),
(19, 'Lędziny'),
(20, 'Bogatynia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wsi`
--

CREATE TABLE `wsi` (
  `id` int(11) NOT NULL,
  `wsi` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wsi`
--

INSERT INTO `wsi` (`id`, `wsi`) VALUES
(1, 'Rachowice'),
(2, 'Ornontowice'),
(3, 'Bojków'),
(4, 'Krupski Młyn'),
(5, 'Biskupice'),
(6, 'Skrbeńsko'),
(7, 'Ciochowice'),
(8, 'Lubomia');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `miasta`
--
ALTER TABLE `miasta`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `miejscowosci`
--
ALTER TABLE `miejscowosci`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wsi`
--
ALTER TABLE `wsi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `miasta`
--
ALTER TABLE `miasta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT dla tabeli `miejscowosci`
--
ALTER TABLE `miejscowosci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT dla tabeli `wsi`
--
ALTER TABLE `wsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
