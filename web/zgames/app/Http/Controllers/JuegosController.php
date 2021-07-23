<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Juego;
class JuegosController extends Controller
{
    //
    /**
     * Va a obtener los juegos a partir de un id de consola
     */
    public function getJuegosByConsola(Request $request){
        $input = $request->all();
        $idConsola = $input["idConsola"];
        $consola = Consola::find($idConsola);
        return $consola->juegos()->get(); //SELECT J.* FROM juegos J INNER JOIN consolas C ON J.consola_id=C.id WHERE C.id=1

    }

    /**
     * Devolver todos los juegos del sistema
     */
    public function getJuegos(){
        return Juego::all();
    }

    /**
     * Crear nuevo Juego
     */
    public function save(Request $request){
        $input = $request->all();
        $nombre = $input["nombre"];
        $fecha = $input["fechaLanzamiento"];
        $apto = $input["aptoNinios"];   // apto_ninios = snake case, aptoNinios = camelizado
        $precio = $input["precio"];
        $descripcion = $input["descripcion"];
        $consolaId = $input["consolaId"];

        $juego = new Juego();
        $juego->nombre = $nombre;
        $juego->fecha_lanzamiento = $fecha;
        $juego->descripcion = $descripcion;
        $juego->apto_ninios = $apto;
        $juego->precio = $precio;
        $juego->consola_id = $consolaId;
        //Guardar en la bd
        $juego->save();
        return $juego;
    }
    /**
     * Eliminar un juego a partir de su id
     */
    public function remove(Request $request){
        $input = $request->all();
        $id = $input["id"];
        $juego = Juego::findOrFail($id);
        $juego->delete();
        return "ok";

    }
}
