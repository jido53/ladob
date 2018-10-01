<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UsrRepository")
 */
class Usr
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $usr_id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $usr_nombre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $usr_email;

    /**
     * @ORM\Column(type="boolean")
     */
    private $usr_habil;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $usr_cod;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $usr_iniciales;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pog_codigo;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $usr_voc;

    public function getUsrId(): int
    {
        return $this->usr_id;
    }

    public function setUsrId(int $usr_id): self
    {
        $this->usr_id = $usr_id;

        return $this;
    }

    public function getUsrNombre(): string
    {
        return $this->usr_nombre;
    }

    public function setUsrNombre(string $usr_nombre): self
    {
        $this->usr_nombre = $usr_nombre;

        return $this;
    }

    public function getUsrEmail()
    {
        return $this->usr_email;
    }

    public function setUsrEmail(string $usr_email): self
    {
        $this->usr_email = $usr_email;

        return $this;
    }

    public function getUsrHabil(): bool
    {
        return $this->usr_habil;
    }

    public function setUsrHabil(bool $usr_habil): self
    {
        $this->usr_habil = $usr_habil;

        return $this;
    }

    public function getUsrCod(): string
    {
        return $this->usr_cod;
    }

    public function setUsrCod(string $usr_cod): self
    {
        $this->usr_cod = $usr_cod;

        return $this;
    }

    public function getUsrIniciales(): string
    {
        return $this->usr_iniciales;
    }

    public function setUsrIniciales(string $usr_iniciales): self
    {
        $this->usr_iniciales = $usr_iniciales;

        return $this;
    }

    public function getPogCodigo(): string
    {
        return $this->pog_codigo;
    }

    public function setPogCodigo(string $pog_codigo): self
    {
        $this->pog_codigo = $pog_codigo;

        return $this;
    }

    public function getUsrVoc(): string
    {
        return $this->usr_voc;
    }

    public function setUsrVoc(string $usr_voc): self
    {
        $this->usr_voc = $usr_voc;

        return $this;
    }
}
