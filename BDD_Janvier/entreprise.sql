#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

DROP DATABASE IF EXISTS entreprise;

CREATE DATABASE IF NOT EXISTS entreprise;

USE entreprise;

#------------------------------------------------------------
# Table: EMPLOYE
#------------------------------------------------------------

CREATE TABLE EMPLOYE(
        idEmploye Int  Auto_increment  NOT NULL ,
        nom             Varchar (50) NOT NULL ,
        prenom          Varchar (25) NOT NULL ,
        sexe            Varchar (50) NOT NULL ,
        department      Varchar (50) NOT NULL ,
        salary          Varchar (50) NOT NULL ,
        datecontrat     Datetime NOT NULL 

	,CONSTRAINT EMPLOYE_PK PRIMARY KEY (idEmploye)
)ENGINE=InnoDB;