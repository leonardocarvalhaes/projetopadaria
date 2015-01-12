-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Jan-2015 às 17:55
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projetopadaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ingredientes`
--

CREATE TABLE IF NOT EXISTS `ingredientes` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `quantidadeUnitaria` int(11) NOT NULL,
  `precoUnitario` float NOT NULL,
  `unidadeDeMedida` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=swe7;

--
-- Extraindo dados da tabela `ingredientes`
--

INSERT INTO `ingredientes` (`id`, `nome`, `quantidadeUnitaria`, `precoUnitario`, `unidadeDeMedida`, `created_at`, `updated_at`) VALUES
(1, 'Farinha de Trigo', 10, 25, 'KG', '2015-01-11 16:38:43', '0000-00-00 00:00:00'),
(2, 'Agua', 20, 10, 'L', '2015-01-11 16:47:06', '0000-00-00 00:00:00'),
(3, 'Fermento', 1, 15, 'Kg', '2015-01-11 16:55:00', '0000-00-00 00:00:00'),
(6, 'Acucar', 1, 4, 'Kg', '2015-01-11 16:49:03', '0000-00-00 00:00:00'),
(7, 'Margarina', 1, 10, 'Kg', '2015-01-11 16:49:03', '0000-00-00 00:00:00'),
(8, 'Leite em Po', 1, 22, 'Kg', '2015-01-11 16:55:27', '0000-00-00 00:00:00'),
(11, 'Ovo em po', 1, 40, 'Kg', '2015-01-11 16:53:58', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredientes`
--
ALTER TABLE `ingredientes`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredientes`
--
ALTER TABLE `ingredientes`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
