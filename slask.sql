-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sty 14, 2025 at 11:25 AM
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
-- Database: `slask`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `atrakcje`
--

CREATE TABLE `atrakcje` (
  `id` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `cena` text NOT NULL,
  `lokalizacja` text NOT NULL,
  `godz` text NOT NULL,
  `lp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atrakcje`
--

INSERT INTO `atrakcje` (`id`, `nazwa`, `cena`, `lokalizacja`, `godz`, `lp`) VALUES
(1, 'Spodek', 'Wstęp zależny od wydarzenia', 'Katowice, al. Korfantego 35', 'Zależne od wydarzenia.', 1),
(2, 'Muzeum Śląskie', 'Bilet normalny: ok. 20 zł\r\nBilet ulgowy: ok. 10 zł', 'Katowice, ul. T. Dobrowolskiego 1', 'Codziennie w godzinach 10:00-18:00', 1),
(3, 'Nikiszowiec', 'Wstęp bezpłatny.', 'Katowice, Nikiszowiec', 'Dostępne codziennie', 1),
(4, 'Katedra Chrystusa Króla', 'Wstęp bezpłatny.', 'Katowice, ul. 3 Maja 13', 'Codziennie', 1),
(5, 'Silesia City Center', 'Wstęp bezpłatny', 'Katowice, ul. Chorzowska 107', 'od 9:00 do 21:00.', 1),
(6, 'Górnośląski Park Etnograficzny', ' Bilet normalny: ok. 12 zł\r\n Bilet ulgowy: ok. 8 zł', 'Katowice, ul. Parkowa 2', 'od 10:00 do 17:00.', 1),
(7, 'Teatr Śląski', 'Bilet normalny: ok. 40-100 zł\r\nBilet ulgowy: ok. 30-70 zł', 'Katowice, ul. Rynek 10', 'Zależne od repertuaru.', 1),
(8, 'Planetarium Śląskie', 'Bilet normalny: ok. 20 zł\r\nBilet ulgowy: ok. 12 zł', 'Katowice, ul. aleja Wojciecha Korfantego 6\r\n', 'Bilet normalny: ok. 20 zł\r\nBilet ulgowy: ok. 12 zł', 1),
(9, 'ZOO', 'Bilet normalny: ok. 20 zł\r\nBilet ulgowy: ok. 10 zł', 'Katowice, ul. Wiatraczna 15', 'od 9:00 do 17:00', 1),
(10, 'Muzeum Historii Katowic', 'Bilet normalny: ok. 10 zł\r\nBilet ulgowy: ok. 5 zł', 'Katowice, ul. Jana Matejki 6\r\n', 'od 10:00 do 18:00', 1),
(11, 'Radiostacja Gliwice\r\n', '10/15 zł', 'Gliwice, ul. Tarnogórska 129', 'od 10:00 do 18:00', 2),
(12, 'Zamek Piastowski', '5/10 zł\r\n', 'Gliwice, ul. Pod Murami 2', 'od 9:00 do 17:00', 2),
(14, 'Kolejkowo Gliwice', 'Normalny 37 zł, \r\nulgowy 30 zł', 'Pszczyńska 315, 44-100 Gliwice', 'Codziennie 10:00 – 18:00, \r\nw weekendy do 19:00', 2),
(15, 'Palmiarnia Miejska', 'Normalny 15 zł\r\nulgowy 9 zł', 'Fredry 6, 44-100 Gliwice', 'Wt-Pt: 9:00 – 18:00\r\nSb-Nd: 10:00 – 18:00', 2),
(16, 'Arena Gliwice', 'Zależna od wydarzeń', 'Kujawska 50, Gliwice', 'Zależne od wydarzeń', 2),
(17, 'Muzeum Odlewnictwa Artystycznego', 'Normalny 8 z, \r\nulgowy 5 zł', 'Bojkowska 37, Gliwice', 'Wt-Pt: 10:00 – 16:00\r\nSb-Nd: 11:00 – 17:00', 2),
(18, 'Teatr Miejski w Gliwicach', 'Zależna od spektaklu', 'Nowy Świat 55/57, Gliwice', 'Zależne od repertuaru', 2),
(19, 'Rynek w Gliwicach', 'Wstęp wolny', 'Centrum miasta', 'Całodobowo', 2),
(20, 'Park Chopina', 'Wstęp wolny', 'ul. Fredry, Gliwice', 'Całodobowo', 2),
(21, 'Zabytkowa Kopalnia Guido', ' Normalny 50 zł, ulgowy 40 zł', 'ul. 3 Maja 93 \r\n41-800 Zabrze', 'Wtorek–Niedziela: 9:00–19:00', 3),
(22, 'Sztolnia Królowa Luiza', 'Normalny 45 zł, ulgowy 35 zł', 'ul. Wolności 408, 41-800 Zabrze', 'Wtorek–Niedziela: 9:00–19:00', 3),
(23, 'Szyb Maciej', 'Wstęp wolny', ' ul. Srebrna 6, 41-800 Zabrze', 'Codziennie: 10:00–22:00', 3),
(24, 'Ogród Botaniczny w Zabrzu', 'Normalny 5 zł \r\nulgowy 3 zł', 'ul. Piłsudskiego 60, 41-800 Zabrze', '10:00–18:00', 3),
(25, 'Park Miliona Świateł', 'Normalny 20 zł \r\nulgowy 15 zł', 'Park im. Poległych Bohaterów, 41-800 Zabrze', '16:00–22:00', 3),
(26, 'Muzeum Górnictwa Węglowego', 'Normalny 10 zł \r\nulgowy 5 zł', 'ul. 3 Maja 19, 41-800 Zabrze', '9:00–15:00', 3),
(27, 'Teatr Nowy w Zabrzu\r\n', 'Zależne od spektaklu', 'ul. Plac Teatralny 1, 41-800 Zabrze', 'Zależne od repertuaru', 3),
(28, 'Kąpielisko Leśne', 'Normalny 15 zł\r\nulgowy 10 zł', 'ul. Srebrna 10, 41-800 Zabrze', '10:00–18:00', 3),
(29, 'Drewniany Kościół św. Jadwigi', 'Wstęp wolny', 'ul. Wolności 504, 41-800 Zabrze', 'Zależne od nabożeństw', 3),
(30, 'Zabytkowa Kopalnia Guido', 'Normalny 50 zł\r\nulgowy 40 zł', 'ul. 3 Maja 93, 41-800 Zabrze', '9:00–19:00', 3),
(31, 'Pałac Tiele-Wincklerów', 'Wstęp wolny', 'ul. Dzierżonia 30, 41-908 Bytom', '10:00 – 18:00', 4),
(32, 'Sztolnia Królowa Luiza', 'Normalny 45 zł\r\nulgowy 35 zł', 'ul. Wolności 408, Bytom', '9:00 – 19:00', 4),
(33, 'Zabytkowa Kopalnia Guido', 'Normalny 50 zł\r\nulgowy 40 zł', 'ul. 3 Maja 93, 41-800 Bytom', '9:00 – 19:00', 4),
(34, 'Park Miejski im. Franciszka Kachla', 'Wstęp Wolny', 'ul. Wrocławska, Bytom', 'Całodobowo', 4),
(35, 'Żabie Doły', 'Wstęp wolny', 'Pogranicze Bytomia', 'Całodobowo', 4),
(36, 'Górnośląskie Koleje Wąskotorowe', 'Normalny 20 zł\r\nulgowy 15 zł', 'ul. Reja 13, Bytom', 'Kursy organizowane sezonowo', 4),
(37, 'Opera Śląska', 'Zależne od spektaklu', 'ul. Moniuszki 21/23, Bytom', 'Zależnie od repertuaru', 4),
(38, 'Rezerwat Przyrody Segiet', 'Wstęp wolny', 'Pogranicze Bytomia i Tarnowskich Gór', 'Całodobowo', 4),
(39, 'Muzeum Górnośląskie\r\n', ' Normalny 10 zł, ulgowy 6 zł', 'pl. Jana III Sobieskiego 2, Bytom', '10:00 – 16:00', 4),
(40, 'Dolomity Sportowa Dolina', 'Zależne od atrakcji', 'ul. Blachówka 94, Bytom', '10:00 – 21:00', 4),
(41, 'Aquapark \"Aquadrom\"', 'Bilet normalny: 25 zł\r\nBilet ulgowy: 20 zł', 'ul. Kłodnicka 95, 41-706 Ruda Śląska', '6:00–22:00', 5),
(42, 'Park Strzelnica\r\n', 'Wstęp wolny', 'ul. Strzelnicza 1, 41-711 Ruda Śląska', '10:00–18:00', 5),
(43, 'Muzeum Miejskie im. Maksymiliana Chroboka', 'Bilet normalny: 10 zł\r\nBilet ulgowy: 5 zł', 'ul. Wolności 26, 41-700 Ruda Śląska', '10:00–16:00', 5),
(44, 'Kino Patria', 'Bilet normalny: 20 zł\r\nBilet ulgowy: 15 zł', 'ul. Chorzowska 3, 41-700 Ruda Śląska', 'Zależne od repertuaru', 5),
(45, 'Park Wodny \"Planty\"', 'Bilet normalny: 30 zł\r\nBilet ulgowy: 25 zł', 'ul. Ratowników 2, 41-710 Ruda Śląska\r\n', '9:00–21:00', 5),
(46, 'Centrum Handlowe \"Plaza Ruda Śląska\"', 'Wstęp wolny', 'ul. 1 Maja 310, 41-710 Ruda Śląska', '9:00 - 21:00', 5),
(47, 'Stadion Miejski', 'Zależne od wydarzeń', 'ul. Czarnoleśna 12, 41-709 Ruda Śląska', 'Zależne od wydarzeń', 5),
(48, 'Miejski Ośrodek Sportu i Rekreacji', 'Zależne od usług', 'ul. Hallera 14a, 41-709 Ruda Śląska', '8:00–20:00', 5),
(49, 'Kościół św. Pawła Apostoła', 'Wstęp wolny', 'ul. Powstańców 19, 41-706 Ruda Śląska', '7:00–18:00', 5),
(50, 'Biblioteka Miejska', 'Wstęp wolny', 'ul. Dąbrowskiego 18, 41-709 Ruda Śląska', '9:00–19:00', 5),
(52, 'Klasztor Jasnogórski', 'Bilet normalny 15 zł', 'ul. Olsztyńska 23, 42-225 Częstochowa', 'codziennie 6:00-20:00', 6),
(53, ' Muzeum Częstochowskie\r\n\r\n', 'normalny: 12 zł \nulgowy: 6zł', 'al. Najświętszej Maryi Panny 47, 42-217 Częstochowa', 'pon.-pt. 9:00-17:00, sob.-nd. 10:00-16:00', 6),
(54, 'Aleja Najświętszej Maryi Panny\r\n\r\n', 'bezpłatnie', 'al. Najświętszej Maryi Panny, 42-225 Częstochowa', 'cały dzień', 6),
(55, 'Muzeum 600-lecia Jasnej Góry\r\n\r\n ', 'Normalny:10zł Ulgowy:5zł', 'ul. Olsztyńska 23, 42-225 Częstochowa', 'codziennie 9:00-18:00', 6),
(56, 'Muzeum Zegarów\r\n\r\n', 'Normalny:10zł Ulgowy:5zł', 'ul. Wyszyńskiego 2, 42-200 Częstochowa', 'pon.-pt. 9:00-17:00, sob.-nd. 10:00-16:00', 6),
(57, 'Cmentarz Kule\r\n\r\n', 'bezpłatnie', 'ul. Kule 11, 42-226 Częstochowa', 'cały dzień', 6),
(58, 'Muzeum Jerzego Kossaka\r\n\r\n', 'Normalny:15zł Ulgowy:7zł', 'ul. Księdza Jerzego Popiełuszki 5, Częstochowa', 'pon.-pt. 9:00-17:00', 6),
(59, 'Park Lisiniec\r\n\r\n ', 'bezpłatnie', 'ul. Lisiniec, 42-200 Częstochowa', 'cały dzień', 6),
(60, 'Pałac w Częstochowie\r\n\r\n    ', 'Normalny:12zł Ulgowy:6zł', 'ul. Dąbrowskiego 7, 42-200 Częstochowa', 'pon.-pt. 9:00-17:00', 6),
(61, ' Częstochowska Palmiarnia\r\n\r\n    ', 'Normalny:10zł Ulgowy:5zł', 'ul. Aleja Najświętszej Maryi Panny 29, 42-217 Częstochowa', 'codziennie 9:00-17:00', 6),
(62, 'Park im. Tadeusza Kościuszki\r\n\r\n  ', 'bezpłatnie', 'ul. Kościuszki 1, 44-200 Rybnik', 'cały dzień', 7),
(63, 'Muzeum w Rybniku\r\n\r\n', 'Normalny:12zł Ulgowy:6zł', 'ul. Jana III Sobieskiego 20, 44-200 Rybnik', 'pon.-pt. 9:00-16:00, sob.-nd. 10:00-16:00', 7),
(64, 'Zamek w Rybniku\r\n\r\n   \r\n', 'Normalny:10zł Ulgowy:5zł', 'ul. Zamkowa 1, 44-200 Rybnik', ' pon.-pt. 9:00-17:00', 7),
(65, 'Rynek w Rybniku\r\n\r\n   ', 'bezpłatnie', 'ul. Rynek, 44-200 Rybnik', 'cały dzień', 7),
(66, 'Rezerwat przyrody Łężczok\r\n\r\n   ', 'bezpłatnie', 'ul. Łężczok, 44-200 Rybnik', 'cały dzień', 7),
(67, 'Teatr Ziemi Rybnickiej\r\n\r\n    ', 'Normalny:40zł', 'ul. Jana III Sobieskiego 27, 44-200 Rybnik', 'godziny zależne od repertuaru', 7),
(68, 'Kultura i Sztuka - Galeria Sztuki Współczesnej\r\n\r\n ', 'Normalny:10zł Ulgowy:5zł', 'ul. Rynek 13, 44-200 Rybnik', 'pon.-pt. 10:00-18:00, sob.-nd. 10:00-16:00', 7),
(69, 'Stadion Miejski w Rybniku\r\n\r\n   ', 'zależna od wydarzenia ', 'ul. Gliwicka 72, 44-200 Rybnik', 'w zależności od wydarzeń sportowych', 7),
(70, 'Centrum Nauki i Techniki EC1\r\n\r\n  ', 'Normalny:15zł', 'ul. Czołgistów 1, 44-200 Rybnik', 'codziennie 9:00-17:00', 7),
(71, 'Ośrodek Rekreacyjny \"Nad Nacyną\"\r\n\r\n    ', 'bezpłatnie', 'ul. Nacyna, 44-200 Rybnik', 'cały dzień', 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `miasta`
--

CREATE TABLE `miasta` (
  `id_miasta` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `population` bigint(15) DEFAULT NULL,
  `land` double(10,5) DEFAULT NULL,
  `lng` double(9,6) DEFAULT NULL,
  `lat` double(9,6) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `miasta`
--

INSERT INTO `miasta` (`id_miasta`, `name`, `population`, `land`, `lng`, `lat`, `description`) VALUES
(1, 'Katowice', 286960, 164.73000, 19.023624, 50.264371, 'Katowice to stolica województwa śląskiego w południowej Polsce i centralne miasto obszaru miejskiego Katowice. Na dzień 2021 roku Katowice mają oficjalną populację wynoszącą 286 960 mieszkańców, a szacunkowa liczba mieszkańców to około 315 000 osób. Katowice stanowią centralną część Metropolii GZM, liczącej 2,3 miliona mieszkańców, oraz są częścią większego obszaru metropolitalnego Katowice-Ostrava, który rozciąga się na Czechy i ma populację wynoszącą około 5 milionów ludzi, co czyni go jednym z najbardziej zaludnionych obszarów metropolitalnych w Unii Europejskiej.\\r\\n  Katowice zostały założone jako wieś w XVI wieku, podczas gdy kilka współczesnych dzielnic Katowic zostało założonych jako wsie w średniowieczu. W XVIII wieku miasto zaczęło się rozwijać po odkryciu bogatych złóż węgla w tym rejonie. W pierwszej połowie XIX wieku intensywna industrializacja przekształciła lokalne młyny i gospodarstwa rolne w przemysłowe huty, kopalnie, odlewnie i warsztaty rzemieślnicze. Miasto od tego czasu zmieniło swoją gospodarkę, przekształcając ją z opartej na przemyśle ciężkim w gospodarkę opartą na usługach profesjonalnych, edukacji i opiece zdrowotnej. Cały obszar metropolitalny Katowic zajmuje 16. miejsce pod względem siły gospodarczej w Unii Europejskiej, osiągając produkt krajowy brutto w wysokości 114,5 miliarda dolarów. Katowicka Specjalna Strefa Ekonomiczna zajmuje czwarte miejsce na liście TOP10 Global Free Zones.\\r\\n  Katowice zostały zaklasyfikowane jako miasto typu Gamma – globalne miasto przez Globalization and World Cities Research Network i są centrum handlu, biznesu, transportu i kultury w południowej Polsce, z wieloma publicznymi firmami mającymi swoją siedzibę w mieście lub w jego przedmieściach, w tym grupą energetyczną Tauron i korporacją przemysłu metalowego Fasing. W Katowicach znajdują się także ważne instytucje kulturalne, takie jak Polska Narodowa Orkiestra Symfoniczna, nagradzane festiwale muzyczne, takie jak Off Festival i Tauron New Music, oraz infrastruktura transportowa, w tym lotnisko Katowice-Pyrzowice. Miasto gości także finały Intel Extreme Masters, turnieju e-sportowego w grach komputerowych. Katowice są również siedzibą kilku uczelni wyższych, w tym Uniwersytetu Śląskiego, Śląskiego Uniwersytetu Technicznego oraz Akademii Muzycznej im. Karola Szymanowskiego. Miasto jest członkiem Sieci Miast Kreatywnych UNESCO, wyróżnionym tytułem Miasta Muzyki.'),
(2, 'Gliwice', 181000, 133.73000, 18.676580, 50.297610, 'Gliwice to miasto na prawach powiatu w województwie śląskim, znane z przemysłu oraz jako ważny ośrodek naukowy. Leży na Wyżynie Śląskiej, nad rzeką Kłodnicą. Miasto pełni istotną rolę w aglomeracji górnośląskiej i jest ważnym centrum technologicznym.'),
(3, 'Zabrze', 170000, 80.50000, 18.790000, 50.320000, 'Zabrze to miasto w Górnośląskim Okręgu Przemysłowym, znane z przemysłu węglowego oraz jako ośrodek naukowy. W Zabrzu znajduje się Politechnika Śląska, a także liczne zabytki przemysłowe.'),
(4, 'Bytom', 167000, 69.60000, 18.932000, 50.347000, 'Bytom to miasto o dużym znaczeniu historycznym i przemysłowym. Słynie z tradycji górniczych i tekstylnych, a także z pięknej architektury. Miasto przechodzi transformację w kierunku rozwoju sektora usługowego.'),
(5, 'Ruda Śląska', 140000, 77.60000, 18.870000, 50.290000, 'Ruda Śląska to miasto w Górnośląskim Okręgu Przemysłowym, znane z przemysłu węglowego. Miasto przechodzi transformację, stawiając na nowoczesną infrastrukturę i jakość życia.'),
(6, 'Częstochowa', 224000, 159.70000, 19.124700, 50.811800, 'Częstochowa to miasto w południowej Polsce, znane z klasztoru na Jasnej Górze, który jest jednym z najważniejszych ośrodków pielgrzymkowych w kraju.'),
(7, 'Rybnik', 140000, 148.40000, 18.538700, 50.097500, 'Rybnik to miasto w południowej Polsce, znane z przemysłowego charakteru oraz bliskości do pięknych terenów zielonych i jezior.'),
(8, 'Jastrzębie-Zdrój', 96000, 86.80000, 18.600300, 49.974200, 'Jastrzębie-Zdrój to miasto w południowej Polsce, znane z przemysłu węglowego oraz uzdrowiskowego charakteru, szczególnie w dziedzinie rehabilitacji.'),
(9, 'Bielsko-Biała', 170000, 124.60000, 19.048100, 49.822300, 'Bielsko-Biała to miasto w południowej Polsce, znane z przemysłu włókienniczego, a także z pięknych górskich krajobrazów i bliskości do Beskidu Śląskiego.'),
(10, 'Chorzów\r\n', 109000, 33.20000, 18.966200, 50.300300, 'Chorzów to miasto w południowej Polsce, znane z przemysłu węglowego, a także z jednego z największych parków miejskich w kraju i Śląskiego Wesołego Miasteczka'),
(12, 'Sosnowiec', 187115, 91.27000, 19.102700, 19.102700, 'Sosnowiec to dynamiczne miasto w województwie śląskim, będące ważnym ośrodkiem przemysłowym, kulturalnym i edukacyjnym, z bogatą historią i rozwiniętą infrastrukturą miejską.'),
(13, 'Tychy', 122045, 81.58000, 19.019400, 50.128000, 'Tychy to nowoczesne miasto w województwie śląskim, znane z przemysłowego dziedzictwa, wysokiej jakości życia oraz licznych terenów rekreacyjnych i kulturalnych.'),
(14, 'Dąbrowa Górnicza', 113460, 191.44000, 19.103600, 50.320300, 'Dąbrowa Górnicza to duże miasto w województwie śląskim, które łączy przemysłową historię z dynamicznym rozwojem, oferując liczne tereny zielone, a także atrakcje kulturalne i rekreacyjne.'),
(15, 'Jaworzno', 86812, 123.40000, 19.258300, 50.250000, 'Jaworzno to miasto w województwie śląskim, które łączy przemysłową tradycję z rozwojem nowoczesnych usług, a także oferuje liczne tereny rekreacyjne i przyrodnicze.');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `atrakcje`
--
ALTER TABLE `atrakcje`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `miasta`
--
ALTER TABLE `miasta`
  ADD PRIMARY KEY (`id_miasta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atrakcje`
--
ALTER TABLE `atrakcje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `miasta`
--
ALTER TABLE `miasta`
  MODIFY `id_miasta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
