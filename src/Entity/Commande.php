<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass=App\Repository\CommandeRepository::class)
 */
class Commande
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_commande", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $dateCommande = 'CURRENT_TIMESTAMP';

    /**
     * @ORM\ManyToOne(targetEntity=EtatCommande::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idEtatCommande;

    /**
     * @ORM\ManyToOne(targetEntity=Client::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idClient;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $idPersonnel;

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


    public function getIdEtatCommande(): ?EtatCommande
    {
        return $this->idEtatCommande;
    }


    public function setIdEtatCommande(?EtatCommande $idEtatCommande): self
    {
        $this->idEtatCommande = $idEtatCommande;
    }

    public function getIdClient(): ?Client
    {
        return $this->idClient;
    }


    public function setIdClient(?Client $idClient): self
    {
        $this->idClient = $idClient;
    }


    public function getIdPersonnel(): ?User
    {
        return $this->idPersonnel;
    }


    public function setIdPersonnel(?User $idPersonnel): self
    {
        $this->idPersonnel = $idPersonnel;
    }





}
