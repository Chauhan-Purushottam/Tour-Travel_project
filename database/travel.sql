
SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


-- Database: `tourandtravel`

-- -------------------------------------------------------
-- Table structure for table `advertisement`
--

CREATE TABLE IF NOT EXISTS `advertisement` (
  `Advid` int(50) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `Companyname` varchar(100) NOT NULL,
  `Pic` varchar(1000) NOT NULL,
  `Detail` varchar(1000) NOT NULL,
  PRIMARY KEY (`Advid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`Advid`, `Title`, `Companyname`, `Pic`, `Detail`) VALUES
(1, 'Tour and Travel', 'maketrip .com', 'abc.jpg', 'Find information on the travel and trade provided by maketrip Enterprises. Users can get detailed information about the travel agents, tourist transport operators, domestic tour operators, etc. in India\r\n'),
(2, 'Tour and Travel', ' abc.com ', 'xyz.jpg', 'Find information on the travel and trade provided by Abc agency. Users can get detailed information about the travel agents, tourist transport operators, domestic tour operators, etc. in India\r\n'),
(3, 'Tour and Travel', 'Tourist.com', '119.jpg', 'Find information on the travel and trade provided by Tourist.com. Users can get detailed information about the travel agents, tourist transport operators, domestic tour operators, etc. in India\r\n');
-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `Cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `Cat_name` varchar(2000) NOT NULL,
  PRIMARY KEY (`Cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`Cat_id`, `Cat_name`) VALUES
(1, 'Family Tours'),
(2, 'Religious Tours'),
(3, 'Special Event Tours'),
(5, 'National Parks'),
(6, 'Small Group Tours');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `contactid` int(50) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Phno` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Message` varchar(5000) NOT NULL,
  PRIMARY KEY (`contactid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`contactid`, `Name`, `Phno`, `Email`, `Message`) VALUES
(1, 'purushottam', '9501065206', 'purusho@gmail.com', 'We have read about the interest your advertisement in the news paper about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight etc.'),
(2, 'Shekhar', '9915079133', 'shekhar@gmail.com', 'We have read about the interest your advertisement in the news paper about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight etc.'),
(3, 'Ritesh', '9815724956', 'ritesh@gmail.com', 'We have read about the interest your advertisement in the news paper about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight etc.'),
(4, 'Sahil', '9814532456', 'Sahil@yahoo.com', 'We have read about the interest your advertisement in the news paper about the vacation trip. We will appreciate, if you kindly send the detailed information about the cost of the trip,the luggage wight etc.');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `Packid` int(200) NOT NULL AUTO_INCREMENT,
  `Packname` varchar(1000) NOT NULL,
  `Category` int(200) NOT NULL,
  `Packprice` int(200) NOT NULL,
  `Pic1` varchar(8000) NOT NULL,
  `Pic2` varchar(8000) NOT NULL,
  `Pic3` varchar(8000) NOT NULL,
  `Detail` varchar(8000) NOT NULL,
  PRIMARY KEY (`Packid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`Packid`, `Packname`, `Category`, `Packprice`, `Pic1`, `Pic2`, `Pic3`, `Detail`) VALUES
(1, 'Christmas Adventure in Delhi', 1, 20000, '24.jpg', '26.jpg', '25.jpg', 'What better way to celebrate christmas is to visit Red fort at Delhi'),
(2, 'Agra Family Tour ', 1, 10000, '30.jpg', '31.jpg', '4.jpg', 'A fun-filled holiday with your family is the best time.'),
(3, 'Holidays in Kerla  ', 1, 20000, '38.jpg', '39.jpg', '37.jpg', 'Enjoy spice garden, sparkling seas, beautiful scenerio, exciting cities and great cuisine on family holidays in Kerla.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Username` varchar(100) NOT NULL,
  `Pwd` varchar(100) NOT NULL,
  `Typeofuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Username`, `Pwd`, `Typeofuser`) VALUES
('admin', 'admin', 'Admin'),
('aman', 'aman123', 'General'),
('roxx', '12345', 'Admin'),
('shekhar', 'shekhar234', 'General');


