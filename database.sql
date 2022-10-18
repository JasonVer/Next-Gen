CREATE DATABASE IaMSocial;

USE IaMSocial;

CREATE TABLE users(
    id INT PRIMARY KEY AUTO_INCREMENT,
    pwd VARCHAR(32) NOT NULL,
    mail VARCHAR(255) UNIQUE,
    username VARCHAR(255) UNIQUE,
    profilepic VARCHAR(32),
    bannerpic VARCHAR(32) 
);

CREATE TABLE feed(
    feedid INT PRIMARY KEY AUTO_INCREMENT,
    userid int,
    msg VARCHAR(255) ,
    pic VARCHAR(32),
    likes int,
    dislikes int,

    FOREIGN KEY (userid) REFERENCES users(id)
);

CREATE TABLE comments(
    commentid INT PRIMARY KEY AUTO_INCREMENT,
    feedid int,
    comment VARCHAR(255) ,
    likes int,
    dislikes int,
    FOREIGN KEY (feedid) REFERENCES feed(feedid)
);

