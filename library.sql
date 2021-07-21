-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2021 at 08:46 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `adminid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`adminid`, `email`, `password`, `updated`) VALUES
(35, 'hemchandra@gmail.com', 'e0fe06cb99c845e102e5cb89d415419f', '2021-06-22 13:41:29'),
(36, 'hemchandra@gmail.com', 'e0fe06cb99c845e102e5cb89d415419f', '2021-06-22 14:17:27'),
(37, 'hemchandra@gmail.com', 'e0fe06cb99c845e102e5cb89d415419f', '2021-06-23 03:30:43'),
(38, 'hemchandra@gmail.com', 'e0fe06cb99c845e102e5cb89d415419f', '2021-06-23 14:39:13'),
(39, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-23 16:23:18'),
(40, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-27 17:46:09'),
(41, 'nileshmahajan@gmail.com', '7b4481e1edb28ca78224c999dde58c4e', '2021-06-28 04:03:28'),
(42, 'nileshmahajan@gmail.com', 'ebaa3ee59704e08e648cf6346c8d26c5', '2021-06-28 04:03:49'),
(43, 'nileshmahajan@gmail.com', '7b4481e1edb28ca78224c999dde58c4e', '2021-06-28 04:04:04'),
(44, 'nileshmahajan@gmail.com', '2f2806f817c45f0314b76bcac92fd063', '2021-06-28 04:04:18'),
(45, 'nileshmahajan@gmail.com', 'ebaa3ee59704e08e648cf6346c8d26c5', '2021-06-28 04:04:35'),
(46, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-28 04:04:55'),
(47, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-28 06:35:01'),
(48, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-28 07:48:48'),
(49, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-28 08:00:01'),
(50, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-28 08:04:10'),
(51, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-28 08:04:59'),
(52, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-28 08:07:04'),
(53, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-28 08:08:58'),
(54, 'hemchandra@gmail.com', 'e0fe06cb99c845e102e5cb89d415419f', '2021-06-28 08:10:00'),
(55, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-28 08:20:07'),
(56, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-28 08:21:59'),
(57, 'hemchandra@gmail.com', 'e0fe06cb99c845e102e5cb89d415419f', '2021-06-28 08:59:41'),
(58, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-28 09:00:00'),
(59, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-28 09:11:26'),
(60, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-28 10:43:21'),
(61, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-29 11:15:25'),
(62, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-29 11:28:01'),
(63, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-30 07:18:25'),
(64, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-06-30 12:57:35'),
(65, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-07-01 04:11:36'),
(66, 'nileshmahajan@gmail.com', '3d7f1519654de9db7a5090ad95d5d01e', '2021-07-01 08:22:44'),
(67, 'apumondal0097@gmail.com', 'b9f0e438afb958a489b0b601b46b4f27', '2021-07-01 08:24:13');

-- --------------------------------------------------------

--
-- Table structure for table `adminsignup`
--

CREATE TABLE `adminsignup` (
  `adminid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `work` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `status` varchar(255) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminsignup`
--

INSERT INTO `adminsignup` (`adminid`, `name`, `email`, `phone`, `work`, `password`, `status`, `updated`) VALUES
(2, 'Hemchandra Padlikar', 'hemchandra@gmail.com', '1236547890', 'Jr. Asst. Librarian', 'e0fe06cb99c845e102e5cb89d415419f', 'active', '2021-06-30 15:56:06'),
(3, 'Prof. Nilesh Mahajan', 'nileshmahajan@gmail.com', '9764157232', 'Librarian', '3d7f1519654de9db7a5090ad95d5d01e', 'active', '2021-06-30 15:56:09');

-- --------------------------------------------------------

--
-- Table structure for table `computer`
--

CREATE TABLE `computer` (
  `id` int(11) NOT NULL,
  `bookname` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `edition` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `computer`
--

INSERT INTO `computer` (`id`, `bookname`, `author`, `edition`, `file`, `updated`) VALUES
(1, 'python', 'guido van rossam', '1st', '', '2021-06-17 11:01:34'),
(10, 'C - Language', 'Denis Ritchie', '1st', '', '2021-06-27 17:23:32'),
(12, 'Linux Operating System', 'Linus Torlwands', '2nd\r\n', '', '2021-06-27 17:25:09'),
(16, 'Nishant Vaitage', 'asdf', '12', '', '2021-06-30 15:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phoneno` varchar(13) NOT NULL,
  `message` varchar(200) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `sname`, `email`, `phoneno`, `message`, `updated`) VALUES
(32, 'ashish', 'ashish@gmail.com', '9660502310', 'Please send me more python books', '2021-06-28 09:05:05'),
(33, 'Harsh', 'harsh@gmail.com', '7387352531', 'Please provide me previous end term exam papers', '2021-06-29 11:12:42'),
(34, 'Apu Mondal', 'apumondal0097@gmail.com', '8250464580', 'Please provide me 4 billion$', '2021-07-01 08:21:44');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id` int(11) NOT NULL,
  `bookname` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `edition` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `bookname`, `author`, `edition`, `file`, `updated`) VALUES
(1, 'Linux Journal', 'Prof. Hemchandra Padlikar', '1st', '', '2021-07-01 04:17:20');

-- --------------------------------------------------------

--
-- Table structure for table `magazine`
--

CREATE TABLE `magazine` (
  `id` int(11) NOT NULL,
  `bookname` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `edition` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `management`
--

CREATE TABLE `management` (
  `id` int(11) NOT NULL,
  `bookname` varchar(200) NOT NULL,
  `author` varchar(100) NOT NULL,
  `edition` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `management`
--

INSERT INTO `management` (`id`, `bookname`, `author`, `edition`, `file`, `updated`) VALUES
(1, 'management information system', 'xyz', '1st', '', '2021-06-15 18:19:59'),
(7, 'abc', 'xyz', '2nd', '', '2021-06-23 04:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `prnno` int(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `status` varchar(255) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `prnno`, `course`, `email`, `phone`, `pass`, `status`, `updated`) VALUES
(1, 'Ashish Kumar', 1903100601, 'MCA', 'ashish@gmail.com', '7004295272', '7b69ad8a8999d4ca7c42b8a729fb0ffd', 'active', '2021-07-01 04:03:51'),
(2, 'Nishant Vaitage', 1903100134, 'MCA', 'nishantvaitage7125@gmail.com', '8788850239', '048a338d68b1b0ea9f2fc6004763d019', 'active', '2021-07-01 08:24:58'),
(26, 'Nishant Mondal', 1903100135, 'MCA', 'apumondal0097@gmail.com', '8250464580', 'b9f0e438afb958a489b0b601b46b4f27', 'active', '2021-07-01 08:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `thesis`
--

CREATE TABLE `thesis` (
  `id` int(11) NOT NULL,
  `bookname` varchar(200) NOT NULL,
  `author` varchar(200) NOT NULL,
  `edition` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`id`, `bookname`, `author`, `edition`, `file`, `updated`) VALUES
(1, 'abc', 'xyz', '2nd', '', '2021-06-23 03:34:47'),
(5, 'Library Resources', 'Ashish & Yashdeep', '1st', '', '2021-07-01 04:14:16'),
(6, 'Library Resources', 'Ashish & Yashdeep', '1st', '', '2021-07-01 04:16:38');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `prnno` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`id`, `prnno`, `password`, `updated`) VALUES
(10, '123456', 'e10adc3949ba59abbe56e057f20f883e', '2021-06-15 16:31:25'),
(11, '1903100601', '25f9e794323b453885f5181f1b624d0b', '2021-06-16 11:05:25'),
(12, '1903100601', '638c017552a32a2d440d06146c067eeb', '2021-06-17 05:03:31'),
(13, '1903100601', '638c017552a32a2d440d06146c067eeb', '2021-06-17 09:42:51'),
(14, '1903100601', 'fba45604c348d5de9a25b1aa67f39bfa', '2021-06-17 10:04:34'),
(15, '1903100601', '638c017552a32a2d440d06146c067eeb', '2021-06-17 10:04:53'),
(16, '1903100601', '638c017552a32a2d440d06146c067eeb', '2021-06-17 10:59:43'),
(17, '1903100601', '638c017552a32a2d440d06146c067eeb', '2021-06-17 11:37:08'),
(18, '1903100601', '638c017552a32a2d440d06146c067eeb', '2021-06-17 13:23:06'),
(19, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-17 13:26:22'),
(20, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-17 15:56:14'),
(21, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-17 16:00:58'),
(22, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-17 16:15:30'),
(23, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 03:20:28'),
(24, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 04:16:53'),
(26, '1903100135', '35cefbb0e86d4b7b1411a43e2f2ffc25', '2021-06-18 06:05:10'),
(27, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 06:18:55'),
(28, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 06:20:32'),
(29, '1903100601', '638c017552a32a2d440d06146c067eeb', '2021-06-18 06:26:20'),
(30, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 07:22:10'),
(31, '193100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 09:09:24'),
(32, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 09:09:54'),
(33, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 12:45:50'),
(34, '1903100601', '638c017552a32a2d440d06146c067eeb', '2021-06-18 12:53:05'),
(35, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 13:04:26'),
(36, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 13:14:24'),
(37, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 14:42:55'),
(38, '193100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 14:49:26'),
(39, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 14:49:59'),
(40, '193100314', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 15:48:11'),
(41, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 15:48:34'),
(42, 'uytre', 'd8578edf8458ce06fbc5bb76a58c5ca4', '2021-06-18 16:43:43'),
(43, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 16:44:00'),
(44, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-18 16:54:27'),
(45, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-19 02:38:37'),
(46, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-19 03:00:04'),
(47, '1903100601', '7b69ad8a8999d4ca7c42b8a729fb0ffd', '2021-06-19 05:11:24'),
(48, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-19 05:15:47'),
(49, '1903100601', '7b69ad8a8999d4ca7c42b8a729fb0ffd', '2021-06-19 05:26:24'),
(50, '1903100601', '7b69ad8a8999d4ca7c42b8a729fb0ffd', '2021-06-19 05:26:43'),
(51, '1903100601', '7b69ad8a8999d4ca7c42b8a729fb0ffd', '2021-06-19 05:27:39'),
(52, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-19 05:27:54'),
(53, '1903100601', '7b69ad8a8999d4ca7c42b8a729fb0ffd', '2021-06-19 06:02:36'),
(54, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-19 06:07:08'),
(55, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-19 08:58:12'),
(56, '1903100134', '86119e55ee53cc8e91c65180d552d5b1', '2021-06-19 11:02:13'),
(57, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-19 11:02:23'),
(58, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-19 11:44:30'),
(59, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-19 11:55:00'),
(60, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-19 15:17:03'),
(61, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-19 16:00:25'),
(62, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-19 16:11:55'),
(63, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-19 16:15:14'),
(64, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-19 16:27:29'),
(65, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-20 02:45:07'),
(66, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-20 04:24:37'),
(67, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-20 05:22:27'),
(68, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-20 06:12:26'),
(69, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-20 07:58:39'),
(70, '190310013', '0e11d184398255abe79cac2d7d7fec73', '2021-06-20 13:55:55'),
(71, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-20 13:56:10'),
(72, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-22 03:13:37'),
(73, '1903100134', 'ce0440eb5856a8bb4f04c401ef534946', '2021-06-22 13:56:19'),
(74, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-22 13:56:36'),
(75, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-22 15:28:46'),
(76, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-22 16:02:59'),
(77, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-22 16:03:12'),
(78, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-22 16:04:32'),
(79, '1903100134', '0e11d184398255abe79cac2d7d7fec73', '2021-06-23 04:11:26'),
(80, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-23 04:11:57'),
(81, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-23 14:29:16'),
(82, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-23 15:47:58'),
(83, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-26 15:28:44'),
(84, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-27 14:51:40'),
(85, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-27 17:16:21'),
(86, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-28 04:02:26'),
(87, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-28 09:03:56'),
(88, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-28 13:50:04'),
(89, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-28 14:10:18'),
(90, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-29 11:08:48'),
(91, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-29 11:09:57'),
(92, '1903100134', '609029a7d5c62daf52f947fad5413842', '2021-06-29 11:19:41'),
(93, '1903100134NPV@nishant08', '24d877eca10895461a2cbe699421719e', '2021-06-29 11:20:08'),
(94, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-29 11:20:23'),
(95, '1903100134', 'c8725d003379c93136f1d08ddf116122', '2021-06-30 07:08:55'),
(96, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-30 07:09:08'),
(97, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-30 08:00:49'),
(98, '1903100134', '09e17403cf28f420389a0e39d5996509', '2021-06-30 12:29:49'),
(99, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-30 12:30:03'),
(100, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-30 15:57:23'),
(101, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-30 15:59:42'),
(102, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-06-30 16:00:42'),
(103, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-07-01 04:09:52'),
(104, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-07-01 04:12:07'),
(105, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-07-01 04:12:37'),
(106, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-07-01 04:13:44'),
(107, '1903100135', 'b9f0e438afb958a489b0b601b46b4f27', '2021-07-01 08:18:21'),
(108, '1903100134', '048a338d68b1b0ea9f2fc6004763d019', '2021-07-01 08:24:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `adminsignup`
--
ALTER TABLE `adminsignup`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `computer`
--
ALTER TABLE `computer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `magazine`
--
ALTER TABLE `magazine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `management`
--
ALTER TABLE `management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `prnno` (`prnno`);

--
-- Indexes for table `thesis`
--
ALTER TABLE `thesis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `adminsignup`
--
ALTER TABLE `adminsignup`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `computer`
--
ALTER TABLE `computer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `magazine`
--
ALTER TABLE `magazine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `management`
--
ALTER TABLE `management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `thesis`
--
ALTER TABLE `thesis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
