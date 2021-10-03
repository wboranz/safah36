-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Anamakine: localhost
-- Üretim Zamanı: 17 Eylül 2010 saat 01:56:45
-- Sunucu sürümü: 5.1.47
-- PHP Sürümü: 5.2.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- --------------------------------------------------------

--
-- Tablo yapısı: `bilgi`
--

CREATE TABLE `bilgi` (
  `siteadi` varchar(100) CHARACTER SET latin5 NOT NULL,
  `siteurl` varchar(100) NOT NULL,
  `adiniz` varchar(30) CHARACTER SET latin5 NOT NULL,
  `soyadiniz` varchar(30) CHARACTER SET latin5 NOT NULL,
  `dyili` int(4) NOT NULL,
  `dyeri` varchar(30) CHARACTER SET latin5 NOT NULL,
  `resim` varchar(50) NOT NULL,
  `hakkimda` text CHARACTER SET latin5 NOT NULL,
  `meslek` varchar(30) CHARACTER SET latin5 NOT NULL,
  `hobiler` varchar(50) CHARACTER SET latin5 NOT NULL,
  `email` varchar(30) NOT NULL,
  `sifre` varchar(30) CHARACTER SET latin5 NOT NULL,
  `cept` varchar(11) NOT NULL DEFAULT '-',
  `evt` varchar(11) NOT NULL DEFAULT '-',
  `ist` varchar(11) NOT NULL DEFAULT '-'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `bilgi`
--


-- --------------------------------------------------------

--
-- Tablo yapısı: `resim`
--

CREATE TABLE `resim` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `isim` varchar(100) CHARACTER SET latin5 NOT NULL,
  `resimurl` varchar(100) NOT NULL,
  `aciklama` text CHARACTER SET latin5 NOT NULL,
  `boyut` int(11) NOT NULL DEFAULT '0',
  `tur` varchar(30) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Tablo döküm verisi `resim`
--


-- --------------------------------------------------------

--
-- Tablo yapısı: `yorum`
--

CREATE TABLE `yorum` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `yazan` varchar(50) CHARACTER SET latin5 NOT NULL,
  `yorum` text CHARACTER SET latin5 NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Tablo döküm verisi `yorum`
--
