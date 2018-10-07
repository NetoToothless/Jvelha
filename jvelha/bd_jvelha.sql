-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Out-2018 às 07:00
-- Versão do servidor: 10.1.35-MariaDB
-- versão do PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_jvelha`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_questoes`
--

CREATE TABLE `tb_questoes` (
  `que_id` int(11) NOT NULL,
  `que_enu` varchar(500) DEFAULT NULL,
  `que_a` varchar(11) DEFAULT NULL,
  `que_b` varchar(11) DEFAULT NULL,
  `que_c` varchar(11) DEFAULT NULL,
  `que_d` varchar(11) DEFAULT NULL,
  `que_status` varchar(1) DEFAULT NULL,
  `que_res` varchar(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_questoes`
--

INSERT INTO `tb_questoes` (`que_id`, `que_enu`, `que_a`, `que_b`, `que_c`, `que_d`, `que_status`, `que_res`) VALUES
(1, 'No bairro da Santa Luzia, em Canindé, onde está localizada a nova Escola Profissional (EEEP José Vidal) a coleta de lixo ocorre de 3 em 3 dias e o caminhão que vende gás de cozinha passa de 8 em 8 dias. No dia de hoje, ocorreu a coleta de lixo e passou o caminhão vendendo gás de cozinha. Então, a próxima vez que ocorrerá a coleta de lixo e passará o caminhão vendendo gás em um mesmo dia será daqui a quantos dias?', '( A ) 24 ', '( B ) 21 ', '( C ) 18 ', '( D ) 15 ', '0', 'A'),
(2, 'Um estabelecimento de materiais elétricos tem 3 peças do mesmo fio com 144 m, 420 m, e 810 m. Pretende-se recortá-los em pedaços de tamanhos iguais com o maior comprimento possível. Qual será esse comprimento?', '( A ) 1m.', '( B ) 3m.', '( C ) 6m', '( D ) 12m', '0', 'C'),
(3, 'Uma horta comunitária será criada em uma área de  5100 m². Para o cultivo de hortaliças, serão destinados desta área 23. Quantos metros quadrados serão utilizados neste cultivo?', '( A ) 340.', '( B ) 1700.', '( C ) 2550.', '( D ) 3400.', '0', 'D'),
(4, 'Certo ônibus partindo de Canindé com destino a Fortaleza faz o percurso em 2,4 horas. Isto significa que tal viagem deverá durar:', '( A ) 124 m', '( B ) 144 m', '( C ) 156 m', '( D ) 160 m', '0', 'B'),
(5, 'O professor do 9º ano da Escola Carlos Jereissati, corrigindo as avaliações da sala, viu que Pedro acertou 4/10 das questões. De que forma o professor poderia representar essa fração?', '( A ) 0,04', '( B ) 0,10', '( C ) 0,4', '( D ) 4,10', '0', 'C'),
(6, 'Salvador pintou uma casa em 2 dias. Sabendo-se que ele pintou 0,4 da casa no primeiro dia, no segundo dia ele pintou o restante, que corresponde a:', '( A ) 0,4.', '( B ) 1,6.', '( C ) 6/10.', '( D ) 8/10.', '0', 'C'),
(7, 'O valor da expressão 4/5 + 5/2 é:', '( A ) 9/10', '( B ) 9/7', '( C ) 33/10', '( D ) 1/5', '0', 'C'),
(8, 'Qual o valor da expressão 0,15 + 0,05 – 0,02?', '( A ) 0,18.', '( B ) 1,8', '( C ) 18', '( D ) 0,018', '0', 'A'),
(9, 'Quantos alunos foram reprovados em uma classe de 60 alunos sendo que a taxa de reprovação foi de 15%? ', '( A ) 8', '( B ) 9', '( C ) 10', '( D ) 12', '0', 'B');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_questoes`
--
ALTER TABLE `tb_questoes`
  ADD PRIMARY KEY (`que_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_questoes`
--
ALTER TABLE `tb_questoes`
  MODIFY `que_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
