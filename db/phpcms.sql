-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 05:09 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_panel`
--

CREATE TABLE `admin_panel` (
  `id` int(11) NOT NULL,
  `datetimes` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `post` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_panel`
--

INSERT INTO `admin_panel` (`id`, `datetimes`, `title`, `category`, `author`, `image`, `post`) VALUES
(3, 'October 23, 2018, 10:25 pm', 'alshababb', 'Social security', 'Daniel', 'tour4.jpg', 'the final test of the tmp function in the php files'),
(4, 'October 24, 2018, 12:06 am', 'The hots', 'Education', 'Daniel', 'choise school.jpg', 'the kcse just begin'),
(5, 'October 24, 2018, 6:37 pm', 'Fine', 'Today', 'Daniel', 'ffine.jpg', 'This is to test if the system is working proper ,simple is it in terms.'),
(6, 'October 25, 2018, 9:15 pm', 'news', 'Technology', 'Daniel', 'db.jpg', 'is the collection of techniques, skills, methods, and processes used in the production of goods or services or in the accomplishment of objectives, such as scientific investigation.\r\nis the collection of techniques, skills, methods, and processes used in the production of goods or services or in the accomplishment of objectives, such as scientific investigation.'),
(9, 'November 4, 2018, 5:19 pm', 'strong', 'Programming', 'Daniel', 'flower.jpg', 'this is the stronger bit of the code bag.this is the stronger bit of the code bag.this is the stronger bit of the code bag.this is the stronger bit of the code bag.this is the stronger bit of the code bag.this is the stronger bit of the code bag.this is the stronger bit of the code bag.this is the stronger bit of the code bag.'),
(10, 'November 9, 2018, 9:15 pm', 'Newtitle', 'Today', 'Daniel', 'bus.jpg', 'bus that is able to fly is now available in our market you are all welcome to get control of the new innovations.'),
(11, 'November 11, 2018, 8:22 pm', 'karU', 'Education', 'maina', 'Library10 12.JPG', 'The construction of new multi-functional library is on the progress we are expecting the institution to take responsibility and work very hard to achieve their dreams as soon as the university is closed so that during the project can be complete before the student came back from home'),
(13, 'November 11, 2018, 9:39 pm', 'Tour ', 'Events', 'maina', 'ggood.jpg', 'THE new discovered  solar system is now giving the scientist a heavy job ......? Find why?'),
(15, 'November 11, 2018, 9:45 pm', 'Tight ', 'Final', 'maina', 'develop.jpg', 'Eventually guys in the \"HIGH OFFICE \"so called are now starting to experience some hotness as the gvt announce audinting'),
(16, 'November 11, 2018, 9:48 pm', 'Student', 'Programming', 'maina', 'ttest.png', 'The latest information we are getting from the lecturer is that student in the  field are experiencing some challenges... Find more next week!'),
(17, 'November 11, 2018, 10:00 pm', 'code', 'File', 'maina', 'ffine.jpg', 'combine your code in one file and let them shine like nobody business.'),
(18, 'November 11, 2018, 10:01 pm', 'Dijital', 'Frame work', 'maina', 'soft.jpg', 'This is my new designed frame work which i will no give for free.'),
(19, 'November 11, 2018, 10:03 pm', 'President elect.', 'Final', 'maina', 'leade4.jpg', 'This file explain how the new karU student chairman was elected....!'),
(20, 'November 11, 2018, 10:05 pm', 'Addyou', 'sport', 'maina', 'sport.png', 'join our special football club and earn up to thirty thousand per hour the secrete is just in your effort. '),
(21, 'November 16, 2018, 9:13 pm', 'test', 'File', 'Daniel', 'ddm.jpg', 'the school is poor so they say\r\nthe student are rich so they say.'),
(22, 'November 18, 2018, 3:59 pm', 'sunday', 'Today', 'maina', 'countygallb1.jpg', 'The day that the project will be submitted.The day that the project will be submitted.The day that the project will be submitted.The day that the project will be submitted.The day that the project will be submitted.The day that the project will be submitted.The day that the project will be submitted.'),
(23, 'November 19, 2018, 9:53 pm', 'TOUR', 'others', 'Terry', 'IMG_9008.JPG', 'Mainframe computers (colloquially referred to as \"big iron\") are computers used primarily by large organizations for critical applications; bulk data processing, such as census, industry and consumer statistics, enterprise resource planning; and transaction processing');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `datetimes` varchar(299) NOT NULL,
  `name` varchar(200) NOT NULL,
  `creatorname` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `datetimes`, `name`, `creatorname`) VALUES
(1, 'October 22, 2018, 1:07 pm', 'Election', 'Daniel'),
(2, 'October 22, 2018, 2:14 pm', 'Technology', 'Daniel'),
(3, 'October 22, 2018, 2:17 pm', 'sport', 'Daniel'),
(4, 'October 22, 2018, 2:19 pm', 'others', 'Daniel'),
(5, 'October 22, 2018, 2:22 pm', 'Social security', 'Daniel'),
(6, 'October 23, 2018, 5:35 pm', 'Education', 'Daniel'),
(7, 'October 23, 2018, 7:18 pm', 'Frame work', 'Daniel'),
(9, 'October 23, 2018, 11:29 pm', 'Events', 'Daniel'),
(10, 'October 23, 2018, 11:30 pm', 'Politics', 'Daniel'),
(11, 'October 23, 2018, 11:38 pm', 'Programming', 'Daniel'),
(12, 'October 24, 2018, 6:33 pm', 'Today', 'Daniel'),
(13, 'November 9, 2018, 9:17 pm', 'File', 'Daniel'),
(14, 'November 9, 2018, 9:19 pm', 'Final', 'maina'),
(15, 'November 19, 2018, 10:36 pm', 'Dare is To Do.', 'Terry');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(1) NOT NULL,
  `datetimes` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `approvedby` varchar(200) NOT NULL,
  `status` varchar(5) NOT NULL,
  `admin_panel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `datetimes`, `name`, `email`, `comment`, `approvedby`, `status`, `admin_panel_id`) VALUES
(11, 'October 27, 2018, 12:16 am', 'John', 'john@gmail.com', 'This was the best test of the function stated in the table', '', 'ON', 5),
(13, 'November 4, 2018, 1:02 pm', 'john', 'john@gmail.com', 'this page is so good that it cannot be seen by the new members who do not try the same will be so weak and will end up being same all the time that they try working the same way like the guru school of thought.', '', 'ON', 3),
(16, 'November 4, 2018, 1:43 pm', 'hannah', 'hannah@gmail.com', 'e collection of techniques, skills, methods, and processes used in the production of goods or services or in the accomplishment of objectives, such as scientific investigation. is the collection of techniques, skills, methods, and processes used in the productio', '', 'ON', 6),
(17, 'November 4, 2018, 1:45 pm', 'hot', 'hot@gmail.com', 'e collection of techniques, skills, methods, and processes used in the production of goods or services or in the accomplishment of objectives, such as scientific investigation. is the collection of techniques, skills, methods, and processes used in the productio', 'maina', 'ON', 4),
(19, 'November 4, 2018, 5:20 pm', 'Daniel', 'joseph@gmail.com', '.this is the stronger bit of the code bag.this is the stronger bit of the code bag.this is the stronger bit of the code bag.this is the stronger bit of the code bag.', '', 'OFF', 9),
(20, 'November 4, 2018, 6:05 pm', 'fall', 'fall@gmail.com', 'is to test if the system is working proper ,simple is it in termsis to test if the system is working proper ,simple is it in termsis to test if the system is working proper ,simple is it in terms', '', 'OFF', 5),
(21, 'November 4, 2018, 6:06 pm', 'Mweni', 'mweni@gmail.com', 'he system is working proper he system is working proper he system is working proper he system is working proper he system is working proper ', '', 'ON', 5),
(22, 'November 4, 2018, 6:24 pm', 'final', 'final@gmail.com', 'd will end up being same all the time that they try working the same way like the guru school of thought.d will end up being same all the time that they try working the same way like the guru school of thought.', '', 'OFF', 3),
(23, 'November 17, 2018, 1:11 am', 'kariuki', 'kariuki@gmail.com', ' i join our special football club and earn up to thirty thousand per hour the secrete is just in your effort.\r\njoin our special football club and earn up to thirty thousand per hour the secrete is just in your effort.join our special football club and earn up to thirty thousand per hour the secrete is just in your effort.', 'Daniel', 'ON', 20),
(24, 'November 17, 2018, 2:37 am', 'mwema', 'mwema@gmail.com', 'this is a cool yug who is aspired to reach the horizon very easy and calm. this is a cool yug who is aspired to reach the horizon very easy and calm.this is a cool yug who is aspired to reach the horizon very easy and calm.this is a cool yug who is aspired to reach the horizon very easy and calm.', 'Daniel', 'ON', 21),
(25, 'November 17, 2018, 2:40 am', 'chwaks', 'chwaks@gmail.com', 'politics is a dirty game, you need to speak lies to win listeners vote.politics is a dirty game, you need to speak lies to win listeners vote.politics is a dirty game, you need to speak lies to win listeners vote.politics is a dirty game, you need to speak lies to win listeners vote.', 'Daniel', 'ON', 19),
(26, 'November 19, 2018, 5:27 pm', 'njuguna', 'njuguna@gmail.com', 'i appreciate your effort nice work.', 'approval', 'OFF', 21),
(27, 'November 19, 2018, 5:47 pm', 'Kim', 'kim@gmail.com', 'This is Kim from the other side of the mountain .....this post is true student are that is greate...', 'Terry', 'ON', 21),
(28, 'November 19, 2018, 7:28 pm', 'ciku', 'cuko@gmail.com', 'hi! guy, this blog is so supportive please help me know the report format...', 'Aprove me', 'OFF', 20),
(29, 'November 20, 2018, 10:10 am', 'class', 'class@bgmail.com', 'Share your thought about this postShare your thought about this postShare your thought about this post', 'Daniel', 'ON', 23),
(30, 'November 20, 2018, 10:17 am', 'julius', 'julius@gmail.com', 'Share your thought about this postShare your thought about this postShare your thought about this postShare your thought about this post', 'Daniel', 'ON', 23),
(31, 'November 26, 2018, 5:43 pm', 'maniger', 'maniegr@gmail.com', 'Share your thought about this postShare your thought about this postShare your thought about this postShare your thought about this postShare your thought about this post', 'Aprove me', 'OFF', 23),
(32, 'February 22, 2019, 10:04 pm', 'Daniel', 'daniel2@gmail.com', 'Share your thought about this postShare your thought about this postShare your thought about this postvvvvvvShare your thought about this postShare your thought about this postShare your thought about this postShare your thought about this postShare your thought about this postShare your thought about this post', 'Aprove me', 'OFF', 20),
(34, 'March 6, 2019, 9:28 am', 'daniel', 'daniel2@gmail.com', 'r special football club and earn up to thirty thousand per hour the secrete is just in your effort. join our special football clu', 'Treasure', 'ON', 20),
(35, 'July 15, 2019, 3:28 pm', 'juma', 'juma@gmail.com', 'sheet what are you trying to purport. this post is a scam we wont f**l.  ', 'Admins', 'ON', 6),
(36, 'August 18, 2019, 1:51 pm', 'David', 'kyrax2016@gmail.com', 'this is kul', 'Admins', 'OFF', 21);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `datetimes` varchar(50) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `addedby` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `datetimes`, `username`, `password`, `addedby`) VALUES
(7, 'November 20, 2018, 9:45 am', 'Treasure', '.md5(treasure)', 'Daniel'),
(8, 'November 20, 2018, 10:24 am', 'CEO', '02c75fb22c75b23dc963c7eb91a062cc', 'Daniel'),
(11, 'January 15, 2019, 2:11 pm', 'Daniel', '6eea9b7ef19179a06954edd0f6c05ceb', 'Secretary'),
(12, 'January 25, 2019, 12:53 pm', 'Admin1', '2e33a9b0b06aa0a01ede70995674ee23', 'Treasure'),
(13, 'January 30, 2019, 8:46 pm', 'passward', '76d74e6de913a695e428707a0f1844d6', 'Treasure'),
(14, 'February 4, 2019, 12:14 pm', 'Kabiru', '02c75fb22c75b23dc963c7eb91a062cc', 'Treasure'),
(15, 'February 15, 2019, 9:31 pm', 'computer', '02c75fb22c75b23dc963c7eb91a062cc', 'Treasure'),
(16, 'February 15, 2019, 9:34 pm', 'hp', 'bcb759b5b8ab63b06295c7434345d7a5', 'Treasure'),
(17, 'February 22, 2019, 11:43 pm', 'admin', '02c75fb22c75b23dc963c7eb91a062cc', 'Treasure'),
(18, 'February 22, 2019, 11:48 pm', 'Admins', 'zxcvbnm', 'Treasure');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_panel`
--
ALTER TABLE `admin_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_panel_id` (`admin_panel_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_panel`
--
ALTER TABLE `admin_panel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `Foreign Key to admin_panel table` FOREIGN KEY (`admin_panel_id`) REFERENCES `admin_panel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
