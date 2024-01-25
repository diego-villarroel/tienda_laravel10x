@include('/generico/header')
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

    <script>
        
        for ( let i = 0; i < carrito_checkout.length; i++ ) {
            document.getElementById('detalle_compra').innerHTML += "<tr><td>"+carrito_checkout[i][1]+"</td><td class='text-center'><button class='btn btn-sm btn-outline-secondary' id='eliminar_prod_"+i+"' data-bs-toggle='modal' data-bs-target='#confirm_eliminar_producto' data-prod='"+i+"'><i class='bi bi-trash3' ></i></button></td></tr>";
        }
        
        let mensaje = "Hola Cactus Amp! Esta es mi lista de productos que quiero comprar: ";
        let wsp_url = "https://"+host_wsp+"/541133756124?text=";

        document.getElementById('finalizar_compra').addEventListener('click',function(){
            let nombre = document.getElementById('nombre').value;
            let apellido = document.getElementById('apellido').value;
            let email = document.getElementById('email').value;
            let telefono = document.getElementById('telefono').value;
            // VALIDACION DE CAMPOS
            let validacion = 0;
            if ( nombre == '' ) {
                document.getElementById('nombre').className += ' is-invalid';
                validacion++;
            } else {
                document.getElementById('nombre').className = 'form-control';
                validacion--;
            }
            if ( apellido == '' ) {
                document.getElementById('apellido').className += ' is-invalid';
                validacion++;
            } else {

                document.getElementById('apellido').className = 'form-control';
                validacion--;
            }
            if ( email == '' ) {
                document.getElementById('email').className += ' is-invalid';
                validacion++;
            } else {

                document.getElementById('email').className = 'form-control';
                validacion--;
            }
            if ( telefono == '' ) {
                document.getElementById('telefono').className += ' is-invalid';
                validacion++;
            } else {

                document.getElementById('telefono').className = 'form-control';
                validacion--;
            }
            // VALIDACIÓN DE QUE CARRITO TENGA PRODUCTOS
            if (carrito_checkout.length < 0) {
                validacion++;
            }
            // 
            if (validacion < 0) {
                for ( let i = 0; i < carrito_checkout.length; i++ ) {
                    mensaje += "\n - "+carrito_checkout[i][1]+"";
                }
                mensaje += "\nMi nombre es "+nombre+" "+apellido+", mi teléfono es "+telefono+" y mi email es "+email+".\nSaludos!";
                document.getElementById('link_wsp').setAttribute('href',wsp_url+encodeURIComponent(mensaje));
                document.getElementById('link_wsp').click();
            }
        })
    </script>
@include('/generico/footer')