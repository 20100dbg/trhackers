CREATE DATABASE trhackers;

use trhackers;

CREATE TABLE users (
id int auto_increment,
user varchar(200),
password varchar(200),
primary key (id)
);

INSERT INTO users (user, password) values
('test','test'),
('admin','trhackers{SQLI_Un1on_to_w1n}');


CREATE TABLE sessions (
id int auto_increment,
user varchar(200),
code varchar(200),
primary key (id)
);

INSERT INTO sessions (user,code) values
('test','fake_session'),
('admin','trhackers{SQLI_bl1nd_can_r3ad}'),
('nobody','and_another_fake');
