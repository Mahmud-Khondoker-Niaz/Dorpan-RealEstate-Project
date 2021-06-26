-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 07:31 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dorpan`
--

-- --------------------------------------------------------

--
-- Table structure for table `captcha`
--

CREATE TABLE `captcha` (
  `captcha_id` int(11) NOT NULL,
  `captcha_word` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `creat_time` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `captcha`
--

INSERT INTO `captcha` (`captcha_id`, `captcha_word`, `creat_time`) VALUES
(1, NULL, NULL),
(2, NULL, NULL),
(3, NULL, NULL),
(4, NULL, NULL),
(5, NULL, NULL),
(6, NULL, NULL),
(7, NULL, NULL),
(8, NULL, NULL),
(9, '79VthDQX', '1439622321.3396'),
(10, 'HpyjhOBm', '1439622353.5951'),
(11, '2LvpIMMf', '1439622405.3733'),
(12, 'NtbJw3Fy', '1439622448.9702'),
(13, 'DQI8iVOT', '1439622532.7668'),
(14, 'HQAW16Me', '1439622552.0189'),
(15, 'pTUmOlkn', '1439622659.22'),
(16, '6xFtjkyl', '1439622714.5175'),
(17, 'e2bBSM8F', '1439622731.3207'),
(18, '8EuojmcG', '1439622844.8625'),
(19, '48K6L2dx', '1439622899.2234'),
(20, '0B2Ec3BH', '1439622924.7313'),
(21, 'oD3hXldT', '1439622974.5734'),
(22, 'ToeuAX9v', '1439622987.8965'),
(23, '9aGwryqq', '1439623073.8957'),
(24, 'wJldPvJY', '1439623086.9569'),
(25, 'SuIHfKeT', '1439623113.9296'),
(26, 'F5M0aGFR', '1439623130.2224'),
(27, 'RNTZyCQO', '1439623136.6526'),
(28, 'uu8nRPTm', '1439623254.6077'),
(29, 'qI4qJ3mp', '1439623880.9551'),
(30, 'JuoxpNk3', '1439623887.4688'),
(31, 'O9xpL83I', '1439623898.2222'),
(32, 'Hb9ce6DI', '1439624239.8218'),
(33, 'QF0K7EU3', '1439624282.226'),
(34, 'BKR5NO31', '1439624289.8885'),
(35, 'IIJIQYVK', '1439624544.7426'),
(36, 'NPC2JPNC', '1439627245.64'),
(37, 'NND29Z4I', '1439627274.47'),
(38, '14138ZZ5', '1439628000.91'),
(39, '13DUF9BP', '1439628277.14'),
(40, 'TR6XU9LP', '1439628784.06'),
(41, '38YINT2C', '1439628807.8'),
(42, '6G5GXX8J', '1439642256.34'),
(43, 'IZRB10T5', '1440201097.12'),
(44, 'SDJ0V0HA', '1440499363.05'),
(45, 'JBC05INW', '1440499424.18'),
(46, '63V1VYEH', '1440499445.08'),
(47, 'PEKF56NU', '1440499469.59'),
(48, '2YJ6QF7H', '1440499494.5'),
(49, 'MTQ4BGQO', '1440499519.64'),
(50, 'G1WC7BIM', '1440499579.89'),
(51, '21KN4UOP', '1440923022.86'),
(52, 'FHFE0NHD', '1440924002.35'),
(53, 'A33LTL00', '1440924027.3'),
(54, 'QWEM9FRZ', '1440924041.67'),
(55, 'O54ELH4O', '1440924178.71'),
(56, 'BY8MZAIP', '1440924327.96'),
(57, '0W5OCBV3', '1440924344.78'),
(58, 'XFMJ185J', '1440924678.19'),
(59, '4K1QC3PG', '1440924679.77'),
(60, 'NPG9RRBT', '1440925359.18'),
(61, '6XDWTH2U', '1440925367.91'),
(62, 'TW6KL39P', '1440925397.37'),
(63, 'MZZBEDDT', '1440925480.35'),
(64, 'EA2XZZSA', '1440925498.54'),
(65, '7NG14LEP', '1440925558.76'),
(66, 'EQTK9SMB', '1440925616.22'),
(67, 'MQPSQ856', '1440925623.97'),
(68, '9QOOZDS0', '1440925636.87'),
(69, 'LXBLTF17', '1440925661.17'),
(70, 'AVCQT1QM', '1440926309.59'),
(71, 'NPZXYILV', '1440926325.61'),
(72, 'QU0TMWGO', '1440926342.8'),
(73, 'P7O32HXW', '1440926439.99'),
(74, 'MDY7EO9Z', '1440926489.72'),
(75, 'EB7FOQDV', '1440926602.56'),
(76, 'BCVXWP0P', '1440926688.31'),
(77, 'J22UE2HG', '1440926720.36'),
(78, '0MW91IR2', '1440926786.88'),
(79, 'QG4BCX4X', '1440926851.5'),
(80, 'IFWQC8TI', '1440926892.53'),
(81, 'J8Z2R2W1', '1440927029.55'),
(82, 'QC66QF13', '1440927150.77'),
(83, 'F7BRPRAC', '1440927300'),
(84, 'E2799FTB', '1440927601.74'),
(85, 'KUF1QXQU', '1440927654.77'),
(86, 'OSGLB0NV', '1440927954.73'),
(87, '0P4H4W39', '1440928022.99'),
(88, '8IFL1H5P', '1440928138.71'),
(89, '2G6AIQ6P', '1440928241.02'),
(90, 'J8Z96HEG', '1440928273.66'),
(91, '39C3ZU86', '1440928359.16'),
(92, 'DHE2OBQP', '1440928405.01'),
(93, 'ET04K3ST', '1440929940.4'),
(94, 'UAYEJ9PX', '1440930006.16'),
(95, 'IRECL3SO', '1440930007.08'),
(96, 'K65MCXJC', '1440930028.56'),
(97, 'ZRZLWLUL', '1440931682.85'),
(98, '39AP33NM', '1440931762.29'),
(99, 'JAYCKRDR', '1440931894.9'),
(100, 'FPCL9DQL', '1440931913.19'),
(101, '8TBM0XPV', '1440931945.85'),
(102, 'OA4SQGRR', '1440953163.48'),
(103, 'EXIVJ19H', '1441107064.77'),
(104, 'BSQOZFY7', '1441139836.71'),
(105, 'X8GLWKKY', '1441190286.12'),
(106, 'ZYFCHLOD', '1441190293.75'),
(107, 'ISJ6LUAC', '1441190784.4'),
(108, '7U33QHQY', '1441191271.96'),
(109, 'B23RJKWE', '1441192305.4'),
(110, '0GJAC592', '1441260165.31'),
(111, 'MEM7KTVI', '1441487319.36'),
(112, 'XAGWSQSF', '1441592983.17'),
(113, 'SEFVT7LM', '1441922920.43'),
(114, 'KLOMDFKE', '1441929260.31'),
(115, 'ZIU2MM2B', '1442239988.37'),
(116, '6U34VOVP', '1442450307.46'),
(117, 'NWHG5BM5', '1442635655.85'),
(118, 'D6RDVGB4', '1442635747.76'),
(119, '2JSHZTP3', '1442636117.1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryID` int(11) NOT NULL,
  `Caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ParentID` int(11) NOT NULL DEFAULT 0,
  `ParentName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Priority` int(11) NOT NULL DEFAULT 500,
  `IsActive` tinyint(1) NOT NULL DEFAULT 1,
  `Image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryID`, `Caption`, `ParentID`, `ParentName`, `Priority`, `IsActive`, `Image`) VALUES
(1, 'On Going', 0, '', 1, 1, NULL),
(2, 'Completed', 0, '', 2, 1, NULL),
(274, 'Upcoming', 0, '', 1, 1, NULL),
(283, 'Rent', 2, 'Completed', 1, 1, NULL),
(284, 'Office', 2, 'Completed', 2, 1, NULL),
(285, 'Sold', 2, 'Completed', 3, 1, NULL),
(286, 'Rent', 274, 'Upcoming', 1, 1, NULL),
(287, 'Office', 274, 'Upcoming', 2, 1, NULL),
(288, 'Sold', 274, 'Upcoming', 3, 1, NULL),
(289, 'Rent', 1, 'On Going', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `ip_address` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `user_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('1036210feb6adbd47d1ad7dd2eef2922', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.190 Safari/537.36', 1614582194, 'a:8:{s:9:\"user_data\";s:0:\"\";s:7:\"user_id\";s:1:\"1\";s:8:\"username\";s:11:\"developerbd\";s:10:\"user_level\";s:1:\"9\";s:10:\"user_thumb\";s:25:\"assets/img/blank_face.jpg\";s:10:\"user_email\";s:20:\"lokman.edu@gmail.com\";s:6:\"status\";s:1:\"1\";s:13:\"menusectionid\";s:1:\"1\";}');

-- --------------------------------------------------------

--
-- Table structure for table `commentsnews`
--

CREATE TABLE `commentsnews` (
  `CommentsnewsID` int(11) NOT NULL,
  `NewsID` int(11) DEFAULT NULL,
  `IsActive` tinyint(1) DEFAULT NULL,
  `IsApprove` varchar(10) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `Contact` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CommentsMessage` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CommentsOriginal` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `CommentType` varchar(25) DEFAULT 'News'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentsnews`
--

INSERT INTO `commentsnews` (`CommentsnewsID`, `NewsID`, `IsActive`, `IsApprove`, `Date`, `Email`, `Name`, `Contact`, `CommentsMessage`, `CommentsOriginal`, `CommentType`) VALUES
(1, 1, 1, 'No', '2014-12-11 00:00:00', 'sdsds', 'ddsdsd', 'dsds dsd', 'fdfdfdfdghgh', 'dsds', 'News');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `CountryID` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `name` varchar(80) NOT NULL,
  `CountryName` varchar(80) NOT NULL,
  `iso3` char(3) DEFAULT NULL,
  `numcode` smallint(6) DEFAULT NULL,
  `phonecode` int(5) NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`CountryID`, `iso`, `name`, `CountryName`, `iso3`, `numcode`, `phonecode`, `IsActive`) VALUES
(1, 'AF', 'AFGHANISTAN', 'Afghanistan', 'AFG', 4, 93, 1),
(2, 'AL', 'ALBANIA', 'Albania', 'ALB', 8, 355, 1),
(3, 'DZ', 'ALGERIA', 'Algeria', 'DZA', 12, 213, 1),
(4, 'AS', 'AMERICAN SAMOA', 'American Samoa', 'ASM', 16, 1684, 1),
(5, 'AD', 'ANDORRA', 'Andorra', 'AND', 20, 376, 1),
(6, 'AO', 'ANGOLA', 'Angola', 'AGO', 24, 244, 1),
(7, 'AI', 'ANGUILLA', 'Anguilla', 'AIA', 660, 1264, 1),
(8, 'AQ', 'ANTARCTICA', 'Antarctica', NULL, NULL, 0, 1),
(9, 'AG', 'ANTIGUA AND BARBUDA', 'Antigua and Barbuda', 'ATG', 28, 1268, 1),
(10, 'AR', 'ARGENTINA', 'Argentina', 'ARG', 32, 54, 1),
(11, 'AM', 'ARMENIA', 'Armenia', 'ARM', 51, 374, 1),
(12, 'AW', 'ARUBA', 'Aruba', 'ABW', 533, 297, 1),
(13, 'AU', 'AUSTRALIA', 'Australia', 'AUS', 36, 61, 1),
(14, 'AT', 'AUSTRIA', 'Austria', 'AUT', 40, 43, 1),
(15, 'AZ', 'AZERBAIJAN', 'Azerbaijan', 'AZE', 31, 994, 1),
(16, 'BS', 'BAHAMAS', 'Bahamas', 'BHS', 44, 1242, 1),
(17, 'BH', 'BAHRAIN', 'Bahrain', 'BHR', 48, 973, 1),
(18, 'BD', 'BANGLADESH', 'Bangladesh', 'BGD', 50, 880, 1),
(19, 'BB', 'BARBADOS', 'Barbados', 'BRB', 52, 1246, 1),
(20, 'BY', 'BELARUS', 'Belarus', 'BLR', 112, 375, 1),
(21, 'BE', 'BELGIUM', 'Belgium', 'BEL', 56, 32, 1),
(22, 'BZ', 'BELIZE', 'Belize', 'BLZ', 84, 501, 1),
(23, 'BJ', 'BENIN', 'Benin', 'BEN', 204, 229, 1),
(24, 'BM', 'BERMUDA', 'Bermuda', 'BMU', 60, 1441, 1),
(25, 'BT', 'BHUTAN', 'Bhutan', 'BTN', 64, 975, 1),
(26, 'BO', 'BOLIVIA', 'Bolivia', 'BOL', 68, 591, 1),
(27, 'BA', 'BOSNIA AND HERZEGOVINA', 'Bosnia and Herzegovina', 'BIH', 70, 387, 1),
(28, 'BW', 'BOTSWANA', 'Botswana', 'BWA', 72, 267, 1),
(29, 'BV', 'BOUVET ISLAND', 'Bouvet Island', NULL, NULL, 0, 1),
(30, 'BR', 'BRAZIL', 'Brazil', 'BRA', 76, 55, 1),
(31, 'IO', 'BRITISH INDIAN OCEAN TERRITORY', 'British Indian Ocean Territory', NULL, NULL, 246, 1),
(32, 'BN', 'BRUNEI DARUSSALAM', 'Brunei Darussalam', 'BRN', 96, 673, 1),
(33, 'BG', 'BULGARIA', 'Bulgaria', 'BGR', 100, 359, 1),
(34, 'BF', 'BURKINA FASO', 'Burkina Faso', 'BFA', 854, 226, 1),
(35, 'BI', 'BURUNDI', 'Burundi', 'BDI', 108, 257, 1),
(36, 'KH', 'CAMBODIA', 'Cambodia', 'KHM', 116, 855, 1),
(37, 'CM', 'CAMEROON', 'Cameroon', 'CMR', 120, 237, 1),
(38, 'CA', 'CANADA', 'Canada', 'CAN', 124, 1, 1),
(39, 'CV', 'CAPE VERDE', 'Cape Verde', 'CPV', 132, 238, 1),
(40, 'KY', 'CAYMAN ISLANDS', 'Cayman Islands', 'CYM', 136, 1345, 1),
(41, 'CF', 'CENTRAL AFRICAN REPUBLIC', 'Central African Republic', 'CAF', 140, 236, 1),
(42, 'TD', 'CHAD', 'Chad', 'TCD', 148, 235, 1),
(43, 'CL', 'CHILE', 'Chile', 'CHL', 152, 56, 1),
(44, 'CN', 'CHINA', 'China', 'CHN', 156, 86, 1),
(45, 'CX', 'CHRISTMAS ISLAND', 'Christmas Island', NULL, NULL, 61, 1),
(46, 'CC', 'COCOS (KEELING) ISLANDS', 'Cocos (Keeling) Islands', NULL, NULL, 672, 1),
(47, 'CO', 'COLOMBIA', 'Colombia', 'COL', 170, 57, 1),
(48, 'KM', 'COMOROS', 'Comoros', 'COM', 174, 269, 1),
(49, 'CG', 'CONGO', 'Congo', 'COG', 178, 242, 1),
(50, 'CD', 'CONGO, THE DEMOCRATIC REPUBLIC OF THE', 'Congo, the Democratic Republic of the', 'COD', 180, 242, 1),
(51, 'CK', 'COOK ISLANDS', 'Cook Islands', 'COK', 184, 682, 1),
(52, 'CR', 'COSTA RICA', 'Costa Rica', 'CRI', 188, 506, 1),
(53, 'CI', 'COTE D\'IVOIRE', 'Cote D\'Ivoire', 'CIV', 384, 225, 1),
(54, 'HR', 'CROATIA', 'Croatia', 'HRV', 191, 385, 1),
(55, 'CU', 'CUBA', 'Cuba', 'CUB', 192, 53, 1),
(56, 'CY', 'CYPRUS', 'Cyprus', 'CYP', 196, 357, 1),
(57, 'CZ', 'CZECH REPUBLIC', 'Czech Republic', 'CZE', 203, 420, 1),
(58, 'DK', 'DENMARK', 'Denmark', 'DNK', 208, 45, 1),
(59, 'DJ', 'DJIBOUTI', 'Djibouti', 'DJI', 262, 253, 1),
(60, 'DM', 'DOMINICA', 'Dominica', 'DMA', 212, 1767, 1),
(61, 'DO', 'DOMINICAN REPUBLIC', 'Dominican Republic', 'DOM', 214, 1809, 1),
(62, 'EC', 'ECUADOR', 'Ecuador', 'ECU', 218, 593, 1),
(63, 'EG', 'EGYPT', 'Egypt', 'EGY', 818, 20, 1),
(64, 'SV', 'EL SALVADOR', 'El Salvador', 'SLV', 222, 503, 1),
(65, 'GQ', 'EQUATORIAL GUINEA', 'Equatorial Guinea', 'GNQ', 226, 240, 1),
(66, 'ER', 'ERITREA', 'Eritrea', 'ERI', 232, 291, 1),
(67, 'EE', 'ESTONIA', 'Estonia', 'EST', 233, 372, 1),
(68, 'ET', 'ETHIOPIA', 'Ethiopia', 'ETH', 231, 251, 1),
(69, 'FK', 'FALKLAND ISLANDS (MALVINAS)', 'Falkland Islands (Malvinas)', 'FLK', 238, 500, 1),
(70, 'FO', 'FAROE ISLANDS', 'Faroe Islands', 'FRO', 234, 298, 1),
(71, 'FJ', 'FIJI', 'Fiji', 'FJI', 242, 679, 1),
(72, 'FI', 'FINLAND', 'Finland', 'FIN', 246, 358, 1),
(73, 'FR', 'FRANCE', 'France', 'FRA', 250, 33, 1),
(74, 'GF', 'FRENCH GUIANA', 'French Guiana', 'GUF', 254, 594, 1),
(75, 'PF', 'FRENCH POLYNESIA', 'French Polynesia', 'PYF', 258, 689, 1),
(76, 'TF', 'FRENCH SOUTHERN TERRITORIES', 'French Southern Territories', NULL, NULL, 0, 1),
(77, 'GA', 'GABON', 'Gabon', 'GAB', 266, 241, 1),
(78, 'GM', 'GAMBIA', 'Gambia', 'GMB', 270, 220, 1),
(79, 'GE', 'GEORGIA', 'Georgia', 'GEO', 268, 995, 1),
(80, 'DE', 'GERMANY', 'Germany', 'DEU', 276, 49, 1),
(81, 'GH', 'GHANA', 'Ghana', 'GHA', 288, 233, 1),
(82, 'GI', 'GIBRALTAR', 'Gibraltar', 'GIB', 292, 350, 1),
(83, 'GR', 'GREECE', 'Greece', 'GRC', 300, 30, 1),
(84, 'GL', 'GREENLAND', 'Greenland', 'GRL', 304, 299, 1),
(85, 'GD', 'GRENADA', 'Grenada', 'GRD', 308, 1473, 1),
(86, 'GP', 'GUADELOUPE', 'Guadeloupe', 'GLP', 312, 590, 1),
(87, 'GU', 'GUAM', 'Guam', 'GUM', 316, 1671, 1),
(88, 'GT', 'GUATEMALA', 'Guatemala', 'GTM', 320, 502, 1),
(89, 'GN', 'GUINEA', 'Guinea', 'GIN', 324, 224, 1),
(90, 'GW', 'GUINEA-BISSAU', 'Guinea-Bissau', 'GNB', 624, 245, 1),
(91, 'GY', 'GUYANA', 'Guyana', 'GUY', 328, 592, 1),
(92, 'HT', 'HAITI', 'Haiti', 'HTI', 332, 509, 1),
(93, 'HM', 'HEARD ISLAND AND MCDONALD ISLANDS', 'Heard Island and Mcdonald Islands', NULL, NULL, 0, 1),
(94, 'VA', 'HOLY SEE (VATICAN CITY STATE)', 'Holy See (Vatican City State)', 'VAT', 336, 39, 1),
(95, 'HN', 'HONDURAS', 'Honduras', 'HND', 340, 504, 1),
(96, 'HK', 'HONG KONG', 'Hong Kong', 'HKG', 344, 852, 1),
(97, 'HU', 'HUNGARY', 'Hungary', 'HUN', 348, 36, 1),
(98, 'IS', 'ICELAND', 'Iceland', 'ISL', 352, 354, 1),
(99, 'IN', 'INDIA', 'India', 'IND', 356, 91, 1),
(100, 'ID', 'INDONESIA', 'Indonesia', 'IDN', 360, 62, 1),
(101, 'IR', 'IRAN, ISLAMIC REPUBLIC OF', 'Iran, Islamic Republic of', 'IRN', 364, 98, 1),
(102, 'IQ', 'IRAQ', 'Iraq', 'IRQ', 368, 964, 1),
(103, 'IE', 'IRELAND', 'Ireland', 'IRL', 372, 353, 1),
(104, 'IL', 'ISRAEL', 'Israel', 'ISR', 376, 972, 1),
(105, 'IT', 'ITALY', 'Italy', 'ITA', 380, 39, 1),
(106, 'JM', 'JAMAICA', 'Jamaica', 'JAM', 388, 1876, 1),
(107, 'JP', 'JAPAN', 'Japan', 'JPN', 392, 81, 1),
(108, 'JO', 'JORDAN', 'Jordan', 'JOR', 400, 962, 1),
(109, 'KZ', 'KAZAKHSTAN', 'Kazakhstan', 'KAZ', 398, 7, 1),
(110, 'KE', 'KENYA', 'Kenya', 'KEN', 404, 254, 1),
(111, 'KI', 'KIRIBATI', 'Kiribati', 'KIR', 296, 686, 1),
(112, 'KP', 'KOREA, DEMOCRATIC PEOPLE\'S REPUBLIC OF', 'Korea, Democratic People\'s Republic of', 'PRK', 408, 850, 1),
(113, 'KR', 'KOREA, REPUBLIC OF', 'Korea, Republic of', 'KOR', 410, 82, 1),
(114, 'KW', 'KUWAIT', 'Kuwait', 'KWT', 414, 965, 1),
(115, 'KG', 'KYRGYZSTAN', 'Kyrgyzstan', 'KGZ', 417, 996, 1),
(116, 'LA', 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC', 'Lao People\'s Democratic Republic', 'LAO', 418, 856, 1),
(117, 'LV', 'LATVIA', 'Latvia', 'LVA', 428, 371, 1),
(118, 'LB', 'LEBANON', 'Lebanon', 'LBN', 422, 961, 1),
(119, 'LS', 'LESOTHO', 'Lesotho', 'LSO', 426, 266, 1),
(120, 'LR', 'LIBERIA', 'Liberia', 'LBR', 430, 231, 1),
(121, 'LY', 'LIBYAN ARAB JAMAHIRIYA', 'Libyan Arab Jamahiriya', 'LBY', 434, 218, 1),
(122, 'LI', 'LIECHTENSTEIN', 'Liechtenstein', 'LIE', 438, 423, 1),
(123, 'LT', 'LITHUANIA', 'Lithuania', 'LTU', 440, 370, 1),
(124, 'LU', 'LUXEMBOURG', 'Luxembourg', 'LUX', 442, 352, 1),
(125, 'MO', 'MACAO', 'Macao', 'MAC', 446, 853, 1),
(126, 'MK', 'MACEDONIA, THE FORMER YUGOSLAV REPUBLIC OF', 'Macedonia, the Former Yugoslav Republic of', 'MKD', 807, 389, 1),
(127, 'MG', 'MADAGASCAR', 'Madagascar', 'MDG', 450, 261, 1),
(128, 'MW', 'MALAWI', 'Malawi', 'MWI', 454, 265, 1),
(129, 'MY', 'MALAYSIA', 'Malaysia', 'MYS', 458, 60, 1),
(130, 'MV', 'MALDIVES', 'Maldives', 'MDV', 462, 960, 1),
(131, 'ML', 'MALI', 'Mali', 'MLI', 466, 223, 1),
(132, 'MT', 'MALTA', 'Malta', 'MLT', 470, 356, 1),
(133, 'MH', 'MARSHALL ISLANDS', 'Marshall Islands', 'MHL', 584, 692, 1),
(134, 'MQ', 'MARTINIQUE', 'Martinique', 'MTQ', 474, 596, 1),
(135, 'MR', 'MAURITANIA', 'Mauritania', 'MRT', 478, 222, 1),
(136, 'MU', 'MAURITIUS', 'Mauritius', 'MUS', 480, 230, 1),
(137, 'YT', 'MAYOTTE', 'Mayotte', NULL, NULL, 269, 1),
(138, 'MX', 'MEXICO', 'Mexico', 'MEX', 484, 52, 1),
(139, 'FM', 'MICRONESIA, FEDERATED STATES OF', 'Micronesia, Federated States of', 'FSM', 583, 691, 1),
(140, 'MD', 'MOLDOVA, REPUBLIC OF', 'Moldova, Republic of', 'MDA', 498, 373, 1),
(141, 'MC', 'MONACO', 'Monaco', 'MCO', 492, 377, 1),
(142, 'MN', 'MONGOLIA', 'Mongolia', 'MNG', 496, 976, 1),
(143, 'MS', 'MONTSERRAT', 'Montserrat', 'MSR', 500, 1664, 1),
(144, 'MA', 'MOROCCO', 'Morocco', 'MAR', 504, 212, 1),
(145, 'MZ', 'MOZAMBIQUE', 'Mozambique', 'MOZ', 508, 258, 1),
(146, 'MM', 'MYANMAR', 'Myanmar', 'MMR', 104, 95, 1),
(147, 'NA', 'NAMIBIA', 'Namibia', 'NAM', 516, 264, 1),
(148, 'NR', 'NAURU', 'Nauru', 'NRU', 520, 674, 1),
(149, 'NP', 'NEPAL', 'Nepal', 'NPL', 524, 977, 1),
(150, 'NL', 'NETHERLANDS', 'Netherlands', 'NLD', 528, 31, 1),
(151, 'AN', 'NETHERLANDS ANTILLES', 'Netherlands Antilles', 'ANT', 530, 599, 1),
(152, 'NC', 'NEW CALEDONIA', 'New Caledonia', 'NCL', 540, 687, 1),
(153, 'NZ', 'NEW ZEALAND', 'New Zealand', 'NZL', 554, 64, 1),
(154, 'NI', 'NICARAGUA', 'Nicaragua', 'NIC', 558, 505, 1),
(155, 'NE', 'NIGER', 'Niger', 'NER', 562, 227, 1),
(156, 'NG', 'NIGERIA', 'Nigeria', 'NGA', 566, 234, 1),
(157, 'NU', 'NIUE', 'Niue', 'NIU', 570, 683, 1),
(158, 'NF', 'NORFOLK ISLAND', 'Norfolk Island', 'NFK', 574, 672, 1),
(159, 'MP', 'NORTHERN MARIANA ISLANDS', 'Northern Mariana Islands', 'MNP', 580, 1670, 1),
(160, 'NO', 'NORWAY', 'Norway', 'NOR', 578, 47, 1),
(161, 'OM', 'OMAN', 'Oman', 'OMN', 512, 968, 1),
(162, 'PK', 'PAKISTAN', 'Pakistan', 'PAK', 586, 92, 1),
(163, 'PW', 'PALAU', 'Palau', 'PLW', 585, 680, 1),
(164, 'PS', 'PALESTINIAN TERRITORY, OCCUPIED', 'Palestinian Territory, Occupied', NULL, NULL, 970, 1),
(165, 'PA', 'PANAMA', 'Panama', 'PAN', 591, 507, 1),
(166, 'PG', 'PAPUA NEW GUINEA', 'Papua New Guinea', 'PNG', 598, 675, 1),
(167, 'PY', 'PARAGUAY', 'Paraguay', 'PRY', 600, 595, 1),
(168, 'PE', 'PERU', 'Peru', 'PER', 604, 51, 1),
(169, 'PH', 'PHILIPPINES', 'Philippines', 'PHL', 608, 63, 1),
(170, 'PN', 'PITCAIRN', 'Pitcairn', 'PCN', 612, 0, 1),
(171, 'PL', 'POLAND', 'Poland', 'POL', 616, 48, 1),
(172, 'PT', 'PORTUGAL', 'Portugal', 'PRT', 620, 351, 1),
(173, 'PR', 'PUERTO RICO', 'Puerto Rico', 'PRI', 630, 1787, 1),
(174, 'QA', 'QATAR', 'Qatar', 'QAT', 634, 974, 1),
(175, 'RE', 'REUNION', 'Reunion', 'REU', 638, 262, 1),
(176, 'RO', 'ROMANIA', 'Romania', 'ROM', 642, 40, 1),
(177, 'RU', 'RUSSIAN FEDERATION', 'Russian Federation', 'RUS', 643, 70, 1),
(178, 'RW', 'RWANDA', 'Rwanda', 'RWA', 646, 250, 1),
(179, 'SH', 'SAINT HELENA', 'Saint Helena', 'SHN', 654, 290, 1),
(180, 'KN', 'SAINT KITTS AND NEVIS', 'Saint Kitts and Nevis', 'KNA', 659, 1869, 1),
(181, 'LC', 'SAINT LUCIA', 'Saint Lucia', 'LCA', 662, 1758, 1),
(182, 'PM', 'SAINT PIERRE AND MIQUELON', 'Saint Pierre and Miquelon', 'SPM', 666, 508, 1),
(183, 'VC', 'SAINT VINCENT AND THE GRENADINES', 'Saint Vincent and the Grenadines', 'VCT', 670, 1784, 1),
(184, 'WS', 'SAMOA', 'Samoa', 'WSM', 882, 684, 1),
(185, 'SM', 'SAN MARINO', 'San Marino', 'SMR', 674, 378, 1),
(186, 'ST', 'SAO TOME AND PRINCIPE', 'Sao Tome and Principe', 'STP', 678, 239, 1),
(187, 'SA', 'SAUDI ARABIA', 'Saudi Arabia', 'SAU', 682, 966, 1),
(188, 'SN', 'SENEGAL', 'Senegal', 'SEN', 686, 221, 1),
(189, 'CS', 'SERBIA AND MONTENEGRO', 'Serbia and Montenegro', NULL, NULL, 381, 1),
(190, 'SC', 'SEYCHELLES', 'Seychelles', 'SYC', 690, 248, 1),
(191, 'SL', 'SIERRA LEONE', 'Sierra Leone', 'SLE', 694, 232, 1),
(192, 'SG', 'SINGAPORE', 'Singapore', 'SGP', 702, 65, 1),
(193, 'SK', 'SLOVAKIA', 'Slovakia', 'SVK', 703, 421, 1),
(194, 'SI', 'SLOVENIA', 'Slovenia', 'SVN', 705, 386, 1),
(195, 'SB', 'SOLOMON ISLANDS', 'Solomon Islands', 'SLB', 90, 677, 1),
(196, 'SO', 'SOMALIA', 'Somalia', 'SOM', 706, 252, 1),
(197, 'ZA', 'SOUTH AFRICA', 'South Africa', 'ZAF', 710, 27, 1),
(198, 'GS', 'SOUTH GEORGIA AND THE SOUTH SANDWICH ISLANDS', 'South Georgia and the South Sandwich Islands', NULL, NULL, 0, 1),
(199, 'ES', 'SPAIN', 'Spain', 'ESP', 724, 34, 1),
(200, 'LK', 'SRI LANKA', 'Sri Lanka', 'LKA', 144, 94, 1),
(201, 'SD', 'SUDAN', 'Sudan', 'SDN', 736, 249, 1),
(202, 'SR', 'SURINAME', 'Suriname', 'SUR', 740, 597, 1),
(203, 'SJ', 'SVALBARD AND JAN MAYEN', 'Svalbard and Jan Mayen', 'SJM', 744, 47, 1),
(204, 'SZ', 'SWAZILAND', 'Swaziland', 'SWZ', 748, 268, 1),
(205, 'SE', 'SWEDEN', 'Sweden', 'SWE', 752, 46, 1),
(206, 'CH', 'SWITZERLAND', 'Switzerland', 'CHE', 756, 41, 1),
(207, 'SY', 'SYRIAN ARAB REPUBLIC', 'Syrian Arab Republic', 'SYR', 760, 963, 1),
(208, 'TW', 'TAIWAN, PROVINCE OF CHINA', 'Taiwan, Province of China', 'TWN', 158, 886, 1),
(209, 'TJ', 'TAJIKISTAN', 'Tajikistan', 'TJK', 762, 992, 1),
(210, 'TZ', 'TANZANIA, UNITED REPUBLIC OF', 'Tanzania, United Republic of', 'TZA', 834, 255, 1),
(211, 'TH', 'THAILAND', 'Thailand', 'THA', 764, 66, 1),
(212, 'TL', 'TIMOR-LESTE', 'Timor-Leste', NULL, NULL, 670, 1),
(213, 'TG', 'TOGO', 'Togo', 'TGO', 768, 228, 1),
(214, 'TK', 'TOKELAU', 'Tokelau', 'TKL', 772, 690, 1),
(215, 'TO', 'TONGA', 'Tonga', 'TON', 776, 676, 1),
(216, 'TT', 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago', 'TTO', 780, 1868, 1),
(217, 'TN', 'TUNISIA', 'Tunisia', 'TUN', 788, 216, 1),
(218, 'TR', 'TURKEY', 'Turkey', 'TUR', 792, 90, 1),
(219, 'TM', 'TURKMENISTAN', 'Turkmenistan', 'TKM', 795, 7370, 1),
(220, 'TC', 'TURKS AND CAICOS ISLANDS', 'Turks and Caicos Islands', 'TCA', 796, 1649, 1),
(221, 'TV', 'TUVALU', 'Tuvalu', 'TUV', 798, 688, 1),
(222, 'UG', 'UGANDA', 'Uganda', 'UGA', 800, 256, 1),
(223, 'UA', 'UKRAINE', 'Ukraine', 'UKR', 804, 380, 1),
(224, 'AE', 'UNITED ARAB EMIRATES', 'United Arab Emirates', 'ARE', 784, 971, 1),
(225, 'GB', 'UNITED KINGDOM', 'United Kingdom', 'GBR', 826, 44, 1),
(226, 'US', 'UNITED STATES', 'United States', 'USA', 840, 1, 1),
(227, 'UM', 'UNITED STATES MINOR OUTLYING ISLANDS', 'United States Minor Outlying Islands', NULL, NULL, 1, 1),
(228, 'UY', 'URUGUAY', 'Uruguay', 'URY', 858, 598, 1),
(229, 'UZ', 'UZBEKISTAN', 'Uzbekistan', 'UZB', 860, 998, 1),
(230, 'VU', 'VANUATU', 'Vanuatu', 'VUT', 548, 678, 1),
(231, 'VE', 'VENEZUELA', 'Venezuela', 'VEN', 862, 58, 1),
(232, 'VN', 'VIET NAM', 'Viet Nam', 'VNM', 704, 84, 1),
(233, 'VG', 'VIRGIN ISLANDS, BRITISH', 'Virgin Islands, British', 'VGB', 92, 1284, 1),
(234, 'VI', 'VIRGIN ISLANDS, U.S.', 'Virgin Islands, U.s.', 'VIR', 850, 1340, 1),
(235, 'WF', 'WALLIS AND FUTUNA', 'Wallis and Futuna', 'WLF', 876, 681, 1),
(236, 'EH', 'WESTERN SAHARA', 'Western Sahara', 'ESH', 732, 212, 1),
(237, 'YE', 'YEMEN', 'Yemen', 'YEM', 887, 967, 1),
(238, 'ZM', 'ZAMBIA', 'Zambia', 'ZMB', 894, 260, 1),
(239, 'ZW', 'ZIMBABWE', 'Zimbabwe', 'ZWE', 716, 263, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cronjob`
--

CREATE TABLE `cronjob` (
  `CronjobID` int(11) NOT NULL,
  `SectionID` int(11) NOT NULL,
  `StartPoint` datetime NOT NULL,
  `StartCode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CronInterval` int(11) NOT NULL COMMENT 'in Minutes',
  `IsActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cronjob`
--

INSERT INTO `cronjob` (`CronjobID`, `SectionID`, `StartPoint`, `StartCode`, `CronInterval`, `IsActive`) VALUES
(59, 282, '2015-09-19 09:51:00', 'OV0002', 0, 1),
(58, 281, '2015-09-19 09:51:00', '', 0, 1),
(57, 280, '2015-09-19 09:51:00', '', 0, 1),
(56, 279, '2015-09-19 09:51:00', '', 0, 1),
(55, 278, '2015-09-19 09:51:00', '', 0, 1),
(54, 277, '2015-09-19 09:51:00', '', 0, 1),
(53, 276, '2015-09-19 09:51:00', '', 0, 1),
(52, 275, '2015-09-19 09:51:00', '', 0, 1),
(51, 2, '2015-09-19 09:51:00', 'QB000001', 1440, 1),
(50, 274, '2015-09-19 09:51:00', '', 0, 1),
(49, 1, '2015-09-18 08:00:00', 'QA000001', 480, 1);

-- --------------------------------------------------------

--
-- Table structure for table `division`
--

CREATE TABLE `division` (
  `DivisionID` int(11) NOT NULL,
  `Caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ParentID` int(11) NOT NULL DEFAULT 0,
  `ParentName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Priority` int(11) NOT NULL DEFAULT 500,
  `IsActive` tinyint(1) NOT NULL DEFAULT 1,
  `Image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `division`
--

INSERT INTO `division` (`DivisionID`, `Caption`, `ParentID`, `ParentName`, `Priority`, `IsActive`, `Image`) VALUES
(1, 'ঢাকা বিভাগ', 0, '', 1, 1, NULL),
(2, 'বরিশাল বিভাগ', 0, '', 56, 1, NULL),
(3, 'মানিকগঞ্জ জেলা', 1, 'ঢাকা বিভাগ', 10, 1, NULL),
(6, 'ঢাকা জেলা', 1, 'ঢাকা বিভাগ', 2, 1, NULL),
(7, 'গাজীপুর জেলা', 1, 'ঢাকা বিভাগ', 3, 1, NULL),
(8, 'ময়মনসিংহ জেলা', 1, 'ঢাকা বিভাগ', 4, 1, NULL),
(9, 'শেরপুর জেলা', 1, 'ঢাকা বিভাগ', 5, 1, NULL),
(10, 'জামালপুর জেলা ', 1, 'ঢাকা বিভাগ', 6, 1, NULL),
(11, 'টাঙ্গাইল জেলা ', 1, 'ঢাকা বিভাগ', 7, 1, NULL),
(12, 'কিশোরগঞ্জ জেলা ', 1, 'ঢাকা বিভাগ', 8, 1, NULL),
(13, 'নেত্রকোণা জেলা ', 1, 'ঢাকা বিভাগ', 9, 1, NULL),
(15, 'মুন্সিগঞ্জ জেলা ', 1, 'ঢাকা বিভাগ', 11, 1, NULL),
(16, 'নারায়ণগঞ্জ জেলা ', 1, 'ঢাকা বিভাগ', 12, 1, NULL),
(17, 'নরসিংদী জেলা ', 1, 'ঢাকা বিভাগ', 13, 1, NULL),
(18, 'রাজবাড়ী জেলা  ', 1, 'ঢাকা বিভাগ', 14, 1, NULL),
(19, 'শরিয়তপুর জেলা ', 1, 'ঢাকা বিভাগ', 15, 1, NULL),
(20, 'মাদারিপুর জেলা ', 1, 'ঢাকা বিভাগ', 16, 1, NULL),
(21, 'ফরিদপুর জেলা ', 1, 'ঢাকা বিভাগ', 17, 1, NULL),
(22, 'গোপালগঞ্জ জেলা ', 1, 'ঢাকা বিভাগ', 18, 1, NULL),
(25, 'চট্টগাম বিভাগ', 0, '', 19, 1, NULL),
(26, 'বরিশাল জেলা', 2, 'বরিশাল বিভাগ', 57, 1, NULL),
(27, 'চট্টগ্রাম জেলা', 25, 'চট্টগাম বিভাগ', 20, 1, NULL),
(28, 'রাঙামাটি জেলা', 25, 'চট্টগাম বিভাগ', 21, 1, NULL),
(29, 'বান্দরবান জেলা', 25, 'চট্টগাম বিভাগ', 22, 1, NULL),
(30, 'খাগড়াছড়ি জেলা ', 25, 'চট্টগাম বিভাগ', 23, 1, NULL),
(31, 'কক্সবাজার জেলা ', 25, 'চট্টগাম বিভাগ', 24, 1, NULL),
(32, 'ফেনী জেলা ', 25, 'চট্টগাম বিভাগ', 25, 1, NULL),
(33, 'লক্ষীপুর জেলা ', 25, 'চট্টগাম বিভাগ', 26, 1, NULL),
(34, 'নোয়াখালী জেলা ', 25, 'চট্টগাম বিভাগ', 27, 1, NULL),
(35, 'কুমিল্লা জেলা ', 25, 'চট্টগাম বিভাগ', 28, 1, NULL),
(36, 'চাদপুর জেলা ', 25, 'চট্টগাম বিভাগ', 29, 1, NULL),
(37, 'ব্রাক্ষণবাড়িয়া জেলা ', 25, 'চট্টগাম বিভাগ', 30, 1, NULL),
(39, 'ভোলা জেলা', 2, 'বরিশাল বিভাগ', 58, 1, NULL),
(40, 'বরগুণা জেলা', 2, 'বরিশাল বিভাগ', 59, 1, NULL),
(41, 'ঝালকাঠি জেলা ', 2, 'বরিশাল বিভাগ', 60, 1, NULL),
(42, 'পটুয়াখালী জেলা ', 2, 'বরিশাল বিভাগ', 61, 1, NULL),
(43, 'পিরোজপুর জেলা ', 2, 'বরিশাল বিভাগ', 62, 1, NULL),
(45, 'সিলেট বিভাগ', 0, '', 31, 1, NULL),
(46, 'রাজশাহী বিভাগ', 0, '', 47, 1, NULL),
(47, 'খুলনা বিভাগ', 0, '', 36, 1, NULL),
(48, 'রংপুর বিভাগ', 0, '', 63, 1, NULL),
(49, 'রংপুর জেলা', 48, 'রংপুর বিভাগ', 64, 1, NULL),
(50, 'দিনাজপুর জেলা ', 48, 'রংপুর বিভাগ', 65, 1, NULL),
(51, 'গাইবান্ধা জেলা ', 48, 'রংপুর বিভাগ', 66, 1, NULL),
(52, 'কুড়িগ্রাম জেলা ', 48, 'রংপুর বিভাগ', 67, 1, NULL),
(53, 'লালমনিরহাট জেলা ', 48, 'রংপুর বিভাগ', 68, 1, NULL),
(54, 'নিলফামারী জেলা ', 48, 'রংপুর বিভাগ', 69, 1, NULL),
(55, 'পঞ্চগড় জেলা ', 48, 'রংপুর বিভাগ', 70, 1, NULL),
(56, 'ঠাকুরগাও জেলা ', 48, 'রংপুর বিভাগ', 71, 1, NULL),
(57, 'সিলেট জেলা', 45, 'সিলেট বিভাগ', 32, 1, NULL),
(58, 'সুনামগঞ্জ জেলা ', 45, 'সিলেট বিভাগ', 33, 1, NULL),
(59, 'হবিগঞ্জ জেলা ', 45, 'সিলেট বিভাগ', 34, 1, NULL),
(60, 'মৌলভীবাজার জেলা ', 45, 'সিলেট বিভাগ', 35, 1, NULL),
(61, 'খুলনা জেলা ', 47, 'খুলনা বিভাগ', 37, 1, NULL),
(62, 'যশোর জেলা ', 47, 'খুলনা বিভাগ', 38, 1, NULL),
(63, 'ঝিনাইদহ জেলা ', 47, 'খুলনা বিভাগ', 39, 1, NULL),
(64, 'বাগেরহাট জেলা ', 47, 'খুলনা বিভাগ', 40, 1, NULL),
(65, 'কুষ্টিয়া জেলা ', 47, 'খুলনা বিভাগ', 41, 1, NULL),
(66, 'মাগুরা জেলা', 47, 'খুলনা বিভাগ', 42, 1, NULL),
(67, 'মেহেরপুর জেলা ', 47, 'খুলনা বিভাগ', 43, 1, NULL),
(68, 'নড়াইল জেলা ', 47, 'খুলনা বিভাগ', 44, 1, NULL),
(69, 'সাতক্ষীরা জেলা ', 47, 'খুলনা বিভাগ', 45, 1, NULL),
(70, 'চুয়াডাঙ্গা জেলা ', 47, 'খুলনা বিভাগ', 46, 1, NULL),
(71, 'রাজশাহী জেলা', 46, 'রাজশাহী বিভাগ', 48, 1, NULL),
(72, 'চাপাইনবাবগঞ্জ জেলা ', 46, 'রাজশাহী বিভাগ', 49, 1, NULL),
(73, 'জয়পুরহাট জেলা ', 46, 'রাজশাহী বিভাগ', 50, 1, NULL),
(74, 'পাবনা জেলা ', 46, 'রাজশাহী বিভাগ', 51, 1, NULL),
(75, 'নওগা জেলা ', 46, 'রাজশাহী বিভাগ', 52, 1, NULL),
(76, 'নাটোর জেলা ', 46, 'রাজশাহী বিভাগ', 53, 1, NULL),
(77, 'বগুড়া জেলা ', 46, 'রাজশাহী বিভাগ', 54, 1, NULL),
(78, 'সিরাজগঞ্জ জেলা ', 46, 'রাজশাহী বিভাগ', 55, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `emailsend`
--

CREATE TABLE `emailsend` (
  `ID` int(11) NOT NULL,
  `SectionID` int(11) NOT NULL,
  `EntryDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `emailsend`
--

INSERT INTO `emailsend` (`ID`, `SectionID`, `EntryDate`) VALUES
(1, 1, '2015-09-20 02:00:55'),
(2, 2, '2015-09-20 02:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `EmployeeID` int(11) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `FirstName` varchar(10) NOT NULL,
  `Title` varchar(30) DEFAULT NULL,
  `TitleOfCourtesy` varchar(25) DEFAULT NULL,
  `BirthDate` datetime DEFAULT NULL,
  `HireDate` datetime DEFAULT NULL,
  `Address` varchar(60) DEFAULT NULL,
  `City` varchar(15) DEFAULT NULL,
  `Region` varchar(15) DEFAULT NULL,
  `PostalCode` varchar(10) DEFAULT NULL,
  `Country` varchar(15) DEFAULT NULL,
  `HomePhone` varchar(24) DEFAULT NULL,
  `Extension` varchar(4) DEFAULT NULL,
  `Photo` longblob DEFAULT NULL,
  `Notes` mediumtext NOT NULL,
  `ReportsTo` int(11) DEFAULT NULL,
  `PhotoPath` varchar(255) DEFAULT NULL,
  `Salary` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`EmployeeID`, `LastName`, `FirstName`, `Title`, `TitleOfCourtesy`, `BirthDate`, `HireDate`, `Address`, `City`, `Region`, `PostalCode`, `Country`, `HomePhone`, `Extension`, `Photo`, `Notes`, `ReportsTo`, `PhotoPath`, `Salary`) VALUES
(1, 'Davolio', 'Nancy', 'Sales Representative', 'Ms.', '1948-12-08 00:00:00', '1992-05-01 00:00:00', '507 - 20th Ave. E.Apt. 2A', 'Seattle', 'WA', '98122', 'USA', '(206) 555-9857', '5467', 0xffd8ffe000104a46494600010200006400640000ffec00114475636b79000100040000004e0000ffee002641646f62650064c0000000010300150403060a0d00000dc7000014f800001fc700003018ffdb008400030202020202030202030403020304050303030305050404050404050705060606060507070808090808070b0b0c0c0b0b0c0c0c0c0c0e0e0e0e0e0e0e0e0e0e010303030505050a07070a0f0c0a0c0f120e0e0e0e12110e0e0e0e0e11110e0e0e0e0e0e110e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0effc200110800aa00a003011100021101031101ffc400e60000020203010100000000000000000000050604070203080100010002030101000000000000000000000001030204050006100001040202000503040203010000000001000203041105101220213113063022143234350723154041163311000103010505040703090803000000000100020311213141120410516122132071320581a1b14272231491c152d16282b2334373247430e1f192a2531506b334751200010305000301000000000000000000110040012030506021104161121301000202010304020301010100000000010011213141105161718191a120b1f0c1d1e1f130ffda000c03010002110311000001ad5b446c1b5ec6c4aeecc7412721d247155cd9d4e3d06495374259ad2c0faf8ab5a19fef767d1fbbbc122002e2ae0c0c9e013598523a3bb6890e9898b2d956d39a6ccd8b204631d4c4dd8c3076aaf9dd8f1c048f1aeaeabd1ccb6f032be6553811e355ad9b45d1c61bc71c5ba549605b5f4c3b7c2489b5883d91c7bb3ee3a10a30bdf1efbb8f2a4790f69a7a360d6d17f9a083531a331516aac195558a0af6296b3036b6216ae6784efe59384173ad79dd2e267acb7d4d0b673775b8adbec5022f46f92e3062ed1bf5a2ecd1dab841ac5567a1755f4b360ba1b8ac92a204d8f7ba6c251271b3f3356dda1b4d7c967b1448bd121aaf3885ab6e9f55aa82f66a25ece3d52c9754967572a415ed4b4197c984e24e381167646c595535493505e6b9239c66ade615423409b92bb0673feaf9e1d283e646a8adbf39a9c8d08b01236bce31a51f78dd187e8f5ca0f317b6394bc8b6d620f1632d1a1a436f65af40862ae78bb9e5ebd86e44a1ebe1454585d85c70a5aebd66887754bef03d416334bd1cab51b0d946e11a7a0db628147d4c2666494a0b670d6965fbdd6064ea14ddf32092f009b96051f484132aeaf61dd397e81f591697d222d562a907ad73ce0dd732fc276ca1016ee01d0ce8135b354b2e1a588091603a6de9eb1d098feb148d29b09bd06d896730dd9a71e0c47a9ac2497fb19998e95d18b09d05555cf9e832cdf419ed674643c2a6e0894afcc7f4e72bb96668341f61496d4ecffa417157b7354c2da72231175ad45e1ccd3a89d7eab25eca872560243aadd831b176e26890afa0ada103e97b0735dcd6d00ae1b449d13cfa6869b9610a0aeca9c8ba994fd1594b54e0f44470d2a743a3ad65665b30057136d8f1d03f1b4ddd58bd9a7529bcdc66caca825571fa78547dda35cdecadbdd8f18e3821863dd16ade031b563e3e92e34b7c6c3aab41a201b5f47d04797cb728fb28e655c93a587a5889a4fa3b5f70394311de82355684f33d22cdc8df295ee1d8b5c41687556abb99298ad7095144d07a38c74a65774a27d895024a157bc761198eccf1bcaf40ed8fe9969d53e902a18e04133189d1e49daf3d16697f767ec1d9f76fe3542b427c94dcca93fa1b0f6dee99534ae0f39ecd7c9d07b2e052126609e7fdac4aaaf66edeee9a53ecb8f26b2b558dad4c0b7f776ee8b73a8922b960c055be82f33eda6f0565d9964158c512e67f3aee79cf0f5c716746a9bf11a3b8918f01393f0ecb832c858c569919a389f4b617a5b6e3052468c084e0315cd3bfe547b90da25d6507603b4913b87a7b866696ce36df38e1eae8d7a823def1bb32b6effa76971570041d4d6c79eaef47272eeea983dd22733117c079ed9c396650e9f9bc0aa0326baf251ade27ee17066ecf4467e82ec2d2d467cdde8fc6c0640883d4b072df738746d8ee8328d11c7fffda00080101000105028e6056c6d0899ea59192a5f70b7d1764db2e62876b23541bd6b5336cc9cbdd14c8d6424666f572d05c83d770bbaee177c2bd297bc150c9d4b9ff006d883b18a08e5475f2f531b9a610a9fe3955e18b0e855885e9b85b2adf8f265765dca2f28a99fda44c3850cb92d6031cb41c0eb685872b1f1995cbff003d66311d3b2c31d791aa42f0c2f93b7e4f74d7c5723b501ad2e5650529eace694485a50502e5afd6b310d36e3f020727ea61729754c8d5ed6c6f1b2a93d791b31327e4beb5ad9b05caa780acbbfc7c431f673a75a6ae0cd56a795566142321a1632a58b2acd5ec36f4feedbc0ea96accc255ac983a2bb0fb13a0ad7e84d1d8b9dd180ad23b0a8ca1f1d66a87180827ab324310dced20b136f1b6c83e4b5927597690092310a112b23ecea49806138f9ad2b4fe3ebe46c423f90c4651f26fc66d7f98d79cd0d9c5705fb0f861b95ee6ce561d1eae2b37f4fba5bba126b7630c9d5416239a29abfb3261581f61ca8ce139307675184454e56d99e5d5d3a158497f5f1b1f6a84926b67ad0b9ce1232d559649779a3a376968be0b0d7b3fd9ba50d801c2a73163866c45eda91b96b9b85a3d3d2b35773af66bed43fae9c7dab3aabfdb769fe4976cd1d17b742afc462a4e144c0cd5cbeec7eda15d8e4c898c5f2aa42fe88a6b8b4eba6eea6886651f64c307e332326d6eef491dba95f592b6c541d454014746295368b5aac33ed931d350efb9c0e1a78b403a2b51f4b0b4d26242e53fe9b1faf5979faeb96238ec51b551b118662a84f914e66f50e0e12f50dab718e9a2dbc14ecbeffbb055fc99211229a5f2fec56d076bfccad737169d2a954e3fc9d32ff8d58fcca9b1d6be0774c2a52969a363ed8e6f2924f292a412ba2d5557286ac5137b00a477592e122bfcfaec334f528fbd522a2daf1cb1909de6a66e4fb7fe7f81d3d5dab7bf6b28bced69dabd0355698c6ead297a9a711b7fde0749037e4361dfe93773ada3db524d6d2b0ca7f2fd9cdaad37e3dab126b58f8e1727b41e1c13d803ff00afe66cf77fb42a472c5a6d339daba52870660ad74a03b67ababb0adff973ac9f5fefb4bfdc7b21a71c73bbc99f36bc0ced2b28a3cccdf273a6af2cdf35fceafb1d9d3756d6ce5d56ad90e503d4764b98e83df0ed37631eb26c54a22017246430ecef3f617e37a1c611585853d1ee9faeb2147acb2f3a38036bc8d92b3a9ec5aabdc6154ec34a8dcd2b2117b57f64fc8ff12a50b9ef91e49af40f115f8244305616161755aa7749e5adee46fad82d7d88541b69a355be427aff00b8b520d86d6cd1a1b0bf63656e094c32fe457c212610938af72580d7b71d868281e2abbacf0c5ee4766b98de034af60155aa80a28c307ce3e43fec6ca8d8e91fa1f8b6bf59461a34223b6f83d6b2361a0dcea8711c8e8dd56d899a1ca36be4572f3693f4f209eadda45edf61cd2c6e143e4be5bf23fc1ac4e78f817c77f2e78e2739e22ff0c96aad7309bd5dbceb74fb1b32c5ad8e05b8da7539caf82dcfc8a32e3a4ccfbbd16c3631d3ad7ee497ad2f8de8a5df6c6a3e8d28e6919f812dcd5c17baeeeac738d66b61c656b3e37b1d90d6fc4a9eb9d61966087e4361bad878feb89cfbd3bb0ad9c12fc9f95ed3de99004af8deaa2d4526caf1142dba9fbc9f595b670d2f8cbfe4f6be32c669bf90d5fedf69fc5bff0097f9b7f21c7f5cfefad7add455efdead7fef9fe9befe075dff00c361fb9f917ed3fb2bf98fffda000801020001050247c7d57558e0f11cd9fa79e3b705159e30bd144fcf84f8bb27397bcbde5d96503c10bd0b5d9fa04f0e77002eaba22de03910b19113b0793c958521e421c1088e23394d18527ab0e478e4e472515d7cd98ca94281de1287127aaea80594d72714382d2987c9c882d2c77608f07977aacac22b3c05944a8fcb891aa13829dc4b21098eca28fa80810bb270584cf07fdf0461c8f130f363f08c9e45041613b862c72537878e0f0f6e42cf20aca3ce505944aa8e24f251e1ebb780159e005859e1de94dbe44f9b472e59560a89be45a79cf2015d1c9ccc2ea9adca098dc7808455a67db51c019ac624e071d90e1dc443c6f6a1828d4c18e13977af19585d1752833868fa1d78c29c79ac700a1c65307d4b238cf3959e00f1e7c330fb7c50b393c765dbc6ef3e08f044ccfd79061c8f0d098dc0fad3fa9478819ff0274539043d3e87ffda000801030001050243c60aeeb2bc90e26871e36f8b1c80835639963c1e31c0f17551c68d65f8ebdb2ba27059595fa839b8f037c4d8d6308b97b857ba83d1f34e620b38330c8e5be1842011451e1a535cbd54c305c533cc11cb3c30a08a77213576c0973851953859594de07308e3b04508c14f8f0a36a2380e69520c10861c246f529bc0e583c8e49ea070139a501820f916e50680a5f3e1854edc84de2080384d1f5299e8e458f2bdb4c202eca50b2b2b2b1cfa82820a9bbed9e2ec84472df4722ec2ee9882990e5a9c3869e1a9aa27f529c103c3dab082737c9cdca11f9bb19c2014edc70e3e49a99c4527da3cf809c1108041c53a528bd61043d6c3b271e4e767809abfee341de65e091c382017b6117c217e4c41326ec647fdce761176548fcf8014144ef395a48862fb471204c7e1318d4f604005dbc94e7c71bf864e9f38ead3f6828aeabb617e423304f932827bb27c6245d82ee155765a46107ac2735158584ff20f6f84b7c545de6516f1d975057408e0271ca2163c25a88f0553f7f1858e0a9dfc80b08c68b08e4845bc6146dc129aee4a99fd47007d0c657b7cc672c0870e38523fb143c785d51479ade8d4de2cc9c8fa051f0554c4c453bd7e87ffda0008010202063f02d306246c7f19cd888f4d47a5f9666119d10e95177fffda0008010302063f02d30e24b114071dd2cd52a6aef8e4202d946d0b5c47101a45632d34061377ffda0008010101063f0246978bbbcaaab10cc3c366db0056b5b4f4abc7d8572b9b6ee3f950a8af1ff059dac3fa36acb73ff0bac3eb46565acc7876e980d962ad2aba8d14adb95115a382cece60adb15eb9a667a68ac687772a64e9f1cc86719d9f9d7fa0aa789b750accdfd93aee1c3b476d02a6fc37a25a8370758aea9558da6abe6e9db5fc79566310a70a9546d7e090ae4043b06efeedeb31b1d70237ee28b1fdc42319c2e3c3b04f0ec6772c9a7157baccc9ad75bef3bbd3452810ab79c7ac2f0ab9728b1104647efc11176fdc8b1d63ee3df826bc9b1de2084f1f8d96d9bb1ec1ec18d8793da80e1ed599056f608c16478e0d424dff00726bb1c7bd74cda0fb53983c3876681646df8ec2ec6c43b45d2b835b89280d2564a580b712516eaa234f131f4c7674cdceb5a78a6ccdbc5fe9ec50273b1036b5fbfeeb155e68d68adab2476b3f1159ba25c382a3a32c5f2d6760abb72cdaf97a3a41eee25558dad2f908fbdc9da489c0bf729348fb9b6b3e1372e22d08175ac772bbbd64c2f0786d205c51eea6c01318300844db22c5074f4b3172b226e4a5efcadf6dab9a068a62ca11f68404228d2ab8204d4d5d4b17460d1bddaaad7aaf35fbd7d5ea6c23c2c06e2a0f358c787e4cbe9bb665f75d871543fb465be8da53b55af73830bb2303385eb242fcf03866638a1dea3ee5589b57e0ad7e46836006e084434e19abaf3eaa47f52422ec458bacd928da5246fe2dcaac35a628c6fd96d572ad6e9e9698cb9bf132d1b2a9b26eb0aab6e28a2a4d37ef2293353f35e1366690c9582b529a1f75531a9adc1078e53c17312eef54c111b915995bb1cdde08f5295bb9c47af674cdc551537908a6cedf0f8646ef69bd69f2782402ab9703626d5350d86aa6ea5841c772018ef964ee2be4f88dcaba8cb9b0cbb74faa0c6c7a8ea74b4d9685ee88379f391b8aaacd80af632a6f96919e78f943314229395f96ae63bc5c2ed810db9f2d1fbc2e7602a8d140a815463610a438e52054d2fb2f5a4d147a8eb49a48fa3334781af1b9d8aa8f13caa5efc4ed042a7e2bbd2a77ea39b5c1dd36549a3585879a9f105e4fd49c03d373e47935ce3a9757827c7a77545f5172aab6ed99e4395bbcae9e8d86571b0598f05f2a37b6da5b460f5a3d79a36fa49f62fa5d36afade695148a16bb25379770519d649d49fc64a967d300752f2228c3866f1703c11258e2f71a9277ac8f6e5a5dd98dfc69f62d6f9799323e50268db767319b47d86b45a497494c9a7ced8d83185d4b7d0e5ff2cdfdb89fa61b5b3a407312a86fd8daf723a694723b7589b2c5a99a91d7a07378495c9abd4135cf46cbef1bef0a923a479367cf9896ff0095b44d8a16d5f5cd2bd7a141a21ee0eabbd360edd772eac4e2c70f0b9a6853619f4ed133a2e8cefbf316dcf6d6d69de8e9b43d402cb64770b6c1628a61bad40a14437aa2ad083c106d5d4575a9d23cd18d152780536acfbeee5f845dfd856334e0ac15ee5cdca38afa7ad72aa8b900ebd5f6762f4df2cd2bbf999ed7d308c7e55d297c781ecd0d878ab3b397076cb172da3662b92327d4a5d6ea888e2636b4ad49380526b354ecd2bce380dc9b20c0a0738b6d0aa2eec586addcacf16eec30f1d9c0ecb9556e0bfe3b4c7f9480f39fc4ff00eed818c157b8e5006f29926ba164faf88897541b19d4bb9bc3137dcaef46276823e848d3cce8a18e3657f7761cce2bafe587e925f7b4f2d48ef6815202cfaad3bba35a7559cccf56dccd342adf1ece509ad6f3497d97261188550addbf49a577f3125951805537ec3e6baa60e845ff00ae1e0b81907bd945e1bed50c80be48dcd2de9006e37ba91d1a2b8927b93dbd32c8a0358a6fa5696378451dae278951eaf50f668c4d4649f570ff00372ee1c87977a7c6236e9a06d040e8ddf57338624b5d6f61ae8e32c67fb8fb022c76493502d399d6346f29fa385adcb4b6461d91b4dece43e8d8763a426e09fa87e37776c6691bcb05f349b9bf9541a2f2f97369f265859a78fa9636f7bcfe10a4d46a22f309b471baca9a3b54eaee6dad6d70b0289daa9a6d3f9dea474e0d3c8eb34f8dad0683d29d0f976a62f35f362fcd23b557405f6fba2ea7723e69aa6410ebcb840fd467363a95219ca6fee545d46372422f7b9669586792999d23e81ac59dba563de7974d1177fa8afa39b461ba99ad9661bf86d9a1c051c3d282aecfa18cf2b7f69dfbb6505e99a12deb6aa46f535718765a666e639bb8594e2a41e61af8b46c83e6ead9a5be2845ac8b35b85fbd4be7acf306eaa321add2690ba38e2a5f79cf427d6993ff00d934ad779beaf9216e9f357a723a980a0a0e354d8349a2d54cfd6bb36b678faa4863ac19492456dc568b47e67a6e93f9b2c324858d89adb8bdb0e6b5d828d316b7e3fbd796ff000fb13fc23da86c729fe377b7669ff8acfd60bce3fae83db12d57ff004dff00aa57fd6ffab77fe25a4fe33545fd445facbf407b4affda0008010103013f21c63b9c60ff00a12965b72cd56d84d50146b88414cb1bbf797fec66aebbff00999aa5bce0fd8c194b97f91968c4d655f6866439b747d98fb94b147d7b4fdd9dff00899609d2444a0e6cdd8e2511475eecd35dc0e6d836da6e4d3cea66b12cd67bcf8d03612845f54a1e1e60a5ca2a986fdca8d2b27807d42d375e413ea7ce26500166f2ec3e97cc5a8bcef95dd19bc7b9d03a25c78b43d26a5a87407abb9541938a66d2df6ce3b5f12f41b2af1df3106d91766fe238ccf0dc0a51b95671df995ca26ed7c0b2e42e5467d2e673999fd98847f4a07030891bceddf897df5eeb831af4650fb328b6c61330d46f3d897e4673937da1c7b194fa431332d71da62569b7dc8ee8f62602b5fcf12f1016f18f79d9200e5de5e443a6dbdea62d57cf4dbcc1a0d5e53fd94f88f91e2f68a0cce2d5dcafa8ee732baf5e7506b01dbdd19d940af672837cb32f93368ca1e52bcca88235308da835b83767a5d678845d0abe2de20218a6117832f0e7c89dd86fd30b859f2c7714f72d436d8c45100d77c9ea4b4f6f6eeccc77bfa97611d12ac6541287668866e491743640a8ec2a1c31a0219ae3f009fdc3af2510f946bd4f04ba3025b306e05faf6e908ce31cbee8a45112b13c04341eb0911b87b331b67819f31259c6af0c449e2834cee55925a3d1ff00924bb99e868ecc15692cef9946d37ffce5598e9ec8fee33acfb92d331994f6cc7c26ca989e151b4f38a1f3368161f318a7b2efdfda255dc5bbaf596a2e8ad71c6e94329149ec747bcd8346734bb9451706bd8005d1deb5898ee81a6aa7c2111c05f1e05ac4c8addc76c9bef896639b5e07e860aa5e1bddeffde8b8bd547c910f9efaf02d897e85ef29e1f49f4dfb9e49587381e056e3b4282b8f157311b0e0956ac6237c40a5549301d2adc9df73701b5caae588c863bcc0c7bc42ddfb5d105c29efb6676aeeec5df2434e6100c325bc1f0e20d9564a350aff001fb9e8a3fa8f54bfdee67c9381d0008f12a57bc4173c7d128f00b89faa79466e22d00c389e826a178b63ed349c40f54b2a2fb23078545a14c738d2954d475d432a234f68fb80a3b9999e6f48c611f3950985bbc946ca4ab65a2e502fc74858cde16183b1be11a689c9997bd5456c10e58fab94950e9631f71aa9993e8afa41e0cd6b3b96bc35792ea568e0dc501cc9922bac4c9f20ff0050683bd4e383e75ac277c45c6db18e594454e364ca9f1f1056584e0c2597c47e426f03ef52a0e472747210583e9285b0cf33882aa68146cd2f86e591983ba51392f7981343e195664f9e3561f1304a619e614ab90c09ca5202c9561c037a94a3b18ca00ab0707ac1fdef43ba7999e90f7bb2843b5c718a5b8ca9489fb0488f0dcbeec3c6314c5655197f0276fb8e79d9af94764a0ac52e6bda0a01b26f6720d060ea004aee60fe1e1da4af44be892367f6267e33d6a4b4cb4f46d8f22e66d8207385120174253190b7acea1cff00c1de04c4c6babb5c7b5df763dc81c875691bc61f882c3f7439d847ddc0fda6502b912c368f81029cd15a966383fa44cf283e7fa901e85d291898b95c00eaba61f1598c4784a11524fba22ca20d8585b017bbc8cdbfd41e90a4778945d6310597b18530fa91dbe48308f77fd607b06de6fccb950f6c17341694ed807c4e262b8e6368279caa54b19c76b5ed11d3eea6013bf97d11b2cae7ccc87e7897975ca09a3a1eb16dff00c999257b842e9317ab7acffb988a946365c90709c4c1662396480ed09e212487a07b72bdc9705712f74478981b7658c16346e1c8e4d7d627dd73b4c3175f621c658806e97d80f04ef1d3e9cccdcc3912ea5882dad2465980cb9941c8a5c1d728083049d9f0cabfe712d09c93192dd1699414f040ae9cf6949c7068ff00a8b89308db29404bef728f99d29a734ee4d82051a94b2177dbbc66c0bce94a66338dce18602e5d674f7aea3a9138706ce8a55606dd1f31f62e16c01cc7df427a2152885f38ff00b31a29e9b27b427c0df98311296b2aed605cb670ab429753f51a10894852b6f6446528c409bada3e5b48039345b86686c216aec07c2886c9ac726cf617e7a82e0dc6d172861f79dac999da04aa5b162daf6f12cb2dfac47f7bcf38521857688b7a772b757aaf88e8ddf1edc3a3f89bda9650f2e212fb2c8e7dc0262f95dd4b428a384415d381a07306675ea497c7cdd619edb9c6040a84018c2c0b4e3b47c5c54342b165c31982c05be26747507f44af1f8a17bf301b91b6bda9230002858b34b9eb62b905f06621e676212f55d45d8dba7c3a1802d6025f79ccba967145256db471d00650df54e16aec876c6322e1bc2f447b4676cd9c8b7efa55f8f6c75d99372b2add93d654402a9416f4781796fa4fb3fdcfb38fbffea7ef7f04be9cd7f9e27f64fe4bbbf121bf27f0bdf3f80efd766bffda0008010203013f218bf2a8cae2a372d29330b065f4b97d18f47a10b2907a5319cf4394a74ee5f4bfc8c5849c1132dc4f78f494740bb8947f07f11e8aaf46bd40d40983a7ccbf32a8740e58752baf12a54d6812729d5e8e205f530e91875328ab0e97973774547f19c541ca22fab294b04dcb2074c9d87e211688ae0a25d63d2045b2e0cc70c4562b46584c2f79cf40c5312acd3a5740934c474e95789a85409a10958e8474f3d05f84c6d1c170af4b368c1d484e99c86a38f40aa8f40f5949cc30cba4b30e858574197a1e9bc4c1b94612a0f45e9b2158c2e67d28e252a2e1299712693022526d3844017d48b96f43dea9dc43be0e2c144bd6fe361644a731f9f430bb0a9b3a2cc408f74b70bf329e7f7053d393ff00834333284d29053224a8437838428899941f81f8314f45123719be929718b1b8371fc2ff002c372e1164a9625e0db894425cc4bea45fe172972e5cb8bd282dd54b6105badc1e9715125535d0beb7faaf4a952bf025c61d01eab1983e8b195f9d4d1d461d5e65397abffc7923d09bf55b4d5ffc7fffda0008010303013f21866a5c3f0a61356040a984a8aec952a54a95087a54bfc150214094e853345a952ba2a6d03f00e945e85cd43b5052896e86a8623afc36fc0212f801d3a20a59042c59e86984ae8c3d425cb2007e1afab21d096cd4953d1ea3f19f431e90f13de4be89195b2ba1197f04f4c30a08dd08cd43120560eb8949bc4dea6163a8bc063afe028f4aa4509521bdcf5471d00615dac56e0a5f4cf337da1d7748c190dc38c55a88dacaf78fe217654d93297229858a8c1cc198aeb5c8846f980ca0ae82c2de8da0c446a3d36943d2b18bd45b61926798a215d069d3815285328ca57847a5219df4a3a1742437375b8837398fabbc1740cf4664d50b04acae4a8a3ccad258b1b206eaa6530e8aeb3ded4232ce691f81f30ee12b5cb16cab447f0f34608a5a5be63bdfe92584751793ee52c87c7fd80715ec7fb1ccc26bfc15d78a2a3641aa49809b845e431ce17429d32f4f3f07a5cbeb7389e93d0b47880c7a22cb414d1946ba5f553f2c8837d0a49e519aa94ae2a98a5a27e06c53f0a64b2afa95514e1fbf509484ebf04b255d04c4b7b4560c1fc03e47f3b1f834401b810ebb788421712de83a5fe226149a7e078a0e9e25b87515d2fa5f4271349b4771e9a469d4df18757a109fffda000c03010002110311000010498d3166e2d5968b2ee595d3269efeac56267a86a4ebae841541499143a2fa471539c67cf05ff8677a3644fa424ca16a889a4eb3aee39a122e38709c212af46ddb76c4aa87f468b46ab07595c97130dfd1ecc92d81c7552e0de2bc52feddc0b2dae3cebda1fb4d83f452831461bf225bdcdb38f3c3745c435e0e56a0f584ba2f66093abd730c9ad11de92ec1c4204909f35504c5c83cc3474af5592e5eaecf13c53bfb27beffda0008010103013f10a01a6d63598a747619b2a15e3707c5a59acb0207dd46e34695b05ea871c312f267509517e219a611a0b50ff0a0a6f57b0798902a4b0cd2d570210814c01a7d4c09059a155670d1bee4484637092f0ec12ce6336c593ec51f065e1bb641b1e51cdbbc22ec0a59ce799b77338b12b14aed2e7668b5abab612a35cb0a109c2e50775d99a1990b19018e6e98ed991b6ec00d0e72415050d500f40cd608b87c05abfa960e0d615930c735f465d7b79987859d6270a8c70ccfe63340fb0cfa44a05801a864b29b235265b2081d9537e2ee18f6a8e19597828be732c710b3632f94efcc734c789c929423cc6b7bee554df6460b06914118280d1b3b1ad579609ab5323505d34f111ab19652961371b047b1a2894f262a219c2f98d78577f333a4bbc4f471307f4b205a620bee3ed0c341838e0c4b39ba6300e88ed2aada73eefb413165b5477881bb06ee5c0da21a3ebb3cd73dbc8d94a094a614deb8616f62d39b47acb51bc06da883c5ced9a8d6bbbcc45cb5d128ab78030e45ce2bcad55c1a2a2f0acb576cf598675d32b2d9d856e057149cac68d191b65cf06553a817affc800fb10dc39cbe6b7f3846b4c43d0f0e7b454805e39e083bcb5dce4b5a3b575627ac455ec5ac8a942f31aa2fa94286bc587c39825b128a4656aed59ae333fef0ee20425fdcbd2cc12e63c84b780eef78da8058589f0b5757ed3588c58063f7f504d466050958cdf79586c97a20371906b2c7ba412231358442b6391c951368140820bacf6890975168ab7b1851e613a97bc97961da40fadb51ac0a1ec9fa98211b74d32e2aa676a9ba566b83d1c74b74833f2d7a8905499d8422634771b0367f51c58e5e2690142ef8bd80a989148a6549933da35ce84f653292c358b33ac4c0ba95865897b2a073d68c0abcaf88548c62220099aef2fc9802406ebbbbb4b58c6ef7533901628b0c7a04f521aca99c50f86777361151161ea1f771491a6895ea593b536b51e0dc4576bc47922d0c2dc66a11281860032efd628a46d6a036f17369bc195cab699dc2091612b4ab00370e156a06ca38ef07711ab3a2d81ed2aa11e266aa8bdc106b2c64d6712fc4130dae2a96d1634f6653bcf825a0f387e650a9ca39c368fd9507fa35a1d2571829e670ef0759fee4ae1c46405d85e90b6b88c2cbb0594f6d9b83177f5197a8c06135f55425f613ca5fdc226c056cbda0d8311234ad05ba29b31b9e65b204d0146ea555c48e1716429ee84a90d52b080b77f32af3b29c8d6a64dcebc8aa200e1cf9cc7ad650660d1ad8a706c221aa047a942b5bb35021572b2eb6ec1f744b4856a317ac843b225915d20d2cbf03bd30e392c8a33765fa546c1a429b9571fe1652a179a205aca467235734963c6bf48768cd5ee2975f71abb501a06f358cc3cca7883b0381bdc6dafb72186007456a8e655147d960080504b400607362e498c18be22ab6227679a7d2385b98b7d45a7acd1e4f044e5a14ab4f55cc781ed25427922a80a4c2315914fea39f4456c237bdc229940a0f3e903a34c2fd9fdc70a5d0e7c08d6995b3008318def128b1ab818b6b9cee6956d641e71788b5602fec07ea3abddc1ed77f7090cab564500d2c0ed8c96a0a6eb1c4a96b2d5aa306e6ba2ad9e28c625f82d3e27a23c9a3fd3cca2041644e653838869f956112334a30aa806196b114ecb1df19fdcb20d9da0c8db35d90bfa8d3e693c14aaf896feeb7dd980e4327999c7ddf1102df309384c6ce02ebc5d4cc408d5af494864959bcd8dfcf9943590cc475cb5062372880143968bc414d949805001ee172cc69d46940fb90380110ab662dbabee276490235d2db97bc0a5cc60570507616c06fa2812c368ac576950b813428d17ab816b95aba0a6bee508bcc234b1639f0ca97823d8ff12e62869ec0d5c4af1088b92534a7b54a8a293892e8899e19745ecc8ec4e21a584a112674cfa42982bc60b1f2eb2cd10474c7c8cac29730795bc9e2cccf1e128c9f30c0aeb0bd71cc5d5cc521898670f0b63fb86b26e9750c15b19e224e0b64bb41836ef0198857880a7415ed1a5611aaac6c0ed11a9171b3ef2fe8c5487228678970746015b8e3de5b40fd8bce0a8b01eb1f1fdeed5c47a382186ea786f504a01b52207425fb8caf8ab530f7c7ad4ab0ab88cdb8d7b431d79bf90ff516129749302cfce1a2d91cee8deea52327b1dbcd5c42584ec1089e8db6657454a5744230353b1ade6242e53d958ac01661cc7f2996c96eb02fc449efe70162565618ce894d4bb211e10c45e808f916bd20b7bf23d30d225a0e6300352a8920b6e7163512fc09756126606b94d313e11d9da2c1de5d7d551390c7f32b1e9772ac8b0f5192a96a1737f5d05870774662448008b14b790335ed041f255ecab056de4e2527f5086ec011704565d017b105d5006cbc1f62fbc10aa86188c9e664ca1b8846fda51e7017e865b7cbede64c092c0f99c8e05808336acca703570c008aae1a6b091f3a5c614d79ed0718e439cbaace480b29520e16ea6b4db129c62c8a436b60716d7df68b06e35e78cd0beec0e64a136e33c893d4092d77282e9c6d20dfa894a2cad98dbd012dc9086187ff0052f3163ca0b816386f922a8398f2eeb8986cd9a5f6399840b6f6f6825ecc11561b7ee584a94376b1c8e35de5e5a612d2a0a6ef4c319da41cb6847631c9b72e7c4cc02e35f337507ac70c033b388222702bb6c6aebea0c1e2944d05b10c091d5d88c772195156b703b11a0d3bdc0fdfa427d4cfe2061ae90095c40181683be0a9be0362fc9c59298ed0015a6bf988d0bccb3be6a3bd12acd9ae1fee040eb05736a5dc6c8531751eccb135dcabb60ab5014ac5417614071781c047e6920ef7a18ee469bec0561792ee562e62c447b24a42d4170c11a605ee8166bcc084033b48f882e6231fb9c68173b0f7c43c3d861c080773129758b4bbce66a26222fa016fd44a9257732735555712a1c338572bfdcbc46eadd15f9b28f3110158a9678ce55688acfe7c0454b1c1c9c9662f4e21f6179f4bb14096022872290e4c1e51e08c3ed24dcb780a6562e38f58d19464f0de61a16af7d0ca7883796fb4bc205a610eeb1140979832d936d4bc367dc2994ad545f62e95b7f48b1466b257d665e2cf0c36358c3cec82ff00242d602df038f31fb35595195576acb118cb8a08231b360a7924bb7a3a0567cb348b556179728e825adeed65c4159ac9f70c8e14952968b22c232a148cb4a08eb6c6397115015600cab1413588cef8dbd8960804fb9d0b358b2091cc95cca60f08da32d64bfb8c145572c037e92b00b31eb1f52c7018a99dcce0f2b800aa65a8e9d289c2b4afdcdc3e4b7e3262e11107be884ef38550e14526f9c32c9ca1d0840a7813850a390ecf8dfa05a94094b4098453dc44eecd14e0cb0696cc569141d2ce45a234291a016abd82374888072856f59a3949a8aa0617609a98682d3015c9516f8f1c083441da5aef30dcb0c787016fd0443c63fd416590fbc7fb168ce57c5470a6d6b14cda2eb6f4560901b570105482b037373ca0e68a8db3c9ea7c014d89c4b6091cb22bbf270d88990c0a8525d82ab6119158c5c3aba2b4d20439a58736a1631aafc8e598c37b3c3f75fd93ec63f93ec9fc8768db021b67f2bdd3eebf7357a469e9fefd2573f92ee84e401fce76cdb3bfffda0008010203013f10bae891832fa2613de765052b814b34c4375a4738b0e85c589b74189599dc886a1cd018a887e223cc551b73036f32a74209bb972dd290e8c35d00e61b2744a6b8bd282c296199c1be9c10bf83815d19c64c32caf5379053316d444a6589accdc805ad9138883cc2e5c76c7abe5629a8db26d1df4194c133c48d4cff007153172ed2bfb21d378b51d2e5db63aa9bb154b2dc45f42a971e2516623a21b4a1f73c88dccc90211bc58b210620660459650e8cd2c6a28798d76ce25c062533cc171c463e33eb08c19844e60c8f4dc32ce32cee14d588d5a82b643361d3975e09508f78353a985bc41f70ac7736dc7ed35d026a50a1ef6ae6d21a72ee59560cce0012caa4d70ca96956c44b770020d88af310a18c55cb1d83e3a0684a03de367c930e99da0054010e12eb50155104a6e52a305e4984b7d0d421c3d264a9b40a9335335732852398c43804cb304db20e68622025670b291cebea1b6ae16d2284205cf333d914200ec9d41ad39377889371ca2902b3d3296040c558954352daa94e03ceaffd8aae50b772d72e20da2d5231847cd673973f11aad960e33cf8b96c943f3d1897441b9e21c05c4b412c290822dca60b518e2d30480d712e4ad66a6254bcc45462f112a1a6b8f7f68b4b6dddbb3cdf8841f72fce6885d9312885acdc64d3f51402b593eb6fa8146df48dd116a3b32ee5d449b892ec902cd5298ef81b0cefda1e8a7dacede678465532671c0538328d44da5a494e40951a969512259398278209967e60e0f88bbdc155328a86c490a2497a095537d0bca9531095314f10cae619771017861cc9de6391930c81b8a988e8a71d50807a5f530ab30a759a0f351790e25e6fa3ac03bfd47370bc3a542acb8e8827a493217789c4b12e66e3dae8cc000ae98a52f49d67a248b9677394b5256a6d158a47786037380944ca1150212e54c41f267b4f074d9532fdc7fa8f88b302320bd3a3142e074210dcfe7886bfd879a6efac3a3f7bfa9b4da689fcda8ee3399cf421d3ffda0008010303013f10196c0a4cbf05c4ec9576848ce21ff17058b9fe6a6d18f4bd612a99417d11b80ed2a04bba96ba8d73bb802eae347246ce2c8ad1c8f1da3ddb3529c7486060b12a3a3025e451322d425dc621f620b88a3532631fa85b3a859ae215fc204a8c17d572f95706e54b498e1175d4438110975320658e0f089844a83f186b886b32864d262c52e4a58704b993262b29e44bf398eba0c082d8b52ea399138a582081ba83338299819f08b5177e960218e5751a92a1c316631b2751e431f5dc779f69948097333652a425c806a138165df0b8ab1c432305e71af4889b8f309b09b40b4257ca72182ab88ecc17ab4cadc4b02e5d98312b0d206d99475a4836db14a4d5f3fa4d22cf456cf89bfb32c0f597490bca6220f58db97ef99520afd4de74e85931d2a8a665daf6838948a82ef20fea1e91e677c051c8ca03484e2a097ac4f2508c0445e772d462336bba5b352b398e844a5951453327986f31e1f30506837e91dcfc4aec40c22a15890d5228909599a837c2afab01c902efda0ab67bc73ff92a5d77958982a2c54cf52d00387a2517918622d2a5d32cb5aa80e5b80e7a389ca4f872883fcf32a2addd5b02b351316a1c19532aa7799c12e8879bc87ea6555514e1e32f996d6eb9e22824824b1a080e8a67731d19cc17e87eee680725ebb68e6531a35ef3c9a02265948941328dc77320bc4417cb2f6f93b77f981cf7c7cc64440f3aae711d438b9942355c8c7156dd997f90b4a7e7fc400680f1bf36f9210cc1d9dfaf78cbbf3351b8e4840b8c6a66534a0368ebebef331247078df985d22ab936d1852dc45a84e72336ea5c7c7a16f533085198acc4f3436a5a771fa971d6019c301711920312d9a552be6cddd19ad422c8338e9a97d33d33c779e832cb78830a132153b68528d1142ea58866dc450d42bbc1254d4ee3b9eb572adc6a64891180ca08fafe7f097365f77f538a9572a6a2fc45bbbea6e33e9d44d319ca8c6211bed703ba92c53286510ca57a5e22aadefa724b08cbc63311755c4c4044bba0e8c4c2bccaff00188dbeb8edf1153d713bcb60d147437309a8639e9a985b449a66765660510dcb78a27ddcbad86c8b3744b3995d0044a88edd328d77e9236cd3b9b7a19fa5fdcdd349a93cddcd99bf477d0ea69d1fffd900, 'Education includes a BA in psychology from Colorado State University in 1970.  She also completed \"The Art of the Cold Call.\"  Nancy is a member of Toastmasters International.', 2, 'http://accweb/emmployees/davolio.bmp', 2954.55);
INSERT INTO `employees` (`EmployeeID`, `LastName`, `FirstName`, `Title`, `TitleOfCourtesy`, `BirthDate`, `HireDate`, `Address`, `City`, `Region`, `PostalCode`, `Country`, `HomePhone`, `Extension`, `Photo`, `Notes`, `ReportsTo`, `PhotoPath`, `Salary`) VALUES
(2, 'Fuller', 'Andrew', 'Vice President, Sales', 'Dr.', '1952-02-19 00:00:00', '1992-08-14 00:00:00', '908 W. Capital Way', 'Tacoma', 'WA', '98401', 'USA', '(206) 555-9482', '3457', 0xffd8ffe000104a46494600010200006400640000ffec00114475636b7900010004000000500000ffee002641646f62650064c0000000010300150403060a0d00000d0e000013e000001ea900003004ffdb0084000202020202020202020203020202030403020203040504040404040506050505050505060607070807070609090a0a09090c0c0c0c0c0c0c0c0c0c0c0c0c0c0c01030303050405090606090d0b090b0d0f0e0e0e0e0f0f0c0c0c0c0c0f0f0c0c0c0c0c0c0f0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0cffc200110800aa00a003011100021101031101ffc400e500000105010101000000000000000000000502030406070801000100020301010100000000000000000000030400010205060710000103030303040105010100000000000100020311040510201221311330221406324142331535233411000103010503090407080203000000000100020311213141120451611310207181912232420530b15223a1c1d172337314f0e1f16282b24324a263344474120000050304030100000000000000000000300111211020314050022260704171130100020201030305000301000000000001001121314110516171819120f0a1b1c130d1f1e1ffda000c03010002110311000001d0940fd5a7e47ee818cf98f37b8533bad92e9c71832e498b56d0dcfb9ad91126f73f6d7d5b1e08bad7b22aaf99d51fb34e548f5aaef2fb0a13142b6ebe4233ac4fd099d666d85726a795f516d1b8f492b64b556bd96babe69584aabfa5d580c6999318133346644d020b00f048db952adc0bc5a8fcfb7388113875d680e56bda9f5df362c35d5a6a0d55cdc9acad370a36bfd7a1a06070cf006586120a5ca0b58a975392620ba4fa48ccabf65fb539d462554449e24f6d2d65955a905c3309004c0c0b0de6e0848316335598dd5e3833abb1b8bdd374a93ea980c0aea0c0921a4f6a7459a234b632e932304c8b0b2ede442a71eb9123a91d1e68e7f9b65681aa970b97ed5e03a59dab0412d6f97d2d0d576e5b85ba0b8d1b0340c0803099a821d799a7a85eb6902e873751754be172babf65f3bc5a4dc9e1354f99d1b1aaf1eb265caf43193b312f7b4a97f6b390b606b40d2c1345da401fe66fbd6e6d8e5aead52f9ce84f554dad87e2fa3b58728c31cdc5771a6ad633767a8ae5d9730a7a8e910e81e61ece4e7b4ff2f5eeb73ac1799d51c9ae73ce3e91d955af39ef6f43e65d0a111b353a9a370574656c8395d9ab96ecf005d708164535bc68bdaf336cb84b5526eb9d8794cb54970e2fa87b9f767e8a8a6755841f20701864196f1fb5103b26513c3082de473d9d53b5e4ee1ab7e52b78e7a0dfd2e44ab3a7d427c7ea890b5061f329d0bbb7cda58dbf33a787ab85ac77688fcdc1ec71effd0e45a75722ea36b38782fd9266b35803acf13bf6ee7375c60eb683a1e96c4c7d3973072851f04bb61267a2886ec79ed235562ddf9222564a3a455bfaa23ad649e63e93ada3c6ae9f78fbe4d0074e6c6ed93341b5ad013b2e419efa4f2f7d286ffad16b8ec9f54c7ab11f3727553765e57f39f59e9a43c9169539ad4239b3dcf49bc43605086d00ee215fed706f999a46acb5db5249958de84cd5ceba000f45c83c8fa6eb80f3bd20b708e399ade59ad4663668ee03174b51bbbc392c73ec589a96ac9dc6ea9f9acb761f2acd8cfc9dcbfadd144f0ad277cc723aec7c1b11aeaa27856744e94e426dbdbfa3e5661b9a4aab4bb926e33541b1a866196197d43b1c4ea7d606c1c0d2f0768cb8a5fb09e863cdcb01c89894d2f4fa47a3f350faa1772d59922a55ee576f7d209b522ae88b74f9345f4d8333134bb1621a5e531a5dbd0a4619203e9ed86e274b37e26964c64dac85ab959d45962895d6fc7788b898159fe3d1fd2abe33b3a133a047d2f0c88b7619237090fa4698f3bd733cd3f0060a31a5c66e5c66faaa996bad783d8f585120739ce7b2a18fb716c50088a261bd09332ba24dc3c19cf2fd438f3fa2c5ab74c18ccb7eb254cbe44d08af1fa7a0b2ae6e17308bf51560fa86ea08273636d2fab7edc556e4e1aa7f43c57468d0e87c2d40c1bebd9ed2ff003bcd3733ffda0008010100010502d0697b742da389971e4b96cc15d5efb229cc0ff73246b9ed92d8892d8c9ff3c51f3db476e5b25a0a306f9642c65ada5d5c4b3d99acd8d9dca4c74f1b8636408630164d65248618df6b134072c4d18b8b5a2ca46b80df9199b1c58cb192daca3883d0b0e4a4c5c6e0ec4c6d12635957630157b8996551e23c4adf9467c946d9cee128edb4ab2b517994b88fc8d8e300009c9c9c02e213db54e6857b6e6586d1f33c433dddbbe078922d78ae29c28307ed91c7a30ae48baa9ce4e7549e89cee8743690bd4ac9a0585979596b4545764b21c5cad0e12973637aefa49a3ba878d5b42266728feaf04f141b02c9d7e25b3cc6db59ccae882ec9d2757cb40f9681d7345e5715c8e81c15d4a443f5e944b8ed6a81421f336fec6491626dcc42f64918dbd97291b6eb259c06df377f1496792f96aeaf9f0b6e73591e6dc96524661ae324f337799c6e5b8e89b05a576029b23989b753490d83db22bf33b5b97c37d96e5aec24f028f193ce7ebd88f8b8ecefca8e5b83987ac75d7d8e3566f374cb83421be275b4a031af40e8502aab251dccf7d87865b6b6255c63e3b94efafd8d6cb15696aa265197d6ac9a56d8163a264ac4d68ae5dde38e627e45992e6b102aa8eacb764e9bd2567109ef6a9ee608859dc36ee0fc5972692b4c64b42a2bd644f8ad9d33e0b3fc588a0f55d02b09db5698d3ef3df717bc239e67ddcf71659382cdd9ec9566c85d3c174ae16770278eaa4844a8757daf40d72e4b9aa68d59a8af7e2fd365bb38d9595b9ccfb1b87b6b2b62f9fdb7f6335cbeded5d037c655ab24b79ebd66bb642d839175b5557a54a28e8d5cb8b3eab7a65b9751cfcab259837eab9a9df1fd78b6da3c4e35b1cb698a8656df670cf64f7cade40273bc92d8b47188681108e8c4e67387077adb1cb81eff001f211b782b8c9b98c7e46d254d6c721642c2c3ec175351adef62f50f50b9208e8c59ebbf858c94fbb0ff00632d6db4ec9d9c6a2e2c8ce64c6480f8648842d591bb82c6da1b8f9912b27f5824e9e55e442608a0a26b5adcb64e6c94f275d313f62bbc5bf1998b2bfb775cc2d125eb1326f23bc8c8db9ecdbf357b8f88c562e56b251d0c838998046e9807f60d5dd47075cc97c78b71a993b91547a2b7bbb8b47c3f69b9567968ee109dd1b7ec39e65cc585c73aeee4f4533e89b71456f92a29f25ed7643935d9173531d64c8be4406f7393d87f5321e2f79ae85382e4a8104d0bea9908f1d70f82dee8de60e7736eedeead1d0dcfbe7b8aa61a895e2b1bde228ce4be7659993763ae2270d5c7421513535596427b5c8c1f2a780dcbb9437e6564df5fc3deabefa9e4181ec9ad54b3b797e500763ffb5bf8f18eb1c8c1e19a414716955474a201057371e3970f2639a3c934c2e263048cba92904fe452b61ba8effe836b707eb9fe7cff00e966bff05da9ff0021da7da15fff002e2ff924ff003b11fc98eff46dbfcd9562d7ffda0008010200010502d8e3445d5d00d8468d29a7afa04a24b8ae4b9ae6b92aec081f41c9ad468bc754615e254d392e49aa8987d03d4bbb00868753a075103540d0eda68deee4d55d4e8515551229bdb6bfb04f726b90d0ea7588e91f6dafec9c5355112895c917aaeb168cedb5fd8854eaf345528008b7408342a046899a0edb4a63ea89f7393486a3282b9203926510e29c188a677286f3ed7feab822d544c6f4ec6aaba47deb57ef91a8f7680aa9ce099ee43a07f7d289a543d5c37c834e6b92017146aa88843585bd37bdb55280dd005508bea8155d9132be94a8209ae0516d17145a02f6ead141e8b86a1794a2750a2654fa32ba8139a82017154d40518e9e817271aea59540f15cc2e5a81c437b6faaa9dde345b4544d1443a9def93a7e8c1ba9b23e8abb827745fa311de7403a7e482e61731b1cabed8c847d18868421d555725cd07a957ed8fbbb51ba3ecfec3b9eee410d3fffda0008010300010502d8c6f241b4f42409de8815428002805c5715c553572288f41889402f251099791072aae8884fd1c10de3a0622740821b084f144687d0726a2a880402036152e8eefb5bde89a116ea34086b28d1ddf6b3ba684740100805c1535974777dac40d157a462a8342f1a0d459454442a14549db7b7bdc4218a9ed8e8ba3d32da8885249d427f3a33c89c13fb774778687407b51364a2f2145c9c7a83d2a8e87f16b4361dec928c4535a9ac253dbc4feaded445141bc8ded1addf0b8a2831358bf11e4694d635001553c5114c2aee4abb7c2fe26ae72fd2372797141ba15c972a82a4938b7d068a9bb8f804c29ebcd22f952a6cb33916947a68f353e84668eba6736208a6c4106d1172e49ea67f16fa38cb7f24a54f02228aa9afa2e68a2a95372de327a0c6d55a45e38ce93428b5712b8221156cca9bb772977f150b47245108f44e6828fb57309ce4c88bd4cf1047bdaca2afb98fa3aa8e8539ab995409ad09a164855bc571d69b3f72b77738f47e842a2620af9dee751a9dd550ae2760a2e1eee0563ddd0a2d55474e280416424157a0a9a16aa2e282fdcb1ff939053a1db41a5ffe48f6d1c8a0bfffda0008010202063f02dfdbc926b8abec4fb4c69d9b7c9f31ffda0008010302063f02f4a49f14910a336751d8b7339290d645ec190d9bd90975d1b0e35c8ea3030258c4fdbb273fc4a3a10a852562e70a4a5d29639485216956b938d2095e24a27dd67fffda0008010101063f02e662e91ff86c68a945ce706906b47774845cf95b2305cf165cad7b6469ab738b3f82b2d63ff106caf997cb1f26469a8d8762d3c97010d0eeddf4a90799b98ff4d1aa38b2ff008dce277d6c46137b1943d489f1136377576a6fb0716daff285c79230e26d0f757e809cf934f5de2cebb7ed59a175fe2afee0aa59981b246e050a32ada10f6a70ad8ff038e0429086f8728b7a289ddcae6a06545fbca8e28892f36cf2bbb69b827323b69e3936a6ff00c8aa0bc61ec0b736532582969b7604ce2b32388cd92f36ed2b30ed56daa9942ee8fa15d4dbb178457154a772972cb97336b52d1891b50606d183c8dc56692d3e56a8e94b5dde1bbd8333fe1e9cd4ef3804d60146a000bbd83b2121edf0d13812ecc3ca7f82a96891b5a7ec531edb88e713b1677db23dc49ddbbd9dd949c6e4e697671b1f8f5e098285b427baebc7389069bd39d836c06bee43673ece5a1b93a271ad7f0dfb3729b887b81f48c7bf9d253122bda98d7798ddd2ac356e0392f5e314c79379e6d15458f65c0e23626b9a6a331a6de71ab33b45ed4e95adcb93c112756ff315961706bc8b1670f320c42f165070a8438f2bba2a9c41b0016a2402e7609d648d186505011367326d70a0fa135ba97b687cafae6ea4da58704e8c0a6f0b4d18a55b1b7339b89a73aad7655fec558f748e657eee3d6a47b6e072f6273f4fa63a89e948c5c3b519755ea9c007ff005e2395adecbd3f89307486e92a4b935a1ee73c5cd015350cf9c45a360de8c5a6b00b4a7b9b9c3bc81bfb979a6a5bfa7923bedf8931ce8ce9a56119e3b9455dbdd557d81c6b4098d183473f49a285dc26ea627bf89bc0aa6433538ad273d3a558be7461df7af59b208db8d171218435eef3629ea4ce2c2bbb760420299b6d8ab8ad3babfe66ad29b9b47bdc3a90279fa7d55d240df96e1d8e0b712aa55e8ba67801a9b331b958ef0a76fb2a8e519c628806ebc72576274937874c0ca06f0146f9cd6490024f4a1cf3a47d9c405ccfad1e11ab5872f62732be155cd40991839b31b1a98df48d508648ade1cbde69474fae0c8668cf7dc0f71dd09874d94371778bec5c769f9adf100ab73b11c84386768b4c5f16c4d662df121cf74da02ee3c62cc9e2e90b551eb9e5da98f54fcd5be8e00aa5dc504665140c7652478cfbd710ea7f5339f36c546d9d29d4ca731ae6aa113a8fa5ee08aa5f1bb62aa7508329b1ad40de4fb0738dcd153d4bd5d8f3de90b6703ac83f5261f84d5658ce0bf53a4f55769e6cd4e1389a53aae51bbd4e6999a8e27cc71398500dbd2a0c9eb0dcce70cf495a2a3a159ea4eae7f0c6eceecb93757153706368d0c67baed45b21ec59a500118723dff114d3ec256569998e15e90a17c8690cd5d3cced81d71ed4f8cdedf72b42b2c45b23330594e959506be1b7dc8bd8c0cae002cb94742162ca2f7fbb900439ef373f53f2e2facf6276c2a1d2eb5dde8acd36a0e23e17a0e1d6158adaee46d6ab458aa6f4fd4ea5d9638fe93800a3d5529c619b2ece51cb7f2ba699cc6451b4bc979a0b119a5a36bf870b4d5ad1fca8aa14dcd5d469bcccc40dc84f04c1edc771de89cc2bb11f3515765c8bdee0d005492a9112341a53481bf13b1795a561bc462bccb4af172c79b339f21a32260cc6cbeb82f517b7420b7865a739aba972f723cbc4d34ce85d8d2e3d21535356ff00d8cb47585dc9a396bfcc2ab33e58a08fe27108e834329918ff00fc9d4ed1f0b53181b58a1a3e776c03ede652aaf57f27163d4c7571a32478367f4a64675cef95157811b697ad5174da8682ff0019db5f72dc6d1cebb9642f88cc666819074da893a37455f383459b48fe37f21b0a2dd440f88ef1f5f25eabc9070751a478cd76379c54b48f4dc3e10cae17e0a7ee4125be0ebe84e8df1f0a588d0c7b3772d39da76699a0c8e6e29aed5eac318c19a8dbf2fee4d6fa7373c8077df27848de427366e03c37f1a036967da1712360d33df73e1bbb2e59b48e6eb19834775dd8570f5113e17fc2e1457a878be9d13dad92fd3baa0762caff00d469e5921ef5b65ca70fd64f1d1d52f1b9dd1fb76a84b753faa8e785a592dc6adb0828ab16fe74258724ac3649b028bf51ab7cb296e60c1bed2170fd3e310e95de19ba70eb5047a19449abbb8ee167dc7d171c6a0e5aff00b9e9ecbda76b531ec7cb2b241f2e52681db9db0a306b34dc784d8ee252ad3bfed464f4dd63b4e4df0cbdf03ac5a99f98e4cfca77f6b96a3ef9fef62f4dfc97fd5cc1cdea5e99d0df729bf2cff72d7752f53fdb12b57f7fec52ff00f38f7047f2d9ee5fffda0008010103013f218741a8d10c55f4fa441fe9339f74ee0159142dcb8bfd44a1de10a714edf2454e58eee0ac36772205b0c5d8654febc7980bcc3fad457028764f1607f5110a6fb0ddfe350331c0b19c3f1297ef5db9785dca9f359ea3a54a84124232b45f98a36f9945629ac7ddc1ddaa945cf631174ef0287e42fe63a753b163bf98d35b09bee7c4b1a4ef6b81f994254fb4b3daf312cb08fccb2ad66ea2791dec20d867d488ac1dab33ca97c5cbe0eb63dd8771067b7334e87425465efd6ad638506d751e0b7857b3c01d8259d76a95cbf30347bbfe44aa863caf3c777b4a8a2b86d4284e2f657a4768a94a615ff50e990185e070d7980cefc725ef668f898a80729ff25d6d61ce8e9a8ec269310eb5d496b42e70d0f6ef31886dec7a4ab81812a2692b39f10cc1b41638943857dcae2593159f977fd41a0001812de720af33460bdbc7d222e0d0b63b12d1babe41e901b1aac33112a74954783a74cee0f0c41689babb7a91d07615d0f4d3ead42b8f985f83d3b7d222c18d2b41cfe2585cb6555f261a3fdf6949be998e9837881b9a625b7e9289708c42cf596036a59b0d8abb728259bd9bcf678875b8a1454e4bb01fe43f128c8cd2c5fad46f8dc706f7114bdc40e832fe0af6fd4b0447b45f7cb8d8046cdb0e4970169a788b9ad5ea16fdc46da8f7280d61f7843a6fd23062cf7bb4487abbb9d08ea644a9c9cbe22bbacb4325da2dcf90658eda0ffa54d7931c5f198b997ab16ee1660500bcfa46e2eb421f14622c00dd820f77ee5258db62de868983b12c6f788595e3353e585d568982c985ba5cbe83c2977252af9c68b250e230e5a8ad5ed398ba1b3cf64bb19b294ed90af784df62cc55e8577cdcc4521a8159ce5329a3ca544397e68e0b980abbc16f3c0d7ac51757638503b31cc6cec1fe9339655ee82a9ca2f7c54431a267d25fcf4062ea57691134c1f9080c8a069b67de51dcfebd610a056d3f8108eb1eabe97709cd0a59a7acd4729282144cec89b8b6a984201556abf86bf11c16a57b7a41c5b07cb28d2845f11f76650142d81954211066c94b0fb982cfac0a26c7e61af33c470d0f4976c652702a7e68c5b0ab6d6a8b8d977fccce5b66105c4354ce93999d142aab985c50550ac3e08feef04588aa146065a5dfa661db48d723ad779c526c2bdfde23a1a06325a077559a14d1d9b69e2085ab376729d7bc161817965f4501e606a0c6908710c2fe94c8a8151359a4728ec776068780f422a5e25466252348c041a8e0978340a5f90a9c3890486128ae6318288539013f4cc6e61d55c5bd26e50ef45b742e60e40fbd65fdd5a2a2cd8163588060ff00ec4fdd7c1ed048e13cc880a7bb39a0dafaca2afb4b740583a2cca6e4fd2173e7a0bbf670b998c0aa17933bcf531e1f1460c28df64e5879435c95d836a162995e5722016dee7be05178320f7d5bda15d09056fbdc43b0ef1fb86878e23d066b704a86a03e8227e26676170dd91ad26bd804610cb84e5699426e49430a6ca8799c70ef11945c83c9dd82832e35fbc11639c265b0707fec55c583fa8a83060e0c04328ae39cc11cabbefadeaf48a89ffa4d617f4bc6fd3f31cfcdd730c7f844ec036c07bc2871406a29c8cc6582e206c0e3ba601caba8dac516bcb8f68e230651e947086509d45ea161c1bf5e25152d1ae1cb77860b5c8406d108fbc3bae09429fe2f203654fd80b8a5386fccc8ad320fe22cf1b1c0195809a4f677e81d8f5981ba57a97fd8ea190f31c3338e225693220ea52802d744ac0e823b25c1eecb76ca24c5553dbb7ee64741a768a8a1c25d712cfcd55e8f6182cf661ba8f90f6b84de89417b8dfe2393acb86f9a985b8ea3f40f2c647488c2b9f56220568344a30d6e301ebafbccce30969dbc441cb9801fb52aaeb1fedfa8e6079ab74bf7bfe76982a51623e7eeafb6e587aaf86042c22371364b732f6f6ef05d5abeb3b50f0c9cea192bc1366e95afe435190a8d60fdb50206e583db4621bc70686a3e5625817a83604820e535ddedff00ac6556e713cbefd2a0bb6c53d25accfdbe6dafd8cbfe15159738913f1d40e9c7a198d52e77e933b28252f65784216de0c2b3b07862a38612ef279098a656d6fe6f6a38dd88fe27e6589dedebf32cbca234376c8b5f8dfdf0cad84b614c737aa82260b0290f0fbcc6acad381874d54abf0e7e652bcfc468b78ec62c7acae8cdd36f82a2d59b2e65628ab60ff6c8d7c755c67259d864f883fab6cdf93b1d30ea894ec18f21c41147417b20fc90c01335768b8f022406c6cadd51fb4fb9773aa8e1b7dacf47fae6a6b71d751be9d31f69ece997daf9e93fc046b33afd8c27ffda0008010203013f21fa2942507a5570d44b3de50c0953d031fae83a429250807aa434f43bcc65847e87abc4e4658cb740a25c94c112ecca69d07ebc783a74c47a10eb49625089f495d090ef1622c745dc58a2c714229504cfe954750ea60e9652bad061ed197fe1874fa2ad439e8f24ae343a166532ba071fe0a5dc6b1ac4b373970388d8c16f409c1c26f2e0afa82c8f8ed2c515f136df29a4220876e8b3e614c4de39c18b12fead897175a85b2ca26b72a51b8651a47334cc53b43ebb18306cb10c339986fa0370338e84352f67f803eccc7116c5d4b2625cb39c7d2612bb778753e9cd61d3340a50c432672a254bcdcb96eba1f5ea659fa06154af727311a1e636ca94875bfa489896112a0434435b2ce23122c4cff6e97f4bd09ee3d2dd7460e9b1d19735003d187d55625cea5e2cd080265d2a7aa4343eabe89e258ad7d06625ee55d458236981fae096e13d709d7d23d16c58c5698ee09d1847a3054dcf9b0e7a9d0fa1bf0c2a54dca60d04957025e5292d4671d6badc7a253da1775589667995ce54e20e08e8edf10d7d7a1bb08ff836cf59a7a9f6cd233fffda0008010303013f21fa1d40150e8ce60f5e4831087d7726ba5fd4bd426653d2250c3e93a1b65ed11894e80bf42902021aff0010dd8b3d25fa518e96cb50043ea3734a873d194a259d00810825ae0dcc3ea1b860fa5a83d35d4aeb38667f5a09866b3700352d96c04a1311e84cfd66d0a0bc064c7b882e276506131b821d9868e8388b9832fe8559442f5a83043c944e0623355cb798d4066550f0216e057c7c54aa090a419fad32de26507744d65f1d6a5826374e51c4dd141baff03f62ce259884c1463995620b8bede8c25477cedadfebfc0ec76851ccc5705662161aff00e4066a59cc00d712ff004a8d90b883f7fe02877bff00a8350997a62ccc2ee30c59e2154398b7fe0a6ee84134152f10a2a6c47ebe258d658e220d3f842bfb2a235f65caae96cf43ebb9784cc1c662c74c76c6364b9356371b336984eff59d509773fd4c652ba2249d00b457309841198e3fc3cad43272e586e2d6196e6160d044aa29e1d09277fd7d0cbea2c4a5babebb6271e2674dc6f69de5f018a455cb47ac5bcf5a952a243599c41111c7438b00ee32d928dcbf8e8a8256bccca2a540e83a1733f1828e258b93a317089c7580e9bfc489b040e517eea25332fa15a62b5ed1ecc6b1316355931dee2c4ae8a9e9c73873e19422a6b89684b2223d9d1f7fbfbe7a7afa7a759af13ec61d37e9f7b1d9bd4dd0d4373df37e9fffda000c030100021103110000103875c26779b4b6d6118b605b47d3625621415d1fdb25cedd99af0e0877e3a4b4b360f35fc0b0b03c2a9e9ff1cabbb6b31a7de515cf495b4f02f8da995e4f0da513178da409acbd00bd74a26a3663ecacbca3f21821c4b667fe0bc2f265e6f801f05a6e0d5e4e31a15788dfba9415a0fb134f542f5520d01aef53e0818fef76742bb270b13dd6ec5f3a65671136b30d6cf20b5d9fd1482c26c73fc1e83dec02bdde26caf97bffda0008010103013f10832b2a1fd8822defcc7bbd6f072b1dd4322bc978878a3d211a6a2e9542ac39a476f314a1185a1dae4d6cbb0efc56022a05d02cb90270d22dd42acee06c76629415e6979308f2912d4066d740437b8e2dbc8acd0745b5be2e2ce741e3cce2a8b39b3307b2de547329742c6622306469595a56057a67d113d083b33527db067a37ff0070544147884cb99213596e8db44489a89434cc72cd230c8902a5302040706551e2b456d9ad3540bacb6ddf10cc2e4f8d1002871461b7bcad39514da034ed063df70d6c3985a85ca161ddd6611fb010539ecad2ca8e0825a96e08872d56ad29f134c7505aacd9056d4a379c78005041b1634af2e25986094c285517b5683b445ec9446850c8b72b4f494370530a82eec94acca0442a24bbca18a9c3d665b9bb042a90dc25f8c61d8a178146d9db12ed11ddc514666cfcd6731f50eec3877a63d48d52cde4a3abc6739ccc0e215c21ac28c62bff00213b789941b73bb51b7d08252520de1ab479cbf3059783a86c342a9ba1a78d3924dccdf8702b97711445a49b3b85c9ba3cf925d625787532cca81577080b82870cd7c1eb16003000ba65bac17605691d011480c3660c6202438078c40a02a50c8976037ccd0267863480ae08158c22317491c212637c84283ef08a840169aa01cffe21fc780280e54247662cf9e0dd8c3ec4a81529204b768bda09ab501ba0b664ec8576fb1b472ebf4adceada31ef02ebbbe621abf48a12e5ddea102f6ea1d897e901b1895ddddb3c80f319577501d2dc87ad577227905d2d3aa5fd82f7732bce673e2367379642d9983ccbb81284bf882bae309b2d735825f10ce2bb63200115685bb6cc5bc8eed6d479cbf882dec8e235b750a5da32c56f99615d2cc440d938a43797fb1050c92e9c3128c4948c12ba53af092e8d59c4a29375d48592e32c7af88338f786e1895b9a4815a4a92025ba4c72f13372ed6b11500b0b1e614b06bef9082d72988741cb502365a16a618160936d6b6a88b0945b4e63f0b1e81aaacb0aacb5a739f512349ad88406e06b3b7528b90b52da2ee55adcf837e8cda0182029792c2f88ab7b994a8568b2da8429ae0361bc33c9da1010561776cc03582b1cd4c602bd898476bbff00952d1f6f6bb79326bb4cb86c60d2c034ad60cfa622061909a02f96d318ce20e51451642f73f82c0de6ad70a54bed613158a20d2cb07fec3119068b6a814c79fec0f06a71b6b915e1fca61add1b06926cd53f8624d480b4e0d35de0f8385a5759318b6c6544a38005ad0b6ab981ca09bfd421ca5759d432b71671d9349eb0386e8ac418e03177519758a761100de74371d5d4fa3a8b00725844ed5aed2b07ae9b571237ef716cedbf26bd62446a66cc66ada4ae2076a879b8c8314df695854a246c702ebca7ad44915ebb00a381b52edcc682f7a86850077157da0daf5747342cc5e2ef8db00c08c6f75282f1abdcca941b8b9ba156b788b0d42d8c30c3ac5a19e8016f431339ed17a8506cb51ef211d05b6d3132f955f30280bb21783deafc1cfa661a58f76f8431f1752b2a35be40256c649141ad14657566e094b10075a6bf72fb1022d1edac6263ee0ce00f3763e88c0296c54e1ab4156b1032e3deab0e386e58e56f8d388697b6fda3d413da4683ab8d7dfd225adb0cf787a6562fde1334207117fd12f6aa51b77d19071b12e711a8f72d5731de813554f77bbeb2e23e097f1037aa0e71c01cf8994521cabdf22b512a370a6a9055e2318bc050ab5c1f0ea2e61bb92cbf88a0377de62039576b2bf32cc9690561b8de752deca42a410aac2c231f040d170cd8c36163778f72c025d732b01c6a78b1bf986663b905085b709cc173000237604f1306a0ae5d9bcc56e90b660b05dd5b1b43d0967415bae9c76a848235c69ca5eb913e1815bca1e4b0401b4be082bdb5c1ba1e06c654b862d322ed0ed513839710c98f0ba2a2ec39ff0093014038dc45e0a950f67e28fe462b477986f0fac6bef2ba85c3337151bce3e541182f2c5f8b2391bb50bb12b28236436d994821ca6282f7d8d22f50118e8432a521c4da60d046a6cac8002b157064772907b29a3be21983660a821abaa876ad156516dcb88e168de632e6cf3fee11b0335289100d242e9e006f3b8ac2f77cb92fe664ca5dfe6996610a6bbcc3739835752c2625438aca770bf04b71de40c500f1546ad261ece97e2e18629c0be069baad3de5c2f6a8fd3984f00798c3c68396c10665206562105040de2f8c5388cddb1b512200d056b106f0052612c0a2a51a36f64ce4292b18723c5d7110a802d3828dc5489726c4e1ec41649a7762aa1b530012b8546ec858a2102b8899ab99497800e268c80f8b897ce4a0086b02abdae575efb30cc1edb8981987d9984e8238359c6712cc0c05105db8e065bac819618692e08d41dd95cb82e59746ade8a1d76ed00d662eb38ce1771ea056ee2dbdf509ae1198c38d9f9203fc1fa22ecf199a0304e5b83504709aaf989a9fb521dcd961672936616fe199b95eeb132578c7c7dc963b26601c3e6b388b58e3105e5d9d0d878176d54a28896abad98adf38b8b0152c4f3baf3718a42cad6fff002583ca30fb71981fa8c777cf07bbcf08707f309dba17f14cdd343e6a5b4b8565752e2c7a5c57fc86d96d444dc53190dad3b3daa1ca741ba9c0029705adfa5c0ec5fc4cbce4ca2bb1cdab1ea0e357588fbc0bee8b572f21983132072e703e25a28103694d9b2be63562a0000e54059863b97480761780ccd515442581cad23fb1096b7270dd3da0edc46e0caf2f3ff3714ce1f9e6e13781de3641a96e42a9cb7f825813c04b55d0042e16f8d32d48631671e261294f3ea30559aa6adc292a94ea1c00c057a4ecb2dfce61ae33de3645cdeb0db41561f90dc1c13876db36fad48035a6b3bdca0fac620a6918db6afc2621e644faa12a9346cc40238868401035805f782400280a00e2a1d8b5b6fd22bcbd7fed424298512fd36a3072d12ff1e2f7106b1b29696b80a88f52b2f7f896bbd4537d219abc8d66b266268c3ce27656802efdca340aead4532b442299e5290cc1bedc1c959ed2b5e6a5253b8bd2857a0d129b0ea65a05b01ccc50a684b0300838041ec186d410ff007352b2785b4696bbbd42c3a5bbdd87235586a68c48b37d8bf6181dbe2c15b878b51a5ddafb635160b2e65bb9247d986fba4928814ab8a09c459eb6c35946b40e2a9aa51482a2d14ac5cd4d357bd64482eb43333000be154882f98ddcc4ae46624f7435712c6a162f72807113942e15950b1b3bebd63a4ba6325940b3979147699a6ddd7ae4958a6471b94309e6dcb6ec286af32a6913546d4600ec0186a20e001e513e903df1d97a5d50b3c92ca0552864ce77a8ad8218219cd5686ab9ce22c2e0852b616a870601e4a71694220622a95e5739a1da00c5535937250c36dd19c8c0732be15b4bdddd5a9f994cf893f0c1c3986d2b0087598d7905aa290539c3e261f18f494816f91bed30abb39f260cc0d37844816bbd0b7465a64328171e7e928650c2e1e18698568a5529420468aacbb923652d50bb15621374b7c95d9061b2fe9190fe80eef43a6ff78dfb4fc0871e909ba693ecbd3a63fb7774fc797e410fbdf6eb2813ffda0008010203013f10a8c3a05cc40ffec25d4cba495cb99472dc043c2278264598098915fd049513a15cee563291d8fd4378988603999e48211475965c6d13461954dbabd0ce253a663d564568dc59706a6a1976b9e9a398e4447a62327da3e8dcda2d4b972a2460ec1ccb6ad42804aca6ba442f12897325711fc10892186a5de632bac8a47d2e7acbf894e1362048bc256c35866ff130cc33067a1ab0971d11c32fa55f423d4b598ce1a86e1965711b62c625ae42019218e552b751ca0223a9b29f696329b89d195d2834ca498b4b820dcb714806eee2d1cc7a0258cb1ba376aa60b34b920aaf449517a5b0abcc5ad2bc4c6b10df9650a6fcca6597e63495518f0e7314bb2118be333c4a83c4495d183192b7c7acbf668febfd43f03044765df46a7343cb97e388405276fb082ad012c23d2216266e3c1acbebcf88836978203d698fe918e654b972e2501795c7371cef0c3ccf071e7ef71713d339942ee889a2cb2e1ccb0f588a592ad91f74b62ed2fc47fa44cb83d2e5f4451766abf27bcd834c44c90ec4c99ae2270e8edcc165bb8094dca5a6010b724b57065c3ce3316219e84b65ccc261f24538d48c51a8ba5c48b85d3c0fe60d0dec8e97c4e423bdc5344cf532f33fa4ca04a984dcd40944b2cfd4a8d426bcc0568dc3db444ad205107b700d48c5db20adc22d67db8851835f4998a84ba5f6189bbe60cc60e66641f3cc50a5175afcfac18b20ba552f83ddf9d4162df4557e4b9c0d4781b7ec9e2d20c194972e24a8196a2f865cf882ae24ce12a5024419a9323188c3728a133d31fb4730a43a5f41288332fc37846565f8479a6240b8fcc7725c398952121dbfbd037d0f54e9aadb156fa04fd911d508cb0462f3987314e09bfdfeea54a1121d165ee281329c921558ce177e91f3be83290228d939df9984aa897882bf17986bb1b815d5c6a0ac496c0c9abc6bf93b9594f1c3da24d1bb79889b84085c20a651c928c468ae2da6a66c31de28c3d0e21e812b61cdf3169a4bb7d35f7f6cc6da3394fb3eff00043a6ce970f33cc4cb8a3b82b6e9941b63fbda27732a00bccc3e49c2601592b80358797bc334217efcfdfdb00a8cdf31d74acb2a0e73d04be8588b148fb22b302fdca36d36778014512c51067046b26205164d3ad7aa799fa4dfadff001fbf4b9f913426d36e7a3be8ea137ff3fb3f05adea7e23f6f8ef35ff003538ea6fe9e77346bda6e4ffda0008010303013f103aac1271008202a82a563042c049a122e655372f8d782b1d47421d31dc42230600a198a9944c41634635a8ec7333396d91f34cce8755d1ede083b4806750d095339c4b0cea659562353dd45ce3de107512ba5c5c45772752a2c5be80b96ddcb3a99711b06a162d4ed71c9056254a812e5cc81de3b0341f33021b60fa0309592e6ae38c132e26e10b299108e612aa5ca89715cc23e65cdca044e262e6502a047112ee309e664b9809198204aeb705996b04bc45aa0deaa6f0b86aa1bbe232d63123d745aba660a0c1fa06d75309bf3066a52d4aa546700457004065082b6c9c9a11ec6ae51b416bed2e5ebd40c489049d2cbf4e7fec3ca2c3f2424e52580add9cb302578a3f6ed8810f7d7eee23336bd8f5fbc4d5c10a12c1df276bff00915d6ee513e2cb806b63f88f74e226226674b830cc49535d209e341f31055c1501381fb98869e9a9ab95fbf04bb5c474fdd4b8a0c32c22bd7bc0e933166c8803dd84a895d2a54ae608c1a6c7b9a7da1c669910c931e6e5bb5a6ffd4b04e250de18894437d0ad3360868d541eb0744b8e21123310cb913bf2d3f30814dcd060b2b1376ef167e1e7d663db4165dcb24ca260c91d65603c4d94f6ef0f358fcadc3aa67a6e5c00ad3b1ed31d6c986a8460a99ced52872dd466aa896ad17d05804c5e218b106b3b8743b9eb18f733c1c79f13bcbf3de0a4b65ca583d19e4407cb021af81a23444661215c1e4dfcda8d880f06fd37115baeeeef12cf5ac7037e665c1ee3ed9a20786e08aaea277559504a892a1d162845d257a231b9ca460b20e0e8d7e698b60ae30b2faa333019dcc65ce1d448d32a54b746183cbf28e1f3f88ed9d2cae796c8a665ce657c42161346704573243fdc58aff841fecae8741cc1874b77ff004ff500a0160eeffad4a950b904a8959f9f68370478121a4a35a97beb1c5986bcbcbedafccd6f61f00fe7461154208115962d9da997e965fe200506a62b08e63785c2d657db8885d9d8cfc9bf7cc32c6fc13180acaa3839f4ec42e514a7bd3f46e3356dcfcf4ae964ce2cba057d6530374ef3cfb1c4765513412984d2092e3128208b174e83443021cf45c2d5100009c8cd9f609418df418712c8d20a8c296b0402dfb6601fb7dfdfadbe5053ea4552e2b63f9198bb097ab1a6a10cee560f9fabead7f22359f5eddf10b28cfc4d4fd932054ae446b88b00b42fb916f07c12b7db7f7cc524658e2926659860b67f12b6e4e1c27a77f682539771c2537d7148657b38204c369fa8adcba7b78f78e02f30d9700d9c71d334729c3d1fb6383f9f7f6d4fb857df6f33427deebde6bf3e77ed346fedc4d21b9eb43dfda7dbfc4ff64fecfd69ea68f59a3d38fecddfd7fbe26cdff26bfea7ffd900, 'Andrew received his BTS commercial in 1974 and a Ph.D. in international marketing from the University of Dallas in 1981.  He is fluent in French and Italian and reads German.  He joined the company as a sales representative, was promoted to sales manager in January 1992 and to vice president of sales in March 1993.  Andrew is a member of the Sales Management Roundtable, the Seattle Chamber of Commerce, and the Pacific Rim Importers Association.', NULL, 'http://accweb/emmployees/fuller.bmp', 2254.49),
(3, 'Leverling', 'Janet', 'Sales Representative', 'Ms.', '1963-08-30 00:00:00', '1992-04-01 00:00:00', '722 Moss Bay Blvd.', 'Kirkland', 'WA', '98033', 'USA', '(206) 555-3412', '3355', 0xffd8ffe000104a46494600010200006400640000ffec00114475636b79000100040000004b0000ffee002641646f62650064c0000000010300150403060a0d00000ce90000126900001c8d00002c3cffdb00840003020202020203020203050303030505040303040506050505050506080607070707060808090a0a0a09080c0c0c0c0c0c0e0e0e0e0e10101010101010101010010304040606060c08080c120e0c0e1214101010101411101010101011111010101010101110101010101010101010101010101010101010101010101010101010ffc200110800aa00a003011100021101031101ffc400cf00000202030101010000000000000000000506040702030801000901000301010101000000000000000000000203040100050610000104010303030402020203000000000100020304111012052021133114063022322341331507423424253511000103020306040503020700000000000100110221033141121051612213042071813291b1425223723314c105a1628253732415120100000000000000000000000000000080130100020202020104030101010100000001001121311041516171208191a1f0b1c1d1e1f130ffda000c03010002110311000001e650a36764c06d8fe5d891e948bb5cccb2be40318a678c6afcee3e8691319964a94bc6292a2eb2b22c94d7b3e6eaf521e35f99f7caa5829e97482b52be51b428c4ed609692c0cc87a3ef6b31769dacd6253193292f5f61ab7983efa32b07d0f8dc37e0fb4552c30a2db8505cb1b42a52f5b62acd299a4c86ead852e98f5b6b5652b968248334953229849c9b27dcf2f8c7ccf4c80e06a547e474f5b463d53c34ba5ec4a74ae2179861646dcb2af5b2db351bd3438ea659dccaae78f561e465538960da1361f9758d6f4760314b4492e3cb7ca12c1792cf8c31640c582d9ab56cb5720d927738ccd746a3966bcdf862284be79b5905b0552ad5b8e733a6194b4398c309333cec92785aa9d02b8e975f12532caf3ebb47d6f378ab9c650719836079b6473c967d3c4f35ec2a67cb318d14b525a3d80a1648633763d15b671159da48329abe6c7e8d72e489593e65b966c3a95355c2fd08b568b04d7949dee004298a57aa69c402b856c0b3ed695ed87d9ca5580ba10e10d76079f5cae3dac1cf87635615e9918c6292b70dc04d9d16d8b26a4525b090ecf727ad9664cce5ff00564f4f1aa2a1e61b088b0bf6ccecfb7b36068d2debd38de2ce427ab5a9cbadde8af84378ec859baa1dcfdea4733349298f9e7dadca713dddfbd23b37764660e43d3da5625d30399bee6d40d8d0795380f5e6b9c8fe7af6602c0ddc24fbe7daf48710dc9da723bb5e88e20923c59c4e164f0d0e9059cd6cf381704e5b37091b59535e84c4c0e4036c7f36e7002265d2f4fd1d1443f68416acd4ef61a15094666c4f2cd1e6cb591d9e816c07399b4d7a12e7c45277d9505cc19930fb79f6427ee8c360e9ec23aa69a420ccf50aa4a5df24a0e39351b849852da37d48b2ec6592ab1a0bce764b21d9bc3374ab07c3cdd9d20c19aa4c595b43550ad92e5a8da26a65e7398ef2d7ad19351cf59593e7fa0caa6cc20d6cc06f548e617ca628b4b12b63fcf8e9ce7ff43cd9cb64a0d6e92b796298525c8be92082d84d4c2cb37499e5859b8b333c8e5ba78a7eb0d601fa22a2992a83409a184d44d49a3a6fdaf1881f7e6e4d59d9e8393ba706eedcb4de0713e82328251662c0d9aa60dc5a6cd52b024669641b08ed8063d0de9f9bb737f3ec28170dc692f9a3d2c78d985d8caeb85ea8f20ce6941e26e551b54598eb04ce21a36efa10fd1d77b7a3e7fddd44dcbe56f0fd79ca74a12983bbf86ce4d85718b9abd87c24a715b87c191df1310ace3d2e5eac0c4b3710df7b913d99398bc3f56b496cfb3a6014e1eb126b5b51429be633c591887cc90066b81b3d5f232bfce747036a8b3cd9a86d7bed4759f9b6731f9be9e3c3e76eee1b3a3bdfe2ad15e9771d0e7b91a0603267138310c5f45f34ee587c0b1de2923fffda00080101000105029a1f13dad9a550cbe0969f89ece5608eb4c571eddd0455cc723f0d4f664b5b85505792a569bc22f71beea18ff59e326646abc404f1cc72dfb816a9c47e6899baad6ab24d25b8e78d59b1e52d05aaacc589b683d46d254f078c78b706d695f2d37d76ba2195ced0f6cf864c58e2ee7ec8ec7236d70f61cf8dc1484678f0edd5ec6d335b6dc964e3dfbb077c71e1f49b0f8a3398ec44e78844c2415e4061e3ff0064032add26dea2237453c64b154bde3878ce4e9c2fa5620b90d1aec94d890d30d9a42e8982cbee80d635c152aa006b22628034b1cc1891a18e8ac485adce60ec6b771f2baa697314e46b5547c7e40e8f670b5c57a958c504b2073d363c17536edf0c884787c151b2c30c2a18d3e2738378f90363a333178f2638dc1556aff6143815b0d34fc72ae319fb2ac570bf8d81b665bbff0082584c8ea0e9cd699ec736518746c78315634694772bb83e6cb2be0aed8da133628a6acc5fec12c938e8d8f55f0c938973bdc5b9bc3057326fb704d343041b4d36bdb0e094c685d97bf7cd01ad048a28a6af2f1f75ce4c76e576dfb763ad5fb0e8aa9279fa95d9c0d581ee651e3df2be3a4d0d655b855531d5866e49ce65198b8572eb91c51b6474a0b071fba717d96a9bdb6cc6faf2799b033eea916e1c8323648fb6c61ab7ebcabe4fc8b1f541dc219eeb4f19cdbdb3cf7990af3ee6bbb9e1228dc8feb92be49f182aad6f1d8e42ac77626f13144cab56480c0def43f3e6a23e5bb50ccd6f1b1f235b9fe39d4ed46c3108e6919251f6efb9fe2e3b223dce326d78f8dedf23c465d5984a6c4321abc0d2bda34a7d7daa2876aaa763f91e3cd81fe2feee36896af9e43b39085f2791a0cae14b69a13580c8cefb0d8fdc1e28ba09239dd22aad1b400b6a6351ecb192a2f56333567ae09af96af9c4ff00fb390b18daac129b7e4127163f4d46b8cc47b63472e7546f7ac3ec6b53588353c868f365441ce514472c758f62276ca00edf26b3eeb9acb276c35cc2bcc18b8c7dd13d6dad5636b5bc737eea91f6add83534a2f5392e550460c9f21abe78ed922972e6375394abd71b4b8ddce91d1eccb442607c0d79e3f96ad03191446273e091b459854dbf647d834adfa61aa46b57818e5446c919146d420d937ceae78e80ecd688deb63230031d2c3518f534fe28ebd8980a0e05b4cfdad298b706a75d66f63c60be151cb5d44035f0cd04820904b2fca2ff00bce69ecc2aed556b0962af59c66a3c55cb6a4eeab863d951c62752983db19c86bb0a5765a78d864732b069650748a7a3ca4669719c94cfe538dbf0a16cf17c5ee73dd1bb2a2dcd754739ca950e43dbd6a76dcd89997c7b4a8e35017c2ea771b2074a181923256e53896a6f21e2439ded579874c9cfdecf92f2edb92411f9088bbc7198d5400b782a71c3c536888dcfdcc7d6048631358865a7e192436edf2ff1c6314338947e4bdab1e9b42b954b8e8d87e51cc36b27ec95d035c1f0b7f77b0924b1c2f191c96a3608a35f29e31f4ecd63f6b0a6bb09a415c55dff001bc855e5e3e426f9754771b6e2e6192265d95a196e07a9797878dab34b2db9a183726420ae3284a6cde8e07719f13fd7674f92fc7d9cbf1203a27325c213a6ca84bdf8cb4f88fca9cdb3c2d7a10b6b46ff0013ad71e18f8eb49e634ea4828707348e6f0cdaeeab5d80d5aec9594b86af59da547647cf7843c4f2bbd7930596004c9daa84a246ce7c943839df19b11e0d6731e1f09ad2464055a7198276ced81999ab478509fb20792540bfda1ffc81a05fc7c7bfe83bfe9b3f2b1f933f2e57fb19eb1fe757fbe0fefabe83f083fb17ffda000801020001050207428a61ce8e59e83eba14e1a35c9aed02fe494101a158d01d4a08a288d22777074722b1841da14e58d0acf41d47651b938a1dd6341a38f5040a1a1d6172282cacea4f7eb6e851d1ad4e29bdf477a841140e4e35cace8dd4a2b3d8a6a251e80d59289ca235002ca05128bb4da8f741a9c3509c135a8b5108e8100b6a1a602c698d24e8283cadeb3a84d722567577449f4422346e874ce9fc27fd3210d4e8515ea9c8fd00bbe33a0d32b0884504e47a8ac1d013d5958d5df4b0b09bd64277d2ce8342b3a0194114511d19e80163086a515b4e034f4e3e8808e87408687a189c3ab1d0135bdf53d0d3ddceef858d469959595ff18fd747b7b1e92b2b3ae74f55b535ab6ada06a53dbdf4c68ed0a1d31bb280d0a3acbd327d06faeaed3fffda00080103000105023eba04ed02c7511a0d084e1d18451d0759d06af6a3a374cac6810ea28a1a94f0804753a01a0ea3a0d641a1d31a8f41d65390434739008f6d074eeea28e834c774741d04ac0432103af72b09c1041ab2b3a6e4352822f41e81e82e5b938e992b2b0b3a335c2c23185e3406a51620d58d47433eab90d30b0bf94dfaaed06a34087d13abbd563508a0875e5047476bfc740fa59d1fd4504d43e9b8f7286a4a3a040f4610585b116e84e99d022513d20f482b7a2ed09e92b3a0e91dc74e7a49eda37a4a67a396ed309dae34fe5fe9a34a1d211f4d30b0b088c2dc89595bba1875caca6f41e8919859d46b1a1a951fd077a74ff00ffda0008010202063f025c7fffda0008010302063f025c7fffda0008010101063f02d3f0437453fa1405dc3175a625f554792a2d18be28db3f1434d689f65eede679a55085938160ba96fdf152071342b4e12c7cd0bd019f81ed971bcd54cc4556afa23ee2859bb3a8c4221b0a45d542d0a3022aa8848e69c289074c625ca8f577b03c767f2ad8e4b9eefd4b1a1c11b130dab092fc5c911f52367b893dd863b394ad2fe4ae7651b71d4f81fa934a2626d8d35c68874e40bd46498e23155f3a29dcfaa2c07075a5bd5510860e86ecf7a8dcbb3274d630c03ec9d890c453cd4a377e82c57b71cc2d2d4529cf5199c5756d554a271c968b742d8aea9ab627342ee0feee2559843100bfa9528c8734b097152b97a88f49f9b107040e1c363851006afb934836edb323d9786b1fd5073928ee47a5115cc21119d4ad5193f05232e6d59adca3187b407f82e7a6e4e56a94d8bd10d9a638a6bb539268e07135f07677ff00545ffc555319e9211b40d0ad026d018230ba58b72ae94ea7108c94b561f25d3d3577d4ab9aa1a4b250ef2f563731e1b93bb79a1d2cf13c3c155cd303d576b76d9d43a988fd2b528cc9f341b351e80d53392d55a6e5d4b87546157cd01bd4ad98b415539545fc79fb464bede210793c4669a418ece29a24843ab7356f0ae4c48b894181de889fa21297b1d42564e9905afabcd1c02bbde30990d18472aa9c3ee5184aad8142118b11845737b58b79ecd31c9f5cf31c0a84af76add5ac5e4a30bd0959990e1f9a2573069663632ae489e58c47d72a2fc5dc5a9cff00db7627c8aed2c5bf6dcfca7d2884edad16c28f6fdc0e0eb509638451d03483f0d9ac87e6016ab726d07956a3bca9040e03090de0a8dabb767f8cfe206a19486bf78d273a62b4996b8fd273d8014400fbd59976f01aed93ab555d0b776de9ee4cc56dc348110bb6edee5d33780acb242dc6ab560062b54cf33b843bad4cb98ac18e6a7ab064d014dfe1c130d80aea471215394a79d5976d303e83f35f25d329c162ba24bc4afc21c6e5a6106e2e9e258e68038ef43c6144ad59a65db5a1942bea56ac19466fea8089a47340bb92874e8575226bb82ae6821e1a6ca29180736b988e09c2757aec70b67447fd2b13196ec96bd78e49e4b576f6dc15a89d2460b4632963b86c1e1647a9923dbf6f133d3ee9014084e271a85d2337933ca1c38ad2af775334b7127d51948d655280346c148135fa507c96900a3749603175f8f11f02821b68abb3075cb003c946243f9a3a2222f52c8e9c32567b007f78ea9f9453ad71f8280897a3955f6a68db60335a584dd7b0086e6410f0697ae4154b2f7a6d485c320c9a33aee4e15eabc2d7e387a2a2a2d598c90308ea03dca57213d11ca280182dc5a9b93e4715ca76b2ea4873fdcab87043a577d0a1a6d890cd90d51e9c379c94bf89dc72c702d52aef7978f3423cbc667046e48f348b9f54c572ad51c7308f71dbc5c4f15a6d920e65480c40788dfbd011869d9aa059693492d44b04f12e99516e4c4a68a79619bafe2d8fd8b269fe696fd9a405820dee56a0d88aa7b786e5a5aa9f6d15ded3bb846e3c1c0907c15cbffdb23d2bb025ed8f6c82c34c852513883b2a9884f15ff9764d59ef91f24f804236d366a31b8744542d439b7951b71c23b2cde22930cfe5e1b3dde513cedf69c54ae41c44fb5f12a1fdcbb68f25da5f03e69ac8333c16bbd64c63bc174e0a977174e1fb71ce454efdcacee93291f355382ffadea84e6b96dbcc0c5446db96e03f2439ad1e21184a863423c0c871f6a95350c7e0a13b510c4513afe4f6d74c6d4fe9fb24b5f752eafdb2cbe0ba91801700c061244e00e498055155d2960546e5aa3576e8923dd5a1f83bae61c2598db54eea372381460735fc1bc790fec9dc7727f8a976f783c67452b172ad9ef0a898169648c6439c26408d841db63fe4fe9e1879cbe7b2d7eb1f353f5d967f47f543647c5fffda0008010103013f214cab12e2bea3a7aa9bc1eff17286becd0595152cb53db2333876a534e9996c0afb19683f27cb19fca590653a8bb4ba6003c567b313a40ec3c9021b051ee08d6adde919b5e4f655c4d9d788b446b99a58725afe6741143f1319528ae7ed05c483a37ad7a8d9f02dc9fb546ab674cb0c6dd0c4a8b1cb9fdc5afb6331549e21054564af04276d42a38fb8353a900e8fe04167c0a59c32c27434f544272d4f943d983ec7982b18b21d113a585b79713ba345c15327fc84c104ab3a6fd4d52a5bb471fac5f223b28502d944a43204cab67f52b287b199997346082dc166e0959896aab46a2aa87dc3e65e83a159f53a98927f08c2dc947930928b3f4adc55b6eac5436b4d37d3338a6af28b1b5bfa809ee8f0bf13256a1fd46242d8af5aa59be1b4dc3eb4c05f6780f30f46d432d1f12b65b80502cf981b72c5c64c08ccb3d36bca4144ad3ee03d46f1db8fda16e8b58f9cc3fdcac75ba9544eef7f79990e561092e2dad4babcc42a5774d35886da5b1e3b7ee6ef459cfda08164d4a052d9a4ab987ca28547fb183e607c4edbfbcc60143b41dcbdb515c9a8805c3a4dabf8450bbd622b9fa0798d9467bf646c83651cc353dbb868354b3c91827ba2507ba8578ade26851fb44856e0691ee6cd1668faedff00d255157d934d370f0c533f5081b63b667de20613a8270287255a88aea47ad8e108029457c442d86a9f963411390ef1e9009a45358c4bf98018cbb76acb38d56a6344a978d7443b5033f5a86696e6ed4cc133d10da9b189b9563e228b82945f40844abf623727818978883ac6d446c81afc278192550dd33aa361911810f0132b2c26f5a4f4ee0ff4f980751ca02fbb07ee5433a14c316c3a8cd453206435f27516430f843bb304ce590e9baceccc1d5df6263a4a4515193e55885136a948363c297542db312e005a7d603f32fdfe25a050dd1140e5f823a5dae0ab833dca9037a872698c8a451f5b6625cd947c4bbef47e5ccf44bc4130cdd43191f335650a57eec9338df16b697a9ec3c0a07865462fc6465897dab10cbdcb037d6cea62c78218ad805acc60b4414bd626e8fa990ae22fd4b4c15bbc31b0e82b1a9d81428464a257812a25b1af33004432daf728035056dc3aaa83b25ce883dd43850db3d070f86c7ce3531bb7c71cb6d96a640af37c46736d42dc572b3d920368377a49736538bd62b3bf71eb89fe4cc276b6f1506cbfebf106de770cf0f4c148c9ea11081db4a5a03be52f6b3831244e8b3bb9880169f0bc416d9129e99f297892bd9ebb97792c7c91a7b2b7ef1adf72d0225c49411c2f072e9b8f31ac91e477a84fba1e196b6c09bfe2e3f093dd030e03225f53f3dcb300b875a99aefc87a84964566bd957e67f0fda6721d329304209836a22badea584cebfb037f698e6640c4cfbc5c87fde7e735f2cabd06fe9fb990a453cab72ca582f6dba1ee28663ba8542e93e2282c93e173032500990ef799797967f03d4c697b3c22f19cb88a727e513667c8cc10203d06584478416b0b52b23c4c613547dafdc2116650cf70e4a03eec2fe8289803daca024b5e708cc7d7c1a9f798e9e1067f1bd4b0e0e431876bb228a7f2678c7e330d6aabe4a94f073637fd4522c2c5859d30ff00c95e307fddfdc0c5e25851b42d8dbcdcb737357e92988b66e23a85b294a9272caa53f9d0875b21f0044f2235ca64ec4a534f2567ee590be0ff0092d21259ba62e1bed2e9dbf697e0a8a6aaefe267590bf42846fe90fe556c53fb253aebfe4a3f5206238bf195f2b57f50324b035e0fc42382ecb5fee1041161fa843e127bb2165339f24a413706a8b64dadedcc60772e65b2696b4a81d722dd777c3c4d11acc64e74dce4f994eb3e82668b327b8be8337ee8ade83cc15e70aa62958e15dc0ec50ab5b3bf98d0daa2367274d771e2a4f48363310a6e1c322038a1bc1b6a75ff0070d31e02055bdfc4acef62e67873753005c7c30e0a000e2ba36d5a2e0c030da83b71420de30d9c10515180d5255c408faed35fe653a8f43fd9560364a9e50cc10c3f3e61d051ed3a3fec43df720ae6d506d529bb7665ace1cf1c536f3ae79a1093fab7de187695749867932d771fa6322db6a7bcf966f1b658c8295756187a8169f12869ae996a8f4d04f10787a8635e617aff004980f7515ffa4b3e5fbef57a9ba376ca3d43b265f6860a16e88365f00bd937945cd7f11872984d4347d8df73a70129fbc5bd656da3fa245c6aea2888edfcf3d93064d3a2699b2e0ea1b1267de1a003f332421506ab50037c8f6cf0eef1df2ff19e5347c3fef21469f9fa311fdbff0027f6cfea9ab93fffda0008010203013f21b2344164b9a8c38da664330e1315983c32458d2e78b5458a08c732a38331632c8b2e5b80831c40135b88e03b831067516226e6d0c721a84ac704b951c5d288629a8b457d15be2f822e05186245e2b24c39465f0978b837c8c5cb18b1d712a313b632916e6c046121c845197c95c4dca5440f06fc1199ae1001cc17011f197cab8286169902659923866a65324c329e4541c37867cc60d4b97e381132b11831d90b1b46184c201c3a473988544d4cd4618e37f412e5cbe1925f2d63838dcd6516a6513eba8475c76866e198ea155369afff0090a83873e358591b460391c5f49c0aa66e1b83270dcb4661172db99228f347d198198cb03e862c0b810461cd40e2b8a54370e2114691d4a5c86fe80e18624cc463036f0f0a412c46bc31631fa24a594c2e5dcaa2a971718128408e5cb9708b297e9ae06231e174bc257d3a6d2cb4daa5e54be6c3e5186a5f3bf82a54a81c0d25b8b8c2dc3a455cb980aa86a7d0aa2a571ae0418b8b878b838bb83c0cc3cf4fa09b4ef823f4e467734e3fffda0008010303013f2185306a650571acda32a540c4bc54c908f108730f0ee06216678459e43c24a94c2a0e1661c62823c09462f810c23c54ae1b701ae05caf89d4b817f43082572c4823be55c66e0b95caa0810254ae520fa1a4099a5637358c60cd170106e3c547973c3a9e485dcc881f4f04520497f0b516079cacc4d782c463598e13321ae4b8ae9740e1e10b347216843150701182110a4a211823b30663a7030972f3023cc3e8a95f4544822867109709b80be07ff8f7c54de38e0dcea5ae6b88fa525734b2570a1a48520cb7eb23858444588478547054c454519589be26bea65c5845c788ea6e30dca8b1145348f2b2f9ae6c815c020e653c02e61c4fd20252111cca88c20df01ba813b840e2dfa44949862cbe19e09d4c98a97982072ac193863c318df04657c95c3e8c898522acca32f8612a04f49550bfa356f0b97c3c45a9552a60c32ccac4ca1c3738b61c12f38be478841cd3c8e2a6c1ae071b704dbe9348477c1c1c6c8ee75c1c7fffda000c0301000211031100001088c3e23a635350dca8718253e5a7675f226830cdc429ef43f459c6bb434fc8fe36aee2f7f9b20ecb31985115568fff00043a2b68971078534b96ebb434ea9153af350be4ae3efb1780bf621b0b9601648464e2dd15586ad88b6f41e6e6c2ee88e5f8333ed2535b640b497f922613d7d5d6c8dd2ac5700f9b3aab37131879e753a4172c7c3f30622c294abdc5014d4a47383498b91951f17c77dc6062e6f294675e4c8575426cffda0008010103013f10aa2b7714ed29fb92b18aac14251a3d45a9653414b0bd67a84261e205035e0cb37ea4e0a181f3333b464e7c1682dc8b59966684012fb33dd454d8e5b10b04c47a61a7eb11fb86165290c1410e2c4f531f11016a819f114c5418b442a52ee221b08b10629217b3212cd499d25c64dce38159bf107d41acbb1f706fd1048285d441e795ef2baf52962d4ad36154b7717601bd2d4af658f4692ee55a9b1b40175880b0f479dc4973542df3de48ed7684eda8672575168ba00b5380ec8fc6e200042a96227de6cf86e60c2fd987b1cbb1223b60acbc340665af2aec193f06165e5961b47d50a36347b201b6e5ba206ab50c120069b0db6b88fc2179047cea3b7718c63c08510b896d87235ace189b368bb1147d24c2ba0dd01b6229194caf37a1e5d0b8d305cbb06c0365d95bdc5abf1b0a4c089e6154f0c52d46ff00528edc1105517cb4238015300d869f0cb2add1d37de7dc4017802c5a4156ea5bb523244f55618f3307cec07a556aae99480e31710428bf347bc42c97c1322e3fd4eb6bb73ac98c8c4ab8daac7866fe220bbc4d16c663bfb5114874ca11124ba57018716cc04f63b08a82fe3171611112c4c89827a635b151ea72d790ba8a2078e80893e2e554b760d34efd8371f5aaa0ab5ab29e88f52a1e12d323a3b2b0ce924065e0c6e1f584b7d67b300fc146240f200732f38b369419ae8f1db2d9d555c16dbb7f44a73540ad303d0fdc0deaa5b2fa267f0cdda0ad6627168c222e3344486d6dbe4a2e3dc49b9047377d9e61e40bb0b2d5e33031c8565997923905cf621791b58a6a51431155daf1a9990b6bb1f98c89807903c37922971681b4c9dd4274c7c4c3c8aa748a1824d669c1cb57208221a1581014990adcced2bb80701150505bd7a330ef97665201fa65f9d87cff00f971058289c5b359845605bcd7675b232f463bd60fea55a58e9576abf441a7191115c37f38fb4c659b58082bb762d10daf035997b58ea46fa1f388ec2e5aac382ff70155ce0684baf564b9c8a1bf6a9f08c358aa36f8994c4c5cb6543cff005023ba0cf755014263b275417e26385e455042a817182b51354700b02eb57501668f03d89bfdc6923707678a96ab2a4c6594b86cc6a059464fb451436856b0a0a6be634011d095903a1ffd8e03b8e70847f10eb15dd8a03ddd7da39c5e41b3aa95483aa13fec2d2159a37f88984b632006b04f3710644055abd8367ea38a311ad35ec018acccca82cd5b061fbdc397bc45d472ee5add7f72d5c1e9ed553fa853b4c445d74ab2c6662a8581f4b12b5c3e0019a3cca4c058d96a275ee161041cd9559f7063264c6052bf6982b5c0d4b1e143f700a451c156783baeea1b36db7a3b7da0c022406d483d2bf71f8b70aa4e9d3549918f2c29d6657f7b8495c6cc8b553e61c0c0a57b4b90e961a3519aa4487a45cdf6a8cdd8f73a2471feff00933a6eacadf4ff00b0c8016e6a6dea2b4242f0f830c482694ab06ca8c5ee6450b775dafb9fc4c43d0d5bbd247d9842ddf6371d21076b68d52427442daf6b1ff6325a629818ac96d5cb4a51b18508d0eb153dc40a564d6e40146be5845cd400c36d7b62c510dbcc06bfa63341f3cf22a8537e9a6589ec951bce40039b26633a41e3863b194dcb12ae9600bc162630cc008d556253f14441aed75a9b445b312bd220fd5494aa3495534a303c72d921746882f472add0061f79dc11a539ee05766130995b2110a0c1586bf33212c8ed1a31aee6593c01e8c1a23f586440e71fa8d740a02dd0c7bce21b522b959908e0ad1510d0b4e35dc2ec578bc7ea6943b142c758fcc255d7565d7e6681fdab328abf6d27fd80009689845df89fd2fc0070c854121a3481013085cc9882c8de29c35d46c1b6d16b4d9a2ae0b3d6b430ff00f216181bbd15083ecd2f67f50d3112c765f794875616ca341f91733e6b8351a6a8b814ad451b9669a02bfc875966803863025470d9796ea301f82635463b9a56977865851502f4bf32810e0843dd998f2ca0cfe630a41eb65cd1d067e48646aca8f57ea0086f0b2bcaa0105d2e89b456a8dd8e07ef1c3d2e7b4a0b26e0aadd31d3f10a9b36c59dab456a112b43f95114e2fb3188e8254956fb8cc25dee395cebc4b652e97d0ffe4a06a2d835289da5345dc72ab0a645436f06638f8a3ef399781974cc7e06b4a34feccab581545b8dddf52e9b5ae9973577d329111685d59eb32c209744b6614409c45063a796eee20000828b064cd0cd436e145d7ee12f1548bf609554f3f8c1fe457b77d432932260ede5adf7500b585985eccfda02e92d19b34d6df0623d404020e49936412aaf20a2978731417a1b1e1ecfbc05cda5ac843f7442eb07fb24fe589b14d59a3385ea1d4072e29d62f0cb95033b9a895a332f14e9a99c801850466b26a17d946ca16d498f232ad3c9f771fd4b1bb6bfa4558c57fac10ce2155d8f72887ec4b26ad66013a406bc4a2321b09f904c3c12a19f922a8082d35ab465833a00ead567e7505787de6347ddfea6149d1f13b0d019d3f7992a0b762e4d4cd7d81ab5fb4c2ead65ab9d7b80985797382acce1229ad1db8e1c8ab5dc2d6c4f6237fec03d21f8a1072c425fea08fccb29fae0a420eb0b72c97058255c1bb1e8ff004219886171fca54be5e185a754598bc0502d42d0b9782fd1bedff26aa9e1b28d33e5b0014bf32f2c80f7446250092c83c7717564c174cec803f55b6ac5be26c5e52f16d5e3ed2fbec5ba154a74b50e8611e50ecf642f868c9d500d9d4139dc3c2f3006658fc92bd8857b43cf93d426694d8fb19d7c4080a968dc1ed5b08491b41456118f3306fe2e600569af100b8f0c29af74097522256ee87b465c2aa76a27dd60a35a2ad1351694f2ea5c02b9a50e05ee61f6255d2c337695800e2e9f30850ca244ab7e5afda00036a0aabf740026b51e360b3b0749d93df80f23f12b0836a83e618d01689712147dc8f1acf0c520dd3592cdd623217d5859af89869c12a16e6ebef1c5e8a8814b55d608aaf12ad8c52e69afca3d7a918fcc068dcc4a942a3aea1ca539e834cc2b2adca65fcb702b3b6bdcd2dc68a28e7d622b8af0fbd4a0d660bfd21b4d681a4f848245664060a0e4a3884d00cd261a51601f315810ba5501e4488b8d93b22e528496b35d9833ea61ff00382afeeb7d412fc01506f0f699cb544a4dd6206bbc76cb40dea8796565969440ea9ccc007a3dabdb88b397692d13c3ea7db842870c0543246b00f8661d2bff00b0aa3282373519bf0e8351ee9b3d91b9a9153d31d5ec25e19c6f2d8eacb5513d79dc3ee8a3f31f0e2f1516a280ef188156d49b51f1571ba9814a65337876e888b8896ab16fa3af5052aa58b2dcaeeb1b39f1d9082b0b6cd97dac494d51a262aecb752974763c5b747e79105b06695db3a546898942ba1f848d458aa30a89068f89d3b1f9352975c9400d4a2caa86b724c94c2a67151db1ad4b1b1aadc7a83a20a57b04627a9f2c36d82eece58d7880eac017668346f64d53510d5810c1ed897b989eaab0a5cd6196cd7f506959460725545842f6374d63f12c01414abbcd308846353764a7dca09b04ff00d5691dacea08118202fea518446f29788c8adc48d875668112ba8b9e8b4b2a2f18b6c97c12d6063dfcc522c2c0d14cc5172b045d2634693c9178b969812c7e4cfa6553e113687fc9a60697563af9f13fa9a23b2f500054b8fb27f901abc8d3c55ad452de8afc11f1baa4d74c753fad3f5b1a46e9fee76e357f0be38e1fb9fea7f13dcfe6fb4fd89fe1fe4fe27b4fec7f735ff1d4fd69bfe5ff0078ffda0008010203013f10a917de98e9622c1e21aa98d888b2773b8a8a8b041ea6378557c1f28d0e5dcde4b9dddca00ea1fbe6b93d445b96172d65e254e009015984ea24e1ba542ce0361a81552fdcaee5a0dc4b0d998c324b32ea684c0751a58958a24038373c9b8adaea653a4d08bd70aae22d135095b1ab853756235ea65a225b8acbc5b2a1a6e225bc070751aee25db10943051488a546d0579dc1ea6918a54b63124e94ac541a2b8ed8b999c2e84077280a889743706a502a037200fa894a8060af8c7956e2ad4a4a47c3923112e950e615200a929e772c99dbb85054c35c28aa0bdcd469826a5cbd53645c5348c2983a4135c5a8a349a81d0dee561b842484b962a312b060bdba22611c4a75329462c55e07b5f13d46db1ea6a39dc1573c0cd10b65c58961e7faf89482d91368097297509719b6e2b72c6ee191a8ad0c90c80b9286a5e351968b72e398aa048de29e2c5b8ed983d401495b08dca6509f71366e62a95fd01cd26304f8e310163d42ed2854bad1691182430a653e95f0b504ea246cd3a81da75055605f50f1a88ea51de65dc46ddca3856f873c08e26da8d29366c1a9aa4aa9e08cdb690adb1c48099e270fa0a85f73e52fb3c097894270a8532d5b6249ee97bc463bcca9987d11b289508096562baca615ee7ba5ea816d1316e0a891802310c4ae254a9d84a3b986e2de208cb7331c0ad403b846e520b2620545c12e777c344a8d29815c28f00a62b944c592ad98613c2815288c3c14d4b975e38a870262b502256b31b50634cc1f515bc3dc833189332aba40c6c4a3469d4a7788a34c511ab44b095c520595dc3319e792364ca32cb024b912d8c11ccbb80aa494982a28ab8fe498e8343c59fb84e06264bae5545c34f0268dc0854b46586cdcc0100704d710c04e74fba3cedf531e757f934e2f27ffda0008010303013f10302cbd728330dcea5da3078407514b72d0af29a38cd82d180886aa75a256e11bcd8371bd102346334dc062ea1b3d4a65e2d2c33b80cd45215e3b8b7d54d818fb8421660d77065416a3869992e0547ea0809c5e21749bd3c2c25c33431b180ee31c4bddcb964f5804ed619a967042ee36c198fc172d18ee095442f2e8c319d99521422701768b088da03b8512a34720c4c3710ed886481326668458187944ef34b86a51a975c7972959c2b8b994d202941b9772a6fa47139dff00d866a0c547328ee18c4d2e3378c46da512b5b1ac622f6b8700596abea3815894a630c30f280cb688960dd4352f3316eea0eb08db086e2c5e600e353b48543cc71a86b0818bb8954c2630690335c17ca5f533350f58aaa69046bae2c4ac5695954511aee32ddc0ef2edc43151c04a95298a60086624a171c0dea509ea3adc16821b9b92f4ce8105472ab8a812b90835244449522205b732713922def9cc3e80caa5046a517770a4a9724ea2da89de19316b13183888f0b8638dea80c338255cb6619dcab72965b8180512994b20d41b465cb971cc44431b6711854c63cca16261d92a054a3e90a752aa45259328c38199aae308bc6055cc8dc2c966789d086b50d2d84708961425592f2a3e5cee28cdc134c0b718a8c4cc4b2dcf211a50d46a590766e548f49f8f116364d0662532a054ed27be1b84a1b972ba8600813a9ab46ab71454361be0a254313133a940372b35124ca24c21dc01fa81e21278dc7b392571cb95288601b1b815fca3a1982ecae083ee378772aef335b3bb0e9cefe2852578c353594465342218ac2cf79286c2e6b164163d5915bc3a98ac8c553612c94959482cacc6b744712c964630d544a531672d37cb187ea2fbb876e2781cfd2fbf11c3638fffd900, 'Janet has a BS degree in chemistry from Boston College (1984).  She has also completed a certificate program in food retailing management.  Janet was hired as a sales associate in 1991 and promoted to sales representative in February 1992.', 2, 'http://accweb/emmployees/leverling.bmp', 3119.15);
INSERT INTO `employees` (`EmployeeID`, `LastName`, `FirstName`, `Title`, `TitleOfCourtesy`, `BirthDate`, `HireDate`, `Address`, `City`, `Region`, `PostalCode`, `Country`, `HomePhone`, `Extension`, `Photo`, `Notes`, `ReportsTo`, `PhotoPath`, `Salary`) VALUES
(4, 'Peacock', 'Margaret', 'Sales Representative', 'Mrs.', '1937-09-19 00:00:00', '1993-05-03 00:00:00', '4110 Old Redmond Rd.', 'Redmond', 'WA', '98052', 'USA', '(206) 555-8122', '5176', 0xffd8ffe000104a46494600010200006400640000ffec00114475636b79000100040000004a0000ffee002641646f62650064c0000000010300150403060a0d00000d42000013c000001ec400002f56ffdb008400030202020302030303030503030305060403030406070505060505070807070707070708080a0a0b0a0a080c0c0c0c0c0c0e0e0e0e0e11111111111111111111010404040706070d08080d120e0c0e1214111111111411111111111111111111111111111111111111111111111111111111111111111111111111111111111111ffc200110800aa00a003011100021101031101ffc400e40000020203010101000000000000000000040605070003080102090100020301010100000000000000000000020300010405060710000104010304010302060203000000000100020304111012052021130631302214321542233324340743351636171100010301050406070507050000000000010011020321314112041051221320617181324291a15272231405f0b1c1d16230e1823343532492c2e2738312000104020301000000000000000000002120405011000110708031130100020201040104030101010000000001001121314110516171812091a1b1f0c1d130e1f1ffda000c03010002110311000001a1ab17d49b2a8e19d0c2fe8873c1a13acb24c9324c9592f5d56b908bbc91680298664c35f3e2584c9baa7d84eb86e87e266c9012a9103c9324c932564bc9324c9324ac2f3afeac9cefcf6c8c8448cd2fa1f4b770b8a60fb2a752cfb93e6ebdabf65e499264992649e495aede7f3772ca52aee86b1ff492d2dd1086b4ea411526147f443a1ab224de061a8c8966dd7b7324c90225f2062cb3f2fa3373d3698a195eb40473c2c662f62ccc3ad353e0abe0aa45647954f043aebd93eae65ce36c38588e5afb1cb79b64029bb98b0637566d360ebcba641849333e8af14f746e5b25d9dbda0685ca0d4b6957a538d7161fb92e1e85977a97323866449e774da05b825e014789832c69083cee1a3132b55352db20cd6bcf85389f260f6474d11d2ba096251cad32e8d9b94c86532469995345cd120707e8d0e1a72bd314e76a99d48f4a705e7e7955242aec466e866366f27434a1d53d822eac768f2bb0eab67862418f8c5c7d0f84ab8f4e3b0db98bd01973f3fd3cf3c64b013f076460dcc5631eb7c25454a82d5d8abb5130502a9591eac41836768c2fa42cf6b234af8113cf34649893867ee4da7a529a73800f0288283b6a88b88eccc9171734e4bb79dd21dd9595d9ac351d98fce8531730c41550ba29c4f41aabae4ad9179b5c55deb309cd682aaa3295aa1112b508c53737d3b3d9c0764967a4d7cfa99824542061344ee5b43e77a45a0d1a6a8f8320dbfb6a55d8a685398d89262d05f92ce7e23833a88671006a664b0f40bd6da7c56a451729f9ff004eac0c87d7964d5b6341deb717c8531a75ce68c732ece6082e69f3b176b3021955e7a2c037a2c09393642f13b05e6d165f9df4b090b4b888657cde446607999ec88d2ffab0f8ad338ce120e8e58b709aa3c6be3e91e71091aa4383d9a4716d9d437a138bded6506138e0d312f678788dcb26cd77df4b8696681c5288915e212254c852bfd1fcfe9e76f71f3fdae5f4bad6173bf1bb52a55a45d855f061aa82380aec625fbafc4e4feef2a51cab239ba7471f5d329434aea17e8be7ed2e0f6e97c1d0af16cbc33ec038fd6218ad68d5e4b31c8358afa5318744e80e8f0a9dd19a85ee73192c7a6b8dbab5e79d5391507f42e1b0e2d91bc6ef04b63664d509c6ea112425deba9bd8a98130a1d93d4e7dfda7971edbe39e9f2e79a0e4abb0b2b01e36aa0fde79a0d6d6ce2f781c5b9dd2dacb85d73c0f5acc8b105c1f02c8ed99bb03adc8d8e48a67493b254d4b91621834e7bff1b39bbbfcad544c983a25f1fbaea0558f1fa9a706cf81a18e09717deae8feb736c8e8734307fdd5e4b8635d4c1497bf93667479889d0c43e57ed0d2e1e7fd3b10d29737a2b3c3eae548364d06226fc7d87d6e5efd19f4234c767d125ab18d4c8d92a2ec79ff003a5cafffda0008010100010502dab615e32abc61d2ff00afe8579ad2fc48bf33a9ec6bdb042c8a3d3958bc6ce4ec7e44f4e2dc8448429b0a6d6dcff4be323a1c5472b5c3704cb07c9f4b9ff5e635b4438b638936142155bd7b90f355124752a4fda5988304c1ce6bb216567ac8047e17867862ee215e9dc1560cb1c846d56b98ed4f9481d63ced2a373636413b712d96a168e7ce0a6cac53cb33668a7c81f1ac955ae745f3507f3439b050b738562656a9b9edafcf5c85915cfcaa91727b13a7639198afcf2133d868790f291154e76974737dbbbb039d58b8e9a06bd97db72adb32eedb2ee85b2ba4bb598171b6e7ad20b75276b9d004fe4205caf33296cd149e2e36cc8e8b8fbaedf1d9c8164b61ad2e75ca0f217afdb924a3636354f76b355eb9f8b469cf3d94d830d0084e95e9e5ef4f891886da7f6a8260abcbde166f92b81af95795705cf8a51f20ef3321a566bcdcdf967752a7b5597afdc2488c5345334a2118d3d8428af4ac34790de29c9deb35ce03e109534a8c053cef7f1552e3deabd704589dcc5ce4bcb39f1d9be25e1edbdf1ee715bc05f6af002a5a6e559c6397876b546f603ac49855331beac513e588fe9746a763b75ce36279a1c7189c07dbcd5e6c114bce9317177458142c4e15f9836cd2bee10f1975b2b1ae72c841a981302e34ff0022aff58b53c8cbb08c61361ca0173b55ce51f124b0d2e46ac9c15a3660b2d1fba476c7e7f1d9f1d697cadf69e4dfbdad41898a9c802e31ed92ccd630f332b3798c14df6a63f706c4cca9bc2646d08137882156e31b5e5b9062d430cef9389964067b15e856b9726b13040a6a0b803fcab04ee9ed3c3e381c4b647b0fee0a2e5a169e639061e46bce7656b0318533e7772505382ac163d86b56af73919edbc04245c77ac5e9055e3bd1d8ab4beabe0fdf383b534e3eeb106eb1c656b8eb7245c8c68db8b70654910899e463b0291dc7907f8aa71d4457a3ca5db0fb124bbe763935cb84e3eaf16394e744cecc93bbd7bdaff6db3c7dcad17bd4dfadcc3e4b15772839b96364ff00f8fbe0e620a75a0e3a4b8f8da5ebd7e9bde7cde7b9cc5a7b99235670a37a6b9729c8b9f2cf2e536a4d578269efc14847345ed28b7ed0eed6226bd1ac73f8913543100b8ea2eb3665e15ace21bc4d584cdc3c9615a6491ba493060932a356a42e34297967f70987ff00365eafc431bc7b1dd98f063c04004eac0a35f03ee74bc2d7ad4a2e4b8e8eff001fcbc962a5badc95981fc7fb7d1bd0f3de8d1c95e0739ae85e0863a20a4a956d7acfb47253721c651e31cf7732c1578b8cfd9b884eb384db8c51da05cdf2cc6b16d7771771f25eac36c1fec8f5a75da1f91fdbf09564f370b9862f72e02299f09edb331dde4e37f0f5aa6ea55a1685eee76411bbeddfdacba6f2bebca9b04c07e54a196f906c117fafb8d9dd0597ed8aacfdf976c2399af6f11d6f6fe6201c37b4b2c2e5fd2a19948e2e70ceee2706131ecb9cdd1fdcfd7f8e9bcb5b0a3f9253e676f91d86f1b41fcb731c7451c2cb136539d88b95f4404892dd27fe680a85bcaf54e65d658e7268cbb88958d92e43fde71270ce469fe0fb03fe07c3de3635cc0dbf6a473bd3fd7ff6ee3cbbed1ddec70723b02bdc750b51f33e8b49d1f17c759a91f1576dd77397f1d4ff002aeff91c5fc7ba7fd94abf86c7e8ff008f88ff00da21f877c45f143fa2ed2d7e8b1fe63bfa3fffda0008010200010502e81f582c7481a91f51bd18d07d666add0bd0768741a6163ac1d5a1128ac2ce99d32b7ade16567ac207508a122dc0e9b8273d650281d7287446539656709c72b6e9959d020741a8d709aec277741a9c5008bd67a8140ea3a73a14e4d6845a1386a34c20821d4e5bf5c2ee11eeb6ada831118594350ec74b931159d33ab56e590e58434c2f944f410a308944aca0b6ac21a6346e9958c750f83d1b9028acea34ca3ab227397e2397894918c1e8dab09c8208f64167a20ad90006891dd89ca28ac2074c20148820be50e968da1c54ce413ca7698d03d6514026c6856714e89c3a5c9e549f394ef84eecb3a6356a63b6add91f29f5822dc23a14f27749f20297e0e9b741ab0772a37610d25ee9ecc6842f1f7907752eb95b96740a309a138262ca2c694e85399aca3ba7774750356041bdb184167083b48ce5588f08e92b16116a99bd053028dba140ace854213e3dda14ff00828a9fa589ba14de88b4ffda0008010300010502e86fd63d4dface6f50faeed40d03511f588e8082cac69858585b56c5858fa0d3a94d08c4b611a6d2991ada88447d11a0098d59d36ac6ae0b1f45a894c6a2506ac751088d0f544328841353c941e720f514eebac3b16610d7b6995bd6f4082884753d357e244dd30b1a95b32b696acf671d4a71e8af26d323c14d080d0eb8e87eae723d30fc8e8c22105844229c9cec22f59d4901091ab70511ee34c9696b9ae5b516a6e8e5f2652023d124b85dca8dbdf6a6a089413a047785e4728c944a7140614efcf49ee9ad5137460ee34083917a2ed1c548eca3395f2b1d0d4c099f099f29ab1a6752329edca211ec84ab1a84df88c76516bbb43a9f829cd4ed22ec8e80a0fed11ec54486b85858d1eed5c884090848b1ac27b2087c0e9794f28272da9cd584f50c9ac122ca054450e8714f768d442c2c2daa54d7610d19f28287a5e9da04ee89b4ffda0008010202063f02f0c5ed15267026985e5f36c435b89fffda0008010302063f02eb7dc41862a2d42c33fad8c517150dffda0008010101063f02db18c8b47cc7a90af4dffc5777120f9bb767cc9f188e48f674cc6571429c3c31f08db3af104821ab01b863dca750869c6661663172c9fa005ce8877350e6993d9b72cbbbf67f31a7f0c7c547f15f86d60153784a9195c6e21d53819e7cb10253189088dcbb6eec41f0c3f66c55511f009101beedb2d6d402a105a8c8ddd66d44585b7e2ac360c13666325965dcb12e5751e85fe950fed4ac7eb45ef73d1cc098937b5c7b46c8f07330ca6eb5528e4cbc238058dd4bf34d729487970518ce1cd846ccc4dab9b47c71be3d6be2fc33b9382bc6ade25cb956119dd964518e6b310875a053f478b3e6c0c1aeef50e51c99035d659b9345dbf57d82f0e5f523023f72b496182cd4eef3477a07c12dd256d6007515c0f3ebb87ad1a742c7f1540b980f166b5427e76b42027675a21fb13137e3d8bdee8588d231b626c947715c5676af1046a800549e2700b3cc9e2bb6d8b88ec31c0a6bb2ec09e46cc3a469e4cc2a979c8366013bb4262c9b5ce9cb54860ceea9699db31cf54ee8a1800b827917c419c6f09e07a0e2f56b1404ac96c7c3a503098cd02dca8d962e20627126f6eb52ad216cfc237470459c772910f1a42fbdc7728e4ae67238027d16a8c8d952e9856a0f8ecb0ab934ae4f38bb074c2e3683d2a311e5273bf505cb9dc276f5809aed9702de1465cb027bd08da311b3f56002e227b97c2d49cc2fa72bd18d439861bd538c7cea9024bc636942371677c107e8918bb7a91dcdd17d998076bd13060771b4142a08ca3285a24142a483122d1d6adf2dcb90ec453b076b7e4a26e946d51cd6485bda8e9e99cb932e690bdcf4240e2ca60068c62e111bb6991e188f2e3b4c49b772fc5615618c6410e517833e437aa92c19bd2a94aada63e0ab8f7a10209f665f9ae6d6b1ee8dfc4a7399f14b365ede8d73806456488cd259ea1cd2c372b0b2b5714b285a79502f1208a9de6c42d4cf6acc30bd0300f136486f084ebe60ed75b7dceb95a5b6bbf1990b9b72cf50973787263dc0ddb799ab3f21a7fee55f11f7638a6a95e750c6d3299ca3d4b2e9e952a94c0cf20239d835e5ed5aed269694215a8b7c5a5e09ef608aee55f4f3d4cb38b6866bb27ee5c51cf11c5760b89e09e32796ec501b63016d4adf7296b2a06b7e1137d89cd412a67c223ecbbb10a73bb317dbf33aa0fabfe93dd0eb08ce750991f6ac65f2f0794ab1cb10f82af9a89ab29658d198998e4303eb0b55f2cd1d3ea2a4e301808cad60c8a75cca72c95079a361469ea21cdfd62c366f0a98711366691b25d77a13a35fe249e54a22db3059eb472cbcbd698dea55241a940669cba90ad2f0f31a23f4af979b16f88fd670e88fb60aeea6bd7d4feac32c6ea1a79dfc750b131eed9a69e399fd49f7edb477ab2442cccf2de8ccf70518b3baf978d68e9e5263294b16c1716be9098f3538999f5629f495e9eaf2039b2969d87d82a509c4c251b251361e81b7eccb3d4063a7a3f1351506100b4f962290ada9072477711d95bea1587113cbd3bf6da7a56ac82d4e6dd4c9859e57c172a45a57d39ee929d0aa32d5a65a587dca35e8cdabb7f3370dcb93f53d2c6a983732a30f4af9afa54f341b39a24bb8fd2531b378d919183c7710ff009aafa8a1563a1336a5c760681cc400d7c9951a308b69f43fcbebeb4f2b97d3b4d1b012f2ee0fb6dd8c118d18e7cbe29dd01da53c48955f6f008d11751e23efcd47b17cfe9639b51a6fe6c479a97fc543798842b6714f370f13b7a90d3c84c64019e3c27ac4ad55b5da439ab526f9ca2301bdb602ee3da6b7ee5a7d0d28988a12e65433639a6886b4bd8a200b6457d3aa61cccbfea086ccb0b5f645cf0caf084333423744581191368ba2be6abf8f572e601ba26e4c8895db96ae340369b9b2106c03a84a1da3ab72108cf3ee719a366fc54be6a8479a48819c318cacb57cc7d364239afa1e5fe14ec49550118661e9447b2518e112e154a70b6ac07328fbd040fa7b71d8e7630c1194cb050d3ff421c75cfe91f9a8888ca2218264ca757e9f57248ff42a5b13de8697594cd2a90f0bdd21f727c5bd48cc1f0ca24773ae5cafa43b1f33975e1920447bcd8e084699be7727de020d82d45101a8eabfc8d3eeb7c43d28ec2e3b0a72a30a62d99cb18e24a1ccb7535f8f512fc3bb63a3b859b3257a11ab1dd208cb492969e780f147d6aad39cfe212fc3bb05f0eaff00055e21f9ecfb752a7efa1d9b3e91ff00affb76cb6683fed086c3daa3b4ad47bdf8297bebffda0008010103013f21b42442f91393ee95d8ad88ae2d2b8bc745858eed82d6fdfe9be8445e3496b0624cd1dafad04eb22df74c63258011652c5e7ccd7996adc7697b3c33ba461f665aba396a5cf99de9d3f305a3b8f7263fabdbf5ff0024129c8ec8a0a8fb65de8fe2a503455d0a3ed3c7314752c2e8e66660152e7291a84b1713452fcca11cff00d81738cbb152a723b2f1e666baa9dfeb40163847b4288163575cc5d1e195aac7635a0e5c6499074af3a42c01c1e9ee6d37d38b7d4f0beefea3c0511cbea0bbb9a075f8984d9de1e3fa4b8ca317f8e227d9c6dd9c0f99ce800f571587bfd093cb6bdc590845951cac196a5bc6799a46f04c743c6a55baa78a62a5ab90f563f31916f2035ace3cca0d4150358caee52d2ee5d0d988187909fd9304339730fa47ccd4b57930c05e16811bed0520ac5c7dff00c874264dfba8591430b1e0c318eb8b988dad62c9ee2a9dbbcb8a5b1f0a9660e2e1982e6a2d617b7a12edf17159561b2c7fa4d70d43bce58f08e07afee3b6b982cfb91d3e0841e051bafe5a4b08a6bf407fb830a021ae5b073286b4a72117a11c31703ffa1c7956c026a8e116d667f0086ba52356aa1406f071b33158eaf485b93bd39959c57b28e588af2aecf10709c45a0cd3dcaab50e3882815aff0065de0c488bf13deaef11cd55f93fc8ee1acf317200e1c660350d740d44d4a46a4940d76fdb1c4bbde53b89b7f2f22fc329ec80328688470e1cada5f68d47def27d9b9dc34cb25d1eb286926ac3853367cc7a97786a050df26656988140edd2f6a5b39c5f89a0e9fd45d6f2e20ca1b024039ca306c57610d3fb60c0077152fb272621a1469e4df7878702505b9b00d7da3f7c0303e7100088a355aa532ec09470373fdae2a071b7b8c0a0aa1c94e32f61801efc4a9cf53712cd133a8510cdf77b768f95ce0e3c8d4754e8515886e2da87c38238c76b8206334c3f88346e68784dd302adddcac65b081659ed194c2a60932ea6016f671a116acaa09a1707cd1ccecd42db1861902ae21b6a6495cd1308693b1d912ef30cafc621b6c0414b8dc7de2e18b6271f047da0fc1de1d88cd7db7311aa78727daa9d70c704ebf1eeccdacea62edfd230070024c6b8e1e3cc8076eec0c86afd4cbd2c2068a36768afb36736d4ec040e6d889583a56c735f78001c3cc4ff007152c1cb751d800be108b475ec2abc399706a8ebfa7c7de01b8397ce52f0ebeb29b0ee8779d739e3fd402d7c08b2fb570f330a46a343d9cc65f4348d0997f912c3cdcd7f96db4041bca01a4b837a45d62796629791a9549b2673642174a9579212d85197b4a55c767276ed18ad3693e6feb11d0dc696bdc3f73d94ee3dcf85cc51961815160d7d95db7a9851b963e8a7da1cab5731e461c0df3078f963ac320d54291079e18978fa5c15b2fc0967686cede6d4bc3f709896d9748751319bf5070c7c1ba8dddc0376ff00c9bbe4d7b035e2d8db8473b4e024124a383dcc1b98a121e7ad94341cb59bac4e772971e9aaf883f8092974bc14fce23b19fc484e44363bd6ae0392f54d9f11bd457646bfb7d45620682353b2c99c86869a45526e06d8b6e1bd1163f30ed8359a4b6b8a1ee411457225b9197829c7f52c56d566f6427858bd9801e03133660174b0c3aba3dd6b0d1e5cc5b02cbf313fcbfdc0628ab1d867739711725be5bef2d26db3ded36ab83b3f33e4116bbdf8301863c3983ca7c2203b27de799bc273eb996563a3f03c9ce627c7a1585d3f27e255b910c3d59ca476654283e47a41f3f51623a654ddff0015ff00b314bc15bcdb2bcea6dfe6b781831daf1f9970d6501e183fd64c5cca47c313bae83226e0dd93c40196d546ee6f2c57973a79adcd3026ed273e3bc515511780bcad271c9b891f4294a2381b80e81030585d766f875371b34637de7d328c287261845b8d7781362d2a83ba1a426b277959068e18d9d2f9370a0c7ae7cc261429af705dfdc8bf2cc487a8cf45de5c86b4733cd7db93cbe0277fe7bb3babfdc44acafdaf73d07e6657e4dc2f5462da5b7cbb7abf11d5cfeb7731d8b86e43cbd841514ef86d3423e5b9df4d2da2aa0f19f5714a30aed85a03e76a65e133580ab0029aef193a81205d017ef53c98afb332d00c540f85d4d9c7a8ea9e4750177f888ba2b3e65d10314ca66c8f03f125f973823285bc5b55cc28b4dea6ca3c4471b2d2b1ff0015005dccfbcb070c76652ce5ce1da1b7e23092776166e9571ea6190a0da519ec0e7dc696a53b1b0b85efb844ff00f4cc3aaa17c99821a9ebdef0f9313b9f543b0d20ad256db0d415c4c938e1c4c201cf78371beb71c4f9d21b4a84c506a5fa3fc65b538afbc7dd755956f1b1f373797cfca0d88fbc2fa6c2aef445ed2f0356330b6613d4b0c21d18344158d546b77276bbfbdb3ca968ee23bea62f10f99c4ad9ff00cd73bb8b10e83f41f07ebf08ebbdc455acd60acff4cb756ee3ee6a2cada310a80a1e4705edfb4a15711ddb063e62f4ca64789637f13b586035e9d9027bd2fe0cbf32d0426edb1b6b9974c95751f1e11b75d0edfce67f99e67e07f6cfdbfdcfc6fd23874fe6bfdce1d05f864df3f313f77f6cdd8cfc17f53f03facfcc7ea7ffda0008010203013f21e8f419e95ff34821172e5f56a57fd02097d2e5a2623e8ffd14b9704aa85324183aa87a586e67e9a25f58a65d04dd90a4b19842b195665d2e0fd14961888c6e5e3a94bd3b5de3d04eb3b8bd1a7d187329297d075d4d65ddc62e90c537f42bab2b742a9467ab61d2a27d10170574aeba41c419b8d7539928ea50e20cb8a5742e854fd2ea2aa82711654571060a08ce2c6de01825d4bb8d84bfa1c199b4a4be8beac589331ab88654da0119abe8ba39d708ce503a1473d42332c43745e97d5752e649662f310c38cbe8eb135185d752448b658dc058e9304410a224248514b743be16fa7aad0510fa16ac66c200dcaed0e84043047287e91a271ccb514c1736b8460b3a0ce6f491311cd4d8c095d18baf106aece7a0494caf4a9b4450374a0c2a1dd7432950d03071d526d17198c024b318cb2368aaa3c42eee66d3f9e220f28bd172ae8086e3b8bd0430b05ce5ed2e7a29a8566c498f2c768832efa516e9821a7a3d07af44144ce30e065f32e43c1ccbf69963efa334a9b8f43a9e581d73377b986a256600cc66dd2da6f3586fa10df54e9de3d399a4753fffda0008010303013f21fa074acffc03abf5d4b9707fe83f553a543a5cbff80cfd055f5d48744ea423f4dbd0e8661d4aa8da5ba19175abfe08cc4a4b2587420f6eb08d4afa152a27d27454b2007585812113a6c24aa8fd1708cdcb65d383a378755e87d75f55c6a659890779c39cf4b8cf562cb867844fac83282fa6252862611a44d749a22c74a83e9194d26902fa18a8c371aa1a132e9ae6e0afa2370a8d2691b987a15309b8c6d0c11cf512ba0adfacb2e5dca42fa115417d42a7e8579704d75f779830e47427b631d091e60485be636edeace0455b73d06199b8cd7a0c70c1738f5da32f433f4c4ab4fa53d27246684d65c52ae8df07a37b750055a5f77d21d4aa670ccba18f537a4d094312b1d2512c8f474c267d41b86a1bc421633a1308de5d0e63a8b4621d74a66874b84553484a8ae822ea628b1833d0d6b895b63e6372c81d2f966333ea2ca95d0b61be8cba8c099a12e15c692c979f40ebabd5184c257719d54e97135eb7eb3ac3a713684fffda000c0301000211031100001089f52c9219f49e142f2ad82032480b1ac6a90671249209898e29e894292104bcc36b3aedb942ef9ab55320b4bcc57a3eb558fba1453874c7029600cc68fa0aefd10b6d46fe43e477e2ae24f93c0889b407d9f7d687df7c3d919d27b7a0ab789cc4a602c9d70f0cee7b761d249692c6e870b224bcec677f4d102df1765ddf31df4a78a5e30aca245312b39ce55cb14a408a37fd8a72a6c8e8037896ccf392c13b35074e2a50ffda0008010103013f10570173b798c86484ecbcaa0674e68c4a36d96c0005dcd1728d8f40e07e40e6f46db1bd57d2812dabc1d29b929298f64af42b2b79ccb9b739eabb187ea025615ba50112e14698e58852ba549815cec56c2b61e564c007cc702ade88b5747c4741020accd0cb46580177cdadc0341403e572e21e6e6036ff00b0e8505d3e663fdb4223969576c57cfd083b80001c68fa50000a4c88f0c163b59b28099709e8bbcb3198e2b897740c4b1e5e61e551103c00b4b800371697900c4198525ddd71713a508d19575802f98cf2da039da99bb99f4064c66c4c32c2c2db748b30739d46c0c3a48d6e50debbcf0beb000746b1584478618c4f0b2c2b91075044a9880da200e5ceb1b65172046ebbc600d604142ac07bf63ed0481da3906950bf694f80a9ab940b2f7861d6929dcf70d9e633752934050e31ba822dd8aec759f1882e4a7182fbdd4fc2055fd9204596dab079a48003e4a993dd03f9897295b3d0168184a61f8ae60f7c019aaabdc12385fd1afa229e60d5f35701603b44702878a61072400c9c44202c28a86ea73f93972c180885791c8b2e257d2ba2a4e4037eb7282d0417b59a1a1e657f2550a03d83994cdf4b5eebeed9f9e49474eac90f0236fc434b2b5013392b312b74d6e7d958340f99b7f170cda43012e9941f690811e4954896bc239a17dae50f540e17b2316aa0545c14a67ed082cd16eca79b96c81e84b042d415db0a5d8e4429a3a986e7c049837ef23b1f303cc0c95194a153d9267d1ba0d874593f3550c5882c8058a2d2fb0661f590298798d6a5402eb4381638034501f89764443ace689a9bf12142c760b8e286da156eff005062f49a010774bfa47999915214da9877898e27b0b662f574ce625533ad5273c554ac2a29766158d1c8dd242582a800ba6b30a39a326b02dcc344ec57440b1825ace47b949f317da802efd219cecbb988b99bc988d234b05c1ba0a058360ec003358055d04ac160645e90b42fb10e5174d19d73324c06ae5100ae45bf98d8b9034cbc0546558159f67fb86062d8e8714f8c903ed16ac36b20ec583c64da1be2d554c1ca0c2bc19b508edac6751b343e3c418d1d2f788474652e54d73163a11c19c97556c6ae20388245e427906aee31cf54b2380ac61c8bb81daaa831ad896967ea1663cad96e3b1eb31870a41cad3b6b89fa46916d700c7570db887b20b7e271a32b8ed44b4537cebc4ab0005d2342b4bf3150d7c0aae30f0fb80a775b040b8c63c106b0185eef699e2e817eba2e44760bb96c6af2ee9fb532aa8a6c782a2a324c5f9cc78408b51b4b14561dce2a4901825bce8bdc3afcd8d8c5129f032b8f56f06ceb0284546a164b42d72b4cd0f62c28961947638619f12aa01ac52be60b2a0fcd966ae2adef1b3e11dbee5ccef6b176eeb2588100294cdd8bc3c8c5ebd83d4ae42ac79e6572152ca0297be7997d2d46305c3c1d4714a2c6429eea356d547d96863508d0b19edc472bc006a0c155016d6562eef7750df29428c8b215ef4ea33f64579365d1805dbf02c0ad9937121f898b231e4e615dd35bdcc174a75db74de52010534565e4b5b39c4646455b8363ac3965083bab40abf12866b6eaaa8d1330b80e1a0ba506cbaf87104b83ce1bc6bbee12201c0ad66331708c94dc11e056c2c1849b728c95a61ee1daef5ea200cf78e540597bba95e08ddf3f787c8add959c3cb154f100d45aa3695811c39388aecda745381aefe108d2c8059caa9c3c8c18428d8e081eeda788c211c06828afa0abf3280e8336400d348ca19369f74e6f3637ccabbd67682b3e0ee41624814c103554f77705d2101885a5cb1c8a762d14f2d843ad8cca217556f2388e519102ff00f3987b64efb95924d08bbed5bd42667258b542b8d5d4321e04c69ce3b2f7091ed82f02d1c5b00ca160587cb7fba94825a42c1d166fb46aa042b2a9b90688868376c47d142144f136979cf1112e49125253c286c6a0636f2caca2a151d523e7b898c2e8c50658f36c1d94b1ade16ba76b60368145457a11d374267c9b8ae394bed687e21af5a6afcb2fed035d9cac2cb66addce0e589eaa8e55aefde0cacb30673eaca81d32e50b23a39cf9805b6bc891cd1cc7e6858eeea3b5c283758f3ea35b8f1c2b2cf8c626d6b93680e1620ace6bb731d3bb2a29d01a5c150a21933e0e6f8e4cd573ae672c8715b5690cbb0ce2b51dd211e6da032dccb950616a8bad5385336ea3c87cace630dd2f930c32c93b740665876dc470a100e29864abf1860ade5fc987f309ad006daac1d26aa1825841af3b2a8bccdec8159eeab6042f32b855b2b37cd24b8fdcc1a8b6fc47866529936dfc41c2a0307899ceecc1ec983f0b9e2b4baac647ccbe012ac00663b5f8892d1b7410315959b36b4d45c6a6e50560cc2a8460e4e50959a041c592020656acc2754c6912d196b0a87653d8b296d9814231cf3297f463341b827842c50897562a805a030a380944c294bf5cce20dd5e16f6d12740c5598ccaddeb569cb070ca37e25b9e90b6992ca1cf12db8591951b2da2abad423596c6914ef1c043ab10bb86b31f1a29d4d85e568799532c6a800cd6aa24446956ecc0060a3b92e6fdd111f68ab578ef134854a420db41c802b22f4435a1840c7caca08094620a354d1498c558c70bcc05e21b15de597bb999f804cce4e6e62a362f9e6627bb10fc426a15b062c25340bfb846669202be2d86169dac31b0ac6b1329c5e84a82d2150056864576860cad05655ab42eea7865f9a85ea511555a39b0da17868ff8afc44715bb5bfb45642063e00231edba25c61fda0a6f72e8860133816057803dcb2ac0e7a22ce8adb4e72c0d24da2539016a10298b79431f72a8a5cec40f2859dae5a9a39f17072d855fcee46edbb75c663afbc6aecb29c5c655710e23bfc156d3b00dc7e6570104f61b5f4987d9816aa1ee5a1dbcd4608abedc17360d2f15a2216cac08688ac36f7c47463895019502b9cdf642ae6af9c0a45943b97bdcae8401411c88ea69a130fee6f7d19100032eda6f372de297dc2034a0bee9285bedc50ad380d5702c570ffa83411e17b7f52afd4262d6fbf1aaf6da1af7995f9f440be55d9dfda36f6a72f3fe7e62a3920d4c0f38596de8d845c0abb9ddcf172d90b4465063168e3095eb9120669db4f70635556f0de7f531927be729865589b6ae202b6281ba2e9690715ad5be2e369385ac805908b9f718e28500dd675b4a8604352c4c460a3178316bf0bba1b6aae212404b4b34215489b22e0489a810f02b82db84cda087a7396eaeef707a073316959c7696b8a532b548657e007da5376929f31ab60376f1da55ae5e4ff9165f2152ad4e9af988b08b6aa058a1419da6c8e1b16165f63cb339a44e6867c3a28710b4955e431fba83447cd4979599b98324e96280694d1a0a20c22c5021600c6990eee3c759efc2545b540c5051a506588da9b2a576014199042adabc6eb822004940c4a189824417c8aa356ac7dd9e289cac0065c79a136ace8d54b8c72cad0a2554a8b56b703952169df735a260c8c231aafd454fa4f2de18d2838b46b52cf8c55b0f39a87894e5beca084f04b00763055a83c41877c10000bec1a8a96f61def94c786f4eeb07f70f0aad0341e6d6098013566f214818a03ee846b916f98565ab6858958b860ee5435cbc6215180dd6a16c1159b85bce4ea00077bcd0b728daaf015013c029a24512f2ad5e0af337924715b6bdc71585a1dd1bfb545b04ff001ca989c6c505d7619903910c061a1e9715eed786133e7e868a5f7995438369e2a1b1e894109ece087cec0e518bd907e6ccce94ff0088edbc17e7f88c6860209c1d791871479a3fe4ce5cb445df027912158d56f4dd28d7cda5cedf1a69de29a582f0421742dad2add8992fce6c59a3ebfb9fa70fc2743bd5e9fa742fb7b10de7f21da3f77f73f8cf13f98ec4fe5f53f9aec75fa6ccfe53bba04fe0fb27ffda0008010203013f10ccae8a9dc74a5dfd69702be8b14b5ea30ab8951ee322806bfe6e9f12cea72a8238dc437ccee3048ca8efa54a7fe00911d16372a2dc40944283a8157033d06a4b918e2110a1987d09169731dbd213486798a150b152e67a6568ce64545a20626a6b705837d2ea2d9672286b94469cca97355ae654ecc076484d3728c115ccb20c4ba88416a68e892a57417ea5adea389282c948198172a2691de4a245d4a1cc33530c55437159f44c682376a3135bbc0c92a683128e92794444e8ab5149c108ab12b5756a5db712652bb4b7989888e27317ac84c6646bccc25b2ac6b287133dcf5d06f5d1231d260dd322711094731f1b6976ea25e61ac80688b610499660a9415cc42c6252afaa5fa84e18cf7c354884ab2928c33152d477654605cc895c53145998bb8583897165d470d6e00a9285b96b1021be6600863086014b1a9a974c494c903f54b1b62c6165ca111d4b264d1116e6c5ce3ae09aa99a02cab872c405e22732e262f710a95781f92215001ea23cdfd7da1cbe65f45c7223bc570901c8caa20544b9923adc2c36d18ca881cdc7635f9e25747f0cb0d418812e62bfe622c3da73cc47288e5731ea0731aa184c308f047e61d1232a59665a9442a6e2ab941756a1b8d2ddc4788ecbc80312a3657c4bf07f5fba9a954ee6fa131d192578e606eb2825843b1982c98ba14351c445c061cc1090a0b98902319559ecff00b31064d91743c1cf817f5704edff00df8e800db13a155a4763a65c86a3a49531ad25cfa65a6a2b4e6a56afb539f4aad78b82118d3ccb1889bfc1fe31042ecad7f3f152eaf682cf529477688ca06615d54c1898331d84cec92f84966e033cc5b47b99e4c7ea2a86a66ddff9de382a9388a1da36dd92d22a86017865cdc59699a6042d89f7952733dc436cca146e2de95d42ed38961789e807c715fdca1caf881942bdc7117bccaa1eb73d030cb3a966599bb2658e19a88b72a6f297196fa4adb6f867cfe82756a7a37d2e5eab7e3a369a3d41b3518d7af99af5f13fffda0008010303013f10b972e6a02df4e6fa6fa25ca3ad4885d45fa6821df1ed96bf4543b7d40164c5a952e05f4638eb5a263509a7d6929e8a98ee5dd6e38c4a89c46ad3352e8892ee33bc44a71f48f46d15aa8b2d08a99e6176626412880764b3503c4b451d28caeb72e50d305a8411a63eb0736e2eee4a742836e896b6cbd84b4f48a6e56ee73c7e8de15d4b84b399626395473e6056cd1131664b961647d332f4358f4be859be208a428b172e292f2d61d860a2530c32c963b8e9464898cc122df5ab8b802393422630e3e609913d2c2d15101da21c4482b7d1a32df5154325f3f4302aa13e44fee0984bd712882371e24060388b8ab6ccc2cd23154ae1dc58dc17245adf5bc9703e42225542c5c89043359cc98918e5c58970cc38841423bc6a3dd1d4507bc5d854a9abc8d42a30aa565441b5f4b0858221bd71174089495f5667022a8e111840ccce2419ae9718023ed0154bb53711897a2a116abfb8fc0af895d5cc6d8a8b4ca4130b35e219d98c995938e955a772831065fc0473b439734dcaae8d2da0e5da3ba430c0c6ef2d559d888576319b580f4de235555c081a655b865b9653aef3ee591a30f408c62e546e024052103844e2effaea5794c32c62545bb89534144b8aaf100701628dc4ea52dcf111a460d350e2ced15aa10122ea59071999d824f93516a6581545c02cef324d9053d371afb7eeba1ddb11175072371c0ab462a60b010730d8c62c56a11be7a0061cb2d548bdcfee58db26ced19a15fbfe926012502e2e502feea04815152b6e6d985105b8e30992a63d212662d9bdb309721e1fdc1b9b2550d6e60bb437505fe6e3c905b2c8d0b30acae6a445101512ee739c741be258747e603b9287300969e6382a56cc063c4f38b98e610cb14312e1258c12edc329899b564cd04508af1d4d3fd475f5374da1ae86713e7366733627ae6f1d73d1b7a3ffd900, 'Margaret holds a BA in English literature from Concordia College (1958) and an MA from the American Institute of Culinary Arts (1966).  She was assigned to the London office temporarily from July through November 1992.', 2, 'http://accweb/emmployees/peacock.bmp', 1861.08),
(5, 'Buchanan', 'Steven', 'Sales Manager', 'Mr.', '1955-03-04 00:00:00', '1993-10-17 00:00:00', '14 Garrett Hill', 'London', NULL, 'SW1 8JR', 'UK', '(71) 555-4848', '3453', 0xffd8ffe000104a46494600010200006400640000ffec00114475636b79000100040000004b0000ffee002641646f62650064c0000000010300150403060a0d00000cf80000147400001f5300002f80ffdb00840003020202020203020203050303030505040303040506050505050506080607070707060808090a0a0a09080c0c0c0c0c0c0e0e0e0e0e10101010101010101010010304040606060c08080c120e0c0e1214101010101411101010101011111010101010101110101010101010101010101010101010101010101010101010101010ffc200110800aa00a003011100021101031101ffc400e8000002020301010100000000000000000005060407020308010009010002030101000000000000000000000002030001040506100001040201030302050402030000000001000203041105102012062131133014223223340740413335501542241611000103010503070a05030305000000000100020311213141120451221310206171913205f081b1c1d14252722314a162823373b2431530f192c253c32406120001030305010000000000000000000021001030406011205070800112130100020201040104020301010000000001001121314110516171812091a1b1f0c130d1e1f140ffda000c03010002110311000001ea8a9f9e78ba58a36cf5698b45e516027b2ac9a7433832c76e73242d6dcf38d66f672ce6de6e8cd6bf99ac1a037ea0f067e7c62e96856b909d5aa5f827ae8b7019753db018e44b3842ce6a3daf06a7e67adfc7d68b0391ac1b1593abe19c338ba09ebd5b93abda6e353e139a0c3ab635d130511baa9b74bec4b5eacb74f5fccc2cc41b3b5936272757c339972eba091bf583a42f4634522883e8c8616767e7d5a13a8c01c96023b5162351d0fd3f3ba52a14b6346956cd23f0ca3b2ebe574eef56ecc34e8abd261296d2625631ad3d7a25e6d76e125629cfc59ecde8f0663798254c69d0bdbac30a9c6b87b69026068325e9f81d8587b71ab26eb1d669053103e8666398751c5afbbf8729bcb149634e956dd63ce987a4b793791975c03401527ebce5326e3d9b63d29a66c6b83a28a2b40d763ebe5d298fb5703b9cf5d2f2c3546d3a95b750f10713d1ed53d9b36e691a7ad1986c3a99e15ae7dcea96ec62510e8b503c299746ee5a0592a66d5d3fd4f291154cdb9393ab85b85e9658349234bf89c6d02b49d772379d4835cb9976aeebe6c06e71ba713825efc2c516a1ef9fd3e9feaf93848b3fd04fc7386b87e93729e5d4db98d54cf47252a52e8e2fa2bbb473396766452703a62daca35635c98caa85f92d4ccebf7a3e68666631f453e9ce1fe1fa4f52f36b6de0fca82f04e5be783dfc48eece5526d3fa31a53a47e7dd6a3b151878ee76e1b0e73a12cdb37a7d6d71070bd2f8a73025d7669ce91a73055b182c0810146a4a9acc316e1a70c4a6d53c8f4b4f1aba63670cb526228d875a327570df9ff51b818d297dc1a928fb3980ea1d1b96552487740cac5b74673ae042e6f7ab695d33b7873495f49ed57b7387f85ea8bacdaa9966e85d57bf88b04a08ad2661b792da2d7beeb710a49b7783275d746e9e46025910e455ecae29f39ec190498eec43b3d57d3e034d142030c2d5b0d31582ca68c487e87d0668b34d452e8f332f9578d5fb271a79ef5f6054c2c2a1ea70c11ae7c8c60702ae1ddeaa3de2c36576ab11d07bb97180802f416209f6af656475c85e73d8d812569b794aba716cab8527b566864babf6595b21ce07b36bede0b61f9e38980071535908bf6eb98fce7b19e4aa9ba9c28b7354bf6a48abd926fabc864cabac36e4b6875d5a39fba9896e68055680f4c69666964ae78f39ec54f7729574e3175466cb0922d4d1537d590ab1d255fbb1360b9dd471977d93ab2c45e9d161810b333373a79ff562ba5c71a42b743e48c3097e4272d3ec238cde455a6bc4e02e638be8f56a9154f24265995505fb2e28a9e8617a2a677004a9d5702501aa8b22a10e0ca0ac53e568a85d83bb33ed67ab6435c881a212c09aed156eabdb7264bf4a8155e03014b58a15d209aca8cd1755eaaa5dcee955e9b9566c861baab1bb5eabffda00080101000105023e82efee2b14e2bdf8c20ab9c1acf54c89eb51930e87d10ce75eefc4a5196b9bf8e2186f176322e444044f056535576e55384854bbe3737f4a6af2fa436ab96b77342bdc4ffcbf9a51edc795539286ff00283f8cac7ac713957c31413c3974e238e09db61c257893e31616bb45af81aacbfb5911fd41cff28d1036659da5a4976386bc304b35891f4f5d62c1d678cc8f8efb6c6ba4d4dc6c9b0f26dbfdb5fbb7b63157d70f2a35684df354b4a3fcecf6e3f936eeb7ed2692273e34e2bf1295c72d635aa1d93221a9b1bdd96bb78fd877ea672cb3b6d37fdbb6a411b8c3726f8f54f0d56533f333d939cd637ca347b5d9792dcd0edaab44a5a3e40577045ae29b5657ba9f656754b4f0cd816cb62087e37f8b4826abb0a5a71252a15d8f66237d951fe767b2bdb597e26ee7e45f2be466c7432dd9edf8d5d86bff00ecc2e85f950e734c12d7d5608e6b01d6e35e2b73e3b3e45a71b081b7f61a8b34772db75653f2431fe767b296d4f6503db1d798166b09ba63657af25aa9acd8c9e4be0aca55eb4a0aa0f5b7bee8a08a46c062da51274f6a2f99bb985d06e7ecadb7c4aec9621aa33ad8dbfaa3d933f2c8554240f1e63a2b5e5bb9ff00aede43be9e4da6af6b05e6f99f8b8d44952dc71c573641f2c93f73595be66c51cdf0d686c50adbad9598f65e3955b534f1b7e3a507acdc45ec7dea3727c72bafe54aaf97c82217aa49e2d77b0ec9f5dd1f9569eee92dd6acc92687413976bfc72cf654d252d735b735be4d73cdda1de53a4884b6adbfb594dd993868ec7054fd0f8efb79b343b791ebe17a975df0c5a789fb3a3b3f1cabb7d649fc5bb87883f8d3c9ab48df02dfc4d97436639f434abeb686fbe2b3e61e29ad2dd9dd765523fa8383eccf6a032ed2fe18fccbfdcd64cc28dfd8a3bf65899b62ab6c6b4ae67b5da505e86b57bd1599e016b67e355bedf5362b3a450549227b7d93fd546c2a8c47e4d565acf2770936b0cd1e58e4d726b9772cad26cdf1cb7366f6dcff00e863b2fd63fbef558dd157c12b1c678aed55301d45e3b37171963656a38e78c5adc6b554f326aabe45a9b298e0e0a238936de72db3b6f2226c55f0fd649736a7d17a95dab1c067ad2afdce920c0d96ee4d7d2d75f7141d952774667a905a53579614d7588956f29f20845bd86dafad5eb6dda9fc6fc377ccb162ad3d5434ec471d41eab21772f550e5cea158017ac8a51d974b3c934049a779c535e1e26acf2b361abed229933510b9f6f470c10f87be1d2595357827575d62dd91339b376ac71421ee737f459bbb5f3cff002617e9bd4b4c3d43348c2c9907b1c835a157733bbc936ac82fd27b27a7e2de5b059bea7f97e2af0b68c74ac7cd1678d756c2d959fb7aef2492dcaf81c17c8f8d37e19876f62ec76439ed4c9bb4efad1b1b4f13bdf3d5b565e36fe2bbe6f906a5c702e415ec3db6dd7e58668e57a83f4dbb673e59258d1cb4c2c6c8d747d8becdae05f2442bd863cb9cd7995ff0a73430ea6ec9afd30f1c66c6b78defedf8d5ff00b98ae536fe256e2b5141dcfd6c2d77736594313e30a7a41cacd2705481ef30b656e1d5a5c413b6f6aa78cd6b965763ac3acb1a6d491ba0f15fe39f268f53b1d8f8950bedf1dd7ded152aa0b96558ad4e8494ad393be2731ef64efce13eb472a7503048c0336a16c89e0c69d6dc16c2771505a95f036073a6fb5fb9f1f8dce89fe23b93b8f1e63bba48ff004d9952b239d966bddb36aefece1ff1bbfc70fbd9fc8ff62acfbcaaff00b53fde0fd96abfc5b8ff006ffc53fb38bf76bfb2deff00aeffda0008010200010502e0fd01d0ce0f0de83f482087ba770dfa5858e8ee40f0ee1bcbba822e5ddd0d0114d3e9c3797f0790b2bb561bd4c3cb79c2c74e51e86a2101d0de32be45f22f910917a23d18e01f578585ddcb793ce38ca3c04576958432bb538617f64de4f2e1c03c6106aede72823c8e4f0d5947b4a3e8494cc224aee5958584d407abb81d2c4782135a9acc2c1442ec28e421e8021ee786f0796a3d195959e08cac6104161613783cb5058ea695947d501f4421f40f039c753467ab3d18fa206501d785843d3e9307d11c0e0f5019fa43969cf5b07f478fa4393ff103afffda0008010300010502e1bd43828f328e83c843e9b8270f4ea6f03a72b3d184475b381d072830aedc21c353dce40a78c3ba58d3c0e8c2ef40bb9f6e30a61d4d77a772f640f3da82c73226925128fa8e8017c6be25f1a2cc204a0874bc7a44fc2f429d1f4e10e8fec3087078ee0b28800f7ace43bf3740e0fb464631e8e6a6b96517a2f5ee8657694e18e0fbf40e1e7d1a32d68734fbb5a14a4a0d19ed6af40bbd33387fbb9df87ae4f667b263f09ef011932bbda5364685f70c4d21c24392e523bd3a072e43dba31c14c7969eeca29fefd010e1c9c70b3d4e083501844a3f40a7fbacac7480814f3e9f41eec7402b28b56392e081ca3d64e0139eacaee5dc9d93c650eb91df473c387016511d0e38fa450e1c30821c1e643f4c7b703dd657bf04fd32bff169e4f27e91e7fb7f4611f71d5fffda0008010202063f02b24a1d6effda0008010302063f02b24233047566434237fc3170bebd9831a8cf27ff00ffda0008010101063f02aa95c6f2f713dbfe854223172c87cdcae67473e761c1efaf6f3e8a847254f5ab7059b35146c32039f74d08b2bb790f37c42070fee38b7e579cc3d3cdb392d428f15eb45e304c07bd44f605938c6fb688c8d666756c2eb79fa7d581fbd16527f330fb0abed0a9cb9f62dd71030086793ccaa0d7a57027dd6bb1c0a650df46809de1da6ddcb4e349d62e0b8fe1ae68941cbc3a667d3d08788e9673f6ed6d658f591b41ea1c351b8f780a3baf9d069a4987dd46fcfc0169c8e5f4ee75dcc6b079d57b511a7facf6f75a31f3a063cd04a1cfcd1d008b2d065deae6adea2835b271329b2953db54d72678a697f708ac8cf8a9b3a56512e5737dd213746f21ecc46d3ec4e87f573733ce502f256bf5504c3eddefac7256b51d08be460918db73c7b3a90af25cbe9b4d7afdabeb8ce3e1afb10608f2f974a2ce27087e5565a0629af06e5c276c45baa2c131b763956175978a28e4d9676f34cdad91eecbee38a1b97aac2cceef8735119786e86b7b1968aa2fd347248e1865afa165d431d19f85e08f4f258ad2b336c3b518a1b5a2f7f2061362059648d158dfea421d502da775d82e9013641ef0af6f32b3bcbd05bb6230345d7a1a43decb9edc51d26ae06bc116b5d8e29daff086968877a586a5d566d1d48727023ef3bd0897dca8e7e5eb41d0bf37526e7983b2ecb7d09c4c81c311b16a73772376461e8507f18f421cca2a6d551dd75842834b9ad8e3249f9ee4dd4bac646da306d5c22ede3dd057f98f0f1ffa92ba93c63fb4f3ea2b88e37dc8b9e5582b5f52925af76e6ed50360b4e50eca3a2b5475f334430b403bd654bb0a74a0d7c7c313b038b3a4b7daa2ca28e96419946c38300fc398396a547232a07018091d65678dc537565d6ba8093784de36f69b5cce14cde9a28b4ccde85e0f025c085c12fdfe9344c6eed48ab6dc13a58dcc686d6a2aa2d4f886b9b0c66b9eb46d079d47e1de10de27876888965d5381ac935a03466170aa642306368bc3f48db582feb3cda6cb796d43f899e92bb83b1574f0dbf94fa93b4daa0594cb94e232f42ff1daa79ab6d86603798e595f24120c1c1ce07fa50923d4c6eca28ddf7569b1031914bded63f1f3d1183551b80b0fd7a56cd82dc51644032b6d027e6a10c00548a8b029e723721a16bba5ede6976de4a20133f89b5ed3cbbb62efd7aed5becec595cec87f37218676d6fcaec5a76852691fdd81dbe7685a8d635a736634db40a236974c38849e9b958554f2d391a9b55f2b1a3d6b2d6876739ba398d58fb19f94afb2d3ee3a3a3e673856ac22e674a9dcc6e571ad8eeca2e031e417d777ad46cf85a073dae414cf61a807283f2d88b24150aba6978d08f75fbd40a9ad83f547ec2a8d9c31df0c9bbe95569a8da391ae2e0c0db4bdd606d31434de1a69031f98ce47ef1a52a7a362678ce9002f690358cd848b1fd471506af265861b5f5f886cf3f3c21c3bc5e9d169ff0079e373a2b8ae1cf63c77b93337b117b7e9c9f81eb5499b4e9c166d34ae89c2e2d710b8667afe67b43917ea662fa7edb2e6f605963617edb17deeba6fb689e083a7ef3e95b11cb23b88eee126df3517166ab58df7dfd2aa399b50e94f7bafc074a32bcd495c466ebc7bcb8726eb860bad6688aca455a30c16f4797a5b62037fa5ab4ee81ee8e4949cc5f4395831a210f8980d74dbb06a8d95e8736f656b66de46f1981f96d6d57d8c51fd3651d238dc5334ae6d6adae7170a733a557b170efc97fcdcb56df83970e5b0eddaad55c5583cba901b36dddab45a6a9191b9ea40731b9dd94b9d8dc848d73b24adc8e7f79f35e0e4bb754dff00cd6b4e4d5e9ff6333b3678ef02bf10e47707bf4ddaed5f77e2329e2bafb7f0599eea924e5eac39732749ef0b183a4aa9b7a792c2b7c2a3ae4237db5346bb03ec2acc3b500e44f6a9de1c5acdd88bda6a28d6d32fe08e72192d2a5eca64646061b1f627f89698989e1f9e122f196e51ea9d64edddd433f36dea3c914b2dbc2b69814d64317d089c0e6bad09ec6d8e677dbd7ca00eeb7fab92856556f5acf0d87d88b266d8eec5c3ff00856f23daab86df6856dc2dff0065f7ba9364fc47c6c63867ae04df4b56a3581e5c5ae8dafd30fdb731c6b57118a3e29a3b44ace2478585324901c82c923dad51eaf4cecd1c80398e1883c80681bbcf751dd15c5653309350ef74e283b6a0d7599ac1547379d1cbd8ab8dfd8b27997962a87ca8b2117d9eb08c9a435d8d5c2d5b0b1c2e76d47ea88db6e198dd804fe193c30ea6770c2b4048c13db5e189248dc23ffb97eff52ff1fe22e3f69aadc15eec6f7628f15b96bef0c14be1f2cdc6d3d6b0d7bcc388ea59b925f12d5932663b80e1d09fae9a37471ba803701e644ea58d7b5b6efb6ea27482c04d40e872ce765bfa793337ca8a987b566f2d85797baa95f22abd47cf72713f4ab40f0defcc337b965e132c0e7bc8315ac22ffef571eb5ab81beeb43df21c1ccb4c4dc3a936461cae6ef35c2f045cb4f2cb289a660026736db7a7a5491bbe254e4e1cadccdd853f892f074f1f736152f52ff823d4f5fabfe94579bd68fea5e7f52f33576af0dfe6ff00cabc4bf9a2fea7a6fc91ad47cebc43f97d453fe61fd1cc7f5b7d2bffda0008010103013f21422d196659ead3597187f9da5c45e8c9b98e22de7f0896678c6d495eca655f2622941ef0630c4a1dc87ecffde9692a8ade89624c4ca6f0a64c0f32f9717465d1aa7037530438389ec997cc17f225fc079f1172aec676917757d1823d9857c90d53ae040e3f7fa1463ee60cc52ac8070c5341b987885ed827998c1df48871e44c4cd3e6f1187c178f505e20d824d7ccd8b92edff9d2c0ef2f17de3b3ad6df01e793f04e6b64a01c1b84698f1661f66181c12c881cb65669ad8b62e0fcc6f3ba3cccab8c0e0d44b37b1343fee6293c45a1ca00c8cfb345ba79d4bb560f1822b3ef150f64567a85a0549a6456b5a12f72d37cdf64d7c4ed315386fc13323385c5c3058ad9d4c066db057e11101a368dbee997c620482b83a78c812bd692be3331129abb3578764b8cd4b489391bb551c37fc5cee9a03de99afde7efebbe2ed2a0f96581255554500e0d4c9f5096d3976fb4a5b86335bbfca65ac393f7b407e01243e339b9960bc6fc8213cbe39abf68ecf3dcab7cc6aa2d92064c697bbcc029026b03cc2e7790bc704b93591f4a9afde68f7d6ec7894aba28ba81404daadc1c5b51ac5b307e552b70cc1e43db338d34d588aa30f21fb52341a116cfb6826cb196091b95c57e226818b46623da624f03b4ee88c75563738a6585a2c55f6cce0b0fdab871f64d3d16691abd1f062079396045b817c4b916c31796625780ce74bf1a956be0cf81dc0ea6f726b5bcf22614c443c1fdc12bdf4e23734ca9005c77d3f1003321b778850d0e6521d277ee0d67b41ec93dc26896962c01dc86ba0daf7530038c12d2d4521c36b4972e66d21bc210fc10e8ca0eedaca3c47ba6cc915dbee4871e6fb3ee13e301dd999118a3c40ef059f9467698d1c9c7fecbe2d606eb007edcc25e3134164eeab410d3dd864223f03f70bbca45d17646c157bd861abc43a0b4eecab2464d5b02190841ac9be5aa6bb39fb32c63f30827200bead413e3f51525570b7c62fbc1f941a3fb90cba32ff81ee6a20da6f349f885e2d62c9e15dbc469e5b815101a2d70800daf72f116f6b3e285dfa061a9e19430d74a8e21817997fb131f56e2e6f61164d9e92a2f06da8fca0069b1a513cbc31e6a8e606f3b1e4e676f588fd5c25d3325ecd6a314b3737d516e63a6f72316ce98f2496b5b840dbb583bfd12bf042e49235692aabc5b193da998734e8fcea045715ef94fcc350f8bf99be197ec244c5cc13715bb988b611ed23957f975f8615b56b83f3295ad56132307c58c3ce2ace19b3b864a2d25f7331a60e8577078481742363430f825860856a4ef3474580d11ba84a77643e91fb8c9bbfee7fb42947ba69983a81d1440e15fb1e997080adda1c3bc7997c97f80c696ee7305d0f6e496d637c47db4d476a351d9661b9ad417799b312ca81468772f676941842785bf33f6200f242d664ee7cd9af4ca820f3dff000f71f1ab1b3f7c3f30d19b4964180cec3d4b252f045ac528d4c9d02ebf2ee0c44edf081d8c797b835c9b720c0b9e518a762793024a261d42f265a3c4f78fd164bf62adea01770cfee559d91bfe0ff51859cc866f0e1f247eedf5b2f4988a9ff3d12cae2fe52ee5f6d9101f16563f30a855c0cd6c2839bf1048eb5c4e6560c79c47e37380add01009d65d8af73ce56201a1c8c4b99e1328704f49df3c8be1a9ab39566f84ddf3faf04009c4a6fdc6abe53e4ee7726799368e359f1bff00b2bbe1c61fea0211ecfe86a661ade0d78c4e108924de8b72637174321e5c02327231ddd36a6e0dd33c66d52d87a978c27d884f3d053a53d724976e5c633972a379a7f09de21a10ecca8c47461182c3b3c44cb42af5e7d3333f973f33480bb430fb8c4c0705f87097118d1d2039c06208c540a5ab47b39364b83754386771173dccf4e239afa765c43ba4ba3d95b8860ec039fe55d2665dee257f90f2a4bf2b9ee1e6129bddafcea736aefeb717083bd279267481bf09605c2f7c387fb201411d26bfe32a1c3aff00a2094565514231ca8f6de6bb64c4a7d92fe60917e03493f6ccae6200c51343e426626de57941ee7c4487401bacb22a22714bdc3104b33e0fab666e2b0fe983900e2fc475f63ef24ca0e30bf51496bc51a5c89660604e5c933ddd36b04767b3f31726b4b9f8fec86edd682e40eefea11ad98b2e8130db90535de1e1c8432865b66bc620bcb37996c13c33c3448bf67faf301478e4081708fd043476a4d5efad7676f3030185e324b6434685af13de45b771a611d85bfda07d8cbde0fe219765fdd925b5e77eb060b0d9bf77854aa54b85001bb746f1f329386dfacc08a701dab55ecd7b997463981a0add353109916a34cf4ab5dcd47cce5d5e00a7670621c06b001b767c30fa2ddb65790ca66bcecf300144a8daefd985d5ed8603057941c540ef25e609c767145543068023da9fc406cabbfd1dbd4d7212aeb9c865c272ff00a3f32930b330c18d5157e618bf2a7d0861ea56308cedb2a041cd1776634b6b566dae4a8528b89156772d79a798e113c8a65f78d27a8504d5c3473076a2c7c859fdca873e618c7c26a5cc5901aa47b7f8bb9f9f9a3d7ed3f97ef3543f4bf7d07f4ff4eb4347bfd89f86fd3a7cfe3bb33f37fd4fcff451e6107473ffda0008010203013f217eb31ea21d1f43d07475fe03d09798a22636fa1a75631fa58b74b970ea174d3a33065c7e8004122988f4497a28784b25e8baa3e908c5b9c44350a8cb972daa9c51fa4e53c655c4e972a6a598351e99c03a06123f41ee96ed2bda60ea5ce6270823d748caba1b1097e82acd3a730a6218712dcf58b81633512e3318b5384e60c7d061b8d165d89b96be891751ae8765cc962609ccd3e91b66110c31aa9975aca588a8b99c4d813496d6284d3a318cde6f0974670f400386591884861ac3b74134ea63d6ae84174904014c6eae8188c5fe81fa062a07d2348acf403a574b8b1ead7a54bfa0898970db1eaa95f45cfa12542b310a8a41b100874b97d6a58a9415f5574060174632e54aeb72b2ff00c3a747587ab5065f5b9fe238e8e495a31970aeb417fe2f12ae54d662d9d2a5d741dff852084370448150e8c2547fc0409fcffc86ff00f848699cf4d2339fa7ffda0008010303013f21845d4e8756dd0f4d4f53eb674210e8ce22458ed7e87aa845f41012b0891311bf54e8fd0afa4d319cc0422712896c2184668de5e10e8f56e49afa2b08a0728f70a96dc215844656ef99ae0e8f5a0933dc5ea120960046d03a5c2e1d61898a6610e8f4bda257bcbf79994b294723e9ae12d9d697001b9cf47a009bf4705cb52e531d887a61040e8d19804090937747a73d371433de71473338d880eb195d01a5ea9a022b5f5aa8a4cd4ddac975456f912d810f4598042e9ae1105e926895261f41087d1362397172ea22a33139499b52d178f1fdcd4ea6d3461d1e9bc204d63a8597188742745809860c570747e9b49a109b97f45b9974101dba4c5972fa54a81d4ee46018ca3f414af12983a5cbfa095bcfd14c032c97e80c14682ae3a54afa329195c487d0296968c3a089897139972fe8b9aff0b47a66ea6d826695d695c7fc2f31e23b96ba0b2aa04eb735fe2f3155a54ab2a1ae8a5f424a0b8fd6907a0cc48e09710bbea1bc41c4b7fc41c4a897f41cca863fc6ce7e85a7d24fffda000c03010002110311000010b28b9521d76ced4e8f24aab446cddc59bb4e6039eae2c3f6de5ca0ed984c4d50cd65a2771c4f270177fc62705c85945cfd23e3b74872a632f54af0ac24fc0a9e0a4545c56a5f76179fdbec5a5952661ea845437d2a39a744a38cf598899e947a33e0c0a3d7844619e7d1d2777b8d307e989f456137b324f8a096a7e8525064f219c751d949661714795fbe2a618cd5a77c7e8ea504f9d9099bedb8153cf2cdb147d544d691ffda0008010103013f10506854780cccb833f9198fbc70a552fe691fd339d88b587128da47a3ef08351a71b5b9520a085e9be31114aa031c01779a81a0a133774e3110f2287cbcc426b5d832b6643c7787a3d5331103bd1110edbfdf4253913ef1a1ba74a5bb5e486a97e144a9881173b8466f12f750ed0004d988fa19163b5ba0377716042b7e77c7bfccb0aa5d1720732bdcf22684ed33cf69587445608ec26e16a5549569380bc63a7011fa22076a9f984438e8c4bc3558cbe1e825a8687697f7f5ea2ac5d45bec40d75c002e3ef80e1b42bd8e6081c34a033ee6378c8b35df88b900152f90ac7b9590c34e40b5ba8a40cee0185fba949ddbe32b40ca5e88c38e7266eb0c677b83659cc201c84fd1fdcb82d9fdca17bf4664b9eca9332d687c4c1e78d88163e022d53a49857ccaedba8a1debb9005a0b3be25e9056c12e2d3f71b4c1d006b8c62556b6dac6837e7cc5bb28a84b560cd1190f5121a377283525029b16b1b1c1dbbc0f3c41d1bb43b063333343299ca61366b609b8f5e084a46113d53f31e875ff00137ed37e65e1e8c20a6d556c28ec0434c41063616572b1c9365e36208dd12989e05bf8804c640a5ac059abbaa6565116baa1b5bc40c738aaa1a03bef8fbc5be1c263005217b3106d31aaf1b2a9dc0dec28d36b225796d0d884a8bb2778e546b6202f1844764dd322664505a2295c76798b2e3846c03fea3c3f8e222be9fb9aba08ebb08ddd4021b2df6c730ef90d18c5c33aed3b1b574536d12598840355656f300cd372ae04e1b0fdc4889c5170d601454775c3702f257f931135bbb152c378fb61f24b2ce512e861732c2de96e48aae624442f0d3c5fee0f045cab0b867145473663b17524cb6621f2661339b1b753094a4980320f198f1bfe3115fa9fb831e832782e50d2cb3793e626e82c735a282df0453561c23d910dd5cd2520b91dc0573288308919cd02ee367afee5e058997bc159837069618c59cf136b802a5a2d6f0f364434649efb7d573057ee1d06c06f5983c825532e5997d54ae5a3588f106286e66a4c3773186142b559c5e34c64b742a5d3f68012869ba076f98d4bfc187a0a85005e8ed40fb42771a5e100fc42f8166ec95cd3a8c930a0b0c14e72bde00a054d56aa4f7644b5128228692581bb292a59a421af32c0039293c931cdb02c46dc4b05d82f94312e89790e61fbc0c154a651f9a9502a80c2ded32e8d24e00ef0d5622f868d8d7872cd42dd42d9b458d5e8b35e2300b76dbebec8174c4336d2fc18af25fba191d2d9deafb1078627a0d478da28fbdc14ca7904e54f73bf12f4ddf639862d7eec6ce9396ae3b9c0076214b80aa640bb8e6ca98bb045bc538451e8d08200004e595a3edb823b202bda90bce20ddb1b45381f3128d44e5e1b2ba1457fb96733b08272a94516ed0c14f2c2bca9805b7144b261d2dfb28f0511be131ce292c52e76c41729abb004fbc153a57fd4d3a51c62daf062216798292ebf6e0dc2a0d113488335708de50f87787439697ade2ac6fe2e5af4d62d3821d66e36e5e0d8784d82bc3de3715d253adc8113daa6bb7845e5e5be25472fe055ca168ecd56616c317105120864621488aa30dfddedc1e212f225d5c048a94e28a2dac3c0d82c214472152e92e8ca908c1c85424b4b83d54365effd8f5052cfdd8a4046d1500c2e5f7fd448828022d30f41626c90565d6c547e1254e9d9e700dd23f0cc541f47c6dc5d0cb50969268009342ec3b34993417ecb495eb24ab1d83430538d7b7da270096a3942d172a4025ae4ad2b0a60cb0d99a80277c6334c33772fd9412295305d146cc5ee1f74e051c06a85ec6085e141f0442b793f61fdc565e863bf170721293c46654107b363fa99e01a14d8033009c16a770efe61c633b8d118887166d55fb210a46310fbb9fcc3c26737f01fdc7f6c2843c5568f98a99141750ac224a33084604df0fce9b23485ed5e555e103b4b93045baa2b7553364b692d2c9f3bc0950540d101bda54a314961f372c03d1925dbed656b1ac0969c6770002589f15b7ac4ce159b0c5b821a3caa327a1deb8874ce626330032cbf1b2644522a75aba17cd8ae1f98b7771313d45460d706596d46a4a128ab1200778ff380a55b591b63535780e6005bc908e681a1954bb65515a8aadb31edabc97f130f425a681966b38fba6a1bbd001a7d9830d5be4d88721913b92f7b886b339c28eff012f1828481eeae27c38dae682dce0d0efc465a84021e12c8a96430c10516a600b61528206f174699460e4c0797d6822b0145721aaed121e437744b630a6a8cca672e61e2106cbc97b9e282d09d81467b356cad45746d5ab0d469d164e0880469ebbbf3385c97aecd79df30691bcd7cc39ea93994f96e04e5623b83c6736bdcf83c4ed562c179ca0c67aaa016f085881684dd393556015cdac36fe73eedc05aeeb884f6f70a8023620edaf115991a9356ebc165a6c95020634624609cd85a730dde9b1ecee2c8d45a0480691c8cc4b976975c27c64177b2d4ee5d1ad614dc2a3c8162ec14717b63086e1b05555c01a22f3d7961a0d2ce25a7e03ee8c5bff408dc6692ec5f3e7f3142aaa94a9baec71adc4be4266539a1b5787111265db5be1197b2166c0a56bcace1f27cc5692b4efc4b9c556d1cb953cb1eb486ded70e89a66c05b6eae0168b77aaa4d643c1b4f112c2ae04a052c52eb3c401bcc1e10c4b060c09d93b7b97270bd0da6a2875a0dcaf41fb4b26d2a90f1c9f1002c55918c3fcc4b49bf889a46f9311ba61c58dcbff0033ea0015828a57e13ea266d1e2571fc32d94611b8b92be4863aaab19d6791fe2294f7099ac40ea0d6621188d15314d02ce51225db22191ba499c8b66fa5834a1d1d3838b9c464d03e159fac788e569c2e4908858daa517111a41b379b6e30ffd8e845d9c2c57a0bf88f0a8db654a89ee3b97d685c9e5e61754095bbd64f1daaa026f5d414d5b1c76d904e40e16bc361918254322ac6707037d9e26240bbbef38b896203988df0efc12c92464171e3692b925dbacce0810dba97f50c40934cb51d8a026a1c8eb8ad0a2adb547b2614a88015895c9f70e2012c6425c8b29d882cc57486105df71a6012801744b11323bd0ac844ed018102ead09f76e2d2ec1764cb8c5157362cdc6b8dfb31c3589785b9fe48545a0f8b33e18608705d851c6b37d3663479186cab3ac2ac1e1d966a2a78c40c80b2a936307140be22df0b1a86952af082d53601952d62015aeac6dc04f382ac8f4360e080694e5c4365a58929b30e0fc9290e87dd8940616b2b81ee24f66acb61f0979f38994370da39e47a74deda85d21582c369a957958065009791334f30638e5165817597b42aef74208e8b9c8d33b222068430e71b2601a100aab3b9a5dcac34a0ceb7b3f69590a198e4008f9a63b806d90120855f0ccb74201ca7977a99f0eb69734b2f1877e63b2ce5484321a536f7330e19e65352a97bbf14f710ef11ed24e8416edbc66356cb42d54a88f0b603ca3c352b10ba851043db88f160a6356219fe86323f56b1a25ad17c55ca3c20ae3397d920382a46a059704b44b30ba229ba32a455acdb28132d359dac28e4d951d89c800c10e0b0859c11dca8efba5ca2a1ad77c836ada5572c7602ddd6531075a441ec1a3e2562120fbd380f9cb182c3007308dfa8c2b16b359439f371e2b63696b548ef17078a0dc552a20b60df7d4b0cb51261547da99bbc4a289cd9fea6c2b51a298b8346cdd5d2ce288c0f805492bb284a0ab1cb2dc94779b443dca10dead55bc855fe2516b897b80e42c7d8c0654576356da50b9f8e83fe4fbfa53f908fcbfd136fac6ff00cf98fd89e1fc32fd68a135f6004fe6fb23b4df394fe17b67ffda0008010203013f10542c35f10f558f41e8ac8f35191c333a74a98ee5cdf43689c4eee8f448b1666e2a984648c88ed3a6b1dc1d0ee61899415d1e8971186ea88900a42ac6222660d972d6a731754fc918388ca89c4cd2258268673205245e260943736a1bbff7b94ef8e937d648342f32a0e98960b2ec46e354329ab001862a55732ec98800f8f41b9b7450dc052979943301f68b293980e5fc449c7f9e62ccb2c6226a2e20123306b999b0cc8741b833d0c2e10ce9ee0c6d07602606a0c716c7d4aa38c261659618032f67063a533486e1e82b6c31e252d082ad09c260ad677cff0038811a8dcf89296a50d5c5359881ce230b0f6b81f63a2ab74ac7409ad9ddea39507244ad7da2948c98254ca1a94b6ca71053b25d0eeea545e21d72743d36af572a080c463b44aba772afb13303117df71f896a370520e7ee567732e6a6ff0044d2382a3384908eb2415d134eec96af8a39d0314580ca625424572cb187794aec8a6d174ba3a54da0b58c130e84ee84cd3a6065b5d46fc748eca1ccc0ae8e28c14c362f48e92a04a8a61850a8ef108c0445e8a96399637174744159c731442447a54de3bd4017cca498b32f404948bd2f11fc047118cb2589ace496f4f4046e6c0a262519b65c491732c61094a054d41a89f4265673ae5ab8efd08e21cd42d8aeb98891c2641b6574b8c65cb9770da78fcfc4abc31fb6e1febfd4a96e2002ddc44cf48dc59527135821d2a5c49513a62ff3e62559c11e066d364d622166e05a815d3dcba30e95292574ab61929c46c4311e12d54d904d26e5e105e632ac0a2ba9d1c30650c3324b9bed162a67799efef06304e1825ca198bbc074666e53d6a6a0b8460cfe8f72f1ea15425e278841a964b9e7e9e3a3d1e9f0bf9de71f5387a3b1ea72fe711e8467ffda0008010303013f102398212e021d4ac4c2062e18a56662f83a1d0b3d0994618e8ba282a692f10592afa3b388cb919e843536eb7033096c08335140733c928ca460c3c54f7e860626dd5e2a11bd43c4ba84c5181661ccb7d334aa9530e4179cfe26105dd066abc46f31d2439eb621899c18e198a9292a73b2c5373b6bef2c8422a086a34b71a86f311c7ed1bf074137e80b0798080c6591d984c6aa2f033950e0edf6982095210e60e6311e196610a6442fc9741a9bf4c010d7bfa8dfa57a89b445ca549ae53dc770732ac954c73a0946231e2327cb2748c044a479875b25623be9ad88b87bd7a8ecb6436e33047517ca3ab813ba953788911b9b88e6bcb30f6b0d459e9b8d616962268547eda805f7466a60dcb9e4fd9dc964610ee1a6216996946a215144f30c26825cbbac751e9e6690e8940b6da6b997017bb3f981a9c9af3e658065b3d4ee0712d85a435ae22c4372f634c4932e0e0f51fd89e10218ea3d3222cccfa189f9fdc519bf70c24c2e6fe6168259ebe4d9e9fe13227ca33fb8051fb8ff00d81287b3fbbfe472061f68462a079618ea6dd034be20cf40dc54fcfee61e8515c44778c1326e067f670f8654f4185be67a8203bc7536e828b82e1820b52f1e1fb9774b17162c014dc216e6f07fd8ad6e9092e28803a910a1d2083884b5c471c4c5b862f0c16c8b18e7100676fe220b7c7fa973dd816608caa5b121822a87e66a0aef70847c389a485ae195993e6527b9b350cc36f8d4532625036899827a70422c345c452a59ee2e812aa0798457d54acaf4d430175cb0693d2f40d1d280e8fdcb96441eb7060c1a25ca527cf4ade751153895e063a122f12ee12b6c3e9a874c97f3fd4b0accaf3d0305b0027787c908cc5e98571d4e952aa0f45a8e32e7511566512ce63908c831822b9471c4a1a86a25955892a13734f44e23692059b963789569395f10ca307222a225b145312d29b86a183d2a57469eaa88bb63fbf50cbf9f997843106c1393a0b46070980f30ea4771847af8eff9da1a66937fb9fb23a9cc77d5ffd900, 'Steven Buchanan graduated from St. Andrews University, Scotland, with a BSC degree in 1976.  Upon joining the company as a sales representative in 1992, he spent 6 months in an orientation program at the Seattle office and then returned to his permanent post in London.  He was promoted to sales manager in March 1993.  Mr. Buchanan has completed the courses \"Successful Telemarketing\" and \"International Sales Management.\"  He is fluent in French.', 2, 'http://accweb/emmployees/buchanan.bmp', 1744.21);
INSERT INTO `employees` (`EmployeeID`, `LastName`, `FirstName`, `Title`, `TitleOfCourtesy`, `BirthDate`, `HireDate`, `Address`, `City`, `Region`, `PostalCode`, `Country`, `HomePhone`, `Extension`, `Photo`, `Notes`, `ReportsTo`, `PhotoPath`, `Salary`) VALUES
(6, 'Suyama', 'Michael', 'Sales Representative', 'Mr.', '1963-07-02 00:00:00', '1993-10-17 00:00:00', 'Coventry HouseMiner Rd.', 'London', NULL, 'EC2 7JR', 'UK', '(71) 555-7773', '428', 0xffd8ffe000104a46494600010200006400640000ffec00114475636b79000100040000004e0000ffee002641646f62650064c0000000010300150403060a0d00000d540000138500001e2d00002e5dffdb008400030202020202030202030403020304050303030305050404050404050705060606060507070808090808070b0b0c0c0b0b0c0c0c0c0c0e0e0e0e0e0e0e0e0e0e010303030505050a07070a0f0c0a0c0f120e0e0e0e12110e0e0e0e0e11110e0e0e0e0e0e110e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0e0effc200110800aa00a003011100021101031101ffc400e00000020301010101000000000000000000040503060702010800010002030101000000000000000000000001020003040506100002020103030304010403010000000001020003041112051013063021312022321441422333152434351611000102040206050a040603000000000001000211211203310441517122321310306181a120f091b1425272233314c1d1e1246282b2c24305739334120001050001050100000000000000000021003040011120105060700261130100020201040104030101010000000001001121314110516171812091a1b1f0c1d1f130e1ffda000c03010002110311000001caf312961e2c794ea714f41bc6afba559e80c849650f56d215ec1568d875f3f4ed382783d93f49e49e49f1064b8e563031c9bb84baa56514cd78e188403d8609d0907b0dabe4e87d0baf05eeec5d03e99e49e49f1561d8602d6594f96aa65a969c6fb3eabad1a6f0469a8522d9999390efe57b0fd2d26f77e3ea0fd0fb27827c498f4990ca4e45a155db46a5ccedfd17468b96be74ec9d491230b5db920bb1dd3836579bf6bc1e28ea19e4ec4f8633b152141f25be1d5ddf4c713d15cada2c9af0906b95d660b025aa05983cb2dda7169dab08117a32c863313e1aa14a90a57cead66d9f5fd23c9efdbeecd67d7cf9d9025b2b51e40d6ab3361f55f05f96dfa312f2212ac98d80cf96b3a90614acaa32cab6fd09ceedd66fa07adefb55d3a9cd198fbf1ea323cd386a89709b39633d30c02b2c560cb715d295224315a8674ed9ceeed12da252b78cfb76dd9cbcab17565616e19aedd1e4d63174ea9d1e2aeb2989a02ca2b2e738ae9882417f46dad51d5d529b3c4d04da1806d37a9e7c0cda620cc5e89e529d3652b6f251d9473208c0174ceb1e82202a4301b8727d85b8656ae5633c51ac77e42de8a967de1d66f47175aeacdba1c50593c86280675cd33587a92042a1d1b276e3c3d358afe3c8eea1601addb4c0f553736ebf55555fb7e7535d444cbc09ec90326654b98a4c10b0cc6bb4cc7d7eb1f61769cdd367d058591aaafcb6da816e3d353ef79906ea2133f09ec8294ca9498b18ab3346314cc1fde57a9d06149aab315dcb1b8bf3c8ad15537663d9e070f5c4e3c83959030cb54f7239addf54c703d49373bd113568bc9101773767b4db8bc502536e47d5e1836d5c3cfd07200362536ad3c00e2b2f91ce33a5b6ddc8f419b06b5b0bab819e72909a0bebf3d375f3e9bd0e544e9e99c48bd95465d9fa06a859c8d0680b2efbe727a345b6da0e9c603d7ec9a1e6d9a254cf2ea2b5b3929f44a9efe2cf0f51878c9f1e83509c23d5d2ef95e9336e8f275ce0edad3e9afea5addb54c1b56adde9a0bceaa75f2eb1b355ca8b52ebc2ab565f21afe37b2e4ea3da768156a051f3bdfcd5bbb83a679cf411ad8af4147a65e2b6b7e6cc7d54e25eab86d70f6b51c3b1055b1e68c4d3673eabceec4a02d16ab5bb988a2c1817a9f0c745bb72fa76ce7f4242d4cd14e914d79df6f9552db8f64f31ec34fc970e5eb4bb1db67ea2802cad8b9cc4fc1539b327edf9ca2f5bcfcb077217076678c3a86353f40793f7576a64862e5b564b7c80486191b11f954126b9a28c3bd278b82ea7f41ec9399332940b7e7f4376f3dec9cad654ae12ca5740260227b2390278ab59a056cbfafe733ce9e1874f3fd8a4411136bc3bb77f27dc974760f287ca472eb85dffda00080101000105020b1122894e3ed94e7299df0532b94c531f9614ccae71eaaa9e491913c95695a7c8159f1ada678ef9163feaa3abafd2a91122571b2dab4b2ec7a133395d1afccb5deb772c71acb18f1d95a3e35b59a325a818b9d7f1f7f1f9b8e32782e6f0afac7d2a04131deaad32ae1befe4b16997e48bace3b8ec9ca95f8be73af03e1b677078ee1699de23837af2be19b466e1d98c6ab77a780627ee5426bf42bc578f63f6726eb19802c7c7bc77bafc6f1f4575d695a8044dc231d63d2b68f29f1faae9fe96dc3bbc5b2efaf92164ee882d1034d60681a062464ee16f15477b2b0294aeac47695eed36982b9daf6d844e4a8ef63f239056ff001cbbfe5b72004b793d251ca0329ca0d16e10340d11a7214db565709a0c9c0fc7136a44b526f4d1f3e9a864f97f198ad8fe5581906ab68ca4f31e17b195e34fb686be3b163bca9a791b2b9573226d8b1672f41b31fc7aa37e7feed1c763e4f9372ac71fc9b9557e339a6ce9cc53776aeccc4c638be4fc7a2f03998f973c8b17bf8bc2e053834e4f6bbd1c43374db1522a44a7bb38a2d87cc7254856fdde73342f13cbdcbe3dc7be2e6e761a64e2e770cb4d9c7538f59a3029aec289750f7e2e365f215ad7971a3c3d1609c5e75dc7dd918cb7e66761d2569c2bee0bc25dba9a0f7310f731ae4aaa94df8f03a19a8d32f0d73cf2fa7eeee84c731a078b1621d0d805992853229c6ed5499bcad54bd19187d9c1e6314237318979cdc1ed1c0f20637d76325f57238b52e5641c8bf7cdf098d162c11670d7537e3e6b598b68e56e4c0e35ee3394e2933260f19c8e3db834263a721cff000986ad755ced4090dc81ff0098c619af4315a2b453165173d0ef7db7b63d3fb0332ce678d4e2f91e6f96989c472f62fe8f0f8a2dc5c1f22b3f4e9a6ab350f916772f3d4c33588d2bf78822ac034988e52da2caf22abf82c2b6fa786a2b9878b858c282bb5962e36fb9bf2d7a6b0985a30225729952c0b34995886cc7e3391d8ed8ccd130b218d1c3dbad18894cc975ac50dba64fdb90c66e9ac6319e5954aeb94572b59b66c50b9745744ca57c4b787e7d367fbda006f26a54ff00f50865b996644c53a4e4716ac8b1f7236b358c63c222d7295d22cc6a1af7ceb07fbee5d0ab6520b13231eca9db2b222db658785c40ccd4b06c76158e670debf1eba87cfc1dd019b758f5182b262d32ba899571992f014aaae6f20e2f20f90322abb155a5d8e25f82866171e03f1552d32d752d453be799658a780f13cbdd3370f8fb0378fe3591f8db683fa731f8fbaf6af8cc5a2535ec8f97dfb6ff00c7c9aa366078ff00939c5ad2fa7290db5bccae2b234c7c9ed5f5f20b31318957cb449e4fcf0e4723c3189a77875b2d7c6b71f3f7aad78570dc58568ab33b33db087db6ee26ea52faefadb12fc3e4f270de8f286b17139cc53398e3933d5f2ff53178ae7b1f07c7b98f21c9e49fba44f0bd3fd5a6932a916282d8f6d791b86a958bafd65dad8d8ff6d5626b19769f28c12991b489a90a59a265dd0e6dac064de61666971d8be389d9e1813a7bcc9a77aa96586d2d2c7d62a8d54693432d0273381fbdc776b2428758498a67b1802caf5696f0994060a0af151b4e8df72b2e87f83f92fe43a5df9ff189ff00b99fff0070fc0ff1ff004ff4f15ff5b98fca98237c096fe7ffda0008010200010502ea4c3d7481611364dbd15bd4db00ebba6b34846bd10fa5b4c02334ee4d759b26d3039115a69147a23a596403e8d7a0f69ac5f44473ec603d749a746822cd7d012ce826bd374dd37741ed07a225b00e866b0c1a99db314c226fd229d47a0ff102ac3b67f2cbedef379e8212354f8fadf5d11e374db041f044d7a08cbac1e89fc8c10b41a4164df184d66beea60f4587b9fa0c51098c3a2fa44435f45f78566d9b44023741f1e9b0826b349ed358628f55be7a859b634107a84ebd774df37984c595bc1e8b36913dd41e80f53d04a1bee53b5baeb359acd6178efaca3dd5bd887e81a13d0c2d31fddb23f3ee1116f9ba6b0986c9b8cd7a63b68d7e3ee854ac1ac1675668263d3b464fe5af40f37c2dd35ea0c43ecc81a36247c661002a026a4d2ccd550126b2ff00cfd2c77f46cfcbd2adb43bbea263dbea9ff127d3fcff0057f3f47fffda0008010300010502ea8b00e84cdd0d903cee4ee747afd0d269166b19e13d349b0c2b01d22b687596a7a0bd0bc2d11099da9a059dd9bc18503475d26b19bebd60309e955519a1d7a69349ae93f21b348fe8030cac7bc6866b359acd6218f1cfa557cc69a4d20acced4ed4f710fb87f8f469f9266a62c2a22e91b4105cb2cf849b374b1369f413d88859e207336fb23e87d9a76c085a7c1552459f3f5e3e9baeabdd27b09be131fe5493194cd218966c967cfd622fdc82111521d63d260a488af0a42350eba43e8d0fec3ab4f78c499b48887a3fcfa2afa45c8dc636b0590dc26f733dc40d07c3fcfa43da2b6a215d66d8758dd09f63ea57f8cdd37436c2f16187d3092b1f69f69f33b73b4276840b1a5957b9f46b4dc6f1a1acfb11089b8c06080c69789626e5e9a4dbd748b49312bdb333d8af52b152345118cb3e31bdebed068d8da4d9348b593131a6d5102e9d32d355a6fdb0303d4374669a4b6cd4e28fede934d63d50a40ba4262ac3d08d4589a1562b172a25ea66aa6359a0ee28165e5ba638fed98a67cc23a01f4e657e8a0fb7a29f42c4dcbb7ea12bafdff8f4841fe5bbe7e8fe9ae7f1f47fffda0008010202063f02f49160fa5eedabf96aea28450461142164cfc95fffda0008010302063f02747991e78b1b08f53c369932f7a07322d7108f857cd355f54d55c530f16208f3a6f59a6f3b17ffda0008010101063f02e90fbb2609c972402d6e80269bbf36aa63be116d999763b16ec2a6c9a76a0cb84060d6a0d735a3011613fdca398b545585eb7bd6cfc5a97372f0f79ccc7c57db5c8975b32842219dbb107366d381ea5ac640d8d265eb42e3db33aa24a258480ed6aad2a3af4aa57018285c6a2ca7e59102102c24d98c693a8a6d4e80b82ab6f18ec29b94e7379e240604f505f721d914ea1d089c49dd0a9e6736e6922254409685f4491a0addb725cccdf0850a57008a26d4a1c28daba20e6e114c6b3ea3443bc609f7b3d6f7c06d35638e20f5173923e6526016f71050d29b773022351424a407910722f6b7108444b5acbdbb2f85a7ee5d6c0ea8f5040d2084eaa6eed4cab08a14a80c3ca301bc2683234bc70c555002e35b179f0974ccf94f0f9b63169ec4d3a62a92847a22a2e7436aa5ee2760506e0aab4620e84dcdd9f684084f3ed891d9d115158a99f205c689db313b1011e19ae6dec4f08d2bf699734e82705fbbc15319a0e7c9aa37dbcc8681f8a8332c4307ba9999c9bbe5604694dec2ae66b3cd8e58e838984d38d805b64cdad76201ea28855194134680fa0ec8a6de7c3961b109df636a9b3ec9231ef5cccc8a5ff126173a234a2d2261739960dcb70810df192865bfd790e38970002fb836b9775d89b7c2a9770eb43259b0ea69f96ff61d548a7db6f0b6006c87506ee5c0374b4b4457de0b66dde73c3e9ef9a67dc9f961b3d2bf68ea1a253c07eaabce5f75c860dd0896880d09b563082249805b8e07b57e28b46ad182634ff8e2ea8ea443700d68f0ea2231594d19730b92d8a9bbf503a149d7ad065bc02e4dbf997bb300bee2e5df9da4470ee527c91cadb05cf70d52f4afb8cb3dccbad9cb0ef432b9e672de64d7fb2572c98b221cdd8f92754f83d91a9875c53ef1c5e63d4b6d5e607f2819c60e1a912251c238e1055366ec3f995575bbcec4a888b5dfc2872ee1e5ff0014d5770c359289cc5f6cb54d1cc6558e161af1cbba453131d09bd8c878abdf17555db3029d72f3aa7425d89d69bfe415b3e20b9b62d736df67e4a2ce5db6912a869d4abb99a6362d0eb74b5077fb0ccd65cc81171d1ded6004fb1632a59911bb76fdc6d1553093063b532c59686dab70000ec5e809efd6e3d61b383c1aad6dd5debee069ddb8d3a1c85fb4eb9977c62459716b4ed0846f3e990239afc141b08e98627bca14e1a94d02701bc511dbd65bcc5bfaac1e9017ccfa6fddba3fb97cb9e91b1420b7df258a8a075abadd4f70f1eaf9978d36e348d25ced411b0c106db14f78c517b7e9bb11da85b7ba0061ac28c4454dd05b8629a1d21890804ebd60865f75db964da320e7db3387722d70838620f5301c2388f62ff5d647fe763edeee89bd3af0e1748f61502abb71537286283a13082add80994ecf4d978670e77b436eba9f5410ce337b336b76ec3170d7e5c062aa7328b7ef3e48da649be27b4acae647b30737e263a29b98b7bd6ee36a81c08289b3ff0059c7b94c40aed51c42d4a3a107ddfa7ecb3dedbd89f65dc5987b6d0d91a8fa95e648861186c5ccbb6018e259ba7c15593bd3f72e7e615375b03e1d10b4d9692700be71376e7bad935458d6dab7a69134eb6cfa6cf5f4739b8d9755fca6450c9e66796d1ad9fa2e6d8787375854669b1d4f18ae6654f3adeac1ff00aaa2e1a5c310ec428c7600866735c266c67e68ddba435a349c17ca3fb7b1bb6e1a4bb172bef97d48782a4aa7bda7b14e0e6ea2b82976a060a96883750c154ec550dc13ddaca9e09f61fc0f05a7bd3ec3f8d8ea4aaac3cb7d5dea199b6091ed325e08537683a9d25f741ec1987ef5a783a86051b762a7dd2206e3bb752c9333572bbcdb7c0d9ba11945169345807e968ef44683eca0ed2f7b9de3d12e21822d52e891dd58c934053e866740ddbdba7e21d1fc4a11d9ea5c5e9daa974c68f05127447f151f483e7b5547ba0b2d2dea63e95158a8e96a97950d6aed81c60556fe26a2e2d2e60e286236a13db1daaa1e7a50f5f715e78c943ba3e90a9b7c67018c628dbbec70bec30e4d380d65cacdaf7580782868e8234a9f414ddbe4e63e177f4ab9b50f3d0bbff05e7a82f3f793ff00e567ad66f633fa026f9057ffda0008010103013f219b5c723b57842b30693c8df7563a405326cdea1ebcfd38cc411769d18e67b9980028317cab999a2d8d8cb9568bcce10d161f94d9f19ef8a37f099db1b084ee6588d2e9823d00ad9fd464e8d876812ba27506a0297ae6235c8a82f6da8f598b84c007f313f513013030cfab8f937f957b99b91c1e198590abae61f0bbe19615d8dea6502f1efde632e0e5de33b2a3895df79fd92c71967e03a8a54ae952e4d62641b0a7166650729c2a2f81a2668a8c0a5f6d12fd3c932e2bc75e25e2840231344340c1146cfb4b762b65798571434d47588b1f954761440ff2556223f5d2aa1c8f81d41e953240dc506c1b8bf98fb454ecdc0832b040a94cf04c1ba0a31c4a49a0f07487d2552b25775fe09cc5a264e2ec656522f4bc8d71c6fa297319cc185a56f4c5ebc41e495f6d99454318ba594aa8c7e260f6042f97da5d9233290b63e4585155739682f0df0c2ab70f89b3e67ff16568cd7b205871f88c30cc93b712eed3d618b9a895cbce234db0afbcca8638f99aa6e288e212360032c5d65dd920ff0091049c17dd99429a6e05ef30b0d8fbf65498265898c398e16b12be8831820659d3ce2fb8f8a7fac1063472a88bfc4aafb21e407618e6511cbb06f716821db925f7ec783d9834c56a2e8bdea5122b0c40bb1181737b7d98871ede26c4da8cd44ab739d02e99b3a0ea5c657aa358ba5a4b51f040cec97c12da9916b5160c58a0a8d614e3d269def6ae4a83f5129e5e258002ca8c9771d6871a399b3cfb71e5dc27840a1af7adcda846307f50c889b0c63f0ce6707dc1a7e894acf46b39a6803bd0f1752db00a30de41e65c7650cd50e0c4aaaeb01e0d7ddc13be4e2d5fe206816291363912e9b7b8522f3e3d33e9be150322952721e2516d1c8616c2bd4674b2bdd077d18e031e65914528b4324c42dc69ce60f8b98e8f686ba5e399f22aeebb657150b7f3185e5ab856ed0841ff005176f0b156f9748f546a3bab812f7c2a88bf3a9be33fd88f572d35fabc11826c9cd7b5e88f42ee8de3c74b8a8417fde86e5cc0c8e5450ba86b4b73daa5adc6b7acff0095296bbcaabf641e5081213acd03f3296edeafea4c1ca1209d36c145b4adeb08561ca7ef32452d1d472a6e5f0fa0e537ecfb8cd5ea5d5338fb435df6ad89f7229ace5b64f6330919c2ad2b79671a8b04202ca8d8f6a4a8ded3dc9a4645fe72c11fdc366a63250d456b1794ff00ac3e2d9f9e9b86e2c4bdc11d350bd1686439efeefb1088d7ef015e61fc364bf83c972b49ad2426daabeeca76914cdd0f28b2904340474b860f9fd8f0474ed88fcc654ea4ba625616e603a2d6622ecb5c87f243178a2d29807987d3ccb0e7b89cebef01acbd63c621055a8971705cf737f7076cfb0394ea304e18e3153132cc84ac8612beee6b2d1aa7973381203968c9f6c22ef357aee237933de49bd7dd2ac08fb4c73e16e17753c88349bcce7ef382c7c2a1aef0a19f58089d468f3052668314a9ab59bb71492c23bdbb0f726447f42fe62e1b1c467f65bfc4b1498e3508bdbbdb1fd7e467a42ee5f4ac87a8c2b0a0a51a63d937db0f30e4f3418652e961119a8e4623c02f00cb29958af83e07301ba0f92077db5da1c3fe653a8db008d31d4b7cfed39fdc5d9de786e2eafc8832f43749982e4a72f3de66408a78f716dae1fe17124c5979da7c11b087ed9f467066b09be6e097c27f3bf12dbf89dfc1e60fb3f04cd80ecbdcb1e0f5b67ded8c29b3808f7b8cd2ebcadabf7155af786173b3afe2768e0f7379978eff00a4b635cb74c68ec1806211b75707c6a375a56321c370391cf72af8954f4576ca7234dc43266ad00995f8870784fad7f790e41b2053abfdc2c3c453f1181ff500808d888fc30250d8c0683170d7e113c7d8b0eed5aa92dddfeb235a10eae1bb631e054d8662ef53b0b74391e1cc13b2cd6d72b11eb987f9b11e1577878b3bf10df68bd74cd7b7f18e529eead3f451de69ecc77f6c5e3fbed3355756df9fe698c73e3c58d2fa589873777996f30e4af32b1d390ddc2a3e6224a066fc44fcb8e20481ab802c47478254903d7a2ebc430394fd67f50e60d31e32dfccd55b8b6f1feae16eeeb652fc3ed10b508b78d1cfccc8fe06f9a163eff78859cfdc1bfbd7dd015f21e07f9fdcbb9a7fbd9416de4999dcc3f6e3d4ed36356afccb1434567e6669f8f72951a0a8a392e085efb3b403db176c87f90c7aa6d5b2e9b232c5adc396cdf684a005a7872c2641adf95911eef15bfbb317cacb556baf88903b72aab00d7dc9790812d38b9541f2c3cf6bf427183c099ab7117d8171aada3b4fd3fd4fc67ee6b0d93f4477f4fd2c9717397f47f4eb931fd7fd4d3a5bb3f93d4fffda0008010203013f21972fa8b80f49f46d151b98ff00f0b971255c246a212c256058da0894d4c39ffc8694c339e8b42e21a9b0974de0dfd552a54245c4e03a6054b25c612e659991c4fa6baeb2a85d206a574315534b9afd15f4a952a3295349cf482592b0b4a7330ccd37ea4be97d54544be01cb2bc4b5cb409138d739a5326653a1d465f4b994f1398956a5dc5b186a590336cc880ac0aea3e962c444cc50560aa199c55012c8b880e6bd4e95d582ba2fa146e012ae251a9e70506c074ae87d58f51a8065101c112733587d352ba830c3a022a83677985c418953543e83a547ad4a58a18d4ca1594e9c907a1d43ab1fa3d44845843a8a690fa6fa3d2a2972f5c3335d178c2d9d91933f48972fa865147e38742a211ca8eb30cf696a7fe0204453de2050e49de97d448ba6288ead0d496c03d14ceccb371ea0077b47aa288371844be96c0ad1b8d73b8ba1a6390bc47a3d54232d0c0b083cbef37443cf0c4b98a68a2e65b9e87942274be8fd38a2beb62b7f4dfd54eca9bfa4941706ac4b45b5e95d1ff00c6d4f5d0eafbeb99fc7686df433fffda0008010303013f21ae84b2012a044931742b01cc29d4bf3095f557493810eee8bcccbbd2426845952e28d9ff00900974e13e889b041b13950c6357d57d434dc332c63115a53d045a1086494a9c7d372fa4b32e808094fa1969433066095f4df418b7d2bc4ce2fa1130dc31c31173d3085e84b97f40c3735478889e1d0b8a16c4ea1b97c4e27d024951952a11c5662b5e8fc1c488e28e1a11aa862b0bef1abbeaf47a5cb41a304c3a1e494e21d5435380e8d64112de62ea7e8b98373725ee3339181b5c4644ad2cdcbfca05b1c5f115bf43f4ab539e9e62c1704cd640d6ce5946660a3f55f5476450688ee319332ce20389c7fdb8983b7f9f889d0c9fd29f467a3b5ca88b033770a4ba15dcbe9b68cbe972fa90ebaa5c04a90aa5d0dc13663f42ca95d0e9716ea543a14417ea00430f4789625f57e94aa01ba96740e6ba08c344086e76a7df44e6a543a012a5989c31442c6a241a890594f594cc5b3f227337389147470107995704a10e83a51983a81895738c8e30282667b98408812981174afa4971dd2ce16ca2de1f69cbc5b8980b8db2c2a8c12a53d25534e8b9eb30832ac63d731b95d2ae5451ea3995d5eb71e172f2ba3d42b51f6dcaa044e9afa5e8747aa7ab7c4e6308c3d669fcb8f47319c4ffda000c030100021103110000101c5f504e69a489218e081cb42618b2d03c92dd722a7966009225abcd0784a635dab70b0a2f20f56a05e68b881fe46f206c31909f5ce8003111b91505670ad9a419b3ecf594aa56a5c9d688391e96bc596e7ef02459066ed416dfefa764badbc237465fa6902b8a10190be321f255755534de442896d8ae6b82f8c68ac603af42a44fb6828ac7bd15af7115d10dad285aeb52efb37315c90dd896c01c1f92dfcb142268beb8ffda0008010103013f105c041de0c0ea05200ee25880dd1733000804d171b3d543c03c205c94b03c71027ba0ab4b0a769dc95ece458f8a1bc8e60da30b36b27274b0d47547b8ac1360f1af128b1e3950051b6b1b4a975431443489bbab6acdd242dfc565e1aacd9786fc464d360e4b32168b2d460dc81a856984c4b12a03989da5a81de18293450a5aae8f52a6a8b481e600a640a805da9aecbc15be47a9c54e04b8cb84838f42b68b58642d107de0b2f219b5b8b9b2d96143be619c131c95f11ca6d02d1016ebcb3231d931a6060cbccb57230a61033c71df31f84c7c3b76340d8d7037171928b69ba48b67e78fa213888b82c600146251e843602292eafcca7a6aa6d6704340ecd4113803c0e1335f98cafcd0c52dd01715321edbbbe4e6bd4bbfab4b607acd30b5b469dfa39885e3462e86b8966d998d36b58e23b2e15557b39bfc4ad5bf376b755a4cd77259b2cadab6cd7282b85621100c98a39cf31816cf84f262397115398c1962fb17513b52cc5130f94104b4e10b6dbe6014a40daab50b4b0a17953fb87e6180028d9881001d8251502769535e2612a120787bdf861211f9044586aa969ed0af1908cd084baf530b756894b4a52afec815b999691fa0be9b8a70c11077c66b350beaa5c16dd5c6de8d092eb4298d4ab88a39a1d57988655e01ce5bf99515c41c9e53b62075179d1958c0f371eb63ec4b98291c6b4e1b712a84651164fcc2f4ca94d2d2a5050b8ba78825a89acaff0076c4b3076c0fea60b0336c63d7981dee85723c2d4dc88f5cfde35454581a5fd87896074273699598ba7cca64289ce298953b833e283f44b0aebd255f251f88705c8670e235e1b8d7ee1949e063ee41348888cbc159820abcdbb7d9af980cb28220ee0598266f68a1be98c4ab43c1a057d9f11f2115e2e2c48be07881cd06abc37181fe1977ec989461cdafde5c1b8b58800c41f4960d3aa7a69973b03316c32098a3a152a1747cc112355c438a3fecb33a2f947f8dcae739894bbe74711aec2d24e5bb312e750942032e91eb6c689dad140ad76866b31a6e538f6895f2798820b019a8a7d97bb8f21199b08a40a688d5d9702e505317de56c8153e4c311128377f89466ace2396a428852191c4275346d5aaa77a8b90b3c1226913647867413c20de338a94bf86bd54a6a60ac25ba8f05602806ad586921b7c00cb6521ee2e7f2298e66cf26efcc719f292b3642bcddcaeb36c42700288ee83e20d7dc1458617030c4f1db782d7756b0fb9994edd8d0f09a80050e2011a9837047b43b1895e2762505befa34f94c1732490c9453fb9f72a45649520834cb8cbba95dfc5caf2c51321b027e08d0036f4384dae02269883665c1d9ef2e21497bd1b7cc50f6a8816d6cbe60255dac237e5f9986774bc84f3784f70f02cef7f17d88b9209ad253b20914bbd5cc796992a043cd4a7780c00dea01425da9682118de96326a41bb23642b6e2805c895815bee40655a58dc5ef00f8625aa32d92872a795dcc7a80b23ab42a884476b5ea294fda3c7deb0641bb379b8dc20b8e28a5a3c5dc7940a56a2a8e131179d3007daa5bc4255442dd079706ced1e1b77dac16065e2638db8e0bf014461cc5265f98a5a99f44283c44a8128948a16025354ab4aec999b5a7601c8529bad45150babbb3a379c3995357c49b652b2e49a02cdb28bd0e7dc573ca05618b011947da4c774ae5c54dd019a37414c5b588ad42dd5c6c0dd2e2e3bcb679549dbd4e147cb817f3170df40d1c76969b9de608da0af111519446c95ad2901ba0e1311bedaa02a541dd17e2516c4bde158429c10ac85ba692cd40e9a23d374a039686cb2d31cc503f585f1af244dc015796cd5bf11b001be2539831521514040cb57730505706714572475bb96b154aabef50d4d8078a283f2139f78de33295d3bc6ae6a3b9c4212e2013bc60768886313d27fa53194da5c6b92dd535e617fcba3d2eb8df30a407115a38b8209db364205b468a98a05c86b2c587fb3c80744e1a480a3ada87895032666accdf2fc99cb177417c220b87338f29c4a8cee6d3181a8109503a65a090aa99cad4bafa90e74eaecd9ff23b2d14070c4d00e60e29ab9a7aaee767b328779678577cd308b4456b2b7dc837448cde535ccb578475cb7407ccb77eb5fc2185544ac600445716e22778f6f5281799731ee522c8d98cff00f2575c0a56e2b2e1ac90be6417c1055832b6e683168dcb16f2fab65860739836922c90206fbf3c40fc0bb81ece16a592470da3c608a410a0722f003306208def57e8e26599468cd2b2bceba0136349458cb2468c039c211199e2e08d4a1b9b771589b95dab1281ae21031982aea956cff67446d643d7c582da56c46a58733e32f7e0167cc07c7c92e8f5cc4d41c2f478f8104453617f06262ad2d477ab71318e76477aaae2d0ccb05429874f06f72848eb3419abf045e2e88eb171b1299c93105023c1b77056c8e322f0a8de4dabf042271e60d7848d1d386a7a085662aa51f3493d809831e5b420ca985c7c6a5d4b2ca1653bcf64463172af04a317f0ccac8b400bce6d4f3f742dc0bb256bb9fecaf92daeb155affec742a66714c01cdc274db69563438fcc607039b2b412b4ae1696b0934734fb6257b6f400006b3bb8967b1b279b21cd9b952f20238ac15f9b8acf9546ef40076e638e9ac2a770b202551cf1cc8bacefc6c7adc61e02d1b4c0f3be26c4dc300bab2a6b962f8afb965cae5831b80c28ab358ab65b92a1bf6d75766a16225a151d52ecda63285f538de021913cc54812caa6aacdd79c47ad2ed9478168f0df8886e0c3771016399439d53b8a405afc46fc14e38dbdc48946a0341ae67f6ac54a1d350681528e16746848bac2d5902c1f3ca31b14aad62aab11676239d4b5bb115996f8610c33e2f398d5475063a6eb1b81b841ae5bb4816086722b15a8266651525a098e3895ab926358f3f75978a60e3830e3ca4f71c76163c9b806a2a376616ab0d8ccf93b150865b3017dc38646cca2d0ee34ef12de02f92dad16db23cc451bcd72e5101dd96fc4bb76f6ea819d0e28e7bb51d8ba810342d59328c7a8117710a1f3ddaedc014a603e147bc1b169563629cf7735515dd2cc118d608d1461a869b951d4743dc74206fb18c9d3b22a9046214f2b59622aae1cf6f1da2b4e6d5a67883e8270c2f95c79810c64b3babc43e07156f6840cdb6fa865866a0099e4de6be2217ce45e0057dfa7de5b5a61434391659703d4a9a12cb8920cddd595414b02c18a748f0709878e3ef21d8715ca36a8818034e17c32297115b19a839bc220d30e286ed342d96b6e730da11c4a5285af2c00c5118bc5964b25a762ff00b0b3dcb5d082d2a0f57b3271aad463515595e08f74b0797657c445b15c1bacb1185d4807c6255197065c410327c2f79bf05470174b97033dd7dd0c0a2c2c2800ae03257030410158b2dbcc8c0593e721545b590e31f78d2c5c503b28fbdcb33b746685182b3bf8884f2aaca9a56591549157ac151ba3be6338b63e761f17cb9145d5602383407e99c3137dbcd8be0bbc4535bbc39a601e60781f1f318621baea39fc0764d3efa2d1fced9fce76ead4fe11fb74c3f545d21ff33dfd08efe99fdffdcfddfdf49f927e93ffda0008010203013f10b8c3d1ab871e9ac998e62eaa2bde18c33ef4168c11254afa2ee208c593354b821a092a5caf6c02c66fc77dc947a417bd1fa5b952a08c622ed3431a72c70cc46f336288d65033398d2eea315ccfd0c6080414a2d1d600e5cdc2e90095e80cdb6622f744bdc0a952a54484212886e341137122207704f4d4e5a0ae0d32acb85ba36968408f04ce1062a393a3f344799c0224d0986cd4a65e636d097154074045892861c52070efe01495b72b0302b612ac7b214f04233a78953ca7a89d45ca5dc054cbc2b7059d914e8082292def48e0a30ca0c40db895a9cea630d4ae825c224a883863d14a08150406529632884add4e3d4bb88258c2c057c4340952a3865a984ae86cae263b4456c009828332a5acc3aa69882ae076104c75c44e8bb942574554c6547a54d94883880d84aa848c113d4b56c5e8b601a4a82808acb5d15d1cc198454a950da62345565d50f11ca5a20bf1de196344a4bfee82ce2f7f10fda166a1a0f1d17d54082e608b50aa8d8a7996328e2e03664f329cb1072dca8c4c8839ba25810d412a357d0a8fd1724790c4b622710ac76e08e58717be22c22863a17702fa16395d3803616f8986f3118731170a711e08cdc674ea3cc2e0dd3f8947238952bac84c5b970db768ab6f5315b6474c14a605802c96cc597ed3c070fbce342d9044c4b964218728d61f7772d4c02f084d9500c40786e29a63d54c9b580b73888c60d67ed03be9915701e482d9d222d61dc2db544b9dc5b9583cc598fb3bc6054ca371cb0ef10599974663606a160b5006dcbf18aaa8ba23770fda2399acc67a188a671299ed1802dcec78c8da77331b85f0727b87c28113c845fb8da375cf9ea394bd0860334cf1c400dc58c4352d970a65a96ef11074565c137cc3bca788b0dcbe71065b119cc62fe823a9ad4c6155e7c413df5a22021bf667e399e1e06f37daa5c9eaac4bd5fd46a71346f67a9e669a8f430d7fbfd4dbe4f0ff0091f4dbff003e67e07d1b4fffda0008010303013f1080cc171567500c4ef83db10c663c1ae580f27e631c311781cc7576222a77f519f55c2821784c186a5882ba0c77517a48be07641d6e1966db940ac97f480cb82d87685d2dc0728b846aec2726960b83a757c54c7c7844486e08d4bcdb2fe82b2b2f66844c0e60c65f1310c11db4b372f2a86a4cc8ccbd702ac62be854bc618db403600622b72a620892176e0994a70c58081f7c728d1b95d7696c6188ae222c45c61e96f74cd291e44b6d0ae42a53644a5ca1e96252522532d82d4b098de2061352f97680882c8c689dbc8cd27ed3cc47a62cf99632a6d39e9502e52096e82ad11c580a761b8ca61e218a288fc6443984587ccaaa278dcb0b8799710cf694f184b39ff915b65b7aed16a09a8258764952ee70315b8205b8bb0600f296493ca200c8c130c641de65c09b5bcbd5352e2cbe8690e1b3dc74bdd10595a99a66b4a25447b4d0cb155e238a17042e0335de50652d8fb2aa1c5581f796af4b8f4df5b98181f695513372cb7897ea31cafc43696cf318a17345e5001ba8352b0c48adabeff41d4731652a0f42ef4caea16eb980126980230c2e826cccdadfef07d6bd2303ceaa0e6ec717bf9e632179fc461b4650ef17abd4a8415288e227bd11ae8c24a20a3c98fbf79431bf44656b6fe3ed18cae1d932c371168b3d171444b2ba08224ac4bad0b1e658cee390b34598e751dd451a9f9d36972e2e251d0b815045b992a8edf3d839958d5fdfe62b59a81f12d65886d82935e4c4bda0055687ddc29494c6d2d8ac78958950e8301887068fdee520ee0446e13e629516c63096a8e626968fd40314857947166185ba0dbab35219ac12afcec979ed082b9d47c180f442ca00288da8360cf7f11bde0a3e668791fe40e80fdba42b9210bd184217ac28334005dbd19b364c0d7dfb426db20cb9e411ddd2c86b839811ac25574d959b9abc51da5fc98ef02a22e040c98882a0b1a865b438801427fdcd30c11ece22315273c7c4c1bda0ab4f6e6588815aae27df9f99847598d59034c0c53b83884ef14a18eccf8cc561d2a08e65867a1f30581b9436ab3ee5068ccc7695b529074dc502a1039ac1f116307c4b1b3a612d637050e62c01cb55c7785a0ac741dd43282263ea6936f89fbdefe7c4fc97fd43d3adaff3f33f34d6ff00ecd9be3febc4d5fc3ab784ff00ffd900, '\'\'', 5, 'http://accweb/emmployees/davolio.bmp', 2004.07),
(7, 'King', 'Robert', 'Sales Representative', 'Mr.', '1960-05-29 00:00:00', '1994-01-02 00:00:00', 'Edgeham Hollow\nWinchester Way', 'London', NULL, 'RG1 9SP', 'UK', '(71) 555-5598', '465', 0xffd8ffe000104a46494600010200006400640000ffec00114475636b7900010004000000500000ffee002641646f62650064c0000000010300150403060a0d00000d060000148800001efd00002e78ffdb0084000202020202020202020203020202030403020203040504040404040506050505050505060607070807070609090a0a09090c0c0c0c0c0c0c0c0c0c0c0c0c0c0c01030303050405090606090d0b090b0d0f0e0e0e0e0f0f0c0c0c0c0c0f0f0c0c0c0c0c0c0f0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0c0cffc200110800aa00a003011100021101031101ffc400e500000105000301000000000000000000000600040507080102030901000301010101000000000000000000000003040201050610000103030304010304030101000000000100020311040510201221311306223032144134150723333542241100010302030505050604030900000000010002031104213112415171221310206132058191422314a1b1d1627233c1e15282303415a2b24353732444740612000104010403010000000000000000001130405021010010603120704161130100020201030402030101010000000001001121314110516120718191a1b1f0c1d130e1f1ffda000c03010002110311000001f1f95699ab5a4bd449f7b3ce7420415648ecf72d35270aef788976603bc9f46e43079afb74acdcde9ca635e10601f967ce679ad3d54977aa2e9d3850933f342288f5d434bd8bf7a30c40f350d589979f45136de635a1a6378fd1c1d9bcc1ff00374183d3aafd1c4ad9d4032ade1f9ae9e8bd2359e80256d87723dbcd7ec4d7f4cad748f2d27b6336e40efa6feac535e82f1278941c532699b3ae9da415e2dd46c1ea1f4b642ad802870df39c73822646b598c16c349acfd2f36e3f3f5bbef9ae3f5518ebc479ab93a33d2cfa6fa82b84d21b0fac47c647af55fc8f01575b73912647c21f23e5e2b5b2377b9368d08d37eccd8efe7e8b61d8bafd8573a170acd15f58bd27dc2096f009df5ba3b19ce3201ae7224cba5e7c7aaadeff003f5cbe6d95ec4f803e70d2959757ae73d3c31b044d3c45e8016b813964ca5e272bc431c8e018c6234c38c73cfaa09b61d6f5cbaf7d69f217898bcab2cbbf6ba0bcd6ae6bc53dad536e59e1219dd948aeb65804e9074510c8d9b46e15c9694c7bcef92e2f493e2ae7aefbce841169a0363f47d300deb58c33c93c3efc4f730b258fae71c569c23471e755db6b9574bf423db8a628c204081042a688087d015cb2b39ac803452c4414edc6d579648fd0e715232b6e5972c73af1d51bebdef24ba99f8c9ce84083cb3a8086f81c554745e93ad66ebbbcecd3e6fa3973b0f933b3dde3f528ae4731626c1653bc7e93e79047c848542e88100ec3755b2fa945cb7ddd52091d3657f32ca9f92403c2ecf5ca71388c8cb1db4bd9f2ef6f47cf40dd43868810201187d1c9907b1eed5dc15606e57e7f98a85b1b31961a2a72a989b0b276f7777d2f81cf441d567660810750ac7cff004eb78bd3a875b32a781c8767decc31a8fc3b9398ea78237fdd059574f2edc2040c503e788380c98a6c1cbea5e33b20b344352eaae7c5258c55f44736ae9123a442be9e7b9e53bdf102041522021772677ce8dc7c9a83d3fa0d2fa45e2454688aa8a233aac85344cfdb4af3ee37e5b2681be64081020cd3cc449abc7d145531d38bbcdf737229ef7b3c6eb95d25f50ab95ce531e279337074fa37ee798810204083373130b8ddd97a69c8abc85e5fb9b2d74cc6d356ab61d9cd702eb9d4ccc576c3fe8b591e80ba44081020419534a20672ccab145cedcab07a76fc3ec595de5209650ae93a9865d5f5e688e6efd58f4fc833a96810204083316d33adce4de332d2b77e3b32d1fa45fe5fb607cc826d5e3ccf4e721f68b0f31d83c4dcede6b4b94fdbc408107ceeda33fe183e173b06fa2f67f72cfce7d31aa5e37bc4332761579f38444d3f62b3a20c68e166a1bd579db84083e74391198d0b85d6fe516ad69cb33833c1f7ee6459de894baef040a6d464da74bdc2f7b24126bd1d63bf46fd79f9d883ffda0008010100010502b5f888e45871fe3d99df606591bbb4730e4afadc2932e2492eafe2318bc4cbd8d8d9aff946c89cd67acfb65ee19d88ce63b350681b4308abf14de30684868cdfb4dcda89bd81f0a6dbdfde29b15d65c2706bf1e68f81ec4c9f82e5cc7e6ba082d6e035deb79216f7c3b202a71f6fe4b8b46708b4ca5c786df2ad96e67c4e061b765cc5464ac08c6d70b8b38a971661ca7c67516cf899787cf1da1e471775f8f2e3e6fc9b44c62c475b887fd7a654b9d2b31959e7b7f129612e13db14d610646fc6686aa48118398bac531d0430bada7838193d2b206f314a362c34245d37edd2fc379dac679ccce4de2de376d1578e249a87d14817643e4dcada7036330919fd75f1099335605bca4d6f64315cc718aca035a5955908cb0cbdea9e54ae55519eb7cd6b995f04bfd6f7acfe455bdc75f5a3c869248d89b7b0f99b1b45bc794ccf8145edd6357e42d2fc4f0558450cc9fd51098ae5c38d1bf91fd798831e450f569187058e7da47a6643ce34b43ede22c0b239065b8bfc8e2e79b12cb67aab8584b703c7779c8224cce5abcc57504e8355d0e2ef0791de9111661d706ecbd9590da59caf9e2965157626da539fc35c1c87af5addfe6e67f11968d8e1fc8b9bdb08e66cf8e9decb4b095f6e5fc6eed269062ad99249611c1159edc8da8beb2b38bc56f9106074f917c723a37dc9c6625a64f6e3c659dc209ec5914b1c960f92e1b04b1bacbc3c1e64bbbab86c85982c7c98bc46d78e4c8bb5fc6d7b6e2da16bac6de29e586386de1f6d787dcddc7d638e85bcca8e22e16af13ba3b9fc65e92c390cee8e790ed97f2189bec199b7c5c308bec89c75a436cdba90d95ae6247492de465c2dbe463a30174b29b0608dd7519907a0610e2b0da39b53b323f7e5c7e47b06032b6791ba96b1abdc944eb6f61bb640f9328f78b69446ef234b20782f987821f4dc71beca6f2401fcad965565ac99f9171eab15e4181bacabadbd82d645746270e30b535ece50f289b8e98c93faa6321fe1acec6cf1f1eb1b8bcebfd8dedeec5dbff5cc0e8f013c7e48e367176571f1dc32eb377e2db233433c977666edf69630db9b9700df5dc6cb7b75042cb78365bfb0357f3b6c1457e266dc5d8821f65b8baf61cfe32d598dc735c1c2f5c227de5e97c17b3554ef7720107517ca67fa2fad9c5daedb5b60ad9ff9b9384af7bbd7dae1bd120fcbce48fead7f895e06ce2eff00f9a2bb8fc91be95ad5715e9b88191cc6ebb97f1ad70d118540bdf62f2d87a64e2cefdef45e08becc0b196fb250ddc4ebaa4534d473270d5e67c87faf30ff008188dd3ff99d8f8be51f45edf9dc232e64f5dcfd964adf3a248e0bbf2c5ecf33791b873cb9f305f37aa2b3883a4f5f9592e27770e86e6cf116bec7fda3733ab88ae5eff56cc65e0bcf68b7fe3eeb1993e76594e5707c2d8d70e49cd0d0646b4e2ad5c24c8e6eead21f58f7bb970b7b982ee3d992f6fc8c4b24ccd65e4871327972986e381f51a09fd96da33eb386bcff000cdf24f894cfe0bf0afee15bd841665b212afc831629d1c71c79cbcb097d67dca1cc6cb8573febb4fdc64bfe0fab7ef337ff00030da5a7efee3f7051fba359350fdacfb303ff00435fffda0008010200010502d234363dda86ae2a8a8a8aabb26495d42a28c6cae85cb9ae6b920e45b5d38d51d187a26841a9835768e722aaaaaab92122e754ce89c8ab7ad134209bb1e88446eaa12752ee415bbb5614379df1b910a1fbb4621a947576f0828beed23d49a277608aa270446d2820a1ea506a8dbacbf6fe829a508d0e8188c4516d346e96fa701b24ec0fc4a6a2fd1d44c62a23545382669101c76c82a023ad149dd87a5573555226e91338b769d1da040297bb557576910f9ef9138aa263688f40e434e49ceae95503753b64ee9ba3d52abc68e8504d67276a76bfaa7261451d3ae85395bb3e2d606ec1b1c8aa69fa209afe28bc9d0f54d141b06802a5172d48d29b6266e6b537e454a7a3b5aa3b5bd4ee3d033497b3bbe95d28a8a9a42dde53747f54e8cd08d69b0a88fc7785cb4054ac5540eca555289a1732d4d7076dedad13511d1e35e284689d027201364d8ed023d99dcf691051774ed0a6eae4deda7fffda00080103000105021bdadfa3dd114d876f1544235e35e35c116fd127604026b29a534a2e28c68b289c10d1da1450d426040a1b8845ab8d0a78d48d8d410d06f9068fd5db1ba03a0de5393b4aec68aa6773d50554dde5393b4a6cb7fbff00f5425502f8a08228c945e45cb428a7ee8855d20a39a895e147a00e7274cbbae8a9440a79d1dba27f07486a46af29bd9e3af15e25d932a9ea26a95dc9db4777288aa22288d491f691a9405152a65e8cdf08aa89ab927390f913a52ab8aa53460570fa9df0f61d8e8deef345cd34a3a7eb23b8b7e8449a57747e2a81c9cc5c5043b02a47752e27e83426f6ae8d2bc4b814e8ea800112bb23f43baf192a9a34e9e445eaaaba3ddb89d62ef1e850434aa2747741b823a44a3eda71d2a9c5040295dd7704746a649d41d6ba51534777fa14d627a08854d49a273eba52bf4c1eac774d0b93a544d76d360d874851537dbf4fffda0008010202063f02614cea2c710cb4a9b30f4804c22522cc343014fed3f8afffda0008010302063f02f4861a6359daf7e9629fe6c7461c238863e271aef8f897ffda0008010101063f02037209a7c3bbf4769f3af5f8380c74577afaab90d6bb325cea2f96ea7b6a98c73c363ae340a48a291ce8a423ad5d38d32c900de468c1795f28f888a0c7dc9adb7e415c6b9946e22f94f69e67bb663b950b19716d33be650531f0426b39dae77fc580e0f61dc5bdc8c7884de1da49c866a564223b50dc0cafe67fb005ae2adcdedc790e9ae908bee0c83579aa7eddb8a2d6b08af99e4f35117d164b1690b3a21a28d5d1b81a1f71b73141960a94662310df29e215bbe360d1311150e7cd8535786cee45c53476e96bb4c92e0386d53b43f0d66af3f82134b57ccfc89d816400eca6c39aae8470d34556adb86d51ea3a648f01b8fe08301f9adf2b86df04d2f617c7260e8fc767daa09e94123416d73ed604ded2d0681aca7bd0e7d5cd575136992e1d851ed2c2334699d16939ea1a4f8aa169d3a6bc2bfcd089eed525a3b413e1dbabc10ed989c5c6b40aaf6d10f0ec777a8992347152326a8aba9af8af54656bced70f68ed27b8c85c2a27796eaf655728e5ed3de08022a8ed6e45bbc2bcb4ea57ab6e1ed6bb3e53fcfb29555dfdbadd965efc14af70e6cda80268d68c1690d01bfd5992831d3d1c33690b5452b5c1cb5f785551c36abef5270e58e06c4cfd4fc4fd83b2a2ab9bb6eba62b2340730788702817e05f4d54f146399bd4747835f4fb698a93cbd169d2f9e5341abfa5bbd3e96d6f76eaf99bcaef61a02bab625cc0f3a3a6e3e57ee3c54e4fc07141db76a2284d36ac496f1546bb139767151d0639a2f779a599df6507665dc9e5930631b52a07114606eb1fdd929295d40ff0085fdbb836f62d4592bb9db8e634952c8191471e2d63606b8000e7b4e3c53f4b0c7035baae243e5d0dc71f1dc9da6f3e9c5cb43c36588edde59a9359777adfa0ce692d9c1ce207c2d07227c4278b3f4ab46dab7f6dd70ceb3c8fcc64ae2a92fa75ab8ee8c748ff00b242ff00b195f69203fb52bb532bbb56047b56891ba5f19d2e6f051c8e2d82220e82ef33bf4b76fdcad21eb089951d6ba98d0515bc76cf12c0d6f248dc43bc7bd716a5da44cda6a4d8bfe5b432a7f2e0bea3ccd384ad38f020782ac32d43b753f82a9ad5ca68751a4ada5d115a6926b43c5168c83700af75335b666b7450d310a621dcd24658e0ec4d1c8cb210fd54d54e5cb821af134a178dbbaa84b700be76c6c2c8cf95c721abd8a42f7173eb4515adab7ab777123628a2de4e0ac6c667f526823f9cf196a389a7bfbce6ef08f81c51e089f29fea4d8fea1dfda8322f2ed5cb8a6c9bb070f0283a37693bd61b36a74927ec45fbd26e1f894f9460d929a5bb80d9ec5717741c87946f764bd3e67455e80966977021ba41f79ed03badd39bdc07bd5657739c9bb715ae4f9113b207cdee418d34d7e771cd3de5d81c19ed41cf38a246cd8b0d9982bfcb87f125007067c3137068f6294641a6b4e2aed908ab46007b712a39e78f4de5ef3bab9867c23f8f6b7bb6de12b495ea37173cd1fa6c35b78ff338d014eb66cba2eda2a2ddf8175376f58fb57d3f51baab565547abcda71684e1d302be283b76610737169c8a68f15777018e735879c8196c15510922eadb31a5f39d9e00f13fe0124d00cca99f632f5459cdd290fe66e2a6980ff391697a984558aedb492d2e1b839ae1e2be83d5ae9b25eb1cd65af54734d5c33deab3c125b3711d46e2c25aa9d527c4ac66038a018f0e2772e93f6e21337028bee226cbfea753331e2a0b3200d574acad996d1ed6b053b95d9dc77a7da3f4cb20f9aedbc11bb93f73d426748e2770c0270ccec437a12b0f4ae233aa395b81077a8bd36e2265cc10bf51764f77356878a9e48ec445566989bb01fea4c38441834e96fde9ba5bc4a2ff008f26f156f690fee5c3b45770cdc7d8a1b78c52381818c1e0d14eed34e0b998420e6c64039554934868d8da5c549d1e712cba211c55958b32b689acf6edec69ad11d2781cd48e2e692e3cbbd119f8f68dc325fea176ca5e5d37e530e71c7f8bbbc4d3009cca7cab7cc209f1c674bae3949f042e24c45bd5c38a0aa7caecfc163ef4f60f8455bed5d40453b281536956d191ae284f5ae0ecd2dfc7bf268f39c963fbb39d5220a1df5387b1491bb95dae8878e4a8ba52f936109e192875762315472d562aa56e1b97d6cada4fea1cc3c231e5f7e7df6d472b507f659fa45cdeb59772ba876b63d430ea1d8a4bc82cfea2dfcfd481cd7e1c3351f351e33424af15d407daa8305848ef7ae635ec6572a85641a7f6a311b86ed3dfa2375ea170cb689b8973cfdc9f6bff00cf33e9a2c8dfbc739fd2362faab97ba592e0ea74aec493e2ad34752e6d5a34dcb1df0b7782997f6234d95d62f60f85fb5715f9762f1edf139051dcdc61a718e2fe2546eb795cca3b0d2689917a9fcf88e1d61e61f8a12dbcad9633f137bbd2f4df4f0d79ff00c8979a9c02ebfa95cc9707e169f2b7804d696ed51cc1bcd01c4f82d07dcbd5a8cab843ac7f69aa0dd5c47662b486389390a2c84209c3567ee5a89eb4fb5e7b1ad76d2bc026cb613988fc5b8f109b6978cfa7bef848f249c37777d850575fa3b3d57ff524ff00751415b7ea4fe28f128f641c4a282b7ffa8cfbfb9fffda0008010103013f21f7f1fdc1c3965fe261e800471507979788812048aceda28f885950d8d3dd653fb942256fa9e731eae94d9eadabe3ee007688e52b58a65f554305f75a816c71522218b75f5514acd02d7e4b189804e63c9dfc5c14670aee8ac9d5ceb117be7ee9a570eae5d0da8fb6dbb4fad7f7333269e185aef9dcc5feb0051f896a5808c1659d19efcc2b5a55d90951d5a807305ba4ee4669b774ff004cdb692ced7debb330417a3577472372dae48d9f67aa59ae43d21546b25f2f758ed321d10f10c2eb36089dbab6ec5eaeb92256c0c9b4c5995b7de1267e4b7fe8c12a04680f100ad62627bd08aa01c29b8356cc2f7fb96ac1b704b0616c6b4c5d6833fcb4f6839b1bc2c32a849180f0d5c8f242d80f1c1ddf3d37307741cc15ec7579350ac672cb08ce5b4b1bba3bc0c1d409abdf64baf60dcb97be2025ccbad95e65778b8764820295c12e950fd1a3b9543add15be104cdd916d591f9e9b8804643221a1f1d6ae349b8e215f700c6fe268d19269adc200519fb25a24cc4288591942ef2a8f92a2e54155dc331fea0a7754afce60fe936bbf7d1850e61a3b2bd084b34323847dc97a6c6135ff00b16de30ce1731a8e5fdcb0ae39a108161e639cfb08083685205fee9fee3af97282783d87d3e413f3f7562b413e4a87db0f89993418fd4c1a513da799517c4de0c1f313da10abe58a8cd9a7b40a3a2c7f72d6fe23c6202d3b70f3da26c69fc32d386905d5389f7980dc4f8a1f7e8554ca12d3d7e368211af6980f251c9ceafb41a85d925b5817a633b962232ba5346d9e236e20a9c7defc894ec72b182fc4f0efde5646e9f0971b567b304a813b0d74c09e0068f79a26d706b33b9b45358a5206888365608feba78ff500345756d6c55fc4bc02ddb6cfe908428538933fba2d5b3801f14c18304470706cb72a67796cf835ba35ee712db55e5c1da29f510ec56b84557ab686a32e6aa30e67e7015bc80f045ad4e1347885c6199f23459e289dd81c973b63833245392be2cd3bb5e51fd788c4f2d9ad62a16388a3b8b18cbea5bd721c523fd4636da20a5065f328cc4ed43226f6bffc9874dc295f021844c76218144bed84d5e81dad9c6ea7682587db18d653a799dbee4c14fcce3937adad14606b88a64b2deb763bebbc484e822e2c46702eb9c7994206b7c500715c11a8553efe18f3092d46c1d3f01a1ea70b6c1f301cfa3e131966c9ee7ff62dd11b435f3da070177caa67442daed576ac26ba43bba5e77f84bb0ec3b4ecdddcfea5bf9908f80efa00fd5c126e7664a0fb09b196acf82426c591955e161eba617e9a41c0fca540384dc9c0c736c17985ef0f66a15240e513bb08c680cb71f288edbe65276cb1552aec2c4b1b53a447d08fe652b938363c0e7cee68c10e0233287f913b72f8a7f10553eaff006ea48ecfa6e85e3e0116eecfc493c1a8538e32a6cf8bc4d3155a456aa1175ae3339ad0839829af41b357365cf94410f46e1c8c4545be12921c25345b303c6ec0dc0000014180eaec3d0098769a020722a368fd4a6526a077f77137b30bdb6351507e3138a8174d31595b9aa672630c54ce702b8f78e57d0a31ae5021fd4bd64bd3dbbc644c86fc0c0f35181a76c267e62d646f247cbb7d0d5e98f4608c63c1e12f53bfc7f852d431fef0b1c07f719c5f753f04a6524125ccb572305d6a2a16db55bf110015ee3c976b370165bb7e66df52f3ba07f651f38f8199ede20e03f5e9b3f3c58d5b27599ca1c5ff00c9e33f80a81d622f7756a54b0e2b9065f72c7f0937702ff31df80e1569947500600bba98403c5a62b65a6b8985cff13301b2172739edb1f18efeac96db2e0b1c9fd47ccb4014711b9a287696cd07d6b97afa94c1689c5e4e18b0d9a0eca8768155802a10e2b2f999d66a254781cc08cf28ecd87ca8f59d861af94b1bdfb7fb1303c23537023bad4d86043096add2fca616b2a676f66baf72797b8e63e521a65bede2330b3147e8e61f839feca1c46aef4df2bfa7addfe6d3cf13ce2eabde688f15826c82c9459af8f9539206df503060a0ec4c2663763f3c4603b7c223f609b82e07ca2b5aaef0ce019bca3e6092b39e428fc7af1ab39b8734f04cd6872fb459ccb887ddf1ef73085816ab6553cc55ccb966915a4ed197f9185db76b84594a6c7199745b4b3c2163170d99d4c5a1eb6f4395f880055783fc311e660a7fbd47df1a97ff0034d77952fe138f4e33a5f70ec6251d1ce27e048e419e5a87825f7ad1d931a62885740c885bf114b404d87105319599af03b4b662b92cfb4c17160b7fb7dcbacf89fb10d6a25355efc4b509861e7ba19f0a61881d5d6c1fb3c7a7fc6f13f8fde7e2ff00ae9ff0bdd34f7463f8be19f909bff1667e54dd9fc0f69fb5fa9fb9d203475fffda0008010203013f217a0d4d3d16e0e95d129194b0aca473b83df0fa80e8b45c5a4acc3be93a76741adcc97018cb0be89cbd72c468964c3a84915ca42b43cc313cf5d28860ebcc5c4a7a29e8be862331126eebc935eae08ee3a9c43e96338a55a9fafa0dcda69d57137ff899bcc898fbfa133874add2c20b963d035e97583e1f50ee8bbb2885ae3a45bdcd204b3a46ea10617502baaa72c11cc332f9b60e0cb9cc68f41aee50f42c00dbd56e4d6a18b020b5055260465943a943de6b2eda98ae97e836540a86e6a64d4aba2b8870620ea0476c0c54c23d07a1d4e3977a07d238e250e3a0730a4dbdff00aea7d3aa5e597e996a594041121994aa20575d8f4bb4198833681196bc4f6446b333cc388393cfea689e8c9bf42cc18cd531461cc15cf5135986f44a6f4af1b22b282e0455cc5874af1292a3d352bcfd72f861288a11e8dbadea2bf59c4d4218d517ad3aaca54acf2f5e7042030ea813998f4b971c341ff0c2317299c90f41772ea5cb4263343c92098f4b177d3599c3b4a584209956e71119b7454ca31f6ff899b26f358f67a6d1e8d231e8d1d7ffda0008010303013f2131f5599eb72fa5b2ee532b947ea0f5010844e9658a25d44ed2e8e8e48fa21ea65d0a03a2a32cdd13a91053d4e69d75946659154bf4574052a3d166be8faae9ff0001e96f4d3fe08d12e65cce27a2fa6504d7a10b7d55d1308518cac52fa31e8f46fe8abad737f3113208e540ccccb5053368ba4ab0b7a3dbd4a23a004cd4310ed67226c3f4859ef0794af44805d4b5e7d553db323338188be83a5ca98f465afb733b25194161ea7418f3d02f36a2c882a39a57699984a9d1bbff00e1ca9c9026a239958eb12e125f7eb53300d1d4f4ec8307412b93087419145847bc7fc4d130443680db5de02c304e624e67845546591f5e26e7fe18ad0e0c2071d040db4c796076662498e5d2e2b6fd4662d4329a04c0a8e2590c4b12f8da3172ec7ac707417191702098c516e34e85cdbf5e4c7d16638352a3ca62ba8b3d0ba9dbfe43a8640448e08de24cba347fc0b9b874d4e7412e85225caa830b0bd04af485cd4b971639177430087c4583a0c58fac2690dcd27ca7b9e823d4f47fffda000c0301000211031100001082d005f5a168340afa1748f7e7a070a480541ed5a9cb02180d444354c5f8f080643f2272f905305bd92218b4f8d205c32fc9b2a60950a9836476e250a80062e6d6c756000027870eb71120c0031efb31b01406800b79dbb5f58000004c998d74ec04001233b188cc00e04b1e43137900075b487889f1000010303ef7a980000bdefe0b45080000c8b417b90e000004b7d051a3c260007acb8f6cd146a009d2cd18d6ec2cc0ffda0008010103013f10bb7b43f298079803e632b8301343d0899034c38c28a75049b13ebdb305de82fb409d2135c5811053127de90217565e1a5c5d46b52c6c4da4f72237c08ce800394a14b08f75264d764654364876c66356be7a11ad90f052853ddca4580a1497bd464df8bfa15f375db6d10edad1c7e09570d53d73a6dc4082e327c25770a1fc435d2c199da016ea21f721c5a2a0108d384550c70d9cb45a9020becdda2473a5596a1b58416a1e7579a344592d4b4a9d351b00a576eb3618b1e2f3c4d8586fdca0ae6b6919b9b5347dbf31fef8019ad5e077136748405ef446cd912853530b0571c0099ae21e09318b054bc050efb31622870445867b0ecc887656d42d77d070a1cb043b0305ea06dee3b7559788f68180ee587cca9ac303636d644a3a428bbcf9673c72350a8d2a4d68d78d452d380c675932e93b31562e928b18fd4211b872c8775ece2a56656030adeab35fa96e024d5b180cbf882a54922099a6ad34d7d2e5ab96a815ac572569e3b72bb80642a69d088b56042aad02e9564e98c4d6255c5adf662536aa8f526c94a06c4a64df7861c2d188dd79c1cb6788336a96e5b2cabacd0131abf208e71c7994d439b40fa1614aa301c94bb228f3867be65192c51482c183c543a54593163670e983d25edd2b784ac15003dcd5416c9f0dd3dfda3711daecd52a7668a4af3ac11de6caf9be8e9451149a0c192dc4e28a1675cfe238a60383783983b73c7cbd9a57046bd60ab67b7f9333c2829a5d3f1005e0518a46bee177fdb6ed84aab3b3b471833a9570120af946e9b29e1978d7038c1587377a8759d1a51592b01397985bbd8c518c29d59ae94219e21c57497f30283a3f5e60139c715dc942e478ae654e17a7f6e16f86e0920362ff003cc7abe3f12f5b2d85f0df1db105c316bf13cd1c46615e23d10c4d5dca7ca0bf786380408236027d3338f2c3c06aca4184784b82664d85142ab6d1ed5e7a326846d4ee5b3ac869dd868e8064ead013da7b813169a0c2e961d8e6618500857818df7ed1eed26b8ab0769e511031ccaa83741db454a8ab4988b2f7d989529b0c6d0a18f6857d45ed16d71ed5332caf328505a4513b83f50d694306f42d76b2361023b6dcf64c42e76220d01365fc11d17d855e6ff70caa9a86b8d1d52819eb2f2f647b25cd5eb14a99b5d2da61e110d35550ac8b645d51996dde24b8a425f16099780959b597a098aa4772f01bd88e4c534ad328e6b554cdc2cce9b208e3225058f75c06e58839bf5d6356df6958a8b2865f602528eac4dfb410a957da3e422b7de80650d7022817ae325a410d438e31ddad9efd15caff00087d10ec15d402e9e468fc923f9422bdcb7ef63bc221402aab6ff528ca6781ab2545a8b3371decc44e445ac962dc6311c28e9235d94b72be466e34159c2dd7b0e73f379b1762d8808c1b285ac051961d70a3a362de82a0eb6b75864390f88e874b036c3e0b7840660b4d8144e8479b862d3df3d56a2996b319626527b499497b001f9a96d291e0a9baaf569dfa941b334d45af785473b30011c6170061a35a5b4a5ac06546cb68ae084de7d549dd1abf798ae057758036eb7a864b2b2930f4676abb30001dbb88003b109169119eded079317de0d5505a300ba415846a34b5d80275a6fa5fb9dc3392d62f91d589c3fc8374bc28a310149d43861218136d6eae00500280c1440418cbb48c8e3bae148b035e428e4e42fa59e84569bf59084adb65aec360b332f609f02387de91286fc10dd94bd98a6516d00376850572c1bd787b5b965772bc60027b6bf1046ee8c9a4e9cbc9f300ee223e96ea82cf105d75430166b6a31f10d3ad74dd6825606d2f35445fb8855a1e06047e639a4e63096965ab45755032286e472c69bcf5d1356f1bb87a1ce822ed74f66f6436156f180c395a0acc1fae5a56b65b0271bb5e4847acd066c4716e8854089c215186bf739b1c3822de1aa0984105cdd36bf5150664c50e30889be18c0b191ebeeeed191999ae51784ad2ad72b0040ef615003831a993913d6121dad11a9f0f155c85d0d8e697aeb58bbff35fe7a48c416f14af3f241f1e18206b66aef57177022806489771cc974dd54e482a5132fbd710e7118d9b086a6aaa98d4952b2d8babd175de65a42a40abaa2e5a3515652bb3fb80843e253e2019350deee0742da92e07076e33193a5a96973ad057398098e08a00c0075477dbaf43b043f405aaba0269f39a0068655617998a0321a550ae85ac7e23f546a8d46ba9ee73962896bed86c674a8ddfbcc9cd0057c25cb420e3b467ad42609aa460f12f8fdb49fee9090295aaeb0996de2d76ada0bc62fee50069d6cb41f75712de8ac9309007ce2909fa8ef6e0e2d6bd00b50d10c5f6eaa05ad073082b4ee8d1c879964b5a339297c228584809152ac7c1ba94358e9aa530a96a4a8ab694a555a8dcc2f8b03662c2bb68c32f611ea50145960254f1a6d216ed3233072e1c8e5cbc83c105e579e5e50a3c5ac629544a5a860e0abc12c45b9b2e1aacd65e918191e00b72de182f0840cfb5840a2aae96b868fed0f6be7405624d4a96e9b9703735c01e28f477b42a387dd4c6900e68113b35b894f2cf541132631b771af5c597016b5e0a2e145705691bce7bc56987889616692a93a402db5b547b7e214169949196d57629c87a934f65605529a608708ad414e7716acc2361c03406289c99cfd607e6a181a146cc2dfb3330077da6d9e133a5f053a7e2080d5c8d9716f0fcaec496d1c3b2b894bd5eea156dcd563ff633403a4b9d976916a1d0b261f8b95e71ac6f5efeb34b5006d45633f132c0047617cba182b6e804dc1312c006fda3365ce380681c8a54a6d019b23c4b402d29c955a9718a6866068285a0e48606025542ad38da6a5dd932d6e4d9cd05a8d356da3774f2b32a4e839f754ab34ae3973cecca315842ed3bc588767d61bd29bd63951c73117b95fd961c3e08124de261eee101780d006f968886df14041a6ca2f1a4b9e1a1ec40d3e263b077d0d02bc1550cc66cc823769ed0a9736d27e0c44db94965fdb18a76dee28c4bf30b7282f3600fb66139861a0938c04f5949b9946dd11670401565b1560031da5a29661b00ed678112252929a12b977850e681c0ce98142f172a0a6e3c0ce0d1062add5d9c1912fee5957226ac190c77ccfbb8697e1022d82bca6bed5ac0e6651edba011ae1ede41e2b7b3e65f0de28e0dbc4a2470b0fdd78bce7b3023ae068fc85e12fd2ad3cb1522e91879615b0362078c45ec5c63d0c5154376cc2c2282d5e5ace3cc2d99b5691d622584b8c6e3560167e65a218b807429e62db80cb36dfc863b10b6e23d99f88902ca315ad84a5738fd4b0639c82e0f68f78e5843cba655a2ee13cf011b75b8259050d26f3c7ee4ac875d54ee72b5bef8ede8e3f13741f99fd27f11de77fb9fae87bc9dbf4cd7d9d2cfe6fb4fe03ba7e53f6cfcc9fc8f13f83fa27e57eccfe33b67e21d7fffda0008010203013f10c88953008687a0b2b1cff8444e25dd111dcd0a815a8c5699936451a66c549de1e08ecdefdbbf50a46cd4c878828e86cb44c8ddc064e881a6e5388ab07cb35a50b8db77266e40953175e485188d6e8fbe96901484750b9f7f6998ba2328912c415c5954485b99655918e760f0cbcc32c1e23e3a10973e8b932cc232971728977d06ba2e370f30ea768d588859ee7f6741a97fa1311f30aa61b941a7302511c4cb2eba05330aa5cbca3b7fc71d3952e382ba12c8c46542262578829e845e957046915ba61e344feffae984194d0e8173ed164c5a3105438d8965dca0be8a8d906650665e5aee0bf6e3fde89510815d0b71b11fc901ee37512a39ecc55a15dad7e230ee8c2a4b22eb01c4dc466531331ce029f8dfefa010cd1d416eaa307e60998414693e658cff003ef30ab8d57d4781f71b8866902a080b8526132fe7d4b095277f1701103b9cbcfabd9d813c12a228d41df31d87387dba12d230dcadb97199e35d9e3da5e117c22ab44d8880f6dafcff00e7e7a05f45bf7103084312f463c0fe7ee08a221730fe114811192b41f4c7cd0ab0eeee6feb3d559a7a2e15fc62986dfc4b3332f98b65e1d40adbb80448ce650ff4c434e897a4062c2053381fc777f5d6f4af4fe411cb815298961c4c1054c266e3ea67a95905a8989f039f68000d1d5e0f48d87133fcca15fc779903572dc744cdab3ed0761515a928cf72c0ef5f87fefe8961417f7f6e7d17bde86a1dbb87692e8419d349cc588e889cd04b595ef0dcb3201a8c3ccd4323415fcf7f4bd09c826e71330e26c834992fa39659a54b8e4624e666e26095b445caebdbbfa9aae32dea015169ef0d2450a2a54cc40542596554de6391a1cfb40af57b94e66ddcd25c7de26cee7e630c7536a622e629e2118209a966f7fa7add8bd4e6984232cce0ad3b31aee583312e4033048d230ce399603263d758cca1cc7aa31fb8d9882ccf7218f13c4bf1006e2e180981a8867760a86335f0f3f12f0fe393d2d19dc5ed01634bc369a94bbea3da7ea167001c12b2da42b88965d3de3a34baff005fefa3486bfc9bfa097b13ff00a373ff0097fa8ef9f511de6a4fc03f5d7fffda0008010303013f10a098c5cc7d0f93500d114e6263660d30abc4744a3510287d453c750262437d42da9ef2350732f0e250dc0ad4322c64a6591883b830d9053d3474ae2fae6b8950800c05898e30d97435328464b63c4d2128747327a031505287489662318861a54bca5d1c4bef28a39e99f4428aea2d210a13065b7348b16fae51940798bde69f7e824447a812ce26758d0255221d1e948b531532a6647a572f7513bbfccc151da1691122f4726a566523ae8a299c3a2ba3065d704a86cfca53c0dd5f8d4000d1792fccb463e2561798e43cfd4cb2805c25507661f3971d456c781d107d1b925ffefe2098f69495fcdcb55c5f0fdc61bfb37fe4c716747fec0191e57f483280a418444faeff00110db82e997c8712c21689a05b32eb4f6f5602bb7ef107c9cfdce6ac437489c6a0d17c38f2cc8aed8af8c0b916b0e20382dcb1903c9b76aede6fe261425ad219f89a0c5c7b74af41b1c244a792369839027b625750beece04ed148764b939439c2f298bbac0a4f7f996c1c4218ee8ea64f4825d02e582f0748586d10286cdca184ad70c58d315bfc081566fa115e5997bfd79faea2bd3f8b04f162a2873127bca160c4c2595ac4721d59a97c3749748d2c1155b7a87a573f331bb906ad5fb3c900b163638f7255417f3d0593814e431521cc8cc95fda316d5f468eab501e07128f993b52d87a4723b3bc5ec4fa26a03fdc42daa62199812aeb822b2e7d2c5d1ac0404062147b0ae86a43bdc76a994b5132896cb3b97eba3d5c131fbc5836768948b08ada4c92ccca90a2d710ca643dbaf599ddf1d2892110c60c3aa4b14e6203728659d4cf305d7edeb744578e88ee648e18e26488b5976a57d0c09b9ed334f7ff0081b52adcd4b2c72a382e20a8275d15054cbacc4982629518dc554fa4e04d2139b528801954916e1ef33f64d6852d7a1a0844ba739ea136e8689a7737febae95f986a1e809b7c477d7fffd900, 'Robert King served in the Peace Corps and traveled extensively before completing his degree in English at the University of Michigan in 1992, the year he joined the company.  After completing a course entitled \"Selling in Europe,\" he was transferred to the London office in March 1993.', 5, 'http://accweb/emmployees/davolio.bmp', 1991.55);
INSERT INTO `employees` (`EmployeeID`, `LastName`, `FirstName`, `Title`, `TitleOfCourtesy`, `BirthDate`, `HireDate`, `Address`, `City`, `Region`, `PostalCode`, `Country`, `HomePhone`, `Extension`, `Photo`, `Notes`, `ReportsTo`, `PhotoPath`, `Salary`) VALUES
(8, 'Callahan', 'Laura', 'Inside Sales Coordinator', 'Ms.', '1958-01-09 00:00:00', '1994-03-05 00:00:00', '4726 - 11th Ave. N.E.', 'Seattle', 'WA', '98105', 'USA', '(206) 555-1189', '2344', 0xffd8ffe000104a46494600010200006400640000ffec00114475636b79000100040000004b0000ffee002641646f62650064c0000000010300150403060a0d00000dfb0000139900001e3f00002eaaffdb00840003020202020203020203050303030505040303040506050505050506080607070707060808090a0a0a09080c0c0c0c0c0c0e0e0e0e0e10101010101010101010010304040606060c08080c120e0c0e1214101010101411101010101011111010101010101110101010101010101010101010101010101010101010101010101010ffc200110800aa00a003011100021101031101ffc400d500000202030101000000000000000000000506040701020308000100020301010000000000000000000000030401020500061000010401040103030402030000000000010002030411102112053120130630223241231415243433253511000102050106050206010501000000000100021121311203411020512213046171813242a11491b1c15272230530823343731512000103050101000000000000000000002140011100103050602061130100020201040105010101010100000001001121314110516171812091a1b1c1f0d1e130f1ffda000c03010002110311000001f41675abd5dbdba0d941646807799d622bac5d3f3e2eeac3ab75e996b9d65f4e196904eb9258ed198f90e1779ae84a7a4d9496827da78d5c1613c0cf4a179dd7a306ea4eaa52e384de1ff0b62b7dfc610d031d1caf422ab58b54a2873a0b5ead6774a9333c4481b21c5c2e3bd5461ee573ac0bce8214b36b9430558f5dee67ad3e972b8c43896f5820bb50cc069cbd1f469b3bb50bf5a1b9959b981afe3bf5aaeebdb2b4e0de108c0976d0157d52dd5f6ee5ed1554d9c59013e2470185b3d6f676631a049f5b9c185ce06c47457ae7075dcdb522ac784330551c5c55d585ca85a5400e249db986733b4d6b5b1b9cd33d1ec5c77bac76679b9a5d82d4119ae4c685f00dc4771ab32195716d66a252f4e6b88534a037f37a56e19dcde95bf3b53d718ce4ab462dd3980358e7415c9311b2e48802c2118022fac05c082ba66805799003d0cee56aafe964b2e5e9aaeb64faeb034e65bba4f73a716b46c12d79cddda544128e5445273ad8880fdd13a598a29859535f2648aebda090f613e571fad3cf6a4dbf74e9076192a5a296a34a56354aa39baeacc88ad8524058212803df151a9ea20e992c53febfccca09a0b0a7ae7375e4dbb798974e0c715888c8b474081434f65ed47606eda19fe74713dd4759107d51d045301a73af55faaf32c19bab0d805ca2daed3ddfbba4c34541710b3740d9133b5d354d063babf12aa54647c7740dabbd11c03af89081d0425059d2f7651eae6637eeebdcfa25af4a667d58a932f747d6d63b281a2ac29769317794a6d5a6c2510a09c0bf0256508c3da50df6c739aebdd9ee9315be320448ead1d47a508b6372af074d3d3d34e83a9984a5a696dc028b97a8d9d2d502fe31bef47ced53901b4049e8ab4d30bb5359f5227a415768b0e4d906a837138f402d2c2da5e50a98982ab68abeae1916f349e7fb229517a843871446acd3db8136777f3c656890b36be510b209a5171598a8c308536ac632859785dd04a6d69ea1656a132bdc92a8fd30a64a3a7a95399b9778b96d9a36c7ae84d82b88bab0e808abdb906d2c25c4795c130568475c4388b22d730afb1e734bd94cfca0e243313f6f12cff3da41e0a863602deb0eddda2ea6eae15c462997e56e9412453806b59b3eb470cdf6fcbaae001ddc9282c4cf18e3ec2c182c2885946644b6e2e15c4c5b48f3bd3b0cf8e9fa6bcec2d08a1581b0e6fb6e735b2d3a3e254175b341d50c16837315e909148a216ef9e934b82655fba768be3a33dda4d08486670cc66fb5d26b70e6d4e2574cab3cca2b0eeb070388a6baeb20c7036d2c64c2c896f3f598c4d7ee8e9dc76b491312b37d96935ba326c494ba7f1e79c0d1489171725ca88694e6e9f11651dcf3c0ee2c4c67a731c5220bf578dab2f33d8eb35b9b1ce455b28c96c0691f8054aa9df7970543d72d0c2389c1def32953d8eede2ddaa4212029351f6a7fffda0008010100010502ed4fec04ef1d1ffb034ce17c83e515a8aed3b512289c6691b2bfddbb5e46d7998e6bb759de271647d55ce0ebd69864648eb3518d918bb3b41e82778e94e24694f78637b7ee5bc3baec9b59bfc5b37dc7aeb55e08e1b2d9bb36971edf69a10f7b9ed786fb9c4b97baf91d0d97851d8041717109de3aa6b9d3b06dd85b351767db34c74fa9b1df5fa9d1d2a105be9e2953ba8629fdb07b5ebc34c1fb6a593f9088caac65334c4d5b2d9036486ed76dbe38413bc74508f6f3856a99ece56fc76b5bee7aaea60ea6b39aa46ed2b36eda909df76bf0a4fadc66bb106d78b72f89d5e6b760cee40a7a09fe3af97d8ebab424b3668acc16fe4ae4e4f2a7dd588b99ec2ae549071b5db1e4daa3fc8ec1b80f58fb7051765045506b1d055cb1b62589d72b5586a46e4ef12298a92d18e6b0f6867616cc762d8f75bd77fb9d8c8e9258a5f6dd3c3ed86cce0014d4f542d16b9b7b9196c5486bc176b5b6b948709dba9f736ab92ab452f2eca9c4f55d814314705cb0c7491085c65ee3d8863032814d2b1953dfad5c75d6a3732f76d5faf86bdcad15a6586cb07617d95db63e61d83a58fe41dc3cb3b5ed53ed0995c797cd520fe4ddef23cf69d55593b0569ad8eeccf749234f12d4d44aecaab833a7e33c5d8753176763e5262b35fe0f2587f4ddf5c7f3a727d8c9a48847f21879761d832eba47cad5d5d9f684cf31760dff00acea1cf2e7881d2b1073535ed5c839472363553fc6bb1576a9fac7db3638d1a13c4d9e7feb2095b5bb01d475dd875f3bad7570c92c8e6b82124b59d19362c7c8e4228aeba70c53c0d32ff6c876c876ebfb62e5d496dd9dcd686b1802ef2d82e8072963a71b94dd7ced16babbaf23aa7446e451be3b658d6d57607653ff0035952080a10c58733f732b92e684abe2571adeda7b62213cee860ecac73757b8e69ebf8cac2ce2ac3f02d380334e057ec1df6c530e10d37f0929fed9867e7603430eb9556c3ead99edcb65ff0021bd2d6864ed8be592ff00b51f40f962649678b6d5adee5824589f1059fdc1d6471f391d3ddb7245ed16cc58e95d4e690e9d7f47d9f6669fc2bafaecb5d77491beac750d5fe4c5619defc6eacf341d4c35d72f611ec19621b7670ad4d94f712a67a823fda82c185dcc2bf74b975bf1bed6db4aea2a9bbd93e5af55af7cd28eca76b64ea2f8ab6a783fed2ef53f23e735dedeab26f91b5863ee8cf24752dd88acc6f639cac6c7dc731b5238ed502e9314fda12747dcd47d52baab868762c31c8bbaeea7acbfbc92790d5ec2d425f27b2fece1805eec5f689a75e57c31d781099ac82e49ee4b2b94a7918f12be9fbb5a5bcc6b4b5f8547b3b1591d3e23da7f329f7949d3ba7e9a1a6ce96f5b8628e338b95415660e2e932c4d7e0cdd8fd92d8ddf3a2eca077f7dfc5f21231b86e013a7c5df345d8d91ee452568af365eb58c4db50b9b6a7e4adccd60b3718a6bea4bc9f61ce4092b2b2b28951b793f0b3a7c562562ccd1a83b4e128b0d70b71a96c4d2d296bf63624b5d13fd96d67367b7d69891610815c965656540dc00165657c6dbc6ad82ae7e55fb39e054e39e6ad3f5d9577fb4a0bfb78a64e632c3641ca09c0475ca602e731bb01859595d0bbfc2b2edac9c9e9fabfe6c96ee5f62afd94171b2c0245dd7575e66c0cb15448ec1eca27432ea06544de022fc5f26fa743fe9daf13f9e97ff00126fc9ff00facdfc7b3f16bc4de7baff008b58bf351ffc727e7fffda00080102000105027ea3d0f9535ab1a35db83a95235342f051f4044e1492e546dca0405c82c84c2a245058d3088f500a6710bca6ec9c34ce91bd39018d1d8c3771845870756a2516991cd67dc1b8d4e8c3bf2d9877281c86371a9d73811b17843779d4a282ced127f88fd613364f239b5b807428a2804c6e53149f8c41109a563d01672765c91d4a3a35c9c89cb5be73b43927d1825670b256eb29c500b885808a6f871c3613f64878a67e207a0a61446ffa731a0457145a506ac2902032dfc9d85cb1a715c56116ac6c5613b6016535f85ee052698051d8571f7295a9a565656565724e40279dfd194135394438a7b8ac943d45c89db46ac23ac68845c83d6426fa8f972e0805fa93a81bb765215b000ac201c06b95ee6eec22564844fa00d004e28b73a46c4ed0a7380592b3a145ab884235ede341a35613b676c8a63f43a124af6d7138075e489ce8d4104764ec14c3a11a94e4c9113b047d1c5008375e280f4b93b4dd651d0041883106fd272250f464212207283fe9b91d70b0860af6ca070bf243e93bce802ce984c7908e0a679c7d2779d3f4287845350f3f43ffda00080103000105026ea7d0c891d9674e3b11e86393b51a9d638d38a3bae250051f1226a216750741a9d18dca0dc27205674c27b1351df4693976c5724353a35dc4193ed2ecea104516a78d9a88c17bb3a8d71bb8e87666810434c293c33cc88fa8a29a0f1273a84163471c2728ff00294a6bb09c172f4158c2dd71d0681028a21613460bc646379761e8ce1610016015c776b7d034fd651bb374efc9c727d0f081d879f6dd97657e8b9204699411d8f804efc723d384173c26fdce413e3e4bd921334f0bc99bf15114e62e2b8ae2b8a70c208951b742b92cac68504fdd3581710b1e978d83501921613d6500869220500b8a014a7d40614402ce8e41a80d0a7268d068482742e0173250692b75c7086e868068743a03a4d2a6e84ec01286134278c807ed12b16422e0107e5028e8e44a1b824a09cdd0e8c6041cd45edd3865706a21ba9453b4013c7a5e146e4f6e5637281f465128bb5ca28fa0a6a0ec2c85c501a145c8c88c9ea3e828045ab09a50f2414589c083c110b2b2b2b3a1f41434c681c8b97b8139b95bb51fa450d09580b08145b94149e397d31a1fc86a1391f1f43fffda0008010202063f02f70cb4adf95088a48a2b66c6d3a666d48d39c2149e4070dfffda0008010302063f02f72eb42e9e122f151a677e64e586c833c702786fffda0008010101063f02da4ee1ed713a2f35709a738c0926305d48411b440fee58ce406e7c3eb3463e8a22814d5bee07e89c1fa43e8b23633298ebe0fc7c93d419a996e387b5c4f82b1bb4ec2e3a4d43017738834094d1c38b18ea1f7e5333e485adf128c4409d535e636dc10cdf1039608b59284118709abb4421ea83bb6779840c7986a8b0bab0fa21fba7729eeb8e59e3344c6b298d741bec1cd91fa21870b3cdda94795110566495b21e68be1e6542355fd82d0d934230a3537163abc809c04e1241e38cd078a10770e4d9d3c861859c2a4acffe33b9ca7a5805ed0d9120f8a38b08f71893b97ce5fb502e374e11f02b9a9e154e77056e8eaa0784d0308437afd7457643125705dc77780c7163686b9dc5dc376d6d4ae832767e68bce89cdfa2682af754ec8fd1486e745faae8bbe34f2471f72e8321ca3c511868f376edcda0d538b66ae2afc73d50742e851bc53e3fee853c94611142131edf6bc5c22a0372d5065409943b8ee5b36d48112aeedf2078f0dd30d57da38ff12754e0e1cdaa7768f9384f1b93dd99f6fed1a98a2cc342ea6a50c3f2260b1f6b88dc5800bb727456621e655ce308d027bfbc23a6e94e935f77fe27b80db6adbee611c137337e4145ce822cedf05c2328a31edae8d2455d9bb2e4d609b9b10b6df746504ec8e95d357698eb0595b8a70e09f88085822e7700acc7f13545ee31f151db35d4c42210e2d401c5d57e2e62cb880e4d3d8761f6fdc35965c45b67942ab333ba88e8bf92ee104e634a710dbf27c42ea64ef31c47c18c2e8784426b5d91ae6ea5a55b8df6307fc61945fda6e851e9ce1c6303c745d57f345d71f55ddf731b4f747d6d1a22fe28b98262a372011c79072945d8fda4d13bb803df205472e488f25d36d4d53dce4d6e17f4c0887b0fc8f9a7761f681cdb4863f1526350b2773100ba126348121c174c4599346be41de49d8de274215d58542bdc24b162d1ad01adfd7610e94289dd2fc37398ac4c06a66831b40a254340af46527551fb779870aad3f02864c862e1a239fe7f32882a2049935135d3d543332ebbdb382936d87a95f9eee1c7c62a2a2eaea8ab61215281064a4a07665f21f9af34d6704ecd9b9455838f8ac591bc68a390438a74f9cd3771f70cae37072eddad12cf02d7688b4b0f9c15a488f8945ac1cce4c192ae0091b08460ba5c4c4fa6c393350506a7c974bb71ca3dc49fcd7423edf71e251bb99a6b15d463a92b4ed1f6d84dbfbcc820ff00f2190e57eac6c82e8bbb583788aac0ded0dcdc27963545ad9c24e69d175ac8478201ada20e655b451067a8d908ecb539cdf742b4804d0251d517391c3869a95d66e12319a13b3b7ed808dee98f0418d16812028ae27a4cfaac8dbaff00e4289b8fa97332543aa0a6e4eb1c38f2b6170a07a7747b96e6c6d9c63fa20eee3b688718031f4471f7188b08aeaaded417fa14323c5a48261e0141db02238aee271cf879d8ce2dd54c941cfa26638090d983ba1f074fc91cc67183b194ee5240f927bde231355ffd0c5db9e9b08b5e9b92dbc3808b78146d73f1794d58e04b4522af7620e26a4a835a0780929fed476961946855f6c6156f11428d9edf89d9c8e96dfb7ca79fb7e5f36ae9e39077b9e7443230723b42b176feec594b840e8a0b99a09506b40d97bcab41ddb6e30e1156c77464c7eda3c7151022b1e2cd4c712e1c535f85b0b0dc020586ab968893b2aa47fd33917f5d382e66c095147276eeb4ea0d0abf1641236bb94c884475011c4845e7b9e68484174bb9f42aec7eddfbb7228ecb6a17dcf76d01aff6631587129dd1365d582713fdb886adafe0b9cf905f922c356ef41406e0daeee3372e0c5af177041d839c0ffae925293c49cc3221457b219051c2aac708e91423a95e0777c5454368da3ff477e88a67f1417a23e6bd421b8373ffda0008010103013f210b430407e0478e8816ea1c21b201eb9898120cb9f26271019799ad88f779d1339c254d7a3c405d0ae1a88b2770c4b2cda01b58ba0cbf32e8f6fdac7e201e966778ac137609a00c13f88eef1c1260f7cdccb98c410403dee4b89a4b2af8866de3ac2db58e3efc0ff422e4e9c86293c13d7b0712aa1416b8e7ef379814ee4d1f12b91b37db51e35f82127872fc5fe52a8c64e2cf24b711055436558abb1fd87b4a684e7ccb441e930ad1510103c3344324cce039eeba9aef607576c041605db225c1b1b8611576c66bd40aec3ba38cc80396cc3332a96c35a396651f0021a998f73dc6540eaead6a3c956db86ca6a333b0dbdcc01a8fbd4ba87a560f2c44326ee3b8e2e13ed86c12afc2f32baea73bc1f699a651f994284301be8946fcf92511b0018b4c44efba362cd4069996cbc84770b04c6b0554bc451803a045dfa7dd964f9f2bb711c4f0a5830fb450730a01512df32507b8e2d2edd61ffccc0031a3bb7c4b52b1c7f50dd06fed385f5105967cca6073cc5cfc944bfd2f89b180c1e625a5bb9e784acd84b1a5423f60fb8db986512dca1cea3ced2f65e2e70eec3dfcc04163b8ca9fda569df9f711c33cdad0f64b556857c8c016fc21752c7556a668a3c6226df4dca2ccc26ad85aac1efea57d2ddb50e71349840ae2661147885fbc06d81758766298e35dc3329e47af9a952c96819381da50869aed4ab940f556a2f610d07fec6744cfd2432d5c986c0f679f98d84b249558e3315d8b2ea2c8877626a3a250273b945d41c72bda24f3a24f79494f41fc22725e4b0cb186ed7ec73034b3c3dc33cf78e5c6e7314aae08648c26fc368812f13df51d427945a1c44dcbce0d3986dc3b0cc178e231da6eab00038ad5cd299850bbd809f30f5b139441acc5a872fc4ddedf11ee32dac93f27346a1680ff0036398befed2079610e28c1cd779899b6a5b2bec8c332e5eca1011605610a03db98c4dab8e59ca1c92a983764eec96ac2e197435154b9de1708d72006f108d01baa43ad536c5b0a4bdd1e605a9822298ba3c7696bbc0cca8b4cf9731c37907541450ed3c1322d7970c1a805ab67b9411b2ce489b10e2f56e8977e8afbe2d408ee896bbc1c545d88d5e652ff00f21ffaa56d8e63bacd64a8c0d050461d110a7b24a825e724b17703cc0e06d7c238c3eed1fca826b82baa8e82c63b86b30cdc5563ce200e4cd78712b071bff9446d3c2958f998c7cd66cae263174816f89683829514c48358f3dea5d5b75285e65d38be21f74ba9b3bace23be882bccdad21ac1a2ff008278e40f6c2e11fe14b05ae7c9ff00040dddac9d3ff252ea2818a66af395f02dfea08cbe8516883e98a4fc98e6a0505851b0929e9a550fda0a801db2be22181d81c0f2711043efb4efc61d67269e3482e3b6a0fc05e5fb08b818b0941dda3d108b9361f83c132a8147b3bfb879296a3af4f3d0cb423de37e595a2f780bfb8444354a95893c3aac33a653e3c88bc930cbc5a82501ab858578593e106d2a7cdda0591b788e690e77887b4713e6ce9567e660056bb6d258b4ce58ae42c1fe883cb1c2be816956cd532c0de1a9863c13c602bb7a372e48e4d0f91155821182e1899c39d65dbee63f29656ef8c1866aa3015be1ee6bd3c1232e23a03f5169842ce4a88e018ad73337b964b8d2d2e5fabf8b998acf988b4a25dcf460ba38229f6618988612cd597644c8cda0dc681cb5262e3b4b676f12c8be9b38b30dae2aef4f552d732eeaaa711f73cda42472f1d22e704a675a84a350468842bc40fe574ddcd47635dcab0f817c8cda9c1f031dd4c2394d5f4acdb8ab27669f88eabbeeb1fecada59e5ae7dcdacc79d701562a7cdba8b869e9b539b2874352fbcfbc2137f32e7736a51694d3637654e2a165786316e80b2dddf85308afb79f111df907c107b01079ae25e53f4f72d3f72343f7e6315bc170b3c3e23b793ed12bb99c669d37e9a191e11858794ceee2f908db97a79a43c9dcacbdb3fad4a8f88b9368377bdcef005a51298f8021732929681c333bdae18ce653d57a578f9d4b331860bce0e99669e664cd5ab9a6e0b3f21fa952c15671f98505b0e99e7fe236f1a1e759a56b3e0ce0859965656e5cbe93465078a528cb247a0fd4ad7ccb59741dc3ef0ff00628736555bc1ef3c17d6d76a62d6dc1fe9f01fe9160ad8703ccefc067dc46fae2cb631151cc3bddb7099a110633f4ff5367ccdfd3efd2eac347b74ad70fd5fa43b3a5b27ffda0008010203013f21e8228745a8ebf963b312215d10574a8333b7314e09431df43a2862e5dc6ba2065cc68992a6998c2235328450272cd47a12a628ad3ae8c1888cc91505be9e53832e6e3c415c6c7411d082e09338d208fb254f31224134f465ba3f7c0953e89d64cd62a5c50211d351f47a8f338a6f14bcd43a5c5be84165316c8aa2c40c5f5894a60d3d2a09792dc3c44c3a1147520573b947a1890412ea39a8b8fcc72a8aa09ca583e7e8ba86eea3a08231a6c999d1c3963dd8f7a1a82a301de542e1e515dd9511ea2c9c0c723584c74928cd4c98267a218886580e25acc4cb7b6c285442a7e920c65ac5bccd5e822b660d8880be27994669cb1bd2cd45acfd0291e81cbfa089d1948cb2f4da80dba4b1d6e5c7a4e43d047ad5920cccf70ee89911851899be3e94c46e11b2d52d61d9d1584b3a06aa205b8b331bca03f42485722588c5847562bb84581d20e9649b12a53965931f4114f04fbfdcc1a832798befa0aea3542831c20805892ecc08bc1aa7a6928bb8845d40ecea63a659c425c30c4e814410cc17187493e845330630d3d18820c230ea4a8ca5fd46b0592aea50808be9e408f4a9503e979e829718d4a4863a822e32530654a952bea59e83a6b7153d494457302cff00e918742d16308c70707ff34c21ff00cd99fa3fffda0008010303013f21fadc10443661771824cf12e1613b9d1b26a1fa41728dc4818aa588309e302b137308855c5ace0897f505acccea4903ab15153313f131073d10d364a5fd070268b71a9dd2e41831470e264e8f6a8b74bdd07e86539689b9823b8420e95506e394e28645170cac4a6075c1b99e602c455987d06b0e9b321da592c4ac1350fa0262cc2ce2288410fa32e8405ee6825e0c290eb5113916f44418525f1c6882f683d55708e33866353a40f51a6721d1679cdc1990b8151730dc5730aea6eca245969b874a952a03d3bc0709b11d4c25cb1e8afcf4cc5c1d57a70cec7d3f4baaa88b88a1dd00c22a543a71ce7400c4684aeb52e72fe9868e8c265d63162639c8c4a13b93047e860066d4acb2667d06a652a995c413ccbe47a6e23a902c331b8b28c199423994b08a2c7095b50ae815bcc6556e8a079663ed1e1938b4fd4ed2baade52241d1ca264f79577291388c16546f5294d68f68e60661c80ca389d9f40e95143388c7446a0c7a734c59826cdf4d7ff0cd70e850747a1b22a664d7306dc55f4822e89c460af4b9717e96b0598a613b90764b51d37281094b2290fa12fa997f4688a0d1d1f0cb211a85b4ea563d2e5cbeb72fe82bc10ae2ce8845886dcb574be951fa78fa839fa38fad9fffda000c0301000211031100001067f9af6ef42d8fe0dbbdc75891a42b9b68fbf35aa4efdb8b42a616ff009d78541737614c9563a81470c8a552a2effc04d4b6cf7153ec9396bca0638011eec51336a42771163c9bce318be201c9781e4ca0b97fbd48510505fdc4512fa08387faa210366b785dddd4074d3daf4716330824f2e084923c5b46d6cdb3a26df4fbf1c3f026e5a2f1a992770603ce074a9c1733580fff007f5210f2b8b4da2dec414a5797b1302f112effda0008010103013f10cd1ca344c9287286f17f32f9bc470e032ae00202992041bb174e32fdb32be8102adf0a51af11b305d228b440579e7d12a1646d45ac8410badf10fe50d2a96d40c088bbd545765e9396fd4f2f12b2d679cc46cb9af1973329b0f29e34d9cca8caeca842ace1b401f70d42a0d023c45d0217600b158e3873e2e0653049698900145fa6675a0e47397043bc74b8387041189a6a1cb42da963b472172a99c3a944be5cd0c11acad19ef099290ec253c10bac0085ad5a15bab8cbdc5ad90f705971f861e718e7051431062c948d77a3c8b1786951792f733c5c31dbb94abed507a299a3c5edea2ba9a02c95c877169801583a5d9e77a8519af7c9518cdd38feabaada36771847ccb9d6f3c4d1306c7d2e73ede20b7622f6374244a47960e02ac328a0439727606d0a7bd778cf021c4652ad6211050b4c22e7923ef3d8a5159c2d8c8871cef576aa6ee2132efd639bef9fe4002a00adf01ba22951098a7093ab5371aa56e7c0547de51cd010082aeaae0064765e51fb9a65e900eaed02bb26532da806605f266578ca421c880132c0fa53f507c71069ad9400aa2bd1b866e39975858ec370223619a2d33e3f28eaa99c14a3f7427a5264fbc73ac095c309a018ec44331a7ba43c8ba96a4a4b650500f9959abd4de010a2a2b9a003841b2e0284c0f61baf75292b1672f2b2adae99dc95c47b10b12f5294412a25e6a2fef02559bae01c9f7b82da15ab80f981362ed34c8e43286597032232ef5cc6ba2adfbca76f96c9ff00b2cdcb9792daf8e11a8b1a6589951f70c70bd8b56f97837093c15fe502a2816668fddac512b0d8d1031b8ae40ac3da65591c2c6862d3c46d134f0633702b5c945b3b31c926b79b6f8d41ab59c38d8d5db52accc600a93b0628895512cc114e62b2e81bf12bdc5bfaf3ddae5a90b0b9b24569b152eec5c12a006b1cd9ede0180b5423e4d0dc420a3b0a7a4e688e6fae11a93c3e609cd76962646bc908546ca2c3b4b66d08a5d6638c50f23070dc407b00a1c57cac0f934361bd5f95c4d894ae7d86922bd895049430339650b6f657e25c404f0a38ed3bc47980bb0ba81bc40141da6ebccb4b06d360c3dc6b4ea58ba5d39f44c5079e264422de030aefe635ed68d3419718b83a1cc6cf6b8e32aefb874ed7446634406cd7a8e588507ca41c53f32b0ae8578c779788858a556b019e65a3fad9a96e5878523f80b0d045a59da3c40a0e6d550ef88e18c218282d1122b0cb0efc96217f700179698f573454429ba52755cc6888af0d26432e0b29283a65283df6894f40b1e002bb45abe0e2b55a2735f1007d00b62c96dbbc4420b8d881442216db7e4a88d18805cca5d7c53b730903a9147377983ddece50f6122d7aaf4b0a04f0290b0dd6b5a924828ca34eb220acec0390bc5c2a80026017454ccda2ba9e9cad04d98048e954929ea54c1af817461f998d4939038b6be561883f5f0780e16662a86dca64cd0b61c9cf92a04fb371f430e8907e0457c4c0c731cc3cab40bc8a7a8a419fda041ebef111d85a0486fae834d63f5986041406c57fe99a2a1081929ed834000aeb2ebc5ce2302190837416d15128103cd9631921e04499d419cadc8bf511c87b8d58e2ce4b2e6200ad30c2631a7ee211466911ba4ab7b3b7cc4e0e048a6103a943c2b120ed09ea52094ad08b672e6ea570a28d1b128cbbf5ee58e3895fda2745d2cba08ab80d03d81af883f2fb21398635035a6bf7193e16098709472065d4142985c01511810363afcca048e04abbf7b61bc8ceca2dd117af6399b9b2240628d7f4bfd9949add9cb396f81da5e06eca8594c85b8c32b818ccb7c15dea8b95746ac2dab50d4ba6926020aedcdd9dfd47a10d31de235f88fee35a917b043de2c5cabc9452f30ec0c7bc580f1de27cc0f33ba832307c4bb9ba0ccbc76943fd51c682b0ae99738cc0a7360cbde7e63f67302d97702b34470a0f71732e98f117c2db039bc915ec86bb86627aa5a77610fd4392ee5be6d6088da3206cef18b6c556ec0476bbe5965ca8a576d838caa941d721601a4314ec94654688159b450626188525a38132bdcfdc8aa821e190565a2aa19218a73c09658ec88945c3016bb3b8178345976287308c981b5d64c7b8c32dc4c441adc68f659c059c5f6258fb6d56daf02dc6770cdc820bed6b2f0d7e42ea55c9a6605b463db0b7158430a95a0ac1464176936955d80fde3a079afa668ba1c334c12361d9c06ef398d9762c3e05233ce1bf8941484b0d69616f965d5a822eebc2cc830bead3625f3517c048657c227ee28388c115e6e8086cf70b18adb6911534e9ef943c98c3b29959798d5e8596ea8e5f13030f8721e7ddc756dbbb3182916a76c952a5e85872443bb68ae2e3f4a5636e642afb4475394bcb977185d127273fd188e05887d4730c1fe85b4b6fe2882f3c7169ac05b1681853d0a70e5f31300d8569365ae38a63a8c593043563a94dad01d0684b061c938adb72d5a2b92bbc42b210ee22e11ba97b25c29bbb8bd311612f568a8ec49856d2fb378968a37558b3b7e25e657db0fe18db56a118ab0bec768e1af421402e2aaa943bc20c9652e935ab88a8e517a4943d6800535dac8d8a3d7b66dfe195d97e01c49c5d5661bc128a072864fb46477cedc390ef1e6ec4aec188da2b3c450d33caa6200ba6a1e900b69560959ab825fccd422a8c936f733b1cde2a54da4028fc19f98fd880f2240957d971ab89d35b9dd135ea5bdd3445597b4849fa8805186959cc434bdbb7ee4ecd8f920f4e222092a680b8aba1459ca6c455f330c532f9f4dabc6d76253230033514bb2d919a9641df4012b24318800c63ed075b219dcc5ed2e50a011a5aed31534464bc7925fe53dbbbd888d4948b67f1886b0ab6a4a6137278b9949cf10bdb8263621b17dcba87d2a82d8b2d3ef9967ca14752ee85d0811687af6710ed538f2d81af3b2260b80b154bab45e584603b565cfb26a05f270695c96d2698ee7b6dac621ca156ca0a15b08ef022d8617159ccb8281b0343d66341381568cec2fbe5885972e52e1012db8975ca0f8bb7d10ee9d64f5d6792f4d4da96a664ae1e20d99a8dc15cf32ff00e2a9f5994715734872870f9253f6f02bd02a0e9fa4071f62b5daabae799688c9820ba4bb4ef03d8b82db56304139a644a339898155b9a7a8b4dc2ecc31b5cac59d9fb8bd2bb9385dfb84989728fea2a8526de710f2feefa7cb2d190015c72317c7dd2d4a06eab80a055d19c453cd407271ced77b421d9c53938c9ff0061952b44e6bbf32c055e0ed0e7cca80a7491594c7098f31b73391573e083a0008023b9e699b7281dc48af1fa4b1c4439b116556f7c67b0f70686853343a0aecbc3175965943dac9e9d3195c25715fdb8e88229ed165a51e062f3d39486ad9117d47c20023b60fe2058712ef9a8eb6439a0bcc1019541e581ff00c6d4eff36ff254cea709bcfc697e37e93f47f44ff17b47f8bc13f37fb9f8c7ea7fb1de7fb3ccff0063b4fcff00da3cc37399fb3fa7a3d5e9fdb3fd3d4fffda0008010203013f10dfaa848ace822d8dbe5ff88965732956e10cb18688c150ae4ccad5e203a57f66b7946ae312cc6c398f96cb9d3697997914ae22509290b270445995f5a8f65174cc9e4b2f9e8c201ef14d3731371a2862976876012655f1b22be82651084b956a16c23c3b3fa9b0656a8384f662d05c5bd44a5ad770a55ed802d22e031c3bff0091146619e1228f55ecc03cca92aec450bca645ca974a6046d93989ae049addcb49de503b88acef090efd012a33ab08dc40cab0a4d04d0b205c48e3cc736e7039868b28492da3447996dd4a56597ba2849a18d6e2d7923ea435dae36efcc6ac712d146d6214b7398b888dc6eaf98275f1ff00660ae939969a2d5463714be820b60f8a6e0a870772bd10b788d30cb099a254bbbe2302b114ad1c2111befd80ef0eed83e0805c6ae0c2825ff7c458306245c672a8354ea2fa2ee3e3180b66482dabe995b1058bcca80979ca0913537b1e3bc4a9df108c0a82c81022d12ba930ad30f7198f4234a5880cf349a961918f30fda3f4db11d97c4401ec4c0f145478aa083812c261e95202009aedc072dc29393629df3b8a98eef730c07cc070fd4d60f86cf704b0468350141ccb9776ff00f9d100f282075b5804b1a87004b96e89653998fa946a5d399c24a91a84150ab4b94a89e077f133d406f171bb2ddfc12ff0b972e5ba1a370c991ed8ed9980ca18b1518583cf4d974ffc8e19de5ec76f6c43b74b615c083c087d1722220fa12a39198be08e94524be0b6663b4768f1b7f539b0e8fec4d7bd41056195037da1d2f1886672f8834638f341702a22596267d4b0cbc96740c9cd2c23abfbca8ae25f41069f1cb4adf4d2a61b6cc9aff6f8982834f08d8363bc0bae81f98cbe07696386a0f90c7b154ab1920a745c41189c07897cf1ff0025cc11f08c18d840e9b85845bc4a6dc0877150b84177089ec9ea0acdea63b047b2dcacf48c128197019adca55efcea2217b96cba1d3d1c3a671f5d41bae4a7119893b932831446b8ef430c4d26c217006e0e225c3a01f29c04f5aa3a6b52a62678658ac5789dfe880095d14e868ea1d1b8c51b954cc21a60a0de3ed0b605618ac7df4a8900b1b4ac608aeb5d3362ccda04136416a5e0bb79d7de3c497722f32e65cc43a54a8e20461d1e5378332c2e26e59719e950071c8ea236460a40195d565df4a8426f9b4de7ee9a4ddfdd475d1b1d2edebe913886a7ffda0008010303013f10dba3d232e1997707b41b44f092e8202ed8073a8e19622ee98fb9fe4bc4e1116c46fed896c5508c318ea88aac164047ea00cee0c378876459ad88e13550c5b533951d67dc1077965accd2831d1e8656689329de316dd4a75013313289052e09a9640aad426eb5151caa8d5e4d41bc9c7e48fa338a2b06e16e5386708e5d83a17cc90929990452fc4a1332ec2c17d91092591c6e1e8c691c4328d04b5776249650c5d0b54a96ca96f336a64a30460dadcc17299906704025448da1c4381e6521b616ec8486e0cc388068c0f305788731017b54669c1fea990ab1e20ec68c144495122ae25ad8c23c332ec78ccb3315388a883101704d3076f8884ea251aafcc1c53370a9b232d112542d821ddd8b2e485ab6aa1186c8a8138422db071de2a6454a8e4768af9d448b14ca0ed22a2b72a6e3d2a1961234788ccec101cd5c62b52ff3ad50b309aa12830c18663b279e9f7e62a7265b92ff006654bcbc5f41716a00f387d116b3a214aca26cb9a71e182ec6a31808fe3e25b55052c9b6989804ab9b5710555fd3f62c6dabb961474bd48c7b84b84031021c6a5c4a1ea57cbc47946d7cd4c215fb99c7823152a31f1897e1e1d1d110c4b80da66c40d419947b4c02e2e60c071196f68656f2a412ba8b2a3d768868f7c4adaba88106c25ac0a9809c90d605962d7d398261704472352966ea6dd36a8851a3bb2f39622834a4cf3f7944da02a2036e9181d1ba5388685e600774a0b96dbfb632153680cb825f37b8bd07f09606ade228bab34916a2c35de291773c54bd69d432d6a0bfe4c419dc62328463888e40c87fbef308aa8519845614065a62005a39f333df796b2aa8048c05cba4e7bc543039a221baac502828973117532c1582eae62b75029aea9da2cada7300bedda3ac237048e1ef0ee21a58abcc710f32810e0cc9b60cc5d55cbc9925c598b09465fe7112cec7fec5702fbcbab94ee6082423980d318c462d838e973f12f8f3d162f40cccb22da45d0b86a157300204645c7d4df93a014732996978f41e65c518caa086aa399cb6257c1305b6f50150cbba0f831971719717a59ca39e8c3030432e5e322cbc137cc471ae81175934c58183dc54ba160a3051563a2c631d26b19b3d13846729af46efa1c4e23beaffd900, 'Laura received a BA in psychology from the University of Washington.  She has also completed a course in business French.  She reads and writes French.', 2, 'http://accweb/emmployees/davolio.bmp', 2100.5),
(9, 'Dodsworth', 'Anne', 'Sales Representative', 'Ms.', '1966-01-27 00:00:00', '1994-11-15 00:00:00', '7 Houndstooth Rd.', 'London', NULL, 'WG2 7LT', 'UK', '(71) 555-4444', '452', 0xffd8ffe000104a46494600010200006400640000ffec00114475636b7900010004000000480000ffee002641646f62650064c0000000010300150403060a0d00000e270000133200001e3500002fa8ffdb008400040303030303040303040503030305060504040506070606060606070907080808080709090b0b0c0b0b090c0c0c0c0c0c101010101012121212121212121212010404040707070e09090e140e0d0e1414121212121412121212121212121212121212121212121212121212121212121212121212121212121212121212121212ffc200110800aa00a003011100021101031101ffc400d400000301000301010000000000000000000405060301020700080100030101010100000000000000000000020304050100061000020202010401040202030003000000010200031104121021310513204122323314230630421524343511000103020305050704030100000000000100110221033141121051812232206171421391a1b1c152230430627233d143531412000102070101000000000000000000001130210010204050600131701301000202010401040301010000000000010011213141105161718191a1b1c120f0d1e1f1ffda000c03010002110311000001ed29902650b34064a05732c665deb253f0246fdeb69e993ba0673d40905545a0fe6a32f29a796eadc43a89229bed04fb89a35d737cacf5b17513e7cf5cc37f76017e2048412e2e209caa32d3459e6683658b6740c7431a0a857224226e9b0b9e4d74cdd9e0ba7a09b43d063a693929853906ad7a1d3bd91e55e27a33df63ed1a836ac8dfe8fcf41d72f29aa5d3acb0fd411e8c56a62b84597b069d38add7613db210c512c4fdee600df19edf9c9a6c676a77ce75595ad992966d44bcaf9e13c93420b67e7aeb3b62d27735f2da946c1b290c49269fbbccc4e79177875155766e8ede4cf3c37d1f9a4f3ebf7552c54e7f2d11da79ae81f693b5a794d0e22da829b3ee4afbdee9c3194dfcf2dd2b2cbd2cba277912ba79132c63f8748c5986e5627e6a2eb54f0cea59b2662731868d8d620386f33b8fbc64365cc6e17a2adc906acf48de3b92d0dc8df9d49405ac5a2c7c0fbc933c02f1b4dc8daba3925ea2d721b80f9d7ab194fa794e2ed9be743da7bf3ef65f4f15c47a2f916341629b33c3b33af57c2e0d5dd457b562f9bf3546b72fbc77a845bc476aba2608b9cd78cb5773296e158a61c205bef4095ed4a52fa0c8e7cf9d9c0b7d02bc1c78588b4825239eb87975a569197bf3e926256c1e4b96595ae134267422f4882da4e4f42fccd4813aae4435ddd985dc97dc87a012692dfcf94dec67b34e4eba99563e55b5c9559da3e8b8db7e73b19d5d3554ab1a4284934497b44811b6ab10407ea6befce4ba2bf07bfbea787b0ada904f93f5c896c8f1625e45a0391d54d5d128e8f88c7bef3cafac07be92103329e6d5a0efd241b7be79cd4a09c93d51e1d5625e55547c7ba33a725355bc1a6ed4e7c2181797116a435de8f360e6a32963e5d7493ead37731980682a8806a93571bdcfd50e9938f759f196f0df4e09977b523fd5e9e3d64a08d3481982adbf9ff56203dda5cdd9c18a19b2700d9bd3cb653d15599ac2b9515af87ea38bf4558ae76f183d6107d6a5337f47bf150bda3c7b4603d14359ea709ec5e8679a8b3ee12ea2515f3dd636e798fd1fcb9ab7fa0656d54cf453825e3a121b3f1ee460d5e46f6fc1e5944fa0fb0a61d27a066016b7e25e3e7a8762446a92df9a42db471df7f068dc2c193259b3f78dd226cf616b28ed6c406891ca98643a49ab87706328f4457251e8663ecdd50698837a8859b3552f515b943a1adce366ac959b34b66f4f226edce7007518fbb1bab8ac66b8d9eb594ca1ba6aaced49ad1cce38452dc470fb7b80351c81398f437f732354ce8667268d3bc719bab33a594de3b494dcb6a80a4d2d26b30352eaa4296edc58bdd206e49687b98f40b125744b31a590d97c56d5bb87411db0b053c99ed04a76434d0c3a0a8d2b6b94e455cb16b9d286e41a87bc8749925ca6b82375b1a86720181fffda00080101000105020860ae2a438137f6f338c38cd4789bb4b604d652c86dc25299bbfb440fed58c7436ed59f2072c9961dd696c883a666d6de2043637f49f1768dbc752b0d62503157ab0b3ff1f03ff01955bd0b3cdaf556eb97d7e269b9a99a569b12b20ca3f513e49f24bf638a9334d512adcd86b9ebace75b5c31d5ac895ac0938415c6a11c7b1f4a8c97d1651b1a2af5526d0175f690bf2060ae37145bece44372766e1eb9ace274d5ee3ad471954ae01166262309fecda46ab92efea36920642966bcafdbfc4dca6d5a736feba957e62a3f1f03cfd7a77412b112083a99ed3597675762d228f5ae4d1b162bea7f5b30d865aff9589cca2ff9341d3687b1a169d8d0fd6a891562883a98e32bed2bff00e77ac503535a94d845d7e12cc2a5d664d3dd1072af52dfcf737976e691fc682028dcd7589bbaf12fa5e022663ed5554fef54d17611a7b850becfd6372a57606956fedecb0dff00e44b2bc26aff00f5b57702cdebb5f9b29b36ea1f1ad6cf64aadd1aa3a5162262b9ad6f30de368d68ebed6aaa6b7b3d7db3fec0bc3d9695cc53d8d28d5a6b72db450a761070d57089b15709a296d735ecaae98edb2360a8f537f1f49a6e945c2d69eb1cf33de6f699b767d6fac6a80ff5fe3b5fec1ace37a8d11c1b65d2da369393760d6bacd74e53675c7c9b806a68e919ae061756bb426958b12961364fe1abf86c4b691704a1d271c4f6b48bb4b577aad9d2de236d6afcc920cb2dac4f5dbd5d765ba449f6949bf5fd75bdf59fb50f15f30cd8f15ff2839026219b8d8d6ab35b521edbefd25d2d94ed1f1c9d7134bdaddae3fc362db47f5b6f59ff001a5e56f0bcb76c6cdfa8839a8fc6eb5aa8978785a7b9bbe3f5fa6aeefab4534cbaa4d9f60ada3b55ed6b288e040253b469aeebc9b754e6aa2cc4aac9b37fe256dd7b75bd85b5d95fb35b2712ebf236a5ff002647fb4dff001fafd73c557746bd6765aaa8a622e41bf10642b39966668ff02031338b9914d96e94d63eaddc5febf5459eeb5aa5fec27b1a75c114ff00b6dd9bb46bfec1b3d65ba2529d7d917ab2963c61ef2aac1a5fd7b2b7b04e13d3ecf3ae93dd14327b3d14db1a9559ab284d4b12a5d5a50d06fb788542401ee367fb9bbabb4facd67b06b65747ca0ecbbc71cd2e57e5a3b675cb6d5564f6d58e1adb075b635f612c1ad7623fe4cfaa5a534eed5026fbca28f8a59e3dcfb11af55be757552c4ab449b7d96e6b68a4e05632abc6a51a00f558dc37752fada96d4db7d73abbeaf2ad90d28e2f11567110f69ee7daa692586cbcdb462b5d87a636db9957f96dfb35acb2bddf952e06569522ff0065aab7717e601488accb357d85a934bda2ca3711e7f6567b4f7756954d6dbb5755fa93ce6d028ca67e9aae878d8788a0298f88f7607260f5fe54bb547a20c4ad88946c5ab2cf606b4b2e6d8b6a181a67b2606c7ba0ab62779b4f88bc3e27fc9a8002da3e48eb86b12534affe3d7a76593e3e05566313e5e31ed67293c5742f0a36dd85db96fccfa4bcaf6b2be4f67e218f2aecc2fc8480ddcae5511ffa4a5a9ac7e65463a59d2bfd9ff5ac37c1b3ca5bfcbaebc75b8996f8fbd717f55fdec94ff16c7e94f9e9674afcc3fc77ff0023ff0028ff00f344ffda0008010200010502eb9e99eaa5634c43384f8c465fa10fd599ca0611a6672999ce7c903ccc61184310f7ea7a3794584c63f4e2627899ecc7a2f9e84f55fdb11ce213f5995998cc780c10f5b1a03df3d9bfe1300ef67959ca37407a30c4a8e43ffc2629fc5fc980c680433eec2226237d39e9ca72999f6680667c533dc18de5ab880c07b74c198fa7818441e184485bb388a6379432d68463a2e22b88f887aab609b04e66661681632c2662344695f767fa4f52263a18eb8959c47ec2012daa0694b60d83e93f4986130f8e795304063d59e81b20fd42667284cfbd9884cffa904447826614cc45ec7e8f30accfd150cb3ce398064e7a274c411bcf5c19dfa9e94cb3b4f933391117a084f7174a4cb97bf456c42df41e958c074ccf8e667183b4532daf3024a0c65c823ae66667a18a208ef0bcaebcf4cc10399e60fc4ab663a661598e804c74033d15a15cc15cc740b1abc458c4ce19159c74c464857a7280667807a2741e7304782049887c807a1e844e331886590f8d7862c3e44783b4114c63fe4364cfd00433eede57c56311a080746138cc4cc27f2f27c751d1a087ca45f07a0821e9f65862c783a0e8dd47813fed3fffda000801030001050298988040b31d595a28998077e7058629e87b42332d5c7d2ab3138c64313a002769859c04290ac530451897af69999883a2896340b152621309999ca07303e663be3a5a3b4c445804fbbf652d2b19e863743d443dc41184748220e952c61db1dd3a1861fa6b318f61e0ce32b19331d03cb17053a184c30fd00c2b963d1a52b18c1e3ec8d0b0316198850c2a663a0ac99f119c2570c782c8a3b32c4f0964723247e5d18ce5331c41018cc262219987bce3f956f1bc278759421110e618f99652c227210471da30ca8a984c289577e84c5695ace588b1d3bda78a55e0c267c82334410f88af885c4cca9b050f296a6457de010912abb1312e4cad0dda3084744ea666089e42740983d184aee999c78b43184c40311a1f2ab986b804594e619f704347486622be23bf71d08807534cce27ec3118e057e19b13381c7a3c10b4689e3e8338bb4febce1c63f9b3c567215310ac6cf551f89d7ef7cd77c884cc030510a308c18ceca33de59de23e20b232ce50f78c2536719f209b03b23f120e7a081a330332b1df3074695d7d956596e2098861413183fb2b0c4aecc457cf4318ccf41da11197b0b311af9ca085a25d98e228027c98370cf40625b0106324f8e71c45ee474b3a1f18ec624319e660fd491d0410319ce72c95954fbec798d07832b11bbc6118451fe21599882626616cc13ec9e1e58d983a3374569cbb6611147e1e079eadd16183c591bc8e8dd1609f77823f8ae1e8dd17abf933ed3fffda0008010202063f02d2c6fe571d93ea03e1bfffda0008010302063f02b13c49ea6c5140e14d014366c80879b54d7a173c9365bdb078f63d87ed66c8d6cb99bd072452182fffda0008010101063f02ec1b30e2766f4ed446edbe7b5d5467aa790c0ab9a308823dc4a12fa6a113e51ef2b56fc934b029c06284863db36e18e69973697ca264c9cfda6ff9cb52f4aef2cbc930bee0137a6a54feb7520309a3a7cd4e0843209a1171bd5633b92dfa999565a4f797475113f76cef07b040c577a37a689d46b843061de9c120a1593ac7c7b2d2089b1cb25a2e3e2bd48f4363fe57ad1c3cc1063496d75dc1377ad5f4934de4d02faa47155a442c3f421f9301ca4d50b78d9bd1d51e28e768ca5ef4243a41a1e29ae61b348d9ea4b0c22aed8356e788dec1737521ddfa372043d28a3025ae5945b0841cff0022a301599c7e2b987b765735180cd088e9b50250ff00b443c3f705cafa6551ddbc2f1fd1211b78312fe0a51ce6e7e4133e9904d3e644a75ea1ca0a7a7ac865a22744e21ed1fde3fca1298d374758f9a75cd45d4b16e0b9640ede72cb95ca63caae9c194e72a3547f1011bb2a199a384fa7d853450deeaebffae2ecbeed6370f8206d83ea6523434f8a6fa8d5782fb8744534f43fee2b5c6dcb4fd50aaf52dcb5410cdf63ccea96355c92b65b1029f15e9f9b726c44edc65f247f1c757e41d3e11cd42def93a94052d809d6a8658a909613eaf02bd138da2c3bd19cde9bf2467e9812c04c67c1385f6b139ee40932d7206bb8e4a27f25ec5fb5097de8ccf3c9e943dca575b4dd8ff6c474c81c24168396c91ea303c142c7e4017ac4273909480333abcb45ff00a2c1f400938864ad5d90fb738697f0285db7c97460a77aff002ca1cb18f7237246a7109d538a07cb38b21290d5002a7bc263d7759f8a6c9326216024aa045969408ccecc58a6d41b65ddf08ea8f8840c6938d0f71449e5bd67de111b0b54af4af7f5c8d25b9424faad4f13bd4a4da8c082b8f6878f66eff097c17ad627a44b18a8d1f515a6d4fac381b34ec8465cf6a8e0a3506321f152d1d13af143b12b303c96a92237a6ddb04b119edfc897ec23da84327aa78b6b635ef2a65dc588c627c5961e8dc8e4b5c0eb8fc1315a4705a09e93f14244b890aa89ee4366919a9dcb785cc5032ad72405a1a89c91d78c97a77ba27d13cb669ceecc040719295cea9e108ad313cf78eb9cbbf648794aa2077a6de83e4a1e1b1d34cb2695c8fb573ce1c5389c6b946ab5185cd233644fa5285bcb506e214357535559b19446a420ecb5da9fad6ce20afe9b7ab7d4262139555be3318a898d60ecb7307f6af4cf543610aa48943064232d176317c47326b9f8bac935217d8fc56b9fc7e6535cc751221945d691805e0ae5c1d2ed1f009e356427070e2a14af47543b82e754aad2b4ceb0508db6237a9cbba284fcb8142512e0a6d8f1c57db5d71b7e017d5238c8ec36607eedcf704f932d72f7216b5698e3291c95bb1f89a6721d5e1b1e1cc366284ad973b9107a998ad12c42a5607108189e1b01ec691cd7e5d3146733aa72c5537260582c54aecb01b394b32d331ce3ccbbd56b25f6ce192f5063b1c165cc7505d49dd62a875de97443e651bd7a5ae72a9289dd2d872aec1f55c2fb5d394c0556acd6b382a7639664273324a3724b823b9d4ad9e0a206245501992c84079518cb1288180433de8461866996a52bbe629c609bb44a1f548b95eb0a0409c50395b06478233359144f72754c53e1b2b45280e9ed84c139e0a314595dbb9cda11f9f6386c082978047b43645414bc55bfe6767fffda0008010103013f216cef4025094105bf14a99dcb29045620aa32cd69f2cc0c9c3980a8078f788d51867d4315c30abf35fa9f5bdaf88f10c2b2b003eb29ebedd1fa8790846c0c363ff23a254dc3a06630d64532ed2b2b6b7ee2586de7df29750d8438d1f9cdc30aeceebb5ffb118e64a67e6a26d6d07d5364775e37d254c8548e11405faea5aad19e27fb3414d602f144a21d34ab264cc3082b1df100ae7b79264a052bc4132fc678986d6d7d657780d5f7771e34e9fc8a7da57d0596d221541bb4b20e397941031d20302b24ae14603c3f3598d9ed8539baeccb456b2da8f0ed2a3f78709b87a5585f780313b912971196b77de30777d84ab79cbed5fb2627ba4f779974f14412583f308554cba420222022391989c73fee57d88e70e441130d0f14c46760fc1169b0639e8ce784981356cb10fed3b95b1af95a0c0dd7b586206054bc8c54c6a3e92e5f40a2ab7da706a39cea925dfba97f5ed0ff00143e05b16cc13b451dcddca17824cc03846fda707591c3ca7b8e6a379caf2fa7ed0a05c41b2e1cf5930e87982d724b4a615f77986de67d549858b7241e70e6263a0885a8608ead9f7089e99f74c474fc360e7e3b23b80071d98a7e1895583820f552b2c6ab27c0b2ad2d7b4a5ce74d58d55af5716d1fb314c89efa8bfc37f6d3074c50ed11918d088de764a2483a76115e9a225cb7fc60a0c9b7d99b995cc4a5b278f52e7091b57e9758f694e777d1cb0879a44bd69e20e667d8c734ee241f4bfc435793ee600d3f2972f3dc22507b9742b922cfa8b828addf7eca9641b11ef58473a8093767e989cd34c7782bf70c076af530265c317ef476ef351d879e37ecc64267d9ab6a0caa11ad07cc26d2bd28be783ea0b1ac26f0d3fe113aa31695ec972bfd451bef6ab58388035e0607feb2867ccdc200ef1f16688a8ce4ce31294dee7282cb19bcca45d55bf86f111a50ec5e880ec98e925c289471e1fec7d52da3ed2a9d92d5d367c406417a9c0ee2e950f21a7eb2e9af816d5bf697fbf211e68556a52257188ae03c5c200eecdc52ad6a2e2144ba06592df6be936c7d2a0f685696efacca913d1c843f4cb135ce4289a370dddc232508f6962feb2ff8c045f50685d935540f382b10aff54c0f5339ee5488a9bbbc3a788a1f5d6c6125d1216f21ed431e190e6f731c8d93384b8b23bc492c712dbda34de66f9258e701f6584f984fc34bb1724f9c09aa60b8759650672065ed8249b558cc5202065a3ee09632d8175c4f784cc6731f1063009cb800992415eebfcc60eca1aa7ca9b528c95ac0f29769def1827a9548017e19e528b0198771b27237da37196fb1655ed06397d66af15e589dad290d131952795e1f30830de31e0cc33f1793f51825a7602f2c61cdaf6b2cee698734a63a565984166b6bda086d6a868b0a17332da429c4adf0253aa4b6d9d80f194aa785a7e66a64c25dfa47276e6c25b19db5c7164033508cf5948f2c3dc7cca6fd4d78e6c66701d86cf8217a18dc492ade105894943866b7a7a45b861fae2127fc882086fc29f8cc315f64a6633f055f77fe4cf032212d65392929a6e193aa48ab6cd44bd40454b8326714f91e884f39e9d2769802e4732c266ca2656555aea5c6e9a43466730dc8f115b01d3c3a65c8605bf192127c13b30ce456afa4c32b61a633f851ad03b337c077b3ef0cb97cf0c5505ed2a69ddccce8825b5783699d4b218bf13e70d981cfccb14bd5e60bbad8464a7982342fcca3d2e7baa1a474bc9e7e18a469ea67a810bf66946f3cc000e254e276a022cf9f04f2c4489b4c20a66398566614e7185711f57eb029acc9ac1a866a3cfb970bf29832d37da08fbdc3e605056ff110c951cb48e4958313f32f1783c4a6e5986e89ee38a8687dff00011f92ed7e08b1327d89528280801b10f76e713878b1f5c4b1a270176d30c2ba65c182b983427ba7bc33308b46e0bdd2adc44571438881f518a060d6a30b6babed051eea206f0c1ed6f94276a2858e90f980f4c84218324ba6b48e9dd62153572436ec9594f986b22955d818ff00697b8e6b29314258654971360eec319ba84bda6421f10454563092c0fb043d92c45dfeee56ade84277203396d5312c9ed2cc9b9bce5c730b6f76ebdf332fdea5acdb1308eba6ea7dec0fa53802da12e534ca780d4ba7088f1bfd2372b37fae8e3d07dc13f7cfeebb741ba3b8eba79e8399f87f89f60cfbd4fecfbf47ffda0008010203013f218b2e3067a1b8c46ccc54c2e971518994667c4a867106b12deac631af4ffee8f164b4532f2d2c4ef422d95333e90952a2e8d68420eaabd2a543a6314709632b350d40cbe911d41725e07504204a9504d91cdda6d2e978a2c37380984ff1a4210e8cc1b9f5d05460f4aa2128b65e2fbc75fc5010207561c4aad15c2a60315b5d2dea5d784c7713ad5096422e523d1ec8732d54c79985a679ae5dae250f12a9dc40834b44831810939b8629cf68a9be95266a9cd2f2e038226108f945c6f5d0efa6e2388d54c2a545f8961447d74aac55f129313e8a6dd2e530b8badb072a1b8ae59f0c442e2c44a6c983a1e78f41fe01c425752e289521f5932cc0d4261a65233e2e095065c4e8311a43a434881119929de69f513996dcee972e7c89bc4eb60e80e55cd4be99930baa7a53a5aae95b612ff84742a025f58db1de231713b980a817d0e4d824b2510f5c4cb972ff008228ca9b8551ca45681b9b24437338743522743aa3a2d7a546a62b89758c6db8920258332d1a17021e3d412952d4109960c1c70a8ee0b2d623c4447726a4b88871c835d0ce354741899c499482e66c4cb12e6012a634ea144830bcc151e609c934e8ee97d2624598f9477d3d08242fd6a53d47724c2529ac1899e2625b306690cb10b38d7417d6ff0004e6c51b84be9d26bd19d67f5de6dd63f85cc3a5ac36e9ffda0008010303013f21a6107f004084dc352e234311db4b9112fdf4e6e92b5e23d081d22fd343b7a8335f54a20bac678a29eec537322687409d7be10c2d88b1fa4ff04d814e7ee58ce142799738908b6510cd22c92a8d930c7517a2e5c5151c8964d3a4704ac958996d2d641edfc488c7a13357794fa4d50b1befa06a36a2567d40abe9063d62fe019532b8823a8da941d03da55a99208a828e85f4c28c54d04ab7164fc51731513c134e504db3bbccf6915965cf24f69963a3b4c539301b5d1cf138210086ec41acabd2642033e82e02bdce71709f0f4235d1ce4c24808a065396139e85e3320b96a7cc7514f4859921b9a892ae3ac4722643920b7445095b536e95643d5c3a1d44cff03aa50df8ed05b8391b83588b9a94c402169995a60c1d026b4588e0b1957406270cd214af10ef3d2aea764af4cc0ed163ad54aa658e277e64c46ac233633007d6548e9ed856698e0a2fa56aea2c20c0d608f125bb209efa0e810a09a417315a2d47cc361c090d7c4c0f68b324af509e538c453860d83eb2edba3b47d65e5905132f05236a2e0ea59a99ccccc11644b9a4a20d989f1d65c17d22d932d4d18a15d403152f0249dd312422e3a89191be82274cf8c4e2165506229a946b6efd01fccb61e841288dcff0c08de0d91e239260cb984ae1d1091130cb0dc77688e822e99a11ca8311620e9d67c4c3299b02a1d094339fa0746b074631ba0e24d5e2462e4de2e7a432a99c19cc1d1332202bf89ae25d83a3a5a75b379a43f9107f80c3a3bf57ffda000c030100021103110000107c2eb2954834d3a1215e385e0d4fe6b5728aff00c85c9c12ab29edfa0efa8b1e599834416c91a3d45713d599789725b83ce1e1889358543f63e44646ad67bffdcbd0357b3193247a619dd8f23c1a8bb8a1e7ec57c192a0c4830c929a52b2fa1c68c0ea7433ca1d61bf6bef39a4ea2118b8236953657933d44d4a2848f766fcc16da83a2b3dc58700289c730cc6cfe79a463c26123f78ac49c726a931480c9c42a56a9d04d409ffda0008010103013f105325462ada948ac4b7b198ee5c00583b0b7983cbdcd390b9b60bc3fe43320a6c09f1080b92d84094d2e58b38df35719f2e256336d5a2e415d82a2ee5d55ee1699c0a617e97dac62718705e76c5f736192d726b5da64df46637e7222b48526ec5798bdb5629c0dd2a3d9c2e8ecf243d3354f84c47b8337089416bc446b506f278298f0329ae6d3839cbda302ae09318a4a0f6bfa47059802fbcbc4466da966bc86b2de3e10b9889506028e0e1ff00d8e973c5abde1c4667514dda32e74c6d45e1d8b5a19e7c472ad73a975b718e226092f22fb1b572e3c464156acf28f23d12ba3284eaaa1c32a832a42ac21a72988e850146d93612e8b2c587642a205a6e3df5f98946c2cd11d2debe9330ebcdb767bcdda9f76985ef05dd7996e026a906afa6763b4666c044f2b59fac089316e0a6ecafef30456a14156790d32920355607b85db100a30917406242a264d0f66079268fd86b1ee5bed452eb8159ae1a6524a899d8387c2fb4cbdbe634d638d2b1452c9d58e3c8c30bb1e606d4e2bd83ccb5d48cf96f3cd407b660add997e910102c1d90f45afc11f6a8602f23dcac7fcf280571dfe91118c1ad39f3f5948003b437cc2d3b1000a80a404a1ac71052a154cb95aa9a41c7b12d60f5d008c6b6224a30bf8129a659c0c359073ba7273ea1134d4283cf1daa041b623bc047237c7e2240cac1f87fd99d27eb40bfc5ee2ea415289293ce1c7303b6ad73e04f6542c0005050b56fb95a1b2a222a27b04bc399dc62a3a45554f2890cb39744513e622250110036d9a52f5b16628838140f1ed097181568ccbdb04690968357eae213603cb2acab4a7de3f5119052f00cdbf48420f1a5a0e55e6a199489344d65e09df7517119306d1896256794a6c164eeb87ed0c818e3f331a601a8825ca92f51912dc4a7f49cad67d48ec9c1eb9571791522f757de0c081c0dfd20bf13046eeb37d98ba86198b656309308c80395755081fb42b08e526dec81f994c2eb2d93da7b338e61f50d80609a53063fd1335d05b625c590370855a0480346c9c51ff20647fb451103442b4e7d12a0ee80d2d634d4a58730033866ac8ba17e112923943ed5b9d8a06397b1fcca4d065e104f632bd2d8b462adfc7b968a1c82a6c546bc4cf1bb76269bc403914ba453e8f88c6300e315a3f2b345e3906b47dd5ccb0551440bbeae98b8011680506dce10cb2f761c0c3118b77ee338124077ad7d582c446efbcaaaaf061ed164d10c86342c34a2b45083697004117a645e58baecf883828323f282a3144e46ca09de69a2b467d4075ac5ed61015f1507871071d5961f8661911bba87d08e009a640c34555ffd4173989b2f382a1a66668d0800f764a22a086511e1b854ae89762b0f8dfa991ecadb0ef81b31af11768785ae710549ca588691b1a2fb462aec10fa395f1ae0de411aef2cd42dc294f4e5b9625fd1dd2125ed8a4a4624c6b13b49e222303ce04142ea9eec663f4ad859ce7752b4582a0ef5c906d5859227a819e61d2253babb1284bd7aa690ab21a43e278697e316e3b46e3240fb2f9f95ef09e10b6c3251ddd5c382b2c26d683c56d96eba7d5e08324c540a5b1751fa5a2c84298e108af144ac1057b6131162a3815165806880aa8556b17462c89cbab42aafb7ccaa0270a50d6ca26011d0557b8b931d2dde779fccb2c39686046cbdc628646fb2e22e06808c2521bbbb57e6128f7d5f66016ad3b6a1d37be2c3afd6aa3d09b44fb479cf7e603026f80398ee6c99e0b2c63018efcc685056698786cd5553e60868ee755aaf43be25060285204c6071490804474c95ed51236e2a1aba421aa392afda52ff00d590cab16164ce31970e48d7da1bca06fe603f8045c439acc5471371f0fa145a04e619cd1a7c41e248760072f863b2201d8552af8e26197ff30cdc96de4c473860d89829d4a81a6d818bb392276f2ae554f854cf0ca22d6f06aae0761e65393b8f52c05ed08480c1620073899804018179781cccc120ef9fcc428e43101391e60689f32bfa9d1a6beac31b8bda2fae6bf98a3a61192cd55f170d74bbb1fc01b8aca5e1dc0f642ac0d5f167095bb88d41ccd0e7c31ac554c3ff0063696fb2d3e18390b6bc1c2bacb6799fd9f611bc66380a80dcbdf8283df102ba5778554596130ef15514f6d666d3b9de180390252cc5420c1e896099bedf314bb24b0baaee9de66462ad9c76bf28c48d896269880c52b92b7fc40170852ad7bbc9302648aea1780a8de96832501f83d4b56a4366e2a94cc2f3ea1ae5a85f26dafb4b73c819155d4b19202dba01b7f107881fdab5f56210c10fd09cc370a7b2bbf96a555496a11c732983ed4c4fa2e668cf322fd809705a102d6a8bfdd88a9e835db28e5ed052a19523b80a4c3b9705456ce62838be7968bf88c9a6a25a410a74ce0132989cad0fb3334de8ae68672a5f7c4b26db03379ee7682b7a5648d060dbcb54c20c836390c7a945cc6b74bcaffd8e90115159b0fd05891f0e79e0c425c244ba8913baa7ea33d8caecf934fccad6816ede194a2fca5f9e9b1c290196cc73455f02ca0772111042b47305a39c1c42b80ad145151d00ca7006597f116de47dd370e9bf90abecc2874c7e09761de573086feaca53884d557a6b350c8842ca6efe92c29f6097fa97fd542f16a3171b20ba6ec14784e25c300c98ee3bd5ea28b6ad4c3bbe92b66a888fb1a995552d9677fbc2a0d586554a5bc91f6c64b4ec94d8eaa3a3b84b4f5095bc67376c68f13c7ab1d93c82c14aad35014b430f2e5633162c17474463000428d2fdeb309049529a0b45e5802aaaadd8bccadb07cf9c7f9183db5c8f24a682d382738b8828ea1f267c244607c6c2bbb925b29556a8e47b309d882ed7b2659655da8784995445504bd76831914d258d559101a5ac518f503c83e202bda7154fb9089e208cf8796b7759d112330b5e4a73ea155b6156e5e2660b76b1b6f9b4f7119d36b1af38ec788d80b78872c4294f351d501af4f0d371e7b9c8c61c667341936e4688fd5ba7b154826275a01c3d9f0ca1223c407c8629fb4afd666c0869195fa0cb584c9b370c0238991c55e605472143f7519da841787813fc9da1bdb06c0d01a08fc1463c09418015b8d3bc91cd30499d19ccaaa33a9ba387d2983b640724cc3a63b591da97d1f588cc02ad1cd25456be5ef149a8ec12be2bb458cc2138a6566a79e189a7460c118055dc6a53f4260b1f7b89f51412cfc544a2dab1682d199df385f7533028df93314e171762ccb5f30e11ad39cb5a9f7e34101f980be0808801dc6088032d04edbf518c9aa0acd35b8ecc9d0e29d452ef6d300131255d352a03095edc403b01e790fbc460091c2f7559970b669808c7137a6753996a55e2f10087151f58b8e5d7e232ad02ec347e20f6a2d3b43328c3c4392a6b6be5781f227333100a2dd5f6ff004c666663d84a11a4dbf3b835d97676c102d6a639130ac976c11c478d15674c58b07c945948ed1559c44986b8dc0bb77252e952b2eaea19bbaca65d5251d8a010e6b898037658d09c3e980415840df371b35825ecdc3b36b5846a616461549f7afc746ffd389a7dbf99fd9779aff4e27f47dd3f3e7e07e19a3a3b308fbf21a4feaf9cfea7b3d25fd9f7747fffda0008010203013f10b2047a4c96cc30448b8ef1730807a47f24ee841330fd44a0acb09c1ee1f58b08e968ed7f129676418b1451ac0102ebeb570cf7f4a8c6cf7180386a6f266163697c4389980cda6103d5c0cc3f04cd8547833eba28c2266a9b61a903c7cc00adff007717c4065dc21bf412e232b7242de316ee1fab1caf8e8314cf2db304cc0471e2600dcb1eb10a108e850a7262583c953121ef880f3b81172825cdc7383b5b957c362115a23efd1e97d4b82620e25c93516be5a872b3028e806ce806cd6d546ddaebfbee2d2ecc445ff18aa12a096a86d1948be0884787bf0a31de35af95caf94e7fbe229871c3336541c61d22a94a806e0ba88713383bcc6098b66255fdd89b0372e5ea1c872c655073b7cbff003640f2d4729a0990058740a997a8ab389342c4f916c15e2fbc64f094df9669442e8140e3f3068e933e1e6260e7f2fee1a5df4c77b857c23898082e84a989808030bb4988efc4622b963cae330e60834bcc11e92e6a5ccee33ae5455152bf697bcd7e10c7305c4b27c72e62e618a8100d245f30d5799574c31abdfee97996b8dcba8787b87894a2a921edc32a1ea1cc197c75d0cb047d38937af3077a34c4badee2b22fba5123570171d4a0b8f1a65759995f7bfba64e8aa32a65e625cd08b20cb2645e63074f118628fc913e514284e244790ee1bf754a51c20ae82a04001e20d5906428cca61c6505f02c16af7a256f0e7fe41b13809998d4b063302ee021da072515f8856e3773745e81750e2189eee090ec2146e133f82a26020d45b8a9630aa260b1214a0dc5098475014c353639596c9a60e8ce646aae64de602b56c5ea6bd04976c2c9ff0092ca7c63521cd7c79812a4da4ab03dd41d70dc6a9dd8753848c53d0629012ecb3b9a47f14ec951cada3d7bff0026ad8187cc0969da1e18311c389b020e87710d350ea73f686f9868a4acc260c086f1111a25939d76c1392520f331a9302933cb1da0dab445fb1029198eed12b18e733853291d41cf169884de9ed0dc951354363c13630caed710eacdc4b171028830b981dc3bc16031e6496352b4a582589586a05116611961a2dcc0afa5cc258aa210bda38bef32d3c45cda21f514e22cbb99c036cbee191ee0d0688eb6602207dd426012e04b01e222a595a771c09a8e2a4a27b9aa8e153286e2cc16c4d2ca5b72a63b880e48d5be62bed332944feab73f04f54373dd37fcfb9c751ab7f134e671dcda6d19a436fe9ffb396ffbfa9fd49abfa7c789f77cfebc477ccfffda0008010303013f101a3f42d84666506f7986882c8b1b022a1a54b8388015707de297f68a200d4b628668f67799536d410209630f98fe845867e97fb88cbea5f4c1aa9973059da15d0c519713d04b1913dc2417dd62c6c44f0e2014ecccd01c414d84c4007418eb7ebb7b8c6f31ab98019953d05916f110b1806b0829d6184138231ecc637d3b50051a262794fecb72c5733b6100236a3ae928c0a28d9100d85c490e1d4a1383c456b12c6672358f00d13c6199e70ca0622c4543d4d2074576e854ad39847993f51ce200b1d100c65681401a11076199d34e4ff2257469d6547acc2f989c53bf5b822541569afd40552dc92e1e1341b497ad3147bffb2ba2ab8ed2927846c5b82659311a2e1d631025e10ab3308a2d11848a75d434ad3c66580f067dca18eace0b8417cdea04636c71ff001985e96e60416d94f6410984362185c630d8860886a144d751c55bf13472589c9a99d5aa8d6e0f6483939dfa6366da43cdc1146bcf12c2bb85dc1ab660602b9accb5a9e6632783fc975a3652bed4d5ee5e5c0778310df310133b3ef1c61999781ed0f860b600a350049a4fbc3e8b19f92064da94d351f4f8b2d46ec56165de1a128dc67573336faca382392733397b3b42a9883a04a8c421ef2cae5a7b302edfde2068b4cc043b304b894c6b863ca50a0ae856c193b47df9b5197752ef47645c9cc35a8b6a838e4a800cee375dcfcf3fc03cf0fcb2b8d89977c457994ca93e25a9b9cc4e1025cfed294e0431b20a5a59f29e28996e44b831d4b26d732cc9cc32504b5e2500d483964a597636d131cda5c12b30cb918aad732d43642351c7ba298bb600178a9a6710f515b70267ae980b079c4170d9f586b05ed116a9ed0b633b7fd8cab51d8ffd99304152266ccedd2561c89b99102c9ac687e6643be8100c2867c261208a2af2666800f72d815f3fa9ba78aee7d76824b6c0bf998d344c66d2842590979ab77e20866696598520520ac84b3c443e0c20989520a867298617ca69e8ed2ab10f03366ba2c500bef02a297b7882d5eae364ec80649ab6232a1d2eea39dc47fc768361804c4482452309516ef8995c3807b224ac27611326e0f6aaa2d04114bdccd72a085fe218a6e21b88acc41e3282cbcc452d5426f6e0ef12ce1114f9fb4702a1d0a83bcd44c44c5620171500a05b3cea66e609ae95da391861b99945896218fccad0f78765280085ea640712b4ed15b5001db1d838e605528a8d937ff62b7c4174f45a1d142a5752e95da3dedadc37193999f102cca457b441b846c332d6189a8c1736a35fe88309b5c5875d2350e48d690b2632a6a56d5363f12a6ecdba9e9d4d89abbd7c4d9d3f19a741362684d6699b7dc35f709fffd900, 'Anne has a BA degree in English from St. Lawrence College.  She is fluent in French and German.', 5, 'http://accweb/emmployees/davolio.bmp', 2333.33);

-- --------------------------------------------------------

--
-- Table structure for table `enterprise`
--

CREATE TABLE `enterprise` (
  `EnterpriseID` int(11) NOT NULL,
  `EnterpriseName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MediumImage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Thumbimage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `Priority` int(11) NOT NULL,
  `Detail` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enterprise`
--

INSERT INTO `enterprise` (`EnterpriseID`, `EnterpriseName`, `Image`, `MediumImage`, `Thumbimage`, `IsActive`, `Priority`, `Detail`) VALUES
(10, 'DORPAN Corporation Limited', 'assets/records/enterprise/201512/10_141.jpg', 'assets/records/enterprise/201512/10_36.jpg', '', 1, 5, '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/DORPAN_Corporation_Logo.jpg\" alt=\"\" width=\"600\" height=\"400\" /></p>'),
(5, 'DORPAN Properties Limited ', 'assets/records/enterprise/201601/5_149.jpg', 'assets/records/enterprise/201601/5_335.jpg', '', 1, 1, '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/last-logo-00.jpg\" alt=\"\" width=\"1200\" height=\"374\" /></p>\n<p>&nbsp;</p>\n<p>Bangladesh is a developing country having abundant resources with limited area of land. After passing four decades of independence, the growth rate is raised but not up to the mark. Adequate investment with efficient leadership can uphold the level of development.</p>\n<p>DORPAN GROUP is such a journey lead by a competent and efficient leadership to move in the right way of progress. A lot of professionals and business fellows participate here to run the enterprise hoping an exponential growth.</p>\n<p>DORPAN properties limited (DPL) is a dynamic incorporation in the field of Real Estate in Bangladesh. DPL introduces the first initiative &ldquo;DORPAN SINGAPORE ISLAND&rdquo; at urban residential zone of RAJUK with the prime focus of high tech connectivity and energy efficiency that reflecting smiles of green.</p>\n<p>DPL is run by a set of dynamic and visionary leadership who are committed to serve a smart and eco friendly housing to the valued customers. Reasonable price, effective road connectivity and appropriate community facilities are remarkable components of value addition. The company will be liable to bear the responsibility and committed to the rights of people of the society.</p>\n<p>DPL is looking forward to engage people, serve people and go ahead with the people. It deserves the common thinking of progress and prosperity of Bangladesh.</p>\n<p>Wish your participation for a better tomorrow.</p>\n<p>DORPAN MANAGEMENT section</p>'),
(6, 'DORPAN Agro Farm Limited ', 'assets/records/enterprise/201512/6_119.jpg', 'assets/records/enterprise/201512/6_36.jpg', '', 1, 3, '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/DORPAN_Agro_01.jpg\" alt=\"\" width=\"600\" height=\"400\" /></p>'),
(7, 'DORPAN Jute Mills Limited', 'assets/records/enterprise/201512/7_124.jpg', 'assets/records/enterprise/201512/7_356.jpg', '', 0, 5, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Aliquam pellentesque pellentesque turpis, ut bibendum sapien sollicitudin nec. Pellentesque posuere ornare placerat. Suspendisse potenti. Quisque massa tortor, tristique non tristique at, luctus sed massa. Donec libero eros, mollis ac fringilla eu, vestibulum sed lorem. Aenean aliquet tempor purus, sit amet ultricies neque bibendum venenatis. Suspendisse pulvinar massa sed odio semper mattis. Pellentesque vel nunc arcu, id rhoncus magna. Maecenas quis tempus ligula. Nunc ac tortor diam. Phasellus tincidunt rutrum diam, eget elementum lorem sagittis eget.</p>\r\n<h3>Vivamus convallis</h3>\r\n<p>Integer faucibus magna vitae augue suscipit a varius sem scelerisque. Nunc scelerisque tempus nunc in euismod. In sagittis congue sodales. Cras sit amet est nibh. Suspendisse eget ligula in nulla iaculis interdum nec a odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras massa odio, facilisis tincidunt blandit semper, lacinia semper dui. Donec viverra eros quis urna congue facilisis. Vivamus convallis imperdiet porta. Aliquam a nisi risus, vitae faucibus sem.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>\r\n<blockquote>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>\r\n</blockquote>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Aliquam pellentesque pellentesque turpis, ut bibendum sapien sollicitudin nec. Pellentesque posuere ornare placerat. Suspendisse potenti. Quisque massa tortor, tristique non tristique at, luctus sed massa. Donec libero eros, mollis ac fringilla eu, vestibulum sed lorem. Aenean aliquet tempor purus, sit amet ultricies neque bibendum venenatis. Suspendisse pulvinar massa sed odio semper mattis. Pellentesque vel nunc arcu, id rhoncus magna. Maecenas quis tempus ligula. Nunc ac tortor diam. Phasellus tincidunt rutrum diam, eget elementum lorem sagittis eget.</p>\r\n<h3>Vivamus convallis</h3>\r\n<p>Integer faucibus magna vitae augue suscipit a varius sem scelerisque. Nunc scelerisque tempus nunc in euismod. In sagittis congue sodales. Cras sit amet est nibh. Suspendisse eget ligula in nulla iaculis interdum nec a odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras massa odio, facilisis tincidunt blandit semper, lacinia semper dui. Donec viverra eros quis urna congue facilisis. Vivamus convallis imperdiet porta. Aliquam a nisi risus, vitae faucibus sem.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>\r\n<blockquote>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>\r\n</blockquote>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Aliquam pellentesque pellentesque turpis, ut bibendum sapien sollicitudin nec. Pellentesque posuere ornare placerat. Suspendisse potenti. Quisque massa tortor, tristique non tristique at, luctus sed massa. Donec libero eros, mollis ac fringilla eu, vestibulum sed lorem. Aenean aliquet tempor purus, sit amet ultricies neque bibendum venenatis. Suspendisse pulvinar massa sed odio semper mattis. Pellentesque vel nunc arcu, id rhoncus magna. Maecenas quis tempus ligula. Nunc ac tortor diam. Phasellus tincidunt rutrum diam, eget elementum lorem sagittis eget.</p>\r\n<h3>Vivamus convallis</h3>\r\n<p>Integer faucibus magna vitae augue suscipit a varius sem scelerisque. Nunc scelerisque tempus nunc in euismod. In sagittis congue sodales. Cras sit amet est nibh. Suspendisse eget ligula in nulla iaculis interdum nec a odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras massa odio, facilisis tincidunt blandit semper, lacinia semper dui. Donec viverra eros quis urna congue facilisis. Vivamus convallis imperdiet porta. Aliquam a nisi risus, vitae faucibus sem.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>\r\n<blockquote>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>\r\n</blockquote>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Aliquam pellentesque pellentesque turpis, ut bibendum sapien sollicitudin nec. Pellentesque posuere ornare placerat. Suspendisse potenti. Quisque massa tortor, tristique non tristique at, luctus sed massa. Donec libero eros, mollis ac fringilla eu, vestibulum sed lorem. Aenean aliquet tempor purus, sit amet ultricies neque bibendum venenatis. Suspendisse pulvinar massa sed odio semper mattis. Pellentesque vel nunc arcu, id rhoncus magna. Maecenas quis tempus ligula. Nunc ac tortor diam. Phasellus tincidunt rutrum diam, eget elementum lorem sagittis eget.</p>\r\n<h3>Vivamus convallis</h3>\r\n<p>Integer faucibus magna vitae augue suscipit a varius sem scelerisque. Nunc scelerisque tempus nunc in euismod. In sagittis congue sodales. Cras sit amet est nibh. Suspendisse eget ligula in nulla iaculis interdum nec a odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras massa odio, facilisis tincidunt blandit semper, lacinia semper dui. Donec viverra eros quis urna congue facilisis. Vivamus convallis imperdiet porta. Aliquam a nisi risus, vitae faucibus sem.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>\r\n<blockquote>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>\r\n</blockquote>'),
(8, 'DORPAN Pharma Ltd', 'assets/records/enterprise/201512/8_148.jpg', 'assets/records/enterprise/201512/8_311.jpg', '', 1, 8, '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/DPH_Logo.png\" alt=\"\" width=\"704\" height=\"535\" /></p>'),
(11, 'Dorpan Eco Bricks Ltd.', '', '', '', 1, 11, '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/DORPAN_Corporation_Logo.jpg\" alt=\"DORPAN_Corporation_Logo\" /></p>'),
(16, 'Dorpan Uttara', '', '', '', 1, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE `links` (
  `LinksID` int(11) NOT NULL,
  `LinksName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Priority` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `Image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LinksURL` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`LinksID`, `LinksName`, `Priority`, `IsActive`, `Image`, `LinksURL`) VALUES
(1, 'Human Rights Watch', 1, 1, '', 'http://www.hrw.org/'),
(2, 'Asian Human Rights Commission', 4, 1, '', 'http://www.humanrights.asia/'),
(3, 'Odhikar ', 10, 1, '', 'http://www.odhikar.org/'),
(4, 'Ain o Salish Kendra (ASK)', 7, 1, '', 'http://www.askbd.org/'),
(5, 'Prothom-alo', 2, 1, '', 'http://www.prothom-alo.com/'),
(6, 'Daily Manab Zamin', 5, 1, '', 'http://www.mzamin.com/'),
(7, 'daily nayadiganta', 8, 1, '', 'dailynayadiganta.com'),
(8, 'newagebd', 11, 1, '', 'http://www.newagebd.com'),
(9, 'economist', 3, 1, '', 'http://www.economist.com'),
(10, 'guardian.co.uk', 6, 1, '', 'http://www.guardian.co.uk'),
(11, 'nytimes.com', 9, 1, '', 'http://nytimes.com');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(40) COLLATE utf8_bin NOT NULL,
  `login` varchar(50) COLLATE utf8_bin NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `login_attempts`
--

INSERT INTO `login_attempts` (`id`, `ip_address`, `login`, `time`) VALUES
(11, '::1', 'dorpan', '2021-03-01 06:12:29');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `MenuID` int(11) NOT NULL,
  `Caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MenuLink` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ParentID` int(11) NOT NULL DEFAULT 0,
  `Priority` int(11) NOT NULL DEFAULT 500,
  `IsActive` tinyint(1) NOT NULL DEFAULT 1,
  `LinkType` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'InternalLink',
  `MenuGroup` int(11) NOT NULL,
  `Image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`MenuID`, `Caption`, `MenuLink`, `ParentID`, `Priority`, `IsActive`, `LinkType`, `MenuGroup`, `Image`) VALUES
(1, 'Home', '', 0, 1, 1, 'InternalLink', 1, NULL),
(3, 'Enterprise', '##', 0, 7, 1, 'InternalLink', 1, NULL),
(4, 'DORPAN Properties', 'http://dpl.dorpangroup.com/', 3, 8, 1, 'ExternalLink', 1, NULL),
(6, 'Contact', 'contact', 0, 6, 1, 'InternalLink', 1, NULL),
(15, 'Dawah Mission', 'page/pns/4', 0, 1, 1, 'InternalLink', 5, NULL),
(16, 'Sadakah Program', 'page/pns/5', 0, 2, 1, 'InternalLink', 5, NULL),
(17, 'Relief for sick people', 'page/pns/6', 0, 3, 1, 'InternalLink', 5, NULL),
(18, 'Care program for Orphan', 'page/pns/7', 0, 4, 1, 'InternalLink', 5, NULL),
(19, 'Helping poor students', 'page/pns/8', 0, 5, 1, 'InternalLink', 5, NULL),
(20, 'Ramadan', 'page/pns/9', 0, 6, 1, 'InternalLink', 5, NULL),
(21, 'A story', 'page/profile/12', 0, 1, 1, 'InternalLink', 6, NULL),
(22, 'Creator of the Universe', 'page/profile/13', 0, 2, 1, 'InternalLink', 6, NULL),
(23, 'My Guide', 'page/profile/14', 0, 3, 1, 'InternalLink', 6, NULL),
(24, 'Purpose of my life', 'page/profile/15', 0, 4, 1, 'InternalLink', 6, NULL),
(25, 'My faith', 'page/profile/16', 0, 5, 1, 'InternalLink', 6, NULL),
(26, 'My Enemy', 'page/profile/17', 0, 6, 1, 'InternalLink', 6, NULL),
(27, 'My Quality', 'page/profile/18', 0, 7, 1, 'InternalLink', 6, NULL),
(28, 'Who are successful', 'page/profile/19', 0, 8, 1, 'InternalLink', 6, NULL),
(29, 'My responsibility', 'page/profile/20', 0, 9, 1, 'InternalLink', 6, NULL),
(30, 'I compete others', 'page/profile/21', 0, 10, 1, 'InternalLink', 6, NULL),
(31, 'I use my brain', 'page/profile/22', 0, 11, 1, 'InternalLink', 6, NULL),
(32, 'My time & wealth', 'page/profile/23', 0, 12, 1, 'InternalLink', 6, NULL),
(33, 'My test', 'page/profile/24', 0, 13, 1, 'InternalLink', 6, NULL),
(34, 'I fear Allah', 'page/profile/25', 0, 14, 1, 'InternalLink', 6, NULL),
(35, 'Dua to Allah', 'page/profile/26', 0, 15, 1, 'InternalLink', 6, NULL),
(36, 'My record', 'myrecord', 0, 16, 1, 'InternalLink', 6, NULL),
(37, 'Feedback', 'contact', 0, 17, 1, 'InternalLink', 6, NULL),
(38, 'DORPAN Corporation', 'enterprise/10', 3, 12, 1, 'InternalLink', 1, NULL),
(39, 'DORPAN Pharmaceuticals', 'enterprise/8', 3, 13, 1, 'InternalLink', 1, NULL),
(40, 'DORPAN Agro Farm', 'enterprise/6', 3, 14, 1, 'InternalLink', 1, NULL),
(41, 'Mission & Vision', 'page/22', 0, 3, 1, 'InternalLink', 1, NULL),
(42, 'Company Profile', 'page/23', 0, 5, 1, 'InternalLink', 1, NULL),
(43, 'DORPAN Singapore Island', 'http://www.dorpansingaporeisland.com/', 0, 16, 1, 'ExternalLink', 1, NULL),
(44, 'Management', 'management', 0, 4, 0, 'InternalLink', 1, NULL),
(45, 'Message', 'message', 0, 2, 1, 'InternalLink', 1, NULL),
(50, 'Home', '', 0, 1, 1, 'InternalLink', 2, NULL),
(51, 'About Us', 'page/30', 0, 2, 1, 'InternalLink', 2, NULL),
(52, 'Project', '##', 0, 3, 1, 'InternalLink', 2, NULL),
(53, 'Completed', 'projectlist/2', 52, 1, 1, 'InternalLink', 2, NULL),
(54, 'On Going', 'projectlist/1', 52, 2, 1, 'InternalLink', 2, NULL),
(55, 'Upcoming', 'projectlist/3', 52, 3, 1, 'InternalLink', 2, NULL),
(56, 'News', 'news', 0, 5, 1, 'InternalLink', 2, NULL),
(57, 'Video', 'video', 0, 6, 1, 'InternalLink', 2, NULL),
(58, 'Career', 'page/29', 0, 8, 1, 'InternalLink', 2, NULL),
(59, 'Contact Us', 'contact', 0, 9, 1, 'InternalLink', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menusection`
--

CREATE TABLE `menusection` (
  `MenuSectionID` int(11) NOT NULL,
  `Caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IsActive` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menusection`
--

INSERT INTO `menusection` (`MenuSectionID`, `Caption`, `IsActive`) VALUES
(1, 'Main', 0),
(2, 'DPL Menu', 1);

-- --------------------------------------------------------

--
-- Table structure for table `myrecord`
--

CREATE TABLE `myrecord` (
  `RecordID` int(11) NOT NULL,
  `PrayerNumber` tinyint(4) NOT NULL,
  `IsQuran` tinyint(1) NOT NULL DEFAULT 1,
  `IsSirat` tinyint(1) NOT NULL DEFAULT 1,
  `IsDawah` tinyint(1) NOT NULL DEFAULT 1,
  `IsDiscussion` tinyint(1) NOT NULL DEFAULT 1,
  `GoodDeedHour` tinyint(1) NOT NULL,
  `IsMoneySpent` tinyint(1) NOT NULL DEFAULT 1,
  `IsTouba` tinyint(1) NOT NULL DEFAULT 1,
  `Date` datetime NOT NULL,
  `EntryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UserID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `myrecord`
--

INSERT INTO `myrecord` (`RecordID`, `PrayerNumber`, `IsQuran`, `IsSirat`, `IsDawah`, `IsDiscussion`, `GoodDeedHour`, `IsMoneySpent`, `IsTouba`, `Date`, `EntryDate`, `UserID`) VALUES
(1, 5, 1, 1, 1, 1, 24, 2, 1, '2015-09-01 00:00:00', '2015-09-01 11:42:31', 128),
(2, 5, 1, 2, 1, 1, 24, 1, 1, '2015-09-02 00:00:00', '2015-09-02 11:01:37', 129),
(3, 5, 1, 1, 1, 1, 24, 1, 1, '2015-09-01 00:00:00', '2015-09-02 11:20:07', 130),
(4, 5, 1, 1, 1, 1, 24, 1, 1, '2015-09-03 00:00:00', '2015-09-03 06:05:35', 131),
(5, 5, 1, 1, 1, 1, 24, 1, 1, '2015-08-31 00:00:00', '2015-09-03 08:09:49', 129);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `NewsID` int(11) NOT NULL,
  `NewsTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `DetailNews` longtext COLLATE utf8_unicode_ci NOT NULL,
  `NewsSummary` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `MediumImage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Thumbimage` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `ImageTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EntryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Date` datetime NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `UserID` int(11) NOT NULL,
  `NewsCategoryID` int(11) NOT NULL,
  `ParentCategoryID` int(11) NOT NULL,
  `SubCategoryID` int(11) NOT NULL DEFAULT 0,
  `CategoryName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Code` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`NewsID`, `NewsTitle`, `DetailNews`, `NewsSummary`, `Image`, `MediumImage`, `Thumbimage`, `ImageTitle`, `EntryDate`, `Date`, `IsActive`, `UserID`, `NewsCategoryID`, `ParentCategoryID`, `SubCategoryID`, `CategoryName`, `Code`) VALUES
(30, 'Accommodation Fair 2016', '', '', 'assets/records/news/201602/30_198.png', 'assets/records/news/201602/30_320.png', 'assets/records/news/201602/30_239.png', '', '2015-08-18 07:18:35', '2015-08-18 09:17:24', 1, 1, 274, 274, 0, 'Islamic Research', ''),
(3, 'Preparing Time of CTG Mezban Fair 2015', '', '', 'assets/records/news/201602/3_19.png', 'assets/records/news/201602/3_346.png', 'assets/records/news/201602/3_250.png', '', '2015-08-18 07:18:35', '2015-11-28 09:10:24', 1, 1, 274, 274, 0, 'Islamic Research', ''),
(29, 'CTG Mezban Fair 28 November\'15', '', '', 'assets/records/news/201602/29_138.png', 'assets/records/news/201602/29_327.png', 'assets/records/news/201602/29_279.png', '', '2015-08-18 07:18:35', '2015-08-18 09:17:24', 1, 1, 274, 274, 0, 'Islamic Research', '');

-- --------------------------------------------------------

--
-- Table structure for table `newsdetail`
--

CREATE TABLE `newsdetail` (
  `NewsDetailID` int(11) NOT NULL,
  `NewsID` int(11) NOT NULL,
  `Detail` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newsdetail`
--

INSERT INTO `newsdetail` (`NewsDetailID`, `NewsID`, `Detail`) VALUES
(2, 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Aliquam pellentesque pellentesque turpis, ut bibendum sapien sollicitudin nec. Pellentesque posuere ornare placerat. Suspendisse potenti. Quisque massa tortor, tristique non tristique at, luctus sed massa. Donec libero eros, mollis ac fringilla eu, vestibulum sed lorem. Aenean aliquet tempor purus, sit amet ultricies neque bibendum venenatis. Suspendisse pulvinar massa sed odio semper mattis. Pellentesque vel nunc arcu, id rhoncus magna. Maecenas quis tempus ligula. Nunc ac tortor diam. Phasellus tincidunt rutrum diam, eget elementum lorem sagittis eget.</p>\r\n<p>Vivamus convallis</p>\r\n<p>Integer faucibus magna vitae augue suscipit a varius sem scelerisque. Nunc scelerisque tempus nunc in euismod. In sagittis congue sodales. Cras sit amet est nibh. Suspendisse eget ligula in nulla iaculis interdum nec a odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras massa odio, facilisis tincidunt blandit semper, lacinia semper dui. Donec viverra eros quis urna congue facilisis. Vivamus convallis imperdiet porta. Aliquam a nisi risus, vitae faucibus sem.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.<br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Aliquam pellentesque pellentesque turpis, ut bibendum sapien sollicitudin nec. Pellentesque posuere ornare placerat. Suspendisse potenti. Quisque massa tortor, tristique non tristique at, luctus sed massa. Donec libero eros, mollis ac fringilla eu, vestibulum sed lorem. Aenean aliquet tempor purus, sit amet ultricies neque bibendum venenatis. Suspendisse pulvinar massa sed odio semper mattis. Pellentesque vel nunc arcu, id rhoncus magna. Maecenas quis tempus ligula. Nunc ac tortor diam. Phasellus tincidunt rutrum diam, eget elementum lorem sagittis eget.</p>\r\n<p>Vivamus convallis</p>\r\n<p>Integer faucibus magna vitae augue suscipit a varius sem scelerisque. Nunc scelerisque tempus nunc in euismod. In sagittis congue sodales. Cras sit amet est nibh. Suspendisse eget ligula in nulla iaculis interdum nec a odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras massa odio, facilisis tincidunt blandit semper, lacinia semper dui. Donec viverra eros quis urna congue facilisis. Vivamus convallis imperdiet porta. Aliquam a nisi risus, vitae faucibus sem.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.<br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Aliquam pellentesque pellentesque turpis, ut bibendum sapien sollicitudin nec. Pellentesque posuere ornare placerat. Suspendisse potenti. Quisque massa tortor, tristique non tristique at, luctus sed massa. Donec libero eros, mollis ac fringilla eu, vestibulum sed lorem. Aenean aliquet tempor purus, sit amet ultricies neque bibendum venenatis. Suspendisse pulvinar massa sed odio semper mattis. Pellentesque vel nunc arcu, id rhoncus magna. Maecenas quis tempus ligula. Nunc ac tortor diam. Phasellus tincidunt rutrum diam, eget elementum lorem sagittis eget.</p>\r\n<p>Vivamus convallis</p>\r\n<p>Integer faucibus magna vitae augue suscipit a varius sem scelerisque. Nunc scelerisque tempus nunc in euismod. In sagittis congue sodales. Cras sit amet est nibh. Suspendisse eget ligula in nulla iaculis interdum nec a odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras massa odio, facilisis tincidunt blandit semper, lacinia semper dui. Donec viverra eros quis urna congue facilisis. Vivamus convallis imperdiet porta. Aliquam a nisi risus, vitae faucibus sem.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.<br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Aliquam pellentesque pellentesque turpis, ut bibendum sapien sollicitudin nec. Pellentesque posuere ornare placerat. Suspendisse potenti. Quisque massa tortor, tristique non tristique at, luctus sed massa. Donec libero eros, mollis ac fringilla eu, vestibulum sed lorem. Aenean aliquet tempor purus, sit amet ultricies neque bibendum venenatis. Suspendisse pulvinar massa sed odio semper mattis. Pellentesque vel nunc arcu, id rhoncus magna. Maecenas quis tempus ligula. Nunc ac tortor diam. Phasellus tincidunt rutrum diam, eget elementum lorem sagittis eget.</p>\r\n<p>Vivamus convallis</p>\r\n<p>Integer faucibus magna vitae augue suscipit a varius sem scelerisque. Nunc scelerisque tempus nunc in euismod. In sagittis congue sodales. Cras sit amet est nibh. Suspendisse eget ligula in nulla iaculis interdum nec a odio. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Cras massa odio, facilisis tincidunt blandit semper, lacinia semper dui. Donec viverra eros quis urna congue facilisis. Vivamus convallis imperdiet porta. Aliquam a nisi risus, vitae faucibus sem.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus. Donec facilisis fermentum sem, ac viverra ante luctus vel. Donec vel mauris quam.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla convallis egestas rhoncus.</p>'),
(3, 30, '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/Abashon-Fair,-Narayangang.png\" alt=\"\" width=\"973\" height=\"577\" /></p>'),
(4, 29, '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/CTG-Mezban-Fair.png\" alt=\"\" width=\"914\" height=\"573\" /></p>'),
(5, 3, '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/Preparing-Time-01.png\" alt=\"\" width=\"1024\" height=\"577\" /><img src=\"http://www.dorpangroup.com/assets/uploaded/Preparing-Time-02.png\" alt=\"\" /></p>');

-- --------------------------------------------------------

--
-- Table structure for table `newsinfo`
--

CREATE TABLE `newsinfo` (
  `NewsInfoID` int(11) NOT NULL,
  `VisitNumber` int(11) NOT NULL DEFAULT 1,
  `NewsID` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newsinfo`
--

INSERT INTO `newsinfo` (`NewsInfoID`, `VisitNumber`, `NewsID`, `Date`) VALUES
(1, 21, 18041, '2015-05-18 05:45:09'),
(2, 16, 18046, '2015-05-18 05:45:27'),
(3, 17, 18045, '2015-05-18 08:07:55'),
(4, 10, 18044, '2015-05-18 08:08:07'),
(5, 10, 18039, '2015-05-21 00:40:06'),
(6, 9, 18047, '2015-05-21 00:46:58'),
(7, 9, 18037, '2015-05-21 01:08:28'),
(8, 5, 18040, '2015-05-21 01:38:28'),
(9, 10, 18026, '2015-05-21 01:45:58'),
(10, 6, 18029, '2015-05-21 02:14:58'),
(11, 7, 18043, '2015-05-21 03:22:28'),
(12, 4, 18032, '2015-05-21 03:28:58'),
(13, 5, 18033, '2015-05-21 03:38:58'),
(14, 6, 18036, '2015-05-21 03:43:58'),
(15, 8, 18031, '2015-05-21 03:53:58'),
(16, 6, 18027, '2015-05-21 03:54:28'),
(17, 8, 18030, '2015-05-21 04:03:28'),
(18, 11, 18034, '2015-05-21 04:07:28'),
(19, 14, 18042, '2015-05-21 04:17:29'),
(20, 6, 18025, '2015-05-21 04:28:58'),
(21, 6, 18048, '2015-05-24 12:36:01'),
(22, 6, 18049, '2015-05-28 07:56:43'),
(23, 3, 18050, '2015-06-06 09:31:25'),
(24, 4, 18053, '2015-06-14 10:47:32'),
(25, 5, 18051, '2015-06-14 11:17:46'),
(26, 2, 18054, '2015-06-16 11:09:17'),
(27, 1, 18063, '2015-06-22 07:08:00'),
(28, 2, 18062, '2015-06-22 07:08:09'),
(29, 1, 18057, '2015-06-22 08:49:15'),
(30, 1, 18061, '2015-06-30 23:19:30'),
(31, 1, 18055, '2015-07-02 02:58:47');

-- --------------------------------------------------------

--
-- Table structure for table `newspaper`
--

CREATE TABLE `newspaper` (
  `NewsPaperID` int(11) NOT NULL,
  `NewsPaperName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Category` tinyint(1) NOT NULL,
  `NewPaperType` tinyint(1) NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `Priority` int(11) NOT NULL,
  `PaperLink` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newspaper`
--

INSERT INTO `newspaper` (`NewsPaperID`, `NewsPaperName`, `Category`, `NewPaperType`, `IsActive`, `Priority`, `PaperLink`, `Image`) VALUES
(1, 'নয়া দিগন্ত', 1, 1, 1, 1, '', 'records/newspaper/1_1.gif'),
(2, 'prttrtr', 2, 2, 1, 2, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `newssearch`
--

CREATE TABLE `newssearch` (
  `ID` int(11) NOT NULL,
  `SearchText` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `onlinepoll`
--

CREATE TABLE `onlinepoll` (
  `OnlinepollID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `Caption` text COLLATE utf8_unicode_ci NOT NULL,
  `PositiveComment` int(11) NOT NULL DEFAULT 0,
  `NegativeComment` int(11) NOT NULL DEFAULT 0,
  `NoComment` int(11) NOT NULL DEFAULT 0,
  `IsClosed` varchar(10) COLLATE utf8_unicode_ci DEFAULT 'No'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `onlinepoll`
--

INSERT INTO `onlinepoll` (`OnlinepollID`, `UserID`, `IsActive`, `Date`, `Caption`, `PositiveComment`, `NegativeComment`, `NoComment`, `IsClosed`) VALUES
(22, 0, 1, '2015-02-15 21:29:54', 'আওয়ামী লীগ নেতা সুরঞ্জিত সেনগুপ্ত বলেছেন, সংলাপের উদ্যোক্তারা নিরপেক্ষতা দেখাতে ব্যর্থ হয়েছেন। আপনিও কি তা-ই মনে করেন?', 0, 9, 0, 'Yes'),
(21, 0, 1, '2015-02-14 22:22:31', 'নিউ ইয়র্ক টাইমস পত্রিকা লিখেছে, বাংলাদেশে বিরোধী দলকে অবশ্যই সংলাপে আমন্ত্রণ জানাতে হবে। আপনিও কি তা-ই মনে করেন?', 55, 1, 2, 'Yes'),
(23, 0, 1, '2015-02-16 19:22:09', 'বিশিষ্টজনদের অভিমত, চলমান সঙ্কট নিরসনে সংলাপ না হলে চরমপন্থার উত্থান ঘটতে পারে। আপনিও কি তা-ই মনে করেন?', 605, 40, 2, 'Yes'),
(24, 0, 1, '2015-02-17 17:58:16', 'বাণিজ্যমন্ত্রী তোফায়েল আহমেদ বলেছেন, বিএনপির আন্দোলনে আন্তর্জাতিক ষড়যন্ত্র রয়েছে। আপনিও কি তা-ই মনে করেন?', 64, 558, 9, 'Yes'),
(25, 0, 1, '2015-02-18 03:58:32', 'বিএনপির অভিযোগ দেশ ও জাতি রাষ্ট্রীয় নৈরাজ্যের চূড়ান্ত শিকারে পরিণত হয়েছে। আপনিও কি তা-ই মনে করেন?', 979, 69, 7, 'Yes'),
(26, 0, 1, '2015-02-19 04:07:30', 'স্বাস্থ্যমন্ত্রী মোহাম্মদ নাসিম বলেছেন, সরকারের কর্মকাণ্ডে জনগণের মধ্যে কোনো অসন্তোষ নেই। আপনি কি এ বক্তব্য সমর্থন করেন?', 56, 1021, 7, 'Yes'),
(27, 0, 1, '2015-02-20 04:14:39', 'বিএনপির যুগ্ম মহাসচিব সালাহ উদ্দিন আহমেদ বলেছেন, সরকার গণ-আন্দোলনকে জঙ্গি বলে প্রচারযুদ্ধ চালাচ্ছে। আপনি কি এ বক্তব্যের সাথে একমত?', 625, 102, 7, 'Yes'),
(28, 0, 1, '2015-02-21 03:58:09', 'বিকল্পধারার সভাপতি অধ্যাপক ডা: বি চৌধুরী আশঙ্কা প্রকাশ করেছেন, সংলাপ না হলে দেশে ভয়াবহ দুর্যোগ হবে। আপনিও কি তা-ই মনে করেন?', 652, 28, 5, 'Yes'),
(29, 0, 1, '2015-02-22 04:16:15', 'প্রফেসর এমাজউদ্দীন আহমদ বলেছেন, মধ্যবর্তী নির্বাচনই সঙ্কট উত্তরণের পথ। আপনি কি তার সাথে একমত?', 899, 40, 3, 'Yes'),
(30, 0, 1, '2015-02-23 04:08:18', ' দেশের চলমান রাজনৈতিক সঙ্কটে আন্তর্জাতিক সম্প্রদায়ের উদ্বেগকে কি আপনি অনাকাক্সিক্ষত মনে করেন?', 85, 572, 5, 'Yes'),
(31, 0, 1, '2015-02-24 03:53:48', 'খাদ্যমন্ত্রী কামরুল ইসলাম ২০ দলীয় জোটের চলমান আন্দোলনকে জঙ্গিবাদী সন্ত্রাস আখ্যা দিয়েছেন। আপনিও কি তা-ই মনে করেন? ', 58, 877, 5, 'Yes'),
(32, 0, 1, '2015-02-25 04:05:48', 'বিএনপি বলেছে, আওয়ামী লীগ ক্ষমতা দখলের সুবিধার্থে তত্ত্বাবধায়ক সরকারব্যবস্থা বাতিল করেছে। আপনিও কি তা-ই মনে করেন?', 1037, 46, 4, 'Yes'),
(33, 0, 1, '2015-02-26 04:03:31', 'অর্থমন্ত্রী বলেছেন, চলমান আন্দোলন ওয়ার্থলেস। এর সাথে রাজনীতির কোনো সম্পর্ক নেই। আপনিও কি তা-ই মনে করেন?', 35, 594, 4, 'Yes'),
(34, 0, 1, '2015-02-27 04:09:15', 'অ্যামনেস্টির প্রতিবেদনে বলা হয়েছে, দায়মুক্তির সুযোগে আইন-শৃঙ্খলা বাহিনী নির্যাতন চালাচ্ছে। আপনি কি একমত?', 470, 19, 1, 'Yes'),
(35, 0, 1, '2015-02-28 04:08:00', '২০ দলীয় জোট বলেছে, সরকার পতনের ক্ষণ গণনা করছে জনগণ। আপনিও কি তা-ই মনে করেন?', 653, 88, 6, 'Yes'),
(36, 0, 1, '2015-03-01 04:16:08', 'যুক্তরাজ্যের স্বরাষ্ট্র দফতরের প্রতিবেদনে বলা হয়েছে, বাংলাদেশে ভিন্নমত পোষণকারীরা নিরাপত্তাহীন। আপনি কি এ বিষয়ে একমত?', 605, 59, 3, 'Yes'),
(37, 0, 1, '2015-03-02 03:57:45', 'ইউরোপীয় ইউনিয়ন বলেছে, রাজনৈতিক উত্তেজনা প্রশমনে আইনের শাসন প্রয়োজন। আপনি কি একমত?', 498, 49, 3, 'Yes'),
(38, 0, 1, '2015-03-03 03:59:21', 'হরতাল-অবরোধে ক্লাস নেয়ার নির্দেশ দিয়েছে বিশ্ববিদ্যালয় মঞ্জুরি কমিশন। আপনি কি তা সমর্থন করেন?', 97, 584, 3, 'Yes'),
(39, 0, 1, '2015-03-04 03:59:55', 'ব্লগার অভিজিৎ হত্যার তদন্ত সঠিকভাবে হচ্ছে বলে মনে করেন কি?', 37, 415, 12, 'Yes'),
(40, 0, 1, '2015-03-05 04:11:38', 'ইন্টারন্যাশনাল ক্রাইসিস গ্রুপ বলেছে, বেগম খালেদা জিয়াকে গ্রেফতার করা হলে রাজনৈতিক সঙ্কট বাড়বে। আপনিও কি তা-ই মনে করেন?', 485, 42, 1, 'Yes'),
(41, 0, 1, '2015-03-06 04:05:31', 'বিএনপি বলেছে, সরকার ক্ষমতায় টিকে থাকতে গণমাধ্যম নিয়ন্ত্রণ করার চেষ্টা করছে। আপনি কি একমত?', 396, 20, 0, 'Yes'),
(42, 0, 1, '2015-03-07 04:01:57', 'ব্রিটিশ পররাষ্ট্র প্রতিমন্ত্রী হুগো সোয়ার বাংলাদেশে অংশগ্রহণমূলক রাজনৈতিক প্রক্রিয়া নিশ্চিত করার আহ্বান জানিয়েছেন। আপনি কি এই আহ্বান সমর্থন করেন?', 486, 18, 3, 'Yes'),
(43, 0, 0, '2015-03-08 04:12:13', 'অ্যামনেস্টি ইন্টারন্যাশনাল বলেছে, বাংলাদেশ সহিংসতা নিয়ন্ত্রণের বাইরে চলে যাওয়ার ঝুঁকিতে পড়েছে। আপনিও কি তা-ই মনে করেন?', 454, 33, 2, 'No'),
(44, 0, 0, '2015-03-09 04:01:24', 'অধ্যাপক বদরুদ্দোজা চৌধুরী রাজনৈতিক সঙ্কট নিরসনে রাষ্ট্রপতির নেতৃত্বে জাতীয় সরকার গঠনের প্রস্তাব করেছেন। আপনি কি এ প্রস্তাব সমর্থন করেন?', 458, 41, 5, 'No'),
(45, 0, 0, '2015-03-10 04:07:09', 'বিএনপি বলেছে, রাজনৈতিক সঙ্কট আড়াল করতেই আওয়ামী লীগ জঙ্গিবাদের জিকির তুলেছে। আপনি কি এ বক্তব্য সমর্থন করেন?', 571, 38, 1, 'No'),
(46, 0, 0, '2015-03-11 04:00:52', 'ব্রিটিশ হাইকমিশনার রবার্ট গিবসন বলেছেন, বাংলাদেশের গত চার বছরের রাজনৈতিক বিতর্কের মূল বিষয় ছিল নির্বাচন। আপনি কি একমত?', 555, 11, 0, 'No'),
(47, 0, 0, '2015-03-12 04:12:34', 'স্বরাষ্ট্র প্রতিমন্ত্রী আসাদুজ্জামান খান কামাল বলেছেন, কোনো ভবন থেকে ককটেল নিক্ষেপ করলে তার দায় ভবন মালিকের। আপনি কি এ বক্তব্য সমর্থন করেন?', 26, 408, 3, 'No'),
(48, 0, 0, '2015-03-13 04:05:47', 'নির্যাতনে জড়িত পুলিশকে দায়মুক্তি না দেয়ার আহ্বান জানিয়েছে অ্যামনেস্টি ইন্টারন্যাশনাল। আপনি কি সংস্থার এ বক্তব্য সমর্থন করেন?', 261, 10, 2, 'No'),
(49, 0, 0, '2015-03-14 04:05:42', 'টিআইবি বলেছে, নারীরা বেশি দুর্নীতির শিকার। আপনিও কি তা-ই মনে করেন?', 143, 53, 3, 'No'),
(50, 0, 0, '2015-03-15 04:05:36', 'সংলাপ আহ্বানকারী সুশীলসমাজের সমালোচনা করে কৃষিমন্ত্রী মতিয়া চৌধুরী বলেছেন, সংলাপ পাগলের প্রলাপ। আপনি কি একমত?', 50, 618, 20, 'No'),
(51, 0, 0, '2015-03-16 04:01:23', 'রাজনৈতিক বিশ্লেষকদের অভিমত চলমান সঙ্কট সমাধানে গ্রহণযোগ্য নির্বাচনের ফর্মুলা সরকারকেই বের করতে হবে। আপনি কি একমত?', 1190, 64, 14, 'No'),
(52, 0, 0, '2015-03-17 04:05:50', 'অধ্যাপক বদরুদ্দোজা চৌধুরী বলেছেন, সরকার ওয়াদা রক্ষা না করার কারণেই বর্তমান রাজনৈতিক সঙ্কটের সৃষ্টি। আপনিও কি তা-ই মনে করেন?', 1446, 78, 23, 'No'),
(53, 0, 0, '2015-03-18 04:03:28', 'মাহবুব-উল আলম হানিফ বলেছেন, চলমান সঙ্কট রাজনৈতিক নয়, আইনশৃঙ্খলাজনিত। আপনি কি একমত?', 103, 1263, 33, 'No'),
(54, 0, 0, '2015-03-19 04:07:42', 'স্বরাষ্ট্র প্রতিমন্ত্রী আসাদুজ্জামান খান কামাল বলেছেন, বিএনপি নেতা সালাহউদ্দিন আহমেদ এখনো আত্মগোপনে আছেন। আপনারও কি তা-ই মনে হয়?', 66, 1097, 24, 'No'),
(55, 0, 0, '2015-03-20 04:05:45', 'হিউম্যান রাইটস ওয়াচ বলেছে, সালাহউদ্দিন নিখোঁজের ঘটনায় সরকারের উচিত স্বাধীন তদন্তের নির্দেশ দেয়া। আপনি কি একমত?', 882, 18, 6, 'No'),
(56, 0, 0, '2015-03-21 04:17:21', '২০ দলীয় জোট বলেছে, দেশকে জঙ্গিবাদী হিসেবে চিহ্নিত করে আত্মবিনাশী চক্রান্ত চালিয়ে যাচ্ছে সরকার। আপনিও কি তা-ই মনে করেন?', 1144, 119, 10, 'No'),
(57, 0, 0, '2015-03-22 04:09:28', 'বিশেষজ্ঞদের অভিমত, শিশু হত্যাসহ গুম-খুনের জন্য দায়ী আইনশৃঙ্খলা পরিস্থিতির অবনতি। আপনিও কি একমত?', 839, 27, 8, 'No'),
(58, 0, 0, '2015-03-23 04:09:08', 'রাজনৈতিক অস্থিরতার মধ্যে তড়িঘড়ি সিটি নির্বাচন আয়োজনে জনমনে উদ্বেগ-উৎকণ্ঠার সৃষ্টি হয়েছে বলে মন্তব্য করেছে সুজন। আপনিও কি তা-ই মনে করেন?', 878, 56, 2, 'No'),
(59, 0, 0, '2015-03-24 04:08:46', 'বাণিজ্যমন্ত্রী তোফায়েল আহমেদ বলেছেন, সিটি করপোরেশন নির্বাচন বিএনপিকে আন্দোলন থেকে বেরিয়ে আসার সুযোগ করে দিয়েছে। আপনি কি একমত?', 147, 686, 20, 'No'),
(60, 0, 0, '2015-03-25 04:02:37', 'ইলেকশন ওয়ার্কিং গ্রুপ বলেছে, নির্বাচন কমিশনের ওপর জনগণের আস্থা কমে গেছে। আপনি কি একমত?', 1070, 44, 5, 'No'),
(61, 0, 0, '2015-03-26 04:11:23', 'ওয়াল স্ট্রিট জার্নালের প্রতিবেদনে রাজনৈতিক অরাজকতায় বাংলাদেশে জঙ্গিবাদ উত্থানের আশঙ্কা প্রকাশ করা হয়েছে। আপনি কি একমত? ', 399, 156, 7, 'No'),
(62, 0, 0, '2015-03-27 04:47:32', '২০ দল বলেছে, সিটি নির্বাচনে শান্তিপূর্ণ পরিবেশের কোনো লক্ষণ নেই। ফলে এ নির্বাচন তামাশায় পরিণত হয়েছে। আপনি কি একমত?', 856, 59, 6, 'No'),
(63, 0, 0, '2015-03-28 03:41:05', 'প্রফেসর এমাজউদ্দীন আহমদ বলেছেন, দেশ থেকে গণতন্ত্র ডাকাতি হয়ে গেছে। আপনি  কি একমত?', 1286, 70, 6, 'No'),
(64, 0, 0, '2015-03-29 04:00:26', 'আ স ম আবদুর রব বলেছেন, নির্বাচন কমিশনের আচরণে প্রমাণিত সুষ্ঠু নির্বাচন সম্ভব নয়। আপনি কি একমত?', 922, 53, 5, 'No'),
(65, 0, 0, '2015-03-30 03:51:42', 'আপনি কি মনে করেন তিন সিটি করপোরেশন নির্বাচনে লেভেল প্লেয়িং ফিল্ড তৈরি হয়েছে?', 74, 1023, 16, 'No'),
(66, 0, 0, '2015-03-31 04:17:46', ' মোবাইলে কথা বলার ওপর ১ শতাংশ সারচার্জ আরোপের সিদ্ধান্ত কি আপনি সমর্থন করেন?', 101, 706, 13, 'No'),
(67, 0, 0, '2015-04-01 03:49:51', 'সিটি করপোরেশন নির্বাচনে বিধি লঙ্ঘন করলে ছাড় দেয়া হবে না বলে হুঁশিয়ার করেছে নির্বাচন কমিশন। আপনার কি এতে আস্থা আছে?', 58, 906, 25, 'No'),
(68, 0, 0, '2015-04-02 03:55:50', ' সৈয়দ আশরাফুল ইসলাম বলেছেন, বিএনপির আন্দোলনের উদ্দেশ্য দেশকে অকার্যকর করা। আপনি কি একমত?', 79, 922, 14, 'No'),
(69, 0, 0, '2015-04-03 04:03:59', 'সিটি করপোরেশন নির্বাচনে সেনা মোতায়েনের দাবি জানিয়েছে বিএনপি। আপনি কি এ দাবি সমর্থন করেন?', 984, 41, 7, 'No'),
(70, 0, 0, '2015-04-04 04:15:56', '২০ দলীয় জোট বলেছে, জঙ্গি শাসনের মধ্যে দেশ চালাচ্ছে সরকার। আপনি কি এই বক্তব্যের সাথে একমত?', 947, 93, 5, 'No'),
(71, 0, 0, '2015-04-05 04:01:23', 'স্বাস্থ্যমন্ত্রী মোহাম্মদ নাসিম বলেছেন, বিএনপি নির্বাচন বন্ধের চক্রান্ত করছে। আপনিও কি তা-ই মনে করেন?', 51, 1081, 30, 'No'),
(72, 0, 0, '2015-04-06 04:03:47', 'মানবাধিকার কমিশন বলেছে, আইনশৃঙ্খলা বাহিনীর দৌরাত্ম্য অপ্রত্যাশিতভাবে বেড়ে গেছে। আপনি কি একমত?', 896, 47, 7, 'No'),
(73, 0, 0, '2015-04-07 04:03:04', 'সিপিডি বলেছে, অনুদার রাজনৈতিক পরিবেশে বিনিয়োগ প্রসারিত হবে না। আপনি কি একমত?', 351, 39, 11, 'No'),
(74, 0, 0, '2015-04-08 04:00:30', 'নির্বাচন কমিশনার শাহ নেওয়াজ বলেছেন, সিটি নির্বাচনে বিধি লঙ্ঘন করলে কাউকে ছাড় দেবে না ইসি। তার এ কথায় কি আপনার আস্থা আছে?', 62, 1048, 14, 'No'),
(75, 0, 0, '2015-04-09 04:06:35', 'বিএনপি অভিযোগ করেছে, সিটি নির্বাচনে বিশৃঙ্খলা সৃষ্টি করতে চায় সরকার। আপনি কি একমত?', 1124, 97, 6, 'No'),
(76, 0, 0, '2015-04-10 03:59:11', 'কওমি মাদরাসা সম্পর্কে অর্থমন্ত্রীর মন্তব্যকে অজ্ঞতার পরিচায়ক বলে মন্তব্য করেছেন বিভিন্ন সংগঠনের নেতারা। আপনিও কি একমত?', 1021, 84, 11, 'No'),
(77, 0, 0, '2015-04-11 04:16:03', 'নির্বাচন কমিশন তিন সিটি নির্বাচন সরকারি দলের প্রভাবমুক্ত থেকে পরিচালনা করতে পারবে বলে মনে করেন কি?', 63, 1038, 10, 'No'),
(78, 0, 0, '2015-04-12 04:04:48', 'সেনা মোতায়েন না করলে সিটি করপোরেশন নির্বাচন সুষ্ঠু হবে না বলে মন্তব্য করেছেন অধ্যাপক এমাজউদ্দীন আহমদ। আপনি কি একমত?', 1167, 67, 8, 'No'),
(79, 0, 0, '2015-04-13 03:50:41', 'মির্জা আব্বাসের স্ত্রী আফরোজা আব্বাস বলেছেন, সিটি নির্বাচনে এখনো লেভেল প্লেয়িং ফিল্ড তৈরি হয়নি। আপনি কি একমত?', 1024, 52, 7, 'No'),
(80, 0, 0, '2015-04-14 04:14:18', 'প্রধান নির্বাচন কমিশনার আবারো বলেছেন, সিটি নির্বাচন অবাধ ও নিরপেক্ষ করার জন্য সব ধরনের ব্যবস্থা নেয়া হবে। এ বক্তব্যে কি আপনার আস্থা আছে?', 127, 1787, 19, 'No'),
(81, 0, 0, '2015-04-16 04:11:16', 'ঢাকার দুই সিটিতে সেনা মোতায়েনের দাবি জানিয়েছে সুজন। আপনি কি এটা সমর্থন করেন?', 1019, 45, 4, 'No'),
(82, 0, 0, '2015-04-17 04:07:41', 'আদর্শ ঢাকা আন্দোলন অভিযোগ করেছে, ইসির কর্মকাণ্ড সন্তোষজনক নয়। আপনিও কি একমত?', 726, 46, 5, 'No'),
(83, 0, 0, '2015-04-18 04:01:20', 'সাবেক প্রধান নির্বাচন কমিশনার বিচারপতি আবদুর রউফ বলেছেন, প্রশাসন দায়িত্বে থাকলে নির্বাচন সুষ্ঠু হবে না। আপনিও কি তা-ই মনে করেন?', 1048, 53, 8, 'No'),
(84, 0, 0, '2015-04-19 04:15:14', 'নববর্ষে ক্যাম্পাসে মহিলাদের শ্লীলতাহানির ঘটনার তদন্ত সঠিকভাবে হচ্ছে বলে মনে করেন কি?', 89, 956, 17, 'No'),
(85, 0, 0, '2015-04-20 03:45:44', 'সিপিডির আলোচনা সভায় বিশেষজ্ঞরা বলেছেন, ভারতে বাণিজ্য বৃদ্ধির পথে দেশটির অনীহাই মূল বাধা। আপনি কি একমত? ', 383, 30, 10, 'No'),
(86, 0, 0, '2015-04-21 03:53:22', 'বিএনপি অভিযোগ করেছে, নির্বাচন প্রভাবিত করতেই উন্নয়নকার্যক্রম চলছে। আপনি কি একমত?', 909, 64, 1, 'No'),
(87, 0, 0, '2015-04-22 03:57:29', 'সুরঞ্জিত সেনগুপ্ত বলেছেন, প্রধান নির্বাচন কমিশনারের হুকুমে সেনা মোতায়েন হবে অসাংবিধানিক। তার এ বক্তব্যের সাথে কি আপনি একমত?', 45, 1101, 11, 'No'),
(88, 0, 0, '2015-04-23 03:54:08', 'স্বরাষ্ট্র প্রতিমন্ত্রী বলেছেন, খালেদা জিয়ার গাড়িবহরে হামলার ঘটনা শতভাগ সত্যি নয়। আপনি কি একমত?', 52, 1340, 15, 'No'),
(89, 0, 0, '2015-04-24 04:03:23', 'সিটি করপোরেশন নির্বাচনে সেনা মোতায়েন বিষয়ে নির্বাচন কমিশনের সিদ্ধান্ত পরিবর্তন কি সঠিক হয়েছে?', 54, 1157, 10, 'No'),
(90, 0, 1, '2015-04-25 04:15:30', 'বিশিষ্টজনেরা অভিমত প্রকাশ করেছে, সেনা মেতায়েন নিয়ে নির্বাচন কমিশন খেলা করছে। আপনিও কি তা-ই মনে করেন?', 1076, 37, 6, 'No');

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

CREATE TABLE `page` (
  `PageID` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `PageName` text COLLATE utf8_unicode_ci NOT NULL,
  `MetaTag` text COLLATE utf8_unicode_ci NOT NULL,
  `MetaDescription` text COLLATE utf8_unicode_ci NOT NULL,
  `Priority` int(11) NOT NULL,
  `Detail` longtext COLLATE utf8_unicode_ci NOT NULL,
  `UserID` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp(),
  `TagWord` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Summary` text COLLATE utf8_unicode_ci NOT NULL,
  `ProjectLink` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`PageID`, `IsActive`, `PageName`, `MetaTag`, `MetaDescription`, `Priority`, `Detail`, `UserID`, `Date`, `TagWord`, `Summary`, `ProjectLink`) VALUES
(1, 1, 'Contact Us', 'Contact Us', 'Contact Us', 2, '<address>\n<p class=\"big\"><span style=\"font-size: 12pt;\"><strong>CORPORATE OFFICE</strong></span><br /><span style=\"font-size: 12pt;\">House 30 (Flat 5A), </span><br /><span style=\"font-size: 12pt;\">Sonargaon Janapath Road,</span><br /><span style=\"font-size: 12pt;\">Sector 11 Chowrasta,</span><br /><span style=\"font-size: 12pt;\">Uttara Model Town, </span><br /><span style=\"font-size: 12pt;\">Uttara, Dhaka-1230, Bangladesh.</span><br /><span style=\"font-size: 12pt;\">Phone: +88 024 895 87 52, 895 87 71</span><br /><span style=\"font-size: 12pt;\">Fax: +88 024 895 86 75</span><br /><span style=\"font-size: 12pt;\">Hotline: +88 01938852222,01938852244</span><br /><span style=\"font-size: 12pt;\">E-mail: info@dorpangroup.com</span></p>\n</address>', 0, '2015-08-14 16:30:00', 'Contact Us', '', ''),
(3, 1, 'About Us', 'About Us', 'About Us', 1, '<p>Bangladesh is a developing country having abundant resource with limited area of land. After passing four decades of independence the growth rate is raised not up to the mark &amp; the basic needs of housing yet not ensured for all. Adequate investment with efficient leadership can fulfill the basic needs within a shortest possible way.</p>\n<p><strong>DORPAN Properties Limited (DPL)</strong> a sister concern of DORPAN GROUP is a dynamic incorporation in the field of real estate in Bangladesh.DPL is such a journey lead by a competitive &amp; efficient leadership to move in the right way of progress. A lot of professionals &amp; business fellows participate here to run the enterprise with a successful conclusion. Our mission &amp; vision is housing for all.</p>\n<p>In DPL, a set of dynamic &amp; visionary leadership is committed to serve a smart &amp; eco friendly housing project to the valued customers. Reasonable price, effective road connectivity &amp; placement of community facilities are remarkable identity of value addition. The company will be liable to bear the responsibility &amp; committed to the rights of people of the society.</p>\n<p>DPL is looking forward to engage people, serve people &amp; go ahead with the people. It deserves the common thinking of progress &amp; prosperity.</p>\n<p>&nbsp;</p>', 0, '0000-00-00 00:00:00', 'About Us', '', ''),
(20, 1, 'Message from Acting Managing Director', 'Message from Acting  Managing Director', 'Message from Acting Managing Director', 1, '<p>I have great pleasure in welcoming you to visit our website. Bangladesh is a country of enormous possibilities. I believe that proper utilization of natural resources, manpower and update technology will help us to be one of the emerging countries of the world.</p>\n<p>My long experience in plant development and Management Relationship brings me to understand that customers are the main essence of any organization related in development of private sectors. Erection of eco friendly residence in urban and sub-urban area with all necessary facilities within the reasonable price, establishment of agro-farm, textile mills and chemical plants are the main projects of us. Whereas we also have a strong plan to play a vital role in the field of education and health. We are committed to use the latest and automated CLEAN TECHNOLOGY for our projects in sustainable way.</p>\n<p>Our goal is to build a long-term partnership with our clients. I along with our directors and shareholders, staffs are committed to provide best services to our customers. We believe, the future growth of our organization depends on providing excellent services with quality products to customers as well as our ability to help clients make good business decisions.</p>\n<p>If you invest in DORPAN GROUP, I hope you will gain the partnership with a company that is committed for your success and will secure of your investment. We look forward to the opportunity to serve you now and well in the future.</p>\n<p>I am confident that our enterprises will become one of the leading companies in the respective field of Bangladesh within a logical period of time.</p>\n<p>&nbsp;Engr. Shah Md.Faysal Bin Rahman</p>', 0, '2015-12-02 13:57:53', 'Message from Acting Managing Director', '', ''),
(21, 0, ' Message from the Chairman', ' Message from the Chairman', ' Message from the Chairman', 2, '<p>DORPAN GROUP is an organization with a vision to build places and landmarks of great significance to the people and society of Bangladesh and to contribute to the growth of the national economy through industrialization and services. Development of knowledge base society is an important aspect of us. DORPAN GROUP has been established and is run by a set of enlightened individuals who are socially responsible and professionally acceptable.</p>\n<p>Our vision on property developments has been to establish a decent accommodation for city dwellers and to offer lifestyle that people deserve for their healthier environment. We are committed for eco-friendly residence with full of modern facilities. Our mission is to provide the right combination of technology, architecture, environmental friendly infrastructure and experienced team to assure best solutions for our projects and secure the valuable investments of clients. As a business partner, we are here to realize your unique demands and provide the best services available in the industry. We are liable for whole responsibilities of putting the best solution together and making it dynamic and best for you using latest technology.</p>\n<p>Agro-based industry is another important aspect for us. Proper utilization of natural agro-resources in advanced technological way will help us to ensure national nutrients, employment generation and saving of foreign currency. DORPAN Social Development Foundation (DSDF) is highly dedicated to provide and ensure high quality education and health service to the community people.</p>\n<p>We believe hard work deserves to be rewarded. Our directors and shareholders are dedicated to do hard word in planning, developing and completion of our different projects. Thus we are involved in developing a healthy lifestyle, educated society, ensuring corporate and social responsibilities and strengthening the national economy.</p>\n<p>(Mrs. Umme Kulsum)</p>', 0, '2015-12-02 13:59:01', ' Message from the Chairman', '', ''),
(22, 1, 'Mission & Vision', 'Mission & Vision', 'Mission & Vision', 3, '<p><span style=\"color: #33cccc;\"><strong>Vision..</strong></span><br />To be established as a leader in global business arena through our products and services which improve the quality of lives.</p>\r\n<p><strong><span style=\"color: #33cccc;\">Mission...</span> </strong><br />Our mission is to provide individuals and families with an opportunity to improve their lives with our superior products and services.<br />Our products and services are designed &amp; produced to create lasting memories and to win our customers&rsquo; loyalty in perpetuity.<br />We are committed to building a valuable and growing company in which creativity quality is the cornerstones of our success.<br />We will nurture our growth through the performance of outstanding associates who uphold the company&rsquo;s commitment to service and customer satisfaction.<br />We will build the company aggressively within the framework of fiscal conservatism and an ethical culture.</p>\r\n<p><span style=\"color: #33cccc;\">Values... <br /></span><br />Our values are concepts that are open to interpretation. They are not black-and-white definitions but rather solid views that are better defined as &ldquo;what we believe in.&rdquo;<br /><strong>Care Values-</strong> What We Believe In<br /><strong>Relationships-</strong> We genuinely cares about our associates, customers and partners. We earn their trust and business every day.<br /><strong>Innovation-</strong> We needs to find ways to &lsquo;say yes&rsquo; through creative solutions and the celebration of breakthrough ideas.<br /><strong>Mutual Respect-</strong> We do like and respect each other. We operate with integrity and personal accountability.<br /><strong>Passion-</strong> We has intense passion for our products, our trade and our Company. Passion is contagious.<br /><strong>Performance-</strong> We creates stakeholder value by always delivering beyond expectations, internally and externally. We never settle for less.</p>', 0, '2015-12-02 13:59:55', 'Mission & Vision', '', ''),
(23, 1, 'Company Profile', 'Profile', 'Profile', 5, '<p><span style=\"font-size: 14pt;\"><strong>Name of the Company: DORPAN GROUP</strong></span></p>\n<p><span style=\"font-size: 14pt;\"><strong>Number of Enterprise: 5</strong></span></p>\n<p><span style=\"font-size: 14pt;\"><strong>Company Status: Public Limited Company</strong></span></p>\n<p><span style=\"font-size: 14pt;\"><strong>Date of Incorporation: April\'2011</strong></span></p>\n<p><span style=\"font-size: 14pt;\"><strong>Registered Office: House#30,Suite#5/A,Sonargoang Janapath Road, Chowrasta,Sector#11,Uttara Model Town,Uttara,Dhaka-1230</strong></span></p>\n<p><span style=\"font-size: 14pt;\"><strong>Phone :+8802489558771, +880248958752</strong></span></p>\n<p><span style=\"font-size: 14pt;\"><strong>Fax :+880248958675</strong></span></p>\n<p><span style=\"font-size: 14pt;\"><strong>Cell :+8801938852202</strong></span></p>\n<p><span style=\"font-size: 14pt;\"><strong>E-mail :md@dorpangroup.com</strong></span></p>', 0, '2015-12-02 14:00:23', 'Profile', '', ''),
(24, 1, 'Offer', 'Offer', 'Offer', 1, '<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;<img src=\"http://www.dorpangroup.com/assets/uploaded/new_final_11.08.16.png\" alt=\"\" width=\"2394\" height=\"1419\" /></p>', 0, '2015-12-01 08:03:38', 'Offer', '', ''),
(26, 1, 'Welcome Message', 'Welcome Message', 'Welcome Message', 1, '<p>DORPAN GROUP is an organization with a vision to build places and landmarks of great significance to the people and society of Bangladesh and to contribute to the growth of the national economy through industrialization and services.</p>\n<p>Development of knowledge base society is an important aspect of us. DORPAN GROUP has been established and is run by a set of enlightened individuals who are socially responsible and professionally acceptable.</p>\n<p>Our vision on property developments has been to establish a decent accommodation for city dwellers and to offer lifestyle that people deserve for their healthier environment. We are committed for eco-friendly residence with full of modern facilities. Our mission is to provide the right combination of technology, architecture, environmental friendly infrastructure</p>', 0, '2016-01-09 05:39:42', 'Welcome Message', '', ''),
(27, 1, 'Project Slide1', 'Project Slide1', 'Project Slide1', 1, '<p><img title=\"DORPAN ZAMIR GARDEN\" src=\"http://www.dorpangroup.com/assets/uploaded/slider-real1.jpg\" alt=\"Opposite to IUT, Open and National University under Gazipur City Corporation.\" width=\"2000\" height=\"700\" /></p>', 0, '2016-01-21 07:44:13', 'Project Slide1', '', 'http://dpl.dorpangroup.com/project/7'),
(28, 1, 'Project Slide2', 'Project Slide2', 'Project Slide2', 2, '<p><img title=\"DORPAN VALLEY\" src=\"http://www.dorpangroup.com/assets/uploaded/slider-real2.jpg\" alt=\"Akbar Shah Railway Housing Society, Thana- Akbar Shah, Chittagong\" width=\"2000\" height=\"700\" /></p>', 0, '2016-01-21 07:45:36', 'Project Slide2', '', 'http://dpl.dorpangroup.com/project/8'),
(29, 1, 'Career', 'Career', 'Career', 4, '<p><span style=\"color: #339966; font-size: 12pt;\"><strong>Career</strong></span><br />Name of the Company: DORPAN GROUP<br />Number of Enterprise: 4<br />Company Status: Public Limited Company<br />Date of Incorporation: April, 2011<br />Incorporation Certificate No. : C-91935/11<br />Registered Office: House 30 (Flat 5A), Sonargaon Janapath Road, Sector 11 Chowrasta, Uttara Model Town, Uttara, Dhaka-1230, Bangladesh.<br />Phone: +88028958771, +88028958752<br />Fax: +88028958675<br />Cell: 01938852201<br />E-mail: info@dorpangroup.com, dorpanbd@gmail.com<br />Web Site: www.dorpangroup.com</p>', 0, '2015-12-02 14:00:23', 'Career', '', ''),
(30, 1, 'DPL: About Us', 'DPL: About Us', 'DPL: About Us', 1, '<p>Bangladesh is a developing country having abundant resource with limited area of land. After passing four decades of independence the growth rate is raised not up to the mark &amp; the basic needs of housing yet not ensured for all. Adequate investment with efficient leadership can fulfill the basic needs within a shortest possible way.</p>\n<p><strong>DORPAN Properties Limited (DPL)</strong> a sister concern of DORPAN GROUP is a dynamic incorporation in the field of real estate in Bangladesh.DPL is such a journey lead by a competitive &amp; efficient leadership to move in the right way of progress. A lot of professionals &amp; business fellows participate here to run the enterprise with a successful conclusion. Our mission &amp; vision is housing for all.</p>\n<p>In DPL, a set of dynamic &amp; visionary leadership is committed to serve a smart &amp; eco friendly housing project to the valued customers. Reasonable price, effective road connectivity &amp; placement of community facilities are remarkable identity of value addition. The company will be liable to bear the responsibility &amp; committed to the rights of people of the society.</p>\n<p>DPL is looking forward to engage people, serve people &amp; go ahead with the people. It deserves the common thinking of progress &amp; prosperity.</p>\n<p>&nbsp;</p>', 0, '0000-00-00 00:00:00', 'DPL: About Us', 'Bangladesh is a developing country having abundant resource with limited area of land. After passing four decades of independence the growth rate is raised not up to the mark & the basic needs of housing yet not ensured for all. Adequate investment with efficient leadership can fulfill the basic needs within a shortest possible way.\n\nDORPAN Properties Limited (DPL) a sister concern of DORPAN GROUP is a dynamic incorporation in the field of real estate in Bangladesh.DPL is such a journey lead by a competitive & efficient leadership to move in the right way of progress. A lot of professionals & business fellows participate here to run the enterprise with a successful conclusion. Our mission & vision is housing for all.', '');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `PartnerID` int(11) NOT NULL,
  `PartnerName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PartnerLink` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `Priority` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`PartnerID`, `PartnerName`, `PartnerLink`, `Image`, `IsActive`, `Priority`) VALUES
(2, 'Jamuna TV', 'http://stackoverflow.com/questions/2631439/codeigniter-accessing-config-variable-in-view', 'assets/records/partner/201512/2_13.jpg', 0, 2),
(1, 'Prothom Alo', 'http://stackoverflow.com/questions/2631439/codeigniter-accessing-config-variable-in-view', 'assets/records/partner/201512/1_11.png', 0, 1),
(3, 'Basundhara Group', 'http://stackoverflow.com/questions/2631439/codeigniter-accessing-config-variable-in-view', 'assets/records/partner/201512/3_146.jpg', 0, 1),
(4, 'Tata', 'https://translate.google.com/', 'assets/records/partner/201512/4_125.png', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pollip`
--

CREATE TABLE `pollip` (
  `PollIPID` int(11) NOT NULL,
  `OnlinepollID` int(11) DEFAULT NULL,
  `IPAddress` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ProjectID` int(11) NOT NULL,
  `ProjectTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Amenities` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Detail` text COLLATE utf8_unicode_ci NOT NULL,
  `ProjectImages` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `MediumImage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Thumbimage` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL DEFAULT '0',
  `ImageTitle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EntryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Date` datetime NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `UserID` int(11) NOT NULL,
  `ProjectCategoryID` int(11) NOT NULL,
  `ParentCategoryID` int(11) NOT NULL,
  `SubCategoryID` int(11) NOT NULL DEFAULT 0,
  `CategoryName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `AreaSF` int(11) NOT NULL,
  `Bath` tinyint(1) NOT NULL,
  `Bed` tinyint(1) NOT NULL,
  `Parking` tinyint(1) NOT NULL,
  `Location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Price` int(11) NOT NULL,
  `IsSelected` int(1) NOT NULL,
  `ProjectType` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ProjectStatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ProjectID`, `ProjectTitle`, `Amenities`, `Description`, `Detail`, `ProjectImages`, `Image`, `MediumImage`, `Thumbimage`, `ImageTitle`, `EntryDate`, `Date`, `IsActive`, `UserID`, `ProjectCategoryID`, `ParentCategoryID`, `SubCategoryID`, `CategoryName`, `AreaSF`, `Bath`, `Bed`, `Parking`, `Location`, `Price`, `IsSelected`, `ProjectType`, `ProjectStatus`) VALUES
(5, 'DORPAN FRIENDS TOWER', '', '', '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/project_at_a_glance_of_DORPAN_Friends_Tower.gif\" alt=\"\" width=\"2318\" height=\"2470\" /></p>', '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/Dorpan-Friends-Tower-(CollegeGate,-Tongi)_2.jpg\" alt=\"\" /><img src=\"http://www.dorpangroup.com/assets/uploaded/Dorpan-Friends-Tower-(Typical-Floor-Plan).jpg\" alt=\"\" width=\"1200\" height=\"1543\" /><img src=\"http://www.dorpangroup.com/assets/uploaded/PRICE-LIST-OF-DORPAN-FRIENDS--ROSE-TOWER-04.09.jpg\" alt=\"\" width=\"1200\" height=\"872\" /></p>', 'assets/records/project/201512/5_153.jpg', 'assets/records/project/201512/5_390.jpg', 'assets/records/project/201512/5_249.jpg', '', '2015-12-04 08:50:41', '2015-12-04 02:29:39', 0, 1, 1, 1, 0, 'On Going', 0, 0, 0, 0, 'Tongi, Gazipur.', 0, 0, 'Residential', 'Sale'),
(6, 'DORPAN ROSE TOWER', '', '', '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/project_at_a_glance_of_DORPAN_Rose_Tower.gif\" alt=\"\" width=\"2318\" height=\"2783\" /></p>', '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/Dorpan-Rose-Tower-(Auchpara,-Tongi).jpg\" alt=\"\" width=\"1000\" height=\"1273\" /><img src=\"http://www.dorpangroup.com/assets/uploaded/Dorpan-Rose-Tower-(typical-Floor-Plan).jpg\" alt=\"\" /><img src=\"http://www.dorpangroup.com/assets/uploaded/PRICE-LIST-OF-DORPAN-FRIENDS--ROSE-TOWER-04.09_1.jpg\" alt=\"\" width=\"1000\" height=\"727\" /></p>', 'assets/records/project/201512/6_150.jpg', 'assets/records/project/201512/6_332.jpg', 'assets/records/project/201512/6_258.jpg', '', '2015-12-04 08:56:15', '2015-12-04 02:52:05', 0, 1, 1, 1, 0, 'On Going', 0, 0, 0, 0, 'Tongi, Gazipur.', 0, 0, 'Residential', 'Sale'),
(7, 'DORPAN ZAMIR GARDEN', '', '', '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/project_at_a_glance_of_DORPAN_Zamir_Garden.gif\" alt=\"\" width=\"2624\" height=\"3717\" /></p>', '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/Dorpan-Zamir-Garden-(BoardBazaar).jpg\" alt=\"\" /><img src=\"http://www.dorpangroup.com/assets/uploaded/Dorpan-Zamir-Garden-(Typical-Floor-Plan).jpg\" alt=\"\" /><img src=\"http://www.dorpangroup.com/assets/uploaded/PRICE-LIST-OF-DORPAN-ZAMIR-GARDEN-04.09.jpg\" alt=\"\" /></p>', 'assets/records/project/201512/7_167.jpg', 'assets/records/project/201512/7_390.jpg', 'assets/records/project/201512/7_267.jpg', '', '2015-12-04 09:02:28', '2015-12-04 02:57:44', 1, 3, 1, 1, 0, 'On Going', 2200, 3, 3, 2, 'Opposite to IUT, Open and National University under Gazipur City Corporation.', 100000000, 0, 'Residential', 'Sale'),
(8, 'DORPAN VALLEY', '', '', '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/project_at_a_glance_of_DORPAN_Valley.gif\" alt=\"\" /></p>', '<p><img src=\"http://www.dorpangroup.com/assets/uploaded/Dorpan-Valley-1.jpg\" alt=\"\" /><img src=\"http://www.dorpangroup.com/assets/uploaded/Dorpan-Valley-4.jpg\" alt=\"\" /><img src=\"http://www.dorpangroup.com/assets/uploaded/PRICE-LIST-OF-DORPAN-Valley-04.09.jpg\" alt=\"\" width=\"1200\" height=\"872\" /></p>', 'assets/records/project/201512/8_138.jpg', 'assets/records/project/201512/8_351.jpg', 'assets/records/project/201512/8_258.jpg', '', '2015-12-04 09:08:50', '2015-12-04 03:05:44', 0, 1, 1, 1, 0, 'On Going', 0, 0, 0, 0, 'Plot no-21(On 40 feet road), Akbar Shah Railway Housing Society, Thana- Akbar Shah, Chittagong.', 0, 0, 'Commercial', 'Rent'),
(4, 'DORPAN Singapore Island', '', '', '<p>For detail&nbsp;<a href=\"http://www.dorpansingaporeisland.com/\">Click Here</a>.</p>\r\n<p>&nbsp;</p>', '<p><img src=\"http://dorpan.htglobal.info/assets/uploaded/150813_LANDSCAPE-A_1.gif\" alt=\"\" /><img src=\"http://dorpan.htglobal.info/assets/uploaded/150813_LANDSCAPE-C_1.gif\" alt=\"\" /><img src=\"http://dorpan.htglobal.info/assets/uploaded/150823_AERIAL-VIEW-WITH-LAKE_1.gif\" alt=\"\" width=\"800\" height=\"600\" /><img src=\"http://dorpan.htglobal.info/assets/uploaded/150813_TOP-VIEW_1.gif\" alt=\"\" /></p>', 'assets/records/project/201512/4_139.jpg', 'assets/records/project/201512/4_382.jpg', 'assets/records/project/201512/4_246.jpg', 'Building of 1300 sft.', '2015-12-04 08:11:30', '2015-12-04 02:04:42', 1, 3, 2, 2, 0, 'Completed', 2000, 4, 3, 1, 'Nolvogh & Dhour Mouja, Sonargaon Janapath, near Uttara 3rd Phase, Dhaka.', 2000000, 0, 'Residential', 'Sale');

-- --------------------------------------------------------

--
-- Table structure for table `quranhadith`
--

CREATE TABLE `quranhadith` (
  `QuranHadithID` int(11) NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `Code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Detail` longtext COLLATE utf8_unicode_ci NOT NULL,
  `UserID` int(11) NOT NULL,
  `EntryDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Caption` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ArabicText` text COLLATE utf8_unicode_ci NOT NULL,
  `Date` datetime NOT NULL,
  `Category` tinyint(1) NOT NULL,
  `TranslatedText` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `quranhadith`
--

INSERT INTO `quranhadith` (`QuranHadithID`, `IsActive`, `Code`, `Detail`, `UserID`, `EntryDate`, `Caption`, `ArabicText`, `Date`, `Category`, `TranslatedText`) VALUES
(20, 1, 'Q0001', '', 0, '2015-08-16 09:26:41', '1-1-7', 'بِسْمِ اللهِ الرَّحْمٰنِ الرَّحِيْمِ ﴿1:1﴾ اَلْحَمْدُ ِللهِ رَبِّ الْعَالَمِيْنَ ﴿1:2﴾ َالرَّحْمٰنِ الرَّحِيْمِ ﴿1:3﴾ مَالِكِ يَوْمِ الدِّيْنِ ﴿1:4﴾ إِيَّاكَ نَعْبُدُ وإِيَّاكَ نَسْتَعِيْنُ ﴿1:5﴾ اِهْدِنَا الصِّرَاطَ الْمُسْتَقِيْمَ ﴿1:6﴾ صِرَاطَ الَّذِيْنَ أَنعَمْتَ عَلَيْهِمْ غَيْرِ الْمَغْضُوْبِ عَلَيْهِمْ وَلاَ الضَّالِّيْنَ ﴿1:7﴾', '2015-09-04 00:00:11', 1, '(1:1) In the name of Allah, the Merciful, the Compassionate (1:2) Praise be to Allah, the Lord of the entire universe. (1:3) The Merciful, the Compassionate (1:4) The Master of the Day of Recompense. (1:5) You alone do we worship, and You alone do we turn for help (1:6) Direct us on to the Straight Way, (1:7) The way of those whom You have favoured, who did not incur Your wrath, who are not astray.'),
(21, 1, 'H001', '', 0, '2015-08-16 10:12:14', 'Source: Sahih Bukhari', 'Abu Hurayrah reported that the Messenger of Allah (peace and blessings be upon him) said:\nEvery action a son of Adam does shall be multiplied—a good action by ten times its value, up to 700 times. Allah says: With the exception of fasting, which belongs to Me, and I reward it accordingly. For, one abandons his desire and food for My sake.\nThere are two occasions of joy for a fasting person: one when he breaks his fast, and the other when he meets his Lord, and the (bad) breath (of a fasting person) is better in the sight of Allah than the fragrance of musk.\n [Al-Bukhari]\n', '2015-09-06 00:00:10', 2, '.'),
(22, 1, 'Q000002', '', 0, '2015-08-16 10:12:14', '2-2-5', ' ذَلِكَ الْكِتَابُ لَا رَيْبَ فِيهِ هُدًى لِلْمُتَّقِينَ ﴿2:2﴾  الَّذِينَ يُؤْمِنُونَ بِالْغَيْبِ وَيُقِيمُونَ الصَّلَاةَ وَمِمَّا رَزَقْنَاهُمْ يُنْفِقُونَ ﴿2:3﴾  وَالَّذِينَ يُؤْمِنُونَ بِمَا أُنْزِلَ إِلَيْكَ وَمَا أُنْزِلَ مِنْ قَبْلِكَ وَبِالْآَخِرَةِ هُمْ يُوقِنُونَ ﴿2:4﴾  أُولَئِكَ عَلَى هُدًى مِنْ رَبِّهِمْ وَأُولَئِكَ هُمُ الْمُفْلِحُونَ ﴿2:5﴾\n', '2015-09-02 00:00:10', 1, '(2:2) This is the Book of Allah: there is no doubt about it. It is guidance to Godfearing people, (2:3) who believe in the unseen , establish the Salats and expend (in Our way) out of what We have bestowed on them; (2:4) who believe in the Book We have sent down to you (i.e. the Qur\'an) and in the Books sent down before you, and firmly believe in the Hereafter. (2:5) Such people are on the right way from their Lord and such are truly successful.'),
(23, 1, 'Q000003', '', 0, '2015-08-24 01:27:50', '2-6-7', ' إِنَّ الَّذِينَ كَفَرُوا سَوَاءٌ عَلَيْهِمْ أَأَنْذَرْتَهُمْ أَمْ لَمْ تُنْذِرْهُمْ لَا يُؤْمِنُونَ ﴿2:6﴾  خَتَمَ اللَّهُ عَلَى قُلُوبِهِمْ وَعَلَى سَمْعِهِمْ وَعَلَى أَبْصَارِهِمْ غِشَاوَةٌ وَلَهُمْ عَذَابٌ عَظِيمٌ ﴿2:7﴾ \n\n', '2015-09-03 00:00:47', 1, '(2:6) Indeed, those who disbelieve - it is all the same for them whether you warn them or do not warn them - they will not believe. (2:7) Allah has sealed up their hearts and ears and a covering has fallen over their eyes, and they have incurred the severest punishment. '),
(24, 1, 'QA000004', '', 0, '2015-08-24 01:37:22', '2-21-22', 'يَا أَيُّهَا النَّاسُ اعْبُدُوا رَبَّكُمُ الَّذِي خَلَقَكُمْ وَالَّذِينَ مِنْ قَبْلِكُمْ لَعَلَّكُمْ تَتَّقُونَ ﴿2:21﴾  الَّذِي جَعَلَ لَكُمُ الْأَرْضَ فِرَاشًا وَالسَّمَاءَ بِنَاءً وَأَنْزَلَ مِنَ السَّمَاءِ مَاءً فَأَخْرَجَ بِهِ مِنَ الثَّمَرَاتِ رِزْقًا لَكُمْ فَلَا تَجْعَلُوا لِلَّهِ أَنْدَادًا وَأَنْتُمْ تَعْلَمُونَ ﴿2:22﴾', '2015-09-04 00:00:02', 1, '(2:21) O Mankind, submit to your Lord Who created you and those who were before you; in this way only you may expect to save yourselves. (2:22) It is He Who has made the earth a bed for you and the sky a canopy; and it is He Who sends down rain from above for the growth of every kind of food products for your sustenance. So, when you know this, you should not set up equals to rank with Allah.'),
(25, 1, 'Q000005', '', 0, '2015-08-24 01:43:29', ' Chapter 7. Al A\'Araf ', ' وَإِنْ كُنْتُمْ فِي رَيْبٍ مِمَّا نَزَّلْنَا عَلَى عَبْدِنَا فَأْتُوا بِسُورَةٍ مِنْ مِثْلِهِ وَادْعُوا شُهَدَاءَكُمْ مِنْ دُونِ اللَّهِ إِنْ كُنْتُمْ صَادِقِينَ ﴿2:23﴾  فَإِنْ لَمْ تَفْعَلُوا وَلَنْ تَفْعَلُوا فَاتَّقُوا النَّارَ الَّتِي وَقُودُهَا النَّاسُ وَالْحِجَارَةُ أُعِدَّتْ لِلْكَافِرِينَ ﴿2:24﴾\n', '2015-09-05 00:00:48', 1, '(2:23) And if you be in doubt whether the Book We have sent down to Our Servant is from Us or not, then produce, at least, one Surah like this. You may call all your associates to assist you and avail yourselves of the help of anyone other than Allah. If you are genuine in your doubt, do this. (2:24) But if you do not do this, and you can never do this, then fear the Fire which has been prepared for the disbelievers and which shall have men and stones for fuel.'),
(26, 1, 'Q000006', '', 0, '2015-08-24 01:46:33', 'Chapter (2-25)', ' وَبَشِّرِ الَّذِينَ آَمَنُوا وَعَمِلُوا الصَّالِحَاتِ أَنَّ لَهُمْ جَنَّاتٍ تَجْرِي مِنْ تَحْتِهَا الْأَنْهَارُ كُلَّمَا رُزِقُوا مِنْهَا مِنْ ثَمَرَةٍ رِزْقًا قَالُوا هَذَا الَّذِي رُزِقْنَا مِنْ قَبْلُ وَأُتُوا بِهِ مُتَشَابِهًا وَلَهُمْ فِيهَا أَزْوَاجٌ مُطَهَّرَةٌ وَهُمْ فِيهَا خَالِدُونَ ﴿2:25﴾', '2015-09-06 00:00:20', 1, '(2:25) And give good news (O Muhammad), to those who believe in this Book and do good deeds (in accordance with its teachings). For them there will be gardens underneath which canals flow. Their fruits will so resemble the fruits on the Earth that every time they will be provided with fruits, they will say, \"Such fruits were provided to us before on the Earth.\" And there will be pure spouses for them and therein they will live for ever.'),
(27, 1, 'Q000007', '', 0, '2015-08-24 01:48:23', 'Chapter 2 (28-29)', 'كَيْفَ تَكْفُرُونَ بِاللَّهِ وَكُنْتُمْ أَمْوَاتًا فَأَحْيَاكُمْ ثُمَّ يُمِيتُكُمْ ثُمَّ يُحْيِيكُمْ ثُمَّ إِلَيْهِ تُرْجَعُونَ ﴿2:28﴾  هُوَ الَّذِي خَلَقَ لَكُمْ مَا فِي الْأَرْضِ جَمِيعًا ثُمَّ اسْتَوَى إِلَى السَّمَاءِ فَسَوَّاهُنَّ سَبْعَ سَمَوَاتٍ وَهُوَ بِكُلِّ شَيْءٍ عَلِيمٌ ﴿2:29﴾', '2015-09-07 00:00:19', 1, '(2:28) How can you deny God? You were lifeless and He gave you life, then He will cause you to die, then He will bring you [back] to life, and then to Him you will be returned. (2:29) He is the one Who created everything in the earth for you. Then He directed Himself to the heaven, [His being above all creation], and made them seven heavens, and He has (perfect) knowledge of everything.'),
(28, 1, 'H002', '', 0, '2015-08-24 02:57:34', '[Al-Bukhari and Muslim]', 'Narrated \'Umar bin Al-Khattab (May Allah be pleased with him), reported: Messenger of Allah (PBUH) said, \"The deeds are considered by the intentions, and a person will get the reward according to his intention. So whoever emigrated for Allah and His Messenger, his emigration will be for Allah and His Messenger; and whoever emigrated for worldly benefits or for a woman to marry, his emigration would be for what he emigrated for\".', '2015-09-07 00:00:15', 2, '.'),
(29, 1, 'H003', '<p>In another version of Muslim, he said: \"Verily, Allah is more pleased with the repentance of His slave than a person who has his camel in a waterless desert carrying his provision of food and drink and it is lost. He, having lost all hopes (to get that back), lies down in shade and is disappointed about his camel; when all of a sudden he finds that camel standing before him. He takes hold of its reins and then out of boundless joy blurts out: \'O Allah, You are my slave and I am Your Rubb\'.He commits this mistake out of extreme joy\".</p>', 0, '2015-08-24 03:07:33', '[Al-Bukhari and Muslim]', '.', '2015-09-08 00:00:57', 2, 'Anas bin Malik Al-Ansari (MayAllah be pleased with him) the servant of the Messenger of Allah narrated: Messenger of Allah (PBUH) said, \"Verily, Allah is more delighted with the repentance of His slave than a person who lost his camel in a desert land and then finds it (unexpectedly)\".'),
(30, 1, 'Q0008', '', 0, '2015-09-06 03:24:57', 'Chapter 2-43-45', 'وَأَقِيمُوا الصَّلَاةَ وَآَتُوا الزَّكَاةَ وَارْكَعُوا مَعَ الرَّاكِعِينَ ﴿2:43﴾  أَتَأْمُرُونَ النَّاسَ بِالْبِرِّ وَتَنْسَوْنَ أَنْفُسَكُمْ وَأَنْتُمْ تَتْلُونَ الْكِتَابَ أَفَلَا تَعْقِلُونَ ﴿2:44﴾  وَاسْتَعِينُوا بِالصَّبْرِ وَالصَّلَاةِ وَإِنَّهَا لَكَبِيرَةٌ إِلَّا عَلَى الْخَاشِعِينَ ﴿2:45﴾  الَّذِينَ يَظُنُّونَ أَنَّهُمْ مُلاَقُواْ رَبِّهِمْ وَأَنَّهُمْ إِلَيْهِ رَاجِعُونَ ﴿2:46﴾ ', '2015-09-08 06:00:48', 1, '(2:43) Establish the Prayer, pay the Zakat and bow down before Me along with those who bow down. (2:44) How is it that you enjoin others to follow the Right Way, but forget it yourselves, though you read the Scriptures? Have you no sense at all? (2:45) Seek help with the Salat and fortitude: no doubt, Salat is a hard task but not for those obedient servants, (2:46) who realize that ultimately they shall meet their Lord and shall return to Him.'),
(31, 1, 'Q0009', '', 0, '2015-09-06 03:27:15', 'Chapter 2-47-48', 'يَا بَنِي إِسْرَائِيلَ اذْكُرُوا نِعْمَتِيَ الَّتِي أَنْعَمْتُ عَلَيْكُمْ وَأَنِّي فَضَّلْتُكُمْ عَلَى الْعَالَمِينَ ﴿2:47﴾  وَاتَّقُوا يَوْمًا لَا تَجْزِي نَفْسٌ عَنْ نَفْسٍ شَيْئًا وَلَا يُقْبَلُ مِنْهَا شَفَاعَةٌ وَلَا يُؤْخَذُ مِنْهَا عَدْلٌ وَلَا هُمْ يُنْصَرُونَ ﴿2:48﴾', '2015-09-09 06:00:03', 1, '(2:47) O Children of Israel! Just recall to mind My favour that bestowed upon you, and remember that I exalted you above all the peoples of the world. (2:48) Guard yourselves against the Day when no one shall avail anyone anything; nor shall intercession be accepted from anyone; nor shall anyone be acquitted for any (amount of) ransom; nor shall the guilty ones be helped from any quarter.'),
(32, 1, 'H004', '', 0, '2015-09-06 03:36:03', '[Muslim]', '', '2015-09-09 00:00:19', 2, '.Abu Musa Al-Ash\'ari (May Allah be pleased with him) reported: The Prophet (PBUH) said: \"Allah, the Exalted, will continue to stretch out His Hand in the night so that the sinners of the day may repent, and continue to stretch His Hand in the daytime so that the sinners of the night may repent, until the sun rises from the west\". '),
(33, 1, 'H005', '', 0, '2015-09-06 03:37:15', '[Al-Bukhari and Muslim]', '.', '2015-09-10 00:00:34', 2, 'Abu Sa\'id Al-Khudri (May Allah be pleased with him) reported: Prophet of Allah (PBUH) said: \"There was a man from among a nation before you who killed ninety-nine people and then made an inquiry about the most learned person on the earth. He was directed to a monk. He came to him and told him that he had killed ninety-nine people and asked him if there was any chance for his repentance to be accepted. He replied in the negative and the man killed him also completing one hundred. He then asked about the most learned man in the earth. He was directed to a scholar. He told him that he had killed one hundred people and asked him if there was any chance for his repentance to be accepted. He replied in the affirmative and asked, \'Who stands between you and repentance? Go to such and such land; there (you will find) people devoted to prayer and worship of Allah, join them in worship, and do not come back to your land because it is an evil place.\' So he went away and hardly had he covered half the distance when death overtook him; and there was a dispute between the angels of mercy and the angels of torment. The angels of mercy pleaded, \'This man has come with a repenting heart to Allah,\' and the angels of punishment argued, \'He never did a virtuous deed in his life.\' Then there appeared another angel in the form of a human being and the contending angels agreed to make him arbiter between them. He said, \'Measure the distance between the two lands. He will be considered belonging to the land to which he is nearer.\' They measured and found him closer to the land (land of piety) where he intended to go, and so the angels of mercy collected his soul\". [Al-Bukhari and Muslim].'),
(34, 1, 'Q0010', '', 0, '2015-09-09 00:21:57', '2-81-82', 'بَلَى مَنْ كَسَبَ سَيِّئَةً وَأَحَاطَتْ بِهِ خَطِيئَتُهُ فَأُولَئِكَ أَصْحَابُ النَّارِ هُمْ فِيهَا خَالِدُونَ ﴿2:81﴾  وَالَّذِينَ آَمَنُوا وَعَمِلُوا الصَّالِحَاتِ أُولَئِكَ أَصْحَابُ الْجَنَّةِ هُمْ فِيهَا خَالِدُونَ ﴿2:82﴾ ', '2015-09-09 00:00:47', 1, '(2:81) Whoever earns evil and becomes engrossed in sin shall be doomed to Hell and abide therein for ever. (2:82) Only those people who believe and do good deeds, will be the dwellers of the Garden and live there for ever.'),
(35, 1, 'Q0011', '', 0, '2015-09-09 00:24:23', '2-107', ' أَلَمْ تَعْلَمْ أَنَّ اللَّهَ لَهُ مُلْكُ السَّمَوَاتِ وَالْأَرْضِ وَمَا لَكُمْ مِنْ دُونِ اللَّهِ مِنْ وَلِيٍّ وَلَا نَصِيرٍ ﴿2:107﴾', '2015-09-09 00:23:17', 1, '(2:107) Do you not know that Allah has full power over everything? Do you not know that the sovereignty of the heavens and the earth belongs to Allah alone and that you have neither any protector nor helper beside Him?'),
(36, 1, 'Q0012', '', 0, '2015-09-09 00:26:13', '2-116-117', ' وَقَالُوا اتَّخَذَ اللَّهُ وَلَدًا سُبْحَانَهُ بَلْ لَهُ مَا فِي السَّمَوَاتِ وَالْأَرْضِ كُلٌّ لَهُ قَانِتُونَ ﴿2:116﴾  بَدِيعُ السَّمَوَاتِ وَالْأَرْضِ وَإِذَا قَضَى أَمْرًا فَإِنَّمَا يَقُولُ لَهُ كُنْ فَيَكُونُ ﴿2:117﴾', '2015-09-06 00:00:08', 1, '(2:116) They say \"Allah has adopted a son.\" Allah is above such things. As a matter of fact, whatever is in the heavens and on the earth belongs to Him and all are obedient to Him. (2:117) He is the Creator of the heavens and the earth: when He decrees a thing, He merely says, \"Be,\" and there it is.'),
(37, 1, 'Q0013', '', 0, '2015-09-09 00:28:24', '2-119', 'إِنَّا أَرْسَلْنَاكَ بِالْحَقِّ بَشِيرًا وَنَذِيرًا وَلَا تُسْأَلُ عَنْ أَصْحَابِ الْجَحِيمِ ﴿2:119﴾', '2015-09-07 00:00:20', 1, '(2:119) (what greater Sign could there be than that) We have sent you with the knowledge of the Truth and made you a bearer of good tidings and a Warner? Now, you are not responsible and answerable for those who are bent upon going to Hell.'),
(38, 1, 'Q0014', '', 0, '2015-09-09 00:29:43', '2-123', ' وَاتَّقُوا يَوْمًا لَا تَجْزِي نَفْسٌ عَنْ نَفْسٍ شَيْئًا وَلَا يُقْبَلُ مِنْهَا عَدْلٌ وَلَا تَنْفَعُهَا شَفَاعَةٌ وَلَا هُمْ يُنْصَرُونَ ﴿2:123﴾', '2015-09-08 00:00:43', 1, '(2:123) And fear a Day(the day of judgement) when no soul will suffice for another soul at all, and no compensation will be accepted from it, nor will any intercession benefit it, nor will they be aided.'),
(39, 1, 'Q0015', '', 0, '2015-09-09 00:36:32', '2-136', 'قُولُوا آَمَنَّا بِاللَّهِ وَمَا أُنْزِلَ إِلَيْنَا وَمَا أُنْزِلَ إِلَى إِبْرَاهِيمَ وَإِسْمَاعِيلَ وَإِسْحَاقَ وَيَعْقُوبَ وَالْأَسْبَاطِ وَمَا أُوتِيَ مُوسَى وَعِيسَى وَمَا أُوتِيَ النَّبِيُّونَ مِنْ رَبِّهِمْ لَا نُفَرِّقُ بَيْنَ أَحَدٍ مِنْهُمْ وَنَحْنُ لَهُ مُسْلِمُونَ ﴿2:136﴾', '2015-09-09 00:30:47', 1, '(2:136) O Muslims, say to them, \"We believe in Allah and the Guidance which has been sent down to us and which was sent to Abraham, Ismail , Isaac and Jacob and his descendants and which was given by their Lord to Moses and Jesus and to all other Prophets. We do not discriminate against any of them and we have completely surrendered to Allah as Muslims.\"'),
(40, 1, 'Q0016', '', 0, '2015-09-09 00:49:27', '2-137-138', 'فَإِنْ آَمَنُوا بِمِثْلِ مَا آَمَنْتُمْ بِهِ فَقَدِ اهْتَدَوْا وَإِنْ تَوَلَّوْا فَإِنَّمَا هُمْ فِي شِقَاقٍ فَسَيَكْفِيكَهُمُ اللَّهُ وَهُوَ السَّمِيعُ الْعَلِيمُ ﴿2:137﴾  صِبْغَةَ اللَّهِ وَمَنْ أَحْسَنُ مِنَ اللَّهِ صِبْغَةً وَنَحْنُ لَهُ عَابِدُونَ ﴿2:138﴾', '2015-09-10 00:00:29', 1, '(2:137) Then if they believe the way you have believed, they have the right guidance,and if they turn away from this, it will become obvious that they are obdurate. Therefore, rest assured that AIIah will suffice to defend you against them: He hears everything and knows every thing. (2:138) [And say, \"Ours is] the religion of Allah . And who is better than Allah in [ordaining] religion? And we are worshippers of Him.\"'),
(41, 1, 'Q0017', '', 0, '2015-09-09 00:56:37', '2-139-140', 'قُلْ أَتُحَاجُّونَنَا فِي اللَّهِ وَهُوَ رَبُّنَا وَرَبُّكُمْ وَلَنَا أَعْمَالُنَا وَلَكُمْ أَعْمَالُكُمْ وَنَحْنُ لَهُ مُخْلِصُونَ ﴿2:139﴾  أَمْ تَقُولُونَ إِنَّ إِبْرَاهِيمَ وَإِسْمَاعِيلَ وَإِسْحَاقَ وَيَعْقُوبَ وَالْأَسْبَاطَ كَانُوا هُودًا أَوْ نَصَارَى قُلْ أَأَنْتُمْ أَعْلَمُ أَمِ اللَّهُ وَمَنْ أَظْلَمُ مِمَّنْ كَتَمَ شَهَادَةً عِنْدَهُ مِنَ اللَّهِ وَمَا اللَّهُ بِغَافِلٍ عَمَّا تَعْمَلُونَ ﴿2:140﴾', '2015-09-11 00:00:29', 1, '(2:139) Say, [O Muhammad], \"Do you argue with us about Allah while He is our Lord and your Lord? For us are our deeds, and for you are your deeds. And we are sincere [in deed and intention] to Him.\" (2:140) Or do you say that Abraham. Ismail , Isaac, Jacob and his children were all Jews or Christians?\" Ask them,\"Do you know more than Allah does? And who is more unjust than the one who hides the testimony which Allah has entrusted to him? Allah is not unaware of what you are doing.'),
(42, 1, 'Q0018', '', 0, '2015-09-09 00:59:45', '2-151-152', 'كَمَا أَرْسَلْنَا فِيكُمْ رَسُولًا مِنْكُمْ يَتْلُو عَلَيْكُمْ آَيَاتِنَا وَيُزَكِّيكُمْ وَيُعَلِّمُكُمُ الْكِتَابَ وَالْحِكْمَةَ وَيُعَلِّمُكُمْ مَا لَمْ تَكُونُوا تَعْلَمُونَ ﴿2:151﴾ فَاذْكُرُونِي أَذْكُرْكُمْ وَاشْكُرُوا لِي وَلَا تَكْفُرُونِ ﴿2:152﴾ ', '2015-09-12 00:00:21', 1, '(2:151) Just as We have sent among you a messenger from yourselves reciting to you Our verses and purifying you and teaching you the Book and wisdom and teaching you that which you did not know. (2:152) So remember \' Me and I will remember you, and give thanks to Me and be not ungrateful.'),
(43, 1, 'Q0019', '', 0, '2015-09-09 01:05:14', '2-153-155-156', ' يَا أَيُّهَا الَّذِينَ آَمَنُوا اسْتَعِينُوا بِالصَّبْرِ وَالصَّلَاةِ إِنَّ اللَّهَ مَعَ الصَّابِرِينَ ﴿2:153﴾ وَلَنَبْلُوَنَّكُمْ بِشَيْءٍ مِنَ الْخَوْفِ وَالْجُوعِ وَنَقْصٍ مِنَ الْأَمْوَالِ وَالْأَنْفُسِ وَالثَّمَرَاتِ وَبَشِّرِ الصَّابِرِينَ ﴿2:155﴾ الَّذِينَ إِذَا أَصَابَتْهُمْ مُصِيبَةٌ قَالُوا إِنَّا لِلَّهِ وَإِنَّا إِلَيْهِ رَاجِعُونَ ﴿2:156﴾', '2015-09-13 00:00:54', 1, '(2:153) O Believers, seek help with fortitude and Salat, for Allah is with those who show fortitude. (2:155) We will surely put you to trial by involving you in fear and hunger and by causing loss of property, life and earnings. And give good tidings to those who remain steadfast in these trials: (2:156) when a misfortune comes to them, they say, \"We are Allah\'s and we shall certainly return to Him,\'\''),
(44, 1, 'Q0020', '', 0, '2015-09-09 01:08:26', '2-163-165', 'وَإِلَهُكُمْ إِلَهٌ وَاحِدٌ لَا إِلَهَ إِلَّا هُوَ الرَّحْمَنُ الرَّحِيمُ ﴿2:163﴾ إِنَّ فِي خَلْقِ السَّمَوَاتِ وَالْأَرْضِ وَاخْتِلَافِ اللَّيْلِ وَالنَّهَارِ وَالْفُلْكِ الَّتِي تَجْرِي فِي الْبَحْرِ بِمَا يَنْفَعُ النَّاسَ وَمَا أَنْزَلَ اللَّهُ مِنَ السَّمَاءِ مِنْ مَاءٍ فَأَحْيَا بِهِ الْأَرْضَ بَعْدَ مَوْتِهَا وَبَثَّ فِيهَا مِنْ كُلِّ دَابَّةٍ وَتَصْرِيفِ الرِّيَاحِ وَالسَّحَابِ الْمُسَخَّرِ بَيْنَ السَّمَاءِ وَالْأَرْضِ لَآَيَاتٍ لِقَوْمٍ يَعْقِلُونَ ﴿2:164﴾  ', '2015-09-14 00:00:31', 1, '(2:163) Your Deity is Allah alone: there is no deity save the All-Beneficent and All-Merciful Allah. (2:164) (If they want a sign for the perception of this Reality) surety there are countless signs for those who use their common sense; they can see alternation of the night and day, in the ships that sail the ocean laden with cargoes beneficial to mankind, and in the rain-water which Allah sends down from the sky and thereby gives life to the earth after its death and spreads over it all kinds of animate creatures, in the blowing of the winds and in the clouds which obediently wait for orders between the sky and the earth. '),
(45, 1, 'Q0022', '', 0, '2015-09-09 01:19:54', '2-168-169', 'يَا أَيُّهَا النَّاسُ كُلُوا مِمَّا فِي الْأَرْضِ حَلَالًا طَيِّبًا وَلَا تَتَّبِعُوا خُطُوَاتِ الشَّيْطَانِ إِنَّهُ لَكُمْ عَدُوٌّ مُبِينٌ ﴿2:168﴾  إِنَّمَا يَأْمُرُكُمْ بِالسُّوءِ وَالْفَحْشَاءِ وَأَنْ تَقُولُوا عَلَى اللَّهِ مَا لَا تَعْلَمُونَ ﴿2:169﴾', '2015-09-15 00:00:58', 1, '(2:168) O people, eat of what is lawful and clean in the earth and do not follow the ways of Satan, for he is your avowed enemy. (2:169) He enjoins you to commit vice and indecency and induces you to attribute to Allah\'s name things you do not know to be from Him.'),
(46, 1, 'H006', '<p>Ibn \'Abbas and Anas bin Malik (May Allah be pleased with them) reported: Messenger of Allah (PBUH) said, \"If a son of Adam were to own a valley full of gold, he would desire to have two. Nothing can fill his mouth except the earth (of the grave). Allah turns with mercy to him who turns to Him in repentance\". [Al-Bukhari and Muslim]</p>', 0, '2015-09-09 01:33:48', '.', '.', '2015-09-11 00:00:26', 2, ''),
(47, 1, 'Q0021', '', 0, '2015-09-10 01:14:03', '2-165', ' وَمِنَ النَّاسِ مَنْ يَتَّخِذُ مِنْ دُونِ اللَّهِ أَنْدَادًا يُحِبُّونَهُمْ كَحُبِّ اللَّهِ وَالَّذِينَ آَمَنُوا أَشَدُّ حُبًّا لِلَّهِ وَلَوْ يَرَى الَّذِينَ ظَلَمُوا إِذْ يَرَوْنَ الْعَذَابَ أَنَّ الْقُوَّةَ لِلَّهِ جَمِيعًا وَأَنَّ اللَّهَ شَدِيدُ الْعَذَابِ ﴿2:165﴾', '2015-09-10 01:12:41', 1, '(2:165) (In spite of such clear signs of the Oneness of Allah), there are people who set up equals and rivals with Allah and adore them with the adoration due to Allah. whereas the Believers adore Allah most ardently. Would that these transgressors could realize now what they will realize, when they will see the chastisement before them that power and authority wholly belong to Allah and that Allah is severe in punishment!'),
(48, 1, 'Q0023', '', 0, '2015-09-10 01:16:22', '2-174-175', ' إِنَّ الَّذِينَ يَكْتُمُونَ مَا أَنْزَلَ اللَّهُ مِنَ الْكِتَابِ وَيَشْتَرُونَ بِهِ ثَمَنًا قَلِيلًا أُولَئِكَ مَا يَأْكُلُونَ فِي بُطُونِهِمْ إِلَّا النَّارَ وَلَا يُكَلِّمُهُمُ اللَّهُ يَوْمَ الْقِيَامَةِ وَلَا يُزَكِّيهِمْ وَلَهُمْ عَذَابٌ أَلِيمٌ ﴿2:174﴾  أُولَئِكَ الَّذِينَ اشْتَرَوُا الضَّلَالَةَ بِالْهُدَى وَالْعَذَابَ بِالْمَغْفِرَةِ فَمَا أَصْبَرَهُمْ عَلَى النَّارِ ﴿2:175﴾', '2015-09-10 01:14:23', 1, '(2:174) Indeed those, who conceal the Commands that Allah has sent down in His Book and barter them away for paltry worldly gains, fill their bellies with fire. Allah will not speak to them on the Day of Resurrection, nor will He regard them as pure; \"a there is a painful torment for them. (2:175) They are the people who have bartered away Guidance for error and Allah\'s pardon for His punishment. How audacious they are: they are ready even to endure the fire of Hell.'),
(49, 1, 'Q0024', '', 0, '2015-09-10 01:19:25', '2-177', 'لَيْسَ الْبِرَّ أَنْ تُوَلُّوا وُجُوهَكُمْ قِبَلَ الْمَشْرِقِ وَالْمَغْرِبِ وَلَكِنَّ الْبِرَّ مَنْ آَمَنَ بِاللَّهِ وَالْيَوْمِ الْآَخِرِ وَالْمَلَائِكَةِ وَالْكِتَابِ وَالنَّبِيِّينَ وَآَتَى الْمَالَ عَلَى حُبِّهِ ذَوِي الْقُرْبَى وَالْيَتَامَى وَالْمَسَاكِينَ وَابْنَ السَّبِيلِ وَالسَّائِلِينَ وَفِي الرِّقَابِ وَأَقَامَ الصَّلَاةَ وَآَتَى الزَّكَاةَ وَالْمُوفُونَ بِعَهْدِهِمْ إِذَا عَاهَدُوا وَالصَّابِرِينَ فِي الْبَأْسَاءِ وَالضَّرَّاءِ وَحِينَ الْبَأْسِ أُولَئِكَ الَّذِينَ صَدَقُوا وَأُولَئِكَ هُمُ الْمُتَّقُونَ ﴿2:177﴾', '2015-09-10 01:18:37', 1, '(2:177) It is no virtue. That you turn your faces towards the east or the west, but virtue is that one should sincerely believe in Allah and the Last Day and the Angels and the Book and the Prophets and, out of His love, spend of one\'s choice wealth for relatives and orphans, for the needy and the wayfarer, for beggars and for the ransom of slaves, and establish the Salat and pay the Zakat. And the virtuous are those who keep their pledges when they make them and show fortitude in hardships and adversity and in the struggle between the Truth and falsehood; such are the truthful people and such are the pious.'),
(50, 1, 'Q0025', '', 0, '2015-09-10 01:27:10', '2-183', 'يَا أَيُّهَا الَّذِينَ آَمَنُوا كُتِبَ عَلَيْكُمُ الصِّيَامُ كَمَا كُتِبَ عَلَى الَّذِينَ مِنْ قَبْلِكُمْ لَعَلَّكُمْ تَتَّقُونَ ﴿2:183﴾', '2015-09-10 01:26:31', 1, '(2:183) O Believers, the Fast has been made obligatory on you just as it was prescribed for the followers of the Prophets before you. It is expected that this will produce piety in you.'),
(51, 1, 'Q0026', '', 0, '2015-09-10 01:28:24', '.', ' شَهْرُ رَمَضَانَ الَّذِي أُنْزِلَ فِيهِ الْقُرْآَنُ هُدًى لِلنَّاسِ وَبَيِّنَاتٍ مِنَ الْهُدَى وَالْفُرْقَانِ فَمَنْ شَهِدَ مِنْكُمُ الشَّهْرَ فَلْيَصُمْهُ وَمَنْ كَانَ مَرِيضًا أَوْ عَلَى سَفَرٍ فَعِدَّةٌ مِنْ أَيَّامٍ أُخَرَ يُرِيدُ اللَّهُ بِكُمُ الْيُسْرَ وَلَا يُرِيدُ بِكُمُ الْعُسْرَ وَلِتُكْمِلُوا الْعِدَّةَ وَلِتُكَبِّرُوا اللَّهَ عَلَى مَا هَدَاكُمْ وَلَعَلَّكُمْ تَشْكُرُونَ ﴿2:185﴾', '2015-09-10 01:27:17', 1, '(2:185) Ramadan is the month in which the Qur\'an was sent down : this Book is a perfect guidance for mankind and consists of clear teachings which show the right way and are a criterion of Truth and falsehood. Therefore from now on whoever witnesses it, it is obligatory on hire to fast the whole month, but if one be ill or on a journey, he should make up for the same number by fasting on other days. Allah desires to show leniency to you and does not desire to show any hardship. \"therefore this method is being shown to you so that you may complete the number of Fast days and glorify Allah for the Guidance He has shown to you and be grateful to Him.'),
(52, 1, 'Q0027', '', 0, '2015-09-10 01:29:55', '.', ' وَإِذَا سَأَلَكَ عِبَادِي عَنِّي فَإِنِّي قَرِيبٌ أُجِيبُ دَعْوَةَ الدَّاعِ إِذَا دَعَانِ فَلْيَسْتَجِيبُوا لِي وَلْيُؤْمِنُوا بِي لَعَلَّهُمْ يَرْشُدُونَ ﴿2:186﴾', '2015-09-10 01:29:10', 1, '(2:186) And if My servants ask you, O Prophet. concerning Me, tell them that I am quite near to them. I hear and answer the prayer of the suppliant, when he calls to Me. So let them respond to My call and believe in Me. Convey this to them, O Prophet; perhaps they may be guided aright.'),
(53, 1, 'Q0028', '', 0, '2015-09-10 01:33:03', '.', 'وَأَنْفِقُوا فِي سَبِيلِ اللَّهِ وَلَا تُلْقُوا بِأَيْدِيكُمْ إِلَى التَّهْلُكَةِ وَأَحْسِنُوا إِنَّ اللَّهَ يُحِبُّ الْمُحْسِنِينَ ﴿2:195﴾', '2015-09-10 01:32:00', 1, '(2:195) Spend your wealth in the Way of Allah and do not cast yourselves into ruin with your own hands. Do all things gracefully, for Allah loves those who do all things with excellence.'),
(54, 1, 'Q0029', '', 0, '2015-09-10 01:35:02', '.', 'وَمِنْهُمْ مَنْ يَقُولُ رَبَّنَا آَتِنَا فِي الدُّنْيَا حَسَنَةً وَفِي الْآَخِرَةِ حَسَنَةً وَقِنَا عَذَابَ النَّارِ ﴿2:201﴾  أُولَئِكَ لَهُمْ نَصِيبٌ مِمَّا كَسَبُوا وَاللَّهُ سَرِيعُ الْحِسَابِ ﴿2:202﴾', '2015-09-10 01:34:26', 1, '(2:201) Then there are others who say, \"Our Lord, give us what is good in this world and also what is good in the Hereafter and save us from the torment of Fire.\" (2:202) Such people shall have their due share (in both the worlds) according to what they earn. And Allah is swift at settling accounts.'),
(55, 1, 'Q0030', '', 0, '2015-09-10 01:40:43', '.', 'وَمِنَ النَّاسِ مَنْ يُعْجِبُكَ قَوْلُهُ فِي الْحَيَاةِ الدُّنْيَا وَيُشْهِدُ اللَّهَ عَلَى مَا فِي قَلْبِهِ وَهُوَ أَلَدُّ الْخِصَامِ ﴿2:204﴾  وَإِذَا تَوَلَّى سَعَى فِي الْأَرْضِ لِيُفْسِدَ فِيهَا وَيُهْلِكَ الْحَرْثَ وَالنَّسْلَ وَاللَّهُ لَا يُحِبُّ الْفَسَادَ ﴿2:205﴾  وَإِذَا قِيلَ لَهُ اتَّقِ اللَّهَ أَخَذَتْهُ الْعِزَّةُ بِالْإِثْمِ فَحَسْبُهُ جَهَنَّمُ وَلَبِئْسَ الْمِهَادُ ﴿2:206﴾', '2015-09-10 01:39:52', 1, '(2:204) There is a certain type of man who charms you in this worldly life with his glib talk. He calls Allah to witness again and again that he cherishes good intentions in his heart, whereas, in fact, he is the deadliest opponent of the Truth. (2:205) When he gets power he directs all his efforts towards spreading mischief in the land, destroying harvests and killing the human race whereas Allah (Whom he makes his witness) does not like mischief. (2:206) And when it is said to him, \"Fear Allah,\" vanity seizes him and makes him adhere to the sin. Hell is the proper place for such a person and it is a very bad dwelling indeed.'),
(56, 1, 'Q0031', '', 0, '2015-09-10 10:35:42', '.', 'وَمِنَ النَّاسِ مَنْ يَقُولُ آَمَنَّا بِاللَّهِ وَبِالْيَوْمِ الْآَخِرِ وَمَا هُمْ بِمُؤْمِنِينَ ﴿2:8﴾  يُخَادِعُونَ اللَّهَ وَالَّذِينَ آَمَنُوا وَمَا يَخْدَعُونَ إِلَّا أَنْفُسَهُمْ وَمَا يَشْعُرُونَ ﴿2:9﴾  فِي قُلُوبِهِمْ مَرَضٌ فَزَادَهُمُ اللَّهُ مَرَضًا وَلَهُمْ عَذَابٌ أَلِيمٌ بِمَا كَانُوا يَكْذِبُونَ ﴿2:10﴾', '2015-09-10 10:33:52', 1, '(2:8) Then there are some who say, \"We believe in Allah and the Last Day\", whereas they do not believe at all. (2:9) They thus try to deceive Allah and the Believers, but they succeed in deceiving none except themselves and they realize it not . (2:10) In their hearts is a disease which Allah has increased all the more and a painful doom is in store for them for the lie they utter.'),
(57, 1, 'Q0032', '', 0, '2015-09-10 10:53:04', '.', ' وَإِذَا قِيلَ لَهُمْ لَا تُفْسِدُوا فِي الْأَرْضِ قَالُوا إِنَّمَا نَحْنُ مُصْلِحُونَ ﴿2:11﴾  أَلَا إِنَّهُمْ هُمُ الْمُفْسِدُونَ وَلَكِنْ لَا يَشْعُرُونَ ﴿2:12﴾  وَإِذَا قِيلَ لَهُمْ آَمِنُوا كَمَا آَمَنَ النَّاسُ قَالُوا أَنُؤْمِنُ كَمَا آَمَنَ السُّفَهَاءُ أَلَا إِنَّهُمْ هُمُ السُّفَهَاءُ وَلَكِنْ لَا يَعْلَمُونَ ﴿2:13﴾', '2015-09-10 10:48:13', 1, '(2:11) And when it is said to them, \"Do not cause corruption on the earth,\" they say, \"We are but reformers.\" (2:12) Beware! they do spread disorder but they realize it not. (2:13) And when it is said to them, \"Believe sincerely as the other people have believed\", they reply, \"Should we believe as fools have believed?” Beware! they themselves are the fools, but they know it not.'),
(58, 1, 'Q0033', '', 0, '2015-09-10 10:58:14', '.', 'وَإِذَا لَقُوا الَّذِينَ آَمَنُوا قَالُوا آَمَنَّا وَإِذَا خَلَوْا إِلَى شَيَاطِينِهِمْ قَالُوا إِنَّا مَعَكُمْ إِنَّمَا نَحْنُ مُسْتَهْزِءُونَ ﴿2:14﴾  اللَّهُ يَسْتَهْزِئُ بِهِمْ وَيَمُدُّهُمْ فِي طُغْيَانِهِمْ يَعْمَهُونَ ﴿2:15﴾', '2015-09-10 10:55:11', 1, '(2:14) When they meet those who believe, they say, \"We, too, are believers\", but when they privily meet their evil geniuses, they say, \"Indeed we are with you: we are only mocking at these people\". (2:15) (Little do they realize that) Allah is mocking at them. He gives them rope enough, and they wander on and on blindly in their mischief and rebellion.'),
(59, 1, 'Q0001', '', 0, '2015-09-19 05:04:18', 'First sentence of Fatihah', 'ٱلۡحَمۡدُ لِلَّهِ رَبِّ ٱلۡعَـٰلَمِينَ', '2015-09-19 07:02:24', 1, '[All] praise is [due] to Allah , Lord of the worlds -');

-- --------------------------------------------------------

--
-- Table structure for table `sitesetup`
--

CREATE TABLE `sitesetup` (
  `ID` tinyint(1) NOT NULL,
  `SiteName` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `HomePageTitle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `MetaTag` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `MetaDescription` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `SiteBanner` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `GoogleAnalytics` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Logo` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `FavIcon` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SiteContact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SiteEmail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SiteFaceBook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SiteTwitter` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SiteGooglePlus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SiteYouTube` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sitesetup`
--

INSERT INTO `sitesetup` (`ID`, `SiteName`, `HomePageTitle`, `MetaTag`, `MetaDescription`, `SiteBanner`, `GoogleAnalytics`, `Logo`, `FavIcon`, `SiteContact`, `SiteEmail`, `SiteFaceBook`, `SiteTwitter`, `SiteGooglePlus`, `SiteYouTube`) VALUES
(1, 'Dorpan Group', 'Dorpan Group', 'Dorpan Group', 'Dorpan Group', 'assets/records/sitesetup/1_1.png', '<script type=\"text/javascript\">\n\n  var _gaq = _gaq || [];\n  _gaq.push([\'_setAccount\', \'UA-11406089-12\']);\n  _gaq.push([\'_trackPageview\']);\n\n  (function() {\n    var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;\n    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';\n    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);\n  })();\n\n</script>', 'assets/records/sitesetup/1_2.png', 'assets/records/sitesetup/1_3.png', '+880-1938852222,+880-1938852244', 'f.rahman@dorpangroup.com', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/'),
(2, 'Dorpan Properties Limited', 'Dorpan Properties Limited', 'Dorpan Properties Limited', 'Dorpan Properties Limited', 'assets/records/sitesetup/2_1.png', '<script type=\"text/javascript\">\n\n  var _gaq = _gaq || [];\n  _gaq.push([\'_setAccount\', \'UA-11406089-12\']);\n  _gaq.push([\'_trackPageview\']);\n\n  (function() {\n    var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;\n    ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';\n    var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);\n  })();\n\n</script>', 'assets/records/sitesetup/2_2.png', 'assets/records/sitesetup/2_3.png', '+880-1938852222,+880-1938852244', 'f.rahman@dorpangroup.com', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/', 'https://www.facebook.com/');

-- --------------------------------------------------------

--
-- Table structure for table `siteuser`
--

CREATE TABLE `siteuser` (
  `SiteuserID` int(11) NOT NULL,
  `Username` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `Password` text CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `UserLevel` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Pending',
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Name2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Caption` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Headline` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `Image` varchar(200) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'assets/images/blank_face.jpg',
  `Email` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL,
  `Country` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `BannerImage` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Designation` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'শিক্ষানবীশ',
  `TimeSpan` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'শিক্ষানবীশ ',
  `Date` datetime NOT NULL,
  `RecieveDate` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Emailnotification` varchar(5) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Yes',
  `Lastlogin` datetime NOT NULL,
  `IpAddress` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `IsLoggedin` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NotLoggedin',
  `activated` tinyint(1) DEFAULT NULL,
  `banned` tinyint(1) DEFAULT 1,
  `last_ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ban_reason` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new_password_key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `new_password_requested` datetime NOT NULL,
  `new_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `new_email_key` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Gender` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Religion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Profession` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `AcademicBackground` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Organization` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `siteuser`
--

INSERT INTO `siteuser` (`SiteuserID`, `Username`, `Password`, `UserLevel`, `Name`, `Name2`, `Caption`, `Headline`, `Image`, `Email`, `Country`, `BannerImage`, `Designation`, `TimeSpan`, `Date`, `RecieveDate`, `Emailnotification`, `Lastlogin`, `IpAddress`, `IsLoggedin`, `activated`, `banned`, `last_ip`, `last_login`, `created`, `modified`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `City`, `Address`, `Gender`, `Religion`, `Profession`, `AcademicBackground`, `Organization`) VALUES
(17, 'rabiul', '$2a$08$PzrLVu1DtH1x43yLPQjonOQkQginR9pUOhJJaMmuM5zIGqBRhgfD6', 'IsActive', 'রবিউল', '', NULL, NULL, 'assets/images/blank_face.jpg', 'rabiul@yahoo.com', 'বাংলাদেশ', NULL, NULL, '', '2014-04-09 20:41:21', '2014-04-09 20:41:21', 'Yes', '0000-00-00 00:00:00', '127.0.0.1', 'NotLoggedin', 1, 0, '::1', '2015-04-18 08:13:50', '2014-04-09 20:41:21', '2015-08-16 07:37:55', '', '', '0000-00-00 00:00:00', '', '1c2e3abfe47f053410136c7e2677e002', '', '', '', '', '', '', ''),
(39, 'lokman', '$2a$08$/xQfmDv3aylBI5NYv7qSguKREQRan7otXEitq3YK8sEEi.OE22WmW', 'IsActive', 'চ্যানেল আই', '', NULL, 'fgf fgf', 'assets/uploaded/lokman/39_1429098734_1.jpg', 'lokman.edu2@gmail.com', 'বাংলাদেশ1', 'assets/uploaded/lokman/55349d9a72273.png', 'কলম বিক্রম', '', '2014-08-27 12:32:53', '2014-08-27 12:32:53', 'Yes', '0000-00-00 00:00:00', '180.234.28.7', 'NotLoggedin', 1, 0, '180.234.211.150', '2015-08-15 08:56:40', '2014-08-27 12:32:53', '2015-08-15 08:56:40', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(41, 'swadin', '$2a$08$DuwWya3qqb2xK3UYzk11.uPdkY7iU8UNExYfHJtkw2jHZLOO7PQ5O', 'IsActive', 'রাবিউল ইসলাম', '', NULL, 'মানুষ afg', 'assets/uploaded/swadin/41_1426589116_1.png', 'rabiul.ruet04@gmail.com', 'বাংলাদেশ', 'assets/uploaded/swadin/41_1422931678_2.jpg', 'কলম সৈনিক', '', '2014-08-29 00:49:48', '2014-08-29 00:49:48', 'Yes', '0000-00-00 00:00:00', '203.202.242.234', 'NotLoggedin', 1, 0, '216.121.163.0', '2015-08-15 12:34:41', '2014-08-29 00:49:48', '2015-08-16 07:37:55', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(86, 'habibullah', '$2a$08$yOM5ZtqQiP0rd29rjRIYWO/odIBeIQGBKKEBDyEVRZB/Pa8fCZ7ym', 'Pending', 'Hasnat', 'Habib', NULL, NULL, 'assets/images/blank_face.jpg', 'habibullah@gmail.com', 'বাংলাদেশ', NULL, 'শিক্ষানবীশ', 'শিক্ষানবীশ ', '2015-08-15 09:38:29', '2015-08-15 09:38:29', 'Yes', '0000-00-00 00:00:00', '::1', 'NotLoggedin', 1, 0, '::1', '0000-00-00 00:00:00', '2015-08-15 09:38:29', '2015-08-16 07:37:55', '', '', '0000-00-00 00:00:00', '', '4b47174ab767bc816f8eedd33d77f6f0', '', '', '', '', '', '', ''),
(92, 'lokmanhossain2', '$2a$08$CD0UkFh52gLoAq9K6TN5hed9rgiZ9D6DZN..Tu9eqBcr//XtpVFzS', 'Pending', 'Lokman2', 'Hossain2', NULL, NULL, 'assets/images/blank_face.jpg', 'lok_manbd@yahoo.com', '', NULL, 'শিক্ষানবীশ', 'শিক্ষানবীশ ', '2015-08-15 08:55:23', '2015-08-15 08:55:23', 'Yes', '0000-00-00 00:00:00', '180.234.211.150', 'NotLoggedin', 1, 0, '180.234.211.150', '0000-00-00 00:00:00', '2015-08-15 08:55:23', '2015-08-16 07:37:55', '', '', '0000-00-00 00:00:00', '', 'bcf27e1fe081a46e06792ceca66b4c36', '', '', '', '', '', '', ''),
(93, '', NULL, 'Pending', 'Arif', 'Hossain', NULL, NULL, 'assets/images/blank_face.jpg', 'arif@gmail.com', 'India', NULL, 'শিক্ষানবীশ', 'শিক্ষানবীশ ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Yes', '0000-00-00 00:00:00', '', 'NotLoggedin', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-08-16 08:09:03', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(94, '', NULL, 'Pending', 'Arif', 'Hossain', NULL, NULL, 'assets/images/blank_face.jpg', 'arif3@gmail.com', 'India', NULL, 'শিক্ষানবীশ', 'শিক্ষানবীশ ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Yes', '0000-00-00 00:00:00', '', 'NotLoggedin', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-08-16 08:17:38', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(95, '', NULL, 'Pending', 'Arif', 'Hossain', NULL, NULL, 'assets/images/blank_face.jpg', 'arif2@gmail.com', 'India', NULL, 'শিক্ষানবীশ', 'শিক্ষানবীশ ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Yes', '0000-00-00 00:00:00', '', 'NotLoggedin', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-08-16 08:17:26', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', ''),
(96, '', NULL, 'Pending', 'Abdur', 'Razzak', NULL, NULL, 'assets/images/blank_face.jpg', 'arif32@gmail.com', '', NULL, 'শিক্ষানবীশ', 'শিক্ষানবীশ ', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Yes', '0000-00-00 00:00:00', '', 'NotLoggedin', 1, 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-08-17 15:28:26', '', '', '0000-00-00 00:00:00', '', '', '', '', 'Male', 'Islam', 'Engr.', 'CSE', 'HTGlobal'),
(129, 'rislam', '$2a$08$KUXRWYbKhVrKzhbCM5/CoO.eoj00iKLr8QEBxufkeAccTSH6lqo5a', 'IsActive', 'Razibul', 'Islam', NULL, NULL, 'assets/images/blank_face.jpg', 'razu_49@hotmail.com', '', NULL, 'শিক্ষানবীশ', 'শিক্ষানবীশ ', '2015-09-02 10:55:37', '2015-09-02 10:55:37', 'Yes', '0000-00-00 00:00:00', '216.121.163.0', 'NotLoggedin', 1, 0, '27.131.15.114', '2015-09-03 08:13:55', '2015-09-02 10:55:37', '2015-09-03 08:13:55', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', 'Engr.', '', ''),
(130, 'lokmanhossain', '$2a$08$KUXRWYbKhVrKzhbCM5/CoO.eoj00iKLr8QEBxufkeAccTSH6lqo5a', 'IsActive', 'Lokman', 'Hossain', NULL, NULL, 'assets/images/blank_face.jpg', 'lokman.edu@gmail.com', '', NULL, 'শিক্ষানবীশ', 'শিক্ষানবীশ ', '2015-09-02 11:12:43', '2015-09-02 11:12:43', 'Yes', '0000-00-00 00:00:00', '27.131.15.114', 'NotLoggedin', 1, 0, '27.131.15.114', '2015-09-03 08:13:35', '2015-09-02 11:12:43', '2015-09-03 08:13:35', '', '', '0000-00-00 00:00:00', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE `tv` (
  `TVID` int(11) NOT NULL,
  `TVName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `Priority` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tv`
--

INSERT INTO `tv` (`TVID`, `TVName`, `Image`, `IsActive`, `Priority`) VALUES
(1, 'Anam', '', 0, 1),
(2, 'Taher', '', 0, 2),
(3, 'Mazhar', 'records/writer/3_1.jpg', 1, 9),
(4, 'ND', 'records/tv/4_1.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin NOT NULL,
  `activated` tinyint(1) NOT NULL DEFAULT 1,
  `banned` tinyint(1) NOT NULL DEFAULT 1,
  `ban_reason` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `new_password_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `new_password_requested` datetime DEFAULT NULL,
  `new_email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `new_email_key` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `userlevel` int(11) NOT NULL DEFAULT 5,
  `image` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'images/blank_face.jpg',
  `Thumbimage` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT 'images/blank_face.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `activated`, `banned`, `ban_reason`, `new_password_key`, `new_password_requested`, `new_email`, `new_email_key`, `last_ip`, `last_login`, `created`, `modified`, `userlevel`, `image`, `Thumbimage`) VALUES
(1, 'developerbd', '$2a$08$Nk1Lgjo762POt36yn8/heuyVNdiBW/NsMj8v6x5WRCazDOPglLJoK', 'lokman.edu@gmail.com', 1, 0, NULL, NULL, NULL, NULL, 'NULL', '::1', '2021-03-01 07:13:20', '2013-07-26 08:46:39', '2021-03-01 06:13:20', 9, '0', 'assets/img/blank_face.jpg'),
(3, 'niazmahmud', '$2y$12$uZS5pwnsZlC4um3z.kC5BO4JD8pNiJLqEMQG6pMPUvih.bW4O5HAe', 'niaz@gmail.com', 1, 0, NULL, NULL, NULL, NULL, NULL, '::1', '2021-02-10 10:53:42', '0000-00-00 00:00:00', '2021-02-10 09:53:42', 5, 'images/blank_face.jpg', 'images/blank_face.jpg'),
(37, 'Haripada', '$2a$08$hM0THZDLIVVe4D92FmVS4euvgCAQnQVECxcHbPbhDzFqLtCTVz1xK', 'das_haripada@yahoo.com', 1, 1, NULL, 'eac38dd00082240d4d0d3645ffe50503', '2015-05-30 01:53:54', NULL, NULL, '103.237.36.243', '0000-00-00 00:00:00', '2015-05-28 03:04:02', '2015-05-30 06:53:54', 5, 'images/blank_face.jpg', 'images/blank_face.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usersitelogin`
--

CREATE TABLE `usersitelogin` (
  `UsersiteloginID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LoginTime` datetime NOT NULL,
  `IpAddress` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `IsUser` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `SiteuserID` int(11) NOT NULL DEFAULT 0,
  `Username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `UserAgent` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IsMobile` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usersitelogin`
--

INSERT INTO `usersitelogin` (`UsersiteloginID`, `LoginTime`, `IpAddress`, `IsUser`, `SiteuserID`, `Username`, `Name`, `UserAgent`, `IsMobile`, `Image`) VALUES
('1291441268035264', '2015-09-03 08:13:55', '27.131.15.114', 'Yes', 129, 'rislam', 'Razibul', 'Chrome', 'No', 'assets/images/blank_face.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_autologin`
--

CREATE TABLE `user_autologin` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `user_agent` varchar(150) COLLATE utf8_bin NOT NULL,
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_autologin`
--

INSERT INTO `user_autologin` (`key_id`, `user_id`, `user_agent`, `last_ip`, `last_login`) VALUES
('2389c19794ac636c8c23995423c5d2af', 1, 'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36', '180.234.211.146', '2014-06-02 04:16:16'),
('3991c18b70975651411bd7e31bfe41ee', 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.137 Safari/537.36', '180.234.39.144', '2014-05-19 23:33:14'),
('645a25237abca22eb1488df142c160ad', 1, 'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1712.4 Safari/537.36', '180.234.59.41', '2014-02-12 08:52:45'),
('715812dfb75d731449a9beedbbba9f00', 1, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1700.107 Safari/537.36', '180.234.67.165', '2014-02-12 11:02:31'),
('88e8893b2c65f8d38625f158c645ba2f', 25, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/41.0.2272.101 Safari/537.36', '180.234.211.150', '2015-03-23 16:21:37'),
('9fe6e2ecd805ab7b88d123ad807be26a', 24, 'Mozilla/5.0 (Windows NT 6.1; rv:35.0) Gecko/20100101 Firefox/35.0', '180.234.54.180', '2015-02-15 14:49:18'),
('a9c1643608fb0913351ec68e1f6361a2', 24, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2300.2 Safari/537.36', '180.234.89.207', '2015-02-16 14:13:01'),
('b043a3cc7fe820ed867338a75d79e881', 24, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/43.0.2342.2 Safari/537.36', '180.234.211.150', '2015-03-29 20:47:51'),
('b793335ebb4399966ccdc2a96bbd73a6', 1, 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/45.0.2454.85 Safari/537.36', '216.121.163.0', '2015-09-10 10:30:23'),
('e5266811d990cdfee61c2c9d2411590f', 22, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36', '103.230.104.25', '2015-02-21 04:14:56'),
('ed1faa71f23c99c593702a01f0b27c51', 1, 'Mozilla/5.0 (Windows NT 5.1; rv:30.0) Gecko/20100101 Firefox/30.0', '180.234.211.146', '2014-06-01 00:14:52');

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `country` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `website` varchar(255) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_id`, `country`, `website`) VALUES
(1, 22, NULL, NULL),
(2, 23, NULL, NULL),
(3, 24, NULL, NULL),
(4, 25, NULL, NULL),
(5, 26, NULL, NULL),
(6, 27, NULL, NULL),
(7, 28, NULL, NULL),
(8, 29, NULL, NULL),
(9, 30, NULL, NULL),
(10, 31, NULL, NULL),
(11, 32, NULL, NULL),
(12, 33, NULL, NULL),
(13, 34, NULL, NULL),
(14, 35, NULL, NULL),
(15, 35, NULL, NULL),
(16, 36, NULL, NULL),
(17, 37, NULL, NULL),
(18, 125, NULL, NULL),
(19, 128, NULL, NULL),
(20, 129, NULL, NULL),
(21, 130, NULL, NULL),
(22, 131, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `VideoID` int(11) NOT NULL,
  `VideoName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `Priority` int(11) NOT NULL,
  `Detail` text COLLATE utf8_unicode_ci NOT NULL,
  `EmbeddedCode` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`VideoID`, `VideoName`, `IsActive`, `Priority`, `Detail`, `EmbeddedCode`) VALUES
(10, 'DORPAN Corporation Limited', 1, 5, '<p>psum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>\r\n<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper .</p>', '<iframe width=\"500\" height=\"350\" src=\"https://www.youtube.com/embed/u_orGF2zM5o\" frameborder=\"0\" allowfullscreen></iframe>'),
(11, 'ou have some form errors. Please check below.', 1, 232, '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam,</p>\r\n<p>quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis</p>', '<iframe width=\"500\" height=\"350\" src=\"https://www.youtube.com/embed/juIJGBxj-4w\" frameborder=\"0\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `writer`
--

CREATE TABLE `writer` (
  `WriterID` int(11) NOT NULL,
  `WriterName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `FaceBook` text COLLATE utf8_unicode_ci NOT NULL,
  `Twitter` text COLLATE utf8_unicode_ci NOT NULL,
  `GooglePlus` text COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Category` tinyint(1) NOT NULL,
  `Desigantion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IsActive` tinyint(1) NOT NULL,
  `Priority` int(11) NOT NULL,
  `Detail` text COLLATE utf8_unicode_ci NOT NULL,
  `ContactNumber` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `writer`
--

INSERT INTO `writer` (`WriterID`, `WriterName`, `Email`, `FaceBook`, `Twitter`, `GooglePlus`, `Image`, `Category`, `Desigantion`, `IsActive`, `Priority`, `Detail`, `ContactNumber`) VALUES
(2, 'Engr. M Sazzad Hossain', 'md.dorpan@gmail.com', '##', '##', '##', 'assets/records/writer/201512/2_118.jpg', 3, 'Director', 1, 3, '<p>M.Sc., B.Sc. (Chemical Engineering Dept.), Bangladesh University of Engineering &amp; Technology (BUET), Life Fellow (IEB).<br /><strong>Managing Director</strong> <br />JIPS Chemical Industries Ltd. <br />After completion of graduation from BUET in 2003 he introduces himself as a business man. He started his business career with chemical industries and thereafter with real estate business.</p>', '01938-852201'),
(32, 'Engr. Didarul Islam', 'mdidar_74@yahoo.com', '', '', '', 'assets/records/writer/201512/32_129.jpg', 3, 'Director', 1, 10, '<p>B.Sc in Machanical Engerring</p>\n<p>BUET</p>', '01711465746'),
(1, 'Mrs. Umme Kulsum', 'u.kulsum@dorpangroup.com', 'http://stackoverflow.com/questions/2631439/codeigniter-accessing-config-variable-in-view', 'http://stackoverflow.com/tags', 'http://stackoverflow.com/help/badges', 'assets/records/writer/201512/1_149.jpg', 1, 'Chairman', 1, 1, '<p>Experienced in civil engineering design &amp; construction and development of new ideas in business</p>', '01938-852200'),
(31, 'Md. Azharul Islam', 'a.islam@dorpangroup.com', '', '', '', 'assets/records/writer/201512/31_12.jpg', 3, 'Director', 1, 5, '<p>MA (DU).<br />After completion of postgraduate degree he engage himself with family business. Last one decade he proves his efficiency in the field of social business &amp; also as a real estate business man.</p>', '019 788 522 10'),
(3, 'Shah Md.Faysal Bin Rahman', 'f.rahman2020@gmail.com', '##', '##', '##', 'assets/records/writer/201811/3_12.jpg', 2, 'Managing Director(Acting)', 1, 2, '<p>B.Sc. Engr. (CIVIL), BUET.</p>\n<p><strong>Acting Managing Director</strong><br />Dorpan Group</p>\n<p><strong>Managing Director</strong><br />Design Den Ltd.<br /><strong>Secretary</strong><br />Rangpur Progressive Foundation<br /><strong>Member</strong><br />Institute of Engineers Bangladesh,<br />Bangladesh Society of Geotechnical Engineers,<br />Development of Engineering Education Foundation.<br />Expert in steel building construction and having experience in research on urban township planning.</p>', '01938-852202'),
(27, 'Prof. DR. Md. Habibur Rahman', 'dr.md.habibur.rahman1@gmail.com', '', '', '', 'assets/records/writer/201512/27_144.jpg', 3, 'Director', 1, 4, '<p>MPH (Hospital Management), NIPSOM; M.Phil. (Anatomy) BSMMU; MBBS (MMC) <br /><strong>Professor</strong> <br />Dept. of Anatomy<br />Ibn Sina Medical College, Dhaka.</p>', '01914-857644 '),
(28, 'DR. Mohammad Kamaruzzaman ', 'mkzamandu@gmail.com', '', '', '', 'assets/records/writer/201512/28_164.jpg', 3, 'Director', 1, 5, '<p>B.Sc. (Hon&rsquo;s), M.Sc., University of Dhaka.<br />PhD. Dept. of Applied Chemistry &amp; Biochemistry, Kumamoto University, Japan. <br /><strong>Associate Professor</strong> <br />Dept. of Applied Chemistry &amp; Chemical Engineering, University of Dhaka.</p>', '01711 582759 '),
(29, 'Mohammad Muinul Haque Tanveer', 'tanveer4094@gmail.com', '', '', '', 'assets/records/writer/201512/29_145.jpg', 3, 'Director', 1, 6, '<p>Bachelor of Architecture (BUET) <br /><strong>Director</strong> <br />ACUBE ATEILER, Home of Architectural &amp; Interior Design.</p>', '01819-288942 '),
(30, 'Mohammad  Ismail  ', 'm.ismail@dorpangroup.com', '', '', '', 'assets/records/writer/201512/30_150.jpg', 0, 'Director', 1, 7, '<p>PhD (Continuing), University of Cambridge (UK), M.Sc. &amp; B.Sc. (University of Dhaka) <br /><strong>Assistant Professor</strong> <br />Department of Applied Chemistry and Chemical Engineering, University of Dhaka. <br />Have experience of different creative businesses over one decade. A dedicated business thinker and now looks after the company&rsquo;s business in UK &amp; Europe.</p>', '01553845400'),
(26, 'Md. Shariful Islam', '', '', '', '', 'assets/records/writer/201512/26_160.jpg', 3, 'Acting Director (Accounts & Finance)', 1, 3, '', '019 388 522 09'),
(33, 'DR. Md. Noor-Ul- Momen Talukder', 'dnmtalukdar@gmail.com', '', '', '', 'assets/records/writer/201512/33_127.jpg', 3, 'Director', 1, 4, '<p>MBBS (DU), Diploma in Anesthesia <br /><strong>Anesthesiologist</strong> <br />Centre for Woman &amp; Child Health, Ashulia, Dhaka.</p>', '01915-629905 '),
(34, 'Engr. Md. Rejaul Karim', 'engr.rejaul@gmail.com ', '', '', '', 'assets/records/writer/201512/34_190.jpg', 3, '', 1, 12, '<p>B.Sc. Engr., Mechanical, BUET <br /><strong>MANAGING DIRECTOR</strong><br />HVAC Engineering Ltd. <br />He is one of the top most professionals in the field of HVAC in Bangladesh.</p>', '01552-394088 '),
(35, 'DR. Mohammad  Zoynal Abedin', 'zoynal91@yahoo.com', '', '', '', 'assets/records/writer/201512/35_112.jpg', 3, '', 1, 13, '<p>B.Sc. Engg. (BUET), M.Sc. Engg. (BUET), Ph.D. (Japan) <br />(Field of Specialization: Heat Transfer, Thermo-Fluid Mechanics, Refrigeration and Air-Conditioning, CFD, Gas Dynamics)</p>', '01816-226077'),
(36, 'G.M. Khaled Ahmed', 'gmkhaled31@yahoo.com', '', '', '', 'assets/records/writer/201811/36_19.jpg', 3, '', 1, 14, '<p>BA (Hon`s), MA (DU)<br /><strong>Chairman</strong><br />Sensor International<br /><strong>Proprietor</strong><br />E.K. Business Line</p>', '01741-887300'),
(37, 'Mohd.Mubinul Islam', 'mubinnub@gmail.com', '', '', '', 'assets/records/writer/201811/37_158.jpg', 0, 'Director', 1, 6, '<p>M Phil.(Fellow),MSS,BSS(Hons) International Relation,DU</p>\n<p><strong>Life Member</strong>,Dhaka University Register Graguates, Salimullah Muslim Hall Alumnai Association,International Relations Dep\'. Alumni Association,DU.</p>\n<p><strong>Former Coordinatior</strong>,Northern University Bangladesh, Rajshai&amp;Khulna Campus</p>\n<p><strong>Deputy Regista</strong>r,Southeast University,Banani,Dhaka.</p>', '01938853308');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `captcha`
--
ALTER TABLE `captcha`
  ADD PRIMARY KEY (`captcha_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`);

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`session_id`);

--
-- Indexes for table `commentsnews`
--
ALTER TABLE `commentsnews`
  ADD PRIMARY KEY (`CommentsnewsID`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`CountryID`);

--
-- Indexes for table `cronjob`
--
ALTER TABLE `cronjob`
  ADD PRIMARY KEY (`CronjobID`);

--
-- Indexes for table `division`
--
ALTER TABLE `division`
  ADD PRIMARY KEY (`DivisionID`);

--
-- Indexes for table `emailsend`
--
ALTER TABLE `emailsend`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`EmployeeID`),
  ADD KEY `LastName` (`LastName`),
  ADD KEY `PostalCode` (`PostalCode`),
  ADD KEY `FK_Employees_Employees` (`ReportsTo`);

--
-- Indexes for table `enterprise`
--
ALTER TABLE `enterprise`
  ADD PRIMARY KEY (`EnterpriseID`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`LinksID`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`MenuID`);

--
-- Indexes for table `menusection`
--
ALTER TABLE `menusection`
  ADD PRIMARY KEY (`MenuSectionID`);

--
-- Indexes for table `myrecord`
--
ALTER TABLE `myrecord`
  ADD PRIMARY KEY (`RecordID`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`NewsID`);

--
-- Indexes for table `newsdetail`
--
ALTER TABLE `newsdetail`
  ADD PRIMARY KEY (`NewsDetailID`),
  ADD UNIQUE KEY `NewsID` (`NewsID`);

--
-- Indexes for table `newsinfo`
--
ALTER TABLE `newsinfo`
  ADD PRIMARY KEY (`NewsInfoID`),
  ADD UNIQUE KEY `NewsID` (`NewsID`);

--
-- Indexes for table `newspaper`
--
ALTER TABLE `newspaper`
  ADD PRIMARY KEY (`NewsPaperID`);

--
-- Indexes for table `newssearch`
--
ALTER TABLE `newssearch`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `onlinepoll`
--
ALTER TABLE `onlinepoll`
  ADD PRIMARY KEY (`OnlinepollID`);

--
-- Indexes for table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`PageID`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`PartnerID`);

--
-- Indexes for table `pollip`
--
ALTER TABLE `pollip`
  ADD PRIMARY KEY (`PollIPID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ProjectID`);

--
-- Indexes for table `quranhadith`
--
ALTER TABLE `quranhadith`
  ADD PRIMARY KEY (`QuranHadithID`);

--
-- Indexes for table `sitesetup`
--
ALTER TABLE `sitesetup`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `siteuser`
--
ALTER TABLE `siteuser`
  ADD PRIMARY KEY (`SiteuserID`);

--
-- Indexes for table `tv`
--
ALTER TABLE `tv`
  ADD PRIMARY KEY (`TVID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersitelogin`
--
ALTER TABLE `usersitelogin`
  ADD PRIMARY KEY (`UsersiteloginID`);

--
-- Indexes for table `user_autologin`
--
ALTER TABLE `user_autologin`
  ADD PRIMARY KEY (`key_id`,`user_id`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`VideoID`);

--
-- Indexes for table `writer`
--
ALTER TABLE `writer`
  ADD PRIMARY KEY (`WriterID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `captcha`
--
ALTER TABLE `captcha`
  MODIFY `captcha_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=290;

--
-- AUTO_INCREMENT for table `commentsnews`
--
ALTER TABLE `commentsnews`
  MODIFY `CommentsnewsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `CountryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `cronjob`
--
ALTER TABLE `cronjob`
  MODIFY `CronjobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `division`
--
ALTER TABLE `division`
  MODIFY `DivisionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `emailsend`
--
ALTER TABLE `emailsend`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `EmployeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `enterprise`
--
ALTER TABLE `enterprise`
  MODIFY `EnterpriseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `LinksID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `MenuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `menusection`
--
ALTER TABLE `menusection`
  MODIFY `MenuSectionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `myrecord`
--
ALTER TABLE `myrecord`
  MODIFY `RecordID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `NewsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `newsdetail`
--
ALTER TABLE `newsdetail`
  MODIFY `NewsDetailID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newsinfo`
--
ALTER TABLE `newsinfo`
  MODIFY `NewsInfoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `newspaper`
--
ALTER TABLE `newspaper`
  MODIFY `NewsPaperID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newssearch`
--
ALTER TABLE `newssearch`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `onlinepoll`
--
ALTER TABLE `onlinepoll`
  MODIFY `OnlinepollID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `page`
--
ALTER TABLE `page`
  MODIFY `PageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `PartnerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pollip`
--
ALTER TABLE `pollip`
  MODIFY `PollIPID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ProjectID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quranhadith`
--
ALTER TABLE `quranhadith`
  MODIFY `QuranHadithID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `sitesetup`
--
ALTER TABLE `sitesetup`
  MODIFY `ID` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siteuser`
--
ALTER TABLE `siteuser`
  MODIFY `SiteuserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `tv`
--
ALTER TABLE `tv`
  MODIFY `TVID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `VideoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `writer`
--
ALTER TABLE `writer`
  MODIFY `WriterID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
