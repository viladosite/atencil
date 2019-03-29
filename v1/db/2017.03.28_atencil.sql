-- phpMyAdmin SQL Dump
-- version 4.4.15.1
-- http://www.phpmyadmin.net
--
-- Host: mysql873.umbler.com
-- Generation Time: 28-Mar-2017 às 22:32
-- Versão do servidor: 5.6.34-log
-- PHP Version: 5.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atencil`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_attendances`
--

CREATE TABLE IF NOT EXISTS `at_attendances` (
  `attendanceid` int(50) NOT NULL,
  `attencompany` int(20) NOT NULL,
  `attenuser` int(50) NOT NULL,
  `attenclient` int(100) NOT NULL,
  `attendate` date NOT NULL,
  `attenhour` time NOT NULL,
  `attentype` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `attenchannel` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `attensubject` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `attenobs` text COLLATE utf8_unicode_ci NOT NULL,
  `attenstatus` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `attenreturn` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `attenflag` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='This is the table where the attendances are stored with their details and information. This table is the main connections hubs between the other ones.';

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_clients`
--

CREATE TABLE IF NOT EXISTS `at_clients` (
  `clientid` int(50) NOT NULL,
  `clientcompany` int(20) NOT NULL,
  `clientregister` int(50) NOT NULL,
  `clientfname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clientlname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clientmail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `clienttel1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `clienttel2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `clienttel3` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `clientzap` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `clientbirthdate` date NOT NULL,
  `clientaddress` text COLLATE utf8_unicode_ci NOT NULL,
  `clientstatus` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `clientobs` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='This is the table where we store the clients data and their personal infos.';

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_companies`
--

CREATE TABLE IF NOT EXISTS `at_companies` (
  `companyid` int(5) NOT NULL,
  `companyname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `companytel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companymail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `companysite` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `companyaddress` text COLLATE utf8_unicode_ci NOT NULL,
  `companysector` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `companylogo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `companyplan` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='This is the table where the companies and their details are saved.';

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_config`
--

CREATE TABLE IF NOT EXISTS `at_config` (
  `configid` int(50) NOT NULL COMMENT 'This is the entry unique identification',
  `configcomp` int(50) NOT NULL COMMENT 'This is used if you want that this configuration related to the company foreign key so it gets related to companies.',
  `configuser` int(50) NOT NULL COMMENT 'This is used if you want that this configuration related to the users foreign key so it gets related to users.',
  `configclient` int(50) NOT NULL COMMENT 'This is used if you want that this configuration related to the clients foreign key so it gets related to clients.',
  `configtype` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'This is the configuration type and helps to understand the use of it.',
  `configname` varchar(20) COLLATE utf8_unicode_ci NOT NULL COMMENT 'This is a name that the registerer have given for the configuration.',
  `configvalue1` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'This is a primary specific value for this configuration and can be used to store or read information about it later.',
  `configvalue2` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'This is a secondary specific value for this configuration and can be used to store or read information about it later.',
  `configregister` int(50) NOT NULL COMMENT 'This is the userid of the person that have registered this configuration in the system. This information is for loggin.',
  `configviewperm` int(11) NOT NULL COMMENT 'This is the permission level required to VIEW this configuration or it''s effects in the system. It should be one of the permission level numbers used in the system.',
  `configeditperm` int(11) NOT NULL COMMENT 'This is the permission level required to EDIT this configuration or it''s effects in the system. It should be one of the permission level numbers used in the system.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='This is a global configurations table. We´ve build it so you can store all kind of system configurations here like permissions to access some areas of the system or values of specific system configs. Be aware that every column in here have it''s own explanation. Be sure to read it before using it.';

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_users`
--

CREATE TABLE IF NOT EXISTS `at_users` (
  `userid` int(11) unsigned NOT NULL,
  `userfname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userlname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userlogin` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `userpass` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `usermail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `userpermlvl` int(1) unsigned NOT NULL DEFAULT '1',
  `usercomp` int(3) NOT NULL,
  `usercomplvl` int(3) unsigned NOT NULL,
  `userstatus` tinyint(1) NOT NULL DEFAULT '1',
  `userregdate` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `at_users`
--

INSERT INTO `at_users` (`userid`, `userfname`, `userlname`, `userlogin`, `userpass`, `usermail`, `userpermlvl`, `usercomp`, `usercomplvl`, `userstatus`, `userregdate`) VALUES
(1, 'Admin', 'User', 'admin', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', 'admin@viladosite.com.br', 3, 1, 0, 1, '2016-05-06 13:08:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `at_attendances`
--
ALTER TABLE `at_attendances`
  ADD PRIMARY KEY (`attendanceid`),
  ADD KEY `userid` (`attenuser`),
  ADD KEY `clientid` (`attenclient`),
  ADD KEY `companyid` (`attencompany`);

--
-- Indexes for table `at_clients`
--
ALTER TABLE `at_clients`
  ADD PRIMARY KEY (`clientid`);

--
-- Indexes for table `at_companies`
--
ALTER TABLE `at_companies`
  ADD PRIMARY KEY (`companyid`);

--
-- Indexes for table `at_users`
--
ALTER TABLE `at_users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `usuario` (`userlogin`),
  ADD KEY `nivel` (`userpermlvl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `at_attendances`
--
ALTER TABLE `at_attendances`
  MODIFY `attendanceid` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `at_clients`
--
ALTER TABLE `at_clients`
  MODIFY `clientid` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `at_companies`
--
ALTER TABLE `at_companies`
  MODIFY `companyid` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `at_users`
--
ALTER TABLE `at_users`
  MODIFY `userid` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
