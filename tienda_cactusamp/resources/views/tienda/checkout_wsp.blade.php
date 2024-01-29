@include('/generico/header')
    <div class="primer_vista">
        <input type="hidden" id="token" value="{{csrf_token()}}">
        <div class="row justify-content-center my-5">
            <div class="col-8">
                <h3>DETALLE DEL CARRITO</h3>
                <table class="table mt-4" id="hay_compras">
                    <thead>
                        <tr>
                            <th class="col-4 h4">Título</th>
                            <th class="col-1 h4 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody id="detalle_compra">
                    </tbody>
                </table>
                <small class="text-center" id="carrito_vacio">Sin productos</small>
            </div>
        </div>
        <div class="row justify-content-center my-5">
            <div class="col-8">
                <h3>TUS DATOS</h3>
                <div class="row">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
                            <label for="nombre">Tu nombre</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="apellido" placeholder="Tu apellido">
                            <label for="apellido">Tu apellido</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="telefono" placeholder="Teléfono">
                            <label for="telefono">Teléfono</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-center">
                <button class="btn btn-success" id="finalizar_compra">Continuar Compra por Whatsapp</button>
            </div>
        </div>
        <a href="" target="_blank" id="link_wsp"></a>

    </div>

    <div class="modal fade" id="confirm_eliminar_producto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="titulo_producto" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="row">
                    <div class="col-10 col-lg-11 ps-5 mt-3">
                        <h4 class="modal-title" id="titulo_producto">¿Estás Seguro/a?</h4>
                    </div>
                    <div class="col-2 col-lg-1 mt-3">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col text-center my-5">Estas por eliminar este hermoso producto de tu carrito:</div>
                        <h4 class="text-center" id="prod_a_eliminar"></h4>
                    </div>
                </div>
                <div class="row my-5">
                    <h4 class="text-center">¿¿¡¡ ESTÁS SEGURO/A !!??</h4>
                    <div class="col text-center">
                        <button type="button" class="btn btn-sm btn-secondary" id="cerrar_modal" data-bs-dismiss="modal">Cerrar</button>
                        <button type="button" id="confirm_eliminar_prod" class="btn btn-sm btn-danger" data-id-prod="">Confirmar</button>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('/generico/footer')