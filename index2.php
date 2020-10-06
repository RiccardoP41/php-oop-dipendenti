<?php

// require_once "classes/Dipendente.php";
require_once "classes/Operaio.php";
require_once "classes/Amministrativo.php";


// $dipendente1 = new Dipendente("Marco","Rossi","dasdasdasda","000001",15331.23);
// var_dump($dipendente1);
// echo $dipendente1->calcolaMensile();
try{
    $operaio1= new Operaio("Fabiana","Rossi","dasdasdasda","000001",15331.23,"Blu","Y");
    var_dump($operaio1);
    echo "percepisce " .$operaio1->calcolaMensile() ." euro al mese";
} catch (Exception $e){
    echo "<br> Errore: " .$e->getMessage();
}


try{
    $amministrativo1= new Amministrativo("Marco","Verdi","qwerxq332","000002",14991.93,2,3,"Y");
    var_dump($amministrativo1);
    echo "percepisce " .$amministrativo1->calcolaMensile() ." euro al mese";
} catch (Exception $e){
    echo "<br> Errore: " .$e->getMessage();
}



// $amministrativo1= new Amministrativo("Marco","Verdi","qwerxq332","000002",14991.93,2,3,"n");
// var_dump($amministrativo1);
// echo "percepisce " .$amministrativo1->calcolaMensile() ." euro al mese";
