<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\TuteurRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity(repositoryClass: TuteurRepository::class)]
#[ApiResource]
class Tuteur 
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $prenom = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $entreprise = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $telephone = null;

   

    /**
     * @var Collection<int, Visite>
     */
    #[ORM\OneToMany(targetEntity: Visite::class, mappedBy: 'tuteur', orphanRemoval: true)]
    private Collection $visites;

    /**
     * @var Collection<int, Etudiant>
     */
    #[ORM\OneToMany(targetEntity: Etudiant::class, mappedBy: 'tuteur')]
    private Collection $etudiants;

    public function __construct()
    {
        $this->visites = new ArrayCollection();
        $this->etudiants = new ArrayCollection();
    }

  

    // ---------------- UserInterface ----------------
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

  

    public function eraseCredentials(): void
    {
        // si tu stockes des données temporaires sensibles
    }

    // ---------------- Getters / Setters ----------------
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): static
    {
        $this->prenom = $prenom;
        return $this;
    }

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(?string $entreprise): static
    {
        $this->entreprise = $entreprise;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * @return Collection<int, Visite>
     */
    public function getVisites(): Collection
    {
        return $this->visites;
    }

    public function addVisite(Visite $visite): static
    {
        if (!$this->visites->contains($visite)) {
            $this->visites->add($visite);
            $visite->setTuteur($this);
        }

        return $this;
    }

    public function removeVisite(Visite $visite): static
    {
        if ($this->visites->removeElement($visite)) {
            if ($visite->getTuteur() === $this) {
                $visite->setTuteur(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Etudiant>
     */
    public function getEtudiants(): Collection
    {
        return $this->etudiants;
    }

    public function addEtudiant(Etudiant $etudiant): static
    {
        if (!$this->etudiants->contains($etudiant)) {
            $this->etudiants->add($etudiant);
            $etudiant->setTuteur($this);
        }

        return $this;
    }

    public function removeEtudiant(Etudiant $etudiant): static
    {
        if ($this->etudiants->removeElement($etudiant)) {
            if ($etudiant->getTuteur() === $this) {
                $etudiant->setTuteur(null);
            }
        }

        return $this;
    }
}
