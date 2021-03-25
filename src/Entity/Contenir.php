<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenir
 *
 * @ORM\Entity(repositoryClass=App\Repository\ContenirRepository::class)
 */
class Contenir
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Commande::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idCommande;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idProduit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var double
     *
     * @ORM\Column(name="tarif", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $tarif;

    /**
     * @return int
     */
    public function getIdCommande(): ?Commande
    {
        return $this->idCommande;
    }

    /**
     * @param int $idCommande
     */
    public function setIdCommande(?Commande $idCommande): self
    {
        $this->idCommande = $idCommande;
    }

    /**
     * @return int
     */
    public function getIdProduit(): ?Produit
    {
        return $this->idProduit;
    }

    /**
     * @param int $idProduit
     */
    public function setIdProduit(?Produit $idProduit): self
    {
        $this->idProduit = $idProduit;
    }

    /**
     * @return int|null
     */
    public function getQuantite(): ?int
    {
        return $this->quantite;
    }

    /**
     * @param int|null $quantite
     */
    public function setQuantite(?int $quantite): void
    {
        $this->quantite = $quantite;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return float
     */
    public function getTarif(): float
    {
        return $this->tarif;
    }

    /**
     * @param float $tarif
     */
    public function setTarif(float $tarif): void
    {
        $this->tarif = $tarif;
    }



}
