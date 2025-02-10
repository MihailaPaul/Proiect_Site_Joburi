<?php

namespace App\Http\Controllers\Candidat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Candidate;
use App\Models\CandidateEducation;
use App\Models\CandidateSkill;
use App\Models\CandidateExperience;
use App\Models\CandidateDocument;
use Illuminate\Validation\Rule;
use Hash;
use Auth;

class CandidatController extends Controller
{
    public function meniu_candidat()

    { 
        return view('candidat.meniu');
    }

    public function editare_profil_candidat()
    {
        return view('candidat.editare_profil');
    }

    public function actualizare_profil_candidat(Request $request)
    {
        $date_profil_candidat = Candidate::where('id', Auth::guard('candidat')->user()->id)->first();
        $id=$date_profil_candidat->id;

        $request->validate([
            'nume_candidat' => 'required',
            'nume_utilizator' => ['required','alpha_dash',Rule::unique('candidates')->ignore($id)],
            'email' => ['required','email',Rule::unique('candidates')->ignore($id)],
          ]);

          if($request->hasFile('poza')){
            $request->validate([ 
                'poza' => 'image|mimes:jpg,jpeg,png,gif'
            ]);
            
            if(Auth::guard('candidat')->user()->poza != '')
            {
                unlink(public_path('uploads/'.$date_profil_candidat->poza));
            }
    
            $ext= $request->file('poza')->extension();
    
            $nume_final = 'poza_candidat_'.time().'.'.$ext;
    
            $request->file('poza')->move(public_path('uploads/'),$nume_final);
    
            $date_profil_candidat->poza = $nume_final;
          }
    
          $date_profil_candidat->nume_candidat = $request->nume_candidat;
          $date_profil_candidat->pozitie = $request->pozitie;
          $date_profil_candidat->nume_utilizator = $request->nume_utilizator;
          $date_profil_candidat->email = $request->email;
          $date_profil_candidat->biografie = $request->biografie;
          $date_profil_candidat->numar_telefon = $request->numar_telefon;
          $date_profil_candidat->tara = $request->tara;
          $date_profil_candidat->adresa = $request->adresa;
          $date_profil_candidat->oras = $request->oras;
          $date_profil_candidat->gen = $request->gen;
          $date_profil_candidat->data_nastere = $request->data_nastere;
          $date_profil_candidat->update();
    
          return redirect()->back()->with('success','Profilul a fost modificat cu succes! ');

    }


    public function editare_parola_candidat()
    {
        return view('candidat.editare_parola');
    }

    public function actualizare_parola_candidat(Request $request)
    {
        $request->validate([
            'parola' => 'required',
            'reintroducere_parola' => 'required|same:parola'
        ]);
        $date_profil_candidat = Candidate::where('id', Auth::guard('candidat')->user()->id)->first();
        $date_profil_candidat->password = Hash::make($request->parola);
        $date_profil_candidat->update();
        return redirect()->back()->with('success','Parola a fost modificata cu succes! ');
    }

    public function educatie()
    {
        $date_educatie =CandidateEducation::where('candidate_id',Auth::guard('candidat')->user()->id)->orderBy('id','desc')->get();
        return view('candidat.educatie',compact('date_educatie'));
    }

    public function creare_educatie()
    {
        return view('candidat.educatie_creare');
    }

    public function salvare_educatie(Request $request)
    {
        $request->validate([
            'nivel_invatamant' => 'required',
            'institutie' => 'required',
            'domeniu' => 'required',
            'data_terminare' => 'required'
        ]);

         $date_educatie = new CandidateEducation();
         $date_educatie->candidate_id =  Auth::guard('candidat')->user()->id;
         $date_educatie->nivel_invatamant = $request->nivel_invatamant;
         $date_educatie->institutie = $request->institutie;
         $date_educatie->domeniu = $request->domeniu;
         $date_educatie->data_terminare = $request->data_terminare;
         $date_educatie->save();
        
        return redirect()->route('educatie_candidat')->with('success','Informatia a fost adaugata! ');

    }

    public function editare_educatie($id)
    {
        $educatie_individuala = CandidateEducation::where('id',$id)->first();
        return view('candidat.educatie_editare', compact('educatie_individuala'));
    }

    public function actualizare_educatie(Request $request,$id)
    {
        $obiect = CandidateEducation::where('id',$id)->first();

        $request->validate([
            'nivel_invatamant' => 'required',
            'institutie' => 'required',
            'domeniu' => 'required',
            'data_terminare' => 'required'
        ]);

        $obiect->nivel_invatamant = $request->nivel_invatamant;
        $obiect->institutie = $request->institutie;
        $obiect->domeniu = $request->domeniu;
        $obiect->data_terminare = $request->data_terminare;
        $obiect->update();

        return redirect()->route('educatie_candidat')->with('success','Informatia a fost actualizata! ');
    }

    public function stergere_educatie($id)
    {
        CandidateEducation::where('id',$id)->delete();
        return redirect()->route('educatie_candidat')->with('success','Informatia a fost stearsa');
    }










    public function competente()
    {
        $date_competente =CandidateSkill::where('candidate_id',Auth::guard('candidat')->user()->id)->get();
        return view('candidat.competente',compact('date_competente'));
    }

    public function creare_competente()
    {
        return view('candidat.competente_creare');
    }

    public function salvare_competente(Request $request)
    {
        $request->validate([
            'competente' => 'required',
            'nivel_competente' => 'required',
        ]);

         $date_competente = new CandidateSkill();
         $date_competente->candidate_id =  Auth::guard('candidat')->user()->id;
         $date_competente->competente = $request->competente;
         $date_competente->nivel_competente = $request->nivel_competente;
         $date_competente->save();
        
        return redirect()->route('competente_candidat')->with('success','Informatia a fost adaugata! ');

    }

    public function editare_competente($id)
    {
        $competente_individuala = CandidateSkill::where('id',$id)->first();
        return view('candidat.competente_editare', compact('competente_individuala'));
    }

    public function actualizare_competente(Request $request,$id)
    {
        $obiect = CandidateSkill::where('id',$id)->first();

        $request->validate([
            'competente' => 'required',
            'nivel_competente' => 'required',
        ]);

        $obiect->competente = $request->competente;
        $obiect->nivel_competente = $request->nivel_competente;
        $obiect->update();

        return redirect()->route('competente_candidat')->with('success','Informatia a fost actualizata! ');
    }

    public function stergere_competente($id)
    {
        CandidateSkill::where('id',$id)->delete();
        return redirect()->route('competente_candidat')->with('success','Informatia a fost stearsa!');
    }






    public function experienta()
    {
        $date_experienta =CandidateExperience::where('candidate_id',Auth::guard('candidat')->user()->id)->orderBy('id','desc')->get();
        return view('candidat.experienta',compact('date_experienta'));
    }

    public function creare_experienta()
    {
        return view('candidat.experienta_creare');
    }

    public function salvare_experienta(Request $request)
    {
        $request->validate([
            'companie' => 'required',
            'pozitie' => 'required',
            'data_inceput' => 'required',
            'data_finalizare' => 'required',
        ]);

         $date_experienta = new CandidateExperience();
         $date_experienta->candidate_id =  Auth::guard('candidat')->user()->id;
         $date_experienta->companie = $request->companie;
         $date_experienta->pozitie = $request->pozitie;
         $date_experienta->data_inceput = $request->data_inceput;
         $date_experienta->data_finalizare = $request->data_finalizare;
         $date_experienta->save();
        
        return redirect()->route('experienta_candidat')->with('success','Informatia a fost adaugata! ');

    }

    public function editare_experienta($id)
    {
        $experienta_individuala = CandidateExperience::where('id',$id)->first();
        return view('candidat.experienta_editare', compact('experienta_individuala'));
    }

    public function actualizare_experienta(Request $request,$id)
    {
        $obiect = CandidateExperience::where('id',$id)->first();

        $request->validate([
            'companie' => 'required',
            'pozitie' => 'required',
            'data_inceput' => 'required',
            'data_finalizare' => 'required',
        ]);

        $obiect->companie = $request->companie;
         $obiect->pozitie = $request->pozitie;
         $obiect->data_inceput = $request->data_inceput;
         $obiect->data_finalizare = $request->data_finalizare;
        $obiect->update();

        return redirect()->route('experienta_candidat')->with('success','Informatia a fost actualizata! ');
    }

    public function stergere_experienta($id)
    {
        CandidateExperience::where('id',$id)->delete();
        return redirect()->route('experienta_candidat')->with('success','Informatia a fost stearsa!');
    }










    public function documente()
    {
        $date_documente =CandidateDocument::where('candidate_id',Auth::guard('candidat')->user()->id) ->get();
        return view('candidat.documente',compact('date_documente'));
    }

    public function creare_documente()
    {
        return view('candidat.documente_creare');
    }

    public function salvare_documente(Request $request)
    {
        $request->validate([
            'titlu' => 'required',
            'fisier' => 'required|mimes:pdf,doc,docx'
        ]);

        $ext= $request->file('fisier')->extension();
        $nume_final = 'document_'.time().'.'.$ext;
        $request->file('fisier')->move(public_path('uploads/'),$nume_final);


         $date_documente = new CandidateDocument();
         $date_documente->candidate_id =  Auth::guard('candidat')->user()->id;
         $date_documente->titlu = $request->titlu;
         $date_documente->fisier = $nume_final;
         $date_documente->save();
        
        return redirect()->route('documente_candidat')->with('success','Documentul a fost adaugat! ');

    }

    public function editare_documente($id)
    {
        $document_individual = CandidateDocument::where('id',$id)->first();
        return view('candidat.documente_editare', compact('document_individual'));
    }

    public function actualizare_documente(Request $request,$id)
    {
        $obiect = CandidateDocument::where('id',$id)->first();

        $request->validate([
            'titlu' => 'required'
        ]);

        if($request->hasFile('fisier')){
            $request->validate([ 
                'fisier' => 'required|mimes:pdf,doc,docx'
            ]);
          
            unlink(public_path('uploads/'.$obiect->fisier));
    
            $ext= $request->file('fisier')->extension();
            $nume_final = 'document_'.time().'.'.$ext;

            $request->file('fisier')->move(public_path('uploads/'),$nume_final);

            $obiect->fisier = $nume_final;
          }

        $obiect->titlu = $request->titlu;
        $obiect->update();

        return redirect()->route('documente_candidat')->with('success','Informatia a fost actualizata! ');
    }

    public function stergere_documente($id)
    {  
        $document_individual = CandidateDocument::where('id',$id)->first();
        unlink(public_path('uploads/'.$document_individual->fisier));
        CandidateDocument::where('id',$id)->delete();
        return redirect()->route('documente_candidat')->with('success','Informatia a fost stearsa!');
    }

    
}
