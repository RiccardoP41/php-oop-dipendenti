<?php

require_once "Dipendente.php";

class Amministrativo extends Dipendente{
    private $piano;
    private $ufficio;

    public function __construct($_nome,$_cognome,$_codiceFiscale,$_matricola, $_stipendioAnnuoLordo,$_piano, $_ufficio,$_visitaMedica){
        parent::__construct($_nome,$_cognome,$_codiceFiscale,$_matricola, $_stipendioAnnuoLordo,$_visitaMedica);
        if (empty($_piano) || !is_numeric($_piano)) {
            die("Non hai inserito correttamente il piano");
        }
        $this->piano = $_piano;
        if (empty($_ufficio) || !is_numeric($_ufficio)) {
            die("Non hai inserito correttamente l'ufficio");
        }
        $this->ufficio = $_ufficio;
    }

}
