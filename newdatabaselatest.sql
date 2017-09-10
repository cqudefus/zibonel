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
DROP DATABASE IF EXISTS `zibonale`;
CREATE DATABASE IF NOT EXISTS `zibonale` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `zibonale`;

-- Dumping structure for table zibonale.about_us
DROP TABLE IF EXISTS `about_us`;
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) DEFAULT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `vision` varchar(1000) DEFAULT NULL,
  `mission` varchar(1000) DEFAULT NULL,
  `banner` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.about_us: ~1 rows (approximately)
/*!40000 ALTER TABLE `about_us` DISABLE KEYS */;
INSERT INTO `about_us` (`id`, `title`, `description`, `vision`, `mission`, `banner`) VALUES
	(1, 'Zibonele FM 98.2 ', 'Radio Zibonele 98.2 FM has got a very unique market; in the province of the Western Cape We are the only Community Radio Station that broadcast 80% of its programmes in IsiXhosa 24 hours a day in the Province. Level of education within the areas of our broadcast is relatively low, people tune in to our Radio Station as it is one of their powerful sources of information that is brought to them in language they understand. We structure our programmes to suit and appeal directly to this wonderful audience. <br><br>&nbsp;that is brought to them in language they understand. We structure our programmes to suit and appeal directly to this wonderful audience.&nbsp;<br><br><br>', 'Zibonele strives to be the best community radio station in the peninsula region, responsive to community needs and development through public broadcasting.<br><br>Radio Zibonele strives to be the best community radio station in the peninsula region, responsive to community needs and development through public broadcasting.<br>', 'As a trusted catalyst for lifelong learning, Radio Zibonele public broadcasting engages and enriches our community through distinctive programmes and services .<br><br>As a trusted catalyst for lifelong learning, Radio Zibonele public broadcasting engages and enriches our community through distinctive programmes and services .<br>', '');
/*!40000 ALTER TABLE `about_us` ENABLE KEYS */;

-- Dumping structure for table zibonale.broadcasts
DROP TABLE IF EXISTS `broadcasts`;
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
DROP TABLE IF EXISTS `broadcast_days`;
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
DROP TABLE IF EXISTS `broadcast_presenters`;
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

-- Dumping data for table zibonale.broadcast_presenters: ~11 rows (approximately)
/*!40000 ALTER TABLE `broadcast_presenters` DISABLE KEYS */;
INSERT INTO `broadcast_presenters` (`bp_id`, `bp_ref_bc`, `bp_ref_pres`) VALUES
	(1, 1, 1),
	(2, 1, 2),
	(3, 2, 3),
	(4, 3, 2),
	(5, 4, 3),
	(6, 5, 1),
	(7, 6, 4),
	(8, 7, 2),
	(9, 8, 1),
	(10, 9, 3),
	(11, 10, 2);
/*!40000 ALTER TABLE `broadcast_presenters` ENABLE KEYS */;

-- Dumping structure for table zibonale.broadcast_times
DROP TABLE IF EXISTS `broadcast_times`;
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
DROP TABLE IF EXISTS `contacts`;
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

-- Dumping data for table zibonale.contacts: ~1 rows (approximately)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `cellphone`, `tell`, `email`, `street_name`, `suburb_name`, `street_number`, `facebook`, `twitter`, `instagram`, `google`, `youtube`) VALUES
	(1, '', '021812569', 'info@zibonelefm.co.za', 'Ngcwalazi Dr, Village 1 South', 'Khayelitsha', '17 ', 'https://www.facebook.com/ZiboneleFM', 'https://twitter.com/', 'https://www.instagram.com/zibonelefm/', 'https://plus.google.com/', 'https://twitter.com/ZiboneleFM98');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table zibonale.departments
DROP TABLE IF EXISTS `departments`;
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

-- Dumping structure for table zibonale.news
DROP TABLE IF EXISTS `news`;
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
  `image` varchar(500) DEFAULT '0',
  `view` int(11) DEFAULT '0',
  `author` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_news_news_types` (`ref_type_id`),
  KEY `FK_news_users` (`author`),
  KEY `FK_news_news_categories` (`ref_cat`),
  CONSTRAINT `FK_news_news_categories` FOREIGN KEY (`ref_cat`) REFERENCES `news_categories` (`cat_id`),
  CONSTRAINT `FK_news_news_types` FOREIGN KEY (`ref_type_id`) REFERENCES `news_types` (`type_id`),
  CONSTRAINT `FK_news_users` FOREIGN KEY (`author`) REFERENCES `users` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.news: ~9 rows (approximately)
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` (`id`, `ref_cat`, `title`, `subtitle`, `published_date`, `link`, `contents`, `sumary`, `ref_type_id`, `hide`, `image`, `view`, `author`) VALUES
	(1, 1, 'What is a Radio Studio?', 'What is a radio studio? Whether you are here because you want some ideas on how it all works or you are thinking of building your own radio studio then you’re in the right place. The resources below will teach everything you need to know on finding the right space, figuring out what equipment you\r\n\r\nWhat is a radio studio? Whether you are here because you want some ideas on how it all works or you are thinking of building your own radio studio then you’re in the right place. The resources below will teach everything you need to know on finding the right space, figuring out what equipment you', '2017-05-20 01:02:16', 'what-is-a-radio-studio', 'A radio studio is a place to live broadcast or record audio professionally. Often it’s a soundproofed room which gets rid of unwanted noises that would often get mixed into broadcasts. However, studios vary depending on location and use, for example here’s the very talented&nbsp;<span>in Dallas recording a jingle for you.<br></span><br><span>Bigger spaces like this are ideal for vocal songs because of the room’s acoustics. Although most radio studios tend to go with a much more compact space. This way audio doesn’t get mixed in so the microphone just picks up your voice. At the Radio.co offices we set up our own radio studio which you can check out below:<br></span><br><div><b>3 Different Types of Radio Studios</b></div><div><br></div><div>Building a radio studio can be challenging. No two studio setups are the same. The good news is there are plenty of existing studios to model yours on. We recommend these 3 different types of radio studios.</div><div><br></div><div><b>1. Basic Radio Studio</b></div><div><br></div><div>A basic radio studio may not have all the bells and whistles of a professional studio, but it does have everything you need to broadcast online.<br><br><div><b>Choosing the Best Location</b></div><div><br></div><div>Imagine trying to read a book in a noisy library or talk to a friend in a crowded elevator. It’s not impossible to do, just very difficult. Having your own dedicated space gives you a major sense of creative freedom. Broadcast your shows without noisy distractions. Organize your studio the way you want it. Best of all, be at home in your own radio studio.</div><div><br></div><div>Now when it comes to actually choosing a space you often hear bigger is better. That’s not always true. Large rooms with high ceilings tend to echo audio. You either need to absorb that sound or find a smaller room.<br><br><div><b>Minimising Noise</b></div><div><br></div><div>It’s easy to forget just how noisy everyday life can be. Car doors slamming outside, loud next door neighbours, or even a rainy afternoon. All could potentially get picked up on your broadcasts or recordings.</div><div><br></div><div>When finding the right spot pay attention to which rooms are the best at minimising noise, for example, a basement is ideal. It has small windows and underground, so it’s out of the way from most everyday sounds.</div></div></div>', NULL, 2, 0, 'radio.jpg', 73, 2),
	(2, 1, 'why is search engine optimization important on a website', 'By targeting strategic key phrases that appeal to your target audiences, SEO allows you to be found by global or regional markets of individuals who are seeking precisely whatever it is that you offer. Whether it is a product, a service, a mission or a message that you want to promote, search engine optimization provides benefits for just about any type of organization that wants to reach people.', '2017-05-20 04:39:09', 'why-is-search-engine-optimization-important-on-a-website', '<h2>Search Engine Optimization</h2><p>Search Engine Optimization (SEO) is a specialized research-driven process of analyzing and editing your web site in order to increase the rankings of your<br>site pages for specific search terms in search engines.</p><p>By targeting strategic key phrases that appeal to your target audiences, SEO allows you to be found by global or regional markets of individuals who are seeking precisely whatever it is that you offer. Whether it is a product, a service, a mission or a message that you want to promote, search engine optimization provides benefits for just about any type of organization that wants to reach people.</p><h3><u>Some of the key benefits of SEO include:</u></h3><h4>Increased Traffic</h4><div>Top positions on the search engine result pages receive a majority of the impressions and clicks, so ranking in these top positions can result in significant traffic increases for your website. SEO also focuses on creating informative and keyword relevant title tags and meta descriptions, which show up in the result pages. Having optimized tags and descriptions helps to increase click through rate, which also promotes increases in qualified web traffic.<br></div><h4>Connect with motivated prospects</h4><p>SEO is one of the few marketing strategies where your targeted audiences are actively engaged in the process of seeking information about organizations just like yours.</p><h4>Increased brand recognition &amp; identity</h4><p>Since top position rankings result in significant impressions, having your website in these top positions on the result pages translates to more exposure for your website. Plus, being on the first page for your targeted keywords not only helps users to associate your brand with those keywords, but it instills trust since companies on the first page are generally perceived to be more trustworthy. The more your pages and content rank in high positions in the search engines, the more chances you have for users to see your content and associate with your brand.</p><h4>Flexibility</h4><p>With SEO, it is possible to customize a number of targeted campaigns to reach diverse audiences as organizational needs evolve.</p><h4>Measurable results</h4><p>SEO is one of the few marketing strategies where it is easy to quantify the results of your efforts by analyzing search engine position reports, site statistics, visitor conversion rates and other key indicators. View examples of&nbsp;<a href="http://hswsolutions.com/work/case-studies/seo-case-studies/" target="" rel="">SEO results</a>&nbsp;delivered for clients.</p><p><br></p>', NULL, 1, 1, '0', 0, 4),
	(3, 1, 'The Durban-based radio', 'The Durban-based radio station announced Joe\'s departure in a statement on Tuesday evening.\r\n"Phat Joe has contributed substantially to East Coast Radio in his time as Drive presenter, but his demanding schedule has put undue pressure on him," the station said in a statement.', '0000-00-00 00:00:00', 'durban-based-radio', '<p><b>After only one year at&nbsp;the </b><b>mic</b><b> Phat Joe has left East Coast Radio to pursue other ventures.</b></p><p>The Durban-based radio station announced Joe\'s departure in a statement on Tuesday evening.</p><p>"Phat Joe has contributed substantially to East Coast Radio in his time as Drive presenter, but his demanding schedule has put undue pressure on him," the station said in a statement.</p><p>East Coast Radio programming manager Zane Derbyshire said Joe\'s radio drive time slot required "full-time dedication".&nbsp;</p><p>"While the relationship has ended sooner than we would have liked, we understand the demanding nature of his new projects. At the same time the Drive show is one of the flagship shows on the station and requires the full-time dedication of its host in Durban. We would like to wish Joe all the success with his new ventures, which he will be launching soon," Zane said.</p><p>Joe was recently unveiled as the host of&nbsp;Vuzu\'s upcoming dating game show&nbsp;Take Me Out Mzansi.</p><p>Just one week after Joe started on the radio station a petition was started &nbsp;to have him removed for making ínappropriate comments.&nbsp;</p><p>Earlier this year he was also hauled before the Broadcasting Complaints Commission of South Africa (BCCSA) and the station was fined R30,000 for comments he made about down syndrome.</p><p>Attempts to reach Joe for comment were&nbsp;</p>', NULL, 1, 0, '0', 22, 2),
	(4, 1, 'Delivery is the hottest', 'Delivery is the hottest thing in the restaurant business right now — but as many restaurants are finding, the trouble is keeping it cold. Or crisp, in the case of french fries. Or warm, in the case of pho.', '0000-00-00 00:00:00', 'delivery', '<span>Delivery is the hottest thing in the restaurant business right now — but as many restaurants are finding, the trouble is keeping it cold. Or crisp, in the case of french fries. Or warm, in the case of pho.<br><br></span><span>Delivery is the hottest thing in the restaurant business right now — but as many restaurants are finding, the trouble is keeping it cold. Or crisp, in the case of french fries. Or warm, in the case of pho.<br></span><br><span>Delivery is the hottest thing in the restaurant business right now — but as many restaurants are finding, the trouble is keeping it cold. Or crisp, in the case of french fries. Or warm, in the case of pho.<br></span><br><span>Delivery is the hottest thing in the restaurant business right now — but as many restaurants are finding, the trouble is keeping it cold. Or crisp, in the case of french fries. Or warm, in the case of pho.<br></span><br>Delivery is the hottest thing in the restaurant business right now — but as many restaurants are finding, the trouble is keeping it cold. Or crisp, in the case of french fries. Or warm, in the case of pho.<br>', NULL, 2, 0, '0', 19, 6),
	(5, 1, 'Thanks to Susan Barnes', 'tourism initative, the Colroado Historic Hot Springs Loop, The Rocky Mountain state has made it easy to plan a hot-springs visit, whether it\'s following an adventure or as a stand-alone trip. The 722-mile scenic route features hot springs in five regions of Western Colorado, each with its own culture and vibe. Some soaks are serene, set under the stars, while others are lively, with waterslides and Marco Polo players." ', '0000-00-00 00:00:00', 'hot-springs', '<p>T<b>hanks to Susan</b> Barnes for visiting Glenwood Hot springs and writing this great story on Colorado\'s many wonderful hot springs and the Historic Hot Springs Loop!&nbsp;</p><p>"<b>With the creation of its </b>tourism initative, the Colroado Historic Hot Springs Loop, The Rocky Mountain state has made it easy to plan a hot-springs visit, whether it\'s following an adventure or as a stand-alone trip. The 722-mile scenic route features hot springs in five regions of Western Colorado, each with its own culture and vibe. Some soaks are serene, set under the stars, while others are lively, with waterslides and Marco Polo players."&nbsp;</p><p>"With the creation of its tourism&nbsp;initative, the&nbsp;Colroado&nbsp;Historic Hot Springs Loop, The Rocky Mountain state has made it easy to plan a hot-springs visit, whether it\'s following an adventure or as a stand-alone trip. The 722-mile scenic route features hot springs in five regions of Western Colorado, each with its own culture and vibe. Some soaks are serene, set under the stars, while others are lively, with w<b>aterslides and Marco Polo players.</b>"<br></p>', NULL, 1, 0, '0', 1, 4),
	(6, 1, 'Newsroom applications open', 'Curious, adventurous, always looking for a story, willing to hunt down a source, energetic?\r\nAble to speak, write and read in English & Afrikaans/Xhosa, willing to explore new frontiers in media? From the Cape Flats? Willing to learn and work hard?', '2017-08-11 12:16:16', 'newsroom-applications-open', '<p>Record sound, conduct interviews, compile bulletins, read bulletins, take pictures, record video, cover events, test your skills LIVE to a listening and online audience of over 375 000 people, build your career and profile?</p><p>If your answer to the above is yes, then a volunteer news trainee position in the Bush Radio newsroom is for you.<span>&nbsp;(<a href="https://bushradio.files.wordpress.com/2017/05/cv-newsroom-2017-may1.doc" target="_blank" rel="noopener noreferrer">Download application form</a>)<br></span></p><p>You will be required full-time and to work shifts (06h00 – 14h00 and 10h00-18h00 -including weekend and public holiday shifts.)</p><p>You will not receive payment! This is a volunteer internship at Africa’s leading community radio station. Transport allowance of R 1000 only – non negotiable</p><p>This is a full-time contract position (1 year contract after 6 months’ probation) – NB: Students SHOULD NOT apply.</p><ul><li>Cape Town-based position</li><li>Application deadline: 9 May 2017</li><li>Only email applications will be accepted.</li></ul><p>Send your downloaded and completed&nbsp;<a href="https://bushradio.files.wordpress.com/2017/05/cv-newsroom-2017-may1.doc" target="_blank" rel="noopener noreferrer">application form</a>&nbsp;and send with certificates if applicable with the subject line:&nbsp;Newsroom trainee May 2017&nbsp;to&nbsp;<a target="" rel="">newsroom2@bushradio.co.za</a></p>', NULL, 2, 0, '0', 11, 2),
	(7, 1, 'Radio Presenter', 'Radio Presenters are the voice of a station or programme, whether they work in speech-based or music Radio. They create the tone and style of radio output and establish a relationship with listeners. They may work for the BBC, commercial or community radio, on local or national stations, or for independent production companies.', '2017-08-11 12:19:07', 'radio-presenter', '<p>Radio Presenters are the voice of a station or programme, whether they work in speech-based or music Radio. They create the tone and style of radio output and establish a relationship with listeners. They may work for the BBC, commercial or community radio, on local or national stations, or for independent production companies.</p><p>Most presenters are self-employed, working on fixed term contracts. Although the greatest concentration of jobs is found in London and the South East of England, Radio Presenters work throughout the UK. Working hours are varied and may involve early mornings, late nights and overnights, as well as working weekends or holidays. In some roles Presenters are expected to travel to work on location, both within the UK and abroad.</p><p>Presenters in music radio work for a range of stations and programmes, catering for all musical tastes. Presenters in speech radio work in all genres, from topical talk shows to documentaries, light entertainment and comedy.</p><p>A Radio Presenter’s specific duties vary depending on the programme or station. They may present live or recorded shows, scripted and unscripted. They may write scripts and links or work from a brief supplied by other members of a production team. They may conduct interviews with contributors in a studio or over the phone. They may handle debates or phone-ins, or host live events. They should be able to operate various radio studios, and to record audio both in studios and on location.</p><p>They must understand the disciplines of the production process, particularly with regard to timings. They work closely with other members of a production team and may be expected to take direction from a&nbsp;<a href="http://creativeskillset.org/job_roles_and_stories/job_roles/272_radio_producer" target="_blank" rel="">Producer</a>&nbsp;or Editor. They are expected to review their own output and to seek and accept feedback on their performance. They are also expected to monitor listener feedback, and contribute to responses to comments, or programme complaints.</p>', NULL, 1, 0, 'young-radio-announcer.jpg', 59, 5),
	(8, 1, 'What does a Radio Producer do?', 'Radio Producers create programme content and manage the whole production process for both live and recorded radio programmes. They must generate original ideas, identify suitable ideas from others, and carry out thorough research. They play a key role in creating what is heard by listeners but are not usually heard on air themselves.', '2017-08-11 12:39:18', 'what-does-a-radio-producer-do', 'Radio Producers create programme content and manage the whole production process for both live and recorded radio programmes. They must generate original ideas, identify suitable ideas from others, and carry out thorough research. They play a key role in creating what is heard by listeners but are not usually heard on air themselves.<br><br>The seniority and specific responsibilities of a Radio Producer may vary considerably depending on the programme or station. They work in collaboration with presenters, performers or other programme contributors. In order to ensure that content meets established production standards, they must also be able to give direction when necessary.<br><br>Radio Producers are often closely involved with the business and technical aspects of programmes. They are also responsible for managing budgets and for ensuring the efficient use of resources. It is their responsibility to respond to listeners’ comments or complaints.<br><br>They are mainly based in offices and recording studios, but may also work on location producing outside broadcasts. Radio Producers may be required to work a variety of shift patterns, including night shifts, weekends and holidays. In some roles they will be expected to travel, sometimes long distances and at short notice, to work on location.<br><br>Radio Producers should know how to access, evaluate and use all relevant information sources. They obtain permissions or licences for recording or broadcasting on location, and for the use of music, sound effects and audio archive material.&nbsp;<br><br>They may also be expected to operate radio studios and to record audio both in studios and on location. They may be required to record interviews and other material, as well as editing and, when necessary, presenting items for broadcast. Some more senior Producers commission and oversee the work of other production team members.', NULL, 1, 0, 'radio-studi-microphones.jpg', 24, 6),
	(9, 1, 'lalala', 'lalala', '2017-09-08 13:48:10', 'lalala', 'asdfasdasdf', NULL, 1, 0, '0', 1, NULL);
/*!40000 ALTER TABLE `news` ENABLE KEYS */;

-- Dumping structure for table zibonale.news_categories
DROP TABLE IF EXISTS `news_categories`;
CREATE TABLE IF NOT EXISTS `news_categories` (
  `cat_id` int(10) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) DEFAULT NULL,
  `cat_description` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.news_categories: ~1 rows (approximately)
/*!40000 ALTER TABLE `news_categories` DISABLE KEYS */;
INSERT INTO `news_categories` (`cat_id`, `cat_name`, `cat_description`) VALUES
	(1, 'news', NULL);
/*!40000 ALTER TABLE `news_categories` ENABLE KEYS */;

-- Dumping structure for table zibonale.news_comments
DROP TABLE IF EXISTS `news_comments`;
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.news_comments: ~3 rows (approximately)
/*!40000 ALTER TABLE `news_comments` DISABLE KEYS */;
INSERT INTO `news_comments` (`com_id`, `com_date`, `com_ref_user`, `com_ref_news`, `comment`, `com_status`) VALUES
	(2, '2017-08-18 18:40:46', 2, 7, 'Delivery is the hottest thing in the restaurant business right now — but as many restaurants are finding, the trouble is keeping it cold. Or crisp, in the case of french fries. Or warm, in the case of pho.', 1),
	(4, '2017-08-18 18:40:53', 3, 7, 'Delivery is the hottest thing in the restaurant business right now — but as many restaurants are finding, the trouble is keeping it cold. Or crisp, in the case of french fries. Or warm, in the case of pho.', 1),
	(6, '2017-08-18 20:35:49', 3, 7, 'Delivery is the hottest thing in the restaurant business right now — but as many restaurants are finding, the trouble is keeping it cold. Or crisp, in the case of french fries. Or warm, in the case of pho.', 1);
/*!40000 ALTER TABLE `news_comments` ENABLE KEYS */;

-- Dumping structure for table zibonale.news_types
DROP TABLE IF EXISTS `news_types`;
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
DROP TABLE IF EXISTS `positions`;
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
DROP TABLE IF EXISTS `presenters`;
CREATE TABLE IF NOT EXISTS `presenters` (
  `pr_id` int(10) NOT NULL AUTO_INCREMENT,
  `ref_staff_id` int(10) DEFAULT NULL,
  PRIMARY KEY (`pr_id`),
  KEY `FK_presenters_staffs` (`ref_staff_id`),
  CONSTRAINT `FK_presenters_staffs` FOREIGN KEY (`ref_staff_id`) REFERENCES `staffs` (`staff_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Dumping data for table zibonale.presenters: ~7 rows (approximately)
/*!40000 ALTER TABLE `presenters` DISABLE KEYS */;
INSERT INTO `presenters` (`pr_id`, `ref_staff_id`) VALUES
	(1, 1),
	(2, 2),
	(3, 3),
	(4, 4),
	(5, 5),
	(6, 6),
	(7, 7);
/*!40000 ALTER TABLE `presenters` ENABLE KEYS */;

-- Dumping structure for table zibonale.programs
DROP TABLE IF EXISTS `programs`;
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
DROP TABLE IF EXISTS `services`;
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
DROP TABLE IF EXISTS `staffs`;
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
DROP TABLE IF EXISTS `users`;
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

-- Dumping data for table zibonale.users: ~7 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`user_id`, `user_fullname`, `user_lastname`, `user_name`, `nickname`, `user_dob`, `born_in`, `be_on_radio_since`, `who_am_i`, `full_person_background`, `education_career_background`, `additional_info`, `user_ref_role`, `user_cellphone`, `user_email`, `user_password`, `user_picture`) VALUES
	(1, 'Admin', 'Admin', 'Admin', '', '2015-09-08', NULL, NULL, NULL, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.', 2, NULL, 'admin@gmail.com', '1234', 'no_image.png'),
	(2, 'Zolani Sunduza', 'Sunduza', 'Zolani ', 'Bonjour', '1987-06-02', 'Sterkspruit Eastern Cape', '2007-02-18', 'I\'m that guy from next door who\'s very funny always happy like to meet other people like to chat wit', '"I was born from Jozana \'small jozi at sterkspruit ndingumntwana wesibini ke  I grow up there up until I decided to came in Cape town 1998 to stay with my family but fortunately or unfortunately I lost my mother 2003 march.\r\n\r\nAfter a week I buried my mum I went to Germany with the team from Khayelitsha we stay there for a month.\r\n\r\nThen I finished my matric after the following year i join Zibonele FM as my first job. In 2009 Zibonele FM send me to do sound engineering course at Cape audio college but i didn\'t finish the course.\r\n\r\nThen in 2015 I left Zbosh to join the South African Police Service  (SAPS). Now im doing my voluntary with them ndibe ndisebenzela SAPS.\r\n"\r\n', 'Matric', 'The MC and DJ\r\n', 3, '0717253112', 'dev@gmail.com', '1234', 'Bonjour.jpg'),
	(3, 'Pheliswa Foss', 'Foss', 'Pheliswa', 'Mam Foss', '1978-05-02', 'East London', '2008-09-30', 'Wife and mother of 2 beautiful girls.Very humble and hard working person. Very passionate about my job.', 'I\'m  a born again Christian raised  by both parents. In a  very religious environment.Love children a lot.', 'From.David Mama high school in Mdantsane N.U.1 it\'s where I obtained my matric certificate. Proceeded to Border technology and obtain a 1 year certificate in versatile broadcasting. Also have communication and marketing management certificates from MSC college.', 'So independent', 3, '644908043', 'tonton202017@gmail.com', '1234', 'Pheliswa Foss.jpg'),
	(4, 'Fundi Ntshwanti', 'Ntshwanti', 'Fundi', 'Umntana Ka Nosipho', '1986-07-27', 'Cape Town', '2015-06-12', 'I love to love, I love being loved and I love love.I am a very independed, Fun, passionate and loving human being I love my mother Nosipho so desperately.I love earning things through working harding.I am also a very sensitive person I hide it very well :) ', 'My name is Fundiswa Ntshwanti I am a first born of 4 kids, born and raised in Cape Town Guguletu my parents are Thembekile and Nosipho Ntshwanti. my siblings are Siya, Pam and Sinazo Ntshwanti, I grew up in a very loving household with 2 very loving parents who were passionate about brightening the future of their children. my dad is my biggest fan and such a huge inspiration in my life, he only has standard 7 and repearted the same standard for about 5years because he couldn\'t afford to pay fees for the higher grade school. my mom is so adorable you would love her if you\'d see her she is the sweeted and super loving. my parents are no longer together but they still love and respect each other. so do I. I grew up from a big family with aunts nephews and cusens and I wouldn\'t have it any other way. ', 'I went to Lwazi Primary school and Thandokhulu High School where I finished my Matric in 2003. I then went to Rosebank College where I did my diploma in Business management which I graduated in 2006 and I worked for hotels at first started when I was still studying because I had to pay for my own fees. then I was introduced to local hiphop artist and the underground world that\'s when i started my own company called GroundFloor Management because I was so inspired and wanted to help the young talents of Cape Town and I worked with different artists and crews build up my name and profile even thought I was at the backstage letting my artist shine but the spotlight always followed me which led to me being invited to HipHop Kaslam Awards to present 2 awards then on the next awards I was the host and after that I became and MC on different events like Poetry Awards in UWC and many other events, I then became a radio presenter at Zibonele FM after coming for an interview and the presenter at the time loved my energy and as they say the rest is history.', 'I am an opportunist, I am a feminist as well I love women who stands up and fight for their rights and worth. I believe all things are possible with God because he is good all the time.\r\n', 3, NULL, '', '', 'Fundiswa Ntshwanti.jpg'),
	(5, 'LIfa Gushman', 'Gushman', 'Lifa ', 'fafa', '1993-08-25', 'Cape Town', '2016-08-30', 'I am a sport lover, Rugby to be specific, I am spontaneous, I love to laugh , I can be versatile,  I AM A LOVER NOT A FIGHTER, I love music and lots of fun', 'I am the only child from my Mother and i am child number 4 from my dad, i have 4 siblings the oldest is Siviwe, Lizwe, Phumla and the youngest being Silungile i grew up in the Eastern Cape in Butterworth with my mom until i was 15 then i came to Cape Town. ', 'I went to Mogenster Boarding school, then Snethemba high school i am now on my second year at UNISA ', 'I can sing.  ', 3, NULL, '', '', 'LIfa Gushman.jpg'),
	(6, 'Nolundi Pama', 'Pama', 'Nolundi', 'Lundy', '1983-05-09', 'Eastern Cape', '2012-09-08', 'I am a humble person, who love to listen to people and give them solutions were I can. ', 'I am born again child of God, a mother to my little boy. a second born child of four to my mother but my father have other children, that makes us a number of 10. ', 'I have passed my matric in 2002, completed my degree in Social Science in Psychology in 2010. Started working in Radio Zibonele since 2012 till now attended few courses Advanced course in Human Rights with Sonke and Tshwane University.', 'I like Travelling, I would love to see my self on TV one day.\r\n', 3, NULL, '', '', 'Nolundi Pama.jpg'),
	(7, 'Bongani Matenjwa', 'Matenjwa', 'Bongani ', 'Bongs', '1993-03-18', 'Cape Town Gugulethu', '2015-01-15', 'extrovert talented entrepreneur  ', 'I was born and raised in cape town from the township called Gugulethu  by my two parents and I\'m the Second born to my father and First born to my mother . i"m holding one Diploma on Business Management and still studying Operations Management and running my own business  ', 'Diploma on Business Management', 'I\'m not married and i don\'t  have child', 3, NULL, '', '', 'Bongani Mathenjwa.jpg');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping structure for table zibonale.user_roles
DROP TABLE IF EXISTS `user_roles`;
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
