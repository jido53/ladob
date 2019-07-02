<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\TviRepository")
 */
class Tvi
{
    /**
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $tvi_id;


    /**
     * @ORM\Column(type="string")
     */

    private $tvi_descr;


    /**
     * @ORM\Column(type="integer")
     */

    private $tvi_tviinv;


    /**
     * @ORM\Column(type="integer")
     */

    private $tvi_tipo;


    /**
     * @ORM\Column(type="integer")
     */

    private $tpf_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $tvi_tpf;


    /**
     * @ORM\Column(type="string")
     */

    private $tvi_cod;


    /**
     * @ORM\Column(type="integer")
     */

    private $tvi_default;


    /**
     * @ORM\Column(type="integer")
     */

    private $tvi_sorteo;


    /**
     * @ORM\Column(type="integer")
     */

    private $tvi_indag;


    /**
     * @ORM\Column(type="integer")
     */

    private $tvi_activo;


    /**
     * @ORM\Column(type="integer")
     */

    private $tvi_act_dem;


    /**
     * @ORM\Column(type="integer")
     */

    private $tvi_orden;


    /**
     * @ORM\Column(type="integer")
     */

    private $tvi_valida;


    /**
     * @ORM\Column(type="integer")
     */

    private $tvi_fam;

    public function getTviId(): ?int
    {
        return $this->tvi_id;
    }

    public function getTviDescr(): ?string
    {
        return $this->tvi_descr;
    }

    public function setTviDescr(string $tvi_descr): self
    {
        $this->tvi_descr = $tvi_descr;

        return $this;
    }

    public function getTviTviinv(): ?int
    {
        return $this->tvi_tviinv;
    }

    public function setTviTviinv(int $tvi_tviinv): self
    {
        $this->tvi_tviinv = $tvi_tviinv;

        return $this;
    }

    public function getTviTipo(): ?int
    {
        return $this->tvi_tipo;
    }

    public function setTviTipo(int $tvi_tipo): self
    {
        $this->tvi_tipo = $tvi_tipo;

        return $this;
    }

    public function getTpfId(): ?int
    {
        return $this->tpf_id;
    }

    public function setTpfId(int $tpf_id): self
    {
        $this->tpf_id = $tpf_id;

        return $this;
    }

    public function getTviTpf(): ?int
    {
        return $this->tvi_tpf;
    }

    public function setTviTpf(int $tvi_tpf): self
    {
        $this->tvi_tpf = $tvi_tpf;

        return $this;
    }

    public function getTviCod(): ?string
    {
        return $this->tvi_cod;
    }

    public function setTviCod(string $tvi_cod): self
    {
        $this->tvi_cod = $tvi_cod;

        return $this;
    }

    public function getTviDefault(): ?int
    {
        return $this->tvi_default;
    }

    public function setTviDefault(int $tvi_default): self
    {
        $this->tvi_default = $tvi_default;

        return $this;
    }

    public function getTviSorteo(): ?int
    {
        return $this->tvi_sorteo;
    }

    public function setTviSorteo(int $tvi_sorteo): self
    {
        $this->tvi_sorteo = $tvi_sorteo;

        return $this;
    }

    public function getTviIndag(): ?int
    {
        return $this->tvi_indag;
    }

    public function setTviIndag(int $tvi_indag): self
    {
        $this->tvi_indag = $tvi_indag;

        return $this;
    }

    public function getTviActivo(): ?int
    {
        return $this->tvi_activo;
    }

    public function setTviActivo(int $tvi_activo): self
    {
        $this->tvi_activo = $tvi_activo;

        return $this;
    }

    public function getTviActDem(): ?int
    {
        return $this->tvi_act_dem;
    }

    public function setTviActDem(int $tvi_act_dem): self
    {
        $this->tvi_act_dem = $tvi_act_dem;

        return $this;
    }

    public function getTviOrden(): ?int
    {
        return $this->tvi_orden;
    }

    public function setTviOrden(int $tvi_orden): self
    {
        $this->tvi_orden = $tvi_orden;

        return $this;
    }

    public function getTviValida(): ?int
    {
        return $this->tvi_valida;
    }

    public function setTviValida(int $tvi_valida): self
    {
        $this->tvi_valida = $tvi_valida;

        return $this;
    }

    public function getTviFam(): ?int
    {
        return $this->tvi_fam;
    }

    public function setTviFam(int $tvi_fam): self
    {
        $this->tvi_fam = $tvi_fam;

        return $this;
    }


}
