<!-- Pagina ADMIN per aggiungere nuovi prodotti -->

<x-layout>

    <x-navbar/>  
    @if(session('message'))
        <div class="alert alert-success text-center">
            {{  session('message') }}
        </div>
    @endif
    <div class="container my-5 w-50">
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

                    <div class="mb-3 text-center">
                        <h2>Aggiungi un articolo</h2>
                    </div>
                    <div class="mb-3 text-center">
                        <label for="title" class="form-label fw-bold">Titolo:</label>
                        <input type="text" name="title" class="form-control custom-width mx-auto text-center rounded-5 custom-gray border-0" id="title" value="{{ old('title') }}">
                    </div>
                    <div class="mb-3 text-center">
                        <label for="brand" class="form-label fw-bold">Brand:</label>
                        <input type="text" name="brand" class="form-control custom-width mx-auto text-center rounded-5 custom-gray border-0" id="brand" value="{{ old('brand') }}">
                    </div>
                    <div class="mb-3 text-center fw-bold">
                        <label for="style" class="form-label">Modello:</label>
                        <input type="text" name="style" class="form-control custom-width mx-auto text-center rounded-5 custom-gray border-0" id="style" value="{{ old('style ') }}">
                    </div>
                    <div class="mb-3 text-center fw-bold">
                        <label for="rating" class="form-label">Rating:</label>
                        <input type="number" min="0" max="10" name="rating" class="form-control custom-width mx-auto text-center rounded-5 custom-gray border-0" id="rating" value="{{ old('rating') }}">
                    </div>
                    <div class="mb-3 text-center fw-bold">
                        <label for="category" class="form-label">Categoria:</label>
                        <input type="text" name="category" class="form-control custom-width mx-auto text-center rounded-5 custom-gray border-0" id="category " value="{{ old('category') }}" >
                    </div>
                    <div class="mb-3 text-center fw-bold">
                        <label for="tags" class="form-label">Tags:</label>
                        <input type="text" name="tags" class="form-control custom-width mx-auto text-center rounded-5 custom-gray border-0 custom-placeholder" id="tags " value="{{ old('tags') }}" placeholder="Dividi ogni tag con una virgola">
                    </div>
                    <div class="mb-3 text-center fw-bold">
                        <label for="image" class="form-label">Immagine:</label>
                        <input type="file" name="image" class="form-control custom-width mx-auto text-center rounded-5 custom-gray border-0" id="image">
                    </div>
                    <div class="mb-3 text-center fw-bold">
                        <label for="description" class="form-label">Descrizione:</label>
                        <textarea name="description" id="description" cols="30" rows="10" class="form-control mx-auto text-center rounded-5 custom-gray border-0" >{{ old('description') }}</textarea>
                    </div>
                    <div class="container text-center my-5">
                        <button type="submit" class="btn btn-primary width-button button-special">Inserisci l'articolo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>