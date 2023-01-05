-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2019 at 01:52 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payrolldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `2018-12-01-15`
--

CREATE TABLE `2018-12-01-15` (
  `id` int(15) UNSIGNED NOT NULL,
  `emp_ID` int(15) NOT NULL,
  `name` varchar(63) NOT NULL,
  `b_sal` decimal(27,2) NOT NULL,
  `bi_sal` decimal(27,2) NOT NULL,
  `d_sal` decimal(27,2) NOT NULL,
  `dp` double NOT NULL,
  `dpsh` double NOT NULL,
  `dprh` double NOT NULL,
  `b_total` decimal(27,2) NOT NULL,
  `oth` double NOT NULL,
  `otv` decimal(27,2) NOT NULL,
  `allowance` decimal(27,2) NOT NULL,
  `cola` decimal(27,2) NOT NULL,
  `tmb` decimal(27,2) NOT NULL,
  `uth` double NOT NULL,
  `utv` decimal(27,2) NOT NULL,
  `late_m` double NOT NULL,
  `late_v` decimal(27,2) NOT NULL,
  `tax` decimal(27,2) NOT NULL,
  `sss_p` decimal(27,2) NOT NULL,
  `sss_l` decimal(27,2) NOT NULL,
  `mdmf_p` decimal(27,2) NOT NULL,
  `mdmf_l` decimal(27,2) NOT NULL,
  `mdmf_h` decimal(27,2) NOT NULL,
  `mdmf_t` decimal(27,2) NOT NULL,
  `phic` decimal(27,2) NOT NULL,
  `total` decimal(27,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2018-12-01-15`
--

INSERT INTO `2018-12-01-15` (`id`, `emp_ID`, `name`, `b_sal`, `bi_sal`, `d_sal`, `dp`, `dpsh`, `dprh`, `b_total`, `oth`, `otv`, `allowance`, `cola`, `tmb`, `uth`, `utv`, `late_m`, `late_v`, `tax`, `sss_p`, `sss_l`, `mdmf_p`, `mdmf_l`, `mdmf_h`, `mdmf_t`, `phic`, `total`) VALUES
(1, 1, 'John Appleseed', '10000.00', '5000.00', '384.62', 0, 0, 0, '0.00', 0, '0.00', '0.00', '0.00', '0.00', 0, '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `2018-12-16-31`
--

CREATE TABLE `2018-12-16-31` (
  `id` int(15) UNSIGNED NOT NULL,
  `emp_ID` int(15) NOT NULL,
  `name` varchar(63) NOT NULL,
  `b_sal` decimal(27,2) NOT NULL,
  `bi_sal` decimal(27,2) NOT NULL,
  `d_sal` decimal(27,2) NOT NULL,
  `dp` double NOT NULL,
  `dpsh` double NOT NULL,
  `dprh` double NOT NULL,
  `b_total` decimal(27,2) NOT NULL,
  `oth` double NOT NULL,
  `otv` decimal(27,2) NOT NULL,
  `allowance` decimal(27,2) NOT NULL,
  `cola` decimal(27,2) NOT NULL,
  `tmb` decimal(27,2) NOT NULL,
  `uth` double NOT NULL,
  `utv` decimal(27,2) NOT NULL,
  `late_m` double NOT NULL,
  `late_v` decimal(27,2) NOT NULL,
  `tax` decimal(27,2) NOT NULL,
  `sss_p` decimal(27,2) NOT NULL,
  `sss_l` decimal(27,2) NOT NULL,
  `mdmf_p` decimal(27,2) NOT NULL,
  `mdmf_l` decimal(27,2) NOT NULL,
  `mdmf_h` decimal(27,2) NOT NULL,
  `mdmf_t` decimal(27,2) NOT NULL,
  `phic` decimal(27,2) NOT NULL,
  `total` decimal(27,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2019-01-01-15`
--

CREATE TABLE `2019-01-01-15` (
  `id` int(15) UNSIGNED NOT NULL,
  `emp_ID` int(15) NOT NULL,
  `name` varchar(63) NOT NULL,
  `b_sal` decimal(27,2) NOT NULL,
  `bi_sal` decimal(27,2) NOT NULL,
  `d_sal` decimal(27,2) NOT NULL,
  `dp` double NOT NULL,
  `dpsh` double NOT NULL,
  `dprh` double NOT NULL,
  `b_total` decimal(27,2) NOT NULL,
  `oth` double NOT NULL,
  `otv` decimal(27,2) NOT NULL,
  `allowance` decimal(27,2) NOT NULL,
  `cola` decimal(27,2) NOT NULL,
  `tmb` decimal(27,2) NOT NULL,
  `uth` double NOT NULL,
  `utv` decimal(27,2) NOT NULL,
  `late_m` double NOT NULL,
  `late_v` decimal(27,2) NOT NULL,
  `tax` decimal(27,2) NOT NULL,
  `sss_p` decimal(27,2) NOT NULL,
  `sss_l` decimal(27,2) NOT NULL,
  `mdmf_p` decimal(27,2) NOT NULL,
  `mdmf_l` decimal(27,2) NOT NULL,
  `mdmf_h` decimal(27,2) NOT NULL,
  `mdmf_t` decimal(27,2) NOT NULL,
  `phic` decimal(27,2) NOT NULL,
  `total` decimal(27,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2019-01-16-31`
--

CREATE TABLE `2019-01-16-31` (
  `id` int(15) UNSIGNED NOT NULL,
  `emp_ID` int(15) NOT NULL,
  `name` varchar(63) NOT NULL,
  `b_sal` decimal(27,2) NOT NULL,
  `bi_sal` decimal(27,2) NOT NULL,
  `d_sal` decimal(27,2) NOT NULL,
  `dp` double NOT NULL,
  `dpsh` double NOT NULL,
  `dprh` double NOT NULL,
  `b_total` decimal(27,2) NOT NULL,
  `oth` double NOT NULL,
  `otv` decimal(27,2) NOT NULL,
  `allowance` decimal(27,2) NOT NULL,
  `cola` decimal(27,2) NOT NULL,
  `tmb` decimal(27,2) NOT NULL,
  `uth` double NOT NULL,
  `utv` decimal(27,2) NOT NULL,
  `late_m` double NOT NULL,
  `late_v` decimal(27,2) NOT NULL,
  `tax` decimal(27,2) NOT NULL,
  `sss_p` decimal(27,2) NOT NULL,
  `sss_l` decimal(27,2) NOT NULL,
  `mdmf_p` decimal(27,2) NOT NULL,
  `mdmf_l` decimal(27,2) NOT NULL,
  `mdmf_h` decimal(27,2) NOT NULL,
  `mdmf_t` decimal(27,2) NOT NULL,
  `phic` decimal(27,2) NOT NULL,
  `total` decimal(27,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2019-02-01-15`
--

CREATE TABLE `2019-02-01-15` (
  `id` int(15) UNSIGNED NOT NULL,
  `emp_ID` int(15) NOT NULL,
  `name` varchar(63) NOT NULL,
  `b_sal` decimal(27,2) NOT NULL,
  `bi_sal` decimal(27,2) NOT NULL,
  `d_sal` decimal(27,2) NOT NULL,
  `dp` double NOT NULL,
  `dpsh` double NOT NULL,
  `dprh` double NOT NULL,
  `b_total` decimal(27,2) NOT NULL,
  `oth` double NOT NULL,
  `otv` decimal(27,2) NOT NULL,
  `allowance` decimal(27,2) NOT NULL,
  `cola` decimal(27,2) NOT NULL,
  `tmb` decimal(27,2) NOT NULL,
  `uth` double NOT NULL,
  `utv` decimal(27,2) NOT NULL,
  `late_m` double NOT NULL,
  `late_v` decimal(27,2) NOT NULL,
  `tax` decimal(27,2) NOT NULL,
  `sss_p` decimal(27,2) NOT NULL,
  `sss_l` decimal(27,2) NOT NULL,
  `mdmf_p` decimal(27,2) NOT NULL,
  `mdmf_l` decimal(27,2) NOT NULL,
  `mdmf_h` decimal(27,2) NOT NULL,
  `mdmf_t` decimal(27,2) NOT NULL,
  `phic` decimal(27,2) NOT NULL,
  `total` decimal(27,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2019-02-16-28`
--

CREATE TABLE `2019-02-16-28` (
  `id` int(15) UNSIGNED NOT NULL,
  `emp_ID` int(15) NOT NULL,
  `name` varchar(63) NOT NULL,
  `b_sal` decimal(27,2) NOT NULL,
  `bi_sal` decimal(27,2) NOT NULL,
  `d_sal` decimal(27,2) NOT NULL,
  `dp` double NOT NULL,
  `dpsh` double NOT NULL,
  `dprh` double NOT NULL,
  `b_total` decimal(27,2) NOT NULL,
  `oth` double NOT NULL,
  `otv` decimal(27,2) NOT NULL,
  `allowance` decimal(27,2) NOT NULL,
  `cola` decimal(27,2) NOT NULL,
  `tmb` decimal(27,2) NOT NULL,
  `uth` double NOT NULL,
  `utv` decimal(27,2) NOT NULL,
  `late_m` double NOT NULL,
  `late_v` decimal(27,2) NOT NULL,
  `tax` decimal(27,2) NOT NULL,
  `sss_p` decimal(27,2) NOT NULL,
  `sss_l` decimal(27,2) NOT NULL,
  `mdmf_p` decimal(27,2) NOT NULL,
  `mdmf_l` decimal(27,2) NOT NULL,
  `mdmf_h` decimal(27,2) NOT NULL,
  `mdmf_t` decimal(27,2) NOT NULL,
  `phic` decimal(27,2) NOT NULL,
  `total` decimal(27,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2019-03-01-15`
--

CREATE TABLE `2019-03-01-15` (
  `id` int(15) UNSIGNED NOT NULL,
  `emp_ID` int(15) NOT NULL,
  `name` varchar(63) NOT NULL,
  `b_sal` decimal(27,2) NOT NULL,
  `bi_sal` decimal(27,2) NOT NULL,
  `d_sal` decimal(27,2) NOT NULL,
  `dp` double NOT NULL,
  `dpsh` double NOT NULL,
  `dprh` double NOT NULL,
  `b_total` decimal(27,2) NOT NULL,
  `oth` double NOT NULL,
  `otv` decimal(27,2) NOT NULL,
  `allowance` decimal(27,2) NOT NULL,
  `cola` decimal(27,2) NOT NULL,
  `tmb` decimal(27,2) NOT NULL,
  `uth` double NOT NULL,
  `utv` decimal(27,2) NOT NULL,
  `late_m` double NOT NULL,
  `late_v` decimal(27,2) NOT NULL,
  `tax` decimal(27,2) NOT NULL,
  `sss_p` decimal(27,2) NOT NULL,
  `sss_l` decimal(27,2) NOT NULL,
  `mdmf_p` decimal(27,2) NOT NULL,
  `mdmf_l` decimal(27,2) NOT NULL,
  `mdmf_h` decimal(27,2) NOT NULL,
  `mdmf_t` decimal(27,2) NOT NULL,
  `phic` decimal(27,2) NOT NULL,
  `total` decimal(27,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2019-03-01-15`
--

INSERT INTO `2019-03-01-15` (`id`, `emp_ID`, `name`, `b_sal`, `bi_sal`, `d_sal`, `dp`, `dpsh`, `dprh`, `b_total`, `oth`, `otv`, `allowance`, `cola`, `tmb`, `uth`, `utv`, `late_m`, `late_v`, `tax`, `sss_p`, `sss_l`, `mdmf_p`, `mdmf_l`, `mdmf_h`, `mdmf_t`, `phic`, `total`) VALUES
(1, 1, 'John Appleseed', '10000.00', '5000.00', '384.62', 12, 0, 0, '4615.38', 0, '0.00', '0.00', '0.00', '0.00', 0, '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '4615.38'),
(2, 2, 'Jane Doe', '10400.00', '5200.00', '400.00', 13, 0, 0, '5200.00', 0, '0.00', '250.00', '0.00', '0.00', 0, '0.00', 0, '0.00', '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5350.00'),
(3, 3, 'Cardo Dalisay', '12000.00', '6000.00', '461.54', 12, 0, 0, '5538.46', 0, '0.00', '100.00', '0.00', '0.00', 0, '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5638.46'),
(4, 7, 'Hoo Hoo', '17500.00', '8750.00', '673.08', 12, 0, 0, '8076.92', 0, '0.00', '10.00', '10.00', '0.00', 0, '0.00', 0, '0.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '8016.92');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `ID` int(15) NOT NULL,
  `fullname` varchar(127) NOT NULL,
  `email` varchar(127) NOT NULL,
  `password` varchar(127) NOT NULL,
  `birthdate` varchar(127) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `civil_status` varchar(127) NOT NULL,
  `educational_background` varchar(127) NOT NULL,
  `address` varchar(255) NOT NULL,
  `branch` varchar(127) NOT NULL,
  `department` varchar(127) NOT NULL,
  `position` varchar(127) NOT NULL,
  `date_hired` varchar(127) NOT NULL,
  `status` varchar(15) NOT NULL,
  `admin` varchar(7) NOT NULL,
  `salary_rate` decimal(27,2) NOT NULL,
  `allowance` decimal(27,2) NOT NULL,
  `COLA` decimal(27,2) NOT NULL,
  `tax` decimal(27,2) NOT NULL,
  `SSS_Premium` decimal(27,2) NOT NULL,
  `SSS_Loan` decimal(27,2) NOT NULL,
  `MDMF_Premium` decimal(27,2) NOT NULL,
  `MDMF_Loan` decimal(27,2) NOT NULL,
  `MDMF_Housing` decimal(27,2) NOT NULL,
  `MDMF_2` decimal(27,2) NOT NULL,
  `PHIC_Premium` decimal(27,2) NOT NULL,
  `img_path` varchar(127) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`ID`, `fullname`, `email`, `password`, `birthdate`, `gender`, `civil_status`, `educational_background`, `address`, `branch`, `department`, `position`, `date_hired`, `status`, `admin`, `salary_rate`, `allowance`, `COLA`, `tax`, `SSS_Premium`, `SSS_Loan`, `MDMF_Premium`, `MDMF_Loan`, `MDMF_Housing`, `MDMF_2`, `PHIC_Premium`, `img_path`) VALUES
(1, 'John Appleseed', 'johnappleseed@icloud.com', 'pass123', '01/01/1980', 'Male', 'Single', 'College Graduate', 'Davao City', 'Gaisano Grand Mall Ilustre', 'Executive', 'CEO', 'January 16, 2010', 'Active', 'Yes', '10000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '68090f16483c79c91344e2167728d886.png'),
(2, 'Riley Reid', 'rileyreid@gmail.com', 'RReid12345', '02/28/1996', 'Female', 'Married', 'Post Graduate Diploma', 'Panacan, Davao City', 'Gaisano Grand Mall Ilustre', 'Accounting', 'Accountant', 'June 8, 2015', 'Inactive', 'Yes', '10400.00', '250.00', '0.00', '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'a9601f3839e5d5da764c1861a5e1daf6.jpg'),
(3, 'Cardo Dalisay', 'cardodalisay123@yahoo.com', 'cardo123', '07/17/2000', 'Male', 'Single', 'Vocational Diploma', 'Toril, Davao City', 'Gaisano Grand Mall Ilustre', 'Utility', 'Janitor', 'March 3, 2018', 'Resigned', 'No', '12000.00', '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '11b316e87d50df1df0c1dc3c37b18ac5.png'),
(4, 'User Example', 'user@example.com', 'passWORD123', '01/01/1990', 'Male', 'Single', 'Doctorate Degree', 'Davao City', 'Gaisano Grand Mall Ilustre', 'Accounting', 'Accounting Clerk', '03/05/2018', 'Active', 'No', '16000.00', '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5658ffccee7f0ebfda2b226238b1eb6e.png'),
(5, 'Full Name', 'email@example.com', 'ilovePCT12345', '02/28/1970', 'Female', 'Married', 'Post Graduate Diploma', 'Surigao del Norte', 'Gaisano Mall of Davao', 'Sales', 'Junior Sales Representative', '05/04/2015', 'Active', 'Yes', '13000.00', '200.00', '0.00', '50.00', '100.00', '0.00', '100.00', '0.00', '100.00', '0.00', '100.00', '11b316e87d50df1df0c1dc3c37b18ac5.png'),
(6, 'Elliot Alderson', 'elliot@protonmail.com', 'H3LL0world', '01/07/1985', 'Male', 'Single', 'College Graduate', 'United States Of America', 'Gaisano Grand Mall Ilustre', 'Sales', 'Network Engineer', '06/05/2017', 'Active', 'No', '15000.00', '225.00', '100.00', '250.00', '125.00', '275.00', '150.00', '300.00', '175.00', '325.00', '200.00', 'c1d22c1bba36687c05ab17f1ae4e0686.png'),
(7, 'Hulk Hogan', 'hulkhogan@yahoo.com', 'Hulk12345', 'October 10, 2019', 'Male', 'Single', 'College Graduate', 'Kyoto, Japan', 'Gaisano Mall of Davao', 'Accounting', 'Accounting Clerk', '04/12/2010', 'Active', 'No', '17500.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', '10.00', 'c683b22e0171b295204b8dd0376576ea.jpg'),
(8, 'Under Oath', 'underoath@protonmail.com', 'underOATH123', 'September 06, 1960', 'Male', 'Married', 'Doctorate Degree', 'New York, USA', 'Gaisano Mall of Davao', 'Executive', 'Chief Technology Officer', 'March 06, 1996', 'Active', 'Yes', '18000.00', '0.00', '0.00', '180.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'be6bb06c390eb6e8a3c0d2c83d655afb.png'),
(9, 'James Weird', 'jamesweird@icloud.com', 'Weird12345', 'March 03, 1992', 'Male', 'Single', 'College Graduate', 'Pasay City, Philippines', 'Gaisano Mall of Davao', 'Accounting', 'Support', 'October 01, 2010', 'Active', 'No', '19000.00', '10.00', '25.00', '10.00', '25.00', '10.00', '25.00', '10.00', '25.00', '10.00', '25.00', '47579f3799c9c8b5f2f429fb077e1932.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `emp_1`
--

CREATE TABLE `emp_1` (
  `empslip_ID` int(15) UNSIGNED NOT NULL,
  `pdate` varchar(63) NOT NULL,
  `b_sal` decimal(27,2) NOT NULL,
  `d_sal` decimal(27,2) NOT NULL,
  `dp` double NOT NULL,
  `dpsh` double NOT NULL,
  `dprh` double NOT NULL,
  `b_total` decimal(27,2) NOT NULL,
  `oth` double NOT NULL,
  `otv` decimal(27,2) NOT NULL,
  `allowance` decimal(27,2) NOT NULL,
  `cola` decimal(27,2) NOT NULL,
  `tmb` decimal(27,2) NOT NULL,
  `uth` double NOT NULL,
  `utv` decimal(27,2) NOT NULL,
  `late_m` double NOT NULL,
  `late_v` decimal(27,2) NOT NULL,
  `tax` decimal(27,2) NOT NULL,
  `sss_p` decimal(27,2) NOT NULL,
  `sss_l` decimal(27,2) NOT NULL,
  `mdmf_p` decimal(27,2) NOT NULL,
  `mdmf_l` decimal(27,2) NOT NULL,
  `mdmf_h` decimal(27,2) NOT NULL,
  `mdmf_t` decimal(27,2) NOT NULL,
  `phic` decimal(27,2) NOT NULL,
  `total` decimal(27,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_1`
--

INSERT INTO `emp_1` (`empslip_ID`, `pdate`, `b_sal`, `d_sal`, `dp`, `dpsh`, `dprh`, `b_total`, `oth`, `otv`, `allowance`, `cola`, `tmb`, `uth`, `utv`, `late_m`, `late_v`, `tax`, `sss_p`, `sss_l`, `mdmf_p`, `mdmf_l`, `mdmf_h`, `mdmf_t`, `phic`, `total`) VALUES
(1, 'March 01-15, 2019', '10000.00', '384.62', 12, 0, 0, '4615.38', 0, '0.00', '0.00', '0.00', '0.00', 0, '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '4615.38'),
(2, 'December 01-15, 2018', '10000.00', '384.62', 0, 0, 0, '0.00', 0, '0.00', '0.00', '0.00', '0.00', 0, '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `emp_2`
--

CREATE TABLE `emp_2` (
  `empslip_ID` int(15) UNSIGNED NOT NULL,
  `pdate` varchar(63) NOT NULL,
  `b_sal` decimal(27,2) NOT NULL,
  `d_sal` decimal(27,2) NOT NULL,
  `dp` double NOT NULL,
  `dpsh` double NOT NULL,
  `dprh` double NOT NULL,
  `b_total` decimal(27,2) NOT NULL,
  `oth` double NOT NULL,
  `otv` decimal(27,2) NOT NULL,
  `allowance` decimal(27,2) NOT NULL,
  `cola` decimal(27,2) NOT NULL,
  `tmb` decimal(27,2) NOT NULL,
  `uth` double NOT NULL,
  `utv` decimal(27,2) NOT NULL,
  `late_m` double NOT NULL,
  `late_v` decimal(27,2) NOT NULL,
  `tax` decimal(27,2) NOT NULL,
  `sss_p` decimal(27,2) NOT NULL,
  `sss_l` decimal(27,2) NOT NULL,
  `mdmf_p` decimal(27,2) NOT NULL,
  `mdmf_l` decimal(27,2) NOT NULL,
  `mdmf_h` decimal(27,2) NOT NULL,
  `mdmf_t` decimal(27,2) NOT NULL,
  `phic` decimal(27,2) NOT NULL,
  `total` decimal(27,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_2`
--

INSERT INTO `emp_2` (`empslip_ID`, `pdate`, `b_sal`, `d_sal`, `dp`, `dpsh`, `dprh`, `b_total`, `oth`, `otv`, `allowance`, `cola`, `tmb`, `uth`, `utv`, `late_m`, `late_v`, `tax`, `sss_p`, `sss_l`, `mdmf_p`, `mdmf_l`, `mdmf_h`, `mdmf_t`, `phic`, `total`) VALUES
(1, 'March 01-15, 2019', '10400.00', '400.00', 13, 0, 0, '5200.00', 0, '0.00', '250.00', '0.00', '0.00', 0, '0.00', 0, '0.00', '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5350.00');

-- --------------------------------------------------------

--
-- Table structure for table `emp_3`
--

CREATE TABLE `emp_3` (
  `empslip_ID` int(15) UNSIGNED NOT NULL,
  `pdate` varchar(63) NOT NULL,
  `b_sal` decimal(27,2) NOT NULL,
  `d_sal` decimal(27,2) NOT NULL,
  `dp` double NOT NULL,
  `dpsh` double NOT NULL,
  `dprh` double NOT NULL,
  `b_total` decimal(27,2) NOT NULL,
  `oth` double NOT NULL,
  `otv` decimal(27,2) NOT NULL,
  `allowance` decimal(27,2) NOT NULL,
  `cola` decimal(27,2) NOT NULL,
  `tmb` decimal(27,2) NOT NULL,
  `uth` double NOT NULL,
  `utv` decimal(27,2) NOT NULL,
  `late_m` double NOT NULL,
  `late_v` decimal(27,2) NOT NULL,
  `tax` decimal(27,2) NOT NULL,
  `sss_p` decimal(27,2) NOT NULL,
  `sss_l` decimal(27,2) NOT NULL,
  `mdmf_p` decimal(27,2) NOT NULL,
  `mdmf_l` decimal(27,2) NOT NULL,
  `mdmf_h` decimal(27,2) NOT NULL,
  `mdmf_t` decimal(27,2) NOT NULL,
  `phic` decimal(27,2) NOT NULL,
  `total` decimal(27,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_3`
--

INSERT INTO `emp_3` (`empslip_ID`, `pdate`, `b_sal`, `d_sal`, `dp`, `dpsh`, `dprh`, `b_total`, `oth`, `otv`, `allowance`, `cola`, `tmb`, `uth`, `utv`, `late_m`, `late_v`, `tax`, `sss_p`, `sss_l`, `mdmf_p`, `mdmf_l`, `mdmf_h`, `mdmf_t`, `phic`, `total`) VALUES
(1, 'March 01-15, 2019', '12000.00', '461.54', 12, 0, 0, '5538.46', 0, '0.00', '100.00', '0.00', '0.00', 0, '0.00', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '5638.46');

-- --------------------------------------------------------

--
-- Table structure for table `emp_4`
--

CREATE TABLE `emp_4` (
  `empslip_ID` int(15) UNSIGNED NOT NULL,
  `pdate` varchar(63) NOT NULL,
  `b_sal` decimal(27,2) NOT NULL,
  `d_sal` decimal(27,2) NOT NULL,
  `dp` double NOT NULL,
  `dpsh` double NOT NULL,
  `dprh` double NOT NULL,
  `b_total` decimal(27,2) NOT NULL,
  `oth` double NOT NULL,
  `otv` decimal(27,2) NOT NULL,
  `allowance` decimal(27,2) NOT NULL,
  `cola` decimal(27,2) NOT NULL,
  `tmb` decimal(27,2) NOT NULL,
  `uth` double NOT NULL,
  `utv` decimal(27,2) NOT NULL,
  `late_m` double NOT NULL,
  `late_v` decimal(27,2) NOT NULL,
  `tax` decimal(27,2) NOT NULL,
  `sss_p` decimal(27,2) NOT NULL,
  `sss_l` decimal(27,2) NOT NULL,
  `mdmf_p` decimal(27,2) NOT NULL,
  `mdmf_l` decimal(27,2) NOT NULL,
  `mdmf_h` decimal(27,2) NOT NULL,
  `mdmf_t` decimal(27,2) NOT NULL,
  `phic` decimal(27,2) NOT NULL,
  `total` decimal(27,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_5`
--

CREATE TABLE `emp_5` (
  `empslip_ID` int(15) UNSIGNED NOT NULL,
  `pdate` varchar(63) NOT NULL,
  `b_sal` decimal(27,2) NOT NULL,
  `d_sal` decimal(27,2) NOT NULL,
  `dp` double NOT NULL,
  `dpsh` double NOT NULL,
  `dprh` double NOT NULL,
  `b_total` decimal(27,2) NOT NULL,
  `oth` double NOT NULL,
  `otv` decimal(27,2) NOT NULL,
  `allowance` decimal(27,2) NOT NULL,
  `cola` decimal(27,2) NOT NULL,
  `tmb` decimal(27,2) NOT NULL,
  `uth` double NOT NULL,
  `utv` decimal(27,2) NOT NULL,
  `late_m` double NOT NULL,
  `late_v` decimal(27,2) NOT NULL,
  `tax` decimal(27,2) NOT NULL,
  `sss_p` decimal(27,2) NOT NULL,
  `sss_l` decimal(27,2) NOT NULL,
  `mdmf_p` decimal(27,2) NOT NULL,
  `mdmf_l` decimal(27,2) NOT NULL,
  `mdmf_h` decimal(27,2) NOT NULL,
  `mdmf_t` decimal(27,2) NOT NULL,
  `phic` decimal(27,2) NOT NULL,
  `total` decimal(27,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_6`
--

CREATE TABLE `emp_6` (
  `empslip_ID` int(15) UNSIGNED NOT NULL,
  `pdate` varchar(63) NOT NULL,
  `b_sal` int(63) NOT NULL,
  `d_sal` int(63) NOT NULL,
  `dp` int(63) NOT NULL,
  `dpsh` int(63) NOT NULL,
  `dprh` int(63) NOT NULL,
  `b_total` int(63) NOT NULL,
  `oth` int(63) NOT NULL,
  `otv` int(63) NOT NULL,
  `allowance` int(63) NOT NULL,
  `cola` int(63) NOT NULL,
  `tmb` int(63) NOT NULL,
  `uth` int(63) NOT NULL,
  `utv` int(63) NOT NULL,
  `late_m` int(63) NOT NULL,
  `late_v` int(63) NOT NULL,
  `tax` int(63) NOT NULL,
  `sss_p` int(63) NOT NULL,
  `sss_l` int(63) NOT NULL,
  `mdmf_p` int(63) NOT NULL,
  `mdmf_l` int(63) NOT NULL,
  `mdmf_h` int(63) NOT NULL,
  `mdmf_t` int(63) NOT NULL,
  `phic` int(63) NOT NULL,
  `total` int(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_7`
--

CREATE TABLE `emp_7` (
  `empslip_ID` int(15) UNSIGNED NOT NULL,
  `pdate` varchar(63) NOT NULL,
  `b_sal` int(63) NOT NULL,
  `d_sal` int(63) NOT NULL,
  `dp` int(63) NOT NULL,
  `dpsh` int(63) NOT NULL,
  `dprh` int(63) NOT NULL,
  `b_total` int(63) NOT NULL,
  `oth` int(63) NOT NULL,
  `otv` int(63) NOT NULL,
  `allowance` int(63) NOT NULL,
  `cola` int(63) NOT NULL,
  `tmb` int(63) NOT NULL,
  `uth` int(63) NOT NULL,
  `utv` int(63) NOT NULL,
  `late_m` int(63) NOT NULL,
  `late_v` int(63) NOT NULL,
  `tax` int(63) NOT NULL,
  `sss_p` int(63) NOT NULL,
  `sss_l` int(63) NOT NULL,
  `mdmf_p` int(63) NOT NULL,
  `mdmf_l` int(63) NOT NULL,
  `mdmf_h` int(63) NOT NULL,
  `mdmf_t` int(63) NOT NULL,
  `phic` int(63) NOT NULL,
  `total` int(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emp_7`
--

INSERT INTO `emp_7` (`empslip_ID`, `pdate`, `b_sal`, `d_sal`, `dp`, `dpsh`, `dprh`, `b_total`, `oth`, `otv`, `allowance`, `cola`, `tmb`, `uth`, `utv`, `late_m`, `late_v`, `tax`, `sss_p`, `sss_l`, `mdmf_p`, `mdmf_l`, `mdmf_h`, `mdmf_t`, `phic`, `total`) VALUES
(1, 'March 01-15, 2019', 17500, 673, 12, 0, 0, 8077, 0, 0, 10, 10, 0, 0, 0, 0, 0, 10, 10, 10, 10, 10, 10, 10, 10, 8017);

-- --------------------------------------------------------

--
-- Table structure for table `emp_8`
--

CREATE TABLE `emp_8` (
  `empslip_ID` int(15) UNSIGNED NOT NULL,
  `pdate` varchar(63) NOT NULL,
  `b_sal` int(63) NOT NULL,
  `d_sal` int(63) NOT NULL,
  `dp` int(63) NOT NULL,
  `dpsh` int(63) NOT NULL,
  `dprh` int(63) NOT NULL,
  `b_total` int(63) NOT NULL,
  `oth` int(63) NOT NULL,
  `otv` int(63) NOT NULL,
  `allowance` int(63) NOT NULL,
  `cola` int(63) NOT NULL,
  `tmb` int(63) NOT NULL,
  `uth` int(63) NOT NULL,
  `utv` int(63) NOT NULL,
  `late_m` int(63) NOT NULL,
  `late_v` int(63) NOT NULL,
  `tax` int(63) NOT NULL,
  `sss_p` int(63) NOT NULL,
  `sss_l` int(63) NOT NULL,
  `mdmf_p` int(63) NOT NULL,
  `mdmf_l` int(63) NOT NULL,
  `mdmf_h` int(63) NOT NULL,
  `mdmf_t` int(63) NOT NULL,
  `phic` int(63) NOT NULL,
  `total` int(63) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `emp_9`
--

CREATE TABLE `emp_9` (
  `empslip_ID` int(15) UNSIGNED NOT NULL,
  `pdate` varchar(63) NOT NULL,
  `b_sal` decimal(27,2) NOT NULL,
  `d_sal` decimal(27,2) NOT NULL,
  `dp` double NOT NULL,
  `dpsh` double NOT NULL,
  `dprh` double NOT NULL,
  `b_total` decimal(27,2) NOT NULL,
  `oth` double NOT NULL,
  `otv` decimal(27,2) NOT NULL,
  `allowance` decimal(27,2) NOT NULL,
  `cola` decimal(27,2) NOT NULL,
  `tmb` decimal(27,2) NOT NULL,
  `uth` double NOT NULL,
  `utv` decimal(27,2) NOT NULL,
  `late_m` double NOT NULL,
  `late_v` decimal(27,2) NOT NULL,
  `tax` decimal(27,2) NOT NULL,
  `sss_p` decimal(27,2) NOT NULL,
  `sss_l` decimal(27,2) NOT NULL,
  `mdmf_p` decimal(27,2) NOT NULL,
  `mdmf_l` decimal(27,2) NOT NULL,
  `mdmf_h` decimal(27,2) NOT NULL,
  `mdmf_t` decimal(27,2) NOT NULL,
  `phic` decimal(27,2) NOT NULL,
  `total` decimal(27,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `id` int(7) UNSIGNED NOT NULL,
  `fy` varchar(31) NOT NULL,
  `fdate` varchar(31) NOT NULL,
  `date` varchar(15) NOT NULL,
  `year` varchar(7) NOT NULL,
  `complete` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`id`, `fy`, `fdate`, `date`, `year`, `complete`) VALUES
(1, 'December 01-15, 2018', '2018-12-01-15', '2018-12', '2018', 'No'),
(2, 'December 16-31, 2018', '2018-12-16-31', '2018-12', '2018', 'No'),
(3, 'January 01-15, 2019', '2019-01-01-15', '2019-01', '2019', 'No'),
(4, 'January 16-31, 2019', '2019-01-16-31', '2019-01', '2019', 'No'),
(5, 'February 01-15, 2019', '2019-02-01-15', '2019-02', '2019', 'No'),
(6, 'February 16-28, 2019', '2019-02-16-28', '2019-02', '2019', 'No'),
(7, 'March 01-15, 2019', '2019-03-01-15', '2019-03', '2019', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `2018-12-01-15`
--
ALTER TABLE `2018-12-01-15`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2018-12-16-31`
--
ALTER TABLE `2018-12-16-31`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2019-01-01-15`
--
ALTER TABLE `2019-01-01-15`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2019-01-16-31`
--
ALTER TABLE `2019-01-16-31`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2019-02-01-15`
--
ALTER TABLE `2019-02-01-15`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2019-02-16-28`
--
ALTER TABLE `2019-02-16-28`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2019-03-01-15`
--
ALTER TABLE `2019-03-01-15`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `emp_1`
--
ALTER TABLE `emp_1`
  ADD PRIMARY KEY (`empslip_ID`);

--
-- Indexes for table `emp_2`
--
ALTER TABLE `emp_2`
  ADD PRIMARY KEY (`empslip_ID`);

--
-- Indexes for table `emp_3`
--
ALTER TABLE `emp_3`
  ADD PRIMARY KEY (`empslip_ID`);

--
-- Indexes for table `emp_4`
--
ALTER TABLE `emp_4`
  ADD PRIMARY KEY (`empslip_ID`);

--
-- Indexes for table `emp_5`
--
ALTER TABLE `emp_5`
  ADD PRIMARY KEY (`empslip_ID`);

--
-- Indexes for table `emp_6`
--
ALTER TABLE `emp_6`
  ADD PRIMARY KEY (`empslip_ID`);

--
-- Indexes for table `emp_7`
--
ALTER TABLE `emp_7`
  ADD PRIMARY KEY (`empslip_ID`);

--
-- Indexes for table `emp_8`
--
ALTER TABLE `emp_8`
  ADD PRIMARY KEY (`empslip_ID`);

--
-- Indexes for table `emp_9`
--
ALTER TABLE `emp_9`
  ADD PRIMARY KEY (`empslip_ID`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `2018-12-01-15`
--
ALTER TABLE `2018-12-01-15`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `2018-12-16-31`
--
ALTER TABLE `2018-12-16-31`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2019-01-01-15`
--
ALTER TABLE `2019-01-01-15`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2019-01-16-31`
--
ALTER TABLE `2019-01-16-31`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2019-02-01-15`
--
ALTER TABLE `2019-02-01-15`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2019-02-16-28`
--
ALTER TABLE `2019-02-16-28`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2019-03-01-15`
--
ALTER TABLE `2019-03-01-15`
  MODIFY `id` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `ID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `emp_1`
--
ALTER TABLE `emp_1`
  MODIFY `empslip_ID` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `emp_2`
--
ALTER TABLE `emp_2`
  MODIFY `empslip_ID` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp_3`
--
ALTER TABLE `emp_3`
  MODIFY `empslip_ID` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp_4`
--
ALTER TABLE `emp_4`
  MODIFY `empslip_ID` int(15) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_5`
--
ALTER TABLE `emp_5`
  MODIFY `empslip_ID` int(15) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_6`
--
ALTER TABLE `emp_6`
  MODIFY `empslip_ID` int(15) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_7`
--
ALTER TABLE `emp_7`
  MODIFY `empslip_ID` int(15) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `emp_8`
--
ALTER TABLE `emp_8`
  MODIFY `empslip_ID` int(15) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `emp_9`
--
ALTER TABLE `emp_9`
  MODIFY `empslip_ID` int(15) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `id` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
