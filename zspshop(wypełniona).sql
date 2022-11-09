-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Lis 2022, 11:43
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `zspshop`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `s. name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `is_admin` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `name`, `s. name`, `username`, `email`, `password`, `is_admin`) VALUES
(1, 'Kamil', 'Pilarczyk', 'Pilar', 'kamilopilaro@gmail.com', 'LosPollosPilaros2115', 'yes'),
(2, 'Romek', 'Zflacho', 'krulwud', 'romano1@gmail.com', 'Romek321', 'no'),
(3, 'Julia', 'Żaba', 'froGGER', 'Jzaba@gmail.com', 'zabyna102', 'yes'),
(4, 'Sebastian ', 'Bozo', 'BMWking', 'Sebabmwe46@gmail.com', 'kochammojeBMW', 'no'),
(5, 'Ally', 'Hoops', 'Spiderdestructor112', 'hoops@gmail.com', 'Groundedtopgame', 'no');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users offers`
--

CREATE TABLE `users offers` (
  `id` int(11) NOT NULL,
  `offers` varchar(45) DEFAULT NULL,
  `prices` varchar(45) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users offers`
--

INSERT INTO `users offers` (`id`, `offers`, `prices`, `users_id`) VALUES
(1, 'szczoteczka do zębów', '15zł', 1),
(2, 'tona węgla', '3200zł ', 1),
(3, 'skrzynka piwa harnaś', '50zł', 2),
(4, 'bluza z nadrukiem PIWO', '100zł', 2),
(5, 'czapka żaba', '35zł', 3),
(6, 'zielony sweter', '45zł', 3),
(7, 'katalizator ', '350zł', 4),
(8, 'BMW E36 gruz do driftu', '3500zł', 4),
(9, '22 części mrówkolwa', '44zł', 5),
(10, 'coaltana', '50zł', 5);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users purchases`
--

CREATE TABLE `users purchases` (
  `id` int(11) NOT NULL,
  `purchases` varchar(45) DEFAULT NULL,
  `prices` varchar(45) DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `users purchases`
--

INSERT INTO `users purchases` (`id`, `purchases`, `prices`, `users_id`) VALUES
(1, 'nowa szczoteczka do zębów', '20zł', 1),
(2, 'pompa ciepła', '48000zł', 1),
(3, 'stock 0,7l', '47zł', 2),
(4, 'czapka zimowa', '30zł', 2),
(5, 'długopis żaba', '10zł', 3),
(6, 'makaron ', '5zł', 3),
(7, 'znaczek M pakiet BMW', '70zł', 4),
(8, 'Piwo Żubr ', '3zł', 4),
(9, '4 części pogońca', '2zł', 5),
(10, 'kusza lv3', '40zł', 5);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users offers`
--
ALTER TABLE `users offers`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD KEY `fk_users offers_users1_idx` (`users_id`);

--
-- Indeksy dla tabeli `users purchases`
--
ALTER TABLE `users purchases`
  ADD PRIMARY KEY (`id`,`users_id`),
  ADD KEY `fk_users purchases_users1_idx` (`users_id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `users offers`
--
ALTER TABLE `users offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `users purchases`
--
ALTER TABLE `users purchases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `users offers`
--
ALTER TABLE `users offers`
  ADD CONSTRAINT `fk_users offers_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ograniczenia dla tabeli `users purchases`
--
ALTER TABLE `users purchases`
  ADD CONSTRAINT `fk_users purchases_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
