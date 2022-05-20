<?php 
/* Traccia */

/* 
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, 
Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei 
voti di ogni alunno.
*/

// creare un array contenente qualche alunno di un’ipotetica classe

$alunni = 
[
    //Ogni alunno avrà Nome Cognome e un array contenente i suoi voti scolastici
    [
        "Nome" => "Mario",
        "Cognome" => "Rossi",
        "voti scolastici" => [7,4,5,6,3,4,8,9,6],
    ],
    [
        "Nome" => "Matteo",
        "Cognome" => "Pietrovilli",
        "voti scolastici" => [5,6,7,7,8,8,9,0,1],
    ],
    [
        "Nome" => "Arianna",
        "Cognome" => "Cortesi",
        "voti scolastici" => [8,9,2,3,4,10,2,3,2],
    ],
    [
        "Nome" => "Martina",
        "Cognome" => "Giapponesi",
        "voti scolastici" => [3,3,4,6,7,9,2,3,3],
    ],
];
/* Verifico in console */
var_dump($alunni);

/* Verifico e guardo la somma di tutti i voti del primo alunno 

-// Questo è al di fuori del Ciclo for, per visualizzare a schermo parametri corretti del solo primo alunno

var_dump("Questa è la somma di tutti i numeri del primo alunno : " . array_sum($alunni[0]['voti scolastici']));
salvo la somma in una nuova variabile 
$sum_voti = array_sum($alunni[0]['voti scolastici']);
var_dump("La somma è : " . $sum_voti);
Media dei voti 
$media = $sum_voti / 2;
var_dump("La media è : " . $media);
*/

/**
 * mediaVoti => Funzione per trovare la media
 * $first => Primo numero, in questo caso è $sum_voti
 * $second => il divisore, in questo caso 2
 */
function mediaVoti($first, $second) {
    return $first / $second;
}

/* Ora metto tutto in un ciclo for */
for($i = 0 ; $i < count($alunni); $i++) {
    /* salvo la somma in una nuova variabile del ciclo for  */
    $sum_voti = array_sum($alunni[$i]['voti scolastici']);
    // grazie al ciclo vedo i voti di tutti i ragazzi
    var_dump("Questa è la somma dei voti dell'alunno ". $alunni[$i]['Nome'] . ":" . ' ' . $sum_voti);
    // Questa è la somma della quantità di valori racchiusi voti scolastici
    $alunni_length = count($alunni[$i]['voti scolastici']);
    var_dump("La lunghezza totale degli array è : " . $alunni_length); // la verifico in console
    // ora faccio la media dei voti dei ragazzi 
    $media = mediaVoti($sum_voti, $alunni_length); // invoco la funzione
    var_dump("Questa è la media dei voti dell'alunno ". $alunni[$i]['Nome'] . ":" . ' ' . $media);
    /* Ora provo ad arrotondare */
    $rounded_media = round($media, 0);
    var_dump("il numero arrotondato della media è :" . ' '. $rounded_media);

    // ora li dichiaro con echo
    echo "Lo studente" . ' ' . $alunni[$i]['Nome'] . ' ' . $alunni[$i]['Cognome'] . ' ' . "ha una media voti di :" . ' ' . $rounded_media;
}

?>