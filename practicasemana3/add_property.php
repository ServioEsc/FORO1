<?php
session_start();
include 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    addProperty($_POST['title'], $_POST['price'], $_POST['description']);
    echo "<p> La propiedad fue ingresada correctamente.</p>";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Agregar Propiedad inmobiliaria</title>
</head>
<body>
    <h2>Agregar una nueva Propiedad</h2>
    <form action="add_propierty.php" method="POST">
        <label>Título:</label>
        <input type="text" name="title" required><br><br>
        <label>Precio:</label>
        <input type="number" name="precio" required><br><br>
        <label>Descripción:</label>
        <textarea name="description" required></textarea><br><br>
        <button type="submit">Agregar Propiedad</button>
    </form>
</body>
</html>