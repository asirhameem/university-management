-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2021 at 07:02 PM
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
-- Database: `university`
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
  `semail` varchar(50) NOT NULL,
  `bdate` varchar(10) NOT NULL,
  `rdate` varchar(10) NOT NULL,
  `sid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`bid`, `lid`, `bookname`, `semail`, `bdate`, `rdate`, `sid`) VALUES
(5, 6, 'Deathly Hallows', 'min@gmail.com', '10-11-20', '10-11-21', 7),
(6, 5, 'Harry Potter', 'taw@gmail.com', '14-11-20', '16-11-20', 8);

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

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`contentid`, `courseid`, `contentname`, `contentpath`) VALUES
(6, 5, 'Asir Hameem', '1609873398.docx'),
(7, 5, '123', '1609873432.sql'),
(8, 5, 'Song', '1609937081.jpg'),
(9, 5, 'Asir Hameem', '1609995494.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(100) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `cdescription` varchar(1000) NOT NULL,
  `cteacher` int(100) NOT NULL,
  `cstart` varchar(10) NOT NULL,
  `cend` varchar(10) NOT NULL,
  `cpic` varchar(100) NOT NULL,
  `ccost` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `cdescription`, `cteacher`, `cstart`, `cend`, `cpic`, `ccost`) VALUES
(5, 'React', 'UI material using react javascript', 5, '2.00 PM', '5.00 PM', '', 200),
(6, 'Angular', 'Angular is a platform and framework for building single-page client applications using HTML and TypeScript. Angular is written in TypeScript. It implements core and optional functionality as a set of TypeScript libraries that you import into your apps.', 6, '11.00 AM', '2.00 PM', '', 200),
(7, 'Redux', 'Redux framework is one of the most popular, advanced, and free to use option panel frameworks for WordPress themes and plugins. Its flexibility gives you the freedom to create any type of options and settings for your WordPress project.', 5, '8.00 AM', '11.00 AM', '', 300);

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
  `gender` varchar(5) NOT NULL,
  `department` varchar(15) NOT NULL,
  `address` varchar(20) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `joindate` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `salary` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(8, 5, 5, 7, '0.00'),
(9, 5, 5, 8, '0.00');

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
(5, 'Harry Potter', 11, 10),
(6, 'Deathly Hallows', 12, 11),
(7, 'Sherlock Holmes', 10, 5),
(8, 'Vinchi Demons', 10, 5);

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
(1, '2020_12_27_205442_create_users_table', 1);

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

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`nid`, `cid`, `noticename`, `noticedescription`) VALUES
(12, 5, 'Asir Hameem', 'asdasdfasdfaf'),
(13, 5, '123', 'asdasdfasdfaf'),
(14, 5, 'Asir Hameem', 'asdasdfasdfaf'),
(15, 5, 'Asir Hameem Khan', 'asdasdfasdfaf'),
(16, 5, 'pro', '123sasd'),
(17, 5, 'Fahmida Khan', 'dfghj'),
(18, 5, 'Asir Hameem', 'asdfasdf');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pid` int(100) NOT NULL,
  `sid` int(100) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `pamount` int(20) NOT NULL,
  `pdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pid`, `sid`, `semail`, `pamount`, `pdate`) VALUES
(3, 7, 'min@gmail.com', 15000, '15-11-20'),
(4, 7, 'min@gmail.com', 15000, '16-11-20'),
(5, 8, 'taw@gmail.com', 15000, '15-11-20'),
(6, 8, 'taw@gmail.com', 15000, '16-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `cgpa` varchar(10) NOT NULL DEFAULT '0.00',
  `department` varchar(25) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `admission_date` varchar(10) NOT NULL,
  `student_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `uid`, `cgpa`, `department`, `dob`, `admission_date`, `student_status`) VALUES
(7, 17, '0.00', 'CSE', '31-03-98', '10-10-20', 'Regular'),
(8, 18, '0.00', 'CSE', '10-10-97', '10-11-98', 'Regular');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `department` varchar(40) NOT NULL,
  `designation` varchar(15) NOT NULL,
  `salary` varchar(10) NOT NULL,
  `joindate` varchar(10) NOT NULL,
  `address` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `uid`, `department`, `designation`, `salary`, `joindate`, `address`, `gender`, `phone`) VALUES
(5, 14, 'Computer Science Engineering', 'Lecturer', '75000', '20-10-20', 'Block C, Dhaka', 'Male', '01521400829'),
(6, 19, 'COE', 'Professor', '1000000', '20-10-20', 'Dhaka', 'Female', '12345678912');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(100) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `name`, `email`, `username`, `password`, `type`, `dp`, `status`) VALUES
(14, 'Asir Hameem', 'asirhameem@yahoo.com', 'hameem', '123', 'Teacher', '1609845711.jpg', 'Inactive'),
(17, 'Minhaz', 'min@gmail.com', 'min', '123', 'Student', '', 'Active'),
(18, 'Tawfique', 'taw@gmail.com', 'taw', '123', 'Student', '', 'Active'),
(19, 'Prodip', 'pro@gmail.com', 'pro', '123', 'Teacher', '', 'Active');

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
  ADD KEY `courseid` (`courseid`),
  ADD KEY `instructorid` (`instructorid`),
  ADD KEY `sid` (`sid`);

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
  ADD PRIMARY KEY (`nid`),
  ADD KEY `cid` (`cid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

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
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `contentid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `document`
--
ALTER TABLE `document`
  MODIFY `docid` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `eid` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `enroll`
--
ALTER TABLE `enroll`
  MODIFY `enid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `nid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

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
  ADD CONSTRAINT `document_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `enroll`
--
ALTER TABLE `enroll`
  ADD CONSTRAINT `enroll_ibfk_1` FOREIGN KEY (`courseid`) REFERENCES `course` (`cid`),
  ADD CONSTRAINT `enroll_ibfk_2` FOREIGN KEY (`instructorid`) REFERENCES `teacher` (`tid`),
  ADD CONSTRAINT `enroll_ibfk_3` FOREIGN KEY (`sid`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `notice`
--
ALTER TABLE `notice`
  ADD CONSTRAINT `notice_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `course` (`cid`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `student` (`student_id`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
