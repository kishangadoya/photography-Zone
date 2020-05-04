-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2019 at 12:08 PM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pz`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('urvish', 'us');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `category` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `category`, `image`) VALUES
(1, 'Photographer', 'photographer.jpg'),
(2, 'Videographer', 'videography.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `subject` text NOT NULL,
  `description` text NOT NULL,
  `from_user` text NOT NULL,
  `fdbk_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `subject`, `description`, `from_user`, `fdbk_date`) VALUES
(1, 'interface', 'The interface has some bugs', 'abc', '2018-03-22'),
(2, 'ui', 'color is good', '?', '0000-00-00'),
(3, 'hello', 'this is feedback', '?', '0000-00-00'),
(4, 'about', 'awesome', '?', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `client` text NOT NULL,
  `party` text NOT NULL,
  `pid` text NOT NULL,
  `package` text NOT NULL,
  `venue` text NOT NULL,
  `booked_on` text NOT NULL,
  `booked_date` text NOT NULL,
  `description` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `client`, `party`, `pid`, `package`, `venue`, `booked_on`, `booked_date`, `description`, `status`) VALUES
(1, 'abc', 'abc', '2', 'Engagement', 'Kalawad road', '5/04/2018', '', '-', 'Approve'),
(11, 'abc', 'abc', '2', 'Engagement', '150 ft ring road', '12/04/2018', '', '-', 'Approve'),
(17, 'abc', 'abc', '3', 'Outdoor', 'er', '16/05/2018', 'latest', 'd', 'Approve');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `client` text NOT NULL,
  `package_name` text NOT NULL,
  `description` text NOT NULL,
  `quality` text NOT NULL,
  `clicks` text NOT NULL,
  `hours` varchar(20) NOT NULL,
  `drone` text NOT NULL,
  `price` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pid`, `id`, `client`, `package_name`, `description`, `quality`, `clicks`, `hours`, `drone`, `price`) VALUES
(1, 1, 'abc', 'Wedding', 'This is wedding package', 'High', '400', '2', 'N/A', '30,000'),
(2, 1, 'abc', 'Engagement', 'This is engagement package	', 'Very high', '500+', '2', 'Available', '50,000'),
(3, 1, 'abc', 'Outdoor', 'This is outdoor package', 'HD', '400+', '2', 'N/A', '30,000');

-- --------------------------------------------------------

--
-- Table structure for table `reg_photographers`
--

CREATE TABLE `reg_photographers` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `bday` text NOT NULL,
  `gender` text NOT NULL,
  `category` tinyint(1) NOT NULL,
  `studio` text NOT NULL,
  `exp` tinyint(4) NOT NULL,
  `achieve` text NOT NULL,
  `awards` text NOT NULL,
  `skills` text NOT NULL,
  `address` text NOT NULL,
  `reg_date` date NOT NULL,
  `rating` tinyint(4) NOT NULL,
  `profile` text NOT NULL,
  `image1` text NOT NULL,
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `image4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_photographers`
--

INSERT INTO `reg_photographers` (`id`, `email`, `password`, `contact`, `name`, `surname`, `bday`, `gender`, `category`, `studio`, `exp`, `achieve`, `awards`, `skills`, `address`, `reg_date`, `rating`, `profile`, `image1`, `image2`, `image3`, `image4`) VALUES
(1, 'abc', '123', 9825347880, 'Shridhar', 'Joshi', '1969-11-10', '', 1, 'Urvi Photo Art', 5, 'All', 'everything', '', '107, Shreeji Tower, Kamlabaug, PORBANDAR', '2018-03-21', 4, '48.JPG', '24.JPG', '27.JPG', '7.JPG', ''),
(2, 'ghi', '123', 0, 'ghi', '', '', '', 2, 'ghi studio', 3, '', '', '', '', '2018-04-02', 2, '', '', '', '', ''),
(3, 'sas@v.com', 'iu@345T', 9999999999, 'werfg', 'gfd', '2019-05-30', 'jhgf', 3, '', 0, '', '', '', 'jhgf', '2019-05-30', 0, '', '', '', '', ''),
(7, 'ljkj', '123', 0, 'poiuyt', '', '', '', 3, '', 0, '', '', '', '', '2019-05-30', 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg_users`
--

CREATE TABLE `reg_users` (
  `u_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` text NOT NULL,
  `surname` text NOT NULL,
  `gender` text NOT NULL,
  `contact` bigint(10) NOT NULL,
  `reg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_users`
--

INSERT INTO `reg_users` (`u_id`, `username`, `password`, `name`, `surname`, `gender`, `contact`, `reg_date`) VALUES
(1, 'abc', 'abc123', 'abc', 'def', 'male', 9999999999, '2018-03-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `reg_photographers`
--
ALTER TABLE `reg_photographers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg_users`
--
ALTER TABLE `reg_users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reg_photographers`
--
ALTER TABLE `reg_photographers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reg_users`
--
ALTER TABLE `reg_users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
