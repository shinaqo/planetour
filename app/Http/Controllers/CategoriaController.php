<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categoria;

class CategoriaController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = categoria::all();    
        return view('mantenedores/categoria/listado', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantenedores/categoria/crear');
        
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

            $categoria= new categoria();
            $categoria->nombre_categoria=$request->nombre_categoria;
            $categoria->tipo_categoria=0;
            $categoria->save();
            return redirect()->route('categoria.index');
        } catch (Exception $e) {
            return $this->response->errorInternal($e -> getMessage());
            
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
            $data_categoria=categoria::find($id);
            return view('mantenedores/categoria/editar',compact('data_categoria'));
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

            $categoria = categoria::find($id);
            $categoria->nombre_categoria=$request->nombre_categoria;
            $categoria->tipo_categoria=$request->tipo_categoria;
            
            $categoria->save();
            return redirect()->route('categoria.index');
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
            $categoria = categoria::find($id);
            $categoria->delete();
            return redirect()->route('categoria.index');
        }catch(Exception $e) {
            return $this->response->errorInternal($e -> getMessage());
        }
    }
}
