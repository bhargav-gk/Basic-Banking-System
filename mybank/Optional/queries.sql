

$sql1="create database skyfall";

$sql2="create table users(id int(3) unsigned auto_increment primary key,
        name varchar(20) not null,email varchar(20) ,
        balance int(10),
        joindate timestamp default current_timestamp on update current_timestamp )";

$sql3="create table transactions(tid int(3) unsigned auto_increment primary key,
        sender varchar(20) not null,
        receiver varchar(20) ,
        amount int(10),
        tdatetime timestamp default current_timestamp on update current_timestamp )";