<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset="UTF-8">
    <title>Tienda de Perfumes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <div class="container">
        
        <h1>Bienvenidos a la tienda de perfumes Maria</h1>
        <div class="perfumes-list">
        
            <?php
            
            //quema un arreglo de perfumes
            
            $perfumes=[
                ["id"=>1, "nombre"=>"Mount Black", "precio"=> 120],
                ["id"=>2, "nombre"=>"Aqua", "precio"=> 80],
                ["id"=>3, "nombre"=>"Floral Essence", "precio"=> 76],
                ["id"=>4, "nombre"=>"Wood Musk", "precio"=> 55]
            ];
            
            // funcion mostrar los perfumes
            
            function mostrarPerfumes($perfumes){
                
                foreach($perfumes as $perfume){
                    
                    echo "<div class='perfume-item'>";
                    echo "<h2>" .$perfume['nombre']."</h2>";
                    echo "<p>" .$perfume['precio'] ."</p>";
                    echo "<form action='detalle.php' method='POST'>";
                    echo "<input type='hidden' name='id' value='".$perfume['id']."'>";
                    echo "<button type'submit'> Ver Detalle </button>";
                    echo "</form>";
                    echo "</div>";
                                        
                }
                
                
                
            }
            
            //llamamos a la funcion mostrar perfumes
            
            mostrarPerfumes($perfumes);
            
            
            
            ?>
        
        
        </div>
        
    
    </div>
    </body>



</html>