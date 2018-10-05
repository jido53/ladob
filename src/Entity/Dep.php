<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DepRepository")
 */
class Dep
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $dep_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $dep_descorta;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Organismo", inversedBy="deps")
     * @ORM\JoinColumn(name="org_id", referencedColumnName="org_id", nullable=false)
     */
    private $org_id;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DepUsr", mappedBy="dep_id")
     */
    private $depUsrs;

    public function __construct()
    {
        $this->depUsrs = new ArrayCollection();
    }



    public function getDepId(): int
    {
        return $this->dep_id;
    }

    public function setDepId(int $dep_id): self
    {
        $this->dep_id = $dep_id;

        return $this;
    }

    public function getDepDescorta(): string
    {
        return $this->dep_descorta;
    }

    public function setDepDescorta(string $dep_descorta): self
    {
        $this->dep_descorta = $dep_descorta;

        return $this;
    }

    public function getOrgId(): Organismo
    {
        return $this->org_id;
    }

    public function setOrgId(Organismo $org_id): self
    {
        $this->org_id = $org_id;

        return $this;
    }

    /**
     * @return Collection|DepUsr[]
     */
    public function getDepUsrs(): Collection
    {
        return $this->depUsrs;
    }

    public function addDepUsr(DepUsr $depUsr): self
    {
        if (!$this->depUsrs->contains($depUsr)) {
            $this->depUsrs[] = $depUsr;
            $depUsr->setDepId($this);
        }

        return $this;
    }

    public function removeDepUsr(DepUsr $depUsr): self
    {
        if ($this->depUsrs->contains($depUsr)) {
            $this->depUsrs->removeElement($depUsr);
            // set the owning side to null (unless already changed)
            if ($depUsr->getDepId() === $this) {
                $depUsr->setDepId(null);
            }
        }

        return $this;
    }
}
