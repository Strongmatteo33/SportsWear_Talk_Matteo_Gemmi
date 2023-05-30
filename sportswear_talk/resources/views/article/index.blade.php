<x-layout>

    <x-navbar/>
    <div class="container-fluid p-4 bg-info text-center text-white">
        <div class="row justify-content-center">
            <div class="display-1">
                <h1>I nostri articoli</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row">
            @if(count($articles) > 0)
                @foreach($articles as $article)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <a class="card-link text-decoration-none text-reset" href="{{ route('show', compact('article')) }}">
                            <div class="card border-0 card-hover">
                                <img class="card-img-top" src="{{ Storage::url($article->image) }}" alt="...">
                                <div class="card-body">
                                    <div class="d-flex">
                                        <h5 class="card-title d-inline fw-bold">{{ $article->style }}</h5>
                                        <h5 class="card-title d-inline fw-bold">{{ $article->title }}</h5>
                                    </div>
                                    <h5 class="card-text">{{ $article->brand }}</h5>
                                    @if($article->category)
                                        <a href="{{ route('article.byCategory', ['category'=>$article->category->id ]) }}" class="small text-muted fst-italic fw-bold text-capitalize"> {{ $article->category->name }} </a>
                                    @else
                                        <p class="small text-muted fst-italic fw-bold text-capitalize">Non categorizzato</p>
                                    @endif
                                    <p class="small fst-italic text-capitalize my-2">
                                        @foreach($article->tags as $tag)
                                            #{{ $tag->name }}
                                        @endforeach
                                    </p>
                                </div>
                                <div class="card-footer text-muted justify-content-between align-items-center">
                                    <p>Redatto il {{ $article->created_at->format('d/m/Y') }}</p>
                                    <p>Da: <a href="{{ route('article.byEditor', ['editor'=>$article->user->id ]) }}" class="small text-muted fst-italic fw-bold text-capitalize">{{ $article->user->name }}</a></p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <h2>Nessun articolo disponibile.</h2>
                </div>
            @endif
        </div>
    </div>
</x-layout>