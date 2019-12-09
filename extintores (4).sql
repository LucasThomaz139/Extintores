-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Dez-2019 às 06:00
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `extintores`
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

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`idagendamento`, `cadastro_idusuario`, `data`, `descricao`, `hora`) VALUES
(37, 31, '2019-12-10', 'uuuuoooooo', '23:00:00'),
(38, 31, '2019-12-09', 'aaaaaaa', '01:04:00'),
(42, 38, '1994-06-14', 'yyyyyyyyyyyyy', '02:00:00'),
(45, 38, '2019-12-18', 'hhhhh', '00:00:00');

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
(31, 'João Paulo', '55984789562', '55999857854', 'JP padaria', '857.655/2563.12', 'Vasco Alves', 'joao.paulo@hotmail.com', 'a0a080f42e6f13b3a2df133f073095dd'),
(33, 'lucas Thomaz', '55984365075', '55999928569', 'LRT Informática ', '558.565/2254.52', 'Povinho', 'lucas.thomaz.05.09@gmail.com', '202cb962ac59075b964b07152d234b70'),
(38, 'Paulo', '55985784562', '5532689750', 'PP estacionamento', '2255562226985', 'Conde de porto Alegre', 'Paulopp@gmail.com', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `detalhe`
--

CREATE TABLE `detalhe` (
  `iddetalhe` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `servico_idservico` int(11) NOT NULL,
  `agendamento_idagendamento` int(11) NOT NULL,
  `produtos_idprodutos` int(11) NOT NULL,
  `detalhe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `detalhe`
--

INSERT INTO `detalhe` (`iddetalhe`, `usuario`, `servico_idservico`, `agendamento_idagendamento`, `produtos_idprodutos`, `detalhe`) VALUES
(8, 33, 10, 42, 5, '44444');

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `informacao` text NOT NULL,
  `missao` text NOT NULL,
  `visao` text NOT NULL,
  `valores` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `informacao`, `missao`, `visao`, `valores`) VALUES
(3, 'QUEM SOMOS\r\nCONHEÇA UM POUCO MAIS SOBRE NOSSA EMPRESA\r\nA Braston Equipamentos Contra Incêndio foi fundada em 1 de janeiro de 1977 focando as necessidades do cliente, sempre se adequando e evoluindo conforme o mercado, que se torna cada vez mais exigente. Atua no mercado de venda e manutenção de todos os aparatos de equipamentos de combate a incêndio com colaboradores altamente qualificados para atender e esclarecer todas as dúvidas de seus clientes. Nós, da Braston priorizamos a qualidade de nossos serviços e o cumprimento do prazo de entrega, com a renovação constante de equipamentos e da frota. Assim acreditamos que podemos atender suas necessidades com alto nível de qualidade', 'Missão\r\n\r\nProduzir através de tecnologia inovadora serviços de lavagem automotiva de alta eficiência em limpeza a vapor com foco na sustentabilidade.', ' Visão\r\n\r\nTornar-se reconhecida como empresa referência no mercado em que atua, aliando inovação tecnologia e a sustentabilidade em 5 anos.', ' Valores\r\n\r\n   \r\n HONESTIDADE com cliente, funcionários e comunidade;\r\n\r\n\r\n   \r\n AVALIÇÃO constante nos processos, foco no cliente;\r\n\r\n\r\n\r\n     SUPERAR expectativas na QUALIDADE dos serviços;\r\n\r\n\r\n   \r\n  SEGURANÇA, RESPONSABILIDADE;\r\n   \r\n\r\n\r\n  SUSTENTABILIDADE, economia de água, sem o uso de produtos químico;\r\n');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `idmensagem` int(11) NOT NULL,
  `mensagem` text NOT NULL,
  `avaliacao` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`idmensagem`, `mensagem`, `avaliacao`) VALUES
(1, 'ola', 3),
(9, 'como vai', 111);

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

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idprodutos`, `nome`, `valor`, `tipo`, `descrisao`, `quantidade`, `status`, `imagem`) VALUES
(5, 'EXTINTOR DE GÁS FE', 6107, 'carga de gás Fe-36 (HFC – 236 fa) ', 'Ressonância Magnética Extintor de incêndio portátil, com carga de gás Fe-36 (HFC – 236 fa) de acordo', 51, 'disponivel', 'IMG-20191008-WA0005.jpg'),
(6, 'EXTINTOR DE PÓ QUÍMICO ABC 4KG', 13600, 'Pó Químico - Classe ABC', 'Extintores de Pó Químico Seco – ABC Os extintores de uso múltiplo para as classes A, B e C utilizam ', 122, 'disponivel', 'recarga-de-extintor-po-quimico-abc-4-kg-veicular-10038v.jpg'),
(7, 'EXTINTOR CLASSE K 6LT', 2060, ' Cozinhas - Classe K', 'Extintor de Classe K. Os extintores de agente úmido Classe K, contém uma solução especial de Acetato', 65, 'disponivel', 'quatro.jpg'),
(8, 'Kit 4 Extintor Incendio Abc Pó Quimico 4 Kilos 4kg + Suporte', 544, 'Extintor ABC Pqs Pó Quimico 4 Kilos Com Supor', 'Extintor ABC Pqs Pó Quimico 4 Kilos Com Suporte - 04 Unidades  -Caracteristicas: Classe A e B e C 4 ', 88, 'disponivel', 'um.jpg'),
(9, 'ABRIGO DE EXTINTOR AP/CO2 – ACO 85 X 40 X 30', 167, ' Acessórios para Extintores', 'Abrigo para Extintor Externo, confeccionado em chapa de aço, para acomodar um extintor do tipo Água ', 50, 'disponivel', 'Abrigo-de-Fibra-CO2--4-.jpg'),
(10, 'CAPA PARA EXTINTOR CARRETA AP75 – PQS50', 245, ' Acessórios para Extintores', 'Capa para extintores Semi-Transparente, confeccionada em Lona reforçada Material anti-fungo e Imperm', 50, 'disponivel', 'Capa-para-Extintor-Carreta-PQS-50.jpg'),
(11, 'SUPORTE AUTOMOTIVO 4/6KG CROMADO', 39, 'Acessórios para Extintores', 'Suporte de Extintor Veicular. Para extintores PQS de 4/6 KG. Modelo Reforçado: Com hastes laterais p', 30, 'disponivel', 'Suporte-Automotivo-46KG-Bicromatizado.jpg');

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

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`idservico`, `nome`, `valor`, `descricao`) VALUES
(10, 'troca de produtos', 50, 'Trocar extintores e acessórios'),
(11, 'fazer as documentação', 90, 'licença de alvarás de bombeiros ');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agendamento`
--
ALTER TABLE `agendamento`
  ADD PRIMARY KEY (`idagendamento`),
  ADD KEY `fk_agendamento_cadastro1_idx` (`cadastro_idusuario`);

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`idusuario`);

--
-- Índices para tabela `detalhe`
--
ALTER TABLE `detalhe`
  ADD PRIMARY KEY (`iddetalhe`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `agendamento_idagendamento` (`agendamento_idagendamento`),
  ADD KEY `produtos_idprodutos` (`produtos_idprodutos`),
  ADD KEY `servico_idservico` (`servico_idservico`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`idmensagem`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idprodutos`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`idservico`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamento`
--
ALTER TABLE `agendamento`
  MODIFY `idagendamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `detalhe`
--
ALTER TABLE `detalhe`
  MODIFY `iddetalhe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `idmensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idprodutos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `idservico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restrições para despejos de tabelas
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
  ADD CONSTRAINT `detalhe_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `cadastro` (`idusuario`),
  ADD CONSTRAINT `detalhe_ibfk_2` FOREIGN KEY (`agendamento_idagendamento`) REFERENCES `agendamento` (`idagendamento`),
  ADD CONSTRAINT `detalhe_ibfk_3` FOREIGN KEY (`produtos_idprodutos`) REFERENCES `produtos` (`idprodutos`),
  ADD CONSTRAINT `detalhe_ibfk_4` FOREIGN KEY (`servico_idservico`) REFERENCES `servico` (`idservico`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
