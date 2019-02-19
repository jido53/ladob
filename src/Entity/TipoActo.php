<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TipoActoRepository")
 * @ORM\Table(name="tao")
 */
class TipoActo
{
/**
*@ORM\Column(type="integer")
* @ORM\Id()
* @ORM\GeneratedValue()
*/
private $tao_id;
/**
*@ORM\Column(type="string")
*/
private $tao_descr;
/**
*@ORM\Column(type="integer")
*/
private $extraproce;
/**
*@ORM\Column(type="integer")
*/
private $fue_id;
/**
*@ORM\Column(type="integer")
*/
private $tao_habilitado;
/**
*@ORM\Column(type="string")
*/
private $tao_cod;

public function getTaoId(): ?int
{
    return $this->tao_id;
}

public function getTaoDescr(): ?string
{
    return $this->tao_descr;
}

public function setTaoDescr(string $tao_descr): self
{
    $this->tao_descr = $tao_descr;

    return $this;
}

public function getExtraproce(): ?int
{
    return $this->extraproce;
}

public function setExtraproce(int $extraproce): self
{
    $this->extraproce = $extraproce;

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

public function getTaoHabilitado(): ?int
{
    return $this->tao_habilitado;
}

public function setTaoHabilitado(int $tao_habilitado): self
{
    $this->tao_habilitado = $tao_habilitado;

    return $this;
}

public function getTaoCod(): ?string
{
    return $this->tao_cod;
}

public function setTaoCod(string $tao_cod): self
{
    $this->tao_cod = $tao_cod;

    return $this;
}





}
