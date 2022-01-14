#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

CREATE DATABASE Alumini;
USE Alumini;
#------------------------------------------------------------
# Table: admin
#------------------------------------------------------------


CREATE TABLE admin(
        id        Int  Auto_increment  NOT NULL ,
        lastname  Varchar (50) NOT NULL ,
        firstname Varchar (50) NOT NULL ,
        email     Varchar (200) NOT NULL ,
        password  Varchar (50) NOT NULL
	,CONSTRAINT admin_PK PRIMARY KEY (id)
)ENGINE=InnoDB;

INSERT INTO admin(lastname,firstname,email, password)
        VALUES('Hughes', 'Antoine', 'hughes.antoine@hotmail.com', 'antoine' );



#------------------------------------------------------------
# Table: profils
#------------------------------------------------------------

CREATE TABLE profils(
        id         Int  Auto_increment  NOT NULL ,
        lastname   Varchar (50) NOT NULL ,
        firstname  Varchar (50) NOT NULL ,
        alias      Varchar (50) NOT NULL ,
        email      Varchar (200) NOT NULL ,
        password   Varchar (60) NOT NULL ,
        campus     Varchar (50) NOT NULL ,
        promo      Varchar (50) NOT NULL ,
        date_start Date NOT NULL ,
        date_end   Date NOT NULL ,
        github     Varchar (50) NOT NULL ,
        photo      Varchar (200) NOT NULL ,
        comment    Text NOT NULL
	,CONSTRAINT profil_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


INSERT INTO profils(lastname,firstname,alias, email, password, campus, promo,date_start,date_end,github,photo,comment)
        VALUES('Delime-Codrin', 'Kévin', 'Kekette', 'delime-codrinkevin@hotmail.fr',  'kevin','campus', 'promo', '2021-11-26', '2022-02-07','delim001', '<a href="./assets/img/photo_delime-codrin_kevin.jpg"></a>', 'Mais quelle con ce gars!!!'),
        ('Villate', 'Laurent', 'Le_prof', 'villate.laurent@hotmail.fr', 'laurent', 'campus', 'promo', '2021-11-26', '2022-02-07','vill001', '<a href="./assets/img/photo_villate_laurent.jpg"></a>', 'Le professionnel'),
        ('Binyoma', 'Innocent', 'G_pas_idée', 'binyoma.innocent@hotmail.fr', 'innocent', 'campus', 'promo', '2021-11-26', '2022-02-07','bin001', '<a href="./assets/img/photo_binyoma_innocent.jpg"></a>', 'Il a attrapé le COVID');

#------------------------------------------------------------
# Table: attente
#------------------------------------------------------------

CREATE TABLE attente(
        id         Int  Auto_increment  NOT NULL ,
        lastname   Varchar (50) ,
        firstname  Varchar (50) ,
        alias      Varchar (50) ,
        email      Varchar (200) ,
        password   Varchar (60) ,
        campus     Varchar (50) ,
        promo      Varchar (50) ,
        date_start Date ,
        date_end   Date ,
        github     Varchar (50) ,
        photo      Varchar (200) ,
        comment    Text ,
        id_profil  Int 
	,CONSTRAINT attente_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


INSERT INTO attente(alias, id_profil)
        VALUES('delim001','1');

INSERT INTO attente(lastname,firstname,alias, email, password, campus, promo,date_start,date_end,github,photo,comment, id_profil)
        VALUES('Quintin', 'Kévin', 'quitin', 'quintinkevin@hotmail.fr',  'kevin','Amiens', 'promo', '2021-11-26', '2022-02-07','quintin', '<a href="./assets/img/photo_delime-codrin_kevin.jpg"></a>', 'à demander', null),
        ('Kessous', 'Jeremy', 'kjeremy', 'kessous.jeremy@hotmail.fr', 'laurent', 'Amiens', 'promo', '2021-11-26', '2022-02-07','kessous', '<a href="./assets/img/photo_villate_laurent.jpg"></a>', 'quitin', null);

INSERT INTO `profils` (`id`, `lastname`, `firstname`, `alias`, `email`, `password`, `campus`, `promo`, `date_start`, `date_end`, `github`, `photo`, `comment`) VALUES
(1, 'Dupont', 'Julie', 'julie2021', 'julie@gmail.com', 'juju', 'Amiens', 'CDA', '2021-11-26', '2022-02-07', 'julied001', 'julie.jpeg', 'Julie est passionné de jardinage.'),
(2, 'Villate', 'Laurent', 'Le_prof', 'villate.laurent@hotmail.fr', 'laurent', 'Le Havre', 'DWWM', '2021-11-26', '2022-02-07', 'vill001', 'laurent.jpeg', 'Le professionnel'),
(3, 'Binyoma', 'Innocent', 'G_pas_idée', 'binyoma.innocent@hotmail.fr', 'innocent', 'Amiens', 'CDA', '2021-11-26', '2022-02-07', 'bin001', 'innocent.jpeg', 'Il a attrapé le COVID'),
(4, 'Durant', 'Julien', 'julie2021', 'julie@gmail.com', 'juju', 'Versailles', 'CDA', '2021-11-26', '2022-02-07', 'julied001', 'julien.jpeg', 'Julien est passionné de code.'),
(5, 'Toto', 'Titi', 'titi2021', 'titi@gmail.com', 'juju', 'Le Havre', 'CDA', '2021-11-26', '2022-02-07', 'titicodfe', 'titi.jpeg', 'Titi est passionné de code.');

