<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pais;

class PaisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Pais::all();    
        return view('mantenedores/pais/listado', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantenedores/pais/crear');
        
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

            $pais= new pais();
            $pais->nombre_pais=$request->nombre_pais;
            $pais->save();
            return redirect()->route('pais.index');
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
            $data_pais=pais::find($id);
            return view('mantenedores/pais/editar',compact('data_pais'));
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

            $pais = pais::find($id);
            $pais->nombre_pais=$request->nombre_pais;
            
            $pais->save();
            return redirect()->route('pais.index');
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
            $pais = pais::find($id);
            $pais->delete();
            return redirect()->route('pais.index');
        }catch(Exception $e) {
            return $this->response->errorInternal($e -> getMessage());
        }
    }
}
