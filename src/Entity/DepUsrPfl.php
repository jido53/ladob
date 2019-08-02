<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DepUsrPflRepository")
 */
class DepUsrPfl
{


    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Dep")
     * @ORM\JoinColumn(name="dep_id", referencedColumnName="dep_id")
     */
    private $dependencia;



    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Perfil")
     * @ORM\JoinColumn(name="pfl_id", referencedColumnName="pfl_id")
     */
    private $perfil;

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="perfil")
     * @ORM\JoinColumn(name="usr_id", referencedColumnName="usr_id")
     */
    private $usuario;



    public function getDependencia(): ?Dep
    {
        return $this->dependencia;
    }

    public function setDependencia(?Dep $dependencia): self
    {
        $this->dependencia = $dependencia;

        return $this;
    }



    public function getPerfil(): ?Perfil
    {
        return $this->perfil;
    }

    public function setPerfil(?Perfil $perfil): self
    {
        $this->perfil = $perfil;

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
}
