<?php
require_once "Dipendente.php";

class Operaio extends Dipendente{
    private $settore;

    public function __construct($_nome,$_cognome,$_codiceFiscale,$_matricola, $_stipendioAnnuoLordo,$_settore,$_visitaMedica){
        parent::__construct($_nome,$_cognome,$_codiceFiscale,$_matricola, $_stipendioAnnuoLordo,$_visitaMedica);
        if (empty($_settore)) {
            die("Non hai inserito il settore");
        }
        $this->settore = $_settore;
    }

}
