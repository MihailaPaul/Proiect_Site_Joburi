<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Article;

class AdminArticolController extends Controller
{
    public function index()
    {
         $date_articol = Article::get();
        return view("Admin.articol",compact('date_articol'));
    }

    public function creare()
    {
        return view("Admin.articol_creare");
    }

    public function salvare(Request $request)
    {
        $request->validate([
            'titlu' => 'required',
        // alpha_dash se asigura ca informatia din campul slug poate contine doar litere,numere, si linii/underscore fara spatii si alte caractere
            'slug' => 'required|alpha_dash|unique:articles',
            'scurta_descriere' => 'required',
            'descriere' => 'required',
            'poza' => 'required|image|mimes:jpg,jpeg,png,gif'
          ]);

        $articol = new Article();

          $ext= $request->file('poza')->extension();
          $nume_final = 'articol_'.time().'.'.$ext;
          $request->file('poza')->move(public_path('uploads/'),$nume_final);

         $articol->poza =$nume_final;
         $articol->titlu = $request->titlu;
         $articol->slug = $request->slug;
         $articol->scurta_descriere = $request->scurta_descriere;
         $articol->descriere = $request->descriere;
         $articol->vizualizari = 0;
         $articol->SEO_titlu = $request->SEO_titlu;
         $articol->SEO_descriere = $request->SEO_descriere;
         $articol->save();
         

         return redirect()->route('admin_articol')->with('success','Elementul a fost salvat cu succes! ');
        
    }

    public function editare($id){
        $articol_element = Article::where('id',$id)->first();
        return view('Admin.articol_editare',compact('articol_element'));
    }

    public function modificare(Request $request, $id)
    { $articol = Article::where('id',$id)->first();

        $request->validate([
        'titlu' => 'required',
        // Pentru modificarea slug ului sintaxa este diferita deoarece se doreste verificare ca noile
        // date introduse sa fie diferite de toate slug urile din celelalte intrari dar poate sa fie aceeasi la campul editat in momentul actual
        // Astfel se creaza un rule care aplica metoda de validare unique cu exceptia ca nu verifica si datele din linia cu id-ul corespunzator cu campul pe care il editam  
        'slug' => ['required','alpha_dash',Rule::unique('articles')->ignore($id)],
        'scurta_descriere' => 'required',
        'descriere'=>'required',
      ]);

      if($request->hasFile('poza')){
        $request->validate([ 
            'poza' => 'image|mimes:jpg,jpeg,png,gif'
        ]);
      
        unlink(public_path('uploads/'.$articol->poza));

        $ext= $request->file('poza')->extension();

        $nume_final = 'articol_'.time().'.'.$ext;

        $request->file('poza')->move(public_path('uploads/'),$nume_final);

        $articol->poza = $nume_final;
      }

      $articol->titlu = $request->titlu;
      $articol->slug = $request->slug;
      $articol->scurta_descriere = $request->scurta_descriere;
      $articol->descriere = $request->descriere;
      $articol->SEO_titlu = $request->SEO_titlu;
      $articol->SEO_descriere = $request->SEO_descriere;
      $articol->update();

      return redirect()->route('admin_articol')->with('success','Articolul a fost modificat cu succes! ');

    }

    public function stergere($id){
        $articol_element = Article::where('id',$id)->first();
        unlink(public_path('uploads/'.$articol_element->poza));
        Article::where('id',$id)-> delete();
        return redirect()->route('admin_articol')->with('success','Articolul a fost sters cu succes! ');
    }
}
