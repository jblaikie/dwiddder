DROP DATABASE IF EXISTS db_posts;
CREATE DATABASE db_posts;
USE db_posts;
CREATE TABLE tbl_posts(
	author varchar(255),
	post varchar(1024),
	ts timestamp,
	constraint postID primary key (author,ts)
);

