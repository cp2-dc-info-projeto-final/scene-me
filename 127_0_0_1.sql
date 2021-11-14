-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Nov-2021 às 02:44
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userinfo`
--
CREATE DATABASE IF NOT EXISTS `userinfo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `userinfo`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `userdados`
--

CREATE TABLE `userdados` (
  `id` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `dataNasc` date NOT NULL,
  `adm` int(11) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `userdados`
--

INSERT INTO `userdados` (`id`, `nome`, `email`, `senha`, `dataNasc`, `adm`) VALUES
(23, 'jorge', 'b414n0rr@gmail.com', 'lunari45', '2021-11-25', 1),
(26, 'Leona', 'solari@gmail.com', '123456', '2021-11-18', 0),
(27, 'caravaggio', 'lupi@gmail.com', 'mamamia', '2021-11-23', 0),
(28, 'uyrgf4owygfwg', 'fkeofk@gmail.com', '1234567', '2021-11-15', 0),
(29, 'e33e3', 'toboco@gmail.com', '1234567y', '2021-11-16', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `userdados`
--
ALTER TABLE `userdados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `userdados`
--
ALTER TABLE `userdados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
