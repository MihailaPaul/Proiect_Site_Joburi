<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class AdminRecomandariController extends Controller
{
    public function index()
    {
         $date_recomandari =Testimonial::get();
        return view("Admin.recomandari",compact('date_recomandari'));
    }
    public function creare()
    {
        return view("Admin.recomandari_creare");
    }

    public function salvare(Request $request)
    {
        $request->validate([
            'nume' => 'required',
            'pozitie' => 'required',
            'comentariu' => 'required',
            'poza' => 'required|image|mimes:jpg,jpeg,png,gif'
          ]);

        $recomandari = new Testimonial();

          $ext= $request->file('poza')->extension();
          $nume_final = 'recomandare_'.time().'.'.$ext;
          $request->file('poza')->move(public_path('uploads/'),$nume_final);

         $recomandari->poza =$nume_final;
         $recomandari->nume = $request->nume;
         $recomandari->pozitie = $request->pozitie;
         $recomandari->comentariu = $request->comentariu;
         $recomandari->save();

         return redirect()->route('admin_recomandari')->with('success','Elementul a fost salvat cu succes! ');
        
    }

    public function editare($id){
        $recomandari_element = Testimonial::where('id',$id)->first();
        return view('Admin.recomandari_editare',compact('recomandari_element'));
    }

    public function modificare(Request $request, $id)
    { $recomandari = Testimonial::where('id',$id)->first();

        $request->validate([
        'nume' => 'required',
        'pozitie' => 'required',
        'comentariu' => 'required'
      ]);

      if($request->hasFile('poza')){
        $request->validate([ 
            'poza' => 'image|mimes:jpg,jpeg,png,gif'
        ]);
      
        unlink(public_path('uploads/'.$recomandari->poza));

        $ext= $request->file('poza')->extension();

        $nume_final = 'recomandare_'.time().'.'.$ext;

        $request->file('poza')->move(public_path('uploads/'),$nume_final);

        $recomandari->poza = $nume_final;
      }
      $recomandari->nume = $request->nume;
      $recomandari->pozitie = $request->pozitie;
      $recomandari->comentariu = $request->comentariu;
      $recomandari->update();

      return redirect()->route('admin_recomandari')->with('success','Elementul a fost modificat cu succes! ');

    }

    public function stergere($id){
        $recomandari_element = Testimonial::where('id',$id)->first();
        unlink(public_path('uploads/'.$recomandari_element->poza));
        $recomandari_element = Testimonial::where('id',$id)->delete();

        return redirect()->route('admin_recomandari')->with('success','Elementul a fost stearsa cu succes! ');
    }
}
