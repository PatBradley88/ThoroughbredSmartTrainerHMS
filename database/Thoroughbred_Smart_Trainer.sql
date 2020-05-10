-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 10, 2020 at 04:24 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Thoroughbred Smart Trainer`
--

-- --------------------------------------------------------

--
-- Table structure for table `age_cat`
--

CREATE TABLE `age_cat` (
  `age_cat_id` int(11) NOT NULL,
  `age_cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `age_cat`
--

INSERT INTO `age_cat` (`age_cat_id`, `age_cat`) VALUES
(1, '2yo'),
(2, '2yo c'),
(3, '2yo f'),
(4, '2yo c&f'),
(5, '2yo c&g'),
(6, '3yo'),
(7, '3yo c'),
(8, '3yo f'),
(9, '3yo c&f'),
(10, '3yo+'),
(11, '3yo+ f'),
(12, '3yo c&g'),
(13, '3yo+ c&g'),
(14, '4yo+'),
(15, '4yo+ f');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_type`
--

CREATE TABLE `appointment_type` (
  `appoint_id` int(11) NOT NULL,
  `appoint_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_type`
--

INSERT INTO `appointment_type` (`appoint_id`, `appoint_type`) VALUES
(1, 'Physiotherapy'),
(2, 'Dentist'),
(3, 'Chiropractic Therapy');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(3) NOT NULL,
  `cat_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_type`) VALUES
(1, 'Colt'),
(2, 'Filly'),
(3, 'Horse'),
(4, 'Mare'),
(5, 'Gelding');

-- --------------------------------------------------------

--
-- Table structure for table `farrier`
--

CREATE TABLE `farrier` (
  `farrier_id` int(11) NOT NULL,
  `farrier_horse_id` int(11) NOT NULL,
  `farrier_name` varchar(255) NOT NULL,
  `farrier_note` text NOT NULL,
  `farrier_note_poster` int(11) NOT NULL,
  `farrier_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `farrier`
--

INSERT INTO `farrier` (`farrier_id`, `farrier_horse_id`, `farrier_name`, `farrier_note`, `farrier_note_poster`, `farrier_date`) VALUES
(1, 24, 'Noah Bradley', 'Racing plates replaced and hoof clipped.', 5, '2020-05-04'),
(2, 1, 'Finn Bradley', 'Racing plates inspected and replaced as worn. Hoof in good condition.', 7, '2020-05-04'),
(3, 25, 'Finn Bradley', 'Racing plates inspected and replaced as worn. Hoof in good condition.', 5, '2020-05-04'),
(4, 4, 'Mr. Finn Bradley', 'Racing plates inspected and replaced as worn. Hoof\'s in good condition.', 5, '2020-05-04'),
(6, 40, 'Mr. Finn Bradley', 'Racing plates inspected and replaced as worn. Hoof\'s in good condition.', 7, '2020-05-04');

-- --------------------------------------------------------

--
-- Table structure for table `horses`
--

CREATE TABLE `horses` (
  `horse_id` int(3) NOT NULL,
  `horse_name` varchar(255) NOT NULL,
  `horse_image` varchar(500) NOT NULL,
  `category_id` int(11) NOT NULL,
  `dateOfBirth` date NOT NULL,
  `colour` varchar(30) NOT NULL,
  `passport_no` varchar(20) NOT NULL,
  `sire` varchar(50) NOT NULL,
  `dam` varchar(50) NOT NULL,
  `horse_owner_id` int(4) NOT NULL,
  `breeder` varchar(100) NOT NULL,
  `received_from` varchar(255) NOT NULL,
  `training_status` varchar(20) NOT NULL,
  `added_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `horses`
--

INSERT INTO `horses` (`horse_id`, `horse_name`, `horse_image`, `category_id`, `dateOfBirth`, `colour`, `passport_no`, `sire`, `dam`, `horse_owner_id`, `breeder`, `received_from`, `training_status`, `added_date`) VALUES
(1, 'Miss Snossyboots', 'images/MissSnossyboots.jpg', 2, '2014-04-17', 'Chestnut', '123456789x', 'Rip Van Winkle', 'Nicks Nikita', 2, 'N Hartery', 'Breeder', 'In Training', '2020-05-03'),
(2, 'Arcanears', 'images/arcanears.jpg', 1, '2015-04-07', 'Bay', '987654321y', 'Arcano', 'Ondeafears', 3, 'Mrs. Carol Roper', 'Breeder', 'In Training', '2020-04-18'),
(3, 'Roman Turbo', 'images/RomanTurbo.jpg', 1, '2017-03-23', 'Bay', '246813579z', 'Holy Roman Emperor', 'Swish', 1, 'Swish Syndicate', 'Sales', 'In Training', '0000-00-00'),
(4, 'Simsir', 'images/Simsir.jpg', 1, '2016-03-18', 'Bay', '35261789z', 'Zoffany', 'Simawa', 4, 'Hh Aga Khan Stud S C', 'Breeder', 'In Training', '2020-04-18'),
(5, 'Sinawann', 'images/sinawann.jpg', 1, '2017-04-01', 'Bay', '123456789p', 'Kingman', 'Simawa', 4, 'H H The Aga Khans Studs S C', 'Breeder', 'In Training', '2020-04-18'),
(6, 'Sampers Seven', 'images/sampersSeven.jpg', 2, '2017-02-27', 'Bay', '246813579m', 'Anjaal', 'Sampers', 2, 'N Hartery', 'Breeder', 'In Training', '2020-05-03'),
(24, 'Ridenza', 'images/Ridenza.jpg', 2, '2017-01-29', 'Brown', '3468279N', 'Sea The Stars (IRE)', 'Raydara (IRE)', 4, 'HH Aga Khans Stud', 'Breeder', 'In Training', '2020-04-15'),
(25, 'Sendmylovetoyou', 'images/Sendmylovetoyou.jpg', 2, '2016-04-24', 'Bay', '7589343z', 'Invincible Spirit', 'Sendmylovetorose', 5, 'M Enright', 'Breeder', 'In Training', '2020-04-16'),
(26, 'Balefire', 'images/Balefire2.jpg', 1, '2016-04-06', 'Bay', '5893467y', 'Shamardal (USA)', 'Patent Joy (IRE)', 6, 'Godolphin', 'Breeder', 'In Training', '2020-04-18'),
(29, 'Zarzyni', 'images/Zarzyni.jpg', 5, '2017-02-03', 'Bay', '7777777p', 'Siyouni (FR)', 'Zunera (IRE)', 4, 'HH Aga Khans Stud', 'Breeder', 'In Training', '2020-04-16'),
(31, 'Pearlman', 'images/Pearlman.jpg', 1, '2016-04-30', 'Chestnut', '8349379c', 'Nathaniel (IRE)', 'Lurina (IRE)', 6, 'Godolphin', 'Owner', 'In Training', '2020-04-18'),
(32, 'Tirmizi', 'images/Tirmizi.jpg', 5, '2013-03-13', 'Bay', '8264937b', 'Sea The Stars (IRE)', 'Timabiyra (IRE)', 7, 'HH Aga Khans Stud', 'Owner', 'In Training', '2020-04-19'),
(33, 'Gougane Barra', 'images/Gougane-Barra.jpg', 5, '2014-03-30', 'Brown', '1567934n', 'First Defence (USA)', 'Beiramar (IRE)', 7, 'St George Farm', 'Owner', 'In Training', '2020-04-21'),
(37, 'Hamariyna', 'images/Hamariyna.jpg', 2, '2016-02-13', 'Bay', '8256497x', 'Sea The Moon (GER)', 'Hanakiyya', 4, 'HH Aga Khans Stud', 'Breeder', 'In Training', '2020-04-21'),
(39, 'Ahlan Bil Zain', 'images/Ahlan-Bil-Zain.jpg', 5, '2014-05-15', 'Brown', '9764315p', 'Elusive City (USA)', 'Fall View (GB)', 10, 'E A R L Haras Saint James', 'Breeder', 'In Training', '2020-04-26'),
(40, 'Mr. Ed', 'images/camelot.jpg', 3, '2014-05-12', 'Brown', '82564379v', 'Sea The Stars (IRE)', 'Patent Joy (IRE)', 12, 'HH Aga Khan\'s Stud', 'Breeder', 'In Training', '2020-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `misc_apps`
--

CREATE TABLE `misc_apps` (
  `misc_id` int(11) NOT NULL,
  `misc_horse_id` int(11) NOT NULL,
  `therapy_type` int(11) NOT NULL,
  `therapist_name` varchar(255) NOT NULL,
  `misc_note` varchar(255) NOT NULL,
  `misc_note_poster` int(11) NOT NULL,
  `date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `misc_apps`
--

INSERT INTO `misc_apps` (`misc_id`, `misc_horse_id`, `therapy_type`, `therapist_name`, `misc_note`, `misc_note_poster`, `date_added`) VALUES
(1, 3, 1, 'Finn Bradley', 'Full Massage', 7, '2020-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `owners`
--

CREATE TABLE `owners` (
  `owner_id` int(4) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `address3` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactNo` varchar(15) NOT NULL,
  `owner_colours` varchar(255) NOT NULL,
  `horses` int(4) NOT NULL,
  `training_status` varchar(20) NOT NULL,
  `added_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owners`
--

INSERT INTO `owners` (`owner_id`, `name`, `address1`, `address2`, `address3`, `email`, `contactNo`, `owner_colours`, `horses`, `training_status`, `added_date`) VALUES
(1, 'Sammy Hon Kit Ma', '123 Fake Street', 'Hong Kong', 'China', 'shonkitma@gmail.com', '085 1234567', 'images/ownerColours/HonKitMa.jpg', 1, 'Active', '2020-04-20'),
(2, 'N Hartery', '321 Fake Street', 'Maynooth', 'Kildare', 'nhartery@yahoo.com', '0871234567', 'images/ownerColours/NHartery.jpg', 2, 'Active', '0000-00-00'),
(3, 'Mrs. Carol Roper', '213 Fake Street', 'Lucan', 'Co. Dublin', 'carol.roper@gmail.com', '086 1234567', 'images/ownerColours/CarolRoper.jpg', 1, 'Active', '2020-04-19'),
(4, 'H H Aga Khan', 'Gilltown Stud', 'Kilcullen', 'Co. Kildare', 'racing@gilltownstud.com', '045 481 216', 'images/ownerColours/AgaKhan.jpg', 4, 'Active', '2020-04-18'),
(5, 'Michael Enright', 'The Lawns', 'Naas', 'Co Kildare', 'm.enright@gmail.com', '083 4568290', 'images/ownerColours/menright.jpg', 1, 'Active', '2020-04-19'),
(6, 'Godolphin', 'Godolphin Ireland', 'Kildangan', 'Co. Kildare', 'racing@godolphin.com', '045 782964', 'images/ownerColours/Godolphin.jpg', 2, 'Active', '0000-00-00'),
(7, 'Paul Rooney', 'House on the Hill', 'Westport', 'Co Mayo', 'paul.rooney@gmail.com', '087 2598741', 'images/ownerColours/PRooney.jpg', 1, 'Active', '2020-04-19'),
(10, 'Richard McNally', 'Kildangan', 'Kildare Town', 'Co Kildare', 'richard.mcnally@gmail.com', '0879876543', 'images/ownerColours/RMcNally.jpg', 0, 'Active', '2020-04-26'),
(12, 'Patrick Bradley', '53 The Green', 'Moyglare Hall', 'Maynooth', 'patrick_bradley1@yahoo.co.uk', '0851328260', 'images/ownerColours/P.Bradley.jpg', 0, 'Active', '2020-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `racecourse`
--

CREATE TABLE `racecourse` (
  `racecourse_id` int(11) NOT NULL,
  `racecourse` varchar(255) NOT NULL,
  `racecourse_country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `racecourse`
--

INSERT INTO `racecourse` (`racecourse_id`, `racecourse`, `racecourse_country_id`) VALUES
(1, 'The Curragh', 1),
(2, 'Naas Racecourse', 1),
(3, 'Leopardstown', 1),
(4, 'Punchestown', 1),
(5, 'Dundalk Stadium', 1),
(6, 'Navan Racecourse', 1),
(7, 'Fairyhouse Racecourse', 1),
(8, 'Gowran Park Racecourse', 1),
(9, 'Thurles Racecourse', 1),
(10, 'Tipperary Racecourse', 1),
(11, 'Galway Racecourse', 1),
(12, 'Clonmel Racecourse', 1),
(13, 'Ascot', 2),
(14, 'Bath', 2),
(15, 'Chester', 2),
(16, 'Epsom Downs', 2),
(17, 'Goodwood', 2),
(18, 'Newmarket', 2),
(19, 'Wolverhampton', 2),
(20, 'York', 2),
(21, 'Chantilly Racecourse,', 3),
(22, 'Longchamp Racecourse', 3),
(23, 'Meydan', 4);

-- --------------------------------------------------------

--
-- Table structure for table `racecourse_country`
--

CREATE TABLE `racecourse_country` (
  `country_id` int(11) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `racecourse_country`
--

INSERT INTO `racecourse_country` (`country_id`, `country`) VALUES
(1, 'Ireland'),
(2, 'England'),
(3, 'France'),
(4, 'Dubai');

-- --------------------------------------------------------

--
-- Table structure for table `races`
--

CREATE TABLE `races` (
  `race_id` int(11) NOT NULL,
  `race_horse_id` int(11) NOT NULL,
  `race_country_id` int(11) NOT NULL,
  `race_racecourse_id` int(11) NOT NULL,
  `race_date` date NOT NULL,
  `race_no` int(11) NOT NULL,
  `race_name` varchar(255) NOT NULL,
  `race_status_id` int(11) NOT NULL,
  `race_distance_id` int(11) NOT NULL,
  `race_age_cat_id` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  `declaration_date` date NOT NULL,
  `finish_pos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `races`
--

INSERT INTO `races` (`race_id`, `race_horse_id`, `race_country_id`, `race_racecourse_id`, `race_date`, `race_no`, `race_name`, `race_status_id`, `race_distance_id`, `race_age_cat_id`, `fee`, `declaration_date`, `finish_pos`) VALUES
(2, 1, 1, 5, '2019-01-24', 1, 'Irishinjuredjockeys.com Rated Race', 5, 8, 14, 500, '2020-01-21', 3),
(3, 4, 4, 23, '2020-02-27', 4, 'District One Residence (Turf)', 4, 6, 14, 10000, '2020-02-24', 1),
(4, 31, 2, 17, '2020-02-01', 5, 'Emirates NBD Priority Banking Handicap', 4, 6, 13, 5000, '2020-01-28', 15),
(5, 29, 1, 8, '2019-06-16', 1, 'Irish Stallion Farms EBF Maiden', 5, 3, 1, 500, '2019-06-13', 1),
(6, 29, 1, 3, '2019-07-25', 4, 'Japan Racing Association Tyros Stakes', 3, 3, 1, 3000, '2019-07-21', 3),
(7, 29, 1, 1, '2019-08-30', 7, 'Round Tower Stakes', 3, 2, 1, 3000, '2019-08-27', 4),
(8, 29, 1, 7, '2019-09-23', 7, 'Ballyhane Blenheim Stakes', 5, 2, 1, 500, '2019-09-20', 3);

-- --------------------------------------------------------

--
-- Table structure for table `race_distance`
--

CREATE TABLE `race_distance` (
  `distance_id` int(11) NOT NULL,
  `race_distance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `race_distance`
--

INSERT INTO `race_distance` (`distance_id`, `race_distance`) VALUES
(1, '5f'),
(2, '6f'),
(3, '7f'),
(4, '1m'),
(5, '1m 1f'),
(6, '1m 2f'),
(7, '1m 3f'),
(8, '1m 4f'),
(9, '1m 6f'),
(10, '2m'),
(11, '2m 1f'),
(12, '2m 3f');

-- --------------------------------------------------------

--
-- Table structure for table `race_status`
--

CREATE TABLE `race_status` (
  `status_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `race_status`
--

INSERT INTO `race_status` (`status_id`, `status`) VALUES
(1, 'Group 1'),
(2, 'Group 2'),
(3, 'Group 3'),
(4, 'Handicap'),
(5, 'Listed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `yardName` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(32) NOT NULL,
  `signUpDate` datetime NOT NULL,
  `profilePic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstName`, `lastName`, `yardName`, `email`, `password`, `signUpDate`, `profilePic`) VALUES
(5, 'NoahBradley', 'Noah', 'Bradley', 'Copperbeechstables', 'Noah@gmail.com', '2ac9cb7dc02b3c0083eb70898e549b63', '2020-02-17 00:00:00', 'assests/images/profile-pics/head_emerald.png'),
(6, 'TeamBradley', 'Team', 'Bradley', 'Bradley@gmail.com', 'Bradley@gmail.com', '2ac9cb7dc02b3c0083eb70898e549b63', '2020-02-17 00:00:00', 'assests/images/profile-pics/head_emerald.png'),
(7, 'PatBradley', 'Patrick', 'Bradley', 'Copperbeechstables', 'Patrick_bradley1@yahoo.co.uk', '2ac9cb7dc02b3c0083eb70898e549b63', '2020-03-02 00:00:00', 'assests/images/profile-pics/head_emerald.png');

-- --------------------------------------------------------

--
-- Table structure for table `vet`
--

CREATE TABLE `vet` (
  `vet_id` int(11) NOT NULL,
  `vet_horse_id` int(11) NOT NULL,
  `vet_name` varchar(255) NOT NULL,
  `vet_note` text NOT NULL,
  `vet_note_poster` int(11) NOT NULL,
  `vet_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vet`
--

INSERT INTO `vet` (`vet_id`, `vet_horse_id`, `vet_name`, `vet_note`, `vet_note_poster`, `vet_date`) VALUES
(1, 5, 'Sinead Bradley', 'Scope', 7, '2020-05-04'),
(2, 5, 'Sinead Bradley', 'Scope', 7, '2020-05-04'),
(3, 4, 'Sinead Bradley', 'Tendon Strain, Rest for 3 days.', 7, '2020-05-04'),
(4, 39, 'Sinead Bradley', 'Scope', 7, '2020-05-04'),
(5, 40, 'Ms. Sinead Bradley', 'Tendon Strain, Rest for 3 days.', 7, '2020-05-04'),
(8, 40, 'Sinead Bradley', 'Scope', 5, '2020-05-04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `age_cat`
--
ALTER TABLE `age_cat`
  ADD PRIMARY KEY (`age_cat_id`);

--
-- Indexes for table `appointment_type`
--
ALTER TABLE `appointment_type`
  ADD PRIMARY KEY (`appoint_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `farrier`
--
ALTER TABLE `farrier`
  ADD PRIMARY KEY (`farrier_id`);

--
-- Indexes for table `horses`
--
ALTER TABLE `horses`
  ADD PRIMARY KEY (`horse_id`);

--
-- Indexes for table `misc_apps`
--
ALTER TABLE `misc_apps`
  ADD PRIMARY KEY (`misc_id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `racecourse`
--
ALTER TABLE `racecourse`
  ADD PRIMARY KEY (`racecourse_id`);

--
-- Indexes for table `racecourse_country`
--
ALTER TABLE `racecourse_country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `races`
--
ALTER TABLE `races`
  ADD PRIMARY KEY (`race_id`);

--
-- Indexes for table `race_distance`
--
ALTER TABLE `race_distance`
  ADD PRIMARY KEY (`distance_id`);

--
-- Indexes for table `race_status`
--
ALTER TABLE `race_status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vet`
--
ALTER TABLE `vet`
  ADD PRIMARY KEY (`vet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `age_cat`
--
ALTER TABLE `age_cat`
  MODIFY `age_cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `appointment_type`
--
ALTER TABLE `appointment_type`
  MODIFY `appoint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `farrier`
--
ALTER TABLE `farrier`
  MODIFY `farrier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `horses`
--
ALTER TABLE `horses`
  MODIFY `horse_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `misc_apps`
--
ALTER TABLE `misc_apps`
  MODIFY `misc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `owner_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `racecourse`
--
ALTER TABLE `racecourse`
  MODIFY `racecourse_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `racecourse_country`
--
ALTER TABLE `racecourse_country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `races`
--
ALTER TABLE `races`
  MODIFY `race_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `race_distance`
--
ALTER TABLE `race_distance`
  MODIFY `distance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `race_status`
--
ALTER TABLE `race_status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vet`
--
ALTER TABLE `vet`
  MODIFY `vet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
