<?php
    public class Personnel extends Personne{
        /// Déclaration des attributs
        private string $email;
        private string $telephone;
        private string $mot_de_passe;

        /// Déclaration du constructeur d'initialisation des attributs
        public function __construct(string $nom, string $prenom, date $date_naissance, string $sexe, string $email, string $telephone, string $mot_de_passe){
            parent::__construct($nom, $prenom, date $date_naissance, $sexe);// Appel du constructeur parent (Personne)
            $this->email = $email;
            $this->telephone = $telephone;
            $this->mot_de_passe = $mot_de_passe;
        }

        // Déclaration des setters et getters des differents attributs
        public function getEmail(): string{
            return $this->email = $email;
        }

        public function setEmail(string $email): void{
            $this->email = $email;
        }

        public function getTelephone(): string{
            return $this->telephone = $telephone;
        }

        public function setTelephone(string $telephone): void{
            $this->telephone = $telephone;
        }

        public function getMot_de_passe(): string{
            return $this->mot_de_passe = $mot_de_passe;
        }

        public function setMot_de_passe(string $mot_de_passe): void{
            $this->mot_de_passe = $mot_de_passe;
        }
    }