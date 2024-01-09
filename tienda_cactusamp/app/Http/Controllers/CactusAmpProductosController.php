<?php

namespace App\Http\Controllers;
use Request;

class CactusAmpProductosController extends Controller
{
    public static function vistaProductos(){
        $lugar = $_SERVER['REQUEST_URI'];
        $cantidad = 4;
        $filtro = '';
        $amp1['titulo'] = 'Cactus 50w';
        $amp1['img'] = 'img/cactus_amp2.jpg';
        $amp2['titulo'] = 'Cactus 25w';
        $amp2['img'] = 'img/cactus_amp2.jpg';
        $amps = [$amp1,$amp2];

        if (!empty($_GET) && isset($_GET['filtro'])) {
            $filtro = Request::input('filtro');
            $cantidad = $filtro == 'amps' ? 1 : $cantidad;
            $cantidad = $filtro == 'pedales' ? 2 : $cantidad;
            $cantidad = $filtro == 'otros' ? 3 : $cantidad;
        }
        return view('/tienda/productos',[ 'filtro' => $filtro, 'cantidad' => $cantidad , 'coleccion' => $amps]);

    }
}