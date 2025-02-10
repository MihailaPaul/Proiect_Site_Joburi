<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class AdminSetariController extends Controller
{
    public function index()
    {
        $date_footer = Setting::where('id',1)->first();
        return view('Admin.setari', compact('date_footer'));
    }

    public function actualizare(Request $request)
    {
        $obiect = Setting::where('id',1)->first();
      

      $obiect->footer_locatie = $request->footer_locatie;
      $obiect->footer_telefon = $request->footer_telefon;
      $obiect->footer_email = $request->footer_email;
      $obiect->facebook = $request->facebook;
      $obiect->twitter = $request->twitter;
      $obiect->linkedin = $request->linkedin;
      $obiect->instagram = $request->instagram;
      $obiect->update();

      return redirect()->back()->with('success','Elemente din footer au fost modificate! ');
    }
}
