-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2014 at 07:05 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `flipside`
--

-- --------------------------------------------------------

--
-- Table structure for table `contests`
--

CREATE TABLE IF NOT EXISTS `contests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `desc` text NOT NULL,
  `cimage` varchar(50) NOT NULL,
  `hashtag` varchar(50) NOT NULL,
  `ptitle` varchar(50) NOT NULL,
  `pimage` varchar(50) NOT NULL,
  `startdate` varchar(50) NOT NULL,
  `enddate` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contests`
--

INSERT INTO `contests` (`id`, `name`, `desc`, `cimage`, `hashtag`, `ptitle`, `pimage`, `startdate`, `enddate`) VALUES
(1, 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque quam purus, pulvinar ac aliquam non, porttitor id nulla. Maecenas mollis ante ut vestibulum tempus. In commodo aliquet luctus. Sed laoreet, quam ut sollicitudin luctus, dui massa egestas massa, sit amet interdum elit sem fringilla metus. Suspendisse sem purus, posuere vitae nisl nec, volutpat ultricies eros. Etiam vitae eleifend felis. Nullam consectetur id orci quis ultricies. Vestibulum cursus turpis quam, sed molestie augue lacinia auctor.\n\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean feugiat turpis tincidunt lacinia lobortis. Nullam quis commodo felis. ', 'eef1dbb2c7b4e855182e3127f9924fd9.png', '#flexnfinesse101', '2', '0d3bb3a69e4f5c3ecf89868dd62a790c.png', '1401660000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `entrants`
--

CREATE TABLE IF NOT EXISTS `entrants` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `handle` varchar(50) NOT NULL,
  `score` int(10) NOT NULL,
  `contest` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `entrants`
--

INSERT INTO `entrants` (`id`, `name`, `handle`, `score`, `contest`) VALUES
(17, 'Dev God', 'devgawd', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` int(50) NOT NULL,
  `desc` text NOT NULL,
  `date` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE IF NOT EXISTS `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `src` varchar(120) NOT NULL,
  `views` int(10) NOT NULL,
  `description` text NOT NULL,
  `title` varchar(120) NOT NULL,
  `order` int(3) NOT NULL,
  `thumbsrc` varchar(75) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `src`, `views`, `description`, `title`, `order`, `thumbsrc`) VALUES
(2, '09065fe49d7074c121f06e86f7875c9f.jpg', 0, 'adf', 'fds', 9, ''),
(3, '7d946dfd526bcd72d3bca2f814735c39.png', 0, 'adf', 'fds', 0, ''),
(4, '7d946dfd526bcd72d3bca2f814735c39.png', 0, 'adf', 'fds', 0, ''),
(5, '7d946dfd526bcd72d3bca2f814735c39.png', 0, 'adf', 'fds', 0, ''),
(6, '7d946dfd526bcd72d3bca2f814735c39.png', 0, 'adf', 'fds', 0, ''),
(7, '91d2cb397a651498eacb3482f177c1b5.png', 0, 'fdsg', 'fsdg', 10, '2d6373b28c6fbecf7d7e4fe880afb262.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `related_tweets`
--

CREATE TABLE IF NOT EXISTS `related_tweets` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `retweets` int(50) NOT NULL,
  `favorites` int(50) NOT NULL,
  `entrant_id` int(50) NOT NULL,
  `tid` varchar(50) NOT NULL,
  `contest_id` int(11) NOT NULL,
  `scored` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `related_tweets`
--

INSERT INTO `related_tweets` (`id`, `retweets`, `favorites`, `entrant_id`, `tid`, `contest_id`, `scored`) VALUES
(15, 0, 0, 17, '473114362161664000', 1, 1),
(16, 0, 0, 17, '472890789375533056', 1, 1),
(17, 0, 0, 17, '473144197705629697', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE IF NOT EXISTS `social_accounts` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `type` int(3) NOT NULL,
  `data1` text NOT NULL,
  `data2` text NOT NULL,
  `data3` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `social_accounts`
--

INSERT INTO `social_accounts` (`id`, `type`, `data1`, `data2`, `data3`) VALUES
(1, 0, '(647) 883-4343', 'active', 'null'),
(2, 1, 'info@theflipside.tv', 'active', 'null'),
(3, 2, 'https://www.facebook.com/FlipsideAdventures', 'active,1', 'null'),
(4, 5, 'http://www.youtube.com/Slapmedia', 'active,1', 'null'),
(5, 2, 'https://www.facebook.com/FlipsideStudiosToronto', 'active,2', 'null'),
(6, 2, 'https://wwww.facebook.com/gymnasty', 'active,3', 'null'),
(7, 3, 'https://twitter.com/lelandtilden', 'active,3', 'null');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(45) NOT NULL,
  `thumbnail` varchar(120) NOT NULL,
  `src` text NOT NULL,
  `page` int(2) NOT NULL,
  `order` int(3) NOT NULL,
  `featured` int(3) NOT NULL DEFAULT '0',
  `visible` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `thumbnail`, `src`, `page`, `order`, `featured`, `visible`) VALUES
(19, 'All edited', '7fa2eeea7c889be1f5b7e4335e7bd516.png', '<iframe width=''940'' height=''529'' src=''//www.youtube.com/embed/5KAr4V3_vnQ/?rel=0'' frameborder=''0'' allowfullscreen></iframe>', 0, 8, 1, 0),
(23, 'tes', '40d8faac6f879fac2bb0b4649a1f2fcb.png', '<iframe width=''940'' height=''529'' src=''//www.youtube.com/embed/5KAr4V3_vnQ/?rel=0'' frameborder=''0'' allowfullscreen></iframe>', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `webdata`
--

CREATE TABLE IF NOT EXISTS `webdata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mainpage` text NOT NULL,
  `mainpage_heading` text NOT NULL,
  `videos_heading` text NOT NULL,
  `videos_content` text NOT NULL,
  `photos_heading` text NOT NULL,
  `photos_content` text NOT NULL,
  `events_heading` text NOT NULL,
  `events_content` text NOT NULL,
  `studio_heading` text NOT NULL,
  `studio_content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `webdata`
--

INSERT INTO `webdata` (`id`, `mainpage`, `mainpage_heading`, `videos_heading`, `videos_content`, `photos_heading`, `photos_content`, `events_heading`, `events_content`, `studio_heading`, `studio_content`) VALUES
(1, '<p>The Flipside is the new and innovative way to host any and all events - converting the standard into spectacular! Showcasing an ever expanding mix of emerging artists, music and cutting edge performances.<br />\r\n<br />\r\nA Flipside party is a multi-dimensional, truly urban event that will offer you and your guests an unforgettable experience. Book your event at The Flipside with us today!</p>\r\n', '<p><span style="color:#FF0000">test</span></p>\r\n', '<p>3</p>\r\n', '<p>3</p>\r\n', '<p>5</p>\r\n', '<p>6</p>\r\n', '<p>7</p>\r\n', '<p>8</p>\r\n', '<p>Training</p>\r\n', '<p>Situated at Yonge and Bloor, Flipside Studios is the perfect location for your students to train martial arts, yoga, cross-fit, dance classes or any other fitness related activity. With our prime location at Yonge and Bloor you will have easy access to the Bloor-Yonge subway and amazing local shops and restaurants. Times are available for your classes Monday to Thursday. For more information, contact us at (647) 883-4343</p>\r\n\r\n<h1>Performers &amp; Rentals</h1>\r\n\r\n<p>Flipside Studios represents a wide variety of talented performers ranging from fire jugglers to photographers and videographers. If you need a DJ, sounds system and visual effects, you&#39;ve come to the right place. Flipside Studios is your one-stop shop for all your event and performance needs. Flipside Studios also has a large selection of props, weapons, equipment and performance apparatuses available for all film/television, photography, theatre and training purposes. For more details, contact us at (647) 883-4343</p>\r\n');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
