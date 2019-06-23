<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\ActAdiRepository")
 */
class ActAdi
{
//
//    /**
//     * @ORM\Id()
//     * @ORM\Column(type="integer", nullable=true)
//     */
//
//    private $act;
    /**
     * @ORM\Id()
     * @ORM\OneToOne(targetEntity="App\Entity\Actuacion", inversedBy="actAdi", cascade={"persist", "remove"})
     */
    private $act;

    /**
     * @ORM\Column(type="string")
     */

    private $a_dac_obs;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $a_dac_nrodec;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $act_tramix;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $orgdes_tramix;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $exp_identifi;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $exp_identif;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $fec_emi_act;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $act_fec_cre;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $mov_numero;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $monto;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $exp_org_rad;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $exp_numero;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $exp_car;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $exp_jue_org;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $exp_secre;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $exp_vocal1;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $exp_vocal2;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $voc_mesa;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $exp_juez;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $per_adi;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $dom_adi;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $bar_adi;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $act_fecvence;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $act_fecpendini;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $fue_cod;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $fue_descr;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $fue_direccion;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $crc_id;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $not_adjunto;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_notif_acep;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_notif_venc;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_notif_asig;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_notif_dilig;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $not_codigo_remito_notificacion;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $not_observaciones;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $not_adjuntos;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $not_personal;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $not_copia_electronica;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $not_externa;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $a_act_datos_per;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $nro_lote_ics;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $not_pdb_nomyap;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $not_dir_calle;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $not_dir_numero;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $not_dir_piso;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $not_dir_dpto;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $not_dir_torre;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $not_dir_tipdom;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $not_lot_numero;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $not_not_publicaint;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $not_not_codcaract;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $not_not_datadjunt;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $not_not_presentper;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $not_not_observ;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $not_dir_otro;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $eno_id;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $not_actppal_id;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $not_vinculo;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $not_pdb_codigo;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $zon_id;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $pod_dir_dem;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $pod_nom_dem;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $firmante;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $copias;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $pod_abo_act;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $cnt_foj_act;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $hnocturna;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $pod_pro_act;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $hora_pre;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $pod_est_act;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $pod_fna_act;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $pod_eda_act;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $fec_dec_exp;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $pod_nom_act;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $nocturna;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $act_fec_dev;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $act_obs;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $foj_dec_exp;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $mot_cai;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $docadj;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $pod_nac_act;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $pod_dir_act;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $act_des;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $pod_dni_act;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $a_cant_fojas;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $a_cant_cuerpos;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $a_org_ext;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $not_zona_codigo;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $a_act_defensoria;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $a_act_fiscalia;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $gnt_id;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $not_convenio;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $exp_id;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $a_act_man_cod;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $dac_id_plantilla;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $act_color_evento;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $dejo_nota;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $cons_web;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $act_foja;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $pri_id;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $sed_id;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $org_ubicacion;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $en_letra;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $tramite;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $act_num_ofi;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $act_cargo;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_audiencia;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $sed_audiencia;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $usr_mediador;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $notificacion;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_not;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $act_fec_lib;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $act_fec_delig;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $act_fec_rec;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $act_descr_acto;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $pro_tra_id;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $act_sugerencia_ooh;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $extraproce;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_cor_inf;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $nro_not;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_pago;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $nro_not_pago;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $tiempo_rpta;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $usr_agente_id;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $usr_pro_id;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_acep_cargo;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_ven_prorroga;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_ini_prorroga;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $actualizacion;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $fue_atendido;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $recibio_citacion;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_env_rta_xmail;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_pase_ofi;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $violencia_verbal;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $violencia_fisica;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $denuncia;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $plazo;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $entrevista;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $entrev_tex;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $trato_humi;


    /**
     * @ORM\Column(type="datetime", nullable=true)
     */

    private $fec_hora_nota;





    public function getADacObs(): ?string
    {
        return $this->a_dac_obs;
    }

    public function setADacObs(string $a_dac_obs): self
    {
        $this->a_dac_obs = $a_dac_obs;

        return $this;
    }

    public function getADacNrodec(): ?string
    {
        return $this->a_dac_nrodec;
    }

    public function setADacNrodec(?string $a_dac_nrodec): self
    {
        $this->a_dac_nrodec = $a_dac_nrodec;

        return $this;
    }

    public function getActTramix(): ?string
    {
        return $this->act_tramix;
    }

    public function setActTramix(?string $act_tramix): self
    {
        $this->act_tramix = $act_tramix;

        return $this;
    }

    public function getOrgdesTramix(): ?int
    {
        return $this->orgdes_tramix;
    }

    public function setOrgdesTramix(?int $orgdes_tramix): self
    {
        $this->orgdes_tramix = $orgdes_tramix;

        return $this;
    }

    public function getExpIdentifi(): ?string
    {
        return $this->exp_identifi;
    }

    public function setExpIdentifi(?string $exp_identifi): self
    {
        $this->exp_identifi = $exp_identifi;

        return $this;
    }

    public function getExpIdentif(): ?string
    {
        return $this->exp_identif;
    }

    public function setExpIdentif(?string $exp_identif): self
    {
        $this->exp_identif = $exp_identif;

        return $this;
    }

    public function getFecEmiAct(): ?string
    {
        return $this->fec_emi_act;
    }

    public function setFecEmiAct(?string $fec_emi_act): self
    {
        $this->fec_emi_act = $fec_emi_act;

        return $this;
    }

    public function getActFecCre(): ?\DateTimeInterface
    {
        return $this->act_fec_cre;
    }

    public function setActFecCre(?\DateTimeInterface $act_fec_cre): self
    {
        $this->act_fec_cre = $act_fec_cre;

        return $this;
    }

    public function getMovNumero(): ?string
    {
        return $this->mov_numero;
    }

    public function setMovNumero(?string $mov_numero): self
    {
        $this->mov_numero = $mov_numero;

        return $this;
    }

    public function getMonto(): ?string
    {
        return $this->monto;
    }

    public function setMonto(?string $monto): self
    {
        $this->monto = $monto;

        return $this;
    }

    public function getExpOrgRad(): ?string
    {
        return $this->exp_org_rad;
    }

    public function setExpOrgRad(?string $exp_org_rad): self
    {
        $this->exp_org_rad = $exp_org_rad;

        return $this;
    }

    public function getExpNumero(): ?int
    {
        return $this->exp_numero;
    }

    public function setExpNumero(?int $exp_numero): self
    {
        $this->exp_numero = $exp_numero;

        return $this;
    }

    public function getExpCar(): ?string
    {
        return $this->exp_car;
    }

    public function setExpCar(?string $exp_car): self
    {
        $this->exp_car = $exp_car;

        return $this;
    }

    public function getExpJueOrg(): ?string
    {
        return $this->exp_jue_org;
    }

    public function setExpJueOrg(?string $exp_jue_org): self
    {
        $this->exp_jue_org = $exp_jue_org;

        return $this;
    }

    public function getExpSecre(): ?string
    {
        return $this->exp_secre;
    }

    public function setExpSecre(?string $exp_secre): self
    {
        $this->exp_secre = $exp_secre;

        return $this;
    }

    public function getExpVocal1(): ?string
    {
        return $this->exp_vocal1;
    }

    public function setExpVocal1(?string $exp_vocal1): self
    {
        $this->exp_vocal1 = $exp_vocal1;

        return $this;
    }

    public function getExpVocal2(): ?string
    {
        return $this->exp_vocal2;
    }

    public function setExpVocal2(?string $exp_vocal2): self
    {
        $this->exp_vocal2 = $exp_vocal2;

        return $this;
    }

    public function getVocMesa(): ?string
    {
        return $this->voc_mesa;
    }

    public function setVocMesa(?string $voc_mesa): self
    {
        $this->voc_mesa = $voc_mesa;

        return $this;
    }

    public function getExpJuez(): ?string
    {
        return $this->exp_juez;
    }

    public function setExpJuez(?string $exp_juez): self
    {
        $this->exp_juez = $exp_juez;

        return $this;
    }

    public function getPerAdi(): ?string
    {
        return $this->per_adi;
    }

    public function setPerAdi(?string $per_adi): self
    {
        $this->per_adi = $per_adi;

        return $this;
    }

    public function getDomAdi(): ?string
    {
        return $this->dom_adi;
    }

    public function setDomAdi(?string $dom_adi): self
    {
        $this->dom_adi = $dom_adi;

        return $this;
    }

    public function getBarAdi(): ?string
    {
        return $this->bar_adi;
    }

    public function setBarAdi(?string $bar_adi): self
    {
        $this->bar_adi = $bar_adi;

        return $this;
    }

    public function getActFecvence(): ?\DateTimeInterface
    {
        return $this->act_fecvence;
    }

    public function setActFecvence(?\DateTimeInterface $act_fecvence): self
    {
        $this->act_fecvence = $act_fecvence;

        return $this;
    }

    public function getActFecpendini(): ?\DateTimeInterface
    {
        return $this->act_fecpendini;
    }

    public function setActFecpendini(?\DateTimeInterface $act_fecpendini): self
    {
        $this->act_fecpendini = $act_fecpendini;

        return $this;
    }

    public function getFueCod(): ?string
    {
        return $this->fue_cod;
    }

    public function setFueCod(?string $fue_cod): self
    {
        $this->fue_cod = $fue_cod;

        return $this;
    }

    public function getFueDescr(): ?string
    {
        return $this->fue_descr;
    }

    public function setFueDescr(?string $fue_descr): self
    {
        $this->fue_descr = $fue_descr;

        return $this;
    }

    public function getFueDireccion(): ?string
    {
        return $this->fue_direccion;
    }

    public function setFueDireccion(?string $fue_direccion): self
    {
        $this->fue_direccion = $fue_direccion;

        return $this;
    }

    public function getCrcId(): ?int
    {
        return $this->crc_id;
    }

    public function setCrcId(?int $crc_id): self
    {
        $this->crc_id = $crc_id;

        return $this;
    }

    public function getNotAdjunto(): ?int
    {
        return $this->not_adjunto;
    }

    public function setNotAdjunto(?int $not_adjunto): self
    {
        $this->not_adjunto = $not_adjunto;

        return $this;
    }

    public function getFecNotifAcep(): ?\DateTimeInterface
    {
        return $this->fec_notif_acep;
    }

    public function setFecNotifAcep(?\DateTimeInterface $fec_notif_acep): self
    {
        $this->fec_notif_acep = $fec_notif_acep;

        return $this;
    }

    public function getFecNotifVenc(): ?\DateTimeInterface
    {
        return $this->fec_notif_venc;
    }

    public function setFecNotifVenc(?\DateTimeInterface $fec_notif_venc): self
    {
        $this->fec_notif_venc = $fec_notif_venc;

        return $this;
    }

    public function getFecNotifAsig(): ?\DateTimeInterface
    {
        return $this->fec_notif_asig;
    }

    public function setFecNotifAsig(?\DateTimeInterface $fec_notif_asig): self
    {
        $this->fec_notif_asig = $fec_notif_asig;

        return $this;
    }

    public function getFecNotifDilig(): ?\DateTimeInterface
    {
        return $this->fec_notif_dilig;
    }

    public function setFecNotifDilig(?\DateTimeInterface $fec_notif_dilig): self
    {
        $this->fec_notif_dilig = $fec_notif_dilig;

        return $this;
    }

    public function getNotCodigoRemitoNotificacion(): ?string
    {
        return $this->not_codigo_remito_notificacion;
    }

    public function setNotCodigoRemitoNotificacion(?string $not_codigo_remito_notificacion): self
    {
        $this->not_codigo_remito_notificacion = $not_codigo_remito_notificacion;

        return $this;
    }

    public function getNotObservaciones(): ?string
    {
        return $this->not_observaciones;
    }

    public function setNotObservaciones(?string $not_observaciones): self
    {
        $this->not_observaciones = $not_observaciones;

        return $this;
    }

    public function getNotAdjuntos(): ?int
    {
        return $this->not_adjuntos;
    }

    public function setNotAdjuntos(?int $not_adjuntos): self
    {
        $this->not_adjuntos = $not_adjuntos;

        return $this;
    }

    public function getNotPersonal(): ?int
    {
        return $this->not_personal;
    }

    public function setNotPersonal(?int $not_personal): self
    {
        $this->not_personal = $not_personal;

        return $this;
    }

    public function getNotCopiaElectronica(): ?int
    {
        return $this->not_copia_electronica;
    }

    public function setNotCopiaElectronica(?int $not_copia_electronica): self
    {
        $this->not_copia_electronica = $not_copia_electronica;

        return $this;
    }

    public function getNotExterna(): ?int
    {
        return $this->not_externa;
    }

    public function setNotExterna(?int $not_externa): self
    {
        $this->not_externa = $not_externa;

        return $this;
    }

    public function getAActDatosPer(): ?string
    {
        return $this->a_act_datos_per;
    }

    public function setAActDatosPer(?string $a_act_datos_per): self
    {
        $this->a_act_datos_per = $a_act_datos_per;

        return $this;
    }

    public function getNroLoteIcs(): ?int
    {
        return $this->nro_lote_ics;
    }

    public function setNroLoteIcs(?int $nro_lote_ics): self
    {
        $this->nro_lote_ics = $nro_lote_ics;

        return $this;
    }

    public function getNotPdbNomyap(): ?string
    {
        return $this->not_pdb_nomyap;
    }

    public function setNotPdbNomyap(?string $not_pdb_nomyap): self
    {
        $this->not_pdb_nomyap = $not_pdb_nomyap;

        return $this;
    }

    public function getNotDirCalle(): ?string
    {
        return $this->not_dir_calle;
    }

    public function setNotDirCalle(?string $not_dir_calle): self
    {
        $this->not_dir_calle = $not_dir_calle;

        return $this;
    }

    public function getNotDirNumero(): ?string
    {
        return $this->not_dir_numero;
    }

    public function setNotDirNumero(?string $not_dir_numero): self
    {
        $this->not_dir_numero = $not_dir_numero;

        return $this;
    }

    public function getNotDirPiso(): ?string
    {
        return $this->not_dir_piso;
    }

    public function setNotDirPiso(?string $not_dir_piso): self
    {
        $this->not_dir_piso = $not_dir_piso;

        return $this;
    }

    public function getNotDirDpto(): ?string
    {
        return $this->not_dir_dpto;
    }

    public function setNotDirDpto(?string $not_dir_dpto): self
    {
        $this->not_dir_dpto = $not_dir_dpto;

        return $this;
    }

    public function getNotDirTorre(): ?string
    {
        return $this->not_dir_torre;
    }

    public function setNotDirTorre(?string $not_dir_torre): self
    {
        $this->not_dir_torre = $not_dir_torre;

        return $this;
    }

    public function getNotDirTipdom(): ?int
    {
        return $this->not_dir_tipdom;
    }

    public function setNotDirTipdom(?int $not_dir_tipdom): self
    {
        $this->not_dir_tipdom = $not_dir_tipdom;

        return $this;
    }

    public function getNotLotNumero(): ?int
    {
        return $this->not_lot_numero;
    }

    public function setNotLotNumero(?int $not_lot_numero): self
    {
        $this->not_lot_numero = $not_lot_numero;

        return $this;
    }

    public function getNotNotPublicaint(): ?int
    {
        return $this->not_not_publicaint;
    }

    public function setNotNotPublicaint(?int $not_not_publicaint): self
    {
        $this->not_not_publicaint = $not_not_publicaint;

        return $this;
    }

    public function getNotNotCodcaract(): ?int
    {
        return $this->not_not_codcaract;
    }

    public function setNotNotCodcaract(?int $not_not_codcaract): self
    {
        $this->not_not_codcaract = $not_not_codcaract;

        return $this;
    }

    public function getNotNotDatadjunt(): ?int
    {
        return $this->not_not_datadjunt;
    }

    public function setNotNotDatadjunt(?int $not_not_datadjunt): self
    {
        $this->not_not_datadjunt = $not_not_datadjunt;

        return $this;
    }

    public function getNotNotPresentper(): ?int
    {
        return $this->not_not_presentper;
    }

    public function setNotNotPresentper(?int $not_not_presentper): self
    {
        $this->not_not_presentper = $not_not_presentper;

        return $this;
    }

    public function getNotNotObserv(): ?string
    {
        return $this->not_not_observ;
    }

    public function setNotNotObserv(?string $not_not_observ): self
    {
        $this->not_not_observ = $not_not_observ;

        return $this;
    }

    public function getNotDirOtro(): ?string
    {
        return $this->not_dir_otro;
    }

    public function setNotDirOtro(?string $not_dir_otro): self
    {
        $this->not_dir_otro = $not_dir_otro;

        return $this;
    }

    public function getEnoId(): ?int
    {
        return $this->eno_id;
    }

    public function setEnoId(?int $eno_id): self
    {
        $this->eno_id = $eno_id;

        return $this;
    }

    public function getNotActppalId(): ?int
    {
        return $this->not_actppal_id;
    }

    public function setNotActppalId(?int $not_actppal_id): self
    {
        $this->not_actppal_id = $not_actppal_id;

        return $this;
    }

    public function getNotVinculo(): ?int
    {
        return $this->not_vinculo;
    }

    public function setNotVinculo(?int $not_vinculo): self
    {
        $this->not_vinculo = $not_vinculo;

        return $this;
    }

    public function getNotPdbCodigo(): ?int
    {
        return $this->not_pdb_codigo;
    }

    public function setNotPdbCodigo(?int $not_pdb_codigo): self
    {
        $this->not_pdb_codigo = $not_pdb_codigo;

        return $this;
    }

    public function getZonId(): ?int
    {
        return $this->zon_id;
    }

    public function setZonId(?int $zon_id): self
    {
        $this->zon_id = $zon_id;

        return $this;
    }

    public function getPodDirDem(): ?string
    {
        return $this->pod_dir_dem;
    }

    public function setPodDirDem(?string $pod_dir_dem): self
    {
        $this->pod_dir_dem = $pod_dir_dem;

        return $this;
    }

    public function getPodNomDem(): ?string
    {
        return $this->pod_nom_dem;
    }

    public function setPodNomDem(?string $pod_nom_dem): self
    {
        $this->pod_nom_dem = $pod_nom_dem;

        return $this;
    }

    public function getFirmante(): ?string
    {
        return $this->firmante;
    }

    public function setFirmante(?string $firmante): self
    {
        $this->firmante = $firmante;

        return $this;
    }

    public function getCopias(): ?int
    {
        return $this->copias;
    }

    public function setCopias(?int $copias): self
    {
        $this->copias = $copias;

        return $this;
    }

    public function getPodAboAct(): ?string
    {
        return $this->pod_abo_act;
    }

    public function setPodAboAct(?string $pod_abo_act): self
    {
        $this->pod_abo_act = $pod_abo_act;

        return $this;
    }

    public function getCntFojAct(): ?int
    {
        return $this->cnt_foj_act;
    }

    public function setCntFojAct(?int $cnt_foj_act): self
    {
        $this->cnt_foj_act = $cnt_foj_act;

        return $this;
    }

    public function getHnocturna(): ?string
    {
        return $this->hnocturna;
    }

    public function setHnocturna(?string $hnocturna): self
    {
        $this->hnocturna = $hnocturna;

        return $this;
    }

    public function getPodProAct(): ?string
    {
        return $this->pod_pro_act;
    }

    public function setPodProAct(?string $pod_pro_act): self
    {
        $this->pod_pro_act = $pod_pro_act;

        return $this;
    }

    public function getHoraPre(): ?string
    {
        return $this->hora_pre;
    }

    public function setHoraPre(?string $hora_pre): self
    {
        $this->hora_pre = $hora_pre;

        return $this;
    }

    public function getPodEstAct(): ?string
    {
        return $this->pod_est_act;
    }

    public function setPodEstAct(?string $pod_est_act): self
    {
        $this->pod_est_act = $pod_est_act;

        return $this;
    }

    public function getPodFnaAct(): ?int
    {
        return $this->pod_fna_act;
    }

    public function setPodFnaAct(?int $pod_fna_act): self
    {
        $this->pod_fna_act = $pod_fna_act;

        return $this;
    }

    public function getPodEdaAct(): ?int
    {
        return $this->pod_eda_act;
    }

    public function setPodEdaAct(?int $pod_eda_act): self
    {
        $this->pod_eda_act = $pod_eda_act;

        return $this;
    }

    public function getFecDecExp(): ?int
    {
        return $this->fec_dec_exp;
    }

    public function setFecDecExp(?int $fec_dec_exp): self
    {
        $this->fec_dec_exp = $fec_dec_exp;

        return $this;
    }

    public function getPodNomAct(): ?string
    {
        return $this->pod_nom_act;
    }

    public function setPodNomAct(?string $pod_nom_act): self
    {
        $this->pod_nom_act = $pod_nom_act;

        return $this;
    }

    public function getNocturna(): ?string
    {
        return $this->nocturna;
    }

    public function setNocturna(?string $nocturna): self
    {
        $this->nocturna = $nocturna;

        return $this;
    }

    public function getActFecDev(): ?int
    {
        return $this->act_fec_dev;
    }

    public function setActFecDev(?int $act_fec_dev): self
    {
        $this->act_fec_dev = $act_fec_dev;

        return $this;
    }

    public function getActObs(): ?string
    {
        return $this->act_obs;
    }

    public function setActObs(?string $act_obs): self
    {
        $this->act_obs = $act_obs;

        return $this;
    }

    public function getFojDecExp(): ?int
    {
        return $this->foj_dec_exp;
    }

    public function setFojDecExp(?int $foj_dec_exp): self
    {
        $this->foj_dec_exp = $foj_dec_exp;

        return $this;
    }

    public function getMotCai(): ?int
    {
        return $this->mot_cai;
    }

    public function setMotCai(?int $mot_cai): self
    {
        $this->mot_cai = $mot_cai;

        return $this;
    }

    public function getDocadj(): ?string
    {
        return $this->docadj;
    }

    public function setDocadj(?string $docadj): self
    {
        $this->docadj = $docadj;

        return $this;
    }

    public function getPodNacAct(): ?string
    {
        return $this->pod_nac_act;
    }

    public function setPodNacAct(?string $pod_nac_act): self
    {
        $this->pod_nac_act = $pod_nac_act;

        return $this;
    }

    public function getPodDirAct(): ?string
    {
        return $this->pod_dir_act;
    }

    public function setPodDirAct(?string $pod_dir_act): self
    {
        $this->pod_dir_act = $pod_dir_act;

        return $this;
    }

    public function getActDes(): ?string
    {
        return $this->act_des;
    }

    public function setActDes(?string $act_des): self
    {
        $this->act_des = $act_des;

        return $this;
    }

    public function getPodDniAct(): ?int
    {
        return $this->pod_dni_act;
    }

    public function setPodDniAct(?int $pod_dni_act): self
    {
        $this->pod_dni_act = $pod_dni_act;

        return $this;
    }

    public function getACantFojas(): ?int
    {
        return $this->a_cant_fojas;
    }

    public function setACantFojas(?int $a_cant_fojas): self
    {
        $this->a_cant_fojas = $a_cant_fojas;

        return $this;
    }

    public function getACantCuerpos(): ?int
    {
        return $this->a_cant_cuerpos;
    }

    public function setACantCuerpos(?int $a_cant_cuerpos): self
    {
        $this->a_cant_cuerpos = $a_cant_cuerpos;

        return $this;
    }

    public function getAOrgExt(): ?string
    {
        return $this->a_org_ext;
    }

    public function setAOrgExt(?string $a_org_ext): self
    {
        $this->a_org_ext = $a_org_ext;

        return $this;
    }

    public function getNotZonaCodigo(): ?int
    {
        return $this->not_zona_codigo;
    }

    public function setNotZonaCodigo(?int $not_zona_codigo): self
    {
        $this->not_zona_codigo = $not_zona_codigo;

        return $this;
    }

    public function getAActDefensoria(): ?string
    {
        return $this->a_act_defensoria;
    }

    public function setAActDefensoria(?string $a_act_defensoria): self
    {
        $this->a_act_defensoria = $a_act_defensoria;

        return $this;
    }

    public function getAActFiscalia(): ?string
    {
        return $this->a_act_fiscalia;
    }

    public function setAActFiscalia(?string $a_act_fiscalia): self
    {
        $this->a_act_fiscalia = $a_act_fiscalia;

        return $this;
    }

    public function getGntId(): ?int
    {
        return $this->gnt_id;
    }

    public function setGntId(?int $gnt_id): self
    {
        $this->gnt_id = $gnt_id;

        return $this;
    }

    public function getNotConvenio(): ?string
    {
        return $this->not_convenio;
    }

    public function setNotConvenio(?string $not_convenio): self
    {
        $this->not_convenio = $not_convenio;

        return $this;
    }

    public function getExpId(): ?int
    {
        return $this->exp_id;
    }

    public function setExpId(?int $exp_id): self
    {
        $this->exp_id = $exp_id;

        return $this;
    }

    public function getAActManCod(): ?int
    {
        return $this->a_act_man_cod;
    }

    public function setAActManCod(?int $a_act_man_cod): self
    {
        $this->a_act_man_cod = $a_act_man_cod;

        return $this;
    }

    public function getDacIdPlantilla(): ?int
    {
        return $this->dac_id_plantilla;
    }

    public function setDacIdPlantilla(?int $dac_id_plantilla): self
    {
        $this->dac_id_plantilla = $dac_id_plantilla;

        return $this;
    }

    public function getActColorEvento(): ?string
    {
        return $this->act_color_evento;
    }

    public function setActColorEvento(?string $act_color_evento): self
    {
        $this->act_color_evento = $act_color_evento;

        return $this;
    }

    public function getDejoNota(): ?int
    {
        return $this->dejo_nota;
    }

    public function setDejoNota(?int $dejo_nota): self
    {
        $this->dejo_nota = $dejo_nota;

        return $this;
    }

    public function getConsWeb(): ?int
    {
        return $this->cons_web;
    }

    public function setConsWeb(?int $cons_web): self
    {
        $this->cons_web = $cons_web;

        return $this;
    }

    public function getActFoja(): ?string
    {
        return $this->act_foja;
    }

    public function setActFoja(?string $act_foja): self
    {
        $this->act_foja = $act_foja;

        return $this;
    }

    public function getPriId(): ?int
    {
        return $this->pri_id;
    }

    public function setPriId(?int $pri_id): self
    {
        $this->pri_id = $pri_id;

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

    public function getOrgUbicacion(): ?int
    {
        return $this->org_ubicacion;
    }

    public function setOrgUbicacion(?int $org_ubicacion): self
    {
        $this->org_ubicacion = $org_ubicacion;

        return $this;
    }

    public function getEnLetra(): ?int
    {
        return $this->en_letra;
    }

    public function setEnLetra(?int $en_letra): self
    {
        $this->en_letra = $en_letra;

        return $this;
    }

    public function getTramite(): ?string
    {
        return $this->tramite;
    }

    public function setTramite(?string $tramite): self
    {
        $this->tramite = $tramite;

        return $this;
    }

    public function getActNumOfi(): ?int
    {
        return $this->act_num_ofi;
    }

    public function setActNumOfi(?int $act_num_ofi): self
    {
        $this->act_num_ofi = $act_num_ofi;

        return $this;
    }

    public function getActCargo(): ?string
    {
        return $this->act_cargo;
    }

    public function setActCargo(?string $act_cargo): self
    {
        $this->act_cargo = $act_cargo;

        return $this;
    }

    public function getFecAudiencia(): ?\DateTimeInterface
    {
        return $this->fec_audiencia;
    }

    public function setFecAudiencia(?\DateTimeInterface $fec_audiencia): self
    {
        $this->fec_audiencia = $fec_audiencia;

        return $this;
    }

    public function getSedAudiencia(): ?int
    {
        return $this->sed_audiencia;
    }

    public function setSedAudiencia(?int $sed_audiencia): self
    {
        $this->sed_audiencia = $sed_audiencia;

        return $this;
    }

    public function getUsrMediador(): ?int
    {
        return $this->usr_mediador;
    }

    public function setUsrMediador(?int $usr_mediador): self
    {
        $this->usr_mediador = $usr_mediador;

        return $this;
    }

    public function getNotificacion(): ?string
    {
        return $this->notificacion;
    }

    public function setNotificacion(?string $notificacion): self
    {
        $this->notificacion = $notificacion;

        return $this;
    }

    public function getFecNot(): ?\DateTimeInterface
    {
        return $this->fec_not;
    }

    public function setFecNot(?\DateTimeInterface $fec_not): self
    {
        $this->fec_not = $fec_not;

        return $this;
    }

    public function getActFecLib(): ?\DateTimeInterface
    {
        return $this->act_fec_lib;
    }

    public function setActFecLib(?\DateTimeInterface $act_fec_lib): self
    {
        $this->act_fec_lib = $act_fec_lib;

        return $this;
    }

    public function getActFecDelig(): ?\DateTimeInterface
    {
        return $this->act_fec_delig;
    }

    public function setActFecDelig(?\DateTimeInterface $act_fec_delig): self
    {
        $this->act_fec_delig = $act_fec_delig;

        return $this;
    }

    public function getActFecRec(): ?\DateTimeInterface
    {
        return $this->act_fec_rec;
    }

    public function setActFecRec(?\DateTimeInterface $act_fec_rec): self
    {
        $this->act_fec_rec = $act_fec_rec;

        return $this;
    }

    public function getActDescrActo(): ?string
    {
        return $this->act_descr_acto;
    }

    public function setActDescrActo(?string $act_descr_acto): self
    {
        $this->act_descr_acto = $act_descr_acto;

        return $this;
    }

    public function getProTraId(): ?int
    {
        return $this->pro_tra_id;
    }

    public function setProTraId(?int $pro_tra_id): self
    {
        $this->pro_tra_id = $pro_tra_id;

        return $this;
    }

    public function getActSugerenciaOoh(): ?string
    {
        return $this->act_sugerencia_ooh;
    }

    public function setActSugerenciaOoh(?string $act_sugerencia_ooh): self
    {
        $this->act_sugerencia_ooh = $act_sugerencia_ooh;

        return $this;
    }

    public function getExtraproce(): ?int
    {
        return $this->extraproce;
    }

    public function setExtraproce(?int $extraproce): self
    {
        $this->extraproce = $extraproce;

        return $this;
    }

    public function getFecCorInf(): ?\DateTimeInterface
    {
        return $this->fec_cor_inf;
    }

    public function setFecCorInf(?\DateTimeInterface $fec_cor_inf): self
    {
        $this->fec_cor_inf = $fec_cor_inf;

        return $this;
    }

    public function getNroNot(): ?string
    {
        return $this->nro_not;
    }

    public function setNroNot(?string $nro_not): self
    {
        $this->nro_not = $nro_not;

        return $this;
    }

    public function getFecPago(): ?\DateTimeInterface
    {
        return $this->fec_pago;
    }

    public function setFecPago(?\DateTimeInterface $fec_pago): self
    {
        $this->fec_pago = $fec_pago;

        return $this;
    }

    public function getNroNotPago(): ?string
    {
        return $this->nro_not_pago;
    }

    public function setNroNotPago(?string $nro_not_pago): self
    {
        $this->nro_not_pago = $nro_not_pago;

        return $this;
    }

    public function getTiempoRpta(): ?string
    {
        return $this->tiempo_rpta;
    }

    public function setTiempoRpta(?string $tiempo_rpta): self
    {
        $this->tiempo_rpta = $tiempo_rpta;

        return $this;
    }

    public function getUsrAgenteId(): ?int
    {
        return $this->usr_agente_id;
    }

    public function setUsrAgenteId(?int $usr_agente_id): self
    {
        $this->usr_agente_id = $usr_agente_id;

        return $this;
    }

    public function getUsrProId(): ?int
    {
        return $this->usr_pro_id;
    }

    public function setUsrProId(?int $usr_pro_id): self
    {
        $this->usr_pro_id = $usr_pro_id;

        return $this;
    }

    public function getFecAcepCargo(): ?\DateTimeInterface
    {
        return $this->fec_acep_cargo;
    }

    public function setFecAcepCargo(?\DateTimeInterface $fec_acep_cargo): self
    {
        $this->fec_acep_cargo = $fec_acep_cargo;

        return $this;
    }

    public function getFecVenProrroga(): ?\DateTimeInterface
    {
        return $this->fec_ven_prorroga;
    }

    public function setFecVenProrroga(?\DateTimeInterface $fec_ven_prorroga): self
    {
        $this->fec_ven_prorroga = $fec_ven_prorroga;

        return $this;
    }

    public function getFecIniProrroga(): ?\DateTimeInterface
    {
        return $this->fec_ini_prorroga;
    }

    public function setFecIniProrroga(?\DateTimeInterface $fec_ini_prorroga): self
    {
        $this->fec_ini_prorroga = $fec_ini_prorroga;

        return $this;
    }

    public function getActualizacion(): ?string
    {
        return $this->actualizacion;
    }

    public function setActualizacion(?string $actualizacion): self
    {
        $this->actualizacion = $actualizacion;

        return $this;
    }

    public function getFueAtendido(): ?string
    {
        return $this->fue_atendido;
    }

    public function setFueAtendido(?string $fue_atendido): self
    {
        $this->fue_atendido = $fue_atendido;

        return $this;
    }

    public function getRecibioCitacion(): ?string
    {
        return $this->recibio_citacion;
    }

    public function setRecibioCitacion(?string $recibio_citacion): self
    {
        $this->recibio_citacion = $recibio_citacion;

        return $this;
    }

    public function getFecEnvRtaXmail(): ?\DateTimeInterface
    {
        return $this->fec_env_rta_xmail;
    }

    public function setFecEnvRtaXmail(?\DateTimeInterface $fec_env_rta_xmail): self
    {
        $this->fec_env_rta_xmail = $fec_env_rta_xmail;

        return $this;
    }

    public function getFecPaseOfi(): ?\DateTimeInterface
    {
        return $this->fec_pase_ofi;
    }

    public function setFecPaseOfi(?\DateTimeInterface $fec_pase_ofi): self
    {
        $this->fec_pase_ofi = $fec_pase_ofi;

        return $this;
    }

    public function getViolenciaVerbal(): ?string
    {
        return $this->violencia_verbal;
    }

    public function setViolenciaVerbal(?string $violencia_verbal): self
    {
        $this->violencia_verbal = $violencia_verbal;

        return $this;
    }

    public function getViolenciaFisica(): ?string
    {
        return $this->violencia_fisica;
    }

    public function setViolenciaFisica(?string $violencia_fisica): self
    {
        $this->violencia_fisica = $violencia_fisica;

        return $this;
    }

    public function getDenuncia(): ?string
    {
        return $this->denuncia;
    }

    public function setDenuncia(?string $denuncia): self
    {
        $this->denuncia = $denuncia;

        return $this;
    }

    public function getPlazo(): ?string
    {
        return $this->plazo;
    }

    public function setPlazo(?string $plazo): self
    {
        $this->plazo = $plazo;

        return $this;
    }

    public function getEntrevista(): ?string
    {
        return $this->entrevista;
    }

    public function setEntrevista(?string $entrevista): self
    {
        $this->entrevista = $entrevista;

        return $this;
    }

    public function getEntrevTex(): ?string
    {
        return $this->entrev_tex;
    }

    public function setEntrevTex(?string $entrev_tex): self
    {
        $this->entrev_tex = $entrev_tex;

        return $this;
    }

    public function getTratoHumi(): ?string
    {
        return $this->trato_humi;
    }

    public function setTratoHumi(?string $trato_humi): self
    {
        $this->trato_humi = $trato_humi;

        return $this;
    }

    public function getFecHoraNota(): ?\DateTimeInterface
    {
        return $this->fec_hora_nota;
    }

    public function setFecHoraNota(?\DateTimeInterface $fec_hora_nota): self
    {
        $this->fec_hora_nota = $fec_hora_nota;

        return $this;
    }

    public function getAct(): ?Actuacion
    {
        return $this->act;
    }

    public function setAct(?Actuacion $act): self
    {
        $this->act = $act;

        return $this;
    }


}
