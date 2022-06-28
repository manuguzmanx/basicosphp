<?php include 'includes/header.php';

//While

$i = 100;

while($i < 10) {

    echo $i . "<br>";
    
    $i++; //Incremento
}

//Do while -> Se ejecuta al menos una vez

do {
    echo $i . "<br>";
    $i++;
} while($i< 10);


/*Fizz Buzz
* 3 imprimir Fizz
* 5 imprimir Buzz
* 3 y 5 imprimir FIZZBUZZ 
*/ 

for($i = 1; $i <= 100; $i++) {
    if($i%3==0 && $i%5==0) {
        echo $i . " FIZZBUZZ" . "<br>";
    } else if ($i%3==0) {
        echo $i . " Fizz" . "<br>";
    } else if($i%5==0) {
        echo $i . " Buzz" . "<br>";
    } else {
        echo $i .  "<br>";
    }
}

//for loop
for($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

// For each

$clientes = array('Pedro', 'Juan', 'Karen');

foreach($clientes as $cliente) {
    echo $cliente . "<br>";
}

echo count($clientes); //Extensión del arreglo


for($i = 0; $i < count($clientes); $i++) {
    echo $clientes[$i] . "<br>";
}

echo "<br>";

$clientes = [
    'nombre' => 'Juan',
    'saldo' => '200',
    'tipo' => 'Premium'
];

foreach($clientes as $key => $valor) {
    echo $key . " - " . $valor . "<br>";
}


include 'includes/footer.php';