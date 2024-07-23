<x-layout>
 
    <div class="container">
        <h3>Contattaci</h3>
    
        <form method="POST" action="{{route('salvaContatto')}}">
            
            @csrf
        
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{old('email')}}">
          </div>
          <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" class="form-control" name="name" value="{{old('name')}}">
          </div>
          <div class="form-floating mb-3">
            <textarea class="form-control" style="height: 150px" name="message" {{old('message')}}></textarea>
            <label for="floatingTextarea2">Messaggio</label>
          </div>
         
          <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>
</x-layout>