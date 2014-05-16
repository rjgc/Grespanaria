-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 16-Maio-2014 às 16:19
-- Versão do servidor: 5.6.14
-- versão do PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `grespanaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apresentacoes`
--

CREATE TABLE IF NOT EXISTS `apresentacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `tamanho` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `apresentacoes`
--

INSERT INTO `apresentacoes` (`id`, `nome`, `url`, `tamanho`) VALUES
(1, 'Panaria Group Results 2012', 'ac514-apresentacoes.pdf', '740kb');

-- --------------------------------------------------------

--
-- Estrutura da tabela `certificados`
--

CREATE TABLE IF NOT EXISTS `certificados` (
  `id_certificado` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 NOT NULL,
  `url` varchar(100) CHARACTER SET utf8 NOT NULL,
  `id_tipos` int(11) NOT NULL,
  `id_marcas` int(11) NOT NULL,
  PRIMARY KEY (`id_certificado`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `certificados`
--

INSERT INTO `certificados` (`id_certificado`, `nome`, `url`, `id_tipos`, `id_marcas`) VALUES
(2, 'certificado', 'c700b-certificado.pdf', 1, 4),
(3, 'Certificado 2', 'c7a48-certificado.pdf', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `certificados_marcas`
--

CREATE TABLE IF NOT EXISTS `certificados_marcas` (
  `id_certificados_marcas` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  PRIMARY KEY (`id_certificados_marcas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `certificados_marcas`
--

INSERT INTO `certificados_marcas` (`id_certificados_marcas`, `nome`) VALUES
(1, 'Margres'),
(2, 'Love'),
(3, 'Bloom'),
(4, 'Easy');

-- --------------------------------------------------------

--
-- Estrutura da tabela `certificados_tipos`
--

CREATE TABLE IF NOT EXISTS `certificados_tipos` (
  `id_certificados_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `nome_pt` varchar(100) NOT NULL,
  `nome_en` varchar(100) NOT NULL,
  `nome_fr` varchar(100) NOT NULL,
  `nome_es` varchar(100) NOT NULL,
  `nome_de` varchar(100) NOT NULL,
  `nome_py` varchar(100) NOT NULL,
  PRIMARY KEY (`id_certificados_tipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `certificados_tipos`
--

INSERT INTO `certificados_tipos` (`id_certificados_tipo`, `nome_pt`, `nome_en`, `nome_fr`, `nome_es`, `nome_de`, `nome_py`) VALUES
(1, 'Declaração Ambiental', 'Declaração Ambientale', 'Declaração Ambientals', 'Declaração Ambientalas', 'Declaração Ambientalasd', 'Declaração Ambientalasdsa'),
(2, 'Marcação CE', 'Marcação CE1', 'Marcação CE2', 'Marcação CE3', 'Marcação CE4', 'Marcação CE5'),
(3, 'IQ NET NP EN  ISO 9001:2008', 'IQ NET NP EN  ISO 9001:20082', 'IQ NET NP EN  ISO 9001:20083', 'IQ NET NP EN  ISO 9001:20084', 'IQ NET NP EN  ISO 9001:20085', 'IQ NET NP EN  ISO 9001:20086'),
(4, 'NP EN ISO 9001:2008', 'NP EN ISO 9001:20082', 'NP EN ISO 9001:20083', 'NP EN ISO 9001:20084', 'NP EN ISO 9001:20085', 'NP EN ISO 9001:20086'),
(5, 'Certif Wall Tiles', 'Certif Wall Tiles2', 'Certif Wall Tiles3', 'Certif Wall Tiles4', 'Certif Wall Tiles5', 'Certif Wall Tiles6');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cizacl_resources`
--

CREATE TABLE IF NOT EXISTS `cizacl_resources` (
  `cizacl_resource_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cizacl_resource_type` enum('controller','function') NOT NULL,
  `cizacl_resource_controller` varchar(50) NOT NULL,
  `cizacl_resource_function` varchar(50) DEFAULT NULL,
  `cizacl_resource_description` varchar(255) DEFAULT NULL,
  `cizacl_resource_added_by` int(10) NOT NULL,
  `cizacl_resource_edited_by` int(10) DEFAULT NULL,
  `cizacl_resource_added_on` int(10) NOT NULL,
  `cizacl_resource_edited_on` int(10) DEFAULT NULL,
  PRIMARY KEY (`cizacl_resource_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cizacl_resources`
--

INSERT INTO `cizacl_resources` (`cizacl_resource_id`, `cizacl_resource_type`, `cizacl_resource_controller`, `cizacl_resource_function`, `cizacl_resource_description`, `cizacl_resource_added_by`, `cizacl_resource_edited_by`, `cizacl_resource_added_on`, `cizacl_resource_edited_on`) VALUES
(1, 'controller', 'login', NULL, NULL, 0, NULL, 1311112800, NULL),
(2, 'controller', 'cizacl', NULL, NULL, 0, NULL, 1311112800, NULL),
(3, 'controller', 'mediagest', NULL, '', 1, NULL, 1393091837, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cizacl_roles`
--

CREATE TABLE IF NOT EXISTS `cizacl_roles` (
  `cizacl_role_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cizacl_role_name` varchar(20) NOT NULL,
  `cizacl_role_inherit_id` varchar(50) DEFAULT NULL,
  `cizacl_role_redirect` varchar(255) NOT NULL,
  `cizacl_role_description` varchar(255) DEFAULT NULL,
  `cizacl_role_default` tinyint(1) unsigned NOT NULL,
  `cizacl_role_order` smallint(3) unsigned NOT NULL DEFAULT '998',
  PRIMARY KEY (`cizacl_role_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cizacl_roles`
--

INSERT INTO `cizacl_roles` (`cizacl_role_id`, `cizacl_role_name`, `cizacl_role_inherit_id`, `cizacl_role_redirect`, `cizacl_role_description`, `cizacl_role_default`, `cizacl_role_order`) VALUES
(1, 'Administrator', NULL, 'cizacl', '', 0, 1),
(2, 'Guest', NULL, 'login', NULL, 1, 2),
(3, 'Mediagest', '["2"]', 'mediagest', '', 0, 998);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cizacl_rules`
--

CREATE TABLE IF NOT EXISTS `cizacl_rules` (
  `cizacl_rule_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cizacl_rule_cizacl_role_id` int(11) DEFAULT NULL,
  `cizacl_rule_type` enum('allow','deny') NOT NULL,
  `cizacl_rule_cizacl_resource_controller` text NOT NULL,
  `cizacl_rule_cizacl_resource_function` text,
  `cizacl_rule_status` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `cizacl_rule_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cizacl_rule_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cizacl_rules`
--

INSERT INTO `cizacl_rules` (`cizacl_rule_id`, `cizacl_rule_cizacl_role_id`, `cizacl_rule_type`, `cizacl_rule_cizacl_resource_controller`, `cizacl_rule_cizacl_resource_function`, `cizacl_rule_status`, `cizacl_rule_description`) VALUES
(1, 1, 'allow', '[null]', '[null]', 1, ''),
(2, 2, 'allow', '["login"]', '[null]', 1, ''),
(3, 3, 'allow', '["mediagest"]', '[null]', 1, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cizacl_session`
--

CREATE TABLE IF NOT EXISTS `cizacl_session` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Extraindo dados da tabela `cizacl_session`
--

INSERT INTO `cizacl_session` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('6173217b5935a46e46bfc95563f6603e', '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/35.0.1916.114 Safari/537.36', 1400249808, 'a:5:{s:7:"user_id";s:1:"2";s:9:"user_name";s:11:"grespanaria";s:12:"user_surname";s:11:"grespanaria";s:15:"user_lastaccess";s:19:"2014-05-15 18:03:04";s:19:"user_cizacl_role_id";s:1:"3";}');

-- --------------------------------------------------------

--
-- Estrutura da tabela `media_photo`
--

CREATE TABLE IF NOT EXISTS `media_photo` (
  `id_media` int(11) NOT NULL AUTO_INCREMENT,
  `nome_pt` varchar(100) NOT NULL,
  `nome_en` varchar(100) NOT NULL,
  `nome_fr` varchar(100) NOT NULL,
  `nome_es` varchar(100) NOT NULL,
  `nome_de` varchar(100) NOT NULL,
  `nome_py` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY (`id_media`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `media_photo`
--

INSERT INTO `media_photo` (`id_media`, `nome_pt`, `nome_en`, `nome_fr`, `nome_es`, `nome_de`, `nome_py`, `url`) VALUES
(2, 'Teste 1', 'Teste 1en', 'Teste 1fr', 'Teste 1es', 'Teste 1de', 'Teste 1py', '6e93f-porcelain-stoneware-floor-tiles-stone-look-3686-3687501.jpg'),
(3, 'Teste 2', 'Teste 2', 'Teste 2', 'Teste 2', 'Teste 2', 'Teste 2', '4981a-porcelain-stoneware-floor-tiles-stone-look-3686-3687507.jpg'),
(4, 'Teste 3', 'Teste 3', 'Teste 3', 'Teste 3', 'Teste 3', 'Teste 3', '2a13d-porcelain-stoneware-floor-tiles-stone-look-3686-3687533.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `media_video`
--

CREATE TABLE IF NOT EXISTS `media_video` (
  `id_media` int(11) NOT NULL AUTO_INCREMENT,
  `nome_pt` varchar(100) NOT NULL,
  `nome_en` varchar(100) NOT NULL,
  `nome_fr` varchar(100) NOT NULL,
  `nome_es` varchar(100) NOT NULL,
  `nome_de` varchar(100) NOT NULL,
  `nome_py` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY (`id_media`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `media_video`
--

INSERT INTO `media_video` (`id_media`, `nome_pt`, `nome_en`, `nome_fr`, `nome_es`, `nome_de`, `nome_py`, `url`) VALUES
(1, 'Smash Mouth - All Star', 'Smash Mouth - All Star', 'Smash Mouth - All Star', 'teste', 'teste', 'testes', 'L_jWHffIx5E'),
(2, 'OutKast - Hey Ya!', 'OutKast - Hey Ya!', 'OutKast - Hey Ya!', 'OutKast - Hey Ya!', 'OutKast - Hey Ya!', 'OutKast - Hey Ya!', 'PWgvGjAhvIw');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id_noticia` int(11) NOT NULL AUTO_INCREMENT,
  `data_news` date NOT NULL,
  `titulo_pt` varchar(80) CHARACTER SET utf8 NOT NULL,
  `titulo_en` varchar(80) CHARACTER SET utf8 NOT NULL,
  `titulo_fr` varchar(80) CHARACTER SET utf8 NOT NULL,
  `titulo_es` varchar(80) CHARACTER SET utf8 NOT NULL,
  `titulo_de` varchar(80) CHARACTER SET utf8 NOT NULL,
  `titulo_py` varchar(80) CHARACTER SET utf8 NOT NULL,
  `texto_pt` varchar(100) CHARACTER SET utf8 NOT NULL,
  `texto_en` varchar(100) CHARACTER SET utf8 NOT NULL,
  `texto_fr` varchar(100) CHARACTER SET utf8 NOT NULL,
  `texto_es` varchar(100) CHARACTER SET utf8 NOT NULL,
  `texto_de` varchar(100) CHARACTER SET utf8 NOT NULL,
  `texto_py` varchar(100) CHARACTER SET utf8 NOT NULL,
  `foto` varchar(100) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id_noticia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id_noticia`, `data_news`, `titulo_pt`, `titulo_en`, `titulo_fr`, `titulo_es`, `titulo_de`, `titulo_py`, `texto_pt`, `texto_en`, `texto_fr`, `texto_es`, `texto_de`, `texto_py`, `foto`) VALUES
(1, '2014-03-01', 'Ceramic Tiles Revolution on the way', 'Ceramic Tiles Revolution on the way', 'Ceramic Tiles Revolution on the way', 'Ceramic Tiles Revolution on the way', 'Ceramic Tiles Revolution on the way', 'Ceramic Tiles Revolution on the way', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'img1.jpg'),
(2, '2014-02-03', 'Panaria Showrooms have more than 25500 visits in 2013', 'Panaria Showrooms have more than 25500 visits in 2013', 'Panaria Showrooms have more than 25500 visits in 2013', 'Panaria Showrooms have more than 25500 visits in 2013', 'Panaria Showrooms have more than 25500 visits in 2013', 'Panaria Showrooms have more than 25500 visits in 2013', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'img2.jpg'),
(3, '2013-12-01', 'Linea, new solutions', 'Linea, new solutions', 'Linea, new solutions', 'Linea, new solutions', 'Linea, new solutions', 'Linea, new solutions', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'img3.jpg'),
(4, '2013-12-01', 'Panaria Group on Mars', 'Panaria Group on Mars', 'Panaria Group on Mars', 'Panaria Group on Mars', 'Panaria Group on Mars', 'Panaria Group on Mars', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'img4.jpg'),
(5, '2013-12-01', 'Economic crisis effects in 2013', 'Economic crisis effects in 2013', 'Economic crisis effects in 2013', 'Economic crisis effects in 2013', 'Economic crisis effects in 2013', 'Economic crisis effects in 2013', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'img5.jpg'),
(6, '2013-12-01', 'Success meet some changes', 'Success meet some changes', 'Success meet some changes', 'Success meet some changes', 'Success meet some changes', 'Success meet some changes', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque ac dictum metus...', 'img6.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `page_videos`
--

CREATE TABLE IF NOT EXISTS `page_videos` (
  `id_page_videos` int(11) NOT NULL AUTO_INCREMENT,
  `onde_fica` varchar(100) NOT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY (`id_page_videos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `page_videos`
--

INSERT INTO `page_videos` (`id_page_videos`, `onde_fica`, `url`) VALUES
(1, 'Group Presentation (Apresentações)', 'https://www.youtube.com/profile'),
(2, 'Institucional Video (Group Profile)', 'https://www.youtube.com/institucional'),
(3, 'Margres Presentation (Group Profile)', 'https://www.youtube.com/margres'),
(4, 'Love Presentation (Group Profile)', 'https://www.youtube.com/love');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paginas`
--

CREATE TABLE IF NOT EXISTS `paginas` (
  `id_pagina` int(11) NOT NULL AUTO_INCREMENT,
  `nome_da_pagina` varchar(100) NOT NULL,
  `texto_pt` text NOT NULL,
  `texto_en` text NOT NULL,
  `texto_fr` text NOT NULL,
  `texto_es` text NOT NULL,
  `texto_de` text NOT NULL,
  `texto_py` text NOT NULL,
  PRIMARY KEY (`id_pagina`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`id_pagina`, `nome_da_pagina`, `texto_pt`, `texto_en`, `texto_fr`, `texto_es`, `texto_de`, `texto_py`) VALUES
(1, 'Group Profile (GPP)', '<p>A Gres Panaria Portugal S.A. é constituída em 2006 aquando da aquisição da segunda unidade industrial do Panaria Group em Portugal. Integrada no prestigiado grupo italiano Panariagroup Industrie Ceramiche S.p.A., a Gres Panaria S.A. é uma das empresas de cerâmica de referência a nível mundial.</p>\r\n<p>Em 2002 o Panariagroup adquiriu a 1ª unidade industrial em Portugal sita em Ílhavo, produzindo material, nomeadamente, para a marca Maronagres, actualmente intitulada Margres. Posteriormente, no ano de 2005, adquiriu a segunda unidade industrial, sita em Aveiro e que produzia material para a marca Novagres, que foi alvo de rebranding em 2008 e se passou a chamar Love Tiles.</p>\r\n<p>Estas duas unidades industriais têm uma capacidade instalada de 8 milhões de m2/ano. A Gres Panaria Portugal S.A. emprega em Portugal cerca de 400 colaboradores.</p>\r\n<p>Com uma estrutura comercial de 70 agentes, 8 promotores, presentes em mais de 113 países espalhados pelos 5 continentes, que dão apoio a um universo de mais de 2.000 clientes.</p>\r\n<p>A Gres Panaria tem uma estrutura dedicada – Product Development Department -  que através de laboratórios próprios leva a cabo a investigação e desenvolvimento de novos produtos, sempre na vanguarda quer em termos de qualidade quer em termos de design dos produtos.</p>\r\n<p>Para além das áreas produtivas e administrativas, as marcas possuem ainda showrooms próprios em Aveiro e Lisboa.</p>', '<p>A Gres Panaria Portugal S.A. é constituída em 2006 aquando da aquisição da segunda unidade industrial do Panaria Group em Portugal. Integrada no prestigiado grupo italiano Panariagroup Industrie Ceramiche S.p.A., a Gres Panaria S.A. é uma das empresas de cerâmica de referência a nível mundial.</p>\r\n<p>Em 2002 o Panariagroup adquiriu a 1ª unidade industrial em Portugal sita em Ílhavo, produzindo material, nomeadamente, para a marca Maronagres, actualmente intitulada Margres. Posteriormente, no ano de 2005, adquiriu a segunda unidade industrial, sita em Aveiro e que produzia material para a marca Novagres, que foi alvo de rebranding em 2008 e se passou a chamar Love Tiles.</p>\r\n<p>Estas duas unidades industriais têm uma capacidade instalada de 8 milhões de m2/ano. A Gres Panaria Portugal S.A. emprega em Portugal cerca de 400 colaboradores.</p>\r\n<p>Com uma estrutura comercial de 70 agentes, 8 promotores, presentes em mais de 113 países espalhados pelos 5 continentes, que dão apoio a um universo de mais de 2.000 clientes.</p>\r\n<p>A Gres Panaria tem uma estrutura dedicada – Product Development Department -  que através de laboratórios próprios leva a cabo a investigação e desenvolvimento de novos produtos, sempre na vanguarda quer em termos de qualidade quer em termos de design dos produtos.</p>\r\n<p>Para além das áreas produtivas e administrativas, as marcas possuem ainda showrooms próprios em Aveiro e Lisboa.</p>', '<p>A Gres Panaria Portugal S.A. é constituída em 2006 aquando da aquisição da segunda unidade industrial do Panaria Group em Portugal. Integrada no prestigiado grupo italiano Panariagroup Industrie Ceramiche S.p.A., a Gres Panaria S.A. é uma das empresas de cerâmica de referência a nível mundial.</p>\r\n<p>Em 2002 o Panariagroup adquiriu a 1ª unidade industrial em Portugal sita em Ílhavo, produzindo material, nomeadamente, para a marca Maronagres, actualmente intitulada Margres. Posteriormente, no ano de 2005, adquiriu a segunda unidade industrial, sita em Aveiro e que produzia material para a marca Novagres, que foi alvo de rebranding em 2008 e se passou a chamar Love Tiles.</p>\r\n<p>Estas duas unidades industriais têm uma capacidade instalada de 8 milhões de m2/ano. A Gres Panaria Portugal S.A. emprega em Portugal cerca de 400 colaboradores.</p>\r\n<p>Com uma estrutura comercial de 70 agentes, 8 promotores, presentes em mais de 113 países espalhados pelos 5 continentes, que dão apoio a um universo de mais de 2.000 clientes.</p>\r\n<p>A Gres Panaria tem uma estrutura dedicada – Product Development Department -  que através de laboratórios próprios leva a cabo a investigação e desenvolvimento de novos produtos, sempre na vanguarda quer em termos de qualidade quer em termos de design dos produtos.</p>\r\n<p>Para além das áreas produtivas e administrativas, as marcas possuem ainda showrooms próprios em Aveiro e Lisboa.</p>', '<p>A Gres Panaria Portugal S.A. é constituída em 2006 aquando da aquisição da segunda unidade industrial do Panaria Group em Portugal. Integrada no prestigiado grupo italiano Panariagroup Industrie Ceramiche S.p.A., a Gres Panaria S.A. é uma das empresas de cerâmica de referência a nível mundial.</p>\r\n<p>Em 2002 o Panariagroup adquiriu a 1ª unidade industrial em Portugal sita em Ílhavo, produzindo material, nomeadamente, para a marca Maronagres, actualmente intitulada Margres. Posteriormente, no ano de 2005, adquiriu a segunda unidade industrial, sita em Aveiro e que produzia material para a marca Novagres, que foi alvo de rebranding em 2008 e se passou a chamar Love Tiles.</p>\r\n<p>Estas duas unidades industriais têm uma capacidade instalada de 8 milhões de m2/ano. A Gres Panaria Portugal S.A. emprega em Portugal cerca de 400 colaboradores.</p>\r\n<p>Com uma estrutura comercial de 70 agentes, 8 promotores, presentes em mais de 113 países espalhados pelos 5 continentes, que dão apoio a um universo de mais de 2.000 clientes.</p>\r\n<p>A Gres Panaria tem uma estrutura dedicada – Product Development Department -  que através de laboratórios próprios leva a cabo a investigação e desenvolvimento de novos produtos, sempre na vanguarda quer em termos de qualidade quer em termos de design dos produtos.</p>\r\n<p>Para além das áreas produtivas e administrativas, as marcas possuem ainda showrooms próprios em Aveiro e Lisboa.</p>', '<p>A Gres Panaria Portugal S.A. é constituída em 2006 aquando da aquisição da segunda unidade industrial do Panaria Group em Portugal. Integrada no prestigiado grupo italiano Panariagroup Industrie Ceramiche S.p.A., a Gres Panaria S.A. é uma das empresas de cerâmica de referência a nível mundial.</p>\r\n<p>Em 2002 o Panariagroup adquiriu a 1ª unidade industrial em Portugal sita em Ílhavo, produzindo material, nomeadamente, para a marca Maronagres, actualmente intitulada Margres. Posteriormente, no ano de 2005, adquiriu a segunda unidade industrial, sita em Aveiro e que produzia material para a marca Novagres, que foi alvo de rebranding em 2008 e se passou a chamar Love Tiles.</p>\r\n<p>Estas duas unidades industriais têm uma capacidade instalada de 8 milhões de m2/ano. A Gres Panaria Portugal S.A. emprega em Portugal cerca de 400 colaboradores.</p>\r\n<p>Com uma estrutura comercial de 70 agentes, 8 promotores, presentes em mais de 113 países espalhados pelos 5 continentes, que dão apoio a um universo de mais de 2.000 clientes.</p>\r\n<p>A Gres Panaria tem uma estrutura dedicada – Product Development Department -  que através de laboratórios próprios leva a cabo a investigação e desenvolvimento de novos produtos, sempre na vanguarda quer em termos de qualidade quer em termos de design dos produtos.</p>\r\n<p>Para além das áreas produtivas e administrativas, as marcas possuem ainda showrooms próprios em Aveiro e Lisboa.</p>', '<p>A Gres Panaria Portugal S.A. é constituída em 2006 aquando da aquisição da segunda unidade industrial do Panaria Group em Portugal. Integrada no prestigiado grupo italiano Panariagroup Industrie Ceramiche S.p.A., a Gres Panaria S.A. é uma das empresas de cerâmica de referência a nível mundial.</p>\r\n<p>Em 2002 o Panariagroup adquiriu a 1ª unidade industrial em Portugal sita em Ílhavo, produzindo material, nomeadamente, para a marca Maronagres, actualmente intitulada Margres. Posteriormente, no ano de 2005, adquiriu a segunda unidade industrial, sita em Aveiro e que produzia material para a marca Novagres, que foi alvo de rebranding em 2008 e se passou a chamar Love Tiles.</p>\r\n<p>Estas duas unidades industriais têm uma capacidade instalada de 8 milhões de m2/ano. A Gres Panaria Portugal S.A. emprega em Portugal cerca de 400 colaboradores.</p>\r\n<p>Com uma estrutura comercial de 70 agentes, 8 promotores, presentes em mais de 113 países espalhados pelos 5 continentes, que dão apoio a um universo de mais de 2.000 clientes.</p>\r\n<p>A Gres Panaria tem uma estrutura dedicada – Product Development Department -  que através de laboratórios próprios leva a cabo a investigação e desenvolvimento de novos produtos, sempre na vanguarda quer em termos de qualidade quer em termos de design dos produtos.</p>\r\n<p>Para além das áreas produtivas e administrativas, as marcas possuem ainda showrooms próprios em Aveiro e Lisboa.</p>'),
(2, 'Margres Intro (GPP)', '<p>A Margres é uma das marcas líderes no sector dos pavimentos e revestimentos em grés porcelânico. Iniciou a produção na sua unidade industrial de Ílhavo em 1982, sendo então uma das primeiras fábricas de grés porcelânico a nível mundial.</p>\r\n<p>A Margres dedica-se exclusivamente à produção de grés porcelânico, um produto de excelência que, pelas suas elevadas vantagens técnicas oferece soluções para qualquer tipo de construção em espaços privados ou públicos. As características que tornam este produto impar, advêm do recurso à mais moderna tecnologia, a matérias-primas de elevada qualidade e a uma preocupação estética que vai de encontro às exigências da arquitectura contemporânea.</p>\r\n<p>A marca é uma referência no mercado nacional e tem uma grande presença no mercado internacional.</p>', '<p>A Margres é uma das marcas líderes no sector dos pavimentos e revestimentos em grés porcelânico. Iniciou a produção na sua unidade industrial de Ílhavo em 1982, sendo então uma das primeiras fábricas de grés porcelânico a nível mundial.</p>\r\n<p>A Margres dedica-se exclusivamente à produção de grés porcelânico, um produto de excelência que, pelas suas elevadas vantagens técnicas oferece soluções para qualquer tipo de construção em espaços privados ou públicos. As características que tornam este produto impar, advêm do recurso à mais moderna tecnologia, a matérias-primas de elevada qualidade e a uma preocupação estética que vai de encontro às exigências da arquitectura contemporânea.</p>\r\n<p>A marca é uma referência no mercado nacional e tem uma grande presença no mercado internacional.</p>', '<p>A Margres é uma das marcas líderes no sector dos pavimentos e revestimentos em grés porcelânico. Iniciou a produção na sua unidade industrial de Ílhavo em 1982, sendo então uma das primeiras fábricas de grés porcelânico a nível mundial.</p>\r\n<p>A Margres dedica-se exclusivamente à produção de grés porcelânico, um produto de excelência que, pelas suas elevadas vantagens técnicas oferece soluções para qualquer tipo de construção em espaços privados ou públicos. As características que tornam este produto impar, advêm do recurso à mais moderna tecnologia, a matérias-primas de elevada qualidade e a uma preocupação estética que vai de encontro às exigências da arquitectura contemporânea.</p>\r\n<p>A marca é uma referência no mercado nacional e tem uma grande presença no mercado internacional.</p>', '<p>A Margres é uma das marcas líderes no sector dos pavimentos e revestimentos em grés porcelânico. Iniciou a produção na sua unidade industrial de Ílhavo em 1982, sendo então uma das primeiras fábricas de grés porcelânico a nível mundial.</p>\r\n<p>A Margres dedica-se exclusivamente à produção de grés porcelânico, um produto de excelência que, pelas suas elevadas vantagens técnicas oferece soluções para qualquer tipo de construção em espaços privados ou públicos. As características que tornam este produto impar, advêm do recurso à mais moderna tecnologia, a matérias-primas de elevada qualidade e a uma preocupação estética que vai de encontro às exigências da arquitectura contemporânea.</p>\r\n<p>A marca é uma referência no mercado nacional e tem uma grande presença no mercado internacional.</p>', '<p>A Margres é uma das marcas líderes no sector dos pavimentos e revestimentos em grés porcelânico. Iniciou a produção na sua unidade industrial de Ílhavo em 1982, sendo então uma das primeiras fábricas de grés porcelânico a nível mundial.</p>\r\n<p>A Margres dedica-se exclusivamente à produção de grés porcelânico, um produto de excelência que, pelas suas elevadas vantagens técnicas oferece soluções para qualquer tipo de construção em espaços privados ou públicos. As características que tornam este produto impar, advêm do recurso à mais moderna tecnologia, a matérias-primas de elevada qualidade e a uma preocupação estética que vai de encontro às exigências da arquitectura contemporânea.</p>\r\n<p>A marca é uma referência no mercado nacional e tem uma grande presença no mercado internacional.</p>', '<p>A Margres é uma das marcas líderes no sector dos pavimentos e revestimentos em grés porcelânico. Iniciou a produção na sua unidade industrial de Ílhavo em 1982, sendo então uma das primeiras fábricas de grés porcelânico a nível mundial.</p>\r\n<p>A Margres dedica-se exclusivamente à produção de grés porcelânico, um produto de excelência que, pelas suas elevadas vantagens técnicas oferece soluções para qualquer tipo de construção em espaços privados ou públicos. As características que tornam este produto impar, advêm do recurso à mais moderna tecnologia, a matérias-primas de elevada qualidade e a uma preocupação estética que vai de encontro às exigências da arquitectura contemporânea.</p>\r\n<p>A marca é uma referência no mercado nacional e tem uma grande presença no mercado internacional.</p>'),
(3, 'Love Intro (GPP)', '<p>A marca Love Tiles surge em maio de 2008 substituindo a marca Novagres.  A nova designação, ligada a um conceito de marketing emocional, exprime o estilo da marca que convida a sentir cada espaço da sua casa através de ambientes elegantes, exclusivos e irrepetíveis</p>\r\n<p>A Love Tiles é uma marca especializada na produção de revestimentos em monoporosa pasta branca de grandes formatos e em pavimentos em grés esmaltado.</p>\r\n<p>A qualidade dos produtos aliada ao design de vanguarda têm contribuído para a consolidação da Love Tiles no mercado de revestimentos e pavimentos cerâmicos de gama média-alta.</p>\r\n', '<p>A marca Love Tiles surge em maio de 2008 substituindo a marca Novagres.  A nova designação, ligada a um conceito de marketing emocional, exprime o estilo da marca que convida a sentir cada espaço da sua casa através de ambientes elegantes, exclusivos e irrepetíveis</p>\r\n<p>A Love Tiles é uma marca especializada na produção de revestimentos em monoporosa pasta branca de grandes formatos e em pavimentos em grés esmaltado.</p>\r\n<p>A qualidade dos produtos aliada ao design de vanguarda têm contribuído para a consolidação da Love Tiles no mercado de revestimentos e pavimentos cerâmicos de gama média-alta.</p>', '<p>A marca Love Tiles surge em maio de 2008 substituindo a marca Novagres.  A nova designação, ligada a um conceito de marketing emocional, exprime o estilo da marca que convida a sentir cada espaço da sua casa através de ambientes elegantes, exclusivos e irrepetíveis</p>\r\n<p>A Love Tiles é uma marca especializada na produção de revestimentos em monoporosa pasta branca de grandes formatos e em pavimentos em grés esmaltado.</p>\r\n<p>A qualidade dos produtos aliada ao design de vanguarda têm contribuído para a consolidação da Love Tiles no mercado de revestimentos e pavimentos cerâmicos de gama média-alta.</p>', '<p>A marca Love Tiles surge em maio de 2008 substituindo a marca Novagres.  A nova designação, ligada a um conceito de marketing emocional, exprime o estilo da marca que convida a sentir cada espaço da sua casa através de ambientes elegantes, exclusivos e irrepetíveis</p>\r\n<p>A Love Tiles é uma marca especializada na produção de revestimentos em monoporosa pasta branca de grandes formatos e em pavimentos em grés esmaltado.</p>\r\n<p>A qualidade dos produtos aliada ao design de vanguarda têm contribuído para a consolidação da Love Tiles no mercado de revestimentos e pavimentos cerâmicos de gama média-alta.</p>', '<p>A marca Love Tiles surge em maio de 2008 substituindo a marca Novagres.  A nova designação, ligada a um conceito de marketing emocional, exprime o estilo da marca que convida a sentir cada espaço da sua casa através de ambientes elegantes, exclusivos e irrepetíveis</p>\r\n<p>A Love Tiles é uma marca especializada na produção de revestimentos em monoporosa pasta branca de grandes formatos e em pavimentos em grés esmaltado.</p>\r\n<p>A qualidade dos produtos aliada ao design de vanguarda têm contribuído para a consolidação da Love Tiles no mercado de revestimentos e pavimentos cerâmicos de gama média-alta.</p>', '<p>A marca Love Tiles surge em maio de 2008 substituindo a marca Novagres.  A nova designação, ligada a um conceito de marketing emocional, exprime o estilo da marca que convida a sentir cada espaço da sua casa através de ambientes elegantes, exclusivos e irrepetíveis</p>\r\n<p>A Love Tiles é uma marca especializada na produção de revestimentos em monoporosa pasta branca de grandes formatos e em pavimentos em grés esmaltado.</p>\r\n<p>A qualidade dos produtos aliada ao design de vanguarda têm contribuído para a consolidação da Love Tiles no mercado de revestimentos e pavimentos cerâmicos de gama média-alta.</p>'),
(4, 'Bloom Intro (GPP)', '<p>Bloom Ceramic Tiles é uma marca que oferece uma gama de produtos mais económica e ao mesmo tempo mais ecológica, devido à racionalização do seu processo produtivo. A gama Bloom oferece revestimentos e pavimentos de espessura reduzida que podem ser aplicados sobre o material já existente, sendo por isso ideal para renovações. Economia e sustentabilidade são as grandes vantagens da gama Bloom Ceramic Tiles.', '<p>Bloom Ceramic Tiles é uma marca que oferece uma gama de produtos mais económica e ao mesmo tempo mais ecológica, devido à racionalização do seu processo produtivo. A gama Bloom oferece revestimentos e pavimentos de espessura reduzida que podem ser aplicados sobre o material já existente, sendo por isso ideal para renovações. Economia e sustentabilidade são as grandes vantagens da gama Bloom Ceramic Tiles.', '<p>Bloom Ceramic Tiles é uma marca que oferece uma gama de produtos mais económica e ao mesmo tempo mais ecológica, devido à racionalização do seu processo produtivo. A gama Bloom oferece revestimentos e pavimentos de espessura reduzida que podem ser aplicados sobre o material já existente, sendo por isso ideal para renovações. Economia e sustentabilidade são as grandes vantagens da gama Bloom Ceramic Tiles.', '<p>Bloom Ceramic Tiles é uma marca que oferece uma gama de produtos mais económica e ao mesmo tempo mais ecológica, devido à racionalização do seu processo produtivo. A gama Bloom oferece revestimentos e pavimentos de espessura reduzida que podem ser aplicados sobre o material já existente, sendo por isso ideal para renovações. Economia e sustentabilidade são as grandes vantagens da gama Bloom Ceramic Tiles.', '<p>Bloom Ceramic Tiles é uma marca que oferece uma gama de produtos mais económica e ao mesmo tempo mais ecológica, devido à racionalização do seu processo produtivo. A gama Bloom oferece revestimentos e pavimentos de espessura reduzida que podem ser aplicados sobre o material já existente, sendo por isso ideal para renovações. Economia e sustentabilidade são as grandes vantagens da gama Bloom Ceramic Tiles.', '<p>Bloom Ceramic Tiles é uma marca que oferece uma gama de produtos mais económica e ao mesmo tempo mais ecológica, devido à racionalização do seu processo produtivo. A gama Bloom oferece revestimentos e pavimentos de espessura reduzida que podem ser aplicados sobre o material já existente, sendo por isso ideal para renovações. Economia e sustentabilidade são as grandes vantagens da gama Bloom Ceramic Tiles.'),
(5, 'Easy Intro (GPP)', '<p>EASY é uma marca de pavimentos e revestimentos em grés porcelânico produzidos na unidade industrial de Ílhavo.</p><p>A gama de produtos caracteriza-se pela simplicidade em termos de formatos, cor e acabamentos, que aliada à optimização de recursos no processo produtivo e logístico, fazem deste produto a solução para quem procura grande valia ao nível do binómio  qualidade-preço.</p>', '<p>EASY é uma marca de pavimentos e revestimentos em grés porcelânico produzidos na unidade industrial de Ílhavo.</p><p>A gama de produtos caracteriza-se pela simplicidade em termos de formatos, cor e acabamentos, que aliada à optimização de recursos no processo produtivo e logístico, fazem deste produto a solução para quem procura grande valia ao nível do binómio  qualidade-preço.</p>', '<p>EASY é uma marca de pavimentos e revestimentos em grés porcelânico produzidos na unidade industrial de Ílhavo.</p><p>A gama de produtos caracteriza-se pela simplicidade em termos de formatos, cor e acabamentos, que aliada à optimização de recursos no processo produtivo e logístico, fazem deste produto a solução para quem procura grande valia ao nível do binómio  qualidade-preço.</p>', '<p>EASY é uma marca de pavimentos e revestimentos em grés porcelânico produzidos na unidade industrial de Ílhavo.</p><p>A gama de produtos caracteriza-se pela simplicidade em termos de formatos, cor e acabamentos, que aliada à optimização de recursos no processo produtivo e logístico, fazem deste produto a solução para quem procura grande valia ao nível do binómio  qualidade-preço.</p>', '<p>EASY é uma marca de pavimentos e revestimentos em grés porcelânico produzidos na unidade industrial de Ílhavo.</p><p>A gama de produtos caracteriza-se pela simplicidade em termos de formatos, cor e acabamentos, que aliada à optimização de recursos no processo produtivo e logístico, fazem deste produto a solução para quem procura grande valia ao nível do binómio  qualidade-preço.</p>', '<p>EASY é uma marca de pavimentos e revestimentos em grés porcelânico produzidos na unidade industrial de Ílhavo.</p><p>A gama de produtos caracteriza-se pela simplicidade em termos de formatos, cor e acabamentos, que aliada à optimização de recursos no processo produtivo e logístico, fazem deste produto a solução para quem procura grande valia ao nível do binómio  qualidade-preço.</p>'),
(6, 'Certificação Intro', '<p>\r\n	A Gres Panaria Portugal S.A. tem um sistema de gest&atilde;o certificado de acordo com as Normas ISO 9001, ISO 14001 e Regulamento EMAS (Regulamento n&ordm;1221/2009). Os produtos produzidos cumprem os requisitos da ISO 13006, EN14411 e Regulamento dos Produtos de Constru&ccedil;&atilde;o (Regulamento CE n&ordm;305/2011).</p>\r\n', '<p>\r\n	ingles</p>\r\n', '<p>\r\n	frances</p>\r\n', '<p>\r\n	espanhol</p>\r\n', '<p>\r\n	alemao</p>\r\n', '<p>\r\n	py</p>\r\n'),
(7, 'Apresentação Intro', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus placerat turpis ac congue. Morbi at hendrerit velit. Vivamus facilisis lectus vel euismod iaculis. Quisque sagittis condimentum turpis, venenatis rutrum risus scelerisque in. Suspendisse semper mollis leo vel iaculis.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus placerat turpis ac congue. Morbi at hendrerit velit. Vivamus facilisis lectus vel euismod iaculis. Quisque sagittis condimentum turpis, venenatis rutrum risus scelerisque in. Suspendisse semper mollis leo vel iaculis.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus placerat turpis ac congue. Morbi at hendrerit velit. Vivamus facilisis lectus vel euismod iaculis. Quisque sagittis condimentum turpis, venenatis rutrum risus scelerisque in. Suspendisse semper mollis leo vel iaculis.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscinges es venenatis rutrum risus scelerisque in. Suspendisse semper mollis leo vel iaculis.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus placerat turpis ac  de isque sagittis condimentum turpis, venenatis rutrum risus scelerisque in. Suspendisse semper mollis leo vel iaculis.</p>', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus cursus placerat turpis ac c py um risus scelerisque in. Suspendisse semper mollis leo vel iaculis.</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_username` varchar(80) NOT NULL,
  `user_password` varchar(64) NOT NULL,
  `user_cizacl_role_id` int(11) NOT NULL,
  `user_auth` int(11) DEFAULT NULL,
  `user_auth_date` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`user_id`, `user_username`, `user_password`, `user_cizacl_role_id`, `user_auth`, `user_auth_date`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, NULL, NULL),
(2, 'grespanaria', 'c7891060e699526d048daa14cfc905e3', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_profiles`
--

CREATE TABLE IF NOT EXISTS `user_profiles` (
  `user_profile_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_profile_user_id` int(10) unsigned NOT NULL,
  `user_profile_name` varchar(50) NOT NULL,
  `user_profile_surname` varchar(50) NOT NULL,
  `user_profile_email` varchar(100) DEFAULT NULL,
  `user_profile_user_status_code` tinyint(1) NOT NULL,
  `user_profile_lastaccess` int(11) DEFAULT NULL,
  `user_profile_added` int(11) DEFAULT NULL,
  `user_profile_edited` int(11) DEFAULT NULL,
  `user_profile_added_by` int(10) NOT NULL,
  `user_profile_edited_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`user_profile_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `user_profiles`
--

INSERT INTO `user_profiles` (`user_profile_id`, `user_profile_user_id`, `user_profile_name`, `user_profile_surname`, `user_profile_email`, `user_profile_user_status_code`, `user_profile_lastaccess`, `user_profile_added`, `user_profile_edited`, `user_profile_added_by`, `user_profile_edited_by`) VALUES
(1, 1, 'Nelson', 'Rodrigues', 'nelsonrodrigues@mediaweb.pt', 1, 1393092392, 1310827985, 1385743532, 0, 1),
(2, 2, 'grespanaria', 'grespanaria', 'grespanaria@grespanaria.pt', 1, 1400241511, 1393092026, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `user_status`
--

CREATE TABLE IF NOT EXISTS `user_status` (
  `user_status_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_status_name` varchar(10) NOT NULL,
  `user_status_code` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_status_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `user_status`
--

INSERT INTO `user_status` (`user_status_id`, `user_status_name`, `user_status_code`) VALUES
(1, 'enabled', 1),
(2, 'disabled', 2),
(3, 'blocked', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
