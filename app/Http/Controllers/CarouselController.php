<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
use Exception;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $data = Carousel::all();    
        return view('mantenedores/carousel/listado', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mantenedores/carousel/crear');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $titulo=$request->titulo_carousel;
//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
    foreach($_FILES["ubicacion_carousel"]['tmp_name'] as $key => $tmp_name)
    {
        //Validamos que el archivo exista
        if($_FILES["ubicacion_carousel"]["name"][$key]) {
            $filename = $_FILES["ubicacion_carousel"]["name"][$key]; //Obtenemos el nombre original del archivo
            $source = $_FILES["ubicacion_carousel"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
            
            $directorio = 'images/carousel'; //Declaramos un  variable con la ruta donde guardaremos los archivos
            
            //Validamos si la ruta de destino existe, en caso de no existir la creamos
            if(!file_exists($directorio)){
                mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");    
            }
            
            $dir=opendir($directorio); //Abrimos el directorio de destino
            $target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo
            
            //Movemos y validamos que el archivo se haya cargado correctamente
            //El primer campo es el origen y el segundo el destino
            if(move_uploaded_file($source, $target_path)) { 

                try {
                
        $carousel= new carousel();
        $carousel->titulo_carousel=$titulo;
        $carousel->ubicacion_carousel=$filename;

            $carousel->save();

        } catch (Exception $e) {
            return $this->response->errorInternal($e -> getMessage());
            
        }
                echo "El archivo $filename se ha almacenado en forma exitosa.<br>";
                } else {    
                echo "Ha ocurrido un error, por favor inténtelo de nuevo.<br>";
            }
            closedir($dir); //Cerramos el directorio de destino
        }
    }
            return redirect()->route('carousel.index');




        // try {
        //     if ($request->hasFile('ubicacion_carousel')) {
        //     $file=$request->file('ubicacion_carousel');
        //     $name=time().$file->getClientOriginalName();
        //     $file->move(public_path().'/images/',$name);
            
        // }

        // $carousel= new Carousel();
        // $carousel->titulo_carousel=$request->titulo_carousel;
        // $carousel->ubicacion_carousel=$name;

        //     $carousel->save();
        //     return redirect()->route('carousel.index');

        // } catch (Exception $e) {
        //     return $this->response->errorInternal($e -> getMessage());
            
        // }
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
            //fala eliminar archivo
            $carousel = Carousel::find($id);
            $ubicacion=$carousel->ubicacion_carousel;

            unlink('images/carousel/'.$ubicacion);//acá le damos la direccion exacta del archivo
            $carousel->delete();
            return redirect()->route('carousel.index');
        }catch(Exception $e) {
            return $this->response->errorInternal($e -> getMessage());
        }
    }
}