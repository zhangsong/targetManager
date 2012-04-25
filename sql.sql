create database targetManager;


create table items(

	id int(10) auto_increment,
	name varchar(300) not null,
	type int(4) not null,
	ctime int(10) not null,
	remark text,
	fid int(10) not null,
	primary key(id)
)
