<x-layout>

    <div class="row">
        @foreach ($articles as $article)
                
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$article['title']}}</h5>
                  <p class="card-text">{{$article['body']}}</p>
                  <a href="{{route('articolo',['id'=>$article['id']])}}" class="btn btn-primary">Seleziona Articolo</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    

</x-layout>