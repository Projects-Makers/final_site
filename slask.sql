-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2025 at 09:28 AM
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
  `opis` text NOT NULL,
  `lp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atrakcje`
--

INSERT INTO `atrakcje` (`id`, `nazwa`, `cena`, `lokalizacja`, `godz`, `opis`, `lp`) VALUES
(1, 'Spodek', 'Wstęp zależny od wydarzenia', 'Katowice, al. Korfantego 35', 'Zależne od wydarzenia.', 'Spodek to jeden z najbardziej rozpoznawalnych symboli Katowic, a zarazem ikona architektury modernistycznej w Polsce. Zbudowany w latach 1964-1971, jest charakterystycznym obiektem w kształcie latającego spodek, który wyróżnia się na tle miasta. Wewnątrz mieści się hala widowiskowa o dużej pojemności, która gości liczne koncerty, wydarzenia sportowe, targi i konferencje. Spodek jest także miejscem organizacji koncertów światowej sławy artystów oraz ważnych imprez kulturalnych i biznesowych.  Oprócz swojej funkcji jako centrum kultury i sportu, Spodek stał się symbolem przemian, jakie zachodziły w Polsce po okresie PRL. Niezależnie od tego, czy bierzesz udział w wydarzeniu, czy po prostu podziwiasz jego architekturę z zewnątrz, Spodek zawsze robi wrażenie. Jest to także jedno z najczęściej odwiedzanych miejsc w Katowicach.', 1),
(2, 'Muzeum Śląskie', 'Bilet normalny: ok. 20 zł\r\nBilet ulgowy: ok. 10 zł', 'Katowice, ul. T. Dobrowolskiego 1', 'Codziennie w godzinach 10:00-18:00', 'Muzeum Śląskie w Katowicach to jedno z najważniejszych muzeów regionalnych w Polsce, które prezentuje bogatą historię i kulturę Śląska. Zlokalizowane w dawnym kompleksie przemysłowym, który kiedyś był częścią kopalni węgla kamiennego, muzeum łączy nowoczesną architekturę z przemysłową historią regionu. Otwarte w nowej odsłonie w 2015 roku, oferuje przestronne i nowoczesne wnętrza, które sprzyjają wystawom i wydarzeniom kulturalnym.  W zbiorach Muzeum Śląskiego znajdują się eksponaty związane z historią regionu, przemysłem, sztuką, a także z tradycjami ludowymi i religijnymi. Wśród najciekawszych wystaw można znaleźć sztukę współczesną, starą sztukę śląską, a także wystawy poświęcone historii Górnego Śląska, jego kulturze i obyczajom. Muzeum organizuje także liczne wydarzenia, wykłady, koncerty i warsztaty edukacyjne.  Muzeum Śląskie to doskonałe miejsce dla osób, które chcą zgłębić historię tego wyjątkowego regionu oraz poznać szeroki wachlarz śląskich tradycji i współczesnych osiągnięć artystycznych.', 1),
(3, 'Nikiszowiec', 'Wstęp bezpłatny.', 'Katowice, Nikiszowiec', 'Dostępne codziennie', 'Nikiszowiec to historyczna dzielnica robotnicza w Katowicach, znana z charakterystycznej ceglanej architektury. Ta urokliwa okolica, zbudowana na początku XX wieku, początkowo miała na celu zapewnienie mieszkań dla robotników pracujących w pobliskich kopalniach węgla. Architektura jest unikalnym przykładem urbanistyki z okresu industrialnego, z ciasno zabudowanymi budynkami, wąskimi uliczkami i podwórzami, które zachowały historyczny charakter dzielnicy. Dziś Nikiszowiec to zabytek kulturowy, popularny ze względu na malownicze uliczki i tętniący życiem klimat, często goszczący lokalne wydarzenia i festiwale.', 1),
(4, 'Katedra Chrystusa Króla', 'Wstęp bezpłatny.', 'Katowice, ul. 3 Maja 13', 'Codziennie', 'Katedra Chrystusa Króla w Katowicach to jedna z najbardziej imponujących budowli sakralnych w Polsce. Została ukończona w połowie XX wieku i stanowi symbol głębokiej tradycji religijnej i historii regionu. Architektura katedry charakteryzuje się nowoczesnym stylem, a wyróżniającymi elementami są jej wysokie, strzeliste wieże oraz przestronne wnętrze. Wnętrze katedry zdobią wspaniałe witraże i piękne ołtarze, które podkreślają jej majestat. Katedra Chrystusa Króla jest ważnym miejscem kultu religijnego oraz popularnym punktem turystycznym w Katowicach, przyciągającym zarówno wiernych, jak i turystów podczas wydarzeń religijnych i kulturalnych.', 1),
(5, 'Silesia City Center', 'Wstęp bezpłatny', 'Katowice, ul. Chorzowska 107', 'od 9:00 do 21:00.', 'Silesia City Center to jedno z największych i najbardziej popularnych centrów handlowych w Katowicach. Zlokalizowane w centrum miasta, oferuje szeroką gamę sklepów, restauracji, kawiarni oraz atrakcji rozrywkowych, takich jak kino i strefy relaksu. Otwarte w 2005 roku, SCC stało się ważnym punktem na mapie zakupowej i kulturalnej regionu. Dzięki nowoczesnej architekturze, przestronnym wnętrzom oraz dogodnemu położeniu, jest ulubionym miejscem zarówno dla mieszkańców, jak i turystów, którzy mogą tu spędzać czas w komfortowych warunkach, robiąc zakupy lub korzystając z różnych usług.', 1),
(6, 'Górnośląski Park Etnograficzny', ' Bilet normalny: ok. 12 zł\r\n Bilet ulgowy: ok. 8 zł', 'Katowice, ul. Parkowa 2', 'od 10:00 do 17:00.', 'Górnośląski Park Etnograficzny w Chorzowie to unikalne miejsce, które pozwala na odkrycie tradycyjnej kultury i historii Śląska. Park, znany również jako Skansen, gromadzi liczne zabytkowe budynki, w tym chałupy, młyny, kościoły, szkoły oraz warsztaty rzemieślnicze, które zostały przeniesione z różnych regionów Górnego Śląska. Dzięki temu, odwiedzający mogą zobaczyć, jak wyglądało życie mieszkańców tego regionu w minionych stuleciach. W skansenie organizowane są także liczne wydarzenia, warsztaty oraz festyny, które pozwalają na jeszcze głębsze zanurzenie się w lokalnej tradycji i folklorze. To miejsce jest doskonałą okazją do nauki o historii i kulturze Śląska w atmosferze spokoju i natury.', 1),
(7, 'Teatr Śląski', 'Bilet normalny: ok. 40-100 zł\r\nBilet ulgowy: ok. 30-70 zł', 'Katowice, ul. Rynek 10', 'Zależne od repertuaru.', 'Teatr Śląski im. Stanisława Wyspiańskiego w Katowicach to jedno z najważniejszych i najstarszych teatrów na Górnym Śląsku. Został założony w 1907 roku i od tego czasu jest jednym z głównych ośrodków kulturalnych regionu. W repertuarze Teatru Śląskiego znajdują się zarówno klasyczne dzieła literatury, jak i współczesne spektakle, które poruszają ważne tematy społeczne i kulturowe. Teatr wyróżnia się również wysoką jakością artystyczną, a jego produkcje przyciągają szeroką publiczność. Budynek teatru, znajdujący się w centrum Katowic, stanowi nie tylko przestrzeń dla miłośników sztuki teatralnej, ale także ważny punkt na mapie kulturowej miasta.', 1),
(8, 'Planetarium Śląskie', 'Bilet normalny: ok. 20 zł\r\nBilet ulgowy: ok. 12 zł', 'Katowice, ul. aleja Wojciecha Korfantego 6\r\n', 'Bilet normalny: ok. 20 zł\r\nBilet ulgowy: ok. 12 zł', 'Planetarium Śląskie w Chorzowie to jedno z najstarszych i największych planetariów w Polsce, które oferuje wyjątkowe wrażenia związane z astronomią. Otwarte w 1955 roku, stało się ważnym centrum edukacyjnym i kulturalnym, przyciągającym miłośników nauki oraz turystów. Planetarium oferuje spektakle multimedialne, projekcje astronomiczne i warsztaty, które pozwalają na zgłębianie tajemnic kosmosu. Z jego tarasu widokowego rozciąga się piękna panorama na Chorzów i Katowice. Dzięki nowoczesnym technologiom i interaktywnym wystawom, Planetarium Śląskie zapewnia fascynującą podróż przez wszechświat dla osób w każdym wieku.', 1),
(9, 'ZOO', 'Bilet normalny: ok. 20 zł\r\nBilet ulgowy: ok. 10 zł', 'Katowice, ul. Wiatraczna 15', 'od 9:00 do 17:00', 'Śląski Ogród Zoologiczny w Chorzowie to jedno z największych i najstarszych zoo w Polsce, które oferuje odwiedzającym możliwość zobaczenia wielu gatunków zwierząt z całego świata. Założony w 1950 roku, zoo mieści się na terenie Chorzowskiego Parku Krajobrazowego i rozciąga się na ponad 50 hektarach. W zoo znajdują się liczne pawilony tematyczne, w których można podziwiać zwierzęta z różnych ekosystemów, w tym z Afryki, Azji, Ameryki Południowej czy Australii. Dodatkowo, ogród oferuje atrakcje takie jak akwaria, terraria, a także interaktywne wystawy edukacyjne, które przybliżają wiedzę na temat ochrony zwierząt i ekologii. Śląski ZOO to idealne miejsce na spędzenie czasu w kontakcie z naturą, zarówno dla rodzin z dziećmi, jak i dla miłośników fauny i flory.', 1),
(10, 'Muzeum Historii Katowic', 'Bilet normalny: ok. 10 zł\r\nBilet ulgowy: ok. 5 zł', 'Katowice, ul. Jana Matejki 6\r\n', 'od 10:00 do 18:00', 'Muzeum Historii Katowic to instytucja poświęcona historii miasta Katowice i regionu Śląska. Znajduje się w centrum Katowic, w budynku zabytkowej, XIX-wiecznej kamienicy, a jego zbiory obejmują szeroki zakres tematyczny, od czasów średniowiecza po współczesność. Muzeum oferuje wystawy stałe i czasowe, które ukazują rozwój Katowic jako ośrodka przemysłowego, kulturowego i społecznego. Zwiedzający mogą poznać historię miasta, jego mieszkańców oraz wpływ, jaki region Śląska miał na rozwój przemysłu w Polsce. W muzeum można zobaczyć także dokumenty, fotografie, artefakty codziennego użytku oraz przedmioty związane z historią przemysłu węgla i stali. To doskonałe miejsce dla osób zainteresowanych historią Śląska oraz rozwojem urbanistycznym Katowic.', 1),
(11, 'Radiostacja Gliwice\r\n', '10/15 zł', 'Gliwice, ul. Tarnogórska 129', 'od 10:00 do 18:00', 'Radiostacja Gliwice to jedno z najważniejszych zabytków techniki w Polsce, a także symbol historii II wojny światowej. Zlokalizowana w Gliwicach, jest jednym z najwyższych drewnianych budynków w Europie, a jej konstrukcja sięga 111 metrów wysokości. Radiostacja została zbudowana w 1935 roku i początkowo służyła jako stacja nadawcza. W 1939 roku stała się miejscem tzw. \"incydentu gliwickiego\" — wydarzenia, które zostało wykorzystane przez Niemców jako pretekst do wybuchu II wojny światowej.  Obecnie Radiostacja Gliwice jest dostępna dla zwiedzających i stanowi część Muzeum Radiostacji Gliwice. Warto zobaczyć ją zarówno ze względu na jej historyczne znaczenie, jak i unikalną architekturę. W ramach zwiedzania, odwiedzający mogą poznać dzieje stacji, jej rolę w historii, a także technologię nadawania radiowego w okresie międzywojennym. Wokół radiostacji rozciąga się także park, który stanowi doskonałe miejsce na spacer.', 2),
(12, 'Zamek Piastowski', '5/10 zł\r\n', 'Gliwice, ul. Pod Murami 2', 'od 9:00 do 17:00', 'Zamek Piastowski w Gliwicach to średniowieczna twierdza, której historia sięga XIII wieku. Zamek był siedzibą książąt śląskich z dynastii Piastów i pełnił funkcje obronne oraz administracyjne. Choć pierwotna konstrukcja była drewniana, zamek został później przebudowany w murowany, z charakterystycznymi elementami gotyckimi. Wznosi się nad miastem, a jego monumentalna wieża stanowi jeden z głównych punktów orientacyjnych Gliwic.  Dziś Zamek Piastowski jest dostępny dla zwiedzających i pełni funkcję muzeum, gdzie można zobaczyć wystawy poświęcone historii Śląska, średniowiecznej architekturze oraz dawnym mieszkańcom zamku. W obrębie zamku organizowane są także wydarzenia kulturalne, takie jak koncerty, spektakle teatralne i rekonstrukcje historyczne. Zamek jest również popularnym miejscem spacerów, z którego rozpościera się piękny widok na miasto.', 2),
(14, 'Kolejkowo Gliwice', 'Normalny 37 zł, \r\nulgowy 30 zł', 'Pszczyńska 315, 44-100 Gliwice', 'Codziennie 10:00 – 18:00, \r\nw weekendy do 19:00', 'Kolejkowo Gliwice to interaktywna makieta kolejowa, będąca częścią jednej z największych atrakcji tego typu w Polsce. Znajduje się w Gliwicach i przedstawia miniaturową wersję Górnego Śląska, w tym miasto Gliwice, z jego charakterystycznymi budynkami, krajobrazami oraz działającymi pociągami. Makieta o powierzchni 400 m² ukazuje wiele szczegółów, takich jak fabryki, mosty, tuneli czy nawet scenki z życia codziennego, tworząc wrażenie prawdziwego, tętniącego życiem świata w miniaturze.  Kolejkowo to doskonałe miejsce dla miłośników modeli kolejowych, rodzin z dziećmi, a także dla każdego, kto chce zobaczyć, jak wygląda Górny Śląsk w miniaturze. Oprócz samej makiety, na miejscu można podziwiać również interaktywne elementy, takie jak możliwość sterowania pociągami czy korzystania z dodatkowych atrakcji. Kolejkowo Gliwice to zarówno edukacyjna, jak i rozrywkowa atrakcja, która przyciąga turystów z różnych stron Polski.', 2),
(15, 'Palmiarnia Miejska', 'Normalny 15 zł\r\nulgowy 9 zł', 'Fredry 6, 44-100 Gliwice', 'Wt-Pt: 9:00 – 18:00\r\nSb-Nd: 10:00 – 18:00', 'Palmiarnia Miejska w Gliwicach to jeden z najstarszych ogrodów botanicznych w Polsce, który stanowi niezwykłą atrakcję zarówno dla miłośników roślin, jak i turystów szukających relaksu wśród egzotycznych roślin. Znajduje się w centrum Gliwic, a jej historia sięga 1934 roku, kiedy to została otwarta. Palmiarnia to kompleks szklarni, w którym rośnie ponad 1000 gatunków roślin z różnych stref klimatycznych – od tropikalnych palm, przez kaktusy, po rośliny subtropikalne.  Wewnątrz palmiarni znajduje się również strefa z egzotycznymi zwierzętami, jak np. papugi czy ryby, co sprawia, że miejsce to jest jeszcze bardziej wyjątkowe. Dzięki klimatyzowanym szklarniach, odwiedzający mogą poczuć się jak na tropikalnej wyspie, niezależnie od pory roku. Palmiarnia Miejska to doskonała przestrzeń na spacery, edukację botaniczną i odpoczynek w otoczeniu niezwykłej przyrody.', 2),
(16, 'Arena Gliwice', 'Zależna od wydarzeń', 'Kujawska 50, Gliwice', 'Zależne od wydarzeń', 'Arena Gliwice to nowoczesna hala widowiskowo-sportowa, która jest jednym z najważniejszych obiektów w regionie. Została otwarta w 2015 roku i od tego czasu stała się jednym z głównych miejsc organizacji dużych wydarzeń kulturalnych, sportowych oraz koncertów. Arena jest w stanie pomieścić aż do 15 000 osób, co sprawia, że jest jednym z największych obiektów tego typu w Polsce.  Hala posiada doskonałe zaplecze techniczne i akustyczne, co czyni ją idealnym miejscem do organizacji koncertów, występów artystycznych, a także rozgrywek sportowych, w tym meczów koszykówki, siatkówki czy hokeja. Arena Gliwice to także centrum konferencyjne, które przyciąga różnorodne wydarzenia biznesowe i wystawy. Dzięki swojej uniwersalności i nowoczesnym udogodnieniom, jest to jedno z najważniejszych miejsc na mapie Gliwic i całego Śląska.', 2),
(17, 'Muzeum Odlewnictwa Artystycznego', 'Normalny 8 z, \r\nulgowy 5 zł', 'Bojkowska 37, Gliwice', 'Wt-Pt: 10:00 – 16:00\r\nSb-Nd: 11:00 – 17:00', '', 2),
(18, 'Teatr Miejski w Gliwicach', 'Zależna od spektaklu', 'Nowy Świat 55/57, Gliwice', 'Zależne od repertuaru', '', 2),
(19, 'Rynek w Gliwicach', 'Wstęp wolny', 'Centrum miasta', 'Całodobowo', '', 2),
(20, 'Park Chopina', 'Wstęp wolny', 'ul. Fredry, Gliwice', 'Całodobowo', '', 2),
(21, 'Zabytkowa Kopalnia Guido', ' Normalny 50 zł, ulgowy 40 zł', 'ul. 3 Maja 93 \r\n41-800 Zabrze', 'Wtorek–Niedziela: 9:00–19:00', '', 3),
(22, 'Sztolnia Królowa Luiza', 'Normalny 45 zł, ulgowy 35 zł', 'ul. Wolności 408, 41-800 Zabrze', 'Wtorek–Niedziela: 9:00–19:00', '', 3),
(23, 'Szyb Maciej', 'Wstęp wolny', ' ul. Srebrna 6, 41-800 Zabrze', 'Codziennie: 10:00–22:00', '', 3),
(24, 'Ogród Botaniczny w Zabrzu', 'Normalny 5 zł \r\nulgowy 3 zł', 'ul. Piłsudskiego 60, 41-800 Zabrze', '10:00–18:00', '', 3),
(25, 'Park Miliona Świateł', 'Normalny 20 zł \r\nulgowy 15 zł', 'Park im. Poległych Bohaterów, 41-800 Zabrze', '16:00–22:00', '', 3),
(26, 'Muzeum Górnictwa Węglowego', 'Normalny 10 zł \r\nulgowy 5 zł', 'ul. 3 Maja 19, 41-800 Zabrze', '9:00–15:00', '', 3),
(27, 'Teatr Nowy w Zabrzu\r\n', 'Zależne od spektaklu', 'ul. Plac Teatralny 1, 41-800 Zabrze', 'Zależne od repertuaru', '', 3),
(28, 'Kąpielisko Leśne', 'Normalny 15 zł\r\nulgowy 10 zł', 'ul. Srebrna 10, 41-800 Zabrze', '10:00–18:00', '', 3),
(29, 'Drewniany Kościół św. Jadwigi', 'Wstęp wolny', 'ul. Wolności 504, 41-800 Zabrze', 'Zależne od nabożeństw', '', 3),
(30, 'Zabytkowa Kopalnia Guido', 'Normalny 50 zł\r\nulgowy 40 zł', 'ul. 3 Maja 93, 41-800 Zabrze', '9:00–19:00', '', 3),
(31, 'Pałac Tiele-Wincklerów', 'Wstęp wolny', 'ul. Dzierżonia 30, 41-908 Bytom', '10:00 – 18:00', '', 4),
(32, 'Sztolnia Królowa Luiza', 'Normalny 45 zł\r\nulgowy 35 zł', 'ul. Wolności 408, Bytom', '9:00 – 19:00', '', 4),
(33, 'Zabytkowa Kopalnia Guido', 'Normalny 50 zł\r\nulgowy 40 zł', 'ul. 3 Maja 93, 41-800 Bytom', '9:00 – 19:00', '', 4),
(34, 'Park Miejski im. Franciszka Kachla', 'Wstęp Wolny', 'ul. Wrocławska, Bytom', 'Całodobowo', '', 4),
(35, 'Żabie Doły', 'Wstęp wolny', 'Pogranicze Bytomia', 'Całodobowo', '', 4),
(36, 'Górnośląskie Koleje Wąskotorowe', 'Normalny 20 zł\r\nulgowy 15 zł', 'ul. Reja 13, Bytom', 'Kursy organizowane sezonowo', '', 4),
(37, 'Opera Śląska', 'Zależne od spektaklu', 'ul. Moniuszki 21/23, Bytom', 'Zależnie od repertuaru', '', 4),
(38, 'Rezerwat Przyrody Segiet', 'Wstęp wolny', 'Pogranicze Bytomia i Tarnowskich Gór', 'Całodobowo', '', 4),
(39, 'Muzeum Górnośląskie\r\n', ' Normalny 10 zł, ulgowy 6 zł', 'pl. Jana III Sobieskiego 2, Bytom', '10:00 – 16:00', '', 4),
(40, 'Dolomity Sportowa Dolina', 'Zależne od atrakcji', 'ul. Blachówka 94, Bytom', '10:00 – 21:00', '', 4),
(41, 'Aquapark \"Aquadrom\"', 'Bilet normalny: 25 zł\r\nBilet ulgowy: 20 zł', 'ul. Kłodnicka 95, 41-706 Ruda Śląska', '6:00–22:00', '', 5),
(42, 'Park Strzelnica\r\n', 'Wstęp wolny', 'ul. Strzelnicza 1, 41-711 Ruda Śląska', '10:00–18:00', '', 5),
(43, 'Muzeum Miejskie im. Maksymiliana Chroboka', 'Bilet normalny: 10 zł\r\nBilet ulgowy: 5 zł', 'ul. Wolności 26, 41-700 Ruda Śląska', '10:00–16:00', '', 5),
(44, 'Kino Patria', 'Bilet normalny: 20 zł\r\nBilet ulgowy: 15 zł', 'ul. Chorzowska 3, 41-700 Ruda Śląska', 'Zależne od repertuaru', '', 5),
(45, 'Park Wodny \"Planty\"', 'Bilet normalny: 30 zł\r\nBilet ulgowy: 25 zł', 'ul. Ratowników 2, 41-710 Ruda Śląska\r\n', '9:00–21:00', '', 5),
(46, 'Centrum Handlowe \"Plaza Ruda Śląska\"', 'Wstęp wolny', 'ul. 1 Maja 310, 41-710 Ruda Śląska', '9:00 - 21:00', '', 5),
(47, 'Stadion Miejski', 'Zależne od wydarzeń', 'ul. Czarnoleśna 12, 41-709 Ruda Śląska', 'Zależne od wydarzeń', '', 5),
(48, 'Miejski Ośrodek Sportu i Rekreacji', 'Zależne od usług', 'ul. Hallera 14a, 41-709 Ruda Śląska', '8:00–20:00', '', 5),
(49, 'Kościół św. Pawła Apostoła', 'Wstęp wolny', 'ul. Powstańców 19, 41-706 Ruda Śląska', '7:00–18:00', '', 5),
(50, 'Biblioteka Miejska', 'Wstęp wolny', 'ul. Dąbrowskiego 18, 41-709 Ruda Śląska', '9:00–19:00', '', 5),
(52, 'Klasztor Jasnogórski', 'Bilet normalny 15 zł', 'ul. Olsztyńska 23, 42-225 Częstochowa', 'codziennie 6:00-20:00', '', 6),
(53, ' Muzeum Częstochowskie\r\n\r\n', 'normalny: 12 zł \nulgowy: 6zł', 'al. Najświętszej Maryi Panny 47, 42-217 Częstochowa', 'pon.-pt. 9:00-17:00, sob.-nd. 10:00-16:00', '', 6),
(54, 'Aleja Najświętszej Maryi Panny\r\n\r\n', 'bezpłatnie', 'al. Najświętszej Maryi Panny, 42-225 Częstochowa', 'cały dzień', '', 6),
(55, 'Muzeum 600-lecia Jasnej Góry\r\n\r\n ', 'Normalny:10zł Ulgowy:5zł', 'ul. Olsztyńska 23, 42-225 Częstochowa', 'codziennie 9:00-18:00', '', 6),
(56, 'Muzeum Zegarów\r\n\r\n', 'Normalny:10zł Ulgowy:5zł', 'ul. Wyszyńskiego 2, 42-200 Częstochowa', 'pon.-pt. 9:00-17:00, sob.-nd. 10:00-16:00', '', 6),
(57, 'Cmentarz Kule\r\n\r\n', 'bezpłatnie', 'ul. Kule 11, 42-226 Częstochowa', 'cały dzień', '', 6),
(58, 'Muzeum Jerzego Kossaka\r\n\r\n', 'Normalny:15zł Ulgowy:7zł', 'ul. Księdza Jerzego Popiełuszki 5, Częstochowa', 'pon.-pt. 9:00-17:00', '', 6),
(59, 'Park Lisiniec\r\n\r\n ', 'bezpłatnie', 'ul. Lisiniec, 42-200 Częstochowa', 'cały dzień', '', 6),
(60, 'Pałac w Częstochowie\r\n\r\n    ', 'Normalny:12zł Ulgowy:6zł', 'ul. Dąbrowskiego 7, 42-200 Częstochowa', 'pon.-pt. 9:00-17:00', '', 6),
(61, ' Częstochowska Palmiarnia\r\n\r\n    ', 'Normalny:10zł Ulgowy:5zł', 'ul. Aleja Najświętszej Maryi Panny 29, 42-217 Częstochowa', 'codziennie 9:00-17:00', '', 6),
(62, 'Park im. Tadeusza Kościuszki\r\n\r\n  ', 'bezpłatnie', 'ul. Kościuszki 1, 44-200 Rybnik', 'cały dzień', '', 7),
(63, 'Muzeum w Rybniku\r\n\r\n', 'Normalny:12zł Ulgowy:6zł', 'ul. Jana III Sobieskiego 20, 44-200 Rybnik', 'pon.-pt. 9:00-16:00, sob.-nd. 10:00-16:00', '', 7),
(64, 'Zamek w Rybniku\r\n\r\n   \r\n', 'Normalny:10zł Ulgowy:5zł', 'ul. Zamkowa 1, 44-200 Rybnik', ' pon.-pt. 9:00-17:00', '', 7),
(65, 'Rynek w Rybniku\r\n\r\n   ', 'bezpłatnie', 'ul. Rynek, 44-200 Rybnik', 'cały dzień', '', 7),
(66, 'Rezerwat przyrody Łężczok\r\n\r\n   ', 'bezpłatnie', 'ul. Łężczok, 44-200 Rybnik', 'cały dzień', '', 7),
(67, 'Teatr Ziemi Rybnickiej\r\n\r\n    ', 'Normalny:40zł', 'ul. Jana III Sobieskiego 27, 44-200 Rybnik', 'godziny zależne od repertuaru', '', 7),
(68, 'Kultura i Sztuka - Galeria Sztuki Współczesnej\r\n\r\n ', 'Normalny:10zł Ulgowy:5zł', 'ul. Rynek 13, 44-200 Rybnik', 'pon.-pt. 10:00-18:00, sob.-nd. 10:00-16:00', '', 7),
(69, 'Stadion Miejski w Rybniku\r\n\r\n   ', 'zależna od wydarzenia ', 'ul. Gliwicka 72, 44-200 Rybnik', 'w zależności od wydarzeń sportowych', '', 7),
(70, 'Centrum Nauki i Techniki EC1\r\n\r\n  ', 'Normalny:15zł', 'ul. Czołgistów 1, 44-200 Rybnik', 'codziennie 9:00-17:00', '', 7),
(71, 'Ośrodek Rekreacyjny \"Nad Nacyną\"\r\n\r\n    ', 'bezpłatnie', 'ul. Nacyna, 44-200 Rybnik', 'cały dzień', '', 7);

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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `restauracje`
--

CREATE TABLE `restauracje` (
  `id` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `cena` text NOT NULL,
  `lokalizacja` text NOT NULL,
  `godz` text NOT NULL,
  `opis` text NOT NULL,
  `lp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `restauracje`
--

INSERT INTO `restauracje` (`id`, `nazwa`, `cena`, `lokalizacja`, `godz`, `opis`, `lp`) VALUES
(1, 'La Squadra Ristorante', 'Przystawki od 29 zł, zupy od 18 zł, dania główne takie jak lasagne bolońska za 38 zł, polędwica woło', 'ul. Feliksa Bocheńskiego 109, 40-816 Katowice', 'Poniedziałek – Piątek: 12:00 – 22:00 Sobota: 12:00 – 22:00 Niedziela: 09:00 – 18:00', 'Restauracja włoska zlokalizowana przy salonie luksusowych samochodów, oferująca autentyczne dania kuchni włoskiej w eleganckim otoczeniu.', 1),
(2, 'Cafe Kattowitz', 'Desery od 15 zł, obiady śląskie od 40 zł.', 'ul. Świętego Jana 7, 40-012 Katowice', 'Codziennie: 10:00 – 22:00', 'Kawiarnia w stylu sprzed 100 lat, oferująca tradycyjne desery oraz dania kuchni śląskiej w klimatycznym wnętrzu.', 1),
(3, 'Len Arte', 'Pizza od 28 zł, makarony od 35 zł.', 'ul. Mariacka 25, 40-014 Katowice', 'Poniedziałek – Czwartek: 13:00 – 22:00 Piątek – Niedziela: 13:00 – 23:00', 'Pizzeria z włoskim piecem opalanym drewnem, specjalizująca się w autentycznej pizzy neapolitańskiej.', 1),
(4, 'Mad Mick', 'Burgery od 32 zł, dodatki od 10 zł.', 'ul. Młyńska 11, 40-098 Katowice', 'Codziennie: 12:00 – 23:00', 'Burgery premium przygotowywane z lokalnych składników, serwowane w nowoczesnym wnętrzu.', 1),
(5, 'Zaklęty Czardasz', 'Dania główne od 35 zł, zupy od 18 zł.', 'ul. Staromiejska 11, 40-013 Katowice', 'Codziennie: 12:00 – 22:00', 'Restauracja węgierska oferująca bogaty wybór tradycyjnych potraw węgierskich, takich jak gulasz i langosze.', 1),
(6, 'Kyoto Sushi', 'Zestawy sushi od 49 zł, pojedyncze rolki od 18 zł.', 'ul. Warszawska 23, 40-009 Katowice', 'Poniedziałek – Sobota: 12:00 – 22:00 Niedziela: 13:00 – 21:00', 'Sushi bar oferujący szeroki wybór sushi oraz zestawów w stylu japońskim.', 1),
(7, 'Patio-Park', 'Dania główne od 45 zł, desery od 20 zł.', 'ul. Kościuszki 101, 40-525 Katowice', 'Codziennie: 12:00 – 22:00', 'Restauracja w spokojnym otoczeniu z daniami kuchni międzynarodowej i polskiej.', 1),
(8, 'Zielony Mosteczek', 'Obiady od 30 zł, desery od 15 zł.', 'ul. Dąbrowskiego 23, 40-032 Katowice', 'Codziennie: 11:00 – 23:00', 'Kameralna restauracja oferująca domowe obiady i dania kuchni polskiej.', 1),
(9, 'Tatiana', 'Dania główne od 50 zł, zupy od 20 zł.', 'ul. Staromiejska 13, 40-013 Katowice', 'Poniedziałek – Sobota: 12:00 – 22:00\r\nNiedziela: 12:00 – 21:00', 'Restauracja oferująca dania polskie w nowoczesnym wydaniu, przygotowywane ze świeżych, lokalnych składników.', 1),
(10, 'Restauracja Monopol', 'Dania główne od 90 zł, desery od 30 zł.', 'ul. Dworcowa 5, 40-012 Katowice', 'Codziennie: 12:00 – 23:00', 'Restauracja hotelowa z eleganckim wystrojem i kuchnią fine dining.', 1),
(17, 'MOMO Restaurant & Wine', 'Dania główne od 40 zł, przystawki od 20 zł.', 'ul. Raciborska 2, 44-100 Gliwice', 'Poniedziałek – Czwartek: 12:00 – 21:00 Piątek – Sobota: 12:00 – 23:00 Niedziela: 12:00 – 20:00', 'Restauracja serwująca dania kuchni meksykańskiej w przyjemnej atmosferze z muzyką latynoską. Menu obejmuje burrito, tacos oraz opcje wegetariańskie.', 2),
(18, 'Roti', 'Dania główne od 40 zł, zupy od 18 zł.', 'ul. Krupnicza 16, 44-100 Gliwice', 'Poniedziałek – Niedziela: 12:00 – 22:00', 'Restauracja specjalizująca się w kuchni tajskiej, oferująca autentyczne dania takie jak Pad Thai z owocami morza.', 2),
(19, 'Zouza', 'Śniadania od 20 zł, dania lunchowe od 30 zł.', 'ul. Dunikowskiego 4/4, 44-100 Gliwice', 'Poniedziałek – Piątek: 08:00 – 16:00 Sobota – Niedziela: 09:00 – 17:00', 'Bistro znane z serwowania pysznych śniadań oraz lekkich dań lunchowych w przytulnej atmosferze.', 2),
(20, 'Restauracja Antonio', 'Dania główne od 45 zł, przystawki od 20 zł.', 'ul. Sosnowa 2, 42-677 Szałsza/Gliwice', 'Poniedziałek – Sobota: 13:00 – 22:00 (ostatnie zamówienie o 20:30) Niedziela: 12:00 – 20:00 (ostatnie zamówienie o 18:30)', 'Lokal oferujący dania kuchni włoskiej i greckiej, prowadzony przez właściciela o mieszanym pochodzeniu włosko-greckim.', 2),
(21, 'Dobre Sushi', 'Zestawy sushi od 50 zł, zupy od 15 zł.', 'ul. Bankowa 8, 44-100 Gliwice', 'Poniedziałek – Czwartek: 12:00 – 21:00 Piątek – Sobota: 12:00 – 22:00 Niedziela: 12:00 – 20:00', 'Restauracja oferująca świeże sushi, zupy oraz dania z makaronem i owocami morza w nowoczesnym wnętrzu.', 2),
(22, 'Poziom+', 'Dania główne od 50 zł, przystawki od 25 zł.', 'ul. Zwycięstwa 30, 44-100 Gliwice', 'Poniedziałek – Sobota: 12:00 – 22:00 Niedziela: 12:00 – 20:00', 'Restauracja zlokalizowana w zabytkowej kamienicy, oferująca dania kuchni międzynarodowej w eleganckim wnętrzu przypominającym winiarnię.', 2),
(23, 'Plado', 'Dania główne od 45 zł, desery od 18 zł.', 'ul. Górnych Wałów 38, 44-100 Gliwice', 'Poniedziałek – Sobota: 12:00 – 22:00\r\nNiedziela: 12:00 – 20:00', 'Restauracja serwująca dania kuchni międzynarodowej, z naciskiem na potrawy z grilla, takie jak steki czy burgery. W menu znajdują się również dania wegetariańskie.', 2),
(24, 'Restauracja Oberża', 'Dania główne od 30 zł, zupy od 12 zł.', 'ul. Rybnicka 159, 44-100 Gliwice', 'Poniedziałek – Sobota: 12:00 – 22:00\r\nNiedziela: 12:00 – 20:00', 'Tradycyjna restauracja serwująca polskie potrawy w przytulnym, drewnianym wnętrzu. Znana z takich dań jak schabowy XXL czy pierogi ruskie.', 2),
(25, 'Sushi & Ramen ToTu', 'Sushi od 45 zł za zestaw, ramen od 35 zł.', 'ul. Zygmunta Starego 9, 44-100 Gliwice', 'Codziennie: 12:00 – 21:00', 'Lokal oferujący połączenie klasycznego sushi z nowoczesnymi wariacjami oraz japońskim ramenem. Popularny wybór wśród miłośników kuchni azjatyckiej.', 2),
(26, 'Cafe & Collation', 'Śniadania od 25 zł, lunche od 35 zł.', 'ul. Plebańska 12, 44-100 Gliwice', 'Poniedziałek – Piątek: 08:00 – 18:00\r\nSobota – Niedziela: 09:00 – 16:00', 'Przytulne bistro oferujące śniadania, lunche oraz desery. Znane z różnorodnych opcji dla wegetarian i wegan.', 2),
(27, 'Restauracja Tygel', 'Dania główne od 40 zł, przystawki od 20 zł.', 'ul. Wolności 305, 41-800 Zabrze', 'Poniedziałek – Piątek: 12:00 – 22:00\r\nSobota – Niedziela: 12:00 – 23:00', 'Restauracja oferująca dania kuchni polskiej w nowoczesnym wydaniu. Goście chwalą tradycyjne potrawy przygotowane z dbałością o szczegóły.', 3),
(28, 'Restauracja Diament Zabrze', 'Dania główne od 50 zł, desery od 25 zł.', 'ul. 3 Maja 122a, 41-800 Zabrze', 'Codziennie: 12:00 – 22:00', 'Elegancka restauracja serwująca dania kuchni polskiej i europejskiej. Idealne miejsce na spotkania biznesowe oraz rodzinne uroczystości.', 3),
(29, 'Weranda Bistro&Bar', 'Dania główne od 35 zł, przystawki od 15 zł.', 'ul. Wolności 318, 41-800 Zabrze', 'Poniedziałek – Czwartek: 11:00 – 21:00\r\nPiątek – Sobota: 11:00 – 23:00\r\nNiedziela: 11:00 – 20:00', 'Przytulne bistro oferujące dania kuchni polskiej i europejskiej. Znane z miłej atmosfery i smacznych potraw.', 3),
(30, 'Naleśnikarnia Kamienica', 'Naleśniki od 15 zł, desery od 10 zł.', 'ul. Wolności 307, 41-800 Zabrze', 'Poniedziałek – Piątek: 10:00 – 20:00\r\nSobota – Niedziela: 11:00 – 21:00', 'Miejsce specjalizujące się w różnorodnych naleśnikach – zarówno na słodko, jak i wytrawnych. Idealne na szybki posiłek w miłej atmosferze.', 3),
(31, 'Sorrento Ristorante', 'Pizze od 30 zł, dania główne od 40 zł.', 'ul. Wolności 211, 41-800 Zabrze', 'Poniedziałek – Czwartek: 12:00 – 22:00\r\nPiątek – Sobota: 12:00 – 23:00\r\nNiedziela: 12:00 – 21:00', 'Restauracja włoska oferująca tradycyjne dania kuchni włoskiej, takie jak pizza, pasta oraz desery.', 3),
(92, 'Caffe Horst', 'Dania główne od 40 zł, desery od 15 zł', 'ul. Rynek 7, 41-902 Bytom', 'Codziennie: 10:00 – 22:00', 'Kawiarnia oferująca dania kuchni polskiej i europejskiej w przytulnej atmosferze. Goście chwalą świeże i smaczne potrawy oraz przyjazną obsługę.', 4),
(93, 'Pod Czapla', 'Dania główne od 45 zł, przystawki od 20 zł', 'ul. Rynek 14, 41-902 Bytom', 'Niedziela – Czwartek: 12:00 – 21:00, Piątek – Sobota: 12:00 – 22:00', 'Restauracja serwująca dania kuchni polskiej i europejskiej, zlokalizowana w pobliżu rynku. Znana z miłej atmosfery i smacznych potraw.', 4),
(94, 'Sapori Divini Pizza', 'Pizze od 30 zł, makarony od 35 zł', 'ul. Dworcowa 20, 41-902 Bytom', 'Poniedziałek – Czwartek: 12:00 – 22:00, Piątek – Sobota: 12:00 – 23:00, Niedziela: 12:00 – 21:00', 'Pizzeria oferująca tradycyjną włoską pizzę oraz inne dania kuchni włoskiej. Chwalona za autentyczny smak i wysoką jakość składników.', 4),
(95, 'Nihonto Restauracja Japońska', 'Zestawy sushi od 50 zł, dania główne od 40 zł', 'ul. Krakowska 9, 41-902 Bytom', 'Wtorek – Niedziela: 12:00 – 22:00, Poniedziałek: nieczynne', 'Restauracja specjalizująca się w kuchni japońskiej, oferująca sushi oraz inne tradycyjne dania. Doceniana za świeżość składników i autentyczność smaków.', 4),
(96, 'Restauracja Rymera 6', 'Dania główne od 50 zł, przystawki od 25 zł', 'ul. Rymera 6, 41-902 Bytom', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Restauracja oferująca dania kuchni polskiej i międzynarodowej w eleganckim wnętrzu. Idealne miejsce na spotkania biznesowe i rodzinne uroczystości.', 4),
(97, 'Butchery & Grill', 'Burgery od 40 zł, steki od 80 zł', 'ul. Piłsudskiego 24, 41-902 Bytom', 'Poniedziałek – Czwartek: 12:00 – 22:00, Piątek – Sobota: 12:00 – 23:00, Niedziela: 12:00 – 21:00', 'Restauracja specjalizująca się w daniach mięsnych, takich jak steki i burgery. Znana z wysokiej jakości mięsa i profesjonalnego przygotowania potraw.', 4),
(98, 'Restauracja Villa Vienna', 'Dania główne od 55 zł, desery od 20 zł', 'ul. Wrocławska 62, 41-902 Bytom', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Restauracja oferująca dania kuchni polskiej i austriackiej w eleganckim, secesyjnym wnętrzu. Idealne miejsce na rodzinne spotkania i przyjęcia okolicznościowe.', 4),
(99, 'Karczma u Młynarza', 'Dania główne od 40 zł, zupy od 15 zł', 'ul. Krakowska 8, 41-902 Bytom', 'Poniedziałek – Czwartek: 12:00 – 21:00, Piątek – Sobota: 12:00 – 23:00, Niedziela: 12:00 – 20:00', 'Restauracja z tradycjami, serwująca dania kuchni staropolskiej i regionalnej. Goście chwalą klimat lokalu oraz pyszne, domowe potrawy.', 4),
(100, 'Pasta i Basta', 'Pizze od 30 zł, makarony od 35 zł', 'ul. Dworcowa 12, 41-902 Bytom', 'Poniedziałek – Czwartek: 12:00 – 22:00, Piątek – Sobota: 12:00 – 23:00, Niedziela: 12:00 – 21:00', 'Pizzeria i restauracja specjalizująca się w tradycyjnej włoskiej pizzy oraz makaronach. Wysoka jakość składników i miła obsługa.', 4),
(101, 'Restauracja Silesia', 'Dania główne od 40 zł, zupy od 15 zł', 'ul. Piłsudskiego 32, 41-700 Ruda Śląska', 'Poniedziałek – Czwartek: 12:00 – 22:00, Piątek – Sobota: 12:00 – 23:00, Niedziela: 12:00 – 20:00', 'Restauracja serwująca dania kuchni polskiej i śląskiej. Znana z dużych porcji, tradycyjnego smaku i przyjaznej atmosfery.', 5),
(102, 'La Dolce Vita', 'Pizze od 30 zł, makarony od 35 zł', 'ul. Gwarecka 21, 41-703 Ruda Śląska', 'Poniedziałek – Czwartek: 12:00 – 22:00, Piątek – Sobota: 12:00 – 23:00, Niedziela: 12:00 – 21:00', 'Restauracja w stylu włoskim, oferująca pizze, makarony i tradycyjne włoskie dania. Wysoka jakość składników i profesjonalna obsługa.', 5),
(103, 'Pasta i Basta', 'Pizze od 30 zł, makarony od 35 zł', 'ul. 1 Maja 30, 41-700 Ruda Śląska', 'Poniedziałek – Czwartek: 12:00 – 22:00, Piątek – Sobota: 12:00 – 23:00, Niedziela: 12:00 – 21:00', 'Pizzeria i restauracja specjalizująca się w tradycyjnej włoskiej pizzy oraz makaronach. Znana z autentycznego smaku i świeżych składników.', 5),
(104, 'Restauracja Stary Młyn', 'Dania główne od 40 zł, przystawki od 18 zł', 'ul. Łaskotelna 14, 41-703 Ruda Śląska', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota: 12:00 – 23:00, Niedziela: 12:00 – 20:00', 'Miejsce z tradycyjną kuchnią polską i śląską. Idealne na rodzinne spotkania i przyjęcia okolicznościowe.', 5),
(105, 'Trattoria da Vinci', 'Pizze od 30 zł, makarony od 40 zł', 'ul. Zwycięstwa 20, 41-702 Ruda Śląska', 'Poniedziałek – Czwartek: 12:00 – 22:00, Piątek – Sobota: 12:00 – 23:00, Niedziela: 12:00 – 21:00', 'Restauracja włoska, oferująca szeroki wybór pizzy, makaronów i deserów. Znana z autentycznych dań włoskich.', 5),
(106, 'Butchery & Grill', 'Burgery od 35 zł, steki od 70 zł', 'ul. Śląska 40, 41-700 Ruda Śląska', 'Poniedziałek – Czwartek: 12:00 – 22:00, Piątek – Sobota: 12:00 – 23:00, Niedziela: 12:00 – 20:00', 'Restauracja specjalizująca się w daniach mięsnych, takich jak steki i burgery. Wysoka jakość mięsa i profesjonalne przygotowanie potraw.', 5),
(107, 'Restauracja Kamienica', 'Dania główne od 50 zł, zupy od 20 zł', 'ul. Wyzwolenia 10, 41-703 Ruda Śląska', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota: 12:00 – 23:00, Niedziela: 12:00 – 20:00', 'Restauracja w stylu pałacowym, oferująca dania kuchni polskiej i europejskiej. Doskonała na spotkania biznesowe i rodzinne uroczystości.', 5),
(108, 'Karczma Górczanka', 'Dania główne od 40 zł, zupy od 15 zł', 'ul. Katowicka 10, 41-700 Ruda Śląska', 'Poniedziałek – Czwartek: 12:00 – 22:00, Piątek – Sobota: 12:00 – 23:00, Niedziela: 12:00 – 20:00', 'Restauracja serwująca tradycyjną kuchnię polską i śląską w rustykalnym stylu. Chwalona za atmosferę i smaczne jedzenie.', 5),
(109, 'Bistro na Wysokim', 'Dania główne od 35 zł, zupy od 18 zł', 'ul. Górnicza 5, 41-703 Ruda Śląska', 'Poniedziałek – Piątek: 11:00 – 21:00, Sobota – Niedziela: 12:00 – 20:00', 'Lokal oferujący dania kuchni polskiej oraz europejskiej w nowoczesnym wydaniu. Popularny na szybki lunch i spotkania biznesowe.', 5),
(110, 'Restauracja Śródziemnomorska Mare e Monti', 'Dania główne od 40 zł, ryby od 60 zł', 'ul. Aleja Niepodległości 17, 42-200 Częstochowa', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota: 12:00 – 23:00, Niedziela: 12:00 – 20:00', 'Restauracja oferująca dania kuchni śródziemnomorskiej, w tym ryby atlantyckie i owoce morza. Wysoka jakość składników i elegancka atmosfera.', 6),
(111, 'Restauracja Kredens', 'Dania główne od 35 zł, zupy od 18 zł', 'ul. Czecha 10, 42-208 Częstochowa', 'Poniedziałek – Czwartek: 12:00 – 22:00, Piątek – Sobota: 12:00 – 23:00, Niedziela: 12:00 – 20:00', 'Restauracja oferująca tradycyjną kuchnię polską i europejską, z wyjątkową atmosferą. Idealne miejsce na spotkania rodzinne i okolicznościowe.', 6),
(112, 'Miedziany Piec', 'Pizze od 30 zł, makarony od 35 zł', 'ul. Jagodowa 8, 42-220 Częstochowa', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota: 12:00 – 23:00, Niedziela: 12:00 – 20:00', 'Restauracja specjalizująca się w pizzy przygotowanej w tradycyjnym piecu opalanym drewnem. Wysoka jakość składników i przyjazna obsługa.', 6),
(113, 'Al Hindi Kebab', 'Kebab od 20 zł, dania grillowane od 30 zł', 'ul. Piotrkowska 23, 42-200 Częstochowa', 'Poniedziałek – Czwartek: 12:00 – 22:00, Piątek – Sobota: 12:00 – 23:00, Niedziela: 12:00 – 20:00', 'Turecka restauracja serwująca pyszne kebaby i dania z grilla. Szybka obsługa i świeże składniki.', 6),
(114, 'Toscana Ristorante Italiano', 'Pizze od 30 zł, makarony od 35 zł', 'ul. Wolności 25, 42-208 Częstochowa', 'Poniedziałek – Czwartek: 12:00 – 22:00, Piątek – Sobota: 12:00 – 23:00, Niedziela: 12:00 – 20:00', 'Włoska restauracja oferująca szeroki wybór pizzy, makaronów oraz innych dań śródziemnomorskich w stylu toskańskim.', 6),
(115, 'Grand Slam', 'Steki od 60 zł, burgery od 40 zł', 'ul. Parkowa 1, 42-200 Częstochowa', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota: 12:00 – 23:00, Niedziela: 12:00 – 20:00', 'Restauracja w parku, oferująca dania kuchni polskiej i europejskiej w nowoczesnym wydaniu. Znana z pysznych steków i burgerów.', 6),
(116, 'Zajazd Jurajski', 'Dania główne od 40 zł, zupy od 15 zł', 'ul. Jurajska 12, 42-200 Częstochowa', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota: 12:00 – 23:00, Niedziela: 12:00 – 20:00', 'Tradycyjna restauracja oferująca polską kuchnię w rustykalnym stylu. Idealne miejsce na spotkania rodzinne i okolicznościowe.', 6),
(117, 'Twierdza', 'Pizze od 30 zł, dania główne od 40 zł', 'ul. Sienkiewicza 20, 42-200 Częstochowa', 'Poniedziałek – Czwartek: 12:00 – 22:00, Piątek – Sobota: 12:00 – 23:00, Niedziela: 12:00 – 20:00', 'Miejsce, które łączy restaurację, kawiarnię i pizzerię, oferując szeroki wybór dań i desery. Idealne miejsce na szybki lunch i spotkania z przyjaciółmi.', 6),
(118, 'Restauracja Kamienica', 'Dania główne od 50 zł, zupy od 18 zł', 'ul. Aleja Jana Pawła II 5, 42-200 Częstochowa', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota: 12:00 – 23:00, Niedziela: 12:00 – 20:00', 'Elegancka restauracja z daniami kuchni polskiej i europejskiej. Doskonała na spotkania biznesowe i przyjęcia okolicznościowe.', 6),
(119, 'Restauracja Kassandra', 'Dania główne od 40 zł, zupy od 15 zł', 'ul. Paruszowiec-Piaski, 44-200 Rybnik', 'Codziennie: 11:00 – 22:00 lub do ostatniego klienta', 'Góralska chata usytuowana przy trasie wylotowej Rybnik – Żory, idealna do organizowania spotkań towarzyskich i służbowych oraz przyjęć okolicznościowych.', 7),
(120, 'Restauracja Basztowa', 'Dania główne od 45 zł, zupy od 20 zł', 'ul. Nadbrzeżna 19, 44-203 Rybnik', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Klimatyzowana sala restauracyjna z barkiem, oferująca możliwość zamówienia posiłków z bogatego menu oraz organizację przyjęć okolicznościowych.', 7),
(121, 'Restauracja Royal', 'Dania główne od 60 zł, zupy od 25 zł', 'ul. Rynek 3, 44-200 Rybnik', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Wykwintne dania kuchni polskiej i międzynarodowej, eleganckie wnętrze oraz doskonała obsługa. Idealne miejsce na spotkania biznesowe i specjalne okazje.', 7),
(122, 'Restauracja Wierzbowe Zacisze', 'Dania główne od 40 zł, zupy od 18 zł', 'ul. Raciborska 86, 44-200 Rybnik', 'Środa – Niedziela: 12:00 – 20:00', 'Restauracja oferująca dania kuchni polskiej w nowoczesnym wydaniu, z wykorzystaniem świeżych i lokalnych składników.', 7),
(123, 'Karczma Sękata', 'Pizze od 30 zł, dania główne od 40 zł', 'ul. Św. Jana 10, 44-200 Rybnik', 'Codziennie: 13:00 – 20:00', 'Tradycyjna karczma oferująca dania kuchni polskiej, w tym pyszne pizze i potrawy z grilla.', 7),
(124, 'Piwiarnia Miejska', 'Pizze od 30 zł, dania główne od 40 zł', 'ul. Rynek 1, 44-200 Rybnik', 'Poniedziałek – Czwartek: 11:00 – 23:00, Piątek – Sobota: 11:00 – 02:00/03:00, Niedziela: 11:00 – 23:00', 'Miejsce łączące restaurację, kawiarnię i pizzerię, oferujące szeroki wybór dań i deserów. Idealne miejsce na szybki lunch i spotkania z przyjaciółmi.', 7),
(125, 'Restauracja InoWino', 'Pizze od 30 zł, makarony od 40 zł', 'ul. Rynek 10, 44-200 Rybnik', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Restauracja oferująca dania kuchni włoskiej i śródziemnomorskiej, w tym szeroki wybór win.', 7),
(126, 'Restauracja Art-Cafe', 'Dania główne od 40 zł, zupy od 20 zł', 'ul. Św. Jana 5, 44-200 Rybnik', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Miejsce łączące funkcje restauracji i kawiarni, oferujące dania kuchni polskiej i europejskiej oraz szeroki wybór kaw i deserów.', 7),
(127, 'Restauracja Patio Sushi', 'Sushi od 30 zł, dania główne od 40 zł', 'ul. Rynek 5, 44-200 Rybnik', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Restauracja specjalizująca się w sushi oraz innych daniach kuchni japońskiej.', 7),
(128, 'Restauracja Stary Zdrój', 'Dania główne od 40 zł, zupy od 15 zł', 'ul. 1 Maja 1, 44-330 Jastrzębie-Zdrój', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Elegancka restauracja oferująca dania kuchni polskiej w nowoczesnym wydaniu. Idealne miejsce na spotkania biznesowe i rodzinne.', 8),
(129, 'Restauracja Kameralna', 'Dania główne od 50 zł, zupy od 20 zł', 'ul. Mikołaja Witczaka 5, 44-330 Jastrzębie-Zdrój', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Miejsce łączące nowoczesne podejście do kuchni z tradycyjnymi smakami. Oferuje unikatowe dania inspirowane podróżami.', 8),
(130, 'Dom Retro Pivnica', 'Dania główne od 40 zł, zupy od 15 zł', 'ul. Karola Miarki 15, 44-335 Jastrzębie-Zdrój', 'Niedziela – Środa: 12:00 – 22:00, Czwartek: 10:00 – 22:00, Piątek: 10:00 – 24:00, Sobota: 12:00 – 24:00', 'Restauracja serwująca dania kuchni polskiej i włoskiej w klimatycznym otoczeniu.', 8),
(131, 'Restauracja Dąbrówka', 'Dania główne od 45 zł, zupy od 20 zł', 'ul. 1 Maja 1, 44-330 Jastrzębie-Zdrój', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Klimatyczne wnętrze nawiązujące do uzdrowiskowej przeszłości miejsca.', 8),
(132, 'Restauracja Smak Regionu', 'Dania główne od 40 zł, zupy od 15 zł', 'ul. 1 Maja 1, 44-330 Jastrzębie-Zdrój', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Miejsce oferujące dania kuchni regionalnej w nowoczesnym wydaniu.', 8),
(133, 'Restauracja Astoria', 'Dania główne od 50 zł, zupy od 20 zł', 'ul. 1 Maja 1, 44-330 Jastrzębie-Zdrój', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Elegancka restauracja serwująca dania kuchni międzynarodowej.', 8),
(134, 'Restauracja Trele Morele', 'Dania główne od 40 zł, zupy od 15 zł', 'ul. 1 Maja 1, 44-330 Jastrzębie-Zdrój', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Miejsce oferujące dania kuchni polskiej i europejskiej w nowoczesnym wydaniu.', 8),
(135, 'Karczma Pod Sandaczem', 'Dania główne od 30 zł, zupy od 10 zł', 'ul. 1 Maja 1, 44-330 Jastrzębie-Zdrój', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Tradycyjna karczma oferująca dania kuchni polskiej.', 8),
(136, 'Restauracja Urocza', 'Dania główne od 35 zł, zupy od 15 zł', 'ul. 3 Maja 9, 44-330 Jastrzębie-Zdrój', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Restauracja z tradycyjnymi daniami kuchni polskiej i międzynarodowej w przytulnym wnętrzu, idealna na rodzinne obiadki i spotkania towarzyskie.', 8),
(137, 'Restauracja Wiatrak', 'Dania główne od 40 zł, zupy od 20 zł', 'ul. Dolna 20, 44-330 Jastrzębie-Zdrój', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Tradycyjna polska restauracja z menu pełnym klasycznych dań i dań regionalnych, a także sezonowych przysmaków.', 8),
(138, 'Celna 10', 'Dania główne od 40 zł, zupy od 15 zł', 'ul. Celna 10, 43-300 Bielsko-Biała', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Restauracja serwująca dania kuchni polskiej w nowoczesnym wydaniu, z naciskiem na świeże składniki i lokalne produkty.', 9),
(139, 'Restauracja BOSCO', 'Dania główne od 50 zł, zupy od 20 zł', 'ul. Gen. Stanisława Maczka 41, 43-300 Bielsko-Biała', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Miejsce łączące włoską tradycję z nowoczesnym podejściem do kuchni, oferujące szeroki wybór dań i win.', 9),
(140, 'Restauracja GALLO NERO', 'Dania główne od 45 zł, zupy od 18 zł', 'ul. 3 Maja 5, 43-300 Bielsko-Biała', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Lokal specjalizujący się w kuchni włoskiej, oferujący autentyczne smaki i atmosferę.', 9),
(141, 'Restauracja Wirtuozeria', 'Dania główne od 60 zł, zupy od 25 zł', 'ul. 11 Listopada 1, 43-300 Bielsko-Biała', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Lokal oferujący dania kuchni międzynarodowej w eleganckim otoczeniu, idealne na specjalne okazje.', 9),
(142, 'Restauracja Szpilka', 'Dania główne od 50 zł, zupy od 20 zł', 'ul. 1 Maja 1, 43-300 Bielsko-Biała', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Miejsce łączące nowoczesne podejście do kuchni z tradycyjnymi smakami, oferujące unikatowe dania i desery.', 9),
(143, 'Trattoria Da Tadeusz', 'Dania główne od 40 zł, zupy od 15 zł', 'ul. Cechowa 12/3, 43-300 Bielsko-Biała', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Autentyczna włoska trattoria serwująca klasyczne dania kuchni włoskiej w przytulnym otoczeniu.', 9),
(144, 'Gohan Sushi', 'Dania główne od 50 zł, zupy od 20 zł', 'ul. Wiktora Przybyły 5, 43-300 Bielsko-Biała', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Pierwsza restauracja oferująca dania kuchni japońskiej w Bielsku-Białej, znana z wysokiej jakości sushi.', 9),
(145, 'Kuchnia Marche', 'Dania główne od 30 zł, zupy od 10 zł', 'ul. Warszawska 5, 43-300 Bielsko-Biała', 'Poniedziałek – Piątek: 10:00 – 22:00, Sobota – Niedziela: 10:00 – 23:00', 'Restauracja typu self-service, oferująca szeroki wybór dań kuchni polskiej i międzynarodowej.', 9),
(146, 'Piwnica Pod Aniołem', 'Dania główne od 40 zł, zupy od 15 zł', 'ul. Piastowska 2, 43-300 Bielsko-Biała', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Tradycyjna restauracja serwująca dania kuchni polskiej w rustykalnym, przytulnym wnętrzu.', 9),
(147, 'Sphinx Bielsko-Biała', 'Dania główne od 35 zł, zupy od 12 zł', 'ul. Bohaterów Warszawy 2, 43-300 Bielsko-Biała', 'Poniedziałek – Piątek: 11:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Popularna sieć restauracji serwująca dania kuchni śródziemnomorskiej, w tym kebaby, pizze i sałatki.', 9),
(148, 'Ludzie Mówią Różne Rzeczy', 'Dania główne od 30 zł, zupy od 15 zł', 'ul. Wolności 34, 41-503 Chorzów', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Restauracja oferująca dania kuchni polskiej i międzynarodowej w nowoczesnym wydaniu. Idealne miejsce na spotkania towarzyskie i rodzinne.', 10),
(149, 'Pod Drewnianym Bocianem', 'Dania główne od 28 zł, zupy od 12 zł', 'ul. Dworcowa 10, 41-503 Chorzów', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Tradycyjna restauracja z klasycznymi daniami kuchni polskiej w przytulnym otoczeniu.', 10),
(150, 'Kartel', 'Dania główne od 35 zł, zupy od 18 zł', 'ul. Wolności 3, 41-503 Chorzów', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Restauracja serwująca dania kuchni meksykańskiej, znana z autentycznych tacos, burritos i innych tradycyjnych potraw.', 10),
(151, 'Pierogarnia Pod Beczką', 'Dania główne od 20 zł, pierogi od 15 zł', 'Rynek 7, 41-500 Chorzów', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Tradycyjna pierogarnia oferująca szeroki wybór pierogów w różnych smakach, idealna na rodzinne obiady.', 10),
(152, 'Kraken', 'Dania główne od 25 zł, napoje od 10 zł', 'ul. Rynek 13/u3, 41-500 Chorzów', 'Poniedziałek – Piątek: 12:00 – 23:00, Sobota – Niedziela: 12:00 – 24:00', 'Pub z szeroką ofertą alkoholi, przekąsek i dań, idealne miejsce na spotkania z przyjaciółmi.', 10),
(153, 'Restauracja Cesarska', 'Dania główne od 45 zł, zupy od 18 zł', 'ul. Paderewskiego 35, 41-500 Chorzów', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Restauracja w Hotelu Diament Arsenal Palace, oferująca dania kuchni międzynarodowej w eleganckiej atmosferze.', 10),
(154, 'Łania', 'Dania główne od 40 zł, zupy od 20 zł', 'ul. Aleja Łani 5, 41-500 Chorzów', 'Poniedziałek – Piątek: 12:00 – 22:00, Sobota – Niedziela: 12:00 – 23:00', 'Restauracja specjalizująca się w kuchni polskiej, z wyśmienitymi daniami mięsnymi i rybnymi.', 10);

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
-- Indeksy dla tabeli `restauracje`
--
ALTER TABLE `restauracje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atrakcje`
--
ALTER TABLE `atrakcje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `miasta`
--
ALTER TABLE `miasta`
  MODIFY `id_miasta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `restauracje`
--
ALTER TABLE `restauracje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
