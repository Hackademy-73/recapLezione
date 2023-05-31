<x-layout>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center">Ciao, contattaci!</h1>
            </div>
        </div>
    </div>
    <div class="container my-5">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-6 p-5 shadow">
                <form method="POST" action="{{route('sendMail')}}">
                    @csrf

                    <div class="mb-3">
                        <label for="inputText" class="form-label">Nome e cognome</label>
                        <input name="name" type="text" class="form-control" id="inputText" aria-describedby="textHelp">
                      </div>
                    <div class="mb-3">
                      <label for="inputEmail" class="form-label">Email address</label>
                      <input name="email" type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="inputDescription" class="form-label">Email address</label>
                        <textarea name="description" id="inputDescription" class="form-control" cols="30" rows="10"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Invia mail</button>
                  </form>
            </div>
        </div>
    </div>
</x-layout>