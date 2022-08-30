-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 02:04 PM
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
-- Database: `com_database_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `dob` date DEFAULT NULL,
  `user` varchar(25) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `discrpt` text DEFAULT NULL,
  `position` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`first_name`, `last_name`, `dob`, `user`, `phone_number`, `email`, `discrpt`, `position`) VALUES
('Salman', 'Khan', '1999-02-08', 'AD001', 1767763105, 'salman.khan05@northsouth.edu', 'Salman Khan who is the chief executive officer (CEO) and the highest-ranking person in a company. While every company differs, CEOs are often responsible for expanding the company, driving profitability, and in the case of public companies, improving share prices. CEOs manage the overall operations of a company.', 'CEO'),
('Md. Shahariar Alam', 'Sifat', '1999-05-05', 'AD002', 1741909945, 'md.sifat@northsouth.edu', 'The chief operating officer (COO) is a senior executive tasked with overseeing the day-to-day administrative and operational functions of a business. The COO typically reports directly to the chief executive officer (CEO) and is considered to be second in the chain of command.', 'COO'),
('Samiullah', 'Samrat', '1999-06-05', 'AD003', 1741945457, 'samiullah.shekh@northsouth.edu', 'chief administrative officer, is an executive who oversee\'s an organization\'s day-to-day operations. They typically act as the head of departments like finance, human resources and sales, or any department that takes part in daily tasks or customer-facing interactions.', 'CAO');

-- --------------------------------------------------------

--
-- Table structure for table `admin_log`
--

CREATE TABLE `admin_log` (
  `user` varchar(25) NOT NULL,
  `pass` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_log`
--

INSERT INTO `admin_log` (`user`, `pass`) VALUES
('AD001', 1234),
('AD002', 2345),
('AD003', 34567);

-- --------------------------------------------------------

--
-- Table structure for table `clint_address`
--

CREATE TABLE `clint_address` (
  `clint_id` varchar(25) DEFAULT NULL,
  `address_line` text DEFAULT NULL,
  `district` varchar(25) DEFAULT NULL,
  `sub_district` varchar(25) DEFAULT NULL,
  `region` varchar(25) DEFAULT NULL,
  `postal` int(6) DEFAULT NULL,
  `divition` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clint_address`
--

INSERT INTO `clint_address` (`clint_id`, `address_line`, `district`, `sub_district`, `region`, `postal`, `divition`) VALUES
('CL001', 'As1', 'Tangail', 'Basail', 'Dhaka', 12, 'Dhaka'),
('CL002', 'As1', 'Tangail', 'Basail', 'Dhaka', 2, 'Dhaka'),
('CL003', 'As2', 'Tangail', 'Basail', 'Dhaka', 3, 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `clint_info`
--

CREATE TABLE `clint_info` (
  `clint_id` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `birthdate` date NOT NULL,
  `clint_nid` bigint(30) NOT NULL,
  `clint_email` varchar(30) NOT NULL,
  `clint_phone` int(11) NOT NULL,
  `admin_id` varchar(25) DEFAULT NULL,
  `packageID` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clint_info`
--

INSERT INTO `clint_info` (`clint_id`, `first_name`, `last_name`, `birthdate`, `clint_nid`, `clint_email`, `clint_phone`, `admin_id`, `packageID`) VALUES
('CL001', 'Anik ', 'Mitra', '2022-08-19', 70, 'mitra@gmail.com', 171805201, 'AD001', 'Pack1'),
('CL002', 'Mir', 'Shimanta', '2022-08-04', 71, 'mir@gmail.com', 171805202, 'AD001', 'Pack3'),
('CL003', 'Rakib', 'Hasan', '2022-08-03', 73, 'rakib@gmail.com', 171805203, 'AD001', 'Pack2');

-- --------------------------------------------------------

--
-- Table structure for table `clint_log`
--

CREATE TABLE `clint_log` (
  `clint_id` varchar(25) NOT NULL,
  `clint_password` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clint_log`
--

INSERT INTO `clint_log` (`clint_id`, `clint_password`) VALUES
('CL001', 1234),
('CL002', 9852),
('CL003', 4321);

-- --------------------------------------------------------

--
-- Table structure for table `complaint_list`
--

CREATE TABLE `complaint_list` (
  `complaint_id` int(10) UNSIGNED NOT NULL,
  `complaint_catagory` varchar(50) DEFAULT NULL,
  `complaint_detail` text DEFAULT NULL,
  `clint_id` varchar(25) DEFAULT NULL,
  `complaint_date` date DEFAULT NULL,
  `solve_check` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complaint_list`
--

INSERT INTO `complaint_list` (`complaint_id`, `complaint_catagory`, `complaint_detail`, `clint_id`, `complaint_date`, `solve_check`) VALUES
(1, 'No Connection', 'No connection for 5 hours', 'CL002', '2022-08-26', 0),
(2, 'Fiber Cut', 'Wire Cut', 'CL001', '2022-08-28', 0),
(3, 'Custom', 'Static Sound', 'CL001', '2022-08-28', 0),
(6, 'No Connection', 'No Connection', 'CL003', '2022-08-28', 0),
(7, 'Custom', 'No Line', 'CL003', '2022-08-28', 0),
(8, 'Custom', 'No Line', 'CL003', '2022-08-28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_address`
--

CREATE TABLE `employee_address` (
  `emp_user` varchar(25) DEFAULT NULL,
  `village_name` varchar(20) DEFAULT NULL,
  `post_office` varchar(20) DEFAULT NULL,
  `police_station` varchar(20) DEFAULT NULL,
  `district` varchar(20) DEFAULT NULL,
  `sub_district` varchar(20) DEFAULT NULL,
  `postal_zip` int(6) DEFAULT NULL,
  `divition` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_address`
--

INSERT INTO `employee_address` (`emp_user`, `village_name`, `post_office`, `police_station`, `district`, `sub_district`, `postal_zip`, `divition`) VALUES
('EM001', 'VIL1', 'PO1', 'PS1', 'DS', 'SDS', 1900, 'DIV1'),
('EM002', 'Village1', 'PO1', 'PS1', 'DIS1', 'SDIS1', 1900, 'Dhaka'),
('EM003', 'VIL1', 'PO1', 'PS4', 'DS1', 'SUBD4', 9000, 'Dhaka'),
('EM004', 'VIL1', 'PO1', 'PS4', 'DS1', 'SUBD4', 2, 'Dhaka'),
('EM005', 'ad', 'df', 'sd', 'dd', 'df', 1074, 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `employee_assign`
--

CREATE TABLE `employee_assign` (
  `emp_id` varchar(25) DEFAULT NULL,
  `complaint_id` int(20) DEFAULT NULL,
  `admin_id` varchar(25) DEFAULT NULL,
  `clint_id` varchar(25) DEFAULT NULL,
  `assign_id` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_assign`
--

INSERT INTO `employee_assign` (`emp_id`, `complaint_id`, `admin_id`, `clint_id`, `assign_id`) VALUES
('EM002', 8, 'AD001', 'CL003', 1),
('EM001', 1, 'AD001', 'CL002', 2),
('EM003', 3, 'AD001', 'CL001', 3),
('EM004', 6, 'AD001', 'CL003', 4);

-- --------------------------------------------------------

--
-- Table structure for table `employee_emg`
--

CREATE TABLE `employee_emg` (
  `emp_user` varchar(25) NOT NULL,
  `emg_name` varchar(35) DEFAULT NULL,
  `relation` varchar(25) DEFAULT NULL,
  `emg_phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_emg`
--

INSERT INTO `employee_emg` (`emp_user`, `emg_name`, `relation`, `emg_phone`) VALUES
('EM001', 'Salman', 'Friend', 1345654345),
('EM002', 'Salman Khan', 'Friend', 1767763105),
('EM003', 'Sifat', 'Friend', 2356045),
('EM004', 'Sifat', 'Friend', 2356046),
('EM005', 'abdul', 'Father', 17999203);

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `emp_user` varchar(25) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `birth_date` date NOT NULL,
  `emp_nid` bigint(30) NOT NULL,
  `emp_gender` varchar(25) DEFAULT NULL,
  `emp_email` varchar(30) NOT NULL,
  `emp_phone` int(11) NOT NULL,
  `emp_salary` float(20,2) NOT NULL,
  `admin_user` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`emp_user`, `first_name`, `last_name`, `birth_date`, `emp_nid`, `emp_gender`, `emp_email`, `emp_phone`, `emp_salary`, `admin_user`) VALUES
('EM001', 'Roman', 'Mondol', '2022-08-17', 1234567, 'Male', 'roman@gmail.com', 1435967533, 10000.00, 'AD001'),
('EM002', 'Tamim', 'Haque', '2022-08-10', 2147483647, 'Male', 't@gmail.com', 1767763103, 2000.00, 'AD001'),
('EM003', 'Joe', 'Biden', '2022-08-25', 346743, 'Male', 'joe@gmail.com', 1313234543, 6000.00, 'AD001'),
('EM004', 'Fahim', 'Sadman', '2021-08-12', 45, 'Male', 'fahim@gmail.com', 1741909943, 10000.00, 'AD001'),
('EM005', 'Nahid', 'Hasan', '1999-02-06', 212325648, 'Male', 'nahid@gmailcom', 174026546, 2000.00, 'AD001');

-- --------------------------------------------------------

--
-- Table structure for table `employee_leave_request`
--

CREATE TABLE `employee_leave_request` (
  `leave_id` int(20) UNSIGNED NOT NULL,
  `emp_id` varchar(25) DEFAULT NULL,
  `reason` text DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_leave_request`
--

INSERT INTO `employee_leave_request` (`leave_id`, `emp_id`, `reason`, `from_date`, `to_date`) VALUES
(1, 'EM001', 'Sick', '2022-08-30', '2022-09-02'),
(2, 'EM002', 'Sick', '2022-08-30', '2022-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `employee_log`
--

CREATE TABLE `employee_log` (
  `emp_user` varchar(25) NOT NULL,
  `emp_pass` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_log`
--

INSERT INTO `employee_log` (`emp_user`, `emp_pass`) VALUES
('EM001', 2323),
('EM002', 1234),
('EM003', 3456),
('EM004', 9632),
('EM005', 5151);

-- --------------------------------------------------------

--
-- Table structure for table `employee_role`
--

CREATE TABLE `employee_role` (
  `emp_user` varchar(25) NOT NULL,
  `emp_salary` float(20,2) DEFAULT NULL,
  `emp_job_role` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_role`
--

INSERT INTO `employee_role` (`emp_user`, `emp_salary`, `emp_job_role`) VALUES
('EM001', 9999.99, 'Technician'),
('EM002', 2000.00, 'Operator'),
('EM003', 6000.00, 'Engineer'),
('EM004', 9999.99, 'Operator'),
('EM005', 2000.00, 'Operator');

-- --------------------------------------------------------

--
-- Table structure for table `employee_salary`
--

CREATE TABLE `employee_salary` (
  `salary_id` int(50) UNSIGNED NOT NULL,
  `payment_amount` float(20,2) DEFAULT NULL,
  `emp_id` varchar(25) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `admin_id` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_salary`
--

INSERT INTO `employee_salary` (`salary_id`, `payment_amount`, `emp_id`, `payment_date`, `admin_id`) VALUES
(1, 2000.00, 'EM002', '2022-08-29', 'AD001'),
(2, 6000.00, 'EM003', '2022-08-29', 'AD001'),
(3, 9999.99, 'EM001', '2022-08-29', 'AD001'),
(10, 9999.99, 'EM004', '2022-08-30', 'AD001'),
(11, 2000.00, 'EM005', '2022-08-30', 'AD001');

-- --------------------------------------------------------

--
-- Table structure for table `pack_detail`
--

CREATE TABLE `pack_detail` (
  `pack_id` varchar(25) NOT NULL,
  `charge` double(30,2) DEFAULT NULL,
  `pack_price` double(30,2) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `pack_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pack_detail`
--

INSERT INTO `pack_detail` (`pack_id`, `charge`, `pack_price`, `detail`, `pack_name`) VALUES
('Pack1', 40.00, 300.00, '50 Channels', 'Package 1'),
('Pack2', 60.00, 450.00, '75 Channels', 'Package 2'),
('Pack3', 80.00, 700.00, '150 Channels', 'Package 3');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `payment_id` bigint(30) UNSIGNED NOT NULL,
  `paid_amount` double(30,2) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `payment_method` varchar(30) DEFAULT NULL,
  `ref_number` int(11) DEFAULT NULL,
  `clint_id` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`payment_id`, `paid_amount`, `payment_date`, `payment_method`, `ref_number`, `clint_id`) VALUES
(1, 340.00, '2022-08-25', 'Bkash', 1767763105, 'CL001'),
(2, 780.00, '2022-08-25', 'Nagad', 1741909945, 'CL002'),
(3, 510.00, '2022-08-26', 'Card', 1745896587, 'CL003'),
(4, 780.00, '2022-08-26', 'Bkash', 1776632522, 'CL002'),
(5, 340.00, '2022-08-30', 'Bkash', 1245464, 'CL001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`user`),
  ADD UNIQUE KEY `user` (`user`),
  ADD UNIQUE KEY `phone_number` (`phone_number`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `position` (`position`);

--
-- Indexes for table `clint_address`
--
ALTER TABLE `clint_address`
  ADD UNIQUE KEY `clint_id` (`clint_id`);

--
-- Indexes for table `clint_info`
--
ALTER TABLE `clint_info`
  ADD PRIMARY KEY (`clint_id`),
  ADD UNIQUE KEY `clint_nid` (`clint_nid`);

--
-- Indexes for table `clint_log`
--
ALTER TABLE `clint_log`
  ADD PRIMARY KEY (`clint_id`);

--
-- Indexes for table `complaint_list`
--
ALTER TABLE `complaint_list`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `employee_address`
--
ALTER TABLE `employee_address`
  ADD UNIQUE KEY `emp_user` (`emp_user`);

--
-- Indexes for table `employee_assign`
--
ALTER TABLE `employee_assign`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `employee_emg`
--
ALTER TABLE `employee_emg`
  ADD PRIMARY KEY (`emp_user`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`emp_user`),
  ADD UNIQUE KEY `emp_nid` (`emp_nid`),
  ADD UNIQUE KEY `emp_email` (`emp_email`),
  ADD UNIQUE KEY `emp_phone` (`emp_phone`);

--
-- Indexes for table `employee_leave_request`
--
ALTER TABLE `employee_leave_request`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `employee_log`
--
ALTER TABLE `employee_log`
  ADD PRIMARY KEY (`emp_user`);

--
-- Indexes for table `employee_role`
--
ALTER TABLE `employee_role`
  ADD PRIMARY KEY (`emp_user`);

--
-- Indexes for table `employee_salary`
--
ALTER TABLE `employee_salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `pack_detail`
--
ALTER TABLE `pack_detail`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`payment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complaint_list`
--
ALTER TABLE `complaint_list`
  MODIFY `complaint_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `employee_assign`
--
ALTER TABLE `employee_assign`
  MODIFY `assign_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employee_leave_request`
--
ALTER TABLE `employee_leave_request`
  MODIFY `leave_id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_salary`
--
ALTER TABLE `employee_salary`
  MODIFY `salary_id` int(50) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `payment_id` bigint(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
