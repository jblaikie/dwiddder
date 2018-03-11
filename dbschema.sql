DROP DATABASE IF EXISTS db_users;
CREATE DATABASE db_users;
USE db_users;
CREATE TABLE tbl_users(
	uname varchar(255) primary key,
	pwd_hash varchar(1024),
	real_name varchar(1024)
);
