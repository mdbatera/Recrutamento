-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Maio-2018 às 21:39
-- Versão do servidor: 5.7.19-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `curriculum`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `cod_cargo` int(11) NOT NULL,
  `nome` varchar(180) NOT NULL,
  `descricao` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_candidato`
--

CREATE TABLE `tab_candidato` (
  `cod_candidato` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `nome` varchar(180) NOT NULL,
  `email` varchar(60) NOT NULL,
  `arquivo` varchar(180) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`cod_cargo`);

--
-- Indexes for table `tab_candidato`
--
ALTER TABLE `tab_candidato`
  ADD PRIMARY KEY (`cod_candidato`),
  ADD UNIQUE KEY `cpf_unico` (`cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cargos`
--
ALTER TABLE `cargos`
  MODIFY `cod_cargo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tab_candidato`
--
ALTER TABLE `tab_candidato`
  MODIFY `cod_candidato` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
