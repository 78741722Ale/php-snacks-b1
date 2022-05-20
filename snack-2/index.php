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

/* Avvio i condizionali */
/* name sia più lungo di 3 caratteri */
/* mail contenga un punto e una chiocciola */
/* age sia un numero */

if(strlen($nome) > 3 && strpos($mail, '.') && strpos($mail, '@') && is_numeric($age)) {
    var_dump("Accesso Consentito");
} 
else{
    var_dump("Accesso Negato");
}; 




/* mail contenga un punto e una chiocciola */
/* if(strpos($mail, '.') || strpos($mail, '@')) {
    var_dump("Si, la mail contiene un punto e una chiocciola");
} else {
    var_dump("Accesso Negato");
} */



?>
