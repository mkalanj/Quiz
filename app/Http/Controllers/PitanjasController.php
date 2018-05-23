<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pitanjas;
use App\Kategorijas;

class PitanjasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pitanja = Pitanjas::all();
        return view('pitanjas.index',compact('pitanja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Pitanjas $pitanjas)
    {
                //return view('pitanjas.create');
        
        $kategorija= Kategorijas::all();
       
        return view('pitanjas.create', compact('pitanjas', 'kategorija'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                $kategorija= Kategorijas::all();

         $this->validate($request,[
          'Naziv_pit'=>'required|string|max:255',
          'kategorijas_id'=>'required|integer',
             
          ]);
        Pitanjas::create($request->all());
        return redirect()->route('pitanjas.index')->with('success','Pitanja uspjesno kreirana');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_pitanja)
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
    public function edit(Pitanjas $pitanjas)
    {
         $kategorija = Pitanjas::all()->first();
        return view('pitanjas.edit',compact('kategorija'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_pitanja)
    {
       $this->validate($request,[
          'Naziv_pit' => 'required',
           'kategorijas_id'=>'required',
        
        ]);
        Pitanjas::find($id_pitanja)->update($request->all());
        return redirect()->route('pitanjas.index')->with('success','Pitanja uspjesno izmjenjena');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pitanja)
    {
        Pitanjas::find($id_pitanja)->delete();
        return redirect()->route('pitanjas.index')->with('success','Pitanja uspjesno obrisana');
    }
}
