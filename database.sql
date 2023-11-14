create database huludb;

use huludb;

create table 'watchlist'(
    'id' int(11) NOT NULL auto_increment,
    'title' varchar(100),
    'sypnosis' varchar(500),
    'cast' varchar(100),
    'writer' varchar(100),
    PRIMARY KEY ('id')
);

create table 'user' (
    'id' int(11) NOT NULL auto_increment,
    'username' varchar(50),
    'password' varchar(50),
    PRIMARY KEY ('id')
);