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
-- Estrutura da tabela `receitasitens`
--

CREATE TABLE IF NOT EXISTS `receitasitens` (
`id` int(11) NOT NULL,
  `quantidade` float NOT NULL,
  `ingrediente_id` int(11) NOT NULL,
  `receita_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=swe7;

--
-- Extraindo dados da tabela `receitasitens`
--

INSERT INTO `receitasitens` (`id`, `quantidade`, `ingrediente_id`, `receita_id`, `updated_at`, `created_at`) VALUES
(1, 10, 1, 1, '2015-01-11 17:05:39', '0000-00-00 00:00:00'),
(2, 5.75, 2, 1, '2015-01-11 17:05:39', '0000-00-00 00:00:00'),
(3, 0.3, 3, 1, '2015-01-11 17:05:39', '0000-00-00 00:00:00'),
(4, 0.5, 6, 1, '2015-01-11 17:05:39', '0000-00-00 00:00:00'),
(5, 0.1, 7, 1, '2015-01-11 17:05:39', '0000-00-00 00:00:00'),
(6, 0.15, 8, 1, '2015-01-11 17:07:02', '0000-00-00 00:00:00'),
(7, 0.15, 11, 0, '2015-01-11 17:07:02', '0000-00-00 00:00:00'),
(8, 0.15, 8, 1, '2015-01-11 17:08:21', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receitasitens`
--
ALTER TABLE `receitasitens`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receitasitens`
--
ALTER TABLE `receitasitens`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
