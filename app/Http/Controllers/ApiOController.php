<?php
namespace App\Http\Controllers;
use App\Pitanjas;
use Illuminate\Http\Request;

class ApiPController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
     
     $pitanjas = Pitanjas::all();
     return response()->json($pitanjas);
    }
     public function create(Request $request)
     {
        $pitanja = new Pitanja;
       $pitanja->Naziv_pit= $request->Naziv_pit;
       $pitanja->kategorijas_id= $request->kategorijas_id;
       
       
       $pitanja->save();
       return response()->json($pitanja);
     }
     public function show($id_odgovoras)
     {
      
         
        $odgovori = Odgovoris::find($id_odgovoras);
        return response()->json($odgovori);
     }
     public function update(Request $request, $id_pitanja)
     { 
        $pitanja= Pitanja::find($id_pitanja);
        
        $pitanja->Naziv_pit = $request->input('Naziv_pit');
        
        $pitanja->save();
        return response()->json($pitanja);
     }
     public function destroy($id_pitanja)
     {
        $pitanja = Pitanjas::find($id_pitanja);
        $pitanja->delete();
         return response()->json('product removed successfully');
     }
    }

    





