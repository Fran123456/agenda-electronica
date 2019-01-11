<?php

namespace App\Http\Controllers\Dias;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DiasAsueto;
use Illuminate\Support\Facades\Auth;

class DiasAsuetoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $days = DiasAsueto::where('grupo' , Auth::user()->grupo)->get();
        return view('Asueto.AsuetoIndex', compact('days'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $days=date("d/m/Y");
        return view('Asueto.AsuetoCreate', compact('days'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dia = DiasAsueto::create($request->all());
        return redirect()->route('dayOFF.index')->with('agregado' , 'Elemento agregado correctamente');
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
        $dia = DiasAsueto::where('id' , $id)->first();
        return view('Asueto.AsuetoEdit', compact('dia'));
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
            $category = DiasAsueto::find($id);
            $category->fill($request->all())->save();
            return redirect()->route('dayOFF.index')->with('editado' , 'Elemento agregado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $del = DiasAsueto::find($id)->delete();
      return back()->with('eliminado','Eliminado con exito');
    }
}
