<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExpAdiRepository")
 * @ORM\Table(name="exp_adi")
 */
class ExpAdi
{

    /**
     * @ORM\Id()
     * @ORM\OneToOne(targetEntity="App\Entity\Exp", inversedBy="expAdi", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="exp_id", referencedColumnName="exp_id", nullable=false)
     */
    private $exp;


    /**
     * @ORM\Column(type="string", length=1600, nullable=true)
     */

    private $a_exp_obs;


    /**
     * @ORM\Column(type="string", length=12, nullable=true)
     */

    private $a_exp_op;


    /**
     * @ORM\Column(type="decimal", nullable=true)
     */

    private $a_exp_mon;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $a_exp_fec;


    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */

    private $a_exp_imp;


    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */

    private $sge_usu_crea;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $sge_dep_crea;


    /**
     * @ORM\Column(type="decimal", nullable=true)
     */

    private $mon_dec;


    /**
     * @ORM\Column(type="decimal", nullable=true)
     */

    private $a_exp_cue;


    /**
     * @ORM\Column(type="decimal", nullable=true)
     */

    private $a_exp_si_emf;


    /**
     * @ORM\Column(type="decimal", nullable=true)
     */

    private $a_exp_sf_emf;


    /**
     * @ORM\Column(type="decimal", nullable=true)
     */

    private $a_exp_ing_emf;


    /**
     * @ORM\Column(type="decimal", nullable=true)
     */

    private $a_exp_egr_emf;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $a_exp_fec_emf;


    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */

    private $a_exp_inic;


    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */

    private $a_exp_cont;


    /**
     * @ORM\Column(type="string", length=35, nullable=true)
     */

    private $a_exp_trim;


    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */

    private $a_exp_direc;


    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */

    private $a_exp_tel;


    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */

    private $lev_contr;


    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */

    private $lev_casa;


    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */

    private $lev_mz;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $lev_f_ent;


    /**
     * @ORM\Column(type="decimal", nullable=true)
     */

    private $lev_c_viv;


    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */

    private $lev_barrio;


    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */

    private $lev_loc;


    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */

    private $lev_lic;


    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */

    private $lev_plan;


    /**
     * @ORM\Column(type="decimal", nullable=true)
     */

    private $mon_tasa;


    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */

    private $a_exp_otr_ttr;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $a_usr_crea;


    /**
     * @ORM\Column(type="date", nullable=true)
     */

    private $exp_fec_tas_dem;


    /**
     * @ORM\Column(type="date", nullable=true)
     */

    private $exp_aper_prueba;


    /**
     * @ORM\Column(type="date", nullable=true)
     */

    private $exp_fec_llama_sent;


    /**
     * @ORM\Column(type="date", nullable=true)
     */

    private $exp_fec_sent;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $org_id;


    /**
     * @ORM\Column(type="date", nullable=true)
     */

    private $exp_fec_eje_sent;


    /**
     * @ORM\Column(type="date", nullable=true)
     */

    private $exp_con_dem;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $moneda;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $mon_cau;


    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */

    private $exp_otr_obs;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $exp_monto;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $vocal;


    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */

    private $exp_medidor;


    /**
     * @ORM\Column(type="date", nullable=true)
     */

    private $fec_fall;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $exp_tipo_acc;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $exp_cant_max_tit;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $exp_cant_min_tit;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $exp_cant_acc;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $exp_escritura;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $exp_duracion;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $exp_mon_tas_sel;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $exp_mon_tas_jus;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $exp_legajo;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $exp_fojas;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $exp_libro;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $exp_asiento;


    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */

    private $exp_folio;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $exp_fec_egre_tra;


    /**
     * @ORM\Column(type="date", nullable=true)
     */

    private $exp_fec_fall;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $exp_fec_rem_tra;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $a_exp_cod_agip;


    /**
     * @ORM\Column(type="string", length=-5, nullable=true)
     */

    private $a_exp_ente;


    /**
     * @ORM\Column(type="string", length=-5, nullable=true)
     */

    private $a_exp_vehiculo;


    /**
     * @ORM\Column(type="string", length=12, nullable=true)
     */

    private $a_exp_nropolicial;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $mca_id;


    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */

    private $exp_control_uacf;


    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */

    private $exp_uacf;


    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */

    private $nro_kiwi;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $exp_monto_reclamado;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $exp_monto_sentec;


    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */

    private $a_exp_pjn_num;


    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */

    private $a_exp_pjn_juzg;


    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */

    private $a_exp_pjn_car;


    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */

    private $obs_caratula;


    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */

    private $exp_car_obs;


    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */

    private $exp_flagrante;


    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */

    private $violencia_domestica;


    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */

    private $exp_tiene_menor;


    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */

    private $a_exp_origen;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */

    private $a_exp_vocalia;


    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */

    private $a_exp_admin;


    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */

    private $a_num_exp_admin;


    /**
     * @ORM\Column(type="string", length=-5, nullable=true)
     */

    private $a_otr_obs;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */

    private $exp_medida_cautelar;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $exp_fecha_policial;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $exp_org_tib1;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $exp_org_tib2;


    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */

    private $dosaje_alcohol;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $exp_causa;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $exp_sit_pro;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $org_def_int;


    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */

    private $exp_prorrogas;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $exp_lpu;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_mod;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $org_juz_tram;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $org_juz_juicio;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $org_juz_actual;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $sec_actual;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $org_ubi_origen;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $org_juz_origen;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $sec_origen;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $org_def_cam;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $sec_cam;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $org_def_adj;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $org_juz_adj;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $sec_adj;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $sed_id;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $mod_ing_id;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $org_solicitante;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $a_resolver;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $tem_dii_id;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_aviso;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $usr_a_notif;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $ttr_tip_pro;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $org_area;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_ing_adj;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $org_ori_con;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $org_asignado;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $cso_id;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $cau_conjunta;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $org_conjunta;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $bar_men_id;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $int_org_estatal;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $exp_num_fed;


    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */

    private $carat_inc_fed;


    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */

    private $exp_inc_fed;


    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */

    private $carat_legajo_fed;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $tex_dii_id;


    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */

    private $dom_inmueble;


    /**
     * @ORM\Column(type="date", nullable=true)
     */

    private $fec_desalojo;


    /**
     * @ORM\Column(type="date", nullable=true)
     */

    private $fec_desocupa;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $exp_num_ped_dri;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $exp_num_ped_dat;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $fue_id;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $com_int;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $def_esp;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $exp_fec_sol;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $exp_fec_egr;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $efe_id;


    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */

    private $lug_det;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $com_det;


    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */

    private $violencia_genero;


    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */

    private $fec_plazo_susp;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_ing_just;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_acta;


    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */

    private $adulto_imp;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $usr_idresp_cam;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $usr_idresp_sec;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $usr_idresp_2;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $usr_idresp_3;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */

    private $arch_numero_expe;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */

    private $arch_proxceso;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */

    private $arch_cuerpo;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */

    private $arch_actor;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */

    private $arch_contra;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */

    private $arch_cant_pags;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $mod_ing_ccd;





    public function getAExpObs(): ?string
    {
        return $this->a_exp_obs;
    }

    public function setAExpObs(?string $a_exp_obs): self
    {
        $this->a_exp_obs = $a_exp_obs;

        return $this;
    }

    public function getAExpOp(): ?string
    {
        return $this->a_exp_op;
    }

    public function setAExpOp(?string $a_exp_op): self
    {
        $this->a_exp_op = $a_exp_op;

        return $this;
    }

    public function getAExpMon()
    {
        return $this->a_exp_mon;
    }

    public function setAExpMon($a_exp_mon): self
    {
        $this->a_exp_mon = $a_exp_mon;

        return $this;
    }

    public function getAExpFec(): ?\DateTimeInterface
    {
        return $this->a_exp_fec;
    }

    public function setAExpFec(?\DateTimeInterface $a_exp_fec): self
    {
        $this->a_exp_fec = $a_exp_fec;

        return $this;
    }

    public function getAExpImp(): ?string
    {
        return $this->a_exp_imp;
    }

    public function setAExpImp(?string $a_exp_imp): self
    {
        $this->a_exp_imp = $a_exp_imp;

        return $this;
    }

    public function getSgeUsuCrea(): ?string
    {
        return $this->sge_usu_crea;
    }

    public function setSgeUsuCrea(?string $sge_usu_crea): self
    {
        $this->sge_usu_crea = $sge_usu_crea;

        return $this;
    }

    public function getSgeDepCrea(): ?string
    {
        return $this->sge_dep_crea;
    }

    public function setSgeDepCrea(?string $sge_dep_crea): self
    {
        $this->sge_dep_crea = $sge_dep_crea;

        return $this;
    }

    public function getMonDec()
    {
        return $this->mon_dec;
    }

    public function setMonDec($mon_dec): self
    {
        $this->mon_dec = $mon_dec;

        return $this;
    }

    public function getAExpCue()
    {
        return $this->a_exp_cue;
    }

    public function setAExpCue($a_exp_cue): self
    {
        $this->a_exp_cue = $a_exp_cue;

        return $this;
    }

    public function getAExpSiEmf()
    {
        return $this->a_exp_si_emf;
    }

    public function setAExpSiEmf($a_exp_si_emf): self
    {
        $this->a_exp_si_emf = $a_exp_si_emf;

        return $this;
    }

    public function getAExpSfEmf()
    {
        return $this->a_exp_sf_emf;
    }

    public function setAExpSfEmf($a_exp_sf_emf): self
    {
        $this->a_exp_sf_emf = $a_exp_sf_emf;

        return $this;
    }

    public function getAExpIngEmf()
    {
        return $this->a_exp_ing_emf;
    }

    public function setAExpIngEmf($a_exp_ing_emf): self
    {
        $this->a_exp_ing_emf = $a_exp_ing_emf;

        return $this;
    }

    public function getAExpEgrEmf()
    {
        return $this->a_exp_egr_emf;
    }

    public function setAExpEgrEmf($a_exp_egr_emf): self
    {
        $this->a_exp_egr_emf = $a_exp_egr_emf;

        return $this;
    }

    public function getAExpFecEmf(): ?\DateTimeInterface
    {
        return $this->a_exp_fec_emf;
    }

    public function setAExpFecEmf(?\DateTimeInterface $a_exp_fec_emf): self
    {
        $this->a_exp_fec_emf = $a_exp_fec_emf;

        return $this;
    }

    public function getAExpInic(): ?string
    {
        return $this->a_exp_inic;
    }

    public function setAExpInic(?string $a_exp_inic): self
    {
        $this->a_exp_inic = $a_exp_inic;

        return $this;
    }

    public function getAExpCont(): ?string
    {
        return $this->a_exp_cont;
    }

    public function setAExpCont(?string $a_exp_cont): self
    {
        $this->a_exp_cont = $a_exp_cont;

        return $this;
    }

    public function getAExpTrim(): ?string
    {
        return $this->a_exp_trim;
    }

    public function setAExpTrim(?string $a_exp_trim): self
    {
        $this->a_exp_trim = $a_exp_trim;

        return $this;
    }

    public function getAExpDirec(): ?string
    {
        return $this->a_exp_direc;
    }

    public function setAExpDirec(?string $a_exp_direc): self
    {
        $this->a_exp_direc = $a_exp_direc;

        return $this;
    }

    public function getAExpTel(): ?string
    {
        return $this->a_exp_tel;
    }

    public function setAExpTel(?string $a_exp_tel): self
    {
        $this->a_exp_tel = $a_exp_tel;

        return $this;
    }

    public function getLevContr(): ?string
    {
        return $this->lev_contr;
    }

    public function setLevContr(?string $lev_contr): self
    {
        $this->lev_contr = $lev_contr;

        return $this;
    }

    public function getLevCasa(): ?string
    {
        return $this->lev_casa;
    }

    public function setLevCasa(?string $lev_casa): self
    {
        $this->lev_casa = $lev_casa;

        return $this;
    }

    public function getLevMz(): ?string
    {
        return $this->lev_mz;
    }

    public function setLevMz(?string $lev_mz): self
    {
        $this->lev_mz = $lev_mz;

        return $this;
    }

    public function getLevFEnt(): ?\DateTimeInterface
    {
        return $this->lev_f_ent;
    }

    public function setLevFEnt(?\DateTimeInterface $lev_f_ent): self
    {
        $this->lev_f_ent = $lev_f_ent;

        return $this;
    }

    public function getLevCViv()
    {
        return $this->lev_c_viv;
    }

    public function setLevCViv($lev_c_viv): self
    {
        $this->lev_c_viv = $lev_c_viv;

        return $this;
    }

    public function getLevBarrio(): ?string
    {
        return $this->lev_barrio;
    }

    public function setLevBarrio(?string $lev_barrio): self
    {
        $this->lev_barrio = $lev_barrio;

        return $this;
    }

    public function getLevLoc(): ?string
    {
        return $this->lev_loc;
    }

    public function setLevLoc(?string $lev_loc): self
    {
        $this->lev_loc = $lev_loc;

        return $this;
    }

    public function getLevLic(): ?string
    {
        return $this->lev_lic;
    }

    public function setLevLic(?string $lev_lic): self
    {
        $this->lev_lic = $lev_lic;

        return $this;
    }

    public function getLevPlan(): ?string
    {
        return $this->lev_plan;
    }

    public function setLevPlan(?string $lev_plan): self
    {
        $this->lev_plan = $lev_plan;

        return $this;
    }

    public function getMonTasa()
    {
        return $this->mon_tasa;
    }

    public function setMonTasa($mon_tasa): self
    {
        $this->mon_tasa = $mon_tasa;

        return $this;
    }

    public function getAExpOtrTtr(): ?string
    {
        return $this->a_exp_otr_ttr;
    }

    public function setAExpOtrTtr(?string $a_exp_otr_ttr): self
    {
        $this->a_exp_otr_ttr = $a_exp_otr_ttr;

        return $this;
    }

    public function getAUsrCrea(): ?string
    {
        return $this->a_usr_crea;
    }

    public function setAUsrCrea(?string $a_usr_crea): self
    {
        $this->a_usr_crea = $a_usr_crea;

        return $this;
    }

    public function getExpFecTasDem(): ?\DateTimeInterface
    {
        return $this->exp_fec_tas_dem;
    }

    public function setExpFecTasDem(?\DateTimeInterface $exp_fec_tas_dem): self
    {
        $this->exp_fec_tas_dem = $exp_fec_tas_dem;

        return $this;
    }

    public function getExpAperPrueba(): ?\DateTimeInterface
    {
        return $this->exp_aper_prueba;
    }

    public function setExpAperPrueba(?\DateTimeInterface $exp_aper_prueba): self
    {
        $this->exp_aper_prueba = $exp_aper_prueba;

        return $this;
    }

    public function getExpFecLlamaSent(): ?\DateTimeInterface
    {
        return $this->exp_fec_llama_sent;
    }

    public function setExpFecLlamaSent(?\DateTimeInterface $exp_fec_llama_sent): self
    {
        $this->exp_fec_llama_sent = $exp_fec_llama_sent;

        return $this;
    }

    public function getExpFecSent(): ?\DateTimeInterface
    {
        return $this->exp_fec_sent;
    }

    public function setExpFecSent(?\DateTimeInterface $exp_fec_sent): self
    {
        $this->exp_fec_sent = $exp_fec_sent;

        return $this;
    }

    public function getOrgId(): ?int
    {
        return $this->org_id;
    }

    public function setOrgId(?int $org_id): self
    {
        $this->org_id = $org_id;

        return $this;
    }

    public function getExpFecEjeSent(): ?\DateTimeInterface
    {
        return $this->exp_fec_eje_sent;
    }

    public function setExpFecEjeSent(?\DateTimeInterface $exp_fec_eje_sent): self
    {
        $this->exp_fec_eje_sent = $exp_fec_eje_sent;

        return $this;
    }

    public function getExpConDem(): ?\DateTimeInterface
    {
        return $this->exp_con_dem;
    }

    public function setExpConDem(?\DateTimeInterface $exp_con_dem): self
    {
        $this->exp_con_dem = $exp_con_dem;

        return $this;
    }

    public function getMoneda(): ?string
    {
        return $this->moneda;
    }

    public function setMoneda(?string $moneda): self
    {
        $this->moneda = $moneda;

        return $this;
    }

    public function getMonCau(): ?string
    {
        return $this->mon_cau;
    }

    public function setMonCau(?string $mon_cau): self
    {
        $this->mon_cau = $mon_cau;

        return $this;
    }

    public function getExpOtrObs(): ?string
    {
        return $this->exp_otr_obs;
    }

    public function setExpOtrObs(?string $exp_otr_obs): self
    {
        $this->exp_otr_obs = $exp_otr_obs;

        return $this;
    }

    public function getExpMonto(): ?string
    {
        return $this->exp_monto;
    }

    public function setExpMonto(?string $exp_monto): self
    {
        $this->exp_monto = $exp_monto;

        return $this;
    }

    public function getVocal(): ?string
    {
        return $this->vocal;
    }

    public function setVocal(?string $vocal): self
    {
        $this->vocal = $vocal;

        return $this;
    }

    public function getExpMedidor(): ?string
    {
        return $this->exp_medidor;
    }

    public function setExpMedidor(?string $exp_medidor): self
    {
        $this->exp_medidor = $exp_medidor;

        return $this;
    }

    public function getFecFall(): ?\DateTimeInterface
    {
        return $this->fec_fall;
    }

    public function setFecFall(?\DateTimeInterface $fec_fall): self
    {
        $this->fec_fall = $fec_fall;

        return $this;
    }

    public function getExpTipoAcc(): ?string
    {
        return $this->exp_tipo_acc;
    }

    public function setExpTipoAcc(?string $exp_tipo_acc): self
    {
        $this->exp_tipo_acc = $exp_tipo_acc;

        return $this;
    }

    public function getExpCantMaxTit(): ?string
    {
        return $this->exp_cant_max_tit;
    }

    public function setExpCantMaxTit(?string $exp_cant_max_tit): self
    {
        $this->exp_cant_max_tit = $exp_cant_max_tit;

        return $this;
    }

    public function getExpCantMinTit(): ?string
    {
        return $this->exp_cant_min_tit;
    }

    public function setExpCantMinTit(?string $exp_cant_min_tit): self
    {
        $this->exp_cant_min_tit = $exp_cant_min_tit;

        return $this;
    }

    public function getExpCantAcc(): ?string
    {
        return $this->exp_cant_acc;
    }

    public function setExpCantAcc(?string $exp_cant_acc): self
    {
        $this->exp_cant_acc = $exp_cant_acc;

        return $this;
    }

    public function getExpEscritura(): ?string
    {
        return $this->exp_escritura;
    }

    public function setExpEscritura(?string $exp_escritura): self
    {
        $this->exp_escritura = $exp_escritura;

        return $this;
    }

    public function getExpDuracion(): ?string
    {
        return $this->exp_duracion;
    }

    public function setExpDuracion(?string $exp_duracion): self
    {
        $this->exp_duracion = $exp_duracion;

        return $this;
    }

    public function getExpMonTasSel(): ?string
    {
        return $this->exp_mon_tas_sel;
    }

    public function setExpMonTasSel(?string $exp_mon_tas_sel): self
    {
        $this->exp_mon_tas_sel = $exp_mon_tas_sel;

        return $this;
    }

    public function getExpMonTasJus(): ?string
    {
        return $this->exp_mon_tas_jus;
    }

    public function setExpMonTasJus(?string $exp_mon_tas_jus): self
    {
        $this->exp_mon_tas_jus = $exp_mon_tas_jus;

        return $this;
    }

    public function getExpLegajo(): ?string
    {
        return $this->exp_legajo;
    }

    public function setExpLegajo(?string $exp_legajo): self
    {
        $this->exp_legajo = $exp_legajo;

        return $this;
    }

    public function getExpFojas(): ?string
    {
        return $this->exp_fojas;
    }

    public function setExpFojas(?string $exp_fojas): self
    {
        $this->exp_fojas = $exp_fojas;

        return $this;
    }

    public function getExpLibro(): ?string
    {
        return $this->exp_libro;
    }

    public function setExpLibro(?string $exp_libro): self
    {
        $this->exp_libro = $exp_libro;

        return $this;
    }

    public function getExpAsiento(): ?string
    {
        return $this->exp_asiento;
    }

    public function setExpAsiento(?string $exp_asiento): self
    {
        $this->exp_asiento = $exp_asiento;

        return $this;
    }

    public function getExpFolio(): ?string
    {
        return $this->exp_folio;
    }

    public function setExpFolio(?string $exp_folio): self
    {
        $this->exp_folio = $exp_folio;

        return $this;
    }

    public function getExpFecEgreTra(): ?\DateTimeInterface
    {
        return $this->exp_fec_egre_tra;
    }

    public function setExpFecEgreTra(?\DateTimeInterface $exp_fec_egre_tra): self
    {
        $this->exp_fec_egre_tra = $exp_fec_egre_tra;

        return $this;
    }

    public function getExpFecFall(): ?\DateTimeInterface
    {
        return $this->exp_fec_fall;
    }

    public function setExpFecFall(?\DateTimeInterface $exp_fec_fall): self
    {
        $this->exp_fec_fall = $exp_fec_fall;

        return $this;
    }

    public function getExpFecRemTra(): ?\DateTimeInterface
    {
        return $this->exp_fec_rem_tra;
    }

    public function setExpFecRemTra(?\DateTimeInterface $exp_fec_rem_tra): self
    {
        $this->exp_fec_rem_tra = $exp_fec_rem_tra;

        return $this;
    }

    public function getAExpCodAgip(): ?string
    {
        return $this->a_exp_cod_agip;
    }

    public function setAExpCodAgip(?string $a_exp_cod_agip): self
    {
        $this->a_exp_cod_agip = $a_exp_cod_agip;

        return $this;
    }

    public function getAExpEnte(): ?string
    {
        return $this->a_exp_ente;
    }

    public function setAExpEnte(?string $a_exp_ente): self
    {
        $this->a_exp_ente = $a_exp_ente;

        return $this;
    }

    public function getAExpVehiculo(): ?string
    {
        return $this->a_exp_vehiculo;
    }

    public function setAExpVehiculo(?string $a_exp_vehiculo): self
    {
        $this->a_exp_vehiculo = $a_exp_vehiculo;

        return $this;
    }

    public function getAExpNropolicial(): ?string
    {
        return $this->a_exp_nropolicial;
    }

    public function setAExpNropolicial(?string $a_exp_nropolicial): self
    {
        $this->a_exp_nropolicial = $a_exp_nropolicial;

        return $this;
    }

    public function getMcaId(): ?int
    {
        return $this->mca_id;
    }

    public function setMcaId(?int $mca_id): self
    {
        $this->mca_id = $mca_id;

        return $this;
    }

    public function getExpControlUacf(): ?string
    {
        return $this->exp_control_uacf;
    }

    public function setExpControlUacf(?string $exp_control_uacf): self
    {
        $this->exp_control_uacf = $exp_control_uacf;

        return $this;
    }

    public function getExpUacf(): ?string
    {
        return $this->exp_uacf;
    }

    public function setExpUacf(?string $exp_uacf): self
    {
        $this->exp_uacf = $exp_uacf;

        return $this;
    }

    public function getNroKiwi(): ?string
    {
        return $this->nro_kiwi;
    }

    public function setNroKiwi(?string $nro_kiwi): self
    {
        $this->nro_kiwi = $nro_kiwi;

        return $this;
    }

    public function getExpMontoReclamado(): ?int
    {
        return $this->exp_monto_reclamado;
    }

    public function setExpMontoReclamado(?int $exp_monto_reclamado): self
    {
        $this->exp_monto_reclamado = $exp_monto_reclamado;

        return $this;
    }

    public function getExpMontoSentec(): ?int
    {
        return $this->exp_monto_sentec;
    }

    public function setExpMontoSentec(?int $exp_monto_sentec): self
    {
        $this->exp_monto_sentec = $exp_monto_sentec;

        return $this;
    }

    public function getAExpPjnNum(): ?string
    {
        return $this->a_exp_pjn_num;
    }

    public function setAExpPjnNum(?string $a_exp_pjn_num): self
    {
        $this->a_exp_pjn_num = $a_exp_pjn_num;

        return $this;
    }

    public function getAExpPjnJuzg(): ?string
    {
        return $this->a_exp_pjn_juzg;
    }

    public function setAExpPjnJuzg(?string $a_exp_pjn_juzg): self
    {
        $this->a_exp_pjn_juzg = $a_exp_pjn_juzg;

        return $this;
    }

    public function getAExpPjnCar(): ?string
    {
        return $this->a_exp_pjn_car;
    }

    public function setAExpPjnCar(?string $a_exp_pjn_car): self
    {
        $this->a_exp_pjn_car = $a_exp_pjn_car;

        return $this;
    }

    public function getObsCaratula(): ?string
    {
        return $this->obs_caratula;
    }

    public function setObsCaratula(?string $obs_caratula): self
    {
        $this->obs_caratula = $obs_caratula;

        return $this;
    }

    public function getExpCarObs(): ?string
    {
        return $this->exp_car_obs;
    }

    public function setExpCarObs(?string $exp_car_obs): self
    {
        $this->exp_car_obs = $exp_car_obs;

        return $this;
    }

    public function getExpFlagrante(): ?string
    {
        return $this->exp_flagrante;
    }

    public function setExpFlagrante(?string $exp_flagrante): self
    {
        $this->exp_flagrante = $exp_flagrante;

        return $this;
    }

    public function getViolenciaDomestica(): ?string
    {
        return $this->violencia_domestica;
    }

    public function setViolenciaDomestica(?string $violencia_domestica): self
    {
        $this->violencia_domestica = $violencia_domestica;

        return $this;
    }

    public function getExpTieneMenor(): ?string
    {
        return $this->exp_tiene_menor;
    }

    public function setExpTieneMenor(?string $exp_tiene_menor): self
    {
        $this->exp_tiene_menor = $exp_tiene_menor;

        return $this;
    }

    public function getAExpOrigen(): ?string
    {
        return $this->a_exp_origen;
    }

    public function setAExpOrigen(?string $a_exp_origen): self
    {
        $this->a_exp_origen = $a_exp_origen;

        return $this;
    }

    public function getAExpVocalia(): ?string
    {
        return $this->a_exp_vocalia;
    }

    public function setAExpVocalia(?string $a_exp_vocalia): self
    {
        $this->a_exp_vocalia = $a_exp_vocalia;

        return $this;
    }

    public function getAExpAdmin(): ?string
    {
        return $this->a_exp_admin;
    }

    public function setAExpAdmin(?string $a_exp_admin): self
    {
        $this->a_exp_admin = $a_exp_admin;

        return $this;
    }

    public function getANumExpAdmin(): ?string
    {
        return $this->a_num_exp_admin;
    }

    public function setANumExpAdmin(?string $a_num_exp_admin): self
    {
        $this->a_num_exp_admin = $a_num_exp_admin;

        return $this;
    }

    public function getAOtrObs(): ?string
    {
        return $this->a_otr_obs;
    }

    public function setAOtrObs(?string $a_otr_obs): self
    {
        $this->a_otr_obs = $a_otr_obs;

        return $this;
    }

    public function getExpMedidaCautelar(): ?string
    {
        return $this->exp_medida_cautelar;
    }

    public function setExpMedidaCautelar(?string $exp_medida_cautelar): self
    {
        $this->exp_medida_cautelar = $exp_medida_cautelar;

        return $this;
    }

    public function getExpFechaPolicial(): ?\DateTimeInterface
    {
        return $this->exp_fecha_policial;
    }

    public function setExpFechaPolicial(?\DateTimeInterface $exp_fecha_policial): self
    {
        $this->exp_fecha_policial = $exp_fecha_policial;

        return $this;
    }

    public function getExpOrgTib1(): ?int
    {
        return $this->exp_org_tib1;
    }

    public function setExpOrgTib1(?int $exp_org_tib1): self
    {
        $this->exp_org_tib1 = $exp_org_tib1;

        return $this;
    }

    public function getExpOrgTib2(): ?int
    {
        return $this->exp_org_tib2;
    }

    public function setExpOrgTib2(?int $exp_org_tib2): self
    {
        $this->exp_org_tib2 = $exp_org_tib2;

        return $this;
    }

    public function getDosajeAlcohol(): ?string
    {
        return $this->dosaje_alcohol;
    }

    public function setDosajeAlcohol(?string $dosaje_alcohol): self
    {
        $this->dosaje_alcohol = $dosaje_alcohol;

        return $this;
    }

    public function getExpCausa(): ?string
    {
        return $this->exp_causa;
    }

    public function setExpCausa(?string $exp_causa): self
    {
        $this->exp_causa = $exp_causa;

        return $this;
    }

    public function getExpSitPro(): ?string
    {
        return $this->exp_sit_pro;
    }

    public function setExpSitPro(?string $exp_sit_pro): self
    {
        $this->exp_sit_pro = $exp_sit_pro;

        return $this;
    }

    public function getOrgDefInt(): ?string
    {
        return $this->org_def_int;
    }

    public function setOrgDefInt(?string $org_def_int): self
    {
        $this->org_def_int = $org_def_int;

        return $this;
    }

    public function getExpProrrogas(): ?string
    {
        return $this->exp_prorrogas;
    }

    public function setExpProrrogas(?string $exp_prorrogas): self
    {
        $this->exp_prorrogas = $exp_prorrogas;

        return $this;
    }

    public function getExpLpu(): ?int
    {
        return $this->exp_lpu;
    }

    public function setExpLpu(?int $exp_lpu): self
    {
        $this->exp_lpu = $exp_lpu;

        return $this;
    }

    public function getFecMod(): ?\DateTimeInterface
    {
        return $this->fec_mod;
    }

    public function setFecMod(?\DateTimeInterface $fec_mod): self
    {
        $this->fec_mod = $fec_mod;

        return $this;
    }

    public function getOrgJuzTram(): ?int
    {
        return $this->org_juz_tram;
    }

    public function setOrgJuzTram(?int $org_juz_tram): self
    {
        $this->org_juz_tram = $org_juz_tram;

        return $this;
    }

    public function getOrgJuzJuicio(): ?int
    {
        return $this->org_juz_juicio;
    }

    public function setOrgJuzJuicio(?int $org_juz_juicio): self
    {
        $this->org_juz_juicio = $org_juz_juicio;

        return $this;
    }

    public function getOrgJuzActual(): ?int
    {
        return $this->org_juz_actual;
    }

    public function setOrgJuzActual(?int $org_juz_actual): self
    {
        $this->org_juz_actual = $org_juz_actual;

        return $this;
    }

    public function getSecActual(): ?int
    {
        return $this->sec_actual;
    }

    public function setSecActual(?int $sec_actual): self
    {
        $this->sec_actual = $sec_actual;

        return $this;
    }

    public function getOrgUbiOrigen(): ?int
    {
        return $this->org_ubi_origen;
    }

    public function setOrgUbiOrigen(?int $org_ubi_origen): self
    {
        $this->org_ubi_origen = $org_ubi_origen;

        return $this;
    }

    public function getOrgJuzOrigen(): ?int
    {
        return $this->org_juz_origen;
    }

    public function setOrgJuzOrigen(?int $org_juz_origen): self
    {
        $this->org_juz_origen = $org_juz_origen;

        return $this;
    }

    public function getSecOrigen(): ?int
    {
        return $this->sec_origen;
    }

    public function setSecOrigen(?int $sec_origen): self
    {
        $this->sec_origen = $sec_origen;

        return $this;
    }

    public function getOrgDefCam(): ?int
    {
        return $this->org_def_cam;
    }

    public function setOrgDefCam(?int $org_def_cam): self
    {
        $this->org_def_cam = $org_def_cam;

        return $this;
    }

    public function getSecCam(): ?int
    {
        return $this->sec_cam;
    }

    public function setSecCam(?int $sec_cam): self
    {
        $this->sec_cam = $sec_cam;

        return $this;
    }

    public function getOrgDefAdj(): ?int
    {
        return $this->org_def_adj;
    }

    public function setOrgDefAdj(?int $org_def_adj): self
    {
        $this->org_def_adj = $org_def_adj;

        return $this;
    }

    public function getOrgJuzAdj(): ?int
    {
        return $this->org_juz_adj;
    }

    public function setOrgJuzAdj(?int $org_juz_adj): self
    {
        $this->org_juz_adj = $org_juz_adj;

        return $this;
    }

    public function getSecAdj(): ?int
    {
        return $this->sec_adj;
    }

    public function setSecAdj(?int $sec_adj): self
    {
        $this->sec_adj = $sec_adj;

        return $this;
    }

    public function getSedId(): ?int
    {
        return $this->sed_id;
    }

    public function setSedId(?int $sed_id): self
    {
        $this->sed_id = $sed_id;

        return $this;
    }

    public function getModIngId(): ?int
    {
        return $this->mod_ing_id;
    }

    public function setModIngId(?int $mod_ing_id): self
    {
        $this->mod_ing_id = $mod_ing_id;

        return $this;
    }

    public function getOrgSolicitante(): ?int
    {
        return $this->org_solicitante;
    }

    public function setOrgSolicitante(?int $org_solicitante): self
    {
        $this->org_solicitante = $org_solicitante;

        return $this;
    }

    public function getAResolver(): ?int
    {
        return $this->a_resolver;
    }

    public function setAResolver(?int $a_resolver): self
    {
        $this->a_resolver = $a_resolver;

        return $this;
    }

    public function getTemDiiId(): ?int
    {
        return $this->tem_dii_id;
    }

    public function setTemDiiId(?int $tem_dii_id): self
    {
        $this->tem_dii_id = $tem_dii_id;

        return $this;
    }

    public function getFecAviso(): ?\DateTimeInterface
    {
        return $this->fec_aviso;
    }

    public function setFecAviso(?\DateTimeInterface $fec_aviso): self
    {
        $this->fec_aviso = $fec_aviso;

        return $this;
    }

    public function getUsrANotif(): ?int
    {
        return $this->usr_a_notif;
    }

    public function setUsrANotif(?int $usr_a_notif): self
    {
        $this->usr_a_notif = $usr_a_notif;

        return $this;
    }

    public function getTtrTipPro(): ?int
    {
        return $this->ttr_tip_pro;
    }

    public function setTtrTipPro(?int $ttr_tip_pro): self
    {
        $this->ttr_tip_pro = $ttr_tip_pro;

        return $this;
    }

    public function getOrgArea(): ?int
    {
        return $this->org_area;
    }

    public function setOrgArea(?int $org_area): self
    {
        $this->org_area = $org_area;

        return $this;
    }

    public function getFecIngAdj(): ?\DateTimeInterface
    {
        return $this->fec_ing_adj;
    }

    public function setFecIngAdj(?\DateTimeInterface $fec_ing_adj): self
    {
        $this->fec_ing_adj = $fec_ing_adj;

        return $this;
    }

    public function getOrgOriCon(): ?int
    {
        return $this->org_ori_con;
    }

    public function setOrgOriCon(?int $org_ori_con): self
    {
        $this->org_ori_con = $org_ori_con;

        return $this;
    }

    public function getOrgAsignado(): ?int
    {
        return $this->org_asignado;
    }

    public function setOrgAsignado(?int $org_asignado): self
    {
        $this->org_asignado = $org_asignado;

        return $this;
    }

    public function getCsoId(): ?int
    {
        return $this->cso_id;
    }

    public function setCsoId(?int $cso_id): self
    {
        $this->cso_id = $cso_id;

        return $this;
    }

    public function getCauConjunta(): ?int
    {
        return $this->cau_conjunta;
    }

    public function setCauConjunta(?int $cau_conjunta): self
    {
        $this->cau_conjunta = $cau_conjunta;

        return $this;
    }

    public function getOrgConjunta(): ?int
    {
        return $this->org_conjunta;
    }

    public function setOrgConjunta(?int $org_conjunta): self
    {
        $this->org_conjunta = $org_conjunta;

        return $this;
    }

    public function getBarMenId(): ?int
    {
        return $this->bar_men_id;
    }

    public function setBarMenId(?int $bar_men_id): self
    {
        $this->bar_men_id = $bar_men_id;

        return $this;
    }

    public function getIntOrgEstatal(): ?int
    {
        return $this->int_org_estatal;
    }

    public function setIntOrgEstatal(?int $int_org_estatal): self
    {
        $this->int_org_estatal = $int_org_estatal;

        return $this;
    }

    public function getExpNumFed(): ?int
    {
        return $this->exp_num_fed;
    }

    public function setExpNumFed(?int $exp_num_fed): self
    {
        $this->exp_num_fed = $exp_num_fed;

        return $this;
    }

    public function getCaratIncFed(): ?string
    {
        return $this->carat_inc_fed;
    }

    public function setCaratIncFed(?string $carat_inc_fed): self
    {
        $this->carat_inc_fed = $carat_inc_fed;

        return $this;
    }

    public function getExpIncFed(): ?string
    {
        return $this->exp_inc_fed;
    }

    public function setExpIncFed(?string $exp_inc_fed): self
    {
        $this->exp_inc_fed = $exp_inc_fed;

        return $this;
    }

    public function getCaratLegajoFed(): ?string
    {
        return $this->carat_legajo_fed;
    }

    public function setCaratLegajoFed(?string $carat_legajo_fed): self
    {
        $this->carat_legajo_fed = $carat_legajo_fed;

        return $this;
    }

    public function getTexDiiId(): ?int
    {
        return $this->tex_dii_id;
    }

    public function setTexDiiId(?int $tex_dii_id): self
    {
        $this->tex_dii_id = $tex_dii_id;

        return $this;
    }

    public function getDomInmueble(): ?string
    {
        return $this->dom_inmueble;
    }

    public function setDomInmueble(?string $dom_inmueble): self
    {
        $this->dom_inmueble = $dom_inmueble;

        return $this;
    }

    public function getFecDesalojo(): ?\DateTimeInterface
    {
        return $this->fec_desalojo;
    }

    public function setFecDesalojo(?\DateTimeInterface $fec_desalojo): self
    {
        $this->fec_desalojo = $fec_desalojo;

        return $this;
    }

    public function getFecDesocupa(): ?\DateTimeInterface
    {
        return $this->fec_desocupa;
    }

    public function setFecDesocupa(?\DateTimeInterface $fec_desocupa): self
    {
        $this->fec_desocupa = $fec_desocupa;

        return $this;
    }

    public function getExpNumPedDri(): ?int
    {
        return $this->exp_num_ped_dri;
    }

    public function setExpNumPedDri(?int $exp_num_ped_dri): self
    {
        $this->exp_num_ped_dri = $exp_num_ped_dri;

        return $this;
    }

    public function getExpNumPedDat(): ?int
    {
        return $this->exp_num_ped_dat;
    }

    public function setExpNumPedDat(?int $exp_num_ped_dat): self
    {
        $this->exp_num_ped_dat = $exp_num_ped_dat;

        return $this;
    }

    public function getFueId(): ?int
    {
        return $this->fue_id;
    }

    public function setFueId(?int $fue_id): self
    {
        $this->fue_id = $fue_id;

        return $this;
    }

    public function getComInt(): ?int
    {
        return $this->com_int;
    }

    public function setComInt(?int $com_int): self
    {
        $this->com_int = $com_int;

        return $this;
    }

    public function getDefEsp(): ?int
    {
        return $this->def_esp;
    }

    public function setDefEsp(?int $def_esp): self
    {
        $this->def_esp = $def_esp;

        return $this;
    }

    public function getExpFecSol(): ?\DateTimeInterface
    {
        return $this->exp_fec_sol;
    }

    public function setExpFecSol(?\DateTimeInterface $exp_fec_sol): self
    {
        $this->exp_fec_sol = $exp_fec_sol;

        return $this;
    }

    public function getExpFecEgr(): ?\DateTimeInterface
    {
        return $this->exp_fec_egr;
    }

    public function setExpFecEgr(?\DateTimeInterface $exp_fec_egr): self
    {
        $this->exp_fec_egr = $exp_fec_egr;

        return $this;
    }

    public function getEfeId(): ?int
    {
        return $this->efe_id;
    }

    public function setEfeId(?int $efe_id): self
    {
        $this->efe_id = $efe_id;

        return $this;
    }

    public function getLugDet(): ?string
    {
        return $this->lug_det;
    }

    public function setLugDet(?string $lug_det): self
    {
        $this->lug_det = $lug_det;

        return $this;
    }

    public function getComDet(): ?int
    {
        return $this->com_det;
    }

    public function setComDet(?int $com_det): self
    {
        $this->com_det = $com_det;

        return $this;
    }

    public function getViolenciaGenero(): ?string
    {
        return $this->violencia_genero;
    }

    public function setViolenciaGenero(?string $violencia_genero): self
    {
        $this->violencia_genero = $violencia_genero;

        return $this;
    }

    public function getFecPlazoSusp(): ?string
    {
        return $this->fec_plazo_susp;
    }

    public function setFecPlazoSusp(?string $fec_plazo_susp): self
    {
        $this->fec_plazo_susp = $fec_plazo_susp;

        return $this;
    }

    public function getFecIngJust(): ?\DateTimeInterface
    {
        return $this->fec_ing_just;
    }

    public function setFecIngJust(?\DateTimeInterface $fec_ing_just): self
    {
        $this->fec_ing_just = $fec_ing_just;

        return $this;
    }

    public function getFecActa(): ?\DateTimeInterface
    {
        return $this->fec_acta;
    }

    public function setFecActa(?\DateTimeInterface $fec_acta): self
    {
        $this->fec_acta = $fec_acta;

        return $this;
    }

    public function getAdultoImp(): ?string
    {
        return $this->adulto_imp;
    }

    public function setAdultoImp(?string $adulto_imp): self
    {
        $this->adulto_imp = $adulto_imp;

        return $this;
    }

    public function getUsrIdrespCam(): ?int
    {
        return $this->usr_idresp_cam;
    }

    public function setUsrIdrespCam(?int $usr_idresp_cam): self
    {
        $this->usr_idresp_cam = $usr_idresp_cam;

        return $this;
    }

    public function getUsrIdrespSec(): ?int
    {
        return $this->usr_idresp_sec;
    }

    public function setUsrIdrespSec(?int $usr_idresp_sec): self
    {
        $this->usr_idresp_sec = $usr_idresp_sec;

        return $this;
    }

    public function getUsrIdresp2(): ?int
    {
        return $this->usr_idresp_2;
    }

    public function setUsrIdresp2(?int $usr_idresp_2): self
    {
        $this->usr_idresp_2 = $usr_idresp_2;

        return $this;
    }

    public function getUsrIdresp3(): ?int
    {
        return $this->usr_idresp_3;
    }

    public function setUsrIdresp3(?int $usr_idresp_3): self
    {
        $this->usr_idresp_3 = $usr_idresp_3;

        return $this;
    }

    public function getArchNumeroExpe(): ?string
    {
        return $this->arch_numero_expe;
    }

    public function setArchNumeroExpe(?string $arch_numero_expe): self
    {
        $this->arch_numero_expe = $arch_numero_expe;

        return $this;
    }

    public function getArchProxceso(): ?string
    {
        return $this->arch_proxceso;
    }

    public function setArchProxceso(?string $arch_proxceso): self
    {
        $this->arch_proxceso = $arch_proxceso;

        return $this;
    }

    public function getArchCuerpo(): ?string
    {
        return $this->arch_cuerpo;
    }

    public function setArchCuerpo(?string $arch_cuerpo): self
    {
        $this->arch_cuerpo = $arch_cuerpo;

        return $this;
    }

    public function getArchActor(): ?string
    {
        return $this->arch_actor;
    }

    public function setArchActor(?string $arch_actor): self
    {
        $this->arch_actor = $arch_actor;

        return $this;
    }

    public function getArchContra(): ?string
    {
        return $this->arch_contra;
    }

    public function setArchContra(?string $arch_contra): self
    {
        $this->arch_contra = $arch_contra;

        return $this;
    }

    public function getArchCantPags(): ?string
    {
        return $this->arch_cant_pags;
    }

    public function setArchCantPags(?string $arch_cant_pags): self
    {
        $this->arch_cant_pags = $arch_cant_pags;

        return $this;
    }

    public function getModIngCcd(): ?int
    {
        return $this->mod_ing_ccd;
    }

    public function setModIngCcd(?int $mod_ing_ccd): self
    {
        $this->mod_ing_ccd = $mod_ing_ccd;

        return $this;
    }

    public function getExp(): ?Exp
    {
        return $this->exp;
    }

    public function setExp(?Exp $exp): self
    {
        $this->exp = $exp;

        return $this;
    }





}
