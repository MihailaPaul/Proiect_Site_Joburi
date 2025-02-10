<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AlegereItem;

class AdminAlegereController extends Controller
{
    public function index()
    {
         $date_alegere =AlegereItem::get();
        return view("Admin.alegere",compact('date_alegere'));
    }

    public function creare()
    {
        return view("Admin.alegere_creare");
    }

    public function salvare(Request $request)
    {
        $request->validate([
            'simbol' => 'required',
            'titlu' => 'required',
            'text' => 'required'
          ]);

         $alegere= new AlegereItem();
         $alegere->simbol_alegere = $request->simbol;
         $alegere->titlu_alegere = $request->titlu;
         $alegere->text_alegere = $request->text;
         $alegere->save();

         return redirect()->route('admin_alegere')->with('success','Elementul a fost salvat cu succes! ');
        
    }

    public function editare($id){
        $alegere_element = AlegereItem::where('id',$id)->first();
        return view('Admin.alegere_editare',compact('alegere_element'));
    }

    public function modificare(Request $request, $id)
    { $alegere = AlegereItem::where('id',$id)->first();

        $request->validate([
        'simbol' => 'required',
        'titlu' => 'required',
        'text' => 'required'
      ]);
      $alegere->simbol_alegere = $request->simbol;
      $alegere->titlu_alegere = $request->titlu;
      $alegere->text_alegere = $request->text;
      $alegere->update();

      return redirect()->route('admin_alegere')->with('success','Elementul a fost modificat cu succes! ');

    }

    public function stergere($id){
        
        $alegere_element = AlegereItem::where('id',$id)->delete();

        return redirect()->route('admin_alegere')->with('success','Elementul a fost stears cu succes! ');
    }
}
