<?php
    public class Personne{
        /// Déclaration des attributs
        protected string $nom;
        protected string $prenom;
        protected date $date_naissance;
        protected string $sexe;
        
        /// Déclaration du constructeur d'initialisation de tous attributs
        public function __construct(string $nom, string $prenom, date $date_naissance, string $sexe){
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->date_naissance = $date_naissance;
            $this->sexe = $sexe;
        }

        /// Déclaration des setters et getters des differents attributs
        public function getNom(): string{
            return $this->nom = $nom;
        }
        public function setNom(string $nom): void{
            $this->nom = $nom;
        }

        public function getPrenom(): string{
            return $this->prenom = $prenom;
        }
        public function setPrenom(string $prenom): void{
            $this->prenom = $prenom;
        }

        public function getDate_naissance(): date{
            return $this->date_naissance = $date_naissance;
        }
        public function setDate_naissance(date $date_naissance): void{
            $this->date_naissance = $date_naissance;
        }

        public function getSexe(): string{
            return $this->sexe = $sexe;
        }
        public function setSexe(string $sexe): void{
            $this->sexe = $sexe;
        }
    }

?>