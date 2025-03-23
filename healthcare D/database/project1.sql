-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2024 at 12:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES
(1, 'Heet Bhatiya', 'heetbhatiya7@gmail.com', '$2y$10$oSg6hCCSnY3Jcj69v48u..6h5CUYQurFeRZ7DSqW5jJuDKxb1BXi2'),
(2, 'Vatsal Bhayani', 'heetbhatiya11@gmail.com', '$2y$10$2otJMRiFCYrQnmjxN9sF5uvienLIjwRfcHrmeKkAtuyJ6g.Ho2lnO'),
(3, 'Vatsal Bhayani', 'heetbhatiya11@gmail.com', '$2y$10$Ch9heQ8/A9XrsrlgufQNaue8azLNsiSEcgxKito5f/aoUnWaP2APu');

-- --------------------------------------------------------

--
-- Table structure for table `patient.information`
--

CREATE TABLE `patient.information` (
  `name` text NOT NULL,
  `number` int(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `doctor` text NOT NULL,
  `datetime` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient.information`
--

INSERT INTO `patient.information` (`name`, `number`, `email`, `doctor`, `datetime`) VALUES
('Heet Bhatiya', 1234567890, 'heetbhatiya7@gmail.com', 'Dr.Smith', '2024-10-25'),
('Vatsal Bhayani', 1234567891, 'vatsalbhayani2023@gmail.com', 'Dr Satish Pandya', '2024-11-29'),
('heet', 2147483647, 'adam@phpzag.com', 'Dr.Smith', '2024-10-25'),
('Bhatiya', 1234567891, 'heetbhatiya7@gmail.com', 'Dr Jimil Gohil', '2024-10-26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient.information`
--
ALTER TABLE `patient.information`
  ADD UNIQUE KEY `index` (`name`) USING HASH;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
