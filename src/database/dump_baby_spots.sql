CREATE TABLE servico
(
    id_ser INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    classe VARCHAR(15) NULL    
);

CREATE TABLE usuario
(
    id_usu INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    nome_completo TEXT NOT NULL,
    email TEXT NOT NULL,
    senha TEXT NOT NULL,
    url_imagem TEXT
);

CREATE TABLE estabelecimento
(
    id_est INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,
    nome TEXT NOT NULL,
    id_usuario INTEGER NOT NULL,
    data_cadastro DATE NOT NULL,
    cep NUMERIC NOT NULL,
    rua TEXT NOT NULL,
    numero NUMERIC NOT NULL,
    complemento TEXT,
    bairro TEXT NOT NULL,
    cidade TEXT NOT NULL,
    estado TEXT NOT NULL,
    CONSTRAINT fk_id_usuario FOREIGN KEY (id_usuario)
        REFERENCES usuario(id_usu)
);

CREATE TABLE estabelecimento_foto
(
    id_esf INTEGER NOT NULL PRIMARY KEY,
    id_est INTEGER NOT NULL,
    url_imagem TEXT NOT NULL,
    data_cadastro DATE NOT NULL,
    CONSTRAINT fk_id_est FOREIGN KEY(id_est)
        REFERENCES estabelecimento(id_est) 
);

CREATE TABLE avaliacao
(
    id_ava INTEGER NOT NULL PRIMARY KEY NOT NULL,
    id_est INTEGER NOT NULL,
    id_usu INTEGER NOT NULL,
    descricao TEXT,
    CONSTRAINT id_est FOREIGN KEY(id_est)
        REFERENCES estabelecimento(id_est),
    CONSTRAINT id_usu FOREIGN KEY(id_usu)
        REFERENCES usuario(id_usu) 
);

CREATE TABLE avaliacao_servico
(
    id_ava INTEGER NOT NULL,
    id_ser INTEGER NOT NULL,
    pontuacao NUMERIC NOT NULL,
    CONSTRAINT fk_id_ava FOREIGN KEY(id_ava)
        REFERENCES avaliacao(id_ava),
    CONSTRAINT fk_id_ser FOREIGN KEY(id_ser)
        REFERENCES usuario(id_usu)
);

CREATE TABLE estabelecimento_servico
(
    id_est INTEGER NOT NULL,
    id_ser INTEGER NOT NULL,
    CONSTRAINT fk_id_est FOREIGN KEY(id_est)
        REFERENCES estabelecimento (id_est),
    CONSTRAINT fk_id_ser FOREIGN KEY(id_est)
        REFERENCES servico(id_ser)
);