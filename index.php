<?php
//% Variabili
/* $number = 10; // Definizione di una variabile
echo $number; // Mostrare la variabile */

//, Esempi di identificatori validi

/* $nome;
$_età;
$indirizzo_di_casa; //* lower_snake_case
$numeroCivico; //* camelCase
$numeroCivico; //* Case

$VARIABILE; */

//, Riassegnazione di una variabile
/* $var
echo $var;

$var = 'Ciao';
echo $var; // Ciao */


//, Assegnamento per valore o riferimento

//* Per valore

/* $name1 = 'Matteo'; // Matteo

$name2 = $name1; // Matteo
echo $name1 . '<br>' . $name2 . '<br>'; */

// Riassegnazione
/* $name1 = 'Paolo';
echo  $name1 . '<br>' . $name2 . '<br>'; //Matteo Paolo */


//* Per riferimento
/* $name1 = 'Matteo'; // Matteo
$name2 = &$name1; // Matteo
echo $name1 . '<br>' . $name2 . '<br>';

// Riassegnazione
$name1 = 'Paolo';
echo $name1 . '<br>' . $name2 . '<br>'; //Paolo Paolo */



//% Costanti
//* define

define("NOME_COSTANTE", "Hello");

const NOME_COSTANTE_2 = " World";

echo NOME_COSTANTE, NOME_COSTANTE_2;
// Hello World


//* const
/* const COSTANTE; // Errore
const CONSTANTE2 = 10; // OK */


//, Costanti PHP built-in
//echo PHP_VERSION; // 8.2.4
//echo PHP_INT_MAX;


//* Costanti magiche
/* echo __DIR__ ; //C:\User\...
echo "<br>";
echo __FILE__; */
//echo PHP_VERSION;


//, Controllare le costanti

/* define("COSTANTE", "Hello world.");
if (defined("COSTANTE")) {
    echo COSTANTE;  // Hello world.
} else {
    echo "COSTANTE non è stata definita.";
} */




//% Scope delle variabili

//, Globale
/* $x = 5; // Variabile globale
function test() {
    // $x = 'ciao';
    echo $x; // Errore
}
test();
echo $x; */


//* global
/* $x = 5; // Variabile globale
function test(){
    global $x;
    echo $x; // Stampa 5
}
test(); */



//, Locale
/* function test(){
    $x = 5; // Variabile locale
    echo $x; // 5
}
test(); // 5
echo $x; // Errore */


//, Static
/* function test(){
    static $x = 0;
    echo $x;
    $x = $x + 1 ;
}
test(); // 0
test(); // 1
test(); // 2 */