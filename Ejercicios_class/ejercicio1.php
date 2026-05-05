<?php
$cant_minutos = intval($_POST['cant_minutos']); // Input

if ($cant_minutos <= 3) {
    echo "el valor de la llama son 300 pesos";
} else {
    $valor_llamada = 300 + 50 * ($cant_minutos - 3);
    echo "El valor de la llamada es: " . $valor_llamada;
}

else:
    valor_llamada = 300+50*(cant_minutos-3)


    print(f"El valor de llamda es: " + str(valor_llamada))

?>
