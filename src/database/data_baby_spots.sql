INSERT INTO usuario (nome_completo, email, senha) VALUES
('João Dutra', 'j.dutra@hotmail.com', 'joao123'),
('Zamira Duarte', 'z.duarte@gmail.com', 'zamira123'),
('Alaquias Silva', 'a.silva@outlook.com', 'silva123'),
('Herméias Souza', 'h.souza@bol.com.br', 'souza123'),
('Ronaldo Caféow', 'r.cafeow@uol.com.br', 'roooonaldinho123');

INSERT INTO estabelecimento (nome, id_usuario, data_cadastro, cep, rua, numero, complemento, bairro, cidade, estado) VALUES
('Restaurante Rua da Mooca', 5, '2017-12-12', '79061-050', 'Rua da Mooca', '1460', 'Prédio', 'Mooca', 'São Paulo', 'SP'),
('Canto do Cupim', 1, '2017-12-05', '79003-027', 'Avenida Ricardo Brandão', '230', 'Prédio', 'Chácara Cachoeira', 'Campo Grande', 'MS'),
('Gaúcho Gastão', 2, '2017-12-05', '79040-040', 'Rua Dr. Zerbini', '38', 'Casa', 'Chácara Cachoeira', 'Campo Grande', 'MS'),
('Província di Salerno', 2, '2017-10-11', '30150-330', 'R. Maranhão', '18', 'Casa', 'Santa Efigênia', 'Belo Horizonte', 'MG'),
('Tradição de Minas', 3, '2016-09-03', '30730-430', 'R. Monte Líbano', '119', 'Casa', 'Padre Eustáquio', 'Belo Horizonte', 'MG'),
('Fasano', 3, '2016-04-10', '22420-000', 'Av. Vieira Souto', '80', 'Casa', 'Ipanema', 'Rio de Janeiro', 'RJ'),
('Skylab', 1, '2017-08-20', '22070-001', 'Av. Atlântica', '3264', 'Casa', 'Copacabana', 'Rio de Janeiro', 'RJ'),
('Outback Steakhouse', 5, '2017-01-23', '91340-001', 'Av. João Wallig', '1800', 'Casa', 'Iguatemi', 'Porto Alegre', 'RS'),
('Boteco Kabanas', 3, '2015-02-09', '74215-110', 'Rua Dr. Zerbini', '2693', 'Casa', 'St. Bueno', 'Goiânia', 'GO');


INSERT INTO estabelecimento_foto (id_est, url_imagem, data_cadastro) VALUES
(3, 'foto-estabelecimento-1.png', '2017-12-12'),
(4, 'foto-estabelecimento-2.png', '2017-12-05'),
(5, 'foto-estabelecimento-3.png', '2017-12-05'),
(6, 'foto-estabelecimento-4.png', '2017-10-11'),
(7, 'foto-estabelecimento-1.png', '2016-09-03'),
(8, 'foto-estabelecimento-2.png', '2016-04-10'),
(9, 'foto-estabelecimento-4.png', '2017-08-20'),
(10, 'foto-estabelecimento-3.png', '2017-01-23'),
(12, 'foto-estabelecimento-1.png', '2015-02-09');

INSERT INTO avaliacao (id_est, id_usu, descricao) VALUES 
(3,2,'Ótimo local para um almoço em familia.')  
(4,3,'É um bom lugar.')  
(5,3,'Gostei do atendimento, porém a limpeza deixa a desejar')  
(6,2,'Divertido, confortavel')  
(7,3,'Não é bom')
(8,2,'Comida ótima mas atendimento ruim.')  
(9,3,'Só dou 4 estrelas pela demora para ser atendida.')  
(10,3,'Péssimo')  
(12,2,'')  
(3,2,'Legal.')  
(4,3,'Lugar agradavel.')  
(5,3,'Fui muito bem atendida, recomendo')  
(6,2,'Muito caro.')  
(7,3,'Satisfeito')
(8,2,'')  
(9,3,'Mais ou menos.')  
(10,3,'Não gostei')  
(12,2,'')  
(3,2,'Top.')  
(4,3,'Show.')  
(5,3,'Nunca mais eu volto')  
(6,2,'Nunca fui la mas parece ser bom')  
(7,3,'Quando eu for la eu mudo a nota')
(8,2,'')  
(9,3,'Gostei das musicas')  
(10,3,'')  
(12,2,'')  

INSERT INTO avaliacao_servico (id_ava, id_ser) VALUES 
()
()
()
()
()

INSERT INTO estabelecimento_servico (id_est, id_ser) VALUES 
()
()
()
()
()
