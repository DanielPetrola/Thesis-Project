-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2021 at 07:56 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u854794003_desproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middleinit` varchar(255) NOT NULL,
  `contact` text NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `birthday` date NOT NULL,
  `position` text NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `idnum` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `lastname`, `firstname`, `middleinit`, `contact`, `gender`, `age`, `birthday`, `position`, `email`, `password`, `role`, `idnum`) VALUES
(1, 'Talip', 'Angelo', 'R', '09167543955', 'Male', 21, '1999-06-21', 'Counselor', 'talipangelo@yahoo.com', '$2y$10$UR5KFP969eW2kCiDfXhOzucGpIF0xfuqEcGEDhDTy4V72obDUYLHC', 'Counselor', '12-4567-890'),
(3, 'Petrola', 'John Daniel', 'T', '09159897851', 'Male', 28, '1999-04-23', 'Dean', 'jdp@email.com', '$2y$10$UR5KFP969eW2kCiDfXhOzucGpIF0xfuqEcGEDhDTy4V72obDUYLHC', 'Administrator', '22-9322-137'),
(4, 'Relloso', 'Joemel', 'C', '09123456789', 'Male', 22, '1998-08-20', 'Instructor', 'jr@email.com', '$2y$10$RjPIZsoqXzRKn3CYPWBvxuWxUd0eG3Nlr64v9QToV8xpNsqFxq8rG', 'Counselor', '19-0238-546'),
(12, 'Santos', 'Cyd Laurence', 'B', '639369157301', 'Male', 28, '1993-11-03', 'Instructor', 'cydlaurencesantos@gmail.com', '$2y$10$0uWnvscpmozYSxhVCdvq4.1AO3WL6zDj2at1sOQh7jwi0ewBwGQFy', 'Counselor', '14497-1657'),
(13, 'Alfredo', 'Robert', 'K', '09218273162', 'Male', 26, '1995-12-31', 'Instructor', 'arl@email.com', '$2y$10$E820evmpDxQrw/4yjvjGGulz6QltscMNY710KSPzALef463QvQrgG', 'Administrator', '09-1263-838'),
(15, 'Macasaet', 'Maurice', 'G', '09171234567', 'Female', 18, '2021-05-27', 'Counselor', 'magm014@yahoo.com', '$2y$10$UsYj1CtOM9YRZYdYRqLhTesorehjhWjBpi5fgRDqVK2FTGOC7fk6W', 'Administrator', '01-0001-001'),
(16, 'Reyes', 'Sean', 'L', '09171234567', 'Male', 18, '2021-05-27', 'Counselor', 'seanreyes96@gmail.com', '$2y$10$KpVpqZiCaZd3V0/nibSSTOR3YnDCCe.xD7jnGML9NgfEUzk7LEL0u', 'Administrator', '01-0001-02'),
(17, 'Castillo', 'Karlo', 'A', '09171234567', 'Male', 18, '2021-05-27', 'Counselor', 'Castillokarlo83@gmail.com', '$2y$10$CuzWTnBo.Kge20xiTr8I4OnytuHVMdzVUMeGmlQ/5kx7LB3m4oLae', 'Administrator', '01-0001-03'),
(18, 'Martinez', 'Danielle', 'A', '09171234567', 'Male', 24, '2021-05-27', 'Counselor', 'martinezdanielle1109@gmail.com', '$2y$10$Ld7SkfZ.MAZ7ppT340IHsOLDu5z4gh1DfGxNGHz047K1v.lwUKClG', 'Administrator', '01-0001-04'),
(19, 'Villamor', 'Patrick', 'N', '09171234567', 'Male', 29, '0000-00-00', 'Dean', 'patricknvillamor@gmail.com', '$2y$10$29v3E4CdC2D.9CayrLl36ux/Ky8jEcRihGHK6QaEpYCFWWj9Y6V2C', 'Admin', '01-0001-05');

-- --------------------------------------------------------

--
-- Table structure for table `chistory`
--

CREATE TABLE `chistory` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `idnum` varchar(255) NOT NULL,
  `counselor_lastname` text NOT NULL,
  `counselor_firstname` text NOT NULL,
  `student_lastname` text NOT NULL,
  `student_firstname` text NOT NULL,
  `counsel_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chistory`
--

INSERT INTO `chistory` (`id`, `date`, `idnum`, `counselor_lastname`, `counselor_firstname`, `student_lastname`, `student_firstname`, `counsel_type`) VALUES
(1, '2021-05-27', '19-7721-962', 'Petrola', 'John Daniel', 'Bulabos', 'Erica', 'crecords'),
(2, '2021-05-28', '12-7764-293', 'Alfredo', 'Robert', 'Dela Cruz', 'Janna', 'crecords'),
(3, '2021-05-28', '15-1275-987', 'Alfredo', 'Robert', 'Cal', 'Marimar', 'arecords'),
(4, '2021-12-31', '09-1123-876', 'Talip', 'Angelo', 'Cruz', 'Mae', 'crecords'),
(5, '2021-06-04', '13-2291-008', 'Petrola', 'John Daniel', 'Padua', 'George Luis', 'arecords'),
(6, '2021-12-31', '12-3456-789', 'Petrola', 'John Daniel', 'Perez', 'Christian', 'arecords'),
(7, '2021-12-31', '09-1123-876', 'Petrola', 'John Daniel', 'Cruz', 'Mae', 'arecords'),
(8, '2021-12-31', '12-7764-293', 'Petrola', 'John Daniel', 'Dela Cruz', 'Janna', 'arecords'),
(9, '2021-12-31', '14-0092-818', 'Petrola', 'John Daniel', 'Atienza', 'Marry', 'arecords'),
(10, '2021-12-31', '09-1123-876', 'Petrola', 'John Daniel', 'Cruz', 'Mae', 'arecords'),
(11, '2020-12-31', '19-7721-962', 'Petrola', 'John Daniel', 'Bulabos', 'Erica', 'crecords'),
(12, '2021-12-31', '09-1123-876', 'Petrola', 'John Daniel', 'Cruz', 'Mae', 'crecords'),
(13, '2021-12-31', '12-3456-789', 'Petrola', 'John Daniel', 'Perez', 'Christian', 'crecords'),
(14, '2021-12-31', '09-1123-876', 'Petrola', 'John Daniel', 'Cruz', 'Mae', 'crecords'),
(15, '2021-12-31', '12-7764-293', 'Petrola', 'John Daniel', 'Dela Cruz', 'Janna', 'crecords'),
(16, '2021-12-31', '12-7764-293', 'Petrola', 'John Daniel', 'Dela Cruz', 'Janna', 'crecords'),
(17, '2021-12-31', '12-7764-293', 'Petrola', 'John Daniel', 'Dela Cruz', 'Janna', 'crecords'),
(18, '2021-01-01', '09-1123-876', 'Petrola', 'John Daniel', 'Cruz', 'Mae', 'crecords'),
(19, '0000-00-00', '09-1123-876', 'Petrola', 'John Daniel', 'Cruz', 'Mae', 'crecords'),
(20, '0000-00-00', '09-1123-876', 'Petrola', 'John Daniel', 'Cruz', 'Mae', 'crecords'),
(21, '2021-12-31', '12-3456-789', 'Petrola', 'John Daniel', 'Perez', 'Christian', 'crecords'),
(22, '2021-12-31', '09-1123-876', 'Petrola', 'John Daniel', 'Cruz', 'Mae', 'arecords'),
(23, '2021-12-31', '09-1123-876', 'Petrola', 'John Daniel', 'Cruz', 'Mae', 'arecords'),
(24, '2021-12-31', '12-7764-293', 'Petrola', 'John Daniel', 'Dela Cruz', 'Janna', 'arecords'),
(25, '2021-12-31', '12-3456-789', 'Petrola', 'John Daniel', 'Perez', 'Christian', 'arecords'),
(26, '2021-12-31', '1231221', 'Petrola', 'John Daniel', 'Lkasdlk', 'Akdflk', 'arecords'),
(27, '2021-12-31', '13-2291-008', 'Petrola', 'John Daniel', 'Padua', 'George Luis', 'arecords'),
(28, '2021-12-31', '14-0092-818', 'Petrola', 'John Daniel', 'Atienza', 'Marry', 'crecords'),
(29, '2021-01-12', '19-7721-962', 'Petrola', 'John Daniel', 'Bulabos', 'Erica', 'crecords'),
(30, '2020-09-10', '1231221', 'Petrola', 'John Daniel', 'Yemane', 'Awet', 'crecords'),
(31, '2021-06-12', '15-0861-848', 'Petrola', 'John Daniel', 'Quijano', 'Adrian', 'crecords'),
(32, '2021-06-05', '15-1275-987', 'Petrola', 'John Daniel', 'Cal', 'Marimar', 'crecords'),
(33, '2019-05-07', '18-5531-827', 'Petrola', 'John Daniel', 'Kim', 'Jared', 'crecords'),
(34, '2021-06-15', '19-2245-097', 'Petrola', 'John Daniel', 'Sintos', 'Jimmy', 'crecords'),
(35, '2021-12-31', '09-1123-876', 'Petrola', 'John Daniel', 'Cruz', 'Mae', 'crecords'),
(36, '2021-12-31', '19-7721-962', 'Petrola', 'John Daniel', 'Bulabos', 'Erica', 'arecords'),
(37, '2019-01-31', '19-7721-962', 'Petrola', 'John Daniel', '<br />\r\n<b>Notice</b>:  Undefined index: lastname in <b>C:\\xampp\\htdocs\\project\\admin\\counseling\\counseling-p1-2a.php</b> on line <b>256</b><br />\r\n', '<br />\r\n<b>Notice</b>:  Undefined index: firstname in <b>C:\\xampp\\htdocs\\project\\admin\\counseling\\counseling-p1-2a.php</b> on line <b>257</b><br />\r\n', 'crecords'),
(38, '2021-12-31', '19-7721-962', 'Petrola', 'John Daniel', 'Bulabos', 'Erica', 'crecords'),
(39, '2019-12-31', '19-7721-962', 'Petrola', 'John Daniel', 'Bulabos', 'Erica', 'crecords'),
(40, '2021-12-31', '19-7721-962', 'Petrola', 'John Daniel', 'Bulabos', 'Erica', 'crecords'),
(41, '2021-12-31', '13-2291-008', 'Petrola', 'John Daniel', 'Padua', 'George Luis', 'arecords'),
(42, '2021-12-31', '13-2291-008', 'Petrola', 'John Daniel', 'Padua', 'George Luis', 'crecords'),
(43, '2021-12-31', '13-2291-008', 'Petrola', 'John Daniel', 'Padua', 'George Luis', 'arecords'),
(44, '2021-12-31', '13-2291-008', 'Petrola', 'John Daniel', 'Padua', 'George Luis', 'crecords'),
(45, '2021-12-31', '09-1123-876', 'Petrola', 'John Daniel', 'Cruz', 'Mae', 'arecords'),
(46, '2021-12-31', '09-1123-876', 'Petrola', 'John Daniel', 'Cruz', 'Mae', 'crecords'),
(47, '2021-11-29', '09-1123-876', 'Petrola', 'John Daniel', 'Cruz', 'Mae', 'crecords'),
(48, '2021-12-31', '09-1123-876', 'Petrola', 'John Daniel', 'Cruz', 'Mae', 'crecords'),
(49, '2021-12-31', '1231221', 'Petrola', 'John Daniel', 'Yemane', 'Awet', 'arecords'),
(50, '2021-12-31', '1231221', 'Petrola', 'John Daniel', 'Yemane', 'Awet', 'crecords'),
(51, '2021-12-31', '12-7764-293', 'Petrola', 'John Daniel', 'Dela Cruz', 'Janna', 'crecords'),
(52, '2021-12-31', '14-0092-818', 'Petrola', 'John Daniel', 'Atienza', 'Marry', 'crecords'),
(53, '2021-12-31', '15-1275-987', 'Petrola', 'John Daniel', 'Cal', 'Marimar', 'arecords'),
(54, '2021-12-31', '15-1275-987', 'Petrola', 'John Daniel', 'Cal', 'Marimar', 'crecords');

-- --------------------------------------------------------

--
-- Table structure for table `crecords`
--

CREATE TABLE `crecords` (
  `id` int(11) NOT NULL,
  `idnum` varchar(255) NOT NULL,
  `student_lastname` text NOT NULL,
  `student_firstname` text NOT NULL,
  `middleinitial` text NOT NULL,
  `student_course` text NOT NULL,
  `student_yrlvl` text NOT NULL,
  `date` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `venue` text NOT NULL,
  `reason` text NOT NULL,
  `chk` varchar(255) NOT NULL,
  `attendance` text NOT NULL,
  `appearance` varchar(255) NOT NULL,
  `attitude` text NOT NULL,
  `difficulty` text NOT NULL,
  `corrective` text NOT NULL,
  `date_next` date NOT NULL,
  `c_comments` text NOT NULL,
  `s_comments` text NOT NULL,
  `subject` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `recommendation` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `uln` varchar(255) NOT NULL,
  `ufn` varchar(255) NOT NULL,
  `umid` varchar(255) NOT NULL,
  `status` varchar(1) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `sy` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crecords`
--

INSERT INTO `crecords` (`id`, `idnum`, `student_lastname`, `student_firstname`, `middleinitial`, `student_course`, `student_yrlvl`, `date`, `time_start`, `time_end`, `venue`, `reason`, `chk`, `attendance`, `appearance`, `attitude`, `difficulty`, `corrective`, `date_next`, `c_comments`, `s_comments`, `subject`, `section`, `problem`, `action`, `recommendation`, `type`, `uid`, `uln`, `ufn`, `umid`, `status`, `gender`, `age`, `sy`, `sem`) VALUES
(12, '12-3456-789', 'Perez', 'Christian', 'E', 'Electrical Engineering', 'Fifth Year', '2021-12-31', '12:59:00', '12:59:00', 'Online', 'Personal Issue', 'Other', 'Punctual', 'Neat', 'Happy', 'Yes. It seems to be a very personal problem.', 'Yes. Student is to be given training material every week until next session.', '2021-12-31', 'Student seems to be very comfortable', 'Evaluation was said to be spot on and student was eager for more sessions', '', '', '', '', '', 'gui', '', 'Petrola', 'John Daniel', '', '0', 'Male', 22, '2020', '1st'),
(13, '09-1123-876', 'Cruz', 'Mae', 'P', 'Mechanical Engineering', 'First Year', '2021-07-13', '12:59:00', '00:59:00', 'Engineering Dept Faculty Room', 'Cognitive Issue', 'Difficulty in Course', 'Punctual', 'Neat', 'Stoic', '', '', '2018-04-17', '', '', '1A', '55783', 'Teaching method was apparently too fast to understand', 'Lesson repetition', 'Professors are encouraged to give small tests in between lessons to test student understanding', 'acad', 'Petrola', 'Petrola', 'John Daniel', '', '0', 'Female', 22, '2019', '1st'),
(14, '09-1123-876', 'Cruz', 'Mae', 'P', 'Mechanical Engineering', 'First Year', '2019-08-06', '12:59:00', '12:59:00', 'Engineering Dept Faculty Room', 'Cognitive Issue', 'Difficulty in Course', 'Punctual', 'Simple', 'Stoic', '', '', '2016-07-21', '', '', '1A', '11983', 'Lessons were  getting harder', 'Reference materials were given', 'Student is encouraged to look online for examples', 'acad', 'Petrola', 'Petrola', 'John Daniel', '', '0', 'Female', 22, '2018', '1st'),
(15, '12-7764-293', 'Dela Cruz', 'Janna', 'R', 'Civil Engineering', 'Second Year', '2020-11-18', '12:59:00', '12:59:00', 'Online', 'Personal Issue', 'Other', 'Punctual', 'Simple', 'Sad', 'No. Student merely needed advice regarding personal problems.', '', '2021-05-12', 'n/a', 'n/a', '1A', '', '', '', '', 'gui', 'Petrola', 'Petrola', 'John Daniel', '', '0', 'Female', 22, '2017', 'Summer'),
(16, '12-3456-789', 'Perez', 'Christian', 'E', 'Electrical Engineering', 'Fifth Year', '2021-02-11', '12:59:00', '12:59:00', 'Online', 'Bullying which led to trauma', 'Traumatic Experience', 'Tardy', 'Neat', 'Anxious', 'Yes. Anxiety affects the student\'s performance.', '', '2020-07-03', 'n/a', 'n/a', '1A', '', '', '', '', 'gui', 'Petrola', 'Petrola', 'John Daniel', '', '0', 'Male', 22, '2020', '1st'),
(17, '13-2291-008', 'Padua', 'George Luis', 'O', 'Civil Engineering', 'Third Year', '2020-09-01', '12:59:00', '12:59:00', 'Online', 'Loss of scholarship', 'Academic Probation', 'Tardy', 'Flashy', 'Sad', '', '', '2020-10-04', '', '', 'Algebra', '1A', 'Failure which led to loss of scholarship', 'A remedial exam was given', 'Student is encourage to do online research', 'acad', '3', 'Petrola', 'John Daniel', '', '0', 'Male', 21, '2020', '1st'),
(18, '14-0092-818', 'Atienza', 'Marry', 'T', 'Aeronautical Engineering', 'First Year', '2019-05-08', '12:59:00', '12:59:00', 'Online', 'Asthma attacks becoming too frequent', 'Health Issues', 'Punctual', 'Neat', 'Happy', 'Yes. Frequent asthma attacks makes student lose focus on synchronous classes', 'No. Student is encouraged to visit medical institutes', '2021-12-31', 'n/a', 'n/a', '', '', '', '', '', 'gui', '', 'Petrola', 'John Daniel', '', '0', 'Female', 18, '2020', '1st'),
(20, '19-7721-962', 'Bulabos', 'Erica', 'R', 'Electronics Engineering', 'Fourth Year', '2021-01-12', '15:36:00', '17:38:00', 'Online', 'Frequent high fever', 'Health Issues', 'Punctual', 'Simple', 'Happy', 'Yes. Student is experiencing chills and convulsions due to high fever which affects performance', 'No. Student is encouraged to visit medical institutes', '2021-07-14', 'n/a', 'n/a', '', '', '', '', '', 'gui', '', 'Petrola', 'John Daniel', '', '', 'Female', 20, '2020', '2nd'),
(21, '1231221', 'Yemane', 'Awet', 'L', 'Aeronautical Engineering', 'First Year', '2020-09-10', '15:37:00', '16:43:00', 'Online', 'Peer Pressure issue', 'Interpersonal Difficulty', 'Tardy', 'Simple', 'Stoic', 'No. Student merely needed advice regarding social issues.', 'No. Student is encouraged to take additional sessions for advice', '2021-09-14', 'Student seems inexperienced with social interaction', 'Session was deemed to be enjoyable', '', '', '', '', '', 'gui', '', 'Petrola', 'John Daniel', '', '', 'Male', 18, '2020', '1st'),
(22, '15-0861-848', 'Quijano', 'Adrian', 'C', 'Computer Engineering', 'Fifth Year', '2021-06-12', '17:38:00', '20:44:00', 'Online', 'Peer Pressure issue', 'Interpersonal Difficulty', 'Punctual', 'Neat', 'Normal', 'Yes. Performance is affected by student prioritizing social issues.', 'Yes. Student is encouraged to take additional sessions for advice', '2021-10-04', 'Student prioritizes relationships a lot more', 'n/a', '', '', '', '', '', 'gui', '', 'Petrola', 'John Daniel', '', '', 'Male', 22, '2020', '2nd'),
(23, '15-1275-987', 'Cal', 'Marimar', 'T', 'Marine Engineering', 'Second Year', '2021-06-05', '15:39:00', '16:40:00', 'Online', 'Carpal Tunnel', 'Health Issues', 'Tardy', 'Neat', 'Normal', 'Yes. Student performance is greatly affected by medical condition.', 'No. Student is encouraged to visit medical institutes', '2021-06-15', 'n/a', 'n/a', '', '', '', '', '', 'gui', '', 'Petrola', 'John Daniel', '', '', 'Female', 20, '2020', '1st'),
(24, '18-5531-827', 'Kim', 'Jared', 'P', 'Industrial Engineering', 'Third Year', '2019-05-07', '18:43:00', '19:44:00', 'Online', 'Anger issues', 'Emotional Difficulty', 'Punctual', 'Simple', 'Moody', 'Yes. Student shows signs of irritability, performance is affected by inability to hold a conversation', 'Yes. Student is encouraged to take therapy sessions', '2020-01-01', 'Student seems to be influenced by past experiences', 'n/a', '', '', '', '', '', 'gui', '', 'Petrola', 'John Daniel', '', '', 'Male', 20, '2020', 'Summer'),
(25, '19-2245-097', 'Sintos', 'Jimmy', 'D. Jr', 'Computer Engineering', 'Fifth Year', '2021-06-15', '18:43:00', '21:47:00', 'Online', 'Social problems', 'Adjustment Issues', 'Punctual', 'Flashy', 'Sad', 'No. Student merely finds it hard to adjust to the rules of the school.', 'No. Student is encouraged to take additional sessions for advice', '2021-06-30', 'Student is very willing to learn', 'Session was deemed comforting', '', '', '', '', '', 'gui', '', 'Petrola', 'John Daniel', '', '', 'Male', 22, '2020', '1st'),
(26, '09-1123-876', 'Cruz', 'Mae', 'P', 'Mechanical Engineering', 'First Year', '2021-12-31', '12:59:00', '12:59:00', 'sfafa', 'dfd', 'Adjustment Issues', 'sdfsdfs', 'sdgs', 'sgs', 'ggsgs', 'sgsg', '2021-12-31', 'fhs', 'sfgs', '', '', '', '', '', 'gui', '', 'Petrola', 'John Daniel', '', '', 'Female', 19, '2021', '2nd');

-- --------------------------------------------------------

--
-- Table structure for table `crecords1`
--

CREATE TABLE `crecords1` (
  `id` int(11) NOT NULL,
  `idnum` varchar(255) NOT NULL,
  `student_lastname` text NOT NULL,
  `student_firstname` text NOT NULL,
  `middleinitial` text NOT NULL,
  `student_course` text NOT NULL,
  `student_yrlvl` text NOT NULL,
  `date` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `venue` text NOT NULL,
  `reason` text NOT NULL,
  `chk` varchar(255) NOT NULL,
  `attendance` text NOT NULL,
  `appearance` varchar(255) NOT NULL,
  `attitude` text NOT NULL,
  `difficulty` text NOT NULL,
  `corrective` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `date_next` date NOT NULL,
  `c_comments` text NOT NULL,
  `s_comments` text NOT NULL,
  `subject` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `recommendation` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `uln` varchar(255) NOT NULL,
  `ufn` varchar(255) NOT NULL,
  `umid` varchar(255) NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) NOT NULL DEFAULT 'Pending',
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `sy` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crecords1`
--

INSERT INTO `crecords1` (`id`, `idnum`, `student_lastname`, `student_firstname`, `middleinitial`, `student_course`, `student_yrlvl`, `date`, `time_start`, `time_end`, `venue`, `reason`, `chk`, `attendance`, `appearance`, `attitude`, `difficulty`, `corrective`, `date_next`, `c_comments`, `s_comments`, `subject`, `section`, `problem`, `action`, `recommendation`, `type`, `uid`, `uln`, `ufn`, `umid`, `status`, `gender`, `age`, `sy`, `sem`) VALUES
(32, '1231221', 'Yemane', 'Awet', 'L', 'Aeronautical Engineering', 'First Year', '2021-12-31', '12:59:00', '12:59:00', 'Guidance Office', '', 'Test Anxiety', '', '', '', '', '2021-06-24 00:54:51', '0000-00-00', '', '', 'Math', '1', 'The student did not study before the exam', 'Given the student special exam', 'Time management', 'acad', 'jdp@email.com', 'Petrola', 'John Daniel', '2021-06-24 00:54:51', 'Pending', 'Male', 18, '2021', '1st'),
(33, '12-7764-293', 'Dela Cruz', 'Janna', 'R', 'Civil Engineering', 'Second Year', '2021-12-31', '12:59:00', '12:59:00', 'Online', 'transitional to new normal', 'Adjustment Issues', 'Punctual', 'Neat', 'Good', 'No', 'No', '2021-12-31', 'None', 'Pleased', '', '', '', '', '', 'gui', 'jdp@email.com', 'Petrola', 'John Daniel', '2021-06-24 01:02:54', 'To be acknowledged', 'Female', 18, '2021', 'Summer'),
(34, '14-0092-818', 'Atienza', 'Marry', 'T', 'Aeronautical Engineering', 'First Year', '2021-12-31', '12:59:00', '12:58:00', 'knkl', 'qw', 'Adjustment Issues', 'f', 'sf', 'sg', 'sgs', 'wg', '2021-12-31', 'geg', 'sgs', '', '', '', '', '', 'gui', 'jdp@email.com', 'Petrola', 'John Daniel', '2021-06-24 01:33:42', 'Pending', 'Female', 20, '2020', 'Summer'),
(35, '15-1275-987', 'Cal', 'Marimar', 'T', 'Marine Engineering', 'Second Year', '2021-12-31', '12:58:00', '12:59:00', 'sgsg', '', 'Poor Study Habits', '', '', '', '', '2021-06-24 01:40:52', '0000-00-00', '', '', 'Math', '1', 'af', 'sdg', 'sg', 'acad', 'jdp@email.com', 'Petrola', 'John Daniel', '2021-06-24 01:40:52', 'Finished', 'Female', 20, '2018', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `crecords2`
--

CREATE TABLE `crecords2` (
  `id` int(11) NOT NULL,
  `idnum` varchar(255) NOT NULL,
  `student_lastname` text NOT NULL,
  `student_firstname` text NOT NULL,
  `middleinitial` text NOT NULL,
  `student_course` text NOT NULL,
  `student_yrlvl` text NOT NULL,
  `date` date NOT NULL,
  `time_start` time NOT NULL,
  `time_end` time NOT NULL,
  `venue` text NOT NULL,
  `reason` text NOT NULL,
  `chk` varchar(255) NOT NULL,
  `attendance` text NOT NULL,
  `appearance` varchar(255) NOT NULL,
  `attitude` text NOT NULL,
  `difficulty` text NOT NULL,
  `corrective` text NOT NULL,
  `date_next` date NOT NULL,
  `c_comments` text NOT NULL,
  `s_comments` text NOT NULL,
  `subject` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `recommendation` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `uln` varchar(255) NOT NULL,
  `ufn` varchar(255) NOT NULL,
  `umid` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT 'To be acknowledged',
  `gender` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `sy` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crecords2`
--

INSERT INTO `crecords2` (`id`, `idnum`, `student_lastname`, `student_firstname`, `middleinitial`, `student_course`, `student_yrlvl`, `date`, `time_start`, `time_end`, `venue`, `reason`, `chk`, `attendance`, `appearance`, `attitude`, `difficulty`, `corrective`, `date_next`, `c_comments`, `s_comments`, `subject`, `section`, `problem`, `action`, `recommendation`, `type`, `uid`, `uln`, `ufn`, `umid`, `status`, `gender`, `age`, `sy`, `sem`) VALUES
(35, '1231221', 'Yemane', 'Awet', 'L', 'Aeronautical Engineering', 'First Year', '2021-12-31', '12:59:00', '12:59:00', 'Guidance office', 'Endorsed', 'Academic Concerns', 'Punctual', 'Neat', 'Resectful', 'Yes, lack of time management', 'Yes, needs secial attention', '2021-12-31', 'blablabla', 'thank you', '', '', '', '', '', 'gui', '', 'Petrola', 'John Daniel', '2021-06-24 00:54:51', 'Finished', 'Male', 18, '2021', 'Summer'),
(36, '15-1275-987', 'Cal', 'Marimar', 'T', 'Marine Engineering', 'Second Year', '2021-12-31', '12:59:00', '12:58:00', 'knkl', 'sgs', 'Adjustment Issues', 'fh', 'dfhf', 'dfhdf', 'dfhd', 'shs', '2021-12-31', 'shs', 'shgs', '', '', '', '', '', 'gui', 'jdp@email.com', 'Petrola', 'John Daniel', '2021-06-24 01:40:52', 'Finished', 'Female', 20, '2020', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `graphs`
--

CREATE TABLE `graphs` (
  `id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `student_number` int(11) NOT NULL,
  `counsel_number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `graphs`
--

INSERT INTO `graphs` (`id`, `course`, `student_number`, `counsel_number`) VALUES
(189, 'Aeronautical Engineering', 2, 2),
(190, 'Civil Engineering', 1, 1),
(191, 'Computer Engineering', 0, 0),
(192, 'Electrical Engineering', 0, 0),
(193, 'Electronics Engineering', 0, 0),
(194, 'Industrial Engineering', 0, 0),
(195, 'Marine Engineering', 1, 1),
(196, 'Mechanical Engineering', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id` int(10) NOT NULL,
  `users_id` int(10) NOT NULL,
  `user_lastname` text NOT NULL,
  `user_firstname` text NOT NULL,
  `user_role` text NOT NULL,
  `action` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`id`, `users_id`, `user_lastname`, `user_firstname`, `user_role`, `action`, `ip`, `created_at`, `updated_at`) VALUES
(9, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged out successfully', '112.208.169.77', '2021-05-27 11:01:53', '2021-05-27 11:01:53'),
(10, 19, 'Villamor', 'Patrick', 'Administrator', 'Logged in successfully', '58.69.104.45', '2021-05-27 11:05:44', '2021-05-27 11:05:44'),
(11, 9, 'Quijano', 'Adrian', 'Administrator', 'Logged in successfully', '112.208.169.77', '2021-05-27 11:06:10', '2021-05-27 11:06:10'),
(12, 18, 'Martinez', 'Danielle', 'Administrator', 'Logged in successfully', '58.69.104.45', '2021-05-27 11:07:48', '2021-05-27 11:07:48'),
(13, 9, 'Quijano', 'Adrian', 'Administrator', 'Logged out successfully', '112.208.169.77', '2021-05-27 11:09:18', '2021-05-27 11:09:18'),
(14, 19, 'Villamor', 'Patrick', 'Administrator', 'Logged out successfully', '58.69.104.45', '2021-05-27 11:17:17', '2021-05-27 11:17:17'),
(15, 18, 'Martinez', 'Danielle', 'Administrator', 'Logged out successfully', '58.69.104.45', '2021-05-27 11:18:41', '2021-05-27 11:18:41'),
(16, 19, 'Villamor', 'Patrick', 'Admin', 'Logged in successfully', '58.69.104.45', '2021-05-27 11:20:49', '2021-05-27 11:20:49'),
(17, 19, 'Villamor', 'Patrick', 'Admin', 'Logged in successfully', '58.69.104.45', '2021-05-27 11:21:17', '2021-05-27 11:21:17'),
(18, 16, 'Reyes', 'Sean', 'Administrator', 'Logged in successfully', '180.190.134.119', '2021-05-27 11:21:56', '2021-05-27 11:21:56'),
(19, 19, 'Villamor', 'Patrick', 'Admin', 'Logged in successfully', '58.69.104.45', '2021-05-27 11:22:20', '2021-05-27 11:22:20'),
(20, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-05-27 11:44:26', '2021-05-27 11:44:26'),
(21, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Bulabos, Erica successfully', '::1', '2021-05-27 11:59:09', '2021-05-27 11:59:09'),
(22, 3, 'Petrola', 'John Daniel', 'Administrator', 'Edited student record of Atienza, Marry successfully', '::1', '2021-05-27 12:07:37', '2021-05-27 12:07:37'),
(23, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged out successfully', '::1', '2021-05-27 13:10:12', '2021-05-27 13:10:12'),
(24, 13, 'Alfredo', 'Robert', 'Counselor', 'Logged in successfully', '::1', '2021-05-27 13:11:26', '2021-05-27 13:11:26'),
(25, 13, 'Alfredo', 'Robert', 'Counselor', 'Edited account of Macasaet, Maurice successfully', '::1', '2021-05-28 08:24:24', '2021-05-28 08:24:24'),
(26, 13, 'Alfredo', 'Robert', 'Counselor', 'Created guidance counseling record for Dela Cruz, Janna successfully', '::1', '2021-05-28 08:38:04', '2021-05-28 08:38:04'),
(27, 13, 'Alfredo', 'Robert', 'Counselor', 'Created academic counseling record for Cal, Marimar successfully', '::1', '2021-05-28 08:54:31', '2021-05-28 08:54:31'),
(28, 13, 'Alfredo', 'Robert', 'Counselor', 'Created a student record for asdkaj, ajfakj successfully', '::1', '2021-05-28 11:31:48', '2021-05-28 11:31:48'),
(29, 13, 'Alfredo', 'Robert', 'Counselor', 'Created a student record for Alfredo, Robert successfully', '::1', '2021-05-28 11:36:55', '2021-05-28 11:36:55'),
(30, 13, 'Alfredo', 'Robert', 'Counselor', 'Removed a student record successfully', '::1', '2021-05-28 11:52:27', '2021-05-28 11:52:27'),
(31, 13, 'Alfredo', 'Robert', 'Counselor', 'Removed a student record successfully', '::1', '2021-05-28 11:52:37', '2021-05-28 11:52:37'),
(32, 13, 'Alfredo', 'Robert', 'Counselor', 'Uploaded test result successfully', '::1', '2021-05-28 12:27:45', '2021-05-28 12:27:45'),
(33, 13, 'Alfredo', 'Robert', 'Counselor', 'Uploaded test result successfully', '::1', '2021-05-28 12:28:05', '2021-05-28 12:28:05'),
(34, 13, 'Alfredo', 'Robert', 'Counselor', 'Removed an account successfully', '::1', '2021-05-28 13:21:00', '2021-05-28 13:21:00'),
(35, 13, 'Alfredo', 'Robert', 'Counselor', 'Removed an account successfully', '::1', '2021-05-28 13:21:45', '2021-05-28 13:21:45'),
(36, 13, 'Alfredo', 'Robert', 'Counselor', 'Created an account for Alfredo, Robert  successfully', '::1', '2021-05-28 13:22:40', '2021-05-28 13:22:40'),
(37, 13, 'Alfredo', 'Robert', 'Counselor', 'Removed an account successfully', '::1', '2021-05-28 13:22:54', '2021-05-28 13:22:54'),
(38, 13, 'Alfredo', 'Robert', 'Counselor', 'Created an account for Alfredo, Robert  successfully', '::1', '2021-05-28 13:46:38', '2021-05-28 13:46:38'),
(39, 13, 'Alfredo', 'Robert', 'Counselor', 'Uploaded test result successfully', '::1', '2021-05-28 13:47:22', '2021-05-28 13:47:22'),
(40, 13, 'Alfredo', 'Robert', 'Counselor', 'Uploaded test result successfully', '::1', '2021-05-28 13:48:55', '2021-05-28 13:48:55'),
(41, 13, 'Alfredo', 'Robert', 'Counselor', 'Uploaded test result successfully', '::1', '2021-05-28 13:49:46', '2021-05-28 13:49:46'),
(42, 13, 'Alfredo', 'Robert', 'Counselor', 'Removed an account successfully', '::1', '2021-05-28 13:50:22', '2021-05-28 13:50:22'),
(43, 13, 'Alfredo', 'Robert', 'Counselor', 'Edited account of Alfredo, Robert successfully', '::1', '2021-05-28 13:50:51', '2021-05-28 13:50:51'),
(44, 13, 'Alfredo', 'Robert', 'Counselor', 'Created a student record for lkasdlk, akdflk successfully', '::1', '2021-05-28 13:51:47', '2021-05-28 13:51:47'),
(45, 13, 'Alfredo', 'Robert', 'Counselor', 'Edited student record of Lkasdlk, Akdflk successfully', '::1', '2021-05-28 13:52:12', '2021-05-28 13:52:12'),
(46, 13, 'Alfredo', 'Robert', 'Counselor', 'Logged out successfully', '::1', '2021-05-28 13:55:57', '2021-05-28 13:55:57'),
(47, 13, 'Alfredo', 'Robert', 'Counselor', 'Logged in successfully', '::1', '2021-05-28 13:56:59', '2021-05-28 13:56:59'),
(48, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-05-28 13:57:51', '2021-05-28 13:57:51'),
(49, 3, 'Petrola', 'John Daniel', 'Administrator', 'Uploaded test result successfully', '::1', '2021-05-28 14:01:51', '2021-05-28 14:01:51'),
(50, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged out successfully', '::1', '2021-05-28 14:08:59', '2021-05-28 14:08:59'),
(51, 1, 'Talip', 'Angelo', 'Counselor', 'Logged in successfully', '::1', '2021-05-28 14:09:44', '2021-05-28 14:09:44'),
(52, 1, 'Talip', 'Angelo', 'Counselor', 'Created guidance counseling record for Cruz, Mae successfully', '::1', '2021-05-28 14:11:31', '2021-05-28 14:11:31'),
(53, 1, 'Talip', 'Angelo', 'Counselor', 'Logged out successfully', '::1', '2021-05-28 15:17:35', '2021-05-28 15:17:35'),
(54, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-05-28 15:17:51', '2021-05-28 15:17:51'),
(55, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-04 14:34:38', '2021-06-04 14:34:38'),
(56, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created academic counseling record for Padua, George Luis successfully', '::1', '2021-06-04 15:04:35', '2021-06-04 15:04:35'),
(57, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created academic counseling record for Perez, Christian successfully', '::1', '2021-06-04 15:09:16', '2021-06-04 15:09:16'),
(58, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created academic counseling record for Cruz, Mae successfully', '::1', '2021-06-04 15:12:05', '2021-06-04 15:12:05'),
(59, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created academic counseling record for Dela Cruz, Janna successfully', '::1', '2021-06-04 15:13:50', '2021-06-04 15:13:50'),
(60, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created academic counseling record for Atienza, Marry successfully', '::1', '2021-06-04 15:16:43', '2021-06-04 15:16:43'),
(61, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created academic counseling record for Cruz, Mae successfully', '::1', '2021-06-04 15:19:58', '2021-06-04 15:19:58'),
(62, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Bulabos, Erica successfully', '::1', '2021-06-04 15:43:36', '2021-06-04 15:43:36'),
(63, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Cruz, Mae successfully', '::1', '2021-06-04 16:59:20', '2021-06-04 16:59:20'),
(64, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Perez, Christian successfully', '::1', '2021-06-04 17:03:08', '2021-06-04 17:03:08'),
(65, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Cruz, Mae successfully', '::1', '2021-06-04 17:05:21', '2021-06-04 17:05:21'),
(66, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Dela Cruz, Janna successfully', '::1', '2021-06-04 17:07:41', '2021-06-04 17:07:41'),
(67, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Dela Cruz, Janna successfully', '::1', '2021-06-04 17:08:05', '2021-06-04 17:08:05'),
(68, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Dela Cruz, Janna successfully', '::1', '2021-06-04 17:08:21', '2021-06-04 17:08:21'),
(69, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Cruz, Mae successfully', '::1', '2021-06-04 17:24:07', '2021-06-04 17:24:07'),
(70, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Cruz, Mae successfully', '::1', '2021-06-04 17:31:10', '2021-06-04 17:31:10'),
(71, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Cruz, Mae successfully', '::1', '2021-06-04 17:32:48', '2021-06-04 17:32:48'),
(72, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Perez, Christian successfully', '::1', '2021-06-04 19:25:24', '2021-06-04 19:25:24'),
(73, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created academic counseling record for Cruz, Mae successfully', '::1', '2021-06-04 19:40:21', '2021-06-04 19:40:21'),
(74, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created academic counseling record for Cruz, Mae successfully', '::1', '2021-06-04 19:45:03', '2021-06-04 19:45:03'),
(75, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created academic counseling record for Dela Cruz, Janna successfully', '::1', '2021-06-04 19:51:27', '2021-06-04 19:51:27'),
(76, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created academic counseling record for Perez, Christian successfully', '::1', '2021-06-04 19:52:55', '2021-06-04 19:52:55'),
(77, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created academic counseling record for Lkasdlk, Akdflk successfully', '::1', '2021-06-04 19:54:12', '2021-06-04 19:54:12'),
(78, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created academic counseling record for Padua, George Luis successfully', '::1', '2021-06-04 20:08:49', '2021-06-04 20:08:49'),
(79, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Atienza, Marry successfully', '::1', '2021-06-04 20:16:12', '2021-06-04 20:16:12'),
(80, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-05 11:21:39', '2021-06-05 11:21:39'),
(81, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-05 16:13:17', '2021-06-05 16:13:17'),
(82, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-14 17:38:12', '2021-06-14 17:38:12'),
(83, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-15 00:14:19', '2021-06-15 00:14:19'),
(84, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-15 09:46:12', '2021-06-15 09:46:12'),
(85, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-15 12:46:34', '2021-06-15 12:46:34'),
(86, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-15 15:21:57', '2021-06-15 15:21:57'),
(87, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-15 15:23:27', '2021-06-15 15:23:27'),
(88, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-15 15:35:15', '2021-06-15 15:35:15'),
(89, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Bulabos, Erica successfully', '::1', '2021-06-15 15:37:40', '2021-06-15 15:37:40'),
(90, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Yemane, Awet successfully', '::1', '2021-06-15 15:38:24', '2021-06-15 15:38:24'),
(91, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Quijano, Adrian successfully', '::1', '2021-06-15 15:39:05', '2021-06-15 15:39:05'),
(92, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Cal, Marimar successfully', '::1', '2021-06-15 15:40:10', '2021-06-15 15:40:10'),
(93, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Kim, Jared successfully', '::1', '2021-06-15 15:41:14', '2021-06-15 15:41:14'),
(94, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Sintos, Jimmy successfully', '::1', '2021-06-15 15:41:49', '2021-06-15 15:41:49'),
(95, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-15 15:50:50', '2021-06-15 15:50:50'),
(96, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged out successfully', '::1', '2021-06-15 16:01:36', '2021-06-15 16:01:36'),
(97, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-16 12:49:13', '2021-06-16 12:49:13'),
(98, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-20 13:10:14', '2021-06-20 13:10:14'),
(99, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-20 15:57:10', '2021-06-20 15:57:10'),
(100, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-21 12:16:10', '2021-06-21 12:16:10'),
(101, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Cruz, Mae successfully', '::1', '2021-06-21 13:53:30', '2021-06-21 13:53:30'),
(102, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-21 23:41:58', '2021-06-21 23:41:58'),
(103, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed academic counseling record for Bulabos, Erica successfully', '::1', '2021-06-22 14:01:38', '2021-06-22 14:01:38'),
(104, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed guidance counseling record for <br />\r\n<b>Notice</b>:  Undefined index: lastname in <b>C:\\xampp\\htdocs\\project\\admin\\counseling\\counseling-p1-2a.php</b> on line <b>256</b><br />\r\n, <br />\r\n<b>Notice</b>:  Undefined index: firstname in <b>C:\\xampp\\htdocs\\project\\admin\\counseling\\counseling-p1-2a.php</b> on line <b>257</b><br />\r\n successfully', '::1', '2021-06-22 14:58:15', '2021-06-22 14:58:15'),
(105, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed guidance counseling record for Bulabos, Erica successfully', '::1', '2021-06-22 15:03:37', '2021-06-22 15:03:37'),
(106, 3, 'Petrola', 'John Daniel', 'Administrator', 'Edited account of Alfredo, Robert successfully', '::1', '2021-06-22 18:03:35', '2021-06-22 18:03:35'),
(107, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged out successfully', '::1', '2021-06-22 18:03:41', '2021-06-22 18:03:41'),
(108, 13, 'Alfredo', 'Robert', 'Counselor', 'Logged in successfully', '::1', '2021-06-22 18:03:50', '2021-06-22 18:03:50'),
(109, 13, 'Alfredo', 'Robert', 'Counselor', 'Logged in successfully', '::1', '2021-06-22 18:04:08', '2021-06-22 18:04:08'),
(110, 13, 'Alfredo', 'Robert', 'Administrator', 'Logged in successfully', '::1', '2021-06-22 18:04:49', '2021-06-22 18:04:49'),
(111, 13, 'Alfredo', 'Robert', 'Administrator', 'Logged out successfully', '::1', '2021-06-22 18:08:15', '2021-06-22 18:08:15'),
(112, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-22 18:08:26', '2021-06-22 18:08:26'),
(113, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed guidance counseling record for Bulabos, Erica successfully', '::1', '2021-06-22 18:24:06', '2021-06-22 18:24:06'),
(114, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed guidance counseling record for Bulabos, Erica successfully', '::1', '2021-06-22 18:31:09', '2021-06-22 18:31:09'),
(115, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed academic counseling record for Padua, George Luis successfully', '::1', '2021-06-22 18:50:35', '2021-06-22 18:50:35'),
(116, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed guidance counseling record for Padua, George Luis successfully', '::1', '2021-06-22 18:51:10', '2021-06-22 18:51:10'),
(117, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed academic counseling record for Padua, George Luis successfully', '::1', '2021-06-22 18:59:09', '2021-06-22 18:59:09'),
(118, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed guidance counseling record for Padua, George Luis successfully', '::1', '2021-06-22 18:59:37', '2021-06-22 18:59:37'),
(119, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed academic counseling record for Cruz, Mae successfully', '::1', '2021-06-22 22:34:09', '2021-06-22 22:34:09'),
(120, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed guidance counseling record for Cruz, Mae successfully', '::1', '2021-06-22 22:35:50', '2021-06-22 22:35:50'),
(121, 3, 'Petrola', 'John Daniel', 'Administrator', 'Logged in successfully', '::1', '2021-06-23 16:30:21', '2021-06-23 16:30:21'),
(122, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed guidance counseling record for Cruz, Mae successfully', '::1', '2021-06-24 00:26:55', '2021-06-24 00:26:55'),
(123, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed guidance counseling record for Cruz, Mae successfully', '::1', '2021-06-24 00:29:30', '2021-06-24 00:29:30'),
(124, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed academic counseling record for Yemane, Awet successfully', '::1', '2021-06-24 00:54:51', '2021-06-24 00:54:51'),
(125, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed guidance counseling record for Yemane, Awet successfully', '::1', '2021-06-24 00:56:26', '2021-06-24 00:56:26'),
(126, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Dela Cruz, Janna successfully', '::1', '2021-06-24 01:02:54', '2021-06-24 01:02:54'),
(127, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created guidance counseling record for Atienza, Marry successfully', '::1', '2021-06-24 01:33:42', '2021-06-24 01:33:42'),
(128, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed academic counseling record for Cal, Marimar successfully', '::1', '2021-06-24 01:40:52', '2021-06-24 01:40:52'),
(129, 3, 'Petrola', 'John Daniel', 'Administrator', 'Created endorsed guidance counseling record for Cal, Marimar successfully', '::1', '2021-06-24 01:49:36', '2021-06-24 01:49:36');

-- --------------------------------------------------------

--
-- Table structure for table `pgraphs`
--

CREATE TABLE `pgraphs` (
  `id` int(11) NOT NULL,
  `problem` varchar(255) NOT NULL,
  `female_num` int(11) NOT NULL,
  `male_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pgraphs`
--

INSERT INTO `pgraphs` (`id`, `problem`, `female_num`, `male_num`) VALUES
(128, 'Adjustment Issues', 2, 0),
(129, 'Poor Study Habits', 1, 0),
(130, 'Test Anxiety', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pwdreset`
--

CREATE TABLE `pwdreset` (
  `pwdResetId` int(11) NOT NULL,
  `pwdResetEmail` text NOT NULL,
  `pwdResetSelector` text NOT NULL,
  `pwdResetToken` longtext NOT NULL,
  `pwdResetExpires` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwdreset`
--

INSERT INTO `pwdreset` (`pwdResetId`, `pwdResetEmail`, `pwdResetSelector`, `pwdResetToken`, `pwdResetExpires`) VALUES
(23, 'talipgaming01@gmail.com', 'b2a59bda35fe9c64', '$2y$10$URcbWCneMJi0Rbk2vCzr3OBuCtwRAfxnnE8vZZyU9B9BGup25u6aq', '1621757463'),
(29, '', '54ab93ce854f1d24', '$2y$10$DsKSXqqCrESddlhsjBdc..Oc27xbqeSq7qvM2Meceobijq8UlgUKW', '1622071700'),
(31, 'daniel.petrolaa@gmail.com', '8018b08710a85ed6', '$2y$10$/qytI4MMAjswOybgxpW41O53xzCrQUs.dWJH7sPtLgCfjT8fHNQRa', '1622077843');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `idnum` varchar(11) NOT NULL,
  `lastname` text NOT NULL,
  `firstname` text NOT NULL,
  `middleinitial` text NOT NULL,
  `course` text NOT NULL,
  `yearlevel` text NOT NULL,
  `age` text NOT NULL,
  `gender` text NOT NULL,
  `civilstatus` text NOT NULL,
  `citizenship` text NOT NULL,
  `religion` text NOT NULL,
  `birthday` text NOT NULL,
  `contact` text NOT NULL,
  `address` text NOT NULL,
  `scholarship` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `idnum`, `lastname`, `firstname`, `middleinitial`, `course`, `yearlevel`, `age`, `gender`, `civilstatus`, `citizenship`, `religion`, `birthday`, `contact`, `address`, `scholarship`) VALUES
(12, '15-0861-848', 'Quijano', 'Adrian', 'C', 'Computer Engineering', 'Fifth Year', '22', 'Male', 'Single', 'Filipino', 'Catholic', '2021-05-23', '09123456789', 'LAS PINAS CITY', 'n/a'),
(13, '15-1275-987', 'Cal', 'Marimar', 'T', 'Marine Engineering', 'Second Year', '20', 'Female', 'Single', 'Filipino', 'Catholic', '1998-09-09', '09877661525', 'Cavite', 'None'),
(14, '14-0092-818', 'Atienza', 'Marry', 'T', 'Aeronautical Engineering', 'First Year', '20', 'Female', 'Single', 'Filipino', 'Catholic', '2000-12-03', '09877660911', 'Paranaque City', 'Deans List'),
(15, '13-2291-008', 'Padua', 'George Luis', 'O', 'Civil Engineering', 'Third Year', '22', 'Male', 'Married', 'Filipino', 'Muslim', '2001-12-25', '09887263512', 'Las Pinas', 'None'),
(16, '12-3456-789', 'Perez', 'Christian', 'E', 'Electrical Engineering', 'Fifth Year', '22', 'Male', 'Single', 'Filipino', 'Catholic', '1999-07-18', '09133245142', 'Cavite', 'None'),
(17, '19-7721-962', 'Bulabos', 'Erica', 'R', 'Electronics Engineering', 'Fourth Year', '20', 'Female', 'Single', 'Filipino', 'Catholic', '2000-04-26', '0987766133', 'Manila ', 'None'),
(18, '18-5531-827', 'Kim', 'Jared', 'P', 'Industrial Engineering', 'Third Year', '20', 'Male', 'Single', 'Filipino/Chinese', 'None', '2000-09-20', '09877692929', 'Cavite', 'None'),
(19, '09-1123-876', 'Cruz', 'Mae', 'P', 'Mechanical Engineering', 'First Year', '19', 'Female', 'Single', 'Filipino', 'Catholic', '2002-09-18', '09115253615', 'Manila', 'None'),
(20, '19-2245-097', 'Sintos', 'Jimmy', 'D. Jr', 'Computer Engineering', 'Fifth Year', '22', 'Male', 'Single', 'Filipino', 'Catholic', '1998-11-02', '09877661525', 'Las Pinas', 'None'),
(21, '12-7764-293', 'Dela Cruz', 'Janna', 'R', 'Civil Engineering', 'Second Year', '18', 'Female', 'Single', 'Filipino', 'Christian', '2001-08-16', '09218273162', 'Las Pinas', 'None'),
(24, '1231221', 'Yemane', 'Awet', 'L', 'Aeronautical Engineering', 'First Year', '18', 'Male', 'Single', 'afasg', 'gasgf', '2021-12-31', '09182736453', 'Saudi Arabia', 'Deans List');

-- --------------------------------------------------------

--
-- Table structure for table `tr_entrance`
--

CREATE TABLE `tr_entrance` (
  `id` int(11) NOT NULL,
  `idnum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tr_psychological`
--

CREATE TABLE `tr_psychological` (
  `id` int(11) NOT NULL,
  `idnum` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tr_psychological`
--

INSERT INTO `tr_psychological` (`id`, `idnum`, `name`, `filename`, `date`, `status`) VALUES
(2, '09-1123-876', '', '09-1123-876testresult60b07141bd0869.45317536.png', '2021-05-28 04:27:45', 'Entrance'),
(3, '09-1123-876', '', '09-1123-876testresult60b07155398663.20151692.png', '2021-05-28 04:28:05', 'Psychological'),
(4, '14-0092-818', '', '14-0092-818testresult60b083ea5c63f7.31605939.png', '2021-05-28 05:47:22', 'Psychological'),
(5, '09-1123-876', '', '09-1123-876testresult60b084472021b8.30709509.png', '2021-05-28 05:48:55', 'Psychological'),
(6, '09-1123-876', '', '09-1123-876testresult60b0847a19f1f2.66613450.png', '2021-05-28 05:49:46', 'Psychological');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `idnum` (`idnum`);

--
-- Indexes for table `chistory`
--
ALTER TABLE `chistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crecords`
--
ALTER TABLE `crecords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crecords1`
--
ALTER TABLE `crecords1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crecords2`
--
ALTER TABLE `crecords2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graphs`
--
ALTER TABLE `graphs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `course` (`course`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pgraphs`
--
ALTER TABLE `pgraphs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `problem` (`problem`);

--
-- Indexes for table `pwdreset`
--
ALTER TABLE `pwdreset`
  ADD PRIMARY KEY (`pwdResetId`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_entrance`
--
ALTER TABLE `tr_entrance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tr_psychological`
--
ALTER TABLE `tr_psychological`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `chistory`
--
ALTER TABLE `chistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `crecords`
--
ALTER TABLE `crecords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `crecords1`
--
ALTER TABLE `crecords1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `crecords2`
--
ALTER TABLE `crecords2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `graphs`
--
ALTER TABLE `graphs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=197;

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `pgraphs`
--
ALTER TABLE `pgraphs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `pwdreset`
--
ALTER TABLE `pwdreset`
  MODIFY `pwdResetId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tr_entrance`
--
ALTER TABLE `tr_entrance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tr_psychological`
--
ALTER TABLE `tr_psychological`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
