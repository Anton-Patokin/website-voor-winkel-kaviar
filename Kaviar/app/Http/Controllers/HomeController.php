<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $this->validate($request, [
            'name' => 'required|max:255',
            'mail' => 'required|email|max:255',
            'message' => 'required|max:1500',
        ]);
        Session::put('success', 'success');
        return view('welcome');
    }
}
