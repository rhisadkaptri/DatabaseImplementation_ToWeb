-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2022 at 02:21 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uassdbl`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `jlh_tempat` ()  begin
select count(*) from tempat_wisata;
end$$

--
-- Functions
--
CREATE DEFINER=`root`@`localhost` FUNCTION `namawisata` (`tempat_wisata` VARCHAR(30)) RETURNS VARCHAR(30) CHARSET latin1 begin
return (select CONCAT_WS(' | ',nama,lokasi,tanggal_jadi) from tempat_wisata where nama=tempat_wisata);
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Stand-in structure for view `a`
-- (See below for the actual view)
--
CREATE TABLE `a` (
`NamaTempat` varchar(50)
,`Lokasi` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `description` text NOT NULL,
  `date_time` datetime NOT NULL,
  `user` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`description`, `date_time`, `user`) VALUES
('Pengubahan pada id=3', '2021-12-19 17:57:53', 'root@localhost'),
('Pengubahan pada id=9', '2021-12-19 19:39:22', 'root@localhost'),
('Pengubahan pada id=9', '2021-12-19 19:39:41', 'root@localhost'),
('Pengubahan pada id=9', '2021-12-19 19:51:46', 'root@localhost');

-- --------------------------------------------------------

--
-- Stand-in structure for view `sumatera_utara`
-- (See below for the actual view)
--
CREATE TABLE `sumatera_utara` (
`NamaTempat` varchar(50)
,`Lokasi` varchar(50)
);

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata`
--

CREATE TABLE `tempat_wisata` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL,
  `rate` enum('1','2','3','4','5') NOT NULL,
  `tanggal_jadi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`id`, `nama`, `lokasi`, `rate`, `tanggal_jadi`) VALUES
(1, 'Danau Toba', 'Sumatera Utara', '5', '1901-06-01'),
(2, 'Air terjun Sipiso-piso', 'Berastagi', '4', '1995-12-09'),
(3, 'Bukit Gajah Bobok', 'Sumatera Utara', '5', '1960-12-12'),
(8, 'Aek Sijorni', 'Padang Sidimpuan', '4', '2021-12-30'),
(9, 'Mikey Holiday', 'Brastagi', '5', '1990-12-14');

--
-- Triggers `tempat_wisata`
--
DELIMITER $$
CREATE TRIGGER `update_log` AFTER UPDATE ON `tempat_wisata` FOR EACH ROW begin
insert into log values(concat('Pengubahan pada id=', NEW.id), NOW(), USER());
end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) COLLATE utf8_bin NOT NULL,
  `username` varchar(30) COLLATE utf8_bin NOT NULL,
  `password` varchar(30) COLLATE utf8_bin NOT NULL,
  `level` enum('Admin','User','','') COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `password`, `level`) VALUES
('Rhisa Adika Putri', 'admin', '123', 'Admin'),
('Rhisa Adika', 'user', '123', 'User');

-- --------------------------------------------------------

--
-- Structure for view `a`
--
DROP TABLE IF EXISTS `a`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `a`  AS  select `tempat_wisata`.`nama` AS `NamaTempat`,`tempat_wisata`.`lokasi` AS `Lokasi` from `tempat_wisata` where `tempat_wisata`.`rate` = '5' ;

-- --------------------------------------------------------

--
-- Structure for view `sumatera_utara`
--
DROP TABLE IF EXISTS `sumatera_utara`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `sumatera_utara`  AS  select `tempat_wisata`.`nama` AS `NamaTempat`,`tempat_wisata`.`lokasi` AS `Lokasi` from `tempat_wisata` where `tempat_wisata`.`lokasi` = 'Sumatera Utara' ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `tempat_wisata` ADD FULLTEXT KEY `lokasi` (`lokasi`);
ALTER TABLE `tempat_wisata` ADD FULLTEXT KEY `lokasi_2` (`lokasi`);
ALTER TABLE `tempat_wisata` ADD FULLTEXT KEY `lokasi_3` (`lokasi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
