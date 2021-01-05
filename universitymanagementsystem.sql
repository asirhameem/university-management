-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2021 at 06:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `bid` int(100) NOT NULL,
  `lid` int(100) NOT NULL,
  `bookname` varchar(100) NOT NULL,
  `bdate` varchar(10) NOT NULL,
  `rdate` varchar(10) NOT NULL,
  `sid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`bid`, `lid`, `bookname`, `bdate`, `rdate`, `sid`) VALUES
(1, 2, 'c for all', '2020-11-10', '2020-11-26', 5),
(2, 1, 'java', '2020-11-09', '2020-11-25', 6),
(3, 6, 'learning', '2020-11-01', '2020-11-25', 5),
(4, 11, 'All Abour Comoiler.', '2020-11-10', '2020-11-26', 13),
(5, 9, 'All Java.', '2020-11-09', '2020-11-25', 13);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `contentid` int(100) NOT NULL,
  `courseid` int(100) NOT NULL,
  `contentname` varchar(100) NOT NULL,
  `contentpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(100) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `cdescription` varchar(100) NOT NULL,
  `cteacher` int(100) NOT NULL,
  `cstart` varchar(10) NOT NULL,
  `cend` varchar(10) NOT NULL,
  `cpic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `cdescription`, `cteacher`, `cstart`, `cend`, `cpic`) VALUES
(2, 'c#', 'c# for all', 4, '3:00', '5:00', 'null'),
(3, 'java', 'All basic java', 7, '4:40', '5:40', 'nul');

-- --------------------------------------------------------

--
-- Table structure for table `document`
--

CREATE TABLE `document` (
  `docid` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `docname` varchar(100) NOT NULL,
  `docpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `eid` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `department` varchar(15) NOT NULL,
  `address` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `joindate` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `salary` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`eid`, `uid`, `gender`, `department`, `address`, `designation`, `joindate`, `phone`, `salary`) VALUES
(2, 16, 'male', 'cse', 'nator', 'dc', '2020-11-17', '01777048151', '45000'),
(3, 28, 'male', 'eee', 'barisal', 'Lecturer', '12-12-2020', '01777048151', '40000'),
(5, 33, 'female', 'eee', 'dhaka', 'Lecturer', '12-12-2020', '01777048151', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `enroll`
--

CREATE TABLE `enroll` (
  `enid` int(100) NOT NULL,
  `courseid` int(100) NOT NULL,
  `instructorid` int(100) NOT NULL,
  `sid` int(100) NOT NULL,
  `grade` varchar(10) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enroll`
--

INSERT INTO `enroll` (`enid`, `courseid`, `instructorid`, `sid`, `grade`) VALUES
(1, 2, 4, 5, '0.00'),
(2, 2, 4, 5, '0.00'),
(3, 3, 5, 13, '0.00'),
(4, 2, 6, 5, '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `lid` int(11) NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `quantity` int(10) NOT NULL,
  `available` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`lid`, `book_name`, `quantity`, `available`) VALUES
(1, 'java', 24, 12),
(2, 'C for all', 23, 3),
(6, 'learning', 100, 70),
(8, 'atp', 100, 22),
(9, 'java for all', 100, 12),
(10, 'compiler', 299, 70),
(11, 'compiler PRO', 100, 70);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` int(100) NOT NULL,
  `senderid` int(100) NOT NULL,
  `receiverid` int(100) NOT NULL,
  `msgbody` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `senderid`, `receiverid`, `msgbody`) VALUES
(2, 4, 9, 'pay soon'),
(5, 4, 18, 'update all course'),
(10, 5, 11, 'good morning'),
(11, 5, 10, 'pay soon'),
(12, 4, 29, 'Active in 5 days');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `nid` int(100) NOT NULL,
  `cid` int(100) NOT NULL,
  `noticename` varchar(100) NOT NULL,
  `noticedescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(100) NOT NULL,
  `sid` int(100) NOT NULL,
  `pamount` int(20) NOT NULL,
  `pdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `sid`, `pamount`, `pdate`) VALUES
(1, 5, 30000, '2020-11-10'),
(2, 6, 90000, '2020-06-16');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `cgpa` varchar(10) NOT NULL,
  `department` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `admission_date` varchar(10) NOT NULL,
  `student_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `uid`, `cgpa`, `department`, `dob`, `admission_date`, `student_status`) VALUES
(5, 10, '3.00', 'cse', '1990-07-04', '2020-09-09', 'null'),
(6, 11, '3.00', 'eee', '1990-07-04', '2020-09-09', 'null'),
(8, 19, '3.00', 'eee', '1996-12-12', '2019-12-12', 'null'),
(13, 29, '3.90', 'eee', '07/02/1972', '2022-12-12', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `department` varchar(15) NOT NULL,
  `designation` varchar(15) NOT NULL,
  `salary` varchar(10) NOT NULL,
  `joindate` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `uid`, `department`, `designation`, `salary`, `joindate`, `address`, `gender`, `phone`) VALUES
(4, 18, 'cs', 'Lecturer', '40000', '2020-11-17', 'nator', 'male', '01777777'),
(5, 23, 'cs', 'Lecturer', '40000', '12-12-2020', 'dhaka', 'male', '01777048151'),
(6, 4, 'eee', 'Lecturer', '40000', '12-12-2020', 'barisal', 'female', '01777048151'),
(7, 4, 'csse', 'Lecturer', '20000', '12-12-2020', 'dhaka', 'female', '0177777777');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `dp` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `name`, `email`, `username`, `password`, `type`, `dp`, `status`) VALUES
(1, 'Asir Hameem', 'asirhameem@gmail.com', 'asirhameem', '123', 'Teacher', '', 'Inactive'),
(2, 'Shamima Zannat', 'shamimazannat@gmail.com', 'shamima', '123', 'Teacher', '', 'Inactive'),
(3, 'Prodipta Banarjee', 'pro@gmail.com', 'pro', '123', 'Teacher', '', 'Inactive'),
(4, 'shanjida Akter Hride', 'admin@gmail.com', 'abc', 'admin  ', '4', '', 'Active'),
(5, 'Lamia Kabir', 'lamia@gmail.com', 'lamia', 'lamia ', '4', '', 'Inactive'),
(10, 'Arafat Hossain', 'ar@gmail.com', 'arafat', 'arafat', '1', 'null', 'Active'),
(11, 'Safone Islam', 's@gmail.com', 'safone', 'safone', '1', 'null', 'Active'),
(16, 'loka pol', 'lok@g.cpn', 'lok', '1235', '3', 'null', 'active'),
(18, 'Mehedi Karim', 'k@g.com', 'kar', 'kar', '2', 'null', 'active'),
(19, 'shanjida hride', 'birdlove629@gmail.com', 'hride', '12345', '1', 'null', 'Inactive'),
(23, 'Alamin Islam', 'alamin@gmail.com', 'alanin', '12345', '2', 'null', 'Inactive'),
(28, 'rana', 'rana@gmail.com', 'rana', '1234', '3', 'null', 'Inactive'),
(29, 'Hasibul Hasan', 'hasib@gmail.com', 'hasib', 'hasib', '1', 'null', 'Inactive'),
(33, 'Rina Khan', 'rina@gmail.com', 'rina', '1234', '3', 'null', 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `warning`
--

CREATE TABLE `warning` (
  `warnid` int(20) NOT NULL,
  `adminid` int(20) NOT NULL,
  `uid` int(20) NOT NULL,
  `warning` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `warning`
--

INSERT INTO `warning` (`warnid`, `adminid`, `uid`, `warning`) VALUES
(4, 4, 9, 'pay fast'),
(6, 4, 18, 'update all grade'),
(11, 5, 16, 'lock grade soon'),
(12, 5, 10, 'pay fast'),
(13, 4, 29, 'update all grade');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `sid` (`sid`),
  ADD KEY `lid` (`lid`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`contentid`),
  ADD KEY `courseid` (`courseid`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `cteacher` (`cteacher`);

--
-- Indexes for table `document`
--
ALTER TABLE `document`
  ADD PRIMARY KEY (`docid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`eid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `enroll`
--
ALTER TABLE `enroll`
  ADD PRIMARY KEY (`enid`),
  ADD KEY `fk90` (`courseid`),
  ADD KEY `fk91` (`instructorid`),
  ADD KEY `fk92` (`sid`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `sid` (`sid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `uid` (`uid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `warning`
--
ALTER TABLE `warning`
  ADD PRIMARY KEY (`warnid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `contentid` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `docid` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `enid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `nid` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `warning`
--
ALTER TABLE `warning`
  MODIFY `warnid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `borrow_ibfk_2` FOREIGN KEY (`lid`) REFERENCES `library` (`lid`);

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `content_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `course` (`cid`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`cteacher`) REFERENCES `teacher` (`tid`);

--
-- Constraints for table `document`
--
ALTER TABLE `document`
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `fk9` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `fk90` FOREIGN KEY (`courseid`) REFERENCES `course` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk91` FOREIGN KEY (`instructorid`) REFERENCES `teacher` (`tid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk92` FOREIGN KEY (`sid`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `fk69` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `fk12` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
