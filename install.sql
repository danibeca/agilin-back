DROP TABLE IF EXISTS `business_map` ;
DROP TABLE IF EXISTS `indicator_metric` ;
DROP TABLE IF EXISTS `indicator_instance` ;
DROP TABLE IF EXISTS `business_indicator` ;
DROP TABLE IF EXISTS `external_metric` ;
DROP TABLE IF EXISTS `project_qa_system` ;
DROP TABLE IF EXISTS `project` ;
DROP TABLE IF EXISTS `quality_system` ;
DROP TABLE IF EXISTS `user` ;
DROP TABLE IF EXISTS `account` ;


-- -----------------------------------------------------
-- Table `agilin`.`account`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agilin`.`account` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agilin`.`project`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agilin`.`project` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `account_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `name_UNIQUE` (`name` ASC),
  INDEX `fk_project_account1_idx` (`account_id` ASC),
  CONSTRAINT `fk_project_account1`
    FOREIGN KEY (`account_id`)
    REFERENCES `agilin`.`account` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agilin`.`quality_system`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agilin`.`quality_system` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `wrapper_class` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agilin`.`external_metric`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agilin`.`external_metric` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `quality_system_id` INT NOT NULL,
  `code` VARCHAR(45) NOT NULL,
  `description` VARCHAR(200) NULL,
  INDEX `fk_table1_quality_system_idx` (`quality_system_id` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_table1_quality_system`
    FOREIGN KEY (`quality_system_id`)
    REFERENCES `agilin`.`quality_system` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agilin`.`project_qa_system`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agilin`.`project_qa_system` (
  `project_id` INT NOT NULL,
  `quality_system_id` INT NOT NULL,
  `username` VARCHAR(100) NULL,
  `password` VARCHAR(100) NULL,
  `api_server_url` VARCHAR(250) NOT NULL,
  INDEX `fk_project_qa_system_project1_idx` (`project_id` ASC),
  INDEX `fk_project_qa_system_quality_system1_idx` (`quality_system_id` ASC),
  PRIMARY KEY (`project_id`, `quality_system_id`),
  CONSTRAINT `fk_project_qa_system_project1`
    FOREIGN KEY (`project_id`)
    REFERENCES `agilin`.`project` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_project_qa_system_quality_system1`
    FOREIGN KEY (`quality_system_id`)
    REFERENCES `agilin`.`quality_system` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agilin`.`business_indicator`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agilin`.`business_indicator` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `code` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `code_UNIQUE` (`code` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agilin`.`indicator_instance`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agilin`.`indicator_instance` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `business_indicator_id` INT NOT NULL,
  `quality_system_id` INT NOT NULL,
  `calculator_class` VARCHAR(100) NOT NULL,
  INDEX `fk_business_indicator_has_quality_system_quality_system1_idx` (`quality_system_id` ASC),
  INDEX `fk_business_indicator_has_quality_system_business_indicator_idx` (`business_indicator_id` ASC),
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_business_indicator_has_quality_system_business_indicator1`
    FOREIGN KEY (`business_indicator_id`)
    REFERENCES `agilin`.`business_indicator` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_business_indicator_has_quality_system_quality_system1`
    FOREIGN KEY (`quality_system_id`)
    REFERENCES `agilin`.`quality_system` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agilin`.`indicator_metric`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agilin`.`indicator_metric` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `indicator_instance_id` INT NOT NULL,
  `external_metric_id` INT NOT NULL,
  `calculator_class` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_business_indicator_has_metric_metric1_idx` (`external_metric_id` ASC),
  INDEX `fk_indicator_metric_instace_indicator1_idx` (`indicator_instance_id` ASC),
  CONSTRAINT `fk_business_indicator_has_metric_metric1`
    FOREIGN KEY (`external_metric_id`)
    REFERENCES `agilin`.`external_metric` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_indicator_metric_instace_indicator1`
    FOREIGN KEY (`indicator_instance_id`)
    REFERENCES `agilin`.`indicator_instance` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agilin`.`business_map`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agilin`.`business_map` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `indicator_metric_id` INT NOT NULL,
  `lowest_value` DOUBLE NOT NULL,
  `highest_value` DOUBLE NOT NULL,
  `business_value` DOUBLE NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_business_map_indicator_metric1_idx` (`indicator_metric_id` ASC),
  CONSTRAINT `fk_business_map_indicator_metric1`
    FOREIGN KEY (`indicator_metric_id`)
    REFERENCES `agilin`.`indicator_metric` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `agilin`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `agilin`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `name` VARCHAR(100) NULL,
  `account_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_user_account1_idx` (`account_id` ASC),
  CONSTRAINT `fk_user_account1`
    FOREIGN KEY (`account_id`)
    REFERENCES `agilin`.`account` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Test DATA
-- -----------------------------------------------------
INSERT INTO `account` (`id`,`name`) VALUES
 (1,'testing account');

INSERT INTO `user` (`id`,`username`,`password`,`name`,`account_id`) VALUES
 (1,'danibeca','shaking','Daniel', '1');

 INSERT INTO `project` (`id`,`name`, `account_id`) VALUES
 (1,'com.mvchib%3Aspring', 1),
 (2,'org.testng%3Atestng', 1);


 INSERT INTO `quality_system` (`id`,`name`,`wrapper_class`) VALUES
 (1,'SonarQube6','Agilin\\Models\\QualitySystems\\Wrappers\\Sonar6Wrapper');

 INSERT INTO `project_qa_system` (`project_id`,`quality_system_id`,`username`,`password`,`api_server_url`) VALUES
 (1,1,NULL,NULL,'https://sonarqube.com/api');

 INSERT INTO `project_qa_system` (`project_id`,`quality_system_id`,`username`,`password`,`api_server_url`) VALUES
 (2,1,NULL,NULL,'https://sonarqube.com/api');


 INSERT INTO `business_indicator` (`id`,`name`,`code`) VALUES
 (1,'Indicador de Calidad en el codigo','qa_indicator');

 INSERT INTO `indicator_instance` (`id`, `business_indicator_id`,`quality_system_id`, `calculator_class`) VALUES
 (1,1,1, 'Agilin\\Models\\Projects\\Indicators\\Calculations\\DefaultIndicatorCalculator');

 INSERT INTO `external_metric` (`id`,`quality_system_id`,`code`,`description`) VALUES
 (1,1,'function_complexity',NULL),
 (2,1,'duplicated_lines_density',NULL),
 (3,1,'sqale_index',NULL);

 INSERT INTO `indicator_metric` (`id`, `indicator_instance_id`, `external_metric_id`,`calculator_class`) VALUES
 (1,1,1,'Agilin\\Models\\Projects\\Indicators\\Calculations\\Metrics\\SonarComplexityCalculator'),
 (2,1,2,'Agilin\\Models\\Projects\\Indicators\\Calculations\\Metrics\\SonarDensityDuplicationCalculator'),
 (3,1,3,'Agilin\\Models\\Projects\\Indicators\\Calculations\\Metrics\\SonarTechnicalDebtCalculator');

INSERT INTO `business_map` (`indicator_metric_id`,`lowest_value`,`highest_value`,`business_value`) VALUES
(1,1,10,100),
(1,11,13,90),
(1,14,16,80),
(1,17,19,75),
(1,20,23,70),
(1,24,30,60),
(1,31,40,50),
(1,41,50,40),
(1,51,60,30),
(1,61,65,20),
(1,66,70,10),
(1,70,100000,0),
(2,0,1,100),
(2,1,5,90 ),
(2,6,10,80),
(2,11,15,70),
(2,16,20,60),
(2,21,25,50),
(2,25,30,40),
(2,31,40,30),
(2,41,50,20),
(2,51,60,10),
(2,60,1000,0),
(3,0,1,100),
(3,1,5,95),
(3,6,10,90),
(3,11,15,80),
(3,16,20,70),
(3,21,30,60),
(3,31,40,50),
(3,41,60,40),
(3,61,80,30),
(3,81,100,20),
(3,101,120,10),
(3,120,1000,0);