Utilisateur : ID INT, Nom VARCHAR(50), Prenom VARCHAR(50), Mot_de_passe VARCHAR(50), Admin LOGICAL;

Article : ID INT, Catégorie VARCHAR(50), Publier LOGICAL, Date_ DATETIME;

Commentaire : ID INT, #ID_Utilisateur, #ID_Article;

Tag : ID INT, #ID_Article ;
