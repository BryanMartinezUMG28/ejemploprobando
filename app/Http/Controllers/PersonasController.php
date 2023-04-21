<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{

    public function index()
    {
        //Pagina de inicio de nuestro CRUD
        $datos = Personas::orderBy('paterno', 'desc')->paginate(3);
        return view ('inicio', compact('datos'));
    }


    public function create()
    {
        //El formulario que tenemos para agregar datos
        return view('agregar');
    }


    public function store(Request $request)
    {
        //Para guardar los datos en la base de datos.
        $personas = new Personas();
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "¡Agregado con Exito!");

    }


    public function show($id)
    {
        //Para obtener registro de tabla
        $personas = Personas::find($id);
        return view("eliminar", compact('personas'));

    }


    public function edit($id)
    {
        //Para poder traer los datos a editar y colocarlos en formulario
        $personas = Personas::find($id);
        return view("Actualizar", compact('personas'));

    }


    public function update(Request $request, $id)
    {
        //Metodo para actualizar datos en base de datos
        $personas = Personas::find($id);
        $personas->paterno = $request->post('paterno');
        $personas->materno = $request->post('materno');
        $personas->nombre = $request->post('nombre');
        $personas->fecha_nacimiento = $request->post('fecha_nacimiento');
        $personas->save();

        return redirect()->route("personas.index")->with("success", "¡Actualizado con exito");

    }

    public function destroy($id)
    {
        //Elimina registro
        $personas = Personas::find($id);
        $personas->delete();
        return redirect()->route("personas.index")->with("success", "¡Eliminado con exito!");
    }
}
