-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2020 at 12:29 PM
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
-- Database: `thesis`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_acc`
--

CREATE TABLE `admin_acc` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(1000) NOT NULL,
  `admin_user` varchar(1000) NOT NULL,
  `admin_pass` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_acc`
--

INSERT INTO `admin_acc` (`admin_id`, `admin_name`, `admin_user`, `admin_pass`) VALUES
(1, 'Admin1', 'admin@username', 'admin@password'),
(2, 'Admin Lorence', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_tbl`
--

CREATE TABLE `announcement_tbl` (
  `ann_id` int(11) NOT NULL,
  `ann_title` varchar(1000) DEFAULT NULL,
  `ann_desc` mediumtext,
  `ann_start` date DEFAULT NULL,
  `ann_end` date DEFAULT NULL,
  `course_id` varchar(1000) DEFAULT NULL,
  `modified_by` int(11) DEFAULT NULL,
  `date_modified` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE `course_tbl` (
  `cou_id` int(11) NOT NULL,
  `cou_name` varchar(1000) DEFAULT NULL,
  `cou_instructor` varchar(1000) DEFAULT NULL,
  `cou_created` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_tbl`
--

INSERT INTO `course_tbl` (`cou_id`, `cou_name`, `cou_instructor`, `cou_created`) VALUES
(9, 'BSIT 1-3', '7', '2020-05-10 03:16:48'),
(10, 'BSCS 2-1', '9', '2020-05-10 03:17:24'),
(11, 'BSOA 4-2', '10', '2020-05-21 07:43:19'),
(12, 'BSIT 4-4 ', '1', '2020-05-15 09:09:32'),
(13, 'BSIT 1-4', '10', '2020-05-22 04:04:16'),
(14, 'BAJOURN 2-1', '7', '2020-05-21 07:43:09'),
(15, 'BSIT 4-5', '9', '2020-05-15 09:16:41'),
(16, 'BSIT 1-5', '7', '2020-05-30 12:08:43'),
(17, 'BAJOURN 2-2', '2', '2020-05-23 03:44:25'),
(18, 'BAJOURN 2-3', '1', '2020-05-30 04:32:07'),
(19, 'BAJOURN 2-4', '7', '2020-05-23 03:44:46'),
(20, 'BAJOURN 2-5', '8', '2020-05-23 03:44:57'),
(21, 'BSCS 1-1', '5', '2020-06-01 01:18:53');

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
  `exmne_place_of_birth` varchar(1000) DEFAULT NULL,
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

INSERT INTO `examinee_tbl` (`exmne_id`, `exmne_stud_number`, `exmne_fullname`, `exmne_surname`, `exmne_middle`, `exmne_address`, `exmne_place_of_birth`, `exmne_nationality`, `exmne_religion`, `exmne_contact`, `exmne_civil_status`, `exmne_guardian`, `exmne_guardian_contact`, `exmne_course`, `exmne_gender`, `exmne_birthdate`, `exmne_year_level`, `exmne_email`, `exmne_password`, `exmne_status`) VALUES
(9, '201415033', 'Rolo', 'Valena', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 'Male', '1997-10-29', 'Second year', 'versola.lorence@gmail.com', 'e13c4ne3ro4lrncx', 'active'),
(10, '201815265', 'Hadaza Marizen ', 'Crisostomo', 'M', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '14', 'Female', '2000-08-24', 'Second year', 'hadaza.marizen@gmail.com', '123', 'Active'),
(13, '2014123135', 'Jhon Norman ', 'Fabregas', 'K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', 'Male', '1999-12-15', 'First year', 'sample@gmail.com', 'normz123', 'Active'),
(14, '222222222', 'Leonard', 'Ramos', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', 'Male', '2020-12-31', 'First year', 'asdasdasdasds@gmail.com', 'normznormznormz', 'Active'),
(15, '201415031', 'Lorence', 'Versola', 'V', 'Blk 62 Lot 4 Holiday Homes Phase 2, Biclatan General Trias Cavite', 'Quezon City', 'Filipino', 'Baptis, Christian', '09569960440', 'Single', 'Lorna V. Almadrigo', '09183938574', '12', 'Male', '1997-10-29', 'Fourth year', 'lorence.versola@gmail.com', 'e13c4ne3ro4lrncx', 'Active'),
(16, '201415155', 'Oliver ', 'Valenciano', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '11', 'Male', '1997-07-05', 'Fourth year', 'oliver2020@gmail.com', 'oliver123', 'Active'),
(17, '201415034', 'Mariel', 'Cuntapay', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', 'Female', '1999-12-22', 'First year', 'mariel@gmail.com', 'bbytaba', 'Active'),
(18, '201503135', 'Jannah Lorei', 'Almadrigo', 'V', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', 'Female', '2012-04-14', 'First year', 'janningning@gmail.com', 'pass123', 'Active'),
(19, '201655689', 'Sergio Calvin', 'Ligam', 'H', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', 'Male', '2000-06-10', 'First year', 'bby@gmail.com', 'pass123', 'Active'),
(20, '201632543', 'Aurel', 'Simpson ', 'B', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '14', 'Female', '2020-05-29', 'Second year', '323@gmail.com', '123', 'Active'),
(21, '2017123456', 'Juan ', 'Dela Cruz', 'A', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '19', 'Male', '1998-11-11', 'Second year', 'juan123@gmail.com', 'juanpogi', 'Active'),
(22, '2014151515', 'Lorence', 'Almadrigo', 'V', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12', 'Male', '1997-10-29', 'Fourth year', 'lorence@gmail.com', '123', 'Active'),
(23, '201612345', 'Samson', 'Vidal', 'E', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10', 'Male', '1999-04-20', 'Second year', 'samson@gmail.com', 'samson123', 'Active'),
(24, '201623654', 'Jessica', 'Ambil', 'S', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '14', 'Female', '1998-05-05', 'Second year', 'jessica123@gmail.com', 'jessica123', 'Active'),
(25, '20172531', 'Henry', 'Dela Cruz', 'H', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '9', 'Male', '1999-02-03', 'First year', 'henry2020@gmail.com', 'henry', 'Active'),
(26, '201304556', 'Elizalde', 'Mirador', 'O', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12', 'Male', '1995-06-05', 'Fourth year', 'eli@gmail.com', 'sample', 'Active'),
(27, '20145648', 'Kenneth', 'Pamplona', 'V', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '12', 'Male', '1997-09-07', 'Fourth year', 'kenken@gmail.com', '123', 'Active'),
(28, '20184564', 'Erica', 'Nanol', 'J', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '14', 'Female', '2000-12-13', 'Second year', 'erica123@gmail.com', 'pass123', 'Active');

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
  `exans_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_answers`
--

INSERT INTO `exam_answers` (`exans_id`, `axmne_id`, `exam_id`, `quest_id`, `exans_answer`, `exans_status`, `exans_created`) VALUES
(31, 15, 16, 42, 'a', 'new', '2020-06-04 05:28:31');

-- --------------------------------------------------------

--
-- Table structure for table `exam_attempt`
--

CREATE TABLE `exam_attempt` (
  `examat_id` int(11) NOT NULL,
  `exmne_id` int(11) NOT NULL DEFAULT '0',
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
  `exam_status` varchar(1000) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_question_tbl`
--

INSERT INTO `exam_question_tbl` (`eqt_id`, `exam_id`, `exam_question`, `exam_ch1`, `exam_ch2`, `exam_ch3`, `exam_ch4`, `exam_answer`, `exam_status`) VALUES
(6, 8, 'sa', 'd', 'a', 'c', 'g', 'g', 'active'),
(7, 9, 'ASDHASDIASDASD', 'a', 'b', 'c', 'd', 'd', 'active'),
(9, 12, 'asdsadsadasdasdasd', 'd', 'c', 'b', 'd', '', 'active'),
(10, 12, 'OIJASDJIOJSKE  ; : â€˜ ( ))', 'a', 'b', 'c', 'd', 'd', 'active'),
(11, 8, 'asdasd', 'a', 'as', 'ds', 'g', 'as', 'active'),
(13, 8, 'Students   in   your   history   class   are   having   difï¬culty   understanding   the   signiï¬cance   of   World   War   II.Â  What   activities   could   help   students   get   more   engaged', 'Students   create   YouTube   videos   describing   key   battles   in   World   War   IIÂ  ', 'Teacher   creates   a   ï¬nal   exam   in   Forms   to   give   students   a   grade   on   what   they   know', 'Students   use   the   Explore   Tool   to   search   for   more   information   in   Docs', ' Students   answer   questions   at   the   end   of   the   chapter   on   World   War   IIÂ ', 'Students   use   the   Explore   Tool   to   search   for   more   information   in   Docs', 'active'),
(16, 10, 'Students in your history class are having difï¬culty understanding the signiï¬cance of World War II.  What activities could help students get more engaged?', 'Students create YouTube videos describing key battles in World War II ', 'Teacher creates a ï¬nal exam in Forms to give students a grade on what they know', 'Students use the Explore Tool to search for more information in Docs', 'Students answer questions at the end of the chapter on World War II', 'Students use the Explore Tool to search for more information in Docs', 'active'),
(19, 9, 'AWit', 'a', 'b', 'c', 'd', 'b', 'active'),
(20, 11, 'Another name for research that occurs â€œpost hocâ€ is ', 'experimental', 'correlational', 'quasi-experimental', 'historical', 'quasi-experimental', 'active'),
(21, 11, ' A nondirectional research hypothesis is similar to a directional hypothesis in that both ', 'specify the direction of the difference between groups', 'reflect differences between groups', ' are nonspecific regarding the direction of group differences', 'make no allusion to group differences', 'reflect differences between groups', 'active'),
(22, 11, 'If the hanging wall has moved down, the fault is ', 'reversed', 'normal', 'strike-slip', 'indeterminate', 'normal', 'active'),
(23, 11, 'The first president of the United States was ', 'Washington', 'Jefferson', 'Lincoln', 'Kennedy', 'Washington', 'active'),
(24, 11, 'The current population of New York City is ', 'More than 15,000,000 ', 'Less than 15,000,000 ', 'More than 25,000,000 ', 'Indeterminate', 'More than 15,000,000 ', 'active'),
(25, 13, 'assd', 'a', 'b', 'c', 'd', 'd', 'active'),
(26, 14, 'dasd', 'a', 'b', 'c', 'd', 'b', 'active'),
(27, 14, '3213123123', 'a', 'b', 'c', 'd', 'b', 'active'),
(28, 14, 'What is this ', 'a', 'b', 'c', 'd', 'd', 'active'),
(29, 14, 'Whos tasdasdasd', 'a', 'b', 'c', 'd', 'c', 'active'),
(31, 15, 'hnu iurgauui', 'a', 'b', 'c', 'd', 'c', 'active'),
(32, 15, 'asdasdhmnqweop', 'a', 'b', 'c', 'd', 'b', 'active'),
(33, 15, 'asdasdqweqwe', 'a', 'b', 'c', 'd', 'd', 'active'),
(35, 15, 'sadqweqeasdasd', 'a', 'b', 'c', 'd', 'a', 'active'),
(36, 15, 'ewqeqwewqeqwe', 'a', 'b', 'c', 'd', 'c', 'active'),
(37, 15, 'qweqwesasase', 'a', 'b', 'c', 'd', 'd', 'active'),
(38, 15, 'wqeqraras', 'a', 'b', 'c', 'd', 'd', 'active'),
(39, 15, 'eqweqweqweqwe', 'a', 'b', 'c', 'd', 'd', 'active'),
(40, 15, 'asdasd', 'a', 'b', 'c', 'd', 'd', 'active'),
(41, 15, 'qweqweasasd', 'a', 'b', 'c', 'd', 'c', 'active'),
(42, 16, 'asdqlwjk ehwqemhlqwheqweqwmhehqwe', 'a', 'b', 'c', 'd', 'd', 'active');

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
  `ex_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
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

--
-- Dumping data for table `feedbacks_tbl`
--

INSERT INTO `feedbacks_tbl` (`fb_id`, `exmne_id`, `fb_exmne_as`, `fb_feedbacks`, `fb_date`) VALUES
(9, 10, 'Hadaza Marizen ', 'qwefdssdsd', 'June 01, 2020 - 10:06 am'),
(10, 10, 'Anonymous', 'qweqweasd', 'June 01, 2020 - 10:06 am'),
(11, 10, 'Hadaza Marizen ', 'asdqwewqewe', 'June 01, 2020 - 11:06 am');

-- --------------------------------------------------------

--
-- Table structure for table `instructors_tbl`
--

CREATE TABLE `instructors_tbl` (
  `teacher_id` int(11) NOT NULL,
  `teacher_fullname` varchar(1000) DEFAULT NULL,
  `teacher_surname` varchar(100) NOT NULL,
  `teacher_middle` varchar(1) NOT NULL,
  `teacher_pass` varchar(100) DEFAULT NULL,
  `teacher_gender` varchar(100) DEFAULT NULL,
  `teacher_bdate` varchar(100) DEFAULT NULL,
  `teacher_email` varchar(1000) DEFAULT NULL,
  `teacher_status` varchar(50) DEFAULT 'active',
  `cou_id` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructors_tbl`
--

INSERT INTO `instructors_tbl` (`teacher_id`, `teacher_fullname`, `teacher_surname`, `teacher_middle`, `teacher_pass`, `teacher_gender`, `teacher_bdate`, `teacher_email`, `teacher_status`, `cou_id`) VALUES
(1, 'John Kenneth ', 'Martinez', 'B', 'pogi123', 'male', '2020-12-31', 'ranjiku2020@gmail.com', 'active', ''),
(2, 'Karl ', 'Raynera', 'S', 'speedlangs', 'male', '2020-12-31', 'karlzxc@gmail.com', 'active', ''),
(3, 'Junell ', 'Olitoquit', 'B', 'junjun2020', 'male', '2020-12-31', 'juneeelll@gmail.com', 'active', ''),
(4, 'Biyen ', 'Estacio', 'G', 'biyenpogi', 'male', '1985-05-05', 'biyenFatBoy@gmail.com', 'active', ''),
(5, 'Joshua ', 'Balando', 'S', 'mave123', 'male', '1998-01-01', 'joshua@gmail.com', 'active', ''),
(6, 'Marvelyn ', 'Balando', 'E', 'maeve123', 'female', '1998-02-02', 'marvsloves@gmail.com', 'active', ''),
(7, 'Camila ', 'Figueroa', 'A', 'potaena123', 'female', '1997-03-03', 'camila@gmail.com', 'active', ''),
(8, 'John Philip ', 'Gado', 'V', 'nhoknhok', 'male', '1998-05-05', 'johnphilipgado@gmail.com', 'active', ''),
(9, 'Lorence', 'Almadrigo', 'V', 'e13c4ne3ro4lrncx', 'male', '1997-10-29', 'versola.lorence@gmail.com', 'active', ''),
(10, 'John Paul ', 'Polido', 'S', 'sample', 'male', '1995-04-06', 'jipeh123@gmail.com', 'active', ''),
(11, 'Sam ', 'Pinto', 'G', '123', 'female', '2020-05-29', 'sam@gmail.com', 'active', '');

-- --------------------------------------------------------

--
-- Table structure for table `lessons_tbl`
--

CREATE TABLE `lessons_tbl` (
  `lesson_id` int(11) NOT NULL,
  `cou_id` int(11) NOT NULL,
  `lesson_title` varchar(1000) NOT NULL,
  `lesson_desc` varchar(1000) NOT NULL,
  `date_uploaded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`cou_id`);

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
  ADD PRIMARY KEY (`teacher_id`);

--
-- Indexes for table `lessons_tbl`
--
ALTER TABLE `lessons_tbl`
  ADD PRIMARY KEY (`lesson_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  MODIFY `ann_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `cou_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `examinee_tbl`
--
ALTER TABLE `examinee_tbl`
  MODIFY `exmne_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `exam_answers`
--
ALTER TABLE `exam_answers`
  MODIFY `exans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  MODIFY `examat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `exam_question_tbl`
--
ALTER TABLE `exam_question_tbl`
  MODIFY `eqt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `feedbacks_tbl`
--
ALTER TABLE `feedbacks_tbl`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `instructors_tbl`
--
ALTER TABLE `instructors_tbl`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lessons_tbl`
--
ALTER TABLE `lessons_tbl`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
