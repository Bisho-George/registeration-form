DROP DATABASE IF EXISTS User;
create database User;
use User;
create table user (
  username VARCHAR(40) PRIMARY KEY,
  fullname VARCHAR(100) NOT NULL,
  birth_date VARCHAR(30) NOT NULL,
  phone_number VARCHAR(20) NOT NULL,
  _address VARCHAR(200) NOT NULL,
  _password VARCHAR(50) NOT NULL,
  image_path VARCHAR(255),
  email VARCHAR(100) NOT NULL
)