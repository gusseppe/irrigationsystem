-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema sistemacontrol
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sistemacontrol
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sistemacontrol` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sistemacontrol` ;

-- -----------------------------------------------------
-- Table `sistemacontrol`.`Parcela`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemacontrol`.`Parcela` (
  `idParcela` INT NOT NULL AUTO_INCREMENT,
  `nivelHumedad` INT NOT NULL,
  `lugar` VARCHAR(45) NOT NULL,
  `consumo` FLOAT NOT NULL,
  `estado` INT NOT NULL,
  PRIMARY KEY (`idParcela`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemacontrol`.`Programacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemacontrol`.`Programacion` (
  `idProgramacion` INT NOT NULL AUTO_INCREMENT,
  `fecha` DATE NOT NULL,
  `idParcela` INT NOT NULL,
  `horario` VARCHAR(45) NOT NULL,
  `nivelHumedad` INT NOT NULL,
  PRIMARY KEY (`idProgramacion`),
  INDEX `idParcela_idx` (`idParcela` ASC),
  CONSTRAINT `idParcela`
    FOREIGN KEY (`idParcela`)
    REFERENCES `sistemacontrol`.`Parcela` (`idParcela`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemacontrol`.`Estados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sistemacontrol`.`Estados` (
  `idEstados` INT NOT NULL AUTO_INCREMENT,
  `estado` INT NOT NULL,
  `descripcion` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idEstados`),
  INDEX `estado_idx` (`estado` ASC),
  CONSTRAINT `estado`
    FOREIGN KEY (`estado`)
    REFERENCES `sistemacontrol`.`Parcela` (`idParcela`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
