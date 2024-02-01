<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        @if (!is_null($carrusel) && !empty($carrusel))
            @foreach ($carrusel as $k => $prod)
                <div class="carousel-item @if ($k == 0) active @endif">
                    <div class="card mb-3 bg-success bg-opacity-75">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <img src="{{$prod->url_img}}" class="img-fluid rounded-start img-card-inicio" alt="...">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title">{{$prod->nombre_producto}}</h5>
                                    <p class="card-text">{{$prod->descripcion}}</p>
                                    <p class="card-text"><small class="text-body-secondary">Desde ${{$prod->precio}}</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>