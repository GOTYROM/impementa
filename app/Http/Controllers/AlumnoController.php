<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos=Alumno::all();
        return view('alumno.index')->with('resultado',$alumnos);
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $alumno = new Alumno();
        $alumno->nombre=$request->get('nombre');
        $alumno->apellido=$request->get('apellido');
        $alumno->edad=$request->get('edad');
        $alumno->save();

        return redirect('/alumno');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $alumno=Alumno::find($id);
        return view('alumno.delete')->with('alumnoe',$alumno);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
            $alumno=Alumno::find($id);
            return view('alumno.edit')->with('alumnoe',$alumno);
            
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $alumno = Alumno::find($id);
        $alumno->nombre=$request->get('nombre');
        $alumno->apellido=$request->get('apellido');
        $alumno->edad=$request->get('edad');
        $alumno->save();

        return redirect('/alumno');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminado=Alumno::find($id);
        $eliminado->delete();
        return redirect('/alumno');
    }
}
