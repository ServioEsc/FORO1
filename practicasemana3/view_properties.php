<?php
include 'functions.php';
$properties = getProperties();

if (count($properties) > 0) {
    foreach ($properties as $property) {
        echo "<div class= 'property'>";
        echo "<h3>{$property['title']}</h3>";
        echo "<p>Precio: \${$property['description']}</p>";
        echo "<p>Descripción: {$property['description']}</p>";
        echo "</div>";
    }
} else {
    echo "<p> No hay propiedades disponibles.</p>";
}
?>