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


CREATE TABLE Emplacement
(
  id_emplacement INT NOT NULL,
  id_zone INT,
  occupe CHAR(20) DEFAULT NULL,
  PRIMARY KEY (id_emplacement),
  FOREIGN KEY (id_zone) REFERENCES Zone(id_zone)
)ENGINE=INNODB;


CREATE TABLE Client
(
  plaque CHAR(20) NOT NULL,
  type_vehicule CHAR(20),
  date_entree DATETIME,
  reservation CHAR(20),
  zone_choisi INT,
  PRIMARY KEY (plaque),
  FOREIGN KEY (zone_choisi) REFERENCES Zone(id_zone)
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

