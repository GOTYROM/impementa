<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cliente = Cliente::with('telefonos')->get();
    return view('Cliente.index')->with('dcliente', $cliente);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new Cliente();
        $cliente->codigocliente = $request->get('codigocliente');
        $cliente->nombrecliente = $request->get('nombrecliente');
        $cliente->apellidocliente = $request->get('apellidocliente');
        $cliente->ciudadcliente = $request->get('ciudadcliente');
        $cliente->save();
        return redirect('/cliente');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         $cliente=Cliente::find($id);
            return view('cliente.edit')->with('cliente',$cliente);//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cliente = Cliente::find($id);
        $cliente->codigocliente=$request->get('codigocliente');
        $cliente->nombrecliente=$request->get('nombrecliente');
        $cliente->apellidocliente=$request->get('apellidocliente');
        $cliente->ciudadcliente=$request->get('ciudadcliente');
        $cliente->save();

        return redirect('/cliente');//
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
          $eliminado=Cliente::find($id);
        $eliminado->delete();
        return redirect('/cliente');//
    }
}
