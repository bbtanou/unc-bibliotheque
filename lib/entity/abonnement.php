<?php
    public class Abonnement{
        private string $id;
        private date $date_abonnement;
        private date $date_expiration;
        private string $statut;
        private string $id_lecteur;
        private string $id_type_abonnement;

        public function __construct(string $id, date $date_abonnement, date $date_expiration, string $statut, string $id_lecteur, string $id_type_abonnement){
            $this->id = $id;
            $this->date_abonnement = $date_abonnement;
            $this->date_expiration = $date_expiration;
            $this->statut = $statut;
            $this->id_lecteur = $id_lecteur;
            $this->id_type_abonnement = $id_type_abonnement;
        }

        public function getDate_abonnement(): date{
            return $this->date_abonnement = $date_abonnement;
        }

        public function setDate_abonnement(string $date_abonnement): void{
            $this->date_abonnement = $date_abonnement;
        }

        public function getDate_expiration(): date{
            return $this->date_expiration = $date_expiration;
        }

        public function setDate_expiration(string $date_expiration): void{
            $this->date_expiration = $date_expiration;
        }

        public function getStatut(): string{
            return $this->statut = $statut;
        }

        public function setStatut(string $statut): void{
            $this->statut = $statut;
        }

        public function getId_lecteur(): string{
            return $this->id_lecteur = $id_lecteur;
        }

        public function setId_lecteur(string $id_lecteur): void{
            $this->id_lecteur = $id_lecteur;
        }

        public function getId_type_abonnement(): string{
            return $this->id_type_abonnement = $id_type_abonnement;
        }

        public function setId_type_abonnement(string $id_type_abonnement): void{
            $this->id_type_abonnement = $id_type_abonnement;
        }
    }