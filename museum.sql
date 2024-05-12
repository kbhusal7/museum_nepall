-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 05:51 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museum`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `email`, `password`) VALUES
(3, 'success', 'admin123', '123'),
(4, 'admin2', 'admin2@gmail.com', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_museum`
--

CREATE TABLE `tbl_museum` (
  `id` int(11) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_description` varchar(1000) NOT NULL,
  `m_location` varchar(100) NOT NULL,
  `m_image` varchar(100) NOT NULL,
  `nc_p` int(100) NOT NULL,
  `ns_p` int(100) NOT NULL,
  `fc_p` int(100) NOT NULL,
  `sa_p` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_museum`
--

INSERT INTO `tbl_museum` (`id`, `m_name`, `m_description`, `m_location`, `m_image`, `nc_p`, `ns_p`, `fc_p`, `sa_p`) VALUES
(31, 'The Museum of Patan', '    The Patan Museum is a must-see for anybody visiting Nepal, whether or not they are interested in Hindu and Buddhist architecture and religious handicrafts. This Museum, housed in the former royal palace in Patan Durbar Square, has been dubbed the best in South Asia, and it’s simple to understand why once you step inside.', 'Patan', 'patan museum.png ', 80, 50, 100, 20),
(32, 'Museum Tribhuvan', ' The Tribhuvan Museum is housed within the Hanuman Dhoka Palace, the palace of King Tribhuvan, and is packed with the king’s treasures. The king’s walking staff with a hidden blade within, the majestic throne, his beautiful jewelry, and pictures of the royal family members are among the unusual objects on show in the Museum.', 'Hanuman Dhoka', ' museum tu.png', 100, 150, 1000, 50),
(33, 'The Natural History Museum', ' The Museum of Natural History is located south of Swayambhunath, next to the National Museum of Nepal. This Museum is yet to be marked as a tourist destination on Nepal’s maps. The Institute for Science and Technology is assisting the Museum in its efforts to keep numerous kinds of flora and wildlife from becoming extinct.', 'Swayambhunath', ' national history.png', 100, 70, 500, 50),
(34, 'Museum of Taragaon', ' The Taragaon Museum is a private museum located in Kathmandu. It is located in the northern part of the city near the Bouddhanath stupa. It is situated on the ground of the Taragaon Regency hotel, which owns the museum. The museum is supported by the Saraf Foundation. The museum features a permanent collection in three of its building and a contemporary art gallery.', 'Boudha', ' taragaon.png', 100, 70, 600, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice`
--

CREATE TABLE `tbl_notice` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `date` date DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_notice`
--

INSERT INTO `tbl_notice` (`id`, `title`, `description`, `date`) VALUES
(7, 'Loshar', 'aja loshar', '2024-02-10'),
(8, 'meetup', 'ggg', '2024-02-10'),
(10, 'labours day', 'xutti', '2024-04-29'),
(11, 'test notice', 'Attempt all questions!', '2024-04-30'),
(12, 'Mid Defense', 'coming sunday', '2024-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ticketbooking`
--

CREATE TABLE `tbl_ticketbooking` (
  `id` int(11) NOT NULL,
  `u_name` varchar(20) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `b_date` date NOT NULL,
  `no_of_nc` int(3) NOT NULL DEFAULT 0,
  `no_of_ns` int(3) NOT NULL DEFAULT 0,
  `no_of_fc` int(3) NOT NULL DEFAULT 0,
  `no_of_sa` int(3) NOT NULL DEFAULT 0,
  `payment_type` varchar(100) NOT NULL,
  `transction_no` varchar(100) NOT NULL,
  `amount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ticketbooking`
--

INSERT INTO `tbl_ticketbooking` (`id`, `u_name`, `m_name`, `b_date`, `no_of_nc`, `no_of_ns`, `no_of_fc`, `no_of_sa`, `payment_type`, `transction_no`, `amount`) VALUES
(21, 'Hari', 'Museum Tribhuvan', '2024-05-02', 11, 3, 5, 0, 'cash', '333', 6550),
(31, 'Manisha ', 'Museum of Taragaon', '2024-05-07', 8, 4, 0, 0, 'E-sewa', '444', 1080),
(34, 'Kripa ', 'The Museum of Patan', '2024-05-10', 1, 0, 0, 0, 'E-sewa', '118', 80),
(37, 'Manisha ', 'Museum of Taragaon', '2024-05-22', 1, 0, 0, 0, 'cash', '19', 100),
(40, 'Sajan', 'The Museum of Patan', '2024-05-07', 1, 0, 2, 3, 'E-sewa', '122', 280),
(41, 'Sajan', 'Museum Tribhuvan', '2024-05-07', 1, 3, 2, 4, 'E-sewa', '2', 2550),
(43, 'mausami', 'Museum Tribhuvan', '2024-05-24', 1, 21, 2, 1, 'E-sewa', '71', 5250),
(45, 'mausamii', 'Museum Tribhuvan', '2024-05-23', 1, 0, 2, 0, 'Khalti', '14', 2100),
(49, 'success', 'Museum of Taragaon', '2024-05-10', 1, 0, 0, 0, 'Khalti', '77', 100),
(52, 'mausami', 'The Natural History Museum', '2024-05-10', 1, 0, 0, 0, 'E-sewa', '1', 100),
(57, 'Kripa ', 'Museum Tribhuvan', '2024-05-10', 1, 0, 0, 0, 'E-sewa', '1', 100),
(78, 'Kripa ', 'Museum of Taragaon', '2024-05-10', 0, 0, 4, 0, 'Khalti', '77', 2400),
(88, 'Kripa ', 'Museum of Taragaon', '2024-05-10', 1, 0, 0, 0, 'E-sewa', '11', 100),
(90, 'Kripa ', 'The Natural History Museum', '2024-05-18', 3, 0, 0, 0, 'Khalti', '9', 300),
(93, 'mausami', 'The Natural History Museum', '2024-05-15', 1, 0, 0, 0, 'Khalti', '1111', 100),
(94, 'Manisha ', 'The Museum of Patan', '2024-05-18', 45, 0, 0, 0, 'Khalti', '77', 3600),
(95, 'Kripa ', 'The Museum of Patan', '2024-05-11', 3, 0, 0, 0, 'Khalti', '123', 240),
(96, 'Sadikshya', 'Museum of Taragaon', '2024-05-22', 2, 2, 0, 0, 'E-sewa', '555', 340);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phone` bigint(20) DEFAULT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `password`, `phone`, `status`) VALUES
(11, 'harihairom', 'userhari@gmail.com', '007792d9705d9a35d649193c13ed4c69', 9812345678, 0),
(12, 'hari', 'userhari@gmail.com', '38ec9b0ed5ccadb56b3aed9186d6b52c', 9867123456, 1),
(13, 'user', 'user@gmail.com', '3616de58b9d2b617c2d687dcffcb4e5b', 9867654321, 1),
(14, 'ram bahadur', 'ram@gmail.com', '1265242', 3256984125, 1),
(15, 'jon2', 'jon2@gmail.com', '1c5a9ddc9d9f6202fc6c6a353d743e9f', 98671234567, 1),
(16, 'Sajan', 'sazn@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 9813677212, 0),
(17, 'Kripa ', 'kripa@gmail.com', '25d55ad283aa400af464c76d713c07ad', 9863320142, 0),
(18, 'Hari', 'userhari@gmail.com', '25d55ad283aa400af464c76d713c07ad', 9823467589, 1),
(19, 'Manisha ', 'm@gmail.com', '0dfd61ea5490c46053c59461ec27f55c', 9812345670, 1),
(20, 'test user', 'test@gmail.com', '25d55ad283aa400af464c76d713c07ad', 9813677212, 0),
(21, 'mausami', 'ma@gmail.com', '25d55ad283aa400af464c76d713c07ad', 9876543212, 0),
(22, 'Sajan', 'saznshrs1@gmail.com', '25d55ad283aa400af464c76d713c07ad', 9779813677212, 1),
(23, 'mausamii', 'mas@gmail.com', '1577d33b3ff81f3be5dc66f8a29dc39e', 9779812354765, 1),
(24, 'bunny', 'bunny@gmail.com', '25d55ad283aa400af464c76d713c07ad', 9779867543223, 1),
(25, 'Sadikshya', 'sad@gmail.com', '8dbb22fa76c8c50aab76f2b10350ba96', 9779768369263, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_museum`
--
ALTER TABLE `tbl_museum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_ticketbooking`
--
ALTER TABLE `tbl_ticketbooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_museum`
--
ALTER TABLE `tbl_museum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_notice`
--
ALTER TABLE `tbl_notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_ticketbooking`
--
ALTER TABLE `tbl_ticketbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
