-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2025 at 06:52 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `katni_mail_detail`
--

-- --------------------------------------------------------

--
-- Table structure for table `alp_name`
--

CREATE TABLE `alp_name` (
  `Sno` int(10) NOT NULL,
  `crew_id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `lp_name`
--

CREATE TABLE `lp_name` (
  `Sno` int(10) NOT NULL,
  `crew_id` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Designation` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lp_name`
--

INSERT INTO `lp_name` (`Sno`, `crew_id`, `Name`, `Designation`, `status`) VALUES
(4, 'KTE1019', 'K. C. MANESHWAR', 'LPM', ''),
(5, 'KTE1045', 'R.D.VISHWAKARMA', 'LPM', ''),
(6, 'KTE1531', 'A.K.CHAUDHARI', 'LPM', ''),
(7, 'KTE1900', 'KARAN SINGH IC', 'LPM', ''),
(8, 'KTE1734', 'S. N. MAURYA', 'LPM', ''),
(9, 'KTE1420', 'GANESH PANDEY A', 'LPM', ''),
(10, 'KTE1809', 'MRITYUNJAY MISHRA', 'LPM', ''),
(11, 'KTE1285', 'MUKESH DIXIT', 'LPM', ''),
(12, 'KTE1376', 'R. K. SRIVASTAV II', 'LPM', ''),
(13, 'KTE1460', 'RAM BALI YADAV', 'LPM', ''),
(14, 'KTE1422', 'RAMESH KUMAR SINGH', 'LPM', ''),
(15, 'KTE1336', 'S.K.TIWARI', 'LPM', ''),
(16, 'KTE1273', 'SUDHANSHU BHARDWAJ', 'LPM', ''),
(17, 'KTE1338', 'SANJAY KR. SHRIVASTAVA', 'LPM', ''),
(18, 'KTE1603', 'AMAR NAG', 'LPM', ''),
(19, 'KTE1796', 'A. K. YADAV  A', 'LPM', ''),
(20, 'KTE1841', 'CHANDAN SINGH AC', 'LPM', ''),
(21, 'KTE1333', 'DINESH GAHLOT', 'LPM', ''),
(22, 'KTE1048', 'P.C.VERMA', 'LPM', ''),
(23, 'KTE1672', 'B.K. RAI', 'LPM', ''),
(24, 'KTE1030', 'V.B.TRIPATHI', 'LPM', ''),
(25, 'KTE1601', 'U.B.TRIPATHI  A', 'LPM', ''),
(26, 'KTE1664', 'RAJESH KUMAR YADAV', 'LPM', ''),
(27, 'KTE1736', 'A K DWIVEDI', 'LPM', ''),
(28, 'KTE1362', 'DINESH KUMAR', 'LPM', ''),
(29, 'KTE1822', 'RAM SHARAN', 'LPM', ''),
(30, 'KTE1275', 'R.K. SRIVASTAVA I', 'LPM', ''),
(31, 'KTE1332', 'C.S.RANA', 'LPM', ''),
(32, 'KTE1196', 'SUNDAR LAL KOL', 'LPM', ''),
(33, 'KTE1429', 'A.K.SINGH', 'LPM', ''),
(34, 'KTE1314', 'A.K.LAHARIA', 'LPM', ''),
(35, 'KTE1653', 'KAMLESH KUMAR  A', 'LPM', ''),
(36, 'KTE1050', 'P.R.P.GUPTA', 'LPM', ''),
(37, 'KTE1317', 'RAJAN PASWAN', 'LPM', ''),
(38, 'KTE1753', 'RAKESH CHOUDHARY', 'LPM', ''),
(39, 'KTE1168', 'HARDEO PRASAD', 'LPM', ''),
(40, 'KTE1326', 'K. L. KORI', 'LPM', ''),
(41, 'KTE1115', 'S.C.YADAV', 'LPM', ''),
(42, 'KTE1526', 'RAKESH PANDEY', 'LPM', ''),
(43, 'KTE1547', 'D.K.TRIPATHI', 'LPM', ''),
(44, 'KTE1565', 'SORAN SINGH', 'LPM', ''),
(45, 'KTE2013', 'RAJESHWAR PRASAD', 'LPM', ''),
(46, 'KTE1670', 'SANJAY KUMAR G', 'LPM', ''),
(47, 'KTE1742', 'RAM PRAKASH', 'LPM', ''),
(48, 'KTE1172', 'A.K.SHRIVASTAVA', 'LPM', ''),
(49, 'KTE1669', 'KAMLESH SONI  A', 'LPM', ''),
(50, 'KTE2123', 'M. BODRA ', 'LPG', ''),
(51, 'KTE2134', 'RAJESH KUMAR SINHA', 'LPG', ''),
(52, 'KTE2138', 'ANIL SHARMA ', 'LPG', ''),
(53, 'KTE2059', 'S N PRAJAPATI', 'LPG', ''),
(54, 'KTE2057', 'MD AJMAL KHAN ', 'LPG', ''),
(55, 'KTE2141', 'R P YADAV ', 'LPG', ''),
(56, 'KTE2058', 'SAKIR ALI ', 'LPG', ''),
(57, 'KTE2120', 'Raj K VISHWAKARMA ', 'LPG', ''),
(58, 'KTE2130', 'SN YADAV ', 'LPG', ''),
(59, 'KTE2163', 'LAEEK RAFIQ', 'LPG', ''),
(60, 'KTE2136', 'MAHESH PD PANDEY ', 'LPG', ''),
(61, 'KTE2156', 'MITHILESH MISHRA', 'LPG', ''),
(62, 'KTE2140', 'VIVEK DWIVEDI ', 'LPG', ''),
(63, 'KTE2004', 'C P MAURYA', 'LPG', ''),
(64, 'KTE2135', 'KUMAR RAJESH', 'LPG', ''),
(65, 'KTE2144', 'U S YADAV ', 'LPG', ''),
(66, 'KTE2082', 'PRAKASH RAMKISHOR ', 'LPG', ''),
(67, 'KTE1487', 'RAJMOHAN', 'LPG', ''),
(68, 'KTE2003', 'VIJAY BHANDARI ', 'LPG', ''),
(69, 'KTE2147', 'S.L.YADAVA ', 'LPG', ''),
(70, 'KTE2146', 'HERMAN JOSEPH', 'LPG', ''),
(71, 'KTE2002', 'RAM KRIPAL YADAV', 'LPG', ''),
(72, 'KTE2142', 'Y S SINGRAUR', 'LPG', ''),
(73, 'KTE2125', 'KULDEEP SINGH', 'LPG', ''),
(74, 'KTE2121', 'ARUN KR PATEL', 'LPG', ''),
(75, 'KTE2069', 'SUNIL  SRIVASTVA', 'LPG', ''),
(76, 'KTE2070', 'R S VISHWAKARMA', 'LPG', ''),
(77, 'KTE2145', 'A K GUPTA', 'LPG', ''),
(78, 'KTE1416', 'B L MEENA', 'LPG', ''),
(79, 'KTE2143', 'BHARAT PRASAD ', 'LPG', ''),
(80, 'KTE2164', 'MOHAN LAL', 'LPG', ''),
(81, 'KTE2139', 'AJAY ROY', 'LPG', ''),
(82, 'KTE2071', 'C R MEENA', 'LPP', ''),
(83, 'KTE1889', 'K R MEENA', 'LPP', ''),
(84, 'KTE1885', 'S K MAURYA', 'LPP', ''),
(85, 'KTE1871', 'SOMNATH', 'LPP', ''),
(86, 'KTE2115', 'MANOJ NAMDEO', 'LPP', ''),
(87, 'KTE2114', 'MD ANSAR', 'LPP', ''),
(88, 'KTE1831', 'A P MAURYA', 'LPP', ''),
(89, 'KTE1845', 'P S PATEL', 'LPP', ''),
(90, 'KTE1830', 'ANSHUMAN P', 'LPP', ''),
(91, 'KTE1824', 'S S MEENA', 'LPP', ''),
(92, 'KTE2088', 'SURESH  SINGH ', 'LPP', ''),
(93, 'KTE1836', 'SARVESH SINGH', 'LPP', ''),
(94, 'KTE1886', 'H P KUSHWAHA', 'LPP', ''),
(95, 'KTE1785', 'SUBHASH CHANDRA C', 'LPP', ''),
(96, 'KTE2087', 'M K SHARMA', 'LPP', ''),
(97, 'KTE2089', 'SHASHIKANT TIWARI', 'LPP', ''),
(98, 'KTE2081', 'ASHOK  KHARWAR', 'LPP', ''),
(99, 'KTE2091', 'SATISH SHRIVASTAV', 'LPP', ''),
(100, 'KTE1888', 'D K GAUTAM', 'LPP', ''),
(101, 'KTE1788', 'ASHOK THAKUR', 'LPP', ''),
(102, 'KTE2118', 'ANAND SWAROOP', 'LPP', ''),
(103, 'KTE1786', 'ARUN GARHWAL', 'LPP', ''),
(104, 'KTE2093', 'RAM KISHORE', 'LPP', ''),
(105, 'KTE1825', 'VS MEENA', 'LPP', ''),
(106, '', '', '', ''),
(107, '', '', '', ''),
(108, '', '', '', ''),
(109, '', '', '', ''),
(110, '', '', '', ''),
(111, '', '', '', ''),
(112, '', '', '', ''),
(113, '', '', '', ''),
(114, 'KTE1877', 'ABHINAV MISHRA   ', 'ALP', ''),
(115, 'KTE2157', 'ABHISHEK SHARMA', 'SALP', ''),
(116, 'KTE2101', 'ABHISHEK TIWARI', 'SALP', ''),
(117, 'KTE1939', 'ADITYA KU. VERMA', 'SALP', ''),
(118, 'KTE2094', 'AJAY SINGH ', 'SALP', ''),
(119, 'KTE2128', 'AJAY SINGH R', 'SALP', ''),
(120, 'KTE2068', 'AJAY TYAGI ', 'SALP', ''),
(121, 'KTE2054', 'ANIL KUMAR SEN ', 'SALP', ''),
(122, 'KTE2102', 'ANKUSH AGRAWAL', 'SALP', ''),
(123, 'KTE1968', 'ANOOP KUMAR RAWAT', 'SALP', ''),
(124, 'KTE2020', 'ARBIND KUSHWAHA', 'SALP', ''),
(125, 'KTE1997', 'ARVIND  PANDEY ', 'ALP', ''),
(126, 'KTE2067', 'ASHEESH KU PRAJAPATI', 'SALP', ''),
(127, 'KTE2074', 'ASHISH VERMA ', 'SALP', ''),
(128, 'KTE1941', 'ASHKAND KUMAR', 'ALP', ''),
(129, 'KTE2096', 'AVDHESH BHADORIYA', 'SALP', ''),
(130, 'KTE2108', 'B. KUMAR MEENA', 'ALP', ''),
(131, 'KTE2152', 'BHOLE SHANKAR', 'SALP', ''),
(132, 'KTE2104', 'BIKESH KUMAR', 'SALP', ''),
(133, 'KTE2112', 'CHETAN JANGID', 'SALP', ''),
(134, 'KTE1863', 'DEEPAK RAJAK ', 'ALP', ''),
(135, 'KTE2159', 'DEEPAK MEGHWAL', 'SALP', ''),
(136, 'KTE1891', 'DEEPU KR. SINGH', 'ALP', ''),
(137, 'KTE1958', 'DHANOJ  SINGH ', 'ALP', ''),
(138, 'KTE2055', 'DHARAMBEER SINGH', 'SALP', ''),
(139, 'KTE2098', 'DHARMENDRA LODHI', 'SALP', ''),
(140, 'KTE2033', 'DHIRAJ KUMAR', 'SALP', ''),
(141, 'KTE2154', 'DHYANENDRA PETHARI', 'SALP', ''),
(142, 'KTE2161', 'DIPAK KUMAR BANSHIWAL', 'SALP', ''),
(143, 'KTE1996', 'DURGA PRASAD THAKURIA', 'SALP', ''),
(144, 'KTE2158', 'GHANSHYAM MEGHWAL', 'SALP', ''),
(145, 'KTE2041', 'HARIBANS KR. SHRIVASH', 'SALP', ''),
(146, 'KTE2017', 'HARISH CHANDRA', 'SALP', ''),
(147, 'KTE2085', 'HARSHIT NARAYAN ', 'SALP', ''),
(148, 'KTE2162', 'HIMANSHU SAHU', 'SALP', ''),
(149, 'KTE2150', 'HIRENDRA SHEKHAR', 'SALP', ''),
(150, 'KTE2153', 'HITESH GAUTAM', 'SALP', ''),
(151, 'KTE1972', 'IZHAR SHEIKH', 'SALP', ''),
(152, 'KTE2027', 'JAYKUMAR VISHWAKARMA', 'SALP', ''),
(153, 'KTE2099', 'JEETENDRA SINGH LODHA', 'SALP', ''),
(154, 'KTE1959', 'JITENDRA SINGH', 'ALP', ''),
(155, 'KTE2086', 'K.B. KUSHWAHA ', 'SALP', ''),
(156, 'KTE2032', 'KANHAIYA YADAV', 'ALP', ''),
(157, 'KTE1901', 'KRISN KUMAR', 'SALP', ''),
(158, 'KTE1934', 'KULDEEP MAURYA ', 'ALP', ''),
(159, 'KTE2023', 'KUMAR SUNNY RAJ ', 'SALP', ''),
(160, 'KTE2034', 'LAKHAN LAL MEENA', 'SALP', ''),
(161, 'KTE2148', 'MAHENDER SINGH', 'SALP', ''),
(162, 'KTE2042', 'MANEESH GUPTA', 'SALP', ''),
(163, 'KTE2106', 'MANISH SHARMA', 'SALP', ''),
(164, 'KTE2039', 'MD RASHID', 'SALP', ''),
(165, 'KTE2126', 'MUKESH BAIRWA', 'SALP', ''),
(166, 'KTE2149', 'MUKESH KUMAR VERMA', 'SALP', ''),
(167, 'KTE2110', 'NAVEEN KISHOR', 'SALP', ''),
(168, 'KTE2072', 'NAVEEN SAMADHIYA', 'SALP', ''),
(169, 'KTE2166', 'NITISH TAMRAKAR', 'SALP', ''),
(170, 'KTE2129', 'OMVEER BALODA ', 'SALP', ''),
(171, 'KTE2083', 'OMVEER SINGH IC', 'SALP', ''),
(172, 'KTE1937', 'PRADEEP KUMAR BUNKAR', 'SALP', ''),
(173, 'KTE2117', 'PRADEEP YADAV ', 'SALP', ''),
(174, 'KTE2165', 'PRASHANT II', 'SALP', ''),
(175, 'KTE2160', 'PRAVESH KUMAR', 'SALP', ''),
(176, 'KTE2113', 'PRAVIN  JANGID', 'SALP', ''),
(177, 'KTE2132', 'PREETAM C JAT', 'SALP', ''),
(178, 'KTE2116', 'RAHUL CHAKRAWARTY', 'SALP', ''),
(179, 'KTE1971', 'RAHUL RANJAN', 'ALP', ''),
(180, 'KTE2111', 'RAHUL SONI ', 'SALP', ''),
(181, 'KTE2056', 'RAJAT KUSHWAH', 'SALP', ''),
(182, 'KTE1975', 'RAMAKANT RAI ', 'ALP', ''),
(183, 'KTE2151', 'RAMAN JANGID', 'SALP', ''),
(184, 'KTE2109', 'RAVI KUMAR KURMI', 'SALP', ''),
(185, 'KTE1945', 'RAVI PRAKASH MAURYA', 'ALP', ''),
(186, 'KTE2155', 'ROHIT SHARMA', 'SALP', ''),
(187, 'KTE2105', 'RUPALI CHAURASIYA', 'SALP', ''),
(188, 'KTE2046', 'SAGAR KAPOOR', 'SALP', ''),
(189, 'KTE1965', 'SANJAY NAMDEO', 'SALP', ''),
(190, 'KTE1951', 'SAROJ KUMAR A', 'ALP', ''),
(191, 'KTE1899', 'SATISH KUMAR KP', 'SALP', ''),
(192, 'KTE2131', 'SATYENDRA SINGH', 'SALP', ''),
(193, 'KTE1933', 'SHIV PRAKASH', 'ALP', ''),
(194, 'KTE1936', 'SHIVAM KUSHWAHA', 'ALP', ''),
(195, 'KTE2045', 'SHIVESH S PARMAR', 'SALP', ''),
(196, 'KTE2095', 'SHUBHAM CHOUDHARY', 'SALP', ''),
(197, 'KTE2008', 'SHUBHAM SHILPKAR', 'SALP', ''),
(198, 'KTE2009', 'SOHAN LAL', 'SALP', ''),
(199, 'KTE2025', 'SUDEESH KAURAV', 'SALP', ''),
(200, 'KTE1952', 'SUDHEER KUMAR ', 'SALP', ''),
(201, 'KTE1957', 'SUMAN KUMAR', 'ALP', ''),
(202, 'KTE2133', 'SUNEEL  DOHARE', 'SALP', ''),
(203, 'KTE2047', 'TARUN DUBEY', 'SALP', ''),
(204, 'KTE2127', 'TARUN GURJAR', 'ALP', ''),
(205, 'KTE2022', 'T N KESHRI', 'SALP', ''),
(206, 'KTE1992', 'UDAY RAJ ', 'SALP', ''),
(207, 'KTE1969', 'V N MISHRA', 'SALP', ''),
(208, 'KTE2021', 'VIKASH KUMAR U ', 'SALP', ''),
(209, 'KTE2097', 'VIKRAM DANDOTIYA', 'SALP', ''),
(210, 'KTE1948', 'YASHVIR YADAV', 'ALP', ''),
(211, 'KTE1973', 'ZAMEER AHMED', 'SALP', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alp_name`
--
ALTER TABLE `alp_name`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `lp_name`
--
ALTER TABLE `lp_name`
  ADD PRIMARY KEY (`Sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alp_name`
--
ALTER TABLE `alp_name`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lp_name`
--
ALTER TABLE `lp_name`
  MODIFY `Sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
