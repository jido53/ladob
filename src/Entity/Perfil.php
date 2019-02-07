<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PerfilRepository")
 * @ORM\Table(name="pfl")
 */
class Perfil
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $pfl_id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $pfl_descr;

    /**
     * @ORM\Column(type="integer")
     */
    private $pfl_acceso;

    /**
     * @ORM\Column(type="string", length=6, nullable=true)
     */
    private $pfl_cod;

    public function getPflId(): ?int
    {
        return $this->pfl_id;
    }

    public function getPflDescr(): ?string
    {
        return $this->pfl_descr;
    }

    public function setPflDescr(string $pfl_descr): self
    {
        $this->pfl_descr = $pfl_descr;

        return $this;
    }

    public function getPflAcceso(): ?int
    {
        return $this->pfl_acceso;
    }

    public function setPflAcceso(int $pfl_acceso): self
    {
        $this->pfl_acceso = $pfl_acceso;

        return $this;
    }

    public function getPflCod(): ?string
    {
        return $this->pfl_cod;
    }

    public function setPflCod(?string $pfl_cod): self
    {
        $this->pfl_cod = $pfl_cod;

        return $this;
    }
}
