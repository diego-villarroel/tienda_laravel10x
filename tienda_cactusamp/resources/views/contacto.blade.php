@include('/generico/header')
    <main>
        <section class="primer_vista">

        <div class="row justify-content-center my-5">
            <div class="col-8 text-center">
                <h3>CONTACTO</h3>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
                            <label for="nombre">Tu nombre Completo</label>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                            <label for="email">Email</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="form-floating">
                            <select class="form-select mb-3" id="floatingSelect" aria-label="Floating label select example">
                                <option selected>Motivo del contacto</option>
                                <option value="CG">Consulta general</option>
                                <option value="S">Servicio</option>
                            </select>
                            <label for="floatingSelect">Motivo del contacto</label>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <!-- <label for="floatingTextarea">Escribí acá tu consulta</label> -->
                        <textarea class="form-control" placeholder="Escribí acá tu consulta" id="floatingTextarea" row="20"></textarea>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>
@include('/generico/footer')