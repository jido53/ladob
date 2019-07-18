<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\CarRepository")
 */
class Car
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $car_id;


    /**
     * @ORM\Column(type="string")
     */

    private $car_descr;


    /**
     * @ORM\Column(type="string")
     */

    private $car_rol;


    /**
     * @ORM\Column(type="integer")
     */

    private $car_jerarq;


    /**
     * @ORM\Column(type="string")
     */

    private $car_cod;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DepUsrCar", mappedBy="cargo")
     */
    private $depUsrCars;

    public function __construct()
    {
        $this->depUsrCars = new ArrayCollection();
    }
    public function __toString()
    {
        return $this->getCarDescr();
    }

    public function getCarId(): ?int
    {
        return $this->car_id;
    }

    public function getCarDescr(): ?string
    {
        return $this->car_descr;
    }

    public function setCarDescr(string $car_descr): self
    {
        $this->car_descr = $car_descr;

        return $this;
    }

    public function getCarRol(): ?string
    {
        return $this->car_rol;
    }

    public function setCarRol(string $car_rol): self
    {
        $this->car_rol = $car_rol;

        return $this;
    }

    public function getCarJerarq(): ?int
    {
        return $this->car_jerarq;
    }

    public function setCarJerarq(int $car_jerarq): self
    {
        $this->car_jerarq = $car_jerarq;

        return $this;
    }

    public function getCarCod(): ?string
    {
        return $this->car_cod;
    }

    public function setCarCod(string $car_cod): self
    {
        $this->car_cod = $car_cod;

        return $this;
    }

    /**
     * @return Collection|DepUsrCar[]
     */
    public function getDepUsrCars(): Collection
    {
        return $this->depUsrCars;
    }

    public function addDepUsrCar(DepUsrCar $depUsrCar): self
    {
        if (!$this->depUsrCars->contains($depUsrCar)) {
            $this->depUsrCars[] = $depUsrCar;
            $depUsrCar->setCargo($this);
        }

        return $this;
    }

    public function removeDepUsrCar(DepUsrCar $depUsrCar): self
    {
        if ($this->depUsrCars->contains($depUsrCar)) {
            $this->depUsrCars->removeElement($depUsrCar);
            // set the owning side to null (unless already changed)
            if ($depUsrCar->getCargo() === $this) {
                $depUsrCar->setCargo(null);
            }
        }

        return $this;
    }




}
