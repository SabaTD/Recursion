-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2016 at 02:08 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products`
--

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(255) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `parent_id`, `type`, `description`, `price`, `image`, `status`) VALUES
(1, 'Home 22222222222', 0, 1, '', 0, '', 0),
(2, 'About', 0, 1, '', 0, '', 0),
(3, 'Services 3', 0, 1, '', 0, '', 0),
(4, 'Contact', 0, 1, '', 0, '', 0),
(5, 'Online Services', 3, 1, '', 0, '', 0),
(6, 'Family Services', 3, 1, '', 0, '', 0),
(43, 'submenu of about 13232', 2, 1, '', 0, '', 0),
(44, 'submenu of contact 1', 4, 1, '', 0, '', 0),
(45, 'Contact Item 1', 44, 2, '', 0, '', 0),
(47, 'Item of online services one22222222', 5, 2, '', 0, '', 0),
(48, 'Item of family services one', 6, 2, '', 0, '', 0),
(49, 'Item of family services two 4444', 5, 2, '', 0, '', 0),
(56, 'Submenu of home first', 1, 1, '', 0, '', 0),
(57, 'Submenu of home Second', 1, 1, '', 0, '', 0),
(58, 'about first child', 2, 1, '', 0, '', 0),
(77, 'Item of home Second', 57, 2, 'sdsd', 0, '', 0),
(78, 'Item of home First', 57, 2, '', 0, '', 0),
(79, 'Item of home Four', 57, 2, '', 0, '', 0),
(80, 'Family Services item 1', 6, 2, 'Family Services item 1 Family Services item 1', 45, '', 0),
(86, 'family item from menu', 6, 2, 'ssdsd', 0, '', 0),
(89, 'item of contact 1', 44, 2, 'ct 1 item of contact 1 item of contact 1 item of contact 1 item of contact 1 vitem of contact 1 item of contact 1 item of contact 1 item of contact 1 item of contact 1 item of contact 1 item of contact 1 item of contact 1 item of contact 1 ', 43, 'images/fulls/f_1474881435.jpg', 0),
(90, 'services item 1', 3, 2, 'services item 1 services item 1 services item 1 services item 1 services item 1services item 1services item 1services item 1', 23, 'images/fulls/f_1474885900.jpg', 1),
(92, 'Submenu of home first iTem first', 56, 2, 'Item FIrst Item FIrst Item FIrst Item FIrst Submenu of home first Submenu of home first Submenu of home first Submenu of home first Submenu of home first ', 5, 'images/fulls/f_1474889437.jpg', 0),
(93, 'sdsd', 1, 2, 'sdsd', 0, 'images/fulls/f_1474889618.jpg', 1),
(94, 'sdsd', 1, 2, 'sdsd', 500, 'images/fulls/f_1474889678.jpg', 1),
(95, 'sdsd', 1, 2, 'sdsd', 700, 'images/fulls/f_1474889763.jpg', 0),
(96, 'sdsd', 1, 2, 'ss', 0, 'images/fulls/f_1474891316.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
