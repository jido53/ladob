<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\VocRepository")
 */
class Voc
{
/*
 * "voc_id";"id del vocabulario"
"voc_cod";"Código del vocabulario (token #...# dentro de los documentos).
No lleva los numerales el campo. Los numerales se usan en el texto de las actuaciones."
"voc_descr";"Descripción del vocabulario (en caso de usarse como dato adicional sera la etiqueta que se muestre con dicho campo de dato)"
"voc_tdato";"Tipo de dato del elemento referenciado por el vocabulario:
N: NUMERICO
X: TEXTO
F: FECHA
S: SISTEMA
T: TABLA
A: AREA"
"voc_longit";"Longitud del campo (cuando tvoc = D)"
"voc_fechal";"Indica si el campo es
0 - Fecha Corta
1 - fecha Larga

Sólo si el tdato = F"
"voc_nroletras";"indica si el vocabulario se basa en un numero expresado en letras.
Solo para tdato = N."
"voc_tvoc";"Indica el origen del valor que toma el vocabulario
B - Base de Datos
D - Dato Adicional
V - Dato Adicional (No Editable)"
"voc_proc";"Nombre del SP de la Base de Datos que permite recuperar el dato del vocabulario"
"voc_par";"Indica si ademas de pasarle al SP el codigo de vocabulario, el id de usuario, el id de la dep donde esta logueado y el id del expediente, que otro id le debe pasar:
N - ninguno
A - id de Actuacion
P - id de Pase"
"voc_tdato_idint";""
"voc_perm_antact";""

 *
 * */
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $voc_id;


    /**
     * @ORM\Column(type="string", length=20)
     */

    private $voc_cod;


    /**
     * @ORM\Column(type="string", length=35)
     */

    private $voc_descr;


    /**
     * @ORM\Column(type="string", length=1)
     */

    private $voc_tdato;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $voc_longit;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $voc_fechal;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $voc_nroletras;


    /**
     * @ORM\Column(type="string", length=1)
     */

    private $voc_tvoc;


    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */

    private $voc_proc;


    /**
     * @ORM\Column(type="string", length=1)
     */

    private $voc_par;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $voc_tdato_idint;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $voc_perm_antact;

    public function getVocId(): ?int
    {
        return $this->voc_id;
    }

    public function getVocCod(): ?string
    {
        return $this->voc_cod;
    }

    public function setVocCod(string $voc_cod): self
    {
        $this->voc_cod = $voc_cod;

        return $this;
    }

    public function getVocDescr(): ?string
    {
        return $this->voc_descr;
    }

    public function setVocDescr(string $voc_descr): self
    {
        $this->voc_descr = $voc_descr;

        return $this;
    }

    public function getVocTdato(): ?string
    {
        return $this->voc_tdato;
    }

    public function setVocTdato(string $voc_tdato): self
    {
        $this->voc_tdato = $voc_tdato;

        return $this;
    }

    public function getVocLongit(): ?int
    {
        return $this->voc_longit;
    }

    public function setVocLongit(?int $voc_longit): self
    {
        $this->voc_longit = $voc_longit;

        return $this;
    }

    public function getVocFechal(): ?int
    {
        return $this->voc_fechal;
    }

    public function setVocFechal(?int $voc_fechal): self
    {
        $this->voc_fechal = $voc_fechal;

        return $this;
    }

    public function getVocNroletras(): ?int
    {
        return $this->voc_nroletras;
    }

    public function setVocNroletras(?int $voc_nroletras): self
    {
        $this->voc_nroletras = $voc_nroletras;

        return $this;
    }

    public function getVocTvoc(): ?string
    {
        return $this->voc_tvoc;
    }

    public function setVocTvoc(string $voc_tvoc): self
    {
        $this->voc_tvoc = $voc_tvoc;

        return $this;
    }

    public function getVocProc(): ?string
    {
        return $this->voc_proc;
    }

    public function setVocProc(?string $voc_proc): self
    {
        $this->voc_proc = $voc_proc;

        return $this;
    }

    public function getVocPar(): ?string
    {
        return $this->voc_par;
    }

    public function setVocPar(string $voc_par): self
    {
        $this->voc_par = $voc_par;

        return $this;
    }

    public function getVocTdatoIdint(): ?int
    {
        return $this->voc_tdato_idint;
    }

    public function setVocTdatoIdint(?int $voc_tdato_idint): self
    {
        $this->voc_tdato_idint = $voc_tdato_idint;

        return $this;
    }

    public function getVocPermAntact(): ?int
    {
        return $this->voc_perm_antact;
    }

    public function setVocPermAntact(?int $voc_perm_antact): self
    {
        $this->voc_perm_antact = $voc_perm_antact;

        return $this;
    }



}
