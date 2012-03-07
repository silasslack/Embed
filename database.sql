-- phpMyAdmin SQL Dump
-- version 3.3.2deb1ubuntu1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 07, 2012 at 04:15 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.2-1ubuntu4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `P-EMBED`
--

-- --------------------------------------------------------

--
-- Table structure for table `CONTENT`
--

CREATE TABLE IF NOT EXISTS `CONTENT` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `USER` varchar(50) NOT NULL,
  `HEADING_1` varchar(50) NOT NULL,
  `HEADING_2` varchar(50) NOT NULL,
  `CONTENT` text NOT NULL,
  `DATE_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `failed_attempts` int(11) NOT NULL,
  `locked` enum('0','1') NOT NULL,
  `unlock` timestamp NULL DEFAULT NULL,
  `displayname` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL DEFAULT '',
  `passwd` varchar(32) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `admin` enum('2','1','0') NOT NULL,
  `settingsprofile` int(2) NOT NULL,
  `maincontact` enum('1','0') NOT NULL DEFAULT '0',
  `expires` date DEFAULT NULL,
  `TAG_1_ST` varchar(255) NOT NULL DEFAULT '<h3>',
  `TAG_1_END` varchar(255) NOT NULL DEFAULT '</h3>',
  `TAG_2_ST` varchar(255) NOT NULL DEFAULT '<h4>',
  `TAG_2_END` varchar(255) NOT NULL DEFAULT '</h4>',
  `TAG_3_ST` varchar(255) NOT NULL DEFAULT '<p>',
  `TAG_3_END` varchar(255) NOT NULL DEFAULT '</p>',
  `TAG_OUTER_ST` varchar(255) NOT NULL DEFAULT '<div>',
  `TAG_OUTER_END` varchar(255) NOT NULL DEFAULT '</div>',
  `IMAP_HOST` varchar(100) NOT NULL,
  `IMAP_USER` varchar(100) NOT NULL,
  `IMAP_PASSWORD` varchar(100) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=90 ;
