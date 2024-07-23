<x-layout>
  <h1>I nostri servizi dentali</h1>
  <p>Benvenuti nel nostro studio dentistico, dove la salute del vostro sorriso è la nostra priorità assoluta. Offriamo una gamma completa di servizi dentali per soddisfare le esigenze di ogni paziente, utilizzando le tecnologie più avanzate e i migliori materiali disponibili. Il nostro team di esperti è dedicato a fornire cure personalizzate in un ambiente confortevole e accogliente.</p>
  <div class="container mt-5">
    <div class="row">

    

      @foreach ($servizi as $service)
      <div class="col-lg-4 col-md-12 col-sm-12 flex justify-content-center mb-3">
        <div class="card">
          <img src={{asset($service['img'])}} class="card-img-top img-fluid" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$service['servizio']}}</h5>
            <p class="card-text">{{$service['descrizione']}}</p>
          </div>
        </div>
      </div>
      @endforeach



    </div>
  </div>

</x-layout>