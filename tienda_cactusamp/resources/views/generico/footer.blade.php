        
        <footer class="cactus-footer mt-3 mb-2">
            <div class="marca p-5">
                <a class="text-dark cactus-brand" href="/">
                    <img src="/img/cactus_amp.jpg" class="" alt="" width="50px" height="50px"> CACTUS AMPS
                </a>

                <div class="redes fs-4 mt-2 mb-2 text-center align-items-end">
                    <a class="link-dark redes_icon" href=""><i class="bi bi-instagram"></i></a>
                    <a class="link-dark mx-4 redes_icon" href=""><i class="bi bi-facebook"></i></a>
                    <a class="link-dark redes_icon" href=""><i class="bi bi-whatsapp"></i></a>
                </div>

                <div class="links-cactus">
                    <a class="btn btn-outline-dark" href="/artistas">Artistas</a>
                    <a class="btn btn-outline-dark" href="/productos">Productos</a>
                    <a class="btn btn-outline-dark" href="/nosotros">Nosotros</a>
                    <a class="btn btn-outline-dark" href="/contacto">Contactanos</a>
                </div>
            </div>
            <div class="creado mt-2 mb-3 text-center">
                Creado por <a class="link-light" href="">DV_DEV</a>
            </div>
            
        </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="/js/footer.js?v={{rand()}}"></script>
    <script>
        eventosFooter();
    </script>
    @if ( $_SERVER['REQUEST_URI'] == '/productos' ) 
    <script src="/js/tienda.js?v={{rand()}}"></script>
    <script>
        eventosTienda();
    </script>
    @endif

    @if ( $_SERVER['REQUEST_URI'] == '/checkout' ) 
    <script src="/js/checkout.js?v={{rand()}}"></script>
    <script>
        eventosCheckout();
    </script>
    @endif
</html>