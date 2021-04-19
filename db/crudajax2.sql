-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 12:58 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudajax`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `deleteUserData` (IN `id` INT(10))  BEGIN
    
    	DELETE FROM users WHERE userid = id;
    
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `insertUserData` (IN `fullname` VARCHAR(100), IN `username` VARCHAR(100), IN `password` VARCHAR(255), IN `userrole` VARCHAR(100))  BEGIN
    
    INSERT INTO users (fullname, username, password, userrole) VALUES (fullname, username, password, userrole);
    
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `readAllUserData` ()  BEGIN

	SELECT * from users;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `readSpecificUserData` (IN `user_id` INT(10))  BEGIN

	SELECT * FROM users WHERE userid = user_id;

END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `updateUserData` (IN `id` INT(10), IN `fullname` VARCHAR(100), IN `username` VARCHAR(100), IN `password` VARCHAR(100), IN `userrole` VARCHAR(100))  BEGIN

	UPDATE users SET fullname = fullname, username = username, password = password, userrole = userrole WHERE userid = id;
    
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(10) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `userrole` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fullname`, `username`, `password`, `userrole`) VALUES
(183, 'franze', 'franze', 'franze', 'franze'),
(186, 'namit', 'namit', 'namit', 'namit'),
(187, 'gfs', 'sdf', 'dsf', 'dfsgf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
