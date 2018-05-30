-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/05/2018 às 15:00
-- Versão do servidor: 5.7.21
-- Versão do PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `recrutamento`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cargos`
--

CREATE TABLE `cargos` (
  `cod_cargo` int(11) NOT NULL,
  `nome` varchar(180) NOT NULL,
  `descricao` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `cargos`
--

INSERT INTO `cargos` (`cod_cargo`, `nome`, `descricao`, `status`) VALUES
(2, 'Analista de Suporte', 'Descrição', 1),
(5, 'Chupador em Geral', 'Chupador em Geral', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tab_candidato`
--

CREATE TABLE `tab_candidato` (
  `cod_candidato` int(11) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `nome` varchar(180) NOT NULL,
  `email` varchar(60) NOT NULL,
  `arquivo` varchar(180) NOT NULL,
  `cod_cargo` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `tab_candidato`
--

INSERT INTO `tab_candidato` (`cod_candidato`, `cpf`, `nome`, `email`, `arquivo`, `cod_cargo`) VALUES
(5, 81056583568, 'MARCIO CONCEICAO DANTAS', 'dantas.md@gmail.com', 'ISS4.pdf', 5);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`cod_cargo`);

--
-- Índices de tabela `tab_candidato`
--
ALTER TABLE `tab_candidato`
  ADD PRIMARY KEY (`cod_candidato`),
  ADD UNIQUE KEY `cpf_unico` (`cpf`),
  ADD KEY `cargo_idx` (`cod_cargo`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cargos`
--
ALTER TABLE `cargos`
  MODIFY `cod_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tab_candidato`
--
ALTER TABLE `tab_candidato`
  MODIFY `cod_candidato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `tab_candidato`
--
ALTER TABLE `tab_candidato`
  ADD CONSTRAINT `fk_cargos` FOREIGN KEY (`cod_cargo`) REFERENCES `cargos` (`cod_cargo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
