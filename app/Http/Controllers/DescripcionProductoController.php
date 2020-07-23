<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use Illuminate\Support\Facades\DB;
use App\Slider;
use App\Categoria;

use View;

use Exception;

class DescripcionProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        try {
        $producto=Producto::find($id);

         $sql="SELECT carpeta,src,producto.nombre_producto,producto.precio_producto,producto.descripcion_producto,producto.importante_producto,producto.portada_producto,id_producto
         FROM slider
         INNER JOIN producto ON slider.producto_id_producto=producto.id_producto 
         WHERE id_producto=".$id;
         $data = DB::select($sql);
         $sql3="SELECT * FROM categoria WHERE tipo_categoria=0";
        $categorias = DB::select($sql3);

        View::share ( 'categorias', $categorias );

         return view('layouts/descripcionproducto', compact('data','producto'));
            // return view('layouts/descripcionproducto',compact('producto','slider'));
     } catch (Exception $e) {
        return $this->response->errorInternal($e -> gerMessage());
    }
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
