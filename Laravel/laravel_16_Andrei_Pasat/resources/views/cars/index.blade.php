<x-layout>

<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Model</th>
            <th>Brand</th>
            <th>Kw</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    
    <tbody>
        
        @foreach ($cars as $car)
        
        <tr>
            <td>{{ $car->name }}</td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->brand->name ?? 'Brand non presente' }}</td>
            <td>{{ $car->kw }}</td>
            <td>{{ $car->price }}</td>
            <td>
                <a href="{{route('cars.show',$car)}}" class="btn btn-outline-primary">Show</a>
                <a href="{{route('cars.edit',$car)}}" class="btn btn-outline-secondary">Edit</a>
                <form action="{{route('cars.destroy',$car)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    
    </tbody>
{{--     {{$cars->links()}} --}}
</table>
</x-layout>