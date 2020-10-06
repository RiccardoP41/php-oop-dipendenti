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
        }   else {
            throw new Exception("$_nome $_cognome non ha ancora fatto la visita medica");
        }
        // if ($this->visitaMedica == false) {
        //     echo "<br> non ha ancora fatto la visita medica";
        // }

        if (!empty($_nome)) {
            $this->nome = $_nome;
        }else {
            throw new Exception("Non hai inserito il nome");
        }

        if (!empty($_cognome)) {
            $this->cognome = $_cognome;
        }else {
            throw new Exception("Non hai inserito il cognome");
        }

        if (!empty($_codiceFiscale)) {
            $this->codiceFiscale = $_codiceFiscale;
        }else {
            throw new Exception("Non hai inserito il codice fiscale");
        }

        if (!empty($_matricola)) {
            $this->matricola = $_matricola;
        }else {
            throw new Exception("Non hai la matricola");
        }

        if (is_numeric($_matricola)) {
            $this->matricola = $_matricola;
        }else {
            throw new Exception("Non hai inserito correttamente la matricola, deve essere un numero");
        }

        if (!empty($_stipendioAnnuoLordo)) {
            $this->stipendioAnnuoLordo = $_stipendioAnnuoLordo;
        }else {
            throw new Exception("Non hai inserito lo stipendio annuale");
        }

        if (is_numeric($_stipendioAnnuoLordo)) {
            $this->stipendioAnnuoLordo = $_stipendioAnnuoLordo;
        }else {
            throw new Exception("Non hai inserito lo stipendio annuale come valore numerico");
        }
    }


    public function calcolaMensile(){

        if (!empty($this->stipendioAnnuoLordo)) {
            return round($this->stipendioAnnuoLordo / 12,2);
        } else {
            throw new Exception("Non hai inserito lo stipendio annuale");
        }

    }

}
