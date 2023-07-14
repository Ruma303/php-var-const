<?php
//% Variabili
/* $number = 10; // Definizione di una variabile
echo $number; // Mostrare la variabile */

//$ Esempi di identificatori validi
/*
$nome;
$_età;
$indirizzo_1;
$NumeroCivico;
*/


//$ Riassegnazione di una variabile
/* $var = -3.4;
echo $var; // -3.4
$var = 'Ciao';
echo $var; // Ciao
 */

//$ Assegnamento per valore o riferimento

//* Per valore
/* $name1 = 'Matteo'; // Matteo
$name2 = $name1; // Matteo
// echo $name1 . '<br>' . $name2 . '<br>';
// Riassegnazione
$name1 = 'Paolo';
echo $name1, $name2; //Matteo Paolo */


//* Per riferimento
/* $name1 = 'Matteo'; // Matteo
$name2 = &$name1; // Matteo
// echo $name1 . '<br>' . $name2 . '<br>';
// Riassegnazione
$name1 = 'Paolo';
echo $name1, $name2; //Paolo Paolo
 */


//% Costanti
/* define("NOME_COSTANTE", "Hello");
const NOME_COSTANTE_2 = " World";

echo NOME_COSTANTE, NOME_COSTANTE_2; */
// Hello World

//NOME_COSTANTE_2 = " Ciao";

/* const COSTANTE; // Errore
const CONSTANTE2 = 10; // OK */


//$ Costanti PHP built-in
//echo PHP_VERSION; // 8.2.4

//* Costanti magiche
//echo __DIR__ ; //C:\User\...


//% Scope delle variabili

//$ Globale
/* $x = 5; // Variabile globale
function test()
{
    echo $x; // Errore
}
test(); */

//* global
/* $x = 5; // Variabile globale
function test(){
    global $x;
    echo $x; // Stampa 5
}
test();
 */


//$ Locale
/* function test(){
    $x = 5; // Variabile locale
    echo $x; // Stampa 5
}
test(); // 5
echo $x; // Errore */


//$ Statico
/* function test(){
    static $x = 0;
    echo $x;
    $x++;
}
test(); // 0
test(); // 1
test(); // 2 */