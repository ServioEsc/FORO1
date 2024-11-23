<!DOCTYPE html>
<html lang = "es">
<head>
    <meta charset="UTF-8">
    <title>Detalles de los perfumes</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        
        <div class="container">
            
            <?php
            
             // un arreglo completo con descripcion 
            
            $perfumes=[
                ["id"=>1, "nombre"=>"Mount Black", "descripcion"=> "Fuerte y duradero", "precio"=> 120],
                ["id"=>2, "nombre"=>"Aqua","descripcion"=> "Temporal", "precio"=> 80],
                ["id"=>3, "nombre"=>"Floral Essence", "descripcion"=> "Duradero", "precio"=> 76],
                ["id"=>4, "nombre"=>"Wood Musk", "descripcion"=> "Suave y dulce", "precio"=> 55]
            ];
            
            //funcion para buscar el perfume por el ID
            
            function buscarPerfume($id, $perfumes){
                
                foreach($perfumes as $perfume){
                    
                    if($perfume['id'] == $id){
                        
                        return $perfume;
                        
                    }
                        
                }
                
                return null;
                
            }
            
            //Validar informacion del ID recibido
            
            if($_SERVER['REQUEST_METHOD'] =='POST' && isset ($_POST['id'])){
                
                $id = $_POST['id'];
                
                $perfume = buscarPerfume($id, $perfumes);
                
                if($perfume){
                    
                    echo"<h1>" . $perfume['nombre'] . "</h1>";
                    echo"<p> Descripción: " . $perfume['descripcion'] . "</p>";
                    echo"<p> Precio: " . $perfume['precio'] . "</p>";
                } else{
                    
                    echo"<p> Perfume no encontrado </p>"    
                }
                
            }else{
                
                echo "<p> La ID del perfume no es validó.</p>"
            }
            
            ?>
            
            <a href="index.php"> <button> Ir a home </button></a>
        
        </div>
    
    </body>