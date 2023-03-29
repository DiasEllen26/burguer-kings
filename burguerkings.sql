-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Mar-2023 às 13:13
-- Versão do servidor: 8.0.31
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `burguerkings`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banner`
--

DROP TABLE IF EXISTS `banner`;
CREATE TABLE IF NOT EXISTS `banner` (
  `id` int NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `banner` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `banner`
--

INSERT INTO `banner` (`id`, `titulo`, `banner`) VALUES
(1, 'New Angus', 'banner02.jpg'),
(2, 'The Kings is Jamura Park', 'banner01.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `produto` varchar(100) NOT NULL,
  `tipo_id` int NOT NULL,
  `foto` varchar(50) NOT NULL,
  `descricao` text NOT NULL,
  `valor` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `produto`, `tipo_id`, `foto`, `descricao`, `valor`) VALUES
(1, 'Whopper Churras', 1, '01.jpg', 'Hamburguer feito com fraldinha, molho vinagrete, queijo fatiado sabor cheddar, alface, maionese temperada em um pão com gergelim.', 50),
(2, 'WHOPPER® Furioso', 1, '02.jpg', 'Pão com gergelim, um suculento hambúrguer de pura carne bovina, queijo, bacon, alface, tomate, maionese, onion rings e um delicioso molho furioso. Imagem meramente ilustrativa.', 49.9),
(3, 'WHOPPER® Duplo', 1, '03.jpg', 'Pão com gergelim, dois suculentos hambúrgueres de pura carne bovina, duas fatias de queijo derretido, quatro fatias de picles, alface, tomate, cebola, maionese e ketchup. Todos esses ingredientes são cuidadosamente armazenados e preparados, para você se deliciar com um sanduíche fresquinho e de alta qualidade. Imagem meramente ilustrativa.\r\n\r\n', 69.9),
(4, 'Mega Stacker Cheddar 2.0', 2, '04.jpg', 'O Mega Stacker Cheddar voltou! Carne grelhada no fogo, bacon e muito queijo cheddar. Para encarar, não basta ter fome, tem que ter coragem! #PartiuBK. Imagem meramente ilustrativa.', 59.9),
(5, 'Mega Stacker Cheddar 3.0', 2, '05.jpg', 'O Mega Stacker Cheddar está de volta! Um verdadeiro exagero de cheddar. Só quem é louco por queijo tem coragem de encarar esse gigante. E você, tem? #PartiuBK. Imagem meramente ilustrativa.', 69.9),
(6, 'Mega Stacker 3.0', 2, '06.jpg', 'Três deliciosas carnes grelhadas no fogo como churrasco, queijo derretido, bacon e molho Stacker. Uma explosão de sabor. Imagem meramente ilustrativa.', 59.9),
(7, 'Mega Stacker Atômico 3.0', 2, '07.jpg', 'Todo mundo sabe que o Mega Stacker 3.0 tem três carnes. Mas agora ele também pode ter três camadas de queijo e bacon. E aí, você encara? Imagem meramente ilustrativa.', 72.9),
(8, 'Burger do BK', 3, '08.jpg', 'O Burger do BK, do Combo Fenda do BK, vem com carne alta e suculenta, molho rosa sabor defumado, queijo fatiado sabor cheddar, alface, tomate e pepino em um pão com gergelim.', 39.9),
(9, 'Milanesa 1.0', 3, '08.jpg', 'Hambúrguer empanado, queijo, tomate, alface e molho barbecue. Imagem meramente ilustrativa.', 39.9),
(10, 'Cheeseburger', 3, '09.jpg', 'Pão com gergelim, um saboroso hambúrguer de pura carne bovina, uma fatia de queijo derretido, duas fatias de picles, ketchup e mostarda. Imagem meramente ilustrativa.', 29.9),
(11, 'Cheddar', 3, '09.jpg', 'Aquela maravilhosa combinação de pão com gergelim, cheddar cremoso e hambúrguer de carne grelhado no fogo como churrasco. Tudo na medida perfeita da sua fome. Imagem meramente ilustrativa.', 19.9);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

DROP TABLE IF EXISTS `tipo`;
CREATE TABLE IF NOT EXISTS `tipo` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id`, `tipo`) VALUES
(1, 'Whoppers'),
(2, 'Maga Staker'),
(3, 'BK Especial');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
