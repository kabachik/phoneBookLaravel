<?php

namespace App\Http\Controllers;

use App\Models\contact_models;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function home(){
//        $contacts = contact_models::all();
        $contacts = contact_models::orderBy('name')->simplePaginate(9);
        return view('home', compact('contacts'));
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

        return redirect()->route('home');
    }

    public function edit($id, Request $request){
        $contact = contact_models::find($id);
        $contact->name = $request->input('name');
        $contact->surname = $request->input('surname');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->gender = $request->input('gender');

        $contact->save();

        return redirect()->route('home');
    }

    public function delete($id){
            $contact = contact_models::find($id);
            $contact->delete();
            return redirect()->route('home');
    }

    public function search(Request $request) {
        $query = $request->s;

        if(!$query){
            return redirect()->route('home');
        }

        $contacts = contact_models::where('name', 'LIKE', "%{$query}%")
            ->orWhere('surname', 'LIKE', "%{$query}%")
            ->orWhere('phone', 'LIKE', "%{$query}%")
            ->simplePaginate(9);

        return view('home', compact('contacts'));
    }

}
