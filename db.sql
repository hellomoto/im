CREATE TABLE IF NOT EXISTS `todos` (
  `id` int(4) NOT NULL auto_increment,
  `message` text(140) NOT NULL default '',
  `author` varchar(65) NOT NULL default '',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;