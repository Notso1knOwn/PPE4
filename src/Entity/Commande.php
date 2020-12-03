<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande", indexes={@ORM\Index(name="Id_Etat_Commande", columns={"Id_Etat_Commande"}), @ORM\Index(name="Id_Personnel", columns={"Id_Personnel"}), @ORM\Index(name="Id_Client", columns={"Id_Client"})})
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
     * @return \DateTime
     */
    public function getDateCommande(): \DateTime
    {
        return $this->dateCommande;
    }

    /**
     * @param \DateTime $dateCommande
     */
    public function setDateCommande(\DateTime $dateCommande): void
    {
        $this->dateCommande = $dateCommande;
    }

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
     * @return int
     */
    public function getIdClient(): int
    {
        return $this->idClient;
    }

    /**
     * @param int $idClient
     */
    public function setIdClient(int $idClient): void
    {
        $this->idClient = $idClient;
    }

    /**
     * @return int
     */
    public function getIdPersonnel(): int
    {
        return $this->idPersonnel;
    }

    /**
     * @param int $idPersonnel
     */
    public function setIdPersonnel(int $idPersonnel): void
    {
        $this->idPersonnel = $idPersonnel;
    }



}
