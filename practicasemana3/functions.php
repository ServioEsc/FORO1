<?php
//sessio_start();

function addProperty ($title, $price, $description) {
    if (!isset($_SESSION['properties'])) {
        $_SESSION['properties'] = [];
    }
    $property = [
        'title' => $title,
        'price' => $price,
        'description' => $descrption
    ];
    $_SESSION['properties'][] = $property;
}

function getProperties() {
    return $_SESSION['properties'] ?? [];
}
?>