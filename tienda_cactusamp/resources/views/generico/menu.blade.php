<header class="header-pegado">
    <nav class="nav justify-content-between py-3 pe-3">
        <a href="/">
            <img src="/img/logo/cactus_logo_blanco.png" class="nav_icon" alt="" width="50px" height="50px">
        </a>
    
        <input type="checkbox" name="" id="checkbox-hamburguer" />

        <div class="hamburger-lines mt-2">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </div>

        <ul class="nav nav-pills">
            <li class="nav-item">
                <a class="nav-link link-success" href="/">Inicio</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle link-success" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Productos</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item link-success" href="/productos">Todos</a></li>
                    <li><a class="dropdown-item link-success" href="/productos/amps">Amps</a></li>
                    <li><a class="dropdown-item link-success" href="/productos/pedales">Pedales</a></li>
                    <li><a class="dropdown-item link-success" href="/productos/otros">Otros</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link link-success" href="/artistas">Artistas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-success" href="/nosotros">Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link link-success" href="/contacto">Contactanos</a>
            </li>
            <li class="nav-item">
                <a class="btn btn-outline-success cactus_carrito" href="/checkout">
                    <i class="bi bi-cart"></i>
                    <span class="badge rounded-pill bg-warning text-dark" id="cantidad_carrito"></span>
                </a>
            </li>
        </ul>
    </nav>
</header>