<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Mail\WebsiteMail;

class AdminAbonatController extends Controller
{
    public function abonati_vizualizare()
    {
        $abonati = Subscriber::where('status',1)->get();
        return view('admin.abonati', compact('abonati'));
    }

    public  function trimite_email()
    {
        return view('admin.abonati_trimite_email');
    }

    public  function trimite_email_salvare(Request $request)
    {   $request->validate([
        'subiect'=>'required',
        'mesaj'=>'required'
        ]);

        $subject = $request->subiect;
        $message = $request->mesaj;

        $toti_abonatii = Subscriber::where('status',1)->get();
        foreach($toti_abonatii as $element)
        {
            \Mail::to($element->email)->send(new Websitemail($subject,$message));
        }
       

        return redirect()->back()->with('success','Email-ul a fost trimis catre toti abonatii!');
    }

    public  function stergere($id)
    {
        Subscriber::where('id',$id)-> delete();
        return redirect()->back()->with('success','Abonatul a fost sters! ');
    }
}
