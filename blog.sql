-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 15 Lut 2019, 18:44
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `blog`
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
(78, '<p>Long Desc Drugiego artykulu</p>', 'https://o.art-madam.pl/zdjecie/zamowienie-specjalne-grafika-czarno-biala,yjrkpmprgsgjgbnb.jpg', 'Drugi artykul', 'Short Desc Drugiego artykulu'),
(77, '<p>Long Desc pierwszego artykuÅ‚u</p>', 'https://img.pakamera.net/i1/1/047/grafiki-i-ilustracje-12156277_2209482047.jpg', 'Pierwszy artykuÅ‚', 'Short Desc pierwszego artykuÅ‚u');

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
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `artykuly`
--
ALTER TABLE `artykuly`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user`
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
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
