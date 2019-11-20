-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 05-Set-2019 às 16:32
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `estoque`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `idCategoria` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCategoria` varchar(200) NOT NULL,
  PRIMARY KEY (`idCategoria`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`idCategoria`, `nomeCategoria`) VALUES
(1, 'Games'),
(2, 'PerifÃ©rico'),
(3, 'Rede Fibra Optica'),
(6, 'Copos'),
(5, 'Pratos'),
(8, 'AAAAAAAAAAAAAAAA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

DROP TABLE IF EXISTS `estoque`;
CREATE TABLE IF NOT EXISTS `estoque` (
  `idEstoque` int(11) NOT NULL AUTO_INCREMENT,
  `numeroProduto` int(11) NOT NULL,
  `nomeProduto` varchar(150) NOT NULL,
  `categoriaProduto` varchar(100) NOT NULL,
  `quantidadeProduto` int(11) NOT NULL,
  `fornecedor` varchar(100) NOT NULL,
  PRIMARY KEY (`idEstoque`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estoque`
--

INSERT INTO `estoque` (`idEstoque`, `numeroProduto`, `nomeProduto`, `categoriaProduto`, `quantidadeProduto`, `fornecedor`) VALUES
(18, 564, 'LÃ¡pis', 'PerifÃ©rico', 5, 'Fornecedor Casas Bahia'),
(16, 50, 'Prato branco', 'Pratos', 1, 'Fornecedor A');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `idFornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `nomeFornecedor` varchar(150) NOT NULL,
  PRIMARY KEY (`idFornecedor`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`idFornecedor`, `nomeFornecedor`) VALUES
(1, 'Fornecedor Marabraz'),
(2, 'Fornecedor Casas Bahia'),
(3, 'Fornecedor de Copos'),
(4, 'Fornecedor TE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nomeUsuario` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nomeUsuario`, `email`, `senha`, `nivel`, `status`) VALUES
(18, 'admin', 'admin@a.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 'Ativo'),
(15, 'Vitor Rubim', 'Vitorrubim1@hotmail.com', '1bf88b28b1af84b0a4e9c78007127608f346f413', 1, 'Ativo'),
(14, 'Abacate', 'abacate@laranja.com', '7bbd1c1e41f74b4e4a5950a0dda602fda275e4a1', 3, 'Ativo'),
(16, 'Elzo Passos', 'elzopassos@gmail.com', 'e4ea59b411263b4298f4ae3dfbfaf144bd870126', 2, 'Ativo'),
(17, 'Maria Rubim', 'maria@hotmail.com', 'e21fc56c1a272b630e0d1439079d0598cf8b8329', 3, 'Ativo'),
(19, 'a', 'a@a.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 2, 'Ativo'),
(20, 'joao', 'joao@gmail.com', '81bce1f3bf343c464685d875c626820cdb58e309', 2, 'Ativo'),
(21, 'maria', 'maria@gmail.com', '81bce1f3bf343c464685d875c626820cdb58e309', 3, 'Ativo'),
(22, 'Amelia', 'amelia@gmail.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 0, 'Inativo'),
(23, 'garrafa', 'garrafa@a.com', '86f7e437faa5a7fce15d1ddcb9eaeaea377667b8', 0, 'Inativo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
