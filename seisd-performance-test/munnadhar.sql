-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2020 at 06:38 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `munnadhar`
--

-- --------------------------------------------------------

--
-- Table structure for table `comicsbook`
--

CREATE TABLE `comicsbook` (
  `bookname` varchar(20) NOT NULL,
  `writername` varchar(20) NOT NULL,
  `publisher` varchar(25) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `price` int(20) NOT NULL,
  `RegProfile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comicsbook`
--

INSERT INTO `comicsbook` (`bookname`, `writername`, `publisher`, `details`, `price`, `RegProfile`) VALUES
('hulk', 'abc', 'abc', 'jhhdb hdg eweg wehfwe hbe jwebw ewejhb iwejhb eiuh iejbe bek j', 200, 'hulk.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `literaturebook`
--

CREATE TABLE `literaturebook` (
  `bookname` varchar(20) NOT NULL,
  `writername` varchar(20) NOT NULL,
  `publisher` varchar(20) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `price` int(20) NOT NULL,
  `RegProfile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `literaturebook`
--

INSERT INTO `literaturebook` (`bookname`, `writername`, `publisher`, `details`, `price`, `RegProfile`) VALUES
('gitanjali', 'rabindronath tagore', 'jdh', 'adghdvq dqwghv whvwhvbqu hbqhqbh qwbq', 200, 'gitanjoli.jpg'),
('lal nil dipaboli', 'Humaiyun Ahmed', 'joya prokashoni', 'frf ere e geeg getg eget heth e he ', 200, 'lalnildipaboli.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `Name` varchar(20) NOT NULL,
  `Address` varchar(20) NOT NULL,
  `Street` varchar(20) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Phonenumber` int(20) NOT NULL,
  `Age` int(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`Name`, `Address`, `Street`, `City`, `Phonenumber`, `Age`, `Email`, `Password`) VALUES
('Munna', 'ctg', 'ctg', 'ctg', 123456789, 20, 'munna@gmail.com', 'e10adc3949ba59abbe56'),
('Munna', 'ctg', 'ctg', 'ctg', 123456789, 20, 'munna@gmail.com', '827ccb0eea8a706c4c34'),
('Munna', 'ctg', 'ctg', 'ctg', 225252552, 20, 'munna@gmail.com', '827ccb0eea8a706c4c34');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
