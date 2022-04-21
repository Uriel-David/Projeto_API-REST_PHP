-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 30-Dez-2020 às 17:35
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api_athletes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `athletes_soccer`
--

DROP TABLE IF EXISTS `api_athletes`.`athletes_soccer`;
CREATE TABLE `api_athletes`.`athletes_soccer` ( 
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(60) NOT NULL ,
  `nif` VARCHAR(9) NOT NULL ,
  `morada` VARCHAR(60) NOT NULL ,
  `telefone` VARCHAR(9) NOT NULL ,
  `email` VARCHAR(40) NOT NULL ,
  `data_nascimento` VARCHAR(10) NOT NULL ,
  `altura` VARCHAR(10) NOT NULL ,
  `peso` VARCHAR(10) NOT NULL ,
  `modalidade` VARCHAR(20) NOT NULL ,
  `pe_preferencial` VARCHAR(10) NOT NULL ,
  `posicao_campo` VARCHAR(15) NOT NULL ,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nif` (`nif`),
  UNIQUE KEY `email` (`email`)
  ) ENGINE = InnoDB;

--
-- Extraindo dados da tabela `athletes_soccer`
--

INSERT INTO `athletes_soccer` (`id`, `nome`, `nif`, `morada`, `telefone`, `email`, `data_nascimento`, `altura`, `peso`, `modalidade`, `pe_preferencial`, `posicao_campo`) VALUES
(NULL, 'Joaquim', '123456789', 'Rua Joaquim Moreira, Nº 999', '123456789', 'joaquim@bomdebola.com', '99-99-9999', '175', '75', 'Futebol', 'Esquerdo', 'Atacante');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Estrutura da tabela `athletes_karate`
--

DROP TABLE IF EXISTS `api_athletes`.`athletes_karate`;
CREATE TABLE `api_athletes`.`athletes_karate` ( 
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(60) NOT NULL ,
  `nif` VARCHAR(9) NOT NULL ,
  `morada` VARCHAR(60) NOT NULL ,
  `telefone` VARCHAR(9) NOT NULL ,
  `email` VARCHAR(40) NOT NULL ,
  `data_nascimento` VARCHAR(10) NOT NULL ,
  `altura` VARCHAR(10) NOT NULL ,
  `peso` VARCHAR(10) NOT NULL ,
  `modalidade` VARCHAR(20) NOT NULL ,
  `cinturao` VARCHAR(15) NOT NULL ,
  `estilo` VARCHAR(15) NOT NULL ,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nif` (`nif`),
  UNIQUE KEY `email` (`email`)
  ) ENGINE = InnoDB;

--
-- Extraindo dados da tabela `athletes_karate`
--

INSERT INTO `athletes_karate` (`id`, `nome`, `nif`, `morada`, `telefone`, `email`, `data_nascimento`, `altura`, `peso`, `modalidade`, `cinturao`, `estilo`) VALUES
(NULL, 'Joaquim', '123456789', 'Rua Joaquim Moreira, Nº 999', '123456789', 'joaquim@stevenseagal.com', '99-99-9999', '175', '75', 'Karate', 'Vermelho', 'Shotokan');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Estrutura da tabela `athletes_tenis`
--

DROP TABLE IF EXISTS `api_athletes`.`athletes_tenis`;
CREATE TABLE `api_athletes`.`athletes_tenis` ( 
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(60) NOT NULL ,
  `nif` VARCHAR(9) NOT NULL ,
  `morada` VARCHAR(60) NOT NULL ,
  `telefone` VARCHAR(9) NOT NULL ,
  `email` VARCHAR(40) NOT NULL ,
  `data_nascimento` VARCHAR(10) NOT NULL ,
  `altura` VARCHAR(10) NOT NULL ,
  `peso` VARCHAR(10) NOT NULL ,
  `modalidade` VARCHAR(20) NOT NULL ,
  `mao_preferencial` VARCHAR(10) NOT NULL ,
  `ranking_mundial` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nif` (`nif`),
  UNIQUE KEY `email` (`email`)
  ) ENGINE = InnoDB;

--
-- Extraindo dados da tabela `athletes_tenis`
--

INSERT INTO `athletes_tenis` (`id`, `nome`, `nif`, `morada`, `telefone`, `email`, `data_nascimento`, `altura`, `peso`, `modalidade`, `mao_preferencial`, `ranking_mundial`) VALUES
(NULL, 'Joaquim', '123456789', 'Rua Joaquim Moreira, Nº 999', '123456789', 'joaquim@ryomaechizen.com', '99-99-9999', '175', '75', 'Tenis', 'Direita', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;