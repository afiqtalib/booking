-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 31, 2022 at 09:04 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

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
  `admin_name` varchar(255) NOT NULL,
  `manager_phonenum` int(255) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `manager_phonenum`, `admin_username`, `admin_password`) VALUES
(1000, 'Cindai Budriah Abdullah', 118545982, 'admin', '*01A6717B58FF5C7EAFFF6CB7C96F7428EA65FE4C');

-- --------------------------------------------------------

--
-- Table structure for table `barbers`
--

CREATE TABLE `barbers` (
  `barber_id` int(11) NOT NULL,
  `barber_name` varchar(255) NOT NULL,
  `barber_phonenum` int(255) NOT NULL,
  `barber_email` varchar(255) NOT NULL,
  `barber_un` varchar(255) NOT NULL,
  `barber_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barbers`
--

INSERT INTO `barbers` (`barber_id`, `barber_name`, `barber_phonenum`, `barber_email`, `barber_un`, `barber_password`) VALUES
(2000, 'Zaim', 139331183, 'zaim@gmail.com', 'zaim2000', '*33E68E4DA8116C074D5917C2A6833BC90B39578A'),
(2001, 'Danish ', 135634646, 'danish@gmail.com', 'danish123', 'danish123');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `book_id` int(11) NOT NULL,
  `book_date` date NOT NULL,
  `book_time` time NOT NULL,
  `book_status` enum('successfully','cancellation') NOT NULL,
  `barber_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`book_id`, `book_date`, `book_time`, `book_status`, `barber_id`, `cust_id`, `service_id`) VALUES
(3000, '2022-05-10', '00:16:00', 'successfully', 2000, 1, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(255) NOT NULL,
  `cust_phonenum` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_username` varchar(50) NOT NULL,
  `cust_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cust_id`, `cust_name`, `cust_phonenum`, `cust_email`, `cust_username`, `cust_password`) VALUES
(4000, 'MUHAMMAD AFIQ BIN TALIB ALI ', '01121828562', 'afiqtalib2580@gmail.com', 'customer', 'customer123');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `service_description` varchar(255) NOT NULL,
  `service_price` decimal(6,2) NOT NULL,
  `service_duration` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_description`, `service_price`, `service_duration`) VALUES
(5000, 'Hair Cut  ', 'Our barbers can make your hairstylist follow customer tastes and the latest hairstyle. You will look be handsome ', '20.00', 45),
(5001, 'Hair Wash', 'Our barbers can make your hair more handsome and clean as a crown for men', '15.00', 45),
(5002, 'Hair Rebonding ', 'Our barbers can make your hair more handsome as a crown for men', '100.00', 60),
(5003, 'Hair Color ', 'Our barbers can make your hair more handsome as a crown for men', '40.00', 60),
(5004, 'Hair Treatment ', 'Our barbers can make your hair more handsome and healthy as a crown for men', '100.00', 60),
(5005, 'Hair Perm', 'Our barbers can make your hair more handsome as a crown for men', '60.00', 45),
(5006, 'Under Cut ', 'nipis tepi', '20.00', 45);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `role` enum('manager','barber','customer') NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `role`, `username`, `password`) VALUES
(3, 'manager', 'afiq1710', '6b22b6915602dbe03740735d679cff27'),
(4, 'manager', 'customer', 'f4ad231214cb99a985dff0f056a36242'),
(5, 'manager', 'customer323', '827ccb0eea8a706c4c34a16891f84e7b');

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
  ADD KEY `barber_id` (`barber_id`,`cust_id`,`service_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cust_id`),
  ADD KEY `cust_email` (`cust_email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

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
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;

--
-- AUTO_INCREMENT for table `barbers`
--
ALTER TABLE `barbers`
  MODIFY `barber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2002;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3001;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4001;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5007;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
