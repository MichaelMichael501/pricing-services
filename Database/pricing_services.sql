-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 09:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pricing_services`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_sessions`
--

CREATE TABLE `active_sessions` (
  `id` int(11) NOT NULL,
  `username` varchar(165) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `active_sessions`
--

INSERT INTO `active_sessions` (`id`, `username`) VALUES
(5, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int(11) NOT NULL,
  `username` varchar(165) NOT NULL,
  `password` varchar(165) NOT NULL,
  `name` varchar(250) NOT NULL,
  `privilage` varchar(30) NOT NULL,
  `active_sessions` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `username`, `password`, `name`, `privilage`, `active_sessions`) VALUES
(1, 'admin', 'crempcoadmin@2023', 'Crempco-Admin', 'admin', '');

-- --------------------------------------------------------

--
-- Table structure for table `device_type`
--

CREATE TABLE `device_type` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `device` varchar(100) NOT NULL,
  `photo_dir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `device_type`
--

INSERT INTO `device_type` (`id`, `type`, `device`, `photo_dir`) VALUES
(1, 'Window', '1', 'img/device/window-type-aircon.png'),
(2, 'Split', '1', 'img/device/split-type-aircon.png'),
(3, 'Tower', '1', 'img/device/tower-type-aircon.png'),
(4, 'Cassette', '1', 'img/device/cassette-type-aircon.png'),
(5, 'Suspended', '1', 'img/device/suspended-type-aircon.png'),
(6, 'Concealed', '1', 'img/device/concealed-type-aircon.png'),
(7, 'U-shaped Window', '1', 'img/device/u-shape-type-aircon.png'),
(8, 'Single Door', '2', 'img/device/single-freezer.png'),
(9, 'Two Door Top Freezer', '2', 'img/device/top-freezer.png'),
(10, 'Two Door Bottom Freezer', '2', 'img/device/bottom-freezer.png'),
(11, 'Multi Door-Shelves', '2', 'img/device/Multi-Door-Shelves.png'),
(12, 'Chest Freezer', '2', 'img/device/Standalone-Freezer.png'),
(13, 'Single Door Commercial', '2', 'img/device/Single Door Commercial.png'),
(14, 'Top Load', '3', 'img/device/topload-mw.png'),
(15, 'Front Load', '3', 'img/device/frontload-mw.png'),
(16, 'Twin Tub', '3', 'img/device/dual-mw.png'),
(17, 'Instant', '4', 'img/device/instant-wh.jpg'),
(18, 'Tank', '4', 'img/device/tank-wh.jpg'),
(19, 'Flourescent or LED Tube', '5', 'img/device/Fluorescent_LED.jpg'),
(20, 'Bulb', '5', 'img/device/Bulb.png'),
(21, 'Track', '5', 'img/device/Track.jpg'),
(22, 'Recessed', '5', 'img/device/Recessed.jpg'),
(23, 'Chandelier', '5', 'img/device/crystal-chandelier.jpg'),
(24, 'Wall Sconce', '5', 'img/device/WallSconce.png'),
(25, 'Spotlight', '5', 'img/device/Spotlight.png'),
(26, 'Motion Sensor', '5', 'img/device/Motion_Sensor.png'),
(27, 'Grounded Outlet', '6', 'img/device/Grounded_Outlet.png'),
(28, 'Ungrounded Outlet', '6', 'img/device/Ungrounded_Outlet.png'),
(29, 'GFCI Outlet', '6', 'img/device/GFIC_Outlet.png'),
(30, 'Single Switch', '6', 'img/device/Single_Switch.png'),
(31, 'Dimmer Switch', '6', 'img/device/Dimmer_Switch.png'),
(32, 'Toggle Switch', '6', 'img/device/Toggle_Switch.png'),
(33, 'Multi Switch', '6', 'img/device/Single_Multi_Switch.png'),
(34, 'Aircon Wiring', '7', 'img/device/Aircon_Wiring.png'),
(35, 'Outlet & Switch Wiring', '7', 'img/device/Outlet_Wiring.png'),
(36, 'General Wiring', '7', 'img/device/General_Wiring.jpg'),
(37, 'Single Switch Breaker', '7', 'img/device/Single_Switch_Breaker.png'),
(38, 'Dual Switch Breaker', '7', 'img/device/Dual_Switch_Breaker.png'),
(39, 'GFCI Breaker', '7', 'img/device/GFIC_Breaker.png'),
(40, 'Wired Doorbell', '8', 'img/device/Wired_doorbell.png'),
(41, 'Wired Smoke detector', '8', 'img/device/Wired_smoke_detector.png'),
(42, 'Water Pump', '8', 'img/device/Water_pump.png'),
(43, 'Desktop(Presonal Computer)', '9', 'img/device/'),
(44, 'Laptop', '9', 'img/device/'),
(45, 'MacBook', '9', 'img/device/'),
(46, 'Andriod Tablet', '13', 'img/device/'),
(47, 'Iphone', '13', 'img/device/'),
(48, 'Andriod Phone', '13', 'img/device/'),
(49, 'Ipad', '13', 'img/device/'),
(51, 'Microphone', '13', 'img/device/'),
(52, 'Microwave', '13', 'img/device/'),
(53, 'mixer', '13', 'img/device/'),
(54, 'Monitor', '13', 'img/device/'),
(55, 'Mosquito rocket', '13', 'img/device/'),
(56, 'Hair straightening machine', '13', 'img/device/'),
(57, 'Printer', '13', 'img/device/'),
(58, 'Lawn mower', '13', 'img/device/'),
(59, 'Meat grinder', '13', 'img/device/'),
(60, 'Computer mouse', '13', 'img/device/'),
(61, 'mp3 player', '13', 'img/device/'),
(62, 'Oil-free fryer', '13', 'img/device/'),
(63, 'keyboard piano', '13', 'img/device/'),
(64, 'Pressure cooker', '13', 'img/device/'),
(65, 'Plotter', '13', 'img/device/'),
(66, 'Oven', '13', 'img/device/'),
(67, 'Projector', '13', 'img/device/'),
(68, 'Radiator', '13', 'img/device/'),
(69, 'Radio', '13', 'img/device/'),
(70, 'Reading lamp', '13', 'img/device/'),
(71, 'Robotic vacuum cleaner', '13', 'img/device/'),
(72, 'Rice cooker', '13', 'img/device/'),
(73, 'Remote control', '13', 'img/device/'),
(74, 'Sandwich maker', '13', 'img/device/'),
(75, 'Scale', '13', 'img/device/'),
(76, 'Scanner', '13', 'img/device/'),
(77, 'Sewing machine', '13', 'img/device/'),
(78, 'Smart telivision', '13', 'img/device/'),
(79, 'Television', '13', 'img/device/'),
(80, 'Speakers', '13', 'img/device/'),
(81, 'Toaster', '13', 'img/device/'),
(82, 'Torch./Flashlight', '13', 'img/device/'),
(83, 'USB driver', '13', 'img/device/'),
(84, 'Vacumm cleaner', '13', 'img/device/'),
(85, 'Water Purifier', '13', 'img/device/'),
(86, 'Watch(analog/digital)', '13', 'img/device/'),
(87, 'Electric fan(any)', '13', 'img/device/'),
(88, 'Web cam', '13', 'img/device/'),
(89, 'Wi Fi modem', '13', 'img/device/'),
(90, 'CCTV', '8', 'img/device/CCTV.png'),
(104, 'sdadasdasd', '21', 'img/device/u-shape-type-aircon.png'),
(105, 'asdasdasdasd', '21', 'img/device/down-arrow.png'),
(106, 'dasdasdasd', '21', 'img/device/down-arrow.png');

-- --------------------------------------------------------

--
-- Table structure for table `needed_services`
--

CREATE TABLE `needed_services` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `needed_services`
--

INSERT INTO `needed_services` (`id`, `name`, `category`) VALUES
(1, 'Aircon', 'Electronics/Appliances'),
(2, 'Refrigerator', 'Electronics/Appliances'),
(3, 'Washing Machine', 'Electronics/Appliances'),
(4, 'Water Heater', 'Electronics/Appliances'),
(5, 'Lightning and Fixture', 'Electrical'),
(6, 'Outlet and Switch', 'Electrical'),
(7, 'Wiring and breaker', 'Electrical'),
(8, 'Doorbell and Device', 'Electronics/Appliances'),
(9, 'Computer', 'Electronics/Appliances'),
(10, 'Carpentry', 'Construction '),
(13, 'Other Device', 'Electronics/Appliances'),
(18, 'Bar Equipment', 'RMS'),
(19, 'Restaurant Equipment', ''),
(20, 'Plumbing', 'Construction'),
(21, 'Sample', 'RMS');

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(11) NOT NULL,
  `device` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `services` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `device`, `type`, `services`, `price`) VALUES
(1, '1', '1', '1', 750),
(2, '1', '2', '1', 1350),
(3, '1', '3', '1', 1950),
(4, '1', '4', '1', 2850),
(5, '1', '5', '1', 2850),
(6, '1', '6', '1', 2850),
(7, '1', '7', '1', 1350),
(8, '1', '50', '1', 750),
(9, '1', '1', '2', 1200),
(10, '1', '2', '2', 9500),
(11, '1', '3', '2', 11500),
(12, '1', '4', '2', 12500),
(13, '1', '5', '2', 12500),
(14, '1', '6', '2', 12500),
(15, '1', '7', '2', 1200),
(16, '1', '50', '2', 1200),
(17, '1', '1', '3', 385),
(18, '1', '2', '3', 385),
(19, '1', '3', '3', 385),
(20, '1', '4', '3', 385),
(21, '1', '5', '3', 385),
(22, '1', '6', '3', 385),
(23, '1', '7', '3', 385),
(24, '1', '50', '3', 385),
(25, '1', '1', '4', 700),
(26, '1', '2', '4', 2750),
(27, '1', '3', '4', 3850),
(28, '1', '4', '4', 450),
(29, '1', '5', '4', 4950),
(30, '1', '6', '4', 4950),
(31, '1', '7', '4', 700),
(32, '1', '50', '4', 700),
(33, '1', '1', '5', 1900),
(34, '1', '2', '5', 11500),
(35, '1', '3', '5', 13700),
(36, '1', '7', '5', 1900),
(37, '1', '1', '6', 400),
(38, '1', '2', '6', 400),
(39, '1', '3', '6', 400),
(40, '1', '4', '6', 400),
(41, '1', '5', '6', 400),
(42, '1', '6', '6', 400),
(43, '1', '7', '6', 400),
(44, '1', '50', '6', 400),
(45, '2', '8', '2', 400),
(46, '2', '9', '2', 400),
(47, '2', '10', '2', 400),
(48, '2', '11', '2', 400),
(49, '2', '12', '2', 400),
(50, '2', '13', '2', 400),
(51, '3', '14', '2', 400),
(52, '3', '15', '2', 400),
(53, '3', '16', '2', 400),
(54, '3', '14', '3', 1200),
(55, '3', '15', '3', 1200),
(56, '3', '16', '3', 1200),
(57, '4', '17', '2', 400),
(58, '4', '18', '2', 400),
(59, '4', '17', '3', 1200),
(60, '4', '18', '3', 1500),
(61, '4', '17', '4', 700),
(62, '4', '18', '4', 500),
(63, '4', '17', '5', 1800),
(64, '4', '18', '5', 2300),
(65, '5', '19', '2', 400),
(66, '5', '20', '2', 400),
(67, '5', '21', '2', 400),
(68, '5', '22', '2', 400),
(69, '5', '23', '2', 400),
(70, '5', '24', '2', 400),
(71, '5', '25', '2', 400),
(72, '5', '26', '2', 400),
(73, '5', '19', '3', 1100),
(74, '5', '20', '3', 1100),
(75, '5', '21', '3', 1100),
(76, '5', '22', '3', 1100),
(77, '5', '23', '3', 1100),
(78, '5', '24', '3', 1100),
(79, '5', '25', '3', 1100),
(80, '5', '26', '3', 1100),
(81, '6', '27', '2', 400),
(82, '6', '28', '2', 400),
(83, '6', '29', '2', 400),
(84, '6', '30', '2', 400),
(85, '6', '31', '2', 400),
(86, '6', '32', '2', 400),
(87, '6', '33', '2', 400),
(88, '6', '27', '3', 900),
(89, '6', '28', '3', 900),
(90, '6', '29', '3', 900),
(91, '6', '30', '3', 900),
(92, '6', '31', '3', 900),
(93, '6', '32', '3', 900),
(94, '6', '33', '3', 900),
(95, '7', '34', '2', 400),
(96, '7', '35', '2', 400),
(97, '7', '36', '2', 400),
(98, '7', '37', '2', 400),
(99, '7', '38', '2', 400),
(100, '7', '39', '2', 400),
(101, '7', '34', '3', 1100),
(102, '7', '35', '3', 1100),
(103, '7', '36', '3', 1100),
(104, '7', '37', '3', 1100),
(105, '7', '38', '3', 1100),
(106, '7', '39', '3', 1100),
(107, '8', '40', '2', 400),
(108, '8', '41', '2', 400),
(109, '8', '42', '2', 400),
(110, '8', '40', '3', 1000),
(111, '8', '41', '3', 1000),
(112, '8', '42', '3', 1000),
(113, '8', '90', '2', 400),
(114, '8', '90', '3', 1200),
(115, '13', '48', '2', 600),
(116, '13', '49', '2', 600),
(117, '13', '51', '2', 600),
(118, '13', '52', '2', 600),
(119, '13', '53', '2', 600),
(120, '13', '54', '2', 600),
(121, '13', '55', '2', 600),
(122, '13', '56', '2', 600),
(123, '13', '57', '2', 600),
(124, '13', '58', '2', 600),
(125, '13', '59', '2', 600),
(126, '13', '60', '2', 600),
(127, '13', '61', '2', 600),
(128, '13', '62', '2', 600),
(129, '13', '63', '2', 600),
(130, '13', '64', '2', 600),
(131, '13', '65', '2', 600),
(132, '13', '66', '2', 600),
(133, '13', '67', '2', 600),
(134, '13', '68', '2', 600),
(135, '13', '69', '2', 600),
(136, '13', '70', '2', 600),
(137, '13', '71', '2', 600),
(138, '13', '72', '2', 600),
(139, '13', '73', '2', 600),
(140, '13', '74', '2', 600),
(141, '13', '75', '2', 600),
(142, '13', '76', '2', 600),
(143, '13', '77', '2', 600),
(144, '13', '78', '2', 600),
(145, '13', '79', '2', 600),
(146, '13', '80', '2', 600),
(147, '13', '81', '2', 600),
(148, '13', '82', '2', 600),
(149, '13', '83', '2', 600),
(150, '13', '84', '2', 600),
(151, '13', '85', '2', 600),
(152, '13', '86', '2', 600),
(153, '13', '87', '2', 600),
(154, '13', '88', '2', 600),
(155, '13', '89', '2', 600),
(156, '13', '46', '2', 1100),
(157, '13', '47', '2', 1100),
(169, '18', '99', '1', 4000),
(170, '18', '99', '2', 2100),
(171, '21', '104', '1', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`) VALUES
(1, 'Cleaning'),
(2, 'Repair'),
(3, 'Installation'),
(4, 'Dismantling'),
(5, 'Relocation'),
(6, 'Installation Site Survey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_sessions`
--
ALTER TABLE `active_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `device_type`
--
ALTER TABLE `device_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `needed_services`
--
ALTER TABLE `needed_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_sessions`
--
ALTER TABLE `active_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `device_type`
--
ALTER TABLE `device_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `needed_services`
--
ALTER TABLE `needed_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=172;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
