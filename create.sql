-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Dez-2021 às 02:11
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sceneme`
--
CREATE DATABASE IF NOT EXISTS `sceneme` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sceneme`;

DROP DATABASE IF EXISTS sceneme;
CREATE DATABASE IF NOT EXISTS `sceneme` DEFAULT  CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sceneme`;

DROP USER IF EXISTS 'tccControlador'@'localhost';
CREATE USER IF NOT EXISTS 'tccControlador'@'localhost'IDENTIFIED BY 'milleniun145';
GRANT INSERT,UPDATE,DELETE ,SELECT, CREATE,ALTER,DROP ON sceneme.* TO 'tccControlador'@'localhost';


-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `conteudo` varchar(150) DEFAULT NULL,
  `autor` varchar(300) DEFAULT NULL,
  `postID` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `conteudo`, `autor`, `postID`) VALUES
(67, 'q foi cara, para de ser maluco po', 'dfgrfgrsfr', 68),
(68, 'oi', 'dfgrfgrsfr', 68),
(69, 'ahhh ta', 'dfgrfgrsfr', 68),
(70, 'gdrggg', '5t45g54', 68),
(71, 'e', '5t45g54', 68),
(72, 'e', '5t45g54', 68),
(73, 'ola', 'Ricardo', 72);

-- --------------------------------------------------------

--
-- Estrutura da tabela `curtidas`
--

DROP TABLE IF EXISTS `curtidas`;
CREATE TABLE IF NOT EXISTS `curtidas` (
  `curtidaPostId` int(11) NOT NULL,
  `autorCurtida` varchar(30) NOT NULL,
  `curtidaCommentId` int(11) NOT NULL,
  `autorCommentCurtida` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `curtidas`
--

INSERT INTO `curtidas` (`curtidaPostId`, `autorCurtida`, `curtidaCommentId`, `autorCommentCurtida`) VALUES
(20, 'Luxanna', 0, ''),
(21, 'Luxanna', 0, ''),
(21, 'Luxanna', 0, ''),
(21, 'Luxanna', 0, ''),
(31, 'none', 0, ''),
(42, 'none', 0, ''),
(43, 'none', 0, ''),
(45, 'none', 0, ''),
(45, 'none', 0, ''),
(45, '', 0, ''),
(45, '', 0, ''),
(68, 'none', 0, ''),
(70, 'none', 0, ''),
(68, 'dfgrfgrsfr', 0, ''),
(72, 'none', 0, ''),
(73, 'none', 0, ''),
(0, 'Ricardo', 0, ''),
(0, 'Ricardo', 0, ''),
(0, 'Ricardo', 0, ''),
(0, 'Ricardo', 0, ''),
(0, 'Ricardo', 0, ''),
(0, 'Ricardo', 0, ''),
(75, 'none', 0, ''),
(0, 'Ricardo', 0, ''),
(0, 'Ricardo', 0, ''),
(0, 'Ricardo', 0, ''),
(0, '', 0, 'Ricardo'),
(0, '', 0, 'Ricardo'),
(0, '', 0, 'Ricardo'),
(0, '', 0, 'Ricardo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `postagens`
--

DROP TABLE IF EXISTS `postagens`;
CREATE TABLE IF NOT EXISTS `postagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) DEFAULT NULL,
  `conteudo` varchar(300) DEFAULT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `postagens`
--

INSERT INTO `postagens` (`id`, `titulo`, `conteudo`, `usuario`) VALUES
(72, 'Crepúsculo vale a pena?', 'Eu queria ver mas não vou com a cara da Kristen Stewart', 'Ricardo'),
(73, 'EU ODEIO OS FILMES DO ADAM SAN', 'Quem gosta disso? São péssimos, roteiro fraco e sem profundiade, NOTA 0 ! #NicolasCageÉMelhor', 'Ricardo'),
(75, 'Dreamworks>>>Disney', 'concordam?', 'Ricardo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `userdados`
--

DROP TABLE IF EXISTS `userdados`;
CREATE TABLE IF NOT EXISTS `userdados` (
  `nome` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `dataNasc` date NOT NULL,
  `adm` int(11) DEFAULT 0,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `userdados`
--

INSERT INTO `userdados` (`nome`, `email`, `senha`, `dataNasc`, `adm`, `id`) VALUES
('Afonso Fonseca', 'afonseca@gmail.com', '$2y$10$KmvYDU3rnCiUgVDRxY7CN.KT44/d87cOHrNnHK9k3U/bKz4KDTnli', '2008-12-29', 1, 42);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
