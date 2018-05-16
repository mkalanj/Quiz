<?php

namespace App\Http\Controllers;
use App\Kategorijas;
use Illuminate\Http\Request;

class KategorijasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $kategorija = Kategorijas::all();
        return view('kategorijas.index',compact('kategorija'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    public function create()
    {
        return view('kategorijas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {
        $this->validate($request,[
          'Naziv_cat'=>'required|string|max:255',
          
        ]);
        Kategorijas::create($request->all());
        return redirect()->route('kategorijas.index')->with('success','Kategorija uspjesno kreirana');
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $kategorija = Kategorijas::find($id);
      return view('kategorijas.show',compact('kategorija'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategorija = Kategorijas::find($id);
        return view('kategorijas.edit',compact('kategorija'));
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
        $this->validate($request,[
          'Naziv_cat' => 'required',
        
        ]);
        Kategorijas::find($id)->update($request->all());
        return redirect()->route('kategorijas.index')->with('success','Kategorija uspjesno izmjenjena');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategorijas::find($id)->delete();
        return redirect()->route('kategorijas.index')->with('success','Kategorija uspjesno obrisana');
    
    }
}
