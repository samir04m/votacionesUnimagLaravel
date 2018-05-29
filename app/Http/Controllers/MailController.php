<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Redirect;
use Auth;
use Session;

class MailController extends Controller
{
    public function enviarCertificado(Request $request){
        // dd($request->all());
        global $emailto;
        $emailto = $request->all()['useremail'];
        Mail::send('mails.certificado', $request->all(), function($email){
            $email->subject('Certificado electoral');
            $email->to(Auth::User()->email);
        });
        Session::flash('message', 'El Certificado fue enviado al correo');
        return Redirect::to('votante');
    }
}
