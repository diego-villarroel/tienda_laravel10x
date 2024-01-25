function eventosfooter(){
    carrito = JSON.parse(localStorage.getItem("carrito"));
    if (carrito != null && carrito.length > 0) {
        console.log('aca');        
        document.getElementById('cantidad_carrito').innerHTML = carrito.length;
    } else {
        document.getElementById('cantidad_carrito').innerHTML = '';
    }
}