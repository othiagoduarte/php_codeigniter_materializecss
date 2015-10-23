-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 23-Out-2015 às 03:04
-- Versão do servidor: 5.6.12-log
-- versão do PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `planobase`
--
CREATE DATABASE IF NOT EXISTS `planobase` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `planobase`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cor_produto`
--

CREATE TABLE IF NOT EXISTS `cor_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `detalhe` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cor_produto`
--

INSERT INTO `cor_produto` (`id`, `nome`, `detalhe`) VALUES
(1, 'AZUL', NULL),
(2, 'AMARELO', NULL),
(3, 'AMARELO', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagem_produto`
--

CREATE TABLE IF NOT EXISTS `imagem_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descriacao` varchar(100) DEFAULT NULL,
  `caminho` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_pedido`
--

CREATE TABLE IF NOT EXISTS `item_pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pedido` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) NOT NULL,
  `data_pedido` date NOT NULL,
  `id_pagamento` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `preco_produto`
--

CREATE TABLE IF NOT EXISTS `preco_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `preco` decimal(10,0) NOT NULL,
  `id_produto` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `preco_produto`
--

INSERT INTO `preco_produto` (`id`, `data_cadastro`, `preco`, `id_produto`) VALUES
(1, '0000-00-00 00:00:00', '29', 1),
(2, '2015-10-22 02:58:18', '29', 1),
(3, '2015-10-22 03:01:44', '30', 1),
(4, '2015-10-22 03:05:36', '40', 0),
(5, '2015-10-22 03:28:11', '40', 2),
(6, '2015-10-22 03:28:24', '40', 3),
(7, '2015-10-22 04:10:43', '99', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `id_tamanho` int(11) NOT NULL,
  `id_cor` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `id_imagem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `id_tamanho`, `id_cor`, `id_tipo`, `id_imagem`) VALUES
(1, 'Camisa Polo Manga Longa', 1, 1, 1, 0),
(2, 'Camisa Polo Manga Longa', 1, 1, 1, 0),
(3, 'Camisa Polo Manga Longa', 1, 1, 1, 0),
(4, 'Camisa Polo', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tamanho_produto`
--

CREATE TABLE IF NOT EXISTS `tamanho_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `tamanho_produto`
--

INSERT INTO `tamanho_produto` (`id`, `nome`) VALUES
(1, 'GG'),
(2, 'G'),
(3, 'M'),
(4, 'P'),
(5, 'PP');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_produto`
--

CREATE TABLE IF NOT EXISTS `tipo_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `detalhe` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `tipo_produto`
--

INSERT INTO `tipo_produto` (`id`, `nome`, `detalhe`) VALUES
(1, 'CAMISA', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
