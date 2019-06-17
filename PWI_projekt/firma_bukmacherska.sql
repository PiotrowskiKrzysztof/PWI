-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Cze 2019, 00:48
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `firma bukmacherska`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `haslo` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `admins`
--

INSERT INTO `admins` (`id`, `email`, `haslo`) VALUES
(1, 'admin@admin.com', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `druzyna`
--

CREATE TABLE `druzyna` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `aktynosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `druzyna`
--

INSERT INTO `druzyna` (`id`, `nazwa`, `aktynosc`) VALUES
(1, 'Jagiellonia Białystok', 1),
(4, 'Legia Warszawa', 1),
(5, 'Miedź Legnica', 1),
(6, 'Wisła Płock', 1),
(7, 'Hoffenheim', 1),
(8, 'Bayern Monachium', 1),
(9, 'RB Lipsk', 1),
(10, 'Borussia Dortmund', 1),
(11, 'Sevilla', 1),
(12, 'Atletico Madryt', 1),
(13, 'Getafte', 1),
(14, 'FC Barcelona', 1),
(15, 'Arsenal', 1),
(16, 'Chelsea', 1),
(17, 'Wolves', 1),
(18, 'Leicester', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dyscyplina`
--

CREATE TABLE `dyscyplina` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `aktywnosc` int(11) NOT NULL,
  `ikona` text COLLATE utf8_polish_ci NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `dyscyplina`
--

INSERT INTO `dyscyplina` (`id`, `nazwa`, `aktywnosc`, `ikona`, `opis`) VALUES
(1, 'Piłka Nożna', 1, 'img/pilka_nozna_ikona.png', 'Piłka nożna (ang. association football, soccer) – gra zespołowa, najpopularniejsza dyscyplina sportowa z około 4 miliardami fanów na całym świecie.'),
(2, 'Tenis', 1, 'img/tenis_ikona.png', 'Tenis, tenis ziemny – dyscyplina sportowa rozgrywana na korcie tenisowym, polegająca na przebijaniu rakietą tenisową piłki ponad lub obok siatki na pole przeciwnika.'),
(3, 'Koszykówka', 1, 'img/koszykowka_ikona.png', 'Koszykówka (lub piłka koszykowa) – dyscyplina sportu drużynowego (sport olimpijski), w której dwie pięcioosobowe drużyny grają przeciwko sobie.'),
(4, 'Siatkówka', 1, 'img/siatkowka_ikona.png', 'Piłka siatkowa, siatkówka – sport drużynowy, w którym biorą udział dwa zespoły po 6 zawodników w każdym.'),
(5, 'Hokej', 1, 'img/hokej_ikona.png', 'Hokej na lodzie (popularna forma skrócona: hokej) – sportowa gra zespołowa rozgrywana na lodowisku. Hokej na lodzie jest najbardziej popularny w krajach północnej półkuli.'),
(6, 'E-sport', 1, 'img/eposrt_ikona.png', 'Sport elektroniczny (e-sport, ang. eSports, electronic sports) – forma rywalizacji, w której przedmiotem działań zawodników są gry komputerowe.'),
(7, 'Baseball', 1, 'img/baseball_ikona.png', 'Baseball – sportowa gra zespołowa szczególnie popularna w Ameryce Północnej, Południowej i we wschodniej Azji.'),
(8, 'Piłka Ręczna', 1, 'img/pilka_reczna_ikona.png', 'Piłka ręczna (potocznie pol. szczypiorniak, ang. handball) – zespołowa dyscyplina sportu (gra drużynowa).');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `liga`
--

CREATE TABLE `liga` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `aktywnosc` int(11) NOT NULL,
  `id_regionu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `liga`
--

INSERT INTO `liga` (`id`, `nazwa`, `aktywnosc`, `id_regionu`) VALUES
(4, 'Ekstraklasa', 1, 1),
(5, '1.liga Polska', 1, 1),
(6, 'Bundesliga', 1, 2),
(7, 'Ligue 1', 1, 4),
(8, 'Serie A', 1, 5),
(9, 'La Liga', 1, 6),
(10, 'Premier League', 1, 3),
(11, 'Liga Mistrzów', 1, 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `oferta`
--

CREATE TABLE `oferta` (
  `id_ligii` int(11) NOT NULL,
  `id_zdarzenia` int(11) NOT NULL,
  `id_opcji` int(11) NOT NULL,
  `aktywnosc` int(11) NOT NULL,
  `kurs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `oferta`
--

INSERT INTO `oferta` (`id_ligii`, `id_zdarzenia`, `id_opcji`, `aktywnosc`, `kurs`) VALUES
(4, 1, 1, 1, 2),
(4, 1, 2, 1, 1.6),
(4, 1, 3, 1, 3.2),
(4, 1, 4, 1, 1.8),
(4, 1, 5, 1, 1.8),
(4, 1, 6, 1, 1.35),
(4, 1, 7, 1, 1.15),
(4, 1, 8, 1, 1.2),
(4, 1, 9, 1, 1.8),
(4, 1, 10, 1, 1.8),
(6, 3, 1, 1, 2.5),
(6, 3, 2, 1, 3),
(6, 3, 3, 1, 1.42),
(6, 3, 4, 1, 1.4),
(6, 3, 5, 1, 1.9),
(4, 2, 1, 1, 2.1),
(4, 2, 2, 1, 2.95),
(4, 2, 3, 1, 2.05),
(4, 2, 4, 1, 1.65),
(4, 2, 5, 1, 1.99);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `opcja`
--

CREATE TABLE `opcja` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `oznaczenie` text COLLATE utf8_polish_ci NOT NULL,
  `aktywnosc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `opcja`
--

INSERT INTO `opcja` (`id`, `nazwa`, `oznaczenie`, `aktywnosc`) VALUES
(1, 'Wygra mecz', '1', 1),
(2, 'Wygra mecz', 'X', 1),
(3, 'Wygra mecz', '2', 1),
(4, 'Suma goli', '1,5+', 1),
(5, 'Suma goli', '1,5-', 1),
(6, 'Podwójna szansa', '1X', 1),
(7, 'Podwójna szansa', 'X2', 1),
(8, 'Podwójna szansa', '12', 1),
(9, 'Obie drużyny strzelą', 'Tak', 1),
(10, 'Obie drużyny strzelą', 'Nie', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `aktywnosc` int(11) NOT NULL,
  `id_dyscypliny` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `region`
--

INSERT INTO `region` (`id`, `nazwa`, `aktywnosc`, `id_dyscypliny`) VALUES
(1, 'Polska', 1, 1),
(2, 'Niemcy', 1, 1),
(3, 'Anglia', 1, 1),
(4, 'Francja', 1, 1),
(5, 'Włochy', 1, 1),
(6, 'Hiszpania', 1, 1),
(7, 'Europa', 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` text COLLATE utf8_polish_ci NOT NULL,
  `pass` text COLLATE utf8_polish_ci NOT NULL,
  `saldo` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `email`, `pass`, `saldo`) VALUES
(1, 'user@user.com', '$2y$10$CnqCGerm5y03iXAHzNScHulXz7BQtdweAXvdfIYVvX40JKD3cmD5C', 100),
(26, 'krzysiek.p97@o2.pl', '$2y$10$Lh9kigSuC8OkJPcmd0ua0uB3hL.2xI6yEuyiCPW/iTjzEZujj7Et2', 0),
(27, 'admin@admin.com', '$2y$10$oJWLtmh2LRzcNNhS5uIF.OltVRitgDbN2qIyr/bdn.1al8CFOGiVe', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zdarzenie`
--

CREATE TABLE `zdarzenie` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `id_gospodarz` int(11) NOT NULL,
  `id_gosc` int(11) NOT NULL,
  `godzina_start` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `zdarzenie`
--

INSERT INTO `zdarzenie` (`id`, `data`, `id_gospodarz`, `id_gosc`, `godzina_start`) VALUES
(1, '2019-04-08', 1, 4, '20:00:00'),
(2, '2019-04-08', 5, 6, '20:00:00'),
(3, '2019-05-08', 7, 8, '18:00:00'),
(4, '2019-06-08', 9, 10, '18:15:00'),
(5, '2019-12-08', 11, 12, '16:30:00'),
(6, '2019-12-08', 13, 14, '18:15:00'),
(7, '2019-06-08', 15, 16, '20:00:00'),
(8, '2019-12-08', 17, 18, '18:00:00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `druzyna`
--
ALTER TABLE `druzyna`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `dyscyplina`
--
ALTER TABLE `dyscyplina`
  ADD PRIMARY KEY (`id`,`nazwa`(50));

--
-- Indeksy dla tabeli `liga`
--
ALTER TABLE `liga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region-liga` (`id_regionu`);

--
-- Indeksy dla tabeli `oferta`
--
ALTER TABLE `oferta`
  ADD KEY `liga-oferta` (`id_ligii`),
  ADD KEY `zdarzenie-oferta` (`id_zdarzenia`),
  ADD KEY `opcja-oferta` (`id_opcji`);

--
-- Indeksy dla tabeli `opcja`
--
ALTER TABLE `opcja`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dyscyplina-region` (`id_dyscypliny`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zdarzenie`
--
ALTER TABLE `zdarzenie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_gospodarz` (`id_gospodarz`),
  ADD UNIQUE KEY `id_gosc` (`id_gosc`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `druzyna`
--
ALTER TABLE `druzyna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT dla tabeli `dyscyplina`
--
ALTER TABLE `dyscyplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `liga`
--
ALTER TABLE `liga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `opcja`
--
ALTER TABLE `opcja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT dla tabeli `zdarzenie`
--
ALTER TABLE `zdarzenie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `liga`
--
ALTER TABLE `liga`
  ADD CONSTRAINT `region-liga` FOREIGN KEY (`id_regionu`) REFERENCES `region` (`id`);

--
-- Ograniczenia dla tabeli `oferta`
--
ALTER TABLE `oferta`
  ADD CONSTRAINT `liga-oferta` FOREIGN KEY (`id_ligii`) REFERENCES `liga` (`id`),
  ADD CONSTRAINT `opcja-oferta` FOREIGN KEY (`id_opcji`) REFERENCES `opcja` (`id`),
  ADD CONSTRAINT `zdarzenie-oferta` FOREIGN KEY (`id_zdarzenia`) REFERENCES `zdarzenie` (`id`);

--
-- Ograniczenia dla tabeli `region`
--
ALTER TABLE `region`
  ADD CONSTRAINT `dyscyplina-region` FOREIGN KEY (`id_dyscypliny`) REFERENCES `dyscyplina` (`id`);

--
-- Ograniczenia dla tabeli `zdarzenie`
--
ALTER TABLE `zdarzenie`
  ADD CONSTRAINT `zdarzenie-druzyna-gosc` FOREIGN KEY (`id_gosc`) REFERENCES `druzyna` (`id`),
  ADD CONSTRAINT `zdarzenie-druzyna-gospodarzy` FOREIGN KEY (`id_gospodarz`) REFERENCES `druzyna` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
