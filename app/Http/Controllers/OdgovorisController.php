<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Odgovoris;
use App\Pitanjas;

class OdgovorisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $odgovori = Odgovoris::all();
        return view('odgovoris.index',compact('odgovori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Odgovoris $odgovoris)
    {
        //return view('pitanjas.create');
        
        $pitanja= Pitanjas::all();
       
        return view('odgovoris.create', compact('odgovoris', 'pitanja'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $pitanja= Pitanjas::all();

         $this->validate($request,[
          'pitanja_id'=>'required|integer',
          'odgovor_a'=>'required|string|max:255',
            'odgovor_b'=>'required|string|max:255', 
             'odgovor_c'=>'required|string|max:255',
             'odgovor_d'=>'required|string|max:255',
             
          ]);
        Odgovoris::create($request->all());
        return redirect()->route('odgovoris.index')->with('success','Odgovori uspjesno kreirana');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pitanja = Pitanjas::find($id_pitanja);
      return view('pitanjas.show',compact('pitanja'));
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
