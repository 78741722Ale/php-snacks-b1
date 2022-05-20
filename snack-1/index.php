<?php 

/*  
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa 
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario */
$partite = 
[
    [
        /* Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla 
        squadra di casa e punti fatti dalla squadra ospite */
        "Casa" => "Milano",
        "Punteggio-casa" => 30,
        "Ospiti" => "Cantu",
        "Punteggio-Ospiti" => 35,
    ],
    [
        "Casa" => "Bergamo",
        "Punteggio-casa" => 33,
        "Ospiti" => "Brescia",
        "Punteggio-Ospiti" => 39,
    ],
    [
        "Casa" => "Cosenza",
        "Punteggio-casa" => 47,
        "Ospiti" => "Palermo",
        "Punteggio-Ospiti" => 55,
    ],    
];

/* Verifico in dump */
var_dump($partite);
/* Prima partita (per verifica) */
var_dump($partite[0]['Casa']. ' '. $partite[0]['Punteggio-casa']. '|' .$partite[0]['Ospiti']. ' ' .$partite[0]['Punteggio-Ospiti'] );

/* Avvio il ciclo for e funziona */
for($i = 0 ; $i < count($partite); $i++){
    var_dump($partite[$i]['Casa']. ' '. $partite[$i]['Punteggio-casa']. '|' .$partite[$i]['Ospiti']. ' ' .$partite[$i]['Punteggio-Ospiti'] );
}

?>