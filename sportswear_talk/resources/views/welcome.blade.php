<x-layout>

  <x-navbar/>
  @if(session('message'))
          <div class="alert alert-success text-center">
            {{  session('message') }}
          </div>
        @endif
  <div class="container col-12">
    <div class="row justify-content-center">
      <div class="d-flex">
        
        @if(count($articles) > 0)
        @foreach($articles as $article)
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
                <p class="small fst-italic text-capitalize my-2">
                  @foreach($article->tags as $tag)
                    #{{ $tag->name }}
                  @endforeach
                </p>
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