-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.9 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for zibonale
CREATE DATABASE IF NOT EXISTS `zibonale` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `zibonale`;

-- Dumping structure for table zibonale.about_us
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `vision` varchar(1000) DEFAULT NULL,
  `mission` varchar(1000) DEFAULT NULL,
  `banner` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.about_us: ~0 rows (approximately)
/*!40000 ALTER TABLE `about_us` DISABLE KEYS */;
INSERT INTO `about_us` (`id`, `title`, `description`, `vision`, `mission`, `banner`) VALUES
	(1, 'Zibonele FM 98.2 ', 'Radio Zibonele 98.2 FM has got a very unique market; in the province of the Western Cape We are the only Community Radio Station that broadcast 80% of its programmes in IsiXhosa 24 hours a day in the Province. Level of education within the areas of our broadcast is relatively low, people tune in to our Radio Station as it is one of their powerful sources of information that is brought to them in language they understand. We structure our programmes to suit and appeal directly to this wonderful audience. <br><br>that is brought to them in language they understand. We structure our programmes to suit and appeal directly to this wonderful audience.&nbsp;<br><br><br>', 'Zibonele strives to be the best community radio station in the peninsula region, responsive to community needs and development through public broadcasting.<br><br>Radio Zibonele strives to be the best community radio station in the peninsula region, responsive to community needs and development through public broadcasting.<br>', 'As a trusted catalyst for lifelong learning, Radio Zibonele public broadcasting engages and enriches our community through distinctive programmes and services .<br><br>As a trusted catalyst for lifelong learning, Radio Zibonele public broadcasting engages and enriches our community through distinctive programmes and services .<br>', '');
/*!40000 ALTER TABLE `about_us` ENABLE KEYS */;

-- Dumping structure for table zibonale.broadcasts
CREATE TABLE IF NOT EXISTS `broadcasts` (
  `bc_id` int(10) NOT NULL AUTO_INCREMENT,
  `bc_name` varchar(250) DEFAULT NULL,
  `bc_description` varchar(500) DEFAULT NULL,
  `bc_icon` varchar(150) DEFAULT '',
  PRIMARY KEY (`bc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.broadcasts: ~10 rows (approximately)
/*!40000 ALTER TABLE `broadcasts` DISABLE KEYS */;
INSERT INTO `broadcasts` (`bc_id`, `bc_name`, `bc_description`, `bc_icon`) VALUES
	(1, 'Umyalezo Wosuku', '', 'young-radio-announcer.jpg'),
	(2, ' Breakfastshow', 'Also see unicast, multicast, and anycast. In general, to broadcast (verb) is to cast or throw forth something in all directions at the same time. A radio or television broadcast (noun) is a program that is transmitted over airwaves for public reception by anyone with a receiver tuned to the right signal channel.', 'radio-studi-microphones.jpg'),
	(3, 'Health and Esithebeni ', 'Also see unicast, multicast, and anycast. In general, to broadcast (verb) is to cast or throw forth something in all directions at the same time. A radio or television broadcast (noun) is a program that is transmitted over airwaves for public reception by anyone with a receiver tuned to the right signal channel.', ''),
	(4, 'Hlalethembeni ', 'Also see unicast, multicast, and anycast. In general, to broadcast (verb) is to cast or throw forth something in all directions at the same time. A radio or television broadcast (noun) is a program that is transmitted over airwaves for public reception by anyone with a receiver tuned to the right signal channel.', ''),
	(5, 'Developmental Issues ', 'Also see unicast, multicast, and anycast. In general, to broadcast (verb) is to cast or throw forth something in all directions at the same time. A radio or television broadcast (noun) is a program that is transmitted over airwaves for public reception by anyone with a receiver tuned to the right signal channel.', ''),
	(6, 'Celingoma     Ndikudlalele', 'Also see unicast, multicast, and anycast. In general, to broadcast (verb) is to cast or throw forth something in all directions at the same time. A radio or television broadcast (noun) is a program that is transmitted over airwaves for public reception by anyone with a receiver tuned to the right signal channel.', ''),
	(7, 'Unyango Lwesintu', 'Also see unicast, multicast, and anycast. In general, to broadcast (verb) is to cast or throw forth something in all directions at the same time. A radio or television broadcast (noun) is a program that is transmitted over airwaves for public reception by anyone with a receiver tuned to the right signal channel.', ''),
	(8, 'Miliboliso ', 'Also see unicast, multicast, and anycast. In general, to broadcast (verb) is to cast or throw forth something in all directions at the same time. A radio or television broadcast (noun) is a program that is transmitted over airwaves for public reception by anyone with a receiver tuned to the right signal channel.', ''),
	(9, ' Isiphithiphithi', 'Also see unicast, multicast, and anycast. In general, to broadcast (verb) is to cast or throw forth something in all directions at the same time. A radio or television broadcast (noun) is a program that is transmitted over airwaves for public reception by anyone with a receiver tuned to the right signal channel.', ''),
	(10, 'Sithobe isandla sakho Yehova', 'Also see unicast, multicast, and anycast. In general, to broadcast (verb) is to cast or throw forth something in all directions at the same time. A radio or television broadcast (noun) is a program that is transmitted over airwaves for public reception by anyone with a receiver tuned to the right signal channel.', '');
/*!40000 ALTER TABLE `broadcasts` ENABLE KEYS */;

-- Dumping structure for table zibonale.broadcast_days
CREATE TABLE IF NOT EXISTS `broadcast_days` (
  `bcd_id` int(10) NOT NULL AUTO_INCREMENT,
  `bcd_name` varchar(250) DEFAULT NULL,
  `bcd_from` date DEFAULT NULL,
  `bcd_to` date DEFAULT NULL,
  `bcd_description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`bcd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.broadcast_days: ~8 rows (approximately)
/*!40000 ALTER TABLE `broadcast_days` DISABLE KEYS */;
INSERT INTO `broadcast_days` (`bcd_id`, `bcd_name`, `bcd_from`, `bcd_to`, `bcd_description`) VALUES
	(1, 'Mon-Fri', '2017-08-06', '2017-08-06', NULL),
	(2, 'Mon-Thurs', '2017-08-06', '2017-08-06', NULL),
	(3, 'Monday', '2017-08-06', '2017-08-06', NULL),
	(4, 'Tues & Thurs', '2017-08-06', '2017-08-06', NULL),
	(5, 'Wednesday', '2017-08-06', '2017-08-06', NULL),
	(6, 'Friday', '2017-08-06', '2017-08-06', NULL),
	(7, 'Thursday', '2017-08-06', '2017-08-06', NULL),
	(8, 'Mon, Friday & Saturday', '2017-08-06', '2017-08-06', NULL);
/*!40000 ALTER TABLE `broadcast_days` ENABLE KEYS */;

-- Dumping structure for table zibonale.broadcast_presenters
CREATE TABLE IF NOT EXISTS `broadcast_presenters` (
  `bp_id` int(10) NOT NULL AUTO_INCREMENT,
  `bp_ref_bc` int(10) DEFAULT NULL,
  `bp_ref_pres` int(10) DEFAULT NULL,
  PRIMARY KEY (`bp_id`),
  KEY `FK__broadcasts` (`bp_ref_bc`),
  KEY `FK_broadcast_presenters_presenters` (`bp_ref_pres`),
  CONSTRAINT `FK__broadcasts` FOREIGN KEY (`bp_ref_bc`) REFERENCES `broadcasts` (`bc_id`),
  CONSTRAINT `FK_broadcast_presenters_presenters` FOREIGN KEY (`bp_ref_pres`) REFERENCES `presenters` (`pr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.broadcast_presenters: ~9 rows (approximately)
/*!40000 ALTER TABLE `broadcast_presenters` DISABLE KEYS */;
INSERT INTO `broadcast_presenters` (`bp_id`, `bp_ref_bc`, `bp_ref_pres`) VALUES
	(1, 1, 2),
	(2, 1, 2),
	(3, 2, 3),
	(4, 3, 2),
	(5, 4, 3),
	(7, 6, 4),
	(8, 7, 2),
	(10, 9, 3),
	(11, 10, 2);
/*!40000 ALTER TABLE `broadcast_presenters` ENABLE KEYS */;

-- Dumping structure for table zibonale.broadcast_times
CREATE TABLE IF NOT EXISTS `broadcast_times` (
  `bct_id` int(10) NOT NULL AUTO_INCREMENT,
  `bct_name` varchar(250) DEFAULT NULL,
  `bct_from` time DEFAULT NULL,
  `bct_to` time DEFAULT NULL,
  `bct_description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`bct_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.broadcast_times: ~12 rows (approximately)
/*!40000 ALTER TABLE `broadcast_times` DISABLE KEYS */;
INSERT INTO `broadcast_times` (`bct_id`, `bct_name`, `bct_from`, `bct_to`, `bct_description`) VALUES
	(1, '05:30-06:00', '05:30:00', '06:00:00', NULL),
	(2, '06:00-09:00', '06:00:00', '09:00:00', NULL),
	(3, '12:00-15:00', '12:00:00', '15:00:00', NULL),
	(4, '11:00-12:00', '11:00:00', '12:00:00', NULL),
	(5, '15:00-18:00', '15:00:00', '18:00:00', NULL),
	(6, '19:00-20:00', '19:00:00', '20:00:00', NULL),
	(7, '20:00-24:00', '20:00:00', '24:00:00', NULL),
	(8, '24:00-03:00', '24:00:00', '03:00:00', NULL),
	(9, '03:00-05:00', '03:00:00', '05:00:00', NULL),
	(10, '05:00-05:30', '05:00:00', '05:30:00', NULL),
	(11, '19:00- 21:00', '19:00:00', '21:00:06', NULL),
	(12, '09:00-12:00', '09:00:00', '12:00:00', NULL);
/*!40000 ALTER TABLE `broadcast_times` ENABLE KEYS */;

-- Dumping structure for table zibonale.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `cellphone` varchar(50) DEFAULT NULL,
  `tell` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `street_name` varchar(50) DEFAULT NULL,
  `suburb_name` varchar(100) DEFAULT NULL,
  `street_number` varchar(100) DEFAULT NULL,
  `facebook` varchar(500) DEFAULT NULL,
  `twitter` varchar(500) DEFAULT NULL,
  `instagram` varchar(500) DEFAULT NULL,
  `google` varchar(500) DEFAULT NULL,
  `youtube` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.contacts: ~0 rows (approximately)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `cellphone`, `tell`, `email`, `street_name`, `suburb_name`, `street_number`, `facebook`, `twitter`, `instagram`, `google`, `youtube`) VALUES
	(1, '', '021812569', 'info@zibonelefm.co.za', 'Ngcwalazi Dr, Village 1 South', 'Khayelitsha', '17 ', 'https://www.facebook.com/ZiboneleFM', 'https://twitter.com/', 'https://www.instagram.com/zibonelefm/', 'https://plus.google.com/', 'https://twitter.com/ZiboneleFM98');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table zibonale.departments
CREATE TABLE IF NOT EXISTS `departments` (
  `dep_id` int(10) NOT NULL AUTO_INCREMENT,
  `dep_name` varchar(500) DEFAULT NULL,
  `dep_description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.departments: ~2 rows (approximately)
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` (`dep_id`, `dep_name`, `dep_description`) VALUES
	(1, 'management', NULL),
	(3, 'marketing', NULL);
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;

-- Dumping structure for table zibonale.gallery
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(10) NOT NULL,
  `image_file` varchar(100) DEFAULT NULL,
  `image_heading` varchar(100) DEFAULT NULL,
  `image_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.gallery: ~23 rows (approximately)
/*!40000 ALTER TABLE `gallery` DISABLE KEYS */;
INSERT INTO `gallery` (`id`, `image_file`, `image_heading`, `image_description`) VALUES
	(0, '1.jpg', 'Mandela Day 2017', 'At Manyano High School'),
	(1, '2.jpg', 'Youth Debate', 'Getting the Youth together'),
	(2, '3.jpg', 'Gospel Event', 'Thoba isandla sakho yehova'),
	(3, '4.jpg', 'Vodacom Mandela Day', 'Vodacom Mandela Day gifts packing'),
	(4, '5.jpg', 'Gospel Event', 'Thoba isandla sakho yehova'),
	(5, '6.jpg', 'Mandela Day 2017', 'At Manyano High School'),
	(6, '7.jpg', 'Gospel Event', 'Thoba isandla sakho yehova'),
	(7, '8.jpg', 'Vodacom Mandela Day', 'Vodacom Mandela Day gifts packing'),
	(8, '9.jpg', 'Youth Debate', 'Getting the Youth together'),
	(9, '10.jpg', 'Mandela Day 2017', 'At Manyano High School'),
	(10, '11.jpg', 'Gospel Event', 'Thoba isandla sakho yehova'),
	(11, '12.jpg', 'Gospel Event', 'Thoba isandla sakho yehova'),
	(12, '13.jpg', 'Youth Debate', 'Getting the Youth together'),
	(13, '14.jpg', 'Youth Debate', 'Getting the Youth together'),
	(14, '15.jpg', 'Vodacom Mandela Day', 'Vodacom Mandela Day gifts packing'),
	(15, '16.jpg', 'Gospel Event', 'Thoba isandla sakho yehova'),
	(16, '17.jpg', 'Youth Debate', 'Getting the Youth together'),
	(17, '18.jpg', 'Mandela Day 2017', 'At Manyano High School'),
	(18, '19.jpg', 'Vodacom Mandela Day', 'Vodacom Mandela Day gifts packing'),
	(19, '20.jpg', 'Gospel Event', 'Thoba isandla sakho yehova'),
	(20, '21.jpg', 'Youth Debate', 'Getting the Youth talk about their surrondings '),
	(21, '22.jpg', 'Gospel Event', 'Thoba isandla sakho yehova'),
	(22, '23.jpg', 'Gospel Event', 'Thoba isandla sakho yehova');
/*!40000 ALTER TABLE `gallery` ENABLE KEYS */;

-- Dumping structure for table zibonale.lineupschedule
CREATE TABLE IF NOT EXISTS `lineupschedule` (
  `id` int(10) NOT NULL,
  `program_name` varchar(100) NOT NULL,
  `program_day_schedule` varchar(100) DEFAULT NULL,
  `program_time` varchar(50) NOT NULL,
  `program_host` varchar(1000) NOT NULL DEFAULT '0',
  `program_desc` varchar(1000) NOT NULL,
  `program_image` varchar(70) DEFAULT NULL,
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.lineupschedule: 39 rows
/*!40000 ALTER TABLE `lineupschedule` DISABLE KEYS */;
INSERT INTO `lineupschedule` (`id`, `program_name`, `program_day_schedule`, `program_time`, `program_host`, `program_desc`, `program_image`) VALUES
	(1, 'Umyalezo Wosuku', 'Mon-Fri', '05:30-06:00', 'Rev Vellem', 'Morning Prayer to start the day', 'Umyalezo_Wosuku.jpg'),
	(2, 'Ilitha Lakho Breakfastshow', 'Mon-Fri ', '06:00-09:00', 'Zweli Nokhatywa & Roger Skade', 'It’s a magazine programme that provides the listeners with Information, Education, entertainment and make them happy while they prepare for work, school or whatever they need to do for the day.', 'Ilitha_Lakho_Breakfastshow.jpg'),
	(3, 'Health and Esithebeni Nosapho ', 'Mon-Thurs', '09:00-12:00', 'Nolundi Pama & Tabita Busani', 'The first hour is about health issues education and necessary information that will be of benefit to the community. Esithebeni Nosapho is a talkshow dealing with women issues, which includes education,advice and information.', 'Health_and_Esithebeni_Nosapho.jpg'),
	(4, 'Hlalethembeni ', 'Monday', '12:00-15:00', 'Zanele Shwane', 'The programme is meant to comfort and motivate those who are sick and those who are experiencing difficulties in their lives in general.', 'Hlalethembeni.jpg'),
	(6, 'Developmental Issues ', 'Tues & Thurs', '12:00- 15:00', 'Bongani Mathenjwa & Sisipho Geni', 'The programme is a talkshow that provides information through interviews regarding developmental projects and plans in the communities we serve.', 'Developmental_Issues.jpg'),
	(7, 'Celingoma     Ndikudlalele', 'Wednesday', '12:00-15:00', 'Bongani Mathenjwa & Sisipho Geni', 'This is a music programme where the listeners are encouraged to request a song of their choice and it will be played immediately.', 'Celingoma_Ndikudlalele.jpg'),
	(8, 'Unyango Lwesintu', 'Fri ', '11:00-12:00', 'Sivuyile Wayi', 'The programme provides African traditional healing methods and education.', 'Unyango_Lwesintu.jpg'),
	(9, 'Friday Dedications', 'Friday', '12:00-15:00', 'Bongani Mathenjwa & Sisipho Geni', 'Listeners dedications through phone calls, whatsapp, sms and Facebook', 'Friday_Dedications.jpg'),
	(10, 'Isiphithiphithi', 'Mon-Thurs', '15:00-18:00', 'Fundi Ntshwanti & Samkelo Nqayi', 'It’s the Afternoon Drive time magazine programme, with handy information and tips, traffic, weather and sport updates. Educational and entertaining with light topics and interviews.', 'Isiphithiphithi.jpg'),
	(11, 'Sithobe isandla sakho Yehova', 'Thursday', '9h:00 – 12h:00', 'Pheliswa Foss', 'This is a women’s religious programme', 'Sithobe_isandla_sakho_Yehova.jpg'),
	(12, 'Zibonele Top 30', 'Friday', '15:00-18:00', 'Ntobsie Mcetywa', 'Music programme that counts down the Top 30 songs on the charts.', 'Zibonele_Top_30.jpg'),
	(13, 'Ezemidlalo', 'Mon, Fri ', '19:00-20:00', 'Roger, Lifa, Nanganso, Sisanda', 'Sports programme that provides updates, interviews and general information about the different sporting codes and the National Teams.', 'Ezemidlalo.jpg'),
	(14, 'Masifundisane ', 'Monday', '20:00-24:00', 'Lifa Gushman', 'It’s is an educational programme about general issues affecting the community', 'Masifundisane.jpg'),
	(15, 'Ndikuthembis’  uthando', 'Tuesday ', '20:00-24:00', 'Tabita Busani & Lifa Gushman', 'It’s a talkshow that encourages people to love one another and share heart-warming love stories to curb violence against women and children as well.', 'Ndikuthembis_uthando.jpg'),
	(16, 'Ingcambu Zevangeli', 'Wednesday', '20:00-24:00', 'Rev Ntobeko Gijana', 'This is a religious programme where religious related matters are debated', 'Ingcambu_Zevangeli.jpg'),
	(17, 'Intlalo Yomtshato ', 'Thursday', '20:00-24:00', 'Rev Ntobeko Gijana', 'The programme encourages married couples to enjoy the beautiful institution of marriage, by living in harmony.', 'Intlalo_Yomtshato.jpg'),
	(18, 'Ezidla Umzi ', 'Mon- Fri', '24:00-03:00', 'Sivuyile Wayi', 'Topical and current issues affecting the community are discussed.', 'Ezidla_Umzi.jpg'),
	(19, 'Itshayile ', 'Mon-Fri', '03:00-05:00', 'Onke Jalamba', 'Daily morning wakeup call – encourages listeners to go to work/school or about their daily errands.', 'Itshayile.jpg'),
	(20, 'Ezakuthi Iingoma', 'Friday ', '19:00- 21:00', 'Zolani Sunduza & Masichule Sithole', 'Traditional music programme “Maskandi” genre', 'Ezakuthi_Iingoma.jpg'),
	(21, 'Ayatshis’ Amateki', 'Friday ', '21:00- 24:00', 'Zweli Nokhatywa', 'Music programme that plays the golden oldies from the eighties and nineties.', 'Ayatshis_Amateki.jpg'),
	(22, 'Sgubhu SeKhasi', 'Friday', '24:00-03:00', 'Ntobsie Mcetywa & Bounce Gampu', 'Music programme for party animals', 'Sgubhu_SeKhasi.jpg'),
	(23, 'Sigu’ guth’ unxhweme', 'Saturday', '09:00-12:00', 'Siyaxola Sobantu', 'Traditional music programme.', 'Sigu_guth_unxhweme.jpg'),
	(24, 'Reggae ', 'Saturday', '12:00-13:00', 'Zolani Sunduza', 'Reggae music programme.', 'Reggae.jpg'),
	(25, 'Unako ', 'Saturday ', '13:00-15:00', 'Fundi Ntshwanti', 'The programme deals with issues affecting people living with disabilities and youth issues.', 'Unako.jpg'),
	(26, 'iSisele Solwazi', 'Saturday ', '15:00-18:00', 'Sivuyile Wayi', 'The programme is an educational and informative traditional programme. ', 'iSisele_Solwazi.jpg'),
	(27, 'Yonwaba Nathi', 'Saturday', '19:30- 21:00', 'Aaron Madikane', 'A musical programme that mixes contemporary and old school afro pop and Kwaito.', 'Yonwaba_Nathi.jpg'),
	(28, 'Ezinchamis’ Umxhelo ', 'Sunday', '24:00-03:00', 'Mvuyisi Mphakathi', 'The programme plays smooth Rhythm and Blues music.', 'Ezinchamis_Umxhelo.jpg'),
	(29, 'Masivuke ', 'Sunday', '03:00-05:00', 'Bongani Mathenjwa', 'Programme encourages people to wake up and go to church.', 'Masivuke.jpg'),
	(30, 'Masibuyele kuYehova', 'Sunday', '05:30-08:00', 'Rev Cebisile Vellem', 'The programme is meant to motivate people to get closer to God.', 'Masibuyele_kuYehova.jpg'),
	(32, 'Umntwana Likhamva ', 'Saturday', '08:00-09:00', 'Ntobsie Mcetywa', 'It’s a children’s programme that’s educational and entertaining.', 'Umntwana_Likhamva.jpg'),
	(33, 'Sunday Chill', 'Sunday ', '09:00-12:00', 'Zolani Sunduza', 'The music programme plays cool  mellow music and R&B', 'Sunday_Chill.jpg'),
	(34, 'Iikwayala Zethu ', 'Sunday', '12:00-14:00', 'Ntobsie Mcetywa', 'Choral music programme', 'Iikwayala_Zethu.jpg'),
	(35, 'uHadi Lwakho', 'Sunday', '14:00-16:00', 'Aaron Madikane', 'Jazz music programme', 'uHadi_Lwakho.jpg'),
	(36, 'Ebukhoneni Bakhe', 'Sunday', '16:00-18:00', 'Nolundi Pama', 'Worship music programme for a Sunday afternoon.', 'Ebukhoneni_Bakhe.jpg'),
	(37, 'Imfuna Lwazi NgeZopolitiko', 'Sunday', '18h:00', 'Zweli Nokhatywa & Lusindiso Mayambela', 'Political education programme', 'Imfuna_Lwazi_NgeZopolitiko.jpg'),
	(38, 'Uhlangulo Lomphefumlo', 'Sunday', '20:00-24:00', 'Rev Ntobeko Gijana', 'Revival programme that preaches the word of GOD', 'Uhlangulo_Lomphefumlo.jpg'),
	(39, 'Ezicamis’ umxhelo', 'Monday', '24:00-03:00', 'Mvuyisi Mphakathi', 'Rhythm and Blues smooth music programme', 'Ezicamis_umxhelo.jpg'),
	(40, 'Isingqi saseKhaya', 'Saturday ', '03:00-05:00', 'Masichule Sithole', 'African Beat music programme.', 'Isingqi_saseKhaya.jpg'),
	(41, 'Inkqubo Ndaba Yezabahlali', 'Mon & Thursday', '18h:00 – 19h:00', 'Xolisa Sindaphi', 'Music programme that plays the golden oldies from the eighties and nineties.', 'Inkqubo_Ndaba_Yezabahlali.jpg');
/*!40000 ALTER TABLE `lineupschedule` ENABLE KEYS */;

-- Dumping structure for table zibonale.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_cat` int(10) NOT NULL DEFAULT '1',
  `title` varchar(1000) DEFAULT NULL,
  `subtitle` varchar(1000) DEFAULT NULL,
  `published_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `link` varchar(500) DEFAULT NULL,
  `contents` mediumtext,
  `sumary` varchar(1000) DEFAULT NULL,
  `ref_type_id` int(10) DEFAULT '1',
  `hide` int(10) DEFAULT '0',
  `image` varchar(500) DEFAULT 'no_image.png',
  `view` int(11) DEFAULT '0',
  `author` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_news_news_types` (`ref_type_id`),
  KEY `FK_news_users` (`author`),
  KEY `FK_news_news_categories` (`ref_cat`),
  CONSTRAINT `FK_news_news_categories` FOREIGN KEY (`ref_cat`) REFERENCES `news_categories` (`cat_id`),
  CONSTRAINT `FK_news_news_types` FOREIGN KEY (`ref_type_id`) REFERENCES `news_types` (`type_id`),
  CONSTRAINT `FK_news_users` FOREIGN KEY (`author`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.news: ~3 rows (approximately)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `ref_cat`, `title`, `subtitle`, `published_date`, `link`, `contents`, `sumary`, `ref_type_id`, `hide`, `image`, `view`, `author`) VALUES
	(1, 1, 'Fatal attraction', 'Amanda’s aunt, Nomonde Myeki, says the killing of her niece and the subsequent turn of events brought a lot of misery to the family.', '2017-09-19 09:05:55', 'fatal-attraction', '<p>A Langa family is hoping to get all the answers when the man accused of killing their daughter goes on trial.</p><p>Buhle Mkaliphi, 31, made his second court appearance at the Khayelitsha Regional Court on Tuesday September 12 for allegedly killing his girlfriend, Amanda Myeki.</p><p>He will make his next court appearance on Tuesday October 17.</p><p>The 26-year-old Langa woman was found dead at Mr Mkaliphi’s home in Ekuphumleni, in Khayelitsha, on Sunday September 3.</p><div><div></div></div><p>Her boyfriend, with whom she has a one-year-old son, was arrested the next day.</p><p>He made his first court appearance on Tuesday September 5, but was remanded in custody at Pollsmor prison.</p><p>It is unclear what led to the killing, but Amanda’s body was allegedly found laying on the floor in her boyfriend’s room.</p><p>The killing has raised the ire of Amanda’s relatives. The family says the pain of her death is too hard to bear.</p><p>A livid aunt, Nomonde Myeki, said the couple had been dating for a long time.</p><p>Nomonde said the family was devastated by the murder, particularly considering that her niece allegedly died at the hands of somebody who was meant to love her.</p><p>Nomonde said Amanda had left her home on Saturday with her boyfriend and numerous attempts to get hold of her on Sunday were in vain.</p><p>“She spent most of her time there, up to three days a week,” she said.</p><p>“I wanted her to come back because she had left the child, but her phone was not answered. I even sent her a message.”</p><p>Nomonde said later in the day they received a call from a relative who stayed close to Amanda’s boyfriend, informing them that she was dead.</p><p>She said they immediately rushed to Khayelitsha, but when they arrived at the crime scene the house was locked. “We wanted to see the place where she was killed, but the homeowner was very rude to us. We were treated like criminals,” said Nomonde.</p><p>While the circumstances surrounding the death remained a mystery, the Myeki family believes the accused’s mother has some questions to answer. “She knows what happened to our child. We knew there were some issues in their relationship, but we never thought it would get to this point,” said Nomonde.</p><p>“I would love to hear directly from them what happened and they must not lie.” Amanda’s mother was too heartbroken to talk.</p><p>Police spokesperson Constable Xoliswa Nyalambisa said the police investigation into the killing was ongoing. “But we are opposing his bail application,” she said. “We would not want a situation where we would have to look for him again.”</p>', NULL, 1, 0, 'no_image.png', 0, NULL),
	(11, 1, 'PPG Langa impresses at u-19 Premier Cup', 'Project Playground (PPG) Langa produced another excellent performance in this year’s Bayhill under-19 Premier Cup, going all the way to the quarter-finals, before losing 4-0 against eventual winners Supersport United at Erica Park in Belhar at the weekend.', '2017-09-19 09:11:42', 'ppg-langa-impresses-at-u-19-premier-cup', '<p>Project Playground (PPG) Langa produced another excellent performance in this year’s Bayhill under-19 Premier Cup, going all the way to the quarter-finals, before losing 4-0 against eventual winners Supersport United at Erica Park in Belhar at the weekend.</p><p>The side, however, didn’t walk away empty-handed as they won the competition’s midsection title, beating 2015 champions, Glendene United 1-0 in the final, on Easter Monday.</p><p>Their best performance of the competition, however, came when they sent six time champions and favourites, Ajax Cape Town, home in the last 16.</p><p>In what proved to be one of the best matches of the competition, coach Gareth Ncaca’s side showed no respect for their highly fancied opponents. The star-studded Ajax squad - which had first team players Lutando Mateza, Sirgio Kammies and rising star Sonwabile Mfecane - was caught off guard as PPG came at them with pace and skill. The Langa side went on to win 3-1 following a dramatic penalty shootout.</p><div><div></div></div><p>PPG have proved, over the years, to be Ajax’s nemesis in this competition. In 2015, when they made their first appearance at the competition, Ncaca’s charges qualified for the last 16 at the expense of the then champions Ajax.</p><p>Saturday’s last 16 encounter was a highly contested affair and the score, on regulation time, was goalless. The sides went to extra time and, in a dramatic turn of events, reigning Safa-Cape Town referee of the year Akhona Ndzingo, from Site C, showed Ajax’s Sirgio Kimmies a red card, following a reckless tackle from behind.</p><p>The match had to be decided on penalties after neither side could break the deadlock.</p><p>The penalties themselves were tense and Ajax’s Luke Vester was the first to take a spot kick. The youngster made no mistake, making it 1-0 for his side. Awonke Mlanjeni converted PPG’s first spot kick to make it 1-all. The pressure was now on Ajax’s Jay-Dee Adams. The youngster looked casual and that proved suicidal as he missed the target.</p><p>It was, by then, PPG’s chance to take the advantage. And, they did exactly that, with Buzwe Bam making it 2-1. Ajax, at that point, had to score their next spot kick to keep them in the game but PPG goalkeeper, Kwanele Gongxeka, had other ideas, saving Bonga Dladla’s penalty. And, to make matters more difficult for them, Samkelo Mkiva scored PPG’s third goal. A save by Gongxeka against Ajax’s next spot kick would take PPG to the quarters, and he did exactly that, denying Ajax golden boy, Sonwabile Mfecane the opportunity to take his side to the quarter-finals against last year’s champions, Supersport United, and kicking Ajax out of the championship stages of the competition.</p><p>Ncaca said he was aware that his side could match Ajax on a man-to-man basis, which resulted in them focusing on teamwork.</p><p>“All we had to do was to stick to the game plan and work for each other. We also didn’t want to sit back and defend, as that would have been suicidal. So, we attacked as a team and used our speedy wingers to run at them. That worked as Ajax got frustrated,” said Ncaca</p>', NULL, 1, 0, 'no_image.png', 0, NULL),
	(12, 1, 'Madosini shares her love for traditional music', 'Madosini plays uhadi. The instrument is made up of a calabash, which must be pressed to the flesh to produce the sound.', '2017-09-19 09:17:20', 'madosini-shares-her-love-for-traditional-music', '<p>The black people’s culture and heritage will soon be a thing of the past if nothing is done to preserve it.</p><p>In fact some important cultural traditions have already lost their true meaning, that is according to renowned traditional musician Latozi Manqineni, better known as Madosini.</p><p>Madosini, who has made a name for herself locally and internationally through her art of playing traditional music instruments uhadi and umrubhe, said this type of music could disappear if nothing was done.</p><p>While the two instruments have a deep-rooted history in Xhosa traditions, Madosini is arguably the only remaining master of playing them.</p><div><div></div></div><p>Growing up in the rural areas of the former Transkei with absolutely no educational background, from the age of 12 Madosini has ensured that the instruments remain relevant in today’s society.</p><p>With the assistance of another traditional musician, Dizu Plaatjies, Madosini moved to Cape Town to spread the word. Since then, she has made a name for herself.</p><p>She said her greatest desire was to see the instruments being played when she can no longer play them.</p><p>Last year saw the realisation of her dream, when the Madosini Indigenous Instruments Legacy Project teamed up with Calabash Storytellers to educate young people about the instruments.</p><p>While she believes that it was a good start by well-known actor Andrea Dondolo, she said more was needed.</p><p>In an interview with Vukani as we celebrate Heritage Month, the multi-award winner was at pains as she narrated her concerns regarding black traditions and cultural practises.</p><p>“How is this (interview) going to help?” she asked. “It is not going to change my life because there is no interest in this kind of music in our country. Overseas people are more interested in it. White people like this music a lot. Some travelled from as far as Swirtzeland to learn about it.”</p><p>Madosini said the worst thing would be for the music to be completely wiped from South African borders and later return as something South Africans have to pay for. While she supports the need for people to be educated, she cautioned against extinction of black people’s culture. “The people who write down everything is the white people,” she said. “We had our way of doing things and survived. But all that is now going away. We are giving it away and the white people are taking it.”</p><p>While she was initially against relocating to Cape Town because of “thugs in urban areas”, she said the move was a blessing in disguise.</p><p>“It was not a mistake when God brought me here at an old age, he wanted other people to benefit,” she said. “Through me He brought bread to other people as well. The sad thing is when people eat that bread and not share with me. I don’t mind even if you get a loaf and give me a slice or you cook your meat and give me the gravy and tell me that the meat burnt up. I will eat.”</p><p>She said while she continued to rake in awards, very little went into her bank account. However, she was full of praises for Ms Dondolo.</p><p>“She has been so wonderful to me,” she said. “When I reached out to her, she listened and assisted me. Today we have children who have learnt this.”</p><p>Commenting on her relationship with Madosini, Ms Dondolo said she always appreciated her music. Despite all the challenges Madosini encountered in the industry, Ms Dondolo hailed her as the epitome of hope for many in the music industry. “She has gone through a rough patch in the music industry, but she has a very good heart, and she loves her music. Very few people value and love the industry the way she does. She is a gem. Even though we have children who have learnt her music, there is only one Madosini.”</p><p>Ms Dondolo said she would love to see more kids trained to play the music, but funding remains a challenge.</p>', NULL, 1, 0, 'no_image.png', 0, NULL);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Dumping structure for table zibonale.news_categories
CREATE TABLE IF NOT EXISTS `news_categories` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) DEFAULT NULL,
  `cat_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.news_categories: ~0 rows (approximately)
/*!40000 ALTER TABLE `news_categories` DISABLE KEYS */;
INSERT INTO `news_categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
	(1, 'news', NULL);
/*!40000 ALTER TABLE `news_categories` ENABLE KEYS */;

-- Dumping structure for table zibonale.news_comments
CREATE TABLE IF NOT EXISTS `news_comments` (
  `com_id` int(10) NOT NULL AUTO_INCREMENT,
  `com_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `com_ref_user` int(10) NOT NULL,
  `com_ref_news` int(10) NOT NULL,
  `comment` varchar(250) DEFAULT NULL,
  `com_status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`com_id`),
  KEY `FK_news_comments_users` (`com_ref_user`),
  KEY `FK_news_comments_news` (`com_ref_news`),
  CONSTRAINT `FK_news_comments_news` FOREIGN KEY (`com_ref_news`) REFERENCES `news` (`id`),
  CONSTRAINT `FK_news_comments_users` FOREIGN KEY (`com_ref_user`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.news_comments: ~1 rows (approximately)
/*!40000 ALTER TABLE `news_comments` DISABLE KEYS */;
INSERT INTO `news_comments` (`com_id`, `com_date`, `com_ref_user`, `com_ref_news`, `comment`, `com_status`) VALUES
	(1, '2017-09-19 09:24:18', 7, 12, 'ad', 1);
/*!40000 ALTER TABLE `news_comments` ENABLE KEYS */;

-- Dumping structure for table zibonale.news_types
CREATE TABLE IF NOT EXISTS `news_types` (
  `type_id` int(10) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(250) DEFAULT NULL,
  `type_description` varchar(500) DEFAULT NULL,
  `type_icon` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.news_types: ~2 rows (approximately)
/*!40000 ALTER TABLE `news_types` DISABLE KEYS */;
INSERT INTO `news_types` (`type_id`, `type_name`, `type_description`, `type_icon`) VALUES
	(1, 'blog', NULL, NULL),
	(2, 'page', NULL, NULL);
/*!40000 ALTER TABLE `news_types` ENABLE KEYS */;

-- Dumping structure for table zibonale.positions
CREATE TABLE IF NOT EXISTS `positions` (
  `pos_id` int(10) NOT NULL AUTO_INCREMENT,
  `pos_name` varchar(250) DEFAULT NULL,
  `pos_description` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`pos_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.positions: ~2 rows (approximately)
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` (`pos_id`, `pos_name`, `pos_description`) VALUES
	(1, 'presenter', NULL),
	(2, 'manager', NULL);
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;

-- Dumping structure for table zibonale.presenters
CREATE TABLE IF NOT EXISTS `presenters` (
  `pr_id` int(10) NOT NULL AUTO_INCREMENT,
  `ref_staff_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`pr_id`),
  KEY `FK_presenters_staffs` (`ref_staff_id`),
  CONSTRAINT `FK_presenters_staffs` FOREIGN KEY (`ref_staff_id`) REFERENCES `staffs` (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.presenters: ~6 rows (approximately)
/*!40000 ALTER TABLE `presenters` DISABLE KEYS */;
INSERT INTO `presenters` (`pr_id`, `ref_staff_id`) VALUES
	(2, 2),
	(3, 3),
	(4, 4),
	(5, 5),
	(6, 6),
	(7, 7);
/*!40000 ALTER TABLE `presenters` ENABLE KEYS */;

-- Dumping structure for table zibonale.programs
CREATE TABLE IF NOT EXISTS `programs` (
  `pr_id` int(10) NOT NULL AUTO_INCREMENT,
  `pr_ref_broadcast` int(10) DEFAULT NULL,
  `pr_ref_day` int(10) DEFAULT NULL,
  `pr_ref_time` int(10) DEFAULT NULL,
  `pr_description` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`pr_id`),
  KEY `FK_programs_broadcasts` (`pr_ref_broadcast`),
  KEY `FK_programs_broadcast_days` (`pr_ref_day`),
  KEY `FK_programs_broadcast_times` (`pr_ref_time`),
  CONSTRAINT `FK_programs_broadcast_days` FOREIGN KEY (`pr_ref_day`) REFERENCES `broadcast_days` (`bcd_id`),
  CONSTRAINT `FK_programs_broadcast_times` FOREIGN KEY (`pr_ref_time`) REFERENCES `broadcast_times` (`bct_id`),
  CONSTRAINT `FK_programs_broadcasts` FOREIGN KEY (`pr_ref_broadcast`) REFERENCES `broadcasts` (`bc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.programs: ~6 rows (approximately)
/*!40000 ALTER TABLE `programs` DISABLE KEYS */;
INSERT INTO `programs` (`pr_id`, `pr_ref_broadcast`, `pr_ref_day`, `pr_ref_time`, `pr_description`) VALUES
	(1, 1, 1, 1, 'Program Description. The Curriculum. The Intensive English Program (IEP) offers courses to learners of English at seven different levels of proficiency, from ..'),
	(2, 2, 1, 2, 'Program Description. The Curriculum. The Intensive English Program (IEP) offers courses to learners of English at seven different levels of proficiency, from ..'),
	(3, 3, 2, 12, 'Program Description. The Curriculum. The Intensive English Program (IEP) offers courses to learners of English at seven different levels of proficiency, from ..'),
	(4, 4, 3, 3, 'Program Description. The Curriculum. The Intensive English Program (IEP) offers courses to learners of English at seven different levels of proficiency, from ..'),
	(5, 5, 4, 3, 'Program Description. The Curriculum. The Intensive English Program (IEP) offers courses to learners of English at seven different levels of proficiency, from ..'),
	(6, 5, 5, 5, 'Program Description. The Curriculum. The Intensive English Program (IEP) offers courses to learners of English at seven different levels of proficiency, from ..');
/*!40000 ALTER TABLE `programs` ENABLE KEYS */;

-- Dumping structure for table zibonale.services
CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `desciption` varchar(1000) DEFAULT NULL,
  `more` varchar(1000) DEFAULT NULL,
  `icon` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Dumping data for table zibonale.services: ~4 rows (approximately)
/*!40000 ALTER TABLE `services` DISABLE KEYS */;
INSERT INTO `services` (`id`, `title`, `desciption`, `more`, `icon`) VALUES
	(1, 'Web Design', 'Web site is the place for complete on line presentation of your business. It is the means for communication with the present and the future clients of each company, it is an important part of the company identity and it is the first source of information to which your future clients have access. A professionally prepared web site distinguishes the company from its competitors, thus giving her an advantage.  We are elaborating on wide range of Internet solutions functioning in favor of your business and of your successfull manifestations on the market – from a small presentation site up to an internet shop with information for a large number of goods, orders, payments in real time, etc.', '', 'fa fa-stethoscope'),
	(2, 'Web Hosting', 'Choosing a web hosting service can be a confusing task, with so many web hosting providers out there, offering similar services. So we have made this decision easier by showcasing the 10 best hosting brands from Endurance International Group to help you find the right web host for your websites needs. Use our in depth hosting reviews, tables and tools to compare web hosting services. We also allow users to offer feedback on their experiences with their web host to allow you to make an informed decision. Price, reliability, technical support, features and control panel are just some of the important aspects you need to consider before choosing your web host.', '', 'fa fa-ambulance'),
	(3, 'Software development', 'When your activity is specific and the standard software solutions cannot fulfill your requirements – you need specially developed for you software. Being our client you will receive exactly the needed software.  We are elaborating on contemporary software products for business management on the bases of the technology "Client / Server" and "Internet / Intranet" solutions conforming to the leading world standards in the field of information technologies.  Our objective is to create fast and reliable applications for short terms, satisfying the needs and the requirements of the clients. We achieve this through long-term experience and team work in the process of designing, developing and testing the software', '', 'fa fa-user-md'),
	(4, 'Domain Registration', 'Having a domain name ensures the future and the integrity of your brand. These days, it’s literally the first thing you do before starting a new venture, and it’s also the very first thing unscrupulous competitors may do to keep you from success. You can sign up your domain with any hosting package (.co.za domain registration is FREE if you sign up with any Shared Hosting package) or you can register the domain without a hosting package (if you’re not ready for that just yet). Registration without hosting still offers full DNS control, so you can point your browsing and mail records to any IP address, depending on your specific requirements.', '', 'fa fa-medkit');
/*!40000 ALTER TABLE `services` ENABLE KEYS */;

-- Dumping structure for table zibonale.staffs
CREATE TABLE IF NOT EXISTS `staffs` (
  `staff_id` int(10) NOT NULL AUTO_INCREMENT,
  `ref_user_id` int(10) DEFAULT NULL,
  `ref_position_id` int(10) DEFAULT NULL,
  `ref_department_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`staff_id`),
  KEY `FK_staffs_users` (`ref_user_id`),
  KEY `FK_staffs_positions` (`ref_position_id`),
  KEY `FK_staffs_departments` (`ref_department_id`),
  CONSTRAINT `FK_staffs_departments` FOREIGN KEY (`ref_department_id`) REFERENCES `departments` (`dep_id`),
  CONSTRAINT `FK_staffs_positions` FOREIGN KEY (`ref_position_id`) REFERENCES `positions` (`pos_id`),
  CONSTRAINT `FK_staffs_users` FOREIGN KEY (`ref_user_id`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.staffs: ~7 rows (approximately)
/*!40000 ALTER TABLE `staffs` DISABLE KEYS */;
INSERT INTO `staffs` (`staff_id`, `ref_user_id`, `ref_position_id`, `ref_department_id`) VALUES
	(1, 1, 2, 1),
	(2, 2, 1, 3),
	(3, 3, 1, NULL),
	(4, 4, 1, NULL),
	(5, 5, 1, NULL),
	(6, 6, 1, NULL),
	(7, 7, 1, NULL);
/*!40000 ALTER TABLE `staffs` ENABLE KEYS */;

-- Dumping structure for table zibonale.users
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_fullname` varchar(200) DEFAULT '',
  `user_lastname` varchar(200) DEFAULT '',
  `user_name` varchar(200) DEFAULT '',
  `nickname` varchar(200) DEFAULT '',
  `user_dob` date DEFAULT NULL,
  `born_in` varchar(100) DEFAULT NULL,
  `be_on_radio_since` date DEFAULT NULL,
  `who_am_i` varchar(1000) DEFAULT NULL,
  `full_person_background` varchar(1000) DEFAULT NULL,
  `education_career_background` varchar(10000) DEFAULT NULL,
  `additional_info` varchar(1000) DEFAULT NULL,
  `user_ref_role` int(10) DEFAULT NULL,
  `user_cellphone` varchar(50) DEFAULT NULL,
  `user_email` varchar(500) DEFAULT '',
  `user_password` varchar(1000) DEFAULT '',
  `user_picture` varchar(100) DEFAULT 'no_image.png',
  PRIMARY KEY (`user_id`),
  KEY `FK_users_user_roles` (`user_ref_role`),
  CONSTRAINT `FK_users_user_roles` FOREIGN KEY (`user_ref_role`) REFERENCES `user_roles` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.users: ~8 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_fullname`, `user_lastname`, `user_name`, `nickname`, `user_dob`, `born_in`, `be_on_radio_since`, `who_am_i`, `full_person_background`, `education_career_background`, `additional_info`, `user_ref_role`, `user_cellphone`, `user_email`, `user_password`, `user_picture`) VALUES
	(1, 'Admin', 'Admin', 'Admin', '', '2015-09-08', NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.', 2, NULL, 'admin@gmail.com', '1234', 'no_image.png'),
	(2, 'Zolani Sunduza', 'Sunduza', 'Zolani ', 'Bonjour', '1987-06-02', 'Sterkspruit Eastern Cape', '2007-02-18', 'I\'m that guy from next door who\'s very funny always happy like to meet other people like to chat wit', '"I was born from Jozana \'small jozi at sterkspruit ndingumntwana wesibini ke  I grow up there up until I decided to came in Cape town 1998 to stay with my family but fortunately or unfortunately I lost my mother 2003 march.\r\n\r\nAfter a week I buried my mum I went to Germany with the team from Khayelitsha we stay there for a month.\r\n\r\nThen I finished my matric after the following year i join Zibonele FM as my first job. In 2009 Zibonele FM send me to do sound engineering course at Cape audio college but i didn\'t finish the course.\r\n\r\nThen in 2015 I left Zbosh to join the South African Police Service  (SAPS). Now im doing my voluntary with them ndibe ndisebenzela SAPS.\r\n"\r\n', 'Matric', 'The MC and DJ\r\n', 3, '0717253112', 'dev@gmail.com', '1234', 'Bonjour.jpg'),
	(3, 'Pheliswa Foss', 'Foss', 'Pheliswa', 'Mam Foss', '1978-05-02', 'East London', '2008-09-30', 'Wife and mother of 2 beautiful girls.Very humble and hard working person. Very passionate about my job.', 'I\'m  a born again Christian raised  by both parents. In a  very religious environment.Love children a lot.', 'From.David Mama high school in Mdantsane N.U.1 it\'s where I obtained my matric certificate. Proceeded to Border technology and obtain a 1 year certificate in versatile broadcasting. Also have communication and marketing management certificates from MSC college.', 'So independent', 3, '644908043', 'tonton202017@gmail.com', '1234', 'Pheliswa Foss.jpg'),
	(4, 'Fundi Ntshwanti', 'Ntshwanti', 'Fundi', 'Umntana Ka Nosipho', '1986-07-27', 'Cape Town', '2015-06-12', 'I love to love, I love being loved and I love love.I am a very independed, Fun, passionate and loving human being I love my mother Nosipho so desperately.I love earning things through working harding.I am also a very sensitive person I hide it very well :) ', 'My name is Fundiswa Ntshwanti I am a first born of 4 kids, born and raised in Cape Town Guguletu my parents are Thembekile and Nosipho Ntshwanti. my siblings are Siya, Pam and Sinazo Ntshwanti, I grew up in a very loving household with 2 very loving parents who were passionate about brightening the future of their children. my dad is my biggest fan and such a huge inspiration in my life, he only has standard 7 and repearted the same standard for about 5years because he couldn\'t afford to pay fees for the higher grade school. my mom is so adorable you would love her if you\'d see her she is the sweeted and super loving. my parents are no longer together but they still love and respect each other. so do I. I grew up from a big family with aunts nephews and cusens and I wouldn\'t have it any other way. ', 'I went to Lwazi Primary school and Thandokhulu High School where I finished my Matric in 2003. I then went to Rosebank College where I did my diploma in Business management which I graduated in 2006 and I worked for hotels at first started when I was still studying because I had to pay for my own fees. then I was introduced to local hiphop artist and the underground world that\'s when i started my own company called GroundFloor Management because I was so inspired and wanted to help the young talents of Cape Town and I worked with different artists and crews build up my name and profile even thought I was at the backstage letting my artist shine but the spotlight always followed me which led to me being invited to HipHop Kaslam Awards to present 2 awards then on the next awards I was the host and after that I became and MC on different events like Poetry Awards in UWC and many other events, I then became a radio presenter at Zibonele FM after coming for an interview and the presenter at the time loved my energy and as they say the rest is history.', 'I am an opportunist, I am a feminist as well I love women who stands up and fight for their rights and worth. I believe all things are possible with God because he is good all the time.\r\n', 3, NULL, '', '', 'Fundiswa Ntshwanti.jpg'),
	(5, 'LIfa Gushman', 'Gushman', 'Lifa ', 'fafa', '1993-08-25', 'Cape Town', '2016-08-30', 'I am a sport lover, Rugby to be specific, I am spontaneous, I love to laugh , I can be versatile,  I AM A LOVER NOT A FIGHTER, I love music and lots of fun', 'I am the only child from my Mother and i am child number 4 from my dad, i have 4 siblings the oldest is Siviwe, Lizwe, Phumla and the youngest being Silungile i grew up in the Eastern Cape in Butterworth with my mom until i was 15 then i came to Cape Town. ', 'I went to Mogenster Boarding school, then Snethemba high school i am now on my second year at UNISA ', 'I can sing.  ', 3, NULL, '', '', 'LIfa Gushman.jpg'),
	(6, 'Nolundi Pama', 'Pama', 'Nolundi', 'Lundy', '1983-05-09', 'Eastern Cape', '2012-09-08', 'I am a humble person, who love to listen to people and give them solutions were I can. ', 'I am born again child of God, a mother to my little boy. a second born child of four to my mother but my father have other children, that makes us a number of 10. ', 'I have passed my matric in 2002, completed my degree in Social Science in Psychology in 2010. Started working in Radio Zibonele since 2012 till now attended few courses Advanced course in Human Rights with Sonke and Tshwane University.', 'I like Travelling, I would love to see my self on TV one day.\r\n', 3, NULL, '', '', 'Nolundi Pama.jpg'),
	(7, 'Bongani Matenjwa', 'Matenjwa', 'Bongani ', 'Bongs', '1993-03-18', 'Cape Town Gugulethu', '2015-01-15', 'extrovert talented entrepreneur  ', 'I was born and raised in cape town from the township called Gugulethu  by my two parents and I\'m the Second born to my father and First born to my mother . i"m holding one Diploma on Business Management and still studying Operations Management and running my own business  ', 'Diploma on Business Management', 'I\'m not married and i don\'t  have child', 3, NULL, '', '', 'Bongani Mathenjwa.jpg'),
	(8, 'dev', 'dev', 'developer', 'developer', '2017-09-10', NULL, NULL, NULL, NULL, NULL, NULL, 1, '0000', 'dev@gmail.com', '000', 'no_image.png');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table zibonale.user_roles
CREATE TABLE IF NOT EXISTS `user_roles` (
  `role_id` int(10) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(100) DEFAULT NULL,
  `role_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.user_roles: ~3 rows (approximately)
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
INSERT INTO `user_roles` (`role_id`, `role_name`, `role_description`) VALUES
	(1, 'dev', 'developer'),
	(2, 'admin', 'administartor'),
	(3, 'user', 'user');
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
