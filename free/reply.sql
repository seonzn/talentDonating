create table reviewreply(
  num int not null auto_increment,
  id varchar(45) not null,
  content varchar(45) not null,
  linkno int(11) not null,
  date varchar(45) not null,
  primary key(num)
)DEFAULT CHARSET=utf8 COLLATE utf8_general_ci;
