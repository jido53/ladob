<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DepUsrRepository")
 */
class DepUsr
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="App\Entity\Dep", inversedBy="depUsrs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $dep_id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $dus_habili;

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="App\Entity\Usr", inversedBy="depUsrs")
     * @ORM\JoinColumn(nullable=false)
     */
    private $usr_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $dus_default;


    public function __construct($dep_id, $usr_id)
    {
        $this->dep = $dep_id;
        $this->usr = $usr_id;
    }

    public function getDepId(): ?Dep
    {
        return $this->dep_id;
    }

    public function setDepId(?Dep $dep_id): self
    {
        $this->dep_id = $dep_id;

        return $this;
    }

    public function getDusHabili(): ?bool
    {
        return $this->dus_habili;
    }

    public function setDusHabili(bool $dus_habili): self
    {
        $this->dus_habili = $dus_habili;

        return $this;
    }

    public function getUsrId(): ?Usr
    {
        return $this->usr_id;
    }

    public function setUsrId(?Usr $usr_id): self
    {
        $this->usr_id = $usr_id;

        return $this;
    }

    public function getDusDefault(): ?int
    {
        return $this->dus_default;
    }

    public function setDusDefault(int $dus_default): self
    {
        $this->dus_default = $dus_default;

        return $this;
    }
}
