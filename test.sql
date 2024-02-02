-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2024 at 05:04 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `meta_data_form`
--

CREATE TABLE `meta_data_form` (
  `id` int(11) NOT NULL,
  `client` varchar(60) DEFAULT NULL,
  `section` varchar(250) NOT NULL,
  `field_data` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `meta_data_form`
--

INSERT INTO `meta_data_form` (`id`, `client`, `section`, `field_data`) VALUES
(13, NULL, 'Student Basic Deatils', '{\n    \"Student_Registration\": {\n        \"Student_Basic_Deatils\": {\n            \"data\": [\n                {\n                    \"_id\": 1,\n                    \"lable_name\": \"Student Name\",\n                    \"field_name\": \"std_name\",\n                    \"field_type\": \"text\",\n                    \"field_priority\": \"1\",\n                    \"field_event\": \"\",\n                    \"field_css\": \"width:50%\"\n                },\n                {\n                    \"_id\": 2,\n                    \"lable_name\": \"Mobile No\",\n                    \"field_name\": \"std_phone\",\n                    \"field_type\": \"number\",\n                    \"field_priority\": \"2\",\n                    \"field_event\": \"onclick=\\\"phone_verify()\\\"\",\n                    \"field_css\": \"width:50%\"\n                },\n                {\n                    \"_id\": 3,\n                    \"lable_name\": \"Date of Birth\",\n                    \"field_name\": \"std_dob\",\n                    \"field_type\": \"date\",\n                    \"field_priority\": \"3\",\n                    \"field_event\": \"\",\n                    \"field_css\": \"width:50%\"\n                }\n            ]\n        },\n        \"Current_address\":{\n            \"data\": [\n                {\n                    \"_id\": 1,\n                    \"lable_name\": \"House No\",\n                    \"field_name\": \"hno\",\n                    \"field_type\": \"text\",\n                    \"field_priority\": \"1\",\n                    \"field_event\": \"\",\n                    \"field_css\": \"width:50%\"\n                },\n                {\n                    \"_id\": 2,\n                    \"lable_name\": \"Sate\",\n                    \"field_name\": \"state\",\n                    \"field_type\": \"text\",\n                    \"field_priority\": \"2\",\n                    \"field_event\": \"onclick=\\\"phone_verify()\\\"\",\n                    \"field_css\": \"width:50%\"\n                },\n                {\n                    \"_id\": 3,\n                    \"lable_name\": \"Pincode\",\n                    \"field_name\": \"pincode\",\n                    \"field_type\": \"number\",\n                    \"field_priority\": \"3\",\n                    \"field_event\": \"\",\n                    \"field_css\": \"width:50%\"\n                }\n            ]\n        }\n    }\n    \n}');

-- --------------------------------------------------------

--
-- Table structure for table `meta_table_list`
--

CREATE TABLE `meta_table_list` (
  `meta_table_list_id` int(11) NOT NULL,
  `meta_table_name` varchar(60) DEFAULT NULL,
  `meta_table_section_list` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `meta_table_list`
--

INSERT INTO `meta_table_list` (`meta_table_list_id`, `meta_table_name`, `meta_table_section_list`) VALUES
(1, 'Student_Registration_From', 'student_basic_details, current_address, parment_address, hostel'),
(2, 'staff_registration', 'staff_basic_info, staff_cureent_address');

-- --------------------------------------------------------

--
-- Table structure for table `staff_registration`
--

CREATE TABLE `staff_registration` (
  `staff_registration_id` int(11) NOT NULL,
  `staff_name` varchar(200) DEFAULT NULL,
  `staff_department` varchar(200) DEFAULT NULL,
  `staff_designation` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `store_formate`
--

CREATE TABLE `store_formate` (
  `store_formate_id` int(11) NOT NULL,
  `store_title` varchar(250) DEFAULT NULL,
  `store_section` varchar(250) DEFAULT NULL,
  `store_field_data` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `store_formate`
--

INSERT INTO `store_formate` (`store_formate_id`, `store_title`, `store_section`, `store_field_data`) VALUES
(3, 'Student_Registration', 'Current_address', '{\n    \"Student_Registration\": {\n        \"fields_section_Student_Basic_Deatils\": {\n            \"data\": [\n                {\n                    \"_id\": 1,\n                    \"lable_name\": \"Student Name\",\n                    \"field_name\": \"std_name\",\n                    \"field_type\": \"text\",\n                    \"field_priority\": \"1\",\n                    \"field_event\": \"\",\n                    \"field_css\": \"width:50%\"\n                },\n                {\n                    \"_id\": 2,\n                    \"lable_name\": \"Mobile No\",\n                    \"field_name\": \"std_phone\",\n                    \"field_type\": \"number\",\n                    \"field_priority\": \"2\",\n                    \"field_event\": \"onclick=\\\"phone_verify()\\\"\",\n                    \"field_css\": \"width:50%\"\n                },\n                {\n                    \"_id\": 3,\n                    \"lable_name\": \"Date of Birth\",\n                    \"field_name\": \"std_dob\",\n                    \"field_type\": \"date\",\n                    \"field_priority\": \"3\",\n                    \"field_event\": \"\",\n                    \"field_css\": \"width:50%\"\n                }\n            ]\n        },\n        \"fields_section_Current_address\": {\n            \"data\": [\n                {\n                    \"_id\": 1,\n                    \"lable_name\": \"House No\",\n                    \"field_name\": \"hno\",\n                    \"field_type\": \"text\",\n                    \"field_priority\": \"1\",\n                    \"field_event\": \"\",\n                    \"field_css\": \"width:50%\"\n                }\n            ]\n        }\n    }\n}');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `student_registration_id` int(11) NOT NULL,
  `std_name` varchar(200) DEFAULT NULL,
  `std_phone` varchar(200) DEFAULT NULL,
  `std_dob` varchar(200) DEFAULT NULL,
  `student_address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`student_registration_id`, `std_name`, `std_phone`, `std_dob`, `student_address`) VALUES
(1, 'datta', '90876554321', '2024-01-30', 'xyz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meta_data_form`
--
ALTER TABLE `meta_data_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meta_table_list`
--
ALTER TABLE `meta_table_list`
  ADD PRIMARY KEY (`meta_table_list_id`);

--
-- Indexes for table `staff_registration`
--
ALTER TABLE `staff_registration`
  ADD PRIMARY KEY (`staff_registration_id`);

--
-- Indexes for table `store_formate`
--
ALTER TABLE `store_formate`
  ADD PRIMARY KEY (`store_formate_id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`student_registration_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meta_data_form`
--
ALTER TABLE `meta_data_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `meta_table_list`
--
ALTER TABLE `meta_table_list`
  MODIFY `meta_table_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff_registration`
--
ALTER TABLE `staff_registration`
  MODIFY `staff_registration_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `store_formate`
--
ALTER TABLE `store_formate`
  MODIFY `store_formate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `student_registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
