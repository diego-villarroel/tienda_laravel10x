<div class="modal-header">
    <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <form id="frmLogin" action="" method="post">
        {{ csrf_field() }}
        <div class="row mt-3 py-3">
            <div class="col">
                <div class="form-floating">
                    <input type="email" class="form-control form-control-sm" id="email" placeholder="Email">
                    <label for="email" class="form-label">Email</label>
                </div>

            </div>
        </div>
        <div class="row mb-3 py-3">
            <div class="col">
                <div class="form-floating">
                    <input type="password" class="form-control form-control-sm" id="password" placeholder="Clave">
                    <label for="password" class="form-label">Clave</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col text-end">
                <button class="btn btn-sm btn-success">Login</button>
                <button class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </form>
</div>
