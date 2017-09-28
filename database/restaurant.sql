-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 08, 2017 at 03:24 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `restaurant`
--
CREATE DATABASE IF NOT EXISTS `restaurant` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `restaurant`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `txt_name` varchar(20) NOT NULL,
  `txt_email` varchar(60) NOT NULL,
  `txt_password` varchar(250) NOT NULL,
  `path` varchar(200) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `txt_name`, `txt_email`, `txt_password`, `path`, `status`) VALUES
(4, 'krupali', 'krupspatel789@gmail.com', 'krupali', '', 1),
(5, 'krups', 'krupspatel789@gmail.com', 'krups', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE IF NOT EXISTS `tbl_book` (
  `book_id` int(30) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `s_dt` date NOT NULL,
  `e_dt` date NOT NULL,
  `tot_price` varchar(7) NOT NULL,
  `book_status` int(10) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `usermsg` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `username`, `useremail`, `usermsg`) VALUES
(1, 'abc', 'abc@.com', 'junagadh road'),
(2, 'def', 'b@g.com', 'jkasfajikuhfdkhfik '),
(3, 'abc', 'ab@gmail.com', 'rudu kathiyawad ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_type`
--

CREATE TABLE IF NOT EXISTS `tbl_room_type` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `room_nm` varchar(20) NOT NULL,
  `room_des` varchar(50) NOT NULL,
  `room_no` varchar(50) NOT NULL,
  `room_rate` varchar(10) NOT NULL,
  `room_path` varchar(250) NOT NULL,
  `room_status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tbl_room_type`
--

INSERT INTO `tbl_room_type` (`id`, `room_nm`, `room_des`, `room_no`, `room_rate`, `room_path`, `room_status`) VALUES
(21, 'Non A/c Room', 'A single bedroom with a fan .. Its a non a/c room', '20', '1500', 'room2.JPG', 1),
(22, 'A/c Room', 'A bedroom having facility of A/c ', '20', '3000', 'room3.jpg', 1),
(23, 'Deluxe Room', 'A bedroom with small swimming pool inside it.', '20', '9000 ', 'room4.jpg', 1),
(24, 'Presidential Room', 'Room with a multi Bed,with a open balcony', '15', '10000', 'room1.JPG', 1),
(29, 'Deluxe Room', 'ac with multispecialist room', '2', '5000', 'h12.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(250) NOT NULL,
  `unm` varchar(30) NOT NULL,
  `password` varchar(250) NOT NULL,
  `c_password` varchar(250) NOT NULL,
  `city` varchar(20) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `unm`, `password`, `c_password`, `city`, `mobile`, `photo`, `status`) VALUES
(15, 'krupali', 'krupspatel789@gmail.com', 'krups', 'krups', 'krups', 'jetpur', '9978784455', '../admin/img/IMG-20170131-WA0013.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_tbl_book`
--

CREATE TABLE IF NOT EXISTS `tmp_tbl_book` (
  `book_id` int(30) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `s_dt` varchar(25) NOT NULL,
  `e_dt` varchar(25) NOT NULL,
  `tot_price` varchar(7) NOT NULL,
  `book_status` int(10) NOT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tmp_tbl_book`
--

INSERT INTO `tmp_tbl_book` (`book_id`, `user_id`, `room_id`, `s_dt`, `e_dt`, `tot_price`, `book_status`) VALUES
(3, 2, 20, '20-AUG-2015', '23-AUG-2015', '23664', 1),
(4, 2, 20, '21-AUG-2015', '23-AUG-2015', '15776', 1),
(5, 2, 13, '09-SEP-2015', '12-SEP-2015', '0', 1),
(6, 2, 13, '09-SEP-2015', '12-SEP-2015', '0', 1),
(7, 2, 13, '09-SEP-2015', '12-SEP-2015', '0', 1),
(8, 2, 20, '09-OCT-2015', '11-OCT-2015', '15776', 1),
(9, 4, 20, '19-SEP-2015', '23-SEP-2015', '31552', 1),
(10, 4, 20, '12-SEP-2015', '16-SEP-2015', '31552', 1),
(11, 4, 19, '18-SEP-2015', '20-SEP-2015', '6000', 1),
(12, 4, 19, '18-SEP-2015', '20-SEP-2015', '6000', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
