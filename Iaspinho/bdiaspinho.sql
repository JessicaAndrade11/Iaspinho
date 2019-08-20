-- phpMyAdmin SQL Dump
-- version 2.9.2
-- http://www.phpmyadmin.net
-- 
-- Servidor: localhost
-- Tempo de Geração: Jun 12, 2016 as 10:42 PM
-- Versão do Servidor: 5.0.27
-- Versão do PHP: 5.2.1
-- 
-- Banco de Dados: `bdiaspinho`
-- 

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `tb_aluno`
-- 

CREATE TABLE `tb_aluno` (
  `ra` int(11) NOT NULL,
  `nome_aluno` varchar(100) NOT NULL,
  PRIMARY KEY  (`ra`),
  KEY `ra` (`ra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Extraindo dados da tabela `tb_aluno`
-- 

INSERT INTO `tb_aluno` (`ra`, `nome_aluno`) VALUES 
(1, 'Joao'),
(2, 'Maria'),
(3, 'Jose'),
(4, 'Ana');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `tb_atraso`
-- 

CREATE TABLE `tb_atraso` (
  `id_atraso` int(11) NOT NULL auto_increment,
  `ra` int(11) NOT NULL,
  `motivo_atraso` text NOT NULL,
  `data_atraso` date NOT NULL,
  `horario` time NOT NULL,
  PRIMARY KEY  (`id_atraso`),
  KEY `ra` (`ra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

-- 
-- Extraindo dados da tabela `tb_atraso`
-- 

INSERT INTO `tb_atraso` (`id_atraso`, `ra`, `motivo_atraso`, `data_atraso`, `horario`) VALUES 
(2, 2, 'a', '2016-05-11', '23:59:00'),
(32, 1, 'K', '2016-05-16', '00:00:00'),
(33, 2, 'S', '2016-05-09', '00:00:00');

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `tb_uniforme`
-- 

CREATE TABLE `tb_uniforme` (
  `id_uniforme` int(11) NOT NULL auto_increment,
  `motivo_uniforme` text NOT NULL,
  `data_uniforme` date NOT NULL,
  `ra` int(11) NOT NULL,
  PRIMARY KEY  (`id_uniforme`),
  KEY `ra` (`ra`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

-- 
-- Extraindo dados da tabela `tb_uniforme`
-- 

INSERT INTO `tb_uniforme` (`id_uniforme`, `motivo_uniforme`, `data_uniforme`, `ra`) VALUES 
(6, 'e', '2016-05-11', 2);

-- --------------------------------------------------------

-- 
-- Estrutura da tabela `tb_usuario`
-- 

CREATE TABLE `tb_usuario` (
  `login` varchar(50) NOT NULL,
  `nome_usuario` varchar(100) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `adm` tinyint(1) NOT NULL,
  PRIMARY KEY  (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Extraindo dados da tabela `tb_usuario`
-- 

INSERT INTO `tb_usuario` (`login`, `nome_usuario`, `senha`, `adm`) VALUES 
('adm@adm.com', 'adm', 'adm', 1),
('joao@a.com', 'joao silva', 'joao', 0),
('teste@teste.com', 'teste', 'teste', 0);

-- 
-- Restrições para as tabelas dumpadas
-- 

-- 
-- Restrições para a tabela `tb_atraso`
-- 
ALTER TABLE `tb_atraso`
  ADD CONSTRAINT `tb_atraso_ibfk_1` FOREIGN KEY (`ra`) REFERENCES `tb_aluno` (`ra`);

-- 
-- Restrições para a tabela `tb_uniforme`
-- 
ALTER TABLE `tb_uniforme`
  ADD CONSTRAINT `tb_uniforme_ibfk_1` FOREIGN KEY (`ra`) REFERENCES `tb_aluno` (`ra`);
