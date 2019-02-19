<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TipoDocumentoRepository")
 * @ORM\Table(name="tac")
 */
class TipoDocumento
{


/**
* @ORM\Id()
* @ORM\GeneratedValue()
*@ORM\Column(type="integer")
*/
private $tac_id;
/**
*@ORM\Column(type="string")
*/
private $tac_cod;
/**
*@ORM\Column(type="string")
*/
private $tac_descr;
/**
*@ORM\Column(type="integer")
*/
private $tac_gener;
/**
*@ORM\Column(type="integer")
*/
private $tac_numer;
/**
*@ORM\Column(type="integer")
*/
private $tal_id;
/**
*@ORM\Column(type="integer")
*/
private $tac_carat;
/**
*@ORM\Column(type="integer")
*/
private $tac_visibledep;
/**
*@ORM\Column(type="integer")
*/
private $tac_visibleorg;
/**
*@ORM\Column(type="integer")
*/
private $tac_ced;
/**
*@ORM\Column(type="integer")
*/
private $tac_acta;
/**
*@ORM\Column(type="integer")
*/
private $tac_externo;
/**
*@ORM\Column(type="integer")
*/
private $tac_llam;
/**
*@ORM\Column(type="integer")
*/
private $tac_ingweb;
/**
*@ORM\Column(type="integer")
*/
private $tac_protocolo;
/**
*@ORM\Column(type="integer")
*/
private $tac_agregado;
/**
*@ORM\Column(type="integer")
*/
private $tac_inicio;
/**
*@ORM\Column(type="integer")
*/
private $tac_tramitepyc;
/**
*@ORM\Column(type="integer")
*/
private $tac_tramiteuje;
/**
*@ORM\Column(type="integer")
*/
private $tac_habilitado;
/**
*@ORM\Column(type="integer")
*/
private $tac_helper;
/**
*@ORM\Column(type="integer")
*/
private $tac_search;
/**
*@ORM\Column(type="integer")
*/
private $tac_ced_ext;
/**
*@ORM\Column(type="integer")
*/
private $tao_id;

public function getTacId(): ?int
{
    return $this->tac_id;
}

public function getTacCod(): ?string
{
    return $this->tac_cod;
}

public function setTacCod(string $tac_cod): self
{
    $this->tac_cod = $tac_cod;

    return $this;
}

public function getTacDescr(): ?string
{
    return $this->tac_descr;
}

public function setTacDescr(string $tac_descr): self
{
    $this->tac_descr = $tac_descr;

    return $this;
}

public function getTacGener(): ?int
{
    return $this->tac_gener;
}

public function setTacGener(int $tac_gener): self
{
    $this->tac_gener = $tac_gener;

    return $this;
}

public function getTacNumer(): ?int
{
    return $this->tac_numer;
}

public function setTacNumer(int $tac_numer): self
{
    $this->tac_numer = $tac_numer;

    return $this;
}

public function getTalId(): ?int
{
    return $this->tal_id;
}

public function setTalId(int $tal_id): self
{
    $this->tal_id = $tal_id;

    return $this;
}

public function getTacCarat(): ?int
{
    return $this->tac_carat;
}

public function setTacCarat(int $tac_carat): self
{
    $this->tac_carat = $tac_carat;

    return $this;
}

public function getTacVisibledep(): ?int
{
    return $this->tac_visibledep;
}

public function setTacVisibledep(int $tac_visibledep): self
{
    $this->tac_visibledep = $tac_visibledep;

    return $this;
}

public function getTacVisibleorg(): ?int
{
    return $this->tac_visibleorg;
}

public function setTacVisibleorg(int $tac_visibleorg): self
{
    $this->tac_visibleorg = $tac_visibleorg;

    return $this;
}

public function getTacCed(): ?int
{
    return $this->tac_ced;
}

public function setTacCed(int $tac_ced): self
{
    $this->tac_ced = $tac_ced;

    return $this;
}

public function getTacActa(): ?int
{
    return $this->tac_acta;
}

public function setTacActa(int $tac_acta): self
{
    $this->tac_acta = $tac_acta;

    return $this;
}

public function getTacExterno(): ?int
{
    return $this->tac_externo;
}

public function setTacExterno(int $tac_externo): self
{
    $this->tac_externo = $tac_externo;

    return $this;
}

public function getTacLlam(): ?int
{
    return $this->tac_llam;
}

public function setTacLlam(int $tac_llam): self
{
    $this->tac_llam = $tac_llam;

    return $this;
}

public function getTacIngweb(): ?int
{
    return $this->tac_ingweb;
}

public function setTacIngweb(int $tac_ingweb): self
{
    $this->tac_ingweb = $tac_ingweb;

    return $this;
}

public function getTacProtocolo(): ?int
{
    return $this->tac_protocolo;
}

public function setTacProtocolo(int $tac_protocolo): self
{
    $this->tac_protocolo = $tac_protocolo;

    return $this;
}

public function getTacAgregado(): ?int
{
    return $this->tac_agregado;
}

public function setTacAgregado(int $tac_agregado): self
{
    $this->tac_agregado = $tac_agregado;

    return $this;
}

public function getTacInicio(): ?int
{
    return $this->tac_inicio;
}

public function setTacInicio(int $tac_inicio): self
{
    $this->tac_inicio = $tac_inicio;

    return $this;
}

public function getTacTramitepyc(): ?int
{
    return $this->tac_tramitepyc;
}

public function setTacTramitepyc(int $tac_tramitepyc): self
{
    $this->tac_tramitepyc = $tac_tramitepyc;

    return $this;
}

public function getTacTramiteuje(): ?int
{
    return $this->tac_tramiteuje;
}

public function setTacTramiteuje(int $tac_tramiteuje): self
{
    $this->tac_tramiteuje = $tac_tramiteuje;

    return $this;
}

public function getTacHabilitado(): ?int
{
    return $this->tac_habilitado;
}

public function setTacHabilitado(int $tac_habilitado): self
{
    $this->tac_habilitado = $tac_habilitado;

    return $this;
}

public function getTacHelper(): ?int
{
    return $this->tac_helper;
}

public function setTacHelper(int $tac_helper): self
{
    $this->tac_helper = $tac_helper;

    return $this;
}

public function getTacSearch(): ?int
{
    return $this->tac_search;
}

public function setTacSearch(int $tac_search): self
{
    $this->tac_search = $tac_search;

    return $this;
}

public function getTacCedExt(): ?int
{
    return $this->tac_ced_ext;
}

public function setTacCedExt(int $tac_ced_ext): self
{
    $this->tac_ced_ext = $tac_ced_ext;

    return $this;
}

public function getTaoId(): ?int
{
    return $this->tao_id;
}

public function setTaoId(int $tao_id): self
{
    $this->tao_id = $tao_id;

    return $this;
}

}
