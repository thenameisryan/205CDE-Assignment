-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 02:40 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims_hardware`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(10) NOT NULL,
  `blog_title` varchar(50) NOT NULL,
  `blog_image` varchar(100) NOT NULL,
  `blog_description` varchar(300) NOT NULL,
  `blog_category` varchar(50) NOT NULL,
  `blog_written_by` varchar(50) NOT NULL,
  `blog_date_created` varchar(50) NOT NULL,
  `blog_date_edited` varchar(50) NOT NULL,
  `blog_created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_title`, `blog_image`, `blog_description`, `blog_category`, `blog_written_by`, `blog_date_created`, `blog_date_edited`, `blog_created_by`) VALUES
(2, 'vr', 'img/uploads/5.jpg', 'vr is the next best thing\r\n', 'TECH', 'ryan', '20-07-2019 22:43:55', '20-07-2019 23:41:10', 'admin'),
(4, 'car', 'img/uploads/2.jpg', 'ferrari fast af boii', 'CARS', 'ryan lai', '20-07-2019 23:48:09', '', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `build`
--

CREATE TABLE `build` (
  `build_id` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `cpu` varchar(100) NOT NULL,
  `cpu_quantity` varchar(20) NOT NULL,
  `cpu_cooler` varchar(100) NOT NULL,
  `cpucooler_quantity` varchar(20) NOT NULL,
  `ram` varchar(100) NOT NULL,
  `ram_quantity` varchar(20) NOT NULL,
  `motherboard` varchar(100) NOT NULL,
  `mboard_quantity` varchar(20) NOT NULL,
  `graphics_card` varchar(100) NOT NULL,
  `gcard_quantity` varchar(20) NOT NULL,
  `storage` varchar(100) NOT NULL,
  `storage_quantity` varchar(20) NOT NULL,
  `casing` varchar(100) NOT NULL,
  `casing_quantity` varchar(20) NOT NULL,
  `power_supply` varchar(100) NOT NULL,
  `powersup_quantity` varchar(20) NOT NULL,
  `optical_drive` varchar(100) NOT NULL,
  `optdrive_quantity` varchar(20) NOT NULL,
  `software` varchar(100) NOT NULL,
  `software_quantity` varchar(20) NOT NULL,
  `monitor` varchar(100) NOT NULL,
  `monitor_quantity` varchar(20) NOT NULL,
  `other` varchar(100) NOT NULL,
  `other_quantity` varchar(20) NOT NULL,
  `build_date_created` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `build`
--

INSERT INTO `build` (`build_id`, `userid`, `cpu`, `cpu_quantity`, `cpu_cooler`, `cpucooler_quantity`, `ram`, `ram_quantity`, `motherboard`, `mboard_quantity`, `graphics_card`, `gcard_quantity`, `storage`, `storage_quantity`, `casing`, `casing_quantity`, `power_supply`, `powersup_quantity`, `optical_drive`, `optdrive_quantity`, `software`, `software_quantity`, `monitor`, `monitor_quantity`, `other`, `other_quantity`, `build_date_created`) VALUES
(1, 30, '11', '1', '21', '1', '14', '1', '25', '1', '27', '1', '31', '1', '32', '1', '33', '1', '34', '1', '35', '1', '36', '1', '37', '1', '21-07-2019 20:36:18');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(10) NOT NULL,
  `contact_name` varchar(50) NOT NULL,
  `contact_email` varchar(50) NOT NULL,
  `contact_subject` varchar(50) NOT NULL,
  `contact_message` varchar(300) NOT NULL,
  `contact_date_created` varchar(50) NOT NULL,
  `contact_created_by` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_subject`, `contact_message`, `contact_date_created`, `contact_created_by`) VALUES
(1, 'ryan', 'shit@mail.com', 'test', '6969', '23-06-2019 12:17:51', ''),
(2, 'dwd', 'wada@dwada', 'dadad', 'adad', '23-06-2019 12:46:16', ''),
(3, 'dwa', 'ddad@dwa', 'dad', 'ada', '23-06-2019 12:43:44', ''),
(4, 'ryan', 'lwiay@mail.com', 'meme', 'me and the boys', '23-06-2019 17:28:03', ''),
(5, 'superstitum', 'meme@meme', '6969', 'smoke', '23-06-2019 17:31:39', 'NON-USER'),
(6, 'admin', 'admin@admin', 'admin', 'admin\r\n', '23-06-2019 17:32:05', 'USER'),
(7, 'stop', 'dawd@mial', 'dawd', 'ddwad', '23-06-2019 17:33:40', 'ADMIN'),
(9, 'helo', 'my@mail.com', 'greetings', 'ooga booga', '25-06-2019 18:00:04', 'ADMIN'),
(10, 'happy', 'carlie@ddd', 'catier', 'bitch you suck', '27-06-2019 10:06:40', 'NON-USER'),
(11, 'gg', 'goodnight@mail.com', 'hi', 'hiiddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '19-07-2019 03:16:15', 'NON-USER'),
(13, 'xxryanlaix', 'lol@mail.com', 'Ay', 'ayyyyyy', '19-07-2019 23:19:29', 'NON-USER'),
(15, 'caryn', 'caryn@mail.com', 'pc problem', 'help me', '21-07-2019 19:19:55', 'NON-USER');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_desc` varchar(100) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_price` varchar(20) NOT NULL,
  `product_date_added` varchar(50) NOT NULL,
  `product_date_edited` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_desc`, `product_image`, `product_category`, `product_price`, `product_date_added`, `product_date_edited`) VALUES
(11, 'INTEL CORE I9 9900K', '8 CORE/ 16 THREADS/5.0GHZ', 'img/uploads/1.jpg', 'CPU', '2099', '18-07-2019 13:16:15', '18-07-2019 19:21:09'),
(12, 'INTEL CORE I5 8400 ', '6 CORE/ 6 THREADS/4.0GHZ', 'img/uploads/4.jpg', 'CPU', '769', '18-07-2019 16:16:11', '19-07-2019 01:42:16'),
(14, 'G.SKILL AEGIS Series 8GB DDR4', '2666mhz(CL19)', 'img/uploads/2.jpg', 'RAM', '249', '18-07-2019 17:17:38', '19-07-2019 01:41:46'),
(17, 'INTEL CORE I3 8100', '4 CORE/ 4 THREADS/3.6GHZ', 'img/uploads/3.jpg', 'CPU', '489', '19-07-2019 01:43:25', '19-07-2019 01:43:47'),
(18, 'INTEL PENTIUM G5400', '2 CORE/ 4 THREADS/ 3.7GHZ', 'img/uploads/4.jpg', 'CPU', '269', '19-07-2019 01:45:41', ''),
(20, 'INTEL CORE I5 9600K UNLOCKED FOR OC', '6 CORE/ 6 THREADS/4.6GHZ', 'img/uploads/3.jpg', 'CPU', '1099', '21-07-2019 19:41:14', ''),
(21, 'CRYORIG R1 ULTIMATE', '168.3MM/Performance Fans', 'img/uploads/2.jpg', 'CPUCOOLER', '375', '21-07-2019 19:42:42', '21-07-2019 19:42:55'),
(22, 'COOLERMASTER HYPER 212 Turbo Black', '163MM', 'img/uploads/2.jpg', 'CPUCOOLER', '139', '21-07-2019 19:44:12', ''),
(23, 'GSKILL TridentZ RGB', ' 2X16GB DDR4 3200MHZ', 'img/uploads/5.jpg', 'RAM', '1399', '21-07-2019 19:45:23', ''),
(24, 'Corsair VENGEANCE RGB PRO 16GB', '(2 x 8GB) DDR4 DRAM 3600MHz C18(Black/White)', 'img/uploads/1.jpg', 'RAM', '789', '21-07-2019 19:46:22', ''),
(25, 'Gigabyte X299 Aorus Gaming 7 Pro', 'Support Addressable RGB/ ATX /RGB Fusion/Killer-Wireless &amp; BT4.1/3xM.2/8xDDR4/3-Way SLI &amp; Cr', 'img/uploads/2.jpg', 'MBOARD', '1770', '21-07-2019 19:47:49', ''),
(26, 'ASUS TUF B360-PLUS GAMING S', 'ATX/4xDDR4 2666MHZ/6xSata3/2xM.2/GBLAN/AURA RGB/HDMI+DVI/Gaming Audio', 'img/uploads/3.jpg', 'MBOARD', '479', '21-07-2019 19:48:34', ''),
(27, 'EVGA NVIDIA GeForce RTX2080 TI', 'FTW3 ULTRA GAMING 11GB GDDR6', 'img/uploads/2.jpg', 'GCARD', '6899', '21-07-2019 19:49:56', ''),
(28, 'GIGABYTE GAMING OC RTX2080', '8GB DDR6 Triple Fans', 'img/uploads/2.jpg', 'GCARD', '3588', '21-07-2019 19:50:32', ''),
(29, 'GIGABYTE GTX1660TI', 'OC 6GB DDR6 (1800/12000) (Double Fan) ', 'img/uploads/4.jpg', 'GCARD', '1329', '21-07-2019 19:51:08', ''),
(30, 'GIGABYTE M.2 PCIe NVME SSD', '128GB', 'img/uploads/2.jpg', 'STORAGE', '129', '21-07-2019 19:52:36', ''),
(31, 'WD 1TB Caviar Blue ', '7200RPM/64MB(2Years Warranty)', 'img/uploads/5.jpg', 'STORAGE', '189', '21-07-2019 19:53:27', ''),
(32, 'COOLERMASTER COSMOS C700M', '', 'img/uploads/2.jpg', 'CASE', '1749', '21-07-2019 19:54:10', ''),
(33, 'EVGA Supernova 1000 G+ ', 'Gold Full Modular PSU', 'img/uploads/1.jpg', 'POWERSUP', '749', '21-07-2019 19:55:15', ''),
(34, 'ASUS Internal 24X DVDRW ', 'DRW-24D5MT ', 'img/uploads/1.jpg', 'OPTDRIVE', '65', '21-07-2019 19:55:52', ''),
(35, 'Windows 10', '64Bit', 'img/uploads/3.jpg', 'SOFTWARE', '439', '21-07-2019 19:56:39', ''),
(36, 'ASUS 24\"PG248Q-TN', '180Hz(G-Sync/1920x1080/1ms/DP/HDMI)', 'img/uploads/1.jpg', 'MONITOR', '2149', '21-07-2019 19:57:26', ''),
(37, 'CoolerMaster ARGB Controller', '', 'img/uploads/5.jpg', 'OTHER', '99', '21-07-2019 19:58:26', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `userpass` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `date_created` varchar(50) NOT NULL,
  `created_by` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `useremail`, `userpass`, `user_type`, `date_created`, `created_by`) VALUES
(1, 'admin', 'admin@mail.com', 'YWRtaW4=', 'ADMIN', '27-06-2019 16:37:36', 'USER'),
(22, 'bylat123', 'bylat@mail.com', 'YnlsYXQy', 'USER', '27-06-2019 16:38:45', 'USER'),
(23, 'caryncykadd', 'caryn@mail.com', 'Y2FyeW4=', 'USER', '27-06-2019 16:39:58', 'ADMIN'),
(24, 'jp123', 'jp@ymail.com', 'anBkZA==', 'USER', '27-06-2019 16:41:29', 'ADMIN'),
(26, 'imjustanewbee', 'jp@mail.com', 'anA=', 'USER', '18-07-2019 12:34:24', 'USER'),
(27, 'titty', 'titty@mail.com', 'MTIzNDU2', 'USER', '18-07-2019 16:17:52', 'ADMIN'),
(28, 'smileo', 'smile@mail.com', 'c21pbGU=', 'USER', '18-07-2019 16:19:56', 'ADMIN'),
(29, 'rachel', 'racrawr@mail.com', 'MTIz', 'USER', '20-07-2019 04:30:48', 'USER'),
(30, 'jesvin', 'jesvin@gmail.com', 'MTIzNDU2', 'USER', '21-07-2019 00:01:28', 'USER'),
(31, 'caryn123', 'caryn@shit.com', 'Y2FyeW4xMjM=', 'USER', '21-07-2019 19:20:47', 'USER');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `build`
--
ALTER TABLE `build`
  ADD PRIMARY KEY (`build_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `build`
--
ALTER TABLE `build`
  MODIFY `build_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
