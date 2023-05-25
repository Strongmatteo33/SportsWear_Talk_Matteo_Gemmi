<x-layout>
    
    <x-navbar/>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

            <form class="p-5 shadow" method="POST" action="{{ route('register') }}">
                @csrf

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="email" class="form-label">Indirizzo Email</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="Inserisci Email">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">Nome e Cognome</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Inserisci il tuo nome">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Inserisci password">
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Conferma Password</label>
                    <input type="password_confirmation" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Reinserisci password">
                </div>
                
                <button type="submit" class="btn btn-primary">Registrati</button>
                
                <div class="text-center">
                    <div class="text-center text-secondary fst-italic d-inline">
                        Già Utente?        
                    </div>
                    <div class="text-center text-secondary fst-italic d-inline">
                        <a href="{{ route('login') }}" class="text-secondary text-decoration-underline">Accedi</a>
                     </div>
                </div>

            </form>


            </div>
        </div>
    </div>


</x-layout>