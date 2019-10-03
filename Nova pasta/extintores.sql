-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 02-Out-2019 às 22:36
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `extintores`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

CREATE TABLE `agendamento` (
  `idagendamento` int(11) NOT NULL,
  `cadastro_idusuario` int(11) NOT NULL,
  `data` date NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `idusuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefonetra` varchar(25) NOT NULL,
  `telefonepe` varchar(25) DEFAULT NULL,
  `razaosocial` varchar(100) NOT NULL,
  `cnpjt` varchar(28) NOT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`idusuario`, `nome`, `telefonetra`, `telefonepe`, `razaosocial`, `cnpjt`, `endereco`, `email`, `senha`) VALUES
(22, 'lucas', '55555555555555', '2222222222222222', 'dcdcc', '444', 'avbrasila', 'lucas-thomaz-20111@hotmail.com', '1111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `detalhe`
--

CREATE TABLE `detalhe` (
  `iddetalhe` int(11) NOT NULL,
  `produtos_idprodutos` int(11) NOT NULL,
  `servico_idservico` int(11) NOT NULL,
  `agendamento_idagendamento` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `detalhe` varchar(255) NOT NULL,
  `valor` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `idmensagem` int(11) NOT NULL,
  `mensagem` varchar(100) NOT NULL,
  `avaliacao` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idprodutos` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `valor` float NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `descrisao` varchar(100) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `idservico` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `valor` float NOT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_de_mensagem`
--

CREATE TABLE `tipos_de_mensagem` (
  `idtipos_de_mensagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`idagendamento`),
  ADD KEY `fk_agendamento_cadastro1_idx` (`cadastro_idusuario`);

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`idusuario`);

--
-- Indexes for table `detalhe`
--
ALTER TABLE `detalhe`
  ADD PRIMARY KEY (`iddetalhe`),
  ADD KEY `fk_ecomenda_produtos1_idx` (`produtos_idprodutos`),
  ADD KEY `fk_ecomenda_servico1_idx` (`servico_idservico`),
  ADD KEY `fk_ecomenda_agendamento1_idx` (`agendamento_idagendamento`);

--
-- Indexes for table `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`idmensagem`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idprodutos`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`idservico`);

--
-- Indexes for table `tipos_de_mensagem`
--
ALTER TABLE `tipos_de_mensagem`
  ADD PRIMARY KEY (`idtipos_de_mensagem`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `idagendamento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `idmensagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idprodutos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `idservico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tipos_de_mensagem`
--
ALTER TABLE `tipos_de_mensagem`
  MODIFY `idtipos_de_mensagem` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD CONSTRAINT `fk_agendamento_cadastro1` FOREIGN KEY (`cadastro_idusuario`) REFERENCES `cadastro` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `detalhe`
--
ALTER TABLE `detalhe`
  ADD CONSTRAINT `fk_ecomenda_agendamento1` FOREIGN KEY (`agendamento_idagendamento`) REFERENCES `agendamento` (`idagendamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ecomenda_produtos1` FOREIGN KEY (`produtos_idprodutos`) REFERENCES `produtos` (`idprodutos`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_ecomenda_servico1` FOREIGN KEY (`servico_idservico`) REFERENCES `servico` (`idservico`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
