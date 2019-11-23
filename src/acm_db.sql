-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2019 at 02:14 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acm_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_name` varchar(30) NOT NULL,
  `admin_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_name`, `admin_pass`) VALUES
('Ahsan', '123'),
('Haris', 'haris');

-- --------------------------------------------------------

--
-- Table structure for table `operators`
--

CREATE TABLE `operators` (
  `operator_name` varchar(30) NOT NULL,
  `operator_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `operators`
--

INSERT INTO `operators` (`operator_name`, `operator_pass`) VALUES
('Abdul Wasey', '123'),
('Ali Muzahir', '123'),
('Bilal Rahim', '123'),
('Faryal Ishfaq', '123'),
('Haris Noori', 'meqbtau1'),
('M.Ahsan', '123'),
('M.Shafeeq', '123'),
('Noormah', '123'),
('test', 'test'),
('Umair Maratab', '123');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `p_id` int(6) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_cnic` bigint(30) NOT NULL,
  `p_phone` bigint(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `fee_paid` int(20) NOT NULL,
  `registered_by` varchar(50) NOT NULL,
  `other_members` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`p_id`, `p_name`, `p_cnic`, `p_phone`, `event_name`, `fee_paid`, `registered_by`, `other_members`) VALUES
(584, 'GM Awais', 0, 0, 'DOTA', 1500, 'test', 'Imran, Afaq, Mubashir, Ehtisham'),
(994, 'Muzammil', 0, 0, 'CS-GO', 1500, 'Haris Noori', 'Talha, Arif, Mubashir, Mubashir'),
(410, 'Sarim Yawar', 0, 3325911500, 'FIFA', 350, 'Haris Noori', ''),
(558, 'Moeed Rehman', 0, 3325911500, 'FIFA', 350, 'Haris Noori', ''),
(992, 'M.Zain Khan', 0, 3439447865, 'Tekken', 0, 'Haris Noori', ''),
(745, 'M Sudais Khan', 0, 3439447865, 'Tekken', 0, 'Haris Noori', ''),
(930, 'Saqib', 0, 0, 'PUBG', 1200, 'Haris Noori', 'Usama, Suleman, Waleed'),
(95, 'GM Awais', 0, 0, 'Tekken', 350, 'Haris Noori', ''),
(138, 'Yasir', 0, 0, 'Tekken', 350, 'Haris Noori', ''),
(184, 'M.Ali Baig', 0, 3162117733, 'PUBG', 1200, 'Haris Noori', 'Haseeb, Faizan, Adeel, Bilal'),
(851, 'M.Sherzaman', 0, 0, 'Tekken', 350, 'Haris Noori', ''),
(600, 'Haseeb', 0, 0, 'Tekken', 350, 'Haris Noori', ''),
(815, 'M.Shahid Khan', 0, 0, 'Tekken', 350, 'Haris Noori', ''),
(418, 'Ubaid Ahmed', 0, 3333633116, 'FIFA', 350, 'Haris Noori', ''),
(755, 'Hamza', 0, 3359981029, 'PUBG', 1200, 'Haris Noori', 'Hikmat, Obaid, Wasif'),
(374, 'Hikmat', 0, 0, 'FIFA', 350, 'Haris Noori', ''),
(104, 'Kashif', 0, 0, 'PUBG', 600, 'Haris Noori', 'Faizan'),
(251, 'Haris', 0, 3348335580, 'COD', 1500, 'Haris Noori', 'Haris, Sayed, Rashid, Ihsan'),
(859, 'Kushhal', 0, 0, 'DOTA', 1500, 'Abdul Wasey', ''),
(459, 'Abdul Rehman', 0, 3369473744, 'Tekken', 350, 'Haris Noori', ''),
(352, 'Ahmed Raza', 0, 3126649846, 'CS-GO', 1500, 'Haris Noori', ''),
(195, 'Tahawa ihsan', 0, 3066206308, 'Tekken', 350, 'Haris Noori', ''),
(224, 'Rana Rehan', 0, 3013106193, 'NFS', 350, 'Haris Noori', ''),
(332, 'Haris ', 0, 3339641256, 'FIFA', 350, 'Haris Noori', ''),
(133, 'Bashir Ahmed', 0, 3024168500, 'FIFA', 350, 'Abdul Wasey', ''),
(999, 'Akram', 0, 3089320326, 'Tekken', 350, 'Abdul Wasey', ''),
(869, 'Ahmed Zuabair', 0, 300576283, 'COD', 1500, 'Abdul Wasey', 'Turab, Muheeb, Yasir, Naveed'),
(885, 'Meelad Khan', 0, 3339505112, 'DOTA', 1500, 'Haris Noori', 'Naveed, Kamran, Abdullah, Saad'),
(546, 'Zohaib Khalid', 0, 3340963900, 'FIFA', 350, 'Haris Noori', ''),
(844, 'Usama AHmed', 0, 3142299866, 'Tekken', 350, 'Haris Noori', ''),
(101, 'Laiq Khan', 0, 3028841242, 'COD', 1500, 'Haris Noori', 'Usama, Waseem, Amir, Bilal'),
(16, 'Muhammad Shayan', 0, 3337269797, 'PUBG', 1200, 'Haris Noori', 'Haroon, Arbaz, Saad'),
(335, 'Abdullah', 0, 3161717826, 'Chess 1 Player', 200, 'Haris Noori', ''),
(306, 'Asad', 0, 3130996881, 'Ludo 1 Player', 200, 'Haris Noori', ''),
(131, 'Yasir', 0, 3028758775, 'Tekken', 350, 'Haris Noori', ''),
(953, 'Zain', 0, 3028758775, 'FIFA', 350, 'Haris Noori', ''),
(272, 'Waseef ', 0, 3007148844, 'DOTA', 1500, 'Haris Noori', ''),
(788, 'Majid Shabbir', 0, 3349092511, 'Tekken', 350, 'Haris Noori', ''),
(979, 'Muneeb', 0, 3060574386, 'FIFA', 350, 'Haris Noori', ''),
(76, 'M.Javed', 0, 3060574386, 'FIFA', 350, 'Haris Noori', ''),
(226, 'Shah Husain', 0, 3419212992, 'Tekken', 0, 'Haris Noori', ''),
(146, 'Yusuf', 0, 3354304540, 'PUBG', 1200, 'Haris Noori', 'Roman, Qazi, Najam'),
(448, 'Raza Ali', 0, 3471526826, 'PUBG', 1200, 'Haris Noori', 'Abdullah, ASJID'),
(692, 'Mateen Rehan', 0, 0, 'NFS', 350, 'Haris Noori', ''),
(401, 'Usama', 0, 0, 'COD', 0, 'Haris Noori', 'Hamza, Abdullah, Haroon, Rustom'),
(217, 'AK Afridi', 0, 3439997968, 'Ludo 1 Player', 200, 'M.Ahsan', ''),
(551, 'AK AFridi', 0, 3439997968, 'Ludo 1 Player', 200, 'Haris Noori', ''),
(81, 'Ehsan Afridi', 0, 3439997968, 'Ludo 1 Player', 200, 'Haris Noori', ''),
(262, 'Shahzad', 0, 3469376929, 'Tekken', 350, 'Haris Noori', ''),
(609, 'Usama', 0, 3316360353, 'Tekken', 350, 'M.Ahsan', ''),
(452, 'Basit', 0, 3029162705, 'Tekken', 350, 'M.Ahsan', ''),
(364, 'Qasim', 0, 0, 'Visitor', 100, 'M.Ahsan', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD UNIQUE KEY `admin_name` (`admin_name`);

--
-- Indexes for table `operators`
--
ALTER TABLE `operators`
  ADD UNIQUE KEY `operator_name` (`operator_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
