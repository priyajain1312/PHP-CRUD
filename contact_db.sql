SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
-- Database: `Contact_db`
--
-- --------------------------------------------------------
--
-- Table structure for table `admins`
--
CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
--
-- Table structure for table `contacts`
--
CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `contacts`
--
INSERT INTO `contacts` (`id`, `name`, `email`, `password`, `phone`, `created`) VALUES
(1, 'Ahsan Saeed', 'ahsansaeed067@gmail.com', 'Vm0xMFlWbFdWWGhVYmxKWFltdHdVRlpzV21GWFJscHlWV3RLVUZWVU1Eaz0=', '03218878961', '2018-05-01 13:07:24');
-- --------------------------------------------------------
--
-- Table structure for table `contact1`
--
CREATE TABLE `nurses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
--
-- Dumping data for table `contact1`
--
INSERT INTO `contact1` (`id`, `name`, `email`, `password`, `phone`, `created`) VALUES
(1, 'Ahsan', 'ahsansaeed067@gmail.com', 'MTIzNDU=', '03218878961', '2018-06-27 13:39:31'),
(2, '2', 'ABC', 'WFla', '123456789', '2018-07-06 13:50:24'),
(3, 'Shehryar khan', 'shehryar@appryx.com', 'YXBwcnl4', '3433243243', '2018-07-06 18:12:35');
-- --------------------------------------------------------

-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);
--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);
--
-- Indexes for table `contact1`
--
ALTER TABLE `contact1`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact1`
--
ALTER TABLE `contact1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
