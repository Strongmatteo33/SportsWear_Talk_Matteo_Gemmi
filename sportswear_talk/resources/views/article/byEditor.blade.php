<x-layout>

    <x-navbar/>
<div class="container-fluid p-4 bg-info text-center text-white">
    <div class="row justify-content-center">
        <div class="display1">
        <h1>Redattore {{$editor->name}}</h1>
        </div>
    </div>
</div>
    <div class="container col-12 my-5">
        <div class="row justify-content-center">
            <div class="d-flex">
                @if(count($articles) > 0)
                @foreach($articles as $article)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                    <a class="card-link text-decoration-none text-reset" href="{{route('show', compact('article'))}}">
                        <div class="card border-0 card-hover me-3" style="width: 20rem;">
                            <img class="card-img-top" src="{{ Storage::url($article->image) }}" alt="...">
                            <div class="card-body">
                                <div class="">
                                    <h5 class="card-title d-inline fw-bold">{{ $article->style }} </h5>
                                    <h5 class="card-title d-inline fw-bold">{{ $article->title }}</h5>
                                </div>
                                <h5 class="card-text">{{ $article->brand}}</h5>
                                @if($article->category)
                                    <a href="{{ route('article.byCategory', ['category'=>$article->category->id ]) }}" class="small text-muted fst-italic fw-bold text-capitalize"> {{ $article->category->name }} </a>
                                @else
                                    <p class="small text-muted fst-italic fw-bold text-capitalize">Non categorizzato</p>
                                @endif
                            </div>
                            <div class="card-footer text-muted d-flex justify-content-between allign-items-center">
                                Redatto il {{ $article->created_at->isoFormat('D MMMM YYYY', 'LL') }} da {{ $article->user->name}}
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
    </div>
        

</x-layout>