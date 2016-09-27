-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2016 at 02:02 PM
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
  `menu_name` varchar(50) NOT NULL,
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
(1, 'Home', 0, 1, '', 0, '', 0),
(2, 'About', 0, 1, '', 0, '', 0),
(3, 'Services 3', 0, 1, '', 0, '', 0),
(4, 'Contact', 0, 1, '', 0, '', 0),
(5, 'Online Services', 3, 1, '', 0, '', 0),
(6, 'Family Services', 3, 1, '', 0, '', 0),
(43, 'submenu of about 13232', 2, 1, '', 0, '', 0),
(44, 'submenu of contact 1', 4, 1, '', 0, '', 0),
(45, 'Contact Item 1 2222222222', 44, 2, '222222222222222 33333333333333333333333333', 3700, 'images/fulls/f_1474969562.png', 1),
(47, 'Item of online services one22222222', 5, 2, '', 0, '', 1),
(48, 'Item of family services one', 6, 2, '', 0, '', 1),
(49, 'Item of family services two 4444', 5, 2, '', 0, '', 1),
(56, 'Submenu of home first', 1, 1, '', 0, '', 0),
(57, 'Submenu of home Second', 1, 1, '', 0, '', 0),
(58, 'about first child', 2, 1, '', 0, '', 0),
(77, 'Item of home Second', 57, 2, 'sdsd', 0, '', 0),
(78, 'Item of home First', 57, 2, '', 0, '', 1),
(79, 'Item of home Four', 57, 2, '', 0, '', 0),
(80, 'Family Services item 1', 6, 2, 'Family Services item 1 Family Services item 1', 45, '', 1),
(86, 'family item from menu', 6, 2, 'ssdsd', 0, '', 1),
(89, 'item of contact 1', 44, 2, '', 0, 'images/fulls/f_1474881435.jpg', 0),
(90, 'services item 1', 3, 2, 'services item 1 services item 1 services item 1 services item 1 services item 1services item 1services item 1services item 1', 23, 'images/fulls/f_1474885900.jpg', 1),
(92, 'Submenu of home first iTem first', 56, 2, 'Item FIrst Item FIrst Item FIrst Item FIrst Submenu of home first Submenu of home first Submenu of home first Submenu of home first Submenu of home first ', 5, 'images/fulls/f_1474889437.jpg', 0),
(93, 'sdsd', 1, 2, 'sdsd', 0, 'images/fulls/f_1474889618.jpg', 1),
(94, 'sdsd', 1, 2, 'sdsd', 500, 'images/fulls/f_1474889678.jpg', 1),
(95, '1111111111111111111', 1, 2, '', 0, 'images/fulls/f_1474889763.jpg', 1),
(96, 'sdsd', 1, 2, '', 0, 'images/fulls/f_1474891316.jpg', 1),
(97, '1323', 2, 2, '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor ', 733, 'images/fulls/f_1474953105.jpg', 0),
(98, 'sdsdsd', 2, 2, 'Item FIrst Item FIrst Item FIrst Item FIrst ', 733, 'images/fulls/f_1474953521.jpg', 0),
(99, 'sdsd', 2, 2, 'sdsd', 733, '', 1),
(100, 'sdsd', 2, 2, 'sdsd', 778, '', 1),
(101, 'sdsd', 2, 2, 'sdsd', 778, '', 1),
(102, 'sddd sddd sddd vsddd sddd sdddv sdddsdddsdddsdddsd', 1, 2, '', 0, '', 1),
(103, '2112sadsadsadsad', 1, 2, '', 0, '', 1),
(104, '3434aaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 1, 2, '', 0, '', 1),
(105, 'sesd', 1, 2, 'sddd sddd sddd vsddd sddd sdddv sdddsdddsdddsdddsddd sddd sddd vsddd sddd sdddv sdddsdddsdddsdddsddd sddd sddd vsddd sddd sdddv sdddsdddsdddsdddsddd sddd sddd vsddd sddd sdddv sdddsdddsdddsdddsddd sddd sddd vsddd sddd sdddv sdddsdddsdddsdddsddd sddd sddd ', 24300, '', 1),
(106, '323', 1, 2, 'sddd sddd sddd vsddd sddd sdddv sdddsdddsdddsdddsddd sddd sddd vsddd sddd sdddv sdddsdddsdddsdddsddd sddd sddd vsddd sddd sdddv sdddsdddsdddsdddsddd sddd sddd vsddd sddd sdddv sdddsdddsdddsdddsdd 1111', 232300, '', 1),
(107, '131232', 1, 2, 'sddd sddd sddd vsddd sddd sdddv sdddsdddsdddsdddsddd sddd sddd vsddd sddd sdddv sdddsdddsdddsdddsddd sddd sddd vsddd sddd sdddv sdddsdddsdddsdddsddd sddd sddd vsddd sddd sdddv sdddsdddsdddsdddsddd sddd sddd vsddd sddd sdddv sdddsdddsdddsdd 1111111111', 3232300, '', 1),
(108, 'saba 111111111111', 1, 2, '', 0, 'images/fulls/f_1474958663.jpg', 1),
(109, 'saba', 1, 2, '1111111111', 2147483647, 'images/fulls/f_1474959812.jpg', 1),
(110, '3333333', 1, 2, '3333333', 3333300, '', 1),
(111, 'saba 22222', 1, 2, '222222', 2222200, '', 1),
(112, '99999999999', 1, 2, '999999', 999900, '', 1),
(113, 'saba 444', 1, 2, '444', 44400, '', 1),
(114, 'saba1111111111', 1, 2, '5551111111', 2147483647, 'images/fulls/f_1474959914.jpg', 1),
(115, 'aba77', 1, 2, '777', 777111100, 'images/fulls/f_1474965697.png', 1),
(116, '111111111111111', 2, 2, '111111111111111111', 2147483647, '', 1),
(117, '22222222', 2, 2, '22222222222222', 2147483647, '', 1),
(118, '2222222222222', 2, 2, '2222222222', 22222200, '', 1),
(119, '333333333', 2, 2, '333333333', 2147483647, '', 1),
(120, '2222', 2, 2, '22', 222222200, '', 1),
(121, '23232323', 2, 2, '2323', 222222200, '', 1),
(122, 'sddddddd2222', 1, 2, 'ddddddddddddddd222', 232322200, 'images/fulls/f_1474965495.png', 0),
(123, '22221', 1, 2, '33331222', 4444300, 'images/fulls/f_1474965475.jpg', 0),
(124, '333', 1, 2, '333', 330, 'images/fulls/f_1474961972.png', 1),
(125, 'sdsd', 1, 2, 'sdsd', 22200, 'images/fulls/f_1474962144.png', 1),
(126, '777772222', 1, 2, '777777222222222222222', 22222200, '', 1),
(127, 'gallery', 0, 0, '', 0, '', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
