/* Traccia 1:

Scrivi un programma che dato un array di 10 numeri interi ordinati in modo casuale li riordini in modo decrescente.

Esempio:
Input: array = [3, 7, -2, 5, 8, 1, 2, 5, 6, -4]
Output: [8, 7, 6, 5, 3, 2, 1, -2, -4]
Variante:
Prova ad ordinali in modo crescente */

/* let num =[ 3,7,-2,5,8,1,2,5,6,-4] 
num.sort((a,b) => b - a)

num.sort((a,b) => a - b)

num.splice(3,1)
console.log(num) */

/* Traccia 2:

Scrivi un programma che dato un array di numeri, calcoli la media dei valori e restituisca in output la media e tutti i valori minori della media:  

Esempio:

    Input: a = [3, 5, 10, 2, 8]
    Output: media = 5.6, valori minori = [3, 5, 2]
Variante:

  Stampa anche quanti sono i valori minori della media e quanti quelli maggiori. */ 

/* let num =[3,5,10,2,8]

let somma = num.reduce((acc, n)=> acc + n)
let media = somma / num.length;

let valMinori = num.filter((n) => n < media)
let valMaggiori = num.filter((n) => n > media)
console.log('media = ' + media + ', valori minori = ' + valMinori.length +', valori maggiori = ' + valMaggiori.length */)

/* Traccia 3:

Scrivi una funzione che prenda in input una stringa e restituisca TRUE se è palindroma, FALSE se non lo è.

Primo step: eliminare gli spazi e i segni di punteggiatura:
Suggerimento: Puoi eliminare spazi e segni di punteggiatura usando → str.replace(/\W/g, "")
Esempio:

Input: “i topi non avevano nipoti”
Output: true
 */

let strin = 'i topi non avevano nipoti'
let topi = strin.replace(/\W/g, "")
let nipoti = strin.split('').reverse().join().replace(/\W/g,"")

function palidroma( topi , nipoti) {
    if (topi == nipoti){
        return true
    }else {
        return false
    } 
}
console.log(palidroma(topi , nipoti));