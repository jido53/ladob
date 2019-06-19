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
     * @ORM\Column(type="string", length=255)
     */
    private $dep_descr;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Organismo", inversedBy="deps")
     * @ORM\JoinColumn(name="org_id", referencedColumnName="org_id", nullable=false)
     */
    private $org_id;


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
    public function getDepDescr(): string
    {
        return $this->dep_descr;
    }

    public function setDepDescr(string $dep_descr): self
    {
        $this->dep_descr = $dep_descr;

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

}
