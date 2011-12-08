CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `gender` int(11) NOT NULL DEFAULT '1',
  `country` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `registration_date` datetime NOT NULL,
  `timezone` varchar(255) NOT NULL DEFAULT 'Europe/Moscow',
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `email` (`email`),
  KEY `gender` (`gender`),
  KEY `born_date` (`registration_date`),
  KEY `country` (`country`),
  KEY `city` (`city`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;