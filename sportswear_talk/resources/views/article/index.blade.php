<x-layout>

    <x-navbar/>
<div class="container-fluid p-4 bg-info text-center text-white">
    <div class="row justify-content-center">
        <div class="display-1">
        <h1>I nostri articoli</h1>
        </div>
    </div>
</div>
    <div class="container col-12 my-5">
        <div class="row justify-content-center">
            <div class="d-flex">
                @if(count($articles) > 0)
                @foreach($articles as $article)
                <a class="card-link text-decoration-none text-reset" href="{{route('show', compact('article'))}}">
                    <div class="card border-0 card-hover me-3" style="width: 20rem;">
                        <img class="card-img-top" src="{{ Storage::url($article->image) }}" alt="...">
                        <div class="card-body">
                            <div class="d-flex">
                                <p class="card-text col-6">{{ $article->style }} </p>
                                <p class="card-text">{{ $article->title }}</p>
                            </div>
                            <h5 class="card-title">{{ $article->brand}}</h5>
                            <a href="{{ route('article.byCategory', ['category'=>$article->category->id ]) }}" class="small text-muted fst-italic fw-bold text-capitalize"> {{ $article->category->name }} </a>
                        </div>
                        <div class="card-footer text-muted justify-content-between allign-items-center">
                             <p>Redatto il {{ $article->created_at->format('d/m/Y') }}</p>
                             <p>Da: <a href="{{ route('article.byEditor', ['editor'=>$article->user->id ]) }}" class="small text-muted fst-italic fw-bold text-capitalize"> {{ $article->user->name }} </a></p>
                        </div>
                    </div> 
                </a>
                @endforeach
                @else
                    <div class="col-12 text-center">
                        <h2>Nessun articolo disponibile.</h2>
                    </div>
                @endif
            </div> 
        </div>
    </div>
        

</x-layout>