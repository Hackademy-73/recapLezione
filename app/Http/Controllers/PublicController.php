<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PublicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function contactUs(){
        return view('contactUs');
    }

    //funzione collagata ad una rotta dio tipo post
    public function sendMail(Request $request){
        // dd($request->all());

        $name = $request->name;
        $email = $request->email;
        $description = $request->description;

        $data = compact('name','description');

        // $data = ['name'=>$name, 'description'=>$description];

        Mail::to($email)->send(new ContactMail($data));

        return redirect(route('homePage'))->with('message','Complimenti hai inviato correttamente la mail');
    }
}
