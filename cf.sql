-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 24, 2024 at 06:00 PM
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
-- Database: `cfwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `concern`
--

CREATE TABLE `concern` (
  `concern_id` int(10) NOT NULL,
  `concern_cat` varchar(64) DEFAULT NULL,
  `concern_date` date DEFAULT current_timestamp(),
  `concern_region` varchar(64) NOT NULL,
  `concern_district` varchar(64) NOT NULL,
  `concern_location` varchar(64) DEFAULT NULL,
  `concern_title` varchar(100) DEFAULT NULL,
  `concern_desc` varchar(200) DEFAULT NULL,
  `uid` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `concern`
--

INSERT INTO `concern` (`concern_id`, `concern_cat`, `concern_date`, `concern_region`, `concern_district`, `concern_location`, `concern_title`, `concern_desc`, `uid`) VALUES
(1, 'health', '2023-12-21', '', '', 'MBAGALA', 'AFYA', 'huduma zinazotolewa hospitali haziendani na uhitaji wa wananchi tunaomba hili litazamwe', 5),
(2, 'education', '2023-12-12', '', '', 'KAWE', 'ELIMU MASHULENI', 'wanafunzi siku hizi hawana uwezo wa kupambana na changamoto za maisha kwa elimu wanayoipata', 4),
(35, 'infrastructure', '2023-12-25', '', '', 'CHAMWINO', 'BARABARA', 'Barabara yetu imeanza kuchakaa', 1),
(36, 'infrastructure', '2023-12-25', '', '', 'kilwa', 'mawasiliano', 'leo ni siku ya tatu hatupati mawasiliano kwa sababu mnara wa TTCL umeanguka.', 1),
(38, 'health', '2023-12-25', '', '', 'kilwa', 'maji', 'maji ni ya shida sana.', 1),
(39, 'sports', '2023-12-25', 'lindi', 'kilwa', 'kilwa', 'UKOSEFU WA VIFAA VYA MICHEZO', 'timu yetu ya mkoa haina vifaa vya mazoezi vya kutosha kujiandaa na mashindano.', 1),
(40, 'infrastructure', '2023-12-25', 'kigoma', 'kasulu', 'kasulu', 'BARABARA', 'barabara hazipitiki mvua ikinyesha.', 2),
(41, 'infrastructure', '2023-12-25', 'kigoma', 'kigoma', 'kigoma', 'MAJI MACHAFU YANAHARIBU HALI YA HEWA', 'maji machafu yanayotiririshwa kutoka majumbani mwa watu yanachafua hali ya hewa.', 3),
(42, '', '2023-12-28', 'kigoma', 'kasulu', 'kasulu', '', '', 2),
(43, '', '2023-12-28', 'kigoma', 'kasulu', 'kasulu', '', '', 2),
(44, '', '2023-12-28', 'kigoma', 'kasulu', 'kasulu', '', '', 2),
(45, '', '2023-12-28', 'kigoma', 'kasulu', 'kasulu', '', '', 2),
(46, '', '2023-12-28', 'kigoma', 'kasulu', 'kasulu', '', '', 2),
(47, '--select category--', '2023-12-28', 'kigoma', 'kasulu', 'kasulu', '', '', 2),
(48, 'infrastructure', '2023-12-28', 'kigoma', 'kasulu', 'kasulu', 'VIWANDA', 'Viwanda vilivyojengwa maeneo ya mjini vinasambaza moshi mwingi vinapaswa kuhamishwa kwenda maeneo ya pembeni mwa mji.', 2),
(49, '--select category--', '2023-12-28', 'kigoma', 'kasulu', 'kasulu', 'BARABARA', '', 2),
(50, '--select category--', '2023-12-28', 'kigoma', 'kasulu', 'kasulu', '', '', 2),
(51, 'infrastructure', '2023-12-28', 'kigoma', 'kasulu', 'kasulu', 'UMEME', 'siku hizi umeme unakata kata ovyo tunashindwa kufanya kazi', 2),
(52, 'infrastructure', '2023-12-28', 'kigoma', 'kasulu', 'kasulu', 'UMEME', 'siku hizi umeme unakata kata ovyo tunashindwa kufanya kazi', 2),
(53, 'infrastructure', '2023-12-28', 'kigoma', 'kasulu', 'kasulu', 'UMEME', 'siku hizi umeme unakata kata ovyo tunashindwa kufanya kazi kwa ufasaha wakuu', 2),
(54, '--select category--', '2024-01-02', 'kigoma', 'kasulu', 'kasulu', '', '', 2),
(55, 'education', '2024-01-13', 'kigoma', 'kasulu', 'kasulu', 'MICHANGO MASHULENI', 'walimu wameanza kuomba michango tena mashuleni', 2),
(56, 'education', '2024-01-18', 'kigoma', 'kasulu', 'kasulu', 'UHABA WA MADARASA', 'shule zetu zinakabiriwa na uhaba wa madarasa', 2),
(57, 'sports', '2024-01-18', 'kigoma', 'kasulu', 'kasulu', 'UCHAKAVU WA VIWANJA', 'viwanja vya michezo vya mkoa wetu ni chakavu na havifai kwa mazoezi, tunaomba ulitizame hili', 2);

-- --------------------------------------------------------

--
-- Table structure for table `constituence`
--

CREATE TABLE `constituence` (
  `const_id` int(2) DEFAULT NULL,
  `district_id` int(2) DEFAULT NULL,
  `const_name` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(2) DEFAULT NULL,
  `district_name` varchar(64) DEFAULT NULL,
  `reg_id` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `reg_id` int(2) DEFAULT NULL,
  `reg_name` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `response_id` int(10) NOT NULL,
  `concern_id` int(10) DEFAULT NULL,
  `response_date` date DEFAULT current_timestamp(),
  `uid` int(10) DEFAULT NULL,
  `response_title` varchar(100) DEFAULT NULL,
  `response_body` varchar(200) DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`response_id`, `concern_id`, `response_date`, `uid`, `response_title`, `response_body`, `is_read`) VALUES
(1, 1, '2023-12-22', 1, 'kero ya maji', 'suala la maji tunaendelea kulishughulikia', 1),
(2, 2, '2023-12-13', 3, 'maji', 'suala la maji linashughulikiwa', 1),
(3, NULL, '2023-12-25', 1, '', '', 1),
(4, NULL, '2023-12-25', 1, '', '', 1),
(5, NULL, '2023-12-25', 1, 'elimu', 'tumeanza kuajiri waalimu', 1),
(6, 2, '2023-12-25', 1, 'ELIMU MASHULENI', 'tunatizamia kubadili mitaala ili kuhakikisha elimu inakidhi uhitaji.', 1),
(7, 1, '2023-12-25', 1, 'MAJI', 'kuna bomba limepasuka maeneo ya rangi tatu tumekwisha wapeleka mafundi eneo lile.', 1),
(8, 35, '2023-12-25', 1, 'BARABARA', 'tunatizamia kufanya marekebisha ndani ya mwaka huu wa fedha.', 1),
(9, 36, '2023-12-25', 1, 'mawasiliano', 'tunakuja na timu ya mafundi kutizama ukubwa wa tatizo.', 1),
(10, 41, '2023-12-26', 3, '', '', 1),
(11, 41, '2023-12-26', 3, '', '', 1),
(12, 41, '2023-12-26', 3, '', 'suala hili tupo katika mchakato wa kulitafutia ufumbuzi', 1),
(13, 41, '2023-12-26', 3, '', 'suala hili tupo katika mchakato wa kulitafutia ufumbuzi', 1),
(14, 41, '2023-12-26', 3, '', 'suala hili tupo katika mchakato wa kulitafutia ufumbuzi', 1),
(15, 3, '2023-12-26', 41, 'MAJI MACHAFU YANAHARIBU HALI YA HEWA', 'suala hili tupo katika mchakato wa kulitafutia ufumbuzi', 1),
(16, 1, '2023-12-26', 38, 'maji', 'kuna bomba limepasuka maeneo ya chanzoni', 1),
(17, 2, '2023-12-26', 41, 'MAJI MACHAFU YANAHARIBU HALI YA HEWA', 'tumewaagiza mgambo kuwakamata wanaotiririsha maji machafu', 1),
(18, 2, '2023-12-26', 40, 'BARABARA', 'suala hili tupo katika mchakato wa kulitafutia ufumbuzi', 1),
(21, 40, '2023-12-26', 2, 'BARABARA', 'suala hili tupo katika mchakato wa kuzitafutia ufumbuzi hizo barabara', 1),
(22, 41, '2023-12-26', 3, 'MAJI MACHAFU YANAHARIBU HALI YA HEWA', 'sawa kaka', 1),
(23, 41, '2023-12-27', 2, 'MAJI MACHAFU YANAHARIBU HALI YA HEWA', 'mbona hatuoni mwitikio?', 1),
(24, 41, '2023-12-27', 2, 'MAJI MACHAFU YANAHARIBU HALI YA HEWA', 'oerioe', 1),
(25, 41, '2023-12-27', 2, 'MAJI MACHAFU YANAHARIBU HALI YA HEWA', 'suala hili tupo katika mchakato wa kulitafutia ufumbuzi', 1),
(26, 41, '2023-12-27', 2, 'MAJI MACHAFU YANAHARIBU HALI YA HEWA', 'kuna bomba limepasuka maeneo ya chanzoni', 1),
(27, 41, '2023-12-27', 2, 'MAJI MACHAFU YANAHARIBU HALI YA HEWA', 'suala hili tupo katika mchakato wa kulitafutia ufumbuzi', 1),
(28, 41, '2023-12-27', 2, 'MAJI MACHAFU YANAHARIBU HALI YA HEWA', 'suala hili tupo katika mchakato wa kulitafutia ufumbuzi', 1),
(29, 41, '2023-12-29', 2, 'MAJI MACHAFU YANAHARIBU HALI YA HEWA', 'nadhani wiki hii suala hili litakwisha', 1),
(30, 41, '2023-12-29', 2, 'MAJI MACHAFU YANAHARIBU HALI YA HEWA', 'tayari limeshughulikiwa', 1),
(31, 51, '2023-12-29', 2, 'UMEME', 'hali hii inasababishwa na zoezi la ubadilishaji wa nguzo maeneo mbali mbali.', 1),
(32, 51, '2023-12-29', 2, 'UMEME', 'tunajitahidi kadiri ya uwezo wetu kuhakikisha linakwisha mapema', 1),
(33, 53, '2023-12-30', 2, 'UMEME', 'helo', 1),
(34, 41, '2024-01-06', 3, 'MAJI MACHAFU YANAHARIBU HALI YA HEWA', 'sawa tunashukuru mheshimiwa', 1),
(35, 53, '2024-01-13', 2, 'UMEME', 'tayari tatizo limeshughulikiwa', 1),
(36, 53, '2024-01-13', 2, 'UMEME', 'nawashukuru kwa uungwana wenu katika kipindi hiki cha mpito', 1),
(37, 53, '2024-01-18', 2, 'UMEME', 'ahsanteni sana kwa umoja wenu', 1),
(38, 53, '2024-01-18', 2, 'UMEME', 'tushirikiane kuujenga mkoa wetu', 1),
(39, 53, '2024-01-18', 2, 'UMEME', 'heri ya mwaka mpya', 1),
(40, 53, '2024-01-18', 2, 'UMEME', 'tuzidi kuombeana kheri', 1),
(41, 56, '2024-01-18', 2, 'UHABA WA MADARASA', 'nimelipokea ninalifanyia kazi', 1),
(42, 51, '2024-01-18', 79, 'UMEME', 'sawa tunaendelea kusuburi', 1),
(43, 41, '2024-01-20', 2, 'MAJI MACHAFU YANAHARIBU HALI YA HEWA', 'sawa', 1),
(44, 41, '2024-01-24', 2, 'MAJI MACHAFU YANAHARIBU HALI YA HEWA', 'ldknkl', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(10) NOT NULL,
  `uname` varchar(64) DEFAULT NULL,
  `region` varchar(64) DEFAULT NULL,
  `district` varchar(64) DEFAULT NULL,
  `constituence` varchar(64) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `contact` int(10) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `password` varchar(8) DEFAULT NULL,
  `gender` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `uname`, `region`, `district`, `constituence`, `email`, `contact`, `status`, `password`, `gender`) VALUES
(1, 'karim haruna', 'lindi', 'kilwa', 'kilwa', 'ksh@gmail.com', 4304903, 'representative', '12345678', 'male'),
(2, 'omary majaliwa', 'kigoma', 'kasulu', 'kasulu', 'omary@gmail.com', 948394, 'rc', '12345678', 'male'),
(3, 'ignass majaliwa', 'kigoma', 'kigoma', 'kigoma', 'igg@gmail.com', 94893, 'dc', '12345678', 'male'),
(77, 'josephjiloleli@gmail.com', 'arusha', 'arusha', 'meru', 'josephjiloleli@gmail.com', 742832192, 'resident', '12345678', 'male'),
(78, 'said manda', 'tanga', 'korogwe', 'korogwe', 'manda@gmail.com', 743723832, 'representative', '12345678', 'female'),
(79, 'SEMBESE MORIS', 'kigoma', 'kasulu', 'kasulu', 'sembese@gmail.com', 7438473, 'resident', '12345678', 'male'),
(80, 'rehema hassan', 'Arusha', 'Arusha', 'Arusha', 'reehema@gmail.com', 35264726, 'rc', '12345678', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `concern`
--
ALTER TABLE `concern`
  ADD PRIMARY KEY (`concern_id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`response_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `concern`
--
ALTER TABLE `concern`
  MODIFY `concern_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `response_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
