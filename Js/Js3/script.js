/* Traccia 1:
Crea due variabili, una che contiene il numero totale dei gatti e una che contiene il numero dei gatti in fila. Scrivi quindi un programma che calcoli: 

Il numero di file risultanti 
il numero di gatti mancanti per completare una nuova fila
quanti gatti rimangono fuori
In seguito, stampa in console la frase “Ci sono X file di gatti e ne mancano Y per una nuova fila, con un avanzo di Z”
*/
/*
let gatti = parseInt(prompt('Inserisci il numero di gatti'));

let fileGatti = parseInt(prompt('Inserisci il numero di file di gatti'));

let numeroFile = Math.ceil(fileGatti)

let gattiResto = gatti % numeroFile;

let gattiNecessari = fileGatti - gattiResto;

let gattiInFila = gatti - gattiResto

console.log(`Ci sono ${fileGatti} file di gatti e ne mancano ${gattiResto} per una nuova fila, con un avanzo di ${gattiNecessari}`)
*/

/*Scrivi un programma che converta un voto numerico (v) in un giudizio seguendo questi parametri:

se v e’ minore di 18,  stampare in console  “insufficiente”
se v e’ maggiore uguale a 18 e minore di 21,  stampare in console “sufficiente”
se v e’ maggiore uguale a 21 e minore di 24,  stampare in console: “buono”
se v e’ maggiore uguale a 24 e minore di 27, stampare in console: “distinto”
se v e’ maggiore uguale a 27 e minore uguale 29, stampare in console: “ottimo”
se v e’ uguale a 30, stampare in console:  “eccellente”
Esempio:
let v = 29;
Output: Ottimo
Cercate di risolvere questo esercizio utilizzando prima if, else e poi con switch. */

// fatto con if

/* let voto = parseInt(prompt('Inserisci il voto'))

if (voto < 18) {
    console.log('insufficiente')
} else if (voto >= 18 && voto < 21) {
    console.log('sufficiente')
} else if (voto >= 21 && voto < 24 ) {
    console.log('buono')
} else if (voto >= 24 && voto < 27) {
    console.log('distinto')
} else if (voto >= 27 && voto <= 29) {
    console.log('ottimo')
} else if (voto == 30) {
    console.log('eccellente')
} */

// fatto con switch

let voto = parseInt(prompt('Inserisci il voto'))

switch (true) {
    case (voto < 18):
        console.log('insufficiente');
        break;
    case (voto >= 18 && voto < 21):
        console.log('sufficiente');
        break;
    case (voto >= 21 && voto < 24):
        console.log('buono');
        break;
    case (voto >= 24 && voto < 27):
        console.log('distinto');
        break;
    case (voto >= 27 && voto <= 29):
        console.log('ottimo');
        break;
    case (voto == 30):
        console.log('eccellente');
        break;             
}

/* Traccia 3
Scrivi un programma che converta una temperatura inserita dall’utente con una delle seguenti descrizioni, stampate in console:

se temperatura e’ minore di 20, stampare “non ci sono piu’ le mezze stagioni”
se temperatura e’ maggiore uguale a 30, stampare “lu mare, lu sole, lu ientu”
se temperatura e’ minore di 30, stampare “mi dia una peroni sudata”
se temperatura e’ minore di 0, stampare “non e’ tanto il freddo quanto l’umidità’”
se temperatura e’ minore di -10, stampare “copriti…ancora ti raffreddi”
Cerca di risolvere questo esercizio utilizzando prima if else e poi con switch case. 

let temperatura = parseInt(prompt('Inserisci temperatura'))

switch(temperatura){
    case 'temperatura < 20':
        console.log('non ci sono piu’ le mezze stagioni') */
