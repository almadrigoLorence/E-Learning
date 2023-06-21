-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2021 at 12:25 PM
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
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities_tbl`
--

CREATE TABLE `activities_tbl` (
  `act_id` int(11) NOT NULL,
  `cou_id` int(11) NOT NULL,
  `act_title` varchar(1000) NOT NULL,
  `act_desc` varchar(10000) NOT NULL,
  `date_uploaded` varchar(1000) NOT NULL DEFAULT current_timestamp(),
  `date_modified` varchar(1000) NOT NULL DEFAULT current_timestamp(),
  `act_file` varchar(99) NOT NULL,
  `uid` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(1000) NOT NULL,
  `admin_user` varchar(1000) NOT NULL,
  `admin_pass` varchar(1000) NOT NULL,
  `first_name` varchar(99) NOT NULL,
  `last_name` varchar(99) NOT NULL,
  `m_name` varchar(99) NOT NULL,
  `sex` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`admin_id`, `admin_name`, `admin_user`, `admin_pass`, `first_name`, `last_name`, `m_name`, `sex`, `email`) VALUES
(1, 'Admin1', 'admin@username', 'admin@password', '', '', '', '', ''),
(2, 'Admin Lorence', 'admin', 'admin1', 'test', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_tbl`
--

CREATE TABLE `announcement_tbl` (
  `ann_id` int(11) NOT NULL,
  `ann_title` varchar(1000) DEFAULT NULL,
  `ann_desc` mediumtext DEFAULT NULL,
  `ann_start` date DEFAULT NULL,
  `ann_end` date DEFAULT NULL,
  `course_id` varchar(1000) DEFAULT NULL,
  `modified_by` varchar(1000) DEFAULT 'Administrator',
  `date_modified` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assignment_tbl`
--

CREATE TABLE `assignment_tbl` (
  `ass_id` int(11) NOT NULL,
  `cou_id` int(11) NOT NULL,
  `ass_title` varchar(1000) NOT NULL,
  `ass_desc` varchar(10000) NOT NULL,
  `date_uploaded` varchar(1000) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE `course_tbl` (
  `cou_id` int(11) NOT NULL,
  `cou_name` varchar(1000) DEFAULT NULL,
  `cou_instructor` varchar(1000) DEFAULT NULL,
  `cou_created` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_tbl`
--

INSERT INTO `course_tbl` (`cou_id`, `cou_name`, `cou_instructor`, `cou_created`) VALUES
(1, 'BSIT 4-1', '1', '2021-04-13 02:15:25');

-- --------------------------------------------------------

--
-- Table structure for table `examinee_files`
--

CREATE TABLE `examinee_files` (
  `file_id` int(11) NOT NULL,
  `file_name` varchar(99) NOT NULL,
  `file` longblob NOT NULL,
  `file_size` varchar(99) NOT NULL,
  `uploader` varchar(99) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `examinee_img`
--

CREATE TABLE `examinee_img` (
  `id` int(11) NOT NULL,
  `img` varchar(99) NOT NULL,
  `exmne_id` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examinee_img`
--

INSERT INTO `examinee_img` (`id`, `img`, `exmne_id`) VALUES
(1, '1.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `examinee_tbl`
--

CREATE TABLE `examinee_tbl` (
  `exmne_id` int(11) NOT NULL,
  `exmne_stud_number` varchar(50) DEFAULT '',
  `exmne_fullname` varchar(1000) DEFAULT NULL,
  `exmne_surname` varchar(100) NOT NULL,
  `exmne_middle` varchar(100) NOT NULL,
  `exmne_address` varchar(1000) DEFAULT NULL,
  `exmne_address_postal` int(100) NOT NULL,
  `exmne_place_of_birth` varchar(1000) DEFAULT NULL,
  `exmne_age` varchar(100) NOT NULL,
  `exmne_nationality` varchar(1000) DEFAULT NULL,
  `exmne_religion` varchar(1000) DEFAULT NULL,
  `exmne_contact` varchar(1000) DEFAULT NULL,
  `exmne_civil_status` varchar(100) DEFAULT NULL,
  `exmne_guardian` varchar(1000) DEFAULT NULL,
  `exmne_guardian_contact` varchar(1000) DEFAULT NULL,
  `exmne_course` varchar(1000) DEFAULT NULL,
  `exmne_gender` varchar(1000) DEFAULT NULL,
  `exmne_birthdate` varchar(1000) DEFAULT NULL,
  `exmne_year_level` varchar(1000) DEFAULT NULL,
  `exmne_email` varchar(1000) DEFAULT NULL,
  `exmne_password` varchar(1000) DEFAULT NULL,
  `exmne_status` varchar(1000) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examinee_tbl`
--

INSERT INTO `examinee_tbl` (`exmne_id`, `exmne_stud_number`, `exmne_fullname`, `exmne_surname`, `exmne_middle`, `exmne_address`, `exmne_address_postal`, `exmne_place_of_birth`, `exmne_age`, `exmne_nationality`, `exmne_religion`, `exmne_contact`, `exmne_civil_status`, `exmne_guardian`, `exmne_guardian_contact`, `exmne_course`, `exmne_gender`, `exmne_birthdate`, `exmne_year_level`, `exmne_email`, `exmne_password`, `exmne_status`) VALUES
(1, '201415031', 'Lorence', 'Almadrigo', 'V', NULL, 0, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'Male', '1997-10-29', 'Fourth year', 'versola.lorence@gmail.com', '123', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `exam_answers`
--

CREATE TABLE `exam_answers` (
  `exans_id` int(11) NOT NULL,
  `axmne_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `quest_id` int(11) NOT NULL,
  `exans_answer` varchar(1000) NOT NULL,
  `exans_status` varchar(1000) NOT NULL DEFAULT 'new',
  `exans_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_attempt`
--

CREATE TABLE `exam_attempt` (
  `examat_id` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL DEFAULT 0,
  `exam_id` int(11) NOT NULL,
  `examat_status` varchar(1000) NOT NULL DEFAULT 'used'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_question_tbl`
--

CREATE TABLE `exam_question_tbl` (
  `eqt_id` int(11) NOT NULL,
  `exam_id` int(11) NOT NULL,
  `exam_question` varchar(10000) NOT NULL,
  `exam_ch1` varchar(1000) NOT NULL,
  `exam_ch2` varchar(1000) NOT NULL,
  `exam_ch3` varchar(1000) NOT NULL,
  `exam_ch4` varchar(1000) NOT NULL,
  `exam_answer` varchar(1000) NOT NULL,
  `exam_status` varchar(1000) NOT NULL DEFAULT 'active',
  `exam_type` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `exam_tbl`
--

CREATE TABLE `exam_tbl` (
  `ex_id` int(11) NOT NULL,
  `cou_id` int(11) NOT NULL,
  `ex_title` varchar(1000) NOT NULL,
  `ex_time_limit` varchar(1000) NOT NULL,
  `ex_questlimit_display` int(11) NOT NULL,
  `ex_description` varchar(1000) NOT NULL,
  `ex_created` varchar(1000) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks_tbl`
--

CREATE TABLE `feedbacks_tbl` (
  `fb_id` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL,
  `fb_exmne_as` varchar(1000) NOT NULL,
  `fb_feedbacks` varchar(1000) NOT NULL,
  `fb_date` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `instructors_tbl`
--

CREATE TABLE `instructors_tbl` (
  `instructor_id` int(11) NOT NULL,
  `instructor_fullname` varchar(1000) DEFAULT NULL,
  `instructor_surname` varchar(100) NOT NULL,
  `instructor_middle` varchar(1) NOT NULL,
  `instructor_pass` varchar(100) DEFAULT NULL,
  `instructor_gender` varchar(100) DEFAULT NULL,
  `instructor_age` int(11) NOT NULL,
  `instructor_bdate` date DEFAULT NULL,
  `instructor_email` varchar(1000) DEFAULT NULL,
  `instructor_status` varchar(50) DEFAULT 'active',
  `cou_id` int(11) NOT NULL,
  `instructor_username` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructors_tbl`
--

INSERT INTO `instructors_tbl` (`instructor_id`, `instructor_fullname`, `instructor_surname`, `instructor_middle`, `instructor_pass`, `instructor_gender`, `instructor_age`, `instructor_bdate`, `instructor_email`, `instructor_status`, `cou_id`, `instructor_username`) VALUES
(1, 'James', 'Cortez', 'A', '123', 'Male', 0, '1997-07-10', 'jamescorteztv@gmail.com', 'active', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_img`
--

CREATE TABLE `instructor_img` (
  `userid` varchar(99) NOT NULL,
  `img` varchar(99) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor_img`
--

INSERT INTO `instructor_img` (`userid`, `img`, `id`) VALUES
('1', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lessons_tbl`
--

CREATE TABLE `lessons_tbl` (
  `lesson_id` int(11) NOT NULL,
  `cou_id` int(11) NOT NULL,
  `lesson_title` varchar(1000) NOT NULL,
  `lesson_desc` varchar(1000) NOT NULL,
  `date_uploaded` varchar(1000) NOT NULL DEFAULT current_timestamp(),
  `temp` varchar(99) NOT NULL,
  `uploader` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lessons_tbl`
--

INSERT INTO `lessons_tbl` (`lesson_id`, `cou_id`, `lesson_title`, `lesson_desc`, `date_uploaded`, `temp`, `uploader`) VALUES
(1, 1, 'UNIT 1 - CHAPTER 1', 'HISTORICAL ANTECEDENTS OF SCIENCE AND TECHNOLOGY', 'Tuesday 13th of April 2021, 10:22 AM', '60750068cf0b5', '1');

-- --------------------------------------------------------

--
-- Table structure for table `modules_tbl`
--

CREATE TABLE `modules_tbl` (
  `mdl_id` int(11) NOT NULL,
  `mdl_title` text NOT NULL,
  `mdl_desc` text NOT NULL,
  `lesson_id` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `myterms`
--

CREATE TABLE `myterms` (
  `term_id` int(11) NOT NULL,
  `cou_id` varchar(98) NOT NULL,
  `term_title` text NOT NULL,
  `term_desc` text NOT NULL,
  `exmne_idd` varchar(99) NOT NULL,
  `date_uploaded` varchar(1000) NOT NULL,
  `grade` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notification_tbl`
--

CREATE TABLE `notification_tbl` (
  `id` int(11) NOT NULL,
  `not_desc` text NOT NULL,
  `uploader` varchar(99) NOT NULL,
  `date_upload` varchar(1000) NOT NULL,
  `uniqid` varchar(99) NOT NULL,
  `cou_id` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification_tbl`
--

INSERT INTO `notification_tbl` (`id`, `not_desc`, `uploader`, `date_upload`, `uniqid`, `cou_id`) VALUES
(1, 'New Lesson', '1', '2021-04-13', '60750068cf0b5', '1');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_answers`
--

CREATE TABLE `quiz_answers` (
  `exans_id` int(11) NOT NULL,
  `axmne_id` varchar(99) NOT NULL,
  `quiz_id` varchar(99) NOT NULL,
  `quest_id` varchar(99) NOT NULL,
  `quiz_answer` varchar(99) NOT NULL,
  `quiz_status` varchar(99) NOT NULL,
  `quiz_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_attempt`
--

CREATE TABLE `quiz_attempt` (
  `id` int(11) NOT NULL,
  `quiz_id` varchar(99) NOT NULL,
  `exmne_id` varchar(99) NOT NULL,
  `quiz_status` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_question_tbl`
--

CREATE TABLE `quiz_question_tbl` (
  `qqt_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `quiz_question` varchar(1000) NOT NULL,
  `quiz_ch1` varchar(1000) NOT NULL,
  `quiz_ch2` varchar(1000) NOT NULL,
  `quiz_ch3` varchar(1000) NOT NULL,
  `quiz_ch4` varchar(1000) NOT NULL,
  `quiz_answer` varchar(1000) NOT NULL,
  `quiz_status` varchar(1000) NOT NULL,
  `quiz_type` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `quiz_tbl`
--

CREATE TABLE `quiz_tbl` (
  `quiz_id` int(11) NOT NULL,
  `cou_id` int(11) NOT NULL,
  `quiz_title` varchar(1000) NOT NULL,
  `quiz_time_limit` varchar(1000) NOT NULL,
  `quiz_questlimit_display` int(11) NOT NULL,
  `quiz_desc` varchar(1000) NOT NULL,
  `quiz_created` varchar(1000) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `topics_tbl`
--

CREATE TABLE `topics_tbl` (
  `topic_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `topic_title` varchar(1000) NOT NULL,
  `topic_desc` varchar(10000) NOT NULL,
  `date_uploaded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `files` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topics_tbl`
--

INSERT INTO `topics_tbl` (`topic_id`, `lesson_id`, `topic_title`, `topic_desc`, `date_uploaded`, `files`) VALUES
(1, 1, 'Chapter 1 - Science and Technology in the World', '<p><strong>Objectives</strong>: At the end of the topic, the readers are expected to;</p>\r\n\r\n<p>1. Understand how science and technology has changed over the past centuries.</p>\r\n\r\n<p>2. Described the roles of the different sectors of the society in the development of science across ages.</p>\r\n\r\n<p>3. Enumerate the technological advancements&nbsp; from ancient age to date.</p>\r\n\r\n<p>4. Discuss how scientific and technological developments affect society and evnironment.</p>\r\n\r\n<p>5. Explain the importance of the social media sites to modern day living.</p>\r\n\r\n<p>6. Be familiar with the important key elements in the communication process.</p>\r\n\r\n<div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\"><strong>&nbsp;KEY CONCEPTS</strong></div>\r\n\r\n<div style=\"background:#eeeeee;border:1px solid #cccccc;padding:5px 10px;\"><strong>Three-age system</strong> - a system of classifying ancient ages into groups based on tool developmental ages<br />\r\n<strong>Scientific revolution </strong>- period of great scientific intellectual achievements that contributed to essential changes in scientific investigations<br />\r\n<strong>Industrial revolution</strong> - period of complex technological inventions that eventually replaced human and animal forces<br />\r\n<strong>Information age</strong> - or digital age; the period characterized byu the change from traditional industry to an economy that is founded on computerazion of information.</div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '2021-04-13 02:31:41', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities_tbl`
--
ALTER TABLE `activities_tbl`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `admin_acc`
--
ALTER TABLE `admin_acc`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  ADD PRIMARY KEY (`ann_id`);

--
-- Indexes for table `assignment_tbl`
--
ALTER TABLE `assignment_tbl`
  ADD PRIMARY KEY (`ass_id`);

--
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`cou_id`);

--
-- Indexes for table `examinee_files`
--
ALTER TABLE `examinee_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indexes for table `examinee_img`
--
ALTER TABLE `examinee_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examinee_tbl`
--
ALTER TABLE `examinee_tbl`
  ADD PRIMARY KEY (`exmne_id`);

--
-- Indexes for table `exam_answers`
--
ALTER TABLE `exam_answers`
  ADD PRIMARY KEY (`exans_id`);

--
-- Indexes for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  ADD PRIMARY KEY (`examat_id`);

--
-- Indexes for table `exam_question_tbl`
--
ALTER TABLE `exam_question_tbl`
  ADD PRIMARY KEY (`eqt_id`);

--
-- Indexes for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  ADD PRIMARY KEY (`ex_id`);

--
-- Indexes for table `feedbacks_tbl`
--
ALTER TABLE `feedbacks_tbl`
  ADD PRIMARY KEY (`fb_id`);

--
-- Indexes for table `instructors_tbl`
--
ALTER TABLE `instructors_tbl`
  ADD PRIMARY KEY (`instructor_id`);

--
-- Indexes for table `instructor_img`
--
ALTER TABLE `instructor_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lessons_tbl`
--
ALTER TABLE `lessons_tbl`
  ADD PRIMARY KEY (`lesson_id`);

--
-- Indexes for table `modules_tbl`
--
ALTER TABLE `modules_tbl`
  ADD PRIMARY KEY (`mdl_id`);

--
-- Indexes for table `myterms`
--
ALTER TABLE `myterms`
  ADD PRIMARY KEY (`term_id`);

--
-- Indexes for table `notification_tbl`
--
ALTER TABLE `notification_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  ADD PRIMARY KEY (`exans_id`);

--
-- Indexes for table `quiz_attempt`
--
ALTER TABLE `quiz_attempt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_question_tbl`
--
ALTER TABLE `quiz_question_tbl`
  ADD PRIMARY KEY (`qqt_id`);

--
-- Indexes for table `quiz_tbl`
--
ALTER TABLE `quiz_tbl`
  ADD PRIMARY KEY (`quiz_id`);

--
-- Indexes for table `topics_tbl`
--
ALTER TABLE `topics_tbl`
  ADD PRIMARY KEY (`topic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities_tbl`
--
ALTER TABLE `activities_tbl`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  MODIFY `ann_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `assignment_tbl`
--
ALTER TABLE `assignment_tbl`
  MODIFY `ass_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `cou_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `examinee_files`
--
ALTER TABLE `examinee_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examinee_img`
--
ALTER TABLE `examinee_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `examinee_tbl`
--
ALTER TABLE `examinee_tbl`
  MODIFY `exmne_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exam_answers`
--
ALTER TABLE `exam_answers`
  MODIFY `exans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  MODIFY `examat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_question_tbl`
--
ALTER TABLE `exam_question_tbl`
  MODIFY `eqt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedbacks_tbl`
--
ALTER TABLE `feedbacks_tbl`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructors_tbl`
--
ALTER TABLE `instructors_tbl`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instructor_img`
--
ALTER TABLE `instructor_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lessons_tbl`
--
ALTER TABLE `lessons_tbl`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `modules_tbl`
--
ALTER TABLE `modules_tbl`
  MODIFY `mdl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `myterms`
--
ALTER TABLE `myterms`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notification_tbl`
--
ALTER TABLE `notification_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  MODIFY `exans_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz_attempt`
--
ALTER TABLE `quiz_attempt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz_question_tbl`
--
ALTER TABLE `quiz_question_tbl`
  MODIFY `qqt_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz_tbl`
--
ALTER TABLE `quiz_tbl`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics_tbl`
--
ALTER TABLE `topics_tbl`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
