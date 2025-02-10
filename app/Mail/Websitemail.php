<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Websitemail extends Mailable
{
    use Queueable, SerializesModels;

    public $subject, $body;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $subject, $body)
    {
        $this->subject = $subject;
        $this->body = $body;
    }

// Laravel ofera o clasa care faciliteaza trimiterea de email-uri folosing sistemul de views din laravel 

//Fuctia build este responsabila de creerea messajului email ului care urmeaza a fi trimis 
public function build()

{
    //"with" este folosit pentru a transmite date catre view-ul email in acest caz este trimis array-ul care contine subiectul mail ului 
    return $this->view('email.email')->with([
        'subject' => $this->subject
    ]);
}

}
