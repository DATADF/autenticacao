<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;





class ContactFormController extends Controller
{
    public function store() {
        //Validação
       $message = request()->validate([

            'name'      => 'required',
            'email'     => 'required|email',
            'subject'   => 'required',
            'content'   =>'required|min:5'
        ]);

        // Enviar E-mail

        Mail::to('klaytonfantin@gmail.com')->queue(new MessageReceived($message));

        //return new MessageReceived($message);

        return 'Mensagem enviada';

    }
}
