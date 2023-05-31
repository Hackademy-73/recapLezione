<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Modifica Articolo {{$article->title}}</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 p-5 shadow">
                <form method="POST" action="{{route('updateArticle', compact('article'))}}">

                    @method('put')

                    @csrf

                    <div class="mb-3">
                        <label for="inputTitle" class="form-label">Titolo articolo</label>
                        <input name="title" type="text" class="form-control" id="inputTitle" aria-describedby="titleHelp" value="{{$article->title}}">
                    </div>
                    <div class="mb-3">
                        <label for="inputSubtitle" class="form-label">Sottotitolo</label>
                        <input name="subtitle" type="text" class="form-control" id="inputSubtitle" aria-describedby="subtitleHelp" value="{{$article->subtitle}}">
                    </div>

                    <div class="mb-3">
                        <label for="inputText" class="form-label">Testo</label>
                        <textarea name="text" id="inputText" class="form-control" cols="30" rows="10">{{$article->text}}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Modifica articolo</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>