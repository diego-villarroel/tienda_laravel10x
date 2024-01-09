<?php

namespace App\Http\Controllers;
use Request;

class CactusAmpController extends Controller
{
    public static function vistaNosotros(){
        // dd($_SERVER);
        $lugar = $_SERVER['REQUEST_URI'];
        return view('nosotros',['lugar' => $lugar]);
    }

    public static function vistaContacto(){
        $lugar = $_SERVER['REQUEST_URI'];
        return view('contacto',['lugar' => $lugar]);
    }

    public static function vistaArtistas(){
        $lugar = $_SERVER['REQUEST_URI'];
        $cantidad_artistas = 3;
        return view('artistas',['lugar' => $lugar, 'artistas' => $cantidad_artistas]);
    }
}