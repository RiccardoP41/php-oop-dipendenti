<?php

require_once __DIR__."/../traits/VisitaMedica.php";

class Dipendente{
    protected $nome;
    protected $cognome;
    protected $codiceFiscale;
    protected $matricola;
    protected $stipendioAnnuoLordo;
    use VisitaMedica;

    public function __construct($_nome,$_cognome,$_codiceFiscale,$_matricola, $_stipendioAnnuoLordo,$_visitaMedica){
        if ($_visitaMedica == "Y") {
            $this->doneVisitaMedica($_visitaMedica);
        }
        if ($this->visitaMedica == false) {
            echo "non ha ancora fatto la visita medica";
        }
        if (empty($_nome)) {
            die("Non hai inserito il nome");
        }
        $this->nome = $_nome;
        if (empty($_cognome)) {
            die("Non hai inserito il cognome");
        }
        $this->cognome = $_cognome;
        if (empty($_codiceFiscale)) {
            die("Non hai inserito il CF");        }
        $this->codiceFiscale = $_codiceFiscale;
        if (empty($_matricola)) {
            die("Non hai inserito la matricola");
        }
        if (!is_numeric($_matricola)) {
            die("Non hai inserito un valore numerico nella matricola");
        }
        $this->matricola = $_matricola;
        if (empty($_stipendioAnnuoLordo)) {
            die("Non hai inserito lo stipendio annuale");
        }
        if (!is_numeric($_stipendioAnnuoLordo)) {
            die("Non hai inserito un valore numerico nello stipendio annuale");
        }
        $this->stipendioAnnuoLordo = $_stipendioAnnuoLordo;
    }

    public function calcolaMensile(){
        if (empty($this->stipendioAnnuoLordo)) {
            die("Non hai inserito lo stipendio annuale");
        }
        return round($this->stipendioAnnuoLordo / 12,2);
    }

}
