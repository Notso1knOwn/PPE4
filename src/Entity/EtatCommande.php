<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatCommande
 *
 * @ORM\Table(name="etat_commande")
 * @ORM\Entity
 */
class EtatCommande
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Etat_Commande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEtatCommande;

    /**
     * @var string|null
     *
     * @ORM\Column(name="libelle", type="string", length=50, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descriptif", type="string", length=50, nullable=true)
     */
    private $descriptif;

    public function getIdEtatCommande(): ?int
    {
        return $this->idEtatCommande;
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

    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    public function setDescriptif(?string $descriptif): self
    {
        $this->descriptif = $descriptif;

        return $this;
    }


}
