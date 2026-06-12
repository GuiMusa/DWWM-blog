Utilisateur = (ID INT, Nom VARCHAR(50), 
Prenom VARCHAR(50), Mot_de_passe VARCHAR(50), 
Admin LOGICAL);

Article = (ID INT, Catégorie VARCHAR(50), Tag VARCHAR(50), Date_ DATETIME);

Commentaire = (ID INT, #ID_Utlisateur, #ID_Article);
