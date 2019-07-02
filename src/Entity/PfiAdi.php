<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 *
 * @ORM\Entity(repositoryClass="App\Repository\PfiAdiRepository")
 */
class PfiAdi
{
    /**
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */

    private $per_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $usr_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $exp_n_cons;


    /**
     * @ORM\Column(type="integer")
     */

    private $exp_n_cons_def;


    /**
     * @ORM\Column(type="integer")
     */

    private $ant_res_arg;


    /**
     * @ORM\Column(type="integer")
     */

    private $reside_caba;


    /**
     * @ORM\Column(type="integer")
     */

    private $antigue_residencia;


    /**
     * @ORM\Column(type="integer")
     */

    private $sabe_leer;


    /**
     * @ORM\Column(type="integer")
     */

    private $sabe_escribir;


    /**
     * @ORM\Column(type="string")
     */

    private $derivado_por_o_de;


    /**
     * @ORM\Column(type="string")
     */

    private $tipo_entidad_educativa;


    /**
     * @ORM\Column(type="integer")
     */

    private $monto_cuota_edu;


    /**
     * @ORM\Column(type="integer")
     */

    private $beca_edu;


    /**
     * @ORM\Column(type="integer")
     */

    private $porcent_pesos;


    /**
     * @ORM\Column(type="string")
     */

    private $beneficiario_beca;


    /**
     * @ORM\Column(type="integer")
     */

    private $registrado;


    /**
     * @ORM\Column(type="integer")
     */

    private $monotributo;


    /**
     * @ORM\Column(type="integer")
     */

    private $monto_mono;


    /**
     * @ORM\Column(type="integer")
     */

    private $jubilacion;


    /**
     * @ORM\Column(type="integer")
     */

    private $jubilacion_monto;


    /**
     * @ORM\Column(type="integer")
     */

    private $pension;


    /**
     * @ORM\Column(type="integer")
     */

    private $pension_monto;


    /**
     * @ORM\Column(type="string")
     */

    private $tipo_pension;


    /**
     * @ORM\Column(type="integer")
     */

    private $ciudadania_portenia;


    /**
     * @ORM\Column(type="integer")
     */

    private $ticket_social;


    /**
     * @ORM\Column(type="integer")
     */

    private $subsidio_habitacional;


    /**
     * @ORM\Column(type="integer")
     */

    private $sub_nuestra_flia;


    /**
     * @ORM\Column(type="integer")
     */

    private $asig_univer_hijo;


    /**
     * @ORM\Column(type="integer")
     */

    private $plan_jefe_a_hogar;


    /**
     * @ORM\Column(type="string")
     */

    private $otros_planes;


    /**
     * @ORM\Column(type="integer")
     */

    private $ingr_otro_planes;


    /**
     * @ORM\Column(type="integer")
     */

    private $ing_flia_prom_men;


    /**
     * @ORM\Column(type="integer")
     */

    private $ing_ocupacion_declarante;


    /**
     * @ORM\Column(type="integer")
     */

    private $titulos_publicos;


    /**
     * @ORM\Column(type="integer")
     */

    private $obligaciones_negociables;


    /**
     * @ORM\Column(type="integer")
     */

    private $bonos;


    /**
     * @ORM\Column(type="integer")
     */

    private $acciones;


    /**
     * @ORM\Column(type="integer")
     */

    private $partici_societarias;


    /**
     * @ORM\Column(type="integer")
     */

    private $otras_tenencias;


    /**
     * @ORM\Column(type="integer")
     */

    private $no_posee_tenen;


    /**
     * @ORM\Column(type="integer")
     */

    private $cuenta_corriente;


    /**
     * @ORM\Column(type="integer")
     */

    private $caja_de_ahorro;


    /**
     * @ORM\Column(type="integer")
     */

    private $no_posee_cuenta_banc;


    /**
     * @ORM\Column(type="integer")
     */

    private $titu_tarj_credi;


    /**
     * @ORM\Column(type="string")
     */

    private $nombre_tarjeta;


    /**
     * @ORM\Column(type="integer")
     */

    private $gasto_prom_men_tarj;


    /**
     * @ORM\Column(type="integer")
     */

    private $tele_cable;


    /**
     * @ORM\Column(type="string")
     */

    private $empresa_cable;


    /**
     * @ORM\Column(type="integer")
     */

    private $imp_abonado_cable;


    /**
     * @ORM\Column(type="integer")
     */

    private $internet;


    /**
     * @ORM\Column(type="string")
     */

    private $empresa_internet;


    /**
     * @ORM\Column(type="integer")
     */

    private $imp_abona_internet;


    /**
     * @ORM\Column(type="integer")
     */

    private $medicina_prepaga;


    /**
     * @ORM\Column(type="string")
     */

    private $nombre_medi_prepaga;


    /**
     * @ORM\Column(type="integer")
     */

    private $imp_cuota_medicina;


    /**
     * @ORM\Column(type="integer")
     */

    private $obra_social;


    /**
     * @ORM\Column(type="string")
     */

    private $nombre_obra_social;


    /**
     * @ORM\Column(type="string")
     */

    private $benefi_titular;


    /**
     * @ORM\Column(type="integer")
     */

    private $socio_de_clubes;


    /**
     * @ORM\Column(type="string")
     */

    private $nombre_de_club;


    /**
     * @ORM\Column(type="integer")
     */

    private $imp_cuota_club;


    /**
     * @ORM\Column(type="integer")
     */

    private $cooperativas;


    /**
     * @ORM\Column(type="integer")
     */

    private $mutuales;


    /**
     * @ORM\Column(type="integer")
     */

    private $fundaciones;


    /**
     * @ORM\Column(type="integer")
     */

    private $otras_asocia_sin_fin_lucro;


    /**
     * @ORM\Column(type="string")
     */

    private $nombre_entidad_asociada;


    /**
     * @ORM\Column(type="string")
     */

    private $finalidad;


    /**
     * @ORM\Column(type="string")
     */

    private $otros_bienes;


    /**
     * @ORM\Column(type="string")
     */

    private $otros_gastos;


    /**
     * @ORM\Column(type="integer")
     */

    private $tot_gast_men_no_alimen;


    /**
     * @ORM\Column(type="integer")
     */

    private $otro_jui_en_tram;


    /**
     * @ORM\Column(type="datetime")
     */

    private $per_fec_sys;


    /**
     * @ORM\Column(type="integer")
     */

    private $activo;


    /**
     * @ORM\Column(type="integer")
     */

    private $sed_id;


    /**
     * @ORM\Column(type="string")
     */

    private $motivo_consulta;


    /**
     * @ORM\Column(type="string")
     */

    private $persona_juridica_fisica;


    /**
     * @ORM\Column(type="string")
     */

    private $institucion_juridica;


    /**
     * @ORM\Column(type="integer")
     */

    private $ticketsocial_monto;


    /**
     * @ORM\Column(type="integer")
     */

    private $ciudadania_monto;


    /**
     * @ORM\Column(type="integer")
     */

    private $autorizacion_pedido_antecedente;


    /**
     * @ORM\Column(type="integer")
     */

    private $per_trabaja;


    /**
     * @ORM\Column(type="string")
     */

    private $ocupa_fuente_ingr;


    /**
     * @ORM\Column(type="string")
     */

    private $tema_juicio;


    /**
     * @ORM\Column(type="string")
     */

    private $juzgado_juicio;


    /**
     * @ORM\Column(type="string")
     */

    private $abogado_juicio;


    /**
     * @ORM\Column(type="string")
     */

    private $obs_juicio;


    /**
     * @ORM\Column(type="integer")
     */

    private $activo_juicio;


    /**
     * @ORM\Column(type="string")
     */

    private $nom_sec;


    /**
     * @ORM\Column(type="integer")
     */

    private $org_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $censado_ivc;


    /**
     * @ORM\Column(type="integer")
     */

    private $bar_men_id;


    /**
     * @ORM\Column(type="integer")
     */

    private $prec_num;


    /**
     * @ORM\Column(type="integer")
     */

    private $bar_men_man_id;


    /**
     * @ORM\Column(type="datetime")
     */

    private $fecha;


    /**
     * @ORM\Column(type="string")
     */

    private $otro_pais;


    /**
     * @ORM\Column(type="string")
     */

    private $otro_pais_res;


    /**
     * @ORM\Column(type="string")
     */

    private $otro_prog_social;

    public function getPerId(): ?int
    {
        return $this->per_id;
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

    public function getExpNCons(): ?int
    {
        return $this->exp_n_cons;
    }

    public function setExpNCons(int $exp_n_cons): self
    {
        $this->exp_n_cons = $exp_n_cons;

        return $this;
    }

    public function getExpNConsDef(): ?int
    {
        return $this->exp_n_cons_def;
    }

    public function setExpNConsDef(int $exp_n_cons_def): self
    {
        $this->exp_n_cons_def = $exp_n_cons_def;

        return $this;
    }

    public function getAntResArg(): ?int
    {
        return $this->ant_res_arg;
    }

    public function setAntResArg(int $ant_res_arg): self
    {
        $this->ant_res_arg = $ant_res_arg;

        return $this;
    }

    public function getResideCaba(): ?int
    {
        return $this->reside_caba;
    }

    public function setResideCaba(int $reside_caba): self
    {
        $this->reside_caba = $reside_caba;

        return $this;
    }

    public function getAntigueResidencia(): ?int
    {
        return $this->antigue_residencia;
    }

    public function setAntigueResidencia(int $antigue_residencia): self
    {
        $this->antigue_residencia = $antigue_residencia;

        return $this;
    }

    public function getSabeLeer(): ?int
    {
        return $this->sabe_leer;
    }

    public function setSabeLeer(int $sabe_leer): self
    {
        $this->sabe_leer = $sabe_leer;

        return $this;
    }

    public function getSabeEscribir(): ?int
    {
        return $this->sabe_escribir;
    }

    public function setSabeEscribir(int $sabe_escribir): self
    {
        $this->sabe_escribir = $sabe_escribir;

        return $this;
    }

    public function getDerivadoPorODe(): ?string
    {
        return $this->derivado_por_o_de;
    }

    public function setDerivadoPorODe(string $derivado_por_o_de): self
    {
        $this->derivado_por_o_de = $derivado_por_o_de;

        return $this;
    }

    public function getTipoEntidadEducativa(): ?string
    {
        return $this->tipo_entidad_educativa;
    }

    public function setTipoEntidadEducativa(string $tipo_entidad_educativa): self
    {
        $this->tipo_entidad_educativa = $tipo_entidad_educativa;

        return $this;
    }

    public function getMontoCuotaEdu(): ?int
    {
        return $this->monto_cuota_edu;
    }

    public function setMontoCuotaEdu(int $monto_cuota_edu): self
    {
        $this->monto_cuota_edu = $monto_cuota_edu;

        return $this;
    }

    public function getBecaEdu(): ?int
    {
        return $this->beca_edu;
    }

    public function setBecaEdu(int $beca_edu): self
    {
        $this->beca_edu = $beca_edu;

        return $this;
    }

    public function getPorcentPesos(): ?int
    {
        return $this->porcent_pesos;
    }

    public function setPorcentPesos(int $porcent_pesos): self
    {
        $this->porcent_pesos = $porcent_pesos;

        return $this;
    }

    public function getBeneficiarioBeca(): ?string
    {
        return $this->beneficiario_beca;
    }

    public function setBeneficiarioBeca(string $beneficiario_beca): self
    {
        $this->beneficiario_beca = $beneficiario_beca;

        return $this;
    }

    public function getRegistrado(): ?int
    {
        return $this->registrado;
    }

    public function setRegistrado(int $registrado): self
    {
        $this->registrado = $registrado;

        return $this;
    }

    public function getMonotributo(): ?int
    {
        return $this->monotributo;
    }

    public function setMonotributo(int $monotributo): self
    {
        $this->monotributo = $monotributo;

        return $this;
    }

    public function getMontoMono(): ?int
    {
        return $this->monto_mono;
    }

    public function setMontoMono(int $monto_mono): self
    {
        $this->monto_mono = $monto_mono;

        return $this;
    }

    public function getJubilacion(): ?int
    {
        return $this->jubilacion;
    }

    public function setJubilacion(int $jubilacion): self
    {
        $this->jubilacion = $jubilacion;

        return $this;
    }

    public function getJubilacionMonto(): ?int
    {
        return $this->jubilacion_monto;
    }

    public function setJubilacionMonto(int $jubilacion_monto): self
    {
        $this->jubilacion_monto = $jubilacion_monto;

        return $this;
    }

    public function getPension(): ?int
    {
        return $this->pension;
    }

    public function setPension(int $pension): self
    {
        $this->pension = $pension;

        return $this;
    }

    public function getPensionMonto(): ?int
    {
        return $this->pension_monto;
    }

    public function setPensionMonto(int $pension_monto): self
    {
        $this->pension_monto = $pension_monto;

        return $this;
    }

    public function getTipoPension(): ?string
    {
        return $this->tipo_pension;
    }

    public function setTipoPension(string $tipo_pension): self
    {
        $this->tipo_pension = $tipo_pension;

        return $this;
    }

    public function getCiudadaniaPortenia(): ?int
    {
        return $this->ciudadania_portenia;
    }

    public function setCiudadaniaPortenia(int $ciudadania_portenia): self
    {
        $this->ciudadania_portenia = $ciudadania_portenia;

        return $this;
    }

    public function getTicketSocial(): ?int
    {
        return $this->ticket_social;
    }

    public function setTicketSocial(int $ticket_social): self
    {
        $this->ticket_social = $ticket_social;

        return $this;
    }

    public function getSubsidioHabitacional(): ?int
    {
        return $this->subsidio_habitacional;
    }

    public function setSubsidioHabitacional(int $subsidio_habitacional): self
    {
        $this->subsidio_habitacional = $subsidio_habitacional;

        return $this;
    }

    public function getSubNuestraFlia(): ?int
    {
        return $this->sub_nuestra_flia;
    }

    public function setSubNuestraFlia(int $sub_nuestra_flia): self
    {
        $this->sub_nuestra_flia = $sub_nuestra_flia;

        return $this;
    }

    public function getAsigUniverHijo(): ?int
    {
        return $this->asig_univer_hijo;
    }

    public function setAsigUniverHijo(int $asig_univer_hijo): self
    {
        $this->asig_univer_hijo = $asig_univer_hijo;

        return $this;
    }

    public function getPlanJefeAHogar(): ?int
    {
        return $this->plan_jefe_a_hogar;
    }

    public function setPlanJefeAHogar(int $plan_jefe_a_hogar): self
    {
        $this->plan_jefe_a_hogar = $plan_jefe_a_hogar;

        return $this;
    }

    public function getOtrosPlanes(): ?string
    {
        return $this->otros_planes;
    }

    public function setOtrosPlanes(string $otros_planes): self
    {
        $this->otros_planes = $otros_planes;

        return $this;
    }

    public function getIngrOtroPlanes(): ?int
    {
        return $this->ingr_otro_planes;
    }

    public function setIngrOtroPlanes(int $ingr_otro_planes): self
    {
        $this->ingr_otro_planes = $ingr_otro_planes;

        return $this;
    }

    public function getIngFliaPromMen(): ?int
    {
        return $this->ing_flia_prom_men;
    }

    public function setIngFliaPromMen(int $ing_flia_prom_men): self
    {
        $this->ing_flia_prom_men = $ing_flia_prom_men;

        return $this;
    }

    public function getIngOcupacionDeclarante(): ?int
    {
        return $this->ing_ocupacion_declarante;
    }

    public function setIngOcupacionDeclarante(int $ing_ocupacion_declarante): self
    {
        $this->ing_ocupacion_declarante = $ing_ocupacion_declarante;

        return $this;
    }

    public function getTitulosPublicos(): ?int
    {
        return $this->titulos_publicos;
    }

    public function setTitulosPublicos(int $titulos_publicos): self
    {
        $this->titulos_publicos = $titulos_publicos;

        return $this;
    }

    public function getObligacionesNegociables(): ?int
    {
        return $this->obligaciones_negociables;
    }

    public function setObligacionesNegociables(int $obligaciones_negociables): self
    {
        $this->obligaciones_negociables = $obligaciones_negociables;

        return $this;
    }

    public function getBonos(): ?int
    {
        return $this->bonos;
    }

    public function setBonos(int $bonos): self
    {
        $this->bonos = $bonos;

        return $this;
    }

    public function getAcciones(): ?int
    {
        return $this->acciones;
    }

    public function setAcciones(int $acciones): self
    {
        $this->acciones = $acciones;

        return $this;
    }

    public function getParticiSocietarias(): ?int
    {
        return $this->partici_societarias;
    }

    public function setParticiSocietarias(int $partici_societarias): self
    {
        $this->partici_societarias = $partici_societarias;

        return $this;
    }

    public function getOtrasTenencias(): ?int
    {
        return $this->otras_tenencias;
    }

    public function setOtrasTenencias(int $otras_tenencias): self
    {
        $this->otras_tenencias = $otras_tenencias;

        return $this;
    }

    public function getNoPoseeTenen(): ?int
    {
        return $this->no_posee_tenen;
    }

    public function setNoPoseeTenen(int $no_posee_tenen): self
    {
        $this->no_posee_tenen = $no_posee_tenen;

        return $this;
    }

    public function getCuentaCorriente(): ?int
    {
        return $this->cuenta_corriente;
    }

    public function setCuentaCorriente(int $cuenta_corriente): self
    {
        $this->cuenta_corriente = $cuenta_corriente;

        return $this;
    }

    public function getCajaDeAhorro(): ?int
    {
        return $this->caja_de_ahorro;
    }

    public function setCajaDeAhorro(int $caja_de_ahorro): self
    {
        $this->caja_de_ahorro = $caja_de_ahorro;

        return $this;
    }

    public function getNoPoseeCuentaBanc(): ?int
    {
        return $this->no_posee_cuenta_banc;
    }

    public function setNoPoseeCuentaBanc(int $no_posee_cuenta_banc): self
    {
        $this->no_posee_cuenta_banc = $no_posee_cuenta_banc;

        return $this;
    }

    public function getTituTarjCredi(): ?int
    {
        return $this->titu_tarj_credi;
    }

    public function setTituTarjCredi(int $titu_tarj_credi): self
    {
        $this->titu_tarj_credi = $titu_tarj_credi;

        return $this;
    }

    public function getNombreTarjeta(): ?string
    {
        return $this->nombre_tarjeta;
    }

    public function setNombreTarjeta(string $nombre_tarjeta): self
    {
        $this->nombre_tarjeta = $nombre_tarjeta;

        return $this;
    }

    public function getGastoPromMenTarj(): ?int
    {
        return $this->gasto_prom_men_tarj;
    }

    public function setGastoPromMenTarj(int $gasto_prom_men_tarj): self
    {
        $this->gasto_prom_men_tarj = $gasto_prom_men_tarj;

        return $this;
    }

    public function getTeleCable(): ?int
    {
        return $this->tele_cable;
    }

    public function setTeleCable(int $tele_cable): self
    {
        $this->tele_cable = $tele_cable;

        return $this;
    }

    public function getEmpresaCable(): ?string
    {
        return $this->empresa_cable;
    }

    public function setEmpresaCable(string $empresa_cable): self
    {
        $this->empresa_cable = $empresa_cable;

        return $this;
    }

    public function getImpAbonadoCable(): ?int
    {
        return $this->imp_abonado_cable;
    }

    public function setImpAbonadoCable(int $imp_abonado_cable): self
    {
        $this->imp_abonado_cable = $imp_abonado_cable;

        return $this;
    }

    public function getInternet(): ?int
    {
        return $this->internet;
    }

    public function setInternet(int $internet): self
    {
        $this->internet = $internet;

        return $this;
    }

    public function getEmpresaInternet(): ?string
    {
        return $this->empresa_internet;
    }

    public function setEmpresaInternet(string $empresa_internet): self
    {
        $this->empresa_internet = $empresa_internet;

        return $this;
    }

    public function getImpAbonaInternet(): ?int
    {
        return $this->imp_abona_internet;
    }

    public function setImpAbonaInternet(int $imp_abona_internet): self
    {
        $this->imp_abona_internet = $imp_abona_internet;

        return $this;
    }

    public function getMedicinaPrepaga(): ?int
    {
        return $this->medicina_prepaga;
    }

    public function setMedicinaPrepaga(int $medicina_prepaga): self
    {
        $this->medicina_prepaga = $medicina_prepaga;

        return $this;
    }

    public function getNombreMediPrepaga(): ?string
    {
        return $this->nombre_medi_prepaga;
    }

    public function setNombreMediPrepaga(string $nombre_medi_prepaga): self
    {
        $this->nombre_medi_prepaga = $nombre_medi_prepaga;

        return $this;
    }

    public function getImpCuotaMedicina(): ?int
    {
        return $this->imp_cuota_medicina;
    }

    public function setImpCuotaMedicina(int $imp_cuota_medicina): self
    {
        $this->imp_cuota_medicina = $imp_cuota_medicina;

        return $this;
    }

    public function getObraSocial(): ?int
    {
        return $this->obra_social;
    }

    public function setObraSocial(int $obra_social): self
    {
        $this->obra_social = $obra_social;

        return $this;
    }

    public function getNombreObraSocial(): ?string
    {
        return $this->nombre_obra_social;
    }

    public function setNombreObraSocial(string $nombre_obra_social): self
    {
        $this->nombre_obra_social = $nombre_obra_social;

        return $this;
    }

    public function getBenefiTitular(): ?string
    {
        return $this->benefi_titular;
    }

    public function setBenefiTitular(string $benefi_titular): self
    {
        $this->benefi_titular = $benefi_titular;

        return $this;
    }

    public function getSocioDeClubes(): ?int
    {
        return $this->socio_de_clubes;
    }

    public function setSocioDeClubes(int $socio_de_clubes): self
    {
        $this->socio_de_clubes = $socio_de_clubes;

        return $this;
    }

    public function getNombreDeClub(): ?string
    {
        return $this->nombre_de_club;
    }

    public function setNombreDeClub(string $nombre_de_club): self
    {
        $this->nombre_de_club = $nombre_de_club;

        return $this;
    }

    public function getImpCuotaClub(): ?int
    {
        return $this->imp_cuota_club;
    }

    public function setImpCuotaClub(int $imp_cuota_club): self
    {
        $this->imp_cuota_club = $imp_cuota_club;

        return $this;
    }

    public function getCooperativas(): ?int
    {
        return $this->cooperativas;
    }

    public function setCooperativas(int $cooperativas): self
    {
        $this->cooperativas = $cooperativas;

        return $this;
    }

    public function getMutuales(): ?int
    {
        return $this->mutuales;
    }

    public function setMutuales(int $mutuales): self
    {
        $this->mutuales = $mutuales;

        return $this;
    }

    public function getFundaciones(): ?int
    {
        return $this->fundaciones;
    }

    public function setFundaciones(int $fundaciones): self
    {
        $this->fundaciones = $fundaciones;

        return $this;
    }

    public function getOtrasAsociaSinFinLucro(): ?int
    {
        return $this->otras_asocia_sin_fin_lucro;
    }

    public function setOtrasAsociaSinFinLucro(int $otras_asocia_sin_fin_lucro): self
    {
        $this->otras_asocia_sin_fin_lucro = $otras_asocia_sin_fin_lucro;

        return $this;
    }

    public function getNombreEntidadAsociada(): ?string
    {
        return $this->nombre_entidad_asociada;
    }

    public function setNombreEntidadAsociada(string $nombre_entidad_asociada): self
    {
        $this->nombre_entidad_asociada = $nombre_entidad_asociada;

        return $this;
    }

    public function getFinalidad(): ?string
    {
        return $this->finalidad;
    }

    public function setFinalidad(string $finalidad): self
    {
        $this->finalidad = $finalidad;

        return $this;
    }

    public function getOtrosBienes(): ?string
    {
        return $this->otros_bienes;
    }

    public function setOtrosBienes(string $otros_bienes): self
    {
        $this->otros_bienes = $otros_bienes;

        return $this;
    }

    public function getOtrosGastos(): ?string
    {
        return $this->otros_gastos;
    }

    public function setOtrosGastos(string $otros_gastos): self
    {
        $this->otros_gastos = $otros_gastos;

        return $this;
    }

    public function getTotGastMenNoAlimen(): ?int
    {
        return $this->tot_gast_men_no_alimen;
    }

    public function setTotGastMenNoAlimen(int $tot_gast_men_no_alimen): self
    {
        $this->tot_gast_men_no_alimen = $tot_gast_men_no_alimen;

        return $this;
    }

    public function getOtroJuiEnTram(): ?int
    {
        return $this->otro_jui_en_tram;
    }

    public function setOtroJuiEnTram(int $otro_jui_en_tram): self
    {
        $this->otro_jui_en_tram = $otro_jui_en_tram;

        return $this;
    }

    public function getPerFecSys(): ?\DateTimeInterface
    {
        return $this->per_fec_sys;
    }

    public function setPerFecSys(\DateTimeInterface $per_fec_sys): self
    {
        $this->per_fec_sys = $per_fec_sys;

        return $this;
    }

    public function getActivo(): ?int
    {
        return $this->activo;
    }

    public function setActivo(int $activo): self
    {
        $this->activo = $activo;

        return $this;
    }

    public function getSedId(): ?int
    {
        return $this->sed_id;
    }

    public function setSedId(int $sed_id): self
    {
        $this->sed_id = $sed_id;

        return $this;
    }

    public function getMotivoConsulta(): ?string
    {
        return $this->motivo_consulta;
    }

    public function setMotivoConsulta(string $motivo_consulta): self
    {
        $this->motivo_consulta = $motivo_consulta;

        return $this;
    }

    public function getPersonaJuridicaFisica(): ?string
    {
        return $this->persona_juridica_fisica;
    }

    public function setPersonaJuridicaFisica(string $persona_juridica_fisica): self
    {
        $this->persona_juridica_fisica = $persona_juridica_fisica;

        return $this;
    }

    public function getInstitucionJuridica(): ?string
    {
        return $this->institucion_juridica;
    }

    public function setInstitucionJuridica(string $institucion_juridica): self
    {
        $this->institucion_juridica = $institucion_juridica;

        return $this;
    }

    public function getTicketsocialMonto(): ?int
    {
        return $this->ticketsocial_monto;
    }

    public function setTicketsocialMonto(int $ticketsocial_monto): self
    {
        $this->ticketsocial_monto = $ticketsocial_monto;

        return $this;
    }

    public function getCiudadaniaMonto(): ?int
    {
        return $this->ciudadania_monto;
    }

    public function setCiudadaniaMonto(int $ciudadania_monto): self
    {
        $this->ciudadania_monto = $ciudadania_monto;

        return $this;
    }

    public function getAutorizacionPedidoAntecedente(): ?int
    {
        return $this->autorizacion_pedido_antecedente;
    }

    public function setAutorizacionPedidoAntecedente(int $autorizacion_pedido_antecedente): self
    {
        $this->autorizacion_pedido_antecedente = $autorizacion_pedido_antecedente;

        return $this;
    }

    public function getPerTrabaja(): ?int
    {
        return $this->per_trabaja;
    }

    public function setPerTrabaja(int $per_trabaja): self
    {
        $this->per_trabaja = $per_trabaja;

        return $this;
    }

    public function getOcupaFuenteIngr(): ?string
    {
        return $this->ocupa_fuente_ingr;
    }

    public function setOcupaFuenteIngr(string $ocupa_fuente_ingr): self
    {
        $this->ocupa_fuente_ingr = $ocupa_fuente_ingr;

        return $this;
    }

    public function getTemaJuicio(): ?string
    {
        return $this->tema_juicio;
    }

    public function setTemaJuicio(string $tema_juicio): self
    {
        $this->tema_juicio = $tema_juicio;

        return $this;
    }

    public function getJuzgadoJuicio(): ?string
    {
        return $this->juzgado_juicio;
    }

    public function setJuzgadoJuicio(string $juzgado_juicio): self
    {
        $this->juzgado_juicio = $juzgado_juicio;

        return $this;
    }

    public function getAbogadoJuicio(): ?string
    {
        return $this->abogado_juicio;
    }

    public function setAbogadoJuicio(string $abogado_juicio): self
    {
        $this->abogado_juicio = $abogado_juicio;

        return $this;
    }

    public function getObsJuicio(): ?string
    {
        return $this->obs_juicio;
    }

    public function setObsJuicio(string $obs_juicio): self
    {
        $this->obs_juicio = $obs_juicio;

        return $this;
    }

    public function getActivoJuicio(): ?int
    {
        return $this->activo_juicio;
    }

    public function setActivoJuicio(int $activo_juicio): self
    {
        $this->activo_juicio = $activo_juicio;

        return $this;
    }

    public function getNomSec(): ?string
    {
        return $this->nom_sec;
    }

    public function setNomSec(string $nom_sec): self
    {
        $this->nom_sec = $nom_sec;

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

    public function getCensadoIvc(): ?int
    {
        return $this->censado_ivc;
    }

    public function setCensadoIvc(int $censado_ivc): self
    {
        $this->censado_ivc = $censado_ivc;

        return $this;
    }

    public function getBarMenId(): ?int
    {
        return $this->bar_men_id;
    }

    public function setBarMenId(int $bar_men_id): self
    {
        $this->bar_men_id = $bar_men_id;

        return $this;
    }

    public function getPrecNum(): ?int
    {
        return $this->prec_num;
    }

    public function setPrecNum(int $prec_num): self
    {
        $this->prec_num = $prec_num;

        return $this;
    }

    public function getBarMenManId(): ?int
    {
        return $this->bar_men_man_id;
    }

    public function setBarMenManId(int $bar_men_man_id): self
    {
        $this->bar_men_man_id = $bar_men_man_id;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getOtroPais(): ?string
    {
        return $this->otro_pais;
    }

    public function setOtroPais(string $otro_pais): self
    {
        $this->otro_pais = $otro_pais;

        return $this;
    }

    public function getOtroPaisRes(): ?string
    {
        return $this->otro_pais_res;
    }

    public function setOtroPaisRes(string $otro_pais_res): self
    {
        $this->otro_pais_res = $otro_pais_res;

        return $this;
    }

    public function getOtroProgSocial(): ?string
    {
        return $this->otro_prog_social;
    }

    public function setOtroProgSocial(string $otro_prog_social): self
    {
        $this->otro_prog_social = $otro_prog_social;

        return $this;
    }


}
