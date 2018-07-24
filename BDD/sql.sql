#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: user
#------------------------------------------------------------

CREATE TABLE user(
        id_user       Int  Auto_increment  NOT NULL ,
        civilite_user Varchar (50) ,
        n_user        Varchar (150) ,
        p_user        Varchar (150) ,
        email_user    Varchar (150) ,
        tel_user      Int ,
        login_user    Varchar (50) ,
        mdp_user      Varchar (50) ,
        statut        TinyINT ,
        siret         Int ,
        n_valid       Int
	,CONSTRAINT user_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: evenement
#------------------------------------------------------------

CREATE TABLE evenement(
        id_event          Int  Auto_increment  NOT NULL ,
        titre_event       Varchar (50) NOT NULL ,
        responsable_event Varchar (50) NOT NULL ,
        descriptif_event  Varchar (50) NOT NULL ,
        intitule_event    Varchar (50) NOT NULL
	,CONSTRAINT evenement_PK PRIMARY KEY (id_event)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: lieu
#------------------------------------------------------------

CREATE TABLE lieu(
        id_lieu Int  Auto_increment  NOT NULL ,
        noml    Varchar (50)
	,CONSTRAINT lieu_PK PRIMARY KEY (id_lieu)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: planning
#------------------------------------------------------------

CREATE TABLE planning(
        id_lieu    Int NOT NULL ,
        id_event   Int NOT NULL ,
        date_debut Datetime NOT NULL ,
        date_fin   Datetime NOT NULL
	,CONSTRAINT planning_PK PRIMARY KEY (id_lieu,id_event)

	,CONSTRAINT planning_lieu_FK FOREIGN KEY (id_lieu) REFERENCES lieu(id_lieu)
	,CONSTRAINT planning_evenement0_FK FOREIGN KEY (id_event) REFERENCES evenement(id_event)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: reserver
#------------------------------------------------------------

CREATE TABLE reserver(
        id_event Int NOT NULL ,
        id_user  Int NOT NULL
	,CONSTRAINT reserver_PK PRIMARY KEY (id_event,id_user)

	,CONSTRAINT reserver_evenement_FK FOREIGN KEY (id_event) REFERENCES evenement(id_event)
	,CONSTRAINT reserver_user0_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: propose
#------------------------------------------------------------

CREATE TABLE propose(
        id_event Int NOT NULL ,
        id_user  Int NOT NULL
	,CONSTRAINT propose_PK PRIMARY KEY (id_event,id_user)

	,CONSTRAINT propose_evenement_FK FOREIGN KEY (id_event) REFERENCES evenement(id_event)
	,CONSTRAINT propose_user0_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
)ENGINE=InnoDB;

