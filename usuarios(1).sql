-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 19/09/2017 às 21:32
-- Versão do servidor: 10.1.13-MariaDB
-- Versão do PHP: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sysbjj`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `campeonato`
--

CREATE TABLE `campeonato` (
  `codcamp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `luta`
--

CREATE TABLE `luta` (
  `codluta` int(11) NOT NULL,
  `codcamp` int(11) NOT NULL,
  `codusu` int(11) NOT NULL,
  `horaluta` int(11) NOT NULL,
  `horainicio` int(11) NOT NULL,
  `horafim` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `niveis_acessos`
--

CREATE TABLE `niveis_acessos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-02-19 00:00:00', NULL),
(2, 'Gerente', '2016-02-19 00:00:00', NULL),
(3, 'Mesario', '2016-02-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `niveis_acesso_id` int(1) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `idade` varchar(10) NOT NULL,
  `peso` varchar(10) NOT NULL,
  `equipe` varchar(100) NOT NULL,
  `faixa` varchar(10) NOT NULL,
  `categoriaida` varchar(100) CHARACTER SET utf8 NOT NULL,
  `categoriapeso` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `niveis_acesso_id`, `cpf`, `email`, `senha`, `nome`, `sexo`, `idade`, `peso`, `equipe`, `faixa`, `categoriaida`, `categoriapeso`, `imagem`) VALUES
(1, 2, '11833118421', 'andrelucass756@gmail.com', 'c00115d3d6206f799220fbe59f77cd1c', 'AndrÃ© lucas Souza Reis', 'Masculino', '54', '21', 'Almeida Combat', 'MARROM', 'Master V', 'Galo', ''),
(2, 0, '13928358014', 'email@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Rafael Oliveira Pereira', 'Masculino', '10', '52', 'Gracie Barra', 'BRANCA', 'MÃ­rim-3', 'Pesadissimo', ''),
(3, 1, '01539029573', 'raphael_r.vidal@hotmail.com', '8abd76cc11b74112aa691e878acfcb83', 'Raphael Ribeiro Vidal', 'Masculino', '29', '108,00', 'Gracie Barra', 'BRANCA', 'Adult', 'Pesadissimo', ''),
(5, 4, '', '', '202cb962ac59075b964b07152d234b70', 'PLACAR GERAL', '', '', '', '', '', '', '', ''),
(6, 4, '', '', '202cb962ac59075b964b07152d234b70', 'PLACAR GERAL', '', '', '', '', '', '', '', ''),
(7, 3, '', '', '202cb962ac59075b964b07152d234b70', 'Arnaldo Cesar Coelho', '', '', '', '', '', '', '', ''),
(8, 0, '42168495122', '42168495122@gmail.com', '2da35791f4c4c58217624ad36ac65782', 'Victor Oliveira', 'Masculino', '35', '78', 'ALMEIDA COMBAT', 'BRANCA', 'Master I', 'Medio', ''),
(9, 0, '13928358017', 'email@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Jose medeiros cunha', 'Masculino', '10', '52', 'Gracie Humaita', 'BRANCA', 'MÃ­rim-3', 'Pesadissimo', ''),
(10, 0, '13928358017', 'email@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Mario gomes jucelino', 'Masculino', '10', '52', 'Gracie Nova', 'BRANCA', 'MÃ­rim-3', 'Pesadissimo', ''),
(11, 0, '13928358018', 'email@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Gustavo de Nobrega', 'Masculino', '10', '52', 'Gracie Nova', 'BRANCA', 'MÃ­rim-3', 'Pesadissimo', '');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `campeonato`
--
ALTER TABLE `campeonato`
  ADD PRIMARY KEY (`codcamp`);

--
-- Índices de tabela `luta`
--
ALTER TABLE `luta`
  ADD PRIMARY KEY (`codluta`),
  ADD UNIQUE KEY `coduso_fk` (`codusu`),
  ADD KEY `codcamp_fk` (`codcamp`);

--
-- Índices de tabela `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `niveis_acesso_id_fk` (`niveis_acesso_id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `campeonato`
--
ALTER TABLE `campeonato`
  MODIFY `codcamp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `luta`
--
ALTER TABLE `luta`
  MODIFY `codluta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de tabela `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
