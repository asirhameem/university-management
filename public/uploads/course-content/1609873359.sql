-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 07:02 PM
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
-- Database: `universitymanagementsystem`
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
(1, 1, 'Harry Potter', 'tasin@gmail.com', '10-11-20', '15-11-20', 1),
(2, 3, 'Godfather', 'tasin@gmail.com', '10-11-20', '13-11-20', 1),
(3, 4, 'Da Vinci Code', 'tazin@gmail.com', '10-11-20', '20-11-20', 2),
(4, 4, 'Da Vinci Code', 'tasin@gmail.com', '14-11-20', '16-11-20', 1);

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
(1, 1, 'Project Management', 'assets/uploads/contents/Hameem(17-33856-1).docx'),
(2, 2, 'Management', 'assets/uploads/contents/MGT-3203-Engineering_Management_Course_Outline with CLOs (Fall 20-21).docx'),
(3, 1, 'Management', 'assets/uploads/contents/IMG_20190806_104649.jpg'),
(4, 2, 'I got horses in my back', 'assets/uploads/contents/IMG_20190806_114033.jpg'),
(5, 1, 'Hameem Document', 'assets/uploads/contents/IMG_20190806_085333.jpg');

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
  `cpic` varchar(100) NOT NULL,
  `ccost` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`, `cdescription`, `cteacher`, `cstart`, `cend`, `cpic`, `ccost`) VALUES
(1, 'React', 'React is a frontend framework', 3, '2.00 PM', '5.00 PM', '', 100),
(2, 'Redux', 'Redux is predictable state container.', 3, '12.30 PM', '2.00 PM', ' ', 100),
(3, 'Angular', 'Angular is a platform and framework', 1, '2.00 PM', '5.00 PM', '', 200),
(4, 'Vue', 'Vue.js is an open-source framework', 1, '12.30 PM', '2.00 PM', '', 300);

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
(3, 1, 3, 1, '0.00'),
(4, 1, 3, 2, '0.00'),
(5, 1, 3, 3, '0.00'),
(6, 1, 3, 4, '0.00'),
(7, 1, 3, 5, '0.00');

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
(1, 'Harry Potter', 15, 10),
(2, 'Angles and Demons', 15, 14),
(3, 'Godfather', 11, 11),
(4, 'Da Vinci Code', 5, 3);

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
(5, 1, 'Quiz 1', 'Dear students your quiz 1 will be held on Wednesday during class hour'),
(9, 1, 'Quiz 2', 'On Monday'),
(10, 2, 'Quiz 1', 'asdfasdfasdf');

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
(1, 1, 'tasin@gmail.com', 15000, '15-11-20'),
(2, 2, 'tazin@gmail.com', 15000, '16-11-20');

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
(1, 4, '0.00', 'CSE', '31-03-98', '10-10-20', 'Regular'),
(2, 5, '0.00', 'CSE', '10-10-97', '10-11-20', 'Regular'),
(3, 6, '0.00', 'CSE', '14-02-97', '10-12-18', 'Regular'),
(4, 7, '0.00', 'CSE', '12-10-97', '10-11-98', 'Regular'),
(5, 9, '0.00', 'CSE', '31-03-98', '10-10-20', 'Regular'),
(6, 8, '0.00', 'CSE', '31-03-98', '10-10-20', 'Regular');

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
(1, 1, 'Computer Science Engineering', 'Associative Pro', '1000000', '20-10-20', 'Chittagong, Banglade', 'Male', '88012536545236'),
(2, 2, 'Housemaking', 'Professor', '1000000000', '01-01-98', 'Bandarban', 'Female', '01816237889'),
(3, 3, 'Computer Science Engineering', 'Professor', '75000', '10-10-98', 'Dhaka', 'Female', '01121522153'),
(4, 12, 'COE', 'Lecturer', '10000', '20-10-20', 'Dhaka', 'Male', '01121522153');

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
(1, 'Asir Hameem', 'asirhameem@gmail.com', 'asirhameem', '123', 'Teacher', 'assets/uploads/IMG_20190806_114031.jpg', 'Inactive'),
(2, 'Shamima Zannat', 'shamimazannat@gmail.com', 'shamima', '123', 'Teacher', '', 'Inactive'),
(3, 'Prodipta ', 'pro@gmail.com', 'pro', 'TVRJeg==', 'Teacher', 'assets/uploads/IMG_20190806_085333.jpg', 'Inactive'),
(4, 'Tasin', 'tasin@gmail.com', 'tasin', '123', 'Student', '', 'Active'),
(5, 'Umme Salma', 'tazin@gmail.com', 'tazin', '123', 'Student', 'assets/uploads/IMG_20201022_183431_550.jpg', 'Active'),
(6, 'Saqif Haq', 'saq@gmail.com', 'haque', '123', 'Student', '', 'Active'),
(7, 'Minhazul ', 'min@gmail.com', 'min', '123', 'Student', '', 'Active'),
(8, 'Tawfique ', 'taw@gmail.com', 'taw', '123', 'Student', '', 'Active'),
(9, 'Cooper', 'coop@gmail.com', 'coop', '123', 'Student', '', 'Active'),
(10, 'Abu Sayed Khan', 'abbu@gmail.com', 'abbu', '123', 'Teacher', '', 'Inactive'),
(11, 'Asir Hameem', 'asirhameem@gmail.com', 'asirhameem', '123', 'Teacher', 'assets/uploads/IMG_20190806_114031.jpg', 'Inactive'),
(12, 'Rafat Bhai', 'rafat@gmail.com', 'rafat', 'MTIz', 'Teacher', 'assets/uploads/IMG_20190806_081911.jpg', 'Inactive'),
(13, 'tazin', 'tazz@gmail.com', 'tazzzz', 'MTIz', 'Teacher', '', 'Inactive');

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
-- Indexes for table `user`
--
ALTER TABLE `user`
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
  MODIFY `bid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `contentid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `enid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `nid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `pid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

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
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `user` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
