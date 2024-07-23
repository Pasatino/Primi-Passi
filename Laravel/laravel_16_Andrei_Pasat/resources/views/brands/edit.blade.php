<x-layout>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('brands.update',$brand) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name',$brand->name)}}" placeholder="Enter name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>       


                <button type="submit" class="btn btn-primary">Edit Brand</button>
            </form>
        </div>
    </div>

</x-layout>