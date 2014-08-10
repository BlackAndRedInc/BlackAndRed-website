# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.34)
# Database: blackAndRed
# Generation Time: 2014-08-10 20:54:32 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table clients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `clients`;

CREATE TABLE `clients` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `short-name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `clients` WRITE;
/*!40000 ALTER TABLE `clients` DISABLE KEYS */;

INSERT INTO `clients` (`id`, `name`, `short-name`)
VALUES
	(1,'Movement Strategy','mvmnt'),
	(2,'Crispin Porter + Bogusky','cpb'),
	(3,'Warren Miller Entertainment','wme');

/*!40000 ALTER TABLE `clients` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `client-id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `end-client-short-name` varchar(255) DEFAULT NULL,
  `end-client-name` varchar(255) DEFAULT NULL,
  `description` blob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `client-id`, `name`, `end-client-short-name`, `end-client-name`, `description`)
VALUES
	(1,1,'Mane Event','vfw','VFW','For VFW we were tasked with creating a microsite fundraiser and mobile application that would be executed over Facebook messaging to spread the viral impact. The client estimated 4 weeks and 200 hours of work: We wrapped up the app and mobile site in 10 days and under budget.'),
	(2,1,'#LOVECONQUERSHATE','hrc','Human Rights Campaign','For VFW we were tasked with creating a microsite fundraiser and mobile application that would be executed over Facebook messaging to spread the viral impact. The client estimated 4 weeks and 200 hours of work: We wrapped up the app and mobile site in 10 days and under budget.'),
	(3,1,'Ticket to Ride','wme','Warren Miller Entertainment','Ticket to Ride presale is a facebook embedded app that we were asked to finish in approximately a week. Users can login, check showtimes, buy tickets, and share their information with friends. A full CMS backend was included for admins to update and manage shows.  '),
	(4,1,'Hennepin ','wf','Whole Foods','Whole Foods Hennepin opening day promo giveaway is a simple facebook embedded questionnaire and mailing list application, with minor javascript logic.  We were asked to complete due to lack of resources from the client. '),
	(5,1,'Beat The Leader','oc','Old Chicago','While based on a previous app Black and Red Inc. helped to create, it was necessary to re-purpose and overhaul the feature set for this page. We had to re-purpose and re-skin the codebase in just under 4 days to get this up and running under deadline!'),
	(6,1,'NFL Pick\'em Rams','nfl','NFL','The NFL pick?em apps were highly social facebook integrated fantasy football apps. The apps allow players to challenge their friends and see who can predict their favorite team?s winnings off live data queried from the NFL scraped homepage. Text and email notifications were built in. '),
	(7,1,'NFL Pick\'em Bears','nfl','NFL','The NFL pick?em apps were highly social facebook integrated fantasy football apps. The apps allow players to challenge their friends and see who can predict their favorite team?s winnings off live data queried from the NFL scraped homepage. Text and email notifications were built in. '),
	(8,1,'NFL Pick\'em Lions','nfl','NFL','The NFL pick?em apps were highly social facebook integrated fantasy football apps. The apps allow players to challenge their friends and see who can predict their favorite team?s winnings off live data queried from the NFL scraped homepage. Text and email notifications were built in. '),
	(9,2,'Monthly Updates','nfl','Aspen Dental','When the client lost resources for this Aspen Dental site update, Black & Red was brought on to finish it. Adding to the complexity, the site was geo-enabled from over 500 different locations to allow users to see local phone numbers and schedule appointments. '),
	(10,2,'FB Page','ml','MetLife','Metlife needed a response form page for their "Request a Free Quote" Facebook app. Black & Red built a one-page, responsively designed form and submission component for the customer to generate quotes. QA was also overseen by Black & Red as the project went live for Metlife. '),
	(11,2,'Jello Recipes','krj','Kraft','Black & Red came on to this project with JELLO to update the website for spring and summer sales campaigns. Other work included a featured product carousel, embedded YouTube player, modified grid layour, and Instagram tile that links out to JELL-O account on Instagram. '),
	(12,2,'C3 Updates','apb','Apple Bee\'s','Black & Red was assigned to help update several menu pages for the Applebees.com desktop page. Updated menus for the summer were added, as well as active location tools that would help the user find the closest restaurant. '),
	(13,2,'Homepage Updates','fotl','Fruit Of The Loom','Black & Red was brought on to handle multiple maintenance issues and updates on the Fruit of the Loom desktop page.  Updates were made on the desktop and mobile versions, including ties fo the admin CMS. '),
	(14,2,'Naked Cowboy','fotl','Fruit Of The Loom','Fruit of the Loom needed a new homepage layout built, as well as several backend updates. We created an image carousel, admin CMS image control was built in, a code refactor was done for a new PHP based distribution on the backend, and an image based twitter feed was built.'),
	(15,2,'Dadisms','fotl','Fruit Of The Loom','For Father\'s Day, Fruit of the Loom needed desktop and mobile versions their Dadisms campaign built. Dadisms allowed users to buy custom pairs of Father\'s Day underwear. An image carousel, inventory control, social media hooks, and inventory countdown ticker were all utilized.'),
	(16,2,'Gif Registry','fotl','Fruit Of The Loom','As a Father\'s Day promotion, Black & Red built the Gif Registry project for desktop and mobile. A Gif carousel was built to display rotating animated gifs on the main page. Animated GIF vouchers could be emailed to Dad for Father\'s Day, and social media components were built in as well.'),
	(17,3,'Hometown Hills','wme','Warren Miller Entertainment','Warren Miller Entertainment brought on Black & Red to develop a tournament-style, bracketed video competition Facebook app. Users uploaded amatuer videos, which were automatically paired. Votes were tallied, and the competitors were narrowed to a final four and championship voting round.');

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
