create database merlim_system;

use merlim_system;

CREATE TABLE `merlim_system_users` (
  `id` int(11) NOT NULL auto_increment,
  `nick` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `zipcode` varchar(8) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `avatar_url` varchar(100) NOT NULL,
  `treatment` varchar(20) NOT NULL,
  `admin_level` varchar(1) NOT NULL,
  `description` varchar(100) NOT NULL,
  `document_number` varchar(30) NOT NULL,
  `document_type` varchar(100) NOT NULL,
  PRIMARY KEY  (`id`)
);

CREATE TABLE `merlim_system_users_addon` (
  `id` int(11) NOT NULL auto_increment,
  PRIMARY KEY  (`id`)
);