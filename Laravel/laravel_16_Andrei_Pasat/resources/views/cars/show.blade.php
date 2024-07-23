<x-layout>
    <div class="row my-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $car->name }}</h5>
                    <p class="card-text">Model: {{ $car->model }}</p>
                    <p class="card-text">Kw: {{ $car->kw }}</p>
                    <p class="card-text">Price: {{ $car->price }}</p>
                    <p class="card-text">Description: {{ $car->description }}</p>

                    <ul>
                        @foreach($car->extras as $extra)
                            <li>{{$extra->title}} - {{$extra->price}} euro</li>
                        @endforeach
                    </ul>
                    <p>Costo totale extra: {{$car->totalExtraCost()}} euro</p>
                </div>
            </div>
        </div>
    </div>


</x-layout>