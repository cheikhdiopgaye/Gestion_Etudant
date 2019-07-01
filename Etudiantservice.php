<?php
          

    function connexion() {
        try {
                $bdd = new PDO('mysql:host=localhost;dbname=Gestion_etudiant', 'root', 'cheikh');
                $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $bdd->exec("SET CHARACTER SET utf8");
                $bdd->exec("SET NAMES utf8");
                //echo "Connexion reussie";
                return $bdd;
            }
            catch(PDOException $e)
             {
                die('<h3>Erreur de connexion!</h3>');
            }
           
    } 
    
    class Etudiantservice 
    {

        public function add(Etudiant $unetudiant)
        {
            
            $const=Connexion();
            //Ajout des parametres de l'étudiant à ajouter dans la table Etudiant du BDD
            $sql=$const->prepare("INSERT INTO  Etudiants (Matricule,Nom,Prenom,Telephone,Email)  
            value (:matricule,:nom,:prenom,:telephone,:email)"); 
                $sql->bindValue(':matricule', $unetudiant->getMatricule());
                $sql->bindValue(':nom', $unetudiant->getNom());
                $sql->bindValue(':prenom', $unetudiant->getPrenom());
                $sql->bindValue(':telephone', $unetudiant->getTelephone());
                $sql->bindValue(':email', $unetudiant->getEmail());
            $validre=$sql->execute();

            //L'identifiant du dernier insertion de la base de donnée
            $maq=$this->$const->query("SELECT MAX(id_Etudiant) as id FROM Etudiants");
                while($insert=$maq->fetch()){
                    $id=$insert["id"];
                }

             //Insertion du type de bourse dans la table Boursiers du BDD 
            if (get_class($unetudiant)=="Boursier")
            {
                $sql=$this->bdd->prepare("INSERT INTO Boursiers (id_Etudiant,id_type) 
                VALUES (:idetudiant,:typebourse)");
                    $sql->bindValue(':idetudiant', $id);
                    $sql->bindValue(': typebourse',  $unetudiant->getTypeborsse());
                $sql=execute();
            }

             //Insertion de l'adresse de l'etudiant  dans la table Nonboursiers du BDD
            else if(get_class($unetudiant)=="Nonboursier")
            {
                $sql=$const->prepare("INSERT INTO Nonboursiers (id_Etudiant,Adresse) value (:idetudiant,:adresse)");
                    $sql->bindValue(':idetudiant', $id);
                    $sql->bindValue(':adresse', $unetudiant->getAdresse());
                $val=$sql->execute();
            }

            //ajout d'un etudiant logé
            else if(get_class($unetudiant)=="Loger")
            {
                //Insertion du type de bourse dans la table Boursiers du BDD

                $sql=$const->prepare("INSERT INTO Boursiers (id_Etudiant,id_type) value (:idetudiant,:typebourse)");
                    $sql->bindValue(':idetudiant', $id);
                    $sql->bindValue(':typebourse', $unetudiant->getTypebourse());
                $bours=$sql->execute();
                //Insertion du noméro chambre dans la table chambre du BDD

                $sql=$const->prepare("INSERT INTO Chambres (id_boursier,id_chambre) value (:idboursier,:idchambre)");
                    $sql->bindValue(':idboursier', $unetudiant->getIdboursier());
                    $sql->bindValue(':idchambre', $unetudiant->getIdchambre());
                $log=$sql->execute();
               
            }

        }


         //Recherche d'un étudiant via son matricule
         public function find($matricule)
         {
            $const=Connexion();
             $matricule = (int) $matricule;
             $q =$const->query("SELECT * FROM etudiant WHERE matricule =".$matricule);            
             return $q->fetch(PDO::FETCH_ASSOC);          
         }
         //Affiche tous les étudiants de notre base
         public function findAll()
         {
            $const=Connexion();
             $sql =$const->query('SELECT * FROM Etudiants');
             return $sql;
         }
 
         //On recherche un etudiant boursier c'est pourquoi on fait une requête avec jointure de la table boursier
         public function findBoursier($matricule)
         {
            $const=Connexion();
             $sql = $this->$const->query("SELECT Nom,Prenom,Telephone,Email
                                     FROM Etudiants 
                                     INNER JOIN boursiers  
                                     ON Etudiants.id_etudiant = Boursiers.id_boursiers 
                                     WHERE Etudiants.Matricule=".$matricule);
             $donnees = $sql->fetch(PDO::FETCH_ASSOC);
             return $donnees;
         }
         
         public function findAllnonbousier()
         {
            $const=Connexion();
             $sql=$const->query('SELECT  Matricule,Nom,Prenom,Telephone,Email,Adresse
                                     FROM Etudiants INNER JOIN Nonboursiers 
                                     ON Etudiants.id_Etudiant = Nonboursiers.id_Etudiant');
 
            return $sql;
         }
         //Même logique que la fonction find()
         public function findAllBoursier()
         {
            $const=Connexion();
             $sql=$const->query('SELECT  Matricule,Nom,Prenom,Telephone,Email,id_type
                                     FROM Etudiants INNER JOIN Boursiers 
                                     ON Etudiants.id_Etudiant = Boursiers.id_Etudiant');
 
            return $sql;
         }

         public function findAllloger()
         {
            $const=Connexion();
             $sql=$const->query('SELECT  Matricule,Nom,Prenom,Telephone,Email,id_type,id_chambre
                                     FROM Etudiants INNER JOIN loger, 
                                     ON Etudiants.id_Etudiant = Boursiers.id_loger');
                                     
                                     
            return $sql;
         }
 
         public function checkStatut()
         {
            $const=Connexion();
 
         }
        
        
    }
    
    ?>