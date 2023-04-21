<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity
 */
class Reclamation
{
    /**
     * @var int
     *
     * @ORM\Column(name="Idrec", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    public $idrec;

    /**
     * @var string
     *
     *  @Assert\NotBlank(message="votre nom et prenom  doit etre non vide")
     *
     *
     * @ORM\Column(name="nomuser", type="string", length=255, nullable=false)
     */
    public $nomuser;

    /**
     * @var string
     *
     *  @Assert\NotBlank(message="objet  doit etre non vide")
     *
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=false)
     */
    public $email;

    /**
     * @var string
     * @Assert\NotBlank(message="objet  doit etre non vide")
     * @Assert\Length(
     *      min = 7,
     *      max = 100,
     *      minMessage = "doit etre >=7 ",
     *      maxMessage = "doit etre <=100" )
     * @ORM\Column(name="objet", type="string", length=255, nullable=false)
     */
    public $objet;

    /**
     * @var string
     * @Assert\NotBlank(message="description  doit etre non vide")
     * @Assert\Length(
     *      min = 7,
     *      max = 100,
     *      minMessage = "doit etre >=7 ",
     *      maxMessage = "doit etre <=100" )
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    public $description;

    /**
     * @var string|null
     *
     * @ORM\Column(name="etatrec", type="string", length=20, nullable=true, options={"default"="'En attente '"})
     */
    public $etatrec = '\'En attente \'';

    public function getIdrec(): ?int
    {
        return $this->idrec;
    }

    public function getNomuser(): ?string
    {
        return $this->nomuser;
    }

    public function setNomuser(string $nomuser): self
    {
        $this->nomuser = $nomuser;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

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

    public function getEtatrec(): ?string
    {
        return $this->etatrec;
    }

    public function setEtatrec(?string $etatrec): self
    {
        $this->etatrec = $etatrec;

        return $this;
    }


}
