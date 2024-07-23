<x-layout>



  <div class="container">
    <div class="row">

        @foreach ($genres as $genre)
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{$genre['name']}}</h5>
                    <h6 class="card-title">Numero Anime {{$genre['count']}}</h6>
                    <a href="{{route('genre.anime',['id'=>$genre['mal_id']])}}" class="btn btn-primary">More</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
  </div>


</x-layout>