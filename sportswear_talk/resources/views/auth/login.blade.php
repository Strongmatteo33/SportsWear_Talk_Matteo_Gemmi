<x-layout>

    <x-navbar/>



    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

            <form class="p-5 shadow" method="POST" action="{{ route('login') }}">
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
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Inserisci password">
                </div>

                <div class="mb-3 form-check">
                    <input type="checkbox" name="remember" class="form-check-input" id="remember">
                    <label class="form-check-label" for="remember">Ricordami</label>
                </div>
                <button type="submit" class="btn btn-primary">Accedi</button>
                <hr>
                <div class="text-center">
                    <div class="text-center text-secondary fst-italic d-inline">
                        Nuovo utente?        
                    </div>
                    <div class="text-center text-secondary fst-italic d-inline">
                        <a href="{{ route('register') }}" class="text-secondary text-decoration-underline">Registrati</a>
                     </div>
                </div>

            </form>
            
            
            
        </div>
    </div>


</x-layout>