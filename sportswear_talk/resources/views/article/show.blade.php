<x-layout>

    <x-navbar/>
<div class="container-fluid p-4 bg-info text-center text-white">
    <div class="row justify-content-center">
        <div class="display1">
        <h1>{{$article->title}}</h1>
        </div>
    </div>
</div>
    <div class="container  my-5">
        <div class="row justify-content-around container">
                        <img class="my-3 w-50 h-auto mx-auto " src="{{ Storage::url($article->image) }}" alt="...">
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
            @if($article->is_accepted)
            @else
                <a href="{{ route('revisor.acceptArticle', compact('article')) }}" class="btn btn-success width-button text-white my-5 rounded-5">Accetta articolo</a>
                <a href="{{ route('revisor.rejectArticle', compact('article')) }}" class="btn btn-danger width-button text-white my-5 rounded-5">Rifiuta articolo</a>
            @endif
        @endif
        </div> 
        <hr>
    <p>{{$article->description}}</p>
    <div class="div text-center">
        <a class="btn width-torna-indietro btn-primary button-special my-5" href="{{route('index')}}">Torna indietro</a>
    </div>

</div> 

</x-layout>