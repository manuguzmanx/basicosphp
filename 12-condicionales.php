<?php include 'includes/header.php';

$autenticado = false;
$admin = false;

if($autenticado || $admin) {
    echo "Estás autenticado";
} else {
    echo "Auténticate";
}

//If anidados

$cliente = [
    'nombre' => 'Luis',
    'saldo' => 0,
    'informacion' => [
        'tipo' => 'premium'
    ]
];

echo "<br>";

if(!empty($cliente)) {
    echo "El arreglo de cliente no está vacío";

    if($cliente['saldo'] > 0) {
        echo "El cliente tiene saldo";
    } else {
        echo "El cliente no tiene saldo";
    }
} 

//else if

if($cliente['saldo'] > 0) {
    echo "El cliente tiene saldo";
} else if ($cliente['informacion']['tipo'] === 'premium') {
    echo "El cliente es premium";
} else {
    echo "No hay cliente, no tiene saldo o no es premium";
}

echo "<br>";

//Switch

$tecnologia = 'Go';

switch($tecnologia) {
    case 'PHP':
        echo "PHP, un excelente lenguaje";
        break;
    case 'Javascript':
        echo "Genial, el lenguaje de la web";
        break;
    default:
        echo "Algún lenguaje que no sé cuál es";
        break;
}



include 'includes/footer.php';