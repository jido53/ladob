<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\ExpPerRepository")
 */
class ExpPer
{
//    /**
//     *
//     * @ORM\Id()
//     * @ORM\GeneratedValue()
//     * @ORM\Column(type="integer")
//     */
//
//    private $exp_id;
//
//
//    /**
//     * @ORM\Column(type="integer")
//     */
//
//    private $per_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $tvi_id;


    /**
     * @ORM\Column(type="datetime")
     */

    private $e_per_fecha;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_activo;


    /**
     * @ORM\Column(type="integer")
     */

    private $inc_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $pro_id;


    /**
     * @ORM\Column(type="datetime")
     */

    private $e_per_fecind;


    /**
     * @ORM\Column(type="datetime")
     */

    private $e_per_fechadesv;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_orden;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_tvi_dte;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_tvi_ddo;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_med_prot_victima;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_tv_imp;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_tv_victima;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_tv_partes;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_men_cargo;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_h_nocargo;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_hijos_cargo;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_sithab_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_nivsoc_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_ocu_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_nivedu_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_cant_hijos;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_edad;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_eci_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $motexc_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $usr_idasig;


    /**
     * @ORM\Column(type="integer")
     */

    private $usr_idexc;


    /**
     * @ORM\Column(type="string")
     */

    private $e_per_obs;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_reserva;


    /**
     * @ORM\Column(type="string")
     */

    private $e_per_alias;


    /**
     * @ORM\Column(type="string")
     */

    private $e_per_menor;


    /**
     * @ORM\Column(type="string")
     */

    private $e_per_incapaz;


    /**
     * @ORM\Column(type="string")
     */

    private $e_per_obsdesv;


    /**
     * @ORM\Column(type="integer")
     */

    private $e_per_tip_asig;


    /**
     * @ORM\Column(type="integer")
     */

    private $per_est_asist;


    /**
     * @ORM\Column(type="integer")
     */

    private $org_id;


    /**
     * @ORM\Column(type="datetime")
     */

    private $fecha_sys;


    /**
     * @ORM\Column(type="datetime")
     */

    private $e_per_fec_med;


    /**
     * @ORM\Column(type="integer")
     */

    private $stp_id;


    /**
     * @ORM\Column(type="string")
     */

    private $detenido;

    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Exp", inversedBy="expPers")
     * @ORM\JoinColumn(nullable=false, name="exp_id", referencedColumnName="exp_id")
     */
    private $expediente;



    /**
     * @ORM\Id()
     * @ORM\ManyToOne(targetEntity="App\Entity\Per", inversedBy="expPers")
     * @ORM\JoinColumn(nullable=false, name="per_id", referencedColumnName="per_id")
     */
    private $persona;

    public function __construct()
    {
        $this->expPers = new ArrayCollection();
    }

    public function getExpId(): ?int
    {
        return $this->exp_id;
    }

    public function getPerId(): ?int
    {
        return $this->per_id;
    }

    public function setPerId(int $per_id): self
    {
        $this->per_id = $per_id;

        return $this;
    }

    public function getTviId(): ?int
    {
        return $this->tvi_id;
    }

    public function setTviId(int $tvi_id): self
    {
        $this->tvi_id = $tvi_id;

        return $this;
    }

    public function getEPerFecha(): ?\DateTimeInterface
    {
        return $this->e_per_fecha;
    }

    public function setEPerFecha(\DateTimeInterface $e_per_fecha): self
    {
        $this->e_per_fecha = $e_per_fecha;

        return $this;
    }

    public function getEPerActivo(): ?int
    {
        return $this->e_per_activo;
    }

    public function setEPerActivo(int $e_per_activo): self
    {
        $this->e_per_activo = $e_per_activo;

        return $this;
    }

    public function getIncId(): ?int
    {
        return $this->inc_id;
    }

    public function setIncId(int $inc_id): self
    {
        $this->inc_id = $inc_id;

        return $this;
    }

    public function getProId(): ?int
    {
        return $this->pro_id;
    }

    public function setProId(int $pro_id): self
    {
        $this->pro_id = $pro_id;

        return $this;
    }

    public function getEPerFecind(): ?\DateTimeInterface
    {
        return $this->e_per_fecind;
    }

    public function setEPerFecind(\DateTimeInterface $e_per_fecind): self
    {
        $this->e_per_fecind = $e_per_fecind;

        return $this;
    }

    public function getEPerFechadesv(): ?\DateTimeInterface
    {
        return $this->e_per_fechadesv;
    }

    public function setEPerFechadesv(\DateTimeInterface $e_per_fechadesv): self
    {
        $this->e_per_fechadesv = $e_per_fechadesv;

        return $this;
    }

    public function getEPerOrden(): ?int
    {
        return $this->e_per_orden;
    }

    public function setEPerOrden(int $e_per_orden): self
    {
        $this->e_per_orden = $e_per_orden;

        return $this;
    }

    public function getEPerTviDte(): ?int
    {
        return $this->e_per_tvi_dte;
    }

    public function setEPerTviDte(int $e_per_tvi_dte): self
    {
        $this->e_per_tvi_dte = $e_per_tvi_dte;

        return $this;
    }

    public function getEPerTviDdo(): ?int
    {
        return $this->e_per_tvi_ddo;
    }

    public function setEPerTviDdo(int $e_per_tvi_ddo): self
    {
        $this->e_per_tvi_ddo = $e_per_tvi_ddo;

        return $this;
    }

    public function getEPerMedProtVictima(): ?int
    {
        return $this->e_per_med_prot_victima;
    }

    public function setEPerMedProtVictima(int $e_per_med_prot_victima): self
    {
        $this->e_per_med_prot_victima = $e_per_med_prot_victima;

        return $this;
    }

    public function getEPerTvImp(): ?int
    {
        return $this->e_per_tv_imp;
    }

    public function setEPerTvImp(int $e_per_tv_imp): self
    {
        $this->e_per_tv_imp = $e_per_tv_imp;

        return $this;
    }

    public function getEPerTvVictima(): ?int
    {
        return $this->e_per_tv_victima;
    }

    public function setEPerTvVictima(int $e_per_tv_victima): self
    {
        $this->e_per_tv_victima = $e_per_tv_victima;

        return $this;
    }

    public function getEPerTvPartes(): ?int
    {
        return $this->e_per_tv_partes;
    }

    public function setEPerTvPartes(int $e_per_tv_partes): self
    {
        $this->e_per_tv_partes = $e_per_tv_partes;

        return $this;
    }

    public function getEPerMenCargo(): ?int
    {
        return $this->e_per_men_cargo;
    }

    public function setEPerMenCargo(int $e_per_men_cargo): self
    {
        $this->e_per_men_cargo = $e_per_men_cargo;

        return $this;
    }

    public function getEPerHNocargo(): ?int
    {
        return $this->e_per_h_nocargo;
    }

    public function setEPerHNocargo(int $e_per_h_nocargo): self
    {
        $this->e_per_h_nocargo = $e_per_h_nocargo;

        return $this;
    }

    public function getEPerHijosCargo(): ?int
    {
        return $this->e_per_hijos_cargo;
    }

    public function setEPerHijosCargo(int $e_per_hijos_cargo): self
    {
        $this->e_per_hijos_cargo = $e_per_hijos_cargo;

        return $this;
    }

    public function getEPerSithabId(): ?int
    {
        return $this->e_per_sithab_id;
    }

    public function setEPerSithabId(int $e_per_sithab_id): self
    {
        $this->e_per_sithab_id = $e_per_sithab_id;

        return $this;
    }

    public function getEPerNivsocId(): ?int
    {
        return $this->e_per_nivsoc_id;
    }

    public function setEPerNivsocId(int $e_per_nivsoc_id): self
    {
        $this->e_per_nivsoc_id = $e_per_nivsoc_id;

        return $this;
    }

    public function getEPerOcuId(): ?int
    {
        return $this->e_per_ocu_id;
    }

    public function setEPerOcuId(int $e_per_ocu_id): self
    {
        $this->e_per_ocu_id = $e_per_ocu_id;

        return $this;
    }

    public function getEPerNiveduId(): ?int
    {
        return $this->e_per_nivedu_id;
    }

    public function setEPerNiveduId(int $e_per_nivedu_id): self
    {
        $this->e_per_nivedu_id = $e_per_nivedu_id;

        return $this;
    }

    public function getEPerCantHijos(): ?int
    {
        return $this->e_per_cant_hijos;
    }

    public function setEPerCantHijos(int $e_per_cant_hijos): self
    {
        $this->e_per_cant_hijos = $e_per_cant_hijos;

        return $this;
    }

    public function getEPerEdad(): ?int
    {
        return $this->e_per_edad;
    }

    public function setEPerEdad(int $e_per_edad): self
    {
        $this->e_per_edad = $e_per_edad;

        return $this;
    }

    public function getEPerEciId(): ?int
    {
        return $this->e_per_eci_id;
    }

    public function setEPerEciId(int $e_per_eci_id): self
    {
        $this->e_per_eci_id = $e_per_eci_id;

        return $this;
    }

    public function getMotexcId(): ?int
    {
        return $this->motexc_id;
    }

    public function setMotexcId(int $motexc_id): self
    {
        $this->motexc_id = $motexc_id;

        return $this;
    }

    public function getUsrIdasig(): ?int
    {
        return $this->usr_idasig;
    }

    public function setUsrIdasig(int $usr_idasig): self
    {
        $this->usr_idasig = $usr_idasig;

        return $this;
    }

    public function getUsrIdexc(): ?int
    {
        return $this->usr_idexc;
    }

    public function setUsrIdexc(int $usr_idexc): self
    {
        $this->usr_idexc = $usr_idexc;

        return $this;
    }

    public function getEPerObs(): ?string
    {
        return $this->e_per_obs;
    }

    public function setEPerObs(string $e_per_obs): self
    {
        $this->e_per_obs = $e_per_obs;

        return $this;
    }

    public function getEPerReserva(): ?int
    {
        return $this->e_per_reserva;
    }

    public function setEPerReserva(int $e_per_reserva): self
    {
        $this->e_per_reserva = $e_per_reserva;

        return $this;
    }

    public function getEPerAlias(): ?string
    {
        return $this->e_per_alias;
    }

    public function setEPerAlias(string $e_per_alias): self
    {
        $this->e_per_alias = $e_per_alias;

        return $this;
    }

    public function getEPerMenor(): ?string
    {
        return $this->e_per_menor;
    }

    public function setEPerMenor(string $e_per_menor): self
    {
        $this->e_per_menor = $e_per_menor;

        return $this;
    }

    public function getEPerIncapaz(): ?string
    {
        return $this->e_per_incapaz;
    }

    public function setEPerIncapaz(string $e_per_incapaz): self
    {
        $this->e_per_incapaz = $e_per_incapaz;

        return $this;
    }

    public function getEPerObsdesv(): ?string
    {
        return $this->e_per_obsdesv;
    }

    public function setEPerObsdesv(string $e_per_obsdesv): self
    {
        $this->e_per_obsdesv = $e_per_obsdesv;

        return $this;
    }

    public function getEPerTipAsig(): ?int
    {
        return $this->e_per_tip_asig;
    }

    public function setEPerTipAsig(int $e_per_tip_asig): self
    {
        $this->e_per_tip_asig = $e_per_tip_asig;

        return $this;
    }

    public function getPerEstAsist(): ?int
    {
        return $this->per_est_asist;
    }

    public function setPerEstAsist(int $per_est_asist): self
    {
        $this->per_est_asist = $per_est_asist;

        return $this;
    }

    public function getOrgId(): ?int
    {
        return $this->org_id;
    }

    public function setOrgId(int $org_id): self
    {
        $this->org_id = $org_id;

        return $this;
    }

    public function getFechaSys(): ?\DateTimeInterface
    {
        return $this->fecha_sys;
    }

    public function setFechaSys(\DateTimeInterface $fecha_sys): self
    {
        $this->fecha_sys = $fecha_sys;

        return $this;
    }

    public function getEPerFecMed(): ?\DateTimeInterface
    {
        return $this->e_per_fec_med;
    }

    public function setEPerFecMed(\DateTimeInterface $e_per_fec_med): self
    {
        $this->e_per_fec_med = $e_per_fec_med;

        return $this;
    }

    public function getStpId(): ?int
    {
        return $this->stp_id;
    }

    public function setStpId(int $stp_id): self
    {
        $this->stp_id = $stp_id;

        return $this;
    }

    public function getDetenido(): ?string
    {
        return $this->detenido;
    }

    public function setDetenido(string $detenido): self
    {
        $this->detenido = $detenido;

        return $this;
    }

    public function getExpediente(): ?self
    {
        return $this->expediente;
    }

    public function setExpediente(?self $expediente): self
    {
        $this->expediente = $expediente;

        return $this;
    }

    public function getPersona(): ?Per
    {
        return $this->persona;
    }

    public function setPersona(?Per $persona): self
    {
        $this->persona = $persona;

        return $this;
    }




}
