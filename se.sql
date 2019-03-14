-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 09:52 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `se`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
`aid` int(10) NOT NULL,
  `answers` varchar(300) NOT NULL,
  `ans_id` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answers`, `ans_id`) VALUES
(1, 'home tool', 1),
(2, 'hypertext', 1),
(3, 'Hyper Text Markup Language', 1),
(4, 'Happy Through Mad Love', 1),
(5, 'All the below', 2),
(6, 'String', 2),
(7, 'List', 2),
(8, 'Numbers', 2),
(9, 'Constructor in python is called when the object instantiates', 3),
(10, 'Function', 3),
(11, 'Method', 3),
(12, 'Array', 3),
(13, 'Represents the instance of class.', 4),
(14, 'Class', 4),
(15, 'Constructor', 4),
(16, 'Destructor', 4),
(17, 'def method_name()', 5),
(18, 'fun()', 5),
(19, 'del()', 5),
(20, 'method()', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cppans`
--

CREATE TABLE IF NOT EXISTS `cppans` (
  `aid` int(10) NOT NULL,
  `answers` varchar(3000) NOT NULL,
  `ans_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cppans`
--

INSERT INTO `cppans` (`aid`, `answers`, `ans_id`) VALUES
(1, 'Yes', 1),
(2, 'No', 1),
(3, 'It is Object oriented language', 1),
(4, 'Both 1,3', 1),
(5, 'All the below', 2),
(6, 'int', 2),
(7, 'String', 2),
(8, 'Double', 2),
(9, 'Use for reference', 3),
(10, 'Not for reference', 3),
(11, 'None above this', 3),
(12, 'All above this', 3),
(13, 'constrcutor()', 4),
(14, 'con()', 4),
(15, 'constructer', 4),
(16, 'con', 4),
(17, 'cout<<"Print";', 5),
(18, 'c<<', 5),
(19, 'printf', 5),
(20, 'scanf', 5);

-- --------------------------------------------------------

--
-- Table structure for table `cppque`
--

CREATE TABLE IF NOT EXISTS `cppque` (
  `qid` int(10) NOT NULL,
  `question` varchar(300) NOT NULL,
  `ans_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cppque`
--

INSERT INTO `cppque` (`qid`, `question`, `ans_id`) VALUES
(1, 'Is c++ object oriented???', 1),
(2, 'What are data types in c++', 5),
(3, 'What is the use of this in c++', 9),
(4, 'How constructor is declared n c++', 13),
(5, 'What statement is used to print the output in c++', 17);

-- --------------------------------------------------------

--
-- Table structure for table `javaans`
--

CREATE TABLE IF NOT EXISTS `javaans` (
  `aid` int(10) NOT NULL,
  `answers` varchar(300) NOT NULL,
  `ans_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `javaans`
--

INSERT INTO `javaans` (`aid`, `answers`, `ans_id`) VALUES
(1, 'Yes', 1),
(2, 'No', 1),
(3, 'It is object oriented', 1),
(4, 'Both 1,3', 1),
(5, 'System.out.println();', 2),
(6, 'Print()', 2),
(7, 'Out()', 2),
(8, 'None above the', 2),
(9, 'All of the below', 3),
(10, 'int', 3),
(11, 'string', 3),
(12, 'float', 3),
(13, 'This operator is used to reference', 4),
(14, 'Not for reference', 4),
(15, 'None above the', 4),
(16, 'All above the', 4),
(17, 'It is used to abstract type that is used to specify the classes must implement ', 5),
(18, 'Does not specify anything', 5),
(19, 'Used to implement class', 5),
(20, 'None above the', 5);

-- --------------------------------------------------------

--
-- Table structure for table `javaque`
--

CREATE TABLE IF NOT EXISTS `javaque` (
  `qid` int(10) NOT NULL,
  `question` varchar(300) NOT NULL,
  `ans_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `javaque`
--

INSERT INTO `javaque` (`qid`, `question`, `ans_id`) VALUES
(1, 'Is java object oriented', 1),
(2, 'What statement is used to print ', 5),
(3, 'What  are data types in java', 9),
(4, 'This operator used in java', 13),
(5, 'Whatt is interface in java', 17);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE IF NOT EXISTS `question` (
`qid` int(10) NOT NULL,
  `question` varchar(300) NOT NULL,
  `ans_id` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qid`, `question`, `ans_id`) VALUES
(1, 'HTML stands for???', 3),
(2, 'What are different data types in python', 5),
(3, 'What is constrcutor in python', 9),
(4, 'What is self in python', 13),
(5, 'How to declare method in python', 17);

-- --------------------------------------------------------

--
-- Table structure for table `ss`
--

CREATE TABLE IF NOT EXISTS `ss` (
  `Email` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ss`
--

INSERT INTO `ss` (`Email`, `password`) VALUES
('gm', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`Id` int(11) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Firstname`, `Lastname`, `Email`, `Password`) VALUES
(2, 'sarvesh', 'pathak', 'sarvesh@g.c', '1234'),
(3, 'sarvesh', 'pathak', 'sarvesh@g.c', '1234'),
(4, 'sa', 'pathak', 'sarvesh@g.c', '1234'),
(5, 'sarvesh', 'pathak', 'asd', 'ssss'),
(6, 'hiii', 's', 'dd', '333'),
(7, '', '', '', ''),
(8, 'GAURAV', 'MEDHANE', 'g@123', '123'),
(9, 'yash', 'medhane', 'y@123', '123'),
(10, 'kedar', 'parsewar', 'k@123', '123'),
(11, 'pratiik', 'patil', 'p@123', '123'),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, 'Tejas', 'Sonkule', 'tasonkule@mitaoe.ac.in', 'Tejas@1234'),
(17, 'pratikp', 'medhane', 'pp@123', '123'),
(18, 'pratikp', 'medhane', 'pp@123', '123'),
(19, 'hii', 'hiii', 'h@', '123'),
(20, 'hii', 'hiii', 'h@', '123'),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', ''),
(28, '', '', '', ''),
(29, '', '', '', ''),
(30, '', '', '', ''),
(31, '', '', '', ''),
(32, '', '', '', ''),
(33, '', '', '', ''),
(34, '', '', '', ''),
(35, '', '', '', ''),
(36, '', '', '', ''),
(37, '', '', '', ''),
(38, '', '', '', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, '', '', '', ''),
(43, '', '', '', ''),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, '', '', '', ''),
(47, '', '', '', ''),
(48, '', '', '', ''),
(49, '', '', '', ''),
(50, '', '', '', ''),
(51, '', '', '', ''),
(52, '', '', '', ''),
(53, '', '', '', ''),
(54, '', '', '', ''),
(55, '', '', '', ''),
(56, '', '', '', ''),
(57, '', '', '', ''),
(58, '', '', '', ''),
(59, '', '', '', ''),
(60, '', '', '', ''),
(61, '', '', '', ''),
(62, '', '', '', ''),
(63, '', '', '', ''),
(64, '', '', '', ''),
(65, '', '', '', ''),
(66, 'hii', 'hiii', 'h@', '123'),
(67, '', '', '', ''),
(68, '', '', '', ''),
(69, '', '', '', ''),
(70, '', '', '', ''),
(71, 'hii', 'hiii', 'h@', '123'),
(72, 'hii', 'hiii', 'h@', '123'),
(73, 'hii', 'hiii', 'h@', '123'),
(74, 'hii', 'hiii', 'h@', '123'),
(75, 'hii', 'hiii', 'h@', '123'),
(76, 'hii', 'hiii', 'h@', '123'),
(77, 'Sarvesh', 'Pathak', 'sspathak@mitaoe.ac.in', 'sarvesh@5734'),
(78, 'pavan', 'patil', 'pavanp@mitaoe.ac.in', 'pavan@123'),
(79, 'Nishad', 'Patil', 'nishadvp@mitaoe.ac.in', 'Nishad123'),
(80, 'Nishad', 'Patil', 'rabhosale@mitaoe.ac.in', '123'),
(81, 'SS', 'SS', 'FFG', 'SSS'),
(82, 'asddsd', 'ss', 'm@123', '123'),
(83, 's', 's', 'ss@123', '1234'),
(84, 'saurabh', 'gawade', 'saurya@gmail.com', 'euu'),
(85, 'a', 'b', 'j@123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
 ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
 ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
MODIFY `qid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=86;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
