-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             9.5.0.5332
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table petstagramdb.likes
CREATE TABLE IF NOT EXISTS `likes` (
  `users_id` int(10) unsigned NOT NULL,
  `posts_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`users_id`,`posts_id`),
  KEY `fk_users_has_posts_posts1_idx` (`posts_id`),
  KEY `fk_users_has_posts_users_idx` (`users_id`),
  CONSTRAINT `fk_users_has_posts_posts1` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_has_posts_users` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Dumping data for table petstagramdb.likes: ~6 rows (approximately)
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
INSERT INTO `likes` (`users_id`, `posts_id`) VALUES
	(4, 1),
	(5, 1),
	(6, 1),
	(3, 2),
	(5, 2),
	(2, 3),
	(7, 4);
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;

-- Dumping structure for table petstagramdb.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(45) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `users_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`users_id`),
  KEY `fk_posts_users1_idx` (`users_id`),
  CONSTRAINT `fk_posts_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table petstagramdb.posts: ~10 rows (approximately)
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` (`id`, `image`, `description`, `users_id`) VALUES
	(1, 'friends.jpg', 'This is my pet Carlos', 4),
	(2, 'hotsummerday.jpg', 'Petsy in hot summer day', 7),
	(3, 'newlook.jpg', 'Haribo in his new outfit', 3),
	(4, 'cutecouple.jpg', 'Meowington cant stop, wont stop...', 6),
	(5, 'meowington.jpg', 'If you can spot it, you beat 1 % of people', 5),
	(6, 'birdy.jpg', 'My best friend is a bird', 2),
	(7, 'doggo.jpg', 'Never stop believing', 6),
	(8, 'lickingpaw.jpg', 'Isnt this cute ?', 5),
	(9, 'dogo.jpg', 'this is just a test subject nothing to see here move along thank you have a nice day', 4);
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;

-- Dumping structure for table petstagramdb.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(25) DEFAULT NULL,
  `lastName` varchar(25) DEFAULT NULL,
  `username` varchar(16) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `avatar` varchar(45) DEFAULT 'pawprint.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- Dumping data for table petstagramdb.users: ~9 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `firstName`, `lastName`, `username`, `email`, `password`, `avatar`) VALUES
	(1, 'Al', 'Yankovic', 'admin', 'admin@petstagram.com', 'admin1234', 'pawprint.png'),
	(2, 'Adam', 'Mada', 'adamWasHere', 'adamanam@mail.com', 'password1234', 'pawprint.png'),
	(3, 'Betty', 'Pawer', 'Bitterling', 'bitterbettyblue@mail.com', 'sourCream2', 'pawprint.png'),
	(4, 'LingLing', 'Ling', 'LingLing', 'onelingling@mail.com', 'sugarIsCool', 'pawprint.png'),
	(5, 'Greg', 'Thepanda', 'GotchaGuy', 'gregismyidol@mail.com', 'canttouchthis', 'pawprint.png'),
	(6, 'Ryan', 'Reynolds', 'MissDepression', 'lassy.gottalent@mail.com', 'iWannaLive', 'pawprint.png'),
	(7, 'Niki', 'Chan', 'HelpImTrapped', 'justkidding@mail.com', 'norlyhelp', 'pawprint.png'),
	(8, 'testing', 'testing', 'testingtesting', 'testing@mail.com', 'testing', 'pawprint.png'),
	(9, 'test', 'dummy', 'testertesting', 'testerthtest@mail.com', 'terster', 'pawprint.png');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
