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
     * @ORM\Column(type="integer")
     */
    private $ttr;


    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */
    private $oju;


    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */

    private $tex;


    public function __construct($ttr, $oju, $tex)
    {
        $this->ttr = $ttr;
        $this->oju = $oju;
        $this->tex = $tex;
    }

    public function getTtr(): ?int
    {
        return $this->ttr;
    }

    public function getOju(): ?int
    {
        return $this->oju;
    }

    public function getTex(): ?int
    {
        return $this->tex;
    }



}
