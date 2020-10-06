<?php

require_once "Dipendente.php";

class Amministrativo extends Dipendente{
    private $piano;
    private $ufficio;

    public function __construct($_nome,$_cognome,$_codiceFiscale,$_matricola, $_stipendioAnnuoLordo,$_piano, $_ufficio,$_visitaMedica){
        parent::__construct($_nome,$_cognome,$_codiceFiscale,$_matricola, $_stipendioAnnuoLordo,$_visitaMedica);


        if (!empty($_piano)) {
            $this->piano = $_piano;
        }else {
            throw new Exception("Non hai inserito il piano");
        }

        if (is_numeric($_piano)) {
            $this->piano = $_piano;
        }else {
            throw new Exception("Non hai inserito correttamente il piano");
        }

        if (!empty($_ufficio)) {
            $this->ufficio = $_ufficio;
        }else {
            throw new Exception("Non hai inserito l'ufficio");
        }

        if (is_numeric($_ufficio)) {
            $this->ufficio = $_ufficio;
        }else {
            throw new Exception("Non hai inserito correttamente l'ufficio");
        }
    }

}
