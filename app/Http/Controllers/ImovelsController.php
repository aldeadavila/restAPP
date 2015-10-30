<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;
use App\Models\Foto;
use App\Models\Caracteristica;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ImovelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Imovels = \App\Models\Imovel::get();
        return response() -> json([
                "msg" => "Success",
                "Imovels" => $Imovels -> toArray()
            ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $imovel = new Imovel();
        $imovel -> tipo_de_imovel = $request -> tipo_de_imovel;
        $imovel -> negocio = $request -> negocio;
        $imovel -> cidade = $request -> cidade;
        $imovel -> bairro = $request -> bairro;
        $imovel -> valor = $request -> valor;
        $imovel -> area = $request -> area;
        $imovel -> descricao = $request -> descricao;
        $imovel -> status = $request -> status;
        $imovel -> user_id = 1;
        $imovel -> save();

        /*$foto = new Foto();
        $foto -> ruta = $request -> ruta;
        $foto -> nome = $request -> nome;
        $foto -> nome = $descricao -> descricao; */

        $caracteristicas = new Caracteristica();
        $caracteristicas -> imovel_id = $request -> id;
        $caracteristicas -> caracteristica_id = $request -> value;

         return response()->json(array(
                "msg" => "Success",
                "id" => $imovel -> id
            ), 200);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $imovel = Imovel::where('id', $id)->first();
        $fotos = $imovel->fotos()->get();
        $caracteristicas = $imovel->caracteristicas()->get();
        $item = [$imovel, $fotos, $caracteristicas];

        return $item;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
