<?php

namespace App\Http\Controllers;
use Request;
use DB;

class CactusAmpProductosController extends Controller
{
    public static function vistaProductos(){        
        $filtro = explode('/',$_SERVER['REQUEST_URI']);
        $productos = [];
        if (count($filtro) < 3){
            $filtro = $filtro[1];
            $productos = DB::select("SELECT * FROM productos");
        } else {
            $filtro = $filtro[2];
            $productos = DB::select("SELECT id, url_img, nombre_producto FROM productos WHERE categorias = '".$filtro."'");
        }
        return view('/tienda/productos',[ 'filtro' => $filtro, 'coleccion' => $productos]);

    }

    public static function detalleProducto(){
        $id = Request::input('id_producto');
        $detalle = DB::select("SELECT * FROM productos WHERE id = '".$id."'");

        return json_encode($detalle);
    }

    public static function vistaCheckout(){
        return view('/tienda/checkout_wsp');
    }

    public static function confirmCompra(){
        $nombre = Request::input('nombre_comprador');
        $pedido = Request::input('pedido');
        return view('/tienda/checkout_wsp');
    }
}