<?php include 'includes/header.php';

$cliente = [
    'nombre' => 'Luis',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<pre>";
var_dump($cliente['nombre']);
echo "</pre>";

// echo $cliente['nombre'];
// echo $cliente['saldo'];

// echo $cliente['informacion']['tipo'];

$cliente['codigo'] = 123456;
//Como no existe la agrega
//Si existe la reemplaza

echo "<pre>";
var_dump($cliente);
echo "</pre>";

include 'includes/footer.php';