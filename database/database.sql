CREATE DATABASE iamsocial;

USE iamsocial;

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    pwd VARCHAR(32) NOT NULL,
    mail VARCHAR(255) UNIQUE,
    username VARCHAR(255) UNIQUE,
    profilepic VARCHAR(32),
    bannerpic VARCHAR(32) 
);

CREATE TABLE posts(
    postid INT PRIMARY KEY AUTO_INCREMENT,
    userid int,
    msg VARCHAR(255) ,
    pic VARCHAR(32),
    likes int,
    /*dislikes int,*/

    FOREIGN KEY (userid) REFERENCES users(id)
);

CREATE TABLE comments(
    commentid INT PRIMARY KEY AUTO_INCREMENT,
    postid int,
    userid int,
    comment VARCHAR(255) ,
    likes int,
    /*--dislikes int,*/
    FOREIGN KEY (postid) REFERENCES posts(postid)
);



CREATE VIEW v_user_post AS SELECT p.*, u.username FROM posts as p JOIN users as u WHERE u.id = p.userid;