<form action="">
    {{ csrf_field() }}
    <div class="row">
        <div class="col">
            <div class="form-floating">
                <input type="text" class="form-control" id="nombre" placeholder="Nombre" >
                <label for="floatingInputGrid">Nombre</label>
            </div>
        </div>
        <div class="col">
            <div class="form-floating">
                <input type="text" class="form-control" id="apellido" placeholder="Apellido" >
                <label for="floatingInputGrid">Apellido</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-floating">
                <input type="email" class="form-control" id="email" placeholder="name@example.com" value="mdo@example.com">
                <label for="floatingInputGrid">Email</label>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Clave">
                <label for="floatingInputGrid">Clave</label>
            </div>
        </div>
        <div class="col">
            <div class="form-floating">
                <input type="password" class="form-control" id="password_repeat" placeholder="Repetir Clave">
                <label for="floatingInputGrid">Repetir Clave</label>
            </div>
        </div>
    </div>
</form>