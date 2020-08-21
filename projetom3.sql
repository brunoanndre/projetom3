CREATE SCHEMA condominio DEFAULT CHARACTER SET utf8;

USE condominio;

CREATE TABLE condominos(
id int(11) not null auto_increment primary key,
funcao smallint(2),
nome varchar(50),
email varchar(50),
senha varchar(200),
numero_residencia smallint(4),
cpf varchar(11),
fixo varchar(11),
celular varchar(12),
status tinyint(1)
);

CREATE TABLE reserva_salao(
id int(11) not null auto_increment primary key,
id_condominos int(11) not null,
data date,
hora time,
convidados varchar(200),
qtd_convidados int(10),
constraint fk_reserva_condominos foreign key (id_condominos) references condominos(id)
);

CREATE TABLE ocorrencia(
id int(11) not null auto_increment primary key,
id_condominos int(11) not null,
data date,
hora time,
descricao varchar(200),
constraint fk_ocorrencia_condominos foreign key (id_condominos) references condominos(id)
);

CREATE TABLE cargo(
id tinyint(2) not null primary key auto_increment,
cargo varchar(30),
data_contratado date,
horario_trabalho varchar(100)
);


CREATE TABLE funcionario(
id int(11) not null auto_increment primary key,
id_condominos int(11) not null,
id_cargo tinyint(2) not null,
nome varchar(60),
email varchar(50),
senha varchar(200),
logradouro varchar(100),
numero int(10),
bairro varchar(50),
cidade varchar(50),
cpf varchar(11),
fixo varchar(11),
celular varchar(12),
status tinyint(1),
constraint fk_cargo_funcionario foreign key (id_cargo) references cargo(id),
constraint fk_funcionario_condominos foreign key (id_condominos) references condominos(id)
);

CREATE TABLE achados_perdidos(
id int(11) not null auto_increment primary key,
item varchar(50),
data date,
local_encontrado varchar(20)
);

CREATE TABLE reuniao(
id int(11) not null auto_increment primary key,
data date,
hora time,
assunto varchar(50),
id_condominos int(11),
constraint fk_reuniao_condominos foreign key (id_condominos) references condominos(id)
);

/*Cinco inserções em cada tabela do Banco de Dados;*/
/*CONDOMINOS*/
select * from condominos;
INSERT INTO condominos (funcao, nome,email,senha,numero_residencia, cpf, fixo,celular,status) values
('0','Ana','ana@hotmail.com','ana123','01','08834884323','04732451521','047986541236','1'),
('0','Joao','joao@hotmail.com','joao123','02','25456351212','04731236598','047998455623','1'),
('0','Beatriz','beatriz@hotmail.com','beatriz123','03','08456354684','04731236615','047998545611','1'),
('1','Carlos','carlos@hotmail.com','carlos123','04','04515632115','04736984511','047995641522','1'),
('2','Vinicius','vinicius@hotmail.com','vinicius123','05','12551236999','04732362150','047998641202','1');
/*CARGO*/
INSERT INTO cargo (cargo,data_contratado,horario_trabalho) values
('Zelador','2020/03/15','Segunda à Sexta 08:00 às 18:00'),
('Porteiro','2020/03/20','Segunda à Sábado 06:00 às 18:00'),
('Pintor','2020/03/20','Segunda à Sexta 08:00 às 18:00'),
('Jardineiro','2020/03/25','Segunda à Sexta 08:00 às 17:00'),
('Eletricista','2020/04/05','Segunda à Sexta 08:00 às 18:00');
/*FUNCIONARIO*/
INSERT INTO funcionario (id_condominos,id_cargo,nome,email,senha,logradouro,numero,bairro,cidade,cpf,fixo,celular,status) values
('4','1','Marcio','marcio@hotmail.com','marcio123','Rua Sao Vicente','455','São Vicente','Itajaí','01232112888','04732698796','047999212614','1'),
('5','2','Henrique','henrique@hotmail.com','henrique123','Rua Abacaxi','321','Cordeiros','Itajaí','32554889566','04736984151','047995477149','1'),
('4','3','José','jose@hotmail.com','jose123','Rua Chapecó','651','São Vicente','Itajaí','15612315299','04732145569','047989653326','1'),
('4','4','Antonio','antonio@hotmail.com','antonio123','Rua Brusque','111','Centro','Itajaí','02689455123','04736985521','047984155263','1'),
('5','5','Pablo','pablo@hotmail.com','pablo123','Rua Uruguai','89','Centro','Itajaí','08485625589','04733995547','047999362531','1');
/*Reserva Salao*/
INSERT INTO reserva_salao (id_condominos,data,hora,convidados,qtd_convidados) VALUES
('2','2020/08/21','11:00','Joao,Pedro,Marcos,Paulo,Bianca,Ana,Julia,Juliana,Jessica','9'),
('1','2020/09/02','18:00','Marcia,Juliana,Fernando,Carlos,Vinicius,Eduardo','6'),
('2','2020/09/15','11:00','Joao,Pedro,Marcos,Paulo,Bianca,Ana,Julia,Juliana,Jessica,Vitoria,Anderson','11'),
('3','2020/09/25','19:00','Eduardo,Camila,Carolina,Joao,Bruno,Pedro,Joana','7'),
('3','2020/10/25','21:00','Eduardo,Camila,Carolina,Joao,Bruno,Pedro,Joana,Patricia,Katia,Antonio,Julio','11');
/*OCORRENCIA*/
INSERT INTO ocorrencia (id_condominos,data,hora,descricao) VALUES
('1','2020/05/26','23:30','Perturbação de sossego'),
('2','2020/06/15','15:00','Elevador sem energia'),
('2','2020/06/22','22:00','Vazamento de gás'),
('3','2020/07/02','05:00','Interfone com defeito'),
('1','2020/07/08','01:00','Perturbação de sossego');
/*ACHADOS E PERDIDOS*/
INSERT INTO achados_perdidos (item,data,local_encontrado) VALUES
('Carteira','2020/05/16','Sala de jogos'),
('Chinelo','2020/05/28','Piscina'),
('Celular','2020/07/16','Academia'),
('Chave de carro','2020/07/22','Garagem'),
('Guarda-chuva','2020/08/03','Elevador');
/*Reuniao*/
SELECT * FROM reuniao;
INSERT INTO reuniao (data,hora,assunto,id_condominos) VALUES
('2020/05/13','19:30','Rotas de emergência em caso de incêndio','5'),
('2020/05/28','20:00','Cuidados com as áreas comuns','5'),
('2020/07/19','20:00','Manutenção na piscina','5'),
('2020/08/05','19:30','Barulho','4'),
('2020/10/21','19:30','Uso incorreto da garagem','4');
/*Duas alterações em cada tabela do Banco de Dados;*/
/*CONDOMINOS*/
SELECT * FROM condominos;
UPDATE condominos SET funcao = '0' WHERE id = '4';
UPDATE condominos SET funcao = '1' WHERE id = '1';
/*ACHADOS_PERDIDOS*/
SELECT * FROM achados_perdidos;
UPDATE achados_perdidos SET local_encontrado = 'Sala de Jogos' WHERE item = 'Chave de carro';
UPDATE achados_perdidos SET item = 'Relógio' WHERE item ='Chave de carro';
/*Cargo*/
SELECT * FROM cargo;
UPDATE cargo SET horario_trabalho = 'Segunda à Sexta 08:00 às 17:00' WHERE cargo = 'zelador';
UPDATE cargo SET data_contratado = '2020-03-15' WHERE id = '2';
/*funcionario*/
SELECT * FROM funcionario;
UPDATE funcionario SET logradouro = 'Rua São Paulo' WHERE nome = 'Henrique da Silva';
UPDATE funcionario SET id_condominos = '1' WHERE id = '1';
/*ocorrencia*/
SELECT * FROM ocorrencia;
UPDATE ocorrencia SET id_condominos = '3' WHERE id = '3';
UPDATE ocorrencia SET data = '2020/05/25' WHERE id = '1';
/*reserva_salao*/
SELECT * FROM reserva_salao;
UPDATE reserva_salao SET id_condominos = '1' WHERE id = '1';
UPDATE reserva_salao SET convidados ='Eduardo,Camila,Carolina,Joao,Bruno,Pedro,Joana,Patricia,Katia,Antonio,Julio,Eduarda',qtd_convidados = '12', id_condominos = '5' WHERE id ='5';
/*reuniao*/
SELECT * FROM reuniao;
UPDATE reuniao SET hora = '20:00' WHERE assunto = 'Rotas de emergência em caso de incêndio';
UPDATE reuniao SET data = '2020/05/29' WHERE id ='2';
/*Três exclusões em cada tabela do Banco de Dados*/
/*achados_perdidos*/
SELECT * FROM ACHADOS_PERDIDOS;
DELETE FROM achados_perdidos WHERE id = 5;
DELETE FROM achados_perdidos WHERE item = 'Relógio';
DELETE FROM achados_perdidos WHERE local_encontrado = 'Academia';
/*funcionario*/
DELETE FROM funcionario WHERE id_cargo = '5';
DELETE FROM funcionario WHERE cpf = '02689455123';
DELETE FROM funcionario WHERE nome = 'José';
/*Cargo*/
DELETE FROM cargo WHERE id = '5';
DELETE FROM cargo WHERE cargo = 'Jardineiro';
DELETE FROM cargo WHERE horario_trabalho = 'Segunda à Sexta 08:00 às 18:00';
/*reuniao*/
DELETE FROM reuniao WHERE data ='2020/10/21';
DELETE FROM reuniao WHERE assunto ='Manutenção na piscina';
DELETE FROM reuniao WHERE id_condominos ='4';
/*ocorrencia*/
SELECT * FROM OCORRENCIA;
DELETE FROM ocorrencia WHERE id_condominos ='2';
DELETE FROM ocorrencia WHERE data = '2020/07/02';
DELETE FROM ocorrencia WHERE descricao ='Vazamento de gás';
/*reserva_salao*/
SELECT * FROM RESERVA_SALAO;
DELETE FROM reserva_salao WHERE id = '2';
DELETE FROM reserva_salao WHERE data = '2020/09/15';
DELETE FROM reserva_salao WHERE qtd_convidados = '7';
/*condominos*/
select * from reserva_salao;
DELETE FROM condominos WHERE nome = 'Carlos';
DELETE FROM condominos WHERE cpf = '08456354684';
DELETE FROM condominos WHERE id = '2';
/*Dez seleções de dados de qualquer tabela do Banco de Dados, sendo,
no mínimo, cinco comandos utilizando Join;*/
SELECT data, hora,assunto, nome FROM reuniao r
INNER JOIN condominos c ON r.id_condominos = c.id ORDER BY data;

SELECT nome,data,hora,qtd_convidados FROM reserva_salao rs
INNER JOIN condominos c ON rs.id_condominos = c.id;

SELECT nome, cargo FROM funcionario f
INNER JOIN cargo c ON f.id_cargo = c.id;

SELECT nome,descricao,data,hora FROM ocorrencia o
INNER JOIN condominos c ON o.id_condominos = c.id;

SELECT nome,count(o.id) as qtd_ocorrencias FROM ocorrencia o
INNER JOIN condominos c ON o.id_condominos = c.id ORDER BY nome;

SELECT cargo,logradouro,numero,bairro,cidade FROM funcionario f
INNER JOIN cargo c ON f.id_cargo;

SELECT cpf FROM condominos;
SELECT * FROM achados_perdidos ORDER BY id DESC;
SELECT count(id) FROM ocorrencia;
SELECT nome, status FROM funcionario;

/*CRUD*/
select * from condominos;
INSERT INTO condominos (funcao, nome,email,senha,numero_residencia, cpf, fixo,celular,status) values
('0','Joao','joao@hotmail.com','joao123','02','25456351212','04731236598','047998455623','1'),
('0','Beatriz','beatriz@hotmail.com','beatriz123','03','08456354684','04731236615','047998545611','1'),
('0','Carlos','carlos@hotmail.com','carlos123','04','04515632115','04736984511','047995641522','1');


