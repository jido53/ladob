<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

 /**
 *
 * @ORM\Entity(repositoryClass="App\Repository\TdoRepository")
 */




class Tdo
{
    /**
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */


    private $tdo_id;


    /**
     * @ORM\Column(type="string")
     */

    private $tdo_descr;


    /**
     * @ORM\Column(type="string")
     */

    private $tdo_cod;


    /**
     * @ORM\Column(type="integer")
     */

    private $tdo_tipodato;


    /**
     * @ORM\Column(type="integer")
     */

    private $tal_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $tdo_usatal;


    /**
     * @ORM\Column(type="integer")
     */

    private $tdo_orden;


    /**
     * @ORM\Column(type="integer")
     */

    private $tdo_cantmin;


    /**
     * @ORM\Column(type="integer")
     */

    private $tdo_cantmax;


    /**
     * @ORM\Column(type="string")
     */

    private $tdo_cod_ws;


    /**
     * @ORM\Column(type="string")
     */

    private $tdo_descr_ws;

    public function __toString()
    {
        return $this->getTdoDescr();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTdoId(): ?int
    {
        return $this->tdo_id;
    }

    public function getTdoDescr()
    {
        return $this->tdo_descr;
    }

    public function setTdoDescr($tdo_descr): self
    {
        $this->tdo_descr = $tdo_descr;

        return $this;
    }

    public function getTdoCod(): ?string
    {
        return $this->tdo_cod;
    }

    public function setTdoCod(string $tdo_cod): self
    {
        $this->tdo_cod = $tdo_cod;

        return $this;
    }

    public function getTdoTipodato(): ?int
    {
        return $this->tdo_tipodato;
    }

    public function setTdoTipodato(int $tdo_tipodato): self
    {
        $this->tdo_tipodato = $tdo_tipodato;

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

    public function getTdoUsatal(): ?int
    {
        return $this->tdo_usatal;
    }

    public function setTdoUsatal(int $tdo_usatal): self
    {
        $this->tdo_usatal = $tdo_usatal;

        return $this;
    }

    public function getTdoOrden(): ?int
    {
        return $this->tdo_orden;
    }

    public function setTdoOrden(int $tdo_orden): self
    {
        $this->tdo_orden = $tdo_orden;

        return $this;
    }

    public function getTdoCantmin(): ?int
    {
        return $this->tdo_cantmin;
    }

    public function setTdoCantmin(int $tdo_cantmin): self
    {
        $this->tdo_cantmin = $tdo_cantmin;

        return $this;
    }

    public function getTdoCantmax(): ?int
    {
        return $this->tdo_cantmax;
    }

    public function setTdoCantmax(int $tdo_cantmax): self
    {
        $this->tdo_cantmax = $tdo_cantmax;

        return $this;
    }

    public function getTdoCodWs(): ?string
    {
        return $this->tdo_cod_ws;
    }

    public function setTdoCodWs(string $tdo_cod_ws): self
    {
        $this->tdo_cod_ws = $tdo_cod_ws;

        return $this;
    }

    public function getTdoDescrWs(): ?string
    {
        return $this->tdo_descr_ws;
    }

    public function setTdoDescrWs(string $tdo_descr_ws): self
    {
        $this->tdo_descr_ws = $tdo_descr_ws;

        return $this;
    }
}
