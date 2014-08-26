-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2014 at 10:45 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `pic_id` int(11) NOT NULL AUTO_INCREMENT,
  `pic_name` varchar(250) NOT NULL,
  `catalogue_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date_added` int(11) NOT NULL,
  `is_public` tinyint(1) DEFAULT NULL,
  `likes_count` int(11) NOT NULL,
  PRIMARY KEY (`pic_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `pictures`
--

INSERT INTO `pictures` (`pic_id`, `pic_name`, `catalogue_id`, `comment`, `date_added`, `is_public`, `likes_count`) VALUES
(1, '1408901785_flowers.jpg', 1, 'This is funny picture with flowers.', 1408901785, 1, 0),
(2, '1408906056_happyDog.JPG', 1, 'This is a picture of a happy dog.', 1408906056, 1, 0),
(3, '1408915702_smile.jpg', 1, 'Sunny picture with flowers', 1408915702, 0, 0),
(4, '1408915869_smile.jpg', 1, 'Sunny picture with flowers', 1408915869, 0, 0),
(5, '1408915967_smile.jpg', 1, 'Sunny picture with flowers', 1408915967, 0, 0),
(6, '1408916063_smile.jpg', 1, 'Sunny picture with flowers', 1408916063, 0, 0),
(7, '1408916308_smile.jpg', 1, 'Sunny picture with flowers', 1408916308, 0, 0),
(8, '1408916347_smile.jpg', 1, 'Sunny picture with flowers', 1408916347, 0, 0),
(9, '1408916532_smile.jpg', 1, 'Sunny picture with flowers', 1408916532, 0, 0),
(10, '1408916581_smile.jpg', 1, 'Sunny picture with flowers', 1408916581, 0, 0),
(11, '1408916631_smile.jpg', 1, 'Sunny picture with flowers', 1408916631, 0, 0),
(12, '1408916652_smile.jpg', 1, 'Sunny picture with flowers', 1408916652, 0, 0),
(13, '1408916712_smile.jpg', 1, 'Sunny picture with flowers', 1408916712, 0, 0),
(14, '1408916723_smile.jpg', 1, 'Sunny picture with flowers', 1408916723, 0, 0),
(15, '1408916798_smile.jpg', 1, 'Sunny picture with flowers', 1408916798, 0, 0),
(16, '1408916909_smile.jpg', 1, 'Sunny picture with flowers', 1408916909, 0, 0),
(17, '1408916920_smile.jpg', 1, 'Sunny picture with flowers', 1408916920, 0, 0),
(18, '1408916950_smile.jpg', 1, 'Sunny picture with flowers', 1408916950, 0, 0),
(19, '1408982327_усмивка.jpg', 1, '', 1408982328, 0, 0),
(20, '1408982487_усмивка.jpg', 1, '', 1408982487, 0, 0),
(21, '1408985402_ogange-roses.jpg', 1, '', 1408985413, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `date_reg` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `login`, `pass`, `date_reg`) VALUES
(1, 'guest', 'e10adc3949ba59abbe56e057f20f883e', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `user_catalogues`
--

CREATE TABLE IF NOT EXISTS `user_catalogues` (
  `catalogue_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`catalogue_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user_catalogues`
--

INSERT INTO `user_catalogues` (`catalogue_id`, `user_id`, `name`) VALUES
(1, 1, 'catalogue1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
