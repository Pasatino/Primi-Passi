/* Traccia 1:

Crea un oggetto persona con le seguenti caratteristiche:

nome
cognome
eta'
un metodo che permetta di salutare */



/* let persona = {
    nome: "Andrei",
    cognome: "Pasat",
    età: 22,
    saluta: function (){
        console.log("Ciao");
    }
}

persona.saluta(); */

/* Traccia 2:
Crea un oggetto agenda con una proprietà che comprenda una lista di contatti con un nome e un numero di telefono, ed abbia diverse funzionalità tra cui:

mostrare tutti i contatti dell’agenda
mostrare un singolo contatto
eliminare un contatto dall’agenda
aggiungere un nuovo contatto
modificare un contatto esistente  
Suggerimento: */




/* let rubrica = {

  'contacts': [

      {'nome': 'Nicola', 'telefono': '3331111111'},

      {'nome': 'Lorenzo', 'telefono': '3332222222'},

      {'nome': 'Paola', 'telefono': '3333333333'},

      {'nome': 'Jenny', 'telefono': '3334444444'}

  ],

  ...

} */



let rubrica = {
    contatti: [
        {'nome': 'Nicola', 'telefono': '3331111111'},

        {'nome': 'Lorenzo', 'telefono': '3332222222'},

        {'nome': 'Paola', 'telefono': '3333333333'},

        {'nome': 'Jenny', 'telefono': '3334444444'}
    ],
    mostraContatti: function(){
        console.log(this.contatti)
    },
    mostraContatto: function (Index) {
        console.log(this.contatti[Index])
    },
    eliminaContatto: function(x) {
        this.contatti.splice(x, 1)
    },
    aggiungiContatto: function(name, numero){
        this.contatti.push({'nome': name, 'telefono': numero})
    }
}
rubrica.mostraContatti()
/* rubrica.mostraContatto(1) */
rubrica.aggiungiContatto('Gianluca', '333555555')

