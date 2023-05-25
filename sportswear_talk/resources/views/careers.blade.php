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
            <div class="row justify-content-center align-items-center border rounded p-2 shadow">
                <div class="col-12 col-md-8">
                    <h2>Lavora come amministratore</h2>
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
                    <div class="mb-3">
                        <label for="role" class="form-label">Per quale ruolo vuoi candidarti?</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Scegli qui</option>
                            <option value="admin">Amministratore</option>
                            <option value="revisor">Revisore</option>
                            <option value="writer">Scrittore</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') ?? Auth::user()->email }}">
                    </div>
                    <div class="mb-3">
                         <label for="message" class="form-label">Parlaci di te</label>
                         <textarea name="message" id="message" cols="30" rows="7" class="form-control">{{ old('message') }}</textarea>
                    </div>
                    <div class="mt-2">
                        <button class="btn btn-info text-white">Invia la candidatura</button>
                    </div>
                </form>
                </div>
            </div>
        </div>



</x-layout>