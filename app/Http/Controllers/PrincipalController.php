<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use planetour\Carousel;
use Exception;
use App\Producto;
use App\Categoria;
use View;


class PrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql="SELECT titulo_carousel,ubicacion_carousel FROM carousel";
        $data = DB::select($sql);
        $sql2="SELECT id_producto,nombre_producto,precio_producto,descripcion_producto,portada_producto,pais_id_pais,categoria_id_categoria,pais.nombre_pais FROM producto INNER JOIN pais ON pais_id_pais=pais.id_pais where destacado_producto='1' ";
        $producto = DB::select($sql2); 
        $sql3="SELECT * FROM categoria WHERE tipo_categoria=0";
        $categorias = DB::select($sql3); 
        View::share ( 'categorias', $categorias );
        return view('inicio', compact('data','producto'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
