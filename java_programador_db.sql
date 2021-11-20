-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2021 às 12:46
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `java_programador_db`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `perguntas`
--

CREATE TABLE `perguntas` (
  `id` int(255) NOT NULL,
  `pergunta` varchar(255) NOT NULL,
  `alternativa_a` varchar(255) NOT NULL,
  `alternativa_b` varchar(255) NOT NULL,
  `alternativa_c` varchar(255) NOT NULL,
  `alternativa_d` varchar(255) NOT NULL,
  `resposta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `perguntas`
--

INSERT INTO `perguntas` (`id`, `pergunta`, `alternativa_a`, `alternativa_b`, `alternativa_c`, `alternativa_d`, `resposta`) VALUES
(1, 'O que será exibido com o seguinte comando? System.out.println(\"Alô mundo!\");', 'Alô mundo!', 'System.out.println', 'out.println', 'System', 'Alô mundo!'),
(2, 'Qual desse é mais indicado para criar uma classe chamada \"PrimeiraClasse\"?', 'classe PrimeiraClasse', 'public class PrimeiraClasse {}', 'function PrimeiraClasse {}', 'Nem uma das alternativas', 'public class PrimeiraClasse {}'),
(3, 'Na POO, uma classe', 'Não se podem definir características.', 'Se definem comportamentos por meio de atributos.', 'Não é molde de construção de objetos.', 'Se definem características e comportamentos.', 'Se definem características e comportamentos.'),
(4, 'Sobre Programação Orientada a Objetos (POO), assinale a alternativa incorreta.', 'É um padrão que independe da linguagem utilizada.', 'O conceito de herança está fortemente atrelado ao reuso de código.', 'Herança múltipla é uma característica padrão e obrigatória para todas as linguagens.', 'O encapsulamento existe para esconder as propriedades de um objeto.', 'Herança múltipla é uma característica padrão e obrigatória para todas as linguagens.'),
(5, 'Dos trechos de códigos abaixo, extraídos de um arquivo fonte escrito para a versão 8 da linguagem Java, o único que compila corretamente é', 'String x = (String) (b > c) ? \"true\" : \"false\"', 'public static void main (String ... args){}', 'final enum letra {A, B, C}', 'Boolean bool = new Boolean()', 'public static void main (String ... args){}'),
(6, 'Qual função do ambiente de programação Java deve ser utilizada para se retornar o caractere de uma determinada posição da string? ', 'valueOf', 'compateTo', 'charAt', 'split', 'charAt'),
(7, 'Análise a sentença a seguir:  Arrays.asList(new X(), new Y()).stream().mapToInt(X::m).sum()? Dadas as classes X e Y, respectivamente, class X {int m() {return 1;}} e class Y extends X{int m(){return 2;}}, essa sentença apresentada', 'não compila.', 'gera uma exceção em tempo de execução. ', 'resulta no valor 1. ', 'resulta no valor 3', 'não compila.'),
(8, 'pergunta teste', 'teste a', 'teste b', 'correto', 'teste d', 'correto'),
(9, 'pergunta teste', 'correto', 'teste b', 'teste c', 'teste d', 'correto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `email`, `nome`, `senha`) VALUES
(1, 'admin@admin', 'admin', 'admin'),
(2, 'lucas@gmail.com', 'Lucas', '1234'),
(3, 'vitor@gmail.com', 'Vitor', '1234'),
(6, 'jose@gmail.com', 'jose', '123321'),
(9, 'rico@gmail.com', 'Rico', '1234'),
(10, 'jonas@gmail.com', 'Jonas', '1234'),
(11, 'paulo@gmail.com', 'Paulo', '1234'),
(13, 'rafaela@gmail.com', 'Rafaela', '1234'),
(14, 'teste@gmail.com', 'teste', '1234'),
(15, 'teste1@gmail.com', 'teste1', '1234');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `perguntas`
--
ALTER TABLE `perguntas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `perguntas`
--
ALTER TABLE `perguntas`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
