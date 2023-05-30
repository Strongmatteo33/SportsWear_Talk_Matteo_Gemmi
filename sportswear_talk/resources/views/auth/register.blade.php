<x-layout>
    
    <x-navbar/>
    
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8 mx-auto">

            <form class="p-5 w-50 shadow mx-auto rounded-5" method="POST" action="{{ route('register') }}">
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

                <div class="mb-2 text-center">
                    <label for="email" class="form-label fw-bold">Indirizzo Email:</label>
                    <input type="email" name="email" class="form-control custom-width mx-auto text-center rounded-5 custom-gray border-0 custom-placeholder-color" id="email" placeholder="Inserisci Email">
                </div>

                <div class="mb-3 text-center">
                    <label for="name" class="form-label fw-bold">Nome e Cognome</label>
                    <input type="text" name="name" class="form-control custom-width mx-auto text-center rounded-5 custom-gray border-0 custom-placeholder-color" id="name" placeholder="Inserisci il tuo nome">
                </div>

                <div class="mb-3 text-center">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" name="password" class="form-control custom-width mx-auto text-center rounded-5 custom-gray border-0 custom-placeholder-color" id="password" placeholder="Inserisci password">
                </div>

                <div class="mb-3  text-center">
                    <label for="password_confirmation" class="form-label fw-bold">Conferma Password</label>
                    <input type="password_confirmation" name="password_confirmation" class="form-control custom-width mx-auto text-center rounded-5 custom-gray border-0 custom-placeholder-color" id="password_confirmation" placeholder="Reinserisci password">
                </div>
                <div class="container text-center my-5">
                    <button type="submit" class="btn btn-primary width-button button-special">Registrati</button>
                </div>
                <hr>
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