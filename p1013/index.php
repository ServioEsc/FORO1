<html>
    
    <head>
        
        <title>
        
        </title>
        
        <body>
            
            <input type="email">  
            <input type="button">
        
        
        </body>
    
    
    </head>



</html>



<?php

    // Constantes
    
    define('PI', 3.1416);
    define('TASA_IVA', 0.15);

    //Variables

    $radio = 5;     // entera
    $base = 10.4;   // real
    $altura = 8.6;  // real
    $subtotal = 100;
    $i=0;  //incremento
 
    // Operaciones aritméticas

    $area_circulo = PI * ($radio **2);
    $area_triangulo = ($base * $altura)/2;
    $total = $subtotal + ($subtotal*TASA_IVA);

    //incrementos y decrementos
    
    $i++;
    $i--;

    //Imprimir los resultados

    echo "El área del circulo es:";  // linea escrita: es decir lo que esta entre comillas se presenta en la pagina
    echo $area_circulo;
    echo "<br>";
    echo "El area del triangulo es:";
    echo $area_triangulo;
    echo "<br>";
    echo "El total más IVA es:". $total;
   
    //Operaciones lógicas IF
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "USO DE CONDICIONES IF";

    echo "<br>";

    if($area_circulo>$area_triangulo){
        
        echo "El área del círculo". $area_circulo . "cm es mayor al área del triangulo con " .$area_triangulo . "cm";
        
    } else{
        echo "El área del triangulo ". $area_triangulo . " cm es mayor al área del círculo con " . $area_circulo . " cm";
    
    }
    
    //Condicionales anidadas con total

    if($total >= 0 && $total<100){
        $descuento = 0;
        $total = $total - $descuento;
        echo "<br>";
        echo "El total a pagar con descuento es: $";
        echo $total;
    }else if($total>=100 && $total<150){
        $descuento = 20;
        $total = $total - $descuento;
        echo "<br>";
        echo "El total a pagar con descuento es: $";
        echo $total;
    }else{
        $descuento = 50;
        $total = $total - $descuento;
        echo "<br>";
        echo "El total a pagar con descuento es: $";
        echo $total;
    }
?>