<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use proyecto\Carousel;

use App\Categoria;

use View;

use Exception;
use Illuminate\Support\Facades\Mail;

class ContactoController extends Controller
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

        $sql3="SELECT * FROM categoria WHERE tipo_categoria=0";
        $categorias = DB::select($sql3);

        View::share ( 'categorias', $categorias );
        
        return view('contacto', compact('data'));
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
        $name=$request->name;
        $email=$request->email;
        $mensaje=$request->mensaje;

        $data = array(
        'name' => $name,'email' => $email, 'mensaje' => $mensaje
    );

      Mail::send('emails.welcome', $data, function ($message) {

        $message->from('ian.vinales26@gmail.com', 'Contacto Planetour');

        $message->to('ian.vinales26@gmail.com')->subject('Mensaje de Planetour');

    });
      return redirect('/contacto')-> with('status', 'El mensaje ya fue enviado, Gracias por contactarnos');
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
