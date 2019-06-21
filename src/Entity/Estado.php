<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\EstadoRepository")
 * @ORM\Table(name="est")
 */
class Estado
{


    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */

    private $est_id;


    /**
     * @ORM\Column(type="string", length=6)
     */

    private $est_cod;


    /**
     * @ORM\Column(type="string", length=50)
     */

    private $est_descr;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $est_modif;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $est_prest;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $est_acu;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $est_final;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $est_activo;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $est_subest;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $est_dii;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $fue_id;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $est_elim;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $est_per;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Exp", mappedBy="est")
     */
    private $exps1;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Exp", mappedBy="epr")
     */
    private $exps2;

    public function __construct()
    {
        $this->exps1 = new ArrayCollection();
        $this->exps2 = new ArrayCollection();
    }





    public function getEstId(): ?int
    {
        return $this->est_id;
    }


    public function getEstCod(): ?string
    {
        return $this->est_cod;
    }

    public function setEstCod(string $est_cod): self
    {
        $this->est_cod = $est_cod;

        return $this;
    }

    public function getEstDescr(): ?string
    {
        return $this->est_descr;
    }

    public function setEstDescr(string $est_descr): self
    {
        $this->est_descr = $est_descr;

        return $this;
    }

    public function getEstModif(): ?int
    {
        return $this->est_modif;
    }

    public function setEstModif(?int $est_modif): self
    {
        $this->est_modif = $est_modif;

        return $this;
    }

    public function getEstPrest(): ?int
    {
        return $this->est_prest;
    }

    public function setEstPrest(?int $est_prest): self
    {
        $this->est_prest = $est_prest;

        return $this;
    }

    public function getEstAcu(): ?int
    {
        return $this->est_acu;
    }

    public function setEstAcu(?int $est_acu): self
    {
        $this->est_acu = $est_acu;

        return $this;
    }

    public function getEstFinal(): ?int
    {
        return $this->est_final;
    }

    public function setEstFinal(?int $est_final): self
    {
        $this->est_final = $est_final;

        return $this;
    }

    public function getEstActivo(): ?int
    {
        return $this->est_activo;
    }

    public function setEstActivo(?int $est_activo): self
    {
        $this->est_activo = $est_activo;

        return $this;
    }

    public function getEstSubest(): ?int
    {
        return $this->est_subest;
    }

    public function setEstSubest(?int $est_subest): self
    {
        $this->est_subest = $est_subest;

        return $this;
    }

    public function getEstDii(): ?int
    {
        return $this->est_dii;
    }

    public function setEstDii(?int $est_dii): self
    {
        $this->est_dii = $est_dii;

        return $this;
    }

    public function getFueId(): ?int
    {
        return $this->fue_id;
    }

    public function setFueId(?int $fue_id): self
    {
        $this->fue_id = $fue_id;

        return $this;
    }

    public function getEstElim(): ?int
    {
        return $this->est_elim;
    }

    public function setEstElim(?int $est_elim): self
    {
        $this->est_elim = $est_elim;

        return $this;
    }

    public function getEstPer(): ?int
    {
        return $this->est_per;
    }

    public function setEstPer(?int $est_per): self
    {
        $this->est_per = $est_per;

        return $this;
    }

    /**
     * @return Collection|Exp[]
     */
    public function getExps1(): Collection
    {
        return $this->exps1;
    }

    public function addExps1(Exp $exps1): self
    {
        if (!$this->exps1->contains($exps1)) {
            $this->exps1[] = $exps1;
            $exps1->setEst($this);
        }

        return $this;
    }

    public function removeExps1(Exp $exps1): self
    {
        if ($this->exps1->contains($exps1)) {
            $this->exps1->removeElement($exps1);
            // set the owning side to null (unless already changed)
            if ($exps1->getEst() === $this) {
                $exps1->setEst(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Exp[]
     */
    public function getExps2(): Collection
    {
        return $this->exps2;
    }

    public function addExps2(Exp $exps2): self
    {
        if (!$this->exps2->contains($exps2)) {
            $this->exps2[] = $exps2;
            $exps2->setEpr($this);
        }

        return $this;
    }

    public function removeExps2(Exp $exps2): self
    {
        if ($this->exps2->contains($exps2)) {
            $this->exps2->removeElement($exps2);
            // set the owning side to null (unless already changed)
            if ($exps2->getEpr() === $this) {
                $exps2->setEpr(null);
            }
        }

        return $this;
    }

    

}
