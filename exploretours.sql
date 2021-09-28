-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2021 at 05:54 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exploretours`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` mediumtext NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `title`, `image`, `description`) VALUES
(2, 'Hiking', 'img/hiking.jpg', 'Hiking is a long, vigorous walk, usually on trails or footpaths in the countryside. Walking for pleasure developed in Europe during the eighteenth century.'),
(3, 'Balloning', 'img/balloon.jpg', 'Balloning');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'Prathibha', '@abc123');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `title` varchar(100) NOT NULL,
  `image` longtext NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`title`, `image`, `description`) VALUES
('Rathnapura', '.', 'Maha Saman Devalaya or the Great Saman Temple is a shrine dedicated to deity Saman, situated at Ratnapura, Sri Lanka who is the presiding deity of the Sri Pada Mountain'),
('Rathnapura', 'sdfghjk', 'xxvbs');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `image` mediumtext NOT NULL,
  `description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `Name`, `image`, `description`) VALUES
(3, 'Esala Perahara', 'img/esalaperahera.jpg', 'The Kandy Esala Perahera also known as The Festival of the Tooth is a festival held in July and August in Kandy, Sri Lanka. '),
(4, 'Diwali festival', 'img/slide3.jpg', 'Diwali is a festival of lights and one of the major festivals celebrated by Hindus, Jains, Sikhs and some Buddhists, notably Newar Buddhists. ');

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `guideId` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `exp` varchar(100) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guide`
--

INSERT INTO `guide` (`guideId`, `name`, `cost`, `exp`, `rating`, `Id`) VALUES
(1, 'John', '10000', '8 years', '5 stars', 1),
(2, 'William', '12000', '10 years', '4 stars', 2),
(3, 'Michal', '11000', '3 years', '3 stars', 3),
(4, 'Edward', '13000', '15 years', '5 stars', 1),
(5, 'Jacob', '9000', '7 years', '5 stars', 3),
(6, 'Eric', '15000', '1 year', '3 stars', 2),
(7, 'Jack', '10000', '5 years', '2 stars', 3),
(8, 'Mike', '8000', '7 years', '5 stars', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotelID` int(10) NOT NULL,
  `hotel` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `hbudget` decimal(10,0) NOT NULL,
  `guest` varchar(100) NOT NULL,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  `payby` varchar(10) NOT NULL,
  `Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotelID`, `hotel`, `location`, `rating`, `hbudget`, `guest`, `checkin`, `checkout`, `payby`, `Id`) VALUES
(1, 'Sea Horizon', 'monaragala', '0', '10000', 'Guest 2', '2021-06-18 00:00:00', '2021-06-21 00:00:00', 'Credit Car', 1),
(2, 'Travelodge', 'hambanthota', '0', '30000', 'Guest 4', '2021-06-23 00:00:00', '2021-06-28 00:00:00', 'Credit Car', 2),
(3, 'Sunset Lodge', 'batticalo', 'star3', '40000', 'Guest 4', '2021-06-22 00:00:00', '2021-06-28 00:00:00', 'Credit Car', 3),
(4, 'Sea Horizon', 'matale', 'star4', '100000', 'Guest 5', '2021-06-27 00:00:00', '2021-06-30 00:00:00', 'Cash', 1),
(5, 'Sunset Lodge', 'jaffna', 'star4', '40000', 'Guest 6', '2021-06-20 00:00:00', '2021-06-26 00:00:00', 'Credit Car', 2),
(6, 'Hotel Moonlite', 'kaluthara', 'star2', '20000', 'Guest 4', '2021-06-18 00:00:00', '2021-06-19 00:00:00', 'Cash', 3),
(7, 'Elite Peak', 'kandy', 'star3', '30000', 'Guest 4', '2021-06-19 00:00:00', '2021-06-21 00:00:00', 'Credit Car', 1),
(8, 'Grand Ray', 'jaffna', 'star5', '40000', 'Guest 2', '2021-06-21 00:00:00', '2021-06-26 00:00:00', 'Credit Car', 2),
(9, 'Sunset Lodge', 'matara', 'star5', '40000', 'Guest 5', '2021-06-27 00:00:00', '2021-06-30 00:00:00', 'Credit Car', 0),
(10, 'Sea Horizon', 'matale', 'star3', '30000', 'Guest 6', '2021-06-22 00:00:00', '2021-06-30 00:00:00', 'Credit Car', 0),
(11, 'Elite Peak', 'galle', 'star4', '30000', 'Guest 4', '2021-06-24 00:00:00', '2021-06-30 00:00:00', 'Credit Car', 0),
(12, 'Sea Horizon', 'matale', 'star4', '30000', 'Guest 2', '2021-06-23 00:00:00', '2021-06-26 00:00:00', 'Credit Car', 0);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `name` varchar(100) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`name`, `email`, `message`) VALUES
('Prathibha', 'it20636524@sliit.lk', 'Hello everyone'),
('Dilini Sandalika', 'dilsandu96@gmail.com', 'my mail');

-- --------------------------------------------------------

--
-- Table structure for table `tourdriver`
--

CREATE TABLE `tourdriver` (
  `driverId` int(10) NOT NULL,
  `dname` varchar(100) NOT NULL,
  `dcost` decimal(10,0) NOT NULL,
  `exp` varchar(100) NOT NULL,
  `rating` varchar(10) NOT NULL,
  `Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourdriver`
--

INSERT INTO `tourdriver` (`driverId`, `dname`, `dcost`, `exp`, `rating`, `Id`) VALUES
(1, 'Vinod', '5000', '5 years', '4 stars', 1),
(2, 'Isuru', '6000', '$15', '4 stars', 2),
(3, 'Kavinga', '7000', '8 years', '5 stars', 2),
(4, 'Prabhath', '8000', '12 years', '4 stars', 3),
(5, 'Umesh', '10000', '6 years', '5 stars', 1),
(6, 'Irosh', '12000', '2 years', '2 stars', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(10) NOT NULL,
  `ful` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `vehicleID` int(10) NOT NULL,
  `hotelID` int(10) NOT NULL,
  `guideID` int(10) NOT NULL,
  `driverId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `ful`, `mail`, `pass`, `vehicleID`, `hotelID`, `guideID`, `driverId`) VALUES
(1, 'Dilini Sandalika', 'dilsandu96@gmail.com', 'sanda123', 1, 2, 3, 4),
(2, 'mokshi perera', 'hhh@gmail.com', 'mossi123', 2, 1, 3, 5),
(3, 'Prathibha Sathyanjalee', 'pppppp@gmail.com', 'prathibha123', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicleID` int(10) NOT NULL,
  `location` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `distance` int(255) NOT NULL,
  `rdate` date NOT NULL,
  `type` varchar(10) NOT NULL,
  `vpay` decimal(10,0) NOT NULL,
  `Id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicleID`, `location`, `destination`, `purpose`, `distance`, `rdate`, `type`, `vpay`, `Id`) VALUES
(1, '', '', 'on', 10, '2021-06-17', 'car', '10000', 1),
(2, 'ampara', 'rathnapura', 'on', 10, '2021-06-17', 'car', '50000', 2),
(3, 'matara', 'anuradhapura', 'on', 12, '2021-06-24', 'bus', '50000', 1),
(4, 'kurunegala', 'trincomalee', 'Bussiness', 15, '2021-06-23', 'footbicycl', '20000', 3),
(5, 'matara', 'anuradhapura', 'Leisure', 14, '2021-06-29', 'van', '40000', 1),
(6, 'kurunegala', 'rathnapura', 'Leisure', 12, '2021-06-29', 'jeep', '30000', 2),
(7, 'polonnaruwa', 'destination', 'Bussiness', 15, '2021-06-28', 'car', '20000', 3),
(8, 'kegalle', 'kandy', 'Leisure', 10, '2021-06-19', 'van', '10000', 2),
(9, 'gampaha', 'kandy', 'Leisure', 12, '2021-06-18', 'car', '30000', 1),
(10, 'matara', 'ne', 'Leisure', 12, '2021-06-23', 'bus', '40000', 0),
(11, 'anuradhapura', 'rathnapura', 'Bussiness', 12, '2021-06-20', 'threewhl', '10000', 0),
(12, 'anuradhapura', 'kandy', 'Leisure', 7, '2021-06-28', 'van', '10000', 0),
(13, 'ampara', 'kandy', 'Leisure', 5, '2021-06-02', 'car', '10000', 0),
(14, 'mullaitivu', 'trincomalee', 'Leisure', 4, '2021-06-27', 'jeep', '20000', 0),
(15, 'mannar', 'destination', 'Leisure', 45, '2021-06-23', 'car', '20000', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`guideId`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotelID`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `tourdriver`
--
ALTER TABLE `tourdriver`
  ADD PRIMARY KEY (`driverId`),
  ADD KEY `Id` (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `vehicleID` (`vehicleID`),
  ADD KEY `hotelID` (`hotelID`),
  ADD KEY `guideID` (`guideID`),
  ADD KEY `driverId` (`driverId`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicleID`),
  ADD KEY `Id` (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `guideId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotelID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tourdriver`
--
ALTER TABLE `tourdriver`
  MODIFY `driverId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicleID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
