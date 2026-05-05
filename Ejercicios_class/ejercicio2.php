<?php
$diasSemana = [
    "1" => "Lunes",
    "2" => "Martes",
    "3" => "Miércoles",
    "4" => "Jueves",
    "5" => "Viernes",
    "6" => "Sábado",
    "7" => "Domingo"
];

foreach ($diasSemana as $key => $dia) {

    $dosLetras = substr($dia, 0, 2);
    
    echo $dosLetras . "<br>";
}
?>
