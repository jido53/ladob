<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TtrOjuRepository")
 */
class TtrOju
{
    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Ttr", inversedBy="ttrOjus")
     * @ORM\JoinColumn(name="ttr_id", referencedColumnName="ttr_id", nullable=false)
     */
    private $ttr;

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Oju", inversedBy="ttrOjus")
     * @ORM\JoinColumn(name="oju_id", referencedColumnName="oju_id", nullable=false)
     */
    private $oju;

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoExpediente", inversedBy="ttrOjus")
     * @ORM\JoinColumn(name="tex_id", referencedColumnName="tex_id", nullable=false)
     */
    private $tex;

    public function __construct($ttr, $oju, $tex)
    {
        $this->ttr = $ttr;
        $this->oju = $oju;
        $this->tex = $tex;
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

    public function getOju(): ?Oju
    {
        return $this->oju;
    }

    public function setOju(?Oju $oju): self
    {
        $this->oju = $oju;

        return $this;
    }

    public function getTex(): ?TipoExpediente
    {
        return $this->tex;
    }

    public function setTex(?TipoExpediente $tex): self
    {
        $this->tex = $tex;

        return $this;
    }

    //
    //    /**
    //     * @ORM\Id()
    //     * @ORM\Column(type="integer")
    //     */
    //    private $ttr;
    //
    //
    //    /**
    //     * @ORM\Id()
    //     * @ORM\Column(type="integer")
    //     */
    //    private $oju;
    //
    //
    //    /**
    //     * @ORM\Id()
    //     * @ORM\Column(type="integer")
    //     */
    //
    //    private $tex;
    //
    //
    //    public function __construct($ttr, $oju, $tex)
    //    {
    //        $this->ttr = $ttr;
    //        $this->oju = $oju;
    //        $this->tex = $tex;
    //    }
    //
    //    public function getTtr(): ?int
    //    {
    //        return $this->ttr;
    //    }
    //
    //    public function getOju(): ?int
    //    {
    //        return $this->oju;
    //    }
    //
    //    public function getTex(): ?int
    //    {
    //        return $this->tex;
    //    }
}
