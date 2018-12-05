-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 13, 2018 at 11:56 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `wblearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `ORGANIZATION_ID` varchar(25) NOT NULL,
  `LWIA_CD` varchar(25) NOT NULL,
  `WIA_AGCY_CD` varchar(15) NOT NULL,
  `AGCY_NAM` text NOT NULL,
  `AGCY_ABBREV` text NOT NULL,
  `FEIN` varchar(25) NOT NULL,
  `SECTOR_TYPE` varchar(25) NOT NULL,
  `AGCY_ADRS` varchar(25) NOT NULL,
  `AGCY_ADRS_2` varchar(25) NOT NULL,
  `AGCY_CITY` text NOT NULL,
  `AGCY_ST` text NOT NULL,
  `ZIP` int(25) NOT NULL,
  `ZIP_4` int(25) NOT NULL,
  `CON_NAM` text NOT NULL,
  `CON_TITLE` varchar(25) NOT NULL,
  `PH` int(25) NOT NULL,
  `OPR_ID` int(25) NOT NULL,
  `ENTRY_DT` date NOT NULL,
  `DEACTIVATION_DATE` date DEFAULT NULL,
  `CREATE_DT` date NOT NULL,
  `CREATED_BY` varchar(25) NOT NULL,
  `LAST_UPDATE_DATE` date NOT NULL,
  `LAST_UPDATED_BY` varchar(25) NOT NULL,
  `ORG_TYPE` varchar(25) NOT NULL,
  `PARENT_ORG_ID` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agencies`
--

INSERT INTO `agencies` (`ORGANIZATION_ID`, `LWIA_CD`, `WIA_AGCY_CD`, `AGCY_NAM`, `AGCY_ABBREV`, `FEIN`, `SECTOR_TYPE`, `AGCY_ADRS`, `AGCY_ADRS_2`, `AGCY_CITY`, `AGCY_ST`, `ZIP`, `ZIP_4`, `CON_NAM`, `CON_TITLE`, `PH`, `OPR_ID`, `ENTRY_DT`, `DEACTIVATION_DATE`, `CREATE_DT`, `CREATED_BY`, `LAST_UPDATE_DATE`, `LAST_UPDATED_BY`, `ORG_TYPE`, `PARENT_ORG_ID`) VALUES
('1001', 'ver', 'YC01', 'Glendale Youth Alliance', 'ver_YC01', '', '', '1255 S. Central Ave.', '', 'Glendale ', 'CA', 91204, 0, '', '', 818, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5001),
('1002', 'fet', 'YC01', 'Foothill Employment and Training Connection', 'fet_YC01', '', '', '1207 E. Green Street', '', 'Pasadena', 'CA', 91106, 0, '', '', 626, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5002),
('1003', 'lao', 'YC01', 'LACOE - Antelope Valley Youth Center', 'lao_YC01', '', '', '37230 37th St.', '', 'East Palmdale', 'CA', 93550, 0, '', '', 661, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5003),
('1004', 'lao', 'YC02', 'LACOE - Indian Hill Youth Center', 'lao_YC02', '', '', '1460 E. Holt Ave.', '', 'Pomona', 'CA', 91766, 0, '', '', 909, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5003),
('1005', 'lao', 'YC03', 'LACOE - South Central', 'lao_YC03', '', '', '2701 E. Firestone Blvd.', '', 'South Gate', 'CA', 90280, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5003),
('1006', 'lao', 'YC04', 'AYE of Catholic Charities of Los Angeles', 'lao_YC04', '', '', '3250 Wilshire Blvd.', 'Suite 1010', 'Los Angeles', 'CA', 90010, 0, '', '', 213, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5004),
('1007', 'lao', 'YC05', 'AYE - Antelope Valley', 'lao_YC05', '', '', '1420 West Avenue I', '', 'Lancaster', 'CA', 93534, 0, '', '', 661, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5004),
('1008', 'lao', 'YC06', 'AYE - Arbor Florence Firestone', 'lao_YC06', '', '', '1816 E. Firestone Blvd.', '', 'Los Angeles', 'CA', 90001, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5004),
('1009', 'lao', 'YC07', 'AYE - East Los Angeles Worksource Center', 'lao_YC07', '', '', '5301 Whittier Blvd.', '', 'Los Angeles', 'CA', 90022, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5004),
('1010', 'lao', 'YC08', 'AYE - Southeast L.A.-Crenshaw WorkSource Center', 'lao_YC08', '', '', '3965 S. Vermont Avenue', '', 'Los Angeles', 'CA', 90037, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5004),
('1011', 'lao', 'YC09', 'Asian American Drug Abuse Program Inc. (AADAP)', 'lao_YC09', '', '', '1088 S. La Brea Ave.', '', 'Los Angeles', 'CA', 90043, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5005),
('1012', 'lao', 'YC10', 'Communities in Schools', 'lao_YC10', '', '', '17625 South Central Ave.', 'Unit E', 'Carson', 'CA', 90746, 0, '', '', 310, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5006),
('1013', 'lao', 'YC11', 'Compton CareerLink', 'lao_YC11', '', '', '700 North Bullis Road', '', 'Compton', 'CA', 90221, 0, '', '', 310, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5007),
('1014', 'lao', 'YC12', 'Door of Hope', 'lao_YC12', '', '', '1414 South Atlantic Blvd.', '', 'Los Angeles', 'CA', 90022, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5008),
('1015', 'lao', 'YC13', 'Goodwill Pomona', 'lao_YC13', '', '', '264 E. Monterey', '', 'Pomona', 'CA', 91767, 0, '', '', 909, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5009),
('1016', 'lao', 'YC14', 'Goodwill El Monte', 'lao_YC14', '', '', '11635 Valley Blvd.', 'Unit G2', 'El Monte', 'CA', 91732, 0, '', '', 626, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5009),
('1017', 'lao', 'YC15', 'Hub Cities WorkSource Center', 'lao_YC15', '', '', '2677 Zoe Avenue', '2nd Floor', 'Huntington Park', 'CA', 90255, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5010),
('1018', 'lao', 'YC16', 'JVS/West Hollywood WorkSource Center', 'lao_YC16', '', '', '5757 Wilshire Blvd.', 'Promenade Three', 'Los Angeles', 'CA', 90036, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5011),
('1019', 'lao', 'YC17', 'JVS - Marina Del Rey West LA WorkSource Center Office', 'lao_YC17', '', '', '13160 Mindanao Way', 'Suite 240', 'Marina Del Rey', 'CA', 90292, 0, '', '', 310, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5011),
('1020', 'lao', 'YC18', 'LA Works WorkSource Center', 'lao_YC18', '', '', '5200 Irwindale Ave.', 'Suite 130', 'Irwindale', 'CA', 91706, 0, '', '', 626, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5012),
('1021', 'lao', 'YC19', 'Maravilla Foundation', 'lao_YC19', '', '', '5729 Union Pacific Ave.', '', 'Commerce', 'CA', 90022, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5013),
('1022', 'lao', 'YC20', 'Mexican American Opportunities Found. (MAOF)', 'lao_YC20', '', '', '972 South Goodrich Blvd.', '', 'Commerce', 'CA', 90022, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5014),
('1023', 'lao', 'YC21', 'SASSFA WorkSource Center', 'lao_YC21', '', '', '10400 Pioneer Blvd.', 'Suite 9', 'Santa Fe Springs', 'CA', 90670, 0, '', '', 562, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5015),
('1024', 'lao', 'YC22', 'SASSFA- Paramount Employment and Training Center', 'lao_YC22', '', '', '15538 Colorado Avenue', '', 'Paramount', 'CA', 90723, 0, '', '', 562, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5015),
('1025', 'lao', 'YC23', 'Special Services for Groups (SSG)', 'lao_YC23', '', '', '19401 South Vermont Ave.', 'Suite A-200', 'Los Angeles', 'CA', 90059, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5016),
('1026', 'lao', 'YC24', 'Watts Labor Community Action Center (WLCAC)', 'lao_YC24', '', '', '958 East 108 Street', '', 'Los Angeles', 'CA', 90059, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5017),
('1027', 'lao', 'YC25', 'Career Partners WorkSource Center', 'lao_YC25', '', '', '3505 North Hart Avenue', '', 'Rosemead', 'CA', 91770, 0, '', '', 626, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5018),
('1028', 'lao', 'YC26', 'Career Partners - City of Bell - City Hall Complex', 'lao_YC26', '', '', '6330 Pine St.', '', 'Bell', 'CA', 90201, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5018),
('1030', 'lgb', 'YC01', 'Pacific Gateway', 'lgb_YC01', '', '', '', '', '', '', 0, 0, '', '', 866, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5019),
('1031', 'sel', 'YC01', 'ABC UNIFIED SCHOOL DISTRICT', 'sel_YC01', '', '', '16700 NORWALK BLVD', '', 'CERRITOS', 'CA', 90703, 0, '', '', 562, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5020),
('1032', 'sel', 'YC02', 'BELLFLOWER UNIFIED SCHOOL DISTRICT', 'sel_YC02', '', '', '16703 CLARK AVE', '', 'BELLFLOWER', 'CA', 90706, 0, '', '', 562, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5021),
('1033', 'sel', 'YC03', 'CERRITOS COLLEGE', 'sel_YC03', '', '', '11110 ALONDRA BLVD', '', 'NORWALK', 'CA', 90650, 0, '', '', 562, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5022),
('1034', 'sel', 'YC04', 'NORWALK LA MIRADA UNIFIED SCHOOL DIST.', 'sel_YC04', '', '', '12820 PIONEER BLVD', '', 'NORWALK', 'CA', 90650, 0, '', '', 562, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5023),
('1035', 'sby', 'YC01', 'South Bay One-Stop Business & Career Center - Gardena', 'sby_YC01', '', '', '16801 S. Western Ave.', 'Suite A', 'Gardena', 'CA', 90247, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5024),
('1036', 'sby', 'YC02', 'South Bay One-Stop Business & Career Center - Carson', 'sby_YC02', '', '', 'One Civic Plaza', 'Suite 500', 'Carson', 'CA', 90745, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5024),
('1037', 'sby', 'YC03', 'South Bay One-Stop Business & Career Center - Beach Cities', 'sby_YC03', '', '', '320 Knob Hill', '', 'Redondo Beach', 'CA', 90277, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5024),
('1038', 'sby', 'YC04', 'South Bay One-Stop Business & Career Center - Inglewood', 'sby_YC04', '', '', '110 South La Brea Avenue', '4th Floor Suite 415', 'Inglewood', 'CA', 90301, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5024),
('1039', 'sby', 'YC05', 'South Bay One Stop Business & Career Center - Hawthorne High School Parent Center', 'sby_YC05', '', '', '4859 W. El Segundo Blvd', '', 'Hawthorne', 'CA', 90250, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5024),
('1040', 'lai', 'YC01', 'LAUSD - Jordan High School', 'lai_YC01', '', '', '2265 E. 103rd Street', '', 'Los Angeles ', 'CA', 90002, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1041', 'lai', 'YC02', 'LAUSD - Weed and Seed', 'lai_YC02', '', '', '1527 E. 103rd Street', '', 'Los Angeles ', 'CA', 90002, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1042', 'lai', 'YC03', 'LAUSD - Maxine Waters Employment Prep', 'lai_YC03', '', '', '10925 South Central Ave', '', 'Los Angeles ', 'CA', 90059, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1043', 'lai', 'YC04', 'LAUSD - Locke H.S.', 'lai_YC04', '', '', '325 E. 111th Street', '', 'Los Angeles ', 'CA', 90061, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1044', 'lai', 'YC05', 'LAUSD - Crenshaw H.S.', 'lai_YC05', '', '', '5010 11th Ave.', '', 'Los Angeles ', 'CA', 90043, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'AGENCY', 5025),
('1045', 'lai', 'YC06', 'LAUSD - Dorsey H.S.', 'lai_YC06', '', '', '3537 Farmdale Ave.', '', 'Los Angeles ', 'CA', 90016, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1046', 'lai', 'YC07', 'LAUSD - Harbor OneSource', 'lai_YC07', '', '', '1111 Figueroa Place', '', 'Wilmington', 'CA', 90744, 0, '', '', 310, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1047', 'lai', 'YC08', 'LAUSD - Banning High School', 'lai_YC08', '', '', '1527 Lakme Avenue', '', 'Wilmington', 'CA', 90744, 0, '', '', 310, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1048', 'lai', 'YC09', 'LAUSD - Carson High School', 'lai_YC09', '', '', '22328 S Main Street', '', 'Carson', 'CA', 90745, 0, '', '', 310, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1049', 'lai', 'YC10', 'LAUSD - Narbonne High School', 'lai_YC10', '', '', '24300 S Western Avenue', '', 'Harbor City', 'CA', 90710, 0, '', '', 310, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1050', 'lai', 'YC11', 'LAUSD - San Pedro High School', 'lai_YC11', '', '', '1001 W 15th Street', '', 'San Pedro', 'CA', 90731, 0, '', '', 310, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1051', 'lai', 'YC12', 'LAUSD - Manual Arts', 'lai_YC12', '', '', '4131 S. Vermont Ave.', '', 'Los Angeles ', 'CA', 90037, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1052', 'lai', 'YC13', 'LAUSD - USC Trio Program', 'lai_YC13', '', '', '3716 S. Hope Street', 'Suite 262', 'Los Angeles ', 'CA', 90089, 0, '', '', 213, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1053', 'lai', 'YC14', 'LAUSD - Miguel Contreas Ed.Complex', 'lai_YC14', '', '', '322 Lucas Avenue', '', 'Los Angeles ', 'CA', 90017, 0, '', '', 213, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1054', 'lai', 'YC15', 'LAUSD - LAUSD Headquarters', 'lai_YC15', '', '', '333 S. Beaudry', '25th floor', 'Los Angeles ', 'CA', 90017, 0, '', '', 213, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1055', 'lai', 'YC16', 'LAUSD - Lincoln High School', 'lai_YC16', '', '', '3501 N. Broadway', '', 'Los Angeles ', 'CA', 90031, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1056', 'lai', 'YC17', 'LAUSD - Wilson High School', 'lai_YC17', '', '', '4500 Multnomah Street', '', 'Los Angeles ', 'CA', 90032, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1057', 'lai', 'YC18', 'LAUSD - Roosevelt High School', 'lai_YC18', '', '', '456 S. Mathews Street', '', 'Los Angeles ', 'CA', 90033, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1058', 'lai', 'YC19', 'LAUSD - Polytechnic High School', 'lai_YC19', '', '', '12431 Roscoe Ave.', '', 'Los Angeles ', 'CA', 91352, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1059', 'lai', 'YC20', 'LAUSD - Chatsworth High School', 'lai_YC20', '', '', '10027 Lurline Ave.', '', 'Los Angeles ', 'CA', 91311, 0, '', '', 818, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1060', 'lai', 'YC21', 'LAUSD - Cleveland High School', 'lai_YC21', '', '', '8140 Vanalden', '', 'Los Angeles ', 'CA', 91355, 0, '', '', 818, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1061', 'lai', 'YC22', 'LAUSD - North Hollywood H.S.', 'lai_YC22', '', '', '5231 Colfax Ave.', '', 'Los Angeles ', 'CA', 91601, 0, '', '', 818, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1062', 'lai', 'YC23', 'LAUSD - Reseda High School', 'lai_YC23', '', '', '18230 Kittridge Ave.', '', 'Los Angeles ', 'CA', 91335, 0, '', '', 818, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5025),
('1063', 'lai', 'YC24', 'LACCD - Harbor College-Job Placement Center OV1 Classroom A', 'lai_YC24', '', '', '1111 Figueroa Place', 'OV1 Classroom A', 'Wilmington', 'CA', 90744, 0, '', '', 310, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5026),
('1064', 'lai', 'YC25', 'LACCD - LA City College-M Corsos Office Unit 224', 'lai_YC25', '', '', '3020 Wilshire Blvd', '2nd floor', 'Los Angeles', 'CA', 90010, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5026),
('1065', 'lai', 'YC26', 'LACCD - Southwest College-SSB Career Center', 'lai_YC26', '', '', '1600 West Imperial Highwa', 'SSB Career Center Room 22', 'Los Angeles', 'CA', 90047, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5026),
('1066', 'lai', 'YC27', 'LACCD - East LA College', 'lai_YC27', '', '', '1301 Avenida Cesar Chavez', 'Building E7 Lobby', 'Monterey Park', 'CA', 91754, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5026),
('1067', 'lai', 'YC28', 'LACCD - LA Trade Tech-Bridges to Success Center', 'lai_YC28', '', '', '400 W. Washington Blvd.', 'Building ST Unit 316', 'Los Angeles', 'CA', 90015, 0, '', '', 213, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5026),
('1068', 'lai', 'YC29', 'LACCD - Mission College / Northeast SF Valley WorkSource Center', 'lai_YC29', '', '', '11623 Glenoaks Blvd.', '', 'Pacoima', 'CA', 91331, 0, '', '', 818, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5026),
('1069', 'lai', 'YC30', 'LACCD - Pierce College-Office of Career and Technical Education', 'lai_YC30', '', '', '6201 Winnetka Avenue', '', 'Woodland Hills', 'CA', 91371, 0, '', '', 818, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5026),
('1070', 'lai', 'YC31', 'LACCD - Valley College-Office of Student Services Monarch Hall Campus Center', 'lai_YC31', '', '', '5800 Fulton Avenue', '', 'Van Nuys', 'CA', 91401, 0, '', '', 818, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5026),
('1071', 'lai', 'YC32', 'LACCD - West LA College', 'lai_YC32', '', '', '9000 Overland Avenue', 'D5 Building Parking Lot U', 'Culver City', 'CA', 90230, 0, '', '', 310, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5026),
('1072', 'lai', 'YC33', 'AYE of Catholic Charities of Los Angeles - Central', 'lai_YC33', '', '', '3250 Wilshire Blvd.', 'Suite 1010', 'Los Angeles', 'CA', 90010, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5027),
('1073', 'lai', 'YC34', 'AYE of Catholic Charities of Los Angeles - West', 'lai_YC34', '', '', '3965 S. Vermont Avenue', '', 'Los Angeles', 'CA', 90037, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5027),
('1074', 'lai', 'YC35', 'AYE of Catholic Charities at Arbor Florence Firestone', 'lai_YC35', '', '', '1816 E. Firestone Blvd.', '', 'Los Angeles', 'CA', 90001, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5027),
('1075', 'lai', 'YC36', 'AYE - LACCD Van de Kamp Innovation Center', 'lai_YC36', '', '', '2930 Fletcher Drive', '', 'Los Angeles', 'CA', 90065, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5027),
('1076', 'lai', 'YC37', 'Chicana Service Action Center', 'lai_YC37', '', '', '3601 East 1st Street', '', 'Los Angeles', 'CA', 90063, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5028),
('1077', 'lai', 'YC38', 'El Proyecto del Barrio - Laurel Canyon Blvd.', 'lai_YC38', '', '', '9030 Laurel Canyon Blvd.', '', 'Sun Valley', 'CA', 91352, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5029),
('1078', 'lai', 'YC39', 'El Proyecto del Barrio - Sherman Way', 'lai_YC39', '', '', '20800 Sherman Way', '', 'Winnetka', 'CA', 91306, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5029),
('1079', 'lai', 'YC40', 'El Proyecto del Barrio - Van Nuys Blvd.', 'lai_YC40', '', '', '9140 Van Nuys Blvd.', 'Suite 101', 'Panorama City', 'CA', 91402, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5029),
('1080', 'lai', 'YC41', 'Goodwill Industries', 'lai_YC41', '', '', '342 San Fernando Road', '', 'Los Angeles', 'CA', 90031, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5030),
('1081', 'lai', 'YC42', 'Los Angeles Urban League', 'lai_YC42', '', '', '5414 S. Crenshaw Blvd.', '', 'Los Angeles', 'CA', 90043, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5031),
('1082', 'lai', 'YC43', 'Managed Career Solutions (MCS)', 'lai_YC43', '', '', '3333 Wilshire Blvd.', 'Unit 405', 'Los Angeles', 'CA', 90010, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5032),
('1083', 'lai', 'YC44', 'Managed Career Solutions (MCS)', 'lai_YC44', '', '', '4311 Melrose Avenue', '', 'Los Angeles', 'CA', 90029, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5032),
('1084', 'lai', 'YC45', 'Para Los Ninos - 6th Street', 'lai_YC45', '', '', '838 E. 6th Street', '', 'Los Angeles', 'CA', 90021, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5033),
('1085', 'lai', 'YC46', 'Para Los Ninos - Indiana Street', 'lai_YC46', '', '', '512 S. Indiana Street', '', 'Los Angeles', 'CA', 90063, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5033),
('1086', 'lai', 'YC47', 'Para Los Ninos - Selig Place', 'lai_YC47', '', '', '3921 Selig Place', '', 'Los Angeles', 'CA', 90031, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5033),
('1087', 'lai', 'YC48', 'UCLA CBL - Central', 'lai_YC48', '', '', '501 S. Bixel Street', '', 'Los Angeles', 'CA', 90017, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5034),
('1088', 'lai', 'YC49', 'UCLA CBL - West', 'lai_YC49', '', '', '3415 S. Sepulveda Blvd.', 'Suite 130', 'Los Angeles', 'CA', 90034, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5034),
('1089', 'lai', 'YC50', 'Watts Labor Community Action Committee (WLCAC)', 'lai_YC50', '', '', '11101 S. Central Avenue', '', 'Los Angeles', 'CA', 90015, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5035),
('1090', 'lai', 'YC51', 'Youth Opportunity Movement - Boyle Heights', 'lai_YC51', '', '', '1600 East 4th Street', '', 'Los Angeles', 'CA', 90033, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5036),
('1091', 'lai', 'YC52', 'Youth Opportunity Movement - Valley', 'lai_YC52', '', '', '11844 Glenoaks Blvd', '', 'Pacoima', 'CA', 91340, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5036),
('1092', 'lai', 'YC53', 'Youth Opportunity Movement - Watts', 'lai_YC53', '', '', '1501 East 103rd Street', '', 'Los Angeles', 'CA', 90002, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5036),
('1093', 'lai', 'YC54', 'Youth Policy Institute (YPI) - Spring Street', 'lai_YC54', '', '', '634 S. Spring Street', '10th Floor', 'Los Angeles', 'CA', 90014, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5037),
('1094', 'lai', 'YC55', 'Youth Policy Institute (YPI) - Van Nuys Blvd.', 'lai_YC55', '', '', '13630 Van Nuys Blvd.', '', 'Pacoima', 'CA', 91331, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5037),
('1095', 'lai', 'YC56', 'Youth Policy Institute (YPI) Hollywood FamilySource Center', 'lai_YC56', '', '', '5500 Hollywood Blvd.', '2nd Floor', 'Hollywood', 'CA', 90028, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5037),
('1096', 'lai', 'YC57', 'Youth Policy Institute (YPI) Community Center at Maclay Middle School', 'lai_YC57', '', '', '12540 Pierce Avenue', '', 'Pacoima', 'CA', 91331, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5037),
('1097', 'lai', 'YC58', 'Youth Policy Institute (YPI) at SALEF', 'lai_YC58', '', '', '1625 West Olympic Blvd.', '', 'Los Angeles', 'CA', 90015, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5037),
('1098', 'lai', 'YC59', 'HACLA - Avalon Gardens ETC', 'lai_YC59', '', '', '701 E. 88th Place', '', 'Los Angeles', 'CA', 90002, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5038),
('1099', 'lai', 'YC60', 'HACLA - Estrada Courts Management Office', 'lai_YC60', '', '', '3232 Estrada Street', '', 'Los Angeles', 'CA', 90023, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5038),
('1100', 'lai', 'YC61', 'HACLA - Gonzaque Village Management Office', 'lai_YC61', '', '', '1515 E. 105th Street', '', 'Los Angeles', 'CA', 90059, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5038),
('1101', 'lai', 'YC62', 'HACLA - Imperial Courts WorkSource Portal', 'lai_YC62', '', '', '11534-36 E. Croesus Ave', 'Unit 413', 'Los Angeles', 'CA', 90059, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5038),
('1102', 'lai', 'YC63', 'HACLA - Jordan Downs WorkSource Portal', 'lai_YC63', '', '', '2101 E. 101st St.', '', 'Los Angeles', 'CA', 90002, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5038),
('1103', 'lai', 'YC64', 'HACLA - Mar Vista Gardens Community Service Center', 'lai_YC64', '', '', '4909 Marionwood Drive', '', 'Culver City', 'CA', 90230, 0, '', '', 310, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5038),
('1104', 'lai', 'YC65', 'HACLA - Nickerson Gardens WorkSource Portal', 'lai_YC65', '', '', '1495 E. 114th Street', '', 'Los Angeles', 'CA', 90059, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5038),
('1105', 'lai', 'YC66', 'HACLA - Pico Gardens Management Office', 'lai_YC66', '', '', '1526 E. 4th Street', '', 'Los Angeles', 'CA', 90033, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5038),
('1106', 'lai', 'YC67', 'HACLA - Pueblo Del Rio ETC', 'lai_YC67', '', '', '1801 E. 53rd Street', '', 'Los Angeles', 'CA', 90058, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5038),
('1107', 'lai', 'YC68', 'HACLA - Ramona Gardens Community Service Center', 'lai_YC68', '', '', '2850 Lancaster Avenue', '', 'Los Angeles', 'CA', 90033, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5038),
('1108', 'lai', 'YC69', 'HACLA - Rancho San Pedro Management Office', 'lai_YC69', '', '', '275 W. 1st Street', '', 'San Pedro', 'CA', 90731, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5038),
('1109', 'lai', 'YC70', 'HACLA - Rose Hills ETC', 'lai_YC70', '', '', '4470 Florizel', 'Unit 2', 'Los Angeles', 'CA', 90032, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5038),
('1110', 'lai', 'YC71', 'HACLA - San Fernando Gardens Community Service Center', 'lai_YC71', '', '', '10896 Lehigh Avenue', '', 'Pacoima', 'CA', 91331, 0, '', '', 818, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5038),
('1111', 'lai', 'YC72', 'HACLA - William Mead Homes ETC', 'lai_YC72', '', '', '1300 N. Cardinal', '', 'Los Angeles', 'CA', 90012, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5038),
('1112', 'lai', 'YC73', 'Los Angeles Conservation Corp', 'lai_YC73', '', '', '1400 N. Spring St.', '', 'Los Angeles', 'CA', 90012, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5039),
('1113', 'lao', 'YC27', 'Goodwill Baldwin Park Teri G. Muse Family Service Center', 'lao_YC27', '', '', '14305 Morgan Street', '', 'Baldwin Park', 'CA', 91706, 0, '', '', 626, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5009),
('1114', 'lao', 'YC28', 'Career Partners - Schurr High School', 'lao_YC28', '', '', '820 Wilcox Avenue', '', 'Montebello', 'CA', 90640, 0, '', '', 562, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5018),
('1115', 'lao', 'YC29', 'Career Partners - San Gabriel Valley Conservation Corp', 'lao_YC29', '', '', '3017 N. Tyler Avenue', '', 'El Monte', 'CA', 91731, 0, '', '', 626, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'AGENCY', 5018),
('5001', 'ver', 'PA01', 'Glendale Youth Alliance', 'ver_PA01', '', '', '1255 S. Central Ave.', '', 'Glendale ', 'CA', 91204, 0, '', '', 818, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5002', 'fet', 'PA01', 'Foothill Employment and Training Connection', 'fet_PA01', '', '', '1207 E. Green Street', '', 'Pasadena', 'CA', 91106, 0, '', '', 626, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5003', 'lao', 'PA02', 'LA COUNTY OFFICE OF EDUCATION', 'lao_PA02', '', '', '37230 37th St.', '', 'East Palmdale', 'CA', 93550, 0, '', '', 661, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5004', 'lao', 'PA03', 'CATHOLIC CHARITIES OF L.A.', 'lao_PA03', '', '', '3250 Wilshire Blvd.', 'Suite 1010', 'Los Angeles', 'CA', 90010, 0, '', '', 213, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5005', 'lao', 'PA04', 'ASIAN AMERICAN DRUG ABUSE PRGM', 'lao_PA04', '', '', '1088 S. La Brea Ave.', '', 'Los Angeles', 'CA', 90043, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5006', 'lao', 'PA05', 'COMMUNITIES IN SCHOOLS', 'lao_PA05', '', '', '17625 South Central Ave.', 'Unit E', 'Carson', 'CA', 90746, 0, '', '', 310, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5007', 'lao', 'PA06', 'COMPTON CAREERLINK', 'lao_PA06', '', '', '700 North Bullis Road', '', 'Compton', 'CA', 90221, 0, '', '', 310, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5008', 'lao', 'PA07', 'DOOR OF HOPE COMMUNITY CENTER', 'lao_PA07', '', '', '1414 South Atlantic Blvd.', '', 'Los Angeles', 'CA', 90022, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5009', 'lao', 'PA08', 'CENTRAL SGV (GOODWILL INDUS)', 'lao_PA08', '', '', '264 E. Monterey', '', 'Pomona', 'CA', 91767, 0, '', '', 909, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5010', 'lao', 'PA09', 'HUB CITIES CONSORTIUM', 'lao_PA09', '', '', '2677 Zoe Avenue', '2nd Floor', 'Huntington Park', 'CA', 90255, 0, '', '', 2147483647, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5011', 'lao', 'PA10', 'JEWISH VOCATIONAL SERVICES', 'lao_PA10', '', '', '5757 Wilshire Blvd.', 'Promenade Three', 'Los Angeles', 'CA', 90036, 0, '', '', 2147483647, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5012', 'lao', 'PA11', 'LA WORKS - ESGVC', 'lao_PA11', '', '', '5200 Irwindale Ave.', 'Suite 130', 'Irwindale', 'CA', 91706, 0, '', '', 2147483647, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5013', 'lao', 'PA12', 'MARAVILLA FOUNDATION', 'lao_PA12', '', '', '5729 Union Pacific Ave.', '', 'Commerce', 'CA', 90022, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5014', 'lao', 'PA13', 'MEXICAN AMER. OPPORTUNITY F.', 'lao_PA13', '', '', '972 South Goodrich Blvd.', '', 'Commerce', 'CA', 90022, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5015', 'lao', 'PA14', 'SASSFA', 'lao_PA14', '', '', '10400 Pioneer Blvd.', 'Suite 9', 'Santa Fe Springs', 'CA', 90670, 0, '', '', 2147483647, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5016', 'lao', 'PA15', 'SPECIAL SERVICES FOR GROUPS', 'lao_PA15', '', '', '19401 South Vermont Ave.', 'Suite A-200', 'Los Angeles', 'CA', 90059, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5017', 'lao', 'PA16', 'WATTS LABOR COMMUNITY ACT. C.', 'lao_PA16', '', '', '958 East 108 Street', '', 'Los Angeles', 'CA', 90059, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5018', 'lao', 'PA17', 'CAREER PARTNERS -ROSEMEAD', 'lao_PA17', '', '', '3505 North Hart Avenue', '', 'Rosemead', 'CA', 91770, 0, '', '', 2147483647, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'ccui', 'PARENT1', 0),
('5019', 'lgb', 'PA01', 'Pacific Gateway', 'lgb_PA01', '', '', '3447 Atlantic Avenue', '', 'Long Beach', 'CA', 90807, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5020', 'sel', 'PA01', 'ABC UNIFIED SCHOOL DISTRICT', 'sel_PA01', '', '', '16700 NORWALK BLVD', '', 'CERRITOS', 'CA', 90703, 0, '', '', 562, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5021', 'sel', 'PA02', 'BELLFLOWER UNIFIED SCHOOL DISTRICT', 'sel_PA02', '', '', '16703 CLARK AVE', '', 'BELLFLOWER', 'CA', 90706, 0, '', '', 562, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5022', 'sel', 'PA03', 'CERRITOS COLLEGE', 'sel_PA03', '', '', '11110 ALONDRA BLVD', '', 'NORWALK', 'CA', 90650, 0, '', '', 562, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5023', 'sel', 'PA04', 'NORWALK LA MIRADA UNIFIED SCHOOL DIST.', 'sel_PA04', '', '', '12820 PIONEER BLVD', '', 'NORWALK', 'CA', 90650, 0, '', '', 562, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5024', 'sby', 'PA01', 'South Bay One-Stop Business & Career Center - Gardena', 'sby_PA01', '', '', '16801 S. Western Ave.', 'Suite A', 'Gardena', 'CA', 90247, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5025', 'lai', 'PA01', 'LAUSD', 'lai_PA01', '', '', '2265 E. 103rd Street', '', 'Los Angeles ', 'CA', 90002, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5026', 'lai', 'PA02', 'LACCD', 'lai_PA02', '', '', '1111 Figueroa Place', 'OV1 Classroom A', 'Wilmington', 'CA', 90744, 0, '', '', 310, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5027', 'lai', 'PA03', 'AYE', 'lai_PA03', '', '', '3250 Wilshire Blvd.', 'Suite 1010', 'Los Angeles', 'CA', 90010, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5028', 'lai', 'PA04', 'Chicana Service Action Center', 'lai_PA04', '', '', '3601 East 1st Street', '', 'Los Angeles', 'CA', 90063, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5029', 'lai', 'PA05', 'El Proyecto del Barrio', 'lai_PA05', '', '', '9030 Laurel Canyon Blvd.', '', 'Sun Valley', 'CA', 91352, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5030', 'lai', 'PA06', 'Goodwill Industries', 'lai_PA06', '', '', '342 San Fernando Road', '', 'Los Angeles', 'CA', 90031, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5031', 'lai', 'PA07', 'Los Angeles Urban League', 'lai_PA07', '', '', '5414 S. Crenshaw Blvd.', '', 'Los Angeles', 'CA', 90043, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5032', 'lai', 'PA08', 'Managed Career Solutions (MCS)', 'lai_PA08', '', '', '3333 Wilshire Blvd.', 'Unit 405', 'Los Angeles', 'CA', 90010, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5033', 'lai', 'PA09', 'Para Los Ninos', 'lai_PA09', '', '', '838 E. 6th Street', '', 'Los Angeles', 'CA', 90021, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5034', 'lai', 'PA10', 'UCLA CBL', 'lai_PA10', '', '', '501 S. Bixel Street', '', 'Los Angeles', 'CA', 90017, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5035', 'lai', 'PA11', 'Watts Labor Community Action Committee (WLCAC)', 'lai_PA11', '', '', '11101 S. Central Avenue', '', 'Los Angeles', 'CA', 90015, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5036', 'lai', 'PA12', 'Youth Opportunity Movement', 'lai_PA12', '', '', '1600 East 4th Street', '', 'Los Angeles', 'CA', 90033, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5037', 'lai', 'PA13', 'Youth Policy Institute (YPI)', 'lai_PA13', '', '', '634 S. Spring Street', '10th Floor', 'Los Angeles', 'CA', 90014, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5038', 'lai', 'PA14', 'HACLA', 'lai_PA14', '', '', '701 E. 88th Place', '', 'Los Angeles', 'CA', 90002, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('5039', 'lai', 'PA15', 'Los Angeles Conservation Corp', 'lai_PA15', '', '', '1400 N. Spring St.', '', 'Los Angeles', 'CA', 90012, 0, '', '', 323, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'sqlldr', '0000-00-00', 'sqlldr', 'PARENT1', 0),
('6077', 'DEPT', 'AC', 'Auditor-Controller ND', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6078', 'DEPT', 'AD', 'Alternate Public Defender', 'Alt Pub De', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6079', 'DEPT', 'AN', 'Animal Care And Control', 'Animal Cnt', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6080', 'DEPT', 'AO', 'Chief Executive Office', 'CEO', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6081', 'DEPT', 'AR', 'Museum Of Art', 'Art Museum', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6082', 'DEPT', 'AS', 'Assessor', 'Assessor', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6083', 'DEPT', 'AU', 'Auditor-Controller', 'Aud-Contrl', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6084', 'DEPT', 'AW', 'Agric Comm/Wts & Measures', 'Ag Comm/Wt', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6085', 'DEPT', 'BH', 'Beaches & Harbors', 'Bchs/Harbo', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6086', 'DEPT', 'BS', 'Board Of Supervisors', 'Supervisor', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6087', 'DEPT', 'CA', 'Consumer Affairs', 'Consumer A', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6088', 'DEPT', 'CB', 'CEO - Budget & Operations Management Branch', 'CEO - BOMB', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6089', 'DEPT', 'CC', 'County Counsel', 'Co Counsel', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6090', 'DEPT', 'CD', 'Child Support Services', 'CSSD', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6091', 'DEPT', 'CF', 'CEO - Facility Asset Management (FAM)', 'CEO - FAM', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6092', 'DEPT', 'CH', 'Children & Family Services', 'DCFS', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6093', 'DEPT', 'CP', 'Capital Projects', 'Cap Projec', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6094', 'DEPT', 'DA', 'District Attorney', 'Dist Attny', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6095', 'DEPT', 'EB', 'Employee Benefits', 'Empl Benef', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6096', 'DEPT', 'FA', 'Capital Assets Department', 'Capitals A', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6097', 'DEPT', 'FR', 'Fire Department', 'Fire Dept', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6098', 'DEPT', 'FS', 'Federal / State Disaster Aid', 'Fed/St Dis', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6099', 'DEPT', 'GJ', 'Grand Jury', 'Grand Jury', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6100', 'DEPT', 'HD', 'Ant Val Cluster (Hi-Desert)', 'Ant Val Cl', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6101', 'DEPT', 'HG', 'Northeast Cluster (LAC+USC)', 'N/E Cluste', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6102', 'DEPT', 'HH', 'Coastal Cluster (Harbor/UCLA MC)', 'Coastal Cl', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6103', 'DEPT', 'HJ', 'Juvenile Court Health Services', 'JCHS Actv', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6104', 'DEPT', 'HK', 'Southwest Cluster (MLK Jr MC)', 'S/W Cluste', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6105', 'DEPT', 'HM', 'Human Resources Dept', 'Human Res ', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6106', 'DEPT', 'HO', 'SFV Cluster (Olive View/UCLA MC)', 'SFV Cluste', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6107', 'DEPT', 'HP', 'Office Of Managed Care', 'OMC', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6108', 'DEPT', 'HR', 'South/West Network Hosp', 'S/W Networ', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6109', 'DEPT', 'HS', 'Health Services Excl Hospitals', 'Health Svc', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6110', 'DEPT', 'IB', 'Insurance Budget', 'Ins Budget', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6111', 'DEPT', 'IO', 'Chief Information Officer', 'CIO', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6112', 'DEPT', 'IS', 'Internal Services Dept', 'Internal S', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6113', 'DEPT', 'JD', 'Judgments & Damages', 'J & D', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6114', 'DEPT', 'LA', 'LAC+USC Replacement Project', 'LAC+USC Re', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6115', 'DEPT', 'LC', 'Los Angeles County - Capital Asset Leasing', 'LAC-CAL', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6116', 'DEPT', 'ME', 'Department Of Coroner', 'Coroner', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6117', 'DEPT', 'MH', 'Mental Health', 'Mental Hlt', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6118', 'DEPT', 'MV', 'Military & Vets Affairs', 'Mil/Vets A', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6119', 'DEPT', 'NB', 'Non-Departmental / Unbudgeted', 'Non-Dept/U', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6120', 'DEPT', 'NC', 'Non-County Agencies', 'Non-County', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6121', 'DEPT', 'ND', 'Non-Departmental / Budgeted', 'Non-Dept/B', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6122', 'DEPT', 'NE', 'NC - Los Angeles County Office of Education', 'LACOE', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6123', 'DEPT', 'NH', 'Museum Of Natural History', 'Nat Hist M', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6124', 'DEPT', 'NL', 'NC - Los Angeles County Employee Retirement Association', 'LACERA', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6125', 'DEPT', 'NS', 'NC - Sanitation Districts', 'Sanitation', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6126', 'DEPT', 'OE', 'CEO - Office of Emergency Management', 'CEO - OEM', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6127', 'DEPT', 'OM', 'Ombudsman', 'Ombudsman', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6128', 'DEPT', 'PB', 'Probation Department', 'Probation', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6129', 'DEPT', 'PD', 'Public Defender', 'Pub Defend', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6130', 'DEPT', 'PF', 'Project & Facility Development', 'Proj & Fac', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6131', 'DEPT', 'PG', 'Alcohol and Drug Program Administration', 'Alcohol & ', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6132', 'DEPT', 'PH', 'Public Health Programs', 'Public Hea', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6133', 'DEPT', 'PK', 'Parks & Recreation Department', 'Parks & Re', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6134', 'DEPT', 'PL', 'Public Library', 'Pub Librar', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0);
INSERT INTO `agencies` (`ORGANIZATION_ID`, `LWIA_CD`, `WIA_AGCY_CD`, `AGCY_NAM`, `AGCY_ABBREV`, `FEIN`, `SECTOR_TYPE`, `AGCY_ADRS`, `AGCY_ADRS_2`, `AGCY_CITY`, `AGCY_ST`, `ZIP`, `ZIP_4`, `CON_NAM`, `CON_TITLE`, `PH`, `OPR_ID`, `ENTRY_DT`, `DEACTIVATION_DATE`, `CREATE_DT`, `CREATED_BY`, `LAST_UPDATE_DATE`, `LAST_UPDATED_BY`, `ORG_TYPE`, `PARENT_ORG_ID`) VALUES
('6135', 'DEPT', 'PP', 'Office of AIDS Programs & Policy', 'AIDS Pgms ', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6136', 'DEPT', 'PR', 'Antelope Valley Rehabilitation Center', 'AVRC', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6137', 'DEPT', 'PS', 'Children\'s Medical Services', 'Child Med ', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6138', 'DEPT', 'PW', 'Public Works Department', 'Public Wor', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6139', 'DEPT', 'RE', 'Rent Expense', 'Rent Expen', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6140', 'DEPT', 'RP', 'Regional Planning Department', 'Reg Planni', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6141', 'DEPT', 'RR', 'Registrar Recorder', 'Reg Record', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6142', 'DEPT', 'SC', 'Superior Court & County Clerk', 'Sup Ct/Cle', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6143', 'DEPT', 'SH', 'Sheriff', 'Sheriff', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6144', 'DEPT', 'SS', 'Public Social Services Dept', 'DPSS', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6145', 'DEPT', 'SY', 'Office Of Public Safety', 'OPS', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6146', 'DEPT', 'TT', 'Treasurer & Tax Collector', 'TTC', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6147', 'DEPT', 'ZZ', 'Invalid Fund Dept Code', 'IFD Code', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6148', 'DEPT', 'AA', 'Affirmative Action Compliance', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6149', 'DEPT', 'CSS', 'Community & Senior Services', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6150', 'DEPT', 'HRC', 'Human Relations Commission', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6151', 'DEPT', 'ART', 'L.A. County Arts Commission', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0),
('6152', 'DEPT', 'SCLA', 'Superior Court of Los Angeles County ', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '0000-00-00', '2019-01-01', '0000-00-00', 'RKAKARLA', '0000-00-00', 'RKAKARLA', 'DEPARTMENT', 0);

-- --------------------------------------------------------

--
-- Table structure for table `application_attachments`
--

CREATE TABLE `application_attachments` (
  `id` int(10) NOT NULL,
  `application_form_id` int(10) NOT NULL,
  `document_type` varchar(100) DEFAULT NULL,
  `other_document_type` varchar(255) DEFAULT NULL,
  `attachment_name` varchar(100) DEFAULT NULL,
  `attachment_type` varchar(100) DEFAULT NULL,
  `attachment_size` int(11) DEFAULT NULL,
  `attachment_content` longblob,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `application_form`
--

CREATE TABLE `application_form` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `application_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `application_date` date DEFAULT NULL,
  `enrollment_date` date DEFAULT NULL,
  `assigned_agency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ssn` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `funding_source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caljobs_app` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_residence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_residence` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail_zip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `citizen` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `eligible_to_work` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alien_doc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `race` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unincorporated_area` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foster_child` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanf_calworks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ethinicity` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family_food_stamps` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_needy_family` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disabled` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `homeless` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pregnant_parenting_youth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `runaway_youth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `probation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `english_learner` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unemployment_insurance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `veteran_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spouse_of_qualifying_veteran` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `supportive_service_needed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highest_grade_completed` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referred_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_permit_on_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_signature_on_file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pdj` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cluster` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `area_office` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caseload_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dropout_reason` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dropout_notes` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_form`
--

INSERT INTO `application_form` (`id`, `user_id`, `application_id`, `application_date`, `enrollment_date`, `assigned_agency`, `current_status`, `last_name`, `first_name`, `ssn`, `funding_source`, `caljobs_app`, `birth_date`, `age`, `gender`, `address_residence`, `city`, `state`, `zip_code`, `phone_residence`, `mail_address`, `mail_city`, `mail_state`, `mail_zip`, `message_phone`, `citizen`, `eligible_to_work`, `alien_doc`, `race`, `unincorporated_area`, `email_address`, `foster_child`, `tanf_calworks`, `ethinicity`, `family_food_stamps`, `gr`, `other_needy_family`, `disabled`, `homeless`, `pregnant_parenting_youth`, `runaway_youth`, `probation`, `english_learner`, `unemployment_insurance`, `veteran_status`, `spouse_of_qualifying_veteran`, `supportive_service_needed`, `education_status`, `highest_grade_completed`, `referred_by`, `tse`, `agency`, `staff_id`, `note`, `work_permit_on_file`, `parent_signature_on_file`, `pdj`, `cluster`, `area_office`, `caseload_no`, `dropout_reason`, `dropout_notes`, `created_at`, `updated_at`) VALUES
(1, 41, '201810000', '2018-06-13', '2018-06-13', 'lai-HACLA - Avalon Gardens ETC', 'ENROLLED', 'dwqd', 'wqdqw', 'XXX-X2-1321', '0', NULL, '2000-06-13', 18, 'male', 'qweqwe', 'dweq', 'CA', '3424234', '212-321-3123', NULL, NULL, NULL, NULL, NULL, 'Yes', NULL, NULL, '1', 'Yes', NULL, 'Yes', 'Yes', '1', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes,<=180 Days', 'Yes, UI Claimant', 'Yes', 'Yes', 'Student H.S or less', '1', 'TAY', 'TSE', 'aefsdf', 'cadssdasd', 'sada', 'Yes', 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-13 23:47:20', '2018-06-13 23:47:20');

-- --------------------------------------------------------

--
-- Table structure for table `city_or_county_departments`
--

CREATE TABLE `city_or_county_departments` (
  `id` int(10) NOT NULL,
  `county_department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(15) NOT NULL,
  `department_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `department_name`) VALUES
(1, 'AD- Alernate Public Defender'),
(2, 'AN- Animal Care & Control'),
(3, 'AO-Chief Executive Office'),
(4, 'AR-Museum of Art'),
(5, 'AS-Assessor'),
(6, 'AU-Auditor-Controller'),
(7, 'AW- Agricultural Commissioner/'),
(8, 'BH- Beach & Harbors'),
(9, 'BS- Board of Supervisors'),
(10, 'CB- Consumer & Business Affair'),
(11, 'CC- County Counsel'),
(12, 'Child Support Services'),
(13, 'CDC- Community Development Com'),
(14, 'CH- Children and Family Servic'),
(15, 'CS- Work Development Aging & C'),
(16, 'DA- District Attorney'),
(17, 'FR- Fire Department'),
(18, 'HR-Human Resources'),
(19, 'HS- Health Services'),
(20, 'IS- Internal Services'),
(21, 'ME- Medical Examiner- Coroner'),
(22, 'MH- Mental; Health'),
(23, 'MV - Military & Veterans Affai'),
(24, 'NHM - Natural History Museum'),
(25, 'PB - Probation'),
(26, 'PD - Public Defender'),
(27, 'PH - Public Health'),
(28, 'PK - Parks & Recreation'),
(29, 'PL - Public Library'),
(30, 'PW - Public Works'),
(31, 'RP - Regional Planning'),
(32, 'RR- Register- Recorder/ County'),
(33, 'SH - Sheriff'),
(34, 'SS - Public Social Services'),
(35, 'TT - Treasure & Tax Collector');

-- --------------------------------------------------------

--
-- Table structure for table `document_types`
--

CREATE TABLE `document_types` (
  `id` int(11) NOT NULL,
  `document_name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(100) DEFAULT NULL,
  `updated_by` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `document_types`
--

INSERT INTO `document_types` (`id`, `document_name`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'STATE ID', '2018-05-21 11:03:05', NULL, '', ''),
(2, 'PASSPORT', '2018-05-21 11:03:05', NULL, '', ''),
(3, 'DRIVER LICENSE', '2018-05-21 11:03:05', NULL, '', ''),
(4, 'OTHER', '2018-05-21 11:03:05', NULL, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `education_status`
--

CREATE TABLE `education_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `education_status`
--

INSERT INTO `education_status` (`id`, `description`, `label`, `active`, `created_by`, `sort_key`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Student H.S or less', 'Student H.S or less', 'yes', 'jhon', 'A', '2018-03-13', 'sam', '2018-03-13'),
(2, 'Student attending post H.S.', 'Student attending post H.S.', 'yes', 'jhon', 'B', '2018-03-13', 'sam', '2018-03-13'),
(3, 'Out-of-School, H.S dropout', 'Out-of-School, H.S dropout', 'yes', 'jhon', 'C', '2018-03-13', 'sam', '2018-03-13'),
(4, 'Out-of-School, H.S grad, employment difficulty', 'Out-of-School, H.S grad, employment difficulty', 'yes', 'jhon', 'D', '2018-03-13', 'sam', '2018-03-13'),
(5, 'Out-of-School, H.S grad, no employment difficulty', 'Out-of-School, H.S grad, no employment difficulty', 'yes', 'jhon', 'E', '2018-03-13', 'sam', '2018-03-13'),
(6, 'Alternative School', 'Alternative School', 'yes', 'jhon', 'F', '2018-03-13', 'sam', '2018-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `ethinicity`
--

CREATE TABLE `ethinicity` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `race_group` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ethinicity`
--

INSERT INTO `ethinicity` (`id`, `description`, `label`, `active`, `race_group`, `created_by`, `sort_key`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Indian', 'Indian', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(2, 'Bangladesh', 'Bangladesh', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(3, 'Nepalese', 'Nepalese', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(4, 'Bhutanese', 'Bhutanese', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(5, 'Chinese', 'Chinese', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(6, 'Malaysian', 'Malaysian', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(7, 'Loatian', 'Loatian', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(8, 'Vietnamese', 'Vietnamese', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(9, 'Other Asian', 'Other Asian', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(10, 'Pakistani', 'Pakistani', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(11, 'Sri Lankan', 'Sri Lankan', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(12, 'Sikkimese', 'Sikkimese', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(13, 'Japanese', 'Japanese', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(14, 'Korean', 'Korean', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(15, 'Thai', 'Thai', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(16, 'Cambodian', 'Cambodian', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(17, 'Filipino', 'Filipino', 'Yes', 'Asian', NULL, NULL, NULL, NULL, NULL),
(18, 'Hawaiian/Part Hawaiian', 'Hawaiian/Part Hawaiian', 'Yes', 'Hawaiian-Other Pacific Islander', NULL, NULL, NULL, NULL, NULL),
(19, 'Samoan', 'Samoan', 'Yes', 'Hawaiian-Other Pacific Islander', NULL, NULL, NULL, NULL, NULL),
(21, 'Palauan', 'Palauan', 'Yes', 'Hawaiian-Other Pacific Islander', NULL, NULL, NULL, NULL, NULL),
(22, 'Guamanian', 'Guamanian', 'Yes', 'Hawaiian-Other Pacific Islander', NULL, NULL, NULL, NULL, NULL),
(23, 'Micronesian', 'Micronesian', 'Yes', 'Hawaiian-Other Pacific Islander', NULL, NULL, NULL, NULL, NULL),
(24, 'Other Pacific Islander', 'Other Pacific Islander', 'Yes', 'Hawaiian-Other Pacific Islander', NULL, NULL, NULL, NULL, NULL),
(25, 'Marshallese', 'Marshallese', 'Yes', 'Hawaiian-Other Pacific Islander', NULL, NULL, NULL, NULL, NULL),
(26, 'Not Applicable', 'Not Applicable', 'Yes', 'Default', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `funding_source`
--

CREATE TABLE `funding_source` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `begin_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `funding_source`
--

INSERT INTO `funding_source` (`id`, `description`, `label`, `active`, `begin_date`, `end_date`, `created_by`, `sort_key`, `created_on`, `updated_by`, `updated_on`) VALUES
(201, 'CalTeens', 'CalTeens', 'yes', '2012-12-05', '2013-05-21', 'e496632', 'a', '2018-03-13', 'e496632', '2018-03-13'),
(202, 'NCC', 'NCC', 'yes', '2012-05-12', '2016-06-30', 'e496632', 'a', '2018-03-13', 'e496632', '2018-03-13'),
(203, 'GROW', 'GROW', 'yes', '2012-05-23', NULL, 'e496632', 'a', '2018-03-13', 'e496632', '2018-03-13'),
(204, 'WIA Waiver', 'WIA Waiver', 'yes', '2012-01-01', '2016-06-30', 'e496632', 'a', '2018-03-13', 'e496632', '2018-03-13'),
(205, 'CalWORKs', 'CalWORKs', 'yes', '2014-04-01', NULL, 'e496632', 'a', '2018-03-13', 'e496632', '2018-03-13'),
(206, 'DPSS Foster', 'DPSS Foster', 'yes', '2014-05-01', NULL, 'e496632', 'a', '2018-03-13', 'e496632', '2018-03-13'),
(207, 'NCC Hot Spots', 'NCC Hot Spots', 'yes', '2014-07-01', '2015-02-27', 'e496632', 'a', '2018-03-13', 'e496632', '2018-03-13'),
(208, 'CWYR', 'CWYR', 'yes', '2015-02-10', NULL, 'e496632', 'a', '2018-03-13', 'e496632', '2018-03-13'),
(209, 'Other Underserved Youth', 'Other Underserved Youth', 'yes', '2016-07-01', NULL, 'e496632', 'a', '2018-03-13', 'e496632', '2018-03-13'),
(210, 'Probation JJCPA', 'Probation JJCPA', 'yes', '2017-04-25', NULL, 'e496632', 'a', '2018-03-13', 'e496632', '2018-03-13'),
(211, 'WIOA Waiver', 'WIOA Waiver', 'yes', '2016-07-01', NULL, 'e496632', 'a', '2018-03-13', 'e496632', '2018-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `highest_grade_completed`
--

CREATE TABLE `highest_grade_completed` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` int(10) NOT NULL,
  `industry_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `industry_name`) VALUES
(1, 'Administrative and Support Services'),
(2, 'Amusement & Recreation'),
(3, 'Animal Services'),
(4, 'Banking'),
(5, 'Biomed/Biotech'),
(6, 'Construction'),
(7, 'Educational Services'),
(8, 'Entertainment Industry'),
(9, 'Finance and Insurance'),
(10, 'Food Services'),
(11, 'Government Relations/Policy'),
(12, 'Health Care'),
(13, 'Hospitality and Tourism'),
(14, 'Information and Publishing'),
(15, 'Legal Services'),
(16, 'Manufacturing'),
(17, 'Mining and Utilities'),
(18, 'Professional And Technical Services'),
(19, 'Retail'),
(20, 'Social and Community Services'),
(21, 'Telecommunication'),
(22, 'Trade(Logistics, Transportation and Warehouse)'),
(23, 'Other'),
(24, 'Select Industry');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_12_090931_radio_buttons', 2),
(4, '2018_03_12_100442_radio_buttons_data', 2),
(5, '2018_03_12_102523_radio_button_options_data', 2),
(6, '2018_03_12_104848_education_status', 2),
(7, '2018_03_12_105127_education_status_data', 2),
(8, '2018_03_12_110020_race_and_funding_source', 2),
(9, '2018_03_12_110334_race_and_funding_source_data', 2),
(10, '2018_03_12_162256_application_form', 2),
(11, '2018_03_13_105137_gender', 3),
(12, '2018_03_13_160222_ethinicity_and_grade', 3),
(13, '2018_03_13_170524_ethinicity_and_grade_data', 4),
(14, '2018_03_13_174120_highest_grade_data', 5),
(15, '2018_04_03_055232_user_responsibility', 5),
(16, '2018_04_03_063028_user_responsibility_data', 5),
(17, '2018_05_06_225658_laratrust_setup_tables', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pet_status`
--

CREATE TABLE `pet_status` (
  `id` int(11) NOT NULL,
  `application_form_id` int(11) DEFAULT NULL,
  `training_type` varchar(100) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `hours` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pet_status`
--

INSERT INTO `pet_status` (`id`, `application_form_id`, `training_type`, `start_date`, `end_date`, `hours`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'PET', '2018-06-13', '2018-06-28', 7, 'PENDING-IN TRAINING', '2018-06-13 23:54:43', '2018-06-13 23:54:53');

-- --------------------------------------------------------

--
-- Table structure for table `probation_area office`
--

CREATE TABLE `probation_area office` (
  `area_office` varchar(30) NOT NULL,
  `Work_location_ID` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `probation_area office`
--

INSERT INTO `probation_area office` (`area_office`, `Work_location_ID`) VALUES
('', 16),
('Antelope Valley Juvenile', 3001),
('Centinela Area Office', 3002),
('Crenshaw Area Office', 3003),
('East Los Angeles Office', 3004),
('Firestone Area Office', 3005),
('Foothill Area Office', 3006),
('Harbor Area Office', 3007),
('Northeast Juvenile Center', 3008),
('Pomona Valley Area Office', 3009),
('Rio Hondo Area Office', 3010),
('San Gabriel Valley Area Office', 3011),
('Santa Monica Area Office', 3012),
('South Central Area Office', 3013),
('Valencia Sub-Office', 3014);

-- --------------------------------------------------------

--
-- Table structure for table `prod02_syep_jta_wia_app`
--

CREATE TABLE `prod02_syep_jta_wia_app` (
  `application_id` float DEFAULT NULL,
  `fy_year` smallint(6) DEFAULT NULL,
  `current_app_status` varchar(30) DEFAULT NULL,
  `asgned_agcy_org_id` float DEFAULT NULL,
  `asgned_agcy_lwia_cd` varchar(10) DEFAULT NULL,
  `asgned_agcy_wia_agcy_cd` varchar(4) DEFAULT NULL,
  `data_source` varchar(20) DEFAULT NULL,
  `subgrantee_name` varchar(60) DEFAULT NULL,
  `lwia_cd` varchar(10) DEFAULT NULL,
  `wia_agcy_cd` varchar(4) DEFAULT NULL,
  `wia_app_num` varchar(7) DEFAULT NULL,
  `ssn` varchar(30) DEFAULT NULL,
  `univ_access_only` varchar(1) DEFAULT NULL,
  `app_dt` datetime DEFAULT NULL,
  `clnt_last_nam` varchar(50) NOT NULL,
  `clnt_first_nam` varchar(50) NOT NULL,
  `middle_initial` varchar(30) DEFAULT NULL,
  `app_adrs` varchar(50) DEFAULT NULL,
  `app_city` varchar(30) DEFAULT NULL,
  `app_st` varchar(2) DEFAULT NULL,
  `app_zip` varchar(5) DEFAULT NULL,
  `app_zip_4` varchar(4) DEFAULT NULL,
  `app_ph` varchar(12) DEFAULT NULL,
  `mail_adrs` varchar(50) DEFAULT NULL,
  `mail_city` varchar(30) DEFAULT NULL,
  `mail_st` varchar(2) DEFAULT NULL,
  `mail_zip` varchar(5) DEFAULT NULL,
  `mail_zip_4` varchar(4) DEFAULT NULL,
  `msg_ph` varchar(12) DEFAULT NULL,
  `geo_cd` varchar(6) DEFAULT NULL,
  `ctznshp` varchar(1) DEFAULT NULL,
  `work_eligible` varchar(1) DEFAULT NULL,
  `alien_docum` varchar(15) DEFAULT NULL,
  `gendr` varchar(1) DEFAULT NULL,
  `dt_of_birth` datetime DEFAULT NULL,
  `app_age` varchar(2) DEFAULT NULL,
  `assesd` varchar(1) DEFAULT NULL,
  `slctv_serv` varchar(1) DEFAULT NULL,
  `ethnic` varchar(3) DEFAULT NULL,
  `ethnic2` varchar(3) DEFAULT NULL,
  `ethnic3` varchar(3) DEFAULT NULL,
  `ethnic4` varchar(3) DEFAULT NULL,
  `ethnic5` varchar(3) DEFAULT NULL,
  `ethnic6` varchar(3) DEFAULT NULL,
  `adult_educ` varchar(1) DEFAULT NULL,
  `job_corps` varchar(1) DEFAULT NULL,
  `farmwrkr_pgm` varchar(1) DEFAULT NULL,
  `natv_amer_pgm` varchar(1) DEFAULT NULL,
  `vet_wia_pgm` varchar(1) DEFAULT NULL,
  `vet_dvop_lvr` varchar(1) DEFAULT NULL,
  `trade_adjmt_act` varchar(1) DEFAULT NULL,
  `naftaa_taa` varchar(1) DEFAULT NULL,
  `voctl_educ` varchar(1) DEFAULT NULL,
  `voctl_rehab` varchar(1) DEFAULT NULL,
  `wagnr_peysr` varchar(1) DEFAULT NULL,
  `wtw_partic` varchar(1) DEFAULT NULL,
  `title_v_actvy` varchar(1) DEFAULT NULL,
  `comm_serv_blk_grnt` varchar(1) DEFAULT NULL,
  `hud_pgm` varchar(1) DEFAULT NULL,
  `oth_non_wia_pgms` varchar(1) DEFAULT NULL,
  `rapid_resp` varchar(1) DEFAULT NULL,
  `rapid_resp_addtl` varchar(1) DEFAULT NULL,
  `tanf` varchar(1) DEFAULT NULL,
  `food_stamp_pgm` varchar(1) DEFAULT NULL,
  `wia_dsabl` varchar(1) DEFAULT NULL,
  `lmtd_engl` varchar(1) DEFAULT NULL,
  `subs_abuse` varchar(1) DEFAULT NULL,
  `basic_skill_defcnt` varchar(1) DEFAULT NULL,
  `ofndr` varchar(1) DEFAULT NULL,
  `preg_parent_yth` varchar(1) DEFAULT NULL,
  `yth_need_addtl` varchar(1) DEFAULT NULL,
  `runaway` varchar(1) DEFAULT NULL,
  `foster_child` varchar(1) DEFAULT NULL,
  `fam_tanf` varchar(1) DEFAULT NULL,
  `fam_ga` varchar(1) DEFAULT NULL,
  `fam_rca` varchar(1) DEFAULT NULL,
  `fam_ssi` varchar(1) DEFAULT NULL,
  `food_stamps` varchar(1) DEFAULT NULL,
  `num_in_fam` float DEFAULT NULL,
  `num_depdn` float DEFAULT NULL,
  `wia_fam_status` varchar(1) DEFAULT NULL,
  `fam_inc_6_mths` float DEFAULT NULL,
  `low_income` varchar(1) DEFAULT NULL,
  `tanf_exhst` varchar(1) DEFAULT NULL,
  `homeless` varchar(1) DEFAULT NULL,
  `poor_wrk_hist` varchar(1) DEFAULT NULL,
  `ui` varchar(1) DEFAULT NULL,
  `vet_stat` varchar(1) DEFAULT NULL,
  `vet_dsabl` varchar(1) DEFAULT NULL,
  `vet_sep_dt` datetime DEFAULT NULL,
  `vet_recent_sep` varchar(1) DEFAULT NULL,
  `vet_campgn` varchar(1) DEFAULT NULL,
  `spouse_vet` varchar(1) DEFAULT NULL,
  `hi_grade_cmplt` varchar(2) DEFAULT NULL,
  `wia_educ_stat` varchar(1) DEFAULT NULL,
  `read_grade_lvl` decimal(3,1) DEFAULT NULL,
  `read_score` varchar(3) DEFAULT NULL,
  `read_test_cd` varchar(3) DEFAULT NULL,
  `read_version` varchar(3) DEFAULT NULL,
  `math_grade_lvl` decimal(3,1) DEFAULT NULL,
  `math_score` varchar(3) DEFAULT NULL,
  `math_test_cd` varchar(3) DEFAULT NULL,
  `math_version` varchar(3) DEFAULT NULL,
  `wia_labor` varchar(1) DEFAULT NULL,
  `wks_unemp_last_26` float DEFAULT NULL,
  `hrly_wg` float DEFAULT NULL,
  `refer_wprs` varchar(1) DEFAULT NULL,
  `wia_dsloctd_wrkr` varchar(1) DEFAULT NULL,
  `dslocn_dt` datetime DEFAULT NULL,
  `dslocn_job_cd` varchar(9) DEFAULT NULL,
  `job_title` varchar(60) DEFAULT NULL,
  `dslocn_indstry` varchar(3) DEFAULT NULL,
  `dslocn_tenure` smallint(6) DEFAULT NULL,
  `email_adrs` varchar(80) DEFAULT NULL,
  `combd_wia_eligy_cd` varchar(12) DEFAULT NULL,
  `er_num` float DEFAULT NULL,
  `intvwr_id` varchar(5) DEFAULT NULL,
  `revw_staff_id` varchar(5) DEFAULT NULL,
  `form_cmplt_flg` varchar(1) DEFAULT NULL,
  `conv_app` varchar(1) DEFAULT NULL,
  `opr_id` varchar(8) DEFAULT NULL,
  `creation_date` datetime DEFAULT NULL,
  `created_by` varchar(15) DEFAULT NULL,
  `last_update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_updated_by` varchar(15) DEFAULT NULL,
  `orig_entry_dt` datetime DEFAULT NULL,
  `mod_dt` datetime DEFAULT NULL,
  `entry_dt` datetime DEFAULT NULL,
  `probation_cd` varchar(1) DEFAULT NULL,
  `acct_addr_01_nm` varchar(60) DEFAULT NULL,
  `acct_addr_02_nm` varchar(60) DEFAULT NULL,
  `acct_addr_03_nm` varchar(60) DEFAULT NULL,
  `acct_addr_04_nm` varchar(60) DEFAULT NULL,
  `acct_addr_05_nm` varchar(60) DEFAULT NULL,
  `acct_addr_06_nm` varchar(60) DEFAULT NULL,
  `status_01_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status_02_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status_03_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status_04_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status_05_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status_06_date` datetime DEFAULT NULL,
  `status_07_date` datetime DEFAULT NULL,
  `status_08_date` datetime DEFAULT NULL,
  `status_09_date` datetime DEFAULT NULL,
  `status_10_date` datetime DEFAULT NULL,
  `attribute01` varchar(20) DEFAULT NULL,
  `attribute02` varchar(20) DEFAULT NULL,
  `attribute03` varchar(20) DEFAULT NULL,
  `attribute04` varchar(20) DEFAULT NULL,
  `attribute05` varchar(20) DEFAULT NULL,
  `attribute06` varchar(20) DEFAULT NULL,
  `attribute07` varchar(20) DEFAULT NULL,
  `attribute08` varchar(20) DEFAULT NULL,
  `face_book_account_y_n` varchar(1) DEFAULT NULL,
  `face_book_account` varchar(30) DEFAULT NULL,
  `twitter_account_y_n` varchar(1) DEFAULT NULL,
  `twitter_account` varchar(30) DEFAULT NULL,
  `my_space_account_y_n` varchar(1) DEFAULT NULL,
  `my_space_account` varchar(30) DEFAULT NULL,
  `reg_with_sel_service_y_n` varchar(1) DEFAULT NULL,
  `cur_attend_high_school_y_n` varchar(1) DEFAULT NULL,
  `graduate_r_get_ged_y_n` varchar(1) DEFAULT NULL,
  `dropout_of_high_school_y_n` varchar(1) DEFAULT NULL,
  `applicant_login_type` varchar(20) DEFAULT NULL,
  `reg_no` varchar(10) DEFAULT NULL,
  `last_5_ssn` varchar(5) DEFAULT NULL,
  `area_of_interest` varchar(200) DEFAULT NULL,
  `eligibility_check` varchar(30) DEFAULT NULL,
  `eligibility_check_dt` datetime DEFAULT NULL,
  `enrollment_status` varchar(15) DEFAULT NULL,
  `enrollment_date` datetime DEFAULT NULL,
  `eligibility_note` varchar(500) DEFAULT NULL,
  `eligibility_note_old` varchar(1000) DEFAULT NULL,
  `supervisory_district` float DEFAULT NULL,
  `work_permit_on_file` float DEFAULT NULL,
  `parent_sign_on_file` float DEFAULT NULL,
  `enroll_counter` float DEFAULT NULL,
  `start_waitlist_no` float DEFAULT NULL,
  `current_waitlist_no` float DEFAULT NULL,
  `pre_test_score` float DEFAULT NULL,
  `unincorporated_area_yn` varchar(1) DEFAULT NULL,
  `ab12` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `race`
--

CREATE TABLE `race` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `race`
--

INSERT INTO `race` (`id`, `description`, `label`, `active`, `created_by`, `sort_key`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'African American-Black', 'African American/Black', 'Yes', NULL, NULL, NULL, NULL, NULL),
(2, 'American Indian-Alaskan Native', 'American Indian/Alaskan Native', 'Yes', NULL, NULL, NULL, NULL, NULL),
(3, 'Asian', 'Asian', 'Yes', NULL, NULL, NULL, NULL, NULL),
(4, 'Hawaiian-Other Pacific Islander', 'Hawaiian/Other Pacific Islander', 'Yes', NULL, NULL, NULL, NULL, NULL),
(5, 'White', 'White', 'Yes', NULL, NULL, NULL, NULL, NULL),
(6, 'I do not wish to answer', 'I do not wish to answer', 'Yes', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `radio_buttons`
--

CREATE TABLE `radio_buttons` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_on` date DEFAULT NULL,
  `updated_by` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_on` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `radio_buttons`
--

INSERT INTO `radio_buttons` (`id`, `description`, `label`, `active`, `created_by`, `created_on`, `updated_by`, `updated_on`) VALUES
(1, 'Foster Child', 'Foster Child', 'yes', 'jhon', '2018-03-13', 'sam', '2018-03-13'),
(2, 'TANF/CALWORKS', 'TANF/CALWORKS', 'yes', 'jhon', '2018-03-13', 'sam', '2018-03-13'),
(3, 'FAMILY FOOD STAMPS', 'FAMILY FOOD STAMPS', 'yes', 'jhon', '2018-03-13', 'sam', '2018-03-13'),
(4, 'GR', 'GR', 'yes', 'jhon', '2018-03-13', 'sam', '2018-03-13'),
(5, 'Other Needy Family', 'Other Needy Family', 'yes', 'jhon', '2018-03-13', 'sam', '2018-03-13'),
(6, 'Disabled', 'Disabled', 'yes', 'jhon', '2018-03-13', 'sam', '2018-03-13'),
(7, 'Homeless', 'Homeless', 'yes', 'jhon', '2018-03-13', 'sam', '2018-03-13'),
(8, 'Pregnant/Parenting Youth', 'Pregnant/Parenting Youth', 'yes', 'jhon', '2018-03-13', 'sam', '2018-03-13'),
(9, 'Runaway Youth', 'Runaway Youth', 'yes', 'jhon', '2018-03-13', 'sam', '2018-03-13'),
(10, 'Probation', 'Probation', 'yes', 'jhon', '2018-03-13', 'sam', '2018-03-13'),
(11, 'English Learner', 'English Learner', 'yes', 'jhon', '2018-03-13', 'sam', '2018-03-13'),
(12, 'Unemployment Insurance', 'Unemployment Insurance', 'yes', 'jhon', '2018-03-13', 'sam', '2018-03-13'),
(13, 'Veteran Status', 'Veteran Status', 'yes', 'jhon', '2018-03-13', 'sam', '2018-03-13'),
(14, 'Spouse of Qualifying Veteran', 'Spouse of Qualifying Veteran', 'yes', 'jhon', '2018-03-13', 'sam', '2018-03-13'),
(15, 'Supportive Service Needed', 'Supportive Service Needed', 'yes', 'jhon', '2018-03-13', 'sam', '2018-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `radio_button_options`
--

CREATE TABLE `radio_button_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radio_id` int(11) NOT NULL,
  `sort_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `radio_button_options`
--

INSERT INTO `radio_button_options` (`id`, `option_name`, `radio_id`, `sort_key`) VALUES
(1, 'Yes', 1, 'a'),
(2, 'No', 1, 'b'),
(3, 'Yes', 2, 'a'),
(4, 'No', 2, 'b'),
(5, 'Yes', 3, 'a'),
(6, 'No', 3, 'b'),
(7, 'Yes', 4, 'a'),
(8, 'No', 4, 'b'),
(9, 'Yes', 5, 'a'),
(10, 'No', 5, 'b'),
(11, 'Yes', 6, 'a'),
(12, 'No', 6, 'b'),
(13, 'Yes', 7, 'a'),
(14, 'No', 7, 'b'),
(17, 'Yes', 8, 'a'),
(18, 'No', 8, 'b'),
(19, 'Yes', 9, 'a'),
(20, 'No', 9, 'b'),
(21, 'Yes', 10, 'a'),
(22, 'No', 10, 'b'),
(23, 'Did Not Disclose', 10, 'c'),
(24, 'Yes', 11, 'a'),
(25, 'No', 11, 'b'),
(26, 'Yes,<=180 Days', 12, 'a'),
(27, 'Yes,Eligible Veteran', 12, 'b'),
(28, 'No', 12, 'c'),
(29, 'Yes, UI Claimant', 13, 'a'),
(30, 'Yes,UI Exhausted', 13, 'b'),
(31, 'No', 13, 'c'),
(32, 'Yes', 14, 'a'),
(33, 'No', 14, 'b'),
(34, 'Yes', 15, 'a'),
(35, 'No', 15, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `referred_by`
--

CREATE TABLE `referred_by` (
  `id` int(10) NOT NULL,
  `referral_value` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referred_by`
--

INSERT INTO `referred_by` (`id`, `referral_value`) VALUES
(1, 'Not Applicable'),
(2, 'TAY');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'AGENCY_USER', 'AGENCY_USER', '', '2018-05-15 07:00:00', '2018-05-09 07:00:00'),
(8, 'AGENCY_ADMIN', 'AGENCY ADMIN', 'asdasdasd', '2018-05-01 07:00:00', '2018-05-29 07:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `start_date`, `end_date`, `user_type`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 1, 22, '2018-05-07', '2023-05-31', 'App\\User', '2018-05-07', '2018-05-07', 'c146652', 'c146652'),
(3, 1, 24, '2018-05-08', '2023-05-08', 'App\\User', '2018-05-08', '2018-05-08', 'c166373', 'RAM'),
(4, 8, 24, '2018-05-08', '2018-05-24', 'App\\User', '2018-05-08', '2018-05-08', 'c166373', NULL),
(5, 1, 25, '2018-05-08', '2023-05-08', 'App\\User', '2018-05-08', '2018-05-08', 'c166373', NULL),
(6, 1, 27, '2018-05-08', '2022-05-08', 'App\\User', '2018-05-08', '2018-05-08', 'e496632', 'Hubuser'),
(7, 1, 28, '2018-05-09', '2023-05-09', 'App\\User', '2018-05-09', '2018-05-09', 'c166373', NULL),
(8, 8, 28, '2018-05-09', '2018-05-17', 'App\\User', '2018-05-09', '2018-05-09', 'c166373', NULL),
(9, 1, 29, '2018-05-10', '2050-12-31', 'App\\User', '2018-05-10', '2018-05-29', 'c166373', 'c166373'),
(10, 1, 30, '2018-05-10', '2023-05-10', 'App\\User', '2018-05-10', '2018-05-10', 'c166373', NULL),
(11, 1, 32, '2018-05-10', '2050-12-31', 'App\\User', '2018-05-10', '2018-05-29', 'c146652', 'c166373'),
(12, 8, 29, '2018-05-10', '2050-12-31', 'App\\User', '2018-05-10', '2018-05-29', 'c166373', 'c166373'),
(13, 1, 33, '2018-05-10', '2050-12-31', 'App\\User', '2018-05-10', '2018-05-29', 'c166373', 'c166373'),
(14, 8, 33, '2018-05-10', '2050-12-31', 'App\\User', '2018-05-10', '2018-05-29', 'c166373', 'c166373'),
(15, 1, 34, '2018-05-10', '2050-12-31', 'App\\User', '2018-05-10', '2018-05-29', 'e496632', 'c166373'),
(16, 8, 34, '2018-05-10', '2050-12-31', 'App\\User', '2018-05-10', '2018-05-29', 'e496632', 'c166373'),
(17, 1, 35, '2018-05-10', '2050-12-31', 'App\\User', '2018-05-10', '2018-05-29', 'Doortest', 'c166373'),
(18, 1, 36, '2018-05-29', '2050-12-13', 'App\\User', '2018-05-29', '2018-05-29', 'e496632', 'c166373'),
(19, 1, 37, '2018-05-29', '2050-12-31', 'App\\User', '2018-05-29', '2018-05-29', 'Robin', 'c166373'),
(20, 1, 38, '2018-05-29', '2023-05-29', 'App\\User', '2018-05-29', '2018-05-29', 'e496632', NULL),
(21, 8, 38, '2018-05-29', '2050-12-31', 'App\\User', '2018-05-29', '2018-05-29', 'e496632', 'e496632'),
(22, 1, 39, '2018-05-29', '2023-05-29', 'App\\User', '2018-05-29', '2018-05-29', 'Goodwilluser', NULL),
(23, 8, 37, '2018-05-30', '2050-12-31', 'App\\User', '2018-05-30', '2018-05-30', 'c166373', NULL),
(24, 1, 40, '2018-05-30', '2023-05-30', 'App\\User', '2018-05-30', '2018-05-30', 'c166373', NULL),
(25, 1, 41, '2018-06-07', '2050-12-31', 'App\\User', '2018-06-07', '2018-06-07', 'c146652', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sup_districts`
--

CREATE TABLE `sup_districts` (
  `id` int(11) NOT NULL,
  `sup_district_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `training_statuses`
--

CREATE TABLE `training_statuses` (
  `id` int(11) NOT NULL,
  `training_status_name` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `training_statuses`
--

INSERT INTO `training_statuses` (`id`, `training_status_name`, `created_at`, `updated_at`) VALUES
(1, 'PENDING NOT SCHEDULED', '2018-06-12 11:00:00', '2018-06-12 16:00:00'),
(2, 'PENDING-IN TRAINING', '2018-06-12 13:00:00', '2018-06-12 18:00:00'),
(3, 'COMPLETED', '2018-06-12 17:00:00', '2018-06-12 21:00:00'),
(4, 'VOID', '2018-06-12 22:00:00', '2018-06-12 21:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `training_types`
--

CREATE TABLE `training_types` (
  `id` int(11) NOT NULL,
  `training_type_name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `training_types`
--

INSERT INTO `training_types` (`id`, `training_type_name`, `created_at`, `updated_at`) VALUES
(1, 'PET', '2018-06-12 11:00:00', '2018-06-12 13:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tse`
--

CREATE TABLE `tse` (
  `id` int(20) NOT NULL,
  `tse_value` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tse`
--

INSERT INTO `tse` (`id`, `tse_value`) VALUES
(1, 'Not Applicable'),
(2, 'TSE');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middle_initial` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `org_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no_1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` int(6) DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `need_password_change` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `firstname`, `lastname`, `middle_initial`, `email`, `org_type`, `phone_no_1`, `phone_no_2`, `address_1`, `city`, `state`, `zipcode`, `password`, `need_password_change`, `organization_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(23, 'Sujith Kothapally (c166373)', 'c166373', 'Sujith', 'Kothapally', NULL, 'SKothapally@wdacs.lacounty.gov', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$.GO3kDUVRXk0ph6ROPWj8O4YPpHPqN3pHqgrEUDkJjVTnVCQaJf16', NULL, NULL, 'j3P6bMutXzKsO3gTsa3qfupGieYEGJxZdqC1mxwQnaigYO57tnP4SvMBJlEv', '2018-05-08 18:41:06', '2018-05-23 16:40:13'),
(26, 'Carrie Cui (E496632)', 'e496632', 'Carrie', 'Cui', NULL, 'ccui@wdacs.lacounty.gov', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$7LyDWtZ.0eQuOKSEdfhd5O8LyZ4Fy3iwpoujyz55tG6hrTFWxZAD2', NULL, NULL, '7ANNQCESsV6X8aOVqwzpActRhgAxgaZ09q17bA8fCTuSLqbqRorZXB0TD2Z8', '2018-05-08 22:36:14', '2018-05-10 21:02:41'),
(29, 'Mark J', 'Josh', 'Mark', 'J', 'R', 'mark@gmail.com', 'AGENCY_USER', '9999999999', NULL, '730 PINE AVENUE, APT 402', 'LONG BEACH', 'CA', 90813, '$2y$10$fGNM0DcwGkh/IulKJMjEY.eOOrR9tArKkBx/3XIyLE0zElbevge1m', 'Y', 1099, 'xrzfEcXB80xLAUiPIZZAPJBW1LZEKBfBropKPoFaWYpaTI1ZkkBJEvhXKB15', '2018-05-10 17:55:53', '2018-06-08 02:02:40'),
(30, 'Kevin C', 'Chris', 'Kevin', 'C', 'R', 'kevin@gmail.com', 'AGENCY_USER', '998788888', NULL, '730 PINE AVENUE, APT 402', 'LONG BEACH', 'CA', 90813, '$2y$10$nTN.H9VZL5jNIGZGpQYJBefKY11QKgvcigZMTi.ZbcdRBx0KMyDg6', 'Y', 1093, 'Ox2QnaWBiK8FY1cXaPjZdoFb9mmD9cHQ05mqMYK3tzzv7pbTAA4T9x3aZUD7', '2018-05-10 17:57:39', '2018-06-13 23:04:46'),
(31, 'Balaram Madala (c146652)', 'c146652', 'Balaram', 'Madala', NULL, 'BMadala@wdacs.lacounty.gov', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$pfiUOyQxxaytPqVrMm3WP.TB58TozL..F8be1izcThPCYtH4EKwzm', NULL, NULL, 'e5JHnTvBPq4MKjwvADPvisUsOHfYv1KCVkSh2Rdm5KDntwOx4ES6pC05u4Ba', '2018-05-10 18:16:41', '2018-05-21 20:09:02'),
(32, 'test test', 'john', 'test', 'test', 'test', 'test1@gmail.com', 'AGENCY_USER', '9988877777', '9977902490', '3042 Livonia Avenue,Apt#D2', 'Los Angeles', 'CA', 90034, '$2y$10$cNG1/R37h0aQ4z35jSBv.Oqrl75d76ELSk9AHsnBxaddHR1mR2HxC', 'Y', 1093, 'fXt8bHBBcM3O33ARaSdVnKZjgDcJ1H0YAeXpeMBYCBUDaru024db9mhz4pZK', '2018-05-10 18:22:02', '2018-06-08 02:34:19'),
(33, 'Junior j', 'Robin', 'Junior', 'j', NULL, 'robin@gmail.com', 'AGENCY_USER', '8787878787', NULL, '121 long beach street', 'Long Beach', 'CA', 90815, '$2y$10$XnvH6Bti/uWYCkd29SZ6O.KDKKL4bsxbjOq6meCxtv1mtDEUeP1Be', 'Y', 1092, 'BSisSYMTcTvaM2x1nh9EQt92ihgLWPz9f6wJxupjqqAXMgQeBsobiL70qHrg', '2018-05-10 19:08:00', '2018-06-08 02:38:24'),
(34, 'Door of Hope User', 'Doortest', 'Door of', 'Hope User', NULL, 'ccui@test.lacounty.gov', 'AGENCY_USER', '2137384242', NULL, '3175 W. 6th Street', 'Los Angeles', 'CA', 90020, '$2y$10$/NSPI.xIs7cyyew2gN9p4.Wj3Jq4GJ6OUHNB5TKwhPPtvTkHbswtO', 'Y', 1014, 'sPNng2lzsDcoW9phkmPSOIEEOz7UNCbhyQlyp37z1w24zfsDmrPFdPR8gzLD', '2018-05-10 21:17:11', '2018-06-08 02:34:13'),
(35, 'Door of test', 'Doortest2', 'Door of', 'test', NULL, 'ccui@css.lacounty.org', 'AGENCY_USER', '213-738-4242', '213-785-7841', '3175 W. 6th Street', 'Los Angeles', 'CA', 90020, '$2y$10$6KE5yfVKgG/WPUyKSJR8YegEKGb2mUKlYArrBK8tGgAD2WfqZgQ42', 'Y', 1014, NULL, '2018-05-10 21:22:54', '2018-06-08 02:11:20'),
(36, 'Kevin test', 'Kevin', 'Kevin', 'test', NULL, 'kevin@gmail.com', 'AGENCY_USER', '6262364455', NULL, '3175 W. 6th Street', 'Los Angeles', 'CA', 90020, '$2y$10$l8PEUCG9guFv7b/4si2Czut2AoQjfWNSgEKsedJbN9XtBYBYkYu3e', 'Y', 1002, NULL, '2018-05-29 16:27:12', '2018-05-29 16:27:12'),
(37, 'test YOW', 'testYOW', 'test', 'YOW', NULL, 'yow@gmail.com', 'AGENCY_USER', '213-784-8522', NULL, '500 S. Main Ave', 'Alhambra', 'CA', 91803, '$2y$10$5TmKRenYMOZUikHv2IGaJ.7JWgnShzuBwJJD0FxaguyNRyVYbNGRC', 'N', 1092, NULL, '2018-05-29 16:45:50', '2018-05-29 16:46:48'),
(38, 'test user Goodwill', 'Goodwilluser', 'test user', 'Goodwill', NULL, 'goodwill@gmail.com', 'AGENCY_USER', '626-785-4563', NULL, '550 S. Vermont ave', 'Los Angeles', 'CA', 90020, '$2y$10$CNssmA9r0fhKB2nXKBrwquL/lFALcfbxqmri9J/sNtFKEUiSPMm9u', 'Y', 1080, NULL, '2018-05-29 23:29:39', '2018-06-08 02:37:32'),
(39, 'test goodwill', 'goodwilltest', 'test', 'goodwill', NULL, 'godd@gmail.com', 'AGENCY_USER', '626-452-1254', NULL, '550 S. Vermont Ave', 'Los Angeles', 'CA', 90020, '$2y$10$01F5tFwTlvl6xZSlXyvuzub9TVq9nZRRD7/KHb2M11BA/NEhXmYRC', 'Y', 1080, NULL, '2018-05-29 23:35:26', '2018-06-08 02:21:52'),
(40, 't ghosh', 'Thyag', 't', 'ghosh', NULL, 'g@gmail.com', 'AGENCY_USER', '222222222', NULL, '430', 'jjj', 'CA', 90020, '$2y$10$goB/xEXUVr2SIKiIz7cgeeEEcDh4aM6wLy6jEgtgQxPvMHSWaKGZ.', 'N', 1072, 'gMDLsd9pYI1TyqsArPosTXUnGfvrt714SU815CuzBIFLuVKtOYLKnoKDy3g1', '2018-05-30 16:54:36', '2018-06-09 20:42:31'),
(41, 'raj raj', 'raj', 'raj', 'raj', NULL, 'raj@gmail.com', 'AGENCY_USER', '76585685', '54436346', '3235235', '35325', 'CA', 32523, '$2y$10$/IynIYeTZsgLPvdZtKi8kO7Bw3vpgiYD2elw9cc1XVeyp8fY3ruwK', 'N', 1098, 'srz6TeqMRw61CPGw04bdU4tAeRpL69Wgy449Y33ysZsWesBkEgD5CGm6WzmD', '2018-06-07 22:24:29', '2018-06-08 02:40:38');

-- --------------------------------------------------------

--
-- Table structure for table `user_responsibility`
--

CREATE TABLE `user_responsibility` (
  `id` int(10) UNSIGNED NOT NULL,
  `Application_Name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Full_Name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `User_Name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Responsibility` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  `End_Date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_responsibility`
--

INSERT INTO `user_responsibility` (`id`, `Application_Name`, `Full_Name`, `User_Name`, `Responsibility`, `Start_Date`, `End_Date`, `created_at`, `updated_at`) VALUES
(1, 'one', 'Carrie', 'user name', 'Responsibility', '2018-04-03', '2018-04-03', NULL, '2018-04-06 00:54:25'),
(2, 'two', 'Raju', 'user name', 'Responsibility', '2018-04-03', '2018-04-03', NULL, NULL),
(3, 'three', 'Sujith', 'user name', 'Responsibility', '2018-04-03', '2018-04-03', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `worksites`
--

CREATE TABLE `worksites` (
  `id` int(11) NOT NULL,
  `worksite_name` varchar(200) DEFAULT NULL,
  `address_line_1` varchar(100) DEFAULT NULL,
  `address_line_2` varchar(100) DEFAULT NULL,
  `address_line_3` varchar(100) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `zip_code` varchar(7) DEFAULT NULL,
  `supervisory_district` varchar(100) DEFAULT NULL,
  `contact_person` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `worksite_sector` varchar(100) DEFAULT NULL,
  `city_or_county_department` varchar(100) DEFAULT NULL,
  `industry` varchar(100) DEFAULT NULL,
  `naics_code` varchar(50) DEFAULT NULL,
  `naics_description` varchar(150) DEFAULT NULL,
  `record_status` varchar(100) DEFAULT NULL,
  `ada_complied` varchar(30) DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `yep_agency_user`
--

CREATE TABLE `yep_agency_user` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `minitial` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone1` varchar(200) NOT NULL,
  `phone2` varchar(200) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(200) NOT NULL,
  `address3` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(50) NOT NULL,
  `createtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`ORGANIZATION_ID`);

--
-- Indexes for table `application_attachments`
--
ALTER TABLE `application_attachments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_form`
--
ALTER TABLE `application_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city_or_county_departments`
--
ALTER TABLE `city_or_county_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `document_types`
--
ALTER TABLE `document_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education_status`
--
ALTER TABLE `education_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ethinicity`
--
ALTER TABLE `ethinicity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funding_source`
--
ALTER TABLE `funding_source`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `highest_grade_completed`
--
ALTER TABLE `highest_grade_completed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `pet_status`
--
ALTER TABLE `pet_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `race`
--
ALTER TABLE `race`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radio_buttons`
--
ALTER TABLE `radio_buttons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `radio_button_options`
--
ALTER TABLE `radio_button_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `sup_districts`
--
ALTER TABLE `sup_districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_statuses`
--
ALTER TABLE `training_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training_types`
--
ALTER TABLE `training_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user_responsibility`
--
ALTER TABLE `user_responsibility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `worksites`
--
ALTER TABLE `worksites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `yep_agency_user`
--
ALTER TABLE `yep_agency_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_attachments`
--
ALTER TABLE `application_attachments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application_form`
--
ALTER TABLE `application_form`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `city_or_county_departments`
--
ALTER TABLE `city_or_county_departments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `document_types`
--
ALTER TABLE `document_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `education_status`
--
ALTER TABLE `education_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ethinicity`
--
ALTER TABLE `ethinicity`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `funding_source`
--
ALTER TABLE `funding_source`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=212;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `highest_grade_completed`
--
ALTER TABLE `highest_grade_completed`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pet_status`
--
ALTER TABLE `pet_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `race`
--
ALTER TABLE `race`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `radio_buttons`
--
ALTER TABLE `radio_buttons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `radio_button_options`
--
ALTER TABLE `radio_button_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `sup_districts`
--
ALTER TABLE `sup_districts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `training_statuses`
--
ALTER TABLE `training_statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `training_types`
--
ALTER TABLE `training_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `user_responsibility`
--
ALTER TABLE `user_responsibility`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `worksites`
--
ALTER TABLE `worksites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `yep_agency_user`
--
ALTER TABLE `yep_agency_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
