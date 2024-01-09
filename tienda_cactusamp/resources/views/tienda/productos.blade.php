@include('/generico/header')
<main>
    <section class="product-colection layout-generico">
        @foreach ($coleccion as $prod)
            <div class="producto">
                <img src="{{$prod['img']}}" alt="">
                <h5>{{$prod['titulo']}}</h5>
            </div>
        @endforeach
    </section>
</main>
@include('/generico/footer')