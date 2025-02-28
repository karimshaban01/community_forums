-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 24, 2023 at 05:59 AM
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
-- Database: `tanzania_regions`
--

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(255) NOT NULL,
  `region_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`district_id`, `district_name`, `region_id`) VALUES
(1, 'Arusha', 1),
(2, 'Karatu', 1),
(3, 'Longido', 1),
(4, 'Meru', 1),
(5, 'Monduli', 1),
(6, 'Ngorongoro', 1),
(7, 'Hai', 9),
(8, 'Moshi-rural', 9),
(9, 'Moshi-urban', 9),
(10, 'Mwanga', 9),
(11, 'Rombo', 9),
(12, 'Same', 9),
(14, 'Kinondoni', 2),
(15, 'Ilala', 2),
(16, 'Temeke', 2),
(17, 'Kigamboni', 2),
(18, 'Ubungo', 2),
(19, 'Chamwino', 3),
(20, 'Dodoma', 3),
(21, 'Chemba', 3),
(22, 'Kondoa', 3),
(23, 'Bahi', 3),
(24, 'Mpwapwa', 3),
(25, 'Kongwa', 3),
(26, 'Bukombe', 4),
(27, 'Mbogwe', 4),
(28, 'Nyang\'wale', 4),
(29, 'Geita', 4),
(30, 'Chato', 4),
(31, 'Mufindi', 5),
(32, 'Kilolo', 5),
(33, 'Iringa', 5),
(34, 'Biharamulo', 6),
(35, 'Karagwe', 6),
(36, 'Muleba', 6),
(37, 'Kyerwa', 6),
(38, 'Bukoba', 6),
(39, 'Ngara', 6),
(40, 'Misenyi', 6),
(41, 'Mlele', 7),
(42, 'Mpanda', 7),
(43, 'Tanganyika', 7),
(44, 'Kigoma', 8),
(45, 'Kasulu', 8),
(46, 'Kakonko', 8),
(47, 'Uvinza', 8),
(48, 'Buhigwe', 8),
(49, 'Kibondo', 8),
(50, 'Nachingwea', 10),
(51, 'Ruangwa', 10),
(52, 'Liwale', 10),
(53, 'lindi', 10),
(54, 'Kilwa', 10),
(55, 'Babati', 11),
(56, 'Mbulu', 11),
(57, 'Hanang\'', 11),
(58, 'Kiteto', 11),
(59, 'Simanjiro', 11),
(60, 'Rorya', 12),
(61, 'Serengeti', 12),
(62, 'Bunda', 12),
(63, 'Butiama', 12),
(64, 'Tarime', 12),
(65, 'Musoma', 12),
(66, 'Chunya', 13),
(67, 'Kyela', 13),
(68, 'Mbeya', 13),
(69, 'Rungwe', 13),
(70, 'Mbarali', 13),
(71, 'Newala', 15),
(72, 'Nanyumbu', 15),
(73, 'Mtwara', 15),
(74, 'Masasi', 15),
(75, 'Tandahimba', 15),
(76, 'Ilemela', 16),
(77, 'Kwimba', 16),
(78, 'Sengerema', 16),
(79, 'Nyamagana', 16),
(80, 'Magu', 16),
(81, 'Ukerewe', 16),
(82, 'Misungwi', 16),
(83, 'Gairo', 14),
(84, 'Kilombero', 14),
(85, 'Mvomero', 14),
(86, 'Morogoro', 14),
(87, 'Ulanga', 14),
(88, 'Kilosa', 14),
(89, 'Malinyi', 14),
(90, 'Njombe', 17),
(91, 'Ludewa', 17),
(92, 'Wanging\'ombe', 17),
(93, 'Makete', 17),
(94, 'Bagamoyo', 20),
(95, 'Mkuranga', 20),
(96, 'Rufiji', 20),
(97, 'Mafia', 20),
(98, 'Kibaha', 20),
(99, 'Kisarawe', 20),
(100, 'Kibiti', 20),
(101, 'Sumbawanga', 21),
(102, 'Nkasi', 21),
(103, 'Kalambo', 21),
(104, 'Namtumbo', 22),
(105, 'Mbinga', 22),
(106, 'Nyasa', 22),
(107, 'Tunduru', 22),
(108, 'Songea', 22),
(109, 'Kishapu', 23),
(110, 'Kahama', 23),
(111, 'Shinyanga', 23),
(112, 'Busega', 24),
(113, 'Maswa', 24),
(114, 'Bariadi', 24),
(115, 'Meatu', 24),
(116, 'Itilima', 24),
(117, 'Mkalama', 25),
(118, 'Manyoni', 25),
(119, 'Singida', 25),
(120, 'Ikungi', 25),
(121, 'Iramba', 25),
(122, 'Songwe', 32),
(123, 'Ileje', 32),
(124, 'Mbozi', 32),
(125, 'Momba', 32),
(126, 'Tanga', 27),
(127, 'Muheza', 27),
(128, 'Mkinga', 27),
(129, 'Pangani', 27),
(130, 'Handeni', 27),
(131, 'Korogwe', 27),
(132, 'Kilindi', 27),
(133, 'Lushoto', 27),
(134, 'Tanga', 27),
(135, 'Nzega', 26),
(136, 'Kaliua', 26),
(137, 'Igunga', 26),
(138, 'Sikonge', 26),
(139, 'Tabora', 26),
(140, 'Urambo', 26),
(141, 'Uyui', 26);

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `region_id` int(11) NOT NULL,
  `region_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`region_id`, `region_name`) VALUES
(1, 'Arusha'),
(2, 'Dar-es-Salaam'),
(3, 'Dodoma'),
(4, 'Geita'),
(5, 'Iringa'),
(6, 'Kagera'),
(7, 'Katavi'),
(8, 'Kigoma'),
(9, 'Kilimanjaro'),
(10, 'Lindi'),
(11, 'Manyara'),
(12, 'Mara'),
(13, 'Mbeya'),
(14, 'Morogoro'),
(15, 'Mtwara'),
(16, 'Mwanza'),
(17, 'Njombe'),
(18, 'Pemba North'),
(19, 'Pemba South'),
(20, 'Pwani'),
(21, 'Rukwa'),
(22, 'Ruvuma'),
(23, 'Shinyanga'),
(24, 'Simiyu'),
(25, 'Singida'),
(26, 'Tabora'),
(27, 'Tanga'),
(28, 'Zanzibar North'),
(29, 'Zanzibar South and Central'),
(30, 'Zanzibar West'),
(32, 'Songwe');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(64) NOT NULL,
  `reg` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(64) NOT NULL,
  `region` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirm_password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `reg`, `gender`, `email`, `region`, `district`, `password`, `confirm_password`) VALUES
('ALLY ABARAALI', 'BCS-01-0023-2021', 'male', 'ally@gmail.com', 'Arusha', 'Karatu', '12345678', '12345678'),
('KARIM HARUNA', 'BCS-01-0034-2021', 'male', 'karimxhaban@gmail.com', 'Dar es Salaam', 'Kinondoni', '12345678', '12345678'),
('HARUNA HARUNA', 'BCS-02-0034-2021', 'male', 'karimxhaban01@gmail.com', 'Morogoro', 'Kilombero', '12345678', '12345678'),
('MWANTUMU OMARI', 'BCS-02-0040-2021', 'female', 'karimxhaban02@gmail.com', 'Dodoma', 'Dodoma', '12345678', '12345678'),
('Aloyce Magogwa', 'BCS-02-0046-2021', 'male', 'aloyce@gmail.com', 'Mbeya', 'Mbeya', 'aloyce11', 'aloyce11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`reg`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `region_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
