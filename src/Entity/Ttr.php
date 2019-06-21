<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *@ORM\Entity(repositoryClass="App\Repository\TtrRepository")
 */
class Ttr
{

    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */

    private $ttr_id;


    /**
     * @ORM\Column(type="string", length=120)
     */

    private $ttr_descr;


    /**
     * @ORM\Column(type="integer")
     */

    private $tpr_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $ttr_sorteo;


    /**
     * @ORM\Column(type="integer")
     */

    private $ttr_catest;


    /**
     * @ORM\Column(type="integer")
     */

    private $ttr_activa;


    /**
     * @ORM\Column(type="integer")
     */

    private $fue_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $cso_idter;


    /**
     * @ORM\Column(type="integer")
     */

    private $cso_idseg;


    /**
     * @ORM\Column(type="integer")
     */

    private $cso_idpri;


    /**
     * @ORM\Column(type="string", length=3)
     */

    private $ttr_cod;


    /**
     * @ORM\Column(type="integer")
     */

    private $cst_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $ttr_asig_manual;


    /**
     * @ORM\Column(type="integer")
     */

    private $ttr_nivacc;


    /**
     * @ORM\Column(type="integer")
     */

    private $cso_idsor;


    /**
     * @ORM\Column(type="datetime")
     */

    private $ttr_fecvig;


    /**
     * @ORM\Column(type="datetime")
     */

    private $ttr_feccad;


    /**
     * @ORM\Column(type="integer")
     */

    private $ttr_juicio_col;


    /**
     * @ORM\Column(type="integer")
     */

    private $ttr_estado;


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
     * @ORM\Column(type="string", length=40)
     */

    private $ttr_cod_ws;

    public function getTtrId(): ?int
    {
        return $this->ttr_id;
    }

    public function getTtrDescr(): ?string
    {
        return $this->ttr_descr;
    }

    public function setTtrDescr(string $ttr_descr): self
    {
        $this->ttr_descr = $ttr_descr;

        return $this;
    }

    public function getTprId(): ?int
    {
        return $this->tpr_id;
    }

    public function setTprId(int $tpr_id): self
    {
        $this->tpr_id = $tpr_id;

        return $this;
    }

    public function getTtrSorteo(): ?int
    {
        return $this->ttr_sorteo;
    }

    public function setTtrSorteo(int $ttr_sorteo): self
    {
        $this->ttr_sorteo = $ttr_sorteo;

        return $this;
    }

    public function getTtrCatest(): ?int
    {
        return $this->ttr_catest;
    }

    public function setTtrCatest(int $ttr_catest): self
    {
        $this->ttr_catest = $ttr_catest;

        return $this;
    }

    public function getTtrActiva(): ?int
    {
        return $this->ttr_activa;
    }

    public function setTtrActiva(int $ttr_activa): self
    {
        $this->ttr_activa = $ttr_activa;

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

    public function getCsoIdter(): ?int
    {
        return $this->cso_idter;
    }

    public function setCsoIdter(int $cso_idter): self
    {
        $this->cso_idter = $cso_idter;

        return $this;
    }

    public function getCsoIdseg(): ?int
    {
        return $this->cso_idseg;
    }

    public function setCsoIdseg(int $cso_idseg): self
    {
        $this->cso_idseg = $cso_idseg;

        return $this;
    }

    public function getCsoIdpri(): ?int
    {
        return $this->cso_idpri;
    }

    public function setCsoIdpri(int $cso_idpri): self
    {
        $this->cso_idpri = $cso_idpri;

        return $this;
    }

    public function getTtrCod(): ?string
    {
        return $this->ttr_cod;
    }

    public function setTtrCod(string $ttr_cod): self
    {
        $this->ttr_cod = $ttr_cod;

        return $this;
    }

    public function getCstId(): ?int
    {
        return $this->cst_id;
    }

    public function setCstId(int $cst_id): self
    {
        $this->cst_id = $cst_id;

        return $this;
    }

    public function getTtrAsigManual(): ?int
    {
        return $this->ttr_asig_manual;
    }

    public function setTtrAsigManual(int $ttr_asig_manual): self
    {
        $this->ttr_asig_manual = $ttr_asig_manual;

        return $this;
    }

    public function getTtrNivacc(): ?int
    {
        return $this->ttr_nivacc;
    }

    public function setTtrNivacc(int $ttr_nivacc): self
    {
        $this->ttr_nivacc = $ttr_nivacc;

        return $this;
    }

    public function getCsoIdsor(): ?int
    {
        return $this->cso_idsor;
    }

    public function setCsoIdsor(int $cso_idsor): self
    {
        $this->cso_idsor = $cso_idsor;

        return $this;
    }

    public function getTtrFecvig(): ?\DateTimeInterface
    {
        return $this->ttr_fecvig;
    }

    public function setTtrFecvig(\DateTimeInterface $ttr_fecvig): self
    {
        $this->ttr_fecvig = $ttr_fecvig;

        return $this;
    }

    public function getTtrFeccad(): ?\DateTimeInterface
    {
        return $this->ttr_feccad;
    }

    public function setTtrFeccad(\DateTimeInterface $ttr_feccad): self
    {
        $this->ttr_feccad = $ttr_feccad;

        return $this;
    }

    public function getTtrJuicioCol(): ?int
    {
        return $this->ttr_juicio_col;
    }

    public function setTtrJuicioCol(int $ttr_juicio_col): self
    {
        $this->ttr_juicio_col = $ttr_juicio_col;

        return $this;
    }

    public function getTtrEstado(): ?int
    {
        return $this->ttr_estado;
    }

    public function setTtrEstado(int $ttr_estado): self
    {
        $this->ttr_estado = $ttr_estado;

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

    public function getTtrCodWs(): ?string
    {
        return $this->ttr_cod_ws;
    }

    public function setTtrCodWs(string $ttr_cod_ws): self
    {
        $this->ttr_cod_ws = $ttr_cod_ws;

        return $this;
    }



}
