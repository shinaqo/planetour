<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Illuminate\Support\Facades\DB;
use View;
use App\Categoria;

class DestinosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $sql="SELECT id_producto,nombre_producto,precio_producto,tipoMoneda_producto,dias_producto,descripcion_producto,portada_producto,pais.nombre_pais,categoria_id_categoria,categoria.nombre_categoria
        FROM `producto` 
        INNER JOIN categoria ON categoria_id_categoria=categoria.id_categoria
        INNER JOIN pais ON pais_id_pais=pais.id_pais
        WHERE categoria_id_categoria=$id";
        $data = DB::select($sql);
        $sql3="SELECT * FROM categoria WHERE tipo_categoria=0";
        $categorias = DB::select($sql3);

        $sql2="SELECT nombre_categoria from categoria WHERE id_categoria=$id";
        $data2=DB::select($sql2);
        View::share ( 'categorias', $categorias );
        return view('layouts/destinos', compact('data','data2'));
        
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
