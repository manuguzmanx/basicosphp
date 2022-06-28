<?php 
declare(strict_types = 1); //Vuelve tipado PHP
include 'includes/header.php';


function sumar(int $numero1 = 0, int $numero2 = 0) { //Se les da un valor y un tipo 
    echo $numero1;
    echo $numero1 + $numero2;
}

sumar(numero2: 10, numero1: 20);



include 'includes/footer.php';