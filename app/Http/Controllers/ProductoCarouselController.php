<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Producto;
use App\Slider;

use Exception;

class ProductoCarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $sql="SELECT `id_slider`,`carpeta`,`src` ,producto.nombre_producto
       FROM `slider` 
       INNER JOIN producto ON producto_id_producto=producto.id_producto";
       $data = DB::select($sql);
       
       return view('mantenedores/productocarousel/listado', compact('data'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto=Producto::all();
        return view('mantenedores/productocarousel/crear', compact('producto'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




        $producto_id_producto=$request->producto_id_producto;
//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
        foreach($_FILES["ubicacion_carousel"]['tmp_name'] as $key => $tmp_name)
        {
        //Validamos que el archivo exista
            if($_FILES["ubicacion_carousel"]["name"][$key]) {
            $filename = $_FILES["ubicacion_carousel"]["name"][$key]; //Obtenemos el nombre original del archivo
            $source = $_FILES["ubicacion_carousel"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
            
            $directorio = 'images/slider/'.$producto_id_producto; //Declaramos un  variable con la ruta donde guardaremos los archivos
            
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
                    
                    $slider= new Slider();
                    $slider->carpeta=$producto_id_producto;
                    $slider->src=$filename;
                    $slider->producto_id_producto=$producto_id_producto;

                    $slider->save();

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
    return redirect()->route('productocarousel.index');



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
            $slider = Slider::find($id);
            $ubicacion=$slider->src;
            $carpeta=$slider->producto_id_producto;
            unlink('images/slider/'.$carpeta.'/'.$ubicacion);//acá le damos la direccion exacta del archivo
            $slider->delete();
            return redirect()->route('productocarousel.index');
        }catch(Exception $e) {
            return $this->response->errorInternal($e -> getMessage());
        }
    }
}
