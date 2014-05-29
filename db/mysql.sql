CREATE DATABASE IF NOT EXISTS weather_app default character set utf8;
GRANT ALL ON weather_app.* TO 'weather_app' IDENTIFIED BY 'weather_app';
USE weather_app;

--
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(120) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8;


INSERT INTO users( email, password ) VALUES
('foo@foo.com', '0aab0ff7206d459ea7ea1cc3cfb0f4552a745bd5'),
('bar@bar.com', '99521016cf06b97b81a5480c6261388718c13ccc'),
('baz@baz.com', '129ecae181a4a992cfe94a9955759ae10fdc44e4');
