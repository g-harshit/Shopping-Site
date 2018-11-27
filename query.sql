create database shirts4mike;
use shirts4mike;
create table product(
id int(11) primary key,
name varchar(225),
img varchar(225),
price decimal(10,2));
insert into product values(101,"Logo Shirt, Red","img/shirts/shirt-101.jpg",18);
insert into product values(102,"Mike the Frog Shirt, Black","img/shirts/shirt-102.jpg",20);
insert into product values(103,"Mike the Frog Shirt, Blue","img/shirts/shirt-103.jpg",20);
insert into product values(104,"Logo Shirt, Green","img/shirts/shirt-104.jpg",18);
insert into product values(105,"Mike the Frog Shirt, Yellow","img/shirts/shirt-105.jpg",25);
insert into product values(106,"Logo Shirt, Gray","img/shirts/shirt-106.jpg",20);
insert into product values(107,"Logo Shirt, Teal","img/shirts/shirt-107.jpg",20);
insert into product values(108,"Mike the Frog Shirt, Orange","img/shirts/shirt-108.jpg",25);
insert into product values(109,"Get Coding Shirt, Gray","img/shirts/shirt-109.jpg",20);
insert into product values(110,"HTML5 Shirt, Orange","img/shirts/shirt-110.jpg",22);
insert into product values(111,"CSS3 Shirt, Gray","img/shirts/shirt-111.jpg",22);
insert into product values(112,"HTML5 Shirt, Blue","img/shirts/shirt-112.jpg",22);
insert into product values(113,"CSS3 Shirt, Black","img/shirts/shirt-113.jpg",22);
insert into product values(114,"PHP Shirt, Yellow","img/shirts/shirt-114.jpg",24);
insert into product values(115,"PHP Shirt, Purple","img/shirts/shirt-115.jpg",24);
insert into product values(116,"PHP Shirt, Green","img/shirts/shirt-116.jpg",24);
insert into product values(117,"Get Coding Shirt, Red","img/shirts/shirt-117.jpg",20);
insert into product values(118,"Mike the Frog Shirt, Purple","img/shirts/shirt-118.jpg",25);
insert into product values(119,"CSS3 Shirt, Purple","img/shirts/shirt-119.jpg",22);
insert into product values(120,"HTML5 Shirt, Red","img/shirts/shirt-120.jpg",22);
insert into product values(121,"Get Coding Shirt, Blue","img/shirts/shirt-121.jpg",20);
insert into product values(122,"PHP Shirt, Gray","img/shirts/shirt-122.jpg",24);
insert into product values(123,"Mike the Frog Shirt, Green","img/shirts/shirt-123.jpg",25);
insert into product values(124,"Logo Shirt, Yellow","img/shirts/shirt-124.jpg",20);
insert into product values(125,"CSS3 Shirt, Blue","img/shirts/shirt-125.jpg",22);
insert into product values(126,"Doctype Shirt, Green","img/shirts/shirt-126.jpg",25);
insert into product values(127,"Logo Shirt, Purple","img/shirts/shirt-127.jpg",20);
insert into product values(128,"Doctype Shirt, Purple","img/shirts/shirt-128.jpg",25);
insert into product values(129,"Get Coding Shirt, Green","img/shirts/shirt-129.jpg",20);
insert into product values(130,"HTML5 Shirt, Teal","img/shirts/shirt-130.jpg",22);
insert into product values(131,"Logo Shirt, Orange","img/shirts/shirt-131.jpg",20);
insert into product values(132,"Mike the Frog Shirt, Red","img/shirts/shirt-132.jpg",25);





use shirts4mike;
create table sizes(
size_id int(11) primary key,
size varchar(225),
orders int(11));
insert into sizes values(1,"small",10);
insert into sizes values(2,"medium",20);
insert into sizes values(3,"large",30);
insert into sizes values(4,"x-large",40);




use shirts4mike;
create table product_sizes(
product_id int(11) not null,
size_id int(11) not null);




use shirts4mike;
create table users(
name varchar(50) not null,
username varchar(50) not null,
email varchar(50) not null,
password varchar(50) not null);
insert into users value("Harshit Gupta","spiddy","gharshit1237@gmail.com","anuj");

