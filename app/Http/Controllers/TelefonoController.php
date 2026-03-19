<?php

namespace App\Http\Controllers;
use App\Models\Telefono;
use App\Models\Cliente;
use Illuminate\Http\Request;

class TelefonoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $telefono=Telefono::all();
        return view('telefono.index')->with('telefono',$telefono);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    return view('telefono.create');
    //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevotelefono=new Telefono;
        $nuevotelefono->codigocliente=$request->codigocliente;
        $nuevotelefono->numero=$request->get('numero');
        $nuevotelefono->save();
        return redirect('/telefono');

        $cliente->codigocliente = $request->get('codigocliente');
        $cliente->nombrecliente = $request->get('nombrecliente');
        $cliente->apellidocliente = $request->get('apellidocliente');
        $cliente->ciudadcliente = $request->get('ciudadcliente');
        $cliente->save();
        return redirect('/cliente');
        //
    }

    /**
     * Display the specified resource.
     */
public function show(string $id)
{
    $cliente = Cliente::find($id);
    $telefonos = Telefono::where('codigocliente', $cliente->codigocliente)->get();

    return view('telefono.index')
        ->with('telefono', $telefonos)
        ->with('cliente', $cliente);
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $telefono=Telefono::find($id);
        return view('telefono.edit')->with('telefono',$telefono);
            //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $telefono = Telefono::find($id);
        $telefono->codigocliente=$request->get('codigocliente');
        $telefono->numero=$request->get('numero');
        $telefono->save();

        return redirect('/telefono');//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminado=Telefono::find($id);
        $eliminado->delete();
        return redirect('/telefono');//
    }
}
