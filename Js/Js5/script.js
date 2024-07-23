/* Traccia 1:

Scrivi una funzione che simuli un gioco di dadi tra due utenti, partendo da un prompt che richieda quanti tiri sono da effettuarsi.  

Stampare il giocatore che ha totalizzato più punti, tenendo conto che:
ogni dado ha 6 facce
ogni giocatore tirerà il dado n volte
Per ogni giocatore:
generare un numero casuale per ogni tiro che effettuera’,
ed ogni tiro sarà sommato ai precedenti per calcolare il punteggio finale del giocatore rispettivo.
TIPS:

Usiamo questa formula per generare un numero random → Math.floor(Math.random() * (6 - 1) + 1); */

/* let lanci = 0
    function gioca(){
        do {
            lanci = parseInt(prompt(`Con quanti tiri vuoi giocare?`))
        } while (lanci <= 0 || lanci > 10)

let risultato1= 0
let risultato2= 0

for (let i = 1; i <= lanci; i++){
    let player1 = Math.floor(Math.random() * (6 - 1 + 1) + 1);
let player2 = Math.floor(Math.random() * (6 - 1 + 1) + 1);
risultato1 += player1
risultato2 += player2
}
if (risultato1 > risultato2) {
console.log(
              `Vince il giocatore 1 con un punteggio di ${risultato1}`)
    } else if (risultato1 < risultato2) {
        console.log(
                   `Vince il giocatore 2 con un punteggio di ${risultato2}`)
    } else {
       console.log(`I giocatori pareggiano con il punteggio di ${risultato1}.`)
         gioca(lanci)
    }
}
gioca(); */

/* Traccia 2:

Scrivi una funzione che permetta di stampare in console tutti i numeri da 1 a N:

N dovra’ rappresentare il parametro formale della funzione
tutti i numeri multipli di 3 siano sostituiti dalla stringa 'Fizz',
tutti i numeri multipli di 5 siano sostituiti dalla stringa 'Buzz'
e tutti i numeri multipli di 15 siano sostituiti dalla stringa 'fizzBuzz' */

/* function bro(n){
    for(let i = 1; i <= n; i++) {
        if (i % 15 == 0) {
            console.log("BUZZFIZZ")
        } else if (i % 5 == 0) {
            console.log("BUZZ")
        } else if (i % 3 == 0) {
            console.log("FIZZ")
         } else {
            console.log(i)
        }
    }
}
bro(100); */

/* Traccia 3:

Scrivi una funzione che dato un numero intero (massimo 9999) conti da quante cifre è formato.

Esempio:

Input : 9 → output: 1 cifra
Input : 99 → output: 2 cifre
Input: 12000 → output: Numero troppo grande */

