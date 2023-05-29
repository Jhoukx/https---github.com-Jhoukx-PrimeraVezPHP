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
    echo $mensaje;


?>