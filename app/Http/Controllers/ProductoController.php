<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Producto::all();
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
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'precio'=>'required',
            'descuento'=>'required',
            'etiqueta_id'=>'required'
        ]);

        $producto = new Producto;
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->descuento = $request->descuento;
        $producto->etiqueta_id = $request->etiqueta_id;

        $producto->save();

        return $producto;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Producto::findOrFail($id);
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
        $request->validate([
            'nombre'=>'required',
            'descripcion'=>'required',
            'precio'=>'required',
            'descuento'=>'required',
            'etiqueta_id'=>'required'
        ]);

        $producto = Producto::findOrFail($id);
        $producto->nombre = $request->nombre;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->descuento = $request->descuento;
        $producto->etiqueta_id = $request->etiqueta_id;

        $producto->save();

        return $producto;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();
        return $producto;
    }

    public function cargarProductosConImagenes()
    {

        $client = new Client(['base_uri' => 'http://localhost/prueba_daryl_ospina_api/public/api/']);
        $response = $client->request('GET', 'producto');
        $content = $response->getBody()->getContents();

        $productos = json_decode($content, true);

        for ($i = 0; $i < count($productos); ++$i){
            $response = $client->request('GET', 'etiqueta/'.$productos[$i]['etiqueta_id']);
            $content = $response->getBody()->getContents();
            $productos[$i]['etiqueta_id'] = json_decode($content);

            $response = $client->request('GET', 'imagen');
            $content = $response->getBody()->getContents();

            $imagenes = json_decode($content, true);
            $arrayImagenes = array();

            for ($j = 0; $j < count($imagenes); $j++){
                if ($imagenes[$j]["producto_id"] == $productos[$i]["id"]){
                    $arrayImagenes[] = $imagenes[$j];
                }
            }

            $productos[$i]["imagenes"] = $arrayImagenes;
        }

        return view('about', compact('productos'));
    }
}
