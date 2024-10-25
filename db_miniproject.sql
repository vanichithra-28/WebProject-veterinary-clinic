-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2024 at 08:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(20) NOT NULL,
  `admin_email` varchar(20) NOT NULL,
  `admin_pwd` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_pwd`) VALUES
(1, 'Admin', 'admin@123', '68280273'),
(2, 'anjana', 'admin2@1122', 'Anjana@258');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `booking_id` int(11) NOT NULL,
  `booking_date` varchar(100) NOT NULL,
  `booking_to_date` varchar(100) NOT NULL,
  `slot_id` int(11) NOT NULL,
  `pet_id` int(11) NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `booking_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`booking_id`, `booking_date`, `booking_to_date`, `slot_id`, `pet_id`, `doctor_id`, `booking_status`) VALUES
(23, '2024-09-20', '2024-09-26', 17, 53, 16, '1'),
(24, '2024-09-20', '2024-09-28', 19, 53, 19, '1'),
(25, '2024-09-20', '2024-09-23', 20, 49, 20, '1'),
(26, '2024-09-20', '2024-10-10', 20, 54, 16, '1'),
(28, '2024-09-20', '2024-10-10', 19, 54, 20, '1'),
(29, '2024-09-20', '2024-10-01', 17, 52, 19, '1'),
(30, '2024-09-20', '2024-09-26', 19, 48, 19, '1'),
(31, '2024-09-20', '2024-09-25', 21, 48, 16, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_breed`
--

CREATE TABLE `tbl_breed` (
  `breed_id` int(11) NOT NULL,
  `breed_name` varchar(30) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_breed`
--

INSERT INTO `tbl_breed` (`breed_id`, `breed_name`, `category_id`) VALUES
(1, 'Toy Poodle', 1),
(2, 'Husky', 1),
(3, 'German Shepherd', 1),
(4, 'Bulldog', 1),
(5, 'Labrador', 1),
(6, 'Golden Retriever', 1),
(7, 'Bengal Cat', 2),
(8, 'Persian cat', 2),
(9, 'Sphynx cat', 2),
(10, 'Russiaan Blue', 2),
(11, 'HF', 7),
(12, 'Gyr ', 7),
(13, 'Vechoor', 7),
(14, 'Jersey', 7),
(15, 'Chinese hamster', 5),
(16, 'Winter White', 5),
(17, 'European Hamster', 5),
(18, 'Love Birds', 3),
(19, 'Macaw', 3),
(20, 'Cockatiel', 3),
(21, 'Netherland Dwarf', 4),
(22, 'American Rabbit', 4),
(23, 'Himalayan', 4),
(24, 'Polish', 4),
(25, 'Angora', 4),
(26, 'Mini Lop', 4),
(27, 'Jamnapari', 8),
(28, 'Barbari', 8),
(29, 'Black Bengal', 8),
(30, 'Malabari Goat', 8),
(31, 'Surti', 8),
(32, 'Sindhi', 9),
(33, 'Marwari', 9),
(34, 'Nukra', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`) VALUES
(1, 'Dog'),
(2, 'Cat'),
(3, 'Bird'),
(4, 'Rabbit'),
(5, 'Hamster'),
(7, 'Cow'),
(8, 'Goat'),
(9, 'Horse'),
(10, 'Reptiles');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaints`
--

CREATE TABLE `tbl_complaints` (
  `complaint_id` int(11) NOT NULL,
  `complaint_content` varchar(20) NOT NULL,
  `complaint_date` varchar(100) NOT NULL,
  `complaint_reply` varchar(20) NOT NULL,
  `complaint_status` char(1) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaints`
--

INSERT INTO `tbl_complaints` (`complaint_id`, `complaint_content`, `complaint_date`, `complaint_reply`, `complaint_status`, `user_id`) VALUES
(4, 'gfd', '0000-00-00', 'slfnwslne;knv;kvn', '1', 21),
(5, 'asd', '2024-09-05', 'yh', '1', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

CREATE TABLE `tbl_department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`department_id`, `department_name`) VALUES
(7, 'sss'),
(8, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(1, 'Tiruvananthapuram'),
(2, 'Kollam'),
(3, 'Pathanamthitta'),
(4, 'Alappuzha'),
(5, 'Kottayam'),
(6, 'Idukki'),
(7, 'Ernakulam'),
(8, 'Trissur'),
(9, 'Palakkad'),
(10, 'Malappuram'),
(11, 'Kozhikkod'),
(12, 'Wayanad'),
(13, 'Kannur'),
(14, 'Kasaragod');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `doctor_id` int(11) NOT NULL,
  `doctor_name` varchar(20) NOT NULL,
  `doctor_email` varchar(30) NOT NULL,
  `doctor_contact` varchar(20) NOT NULL,
  `doctor_address` varchar(20) NOT NULL,
  `doctor_photo` varchar(200) NOT NULL,
  `doctor_pwd` varchar(20) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`doctor_id`, `doctor_name`, `doctor_email`, `doctor_contact`, `doctor_address`, `doctor_photo`, `doctor_pwd`, `department_id`) VALUES
(16, 'Mariya', 'mariya2255@gmail.com', '6598756124', 'Melukunnel(H)', 'user.png', 'mariya', 7),
(19, 'Alphonsa', 'alphonsa123@gmail.com', '8529637425', 'Kaithackel (H)', 'user.png', '123', 7),
(20, 'Athira', 'athira123@gmail.com', '48748772487', 'pranavam(H)', 'user.png', 'Athira@114', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_content` varchar(20) NOT NULL,
  `feedback_date` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_content`, `feedback_date`, `user_id`) VALUES
(4, 'verygood', '2024-09-05', 20),
(5, 'df', '2024-09-05', 20),
(6, 'xcv', '2024-09-06', 21);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pet`
--

CREATE TABLE `tbl_pet` (
  `pet_id` int(11) NOT NULL,
  `pet_name` varchar(20) NOT NULL,
  `pet_photo` varchar(2000) NOT NULL,
  `pet_age` varchar(111) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `height` varchar(20) NOT NULL,
  `weight` varchar(20) NOT NULL,
  `category_id` int(11) NOT NULL,
  `breed_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pet`
--

INSERT INTO `tbl_pet` (`pet_id`, `pet_name`, `pet_photo`, `pet_age`, `gender`, `height`, `weight`, `category_id`, `breed_id`, `user_id`) VALUES
(48, 'Luther', 'user.png', '18 Month', 'Male', '90cm', '5kg', 1, 4, 20),
(49, 'Luna', 'user.png', '3 months', 'Female', '90cm', '5kg', 8, 27, 21),
(50, 'Beca', 'user.png', '4 months', 'Female', '120 cm', '6kg', 8, 29, 20),
(51, 'Nala', 'user.png', '4 months', 'Male', '120 cm', '6kg', 1, 2, 20),
(52, 'Viola', 'user.png', '4 months', 'Male', '120 cm', '6kg', 1, 3, 21),
(53, 'benji', 'user.png', '4 months', 'Female', '120 cm', '6kg', 1, 4, 22),
(54, 'Jimmy', 'user.png', '18 Month', 'Male', '120 cm', '6kg', 1, 5, 22);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(30) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `district_id`) VALUES
(1, 'Neyyattinkara', 1),
(2, 'Varkkala', 1),
(3, 'Punalur', 2),
(4, 'Kottarakkara', 2),
(5, 'Thiruvalla', 3),
(6, 'Ranni', 3),
(7, 'Aaranmula', 3),
(8, 'Kuttanad', 4),
(9, 'Cherthala', 4),
(10, 'Kottayam', 5),
(11, 'Pala', 5),
(12, 'Adimali', 6),
(13, 'Kattappana', 6),
(14, 'Muvattupuzha', 7),
(15, 'Kothamangalam', 7),
(16, 'Chalakkudi', 8),
(17, 'Kodakara', 8),
(18, 'Malampuzha', 9),
(19, 'Aalathur', 9),
(20, 'Ponnani', 10),
(21, 'Perinthalmanna', 10),
(22, 'Thamarasherri ', 11),
(23, 'Atholi', 11),
(24, 'Kalpetta', 12),
(25, 'Periya', 12),
(26, 'Mahe', 13),
(27, 'iritty', 13),
(28, 'Adoor', 14),
(29, 'Edanad', 14),
(30, 'Neyyattinkara', 1),
(31, 'Neyyattinkara', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prescription`
--

CREATE TABLE `tbl_prescription` (
  `presc_id` int(11) NOT NULL,
  `presc_content` varchar(20) NOT NULL,
  `presc_date` varchar(100) NOT NULL,
  `booking_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_prescription`
--

INSERT INTO `tbl_prescription` (`presc_id`, `presc_content`, `presc_date`, `booking_id`) VALUES
(1, 'pds', '2024-09-05', 2),
(2, 'chdh', '2024-09-05', 2),
(3, 'cv', '2024-09-06', 16),
(4, 'y', '2024-09-11', 15),
(5, 'fg', '2024-09-11', 14),
(6, 'hghg', '2024-09-11', 14),
(7, 'jnbj', '2024-09-11', 14),
(8, 'hghg', '2024-09-11', 17),
(9, 'hghg', '2024-09-11', 17),
(10, 'pds', '2024-09-11', 17),
(11, 'pds', '2024-09-20', 20),
(12, 'TOXO MOX Tablets', '2024-09-20', 28);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slot`
--

CREATE TABLE `tbl_slot` (
  `slot_id` int(11) NOT NULL,
  `slot_time` time NOT NULL,
  `slot_count` int(11) NOT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_slot`
--

INSERT INTO `tbl_slot` (`slot_id`, `slot_time`, `slot_count`, `is_available`) VALUES
(17, '10:00:00', 4, 1),
(19, '11:00:00', 4, 1),
(20, '12:00:00', 4, 1),
(21, '09:00:00', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_contact` varchar(20) NOT NULL,
  `user_email` varchar(20) NOT NULL,
  `user_address` varchar(20) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `place_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_contact`, `user_email`, `user_address`, `user_password`, `place_id`, `district_id`) VALUES
(20, 'Anu', '64453636363', 'anu@gmail.com', 'asdfgh', 'Anu@1234', 3, 2),
(21, 'Vanichithra M', '7896541235', 'vani2003@gmail.com', 'plakkottu (H)', 'Vani@2255', 14, 7),
(22, 'Alphonsa', '9516761842', 'alph2003@gmail.com', 'alph', 'Alph@123', 15, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `tbl_breed`
--
ALTER TABLE `tbl_breed`
  ADD PRIMARY KEY (`breed_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_complaints`
--
ALTER TABLE `tbl_complaints`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_department`
--
ALTER TABLE `tbl_department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`doctor_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_pet`
--
ALTER TABLE `tbl_pet`
  ADD PRIMARY KEY (`pet_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
  ADD PRIMARY KEY (`presc_id`);

--
-- Indexes for table `tbl_slot`
--
ALTER TABLE `tbl_slot`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_breed`
--
ALTER TABLE `tbl_breed`
  MODIFY `breed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_complaints`
--
ALTER TABLE `tbl_complaints`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_department`
--
ALTER TABLE `tbl_department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `doctor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_pet`
--
ALTER TABLE `tbl_pet`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
  MODIFY `presc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_slot`
--
ALTER TABLE `tbl_slot`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
