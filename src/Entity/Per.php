<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\PerRepository")
 */
class Per
{

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */

    private $per_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $tip_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $tdo_id;


    /**
     * @ORM\Column(type="string")
     */

    private $per_nrodoc;


    /**
     * @ORM\Column(type="string")
     */

    private $per_obs;


    /**
     * @ORM\Column(type="integer")
     */

    private $per_tper;


    /**
     * @ORM\Column(type="string")
     */

    private $per_cuit;


    /**
     * @ORM\Column(type="datetime")
     */

    private $per_fec_sys;


    /**
     * @ORM\Column(type="integer")
     */

    private $activo;


    /**
     * @ORM\Column(type="integer")
     */

    private $usr_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $org_id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Pfi", mappedBy="persona", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="per_id", referencedColumnName="per_id")
     */
    private $pfi;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\PfiAdi", mappedBy="persona", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="per_id", referencedColumnName="per_id")
     */
    private $pfiAdi;

    public function getPerId(): ?int
    {
        return $this->per_id;
    }

    public function setPerId(int $per_id): self
    {
        $this->per_id = $per_id;

        return $this;
    }

    public function getTipId(): ?int
    {
        return $this->tip_id;
    }

    public function setTipId(int $tip_id): self
    {
        $this->tip_id = $tip_id;

        return $this;
    }

    public function getTdoId(): ?int
    {
        return $this->tdo_id;
    }

    public function setTdoId(int $tdo_id): self
    {
        $this->tdo_id = $tdo_id;

        return $this;
    }

    public function getPerNrodoc(): ?string
    {
        return $this->per_nrodoc;
    }

    public function setPerNrodoc(string $per_nrodoc): self
    {
        $this->per_nrodoc = $per_nrodoc;

        return $this;
    }

    public function getPerObs(): ?string
    {
        return $this->per_obs;
    }

    public function setPerObs(string $per_obs): self
    {
        $this->per_obs = $per_obs;

        return $this;
    }

    public function getPerTper(): ?int
    {
        return $this->per_tper;
    }

    public function setPerTper(int $per_tper): self
    {
        $this->per_tper = $per_tper;

        return $this;
    }

    public function getPerCuit(): ?string
    {
        return $this->per_cuit;
    }

    public function setPerCuit(string $per_cuit): self
    {
        $this->per_cuit = $per_cuit;

        return $this;
    }

    public function getPerFecSys(): ?\DateTimeInterface
    {
        return $this->per_fec_sys;
    }

    public function setPerFecSys(\DateTimeInterface $per_fec_sys): self
    {
        $this->per_fec_sys = $per_fec_sys;

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

    public function getUsrId(): ?int
    {
        return $this->usr_id;
    }

    public function setUsrId(int $usr_id): self
    {
        $this->usr_id = $usr_id;

        return $this;
    }

    public function getOrgId(): ?int
    {
        return $this->org_id;
    }

    public function setOrgId(int $org_id): self
    {
        $this->org_id = $org_id;

        return $this;
    }

    public function getPfi(): ?Pfi
    {
        return $this->pfi;
    }

    public function setPfi(Pfi $pfi): self
    {
        $this->pfi = $pfi;

        // set the owning side of the relation if necessary
        if ($this !== $pfi->getPersona()) {
            $pfi->setPersona($this);
        }

        return $this;
    }

    public function getPfiAdi(): ?PfiAdi
    {
        return $this->pfiAdi;
    }

    public function setPfiAdi(PfiAdi $pfiAdi): self
    {
        $this->pfiAdi = $pfiAdi;

        // set the owning side of the relation if necessary
        if ($this !== $pfiAdi->getPersona()) {
            $pfiAdi->setPersona($this);
        }

        return $this;
    }


}
