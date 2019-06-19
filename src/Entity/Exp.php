<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExpRepository")
 * @ORM\Table(name="Exp")
 */
class Exp
{
    /**
    * @ORM\Id()
    * @ORM\GeneratedValue()
    * @ORM\Column(type="integer") 
    */      
    private $exp_id;


    /**
    * @ORM\Column(type="integer", length=5, nullable=False) 
    */      
    private $org_id;

    /**
    * @ORM\Column(type="string", length=2000, nullable=False) 
    */ 
    private $exp_carat;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_numero;


    /**
    * @ORM\Column(type="integer", length=5, nullable=False) 
    */      
    private $exp_anio;


    /**
    * @ORM\Column(type="integer", length=5, nullable=False) 
    */      
    private $est_id;


    /**
    * @ORM\Column(type="datetime", length=5, nullable=True) 
    */  
    private $exp_fecreg;


    /**
    * @ORM\Column(type="integer", length=5, nullable=False) 
    */      
    private $dep_id;


    /**
    * @ORM\Column(type="integer", length=5, nullable=False) 
    */      
    private $usr_id;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $usr_idresp;


    /**
    * @ORM\Column(type="integer", length=5, nullable=False) 
    */      
    private $pri_id;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_ultmovf;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_ultmov;


    /**
    * @ORM\Column(type="integer", length=5, nullable=False) 
    */      
    private $nac_id;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_fojas;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_cuerpos;


    /**
    * @ORM\Column(type="text", length=5, nullable=True) 
    */       
    private $exp_obs;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_ultmovcr;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $epr_id;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_prefijo;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $sec_id;


    /**
    * @ORM\Column(type="datetime", length=5, nullable=True) 
    */  
    private $exp_fecini;


    /**
    * @ORM\Column(type="decimal", length=5, nullable=True) 
    */     
    private $exp_monto;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $org_idintpri;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $org_idintseg;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $org_idintter;


    /**
    * @ORM\Column(type="datetime", length=5, nullable=True) 
    */  
    private $exp_fechecho;


    /**
    * @ORM\Column(type="string", length=2000, nullable=True) 
    */  
    private $exp_descrhecho;


    /**
    * @ORM\Column(type="string", length=1000, nullable=True) 
    */  
    private $exp_lughecho;


    /**
    * @ORM\Column(type="string", length=100, nullable=True) 
    */   
    private $exp_sumario;


    /**
    * @ORM\Column(type="datetime", length=5, nullable=True) 
    */  
    private $exp_fecprev;


    /**
    * @ORM\Column(type="datetime", length=5, nullable=True) 
    */  
    private $exp_fecden;


    /**
    * @ORM\Column(type="datetime", length=5, nullable=True) 
    */  
    private $exp_fecrequi;


    /**
    * @ORM\Column(type="datetime", length=5, nullable=True) 
    */  
    private $exp_fecres;


    /**
    * @ORM\Column(type="datetime", length=5, nullable=True) 
    */  
    private $exp_fecelev;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $org_idden;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_numarch;


    /**
    * @ORM\Column(type="datetime", length=5, nullable=True) 
    */  
    private $exp_fecdestr;


    /**
    * @ORM\Column(type="string", length=200, nullable=True) 
    */     
    private $exp_sorteo;


    /**
    * @ORM\Column(type="datetime", length=5, nullable=True) 
    */  
    private $exp_fecclaus;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $org_idradactual;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $dep_idcontrol;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $org_idcontrol;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_movaceptado;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $org_idfishecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $pai_idhecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $prv_idhecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $dto_idhecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $loc_idhecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_cphecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $cal_idhecho;


    /**
    * @ORM\Column(type="string", length=10, nullable=True) 
    */    
    private $exp_casahecho;


    /**
    * @ORM\Column(type="string", length=10, nullable=True) 
    */    
    private $exp_torrehecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $tca_idhecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $tpi_idhecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $tde_idhecho;


    /**
    * @ORM\Column(type="string", length=1000, nullable=True) 
    */  
    private $exp_obsdomhecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $bar_idhecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $hnr_idhecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $hlf_idhecho;


    /**
    * @ORM\Column(type="string", length=50, nullable=True) 
    */    
    private $exp_tpidatohecho;


    /**
    * @ORM\Column(type="string", length=50, nullable=True) 
    */    
    private $exp_tdedatohecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $cal_id_esq_hecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $esq_hecho;


    /**
    * @ORM\Column(type="string", length=100, nullable=True) 
    */   
    private $otro_htv_hecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $org_idorgorig;


    /**
    * @ORM\Column(type="string", length=100, nullable=True) 
    */   
    private $exp_acordada;


    /**
    * @ORM\Column(type="string", length=10, nullable=True) 
    */    
    private $exp_medidor;


    /**
    * @ORM\Column(type="string", length=200, nullable=True) 
    */   
    private $otro_hlf_hecho;


    /**
    * @ORM\Column(type="string", length=100, nullable=True) 
    */   
    private $exp_aup;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $act_id;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $ttra_id;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $aux_id;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $tsoc_id;


    /**
    * @ORM\Column(type="string", length=500, nullable=True) 
    */   
    private $obj_soc;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $tact_id;


    /**
    * @ORM\Column(type="string", length=500, nullable=True) 
    */   
    private $act_com;


    /**
    * @ORM\Column(type="string", length=500, nullable=True) 
    */   
    private $den_com;


    /**
    * @ORM\Column(type="string", length=500, nullable=True) 
    */   
    private $dom_com;


    /**
    * @ORM\Column(type="string", length=500, nullable=True) 
    */   
    private $adm_com;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_detenidos;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $ttr_id;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $usr_idsum;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $ttra_idimp;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $org_iddefhecho;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $org_idasehecho;


    /**
    * @ORM\Column(type="string", length=1, nullable=True) 
    */     
    private $exp_letra;


    /**
    * @ORM\Column(type="string", length=13, nullable=True) 
    */    
    private $exp_cuij;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_sufijo;


    /**
    * @ORM\Column(type="string", length=200, nullable=True) 
    */   
    private $exp_es_juicio_col;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $tin_id;


    /**
    * @ORM\Column(type="string", length=35, nullable=True) 
    */    
    private $exp_codigo;


    /**
    * @ORM\Column(type="datetime", length=2, nullable=True) 
    */   
    private $exp_fecinidem;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $org_idferia;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $sec_idferia;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_juz_tram;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_juz_juicio;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_activo;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_org_idsolicitante;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_org_idasignado;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $den_id;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $org_idexc;


    /**
    * @ORM\Column(type="integer", length=5, nullable=True) 
    */       
    private $exp_anio_leg;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoExpediente", inversedBy="exps")
     * @ORM\JoinColumn(name="tex_id", referencedColumnName="tex_id", nullable=false)
     */
    private $tex_id;

    public function getExpId(): ?int
    {
        return $this->exp_id;
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



    public function getExpCarat(): ?string
    {
        return $this->exp_carat;
    }

    public function setExpCarat(string $exp_carat): self
    {
        $this->exp_carat = $exp_carat;

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

    public function getExpAnio(): ?int
    {
        return $this->exp_anio;
    }

    public function setExpAnio(int $exp_anio): self
    {
        $this->exp_anio = $exp_anio;

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

    public function getExpFecreg(): ?\DateTimeInterface
    {
        return $this->exp_fecreg;
    }

    public function setExpFecreg(?\DateTimeInterface $exp_fecreg): self
    {
        $this->exp_fecreg = $exp_fecreg;

        return $this;
    }

    public function getDepId(): ?int
    {
        return $this->dep_id;
    }

    public function setDepId(int $dep_id): self
    {
        $this->dep_id = $dep_id;

        return $this;
    }

    public function getUsrId(): ?int
    {
        return $this->usr_id;
    }

    public function setUsrId(int $usr_id): self
    {
        $this->usr_id = $usr_id;

        return $this;
    }

    public function getUsrIdresp(): ?int
    {
        return $this->usr_idresp;
    }

    public function setUsrIdresp(?int $usr_idresp): self
    {
        $this->usr_idresp = $usr_idresp;

        return $this;
    }

    public function getPriId(): ?int
    {
        return $this->pri_id;
    }

    public function setPriId(int $pri_id): self
    {
        $this->pri_id = $pri_id;

        return $this;
    }

    public function getExpUltmovf(): ?int
    {
        return $this->exp_ultmovf;
    }

    public function setExpUltmovf(?int $exp_ultmovf): self
    {
        $this->exp_ultmovf = $exp_ultmovf;

        return $this;
    }

    public function getExpUltmov(): ?int
    {
        return $this->exp_ultmov;
    }

    public function setExpUltmov(?int $exp_ultmov): self
    {
        $this->exp_ultmov = $exp_ultmov;

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

    public function getExpFojas(): ?int
    {
        return $this->exp_fojas;
    }

    public function setExpFojas(?int $exp_fojas): self
    {
        $this->exp_fojas = $exp_fojas;

        return $this;
    }

    public function getExpCuerpos(): ?int
    {
        return $this->exp_cuerpos;
    }

    public function setExpCuerpos(?int $exp_cuerpos): self
    {
        $this->exp_cuerpos = $exp_cuerpos;

        return $this;
    }

    public function getExpObs(): ?string
    {
        return $this->exp_obs;
    }

    public function setExpObs(?string $exp_obs): self
    {
        $this->exp_obs = $exp_obs;

        return $this;
    }

    public function getExpUltmovcr(): ?int
    {
        return $this->exp_ultmovcr;
    }

    public function setExpUltmovcr(?int $exp_ultmovcr): self
    {
        $this->exp_ultmovcr = $exp_ultmovcr;

        return $this;
    }

    public function getEprId(): ?int
    {
        return $this->epr_id;
    }

    public function setEprId(?int $epr_id): self
    {
        $this->epr_id = $epr_id;

        return $this;
    }

    public function getExpPrefijo(): ?int
    {
        return $this->exp_prefijo;
    }

    public function setExpPrefijo(?int $exp_prefijo): self
    {
        $this->exp_prefijo = $exp_prefijo;

        return $this;
    }

    public function getSecId(): ?int
    {
        return $this->sec_id;
    }

    public function setSecId(?int $sec_id): self
    {
        $this->sec_id = $sec_id;

        return $this;
    }

    public function getExpFecini(): ?\DateTimeInterface
    {
        return $this->exp_fecini;
    }

    public function setExpFecini(?\DateTimeInterface $exp_fecini): self
    {
        $this->exp_fecini = $exp_fecini;

        return $this;
    }

    public function getExpMonto()
    {
        return $this->exp_monto;
    }

    public function setExpMonto($exp_monto): self
    {
        $this->exp_monto = $exp_monto;

        return $this;
    }

    public function getOrgIdintpri(): ?int
    {
        return $this->org_idintpri;
    }

    public function setOrgIdintpri(?int $org_idintpri): self
    {
        $this->org_idintpri = $org_idintpri;

        return $this;
    }

    public function getOrgIdintseg(): ?int
    {
        return $this->org_idintseg;
    }

    public function setOrgIdintseg(?int $org_idintseg): self
    {
        $this->org_idintseg = $org_idintseg;

        return $this;
    }

    public function getOrgIdintter(): ?int
    {
        return $this->org_idintter;
    }

    public function setOrgIdintter(?int $org_idintter): self
    {
        $this->org_idintter = $org_idintter;

        return $this;
    }

    public function getExpFechecho(): ?\DateTimeInterface
    {
        return $this->exp_fechecho;
    }

    public function setExpFechecho(?\DateTimeInterface $exp_fechecho): self
    {
        $this->exp_fechecho = $exp_fechecho;

        return $this;
    }

    public function getExpDescrhecho(): ?string
    {
        return $this->exp_descrhecho;
    }

    public function setExpDescrhecho(?string $exp_descrhecho): self
    {
        $this->exp_descrhecho = $exp_descrhecho;

        return $this;
    }

    public function getExpLughecho(): ?string
    {
        return $this->exp_lughecho;
    }

    public function setExpLughecho(?string $exp_lughecho): self
    {
        $this->exp_lughecho = $exp_lughecho;

        return $this;
    }

    public function getExpSumario(): ?string
    {
        return $this->exp_sumario;
    }

    public function setExpSumario(?string $exp_sumario): self
    {
        $this->exp_sumario = $exp_sumario;

        return $this;
    }

    public function getExpFecprev(): ?\DateTimeInterface
    {
        return $this->exp_fecprev;
    }

    public function setExpFecprev(?\DateTimeInterface $exp_fecprev): self
    {
        $this->exp_fecprev = $exp_fecprev;

        return $this;
    }

    public function getExpFecden(): ?\DateTimeInterface
    {
        return $this->exp_fecden;
    }

    public function setExpFecden(?\DateTimeInterface $exp_fecden): self
    {
        $this->exp_fecden = $exp_fecden;

        return $this;
    }

    public function getExpFecrequi(): ?\DateTimeInterface
    {
        return $this->exp_fecrequi;
    }

    public function setExpFecrequi(?\DateTimeInterface $exp_fecrequi): self
    {
        $this->exp_fecrequi = $exp_fecrequi;

        return $this;
    }

    public function getExpFecres(): ?\DateTimeInterface
    {
        return $this->exp_fecres;
    }

    public function setExpFecres(?\DateTimeInterface $exp_fecres): self
    {
        $this->exp_fecres = $exp_fecres;

        return $this;
    }

    public function getExpFecelev(): ?\DateTimeInterface
    {
        return $this->exp_fecelev;
    }

    public function setExpFecelev(?\DateTimeInterface $exp_fecelev): self
    {
        $this->exp_fecelev = $exp_fecelev;

        return $this;
    }

    public function getOrgIdden(): ?int
    {
        return $this->org_idden;
    }

    public function setOrgIdden(?int $org_idden): self
    {
        $this->org_idden = $org_idden;

        return $this;
    }

    public function getExpNumarch(): ?int
    {
        return $this->exp_numarch;
    }

    public function setExpNumarch(?int $exp_numarch): self
    {
        $this->exp_numarch = $exp_numarch;

        return $this;
    }

    public function getExpFecdestr(): ?\DateTimeInterface
    {
        return $this->exp_fecdestr;
    }

    public function setExpFecdestr(?\DateTimeInterface $exp_fecdestr): self
    {
        $this->exp_fecdestr = $exp_fecdestr;

        return $this;
    }

    public function getExpSorteo(): ?string
    {
        return $this->exp_sorteo;
    }

    public function setExpSorteo(?string $exp_sorteo): self
    {
        $this->exp_sorteo = $exp_sorteo;

        return $this;
    }

    public function getExpFecclaus(): ?\DateTimeInterface
    {
        return $this->exp_fecclaus;
    }

    public function setExpFecclaus(?\DateTimeInterface $exp_fecclaus): self
    {
        $this->exp_fecclaus = $exp_fecclaus;

        return $this;
    }

    public function getOrgIdradactual(): ?int
    {
        return $this->org_idradactual;
    }

    public function setOrgIdradactual(?int $org_idradactual): self
    {
        $this->org_idradactual = $org_idradactual;

        return $this;
    }

    public function getDepIdcontrol(): ?int
    {
        return $this->dep_idcontrol;
    }

    public function setDepIdcontrol(?int $dep_idcontrol): self
    {
        $this->dep_idcontrol = $dep_idcontrol;

        return $this;
    }

    public function getOrgIdcontrol(): ?int
    {
        return $this->org_idcontrol;
    }

    public function setOrgIdcontrol(?int $org_idcontrol): self
    {
        $this->org_idcontrol = $org_idcontrol;

        return $this;
    }

    public function getExpMovaceptado(): ?int
    {
        return $this->exp_movaceptado;
    }

    public function setExpMovaceptado(?int $exp_movaceptado): self
    {
        $this->exp_movaceptado = $exp_movaceptado;

        return $this;
    }

    public function getOrgIdfishecho(): ?int
    {
        return $this->org_idfishecho;
    }

    public function setOrgIdfishecho(?int $org_idfishecho): self
    {
        $this->org_idfishecho = $org_idfishecho;

        return $this;
    }

    public function getPaiIdhecho(): ?int
    {
        return $this->pai_idhecho;
    }

    public function setPaiIdhecho(?int $pai_idhecho): self
    {
        $this->pai_idhecho = $pai_idhecho;

        return $this;
    }

    public function getPrvIdhecho(): ?int
    {
        return $this->prv_idhecho;
    }

    public function setPrvIdhecho(?int $prv_idhecho): self
    {
        $this->prv_idhecho = $prv_idhecho;

        return $this;
    }

    public function getDtoIdhecho(): ?int
    {
        return $this->dto_idhecho;
    }

    public function setDtoIdhecho(?int $dto_idhecho): self
    {
        $this->dto_idhecho = $dto_idhecho;

        return $this;
    }

    public function getLocIdhecho(): ?int
    {
        return $this->loc_idhecho;
    }

    public function setLocIdhecho(?int $loc_idhecho): self
    {
        $this->loc_idhecho = $loc_idhecho;

        return $this;
    }

    public function getExpCphecho(): ?int
    {
        return $this->exp_cphecho;
    }

    public function setExpCphecho(?int $exp_cphecho): self
    {
        $this->exp_cphecho = $exp_cphecho;

        return $this;
    }

    public function getCalIdhecho(): ?int
    {
        return $this->cal_idhecho;
    }

    public function setCalIdhecho(?int $cal_idhecho): self
    {
        $this->cal_idhecho = $cal_idhecho;

        return $this;
    }

    public function getExpCasahecho(): ?string
    {
        return $this->exp_casahecho;
    }

    public function setExpCasahecho(?string $exp_casahecho): self
    {
        $this->exp_casahecho = $exp_casahecho;

        return $this;
    }

    public function getExpTorrehecho(): ?string
    {
        return $this->exp_torrehecho;
    }

    public function setExpTorrehecho(?string $exp_torrehecho): self
    {
        $this->exp_torrehecho = $exp_torrehecho;

        return $this;
    }

    public function getTcaIdhecho(): ?int
    {
        return $this->tca_idhecho;
    }

    public function setTcaIdhecho(?int $tca_idhecho): self
    {
        $this->tca_idhecho = $tca_idhecho;

        return $this;
    }

    public function getTpiIdhecho(): ?int
    {
        return $this->tpi_idhecho;
    }

    public function setTpiIdhecho(?int $tpi_idhecho): self
    {
        $this->tpi_idhecho = $tpi_idhecho;

        return $this;
    }

    public function getTdeIdhecho(): ?int
    {
        return $this->tde_idhecho;
    }

    public function setTdeIdhecho(?int $tde_idhecho): self
    {
        $this->tde_idhecho = $tde_idhecho;

        return $this;
    }

    public function getExpObsdomhecho(): ?string
    {
        return $this->exp_obsdomhecho;
    }

    public function setExpObsdomhecho(?string $exp_obsdomhecho): self
    {
        $this->exp_obsdomhecho = $exp_obsdomhecho;

        return $this;
    }

    public function getBarIdhecho(): ?int
    {
        return $this->bar_idhecho;
    }

    public function setBarIdhecho(?int $bar_idhecho): self
    {
        $this->bar_idhecho = $bar_idhecho;

        return $this;
    }

    public function getHnrIdhecho(): ?int
    {
        return $this->hnr_idhecho;
    }

    public function setHnrIdhecho(?int $hnr_idhecho): self
    {
        $this->hnr_idhecho = $hnr_idhecho;

        return $this;
    }

    public function getHlfIdhecho(): ?int
    {
        return $this->hlf_idhecho;
    }

    public function setHlfIdhecho(?int $hlf_idhecho): self
    {
        $this->hlf_idhecho = $hlf_idhecho;

        return $this;
    }

    public function getExpTpidatohecho(): ?string
    {
        return $this->exp_tpidatohecho;
    }

    public function setExpTpidatohecho(?string $exp_tpidatohecho): self
    {
        $this->exp_tpidatohecho = $exp_tpidatohecho;

        return $this;
    }

    public function getExpTdedatohecho(): ?string
    {
        return $this->exp_tdedatohecho;
    }

    public function setExpTdedatohecho(?string $exp_tdedatohecho): self
    {
        $this->exp_tdedatohecho = $exp_tdedatohecho;

        return $this;
    }

    public function getCalIdEsqHecho(): ?int
    {
        return $this->cal_id_esq_hecho;
    }

    public function setCalIdEsqHecho(?int $cal_id_esq_hecho): self
    {
        $this->cal_id_esq_hecho = $cal_id_esq_hecho;

        return $this;
    }

    public function getEsqHecho(): ?int
    {
        return $this->esq_hecho;
    }

    public function setEsqHecho(?int $esq_hecho): self
    {
        $this->esq_hecho = $esq_hecho;

        return $this;
    }

    public function getOtroHtvHecho(): ?string
    {
        return $this->otro_htv_hecho;
    }

    public function setOtroHtvHecho(?string $otro_htv_hecho): self
    {
        $this->otro_htv_hecho = $otro_htv_hecho;

        return $this;
    }

    public function getOrgIdorgorig(): ?int
    {
        return $this->org_idorgorig;
    }

    public function setOrgIdorgorig(?int $org_idorgorig): self
    {
        $this->org_idorgorig = $org_idorgorig;

        return $this;
    }

    public function getExpAcordada(): ?string
    {
        return $this->exp_acordada;
    }

    public function setExpAcordada(?string $exp_acordada): self
    {
        $this->exp_acordada = $exp_acordada;

        return $this;
    }

    public function getExpMedidor(): ?string
    {
        return $this->exp_medidor;
    }

    public function setExpMedidor(?string $exp_medidor): self
    {
        $this->exp_medidor = $exp_medidor;

        return $this;
    }

    public function getOtroHlfHecho(): ?string
    {
        return $this->otro_hlf_hecho;
    }

    public function setOtroHlfHecho(?string $otro_hlf_hecho): self
    {
        $this->otro_hlf_hecho = $otro_hlf_hecho;

        return $this;
    }

    public function getExpAup(): ?string
    {
        return $this->exp_aup;
    }

    public function setExpAup(?string $exp_aup): self
    {
        $this->exp_aup = $exp_aup;

        return $this;
    }

    public function getActId(): ?int
    {
        return $this->act_id;
    }

    public function setActId(?int $act_id): self
    {
        $this->act_id = $act_id;

        return $this;
    }

    public function getTtraId(): ?int
    {
        return $this->ttra_id;
    }

    public function setTtraId(?int $ttra_id): self
    {
        $this->ttra_id = $ttra_id;

        return $this;
    }

    public function getAuxId(): ?int
    {
        return $this->aux_id;
    }

    public function setAuxId(?int $aux_id): self
    {
        $this->aux_id = $aux_id;

        return $this;
    }

    public function getTsocId(): ?int
    {
        return $this->tsoc_id;
    }

    public function setTsocId(?int $tsoc_id): self
    {
        $this->tsoc_id = $tsoc_id;

        return $this;
    }

    public function getObjSoc(): ?string
    {
        return $this->obj_soc;
    }

    public function setObjSoc(?string $obj_soc): self
    {
        $this->obj_soc = $obj_soc;

        return $this;
    }

    public function getTactId(): ?int
    {
        return $this->tact_id;
    }

    public function setTactId(?int $tact_id): self
    {
        $this->tact_id = $tact_id;

        return $this;
    }

    public function getActCom(): ?string
    {
        return $this->act_com;
    }

    public function setActCom(?string $act_com): self
    {
        $this->act_com = $act_com;

        return $this;
    }

    public function getDenCom(): ?string
    {
        return $this->den_com;
    }

    public function setDenCom(?string $den_com): self
    {
        $this->den_com = $den_com;

        return $this;
    }

    public function getDomCom(): ?string
    {
        return $this->dom_com;
    }

    public function setDomCom(?string $dom_com): self
    {
        $this->dom_com = $dom_com;

        return $this;
    }

    public function getAdmCom(): ?string
    {
        return $this->adm_com;
    }

    public function setAdmCom(?string $adm_com): self
    {
        $this->adm_com = $adm_com;

        return $this;
    }

    public function getExpDetenidos(): ?int
    {
        return $this->exp_detenidos;
    }

    public function setExpDetenidos(?int $exp_detenidos): self
    {
        $this->exp_detenidos = $exp_detenidos;

        return $this;
    }

    public function getTtrId(): ?int
    {
        return $this->ttr_id;
    }

    public function setTtrId(?int $ttr_id): self
    {
        $this->ttr_id = $ttr_id;

        return $this;
    }

    public function getUsrIdsum(): ?int
    {
        return $this->usr_idsum;
    }

    public function setUsrIdsum(?int $usr_idsum): self
    {
        $this->usr_idsum = $usr_idsum;

        return $this;
    }

    public function getTtraIdimp(): ?int
    {
        return $this->ttra_idimp;
    }

    public function setTtraIdimp(?int $ttra_idimp): self
    {
        $this->ttra_idimp = $ttra_idimp;

        return $this;
    }

    public function getOrgIddefhecho(): ?int
    {
        return $this->org_iddefhecho;
    }

    public function setOrgIddefhecho(?int $org_iddefhecho): self
    {
        $this->org_iddefhecho = $org_iddefhecho;

        return $this;
    }

    public function getOrgIdasehecho(): ?int
    {
        return $this->org_idasehecho;
    }

    public function setOrgIdasehecho(?int $org_idasehecho): self
    {
        $this->org_idasehecho = $org_idasehecho;

        return $this;
    }

    public function getExpLetra(): ?string
    {
        return $this->exp_letra;
    }

    public function setExpLetra(?string $exp_letra): self
    {
        $this->exp_letra = $exp_letra;

        return $this;
    }

    public function getExpCuij(): ?string
    {
        return $this->exp_cuij;
    }

    public function setExpCuij(?string $exp_cuij): self
    {
        $this->exp_cuij = $exp_cuij;

        return $this;
    }

    public function getExpSufijo(): ?int
    {
        return $this->exp_sufijo;
    }

    public function setExpSufijo(?int $exp_sufijo): self
    {
        $this->exp_sufijo = $exp_sufijo;

        return $this;
    }

    public function getExpEsJuicioCol(): ?string
    {
        return $this->exp_es_juicio_col;
    }

    public function setExpEsJuicioCol(?string $exp_es_juicio_col): self
    {
        $this->exp_es_juicio_col = $exp_es_juicio_col;

        return $this;
    }

    public function getTinId(): ?int
    {
        return $this->tin_id;
    }

    public function setTinId(?int $tin_id): self
    {
        $this->tin_id = $tin_id;

        return $this;
    }

    public function getExpCodigo(): ?string
    {
        return $this->exp_codigo;
    }

    public function setExpCodigo(?string $exp_codigo): self
    {
        $this->exp_codigo = $exp_codigo;

        return $this;
    }

    public function getExpFecinidem(): ?\DateTimeInterface
    {
        return $this->exp_fecinidem;
    }

    public function setExpFecinidem(?\DateTimeInterface $exp_fecinidem): self
    {
        $this->exp_fecinidem = $exp_fecinidem;

        return $this;
    }

    public function getOrgIdferia(): ?int
    {
        return $this->org_idferia;
    }

    public function setOrgIdferia(?int $org_idferia): self
    {
        $this->org_idferia = $org_idferia;

        return $this;
    }

    public function getSecIdferia(): ?int
    {
        return $this->sec_idferia;
    }

    public function setSecIdferia(?int $sec_idferia): self
    {
        $this->sec_idferia = $sec_idferia;

        return $this;
    }

    public function getExpJuzTram(): ?int
    {
        return $this->exp_juz_tram;
    }

    public function setExpJuzTram(?int $exp_juz_tram): self
    {
        $this->exp_juz_tram = $exp_juz_tram;

        return $this;
    }

    public function getExpJuzJuicio(): ?int
    {
        return $this->exp_juz_juicio;
    }

    public function setExpJuzJuicio(?int $exp_juz_juicio): self
    {
        $this->exp_juz_juicio = $exp_juz_juicio;

        return $this;
    }

    public function getExpActivo(): ?int
    {
        return $this->exp_activo;
    }

    public function setExpActivo(?int $exp_activo): self
    {
        $this->exp_activo = $exp_activo;

        return $this;
    }

    public function getExpOrgIdsolicitante(): ?int
    {
        return $this->exp_org_idsolicitante;
    }

    public function setExpOrgIdsolicitante(?int $exp_org_idsolicitante): self
    {
        $this->exp_org_idsolicitante = $exp_org_idsolicitante;

        return $this;
    }

    public function getExpOrgIdasignado(): ?int
    {
        return $this->exp_org_idasignado;
    }

    public function setExpOrgIdasignado(?int $exp_org_idasignado): self
    {
        $this->exp_org_idasignado = $exp_org_idasignado;

        return $this;
    }

    public function getDenId(): ?int
    {
        return $this->den_id;
    }

    public function setDenId(?int $den_id): self
    {
        $this->den_id = $den_id;

        return $this;
    }

    public function getOrgIdexc(): ?int
    {
        return $this->org_idexc;
    }

    public function setOrgIdexc(?int $org_idexc): self
    {
        $this->org_idexc = $org_idexc;

        return $this;
    }

    public function getExpAnioLeg(): ?int
    {
        return $this->exp_anio_leg;
    }

    public function setExpAnioLeg(?int $exp_anio_leg): self
    {
        $this->exp_anio_leg = $exp_anio_leg;

        return $this;
    }

    public function getTexId(): ?TipoExpediente
    {
        return $this->tex_id;
    }

    public function setTexId(?TipoExpediente $tex_id): self
    {
        $this->tex_id = $tex_id;

        return $this;
    }


}
