-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 09 Oca 2022, 21:41:27
-- Sunucu sürümü: 10.4.22-MariaDB
-- PHP Sürümü: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `halı`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dukkan`
--

CREATE TABLE `dukkan` (
  `ıd` int(11) NOT NULL,
  `adi` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `soyadi` varchar(256) COLLATE utf8_turkish_ci NOT NULL,
  `tarih` date NOT NULL,
  `saat` datetime NOT NULL,
  `adet` int(11) NOT NULL,
  `telefon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `dukkan`
--

INSERT INTO `dukkan` (`ıd`, `adi`, `soyadi`, `tarih`, `saat`, `adet`, `telefon`) VALUES
(1, 'Kamil', 'urer', '2001-09-08', '0000-00-00 00:00:00', 5, 2147483647),
(2, 'Mehmet', 'urer', '2001-08-29', '0000-00-00 00:00:00', 5, 2147483647),
(3, 'fatih', 'urer', '2111-06-06', '0000-00-00 00:00:00', 6, 2147483647),
(4, 'Salih', 'urer', '2001-08-20', '0000-00-00 00:00:00', 5, 2147483647);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `randevu`
--

CREATE TABLE `randevu` (
  `tarih` date NOT NULL,
  `saat` time NOT NULL,
  `adet` int(11) NOT NULL,
  `telefon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `dukkan`
--
ALTER TABLE `dukkan`
  ADD PRIMARY KEY (`ıd`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `dukkan`
--
ALTER TABLE `dukkan`
  MODIFY `ıd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
