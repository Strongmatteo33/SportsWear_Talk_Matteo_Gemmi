<x-layout>

    <x-navbar/>

    <div class="container-fluid p-4 bg-info text-center text-white">
        <div class="row justify-content-center">
            <div class="display-1">
                <h1>Lavora con noi</h1>
            </div>
        </div>

    </div>
    
        <div class="container my-5">
            <div class="row justify-content-center align-items-center border rounded p-2 shadow mx-auto rounded-5 p-5">
                <div class="text-center">
                    <h2 class="my-3">Lavora come amministratore</h2>
                    <p>Cosa farai: Gestirai la funzione operativo nel nostro sito.</p>
                    <h2>Lavora come revisore</h2>
                    <p>Cosa farai: Gestirai i nuovi articoli da pubblicare.</p>
                    <h2>Lavora come redattore</h2>
                    <p>Cosa farai: Scriverai nuovi articoli che verrano poi esaminati da un revisore.</p>
                </div>
                <div class="col-12 col-md-8">
                @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                
                <form action="{{route('careers.submit')}}" method="POST" class="p-5">
                @csrf
                    <div class="mb-3 text-center">
                        <label for="role" class="form-label fw-bold">Per quale ruolo vuoi candidarti?</label>
                        <select name="role" id="role" class="form-control custom-width mx-auto text-center rounded-5 custom-gray border-0">
                            <option value="" hidden>Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Scrittore</option>
                        </select>
                    </div>
                    <div class="mb-3 text-center">
                        <label for="email" class="form-label fw-bold">Email:</label>
                        <input type="email" name="email" id="email" class="form-control custom-width mx-auto text-center rounded-5 custom-gray border-0" value="{{ old('email') ?? Auth::user()->email }}">
                    </div>
                    <div class="mb-3 text-center">
                         <label for="message" class="form-label fw-bold">Parlaci di te</label>
                         <textarea name="message" id="message" cols="30" rows="7" class="form-control mx-auto text-center rounded-5 custom-gray border-0">{{ old('message') }}</textarea>
                    </div>
                    <div class="container text-center mt-2">
                        <button type="submit" class="btn btn-primary width-button button-special">Invia la candidatura</button>
                    </div>
                </form>
                </div>
            </div>
        </div>



</x-layout>