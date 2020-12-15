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

    /**
     * @return int
     */
    public function getIdEtatCommande(): int
    {
        return $this->idEtatCommande;
    }

    /**
     * @param int $idEtatCommande
     */
    public function setIdEtatCommande(int $idEtatCommande): void
    {
        $this->idEtatCommande = $idEtatCommande;
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



}
