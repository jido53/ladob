<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\ExpTtrRepository")
 */
class ExpTtr
{



    /**
     * @ORM\Column(type="integer")
     */

    private $e_ttr_orden;


    /**
     * @ORM\Column(type="integer")
     */

    private $grado_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $activo;

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Ttr")
     * @ORM\JoinColumn(name="ttr_id", referencedColumnName="ttr_id", nullable=false)
     */
    private $ttr;

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Exp", inversedBy="expTtrOju")
     * @ORM\JoinColumn(name="exp_id", referencedColumnName="exp_id", nullable=false)
     */
    private $exp;

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Oju")
     * @ORM\JoinColumn(name="oju_id", referencedColumnName="oju_id", nullable=false)
     */
    private $oju;

    public function __construct($ttr, $oju, $exp)
    {
        $this->ttr = $ttr;
        $this->oju = $oju;
        $this->exp = $exp;
    }

    public function getTtr(): ?Ttr
    {
        return $this->ttr;
    }

    public function setTtr(?Ttr $ttr): self
    {
        $this->ttr = $ttr;

        return $this;
    }

    public function getExp(): ?Exp
    {
        return $this->exp;
    }

    public function setExp(?Exp $exp): self
    {
        $this->exp = $exp;

        return $this;
    }

    public function getOju(): ?Oju
    {
        return $this->oju;
    }

    public function setOju(?Oju $oju): self
    {
        $this->oju = $oju;

        return $this;
    }

    public function getETtrOrden(): ?int
    {
        return $this->e_ttr_orden;
    }

    public function setETtrOrden(int $e_ttr_orden): self
    {
        $this->e_ttr_orden = $e_ttr_orden;

        return $this;
    }

    public function getGradoId(): ?int
    {
        return $this->grado_id;
    }

    public function setGradoId(int $grado_id): self
    {
        $this->grado_id = $grado_id;

        return $this;
    }

    public function getActivo(): ?int
    {
        return $this->activo;
    }

    public function setActivo(int $activo): self
    {
        $this->activo = $activo;

        return $this;
    }




}
