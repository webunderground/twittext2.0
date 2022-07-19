CREATE TABLE `profile` (
  `id` int(11) NOT NULL auto_increment,
  `usuario` varchar(20) UNIQUE,
  `name` varchar(100) default NULL,
  `text` text,
  `insertdate` datetime default NULL,
  `web` varchar(100) default NULL,
  `email` varchar(100) default NULL,
  PRIMARY KEY  (`id`)
);
