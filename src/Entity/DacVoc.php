<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\DacVocRepository")
 */
class DacVoc
{

    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $dac_id;


    /**
     * @ORM\Id()
     * @ORM\Column(type="integer", nullable=true)
     */

    private $voc_id;


    /**
     * @ORM\Id()
     * @ORM\Column(type="string", nullable=true)
     */

    private $dvoc_uso;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $dvoc_orden;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $dvoc_reemplazo;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $dvoc_oblig;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $tex_id;

    public function getDacId(): ?int
    {
        return $this->dac_id;
    }

    public function setDacId(?int $dac_id): self
    {
        $this->dac_id = $dac_id;

        return $this;
    }

    public function getVocId(): ?int
    {
        return $this->voc_id;
    }

    public function getDvocUso(): ?string
    {
        return $this->dvoc_uso;
    }

    public function getDvocOrden(): ?int
    {
        return $this->dvoc_orden;
    }

    public function setDvocOrden(?int $dvoc_orden): self
    {
        $this->dvoc_orden = $dvoc_orden;

        return $this;
    }

    public function getDvocReemplazo(): ?string
    {
        return $this->dvoc_reemplazo;
    }

    public function setDvocReemplazo(?string $dvoc_reemplazo): self
    {
        $this->dvoc_reemplazo = $dvoc_reemplazo;

        return $this;
    }

    public function getDvocOblig(): ?int
    {
        return $this->dvoc_oblig;
    }

    public function setDvocOblig(?int $dvoc_oblig): self
    {
        $this->dvoc_oblig = $dvoc_oblig;

        return $this;
    }

    public function getTexId(): ?int
    {
        return $this->tex_id;
    }

    public function setTexId(?int $tex_id): self
    {
        $this->tex_id = $tex_id;

        return $this;
    }


}
