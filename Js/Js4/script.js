/*
Traccia 1:

Scrivi un programma che dato un numero, let num = 2, stampi la rispettiva tabellina corrispondente. 
*/
/*
let num = 2;
for ( let i = 0 ; i <= 10 ; i++){
    console.log(num * i);
}
*/


/*
Traccia 2:

Scrivi un programma che stampi dei numeri da 1 a 20 ma solo quelli pari. Di tutti i numeri dispari, invece, calcola anche la media e stampala a schermo.
*/





/* 
let numeriDispari = 0
for ( let i=1 ; i <= 20; i++) {
    if (i % 2 == 0) {
        console.log(i)
    }
    if (i % 2 != 0) {
        numeriDispari= numeriDispari + i  
    }
}
console.log(numeriDispari/10)
*/

/*
Traccia 3:

Scrivi un programma che simuli un distributore di bevande e che rispetti i seguenti passaggi:

l’utente deve poter inserire un numero
in console dev’essere stampato il messaggio del distributore
se inserisce 1, seleziona acqua e quindi stampare in console: “E’ stata selezionata l’acqua”
se inserisce 2, seleziona coca cola e quindi stampare in console: “E’ stata selezionata coca cola”
se inserisce 3, seleziona birra e quindi stampare in console: “E’ stata selezionata birra”
se inserisce qualcosa di diverso, il programma dovra’ riproporre automaticamente la domanda di partenza
*/

let numero = prompt('inserisci il numero')

while (numero != 1 && numero != 2 && numero != 3 ){
    numero = prompt('inserisci il numero')
    console.log("seleziona un altro prodotto")
}

switch (true) {
    case numero == 1: console.log("E' stata selezionata l'acqua"); break;
    case numero == 2: console.log("E' stata selezionata coca cola"); break;
    case numero == 3: console.log("E' stata selezionata birra"); break;
    default: console.log("seleziona un altro prodotto");  break;
    }

  /* else {
    numero = prompt('inserisci il numero'); 
} */
/*
if (numero != 1, 2, 3){
    numero = prompt('inserisci il numero')
} */

/*while (numero == 1, 2, 3) {
    switch (true) {
        case numero == 1: console.log('E’ stata selezionata l’acqua'); break;
        case numero == 2: console.log('E’ stata selezionata coca cola'); break;
        case numero == 3: console.log('E’ stata selezionata birra'); break;
        default: break;
       }
    
}
*/
