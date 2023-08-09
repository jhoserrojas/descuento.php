<?php

function descuento(int $precio, float $descuento){
    
    $resultado = ($precio*($descuento/100));
    return $resultado;

}
$resultado = descuento(precio:500000, descuento:10);
echo $resultado

?>
