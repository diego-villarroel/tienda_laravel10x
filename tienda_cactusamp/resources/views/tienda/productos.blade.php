@include('/generico/header')
<main>
    <section class="product-colection layout-generico pt-3">
        @foreach ($coleccion as $prod)
            <div class="producto" data-id="{{$prod->id}}" data-bs-toggle="modal" data-bs-target="#detalle_producto">
                <img class="cactus-tienda-img" src="@if (!is_null($prod->url_img)) {{ $prod->url_img }} @else /img/cactus_amp2.jpg @endif" alt="">
                <h5 class="text-center">{{$prod->nombre_producto}}</h5>
            </div>
        @endforeach
    </section>

    <div class="modal fade" id="detalle_producto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="titulo_producto" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="row">
                    <div class="col-10 col-lg-11 ps-5 mt-3">
                        <h4 class="modal-title" id="titulo_producto"></h4>
                    </div>
                    <div class="col-2 col-lg-1 mt-3">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="row cuerpo_de">
                    <div class="col-4 text-center">
                        IMG
                    </div>
                    <div class="col-8">
                        <div id="descrip_prod"></div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col text-center">
                        <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" id="agregar_carrito" class="btn btn-sm btn-success" data-id-prod="">+ Carrito</button>                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <form id="form_detalle_prod">
        <input type="hidden" id="token" value="{{ csrf_token() }}">
        <input type="hidden" name="id_prod">
    </form>
</main>
<script>
    // eventosTienda();
</script>
@include('/generico/footer')