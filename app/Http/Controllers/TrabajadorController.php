<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Trabajador;
use App\User;
use App\Cargo;
use Exception;


class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Trabajador::all();    
        return view('mantenedores/trabajador/listado', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cargo = Cargo::all();
        return view('mantenedores/trabajador/crear',compact('cargo'));
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
        try {
            if ($request->hasFile('ubicacion_trabajador')) {
            $file=$request->file('ubicacion_trabajador');
            $name=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/trabajador/',$name);
            
        }
        $id=Auth::user()->id;
        $trabajador= new Trabajador();
        $trabajador->nombre_trabajador=$request->nombre_trabajador;
        $trabajador->apellidoPa_trabajador=$request->apellidoPa_trabajador;
        $trabajador->apellidoMa_trabajador=$request->apellidoMa_trabajador;
        $trabajador->correo=$request->correo;
        $trabajador->numero=$request->numero;
        $trabajador->ubicacion_trabajador=$name;
        $trabajador->users_id=$id;
        $trabajador->cargo_id_cargo=$request->cargo_id_cargo;



            $trabajador->save();
            return redirect()->route('trabajador.index');

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
            $data_trabajador=Trabajador::find($id);
            $select_cargo= Cargo::all();
            return view('mantenedores/trabajador/editar',compact('data_trabajador','select_cargo'));
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

            $trabajador = Trabajador::find($id);
            $trabajador->nombre_trabajador = $request->nombre_trabajador;
            $trabajador->apellidoPa_trabajador = $request->apellidoPa_trabajador;
            $trabajador->apellidoMa_trabajador = $request->apellidoMa_trabajador;
            $trabajador->correo = $request->correo;
            $trabajador->numero = $request->numero;
            $trabajador->users_id = $identificador;
            $trabajador->cargo_id_cargo=$request->cargo_id_cargo;
            
            $trabajador->save();
            return redirect()->route('trabajador.index');
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
            //fala eliminar archivo
            $trabajador = trabajador::find($id);
            $ubicacion=$trabajador->ubicacion_trabajador;

            unlink('images/trabajador/'.$ubicacion);//acá le damos la direccion exacta del archivo
            $trabajador->delete();
            return redirect()->route('trabajador.index');
        }catch(Exception $e) {
            return $this->response->errorInternal($e -> getMessage());
        }
    }
}
