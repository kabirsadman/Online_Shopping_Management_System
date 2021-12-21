-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 08:28 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_shopping_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sno` int(3) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sno`, `feedback`) VALUES
(1, 'Very cool'),
(9, 'amazing'),
(12, 'exceptional'),
(20, 'lol'),
(34, 'mindblowing'),
(35, 'This shoe really is amazing'),
(36, 'sky bluse shoe is awesome'),
(37, 'this shoe is awesome'),
(39, 'amazing'),
(40, 'jasvghfvdhgsavfhdbvasjfhbadshbfah');

-- --------------------------------------------------------

--
-- Table structure for table `shoe`
--

CREATE TABLE `shoe` (
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `availibility` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shoe`
--

INSERT INTO `shoe` (`name`, `brand`, `code`, `availibility`, `price`, `discount`, `image`) VALUES
('Sky Blue', 'Bata', 'BAT1100', 'YES', '133', '25', 'images/shoe-1.png'),
('Rainbow', 'Bata', 'BAT1101', 'YES', '133', '25', 'images/shoe-2.png'),
('Blue Ladies', 'Bata', 'BAT1102', 'YES', '133', '25', 'images/shoe-6.png'),
('Chessboard', 'Bata', 'BAT1105', 'YES', '133', '25', 'images/shoe-5.png'),
('American', 'Bata', 'BAT1110', 'YES', '133', '25', 'images/shoe-3.png'),
('Pink Ladies', 'Manju', 'MAN1102', 'YES', '133', '25', 'images/shoe-7.png'),
('Coffe-deep Blue', 'Pagasus', 'PAG1100', 'YES', '133', '25', 'images/shoe-4.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('ash', 'ash#', 'ash@gmail.com'),
('kabir', '321#', 'kabir@gmail.com'),
('khan', 'khan#', 'khan@gmail.com'),
('loftus', 'loftus#', 'loftus@gmail.com'),
('max', 'max#', 'max@gmail.com'),
('ovro', '123#', 'ovro@gmail.com'),
('payel', 'payel#', 'payel@gmail.com'),
('rot', 'rot#', 'rot@gmail.com'),
('sadman', 'sadman#', 'sadman@gmail.com'),
('sami', '123#', 'sami@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `shoe`
--
ALTER TABLE `shoe`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
