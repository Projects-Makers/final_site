-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Lis 2024, 10:12
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
  `miasto` varchar(35) DEFAULT NULL,
  `miejscowosc` int(2) DEFAULT NULL,
  `opis_miasto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `miasta`
--

INSERT INTO `miasta` (`id`, `miasto`, `miejscowosc`, `opis_miasto`) VALUES
(43, 'Katowice', 1, 'Katowice to stolica województwa śląskiego w południowej Polsce i centralne miasto obszaru miejskiego Katowice. Na dzień 2021 roku Katowice mają oficjalną populację wynoszącą 286 960 mieszkańców, a szacunkowa liczba mieszkańców to około 315 000 osób. Katowice stanowią centralną część Metropolii GZM, liczącej 2,3 miliona mieszkańców, oraz są częścią większego obszaru metropolitalnego Katowice-Ostrava, który rozciąga się na Czechy i ma populację wynoszącą około 5 milionów ludzi, co czyni go jednym z najbardziej zaludnionych obszarów metropolitalnych w Unii Europejskiej.\r\n  Katowice zostały założone jako wieś w XVI wieku, podczas gdy kilka współczesnych dzielnic Katowic zostało założonych jako wsie w średniowieczu. W XVIII wieku miasto zaczęło się rozwijać po odkryciu bogatych złóż węgla w tym rejonie. W pierwszej połowie XIX wieku intensywna industrializacja przekształciła lokalne młyny i gospodarstwa rolne w przemysłowe huty, kopalnie, odlewnie i warsztaty rzemieślnicze. Miasto od tego czasu zmieniło swoją gospodarkę, przekształcając ją z opartej na przemyśle ciężkim w gospodarkę opartą na usługach profesjonalnych, edukacji i opiece zdrowotnej. Cały obszar metropolitalny Katowic zajmuje 16. miejsce pod względem siły gospodarczej w Unii Europejskiej, osiągając produkt krajowy brutto w wysokości 114,5 miliarda dolarów. Katowicka Specjalna Strefa Ekonomiczna zajmuje czwarte miejsce na liście TOP10 Global Free Zones.\r\n  Katowice zostały zaklasyfikowane jako miasto typu Gamma – globalne miasto przez Globalization and World Cities Research Network i są centrum handlu, biznesu, transportu i kultury w południowej Polsce, z wieloma publicznymi firmami mającymi swoją siedzibę w mieście lub w jego przedmieściach, w tym grupą energetyczną Tauron i korporacją przemysłu metalowego Fasing. W Katowicach znajdują się także ważne instytucje kulturalne, takie jak Polska Narodowa Orkiestra Symfoniczna, nagradzane festiwale muzyczne, takie jak Off Festival i Tauron New Music, oraz infrastruktura transportowa, w tym lotnisko Katowice-Pyrzowice. Miasto gości także finały Intel Extreme Masters, turnieju e-sportowego w grach komputerowych. Katowice są również siedzibą kilku uczelni wyższych, w tym Uniwersytetu Śląskiego, Śląskiego Uniwersytetu Technicznego oraz Akademii Muzycznej im. Karola Szymanowskiego. Miasto jest członkiem Sieci Miast Kreatywnych UNESCO, wyróżnionym tytułem Miasta Muzyki.\r\n'),
(44, 'Gliwice', 1, ' Gliwice to miasto w Górnym Śląsku, w południowej Polsce. Miasto znajduje się na Wyżynie Śląskiej, nad rzeką Kłodnicą (dopływ Odry). Leży około 25 km na zachód od Katowic, stolicy województwa śląskiego.\r\n  Gliwice to najbardziej na zachód wysunięte miasto Metropolii GZM, aglomeracji liczącej 2,0 miliona mieszkańców, i trzecie co do wielkości miasto tego obszaru, z 175 102 stałymi mieszkańcami na rok 2021. Miasto leży również w obrębie większego obszaru metropolitalnego Katowice-Ostrava, który liczy około 5,3 miliona ludzi i rozciąga się na wschodnią część Górnego Śląska, zachodnią Małopolskę i Region Morawsko-Śląski w Czechach. Gliwice graniczą z trzema innymi miastami i miejscowościami aglomeracji: Zabrzem, Knurowem i Pyskowicami. Jest to jedno z ważniejszych miast akademickich w Polsce, dzięki Śląskiemu Uniwersytetowi Technologicznemu, który został założony w 1945 roku przez akademików Politechniki Lwowskiej. W Gliwicach studiuje ponad 20 000 osób. Gliwice są także istotnym ośrodkiem przemysłowym Polski. Po transformacji gospodarczej lat 90. miasto przekształciło swoją gospodarkę z przemysłu stalowego i węglowego na przemysł motoryzacyjny i maszynowy.\r\n  Założone w XIII wieku, Gliwice są jednym z najstarszych osad Górnego Śląska, z zachowanym rdzeniem Starego Miasta. Najważniejsze zabytki Gliwic to kościół św. Bartłomieja (XV wiek), Zamek w Gliwicach i mury miejskie (XIV wiek), kościół ormiański (pierwotnie szpital, XV wiek) oraz kościół Wszystkich Świętych na Starym Mieście (XV wiek). Gliwice są również znane z Wieży Radiowej, na której miało miejsce tzw. „incydent gliwicki” tuż przed wybuchem II wojny światowej, a która uznawana jest za najwyższą drewnianą budowlę na świecie. Miasto słynie także z gmachu Weichmann Textile House, jednej z pierwszych realizacji słynnego architekta Ericha Mendelsohna. Gliwice były gospodarzem Konkursu Piosenki Eurowizji Junior 2019, który odbył się 24 listopada 2019 roku.\r\n');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `miasta`
--
ALTER TABLE `miasta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `miasta`
--
ALTER TABLE `miasta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
