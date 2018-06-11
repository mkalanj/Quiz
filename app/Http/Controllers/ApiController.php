<?php
namespace App\Http\Controllers;
use App\Kategorijas;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
     
     $kategorijas = Kategorijas::all();
     return response()->json($kategorijas);
    }
     public function create(Request $request)
     {
        $kategorija = new Kategorija;
       $kategorija->Naziv_cat= $request->Naziv_cat;
       
       
       $kategorija->save();
       return response()->json($kategorija);
     }
     public function show($id)
     {
       
        $kategorija = Kategorijas::find($id);
        return response()->json($kategorija);
     }
     public function update(Request $request, $id)
     { 
        $kategorija= Kategorijas::find($id);
        
        $kategorija->Naziv_cat = $request->input('Naziv_cat');
        
        $kategorija->save();
        return response()->json($kategorija);
     }
     public function destroy($id)
     {
        $kategorija = Kategorijas::find($id);
        $kategorija->delete();
         return response()->json('product removed successfully');
     }
    }

    


