-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Gép: mysql.omega:3306
-- Létrehozás ideje: 2021. Nov 21. 11:07
-- Kiszolgáló verziója: 5.7.35-log
-- PHP verzió: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `webaruhaz_szsz`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `termek`
--

CREATE TABLE `termek` (
  `ID` tinyint(3) UNSIGNED NOT NULL,
  `kategoria` varchar(256) COLLATE utf8_hungarian_ci NOT NULL,
  `termek_neve` varchar(256) COLLATE utf8_hungarian_ci NOT NULL,
  `ar` int(10) UNSIGNED NOT NULL,
  `foto` varchar(256) COLLATE utf8_hungarian_ci NOT NULL,
  `foto_nk` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `keszlet` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `termek`
--

INSERT INTO `termek` (`ID`, `kategoria`, `termek_neve`, `ar`, `foto`, `foto_nk`, `keszlet`) VALUES
(1, 'alaplap', 'MSI MPG Z390 GAMING PLUS ', 58000, '01.jpg', '01nk.jpg', 5),
(2, 'alaplap', 'Asus Prime Z590M-Plus mATX ', 62360, '02.jpg', '	 02nk.jpg', 3),
(3, 'alaplap', 'Asus ROG Strix x570-E Gaming', 111089, '03.jpg', '	 03nk.jpg', 2),
(4, 'alaplap', 'Gigabyte x570 AORUS PRO', 86791, '04.jpg', '	 04nk.jpg', 6),
(5, 'alaplap', 'Asrock b450 pro4', 27420, '05.jpg', '	 05nk.jpg', 8),
(6, 'alaplap', 'Asus PRIME A320M-E Socket AM4 ', 27890, '06.jpg', '	 06nk.jpg', 4),
(7, 'alaplap', 'Asus ROG MAXIMUS XIII EXTREME GLACIAL', 317790, '07.jpg', '	 07nk.jpg', 1),
(8, 'alaplap', 'MSI H310M PRO-VDH PLUS ', 14300, '08.jpg', '	 08nk.jpg', 10),
(9, 'alaplap', 'ASRock J3355M ', 21700, '09.jpg', '	 09nk.jpg', 7),
(10, 'memoria', 'KINGSTON memoria HYPERX DDR4 16GB 3200MHz CL16 DIMM XMP (Kit of 2) Predator RGB', 38590, '10.jpg', '	 10nk.jpg', 5),
(11, 'memoria', 'HP S1 Series laptop memoria, 8 GB DDR4 RAM, 2400 MHz, CL17', 25918, '11.jpg', '	 11nk.jpg', 7),
(12, 'memoria', 'Dell 8GB DDR4 2666MHz AA335287', 33759, '12.jpg', '	 12nk.jpg', 4),
(13, 'memoria', 'Acer 8GB DDR4 3200MHz BL.9BWWA.206', 21190, '13.jpg', '	 13nk.jpg', 8),
(14, 'memoria', 'Lenovo 8GB DDR4 2666Mhz 4x70W22200', 30890, '14.jpg', '	 14nk.jpg', 6),
(15, 'memoria', 'Samsung 8GB DDR4 2666MHz M471A1K43CB1-CTD', 24699, '15.jpg', '	 15nk.jpg', 2),
(16, 'memoria', 'Kingston 32GB (2x16GB) DDR4 3200MHz KF432S20IB1K2/32', 54000, '16.jpg', '	 16nk.jpg', 3),
(17, 'memoria', 'Kingston HyperX FURY 8GB DDR4 2666MHz HX426C16FB3/8', 14000, '17.jpg\r\n', '	 17nk.jpg', 7),
(18, 'memoria', 'Crucial Ballistix 16GB (2x8GB) DDR4 3600MHz', 35490, '18.jpg', '	 18nk.jpg', 4),
(19, 'memoria', 'G.SKILL Ripjaws V 32GB (2x16GB) DDR4 3200MHz', 66240, '19.jpg\r\n', '	 19nk.jpg', 9),
(20, 'memoria', 'Zeppelin 2GB DDR3 1600MHz ZE-SD3-2G1600', 4090, '20.jpg', '	 20nk.jpg', 10),
(21, 'monitor', 'Samsung Odyssey G5 C27G55TQWR', 93000, '21.jpg\r\n', '	 21nk.jpg', 4),
(22, 'monitor', 'LG 25UM58-P ', 46000, '22.jpg', '	 22nk.jpg', 5),
(23, 'monitor', 'Samsung C24RG50FQR ', 54000, '23.jpg\r\n', '	 23nk.jpg', 3),
(24, 'monitor', 'AOC 27G2U ', 86000, '24.jpg', '	 24nk.jpg', 4),
(25, 'monitor', 'LG 27GN800-B ', 114000, '25.jpg', '	 25nk.jpg', 7),
(26, 'monitor', 'LG 27GL850-B ', 142000, '26.jpg', '	 26nk.jpg', 3),
(27, 'monitor', 'Samsung S22A330NHU', 35000, '27.jpg', '	 27nk.jpg', 6),
(28, 'monitor', 'LG 29UM69G-B ', 68000, '28.jpg', '	 28nk.jpg', 4),
(29, 'monitor', 'Dell S2721H monitor', 62370, '29.jpg', '	 29nk.jpg', 5),
(30, 'monitor', 'Acer Nitro VG240YSbmiipx monitor', 66290, '30.jpg', '	 30nk.jpg', 2),
(31, 'processzor', 'AMD Ryzen 5 5600X 6-Core 3.7GHz AM4 ', 93000, '31.jpg', '	 31nk.jpg', 8),
(32, 'processzor', 'AMD Ryzen 5 3600 6-Core 3.6GHz AM4 ', 75000, '32.jpg', '	 32nk.jpg', 6),
(33, 'processzor', 'AMD Ryzen 7 5800X 8-Core 3.8GHz AM4 ', 132000, '33.jpg', '	 33nk.jpg', 5),
(34, 'processzor', 'Intel Core i5-10400F 6-Core 2.9GHz LGA1200 ', 54000, '34.jpg', '	 34nk.jpg', 10),
(35, 'processzor', 'AMD Ryzen 7 3700X 8-Core 3.6GHz AM4 ', 89000, '35.jpg', '	 35nk.jpg', 7),
(36, 'processzor', 'AMD Ryzen 9 5900X 12-Core 3.7GHz AM4 ', 174000, '36.jpg', '	 36nk.jpg', 3),
(37, 'processzor', 'AMD Ryzen 5 1600 6-Core 3.2GHz AM4 ', 41000, '37.jpg', '	 37nk.jpg', 9),
(38, 'processzor', 'Intel Core i3-10105F 4-Core 3.7GHz LGA1200 ', 27000, '38.jpg', '	 38nk.jpg', 7),
(39, 'processzor', 'AMD Ryzen 5 5600G 6-Core 3.9GHz AM4 ', 93000, '39.jpg', '	 39nk.jpg', 4),
(40, 'processzor', 'Intel Core i9-9900KF 8-Core 3.6 GHz LGA1151 ', 110100, '40.jpg', '	 40nk.jpg', 8),
(41, 'videokartya', 'ASUS GeForce RTX 3070 Ti OC 8GB GDDR6X 256bit (TUF-RTX3070TI-O8G-GAMING) ', 449000, '41.jpg', '	 41nk.jpg', 2),
(42, 'videokartya', 'ASUS GeForce RTX 2060 DUAL OC EVO 6GB GDDR6 192bit (DUAL-RTX2060-O6G-EVO) ', 212000, '42.jpg', '	 42nk.jpg', 5),
(43, 'videokartya', 'GIGABYTE GeForce RTX 2060 OC 6GB GDDR6 192bit (GV-N2060OC-6GD) ', 251000, '43.jpg', '	 43nk.jpg', 4),
(44, 'videokartya', 'EVGA GeForce RTX 3060 XC GAMING 12GB GDDR6 (12G-P5-3657-KR) ', 316000, '44.jpg', '	 44nk.jpg', 3),
(45, 'videokartya', 'GIGABYTE GeForce GTX 1660 OC 6GB GDDR5 (GV-N1660OC-6GD) ', 208000, '45.jpg', '	 45nk.jpg', 7),
(46, 'videokartya', 'MSI GeForce RTX 3060 X 12GB GDRR6 192bit (RTX 3060 GAMING X 12G) ', 305000, '46.jpg', '	 46nk.jpg', 2),
(47, 'videokartya', 'Lenovo Quadro P620 2GB GDDR5 ', 86089, '47.jpg', '	 47nk.jpg', 10),
(48, 'videokartya', 'ASUS GeForce GTX 1050 Ti 4GB GDDR5 128bit', 135980, '48.jpg', '	 48nk.jpg', 8),
(49, 'ventillator', 'NZXT Kraken X53 240mm (RL-KRX53-01)', 38000, '49.jpg', '	 49nk.jpg', 6),
(50, 'ventillator', 'Noctua Chromax NH-D15 (FAN-NH-D15-CH)', 39000, '50.jpg', '	 50nk.jpg', 5);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vasarlas`
--

CREATE TABLE `vasarlas` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `termekID` tinyint(3) UNSIGNED NOT NULL,
  `vevoID` tinyint(3) UNSIGNED NOT NULL,
  `darab` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vevo`
--

CREATE TABLE `vevo` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `neve` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `lakcim` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_hungarian_ci NOT NULL,
  `mobil` varchar(255) COLLATE utf8_hungarian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `termek`
--
ALTER TABLE `termek`
  ADD PRIMARY KEY (`ID`);

--
-- A tábla indexei `vasarlas`
--
ALTER TABLE `vasarlas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `termekID` (`termekID`) USING BTREE,
  ADD KEY `vevoID` (`vevoID`) USING BTREE;

--
-- A tábla indexei `vevo`
--
ALTER TABLE `vevo`
  ADD PRIMARY KEY (`id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `termek`
--
ALTER TABLE `termek`
  MODIFY `ID` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT a táblához `vasarlas`
--
ALTER TABLE `vasarlas`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT a táblához `vevo`
--
ALTER TABLE `vevo`
  MODIFY `id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `vasarlas`
--
ALTER TABLE `vasarlas`
  ADD CONSTRAINT `vasarlas_ibfk_1` FOREIGN KEY (`termekID`) REFERENCES `termek` (`ID`),
  ADD CONSTRAINT `vasarlas_ibfk_2` FOREIGN KEY (`vevoID`) REFERENCES `vevo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
