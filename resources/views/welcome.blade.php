<x-layout>
    
    <div class="container-fluid text-center">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12"> 
                <h1 class="display-4">Presto.it</h1>
                
                <div class="row justify-content-center mt-3">
                    <div class="col-12 col-md-4">
                        @auth
                        <a class="btn btn-dark w-100 text-center fw-bolder my-5" href="{{route('create.article')}}">
                            Crea un articolo
                        </a>
                        @endauth
                    </div>
                </div>
                
            </div>
        </div>
    </div>  
    
</x-layout>