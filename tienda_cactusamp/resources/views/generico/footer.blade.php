        
        <footer class="cactus-footer mb-2 mt-3 container-fluid">
            <div class="p-4 row">
                <a class="text-dark cactus-brand mt-auto mb-auto text-center col-12 col-lg-2" href="/">
                    <img src="/img/logo/cactus_logo_negro.png" class="" alt="" width="100px" height="100px">
                </a>

                <div class="redes fs-4 mt-auto text-center align-items-end col-12 col-lg-8">
                    <a class="link-dark redes_icon" target="_blank" href="https://www.instagram.com/cactusamps/"><i class="bi bi-instagram"></i></a>
                    <a class="link-dark mx-4 redes_icon" target="_blank" href="https://www.facebook.com/CactusAMPS"><i class="bi bi-facebook"></i></a>
                    <a class="link-dark redes_icon" target="_blank" href="https://wa.me/541131187394"><i class="bi bi-whatsapp"></i></a>
                </div>

                <div class="links-cactus mt-4 mt-lg-0 col-12 col-lg-2">
                    <a class="btn btn-outline-dark" href="/artistas">Artistas</a>
                    <a class="btn btn-outline-dark" href="/productos">Productos</a>
                    <a class="btn btn-outline-dark" href="/nosotros">Nosotros</a>
                    <a class="btn btn-outline-dark" href="/contacto">Contactanos</a>
                </div>
            </div>
            
            <div class="creado mb-2 pb-3 text-center">
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
    @elseif ( $_SERVER['REQUEST_URI'] == '/checkout' ) 
    <script src="/js/checkout.js?v={{rand()}}"></script>
    <script>
        eventosCheckout();
    </script>
    @endif
</html>