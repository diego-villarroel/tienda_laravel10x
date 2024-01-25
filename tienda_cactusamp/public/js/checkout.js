function eventosCheckout(){
    let carrito_checkout = JSON.parse(localStorage.getItem('carrito'));
    host_wsp();
    inicioCheckout();
    eliminarProducto();
}

function host_wsp(){
    let screen_width = window.screen.availWidth;
    let host_wsp = "wa.me";
    if (screen_width > 1200) {
        host_wsp = "web.whatsapp.com";
    }
}

function inicioCheckout(carrito_checkout) {

    if (carrito_checkout.length > 0) {
        document.getElementById('hay_compras').className = 'table mt-4';
        document.getElementById('finalizar_compra').className = 'btn btn-success';
        document.getElementById('carrito_vacio').className += ' d-none';
        document.getElementById('nombre').removeAttribute('disabled');
        document.getElementById('apellido').removeAttribute('disabled');
        document.getElementById('email').removeAttribute('disabled');
        document.getElementById('telefono').removeAttribute('disabled');
    } else {
        document.getElementById('hay_compras').className += ' d-none';
        document.getElementById('carrito_vacio').className = 'text-center';
        document.getElementById('finalizar_compra').className += ' disabled';
        document.getElementById('nombre').setAttribute('disabled',true);
        document.getElementById('apellido').setAttribute('disabled',true);
        document.getElementById('email').setAttribute('disabled',true);
        document.getElementById('telefono').setAttribute('disabled',true);
    }
}

function eliminarProducto(carrito_checkout) {
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
}