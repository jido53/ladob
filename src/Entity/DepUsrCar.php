<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DepUsrCarRepository")
 */
class DepUsrCar
{


    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Dep", inversedBy="depUsrCars")
     * @ORM\JoinColumn(name="dep_id", referencedColumnName="dep_id")
     */
    private $dependencia;

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="depUsrCars")
     * @ORM\JoinColumn(name="usr_id", referencedColumnName="usr_id")
     */
    private $usuario;

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Car", inversedBy="depUsrCars")
     * @ORM\JoinColumn(name="car_id", referencedColumnName="car_id")
     */
    private $cargo;


    /**
     * @ORM\Column(type="datetime")
     */

    private $duc_fechasta;


    /**
     * @ORM\Id()
     * @ORM\Column(type="string")
     */

    private $duc_fecdesde;


    /**
     * @ORM\Column(type="integer")
     */

    private $duc_default;


    /**
     * @ORM\Column(type="integer")
     */

    private $duc_ws;

    public function __construct($dep_id, $usr_id, $car_id, $duc_fecdesde)
    {
        $this->dependencia = $dep_id;
        $this->usuario = $usr_id;
        $this->cargo = $car_id;
        $this->duc_fecdesde = $duc_fecdesde ;
    }




    public function getDependencia(): ?Dep
    {
        return $this->dependencia;
    }

    public function setDependencia(?Dep $dependencia): self
    {
        $this->dependencia = $dependencia;

        return $this;
    }

    public function getUsuario(): ?User
    {
        return $this->usuario;
    }

    public function setUsuario(?User $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getCargo(): ?car
    {
        return $this->cargo;
    }

    public function setCargo(?car $cargo): self
    {
        $this->cargo = $cargo;

        return $this;
    }

    public function getDucFechasta(): ?\DateTimeInterface
    {
        return $this->duc_fechasta;
    }

    public function setDucFechasta(\DateTimeInterface $duc_fechasta): self
    {
        $this->duc_fechasta = $duc_fechasta;

        return $this;
    }

    public function getDucFecdesde(): ?string
    {
        return $this->duc_fecdesde->format('Y-m.d');
    }

    public function getDucDefault(): ?int
    {
        return $this->duc_default;
    }

    public function setDucDefault(int $duc_default): self
    {
        $this->duc_default = $duc_default;

        return $this;
    }

    public function getDucWs(): ?int
    {
        return $this->duc_ws;
    }

    public function setDucWs(int $duc_ws): self
    {
        $this->duc_ws = $duc_ws;

        return $this;
    }
}
