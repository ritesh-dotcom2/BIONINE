-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2024 at 11:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bionineweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_logo`
--

CREATE TABLE `add_logo` (
  `id` int(10) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_logo`
--

INSERT INTO `add_logo` (`id`, `img`) VALUES
(2, 'logo (8).png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(60) NOT NULL,
  `admin_pass` varchar(60) NOT NULL,
  `role` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`admin_id`, `admin_email`, `admin_pass`, `role`) VALUES
(1, 'saifulislamsapon@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(3, 'ritesh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1),
(4, 'yearul@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `all_order_info`
-- (See below for the actual view)
--
CREATE TABLE `all_order_info` (
`order_id` int(255)
,`product_name` varchar(255)
,`pdt_quantity` int(11)
,`amount` int(11)
,`uses_coupon` varchar(35)
,`customer_name` varchar(60)
,`Shipping_mobile` varchar(20)
,`trans_id` varchar(25)
,`shiping_address` varchar(255)
,`order_status` int(3)
,`order_time` timestamp
,`order_date` date
);

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `ctg_id` int(11) NOT NULL,
  `ctg_name` varchar(60) NOT NULL,
  `ctg_des` varchar(150) NOT NULL,
  `ctg_status` tinyint(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagory`
--

INSERT INTO `catagory` (`ctg_id`, `ctg_name`, `ctg_des`, `ctg_status`) VALUES
(1, 'Face Care', 'All kinds of Face care products are available in this category ', 1),
(9, 'Hair Care', 'All type of hair care products are available here.', 1),
(10, 'New Launches', 'All type of skin care products are available here.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cupon`
--

CREATE TABLE `cupon` (
  `cupon_id` int(11) NOT NULL,
  `cupon_code` varchar(25) NOT NULL,
  `description` varchar(255) NOT NULL,
  `discount` int(5) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cupon`
--

INSERT INTO `cupon` (`cupon_id`, `cupon_code`, `description`, `discount`, `status`) VALUES
(1, 'fruitsbazar', 'It\'s a discount coupon.', 10, 1),
(2, 'eid2021', 'Eid discount', 15, 1),
(3, 'eid2021', 'Eid discount', 15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_feedback`
--

CREATE TABLE `customer_feedback` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pdt_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_feedback`
--

INSERT INTO `customer_feedback` (`id`, `user_id`, `user_name`, `pdt_id`, `comment`, `comment_date`) VALUES
(1, 1, 'saiful', 4, 'This product is very good', '2021-09-11'),
(4, 5, 'karim', 6, 'Good product', '2021-09-15');

-- --------------------------------------------------------

--
-- Table structure for table `header_info`
--

CREATE TABLE `header_info` (
  `id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tweeter` varchar(500) NOT NULL,
  `fb_link` varchar(500) NOT NULL,
  `pinterest` varchar(500) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `header_info`
--

INSERT INTO `header_info` (`id`, `email`, `tweeter`, `fb_link`, `pinterest`, `phone`) VALUES
(10, 'mysterglowhomemadeskincare@gma', 'https://twitter.com/', 'https://facebook.com/', 'https://pinerest.com/', '9063123168');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `pdt_quantity` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `uses_coupon` varchar(35) NOT NULL,
  `order_status` int(3) NOT NULL,
  `trans_id` varchar(25) NOT NULL,
  `Shipping_mobile` varchar(20) NOT NULL,
  `shiping` varchar(255) NOT NULL,
  `order_time` timestamp NULL DEFAULT current_timestamp(),
  `order_date` date DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `user_id`, `product_name`, `pdt_quantity`, `amount`, `uses_coupon`, `order_status`, `trans_id`, `Shipping_mobile`, `shiping`, `order_time`, `order_date`) VALUES
(1, 1, ' Apple Gala(1 kg)', 1, 245, '', 2, 'afasfsaf', '1246798', ' SubarnaChar, Noakhali ', '2021-09-11 09:18:53', '2021-09-13'),
(2, 1, 'Apple Golden Delicious (1kg)', 1, 250, '', 2, 'afasfsaf', '1246798', ' SubarnaChar, Noakhali ', '2021-09-11 09:18:53', '2021-09-13'),
(3, 1, ' Banana (Shobri) (1 P)', 1, 10, '', 2, 'afasffa', '1246798', ' SubarnaChar, Noakhali ', '2021-09-11 09:22:16', '2021-09-13'),
(4, 1, ' Grapes Red (Kg)', 1, 300, '', 2, 'afasffa', '1246798', ' SubarnaChar, Noakhali ', '2021-09-11 09:22:16', '2021-09-11'),
(5, 1, 'Coconut', 1, 10, '', 2, 'afasfsaf', '1246798', ' SubarnaChar, Noakhali ', '2021-09-11 09:31:12', '2021-09-13'),
(6, 1, ' Apple Gala(1 kg)', 1, 245, 'fruitsbazar', 2, 'afasfsaf', '1246798', ' SubarnaChar, Noakhali ', '2021-09-11 10:21:33', '2021-09-11'),
(7, 1, ' Grapes White (Kg)', 1, 250, 'fruitsbazar', 1, 'afasfsaf', '1246798', ' SubarnaChar, Noakhali ', '2021-09-11 10:21:33', '2021-09-11'),
(8, 1, ' Banana (Shobri) (1 P)', 1, 10, '', 2, 'afasfsaf', '1246798', ' SubarnaChar, Noakhali ', '2021-09-12 19:34:21', '2021-09-12'),
(9, 1, 'Black Apple', 1, 150, '', 1, 'afasfsaf', '1246798', ' SubarnaChar, Noakhali ', '2021-09-12 19:34:21', '2021-09-12'),
(10, 2, ' Banana (Shagor Kola) (1 P)', 1, 12, '', 0, '156464631afdasf', '1246798', ' Maijdee, Noakhali ', '2021-09-12 20:52:40', '2021-09-13'),
(11, 2, ' Banana (Shobri) (1 P)', 1, 10, '', 2, '156464631afdasf', '1246798', ' Maijdee, Noakhali ', '2021-09-12 20:52:40', '2021-09-13'),
(12, 2, 'Black Apple', 1, 150, '', 1, '156464631afdasf', '1246798', ' Maijdee, Noakhali ', '2021-09-12 20:52:40', '2020-09-13'),
(13, 5, ' Apple Gala(1 kg)', 1, 245, '', 2, 'avxev125', '1840239402', ' Jatrabari, Dhaka ', '2021-09-14 07:06:53', '2021-09-14'),
(14, 5, '  Apple Golden Delicious (1kg)', 1, 250, '', 0, 'avxev125', '1840239402', ' Jatrabari, Dhaka ', '2021-09-14 07:06:53', '2021-09-14'),
(15, 5, ' Apple Fuji(1 Kg)', 1, 208, '', 0, 'avxev125', '1840239402', ' Jatrabari, Dhaka ', '2021-09-14 08:02:43', '2021-09-14'),
(16, 5, ' Banana (Chini Chompa) (1 P)', 1, 10, '', 0, 'avxev125', '1840239402', ' Jatrabari, Dhaka ', '2021-09-14 08:02:43', '2021-09-14'),
(17, 5, '  Apple Golden Delicious (1kg)', 1, 250, '', 0, 'avxev125', '1840239402', ' Jatrabari, Dhaka ', '2021-09-14 08:02:43', '2021-09-14'),
(18, 5, ' Navel Oranges.', 1, 150, '', 0, '164614618', '1840239402', ' Jatrabari, Dhaka ', '2021-09-15 09:05:37', '2021-09-15'),
(19, 5, ' Grapes Black (Kg)', 1, 250, '', 0, '164614618', '1840239402', ' Jatrabari, Dhaka ', '2021-09-15 09:05:37', '2021-09-15'),
(20, 1, ' Banana (Shagor Kola) (1 P)', 1, 12, '', 0, 'afasfsaf', '1246798', ' SubarnaChar, Noakhali ', '2021-09-15 10:28:12', '2021-09-15'),
(21, 1, '  Apple Golden Delicious (1kg)', 1, 250, '', 0, 'afasfsaf', '1246798', ' SubarnaChar, Noakhali ', '2021-09-15 10:28:12', '2021-09-15'),
(22, 1, ' Navel Oranges.', 1, 150, 'fruitsbazar', 0, 'afasfsaf', '1246798', ' SubarnaChar, Noakhali ', '2021-09-16 09:23:53', '2021-09-16'),
(23, 1, ' Banana (Shobri) (1 P)', 1, 10, 'fruitsbazar', 0, 'afasfsaf', '1246798', ' SubarnaChar, Noakhali ', '2021-09-16 09:23:53', '2021-09-16'),
(24, 1, 'Black Apple', 1, 150, 'fruitsbazar', 0, 'afasfsaf', '1246798', ' SubarnaChar, Noakhali ', '2021-09-16 09:23:53', '2021-09-16'),
(25, 1, ' Apple Fuji(1 Kg)', 1, 208, 'fruitsbazar', 0, 'avxev125', '1246798', ' SubarnaChar, Noakhali ', '2021-09-16 09:25:36', '2021-09-16'),
(26, 1, ' Apple Gala(1 kg)', 1, 245, 'fruitsbazar', 1, 'afasfsaf', '1246798', ' SubarnaChar, Noakhali ', '2021-09-16 09:57:19', '2021-09-16'),
(27, 1, '  Apple Golden Delicious (1kg)', 1, 250, 'fruitsbazar', 0, 'afasfsaf', '1246798', ' SubarnaChar, Noakhali ', '2021-09-16 09:57:19', '2021-09-16'),
(28, 1, ' Grapes White (Kg)', 1, 250, 'fruitsbazar', 0, 'afasfsaf', '1246798', ' SubarnaChar, Noakhali ', '2021-09-16 09:59:31', '2021-09-16'),
(29, 7, ' Banana (Chini Chompa) (1 P)', 1, 10, '', 0, 'asdfd', '2147483647', ' SHOP NO. 490, SUMERU KRUPA TRADERS LANE, BESIDE METRO PILLAR 671, KENGERI, MYSORE ROAD, BENGALURU. ', '2023-11-20 11:33:35', '2023-11-20'),
(30, 7, 'Ubtan Face Wash', 1, 259, 'fruitsbazar	', 0, '', '', ' Noida ', '2024-01-30 10:49:01', '2024-01-30'),
(31, 7, 'Ubtan Face Wash', 1, 259, 'fruitsbazar', 0, '', '', ' Noida ', '2024-01-30 10:52:49', '2024-01-30'),
(32, 7, 'Neem & Tea Tree', 1, 275, 'fruitsbazar	', 0, '', '', ' Noida ', '2024-01-30 10:53:16', '2024-01-30'),
(33, 7, 'Aloe Vera Neem Tulsi', 1, 350, '', 0, '', '', ' Noida ', '2024-01-30 11:27:02', '2024-01-30'),
(34, 7, 'Ubtan Face Wash', 1, 259, '', 0, '', '', ' Noida ', '2024-01-30 13:10:39', '2024-01-30'),
(35, 7, 'Intimate Hygine Wash', 1, 190, '', 0, '', '', ' Noida ', '2024-01-30 13:10:39', '2024-01-30'),
(36, 7, 'Intimate Hygine Wash', 1, 190, '', 0, '', '', ' Noida ', '2024-01-31 04:59:13', '2024-01-31'),
(37, 7, 'Charcoal Face Wash', 1, 275, '', 0, '', '', ' Noida ', '2024-01-31 05:05:20', '2024-01-31');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pdt_id` int(255) NOT NULL,
  `pdt_name` varchar(200) NOT NULL,
  `pdt_price` int(255) NOT NULL,
  `pdt_des` varchar(250) NOT NULL,
  `pdt_ctg` int(200) NOT NULL,
  `pdt_img` varchar(250) NOT NULL,
  `pdt_imgs` varchar(255) NOT NULL,
  `product_stock` int(5) NOT NULL,
  `pdt_status` tinyint(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pdt_id`, `pdt_name`, `pdt_price`, `pdt_des`, `pdt_ctg`, `pdt_img`, `pdt_imgs`, `product_stock`, `pdt_status`) VALUES
(16, 'Aloe Wera Neem Tulsi', 100, 'Face Wash', 0, 'WhatsApp Image 2023-12-05 at 11.10.57 AM (1).jpeg', '', 30, 1),
(6, 'Neem & Tea Tree', 275, 'Face Wash\r\nWeight : 100 ML  ', 1, '2901141.jpg', '', 30, 1),
(7, 'SPF15', 300, 'Reference site about Lorem Ipsum, giving information on its origins, as well as a random Lipsum generator.  ', 0, '2901051_19.jpg', '', 15, 1),
(32, 'Nipple Care Cream', 100, 'Weight : 100ML  ', 10, 'f855e433-b30e-4d74-9078-68a6304ab1b8.jpg', '', 30, 1),
(11, 'Coconut', 10, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 6, 'tijana-drndarski-SJxDhVZR30I-unsplash.jpg', '', 11, 1),
(30, 'Charcoal Face Wash', 275, 'Weight : 100ML ', 1, 'WhatsApp Image 2023-05-25 at 6.19.55 PM.jpeg', '', 30, 1),
(31, 'Aloe Vera Neem Tulsi', 350, 'Weight : 100ML ', 1, 'WhatsApp Image 2023-05-25 at 6.19.56 PM.jpeg', '', 30, 1),
(29, 'Ubtan Face Wash', 259, 'Weight : 100ML ', 1, 'WhatsApp Image 2023-03-29 at 9.39.14 PM.jpeg', '', 30, 1),
(28, 'Intimate Hygine Wash', 190, 'Weight : 100ML', 1, 'WhatsApp Image 2023-03-29 at 9.39.14 PM (1).jpeg', '', 30, 1),
(27, 'Vitamin C', 259, 'Weight : 100 ML   ', 1, 'Bionine_(640_×_640_px)_(3).png', '', 30, 1);

-- --------------------------------------------------------

--
-- Stand-in structure for view `product_info_ctg`
-- (See below for the actual view)
--
CREATE TABLE `product_info_ctg` (
`pdt_id` int(255)
,`pdt_name` varchar(200)
,`pdt_price` int(255)
,`pdt_des` varchar(250)
,`pdt_img` varchar(250)
,`product_stock` int(5)
,`pdt_status` tinyint(5)
,`ctg_id` int(11)
,`ctg_name` varchar(60)
);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `first_line` varchar(255) NOT NULL,
  `second_line` varchar(255) NOT NULL,
  `third_line` varchar(255) NOT NULL,
  `btn_left` varchar(25) NOT NULL,
  `btn_right` varchar(25) NOT NULL,
  `slider_img` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `first_line`, `second_line`, `third_line`, `btn_left`, `btn_right`, `slider_img`) VALUES
(1, 'Pomegranate', 'Fruits 100% Organic', 'A blend of freshly squeezed green apple & fruits', 'Shop now', 'View lookbook', 'green-slide-01.jpg'),
(2, 'Pomegranate', 'Orange 100% Organic', 'A blend of freshly squeezed green apple & fruits', 'Shop now', 'View lookbook', 'green-slide-02.jpg'),
(3, 'Pomegranate', 'Banana 100% Organic', 'A blend of freshly squeezed green apple & fruits', 'Shop now', 'View lookbook', 'green-slide-01.jpg'),
(4, 'Pomegranate', 'Apple 100% Organic', 'A blend of freshly squeezed green apple & fruits', 'Shop now', 'View lookbook', 'green-slide-02.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(6) NOT NULL,
  `user_name` varchar(60) NOT NULL,
  `user_firstname` varchar(60) NOT NULL,
  `user_lastname` varchar(60) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_mobile` int(11) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_roles` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_firstname`, `user_lastname`, `user_email`, `user_password`, `user_mobile`, `user_address`, `user_roles`, `created_at`, `modified_at`) VALUES
(1, 'saiful', ' saiful', ' islam', 'saifulislamsapon@gmail.com', '202cb962ac59075b964b07152d234b70', 1246798, 'SubarnaChar, Noakhali', 5, '2021-08-21 13:38:23', '2021-08-21 13:38:23'),
(2, 'Yearul', ' Yerarul', ' islam', 'yearul@gmail.com', '202cb962ac59075b964b07152d234b70', 1246798, 'Maijdee, Noakhali', 5, '2021-08-21 13:38:23', '2021-08-21 13:38:23'),
(3, 'Omar6627', ' Omar Bin', ' Faruk', 'omarbfaruk@gmail.com', 'ad126b79a449eb003915c3917c8a30e1', 1684734323, 'Feni', 5, '2021-08-21 18:56:24', '2021-08-21 18:56:24'),
(4, 'Omar_6627', ' Omar Bin', ' Faruk', 'omarbinfaruk97@gmail.com', '8d5dcd9520e2712d648297f0f116c284', 1684734323, 'Dhaka', 5, '2021-08-30 11:04:09', '2021-08-30 11:04:09'),
(5, 'karim', ' karim', ' ', 'karim@gmail.com', '202cb962ac59075b964b07152d234b70', 1840239402, 'Jatrabari, Dhaka', 5, '2021-09-14 05:03:25', '2021-09-14 05:03:25'),
(6, 'rahim', ' Rahim', ' ', 'rahim@gmail.com', '202cb962ac59075b964b07152d234b70', 1840239415, 'Mirpur, Dhaka. ', 5, '2021-09-14 07:05:48', '2021-09-14 07:05:48'),
(7, 'ritesh', ' Ritesh', ' Kumar', 'ritesh@mail.com', '81dc9bdb52d04dc20036dbd8313ed055', 2147483647, 'Noida', 5, '2024-01-30 10:22:07', '2024-01-30 10:22:07');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `postal_code` varchar(8) NOT NULL,
  `city` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_payment`
--

CREATE TABLE `user_payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `provider` varchar(35) NOT NULL,
  `account_no` int(11) DEFAULT NULL,
  `expiry` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure for view `all_order_info`
--
DROP TABLE IF EXISTS `all_order_info`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `all_order_info`  AS SELECT `order_details`.`order_id` AS `order_id`, `order_details`.`product_name` AS `product_name`, `order_details`.`pdt_quantity` AS `pdt_quantity`, `order_details`.`amount` AS `amount`, `order_details`.`uses_coupon` AS `uses_coupon`, `users`.`user_firstname` AS `customer_name`, `order_details`.`Shipping_mobile` AS `Shipping_mobile`, `order_details`.`trans_id` AS `trans_id`, `order_details`.`shiping` AS `shiping_address`, `order_details`.`order_status` AS `order_status`, `order_details`.`order_time` AS `order_time`, `order_details`.`order_date` AS `order_date` FROM (`order_details` join `users`) WHERE `users`.`user_id` = `order_details`.`user_id` ;

-- --------------------------------------------------------

--
-- Structure for view `product_info_ctg`
--
DROP TABLE IF EXISTS `product_info_ctg`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `product_info_ctg`  AS SELECT `products`.`pdt_id` AS `pdt_id`, `products`.`pdt_name` AS `pdt_name`, `products`.`pdt_price` AS `pdt_price`, `products`.`pdt_des` AS `pdt_des`, `products`.`pdt_img` AS `pdt_img`, `products`.`product_stock` AS `product_stock`, `products`.`pdt_status` AS `pdt_status`, `catagory`.`ctg_id` AS `ctg_id`, `catagory`.`ctg_name` AS `ctg_name` FROM (`products` join `catagory`) WHERE `products`.`pdt_ctg` = `catagory`.`ctg_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_logo`
--
ALTER TABLE `add_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`ctg_id`);

--
-- Indexes for table `cupon`
--
ALTER TABLE `cupon`
  ADD PRIMARY KEY (`cupon_id`);

--
-- Indexes for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `header_info`
--
ALTER TABLE `header_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pdt_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_payment`
--
ALTER TABLE `user_payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_logo`
--
ALTER TABLE `add_logo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `ctg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cupon`
--
ALTER TABLE `cupon`
  MODIFY `cupon_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_feedback`
--
ALTER TABLE `customer_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `header_info`
--
ALTER TABLE `header_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pdt_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_payment`
--
ALTER TABLE `user_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
