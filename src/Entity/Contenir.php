<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenir
 *
 * @ORM\Table(name="contenir", indexes={@ORM\Index(name="Id_Commande", columns={"Id_Commande"})})
 * @ORM\Entity
 */
class Contenir
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Commande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="Id_Produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idProduit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="quantite", type="integer", nullable=true)
     */
    private $quantite;

    /**
     * @return int
     */
    public function getIdCommande(): int
    {
        return $this->idCommande;
    }

    /**
     * @param int $idCommande
     */
    public function setIdCommande(int $idCommande): void
    {
        $this->idCommande = $idCommande;
    }

    /**
     * @return int
     */
    public function getIdProduit(): int
    {
        return $this->idProduit;
    }

    /**
     * @param int $idProduit
     */
    public function setIdProduit(int $idProduit): void
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


}
