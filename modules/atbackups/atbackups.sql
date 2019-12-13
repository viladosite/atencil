-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 13-Dez-2019 às 09:03
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
-- Estrutura da tabela `at_mod_bkps`
--

DROP TABLE IF EXISTS `at_mod_bkps`;
CREATE TABLE IF NOT EXISTS `at_mod_bkps` (
  `bkp_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Id do backup cadastrado',
  `bkp_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Data de cadastro do backup',
  `bkp_comp` int(11) NOT NULL COMMENT 'Compania ao qual o backup está vinculado',
  `bkp_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nome de exibição na lista para o backup',
  `bkp_website` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Website ao qual o backup é referente',
  `bkp_path` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Caminho do arquivo de backup',
  `bkp_ftphost` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Servidor do FTP para o backup',
  `bkp_ftpuser` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Usuário do FTP para o backup',
  `bkp_ftppass` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Senha do FTP para o backup',
  `bkp_ftpport` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Porta do FTP para o backup',
  `bkp_bdhost` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Servidor do MYSQL para o backup',
  `bkp_bduser` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Usuário do MYSQL para o backup',
  `bkp_bdpass` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Senha do MYSQL para o backup',
  `bkp_bdport` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Porta do MYSQL para o backup',
  `bkp_obs` text COLLATE utf8_unicode_ci NOT NULL COMMENT 'Observações sobre o backup',
  PRIMARY KEY (`bkp_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
