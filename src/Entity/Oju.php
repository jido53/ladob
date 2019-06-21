<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\OjuRepository")
 */
class Oju
{

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */

    private $oju_id;


    /**
     * @ORM\Column(type="string", length=150)
     */

    private $oju_descr;


    /**
     * @ORM\Column(type="string", length=6)
     */

    private $oju_cod;


    /**
     * @ORM\Column(type="integer")
     */

    private $oju_estado;


    /**
     * @ORM\Column(type="integer")
     */

    private $oju_activa;


    /**
     * @ORM\Column(type="datetime")
     */

    private $aud_fec_alta;


    /**
     * @ORM\Column(type="datetime")
     */

    private $aud_fec_mod;


    /**
     * @ORM\Column(type="datetime")
     */

    private $aud_fec_baja;


    /**
     * @ORM\Column(type="integer")
     */

    private $aud_usr_alta;


    /**
     * @ORM\Column(type="integer")
     */

    private $aud_usr_mod;


    /**
     * @ORM\Column(type="integer")
     */

    private $aud_usr_baja;


    /**
     * @ORM\Column(type="integer")
     */

    private $fue_id;


    /**
     * @ORM\Column(type="boolean")
     */

    private $oju_tribcol;


    /**
     * @ORM\Column(type="integer")
     */

    private $oju_classor;


    /**
     * @ORM\Column(type="string", length=25)
     */

    private $oju_num_ley;


    /**
     * @ORM\Column(type="string", length=40)
     */

    private $oju_cod_ws;

    public function getOjuId(): ?int
    {
        return $this->oju_id;
    }

    public function getOjuDescr(): ?string
    {
        return $this->oju_descr;
    }

    public function setOjuDescr(string $oju_descr): self
    {
        $this->oju_descr = $oju_descr;

        return $this;
    }

    public function getOjuCod(): ?string
    {
        return $this->oju_cod;
    }

    public function setOjuCod(string $oju_cod): self
    {
        $this->oju_cod = $oju_cod;

        return $this;
    }

    public function getOjuEstado(): ?int
    {
        return $this->oju_estado;
    }

    public function setOjuEstado(int $oju_estado): self
    {
        $this->oju_estado = $oju_estado;

        return $this;
    }

    public function getOjuActiva(): ?int
    {
        return $this->oju_activa;
    }

    public function setOjuActiva(int $oju_activa): self
    {
        $this->oju_activa = $oju_activa;

        return $this;
    }

    public function getAudFecAlta(): ?\DateTimeInterface
    {
        return $this->aud_fec_alta;
    }

    public function setAudFecAlta(\DateTimeInterface $aud_fec_alta): self
    {
        $this->aud_fec_alta = $aud_fec_alta;

        return $this;
    }

    public function getAudFecMod(): ?\DateTimeInterface
    {
        return $this->aud_fec_mod;
    }

    public function setAudFecMod(\DateTimeInterface $aud_fec_mod): self
    {
        $this->aud_fec_mod = $aud_fec_mod;

        return $this;
    }

    public function getAudFecBaja(): ?\DateTimeInterface
    {
        return $this->aud_fec_baja;
    }

    public function setAudFecBaja(\DateTimeInterface $aud_fec_baja): self
    {
        $this->aud_fec_baja = $aud_fec_baja;

        return $this;
    }

    public function getAudUsrAlta(): ?int
    {
        return $this->aud_usr_alta;
    }

    public function setAudUsrAlta(int $aud_usr_alta): self
    {
        $this->aud_usr_alta = $aud_usr_alta;

        return $this;
    }

    public function getAudUsrMod(): ?int
    {
        return $this->aud_usr_mod;
    }

    public function setAudUsrMod(int $aud_usr_mod): self
    {
        $this->aud_usr_mod = $aud_usr_mod;

        return $this;
    }

    public function getAudUsrBaja(): ?int
    {
        return $this->aud_usr_baja;
    }

    public function setAudUsrBaja(int $aud_usr_baja): self
    {
        $this->aud_usr_baja = $aud_usr_baja;

        return $this;
    }

    public function getFueId(): ?int
    {
        return $this->fue_id;
    }

    public function setFueId(int $fue_id): self
    {
        $this->fue_id = $fue_id;

        return $this;
    }

    public function getOjuTribcol(): ?bool
    {
        return $this->oju_tribcol;
    }

    public function setOjuTribcol(bool $oju_tribcol): self
    {
        $this->oju_tribcol = $oju_tribcol;

        return $this;
    }

    public function getOjuClassor(): ?int
    {
        return $this->oju_classor;
    }

    public function setOjuClassor(int $oju_classor): self
    {
        $this->oju_classor = $oju_classor;

        return $this;
    }

    public function getOjuNumLey(): ?string
    {
        return $this->oju_num_ley;
    }

    public function setOjuNumLey(string $oju_num_ley): self
    {
        $this->oju_num_ley = $oju_num_ley;

        return $this;
    }

    public function getOjuCodWs(): ?string
    {
        return $this->oju_cod_ws;
    }

    public function setOjuCodWs(string $oju_cod_ws): self
    {
        $this->oju_cod_ws = $oju_cod_ws;

        return $this;
    }



}