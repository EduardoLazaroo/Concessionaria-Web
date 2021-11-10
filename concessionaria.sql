-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Abr-2021 às 02:58
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `concessionaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `automoveis`
--

CREATE TABLE `automoveis` (
  `id` int(11) NOT NULL,
  `valor` varchar(11) NOT NULL,
  `fabricacao` date NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `placa` varchar(8) NOT NULL,
  `cor` varchar(10) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `portas` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `automoveis`
--

INSERT INTO `automoveis` (`id`, `valor`, `fabricacao`, `modelo`, `placa`, `cor`, `marca`, `portas`) VALUES
(3, '121', '2018-04-15', 'Cross', 'Final 18', 'Azul', 'Volkswagen', 4),
(4, '150', '2020-04-14', 'Corolla', '----', 'Branco', 'Toyota', 4),
(5, '110', '2021-04-27', 'Onix', '----', 'Vermelho', 'Chevrolet', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientela`
--

CREATE TABLE `clientela` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `data_nascimento` date NOT NULL,
  `Cpf` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientela`
--

INSERT INTO `clientela` (`id`, `nome`, `email`, `celular`, `data_nascimento`, `Cpf`) VALUES
(5, 'Alvaro', 'Alvinho@hotmail.com', '998065592', '1997-05-29', 245167352),
(7, 'Rian', 'rian@hotmail.com', '514514514', '1980-11-23', 81474836),
(8, 'Renan', 'renan@hotmail.com', '014998065592', '2001-08-20', 581474777),
(9, 'Lukas', 'lukas@hotmail.com', '114257894', '1999-11-11', 25574835),
(10, 'Ivo', 'ivo@hotmail.com', '334252422', '1888-09-07', 2147483647),
(11, 'Gustavoo', 'gustavo@hotmail.com', '565689880', '1990-05-01', 826589255);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `id` int(25) NOT NULL,
  `login` varchar(25) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id`, `login`, `senha`, `nome`, `email`) VALUES
(7, 'eduardo', 'eduardo', 'Eduardo Lazaro', 'eduardolas@hotmail.com.com'),
(8, 'klauber', 'klauber', 'klauber dos santos godoi', 'klauber@hotmail.com'),
(9, 'matheus', 'matheus', 'matheus', 'matheus@hotmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `idautomoveis` int(11) NOT NULL,
  `idvendedor` int(11) NOT NULL,
  `idclientela` int(11) NOT NULL,
  `data_venda` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `idautomoveis`, `idvendedor`, `idclientela`, `data_venda`) VALUES
(24, 5, 3, 5, '2021-04-23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `setor_trabalho` varchar(25) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendedor`
--

INSERT INTO `vendedor` (`id`, `nome`, `email`, `setor_trabalho`, `data_nascimento`) VALUES
(3, 'Valdir', 'valdir@hotmail.com', 'Vendas', '1996-04-12'),
(4, 'Bueno', 'Bueno@hotmail.com', 'Vendas', '1998-04-01'),
(8, 'Jonatan', 'j@hotmail.com', 'Vendas', '2021-04-22');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `automoveis`
--
ALTER TABLE `automoveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `clientela`
--
ALTER TABLE `clientela`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_pfk` (`idclientela`),
  ADD KEY `vendedor_pfk` (`idvendedor`),
  ADD KEY `veiculo_pfk` (`idautomoveis`);

--
-- Índices para tabela `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `automoveis`
--
ALTER TABLE `automoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `clientela`
--
ALTER TABLE `clientela`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `cliente_pfk` FOREIGN KEY (`idclientela`) REFERENCES `clientela` (`id`),
  ADD CONSTRAINT `veiculo_pfk` FOREIGN KEY (`idautomoveis`) REFERENCES `automoveis` (`id`),
  ADD CONSTRAINT `vendedor_pfk` FOREIGN KEY (`idvendedor`) REFERENCES `vendedor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
