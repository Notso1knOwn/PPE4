<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefProduit
 *
 * @ORM\Table(name="ref_produit", indexes={@ORM\Index(name="Id_Produit", columns={"Id_Produit"})})
 * @ORM\Entity
 */
class RefProduit
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Ref_Produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRefProduit;

    /**
     * @var string|null
     *
     * @ORM\Column(name="Ref_Produit", type="string", length=50, nullable=true)
     */
    private $refProduit;

    /**
     * @var int
     *
     * @ORM\Column(name="Id_Produit", type="integer", nullable=false)
     */
    private $idProduit;

    public function getIdRefProduit(): ?int
    {
        return $this->idRefProduit;
    }

    public function getRefProduit(): ?string
    {
        return $this->refProduit;
    }

    public function setRefProduit(?string $refProduit): self
    {
        $this->refProduit = $refProduit;

        return $this;
    }

    public function getIdProduit(): ?int
    {
        return $this->idProduit;
    }

    public function setIdProduit(int $idProduit): self
    {
        $this->idProduit = $idProduit;

        return $this;
    }


}
