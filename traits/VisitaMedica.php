<?php

trait VisitaMedica{
    public $visitaMedica;

    public function doneVisitaMedica($_data)    {
        if (!empty($_data)) {
            $this->visitaMedica = true;
        }
    }

}
