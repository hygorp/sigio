-- MySQL Script generated by MySQL Workbench
-- Tue Mar 26 01:07:05 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema sigio
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sigio
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sigio` DEFAULT CHARACTER SET utf8 ;
USE `sigio` ;

-- -----------------------------------------------------
-- Table `sigio`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`usuarios` (
  `id_usuarios` INT NOT NULL AUTO_INCREMENT,
  `nome_usuarios` VARCHAR(15) NOT NULL,
  `senha_usuarios` VARCHAR(32) NOT NULL,
  `nivel_acesso_usuarios` INT NOT NULL,
  PRIMARY KEY (`id_usuarios`, `nome_usuarios`))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `sigio`.`funcionarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`funcionarios` (
  `matricula_funcionarios` INT NOT NULL AUTO_INCREMENT,
  `nome_completo_funcionarios` VARCHAR(100) NOT NULL,
  `data_nascimento_funcionarios` VARCHAR(8) NOT NULL,
  `cpf_funcionarios` VARCHAR(11) NOT NULL,
  `rg_funcionarios` VARCHAR(10) NOT NULL,
  `orgao_emissor_funcionarios` VARCHAR(10) NOT NULL,
  `cep_funcionarios` VARCHAR(8) NOT NULL,
  `endereco_funcionarios` VARCHAR(100) NOT NULL,
  `complemento_funcionarios` VARCHAR(100) NOT NULL,
  `bairro_funcionarios` VARCHAR(50) NOT NULL,
  `cidade_funcionarios` VARCHAR(50) NOT NULL,
  `uf_funcionarios` VARCHAR(2) NOT NULL,
  `pais_funcionarios` VARCHAR(50) NOT NULL,
  `telefone_funcionarios` VARCHAR(10) NULL,
  `celular1_funcionarios` VARCHAR(11) NOT NULL,
  `celular2_funcionarios` VARCHAR(11) NULL,
  `email_funcionarios` VARCHAR(45) NULL,
  `cargo_funcionarios` VARCHAR(45) NOT NULL,
  `salario_funcionarios` DECIMAL(10,2) NOT NULL,
  `data_admissao_funcionarios` VARCHAR(8) NOT NULL,
  `data_demissao_funcionarios` VARCHAR(8) NULL,
  `status_funcionarios` VARCHAR(10) NOT NULL,
  `nome_usuarios_funcionarios` VARCHAR(15) NOT NULL,
  UNIQUE INDEX `matricula_funcionarios_UNIQUE` (`matricula_funcionarios` ASC) VISIBLE,
  PRIMARY KEY (`matricula_funcionarios`),
  UNIQUE INDEX `cpf_funcionarios_UNIQUE` (`cpf_funcionarios` ASC) VISIBLE
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`dentistas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`dentistas` (
  `matricula_dentistas` INT NOT NULL AUTO_INCREMENT,
  `nome_completo_dentistas` VARCHAR(100) NOT NULL,
  `data_nascimento_dentistas` VARCHAR(8) NOT NULL,
  `cpf_dentistas` VARCHAR(11) NOT NULL,
  `rg_dentistas` VARCHAR(10) NOT NULL,
  `orgao_emissor_dentistas` VARCHAR(10) NOT NULL,
  `cep_dentistas` VARCHAR(8) NOT NULL,
  `endereco_dentistas` VARCHAR(100) NOT NULL,
  `complemento_dentistas` VARCHAR(100) NOT NULL,
  `bairro_dentistas` VARCHAR(50) NOT NULL,
  `cidade_dentistas` VARCHAR(50) NOT NULL,
  `uf_dentistas` VARCHAR(2) NOT NULL,
  `pais_dentistas` VARCHAR(50) NOT NULL,
  `telefone_dentistas` VARCHAR(10) NULL,
  `celular1_dentistas` VARCHAR(11) NOT NULL,
  `celular2_dentistas` VARCHAR(11) NULL,
  `email_dentistas` VARCHAR(50) NULL,
  `especialidade1_dentistas` VARCHAR(50) NOT NULL,
  `especialidade2_dentistas` VARCHAR(50) NOT NULL,
  `especialidade3_dentistas` VARCHAR(50) NOT NULL,
  `conselho_tipo_dentistas` VARCHAR(10) NOT NULL,
  `conselho_numero_dentistas` VARCHAR(10) NOT NULL,
  `conselho_estado_dentistas` VARCHAR(2) NOT NULL,
  `comissao_dentistas` FLOAT NOT NULL,
  `data_admissao_dentistas` VARCHAR(8) NOT NULL,
  `data_demissao_dentistas` VARCHAR(8) NULL,
  `status_dentistas` VARCHAR(10) NOT NULL,
  `nome_usuarios_dentistas` VARCHAR(15) NOT NULL,
  PRIMARY KEY (`cpf_dentistas`),
  UNIQUE INDEX `matricula_dentistas_UNIQUE` (`matricula_dentistas` ASC) VISIBLE,
  UNIQUE INDEX `cpf_dentistas_UNIQUE` (`cpf_dentistas` ASC) VISIBLE
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`convenios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`convenios` (
  `id_convenios` INT,
  `razao_social_convenios` VARCHAR(100) NOT NULL,
  `nome_fantasia_convenios` VARCHAR(100) NOT NULL,
  `inscricao_estadual_convenios` VARCHAR(15) NOT NULL,
  `cnpj_convenios` VARCHAR(14) NOT NULL,
  `cep_convenios` VARCHAR(8) NOT NULL,
  `endereco_convenios` VARCHAR(100) NOT NULL,
  `complemento_convenios` VARCHAR(100) NOT NULL,
  `bairro_convenios` VARCHAR(50) NOT NULL,
  `cidade_convenios` VARCHAR(50) NOT NULL,
  `uf_convenios` VARCHAR(2) NOT NULL,
  `telefone_convenios` VARCHAR(10) NULL,
  `celular1_convenios` VARCHAR(11) NOT NULL,
  `celular2_convenios` VARCHAR(11) NULL,
  `email_convenios` VARCHAR(50) NULL,
  `nome_representante_convenios` VARCHAR(100) NOT NULL,
  `celular_representante_convenios` VARCHAR(11) NOT NULL,
  `banco_convenios` VARCHAR(45) NOT NULL,
  `agencia_banco_convenios` VARCHAR(15) NOT NULL,
  `operacao_banco_convenios` VARCHAR(15) NOT NULL,
  `conta_banco_convenios` VARCHAR(15) NOT NULL,
  `tipo_conta_banco_convenios` VARCHAR(45) NOT NULL,
  `favorecido_banco_convenios` VARCHAR(50) NOT NULL,
  `observacoes_convenios` VARCHAR(80),
  PRIMARY KEY (`id_convenios`, `nome_fantasia_convenios`),
  UNIQUE INDEX `cnpj_convenios_UNIQUE` (`cnpj_convenios` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`pacientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`pacientes` (
  `matricula_pacientes` INT NOT NULL AUTO_INCREMENT,
  `nome_completo_pacientes` VARCHAR(100) NOT NULL,
  `data_nascimento_pacientes` VARCHAR(8) NOT NULL,
  `cpf_pacientes` VARCHAR(11) NOT NULL,
  `rg_pacientes` VARCHAR(10) NOT NULL,
  `orgao_emissor_pacientes` VARCHAR(10) NOT NULL,
  `cep_pacientes` VARCHAR(8) NOT NULL,
  `endereco_pacientes` VARCHAR(100) NOT NULL,
  `complemento_pacientes` VARCHAR(100) NOT NULL,
  `bairro_pacientes` VARCHAR(50) NOT NULL,
  `cidade_pacientes` VARCHAR(50) NOT NULL,
  `uf_pacientes` VARCHAR(2) NOT NULL,
  `pais_pacientes` VARCHAR(50) NOT NULL,
  `telefone_pacientes` VARCHAR(10) NULL,
  `celular1_pacientes` VARCHAR(11) NOT NULL,
  `celular2_pacientes` VARCHAR(11) NULL,
  `email_pacientes` VARCHAR(50) NULL,
  `status_pacientes` VARCHAR(10) NOT NULL,
  `carteira_convenio_pacientes` INT NOT NULL,
  `titular_convenio_pacientes` VARCHAR(100) NOT NULL,
  `tipo_plano_convenio_pacientes` VARCHAR(100) NOT NULL,
  `data_cadastro_pacientes` VARCHAR(8) NOT NULL,
  `id_convenios_pacientes` INT NOT NULL,
  UNIQUE INDEX `matricula_pacientes_UNIQUE` (`matricula_pacientes` ASC) VISIBLE,
  PRIMARY KEY (`cpf_pacientes`),
  UNIQUE INDEX `cpf_pacientes_UNIQUE` (`cpf_pacientes` ASC) VISIBLE
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`estoque`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`estoque` (
  `id_estoque` INT NOT NULL AUTO_INCREMENT,
  `produto_estoque` VARCHAR(50) NOT NULL,
  `descricao_produto_estoque` VARCHAR(100) NOT NULL,
  `valor_produto_estoque` DECIMAL(10,2) NOT NULL,
  `codigo_produto_estoque` INT NOT NULL,
  `quantidade_estoque` INT NOT NULL,
  `data_entrada_estoque` VARCHAR(8) NOT NULL,
  `data_retirada_estoque` VARCHAR(8),
  `usuario_cadastro_estoque` VARCHAR(15) NOT NULL,
  `observacoes_estoque` VARCHAR(100),
  `unidade_medida_estoque` VARCHAR(45) NULL,
  PRIMARY KEY (`id_estoque`),
  UNIQUE INDEX `id_estoque_UNIQUE` (`id_estoque` ASC) VISIBLE
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`patrimonio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`patrimonio` (
  `id_patrimonio` INT NOT NULL AUTO_INCREMENT,
  `nome_patrimonio` VARCHAR(45) NOT NULL,
  `descricao_patrimonio` VARCHAR(45) NOT NULL,
  `quantidade_patrimonio` INT NOT NULL,
  `data_cadastro_patrimonio` VARCHAR(8) NOT NULL,
  `status_patrimonio` VARCHAR(50) NULL,
  `usuario_cadastro_patrimonio` VARCHAR(15) NOT NULL,
  `setor_patrimonio` VARCHAR(45) NOT NULL,
  `valor_patrimonio` DECIMAL(10,2) NOT NULL,
  `data_compra_patrimonio` VARCHAR(8) NULL,
  `cor_produto_patrimonio` VARCHAR(15) NULL,
  `fabricante_patrimonio` VARCHAR(45) NULL,
  `nota_fiscal_patrimonio` INT NULL,
  `serie_nota_fiscal_patrimonio` INT NULL,
  `observacoes_patrimonio` VARCHAR(100),
  `cobertura_garantia_patrimonio` VARCHAR(8) NULL,
  UNIQUE INDEX `id_patrimonio_UNIQUE` (`id_patrimonio` ASC) VISIBLE,
  PRIMARY KEY (`id_patrimonio`)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`procedimentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`procedimentos` (
  `codigo_procedimentos` VARCHAR(15) NOT NULL,
  `nome_procedimentos` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`codigo_procedimentos`, `nome_procedimentos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`anamnese`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`anamnese` (
  `matricula_pacientes_anamnese` INT NOT NULL,
  PRIMARY KEY (`matricula_pacientes_anamnese`)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`laboratorios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`laboratorios` (
  `id_laboratorios` INT NOT NULL AUTO_INCREMENT,
  `razao_social_laboratorios` VARCHAR(100) NOT NULL,
  `nome_fantasia_laboratorios` VARCHAR(100) NOT NULL,
  `inscricao_estadual_laboratorios` VARCHAR(15) NOT NULL,
  `cnpj_laboratorios` VARCHAR(14) NOT NULL,
  `atuacao_laboratorios` VARCHAR(100) NOT NULL,
  `cep_laboratorios` VARCHAR(8) NOT NULL,
  `endereco_laboratorios` VARCHAR(100) NOT NULL,
  `complemento_laboratorios` VARCHAR(100) NOT NULL,
  `bairro_laboratorios` VARCHAR(50) NOT NULL,
  `cidade_laboratorios` VARCHAR(50) NOT NULL,
  `uf_laboratorios` VARCHAR(2) NOT NULL,
  `telefone_laboratorios` VARCHAR(10) NOT NULL,
  `celular1_laboratorios` VARCHAR(11) NOT NULL,
  `celular2_laboratorios` VARCHAR(11) NOT NULL,
  `email_laboratorios` VARCHAR(50) NOT NULL,
  `nome_representante_laboratorios` VARCHAR(100) NOT NULL,
  `celular_representante_laboratorios` VARCHAR(11) NOT NULL,
  `banco_laboratorios` VARCHAR(45) NOT NULL,
  `agencia_banco_laboratorios` VARCHAR(15) NOT NULL,
  `operacao_banco_laboratorios` VARCHAR(15) NOT NULL,
  `conta_banco_laboratorios` VARCHAR(15) NOT NULL,
  `tipo_conta_banco_laboratorios` VARCHAR(45) NOT NULL,
  `favorecido_banco_laboratorios` VARCHAR(50) NOT NULL,
  `observacoes_laboratorios` VARCHAR(80),
  PRIMARY KEY (`id_laboratorios`, `nome_fantasia_laboratorios`),
  UNIQUE INDEX `cnpj_laboratorios_UNIQUE` (`cnpj_laboratorios` ASC) VISIBLE,
  UNIQUE INDEX `id_laboratorios_UNIQUE` (`id_laboratorios` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`fornecedores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`fornecedores` (
  `id_fornecedores` INT NOT NULL AUTO_INCREMENT,
  `razao_social_fornecedores` VARCHAR(100) NOT NULL,
  `nome_fantasia_fornecedores` VARCHAR(100) NOT NULL,
  `inscricao_estadual_fornecedores` VARCHAR(15) NOT NULL,
  `cnpj_fornecedores` VARCHAR(14) NOT NULL,
  `atuacao_fornecedores` VARCHAR(100) NOT NULL,
  `cep_fornecedores` VARCHAR(8) NOT NULL,
  `endereco_fornecedores` VARCHAR(100) NOT NULL,
  `complemento_fornecedores` VARCHAR(100) NOT NULL,
  `bairro_fornecedores` VARCHAR(50) NOT NULL,
  `cidade_fornecedores` VARCHAR(50) NOT NULL,
  `uf_fornecedores` VARCHAR(2) NOT NULL,
  `telefone_fornecedores` VARCHAR(10) NOT NULL,
  `celular1_fornecedores` VARCHAR(11) NOT NULL,
  `celular2_fornecedores` VARCHAR(11) NOT NULL,
  `email_fornecedores` VARCHAR(50) NOT NULL,
  `nome_representante_fornecedores` VARCHAR(100) NOT NULL,
  `celular_representante_fornecedores` VARCHAR(11) NOT NULL,
  `banco_fornecedores` VARCHAR(45) NOT NULL,
  `agencia_banco_fornecedores` VARCHAR(15) NOT NULL,
  `operacao_banco_fornecedores` VARCHAR(15) NOT NULL,
  `conta_banco_fornecedores` VARCHAR(15) NOT NULL,
  `tipo_conta_banco_fornecedores` VARCHAR(45) NOT NULL,
  `favorecido_banco_fornecedores` VARCHAR(50) NOT NULL,
  `observacoes_fornecedores` VARCHAR(80),
  PRIMARY KEY (`id_fornecedores`, `nome_fantasia_fornecedores`),
  UNIQUE INDEX `id_fornecedores_UNIQUE` (`id_fornecedores` ASC) VISIBLE,
  UNIQUE INDEX `cnpj_fornecedores_UNIQUE` (`cnpj_fornecedores` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`agenda`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`agenda` (
  `matricula_dentistas_agenda` INT NOT NULL,
  `matricula_pacientes_agenda` INT NOT NULL,
  `data_consulta_agenda` VARCHAR(8) NOT NULL,
  `hora_consulta_agenda` TIME NOT NULL,
  `observacoes_agenda` VARCHAR(100),
  PRIMARY KEY (`matricula_dentistas_agenda`, `matricula_pacientes_agenda`)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`atestados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`atestados` (
  `matricula_dentistas_atestados` INT NOT NULL,
  `matricula_pacientes_atestados` INT NOT NULL,
  `descricao_atestados` VARCHAR(200) NOT NULL,
  `data_atestados` VARCHAR(8) NOT NULL,
  `hora_entrada_atestados` TIME NOT NULL,
  `hora_saida_atestados` TIME NOT NULL,
  PRIMARY KEY (`matricula_dentistas_atestados`, `matricula_pacientes_atestados`)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`contaspagar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`contaspagar` (
  `id_contaspagar` INT NOT NULL AUTO_INCREMENT,
  `data_vencimento_contaspagar` VARCHAR(8) NOT NULL,
  `nome_contaspagar` VARCHAR(45) NOT NULL,
  `descricao_contaspagar` VARCHAR(100) NOT NULL,
  `valor_contaspagar` DECIMAL(10,2) NOT NULL,
  `data_pagamento_contaspagar` VARCHAR(8) NOT NULL,
  PRIMARY KEY (`id_contaspagar`),
  UNIQUE INDEX `id_contaspagar_UNIQUE` (`id_contaspagar` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`contasreceber`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`contasreceber` (
  `id_contasreceber` INT NOT NULL AUTO_INCREMENT,
  `data_vencimento_contasrebecer` VARCHAR(8) NOT NULL,
  `nome_contasreceber` VARCHAR(45) NOT NULL,
  `descricao_contasreceber` VARCHAR(100) NOT NULL,
  `valor_contasreceber` DECIMAL(10,2) NOT NULL,
  `data_recebimento_contasreceber` VARCHAR(8) NOT NULL,
  PRIMARY KEY (`id_contasreceber`),
  UNIQUE INDEX `id_contasreceber_UNIQUE` (`id_contasreceber` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`orcamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`orcamentos` (
  `id_orcamentos` INT NOT NULL AUTO_INCREMENT,
  `matricula_pacientes_orcamentos` INT NOT NULL,
  `matricula_dentistas_orcamentos` INT NOT NULL,
  `codigo_procedimentos` VARCHAR(15) NOT NULL,
  `valor_tratamento_orcamentos` DECIMAL(10,2) NOT NULL,
  PRIMARY KEY (`id_orcamentos`),
  UNIQUE INDEX `id_orcamentos_UNIQUE` (`id_orcamentos` ASC) VISIBLE
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`clinica`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`clinica` (
  `razao_social_clinica` VARCHAR(100) NOT NULL,
  `nome_fantasia_clinica` VARCHAR(100) NOT NULL,
  `inscricao_estadual_clinica` VARCHAR(15) NOT NULL,
  `cnpj_clinica` VARCHAR(14) NOT NULL,
  `cep_clinica` VARCHAR(8) NOT NULL,
  `endereco_clinica` VARCHAR(100) NOT NULL,
  `complemento_clinica` VARCHAR(100) NOT NULL,
  `bairro_clinica` VARCHAR(50) NOT NULL,
  `cidade_clinica` VARCHAR(50) NOT NULL,
  `uf_clinica` VARCHAR(2) NOT NULL,
  `telefone_clinica` VARCHAR(10) NOT NULL,
  `celular1_clinica` VARCHAR(11) NOT NULL,
  `celular2_clinica` VARCHAR(11) NOT NULL,
  `email_clinica` VARCHAR(50) NOT NULL,
  `banco1_clinica` VARCHAR(45) NOT NULL,
  `agencia1_banco_clinica` VARCHAR(15) NOT NULL,
  `operacao1_banco_clinica` VARCHAR(15) NOT NULL,
  `conta1_banco_clinica` VARCHAR(15) NOT NULL,
  `tipo1_conta_banco_clinica` VARCHAR(45) NOT NULL,
  `favorecido1_banco_clinica` VARCHAR(50) NOT NULL,
  `banco2_clinica` VARCHAR(45) NOT NULL,
  `agencia2_banco_clinica` VARCHAR(15) NOT NULL,
  `operacao2_banco_clinica` VARCHAR(15) NOT NULL,
  `conta2_banco_clinica` VARCHAR(15) NOT NULL,
  `tipo2_conta_banco_clinica` VARCHAR(45) NOT NULL,
  `favorecido2_banco_clinica` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`razao_social_clinica`, `cnpj_clinica`),
  UNIQUE INDEX `cnpj_clinica_UNIQUE` (`cnpj_clinica` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`especialidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`especialidades` (
  `codigo_especialidades` INT NOT NULL AUTO_INCREMENT,
  `descricao_especialidades` VARCHAR(100) NOT NULL,
  `matricula_dentistas_especialidades` INT NULL,
  PRIMARY KEY (`codigo_especialidades`)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`odontograma`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`odontograma` (
  `matricula_pacientes_odontograma` INT NOT NULL,
  `dente_odontograma` INT NOT NULL,
  `descricao_odontograma` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`matricula_pacientes_odontograma`)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`formaspagamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`formaspagamento` (
  `id_formaspagamento` INT UNSIGNED NOT NULL,
  `descricao_formaspagamento` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_formaspagamento`),
  UNIQUE INDEX `id_formaspagamento_UNIQUE` (`id_formaspagamento` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`ortodontia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`ortodontia` (
  `matricula_pacientes_ortodontia` INT NOT NULL,
  `previsao_ortodontia` VARCHAR(200) NOT NULL,
  `razoes_ortodontia` VARCHAR(200) NOT NULL,
  `motivacao_ortodontia` VARCHAR(200) NOT NULL,
  `perfil_ortodontia` VARCHAR(200) NOT NULL,
  `simetria_ortodontia` VARCHAR(200) NOT NULL,
  `tipologia_ortodontia` VARCHAR(200) NOT NULL,
  `classe_ortodontia` VARCHAR(200) NOT NULL,
  `mordida_ortodontia` VARCHAR(200) NOT NULL,
  `spee_ortodontia` VARCHAR(200) NOT NULL,
  `overbite_ortodontia` VARCHAR(200) NOT NULL,
  `overjet_ortodontia` VARCHAR(200) NOT NULL,
  `media_ortodontia` VARCHAR(200) NOT NULL,
  `atm_ortodontia` VARCHAR(200) NOT NULL,
  `radio_ortodontia` VARCHAR(200) NOT NULL,
  `modelo_ortodontia` VARCHAR(200) NOT NULL,
  `observacoes_ortodontia` VARCHAR(200),
  PRIMARY KEY (`matricula_pacientes_ortodontia`)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`implantodontia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`implantodontia` (
  `matricula_pacientes_implantodontia` INT NOT NULL,
  `regioes_implantodontia` VARCHAR(200) NOT NULL,
  `areas_implantodontia` VARCHAR(200) NOT NULL,
  `marca_implantodontia` VARCHAR(200) NOT NULL,
  `enxerto_implantodontia` VARCHAR(3) NOT NULL,
  `tipo_enxerto_implantodontia` VARCHAR(200) NOT NULL,
  `observacoes_implantodontia` VARCHAR(200),
  PRIMARY KEY (`matricula_pacientes_implantodontia`)
)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sigio`.`endodontia_tratamento_realizado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sigio`.`endodontia_tratamento_realizado` (
  `matricula_pacientes_endodontia` INT NOT NULL,
  `canal_endodontia_tratamento_realizado` VARCHAR(45) NOT NULL,
  `comprimento_endodontia_tratamento_realizado` VARCHAR(45) NOT NULL,
  `lima_inicial_endodontia_tratamento_realizado` VARCHAR(45) NOT NULL,
  `lima_final_endodontia_tratamento_realizado` VARCHAR(45) NOT NULL,
  `referencia_endodontia_tratamento_realizado` VARCHAR(45) NOT NULL,
  `descricao_endodontia_tratamento_realizado` VARCHAR(45) NOT NULL,
  `data_alta_endodontia_tratamento_realizado` VARCHAR(8) NULL,
  PRIMARY KEY (`matricula_pacientes_endodontia`)
)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
