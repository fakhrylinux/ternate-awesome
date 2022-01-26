create database ternateawesome;

use ternateawesome;

create table post
(
    id      int          not null auto_increment,
    title   varchar(255) not null,
    image   varchar(255) not null,
    caption varchar(255) default null,
    primary key (id)
);

select * from post;

truncate post;

SELECT id, title, image, caption FROM post WHERE id = 3;
