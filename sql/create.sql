CREATE DATABASE `awsteste` /*!40100 DEFAULT CHARACTER SET latin1 */;

CREATE TABLE `usuarios` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(128) NOT NULL,
  `email` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
