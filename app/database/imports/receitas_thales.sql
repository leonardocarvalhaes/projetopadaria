-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Jan-2015 às 18:08
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
-- Estrutura da tabela `receitas`
--

CREATE TABLE IF NOT EXISTS `receitas` (
`id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `modoDePreparo` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=swe7;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`id`, `nome`, `modoDePreparo`, `updated_at`, `created_at`) VALUES
(2, 'Mini Pao de Hamburguer', 'Junte a farinha, o sal, o melhorante, o leite em p?, a margarina, os ovos, o a??car e a ?gua (nas quantidades especificadas) na Amassadeira Espiral. Amasse durante 3 minutos em 1.? velocidade e cerca de 7 minutos em 2.? velocidade.\r\nEntre os 7 e 10 minutos do tempo total de amassadura, coloque o fermento. Depois de preparada a massa, coloque-a em cima da mesa e deixe-a repousar entre 5 a 10 minutos.\r\nFa?a empelos de 1,5Kg e divida em 30 unidades na Divisora Semiautom?tica. As pe?as ir?o ficar com cerca de 50g (metade de uma pe?a de p?o de hamb?rguer normal que tem 100g). De seguida, enrole-os.\r\n\r\nColoque as unidades de massa nos tabuleiros e leve a levedar durante cerca de 60 minutos (mediante a temperatura e humidade existentes na estufa). Depois de l?vedos, borrife com ?gua e acrescente as sementes.\r\nFinalmente, leve ao forno eléctrico entre os 210 e 220 ?C durante aproximadamente 10 a 12 minutos.', '2015-01-11 16:46:52', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receitas`
--
ALTER TABLE `receitas`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receitas`
--
ALTER TABLE `receitas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
