  create table member (
  id    varchar(15) not null,
  pass  varchar(15) not null,
  name  varchar(10) not null,
  birth varchar(10) not null,
  hp    varchar(20) not null,
  area  text,
  subject text,
  intro text,
  primary key(id)
  );