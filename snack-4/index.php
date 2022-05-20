<?php 

/* Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà 
contenere lo stesso numero più di una volta */

/* Creo un array di numeri vuoto */
$numbers = [];
var_dump("La lunghezza dell'array vuoto è : " . count($numbers)); // verifico in console log
/* Genero un numero randomico */
/* $rand_int = rand(1,150); => si genera ma rimane sempre costante */
var_dump("Questo è il numero random : " . $rand_int);

/* Avvio una funzione per un random integer */
/** 
 * getRandomInteger => numero randomico da 1 a x numeri
 * $min => numero minimo
 * $max => numero massimo
 * 
 * return => ritorna un numero randomico
 */
function getRandomInteger($min, $max) {
    return rand($min,$max);
}

/* Avvio il ciclo for */
for($i = 0 ; $i <= 15 ; $i++) {
    $rand_int = getRandomInteger(1, 200); // Con una funzione
    /* $rand_int = rand(1, 200) => senza funzione */
    if(in_array($rand_int, $numbers)) {
        var_dump("Il numero" . ' ' . $rand_int . ' ' . "è già presente e non può essere pushato");
    } else {
        array_push($numbers, $rand_int); // altrimento pusho il numero !
    }
}

/* Verifico nuovamente in console il mio array inizialmente vuoto */
var_dump($numbers)
?>