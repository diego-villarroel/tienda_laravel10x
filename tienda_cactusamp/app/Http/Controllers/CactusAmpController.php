<?php

namespace App\Http\Controllers;
use Request;
use DB;

class CactusAmpController extends Controller
{
    public static function vistaNosotros(){
        // dd($_SERVER);
        // $lugar = $_SERVER['REQUEST_URI'];
        // return view('nosotros',['lugar' => $lugar]);
        return view('nosotros');
    }

    public static function vistaContacto(){
        // $lugar = $_SERVER['REQUEST_URI'];
        // return view('contacto',['lugar' => $lugar]);
        return view('contacto');
    }

    public static function vistaArtistas(){
        $lugar = $_SERVER['REQUEST_URI'];
        $cantidad_artistas = 3;
        return view('artistas',['lugar' => $lugar, 'artistas' => $cantidad_artistas]);
    }

    public static function inicio() {
        $prod_estrellas = DB::select("SELECT * FROM productos WHERE prod_estrella = 1");
        return view('inicio',['carrusel' => $prod_estrellas]);
    }
}