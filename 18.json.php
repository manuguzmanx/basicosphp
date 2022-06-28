<?php include 'includes/header.php';

$productos = [
    [
        'nombre' => 'Tablet',
        'precio' => '200',
        'disponible' => true
    ],
    [
        'nombre' => 'Televisión 24"',
        'precio' => '300',
        'disponible' => true
    ],
    [
        'nombre' => 'Monitor Curvo',
        'precio' => '400',
        'disponible' => false
    ]
];
//Permite consumirlo con Javscript
echo "<pre>";
var_dump($productos);

$json = json_encode($productos, JSON_UNESCAPED_UNICODE); //Arreglo a string
var_dump($json);

$json_array = json_decode($json); //De string a array

var_dump($json_array);
echo "</pre>";


include 'includes/footer.php';