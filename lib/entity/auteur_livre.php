<?php
    public class Auteur_livre{
        // Déclaration des attributs
        private string $id_auteur;
        private string $id_livre;

        // Constructeur d'initialisation des attributs
        public function __construct(string $id_auteur, string $id_livre){
            $this->id_auteur = $id_auteur;
            $this->id_livre = $id_livre;
        }

        // Déclaration des setters et getters des differents attributs
        public function getId_auteur(): string{
            return $this->id_auteur = $id_auteur;
        }
        public function setId_auteur(string $id_auteur): void{
            $this->id_auteur = $id_auteur;
        }

        public function getId_livre(): string{
            return $this->id_livre = $id_livre;
        }
        public function setId_livre(string $id_livre): void{
            $this->id_livre = $id_livre;
        }
    }