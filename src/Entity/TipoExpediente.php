<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TipoExpedienteRepository")
 * @ORM\Table(name="tex")
 */
class TipoExpediente
{


    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $tex_id;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $tex_cod;

    /**
     * @ORM\Column(type="string", length=35)
     */
    private $tex_descr;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Exp", mappedBy="tex_id")
     */
    private $exps;

    public function __construct()
    {
        $this->exps = new ArrayCollection();
    }



    public function getTexId(): ?int
    {
        return $this->tex_id;
    }

    public function getTexCod(): ?string
    {
        return $this->tex_cod;
    }

    public function setTexCod(string $tex_cod): self
    {
        $this->tex_cod = $tex_cod;

        return $this;
    }

    public function getTexDescr(): ?string
    {
        return $this->tex_descr;
    }

    public function setTexDescr(string $tex_descr): self
    {
        $this->tex_descr = $tex_descr;

        return $this;
    }

    /**
     * @return Collection|Exp[]
     */
    public function getExps(): Collection
    {
        return $this->exps;
    }

    public function addExp(Exp $exp): self
    {
        if (!$this->exps->contains($exp)) {
            $this->exps[] = $exp;
            $exp->setTexId($this);
        }

        return $this;
    }

    public function removeExp(Exp $exp): self
    {
        if ($this->exps->contains($exp)) {
            $this->exps->removeElement($exp);
            // set the owning side to null (unless already changed)
            if ($exp->getTexId() === $this) {
                $exp->setTexId(null);
            }
        }

        return $this;
    }
}
