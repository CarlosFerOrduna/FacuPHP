create database session;

use session;

truncate users;

create table users
(
    id       int(11) auto_increment primary key,
    fullname varchar(45) not null,
    username varchar(45) not null,
    password varchar(45) not null
);

insert into session.users (fullname, username, password)
VALUES ('Carlos Orduna', 'CarFer', '38632787Fo');
insert into session.users (fullname, username, password)
VALUES ('Ana Conde', 'AnaCond', '39331536AC');
insert into session.users (fullname, username, password)
VALUES ('Rodolfo Conde', 'RodCon', '39331536RC');
insert into session.users (fullname, username, password)
VALUES ('Graciela Costilla', 'ChelCos', '38632787CC');


select *
from users;

SELECT *
FROM users
WHERE username = 'CarFer'
  AND password = '38632787Fo';