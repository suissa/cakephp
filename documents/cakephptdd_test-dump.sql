DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL DEFAULT '',
  `texto` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `profiles`;

CREATE TABLE `profiles` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `profiles` (`id`, `name`, `created`, `modified`) VALUES (1, 'Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00');
INSERT INTO `profiles` (`id`, `name`, `created`, `modified`) VALUES (2, 'Member', '0000-00-00 00:00:00', '0000-00-00 00:00:00');


CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(50) NOT NULL,
  `password` varchar(64) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `profile_id` int(10) unsigned NOT NULL,
  `active` tinyint(1) unsigned NOT NULL,
  `created` datetime,
  `modified` datetime,
  PRIMARY KEY  (`id`),
  KEY `profile_id` (`profile_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `email`, `profile_id`, `active`, `created`, `modified`) 
VALUES (1, 'gonow', '55d5bc2cc74098c22a9ba6616bfdb413ade65c95', 'Dev', 'Gonow', 'email@domail.com', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `email`, `profile_id`, `active`, `created`, `modified`) 
VALUES (2, 'suporte', '55d5bc2cc74098c22a9ba6616bfdb413ade65c95', 'Suporte', 'Gonow', 'email@domail.com', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');
