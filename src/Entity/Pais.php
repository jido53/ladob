<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\PaisRepository")
 * @ORM\Table(name="pai")
 */
class Pais
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $pai_id;


    /**
     * @ORM\Column(type="string")
     */

    private $pai_cod;


    /**
     * @ORM\Column(type="string")
     */

    private $pai_descr;


    /**
     * @ORM\Column(type="integer")
     */

    private $pai_default;

    public function __toString()
    {
        return $this->getPaiDescr();
    }
    public function getPaiId(): ?int
    {
        return $this->pai_id;
    }

    public function getPaiCod(): ?string
    {
        return $this->pai_cod;
    }

    public function setPaiCod(string $pai_cod): self
    {
        $this->pai_cod = $pai_cod;

        return $this;
    }

    public function getPaiDescr(): ?string
    {
        return $this->pai_descr;
    }

    public function setPaiDescr(string $pai_descr): self
    {
        $this->pai_descr = $pai_descr;

        return $this;
    }

    public function getPaiDefault(): ?int
    {
        return $this->pai_default;
    }

    public function setPaiDefault(int $pai_default): self
    {
        $this->pai_default = $pai_default;

        return $this;
    }


}
