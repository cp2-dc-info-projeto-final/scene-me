CREATE TABLE userdados(
    id int(11) AUTO_INCREMENT,
    nome varchar(15) NOT NULL,
    email varchar(40) NOT NULL,
    senha varchar(40) NOT NULL,
    dataNasc (date),
    adm int(11) NULL,
    PRIMARY KEY id)
    );