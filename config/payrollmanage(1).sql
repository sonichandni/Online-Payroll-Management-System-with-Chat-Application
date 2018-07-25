-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2017 at 03:04 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payrollmanage`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `Branch_id` int(5) NOT NULL,
  `Name` char(25) NOT NULL,
  `Branch_Address` varchar(100) NOT NULL,
  `Phone_number` bigint(10) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Establishment_date` date NOT NULL,
  `Created_by` char(25) NOT NULL,
  `Created_date` date NOT NULL,
  `Modified_date` date NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`Branch_id`, `Name`, `Branch_Address`, `Phone_number`, `Email`, `Establishment_date`, `Created_by`, `Created_date`, `Modified_date`, `Status`) VALUES
(1, 'Ahmedabad Branch', 'FF- 106 Nandanvan Complex,\r\nOpp RTO Office Subhash Bridge,\r\nAhmedabad-380027', 9904000728, 'ahmedabranch@gmail.com', '2011-04-19', 'Chandni Soni', '2011-04-19', '2014-04-19', 1),
(2, 'Amreli Branch', 'Shop No.-42, Opera House,\r\nBPM Cycle Store,S T Road,\r\nAmreli-365601', 9925331931, 'amrelibranch@gmail.com', '2011-04-19', 'Krupa Deria', '2011-04-19', '2011-04-19', 1),
(3, 'Godhra Branch', 'F-9 Mahavir Complex Near Vodafone store,\r\nGodhra-389001', 8866563577, 'godhrabranch@gmail.com', '2011-04-19', 'Chandni Soni', '2011-04-19', '2011-04-19', 1),
(4, 'Himmatnagar Branch', 'F-7, Ganesh Chambers,\r\nCivil Circle,\r\nS.T. Road,\r\nHimmatnagar-383001', 9723927976, 'himmatnagarbranch@gmail.com', '2011-04-19', 'Krupa Deria', '2011-04-19', '2011-04-19', 1),
(5, 'Junagadh Branch', '65, Prism Complex,\r\nOpp. S.T. Busstand, \r\nJunagadh-362001\r\n', 9913799913, 'junaghdhbranch@gmail.com', '2011-04-19', 'Shilpi Soni', '2011-04-19', '2011-04-19', 1),
(6, 'Jamnagar Branch', 'G-9 Ground Floor,\r\nMadhav Aquare Limda Line,\r\nJamnagar-361001', 7878789095, 'jamnagarbranch@gmail.com', '2011-04-19', 'Maulik Khatri', '2011-04-19', '2011-04-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(5) NOT NULL,
  `from_id` int(5) NOT NULL,
  `to_id` int(5) NOT NULL,
  `message` varchar(500) NOT NULL,
  `chattime` time NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `from_id`, `to_id`, `message`, `chattime`, `status`) VALUES
(1, 1, 2, 'Welcome chandni', '12:40:09', 1),
(2, 1, 2, 'hi', '12:40:26', 1),
(3, 1, 3, 'welcome krupa', '12:45:45', 1),
(4, 1, 2, 'helo', '12:46:23', 1),
(5, 7, 3, 'hi I wANT leAVES ', '02:17:57', 1),
(6, 8, 1, 'want urgent leave', '02:20:01', 2),
(7, 9, 10, 'hi parth wassup??', '02:22:05', 1),
(8, 10, 9, 'hi kunal m fine\r\nHOw r u?', '02:23:29', 2);

-- --------------------------------------------------------

--
-- Table structure for table `chat_theme`
--

CREATE TABLE `chat_theme` (
  `Employee_id` int(5) NOT NULL,
  `chat_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `Department_id` int(5) NOT NULL,
  `Department_name` char(20) NOT NULL,
  `Created_date` date NOT NULL,
  `Modified_date` date NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`Department_id`, `Department_name`, `Created_date`, `Modified_date`, `Status`) VALUES
(1, 'IOS Developer', '2013-04-19', '2013-04-19', 1),
(2, 'Markrting', '2012-02-17', '2012-02-17', 1),
(3, 'Selling', '2013-01-15', '2013-01-15', 1),
(4, 'HR', '2011-04-19', '2011-04-19', 1),
(5, 'Android Developer', '2013-02-19', '2013-02-19', 1),
(6, 'OS Developer', '2013-02-17', '2013-02-17', 1),
(7, 'Account', '2014-04-19', '2011-04-19', 1),
(8, 'PHP Developer', '2011-04-19', '2011-04-19', 1),
(9, '.Net Developer', '2011-04-19', '2011-04-19', 1),
(10, 'java Developer', '2011-04-19', '2014-04-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `Designation_id` int(5) NOT NULL,
  `Designation_name` char(25) NOT NULL,
  `Super_id` int(5) NOT NULL,
  `Super_id_name` char(25) NOT NULL,
  `Created_date` date NOT NULL,
  `Modified_date` date NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`Designation_id`, `Designation_name`, `Super_id`, `Super_id_name`, `Created_date`, `Modified_date`, `Status`) VALUES
(1, 'CEO', 1, 'Administrator', '2011-04-19', '2011-04-19', 1),
(2, 'HR Manager', 1, 'Administrator', '2011-04-19', '2011-04-19', 1),
(3, 'Manager', 2, 'HR Manager', '2011-04-19', '2011-04-19', 1),
(4, 'Department Leader', 3, 'Manager', '2011-04-19', '2011-04-19', 1),
(5, 'Team Leader', 3, 'Manager', '2011-04-19', '2011-04-19', 1),
(6, 'Leader', 3, 'Manager', '2011-04-19', '2011-04-19', 1),
(7, 'Clerck', 3, 'Manager', '2011-04-19', '2011-04-19', 1),
(8, 'Peon', 3, 'Manager', '2011-04-19', '2011-04-19', 1),
(9, 'Watchman', 3, 'Manager', '2011-04-19', '2011-04-19', 1),
(10, 'Sr. php developer', 2, 'HR Manager', '2011-04-19', '2011-04-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_id` int(5) NOT NULL,
  `Employee_name` char(30) NOT NULL,
  `Current_address` varchar(80) NOT NULL,
  `Permanent_address` varchar(80) NOT NULL,
  `Mobile_number` bigint(10) NOT NULL,
  `Gender` char(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Qualification` varchar(20) NOT NULL,
  `Joining_date` date NOT NULL,
  `Registration_date` date NOT NULL,
  `Department_id` int(5) NOT NULL,
  `Branch_id` int(5) NOT NULL,
  `Designation_id` int(5) NOT NULL,
  `Shift_id` int(5) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Bank_account_number` bigint(16) DEFAULT NULL,
  `PAN_number` varchar(10) DEFAULT NULL,
  `Created_date` date NOT NULL,
  `Modified_date` date NOT NULL,
  `Status` int(1) NOT NULL,
  `Confirm_password` varchar(20) NOT NULL,
  `Roles` int(1) NOT NULL DEFAULT '3',
  `city` char(15) NOT NULL,
  `img` longtext,
  `Basic_salary` float(10,3) NOT NULL,
  `PT` float(10,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_id`, `Employee_name`, `Current_address`, `Permanent_address`, `Mobile_number`, `Gender`, `Email`, `DOB`, `Qualification`, `Joining_date`, `Registration_date`, `Department_id`, `Branch_id`, `Designation_id`, `Shift_id`, `Password`, `Bank_account_number`, `PAN_number`, `Created_date`, `Modified_date`, `Status`, `Confirm_password`, `Roles`, `city`, `img`, `Basic_salary`, `PT`) VALUES
(1, 'Administrator', '', '', 1234567890, 'Female', 'admin123@gmail.com', '1996-02-19', 'B.Sc. IT', '2014-09-27', '2014-09-30', 3, 1, 1, 1, 'Admin@123', 123456789012, '5478921465', '2014-09-30', '2014-09-30', 1, 'Admin@123', 1, 'Ahmedabad', 'cake.jpg', 100000.000, 200.000),
(2, 'Chandni Soni', '233,panch hatdi,\r\nOpp. koth ni pole,\r\nRaipur,\r\nAhmedabad-380001', '233,panch hatdi,\r\nOpp. koth ni pole,\r\nRaipur,\r\nAhmedabad-380001', 7408596123, 'Female', 'chandnisoni@gmail.com', '1991-04-24', 'B.Sc.(CA & IT)', '2014-01-16', '2014-01-16', 2, 2, 2, 2, 'Chandni@27', 1237891452369854, 'A45F789456', '2015-02-17', '2015-04-17', 1, 'Chandni@27', 1, 'Ahmedabad', 'D:\\xampp\\htdocs\\Payroll_Project\\images\\5.jpg', 50000.000, 200.000),
(3, 'Krupa Deria', '12,Nr. juna vadaj BRTS Bus stand \r\nJuna vadaj,\r\nAhmedabad', '12,Nr. juna vadaj BRTS Bus stand \r\nJuna vadaj,\r\nAhmedabad', 9898885456, 'Female', 'krupaderia@gmail.com', '1993-12-15', 'B.Sc.(CA & IT)', '2014-01-16', '2014-02-16', 2, 2, 2, 2, 'Krupa@123', 4561978236547895, 'D123F45678', '2013-01-15', '2015-02-16', 1, 'Krupa@123', 1, 'Ahmedabad', '', 50000.000, 200.000),
(4, 'Shilpi Soni', '12-C,OM appt\r\nopp havmor parlour\r\ncg road\r\nahmedabad', '145, gulshan bunglows\r\nopp mehndi soc.\r\nnew vadaj\r\nahmedabad\r\n', 9876456903, 'Female', 'shilpisoni@gmail.com', '1994-04-22', 'B.Sc.(CA & IT)', '2014-02-16', '2015-02-17', 2, 3, 4, 2, 'ShilpiSoni123@', 301245589012345, 'A56Hd87947', '2014-03-16', '2016-04-18', 1, 'ShilpiSoni123@', 1, 'Ahmedabad', '', 180000.000, 200.000),
(5, 'Dhvani Contractor', '21-sainath chambers\r\nopp. ganesh temple\r\nNr. Prabath chowk\r\nGhatlodia,ahmedabad', '21-sainath chambers\r\nopp. ganesh temple\r\nNr. Prabath chowk\r\nGhatlodia,ahmedabad', 8099087657, 'Female', 'dhvanicontractor@yahoo.com', '1994-01-15', 'MBA', '2013-01-16', '2015-04-17', 2, 2, 2, 2, 'Dhvani@@321', 345678912345678, 'D9HY5678JJ', '2013-01-15', '2015-04-17', 1, 'Dhvani@@321', 2, 'Ahmedabad', '', 15000.000, 200.000),
(6, 'Vidhi Shah', '456-sachin towers\r\nopp. jivraj mehta hospital\r\nsatellite\r\nahemdabad', '456-sachin towers\r\nopp. jivraj mehta hospital\r\nsatellite\r\nahemdabad', 9875080989, 'Female', 'vidhi@yahoo.com', '1992-02-16', 'MSC.', '2013-06-16', '2014-03-16', 4, 4, 4, 4, 'VidhiShah55%', 312456724313456, 'J34GHYGjk1', '2013-01-15', '2014-02-16', 1, 'VidhiShah55%', 3, 'Ahmedabad', '', 10000.000, 150.000),
(7, 'Pari Gandhi', '43, sheth bunglows\r\nopp patanjli stores\r\nchandkheda\r\nahmedabad', '43, sheth bunglows\r\nopp patanjli stores\r\nchandkheda\r\nahmedabad', 9099567895, 'Female', 'pari96@gmail.com', '1991-02-15', 'MBA', '2013-01-16', '2014-02-16', 1, 2, 4, 2, 'Pari1212$', 390012347894035, 'Ghyijk1234', '2013-01-16', '2014-04-17', 1, 'Pari1212$', 2, 'Ahmedabad', '', 30000.000, 200.000),
(8, 'Vandan Deria', '31, shannon houses,\r\nopp. cmc church\r\nastodia\r\nahmedabad', '31, shannon houses,\r\nopp. cmc church\r\nastodia\r\nahmedabad', 7098345689, 'Male', 'vandy@gmail.com', '1989-04-25', 'B.Tech', '2016-02-21', '2016-04-17', 2, 2, 2, 2, 'Vandy5656@', 345234335678543, 'J78hk78jka', '2014-01-16', '2014-05-17', 1, 'Vandy5656@', 3, 'Ahmedabad', 'D:\\xampp\\htdocs\\Payroll_Project\\images\\6.jpg', 18000.000, 200.000),
(9, 'Kunal Tejani', '12, shreeji chambers,\r\nopp reg cross soc.\r\nnava vadaj\r\nMehsana', '601-adeshwar krupa \r\nopp sbi bank\r\nmira road\r\nmumbai', 8992996780, 'Male', 'kunal97@gmail.com', '1992-01-15', 'B.tech', '2016-05-18', '2015-06-20', 2, 3, 1, 1, 'Kunal34@gmail.com', 309244567892344, '676JHu3Dfh', '2013-01-15', '2015-07-18', 1, 'Kunal34@gmail.com', 3, 'Mehsana', '', 14000.000, 200.000),
(10, 'Parth Varma', '21-sainath bunglows\r\nopp. yash bunglows\r\nahmedabad', '21-sainath bunglows\r\nopp. yash bunglows\r\nahmedabad', 7878455678, 'Male', 'parth@yahoo.com', '0000-00-00', 'MSC(IT)', '1990-12-15', '2013-02-16', 1, 1, 1, 1, 'Parth56####', 567833245678977, 'H6757J99KK', '2013-02-16', '2015-06-17', 1, 'Parth56####', 3, 'Ahmedabad', '', 17000.000, 200.000);

-- --------------------------------------------------------

--
-- Table structure for table `employee_attendance`
--

CREATE TABLE `employee_attendance` (
  `Employee_atttendance_id` int(5) NOT NULL,
  `Employee_id` int(5) NOT NULL,
  `Date` date NOT NULL,
  `Bio_metric_id` int(5) NOT NULL,
  `Checkin_time` time DEFAULT NULL,
  `Checkout_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_leaves`
--

CREATE TABLE `employee_leaves` (
  `Employeeleaves_id` int(5) NOT NULL,
  `Leaveday_type` char(12) NOT NULL,
  `Leave_type` char(2) NOT NULL,
  `Leave_from_date` date NOT NULL,
  `Leave_to_date` date NOT NULL,
  `Employee_id` int(5) NOT NULL,
  `Employee_name` char(30) NOT NULL,
  `Action_taken_by_id` int(5) NOT NULL,
  `Leave_reason_description` varchar(50) NOT NULL,
  `Leave_reject_reason_description` varchar(50) NOT NULL,
  `Created_date` date NOT NULL,
  `Modified_date` date NOT NULL,
  `Status` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_leaves`
--

INSERT INTO `employee_leaves` (`Employeeleaves_id`, `Leaveday_type`, `Leave_type`, `Leave_from_date`, `Leave_to_date`, `Employee_id`, `Employee_name`, `Action_taken_by_id`, `Leave_reason_description`, `Leave_reject_reason_description`, `Created_date`, `Modified_date`, `Status`) VALUES
(1, 'Normal', 'SL', '2016-04-15', '2016-04-16', 5, 'Dhvani Contractor', 0, 'Sick leave', '', '2019-04-17', '2019-04-17', 0),
(2, 'FullDay', 'CL', '2017-04-19', '2017-04-20', 6, 'Vidhi Shah', 0, 'Casual Leave for relative marriage', '', '2019-04-17', '2019-04-17', 0),
(3, 'Half Day', 'SL', '2016-01-16', '2016-01-16', 8, 'Vandan Deria', 0, 'High fever', '', '2019-04-17', '2019-04-17', 0),
(4, 'FullDay', 'CL', '2017-04-19', '2017-04-22', 9, 'Kunal Tejani', 0, 'Sisters marriage', '', '2019-04-17', '2019-04-17', 0);

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `Holiday_id` int(5) NOT NULL,
  `Holiday_name` char(30) NOT NULL,
  `Holiday_description` varchar(50) NOT NULL,
  `Holiday_date` date NOT NULL,
  `Created_date` date NOT NULL,
  `Modified_date` date NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`Holiday_id`, `Holiday_name`, `Holiday_description`, `Holiday_date`, `Created_date`, `Modified_date`, `Status`) VALUES
(1, ' Republic Day', 'Republic Day honors the date on which the Constitu', '2017-01-26', '2017-01-01', '2017-01-01', 1),
(2, ' Maha Shivaratri', 'Maha Shivaratri is a Hindu festival celebrated ann', '2017-02-24', '2017-01-01', '2017-01-01', 1),
(3, ' Holi', 'Holi is a Hindu spring festival celebrated in Indi', '2017-03-13', '2017-01-01', '2017-01-01', 1),
(4, ' Rama Navami', 'Rama Navami is a spring Hindu festival that celebr', '2017-04-05', '2017-01-01', '2017-01-01', 1),
(5, ' Rabindranath Tagore Jayanti', 'Rabindranath Tagore FRAS, also written RavÄ«ndranÄ', '2017-05-07', '2017-01-01', '2017-01-01', 1),
(6, ' Jagannath Rathyatra', 'Rathyatra  is an Odia festival that involves movin', '2017-06-25', '2017-01-01', '2017-01-01', 1),
(7, 'Rakhi', 'Raksha Bandhan is celebrated in Shravana month dur', '2017-08-07', '2017-01-01', '2017-01-01', 1),
(8, 'Dussehra', 'Dussehra is celebrated as victory of Lord Rama ove', '2017-09-30', '2017-01-01', '2017-01-01', 1),
(9, ' Diwali', 'On the day of Diwali, people should get up early i', '2017-10-19', '2017-01-01', '2017-01-01', 1),
(10, 'Lakshmi Puja', 'the devotees of Goddess Lakshmi observe a day long', '2017-10-20', '2017-01-01', '2017-01-01', 1),
(11, 'Merry Christmas', 'Christmas is an annual commemoration of the birth ', '2017-12-25', '2017-01-01', '2017-01-01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `Payroll_id` int(5) NOT NULL,
  `Employee_id` int(5) NOT NULL,
  `Payroll_month` int(2) NOT NULL,
  `Payroll_year` year(4) NOT NULL,
  `Present_days` int(5) NOT NULL,
  `Working_days` int(5) NOT NULL,
  `Balance_leaves` int(3) NOT NULL,
  `Remarks` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payroll_details`
--

CREATE TABLE `payroll_details` (
  `Payroll_detail_id` int(5) NOT NULL,
  `Employee_id` int(5) NOT NULL,
  `Net_salary` float(10,3) NOT NULL,
  `Bonus` float(8,3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `Shift_id` int(5) NOT NULL,
  `Shift_name` char(25) NOT NULL,
  `In_time` time NOT NULL,
  `Out_time` time NOT NULL,
  `Created_date` date NOT NULL,
  `Modified_date` date NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`Shift_id`, `Shift_name`, `In_time`, `Out_time`, `Created_date`, `Modified_date`, `Status`) VALUES
(1, 'Morning Shift', '09:00:00', '06:00:00', '2011-04-19', '2011-04-19', 1),
(2, 'Noon Shift', '00:00:00', '17:00:00', '2011-04-19', '2011-04-19', 1),
(3, 'Evening Shift', '17:00:00', '00:00:00', '2011-04-19', '2011-04-19', 1),
(4, 'Night Shift', '21:00:00', '04:00:00', '2011-04-19', '2011-04-19', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`Branch_id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`Department_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`Designation_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_id`),
  ADD UNIQUE KEY `Bank_account_number` (`Bank_account_number`),
  ADD UNIQUE KEY `PAN_number` (`PAN_number`);

--
-- Indexes for table `employee_attendance`
--
ALTER TABLE `employee_attendance`
  ADD PRIMARY KEY (`Employee_atttendance_id`);

--
-- Indexes for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  ADD PRIMARY KEY (`Employeeleaves_id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`Holiday_id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`Payroll_id`);

--
-- Indexes for table `payroll_details`
--
ALTER TABLE `payroll_details`
  ADD PRIMARY KEY (`Payroll_detail_id`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`Shift_id`),
  ADD UNIQUE KEY `Shift_id` (`Shift_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `Branch_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `Department_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `Designation_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `Employee_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `employee_attendance`
--
ALTER TABLE `employee_attendance`
  MODIFY `Employee_atttendance_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee_leaves`
--
ALTER TABLE `employee_leaves`
  MODIFY `Employeeleaves_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `Holiday_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `Payroll_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payroll_details`
--
ALTER TABLE `payroll_details`
  MODIFY `Payroll_detail_id` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `Shift_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
