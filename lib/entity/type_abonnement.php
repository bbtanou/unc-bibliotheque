<?php
    public class Type_abonnement{
        private string $id;
        private string $titre_abonnement;
        private string $montant;

        public function __construct(string $id, string $titre_abonnement, string $montant){
            $this->id = $id;
            $this->titre_abonnement = $titre_abonnement;
            $this->montant = $montant;
        }

        public function getTitre_abonnement(): string{
            return $this->titre_abonnement = $titre_abonnement;
        }
        public function setTitre_abonnement(string $titre_abonnement): void{
            $this->titre_abonnement = $titre_abonnement;
        }

        public function getMontant(): string{
            return $this->montant = $montant;
        }
        public function setMontant(string $montant): void{
            $this->montant = $montant;
        }
    }