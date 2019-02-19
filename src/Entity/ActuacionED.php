<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActuacionEDRepository")
 * @ORM\Table(name="tao_tac")
 */
class ActuacionED
{


/**
*@ORM\Column(type="integer")
* @ORM\Id()
*/
    private $tao_id;
/**
*@ORM\Column(type="integer")
* @ORM\Id()
*/
    private $tac_id;
/**
*@ORM\Column(type="integer")
* @ORM\Id()
*/
    private $dac_id;
/**
*@ORM\Column(type="integer")
*/
    private $cambia_asig_id;
/**
*@ORM\Column(type="integer")
*/
    private $cambia_est_id;
/**
*@ORM\Column(type="integer")
*/
    private $genera_tex_id;
/**
*@ORM\Column(type="integer")
*/
    private $genera_org_id;
/**
*@ORM\Column(type="integer")
*/
    private $genera_ttr_id;
/**
*@ORM\Column(type="integer")
*/
    private $genera_oju_id;
/**
*@ORM\Column(type="integer")
*/
    private $genera_org_ori_con;
/**
*@ORM\Column(type="integer")
*/
    private $genera_mod_ing_id;
/**
*@ORM\Column(type="integer")
*/
    private $tex_id;
/**
*@ORM\Column(type="integer")
*/
    private $genera_pedido_dat;
/**
*@ORM\Column(type="integer")
*/
    private $org_id;
/**
*@ORM\Column(type="integer")
*/
    private $genera_respuesta;
/**
*@ORM\Column(type="integer")
*/
    private $cambia_firma_est_id;
/**
*@ORM\Column(type="integer")
*/
    private $activo;
/**
*@ORM\Column(type="integer")
*/
    private $copia_per;
/**
*@ORM\Column(type="integer")
*/
    private $copia_ttr_oju;
/**
*@ORM\Column(type="integer")
*/
    private $copia_act;
/**
*@ORM\Column(type="integer")
*/
    private $cambia_stp_id;
/**
*@ORM\Column(type="integer")
*/
    private $alta_act;
/**
*@ORM\Column(type="integer")
*/
    private $lote_default;

    public function getTaoId(): ?int
    {
        return $this->tao_id;
    }

    public function setTaoId(int $tao_id): self
    {
        $this->tao_id = $tao_id;

        return $this;
    }

    public function getTacId(): ?int
    {
        return $this->tac_id;
    }

    public function setTacId(int $tac_id): self
    {
        $this->tac_id = $tac_id;

        return $this;
    }

    public function getDacId(): ?int
    {
        return $this->dac_id;
    }

    public function setDacId(int $dac_id): self
    {
        $this->dac_id = $dac_id;

        return $this;
    }

    public function getCambiaAsigId(): ?int
    {
        return $this->cambia_asig_id;
    }

    public function setCambiaAsigId(int $cambia_asig_id): self
    {
        $this->cambia_asig_id = $cambia_asig_id;

        return $this;
    }

    public function getCambiaEstId(): ?int
    {
        return $this->cambia_est_id;
    }

    public function setCambiaEstId(int $cambia_est_id): self
    {
        $this->cambia_est_id = $cambia_est_id;

        return $this;
    }

    public function getGeneraTexId(): ?int
    {
        return $this->genera_tex_id;
    }

    public function setGeneraTexId(int $genera_tex_id): self
    {
        $this->genera_tex_id = $genera_tex_id;

        return $this;
    }

    public function getGeneraOrgId(): ?int
    {
        return $this->genera_org_id;
    }

    public function setGeneraOrgId(int $genera_org_id): self
    {
        $this->genera_org_id = $genera_org_id;

        return $this;
    }

    public function getGeneraTtrId(): ?int
    {
        return $this->genera_ttr_id;
    }

    public function setGeneraTtrId(int $genera_ttr_id): self
    {
        $this->genera_ttr_id = $genera_ttr_id;

        return $this;
    }

    public function getGeneraOjuId(): ?int
    {
        return $this->genera_oju_id;
    }

    public function setGeneraOjuId(int $genera_oju_id): self
    {
        $this->genera_oju_id = $genera_oju_id;

        return $this;
    }

    public function getGeneraOrgOriCon(): ?int
    {
        return $this->genera_org_ori_con;
    }

    public function setGeneraOrgOriCon(int $genera_org_ori_con): self
    {
        $this->genera_org_ori_con = $genera_org_ori_con;

        return $this;
    }

    public function getGeneraModIngId(): ?int
    {
        return $this->genera_mod_ing_id;
    }

    public function setGeneraModIngId(int $genera_mod_ing_id): self
    {
        $this->genera_mod_ing_id = $genera_mod_ing_id;

        return $this;
    }

    public function getTexId(): ?int
    {
        return $this->tex_id;
    }

    public function setTexId(int $tex_id): self
    {
        $this->tex_id = $tex_id;

        return $this;
    }

    public function getGeneraPedidoDat(): ?int
    {
        return $this->genera_pedido_dat;
    }

    public function setGeneraPedidoDat(int $genera_pedido_dat): self
    {
        $this->genera_pedido_dat = $genera_pedido_dat;

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

    public function getGeneraRespuesta(): ?int
    {
        return $this->genera_respuesta;
    }

    public function setGeneraRespuesta(int $genera_respuesta): self
    {
        $this->genera_respuesta = $genera_respuesta;

        return $this;
    }

    public function getCambiaFirmaEstId(): ?int
    {
        return $this->cambia_firma_est_id;
    }

    public function setCambiaFirmaEstId(int $cambia_firma_est_id): self
    {
        $this->cambia_firma_est_id = $cambia_firma_est_id;

        return $this;
    }

    public function getActivo(): ?int
    {
        return $this->activo;
    }

    public function setActivo(int $activo): self
    {
        $this->activo = $activo;

        return $this;
    }

    public function getCopiaPer(): ?int
    {
        return $this->copia_per;
    }

    public function setCopiaPer(int $copia_per): self
    {
        $this->copia_per = $copia_per;

        return $this;
    }

    public function getCopiaTtrOju(): ?int
    {
        return $this->copia_ttr_oju;
    }

    public function setCopiaTtrOju(int $copia_ttr_oju): self
    {
        $this->copia_ttr_oju = $copia_ttr_oju;

        return $this;
    }

    public function getCopiaAct(): ?int
    {
        return $this->copia_act;
    }

    public function setCopiaAct(int $copia_act): self
    {
        $this->copia_act = $copia_act;

        return $this;
    }

    public function getCambiaStpId(): ?int
    {
        return $this->cambia_stp_id;
    }

    public function setCambiaStpId(int $cambia_stp_id): self
    {
        $this->cambia_stp_id = $cambia_stp_id;

        return $this;
    }

    public function getAltaAct(): ?int
    {
        return $this->alta_act;
    }

    public function setAltaAct(int $alta_act): self
    {
        $this->alta_act = $alta_act;

        return $this;
    }

    public function getLoteDefault(): ?int
    {
        return $this->lote_default;
    }

    public function setLoteDefault(int $lote_default): self
    {
        $this->lote_default = $lote_default;

        return $this;
    }

}
