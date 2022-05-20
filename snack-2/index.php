<?php 
/* Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo 
nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una 
chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”,
altrimenti “Accesso negato” */

// Passare come parametri GET name, mail e age
/* Nome */
var_dump($_GET['name']); // nome
$nome = ($_GET['name']); // Lo salvo in variabile
/* Email */
var_dump($_GET['email']); // Mail
$mail = ($_GET['email']); // la salvo in variabile
/* Età */
var_dump($_GET['anni']); // Anni
$age = ($_GET['anni']); // la salvo in variabile

/* In effetti a schermo esce tutto */
var_dump("Io mi chiamo $nome". ' ' . "questa è la mia mail $mail" . ' ' . "e ho $age anni");

/* 
Avvio i condizionali (la condizione finale è in fondo, 
per esercitarmi coi condizionali provo a scrivere un po :) 
*/

/* name sia più lungo di 3 caratteri */
if(strlen($nome) > 3) {
    var_dump("$nome è composto da più di 3 caratteri");
} else {
    var_dump("$nome è composto da meno di 3 caratteri");
};

/* mail contenga un punto e una chiocciola */
if(strpos($mail, '.') && strpos($mail, '@')) {
    var_dump("$mail è corretta è ha i caratteri necessari");
} else {
    var_dump("$mail non è corretta, mancano caratteri fondamentali");
};

/* age sia un numero */
if(is_numeric($age)) {
    var_dump("Si, il numero è valido");
} else {
    var_dump("Non va bene, l'età dev'essere un numero! ");
};

/* Condizione finale, correzione esercizio */
if(strlen($nome) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($age)) {
    var_dump("Accesso Consentito"); // tutte e 3 le condizioni devono essere vere
    echo("Accesso Consentito");
} 
else{
    var_dump("Accesso Negato"); // altrimenti accesso negato
    echo("Accesso Negato");
}; 

?>
