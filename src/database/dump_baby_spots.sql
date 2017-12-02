CREATE SCHEMA IF NOT EXISTS babyspots;

CREATE TABLE IF NOT EXISTS babyspots.servico
(
    id_ser serial NOT NULL,
    nome text NOT NULL,
    CONSTRAINT pk_id_ser PRIMARY KEY (id_ser)
);

CREATE TABLE IF NOT EXISTS babyspots.usuario
(
    id_usu serial NOT NULL,
    nome_completo text NOT NULL,
    email text NOT NULL,
    senha text NOT NULL,
    url_imagem text,
    CONSTRAINT pk_id_usu PRIMARY KEY (id_usu)
);

CREATE TABLE IF NOT EXISTS babyspots.estabelecimento
(
    id_est serial NOT NULL,
    nome text NOT NULL,
    id_usuario integer NOT NULL,
    data_cadastro date NOT NULL,
    cep numeric NOT NULL,
    rua text NOT NULL,
    numero numeric NOT NULL,
    complemento text,
    bairro text NOT NULL,
    cidade text NOT NULL,
    estado text NOT NULL,
    CONSTRAINT pk_id_est PRIMARY KEY(id_est),
    CONSTRAINT fk_id_usuario FOREIGN KEY (id_usuario)
        REFERENCES babyspots.usuario(id_usu)
        ON UPDATE CASCADE
        ON DELETE SET NULL
);

CREATE TABLE IF NOT EXISTS babyspots.estabelecimento_foto
(
    id_esf serial NOT NULL,
    id_est integer NOT NULL,
    url_imagem text NOT NULL,
    data_cadastro date NOT NULL,
    CONSTRAINT pk_id_esf PRIMARY KEY(id_esf),
    CONSTRAINT fk_id_est FOREIGN KEY(id_est)
        REFERENCES babyspots.estabelecimento(id_est) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE SET NULL
);

CREATE TABLE IF NOT EXISTS babyspots.avaliacao
(
    id_ava serial NOT NULL,
    id_est integer NOT NULL,
    id_usu integer NOT NULL,
    descricao text,
    CONSTRAINT pk_id_ava PRIMARY KEY(id_ava),
    CONSTRAINT id_est FOREIGN KEY(id_est)
        REFERENCES babyspots.estabelecimento(id_est) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    CONSTRAINT id_usu FOREIGN KEY(id_usu)
        REFERENCES babyspots.usuario(id_usu) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE SET NULL
);

CREATE TABLE IF NOT EXISTS babyspots.avaliacao_servico
(
    id_ava integer NOT NULL,
    id_ser integer NOT NULL,
    pontuacao numeric NOT NULL,
    CONSTRAINT fk_id_ava FOREIGN KEY(id_ava)
        REFERENCES babyspots.avaliacao(id_ava) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    CONSTRAINT fk_id_ser FOREIGN KEY(id_ser)
        REFERENCES babyspots.aervico(id_ser) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE SET NULL
);

CREATE TABLE IF NOT EXISTS babyspots.estabelecimento_servico
(
    id_est integer NOT NULL,
    id_ser integer NOT NULL,
    CONSTRAINT fk_id_est FOREIGN KEY(id_est)
        REFERENCES babyspots.estabelecimento (id_est) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE SET NULL,
    CONSTRAINT fk_id_ser FOREIGN KEY(id_est)
        REFERENCES babyspots.servico(id_ser) MATCH SIMPLE
        ON UPDATE CASCADE
        ON DELETE SET NULL
);