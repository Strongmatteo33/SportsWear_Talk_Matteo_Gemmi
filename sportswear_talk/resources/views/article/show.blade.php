<x-layout>

    <x-navbar/>
<div class="container-fluid p-4 bg-info text-center text-white">
    <div class="row justify-content-center">
        <div class="display1">
        <h1>{{$article->title}}</h1>
        </div>
    </div>
</div>
    <div class="container col-12 col-md-12 my-5">
        <div class="row justify-content-around">
                        <img class="img-fluid my-3" src="{{ Storage::url($article->image) }}" alt="...">
                            <div>
                                <p class="fst-italic text-secondary d-inline display-1">{{ $article->style }}</p>
                                <p class="fw-bold d-inline display-1">{{ $article->title }}</p>
                            </div>
                            <h5 class="fw-bold display-3">{{ $article->brand}}</h5>
                            <a href="{{ route('article.byCategory', ['category'=>$article->category->id ]) }}" class="text-grande text-muted fst-italic fw-bold text-capitalize"> {{ $article->category->name }} </a>
                        
                        <div class="text-muted justify-content-between allign-items-center text-grande my-4">
                            <p>Redatto il {{ $article->created_at->format('d/m/Y') }}</p>
                            <p>Da: <a href="{{ route('article.byEditor', ['editor'=>$article->user->id ]) }}" class="small text-muted fst-italic fw-bold text-capitalize"> {{ $article->user->name }} </a></p>
                        </div>
        @if(Auth::user() && Auth::user()->is_revisor)
            <a href="{{ route('revisor.acceptArticle', compact('article')) }}" class="btn btn-success text-white my-5">Accetta articolo</a>
            <a href="{{ route('revisor.rejectArticle', compact('article')) }}" class="btn btn-danger text-white my-5">Rifiuta articolo</a>
        @endif
        </div> 
        <hr>
    <p>{{$article->description}}</p>
    <div class="div text-center">
        <a class="btn btn-info text-white my-5" href="{{route('index')}}">Torna indietro</a>
    </div>

</div> 

</x-layout>