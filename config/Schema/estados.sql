-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Out-2017 às 19:49
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anderson_cakephp_plugin-places`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `regiao_id` int(11) DEFAULT NULL,
  `codigo_uf` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `uf` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `estados`
--

INSERT INTO `estados` (`id`, `regiao_id`, `codigo_uf`, `nome`, `uf`) VALUES
(1, 1, 12, 'Acre', 'AC'),
(2, 1, 27, 'Alagoas', 'AL'),
(3, 1, 16, 'Amapá', 'AP'),
(4, 1, 13, 'Amazonas', 'AM'),
(5, 1, 29, 'Bahia', 'BA'),
(6, 1, 23, 'Ceará', 'CE'),
(7, 5, 53, 'Distrito Federal', 'DF'),
(8, 3, 32, 'Espírito Santo', 'ES'),
(9, 5, 52, 'Goiás', 'GO'),
(10, 1, 21, 'Maranhão', 'MA'),
(11, 5, 51, 'Mato Grosso', 'MT'),
(12, 5, 50, 'Mato Grosso do Sul', 'MS'),
(13, 3, 31, 'Minas Gerais', 'MG'),
(14, 1, 15, 'Pará', 'PA'),
(15, 1, 25, 'Paraíba', 'PB'),
(16, 4, 41, 'Paraná', 'PR'),
(17, 1, 26, 'Pernambuco', 'PE'),
(18, 1, 22, 'Piauí', 'PI'),
(19, 3, 33, 'Rio de Janeiro', 'RJ'),
(20, 1, 24, 'Rio Grande do Norte', 'RN'),
(21, 4, 43, 'Rio Grande do Sul', 'RS'),
(22, 1, 11, 'Rondônia', 'RO'),
(23, 1, 14, 'Roraima', 'RR'),
(24, 4, 42, 'Santa Catarina', 'SC'),
(25, 3, 35, 'São Paulo', 'SP'),
(26, 1, 28, 'Sergipe', 'SE'),
(27, 1, 17, 'Tocantins', 'TO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
