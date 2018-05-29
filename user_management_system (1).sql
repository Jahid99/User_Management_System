-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 04:28 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(16) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `username`, `password`) VALUES
(1, 'adminsays', '$2y$10$vVXlRHRmXswOY7U01CW5puEN9M7YujWn82MZUPAZF5.R7s2hGB3ZK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_business`
--

CREATE TABLE `tbl_business` (
  `id` int(16) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_business`
--

INSERT INTO `tbl_business` (`id`, `name`) VALUES
(1, 'business_cat1'),
(2, 'business_cat2'),
(3, 'business_cat3'),
(4, 'business_cat4'),
(6, 'business_cat5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comments`
--

CREATE TABLE `tbl_comments` (
  `id` int(16) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comments`
--

INSERT INTO `tbl_comments` (`id`, `name`) VALUES
(1, 'Note1'),
(2, 'Note2'),
(3, 'Note3'),
(4, 'Note4'),
(7, 'Notet5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_groups`
--

CREATE TABLE `tbl_groups` (
  `id` int(16) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_groups`
--

INSERT INTO `tbl_groups` (`id`, `name`) VALUES
(1, 'group1'),
(2, 'group2'),
(3, 'group3'),
(4, 'group4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(16) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `date_of_birth` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `category` varchar(256) NOT NULL,
  `comment` varchar(256) NOT NULL,
  `group_id` int(16) NOT NULL DEFAULT '0',
  `business_id` int(16) NOT NULL DEFAULT '0',
  `comment_id` int(16) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `first_name`, `surname`, `date_of_birth`, `address`, `category`, `comment`, `group_id`, `business_id`, `comment_id`) VALUES
(27, 'rakib99', '$2y$10$k8vjQfj1wfBi9rwBZvnrtehd86LvfSVhE2gIHsaGzSs2.OO4z18XW', 'Rakib', 'Hasan', '1995-06-07', 'Dhaka, Bangladesh', '3905', 'Great.', 0, 1, 0),
(28, 'mahid99', '$2y$10$VsBTUktliICa159r3RDDDOTtNbuq8njrynYXHsh4rGaGgeB1m4Ghi', 'Mahid', 'Ahmed Moshi', '1995-01-02', 'Noakhali, Chittagong, BD', '3903/1', 'HM', 4, 0, 1),
(30, 'faisal99', '$2y$10$zdPzBB2LWHCy5wHYFwUMW.Dam.a78NrWLOmlL/iQ2jS/eHCTTXZqu', 'Faisal', 'Kabir', '2018-04-09', 'Jenaidah', '3906/1', 'ki re', 1, 3, 0),
(31, 'piklu99', '$2y$10$zkS4r99qt/OfFaiuNtDDXO4Uzg2sVADB2lOhnYHRnwZEHZ/iv7nx2', 'Piklu', 'sandi', '2018-04-09', 'Shylhet', '3891', 'buslam na', 0, 3, 4),
(32, 'selim99', '$2y$10$1mwhmwICN.UlZqLjZKDzNeoMfJBhqy2LaG5VWP.7XaS6ULO749R.i', 'Selim', 'Ahmed', '2018-04-17', 'Kustia', '3885', 'kenp?asd', 4, 0, 1),
(33, 'diya99', '$2y$10$rW3YeyyfxcFj6tdIeQ1h.uT9PZb4KLRWwoFLTHWc8bT3PbAIw/SaG', 'Diya', 'Bipasha', '2018-04-18', 'North Morail', '3906/1', 'Jahid is', 0, 3, 0),
(34, 'manna', '$2y$10$jLEBH8pF1Me2HgHE4GB0ket84r2ZmWuSMtl2LnHDTwSo1x4EncP6m', 'Manna', 'Khan', '2018-04-05', 'bd', '3885/5', 'hm', 2, 4, 0),
(35, 'farid99', '$2y$10$.ga8ChxWjNTXw.UcnllLH.9FrkryrHCIW7K5lwMZE6R5JqjfZqTpO', 'Farid', 'Mia', '2018-05-03', 'Rangpur, BD', '3889/1', 'hmm', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_business`
--
ALTER TABLE `tbl_business`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_groups`
--
ALTER TABLE `tbl_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_business`
--
ALTER TABLE `tbl_business`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_comments`
--
ALTER TABLE `tbl_comments`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_groups`
--
ALTER TABLE `tbl_groups`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
