DROP DATABASE IF EXISTS ienac15_;

CREATE DATABASE ienac15_;
USE ienac15_;


CREATE TABLE Zone
(
  id_zone INT NOT NULL,
  nom_zone CHAR(20),
  capacite INT,
  PRIMARY KEY (id_zone)
)ENGINE=INNODB;


CREATE TABLE TypeEmplacement
(
  type CHAR(20),
  PRIMARY KEY(type)
)ENGINE=INNODB;


CREATE TABLE Emplacement
(
  id_emplacement INT NOT NULL auto_increment,
  id_zone INT,
  type_emplacement CHAR(20),
  occupe CHAR(20) DEFAULT NULL,
  PRIMARY KEY (id_emplacement),
  FOREIGN KEY (id_zone) REFERENCES Zone(id_zone),
  FOREIGN KEY (type_emplacement) REFERENCES TypeEmplacement(type)
)ENGINE=INNODB;


CREATE TABLE Client
(
  plaque CHAR(20) NOT NULL,
  type_vehicule CHAR(20),
  date_entree DATETIME,
  reservation CHAR(20),
  zone_choisie INT,
  PRIMARY KEY (plaque),
  FOREIGN KEY (zone_choisie) REFERENCES Zone(id_zone)
)ENGINE=INNODB;

CREATE TABLE PlaceOccupee
(
  id_client CHAR(20) NOT NULL,
  id_attribution INT NOT NULL,
  id_choisi INT NOT NULL,
  PRIMARY KEY (id_client,id_attribution),
  FOREIGN KEY (id_client) REFERENCES Client(plaque),
  FOREIGN KEY (id_attribution) REFERENCES Emplacement(id_emplacement),
  FOREIGN KEY (id_choisi) REFERENCES Emplacement(id_emplacement)
)ENGINE=INNODB;

CREATE TABLE Facture
(
  id_facture CHAR(20) NOT NULL,
  prix_tot INT,
  date DATETIME,
  penalite INT,
  plaque CHAR(20),
  PRIMARY KEY (id_facture),
  FOREIGN KEY (plaque) REFERENCES Client(plaque)
)ENGINE=INNODB;


INSERT INTO `ienac15_`.`Zone` (`id_zone`, `nom_zone`, `capacite`) VALUES ('1', 'zone1', '100');
INSERT INTO `ienac15_`.`Zone` (`id_zone`, `nom_zone`, `capacite`) VALUES ('2', 'zone2', '200');
INSERT INTO `ienac15_`.`Zone` (`id_zone`, `nom_zone`, `capacite`) VALUES ('3', 'zone3', '300');
INSERT INTO `ienac15_`.`TypeEmplacement` VALUES ('voiture'),('moto'),('handicape');

