DROP DATABASE IF EXISTS ienac15_;

CREATE DATABASE ienac15_;
USE ienac15_;


CREATE TABLE Zone
(
  id_zone INT NOT NULL auto_increment,
  nom_zone CHAR(20),
  PRIMARY KEY (id_zone)
)ENGINE=INNODB;


CREATE TABLE Emplacement
(
  id_emplacement INT NOT NULL auto_increment,
  id_zone INT,
  PRIMARY KEY (id_emplacement),
  FOREIGN KEY (id_zone) REFERENCES Zone(id_zone)
)ENGINE=INNODB;


CREATE TABLE Client
(
  plaque CHAR(20) NOT NULL,
  type_vehicule CHAR(20),
  emplacement_choisi INT,
  emplacement_attribue INT,
  PRIMARY KEY (plaque),
  FOREIGN KEY (emplacement_choisi) REFERENCES  Emplacement(id_emplacement),
  FOREIGN KEY (emplacement_attribue) REFERENCES Emplacement(id_emplacement)
)ENGINE=INNODB;
