<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Config;
use Session;
use App\Save_mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     *
     *
     */
    protected $messages = array();

    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    public function video($id)
    {
        return view('modal', ['id' => $id]);
    }

    public function sendMail(Request $request)
    {
//        $this->messages = array_dot(trans('Sentinel::validation.custom'));
//        return trans('validation');

        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|max:1500',
            'checkbox' => 'required'
        ]);
        $person="";
        if (isset($request->checkbox["'person'"])) {
            $person = "Частное лицо";
        }
        if (isset($request->checkbox["'company'"])) {
            $person = 'Фирма';
        }
        if(!isset($request->checkbox["'company'"])&&!isset($request->checkbox["'person'"])){
            $person = 'что то пошло не так сообщите администратору';
        }

        Mail::send('mails.send', ['person' => $person, 'name' => $request->name, 'content' => $request->message, 'email' => $request->email, 'number' => $request->vat, 'lang' => Config::get('app.locale')], function ($message) use ($request) {

            $message->from($request->email);
            $message->subject("Сообщение от MS express");
            $message->to('antwerpen2020@mail.ru');

        });


        Session::put('success', 'success');
        return redirect('/'.Config::get('app.locale'));
    }
    public function saveMail(Request $request){
        $this->validate($request, [
            'email_save' => 'required|email|max:255',
            'checkbox_save' => 'required'
        ]);

        $person="";
        if (isset($request->checkbox_save["'person'"])) {
            $person = "Частное лицо";
        }
        if (isset($request->checkbox_save["'company'"])) {
            $person = 'Фирма';
        }
        $mail=new Save_mail;
        $mail->email = $request->email_save;
        $mail->person =$person;
        $mail->save();
        Session::put('success_save', 'success');

        return redirect('/'.Config::get('app.locale'));    }
}


