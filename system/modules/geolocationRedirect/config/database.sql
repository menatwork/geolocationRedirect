-- **********************************************************
-- *                                                        *
-- * IMPORTANT NOTE                                         *
-- *                                                        *
-- * Do not import this file manually but use the TYPOlight *
-- * install tool to create and maintain database tables!   *
-- *                                                        *
-- **********************************************************

-- 
-- Table `tl_geolocationRedirect`
-- 

CREATE TABLE `tl_geolocation_redirect` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `tstamp` int(10) unsigned NOT NULL default '0',
  `url` varchar(255) NOT NULL default '',
  `host` varchar(255) NOT NULL default '',
  `type` varchar(3) NOT NULL default '',  
  `jumpToType` varchar(10) NOT NULL default '',
  `jumpTo` int(10) unsigned NOT NULL default '0',
  `jumpToUrl` varchar(255) NOT NULL default '',
  `rgxp` char(1) NOT NULL default '',
  `priority` int(10) unsigned NOT NULL default '10',
  `published` char(1) NOT NULL default '',
  `countries` blob NULL,

  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

