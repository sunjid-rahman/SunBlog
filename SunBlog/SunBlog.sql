-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2018 at 08:41 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(2, 'Javascript'),
(3, 'PHP'),
(4, 'JAVA'),
(46, 'Python'),
(47, 'C++'),
(48, 'Ruby'),
(49, '.NET'),
(50, 'Angular js'),
(51, 'R');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(3) NOT NULL,
  `comment_post_id` int(3) NOT NULL,
  `comment_date` date NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_date`, `comment_email`, `comment_content`, `comment_status`, `comment_author`) VALUES
(2, 10, '2018-11-21', 'sunjid010@gmail.com', 'Testing comment', 'approved', 'Sunjid');

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
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(1, 3, 'About PHP Language', 'Sunjid', '2018-11-29', 'php-banner.jpg', 'PHP is a king of web programming right now.', 'sunjid,html,html5,css,css3,php,web programming', 0, 'draft'),
(7, 4, 'sunjid is best', 'Afridi', '2018-11-29', 'programming_java_coffee_cups.jpg', 'Pellentesque ac porta tortor. Suspendisse iaculis eros a augue iaculis cursus. Vivamus rhoncus dui et massa mattis posuere. Aenean eu malesuada tortor, laoreet aliquet tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla maximus dictum nibh, dapibus rhoncus elit finibus at. Phasellus molestie blandit imperdiet. Aenean neque turpis, aliquam at dictum rutrum, varius ut ex. Donec ultricies turpis sit amet leo pretium, condimentum consectetur lorem ullamcorper. Etiam ut augue ut ex vestibulum blandit id sed velit. Curabitur id quam purus. Nunc eleifend eleifend orci, nec accumsan purus eleifend non. Vivamus venenatis sollicitudin euismod.\r\n\r\nNunc fermentum est ac velit vulputate, ac ', 'java,sun,afridi', 4, 'draft'),
(8, 4, 'JAva is best', 'Utshab', '2018-11-29', 'programming_java_coffee_cups.jpg', 'Pellentesque ac porta tortor. Suspendisse iaculis eros a augue iaculis cursus. Vivamus rhoncus dui et massa mattis posuere. Aenean eu malesuada tortor, laoreet aliquet tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla maximus dictum nibh, dapibus rhoncus elit finibus at. Phasellus molestie blandit imperdiet. Aenean neque turpis, aliquam at dictum rutrum, varius ut ex. Donec ultricies turpis sit amet leo pretium, condimentum consectetur lorem ullamcorper. Etiam ut augue ut ex vestibulum blandit id sed velit. Curabitur id quam purus. Nunc eleifend eleifend orci, nec accumsan purus eleifend non. Vivamus venenatis sollicitudin euismod.\r\n\r\nNunc fermentum est ac velit vulputate, ac ', 'java,sun,afridi', 4, 'draft'),
(9, 47, 'C++', 'Utshab', '2018-11-29', 'Write Code.png', 'Pellentesque ac porta tortor. Suspendisse iaculis eros a augue iaculis cursus. Vivamus rhoncus dui et massa mattis posuere. Aenean eu malesuada tortor, laoreet aliquet tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla maximus dictum nibh, dapibus rhoncus elit finibus at. Phasellus molestie blandit imperdiet. Aenean neque turpis, aliquam at dictum rutrum, varius ut ex. Donec ultricies turpis sit amet leo pretium, condimentum consectetur lorem ullamcorper. Etiam ut augue ut ex vestibulum blandit id sed velit. Curabitur id quam purus. Nunc eleifend eleifend orci, nec accumsan purus eleifend non. Vivamus venenatis sollicitudin euismod.\r\n\r\nNunc fermentum est ac velit vulputate, ac ', 'C++,programming,course,learn', 4, 'published');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_randSalt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `user_randSalt`) VALUES
(1, 'sunjid007', '1234', 'Sunjid', 'Rahman', 'sunjid010@gmail.com', '', 'admin', '');

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
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
