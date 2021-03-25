<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Table(name="avis_produit")
 * @ORM\Entity(repositoryClass=AvisProduitRepository::class)
 */
class AvisProduit
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var double
     *
     * @ORM\Column(name="note", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $note;

    /**
     * @var int
     *
     * @ORM\Column(name="commentaire", type="integer", nullable=false)
     */
    private $commentaire;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_avis", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateAvis = 'CURRENT_TIMESTAMP';

    /**
     * @ORM\ManyToOne(targetEntity=Client::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idClient;

    /**
     * @ORM\ManyToOne(targetEntity=Produit::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idProduit;

    /**
     * @ORM\ManyToOne(targetEntity=Commande::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idCommande;

    public function getId(): ?int
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
    public function getNote(): float
    {
        return $this->note;
    }

    /**
     * @param float $note
     */
    public function setNote(float $note): void
    {
        $this->note = $note;
    }

    /**
     * @return int
     */
    public function getCommentaire(): int
    {
        return $this->commentaire;
    }

    /**
     * @param int $commentaire
     */
    public function setCommentaire(int $commentaire): void
    {
        $this->commentaire = $commentaire;
    }

    /**
     * @return \DateTime
     */
    public function getDateAvis(): \DateTime
    {
        return $this->dateAvis;
    }

    /**
     * @param \DateTime $dateAvis
     */
    public function setDateAvis(\DateTime $dateAvis): void
    {
        $this->dateAvis = $dateAvis;
    }




    public function getIdClient(): ?Client
    {
        return $this->idClient;
    }


    public function setIdClient(?Client $idClient): self
    {
        $this->idClient = $idClient;
    }


    public function getIdProduit(): ?Produit
    {
        return $this->idProduit;
    }


    public function setIdProduit(?Produit $idProduit): self
    {
        $this->idProduit = $idProduit;
    }


    public function getIdCommande(): ?Commande
    {
        return $this->idCommande;
    }

    public function setIdCommande(?Commande $idCommande): self
    {
        $this->idCommande = $idCommande;
    }


}
