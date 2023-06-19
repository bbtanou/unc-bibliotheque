<?php
    public class Lecteur extends Personne{
        private string $id;
        private string $adresse;
        private string $telephone;
        private string $email;

        public function __construct(string $nom, string $prenom, date $date_naissance, string $sexe, string $id, string $adresse, string $telephone, string $email){
            parent::__construct($nom, $prenom, $date_naissance, $sexe);
            $this->id = $id;
            $this->adresse = $adresse;
            $this->telephone = $telephone;
            $this->email = $email;

        }

        public function getAdresse(): string{
            return $this->adresse = $adresse;
        }
        public function setAdresse(string $adresse): void{
            $this->adresse = $adresse;
        }

        public function getTelephone(): string{
            return $this->telephone = $telephone;
        }
        public function setTelephone(string $telephone): void{
            $this->telephone = $telephone;
        }

        public function getEmail(): string{
            return $this->email = $email;
        }

        public function setEmail(string $email): void{
            $this->email = $email;
        }
    }