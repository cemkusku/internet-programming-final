-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 04 Oca 2023, 16:08:18
-- Sunucu sürümü: 5.7.40
-- PHP Sürümü: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `gidicem`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa_hero`
--

DROP TABLE IF EXISTS `anasayfa_hero`;
CREATE TABLE IF NOT EXISTS `anasayfa_hero` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `slogan` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `aciklama` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `anasayfa_hero`
--

INSERT INTO `anasayfa_hero` (`id`, `baslik`, `slogan`, `aciklama`) VALUES
(2, 'Cennetten Melodiler', 'Müziğin ritmini yakalayın', 'Müzikle en iyi yanlarınızı ortaya çıkarın'),
(5, 'Müziğin Çılgınlığını Hissedin', 'Gününüzü müzikle şekillendirin', 'Bir yaşam tarzı olarak müziği örnek alın'),
(8, 'Havada Müzik Var', 'Tüm zamanların en iyi hitleri', 'Bir müzik parçasının merkezine ulaşmak için kaç yaşam gerekir?');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `etkinlikler`
--

DROP TABLE IF EXISTS `etkinlikler`;
CREATE TABLE IF NOT EXISTS `etkinlikler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gun` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ay` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `photo` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `isim` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `etkinlikler`
--

INSERT INTO `etkinlikler` (`id`, `gun`, `ay`, `photo`, `isim`) VALUES
(1, '15', 'Ocak', 'madrigal-1.jpg', 'Madrigal'),
(2, '15', 'Ocak', 'dedubluman-1.jpg', 'Dedublüman');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

DROP TABLE IF EXISTS `hakkimizda`;
CREATE TABLE IF NOT EXISTS `hakkimizda` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` longtext COLLATE utf8mb4_turkish_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_turkish_ci NOT NULL,
  `sub` longtext COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `baslik`, `content`, `sub`) VALUES
(1, 'Hakkımızda', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat odio autem iste neque architecto alias culpa, ab libero, praesentium esse natus quae possimus sed qui dolorum laudantium illum, incidunt eligendi?', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam.\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE IF NOT EXISTS `iletisim` (
  `isim` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `konu` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  `mesaj` varchar(999) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`isim`, `email`, `konu`, `mesaj`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('s', 'sss', 'sss', 'ssss'),
('s', 'sss', 'sss', 'ssss'),
('sadasd', 'adfadfa', 'dsgsdgsd', 'sdgsdgdsg'),
('asdasf', 'dfsdgf', 'sdfsdfgds', 'dsfsdfsd'),
('asdasf', 'dfsdgf', 'sdfsdfgds', 'dsfsdfsd'),
('Åževval', 'asda', 'qw', 'erewr'),
('cem', 'cem@cem.com', 'asda', 'asddddddddd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

DROP TABLE IF EXISTS `kullanicilar`;
CREATE TABLE IF NOT EXISTS `kullanicilar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `pwd` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `username`, `email`, `pwd`) VALUES
(1, 'erdem', 'e@mail.com', '1'),
(2, 'cem', 'c@mail.com', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `myguests`
--

DROP TABLE IF EXISTS `myguests`;
CREATE TABLE IF NOT EXISTS `myguests` (
  `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `lastname` varchar(30) COLLATE utf8mb4_turkish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_turkish_ci DEFAULT NULL,
  `reg_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ozlu`
--

DROP TABLE IF EXISTS `ozlu`;
CREATE TABLE IF NOT EXISTS `ozlu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `soz_sahibi` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `soz` varchar(255) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `ozlu`
--

INSERT INTO `ozlu` (`id`, `soz_sahibi`, `soz`) VALUES
(1, 'Cem Küskü', 'Ülke ve insan ayırımı olmadan, müziğin dili evrenseldir. Müziği her insan dinler, sözlerini anlamasa bile, melodi sesleri kişiye bir şeyler ifade eder, hissettirir.'),
(2, 'Cem Küskü', 'İnsan duygu ve düşüncelerinin, tek sesli veya çok sesli olarak anlatımına müzik denir.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yaklasan_etkinlikler`
--

DROP TABLE IF EXISTS `yaklasan_etkinlikler`;
CREATE TABLE IF NOT EXISTS `yaklasan_etkinlikler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gun` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `ay` varchar(50) COLLATE utf8mb4_turkish_ci NOT NULL,
  `baslik` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  `icerik` varchar(250) COLLATE utf8mb4_turkish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `yaklasan_etkinlikler`
--

INSERT INTO `yaklasan_etkinlikler` (`id`, `gun`, `ay`, `baslik`, `icerik`) VALUES
(1, '15', 'Ocak', 'Madrigal', 'Madrigal, 15 Ocak 2023 Pazar günü Bostancı Gösteri Merkezi\'nde sevenleriyle buluşuyor.'),
(2, '15', 'Ocak', 'Dedublüman', 'Dedublüman, 15 Ocak akşamı Volkswagen Arena\'da!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
