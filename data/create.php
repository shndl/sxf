create database pj charset=utf8;
use pj;
create table pj_admin(
    uid int PRIMARY KEY AUTO_INCREMENT,
    uname VARCHAR(32),
    upwd VARCHAR(32)
);
INSERT INTO pj_admin VALUES(
1,'admin','123456');