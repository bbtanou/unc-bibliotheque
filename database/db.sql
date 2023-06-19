CREATE user if not exists unc_l2 identified by 'unc_l2';
grant all privileges on bibliotheque.* to  unc_l2;

CREATE DATABASE if NOT EXISTS bibliotheque2 DEFAULT CHARACTER set 'utf8';


/*
	--auteur, lecteur,
    --
*/


 use bibliotheque2;
  create table if not EXISTS auteur(
      id varchar(100) primary key,
      nom varchar(100) not null,
      prenom varchar(100) not null,
      date_naissance date not null,
      nationalite varchar(100) not null,
      bio varchar(255)
  );
  
  CREATE TABLE if not exists lecteur(
      id varchar(100) PRIMARY KEY,
      nom varchar(100) not null,
      prenom varchar(100) not null,
      adresse varchar(255) not null,
      telephone varchar(9) not null,
      email varchar(50),
      date_naissance date not null
  );
  
  CREATE TABLE if not EXISTS categorie(
      id varchar(100) PRIMARY KEY ,
      nom_categorie varchar (100) not null
  );
  
  CREATE TABLE if not EXISTS livre(
      id varchar(100) PRIMARY KEY,
      titre varchar(100) not null,
      date_publication date not null,
      maison_edition varchar(100) not null,
      nombre_exemplaire int not null,
      nombre_page int not null,
      sommaire text not null,
      id_categorie varchar (100) not null,
      FOREIGN KEY(id_categorie) REFERENCES categorie(id)
  );
  
   CREATE TABLE if not EXISTS personnel(
      id varchar(100) PRIMARY KEY,
      nom varchar(100) not null,
      prenom varchar(100) not null,
      telephone varchar(9) not null,
      email varchar(50),
      mot_de_passe varchar(255) not null
  );
  
   CREATE TABLE if not EXISTS type_abonnement(
      id varchar(100) PRIMARY KEY,
      titre_abonnement varchar(50) not null,
      montant decimal not null
  );
  
  CREATE TABLE if not EXISTS abonnement(
      id varchar(100) PRIMARY KEY,
      date_abonnement date not null,
      date_expiration date not null,
      statut varchar(16) default 'actif',
      id_personnel varchar(100) NOT null,
      FOREIGN KEY (id_personnel) REFERENCES personnel(id),
      id_lecteur varchar (100) not null,
      FOREIGN key(id_lecteur) REFERENCES lecteur(id),
      id_type_abonnement varchar(100) not null,
      FOREIGN KEY(id_type_abonnement) REFERENCES type_abonnement(id)
  );
  
  CREATE TABLE if not EXISTS emprunt(
      id varchar(100) PRIMARY KEY,
      date_emprunt date not null,
      date_retour_prevue date not null,
      date_retour date,
      statut varchar(100) DEFAULT 'emprunte',
      id_personnel varchar(100) NOT null,
      FOREIGN KEY (id_personnel) REFERENCES personnel(id),
      id_abonnement varchar(100) not null,
      FOREIGN KEY(id_abonnement) REFERENCES abonnement(id),
      id_livre varchar (100) not null,
      FOREIGN key(id_livre) REFERENCES livre(id)
  );
  
  CREATE TABLE if not EXISTS auteur_livre(
      id_auteur varchar(100) NOT null,
      id_livre varchar (100) not null
  );

 
 CREATE TABLE if not EXISTS images(
      id varchar(100) PRIMARY KEY,
      fichier blob not null,
      proprietaire varchar(100) not null
  );

-- Insertion de données dans la table auteur

insert into auteur(id,nom,prenom,date_naissance,nationalite,bio) values
    ("AUT00001","Diallo","Alpha Oumar","2002-02-21","Guinéenne","Auteur à succès"),
    ("AUT00002","Sow","Alpha Oumar","2001-02-22","Guinéenne","Auteur aux talents inégalables"),
    ("AUT00003","Bah","Boubacar","2002-06-09","Guinéenne","Auteur philosophe"),
    ("AUT00004","Bah","Abdoul Hamid","2003-03-15","Guinéenne","Auteur commerçant"),
    ("AUT00005","Haba","Pepe Prosper","2002-10-14","Guinéenne","Auteur musicien"),
    ("AUT00006","Sacko","Mamady","2002-07-30","Guinéenne","Auteur aux talents cachés"),
    ("AUT00007","Diallo","Elhadj Amadou Oury","2003-07-24","Guinéenne","Auteur revolutionnaire");

insert into lecteur(id,nom,prenom,adresse,telephone,email,date_naissance) values
    ("LECT00001","Diallo","Abdoulaye","Ratoma","623456789","abdoulaye@gmail.com","2004-03-21"),
    ("LECT00002","Bah","Maimouna","Soloprimo","622453238","maimouna@gmail.com","2001-07-24"),
    ("LECT00003","Bangoura","Ibrahima","Gbessia","621567898","ibrahima@gmail.com","2002-07-21"),
    ("LECT00004","Camara","Ousmane","Koloma","620567689","ousmane@gmail.com","2004-03-21"),
    ("LECT00005","Sylla","Bo Mady","kipe","622342312","syllabomady@gmail.com","2003-07-30");

insert into categorie(id, nom_categorie) values
    ("CAT00001","Technologie"),
    ("CAT00002","Litterature"),
    ("CAT00003","Entrepreneuriat"),
    ("CAT00004","Scientifique"),
    ("CAT00005","Culture");

insert into livre(id,titre, date_publication, maison_edition, nombre_exemplaire, nombre_page, sommaire, id_categorie) values
    ("LIV00001","Comment être riche","2022-07-28","Harmathan", 100, 250, "Ce livre montre comment gagner l'argent à partir de rien","CAT00003"),
    ("LIV00002","Apprendre par soi","2023-02-26","Guiness", 100, 300, "Ce livre montre qu'on peut apprendre par soi-même sans venir à l'université","CAT00004"),
    ("LIV00003","Parler peu et écouter beaucoup","2023-01-01","Harmathan", 150, 200, "Ce livre montre l'importance de parler peu et écouter beaucoup","CAT00005"),
    ("LIV00004","Projet oeil d'Afrique","2022-11-5","DAOS édition", 120, 250, "Ce livre montre sur quoi doit se focaliser les africains pour un lendemain meilleur","CAT00002"),
    ("LIV00005","La programmation est un amusement","2023-04-28","Harmathan", 150, 200, "Ce livre montre à quel point la programmation est cool quand on aime","CAT00001");

insert into personnel(id, nom, prenom, telephone, email, mot_de_passe) values
    ("PERS00001","Kamano","Felix","620123456", "kamano@gmail.com","Felix"),
    ("PERS00002","Diallo","Thierno Sadou","622123456", "sadou@gmail.com","Sadou"),
    ("PERS00003","Bah","Kadiatou","625176456", "kadiatou@gmail.com","Kadiatou"),
    ("PERS00004","Bah","Idiatou","627123456", "idiatou@gmail.com","Tiktok"),
    ("PERS00005","Bah","Souleymane","629123456", "souleymane@gmail.com","Souleymane");

insert into type_abonnement(id, titre_abonnement, montant) values
    ("TYPA00001","Semaine", "500 GNF"),
    ("TYPA00002","Mensuel", "1000 GNF"),
    ("TYPA00003","Trimestre", "3000 GNF"),
    ("TYPA00004","Annuel", "12000 GNF"),
    ("TYPA00005","Decenie", "120 000 GNF");

insert into abonnement(id, date_abonnement, date_expiration, id_lecteur, id_type_abonnement) values
    ("ABON00001","2023-01-01","2023-01-07","LECT00001","TYPA00001"),
    ("ABON00002","2023-01-01","2023-02-01","LECT00002","TYPA00002"),
    ("ABON00003","2023-02-01","2023-04-01","LECT00003","TYPA00003"),
    ("ABON00004","2023-06-01","2024-06-01","LECT00004","TYPA00004"),
    ("ABON00005","2023-01-01","2033-01-01","LECT00005","TYPA00005");

insert into emprunt(id, date_emprunt, date_retour_prevue, date_retour, statut, id_personnel, id_abonnement, id_livre) values
    ("EMP00001","2023-01-01","2023-01-07","2023-01-10","inactif","PERS00001","ABON00001","LIV00001"),
    ("EMP00002","2023-01-01","2023-01-15","2023-01-17","actif","PERS00002","ABON00002","LIV00002"),
    ("EMP00003","2023-01-01","2023-02-01","2023-01-31","actif","PERS00003","ABON00003","LIV00003"),
    ("EMP00004","2023-01-01","2023-03-01","2024-03-10","inactif","PERS00004","ABON00004","LIV00004"),
    ("EMP00005","2023-01-01","2023-04-01","2023-05-10","actif","PERS00005","ABON00005","LIV00005");

insert into auteur_livre(id_auteur, id_livre) values
    ("AUT00001","LIV00003"),
    ("AUT00002","LIV00002"),
    ("AUT00001","LIV00002"),
    ("AUT00003","LIV00001"),
    ("AUT00004","LIV00003"),
    ("AUT00002","LIV00005"),
    ("AUT00007","LIV00004"),
    ("AUT00005","LIV00001"),
    ("AUT00006","LIV00001");