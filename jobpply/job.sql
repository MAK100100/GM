-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2019 at 10:31 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job`
--

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

DROP TABLE IF EXISTS `cv`;
CREATE TABLE IF NOT EXISTS `cv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `birthday` year(4) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `certificate_1` varchar(50) NOT NULL,
  `specialty_1` varchar(20) NOT NULL,
  `date_1` year(4) NOT NULL,
  `certificate_2` varchar(50) DEFAULT NULL,
  `specialty_2` varchar(20) DEFAULT NULL,
  `date_2` int(4) DEFAULT NULL,
  `course_1` varchar(50) DEFAULT NULL,
  `date_3` int(4) DEFAULT NULL,
  `course_2` varchar(50) DEFAULT NULL,
  `date_4` int(4) DEFAULT NULL,
  `details` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `full_name`, `birthday`, `mobile`, `email`, `address`, `certificate_1`, `specialty_1`, `date_1`, `certificate_2`, `specialty_2`, `date_2`, `course_1`, `date_3`, `course_2`, `date_4`, `details`) VALUES
(1, 'مهند عاصم كاظم عريعر', 1987, '', '', 'العراق النجف حي الاطباء', '1', 'علوم حاسبات', 2009, '1', 'حاسبات', 2014, 'معهد توفل', 2010, 'سسكو', 2012, 'لاتوجد'),
(2, 'مهند عاصم كاظم عريعر', 1987, '', '', 'العراق النجف حي الاطباء', '2', 'علوم حاسبات', 2009, '1', 'حاسبات', 2014, 'معهد توفل', 2010, 'سسكو', 2012, 'ok'),
(3, 'مهند عاصم كاظم عريعر', 1987, '278585858', 'mm@mm.com', 'العراق النجف حي الاطباء', '2', 'علوم حاسبات', 2009, '1', 'حاسبات', 2014, 'معهد توفل', 2010, 'سسكو', 2012, 'gh'),
(4, 'aaaa', 1973, '1234567890', NULL, 'etgqw34n436 mn', 'ersyne', 'ebhrern', 1990, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'مهند عاصم كاظم عريعر', 1987, '278585858', 'pma.nanno@gmail.com', 'العراق النجف حي الاطباء', '1', 'علوم حاسبات', 2009, '0', '', 0, '', 0, '', 0, ''),
(7, 'غيث حسن علوان الخزاعي', 1987, '07206205050', 'mm@mm.com', 'العراق النجف حي الاطباء', '3', 'علوم حاسبات', 2009, '', '', 0, '', 0, '', 0, ''),
(8, 'غيث حسن علوان الخزاعي', 1987, '07206205050', 'mm@mm.com', 'العراق النجف حي الاطباء', '3', 'علوم حاسبات', 2009, '', '', 0, 'سسكو', 0, '', 2012, ''),
(9, 'غيث حسن علوان الخزاعي', 1987, '07378585858', 'nanno_no@yahoo.com', 'العراق النجف حي الاطباء', '1', 'علوم حاسبات', 2009, '', '', 0, '', 0, '', 0, ''),
(10, 'رشاد معين', 1988, '07888888888', 'mm@mm.com', 'العراق النجف ', 'بكلوريوس', 'بكلوريوس', 2015, 'ماجستير', 'هندسة', 2017, 'معهد توفل', 2010, '', 0, ''),
(11, 'مهند عاصم كاظم عريعر', 1987, '', '', 'العراق النجف حي الاطباء', '1', 'علوم حاسبات', 2009, '1', 'حاسبات', 2014, 'معهد توفل', 2010, 'سسكو', 2012, 'لاتوجد'),
(12, 'غيث حسن علوان الخزاعي', 1987, '07378585858', 'nanno_no@yahoo.com', 'العراق النجف حي الاطباء', '1', 'علوم حاسبات', 2009, '', '', 0, '', 0, '', 0, ''),
(13, 'رشاد معين', 1988, '07888888888', 'mm@mm.com', 'العراق النجف ', 'بكلوريوس', 'بكلوريوس', 2015, 'ماجستير', 'هندسة', 2017, 'معهد توفل', 2010, '', 0, ''),
(14, 'غيث حسن علوان الخزاعي', 1987, '07206205050', 'mm@mm.com', 'العراق النجف حي الاطباء', '3', 'علوم حاسبات', 2009, '', '', 0, '', 0, '', 0, ''),
(15, 'غيث حسن علوان الخزاعي', 1987, '07206205050', 'mm@mm.com', 'العراق النجف حي الاطباء', '3', 'علوم حاسبات', 2009, '', '', 0, 'سسكو', 0, '', 2012, ''),
(16, 'غيث حسن علوان الخزاعي', 1987, '07378585858', 'nanno_no@yahoo.com', 'العراق النجف حي الاطباء', '1', 'علوم حاسبات', 2009, '', '', 0, '', 0, '', 0, ''),
(17, 'رشاد معين', 1988, '07888888888', 'mm@mm.com', 'العراق النجف ', 'بكلوريوس', 'بكلوريوس', 2015, 'ماجستير', 'هندسة', 2017, 'معهد توفل', 2010, '', 0, ''),
(18, 'مهند عاصم كاظم عريعر', 1987, '', '', 'العراق النجف حي الاطباء', '1', 'علوم حاسبات', 2009, '1', 'حاسبات', 2014, 'معهد توفل', 2010, 'سسكو', 2012, 'لاتوجد'),
(19, 'غيث حسن علوان الخزاعي', 1987, '07378585858', 'nanno_no@yahoo.com', 'العراق النجف حي الاطباء', '1', 'علوم حاسبات', 2009, '', '', 0, '', 0, '', 0, ''),
(20, 'رشاد معين', 1988, '07888888888', 'mm@mm.com', 'العراق النجف ', 'بكلوريوس', 'بكلوريوس', 2015, 'ماجستير', 'هندسة', 2017, 'معهد توفل', 2010, '', 0, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
