<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ActuacionRepository")
 * @ORM\Table(name="act")
 */
class Actuacion
{


/**
 *@ORM\Column(type="integer")
 * @ORM\Id()
 * @ORM\GeneratedValue()
 */
private $act_id;
/**
 *@ORM\Column(type="integer")
 */
private $dac_id;
/**
 *@ORM\Column(type="integer")
 */
private $exp_id;
/**
 *@ORM\Column(type="integer")
 */
private $eac_id;
/**
 *@ORM\Column(type="datetime")
 */
private $act_feccre;
/**
 *@ORM\Column(type="datetime")
 */
private $act_fecha;
/**
 *@ORM\Column(type="boolean")
 */
private $act_texto;
/**
 *@ORM\Column(type="text")
 */
private $act_texpla;
/**
 *@ORM\Column(type="string")
 */
private $act_titulo;
/**
 *@ORM\Column(type="integer")
 */
private $usr_id;
/**
 *@ORM\Column(type="integer")
 */
private $nac_id;
/**
 *@ORM\Column(type="integer")
 */
private $act_numero;
/**
 *@ORM\Column(type="integer")
 */
private $act_anio;
/**
 *@ORM\Column(type="integer")
 */
private $dep_id;
/**
 *@ORM\Column(type="datetime")
 */
private $act_fecfir;
/**
 *@ORM\Column(type="integer")
 */
private $act_pki;
/**
 *@ORM\Column(type="boolean")
 */
private $act_pdf;
/**
 *@ORM\Column(type="integer")
 */
private $act_idrel;
/**
 *@ORM\Column(type="integer")
 */
private $eno_id;
/**
 *@ORM\Column(type="integer")
 */
private $pro_id;
/**
 *@ORM\Column(type="integer")
 */
private $per_id;
/**
 *@ORM\Column(type="integer")
 */
private $act_agregado;
/**
 *@ORM\Column(type="integer")
 */
private $act_conhab;
/**
 *@ORM\Column(type="integer")
 */
private $act_avisoley;
/**
 *@ORM\Column(type="integer")
 */
private $ice_id;
/**
 *@ORM\Column(type="integer")
 */
private $usr_idnotif;
/**
 *@ORM\Column(type="text")
 */
private $act_obs;
/**
 *@ORM\Column(type="integer")
 */
private $act_pdf_sign_embedded;
/**
 *@ORM\Column(type="integer")
 */
private $act_protocolo;
/**
 *@ORM\Column(type="datetime")
 */
private $act_fecllam;
/**
 *@ORM\Column(type="string")
 */
private $act_nroprotocolo;
/**
 *@ORM\Column(type="string")
 */
private $act_temaprotocolo;
/**
 *@ORM\Column(type="string")
 */
private $org_codigo;
/**
 *@ORM\Column(type="string")
 */
private $tcc_codigo;
/**
 *@ORM\Column(type="integer")
 */
private $hca_numero;
/**
 *@ORM\Column(type="integer")
 */
private $hca_anio;
/**
 *@ORM\Column(type="string")
 */
private $dac_codigo;
/**
 *@ORM\Column(type="integer")
 */
private $hac_numero;
/**
 *@ORM\Column(type="integer")
 */
private $hac_anio;
/**
 *@ORM\Column(type="integer")
 */
private $org_id;
/**
 *@ORM\Column(type="integer")
 */
private $mov_id;
/**
 *@ORM\Column(type="integer")
 */
private $libro_id;
/**
 *@ORM\Column(type="integer")
 */
private $asiento_protocol;
/**
 *@ORM\Column(type="integer")
 */
private $asientoadi_protocol;
/**
 *@ORM\Column(type="integer")
 */
private $foldesde_protocol;
/**
 *@ORM\Column(type="integer")
 */
private $obsfoldesde_protocol;
/**
 *@ORM\Column(type="integer")
 */
private $folhasta_protocol;
/**
 *@ORM\Column(type="integer")
 */
private $obsfolhasta_protocol;
/**
 *@ORM\Column(type="string")
 */
private $UUID;
/**
 *@ORM\Column(type="integer")
 */
private $crc_id;
/**
 *@ORM\Column(type="integer")
 */
private $p_dom_id;
/**
 *@ORM\Column(type="integer")
 */
private $act_prefijo;
/**
 *@ORM\Column(type="integer")
 */
private $act_sufijo;
/**
 *@ORM\Column(type="datetime")
 */
private $act_fecfirpen;
/**
 *@ORM\Column(type="string")
 */
private $act_letra;
/**
 *@ORM\Column(type="string")
 */
private $act_cuij;
/**
 *@ORM\Column(type="integer")
 */
private $act_search;
/**
 *@ORM\Column(type="integer")
 */
private $posee_adj;
/**
 *@ORM\Column(type="integer")
 */
private $act_ced_presper;
/**
 *@ORM\Column(type="integer")
 */
private $act_ced_ley;
/**
 *@ORM\Column(type="integer")
 */
private $tac_id;
/**
 *@ORM\Column(type="integer")
 */
private $tao_id;
/**
 *@ORM\Column(type="integer")
 */
private $age_id;
/**
 *@ORM\Column(type="boolean")
 */
private $act_adjunto_rta;
/**
 *@ORM\Column(type="integer")
 */
private $act_rta;
/**
 *@ORM\Column(type="datetime")
 */
private $act_fec_rta;
/**
 *@ORM\Column(type="integer")
 */
private $org_a_notif;
/**
 *@ORM\Column(type="datetime")
 */
private $act_fec_ven;
/**
 *@ORM\Column(type="text")
 */
private $act_mail;
/**
 *@ORM\Column(type="integer")
 */
private $act_envio_mail;
/**
 *@ORM\Column(type="string")
 */
private $act_texto_nombre;
/**
 *@ORM\Column(type="string")
 */
private $act_adjunto_rta_nombre;
/**
 *@ORM\Column(type="integer")
 */
private $act_idrespuesta;
/**
 *@ORM\Column(type="integer")
 */
private $act_estrecep;
/**
 *@ORM\Column(type="datetime")
 */
private $act_fecacept;
/**
 *@ORM\Column(type="integer")
 */
private $org_iddes;

/**
 * @ORM\OneToOne(targetEntity="App\Entity\ActAdi", mappedBy="act", cascade={"persist", "remove"})
 */
private $actAdi;

public function getActId(): ?int
{
    return $this->act_id;
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

public function getExpId(): ?int
{
    return $this->exp_id;
}

public function setExpId(int $exp_id): self
{
    $this->exp_id = $exp_id;

    return $this;
}

public function getEacId(): ?int
{
    return $this->eac_id;
}

public function setEacId(int $eac_id): self
{
    $this->eac_id = $eac_id;

    return $this;
}

public function getActFeccre(): ?\DateTimeInterface
{
    return $this->act_feccre;
}

public function setActFeccre(\DateTimeInterface $act_feccre): self
{
    $this->act_feccre = $act_feccre;

    return $this;
}

public function getActFecha(): ?\DateTimeInterface
{
    return $this->act_fecha;
}

public function setActFecha(\DateTimeInterface $act_fecha): self
{
    $this->act_fecha = $act_fecha;

    return $this;
}

public function getActTexto(): ?bool
{
    return $this->act_texto;
}

public function setActTexto(bool $act_texto): self
{
    $this->act_texto = $act_texto;

    return $this;
}

public function getActTexpla(): ?string
{
    return $this->act_texpla;
}

public function setActTexpla(string $act_texpla): self
{
    $this->act_texpla = $act_texpla;

    return $this;
}

public function getActTitulo(): ?string
{
    return $this->act_titulo;
}

public function setActTitulo(string $act_titulo): self
{
    $this->act_titulo = $act_titulo;

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

public function getNacId(): ?int
{
    return $this->nac_id;
}

public function setNacId(int $nac_id): self
{
    $this->nac_id = $nac_id;

    return $this;
}

public function getActNumero(): ?int
{
    return $this->act_numero;
}

public function setActNumero(int $act_numero): self
{
    $this->act_numero = $act_numero;

    return $this;
}

public function getActAnio(): ?int
{
    return $this->act_anio;
}

public function setActAnio(int $act_anio): self
{
    $this->act_anio = $act_anio;

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

public function getActFecfir(): ?\DateTimeInterface
{
    return $this->act_fecfir;
}

public function setActFecfir(\DateTimeInterface $act_fecfir): self
{
    $this->act_fecfir = $act_fecfir;

    return $this;
}

public function getActPki(): ?int
{
    return $this->act_pki;
}

public function setActPki(int $act_pki): self
{
    $this->act_pki = $act_pki;

    return $this;
}

public function getActPdf(): ?bool
{
    return $this->act_pdf;
}

public function setActPdf(bool $act_pdf): self
{
    $this->act_pdf = $act_pdf;

    return $this;
}

public function getActIdrel(): ?int
{
    return $this->act_idrel;
}

public function setActIdrel(int $act_idrel): self
{
    $this->act_idrel = $act_idrel;

    return $this;
}

public function getEnoId(): ?int
{
    return $this->eno_id;
}

public function setEnoId(int $eno_id): self
{
    $this->eno_id = $eno_id;

    return $this;
}

public function getProId(): ?int
{
    return $this->pro_id;
}

public function setProId(int $pro_id): self
{
    $this->pro_id = $pro_id;

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

public function getActAgregado(): ?int
{
    return $this->act_agregado;
}

public function setActAgregado(int $act_agregado): self
{
    $this->act_agregado = $act_agregado;

    return $this;
}

public function getActConhab(): ?int
{
    return $this->act_conhab;
}

public function setActConhab(int $act_conhab): self
{
    $this->act_conhab = $act_conhab;

    return $this;
}

public function getActAvisoley(): ?int
{
    return $this->act_avisoley;
}

public function setActAvisoley(int $act_avisoley): self
{
    $this->act_avisoley = $act_avisoley;

    return $this;
}

public function getIceId(): ?int
{
    return $this->ice_id;
}

public function setIceId(int $ice_id): self
{
    $this->ice_id = $ice_id;

    return $this;
}

public function getUsrIdnotif(): ?int
{
    return $this->usr_idnotif;
}

public function setUsrIdnotif(int $usr_idnotif): self
{
    $this->usr_idnotif = $usr_idnotif;

    return $this;
}

public function getActObs(): ?string
{
    return $this->act_obs;
}

public function setActObs(string $act_obs): self
{
    $this->act_obs = $act_obs;

    return $this;
}

public function getActPdfSignEmbedded(): ?int
{
    return $this->act_pdf_sign_embedded;
}

public function setActPdfSignEmbedded(int $act_pdf_sign_embedded): self
{
    $this->act_pdf_sign_embedded = $act_pdf_sign_embedded;

    return $this;
}

public function getActProtocolo(): ?int
{
    return $this->act_protocolo;
}

public function setActProtocolo(int $act_protocolo): self
{
    $this->act_protocolo = $act_protocolo;

    return $this;
}

public function getActFecllam(): ?\DateTimeInterface
{
    return $this->act_fecllam;
}

public function setActFecllam(\DateTimeInterface $act_fecllam): self
{
    $this->act_fecllam = $act_fecllam;

    return $this;
}

public function getActNroprotocolo(): ?string
{
    return $this->act_nroprotocolo;
}

public function setActNroprotocolo(string $act_nroprotocolo): self
{
    $this->act_nroprotocolo = $act_nroprotocolo;

    return $this;
}

public function getActTemaprotocolo(): ?string
{
    return $this->act_temaprotocolo;
}

public function setActTemaprotocolo(string $act_temaprotocolo): self
{
    $this->act_temaprotocolo = $act_temaprotocolo;

    return $this;
}

public function getOrgCodigo(): ?string
{
    return $this->org_codigo;
}

public function setOrgCodigo(string $org_codigo): self
{
    $this->org_codigo = $org_codigo;

    return $this;
}

public function getTccCodigo(): ?string
{
    return $this->tcc_codigo;
}

public function setTccCodigo(string $tcc_codigo): self
{
    $this->tcc_codigo = $tcc_codigo;

    return $this;
}

public function getHcaNumero(): ?int
{
    return $this->hca_numero;
}

public function setHcaNumero(int $hca_numero): self
{
    $this->hca_numero = $hca_numero;

    return $this;
}

public function getHcaAnio(): ?int
{
    return $this->hca_anio;
}

public function setHcaAnio(int $hca_anio): self
{
    $this->hca_anio = $hca_anio;

    return $this;
}

public function getDacCodigo(): ?string
{
    return $this->dac_codigo;
}

public function setDacCodigo(string $dac_codigo): self
{
    $this->dac_codigo = $dac_codigo;

    return $this;
}

public function getHacNumero(): ?int
{
    return $this->hac_numero;
}

public function setHacNumero(int $hac_numero): self
{
    $this->hac_numero = $hac_numero;

    return $this;
}

public function getHacAnio(): ?int
{
    return $this->hac_anio;
}

public function setHacAnio(int $hac_anio): self
{
    $this->hac_anio = $hac_anio;

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

public function getMovId(): ?int
{
    return $this->mov_id;
}

public function setMovId(int $mov_id): self
{
    $this->mov_id = $mov_id;

    return $this;
}

public function getLibroId(): ?int
{
    return $this->libro_id;
}

public function setLibroId(int $libro_id): self
{
    $this->libro_id = $libro_id;

    return $this;
}

public function getAsientoProtocol(): ?int
{
    return $this->asiento_protocol;
}

public function setAsientoProtocol(int $asiento_protocol): self
{
    $this->asiento_protocol = $asiento_protocol;

    return $this;
}

public function getAsientoadiProtocol(): ?int
{
    return $this->asientoadi_protocol;
}

public function setAsientoadiProtocol(int $asientoadi_protocol): self
{
    $this->asientoadi_protocol = $asientoadi_protocol;

    return $this;
}

public function getFoldesdeProtocol(): ?int
{
    return $this->foldesde_protocol;
}

public function setFoldesdeProtocol(int $foldesde_protocol): self
{
    $this->foldesde_protocol = $foldesde_protocol;

    return $this;
}

public function getObsfoldesdeProtocol(): ?int
{
    return $this->obsfoldesde_protocol;
}

public function setObsfoldesdeProtocol(int $obsfoldesde_protocol): self
{
    $this->obsfoldesde_protocol = $obsfoldesde_protocol;

    return $this;
}

public function getFolhastaProtocol(): ?int
{
    return $this->folhasta_protocol;
}

public function setFolhastaProtocol(int $folhasta_protocol): self
{
    $this->folhasta_protocol = $folhasta_protocol;

    return $this;
}

public function getObsfolhastaProtocol(): ?int
{
    return $this->obsfolhasta_protocol;
}

public function setObsfolhastaProtocol(int $obsfolhasta_protocol): self
{
    $this->obsfolhasta_protocol = $obsfolhasta_protocol;

    return $this;
}

public function getUUID(): ?string
{
    return $this->UUID;
}

public function setUUID(string $UUID): self
{
    $this->UUID = $UUID;

    return $this;
}

public function getCrcId(): ?int
{
    return $this->crc_id;
}

public function setCrcId(int $crc_id): self
{
    $this->crc_id = $crc_id;

    return $this;
}

public function getPDomId(): ?int
{
    return $this->p_dom_id;
}

public function setPDomId(int $p_dom_id): self
{
    $this->p_dom_id = $p_dom_id;

    return $this;
}

public function getActPrefijo(): ?int
{
    return $this->act_prefijo;
}

public function setActPrefijo(int $act_prefijo): self
{
    $this->act_prefijo = $act_prefijo;

    return $this;
}

public function getActSufijo(): ?int
{
    return $this->act_sufijo;
}

public function setActSufijo(int $act_sufijo): self
{
    $this->act_sufijo = $act_sufijo;

    return $this;
}

public function getActFecfirpen(): ?\DateTimeInterface
{
    return $this->act_fecfirpen;
}

public function setActFecfirpen(\DateTimeInterface $act_fecfirpen): self
{
    $this->act_fecfirpen = $act_fecfirpen;

    return $this;
}

public function getActLetra(): ?string
{
    return $this->act_letra;
}

public function setActLetra(string $act_letra): self
{
    $this->act_letra = $act_letra;

    return $this;
}

public function getActCuij(): ?string
{
    return $this->act_cuij;
}

public function setActCuij(string $act_cuij): self
{
    $this->act_cuij = $act_cuij;

    return $this;
}

public function getActSearch(): ?int
{
    return $this->act_search;
}

public function setActSearch(int $act_search): self
{
    $this->act_search = $act_search;

    return $this;
}

public function getPoseeAdj(): ?int
{
    return $this->posee_adj;
}

public function setPoseeAdj(int $posee_adj): self
{
    $this->posee_adj = $posee_adj;

    return $this;
}

public function getActCedPresper(): ?int
{
    return $this->act_ced_presper;
}

public function setActCedPresper(int $act_ced_presper): self
{
    $this->act_ced_presper = $act_ced_presper;

    return $this;
}

public function getActCedLey(): ?int
{
    return $this->act_ced_ley;
}

public function setActCedLey(int $act_ced_ley): self
{
    $this->act_ced_ley = $act_ced_ley;

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

public function getTaoId(): ?int
{
    return $this->tao_id;
}

public function setTaoId(int $tao_id): self
{
    $this->tao_id = $tao_id;

    return $this;
}

public function getAgeId(): ?int
{
    return $this->age_id;
}

public function setAgeId(int $age_id): self
{
    $this->age_id = $age_id;

    return $this;
}

public function getActAdjuntoRta(): ?bool
{
    return $this->act_adjunto_rta;
}

public function setActAdjuntoRta(bool $act_adjunto_rta): self
{
    $this->act_adjunto_rta = $act_adjunto_rta;

    return $this;
}

public function getActRta(): ?int
{
    return $this->act_rta;
}

public function setActRta(int $act_rta): self
{
    $this->act_rta = $act_rta;

    return $this;
}

public function getActFecRta(): ?\DateTimeInterface
{
    return $this->act_fec_rta;
}

public function setActFecRta(\DateTimeInterface $act_fec_rta): self
{
    $this->act_fec_rta = $act_fec_rta;

    return $this;
}

public function getOrgANotif(): ?int
{
    return $this->org_a_notif;
}

public function setOrgANotif(int $org_a_notif): self
{
    $this->org_a_notif = $org_a_notif;

    return $this;
}

public function getActFecVen(): ?\DateTimeInterface
{
    return $this->act_fec_ven;
}

public function setActFecVen(\DateTimeInterface $act_fec_ven): self
{
    $this->act_fec_ven = $act_fec_ven;

    return $this;
}

public function getActMail(): ?string
{
    return $this->act_mail;
}

public function setActMail(string $act_mail): self
{
    $this->act_mail = $act_mail;

    return $this;
}

public function getActEnvioMail(): ?int
{
    return $this->act_envio_mail;
}

public function setActEnvioMail(int $act_envio_mail): self
{
    $this->act_envio_mail = $act_envio_mail;

    return $this;
}

public function getActTextoNombre(): ?string
{
    return $this->act_texto_nombre;
}

public function setActTextoNombre(string $act_texto_nombre): self
{
    $this->act_texto_nombre = $act_texto_nombre;

    return $this;
}

public function getActAdjuntoRtaNombre(): ?string
{
    return $this->act_adjunto_rta_nombre;
}

public function setActAdjuntoRtaNombre(string $act_adjunto_rta_nombre): self
{
    $this->act_adjunto_rta_nombre = $act_adjunto_rta_nombre;

    return $this;
}

public function getActIdrespuesta(): ?int
{
    return $this->act_idrespuesta;
}

public function setActIdrespuesta(int $act_idrespuesta): self
{
    $this->act_idrespuesta = $act_idrespuesta;

    return $this;
}

public function getActEstrecep(): ?int
{
    return $this->act_estrecep;
}

public function setActEstrecep(int $act_estrecep): self
{
    $this->act_estrecep = $act_estrecep;

    return $this;
}

public function getActFecacept(): ?\DateTimeInterface
{
    return $this->act_fecacept;
}

public function setActFecacept(\DateTimeInterface $act_fecacept): self
{
    $this->act_fecacept = $act_fecacept;

    return $this;
}

public function getOrgIddes(): ?int
{
    return $this->org_iddes;
}

public function setOrgIddes(int $org_iddes): self
{
    $this->org_iddes = $org_iddes;

    return $this;
}

public function getActAdi(): ?ActAdi
{
    return $this->actAdi;
}

public function setActAdi(?ActAdi $actAdi): self
{
    $this->actAdi = $actAdi;

    // set (or unset) the owning side of the relation if necessary
    $newAct = $actAdi === null ? null : $this;
    if ($newAct !== $actAdi->getAct()) {
        $actAdi->setAct($newAct);
    }

    return $this;
}



}
