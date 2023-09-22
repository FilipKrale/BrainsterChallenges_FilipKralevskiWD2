-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2021 at 09:36 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `challenge-15-php-pdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` int(10) UNSIGNED NOT NULL,
  `coverImgURL` varchar(2048) DEFAULT NULL,
  `pageTitle` varchar(64) DEFAULT NULL,
  `pageSubtitle` varchar(64) DEFAULT NULL,
  `companyDesc` varchar(512) DEFAULT NULL,
  `companyTel` int(20) UNSIGNED DEFAULT NULL,
  `companyAdress` varchar(64) DEFAULT NULL,
  `productURL-1` varchar(512) DEFAULT NULL,
  `productDesc-1` varchar(1000) DEFAULT NULL,
  `productURL-2` varchar(512) DEFAULT NULL,
  `productDesc-2` varchar(1000) DEFAULT NULL,
  `productURL-3` varchar(512) DEFAULT NULL,
  `productDesc-3` varchar(1000) DEFAULT NULL,
  `contactDesc` varchar(1000) DEFAULT NULL,
  `linkedinURL` varchar(512) DEFAULT NULL,
  `facebookURL` varchar(512) DEFAULT NULL,
  `twitterURL` varchar(512) DEFAULT NULL,
  `instagramURL` varchar(512) DEFAULT NULL,
  `servicesType` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `coverImgURL`, `pageTitle`, `pageSubtitle`, `companyDesc`, `companyTel`, `companyAdress`, `productURL-1`, `productDesc-1`, `productURL-2`, `productDesc-2`, `productURL-3`, `productDesc-3`, `contactDesc`, `linkedinURL`, `facebookURL`, `twitterURL`, `instagramURL`, `servicesType`) VALUES
(16, 'https://images.unsplash.com/photo-1615053835685-01e8be635c29?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1100&q=80', 'Denis', 'This is my site', 'We sell everything ', 22589788, 'aminta 3 - 22 Skopje', 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur explicabo ratione quisquam. Facere est similique rem molestiae totam, dolor consequatur excepturi eveniet at vero incidunt dolores quidem eligendi laudantium assumenda.', 'https://images.unsplash.com/photo-1489824904134-891ab64532f1?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1189&q=80', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat fugit suscipit earum assumenda quos ullam sit laborum. Asperiores aliquam dignissimos velit ratione vel! Delectus voluptatibus quas ratione voluptates ad fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias cupiditate magnam placeat? Quo dolorum temporibus eveniet necessitatibus sequi sapiente? Repudiandae. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia necessitatibus tempore dolorem impedit eum aspernatur, deleniti vero nemo quisquam, cum voluptatibus consequatur perspiciatis aut, sit veritatis culpa! Dolores, similique vero quibusdam odit unde consectetur blanditiis itaque dicta neque. Doloremque amet mollitia autem magnam cum deserunt, repellat minima quo quis ab.', 'https://images.unsplash.com/photo-1521159311222-fcd72db9bd8e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat fugit suscipit earum assumenda quos ullam sit laborum. Asperiores aliquam dignissimos velit ratione vel! Delectus voluptatibus quas ratione voluptates ad fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias cupiditate magnam placeat? Quo dolorum temporibus eveniet necessitatibus sequi sapiente? Repudiandae. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia necessitatibus tempore dolorem impedit eum aspernatur', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat fugit suscipit earum assumenda quos ullam sit laborum. Asperiores aliquam dignissimos velit ratione vel! Delectus voluptatibus quas ratione voluptates ad fuga. Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias cupiditate magnam placeat? Quo dolorum temporibus eveniet necessitatibus sequi sapiente? Repudiandae. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia necessitatibus tempore dolorem impedit eum aspernatur, deleniti vero nemo quisquam, cum voluptatibus consequatur perspiciatis aut, sit veritatis culpa! Dolores, similique vero quibusdam odit unde consectetur blanditiis itaque dicta neque. Doloremque amet mollitia autem magnam cum deserunt, repellat minima quo quis ab.', 'https://www.linkedin.com/in/denis-ziberi-a196101b5/', 'https://www.facebook.com/', 'https://twitter.com/?lang=en', 'https://www.instagram.com/', 'services');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
