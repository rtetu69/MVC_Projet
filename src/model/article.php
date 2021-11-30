<?php

namespace App\model;

class Article
{
    private String $nom;
    private String $prix;
    private \DateTime $createdAt;


    function _construct($nom, $prix, $auteurId, $createdAt)
    {
        $this->nom = $nom;
        $this->prix = $prix;
        $this->createdAt = $createdAt;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function getPrix(): string
    {
        return $this->prix;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setTitre(string $value)
    {
        $this->titre = $value;
    }

    public function setPrix(string $value)
    {
        $this->prix = $value;
    }
}
