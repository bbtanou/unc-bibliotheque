<?php

    public class Auteur extends Personne{
        private string $id;
        private string $nationalite;
        private string $bio;

        public function  __construct(string $nom, string $prenom, date $date_naissance, string $sexe, string $id, string $nationalite, string $bio){
            parent::__construct($nom, $prenom, $date_naissance, $sexe);
            $this->id = $id;
            $this->nationalite = $nationalite;
            $this->bio = $bio;
        }

        public function getNationalite(): string{
            return $this->nationalite = $nationalite;
        }
        public function setNationalite(string $nationalite): void{
            $this->nationalite = $nationalite;
        }

        public function getBio(): string{
            return $this->bio = $bio;
        }
        public function setBio(string $bio): void{
            $this->bio = $bio;
        }
    }