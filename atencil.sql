-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 17-Nov-2019 às 07:36
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

DROP TABLE IF EXISTS `at_attendances`;
CREATE TABLE IF NOT EXISTS `at_attendances` (
  `attendanceid` int(50) NOT NULL AUTO_INCREMENT,
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
  `attenflag` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`attendanceid`),
  KEY `userid` (`attenuser`),
  KEY `clientid` (`attenclient`),
  KEY `companyid` (`attencompany`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='This is the table where the attendances are stored with their details and information. This table is the main connections hubs between the other ones.';

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_clientgroups`
--

DROP TABLE IF EXISTS `at_clientgroups`;
CREATE TABLE IF NOT EXISTS `at_clientgroups` (
  `cligrid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id do grupo de clientes',
  `cligrcompany` int(11) NOT NULL COMMENT 'Empresa à qual este grupo está vinculado',
  `cligrname` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nome do grupo de clientes',
  `cligrdesc` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Descrição e observações do grupo de clientes',
  PRIMARY KEY (`cligrid`),
  KEY `cligrcompany` (`cligrcompany`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabela com os grupos de clientes e seus respectivos vinculos';

--
-- Extraindo dados da tabela `at_clientgroups`
--

INSERT INTO `at_clientgroups` (`cligrid`, `cligrcompany`, `cligrname`, `cligrdesc`) VALUES
(10, 1, 'Mais um grupo', 'Mais um para teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_clients`
--

DROP TABLE IF EXISTS `at_clients`;
CREATE TABLE IF NOT EXISTS `at_clients` (
  `clientid` int(50) NOT NULL AUTO_INCREMENT,
  `clientcompany` int(20) NOT NULL,
  `clientregister` datetime NOT NULL,
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
  `clientobs` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`clientid`),
  KEY `clientcompany` (`clientcompany`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='This is the table where we store the clients data and their personal infos.';

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_companies`
--

DROP TABLE IF EXISTS `at_companies`;
CREATE TABLE IF NOT EXISTS `at_companies` (
  `companyid` int(5) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `companytel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companymail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `companysite` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `companyaddress` text COLLATE utf8_unicode_ci NOT NULL,
  `companysector` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `companylogo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `companyplan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`companyid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='This is the table where the companies and their details are saved.';

--
-- Extraindo dados da tabela `at_companies`
--

INSERT INTO `at_companies` (`companyid`, `companyname`, `companytel`, `companymail`, `companysite`, `companyaddress`, `companysector`, `companylogo`, `companyplan`) VALUES
(1, 'Vila do Site', '2141076584', 'comercial@viladosite.com.br', 'viladosite.com.br', 'Rua Gonzaga Bastos 394 fundos\r\nVila Isabel - Rio de Janeiro - RJ', 'Tecnologia', '', 'Completo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_config`
--

DROP TABLE IF EXISTS `at_config`;
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
-- Estrutura da tabela `at_modules`
--

DROP TABLE IF EXISTS `at_modules`;
CREATE TABLE IF NOT EXISTS `at_modules` (
  `modid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id dos módulos',
  `modinst` datetime NOT NULL COMMENT 'Data de instalação do mod',
  `modname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nome dos módulos',
  `modcat` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Categoria dos módulos',
  `modauthor` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `modauthorlink` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `modlogo` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Caminho da logo do módulo ou autor do módulo.',
  `modpath` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Caminho do módulo a partir da pasta de instalação de módulos',
  `modstatus` int(11) NOT NULL COMMENT 'Status dos módulos',
  PRIMARY KEY (`modid`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabela de definições dos módulos e suas configurações e categorias.';

--
-- Extraindo dados da tabela `at_modules`
--

INSERT INTO `at_modules` (`modid`, `modinst`, `modname`, `modcat`, `modauthor`, `modauthorlink`, `modlogo`, `modpath`, `modstatus`) VALUES
(48, '2019-11-08 12:34:51', 'Default Test Module', 'Default', 'Vila do Site', 'http://viladosite.com.br', 'logo.png', 'defaultmod', 1),
(54, '2019-11-08 18:20:03', 'AT Backups', 'Segurança', 'Vila do Site', 'http://viladosite.com.br', 'logo.png', 'atbackups', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_passredef`
--

DROP TABLE IF EXISTS `at_passredef`;
CREATE TABLE IF NOT EXISTS `at_passredef` (
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmation` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  KEY `user` (`user`,`confirmation`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabela de requisições de redefinição de senha pelos usuários.';

--
-- Extraindo dados da tabela `at_passredef`
--

INSERT INTO `at_passredef` (`user`, `confirmation`) VALUES
('dev@viladosite.com.br', '38dc983b6f820e629db6d1d9f1e5a7b0287c7fc2'),
('dev@viladosite.com.br', 'b2dd3735ef729553818209602c1feb4c65786580');

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_usergroups`
--

DROP TABLE IF EXISTS `at_usergroups`;
CREATE TABLE IF NOT EXISTS `at_usergroups` (
  `usergrid` int(11) NOT NULL AUTO_INCREMENT,
  `usergrcomp` int(11) NOT NULL,
  `usergrname` int(11) NOT NULL,
  `usergrdesc` int(11) NOT NULL,
  PRIMARY KEY (`usergrid`),
  KEY `usergrcomp` (`usergrcomp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_usergrperms`
--

DROP TABLE IF EXISTS `at_usergrperms`;
CREATE TABLE IF NOT EXISTS `at_usergrperms` (
  `usergrpermid` int(11) NOT NULL AUTO_INCREMENT,
  `usergroupid` int(11) NOT NULL,
  `viewdashboard` tinyint(4) NOT NULL,
  `viewaccount` tinyint(4) NOT NULL,
  `viewattendance` tinyint(4) NOT NULL,
  `viewcompany` tinyint(4) NOT NULL,
  `viewclients` tinyint(4) NOT NULL,
  `viewusers` tinyint(4) NOT NULL,
  `viewsystem` tinyint(4) NOT NULL,
  `viewsearch` tinyint(4) NOT NULL,
  `viewmodules` tinyint(4) NOT NULL,
  `viewperms` tinyint(4) NOT NULL,
  `editdashboard` tinyint(4) NOT NULL,
  `editaccount` tinyint(4) NOT NULL,
  `editattendance` tinyint(4) NOT NULL,
  `editcompany` tinyint(4) NOT NULL,
  `editclients` tinyint(4) NOT NULL,
  `editusers` tinyint(4) NOT NULL,
  `editsystem` tinyint(4) NOT NULL,
  `editmodules` tinyint(4) NOT NULL,
  `editperms` tinyint(4) NOT NULL,
  PRIMARY KEY (`usergrpermid`),
  KEY `usergroupid` (`usergroupid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_users`
--

DROP TABLE IF EXISTS `at_users`;
CREATE TABLE IF NOT EXISTS `at_users` (
  `userid` int(255) UNSIGNED NOT NULL AUTO_INCREMENT,
  `userfname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userlname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userlogin` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `userpass` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `usermail` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `userpermlvl` int(3) UNSIGNED NOT NULL DEFAULT '1',
  `usercomp` int(50) NOT NULL,
  `usercomplvl` int(3) UNSIGNED NOT NULL,
  `userstatus` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ativo',
  `userregdate` datetime NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `usuario` (`userlogin`),
  KEY `nivel` (`userpermlvl`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `at_users`
--

INSERT INTO `at_users` (`userid`, `userfname`, `userlname`, `userlogin`, `userpass`, `usermail`, `userpermlvl`, `usercomp`, `usercomplvl`, `userstatus`, `userregdate`) VALUES
(1, 'Admin', 'User', 'admin', 'b71b045f944dfd82c3265766a5e80f791d6bfab0', 'admin@viladosite.com.br', 50, 1, 10, 'ativo', '2016-05-06 13:08:54'),
(4, 'Bruno', 'Braga', 'bruno', 'b71b045f944dfd82c3265766a5e80f791d6bfab0', 'dev@viladosite.com.br', 1, 1, 3, 'ativo', '2019-04-01 00:00:00'),
(11, 'Zé', 'Barriga', 'zebarriga', 'b71b045f944dfd82c3265766a5e80f791d6bfab0', 'ze@barriga.com', 1, 1, 1, 'ativo', '2019-04-06 07:42:14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
