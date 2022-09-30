DROP DATABASE IF EXISTS db_academia;
CREATE DATABASE db_academia;
USE db_academia;

create table tb_cliente (
id bigint auto_increment,
 cpf bigint,
 data_nascimento date,
 dia_pagamento integer,
 nome varchar(255),
 valor_mensalidade double,
 primary key (id));
 
 create table tb_fornecedor (
 id bigint auto_increment,
 cnpj bigint, 
 nome varchar(255),
 primary key (id));
 
 create table tb_funcionario (
 id bigint auto_increment,
 cpf bigint,
 data_nascimento date,
 dia_pagamento integer,
 nome varchar(255),
 salario double,
 tipo varchar(255),
 primary key (id));
 
 create table tb_modalidade (
 id bigint auto_increment,
 nome varchar(255),
 valor double,
 primary key (id));
 create table tb_produto(
 id bigint,
 nome varchar(255),
 valor double,
 fornecedor bigint,
 produtos_id bigint,
 produto bigint,
 primary key (id));
 
 create table tb_venda (
 id bigint auto_increment,
 data_venda date,
 cliente_id bigint,
 primary key (id));
 
 create table tb_equipamento (
 id bigint auto_increment,
 nome varchar(255),
 periodo_revisao integer,
 id_fornecedor bigint,
 primary key (id));
 
alter table tb_equipamento add constraint FK2ye80m9og9nwbc71ayr9hidfs foreign key (id_fornecedor) references tb_fornecedor(id);
alter table tb_produto add constraint FK97xhfdrjyom0fwvvuvutyl8tn foreign key (fornecedor) references tb_fornecedor(id);
alter table tb_produto add constraint FKfo53yjo27lj947nv5iqioqtlm foreign key (produtos_id) references tb_venda(id);
alter table tb_produto add constraint FKj0sfvqt78u7olm4ed01hvnm95 foreign key (produto) references tb_fornecedor(id);
alter table tb_venda add constraint FKms1fkyapk1kh2luce0k31jhoe foreign key (cliente_id) references tb_cliente(id);

INSERT INTO TB_MODALIDADE (id,NOME,VALOR) VALUES(null,'MUSCULAÇÃO',80.00),(null,'BOXE',120.00),(null,'NATAÇÃO',100.00),(null,'CROSSFIT',80.00);
INSERT INTO TB_CLIENTE(id,NOME,CPF,VALOR_MENSALIDADE,DATA_NASCIMENTO,DIA_PAGAMENTO) VALUES(null,'LUIS',16564423616,80.00,'2004-08-17',10),(null,'CARLOS EDUARDO',13649862313,120.00,'2005-02-24',22);
INSERT INTO TB_FUNCIONARIO(id,NOME,CPF,DATA_NASCIMENTO,DIA_PAGAMENTO,SALARIO,TIPO)VALUES(null,'DAYLER',12345678910,'1988-10-20',3,25000,'RH');

