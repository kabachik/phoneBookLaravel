<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\contact_models;
use App\Models\Phones;
use Illuminate\Http\Request;


class ContactsController extends Controller
{
    public function home(){
        $contacts = contact_models::orderBy('name')->simplePaginate(9)->withQueryString();
        $categories = Categories::get();
        return view('home', compact('contacts','categories'));
    }

    public function sort($fieldName){
        $contacts = contact_models::orderBy($fieldName, 'desc')->simplePaginate(9);
        $categories = Categories::get();

        return view('home', compact('contacts','categories'));
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
        $contact->category_id = $request->input('category');

        $contact->save();

        return redirect()->route('home');
    }

    public function edit($id, Request $request){
        $contact = contact_models::find($id);

        $contact->name = $request->input('name');
        $contact->surname = $request->input('surname');
        $contact->phone = $request->input('phone');
        $contact->email = $request->input('email');
        $contact->category_id = $request->input('category');

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

        $categories = Categories::get();

        $contacts = contact_models::where('name', 'LIKE', "%{$query}%")
            ->orWhere('surname', 'LIKE', "%{$query}%")
            ->orWhere('phone', 'LIKE', "%{$query}%")
            ->simplePaginate(9);

        return view('home', compact('contacts', 'categories'));
    }

    public function category(Request $request){
        $contacts = contact_models::where('category_id', $request->orderBy)->get();
        $categories = Categories::get();

        if($request->ajax()){
            return view('ajax.category', [
                'contacts' => $contacts,
                'categories' => $categories
            ])->render();
        }

        return view('home', compact('contacts','categories'));
    }

//    public function xml(){
//        $contacts = contact_models::all();
//
//
//        return response()->xml($contacts);
//    }

}
