drop table if exists president;

create table president (
    pres_id integer primary key auto_increment,
    last_name varchar(100) not null,
    first_name varchar(100) not null,
    year_birth integer not null
) engine=innodb character set utf8 collate utf8_unicode_ci;
