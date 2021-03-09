create table qna (
   num int not null auto_increment,
   id varchar(15) not null,
   title  varchar(30) not null,
   branch varchar(45) not null,
   content varchar(200) not null,
   hit int(11),
   date varchar(45),
   primary key(num)
);

