<x-layout>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('cars.store') }}" method="POST">
                
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{old('name')}}" placeholder="Enter name">
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="model">Model</label>
                    <input type="text" class="form-control" name="model"  value="{{old('model')}}" placeholder="Enter model">
                    @error('model')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kw">Kw</label>
                    <input type="number" class="form-control" name="kw"  value="{{old('kw')}}" placeholder="Enter kw">
                    @error('kw')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" class="form-control" name="price" value="{{old('price')}}" placeholder="Enter price">
                    @error('price')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group mb-2">
                    <label for="price">Description</label>
                    <div class="form-floating">
                        <textarea class="form-control" name="description" style="height: 100px">{{old('description')}}</textarea>
                        <label for="floatingTextarea2">Description</label>
                      </div>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text">Brand</label>
                    <select class="form-select" name="brand_id">
                      <option selected>Scegli il Brand</option>
                      
                      @foreach ($brands as $brand)
                        <option value="{{$brand->id}}"
                            @selected(old('brand_id')==$brand->id)
                            >{{$brand->name}}</option>
                      @endforeach                     
                    </select>

                 </div>
                @error('brand_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror


                <div class="input-group mb-3">
                    <label class="input-group-text">Extras</label>
                    <select class="form-select" name="extras[]" multiple>
                      @foreach ($extras as $extra)
                        <option value="{{$extra->id}}"                           
                            >{{$extra->title}}</option>
                      @endforeach                     
                    </select>

                 </div>
                @error('extras')
                    <span class="text-danger">{{ $message }}</span>
                @enderror

                @error('extras.*')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                <br>

                <button type="submit" class="btn btn-primary">Create Car</button>
            </form>
        </div>
    </div>

</x-layout>