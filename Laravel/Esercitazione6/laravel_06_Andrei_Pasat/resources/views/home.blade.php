<x-layout>
<header>
    <div class="row">
        <div class="col-12 mb-5 mt-5 d-flex justify-content-center">
            <h1> Benvenuti nel mio sito </h1>
        </div>
        <div class="col-6">
            <img src="{{ asset('images/1.png') }}" class="header-img img-fluid shadow">
        </div>
        <div class="col-6">
            <img src="{{ asset('images/2.png') }}" class="header-img img-fluid shadow">
        </div>
    </div>
</header>

<main>
    <div class="container">
        <div class="card shadow mt-5 mb-5" style="height: 230px">
            <div class="card-body">
                <h1 class="card-title">Benvenuti nello Studio Dentistico</h1>
                <p class="card-text">
                    Il nostro studio offre una vasta gamma di servizi dentali per mantenere la vostra salute orale al massimo. 
                    Dai controlli regolari alle procedure più complesse, il nostro team di esperti è qui per garantirvi un sorriso sano e luminoso.
                    Utilizziamo le più moderne tecnologie e tecniche per assicurarci che riceviate le migliori cure possibili. La vostra salute e soddisfazione sono la nostra priorità.
                </p>
                <a href="{{route('servizi')}}" class="btn btn-primary">Consulta i nostri servizi</a>
            </div>
        </div>
    </div>
</main>
</x-layout>