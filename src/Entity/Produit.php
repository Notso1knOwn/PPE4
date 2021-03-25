<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass=App\Repository\ProduitRepository::class)
 */
class Produit
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="marque", type="string", length=50, nullable=true)
     */
    private $marque;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=true)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=false)
     */
    private $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tarif", type="decimal", precision=19, scale=2, nullable=true)
     */
    private $tarif;

    /**
     * @var int
     *
     * @ORM\Column(name="stock", type="integer", nullable=false)
     */
    private $stock;

    /**
     * @var string|null
     *
     * @ORM\Column(name="note", type="decimal", precision=15, scale=2, nullable=true)
     */
    private $note;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lien_image", type="text", length=65535, nullable=true)
     */
    private $lienImage;

    /**
     * @ORM\ManyToOne(targetEntity=Categorie::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $id_categorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(?string $marque): self
    {
        $this->marque = $marque;
        return $this;
    }

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getTarif(): ?string
    {
        return $this->tarif;
    }

    public function setTarif(?string $tarif): self
    {
        $this->tarif = $tarif;

        return $this;
    }

    public function getStock(): ?int
    {
        return $this->stock;
    }

    public function setStock(int $stock): self
    {
        $this->stock = $stock;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

        return $this;
    }

    public function getLienImage(): ?string
    {
        return $this->lienImage;
    }

    public function setLienImage(?string $lienImage): self
    {
        $this->lienImage = $lienImage;

        return $this;
    }

    public function getIdCategorie(): ?Categorie
    {
        return $this->id_categorie;
    }

    public function setIdCategorie(?Categorie $id_categorie): self
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }

    public function toJSON(){
        $json = '{ 
        "id" : '.$this->id.' ,
        "marque" : "'.$this->marque.'" ,
        "libelle" : "'.$this->libelle.'" ,
        "description" : "'.$this->description.'" ,
        "tarif" : "'.$this->tarif.'" ,
        "stock" : '.$this->stock.' ,
        "note" : "'.$this->note.'" ,
        "lienImage" : "'.$this->lienImage.'" ,
        "id_ategorie_id" : '.$this->id_categorie.' }';
        return $json;
    }

    public function __toString()
    {
        return $this->libelle;
    }


}
