create table categorias ( 
    id INT NOT NULL AUTO_INCREMENT, 
    nome VARCHAR(255), 
    PRIMARY KEY (id)
);

create table responsaveis (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(255),
    email VARCHAR(255),
    PRIMARY KEY (id)
);

create table Tarefas ( 
    id INT NOT NULL AUTO_INCREMENT, 
    id_categoria INT NOT NULL, 
    nome VARCHAR(255), 
    descricao VARCHAR(255), 
    data_abertura DATE, 
    prazo INT, 
    status_entrega VARCHAR(255),
    PRIMARY KEY (id),
    FOREIGN KEY (id_categoria) REFERENCES categorias (id)
);