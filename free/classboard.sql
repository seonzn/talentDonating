create table review (
   num int not null auto_increment,
   id varchar(15) not null,
   title  varchar(30) not null,
   passwd  varchar(10) not null,
   area varchar(45) not null,
   branch varchar(45) not null,
   level int(11) not null, 
   stnum int(11) not null,
   content varchar(200) not null,
   hit int(11),
   date varchar(45),
   primary key(num)
)DEFAULT CHARSET=utf8 COLLATE utf8_general_ci;

