<?php
function invertirArreglo($arreglo) {
    $tamaño = count($arreglo);
    $arregloInvertido = array();
    
    for ($i = $tamaño - 1; $i >= 0; $i--) {
        $arregloInvertido[] = $arreglo[$i];
    }
    
    return $arregloInvertido;
}

// Ejemplo de uso:
$arregloOriginal = array(10, 9, 8, 7, 6, 5, 4, 3, 2, 1);
$arregloInvertido = invertirArreglo($arregloOriginal);

print_r($arregloInvertido);
?>
