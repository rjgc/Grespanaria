-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2014 at 01:57 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `grespanaria`
--
CREATE DATABASE `grespanaria` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `grespanaria`;

-- --------------------------------------------------------

--
-- Table structure for table `certificados`
--

DROP TABLE IF EXISTS `certificados`;
CREATE TABLE IF NOT EXISTS `certificados` (
  `id_certificado` int(11) DEFAULT NULL,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tamanho` varchar(100) CHARACTER SET utf8 NOT NULL,
  `url` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cizacl_resources`
--

DROP TABLE IF EXISTS `cizacl_resources`;
CREATE TABLE IF NOT EXISTS `cizacl_resources` (
  `cizacl_resource_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cizacl_resource_type` enum('controller','function') NOT NULL,
  `cizacl_resource_controller` varchar(50) NOT NULL,
  `cizacl_resource_function` varchar(50) DEFAULT NULL,
  `cizacl_resource_description` varchar(255) DEFAULT NULL,
  `cizacl_resource_added_by` int(10) NOT NULL,
  `cizacl_resource_edited_by` int(10) DEFAULT NULL,
  `cizacl_resource_added_on` int(10) NOT NULL,
  `cizacl_resource_edited_on` int(10) DEFAULT NULL,
  PRIMARY KEY (`cizacl_resource_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cizacl_resources`
--

INSERT INTO `cizacl_resources` (`cizacl_resource_id`, `cizacl_resource_type`, `cizacl_resource_controller`, `cizacl_resource_function`, `cizacl_resource_description`, `cizacl_resource_added_by`, `cizacl_resource_edited_by`, `cizacl_resource_added_on`, `cizacl_resource_edited_on`) VALUES
(1, 'controller', 'login', NULL, NULL, 0, NULL, 1311112800, NULL),
(2, 'controller', 'cizacl', NULL, NULL, 0, NULL, 1311112800, NULL),
(3, 'controller', 'mediagest', NULL, '', 1, NULL, 1393091837, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cizacl_roles`
--

DROP TABLE IF EXISTS `cizacl_roles`;
CREATE TABLE IF NOT EXISTS `cizacl_roles` (
  `cizacl_role_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cizacl_role_name` varchar(20) NOT NULL,
  `cizacl_role_inherit_id` varchar(50) DEFAULT NULL,
  `cizacl_role_redirect` varchar(255) NOT NULL,
  `cizacl_role_description` varchar(255) DEFAULT NULL,
  `cizacl_role_default` tinyint(1) unsigned NOT NULL,
  `cizacl_role_order` smallint(3) unsigned NOT NULL DEFAULT '998',
  PRIMARY KEY (`cizacl_role_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cizacl_roles`
--

INSERT INTO `cizacl_roles` (`cizacl_role_id`, `cizacl_role_name`, `cizacl_role_inherit_id`, `cizacl_role_redirect`, `cizacl_role_description`, `cizacl_role_default`, `cizacl_role_order`) VALUES
(1, 'Administrator', NULL, 'cizacl', '', 0, 1),
(2, 'Guest', NULL, 'login', NULL, 1, 2),
(3, 'Mediagest', '["2"]', 'mediagest', '', 0, 998);

-- --------------------------------------------------------

--
-- Table structure for table `cizacl_rules`
--

DROP TABLE IF EXISTS `cizacl_rules`;
CREATE TABLE IF NOT EXISTS `cizacl_rules` (
  `cizacl_rule_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cizacl_rule_cizacl_role_id` int(11) DEFAULT NULL,
  `cizacl_rule_type` enum('allow','deny') NOT NULL,
  `cizacl_rule_cizacl_resource_controller` text NOT NULL,
  `cizacl_rule_cizacl_resource_function` text,
  `cizacl_rule_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `cizacl_rule_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cizacl_rule_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cizacl_rules`
--

INSERT INTO `cizacl_rules` (`cizacl_rule_id`, `cizacl_rule_cizacl_role_id`, `cizacl_rule_type`, `cizacl_rule_cizacl_resource_controller`, `cizacl_rule_cizacl_resource_function`, `cizacl_rule_status`, `cizacl_rule_description`) VALUES
(1, 1, 'allow', '[null]', '[null]', 1, ''),
(2, 2, 'allow', '["login"]', '[null]', 1, ''),
(3, 3, 'allow', '["mediagest"]', '[null]', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `cizacl_session`
--

DROP TABLE IF EXISTS `cizacl_session`;
CREATE TABLE IF NOT EXISTS `cizacl_session` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `cizacl_session`
--

INSERT INTO `cizacl_session` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('b6f6a35b9419238c12df9182998c8152', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.36', 1397216820, '');

-- --------------------------------------------------------

--
-- Table structure for table `noticias`
--

DROP TABLE IF EXISTS `noticias`;
CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `data` date NOT NULL,
  `titulo_pt` varchar(100) CHARACTER SET utf8 NOT NULL,
  `titulo_en` varchar(100) CHARACTER SET utf8 NOT NULL,
  `titulo_fr` varchar(100) CHARACTER SET utf8 NOT NULL,
  `titulo_es` varchar(100) CHARACTER SET utf8 NOT NULL,
  `titulo_de` varchar(100) CHARACTER SET utf8 NOT NULL,
  `titulo_py` varchar(100) CHARACTER SET utf8 NOT NULL,
  `texto_pt` varchar(100) CHARACTER SET utf8 NOT NULL,
  `texto_en` varchar(100) CHARACTER SET utf8 NOT NULL,
  `texto_fr` varchar(100) CHARACTER SET utf8 NOT NULL,
  `texto_es` varchar(100) CHARACTER SET utf8 NOT NULL,
  `texto_de` varchar(100) CHARACTER SET utf8 NOT NULL,
  `texto_py` varchar(100) CHARACTER SET utf8 NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

DROP TABLE IF EXISTS `user_profiles`;
CREATE TABLE IF NOT EXISTS `user_profiles` (
  `user_profile_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_profile_user_id` int(10) unsigned NOT NULL,
  `user_profile_name` varchar(50) NOT NULL,
  `user_profile_surname` varchar(50) NOT NULL,
  `user_profile_email` varchar(100) DEFAULT NULL,
  `user_profile_user_status_code` tinyint(1) NOT NULL,
  `user_profile_lastaccess` int(11) DEFAULT NULL,
  `user_profile_added` int(11) DEFAULT NULL,
  `user_profile_edited` int(11) DEFAULT NULL,
  `user_profile_added_by` int(10) NOT NULL,
  `user_profile_edited_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`user_profile_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`user_profile_id`, `user_profile_user_id`, `user_profile_name`, `user_profile_surname`, `user_profile_email`, `user_profile_user_status_code`, `user_profile_lastaccess`, `user_profile_added`, `user_profile_edited`, `user_profile_added_by`, `user_profile_edited_by`) VALUES
(1, 1, 'Nelson', 'Rodrigues', 'nelsonrodrigues@mediaweb.pt', 1, 1393092392, 1310827985, 1385743532, 0, 1),
(2, 2, 'grespanaria', 'grespanaria', 'grespanaria@grespanaria.pt', 1, 1395316259, 1393092026, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_status`
--

DROP TABLE IF EXISTS `user_status`;
CREATE TABLE IF NOT EXISTS `user_status` (
  `user_status_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_status_name` varchar(10) NOT NULL,
  `user_status_code` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_status_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_status`
--

INSERT INTO `user_status` (`user_status_id`, `user_status_name`, `user_status_code`) VALUES
(1, 'enabled', 1),
(2, 'disabled', 2),
(3, 'blocked', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_username` varchar(80) NOT NULL,
  `user_password` varchar(64) NOT NULL,
  `user_cizacl_role_id` int(11) NOT NULL,
  `user_auth` int(11) DEFAULT NULL,
  `user_auth_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_cizacl_role_id`, `user_auth`, `user_auth_date`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, NULL, NULL),
(2, 'grespanaria', 'c7891060e699526d048daa14cfc905e3', 3, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
