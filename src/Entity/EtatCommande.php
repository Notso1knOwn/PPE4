<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtatCommande
 *
 * @ORM\Table(name="etat_commande")
 * @ORM\Entity(repositoryClass=App\Repository\EtatCommandeRepository::class)
 */
class EtatCommande
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
     * @ORM\Column(name="libelle", type="string", length=50, nullable=true)
     */
    private $libelle;

    /**
     * @var string|null
     *
     * @ORM\Column(name="descriptif", type="string", length=50, nullable=true)
     */
    private $descriptif;

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
     * @return string|null
     */
    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    /**
     * @param string|null $libelle
     */
    public function setLibelle(?string $libelle): void
    {
        $this->libelle = $libelle;
    }

    /**
     * @return string|null
     */
    public function getDescriptif(): ?string
    {
        return $this->descriptif;
    }

    /**
     * @param string|null $descriptif
     */
    public function setDescriptif(?string $descriptif): void
    {
        $this->descriptif = $descriptif;
    }

    public function __toString()
    {
        return $this->libelle;
    }


}
