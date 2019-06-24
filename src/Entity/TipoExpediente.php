<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TipoExpedienteRepository")
 * @ORM\Table(name="tex")
 */
class TipoExpediente
{


    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $tex_id;

    /**
     * @ORM\Column(type="string", length=3)
     */
    private $tex_cod;

    /**
     * @ORM\Column(type="string", length=35)
     */
    private $tex_descr;





    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $tex_pen;


    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $tex_forcar;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $tex_apliasi;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $tex_modcar;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $tex_ins;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $tex_ingrexpr;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $ctrol_exp_rep;


    /**
     * @ORM\Column(type="integer")
     */

    private $es_incidente;


    /**
     * @ORM\Column(type="integer")
     */

    private $es_jud;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $tex_con;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $tex_classor;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $tex_tip_pju;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $tex_tip_jud;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $tex_tip_doh;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $ocul_org_idcontrol;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $ocul_org_idradactual;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $ocul_sala;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $tex_prog;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $tex_dem;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Exp", mappedBy="tex_id")
     */
    private $exps;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\TtrOju", mappedBy="tex")
     */
    private $ttrOjus;

    public function __construct()
    {
        $this->exps = new ArrayCollection();
        $this->ttrOjus = new ArrayCollection();
    }



    public function getTexId(): ?int
    {
        return $this->tex_id;
    }

    public function getTexCod(): ?string
    {
        return $this->tex_cod;
    }

    public function setTexCod(string $tex_cod): self
    {
        $this->tex_cod = $tex_cod;

        return $this;
    }

    public function getTexDescr(): ?string
    {
        return $this->tex_descr;
    }

    public function setTexDescr(string $tex_descr): self
    {
        $this->tex_descr = $tex_descr;

        return $this;
    }

    /**
     * @return Collection|Exp[]
     */
    public function getExps(): Collection
    {
        return $this->exps;
    }

    public function addExp(Exp $exp): self
    {
        if (!$this->exps->contains($exp)) {
            $this->exps[] = $exp;
            $exp->setTexId($this);
        }

        return $this;
    }

    public function removeExp(Exp $exp): self
    {
        if ($this->exps->contains($exp)) {
            $this->exps->removeElement($exp);
            // set the owning side to null (unless already changed)
            if ($exp->getTexId() === $this) {
                $exp->setTexId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|TtrOju[]
     */
    public function getTtrOjus(): Collection
    {
        return $this->ttrOjus;
    }

    public function addTtrOjus(TtrOju $ttrOjus): self
    {
        if (!$this->ttrOjus->contains($ttrOjus)) {
            $this->ttrOjus[] = $ttrOjus;
            $ttrOjus->setTex($this);
        }

        return $this;
    }

    public function removeTtrOjus(TtrOju $ttrOjus): self
    {
        if ($this->ttrOjus->contains($ttrOjus)) {
            $this->ttrOjus->removeElement($ttrOjus);
            // set the owning side to null (unless already changed)
            if ($ttrOjus->getTex() === $this) {
                $ttrOjus->setTex(null);
            }
        }

        return $this;
    }

    public function getTexPen(): ?int
    {
        return $this->tex_pen;
    }

    public function setTexPen(?int $tex_pen): self
    {
        $this->tex_pen = $tex_pen;

        return $this;
    }

    public function getTexForcar(): ?string
    {
        return $this->tex_forcar;
    }

    public function setTexForcar(?string $tex_forcar): self
    {
        $this->tex_forcar = $tex_forcar;

        return $this;
    }

    public function getTexApliasi(): ?int
    {
        return $this->tex_apliasi;
    }

    public function setTexApliasi(?int $tex_apliasi): self
    {
        $this->tex_apliasi = $tex_apliasi;

        return $this;
    }

    public function getTexModcar(): ?int
    {
        return $this->tex_modcar;
    }

    public function setTexModcar(?int $tex_modcar): self
    {
        $this->tex_modcar = $tex_modcar;

        return $this;
    }

    public function getTexIns(): ?int
    {
        return $this->tex_ins;
    }

    public function setTexIns(?int $tex_ins): self
    {
        $this->tex_ins = $tex_ins;

        return $this;
    }

    public function getTexIngrexpr(): ?int
    {
        return $this->tex_ingrexpr;
    }

    public function setTexIngrexpr(?int $tex_ingrexpr): self
    {
        $this->tex_ingrexpr = $tex_ingrexpr;

        return $this;
    }

    public function getCtrolExpRep(): ?int
    {
        return $this->ctrol_exp_rep;
    }

    public function setCtrolExpRep(?int $ctrol_exp_rep): self
    {
        $this->ctrol_exp_rep = $ctrol_exp_rep;

        return $this;
    }

    public function getEsIncidente(): ?int
    {
        return $this->es_incidente;
    }

    public function setEsIncidente(int $es_incidente): self
    {
        $this->es_incidente = $es_incidente;

        return $this;
    }

    public function getEsJud(): ?int
    {
        return $this->es_jud;
    }

    public function setEsJud(int $es_jud): self
    {
        $this->es_jud = $es_jud;

        return $this;
    }

    public function getTexCon(): ?int
    {
        return $this->tex_con;
    }

    public function setTexCon(?int $tex_con): self
    {
        $this->tex_con = $tex_con;

        return $this;
    }

    public function getTexClassor(): ?int
    {
        return $this->tex_classor;
    }

    public function setTexClassor(?int $tex_classor): self
    {
        $this->tex_classor = $tex_classor;

        return $this;
    }

    public function getTexTipPju(): ?int
    {
        return $this->tex_tip_pju;
    }

    public function setTexTipPju(?int $tex_tip_pju): self
    {
        $this->tex_tip_pju = $tex_tip_pju;

        return $this;
    }

    public function getTexTipJud(): ?int
    {
        return $this->tex_tip_jud;
    }

    public function setTexTipJud(?int $tex_tip_jud): self
    {
        $this->tex_tip_jud = $tex_tip_jud;

        return $this;
    }

    public function getTexTipDoh(): ?int
    {
        return $this->tex_tip_doh;
    }

    public function setTexTipDoh(?int $tex_tip_doh): self
    {
        $this->tex_tip_doh = $tex_tip_doh;

        return $this;
    }

    public function getOculOrgIdcontrol(): ?int
    {
        return $this->ocul_org_idcontrol;
    }

    public function setOculOrgIdcontrol(?int $ocul_org_idcontrol): self
    {
        $this->ocul_org_idcontrol = $ocul_org_idcontrol;

        return $this;
    }

    public function getOculOrgIdradactual(): ?int
    {
        return $this->ocul_org_idradactual;
    }

    public function setOculOrgIdradactual(?int $ocul_org_idradactual): self
    {
        $this->ocul_org_idradactual = $ocul_org_idradactual;

        return $this;
    }

    public function getOculSala(): ?int
    {
        return $this->ocul_sala;
    }

    public function setOculSala(?int $ocul_sala): self
    {
        $this->ocul_sala = $ocul_sala;

        return $this;
    }

    public function getTexProg(): ?int
    {
        return $this->tex_prog;
    }

    public function setTexProg(?int $tex_prog): self
    {
        $this->tex_prog = $tex_prog;

        return $this;
    }

    public function getTexDem(): ?int
    {
        return $this->tex_dem;
    }

    public function setTexDem(?int $tex_dem): self
    {
        $this->tex_dem = $tex_dem;

        return $this;
    }
}
