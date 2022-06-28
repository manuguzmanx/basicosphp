<?php include 'includes/header.php';

$carrito = ['Tablet', 'Televisión', 'Computadora'];



//Acceder a un elemento del array
echo $carrito[1];

//Añade un elemento en el indice 3 del arreglo
$carrito[3] = 'Nuevo producto...';

//Añadir un elemento al final
array_push($carrito, 'Audifonos');

//Añadir al inicio
array_unshift($carrito, 'Smartwatch');


//Útil para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
echo "</pre>";

$clientes = array('Cliente uno', 'Cliente dos', 'Cliente tres');

echo "<pre>";
var_dump($clientes);
echo "</pre>";

include 'includes/footer.php';