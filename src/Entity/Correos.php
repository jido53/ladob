<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CorreosRepository")
 * @ORM\Table(name="efc_aprocesar")
 */
class Correos
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $efc_a_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $efc_id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $ent_id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $ent_tipo;

    /**
     * @ORM\Column(type="datetime")
     */
    private $efc_a_feccre;

    /**
     * @ORM\Column(type="datetime")
     */
    private $efc_a_fecpro;

    /**
     * @ORM\Column(type="integer")
     */
    private $efc_a_estado;

    /**
     * @ORM\Column(type="string", length=200)
     */
    private $efc_a_asunto;

    /**
     * @ORM\Column(type="text")
     */
    private $efc_a_cuerpo;

    /**
     * @ORM\Column(type="string", length=150, nullable=true)
     */
    private $efc_a_destino;


    public function getEfcAId(): int
    {
        return $this->efc_a_id;
    }

    public function setEfcAId(int $efc_a_id): self
    {
        $this->efc_a_id = $efc_a_id;

        return $this;
    }

    public function getEfcId(): int
    {
        return $this->efc_id;
    }

    public function setEfcId(int $efc_id): self
    {
        $this->efc_id = $efc_id;

        return $this;
    }

    public function getEntId(): string
    {
        return $this->ent_id;
    }

    public function setEntId(string $ent_id): self
    {
        $this->ent_id = $ent_id;

        return $this;
    }

    public function getEntTipo(): string
    {
        return $this->ent_tipo;
    }

    public function setEntTipo(string $ent_tipo): self
    {
        $this->ent_tipo = $ent_tipo;

        return $this;
    }

    public function getEfcAFeccre(): \DateTimeInterface
    {
        return $this->efc_a_feccre;
    }

    public function setEfcAFeccre(\DateTimeInterface $efc_a_feccre): self
    {
        $this->efc_a_feccre = $efc_a_feccre;

        return $this;
    }

    public function getEfcAFecpro(): \DateTimeInterface
    {
        return $this->efc_a_fecpro;
    }

    public function setEfcAFecpro(\DateTimeInterface $efc_a_fecpro): self
    {
        $this->efc_a_fecpro = $efc_a_fecpro;

        return $this;
    }

    public function getEfcAEstado(): int
    {
        return $this->efc_a_estado;
    }

    public function setEfcAEstado(int $efc_a_estado): self
    {
        $this->efc_a_estado = $efc_a_estado;

        return $this;
    }

    public function getEfcAAsunto(): ?string
    {
        return $this->efc_a_asunto;
    }

    public function setEfcAAsunto(?string $efc_a_asunto): self
    {
        $this->efc_a_asunto = $efc_a_asunto;

        return $this;
    }

    public function getEfcACuerpo(): string
    {
        return $this->efc_a_cuerpo;
    }

    public function setEfcACuerpo(string $efc_a_cuerpo): self
    {
        $this->efc_a_cuerpo = $efc_a_cuerpo;

        return $this;
    }

    public function getEfcADestino(): ?string
    {
        return $this->efc_a_destino;
    }

    public function setEfcADestino(?string $efc_a_destino): self
    {
        $this->efc_a_destino = $efc_a_destino;

        return $this;
    }
}
