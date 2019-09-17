<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\PfiRepository")
 */
class Pfi
{
    /**
     *
     * @ORM\Column(type="string")
     */

    private $pfi_nom;


    /**

     * @ORM\Column(type="string")
     */

    private $pfi_ape;


    /**
     * @ORM\Column(type="integer")
     */

    private $sex_id;


    /**
     * @ORM\Column(type="datetime")
     */

    private $pfi_fecnac;


    /**
     * @ORM\Column(type="integer")
     */

    private $eci_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $nci_id;


    /**
     * @ORM\Column(type="string")
     */

    private $pfi_ocupa;


    /**
     * @ORM\Column(type="string")
     */

    private $pfi_lugnac;


    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     */

    private $per_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $pfi_prontuario;


    /**
     * @ORM\Column(type="string")
     */

    private $pfi_nyapad;


    /**
     * @ORM\Column(type="string")
     */

    private $pfi_nyamad;


    /**
     * @ORM\Column(type="integer")
     */

    private $pfi_edad;


    /**
     * @ORM\Column(type="integer")
     */

    private $pfi_cant_hijos;


    /**
     * @ORM\Column(type="integer")
     */

    private $nivedu_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $nivsocec_id;


    /**
     * @ORM\Column(type="string")
     */

    private $pfi_alias;


    /**
     * @ORM\Column(type="integer")
     */

    private $sithabit_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $cobmed_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $gen_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $sitlab_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $ocu_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $pfi_genero;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Per", inversedBy="pfi", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="per_id", referencedColumnName="per_id")
     */
    private $persona;

    public function getPfiNom(): ?string
    {
        return $this->pfi_nom;
    }

    public function getPfiApe(): ?string
    {
        return $this->pfi_ape;
    }

    public function setPfiApe(string $pfi_ape): self
    {
        $this->pfi_ape = $pfi_ape;

        return $this;
    }

    public function getSexId(): ?int
    {
        return $this->sex_id;
    }

    public function setSexId(int $sex_id): self
    {
        $this->sex_id = $sex_id;

        return $this;
    }

    public function getPfiFecnac(): ?\DateTimeInterface
    {
        return $this->pfi_fecnac;
    }

    public function setPfiFecnac(\DateTimeInterface $pfi_fecnac): self
    {
        $this->pfi_fecnac = $pfi_fecnac;

        return $this;
    }

    public function getEciId(): ?int
    {
        return $this->eci_id;
    }

    public function setEciId(int $eci_id): self
    {
        $this->eci_id = $eci_id;

        return $this;
    }

    public function getNciId(): ?int
    {
        return $this->nci_id;
    }

    public function setNciId(int $nci_id): self
    {
        $this->nci_id = $nci_id;

        return $this;
    }

    public function getPfiOcupa(): ?string
    {
        return $this->pfi_ocupa;
    }

    public function setPfiOcupa(string $pfi_ocupa): self
    {
        $this->pfi_ocupa = $pfi_ocupa;

        return $this;
    }

    public function getPfiLugnac(): ?string
    {
        return $this->pfi_lugnac;
    }

    public function setPfiLugnac(string $pfi_lugnac): self
    {
        $this->pfi_lugnac = $pfi_lugnac;

        return $this;
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

    public function getPfiProntuario(): ?int
    {
        return $this->pfi_prontuario;
    }

    public function setPfiProntuario(int $pfi_prontuario): self
    {
        $this->pfi_prontuario = $pfi_prontuario;

        return $this;
    }

    public function getPfiNyapad(): ?string
    {
        return $this->pfi_nyapad;
    }

    public function setPfiNyapad(string $pfi_nyapad): self
    {
        $this->pfi_nyapad = $pfi_nyapad;

        return $this;
    }

    public function getPfiNyamad(): ?string
    {
        return $this->pfi_nyamad;
    }

    public function setPfiNyamad(string $pfi_nyamad): self
    {
        $this->pfi_nyamad = $pfi_nyamad;

        return $this;
    }

    public function getPfiEdad(): ?int
    {
        return $this->pfi_edad;
    }

    public function setPfiEdad(int $pfi_edad): self
    {
        $this->pfi_edad = $pfi_edad;

        return $this;
    }

    public function getPfiCantHijos(): ?int
    {
        return $this->pfi_cant_hijos;
    }

    public function setPfiCantHijos(int $pfi_cant_hijos): self
    {
        $this->pfi_cant_hijos = $pfi_cant_hijos;

        return $this;
    }

    public function getNiveduId(): ?int
    {
        return $this->nivedu_id;
    }

    public function setNiveduId(int $nivedu_id): self
    {
        $this->nivedu_id = $nivedu_id;

        return $this;
    }

    public function getNivsocecId(): ?int
    {
        return $this->nivsocec_id;
    }

    public function setNivsocecId(int $nivsocec_id): self
    {
        $this->nivsocec_id = $nivsocec_id;

        return $this;
    }

    public function getPfiAlias(): ?string
    {
        return $this->pfi_alias;
    }

    public function setPfiAlias(string $pfi_alias): self
    {
        $this->pfi_alias = $pfi_alias;

        return $this;
    }

    public function getSithabitId(): ?int
    {
        return $this->sithabit_id;
    }

    public function setSithabitId(int $sithabit_id): self
    {
        $this->sithabit_id = $sithabit_id;

        return $this;
    }

    public function getCobmedId(): ?int
    {
        return $this->cobmed_id;
    }

    public function setCobmedId(int $cobmed_id): self
    {
        $this->cobmed_id = $cobmed_id;

        return $this;
    }

    public function getGenId(): ?int
    {
        return $this->gen_id;
    }

    public function setGenId(int $gen_id): self
    {
        $this->gen_id = $gen_id;

        return $this;
    }

    public function getSitlabId(): ?int
    {
        return $this->sitlab_id;
    }

    public function setSitlabId(int $sitlab_id): self
    {
        $this->sitlab_id = $sitlab_id;

        return $this;
    }

    public function getOcuId(): ?int
    {
        return $this->ocu_id;
    }

    public function setOcuId(int $ocu_id): self
    {
        $this->ocu_id = $ocu_id;

        return $this;
    }

    public function getPfiGenero(): ?int
    {
        return $this->pfi_genero;
    }

    public function setPfiGenero(int $pfi_genero): self
    {
        $this->pfi_genero = $pfi_genero;

        return $this;
    }

    public function getPersona(): ?Per
    {
        return $this->persona;
    }

    public function setPersona(Per $persona): self
    {
        $this->persona = $persona;

        return $this;
    }

    public function setPfiNom(string $pfi_nom): self
    {
        $this->pfi_nom = $pfi_nom;

        return $this;
    }


}
