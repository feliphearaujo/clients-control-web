CREATE SCHEMA IF NOT EXISTS `trabalhofinalweb` DEFAULT CHARACTER SET utf8 ;
USE `trabalhofinalweb` ;


CREATE TABLE IF NOT EXISTS `trabalhofinalweb`.`usuario` (
  `idusuario` INT NOT NULL AUTO_INCREMENT,
  `cpfusuario` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idusuario`));


CREATE TABLE IF NOT EXISTS `trabalhofinalweb`.`cliente` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  `cpfcliente` VARCHAR(45) NOT NULL,
  `nome` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `endereco` VARCHAR(255) NOT NULL,
  `dia` VARCHAR(45) NOT NULL,
  `valor` VARCHAR(45) NOT NULL,
  `servico` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcliente`))
