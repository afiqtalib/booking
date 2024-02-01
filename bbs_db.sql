-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 01, 2024 at 09:18 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbs_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_phonenum` varchar(255) DEFAULT NULL,
  `admin_username` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_phonenum`, `admin_username`, `admin_password`) VALUES
(1000, 'Cindai Budriah Abdullah', '0142357945', 'admin', '12345'),
(1001, 'admin', '0131347129', 'barbershop', '12345'),
(1002, 'barber', '0135564646', 'barber', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `barbers`
--

CREATE TABLE `barbers` (
  `barber_id` int(11) NOT NULL,
  `barber_name` varchar(255) NOT NULL,
  `barber_phonenum` varchar(255) NOT NULL,
  `barber_email` varchar(255) NOT NULL,
  `barber_un` varchar(255) NOT NULL,
  `barber_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barbers`
--

INSERT INTO `barbers` (`barber_id`, `barber_name`, `barber_phonenum`, `barber_email`, `barber_un`, `barber_password`) VALUES
(2001, 'Danish ', '2353253253', 'barberdanish@gmail.com', 'barber_danish', '12345'),
(2004, 'Zaim', '0114343564', 'barberzaim@gmail.com', 'barber_zaim', '12345'),
(2006, 'Afif', '01358312', 'afiq@gmaiodd.com', 'barber_afif', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `book_id` int(11) NOT NULL,
  `book_date` date DEFAULT NULL,
  `book_time` time DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `barber_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `slot_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`book_id`, `book_date`, `book_time`, `status`, `barber_id`, `user_id`, `service_id`, `slot_id`) VALUES
(3094, '2022-07-21', NULL, 'cancel', 2001, 14, 5000, 40),
(3099, '2022-08-04', NULL, 'cancel', 2004, 14, 5004, 46),
(3105, '2022-08-03', NULL, 'cancel', 2006, 14, 5003, 47),
(3107, '2022-07-18', NULL, 'completed', 2004, 14, 5000, 40),
(3111, '2022-07-26', NULL, 'completed', 2001, 16, 5000, 41),
(3112, '2022-07-26', NULL, 'completed', 2001, 16, 5002, 40),
(3113, '2022-07-26', NULL, 'cancel', 2004, 21, 5006, 40),
(3114, '2022-07-27', NULL, 'cancel', 2001, 18, 5007, 41),
(3115, '2022-07-26', NULL, 'cancel', 2004, 22, 5000, 41),
(3116, '2022-07-26', NULL, 'completed', 2004, 22, 5005, 42),
(3117, '2022-07-31', NULL, 'completed', 2004, 23, 5002, 41),
(3118, '2022-07-26', NULL, 'completed', 2006, 15, 5007, 41),
(3119, '2022-11-01', NULL, 'uncompleted', 2001, 14, 5000, 42);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_desc` varchar(255) NOT NULL,
  `service_price` decimal(6,2) NOT NULL,
  `service_duration` int(5) NOT NULL,
  `service_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_desc`, `service_price`, `service_duration`, `service_img`) VALUES
(5000, 'Hair Cut  ', 'Our barbers can make your hairstylist follow customer tastes and the latest hairstyle. You will look be handsome ', '25.00', 30, NULL),
(5001, 'Haircut & Wash', 'Our barbers can make your hair more handsome and clean as a crown for men', '35.00', 60, NULL),
(5002, 'Low Fade', 'Simple hairstyle but nice', '20.00', 60, NULL),
(5003, 'Hair Color ', 'Our barbers can make your hair more handsome as a crown for men', '40.00', 60, NULL),
(5004, 'Hair Rebonding', 'Our barbers can make your hair more handsome and healthy as a crown for men', '100.00', 60, NULL),
(5005, 'Hair Perm', 'Our barbers can make your hair more handsome as a crown for men', '60.00', 60, NULL),
(5006, 'Under Cut Style', 'Suitable for student hair style', '20.00', 45, NULL),
(5007, 'Mullet Style', 'Simple style but nice for all human', '25.00', 45, NULL),
(5008, 'hair wash', 'test', '20.00', 40, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `slot_id` int(11) NOT NULL,
  `time_slot` time NOT NULL,
  `date_slot` date DEFAULT NULL,
  `slot_status` varchar(255) NOT NULL,
  `barber_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`slot_id`, `time_slot`, `date_slot`, `slot_status`, `barber_id`) VALUES
(40, '12:00:00', NULL, 'available', NULL),
(41, '13:15:00', NULL, 'available', NULL),
(42, '14:30:00', NULL, 'available', NULL),
(43, '15:45:00', NULL, 'available', NULL),
(44, '17:00:00', NULL, 'available', NULL),
(46, '18:15:00', NULL, 'available', NULL),
(47, '19:30:00', NULL, 'available', NULL),
(49, '20:30:00', NULL, 'available', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phonenum` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `phonenum`, `username`, `password`) VALUES
(1, 'customer', 'customer@gmail.com', '01121828562', 'customer', '12345'),
(14, 'MUHAMMAD AFIQ BIN TALIB ALI', '2019291398@student.uitm.edu.my', '0114983532', 'afiqtalib', '827ccb0eea8a706c4c34a16891f84e7b'),
(15, 'MUHAMMAD ADAM ILMAN BIN ASYRAF', 'adamilman@gmail.com', '0112342353', 'adamilman', '827ccb0eea8a706c4c34a16891f84e7b'),
(16, 'MUHAMMAD AMSYAR BIN JISMI ABRAR', 'amsyar@gmail.com', '013463464', 'amsyar', '827ccb0eea8a706c4c34a16891f84e7b'),
(17, 'MUHAMMAD ADEEB IRFAN', 'adeeb@gmail.com', '0135325325', 'adeeb_irfan', '827ccb0eea8a706c4c34a16891f84e7b'),
(18, 'MUHAMMAD IKHMAL', 'ikhmal@gmail.com', '01452356436', 'ikhmal', '827ccb0eea8a706c4c34a16891f84e7b'),
(19, 'MUHAMMAD ADAM HILMI', 'adamhilmi@gmail.com', '0153554543', 'adam_hilmi', '827ccb0eea8a706c4c34a16891f84e7b'),
(20, 'MUHAMMAD AIMAN MUSYRIF', 'aimanmusyrif@gmail.com', '014243546434', 'aiman_musyrif', '827ccb0eea8a706c4c34a16891f84e7b'),
(21, 'MUHAMMAD FAIZ RAHMAN', 'faiz@gmail.com', '014235346', 'faiz_rahman', '827ccb0eea8a706c4c34a16891f84e7b'),
(22, 'MUHAMMAD ISMA SYAFI', 'isma@gmail.com', '01424235235', 'isma_syafi', '827ccb0eea8a706c4c34a16891f84e7b'),
(23, 'MUHAMMAD ASIQAL', 'asiqal@gmail.com', '01398289423', 'asiqal', '827ccb0eea8a706c4c34a16891f84e7b'),
(24, 'afiq', 'afiq@gmail.com', '02942343', 'afiq123', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `barbers`
--
ALTER TABLE `barbers`
  ADD PRIMARY KEY (`barber_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `barber_id` (`barber_id`,`user_id`,`service_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1003;

--
-- AUTO_INCREMENT for table `barbers`
--
ALTER TABLE `barbers`
  MODIFY `barber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2007;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3120;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5009;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
