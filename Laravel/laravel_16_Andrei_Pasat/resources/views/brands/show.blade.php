<x-layout>
    
    
    <div class="row my-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $brand->name }}</h5>

                    <ul>
                        @foreach($brand->cars as $car)
                        <li>{{$car->name}}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>


</x-layout>