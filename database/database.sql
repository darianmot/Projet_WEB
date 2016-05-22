DROP DATABASE IF EXISTS IENAC15_aeroport_C;
CREATE DATABASE IENAC15_aeroport_C;
USE IENAC15_aeroport_C;

CREATE TABLE Tarif
(
  id_tarif INT,
  prix char(50),
  PRIMARY KEY (id_tarif)
)ENGINE=INNODB;

CREATE TABLE Zone
(
  id_zone INT,
  id_tarif INT,
  PRIMARY KEY (id_zone),
  FOREIGN KEY (id_tarif) REFERENCES Tarif(id_tarif)
)ENGINE=INNODB;


CREATE TABLE Utilisateur
(
  id_utilisateur CHAR(20) NOT NULL,
  password CHAR(20),
  nom CHAR(20),
  prenom CHAR(20),
  mail CHAR(50),
  PRIMARY KEY (id_utilisateur)
)ENGINE=INNODB;


CREATE TABLE ClientWeb
(
  id_utilisateur CHAR(20) NOT NULL,
  Solde INT,
  PRIMARY KEY(id_utilisateur),
  FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur)
)ENGINE=INNODB;


CREATE TABLE Admin
(
  id_utilisateur CHAR(20) NOT NULL,
  PRIMARY KEY(id_utilisateur),
  FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur)
)ENGINE=INNODB;


CREATE TABLE TypeVehicule
(
  type CHAR(20),
  PRIMARY KEY(type)
)ENGINE=INNODB;


CREATE TABLE Place
(
  id_place INT NOT NULL auto_increment,
  id_zone INT,
  type_vehicule CHAR(20),
  PRIMARY KEY (id_place),
  FOREIGN KEY (id_zone) REFERENCES Zone(id_zone),
  FOREIGN KEY (type_vehicule) REFERENCES TypeVehicule(type)
)ENGINE=INNODB;


CREATE TABLE Vehicule
(
  plaque CHAR(20) NOT NULL,
  type_vehicule CHAR(20),
  id_clientweb CHAR(20) DEFAULT NULL,
  PRIMARY KEY (plaque),
  FOREIGN KEY (id_clientweb) REFERENCES ClientWeb(id_utilisateur),
  FOREIGN KEY (type_vehicule) REFERENCES TypeVehicule(type)
)ENGINE=INNODB;


CREATE TABLE Stationnement
(
  id_stationnement INT NOT NULL auto_increment,
  plaque CHAR(20) NOT NULL,
  id_place INT NOT NULL,
  date_debut DATETIME,
  date_fin DATETIME,
  etat CHAR(20),
  id_facture CHAR(20),
  PRIMARY KEY (id_stationnement),
  FOREIGN KEY (plaque) REFERENCES Vehicule(plaque),
  FOREIGN KEY (id_place) REFERENCES Place(id_place)
)ENGINE=INNODB;


CREATE TABLE Facture
(
  id_facture CHAR(20) NOT NULL,
  prix INT,
  penalite INT,
  id_stationnement INT,
  PRIMARY KEY (id_facture),
  FOREIGN KEY (id_stationnement) REFERENCES Stationnement(id_stationnement)
)ENGINE=INNODB;



INSERT INTO `Tarif` VALUES ('1', '1*h');
INSERT INTO `Tarif` VALUES ('2', '1*h');
INSERT INTO `Tarif` VALUES ('3', '1*h');
INSERT INTO `Zone` VALUES ('1', '1');
INSERT INTO `Zone` VALUES ('2', '2');
INSERT INTO `Zone` VALUES ('3', '3');
INSERT INTO `TypeVehicule` VALUES ('voiture'),('moto'),('handicape');
INSERT INTO `Utilisateur` VALUES('admin','admin','admin','admin','admin')
