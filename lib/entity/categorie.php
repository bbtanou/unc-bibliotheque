<?php
    public class Categorie{
        /// Déclaration des attributs
        private string $id;
        private string $nom_categorie;
        private string $description;

        /// Déclaration du constructeur d'initialisation des attributs
        public function __construct(string $id, string $nom_categorie, string $description){
            $this->id = $id;
            $this->nom_categorie = $nom_categorie;
            $this->description = $description;
        }

        ///Déclaration des setters et getters des attributs
        public function getNom_categorie(): string{
            return $this->nom_categorie = $nom_categorie;
        }
        public function setNom_categorie(string $nom_categorie): void{
            $this->nom_categorie = $nom_categorie;
        }

        public function getDescription(): string{
            return $this->description = $description;
        }
        public function setDescription(string $description): void{
            $this->description = $description;
        }

    }