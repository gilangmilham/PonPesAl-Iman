create database PonPesAl-Iman;

use PonPesAl-Iman;

create table userAccount(
	nama		varchar(100)	not null,
	username	varchar(100)	not null primary key, 
	password 	varchar(100)	not null,
	alamat	 	varchar(100)	not null,
	ttl 		date			not null,
	jk				varchar(100)	not null,
	userLevel	int				not null
);


create table berkas(
	id_berkas	int	not null primary key auto_increment,
	username	varchar(100) not null,
	kk			varchar(100)	not null,
	kk1			varchar(100)	not null, 
	kk2			varchar(100)	not null, 
	kk4			varchar(100)	not null,
	foreign key (username) references user(userAccount)
);

create table pengumuman(
	id_pengumuman	int	not null primary key auto_increment,
	teks			varchar(1000) not null,
	tanggal			date		not null
);

create table berita(
	id_berita	int	not null primary key auto_increment,
	teks		varchar(1000) not null,
	tanggal		date		not null
);