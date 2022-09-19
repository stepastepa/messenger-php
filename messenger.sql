-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 19, 2022 at 07:30 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `messenger`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `avatarlink` varchar(255) NOT NULL,
  `team` varchar(50) NOT NULL,
  `job` varchar(50) NOT NULL,
  `group` tinyint(1) NOT NULL,
  `favorite` tinyint(1) NOT NULL,
  `online` tinyint(1) NOT NULL,
  `donotdisturb` tinyint(1) NOT NULL,
  `newmessages` int(50) NOT NULL,
  `lastactive` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `avatarlink`, `team`, `job`, `group`, `favorite`, `online`, `donotdisturb`, `newmessages`, `lastactive`) VALUES
(1, 'Nila', 'Hedvig', 'https://stepastepa.github.io/messenger/images/avatars/user-3.jpeg', 'Design', 'Intern', 0, 0, 1, 0, 5, '2022-09-19 07:13:10'),
(2, 'Dove', 'Sang-Hun', 'https://stepastepa.github.io/messenger/images/avatars/user-14.jpeg', 'Production', 'Intern', 0, 0, 0, 0, 39, '2022-09-19 07:53:08'),
(3, 'Eadwig', 'Flurf', '', 'Design', 'Senior', 0, 1, 1, 0, 8, '2022-09-19 07:56:18'),
(4, 'Angelia', 'Giustina', 'https://stepastepa.github.io/messenger/images/avatars/user-24.jpeg', 'Marketing', 'Team Lead', 0, 0, 0, 1, 0, '2022-09-19 07:58:56'),
(5, 'Zaria', 'Lesly', 'https://stepastepa.github.io/messenger/images/avatars/user-10.jpeg', 'Design', 'Team Lead', 0, 0, 0, 1, 16, '2022-09-19 08:00:50'),
(6, 'Berard', 'Morna', 'https://stepastepa.github.io/messenger/images/avatars/user-12.jpeg', 'Design', '', 0, 1, 0, 0, 4, '2022-09-19 08:02:42'),
(7, 'Production', 'Team', '', 'Production', '', 1, 0, 0, 0, 0, '2022-09-19 09:28:44'),
(8, 'Design', 'Team', '', 'Design', '', 1, 0, 1, 0, 0, '2022-09-19 09:30:49'),
(9, 'Research', 'Team', '', 'Research', '', 1, 0, 0, 0, 9, '2022-09-19 09:37:01'),
(10, 'Marketing', 'Team', '', 'Marketing', '', 1, 0, 0, 0, 23, '2022-09-19 09:39:04'),
(11, 'Matleena', 'Hopcyn', '', 'Design', 'Senior', 0, 0, 0, 0, 10, '2022-09-19 09:57:23'),
(12, 'Jonathan', 'Tabert', 'https://stepastepa.github.io/messenger/images/avatars/user-19.jpeg', 'Design', '', 0, 0, 1, 0, 0, '2022-09-19 09:58:55'),
(13, 'Heron', 'Davor', '', 'Research', 'Senior', 0, 1, 0, 1, 0, '2022-09-19 10:01:46'),
(14, 'Daniel', 'Carsten', '', 'Marketing', 'Intern', 0, 0, 0, 0, 0, '2022-09-19 10:06:56'),
(15, 'Cyneburg', 'Vilen', 'https://stepastepa.github.io/messenger/images/avatars/user-23.jpeg', 'Research', '', 0, 0, 1, 0, 0, '2022-09-19 11:54:26'),
(16, 'Rebeka', 'Donnduban', 'https://stepastepa.github.io/messenger/images/avatars/user-4.jpeg', 'Research', 'Team Lead', 0, 0, 1, 0, 0, '2022-09-19 11:56:44'),
(17, 'Ahinoam', 'Wilbert', '', 'Production', 'Team Lead', 0, 0, 0, 1, 0, '2022-09-19 12:02:09'),
(18, 'Ioannicius', 'Arevik', '', 'Design', 'Intern', 0, 0, 1, 0, 0, '2022-09-19 12:03:19'),
(19, 'Aaron', 'Samra', '', 'Marketing', '', 0, 0, 1, 0, 33, '2022-09-19 12:04:10'),
(20, 'Dina', 'Prisca', 'https://stepastepa.github.io/messenger/images/avatars/user-21.jpeg', 'Marketing', 'Senior', 0, 0, 1, 0, 0, '2022-09-19 12:05:15'),
(21, 'Aika', 'Quiteria', '', 'Production', '', 0, 0, 0, 0, 20, '2022-09-19 12:07:50'),
(22, 'Keitha', 'Beatrice', 'https://stepastepa.github.io/messenger/images/avatars/user-26.jpeg', 'Production', 'Senior', 0, 0, 1, 0, 3, '2022-09-19 12:08:38'),
(23, 'Chang', 'Hao', '', 'Design', '', 0, 0, 0, 1, 0, '2022-09-19 13:22:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
