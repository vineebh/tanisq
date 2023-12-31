-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 05:15 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tata`
--

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `srno` int(255) NOT NULL,
  `email_id` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`srno`, `email_id`) VALUES
(1, ''),
(2, 'vineetbhandari@gmail.com'),
(3, ''),
(4, 'umeshpandey@gmail.com'),
(5, ''),
(6, 'aareyankorean@gmail.com'),
(7, ''),
(8, 'yogeshbuilder@gmail.com'),
(9, 'rupesh@gmail.com'),
(10, 'sahilmaratha@gmail.com'),
(11, 'chirajmahakal@hotmail.com'),
(12, 'dhruvvays@gmail.com'),
(13, 'vivekjoshi@gmail.com'),
(14, ''),
(15, 'm'),
(16, 'dineshmali124@gmail.in'),
(17, 'aaronsamul98@gmail.com'),
(18, 'arnavpawer@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tanishq`
--

CREATE TABLE `tanishq` (
  `srno` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact_num` int(15) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `query` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tanishq`
--

INSERT INTO `tanishq` (`srno`, `name`, `contact_num`, `email_id`, `query`) VALUES
(1, 'Vineet S. Bhandari', 1829634560, 'vineetbhandari@gmail.com', 'I would like to order a set of gold neaklace'),
(2, 'Umesh Pandey', 2147483647, 'umeshpandey@gmail.com', 'I would like to order 3 sets of ear rings'),
(3, 'Aareyan Pandey', 1549423265, 'aareyankorean@gmail.com', 'good products'),
(4, 'Yogesh Shrama', 2147483647, 'yogeshbuilder@gmail.com', 'great quality product'),
(5, 'Rupesh Nalavde', 2147483647, 'rupesh@gmail.com', 'No1 in India'),
(6, 'Sahil ', 2147483647, 'sahilmaratha@gmail.com', 'I recommend this site to all'),
(7, 'Chiraj Mahakal', 2147483647, 'chirajmahakal@hotmail.com', 'Is their a store near by me of tanishq'),
(8, 'Dhruv Vyas', 2147483647, 'dhruvvays@gmail.com', 'sari website chey'),
(9, 'Mayank Virani', 2147483647, 'mayankvirani@gmail.com', 'Nice products for birthday gifts'),
(10, 'Vivek Joshi', 2147483647, 'vivekjoshi@gmail.com', 'shadi ka saman mill gaya'),
(11, 'Dinesh Mali', 2147483647, 'dineshmali124@gmail.in', 'bohat mehga ha saman\r\nthoda discount mileyga kya');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`srno`);

--
-- Indexes for table `tanishq`
--
ALTER TABLE `tanishq`
  ADD PRIMARY KEY (`srno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `srno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tanishq`
--
ALTER TABLE `tanishq`
  MODIFY `srno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
