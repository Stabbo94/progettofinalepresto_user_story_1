<div class="row justify-content-center">
    <div class="col-12 col-md-4">
        <form class="my-3 rounded mb-5" wire:submit="store">
            
            @if(session()->has('success'))
            <div class="alert alert-success text-center">
                {{session('success')}}
            </div>
            @endif
            
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" wire:model.blur="title">
                @error('title')
                <p class="fst-italic text-danger small">{{$message}}</p>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea id="description" cols="30" rows="10" class="form-control @error('description') is-invalid @enderror" wire:model.blur="description"></textarea>
                @error('description')
                <p class="fst-italic text-danger small">{{$message}}</p>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo in EUR</label>
                <input type="text" id="price" class="form-control @error('price') is-invalid @enderror" wire:model.blur="price">
                @error('price')
                <p class="fst-italic text-danger small">{{$message}}</p>
                @enderror
            </div>
            
            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <select id="category" wire:model.blur="category" class="form-control @error('category') is-invalid @enderror">
                    <option label disabled selected>Seleziona una categoria</option>
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>                
                    @endforeach
                </select>
                @error('category')
                <p class="fst-italic text-danger small">{{$message}}</p>
                @enderror
            </div>
            
            <div class="row mt-4">
                <div class="col-12 mb-5">
                    <button type="submit" class="btn btn-primary w-100 text-start fw-bolder">Crea il tuo articolo</button>
                </div>
            </div>
            
        </form>
    </div>
</div>