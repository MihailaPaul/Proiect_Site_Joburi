<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscriber;
use App\Mail\WebsiteMail;
use Hash;

class AbonatController extends Controller
{
    public function trimite_email(Request $request)
    { 
        $valid = \Validator::make($request->all(),
        [
            'email'=>'required|email'
        ]);

        if(!$valid->passes())
        {
            return response()->json(['code'=>0,'error_message'=>$valid->errors()->toArray()]);
        }
        else
        {
           $verificare =  Subscriber::where('email',$request->email)->where('status',1)->count();
           if($verificare>0){
            return response()->json(['code'=>2,'error_message_2'=>(array)'Acest email este deja abonat!']);
           }
           else
           {
            $token = hash('sha256', time());
            $obiectiv = new Subscriber();
            $obiectiv->email = $request ->email;
            $obiectiv->token = $token;
            $obiectiv->status = 0;
            $obiectiv->save();

            $link_verificare = url('abonat/verifica/'.$request->email.'/'.$token);

            $subject = 'Verificare Abonat';
            $message = 'Apasa pe link-ul de mai jos pentru a confirma abonarea:<br>';
            $message .= '<a href="'.$link_verificare.'">';
            $message .= $link_verificare;
            $message .= '</a>';

            \Mail::to($request->email)->send(new Websitemail($subject,$message));

            return response()->json(['code'=>1,'success_message'=>'Am trimis un email catre adresa ta pentru a confirma abonarea']);
           }
            
        }
    }

    public function verificare($email,$token)
    {
        $date_abonat = Subscriber::where('email',$email)->where('token',$token)->first();

        if($date_abonat)
        {
            $date_abonat->token = '';
            $date_abonat->status = 1;
            $date_abonat->update();
            return redirect()->route('acasa')->with('success','Abonarea ta a fost verificata!');
        }
        else
        {
            return redirect()->route('acasa');
        }
    }
}
