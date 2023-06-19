<?php
    public class Emprunt{
        private string $id;
        private date $date_emprunt;
        private date $date_retour_prevue;
        private date $date_retour;
        private string $statut;
        private string $id_personnel;
        private string $id_abonnement;
        private string $id_livre;

        public function __construct(string $id, date $date_emprunt, date $date_retour_prevue, date $date_retour, string $statut, string $id_personnel, string $id_abonnement, string $id_livre){
            $this->id = $id;
            $this->date_emprunt = $date_emprunt;
            $this->date_retour_prevue = $date_retour_prevue;
            $this->date_retour = $date_retour;
            $this->statut = $statut;
            $this->id_personnel = $id_personnel;
            $this->id_abonnement = $id_abonnement;
            $this->id_livre = $id_livre;
        }

        public function getDate_emprunt(): date{
            return $this->date_emprunt = $date_emprunt;
        }

        public function setDate_emprunt(string $date_emprunt): void{
            $this->date_emprunt = $date_emprunt;
        }

        public function getDate_retour_prevue(): date{
            return $this->date_retour_prevue = $date_retour_prevue;
        }

        public function setDate_retour_prevue(string $date_retour_prevue): void{
            $this->date_retour_prevue = $date_retour_prevue;
        }

        public function getDate_retour(): date{
            return $this->date_retour = $date_retour;
        }

        public function setDate_retour(string $date_retour): void{
            $this->date_retour = $date_retour;
        }

        public function getStatut(): string{
            return $this->statut = $statut;
        }

        public function setStatut(string $statut): void{
            $this->statut = $statut;
        }

        public function getId_personnel(): string{
            return $this->id_personnel = $id_personnel;
        }

        public function setId_personnel(string $id_personnel): void{
            $this->id_personnel = $id_personnel;
        }

        public function getId_abonnement(): string{
            return $this->id_abonnement = $id_abonnement;
        }

        public function setId_abonnement(string $id_abonnement): void{
            $this->id_abonnement = $id_abonnement;
        }

        public function getId_livre(): string{
            return $this->id_livre = $id_livre;
        }

        public function setId_livre(string $id_livre): void{
            $this->id_livre = $id_livre;
        }
    }