Drop database if exists portfolio;
Create database portfolio;
Use portfolio;

Create table user (
	id_u int(11) not null auto_increment,
	pseudo varchar(10),
	mdp varchar(255),
	lvl int not null default 0,
	primary key (id_u)
) ;


Create table categorie (
	id_cat int(11) not null auto_increment,
	libelle varchar(50),
	primary key (id_cat)
);

Create table projets (
	id_p int(11) not null auto_increment,
	titre varchar(50),
	description text,
	lien_local varchar(255),
	lien_git varchar(255),
	primary key (id_p)
) ;

Create table images (
	id_img int(11) not null auto_increment,
	lien varchar(255),
	primary key (id_img)
); 

Create table competences (
	id_comp int(11) not null auto_increment,
	libelle varchar(50),
	primary key (id_comp)
);