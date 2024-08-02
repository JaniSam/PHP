<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CiudadController extends Controller
{
    /**
     *Display a listing of the resource.
     */
    public function index($mensaje = '')
    {
        $data['ciudades'] = Ciudad::paginate();
        return view('ciudad.index',compact('mensaje'))->with($data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Verifica si el campo 'ciudad' en la solicitud no está vacío
        if ($request->ciudad != "") {
            // Crea una nueva instancia del modelo Ciudad
            $ciudad = new Ciudad();

            // Asigna el valor del campo 'nombre' del request al atributo 'ciudad' del modelo
            $ciudad->nombre = $request->ciudad;

            // Guarda el modelo en la base de datos
            $ciudad->save();
            $mensaje = "Registro agregado correctamente";
        }
        //return redirect('/ciudad?m='. $mensaje);
        // Redirigir a la vista deseada con el mensaje en la sesión
        return redirect('/ciudad')->with('mensaje', $mensaje);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //Aquí se busca la ciudad en la base de datos utilizando el método findOrFail del modelo Ciudad
        $ciudad = Ciudad::findOrFail($id);

        /*
            Primero, se establece la zona horaria a 'America/Asuncion' para asegurarse de que la fecha y hora 
            obtenidas estén en la zona horaria correcta.
        */
        date_default_timezone_set('America/Asuncion');
        /*
            Luego, se obtiene la fecha y hora actuales en el formato "día - mes - año, hora am/pm".
        */
        $fecha = date("j - m - Y, g:i a");

        /*
            El método loadView toma dos argumentos: el primero es la vista Blade ciudad.reporteCiudad que 
            se utilizará como plantilla para el PDF, y el segundo es un array de datos que se pasarán a la vista.
            En este caso, se pasan la variable $ciudad y $fecha usando la función compact.
        */
        $pdf = Pdf::loadView('ciudad.reportCiudad',compact('ciudad','fecha'));

        /*
            Finalmente, el método stream envía el archivo PDF generado al navegador para que se muestre al usuario en lugar de descargarse directamente.
            El nombre del archivo sugerido para el PDF es 'ciudad' . $ciudad->id . 'pdf', que incluirá el ID de la ciudad en el nombre del archivo.
        */
        return $pdf->stream('ciudad'.$ciudad->id.'pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Busca la ciudad en la base de datos usando su ID.
        $ciudad = Ciudad::findOrFail($id);

        // Retorna la vista 'ciudad.edit' con los datos de la ciudad.
        /*
            Retorna la vista ciudad.edit y pasa los datos de la ciudad a la vista usando 
            la función compact. Esto permite que la vista acceda a la variable $ciudad.
        */
        return view('ciudad.edit', compact('ciudad'));
    }

    /**
     * Update the specified resource in storage.
     */
    #Representa la solicitud HTTP y contiene los datos enviados desde el formulario.
    public function update(Request $request, $id)
    {
        // Actualiza el registro de la ciudad en la base de datos con los nuevos datos.
        Ciudad::where('id', '=', $id)->update(['nombre' => $request->editCiudad]);

        // Define un mensaje de éxito.
        $mensaje = "Registro editado Correctamente ✌";

        // Redirige a la ruta '/ciudad' con el mensaje de éxito en la sesión.
        return redirect('/ciudad')->with('mensaje', $mensaje);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Elimina la ciudad de la base de datos por su ID.
        Ciudad::destroy($id);

        // Define un mensaje de éxito.
        $mensaje = "Registro Eliminado Correctamente";

        // Redirige a la ruta '/ciudad' con el mensaje de éxito en la sesión.
        return redirect('/ciudad')->with('mensaje', $mensaje);
    }
}
