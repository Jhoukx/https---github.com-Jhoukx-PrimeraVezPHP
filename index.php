<?php
    /**
     * Imprimir en PHP
     */

    echo "Texto a imprimir" , "<br></br>";

    /**
     * Declarar Variable
     */
    $word = "Mundo" . "<br></br>";
    
    /**
     * imprime el string siendo %s el valor de la variable en orden
     */

    /**
     * "sprintf" Devuelve la cadena formateada como resultado
     */
     
    printf("Hola %s",$word);
    $name = "John";
    $mensaje = sprintf("Hola, %s",$name);
    echo $mensaje . "<br></br>";

    // muestra información estructurada sobre una o más expresiones incluyendo su tipo y valor
    echo var_dump ($name) . "<br></br>";
    // "define" es la sintaxis mas propia para declarar constantes, pero hay otras maneras como const
    // Solo que const no obliga a llamar la constante en mayusculas
    define("PI",3.1416);
    echo PI
?>