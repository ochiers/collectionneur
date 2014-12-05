/* CREATE DATABASE IF NOT EXISTS Collection;*/

CREATE TABLE IF NOT EXISTS Personne (
	nomU VARCHAR(30),
	prenom VARCHAR(30),
	num_user INT,
    PRIMARY KEY (nomU,prenom)
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Item (
	nomI VARCHAR(30),
	num_item INT,
    PRIMARY KEY (num_item)
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Groupe (
	mot_clef VARCHAR(300),
	categorie VARCHAR(300),
	item VARCHAR(300),
	num_group INT,
	nomG VARCHAR(30),
    PRIMARY KEY (nomG)
)ENGINE = INNODB;

CREATE TABLE IF NOT EXISTS Abonnement (
	num_user INT,
	num_group INT,
	PRIMARY KEY (num_user,num_group)/*,
	FOREIGN KEY (num_user) REFERENCES Personne(nomG),
	FOREIGN KEY (num_group) REFERENCES Groupe(num_group)*/
)ENGINE=InnoDB;
	