<x-layout>

    <div class="row">
        <div class="col-12 mt-5">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">{{$author->name}} {{$author->surname}}</h5>
                  <p class="card-text">{{$author->dateN}}</p>
                  @if ($author->link)
                    <a href="{{$author->link}}" class="btn btn-primary" target="_blank">Link Wikipedia</a>
                  @endif
                </div>
              </div>
        </div>
    </div>

</x-layout>