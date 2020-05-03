drop database if exists inventaire_jeybox;
create database inventaire_jeybox;
use inventaire_jeybox;

/* ===================================
             TABLE CREATION
   ===================================*/

create table permission (
	id_permission int primary key auto_increment,
	nom VARCHAR(50)
);


create table utilisateur (
	nom_utilisateur VARCHAR(50) primary key not null,
	mot_de_passe VARCHAR(50) not null,
	prenom VARCHAR(50) not null,
	nom VARCHAR(50) not null,
	courriel VARCHAR(255),
	telephone VARCHAR(14)not null,
	date_naissance DATE not null,

	id_permission int not null,
	constraint `fk_permission_utilisateur`
		foreign key (id_permission) references permission (id_permission)
		on delete cascade
		on update restrict
);


create table contact_urgence (
	id_contact_urgence int primary key auto_increment,
	prenom VARCHAR(50) not null,
	nom VARCHAR(50) not null,
	relation VARCHAR(50),
	telephone VARCHAR(14)not null,

	nom_utilisateur VARCHAR(50) not null,
	constraint `fk_utilisateur_contact-urgence`
		foreign key (nom_utilisateur) references utilisateur (nom_utilisateur)
		on delete cascade
		on update restrict
);


create table categorie_article (
	id_categorie int primary key auto_increment,
	nom varchar(50),
	description varchar(255)
);


create table sous_categorie_article (
	id_sous_categorie int primary key auto_increment,
	nom varchar(50),
	description varchar(255),

	id_categorie int not null,
	constraint `fk_categorie_sous-categorie`
		foreign key (id_categorie) references categorie_article (id_categorie)
		on delete cascade
		on update restrict
);


create table etat (
	id_etat int primary key auto_increment,
	nom varchar(50),
	description varchar(255)
);


create table article (
	id_article int primary key auto_increment,
	nom varchar(50) not null,
	fiche_url varchar(255) not null,

	id_sous_categorie int not null,
	constraint `fk_sous-categorie_article`
		foreign key (id_sous_categorie) references sous_categorie_article (id_sous_categorie)
		on delete cascade
		on update restrict,

	id_etat int not null,
	constraint `fk_etat_article`
		foreign key (id_etat) references etat (id_etat)
		on delete cascade
		on update restrict
);


create table reference (
	id_reference int primary key auto_increment,
	nom varchar(50),
	url varchar(500),
	description varchar(255),

	id_article int not null,
	constraint `fk_article_reference`
		foreign key (id_article) references article (id_article)
		on delete cascade
		on update restrict
);


create table reservation (
	id_reservation int primary key auto_increment,
	date_prevue date,
	date_prise_possession date,
	date_retour_prevue date,
	date_retour_effectif date,
	commentaire VARCHAR(255),

	nom_utilisateur VARCHAR(50) not null,
	constraint `fk_utilisateur_reservation`
		foreign key (nom_utilisateur) references utilisateur (nom_utilisateur)
		on delete cascade
		on update restrict,

	id_article int not null,
	constraint `fk_article_reservation`
		foreign key (id_article) references article (id_article)
		on delete cascade
		on update restrict
);


/* ===================================
             DATA CREATION
   ===================================*/


insert into etat (nom, description )
values
(
	"Prêt",
	"Article prêt pour être prêté"
);


insert into categorie_article (nom, description)
values
(
	"Composante électronique",
	"Objets électroniques variés pouvant servir à équiper un système d'autres sous-systèmes."
),
(
	"Ordinateur",
	"Appareils contenant les sous-systèmes nécessaires pour supporter un système d'exploitation."
);


insert into sous_categorie_article (nom, description, id_categorie)
values
(
	"Diode électroluminescente",
	"Un dispositif opto-électronique capable d’émettre de la lumière lorsqu’il est parcouru par un courant électrique.",
	(select id_categorie from categorie_article where nom = "Composante électronique")
),
(
	"Accumulateur électrique",
	"Un dispositif destiné à stocker l'énergie électrique afin de pouvoir l'utiliser ultérieurement.",
	(select id_categorie from categorie_article where nom = "Composante électronique")
),
(
	"Micro-Ordinateur",
	"Ordinateur de dimension réduite dont l'unité centrale est constituée d'un ou plusieurs microprocesseurs.",
	(select id_categorie from categorie_article where nom = "Ordinateur")
);


insert into permission (nom)
values
(
	"Administrateur"
),
(
	"Employé"
),
(
	"Client"
);


insert into utilisateur (nom_utilisateur , mot_de_passe , nom , prenom , courriel , telephone , date_naissance , id_permission)
values
(
	"jeadmin",
	"admin",
	"Jean",
	"Admin",
	"jean.admin@courriel.cam",
	"(999)999-9999",
	"1995-05-25",
	(select id_permission from permission where nom = "Administrateur")
),
(
	"jeemploye",
	"employe",
	"Jean",
	"Employé",
	"jean.employe@courriel.cam",
	"(999)999-9999",
	"2000-12-12",
	(select id_permission from permission where nom = "Employé")
),
(
	"jeclient",
	"client",
	"Jean",
	"Client",
	"jean.client@courriel.cam",
	"(999)999-9999",
	"2004-09-12",
	(select id_permission from permission where nom = "Client")
);


insert into contact_urgence (nom, prenom, relation, telephone, nom_utilisateur)
values
(
	"Jean",
	"Urgent",
	"jeanteté",
	"(999)999-jean",
	(select nom_utilisateur from utilisateur where nom_utilisateur = "jeclient")
);


insert into article (nom, fiche_url, id_sous_categorie, id_etat)
values
(
	"Raspberry Pi 3 - Modèle B",
	"lien_vers_la_fiche_local.pdf",
	(select id_sous_categorie from sous_categorie_article where nom = "Micro-Ordinateur"),
	(select id_etat from etat where nom = "Prêt")
);


insert into reference (nom, url, description, id_article)
values
(
	"installation_raspbian_pi3",
	"https://www.youtube.com/watch?v=iH3MxjZkh4U",
	"Lien vers une vidéo youtube pour installer Raspbian sur un raspberry pi 3",
	(select id_article from article where nom = "Raspberry Pi 3 - Modèle B")
);


insert into reservation (date_prevue , date_prise_possession , date_retour_prevue , date_retour_effectif, commentaire , nom_utilisateur , id_article )
values
(
	"2021-01-28",
	"1900-01-01",
	"1900-01-01",
	"1900-01-01",
	"Aucun",
	(select nom_utilisateur from utilisateur where nom = "Jean" and prenom = "Client"),
	(select id_article from article where nom = "Raspberry Pi 3 - Modèle B")
);
