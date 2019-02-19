<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TipoPlantillaRepository")
 * @ORM\Table(name="tac")
 */
class TipoPlantilla
{

    /**
    *@ORM\Column(type="integer")
    * @ORM\Id()
    * @ORM\GeneratedValue()
    */
    private $dac_id;
/**
*@ORM\Column(type="integer")
*/
private $tac_id;
/**
*@ORM\Column(type="string")
*/
private $dac_cod;
/**
*@ORM\Column(type="string")
*/
private $dac_descr;
/**
*@ORM\Column(type="integer")
*/
private $nac_id;
/**
*@ORM\Column(type="integer")
*/
private $dac_edit;
/**
*@ORM\Column(type="boolean")
*/
private $dac_texto;
/**
*@ORM\Column(type="integer")
*/
private $dac_elim;
/**
*@ORM\Column(type="integer")
*/
private $dac_pki;
/**
*@ORM\Column(type="integer")
*/
private $dac_firconf;
/**
*@ORM\Column(type="integer")
*/
private $dac_unico;
/**
*@ORM\Column(type="integer")
*/
private $dac_visibledd;
/**
*@ORM\Column(type="integer")
*/
private $dac_firaut;
/**
*@ORM\Column(type="integer")
*/
private $dac_elec;
/**
*@ORM\Column(type="integer")
*/
private $dac_camest;
/**
*@ORM\Column(type="integer")
*/
private $est_id;
/**
*@ORM\Column(type="integer")
*/
private $dac_texto_unico;
/**
*@ORM\Column(type="integer")
*/
private $dac_sujeto;
/**
*@ORM\Column(type="integer")
*/
private $dac_notifica;
/**
*@ORM\Column(type="integer")
*/
private $dac_mandatario;
/**
*@ORM\Column(type="integer")
*/
private $dac_externo;
/**
*@ORM\Column(type="string")
*/
private $eac_mascara;
/**
*@ORM\Column(type="integer")
*/
private $dac_activo;
/**
*@ORM\Column(type="integer")
*/
private $dac_pre;
/**
*@ORM\Column(type="integer")
*/
private $dac_nota;

public function getDacId(): ?int
{
    return $this->dac_id;
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

public function getDacCod(): ?string
{
    return $this->dac_cod;
}

public function setDacCod(string $dac_cod): self
{
    $this->dac_cod = $dac_cod;

    return $this;
}

public function getDacDescr(): ?string
{
    return $this->dac_descr;
}

public function setDacDescr(string $dac_descr): self
{
    $this->dac_descr = $dac_descr;

    return $this;
}

public function getNacId(): ?int
{
    return $this->nac_id;
}

public function setNacId(int $nac_id): self
{
    $this->nac_id = $nac_id;

    return $this;
}

public function getDacEdit(): ?int
{
    return $this->dac_edit;
}

public function setDacEdit(int $dac_edit): self
{
    $this->dac_edit = $dac_edit;

    return $this;
}

public function getDacTexto(): ?bool
{
    return $this->dac_texto;
}

public function setDacTexto(bool $dac_texto): self
{
    $this->dac_texto = $dac_texto;

    return $this;
}

public function getDacElim(): ?int
{
    return $this->dac_elim;
}

public function setDacElim(int $dac_elim): self
{
    $this->dac_elim = $dac_elim;

    return $this;
}

public function getDacPki(): ?int
{
    return $this->dac_pki;
}

public function setDacPki(int $dac_pki): self
{
    $this->dac_pki = $dac_pki;

    return $this;
}

public function getDacFirconf(): ?int
{
    return $this->dac_firconf;
}

public function setDacFirconf(int $dac_firconf): self
{
    $this->dac_firconf = $dac_firconf;

    return $this;
}

public function getDacUnico(): ?int
{
    return $this->dac_unico;
}

public function setDacUnico(int $dac_unico): self
{
    $this->dac_unico = $dac_unico;

    return $this;
}

public function getDacVisibledd(): ?int
{
    return $this->dac_visibledd;
}

public function setDacVisibledd(int $dac_visibledd): self
{
    $this->dac_visibledd = $dac_visibledd;

    return $this;
}

public function getDacFiraut(): ?int
{
    return $this->dac_firaut;
}

public function setDacFiraut(int $dac_firaut): self
{
    $this->dac_firaut = $dac_firaut;

    return $this;
}

public function getDacElec(): ?int
{
    return $this->dac_elec;
}

public function setDacElec(int $dac_elec): self
{
    $this->dac_elec = $dac_elec;

    return $this;
}

public function getDacCamest(): ?int
{
    return $this->dac_camest;
}

public function setDacCamest(int $dac_camest): self
{
    $this->dac_camest = $dac_camest;

    return $this;
}

public function getEstId(): ?int
{
    return $this->est_id;
}

public function setEstId(int $est_id): self
{
    $this->est_id = $est_id;

    return $this;
}

public function getDacTextoUnico(): ?int
{
    return $this->dac_texto_unico;
}

public function setDacTextoUnico(int $dac_texto_unico): self
{
    $this->dac_texto_unico = $dac_texto_unico;

    return $this;
}

public function getDacSujeto(): ?int
{
    return $this->dac_sujeto;
}

public function setDacSujeto(int $dac_sujeto): self
{
    $this->dac_sujeto = $dac_sujeto;

    return $this;
}

public function getDacNotifica(): ?int
{
    return $this->dac_notifica;
}

public function setDacNotifica(int $dac_notifica): self
{
    $this->dac_notifica = $dac_notifica;

    return $this;
}

public function getDacMandatario(): ?int
{
    return $this->dac_mandatario;
}

public function setDacMandatario(int $dac_mandatario): self
{
    $this->dac_mandatario = $dac_mandatario;

    return $this;
}

public function getDacExterno(): ?int
{
    return $this->dac_externo;
}

public function setDacExterno(int $dac_externo): self
{
    $this->dac_externo = $dac_externo;

    return $this;
}

public function getEacMascara(): ?string
{
    return $this->eac_mascara;
}

public function setEacMascara(string $eac_mascara): self
{
    $this->eac_mascara = $eac_mascara;

    return $this;
}

public function getDacActivo(): ?int
{
    return $this->dac_activo;
}

public function setDacActivo(int $dac_activo): self
{
    $this->dac_activo = $dac_activo;

    return $this;
}

public function getDacPre(): ?int
{
    return $this->dac_pre;
}

public function setDacPre(int $dac_pre): self
{
    $this->dac_pre = $dac_pre;

    return $this;
}

public function getDacNota(): ?int
{
    return $this->dac_nota;
}

public function setDacNota(int $dac_nota): self
{
    $this->dac_nota = $dac_nota;

    return $this;
}

}
