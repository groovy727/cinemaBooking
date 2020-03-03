-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 09:37 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `seat` text NOT NULL,
  `show_date` date NOT NULL,
  `txn_id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` char(20) NOT NULL,
  `category` varchar(200) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `show_id`, `seat`, `show_date`, `txn_id`, `user_id`, `status`, `category`, `time`) VALUES
(192, 51, '\'5_8\',', '2020-02-05', 0, 55, 'BOOKED', 'ODC', '2020-02-05 10:58:24'),
(193, 59, '\'1_4\',', '2020-02-15', 0, 55, 'BOOKED', 'BOX', '2020-02-12 10:35:37'),
(194, 57, '\'5_10\',', '2020-02-26', 0, 55, 'BOOKED', 'ODC', '2020-02-24 11:02:11'),
(195, 57, '\'5_10\',', '2020-02-25', 0, 55, 'BOOKED', 'ODC', '2020-02-24 11:04:47'),
(196, 60, '\'1_17\',', '2020-02-26', 0, 55, 'BOOKED', 'ODC', '2020-02-24 14:43:47'),
(197, 60, '\'1_17\',', '2020-02-26', 0, 55, 'FAILED', 'ODC', '2020-02-24 14:45:56'),
(198, 60, '\'1_16\',', '2020-02-29', 0, 55, 'FAILED', 'ODC', '2020-02-24 15:09:29'),
(199, 51, '\'2_14\',\'2_15\',', '2020-02-27', 0, 58, 'BOOKED', 'GOLD', '2020-02-24 15:31:54'),
(200, 55, '\'15_16\',', '2020-02-27', 0, 58, 'FAILED', 'ODC', '2020-02-24 15:35:57'),
(201, 61, '\'4_14\',\'4_15\',', '2020-03-01', 0, 60, 'BOOKED', 'GOLD', '2020-02-27 11:12:25');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `piece` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `movie_image` varchar(100) NOT NULL,
  `movie_details` text NOT NULL,
  `movie_ratings` int(11) NOT NULL,
  `movie_cast` text NOT NULL,
  `movie_facts` text NOT NULL,
  `movie_embed` varchar(300) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `movie_name`, `movie_image`, `movie_details`, `movie_ratings`, `movie_cast`, `movie_facts`, `movie_embed`, `status`) VALUES
(35, 'Uncut Gems', 'ug2.jpg', '				  				  				  				  A charismatic jeweller makes a high-stakes bet that could lead to the windfall of a lifetime. In a precarious high-wire act, he must balance business, family and adversaries on all sides in pursuit of the ultimate win.				  				  				  				  ', 5, '				  				  				  				  Adam Sandler, LaKeith Steinfeld, Julia Fox				  				  				  				  ', '				  				  				  				  A role for NBA champion KG.				  				  				  				  ', 'https://www.youtube.com/embed/PtR5llR2NEM', 0),
(36, 'Ford v Ferrari', 'fvf.jpg', '				  American automotive designer Carroll Shelby and fearless British race car driver Ken Miles battle corporate interference, the laws of physics and their own personal demons to build a revolutionary vehicle for the Ford Motor Co. 				  ', 3, '				  Matt Damon, Christian Bale				  ', '				  Based on a true story.				  ', 'https://www.youtube.com/embed/I3h9Z89U9ZA', 0),
(38, 'It chapter 2', 'it-2.jpg', '				  				  				  Defeated by members of the Losers Club, the evil clown Pennywise returns twenty seven years later to terrorize the town of Derry, Maine, once again. Now adults, the childhood friends have long since gone their separate ways. But when people start disappearing, Mike Hanlon calls the others home for one final stand.				  				  				  ', 4, '				  				  				  Bill Hader, Jessica Chastain, James McAvoy				  				  				  ', '				  				  				  Based on Stephen King novel.				  				  				  ', 'https://www.youtube.com/embed/zqUopiAYdRg', 1),
(39, 'Midway', 'midw.jpg', 'On Dec 7 1941 Japanese forces launch a devastating attack on Pearl Harbor, the U.S. naval base in Hawaii. Six months later, the Battle of Midway commences on June 4, 1942, as the Japanese navy once again plans a strike against American ships in the Pacific. For the next three days, the U.S. Navy and a squad of brave fighter pilots engage the enemy in one of the most important and decisive battles of World War II.', 3, 'Ed skrein, Patrick wilson, Woody harrelson', 'True story based on world war two.', 'https://www.youtube.com/embed/BfTYY_pac8o', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE `shows` (
  `show_id` int(11) NOT NULL,
  `show_start_date` date NOT NULL,
  `show_end_date` date NOT NULL,
  `show_start_time` time NOT NULL,
  `show_end_time` time NOT NULL,
  `theatre_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `odc_full` int(11) NOT NULL,
  `odc_half` int(11) NOT NULL,
  `gold_full` int(11) NOT NULL,
  `gold_half` int(11) NOT NULL,
  `box` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shows`
--

INSERT INTO `shows` (`show_id`, `show_start_date`, `show_end_date`, `show_start_time`, `show_end_time`, `theatre_id`, `movie_id`, `odc_full`, `odc_half`, `gold_full`, `gold_half`, `box`) VALUES
(51, '2020-03-01', '2020-03-31', '09:00:00', '11:00:00', 22, 36, 800, 400, 1000, 500, 1500),
(55, '2020-03-01', '2020-03-31', '13:00:00', '16:00:00', 22, 35, 300, 150, 1000, 500, 1500),
(56, '2020-03-01', '2020-03-31', '09:00:00', '11:00:00', 23, 35, 700, 350, 500, 250, 400),
(57, '2020-03-01', '2020-03-31', '14:00:00', '17:00:00', 23, 38, 400, 200, 300, 150, 250),
(58, '2020-03-01', '2020-03-31', '22:00:00', '01:00:00', 23, 36, 800, 400, 1000, 500, 900),
(59, '2020-03-01', '2020-03-31', '09:00:00', '12:00:00', 26, 38, 400, 200, 600, 300, 500),
(60, '2020-03-01', '2020-03-31', '13:00:00', '15:00:00', 26, 35, 700, 350, 1000, 500, 1200),
(61, '2020-03-01', '2020-03-31', '20:00:00', '23:00:00', 22, 39, 700, 350, 1000, 500, 800),
(62, '2020-03-01', '2020-03-31', '13:00:00', '16:00:00', 26, 39, 800, 400, 1500, 750, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `theatre_id` int(11) NOT NULL,
  `theatre_name` varchar(100) NOT NULL,
  `theatre_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`theatre_id`, `theatre_name`, `theatre_image`) VALUES
(22, 'Movies World', 'movie-world-cinemas-meerut-road-ghaziabad-s36u.jpg'),
(23, 'PVR', 'th1.jpg'),
(26, 'Wave Cinema', 'photo-1513106580091-1d82408b8cd6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_fname` varchar(100) NOT NULL,
  `user_lname` varchar(100) NOT NULL,
  `user_gender` char(10) NOT NULL,
  `user_dob` date NOT NULL,
  `user_address` varchar(200) NOT NULL,
  `user_city` char(100) NOT NULL,
  `user_district` char(100) NOT NULL,
  `user_mobile` bigint(20) NOT NULL,
  `user_contact` bigint(20) NOT NULL,
  `user_password` text NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `status` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_fname`, `user_lname`, `user_gender`, `user_dob`, `user_address`, `user_city`, `user_district`, `user_mobile`, `user_contact`, `user_password`, `user_email`, `status`) VALUES
(55, 'Arthur', 'Obel', 'Male', '1994-09-01', '457', 'Nairobi', 'Nrb south', 0, 720029365, '202cb962ac59075b964b07152d234b70', 'obelarthur@gmail.com', 'PENDING'),
(56, 'Chris', 'Eriksen', 'Male', '2000-09-08', '023', 'Nairobi', 'Nrb', 723, 722726543, 'e10adc3949ba59abbe56e057f20f883e', 'obelarthur.ap@gmail.com', 'PENDING'),
(57, 'Arthur', 'Obel', 'Male', '2000-01-01', '457', 'Nairobi', 'nrb', 0, 7022802497, 'e10adc3949ba59abbe56e057f20f883e', 'otienoarthur@ymail.com', 'PENDING'),
(58, 'Arthur', 'Obel', 'Female', '1996-08-01', '457', 'Nairobi', 'nrb', 720029365, 720029365, '827ccb0eea8a706c4c34a16891f84e7b', 'otieno.arthur@students.ku.ac.ke', 'PENDING'),
(59, 'Alex ', 'Hunter', 'Male', '1996-05-05', '029', 'London', 'ldn', 0, 729, '5c7d5705ab73466c0584cc782cb12d2e', 'alex29@gmail', 'PENDING'),
(60, 'Alex ', 'Hunter', 'Male', '1996-05-05', '029', 'London', 'ldn', 0, 729, '5c7d5705ab73466c0584cc782cb12d2e', 'alex29@gmail.com', 'PENDING');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `shows`
--
ALTER TABLE `shows`
  ADD PRIMARY KEY (`show_id`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`theatre_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `shows`
--
ALTER TABLE `shows`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `theatre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
