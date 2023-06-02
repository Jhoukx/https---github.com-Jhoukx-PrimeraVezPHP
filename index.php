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
    echo PI , "<br></br>";

    /**
     * ? Tipos de datos
     */

    //Modificar index de un array
    $array = ["edad" => 23, "nombre" => "g"];
    var_dump($array);
    
    //Boolean 
    $login = true;
    var_dump($login);


    /**
     * ?ARRAYS EN CLASE 
     */

    /**
     * todo Array Indexado
     * *Este tipo de array tiene índices numéricos. Aquí está un ejemplo de cómo definir un array indexado:
     * @var array $nombres
     */
    $nombres = array("Juan", "Pedro", "Santiago");
    print_r($nombres);
    // echo "<hr>";
    /**
     * todo Array Multidimensional
     * *Este es un array que contiene uno o más arrays en sí. Un ejemplo común sería un array que contiene información para varias personas, donde cada persona es un array que contiene la información para esa persona. Aquí está un ejemplo:
     * @var array $personas
     */
    $personas = array(
        "Juan" => array(
            "Edad" => 35, 
            "Ciudad" => "Madrid", 
            "País" => "España"),
        "Pedro" => array(
            "Edad" => 37, 
            "Ciudad" => "Barcelona", 
            "País" => "España"),
        "Santiago" => array(
            "Edad" => 43, 
            "Ciudad" => "Valencia", 
            "País" => "España")
    );
    /**
     * ? Ejemplo de como insertar un dato nuevo al array Multidimensional
     */
    echo "<pre>";
    $personas["Pedro"]["Altura"] = 1.63;
    print_r($personas);
    /**
     * ? Ejemplo de como aceder al array
     */
    print_r($personas['Pedro']['País']);
    echo "<hr>";

    /**
     * todo Funciones de arrays 
    */
    echo "<h1>Funciones de arrays</h1>";

    /**
     * ?Array Flip
     * *Intercambia las claves con sus valores 
     */
    echo "<h3>array_flip():</h3>";
    $array_example1 = array (
        "nombre" => "Gerardo",
        "Edad" => 45,
        "Estado Civil" => "Confuso"
    );
    $flipped = array_flip($array_example1);
    print_r($flipped);
    /**
     * ? Array Fill
     * *Rellena un array con un valor específico
     */
    echo "<h3>array_fill():</h3>";
    $array_example2 = array_fill(15,6,"Tequila");
    print_r($array_example2);

    /**
     * ? Array filter
     * * Filtra los elementos de un array con una función 
     */
    echo "<h3>array_filter():</h3>";
    function impar ($number){
        return !($number % 2 ==0);
    }
    $array_example3 = array(1,2,3,4,5,6,7,8,9,10);
    print_r(array_filter($array_example3,"impar"));

    /**
     * ? Array map
     * * Aplica la funcion a todos los elementos de un array
     */
    
    echo "<h3>array_map():</h3>";
    $array_example4 = array(5,10,15,20);
    print_r(array_map(fn($num)=>$num+5,$array_example4));

    /**
     * ? Array reduce
     * * Reduce a un solo valor usando todos los valores del array, utiliza una funcion para el valor 
     */
    
    echo "<h3>array_reduce():</h3>";
    $array_example5 =array(5,5,3,5);
    print_r(array_reduce($array_example5,fn($acum,$val)=>
        $acum+= $val
    ));
    /**
     * ? Array key exists
     * * devuelve un valor booleano si existe o no la llave 
     */

    echo "<h3>array_key_exists():</h3>";
    $array_example6 = array("nombre"=>"Lucho","profesion"=>"programador");
    echo array_key_exists("novia",$array_example6)?"Buena lucho":"Ni modo";

    /**
     * ? in Array
     * *Devuelve un valor booleano si existe o no el dato en el array;
     */
    
    echo "<h3>in_array():</h3>";
    $array_example7= array("Pepito","Pepata","Andres");
    echo in_array("Pepata",$array_example7)? "Pepata existe 0.o" : "Pepata no existe :D";

    /**
     * ? Array rand
     * *Devuelve una o varias claves aleatorias de un array en otro array
     */
    echo "<h3>array_rand():</h3>";
    $array_example8 = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
    $rand_keys = array_rand($array_example8, 2);
    var_dump($rand_keys);
    echo $array_example8[$rand_keys[0]] . "\n";
    echo $array_example8[$rand_keys[1]] . "\n";

    /**
     * ? Array unique
     * * Devuelve un array eliminando los valores duplicados de un array 
     */
    echo "<h3>array_unique():</h3>";
    $array_example9 = array("a" => "verde", "rojo", "b" => "verde", "azul", "rojo");
    print_r(array_unique($array_example9));
    /**
     * ? Array intersect 
     * * Devuelve un array con los valores en comun de varios arrays
     */
    echo "<h3>array_intersect():</h3>";
    $array_example10_1 = array("amarillo","rojo","rosado");
    $array_example10_2 = array("naranja","rojo","rosado","gris");
    print_r(array_intersect($array_example10_1,$array_example10_2));
    
    