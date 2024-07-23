
let a = 1
let b = 2
let c = 3
let d = 4
let e = 5

console.log(a+b+c+d+e)
console.log((a+b+c+d+e)/5)


let annoNascita = prompt("Inserisci il tuo anno di nascità")
let annoCorrente = prompt("Inserisci anno corrente")
let età = annoCorrente - annoNascita
console.log(età)
let anniNecessari = 100 - età
console.log(`Ti mancano per arrivare a 100 anni ${anniNecessari}`)


let primoNumero = prompt("Inserisci il primo numero")
let secondoNumero = prompt("Inserisci il secondo numero")
let somma = primoNumero + secondoNumero
let sottrazione = primoNumero - secondoNumero
let moltiplicazione = primoNumero * secondoNumero
let divisione = primoNumero / secondoNumero
let potenza = primoNumero ** secondoNumero
console.log(`Con i numeri da te scelti, i risultati delle varie operazioni sono: somma ${somma}, sottrazione ${sottrazione}, moltiplicazione ${moltiplicazione}, divisione ${divisione},potenza ${potenza}`)

let array_1 = [

    ['un', 'per', 'incatenarli.'],
  
    ['Anello', 'trovarli,'],
  
    ['ghermirli', 'e'],
  
    ['gondor', 'mark'],
  
  ];
  
  
  
  let array_2 = [
  
    [['trovarli,']],
  
    ['tu,', 'sciocchi'],
  
    ['tu,', 'sciocchi', ['padron', 'Sauron']],
  
    ['nel', ['fuggite', 'gandalf']],
  
    [['domarli,', 'passare'], 'buio']
  
  ];

  console.log(array_1[0][0],array_1[1][0],array_1[0][1],array_2[4][0][0],array_1[0][0],array_1[1][0],array_1[0][1],array_2[0][0],array_1[0][0],array_1[1][0],array_1[0][1],array_1[2][0],array_1[2][1],array_2[3][0],array_2[4][1],array_1[0][2])