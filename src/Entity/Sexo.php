<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\SexoRepository")
 * @ORM\Table(name="sex")
 */




class Sexo
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $sex_id;


    /**
     * @ORM\Column(type="string")
     */

    private $sex_descr;


    /**
     * @ORM\Column(type="string")
     */

    private $sex_cod;


    /**
     * @ORM\Column(type="integer")
     */

    private $sex_usagen;


    /**
     * @ORM\Column(type="integer")
     */

    private $sex_default;

    public function __toString()
    {
        return $this->getSexDescr();
    }

    public function getSexId(): ?int
    {
        return $this->sex_id;
    }

    public function getSexDescr(): ?string
    {
        return $this->sex_descr;
    }

    public function setSexDescr(string $sex_descr): self
    {
        $this->sex_descr = $sex_descr;

        return $this;
    }

    public function getSexCod(): ?string
    {
        return $this->sex_cod;
    }

    public function setSexCod(string $sex_cod): self
    {
        $this->sex_cod = $sex_cod;

        return $this;
    }

    public function getSexUsagen(): ?int
    {
        return $this->sex_usagen;
    }

    public function setSexUsagen(int $sex_usagen): self
    {
        $this->sex_usagen = $sex_usagen;

        return $this;
    }

    public function getSexDefault(): ?int
    {
        return $this->sex_default;
    }

    public function setSexDefault(int $sex_default): self
    {
        $this->sex_default = $sex_default;

        return $this;
    }


}
