<!-- Pagina ADMIN per aggiungere nuovi prodotti -->

<x-layout>

    <x-navbar/>  
    @if(session('message'))
        <div class="alert alert-success text-center">
            {{  session('message') }}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form action="{{route('store')}}" method="POST" class="p-5 shadow" enctype="multipart/form-data">
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                
                    @csrf

                    <div class="mb-3">
                        <h2>Aggiungi un articolo</h2>
                    </div>
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{ old('title') }}">
                    </div>
                    <div class="mb-3">
                        <label for="brand" class="form-label">Brand</label>
                        <input type="text" name="brand" class="form-control" id="brand" value="{{ old('brand') }}">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control" >{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="style" class="form-label">Modello</label>
                        <input type="text" name="style" class="form-control" id="style" value="{{ old('style ') }}">
                    </div>
                    <div class="mb-3">
                        <label for="rating" class="form-label">Rating</label>
                        <input type="number" min="0" max="10" name="rating" class="form-control" id="rating" value="{{ old('rating') }}">
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <input type="text" name="category" class="form-control" id="category " value="{{ old('category') }}" >
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input type="file" name="image" class="form-control" id="image">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Inserisci l'articolo</button>
                </form>
            </div>
        </div>
    </div>

</x-layout>