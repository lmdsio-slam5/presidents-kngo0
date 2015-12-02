create database if not exists presidents character set utf8 collate utf8_unicode_ci;
use presidents;

grant all privileges on presidents.* to 'presidents_user'@'localhost' identified by 'secret';
