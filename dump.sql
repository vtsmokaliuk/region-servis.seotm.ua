DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
    id INT NOT NULL AUTO_INCREMENT,
    email varchar (255),
    auth_key varchar (32),
    password_hash varchar (255),
    password_reset_token varchar (255),
    status int(2),
    role varchar (10),
    created_at int(11),
    updated_at int(11),
    last_visit int(11),
    PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `user_settings`;
CREATE TABLE user_settings(
id INT(11) NOT NULL AUTO_INCREMENT,
uid INT(11) NOT NULL,
name varchar (80),
surname varchar (80),
patronymic varchar (80),
dateBirth varchar(10),
country varchar(50),
city varchar(50),
photo varchar(255),
phones TEXT(2000),
target INT(2),
gender varchar(20),
language varchar (4),
PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `user_favorites`;
CREATE TABLE user_favorites(
id INT(11) NOT NULL AUTO_INCREMENT,
uid INT(11) NOT NULL,
adsid INT(11) NOT NULL,
PRIMARY KEY (id)
);


DROP TABLE IF EXISTS `ads_stats`;
CREATE TABLE ads_stats(
id INT(11) NOT NULL AUTO_INCREMENT,
adsid INT(11) NOT NULL,
type varchar(40) NOT NULL, --#phone, #see ads #bookmark ads
value INT(11),
PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `ads`;
CREATE TABLE ads(
id INT(11) NOT NULL AUTO_INCREMENT,
cat_id INT(11) NOT NULL,
type varchar(40) NOT NULL,
value INT(11),
PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `ads_category`;
CREATE TABLE ads_category(
id INT(11) NOT NULL AUTO_INCREMENT,
parent_id INT(11) DEFAULT NULL,
name varchar(255) NOT NULL,
title varchar(255) DEFAULT NULL,
description TEXT(500) DEFAULT NULL,
content TEXT DEFAULT NULL,
alias varchar(255) NOT NULL,
image varchar(255) DEFAULT NULL,
status INT(11),
end_category INT(2),
PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `route`;
CREATE TABLE IF NOT EXISTS route (
  id INT(11) NOT NULL AUTO_INCREMENT,
  model varchar(255) NOT NULL,
  model_id int(11) NOT NULL,
  url varchar(255) NOT NULL,
  route varchar(255) NOT NULL,
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS options (
  id INT(11) NOT NULL AUTO_INCREMENT,
  category_id INT(11) NOT NULL,
  group_id INT(11) NOT NULL,
  type varchar (30) NOT NULL,
  name varchar(30) NOT NULL,
  label varchar(100) NOT NULL,
  help varchar (255) NOT NULL,
  help_position int (2) NOT NULL,
  show_label int(2) NOT NULL,
  required INT(2) NOT NULL,
  status int(2) NOT NULL,
  sort int(11) NOT NULL,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `lists`;
CREATE TABLE IF NOT EXISTS lists (
  id INT(11) NOT NULL AUTO_INCREMENT,
  option_id INT(11) NOT NULL,
  label varchar(100) NOT NULL,
  sort int(11) NOT NULL,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `ads`;
CREATE TABLE IF NOT EXISTS ads (
  id INT(11) NOT NULL AUTO_INCREMENT,
  user_id INT(11) NOT NULL,
  price INT(11) NOT NULL,
  description TEXT NOT NULL,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `ads_option`;
CREATE TABLE IF NOT EXISTS ads_option (
  id INT(11) NOT NULL AUTO_INCREMENT,
  ads_id INT(11) NOT NULL,
  option_id INT(11) NOT NULL,
  value varchar (255)NOT NULL,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `ads_list`;
CREATE TABLE IF NOT EXISTS ads_list (
  id INT(11) NOT NULL AUTO_INCREMENT,
  ads_id INT(11) NOT NULL ,
  list_id INT(11) NOT NULL,
  PRIMARY KEY (id)
);




DROP TABLE IF EXISTS `option_group`;
CREATE TABLE IF NOT EXISTS option_group (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(255),
  sort INT(11) NOT NULL,
  status INT(11) NOT NULL,
  PRIMARY KEY (id)
);



DROP TABLE IF EXISTS `system`;
CREATE TABLE IF NOT EXISTS system (
  id INT(11) NOT NULL AUTO_INCREMENT,
 `param` VARCHAR(255),
  value VARCHAR(255) NOT NULL,
  type VARCHAR(20) NOT NULL,
  label VARCHAR(255) NOT NULL,
  `default` VARCHAR(255) NOT NULL,
  status INT(2) NOT NULL,
  PRIMARY KEY (id)
);



DELIMITER $$
CREATE TRIGGER `delete_category` BEFORE DELETE ON `ads_category` FOR EACH ROW BEGIN
  DELETE FROM `route` WHERE `model_id`=OLD.`id` AND `model` LIKE 'backend\models\Category';
END
$$
DELIMITER ;


DELIMITER $$
CREATE TRIGGER `delete_ads` BEFORE DELETE ON `ads` FOR EACH ROW BEGIN
  DELETE FROM `ads_option` WHERE `ads_id`=OLD.`id`;
  DELETE FROM `ads_list` WHERE `ads_id`=OLD.`id`;
END
$$
DELIMITER ;
