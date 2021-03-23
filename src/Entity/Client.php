<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass=App\Repository\ClientRepository::class)
 */
class Client
{
    /**
     * @var int
     *
     * @ORM\Column(name="Id_Client", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=50, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_fac", type="string", length=255, nullable=false)
     */
    private $adresseFac;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adr_complement_fac", type="string", length=255, nullable=true)
     */
    private $adrComplementFac;

    /**
     * @var string
     *
     * @ORM\Column(name="cp_fac", type="string", length=10, nullable=false)
     */
    private $cpFac;

    /**
     * @var string
     *
     * @ORM\Column(name="ville_fac", type="string", length=50, nullable=false)
     */
    private $villeFac;

    /**
     * @var string
     *
     * @ORM\Column(name="pays_fac", type="string", length=50, nullable=false)
     */
    private $paysFac;

    /**
     * @var string|null
     *
     * @ORM\Column(name="telephone", type="string", length=50, nullable=true)
     */
    private $telephone;


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
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }

    /**
     * @param string $prenom
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getAdresseFac(): string
    {
        return $this->adresseFac;
    }

    /**
     * @param string $adresseFac
     */
    public function setAdresseFac(string $adresseFac): void
    {
        $this->adresseFac = $adresseFac;
    }

    /**
     * @return string|null
     */
    public function getAdrComplementFac(): ?string
    {
        return $this->adrComplementFac;
    }

    /**
     * @param string|null $adrComplementFac
     */
    public function setAdrComplementFac(?string $adrComplementFac): void
    {
        $this->adrComplementFac = $adrComplementFac;
    }

    /**
     * @return string
     */
    public function getCpFac(): string
    {
        return $this->cpFac;
    }

    /**
     * @param string $cpFac
     */
    public function setCpFac(string $cpFac): void
    {
        $this->cpFac = $cpFac;
    }

    /**
     * @return string
     */
    public function getVilleFac(): string
    {
        return $this->villeFac;
    }

    /**
     * @param string $villeFac
     */
    public function setVilleFac(string $villeFac): void
    {
        $this->villeFac = $villeFac;
    }

    /**
     * @return string
     */
    public function getPaysFac(): string
    {
        return $this->paysFac;
    }

    /**
     * @param string $paysFac
     */
    public function setPaysFac(string $paysFac): void
    {
        $this->paysFac = $paysFac;
    }

    /**
     * @return string|null
     */
    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    /**
     * @param string|null $telephone
     */
    public function setTelephone(?string $telephone): void
    {
        $this->telephone = $telephone;
    }




}
