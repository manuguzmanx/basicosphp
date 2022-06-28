<?php include 'includes/header.php';

//in_array -> Buscar elementos en un array
$carrito = ['Tablet', 'Computadora', 'Television'];

var_dump(in_array('Tablet', $carrito));
var_dump(in_array('Audifonos', $carrito));

//Ordenar elementos de un arreglo

$numeros = array(1, 3, 4, 5, 1, 2);
sort($numeros); //De menor a mayor
rsort($numeros); //De mayor a menor

echo "<pre>";
var_dump($numeros);
echo "</pre>";

//Ordenar arreglo asociativo

$cliente = array(
    'saldo' => 100,
    'tipo' => 'Premium',
    'nombre' => 'Juan'
);

echo "<pre>";
var_dump($cliente);
echo "</pre>";

asort($cliente); //Ordena por valores (Orden alfabético)
arsort($cliente); //Ordena por valores Primero letras y luego números (z primero)
ksort($cliente); //Ordena por llaves (Orden alfabético)
krsort($cliente); //Por orden alfabético pero al revés (z -> a)

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';