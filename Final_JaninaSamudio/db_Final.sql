create database db_Final;

use db_Final;

create table blog(
    idBlog int auto_increment Primary key,
    cliente varchar(10) not null,
    mensaje varchar(200) not null
);

/*consultas */
INSERT INTO `blog`(`cliente`, `mensaje`) VALUES ('Janina','Es lo que hay');
INSERT INTO `blog`(`cliente`, `mensaje`) VALUES ('Rodrigo','Marika');