-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 20, 2024 at 08:12 AM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qltin`
--
CREATE DATABASE `qltin` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `qltin`;

-- --------------------------------------------------------

--
-- Table structure for table `baidang`
--

DROP TABLE IF EXISTS `baidang`;
CREATE TABLE IF NOT EXISTS `baidang` (
  `maso` bigint(11) NOT NULL AUTO_INCREMENT,
  `chuyenmuc` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8_unicode_ci NOT NULL,
  `diadiem` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`maso`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=86 ;

--
-- Dumping data for table `baidang`
--

INSERT INTO `baidang` (`maso`, `chuyenmuc`, `noidung`, `diadiem`, `email`) VALUES
(1, 'NhaDat', 'DÃ²ng tiá»n lÃ  lá»£i nhuáº­n thu Ä‘Æ°á»£c tá»« viá»‡c khai tÃ¡c cho thuÃª theo chu ká»³ háº±ng thÃ¡ng, háº±ng quÃ½ hoáº·c háº±ng nÄƒm. KÃªnh Ä‘áº§u tÆ° dÃ²ng tiá»n phá»• biáº¿n lÃ  mua Ä‘áº¥t xÃ¢y cÃ´ng trÃ¬nh Ä‘á»ƒ cho thuÃª hoáº·c thuÃª nhÃ  rá»“i cho thuÃª láº¡i.\r\n\r\nÆ¯u Ä‘iá»ƒm cá»§a hÃ¬nh thá»©c nÃ y lÃ  sá»± á»•n Ä‘á»‹nh vÃ  an toÃ n. Chá»§ Ä‘áº§u tÆ° khÃ´ng pháº£i chá» Ä‘á»£i thá»i gian dÃ i mÃ  cÃ³ thá»ƒ nhanh chÃ³ng thu vá» lá»£i nhuáº­n. VÃ­ dá»¥ há» bá» ra khoáº£ng 500 triá»‡u Ä‘á»ƒ thuÃª má»™t cÄƒn chung cÆ° má»›i rá»“i cho ngÆ°á»i khÃ¡c thuÃª láº¡i.', 'HaNoi', 'tva@gmail.com'),
(83, 'OTo_XeMay', 'CÃ¡c loáº¡i xe mÃ¡y Yamaha má»›i nháº¥t, Ä‘a dáº¡ng phong cÃ¡ch, cho báº¡n thoáº£i mÃ¡i lá»±a chá»n theo nhu cáº§u: Xe tay ga tráº» trung, phong cÃ¡ch, tÃ­ch há»£p hÃ ng loáº¡t cÃ´ng nghá»‡ thÃ´ng minh nhÆ° Grande, Janus, NVX, Freego, Latte,...; Xe sá»‘ gá»n nháº¹, bá»n bá»‰ cÃ¹ng thá»i gian vá»›i Exciter, Jupiter FI, Jupiter Finn, Sirius, Sirius FI,...', 'TP.HoChiMinh', 'tvb@gmail.com'),
(84, 'MayTinh', 'Mua mÃ¡y tÃ­nh xÃ¡ch tay laptop giÃ¡ ráº» táº¡i Äiá»‡n mÃ¡y Xanh, giao nhanh 2 giá», Ä‘a dáº¡ng máº«u mÃ£ má»›i nháº¥t 2023, báº£o hÃ nh toÃ n quá»‘c. CÃ  tháº» táº¡i nhÃ , tráº£ gÃ³p 0%.', 'HaNoi', 'tvc@gmail.com'),
(85, 'DienThoai', 'Má»™t sá»‘ máº«u Ä‘iá»‡n thoáº¡i trong táº§m giÃ¡ cao trÃªn 14 triá»‡u Ä‘á»“ng cÃ³ thá»ƒ ká»ƒ Ä‘áº¿n nhÆ°: iPhone 14/14 Plus/14 Pro/14 Pro Max; Samsung Galaxy Z Fold5/Flip5; Samsung Galaxy ...\r\n1.990.000 â‚« - 30.990.000 â‚«', 'ToanQuoc', 'tvd@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
