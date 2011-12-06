SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `wt`
--
CREATE DATABASE `wt` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `wt`;

-- --------------------------------------------------------

--
-- Table structure for table `t6_useri`
--

CREATE TABLE IF NOT EXISTS `t6_useri` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `user` char(10) NOT NULL,
  `pass` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `t6_useri`
--

INSERT INTO `t6_useri` (`id`, `user`, `pass`) VALUES
(2, 'qwe', '76d80224611fc919a5d54f0ff9fba446'),
(1, 'test', '098f6bcd4621d373cade4e832627b4f6');
