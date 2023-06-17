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
     * * Devuelve un array y aplica la funcion a todos los elementos de un array
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
    /**
     * ? Array diff
     * * Devuelve un array con los valores diferentes de dos o más arrays 
     */
    echo "<h3>array_diff():</h3>";
    $array_example11_1 = array("a" => "green", "red", "blue", "red");
    $array_example11_2 = array("b" => "green", "yellow", "red");
    print_r(array_diff($array_example11_1,$array_example11_2));
    /**
     * ? Array push
     * *Agrega uno o más elementos al final de un array (Modifica el original)
     */
    echo "<h3>array_push():</h3>";
    $array_example12 = array("El","ba");
    array_push($array_example12,"jito");
    print_r($array_example12);
    /**
     * ? Array pop
     * * Elimina el ultimo elemento del array (Modifica el original)
     */
    echo "<h3>array_pop():</h3>";
    $array_example13 = array("orange", "banana", "apple", "raspberry");
    array_pop($array_example13);
    print_r($array_example13);
    /**
     * ? Array Reverse
     * * Retorna un array con los elementos en orden inverso
     */
    echo "<h3>array_pop():</h3>";
    $array_example14= array("php", 4.0, array("green", "red"));
    echo "<h4>-Array</h4>";
    print_r($array_example14);
    echo "<h4>-Array revertido</h4>";
    print_r(array_reverse($array_example14));
    /**
     * ? Array sum 
     * Devuelve un entero o float de la suma de los valores de un array ARRAYS INDEXADOS O DE ASIGNACION
     */
    echo "<h3>array_sum():</h3>";
    $array_example15 = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
    echo "Suma: ". array_sum($array_example15);
    /**
     * ? Array product 
     * * Devuelve el producto de los valores de un array (Multiplica todos los valores)
     */
    echo "<h3>array_product():</h3>";
    $array_example16 = array(2,5,2,2);
    echo array_product($array_example16);
    /**
     * ? Array chunk
     * * Divide un array en fragmentos más pequeños.
     */
    echo "<h3>array_chunk():</h3>";
    $array_example17 = array('a', 'b', 'c', 'd', 'e');
    print_r(array_chunk($array_example17,2));
    /**
     * ? Array Keys
     * * Devuelve un array de todas las llaves de un array
     */
    echo "<h3>array_keys():</h3>";
    $array_example18 =array(0 => 100, "color" => "red");
    print_r(array_keys($array_example18));
    /**
     * ? Array Values
     * * Devuelve un array detodos los valores de un array.
     */
    echo "<h3>array_values():</h3>";
    $array_example19 = array("size" => "XL", "color" => "gold");
    print_r(array_values($array_example19));
    /**
     * ? Array Walk
     * * Aplica una función de devolución de llamada a cada elemento de un array.
     */
    echo "<h3>array_walk():</h3>";
    function test_print($item2, $key){
        echo "$key. $item2\n";
    }
    $array_example20 = array("a" => "calculadora", "b" => "documentacion", "c" => "ejercicios");
    echo "<h4>Cosas que hacer:</h4>";
    array_walk($array_example20,"test_print");
    /**
     * todo ISSET y EMPTY
     */
    echo "<hr>";
    /**
     * todo FUNCIONES PHP
     */

    echo "<h1>Funciones PHP</h1>";

    /**
     * *Exige el tipado en todo el codigo
     * declare(strict_types=1);
     */
    echo "PERMITE EL TIPADO ESTRICTO : declare(strict_types=1)" . "<br/>";
    
    /**
     * *Funcion con tipado estricto
     * function saludar(string $nombre):? string{
     *    if($nombre=="Miguel"){
     *       return "Hola que mas";
     *   }else{
     *       return null;
     *   }
     *  }
     * saludar();
     */
    
    /**
     * *Funcion anonima
     * $fn = function():bool{     
     *  return true; 
     * };
     * echo $fn();
     */


    /**
     * *Use 
     * Permite usar un dato  sin pasarlo como parametro
     */
    
    $nombre = "Miguel";
    $fn = function () use($nombre):string{
        return "Dato pasado por 'use' :".$nombre . "<br/>";
    };
    echo $fn() . "<br/>";
    /**
     * *Funcion que no retorna un valor 
     */
    function funcionVoid($numero1,$numero2){
        echo "Funcion sin retornar ";
        echo $numero1 + $numero2;
    } 
    funcionVoid(5,5);

    /**
     * todo json_encode y json_decode
     */
    
    /**
     * * json_encode
     *  Sirve para convertir una estructura de datos a una cadena JSON
     */
    echo "<h1>Json encode y decode</h1>";
    echo "<h3>json_encode </h3>";
    echo "Antes del json_encode:" . "<br/>";
    echo "<br/>";
    $jsonEncode = [
        [
            "nombre"=> "Iphone",
            "precio"=> 500,
            "inStock"=>true
        ],
        [
            "nombre"=> "Android",
            "precio"=> 300,
            "inStock"=>false
        ]
        ];
    print_r($jsonEncode);
    echo "Después del json_encode:" . "<br/>";
    echo "<br/>";
    $jsonDecode =json_encode($jsonEncode);
    print_r(json_encode($jsonEncode));
    /**
     * * json_decode
     *  Sirve para convertir una cadena JSON a una structura de datos de PHP
     */
    echo "<h3>json_decode </h3>";
    echo "Antes del json_decode" . "<br/>";
    print_r($jsonDecode);
    echo "<br/>". "<br/>";
    echo "Después del json_decode:" . "<br/>";
    echo "<br/>";
    print_r(json_decode($jsonDecode));

?>
