-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 23-02-2020 a las 00:12:28
-- Versión del servidor: 5.7.27
-- Versión de PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `petromar_supply`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `databaseports`
--

CREATE TABLE `databaseports` (
  `id` int(11) NOT NULL,
  `id_continent` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `country` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `flag` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `locode` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `imagen` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `video` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `videoYTube` varchar(3) COLLATE utf8_spanish_ci NOT NULL,
  `opening` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `coordenadasS` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `coordenadasW` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `surface` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `depth` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `docks` int(11) NOT NULL,
  `annualcontainers` int(11) NOT NULL,
  `annualtonel` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `annualships` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `databaseports`
--

INSERT INTO `databaseports` (`id`, `id_continent`, `name`, `country`, `flag`, `locode`, `imagen`, `video`, `videoYTube`, `opening`, `coordenadasS`, `coordenadasW`, `direccion`, `phone`, `email`, `surface`, `depth`, `docks`, `annualcontainers`, `annualtonel`, `annualships`) VALUES
(1, 1, 'LOS ANGELES', 'USA', 'Usa.jpg', 'USLAX', 'PortsOfLosAngeles.jpg', 'PortOfLosAngeles.gif', '', '1907', '33.74021 ', '-118.265 ', '425 South Palos Verdes Street San Pedro, CA, EE. UU. 90731', '+1 (310) 732-3508', 'community@portla.org', '30 km² ', '15.2 m', 13, 9169779, '', 6581),
(2, 1, 'Long Beach', 'USA', 'Usa.jpg', 'USLGB', 'PortOfLongBeach.jpg', 'longBeach1.gif', '', '24 de junio de 1911', '33.75493', '-118.21435 ', '415 W. Ocean Blvd.Long Beach, CA 90802\r\nP.O. Box 570 Long Beach, CA 90801', '+1 (562) 283-7000', 'info@polb.com', '3200 ac (13 km2)', '15,24 m', 10, 6730000, '', 8764),
(3, 1, 'Quequen', 'Argentina', 'Argentina.jpg', 'ARQQN', 'PortOfQuequen.jpg', 'PortOfQuequen.gif', '', '13 de febrero de 1911', ' -38.5736', ' -58.714715', 'Avenida 10 entre 63 y 61', '+54 (2262) 450006', 'directorio@puertoquequen.com', '7400 m2', '14 m', 13, 0, '7 Millones Toneladas Anuales', 312),
(4, 1, 'Santos', 'Brasil', 'Brasil.jpg', 'BRSSZ', 'PortsOfSantos.jpg', 'PortOfSantos.gif', '', '3 de febrero de 1894', '-23.95109', '-46.35358', '', '', '', '', '', 37, 3799999, '7 Millones Toneladas Anuales', 0),
(5, 1, 'Colon', 'Panama', 'Panama.jpg', 'PAONX', 'PortsOfColon.jpg', 'PortOfColon.gif', '', '', '9.36', '-79.9', '', '', '', '', '', 26, 0, '', 0),
(6, 2, 'Shanghái', 'China', 'China.jpj', 'CNSHG', 'PortsOfShanghai.jpg', 'PortOfShangai.gif', '', '', '31.366365', '121.61475', '', '', '', '', '', 1092, 33617000, '', 0),
(7, 2, 'Singapur', 'China', 'China.jpg', '', 'PortsOfSingapur.jpg', 'PortOfSingapur.gif', '', '1819', '1.1421', '103.4956', '460 Alexandra Road\r\n#19-00 PSA Building\r\nSingapore 119963\r\nSingapore', '6375 1639', 'qsm@mpa.gov.sg', '', '', 0, 32240000, '', 0),
(8, 2, 'Shenzhen', 'China', 'China.jpg', 'CNSZX', 'PortOfShenzen.jpg', 'PortOfShenzhen.gif', '', '', '22.5045', '113.8535', '', '', '', '', '', 32, 23278000, '', 0),
(9, 2, 'Ningbo-Zhoushan', 'China', 'China.jpg', '', 'PortOfNingbo-Zhoushan.jpg', 'PortOfNingboZhoushan.gif', '', '', '29.52', '121.33', '', '', '', '', '', 98, 16830000, '744 Millones', 0),
(10, 3, 'ROTTERDAM', 'Netherlands', 'Netherlands.jpg', 'NLRTM', 'PortOfRotterdam.jpg', 'PortOfRotterdam.gif', '', '', '51.943305', '4.141812', '', '', '', '', '', 154, 0, '', 0),
(11, 3, 'AMBERES', 'Belgica', 'Belgica.jpg', '', 'PortOfAmberes.jpg', 'PortOfAmberes.gif', '', '', '', '', '', '', '', '', '', 0, 0, '', 0),
(12, 3, 'HAMBURGO', 'Alemania', 'Alemania.jpg', 'SEHBO', 'PortOfHamburgo.jpg', 'PortOfHamburgo.gif', '', '', '58.551845', '11.268235', '', '', '', '', '', 0, 0, '', 0),
(13, 3, 'ALGECIRAS', 'España', 'Espana.jpg', 'ESALG', 'PortOfAlgeciras.jpg', 'PortOfAlgeciras.gif', '', '', '36.13672 ', '-5.434271 ', '', '', '', '', '', 60, 0, '', 0),
(14, 3, 'MARSELLA', 'Francia', 'Francia.jpg', '', 'PortOfMarsella.jpg', 'PortOfMarsella.gif', '', '', '', '', '', '', '', '', '', 0, 0, '', 0),
(15, 4, 'Djibuti', 'Yibuti', 'Yibuti.jpg', '', 'PortOfDjibuti.jpg', 'PortOfDjibouti.gif', '', '', '', '', '', '', '', '', '', 0, 0, '', 0),
(16, 4, 'Said', 'Egipto', 'Egipto.jpg', 'EGPSD', 'PortOfSaid.jpg', 'PortOfSaidEgipto.gif', '', '', '31.24478 ', '32.323 ', '', '', '', '', '', 21, 0, '', 0),
(17, 4, 'Saldanha Bay', 'Sudafrica', 'Sudafrica.jpg', 'ZASDB', 'PortOfSaldanhaBay.jpg', 'PortOfSaldanha.gif', '', '', '-33.02', '17.979', '', '', '', '', '', 26, 0, '', 0),
(18, 4, 'Damietta', 'Egipto', 'Egipto.jpg', '', 'PortOfDamietta.jpg', 'PortOfDamietta.gif', '', '', '', '', '', '', '', '', '', 0, 0, '', 0),
(19, 4, 'Apapa', 'Nigeria', 'Nigeria.jpg', 'NGLOS', 'PortOfApapa.jpg', 'PortOfApapa.gif', '', '', '6.4395 ', '3.3585 ', '', '', '', '', '', 92, 0, '', 0),
(20, 4, 'Casablanca', 'Marruecos', 'Marruecos.jpg', 'MACAS', 'PortOfCasablanca.jpg', 'PortOfCasaBlanca.gif', '', '', '33.61 ', '-7.599732 ', '', '', '', '', '', 29, 0, '', 0),
(21, 5, 'Sidney', 'Australia', 'Australia.jpg', 'CASDY', 'PortOfSidney.jpg', 'PortOfSidney.gif', '', '', '48.6522 ', '-123.393', '', '', '', '', '', 12, 0, '', 0),
(22, 5, 'MELBOURNE', 'Australia', 'Australia.jpg', 'AUMEL', 'PortOfMelborne.jpg', 'PortOfMelbrune.gif', '', '', '-37.838785 ', '144.93705', '', '', '', '', '', 76, 0, '', 0),
(23, 5, 'Hedland', 'Australia', 'Australia.jpg', 'AUPHE', 'PortOfHedland.jpg', 'PortOfHedland.gif', '', '', '-20.3165', '118.576 ', '', '', '', '', '', 55, 0, '', 0),
(24, 5, 'DAMPIER', 'Australia', 'Australia.jpg', 'AUDAM', 'PortOfDampier.jpg', 'PortOfDampier.gif', '', '', '-20.632725', '116.6732', '', '', '', '', '', 25, 0, '', 0),
(25, 5, 'BRISBANE', 'Australia', 'Australia.jpg', 'AUBNE', 'PortOfBrisbane.jpg', 'PortOfBrisban.gif', '', '', '-27.41807', '153.09555', '', '', '', '', '', 87, 0, '', 0),
(26, 5, 'WELLINGTON', 'Australia', 'Australia.jpg', 'NZWLG', 'PortOfWellington.jpg', 'PortOfWellington.gif', '', '', '-41.27235', '174.839', '', '', '', '', '', 16, 0, '', 0),
(27, 5, 'FREEMANTLE', 'Australia', 'Australia.jpg', '', 'PortOfFreemantle.jpg', 'PortOfFreemantle.gif', '', '', '', '', '', '', '', '', '', 0, 0, '', 0),
(28, 5, 'WEIPA', 'Australia', 'Australia.jpg', 'AUWEI', 'PortOfWeipa.jpg', 'PortOfWeipa.gif', '', '', '-12.66815', '141.85935 ', '', '', '', '', '', 9, 0, '', 0),
(29, 5, 'KEMBLA', 'Australia', 'Australia.jpg', 'AUPKL', 'PortOfKembla.jpg', 'PortOfKembla.gif', '', '', '-34.4655 ', '150.9015', '', '', '', '', '', 11, 0, '', 0),
(30, 5, 'ABBOT POINT', 'Australia', 'Australia.jpg', 'AUABP', 'PortOfAbbotPoint.jpg', 'PortOfAbbotpoint.gif', '', '', '-19.86554', '148.0835 ', '', '', '', '', '', 4, 0, '', 0),
(31, 5, 'BUNBURY', 'Australia', 'Australia.jpg', 'AUBUY', 'PortOfBunbury.jpg', 'PortOfBunbury.gif', '', '', '-33.30988', '15.65855', '', '', '', '', '', 8, 0, '', 0),
(32, 4, 'Skikda', 'Argelia', 'Argelia.jpg', 'DZSKI', 'PortOfSkikda.jpg', 'PortOfSkikda.gif', '', '', '36.88537', '6.924', '', '', '', '', '', 6, 0, '', 0),
(33, 4, 'Pointe Noire', 'Congo', 'Congo.jpg', '', 'PortOfPointeNoire.jpg', 'PortOfPointeNoir.gif', '', '', '', '', '', '', '', '', '', 0, 0, '', 0),
(34, 4, 'Mombasa', 'Kenia', 'Kenia.jpg', 'KEMBA', 'PortOfMombasa.jpg', 'PortOfMombasaKenia.gif', '', '', '-4.0475', '39.635', '', '', '', '', '', 35, 0, '', 0),
(35, 4, 'Abiyán ', 'CostadeMarfil', 'CostadeMarfil.jpg', '', 'PortOfAbiyan.jpg', 'PortOfbiyan.gif', '', '', '', '', '', '', '', '', '', 0, 0, '', 0),
(36, 4, 'Tanger', 'Marruecos', 'Marruecos.jpg', 'MAPTM', 'PortOfTanger.jpg', 'PortOfTanger.gif', '', '', '35.895 ', '-5.4945 ', '', '', '', '', '', 17, 0, '', 0),
(37, 4, 'Bejaia', 'Argelia', 'Argelia.jpg', 'DZBJA', 'PortOfBejaia.jpg', 'PortOfBejaio.gif', '', '', '36.74925 ', '5.08991 ', '', '', '', '', '', 11, 0, '', 0),
(38, 4, 'Jorf Lasfar', 'Marruecos', 'Marruecos.jpg', 'MAJFL', 'PortOfJorfLasfar.jpg', 'PortOfJorfLasfar.gif', '', '', '33.123 ', '-8.631', '', '', '', '', '', 14, 0, '', 0),
(39, 4, 'Tin Can Island', 'Nigeria ', 'Nigeria.jpg', '', 'PortOfTinCanIsland.jpg', 'PortOfTinCanIsland.gif', '', '', '', '', '', '', '', '', '', 0, 0, '', 0),
(40, 4, 'Durban', 'Sudafrica', 'Sudafrica.jpg', 'ZADUR', 'PortOfDurban.jpg', 'PortOfDurban.gif', '', '', '-29.881', '31.0265', '', '', '', '', '', 71, 0, '', 0),
(41, 3, 'GIOIA', 'Italia', 'Italia.jpg', 'ITGIT', 'PortOfGioia.jpg', 'PortOfGioia.gif', '', '', '38.45494', '15.901825 ', '', '', '', '', '', 11, 0, '', 0),
(42, 3, 'BREMEN', 'Alemania', 'Alemania.jpg', '', 'PortOfBremen.jpg', 'PortOfBremen.gif', '', '', '', '', '', '', '', '', '', 0, 0, '', 0),
(43, 3, 'VALENCIA', 'España', 'Espana.jpg', 'ESVLC', 'PortOfValencia.jpg', 'PortOfValencia.gif', '', '', '39.44231', '-0.31646595 ', '', '', '', '', '', 117, 0, '', 0),
(44, 3, 'LE HAVRE', 'Francia', 'Francia.jpg', 'FRLEH', 'PortOfLeHavre.jpg', 'PortOfLeHavre.gif', '', '', '49.472655', '0.14620419', '', '', '', '', '', 82, 0, '', 0),
(45, 3, 'GÉNOVA', 'Italia', 'Italia.jpg', 'ITGOA', 'PortOfGenova.jpg', 'PortOfGenova.gif', '', '', '44.403545', '8.909109', '', '', '', '', '', 125, 0, '', 0),
(46, 3, 'DUNKERQUE', 'Francia', 'Francia.jpg', 'FRDKK', 'PortOfDunkerque.jpg', 'PortOfDurkeque.gif', '', '', '51.04113 ', '51.04113 ', '', '', '', '', '', 51, 0, '', 0),
(47, 3, 'BARCELONA', 'España', 'Espana.jpg', 'ESBCN', 'PortOfBarcelona.jpg', 'PortOfBarcelona.gif', '', '', '41.352375', '2.158441', '', '', '', '', '', 110, 0, '', 0),
(48, 3, 'AARHUS', 'Dinamarca', 'Dinamarca.jpg', 'DKAAR', 'PortOfAarhus.jpg', 'PortOfAarhus.gif', '', '', '56.154', '10.2295', '', '', '', '', '', 19, 0, '', 0),
(49, 3, 'CAGLIARI', 'Italia', 'Italia.jpg', 'ITCAG', 'PortOfCagliari.jpg', 'PortOfCagliari.gif', '', '', '39.206115 ', '9.1140775', '', '', '', '', '', 29, 0, '', 0),
(50, 3, 'FELIXSTOWE', 'Inglaterra', 'Inglaterra.jpg', 'GBFXT', 'PortOfFelixstowe.jpg', 'PortOfFelixstowe.gif', '', '', '51.959055', '1.2981075 ', '', '', '', '', '', 19, 0, '', 0),
(51, 3, 'SOUTHAMPTON', 'Inglaterra', 'Inglaterra.jpg', 'GBSOU', 'PortOfSouthampton.jpg', 'PortOfShouthsmpton.gif', '', '', '50.898175', '-1.4205025 ', '', '', '', '', '', 55, 0, '', 0),
(52, 3, 'LAS PALMAS', 'España', 'Espana.jpg', 'ESLPA', 'PortOfLasPalmas.jpg', 'PortOfLasPalmas.gif', '', '', '28.141', '-15.41635 ', '', '', '', '', '', 146, 0, '', 0),
(53, 3, 'SANTA CRUZ DE TENERIFE', 'España', 'Espana.jpg', 'ESSCT', 'PortOfSantaCruzTenerife.jpg', 'PortOfSantaCruzdeTenerife.gif', '', '', '28.480055', '-16.23424', '', '', '', '', '', 31, 0, '', 0),
(54, 3, 'DUISBURG', 'Alemania', 'Alemania.jpg', '', 'PortOfDuisburg.jpg', 'PortOfDuisburg.gif', '', '', '', '', '', '', '', '', '', 0, 0, '', 0),
(55, 3, 'SAN PETERSBURGO', 'Rusia', 'Rusia.jpg', '', 'PortOfSanPetersburgo.jpg', 'PortOfSanPetersburgo.gif', '', '', '', '', '', '', '', '', '', 0, 0, '', 0),
(57, 2, 'Penang', 'Malasia', 'Malasia.jpg', 'MYPEN', 'PortOfPenang.jpg', 'PortOfPennang.gif', '', '', '5.4025', '100.347', '', '', '', '', '', 44, 0, '', 0),
(58, 2, 'Hong Kong', 'China', 'China.jpg', ' HKHKG', 'PortOfHongKong.jpg', 'PortOfHongKong.gif', '', '', '22.287945', '114.18135', '', '', '', '', '', 476, 22352000, '', 0),
(59, 2, 'Busan', 'Corea del Sur', 'Corea.jpg', 'KRPUS', 'PortOFBusan.jpg', 'PortOfBusan.gif', '', '', '35.10162 ', '129.03605', '', '', '', '', '', 490, 0, '', 0),
(60, 2, 'Guangzhou', 'china', 'China.jpg', 'CNCAN', 'PortOfGuangzhou.jpg', 'PortOfGuanzhou.gif', '', '', '23.0855', '113.425 ', '', '', '', '', '', 236, 0, '', 0),
(61, 2, 'Qingdao', 'China', 'China.jpg', 'CNQDG', 'PortOfQingdao.jpg', 'PortOfQingdao.gif', '', '', '36.05661', '120.3201', '', '', '', '', '', 157, 0, '', 0),
(62, 2, 'Tianjin', 'China', 'China.jpg', 'CNTXG', 'PortOfTianjin.jpg', 'PortOfTianjin.gif', '', '', '38.96904', '117.73725 ', '', '', '', '', '', 256, 0, '', 0),
(63, 2, 'Dalian', 'China', 'China.jpg', 'CNDLC', 'PortOfDalian.jpg', 'PortOfDalian.gif', '', '', '38.997475', '121.7645', '', '', '', '', '', 157, 0, '', 0),
(64, 2, 'Xiamen', 'China', 'China.jpg', 'CNXMG', 'PortsOfXiamen.jpg', 'PortOfXiamen.gif', '', '', '24.503175', '118.02925', '', '', '', '', '', 360, 0, '', 0),
(65, 2, 'Lianyungang', 'China', 'China.jpg', 'CNLYG', 'PortsOfLianyungang.jpg', 'PortOfLianyungang.gif', '', '', '34.79039', '119.56655', '', '', '', '', '', 117, 0, '', 0),
(66, 2, 'Yingkou', 'China', 'China.jpg', 'CNYIK', 'PortOfYingkou.jpg', 'PortOfYingkou.gif', '', '', '40.693625 ', '122.26615 ', '', '', '', '', '', 0, 0, '', 0),
(67, 2, 'Jeddah', 'Arabia Saudita', 'ArabiaSaudita.jpg', ' SAJED', 'PortOfJeddah.jpg', 'PortOfJeddah.gif', '', '', '21.48182', '39.147125 ', '', '', '', '', '', 42, 0, '', 0),
(68, 2, 'Colombo', 'Sri Lanka', 'SriLanka.jpg', 'LKCMB', 'PortOfColombo.jpg', 'PortOfColombo.gif', '', '', '6.9535', '79.8465', '', '', '', '', '', 76, 0, '', 0),
(69, 2, 'Jawaharlal Nehru', 'India', 'India.jpg', 'INNSA', 'PortOfJawaharlalNehru.jpg', 'PortOfJawaharlaNehru.gif', '', '', '18.952', '72.948', '', '', '', '', '', 28, 0, '', 0),
(70, 2, 'Sarjah', 'UAE', 'UAE.jpg', '', 'PortOfSarjah.jpg', 'PortOfSarjah.gif', '', '', '', '', '', '', '', '', '', 0, 0, '', 0),
(71, 2, 'Manila', 'Filipinas', 'Filipinas.jpg', '', 'PortOfManila.jpg', 'PortOfManila.gif', '', '', '', '', '', '', '', '', '', 0, 0, '', 0),
(72, 2, 'Ambarli Estambul', 'Turquia', 'Turquia.jpg', '', 'PortOfAmbarliEstambul.jpg', 'PortOfAmbarEstambul.gif', '', '', '', '', '', '', '', '', '', 0, 0, '', 0),
(73, 2, 'Salalah', 'Oman', 'Oman.jpg', 'OMSLL', 'PortOfSalalah.jpg', 'PortOfSalalah.gif', '', '', '16.953125', '54.00435', '', '', '', '', '', 15, 0, '', 0),
(74, 1, 'Balboa', 'Panama', 'Panama.jpg', 'PABLB', 'PortsOfBalbao.jpg', 'PortOfBalbao.gif', '', '', '8.9456', '79.565', '', '', '', '', '', 94, 0, '', 0),
(75, 1, 'Manzanillo', 'Mexico', 'Mexico.jpg', 'MXZLO', 'PortsOfManzanillo.jpg', 'PortOfManzanillo.gif', '', '', '19.07729 ', '-104.3225', '', '', '', '', '', 35, 0, '', 0),
(76, 1, 'Cartagena', 'Colombia', 'Colombia.jpg', 'COCTG', 'PortsOfCartagena.jpg', 'PortOfCartagena.gif', '', '', '10.401215', '-75.52856 ', '', '', '', '', '', 33, 0, '', 0),
(77, 1, 'Callao', 'Peru', 'Peru.jpg', 'PECLL', 'PortsOfCallao.jpg', 'PortOfCallao.gif', '', '', '-12.04688', '-77.148475', '', '', '', '', '', 74, 0, '', 0),
(78, 1, 'Guayaquil', 'Ecuador', 'Ecuador.jpg', 'ECGYE', 'PortsOfGuayaquil.jpg', 'PortOfGuayaquil.gif', '', '', '-2.256039', '-79.94373 ', '', '', '', '', '', 7, 0, '', 0),
(79, 1, 'Kingston', 'Jamaica', 'Jamaica.jpg', 'JMKIN', 'PortsOfKingston.jpg', 'PortOfKingstone.gif', '', '', '17.96845', '-76.785055', '', '', '', '', '', 2, 0, '', 0),
(80, 1, 'Buenos Aires', 'Argentina', 'Argentina.jpg', 'ARBUE', 'PortsOfBuenosAires.jpg', 'PortOfBuenosAires.gif', '', '01 enero de 1801', '-34.61161', '-58.367685', 'Avenida Ingeniero Huergo 431, Buenos Aires', '', '', '', '', 19, 0, '', 0),
(81, 1, 'San Antonio', 'Chile', 'Chile.jpg', 'CLSAI', 'PortsOfSanAntonio.jpg', 'PortOfSanAntonio.gif', '', '', '-33.5875', '-71.618285', '', '', '', '', '', 2, 0, '', 0),
(82, 1, 'Limón Moin', 'Costa Rica', 'CostaRica.jpg', 'CRLIO', 'PortsOfLimonMoins.jpg', 'PortOfLimonMoin.gif', '', '', '9.9873', '83.0213', '', '', '', '', '', 20, 0, '', 0),
(83, 1, 'Lázaro Cárdenas', 'Mexico', 'Mexico.jpg', 'MXLZC', 'PortsOfLazaroCardenas.jpg', 'PortOfLazaroCardena.gif', '', '', '17.953755', '-102.16215', '', '', '', '', '', 4, 0, '', 0),
(84, 1, 'Veracruz', 'Mexico', 'Mexico.jpg', 'MXVER', 'PortsOfVeracruz.jpg', 'PortOfVeracruz.gif', '', '', '19.198905', '-96.130025', '', '', '', '', '', 6, 0, '', 0),
(85, 1, 'Caucedo', 'República Dominicana', 'RepublicaDominicana.jpg', 'DOCAU', 'PortsOfCaucedo.jpg', 'PortOfCaudedo.gif', '', '', ' 18.42541', '-69.6285', '', '', '', '', '', 2, 0, '', 0),
(86, 1, 'New York and New Jersey', 'USA', 'Usa.jpg', 'USNYC', 'PortsOfNewYork.jpg', 'PortOfNewYorkNewJersey.gif', '', '', '40.01 ', '-74.12 ', '', '', '', '', '', 58, 0, '', 0),
(87, 1, 'Houston', 'USA', 'Usa.jpg', 'USHOU', 'PortsOfHouston.jpg', 'PortOfHouston.gif', '', '', '29.6523', '94.9857', '', '', '', '', '', 43, 0, '', 0),
(88, 1, 'Montreal', 'Canada', 'Canada.jpg', 'CAMTR', 'PortsOfMontreal.jpg', 'PortOfMontreal.gif', '', '', '45.557015', '-73.516735 ', '', '', '', '', '', 43, 0, '', 0),
(89, 1, 'Charleston', 'USA', 'Usa.jpg', 'USCHS', 'PortsOfCharleston.jpg', 'PortOfCharleston.gif', '', '', '32.79487', '-79.914565 ', '', '', '', '', '', 37, 0, '', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `databaseports`
--
ALTER TABLE `databaseports`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `databaseports`
--
ALTER TABLE `databaseports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
