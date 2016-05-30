DROP DATABASE IF EXISTS IENAC15_parking_C;
CREATE DATABASE IENAC15_parking_C;
USE IENAC15_parking_C;

/*Tarif*/
CREATE TABLE Tarif
(
  id_tarif INT,
  prix char(50),
  PRIMARY KEY (id_tarif)
)ENGINE=INNODB;

INSERT INTO `Tarif` (`id_tarif`, `prix`) VALUES
(1, '2*h'),
(2, '10+1*h'),
(3, '70');

/*Zone*/
CREATE TABLE Zone
(
  id_zone INT,
  id_tarif INT,
  PRIMARY KEY (id_zone),
  FOREIGN KEY (id_tarif) REFERENCES Tarif(id_tarif)
)ENGINE=INNODB;

INSERT INTO `Zone` (`id_zone`, `id_tarif`) VALUES
(0,1),
(1, 1),
(2, 2),
(3, 3);

CREATE TABLE Utilisateur
(
  id_utilisateur CHAR(20) NOT NULL,
  password CHAR(20),
  nom CHAR(20),
  prenom CHAR(20),
  mail CHAR(50),
  PRIMARY KEY (id_utilisateur)
)ENGINE=INNODB;

INSERT INTO `Utilisateur` (`id_utilisateur`, `password`, `nom`, `prenom`, `mail`) VALUES
('admin', 'admin', 'admin', 'admin', 'admin');

CREATE TABLE ClientWeb
(
  id_utilisateur CHAR(20) NOT NULL,
  solde INT,
  PRIMARY KEY(id_utilisateur),
  FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur)
)ENGINE=INNODB;


CREATE TABLE Admin
(
  id_utilisateur CHAR(20) NOT NULL,
  PRIMARY KEY(id_utilisateur),
  FOREIGN KEY(id_utilisateur) REFERENCES Utilisateur(id_utilisateur)
)ENGINE=INNODB;
INSERT INTO `Admin` (`id_utilisateur`) VALUES ('admin');


CREATE TABLE TypeVehicule
(
  type CHAR(20),
  PRIMARY KEY(type)
)ENGINE=INNODB;


INSERT INTO `TypeVehicule` (`type`) VALUES
('handicape'),
('moto'),
('voiture');


CREATE TABLE Place
(
  id_place INT NOT NULL auto_increment,
  id_zone INT,
  type_vehicule CHAR(20),
  PRIMARY KEY (id_place),
  FOREIGN KEY (id_zone) REFERENCES Zone(id_zone),
  FOREIGN KEY (type_vehicule) REFERENCES TypeVehicule(type)
)ENGINE=INNODB;

INSERT INTO `Place` (`id_place`, `id_zone`, `type_vehicule`) VALUES
(1, 1, 'handicape'),
(2, 1, 'handicape'),
(3, 1, 'handicape'),
(4, 1, 'handicape'),
(5, 1, 'handicape'),
(6, 1, 'handicape'),
(7, 1, 'handicape'),
(8, 1, 'handicape'),
(9, 1, 'handicape'),
(10, 1, 'handicape'),
(11, 1, 'moto'),
(12, 1, 'moto'),
(13, 1, 'moto'),
(14, 1, 'moto'),
(15, 1, 'moto'),
(16, 1, 'moto'),
(17, 1, 'moto'),
(18, 1, 'moto'),
(19, 1, 'moto'),
(20, 1, 'moto'),
(21, 1, 'moto'),
(22, 1, 'moto'),
(23, 1, 'moto'),
(24, 1, 'moto'),
(25, 1, 'moto'),
(26, 1, 'moto'),
(27, 1, 'moto'),
(28, 1, 'moto'),
(29, 1, 'moto'),
(30, 1, 'moto'),
(31, 1, 'voiture'),
(32, 1, 'voiture'),
(33, 1, 'voiture'),
(34, 1, 'voiture'),
(35, 1, 'voiture'),
(36, 1, 'voiture'),
(37, 1, 'voiture'),
(38, 1, 'voiture'),
(39, 1, 'voiture'),
(40, 1, 'voiture'),
(41, 1, 'voiture'),
(42, 1, 'voiture'),
(43, 1, 'voiture'),
(44, 1, 'voiture'),
(45, 1, 'voiture'),
(46, 1, 'voiture'),
(47, 1, 'voiture'),
(48, 1, 'voiture'),
(49, 1, 'voiture'),
(50, 1, 'voiture'),
(51, 1, 'voiture'),
(52, 1, 'voiture'),
(53, 1, 'voiture'),
(54, 1, 'voiture'),
(55, 1, 'voiture'),
(56, 1, 'voiture'),
(57, 1, 'voiture'),
(58, 1, 'voiture'),
(59, 1, 'voiture'),
(60, 1, 'voiture'),
(61, 1, 'voiture'),
(62, 1, 'voiture'),
(63, 1, 'voiture'),
(64, 1, 'voiture'),
(65, 1, 'voiture'),
(66, 1, 'voiture'),
(67, 1, 'voiture'),
(68, 1, 'voiture'),
(69, 1, 'voiture'),
(70, 1, 'voiture'),
(71, 1, 'voiture'),
(72, 1, 'voiture'),
(73, 1, 'voiture'),
(74, 1, 'voiture'),
(75, 1, 'voiture'),
(76, 1, 'voiture'),
(77, 1, 'voiture'),
(78, 1, 'voiture'),
(79, 1, 'voiture'),
(80, 1, 'voiture'),
(81, 2, 'handicape'),
(82, 2, 'handicape'),
(83, 2, 'handicape'),
(84, 2, 'handicape'),
(85, 2, 'handicape'),
(86, 2, 'handicape'),
(87, 2, 'handicape'),
(88, 2, 'handicape'),
(89, 2, 'handicape'),
(90, 2, 'handicape'),
(91, 2, 'moto'),
(92, 2, 'moto'),
(93, 2, 'moto'),
(94, 2, 'moto'),
(95, 2, 'moto'),
(96, 2, 'voiture'),
(97, 2, 'voiture'),
(98, 2, 'voiture'),
(99, 2, 'voiture'),
(100, 2, 'voiture'),
(101, 2, 'voiture'),
(102, 2, 'voiture'),
(103, 2, 'voiture'),
(104, 2, 'voiture'),
(105, 2, 'voiture'),
(106, 2, 'voiture'),
(107, 2, 'voiture'),
(108, 2, 'voiture'),
(109, 2, 'voiture'),
(110, 2, 'voiture'),
(111, 3, 'handicape'),
(112, 1, 'moto'),
(113, 1, 'moto'),
(114, 1, 'moto'),
(115, 1, 'moto'),
(116, 1, 'moto'),
(117, 1, 'moto'),
(118, 1, 'moto'),
(119, 1, 'moto'),
(120, 1, 'moto'),
(121, 1, 'moto'),
(122, 1, 'moto'),
(123, 1, 'moto'),
(124, 1, 'moto'),
(125, 1, 'moto'),
(126, 1, 'moto'),
(127, 1, 'voiture'),
(128, 1, 'voiture'),
(129, 1, 'voiture'),
(130, 1, 'voiture'),
(131, 1, 'voiture'),
(132, 1, 'voiture'),
(133, 1, 'voiture'),
(134, 1, 'voiture'),
(135, 1, 'voiture'),
(136, 1, 'voiture');


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
  PRIMARY KEY (id_stationnement),
  FOREIGN KEY (plaque) REFERENCES Vehicule(plaque),
  FOREIGN KEY (id_place) REFERENCES Place(id_place)
)ENGINE=INNODB;


CREATE TABLE Facture
(
  id_facture INT NOT NULL auto_increment,
  type_facture CHAR(20),
  prix INT,
  id_stationnement INT,
  PRIMARY KEY (id_facture),
  FOREIGN KEY (id_stationnement) REFERENCES Stationnement(id_stationnement)
)ENGINE=INNODB;
