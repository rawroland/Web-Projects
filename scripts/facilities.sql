CREATE TABLE IF NOT EXISTS facilities (
  id INT(10) unsigned NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  yacht_id INT(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;