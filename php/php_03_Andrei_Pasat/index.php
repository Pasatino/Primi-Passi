<?php

do{
    $password = readline("Inserisci la password: ");
    $checkNumber = checkNumber($password);
    $checkChar = checkChar($password);
    $checkLenght = checkLenght($password);
    $checkUpperCase = checkUpperCase($password);
}
while ($checkLenght === false || $checkNumber === false || $checkChar === false || $checkUpperCase=== false);

echo "Password corretta";


function checkNumber($password){
    for ($i=0;$i<strlen($password);$i++){

        if(is_numeric($password[$i])){
            return true;
        }
    }
    echo "Inserisci almeno un numero \n";
    return false;
}

function checkChar($password){
    for ($i=0;$i<strlen($password);$i++){

        if(ctype_alpha($password[$i])){
            return true;
        }
    }
    echo "Inserisci almeno una lettera \n";
    return false;
}

function checkLenght($password){
    if(strlen($password)>=10){
        return true;
    }else{
        echo "Inserisci almeno 10 caratteri \n";
        return false;
    }
}

function checkUpperCase($password){
    for ($i=0;$i<strlen($password);$i++){
        if(ctype_upper($password[$i])){
            return true;
        }
    }
    echo "Inserisci almeno una lettera maiuscola \n";
    return false;
}