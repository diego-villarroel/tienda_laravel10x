function eventosinicio(){
    mobile();
}

function mobile(){
    let screen_width = window.screen.availWidth;
    if (screen_width > 1200) {
        let imagenes = document.getElementsByClassName('img-card-inicio');
        for ( img of imagenes) {
            img.classList.remove("img-card-inicio");
            img.classList.add("img-card-inicio-mobile");
            console.log(img.classList);
            console.log(window);
        }
    }
}