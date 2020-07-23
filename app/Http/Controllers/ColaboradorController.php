<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Categoria;
use App\Colaborador;

use View;

use Exception;

class ColaboradorController extends Controller
{
 public function index()
 {
    $data = Colaborador::all();    

    $sql3="SELECT * FROM categoria WHERE tipo_categoria=0";
    $categorias = DB::select($sql3);

    View::share ( 'categorias', $categorias );
    return view('mantenedores/colaborador/listado',compact('data'));
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantenedores/colaborador/crear');
        
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
           if ($request->hasFile('ubicacion')) {
            $file=$request->file('ubicacion');
            $name=$file->getClientOriginalName();
            $file->move(public_path().'/images/colaborador/',$name);
            
        }

        $colaborador= new Colaborador();
        $colaborador->nombre_colaborador=$request->nombre_colaborador;
        $colaborador->ubicacion=$name;
        $colaborador->estado=$request->estado;
        $colaborador->categoria=$request->categoria;

        $colaborador->save();
        return redirect()->route('colaborador.index');

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
        try {
            $colaborador = colaborador::find($id);
            $colaborador->delete();
            return redirect()->route('colaborador.index');
        }catch(Exception $e) {
            return $this->response->errorInternal($e -> getMessage());
        }
    }
}
