-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Nov-2019 às 16:37
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atencilv1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_attendances`
--

CREATE TABLE `at_attendances` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='This is the table where the attendances are stored with their details and information. This table is the main connections hubs between the other ones.';

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_clientgroups`
--

CREATE TABLE `at_clientgroups` (
  `cligrid` int(11) NOT NULL COMMENT 'Id do grupo de clientes',
  `cligrcompany` int(11) NOT NULL COMMENT 'Empresa à qual este grupo está vinculado',
  `cligrname` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nome do grupo de clientes',
  `cligrdesc` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Descrição e observações do grupo de clientes'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabela com os grupos de clientes e seus respectivos vinculos';

--
-- Extraindo dados da tabela `at_clientgroups`
--

INSERT INTO `at_clientgroups` (`cligrid`, `cligrcompany`, `cligrname`, `cligrdesc`) VALUES
(10, 1, 'Mais um grupo', 'Mais um para teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_clients`
--

CREATE TABLE `at_clients` (
  `clientid` int(50) NOT NULL,
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
  `clientobs` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='This is the table where we store the clients data and their personal infos.';

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_companies`
--

CREATE TABLE `at_companies` (
  `companyid` int(5) NOT NULL,
  `companyname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `companytel` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `companymail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `companysite` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `companyaddress` text COLLATE utf8_unicode_ci NOT NULL,
  `companysector` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `companylogo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `companyplan` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='This is the table where the companies and their details are saved.';

--
-- Extraindo dados da tabela `at_companies`
--

INSERT INTO `at_companies` (`companyid`, `companyname`, `companytel`, `companymail`, `companysite`, `companyaddress`, `companysector`, `companylogo`, `companyplan`) VALUES
(1, 'Vila do Site', '2141076584', 'comercial@viladosite.com.br', 'viladosite.com.br', 'Rua Gonzaga Bastos 394 fundos\r\nVila Isabel - Rio de Janeiro - RJ', 'Tecnologia', '', 'Completo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_config`
--

CREATE TABLE `at_config` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='This is a global configurations table. We´ve build it so you can store all kind of system configurations here like permissions to access some areas of the system or values of specific system configs. Be aware that every column in here have it''s own explanation. Be sure to read it before using it.';

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_modules`
--

CREATE TABLE `at_modules` (
  `modid` int(11) NOT NULL COMMENT 'Id dos módulos',
  `modinst` datetime NOT NULL COMMENT 'Data de instalação do mod',
  `modname` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nome dos módulos',
  `modcat` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Categoria dos módulos',
  `modauthor` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `modauthorlink` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `modlogo` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Caminho da logo do módulo ou autor do módulo.',
  `modpath` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Caminho do módulo a partir da pasta de instalação de módulos',
  `modstatus` int(11) NOT NULL COMMENT 'Status dos módulos'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabela de definições dos módulos e suas configurações e categorias.';

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

CREATE TABLE `at_passredef` (
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `confirmation` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Tabela de requisições de redefinição de senha pelos usuários.';

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

CREATE TABLE `at_usergroups` (
  `usergroupid` int(11) NOT NULL,
  `usergroupcomp` int(11) NOT NULL,
  `usergroupname` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `usergroupdesc` text COLLATE utf8_unicode_ci NOT NULL,
  `viewdashboard` tinyint(4) NOT NULL COMMENT 'Permissão para ver o dashboard',
  `viewaccount` tinyint(4) NOT NULL COMMENT 'Permissão para ver a própria conta',
  `viewattendance` tinyint(4) NOT NULL COMMENT 'Permissão para ver os atendimentos',
  `viewcompany` tinyint(4) NOT NULL COMMENT 'Permissão para ver as empresas',
  `viewclients` tinyint(4) NOT NULL COMMENT 'Permissão para ver os clientes',
  `viewusers` tinyint(4) NOT NULL COMMENT 'Permissão para ver os usuários e logins',
  `viewsystem` tinyint(4) NOT NULL COMMENT 'Permissão para ver as configurações de sistema',
  `viewsearch` tinyint(4) NOT NULL COMMENT 'Permissão para ver a busca',
  `viewmodules` tinyint(4) NOT NULL COMMENT 'Permissão para ver os módulos ativos na conta',
  `viewperms` tinyint(4) NOT NULL COMMENT 'Permissão para ver as permissões de usuário da conta',
  `editdashboard` tinyint(4) NOT NULL COMMENT 'Permissão para editar o dashboard',
  `editaccount` tinyint(4) NOT NULL COMMENT 'Permissão para editar a própria conta',
  `editattendance` tinyint(4) NOT NULL COMMENT 'Permissão para editar os atendimentos',
  `editcompany` tinyint(4) NOT NULL COMMENT 'Permissão para editar as empresas',
  `editclients` tinyint(4) NOT NULL COMMENT 'Permissão para editar os clientes',
  `editusers` tinyint(4) NOT NULL COMMENT 'Permissão para editar os usuários e logins',
  `editsystem` tinyint(4) NOT NULL COMMENT 'Permissão para editar as configurações de sistema',
  `editmodules` tinyint(4) NOT NULL COMMENT 'Permissão para manipular os módulos ativos na conta',
  `editperms` tinyint(4) NOT NULL COMMENT 'Permissão para alterar as permissões de usuário da conta'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `at_usergroups`
--

INSERT INTO `at_usergroups` (`usergroupid`, `usergroupcomp`, `usergroupname`, `usergroupdesc`, `viewdashboard`, `viewaccount`, `viewattendance`, `viewcompany`, `viewclients`, `viewusers`, `viewsystem`, `viewsearch`, `viewmodules`, `viewperms`, `editdashboard`, `editaccount`, `editattendance`, `editcompany`, `editclients`, `editusers`, `editsystem`, `editmodules`, `editperms`) VALUES
(3, 1, 'Usuários simples', '', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0),
(2, 1, 'Administradores', 'Grupo de administradores com todas as permissões', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `at_users`
--

CREATE TABLE `at_users` (
  `userid` int(255) UNSIGNED NOT NULL,
  `userfname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userlname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userlogin` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `userpass` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `usermail` varchar(320) COLLATE utf8_unicode_ci NOT NULL,
  `userpermlvl` int(3) NOT NULL,
  `usercomp` int(50) NOT NULL,
  `usergroup` int(11) NOT NULL,
  `userstatus` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ativo',
  `userregdate` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `at_users`
--

INSERT INTO `at_users` (`userid`, `userfname`, `userlname`, `userlogin`, `userpass`, `usermail`, `userpermlvl`, `usercomp`, `usergroup`, `userstatus`, `userregdate`) VALUES
(1, 'Admin', 'User', 'admin', 'b71b045f944dfd82c3265766a5e80f791d6bfab0', 'admin@viladosite.com.br', 50, 1, 2, 'ativo', '2016-05-06 13:08:54'),
(4, 'Bruno', 'Braga', 'bruno', 'b71b045f944dfd82c3265766a5e80f791d6bfab0', 'dev@viladosite.com.br', 1, 1, 2, 'ativo', '2019-04-01 00:00:00'),
(11, 'Zé', 'Barriga', 'zebarriga', 'b71b045f944dfd82c3265766a5e80f791d6bfab0', 'ze@barriga.com', 1, 1, 3, 'ativo', '2019-04-06 07:42:14');

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
-- Indexes for table `at_clientgroups`
--
ALTER TABLE `at_clientgroups`
  ADD PRIMARY KEY (`cligrid`),
  ADD KEY `cligrcompany` (`cligrcompany`);

--
-- Indexes for table `at_clients`
--
ALTER TABLE `at_clients`
  ADD PRIMARY KEY (`clientid`),
  ADD KEY `clientcompany` (`clientcompany`);

--
-- Indexes for table `at_companies`
--
ALTER TABLE `at_companies`
  ADD PRIMARY KEY (`companyid`);

--
-- Indexes for table `at_modules`
--
ALTER TABLE `at_modules`
  ADD PRIMARY KEY (`modid`);

--
-- Indexes for table `at_passredef`
--
ALTER TABLE `at_passredef`
  ADD KEY `user` (`user`,`confirmation`) USING BTREE;

--
-- Indexes for table `at_usergroups`
--
ALTER TABLE `at_usergroups`
  ADD PRIMARY KEY (`usergroupid`) USING BTREE,
  ADD KEY `usergroupcomp` (`usergroupcomp`) USING BTREE;

--
-- Indexes for table `at_users`
--
ALTER TABLE `at_users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `usuario` (`userlogin`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `at_attendances`
--
ALTER TABLE `at_attendances`
  MODIFY `attendanceid` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `at_clientgroups`
--
ALTER TABLE `at_clientgroups`
  MODIFY `cligrid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id do grupo de clientes', AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `at_clients`
--
ALTER TABLE `at_clients`
  MODIFY `clientid` int(50) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `at_companies`
--
ALTER TABLE `at_companies`
  MODIFY `companyid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `at_modules`
--
ALTER TABLE `at_modules`
  MODIFY `modid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id dos módulos', AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `at_usergroups`
--
ALTER TABLE `at_usergroups`
  MODIFY `usergroupid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `at_users`
--
ALTER TABLE `at_users`
  MODIFY `userid` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
