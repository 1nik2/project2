-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220616.7a6bd9eb57
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2022 at 07:52 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_mrp` varchar(255) NOT NULL,
  `p_upc` varchar(255) NOT NULL,
  `p_status` varchar(255) NOT NULL,
  `p_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_mrp`, `p_upc`, `p_status`, `p_img`) VALUES
(5, 'Mens shirt', '2000', 'MEN399', 'Available', 'img/0c19988999c4307d639d9e17868f364e.jpg'),
(6, 'Dress', '3500', 'GIRL009', 'Available', 'img/3cb79a7e9918035e006adc80d0067518.jpg'),
(7, 'Dulhan Set', '30,000', 'GOLD082', 'Not-Available', 'img/8134ab23e7daa2849d8d05e219e66ea5.jpg'),
(8, 'Diamond Nackless', '80,000', 'DIAM871', 'Not-Available', 'img/42136_white-diamond-necklace.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_mob` bigint(10) NOT NULL,
  `u_mail` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_prsq` varchar(255) NOT NULL,
  `u_ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`u_id`, `u_name`, `u_mob`, `u_mail`, `u_pass`, `u_prsq`, `u_ans`) VALUES
(1, 'Nikhil Gohel', 7990817816, 'niks.gohel1993@gamil.com', 'nik1234', 'What is the name of your favorite childhood friend?', 'Dinesh'),
(2, 'Raju ', 9876543210, 'raju@123', 'raju1234', 'Who was your childhood hero?', 'dad');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



