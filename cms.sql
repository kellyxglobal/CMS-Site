-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2022 at 09:44 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'Javascript'),
(3, 'PHP'),
(4, 'JAVA'),
(5, 'HTML'),
(7, 'JQUERY'),
(20, 'NodeJS'),
(21, 'Python');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(9, 25, 'kelechi', 'kelechianyaegbu@microfocus.com', 'The Falling of the dry leaf is the reminder', 'approved', '2022-01-14'),
(10, 25, 'kelechi', 'Kelechi.Anyaegbu@microfocus.com', 'The falling of the dry leave is the reminder to the green ones that one day it must surely be there turn', 'approved', '2022-01-17'),
(11, 25, 'Anyaegbu', 'chux@gmail.com', 'The love of my life is the reminder to ', 'approved', '2022-01-17'),
(12, 25, 'kelechi', 'AnyaegbuKelechi@gmail.com', 'The folling odjww', 'unapproved', '2022-02-08'),
(13, 25, 'kellyx', 'karena@gmail.com', 'dfsesdsd', 'unapproved', '2022-02-08'),
(14, 25, 'kellyx', 'karena@gmail.com', 'dfsesdsd', 'unapproved', '2022-02-08'),
(15, 25, 'kellyx', 'karena@gmail.com', 'dfsesdsd', 'unapproved', '2022-02-08'),
(16, 25, 'kellyx', 'karena@gmail.com', 'dfsesdsd', 'unapproved', '2022-02-08'),
(17, 25, 'kellyx', 'karena@gmail.com', 'dfsesdsd', 'unapproved', '2022-02-08'),
(18, 25, 'kellyx', 'karena@gmail.com', 'dfsesdsd', 'unapproved', '2022-02-08'),
(19, 25, 'kelechi', 'karena@gmail.com', 'sksxhbshhss', 'unapproved', '2022-02-08'),
(20, 25, 'kelechi', 'karena@gmail.com', 'sksxhbshhss', 'unapproved', '2022-02-08'),
(21, 25, 'kelechi', 'karena@gmail.com', 'sksxhbshhss', 'unapproved', '2022-02-08'),
(22, 25, 'kelechi', 'karena@gmail.com', 'sksxhbshhss', 'unapproved', '2022-02-08'),
(23, 25, 'kelechi', 'karena@gmail.com', 'sksxhbshhss', 'unapproved', '2022-02-08'),
(24, 25, 'kelechi', 'karena@gmail.com', 'sksxhbshhss', 'unapproved', '2022-02-08'),
(25, 25, 'kelechi', 'karena@gmail.com', 'dkneq uxh x uwq', 'unapproved', '2022-02-08'),
(26, 25, 'kelechi', 'karena@gmail.com', 'dkneq uxh x uwq', 'unapproved', '2022-02-08'),
(27, 25, 'kelechi', 'kk@gmail', 'dj jnsbbh s ssbhs', 'unapproved', '2022-02-08'),
(28, 25, 'kelechi', 'kk@gmail', 'dj jnsbbh s ssbhs', 'unapproved', '2022-02-08'),
(29, 25, 'kelechi', 'kk@gmail.com', 'jsjsjs', 'unapproved', '2022-02-10'),
(30, 25, 'kelechi', 'kk@gmail.com', 'jsjsjs', 'unapproved', '2022-02-10'),
(31, 25, 'kelechi', 'kk@gmail.com', 'jsjsjs', 'unapproved', '2022-02-10'),
(32, 25, 'kelechi', 'kk@gmail.com', 'jsjsjs', 'unapproved', '2022-02-10'),
(33, 25, 'kelechi', 'kk@gmail.com', 'jsjsjs', 'unapproved', '2022-02-10'),
(34, 25, 'kelechi', 'kk@gmail.com', 'jsjsjs', 'unapproved', '2022-02-10'),
(35, 25, 'kelechi', 'kk@gmail.com', 'jsjsjs', 'unapproved', '2022-02-10'),
(36, 25, 'kelechi', 'kk@gmail.com', 'jsjsjs', 'unapproved', '2022-02-10'),
(37, 25, 'kelechi', 'Kelechi.Anyaegbu@microfocus.com', 'ksldkkd', 'unapproved', '2022-02-11'),
(38, 25, 'kelechi', 'Kelechi.Anyaegbu@microfocus.com', 'ksldkkd', 'unapproved', '2022-02-11'),
(39, 25, 'kelechi', 'Kellyxglobal@gmail.com', 'kljkmkm', 'unapproved', '2022-02-11'),
(40, 25, 'kelechi', 'Kellyxglobal@gmail.com', 'kljkmkm', 'unapproved', '2022-02-11'),
(41, 25, 'kelechi', 'Kellyxglobal@gmail.com', 'kljkmkm', 'unapproved', '2022-02-11'),
(42, 25, 'kelechi', 'Kellyxglobal@gmail.com', 'iddkdjjd', 'unapproved', '2022-02-11'),
(43, 25, 'kelechi', 'Kellyxglobal@gmail.com', 'iddkdjjd', 'unapproved', '2022-02-11'),
(44, 25, 'Anyaegbu', 'Kellyxglobal@gmail.com', 'jkkjk jjkjj jkkj', 'unapproved', '2022-02-11'),
(45, 25, 'Anyaegbu', 'Kellyxglobal@gmail.com', 'jkkjk jjkjj jkkj', 'unapproved', '2022-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft',
  `post_views_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`, `post_views_count`) VALUES
(25, 3, 'Web Design From Scratch', 'Kelechi Anyaegbu', '2022-01-14', 'Campaign2.png', 'The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn. The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn. The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn. The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn. The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn. The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn. The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp;', 'PHP, Developer, divine love', 68, 'published', 22),
(26, 2, 'Best PHP Cost Ever', 'Ejiogu Victor', '2022-01-14', 'Campaign10.png', 'The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp; The Falling of the Dry leave is the reminder to the green ones that one day it must surely be there turn.&nbsp;', 'PHP, Developer, divine love', 1, 'published', 2),
(27, 2, 'Divine Love 3', 'Kelechi Anyaegbu', '2022-01-14', '', '<p>         <iframe frameborder=\"0\" src=\"//www.youtube.com/embed/9FigyA1LtlU?start=3\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe></p>', '', 1, 'published', 1),
(28, 7, 'Web Design for your Business', 'Ejiogu Victor', '2022-01-14', '', '<p>         <iframe frameborder=\"0\" src=\"//www.youtube.com/embed/fVTXy9XQFt8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe></p>', 'PHP, Developer, Devops', 0, 'draft', 0),
(30, 2, 'Best JAVASCRIPT Cost Ever', 'Kelechi Anyaegbu', '2022-01-14', 'computer room.jpg', 'The flying Dragon The flying Dragon The flying Dragon The flying Dragon The flying Dragon The flying DragonThe flying DragonThe flying Dragon The flying Dragon The flying Dragon The flying Dragon The flying Dragon The flying Dragon The flying Dragon The flying Dragon The flying Dragon The flying DragonThe flying DragonThe flying Dragon The flying DragonThe flying DragonThe flying Dragon The flying Dragon The flying Dragon', 'PHP, Developer, Devops', 1, 'published', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randsalt` varchar(255) NOT NULL DEFAULT '$2y$10$Iusesomecrazystring22'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randsalt`) VALUES
(10, 'chucks', '$2y$10$iusesomecrazystrings2u9jziKjOa75ckVSjeudY2jTsg/s5fDbq', 'Chukwuemeka', 'Nwogu', 'chux@gmail.com', '', 'admin', '$2y$10$iusesomecrazystrings22'),
(11, 'AnyaegbuKelechi@gmail.com', '$2y$10$iusesomecrazystrings2udkvVtrC96p6wSB168aL1cNyBbhjhdtq', 'kells', 'Anyaegbu', 'Kelechi.Anyaegbu@microfocus.com', '', 'subscriber', '$2y$10$iusesomecrazystrings22'),
(22, 'Kelechi', '$2y$10$iusesomecrazystrings2udkvVtrC96p6wSB168aL1cNyBbhjhdtq', '', '', 'Kelechi.Anyaegbu@microfocus.com', '', 'subscriber', '$2y$10$iusesomecrazystrings22'),
(24, 'Kayc', '$2y$10$iusesomecrazystrings2udkvVtrC96p6wSB168aL1cNyBbhjhdtq', 'Kelejoe', 'Anyaegbu', 'AnyaegbuKelechi@gmail.com', '', 'subscriber', '$2y$10$Iusesomecrazystring22'),
(25, 'Kebbi', '$2y$10$iusesomecrazystrings2udkvVtrC96p6wSB168aL1cNyBbhjhdtq', '', '', 'Koppite@gmail.com', '', 'subscriber', '$2y$10$Iusesomecrazystring22'),
(26, 'kele', '$2y$10$iusesomecrazystrings2uhnFO87a7MC14FV.8apviy8w2R9i1uwu', '', '', 'kele@gmail.com', '', 'admin', '$2y$10$Iusesomecrazystring22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
