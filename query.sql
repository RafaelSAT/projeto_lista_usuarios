CREATE DATABASE listagem;

USE listagem;

CREATE TABLE `lista` (
	`id` INT(2) NOT NULL AUTO_INCREMENT,
	`nome` VARCHAR(50) NULL DEFAULT NULL,
	`telefone` VARCHAR(13) NULL DEFAULT NULL,
	`sexo` VARCHAR(10) NULL DEFAULT NULL,
	`tipo` TINYINT(2) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
COLLATE='latin1_swedish_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1;