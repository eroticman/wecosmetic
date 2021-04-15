-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 06:24 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wecosmetic`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_admin`
--

CREATE TABLE `db_admin` (
  `id` int(11) NOT NULL,
  `group_id` int(2) DEFAULT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `is_active` int(2) DEFAULT 1,
  `created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_admin`
--

INSERT INTO `db_admin` (`id`, `group_id`, `full_name`, `username`, `password`, `ip`, `is_active`, `created`) VALUES
(1, 1, 'Administrator', 'bewnipawan@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '::1', 1, '2021-02-13 19:09:26');

-- --------------------------------------------------------

--
-- Table structure for table `db_banner`
--

CREATE TABLE `db_banner` (
  `id` int(20) NOT NULL,
  `banner_name` varchar(100) DEFAULT '',
  `img_cover` varchar(100) DEFAULT '',
  `is_active` varchar(1) DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_banner`
--

INSERT INTO `db_banner` (`id`, `banner_name`, `img_cover`, `is_active`, `created`, `updated`) VALUES
(1, 'We Cosmetic Banner ', 'banner.jpg', '1', '2021-04-11 13:24:18', '2021-04-13 13:03:49'),
(2, 'We Cosmetic Banner 2', 'banner.jpg', '1', '2021-04-13 13:00:33', '2021-04-13 13:03:56');

-- --------------------------------------------------------

--
-- Table structure for table `db_contact`
--

CREATE TABLE `db_contact` (
  `id` int(10) NOT NULL,
  `contact_name` varchar(100) DEFAULT NULL,
  `phone_1` text DEFAULT NULL,
  `phone_2` text DEFAULT NULL,
  `phone_3` text DEFAULT NULL,
  `phone_4` text DEFAULT NULL,
  `phone_5` text DEFAULT NULL,
  `google_map_1` text DEFAULT NULL,
  `google_map_2` text NOT NULL,
  `google_map_3` text DEFAULT NULL,
  `google_map_4` text DEFAULT NULL,
  `google_map_5` text DEFAULT NULL,
  `is_active` int(2) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_contact`
--

INSERT INTO `db_contact` (`id`, `contact_name`, `phone_1`, `phone_2`, `phone_3`, `phone_4`, `phone_5`, `google_map_1`, `google_map_2`, `google_map_3`, `google_map_4`, `google_map_5`, `is_active`, `created`, `updated`) VALUES
(1, 'We Cosmetic', '096-945-4440', '090-908-7966', '090-908-7434', '063-423-9139', '03-303-1702', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3872.785862633395!2d100.5506583148323!3d13.91174399024413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDU0JzQyLjMiTiAxMDDCsDMzJzEwLjMiRQ!5e0!3m2!1sen!2sth!4v1618027189389!5m2!1sen!2sth', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3872.8129165636374!2d100.55231831483225!3d13.910127990245183!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDU0JzM2LjUiTiAxMDDCsDMzJzE2LjIiRQ!5e0!3m2!1sen!2sth!4v1618027137281!5m2!1sen!2sth', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.876077886365!2d101.20976531482212!3d12.979776990850498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTLCsDU4JzQ3LjIiTiAxMDHCsDEyJzQzLjAiRQ!5e0!3m2!1sen!2sth!4v1618027050248!5m2!1sen!2sth', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.4457794199407!2d101.12497931482237!3d13.007259990832475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDAwJzI2LjEiTiAxMDHCsDA3JzM3LjgiRQ!5e0!3m2!1sen!2sth!4v1618027279068!5m2!1sen!2sth', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.9655184059366!2d100.9576263148233!3d13.101370990770805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTPCsDA2JzA0LjkiTiAxMDDCsDU3JzM1LjMiRQ!5e0!3m2!1sen!2sth!4v1618027317653!5m2!1sen!2sth', 1, '2021-04-11 16:10:31', '2021-04-13 12:53:02');

-- --------------------------------------------------------

--
-- Table structure for table `db_product`
--

CREATE TABLE `db_product` (
  `id` int(20) NOT NULL,
  `url_name` varchar(100) DEFAULT NULL,
  `keyword` text DEFAULT NULL,
  `product_name` varchar(100) DEFAULT '',
  `price` decimal(10,0) DEFAULT NULL,
  `short_desc` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `product_type` varchar(100) DEFAULT '',
  `img_cover` varchar(150) DEFAULT NULL,
  `is_best` int(2) DEFAULT 0,
  `is_active` int(2) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_product`
--

INSERT INTO `db_product` (`id`, `url_name`, `keyword`, `product_name`, `price`, `short_desc`, `description`, `product_type`, `img_cover`, `is_best`, `is_active`, `created`, `updated`) VALUES
(1, 'PRODUCT-NAME', 'เซรั่มกระชับรูขุมขน, เซรั่มณัชชา, เซรั่มลดฝ้ากระ, รีวิวเซรั่มหน้าใส, ครีมรักษาฝ้า, วิธีรักษาฝ้า, เซรั่มQ, เซรั่มโซยอง, ครีมบำรุงกลางคืน, เซรั่มที่ดีที่สุด', 'PRODUCT NAME', '189', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummytext of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing andtypesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 'ANTI-ACNE SOLUTION', 'DSCF8688_Edit.jpg', 1, 1, '2021-04-11 13:36:52', '2021-04-13 13:21:01'),
(2, 'PRODUCT-NAME-2', 'เซรั่มกระชับรูขุมขน, เซรั่มณัชชา, เซรั่มลดฝ้ากระ, รีวิวเซรั่มหน้าใส, ครีมรักษาฝ้า, วิธีรักษาฝ้า, เซรั่มQ, เซรั่มโซยอง, ครีมบำรุงกลางคืน, เซรั่มที่ดีที่สุด', 'PRODUCT NAME 2 ', '189', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummytext of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing andtypesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 'ANTI-ACNE SOLUTION', 'AMO52306.jpg', 1, 1, '2021-04-11 17:21:46', '2021-04-13 13:21:07'),
(3, 'PRODUCT-NAME-3', 'เซรั่มกระชับรูขุมขน, เซรั่มณัชชา, เซรั่มลดฝ้ากระ, รีวิวเซรั่มหน้าใส, ครีมรักษาฝ้า, วิธีรักษาฝ้า, เซรั่มQ, เซรั่มโซยอง, ครีมบำรุงกลางคืน, เซรั่มที่ดีที่สุด', 'PRODUCT NAME 3', '189', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummytext of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing andtypesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.<br />\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry.</p>\r\n', 'ANTI-ACNE SOLUTION', 'SWAN_1.jpg', 1, 1, '2021-04-13 12:55:23', '2021-04-13 13:21:13');

-- --------------------------------------------------------

--
-- Table structure for table `db_product_img`
--

CREATE TABLE `db_product_img` (
  `product_id` int(15) NOT NULL,
  `img_name` varchar(150) NOT NULL,
  `order_id` int(2) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_product_img`
--

INSERT INTO `db_product_img` (`product_id`, `img_name`, `order_id`, `created`) VALUES
(1, 'AMO52306.jpg', 1, '2021-04-11 13:36:52'),
(1, 'DSCF8688-Edit.jpg', 2, '2021-04-11 13:36:52'),
(1, 'SWAN_1.jpg', 3, '2021-04-11 13:36:52'),
(2, 'AMO52306.jpg', 1, '2021-04-11 17:21:46'),
(2, 'DSCF8688-Edit.jpg', 2, '2021-04-11 17:21:46'),
(2, 'SWAN_1.jpg', 3, '2021-04-11 17:21:46'),
(3, 'AMO52306.jpg', 1, '2021-04-13 12:55:23'),
(3, 'DSCF8688-Edit.jpg', 2, '2021-04-13 12:55:23'),
(3, 'SWAN_1.jpg', 3, '2021-04-13 12:55:23');

-- --------------------------------------------------------

--
-- Table structure for table `db_product_review`
--

CREATE TABLE `db_product_review` (
  `product_id` int(15) NOT NULL,
  `img_name` varchar(150) NOT NULL,
  `order_id` int(2) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `db_product_review`
--

INSERT INTO `db_product_review` (`product_id`, `img_name`, `order_id`, `created`) VALUES
(2, 'SWAN_1.jpg', 1, '2021-04-11 17:21:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_admin`
--
ALTER TABLE `db_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `db_banner`
--
ALTER TABLE `db_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_contact`
--
ALTER TABLE `db_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_product`
--
ALTER TABLE `db_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `db_product_img`
--
ALTER TABLE `db_product_img`
  ADD PRIMARY KEY (`product_id`,`img_name`);

--
-- Indexes for table `db_product_review`
--
ALTER TABLE `db_product_review`
  ADD PRIMARY KEY (`product_id`,`img_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_admin`
--
ALTER TABLE `db_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_banner`
--
ALTER TABLE `db_banner`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `db_contact`
--
ALTER TABLE `db_contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `db_product`
--
ALTER TABLE `db_product`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
