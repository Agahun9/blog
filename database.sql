-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 25 Gru 2018, 10:54
-- Wersja serwera: 10.1.37-MariaDB-2.cba
-- Wersja PHP: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `subway_c0_pl`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `artykuly`
--

CREATE TABLE `artykuly` (
  `ID` int(255) NOT NULL,
  `artykul` varchar(2000) COLLATE utf8_polish_ci NOT NULL,
  `zdj` varchar(300) COLLATE utf8_polish_ci NOT NULL,
  `tytul` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `shortart` varchar(400) COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `artykuly`
--

INSERT INTO `artykuly` (`ID`, `artykul`, `zdj`, `tytul`, `shortart`) VALUES
(36, '<p><span class=\"marker\">Ancymony</span></p>\r\n', 'https://i.wpimg.pl/O/644x406/d.wpimg.pl/1867929753--940256145/lech-walesa.jpg', 'KRUCA PATRYK', 'Kruca pysk rany boskie'),
(38, '<div style=\"background:#eee;border:1px solid #ccc;padding:5px 10px;\">KRUCA W MORDE&nbsp;<br />\r\n&nbsp;</div>\r\n', 'https://scontent-frx5-1.xx.fbcdn.net/v/t1.0-9/35089300_2291437597549596_8835942944256032768_n.jpg?_nc_cat=111&_nc_ht=scontent-frx5-1.xx&oh=77fa40c1d0632ddf577995bddf22c5b9&oe=5CA2626F', 'PATRYK UDUSZE CIE', 'CO WY TAK MRUCZYCIE');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lokalizacja`
--

CREATE TABLE `lokalizacja` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nazwa` text,
  `Adres` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `lokalizacja`
--

INSERT INTO `lokalizacja` (`id`, `Nazwa`, `Adres`) VALUES
(1, 'WAW1', 'Warszawa, Koszykowa 75'),
(2, 'SZC1', 'Szczecin, Przestrzenna 10'),
(3, 'KAT1', 'Katowice, Korfantego 105');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pogoda`
--

CREATE TABLE `pogoda` (
  `id` int(10) UNSIGNED NOT NULL,
  `temperatura` int(11) DEFAULT NULL,
  `Opad` int(10) UNSIGNED DEFAULT NULL,
  `Cisnienie` int(10) UNSIGNED DEFAULT NULL,
  `PredkoscWiatru` int(10) UNSIGNED DEFAULT NULL,
  `Wilgotnosc` int(10) UNSIGNED DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `pogoda`
--

INSERT INTO `pogoda` (`id`, `temperatura`, `Opad`, `Cisnienie`, `PredkoscWiatru`, `Wilgotnosc`) VALUES
(1, 23, 0, 1017, 4, 60),
(2, 21, 0, 1004, 40, 50),
(3, 18, 0, 990, 3, 55),
(4, 23, 0, 1000, 30, 30),
(5, 19, 0, 1000, 30, 30);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `prognoza`
--

CREATE TABLE `prognoza` (
  `id` int(10) UNSIGNED NOT NULL,
  `Lokalizacja_id` int(10) UNSIGNED NOT NULL,
  `Pogoda_id` int(10) UNSIGNED NOT NULL,
  `dataProg` date DEFAULT NULL,
  `godzina` time DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `prognoza`
--

INSERT INTO `prognoza` (`id`, `Lokalizacja_id`, `Pogoda_id`, `dataProg`, `godzina`) VALUES
(1, 1, 1, '2015-07-01', '17:00:00'),
(2, 2, 2, '2015-07-01', '17:00:00'),
(3, 1, 3, '2015-07-02', '17:00:00'),
(4, 2, 4, '2015-07-02', '17:00:00'),
(5, 1, 5, '2015-07-03', '17:00:00');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `reg`
--

CREATE TABLE `reg` (
  `id` int(255) NOT NULL,
  `regulamin` varchar(5000) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `reg`
--

INSERT INTO `reg` (`id`, `regulamin`) VALUES
(1, 'Wszystkich odwiedzających, użytkowników oraz administrację obowiązuje poniższy regulamin Forum Router WS 50.\n<br>\n<b>I. Kultura zachowania się i wypowiedzi.</b>\n<br>\n1. Wszystkich korzystających z Forum zobowiązuje się do przestrzegania zasad <a href=\"http://pl.wikipedia.org/wiki/Netykieta\">Netykiety</a>.<br>\n2. Zobowiązuje się użytkowników o wypowiadanie się zgodnie z zasadami ortografii i gramatyki języka polskiego. Każda współczesna przeglądarka posiada funkcję sprawdzania pisowni i to naprawdę nie problem podkreślone słowa poprawić.<br>\n3. Uprasza się użytkowników o nie używanie słów wulgarnych, za wyjątkiem szczególnych sytuacji gdy wymaga tego cytat lub treść postu podkreślająca dane emocje.<br>\n4. Zakazuje się wyzwisk oraz prowadzenia kłótni na przestrzeni Forum - tym podobne sprawy proszę załatwiać za pośrednictwem systemu PW.<br>\n5. Zakazuje się stosowania gróźb odnoszących się do życia realnego - wszelkie tego przejawy będą karane i zgłaszane odpowiednim służbom.<br><br>\n\n\n<b>II. Aktywność na Forum.</b>\n<br><br>\n5. Zakładając nowy temat postaraj się odzwierciedlić jego treść - nagminnie pojawiające się tematy z nazwą typu \"prosze odp.\", \"problem\", \"wtf\" itd. będą usuwane.<br>\n6. Dodając nowy temat upewnij się że znajduje się on w odpowiednim dziale.<br>\n7. Staraj się nie pisać posta pod postem, zamiast tego używaj opcji Edytuj. Wyjątkami są:<br>\n a) Sytuacja gdy po dłuższym czasie od Twojej ostatniej wypowiedzi wnosisz coś nowego do tematu a wątek zdążył już przesunąć się niżej w kolejności stając się niewidocznym<br>\n b) Sytuacja w której nie doczekałeś się żadnej odpowiedzi. W takim wypadku przysługuje możliwość trzykrotnego \"podbicia\" tematu w celu jego odświeżenia w odstępach czasu maksimum 7 dni. Po wykorzystaniu limitu gdy nadal nie pojawi się odpowiedź - temat zostanie skierowany do działu \"Nierozwiązane tematy\".<br>\n8. Dozwolone jest wklejanie linków do sklepów lub zakładów usługowych o profilach działalności odpowiadających treści danego tematu.<br>');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `ID` int(255) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `haslo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`ID`, `login`, `haslo`) VALUES
(1, 'agahun', '81a349e9f10ff7454d0144a930587dee'),
(2, 'pusia', 'e120834e859713997dbb9dec9488f182'),
(3, 'jestempiechem', 'a8dcca2b171630847702cf05a13e5b0e'),
(5, 'test1', '5a105e8b9d40e1329780d62ea2265d8a'),
(11, 'agahun11', '81a349e9f10ff7454d0144a930587dee'),
(12, 'pamich27', '0b7b70fd03dbb203816f4e7bbda67531'),
(13, 'krystian', '731a46f329a9c7dc14586a879cc6b5ef'),
(14, 'piechxD', '202cb962ac59075b964b07152d234b70'),
(15, 'zbyszek', '81a349e9f10ff7454d0144a930587dee'),
(16, 'zbyszekk', '202cb962ac59075b964b07152d234b70'),
(17, 'nikodem', '202cb962ac59075b964b07152d234b70'),
(18, 'agahun1', '7cbb3252ba6b7e9c422fac5334d22054');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `artykuly`
--
ALTER TABLE `artykuly`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `lokalizacja`
--
ALTER TABLE `lokalizacja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pogoda`
--
ALTER TABLE `pogoda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prognoza`
--
ALTER TABLE `prognoza`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `artykuly`
--
ALTER TABLE `artykuly`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT dla tabeli `lokalizacja`
--
ALTER TABLE `lokalizacja`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT dla tabeli `pogoda`
--
ALTER TABLE `pogoda`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `prognoza`
--
ALTER TABLE `prognoza`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
