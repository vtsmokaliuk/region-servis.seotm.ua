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


DROP TABLE IF EXISTS `route`;
CREATE TABLE IF NOT EXISTS route (
  id INT(11) NOT NULL AUTO_INCREMENT,
  model varchar(255) NOT NULL,
  model_id int(11) NOT NULL,
  url varchar(255) NOT NULL,
  route varchar(255) NOT NULL,
  PRIMARY KEY (id)
);


CREATE TABLE IF NOT EXISTS `language` (
  id INT(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(8) NOT NULL,
  `locale` varchar(8) NOT NULL,
  `title` varchar(64) NOT NULL,
  `icon` varchar(64) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `sort_order` int(11) DEFAULT NULL,
   PRIMARY KEY (id)
)


DROP TABLE IF EXISTS `material`;
CREATE TABLE IF NOT EXISTS material (
  id INT(11) NOT NULL AUTO_INCREMENT,
  banner_id INT(11)
  alias VARCHAR(255),
  image VARCHAR(255) DEFAULT '',
  pos int(1) DEFAULT 0,
  status INT(1) DEFAULT 0,
  section_id INT(11) NOT NULL,
  onmain INT(1) DEFAULT 0,
  `index` INT(1) DEFAULT 0,
  created_at INT(11) DEFAULT 0,
  updated_at INT(11) DEFAULT 0,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `material_description`;
CREATE TABLE IF NOT EXISTS material_description (
  id INT(11) NOT NULL AUTO_INCREMENT,
  material_id VARCHAR(11),
  language VARCHAR(255) NOT NULL,
  header VARCHAR(255) NOT NULL,
  header2 VARCHAR(255) DEFAULT '',
  title VARCHAR(255) NOT NULL,
  keywords TEXT(400) DEFAULT NULL,
  description TEXT(500) DEFAULT '',
  content TEXT DEFAULT '',
  short_content TEXT DEFAULT '',
  PRIMARY KEY (id)
);

DELIMITER $$
CREATE TRIGGER `delete_material` BEFORE DELETE ON `material` FOR EACH ROW BEGIN
  DELETE FROM `material_description` WHERE `material_id`=OLD.`id`;
END
$$
DELIMITER ;



DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS section (
  id INT(11) NOT NULL AUTO_INCREMENT,
  alias VARCHAR(255),
  image VARCHAR(255) DEFAULT '',
  pos int(1) DEFAULT 0,
  status INT(1) DEFAULT 0,
  `index` INT(1) DEFAULT 0,
  created_at INT(11) DEFAULT 0,
  updated_at INT(11) DEFAULT 0,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `section_description`;
CREATE TABLE IF NOT EXISTS section_description (
  id INT(11) NOT NULL AUTO_INCREMENT,
  section_id VARCHAR(11),
  language VARCHAR(255) NOT NULL,
  header VARCHAR(255) NOT NULL,
  header2 VARCHAR(255) DEFAULT '',
  title VARCHAR(255) NOT NULL,
  keywords TEXT(400) DEFAULT NULL,
  description TEXT(500) DEFAULT '',
  content TEXT DEFAULT '',
  short_content TEXT DEFAULT '',
  PRIMARY KEY (id)
);


DELIMITER $$
CREATE TRIGGER `delete_section` BEFORE DELETE ON `section` FOR EACH ROW BEGIN
  DELETE FROM `section_description` WHERE `section_id`=OLD.`id`;
END
$$
DELIMITER ;



DROP TABLE IF EXISTS `material_to_section`;
CREATE TABLE IF NOT EXISTS material_to_section (
  id INT(11) NOT NULL AUTO_INCREMENT,
  section_id INT(11) NOT NULL,
  material_id INT(11) NOT NULL,
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS category (
  id INT(11) NOT NULL AUTO_INCREMENT,
  image varchar (255) DEFAULT '',
 alias varchar (255) DEFAULT '',
  parent_id INT(11) DEFAULT 0,
  banner_id INT(11) DEFAULT 0,
  pos INT(11) DEFAULT 0,
  status INT (11) DEFAULT 0,
  `index` INT (11) DEFAULT 1,
  created_at INT(11) DEFAULT 0,
  updated_at INT(11) DEFAULT 0,
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS `category_description`;
CREATE TABLE IF NOT EXISTS category_description (
  id INT(11) NOT NULL AUTO_INCREMENT,
  category_id INT(11) NOT NULL,
  language VARCHAR(255) NOT NULL,
  header VARCHAR(255) NOT NULL,
  header2 VARCHAR(255) DEFAULT '',
  title VARCHAR(255) NOT NULL,
  keywords TEXT(400) DEFAULT NULL,
  description TEXT(500) DEFAULT '',
  content TEXT DEFAULT '',
  PRIMARY KEY (id)
);



DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS product (
  id INT(11) NOT NULL AUTO_INCREMENT,
  model varchar (64) DEFAULT '',
  sku varchar (64) DEFAULT '',
  quantity INT(4) DEFAULT 0,
  stock_status_id INT(11) DEFAULT NULL,
  image VARCHAR (255) DEFAULT '',
  alias VARCHAR (255) DEFAULT '',
  manufacture_id INT(11) DEFAULT NULL,
  shiping INT(11) DEFAULT NULL,
  price DECIMAL (15,4),
  new_price DECIMAL (15,4),
  price_rent DECIMAL (15,4),
  price_rent_status INT(11),
  points INT(8) DEFAULT NULL,
  is_new INT(11) DEFAULT 0,
  is_recomended INT(11) DEFAULT 0,
  pos INT(11) DEFAULT 0,
  status INT (11) DEFAULT 0,
  `index` INT (11) DEFAULT 1,
  created_at INT(11) DEFAULT 0,
  updated_at INT(11) DEFAULT 0,
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS `product_description`;
CREATE TABLE IF NOT EXISTS product_description (
  id INT(11) NOT NULL AUTO_INCREMENT,
  product_id INT(11) NOT NULL,
  language VARCHAR(255) NOT NULL,
  header VARCHAR(255) NOT NULL,
  title VARCHAR(255) NOT NULL,
  keywords TEXT(400) DEFAULT NULL,
  description TEXT(500) DEFAULT '',
  content TEXT DEFAULT '',
  short_content TEXT DEFAULT '',
  tag TEXT,
  PRIMARY KEY (id)
);

DELIMITER $$
CREATE TRIGGER `delete_product` BEFORE DELETE ON `product` FOR EACH ROW BEGIN
  DELETE FROM `product_description` WHERE `product_id`=OLD.`id`;
END
$$
DELIMITER ;


DELIMITER $$
CREATE TRIGGER `delete_product_route` BEFORE DELETE ON `product_description` FOR EACH ROW BEGIN
   DELETE FROM `route` WHERE `model_id`=OLD.`product_id` AND `model` LIKE 'backend\models\Product';
END
$$
DELIMITER ;



DELIMITER $$
CREATE TRIGGER `delete_category` BEFORE DELETE ON `category` FOR EACH ROW BEGIN
  DELETE FROM `category_description` WHERE `category_id`=OLD.`id`;
END
$$
DELIMITER ;


DROP TABLE IF EXISTS `attribute_group`;
CREATE TABLE IF NOT EXISTS attribute_group (
  id INT(11) NOT NULL AUTO_INCREMENT,
  pos INT(11) DEFAULT 0,
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS `attribute_group_description`;
CREATE TABLE IF NOT EXISTS attribute_group_description (
  id INT(11) NOT NULL AUTO_INCREMENT,
  attribute_group_id INT(11) NOT NULL,
  language VARCHAR(255) NOT NULL,
  header VARCHAR(255) NOT NULL,
   PRIMARY KEY (id)
);

DELIMITER $$
CREATE TRIGGER `delete_group_atribute` BEFORE DELETE ON `attribute_group` FOR EACH ROW BEGIN
  DELETE FROM `attribute_group_description` WHERE `attribute_group_id`=OLD.`id`;
END
$$
DELIMITER ;




DROP TABLE IF EXISTS `attribute`;
CREATE TABLE IF NOT EXISTS attribute (
  id INT(11) NOT NULL AUTO_INCREMENT,
  attribute_group_id INT(11) NOT NULL,
  pos INT(11) DEFAULT 0,
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS `attribute_description`;
CREATE TABLE IF NOT EXISTS attribute_description (
  id INT(11) NOT NULL AUTO_INCREMENT,
  attribute_id INT(11) NOT NULL,
  language VARCHAR(255) NOT NULL,
  header VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);



DROP TABLE IF EXISTS `product_attribute`;
CREATE TABLE IF NOT EXISTS product_attribute (
  id INT(11) NOT NULL AUTO_INCREMENT,
   language VARCHAR(255) NOT NULL,
  product_id INT(11) NOT NULL,
  attribute_id INT(11) NOT NULL,
  text TEXT DEFAULT '',
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS `product_to_category`;
CREATE TABLE IF NOT EXISTS product_to_category (
    id INT(11) NOT NULL AUTO_INCREMENT,
    product_id	int(11),
    category_id	int(11),
    main_category tinyint(1),
  PRIMARY KEY (id)
);



DELIMITER $$
CREATE TRIGGER `delete_attribute` BEFORE DELETE ON `attribute` FOR EACH ROW BEGIN
  DELETE FROM `attribute_description` WHERE `attribute_id`=OLD.`id`;
END
$$
DELIMITER ;



DELIMITER $$
CREATE TRIGGER `delete_category_roure` BEFORE DELETE ON `category` FOR EACH ROW BEGIN
  DELETE FROM `route` WHERE `model_id`=OLD.`id` AND `model` LIKE 'backend\models\Category';
END
$$
DELIMITER ;

INSERT INTO `language` (`id`, `code`, `locale`, `title`, `icon`, `status`, `sort_order`) VALUES
(1, 'ru', 'ru-RU', 'Русский', 'flag-icon flag-icon-ru', 1, NULL),
(2, 'ua', 'ua', 'Український', 'ua.png', 0, NULL);





DROP TABLE IF EXISTS `delivery`;
CREATE TABLE delivery (
  id INT(11) NOT NULL AUTO_INCREMENT,
  language VARCHAR(255) NOT NULL,
  status INT(11) DEFAULT 0,
   pos INT(11) DEFAULT 0,
  price DECIMAL (15,4),
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS `delivery_description`;
CREATE TABLE delivery_description (
    id INT(11) NOT NULL AUTO_INCREMENT,
    delivery_id	int(11),
    language VARCHAR(255) NOT NULL,
     header VARCHAR(255) NOT NULL,
     content TEXT NOT NULL,
  PRIMARY KEY (id)
);

DELIMITER $$
CREATE TRIGGER `delete_delivery` BEFORE DELETE ON `delivery` FOR EACH ROW BEGIN
  DELETE FROM `delivery_description` WHERE `delivery_id`=OLD.`id`;
END
$$
DELIMITER ;


DROP TABLE IF EXISTS `block`;
CREATE TABLE block (
  id INT(11) NOT NULL AUTO_INCREMENT,
  type VARCHAR(255) NOT NULL,
  `key` VARCHAR(255) NOT NULL,
  status INT(11) DEFAULT 0,
  pos INT(11) DEFAULT 0,
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS `block_description`;
CREATE TABLE block_description (
    id INT(11) NOT NULL AUTO_INCREMENT,
    block_id int(11),
    language VARCHAR(255) NOT NULL,
    header VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
  PRIMARY KEY (id)
);

DELIMITER $$
CREATE TRIGGER `delete_block` BEFORE DELETE ON `block` FOR EACH ROW BEGIN
  DELETE FROM `block_description` WHERE `block_id`=OLD.`id`;
END
$$
DELIMITER ;




DROP TABLE IF EXISTS `menu`;
CREATE TABLE menu (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  `key` VARCHAR(255) NOT NULL,
  status INT(11) DEFAULT 0,
  pos INT(11) DEFAULT 0,
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS `menu_description`;
CREATE TABLE menu_description (
    id INT(11) NOT NULL AUTO_INCREMENT,
    menu_id int(11),
    language VARCHAR(255) NOT NULL,
    header VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
  PRIMARY KEY (id)
);

DELIMITER $$
CREATE TRIGGER `delete_menu` BEFORE DELETE ON `menu` FOR EACH ROW BEGIN
  DELETE FROM `menu_description` WHERE `menu_id`=OLD.`id`;
END
$$
DELIMITER ;




DROP TABLE IF EXISTS `banner`;
CREATE TABLE banner (
  id INT(11) NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  `key` VARCHAR(255) NOT NULL,
  status INT(11) DEFAULT 0,
  pos INT(11) DEFAULT 0,
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS `banner_desctiption`;
CREATE TABLE banner_desctiption (
    id INT(11) NOT NULL AUTO_INCREMENT,
    banner_id int(11),
    language VARCHAR(255) NOT NULL,
    link VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    header TEXT NOT NULL,
    header2 TEXT NOT NULL,
    btn_text VARCHAR(255) NOT NULL,
    show_btn INT(11) DEFAULT 0,
    content TEXT NOT NULL,
    pos INT(11) DEFAULT 0,
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS `product_image`;
CREATE TABLE product_image (
  id INT(11) NOT NULL AUTO_INCREMENT,
  product_id INT(11) DEFAULT 0,
  image VARCHAR(255) NOT NULL,
  pos INT(11) DEFAULT 0,
  PRIMARY KEY (id)
);

DELIMITER $$
CREATE TRIGGER `delete_banner` BEFORE DELETE ON `banner` FOR EACH ROW BEGIN
  DELETE FROM `banner_desctiption` WHERE `banner_id`=OLD.`id`;
END
$$
DELIMITER ;
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  id INT(11) NOT NULL AUTO_INCREMENT,
  customer_id INT(11) DEFAULT 0,
  firstname VARCHAR(64) DEFAULT '',
  lastname VARCHAR(64) DEFAULT '',
  surname VARCHAR(64) DEFAULT '',
  email VARCHAR(96) DEFAULT '',
  telephone VARCHAR(32) DEFAULT '',
  adress TEXT DEFAULT '',
  city VARCHAR(255) DEFAULT '',
  postcode VARCHAR(64) DEFAULT '',
  delivery_id INT(11) DEFAULT 0,
  delivery_name VARCHAR(255) DEFAULT '',
  total DECIMAL (15,4),
  currency_code VARCHAR(64) DEFAULT '',
  payment_id INT(11) DEFAULT 0,
  payment_name VARCHAR(255) DEFAULT '',
  order_status_id INT (11),
  pos INT(11) DEFAULT 0,
  ip varchar(255) default '',
  user_agent TEXT,
  date_added VARCHAR(64) DEFAULT '',
  date_modifield VARCHAR(64) DEFAULT '',
  PRIMARY KEY (id)
);


DROP TABLE IF EXISTS `order_rent`;
CREATE TABLE `order_rent` (
  id INT(11) NOT NULL AUTO_INCREMENT,
  customer_id INT(11) DEFAULT 0,
  product_id INT(11) DEFAULT 0,
  product_name VARCHAR(255) DEFAULT '',
  firstname VARCHAR(64) DEFAULT '',
  lastname VARCHAR(64) DEFAULT '',
  surname VARCHAR(64) DEFAULT '',
  email VARCHAR(96) DEFAULT '',
  telephone VARCHAR(32) DEFAULT '',
  hour INT(11) DEFAULT 0,
  price DECIMAL (15,4),
  total DECIMAL (15,4),
  currency_code VARCHAR(64) DEFAULT '',
  order_status_id INT (11),
  pos INT(11) DEFAULT 0,
  ip varchar(255) default '',
  comment TEXT,
  date_added VARCHAR(64) DEFAULT '',
  date_modifield VARCHAR(64) DEFAULT '',
  PRIMARY KEY (id)
);





DROP TABLE IF EXISTS `order_product`;
CREATE TABLE order_product (
  id INT(11) NOT NULL AUTO_INCREMENT,
  order_id INT(11) DEFAULT 0,
  product_id INT(11) DEFAULT 0 ,
  name VARCHAR(255) DEFAULT '',
  model VARCHAR(255) DEFAULT '',
  quantity int(4) DEFAULT 0,
  price DECIMAL (15,4),
  total DECIMAL (15,4),
  PRIMARY KEY (id)
);

DROP TABLE IF EXISTS `order_total`;
CREATE TABLE order_total (
  id INT(11) NOT NULL AUTO_INCREMENT,
  order_id INT(11) DEFAULT 0,
  code VARCHAR(64) DEFAULT '',
  title VARCHAR(255) DEFAULT '',
  value VARCHAR(255) DEFAULT '',
  pos int(4) DEFAULT 0,
   PRIMARY KEY (id)
);


DROP TABLE IF EXISTS `order_history`;
CREATE TABLE order_history (
  id INT(11) NOT NULL AUTO_INCREMENT,
  order_id INT(11) DEFAULT 0,
  product_id INT(11) DEFAULT 0 ,
  name VARCHAR(255) DEFAULT '',
  model VARCHAR(255) DEFAULT '',
  quantity int(4) DEFAULT 0,
  price DECIMAL (15,4),
  total DECIMAL (15,4),
   date_added VARCHAR(64) DEFAULT '',
  PRIMARY KEY (id)
);
