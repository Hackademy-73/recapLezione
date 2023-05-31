<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Dettaglio articolo {{$article->title}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
                    <div class="col-12 col-md-6">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <h5>{{$article->subtitle}}</h5>
                            <p>{{$article->text}}</p>

                            <a href="{{route('indexArticle')}}" class="btn btn-primary">Torna indietro</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</x-layout>