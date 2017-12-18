-- --------------------------------------------------------
-- Servidor:                     bdtrabalho.mysql.dbaas.com.br
-- Versão do servidor:           5.6.37-82.2-log - Percona Server (GPL), Release 82.2, Revision d1eb51005df
-- OS do Servidor:               debian-linux-gnu
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para bdtrabalho
CREATE DATABASE IF NOT EXISTS `bdtrabalho` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_general_ci */;
USE `bdtrabalho`;

-- Copiando estrutura para tabela bdtrabalho.bs_avaliacao
CREATE TABLE IF NOT EXISTS `bs_avaliacao` (
  `ava_id` int(11) NOT NULL AUTO_INCREMENT,
  `ava_est_id` int(11) DEFAULT NULL,
  `ava_usu_id` int(11) DEFAULT NULL,
  `ava_descricao` text COLLATE latin1_general_ci,
  `ava_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ava_id`),
  KEY `fk_avaliacao_estabelecimento` (`ava_est_id`),
  KEY `fk_avaliacao_usuario` (`ava_usu_id`),
  CONSTRAINT `fk_avaliacao_estabelecimento` FOREIGN KEY (`ava_est_id`) REFERENCES `bs_estabelecimento` (`est_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_avaliacao_usuario` FOREIGN KEY (`ava_usu_id`) REFERENCES `bs_usuario` (`usu_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Copiando dados para a tabela bdtrabalho.bs_avaliacao: ~19 rows (aproximadamente)
/*!40000 ALTER TABLE `bs_avaliacao` DISABLE KEYS */;
INSERT INTO `bs_avaliacao` (`ava_id`, `ava_est_id`, `ava_usu_id`, `ava_descricao`, `ava_cadastro`) VALUES
	(1, 1, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor nulla in gravida venenatis. Donec eleifend egestas diam, nec euismod purus sollicitudin eu. Mauris facilisis orci in eros pulvinar facilisis. Sed vehicula commodo diam, viverra convallis quam volutpat ut. Etiam ac imperdiet augue. Pellentesque sollicitudin id ipsum vel blandit. Donec ac tempus est. Nam ac tortor orci. Proin vitae eleifend urna, id congue massa.', '2017-12-17 18:43:43'),
	(2, 2, 2, 'Donec orci urna, cursus in dignissim quis, ultricies vel purus. Nulla pretium lorem id fringilla dignissim. Ut dictum ligula ac neque aliquam tincidunt eu quis mauris. Ut ut accumsan est. Vestibulum erat nisl, imperdiet non pulvinar id, ultricies et risus. In fringilla justo gravida odio tristique fermentum. Donec dignissim vitae orci eget sagittis.', '2017-12-17 18:44:43'),
	(3, 3, 3, 'Praesent convallis nulla et tellus ornare fermentum. Phasellus eu nulla rutrum, venenatis risus auctor, egestas odio. Nullam hendrerit, quam vel aliquet sagittis, leo augue dapibus eros, eu sodales turpis turpis ac nulla. Vestibulum vel egestas mi. Donec tincidunt ante nec aliquet sodales. Integer commodo quam at orci placerat, sed ornare enim venenatis. Pellentesque sagittis justo mi, sed viverra massa fringilla ut. Ut a tempor libero. Cras vehicula id felis et pretium. Sed tortor tortor, ornare blandit ultrices ut, pulvinar a felis. Curabitur dictum lorem non ligula mattis ornare. In risus urna, viverra sed ullamcorper ut, tempus sit amet magna. Cras nibh sem, dapibus in sollicitudin vel, hendrerit ut dui. Etiam vehicula ipsum sed sapien vestibulum, vitae egestas enim sodales. Sed vitae cursus magna.', '2017-12-17 18:45:43'),
	(4, 4, 4, 'Ut sit amet ipsum vitae odio pulvinar posuere in sed ligula. Mauris nisi mauris, sodales in venenatis vitae, dapibus a turpis. Mauris posuere rhoncus ex, vel eleifend neque iaculis a. Curabitur maximus aliquam magna, eget mattis lorem. Maecenas dignissim dapibus urna, ut viverra eros tristique at. Vestibulum vitae interdum ante. Donec mi nibh, vulputate nec pretium ut, fermentum faucibus neque. Sed pharetra ante imperdiet, ultricies erat maximus, laoreet velit. Mauris luctus turpis velit, eu mollis ligula cursus ornare. Cras interdum sed diam sit amet luctus. Nunc volutpat risus eu ante accumsan pharetra. Pellentesque at placerat elit. Donec tortor elit, dignissim vitae elit ac, mattis consectetur justo. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi eu tristique metus.', '2017-12-17 18:46:43'),
	(5, 5, 1, 'Phasellus in euismod justo. Curabitur non lorem arcu. Etiam ornare purus in felis pellentesque suscipit. Vestibulum tincidunt justo nulla, a accumsan turpis ornare ut. Aenean consequat lorem at tellus molestie facilisis. Phasellus efficitur nulla in sollicitudin tincidunt. Donec imperdiet arcu et mi ultrices, a mollis nisl eleifend. Quisque non bibendum velit. Maecenas ut facilisis ipsum. Sed faucibus arcu id massa pharetra posuere. Donec iaculis hendrerit feugiat. Mauris vitae malesuada nisl.', '2017-12-17 18:47:43'),
	(6, 6, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor nulla in gravida venenatis. Donec eleifend egestas diam, nec euismod purus sollicitudin eu. Mauris facilisis orci in eros pulvinar facilisis. Sed vehicula commodo diam, viverra convallis quam volutpat ut. Etiam ac imperdiet augue. Pellentesque sollicitudin id ipsum vel blandit. Donec ac tempus est. Nam ac tortor orci. Proin vitae eleifend urna, id congue massa.', '2017-12-17 18:48:43'),
	(7, 7, 3, 'Donec orci urna, cursus in dignissim quis, ultricies vel purus. Nulla pretium lorem id fringilla dignissim. Ut dictum ligula ac neque aliquam tincidunt eu quis mauris. Ut ut accumsan est. Vestibulum erat nisl, imperdiet non pulvinar id, ultricies et risus. In fringilla justo gravida odio tristique fermentum. Donec dignissim vitae orci eget sagittis.', '2017-12-17 18:49:43'),
	(8, 8, 4, 'Praesent convallis nulla et tellus ornare fermentum. Phasellus eu nulla rutrum, venenatis risus auctor, egestas odio. Nullam hendrerit, quam vel aliquet sagittis, leo augue dapibus eros, eu sodales turpis turpis ac nulla. Vestibulum vel egestas mi. Donec tincidunt ante nec aliquet sodales. Integer commodo quam at orci placerat, sed ornare enim venenatis. Pellentesque sagittis justo mi, sed viverra massa fringilla ut. Ut a tempor libero. Cras vehicula id felis et pretium. Sed tortor tortor, ornare blandit ultrices ut, pulvinar a felis. Curabitur dictum lorem non ligula mattis ornare. In risus urna, viverra sed ullamcorper ut, tempus sit amet magna. Cras nibh sem, dapibus in sollicitudin vel, hendrerit ut dui. Etiam vehicula ipsum sed sapien vestibulum, vitae egestas enim sodales. Sed vitae cursus magna.', '2017-12-17 18:50:43'),
	(9, 9, 1, 'Ut sit amet ipsum vitae odio pulvinar posuere in sed ligula. Mauris nisi mauris, sodales in venenatis vitae, dapibus a turpis. Mauris posuere rhoncus ex, vel eleifend neque iaculis a. Curabitur maximus aliquam magna, eget mattis lorem. Maecenas dignissim dapibus urna, ut viverra eros tristique at. Vestibulum vitae interdum ante. Donec mi nibh, vulputate nec pretium ut, fermentum faucibus neque. Sed pharetra ante imperdiet, ultricies erat maximus, laoreet velit. Mauris luctus turpis velit, eu mollis ligula cursus ornare. Cras interdum sed diam sit amet luctus. Nunc volutpat risus eu ante accumsan pharetra. Pellentesque at placerat elit. Donec tortor elit, dignissim vitae elit ac, mattis consectetur justo. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi eu tristique metus.', '2017-12-17 18:51:43'),
	(10, 10, 2, 'Phasellus in euismod justo. Curabitur non lorem arcu. Etiam ornare purus in felis pellentesque suscipit. Vestibulum tincidunt justo nulla, a accumsan turpis ornare ut. Aenean consequat lorem at tellus molestie facilisis. Phasellus efficitur nulla in sollicitudin tincidunt. Donec imperdiet arcu et mi ultrices, a mollis nisl eleifend. Quisque non bibendum velit. Maecenas ut facilisis ipsum. Sed faucibus arcu id massa pharetra posuere. Donec iaculis hendrerit feugiat. Mauris vitae malesuada nisl.', '2017-12-17 18:52:43'),
	(11, 11, 3, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse tempor nulla in gravida venenatis. Donec eleifend egestas diam, nec euismod purus sollicitudin eu. Mauris facilisis orci in eros pulvinar facilisis. Sed vehicula commodo diam, viverra convallis quam volutpat ut. Etiam ac imperdiet augue. Pellentesque sollicitudin id ipsum vel blandit. Donec ac tempus est. Nam ac tortor orci. Proin vitae eleifend urna, id congue massa.', '2017-12-17 18:53:43'),
	(12, 12, 4, 'Donec orci urna, cursus in dignissim quis, ultricies vel purus. Nulla pretium lorem id fringilla dignissim. Ut dictum ligula ac neque aliquam tincidunt eu quis mauris. Ut ut accumsan est. Vestibulum erat nisl, imperdiet non pulvinar id, ultricies et risus. In fringilla justo gravida odio tristique fermentum. Donec dignissim vitae orci eget sagittis.', '2017-12-17 18:54:43'),
	(13, 13, 1, 'Praesent convallis nulla et tellus ornare fermentum. Phasellus eu nulla rutrum, venenatis risus auctor, egestas odio. Nullam hendrerit, quam vel aliquet sagittis, leo augue dapibus eros, eu sodales turpis turpis ac nulla. Vestibulum vel egestas mi. Donec tincidunt ante nec aliquet sodales. Integer commodo quam at orci placerat, sed ornare enim venenatis. Pellentesque sagittis justo mi, sed viverra massa fringilla ut. Ut a tempor libero. Cras vehicula id felis et pretium. Sed tortor tortor, ornare blandit ultrices ut, pulvinar a felis. Curabitur dictum lorem non ligula mattis ornare. In risus urna, viverra sed ullamcorper ut, tempus sit amet magna. Cras nibh sem, dapibus in sollicitudin vel, hendrerit ut dui. Etiam vehicula ipsum sed sapien vestibulum, vitae egestas enim sodales. Sed vitae cursus magna.', '2017-12-17 18:55:43'),
	(14, 1, 2, 'Ut sit amet ipsum vitae odio pulvinar posuere in sed ligula. Mauris nisi mauris, sodales in venenatis vitae, dapibus a turpis. Mauris posuere rhoncus ex, vel eleifend neque iaculis a. Curabitur maximus aliquam magna, eget mattis lorem. Maecenas dignissim dapibus urna, ut viverra eros tristique at. Vestibulum vitae interdum ante. Donec mi nibh, vulputate nec pretium ut, fermentum faucibus neque. Sed pharetra ante imperdiet, ultricies erat maximus, laoreet velit. Mauris luctus turpis velit, eu mollis ligula cursus ornare. Cras interdum sed diam sit amet luctus. Nunc volutpat risus eu ante accumsan pharetra. Pellentesque at placerat elit. Donec tortor elit, dignissim vitae elit ac, mattis consectetur justo. Nulla facilisi. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi eu tristique metus.', '2017-12-17 18:56:43'),
	(15, 1, 3, 'Phasellus in euismod justo. Curabitur non lorem arcu. Etiam ornare purus in felis pellentesque suscipit. Vestibulum tincidunt justo nulla, a accumsan turpis ornare ut. Aenean consequat lorem at tellus molestie facilisis. Phasellus efficitur nulla in sollicitudin tincidunt. Donec imperdiet arcu et mi ultrices, a mollis nisl eleifend. Quisque non bibendum velit. Maecenas ut facilisis ipsum. Sed faucibus arcu id massa pharetra posuere. Donec iaculis hendrerit feugiat. Mauris vitae malesuada nisl.', '2017-12-17 18:57:43'),
	(16, 3, 4, 'Phasellus in euismod justo. Curabitur non lorem arcu. Etiam ornare purus in felis pellentesque suscipit. Vestibulum tincidunt justo nulla, a accumsan turpis ornare ut. Aenean consequat lorem at tellus molestie facilisis. Phasellus efficitur nulla in sollicitudin tincidunt. Donec imperdiet arcu et mi ultrices, a mollis nisl eleifend. Quisque non bibendum velit. Maecenas ut facilisis ipsum. Sed faucibus arcu id massa pharetra posuere. Donec iaculis hendrerit feugiat. Mauris vitae malesuada nisl.', '2017-12-17 18:58:43'),
	(17, 4, 1, 'Phasellus in euismod justo. Curabitur non lorem arcu. Etiam ornare purus in felis pellentesque suscipit. Vestibulum tincidunt justo nulla, a accumsan turpis ornare ut. Aenean consequat lorem at tellus molestie facilisis. Phasellus efficitur nulla in sollicitudin tincidunt. Donec imperdiet arcu et mi ultrices, a mollis nisl eleifend. Quisque non bibendum velit. Maecenas ut facilisis ipsum. Sed faucibus arcu id massa pharetra posuere. Donec iaculis hendrerit feugiat. Mauris vitae malesuada nisl.', '2017-12-17 18:59:43'),
	(18, 5, 2, 'Phasellus in euismod justo. Curabitur non lorem arcu. Etiam ornare purus in felis pellentesque suscipit. Vestibulum tincidunt justo nulla, a accumsan turpis ornare ut. Aenean consequat lorem at tellus molestie facilisis. Phasellus efficitur nulla in sollicitudin tincidunt. Donec imperdiet arcu et mi ultrices, a mollis nisl eleifend. Quisque non bibendum velit. Maecenas ut facilisis ipsum. Sed faucibus arcu id massa pharetra posuere. Donec iaculis hendrerit feugiat. Mauris vitae malesuada nisl.', '2017-12-17 19:00:43'),
	(19, 6, 3, 'Phasellus in euismod justo. Curabitur non lorem arcu. Etiam ornare purus in felis pellentesque suscipit. Vestibulum tincidunt justo nulla, a accumsan turpis ornare ut. Aenean consequat lorem at tellus molestie facilisis. Phasellus efficitur nulla in sollicitudin tincidunt. Donec imperdiet arcu et mi ultrices, a mollis nisl eleifend. Quisque non bibendum velit. Maecenas ut facilisis ipsum. Sed faucibus arcu id massa pharetra posuere. Donec iaculis hendrerit feugiat. Mauris vitae malesuada nisl.', '2017-12-17 19:01:43');
/*!40000 ALTER TABLE `bs_avaliacao` ENABLE KEYS */;

-- Copiando estrutura para tabela bdtrabalho.bs_avaliacao_servico
CREATE TABLE IF NOT EXISTS `bs_avaliacao_servico` (
  `avs_ava_id` int(11) DEFAULT NULL,
  `avs_ser_id` int(11) DEFAULT NULL,
  `avs_pontuacao` int(11) DEFAULT NULL,
  `avs_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `avs_ava_id_avs_ser_id` (`avs_ava_id`,`avs_ser_id`),
  KEY `fk_avaliacao_servico_servico` (`avs_ser_id`),
  CONSTRAINT `fk_avaliacao_servico_avaliacao` FOREIGN KEY (`avs_ava_id`) REFERENCES `bs_avaliacao` (`ava_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_avaliacao_servico_servico` FOREIGN KEY (`avs_ser_id`) REFERENCES `bs_servico` (`ser_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Copiando dados para a tabela bdtrabalho.bs_avaliacao_servico: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `bs_avaliacao_servico` DISABLE KEYS */;
INSERT INTO `bs_avaliacao_servico` (`avs_ava_id`, `avs_ser_id`, `avs_pontuacao`, `avs_cadastro`) VALUES
	(1, 1, 1, '2017-12-17 18:54:48'),
	(1, 2, 2, '2017-12-17 18:54:48'),
	(1, 3, 3, '2017-12-17 18:54:49'),
	(1, 4, 4, '2017-12-17 18:54:49'),
	(1, 5, 5, '2017-12-17 18:54:49'),
	(1, 6, 1, '2017-12-17 18:54:49'),
	(1, 7, 2, '2017-12-17 18:54:49'),
	(1, 8, 3, '2017-12-17 18:54:49'),
	(1, 9, 4, '2017-12-17 18:54:49'),
	(1, 10, 5, '2017-12-17 18:54:49'),
	(1, 11, 1, '2017-12-17 18:54:49'),
	(1, 12, 2, '2017-12-17 18:54:49'),
	(1, 13, 3, '2017-12-17 18:54:50'),
	(1, 14, 4, '2017-12-17 18:54:50'),
	(1, 15, 5, '2017-12-17 18:54:50');
/*!40000 ALTER TABLE `bs_avaliacao_servico` ENABLE KEYS */;

-- Copiando estrutura para tabela bdtrabalho.bs_estabelecimento
CREATE TABLE IF NOT EXISTS `bs_estabelecimento` (
  `est_id` int(11) NOT NULL AUTO_INCREMENT,
  `est_usu_id` int(11) DEFAULT NULL,
  `est_nome` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `est_cep` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `est_rua` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `est_numero` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `est_complemento` text COLLATE latin1_general_ci,
  `est_bairro` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `est_cidade` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `est_estado` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `est_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`est_id`),
  KEY `fk_estabelecimento_usuario` (`est_usu_id`),
  CONSTRAINT `fk_estabelecimento_usuario` FOREIGN KEY (`est_usu_id`) REFERENCES `bs_usuario` (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Copiando dados para a tabela bdtrabalho.bs_estabelecimento: ~13 rows (aproximadamente)
/*!40000 ALTER TABLE `bs_estabelecimento` DISABLE KEYS */;
INSERT INTO `bs_estabelecimento` (`est_id`, `est_usu_id`, `est_nome`, `est_cep`, `est_rua`, `est_numero`, `est_complemento`, `est_bairro`, `est_cidade`, `est_estado`, `est_cadastro`) VALUES
	(1, 1, 'Tempero das Gerais', '79065250', 'Rua Princesa Isabel', '4321', '', 'Centro', 'São Paulo', 'São Paulo', '2017-12-17 17:58:55'),
	(2, 2, 'A Casa do Porco', '79065250', 'Rua Araujo', '124 ', NULL, 'Santana', 'Campo Grande', 'Mato Grosso do Sul', '2017-12-17 17:58:55'),
	(3, 3, 'Jardineira Grill', '79065250', 'Avenida dos Bandeirantes', '1001 ', NULL, 'Vila Medeiros', 'Rio de Janeiro', 'Rio de Janeiro', '2017-12-17 17:58:55'),
	(4, 4, 'Pao Com Carne Hamburgueria', '79065250', 'Rua Joaquim Floriano', '2150', NULL, 'Centro', 'Dourados', 'Mato Grosso do Sul', '2017-12-17 17:58:55'),
	(5, 1, 'Karaokê Box Porque Sim', '79065250', 'Rua Thomaz Gonzaga', '595', NULL, 'Centro', 'São Paulo', 'São Paulo', '2017-12-17 17:58:55'),
	(6, 2, 'Raful', '79065250', 'Rua Comendador Abdo Schahin', '75', NULL, 'Santana', 'Dourados', 'Mato Grosso do Sul', '2017-12-17 17:58:55'),
	(7, 3, 'Rinconcito Peruano', '79065250', 'Rua Aurora', '118', NULL, 'Vila Medeiros', 'São Paulo', 'São Paulo', '2017-12-17 17:58:55'),
	(8, 4, 'Taste It Food & Lounge', '79065250', 'Rua Joinville', '451 ', NULL, 'Santana', 'São Paulo', 'São Paulo', '2017-12-17 17:58:55'),
	(9, 1, 'NOSU Culinária Japonesa', '79065250', 'Rua Maria Curupaiti', '515 ', NULL, 'Centro', 'Campo Grande', 'Mato Grosso do Sul', '2017-12-17 17:58:55'),
	(10, 2, 'Coco Bambu Anália Franco', '79065250', 'Rua Azevedo Soares', '4321', NULL, 'Vila Medeiros', 'Campo Grande', 'Mato Grosso do Sul', '2017-12-17 17:58:55'),
	(11, 3, 'Esquina Mocotó', '79065250', 'Rua Araujo Casa', '595', NULL, 'Centro', 'Dourados', 'Mato Grosso do Sul', '2017-12-17 17:58:55'),
	(12, 4, 'Le Botteghe Di Leonardo', '79065250', 'Rua Joaquim Floriano', '4321', NULL, 'Santana', 'São Paulo', 'São Paulo', '2017-12-17 17:58:55'),
	(13, 1, 'Casa Mathilde', '79065250', 'Rua Comendador Abdo Schahin', '124 ', NULL, 'Santana', 'Campo Grande', 'Mato Grosso do Sul', '2017-12-17 17:58:55');
/*!40000 ALTER TABLE `bs_estabelecimento` ENABLE KEYS */;

-- Copiando estrutura para tabela bdtrabalho.bs_estabelecimento_foto
CREATE TABLE IF NOT EXISTS `bs_estabelecimento_foto` (
  `esf_est_id` int(11) DEFAULT NULL,
  `esf_imagem` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `esf_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  UNIQUE KEY `esf_est_id_esf_imagem` (`esf_est_id`,`esf_imagem`),
  CONSTRAINT `fk_estabelecimento_foto_estabelecimento` FOREIGN KEY (`esf_est_id`) REFERENCES `bs_estabelecimento` (`est_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Copiando dados para a tabela bdtrabalho.bs_estabelecimento_foto: ~26 rows (aproximadamente)
/*!40000 ALTER TABLE `bs_estabelecimento_foto` DISABLE KEYS */;
INSERT INTO `bs_estabelecimento_foto` (`esf_est_id`, `esf_imagem`, `esf_cadastro`) VALUES
	(1, 'estprm1.png', '2017-12-17 18:20:27'),
	(2, 'estprm2.png', '2017-12-17 18:20:27'),
	(3, 'estprm3.png', '2017-12-17 18:20:27'),
	(4, 'estprm4.png', '2017-12-17 18:20:27'),
	(5, 'estprm5.png', '2017-12-17 18:20:27'),
	(6, 'estprm6.png', '2017-12-17 18:20:27'),
	(7, 'estprm7.png', '2017-12-17 18:20:27'),
	(8, 'estprm8.png', '2017-12-17 18:20:27'),
	(9, 'estprm9.png', '2017-12-17 18:20:27'),
	(10, 'estprm10.png', '2017-12-17 18:20:27'),
	(11, 'foto-grande-estabelecimento-11.png', '2017-12-17 18:20:28'),
	(12, 'foto-grande-estabelecimento-12.png', '2017-12-17 18:20:28'),
	(13, 'estprm13.png', '2017-12-17 18:20:28'),
	(1, 'foto-grande-estabelecimento-1.png', '2017-12-17 18:20:27'),
	(2, 'foto-grande-estabelecimento-2.png', '2017-12-17 18:20:27'),
	(3, 'foto-grande-estabelecimento-3.png', '2017-12-17 18:20:27'),
	(4, 'foto-grande-estabelecimento-4.png', '2017-12-17 18:20:27'),
	(5, 'foto-grande-estabelecimento-5.png', '2017-12-17 18:20:27'),
	(6, 'foto-grande-estabelecimento-6.png', '2017-12-17 18:20:27'),
	(7, 'foto-grande-estabelecimento-7.png', '2017-12-17 18:20:27'),
	(8, 'foto-grande-estabelecimento-8.png', '2017-12-17 18:20:27'),
	(9, 'foto-grande-estabelecimento-9.png', '2017-12-17 18:20:27'),
	(10, 'foto-grande-estabelecimento-10.png', '2017-12-17 18:20:27'),
	(13, 'foto-grande-estabelecimento-13.png', '2017-12-17 18:20:28'),
	(12, 'estprm12.png', '2017-12-17 18:20:28'),
	(11, 'estprm11.png', '2017-12-17 18:20:28');
/*!40000 ALTER TABLE `bs_estabelecimento_foto` ENABLE KEYS */;

-- Copiando estrutura para tabela bdtrabalho.bs_estabelecimento_servico
CREATE TABLE IF NOT EXISTS `bs_estabelecimento_servico` (
  `ess_est_id` int(11) DEFAULT NULL,
  `ess_ser_id` int(11) DEFAULT NULL,
  UNIQUE KEY `ess_est_id_ess_ser_id` (`ess_est_id`,`ess_ser_id`),
  KEY `fk_estabelecimento_servico_servico` (`ess_ser_id`),
  CONSTRAINT `fk_estabelecimento_servico_estabelecimento` FOREIGN KEY (`ess_est_id`) REFERENCES `bs_estabelecimento` (`est_id`),
  CONSTRAINT `fk_estabelecimento_servico_servico` FOREIGN KEY (`ess_ser_id`) REFERENCES `bs_servico` (`ser_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Copiando dados para a tabela bdtrabalho.bs_estabelecimento_servico: ~35 rows (aproximadamente)
/*!40000 ALTER TABLE `bs_estabelecimento_servico` DISABLE KEYS */;
INSERT INTO `bs_estabelecimento_servico` (`ess_est_id`, `ess_ser_id`) VALUES
	(1, 1),
	(1, 2),
	(1, 3),
	(1, 4),
	(1, 5),
	(1, 6),
	(1, 7),
	(1, 8),
	(1, 9),
	(1, 10),
	(1, 11),
	(1, 12),
	(1, 13),
	(1, 14),
	(1, 15),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 1),
	(6, 1),
	(6, 2),
	(6, 3),
	(6, 4),
	(7, 1),
	(8, 1),
	(9, 1),
	(10, 1),
	(11, 1),
	(12, 1),
	(12, 2),
	(12, 3),
	(12, 4),
	(13, 1),
	(13, 2),
	(13, 3);
/*!40000 ALTER TABLE `bs_estabelecimento_servico` ENABLE KEYS */;

-- Copiando estrutura para tabela bdtrabalho.bs_servico
CREATE TABLE IF NOT EXISTS `bs_servico` (
  `ser_id` int(11) NOT NULL AUTO_INCREMENT,
  `ser_nome` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `ser_nome_min` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `ser_classe` varchar(10) COLLATE latin1_general_ci DEFAULT NULL,
  `ser_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ser_id`),
  UNIQUE KEY `ser_classe` (`ser_classe`),
  UNIQUE KEY `ser_nome` (`ser_nome`),
  UNIQUE KEY `ser_nome_min` (`ser_nome_min`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Copiando dados para a tabela bdtrabalho.bs_servico: ~15 rows (aproximadamente)
/*!40000 ALTER TABLE `bs_servico` DISABLE KEYS */;
INSERT INTO `bs_servico` (`ser_id`, `ser_nome`, `ser_nome_min`, `ser_classe`, `ser_cadastro`) VALUES
	(1, 'berçário', 'berçário', 'bercario', '2017-12-17 17:56:05'),
	(2, 'trocador', 'trocador', 'trocador', '2017-12-17 17:56:05'),
	(3, 'playground', 'playgro\'d', 'playground', '2017-12-17 17:56:05'),
	(4, 'estacionamento própio', 'estacio.', 'estacionam', '2017-12-17 17:56:05'),
	(5, 'papinha', 'papinha', 'papinha', '2017-12-17 17:56:05'),
	(6, 'música ambiente', 'música', 'musica', '2017-12-17 17:56:05'),
	(7, 'banheiro p/ deficientes', 'deficient.', 'ban-defi', '2017-12-17 17:56:06'),
	(8, 'banheiro familiar', 'familiar', 'ban-fami', '2017-12-17 17:56:06'),
	(9, 'cadeirão', 'cadeirão', 'cadeirao', '2017-12-17 17:56:06'),
	(10, 'comida vegana', 'vegana', 'com-vega', '2017-12-17 17:56:06'),
	(11, 'comida p/ lactointolerantes', 'lacto', 'com-lact', '2017-12-17 17:56:06'),
	(12, 'comida p/ celíacas', 'celíacas', 'com-celi', '2017-12-17 17:56:06'),
	(13, 'copa', 'copa', 'copa', '2017-12-17 17:56:06'),
	(14, 'possibilidade de reserva', 'reserva', 'pos-rese', '2017-12-17 17:56:06'),
	(15, 'cuidador', 'cuidador', 'cuidador', '2017-12-17 17:56:06');
/*!40000 ALTER TABLE `bs_servico` ENABLE KEYS */;

-- Copiando estrutura para tabela bdtrabalho.bs_usuario
CREATE TABLE IF NOT EXISTS `bs_usuario` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_nome` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `usu_email` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `usu_senha` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `usu_imagem` varchar(50) COLLATE latin1_general_ci DEFAULT NULL,
  `usu_cadastro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`usu_id`),
  UNIQUE KEY `usu_email` (`usu_email`),
  UNIQUE KEY `usu_imagem` (`usu_imagem`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- Copiando dados para a tabela bdtrabalho.bs_usuario: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `bs_usuario` DISABLE KEYS */;
INSERT INTO `bs_usuario` (`usu_id`, `usu_nome`, `usu_email`, `usu_senha`, `usu_imagem`, `usu_cadastro`) VALUES
	(1, 'Rodrigo Golfeto de Queiroz', 'r@gmail.com', '123456', 'usumin1.png', '2017-12-17 16:54:33'),
	(2, 'Kelvin Fernandes', 'k@gmail.com', '123456', 'usumin2.png', '2017-12-17 17:54:47'),
	(3, 'Matheus Ale', 'm@gmail.com', '123456', 'usumin3.png', '2017-12-17 17:55:05'),
	(4, 'Paulo Matheus', 'p@gmail.com', '123456', 'usumin4.png', '2017-12-17 17:55:21');
/*!40000 ALTER TABLE `bs_usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
