<x-layout>

    <x-navbar/>
    
    <div class="container-fluid p-5 bg-info text-center text-white">
        <div class="row justify-content-center">
            <div class="display-1">
                Bentornato, Amministratore
            </div>
        </div>
    </div>

    @if(session('message'))
          <div class="alert alert-success text-center">
            {{  session('message') }}
          </div>
    @endif
    
    <div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richieste per ruolo amministratore</h2>
            <x-requests-table :roleRequests="$adminRequests" role="amministratore"/>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richieste per ruolo revisore</h2>
            <x-requests-table :roleRequests="$revisorRequests" role="revisore"/>
        </div>
    </div>
</div>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Richieste per ruolo redattore</h2>
            <x-requests-table :roleRequests="$writerRequests" role="redattore"/>
        </div>
    </div>
</div>

<hr>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>I tags dalla piattaforma</h2>
            <x-metainfo-table :metaInfos="$tags" metaType="tags" />
        </div>
    </div>
</div>

<hr>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2>Le categorie della piattaforma</h2>
            <x-metainfo-table :metaInfos="$categories" metaType="categories"/>
            <form action="{{ route('admin.storeCategory')}}" method="POST" class="d-flex">
                @csrf
                <input type="text" name="name" class="form-control me-2" placeholder="Inserisci una nuova categoria">
                <button class="btn btn-success text-white">Aggiungi</button>
            </form>
        </div>
    </div>
</div>

</x-layout>