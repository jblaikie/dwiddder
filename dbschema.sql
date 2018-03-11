DROP DATABASE IF EXISTS tbl_posts;
CREATE DATABASE tbl_posts;
USE tbl_posts;
CREATE TABLE tbl_users(
	author varchar(255),
	post varchar(1024),
	ts timestamp,
	constraint postID primary key (author,post,ts)
);
