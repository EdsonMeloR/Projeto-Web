-- Modelagem de dados
-- Ontem
-- dom. 21:31

-- Edson Rodrigues editou 1 item
-- SQL
-- ScriptBancoProsperity.sql
-- dom. 21:31

-- Edson Rodrigues editou 1 item
-- Arquivo binário
-- modelo_conceitual.brM3
-- dom. 21:31

-- Edson Rodrigues editou 1 item
-- Arquivo compactado
-- BancoProject.mwb.bak
-- dom. 21:31

-- Edson Rodrigues editou 1 item
-- Arquivo compactado
-- BancoProject.mwb
-- Semana passada
-- sex. 19:45

-- Edson Rodrigues editou 1 item
-- SQL
-- ScriptBancoProsperity.sql
-- sex. 19:45

-- Edson Rodrigues editou 1 item
-- Arquivo binário
-- modelo_conceitual.brM3
-- sex. 19:45

-- Edson Rodrigues editou 1 item
-- Arquivo compactado
-- BancoProject.mwb.bak
-- sex. 19:45

-- Edson Rodrigues editou 1 item
-- Arquivo compactado
-- BancoProject.mwb
-- sex. 19:25

-- Edson Rodriguesmoveu 2 itens para a lixeira
-- Arquivo compactado
-- ProjetoShellCode.mwb
-- Arquivo binário
-- modelo_logico.brM3
-- sex. 17:23

-- Edson Rodrigues fez o upload de 1 item
-- Arquivo compactado
-- ProjetoShellCode.mwb
-- sex. 17:18

-- Você e Edson Rodrigues editaram 1 item
-- Excel
-- dicionario_de_dados.xlsx
-- sex. 15:09

-- Edson Rodrigues editou 1 item
-- Arquivo compactado
-- BancoProject.mwb.bak
-- sex. 15:09

-- Edson Rodrigues editou 1 item
-- Arquivo binário
-- modelo_logico.brM3
-- sex. 15:09

-- Edson Rodrigues editou 1 item
-- Arquivo binário
-- modelo_conceitual.brM3
-- sex. 15:09

-- Edson Rodrigues editou 1 item
-- Arquivo compactado
-- BancoProject.mwb
-- sex. 15:09

-- Edson Rodrigues editou 1 item
-- SQL
-- ScriptBancoProsperity.sql
-- qui. 12:46

-- Edson Rodrigues editou 1 item
-- Arquivo binário
-- modelo_conceitual.brM3
-- qui. 12:46

-- Edson Rodrigues editou 1 item
-- Arquivo binário
-- modelo_logico.brM3
-- qui. 12:46

-- Edson Rodrigues editou 1 item
-- SQL
-- ScriptBancoProsperity.sql
-- qui. 12:46

-- Edson Rodrigues editou 1 item
-- Arquivo compactado
-- BancoProject.mwb.bak
-- -- MySQL Workbench Forward Engineering

-- SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
-- SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
-- SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -- -----------------------------------------------------
-- -- Schema mydb
-- -- -----------------------------------------------------
-- -- -----------------------------------------------------
-- -- Schema prosperitydb
-- -- -----------------------------------------------------

-- -- -----------------------------------------------------
-- -- Schema prosperitydb
-- -- -----------------------------------------------------
-- CREATE SCHEMA IF NOT EXISTS `prosperitydb` DEFAULT CHARACTER SET utf8 ;
-- USE `prosperitydb` ;

-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`niveis`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`niveis` (
--   `idNiveis` INT(11) NOT NULL AUTO_INCREMENT,
--   `NomeNivel` VARCHAR(20) NOT NULL,
--   PRIMARY KEY (`idNiveis`))
-- ENGINE = InnoDB
-- AUTO_INCREMENT = 10
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`usuario`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`usuario` (
--   `idUsuario` INT(11) NOT NULL AUTO_INCREMENT,
--   `Nome` VARCHAR(60) NOT NULL,
--   `Cpf` CHAR(11) NOT NULL,
--   `Telefone` VARCHAR(11) NOT NULL,
--   `Senha` VARCHAR(60) NOT NULL,
--   `Email` VARCHAR(60) NOT NULL,
--   `idNiveis` INT(11) NOT NULL,
--   `PrimeiroLogin` TINYINT(4) NOT NULL,
--   PRIMARY KEY (`idUsuario`),
--   INDEX `fk_Usuario_Niveis1` (`idNiveis` ASC) VISIBLE,
--   CONSTRAINT `fk_Usuario_Niveis1`
--     FOREIGN KEY (`idNiveis`)
--     REFERENCES `prosperitydb`.`niveis` (`idNiveis`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION)
-- ENGINE = InnoDB
-- AUTO_INCREMENT = 10
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`cliente`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`cliente` (
--   `IdCliente` INT(11) NOT NULL AUTO_INCREMENT,
--   `RazaoSocial` VARCHAR(60) NOT NULL,
--   `Cnpj` CHAR(11) NOT NULL,
--   `Email` VARCHAR(60) NOT NULL,
--   `Inscricao_estadual` VARCHAR(60) NOT NULL,
--   `Senha` VARCHAR(60) NOT NULL,
--   `Telefone` VARCHAR(11) NOT NULL,
--   `NomeContato` VARCHAR(60) NOT NULL,
--   PRIMARY KEY (`IdCliente`))
-- ENGINE = InnoDB
-- AUTO_INCREMENT = 8
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`pedidos`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`pedidos` (
--   `idPedidos` INT(11) NOT NULL AUTO_INCREMENT,
--   `Situacao` VARCHAR(20) NOT NULL,
--   `DataPedido` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
--   `Retirar` BIT(1) NOT NULL,
--   `Usuario_idUsuario` INT(11) NULL DEFAULT NULL,
--   `cliente_IdCliente` INT(11) NOT NULL,
--   PRIMARY KEY (`idPedidos`),
--   INDEX `fk_Pedidos_Usuario1` (`Usuario_idUsuario` ASC) VISIBLE,
--   INDEX `fk_pedidos_cliente1_idx` (`cliente_IdCliente` ASC) VISIBLE,
--   CONSTRAINT `fk_Pedidos_Usuario1`
--     FOREIGN KEY (`Usuario_idUsuario`)
--     REFERENCES `prosperitydb`.`usuario` (`idUsuario`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION,
--   CONSTRAINT `fk_pedidos_cliente1`
--     FOREIGN KEY (`cliente_IdCliente`)
--     REFERENCES `prosperitydb`.`cliente` (`IdCliente`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION)
-- ENGINE = InnoDB
-- AUTO_INCREMENT = 99
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`tiposcargas`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`tiposcargas` (
--   `idTipo` INT(11) NOT NULL AUTO_INCREMENT,
--   `Nome` VARCHAR(30) NOT NULL,
--   `DescricaoTipo` VARCHAR(45) NOT NULL,
--   PRIMARY KEY (`idTipo`))
-- ENGINE = InnoDB
-- AUTO_INCREMENT = 8
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`carga`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`carga` (
--   `idCarga` INT(11) NOT NULL AUTO_INCREMENT,
--   `idTipo` INT(11) NOT NULL,
--   `idPedidos` INT(11) NOT NULL,
--   `Peso` DECIMAL(10,4) NOT NULL,
--   `Largura` DECIMAL(10,2) NOT NULL,
--   `Altura` DECIMAL(10,2) NOT NULL,
--   `Comprimento` DECIMAL(10,2) NOT NULL,
--   `NomeProduto` VARCHAR(45) NOT NULL,
--   `DetalhesProduto` VARCHAR(45) NULL DEFAULT NULL,
--   `ValorProduto` DECIMAL(10,2) NOT NULL,
--   `Quantidade` INT(11) NOT NULL,
--   PRIMARY KEY (`idCarga`),
--   INDEX `fk_Carga_Pedidos1` (`idPedidos` ASC) VISIBLE,
--   INDEX `fk_carga_tiposcargas1` (`idTipo` ASC) VISIBLE,
--   CONSTRAINT `fk_Carga_Pedidos1`
--     FOREIGN KEY (`idPedidos`)
--     REFERENCES `prosperitydb`.`pedidos` (`idPedidos`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION,
--   CONSTRAINT `fk_carga_tiposcargas1`
--     FOREIGN KEY (`idTipo`)
--     REFERENCES `prosperitydb`.`tiposcargas` (`idTipo`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION)
-- ENGINE = InnoDB
-- AUTO_INCREMENT = 43
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`endereco`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`endereco` (
--   `idEndereco` INT(11) NOT NULL AUTO_INCREMENT,
--   `Logradouro` VARCHAR(40) NOT NULL,
--   `Cep` CHAR(8) NOT NULL,
--   `Numero` VARCHAR(5) NOT NULL,
--   `Complemento` VARCHAR(30) NOT NULL,
--   `Referencia` VARCHAR(20) NOT NULL,
--   `IdCliente` INT(11) NOT NULL,
--   PRIMARY KEY (`idEndereco`),
--   INDEX `fk_Endereco_Cliente` (`IdCliente` ASC) VISIBLE,
--   CONSTRAINT `fk_Endereco_Cliente`
--     FOREIGN KEY (`IdCliente`)
--     REFERENCES `prosperitydb`.`cliente` (`IdCliente`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION)
-- ENGINE = InnoDB
-- AUTO_INCREMENT = 14
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`motorista`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`motorista` (
--   `idMotorista` INT(11) NOT NULL AUTO_INCREMENT,
--   `Nome` VARCHAR(60) NOT NULL,
--   `Cpf` CHAR(11) NULL DEFAULT NULL,
--   `Rg` CHAR(9) NOT NULL,
--   `Cnh` CHAR(11) NOT NULL,
--   `ValidadeCnh` DATE NOT NULL,
--   `CategoriaCnh` CHAR(1) NOT NULL,
--   `Senha` VARCHAR(60) NOT NULL,
--   `PrimeiroLogin` BIT(1) NOT NULL,
--   PRIMARY KEY (`idMotorista`))
-- ENGINE = InnoDB
-- AUTO_INCREMENT = 3
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`veiculo`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`veiculo` (
--   `idVeiculo` INT(11) NOT NULL AUTO_INCREMENT,
--   `Placa` CHAR(7) NOT NULL,
--   `Marca` VARCHAR(50) NOT NULL,
--   `Modelo` VARCHAR(50) NOT NULL,
--   `Renavam` CHAR(11) NOT NULL,
--   `PesoMaximo` DECIMAL(10,3) NOT NULL,
--   `Altura` DECIMAL(10,2) NOT NULL,
--   `Largura` DECIMAL(10,2) NOT NULL,
--   `Comprimento` DECIMAL(10,2) NOT NULL,
--   `Eixos` INT(11) NOT NULL,
--   `CustoPorKm` DECIMAL(10,2) NOT NULL,
--   PRIMARY KEY (`idVeiculo`),
--   UNIQUE INDEX `Placa_UNIQUE` (`Placa` ASC) VISIBLE)
-- ENGINE = InnoDB
-- AUTO_INCREMENT = 6
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`tiposfretes`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`tiposfretes` (
--   `idTiposFretes` INT(11) NOT NULL,
--   `Nome` VARCHAR(45) NOT NULL,
--   `Descricao` VARCHAR(45) NOT NULL,
--   PRIMARY KEY (`idTiposFretes`))
-- ENGINE = InnoDB
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`notatransporte`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`notatransporte` (
--   `idNotaTransporte` INT(11) NOT NULL AUTO_INCREMENT,
--   `idVeiculo` INT(11) NOT NULL,
--   `idMotorista` INT(11) NOT NULL,
--   `idTiposFretes` INT(11) NOT NULL,
--   `Observacoes` VARCHAR(255) NULL DEFAULT NULL,
--   `ValorPedagios` DECIMAL(10,2) NOT NULL,
--   `Distancia` DECIMAL(10,3) NOT NULL,
--   `DataEntrega` DATE NULL DEFAULT NULL,
--   `ValorFrete` DECIMAL(10,2) NOT NULL,
--   PRIMARY KEY (`idNotaTransporte`),
--   INDEX `fk_NotaTransporte_Motorista1` (`idMotorista` ASC) VISIBLE,
--   INDEX `fk_NotaTransporte_Veiculo1` (`idVeiculo` ASC) VISIBLE,
--   INDEX `fk_notatransporte_TiposFretes1` (`idTiposFretes` ASC) VISIBLE,
--   CONSTRAINT `fk_NotaTransporte_Motorista1`
--     FOREIGN KEY (`idMotorista`)
--     REFERENCES `prosperitydb`.`motorista` (`idMotorista`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION,
--   CONSTRAINT `fk_NotaTransporte_Veiculo1`
--     FOREIGN KEY (`idVeiculo`)
--     REFERENCES `prosperitydb`.`veiculo` (`idVeiculo`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION,
--   CONSTRAINT `fk_notatransporte_TiposFretes1`
--     FOREIGN KEY (`idTiposFretes`)
--     REFERENCES `prosperitydb`.`tiposfretes` (`idTiposFretes`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION)
-- ENGINE = InnoDB
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`entrega`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`entrega` (
--   `idEntrega` INT(11) NOT NULL AUTO_INCREMENT,
--   `Assinatura` BLOB NOT NULL,
--   `Rg` CHAR(9) NOT NULL,
--   `Data` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
--   `Status` VARCHAR(20) NOT NULL,
--   `idNotaTransporte` INT(11) NOT NULL,
--   PRIMARY KEY (`idEntrega`),
--   INDEX `fk_Entrega_NotaTransporte1` (`idNotaTransporte` ASC) VISIBLE,
--   CONSTRAINT `fk_Entrega_NotaTransporte1`
--     FOREIGN KEY (`idNotaTransporte`)
--     REFERENCES `prosperitydb`.`notatransporte` (`idNotaTransporte`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION)
-- ENGINE = InnoDB
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`historico`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`historico` (
--   `idHistorico` INT(11) NOT NULL AUTO_INCREMENT,
--   `Evento` VARCHAR(40) NOT NULL,
--   `Descricao` VARCHAR(255) NOT NULL,
--   `Data` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
--   PRIMARY KEY (`idHistorico`))
-- ENGINE = InnoDB
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`itensnotatransporte`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`itensnotatransporte` (
--   `idCarga` INT(11) NOT NULL,
--   `idNotaTransporte` INT(11) NOT NULL,
--   INDEX `fk_ItensNotaTransporte_Carga1` (`idCarga` ASC) VISIBLE,
--   INDEX `fk_ItensNotaTransporte_NotaTransporte1` (`idNotaTransporte` ASC) VISIBLE,
--   CONSTRAINT `fk_ItensNotaTransporte_Carga1`
--     FOREIGN KEY (`idCarga`)
--     REFERENCES `prosperitydb`.`carga` (`idCarga`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION,
--   CONSTRAINT `fk_ItensNotaTransporte_NotaTransporte1`
--     FOREIGN KEY (`idNotaTransporte`)
--     REFERENCES `prosperitydb`.`notatransporte` (`idNotaTransporte`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION)
-- ENGINE = InnoDB
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`tiposenderecos`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`tiposenderecos` (
--   `idTiposEnderecos` INT(11) NOT NULL AUTO_INCREMENT,
--   `Nome` VARCHAR(45) NOT NULL,
--   `Descricao` VARCHAR(45) NOT NULL,
--   PRIMARY KEY (`idTiposEnderecos`))
-- ENGINE = InnoDB
-- AUTO_INCREMENT = 6
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`pedidosenderecos`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`pedidosenderecos` (
--   `IdPedidosEnderecos` INT(11) NOT NULL AUTO_INCREMENT,
--   `idEndereco` INT(11) NOT NULL,
--   `idPedidos` INT(11) NOT NULL,
--   `idTiposEnderecos` INT(11) NOT NULL,
--   PRIMARY KEY (`IdPedidosEnderecos`),
--   INDEX `fk_endereco_has_pedidos_endereco1` (`idEndereco` ASC) VISIBLE,
--   INDEX `fk_endereco_has_pedidos_pedidos1` (`idPedidos` ASC) VISIBLE,
--   INDEX `fk_PedidosEnderecos_TiposEnderecos1` (`idTiposEnderecos` ASC) VISIBLE,
--   CONSTRAINT `fk_PedidosEnderecos_TiposEnderecos1`
--     FOREIGN KEY (`idTiposEnderecos`)
--     REFERENCES `prosperitydb`.`tiposenderecos` (`idTiposEnderecos`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION,
--   CONSTRAINT `fk_endereco_has_pedidos_endereco1`
--     FOREIGN KEY (`idEndereco`)
--     REFERENCES `prosperitydb`.`endereco` (`idEndereco`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION,
--   CONSTRAINT `fk_endereco_has_pedidos_pedidos1`
--     FOREIGN KEY (`idPedidos`)
--     REFERENCES `prosperitydb`.`pedidos` (`idPedidos`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION)
-- ENGINE = InnoDB
-- AUTO_INCREMENT = 151
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`planos`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`planos` (
--   `idPlanos` INT(11) NOT NULL AUTO_INCREMENT,
--   `NomePlano` VARCHAR(60) NOT NULL,
--   `DescricaoPlano` VARCHAR(255) NOT NULL,
--   `ValorPlano` DECIMAL(10,2) NOT NULL,
--   `DuracaoPlano` INT(11) NOT NULL,
--   `LimitePedidos` INT(11) NOT NULL,
--   PRIMARY KEY (`idPlanos`))
-- ENGINE = InnoDB
-- AUTO_INCREMENT = 5
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`planocliente`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`planocliente` (
--   `idPlanoCliente` INT(11) NOT NULL AUTO_INCREMENT,
--   `DataInicio` DATETIME NOT NULL,
--   `DataTermino` DATETIME NOT NULL,
--   `Desconto` DECIMAL(10,2) NOT NULL,
--   `idCliente` INT(11) NOT NULL,
--   `idPlanos` INT(11) NOT NULL,
--   PRIMARY KEY (`idPlanoCliente`),
--   INDEX `fk_PlanoClliente_Cliente1` (`idCliente` ASC) VISIBLE,
--   INDEX `fk_PlanoClliente_Planos1` (`idPlanos` ASC) VISIBLE,
--   CONSTRAINT `fk_PlanoClliente_Cliente1`
--     FOREIGN KEY (`idCliente`)
--     REFERENCES `prosperitydb`.`cliente` (`IdCliente`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION,
--   CONSTRAINT `fk_PlanoClliente_Planos1`
--     FOREIGN KEY (`idPlanos`)
--     REFERENCES `prosperitydb`.`planos` (`idPlanos`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION)
-- ENGINE = InnoDB
-- AUTO_INCREMENT = 3
-- DEFAULT CHARACTER SET = utf8;


-- -- -----------------------------------------------------
-- -- Table `prosperitydb`.`voucher`
-- -- -----------------------------------------------------
-- CREATE TABLE IF NOT EXISTS `prosperitydb`.`voucher` (
--   `idVoucher` INT(11) NOT NULL AUTO_INCREMENT,
--   `Codigo` VARCHAR(45) NOT NULL,
--   `DataInicio` DATETIME NOT NULL,
--   `DataTermino` DATETIME NOT NULL,
--   `IdCliente` INT(11) NOT NULL,
--   `idPlanos` INT(11) NOT NULL,
--   PRIMARY KEY (`idVoucher`),
--   INDEX `fk_Voucher_cliente1_idx` (`IdCliente` ASC) VISIBLE,
--   INDEX `fk_Voucher_planos1_idx` (`idPlanos` ASC) VISIBLE,
--   CONSTRAINT `fk_Voucher_cliente1`
--     FOREIGN KEY (`IdCliente`)
--     REFERENCES `prosperitydb`.`cliente` (`IdCliente`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION,
--   CONSTRAINT `fk_Voucher_planos1`
--     FOREIGN KEY (`idPlanos`)
--     REFERENCES `prosperitydb`.`planos` (`idPlanos`)
--     ON DELETE NO ACTION
--     ON UPDATE NO ACTION)
-- ENGINE = InnoDB
-- DEFAULT CHARACTER SET = utf8;

-- USE `prosperitydb` ;

-- -- -----------------------------------------------------
-- -- procedure alterar_planocliente
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `alterar_planocliente`(_idPlanoCliente int,_DataInicio datetime,_DataTermino datetime,_Desconto decimal(10,2),_idPlano int)
-- begin
-- 	update planocliente set DataInicio = _DataInicio,
-- 							DataTermino = _DataTermino,
-- 							Desconto = _Desconto,
--                             idPlanos = _idPlano
-- 	where idPlanoCliente = _idPlanoCliente;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure delete_endereco
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_endereco`(_idendereco int, _idcliente int)
-- begin
-- 	delete from endereco where idEndereco = _idendereco && IdCliente = _idcliente;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure delete_nivel
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `delete_nivel`(_id int)
-- begin
-- 	delete from niveis where idNiveis = _id;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure insert_carga
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_carga`(_idtipo int,_idpedido int,_peso decimal(10,4),_largura decimal(10,2),_altura decimal(10,2)
-- 							,_comprimento decimal(10,2),_nomeproduto varchar(45), _detalhesproduto varchar(45),_valor decimal(10,2),_quantidade int)
-- begin
-- 	insert into carga (idTipo,idPedidos,Peso,Largura,Altura,Comprimento,NomeProduto,DetalhesProduto,ValorProduto,Quantidade)
--     values (_idtipo,_idpedido,_peso,_largura,_altura,_comprimento,_nomeproduto,_detalhesproduto,_valor,_quantidade);
--     select * from carga where idCarga = last_insert_id();
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure insert_cliente
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_cliente`(_razaosocial varchar(60),_cnpj char(11),_email varchar(60), _inscricaoestadual varchar(60),
-- 										_senha varchar(60),_telefone varchar(11), _nomecontato varchar(60))
-- begin 
-- 	insert into cliente (RazaoSocial,Cnpj,Email,Inscricao_estadual,Senha,Telefone,NomeContato)
--     values (_razaosocial,_cnpj,_email,_inscricaoestadual,_senha,_telefone,_nomecontato);
    
--     select * from cliente where IdCliente = last_insert_id();
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure insert_endereco
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_endereco`(_logradouro varchar(40), _cep char(8), _numero varchar(5),
-- 								_complemento varchar(30), _referencia varchar(20),_idcliente int)
-- begin
-- 	insert into endereco (Logradouro,Cep,Numero,Complemento,Referencia,IdCliente) 
--     values(_logradouro,_cep,_numero,_complemento,_referencia,_idcliente);    
--     select * from endereco where idEndereco = last_insert_id();
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure insert_entrega
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_entrega`(_assinatura blob,_rg char(9),_data datetime,_status varchar(20), 
-- 								_idnotatransporte int)
-- begin 
-- 	insert into entrega (Assinatura,Rg,Data,Status,idNotaTransporte)
--     values (_assinatura,_rg,_data,_status,_idnotatransporte);
--     select * from entrega where idEntrega = last_insert_id();
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure insert_itensnotatrans
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_itensnotatrans`(_idcarga int, _idnotatransporte int)
-- begin
-- 	insert into itensnotatransporte(idCarga,idNotaTransporte)
--     values (_idcarga,_idnotatransporte);
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure insert_motorista
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_motorista`(_nome varchar(60), _cpf char(11), _rg char(9), _cnh char(11)
-- 									, _validadecnh date,_categoriacnh char(1),_senha varchar(60),_primeirologin bit)
-- begin
-- 	insert into motorista (Nome,Cpf,Rg,Cnh,ValidadeCnh,CategoriaCnh,Senha,PrimeiroLogin)
--     values (_nome,_cpf,_rg,_cnh,_validadecnh,_categoriacnh,_senha,_primeirologin);
--     select * from motorista where idMotorista = last_insert_id();
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure insert_nivel
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_nivel`(_nome varchar(20))
-- begin
-- 	insert into niveis (NomeNivel) values (_nome);
--     select * from niveis where idNiveis = last_insert_id();
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure insert_notatransporte
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_notatransporte`(_idmotorista int,_idveiculo int,_idtiposfretes int,
-- 																	_observacoes varchar(255),_valorpedagios decimal(10,2),
--                                                                     _distancia decimal(10,3),_dataEntrega date,_valor decimal(10,2))
-- begin
-- 	insert into notatransporte (idVeiculo,idMotorista,idTiposFretes,Observacoes,ValorPedagios,Distancia,DataEntrega,ValorFrete)
--     values (_idmotorista,_idveiculo,_idtiposfretes,_observacoes,_valorpedagios,_distancia,_dataEntrega,_valor);
--     select * from notatransporte where idNotaTransporte = last_insert_id();
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure insert_pedido
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_pedido`(_situacao varchar(20), _retirar bit,_idusuario int,_idcliente int)
-- begin
-- 	insert into pedidos (Situacao,Retirar,Usuario_idUsuario,cliente_IdCliente)
--     values(_situacao,_retirar,_idusuario,_idcliente);
--     select * from pedidos where idPedidos = last_insert_id();
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure insert_pedidosenderecos
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_pedidosenderecos`(_idEndereco int,_idPedido int, _idTipoEndereco int)
-- begin
-- 	insert into pedidosenderecos (idEndereco,idPedidos,idTiposEnderecos)
--     values (_idEndereco,_idPedido,_idTipoEndereco);
--     select * from pedidosenderecos where IdPedidosEnderecos = last_insert_id();
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure insert_planocliente
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_planocliente`(_datainicio datetime,_datatermino datetime,_desconto decimal(10,2),_idcliente int,_idplano int)
-- begin
-- 	insert into planocliente(DataInicio,DataTermino,Desconto,idCliente,idPlanos)
--     values (_datainicio,_datatermino,_desconto,_idcliente,_idplano);
--     select * from planocliente where idPlanoClliente = last_insert_id();
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure insert_planos
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_planos`(_nomeplano varchar(30),_descricao varchar(255),_valor decimal(10,2),_duracaoplano int,_limitepedidos int)
-- begin 
-- 	insert into planos (NomePlano,DescricaoPlano,ValorPlano,DuracaoPlano,LimitePedidos)
--     values (_nomeplano,_descricao,_valor,_duracaoplano,_limitepedidos);
--     select * from planos where idPlanos = last_insert_id();
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure insert_usuario
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_usuario`(_nome varchar(60),_cpf char(11),_telefone varchar(11),
-- 								_senha varchar(60), _email varchar(60),_nivel int,_firstlogin tinyint)
-- begin
-- 	insert into usuario (Nome,Cpf,Telefone,Senha,Email,idNiveis,PrimeiroLogin)
--     values (_nome,_cpf,_telefone,_senha,_email,_nivel,_firstlogin);    
--     select * from usuario where idUsuario = last_insert_id();
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure insert_veiculo
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_veiculo`(_placa char(7),_marca varchar(50),_modelo varchar(50),_renavam varchar(11)
-- 								,_pesoMaximo decimal(10,4),_altura decimal(10,2),_largura decimal(10,2),
--                                 _comprimento decimal(10,2),_eixo int,_custo decimal(10,2))
-- begin
-- 	insert into veiculo(Placa,Marca,Modelo,Renavam,PesoMaximo,Altura,Largura,Comprimento,Eixos,CustoPorKm)
--     values(_placa,_marca,_modelo,_renavam,_pesoMaximo,_altura,_largura,_comprimento,_eixo,_custo);
--     select * from veiculo where idVeiculo = last_insert_id();
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure insert_voucher
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `insert_voucher`(codigo varchar(45),dataInicio datetime, dataTermino datetime,idcliente int, idplano int)
-- begin
-- 	insert into voucher(Codigo,DataInicio,DataTermino,IdCliente,idPlanos)
--     values (codigo,dataInicio,dataTermino,idcliente,idplano);
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_carga
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_carga`(_peso decimal(10,4),_largura decimal(10,2),_altura decimal(10,2),_comprimento decimal(10,2),
-- 								_nomeproduto varchar(45), _detalhesproduto varchar(45),_id int,_idtipo int,_valor decimal(10,2))
-- begin
-- 	update carga set idTipo = _idtipo,
-- 					Peso = _peso,
-- 					Largura = _largura,
--                     Altura = _altura,
--                     Comprimento = _comprimento,
--                     NomeProduto = _nomeproduto,
--                     DetalhesProduto = _detalhesproduto,
--                     ValorProduto = _valor
-- 	where idCarga = _id;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_cliente
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_cliente`(_idcliente int, _telefone varchar(11),_nomecontato varchar(60),
-- 									_email varchar(60),_razaosocial varchar(60))
-- begin 
-- 	update cliente set Telefone = _telefone,
-- 						NomeContato = _nomecontato,
--                         Email = _email,
--                         RazaoSocial = _razaosocial
-- 	where IdCliente = _idcliente;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_endereco
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_endereco`(_logradouro varchar(40), _cep char(8), _numero varchar(5),
-- 								_complemento varchar(30), _referencia varchar(20),_idendereco int)
-- begin 
-- 	update endereco set Logradouro = _logradouro,
-- 						Cep = _cep,
--                         Numero = _numero,
--                         Complemento = _complemento,
--                         Referencia = _referencia                       
-- 	where idEndereco = _idendereco;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_entrega
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_entrega`(_identrega int,_assinatura blob,_status varchar(20))
-- begin 
-- 	update entrega set Status = _status
-- 	where idEntrega = _identrega;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_motorista
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_motorista`(_id int, _validadecnh date, _categoriacnh char(1))
-- begin
-- 	update motorista set ValidadeCnh = _validadecnh,
-- 						CategoriaCnh = _categoriacnh
-- 	where idMotorista = _id;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_nivel
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_nivel`(_id int,_nome varchar(20))
-- begin
-- 	update niveis set NomeNivel = _nome where idNiveis = _id;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_nivel_usuario
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_nivel_usuario`(_nivel int, _id int)
-- begin
-- 	update usuario set idNiveis = _nivel where idUsuario = _id;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_notatransporte
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_notatransporte`(_idveiculo int, _idmotorista int, _id int,_idtipo int,
-- 																	_observacoes varchar(255),_distancia decimal(10,2),_valorfrete decimal(10,2))
-- begin
-- 	update notatransporte set idVeiculo = _idveiculo,
-- 								idMotorista = _idmotorista,
--                                 idTiposFretes = _idtipo,
--                                 Observacoes = _observacoes,
--                                 Distancia = _distancia,
--                                 ValorFrete = _valorfrete
-- 	where idNotaTransporte = _id;								
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_password_cliente
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_password_cliente`(_idcliente int, _senha varchar(60))
-- begin 
-- 	update cliente set Senha = _senha where IdCliente = _idcliente;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_password_motorista
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_password_motorista`(_id int,_senha varchar(60))
-- begin 
-- 	update motorista set Senha = _senha where idMotorista = _id;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_password_usuario
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_password_usuario`(_senha varchar(60),_id int)
-- begin
-- 	update usuario set Senha = _senha where idUsuario = _id;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_pedido
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_pedido`(_situacao varchar(20),_idpedido int)
-- begin
-- 	update pedidos set Situacao = _situacao
--     where idPedidos = _idpedido;							
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_pedidosenderecos
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_pedidosenderecos`(_idEndereco int,_idTipoEndereco int,_id int)
-- begin
-- 	update pedidosenderecos set idEndereco = _idEndereco,
-- 								idTiposEnderecos = _idTipoEndereco
-- 	where IdPedidosEnderecos = _id;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_planocliente
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_planocliente`(_desconto decimal(10,2),_id int)
-- begin 
-- 	update planocliente set Desconto = _desconto
--     where idPlanoCliente = _id;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_planos
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_planos`(_id int,_nomeplano varchar(30),_descricao varchar(255),_valor decimal(10,2),_duracaoplano int,_limitepedidos int)
-- begin
-- 	update planos set NomePlano = _nomeplano,
-- 						DescricaoPlano = _descricao,
--                         ValorPlano = _valor,
--                         DuracaoPlano = _duracaoplano,
--                         LimitePedidos = _limitepedidos
-- 	where idPlanos = _id;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_usuario
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_usuario`(_telefone varchar(11),_email varchar(60),_id int)
-- begin
-- 	update usuario set Telefone = _telefone,
-- 						Email = _email
-- 	where idUsuario = _id;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure update_veiculo
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `update_veiculo`(_id int,_pesoMaximo decimal(10,4),_altura decimal(10,2),_largura decimal(10,2),_comprimento decimal(10,2))
-- begin
-- 	update veiculo set PesoMaximo = _pesoMaximo,
-- 						Altura = _altura,
--                         Largura = _largura,
--                         Comprimento = _comprimento
-- 	where idVeiculo = _id;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure viewPedidosClientes
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `viewPedidosClientes`(_idcliente int,_idpedido int)
-- begin
-- 	select ped.idPedidos as IdPedido, ped.Situacao, ped.DataPedido, ped.Retirar,te.Nome as Tipo, ende.Logradouro, ende.Cep, ende.Numero, cli.RazaoSocial,cli.Cnpj from pedidos as ped
-- 	inner join pedidosenderecos as pedend on pedend.idPedidos = _idpedido
-- 	inner join  endereco as ende
-- 	inner join tiposenderecos as te on pedend.idTiposEnderecos = te.idTiposEnderecos
-- 	inner join cliente as cli on ende.IdCliente = _idcliente
-- 	where ped.idPedidos = pedend.idPedidos;
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure view_consultar_pedidosenderecos
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `view_consultar_pedidosenderecos`(_idEndereco int,_idPedido int)
-- begin
-- 	select pedend.IdPedidosEnderecos,ende.Logradouro, ende.Cep as CEP,ende.Numero as Numero, cli.RazaoSocial as Cliente, ped.Situacao as SituacaoPedido from pedidosenderecos as pedend
--     inner join endereco as ende on pedend.idEndereco = ende.idEndereco
--     inner join cliente as cli on ende.IdCliente = cli.IdCliente
--     inner join pedidos as ped on pedend.idPedidos = ped.idPedidos
--     where pedend.idPedidos = _idPedido && pedend.idEndereco = _idEndereco;     
-- end$$

-- DELIMITER ;

-- -- -----------------------------------------------------
-- -- procedure view_listar_pedidosenderecos
-- -- -----------------------------------------------------

-- DELIMITER $$
-- USE `prosperitydb`$$
-- CREATE DEFINER=`root`@`localhost` PROCEDURE `view_listar_pedidosenderecos`()
-- begin
-- 	select pedend.IdPedidosEnderecos, ende.Logradouro, ende.Cep as CEP,ende.Numero as Numero, cli.RazaoSocial as Cliente, ped.Situacao as SituacaoPedido from pedidosenderecos as pedend
--     inner join endereco as ende on pedend.idEndereco = ende.idEndereco
--     inner join cliente as cli on ende.IdCliente = cli.IdCliente
--     inner join pedidos as ped on pedend.idPedidos = ped.idPedidos;        
-- end$$

-- DELIMITER ;

-- SET SQL_MODE=@OLD_SQL_MODE;
-- SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
-- SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;