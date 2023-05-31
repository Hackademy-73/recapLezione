<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Tutti  gli articoli</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
                @foreach ($articles as $article)
                <div class="col-12 col-md-6 d-flex justify-content-center mt-5">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                            <h5 class="card-title">{{$article->title}}</h5>
                            <h5>{{$article->subtitle}}</h5>
                            <p>{{$article->text}}</p>
                            <a href="{{route('showArticle', compact('article'))}}" class="btn btn-primary">Dettaglio</a>
                            <a href="{{route('editArticle', compact('article'))}}" class="btn btn-warning">Modifca articolo</a>
                            <a href="" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$article->id}}').submit()" class="btn btn-danger">Cancella articolo</a>
                            <form id="form-delete-{{$article->id}}" action="{{route('deleteArticle',compact('article'))}}" method="POST">
                                @method('delete')
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-layout>