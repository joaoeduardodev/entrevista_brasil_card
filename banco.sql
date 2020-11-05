-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.31-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para id15319615_funcionarios
CREATE DATABASE IF NOT EXISTS `id15319615_funcionarios` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `id15319615_funcionarios`;

-- Copiando estrutura para tabela id15319615_funcionarios.funcionarios
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `idFuncionarios` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `rg` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pispasep` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dataNasc` date NOT NULL,
  `cep` varchar(9) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `numero` int(11) NOT NULL,
  `bairro` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `complemento` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefone1` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `telefone2` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `escolaridade` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `instEnsino` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cargo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `setor` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `salario` int(11) NOT NULL,
  PRIMARY KEY (`idFuncionarios`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela id15319615_funcionarios.funcionarios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
INSERT INTO `funcionarios` (`idFuncionarios`, `nome`, `cpf`, `rg`, `pispasep`, `dataNasc`, `cep`, `cidade`, `estado`, `rua`, `numero`, `bairro`, `complemento`, `email`, `telefone1`, `telefone2`, `escolaridade`, `instEnsino`, `cargo`, `setor`, `salario`) VALUES
	(15, 'Joao Eduardo de L Silva', '111.111.111-11', 'MG20202020', '12345.1234578-12', '1999-07-03', '37142-000', 'Divisa Nova', 'Minas Gerais', 'Amazonas', 2, 'Centro', 'Casa', 'joaoeduardo980@gmail.com', '35 99992-9091', '35 99992-9091', 'Ensino Superior Incompleto', 'INSTITUTO FEDERAL', 'Cadastrador', 'Ãgil/Saque', 1200),
	(16, 'Mariana', '333.333.333-33', 'MG30303030', '12345.12345678-90', '1996-06-18', '37142-000', 'Divisa Nova', 'Minas Gerais', 'paraiba', 1, 'centro', 'casa', 'admin@gmail.com', '35 99992-9091', '35999929091', 'Ensino Superior Incompleto', 'INSTITUTO FEDERAL', 'Promotor', 'Bolt', 2000),
	(17, 'JosÃ©', '444.444.444-44', 'SP40404040', '65432.876543-78', '1998-07-19', '37142-000', 'Divisa Nova', 'Minas Gerais', 'Sergipe', 14, 'centro', 'casa', 'admin@outlook.com', '35 99992-9091', '35 99992-9091', 'Ensino Superior Incompleto', 'INSTITUTO FEDERAL', 'Cadastrador', 'Ãgil/Saque', 1045);
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
