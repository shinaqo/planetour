<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cargo;


class CargoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Cargo::all();    
        return view('mantenedores/cargo/listado', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantenedores/cargo/crear');
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

            $cargo= new cargo();
            $cargo->nombre_cargo=$request->nombre_cargo;
            $cargo->save();
            return redirect()->route('cargo.index');
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
            $data_cargo=Cargo::find($id);
            return view('mantenedores/cargo/editar',compact('data_cargo'));
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

            $cargo = cargo::find($id);
            $cargo->nombre_cargo=$request->nombre_cargo;
            
            $cargo->save();
            return redirect()->route('cargo.index');
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
            $cargo = cargo::find($id);
            $cargo->delete();
            return redirect()->route('cargo.index');
        }catch(Exception $e) {
            return $this->response->errorInternal($e -> getMessage());
        }
    }
}
