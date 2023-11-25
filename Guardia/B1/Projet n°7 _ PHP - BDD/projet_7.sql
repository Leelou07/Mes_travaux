-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2023 at 06:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projet_7`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `mdp_admin` text NOT NULL,
  `email_admin` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `mdp_admin`, `email_admin`) VALUES
(1, 'test', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `prenom_client` varchar(50) NOT NULL,
  `nom_client` varchar(50) NOT NULL,
  `mdp_client` text NOT NULL,
  `email_client` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `prenom_client`, `nom_client`, `mdp_client`, `email_client`) VALUES
(10, 'Mark', 'Zuckerberg', 'Facebook', 'zuzu@gmail.com'),
(11, 'Mark', 'Zuckerberg', 'Facebook', 'zuzu@gmail.com'),
(12, 'Mark', 'Zuckerberg', 'Facebook', 'zuzu@gmail.com'),
(13, 'Mark', 'Zuckerberg', 'Facebook', 'zuzu@gmail.com'),
(14, 'Mark', 'Zuckerberg', 'Facebook', 'zuzu@gmail.com'),
(15, 'Mark', 'Zuckerberg', 'Facebook', 'zuzu@gmail.com'),
(16, 'Mark', 'Zuckerberg', 'Facebook', 'zuzu@gmail.com'),
(17, 'Mark', 'Zuckerberg', 'Facebook', 'zuzu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contenu`
--

CREATE TABLE `contenu` (
  `id_contenu` int(11) NOT NULL,
  `titre` varchar(70) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `createur`
--

CREATE TABLE `createur` (
  `id_createur` int(11) NOT NULL,
  `nom_createur` varchar(50) NOT NULL,
  `prenom_createur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exo`
--

CREATE TABLE `exo` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `birthdate` varchar(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `exo`
--

INSERT INTO `exo` (`id`, `nom`, `birthdate`, `gender`, `email`, `phone`) VALUES
(1, 'Leelou', '31/01/2023', 'Female', 'leeloulerouge@laposte.net', 659236166),
(2, 'Leelou Lerouge', '07/01/2023', 'Female', 'leeloulerouge@laposte.net', 659236166),
(3, 'Leelou Lerouge', '07/01/2023', 'Female', 'leeloulerouge@laposte.net', 659236166),
(4, 'Leelou Lerouge', '07/01/2023', 'Female', 'leeloulerouge@laposte.net', 659236166),
(5, 'Leelou Lerouge', '07/01/2023', 'Female', 'leeloulerouge@laposte.net', 659236166),
(6, 'a', '25/01/2023', 'Male', 'zad@gmail.com', 69594),
(7, 'h', '31/01/2023', 'Other', 'g@p.com', 728648256);

-- --------------------------------------------------------

--
-- Table structure for table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contenu`
--
ALTER TABLE `contenu`
  ADD PRIMARY KEY (`id_contenu`);

--
-- Indexes for table `createur`
--
ALTER TABLE `createur`
  ADD PRIMARY KEY (`id_createur`);

--
-- Indexes for table `exo`
--
ALTER TABLE `exo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contenu`
--
ALTER TABLE `contenu`
  MODIFY `id_contenu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `createur`
--
ALTER TABLE `createur`
  MODIFY `id_createur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exo`
--
ALTER TABLE `exo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
