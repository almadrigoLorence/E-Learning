-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 05:12 AM
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
  `date_uploaded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `date_modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activities_tbl`
--

INSERT INTO `activities_tbl` (`act_id`, `cou_id`, `act_title`, `act_desc`, `date_uploaded`, `date_modified`) VALUES
(1, 12, 'Activity #1 BSIT 4-4', '<h3>2.1 Uninitialized variable</h3>\r\n\r\n<blockquote>\r\n<p>A declared variable but not yet assigned with a value (<em>uninitialized</em>) is by default&nbsp;<code>undefined</code>.</p>\r\n</blockquote>\r\n\r\n<p>Plain and simple:</p>\r\n\r\n<pre>\r\n<code>let myVariable;\r\nmyVariable; // =&gt; undefined</code></pre>\r\n\r\n<p><code>myVariable</code>&nbsp;is declared and not yet assigned with a value. Accessing the variable evaluates to&nbsp;<code>undefined</code>.</p>\r\n\r\n<p>An efficient approach to solve the troubles of uninitialized variables is whenever possible&nbsp;<em>assign an initial value</em>. The less the variable exists in an uninitialized state, the better.</p>\r\n\r\n<p>Ideally, you would assign a value right away after declaration&nbsp;<code>const myVariable = &#39;Initial value&#39;</code>. But that&rsquo;s not always possible.</p>\r\n\r\n<p><strong>Tip 1: Favor&nbsp;<code>const</code>, otherwise use&nbsp;<code>let</code>, but say goodbye to&nbsp;<code>var</code></strong></p>\r\n\r\n<p>In my opinion, one of the best features of ECMAScript 2015 is the new way to declare variables using&nbsp;<code>const</code>&nbsp;and&nbsp;<code>let</code>. It is a big step forward.</p>\r\n\r\n<p><code>const</code>&nbsp;and&nbsp;<code>let</code>&nbsp;are&nbsp;<em>block scoped</em>&nbsp;(contrary to older function scoped&nbsp;<code>var</code>) and exist in a&nbsp;<a href=\"https://dmitripavlutin.com/variables-lifecycle-and-why-let-is-not-hoisted/#5-let-variables-lifecycle\">temporal dead zone</a>&nbsp;until the declaration line.</p>\r\n\r\n<p>I recommend&nbsp;<code>const</code>&nbsp;variable when its value is not going to change. It creates an&nbsp;<a href=\"https://mathiasbynens.be/notes/es6-const\">immutable binding</a>.</p>\r\n\r\n<p>One of the nice features of&nbsp;<code>const</code>&nbsp;is that&nbsp;<em>you must assign an initial value</em>&nbsp;to the variable&nbsp;<code>const myVariable = &#39;initial&#39;</code>. The variable is not exposed to the uninitialized state and accessing&nbsp;<code>undefined</code>&nbsp;is impossible.</p>\r\n', '2021-01-05 03:43:22', '2021-01-16 16:58:22'),
(3, 0, 'Sample Activity #1', '<h1><span style=\"font-family:Comic Sans MS,cursive\">SAMPLE ACTIVITY TEST</span></h1>\r\n', '2021-01-18 06:09:52', '2021-01-18 06:09:52'),
(5, 0, 'Sample Activity #1232', '<p>qweqweqwe</p>\r\n', '2021-01-18 06:09:41', '2021-01-18 06:09:41'),
(9, 12, 'Sample3InstructorOonlyJUancarlo13', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2021-02-12 13:56:13', '2021-02-12 13:56:13');

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
(2, 'Admin Lorence', 'admin', 'admin', 'test', '', '', '', '');

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
  `date_modified` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcement_tbl`
--

INSERT INTO `announcement_tbl` (`ann_id`, `ann_title`, `ann_desc`, `ann_start`, `ann_end`, `course_id`, `modified_by`, `date_modified`) VALUES
(44, 'test', '', '2021-01-22', '2021-02-05', '10,11,12,13,14,15', 'Administrator', '0000-00-00'),
(45, 'Sample Announcement#1', '<p>Dear Students,</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p>\r\n', '2021-02-04', '2021-03-02', '12', 'Administrator', '0000-00-00'),
(46, 'Sample Announcement#2', '<p>Dear Students,</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p>\r\n', '2021-02-04', '2021-03-02', '12', 'Administrator', '0000-00-00'),
(47, 'Sample Announcement#3', '<p>Dear Students,</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.&nbsp;</p>\r\n', '2021-02-04', '2021-03-02', '12', 'Administrator', '0000-00-00'),
(48, 'Sample Announcement #423 by Teachers', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br />\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2021-02-11', '2021-03-03', '12', 'Administrator', '0000-00-00'),
(49, 'qweqwe', '<p>qweqwe</p>\r\n', '2021-02-25', '2021-02-28', '', '13', '0000-00-00'),
(50, 'pokwangasd', '<p>asdasdasdasd</p>\r\n', '2021-02-23', '2021-03-04', '', '13', '0000-00-00'),
(51, 'qweqwe515124', '<p>qweqwe</p>\r\n', '2021-02-16', '2021-03-12', '12', '13', '0000-00-00'),
(52, 'asdasd123123', '<p>asdasdasd</p>\r\n', '2021-02-25', '2021-03-04', '12,22', '13', '0000-00-00'),
(53, 'qweqweqweSampleasdasd', '<p>asdassdasdas</p>\r\n', '2021-02-18', '2021-03-03', '12', '13', '2021-02-21'),
(54, 'SampleAnnouncement#15', '<p>Sample Description 3#14</p>\r\n', '2021-02-16', '2021-02-26', '12', '13', '2021-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `assignment_tbl`
--

CREATE TABLE `assignment_tbl` (
  `ass_id` int(11) NOT NULL,
  `cou_id` int(11) NOT NULL,
  `ass_title` varchar(1000) NOT NULL,
  `ass_desc` varchar(10000) NOT NULL,
  `date_uploaded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment_tbl`
--

INSERT INTO `assignment_tbl` (`ass_id`, `cou_id`, `ass_title`, `ass_desc`, `date_uploaded`) VALUES
(3, 0, 'test', '<p>SAMPLE ASSIGNMENETqweqweqwe</p>\r\n', '2021-01-25 23:56:44');

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
(9, 'BSIT 1-3', '7', '2020-05-10 03:16:48'),
(10, 'BSCS 2-1', '9', '2020-05-10 03:17:24'),
(11, 'BSOA 4-2', '10', '2020-05-21 07:43:19'),
(12, 'BSIT 4-4 ', '13', '2021-01-07 07:45:59'),
(13, 'BSIT 1-4', '10', '2020-05-22 04:04:16'),
(14, 'BAJOURN 2-1', '7', '2020-05-21 07:43:09'),
(15, 'BSIT 4-5', '9', '2020-05-15 09:16:41'),
(16, 'BSIT 1-5', '7', '2020-05-30 12:08:43'),
(17, 'BAJOURN 2-2', '2', '2020-05-23 03:44:25'),
(18, 'BAJOURN 2-3', '1', '2020-05-30 04:32:07'),
(19, 'BAJOURN 2-4', '7', '2020-05-23 03:44:46'),
(20, 'BAJOURN 2-5', '12', '2021-01-07 07:25:32'),
(21, 'BSCS 1-1', '14', '2021-01-15 08:15:02'),
(22, 'BSIT 4-6', '13', '2021-01-07 07:49:42');

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

INSERT INTO `examinee_tbl` (`exmne_id`, `exmne_stud_number`, `exmne_fullname`, `exmne_surname`, `exmne_middle`, `exmne_address`, `exmne_place_of_birth`, `exmne_age`, `exmne_nationality`, `exmne_religion`, `exmne_contact`, `exmne_civil_status`, `exmne_guardian`, `exmne_guardian_contact`, `exmne_course`, `exmne_gender`, `exmne_birthdate`, `exmne_year_level`, `exmne_email`, `exmne_password`, `exmne_status`) VALUES
(9, '201415033', 'Rolo', 'Valena', 'A', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '10', 'Male', '1997-10-29', 'Second year', 'versola.lorence@gmail.com', 'e13c4ne3ro4lrncx', 'active'),
(13, '2014123135', 'Jhon Norman ', 'Fabregas', 'K', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '9', 'Male', '1999-12-15', 'First year', 'sample@gmail.com', 'normz123', 'Active'),
(14, '222222222', 'Leonard', 'Ramos', 'S', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '9', 'Male', '2020-12-31', 'First year', 'asdasdasdasds@gmail.com', 'normznormznormz', 'Active'),
(15, '201415031', 'Lorence', 'Almadrigo', 'V', 'Blk 62 Lot 4 Holiday Homes Phase 2, Biclatan General Trias Cavite', 'Quezon City', '', 'Filipino', 'Baptis, Christian', '09569960440', 'Single', 'Lorna V. Almadrigo', '09183938574', '12', '', '', 'Fourth year', 'versola.lorence@gmail.com', 'e13c4ne3ro4lrncx', 'Active'),
(16, '201415155', 'Oliver ', 'Valenciano', 'S', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '11', 'Male', '1997-07-05', 'Fourth year', 'oliver2020@gmail.com', 'oliver123', 'Active'),
(19, '201655689', 'Sergio Calvin', 'Ligam', 'H', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '9', 'Male', '2000-06-10', 'First year', 'bby@gmail.com', 'pass123', 'Active'),
(23, '201612345', 'Samson', 'Vidal', 'E', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '10', 'Male', '1999-04-20', 'Second year', 'samson@gmail.com', 'samson123', 'Active'),
(25, '20172531', 'Henry', 'Dela Cruz', 'H', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '9', 'Male', '1999-02-03', 'First year', 'henry2020@gmail.com', 'henry', 'Active'),
(26, '201304556', 'Elizalde', 'Mirador', 'O', NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, '12', 'Male', '1995-06-05', 'Fourth year', 'eli@gmail.com', 'sample', 'Active'),
(31, '201510840', 'Eman', 'Doctolero', 'S', 'BLK A 20 LOT 21 BRGY DI MALAMAN ,', 'Manila', '', 'Filipino', 'Iglesia ni chris brown -10pts', '0923495123411', 'Single', 'Aling Nena', '09213413213', '12', 'Female', '1997-01-01', 'Fourth year', 'sample3@gmail.com', '213', 'Active');

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

--
-- Dumping data for table `exam_answers`
--

INSERT INTO `exam_answers` (`exans_id`, `axmne_id`, `exam_id`, `quest_id`, `exans_answer`, `exans_status`, `exans_created`) VALUES
(31, 15, 16, 42, 'a', 'new', '2020-06-04 05:28:31'),
(32, 15, 17, 43, 'd', 'new', '2021-01-05 00:50:25'),
(33, 31, 18, 49, 'a', 'new', '2021-01-07 07:58:38'),
(34, 31, 18, 50, 'c', 'new', '2021-01-07 07:58:38'),
(35, 31, 18, 48, 'a', 'new', '2021-01-07 07:58:38'),
(36, 31, 17, 44, 'c', 'new', '2021-01-07 07:59:48'),
(37, 31, 17, 47, 'a', 'new', '2021-01-07 07:59:48'),
(38, 31, 17, 45, 'c', 'new', '2021-01-07 07:59:48'),
(39, 31, 17, 43, 'a', 'new', '2021-01-07 07:59:48'),
(40, 31, 17, 46, 'a', 'new', '2021-01-07 07:59:48'),
(41, 31, 19, 68, 'test', 'new', '2021-02-06 14:40:03'),
(42, 31, 19, 67, 'Correct Answer', 'new', '2021-02-06 14:40:03'),
(43, 31, 0, 0, '', 'new', '2021-02-20 16:59:27'),
(44, 31, 0, 1, '', 'new', '2021-02-20 16:59:27');

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

--
-- Dumping data for table `exam_attempt`
--

INSERT INTO `exam_attempt` (`examat_id`, `exmne_id`, `exam_id`, `examat_status`) VALUES
(13, 31, 18, 'used'),
(14, 31, 17, 'used'),
(15, 31, 19, 'used'),
(16, 31, 0, 'used');

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

--
-- Dumping data for table `exam_question_tbl`
--

INSERT INTO `exam_question_tbl` (`eqt_id`, `exam_id`, `exam_question`, `exam_ch1`, `exam_ch2`, `exam_ch3`, `exam_ch4`, `exam_answer`, `exam_status`, `exam_type`) VALUES
(7, 9, 'ASDHASDIASDASD', 'a', 'b', 'c', 'd', 'd', 'active', ''),
(9, 12, 'asdsadsadasdasdasd', 'd', 'c', 'b', 'd', '', 'active', ''),
(10, 12, 'OIJASDJIOJSKE  ; : â€˜ ( ))', 'a', 'b', 'c', 'd', 'd', 'active', ''),
(11, 8, 'asdasd', 'a', 'as', 'ds', 'g', 'as', 'active', ''),
(13, 8, 'Students   in   your   history   class   are   having   difï¬culty   understanding   the   signiï¬cance   of   World   War   II.Â  What   activities   could   help   students   get   more   engaged', 'Students   create   YouTube   videos   describing   key   battles   in   World   War   IIÂ  ', 'Teacher   creates   a   ï¬nal   exam   in   Forms   to   give   students   a   grade   on   what   they   know', 'Students   use   the   Explore   Tool   to   search   for   more   information   in   Docs', ' Students   answer   questions   at   the   end   of   the   chapter   on   World   War   IIÂ ', 'Students   use   the   Explore   Tool   to   search   for   more   information   in   Docs', 'active', ''),
(16, 10, 'Students in your history class are having difï¬culty understanding the signiï¬cance of World War II.  What activities could help students get more engaged?', 'Students create YouTube videos describing key battles in World War II ', 'Teacher creates a ï¬nal exam in Forms to give students a grade on what they know', 'Students use the Explore Tool to search for more information in Docs', 'Students answer questions at the end of the chapter on World War II', 'Students use the Explore Tool to search for more information in Docs', 'active', ''),
(19, 9, 'AWit', 'a', 'b', 'c', 'd', 'b', 'active', ''),
(20, 11, 'Another name for research that occurs â€œpost hocâ€ is ', 'experimental', 'correlational', 'quasi-experimental', 'historical', 'quasi-experimental', 'active', ''),
(21, 11, ' A nondirectional research hypothesis is similar to a directional hypothesis in that both ', 'specify the direction of the difference between groups', 'reflect differences between groups', ' are nonspecific regarding the direction of group differences', 'make no allusion to group differences', 'reflect differences between groups', 'active', ''),
(22, 11, 'If the hanging wall has moved down, the fault is ', 'reversed', 'normal', 'strike-slip', 'indeterminate', 'normal', 'active', ''),
(23, 11, 'The first president of the United States was ', 'Washington', 'Jefferson', 'Lincoln', 'Kennedy', 'Washington', 'active', ''),
(24, 11, 'The current population of New York City is ', 'More than 15,000,000 ', 'Less than 15,000,000 ', 'More than 25,000,000 ', 'Indeterminate', 'More than 15,000,000 ', 'active', ''),
(25, 13, 'assd', 'a', 'b', 'c', 'd', 'd', 'active', ''),
(26, 14, 'dasd', 'a', 'b', 'c', 'd', 'b', 'active', ''),
(27, 14, '3213123123', 'a', 'b', 'c', 'd', 'b', 'active', ''),
(28, 14, 'What is this ', 'a', 'b', 'c', 'd', 'd', 'active', ''),
(29, 14, 'Whos tasdasdasd', 'a', 'b', 'c', 'd', 'c', 'active', ''),
(31, 15, 'hnu iurgauui', 'a', 'b', 'c', 'd', 'c', 'active', ''),
(32, 15, 'asdasdhmnqweop', 'a', 'b', 'c', 'd', 'b', 'active', ''),
(33, 15, 'asdasdqweqwe', 'a', 'b', 'c', 'd', 'd', 'active', ''),
(35, 15, 'sadqweqeasdasd', 'a', 'b', 'c', 'd', 'a', 'active', ''),
(36, 15, 'ewqeqwewqeqwe', 'a', 'b', 'c', 'd', 'c', 'active', ''),
(37, 15, 'qweqwesasase', 'a', 'b', 'c', 'd', 'd', 'active', ''),
(38, 15, 'wqeqraras', 'a', 'b', 'c', 'd', 'd', 'active', ''),
(39, 15, 'eqweqweqweqwe', 'a', 'b', 'c', 'd', 'd', 'active', ''),
(40, 15, 'asdasd', 'a', 'b', 'c', 'd', 'd', 'active', ''),
(41, 15, 'qweqweasasd', 'a', 'b', 'c', 'd', 'c', 'active', ''),
(42, 16, 'asdqlwjk ehwqemhlqwheqweqwmhehqwe', 'a', 'b', 'c', 'd', 'd', 'active', ''),
(44, 17, 'Sample Question #2', 'a', 'b', 'c', 'd', 'b', 'active', ''),
(45, 17, 'Ssamp Q #3', 'a', 'b', 'c', 'd', 'a', 'active', ''),
(47, 17, 'Sample Q #5', 'a', 'b', 'c', 'd', 'd', 'active', ''),
(49, 18, 'Question #2', 'a', 'b', 'c', 'd', 'b', 'active', ''),
(50, 18, 'Question #3', 'a', 'b', 'c', 'd', 'a', 'active', ''),
(51, 18, 'Sample Question #4 ', 'CorrectAnswer', 'False', 'False', 'False', 'CorrectAnswer', 'active', ''),
(52, 18, 'test', 'test', 'test', 'test', 'test2', 'test2', 'active', ''),
(54, 17, 'test', 'tet', 'test', 'test', 'test2', 'test2', 'active', ''),
(55, 17, 'samplequiz#44', 'test', 'tes', 'test', 'test2', 'test2', 'active', ''),
(57, 17, 'test1234#123', '', '', '', '', 'test', 'active', 'fint'),
(58, 17, 'Killone123', '', '', '', '', 'test123', 'active', 'fint'),
(61, 17, 'test123123123123123', 'None', 'None', 'None', 'None', 'test', 'active', 'fint'),
(62, 17, 'test1231v Samole123', 'test', 'tedst', 'est', 'qwe', 'qwe', 'active', 'mc'),
(63, 17, 'qweqr', 'None', 'None', 'None', 'None', 'qwer', 'active', 'fint'),
(64, 17, 'testSamplequiz____23', 'None', 'None', 'None', 'None', '23', 'active', 'fint'),
(65, 17, 'test___testte', 'None', 'None', 'None', 'None', 'testtest', 'active', 'fint'),
(66, 0, '', '', '', '', '', '', 'active', ''),
(67, 19, 'Sample Question #1', 'Incorrect Asnwer', 'Correct Answer', 'Incorrect Asnwer', 'Incorrect Asnwer', 'Correct Answer', 'active', 'mc'),
(68, 19, 'Sample Question #2', 'None', 'None', 'None', 'None', 'Anything', 'active', 'fint');

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
  `ex_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exam_tbl`
--

INSERT INTO `exam_tbl` (`ex_id`, `cou_id`, `ex_title`, `ex_time_limit`, `ex_questlimit_display`, `ex_description`, `ex_created`) VALUES
(19, 12, 'Sample Exam', '30', 5, 'This midterm exemplifies a common structure of an in-class exam. It is broken into four sections and each section focuses on one aspect of the class. Part one emphasizes literary theory and genre issues, the second requires students to discuss important passages/quotes from the texts, the third focuses on plot and other literary devices, and the last section consists of a few short essays which reinforce important concepts from the class. This exam provides students with a chance to earn a few extra credit points for knowing some of the more obscure information discussed in class.', '0000-00-00 00:00:00'),
(20, 12, 'Sample Exam#22', '10', 5, 'asdasd', '0000-00-00 00:00:00');

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
(11, 10, 'Hadaza Marizen ', 'asdqwewqewe', 'June 01, 2020 - 11:06 am'),
(12, 31, 'Sample', 'sample feedback', 'January 07, 2021 - 04:01:08 pm'),
(13, 31, 'Anonymous', 'asdasdas', 'January 24, 2021 - 04:01:02 am'),
(14, 31, '', '', 'January 24, 2021 - 04:01:57 am');

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
  `instructor_bdate` varchar(100) DEFAULT NULL,
  `instructor_email` varchar(1000) DEFAULT NULL,
  `instructor_status` varchar(50) DEFAULT 'active',
  `cou_id` int(11) NOT NULL,
  `instructor_username` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instructors_tbl`
--

INSERT INTO `instructors_tbl` (`instructor_id`, `instructor_fullname`, `instructor_surname`, `instructor_middle`, `instructor_pass`, `instructor_gender`, `instructor_bdate`, `instructor_email`, `instructor_status`, `cou_id`, `instructor_username`) VALUES
(13, 'Juan Carlo', 'Tagalog', 'F', 'pass123', 'Male', '', 'juangtagalog@gmail.com', 'active', 12, 'juancarlo13');

-- --------------------------------------------------------

--
-- Table structure for table `lessons_tbl`
--

CREATE TABLE `lessons_tbl` (
  `lesson_id` int(11) NOT NULL,
  `cou_id` int(11) NOT NULL,
  `lesson_title` varchar(1000) NOT NULL,
  `lesson_desc` varchar(1000) NOT NULL,
  `date_uploaded` date NOT NULL DEFAULT current_timestamp(),
  `temp` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lessons_tbl`
--

INSERT INTO `lessons_tbl` (`lesson_id`, `cou_id`, `lesson_title`, `lesson_desc`, `date_uploaded`, `temp`) VALUES
(17, 12, 'Lesson #1', 'Sample description ', '2021-01-05', '');

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
  `date_uploaded` date NOT NULL,
  `grade` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myterms`
--

INSERT INTO `myterms` (`term_id`, `cou_id`, `term_title`, `term_desc`, `exmne_idd`, `date_uploaded`, `grade`) VALUES
(1, 'BSIT 4-4 ', 'test', '<p>test</p>\r\n', '31', '0000-00-00', '5'),
(2, 'BSIT 4-4 ', 'test', '<p>test</p>\r\n', '31', '2021-02-20', '1'),
(3, 'BSIT 4-4 ', '', '', '31', '2021-02-20', '2');

-- --------------------------------------------------------

--
-- Table structure for table `notification_tbl`
--

CREATE TABLE `notification_tbl` (
  `id` int(11) NOT NULL,
  `not_desc` text NOT NULL,
  `uploader` varchar(99) NOT NULL,
  `date_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Dumping data for table `quiz_answers`
--

INSERT INTO `quiz_answers` (`exans_id`, `axmne_id`, `quiz_id`, `quest_id`, `quiz_answer`, `quiz_status`, `quiz_created`) VALUES
(1, '31', '3', '10', 'asdasd', '', '0000-00-00'),
(2, '31', '3', '11', 'test', '', '0000-00-00'),
(3, '31', '3', '9', 'test', '', '0000-00-00'),
(4, '31', '4', '13', 'aisudhasd', '', '0000-00-00'),
(5, '31', '4', '14', 'oijasodijo', '', '0000-00-00'),
(6, '31', '4', '12', 'weqweqweqwe', '', '0000-00-00'),
(7, '31', '5', '17', 'tqwe', '', '0000-00-00'),
(8, '31', '5', '16', 'qtqwe', '', '0000-00-00'),
(9, '31', '6', '18', 'test', '', '0000-00-00'),
(10, '31', '6', '19', 'test', '', '0000-00-00'),
(11, '31', '7', '21', 'test2', '', '0000-00-00'),
(12, '31', '7', '20', 'test2', '', '0000-00-00'),
(13, '31', '8', '23', 'test', '', '0000-00-00'),
(14, '31', '8', '22', 'test', '', '0000-00-00'),
(15, '31', '9', '24', 'qweqwe', '', '0000-00-00'),
(16, '31', '9', '25', 'qweqwe2', '', '0000-00-00');

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

--
-- Dumping data for table `quiz_attempt`
--

INSERT INTO `quiz_attempt` (`id`, `quiz_id`, `exmne_id`, `quiz_status`) VALUES
(1, '3', '31', ''),
(2, '4', '31', ''),
(3, '5', '31', ''),
(4, '6', '31', ''),
(5, '7', '31', ''),
(6, '8', '31', ''),
(7, '9', '31', '');

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

--
-- Dumping data for table `quiz_question_tbl`
--

INSERT INTO `quiz_question_tbl` (`qqt_id`, `quiz_id`, `quiz_question`, `quiz_ch1`, `quiz_ch2`, `quiz_ch3`, `quiz_ch4`, `quiz_answer`, `quiz_status`, `quiz_type`) VALUES
(1, 2, 'test', 'test', 'test', 'test', 'test2', 'test2', '', 'mc'),
(2, 2, 'test123123', 'None', 'None', 'None', 'None', 'test2', '', 'fint'),
(3, 2, 'test123231', 'test', 'test', 'test', 'test2', 'test2', '', 'mc'),
(4, 2, 'test09123', 'None', 'None', 'None', 'None', 'test', '', 'fint'),
(7, 2, 'test12312322', 'None', 'None', 'None', 'None', 'test', '', 'fint'),
(8, 2, 'test123432124test', 'None', 'None', 'None', 'None', 'test', '', 'fint'),
(9, 3, 'test______KO', 'None', 'None', 'None', 'None', 'Sample', '', 'fint'),
(10, 3, 'SampleQuestion#2', 'asdasd', 'asd', 'asd', 'asd', 'asdasd', '', 'mc'),
(11, 3, 'test@_____', 'None', 'None', 'None', 'None', 'asdasdasdasd', '', 'fint'),
(12, 4, 'Sample loasdoijasodij', 'None', 'None', 'None', 'None', 'TEst', '', 'fint'),
(13, 4, 'qweiouasdiuhasiduh', 'wiuahsd', 'aisudhasd', 'asdiuhsiudh', '123', '123', '', 'mc'),
(14, 4, 'asdoijoisjd', 'oiasjdoiajsd', 'oijasodijo', 'oaisjdoij', 'oijaasd', 'oaisjdojasd', '', 'mc'),
(15, 5, 'tetsasdqweqwe@asdas____', 'None', 'None', 'None', 'None', 'assd', '', 'fint'),
(16, 5, 'tqweasdasd', 'None', 'None', 'None', 'None', 'oasidoiajsoidj', '', 'fint'),
(17, 5, 'asdas', 'None', 'None', 'None', 'None', 'asdasd', '', 'fint'),
(18, 6, 'asdasd', 'None', 'None', 'None', 'None', 'asdasdasd', '', 'fint'),
(19, 6, 'tqweqwe', 'None', 'None', 'None', 'None', 'qwee', '', 'fint'),
(20, 7, 'test', 'None', 'None', 'None', 'None', 'pokeko', '', 'fint'),
(21, 7, 'tst', 'test', 'test', 'test', 'test2', 'test2', '', 'mc'),
(22, 8, 'w2', 'None', 'None', 'None', 'None', 'w2', '', 'fint'),
(23, 8, 'rqe', 'None', 'None', 'None', 'None', 'rqe', '', 'fint'),
(24, 9, 'tqwe', 'None', 'None', 'None', 'None', 'tqwet', '', 'fint'),
(25, 9, 'qweqwe', 'qwe', 'qwe', 'qwe', 'qweqwe2', 'qweqwe2', '', 'mc');

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
  `quiz_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz_tbl`
--

INSERT INTO `quiz_tbl` (`quiz_id`, `cou_id`, `quiz_title`, `quiz_time_limit`, `quiz_questlimit_display`, `quiz_desc`, `quiz_created`) VALUES
(1, 12, 'Sample Quiz', '', 5, 'Sample Only', '2021-01-06 03:50:17'),
(2, 21, '32', '20', 5, 'qweqweqwe', '0000-00-00 00:00:00'),
(3, 12, '10', '1', 5, 'SampleQuiz', '0000-00-00 00:00:00'),
(4, 12, '123', '50', 5, 'Sampleuiqweasdasd', '0000-00-00 00:00:00'),
(5, 12, '982', '60', 2, 'asdasd', '0000-00-00 00:00:00'),
(6, 12, '514', '60', 2, 'asdasd', '0000-00-00 00:00:00'),
(7, 12, '5132', '60', 2, 'tqweqwe', '0000-00-00 00:00:00'),
(8, 12, '314', '20', 2, 'qweqwe', '0000-00-00 00:00:00'),
(9, 12, '214', '50', 2, 'weqwe', '0000-00-00 00:00:00');

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

-- --------------------------------------------------------

--
-- Table structure for table `user-img`
--

CREATE TABLE `user-img` (
  `userid` varchar(99) NOT NULL,
  `img` varchar(99) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `user-img`
--
ALTER TABLE `user-img`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities_tbl`
--
ALTER TABLE `activities_tbl`
  MODIFY `act_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `admin_acc`
--
ALTER TABLE `admin_acc`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  MODIFY `ann_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `assignment_tbl`
--
ALTER TABLE `assignment_tbl`
  MODIFY `ass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `cou_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `examinee_files`
--
ALTER TABLE `examinee_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examinee_img`
--
ALTER TABLE `examinee_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `examinee_tbl`
--
ALTER TABLE `examinee_tbl`
  MODIFY `exmne_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `exam_answers`
--
ALTER TABLE `exam_answers`
  MODIFY `exans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `exam_attempt`
--
ALTER TABLE `exam_attempt`
  MODIFY `examat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `exam_question_tbl`
--
ALTER TABLE `exam_question_tbl`
  MODIFY `eqt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `exam_tbl`
--
ALTER TABLE `exam_tbl`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `feedbacks_tbl`
--
ALTER TABLE `feedbacks_tbl`
  MODIFY `fb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `instructors_tbl`
--
ALTER TABLE `instructors_tbl`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `lessons_tbl`
--
ALTER TABLE `lessons_tbl`
  MODIFY `lesson_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `modules_tbl`
--
ALTER TABLE `modules_tbl`
  MODIFY `mdl_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `myterms`
--
ALTER TABLE `myterms`
  MODIFY `term_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notification_tbl`
--
ALTER TABLE `notification_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  MODIFY `exans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `quiz_attempt`
--
ALTER TABLE `quiz_attempt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `quiz_question_tbl`
--
ALTER TABLE `quiz_question_tbl`
  MODIFY `qqt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `quiz_tbl`
--
ALTER TABLE `quiz_tbl`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `topics_tbl`
--
ALTER TABLE `topics_tbl`
  MODIFY `topic_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user-img`
--
ALTER TABLE `user-img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
