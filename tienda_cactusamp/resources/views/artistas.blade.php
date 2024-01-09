@include('/generico/header')
    <main>
        <section class="px-4">
            <br><h4><i>Artistas que eligieron nuestros productos</i></h4>
            <div class="layout-responsive my-4">
                @for ($i = 0; $i<$artistas; $i++)
                    <div class="card">
                        <img src="https://images.unsplash.com/photo-1603871165848-0aa92c869fa1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=772&q=80" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Artista {{$i}}</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Seguir</a>
                        </div>
                    </div>
                @endfor
            </div>
            
        </section>
    </main>
@include('/generico/footer')