<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="Id_Client", columns={"Id_Client"}), @ORM\Index(name="Id_Etat_Commande", columns={"Id_Etat_Commande"}), @ORM\Index(name="Id_Personnel", columns={"Id_Personnel"})})
 * @ORM\Entity
 */
class Commande
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Commande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_commande", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateCommande = 'CURRENT_TIMESTAMP';

    /**
     * @var int
     *
     * @ORM\Column(name="Id_Etat_Commande", type="integer", nullable=false)
     */
    private $idEtatCommande;

    /**
     * @var int
     *
     * @ORM\Column(name="Id_Client", type="integer", nullable=false)
     */
    private $idClient;

    /**
     * @var int
     *
     * @ORM\Column(name="Id_Personnel", type="integer", nullable=false)
     */
    private $idPersonnel;

    public function getIdCommande(): ?int
    {
        return $this->idCommande;
    }

    public function getDateCommande(): ?\DateTimeInterface
    {
        return $this->dateCommande;
    }

    public function setDateCommande(\DateTimeInterface $dateCommande): self
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    public function getIdEtatCommande(): ?int
    {
        return $this->idEtatCommande;
    }

    public function setIdEtatCommande(int $idEtatCommande): self
    {
        $this->idEtatCommande = $idEtatCommande;

        return $this;
    }

    public function getIdClient(): ?int
    {
        return $this->idClient;
    }

    public function setIdClient(int $idClient): self
    {
        $this->idClient = $idClient;

        return $this;
    }

    public function getIdPersonnel(): ?int
    {
        return $this->idPersonnel;
    }

    public function setIdPersonnel(int $idPersonnel): self
    {
        $this->idPersonnel = $idPersonnel;

        return $this;
    }


}
