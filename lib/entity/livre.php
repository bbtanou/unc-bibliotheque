<?php
    public class Livre{

        private string $id;
        private date $date_publication;
        private string $maison_edition;
        private int $nombre_exemplaire;
        private int $nombre_page;
        private string $description;
        private string $id_categorie;

        public function __construct(string $id, date $date_publication, string $maison_edition, int $nombre_exemplaire, int $nombre_page, string $description, string $id_categorie){
            $this->id = $id;
            $this->date_publication = $date_publication;
            $this->maison_edition = $maison_edition;
            $this->nombre_exemplaire = $nombre_exemplaire;
            $this->nombre_page = $nombre_page;
            $this->description = $description;
            $this->id_categorie = $id_categorie;
        }

        public function getDate_publication(): date{
            return $this->date_publication = $date_publication;
        }
        public function setDate_publication(date $date_publication): void{
            $this->date_publication = $date_publication;
        }

        public function getMaison_edition(): string{
            return $this->maison_edition = $maison_edition;
        }
        public function setMaison_edition(string $maison_edition): void{
            $this->maison_edition = $maison_edition;
        }

        public function getNombre_exemplaire(): int{
            return $this->nombre_exemplaire = $nombre_exemplaire;
        }
        public function setNombre_exemplaire(int $nombre_exemplaire): void{
            $this->nombre_exemplaire = $nombre_exemplaire;
        }

        public function getNombre_page(): int{
            return $this->nombre_page = $nombre_page;
        }
        public function setNombre_page(string $nombre_page): void{
            $this->nombre_page = $nombre_page;
        }

        public function getDescription(): string{
            return $this->description = $description;
        }
        public function setDescription(string $description): void{
            $this->description = $description;
        }

        public function getId_categorie(): string{
            return $this->id_categorie = $id_categorie;
        }
        public function setId_categorie(string $id_categorie): void{
            $this->id_categorie = $id_categorie;
        }
    }