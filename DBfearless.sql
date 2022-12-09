create database fearless;

use fearless;

create table barang ( 
	id int not null primary key auto_increment, 
    nama char(10) not null,
    alamat varchar(50) not null, 
    notelp int not null, 
    jk varchar(20) not null, 
    agama char(20) not null
    );


