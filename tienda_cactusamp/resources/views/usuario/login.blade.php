@include('/generico/header')
    @if (!isset($login_data) || empty($login_data))
    <div class="row justify-content-center">
        <div class="col-6">
            <h1 class="text-center" id="exampleModalLabel" >Login</h1>
            <form id="frmLogin" action="/ingresar" method="post">
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
                        <button class="btn btn-sm btn-outline-success">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @else
        <p>Hola {{ $login_data[0]->nombre }} {{ $login_data[0]->apellido }}!</p>
        <p>Si deseas cambiar de usuario puedes hacer click acá: <a class="link" href="/cerrar-sesion">Link</a></p>
    @endif
    <div class="row justify-content-center my-5">
        <div class="col-10">
        <h5>Detalle del Carrito</h5>
        <table class="table">
            <thead>
                <tr>
                    <th class="col-1 text-center">Cantidad</th>
                    <th class="col-4">Título</th>
                    <th class="col-6">Opciones de Producto</th>
                    <th class="col-1 text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td>Cactus Amp 50w</td>
                    <td>
                        <li>6L6</li>
                        <li>Tipo Marshall</li>
                    </td>
                    <td class="text-center"><button class="btn btn-sm btn-outline-secondary"><i class="bi bi-trash3"></i></button></td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <div class="row">

        <div class="col text-center">
                <button class="btn btn-success">Continuar Compra</button>
            </div>
    </div>
@include('/generico/footer')