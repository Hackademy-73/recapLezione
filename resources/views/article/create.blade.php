<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Crea Articolo</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 p-5 shadow">
                <form method="POST" action="{{route('storeArticle')}}">
                    @csrf

                    <div class="mb-3">
                        <label for="inputTitle" class="form-label">Titolo articolo</label>
                        <input name="title" type="text" class="form-control" id="inputTitle" aria-describedby="titleHelp">
                    </div>
                    <div class="mb-3">
                        <label for="inputSubtitle" class="form-label">Sottotitolo</label>
                        <input name="subtitle" type="text" class="form-control" id="inputSubtitle" aria-describedby="subtitleHelp">
                    </div>

                    <div class="mb-3">
                        <label for="inputText" class="form-label">Testo</label>
                        <textarea name="text" id="inputText" class="form-control" cols="30" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Inserisci articolo</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>