@include('/generico/header')
    <div class="row justify-content-center my-5">
        <div class="col-8">
        <h3>DETALLE DEL CARRITO</h3>
        <table class="table mt-4">
            <thead>
                <tr>
                    <th class="col-4 h4">Título</th>
                    <th class="col-1 h4 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody id="detalle_compra">
            </tbody>
        </table>
        </div>
    </div>
    <!-- <div class="row justify-content-center">
        <div class="col-6">
            <h4 class="text-center" id="exampleModalLabel" >Datos de contacto</h4>
            <form id="frmLogin" action="/datos_contacto" method="post">
                {{ csrf_field() }}
                <div class="row mt-3 py-3">
                    <div class="col">
                        <div class="form-floating">
                            <input type="email" class="form-control form-control-sm" id="email" placeholder="Email" name="email">
                            <label for="email" class="form-label">Email</label>
                        </div>
                    </div>
                </div>
                <div class="row mb-3 py-3">
                    <div class="col">
                        <div class="form-floating">
                            <input type="password" class="form-control form-control-sm" id="password" name="pass" placeholder="Clave">
                            <label for="password" class="form-label">Clave</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col text-center">
                        <button >Login</button>
                    </div>
                </div>
            </form>
        </div>
        <a class="btn btn-sm btn-outline-success" href="https://wa.me/?text=I%20am%20enquiring%20about%20the%20apartment%20listing"> wasap</a>
    </div> -->
    <div class="row">
        <div class="col text-center">
                <button class="btn btn-success">Continuar Compra</button>
            </div>
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
    <script>
        let carrito_checkout = JSON.parse(localStorage.getItem('carrito'));
        for ( let i = 0; i < carrito_checkout.length; i++ ) {
            document.getElementById('detalle_compra').innerHTML += "<tr><td>"+carrito_checkout[i][1]+"</td><td class='text-center'><button class='btn btn-sm btn-outline-secondary' id='eliminar_prod_"+i+"' data-bs-toggle='modal' data-bs-target='#confirm_eliminar_producto' data-prod='"+i+"'><i class='bi bi-trash3' ></i></button></td></tr>";
        }
        for ( let i = 0; i < carrito_checkout.length; i++ ) {
            document.getElementById('eliminar_prod_'+i).addEventListener('click',function(){
                let prod_a_eliminar = parseInt(this.getAttribute('data-prod'));
                document.getElementById('prod_a_eliminar').innerHTML = carrito_checkout[prod_a_eliminar][1];
                // 
                document.getElementById('confirm_eliminar_prod').addEventListener('click',function(){
                    carrito_checkout.splice(prod_a_eliminar,1)
                    localStorage.clear();
                    localStorage.setItem('carrito',JSON.stringify(carrito_checkout));
                    window.location.replace('/checkout');
                });
            })
        }
    </script>
@include('/generico/footer')