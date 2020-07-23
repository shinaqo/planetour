<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Producto;
use App\Pais;
use App\Categoria;
use Exception;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sql="SELECT id_producto,nombre_producto,precio_producto,tipoMoneda_producto,dias_producto,descripcion_producto,pais.nombre_pais,categoria.nombre_categoria,portada_producto
        from producto
        INNER JOIN pais ON producto.pais_id_pais=pais.id_pais
        INNER JOIN categoria ON producto.categoria_id_categoria=categoria.id_categoria";
        $data = DB::select($sql);
        return view('mantenedores/producto/listado', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     try {


        $select_pais = Pais::all();
        $select_categoria = Categoria::all();
        return view('mantenedores/producto/crear',compact('select_pais','select_categoria'));
    }catch(Exception $e) {
        return $this->response->errorInternal($e -> getMessage());
    }
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
         if ($request->hasFile('portada_producto')) {
            $file=$request->file('portada_producto');
            $name=$file->getClientOriginalName();
            $file->move(public_path().'/images/portadas/',$name);
            
        }
        
        
        $id=Auth::user()->id;
        $producto= new producto();
        $producto->nombre_producto=$request->nombre_producto;
        $producto->precio_producto=$request->precio_producto;
        $producto->tipoMoneda_producto=$request->tipoMoneda_producto;
        $producto->dias_producto=$request->dias_producto;
        $producto->destacado_producto=$request->destacado_producto;
        $producto->descripcion_producto=$request->descripcion_producto;
        $producto->importante_producto=$request->importante_producto;
        $producto->caracteristicasGira_producto=$request->caracteristicasGira_producto;
        $producto->portada_producto=$name;
        $producto->pais_id_pais=$request->pais_id_pais;
        $producto->categoria_id_categoria=$request->categoria_id_categoria;
        $producto->users_id=$id;
        
        $producto->save();

        return redirect()->route('producto.index');

    } catch (Exception $e) {
        //return $this->response->errorInternal($e -> getMessage());
        echo $e->getMessage();
    }
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
        try {
            $data_producto=Producto::find($id);
            $select_pais = Pais::all();
            $select_categoria = Categoria::all();
            return view('mantenedores/producto/editar',compact('select_pais','select_categoria','data_producto'));
        } catch (Exception $e) {
            return $this->response->errorInternal($e -> gerMessage());
        }
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
        try{
            $identificador=Auth::user()->id;

            $producto = producto::find($id);
            $producto->nombre_producto = $request->nombre_producto;
            $producto->precio_producto = $request->precio_producto;
            $producto->tipoMoneda_producto=$request->tipoMoneda_producto;
            $producto->dias_producto=$request->dias_producto;
            $producto->descripcion_producto = $request->descripcion_producto;
            $producto->importante_producto = $request->importante_producto;
            $producto->destacado_producto=$request->destacado_producto;
            $producto->caracteristicasGira_producto=$request->caracteristicasGira_producto;
            $producto->pais_id_pais = $request->pais_id_pais;
            $producto->categoria_id_categoria = $request->categoria_id_categoria;
            $producto->users_id=$identificador;
            
            $producto->save();
            return redirect()->route('producto.index');
        }catch(Exception $e) {
            return $this->response->errorInternal($e -> getMessage());
        } 


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $producto = producto::find($id);

            $producto->delete();
            return redirect()->route('producto.index');
        }catch(Exception $e) {
            return $this->response->errorInternal($e -> getMessage());
        }
    }
}

