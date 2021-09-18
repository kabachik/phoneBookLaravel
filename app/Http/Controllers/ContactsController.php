<?php

namespace App\Http\Controllers;

use App\Models\contact_models;
use App\Models\Phones;
use Illuminate\Http\Request;


class ContactsController extends Controller
{
    public function home(){
        $contacts = contact_models::orderBy('name')->simplePaginate(9)->withQueryString();
//        $phones = Phone::all()->phone;
        return view('home', compact('contacts'));
    }

    public function sort($fieldName){
        $contacts = contact_models::orderBy($fieldName, 'desc')->simplePaginate(9);
        return view('home', compact('contacts'));
    }


    public function send(Request $request){
        $this->validate($request,[
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);
        $contact = new contact_models();
        $contact->name = $request->input('name');
        $contact->surname = $request->input('surname');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->category = $request->input('category');

        $contact->save();

        return redirect()->route('home');
    }

    public function edit($id, Request $request){
        $contact = contact_models::find($id);
        $contact->name = $request->input('name');
        $contact->surname = $request->input('surname');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->category = $request->input('category');

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

    public function category(Request $request){
        $contacts = contact_models::where('category', $request->orderBy)->get();

        if($request->ajax()){
            return view('ajax.category', [
               'contacts' => $contacts
            ])->render();
        }

        return view('home', compact('contacts'));
    }

//    public function xml(){
//        $contacts = contact_models::all();
//
//
//        return response()->xml($contacts);
//    }

}
