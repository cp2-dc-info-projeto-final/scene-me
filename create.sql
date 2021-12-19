-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19-Dez-2021 às 01:02
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
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `conteudo`, `autor`, `postID`) VALUES
(75, 'Azul Canetafd', 'rf48yh', 78),
(76, 'e', 'rf48yh', 72);

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
(78, 'none', 0, ''),
(77, 'rf48yh', 0, ''),
(78, 'rf48yh', 0, ''),
(72, 'rf48yh', 0, ''),
(79, 'none', 0, ''),
(80, 'none', 0, ''),
(81, 'none', 0, ''),
(79, 'none', 0, ''),
(83, 'none', 0, ''),
(84, 'none', 0, ''),
(85, 'none', 0, ''),
(86, 'none', 0, '');

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
  `autor` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `postagens`
--

INSERT INTO `postagens` (`id`, `titulo`, `conteudo`, `usuario`, `autor`) VALUES
(106, 'Qual seu Jumanji preferido?', 'O antigo é muito melhor', '56', 'Teclado'),
(107, 'Porque as pessoas dão spoiler?', 'EU ODEIO', '56', 'Teclado');

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
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `userdados`
--

INSERT INTO `userdados` (`nome`, `email`, `senha`, `dataNasc`, `adm`, `id`) VALUES
('Rodrigo', 'razer@gmail.com', '$2y$10$AFzG6OpRaKdZUTGcaYahu.KV0bAiwlU/FMXjqAHkFwiiNx09AgcXe', '0000-00-00', 1, 56),
('Renato', '1dfes@gmail.com', '$2y$10$c1/QbSWSYMtNHjKrviEdtOTWqXsrkSDhIeeUP.cw.J/69uN0EKCCe', '2021-12-13', 1, 57),
('AfonsoFonseca', 'afonseca@gmail.com', '$2y$10$4mDEU7NNclSm3ckGujKE7evpkAwrdx03pZLhYwUA5vxuX0AD/FdWK', '2021-12-23', 1, 58);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
