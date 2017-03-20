<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Save_mail;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show_mails(){

        $mails=Save_mail::all();
        return view('admin.show_mail')->with('emails',$mails);
    }
}
