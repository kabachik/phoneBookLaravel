<?php

namespace App\Http\Controllers;

use App\Models\contact_models;
use Illuminate\Http\Request;
use App\Models\Contact;

class EmployeeController extends Controller
{
    public function home(){
        return view('home');
    }

    public function send(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'gender' => 'required',
        ]);
        $contact = new contact_models();
        $contact->name = $request->input('name');
        $contact->surname = $request->input('surname');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->gender = $request->input('gender');

        $contact->save();

        return redirect()->route('/');
    }
}
