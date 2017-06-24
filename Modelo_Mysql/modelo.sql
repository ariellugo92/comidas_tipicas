-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema comidas_tipicas
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `comidas_tipicas` ;

-- -----------------------------------------------------
-- Schema comidas_tipicas
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `comidas_tipicas` DEFAULT CHARACTER SET latin1 ;
USE `comidas_tipicas` ;

-- -----------------------------------------------------
-- Table `comidas_tipicas`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comidas_tipicas`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user` VARCHAR(45) NULL,
  `password` LONGTEXT NULL,
  `estado` TINYINT(1) NULL DEFAULT 1,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 1;


-- -----------------------------------------------------
-- Table `comidas_tipicas`.`recetas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comidas_tipicas`.`recetas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `resenia` LONGTEXT NULL,
  `procedimiento` LONGTEXT NULL,
  `tipo` INT NULL COMMENT '0 - comida\n1 - bebida\n2 - postre\n3 - otro',
  `visitas` INT NULL DEFAULT 0,
  `url_img` VARCHAR(500) NULL,
  `id_usuario` INT NULL,
  `estado` TINYINT(1) NULL DEFAULT 1,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_recetas_usuario_idx` (`id_usuario` ASC),
  CONSTRAINT `fk_recetas_usuario`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `comidas_tipicas`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1;


-- -----------------------------------------------------
-- Table `comidas_tipicas`.`receta_ingrediente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comidas_tipicas`.`receta_ingrediente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_receta` INT NULL,
  `ingrediente` VARCHAR(45) NULL,
  `estado` TINYINT(1) NULL DEFAULT 1,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_receta_ingrediente_receta_idx` (`id_receta` ASC),
  CONSTRAINT `fk_receta_ingrediente_receta`
    FOREIGN KEY (`id_receta`)
    REFERENCES `comidas_tipicas`.`recetas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1;


-- -----------------------------------------------------
-- Table `comidas_tipicas`.`resenias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comidas_tipicas`.`resenias` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `autor` VARCHAR(45) NULL,
  `restaurante` VARCHAR(150) NULL,
  `resenia` LONGTEXT NULL,
  `id_usuario` INT NULL,
  `estado` TINYINT(1) NULL DEFAULT 1,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_resenias_usuario_idx` (`id_usuario` ASC),
  CONSTRAINT `fk_resenias_usuario`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `comidas_tipicas`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `comidas_tipicas`.`usuarios`
-- -----------------------------------------------------
START TRANSACTION;
USE `comidas_tipicas`;
INSERT INTO `comidas_tipicas`.`usuarios` (`id`, `user`, `password`, `estado`, `created_at`, `updated_at`) VALUES (DEFAULT, 'admin', '03AC674216F3E15C761EE1A5E255F067953623C8B388B4459E13F978D7C846F4', 1, '2017-01-01', '2017-01-01');

COMMIT;

