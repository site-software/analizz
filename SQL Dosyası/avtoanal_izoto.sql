-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 18 Kas 2022, 13:27:50
-- Sunucu sürümü: 10.3.36-MariaDB
-- PHP Sürümü: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `avtoanal_izoto`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `araclar`
--

CREATE TABLE `araclar` (
  `id` int(11) NOT NULL,
  `kullanici` text DEFAULT NULL,
  `marka` text DEFAULT NULL,
  `yanacaq` text DEFAULT NULL,
  `model` text DEFAULT NULL,
  `oturucu` text DEFAULT NULL,
  `bannovu` text DEFAULT NULL,
  `suretler` text DEFAULT NULL,
  `yurus` text DEFAULT NULL,
  `ilyil` text DEFAULT NULL,
  `rengi` text DEFAULT NULL,
  `muherrikin` text DEFAULT NULL,
  `parasi` text DEFAULT NULL,
  `parasitl` text DEFAULT NULL,
  `mgucu` text DEFAULT NULL,
  `sahip` text DEFAULT NULL,
  `vaziyeti` text DEFAULT NULL,
  `yersayisi` text DEFAULT NULL,
  `aasec` text DEFAULT NULL,
  `ilanaciklama` text DEFAULT NULL,
  `altsecenek` text DEFAULT NULL,
  `resim` text DEFAULT NULL,
  `tarih` text DEFAULT NULL,
  `vipmi` text DEFAULT NULL,
  `onay` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `araclar`
--

INSERT INTO `araclar` (`id`, `kullanici`, `marka`, `yanacaq`, `model`, `oturucu`, `bannovu`, `suretler`, `yurus`, `ilyil`, `rengi`, `muherrikin`, `parasi`, `parasitl`, `mgucu`, `sahip`, `vaziyeti`, `yersayisi`, `aasec`, `ilanaciklama`, `altsecenek`, `resim`, `tarih`, `vipmi`, `onay`) VALUES
(18, '1', 'Audi', 'Benzin', 'A4', 'Tam', 'Hetçbek / Liftbek', 'Avtomat', '-', '2006', 'Gümüşü', '1200', '230000', 'AZN', '110', 'Birinci', '{\"vaziyeti\":[\"Vuru\\u011fu yoxdur\",\"R\\u0259ngl\\u0259nm\\u0259yib\"]}', '5', 'Barter mümkündür', 'osman // ilan açıklama alanı kontroller sağlanmaktadır.', '{\"ozellik\":[\"ABS\",\"Ya\\u011f\\u0131\\u015f sensoru\",\"M\\u0259rk\\u0259zi qapanma\",\"Park radar\\u0131\",\"Oturacaqlar\\u0131n isidilm\\u0259si\",\"D\\u0259ri salon\",\"Yan p\\u0259rd\\u0259l\\u0259r\"]}', '{\"resim\":[\"yuklenen\\/H4sIAAAAAAAAAFvzloG1tIiBOTrayfuvpGh6-m1zJgaGigIGBgZGoDhTtNOaz-I_2DhCHkCFmfwZWMpTkwoYgSrcmLgycxPTU_VBArz____nZ-RONNFNrSjRzUvNzWcHKhHmyav8-UGw082l7PpDQyWuD6c3t5VyMvBYbbhZWG3E3iTTxxnu6nVQ642TmhsDj8CxGbE5FS1vpTd9aPy8oi8.png\"]}', '18/11/2022', '1', '1'),
(19, '1', 'Aston Martin', 'Benzin', 'DB11', 'Arxa', 'Hetçbek / Liftbek', 'Avtomat', '---', '2019', 'Narıncı', '1000', '1000', 'AZN', '1000', 'Birinci', '{\"vaziyeti\":[\"Vuru\\u011fu var\",\"Vuru\\u011fu yoxdur\",\"R\\u0259ngl\\u0259nib\",\"R\\u0259ngl\\u0259nm\\u0259yib\"]}', '4', 'Kreditdədir', 'deneme...', '{\"ozellik\":[\"Y\\u00fcng\\u00fcl lehimli diskl\\u0259r\",\"ABS\",\"M\\u0259rk\\u0259zi qapanma\",\"Park radar\\u0131\",\"D\\u0259ri salon\",\"Ksenon lampalar\",\"Oturacaqlar\\u0131n ventilyasiyas\\u0131\"]}', '{\"resim\":[\"yuklenen\\/H4sIAAAAAAAAAFvzloG1tIiBOTrayfuvpGh6-m1zJgaGigIGBgZGoDhTtNOaz-I_2DhCHkCFmfwZWMpTkwoYgSrcmLgycxPTU_VBArz____nZ-RONNFNrSjRzUvNzWcHKhHmyav8-UGw082l7PpDQyWuD6c3t5VyMvBYbbhZWG3E3iTTxxnu6nVQ642TmhsDj8CxGbE5FS1vpTd9aPy8oi8.png\"]}', '18/11/2022', '0', '0'),
(20, '8', 'Abarth', 'Benzin', '124 Spider', 'Arxa', 'Avtobus', 'Mexaniki', '100', '2017', 'Qara', '300', '1000', 'AZN', '150', 'Birinci', '{\"vaziyeti\":[\"Vuru\\u011fu var\",\"R\\u0259ngl\\u0259nib\"]}', '1', NULL, '...demo', '{\"ozellik\":[\"Lyuk\",\"Park radar\\u0131\",\"D\\u0259ri salon\"]}', '{\"resim\":[\"yuklenen\\/1A53C388-60A7-4586-A54B-BBB15E6CAECB.jpeg\",\"yuklenen\\/87F29B4F-C8F9-494E-9988-E3783E16BA53.jpeg\"]}', '18/11/2022', '0', '0'),
(21, '8', 'Abarth', 'Benzin', '124 Spider', 'Arxa', 'Avtobus', 'Mexaniki', '156', '2022', 'Qara', '50', '1000', 'AZN', '15000', 'Birinci', '{\"vaziyeti\":[\"Vuru\\u011fu var\",\"R\\u0259ngl\\u0259nib\"]}', '1', NULL, '...', '{\"ozellik\":[\"Ya\\u011f\\u0131\\u015f sensoru\",\"Kondisioner\",\"D\\u0259ri salon\"]}', '{\"resim\":[\"yuklenen\\/D2F4D6F4-1723-485C-B286-D4192F35D0BE.jpeg\",\"yuklenen\\/A0C082A2-B44B-44A0-8FF4-80684B25AA4C.jpeg\"]}', '18/11/2022', '0', '1'),
(22, '8', 'Abarth', 'Benzin', '124 Spider', 'Arxa', 'Avtobus', 'Mexaniki', '1882', '2022', 'Qara', '50', '1000', 'AZN', '1555', 'Birinci', '{\"vaziyeti\":[\"Vuru\\u011fu var\",\"Vuru\\u011fu yoxdur\"]}', '1', NULL, '...', '{\"ozellik\":[\"Lyuk\",\"Park radar\\u0131\"]}', '{\"resim\":[\"yuklenen\\/BBADB4F0-0879-4D9A-B897-5901A0D9E605.jpeg\",\"yuklenen\\/B831A719-8E54-4F94-860E-A048AB09069D.jpeg\"]}', '18/11/2022', '0', '0');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `ayar_id` int(11) NOT NULL,
  `siteadi` text NOT NULL,
  `siteaciklama` text NOT NULL,
  `siteanahtar` text NOT NULL,
  `sitelink` text NOT NULL,
  `resim` text NOT NULL,
  `siterengi` text NOT NULL,
  `siterengi1` text NOT NULL,
  `twitter` text NOT NULL,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `adres` text NOT NULL,
  `telefon` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`ayar_id`, `siteadi`, `siteaciklama`, `siteanahtar`, `sitelink`, `resim`, `siterengi`, `siterengi1`, `twitter`, `facebook`, `instagram`, `adres`, `telefon`, `email`) VALUES
(1, 'AvtoAnaliz', 'AvtoAnaliz', 'avto, analiz', 'https://avtoanaliz.com/', 'e345f1c5cf039b1cc9c6e8b73461a1c0r.png', '#000080', '#000000', '#twitter', '#facebook', 'https://www.instagram.com/avto_analiz/', 'Binəqədi rayonu. Biləcəri qəsəbəsi. Rəşid İsmayılov küçəsi. Ev 8c.', '+994773370337', 'avtoanaliz11@gmail.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `bankabilgileri`
--

CREATE TABLE `bankabilgileri` (
  `id` int(11) NOT NULL,
  `banka` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `baslik` text NOT NULL,
  `icerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `baslik`, `icerik`) VALUES
(1, 'Haqqımızda', '<p style=\"text-align:center\">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<img alt=\"Field Service - Spread\" src=\"https://spread.com.br/wp-content/uploads/2020/06/animate-field-service.gif\" /></p>\r\n\r\n<h1 style=\"text-align:center\"><tt><em><strong><u><span style=\"font-size:72px\">&Ccedil;ox yaxında...</span></u></strong></em></tt></h1>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `id` int(11) NOT NULL,
  `baslik` text NOT NULL,
  `icerik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`id`, `baslik`, `icerik`) VALUES
(1, 'Xidmətlər', '<p style=\"text-align:center\"><img alt=\"Field Service - Spread\" src=\"https://spread.com.br/wp-content/uploads/2020/06/animate-field-service.gif\" /></p>\r\n\r\n<p style=\"text-align:center\">&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</p>\r\n\r\n<h1 style=\"text-align:center\"><span style=\"font-size:72px\"><tt><em><strong><u>&Ccedil;ox yaxında...</u></strong></em></tt></span></h1>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `adsoyad` text NOT NULL,
  `email` text NOT NULL,
  `sehir` text NOT NULL,
  `telefon` text NOT NULL,
  `password` text NOT NULL,
  `tarih` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `adsoyad`, `email`, `sehir`, `telefon`, `password`, `tarih`) VALUES
(1, 'EMKA Soft', 'asd@asd.com', 'Türkiye', '123456', 'e10adc3949ba59abbe56e057f20f883e', '20/07/2022'),
(3, 'emka', 'ek@ek.com', 'ek', 'ek', 'e10adc3949ba59abbe56e057f20f883e', '20/07/2022'),
(7, 'emre krmn', 'tuktnbwgedn@arxxwalls.com', 'Türkiye', '123', '202cb962ac59075b964b07152d234b70', '17/08/2022'),
(8, 'Skmskaks', 'ismayilmamedli986@gmail.com', 'Haha', '209392', '8a761187634a40da5c5d663fdcd021a7', '17/08/2022'),
(10, 'Oğuzhan gözeler ', 'oguzhangzlr251@gmail.com', 'Erzurum ', '0553 850 0976 ', 'ccac8d46cf38bb5b2a7ff215235c8a9b', '18/08/2022'),
(11, '..', '.@gmail.com', 'Bakı', '.', '8a761187634a40da5c5d663fdcd021a7', '21/09/2022'),
(13, 'test', 'l@fs.com', 'test', 'test', '098f6bcd4621d373cade4e832627b4f6', '25/09/2022');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesajlar`
--

CREATE TABLE `mesajlar` (
  `id` int(11) NOT NULL,
  `adsoyad` text NOT NULL,
  `email` text NOT NULL,
  `konu` text NOT NULL,
  `mesaj` text NOT NULL,
  `tarih` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mesajlar`
--

INSERT INTO `mesajlar` (`id`, `adsoyad`, `email`, `konu`, `mesaj`, `tarih`) VALUES
(1, 'deneme', 'deneme@gmail.com', 'deneme', 'deneme', '29/07/2022'),
(2, 'Bower', 'jewell.bower@gmail.com', 'Hi', 'Hello! How can I get to your office?', '09/10/2022'),
(3, 'asdasdasdasdasdasdasd', 'ismayilmamedli986@gmail.com', 'adasda', 'salam', '27/10/2022'),
(4, 'de Vries', 'free@freeaiwriting.com', 'Are you still in business?', 'Dear, \r\n\r\nI came across avtoanaliz.com and wanted to share this great free AI tool. \r\nWith this tool you write content 10 times faster and with much higher conversion rates. \r\nYou can use the tool for free via freeaiwriting.com \r\n\r\nThe AI can write blogs, advertising copy, youtube videos and even entire books. \r\nWe would love to hear your feedback. \r\n\r\n\r\nKind regards, \r\nBram \r\nFreeaiwriting.com\r\n', '09/11/2022');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `odemeler`
--

CREATE TABLE `odemeler` (
  `id` int(11) NOT NULL,
  `kullanici` text NOT NULL,
  `adsoyad` text NOT NULL,
  `tutar` text NOT NULL,
  `ilanid` text NOT NULL,
  `odemenotu` text NOT NULL,
  `tarih` text NOT NULL,
  `durumu` text NOT NULL,
  `ellan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `odemeler`
--

INSERT INTO `odemeler` (`id`, `kullanici`, `adsoyad`, `tutar`, `ilanid`, `odemenotu`, `tarih`, `durumu`, `ellan`) VALUES
(20, '3', '123', '123', '11', '123', '02/10/2022', '<span style=\'background: var(--site-rengi2); color: #FFF; padding: 3px 5px; font-size: 13px; border-radius: 4px;\'\'>təsdiq edilmişdir</span>', 'Avtomobil'),
(21, '3', 'wrew', '151', '11', '15das', '02/10/2022', '<span style=\'background: var(--site-rengi2); color: #FFF; padding: 3px 5px; font-size: 13px; border-radius: 4px;\'\'>təsdiq edilmişdir</span>', 'Avtomobil'),
(22, '3', 'EMKASOFT', '00', '22', 'emkasoft', '04/10/2022', '<span style=\'background: var(--site-rengi2); color: #FFF; padding: 3px 5px; font-size: 13px; border-radius: 4px;\'\'>təsdiq edilmişdir</span>', 'Qeydiyyat nişanı'),
(23, '3', 'araç ilan deneme // emkasoft', '10', '16', 'araç ilan deneme // emkasoft', '04/10/2022', '<span style=\'background: var(--site-rengi2); color: #FFF; padding: 3px 5px; font-size: 13px; border-radius: 4px;\'\'>təsdiq edilmişdir</span>', 'Avtomobil'),
(24, '8', 'Skkzs', '10000', '26', 'Zz', '18/11/2022', '<span style=\'background: var(--site-rengi2); color: #FFF; padding: 3px 5px; font-size: 13px; border-radius: 4px;\'\'>təsdiq edilmişdir</span>', 'Qeydiyyat nişanı');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `plakalar`
--

CREATE TABLE `plakalar` (
  `id` int(11) NOT NULL,
  `nomresec` text NOT NULL,
  `nomresecc` text NOT NULL,
  `nomreseccc` text NOT NULL,
  `nomresecyaz` text NOT NULL,
  `parasi` text NOT NULL,
  `parasitl` text NOT NULL,
  `aciklamasi` text NOT NULL,
  `kullanici` text NOT NULL,
  `tarih` text NOT NULL,
  `vipmi` text NOT NULL,
  `onay` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `plakalar`
--

INSERT INTO `plakalar` (`id`, `nomresec`, `nomresecc`, `nomreseccc`, `nomresecyaz`, `parasi`, `parasitl`, `aciklamasi`, `kullanici`, `tarih`, `vipmi`, `onay`) VALUES
(6, '10', 'B', 'M', '357', '1500', 'AZN', 'Telefon: (070) 357-10-01', '11', '21/09/2022', '0', '1'),
(9, '90', 'E', 'O', '111', '5900', 'AZN', 'Telefon: (050) 991-22-22\r\n', '11', '21/09/2022', '0', '1'),
(10, '10', 'M', 'M', '710', '5000', 'AZN', 'Telefon: (077) 270-84-85\r\n', '11', '21/09/2022', '0', '1'),
(11, '77', 'E', 'A', '007', '11500', 'AZN', 'Telefon: (099) 332-00-00', '11', '21/09/2022', '0', '1'),
(12, '10', 'O', 'N', '277', '1500', 'AZN', 'Telefon: (055) 357-33-34', '11', '21/09/2022', '0', '1'),
(13, '90', 'G', 'A', '999', '20000', 'AZN', 'Telefon: (050) 577-00-22', '11', '22/09/2022', '0', '1'),
(14, '90', 'G', 'T', '004', '3000', 'AZN', 'Telefon: (050) 400-04-20\r\n', '11', '22/09/2022', '0', '1'),
(15, '90', 'E', 'O', '111', '5900', 'AZN', 'Telefon: (050) 991-22-22', '11', '22/09/2022', '0', '1'),
(16, '10', 'M', 'M', '710', '5000', 'AZN', 'Telefon: (077) 270-84-85\r\n', '11', '22/09/2022', '0', '1'),
(18, '10', 'P', 'S', '076', '1600', 'AZN', 'Telefon: (051) 229-25-95', '11', '23/09/2022', '1', '1'),
(19, '10', 'P', 'S', '091', '1600', 'AZN', 'Telefon: (051) 229-25-95\r\n', '11', '23/09/2022', '0', '1'),
(20, '99', 'O', 'N', '800', '3500', 'AZN', 'Telefon: (055) 605-36-31\r\n', '11', '23/09/2022', '0', '1'),
(21, '99', 'R', 'N', '300', '2500', 'AZN', 'Telefon: (055) 605-36-31\r\n', '11', '23/09/2022', '0', '1'),
(22, '10', 'E', 'K', '010', '-', 'AZN', 'EMKASOFT Web Tasarım ve Yazılım Hizmetleri', '3', '30/09/2022', '0', '0'),
(25, '11', 'O', 'K', '11', '15000', 'USD', 'Plaka ilan kontrol ...', '1', '18/11/2022', '0', '1'),
(26, '03', 'A', 'A', '100', '1000', 'AZN', '...', '8', '18/11/2022', '1', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `reklamlar`
--

CREATE TABLE `reklamlar` (
  `id` int(11) NOT NULL,
  `reklam1` text NOT NULL,
  `reklam2` text NOT NULL,
  `reklam3` text NOT NULL,
  `reklam4` text NOT NULL,
  `reklam5` text NOT NULL,
  `reklam6` text NOT NULL,
  `reklam7` text NOT NULL,
  `reklam8` text NOT NULL,
  `reklam9` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `reklamlar`
--

INSERT INTO `reklamlar` (`id`, `reklam1`, `reklam2`, `reklam3`, `reklam4`, `reklam5`, `reklam6`, `reklam7`, `reklam8`, `reklam9`) VALUES
(1, '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetim`
--

CREATE TABLE `yonetim` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yonetim`
--

INSERT INTO `yonetim` (`id`, `username`, `password`) VALUES
(1, 'admin', '2eebdf719107c357967601cc78ed9e2b'),
(2, 'emkasoft', 'aecb0ce84c6356aab31ffb2834a39b32');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `araclar`
--
ALTER TABLE `araclar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Tablo için indeksler `bankabilgileri`
--
ALTER TABLE `bankabilgileri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `odemeler`
--
ALTER TABLE `odemeler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `plakalar`
--
ALTER TABLE `plakalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `reklamlar`
--
ALTER TABLE `reklamlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetim`
--
ALTER TABLE `yonetim`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `araclar`
--
ALTER TABLE `araclar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `ayar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `bankabilgileri`
--
ALTER TABLE `bankabilgileri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Tablo için AUTO_INCREMENT değeri `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `odemeler`
--
ALTER TABLE `odemeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `plakalar`
--
ALTER TABLE `plakalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Tablo için AUTO_INCREMENT değeri `reklamlar`
--
ALTER TABLE `reklamlar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `yonetim`
--
ALTER TABLE `yonetim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
