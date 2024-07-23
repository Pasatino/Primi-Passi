<?php

/* Traccia 1:
Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere */
/* $gender = readline("Inserisci il tuo genere");
$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => $gender],
]; */

/* foreach($users as $user){
    if ($user['gender'] == 'male'){
        echo "Buongiorno Sig." .  " " . $user['name'] . " " . $user['surname'];
    } else if ($user['gender'] == 'female'){
        echo "Buongiorno Sig.ra" .  " " . $user['name'] . " " . $user['surname'];
    } else {
        echo "Buongiorno" .  " " . $user['name'] . " " . $user['surname'];
    }
} */

/* Traccia 2:
Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array */
/* $somma = 0 ;
$media = 0 ;
$numbers = [11, 20, 4, 18, 192, 1];


foreach($numbers as $number){
    if ($number % 2 == 0){
     $somma = $somma + $number;

    }
};
$media = $somma / 4;

var_dump ($media); */

/* Traccia 3:
Scrivere un programma che stampi in console tutti i numeri da uno a cento.
Se il numero è multiplo di 3 stampare “PHP” al posto del numero;
se multiplo di 5 stampare “JAVASCRIPT”;
se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY". */

for ($i = 1; $i <= 100; $i++){
    if ($i % 3 == 0 && $i % 5 == 0){
        echo 'HACKADEMY' . " ";
    } else if ($i % 5 == 0){
        echo 'JAVASCRIPT' . " ";
    } else if ($i % 3 == 0){
        echo 'PHP' . " ";
    } else {
        echo $i . " ";
    }   
};