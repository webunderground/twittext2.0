CREATE TABLE `messages` (
  `ip` int(11) NOT NULL auto_increment,
  `usuario` varchar(20) NOT NULL,
   `user` varchar(20) NOT NULL,
  `comentario` varchar(3000) NOT NULL,
  `fecha` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`ip`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1305 ;
