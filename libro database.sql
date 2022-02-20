-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 08:55 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libro`
--
CREATE DATABASE IF NOT EXISTS `libro` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `libro`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bookid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `genre` varchar(25) DEFAULT NULL,
  `language` varchar(12) DEFAULT NULL,
  `author` varchar(40) DEFAULT NULL,
  `edition` varchar(6) DEFAULT NULL,
  `publication` varchar(45) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `shortdetails` varchar(1000) DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `uid`, `title`, `genre`, `language`, `author`, `edition`, `publication`, `photo`, `shortdetails`, `status`) VALUES
(15, 12, 'জোছনা ও জননীর গল্প ', ' Others', 'Bangla', 'হুমায়ুন আহমেদ', NULL, 'অন্যপ্রকাশ', '1643985853_625ebf1fa07d99b1ea1e.jpg', 'জোছনা ও জননীর গল্প বাংলাদেশের স্বাধীনতা যুদ্ধের উপর ভিত্তি করে হুমায়ুন আহমেদ রচিত একটি উপন্যাস। ফেব্রুয়ারি ২০০৪ সালে (ফাল্গুন, ১৪০০ বঙ্গাব্দ) একুশে গ্রন্থমেলায় বাংলাদেশের অন্যপ্রকাশ, ঢাকা থেকে এটি গ্রন্থাকারে প্রকাশিত হয়। মুক্তিযুদ্ধ চলাকালীন সময়ে সংঘটিত তাঁর নিজ জীবনের এবং নিকট সম্পর্কিত ঘনিষ্ঠ বিভিন্ন ব্যক্তির বাস্তব অভিজ্ঞতার কথা তিনি উপন্যাসিক আঙ্গিকে এতে ফুটিয়ে তুলেছেন। বাংলাদেশের স্বাধীনতা আন্দোলনের প্রধান নেতা শেখ মুজিবুর রহমানসহ তৎকালীন কিছু উল্লেখযোগ্য রাজনৈতিক ব্যক্তিবর্গের ঘটনা তাঁর নিজস্ব দৃষ্টিকোণ থেকে উঠে এসেছে এই উপন্যাসটিতে।[১] প্রকাশের পর থেকে বহুবার বইটি একুশে বইমেলার সর্বাধিক বিক্রিত বইয়ের তালিকায় প্রথম সারিতে ছিল।', 'available'),
(17, 20, 'The Alchemist', ' Others', 'English', ' Paulo Coelho', NULL, 'HarperTorch', '1643986507_0aaaa0bfc5ab4c2d769a.jpg', 'An Andalusian shepherd boy named Santiago consults a Gypsy fortune-teller about the meaning of a recurring dream. The woman interprets it as a prophecy, telling the boy that he will discover a treasure at the Egyptian pyramids.\r\n\r\nAfter Santiago sets out, he meets an old king Melchizedek, or the king of Salem, who tells him to sell his sheep so as to travel to Egypt and accomplish his \'Personal Legend\'. Early on his arrival in Africa, a man who claims to be able to take Santiago to the pyramids instead robs him of the money he had made from his flock. Santiago then has to work for a crystal merchant so to earn enough to get to the pyramids.', 'available'),
(18, 12, 'Five Point Someone', 'Fiction', 'English', 'Chetan Bhagat', '', '', '1644161478_d072fdf52e214009695d.jpg', 'Five Point Someone: What not to do at IIT is a 2004 novel written by Indian author Chetan Bhagat. The book sold over a million copies worldwide. The films 3 Idiots and Nanban are based on the book. It was also adapted into a play by the theatre company Evam.', 'available'),
(19, 20, 'One Night at the Call Centre', 'Fiction', 'English', 'Chetan Bhagat', NULL, '', '1644161880_c53fdf15de86bcf2b931.jpg', 'One Night @ the Call Center is a novel written by Chetan Bhagat and first published in 2005. The novel revolves around a group of six call center employees working at the Connexions call center in Gurgaon, Haryana, India.', 'available'),
(20, 20, 'One Thousand and One Nights', ' Others', 'English', '', NULL, '', '1644162158_931bc825cab7974df018.jpg', 'One Thousand and One Nights is a collection of Middle Eastern folk tales compiled in Arabic during the Islamic Golden Age. It is often known in English as the Arabian Nights, from the first English-language edition, which rendered the title as The Arabian Nights\' Entertainment.', 'available'),
(22, 20, 'Pather Panchali', ' Others', 'Bangla', 'Bibhutibhushan Bandyopadhyay', NULL, 'Ranjan Prakashalay', '1644162316_6d36838f2097b12dc9d6.png', 'Pather Panchali is a 1929 novel written by Bibhutibhushan Bandyopadhyay and was later adapted into a 1955 film of the same name by Satyajit Ray.', 'available'),
(23, 20, 'Revolution 2020', 'Romance', 'English', 'Chetan Bhagat', NULL, '', '1644162416_e35aa386e9b25087f973.jpeg', 'Revolution 2020: Love, Corruption, Ambition is a 2011 novel by Chetan Bhagat. Its story is concerned with a love triangle, corruption and a journey of self-discovery.', 'available'),
(24, 20, 'The Diary of a Young Girl', 'History', 'English', 'Anne Frank', NULL, '', '1644162716_1fc9c609738347de215e.jpg', 'The Diary of a Young Girl, also known as The Diary of Anne Frank, is a book of the writings from the Dutch-language diary kept by Anne Frank while she was in hiding for two years with her family during the Nazi occupation of the Netherlands.', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `checkoutid` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `borrowerid` int(11) NOT NULL,
  `checkoutdate` date DEFAULT NULL,
  `returndate` date DEFAULT NULL,
  `status` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `lname` varchar(25) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `address` varchar(80) DEFAULT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `photo` varchar(45) DEFAULT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `fname`, `lname`, `contact`, `email`, `address`, `age`, `gender`, `photo`, `password`) VALUES
(12, 'Helena Aktar', 'Reya', '01745671968', 'creya07@gmail.com', 'Bangladesh, Dhaka, Dhaka North, Dhaka Cantonment, Uttar Kafrul, House-562', 23, 'Female', 'C:\\xampp\\tmp\\php9C21.tmp', '827ccb0eea8a706c4c34a16891f84e7b'),
(13, 'Ferdowsi', 'Marufa', '01521105269', 'marufafm@gmail.com', 'barishal', 23, 'Female', 'C:\\xampp\\tmp\\php133.tmp', '827ccb0eea8a706c4c34a16891f84e7b'),
(14, 'Helena Aktar', 'Reya', '01745671968', 'creya077@gmail.com', 'Bangladesh, Dhaka, Dhaka North, Dhaka Cantonment, Uttar Kafrul, House-562', 23, 'Female', 'C:\\xampp\\tmp\\php4F6E.tmp', '827ccb0eea8a706c4c34a16891f84e7b'),
(15, 'Helena Aktar', 'Reya', '0174567196213', 'creyannnnnbv07@gmail.com', 'Bangladesh, Dhaka, Dhaka North, Dhaka Cantonment, Uttar Kafrul, House-562', 23, 'Female', 'C:\\xampp\\tmp\\php8153.tmp', '827ccb0eea8a706c4c34a16891f84e7b'),
(16, 'Helena Aktar', 'Reya', '0174567196213', 'creya07mhjklh@gmail.com', 'Bangladesh, Dhaka, Dhaka North, Dhaka Cantonment, Uttar Kafrul, House-562', 23, 'Female', '1643644358_f037cb25b2e7fa45c788.png', '827ccb0eea8a706c4c34a16891f84e7b'),
(17, 'Helena Aktar', 'Reya', '01745671968', 'creya07dffffff@gmail.com', 'Bangladesh, Dhaka, Dhaka North, Dhaka Cantonment, Uttar Kafrul, House-562', 23, 'Female', '1643644593_0633cdb1398f764b0f75.png', '827ccb0eea8a706c4c34a16891f84e7b'),
(18, 'Helena Aktar', 'Reya', '0174567196213', 'creya0ddddddd7@gmail.com', 'Bangladesh, Dhaka, Dhaka North, Dhaka Cantonment, Uttar Kafrul, House-562', 23, 'Female', 'C:\\xampp\\tmp\\phpE4E2.tmp', '827ccb0eea8a706c4c34a16891f84e7b'),
(19, 'Helena Aktar', 'Reya', '0174567196213', 'creya0dddddddddddd7@gmail.com', 'Bangladesh, Dhaka, Dhaka North, Dhaka Cantonment, Uttar Kafrul, House-562', 23, 'Female', '1643645522_29ecfaf26e020ce7d84e.png', '827ccb0eea8a706c4c34a16891f84e7b'),
(20, 'Helena Aktar', 'Reya', '017456719621333', 'creya007@gmail.com', 'Bangladesh, Dhaka, Dhaka North, Dhaka Cantonment, Uttar Kafrul, House-562', 26, 'Female', '1643910030_ff1e9a5362fbf9836dac.jpg', '827ccb0eea8a706c4c34a16891f84e7b'),
(21, 'Muskan Hasan', 'Chowdhury', '01718857477', 'muskanhasanchowdhury@gmail.com', 'H-652, Uttar Kafrul, Kochukhet, Dhaka Cantt. Dhaka-1206', 21, 'Female', '1644164492_826e6bc8b34708b01360.jpg', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bookid`),
  ADD KEY `uid_idx` (`uid`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`checkoutid`),
  ADD UNIQUE KEY `bookid_UNIQUE` (`bookid`),
  ADD UNIQUE KEY `borrowerid_UNIQUE` (`borrowerid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `checkoutid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `uid` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `bookid` FOREIGN KEY (`bookid`) REFERENCES `book` (`bookid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `borrowerid` FOREIGN KEY (`borrowerid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
