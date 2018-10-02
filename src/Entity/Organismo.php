<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrganismoRepository")
 * @ORM\Table(name="org")
 */
 
class Organismo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $org_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $org_descr;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $org_mail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $org_clase;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Dep", mappedBy="org_id")
     */
    private $deps;

    public function __construct()
    {
        $this->deps = new ArrayCollection();
    }

    public function getOrgId(): int
    {
        return $this->org_id;
    }

    public function getOrgDescr(): string
    {
        return $this->org_descr;
    }

    public function setOrgDescr(string $org_descr): self
    {
        $this->org_descr = $org_descr;

        return $this;
    }

    public function getOrgMail()
    {
        return $this->org_mail;
    }

    public function setOrgMail(string $org_mail): self
    {
        $this->org_mail = $org_mail;

        return $this;
    }

    public function getOrgClase(): string
    {
        return $this->org_clase;
    }

    public function setOrgClase(string $org_clase): self
    {
        $this->org_clase = $org_clase;

        return $this;
    }

    /**
     * @return Collection|Dep[]
     */
    public function getDeps(): Collection
    {
        return $this->deps;
    }

    public function addDep(Dep $dep): self
    {
        if (!$this->deps->contains($dep)) {
            $this->deps[] = $dep;
            $dep->setOrgId($this);
        }

        return $this;
    }

    public function removeDep(Dep $dep): self
    {
        if ($this->deps->contains($dep)) {
            $this->deps->removeElement($dep);
            // set the owning side to null (unless already changed)
            if ($dep->getOrgId() === $this) {
                $dep->setOrgId(null);
            }
        }

        return $this;
    }
}
